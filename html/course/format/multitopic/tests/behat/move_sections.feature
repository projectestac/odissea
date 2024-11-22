@format @format_multitopic
Feature: Sections can be moved in Multitopic format
  In order to rearrange my course contents
  As a teacher
  I need to move sections

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
    And the following "course" exists:
      | fullname      | Course 1   |
      | shortname     | C1         |
      | format        | multitopic |
      | coursedisplay | 0          |
      | numsections   | 5          |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And the following "activities" exist:
      | activity | name               | course | idnumber | section |
      | forum    | Test forum name A  | C1     | forum1   | 1       |
      | forum    | Test forum name B  | C1     | forum2   | 2       |
      | forum    | Test forum name C  | C1     | forum3   | 3       |
      | forum    | Test forum name D  | C1     | forum4   | 4       |
      | forum    | Test forum name E  | C1     | forum5   | 5       |
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

  Scenario: Move first-level page forward and back
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    Then I should see "Test forum name A" in the "#section-1" "css_element"
    And I should see "Move page right" in the "#section-1" "css_element"
    And I should not see "Move page left" in the "#section-1" "css_element"
    And I click on "Move page right" "link" in the "#section-1" "css_element"
    And I should see "Test forum name A" in the "#section-3" "css_element"
    And I should see "Move page left" in the "#section-3" "css_element"
    And I should not see "Move page right" in the "#section-3" "css_element"
    And I click on "Move page left" "link" in the "#section-3" "css_element"
    And I should see "Test forum name A" in the "#section-1" "css_element"

  Scenario: Move second-level page forward and back
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    And I click on "Section 2" "link" in the ".course-content .nav ~ .nav" "css_element"
    Then I should see "Test forum name B" in the "#section-2" "css_element"
    And I should see "Move page left" in the "#section-2" "css_element"
    And I should see "Move page right" in the "#section-2" "css_element"
    And I click on "Move page right" "link" in the "#section-2" "css_element"
    And I should see "Test forum name B" in the "#section-4" "css_element"
    And I should see "Move page left" in the "#section-4" "css_element"
    And I should not see "Move page right" in the "#section-4" "css_element"
    And I click on "Move page left" "link" in the "#section-4" "css_element"
    And I should see "Test forum name B" in the "#section-2" "css_element"

  Scenario: Raise and lower page level
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    And I click on "Section 2" "link" in the ".course-content .nav ~ .nav" "css_element"
    Then I should see "Test forum name B" in the "#section-2" "css_element"
    And I should see "Raise page level" in the "#section-2" "css_element"
    And I should not see "Lower page level" in the "#section-2" "css_element"
    And I click on "Raise page level" "link" in the "#section-2" "css_element"
    And I should see "Test forum name B" in the "#section-2" "css_element"
    And I should see "Lower page level" in the "#section-2" "css_element"
    And I should not see "Raise page level" in the "#section-2" "css_element"
    And I click on "Lower page level" "link" in the "#section-2" "css_element"
    And I should see "Test forum name B" in the "#section-2" "css_element"

  Scenario: Move topic between pages
    Given I click on "Section 1" "link" in the ".course-content .nav" "css_element"
    And I click on "Section 2" "link" in the ".course-content .nav ~ .nav" "css_element"
    Then I should see "Test forum name C" in the "#section-3" "css_element"
    And I should see "Move to previous page" in the "#section-3" "css_element"
    And I should see "Move to next page" in the "#section-3" "css_element"
    And I click on "Move to next page" "link" in the "#section-3" "css_element"
    And I should see "Test forum name C" in the "#section-5" "css_element"
    And I should see "Move to previous page" in the "#section-5" "css_element"
    And I should not see "Move to next page" in the "#section-5" "css_element"
    And I click on "Move to previous page" "link" in the "#section-5" "css_element"
    And I should see "Test forum name C" in the "#section-3" "css_element"
