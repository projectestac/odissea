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
 * Strings for component 'attendanceregister', language 'ru', version '4.5'.
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
$string['force_recalc_user_session_help'] = 'Удалить и пересчитать все онлайн-сеансы данного пользователя.<br />
    Обычно вам <b>не нужно этого делать</b>!<br />
    Новые сессии автоматически подсчитываются в фоновом режиме (с некоторой задержкой).<br />
    Эта операция может быть полезна <b>только</b> в следующих случаях:
    <ul>
      <li>После изменения роли пользователя, если он ранее участвовал в каком-либо из отслеживаемых курсов с другой ролью
      (например, при переходе из роли преподавателя в роль студента, когда студенты отслеживаются, а преподаватели — нет).</li>
      <li>После изменения настроек регистрации, влияющих на расчёт сеансов
      (например, <i>режим отслеживания активности</i>, <i>таймаут онлайн-сеанса</i>)</li>
    </ul>';
$string['fullname'] = 'Имя';
$string['grandtotal_time'] = 'Общее время';
$string['insert_new_offline_session'] = 'Добавить новый офлайн сеанс';
$string['insert_new_offline_session_for_another_user'] = 'Добавить новый офлайн сеанс для {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Окончание последнего зарегистрированного онлайн сеанса (за исключением текущего сеанса)';
$string['last_session_logout'] = 'Окончание последнего сеанса';
$string['last_site_access'] = 'Последняя активность на сайте';
$string['last_site_login'] = 'Последний вход на сайт';
$string['login_must_be_before_logout'] = 'Начало после окончания!';
$string['logout_is_future'] = 'Не обязательно должно быть в будущем';
$string['mandatory_offline_sessions_comments'] = 'Обязательные комментарии';
$string['mandatoryofflinespecifycourse'] = 'Обязательный выбор курса';
$string['mandatoryofflinespecifycourse_help'] = 'Указание курса для офлайн сеансов будет обязательным';
$string['maynotaddselfcertforother'] = 'Вы не можете добавлять офлайн сеансы для других пользователей';
$string['mod_attendance_recalculation'] = 'Пересчет журнала при обновлении сеансов';
$string['modulename'] = 'Реестр активности';
$string['modulename_help'] = 'Реестр активности подсчитывает время, которое пользователи тратят на работу в онлайн-курсах.<br />
    По желанию можно разрешить пользователю регистрировать действия в офлайн-режиме.<br />
    В зависимости от режима реестр может отслеживать активность в одном курсе, во всех курсах одной категории или во всех курсах, «мета-связанных» с курсом, в котором находится реестр.<br />
    Сеансы онлайн-работы рассчитываются на основе записей в журнале, зарегистрированных Moodle.<br />
    <b>Новые сеансы онлайн-работы добавляются cron с некоторой задержкой после выхода пользователя из системы.</b>';
$string['modulenameplural'] = 'Реестры активности';
$string['myattendanceregisteraggregates'] = 'В моем реестре активности значения суммируются';
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
$string['offline_session_ref_course'] = 'Справка о курсе';
$string['offline_session_ref_course_help'] = 'Укажите курс, для которого была выполнена работа офлайн или курс, который связан с темой работы.';
$string['offline_session_saved'] = 'Новый офлайн сеанс сохранен';
$string['offline_session_start'] = 'Начало';
$string['offline_session_start_help'] = 'Выберите дату и время начала и окончания сеанса автономной работы, которые вы хотите отправить.<br />
Сеанс автономной работы не должен пересекаться ни с каким ранее записанным сеансом (онлайн или офлайн), а также с текущим онлайн сеансом.';
$string['offline_sessions_certification'] = 'Сеансы офлайн работы';
$string['offline_sessions_certification_help'] = 'Позволить пользователям добавлять сеансы автономной работы.<br />
    Это своего рода <i>самосертификация</i> проделанной работы.<br />
    Это может пригодиться, если «бюрократия» требует ведения реестра деятельности каждого студента.<br />
    Добавлять офлайн сеансы могут только реальные пользователи: администраторы,<i>Вошедшие в систему как...</i>,  не могут этого делать!';
