@qtype @qtype_wq @mod_quiz @wq @javascript @teacher @preview @regression
Feature: Teacher can preview the whole quiz
    In order to verify rendering of WIRIS questions
    As a teacher
    I want to preview the quiz and see all questions

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

    And quiz "Wiris Quiz" contains the following Wiris questions:
        | question              | page |
        | TF WIRIS – sky color  | 1    |
        | Multichoice Wiris     | 1    |
        | Essay Wiris           | 1    |
        | Match Wiris           | 1    |
        | SA Wiris              | 1    |
        | Cloze Wiris           | 1    |

Scenario: Teacher previews the quiz and sees all questions
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I follow "Wiris Quiz"
    When I click on "Preview" "button"
    Then I should see "The daytime sky is blue."
    And I should see "2 + 2 = ?"
    And I should see "Explain E = mc^2 in words"
    And I should see "Match the pairs"
    And I should see "Type the energy symbol word."
    And I should see "The speed of light symbol is"