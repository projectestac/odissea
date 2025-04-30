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
 * Strings for component 'plugin', language 'uk', version '4.4'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Дії';
$string['availability'] = 'Доступність';
$string['cancelinstallall'] = 'Скасувати нові установки ({$a})';
$string['cancelinstallhead'] = 'Скасування встановлення плагінів';
$string['cancelinstallinfo'] = 'Наступні плагіни ще не повністю встановлені, тому їх встановлення може бути скасовано. Для цього потрібно видалити папку плагінів з сервера. Переконайтеся, що це дійсно те, що ви хочете запобігти випадковій втраті даних (наприклад, ваші власні модифікації коду).';
$string['cancelinstallinfodir'] = 'Папка для видалення: {$a}';
$string['cancelinstallone'] = 'Скасувати цю установку';
$string['cancelupgradeall'] = 'Скасувати оновлення ({$a})';
$string['cancelupgradehead'] = 'Відновлення попередньої версії плагінів';
$string['cancelupgradeone'] = 'Скасувати це оновлення';
$string['checkforupdates'] = 'Перевірити наявність оновлень';
$string['checkforupdateslast'] = 'Остання перевірка оновлень {$a}';
$string['dependencyavailable'] = 'Доступний';
$string['dependencyfails'] = 'Не вдається';
$string['dependencyinstall'] = 'Встановити';
$string['dependencyinstallhead'] = 'Встановлення відсутніх залежностей';
$string['dependencyinstallmissing'] = 'Встановити відсутні залежності ({$a})';
$string['dependencymissing'] = 'Відсутній';
$string['dependencyunavailable'] = 'Недоступно';
$string['dependencyupload'] = 'Завантажити';
$string['dependencyuploadmissing'] = 'Завантажити ZIP-файли';
$string['detectedmisplacedplugin'] = 'Модуль "{$a->component}"  встановлено в неправильне місце - "{$a->current}", очікуване місце - "{$a->expected}"';
$string['displayname'] = 'Назва модуля';
$string['err_response_curl'] = 'Не вдається отримати наявні оновлення даних - непередбачувана помилка cURL.';
$string['err_response_format_version'] = 'Непередбачувана версія формату відгуку. Спробуйте ще раз отримати дані про оновлення.';
$string['err_response_http_code'] = 'Не вдається отримати наявні оновлення даних - непередбачуваний HTML-код відгуку.';
$string['filterall'] = 'Показати все';
$string['filtercontribonly'] = 'Показати тільки сторонні';
$string['filterupdatesonly'] = 'Показати тільки з оновленнями';
$string['incompatibleversion'] = 'Несумісна версія Moodle: {$a}';
$string['isenabled'] = 'Увімкнено?';
$string['misdepinfoplugin'] = 'Інформація про додаток';
$string['misdepinfoversion'] = 'Інформація про версію';
$string['misdepsavail'] = 'Доступні відсутності залежностей';
$string['misdepsunavail'] = 'Недоступні відсутності залежностей';
$string['misdepsunavaillist'] = 'Не знайдено жодної версії для виконання вимог залежності: {$a}.';
$string['misdepsunknownlist'] = 'Не в каталозі плагінів: <strong> {$a} </strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Немає встановлених модулів цього типу';
$string['notdownloadable'] = 'Не вдається завантажити пакет';
$string['notdownloadable_help'] = 'Пакет ZIP з оновленням не можна завантажити автоматично.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Нотатки';
$string['notsupported'] = 'Плагін може бути несумісним із версією Moodle {$a}';
$string['notwritable'] = 'Файли модуля не мають права перезапису';
$string['notwritable_help'] = 'Файли плагінів не доступні для запису веб-сервером. Процес веб-сервера повинен мати доступ для запису до папки плагінів і всього її вмісту. Також може знадобитися доступ для запису до кореневої папки даного типу плагіна.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Всі плагіни';
$string['overviewext'] = 'Додаткові плагіни';
$string['overviewupdatable'] = 'Доступні оновлення';
$string['packagesdebug'] = 'Вивід повідомлення налагодження увімкнено';
$string['packagesdownloading'] = 'Завантаження {$a}';
$string['packagesextracting'] = 'Вилучення {$a}';
$string['packagesvalidating'] = 'Перевірка {$a}';
$string['packagesvalidatingfailed'] = 'Установка перервана через помилку перевірки';
$string['packagesvalidatingok'] = 'Успішна перевірка, інсталяція може продовжуватися';
$string['plugincheckall'] = 'Всі плагіни';
$string['plugincheckattention'] = 'Додатки, які потребують уваги';
$string['pluginchecknone'] = 'Відтепер плагін не вимагає вашої уваги';
$string['pluginchecknotice'] = 'На цій сторінці відображаються плагіни, які можуть вимагати вашої уваги під час оновлення, наприклад, нові плагіни, які потрібно встановити, плагіни, які потрібно оновити, відсутні плагіни тощо. Додаткові плагіни відображаються, якщо є доступне оновлення для них. Рекомендується перевірити, чи доступні новіші версії плагінів, і оновити їх вихідний код, перш ніж продовжити оновлення Moodle.';
$string['plugindisable'] = 'Відключити';
$string['plugindisabled'] = 'Відключено';
$string['pluginenable'] = 'Включити';
$string['pluginenabled'] = 'Включено';
$string['release'] = 'Випуск';
$string['requiredby'] = 'Потрібно для: {$a}';
$string['requires'] = 'Вимагає';
$string['rootdir'] = 'Каталог';
$string['settings'] = 'Налаштування';
$string['source'] = 'Джерело';
$string['sourceext'] = 'Розширення';
$string['sourcestd'] = 'Стандарт';
$string['status'] = 'Статус';
$string['status_delete'] = 'Буде видалено';
$string['status_downgrade'] = 'Вже встановлено найновішу версію!';
$string['status_missing'] = 'Немає на диску!';
$string['status_new'] = 'Буде встановлено';
$string['status_nodb'] = 'Відсутня база даних';
$string['status_upgrade'] = 'Буде оновлено';
$string['status_uptodate'] = 'Встановлено';
$string['supportedconversions'] = 'Підтримувані перетворення документів';
$string['supportedmoodleversions'] = 'Підтримувані версії Moodle';
$string['systemname'] = 'Ідентифікатор';
$string['type_antivirus'] = 'Антивірусний плагін';
$string['type_antivirus_plural'] = 'Антивірусні плагіни';
$string['type_auth'] = 'Метод ідентифікації';
$string['type_auth_plural'] = 'Методи ідентифікації';
$string['type_availability'] = 'Наявність обмеження';
$string['type_availability_plural'] = 'Доступ за умовою';
$string['type_block'] = 'Блок';
$string['type_block_plural'] = 'Блоки';
$string['type_cachelock'] = 'Помічник співставлення кешу';
$string['type_cachelock_plural'] = 'Помічники співставлення кешу';
$string['type_cachestore'] = 'Сховище кешу';
$string['type_cachestore_plural'] = 'Сховища кешу';
$string['type_calendartype'] = 'Тип календаря';
$string['type_calendartype_plural'] = 'Типи календаря';
$string['type_communication'] = 'Провайдер зв\'язку';
$string['type_communication_plural'] = 'Провайдери зв\'язку';
$string['type_contentbank'] = 'Контент-банк';
$string['type_contentbank_plural'] = 'Плагіни банку вмісту';
$string['type_contenttype'] = 'Контент-банк';
$string['type_contenttype_plural'] = 'Плагіни банку вмісту';
$string['type_coursereport'] = 'Звіт курсу';
$string['type_coursereport_plural'] = 'Звіти курсу';
$string['type_customfield'] = 'Спеціальне поле';
$string['type_customfield_plural'] = 'Користувацькі поля';
$string['type_dataformat'] = 'Формат даних';
$string['type_dataformat_plural'] = 'Формати даних';
$string['type_editor'] = 'Редактор';
$string['type_editor_plural'] = 'Редактори';
$string['type_enrol'] = 'Метод зарахування';
$string['type_enrol_plural'] = 'Методи зарахування';
$string['type_fileconverter'] = 'Конвертер документів';
$string['type_fileconverter_plural'] = 'Перетворювачі документів';
$string['type_fileconvertermanage'] = 'Керування перетворювачами документів';
$string['type_filter'] = 'Фільтр тексту';
$string['type_filter_plural'] = 'Фільтри тексту';
$string['type_format'] = 'Формат курсу';
$string['type_format_plural'] = 'Формати курсів';
$string['type_gradeexport'] = 'Метод експорту оцінок';
$string['type_gradeexport_plural'] = 'Методи експорту оцінок';
$string['type_gradeimport'] = 'Метод імпорту оцінок';
$string['type_gradeimport_plural'] = 'Методи імпорту оцінок';
$string['type_gradereport'] = 'Звіт журналу оцінок';
$string['type_gradereport_plural'] = 'Звіти журналу оцінок';
$string['type_gradingform'] = 'Розширений метод оцінювання';
$string['type_gradingform_plural'] = 'Розширені методи оцінювання';
$string['type_h5plib'] = 'H5P framework';
$string['type_h5plib_plural'] = 'H5P frameworks';
$string['type_local'] = 'Локальний модуль';
$string['type_local_plural'] = 'Локальні модулі';
$string['type_media'] = 'Медіапрогравач';
$string['type_media_plural'] = 'Медіапрогравачі';
$string['type_message'] = 'Плагін сповіщень';
$string['type_message_plural'] = 'Плагіни сповіщень';
$string['type_mlbackend'] = 'Механізм навчання комп\'ютера';
$string['type_mlbackend_plural'] = 'Механізми навчання комп\'ютерів';
$string['type_mnetservice'] = 'Сервіс Мережі Мудл';
$string['type_mnetservice_plural'] = 'Сервіси Мережі Мудл';
$string['type_mod'] = 'Модуль діяльності';
$string['type_mod_plural'] = 'Модулі діяльностей';
$string['type_paygw'] = 'Платіжний шлюз';
$string['type_paygw_plural'] = 'Платіжні шлюзи';
$string['type_paygwmanage'] = 'Керуйте платіжними шлюзами';
$string['type_plagiarism'] = 'Модуль перевірки плагіату';
$string['type_plagiarism_plural'] = 'Модулі перевірки плагіату';
$string['type_portfolio'] = 'Портфоліо';
$string['type_portfolio_plural'] = 'Портфоліо';
$string['type_profilefield'] = 'Тип поля профілю';
$string['type_profilefield_plural'] = 'Типи поля профілю';
$string['type_qbank'] = 'Плагін банку запитань';
$string['type_qbank_plural'] = 'Плагіни банку запитань';
$string['type_qbehaviour'] = 'Поведінка питання';
$string['type_qbehaviour_plural'] = 'Поведінки питання';
$string['type_qformat'] = 'Формат експорту/імпорту питання';
$string['type_qformat_plural'] = 'Формати експорту/імпорту питання';
$string['type_qtype'] = 'Тип питання';
$string['type_qtype_plural'] = 'Типи питань';
$string['type_report'] = 'Звіт сайту';
$string['type_report_plural'] = 'Звіти';
$string['type_repository'] = 'Репозиторій';
$string['type_repository_plural'] = 'Репозиторії';
$string['type_search'] = 'Пошукова система';
$string['type_search_plural'] = 'Пошукові системи';
$string['type_theme'] = 'Тема оформлення';
$string['type_theme_plural'] = 'Теми оформлення';
$string['type_tool'] = 'Засіб адміністрування';
$string['type_tool_plural'] = 'Засоби адміністрування';
$string['type_webservice'] = 'Протокол вебсервісу';
$string['type_webservice_plural'] = 'Протоколи вебсервісу';
$string['uninstall'] = 'Видалити';
$string['uninstallconfirm'] = 'Ви збираєтеся видалити модуль <em>{$a->name}</em>. Це повністю видалить з бази даних все, що пов’язано з цим модулем, в тому числі і його налаштування, записи журналу, файли користувачів, які управляються через модуль, тощо. Повернення не буде - Moodle самостійно нічого не відновить з резервних копій. Ви ВПЕВНЕНІ, що хочете продовжувати?';
$string['uninstalldelete'] = 'Всі дані пов’язані з модулем <em>{$a->name}</em> було вилучено з бази даних. Для запобігання самовстановлення модуля вам потрібно зараз видалити з сервера його файли в <em>{$a->rootdir}</em>. Moodle самостійно не може видалити каталог через відсутність прав на запис.';
$string['uninstalldeleteconfirm'] = 'Всі дані пов’язані з модулем <em>{$a->name}</em> було вилучено з бази даних. Для запобігання самовстановлення модуля потрібно зараз видалити з сервера його файли в <em>{$a->rootdir}</em>. Бажаєте видалити каталог модуля?';
$string['uninstalldeleteconfirmexternal'] = 'Схоже, що поточна версія модуля була отримана через систему управління вихідним кодом ({$a}). При вилученні каталогу модуля ви можете втратити важливі локальні зміни коду. Перед тим як продовжити впевніться, що ви точно хочете вилучити каталог модуля.';
$string['uninstallextraconfirmblock'] = 'Є {$a->instances} екземпляр(ів) цього блоку.';
$string['uninstallextraconfirmenrol'] = 'Є {$a->enrolments} варіант(ів) зарахування користувачів';
$string['uninstallextraconfirmmod'] = 'Є {$a->instances} екземпляр(ів) цього модуля в {$a->courses} курсі(ах).';
$string['uninstalling'] = 'Видалення {$a->name}';
$string['updateavailable'] = 'Доступна нова версія {$a} !';
$string['updateavailable_moreinfo'] = 'Детальніше...';
$string['updateavailable_release'] = 'Випуск {$a}';
$string['updatepluginconfirm'] = 'Підтвердження оновлення модуля';
$string['updatepluginconfirmexternal'] = 'Схоже, що поточна версія модуля була отримана через систему управління вихідним кодом ({$a}). Якщо ви встановите це оновлення, то більше не зможете отримувати оновлення через систему управління вихідним кодом. Перед тим як продовжити впевніться, що ви точно хочете оновити модуль.';
$string['updatepluginconfirminfo'] = 'Ви збираєтеся встановити нову версію модуля <strong>{$a->name}</strong>. ZIP-пакет з версією  {$a->version} цього модуля буде завантажено з <a href="{$a->url}">{$a->url}</a> та розгорнуто до каталогу з вашою встановленою системою Moodle для подальшого оновлення.';
$string['updatepluginconfirmwarning'] = 'Зверніть увагу, що Moodle перед оновленням самостійно не створює резервну копію даних. Тож наполегливо рекомендуємо вам зараз створити повну резервну копію бази даних, щоб в разі непередбачуваних помилок в коді (що насправді буває не часто) ви могли відновити робочу систему. Ви дієте на свій страх і ризик.';
$string['validationmsg_componentmatch'] = 'Повна назва компоненту';
$string['validationmsg_componentmismatchname'] = 'Невідповідність назви модуля';
$string['validationmsg_componentmismatchname_help'] = 'Деякі ZIP пакети, як ті, що генеруються на Github, мають кореневий каталог неправильної назви. В цьому випадку тут можна вказати правильну назву.';
$string['validationmsg_componentmismatchname_info'] = 'В модулі вказано його назву - \'{$a}\', але вона не співпадає з назвою кореневого каталогу.';
$string['validationmsg_componentmismatchtype'] = 'Невідповідність типу модуля';
$string['validationmsg_componentmismatchtype_info'] = 'Ви вказали тип \'{$a->expected}\', але в модулі вказано тип \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Видобутий файл не знайдено';
$string['validationmsg_filesnumber'] = 'В пакеті не вистачає файлів';
$string['validationmsg_filestatus'] = 'Не вдалося видобути всі файли';
$string['validationmsg_filestatus_info'] = 'Спроба видобути файл {$a->file} призвела до помилки \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Знайти файл мови';
$string['validationmsg_maturity'] = 'Вказаний рівень розробки';
$string['validationmsg_maturity_help'] = 'Для додатку може бути вказано рівень розробки. Якщо розробник вважає модуль стабільним, то він вказує значення MATURITY_STABLE. Всі інші стадії розробки (наприклад, альфа- та бета-) вважаються нестабільними. В цьому випадку виводиться відповідне попередження.';
$string['validationmsg_missingcomponent'] = 'Модуль не надає своє компонентне ім’я';
$string['validationmsg_missingcomponent_help'] = 'Всі модулі повинні надавати своє повне компонентне ім’я через  визначення`$plugin->component` у файлі version.php.';
$string['validationmsg_missingcomponent_link'] = 'Розробка: version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Неправильна назва англійського мовного файлу';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Відсутній необхідний для цього типу англійський мовний файл  {$a}.';
$string['validationmsg_missinglangenfile'] = 'Не знайдено англійський мовний файл';
$string['validationmsg_missinglangenfolder'] = 'Відсутній каталог для англійських мовних файлів';
$string['validationmsg_missingversion'] = 'В модулі не вказана версія';
$string['validationmsg_missingversionphp'] = 'Файл version.php не знайдено';
$string['validationmsg_multiplelangenfiles'] = 'Знайдено кілька англійських мовних файлів';
$string['validationmsg_onedir'] = 'Неправильна структура ZIP пакету.';
$string['validationmsg_onedir_help'] = 'ZIP пакет повинен містити тільки один каталог, в якому буде вихідний код модуля. Назва цього кореневого каталогу повинна співпадати з назвою модуля.';
$string['validationmsg_pathwritable'] = 'Перевірка права на запис';
$string['validationmsg_pluginversion'] = 'Версія модуля';
$string['validationmsg_pluginversiontoolow'] = 'Вища версія цього плагіна вже встановлена';
$string['validationmsg_release'] = 'Реліз модуля';
$string['validationmsg_requiresmoodle'] = 'Необхідна версія Moodle';
$string['validationmsg_rootdir'] = 'Назва встановлюваного модуля';
$string['validationmsg_rootdir_help'] = 'Ім\'я кореневого каталогу в ZIP пакеті порушує формальні вимоги синтаксису. Деякі ZIP пакети, як ті, що генеруються на Github, мають кореневий каталог неправильної назви. Ви повинні вказати правильну назву.';
$string['validationmsg_rootdirinvalid'] = 'Неправильна назва модуля';
$string['validationmsg_rootdirinvalid_help'] = 'Ім\'я кореневого каталогу в ZIP пакеті утворює назву модуля, який буде встановлено. Якщо ім\'я є неправильним, вам потрібно перейменувати кореневий каталог в ZIP перед встановленням модуля.';
$string['validationmsg_targetexists'] = 'Цільове місцеположення вже існує і буде видалено';
$string['validationmsg_targetexists_help'] = 'Каталог плагінів уже існує і буде замінений вмістом пакета плагінів.';
$string['validationmsg_targetnotdir'] = 'Цільове розташування, яке займає файл';
$string['validationmsg_unknowntype'] = 'Невідомий тип модуля';
$string['validationmsg_versionphpsyntax'] = 'Всі модулі повинні надавати своє повне компонентне ім’я через  визначення`$plugin->component` у файлі version.php.';
$string['validationmsglevel_debug'] = 'Налагодження';
$string['validationmsglevel_error'] = 'Помилка';
$string['validationmsglevel_info'] = 'Гаразд';
$string['validationmsglevel_warning'] = 'Увага';
$string['version'] = 'Версія';
$string['versiondb'] = 'Поточна версія';
$string['versiondisk'] = 'Нова версія';
