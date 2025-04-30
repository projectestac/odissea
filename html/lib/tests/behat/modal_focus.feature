@core
Feature: Focus lock in modal popups
  In order to navigate a modal popup with keyboard
  As a user
  The tab key should cycle through elements in the form and not go outside it

  @javascript
  Scenario: Tab cycles through elements in modal, using image popup in Tiny as an example
    Given the following "courses" exist:
      | fullname | shortname |
      | Course 1 | C1        |
    And the following "activities" exist:
      | activity | name       | course | idnumber |
      | forum    | Test forum | C1     | forum1   |
    And I am on the "forum1" "Activity" page logged in as "admin"
    And I follow "Add discussion topic"
    And I click on "Image" "button"

    # Repeated tabs just to get to the last element. This may need changing if controls are added
    # or removed to the form.
    And I press the tab key
    And I press the tab key
    And I press the tab key
    And I press the tab key
    And I press the tab key
    And the focused element is "Browse repositories" "button"

    # Tab past last element should go back to the first one, which is the modal itself, then the close button.
    And I press the tab key
    And I press the tab key
    Then the focused element is "Close" "button" in the "Insert image" "dialogue"

    And I press the shift tab key
    And I press the shift tab key
    And the focused element is "Browse repositories" "button"
