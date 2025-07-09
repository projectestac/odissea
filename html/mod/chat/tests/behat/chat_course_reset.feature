@mod @mod_chat
Feature: Chat reset
  In order to reuse past chat activities
  As a teacher
  I need to remove all previous data.

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Tina | Teacher1 | teacher1@example.com |
      | student1 | Sam | Student1 | student1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
    And I enable "chat" "mod" plugin
    And the following "activities" exist:
      | activity | name           | Description           | course | idnumber |
      | chat     | Test chat name | Test chat description | C1     | chat1    |

  @javascript
  Scenario: Use course reset to update chat start date
    Given I am on the "Course 1" "course" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And I set the following fields to these values:
      | startdate[day]       | 1 |
      | startdate[month]     | January |
      | startdate[year]      | 2020 |
    And I press "Save and display"
    And I follow "Test chat name"
    And I navigate to "Settings" in current page administration
    And I set the following fields to these values:
      | chattime[day]       | 1 |
      | chattime[month]     | January |
      | chattime[year]      | 2020 |
      | chattime[hour]      | 12 |
      | chattime[minute]    | 00 |
    And I press "Save and display"
    And I am on the "Course 1" "reset" page
    And I press "Deselect all"
    And I set the following fields to these values:
      | reset_start_date[enabled] | 1  |
      | reset_start_date[day]       | 1 |
      | reset_start_date[month]     | January |
      | reset_start_date[year]      | 2030 |
    And I press "Reset course"
    And I click on "Reset course" "button" in the "Reset course?" "dialogue"
    And I should see "Date" in the "Chats" "table_row"
    And I press "Continue"
    Then I follow "Test chat name"
    And I navigate to "Settings" in current page administration
    And I expand all fieldsets
    And the "chattime[year]" select box should contain "2030"
