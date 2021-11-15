@qtype @qtype_essaywiris @qtype_essaywiris_auxiliar_text
Feature: A teacher can add and preview an auxiliar text field in a Science Essay question
  In order to allow their students to comment on their answers
  As a teacher
  I need to be able to add an auxiliar text field

  Background:
    Given the "wiris" filter is "on"
    Given the "mathjaxloader" filter is "disabled"
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1        | weeks  |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Default for C1 |
    And the following "activities" exist:
      | activity | name   | intro              | course | idnumber |
      | quiz     | Quiz 1 | Quiz 1 description | C1     | quiz1    |

  @javascript @_switch_window
  Scenario: A teacher adds an auxiliar text field to a science essay
    When I log in as "teacher1"
    And I click on "C1" "link"
    And I click on "Quiz 1" "link"
    And I click on "Edit quiz" "button"
    And I click on "Add" "link"
    And I click on "a new question" "link"
    And I click on "Essay - science" "radio"
    And I click on "//input[@name='submitbutton']" "xpath_element"
    And I set the following fields to these values:
    | Question name | Science essay                                         |
    | Question text | What are the steps to solve a second degree equation? |
    | Default mark  | 1                                                     |
    And I open Wiris Quizzes Studio
    And I click on "Input options" "text"
    And I click on "Display auxiliary text field" "text"
    And I click on "//*[@id='wrsUI_quizzesStudioHomeSaveButton']" "xpath_element"
    And I click on "//input[@name='submitbutton']" "xpath_element"
    And I click on "Preview question" "link"
    And I switch to "questionpreview" window
    Then I should see "Write an optional reasoning for your answer:"
    And I wait "20" seconds
