@editor @tiny @editor_tiny @tiny_html @tiny_cloze @javascript
Feature: Test the cloze question editor with numberic answers.

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email               |
      | teacher  | Mark      | Allright | teacher@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user    | course | role           |
      | teacher | C1     | editingteacher |
    And the following "user preferences" exist:
      | user    | preference | value |
      | teacher | htmleditor | tiny  |
    And the following "language packs" exist:
      | language |
      | en       |
      | de       |

  Scenario: Create a NUMERICAL question with one correct and an incorrect answer
    When I am on the "Course 1" "core_question > course question bank" page logged in as teacher
    And I press "Create a new question ..."
    And I set the field "Embedded answers (Cloze)" to "1"
    And I click on "Add" "button" in the "Choose a question type to add" "dialogue"
    And I set the field "Question name" to "multianswer-001"
    And I click on "Cloze question editor" "button"
    And I set the field "NUMERICAL" to "1"
    And I click on "Select question type" "button"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_answer')]" to "4"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_feedback')]" to "That is correct"
    When I click on "Insert question" "button"
    #From 4.3 onwards this works:
    #And I click on the "View > Source code" menu item for the "Question text" TinyMCE editor
    #Then I should see "<p>{1:NUMERICAL:=4:0#That is correct}</p>" source code for the "Question text" TinyMCE editor
    And I click on "Save changes and continue editing" "button"
    Then the field "Question text" matches multiline:
    """
    <p><span class="cloze-question-marker" contenteditable="false">{1:NUMERICAL:=4:0#That is correct}</span></p>
    """
    When I select the "span" element in position "0" of the "Question text" TinyMCE editor
    And I click on "Cloze question editor" "button"
    Then I should see "Numerical (NUMERICAL)"
    When I click on "//form[@name='tiny_cloze_form']//li[1]//a[contains(@class, 'tiny_cloze_add')]" "xpath"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[2]//input[contains(@class, 'tiny_cloze_answer')]" to "*"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[2]//input[contains(@class, 'tiny_cloze_feedback')]" to "Try again"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[2]//select[contains(@class, 'tiny_cloze_fraction')]" to "Incorrect"
    And I click on "Insert question" "button"
    #And I click on the "View > Source code" menu item for the "Question text" TinyMCE editor
    #Then I should see "<p>{1:NUMERICAL:1:NUMERICAL:=4:0#That is correct~*#Try again}</p>" source code for the "Question text" TinyMCE editor
    And I click on "Save changes and continue editing" "button"
    Then the field "Question text" matches multiline:
    """
    <p><span class="cloze-question-marker" contenteditable="false">{1:NUMERICAL:=4:0#That is correct~*#Try again}</span></p>
    """

  Scenario: Create a NUMERICAL question and check that comma does not work as decimal separator
    When I am on the "Course 1" "core_question > course question bank" page logged in as teacher
    And I press "Create a new question ..."
    And I set the field "Embedded answers (Cloze)" to "1"
    And I click on "Add" "button" in the "Choose a question type to add" "dialogue"
    And I set the field "Question name" to "multianswer-001"
    And I click on "Cloze question editor" "button"
    And I set the field "NUMERICAL" to "1"
    And I click on "Select question type" "button"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_answer')]" to "3,141"
    And I click on "Insert question" "button"
    Then I should see "Value must be numeric."
    When I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_answer')]" to "3.141"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_tolerance')]" to "0,2"
    And I click on "Insert question" "button"
    Then I should see "Value must be numeric."
    When I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_tolerance')]" to "0.2"
    And I click on "Insert question" "button"
    And I click on "Save changes and continue editing" "button"
    Then the field "Question text" matches multiline:
    """
    <p><span class="cloze-question-marker" contenteditable="false">{1:NUMERICAL:=3.141:0.2}</span></p>
    """

  Scenario: Create a NUMERICAL question and check that comma does work as a decimal separator in German
    When I log in as "teacher"
    And I follow "Preferences" in the user menu
    And I follow "Preferred language"
    And I set the field "Preferred language" to "de"
    And I click on "Save changes" "button"
    And I am on the "Course 1" "core_question > course question bank" page logged in as teacher
    And I press "Neue Frage erstellen..."
    And I set the field "Lückentext (Cloze)" to "1"
    And I click on "Hinzufügen" "button" in the "Markieren Sie den gewünschten Fragetyp" "dialogue"
    And I set the field "Fragetitel" to "multianswer-001"
    And I click on "Fragetyp Lückentext (Cloze) Editor" "button"
    And I set the field "NUMERICAL" to "1"
    And I click on "Fragetyp auswählen" "button"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_answer')]" to "3.141"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[1]//input[contains(@class, 'tiny_cloze_tolerance')]" to "0.2"
    And I click on "//form[@name='tiny_cloze_form']//li[1]//a[contains(@class, 'tiny_cloze_add')]" "xpath"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[2]//input[contains(@class, 'tiny_cloze_answer')]" to "3,141"
    And I set the field with xpath "//form[@name='tiny_cloze_form']//li[2]//input[contains(@class, 'tiny_cloze_tolerance')]" to "0,2"
    And I click on "Frage einfügen" "button"
    And I click on "Speichern und weiter bearbeiten" "button"
    Then the field "Fragetext" matches multiline:
    """
    <p><span class="cloze-question-marker" contenteditable="false">{1:NUMERICAL:=3.141:0.2~=3,141:0,2}</span></p>
    """
