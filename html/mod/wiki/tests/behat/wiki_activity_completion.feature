@mod @mod_wiki @core_completion
Feature: View activity completion information in the Wiki activity
  In order to have visibility of wiki completion requirements
  As a student
  I need to be able to view my wiki completion progress

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Vinnie    | Student1 | student1@example.com |
      | teacher1 | Darrell   | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user | course | role           |
      | student1 | C1 | student        |
      | teacher1 | C1 | editingteacher |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Edit settings" in current page administration
    And I expand all fieldsets
    And I set the following fields to these values:
      | Enable completion tracking | Yes |
      | Show activity completion conditions | Yes |
    And I press "Save and display"
    And the following "activity" exists:
      | activity       | wiki          |
      | course         | C1            |
      | idnumber       | mh1           |
      | name           | Music history |
      | section        | 1             |
      | completion     | 2             |
      | completionview | 1             |
    And I am on "Course 1" course homepage
    And I follow "Music history"
    And I click on "Create page" "button"
    And I log out

  Scenario: View automatic completion items as a teacher and confirm all tabs display conditions
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    When I follow "Music history"
    Then "Music history" should have the "View" completion condition
    And I click on "Edit" "link" in the "region-main" "region"
    And "Music history" should have the "View" completion condition
    And I follow "Comments"
    And "Music history" should have the "View" completion condition
    And I follow "Map"
    And "Music history" should have the "View" completion condition
    And I follow "Files"
    And "Music history" should have the "View" completion condition
    And I follow "Administration"
    And "Music history" should have the "View" completion condition

  Scenario: View automatic completion items as a student
    Given I log in as "student1"
    When I am on "Course 1" course homepage
    And I follow "Music history"
    Then the "View" completion condition of "Music history" is displayed as "done"

  @javascript
  Scenario: Use manual completion
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I follow "Music history"
    And I navigate to "Edit settings" in current page administration
    And I expand all fieldsets
    And I press "Unlock completion options"
    And I set the field "Completion tracking" to "Students can manually mark the activity as completed"
    And I press "Save and display"
    # Teacher view.
    And the manual completion button for "Music history" should be disabled
    And I log out
    # Student view.
    When I log in as "student1"
    And I am on "Course 1" course homepage
    And I follow "Music history"
    Then the manual completion button of "Music history" is displayed as "Mark as done"
    And I toggle the manual completion state of "Music history"
    And the manual completion button of "Music history" is displayed as "Done"
