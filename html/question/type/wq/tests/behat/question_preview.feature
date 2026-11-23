@qtype @qtype_wq @core_question @wq @javascript @teacher @preview @questionbank @regression
Feature: Teacher can preview each question from the Question bank
    In order to verify individual WIRIS question rendering
    As a teacher
    I want to preview each question from the Question bank

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
        | user     | course | role            |
        | teacher1 | C1     | editingteacher  |
        | student1 | C1     | student         |

    And the following "activities" exist:
        | activity | name       | course | idnumber |
        | quiz     | Wiris Quiz | C1     | WIRIS_Q1 |

    And the following "question categories" exist:
        | contextlevel | reference | name       |
        | Course       | C1        | WIRIS bank |

    # ---- Questions (Wiris flavours) ----
    # truefalsewiris requires a True/False 'correctanswer'
    And the following "questions" exist:
        | questioncategory | qtype            | name                  | questiontext                    | defaultmark | correctanswer |
        | WIRIS bank       | truefalsewiris   | TF WIRIS – sky color  | <p>The daytime sky is blue.</p> | 1.0         | 1             |

    # multichoicewiris needs at least two answers and fractions
    And the following "questions" exist:
        | questioncategory | qtype            | name               | questiontext       | defaultmark | single | shuffleanswers | answer[1] | fraction[1] | answer[2] | fraction[2] | answer[3] | fraction[3] |
        | WIRIS bank       | multichoicewiris | Multichoice Wiris  | 2 + 2 = ?          | 1.0         | 1      | 0              | 4         | 100         | 3         | 0           | 5         | 0           |

    # essaywiris behaves like essay; no correctanswer, but needs response format fields
    And the following "questions" exist:
        | questioncategory | qtype      | name        | questiontext               | defaultmark | responseformat | responsefieldlines | attachments | attachmentsrequired |
        | WIRIS bank       | essaywiris | Essay Wiris | Explain E = mc^2 in words | 1.0         | editor         | 10                 | 0           | 0                   |

    # matchwiris needs subquestion/subanswer pairs
    And the following "questions" exist:
        | questioncategory | qtype      | name        | questiontext         | defaultmark | shuffleanswers | subquestion[1] | subanswer[1] | subquestion[2] | subanswer[2] |
        | WIRIS bank       | matchwiris | Match Wiris | Match the pairs      | 1.0         | 0              | H2O            | Water        | NaCl           | Salt         |

    # shortanswerwiris with a simple text answer
    And the following "questions" exist:
        | questioncategory | qtype            | name     | questiontext                        | defaultmark | answers[1] | fraction[1] |
        | WIRIS bank       | shortanswerwiris | SA Wiris | <p>Type the energy symbol word.</p> | 1.0         | energy     | 1.0         |

    # multianswerwiris (Cloze) carries its structure in the question text
    And the following "questions" exist:
        | questioncategory | qtype            | name        | questiontext                                            | defaultmark |
        | WIRIS bank       | multianswerwiris | Cloze Wiris | <p>The speed of light symbol is {1:SHORTANSWER:=c}.</p> | 1.0         |

    And quiz "Wiris Quiz" contains the following questions:
        | question              | page |
        | TF WIRIS – sky color  | 1    |
        | Multichoice Wiris     | 1    |
        | Essay Wiris           | 1    |
        | Match Wiris           | 1    |


Scenario: Preview True/False WIRIS from the Question bank
    Given I log in as "teacher1"
    When I am on the "TF WIRIS – sky color" "core_question > preview" page
    Then I should see "The daytime sky is blue."

Scenario: Preview Multichoice WIRIS from the Question bank
    Given I log in as "teacher1"
    When I am on the "Multichoice Wiris" "core_question > preview" page
    Then I should see "2 + 2 = ?"
    And I should see "4"
    And I should see "3"
    And I should see "5"

Scenario: Preview Essay WIRIS from the Question bank
    Given I log in as "teacher1"
    When I am on the "Essay Wiris" "core_question > preview" page
    Then I should see "Explain E = mc^2 in words"

Scenario: Preview Match WIRIS from the Question bank
    Given I log in as "teacher1"
    When I am on the "Match Wiris" "core_question > preview" page
    Then I should see "Match the pairs"

Scenario: Preview Short answer WIRIS from the Question bank
    Given I log in as "teacher1"
    When I am on the "SA Wiris" "core_question > preview" page
    Then I should see "Type the energy symbol word."

# Cloze (multianswer) previews are exercised through the whole-quiz preview
# (quiz_preview.feature). Previewing a Cloze question on its own from the bank is
# not supported here because the embedded sub-questions make the by-name preview
# resolver ambiguous ("Multiple records found").