$string['offline_sessions_total_duration'] = 'Общее время офлайн сеансов';
$string['offlinecomments'] = 'Комментарии пользователя';
$string['offlinecomments_help'] = 'Включить добавление текстовых комментариев к офлайн сеансам';
$string['offlinespecifycourse'] = 'Определить курс для офлайн сеансов';
$string['offlinespecifycourse_help'] = 'Предоставить пользователю возможность выбрать курс, к которому относится офлайн сеанс.<br />
Это имеет смысл только в том случае, если в реестре отслеживается более одного курса (т. е. режим активности — «Категория» или «Мета-связь»).';
$string['online'] = 'Онлайн';
$string['online_offline'] = 'Онлайн/Офлайн';
$string['online_session_updated'] = 'Онлайн сеансы обновлены';
$string['online_session_updated_report'] = 'Онлайн сеансы {$a->fullname} обновлены: новых - {$a->numnewsessions}';
$string['online_sessions_total_duration'] = 'Общее время онлайн сеансов';
$string['onlyrealusercanaddofflinesessions'] = 'Только сам пользователь может добавлять офлайн сеанс';
$string['onlyrealusercandeleteofflinesessions'] = 'Только сам пользователь может удалять офлайн сеансы';
$string['overlaps_current_session'] = 'Пересекается с текущим онлайн сеансом (с момента текущего входа)';
$string['overlaps_old_sessions'] = 'Пересекается с другим сеансом (онлайн или офлайн)';
$string['participants_attendance_report_viewed'] = 'Отчет по активности участников просмотрен';
$string['pluginadministration'] = 'Управление реестром активности';
$string['pluginname'] = 'Реестр активности';
$string['prev_site_login'] = 'Предыдущий вход на сайт';
$string['privacy:metadata:attendanceregister_aggregate'] = 'Отслеживает количество сеансов, объединенных по каждому пользователю.';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'Длительность сеанса';
$string['privacy:metadata:attendanceregister_aggregate:grandtotal'] = 'Итоговое общее время';
$string['privacy:metadata:attendanceregister_aggregate:lastsessionlogout'] = 'Выход пользователя из последнего сеанса, данные взяты из attendanceregister_session logout';
$string['privacy:metadata:attendanceregister_aggregate:onlinesess'] = 'Независимо от того, проходит ли сеанс в режиме онлайн или офлайн';
$string['privacy:metadata:attendanceregister_aggregate:refcourse'] = 'Курс, в рамках которого проводится офлайн занятие.';
$string['privacy:metadata:attendanceregister_aggregate:total'] = 'Общее время сеанса';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'ID пользователя';
$string['privacy:metadata:attendanceregister_lock'] = 'Блокируется на время расчета данных по реестру активности пользователя';
$string['privacy:metadata:attendanceregister_lock:userid'] = 'Для пересчёта реестра пользователя мы сохраняем идентификатор пользователя сеанса. Эти данные носят временный характер и удаляются после завершения пересчёта сеанса';
$string['privacy:metadata:attendanceregister_session'] = 'Отслеживать сеансы пользователей';
$string['privacy:metadata:attendanceregister_session:addedbyuserid'] = 'Если офлайн сеанс добавлен другим пользователем, то это ID соответствующего пользователя.';
$string['privacy:metadata:attendanceregister_session:comments'] = 'Комментарии к офлайн сеансам';
$string['privacy:metadata:attendanceregister_session:duration'] = 'Длительность сеанса';
$string['privacy:metadata:attendanceregister_session:login'] = 'Время входа';
$string['privacy:metadata:attendanceregister_session:logout'] = 'Время выхода';
$string['privacy:metadata:attendanceregister_session:onlinesess'] = 'Независимо от того, проходит ли сеанс в режиме онлайн или офлайн';
$string['privacy:metadata:attendanceregister_session:refcourse'] = 'Курс, к которому относится офлайн-сеанс';
$string['privacy:metadata:attendanceregister_session:userid'] = 'ID пользователя';
$string['recalc_already_pending'] = '(Уже запланировано для выполнения в следующий запуск Cron)';
$string['recalc_complete'] = 'Пересчёт сеансов завершен';
$string['recalc_scheduled'] = 'Пересчёт данных сеансов запланирован. Он будет выполнен при следующем запуске Cron';
$string['recalc_scheduled_on_next_cron'] = 'Пересчёт сеансов запланирован при следующем запуске Cron';
$string['ref_course'] = 'Справка курса';
$string['registername'] = 'Название реестра активности';
$string['registertype'] = 'Режим отслеживания активности';
$string['registertype_help'] = 'Параметр «Режим отслеживания активности» определяет, в каких курсах будет осуществляться отслеживание с помощью реестра активности (т. е. где будет отслеживаться активность пользователя):
* _Только этот курс_: только в том курсе, где установлен модуль «Реестр активности».
* _Все курсы в той же категории_: активность будет отслеживаться во всех курсах той же категории, где находится курс, в котором установлен модуль.
* _Все курсы, связанные мета-ссылкой курса_: активность будет отслеживаться в этом курсе и во всех курсах, связанных мета-ссылкой курса.';
$string['schedule_reclalc_all_session'] = 'Расписание пересчёта сеансов';
$string['select_a_course'] = '- Выберите курс -';
$string['select_a_course_if_any'] = '- Выбор курса, если имеется -';
$string['session_added_by_another_user'] = 'Добавлено: {$a}';
$string['sessions_grandtotal_duration'] = 'Итоговое общее время';
$string['sessiontimeout'] = 'Тайм-аут онлайн сеанса';
$string['sessiontimeout_help'] = 'Тайм-аут онлайн сеанса (время ожидания сеанса) используется для оценки продолжительности онлайн-сеансов.<br />
    Продолжительность онлайн-сеансов будет составлять не менее <b>половины</b> значения параметра «Тайм-аут онлайн сеанса».<br />
    Обратите внимание: если время ожидания сеанса слишком велико, система может завышать продолжительность онлайн-сеансов.<br />
    Если оно слишком коротко, реальные сеансы будут разбиваться на множество более коротких сеансов.<br />
    <h3>Подробное объяснение</h3>
    Продолжительность сеансов работы в режиме онлайн <b>оценивается</b> на основе записей в журнале пользователя в отслеживаемых курсах
    (см. <i>Режим отслеживания активности</i>).<br/>
    Если между двумя последовательными записями в журнале прошло меньше времени, чем время ожидания сеанса, то реестр считает, что пользователь продолжает работать в режиме онлайн (т. е. сеанс продолжается).<br />
    Если прошло больше времени, чем тайм-аут сеанса, система предполагает, что пользователь прекратил работу онлайн <b>на половину</b> тайм-аута сеанса после предыдущей записи в журнале (т. е. сеанс заканчивается) и вернулся снова при следующей записи в журнале (т. е. начинается новый сеанс).';
