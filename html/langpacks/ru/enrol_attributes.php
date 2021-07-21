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
 * Strings for component 'enrol_attributes', language 'ru', version '3.11'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Добавить условие';
$string['addgroup'] = 'Добавить группу';
$string['ajax-error'] = 'Произошла ошибка';
$string['ajax-okforced'] = 'OK, зачислено пользователей: {$a}';
$string['ajax-okpurged'] = 'ОК, зачисления стерты';
$string['attributes:config'] = 'Настройка экземпляров плагина';
$string['attributes:manage'] = 'Управление зачисленными пользователями';
$string['attributes:unenrol'] = 'Отчислить пользователей из курса';
$string['attributes:unenrolself'] = 'Отчислить себя из курса';
$string['attrsyntax'] = 'Правила заполнения полей профиля';
$string['attrsyntax_help'] = '<p>В правилах можно использовать только те поля профиля пользователя, которые были настроены вручную.</p>';
$string['confirmforce'] = 'Это действие зачислит (повторно) всех пользователей, соответствующих заданным правилам.';
$string['confirmpurge'] = 'Это действие сотрет все зачисления, соответствующие заданным правилам.';
$string['defaultrole'] = 'Роль по умолчанию';
$string['defaultrole_desc'] = 'Роль по умолчанию при зачислении пользователей с помощью этого плагина (в каждом экземпляре может быть переопределена).';
$string['defaultwhenexpired'] = 'Поведение по умолчанию при изменении правил зачисления';
$string['defaultwhenexpired_desc'] = 'Что делать с пользователями, которые больше не соответствуют правилам зачисления. Эти настройки могут быть переопределены в каждом способе зачисления.';
$string['deletecondition'] = 'Удалить условие';
$string['force'] = 'Выполнить зачисление сейчас';
$string['mappings'] = 'Соответствие полям Shibboleth';
$string['mappings_desc'] = 'При использовании аутентификации через Shibboleth этот плагин позволяет автоматически обновлять профиль пользователя при каждом входе в систему.<br><br>Например, если вам нужно обновить у пользователя поле профиля <code>homeorganizationtype</code> в соответствии с атрибутом <code>Shib-HomeOrganizationType</code> Shibboleth (предполагается, что это переменная окружения, доступная серверу во время входа в систему), то можно ввести одну строку: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br> Вы можете добавлять столько строк, сколько нужно.<br><br>Оставьте поле пустым, чтобы не использовать эту возможность или если аутентификация через Shibboleth не используется.';
$string['observelogins'] = 'Зачислять пользователей сразу после входа';
$string['observelogins_desc'] = 'Попытаться зачислить пользователей во время их входа в систему. Это может снизить производительность системы, выключите этот параметр, если в систему заходят одновременно много пользователей';
$string['pluginname'] = 'Зачисление на основе полей профиля';
$string['privacy:metadata'] = 'Плагин "Запись по полям пользователей" не сохраняет персональные данные пользователей';
$string['profilefields'] = 'Поля профиля, используемые в правилах записи';
$string['profilefields_desc'] = 'Какие поля профиля пользователя можно использовать при настройке зачисления?<br><br><b>Если вы ничего не выберете, работа плагина станет бессмысленной, и поэтому не получится использовать его в курсах.</b><br>Несмотря на это, перечисленные ниже возможности по-прежнему можно будет использовать.';
$string['purge'] = 'Стереть зачисления';
$string['removewhenexpired'] = 'Отчислить после изменения атрибутов';
$string['removewhenexpired_help'] = 'Отчислить пользователей во время входа в систему, если их атрибуты больше не соответствуют правилам.';
$string['whenexpired'] = 'Поведение при изменении правил зачисления';
$string['whenexpired_help'] = 'Что делать с пользователями, которые больше не соответствуют правилам зачисления';
$string['whenexpireddonothing'] = 'Оставить прежних пользователей зачисленными';
$string['whenexpiredremove'] = 'Отчислить не соответствующих пользователей';
$string['whenexpiredsuspend'] = 'Заблокировать не соответствующих пользователей';
