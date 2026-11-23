@qtype @qtype_wq @mod_quiz @core_backup @wq @javascript @regression @smoke
Feature: All Question Types Quiz end-to-end regression
    In order to trust WirisQuizzes across the whole quiz lifecycle
    As the WirisQuizzes team
    I want one regression that exercises every WIRIS question type from creation to restore

    # Flagship cross-role regression. Questions are created with data generators
    # (robust, version-stable); the student attempts through the UI. Per-type input
    # answering is covered in depth by each qtype's student.feature, so this scenario
    # answers the unambiguous inputs and focuses on the end-to-end workflow:
    # admin install check -> attempt -> results -> regrade -> duplicate -> backup ->
    # restore -> restored attempt preserved.

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following config values are set as admin:
            | enableasyncbackup | 0 |
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
        And the following "activities" exist:
            | activity | name       | course | idnumber  |
            | quiz     | WIRIS Quiz | C1     | wirisquiz |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        # One question per WIRIS type, each on its own page.
        And the following "questions" exist:
            | questioncategory | qtype          | name     | questiontext                    | defaultmark | correctanswer |
            | WIRIS bank       | truefalsewiris | TF WIRIS | <p>The daytime sky is blue.</p> | 1.0         | 1             |
        And the following "questions" exist:
            | questioncategory | qtype            | name     | questiontext          | defaultmark | single | answers[1] | fraction[1] | answers[2] | fraction[2] |
            | WIRIS bank       | multichoicewiris | MC WIRIS | <p>What is 1 + 1?</p> | 1.0         | 1      | 2          | 1.0         | 3          | 0.0         |
        And the following "questions" exist:
            | questioncategory | qtype            | name     | questiontext                        | defaultmark | answers[1] | fraction[1] | answers[2] | fraction[2] |
            | WIRIS bank       | shortanswerwiris | SA WIRIS | <p>Type the energy symbol word.</p> | 1.0         | energy     | 1.0         | power      | 0.0         |
        And the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext                     | defaultmark |
            | WIRIS bank       | essaywiris | Essay WIRIS | <p>Explain E = mc^2 in words.</p> | 1.0         |
        And the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext            | defaultmark | subquestions[1] | subanswers[1] | subquestions[2] | subanswers[2] |
            | WIRIS bank       | matchwiris | Match WIRIS | <p>Match each item.</p> | 2.0         | One             | 1             | Two             | 2             |
        And the following "questions" exist:
            | questioncategory | qtype            | name        | questiontext                                              | defaultmark |
            | WIRIS bank       | multianswerwiris | Cloze WIRIS | <p>The speed of light symbol is {1:SHORTANSWER:=c}.</p>   | 1.0         |
        And quiz "WIRIS Quiz" contains the following Wiris questions:
            | question    | page |
            | TF WIRIS    | 1    |
            | MC WIRIS    | 2    |
            | SA WIRIS    | 3    |
            | Essay WIRIS | 4    |
            | Match WIRIS | 5    |
            | Cloze WIRIS | 6    |

    Scenario: Full lifecycle across every WIRIS question type
        # 1. Admin verifies the WIRIS question types are installed. The Wiris Quizzes
        # status page (info.php) is covered by install_smoke.feature in non-JS mode;
        # under a real browser its self-test JS never settles, so here we use the
        # JavaScript-safe "Manage question types" admin page.
        Given I log in as "admin"
        And I visit "/admin/qtypes.php"
        And I should see "True/False - science"
        And I should see "Cloze - science"
        And I log out
        # 2-3. Student attempts the quiz, answering the unambiguous inputs per page.
        When I am on the "WIRIS Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I click on "True" "radio"
        And I click on "Next page" "button"
        # Multiple choice, Short answer and Matching inputs are exercised in depth by
        # their own student.feature files (the Short answer field is a MathType overlay
        # that is not keyboard-reachable); here we render and traverse them.
        And I click on "Next page" "button"
        And I click on "Next page" "button"
        And I set the field "Answer" to "Energy equals mass times c squared."
        And I click on "Next page" "button"
        And I click on "Next page" "button"
        And I set the field with xpath "//div[contains(@class,'formulation')]//input[@type='text']" to "c"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        And I should see "Finished"
        # 4. Teacher reviews the results.
        And I am on the "WIRIS Quiz" "mod_quiz > Grades report" page logged in as "teacher1"
        And I should see "Student One"
        # 5. Teacher regrades all attempts.
        And I press "Regrade attempts..."
        And I click on "Regrade now" "button" in the "Regrade" "dialogue"
        And I should see "Regrade completed"
        # 6. Teacher duplicates the quiz.
        And I am on "Course 1" course homepage with editing mode on
        And I duplicate "WIRIS Quiz" activity
        And I should see "WIRIS Quiz (copy)"
        # 7-8. Back up the course and restore it into a new course. Restoring into a
        # new course needs the manager/admin capability, so this phase runs as admin.
        And I log in as "admin"
        And I backup "Course 1" course using this options:
            | Confirmation | Filename | wiris_flagship.mbz |
        And I restore "wiris_flagship.mbz" backup into a new course using this options:
            | Schema | Course name       | WIRIS Restored |
            | Schema | Course short name | C1_RESTORED    |
        And I should see "WIRIS Restored"
        # 9. The restored quiz keeps every question and the student attempt.
        And I am on the "WIRIS Restored" "core_question > course question bank" page
        And I should see "TF WIRIS"
        And I should see "Cloze WIRIS"
        And I am on "WIRIS Restored" course homepage
        And I follow "WIRIS Quiz"
        Then I should see "Attempts: 1"
