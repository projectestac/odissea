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
 * Strings for component 'enrol_manual', language 'uk', version '4.1'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Розширений';
$string['alterstatus'] = 'Змінити статус';
$string['altertimeend'] = 'Змінити час відрахування';
$string['altertimestart'] = 'Змінити час зарахування';
$string['assignrole'] = 'Призначення ролі';
$string['assignroles'] = 'Призначити роль';
$string['browsecohorts'] = 'Переглянути гурти';
$string['browseusers'] = 'Переглянути користувачів';
$string['confirmbulkdeleteenrolment'] = 'Ви впевнені, що хочете видалити ці реєстрації користувачів?';
$string['defaultperiod'] = 'Типовий термін навчання';
$string['defaultperiod_desc'] = 'Налаштування типового періоду перебування на курсі (в секундах). Якщо встановлено в нуль, то термін не обмежується.';
$string['defaultperiod_help'] = 'Типовий період часу, впродовж якого реєстрація є дійсною з моменту запису студента на курс. Якщо вимкнуто (заборонено), то цей період буде необмеженим.';
$string['defaultstart'] = 'Типовий початок зарахування';
$string['deleteselectedusers'] = 'Видалити зарахування для виділених користувачів';
$string['editselectedusers'] = 'Редагувати зарахування виділених користувачів';
$string['enrolledincourserole'] = 'Зараховано в "{$a->course}" як "{$a->role}"';
$string['enrolusers'] = 'Зарахувати користувачів';
$string['enroluserscohorts'] = 'Записати обраних користувачів і глобальні групи';
$string['expiredaction'] = 'Дія закінчення реєстрації';
$string['expiredaction_help'] = 'Виберіть дію, яку потрібно виконати, коли термін реєстрації користувача спливає. Будь ласка, зверніть увагу, що деякі дані та налаштування користувача на курсі будуть також очищені під час відрахування.';
$string['expirymessageenrolledbody'] = 'Шановний,  {$a->user}.

Цим повідомляємо Вас, що термін Вашої реєстрації на курсі \'{$a->course}\' спливає {$a->timeend}.

З усіма питаннями стосовно цього можете звертатися до  {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Повідомлення про закінчення терміну зарахування';
$string['expirymessageenrollerbody'] = 'В найближчі  {$a->threshold} днів закінчується термін перебування (зареєстрованим) на курсі  \'{$a->course}\' для таких користувачів: {$a->users}

Для продовження терміну реєстрації для вказаних користувачів, перейдіть до  {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Повідомлення про закінчення терміну зарахування';
$string['managemanualenrolements'] = 'Керуйте реєстрацією вручну';
$string['manual:config'] = 'Налаштовувати варіант ручного зарахування';
$string['manual:enrol'] = 'Зараховувати користувачів';
$string['manual:manage'] = 'Управляти зарахуваннями користувачів';
$string['manual:unenrol'] = 'Відраховувати користувачів з курсу';
$string['manual:unenrolself'] = 'Відраховувати себе з курсу';
$string['manualpluginnotinstalled'] = 'Модуль ручного зарахування ще не встановлено';
$string['messageprovider:expiry_notification'] = 'Повідомлення про закінчення терміну ручного зарахування';
$string['now'] = 'Зараз';
$string['pluginname'] = 'Ручне зарахування';
$string['pluginname_desc'] = 'Модуль ручного зарахування дозволяє вручну зараховувати користувачів через керування курсом. Така можливість є у інших користувачів з відповідними правами, наприклад, викладачів. Цей модуль, як правило, повинен бути включеним, оскільки деякі інші плагіни реєстрації, такі як самореєстрація, потребують його.';
$string['privacy:metadata'] = 'Плагін Ручна реєстрація не зберігає жодних особистих даних.';
$string['selectcohorts'] = 'Виберіть глобальні групи';
$string['selection'] = 'Відбір';
$string['selectusers'] = 'Вибрати користувачів';
$string['sendexpirynotificationstask'] = 'Завдання надсилання сповіщень про закінчення терміну дії реєстрації вручну';
$string['status'] = 'Дозволити зарахування вручну';
$string['status_desc'] = 'Дозволяє надання доступу до курсу зарахованим користувачам. Повинен бути дозволеним у більшості випадків.';
$string['status_help'] = 'Це налаштування визначає, чи можуть користувачі бути зарахованими вручну через керування курсом. Така можливість є у інших користувачів з відповідними правами, наприклад, викладачів.';
$string['statusdisabled'] = 'Відключено';
$string['statusenabled'] = 'Включено';
$string['syncenrolmentstask'] = 'Синхронізувати завдання реєстрації вручну';
$string['unenrol'] = 'Відрахувати користувача';
$string['unenrolselectedusers'] = 'Відрахувати виділених користувачів';
$string['unenrolselfconfirm'] = 'Ви дійсно бажаєте відрахуватися з курсу "{$a}"?';
$string['unenroluser'] = 'Ви дійсно хочете відрахувати "{$a->user}" з курсу "{$a->course}"?';
$string['unenrolusers'] = 'Відрахувати користувачів';
$string['wscannotenrol'] = 'Екземпляр модуля не може вручну зарахувати користувача на курс з ідентифікатором = {$a->courseid}';
$string['wsnoinstance'] = 'Екземпляр модуля ручної реєстрації не створено або відключено на курсі (ідентифікатор = {$a->courseid})';
$string['wsusercannotassign'] = 'You don\'t have the permission to assign this role ({$a->roleid}) to this user ({$a->userid}) in this course ({$a->courseid}).';
