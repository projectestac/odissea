@core @core_courseformat @javascript
Feature: Activity type tooltip.
  In order to see the activity type
  As a Teacher
  I need to be able to see a tooltip with the plugin name in editing mode.

  Background:
    Given the following "course" exists:
      | fullname         | Course 1 |
      | shortname        | C1       |
      | category         | 0        |
      | numsections      | 1        |
    And the following "activities" exist:
      | activity | name              | intro                       | course | idnumber | section |
      | assign   | Activity sample 1 | Test assignment description | C1     | sample1  | 1       |
      | page     | Activity sample 2 | Test page description       | C1     | sample2  | 1       |
    And the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
      | student1 | Student   | 1        | student1@example.com |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
      | student1 | C1     | student        |

  Scenario: Teacher can see the activity type tooltip only while editing.
    Given I am on the "C1" "Course" page logged in as "teacher1"
    And the "title" attribute of "Activity sample 1" "core_courseformat > Activity icon" should not be set
    And the "title" attribute of "Activity sample 2" "core_courseformat > Activity icon" should not be set
    And I turn editing mode on
    Then the "title" attribute of "Activity sample 1" "core_courseformat > Activity icon" should contain "Assignment"
    And the "title" attribute of "Activity sample 2" "core_courseformat > Activity icon" should contain "Page"

  Scenario: Student cannot see the activity type tooltip.
    Given I am on the "C1" "Course" page logged in as "student1"
    Then the "title" attribute of "Activity sample 1" "core_courseformat > Activity icon" should not be set

  Scenario: Student cannot see the activity icon link if does not have access.
    Given I am on the "Activity sample 2" "page activity editing" page logged in as "admin"
    When I expand all fieldsets
    And I press "Add restriction..."
    And I click on "Date" "button" in the "Add restriction..." "dialogue"
    And I set the field "direction" to "until"
    And I set the field "x[year]" to "2013"
    And I set the field "x[month]" to "March"
    And I press "Save and return to course"
    And I log out
    And I am on the "C1" "Course" page logged in as "student1"
    Then "Page icon" "link" should not exist in the "Activity sample 2" "activity"
