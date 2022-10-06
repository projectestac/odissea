@mod @mod_page @core_completion
Feature: View activity completion information in the Page resource
  In order to have visibility of page completion requirements
  As a student
  I need to be able to view my page completion progress

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Vinnie    | Student1 | student1@example.com |
      | teacher1 | Darrell   | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category | enablecompletion | showcompletionconditions |
      | Course 1 | C1        | 0        | 1                | 1                        |
      | Course 2 | C2        | 0        | 1                | 0                        |
    And the following "course enrolments" exist:
      | user | course | role           |
      | student1 | C1 | student        |
      | teacher1 | C1 | editingteacher |

  Scenario: View automatic completion items as teacher
    Given the following "activity" exists:
      | activity       | page                     |
      | course         | C1                       |
      | idnumber       | page1                    |
      | name           | Music history            |
      | intro          | A lesson learned in life |
      | completion     | 2                        |
      | completionview | 1                        |
    When I am on the "Music history" "page activity" page logged in as teacher1
    Then "Music history" should have the "View" completion condition

  Scenario: View automatic completion items as student
    Given the following "activity" exists:
      | activity       | page                     |
      | course         | C1                       |
      | idnumber       | page1                    |
      | name           | Music history            |
      | intro          | A lesson learned in life |
      | completion     | 2                        |
      | completionview | 1                        |
    When I am on the "Music history" "page activity" page logged in as student1
    Then the "View" completion condition of "Music history" is displayed as "done"

  @javascript
  Scenario: Use manual completion as teacher
    Given the following "activity" exists:
      | activity   | page                     |
      | course     | C1                       |
      | idnumber   | page1                    |
      | name       | Music history            |
      | intro      | A lesson learned in life |
      | completion | 1                        |
    # Teacher view.
    When I am on the "Music history" "page activity" page logged in as teacher1
    Then the manual completion button for "Music history" should be disabled

  @javascript
  Scenario: Use manual completion as student
    Given the following "activity" exists:
      | activity   | page                     |
      | course     | C1                       |
      | idnumber   | page1                    |
      | name       | Music history            |
      | intro      | A lesson learned in life |
      | completion | 1                        |
    # Teacher view.
    When I am on the "Music history" "page activity" page logged in as student1
    And I toggle the manual completion state of "Music history"
    And the manual completion button of "Music history" is displayed as "Done"

  Scenario: The manual completion button will not be shown on the course page if the Show activity completion conditions is set to No as teacher
    Given the following "activity" exists:
      | activity   | page                     |
      | course     | C2                       |
      | idnumber   | page1                    |
      | name       | Music history            |
      | intro      | A lesson learned in life |
      | completion | 1                        |
    When I am on the "Music history" "page activity" page logged in as teacher1
    Then the manual completion button for "Music history" should not exist

  Scenario: The manual completion button will not be shown on the course page if the Show activity completion conditions is set to No as student
    Given the following "activity" exists:
      | activity   | page                     |
      | course     | C2                       |
      | idnumber   | page1                    |
      | name       | Music history            |
      | intro      | A lesson learned in life |
      | completion | 1                        |
    When I am on the "Music history" "page activity" page logged in as student1
    Then the manual completion button for "Music history" should not exist
