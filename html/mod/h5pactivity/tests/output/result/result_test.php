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
namespace mod_h5pactivity\output\result;

use core_xapi\local\statement\item_result;
use mod_h5pactivity\local\manager;

/**
 * Result test class for H5P activity.
 *
 * @package    mod_h5pactivity
 * @covers     \mod_h5pactivity\output\result
 * @category   test
 * @copyright  2023 Laurent David <laurent.david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class result_test extends \advanced_testcase {
    /**
     * Test result export_options
     *
     * @param array $providedresultdata
     * @param array $expecteduseranswers
     * @return void
     * @dataProvider result_data_provider
     * @covers       \mod_h5pactivity\output\result::export_options
     */
    public function test_result_options(array $providedresultdata, array $expecteduseranswers): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        $course = $this->getDataGenerator()->create_course();
        $activity = $this->getDataGenerator()->create_module('h5pactivity',
            ['course' => $course]);

        $manager = manager::create_from_instance($activity);
        $cm = $manager->get_coursemodule();
        $student = $this->getDataGenerator()->create_and_enrol($course, 'student');

        $generator = $this->getDataGenerator()->get_plugin_generator('mod_h5pactivity');

        $params = ['cmid' => $cm->id, 'userid' => $student->id];
        $attempt = $generator->create_content($activity, $params);
        $resultdata = [
            'attemptid' => $attempt->id,
            'subcontent' => '',
            'timecreated' => time(),
            'completion' => true,
            'success' => true,
            'score' => (object) ['min' => 0, 'max' => 2, 'raw' => 2, 'scaled' => 1],
            'duration' => 'PT25S',
        ];
        $resultdata = array_merge($resultdata, $providedresultdata);
        $result = item_result::create_from_data((object) $resultdata);
        $classname = "mod_h5pactivity\\output\\result\\{$providedresultdata['interactiontype']}";
        $classname = str_replace('-', '', $classname);

        $reflectionoutput = new \ReflectionClass($classname);
        $constructor = $reflectionoutput->getConstructor();
        $constructor->setAccessible(true);
        $resultoutput = $reflectionoutput->newInstanceWithoutConstructor();
        $constructor->invoke($resultoutput, $result->get_data());

        $exportoptions = $reflectionoutput->getMethod('export_options');
        $exportoptions->setAccessible(true);

        $data = $exportoptions->invoke($resultoutput);
        $useranswersdata = array_map(function($item) {
            return $item->useranswer;
        }, $data);
        $this->assertEquals($expecteduseranswers, $useranswersdata);
    }

    /**
     * Data provider for result export_options test
     *
     * @return array[]
     */
    public function result_data_provider(): array {
        return [
            'fill-in with case sensitive' => [
                'result' => [
                    'interactiontype' => 'fill-in',
                    'description' => '<p>Fill in the missing words</p>
                              <p>Meow .... this is a __________</p>
                              <p>Bark... this is a __________</p>',
                    'correctpattern' => '["{case_matters=true}cat[,]dog"]',
                    'response' => 'Cat[,]dog',
                    'additionals' => '{"extensions":{"http:\\/\\/h5p.org\\/x-api\\/h5p-local-content-id":31,'
                        . '"https:\\/\\/h5p.org\\/x-api\\/case-sensitivity":true,'
                        . '"https:\\/\\/h5p.org\\/x-api\\/alternatives":[["cat"],["dog"]]},"contextExtensions":{}}',
                ],
                'useranswers' => [
                    (object) ['answer' => 'Cat', 'incorrect' => true],
                    (object) ['answer' => 'dog', 'correct' => true],
                ],
            ],
            'fill-in with case insensitive' => [
                'result' => [
                    'interactiontype' => 'fill-in',
                    'description' => '<p>Fill in the missing words</p>
                              <p>Meow .... this is a __________</p>
                              <p>Bark... this is a __________</p>',
                    'correctpattern' => '["{case_matters=false}cat[,]dog"]',
                    'response' => 'Cat[,]dog',
                    'additionals' => '{"extensions":{"http:\\/\\/h5p.org\\/x-api\\/h5p-local-content-id":31,'
                        . '"https:\\/\\/h5p.org\\/x-api\\/case-sensitivity":false,'
                        . '"https:\\/\\/h5p.org\\/x-api\\/alternatives":[["cat"],["dog"]]},"contextExtensions":{}}',
                ],
                'useranswers' => [
                    (object) ['answer' => 'Cat', 'correct' => true],
                    (object) ['answer' => 'dog', 'correct' => true],
                ],
            ],
            'sort the paragraph text' => [
                'result' => [
                    'interactiontype' => 'sequencing',
                    'description' => 'SortParagraphs',
                    'correctpattern' => '["0[,]1[,]2[,]3[,]4"]',
                    'response' => '0[,]1[,]3[,]2[,]4',
                    'additionals' => '{"choices":[{"id":0,"description":{"en":"First I wake up at 7.30 am\\n",'
                        . '"en-US":"First I wake up at 7.30 am\\n"}}'
                        . ',{"id":1,"description":{"en":"Next I get dressed\\n","en-US":"Next I get dressed\\n"}},'
                        . '{"id":2,"description":{"en":"Afterward I have breakfast\\n","en-US":"Afterward I have breakfast\\n"}},'
                        . '{"id":3,"description":{"en":"I brush my teeth\\n","en-US":"I brush my teeth\\n"}},'
                        . '{"id":4,"description":{"en":"Finally I go school\\n","en-US":"Finally I go school\\n"}}],'
                        .
                        '"extensions":{"http:\\/\\/h5p.org\\/x-api\\/h5p-local-content-id":39,'
                        . '"https:\\/\\/h5p.org\\/x-api\\/duplicates-interchangeable":1},"contextExtensions":{}}',
                ],
                'useranswers' => [
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                    (object) ['answer' => 'Incorrect answer', 'fail' => true, ],
                    (object) ['answer' => 'Incorrect answer', 'fail' => true, ],
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                ],
            ],
            'sequencing images' => [
                'result' => [
                    'interactiontype' => 'sequencing',
                    'description' => 'Order the planets from smallest to largest',
                    'correctpattern' => '["item_3[,]item_0[,]item_7[,]item_1[,]item_5[,]item_2[,]item_4[,]item_6"]',
                    'response' => 'item_0[,]item_1[,]item_3[,]item_2[,]item_5[,]item_4[,]item_6[,]item_7',
                    'additionals' => '{"choices":[{"id":"item_3","description":{"en-US":"Mercury"}},'
                        . '{"id":"item_0","description":{"en-US":"Mars"}},{"id":"item_7","description":{"en-US":"Earth"}},'
                        . '{"id":"item_1","description":{"en-US":"Venus"}},{"id":"item_5","description":{"en-US":"Uranus"}},'
                        . '{"id":"item_2","description":{"en-US":"Neptune"}},{"id":"item_4","description":{"en-US":"Saturn"}},'
                        . '{"id":"item_6","description":{"en-US":"Jupiter"}}],"extensions":'
                        . '{"http:\/\/h5p.org\/x-api\/h5p-local-content-id":43},"contextExtensions":{}}',
                ],
                'useranswers' => [
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                    (object) ['answer' => 'Incorrect answer', 'fail' => true, ],
                    (object) ['answer' => 'Incorrect answer', 'fail' => true, ],
                    (object) ['answer' => 'Incorrect answer', 'fail' => true, ],
                    (object) ['answer' => 'Incorrect answer', 'fail' => true, ],
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                    (object) ['answer' => 'Correct answer', 'pass' => true, ],
                ],
            ]
        ];
    }
}
