@mod @mod_assign
Feature: Bulk released grades should not be sent to gradebook while submissions are anonymous.
  In order to preserve student anonymity until identities are explicitly revealed
  As a teacher
  I should be able to bulk release grades for anonymous submissions via
  marking workflow without the grades being pushed to the gradebook.

  Background:
    Given the following "courses" exist:
      | fullname | shortname | category | groupmode |
      | Course 1 | C1        | 0        | 1         |
    And the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
      | student1 | Student   | 1        | student1@example.com |
      | student2 | Student   | 2        | student2@example.com |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
      | student1 | C1     | student        |
      | student2 | C1     | student        |
    # Add the assignment.
    And the following "activity" exists:
      | activity                            | assign                      |
      | course                              | C1                          |
      | name                                | Test assignment name        |
      | assignsubmission_onlinetext_enabled | 1                           |
      | assignsubmission_file_enabled       | 0                           |
      | markingworkflow                     | 1                           |
      | blindmarking                        | 1                           |
      | assignfeedback_comments_enabled     | 1                           |
      | assignfeedback_editpdf_enabled      | 1                           |
    # Add a submission.
    And I am on the "Test assignment name" "assign activity" page logged in as "student1"
    Then I should not see "Feedback"
    And I should see "Not marked" in the "Grading status" "table_row"
    And I press "Add submission"
    And I set the following fields to these values:
      | Online text | I'm student1's submission |
    And I press "Save changes"
    # Add another submission.
    And I am on the "Test assignment name" "assign activity" page logged in as "student2"
    Then I should not see "Feedback"
    And I should see "Not marked" in the "Grading status" "table_row"
    And I press "Add submission"
    And I set the following fields to these values:
      | Online text | I'm student2's submission |
    And I press "Save changes"
    # Mark the submissions.
    And I am on the "Test assignment name" "assign activity" page logged in as "teacher1"
    And I follow "View all submissions"
    Then I should see "Not marked" in the "I'm student1's submission" "table_row"
    And I click on "Grade" "link" in the "I'm student1's submission" "table_row"
    And I set the field "Grade out of 100" to "50"
    And I set the field "Marking workflow state" to "In review"
    And I set the field "Feedback comments" to "Great job!"
    And I set the field "Notify student" to "0"
    And I press "Save changes"
    And I am on the "Test assignment name" "assign activity" page
    And I follow "View all submissions"
    Then I should see "Not marked" in the "I'm student2's submission" "table_row"
    And I click on "Grade" "link" in the "I'm student2's submission" "table_row"
    And I set the field "Grade out of 100" to "50"
    And I set the field "Marking workflow state" to "In review"
    And I set the field "Feedback comments" to "Great job!"
    And I set the field "Notify student" to "0"
    And I press "Save changes"
    And I am on the "Test assignment name" "assign activity" page
    And I follow "View all submissions"
    Then I should see "In review" in the "I'm student1's submission" "table_row"
    And I should see "In review" in the "I'm student2's submission" "table_row"

  @javascript @_alert
  Scenario: Grades are released in bulk before student identities are revealed.
    When I set the field "selectall" to "1"
    And I set the field "operation" to "Set marking workflow state"
    And I click on "Go" "button" confirming the dialogue
    Then I should not see "Student 1 (student1@example.com)"
    And I should not see "Student 2 (student2@example.com)"
    And I set the field "Marking workflow state" to "Released"
    And I set the field "Notify student" to "No"
    And I press "Save changes"
    And I am on the "Test assignment name" "assign activity" page
    And I follow "View all submissions"
    Then I should see "Released" in the "I'm student1's submission" "table_row"
    And I should see "Released" in the "I'm student2's submission" "table_row"
    And I am on the "Course 1" "grades > User report > View" page logged in as "student1"
    Then I should not see "50"
    And I should not see "Great job!"
    And I am on the "Course 1" "grades > User report > View" page logged in as "student2"
    Then I should not see "50"
    And I should not see "Great job!"
    And I am on the "Test assignment name" "assign activity" page logged in as "teacher1"
    And I follow "View all submissions"
    And I set the field "Grading action" to "Reveal student identities"
    And I press "Continue"
    Then I should see "Released" in the "Student 1" "table_row"
    And I should see "Released" in the "Student 2" "table_row"
    And I am on the "Course 1" "grades > User report > View" page logged in as "student1"
    Then I should see "50"
    And I should see "Great job!"
    And I am on the "Course 1" "grades > User report > View" page logged in as "student2"
    Then I should see "50"
    And I should see "Great job!"

  @javascript @_alert
  Scenario: Grades are released in bulk after student identities are revealed.
    When I set the field "Grading action" to "Reveal student identities"
    And I press "Continue"
    When I set the field "selectall" to "1"
    And I set the field "operation" to "Set marking workflow state"
    And I click on "Go" "button" confirming the dialogue
    Then I should see "Student 1 (student1@example.com)"
    And I should see "Student 2 (student2@example.com)"
    And I set the field "Marking workflow state" to "Released"
    And I set the field "Notify student" to "No"
    And I press "Save changes"
    And I am on the "Test assignment name" "assign activity" page
    And I follow "View all submissions"
    Then I should see "Released" in the "Student 1" "table_row"
    And I should see "Released" in the "Student 2" "table_row"
    And I am on the "Course 1" "grades > User report > View" page logged in as "student1"
    Then I should see "50"
    And I should see "Great job!"
    And I am on the "Course 1" "grades > User report > View" page logged in as "student2"
    Then I should see "50"
    And I should see "Great job!"
