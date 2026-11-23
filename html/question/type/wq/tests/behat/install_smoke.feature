@qtype @qtype_wq @wq @admin @smoke @install
Feature: WirisQuizzes installation and status page
    In order to confirm WirisQuizzes is installed and reporting its status
    As an administrator
    I want the Wiris Quizzes test page to load and report the plugin state

    Scenario: Admin opens the Wiris Quizzes status page
        Given I log in as "admin"
        When I visit "/question/type/wq/info.php"
        Then I should see "Wiris Quizzes test page"
        And I should see "Wiris Quizzes version"
        And I should see "Plugins"
        And I should see "Test"
        And I should see "Status"
