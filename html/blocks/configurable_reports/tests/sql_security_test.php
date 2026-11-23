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

/**
 * Unit tests for the SQL security check of SQL reports
 *
 * @package    block_configurable_reports
 * @copyright  2026 Juan Leyva
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_configurable_reports;

use advanced_testcase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/formslib.php');
require_once($CFG->dirroot . '/blocks/configurable_reports/locallib.php');
require_once($CFG->dirroot . '/blocks/configurable_reports/plugin.class.php');
require_once($CFG->dirroot . '/blocks/configurable_reports/report.class.php');
require_once($CFG->dirroot . '/blocks/configurable_reports/reports/sql/report.class.php');
require_once($CFG->dirroot . '/blocks/configurable_reports/components/customsql/form.php');

/**
 * Tests for report_sql::get_query_security_error()
 *
 * @package    block_configurable_reports
 * @covers     \report_sql
 */
#[CoversClass(\report_sql::class)]
final class sql_security_test extends advanced_testcase {

    /** @var string Query seen exploiting sites: a DO block whose UPDATE of the site admins is hidden in hex escapes */
    private const EXPLOIT = <<<'SQL'
DO E'BEGIN \x55\x50\x44\x41\x54\x45 prefix_config \x53\x45\x54 value=\x272,8,308041\x27 WHERE name=\x27siteadmins\x27\x3b END' -- pg_locks
SQL;

    protected function setUp(): void {
        parent::setUp();
        $this->resetAfterTest();
    }

    /**
     * Create a SQL report owned by the current user.
     *
     * @param string $query
     * @return \stdClass
     */
    private function create_sql_report(string $query): \stdClass {
        global $DB, $SITE, $USER;

        $components = [
            'customsql' => ['config' => (object) ['querysql' => $query]],
        ];
        $report = (object) [
            'courseid' => $SITE->id,
            'ownerid' => $USER->id,
            'visible' => 1,
            'name' => 'SQL test report',
            'summary' => '',
            'type' => 'sql',
            'components' => cr_serialize($components),
            'remote' => 0,
        ];
        $report->id = $DB->insert_record('block_configurable_reports', $report);

        return $DB->get_record('block_configurable_reports', ['id' => $report->id]);
    }

    /**
     * The check finds the keywords and semicolons hidden in escape sequences, and only allows statements reading data.
     *
     * @dataProvider queries_provider
     * @param string $sql
     * @param string|null $highsecurityerror Expected error with SQL security enabled.
     * @param string|null $lowsecurityerror Expected error with SQL security disabled.
     */
    #[DataProvider('queries_provider')]
    public function test_get_query_security_error(string $sql, ?string $highsecurityerror, ?string $lowsecurityerror): void {
        set_config('sqlsecurity', 1, 'block_configurable_reports');
        $this->assertSame($highsecurityerror, \report_sql::get_query_security_error($sql));

        set_config('sqlsecurity', 0, 'block_configurable_reports');
        $this->assertSame($lowsecurityerror, \report_sql::get_query_security_error($sql));
    }

