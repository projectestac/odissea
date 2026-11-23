@qtype @qtype_wq @qtype_multianswerwiris @core_question @wq @javascript @teacher @import @regression @_file_upload
Feature: Import a WIRIS question from Moodle XML
    In order to reuse WIRIS questions exported from another site
    As a teacher
    I want to import a Moodle XML file and keep the WIRIS configuration

    # Uses the Moodle XML fixture shipped with qtype_multianswerwiris, which carries
    # the full <wirisquestion> payload, to prove WIRIS data survives an XML import.

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following "users" exist:
            | username | firstname | lastname | email                |
            | teacher1 | Teacher   | One      | teacher1@example.com |
        And the following "courses" exist:
            | fullname | shortname |
            | Course 1 | C1        |
        And the following "course enrolments" exist:
            | user     | course | role           |
            | teacher1 | C1     | editingteacher |

    Scenario: Teacher imports a Cloze (WIRIS) question from Moodle XML
        Given I am on the "Course 1" "core_question > course question import" page logged in as "teacher1"
        And I set the field "id_format_xml" to "1"
        When I upload "question/type/multianswerwiris/tests/fixtures/testquestion.moodle.xml" file to "Import" filemanager
        And I press "id_submitbutton"
        Then I should see "Parsing questions from import file."
        And I should see "Importing 1 questions from file"
        And I press "Continue"
        And I should see "Cloze Wiris Test Question"
