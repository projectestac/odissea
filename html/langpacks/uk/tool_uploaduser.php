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
 * Strings for component 'tool_uploaduser', language 'uk', version '4.4'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Дозволити видалення';
$string['allowrenames'] = 'Дозволити перейменування';
$string['allowsuspends'] = 'Дозволити призупинення та активацію облікових записів';
$string['assignedsysrole'] = 'Призначено системну роль {$a}';
$string['clidefault'] = 'За замовчуванням:';
$string['clierrorargument'] = 'Значення аргументу --{$a->name} недійсне. Дозволені значення: {$a->values}';
$string['clifile'] = 'Шлях до файлу CSV з даними користувача. Вимагається.';
$string['clifilenotreadable'] = 'Файл {$a} не існує або його неможливо читати';
$string['clihelp'] = 'Роздрукуйте цю довідку.';
$string['climissingargument'] = 'Аргумент --{$a} є обов\'язковим';
$string['clititle'] = 'Командний рядок Завантажити інструмент користувача.';
$string['clivalidationerror'] = 'Помилка перевірки:';
$string['csvdelimiter'] = 'CSV розділювач';
$string['defaultvalues'] = 'Типові значення';
$string['deleteerrors'] = 'Помилки видалення';
$string['duplicateemail'] = 'Виявлено кількох користувачів із електронною адресою {$a}';
$string['encoding'] = 'Кодування';
$string['errormnetadd'] = 'Не вдається додати зовнішнього користувача';
$string['errorprefix'] = 'Помилка:';
$string['errors'] = 'Помилки';
$string['examplecsv'] = 'Приклад текстового файлу';
$string['examplecsv_help'] = 'Щоб використати приклад текстового файлу, завантажте його, а потім відкрийте за допомогою текстового редактора або редактора електронних таблиць. Залиште перший рядок без змін, а потім відредагуйте наступні рядки (записи) і додайте свої дані користувача, додаючи більше рядків за потреби. Збережіть файл у форматі CSV, а потім завантажте його.

Приклад текстового файлу також можна використовувати для тестування, оскільки ви можете попередньо переглянути дані користувача та скасувати дію до створення облікових записів користувачів.';
$string['infoprefix'] = 'Інформація:';
$string['invalidtheme'] = 'Тема "{$a}" не встановлена і буде ігнорована.';
$string['invalidupdatetype'] = 'Цей параметр не можна вибрати для вибраного типу завантаження.';
$string['invaliduserdata'] = 'Виявлено некоректні дані для користувача {$a}, які було автоматично очищено.';
$string['linex'] = 'Рядок {$a}';
$string['matchemail'] = 'Збіг за електронною адресою';
$string['nochanges'] = 'Без змін';
$string['notheme'] = 'Для цього користувача не визначено жодної теми.';
$string['pluginname'] = 'Завантаження користувачів';
$string['privacy:metadata'] = 'Плагін завантаження користувача не зберігає жодних персональних даних.';
$string['renameerrors'] = 'Помилки в перейменуванні';
$string['requiredtemplate'] = 'Важливо. Ви можете тут використовувати шаблони (%%l = lastname, %%f = firstname, %%u = username). Дивіться допомогу для деталей та прикладів.';
$string['rowpreviewnum'] = 'Переглянути рядки';
$string['unassignedsysrole'] = 'Знято системну роль {$a}';
$string['uploadpicture_baduserfield'] = 'Не дійсна специфікація атрибуту. Спробуйте ще раз.';
$string['uploadpicture_cannotmovezip'] = 'Не вдається перемістити zip файл до тимчасового каталогу.';
$string['uploadpicture_cannotprocessdir'] = 'Не вдається розпакувати файли.';
$string['uploadpicture_cannotsave'] = 'Не вдається зберегти картинку користувача {$a}. Перевірте правильність файлу.';
$string['uploadpicture_cannotunzip'] = 'Не вдається розархівувати файл картинок.';
$string['uploadpicture_invalidfilename'] = 'Файл {$a} містить неприпустимі символи в назві. Пропущено.';
$string['uploadpicture_overwrite'] = 'Замінити існуючі картинки?';
$string['uploadpicture_userfield'] = 'Атрибут користувача для використання з картинками:';
$string['uploadpicture_usernotfound'] = 'Користувач з значенням \'{$a->uservalue}\' атрибуту \'{$a->userfield}\' не створений. Пропущено.';
$string['uploadpicture_userskipped'] = 'Пропускається користувач {$a} (вже має картинку).';
$string['uploadpicture_userupdated'] = 'Картинка оновлена для користувача {$a}.';
$string['uploadpictures'] = 'Завантаження картинок користувачів';
$string['uploadpictures_help'] = 'Картинки користувачів можуть бути завантажені як zip-архів. Файли картинок повинні мати назви вибраний_атрибут_користувача.розширення, наприклад, user1234.jpg для користувача з псевдоім’ям user1234.';
$string['uploaduser:uploaduserpictures'] = 'Завантажувати фото користувачів';
$string['uploadusers'] = 'Завантажити користувачів';
$string['uploadusers_help'] = 'Користувачі можуть бути завантажені (і за бажанням зараховані на курси) за допомогою текстового файлу. Формат файлу має бути таким:

