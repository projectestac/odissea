@mod @mod_forum @javascript
Feature: As a teacher, you can manually lock individual discussions when viewing the discussion

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | student1 | Student | 1 | student1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "course enrolments" exist:
      | user | course | role |
      | student1 | C1 | student |
    And the following "activity" exists:
      | course   | C1              |
      | activity | forum           |
      | name     | Test forum name |
      | idnumber | forum1          |
    And the following "mod_forum > discussions" exist:
      | user  | forum  | name         | message                              |
      | admin | forum1 | Discussion 1 | Discussion contents 1, first message |
      | admin | forum1 | Discussion 2 | Discussion contents 2, first message |
    And the following "mod_forum > posts" exist:
      | user  | parentsubject | subject                 | message                               |
      | admin | Discussion 1  | Reply 1 to discussion 1 | Discussion contents 1, second message |
      | admin | Discussion 2  | Reply 1 to discussion 2 | Discussion contents 2, second message |

  Scenario: Lock a discussion and view
    Given I am on the "Course 1" course page logged in as admin
    And I navigate to post "Discussion 1" in "Test forum name" forum
    And I press "Settings"
    Then "Lock this discussion" "link" should be visible
    And I follow "Lock this discussion"
    Then I should see "This discussion has been locked so you can no longer reply to it."
    And I press "Settings"
    Then "Lock this discussion" "link" should not be visible
    Then "Unlock this discussion" "link" should be visible
    And I press "Settings"
    And I follow "Discussion 2"
    Then I should not see "This discussion has been locked so you can no longer reply to it."
    And I am on the "Course 1" course page logged in as student1
    And I navigate to post "Discussion 1" in "Test forum name" forum
    Then I should see "This discussion has been locked so you can no longer reply to it."
    And "Reply" "link" should not be visible

  @accessibility
  Scenario: A locked discussion must be accessible
    Given I am on the "Course 1" course page logged in as admin
    And I navigate to post "Discussion 1" in "Test forum name" forum
    When I reply "Discussion 1" post from "Test forum name" forum with:
      | Subject | Discussion 1: Hello world! |
      | Message | Discussion contents 1, hello world! |
    # Check discussion view accessibility with success notification shown on post.
    Then the page should meet accessibility standards with "wcag143" extra tests
    And I press "Settings"
    When I follow "Lock this discussion"
    # Check discussion view accessibility with info notification shown when discussion is locked.
    And the page should meet accessibility standards with "wcag143" extra tests
    And I am on the "Test forum name" "forum activity" page logged in as student1
    # Check discussion list accessibility with danger pill shown when discussion is locked.
    And the page should meet accessibility standards with "wcag143" extra tests
    And I follow "Preferences" in the user menu
    And I click on "Forum preferences" "link"
    And I set the following fields to these values:
      | Use experimental nested discussion view | Yes |
    And I press "Save changes"
    And I am on "Course 1" course homepage
    And I navigate to post "Discussion 1" in "Test forum name" forum
    # Check experimental discussion view accessibility with danger pill shown when discussion is locked.
    And the page should meet accessibility standards with "wcag143" extra tests
