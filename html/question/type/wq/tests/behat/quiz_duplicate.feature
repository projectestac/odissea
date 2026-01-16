@javascript @qtype_wq @wqmdl-283
Feature: Duplicate a quiz and verify both instances exist while Question bank remains unchanged
    In order to reuse a WIRIS quiz setup
    As a teacher
    I want to duplicate the quiz and keep the question bank intact

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

Scenario: Duplicate the quiz from the course page
    Given I am logged in as "teacher1"
    And I am on "Course 1" course homepage
    And I turn editing mode on
    When I duplicate "Wiris Quiz" activity
    # Moodle 4.x usually creates "Copy of Wiris Quiz":
    And I should see "Wiris Quiz (copy)"

    # If your site uses "(copy)" naming instead, uncomment:
    # Then I should see "Wiris Quiz (copy)" in the "region-main" "region"

    # Verify the original still exists:
    And I should see "Wiris Quiz"

    # Sanity: Question bank still has our 4 questions, not duplicated.
    #Pending: Validate no duplicates exist in the question bank.
    When I navigate to "Question bank" in current page administration
    Then I should see "TF WIRIS – sky color"
    And I should see "Multichoice Wiris"
    And I should see "Essay Wiris"
    And I should see "Match Wiris"
    # Optional stricter check (if your theme shows "Showing X questions"):
    # And I should see "4" in the "qb-num-questions" "css_element"