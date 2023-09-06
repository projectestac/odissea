@mod @mod_quiz @core @core_badges @javascript
Feature: Award badges based on activity completion
  In order to ensure a student has learned the material before being marked complete
  As a teacher
  I need to set a quiz to award a badge when upon completion when the student receives a passing grade, or completed_fail if they use all attempts without passing

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | 1        | student1@example.com |
      | student2 | Student   | 1        | student2@example.com |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category | enablecompletion |
      | Course 1 | C1        | 0        | 1                |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
      | student1 | C1     | student        |
      | student2 | C1     | student        |
    And the following config values are set as admin:
      | grade_item_advanced | hiddenuntil |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "questions" exist:
      | questioncategory | qtype     | name           | questiontext              |
      | Test questions   | truefalse | First question | Answer the first question |
    And the following "activities" exist:
      | activity   | name           | course | idnumber | attempts | gradepass | completion | completionattemptsexhausted | completionpassgrade | completionusegrade |
      | quiz       | Test quiz name | C1     | quiz1    | 2        | 5.00      | 2          | 1                           | 1                   | 1                  |
    And quiz "Test quiz name" contains the following questions:
      | question       | page |
      | First question | 1    |
    And user "student1" has attempted "Test quiz name" with responses:
      | slot | response |
      |   1  | False    |
    And user "student2" has attempted "Test quiz name" with responses:
      | slot | response |
      |   1  | False    |
    And the following "core_badges > Badge" exists:
      | name        | Course Badge                 |
      | status      | 0                            |
      | type        | 2                            |
      | course      | C1                           |
      | description | Course badge description     |
      | image       | badges/tests/behat/badge.png |

  Scenario: Student earns a badge using activity completion, but does not get passing grade
    Given I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges" in current page administration
    And I press "Manage badges"
    And I follow "Course Badge"
    And I select "Criteria" from the "jump" singleselect
    And I set the field "type" to "Activity completion"
    And I set the field "Quiz - Test quiz name" to "1"
    And I press "Save"
    And I press "Enable access"
    And I press "Continue"
    And I should see "Recipients (0)"
    And I log out
    And I am on the "Course 1" course page logged in as student1
    And the "Receive a grade" completion condition of "Test quiz name" is displayed as "done"
    And the "Receive a passing grade" completion condition of "Test quiz name" is displayed as "failed"
    And the "Receive a pass grade or complete all available attempts" completion condition of "Test quiz name" is displayed as "todo"
    When I am on the "Test quiz name" "quiz activity" page
    And I press "Re-attempt quiz"
    And I set the field "False" to "1"
    And I press "Finish attempt ..."
    And I press "Submit all and finish"
    And I click on "Submit" "button" in the "Submit all your answers and finish?" "dialogue"
    And I log out

    And I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges > Manage badges" in current page administration
    And I follow "Course Badge"
    Then I should see "Recipients (1)"

  Scenario Outline: Previously graded pass/fail students should earn a badge after enabling a badge
    Given I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges" in current page administration
    And I press "Manage badges"
    And I follow "Course Badge"
    And I select "Criteria" from the "jump" singleselect
    And I set the field "type" to "Activity completion"
    And I click on "Expand all" "link"
    And I set the field "Quiz - Test quiz name" to "1"
    And I set the field "<aggregationcriteria>" to "1"
    And I press "Save"

    # Fail grade with student2
    And I am on the "Course 1" course page logged in as student2
    And I am on the "Test quiz name" "quiz activity" page
    And I press "Re-attempt quiz"
    And I set the field "False" to "1"
    And I press "Finish attempt ..."
    And I press "Submit all and finish"
    And I click on "Submit" "button" in the "Submit all your answers and finish?" "dialogue"
    And I log out

    # Pass grade with student1
    And I am on the "Course 1" course page logged in as student1
    And I am on the "Test quiz name" "quiz activity" page
    And I press "Re-attempt quiz"
    And I set the field "False" to "0"
    And I press "Finish attempt ..."
    And I press "Submit all and finish"
    And I click on "Submit" "button" in the "Submit all your answers and finish?" "dialogue"
    And I log out

    # Enable badge access once all students have completed an activity.
    And I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges > Manage badges" in current page administration
    And I follow "Course Badge"
    When I press "Enable access"
    And I press "Continue"
    Then I should see "Recipients (2)"

    Examples:
      | aggregationcriteria                         |
      | Any of the selected activities is complete  |
      | All of the selected activities are complete |
