@javascript @qtype_wq @wqmdl-284
Feature: Delete a question from the quiz; original stays in the Question bank
    In order to change the quiz line-up safely
    As a teacher
    I want to remove a slot without deleting the bank entry

Background:
    Given the following "users" exist:
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

    And quiz "Wiris Quiz" contains the following questions:
        | question              | page |
        | TF WIRIS – sky color  | 1    |
        | Multichoice Wiris     | 1    |
        | Essay Wiris           | 1    |
        | Match Wiris           | 1    |

Scenario: Delete the "Essay Wiris" slot and verify bank entry remains
    Given I am logged in as "teacher1"
    And I am on "Course 1" course homepage
    When I follow "Wiris Quiz"
    And I click on "Questions" "link"


    And I click on "Delete" "link"
    And I click on "Yes" "button"

    # Verify the bank still contains the original Essay Wiris.
    When I navigate to "Question bank" in current page administration
    Then I should see "Essay Wiris"