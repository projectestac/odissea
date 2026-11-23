@qtype @qtype_matchwiris @wq @javascript @student @attempt @inputoptions @regression
Feature: Matching (WIRIS) answer input option
    In order to trust the Matching (WIRIS) answer input
    As a student
    I want the per-row matching dropdowns to be selectable and graded in an attempt

    # A Matching (WIRIS) question presents one answer input per stem: a select
    # dropdown listing every available choice. The student picks the matching choice
    # for each stem from its dropdown. The dropdowns are standard Moodle selects
    # addressed by their "Answer <row> Question <n>" label, so the matching input is
    # exercised end to end. The foursubq helper template maps the stems
    # One / Two / Three / Four to the fixed values 1 / 2 / 3 / 4 with shuffling off.
    #
    # Only the all-correct grade is asserted at the E2E level: it is deterministic,
    # whereas an exact wrong / partial mark depends on the Wiris grading service
    # responding identically under load (observed to vary), and partial-mark
    # arithmetic is covered by the PHPUnit grading tests. The second scenario
    # therefore checks that a full set of selections is accepted and the attempt
    # completes, without pinning the exact mark.

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
    Scenario: Matching every stem correctly is graded full marks
        Given the following "questions" exist:
            | questioncategory | qtype      | name        | template |
            | WIRIS bank       | matchwiris | Match full  | foursubq |
        And the following "activities" exist:
            | activity | name            | course | idnumber | grade |
            | quiz     | Match Full Quiz | C1     | mtquiz1  | 1     |
        And quiz "Match Full Quiz" contains the following questions:
            | question   | page |
            | Match full | 1    |
        When I am on the "Match Full Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # Each stem's dropdown is set to its matching value.
        And I set the field "Answer 1 Question 1" to "1"
        And I set the field "Answer 2 Question 1" to "2"
        And I set the field "Answer 3 Question 1" to "3"
        And I set the field "Answer 4 Question 1" to "4"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "Match the numbers."
        And I am on the "Match Full Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"

    Scenario: A full set of matching selections is accepted and the attempt completes
        Given the following "questions" exist:
            | questioncategory | qtype      | name        | template |
            | WIRIS bank       | matchwiris | Match wrong | foursubq |
        And the following "activities" exist:
            | activity | name             | course | idnumber |
            | quiz     | Match Wrong Quiz | C1     | mtquiz2  |
        And quiz "Match Wrong Quiz" contains the following questions:
            | question    | page |
            | Match wrong | 1    |
        When I am on the "Match Wrong Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # Every row dropdown takes a selection (a non-matching value here). The exact
        # resulting mark is not asserted (Wiris-service dependent / PHPUnit scope);
        # this verifies the matching input accepts a full set of answers and submits.
        And I set the field "Answer 1 Question 1" to "2"
        And I set the field "Answer 2 Question 1" to "3"
        And I set the field "Answer 3 Question 1" to "4"
        And I set the field "Answer 4 Question 1" to "1"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        And I am on the "Match Wrong Quiz" "mod_quiz > View" page logged in as "student1"
        Then I should see "Finished"
