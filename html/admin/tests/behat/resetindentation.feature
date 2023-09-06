@core @core_admin @core_course @javascript
Feature: Reset course indentation
  In order to reset indentation in course modules
  As a admin
  I want change indent value for all the modules of a course format courses in one go

  Background:
    Given the following "courses" exist:
      | fullname        | shortname | format |
      | Topics Course 1 | T1        | topics |
      | Topics Course 2 | T2        | topics |
      | Weekly Course 1 | W1        | weeks  |
      | Weekly Course 2 | W2        | weeks  |
    And the following "activities" exist:
      | activity | name                 | intro                       | course | idnumber |
      | forum    | Topics forum name    | Topics forum description    | T1     | forum1   |
      | data     | Topics database name | Topics database description | T1     | data1    |
      | wiki     | Topics wiki name     | Topics wiki description     | T2     | wiki1    |
      | forum    | Weekly forum name    | Weekly forum description    | W1     | forum2   |
      | data     | Weekly database name | Weekly database description | W1     | data2    |
      | wiki     | Weekly wiki name     | Weekly wiki description     | W2     | wiki2    |
    And I log in as "admin"
    And I am on "Topics Course 1" course homepage with editing mode on
    And I open "Topics forum name" actions menu
    And I click on "Move right" "link" in the "Topics forum name" activity
    And I open "Topics forum name" actions menu
    And "Move right" "link" in the "Topics forum name" "activity" should not be visible
    And "Move left" "link" in the "Topics forum name" "activity" should be visible
    And I press the escape key
    And I open "Topics database name" actions menu
    And "Move right" "link" in the "Topics database name" "activity" should be visible
    And "Move left" "link" in the "Topics database name" "activity" should not be visible
    And I am on "Topics Course 2" course homepage with editing mode on
    And I open "Topics wiki name" actions menu
    And I click on "Move right" "link" in the "Topics wiki name" activity
    And I open "Topics wiki name" actions menu
    And "Move right" "link" in the "Topics wiki name" "activity" should not be visible
    And "Move left" "link" in the "Topics wiki name" "activity" should be visible
    And I am on "Weekly Course 1" course homepage with editing mode on
    And I open "Weekly forum name" actions menu
    And I click on "Move right" "link" in the "Weekly forum name" activity
    And I open "Weekly forum name" actions menu
    And "Move right" "link" in the "Weekly forum name" "activity" should not be visible
    And "Move left" "link" in the "Weekly forum name" "activity" should be visible
    And I press the escape key
    And I open "Weekly database name" actions menu
    And "Move right" "link" in the "Weekly database name" "activity" should be visible
    And "Move left" "link" in the "Weekly database name" "activity" should not be visible
    And I am on "Weekly Course 2" course homepage with editing mode on
    And I open "Weekly wiki name" actions menu
    And I click on "Move right" "link" in the "Weekly wiki name" activity
    And I open "Weekly wiki name" actions menu
    And "Move right" "link" in the "Weekly wiki name" "activity" should not be visible
    And "Move left" "link" in the "Weekly wiki name" "activity" should be visible

  Scenario Outline: Apply course indentation reset
    Given I navigate to "Plugins > Course formats > <format> format" in site administration
    And I wait "5" seconds
    And "Reset indentation" "link" should exist
    When I click on "Reset indentation" "link"
    And I should see "Reset indentation on course page"
    And "Reset indentation" "button" should exist
    And I click on "Reset indentation" "button"
    Then I should see "Indentation reset"
    And I am on "<format> Course 1" course homepage with editing mode on
    And I open "<format> forum name" actions menu
    And "Move right" "link" in the "<format> forum name" "activity" should be visible
    And "Move left" "link" in the "<format> forum name" "activity" should not be visible
    And I press the escape key
    And I open "<format> database name" actions menu
    And "Move right" "link" in the "<format> database name" "activity" should be visible
    And "Move left" "link" in the "<format> database name" "activity" should not be visible
    And I am on "<format> Course 2" course homepage with editing mode on
    And I open "<format> wiki name" actions menu
    And "Move right" "link" in the "<format> wiki name" "activity" should be visible
    And "Move left" "link" in the "<format> wiki name" "activity" should not be visible
#   Check other course formats had not been reset
    And I am on "<other> Course 1" course homepage with editing mode on
    And I open "<other> forum name" actions menu
    And "Move right" "link" in the "<other> forum name" "activity" should not be visible
    And "Move left" "link" in the "<other> forum name" "activity" should be visible

    Examples:
      | format | other  |
      | Topics | Weekly |
      | Weekly | Topics |

  Scenario Outline: Cancel course indentation reset
    Given I navigate to "Plugins > Course formats > <format> format" in site administration
    And "Reset indentation" "link" should exist
    When I click on "Reset indentation" "link"
    And I should see "Reset indentation on course page"
    And "Reset indentation" "button" should exist
    And "Cancel" "button" should exist
    And I click on "Cancel" "button"
    Then I should not see "Indentation reset"
    And I am on "<format> Course 1" course homepage with editing mode on
    And I open "<format> forum name" actions menu
    And "Move right" "link" in the "<format> forum name" "activity" should not be visible
    And "Move left" "link" in the "<format> forum name" "activity" should be visible
    And I press the escape key
    And I open "<format> database name" actions menu
    And "Move right" "link" in the "<format> database name" "activity" should be visible
    And "Move left" "link" in the "<format> database name" "activity" should not be visible
    And I am on "<format> Course 2" course homepage with editing mode on
    And I open "<format> wiki name" actions menu
    And "Move right" "link" in the "<format> wiki name" "activity" should not be visible
    And "Move left" "link" in the "<format> wiki name" "activity" should be visible

    Examples:
      | format |
      | Topics |
      | Weekly |
