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
 * Strings for component 'assignfeedback_offline', language 'uk', version '4.4'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Підтвердження імпорту оцінок';
$string['default'] = 'Типово дозволено';
$string['default_help'] = 'Якщо включено, то цей метод відгуку буде встановлюватися як типовий для всіх нових завдань.';
$string['downloadgrades'] = 'Завантажити список оцінок';
$string['enabled'] = 'Лист оцінювання';
$string['enabled_help'] = 'Якщо включено, то викладач зможе завантажити та відвантажити список зі студентськими оцінками, які він проставить за завдання.';
$string['feedbackupdate'] = 'Встановити поле  "{$a->field}" для "{$a->student}" як "{$a->text}"';
$string['gradelockedingradebook'] = 'Оцінювання заблоковане в Журналі оцінок для  {$a}';
$string['graderecentlymodified'] = 'Оцінка була змінена через сайт пізніше від листа оцінювання для  {$a}';
$string['gradesfile'] = 'Лист оцінювання (csv-формат)';
$string['gradesfile_help'] = 'Таблиця оцінювання зі зміненими оцінками. Цей файл має бути файлом CSV із кодуванням UTF-8, завантаженим із завдання, зі стовпцями для оцінки та ідентифікатора учня.';
$string['gradeupdate'] = 'Встановити оцінку для {$a->student} в {$a->grade}';
$string['ignoremodified'] = 'Дозволити оновлення записів, які були змінені раніше в через сайт.';
$string['ignoremodified_help'] = 'Коли ви скачуєте лист оцінювання з сайту, він містить дати останнього цінювання. Якщо деякі оцінки оновлено через сайт вже після того як вискачали цей лист, типово Moodle не буде переписувати цю інформацію із завантаженого назад листа. Але вибір цієї установки відключить цю перевірку, і тоді можливо переписати всі оцінки саме з листа оцінювання.';
$string['importgrades'] = 'Підтвердження змін в листі оцінювання';
$string['invalidgradeimport'] = 'Не вдається прочитати завантажений лист. Переконайтеся, що інформація у файлі збережена у форматі csv (розділовий знак - кома) та спробуйте ще раз.';
$string['nochanges'] = 'Змінених оцінок у листі оцінювання немає';
$string['offlinegradingworksheet'] = 'Оцінки';
$string['pluginname'] = 'Лист оцінювання';
$string['privacy:nullproviderreason'] = 'Цей плагін не має бази даних для зберігання інформації користувача. Він використовує лише API в mod_assign, щоб допомогти відображати інтерфейс оцінювання.';
$string['processgrades'] = 'Імпортувати оцінки';
$string['skiprecord'] = 'Пропустити запис';
$string['updatedgrades'] = 'Оновлено {$a->gradeupdatescount} оцінки та {$a->feedbackupdatescount} екземпляри відгуків.';
$string['updaterecord'] = 'Оновити запис';
$string['uploadgrades'] = 'Відправити лист оцінювання';
