@qtype @qtype_wq @mod_quiz @wq @javascript @teacher @regrade @regression
Feature: Regrade a quiz with a WIRIS question
    In order to fix marks after changing a question
    As a teacher
    I want to regrade attempts and keep the results consistent

    # WIRIS question types do not implement the `un_summarise_response` testing
    # helper, so the backend "user ... has attempted ... with responses" generator
    # cannot simulate WIRIS answers. We therefore attempt through the UI.

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
            | activity | name       | course | idnumber  |
            | quiz     | WIRIS Quiz | C1     | wirisquiz |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        And the following "questions" exist:
            | questioncategory | qtype          | name     | questiontext                    | defaultmark | correctanswer |
            | WIRIS bank       | truefalsewiris | TF WIRIS | <p>The daytime sky is blue.</p> | 1.0         | 1             |
        And quiz "WIRIS Quiz" contains the following questions:
            | question | page |
            | TF WIRIS | 1    |

    Scenario: Teacher regrades the attempt and the grade is recalculated consistently
        # Student submits a correct answer through the UI.
        Given I am on the "WIRIS Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # Teacher checks the grade, regrades and confirms it stays consistent.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        When I press "Regrade attempts..."
        And I click on "Regrade now" "button" in the "Regrade" "dialogue"
        Then I should see "Regrade completed"
        # Re-open the report to confirm the attempt is still present after regrading.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
