@qtype @qtype_wq @core_backup @mod_quiz @wq @javascript @teacher @backuprestore @regression
Feature: Backup and restore a quiz with every WIRIS question type
    In order to move courses between sites without losing WIRIS content
    As a teacher
    I want a quiz with every WIRIS question type to survive backup and restore

    Background:
        Given the "wiris" filter is "on"
        And the "wiris" filter has maximum priority
        And the following config values are set as admin:
            | enableasyncbackup | 0 |
        And the following "users" exist:
            | username | firstname | lastname | email                |
            | teacher1 | Teacher   | One      | teacher1@example.com |
        And the following "courses" exist:
            | fullname | shortname |
            | Course 1 | C1        |
        And the following "course enrolments" exist:
            | user     | course | role           |
            | teacher1 | C1     | editingteacher |
        And the following "activities" exist:
            | activity | name       | course | idnumber |
            | quiz     | WIRIS Quiz | C1     | wirisquiz |
        And the following "question categories" exist:
            | contextlevel | reference | name       |
            | Course       | C1        | WIRIS bank |
        # One question per WIRIS type, created with data generators (robust).
        And the following "questions" exist:
            | questioncategory | qtype          | name     | questiontext                    | defaultmark | correctanswer |
            | WIRIS bank       | truefalsewiris | TF WIRIS | <p>The daytime sky is blue.</p> | 1.0         | 1             |
        And the following "questions" exist:
            | questioncategory | qtype            | name     | questiontext          | defaultmark | single | answers[1] | fraction[1] | answers[2] | fraction[2] | answers[3] | fraction[3] |
            | WIRIS bank       | multichoicewiris | MC WIRIS | <p>What is 1 + 1?</p> | 1.0         | 1      | 2          | 1.0         | 3          | 0.0         | 1          | 0.0         |
        And the following "questions" exist:
            | questioncategory | qtype            | name     | questiontext                                          | defaultmark | answers[1] | fraction[1] | answers[2] | fraction[2] |
            | WIRIS bank       | shortanswerwiris | SA WIRIS | <p>Type the quantity represented by E in E=mc^2.</p> | 1.0         | energy     | 1.0         | power      | 0.0         |
        And the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext                       | defaultmark |
            | WIRIS bank       | essaywiris | Essay WIRIS | <p>Explain E = mc^2 in words.</p>  | 1.0         |
        And the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext            | defaultmark | subquestions[1] | subanswers[1] | subquestions[2] | subanswers[2] |
            | WIRIS bank       | matchwiris | Match WIRIS | <p>Match each item.</p> | 2.0         | One             | 1             | Two             | 2             |
        And the following "questions" exist:
            | questioncategory | qtype            | name        | questiontext                                                    | defaultmark |
            | WIRIS bank       | multianswerwiris | Cloze WIRIS | <p>The speed of light symbol is {1:SHORTANSWER:=c}.</p>         | 1.0         |
        And quiz "WIRIS Quiz" contains the following Wiris questions:
            | question    | page |
            | TF WIRIS    | 1    |
            | MC WIRIS    | 1    |
            | SA WIRIS    | 1    |
            | Essay WIRIS | 1    |
            | Match WIRIS | 1    |
            | Cloze WIRIS | 1    |

    Scenario: Restore a course quiz and verify every WIRIS question is preserved and editable
        Given I log in as "admin"
        And I am on "Course 1" course homepage
        When I backup "Course 1" course using this options:
            | Confirmation | Filename | wiris_all_types.mbz |
        And I restore "wiris_all_types.mbz" backup into a new course using this options:
            | Schema | Course name       | WIRIS Restored |
            | Schema | Course short name | C1_RESTORED    |
        Then I should see "WIRIS Restored"
        # Questions are restored into the new course's question bank.
        And I am on the "WIRIS Restored" "core_question > course question bank" page
        And I should see "TF WIRIS"
        And I should see "MC WIRIS"
        And I should see "SA WIRIS"
        And I should see "Essay WIRIS"
        And I should see "Match WIRIS"
        And I should see "Cloze WIRIS"
        # The restored quiz remains accessible (course-scoped navigation avoids name clashes).
        And I am on "WIRIS Restored" course homepage
        And I follow "WIRIS Quiz"
        And I should see "WIRIS Quiz"
