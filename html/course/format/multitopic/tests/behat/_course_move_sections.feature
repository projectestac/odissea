@format @format_multitopic
Feature: Sections can be moved (Multitopic format)
  In order to rearrange my course contents
  As a teacher
  I need to move sections up and down

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format     | coursedisplay | numsections |
      | Course 1 | C1        | multitopic | 0             | 5           |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And the following "activities" exist:
      | activity | name            | intro                        | course | idnumber | section |
      | forum    | Test forum name | Test forum name description  | C1     | forum1   | 1       |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage with editing mode on

  Scenario: Move up and down a section with Javascript disabled in a single page course
    When I move down section "1"
    Then I should see "Test forum name" in the "Section 2" "section"
    And I move up section "2"
    And I should see "Test forum name" in the "Section 1" "section"
