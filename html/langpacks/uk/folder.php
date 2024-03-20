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
 * Strings for component 'folder', language 'uk', version '4.1'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'від {$a->name} - {$a->date}';
$string['contentheader'] = 'Вміст';
$string['display'] = 'Показати вміст теки';
$string['display_help'] = 'Якщо ви вирішите відобразити вміст папки на сторінці курсу, посилання на окрему сторінку не буде. Опис буде відображатися, лише якщо поставлено галочку «Показати опис на сторінці курсу». Зауважте, що в цьому випадку дії перегляду учасників не можуть бути зареєстровані.';
$string['displayinline'] = 'Вбудовано в сторінку курсу';
$string['displaypage'] = 'Окремою сторінкою';
$string['dnduploadmakefolder'] = 'Розархівувати файли та створити теку';
$string['downloadfolder'] = 'Завантажити теку';
$string['eventallfilesdownloaded'] = 'Завантажено стиснутий архів теки';
$string['eventfolderupdated'] = 'Оновлено теку';
$string['folder:addinstance'] = 'Додавати нову теку';
$string['folder:managefiles'] = 'Управляти файлами в модулі теки';
$string['folder:view'] = 'Перегляд вмісту теки';
$string['foldercontent'] = 'Файли та теки';
$string['forcedownload'] = 'Примусове завантаження файлів';
$string['forcedownload_help'] = 'Чи слід певні файли, наприклад зображення чи файли HTML, відображатися у браузері, а не завантажуватися. Зауважте, що з міркувань безпеки цей параметр слід знімати, лише якщо всі користувачі, які мають можливість керувати файлами в папці, є довіреними користувачами.';
$string['indicator:cognitivedepth'] = 'Папка: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутої студентом у ресурсі Folder.';
$string['indicator:cognitivedepthdef'] = 'Папка когнітивна';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної взаємодії, запропонованої ресурсами папки протягом цього інтервалу аналізу (Рівні = Без перегляду, Перегляд)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Папка: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальному розширенні, досягнутому студентом у ресурсі папки.';
$string['indicator:socialbreadthdef'] = 'Папка соц';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої ресурсами папки протягом цього інтервалу аналізу (Рівні = Без участі, лише учасник)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Максимальний розмір завантажуваної теки (MB)';
$string['maxsizetodownload_help'] = 'Максимальний розмір теки, яка може бути завантажена як стиснутий zip-архів. Якщо встановлено в нуль, то розмір не обмежується.';
$string['modulename'] = 'Тека';
$string['modulename_help'] = '<p>Модуль <b>Тека</b> дозволяє додати до навчального курсу набір різноманітних файлів, розміщених в одному каталозі. Всі ці файли можна завантажити одним архівом, що значно спрощує роботу з матеріалами курсу. Також можна створити порожній каталог та поступово наповнювати його потрібними файлами.</p>
<p><b>Тека</b> може бути використана:</p>
<ul>
  <li>Для збирання файлів на одну тему, наприклад, набір минулих екзаменаційних робіт у форматі PDF або набір зображень для використання у студентських проектах</li>
  <li>Для забезпечення загального простору завантаження для викладачів (тека прихована від сторонніх, так що тільки викладачі можуть її побачити)</li>
</ul>';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Теки';
$string['newfoldercontent'] = 'Новий вміст папки';
$string['noautocompletioninline'] = 'Автоматична відмітка завершення перегляду каталогу не може бути вибрана разом з параметром "Вбудовано в сторінку курсу"';
$string['page-mod-folder-view'] = 'Головна сторінка модуля Тека';
$string['page-mod-folder-x'] = 'Будь-яка сторінка модуля Тека';
$string['pluginadministration'] = 'Керування текою';
$string['pluginname'] = 'Тека';
$string['privacy:metadata'] = 'Плагін ресурсів папки не зберігає жодних персональних даних.';
$string['search:activity'] = 'Тека';
$string['showdownloadfolder'] = 'Показувати кнопку для завантаження теки';
$string['showdownloadfolder_help'] = 'Якщо встановлено в "Так", то під файлами теки буде показано кнопку для можливості завантажити містиме теки на свій комп’ютер у вигляді стиснутого zip-архіву.';
$string['showexpanded'] = 'Підкаталоги показувати розгорнутими';
$string['showexpanded_help'] = 'Якщо включено, то всі підкаталоги будуть відразу показуватися розгорнутими. Інакше вони типово будуть згорнутими.';
