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
 * Tool for deleting question category with question and subcategories.
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['confirmmessage'] = 'You are going to purge question category. If you proceed, this category and all it\'s subcategories and unused questions will be permanently deleted. This action cannot be undone!';
$string['confirmpurge'] = 'Confirm question category purge';
$string['iconfirm'] = 'I confirm, that I understand what I am doing';
$string['infowithmove'] = 'The category \'{$a->name}\' contains {$a->subcategories} subcategories, {$a->unusedquestions} unused questions and {$a->usedquestions} questions, that cannot be deleted (questions that are still in use in some existing quizzes). Please choose another category to move undeletable questions to.';
$string['infowithoutmove'] = 'The category \'{$a->name}\' contains {$a->subcategories} subcategories and {$a->unusedquestions} unused questions.';
$string['pluginname'] = 'Purge question categories';
$string['privacy:metadata'] = 'The plugin does not store any personal data.';
$string['purgecategories'] = 'Purge categories';
$string['purgecategory:purgecategory'] = 'Delete question category with all questions and subcategories';
$string['purgethiscategory'] = 'Purge this category';
$string['qbankpurgecategories'] = 'Question bank: Purge categories';
$string['validationcategory'] = 'Please select valid category';
$string['validationconfirm'] = 'You have to confirm this action';
