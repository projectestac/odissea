@block @block_site_main_menu
Feature: Add URL to main menu block
  In order to add helpful resources for students
  As a admin
  I need to add URLs to the main menu block and check it works.

  @javascript
  Scenario: Add a URL in menu block and ensure it appears
    Given I log in as "admin"
    And I am on site homepage
    And I turn editing mode on
    And I add the "Main menu" block
    When I add a "URL" to section "0" and I fill the form with:
      | Name         | reference link        |
      | Description  | mooooooooodle         |
      | External URL | http://www.moodle.com |
      | id_display   | In pop-up             |
    Then "reference link" "link" should exist in the "Main menu" "block"
    And "Add an activity or resource" "button" should exist in the "Main menu" "block"

  @javascript
  Scenario: When the "Main Menu" block is displayed throrought the entire site, adding an URL in a course
    results in adding it in the course and not in the frontpage
    Given the following "course" exists:
      | fullname         | Course 1 |
      | shortname        | C1       |
      | category         | 0        |
    And I log in as "admin"
    And I am on site homepage
    And I turn editing mode on
    And I add the "Main menu" block
    And I configure the "Main menu" block
    And I set the following fields to these values:
      | Page contexts | Display throughout the entire site |
    And I press "Save changes"
    When I am on the "C1" Course page
    And I add a "URL" to section "0" and I fill the form with:
      | Name                               | reference link        |
      | Description                        | mooooooooodle         |
      | External URL                       | http://www.moodle.com |
      | Display description on course page | 1                     |
      | id_display                         | In pop-up             |
    Then "reference link" "link" should not exist in the "Main menu" "block"
    And I should see "mooooooooodle" in the "region-main" "region"
