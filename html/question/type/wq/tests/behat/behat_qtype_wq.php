<?php

use Behat\Behat\Context\Step\Given;
use Behat\Behat\Context\Step\When;
use Behat\Behat\Context\Step\Then;
use Behat\Gherkin\Node\TableNode;

/**
 * Steps definitions related to qtype_wq.
 */
class behat_qtype_wq extends behat_base {

    /**
     * @Given I open the action menu for :elementtype :identifier
     */
    public function i_open_the_action_menu_for($elementtype, $identifier) {
        // Find the action menu button for the specified element
        $xpath = "//div[contains(@class, '{$elementtype}') and contains(., '{$identifier}')]//button[contains(@class, 'action-menu-trigger')]";
        
        $this->execute('behat_general::i_click_on', [$xpath, 'xpath_element']);
    }

    /**
     * @Then I should see :count elements matching :selector
     */
    public function i_should_see_elements_matching($count, $selector) {
        // Convert count to integer
        $expectedcount = (int)$count;
        
        // Find elements matching the selector
        $elements = $this->find_all('css_element', $selector);
        
        if (count($elements) !== $expectedcount) {
            $session = $this->getSession();
            $currentUrl = $session->getCurrentUrl();
            
            throw new Exception(
                "Expected {$expectedcount} elements matching '{$selector}', but found " . count($elements) . 
                ". Current URL: {$currentUrl}"
            );
        }
    }
}