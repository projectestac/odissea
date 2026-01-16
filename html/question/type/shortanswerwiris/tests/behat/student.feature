@javascript @qtype_shortanswerwiris @studentwiris @wqmdl-274
Feature: Student answers a quiz with a Short answer (WIRIS) question

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
        | activity | name                  | course | idnumber |
        | quiz     | WIRIS SA Quiz         | C1     | quiz_sa  |

    And the following "question categories" exist:
        | contextlevel | reference | name       |
        | Course       | C1        | WIRIS bank | 

    # Create a WIRIS Short-answer with two answers, first is correct
    And the following "questions" exist:
        | questioncategory | qtype            | name                | questiontext  | defaultmark | answers[1] | fraction[1] | answers[2] | fraction[2] |
        | WIRIS bank       | shortanswerwiris | SA WIRIS – basics   | <p>Type the quantity represented by E in E=mc^2.</p> | 1.0         | energy     | 1.0         | power      | 0.0         |

    And quiz "WIRIS SA Quiz" contains the following questions:
        | question            | page |
        | SA WIRIS – basics   | 1    |

    Scenario: Student attempts and submits the Short answer (WIRIS) quiz
        Given I am on the "WIRIS SA Quiz" "mod_quiz > View" page logged in as "student1"
        When I press "Attempt quiz"
        And I wait "2" seconds
        And I set the field "Answer" to "energy"
        And I click on "Finish attempt ..." "link"
        And I press "Submit all and finish"
        And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
