@mod @mod_jclic
Feature: Preview JClic activity
  In order to preview JClic activity
  As a teacher
  I need to preview JClic activity.

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1 | topics |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
    And I log in as "teacher1"
    And I follow "Course 1"
    And I turn editing mode on
    And I add a "JClic" to section "1" and I fill the form with:
      | Name | Test JClic |
      | Description | A testing JClic activity |
      | Type | External URL |
      | URL | https://clic.xtec.cat/projects/bombers/jclic/bombers.jclic.zip |

  Scenario: Preview JClic
    Given I follow "Test JClic"
    When I click on "Preview JClic activity" "link"
    Then I should see "Test JClic"
    And I should see "A testing JClic activity"
    And "//div[contains(@id,'jclic_applet')]" "xpath_element" should exist