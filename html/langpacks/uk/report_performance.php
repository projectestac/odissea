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
 * Strings for component 'report_performance', language 'uk', version '4.4'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Автоматичне резервне копіювання';
$string['check_backup_comment_disable'] = 'Продуктивність роботи системи може бути знижена в процесі резервного копіювання. Якщо опція включена, резервні копії повинні бути заплановані на періоди низького навантаження.';
$string['check_backup_comment_enable'] = 'Продуктивність роботи системи може бути знижена в процесі резервного копіювання. Створення резервних копій повинно бути заплановано на періоди низького навантаження.';
$string['check_backup_details'] = 'При включенні автоматичного резервного копіювання на сервері у визначений час будуть створюватися архівні файли з даними всіх курсів. <p>Цей процес буде використовувати більше серверних ресурсів, що може вплинути на продуктивність роботи системи в цей час. </p>';
$string['check_cachejs_comment_disable'] = 'Якщо включено, то буде збільшено швидкість завантаження сторінки.';
$string['check_cachejs_comment_enable'] = 'Якщо виключено, то сторінка може завантажуватися повільніше.';
$string['check_cachejs_details'] = 'Javascript кешування та стиснення значно покращує продуктивність завантаження сторінки. Наполегливо рекомендуємо для виробничих сайтів.';
$string['check_dbschema_errors'] = 'Схема бази даних не вирівняна.';
$string['check_dbschema_name'] = 'Перевірка схеми бази даних';
$string['check_dbschema_ok'] = 'Схема бази даних правильна.';
$string['check_debugmsg_comment_developer'] = 'Якщо встановлено значення, відмінне від DEVELOPER, продуктивність може трохи покращитися.';
$string['check_debugmsg_comment_nodeveloper'] = 'Якщо встановлено для РОЗРОБНИКІВ, то може незначно вплинути на продуктивність .';
$string['check_debugmsg_details'] = 'Перехід на рівень розробника рідко дає будь-які переваги, якщо цього не вимагає розробник. <p>Після того, як ви отримали повідомлення про помилку, скопіювали та вставили його кудись, НАСТУПНО РЕКОМЕНДУЄМО повернути налагодження на НІ. Повідомлення про налагодження можуть дати підказку хакеру щодо налаштування вашого сайту та можуть вплинути на продуктивність.</p>';
$string['check_enablestats_comment_disable'] = 'Продуктивність може бути порушена обробкою статистики. Якщо включено, налаштування статистики  повинно встановлюватися з обережністю.';
$string['check_enablestats_comment_enable'] = 'Продуктивність може бути порушена обробкою статистики. Налаштування статистики  повинно встановлюватися з обережністю.';
$string['check_enablestats_details'] = 'Включення запускає процес журналізації в cronjob, що збирає деяку статистику діяльності сайту. Залежно від кількості трафіку на вашому сайті, це може зайняти деякий час. <p>Під час цього процесу, споживається більше ресурсів сервера і може вплинути на продуктивність.</p>';
$string['check_themedesignermode_comment_disable'] = 'Якщо включено, то картинки та таблиці стилів не будуть кешуватися, що зменшить продуктивність роботи сайту.';
$string['check_themedesignermode_comment_enable'] = 'Якщо виключено, то картинки та таблиці стилів будуть кешуватися, що покращить продуктивність роботи сайту.';
$string['check_themedesignermode_details'] = 'Це часта причина повільної роботи сайтів на платформі Moodle. <p>У середньому це може зайняти принаймні в двічі більше процесорних ресурсів для сайту з темою включеною в режимі дизайнера. </p>';
$string['comments'] = 'Коментарі';
$string['disabled'] = 'Відключено';
$string['edit'] = 'Редагувати';
$string['enabled'] = 'Включено';
$string['issue'] = 'Проблема';
$string['morehelp'] = 'Додаткова допомога';
$string['performance:view'] = 'Переглядати звіти продуктивності';
$string['performancereportdesc'] = 'В цьому звіті перераховано проблеми, які можуть вплинути на продуктивність сайту {$a}';
$string['pluginname'] = 'Огляд продуктивності';
$string['privacy:metadata'] = 'Плагін Огляд продуктивності не зберігає жодних персональних даних.';
$string['value'] = 'Значення';
