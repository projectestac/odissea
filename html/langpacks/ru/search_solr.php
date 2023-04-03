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
 * Strings for component 'search_solr', language 'ru', version '3.11'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Указанный сервер Solr не доступен или указанный индекс не существует';
$string['connectionsettings'] = 'Настройки соединения';
$string['errorcreatingschema'] = 'Ошибка создания схемы Solr: {$a}';
$string['errorsolr'] = 'Поисковая система Solr сообщила об ошибке: {$a}';
$string['errorvalidatingschema'] = 'Ошибка проверки схемы Solr: поле {$a->fieldname} не существует. Пожалуйста, <a href="{$a->setupurl}">пройдите по этой ссылке</a>, чтобы настроить обязательные поля.';
$string['extensionerror'] = 'PHP-расширение Apache Solr не установлено. Пожалуйста, обратитесь к документации.';
$string['fileindexing'] = 'Включить индексирование файлов';
$string['fileindexing_help'] = 'Если ваша инсталляция Solr это поддерживает, то данная возможность позволяет Moodle отправлять файлы на индексирование. <br/>
Вам нужно будет повторно проиндексировать все содержимое сайта после включения этой опции для добавления всех файлов.';
$string['fileindexsettings'] = 'Настройки индексирования файлов';
$string['maxindexfilekb'] = 'Максимальный размер файла для индексирования (КБ)';
$string['maxindexfilekb_help'] = 'Файлы больше заданного числа килобайт не будут включены в индексирование для поиска. Если значение равно 0, будут индексироваться файлы любого размера.';
$string['minimumsolr4'] = 'Solr 4.0 — минимальная версия, требуемая для Moodle';
$string['missingconfig'] = 'Ваш сервер Apache Solr еще не настроен в Moodle.';
$string['multivaluedfield'] = 'Поле «{$a}» вернуло массив вместо скаляра. Пожалуйста, удалите текущий индекс, создайте новый и запустите setup_schema.php перед индексацией данных в Solr.';
$string['nodatafromserver'] = 'Нет данных от сервера';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Этот плагин отправляет данные во внешнюю связанную поисковую систему Solr. Он не хранит данные локально.';
$string['privacy:metadata:data'] = 'Персональные данные, передаваемые из поисковой подсистемы.';
$string['schemafieldautocreated'] = 'Поле «{$a}» уже существует в схеме Solr. Возможно, вы забыли запустить этот скрипт перед началом индексации данных и поля были автоматически созданы Solr. Пожалуйста, удалите текущий индекс, создайте новый и снова запустите setup_schema.php перед индексацией данных в Solr.';
$string['schemasetupfromsolr5'] = 'Этот скрипт может задать схему, только если версия Solr 5.0 или выше. Версия вашего сервера  Solr ниже 5.0. Вам нужно вручную задать поля в вашей схеме в соответствии с search_solrdocument::get_default_fields_definition().';
$string['searchinfo'] = 'Поисковые запросы';
$string['searchinfo_help'] = 'Поле для поиска может быть задано путем задания префикса в поисковом запросе с «title:», «content:», «name:», или «intro:». Например, поиск для «title:news» вернет результаты для слова «news» в заголовке.

Булевы операторы («AND», «OR», «NOT») могут использоваться для комбинирования или исключения ключевых слов.

Символы подстановки («*» или «?») могут быть использованы для замены символов в поисковом запросе.';
$string['setupok'] = 'Схема готова к использованию.';
$string['solrauthpassword'] = 'Пароль аутентификации HTTP';
$string['solrauthuser'] = 'Имя пользователя аутентификации HTTP';
$string['solrhttpconnectionport'] = 'Порт';
$string['solrhttpconnectiontimeout'] = 'Тайм-аут';
$string['solrhttpconnectiontimeout_desc'] = 'Тайм-аут соединения HTTP — максимальное время в секундах, разрешенное для операции передачи данных HTTP.';
$string['solrindexname'] = 'Название индекса';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Машина Solr не настроена как поисковая система';
$string['solrsecuremode'] = 'Режим безопасности';
$string['solrserverhostname'] = 'Имя хоста';
$string['solrserverhostname_desc'] = 'Имя домена для сервера Solr.';
$string['solrsetting'] = 'Настройки Solr';
$string['solrsslcainfo'] = 'Имя SSL CA-сертификатов';
$string['solrsslcainfo_desc'] = 'Имя файла, содержащего один или несколько CA-сертификатов для проверки соединения';
$string['solrsslcapath'] = 'Путь SSL CA-сертификатов';
$string['solrsslcapath_desc'] = 'Путь к каталогу, в котором находятся несколько CA-сертификатов для проверки соединения';
$string['solrsslcert'] = 'Сертификат SSL';
$string['solrsslcert_desc'] = 'Имя файла для закрытого сертификата формата PEM';
$string['solrsslkey'] = 'Ключ SSL';
$string['solrsslkey_desc'] = 'Имя файла для закрытого ключа формата PEM';
$string['solrsslkeypassword'] = 'Пароль ключа SSL';
$string['solrsslkeypassword_desc'] = 'Пароль для файла закрытого ключа формата PEM';
