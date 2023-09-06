@tool @tool_admin_presets @javascript
Feature: I can apply presets

  Background:
    Given I log in as "admin"

  Scenario: Default settings are equal to Full preset
    Given I navigate to "Site admin presets" in site administration
    And I should see "Full"
    And I open the action menu in "Full" "table_row"
    When I choose "Review settings and apply" in the open action menu
    Then I should not see "Setting changes"

  Scenario: Applying Starter Moodle preset changes status and settings
#   Checking the settings before applying Full Moodle preset (we're only testing one of each type).
    Given I navigate to "Plugins > Activity modules > Manage activities" in site administration
    And "Hide" "icon" should exist in the "Chat" "table_row"
    And I navigate to "Plugins > Availability restrictions > Manage restrictions" in site administration
    And "Hide" "icon" should exist in the "Restriction by grouping" "table_row"
    And I navigate to "Plugins > Blocks > Manage blocks" in site administration
    And "Hide" "icon" should exist in the "Logged in user" "table_row"
    And I navigate to "Plugins > Course formats > Manage course formats" in site administration
    And "Disable" "icon" should exist in the "Social format" "table_row"
    And I navigate to "Plugins > Question behaviours > Manage question behaviours" in site administration
    And "Enabled" "icon" should exist in the "Immediate feedback with CBM" "table_row"
    And I navigate to "Plugins > Question types > Manage question types" in site administration
    And "Enabled" "icon" should exist in the "Calculated multichoice" "table_row"
    When I navigate to "Site admin presets" in site administration
    And I should see "Starter"
    And I open the action menu in "Starter" "table_row"
    And I choose "Review settings and apply" in the open action menu
    And I should see "Setting changes"
#   Checking all the settings to be applied for the Starter (if will help to identify possible regressions).
    And I should see "Activities" in the "Setting changes" "table"
    And I should see "Activity chooser tabs" in the "Setting changes" "table"
    And I should see "Adaptive mode (no penalties)" in the "Setting changes" "table"
    And I should see "Analytics" in the "Setting changes" "table"
    And I should see "Blog menu" in the "Setting changes" "table"
    And I should see "Blog tags" in the "Setting changes" "table"
    And I should see "Calculated" in the "Setting changes" "table"
    And I should see "Calculated multichoice" in the "Setting changes" "table"
    And I should see "Calculated simple" in the "Setting changes" "table"
    And I should see "Chat" in the "Setting changes" "table"
    And "Chat" row "Current value" column of "Setting changes" table should contain "Enabled"
    And "Chat" row "New value" column of "Setting changes" table should contain "Disabled"
    And I should see "Cohort sync" in the "Setting changes" "table"
    And I should see "Comments" in the "Setting changes" "table"
    And I should see "Course completion status" in the "Setting changes" "table"
    And I should see "Courses" in the "Setting changes" "table"
    And I should see "Database" in the "Setting changes" "table"
    And I should see "Deferred feedback with CBM" in the "Setting changes" "table"
    And I should see "Drag and drop markers" in the "Setting changes" "table"
    And I should see "Drag and drop onto image" in the "Setting changes" "table"
    And I should see "Embedded answers (Cloze)" in the "Setting changes" "table"
    And I should see "Enable badges" in the "Setting changes" "table"
    And "Enable badges" row "Current value" column of "Setting changes" table should contain "Yes"
    And "Enable badges" row "New value" column of "Setting changes" table should contain "No"
    And I should see "Enable blogs" in the "Setting changes" "table"
    And I should see "Enable comments" in the "Setting changes" "table"
    And I should see "Enable competencies" in the "core_competency" "table_row"
    And I should see "Enable notes" in the "Setting changes" "table"
    And I should see "Enable tags functionality" in the "Setting changes" "table"
    And I should see "External tool" in the "Setting changes" "table"
    And I should see "Flickr" in the "Setting changes" "table"
    And I should see "Global search" in the "Setting changes" "table"
    And I should see "Guest access" in the "Setting changes" "table"
    And I should see "Guest login button" in the "Setting changes" "table"
    And I should see "IMS content package" in the "Setting changes" "table"
    And I should see "Immediate feedback with CBM" in the "Setting changes" "table"
    And I should see "Latest badges" in the "Setting changes" "table"
    And I should see "Learning plans" in the "Setting changes" "table"
    And I should see "Lesson" in the "Setting changes" "table"
    And I should see "Logged in user" in the "Setting changes" "table"
    And I should see "Login" in the "Setting changes" "table"
    And I should see "Main menu" in the "Setting changes" "table"
    And I should see "Maximum number of attachments" in the "Setting changes" "table"
    And "Maximum number of attachments" row "Current value" column of "Setting changes" table should contain "9"
    And "Maximum number of attachments" row "New value" column of "Setting changes" table should contain "3"
    And I should see "Mentees" in the "Setting changes" "table"
    And I should see "Network servers" in the "Setting changes" "table"
    And I should see "Numerical" in the "Setting changes" "table"
    And I should see "Online users" in the "Setting changes" "table"
    And I should see "Private files" in the "Setting changes" "table"
    And I should see "Random short-answer matching" in the "Setting changes" "table"
    And I should see "Recent blog entries" in the "Setting changes" "table"
    And I should see "Recently accessed courses" in the "Setting changes" "table"
    And I should see "Restriction by grouping" in the "Setting changes" "table"
    And I should see "Restriction by profile" in the "Setting changes" "table"
    And I should see "SCORM package" in the "Setting changes" "table"
    And I should see "Search forums" in the "Setting changes" "table"
    And I should see "Section links" in the "Setting changes" "table"
    And I should see "Server files" in the "Setting changes" "table"
    And I should see "Show data retention summary" in the "Setting changes" "table"
    And I should see "Social activities" in the "Setting changes" "table"
    And I should see "Social format" in the "Setting changes" "table"
    And I should see "Starred courses" in the "Setting changes" "table"
    And I should see "Survey" in the "Setting changes" "table"
    And I should see "Tags" in the "Setting changes" "table"
    And I should see "TinyMCE HTML editor" in the "Setting changes" "table"
    And I should see "URL downloader" in the "Setting changes" "table"
    And I should see "Wiki" in the "Setting changes" "table"
    And I should see "Wikimedia" in the "Setting changes" "table"
    And I should see "Workshop" in the "Setting changes" "table"
