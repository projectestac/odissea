@qtype @qtype_multianswerwiris @wq @javascript @student @attempt @inputoptions @regression
Feature: Embedded answers (Cloze) (WIRIS) sub-question input options
    In order to trust every Embedded answers (Cloze) (WIRIS) sub-question type
    As a student
    I want each cloze input (short answer, numerical, dropdown, radio, checkbox) to work in an attempt

    # A Cloze (WIRIS) question embeds its sub-questions in the question text using
    # the standard Moodle cloze syntax {weight:TYPE:=answer~distractor}. The WIRIS
    # plugin wraps each sub-question: SHORTANSWER -> shortanswerwiris,
    # MULTICHOICE / MULTIRESPONSE -> multichoicewiris, while NUMERICAL stays a plain
    # numerical blank.
    #
    # The wrapped SHORTANSWER blank is rendered as a MathType field
    # (class "wirisembedded wirisprocessed"), so - like the standalone equation
    # input - it cannot be driven from the keyboard and is only checked for render.
    # NUMERICAL is a plain text box and every MULTICHOICE / MULTIRESPONSE control
    # (dropdown, radio, checkbox) is a standard Moodle control, so those are
    # exercised end to end (filled and graded).
    #
    # Cloze sub-inputs are addressed by their field-name suffix: text, dropdown and
    # radio blanks use sub<index>_answer (the radio id additionally carries the
    # 0-based choice value); checkbox (multiresponse) blanks use sub<index>_choice.
    # The blank <index> is its 1-based position in the text. MULTICHOICE_H / _S and
    # SHORTANSWER_C are layout / grading variants of the controls covered here.

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following "users" exist:
            | username | firstname | lastname | email                |
            | teacher1 | Teacher   | One      | teacher1@example.com |
            | student1 | Student   | One      | student1@example.com |
        And the following "courses" exist:
            | fullname | shortname |
            | Course 1 | C1        |
        And the following "course enrolments" exist:
            | user     | course | role           |
            | teacher1 | C1     | editingteacher |
            | student1 | C1     | student        |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |

    @grading
    Scenario: Numerical and dropdown cloze blanks are answered and graded
        # A plain numerical text box and a multichoice dropdown, one mark each.
        Given the following "questions" exist:
            | questioncategory | qtype            | name         | questiontext                                                                                | defaultmark |
            | WIRIS bank       | multianswerwiris | Cloze fill   | <p>Two plus three is {1:NUMERICAL:=5}. The capital of France is {1:MULTICHOICE:=Paris~London~Berlin}.</p> | 2           |
        And the following "activities" exist:
            | activity | name            | course | idnumber | grade |
            | quiz     | Cloze Fill Quiz | C1     | clozeq1  | 2     |
        And quiz "Cloze Fill Quiz" contains the following Wiris questions:
            | question   | page |
            | Cloze fill | 1    |
        When I am on the "Cloze Fill Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # The numerical blank is a plain text box; the dropdown is a <select>.
        And I set the field with xpath "//input[contains(@id, 'sub1_answer')]" to "5"
        And I set the field with xpath "//select[contains(@id, 'sub2_answer')]" to "Paris"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "Two plus three is"
        And I am on the "Cloze Fill Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "2.00"

    @grading
    Scenario: Radio-button (multichoice) cloze blank is selected and graded
        # MULTICHOICE_V renders vertical radio buttons. With no shuffle the first
        # choice (the correct "2") has the 0-based radio value 0.
        Given the following "questions" exist:
            | questioncategory | qtype            | name        | questiontext                                       | defaultmark |
            | WIRIS bank       | multianswerwiris | Cloze radio | <p>Pick the even number: {1:MULTICHOICE_V:=2~3~5}.</p> | 1           |
        And the following "activities" exist:
            | activity | name             | course | idnumber | grade |
            | quiz     | Cloze Radio Quiz | C1     | clozeq2  | 1     |
        And quiz "Cloze Radio Quiz" contains the following Wiris questions:
            | question    | page |
            | Cloze radio | 1    |
        When I am on the "Cloze Radio Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I click on "//input[@type='radio' and contains(@id, 'sub1_answer') and @value='0']" "xpath_element"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "Pick the even number:"
        And I am on the "Cloze Radio Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        And I should see "1.00"

    Scenario: Short answer (WIRIS) and checkbox cloze blanks render and the attempt completes
        # The wrapped SHORTANSWER blank is a MathType overlay (not keyboard
        # fillable, grading is PHPUnit scope) and MULTIRESPONSE renders checkboxes.
        # Both are checked for render and that an attempt over them can be finished.
        Given the following "questions" exist:
            | questioncategory | qtype            | name           | questiontext                                                                                      | defaultmark |
            | WIRIS bank       | multianswerwiris | Cloze checkbox | <p>Symbol for the speed of light: {1:SHORTANSWER:=c}. Pick the primes: {2:MULTIRESPONSE:=2~=3~5}.</p> | 3           |
        And the following "activities" exist:
            | activity | name                | course | idnumber | grade |
            | quiz     | Cloze Checkbox Quiz | C1     | clozeq3  | 3     |
        And quiz "Cloze Checkbox Quiz" contains the following Wiris questions:
            | question       | page |
            | Cloze checkbox | 1    |
        When I am on the "Cloze Checkbox Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # Both renderings appear on the attempt page.
        Then I should see "Symbol for the speed of light:"
        And I should see "Pick the primes:"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        And I am on the "Cloze Checkbox Quiz" "mod_quiz > View" page logged in as "student1"
        And I should see "Finished"
