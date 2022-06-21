@qtype @qtype_wq @qtype_truefalsewiris @qtype_truefalsewiris_add
Feature: A teacher creaters true false random
  As a teacher
  In order to test my students
  I need to be able to create a True/False Wiris question

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email               |
      | teacher1 | T1        | Teacher1 | teacher1@moodle.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |

  @javascript
  Scenario: Create a True/False Wiris question
    When I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration
    And I click on "Create a new question ..." "button"
    Then I should see "Select a question type to see its description."
    And I choose the question type "True/False - science"
    Then I should see "Adding a true/false - math & science question by WIRIS"
    Then I set the following fields to these values:
      | Question name | true-false-wiris-001 random name    |
      | Question text | This is a Wiris True/False question |
    And I open Wiris Quizzes Studio
    And I click on "Random variables" "text"
    And I type "a = 10"
    And I press the enter key
    And I type "b = x^2 + 1"
    And I press the enter key
    And I type "r = true"
    And I go back in Wiris Quizzes Studio
    And I save Wiris Quizzes Studio
    Then I set the following fields to these values:
      | Correct answer variable | #r |
    And I click on "//*[@id='id_updatebutton']" "xpath_element"
    And I click on "Preview" "link"
    And I switch to "questionpreview" window
    Then I should see "This is a Wiris True/False question"
