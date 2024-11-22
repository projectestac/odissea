@format @format_multitopic
Feature: Sections can be edited and deleted in Multitopic format
  In order to rearrange my course contents
  As a teacher
  I need to edit and Delete topics

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email            |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format     | coursedisplay | numsections | collapsible |
      | Course 1 | C1        | multitopic | 0             | 5           | 0           |
    And the following "activities" exist:
      | activity   | name                   | intro                         | course | idnumber    | section |
      | assign     | Test assignment name   | Test assignment description   | C1     | assign1     | 0       |
      | book       | Test book name         |                               | C1     | book1       | 1       |
      | lesson     | Test lesson name       | Test lesson description       | C1     | chat1       | 4       |
      | choice     | Test choice name       | Test choice description       | C1     | choice1     | 5       |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And I log in as "teacher1"

  Scenario: View the default name of the general section in Multitopic format
    Given I am on "Course 1" course homepage with editing mode on
    When I edit the section "0"
    Then I should see "General"

  # Edit the default name of the general section removed, because the field type changed.

  Scenario: View the default name of the second section in Multitopic format
    Given I am on "Course 1" course homepage with editing mode on
    When I edit the section "2"
    Then I should see "Section 2"

  # Edit section summary removed, because the field name changed.

  # Edit section default name removed, because the field type changed.

  @javascript
  Scenario: Inline edit section name in Multitopic format
    Given I am on "Course 1" course homepage with editing mode on
    When I set the field "Edit section name" in the "Section 1" "section" to "Midterm evaluation"
    Then I should not see "Section 1" in the "region-main" "region"
    And "New name for section" "field" should not exist
    And I should see "Midterm evaluation" in the "Midterm evaluation" "section"
    And I am on "Course 1" course homepage
    And I should not see "Section 1" in the "region-main" "region"
    And I should see "Midterm evaluation" in the "Midterm evaluation" "section"

  Scenario: Deleting the last section in Multitopic format
    Given I am on "Course 1" course homepage with editing mode on
    When I delete section "5"
    Then I should see "Are you absolutely sure you want to completely delete \"Section 5\" and all the activities it contains?"
    And I press "Delete"
    And I should not see "Section 5"
    And I should see "Section 4"

  Scenario: Deleting the middle section in Multitopic format
    Given I am on "Course 1" course homepage with editing mode on
    When I delete section "4"
    And I press "Delete"
    Then I should not see "Section 5"
    And I should see "Section 4"
    And I should not see "Test lesson name"
    And I should see "Test choice name" in the "Section 4" "section"

  @javascript
  Scenario: Adding sections at the end of a Multitopic format
    Given I am on "Course 1" course homepage with editing mode on
    When I follow "Add topic"
    Then I should see "Section 6" in the "Section 6" "section"
    And I should see "Test choice name" in the "Section 5" "section"
