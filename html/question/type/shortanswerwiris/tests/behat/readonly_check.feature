@qtype @qtype_shortanswerwiris @qtype_shortanswerwiris_readonly_check
Feature: Test short answer wiris readonly check
  As a teacher
  In order to assure that after submitting a question I will see a readonly check on a short answer wiris question
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
      | questioncategory | qtype            | name                  | template           |
      | Test questions   | shortanswerwiris | shortanswer-wiris-001 | scienceshortanswer |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  @javascript @_switch_window
  Scenario: Shortanswer readonly check
    When I choose "Preview" action for "shortanswer-wiris-001" in the question bank
    And I switch to "questionpreview" window
    And I wait "5" seconds
    And I click on "Fill in correct responses" "button"
    And I click on "Submit and finish" "button"
    And I wait "5" seconds
    Then I should have a readonly input
