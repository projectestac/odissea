<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace core\moodlenet;

use context_course;
use core\http_client;
use core\oauth2\issuer;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use moodle_exception;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Http\Message\ResponseInterface;
use ReflectionMethod;
use stdClass;
use testing_data_generator;

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->dirroot . '/lib/tests/moodlenet/helpers.php');

/**
 * Unit tests for {@see \core\moodlenet\course_partial_sender}.
 *
 * @coversDefaultClass \core\moodlenet\course_partial_sender
 * @package    core
 * @copyright  2023 Huong Nguyen <huongnv13@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class course_partial_sender_test extends \advanced_testcase {

    /** @var testing_data_generator Data generator. */
    private testing_data_generator $generator;
    /** @var stdClass Course object. */
    private stdClass $course;
    /** @var context_course Course context instance. */
    private context_course $coursecontext;
    /** @var array List of activities. */
    private array $activities;
    /** @var issuer $issuer Dummy issuer. */
    private issuer $issuer;
    /** @var MockObject $mockoauthclient Mock OAuth client. */
    private MockObject $mockoauthclient;

    /**
     * Set up function for tests.
     */
    protected function setUp(): void {
        parent::setUp();

        $this->resetAfterTest();
        // Get data generator.
        $this->generator = $this->getDataGenerator();
        // Create course.
        $this->course = $this->generator->create_course(['shortname' => 'testcourse']);
        $this->coursecontext = context_course::instance($this->course->id);
        // Create activities.
        $this->activities[1] = $this->generator->create_module('page', ['course' => $this->course->id]);
        $this->activities[2] = $this->generator->create_module('page', ['course' => $this->course->id]);
        // Create mock issuer.
        $this->issuer = helpers::get_mock_issuer(1);
        // Create mock builder for OAuth2 client.
        $mockbuilder = $this->getMockBuilder('core\oauth2\client');
        $mockbuilder->onlyMethods(['get_issuer', 'is_logged_in', 'get_accesstoken']);
        $mockbuilder->setConstructorArgs([$this->issuer, '', '']);
        // Get the OAuth2 client mock.
        $this->mockoauthclient = $mockbuilder->getMock();
    }

    /**
     * Test prepare_share_contents method.
     *
     * @covers ::prepare_share_contents
     */
    public function test_prepare_share_contents(): void {
        global $USER;
        $this->setAdminUser();

        // Set get_file method accessibility.
        $method = new ReflectionMethod(course_partial_sender::class, 'prepare_share_contents');

        $httpclient = new http_client();
        $moodlenetclient = new moodlenet_client($httpclient, $this->mockoauthclient);

        $this->expectException(moodle_exception::class);
        $this->expectExceptionMessage(get_string('invalidcoursemodule', 'error'));

        // Test with valid share format and invalid course module id.
        $package = $method->invoke(new course_partial_sender(
            $this->course->id,
            $USER->id,
            $moodlenetclient,
            $this->mockoauthclient,
            [random_int(5, 30)],
            resource_sender::SHARE_FORMAT_BACKUP
        ));
        $this->assertEmpty($package);

        // Test with valid share format and valid course module ids.
        $package = $method->invoke(new course_partial_sender(
            $this->course->id,
            $USER->id,
            $moodlenetclient,
            $this->mockoauthclient,
            [$this->activities[1]->cmid, $this->activities[2]->cmid],
            resource_sender::SHARE_FORMAT_BACKUP
        ));
        $this->assertNotEmpty($package);

        // Confirm the expected stored_file object is returned.
        $this->assertInstanceOf(\stored_file::class, $package);
    }

    /**
     * Test get_resource_description method.
     *
     * @covers ::get_resource_description
     */
    public function test_get_resource_description(): void {
        global $USER;
        $this->setAdminUser();

        $course = $this->generator->create_course([
            'summary' => '<p>This is an example Moodle course description.</p>
<p>&nbsp;</p>
<p>This is a formatted intro</p>
<p>&nbsp;</p>
<p>This thing has many lines.</p>
<p>&nbsp;</p>
<p>The last word of this sentence is in <strong>bold</strong></p>'
        ]);
        $page = $this->generator->create_module('page', ['course' => $course->id]);

        // Set get_resource_description method accessibility.
        $method = new ReflectionMethod(course_partial_sender::class, 'get_resource_description');

        // Test the processed description.
        $httpclient = new http_client();
        $moodlenetclient = new moodlenet_client($httpclient, $this->mockoauthclient);
        $processeddescription = $method->invoke(new course_partial_sender(
            $course->id,
            $USER->id,
            $moodlenetclient,
            $this->mockoauthclient,
            [$page->cmid],
            resource_sender::SHARE_FORMAT_BACKUP
        ), $this->coursecontext);

        $this->assertEquals('This is an example Moodle course description.
 
This is a formatted intro
 
This thing has many lines.
 
The last word of this sentence is in bold', $processeddescription);
    }

    /**
     * Test share_resource() method.
     *
     * @dataProvider share_resource_provider
     * @covers ::share_resource
     * @covers ::log_event
     * @covers \core\moodlenet\moodlenet_client::create_resource_from_stored_file
     * @covers \core\moodlenet\moodlenet_client::prepare_file_share_request_data
     * @param ResponseInterface $httpresponse
     * @param array $expected
     */
    public function test_share_resource(ResponseInterface $httpresponse, array $expected): void {
        global $CFG, $USER;
        $this->setAdminUser();

        // Enable the experimental flag.
        $CFG->enablesharingtomoodlenet = true;

        // Set OAuth 2 service in the outbound setting to the dummy issuer.
        set_config('oauthservice', $this->issuer->get('id'), 'moodlenet');

        // Generate access token for the mock.
        $accesstoken = new stdClass();
        $accesstoken->token = random_string(64);

        // Get the OAuth2 client mock and set the return value for necessary methods.
        $this->mockoauthclient->method('get_issuer')->will($this->returnValue($this->issuer));
        $this->mockoauthclient->method('is_logged_in')->will($this->returnValue(true));
        $this->mockoauthclient->method('get_accesstoken')->will($this->returnValue($accesstoken));

        // Create Guzzle mock.
        $mockguzzlehandler = new MockHandler([$httpresponse]);
        $handlerstack = HandlerStack::create($mockguzzlehandler);
        $httpclient = new http_client(['handler' => $handlerstack]);

        // Create events sink.
        $sink = $this->redirectEvents();

        // Create sender.
        $moodlenetclient = new moodlenet_client($httpclient, $this->mockoauthclient);
        $coursepartialsender = new course_partial_sender(
            $this->course->id,
            $USER->id,
            $moodlenetclient,
            $this->mockoauthclient,
            [$this->activities[1]->cmid, $this->activities[2]->cmid],
            resource_sender::SHARE_FORMAT_BACKUP
        );

        if (isset($expected['exception'])) {
            $this->expectException(ClientException::class);
            $this->expectExceptionMessage($expected['exception']);
        }
        // Call the API.
        $result = $coursepartialsender->share_resource();

        // Verify the result.
        $this->assertEquals($expected['response_code'], $result['responsecode']);
        $this->assertEquals($expected['resource_url'], $result['drafturl']);

        // Verify the events.
        $events = $sink->get_events();

        $event = end($events);
        $this->assertInstanceOf('\core\event\moodlenet_resource_exported', $event);
        $this->assertEquals($USER->id, $event->userid);

        $cmidslist = implode("', '", [$this->activities[1]->cmid, $this->activities[2]->cmid]);
        if ($result['responsecode'] == 201) {
            $description = "The user with id '{$USER->id}' successfully shared activities to MoodleNet with the " .
                "following course module ids, from context with id '{$this->coursecontext->id}': '{$cmidslist}'.";
        } else {
            $description = "The user with id '{$USER->id}' failed to share activities to MoodleNet with the " .
                "following course module ids, from context with id '{$this->coursecontext->id}': '{$cmidslist}'.";
        }
        $this->assertEquals($description, $event->get_description());
    }

    /**
     * Provider for test share_resource().
     *
     * @return array Test data.
     */
    public static function share_resource_provider(): array {
        return [
            'Success' => [
                'http_response' => new Response(
                    201,
                    ['Content-Type' => 'application/json'],
                    json_encode([
                        'homepage' => 'https://moodlenet.example.com/drafts/view/testcourse_backup_1.mbz',
                    ]),
                ),
                'expected' => [
                    'response_code' => 201,
                    'resource_url' => 'https://moodlenet.example.com/drafts/view/testcourse_backup_1.mbz',
                ],
            ],
            'Fail with 200 status code' => [
                'http_response' => new Response(
                    200,
                    ['Content-Type' => 'application/json'],
                    json_encode([
                        'homepage' => 'https://moodlenet.example.com/drafts/view/testcourse_backup_2.mbz',
                    ]),
                ),
                'expected' => [
                    'response_code' => 200,
                    'resource_url' => 'https://moodlenet.example.com/drafts/view/testcourse_backup_2.mbz',
                ],
            ],
            'Fail with 401 status code' => [
                'http_response' => new Response(
                    401,
                ),
                'expected' => [
                    'response_code' => 401,
                    'resource_url' => '',
                    'exception' => 'Client error: ' .
                        '`POST https://moodlenet.example.com/.pkg/@moodlenet/ed-resource/basic/v1/create` ' .
                        'resulted in a `401 Unauthorized` response',
                ],
            ],
            'Fail with 404 status code' => [
                'http_response' => new Response(
                    404,
                ),
                'expected' => [
                    'response_code' => 404,
                    'resource_url' => '',
                    'exception' => 'Client error: '.
                        '`POST https://moodlenet.example.com/.pkg/@moodlenet/ed-resource/basic/v1/create` ' .
                        'resulted in a `404 Not Found` response',
                ],
            ],
        ];
    }

}
