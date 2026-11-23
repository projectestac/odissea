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
 * Strings for component 'quizaccess_onesession', language 'ru', version '4.5'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Вы пытаетесь получить доступ к прохождению теста с компьютера, устройства или браузера, отличного от того, который вы использовали для начала теста. Если вы случайно закрыли браузер, пожалуйста, обратитесь к преподавателю.';
$string['eventattemptblocked'] = 'Попытка студента продолжить прохождение теста с помощью другого устройства была заблокирована';
$string['eventattemptunlocked'] = 'Студенту разрешили продолжить попытку прохождения теста с помощью другого устройства';
$string['onesession'] = 'Блокировать одновременные подключения';
$string['onesession:unlockattempt'] = 'Разблокировать попытку прохождения теста';
$string['onesession_help'] = 'При включенном параметре пользователи могут продолжить прохождение теста только в одной и той же сессии браузера. Любые попытки открыть тот же тест с другого компьютера, устройства или браузера будут заблокированы. Это может быть полезно для того, чтобы никто не помогал студенту, открывая тот же тест на другом компьютере.';
$string['pluginname'] = 'Правило блокировки одновременного доступа к тесту';
$string['privacy:metadata'] = 'Плагин сохраняет хеш строки, используемой для идентификации сеанса клиентского устройства. Хотя исходная строка содержит IP-адрес клиента и заголовок User-Agent, отправленный браузером клиента, хеш не позволяет извлечь эту информацию. Хеш автоматически удаляется сразу после завершения сеанса тестирования.';
$string['studentinfo'] = 'Внимание! Запрещено менять устройство во время прохождения этого теста. Обратите внимание, что после начала прохождения теста любые подключения к нему с других компьютеров, устройств и браузеров будут заблокированы. Не закрывайте окно браузера до окончания прохождения теста, иначе вы не сможете его завершить.';
$string['unlockthisattempt'] = 'Разрешить учащемуся продолжить попытку с помощью другого устройства';
$string['unlockthisattempt_header'] = 'Разблокировка попытки';
$string['whitelist'] = 'Сети без проверки IP-адреса';
$string['whitelist_desc'] = 'Эта опция предназначена для снижения количества ложных срабатываний, когда пользователи проходят тесты через мобильные сети, где IP-адрес может меняться в ходе теста. В большинстве случаев она не требуется. Вы можете указать список подсетей, разделенных запятыми (например, 88.0.0.0/8, 77.77.0.0/16). Если IP-адрес находится в одной из таких сетей, он не проверяется. Чтобы полностью отключить проверку IP-адреса, можно установить значение 0.0.0.0/0.';
