@repository @repository_contentbank @javascript @core_h5p
Feature: Updating a file in the content bank after using in a course
  In order to use file alias
  As a user
  Updated files must update references when is an alias

  Background:
    Given the following "categories" exist:
      | name      | category | idnumber |
      | Category1 | 0        | CAT1     |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course1  | C1        | CAT1     |
    And the following "contentbank content" exist:
      | contextlevel | reference | contenttype     | user  | contentname | filepath                                  |
      | Course       | C1        | contenttype_h5p | admin | package.h5p | /h5p/tests/fixtures/guess-the-answer.h5p  |

  Scenario: Referenced files is the default option and updates alias as well
    When I log in as "admin"
    And I am on "Course1" course homepage with editing mode on
    And I add a "H5P" to section "1"
    And I set the following fields to these values:
      | Name                      | guessFile     |
    And I click on "Add..." "link" in the ".fp-toolbar" "css_element"
    And I select "Content bank" repository in file picker
    And I click on "package.h5p" "file" in repository content area
    And I click on "Select this file" "button"
    And I click on "Save and display" "button"
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    Then I should see "Press here to reveal answer"
    And I switch to the main frame
    # Now edit the content in the content bank.
    When I am on "Course1" course homepage with editing mode on
    And the following config values are set as admin:
      | unaddableblocks | | theme_boost|
    And I add the "Navigation" block if not present
    And I expand "Site pages" node
    And I click on "Content bank" "link"
    And I click on "package.h5p" "link"
    And I click on "Edit" "link"
    And I wait until the page is ready
    And I switch to "h5p-editor-iframe" class iframe
    And I set the field "Title" to "Required title"
    And I set the field "Descriptive solution label" to "This is a new text"
    And I switch to the main frame
    And I click on "Save" "button"
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    Then I should see "This is a new text"
    And I switch to the main frame
    # Check the course page is updated.
    When I am on "Course1" course homepage with editing mode on
    And I click on "guessFile" "link" in the "page-content" "region"
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    Then I should see "This is a new text"
    And I switch to the main frame

  Scenario: Copied files should not be updated if the original is edited
    When I log in as "admin"
    And I am on "Course1" course homepage with editing mode on
    And I add a "H5P" to section "1"
    And I set the following fields to these values:
      | Name                      | guessFile     |
    And I click on "Add..." "link" in the ".fp-toolbar" "css_element"
    And I select "Content bank" repository in file picker
    And I click on "package.h5p" "file" in repository content area
    And I click on "Make a copy of the file" "radio"
    And I click on "Select this file" "button"
    And I click on "Save and display" "button"
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    Then I should see "Press here to reveal answer"
    And I switch to the main frame
    # Now edit the content in the content bank.
    When I am on "Course1" course homepage with editing mode on
    And the following config values are set as admin:
      | unaddableblocks | | theme_boost|
    And I add the "Navigation" block if not present
    And I expand "Site pages" node
    And I click on "Content bank" "link"
    And I click on "package.h5p" "link"
    And I click on "Edit" "link"
    And I wait until the page is ready
    And I switch to "h5p-editor-iframe" class iframe
    And I set the field "Title" to "Required title"
    And I set the field "Descriptive solution label" to "This is a new text"
    And I switch to the main frame
    And I click on "Save" "button"
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    Then I should see "This is a new text"
    And I switch to the main frame
    # Check the course page is not updated.
    When I am on "Course1" course homepage with editing mode on
    And I click on "guessFile" "link" in the "page-content" "region"
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    Then I should see "Press here to reveal answer"
    And I switch to the main frame
