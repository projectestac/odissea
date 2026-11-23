@qtype @qtype_multichoicewiris @wq @javascript @student @attempt @inputoptions @regression
Feature: Multiple choice (WIRIS) answer-mode input options
    In order to trust both Multiple choice (WIRIS) answer modes
    As a student
    I want the single-answer (radio) and multiple-answer (checkbox) inputs to work in an attempt

    # A Multiple choice (WIRIS) question offers two answer modes, selected by the
    # "single" option: single answer renders radio buttons, multiple answer renders
    # checkboxes. The WIRIS renderer wraps the core multichoice single / multi
    # renderers, so the choices are clicked with the core
    # "qtype_multichoice > Answer" selector (it resolves the aria-labelledby answer
    # label used for both radios and checkboxes) and are graded by the answer
    # fractions. Both modes are therefore exercised end to end (selected and
    # graded). Questions are built from the qtype_multichoicewiris test helper
    # templates (singlechoice / multichoice), which use plain-text choices and
    # explicit fractions.

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
    Scenario: Single-answer mode renders radio buttons and is graded
        # single = 1, exactly one correct choice (Paris) worth the full mark.
        Given the following "questions" exist:
            | questioncategory | qtype            | name      | template     |
            | WIRIS bank       | multichoicewiris | MC single | singlechoice |
        And the following "activities" exist:
            | activity | name            | course | idnumber | grade |
            | quiz     | MC Single Quiz  | C1     | mcquiz1  | 1     |
        And quiz "MC Single Quiz" contains the following questions:
            | question  | page |
            | MC single | 1    |
        When I am on the "MC Single Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # Radio buttons: only one choice can be selected.
        And I click on "Paris" "qtype_multichoice > Answer"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "Which city is the capital of France?"
        And I am on the "MC Single Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"

    @grading
    Scenario: Multiple-answer mode renders checkboxes and is graded
        # single = 0, two correct choices (Two and Four) worth half the mark each.
        Given the following "questions" exist:
            | questioncategory | qtype            | name        | template    |
            | WIRIS bank       | multichoicewiris | MC multiple | multichoice |
        And the following "activities" exist:
            | activity | name             | course | idnumber | grade |
            | quiz     | MC Multiple Quiz | C1     | mcquiz2  | 1     |
        And quiz "MC Multiple Quiz" contains the following questions:
            | question    | page |
            | MC multiple | 1    |
        When I am on the "MC Multiple Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # Checkboxes: several correct choices must be selected for the full mark.
        And I click on "Two" "qtype_multichoice > Answer"
        And I click on "Four" "qtype_multichoice > Answer"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "Select the even numbers."
        And I am on the "MC Multiple Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"
