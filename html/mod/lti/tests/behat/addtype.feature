@mod @mod_lti
Feature: Add preconfigured tools via teacher interface
  In order to provide reusable activities for teachers
  As a teacher
  I need to be able to add preconfigured tools

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | Terry1    | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
    And the following "activities" exist:
      | activity | course | name      | typeid | toolurl                                                  |
      | lti      | C1     | Test tool | 0      | /mod/lti/tests/fixtures/ims_cartridge_basic_lti_link.xml |

  Scenario: Add a tool from a cartridge
    Given I am on the "Test tool" "lti activity editing" page logged in as teacher1
    And I expand all fieldsets
    Then the field "Tool URL" matches value "http://www.example.com/lti/provider.php"
    And the field "Secure tool URL" matches value "https://www.example.com/lti/provider.php"
    And the field "Icon URL" matches value "http://download.moodle.org/unittest/test.jpg"
    And the field "Secure icon URL" matches value "https://download.moodle.org/unittest/test.jpg"

  @javascript @_switch_window
  Scenario: Add a preconfigured tool from a cartridge
    Given I am on the "Test tool" "lti activity editing" page logged in as teacher1
    And I follow "Add preconfigured tool"
    And I switch to "add_tool" window
    And I set the field "Tool name" to "Placeholder"
    And I set the field "Tool URL" to local url "/mod/lti/tests/fixtures/ims_cartridge_basic_lti_link.xml"
    And I press "Save changes"
    And I switch to the main window
    And I wait "2" seconds
    And I follow "Edit preconfigured tool"
    When I switch to "edit_tool" window
    Then the field "Tool URL" matches value "http://www.example.com/lti/provider.php"
    And the field "Icon URL" matches value "http://download.moodle.org/unittest/test.jpg"
    And the field "Secure icon URL" matches value "https://download.moodle.org/unittest/test.jpg"
    And I press "Cancel"
    And I switch to the main window
    And I press "Save and display"
    And I am on the "Test tool" "lti activity editing" page
    And the field "Preconfigured tool" matches value "Placeholder"

  @javascript @_switch_window
  Scenario: Add and use a preconfigured tool
    Given I am on the "Test tool" "lti activity editing" page logged in as teacher1
    And I set the field "Tool URL" to local url "/mod/lti/tests/fixtures/tool_provider.php"
    And I press "Save and display"
    When I switch to "contentframe" iframe
    Then I should see "This represents a tool provider"
