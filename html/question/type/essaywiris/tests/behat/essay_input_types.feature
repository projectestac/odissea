@qtype @qtype_essaywiris @wq @javascript @student @attempt @inputoptions @regression
Feature: Essay (WIRIS) response-format input options
    In order to trust every Essay (WIRIS) response-format option
    As a student
    I want each response format (HTML editor, plain text, monospaced) and the attachments option to work in an attempt

    # An Essay (WIRIS) question exposes the core essay response options: the
    # "responseformat" controls the answer input (editor = HTML editor,
    # plain = plain text box, monospaced = fixed-width plain text box) and
    # "attachments" adds a file-upload area. The essay answer is always fillable, so
    # each text response format is exercised end to end (typed and the saved
    # response is shown on review). Essays are graded manually, so no automatic
    # grade is asserted here (manual grading is covered by manual_grading.feature).
    # The response-format / attachments options are scalar question fields, so the
    # questions are built directly with generator columns.

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

    Scenario: HTML editor response format accepts a typed answer
        Given the following "questions" exist:
            | questioncategory | qtype      | name         | questiontext                              | responseformat |
            | WIRIS bank       | essaywiris | Essay editor | <p>Explain why objects fall.</p>          | editor         |
        And the following "activities" exist:
            | activity | name              | course | idnumber |
            | quiz     | Essay Editor Quiz | C1     | esquiz1  |
        And quiz "Essay Editor Quiz" contains the following questions:
            | question     | page |
            | Essay editor | 1    |
        When I am on the "Essay Editor Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I set the field "Answer" to "Gravity pulls objects down towards the Earth."
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        # The typed answer is captured and shown on the review page.
        Then I should see "Gravity pulls objects down towards the Earth."

    Scenario: Plain text response format accepts a typed answer
        Given the following "questions" exist:
            | questioncategory | qtype      | name        | questiontext                     | responseformat |
            | WIRIS bank       | essaywiris | Essay plain | <p>Explain why objects fall.</p> | plain          |
        And the following "activities" exist:
            | activity | name             | course | idnumber |
            | quiz     | Essay Plain Quiz | C1     | esquiz2  |
        And quiz "Essay Plain Quiz" contains the following questions:
            | question    | page |
            | Essay plain | 1    |
        When I am on the "Essay Plain Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I set the field "Answer" to "Objects fall because of gravity."
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "Objects fall because of gravity."

    Scenario: Monospaced response format accepts a typed answer
        Given the following "questions" exist:
            | questioncategory | qtype      | name             | questiontext                     | responseformat |
            | WIRIS bank       | essaywiris | Essay monospaced | <p>Write the formula.</p>        | monospaced     |
        And the following "activities" exist:
            | activity | name                  | course | idnumber |
            | quiz     | Essay Monospaced Quiz | C1     | esquiz3  |
        And quiz "Essay Monospaced Quiz" contains the following questions:
            | question         | page |
            | Essay monospaced | 1    |
        When I am on the "Essay Monospaced Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        And I set the field "Answer" to "F = G*m1*m2/r^2"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
        Then I should see "F = G*m1*m2/r^2"

    Scenario: Attachments option shows a file-upload area in the attempt
        Given the following "questions" exist:
            | questioncategory | qtype      | name              | questiontext                       | responseformat | attachments | attachmentsrequired |
            | WIRIS bank       | essaywiris | Essay attachments | <p>Attach your working.</p>        | editor         | 2           | 0                   |
        And the following "activities" exist:
            | activity | name                   | course | idnumber |
            | quiz     | Essay Attachments Quiz | C1     | esquiz4  |
        And quiz "Essay Attachments Quiz" contains the following questions:
            | question          | page |
            | Essay attachments | 1    |
        When I am on the "Essay Attachments Quiz" "mod_quiz > View" page logged in as "student1"
        And I press "Attempt quiz"
        # With attachments enabled the attempt shows the core file-upload area.
        Then I should see "Attach your working."
        And I should see "You can drag and drop files here to add them."
