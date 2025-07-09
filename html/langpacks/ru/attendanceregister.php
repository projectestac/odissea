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
 * Strings for component 'attendanceregister', language 'ru', version '4.4'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Вы уверены, что хотите удалить этот офлайн сеанс?';
$string['attendanceregister:addinstance'] = 'Добавлять новый реестр активности';
$string['attendanceregister:addotherofflinesess'] = 'Добавлять офлайн сеансы в чужие реестры активности';
$string['attendanceregister:addownofflinesess'] = 'Добавлять офлайн сеансы в свой реестр активности';
$string['attendanceregister:deleteotherofflinesess'] = 'Удалять офлайн сеансы в чужих реестрах активности';
$string['attendanceregister:deleteownofflinesess'] = 'Удалять офлайн сеансы в своем реестре активности';
$string['attendanceregister:recalcsessions'] = 'Принудительно запускать пересчет данных в реестре активности';
$string['attendanceregister:tracked'] = 'Отслеживается в реестре активности';
$string['attendanceregister:viewotherregisters'] = 'Просматривать чужие реестры активности';
$string['attendanceregister:viewownregister'] = 'Просматривать свои реестры активности';
$string['back_to_normal'] = 'Назад к обычной версии';
$string['back_to_tracked_user_list'] = 'Назад к списку отслеживаемых пользователей';
$string['click_for_detail'] = 'нажмите для подробностей';
$string['comments'] = 'Комментарии';
$string['completiondurationgroup'] = 'Всего времени учтено';
$string['completiontotalduration'] = 'Требуемое время (минуты)';
$string['count'] = '№';
$string['crontask'] = 'Пересчитать данные по сеансам активности';
$string['dayscertificable'] = 'Дней назад';
$string['dayscertificable_exceeded'] = 'Должно быть не более, чем {$a} дней назад';
$string['dayscertificable_help'] = 'Определяет, насколько старыми могут быть офлайн сеансы.<br />
    Студент не сможет записать офлайн сеанс, старше, чем указанное количество дней';
$string['duration'] = 'Длительность';
$string['duration_hh_mm'] = '{$a->hours} час., {$a->minutes} мин.';
$string['duration_mm'] = '{$a->minutes} мин.';
$string['enable_offline_sessions_certification'] = 'Включить офлайн сеансы';
$string['end'] = 'Конец';
$string['first_calc_at_next_cron_run'] = 'Все прошлые сеансы будут учтены при следующем запланированном запуске расчета';
$string['force_recalc_all_session'] = 'Пересчитать все онлайн сеансы';
$string['force_recalc_all_session_help'] = 'Удалить и пересчитать данные по всем онлайн сеансам всех отслеживаемых пользователей.<br />
    Обычно <b>не требуется этого делать</b>!<br />
    Новые сеансы рассчитываются автоматически в фоновом режиме (после некоторой задержки).<br />
    Это может быть использовано <b>только в случаях</b>:
    <ul>
      <li>Изменения роли пользователя в отслеживаемом курсе
      (например, изменение роли с Учителя на Студента, когда роль студента отслеживается, а роль Учителя - нет).</li>
      <li>После изменения настроек Реестра активности, которые влияют на подсчет времени
      (i.e. <i>Режим отслеживания активности</i>, <i>Таймаут онлайн сеанса</i>)</li>
    </ul>
    При записи на курс новых пользователей не требуется запускать пересчет!<br /><br />
    Пересчет может быть запущен немедленно или запланирован при следующем запуске крона.
    Запланированный пересчет может быть более эффективен в курсах с большим числом участников.';
