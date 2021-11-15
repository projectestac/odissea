@qtype @qtype_wq @qtype_truefalsewiris @qtype_truefalsewiris_alg_play
Feature: A student can answer a Wiris Truefalse question type
  In order to answer the question
  As a student
  I need to select the correct answer
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
      | questioncategory | qtype          | name            | template         |
      | Default for C1   | truefalsewiris | Truefalse wiris | sciencetruefalse |

  @javascript
  Scenario: A student executes a truefalsewiris
    Given the following "activities" exist:
      | activity | name   | intro              | course | idnumber |
      | quiz     | Quiz 1 | Quiz 1 description | C1     | quiz1    |
    And quiz "Quiz 1" contains the following questions:
      | question        | page |
      | Truefalse wiris | 1    |
    When I log in as "student1"
    And I am on "Course 1" course homepage
    And I follow "Quiz 1"
    And I press "Attempt quiz now"
    And I click on "False" "radio"
    And I click on "Finish attempt" "button"
    And I click on "Submit all and finish" "button"
    And I click on "//input[@type='button']" "xpath_element"
    Then I should see "The correct answer is"
    And I click on "Finish review" "link"
    Then I should see "Highest grade"
