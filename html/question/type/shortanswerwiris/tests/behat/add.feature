@qtype @qtype_wq @qtype_shortanswerwiris @qtype_shortanswerwiris_add
Feature: Test creating a Short Answer Wiris question
  As a teacher
  In order to test my students
  I need to be able to create a Short Answer Wiris question

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

  @javascript
  Scenario: Create a Short Answer Wiris question
    When  I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration
    And I click on "Create a new question ..." "button"
    Then I should see "Select a question type to see its description."
    And I choose the question type "Short answer - science"
    Then I should see "Adding a short answer - math & science question by WIRIS"
    Then I set the following fields to these values:
      | Question name | shortanswer-wiris-001 random name    |
      | Question text | This is a Wiris shortanswer question |
    And I open Wiris Quizzes Studio
    And I type "math"
    And I click on "//*[@id='wrsUI_quizzesStudioHomeSaveButton']" "xpath_element"
    Then I set the following fields to these values:
      | id_fraction_0 | 100%                       |
      | id_feedback_0 | Math is an OK good answer. |
    And I click on "//*[@id='id_updatebutton']" "xpath_element"
    And I click on "Preview" "link"
    And I switch to "questionpreview" window
    Then I should see "This is a Wiris shortanswer question"
