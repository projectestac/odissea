@mod @mod_h5pactivity @core_h5p @_file_upload @_switch_iframe
Feature: Change grading options in an H5P activity
  In order to let students do a H5P attempt
  As a teacher
  I need to define what students attempts are used for grading

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
      | student1 | Student   | 1        | student1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
      | student1 | C1     | student        |
    And the following "permission overrides" exist:
      | capability                 | permission | role           | contextlevel | reference |
      | moodle/h5p:updatelibraries | Allow      | editingteacher | System       |           |
    And the following "activity" exists:
      | activity        | h5pactivity                                |
      | course          | C1                                         |
      | name            | Awesome H5P package                        |
      | packagefilepath | h5p/tests/fixtures/multiple-choice-2-6.h5p |
    And I am on the "Awesome H5P package" "h5pactivity activity" page logged in as student1
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    And I click on "Wrong one" "text" in the ".h5p-question-content" "css_element"
    And I click on "Check" "button" in the ".h5p-question-buttons" "css_element"
    And I click on "Retry" "button" in the ".h5p-question-buttons" "css_element"
    And I click on "Correct one" "text" in the ".h5p-question-content" "css_element"
    And I click on "Check" "button" in the ".h5p-question-buttons" "css_element"
    And I switch to the main frame
    # H5P does not allow to Retry if the user checks the correct answer, we need to refresh the page.
    And I reload the page
    And I switch to "h5p-player" class iframe
    And I switch to "h5p-iframe" class iframe
    And I click on "Wrong one" "text" in the ".h5p-question-content" "css_element"
    And I click on "Check" "button" in the ".h5p-question-buttons" "css_element"
    And I switch to the main frame

  @javascript
  Scenario: Default grading is max attempt grade
    Given I am on the "Awesome H5P package" "h5pactivity activity" page logged in as teacher1
    When I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade  | Percentage |
      | Awesome H5P package | 100.00 | 100.00 %   |

  @javascript
  Scenario: Change setting to first attempt
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Grading method | First attempt |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Percentage |
      | Awesome H5P package | 0.00  | 0.00 %     |

  @javascript
  Scenario: Change setting to first attempt
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Grading method | Last attempt |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Percentage |
      | Awesome H5P package | 0.00  | 0.00 %     |

  @javascript
  Scenario: Change setting to average attempt
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Grading method | Average grade |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Percentage  |
      | Awesome H5P package | 33.33 | 33.33 %     |

  @javascript
  Scenario: Change setting to manual grading
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Grading method | Don't calculate a grade |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Percentage |
      | Awesome H5P package | -     | -          |

  @javascript
  Scenario: Disable tracking
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Enable attempt tracking | No |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Percentage |
      | Awesome H5P package | -     | -          |

  @javascript
  Scenario: Reescale existing grades changing the maximum grade
    # First we set to average and recalculate grades.
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Grading method | Average grade |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Range | Percentage  |
      | Awesome H5P package | 33.33 | 0–100 | 33.33 %     |

    # Now we modify the maximum grade with rescaling.
    And I am on the "Awesome H5P package" "h5pactivity activity editing" page
    And I set the following fields to these values:
      | Rescale existing grades | Yes |
      | Maximum grade           | 50  |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Range | Percentage  |
      | Awesome H5P package | 16.67 | 0–50  | 33.33 %     |

  @javascript
  Scenario: Change maximum grade without rescaling grade
    # First we set to average and recalculate grades.
    Given I am on the "Awesome H5P package" "h5pactivity activity editing" page logged in as teacher1
    When I set the following fields to these values:
      | Grading method | Average grade |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Range | Percentage  |
      | Awesome H5P package | 33.33 | 0–100 | 33.33 %     |

    # Now we modify the maximum grade with rescaling.
    When I am on the "Awesome H5P package" "h5pactivity activity editing" page
    And I set the following fields to these values:
      | Rescale existing grades | No |
      | Maximum grade           | 50 |
    And I click on "Save and return to course" "button"
    And I navigate to "View > User report" in the course gradebook
    And I set the field "Select all or one user" to "Student 1"
    Then the following should exist in the "user-grade" table:
      | Grade item          | Grade | Range | Percentage  |
      | Awesome H5P package | 33.33 | 0–50  | 66.67 %     |
