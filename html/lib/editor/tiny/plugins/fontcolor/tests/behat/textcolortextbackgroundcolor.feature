@editor @editor_tiny @tiny @tiny_fontcolor
Feature: Tiny editor text color/text background color
  To format content in Tiny, I need to set text color/text background color.

  @javascript
  Scenario: Set a text color using the Text foreground color menu item
    Given the site is running Moodle version 4.4 or lower
    And the following config values are set as admin:
      | backgroundcolors | [{"name":"Black","value":"000000"},{"name":"White","value":"ffffff"},{"name":"Yellow","value":"e2b007"},{"name":"rosa","value":"#ffccc0"}] | tiny_fontcolor |
      | textcolors | [{"name":"Normal","value":"#000000"},{"name":"Gray dark","value":"0a2c2e"},{"name":"gray","value":"#ffccba"},{"name":"test1","value":"#fce34f"}] | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    And I set the field "Description" to "<p>Some plain text</p><p>Some more text</p>"
    And I select the "p" element in position "1" of the "Description" TinyMCE editor
    And I click on the color menu item "Text foreground colour" and choose "Gray dark" for the "Description" TinyMCE editor
    And I press "Update profile"
    Then I should see "Some plain text"
    And "//span[@style='color:rgb(10,44,46);']" "xpath_element" should exist

  @javascript
  Scenario: Set a text color using the Text foreground color menu item
    Given the site is running Moodle version 4.5 or higher
    And the following config values are set as admin:
      | backgroundcolors | [{"name":"Black","value":"000000"},{"name":"White","value":"ffffff"},{"name":"Yellow","value":"e2b007"},{"name":"rosa","value":"#ffccc0"}] | tiny_fontcolor |
      | textcolors | [{"name":"Normal","value":"#000000"},{"name":"Gray dark","value":"0a2c2e"},{"name":"gray","value":"#ffccba"},{"name":"test1","value":"#fce34f"}] | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    And I set the field "Description" to "<p>Some plain text</p><p>Some more text</p>"
    And I select the "p" element in position "1" of the "Description" TinyMCE editor
    And I click on the color menu item "Text foreground colour" and choose "Gray dark" for the "Description" TinyMCE editor
    And I press "Update profile"
    Then I should see "Some plain text"
    And "//span[@style='color:#0a2c2e;']" "xpath_element" should exist

  @javascript
  Scenario: Set a text background color using the Text background color menu item
    Given the site is running Moodle version 4.4 or lower
    And the following config values are set as admin:
      | backgroundcolors | [{"name":"Black","value":"000000"},{"name":"White","value":"ffffff"},{"name":"Yellow","value":"e2b007"},{"name":"rosa","value":"#ffccc0"}] | tiny_fontcolor |
      | textcolors | [{"name":"Normal","value":"#000000"},{"name":"Gray dark","value":"#0a2c2e"},{"name":"gray","value":"#ffccba"},{"name":"test1","value":"#fce34f"}] | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    And I set the field "Description" to "<p>Some plain text</p><p>Some more text</p>"
    And I select the "p" element in position "1" of the "Description" TinyMCE editor
    And I click on the color menu item "Text background colour" and choose "Yellow" for the "Description" TinyMCE editor
    And I press "Update profile"
    Then I should see "Some plain text"
    And "//span[@style='background-color:rgb(226,176,7);']" "xpath_element" should exist

  @javascript
  Scenario: Set a text background color using the Text background color menu item
    Given the site is running Moodle version 4.5 or higher
    And the following config values are set as admin:
      | backgroundcolors | [{"name":"Black","value":"000000"},{"name":"White","value":"ffffff"},{"name":"Yellow","value":"e2b007"},{"name":"rosa","value":"#ffccc0"}] | tiny_fontcolor |
      | textcolors | [{"name":"Normal","value":"#000000"},{"name":"Gray dark","value":"#0a2c2e"},{"name":"gray","value":"#ffccba"},{"name":"test1","value":"#fce34f"}] | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    And I set the field "Description" to "<p>Some plain text</p><p>Some more text</p>"
    And I select the "p" element in position "1" of the "Description" TinyMCE editor
    And I click on the color menu item "Text background colour" and choose "Yellow" for the "Description" TinyMCE editor
    And I press "Update profile"
    Then I should see "Some plain text"
    And "//span[@style='background-color:#e2b007;']" "xpath_element" should exist

  @javascript
  Scenario: Set a text color using the Text foreground color menu button
    Given the following config values are set as admin:
      | backgroundcolors | [{"name":"Black","value":"000000"},{"name":"White","value":"ffffff"},{"name":"Yellow","value":"e2b007"},{"name":"rosa","value":"#ffccc0"}] | tiny_fontcolor |
      | textcolors | [{"name":"Normal","value":"#000000"},{"name":"Gray dark","value":"#ff000a"},{"name":"gray","value":"#ffccba"},{"name":"test1","value":"#fce34f"}] | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    And I set the field "Description" to "<p>Some plain text</p><p>Some more text</p>"
    And I select the "p" element in position "1" of the "Description" TinyMCE editor
    And I click on the "Text foreground colour" button for the "Description" TinyMCE editor
    And I press "Update profile"
    Then I should see "Some plain text"

  @javascript
  Scenario: Set a text background color using the Text background color menu button
    Given the following config values are set as admin:
      | backgroundcolors | [{"name":"Black","value":"000000"},{"name":"White","value":"ffffff"},{"name":"Yellow","value":"e2b007"},{"name":"rosa","value":"#ffccc0"}] | tiny_fontcolor |
      | textcolors | [{"name":"Normal","value":"#000000"},{"name":"Gray dark","value":"#ff000a"},{"name":"gray","value":"#ffccba"},{"name":"test1","value":"#fce34f"}] | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    And I set the field "Description" to "<p>Some plain text</p><p>Some more text</p>"
    And I select the "p" element in position "1" of the "Description" TinyMCE editor
    And I click on the "Text background colour" button for the "Description" TinyMCE editor
    And I press "Update profile"
    Then I should see "Some plain text"
