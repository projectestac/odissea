@javascript @qtype_multichoicewiris @studentwiris @wqmdl-272
Feature: Student answers a quiz with a Multiple choice (WIRIS) question

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
        | quiz     | WIRIS MC Quiz         | C1     | quiz_mc  |

    And the following "question categories" exist:
        | contextlevel | reference | name       |
        | Course       | C1        | WIRIS bank |

    # Single-answer MC with 3 choices; "2" is correct
    And the following "questions" exist:
        | questioncategory | qtype              | name               | questiontext            | defaultmark | single | answers[1] | fraction[1] | answers[2] | fraction[2] | answers[3] | fraction[3] |
        | WIRIS bank       | multichoicewiris   | MC WIRIS – 1+1     | <p>What is 1 + 1?</p>   | 1.0         | 1      | 2          | 1.0         | 3          | 0.0         | 1          | 0.0         |

    And quiz "WIRIS MC Quiz" contains the following questions:
        | question         | page |
        | MC WIRIS – 1+1   | 1    |

    Scenario: Student attempts and submits the Multiple choice (WIRIS) quiz
    Given I am on the "WIRIS MC Quiz" "mod_quiz > View" page logged in as "student1"
    When I press "Attempt quiz"
    And I click on "Finish attempt ..." "link"
    And I press "Submit all and finish"
    And I click on "Submit all and finish" "button" in the "Submit all your answers and finish?" "dialogue"
