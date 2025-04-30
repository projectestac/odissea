@core @core_grades @javascript
Feature: We can enter in grades and view reports from the gradebook
  In order to check the expected results are displayed
  As a teacher
  I need to assign grades and check that they display correctly in the gradebook.
  I need to enable grade weightings and check that they are displayed correctly.

  Background:
    Given the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1 | topics |
    And the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
      | student1 | Student | 1 | student1@example.com |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
    And the following "activities" exist:
      | activity   | name                   | course | idnumber | assignsubmission_onlinetext_enabled |
      | assign     | Test assignment name 1 | C1     | assign1  | 1                                   |
      | assign     | Test assignment name 2 | C1     | assign2  | 1                                   |
    And I log in as "admin"
    And I set the following administration settings values:
      | grade_aggregations_visible | Mean of grades,Weighted mean of grades,Simple weighted mean of grades,Mean of grades (with extra credits),Median of grades,Lowest grade,Highest grade,Mode of grades,Natural |
    And I am on the "Test assignment name 1" "assign activity" page logged in as student1
    When I press "Add submission"
    And I set the following fields to these values:
      | Online text | This is a submission for assignment 1 |
    And I press "Save changes"
    And I press "Submit assignment"
    And I press "Continue"
    Then I should see "Submitted for grading"
    And I am on the "Test assignment name 2" "assign activity" page
    When I press "Add submission"
    And I set the following fields to these values:
      | Online text | This is a submission for assignment 2 |
    And I press "Save changes"
    And I press "Submit assignment"
    And I press "Continue"
    Then I should see "Submitted for grading"
    And I am on the "Course 1" "grades > Grader report > View" page logged in as "teacher1"
    And I turn editing mode on
    And I give the grade "80.00" to the user "Student 1" for the grade item "Test assignment name 1"
    And I give the grade "90.00" to the user "Student 1" for the grade item "Test assignment name 2"
    And I press "Save changes"

  Scenario: Grade a grade item and ensure the results display correctly in the gradebook
    When I navigate to "View > User report" in the course gradebook
    And the "Gradebook navigation menu" select menu should contain "Grader report"
    And I set the field "Search users" to "Student"
    And "View all results (1)" "list_item" should exist
    And I click on "View all results (1)" "option_role"
    And I log out
    And I log in as "student1"
    And I follow "Grades" in the user menu
    And I click on "Course 1" "link" in the "region-main" "region"
    Then the following should exist in the "user-grade" table:
      | Grade item | Grade | Range | Percentage |
      | Test assignment name 1 | 80.00 | 0–100 | 80.00 % |
      | Test assignment name 2 | 90.00 | 0–100 | 90.00 % |
      | Course total | 170.00 | 0–200 | 85.00 % |
    And the following should not exist in the "user-grade" table:
      | Grade item | Grade | Range | Percentage |
      | Course total | 90.00 | 0–100 | 90.00 % |
    And I follow "Grades" in the user menu
    And "Course 1" row "Grade" column of "overview-grade" table should contain "170.00"
    And "Course 1" row "Grade" column of "overview-grade" table should not contain "90.00"

  Scenario: We can add a weighting to a grade item and it is displayed properly in the user report
    When I navigate to "Setup > Gradebook setup" in the course gradebook
    And I set the following settings for grade item "Course 1" of type "course" on "setup" page:
      | Aggregation | Weighted mean of grades |
    And I set the field "Extra credit value for Test assignment name" to "0.72"
    And I press "Save changes"
    And I navigate to "Setup > Course grade settings" in the course gradebook
    And I set the following fields to these values:
      | Show weightings | Show |
    And I press "Save changes"
    And I log out
    And I log in as "student1"
    And I follow "Grades" in the user menu
    And I click on "Course 1" "link" in the "region-main" "region"
    Then the following should exist in the "user-grade" table:
      | Grade item             | Calculated weight | Grade | Range | Percentage |
      | Test assignment name 1 | 41.86 %           | 80.00 | 0–100 | 80.00 %    |
      | Test assignment name 2 | 58.14 %           | 90.00 | 0–100 | 90.00 %    |
      | Course total           | -                 | 85.81 | 0–100 | 85.81 %    |
    And the following should not exist in the "user-grade" table:
      | Grade item | Calculated weight | Percentage |
      | Test assignment name 1 | 0.72% | 0.72% |
      | Test assignment name 2 | 1.00% | 1.00% |
      | Course total | 1.00% | 1.00% |