#   Check filters and data formats strings are displayed properly.
    And I should see "Activity names auto-linking" in the "Setting changes" "table"
    And I should see "Javascript Object Notation (.json)" in the "Setting changes" "table"
#   Apply the Starter preset.
    And I click on "Apply" "button"
    And I navigate to "Advanced features" in site administration
    And the field "Enable badges" matches value "0"
    And the field "Enable competencies" matches value "0"
    And I navigate to "Plugins > Activity modules > Manage activities" in site administration
    And "Hide" "icon" should not exist in the "Chat" "table_row"
    And I navigate to "Plugins > Availability restrictions > Manage restrictions" in site administration
    And "Hide" "icon" should not exist in the "Restriction by grouping" "table_row"
    And I navigate to "Plugins > Blocks > Manage blocks" in site administration
    And "Hide" "icon" should not exist in the "Logged in user" "table_row"
    And I navigate to "Plugins > Course formats > Manage course formats" in site administration
    And "Disable" "icon" should not exist in the "Social format" "table_row"
    And I navigate to "Plugins > Question behaviours > Manage question behaviours" in site administration
    And "Enabled" "icon" should not exist in the "Immediate feedback with CBM" "table_row"
    And I navigate to "Plugins > Question types > Manage question types" in site administration
    And "Enabled" "icon" should not exist in the "Calculated multichoice" "table_row"

  Scenario: Re-applying Starter Moodle preset does not display setting changes
#   Apply Starter preset.
    Given I navigate to "Site admin presets" in site administration
    And I open the action menu in "Starter" "table_row"
    And I choose "Review settings and apply" in the open action menu
    And I click on "Apply" "button"
    And I click on "Continue" "button"
#   When the Starter preset it's applied again, no changes should be displayed.
    When I open the action menu in "Starter" "table_row"
    And I choose "Review settings and apply" in the open action menu
    Then I should not see "Setting changes"

  Scenario: Applied exported settings
    Given I navigate to "Site admin presets" in site administration
    And I click on "Create preset" "button"
    And I set the field "Name" to "Current"
    And I click on "Create preset" "button"
    And I should see "Current"
    And I open the action menu in "Current" "table_row"
    When I choose "Review settings and apply" in the open action menu
    And I should not see "Setting changes"
    And I click on "Continue" "button"
    And the following config values are set as admin:
      | enabled | 0 | core_competency |
    And I open the action menu in "Current" "table_row"
    And I choose "Review settings and apply" in the open action menu
    Then I should see "Setting changes"
    And I should see "Enable competencies" in the "core_competency" "table_row"
    And I click on "Apply" "button"
    And I navigate to "Advanced features" in site administration
    And the field "Enable competencies" matches value "1"