$string['show_my_sessions'] = 'Показать мои сеансы';
$string['show_printable'] = 'Показать версию для печати';
$string['standardlog_disabled'] = 'Стандартный журнал Moodle отключен. Сеансы новых пользователей не отслеживаются';
$string['standardlog_readonly'] = 'Стандартный журнал Moodle только для чтения. Сеансы новых пользователей не отслеживаются';
$string['start'] = 'Начало';
$string['total_time_offline'] = 'Общее время офлайн';
$string['total_time_online'] = 'Общее время онлайн';
$string['tracked_courses'] = 'Отслеживаемые курсы';
$string['tracked_users'] = 'Отслеживаемые пользователи';
$string['type_category'] = 'Все курсы в той же категории';
$string['type_course'] = 'Только этот курс';
$string['type_meta'] = 'Все курсы связанные мета-ссылкой курса.';
$string['unknown'] = '(неизвестно)';
$string['unreasoneable_session'] = 'Вы уверены? Длительность более {$a} час.';
$string['updating_online_sessions_of'] = 'Обновление онлайн-сеансов {$a}';
$string['user_attendance_addoffline'] = 'Пользователь добавляет запись об активности в  режиме офлайн';
$string['user_attendance_deloffline'] = 'Пользователь удаляет запись об активности в  режиме офлайн';
$string['user_attendance_details_viewed'] = 'Просмотрены данные об активности пользователей';
$string['user_sessions_summary'] = 'Обзор сеансов пользователей';
