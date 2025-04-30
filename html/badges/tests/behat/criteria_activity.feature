@mod @mod_quiz @core @core_badges @core_completion @javascript
Feature: Award badges based on activity completion
  In order to ensure a student has learned the material before being marked complete
  As a teacher
  I need to configure an activity to grant a badge only when the student achieves a passing grade upon completion.

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | 1        | student1@example.com |
      | student2 | Student   | 2        | student2@example.com |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category | enablecompletion |
      | Course 1 | C1        | 0        | 1                |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
      | student1 | C1     | student        |
      | student2 | C1     | student        |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "questions" exist:
      | questioncategory | qtype     | name            | questiontext               |
      | Test questions   | truefalse | First question  | Answer the first question  |
      | Test questions   | truefalse | Second question | Answer the second question |
    And the following "activities" exist:
      | activity   | name                 | course | idnumber | attempts | gradepass | completion | completionusegrade | completionpassgrade |
      | quiz       | Test quiz pass grade | C1     | quiz1    | 2        | 50        | 2          | 1                  | 1                   |
      | quiz       | Test quiz only grade | C1     | quiz2    | 1        | 60        | 2          | 1                  | 0                   |
    And quiz "Test quiz only grade" contains the following questions:
      | question        | page |
      | First question  | 1    |
      | Second question | 1    |
    And quiz "Test quiz pass grade" contains the following questions:
      | question       | page |
      | First question | 1    |
    And the following "core_badges > Badge" exists:
      | name        | Course Badge 1               |
      | status      | 0                            |
      | type        | 2                            |
      | course      | C1                           |
      | description | Course badge 1 description   |
      | image       | badges/tests/behat/badge.png |
    And the following "core_badges > Badge" exists:
      | name        | Course Badge 2               |
      | status      | 0                            |
      | type        | 2                            |
      | course      | C1                           |
      | description | Course badge 2 description   |
      | image       | badges/tests/behat/badge.png |
    And I am on the "Course 1" course page logged in as teacher1

  Scenario: Student earns a badge using activity completion when passing grade is not required
    # Pass grade for student1.
    Given user "student1" has attempted "Test quiz only grade" with responses:
      | slot | response |
      |   1  | True     |
      |   2  | True     |
    # Fail grade for student2.
    And user "student2" has attempted "Test quiz only grade" with responses:
      | slot | response |
      |   1  | True     |
      |   2  | False    |
    And I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges" in current page administration
    And I press "Manage badges"
    And I follow "Course Badge 1"
    And I select "Criteria" from the "jump" singleselect
    And I set the field "type" to "Activity completion"
    And I set the field "Quiz - Test quiz only grade" to "1"
    And I press "Save"
    And I press "Enable access"
    And I press "Continue"
    Then I should see "Recipients (2)"
    And I select "Recipients (2)" from the "jump" singleselect
    And I should see "Student 1"
    And I should see "Student 2"

  Scenario: Student does not earn a badge using activity completion when does not get passing grade
    Given user "student1" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      |   1  | False    |
    And user "student2" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      |   1  | False    |
    And I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges" in current page administration
    And I press "Manage badges"
    And I follow "Course Badge 1"
    And I select "Criteria" from the "jump" singleselect
    And I set the field "type" to "Activity completion"
    And I set the field "Quiz - Test quiz pass grade" to "1"
    And I press "Save"
    And I press "Enable access"
    And I press "Continue"
    And I should see "Recipients (0)"
    # Pass grade for student1.
    When user "student1" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      | 1    | True     |
    # Fail grade for student2.
    And user "student2" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      | 1    | False    |
    And I navigate to "Badges > Manage badges" in current page administration
    And I follow "Course Badge 1"
    Then I should see "Recipients (1)"
    And I select "Recipients (1)" from the "jump" singleselect
    And I should see "Student 1"
    And I should not see "Student 2"

  Scenario: Previously graded pass/fail students should earn a badge after enabling a badge
    Given user "student1" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      |   1  | False    |
    And user "student2" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      |   1  | False    |
    And I am on the "Course 1" course page logged in as teacher1
    And I navigate to "Badges" in current page administration
    And I press "Manage badges"
    And I follow "Course Badge 1"
    And I select "Criteria" from the "jump" singleselect
    And I set the field "type" to "Activity completion"
    And I set the field "Quiz - Test quiz pass grade" to "1"
    And I press "Save"
    # Pass grade for student1.
    And user "student1" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      | 1    | True     |
    # Fail grade for student2.
    And user "student2" has attempted "Test quiz pass grade" with responses:
      | slot | response |
      | 1    | False    |
    # Enable badge access once students have completed the activity.
    When I press "Enable access"
    And I press "Continue"
    # Only student1 should earn the badge because student2 did not pass the quiz.
    Then I should see "Recipients (1)"
    And I select "Recipients (1)" from the "jump" singleselect
    And I should see "Student 1"
    And I should not see "Student 2"
