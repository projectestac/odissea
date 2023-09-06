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
 * Strings for component 'debug', language 'ru', version '4.1'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Не найден плагин аутентификации «{$a}».';
$string['blocknotexist'] = 'Блок «{$a}» не существует';
$string['cannotbenull'] = '{$a} не может быть пустым!';
$string['cannotdowngrade'] = 'Невозможно откатить плагин «{$a->plugin}» с версии {$a->oldversion} до {$a->newversion}.';
$string['cannotfindadmin'] = 'Не удалось найти пользователя с правами администратора!';
$string['cannotinitpage'] = 'Невозможно полностью инициализировать страницу:
некорректно {$a->name} id {$a->id}';
$string['cannotsetuptable'] = 'НЕ удалось создать таблиц: {$a}!';
$string['codingerror'] = 'Обнаружена ошибка кодирования, она должна быть исправлена программистом: {$a}';
$string['configmoodle'] = 'Moodle еще не настроен. В первую очередь Вам необходимо отредактировать config.php.';
$string['debuginfo'] = 'Информация об отладке';
$string['erroroccur'] = 'Во время этого процесса произошла ошибка';
$string['invalidarraysize'] = 'Неправильный размер массивов в параметрах {$a}';
$string['invalideventdata'] = 'Представлены некорректные данные: {$a}';
$string['invalidparameter'] = 'Обнаружено неверное значение параметра.';
$string['invalidresponse'] = 'Обнаружено неверное значение ответа.';
$string['line'] = 'Строка';
$string['missingconfigversion'] = 'Таблица «config» не содержит версии. Продолжение невозможно.';
$string['modulenotexist'] = 'Модуль {$a} не существует';
$string['morethanonerecordinfetch'] = 'Найдено более одной записи в fetch()!';
$string['mustbeoveride'] = 'Абстрактный метод «{$a}» должен быть переопределен.';
$string['noadminrole'] = 'Не удалось найти роль администратора';
$string['noblocks'] = 'Ни один блок не установлен!';
$string['nocate'] = 'Нет категории!';
$string['nomodules'] = 'Не найдено ни одного модуля!!';
$string['nopageclass'] = 'Импортировано {$a}, но не найдены классы страницы';
$string['noreports'] = 'Не доступен ни один отчет';
$string['notables'] = 'Нет таблиц!';
$string['outputbuffer'] = 'Выходной буфер';
$string['phpvaroff'] = 'Переменная PHP-сервера «{$a->name}» должна быть установлена в Off - {$a->link}';
$string['phpvaron'] = 'Переменная PHP-сервера «{$a->name}» не установлена в On - {$a->link}';
$string['reactive_highlightoff'] = 'Выделение ВЫКЛ';
$string['reactive_highlighton'] = 'Выделение ВКЛ';
$string['reactive_instances'] = 'Противодействующие экземпляры:';
$string['reactive_noinstances'] = 'На этой странице нет противодействующих экземпляров.';
$string['reactive_pin'] = 'Закрепить';
$string['reactive_readmodeoff'] = 'Режим чтения ВЫКЛ';
$string['reactive_readmodeon'] = 'Режим чтения ВКЛ';
$string['reactive_resetpanel'] = 'Сбросить панель';
$string['reactive_saveingwarning'] = 'Предупреждение: изменение состояния может привести к неожиданным результатам.';
$string['reactive_statedata'] = 'Данные состояния';
$string['reactive_unpin'] = 'Открепить';
$string['sessionmissing'] = 'Отсутствует объект сессии «{$a}»';
$string['sqlrelyonobsoletetable'] = 'В этом SQL используются устаревшие таблицы: {$a}! Ваш программный код должен быть исправлен разработчиком.';
$string['stacktrace'] = 'Трассировки стека';
$string['withoutversion'] = 'Главный файл version.php отсутствует, не доступен для чтения или испорчен.';
$string['xmlizeunavailable'] = 'Недоступны функции xmlize';
