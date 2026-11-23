@qtype @qtype_truefalsewiris @wq @javascript @student @attempt @inputoptions @regression
Feature: True/False (WIRIS) answer input option
    In order to trust the True/False (WIRIS) answer input
    As a student
    I want the True and False radio options to be selectable and graded in an attempt

    # A True/False (WIRIS) question presents a single answer input: a pair of True /
    # False radio buttons (the WIRIS layer wraps the core truefalse renderer, which
    # uses real labels, so the options are clicked with the "True" / "False" radio
    # selector). The right answer is graded locally from the fixed correctanswer
    # (the helper templates leave wirisoverrideanswer empty so no random Wiris
    # variable is involved), so both a correct and an incorrect selection are
    # exercised end to end. Questions are built from the qtype_truefalsewiris test
    # helper templates (fixedtrue / fixedfalse).

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
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |

    @grading
    Scenario: Selecting the correct True option is graded full marks
        Given the following "questions" exist:
            | questioncategory | qtype          | name    | template  |
            | WIRIS bank       | truefalsewiris | TF true | fixedtrue |
        And the following "activities" exist:
            | activity | name         | course | idnumber | grade |
            | quiz     | TF True Quiz | C1     | tfquiz1  | 1     |
        And quiz "TF True Quiz" contains the following questions:
            | question | page |
            | TF true  | 1    |
        When I am on the "TF True Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "The number 4 is even."
        And I am on the "TF True Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"

    @grading
    Scenario: Selecting the correct False option is graded full marks
        Given the following "questions" exist:
            | questioncategory | qtype          | name     | template   |
            | WIRIS bank       | truefalsewiris | TF false | fixedfalse |
        And the following "activities" exist:
            | activity | name          | course | idnumber | grade |
            | quiz     | TF False Quiz | C1     | tfquiz2  | 1     |
        And quiz "TF False Quiz" contains the following questions:
            | question | page |
            | TF false | 1    |
        When I am on the "TF False Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I click on "False" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "The number 3 is even."
        And I am on the "TF False Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"

    @grading
    Scenario: Selecting the wrong option is graded zero
        Given the following "questions" exist:
            | questioncategory | qtype          | name         | template  |
            | WIRIS bank       | truefalsewiris | TF wrong sel | fixedtrue |
        And the following "activities" exist:
            | activity | name          | course | idnumber | grade |
            | quiz     | TF Wrong Quiz | C1     | tfquiz3  | 1     |
        And quiz "TF Wrong Quiz" contains the following questions:
            | question     | page |
            | TF wrong sel | 1    |
        When I am on the "TF Wrong Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # The correct answer is True; selecting False must score zero.
        And I click on "False" "radio"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "The number 4 is even."
        And I am on the "TF Wrong Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "0.00"
