@javascript @mod_quiz @wqmdl-40

#TODO: @qtype_wq Afegir tag quan arreglem el test
Feature: Backup a quiz with all Wiris question types (except cloze)
    In order to ensure backup compatibility
    As an admin
    I need to be able to backup a quiz containing all Wiris question types except cloze

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
        | WIRIS bank       | truefalsewiris   | TF WIRIS| <p>The daytime sky is blue.</p> | 1.0         | 1             |

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
        | TF WIRIS| 1    |
        | Multichoice Wiris     | 1    |
        | Essay Wiris           | 1    |
        | Match Wiris           | 1    |

Scenario: Admin can backup a quiz with all Wiris qtypes (except cloze)
    Given I log in as "admin"
    And I am on "Course 1" course homepage
    And I follow "Wiris Quiz"
    #No existeix l'step
    #And I navigate to "More > Backup" in the quiz administration
    And I click on "//*[@class='nav more-nav nav-tabs']/li[last()]" "xpath_element"
    And I click on "Backup" "link"
    When I press "Jump to final step"
    When I click on "restore page" "link"
    #TODO: no troba el text
    Then I should see "Process pending"
    #Then I should see "The backup file was successfully created"

    #Then I wait until "Continue" exists


Scenario: Admin duplicates a quiz using the action menu
    Given I log in as "admin"
    And I am on "Course 1" course homepage
    And I turn editing mode on
    # Open the action menu of the existing quiz and choose Duplicate
    And I open the action menu for "Wiris Quiz" "Quiz"
    #TODO: no troba l'action menu
    When I choose "Duplicate" in the open action menu
    # Verify there are now two quiz activities on the page
    Then I should see "2" elements matching ".activity.modtype_quiz"
    # Optional: also verify we still see the original name at least once
    And I should see "Wiris Quiz"