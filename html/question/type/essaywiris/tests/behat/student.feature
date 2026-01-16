@mod @mod_quiz @qtype_essaywiris @javascript @studentwiris @wqmdl-270
Feature: Student answers a quiz with an Essay (WIRIS) question

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
        | activity | name                   | course | idnumber |
        | quiz     | WIRIS Essay Quiz       | C1     | quiz_es  |

    And the following "question categories" exist:
        | contextlevel | reference | name       |
        | Course       | C1        | WIRIS bank |

    And the following "questions" exist:
        | questioncategory | qtype      | name                 | questiontext                                                                 | defaultmark |
        | WIRIS bank       | essaywiris | Essay WIRIS – gravity | <p>Explain briefly why objects fall and include a simple formula.</p>        | 5.0         |

    And quiz "WIRIS Essay Quiz" contains the following questions:
        | question              | page |
        | Essay WIRIS – gravity | 1    |

    Scenario: Student attempts and submits the Essay (WIRIS) quiz
    Given I am on the "WIRIS Essay Quiz" "mod_quiz > View" page logged in as "student1"
    When I press "Attempt quiz"
    And I set the field "Answer" to "Here is my essay with a formula: F = G·m1·m2/r^2."
    And I click on "Finish attempt ..." "link"
    And I press "Submit all and finish"
    And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
    #Then I should see "Review"
