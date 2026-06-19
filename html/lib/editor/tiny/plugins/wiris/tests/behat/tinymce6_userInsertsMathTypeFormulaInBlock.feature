@tiny @tiny_wiris @wiris_mathtype @tinymce6_insert_formula @mtmoodle-109 @wipdavid
Feature: Insert MathType formula in Block
  In order to check if MathType formula can be inserted correctly in Blocks
  As an admin
  I need to create a MathType formula

  Background:
    Given the following config values are set as admin:
      | config        | value                        | plugin      |
      | customtoolbar | tiny_mce_wiris_formulaEditor | editor_tiny |
    And the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1        | topics |
    And the following "course enrolments" exist:
      | user  | course | role           |
      | admin | C1     | editingteacher |
    And the "wiris" filter is "on"
    And the "mathjaxloader" filter is "off"
    And the "urltolink" filter is "off"
    And I log in as "admin"
    And I am on "Course 1" course homepage with editing mode on

  @javascript @5.x @5.x_tinymce6 @wipdavid
  Scenario: MTMOODLE-109 - User inserts and render a Wiris formula in a block
  # Add a block
    And I add the "Text..." block
    And I set the field "Content" to "First block content"
    And I set the field "Text block title" to "First block header"
  # Insert equation
    And I press "Toggle" in "Text Block" field in TinyMCE 6 editor
    # Problem with a tooltip, so clicking on anywhere
    And I click on "Align left" in TinyMCE 6 editor toolbar
    And I press "MathType" in "Text Block" field in TinyMCE 6 editor
    And I wait until MathType editor is displayed
    And I wait "2" seconds
    And I set MathType formula to '<math><mfrac><mn>1</mn><msqrt><mn>2</mn><mi>&#x3c0;</mi></msqrt></mfrac></math>'
    And I wait "2" seconds
    And I press accept button in MathType Editor
    And I press "Save changes"
  # Check equation
    Then I wait until Wirisformula formula exists
    Then a Wirisformula containing 'square root' should exist
