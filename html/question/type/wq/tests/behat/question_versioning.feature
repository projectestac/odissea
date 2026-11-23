@qtype @qtype_wq @core_question @mod_quiz @wq @javascript @teacher @versioning @regression
Feature: Question versioning for WIRIS questions
    In order to improve a WIRIS question without losing its history or graded attempts
    As a teacher
    I want editing a WIRIS question to create a new version while old attempts stay intact

    # Versioning is core question-bank machinery that every WIRIS type inherits
    # through qtype_wq, so one representative type (True/False - science, which is
    # cleanly UI-editable and auto-graded) proves the integration end to end.
    # Editing the question text goes through TinyMCE, so the WIRIS editor AMD guard
    # is installed first (see E2E_TEST_PLAN.md section 2). Per-type version
    # *metadata* is an integration/unit concern (see E2E_TEST_PLAN.md section 4).

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following "users" exist:
            | username | firstname | lastname | email                |
            | teacher1 | Teacher   | One      | teacher1@example.com |
            | student1 | Student   | One      | student1@example.com |
        And the following "courses" exist:
            | fullname | shortname |
            | Course 1 | C1        |
        And the following "course enrolments" exist:
            | user     | course | role           |
            | teacher1 | C1     | editingteacher |
            | student1 | C1     | student        |
        And the following "activities" exist:
            | activity | name       | course | idnumber  | grade |
            | quiz     | WIRIS Quiz | C1     | wirisquiz | 10    |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        And the following "questions" exist:
            | questioncategory | qtype          | name     | questiontext                    | defaultmark | correctanswer |
            | WIRIS bank       | truefalsewiris | TF WIRIS | <p>The daytime sky is blue.</p> | 1.0         | 1             |
        And quiz "WIRIS Quiz" contains the following questions:
            | question | page |
            | TF WIRIS | 1    |

    Scenario: Editing a WIRIS question creates a new version recorded in its history
        Given I am on the "Course 1" "core_question > course question bank" page logged in as "teacher1"
        When I choose "Edit question" action for "TF WIRIS" in the question bank
        And I work around the Wiris Quizzes editor AMD conflict
        And I set the field "Question name" to "TF WIRIS v2"
        And I set the field "Question text" to "<p>The daytime sky is blue (revised).</p>"
        And I press "id_submitbutton"
        # The history page lists both the original and the new version.
        And I choose "History" action for "TF WIRIS v2" in the question bank
        Then I should see "Question history"
        And "TF WIRIS v2" "table_row" should exist
        And "TF WIRIS" "table_row" should exist

    Scenario: A graded attempt stays intact after a new version is created
        # Student completes an attempt against version 1 (correct -> full marks).
        Given I am on the "WIRIS Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        And I log out
        # Teacher edits the question, which creates version 2 because it is in use.
        And I am on the "Course 1" "core_question > course question bank" page logged in as "teacher1"
        When I choose "Edit question" action for "TF WIRIS" in the question bank
        And I work around the Wiris Quizzes editor AMD conflict
        And I set the field "Question text" to "<p>The daytime sky is blue (v2).</p>"
        And I press "id_submitbutton"
        # The previously graded attempt against version 1 is unchanged.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        Then I should see "Student One"
        And I should see "10.00"