    /**
     * Data provider for test_get_query_security_error.
     *
     * @return array
     */
    public static function queries_provider(): array {
        return [
            // Queries that read data are allowed.
            'select' => ['SELECT id FROM prefix_user', null, null],
            'with' => ['WITH ids AS (SELECT id FROM prefix_user) SELECT id FROM ids', null, null],
            'comments and parentheses before select' => [
                "-- All the users.\n/* With their ids. */\n(SELECT id FROM prefix_user)", null, null,
            ],
            'placeholder before select' => ['%%DEBUG%% SELECT id FROM prefix_user', null, null],
            'escape string with a newline' => ["SELECT string_agg(username, E'\\n') FROM prefix_user", null, null],
            'escaped semicolon' => ["SELECT E'\\x3b' FROM prefix_user", 'nosemicolon', null],

            // The query in the report.
            'exploit' => [self::EXPLOIT, 'notallowedwords', 'notallowedwords'],

            // Keywords hidden in escape sequences.
            'hex escapes' => ["SELECT E'\\x55\\x50\\x44\\x41\\x54\\x45 prefix_config'", 'notallowedwords', 'notallowedwords'],
            'octal escapes' => ["SELECT E'\\125\\120\\104\\101\\124\\105 prefix_config'", 'notallowedwords', 'notallowedwords'],
            'unicode escapes' => ["SELECT E'\\u0055PDATE prefix_config'", 'notallowedwords', 'notallowedwords'],
            'long unicode escapes' => ["SELECT E'\\U00000055PDATE prefix_config'", 'notallowedwords', 'notallowedwords'],
            'escaped letters' => ["SELECT E'U\\PD\\ATE prefix_config'", 'notallowedwords', 'notallowedwords'],
            'escapes in escapes' => ["SELECT E'\\\\x55PDATE prefix_config'", 'notallowedwords', 'notallowedwords'],
            'unicode string' => ["SELECT U&'\\0055PDATE prefix_config'", 'notallowedwords', 'notallowedwords'],
            'long unicode string escape' => ["SELECT U&'\\+000055PDATE prefix_config'", 'notallowedwords', 'notallowedwords'],
            'unicode string with own escape' => ["SELECT U&'!0055PDATE prefix_config' UESCAPE '!'", 'notallowedwords',
                'notallowedwords'],

            // Statements that run SQL from a string or a procedure.
            'do block' => ["DO 'BEGIN PERFORM 1 END'", 'notselectquery', 'notselectquery'],
            'do block with dollar quotes' => ['DO $$BEGIN PERFORM 1 END$$', 'notselectquery', 'notselectquery'],
            'call' => ['CALL prefix_procedure()', 'notselectquery', 'notselectquery'],
            'prepare' => ["PREPARE stmt FROM 'SELECT 1'", 'notselectquery', 'notselectquery'],
            'execute' => ["SELECT 1 EXEC('SELECT 1')", 'notallowedwords', 'notallowedwords'],
            'statement after a nested comment' => ["/* /* */ SELECT */ DO 'BEGIN PERFORM 1 END'", 'notselectquery',
                'notselectquery'],
            'statement in a mysql executable comment' => ['/*!50000 DO 1 */ SELECT 1', 'notselectquery', 'notselectquery'],
            'statement after a comment' => ["-- SELECT\nDO 'BEGIN PERFORM 1 END'", 'notselectquery', 'notselectquery'],
        ];
    }

    /**
     * With SQL execution enabled in config.php, low security also allows INSERT and CREATE statements, and nothing else.
     */
    public function test_get_query_security_error_with_sql_execution(): void {
        global $CFG;

        $CFG->block_configurable_reports_enable_sql_execution = 1;
        set_config('sqlsecurity', 0, 'block_configurable_reports');

        $this->assertNull(\report_sql::get_query_security_error('INSERT INTO prefix_table (name) VALUES (1)'));
        $this->assertNull(\report_sql::get_query_security_error('CREATE TABLE prefix_table (name INT)'));
        $this->assertSame('notselectquery', \report_sql::get_query_security_error("DO 'BEGIN PERFORM 1 END'"));
        $this->assertSame('notallowedwords', \report_sql::get_query_security_error(self::EXPLOIT));

        set_config('sqlsecurity', 1, 'block_configurable_reports');
        $this->assertSame('notallowedwords',
            \report_sql::get_query_security_error('INSERT INTO prefix_table (name) VALUES (1)'));
    }

    /**
     * The query in the report is refused when saved and when run, and the site admins stay the same.
     *
     * @dataProvider security_provider
     * @param bool $highsecurity
     */
    #[DataProvider('security_provider')]
    public function test_exploit_is_refused(bool $highsecurity): void {
        global $CFG;

        $this->setAdminUser();
        set_config('sqlsecurity', (int) $highsecurity, 'block_configurable_reports');
        $siteadmins = $CFG->siteadmins;

        $report = new \report_sql($this->create_sql_report('SELECT 1'));
        $form = new \customsql_form(null, ['reportclass' => $report]);
        $errors = $form->validation(['querysql' => self::EXPLOIT], []);
        $this->assertSame(get_string('notallowedwords', 'block_configurable_reports'), $errors['querysql']);

        // Imported reports skip the form, so the query is checked again when it runs.
        try {
            $report->execute_query(self::EXPLOIT);
            $this->fail('Exception expected');
        } catch (\moodle_exception $e) {
            $this->assertSame('notallowedwords', $e->errorcode);
        }

        $this->assertSame($siteadmins, get_config('core', 'siteadmins'));
    }

    /**
     * Data provider for test_exploit_is_refused.
     *
     * @return array
     */
    public static function security_provider(): array {
        return ['high security' => [true], 'low security' => [false]];
    }
}
