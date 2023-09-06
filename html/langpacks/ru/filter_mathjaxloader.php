<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_mathjaxloader', language 'ru', version '4.1'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Дополнительные разделители формул';
$string['additionaldelimiters_help'] = 'Фильтр MathJax анализирует текст в формулах, содержащих символы разделителей.

Признаваемые символы разделителей могут быть здесь добавлены в перечень (например AsciiMath использует `). Разделители могут содержать несколько символов; они отделяются запятыми.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL-адрес MathJax';
$string['httpsurl_help'] = 'Полный URL-адрес к библиотеке MathJax.';
$string['localinstall'] = 'Локальная установка MathJax';
$string['localinstall_help'] = 'В конфигурации по умолчанию MathJax использует версию CDN из MathJax, но при необходимости MathJax может быть установлен локально.

Это может быть полезно, чтобы сэкономить на трафике, либо из-за ограничений локального прокси.

Чтобы использовать локальную установку MathJax, сначала скачайте полную библиотеку MathJax с https://www.mathjax.org/. Затем установите его на веб-сервере. Наконец, обновите настройки фильтров MathJax  httpurl и/или httpsurl на URL-адрес локального MathJax.js.';
$string['mathjaxsettings'] = 'Конфигурация MathJax';
$string['mathjaxsettings_desc'] = 'Конфигурация MathJax по умолчанию должна подходить большинству пользователей.
MathJax легко конфигурируется и здесь может быть добавлен любой из стандартных вариантов конфигурации MathJax.';
$string['privacy:metadata'] = 'Плагин MathJax не хранит никаких персональных данных.';
$string['texfiltercompatibility'] = 'Совместимость с фильтром TeX';
$string['texfiltercompatibility_help'] = 'Фильтр MathJax может быть использован в качестве замены фильтра TeX.

Для поддержки всех разделителей, поддерживаемые фильтром TeX, MathJax будет настроен на отображение всех формул «инлайн» с текстом.';
