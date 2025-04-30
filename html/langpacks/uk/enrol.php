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
 * Strings for component 'enrol', language 'uk', version '4.4'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Доступні в курсі модулі реєстрації';
$string['addinstance'] = 'Додати спосіб';
$string['addinstanceanother'] = 'Додати спосіб та створити ще';
$string['ajaxnext25'] = 'Наступні 25...';
$string['ajaxoneuserfound'] = 'Знайдено 1-го користувача';
$string['ajaxxmoreusersfound'] = 'Знайдено більше ніж {$a} користувачів';
$string['ajaxxusersfound'] = 'Знайдено користувачів: {$a}';
$string['assignnotpermitted'] = 'Ви не маєте відповідних прав або на курсі не можна призначати ролі.';
$string['bulkuseroperation'] = 'Гуртові операції з користувачами';
$string['configenrolplugins'] = 'Будь ласка, виберіть всі необхідні модулі та та розташуйте їх у порядку значимості.';
$string['custominstancename'] = 'Назва способу';
$string['customwelcomemessage'] = 'Текст запрошення на курс';
$string['customwelcomemessage_help'] = 'Привітальне повідомлення може бути доданим як простий текст, або автоформатом, включаючи HTML-теги та теги багатомовності.

Наступні заповнювачі можуть бути включені в повідомлення:

* Назва курсу {$ -> coursename}
* Посилання на сторінку профілю користувача {$ -> profileurl}
* Ел.пошта користувача {$a->email}
* Повне ім’я користувача {$a->fullname}';
$string['defaultenrol'] = 'Додати цей спосіб для нових курсів';
$string['defaultenrol_desc'] = 'Можна додати цей спосіб як типовий для всіх нових курсів';
$string['deleteinstanceconfirm'] = 'Ви хочете видалити модуль реєстрації "{$a->name}".  Всі користувачі, записані на курс цим способом ({$a->users}), будуть відраховані та всі їх дані (оцінки, членство в групах, повідомлення на форумах) будуть вилучені.

