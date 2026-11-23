@editor @editor_tiny @tiny @tiny_fontcolor
Feature: Tiny editor table colours
  To keep table styling on brand, the colours defined for text and text background
  should also be available in the table dialogue colour pickers.

  @javascript
  Scenario: Defined colours are offered in the table dialogue when the setting is enabled
    Given the following config values are set as admin:
      | textcolors       | [{"name":"Brand navy","value":"#404e8b"}] | tiny_fontcolor |
      | backgroundcolors | [{"name":"Brand sky","value":"#aee1ff"}]  | tiny_fontcolor |
      | usefortable      | 1                                         | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    Then the "Description" TinyMCE editor should offer "Brand navy" as a table border colour
    And the "Description" TinyMCE editor should offer "Brand sky" as a table background colour

  @javascript
  Scenario: Defined colours are not forced into the table dialogue when the setting is disabled
    Given the following config values are set as admin:
      | textcolors       | [{"name":"Brand navy","value":"#404e8b"}] | tiny_fontcolor |
      | backgroundcolors | [{"name":"Brand sky","value":"#aee1ff"}]  | tiny_fontcolor |
      | usefortable      | 0                                         | tiny_fontcolor |
    And I log in as "admin"
    And I open my profile in edit mode
    And I wait until the page is ready
    Then the "Description" TinyMCE editor should not offer "Brand navy" as a table border colour
    And the "Description" TinyMCE editor should not offer "Brand sky" as a table background colour
