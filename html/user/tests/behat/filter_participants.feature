@core @core_user
Feature: Course participants can be filtered
  In order to filter the list of course participants
  As a user
  I need to visit the course participants page and apply the appropriate filters

  Background:
    Given the following "courses" exist:
      | fullname | shortname | groupmode |
      | Course 1 | C1        |     1     |
      | Course 2 | C2        |     0     |
      | Course 3 | C3        |     0     |
    And the following "users" exist:
      | username | firstname | lastname | email                | idnumber | country | city   | maildisplay |
      | student1 | Student   | 1        | student1@example.com | SID1     |         | SCITY1 | 0           |
      | student2 | Student   | 2        | student2@example.com | SID2     | GB      | SCITY2 | 1           |
      | student3 | Student   | 3        | student3@example.com | SID3     | AU      | SCITY3 | 0           |
      | student4 | Student   | 4        | student4@example.com | SID4     | AT      | SCITY4 | 0           |
      | teacher1 | Teacher   | 1        | teacher1@example.com | TID1     | US      | TCITY1 | 0           |
    And the following "course enrolments" exist:
      | user     | course | role           | status | timeend       |
      | student1 | C1     | student        |    0   |               |
      | student2 | C1     | student        |    1   |               |
      | student3 | C1     | student        |    0   |               |
      | student4 | C1     | student        |    0   | ##yesterday## |
      | student1 | C2     | student        |    0   |               |
      | student2 | C2     | student        |    0   |               |
      | student3 | C2     | student        |    0   |               |
      | student1 | C3     | student        |    0   |               |
      | student2 | C3     | student        |    0   |               |
      | student3 | C3     | student        |    0   |               |
      | teacher1 | C1     | editingteacher |    0   |               |
      | teacher1 | C2     | editingteacher |    0   |               |
      | teacher1 | C3     | editingteacher |    0   |               |
    And the following "groups" exist:
      | name    | course | idnumber |
      | Group 1 | C1     | G1       |
      | Group 2 | C1     | G2       |
      | Group A | C3     | GA       |
      | Group B | C3     | GB       |
    And the following "group members" exist:
      | user     | group |
      | student2 | G1    |
      | student2 | G2    |
      | student3 | G2    |
      | student1 | GA    |
      | student2 | GA    |
      | student2 | GB    |

  @javascript
  Scenario: No filters applied
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    Then I should see "Student 1" in the "participants" "table"
    And I should see "Student 2" in the "participants" "table"
    And I should see "Student 3" in the "participants" "table"
    And I should see "Teacher 1" in the "participants" "table"

  @javascript
  Scenario Outline: Filter users for a course
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    When I open the autocomplete suggestions list
    And I click on "<filter1>" item in the autocomplete list
    Then I should see "<expected1>" in the "participants" "table"
    And I should see "<expected2>" in the "participants" "table"
    And I should see "<expected3>" in the "participants" "table"
    And I should not see "<notexpected1>" in the "participants" "table"
    And I should not see "<notexpected2>" in the "participants" "table"
    # Note the 'XX-IGNORE-XX' elements are for when there is less than 2 'not expected' items.
    Examples:
      | filter1                         | expected1 | expected2 | expected3 | notexpected1 | notexpected2 |
      | Group: No group                 | Student 1 | Student 4 | Teacher 1 | Student 2    | Student 3    |
      | Group: Group 1                  | Student 2 |           |           | Student 1    | Student 3    |
      | Group: Group 2                  | Student 2 | Student 3 |           | Student 1    | XX-IGNORE-XX |
      | Role: Teacher                   | Teacher 1 |           |           | Student 1    | Student 2    |
      | Status: Active                  | Teacher 1 | Student 1 | Student 3 | Student 2    | Student 4    |
      | Status: Inactive                | Student 2 | Student 4 |           | Teacher 1    | Student 1    |

  @javascript
  Scenario Outline: Filter users which are group members in several courses
    Given I log in as "teacher1"
    And I am on "Course 3" course homepage
    And I navigate to course participants
    When I open the autocomplete suggestions list
    And I click on "<filter1>" item in the autocomplete list
    Then I should see "<expected1>" in the "participants" "table"
    And I should see "<expected2>" in the "participants" "table"
    And I should see "<expected3>" in the "participants" "table"
    And I should not see "<notexpected1>" in the "participants" "table"
    And I should not see "<notexpected2>" in the "participants" "table"
    # Note the 'XX-IGNORE-XX' elements are for when there is less than 2 'not expected' items.
    Examples:
      | filter1                         | expected1 | expected2 | expected3 | notexpected1 | notexpected2 |
      | Group: No group                 | Student 3 |           |           | Student 1    | Student 2    |
      | Group: Group A                  | Student 1 | Student 2 |           | Student 3    | XX-IGNORE-XX |
      | Group: Group B                  | Student 2 |           |           | Student 1    | Student 3    |

  @javascript
  Scenario: Filter users who have no role in a course
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    And I click on "Student 1's role assignments" "link"
    And I click on ".form-autocomplete-selection [aria-selected=true]" "css_element"
    And I press key "27" in the field "Student 1's role assignments"
    And I click on "Save changes" "link"
    When I open the autocomplete suggestions list
    And I click on "Role: No roles" item in the autocomplete list
    Then I should see "Student 1" in the "participants" "table"
    And I should not see "Student 2" in the "participants" "table"
    And I should not see "Student 3" in the "participants" "table"
    And I should not see "Student 4" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"

  @javascript
  Scenario: Multiple filters applied
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    When I open the autocomplete suggestions list
    And I click on "Role: Student" item in the autocomplete list
    And I open the autocomplete suggestions list
    And I click on "Status: Active" item in the autocomplete list
    Then I should see "Student 1" in the "participants" "table"
    And I should see "Student 3" in the "participants" "table"
    And I should not see "Student 2" in the "participants" "table"
    And I should not see "Student 4" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"
    # Add more filters.
    And I open the autocomplete suggestions list
    And I click on "Enrolment methods: Manual enrolments" item in the autocomplete list
    And I open the autocomplete suggestions list
    And I click on "Group: Group 2" item in the autocomplete list
    And I should see "Student 3" in the "participants" "table"
    But I should not see "Teacher 1" in the "participants" "table"
    And I should not see "Student 1" in the "participants" "table"
    And I should not see "Student 2" in the "participants" "table"
    And I should not see "Student 4" in the "participants" "table"
    # Deselect the active status filter.
    And I click on "Status: Active" "text" in the ".form-autocomplete-selection" "css_element"
    # Apply Status: Inactive filter.
    And I open the autocomplete suggestions list
    And I click on "Status: Inactive" item in the autocomplete list
    Then I should see "Student 2" in the "participants" "table"
    But I should not see "Student 4" in the "participants" "table"
    And I should not see "Student 1" in the "participants" "table"
    And I should not see "Student 3" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"

  @javascript
  Scenario: Filter by keyword
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    # Note: This is the literal string "student", not the Role student.
    When I set the field "Filters" to "student"
    And I press key "13" in the field "Filters"
    Then I should see "Student 1" in the "participants" "table"
    And I should see "Student 2" in the "participants" "table"
    And I should see "Student 3" in the "participants" "table"
    And I should see "Student 4" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"

  @javascript
  Scenario: Reorder users without losing filter
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    And I open the autocomplete suggestions list
    And I click on "Role: Student" item in the autocomplete list
    When I click on "Surname" "link"
    Then I should see "Role: Student"
    And I should see "Student 1" in the "participants" "table"
    And I should see "Student 2" in the "participants" "table"
    And I should see "Student 3" in the "participants" "table"
    And I should see "Student 4" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"

  @javascript
  Scenario: Rendering filter options for teachers in a course that don't support groups
    Given I log in as "teacher1"
    And I am on "Course 2" course homepage
    And I navigate to course participants
    When I open the autocomplete suggestions list
    Then I should see "Role:" in the ".form-autocomplete-suggestions" "css_element"
    And I should see "Enrolment methods:" in the ".form-autocomplete-suggestions" "css_element"
    But I should not see "Group:" in the ".form-autocomplete-suggestions" "css_element"

  @javascript
  Scenario: Rendering filter options for students who have limited privileges
    Given I log in as "student1"
    And I am on "Course 2" course homepage
    And I navigate to course participants
    When I open the autocomplete suggestions list
    Then I should see "Role:" in the ".form-autocomplete-suggestions" "css_element"
    But I should not see "Status:" in the ".form-autocomplete-suggestions" "css_element"
    And I should not see "Enrolment methods:" in the ".form-autocomplete-suggestions" "css_element"

  @javascript
  Scenario: Filter by user identity fields
    Given I log in as "teacher1"
    And the following config values are set as admin:
        | showuseridentity | idnumber,email,city,country |
    And I am on "Course 1" course homepage
    And I navigate to course participants
    # Search by email (only).
    When I set the field "Filters" to "student1@example.com"
    And I press key "13" in the field "Filters"
    Then I should see "Student 1" in the "participants" "table"
    And I should not see "Student 2" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"
    # Search by idnumber (only).
    And I click on "student1@example.com" "text" in the ".form-autocomplete-selection" "css_element"
    And I set the field "Filters" to "SID"
    And I press key "13" in the field "Filters"
    And I should see "Student 1" in the "participants" "table"
    And I should see "Student 2" in the "participants" "table"
    And I should see "Student 3" in the "participants" "table"
    And I should see "Student 4" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"
    # Search by city (only).
    And I click on "SID" "text" in the ".form-autocomplete-selection" "css_element"
    And I set the field "Filters" to "SCITY"
    And I press key "13" in the field "Filters"
    And I should see "Student 1" in the "participants" "table"
    And I should see "Student 2" in the "participants" "table"
    And I should see "Student 3" in the "participants" "table"
    And I should see "Student 4" in the "participants" "table"
    And I should not see "Teacher 1" in the "participants" "table"
    # Search by country text (only) - should not match.
    And I click on "SCITY" "text" in the ".form-autocomplete-selection" "css_element"
    And I set the field "Filters" to "GB"
    And I press key "13" in the field "Filters"
    And I should see "Nothing to display"
    # Check no match.
    And I click on "GB" "text" in the ".form-autocomplete-selection" "css_element"
    And I set the field "Filters" to "NOTHING"
    And I press key "13" in the field "Filters"
    And I should see "Nothing to display"

  @javascript
  Scenario: Filter by user identity fields when cannot see the field data
    Given I log in as "admin"
    And I set the following system permissions of "Teacher" role:
      | moodle/site:viewuseridentity | Prevent |
    And the following config values are set as admin:
      | showuseridentity | idnumber,email,city,country |
    And I log out
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to course participants
    # Search by email (only) - should only see visible email + own.
    When I set the field "Filters" to "@example.com"
    And I press key "13" in the field "Filters"
    Then I should not see "Student 1" in the "participants" "table"
    And I should see "Student 2" in the "participants" "table"
    And I should not see "Student 3" in the "participants" "table"
    And I should not see "Student 4" in the "participants" "table"
    And I should see "Teacher 1" in the "participants" "table"
    # Search for other fields - should only see own results.
    And I click on "@example.com" "text" in the ".form-autocomplete-selection" "css_element"
    And I set the field "Filters" to "SID"
    And I press key "13" in the field "Filters"
    And I should see "Nothing to display"
    And I click on "SID" "text" in the ".form-autocomplete-selection" "css_element"
    And I set the field "Filters" to "TID"
    And I press key "13" in the field "Filters"
    And I should see "Teacher 1" in the "participants" "table"
    And I set the field "Filters" to "CITY"
    And I press key "13" in the field "Filters"
    And I should see "Teacher 1" in the "participants" "table"
    And I should not see "Student 1" in the "participants" "table"
    # Check no match.
    And I set the field "Filters" to "NOTHING"
    And I press key "13" in the field "Filters"
    And I should see "Nothing to display"
