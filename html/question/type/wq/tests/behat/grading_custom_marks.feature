@qtype  @qtype_wq @mod_quiz @wq @javascript @student @grading @regression
Feature: Custom maximum grade and partial marks for WIRIS questions
    In order to score quizzes on a custom scale
    As a teacher
    I want the quiz maximum grade and partial marks to be applied to WIRIS answers

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
        # Quiz maximum grade is 10 while the two questions are worth 1 mark each (raw total 2).
        And the following "activities" exist:
            | activity | name       | course | idnumber  | grade |
            | quiz     | WIRIS Quiz | C1     | wirisquiz | 10    |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        And the following "questions" exist:
            | questioncategory | qtype          | name        | template  | questiontext                    | defaultmark | correctanswer |
            | WIRIS bank       | truefalsewiris | TF WIRIS A  | fixedtrue | <p>The daytime sky is blue.</p> | 1.0         | 1             |
            | WIRIS bank       | truefalsewiris | TF WIRIS B  | fixedtrue | <p>Water boils at 100C.</p>     | 1.0         | 1             |
        And quiz "WIRIS Quiz" contains the following questions:
            | question   | page |
            | TF WIRIS A | 1    |
            | TF WIRIS B | 2    |

    Scenario: Partial marks are scaled to the custom maximum grade
        # One correct, one incorrect: raw 1 of 2 -> 5.00 out of 10.00.
        Given I am on the "WIRIS Quiz" "mod_quiz > View" page logged in as "student1"
        When I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Next page" "button"
        And I click on "False" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # The scaled partial grade is shown on the teacher's report.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        Then I should see "5.00"

    Scenario: A fully correct attempt earns the full custom maximum grade
        # Both correct: raw 2 of 2 -> 10.00 out of 10.00.
        Given I am on the "WIRIS Quiz" "mod_quiz > View" page logged in as "student1"
        When I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Next page" "button"
        And I click on "True" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # The full scaled grade is shown on the teacher's report.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        Then I should see "10.00"
