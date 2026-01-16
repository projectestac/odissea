@javascript @qtype_truefalsewiris @studentwiris @wqmdl-281
Feature: Student answers a quiz with a True/False (WIRIS) question

    Background:
    Given the following "users" exist:
        | username | firstname | lastname | email                |
        | student1 | Student   | One      | student1@example.com |
    And the following "courses" exist:
        | fullname | shortname |
        | Course 1 | C1        |
    And the following "course enrolments" exist:
        | user     | course | role    |
        | student1 | C1     | student |

    And the following "activities" exist:
        | activity | name                      | course | idnumber |
        | quiz     | WIRIS True/False Quiz     | C1     | quiz_tf  |

    And the following "question categories" exist:
        | contextlevel | reference | name       |
        | Course       | C1        | WIRIS bank |

    # correctanswer: 1=True, 0=False
    And the following "questions" exist:
        | questioncategory | qtype            | name                  | questiontext                    | defaultmark | correctanswer |
        | WIRIS bank       | truefalsewiris   | TF WIRIS – sky color  | <p>The daytime sky is blue.</p> | 1.0         | 1             |

    And quiz "WIRIS True/False Quiz" contains the following questions:
        | question               | page |
        | TF WIRIS – sky color   | 1    |

    Scenario: Student attempts and submits the True/False (WIRIS) quiz
    Given I am on the "WIRIS True/False Quiz" "mod_quiz > View" page logged in as "student1"
    When I press "Attempt quiz"
    And I click on "Finish attempt ..." "link"
    And I press "Submit all and finish"
    And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"


