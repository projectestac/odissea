@qtype @qtype_wq @qtype_multichoicewiris @qtype_multichoicewiris_add
Feature: Test creating a Multiple choice wiris question without template
  As a teacher
  In order to test my students
  I need to be able to create a Multiple choice question using variables

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email               |
      | teacher1 | T1        | Teacher1 | teacher1@moodle.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |

# Here we have to do it manually or create helpers to do the variables creations
  @javascript
  Scenario: Create a Multiple choice wiris question
    When  I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration
    And I click on "Create a new question ..." "button"
    And I choose the question type "Multiple choice - science"
    Then I set the following fields to these values:
      | Question name | multichoiceanswer-wiris-001 random name |
      | Question text | This is a multichoice wiris question    |
    And I open Wiris Quizzes Studio
    And I click on "Define random variables and functions" "text"
    And I press the left key
    And I type "a"
    And I press the right key
    And I type "10"
    And I press the enter key
    And I press the left key
    And I type "b"
    And I press the right key
    And I type "-15"
    And I click on "//*[@id='wrsUI_quizzesStudioHomeSaveButton']" "xpath_element"
    Then I set the following fields to these values:
      | Choice 1      | #a   |
      | id_fraction_0 | 100% |
      | Choice 2      | #b   |
      | id_fraction_1 | None |
    And I click on "//*[@id='id_updatebutton']" "xpath_element"
    And I click on "Preview" "link"
    And I switch to "questionpreview" window
    Then I should see "This is a multichoice wiris question"
