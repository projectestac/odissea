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
 * Strings for component 'cachestore_file', language 'ru', version '4.4'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Асинхронно очистить каталог';
$string['asyncpurge_help'] = 'При включенном параметре новый каталог создается с проверкой кэша, а старый каталог будет асинхронно удален при выполнении запланированной задачи.';
$string['autocreate'] = 'Автоматическое создание каталога';
$string['autocreate_help'] = 'При включении этого параметра по указанному пути будет автоматически создан каталог, если он еще не существует.';
$string['lockwait'] = 'Максимальное время ожидания блокировки';
$string['lockwait_help'] = 'Максимальное время ожидания особой блокировки перед чтением или записью ключа кэша (в секундах). Это используется только для определений кэша, для которых требуется блокировка чтения или записи.';
$string['path'] = 'Путь к кэшу';
$string['path_help'] = 'Каталог, в который будут сохраняться файлы, используемые этим хранилищем кэша. Здесь можно указать каталог на более производительном диске (например, созданном в памяти). Если оставить поле пустым (по умолчанию), то каталог будет автоматически создан в каталоге moodledata.';
$string['pluginname'] = 'Кэш в файловой системе';
$string['prescan'] = 'Предварительное сканирование каталога';
$string['prescan_help'] = 'Если параметр включен, то при первом использовании кэша каталог сканируется и наличие файлов сначала проверяются по полученному списку файлов. Это может помочь, если у вас медленная файловая система и операции с поиском файлов являются узким местом.';
$string['privacy:metadata'] = 'Плагин хранилища кэша «Кэш в файловой системе» хранит данные в течение короткого времени как часть своей функции кэширования, но эти данные регулярно очищаются.';
$string['singledirectory'] = 'Хранить в одном каталоге';
$string['singledirectory_help'] = 'При включении этого параметра файлы (кэшированные элементы) будут храниться в одном каталоге, а не разбиваться на несколько каталогов.

Это ускорит взаимодействие с файлами, но повысит риск возникновения проблем из-за ограничений файловой системы.

Рекомендуется включать параметр только при соблюдении следующих условий:

* Если Вы знаете, что количество элементов в кэше будет достаточно мало и это не приведет к проблемам в файловой системе.
* Кэшируемые данные не требуют больших затрат на создание. При этом придерживаться значений по умолчанию все еще может быть лучшим вариантом, так как это снижает вероятность проблем.';
$string['task_asyncpurge'] = 'Асинхронная очистка хранилища файлов от старых каталогов кэша';
