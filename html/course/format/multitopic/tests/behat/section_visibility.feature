@format @format_multitopic @_cross_browser
Feature: Show/hide course sections in Multitopic format
  In order to delay sections availability
  As a teacher
  I need to show or hide sections

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
      | student1 | Student | 1 | student1@example.com |
    And the following "course" exists:
      | fullname         | Course 1   |
      | shortname        | C1         |
      | format           | multitopic |
      | hiddensections   | 0          |
      | enablecompletion | 1          |
      | numsections      | 5          |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
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
    And I click on "General" "link" in the ".course-content .nav" "css_element"

  Scenario: Hide and show page
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    Then I should see "Section 1" in the "#section-1" "css_element"
    And I hide section "1"
    And section "1" should be hidden
    And I click on "Section 2" "link" in the ".course-content .nav ~ .nav" "css_element"
    And I should see "Section 2" in the "#section-2" "css_element"
    And section "2" should be hidden
    And I should see "Section 3" in the "#section-3" "css_element"
    And section "3" should be hidden
    And I click on "Section 4" "link" in the ".course-content .nav" "css_element"
    And I should see "Section 4" in the "#section-4" "css_element"
    And section "4" should be visible
    And I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    And I should see "Section 1" in the "#section-1" "css_element"
    And I show section "1"
    And section "1" should be visible

  Scenario: Hide and show topic
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    And I click on "Section 2" "link" in the ".course-content .nav ~ .nav" "css_element"
    Then I should see "Section 2" in the "#section-2" "css_element"
    And I should see "Section 3" in the "#section-3" "css_element"
    And section "3" should be visible
    And I hide section "3"
    And section "3" should be hidden
    And section "2" should be visible
    And I show section "3"
    And section "3" should be visible
