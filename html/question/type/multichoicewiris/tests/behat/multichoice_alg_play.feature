@qtype @qtype_wq @qtype_multichoicewiris @qtype_multichoicewiris_alg_play
Feature: A student can answer a Wiris Multi Choice question type
  In order to answer the question
  As a student
  I need to answer the multi choice wiris question

  Background:
    Given the "wiris" filter is "on"
    Given the "mathjaxloader" filter is "disabled"
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | 1        | student1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1        | weeks  |
    And the following "course enrolments" exist:
      | user     | course | role    |
      | student1 | C1     | student |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Default for C1 |
    And the following "questions" exist:
      | questioncategory | qtype            | name               | template             |
      | Default for C1   | multichoicewiris | Multi choice wiris | four_of_five_science |

  @javascript
  Scenario: A student executes a wiris multichoice question type
    Given the following "activities" exist:
      | activity | name   | intro              | course | idnumber |
      | quiz     | Quiz 1 | Quiz 1 description | C1     | quiz1    |
    And quiz "Quiz 1" contains the following questions:
      | question           | page |
      | Multi choice wiris | 1    |
    When I log in as "student1"
    And I am on "Course 1" course homepage
    And I follow "Quiz 1"
    And I press "Attempt quiz now"
    Then Wirisformula should exist
    Then I click on "1. " "text"
    And I click on "Finish attempt ..." "button"
    And I click on "Submit all and finish" "button"
    And I click on "//input[@type='button']" "xpath_element"
    Then Feedback should exist
    And Generalfeedback should exist