Ви впевнені, що бажаєте продовжувати?';
$string['deleteinstanceconfirmself'] = 'Ви справді хочете вилучити спосіб "{$a->name}", який надає вам особисто доступ до курсу? Ви можете втратити можливість доступу до цього курсу.';
$string['deleteinstancenousersconfirm'] = 'Ви збираєтеся видалити спосіб запису на курс  "{$a->name}". Ви впевнені, що хочете продовжити?';
$string['disableinstanceconfirmself'] = 'Ви справді хочете відключити спосіб "{$a->name}", який надає вам особисто доступ до курсу? Ви можете втратити можливість доступу до цього курсу.';
$string['durationdays'] = '{$a} днів';
$string['editenrolment'] = 'Редагувати';
$string['edituserenrolment'] = 'Редагувати реєстрацію {$a}';
$string['enrol'] = 'Зарахувати';
$string['enrolcandidates'] = 'Не зараховані користувачі';
$string['enrolcandidatesmatching'] = 'Відповідні не зараховані користувачі';
$string['enrolcohort'] = 'Зарахувати гурт';
$string['enrolcohortusers'] = 'Зарахувати користувачів';
$string['enroldetails'] = 'Деталі реєстрації';
$string['enrollednewusers'] = 'Успішно зараховано {$a} нових користувачів';
$string['enrolledusers'] = 'Зараховані користувачі';
$string['enrolledusersmatching'] = 'Відповідні зараховані користувачі';
$string['enrolme'] = 'Зарахувати мене на цей курс';
$string['enrolment'] = 'Зарахування';
$string['enrolmentinstances'] = 'Способи зарахування';
$string['enrolmentmethod'] = 'Метод зарахування';
$string['enrolmentnew'] = 'Нові заявки на участь у {$a}';
$string['enrolmentnewuser'] = '{$a->user} зараховано на курс "{$a->course}"';
$string['enrolmentoptions'] = 'Опції зарахування';
$string['enrolments'] = 'Зарахування';
$string['enrolmentupdatedforuser'] = 'Реєстрацію для користувача "{$a->fullname}" оновлено';
$string['enrolnotpermitted'] = 'Ви не маєте відповідних прав або на курсі не можна нікого зараховувати.';
$string['enrolperiod'] = 'Термін навчання';
$string['enroltimecreated'] = 'Зарахований';
$string['enroltimeend'] = 'Закінчення зарахування';
$string['enroltimeendinvalid'] = 'Дата закінчення реєстрації повинна бути після дати початку реєстрації';
$string['enroltimestart'] = 'Початок зарахування';
$string['enrolusage'] = 'Курсів / Учасників';
$string['enrolusers'] = 'Зарахувати користувачів';
$string['enrolxusers'] = 'Зарахувати {$a} користувача(ів)';
$string['errajaxfailedenrol'] = 'Не вдалося зареєструвати користувача';
$string['errajaxsearch'] = 'Помилка пошуку користувачів';
$string['erroreditenrolment'] = 'Сталася помилка при спробі відредагувати реєстрацію користувачів';
$string['errorenrolcohort'] = 'Помилка реєстрації та синхронізації гурту на курсі.';
$string['errorenrolcohortusers'] = 'Помилка реєстрації гурту на курсі.';
$string['errorthresholdlow'] = 'Граничний термін повідомлення має бути не менше ніж 1 день.';
$string['errorwithbulkoperation'] = 'Виникла помилка в процесі гуртового редагування зарахувань.';
$string['eventenrolinstancecreated'] = 'Створено спосіб зарахування на курс';
$string['eventenrolinstancedeleted'] = 'Вилучено спосіб зарахування на курс';
$string['eventenrolinstanceupdated'] = 'Оновлено спосіб зарахування на курс';
$string['eventuserenrolmentcreated'] = 'Користувача зараховано на курс';
$string['eventuserenrolmentdeleted'] = 'Користувача відраховано з курсу';
$string['eventuserenrolmentupdated'] = 'Реєстрацію користувачів оновлено';
$string['expirynotify'] = 'Повідомляти про завершення терміну знаходження на курсі';
$string['expirynotify_help'] = 'Цей параметр визначає, чи буде надсилатися повідомлення про закінчення строку зарахування.';
$string['expirynotifyall'] = 'Викладача та студента';
$string['expirynotifyenroller'] = 'Тільки викладача';
$string['expirynotifyhour'] = 'Час відправки повідомлення про закінчення терміну зарахування';
$string['expirythreshold'] = 'Граничний термін повідомлення';
$string['expirythreshold_help'] = 'За скільки часу повідомляти користувача про закінчення строку зарахування.';
$string['extremovedaction'] = 'Дія при відрахуванні із зовнішнього джерела';
$string['extremovedaction_help'] = 'Виберіть потрібну дію у випадку видалення зарахованого на курс користувача із зовнішнього місця зарахування.Зверніть увагу, що деякі дані та налаштування користувача видаляться під час відрахування з курсу.';
$string['extremovedkeep'] = 'Залишити користувача зарахованим';
$string['extremovedsuspend'] = 'Вимкнути реєстрацію курсу';
$string['extremovedsuspendnoroles'] = 'Вимкнути реєстрацію курсу, видалити ролі';
$string['extremovedunenrol'] = 'Відрахувати користувачів з курсу';
$string['finishenrollingusers'] = 'Закінчити зарахування користувачів';
$string['foundxcohorts'] = 'Знайдено {$a} гурт(ів)';
$string['instanceadded'] = 'Спосіб додано';
$string['instanceeditselfwarning'] = 'Попередження:';
$string['instanceeditselfwarningtext'] = 'Вас зараховано на цей курс з використанням саме цього способу, зміни можуть вплинути на ваш доступ до цього курсу.';
$string['invalidenrolduration'] = 'Недійсна тривалість реєстрації';
$string['invalidenrolinstance'] = 'Неправильна реєстрація';
$string['invalidrequest'] = 'Невірний запит';
$string['invalidrole'] = 'Неправильна роль';
$string['manageenrols'] = 'Управління модулями зарахування';
$string['manageinstance'] = 'Керувати';
$string['method'] = 'Метод';
$string['migratetomanual'] = 'Перейти на ручне зарахування';
$string['nochange'] = 'Немає змін';
$string['noexistingparticipants'] = 'Немає учасників';
$string['nogroup'] = 'Немає групи';
$string['noguestaccess'] = 'Гості не можуть отримати доступ до цього курсу. Будь ласка, увійдіть.';
$string['none'] = 'Нічого';
$string['notenrollable'] = 'Ви не можете записатися на цей курс.';
$string['notenrolledusers'] = 'Інші користувачі';
$string['otheruserdesc'] = 'Наступні користувачі не зараховані на цьому курсі, але мають ролі, успадковані чи призначені у ньому.';
$string['participationactive'] = 'Активний';
$string['participationnotcurrent'] = 'Не поточний';
$string['participationstatus'] = 'Статус';
$string['participationsuspended'] = 'Заблокований';
$string['periodend'] = 'до {$a}';
$string['periodnone'] = 'зараховано {$a}';
$string['periodstart'] = 'з {$a}';
$string['periodstartend'] = 'з {$a->start} до {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Зарахування';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Екземпляр плагіна для реєстрації';
$string['privacy:metadata:user_enrolments:modifierid'] = 'Ідентифікатор користувача, який востаннє змінив реєстрацію користувача';
$string['privacy:metadata:user_enrolments:status'] = 'Статус реєстрації користувача на курсі';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Основний плагін реєстрації зберігає зареєстрованих користувачів.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Час створення реєстрації користувача';
$string['privacy:metadata:user_enrolments:timeend'] = 'Час, коли реєстрація користувача закінчується';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Час, коли реєстрація користувача була змінена';
$string['privacy:metadata:user_enrolments:timestart'] = 'Час, коли починається реєстрація користувача';
$string['privacy:metadata:user_enrolments:userid'] = 'Ідентифікатор користувача';
$string['recovergrades'] = 'Відновити попередні оцінки (при можливості)';
$string['rolefromcategory'] = '{$a->role} (Успадковано з категорії курсу)';
$string['rolefrommetacourse'] = '{$a->role} (Успадковано з батьківського курсу)';
$string['rolefromsystem'] = '{$a->role} (Призначено на рівні сайту)';
$string['rolefromthiscourse'] = '{$a->role} (призначено в цьому курсі)';
$string['sendfromcoursecontact'] = 'Контакт з курсу';
$string['sendfromkeyholder'] = 'Від власника ключа';
$string['sendfromnoreply'] = 'З адреси, на яку немає відповіді';
$string['startdatetoday'] = 'Сьогодні';
$string['synced'] = 'Синхронізовано';
$string['testsettings'] = 'Перевірити налаштування';
$string['testsettingsheading'] = 'Перевірка налаштування зарахування - {$a}';
$string['timeended'] = 'Час закінчився';
$string['timeenrolled'] = 'Час реєстрації';
$string['timereaggregated'] = 'Час повторно агрегований';
$string['timestarted'] = 'Час почався';
$string['totalenrolledusers'] = '{$a} зарахованих користувачів';
$string['totalotherusers'] = '{$a} іншіх користувачів';
$string['totalunenrolledusers'] = 'Незареєстрованих користувачів: {$a}';
$string['unassignnotpermitted'] = 'У вас немає дозволу, щоб скасувати призначення ролей у цьому курсі';
$string['unenrol'] = 'Відрахувати';
$string['unenrolconfirm'] = 'Ви дійсно хочете скасувати реєстрацію "{$a->user}" (раніше зареєстрованого через "{$a->enrolinstancename}") з "{$a->course}"?';
$string['unenrolleduser'] = 'Користувача "{$a->fullname}" було відраховано з курсу';
$string['unenrolme'] = 'Відписати мене від цього курсу';
$string['unenrolnotpermitted'] = 'Ви не маєте дозволу скасувати реєстрацію цього користувача на курсі.';
$string['unenrolroleusers'] = 'Відрахувати користувачів';
$string['uninstallmigrating'] = 'Збережено зарахованих - "{$a}"';
$string['unknowajaxaction'] = 'Викликана невідома дія';
$string['unlimitedduration'] = 'Необмежено';
$string['userremovedfromselectiona'] = 'Користувача "{$a}" було вилучено з вибраного.';
$string['usersearch'] = 'Пошук';
$string['withselectedusers'] = 'Відмічених користувачів';
$string['youenrolledincourse'] = 'Ви зараховані на курс.';
$string['youunenrolledfromcourse'] = 'Вас відрахували з курсу "{$a}".';
