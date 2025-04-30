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
 * Strings for component 'block_completion_progress', language 'ru', version '4.4'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'HTML-код цвета завершенных элементов';
$string['completed_colour_title'] = 'Цвет завершенного элемента';
$string['completion_not_enabled'] = 'Отслеживание завершения не включено на этом сайте.';
$string['completion_not_enabled_course'] = 'Отслеживание завершения не включено в этом курсе.';
$string['completion_progress:addinstance'] = 'Добавлять новый блок «Прогресс завершения элементов курса»';
$string['completion_progress:myaddinstance'] = 'Добавлять блок «Прогресс завершения элементов курса» на Домашнюю страницу';
$string['completion_progress:overview'] = 'Просматривать обзор прогресса выполнения всеми студентами';
$string['completion_progress:showbar'] = 'Показывать панель в блоке «Прогресс выполнения»';
$string['config_activitiesincluded'] = 'Активности включены';
$string['config_activitycompletion'] = 'Набор всех завершенных элементов курса';
$string['config_default_title'] = 'Прогресс завершения элементов курса';
$string['config_group'] = 'Доступно только для группы или потока';
$string['config_header_monitored'] = 'Отслеживается';
$string['config_icons'] = 'Использовать значки на панели';
$string['config_longbars'] = 'Как показывать длинные панели';
$string['config_orderby_course_order'] = 'Порядок в курсе';
$string['config_orderby_due_time'] = 'Время с использованием даты "{$a}"';
$string['config_percentage'] = 'Показывать процент студентам';
$string['config_scroll'] = 'Список';
$string['config_selectactivities'] = 'Выбрать элементы';
$string['config_selectedactivities'] = 'Выбранные элементы';
$string['config_squeeze'] = 'Сжать';
$string['config_title'] = 'Альтернативное название';
$string['config_wrap'] = 'Перенос';
$string['coursenametoshow'] = 'Показать название курса в Личном кабинете';
$string['defaultlongbars'] = 'Представление по умолчанию для длинных панелей';
$string['fullname'] = 'Полное название курса';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'HTML-код цвета для будущих элементов, которые еще не завершены';
$string['futureNotCompleted_colour_title'] = 'Цвет будущих незавершенных';
$string['how_activitiesincluded_works'] = 'Какие элементы курса включить';
$string['how_activitiesincluded_works_help'] = '<p> По умолчанию все действия с установленными настройками завершения элемента курса включены в панель.</p><p>Вы также можете вручную выбрать элементы курса для включения. </p>';
$string['how_group_works'] = 'Для каких групп доступен';
$string['how_group_works_help'] = '<p>Выбор группы или потока ограничит отображение этого блока только для этой группы или потока.</p';
$string['how_longbars_works'] = 'Как показывать длинные панели';
$string['how_longbars_works_help'] = '<p>Когда панели превышают заданную длину, они могут быть показаны одним из следующих способов.</p><ul><li>Сжатыми в одну горизонтальную панель</li><li>С прокруткой в сторону для отображения переполняемых сегментов панели</li><li>С переносом для отображения всех сегментов панели на нескольких линиях</li></ul><p>Обратите внимание, что когда панель перенесена, индикатор «Сейчас» отображаться не будет.</p>';
$string['how_ordering_works'] = 'Порядок расположения';
$string['how_ordering_works_help'] = '<p>Существует два варианта расположения элементов курса в блоке «Прогресс выполнения».</p><ul><li><em>Используются даты «Ожидаемое время завершения»</em> (по умолчанию)<br />Элементы и ресурсы курса располагаются на панели в порядке ожидаемого времени их завершения.Там, где элементы курса/ресурсы не имеют ожидаемого времени завершения, вместо этого используется их порядок в курсе. Когда используется этот вариант, отображается индикатор СЕЙЧАС.</li><li><em>Порядок в курсе</em><br />Элементы курса/ ресурсы представлены в том же порядке, как и на странице курса. При использовании этого параметра ожидаемое время завершения игнорируется. Когда эта опция используется, индикатор СЕЙЧАС не отображается.</li></ul>';
$string['how_selectactivities_works'] = 'как включить элементы';
$string['how_selectactivities_works_help'] = '<p> Чтобы вручную выбрать элементы, которые нужно включить в панель, убедитесь, что для параметра «Включенные элементы» установлено значение «Выбранные элементы». </p> <p> Можно включать только те элементы, для которых установлены параметры их завершения. </p> <p> Удерживайте клавишу CTRL, чтобы выбрать несколько элементов. </p>';
$string['lastonline'] = 'Последний в курсе';
$string['mouse_over_prompt'] = 'Наведите курсор мыши или коснитесь панели для получения информации.';
$string['no_activities_config_message'] = 'Нет элементов или ресурсов с установленным параметром завершения или они не были выбраны. Установите параметр завершения для элементов и ресурсов курса, затем настройте этот блок.';
$string['no_activities_message'] = 'Никакие элементы курса или ресурсы не отслеживаются. Используйте конфигурацию для настройки контроля.';
$string['no_blocks'] = 'Блоки «Прогресс выполнения» не установлены для ваших курсов.';
$string['no_courses'] = 'Вы не зачислены ни на один курс. Панели могут быть показаны только участникам курсов.';
$string['no_visible_activities_message'] = 'Ни один из отслеживаемых элементов курса в настоящее время недоступен.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'HTML-код цвета для текущих элементов, которые еще не были завершены';
$string['notCompleted_colour_title'] = 'Цвет для незавершенных элементов курса';
$string['not_all_expected_set'] = 'Не все элементы с завершением имеют установленную дату "{$a}".';
$string['now_indicator'] = 'Сейчас';
$string['overview'] = 'Обзор студентов';
$string['pluginname'] = 'Прогресс завершения элементов курса';
$string['privacy:metadata'] = 'Блок «Прогресс завершения элементов курса» только отображает существующие данные о завершении.';
$string['progress'] = 'Прогресс';
$string['progressbar'] = 'Прогресс завершения элементов курса';
$string['shortname'] = 'Короткое название курса';
$string['showallinfo'] = 'Показать всю информацию';
$string['showinactive'] = 'Показать неактивных студентов';
$string['submitted'] = 'Отправлено';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'HTML-код цвета для элементов, на которые были отправлены ответы, но они еще не завершены';
$string['submittednotcomplete_colour_title'] = 'Незавершенные с отправленными ответами';
$string['time_expected'] = 'Ожидаемый';
$string['why_set_the_title'] = 'Зачем задавать заголовок блока?';
$string['why_set_the_title_help'] = '<p>Может быть несколько экземпляров блока «Прогресс выполнения». Вы можете использовать разные блоки «Прогресс выполнения» для отслеживания различных наборов элементов курса или ресурсов. Например, вы можете отслеживать ход выполнения заданий в одном блоке и тесты в другом. По этой причине вы можете заменить заголовок по умолчанию на более подходящий заголовок для каждого блока.</p>';
$string['why_show_precentage'] = 'Показывать процент успеваемости студентам?';
$string['why_show_precentage_help'] = '<p>Можно показать общий процент успеваемости студентов.</p><p>Он рассчитывается как количество выполненных элементов курса, деленное на общее число элементов в панели.</p><p>Процент прогресса отображается до тех пор, пока студент не наведет курсор мыши на элемент в панели.</p>';
$string['why_use_icons'] = 'Зачем вы можете использовать значки?';
$string['why_use_icons_help'] = '<p> Возможно, вы захотите добавить значки галочек и крестиков в данный блок, чтобы сделать его более визуально доступным для учащихся с дальтонизмом. </ p>
<p> Это также может сделать значения блока более понятными, если вы считаете, что цвета не приемлемы по культурным или личным причинам. </ p>';
$string['wrapafter'] = 'При переносе ограничивайте строки';
