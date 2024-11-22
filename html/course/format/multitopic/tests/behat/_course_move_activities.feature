@format @format_multitopic
Feature: Activities can be moved between sections (Multitopic format)
  In order to rearrange my course contents
  As a teacher
  I need to move activities between sections

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format | coursedisplay | numsections |
      | Course 1 | C1 | multitopic | 0 | 5 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
    And the following "activity" exists:
      | activity | forum                  |
      | course   | C1                     |
      | idnumber | 00001                  |
      | name     | Test forum name        |
      | intro    | Test forum description |
      | section  | 1                      |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage with editing mode on

  Scenario: Move activities in a single page course with Javascript disabled
    When I move "Test forum name" activity to section "2"
    Then I should see "Test forum name" in the "Section 2" "section"
    And I should not see "Test forum name" in the "Section 1" "section"
