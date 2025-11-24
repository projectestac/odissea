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
 * Strings for component 'tool_installaddon', language 'uk', version '4.5'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Підтвердження';
$string['acknowledgementtext'] = 'Я розумію, що перед встановленням додаткових модулів потрібно створити повну резервну копію цього сайту. Я розумію та погоджуюся з тим, що додаткові модулі (в тому числі ті, які отримано з офіційних джерел. а особливо ті, які отримано з неофіційних джерел) можуть містити діри в безпеці, що може призвести до того, що сайт стане недоступним , а також до знищення даних.';
$string['featuredisabled'] = 'На цьому сайті відключено встановлення модулів';
$string['installaddon'] = 'Встановлення модулів!';
$string['installaddons'] = 'Встановлення модулів';
$string['installfromrepo'] = 'Встановити модуль з каталогу модулів Moodle';
$string['installfromrepo_help'] = 'Вас буде перенаправлено до каталогу модулів Moodle для пошуку та встановлення модуля. Зауважте, що при цьому буде передано повна назва, URL-адреса та версія системи Moodle , що встановлена на вашому сайті, це необхідно для спрощення процедури встановлення модулів.';
$string['installfromzip'] = 'Встановити модуль з ZIP пакету';
$string['installfromzip_help'] = 'В якості альтернативи до встановлення модулів безпосередньо з каталогу модулів Moodle можна завантажити модуль у вигляді ZIP пакету. ZIP пакет повинен мати таку ж структуру, як і пакет, завантажений з каталогу модулів Moodle.';
$string['installfromzipfile'] = 'ZIP пакет';
$string['installfromzipfile_help'] = 'ZIP-пакет плагіна повинен містити лише один каталог, названий відповідно до назви плагіна. ZIP буде розпаковано у відповідне місце для типу плагіна. Якщо пакет було завантажено з каталогу плагінів Moodle, він матиме таку структуру.';
$string['installfromzipinvalid'] = 'ZIP пакет з модулем повинен містити тільки один каталог, ім’я якого повинно співпадати з назвою модуля. Наданий файл не є коректним ZIP-пакетом модуля.';
$string['installfromziprootdir'] = 'Перейменувати кореневий каталог';
$string['installfromziprootdir_help'] = 'Деякі ZIP пакети, як ті, що генеруються на Github, мають кореневий каталог неправильної назви. В цьому випадку тут можна вказати правильну назву.';
$string['installfromzipsubmit'] = 'Встановити модуль із ZIP паккету';
$string['installfromziptype'] = 'Тип модуля';
$string['installfromziptype_help'] = 'Для модулів, які правильно декларують свою компонентну назву, встановлювач автоматично визначить тип, якщо автовизначення не вдалося, вкажіть правильний тип модуля вручну. Увага: процедура встановлення може завершитися невдало, якщо тип модуля вказано неправильно.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Переконайтеся, що каталог, призначений для модулів вказаного типу, доступний для запису користувачу, від імені якого запущено веб-сервер.';
$string['permcheckerror'] = 'Помилка при перевірці прав на запис';
$string['permcheckprogress'] = 'Перевірка прав на запис...';
$string['permcheckrepeat'] = 'Перевірити знову';
$string['permcheckresultno'] = 'Каталог,  <em>{$a->path}</em>, призначений для модулів вказаного типу недоступний для запису.';
$string['permcheckresultyes'] = 'Каталог,  <em>{$a->path}</em>, призначений для модулів вказаного типу доступний для запису.';
$string['pluginname'] = 'Встановлювач модулів';
$string['privacy:metadata'] = 'Плагін інсталятора плагінів не зберігає жодних особистих даних.';
$string['remoterequestalreadyinstalled'] = 'Є запит на встановлення на цьому сайті модуля {$a->name} ({$a->component}) версії {$a->version} з каталогу модулів Moodle. Але цей модуль <strong>вже встановлено</strong> на цьому сайті.';
$string['remoterequestconfirm'] = 'Є запит на встановлення на цьому сайті модуля <strong>{$a->name}</strong> ({$a->component}) версії {$a->version} з каталогу модулів Moodle. Якщо ви натиснете продовжувати. ZIP пакет з модулем буде завантажено для перевірки. На цьому етапі нічого не буде встановлюватися.';
$string['remoterequestinvalid'] = 'Є запит на встановлення на цьому сайті модуля з каталогу модулів Moodle. На жаль, цей запит був некоректним, тож встановлення не буде.';
$string['remoterequestnoninstallable'] = 'Надійшов запит на встановлення модуля {$a->name} ({$a->component}) версії {$a->version} з каталогу модулів Moodle на цей сайт. Проте, попередня перевірка установки модуля закінчилася з помилкою (код причини: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Є запит на встановлення на цьому сайті модуля {$a->name} ({$a->component}) версії {$a->version} з каталогу модулів Moodle. Але каталог <strong>{$a->typepath}</strong> <strong>не має права на запис</strong>. Ви повинні надати право запису в цей каталог для користувача від імені якого запускається веб-сервер та натиснути кнопку ’Продовжити’, щоб повторити перевірку.';
$string['remoterequestpluginfoexception'] = 'Оп-па... Виникла помилкапри спробі отримати інформацію про модуль {$a->name} ({$a->component}) версії {$a->version}. Модуль не може бути встановлено. Щоб побачити додаткову інформацію, включіть режим налагодження.';
$string['typedetectionfailed'] = 'Не вдалося визначити тип модуля. Будь ласка, вкажіть тип модуля вручну.';
$string['typedetectionmismatch'] = 'Тип вибраного модуля не відповідає типу, оголошеному в модулі: {$a}';
