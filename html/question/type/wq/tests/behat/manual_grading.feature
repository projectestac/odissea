@qtype @qtype_wq @qtype_essaywiris @mod_quiz @wq @javascript @teacher @manualgrading @regression
Feature: Manually grade an Essay (WIRIS) attempt
    In order to award marks for free-text answers
    As a teacher
    I want to override the mark of an Essay (WIRIS) attempt and see the final grade

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
            | quiz     | WIRIS Quiz | C1     | wirisquiz | 1     |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        And the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext                       | defaultmark |
            | WIRIS bank       | essaywiris | Essay WIRIS | <p>Explain E = mc^2 in words.</p>   | 1.0         |
        And quiz "WIRIS Quiz" contains the following questions:
            | question    | page |
            | Essay WIRIS | 1    |
        # Student submits a free-text answer that needs manual grading.
        And I am on the "WIRIS Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I set the field "Answer" to "Energy equals mass times the speed of light squared."
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        And I log out

    @_switch_window
    Scenario: Teacher overrides the mark and the final grade is recorded
        Given I am on the "WIRIS Quiz > student1 > Attempt 1" "mod_quiz > Attempt review" page logged in as "teacher1"
        When I follow "Make comment or override mark"
        And I switch to "commentquestion" window
        And I set the field "Mark" to "0.5"
        And I press "Save" and switch to main window
        Then I should see "Manually graded 0.5"
        # The overridden mark is reflected in the Grades report.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "0.50"
