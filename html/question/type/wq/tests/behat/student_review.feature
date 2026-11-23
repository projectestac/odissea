@qtype @qtype_wq @mod_quiz @wq @javascript @student @review @regression
Feature: Student reviews a finished WIRIS attempt
    In order to understand how my answers were graded
    As a student
    I want to review my attempt, its feedback, grade and history

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following "users" exist:
            | username | firstname | lastname | email                |
            | student1 | Student   | One      | student1@example.com |
        And the following "courses" exist:
            | fullname | shortname |
            | Course 1 | C1        |
        And the following "course enrolments" exist:
            | user     | course | role    |
            | student1 | C1     | student |
        And the following "activities" exist:
            | activity | name             | course | idnumber  | grade |
            | quiz     | WIRIS Review Quiz | C1    | wirisquiz | 10    |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        And the following "questions" exist:
            | questioncategory | qtype          | name     | template  | questiontext                    | defaultmark | correctanswer | generalfeedback                          |
            | WIRIS bank       | truefalsewiris | TF WIRIS | fixedtrue | <p>The daytime sky is blue.</p> | 1.0         | 1             | <p>Well done, sunlight scatters blue.</p> |
        And quiz "WIRIS Review Quiz" contains the following questions:
            | question | page |
            | TF WIRIS | 1    |

    Scenario: Student reviews the attempt with feedback, grade and attempt history
        Given I am on the "WIRIS Review Quiz" "mod_quiz > View" page logged in as "student1"
        When I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # Review screen: question, general feedback and the grade are shown.
        Then I should see "The daytime sky is blue."
        And I should see "Well done, sunlight scatters blue."
        And I should see "10.00"
        # Attempt history is available from the quiz view.
        And I am on the "WIRIS Review Quiz" "mod_quiz > View" page logged in as "student1"
        And I should see "Finished"
        And I should see "10.00"
