@format @format_multitopic
Feature: Activity navigation in Multitopic format
  In order to switch between activities
  As a user
  I need to use the Back to course link in activities

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
    And the following "activities" exist:
      | activity   | name         | intro                       | course | idnumber  | section |
      | assign     | Assignment 1 | Test assignment description | C1     | assign1   | 3       |
      | page       | Page 1       | Test page description       | C1     | page1     | 5       |
    And I log in as "admin"
    And I set the following administration settings values:
      | allowstealth | 1 |
    And I log out
    And I log in as "teacher1"
    And I am on "Course 1" course homepage with editing mode on
    And I edit the section "1" and I fill the form with:
      | Level                      | 0         |
    And I edit the section "2" and I fill the form with:
      | Level                      | 1         |
    And I edit the section "3" and I fill the form with:
      | Level                      | 2         |
    And I edit the section "4" and I fill the form with:
      | Level                      | 0         |
    And I edit the section "5" and I fill the form with:
      | Level                      | 2         |
    And I click on "Hide" "link" in the "Page 1" activity
    And I click on "Make available" "link" in the "Page 1" activity
    And I click on "General" "link" in the ".course-content .nav" "css_element"

  Scenario: Enter and exit activity
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    And I click on "Section 2" "link" in the ".course-content .nav ~ .nav" "css_element"
    Then I should see "Section 2" in the "#section-2" "css_element"
    And I should see "Section 3" in the "#section-3" "css_element"
    And I should see "Assignment 1" in the "#section-3" "css_element"
    And I follow "Assignment 1"
    And I should see "Back to course" in the ".course-content-header" "css_element"
    And I should see "Back to course" in the ".course-content-footer" "css_element"
    And I follow "Back to course"
    And I should see "Assignment 1" in the "#section-3" "css_element"

  Scenario: Back to course links not shown for stealth activities
    Given I click on "Section 4" "link" in the ".course-content .nav" "css_element"
    Then I should see "Section 4" in the "#section-4" "css_element"
    And I should see "Section 5" in the "#section-5" "css_element"
    And I should see "Page 1" in the "#section-5" "css_element"
    And I follow "Page 1"
    And I should not see "Back to course" in the ".course-content-header" "css_element"
    And I should not see "Back to course" in the ".course-content-footer" "css_element"