* Кожен рядок файлу містить один запис
* Кожен запис являє собою ряд даних, розділених вибраним роздільником
* Перший запис містить список імен полів, що визначають формат решти файлу
* Обов\'язкові імена полів: ім\'я користувача, пароль, ім\'я, прізвище, електронна адреса';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Попередній перегляд завантажених користувачів';
$string['uploadusersresult'] = 'Результати завантаження користувачів';
$string['useraccountupdated'] = 'Користувача оновлено';
$string['useraccountuptodate'] = 'Користувач актуальний';
$string['userdeleted'] = 'Користувача видалено';
$string['userrenamed'] = 'Користувача перейменовано';
$string['userscreated'] = 'Користувачів створено';
$string['usersdeleted'] = 'Користувачів видалено';
$string['usersrenamed'] = 'Користувачів перейменовано';
$string['usersskipped'] = 'Користувачів пропущено';
$string['usersupdated'] = 'Користувачів оновлено';
$string['usersweakpassword'] = 'Користувачі, які мають слабий пароль';
$string['userthemesnotallowed'] = 'Теми користувачів не ввімкнено, тому будь-яка інформація, включена до завантаженого файлу користувачів, ігноруватиметься.';
$string['uubulk'] = 'Вибір для гуртових операцій';
$string['uubulkall'] = 'Всі користувачі';
$string['uubulknew'] = 'Нові користувачі';
$string['uubulkupdated'] = 'Оновлені користувачі';
$string['uucsvline'] = 'рядок CSV';
$string['uulegacy1role'] = '(Студент) typeN=1';
$string['uulegacy2role'] = '(Викладач) typeN=2';
$string['uulegacy3role'] = '(Асистент) typeN=3';
$string['uunoemailduplicates'] = 'Запобігти дублікатам адрес ел.пошти';
$string['uuoptype'] = 'Тип завантаження';
$string['uuoptype_addinc'] = 'Додати всіх, додаючи номер до псевдо користувачів, якщо потрібно';
$string['uuoptype_addnew'] = 'Додати тільки нових, пропускаючи існуючих користувачів';
$string['uuoptype_addupdate'] = 'Додати нових та оновити існуючих користувачів';
$string['uuoptype_update'] = 'Тільки оновити існуючих користувачів';
$string['uupasswordcron'] = 'Створено в cron';
$string['uupasswordnew'] = 'Пароль нового користувача';
$string['uupasswordold'] = 'Пароль існуючого користувача';
$string['uustandardusernames'] = 'Стандартизація псевдоімен';
$string['uuupdateall'] = 'Переписати з файлу та типові налаштування';
$string['uuupdatefromfile'] = 'Переписати з файлу';
$string['uuupdatemissing'] = 'Заповнити відсутнє з файлу або типовим';
$string['uuupdatetype'] = 'Деталі існуючих користувачів';
$string['uuusernametemplate'] = 'Шаблон псевдоімені';
$string['warningprefix'] = 'Увага:';
