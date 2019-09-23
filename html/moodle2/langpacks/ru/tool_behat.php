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
 * Strings for component 'tool_behat', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Это инструмент управления помогает разработчикам и тестировщикам создавать файлы .feature, описывающие функционал Moodle, и автоматически их запускать. Шаги, определяющие доступность для использования в файлах .feature, приведены ниже.';
$string['allavailablesteps'] = 'Все имеющиеся определения шагов';
$string['errorbehatcommand'] = 'Ошибка при выполнении команды behat CLI. Попробуйте вручную запустить из командной строки "{$a} --help", чтобы узнать больше об этой проблеме.';
$string['errorcomposer'] = 'Компоновщик зависимости не установлен.';
$string['errordataroot'] = '$CFG->behat_dataroo не установлен или некорректен.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix и $CFG->behat_wwwroot должны быть установлены в config.php.';
$string['erroruniqueconfig'] = 'Значения $CFG->behat_dataroot, $CFG->behat_prefix и $CFG->behat_wwwroot  должны отличаться от значений $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot и $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Значение аргументов поля';
$string['fieldvalueargument_help'] = 'Этот аргумент должен соответствовать значению поля. Есть много типов полей, простые, например, флажки или текстовая область или сложные, например - выбор даты. Вы можете проверить <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">значения полей</a>, чтобы увидеть ожидаемое значение поля в зависимости от типа поля, представленного Вами.';
$string['giveninfo'] = 'Дано. Процессы настройки конфигурации';
$string['infoheading'] = 'Информация';
$string['installinfo'] = 'Прочтите информацию по установке и выполнению тестов {$a}';
$string['newstepsinfo'] = 'Прочтите информацию о том, как добавить новые определения шагов - {$a}';
$string['newtestsinfo'] = 'Прочтите информацию о том, как написать новые тесты - {$a}';
$string['nostepsdefinitions'] = 'Нет определений шагов, соответствующих этим условиям фильтрации';
$string['pluginname'] = 'Приемочные испытания';
$string['stepsdefinitionscomponent'] = 'Область';
$string['stepsdefinitionscontains'] = 'Содержит';
$string['stepsdefinitionsfilters'] = 'Определения шагов';
$string['stepsdefinitionstype'] = 'Тип';
$string['theninfo'] = 'Затем. Проверки на соответствие ожидаемым результатам';
$string['unknownexceptioninfo'] = 'Возникла ошибка в работе Selenium или браузера. Пожалуйста, убедитесь, что используется последняя версия Selenium.
Ошибка:';
$string['viewsteps'] = 'Фильтр';
$string['wheninfo'] = 'Когда. Действия, вызывающие события';
$string['wrongbehatsetup'] = 'Что-то не так с установкой behat и шаги определений не могут быть перечислены: <b>{$a->errormsg}.</b> <br/><br/> Пожалуйста, проверьте:  <ul><li> в config.php значения $CFG->behat_dataroot, $CFG->behat_prefix и $CFG->behat_wwwroot отличаются от значений, установленных в $CFG->dataroot, $CFG->prefix and $CFG->wwwroot. </li><li> Вы запускали "{$a->behatinit}" из корневого каталога Moodle. </li><li> Зависимости установлены в vendor/ и файл {$a->behatcommand} имеет разрешения на выполнение. </li></ul>';
