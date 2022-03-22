@mod @mod_quiz @quiz @quiz_grading
Feature: Basic use of the Manual grading report
  In order to easily find students attempts that need manual grading
  As a teacher
  I need to use the manual grading report

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                | idnumber |
      | teacher1 | T1        | Teacher1 | teacher1@example.com | T1000    |
      | marker   | M1        | Marker   | marker@example.com   | M1000    |
      | student1 | S1        | Student1 | student1@example.com | S1000    |
      | student2 | S2        | Student2 | student2@example.com | S2000    |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
      | marker   | C1     | teacher        |
      | student1 | C1     | student        |
      | student2 | C1     | student        |
    And the following "groupings" exist:
      | name         | course  | idnumber |
      | Tutor groups | C1      | tging    |
    And the following "groups" exist:
      | name         | course | idnumber |
      | Tutor group  | C1     | tg       |
      | Marker group | C1     | mg       |
    And the following "grouping groups" exist:
      | grouping | group |
      | tging    | tg    |
    And the following "group members" exist:
      | user     | group |
      | teacher1 | tg    |
      | student1 | tg    |
      | marker   | mg    |
      | student2 | mg    |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "questions" exist:
      | questioncategory | qtype       | name             | questiontext                         | answer 1 | grade |
      | Test questions   | shortanswer | Short answer 001 | Where is the capital city of France? | Paris    | 100%  |
    And the following "activities" exist:
      | activity   | name   | course | idnumber | groupmode | grouping |
      | quiz       | Quiz 1 | C1     | quiz1    | 1         | tging    |
    And quiz "Quiz 1" contains the following questions:
      | question         | page |
      | Short answer 001 | 1    |

  Scenario: Manual grading report without attempts
    When I am on the "Quiz 1" "mod_quiz > View" page logged in as "teacher1"
    And I navigate to "Results > Manual grading" in current page administration
    Then I should see "Separate groups (Tutor groups)"
    And I should see "All participants"
    And I should see "Quiz 1"
    And I should see "Questions that need grading"
    And I should see "Nothing to display"
    And I follow "Also show questions that have been graded automatically"
    And I should see "Nothing to display"

  Scenario: Manual grading report with attempts
    Given user "student1" has attempted "Quiz 1" with responses:
      | slot | response |
      | 1    | Paris    |
    And I reload the page
    When I am on the "Quiz 1" "mod_quiz > View" page logged in as "teacher1"
    And I navigate to "Results > Manual grading" in current page administration
    Then I should see "Separate groups (Tutor groups)"
    And I should see "All participants"
    And I should see "Quiz 1"
    And I follow "Also show questions that have been graded automatically"
    And I should see "Short answer 001"
    And "Short answer 001" row "To grade" column of "questionstograde" table should contain "0"
    And "Short answer 001" row "Already graded" column of "questionstograde" table should contain "0"
    And I should see "Short answer 001"
    And "Short answer 001" row "To grade" column of "questionstograde" table should contain "0"
    And "Short answer 001" row "Already graded" column of "questionstograde" table should contain "0"
    # Go to the grading page.
    And I click on "update grades" "link" in the "Short answer 001" "table_row"
    And I should see "Grading attempts 1 to 1 of 1"
    # Test the display options.
    And I set the field "Order attempts" to "By student ID number"
    And I press "Change options"
    # General feedback for Short answer 001 displays.
    And I should see "That is a bad answer."
    And I should see "The correct answer is: frog"
    # Adjust the mark for Student1
    And I set the field "Comment" to "I have adjusted your mark to 0.6"
    And I set the field "Mark" to "0.6"
    And I press "Save and go to next page"
    And I should see "All selected attempts have been graded. Returning to the list of questions."
    And "Short answer 001" row "To grade" column of "questionstograde" table should contain "0"
    And "Short answer 001" row "Already graded" column of "questionstograde" table should contain "1"

  Scenario: Manual grading settings are remembered as user preferences
    Given user "student1" has attempted "Quiz 1" with responses:
      | slot | response |
      | 1    | Paris    |
    When I am on the "Quiz 1" "mod_quiz > Manual grading report" page logged in as "teacher1"
    And I follow "Also show questions that have been graded automatically"
    And I click on "update grades" "link" in the "Short answer 001" "table_row"
    And I set the following fields to these values:
      | Questions per page | 42      |
      | Order attempts     | By date |
    And I press "Change options"
    And I log out
    And I am on the "Quiz 1" "mod_quiz > Manual grading report" page logged in as "teacher1"
    And I follow "Also show questions that have been graded automatically"
    And I click on "update grades" "link" in the "Short answer 001" "table_row"
    Then the following fields match these values:
      | Questions per page | 42      |
      | Order attempts     | By date |

  @javascript
  Scenario: Manual grading settings are validated
    Given user "student1" has attempted "Quiz 1" with responses:
      | slot | response |
      | 1    | Paris    |
    And I am on the "Quiz 1" "mod_quiz > Manual grading report" page logged in as "teacher1"
    And I follow "Also show questions that have been graded automatically"
    And I click on "update grades" "link" in the "Short answer 001" "table_row"
    When I set the following fields to these values:
      | Questions per page | 0 |
    Then I should see "You must enter a number that is greater than 0."
    And I set the following fields to these values:
      | Questions per page | -1 |
    And I press "Change options"
    And I should see "You must enter a number that is greater than 0."
    And I set the following fields to these values:
      | Questions per page | abc |
    And I press "Change options"
    And I should see "You must enter a number that is greater than 0."
    And I set the following fields to these values:
      | Questions per page | 1 |
    And I press "Change options"
    And I should not see "You must enter a number that is greater than 0."

  Scenario: A marker cannot access the report in separate group
    Given I am on the "Quiz 1" "mod_quiz > View" page logged in as "marker"
    And user "student1" has attempted "Quiz 1" with responses:
      | slot | response |
      | 1    | frog     |
    And user "student2" has attempted "Quiz 1" with responses:
      | slot | response |
      | 1    | Duck     |
    When I navigate to "Results > Manual grading" in current page administration
    Then I should see "Quiz 1"
    And I should see "Separate groups: All participants"
    Then I should see "Sorry, but you need to be part of a group to see this page."
