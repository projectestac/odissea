@qtype @qtype_wq @qtype_multianswerwiris @qtype_multianswerwiris_play
Feature: Test importing and answering multianswerwiris questions
  As a teacher
  In order to reuse and editing multianswerwiris questions
  I need to import them and then edit them

  Background:
    Given the "wiris" filter is "on"
    Given the "mathjaxloader" filter is "disabled"
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | T1        | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage

  @javascript @_file_upload
  Scenario: Import and execute multianswerwiris question.
    When I navigate to "Question bank > Import" in current page administration
    And I set the field "id_format_xml" to "1"
    And I upload "question/type/multianswerwiris/tests/fixtures/testquestion.moodle.xml" file to "Import" filemanager
    And I press "id_submitbutton"
    Then I should see "Parsing questions from import file."
    And I should see "Importing 1 questions from file"
    And I should see "1."
    And I press "Continue"
    Then I choose "Preview" action for "Cloze Wiris Test Question" in the question bank
    And I switch to "questionpreview" window
    And I click on "Fill in correct responses" "button"
    And I click on "Submit and finish" "button"
    Then I should see "Correct"
