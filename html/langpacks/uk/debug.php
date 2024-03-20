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
 * Strings for component 'debug', language 'uk', version '4.1'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Не знайдено модуль аутентифікації {$a} .';
$string['blocknotexist'] = '{$a} блоку не існує';
$string['cannotbenull'] = '{$a} не може бути нульовим!';
$string['cannotdowngrade'] = 'Не можна понизити {$a->plugin} з {$a->oldversion} до {$a->newversion}.';
$string['cannotfindadmin'] = 'Не вдалося знайти користувача з правами адміністратора!';
$string['cannotinitpage'] = 'Неповна ініціалізація сторінки: неправильні {$a->name} код {$a->id}';
$string['cannotsetuptable'] = 'Не вдалося успішно створити таблицю {$a} !';
$string['codingerror'] = 'Виявлена помилка кодування, це повинно бути виправлено програмістом: {$a}';
$string['configmoodle'] = 'Moodle ще не налаштовано. Вам потрібно спочатку відредагувати config.php.';
$string['debuginfo'] = 'Інформація про налагодження';
$string['erroroccur'] = 'Сталася помилка під час цього процесу';
$string['invalidarraysize'] = 'Неправильний розмір масиву в параметрах {$a}';
$string['invalideventdata'] = 'Надіслано неправильні дані про подію: {$a}';
$string['invalidparameter'] = 'Виявлено неправильне значення параметру';
$string['invalidresponse'] = 'Виявлено неправильне значення відповіді';
$string['line'] = 'Лінія';
$string['missingconfigversion'] = 'Таблиця конфігурації не містить версії. Ви не можете продовжувати.';
$string['modulenotexist'] = '{$a} модуля не існує';
$string['morethanonerecordinfetch'] = 'Знайдено більше одного запису у fetch() !';
$string['mustbeoveride'] = 'Анотація {$a} методу повинна бути перевантажена.';
$string['noadminrole'] = 'Не вдалося знайти роль адміністратора';
$string['noblocks'] = 'Блоки не встановлені!';
$string['nocate'] = 'Немає категорій!';
$string['nomodules'] = 'Жодного модуля не знайдено!';
$string['nopageclass'] = 'Імпортовано {$a}, але не знайдено сторінку класів';
$string['noreports'] = 'Немає доступних звітів';
$string['notables'] = 'Немає таблиць!';
$string['outputbuffer'] = 'Буфер виведення';
$string['phpvaroff'] = 'РНР змінна \'{$a->name}\' повинна бути відключена (Off) - {$a->link}';
$string['phpvaron'] = 'РНР змінна \'{$a->name}\' не включена (On) - {$a->link}';
$string['reactive_highlightoff'] = 'Виділення вимкнено';
$string['reactive_highlighton'] = 'Виділення ввімкнено';
$string['reactive_instances'] = 'Реактивні екземпляри:';
$string['reactive_noinstances'] = 'На цій сторінці немає реактивних екземплярів.';
$string['reactive_pin'] = 'Закріпити';
$string['reactive_readmodeoff'] = 'Режим читання вимкнено';
$string['reactive_readmodeon'] = 'Режим читання ввімкнено';
$string['reactive_resetpanel'] = 'Панель скидання';
$string['reactive_saveingwarning'] = 'Попередження: Редагування може призвести до несподіваних результатів.';
$string['reactive_statedata'] = 'Державні дані';
$string['reactive_unpin'] = 'Відкріпити';
$string['sessionmissing'] = 'об’єкт {$a} відсутній в сесії';
$string['sqlrelyonobsoletetable'] = 'Цей SQL базується на застарілій таблиці(ях): {$a}! Цей код повинен бути виправлений розробником.';
$string['stacktrace'] = 'Трасування стека';
$string['withoutversion'] = 'Відсутній головний файл version.php, нечитабельний або битий.';
$string['xmlizeunavailable'] = 'xmlize функції недоступні';
