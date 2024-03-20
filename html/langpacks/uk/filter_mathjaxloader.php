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
 * Strings for component 'filter_mathjaxloader', language 'uk', version '4.1'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Додаткові елементи формул';
$string['additionaldelimiters_help'] = 'MathJax фільтр аналізує текст формул, який складається з символьних елементів.

Список визначених символьних елемнтів може бути доданим в тут (наприклад, AsciiMath використовує `). Елемент може містити кілька символів, а кілька елементів можуть бути розділені комами.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL';
$string['httpsurl_help'] = 'Повна URL-адреса бібліотеки MathJax.';
$string['localinstall'] = 'Локально встановлений MathJax';
$string['localinstall_help'] = 'Конфігурація MathJax за замовчуванням використовує версію CDN MathJax, але MathJax можна встановити локально, якщо потрібно.

Це може бути корисно для економії пропускної спроможності або через обмеження локального проксі-сервера.

Щоб використовувати локальну інсталяцію MathJax, спочатку завантажте повну бібліотеку MathJax з https://www.mathjax.org/. Потім встановіть його на веб-сервер. Нарешті оновіть параметри фільтра MathJax httpurl та/або httpsurl, щоб вони вказували на локальну URL-адресу MathJax.js.';
$string['mathjaxsettings'] = 'Налаштування MathJax';
$string['mathjaxsettings_desc'] = 'Типове налаштування MathJax повинно задовольняти більшість користувачів, але MathJax легко налаштовується і будь-які додаткові опції можуть бути додані тут.';
$string['privacy:metadata'] = 'Плагін MathJax не зберігає жодних персональних даних.';
$string['texfiltercompatibility'] = 'Сумісність з TeX фільтром';
$string['texfiltercompatibility_help'] = 'MathJax фільтр може бути використаним в якості заміни TeX фільтра.

Для підтримки всіх елементів підтримуваних мовою TeX, MathJax буде налаштований показувати всі формули "в рядок" з текстом.';
