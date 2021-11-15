@qtype @qtype_wq @qtype_multichoicewiris @qtype_multichoicewiris_edit
Feature: Test editing a Multichoice wiris question
  As a teacher
  In order to be able to update my Multichoice wiris question
  I need to edit them

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | T1        | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "questions" exist:
      | questioncategory | qtype            | name                              | template             |
      | Test questions   | multichoicewiris | multichoice-wiris-001 for editing | four_of_five_science |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  @javascript @_switch_window
  Scenario: Edit a multichoice wiris question
    When I choose "Edit question" action for "multichoice-wiris-001 for editing" in the question bank
    And I set the following fields to these values:
      | Question name | |
    And I press "id_submitbutton"
    Then I should see "You must supply a value here."
    When I set the following fields to these values:
      | Question name | Edited multichoice-wiris-001 name |
    And I press "id_submitbutton"
    Then I should see "Edited multichoice-wiris-001 name"
    When I choose "Edit question" action for "Edited multichoice-wiris-001" in the question bank
    And I press "Blanks for 3 more choices"
    Then I set the following fields to these values:
      | id_answer_5      | 57                                        |
      | id_fraction_5    | 20%                                       |
      | id_feedback_5    | 57 is odd                                 |
      | id_answer_6      | 6                                         |
      | id_fraction_6    | None                                      |
      | id_feedback_6    | 6 is even                                 |
      | id_answer_7      | 88                                        |
      | id_fraction_7    | None                                      |
      | id_feedback_7    | 88 is even                                |
      | id_fraction_0    | 20%                                       |
      | id_fraction_1    | 20%                                       |
      | id_fraction_2    | 20%                                       |
      | id_fraction_3    | 20%                                       |
      | General feedback | The odd numbers are 57, #t1, #t2 and #t4. |
    Then I press "id_submitbutton"
    Then I should see "Edited multichoice-wiris-001"
    When I choose "Preview" action for "Edited multichoice-wiris-001" in the question bank
    And I switch to "questionpreview" window
    And I should see "Which are the odd numbers?"
