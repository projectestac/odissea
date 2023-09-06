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
 * Strings for component 'report_performance', language 'ru', version '4.1'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Автоматическое резервное копирование';
$string['check_backup_comment_disable'] = 'Производительность может снижаться при процессе резервного копирования. При включении резервное копирование должно планироваться на время низкой нагрузки.';
$string['check_backup_comment_enable'] = 'Производительность может снижаться во время проведения резервного копирования. Резервное копирование должно планироваться на время низкой нагрузки.';
$string['check_backup_details'] = 'Включение автоматизированного резервного копирования автоматически создает на сервере архивы всех курсов в указанное вами время. <p> Во время этого процесса потребляется больше ресурсов сервера, что может повлиять на производительность. </p>';
$string['check_cachejs_comment_disable'] = 'При включенном параметре повышается производительность загрузки страниц.';
$string['check_cachejs_comment_enable'] = 'При выключенном параметре страницы могут загружаться медленнее.';
$string['check_cachejs_details'] = 'Cжатие и кэширование javascript  значительно повышает производительность загрузки страницы. Настоятельно рекомендуется для сайтов в промышленной эксплуатации.';
$string['check_dbschema_errors'] = 'Схема базы данных не выстроена.';
$string['check_dbschema_name'] = 'Проверка схемы базы данных';
$string['check_dbschema_ok'] = 'Схема базы данных корректна.';
$string['check_debugmsg_comment_developer'] = 'Если установлен параметр, отличный от «РАЗРАБОТЧИК», то производительность может немного повыситься.';
$string['check_debugmsg_comment_nodeveloper'] = 'При установленном параметре «Разработчик» производительность может быть несколько снижена.';
$string['check_debugmsg_details'] = 'Если Вы не являетесь разработчиком, то практически нет смысла устанавливать уровень «Разработчик». <p> После получения сообщения об ошибке, скопируйте и сохраните его где-нибудь. Затем НАСТОЯТЕЛЬНО РЕКОМЕНДУЕТСЯ переключить отладчик обратно в НЕТ. Сообщения отладчика могут снижать производительность и дать хакеру ключ к настройкам Вашего сайта. </p>';
$string['check_enablestats_comment_disable'] = 'Обработка статистики может снижать производительность.
При включении настройки статистики должны быть установлены с осторожностью.';
$string['check_enablestats_comment_enable'] = 'Обработка статистики может снижать производительность.
Настройки статистики должны быть установлены с осторожностью.';
$string['check_enablestats_details'] = 'При включении этого параметра cron будет обрабатывать журнал событий и собирать статистику. В случае большой посещаемости сайта для этого может потребоваться некоторое время. <p> Во время этого процесса увеличивается потребление ресурсов сервера и может снизиться производительность. </p>';
$string['check_themedesignermode_comment_disable'] = 'При включенном параметре изображения и таблицы стилей не будут кэшироваться, что приведет к значительному снижению производительности.';
$string['check_themedesignermode_comment_enable'] = 'При выключенном параметре изображения и таблицы стилей будут кэшироваться, что приведет к значительному повышению производительности.';
$string['check_themedesignermode_details'] = 'Это часто является причиной медленной работы сайтов Moodle. <p> Включение режима дизайнера темы может в среднем в два раза увеличить нагрузку процессора. </p>';
$string['comments'] = 'Комментарии';
$string['disabled'] = 'Отключено';
$string['edit'] = 'Редактировать';
$string['enabled'] = 'Включено';
$string['issue'] = 'Проблема';
$string['morehelp'] = 'Дополнительная помощь';
$string['performance:view'] = 'Просматривать отчет «Сведения о производительности»';
$string['performancereportdesc'] = 'В этом отчете перечислены проблемы, которые могут повлиять на производительность сайта {$a}';
$string['pluginname'] = 'Сведения о производительности';
$string['privacy:metadata'] = 'Плагин обзора производительности не хранит никаких личных данных.';
$string['value'] = 'Значение';
