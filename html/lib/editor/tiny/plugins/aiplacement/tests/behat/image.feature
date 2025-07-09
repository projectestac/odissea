@editor @editor_tiny @tiny_aiplacement
Feature: Generate image using AI
  In order to generate image using AI, as a teacher, I need to be able to use the AI image generation feature in the TinyMCE editor

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email          |
      | teacher1 | Teacher   | 1        | t1@example.com |
      | teacher2 | Teacher   | 2        | t2@example.com |
    And the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1        | topics |
      | Course 2 | C2        | topics |
    And the following "roles" exist:
      | name                   | shortname | description      | archetype      |
      | Custom editing teacher | custom1   | My custom role 1 | editingteacher |
      | Custom teacher         | custom2   | My custom role 2 | editingteacher |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | custom1        |
      | teacher2 | C1     | custom2        |
      | teacher1 | C2     | editingteacher |
    And the following "activities" exist:
      | activity | name      | intro     | introformat | course | content     | contentformat | idnumber |
      | page     | PageName1 | PageDesc1 | 1           | C1     | PageContent | 1             | 1        |
      | page     | PageName2 | PageDesc2 | 1           | C2     | PageContent | 1             | 2        |
    And the following "permission overrides" exist:
      | capability                         | permission | role    | contextlevel | reference |
      | aiplacement/editor:generate_text  | Prohibit   | user    | System       |           |
      | aiplacement/editor:generate_image | Prohibit   | custom2 | Course       | C1        |
    And I enable "openai" "aiprovider" plugin
    And the following config values are set as admin:
      | apikey | 123 | aiprovider_openai |
    And I enable "editor" "aiplacement" plugin

  @javascript
  Scenario: Image generation using AI is not available if placement is not enabled
    Given I disable "editor" "aiplacement" plugin
    When I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    Then "AI generate image" button should not exist in the "Description" TinyMCE editor
    And I enable "editor" "aiplacement" plugin
    And I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should exist in the "Description" TinyMCE editor

  @javascript
  Scenario: Image generation using AI is not available if provider is not enabled
    Given I disable "openai" "aiprovider" plugin
    When I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    Then "AI generate image" button should not exist in the "Description" TinyMCE editor
    And I enable "openai" "aiprovider" plugin
    And I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should exist in the "Description" TinyMCE editor

  @javascript
  Scenario: Image generation using AI is not available if provider action is not enabled
    Given the following config values are set as admin:
      | generate_image |  | aiprovider_openai |
    When I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    Then "AI generate image" button should not exist in the "Description" TinyMCE editor
    And the following config values are set as admin:
      | generate_image | 1 | aiprovider_openai |
    And I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should exist in the "Description" TinyMCE editor

  @javascript
  Scenario: Image generation using AI is not available if placement action is not enabled
    Given the following config values are set as admin:
      | generate_image |  | aiplacement_editor |
    When I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    Then "AI generate image" button should not exist in the "Description" TinyMCE editor
    And the following config values are set as admin:
      | generate_image | 1 | aiplacement_editor |
    And I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should exist in the "Description" TinyMCE editor

  @javascript
  Scenario: Image generation using AI is not available if provider action is not enabled and placement action is enabled
    Given the following config values are set as admin:
      | generate_image |  | aiplacement_editor |
      | generate_image |  | aiprovider_openai  |
    When I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    Then "AI generate image" button should not exist in the "Description" TinyMCE editor
    And the following config values are set as admin:
      | generate_image | 1 | aiplacement_editor |
    And I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should not exist in the "Description" TinyMCE editor
    And the following config values are set as admin:
      | generate_image | 1 | aiprovider_openai |
    And I am on the "PageName2" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should exist in the "Description" TinyMCE editor

  @javascript
  Scenario: Image generation using AI is not available if the user does not have permission
    Given I am on the "PageName1" "page activity" page logged in as teacher2
    When I navigate to "Settings" in current page administration
    Then "AI generate image" button should not exist in the "Description" TinyMCE editor
    And I am on the "PageName1" "page activity" page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And "AI generate image" button should exist in the "Description" TinyMCE editor
    And I click on the "AI generate image" button for the "Description" TinyMCE editor
    And I should see "Welcome to the new AI feature!" in the "AI usage policy" "dialogue"
    And I click on "Accept and continue" "button" in the "AI usage policy" "dialogue"
    And I should see "Describe the image you want AI to create"
