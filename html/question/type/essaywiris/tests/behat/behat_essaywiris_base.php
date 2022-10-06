<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Step definitions base class for science essay.
 */

/**
 * This class provides necessary methods to run behat scripts for science essays.
 * @package    question
 * @subpackage essaywiris
 * @copyright  WIRIS Europe (Maths for more S.L)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.


require_once(__DIR__ . '/../../../../../lib/behat/behat_base.php');

class behat_essaywiris_base extends behat_base {

    /**
     * Type some characters inside a given writeable node. This method is designed for writing inside an Atto editor.
     * Warning: this method does not accept modifier keys (e.g. shift, alt) and will write the text literally.
     *
     * @Then I type :text in :field
     */
    public function i_type_in($text, $field) {
        $node = $this->get_selected_node('xpath_element', $field);
        $this->ensure_node_is_visible($node);
        $node->click();
        $session = $this->getSession();
        $script = 'sel = window.getSelection();
            if (sel.getRangeAt && sel.rangeCount) {
                range = sel.getRangeAt(0);
                range.deleteContents();
                range.insertNode( document.createTextNode("' . addslashes($text) . '") );
            }';
        $session->executeScript($script);
    }

}
