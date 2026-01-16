@javascript @qtype_multianswerwiris @studentwiris @wqmdl-269
Feature: Student answers a quiz with an Embedded answers (Cloze) (WIRIS) question
    #The quiz creation seems not to be working correctly. Needs to be rechecked

    Background:
    Given the following "users" exist:
        | username | firstname | lastname | email                |
        | student1 | Student   | One      | student1@example.com |
    And the following "courses" exist:
        | fullname | shortname |
        | Course 1 | C1        |

    # Clear any existing WIRIS data that might cause conflicts
    And I run the scheduled task "core\task\cache_cleanup_task"


    And the following "course enrolments" exist:
        | user     | course | role    |
        | student1 | C1     | student |

    And the following "activities" exist:
        | activity | name                    | course | idnumber |
        | quiz     | WIRIS Cloze Quiz        | C1     | quiz_cl  |

    And the following "question categories" exist:
        | contextlevel | reference | name       |
        | Course       | C1        | WIRIS bank |

    # For Cloze, the structure lives in questiontext
    And the following "questions" exist:
        | questioncategory | qtype             | name                 | questiontext                                                         | defaultmark |
        | WIRIS bank       | multianswerwiris  | Cloze WIRIS| <p>The symbol for the speed of light is {1:SHORTANSWER:=c}.</p>     | 1.0         |

    And quiz "WIRIS Cloze Quiz" contains the following questions:
        | question              | page |
        | Cloze WIRIS| 1    |

    Scenario: Student attempts and submits the Cloze (WIRIS) quiz
    Given I am on the "WIRIS Cloze Quiz" "mod_quiz > View" page logged in as "student1"
    When I press "Attempt quiz"
    And I set the field "1" to "c"
    And I click on "Finish attempt ..." "link"
    And I press "Submit all and finish"
    And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
    Then I should see "Review"