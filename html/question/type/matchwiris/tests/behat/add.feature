@qtype @qtype_matchwiris @qtype_matchwiris_add
Feature: Test creating a Matching Wiris question
  As a teacher
  In order to test my students
  I need to be able to create a Matching Wiris question

  Background:
    Given the "wiris" filter is "on"
    Given the "mathjaxloader" filter is "disabled"
    Given the following "users" exist:
      | username | firstname | lastname | email               |
      | teacher1 | T1        | Teacher1 | teacher1@moodle.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  @javascript
  Scenario: Create a Matching Wiris question with 3 subquestions
    When I click on "Create a new question ..." "button"
    And I choose the question type "Matching - science"
    Then I open Wiris Quizzes Studio
    And I click on "Define random variables and functions" "text"
    And I add the variable "a" with value "1"
    And I add the variable "b" with value "2"
    And I add the variable "c" with value "3"
    And I click on "//*[@id='wrsUI_quizzesStudioHomeSaveButton']" "xpath_element"
    Then I set the following fields to these values:
      | Question name                      | match-wiris-001                  |
      | Question text                      | Match the numbers.               |
      | General feedback                   | One=#a, Two=#b and Three=#3.     |
      | id_subquestions_0                  | One                              |
      | id_subanswers_0                    | #a                               |
      | id_subquestions_1                  | Two                              |
      | id_subanswers_1                    | #b                               |
      | id_subquestions_2                  | Three                            |
      | id_subanswers_2                    | #c                               |
      | For any correct response           | Your answer is correct           |
      | For any partially correct response | Your answer is partially correct |
      | For any incorrect response         | Your answer is incorrect         |
      | Hint 1                             | This is your first hint          |
      | Hint 2                             | This is your second hint         |
    And I click on "//*[@id='id_submitbutton']" "xpath_element"
    Then I should see "match-wiris-001"
