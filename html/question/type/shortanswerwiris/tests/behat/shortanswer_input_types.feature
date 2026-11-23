@qtype @qtype_shortanswerwiris @wq @javascript @student @attempt @inputoptions @regression
Feature: Short answer (WIRIS) answer-field input options
    In order to trust every Short answer (WIRIS) answer-field configuration
    As a student
    I want each input option (text, inline equation, graphical, compound) to work in an attempt

    # The Wiris Quizzes answer-field type lives in the question's <localData>
    # (inputField: textField | inlineEditor | inlineGraph | popupEditor+inputCompound).
    # Only the plain-text field is a real HTML input, so it is exercised end to end
    # (typed + graded). The equation, graphical and compound fields are MathType /
    # canvas overlays that cannot be driven from the keyboard, so they are covered
    # at the level E2E can observe: the question renders in an attempt and the
    # attempt can be completed. Grading those inputs is covered by PHPUnit.
    # Questions are built from the qtype_shortanswerwiris test helper templates.

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
    Scenario: Text answer field can be typed and is graded
        Given the following "questions" exist:
            | questioncategory | qtype            | name             | template  |
            | WIRIS bank       | shortanswerwiris | SA text field    | textfield |
        And the following "activities" exist:
            | activity | name         | course | idnumber | grade |
            | quiz     | SA Text Quiz | C1     | saquiz1  | 1     |
        And quiz "SA Text Quiz" contains the following questions:
            | question      | page |
            | SA text field | 1    |
        When I am on the "SA Text Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I set the field "Answer" to "energy"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # The typed text answer is graded by the Wiris service and shown on the report.
        Then I should see "Type the word energy."
        And I am on the "SA Text Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"

    Scenario: Inline equation, graphical and compound fields render and the attempt completes
        Given the following "questions" exist:
            | questioncategory | qtype            | name                  | template     |
            | WIRIS bank       | shortanswerwiris | SA inline equation    | inlineeditor |
            | WIRIS bank       | shortanswerwiris | SA graphical          | graphical    |
            | WIRIS bank       | shortanswerwiris | SA compound           | compound     |
        And the following "activities" exist:
            | activity | name          | course | idnumber |
            | quiz     | SA Input Quiz | C1     | saquiz2  |
        # All three on a single page so the attempt needs no page-to-page
        # navigation (navigating away from a live MathType/graph overlay can raise
        # a browser "leave page?" alert, which makes multi-page steps flaky).
        And quiz "SA Input Quiz" contains the following questions:
            | question           | page |
            | SA inline equation | 1    |
            | SA graphical       | 1    |
            | SA compound        | 1    |
        When I am on the "SA Input Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # Every input option renders on the attempt page.
        Then I should see "Write the expression x + 1."
        And I should see "Draw the line y = x."
        And I should see "Give the slope and intercept of y = x + 1."
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # The attempt is recorded as finished after every input option was rendered.
        And I am on the "SA Input Quiz" "mod_quiz > View" page logged in as "student1"
        And I should see "Finished"
