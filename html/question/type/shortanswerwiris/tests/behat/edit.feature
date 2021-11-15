@qtype @qtype_wq @qtype_shortanswerwiris @qtype_shortanswerwiris_edit
Feature: Test editing a Short answer wiris question
  As a teacher
  In order to be able to update my Short answer wiris question
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
      | questioncategory | qtype            | name                        | template           |
      | Test questions   | shortanswerwiris | shortanswer-001 for editing | scienceshortanswer |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  @javascript @_switch_window
  Scenario: Edit a short answer <wiris question
    When I choose "Edit question" action for "shortanswer-001" in the question bank
    And I set the following fields to these values:
      | Question name | |
    And I press "id_submitbutton"
    Then I should see "You must supply a value here."
    When I set the following fields to these values:
      | Question name | Edited shortanswer-001 name |
    And I press "id_submitbutton"
    Then I should see "Edited shortanswer-001 name"
    When I choose "Edit question" action for "Edited shortanswer-001" in the question bank
    And I press "Blank for another choice"
    And I Open Wiris Quizzes Studio
    And I type "math"
    And I click on "//*[@id='wrsUI_quizzesStudioHomeSaveButton']" "xpath_element"
    Then I press "id_submitbutton"
    Then I should see "Edited shortanswer-001 name"
    When I choose "Preview" action for "Edited shortanswer-001" in the question bank
    And I switch to "questionpreview" window
    And I should see "math"
