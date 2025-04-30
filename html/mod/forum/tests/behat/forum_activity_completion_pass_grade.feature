@mod @mod_forum @core_completion
Feature: Completion pass grade  view activity completion in the forum activity
  In order to have visibility of forum completion requirements
  As a student
  I need to be able to view my forum completion progress

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Vinnie    | Student1 | student1@example.com |
      | teacher1 | Darrell   | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category | enablecompletion |
      | Course 1 | C1        | 0        | 1                |
    And the following "course enrolments" exist:
      | user | course | role           |
      | student1 | C1 | student        |
      | teacher1 | C1 | editingteacher |
    And the following "activity" exists:
      | activity | forum         |
      | course   | C1            |
      | idnumber | mh1           |
      | name     | Music history |
    And I am on the "Music history" "forum activity editing" page logged in as teacher1
    And I expand all fieldsets
    And I set the following fields to these values:
      | Whole forum grading > Type            | Point       |
      | Whole forum grading > Grade to pass   | 50          |
      | Add requirements                      | 1           |
      | View the activity                     | 1           |
      | Receive a grade                       | 1           |
      | Passing grade                         | 1           |
      | completiongradeitemnumber             | Whole forum |
      | completionpostsenabled                | 1           |
      | completionposts                       | 2           |
      | completiondiscussionsenabled          | 1           |
      | completiondiscussions                 | 1           |
      | completionrepliesenabled              | 1           |
      | completionreplies                     | 1           |
    And I press "Save and display"

  Scenario: Forum module displays completion conditions to teachers
    Given I am on the "Music history" "forum activity" page logged in as teacher1
    Then "Music history" should have the "View" completion condition
    And "Music history" should have the "Start discussions: 1" completion condition
    And "Music history" should have the "Make forum posts: 2" completion condition
    And "Music history" should have the "Post replies: 1" completion condition
    And "Music history" should have the "Receive a grade" completion condition
    And "Music history" should have the "Receive a passing grade" completion condition

  @javascript
  Scenario: Student cannot complete a forum activity if one of the conditions are not met
    Given I am on the "Music history" "forum activity" page logged in as student1
    And the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "todo"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "todo"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "todo"
    And the "Receive a grade" completion condition of "Music history" is displayed as "todo"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "todo"
    And I add a new discussion to "Music history" forum with:
       | Subject | Fun instruments |
       | Message | I like drums    |
    And I am on the "Music history" "forum activity" page
    And the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "done"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "todo"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "todo"
    And the "Receive a grade" completion condition of "Music history" is displayed as "todo"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "todo"
    And I reply "Fun instruments" post from "Music history" forum with:
      | Subject | Reply 1 to Fun instruments |
      | Message | Guitar is also Fun         |
    And I am on the "Music history" "forum activity" page
    And the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "done"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "done"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "done"
    And the "Receive a grade" completion condition of "Music history" is displayed as "todo"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "todo"
    # Grade the student
    And I am on the "Music history" "forum activity" page logged in as teacher1
    And I press "Grade users"
    And I set the field "grade" to "33"
    And I press "Save"
    And I press "Close grader"
    # All conditions should now be completed.
    When I am on the "Music history" "forum activity" page logged in as student1
    Then the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "done"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "done"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "done"
    And the "Receive a grade" completion condition of "Music history" is displayed as "done"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "failed"

  @javascript
  Scenario: Student can complete a forum activity when all conditions are met
    Given I am on the "Music history" "forum activity" page logged in as student1
    And the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "todo"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "todo"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "todo"
    And the "Receive a grade" completion condition of "Music history" is displayed as "todo"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "todo"
    And I add a new discussion to "Music history" forum with:
       | Subject | Fun instruments |
       | Message | I like drums    |
    And I am on the "Music history" "forum activity" page
    And the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "done"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "todo"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "todo"
    And the "Receive a grade" completion condition of "Music history" is displayed as "todo"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "todo"
    And I reply "Fun instruments" post from "Music history" forum with:
      | Subject | Reply 1 to Fun instruments |
      | Message | Guitar is also Fun         |
    And I am on the "Music history" "forum activity" page
    And the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "done"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "done"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "done"
    And the "Receive a grade" completion condition of "Music history" is displayed as "todo"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "todo"
    # Grade the student
    And I am on the "Music history" "forum activity" page logged in as teacher1
    And I press "Grade users"
    And I set the field "grade" to "60"
    And I press "Save"
    And I press "Close grader"
    # All conditions should now be completed.
    When I am on the "Music history" "forum activity" page logged in as student1
    Then the "View" completion condition of "Music history" is displayed as "done"
    And the "Start discussions: 1" completion condition of "Music history" is displayed as "done"
    And the "Make forum posts: 2" completion condition of "Music history" is displayed as "done"
    And the "Post replies: 1" completion condition of "Music history" is displayed as "done"
    And the "Receive a grade" completion condition of "Music history" is displayed as "done"
    And the "Receive a passing grade" completion condition of "Music history" is displayed as "done"
