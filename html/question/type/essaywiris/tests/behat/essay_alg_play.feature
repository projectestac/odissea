@qtype @qtype_essaywiris
Feature: A student can answer a Wiris Essay question type
  In order to answer the question
  As a student
  I need to fill in the essay field

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
      | questioncategory | qtype      | name        | template     |
      | Default for C1   | essaywiris | Essay wiris | scienceessay |

  @javascript
  Scenario: A student executes an essay
    Given the following "activities" exist:
      | activity | name   | intro              | course | idnumber |
      | quiz     | Quiz 1 | Quiz 1 description | C1     | quiz1    |
    And quiz "Quiz 1" contains the following questions:
      | question    | page |
      | Essay wiris | 1    |
    When I log in as "student1"
    And I am on "Course 1" course homepage
    And I follow "Quiz 1"
    And I press "Attempt quiz now"
    Then Wirisformula should has width "33" with error of "2"
    Then Wirisformula should has height "20" with error of "14"
    When I type "My answer" in "//div[@contenteditable]"
    And I click on "Finish attempt ..." "button"
    And I click on "Submit all and finish" "button"
    And I click on "//input[@type='button']" "xpath_element"
    Then I should see "Not yet graded"