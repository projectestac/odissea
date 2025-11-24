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
 * Strings for component 'tool_moodlenet', language 'uk', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Додавання вмісту з MoodleNet';
$string['aria:enterprofile'] = 'Введіть ідентифікатор свого профілю MoodleNet';
$string['aria:footermessage'] = 'Перегляньте вміст на MoodleNet';
$string['autoenablenotification'] = '<p>У Moodle 4.0 і вище інтеграція <a href="https://moodle.net/">MoodleNet</a> увімкнена за замовчуванням у Розширених функціях. Користувачі, які мають можливість створювати дії та керувати ними, можуть переглядати MoodleNet за допомогою вибору активності та імпортувати ресурси MoodleNet у свої курси.</p><p>За бажанням можна вказати альтернативний екземпляр MoodleNet у <a href="{$ a->settingslink}">Вхідні налаштування MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Налаштування MoodleNet за замовчуванням змінено.';
$string['browsecontentmoodlenet'] = 'Or browse for content on MoodleNet';
$string['clearsearch'] = 'Очистити пошук';
$string['connectandbrowse'] = 'Підключіться та перегляньте:';
$string['defaultmoodlenet'] = 'URL-адреса MoodleNet';
$string['defaultmoodlenet_desc'] = 'URL-адреса екземпляра MoodleNet доступна через засіб вибору активності.';
$string['defaultmoodlenetname'] = 'Назва екземпляра MoodleNet';
$string['defaultmoodlenetname_desc'] = 'Ім\'я екземпляра MoodleNet, доступного через засіб вибору активності.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Увімкнути інтеграцію MoodleNet (вхідна)';
$string['enablemoodlenet_desc'] = 'Якщо ввімкнено, користувач, який має можливість створювати дії та керувати ними, може переглядати MoodleNet за допомогою засобу вибору діяльності та імпортувати ресурси MoodleNet у свій курс. Крім того, користувач, який має можливість відновлювати резервні копії, може вибрати файл резервної копії на MoodleNet і відновити його в Moodle.';
$string['errorduringdownload'] = 'Під час завантаження файлу сталася помилка: {$a}';
$string['footermessage'] = 'Або перегляньте вміст на';
$string['forminfo'] = 'Ваш ідентифікатор профілю MoodleNet буде автоматично збережено у вашому профілі на цьому сайті.';
$string['importconfirm'] = 'Ви збираєтеся імпортувати вміст "{$a->resourcename} ({$a->resourcetype})" до курсу "{$a->coursename}". Ви впевнені, що хочете продовжити?';
$string['importconfirmnocourse'] = 'Ви збираєтеся імпортувати вміст "{$a->resourcename} ({$a->resourcetype})" на свій сайт. Ви впевнені, що хочете продовжити?';
$string['importformatselectguidingtext'] = 'У якому форматі ви хотіли б додати вміст "{$a->name} ({$a->type})" до вашого курсу?';
$string['importformatselectheader'] = 'Виберіть формат відображення вмісту';
$string['inputhelp'] = 'Або якщо у вас уже є обліковий запис MoodleNet, скопіюйте ідентифікатор зі свого профілю MoodleNet і вставте його сюди:';
$string['instancedescription'] = 'MoodleNet – це відкрита соціальна медіа-платформа для викладачів, зосереджена на спільній роботі над колекціями відкритих ресурсів.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile неправильно відформатовано';
$string['missinginvalidpostdata'] = 'Якщо це трапляється неодноразово, зверніться до адміністратора сайту.';
$string['mnetprofile'] = 'Профіль MoodleNet';
$string['mnetprofiledesc'] = 'Введіть тут дані свого профілю MoodleNet, щоб під час відвідування MoodleNet вас перенаправили до вашого профілю.';
$string['moodlenetnotenabled'] = 'Інтеграція MoodleNet має бути увімкнена в адмініструванні сайту/MoodleNet, перш ніж можна буде обробляти імпорт ресурсів.';
$string['moodlenetsettings'] = 'Вхідні налаштування MoodleNet';
$string['notification'] = 'Ви збираєтеся імпортувати вміст "{$a->name} ({$a->type})" на свій сайт. Виберіть курс, до якого його потрібно додати, або <a href="{$a->cancelllink}">скасуйте</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Інструмент MoodleNet лише полегшує спілкування з MoodleNet. Він не зберігає дані.';
$string['profilevalidationerror'] = 'Виникла проблема при спробі перевірити ідентифікатор вашого профілю MoodleNet';
$string['profilevalidationfail'] = 'Введіть дійсний ідентифікатор профілю MoodleNet';
$string['profilevalidationpass'] = 'Виглядає чудово!';
$string['removedmnetprofilenotification'] = 'У зв’язку з останніми змінами на платформі MoodleNet, будь-яким користувачам, які раніше зберегли свій ідентифікатор профілю MoodleNet на сайті, потрібно буде ввести ідентифікатор профілю MoodleNet у новому форматі, щоб пройти автентифікацію на платформі MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Зміна формату ідентифікатора профілю MoodleNet';
$string['saveandgo'] = 'Збережіть і йдіть';
$string['searchcourses'] = 'Пошук курсів';
$string['selectpagetitle'] = 'Виберіть сторінку';
$string['uploadlimitexceeded'] = 'Розмір файлу {$a->filesize} перевищує ліміт завантаження користувача в {$a->uploadlimit} байт.';
