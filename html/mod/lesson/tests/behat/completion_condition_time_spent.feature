@mod @mod_lesson
Feature: Set time spent as a completion condition for a lesson
  In order to ensure students spend the needed time to study lessons
  As a teacher
  I need to set time spent to mark the lesson activity as completed

  Scenario: Set time spent as a condition
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | student1 | Student | 1 | student1@example.com |
      | teacher1 | Teacher | 1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
    And the following "activity" exists:
      | activity      | lesson                  |
      | course        | C1                      |
      | idnumber      | 0001                    |
      | name          | Test lesson             |
    And I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Settings" in current page administration
    And I set the following fields to these values:
      | Enable completion tracking | Yes |
    And I press "Save and display"
    And I am on the "Test lesson" "lesson activity editing" page
    And I set the following fields to these values:
      | Completion tracking | Show activity as complete when conditions are met |
      | completionview                | 0 |
      | completiontimespentenabled    | 1 |
      | completiontimespent[timeunit] | 1 |
      | completiontimespent[number]   | 5 |
    And I press "Save and display"
    And I follow "Add a content page"
    And I set the following fields to these values:
      | Page title | First page name |
      | Page contents | First page contents |
      | id_answer_editor_0 | Next page |
      | id_jumpto_0 | Next page |
    And I press "Save page"
    And I select "Add a content page" from the "qtype" singleselect
    And I set the following fields to these values:
      | Page title | Second page name |
      | Page contents | Second page contents |
      | id_answer_editor_0 | Previous page |
      | id_jumpto_0 | Previous page |
      | id_answer_editor_1 | Next page |
      | id_jumpto_1 | Next page |
    And I press "Save page"
    When I am on the "Course 1" course page logged in as student1
    Then the "Spend at least 5 secs on this activity" completion condition of "Test lesson" is displayed as "todo"
    And I follow "Test lesson"
    And I press "Next page"
    # Add 1 sec delay so lesson knows a valid attempt has been made in past.
    And I wait "1" seconds
    And I press "Next page"
    And I should see "You completed this lesson in"
    And I should see ", which is less than the required time of 5 secs. You might need to attempt the lesson again."
    And I am on "Course 1" course homepage
    And the "Spend at least 5 secs on this activity" completion condition of "Test lesson" is displayed as "todo"
    And I am on the "Test lesson" "lesson activity" page
    And I press "Next page"
    And I wait "5" seconds
    And I press "Next page"
    And I should not see "You might need to attempt the lesson again."
    And I am on "Course 1" course homepage
    And the "Spend at least 5 secs on this activity" completion condition of "Test lesson" is displayed as "done"
    And I am on the "Course 1" course page logged in as teacher1
    And "Student 1" user has completed "Test lesson" activity
