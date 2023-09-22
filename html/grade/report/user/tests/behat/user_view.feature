@core @core_grades @gradereport_user @javascript
Feature: View the user report as the student will see it
  In order to know what grades students will see
  As a teacher
  I need to be able to view the user report as that other user

  Background:
    Given the following "courses" exist:
      | fullname                                                                                            | shortname | category | groupmode |
      | <span class="multilang" lang="en">Course</span><span class="multilang" lang="de">Kurs</span> 1 & '" | C1        | 0        | 1         |
    And the following "users" exist:
      | username | firstname | lastname | email | idnumber |
      | teacher1 | Teacher | 1 | teacher1@example.com | t1 |
      | student1 | Student | 1 | student1@example.com | s1 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
    And the following "grade categories" exist:
      | fullname | course |
      | Sub category 1 | C1 |
      | Sub category 2 | C1 |
    And the following "activities" exist:
      | activity | course | idnumber | name                  | intro             | gradecategory  | grade | gradepass |
      | assign   | C1     | a1       | Test assignment one   | Submit something! | Sub category 1 | 100   | 50        |
      | assign   | C1     | a2       | Test assignment two   | Submit something! | Sub category 1 | 100   | 50        |
      | assign   | C1     | a3       | Test assignment three | Submit something! | Sub category 2 | 100   |           |
      | assign   | C1     | a4       | Test assignment four  | Submit something! | Sub category 2 | 100   |           |
    And the following "activities" exist:
      | activity | course | idnumber | name | intro | grade |
      | assign | C1 | a5 | Test assignment five | Submit something! | 100 |
      | assign | C1 | a6 | Test assignment six | Submit something! | 100 |
    And the "multilang" filter is "on"
    And the "multilang" filter applies to "content and headings"
    When I am on the "C1" "grades > gradebook setup" page logged in as "teacher1"
    And I hide the grade item "Test assignment six"
    And I hide the grade item "Sub category 2"
    And I navigate to "View > Grader report" in the course gradebook
    And I turn editing mode on
    And I change window size to "large"
    And I give the grade "80.00" to the user "Student 1" for the grade item "Test assignment one"
    And I give the grade "35.00" to the user "Student 1" for the grade item "Test assignment two"
    And I give the grade "100.00" to the user "Student 1" for the grade item "Test assignment three"
    And I give the grade "50.00" to the user "Student 1" for the grade item "Test assignment four"
    And I give the grade "21.00" to the user "Student 1" for the grade item "Test assignment five"
    And I give the grade "97.00" to the user "Student 1" for the grade item "Test assignment six"
    And I press "Save changes"
    And I change window size to "medium"

  Scenario: View the report as the teacher themselves
    When I navigate to "View > User report" in the course gradebook
    And I click on "Student 1" in the "user" search widget
    And I should see "Course 1 & '\""
    And I should not see "Course 1 &amp; '\""
    And I set the field "View report as" to "Myself"
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 13.33 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 5.83 %                       |
      | Sub category 1 total    | 33.33 %           | 115.00 | 0–200 | 57.50 %    | -                            |
      | Test assignment three   | 50.00 %           | 100.00 | 0–100 | 100.00 %   | 16.67 %                      |
      | Test assignment four    | 50.00 %           | 50.00  | 0–100 | 50.00 %    | 8.33 %                       |
      | Sub category 2 total    | 33.33 %           | 150.00 | 0–200 | 75.00 %    | -                            |
      | Test assignment five    | 16.67 %           | 21.00  | 0–100 | 21.00 %    | 3.50 %                       |
      | Test assignment six     | 16.67 %           | 97.00  | 0–100 | 97.00 %    | 16.17 %                      |
      | Course total            | -                 | 383.00 | 0–600 | 63.83 %    | -                            |

  Scenario: View the report as the student from both the teachers and students perspective
    When I navigate to "View > User report" in the course gradebook
    And I click on "Student 1" in the "user" search widget
    And I set the field "View report as" to "User"
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | -                 | 80.00  | 0–100 | 80.00 %    | -                            |
      | Test assignment two     | -                 | 35.00  | 0–100 | 35.00 %    | -                            |
      | Sub category 1 total    | 33.33 %           | -      | 0–200 | -          | -                            |
      | Test assignment five    | -                 | 21.00  | 0–100 | 21.00 %    | -                            |
      | Course total            | -                 | -      | 0–600 | -          | -                            |
    And "//i[@aria-label='Pass']" "xpath_element" should exist in the "Test assignment one" "table_row"
    And "//i[@aria-label='Fail']" "xpath_element" should exist in the "Test assignment two" "table_row"
    And the following should not exist in the "user-grade" table:
      | Grade item              |
      | Test assignment three   |
      | Test assignment four    |
      | Sub category 2 total    |
      | Test assignment six     |
    And I log out
    And I am on the "C1" "Course" page logged in as "student1"
    And I navigate to "User report" in the course gradebook
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | -                 | 80.00  | 0–100 | 80.00 %    | -                            |
      | Test assignment two     | -                 | 35.00  | 0–100 | 35.00 %    | -                            |
      | Sub category 1 total    | 33.33 %           | -      | 0–200 | -          | -                            |
      | Test assignment five    | -                 | 21.00  | 0–100 | 21.00 %    | -                            |
      | Course total            | -                 | -      | 0–600 | -          | -                            |
    And "//i[@aria-label='Pass']" "xpath_element" should exist in the "Test assignment one" "table_row"
    And "//i[@aria-label='Fail']" "xpath_element" should exist in the "Test assignment two" "table_row"
    And the following should not exist in the "user-grade" table:
      | Grade item              |
      | Test assignment three   |
      | Test assignment four    |
      | Sub category 2 total    |
      | Test assignment six     |

  Scenario: View the report as the student from both the teachers and students perspective with totals excluding hidden
    Given I navigate to "Setup > Course grade settings" in the course gradebook
    And I set the field with xpath "//select[@name='report_user_showtotalsifcontainhidden']" to "Show totals excluding hidden items"
    And I press "Save changes"
    And I navigate to "View > User report" in the course gradebook
    When I click on "Student 1" in the "user" search widget
    And I set the field "View report as" to "User"
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 26.67 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 11.67 %                      |
      | Sub category 1 total    | 66.67 %           | 115.00 | 0–200 | 57.50      | -                            |
      | Test assignment five    | 33.33 %           | 21.00  | 0–100 | 21.00 %    | 7.00 %                       |
      | Course total            | -                 | 136.00 | 0–300 | 45.33 %    | -                            |
    And the following should not exist in the "user-grade" table:
      | Grade item              |
      | Test assignment three   |
      | Test assignment four    |
      | Sub category 2 total    |
      | Test assignment six     |
    And I log out
    And I am on the "C1" "Course" page logged in as "student1"
    And I navigate to "User report" in the course gradebook
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 26.67 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 11.67 %                      |
      | Sub category 1 total    | 66.67 %           | 115.00 | 0–200 | 57.50      | -                            |
      | Test assignment five    | 33.33 %           | 21.00  | 0–100 | 21.00 %    | 7.00 %                       |
      | Course total            | -                 | 136.00 | 0–300 | 45.33 %    | -                            |
    And the following should not exist in the "user-grade" table:
      | Grade item              |
      | Test assignment three   |
      | Test assignment four    |
      | Sub category 2 total    |
      | Test assignment six     |

  Scenario: View the report as the student from both the teachers and students perspective with totals including hidden
    Given I navigate to "Setup > Course grade settings" in the course gradebook
    And I set the field with xpath "//select[@name='report_user_showtotalsifcontainhidden']" to "Show totals including hidden items"
    And I press "Save changes"
    And I navigate to "View > User report" in the course gradebook
    When I click on "Student 1" in the "user" search widget
    And I set the field "View report as" to "User"
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 13.33 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 5.83 %                       |
      | Sub category 1 total    | 33.33 %           | 115.00 | 0–200 | 57.50 %    | -                            |
      | Test assignment five    | 16.67 %           | 21.00  | 0–100 | 21.00 %    | 3.50 %                       |
      | Course total            | -                 | 383.00 | 0–600 | 63.83 %    | -                            |
    And the following should not exist in the "user-grade" table:
      | Grade item              |
      | Test assignment three   |
      | Test assignment four    |
      | Sub category 2 total    |
      | Test assignment six     |
    And I log out
    And I am on the "C1" "Course" page logged in as "student1"
    And I navigate to "User report" in the course gradebook
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 13.33 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 5.83 %                       |
      | Sub category 1 total    | 33.33 %           | 115.00 | 0–200 | 57.50 %    | -                            |
      | Test assignment five    | 16.67 %           | 21.00  | 0–100 | 21.00 %    | 3.50 %                       |
      | Course total            | -                 | 383.00 | 0–600 | 63.83 %    | -                            |
    And the following should not exist in the "user-grade" table:
      | Grade item              |
      | Test assignment three   |
      | Test assignment four    |
      | Sub category 2 total    |
      | Test assignment six     |

  Scenario: View the report as the student from both the teachers and students perspective when the student can view hidden
    Given the following "role capability" exists:
      | role                    | student |
      | moodle/grade:viewhidden | allow   |
    And I am on the "C1" "Course" page logged in as "teacher1"
    And I navigate to "Setup > Course grade settings" in the course gradebook
    And I set the field with xpath "//select[@name='report_user_showtotalsifcontainhidden']" to "Show totals excluding hidden items"
    And I press "Save changes"
    And I navigate to "View > User report" in the course gradebook
    When I click on "Student 1" in the "user" search widget
    And I set the field "View report as" to "User"
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 13.33 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 5.83 %                       |
      | Sub category 1 total    | 33.33 %           | 115.00 | 0–200 | 57.50 %    | -                            |
      | Test assignment three   | 50.00 %           | 100.00 | 0–100 | 100.00 %   | 16.67 %                      |
      | Test assignment four    | 50.00 %           | 50.00  | 0–100 | 50.00 %    | 8.33 %                       |
      | Sub category 2 total    | 33.33 %           | 150.00 | 0–200 | 75.00 %    | -                            |
      | Test assignment five    | 16.67 %           | 21.00  | 0–100 | 21.00 %    | 3.50 %                       |
      | Test assignment six     | 16.67 %           | 97.00  | 0–100 | 97.00 %    | 16.17 %                      |
      | Course total            | -                 | 383.00 | 0–600 | 63.83 %    | -                            |
    And I log out
    And I log in as "student1"
    And I am on "C1" course homepage
    And I navigate to "User report" in the course gradebook
    Then the following should exist in the "user-grade" table:
      | Grade item              | Calculated weight | Grade  | Range | Percentage | Contribution to course total |
      | Test assignment one     | 50.00 %           | 80.00  | 0–100 | 80.00 %    | 13.33 %                      |
      | Test assignment two     | 50.00 %           | 35.00  | 0–100 | 35.00 %    | 5.83 %                       |
      | Sub category 1 total    | 33.33 %           | 115.00 | 0–200 | 57.50 %    | -                            |
      | Test assignment three   | 50.00 %           | 100.00 | 0–100 | 100.00 %   | 16.67 %                      |
      | Test assignment four    | 50.00 %           | 50.00  | 0–100 | 50.00 %    | 8.33 %                       |
      | Sub category 2 total    | 33.33 %           | 150.00 | 0–200 | 75.00 %    | -                            |
      | Test assignment five    | 16.67 %           | 21.00  | 0–100 | 21.00 %    | 3.50 %                       |
      | Test assignment six     | 16.67 %           | 97.00  | 0–100 | 97.00 %    | 16.17 %                      |
      | Course total            | -                 | 383.00 | 0–600 | 63.83 %    | -                            |