$string['force_recalc_all_session_now'] = 'Пересчитать данные по сеансам сейчас';
$string['force_recalc_user_session'] = 'Пересчитать данные по онлайн сеансам пользователя';
$string['fullname'] = 'Имя';
$string['grandtotal_time'] = 'Общее время';
$string['insert_new_offline_session'] = 'Добавить новый офлайн сеанс';
$string['insert_new_offline_session_for_another_user'] = 'Добавить новый офлайн сеанс для {$a->fullname}';
$string['last_session_logout'] = 'Окончание последнего сеанса';
$string['last_site_access'] = 'Последняя активность на сайте';
$string['last_site_login'] = 'Последний вход на сайт';
$string['logout_is_future'] = 'Не обязательно должно быть в будущем';
$string['mandatoryofflinespecifycourse'] = 'Обязательный выбор курса';
$string['mandatoryofflinespecifycourse_help'] = 'Указание курса для офлайн сеансов будет обязательным';
$string['maynotaddselfcertforother'] = 'Вы не можете добавлять офлайн сеансы для других пользователей';
$string['modulename'] = 'Реестр активности';
$string['modulenameplural'] = 'Реестры активности';
$string['myattendanceregistersessions'] = 'Мои сеансы в реестре активности';
$string['never'] = '(никогда)';
$string['no_refcourse'] = '(курс не выбран)';
$string['no_session'] = 'Нет сеансов';
$string['no_session_for_this_user'] = '- У этого пользователя еще нет сеансов -';
$string['no_tracked_user'] = '- Нет пользователей, учитываемых в этом реестре активности -';
$string['not_specified'] = '(не указано)';
$string['offline'] = 'Офлайн';
$string['offline_refcourse_duration'] = 'Время офлайн, курс:';
$string['offline_session_comments'] = 'Комментарии';
$string['offline_session_comments_help'] = 'Укажите тему офлайн сеанса';
$string['offline_session_deleted'] = 'Офлайн сеанс удален';
$string['offline_session_end'] = 'Конец';
$string['offline_session_ref_course_help'] = 'Укажите курс, для которого была выполнена работа офлайн или курс, который связан с темой работы.';
$string['offline_session_saved'] = 'Новый офлайн сеанс сохранен';
$string['offline_session_start'] = 'Начало';
$string['offline_sessions_certification'] = 'Сеансы офлайн работы';
$string['offline_sessions_total_duration'] = 'Общее время офлайн сеансов';
$string['offlinecomments'] = 'Комментарии пользователя';
$string['offlinecomments_help'] = 'Включить добавление текстовых комментариев к офлайн сеансам';
$string['offlinespecifycourse'] = 'Определить курс для офлайн сеансов';
$string['online'] = 'Онлайн';
$string['online_offline'] = 'Онлайн/Офлайн';
$string['online_session_updated'] = 'Онлайн сеансы обновлены';
$string['online_session_updated_report'] = 'Онлайн сеансы {$a->fullname} обновлены: {$a->numnewsessions} новых';
$string['online_sessions_total_duration'] = 'Общее время онлайн сеансов';
$string['onlyrealusercanaddofflinesessions'] = 'Только сам пользователь может добавлять офлайн сеанс';
$string['onlyrealusercandeleteofflinesessions'] = 'Только сам пользователь может удалять офлайн сеансы';
$string['overlaps_current_session'] = 'Пересекается с текущим онлайн сеансом (с момента текущего входа)';
$string['overlaps_old_sessions'] = 'Пересекается с другим сеансом (онлайн или офлайн)';
$string['participants_attendance_report_viewed'] = 'Отчет по активности участников просмотрен';
$string['pluginadministration'] = 'Управление реестром активности';
$string['pluginname'] = 'Реестр активности';
$string['prev_site_login'] = 'Предыдущий вход на сайт';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'Длительность сеанса';
$string['privacy:metadata:attendanceregister_aggregate:total'] = 'Общее время сеанса';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'ID пользователя';
$string['privacy:metadata:attendanceregister_lock'] = 'Блокируется на время расчета данных по реестру активности пользователя';
$string['privacy:metadata:attendanceregister_session:duration'] = 'Длительность сеанса';
$string['privacy:metadata:attendanceregister_session:login'] = 'Время входа';
$string['privacy:metadata:attendanceregister_session:logout'] = 'Время выхода';
$string['privacy:metadata:attendanceregister_session:userid'] = 'ID пользователя';
$string['recalc_already_pending'] = '(Уже запланировано для выполнения в следующий запуск Cron)';
$string['recalc_complete'] = 'Пересчет сеансов завершен';
$string['recalc_scheduled'] = 'Пересчет данных сеансов запланирован. Он будет выполнен при следующем запуске Cron';
$string['registername'] = 'Название реестра активности';
$string['registertype'] = 'Режим отслеживания активности';
$string['select_a_course'] = '- Выберите курс -';
$string['select_a_course_if_any'] = '- Выбор курса, если имеется -';
$string['session_added_by_another_user'] = 'Добавлено: {$a}';
$string['sessiontimeout'] = 'Тайм-аут сессии';
$string['show_my_sessions'] = 'Показать мои сеансы';
$string['show_printable'] = 'Показать версию для печати';
$string['standardlog_disabled'] = 'Стандартный журнал Moodle отключен. Сеансы новых пользователей не отслеживаются';
$string['standardlog_readonly'] = 'Стандартный журнал Moodle только для чтения. Сеансы новых пользователей не отслеживаются';
$string['total_time_offline'] = 'Общее время офлайн';
$string['total_time_online'] = 'Общее время онлайн';
$string['tracked_courses'] = 'Отслеживаемые курсы';
$string['tracked_users'] = 'Отслеживаемые пользователи';
$string['type_category'] = 'Все курсы в данной категории';
$string['type_course'] = 'Только этот курс';
$string['unknown'] = '(неизвестно)';
$string['unreasoneable_session'] = 'Вы уверены? Длительность более {$a} час.';
