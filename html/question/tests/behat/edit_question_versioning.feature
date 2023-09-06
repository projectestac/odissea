@core @core_question
Feature: Questions in the question bank have versions
  In order to see modified questions
  As a teacher
  I want to view them as different versions

  Background:
    Given the following "courses" exist:
      | fullname | shortname | category | groupmode |
      | Course 1 | C1 | 0 | 1 |
    And the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "activities" exist:
      | activity   | name   | course | idnumber |
      | quiz       | Quiz 1 | C1     | quiz1    |
    And the following "questions" exist:
      | questioncategory | qtype     | name           | questiontext              | answer 1 |
      | Test questions   | truefalse | First question | Answer the first question | True     |
    And quiz "Quiz 1" contains the following questions:
      | question       | page |
      | First question | 1    |

  @javascript
  Scenario: Question version is displayed
    Given I am on the "Course 1" "core_question > course question bank" page logged in as "teacher1"
    When I choose "Edit question" action for "First question" in the question bank
    Then I should see "Version 1"

  @javascript
  Scenario: Question version change when question is altered
    Given I am on the "Course 1" "core_question > course question bank" page logged in as "teacher1"
    When I choose "Edit question" action for "First question" in the question bank
    And I should see "Version 1"
    When I set the field "id_name" to "Renamed question v2"
    And I set the field "id_questiontext" to "edited question"
    And I press "id_submitbutton"
    Then I should not see "First question"
    And I should see "Renamed question v2"
    When I choose "Edit question" action for "Renamed question v2" in the question bank
    Then I should see "Version 2"
    And I should not see "Version 1"
