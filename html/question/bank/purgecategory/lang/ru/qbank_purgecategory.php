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

$string['confirmmessage'] = 'Вы собираетесь полностью удалить эту категорию вопросов. Если Вы продолжите, эта категория и все содержащиеся в ней подкатегории и неиспользуемые вопросы будут навсегда удалены. Это действие будет невозможно отменить!';
$string['confirmpurge'] = 'Подтвердите полное удаление категории вопросов';
$string['iconfirm'] = 'Я подтверждаю, что понимаю, что делаю';
$string['infowithmove'] = 'В категории «{$a->name}» содержится: подкатегорий - {$a->subcategories}, неиспользуемых вопросов - {$a->unusedquestions}, вопросов, которые нельзя удалить - {$a->usedquestions} (это вопросы, которые используются в существующих тестах или в сохраненных попытках прохождения тестов). Укажите другую категорию, в которую следует переместить вопросы, которые нельзя удалить.';
$string['infowithoutmove'] = 'В категории «{$a->name}» содержится: подкатегорий - {$a->subcategories}, неиспользуемых вопросов - {$a->unusedquestions}.';
$string['pluginname'] = 'Полное удаление категорий вопросов';
$string['privacy:metadata'] = 'Плагин не хранит персональные данные.';
$string['purgecategories'] = 'Полное удаление категорий';
$string['purgecategory:purgecategory'] = 'Удалять категорию вопросов вместе со всеми подкатегориями и вопросами';
$string['purgethiscategory'] = 'Полностью удалить эту категорию';
$string['qbankpurgecategories'] = 'Банк вопросов: Полное удаление категорий';
$string['validationcategory'] = 'Пожалуйста, выберите корректную категорию.';
$string['validationconfirm'] = 'Вы должны подтвердить это действие';
