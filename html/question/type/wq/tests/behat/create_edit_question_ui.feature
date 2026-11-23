@qtype @qtype_wq @core_question @wq @javascript @teacher @questionbank @smoke
Feature: Create and edit a WIRIS question through the edit form
    In order to author WIRIS questions in the browser
    As a teacher
    I want the WIRIS edit form to load and save despite the Wiris Quizzes editor AMD conflict

    # This feature is the in-suite proof of the JavaScript-error workaround
    # documented in E2E_TEST_PLAN.md (section 2). The "... Wiris question filling
    # the form with:" step installs the AMD guard between opening the edit form and
    # setting the TinyMCE "Question text" field; the edit scenario installs the
    # guard explicitly via the standalone step.

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following "users" exist:
            | username | firstname | lastname | email                |
            | teacher1 | Teacher   | One      | teacher1@example.com |
        And the following "courses" exist:
            | fullname | shortname |
            | Course 1 | C1        |
        And the following "course enrolments" exist:
            | user     | course | role           |
            | teacher1 | C1     | editingteacher |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |

    Scenario: Teacher creates an Essay (WIRIS) question through the edit form
        Given I am on the "Course 1" "core_question > course question bank" page logged in as "teacher1"
        When I add a "Essay - science" Wiris question filling the form with:
            | Question name | UI Essay WIRIS               |
            | Question text | Explain why the sky is blue. |
        Then I should see "UI Essay WIRIS"

    Scenario: Teacher edits a WIRIS question text and saves through the edit form
        Given the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext          | defaultmark |
            | WIRIS bank       | essaywiris | Editable ES | <p>Original text.</p> | 1.0         |
        And I am on the "Course 1" "core_question > course question bank" page logged in as "teacher1"
        When I choose "Edit question" action for "Editable ES" in the question bank
        And I work around the Wiris Quizzes editor AMD conflict
        And I set the field "Question name" to "Editable ES renamed"
        And I set the field "Question text" to "<p>Updated essay prompt.</p>"
        And I press "id_submitbutton"
        Then I should see "Editable ES renamed"
