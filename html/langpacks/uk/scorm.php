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
 * Strings for component 'scorm', language 'uk', version '4.4'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Активація';
$string['activityloading'] = 'Ви будете автоматично перенаправлені до діяльності';
$string['activityoverview'] = 'Ви маєте пакети SCORM, які потребують вашої уваги';
$string['activitypleasewait'] = 'Діяльність завантажується, зачекайте...';
$string['adminsettings'] = 'Налаштування адміна';
$string['advanced'] = 'Параметри';
$string['aicchacpkeepsessiondata'] = 'Зберігати дані про сесію AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Термін (в днях) зберігання даних про сесії зовнішньої AICC HACP (великий час наповнить таблицю зі старими даними, але може бути корисним при налагодженні)';
$string['aicchacptimeout'] = 'Тайм-аут AICC HACP';
$string['aicchacptimeout_desc'] = 'Термін в хвилинах, протягом якого сесія зовнішнього AICC HACP може залишатися відкритою';
$string['aiccuserid'] = 'Передавати до  AICC числовий код користувача';
$string['aiccuserid_desc'] = 'Стандарт AICC для імен користувачів більш жорсткий у порівнянні з Moodle та дозволяє тільки цифри. Крапки, пробіли та равлик (@) не допускаються. Якщо параметр включено, то в пакет AICC передаються числові коди користувачів замість їх імен.';
$string['aliasonly'] = 'При виборі зі сховища файлу imsmanifest.xml необхідно використовувати псевдонім/ярлик цього файлу.';
$string['allowapidebug'] = 'Активізувати налагодження та трасіровку API (встановлюється захват маски з apidebugmask)';
$string['allowtypeaicchacp'] = 'Включити зовнішній AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Якщо включено, то дозволяється зв’язок із зовнішнім AICC HACP, не потребуючи входу користувача в систему для post запитів із зовнішнього пакету AICC';
$string['allowtypeexternal'] = 'Дозволити тип зовнішнього пакету';
$string['allowtypeexternalaicc'] = 'Дозволити пряму URL адресу AICC';
$string['allowtypeexternalaicc_desc'] = 'Включений параметр дозволяє використовувати пряму URL адресу до простого пакету AICC';
$string['allowtypelocalsync'] = 'Дозволити завантажувальний тип пакету';
$string['apidebugmask'] = 'Налагодження АРІ із захватом маски - використовуйте простий регулярний вираз &lt;username&gt;:&lt;activityname&gt; наприклад, admin:.* налагодження можливе тільки для користувача адміністратора';
$string['areacontent'] = 'Файли вмісту';
$string['areapackage'] = 'Файл пакету';
$string['asset'] = 'Актив';
$string['assetlaunched'] = 'Актив - Переглянуто';
$string['attempt'] = 'спроба';
$string['attempt1'] = '1 спроба';
$string['attempts'] = 'Спроби';
$string['attemptsmanagement'] = 'Керування спробами';
$string['attemptstatusall'] = 'Особистий кабінет та сторінка входу';
$string['attemptstatusentry'] = 'Тільки сторінка входу';
$string['attemptstatusmy'] = 'Тільки Особистий кабінет';
$string['attemptsx'] = '{$a} спроб(и)';
$string['attr_error'] = 'Неправильні дані для атрибута ({$a->attr}) в тегі {$a->tag}.';
$string['autocommit'] = 'Автофіксація';
$string['autocommit_help'] = 'Якщо включено, SCORM дані автоматично зберігаються до бази даних. Корисно для тих об’єктів SCORM, які не регулярно зберігають свої дані.';
$string['autocommitdesc'] = 'Автоматично зберігати дані SCORM, якщо SCORM пакет не зберіг це.';
$string['autocontinue'] = 'Авто-продовження';
$string['autocontinue_help'] = 'Якщо параметр включено, то наступні навчальні об’єкти будуть запускатися автоматично, інакше потрібно натискати кнопку Продовжити.';
$string['autocontinuedesc'] = 'При включеному параметрі наступні навчальні об’єкти запускаються автоматично, інакше потрібно натискати кнопку Продовжити.';
$string['averageattempt'] = 'Середнє по спробах';
$string['badarchive'] = 'Ви повинні надати дійсний zip-файл';
$string['badimsmanifestlocation'] = 'Файл imsmanifest.xml знайдено, але не в кореневому каталозі вашого zip-архіву. Заархівуйте свій SCORM повторно.';
$string['badmanifest'] = 'Деякі помилки маніфесту: подивіться логи помилок';
$string['browse'] = 'Перегляд';
$string['browsed'] = 'Переглянуто';
$string['browsemode'] = 'Режим перегляду';
$string['browserepository'] = 'Переглянути сховище';
$string['calculatedweight'] = 'Розрахункова вага';
$string['calendarend'] = '{$a} завершується';
$string['calendarstart'] = '{$a} розпочинається';
$string['cannotaccess'] = 'Ви не можете викликати цей скрипт в цьому випадку';
$string['cannotfindsco'] = 'Не знайдено SCO';
$string['chooseapacket'] = 'Вибрати або оновити пакети';
$string['closebeforeopen'] = 'Визначено дату закінчення раніше дати початку';
$string['collapsetocwinsize'] = 'Згорнути зміст, якщо розмір вікна менше';
$string['collapsetocwinsizedesc'] = 'Цейц параметр дозволяє вказати розмір вікна, при меншому розмірі якого зміст повине автоматично згортатися.';
$string['compatibilitysettings'] = 'Параметри сумісності';
$string['completed'] = 'Завершено';
$string['completiondetail:allscos'] = 'Виконайте всі частини цієї діяльності';
$string['completiondetail:completionscore'] = 'Отримайте оцінку {$a} або більше';
$string['completiondetail:completionstatuscompleted'] = 'Завершіть вправу';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Завершіть або пройдіть дію';
$string['completiondetail:completionstatuspassed'] = 'Пройдіть діяльність';
$string['completionscorerequired'] = 'Необхідно набрати визначений мінімум балів';
$string['completionscorerequired_help'] = 'Включення цього параметру потребує, щоб користувач набрав не менше ніж мінімально вказана кількість балів, щоб відмітити цей SCORM завершеним, а також виконати будь-які інші вимоги завершення діяльності.';
$string['completionscorerequireddesc'] = 'Для завершення потрібен мінімальний бал {$a}';
$string['completionstatus_completed'] = 'Завершено';
$string['completionstatus_passed'] = 'Пройдено';
$string['completionstatusallscos'] = 'Вимагати від усіх SCOS повернути статус завершення';
$string['completionstatusallscos_help'] = 'Деякі пакунки SCORM містять кілька компонентів або "scos" - коли це ввімкнено, усі scos в пакеті повинні повернути відповідний status_leson_status, щоб ця діяльність була позначена як завершена.';
$string['completionstatusrequired'] = 'Вимагає статусу';
$string['completionstatusrequired_help'] = 'Користувач повинен перевірити один або кілька статусів та досягти принаймні одного з них, щоб відмітити цей SCORM зевершеним, а також виконати будь-які інші вимоги завершення діяльності.';
$string['completionstatusrequireddesc'] = 'Студент повинен отримати принаймні один із таких статусів: {$a}';
$string['confirmloosetracks'] = 'ПОПЕРЕДЖЕННЯ: Пакет, здається, змінено або модифіковано. Якщо змінилася структура пакету, деякі записи користувачів можуть бути втрачені в процесі оновлення.';
$string['contents'] = 'Зміст';
$string['coursepacket'] = 'Пакет курсу';
$string['coursestruct'] = 'Структура курсу';
$string['crontask'] = 'Фонова обробка для SCORM';
$string['currentwindow'] = 'У поточному вікні';
$string['datadir'] = 'Помилка файлової системи. Не вдається створити каталог для даних курсу.';
$string['defaultdisplaysettings'] = 'Типові параметри відображення';
$string['defaultgradesettings'] = 'Типові параметри оцінювання';
$string['defaultothersettings'] = 'Інші типові налаштування';
$string['deleteallattempts'] = 'Видалити всі спроби';
$string['deleteattemptcheck'] = 'Ви абсолютно впевнені, що хочете видалити ці спроби?';
$string['deleteselected'] = 'Видалити виділені спроби';
$string['deleteuserattemptcheck'] = 'Ви точно впевнені, що хочете видалити всі ці спроби?';
$string['details'] = 'Деталі запису';
$string['directories'] = 'Показати посилання каталогу';
$string['disabled'] = 'Відключено';
$string['display'] = 'Показувати пакет';
$string['displayattemptstatus'] = 'Показувати статус спроби';
$string['displayattemptstatus_help'] = 'При включеному параметрі результат спроб користувача буде показано в блоці перегляду курсу на Інформаційній панелі та/або на сторінці  SCORM.';
$string['displayattemptstatusdesc'] = 'Результат спроб користувача буде показано в блоці перегляду курсу на Інформаційній панелі та/або на сторінці  SCORM';
$string['displaycoursestructure'] = 'Відображати структуру курсу на вхідній сторінці';
$string['displaycoursestructure_help'] = 'При включеному параметрі зміст відображається на сторінці курсу SCORM.';
$string['displaycoursestructuredesc'] = 'Якщо включено, то зміст буде показано на сторінці структури SCORM.';
$string['displaydesc'] = 'Чи виводити SCORM пакет в новому вікні.';
$string['displaysettings'] = 'Параметри показу';
$string['dnduploadscorm'] = 'Додати SCORM пакет';
$string['domxml'] = 'бібліотека розширень DOMXML';
$string['element'] = 'Елемент';
$string['enter'] = 'Розпочати';
$string['entercourse'] = 'Ввести курс';
$string['errorlogs'] = 'Логи помилок';
$string['eventattemptdeleted'] = 'Видалено спробу';
$string['eventinteractionsviewed'] = 'Переглянуто взаємодії';
$string['eventreportviewed'] = 'Переглянуто звіт';
$string['eventscolaunched'] = 'Запущено Sco';
$string['eventscorerawsubmitted'] = 'Відправлено сирий бал SCORM';
$string['eventstatussubmitted'] = 'Відправлено статус SCORM';
$string['eventtracksviewed'] = 'Переглянуто задачі';
$string['eventuserreportviewed'] = 'Переглянуто звіт користувача';
$string['everyday'] = 'Щоденно';
$string['everytime'] = 'Щоразу при використанні';
$string['exceededmaxattempts'] = 'Ви досягли максимальної кількості спроб.';
$string['exit'] = 'Вийти з курсу';
$string['exitactivity'] = 'Вийти з діяльності';
$string['expired'] = 'На жаль, ця діяльність закрита з {$a}  і більше недоступна';
$string['external'] = 'Оновити синхронізацію зовнішніх пакетів';
$string['failed'] = 'Невдалі';
$string['finishscorm'] = 'Якщо ви закінчите перегляд цього ресурсу, {$a}';
$string['finishscormlinkname'] = 'клацніть тут для повернення на сторінку курсу';
$string['firstaccess'] = 'Перше звертання';
$string['firstattempt'] = 'Перша спроба';
$string['floating'] = 'Плаваючий';
$string['forceattemptalways'] = 'Завжди';
$string['forceattemptoncomplete'] = 'Коли попередня спроба була завершена, успішно або невдало';
$string['forcecompleted'] = 'Примусово завершено';
$string['forcecompleted_help'] = 'Якщо параметр включено, то поточній спробі примусово надається статус "завершено". (Може бути застосовано тільки в пакетах SCORM 1.2)';
$string['forcecompleteddesc'] = 'Цей параметр задає типове значення для налаштування примусового завершення';
$string['forcejavascript'] = 'Примусити користувачів до використання JavaScript';
$string['forcejavascript_desc'] = 'ПРивключеному (рекомендується) параметрі запобігається доступ до об’єктів SCORM, якщо в браузері користувача не підтримується/відключено JavaScript.
Якщо цей параметр відключено, то користувач може переглядати SCORM, але зв’язок не можливий та інформація про оцінку не буде збережена.';
$string['forcejavascriptmessage'] = 'Для перегляду цього об’єкту потрібен JavaScript, будь ласка, включіть JavaScript в налаштуваннях вашого браузера та спробуйте знову.';
$string['forcenewattempts'] = 'Примусово нова спроба';
$string['forcenewattempts_help'] = 'Є 3 варіанти:

* Ні – якщо попередня спроба була виконана, успішно або невдалою, студенту буде надано можливість увійти в режим перегляду або почати нову спробу.
* Коли попередня спроба була завершена, пройдена чи невдало — це залежить від того, що пакет SCORM встановлює статус «завершено», «пройдено» або «не вдалося».
* Завжди – кожен повторний вхід до активності SCORM створюватиме нову спробу, і учень не повертатиметься до тієї ж точки, яку він досяг під час попередньої спроби.';
$string['found'] = 'Знайти декларацію';
$string['frameheight'] = 'Ця привілея встановлює типову висоту для фрейма вікна';
$string['framewidth'] = 'Ця привілея встановлює типову ширину для фрейма вікна';
$string['fromleft'] = 'Зліва';
$string['fromtop'] = 'Згори';
$string['fullscreen'] = 'Заповнити весь екран';
$string['general'] = 'Головні дані';
$string['gradeaverage'] = 'Середня оцінка';
$string['gradeforattempt'] = 'Оцінка спроби';
$string['gradehighest'] = 'Краща оцінка';
$string['grademethod'] = 'Метод оцінювання';
$string['grademethod_help'] = 'Метод оцінювання задає, як визначається оцінка окремої спроби.

Існує 4 методи оцінювання:

* Об’єкти навчання - кількість закінчених/пройдених об’єктів навчання
* Краща оцінка - найвищий бал з отриманих у всіх пройдених навчальних об’єктах
* Середня оцінка - середня всіх балів
* Сумарна оцінка - сума всіх балів';
$string['grademethoddesc'] = 'Це налаштування встановлює типовий метод оцінювання в діяльності';
$string['gradereported'] = 'Звіт оцінювання';
$string['gradescoes'] = 'Об’єкти навчання';
$string['gradesettings'] = 'Параметри оцінювання';
$string['gradesum'] = 'Сумарна оцінка';
$string['height'] = 'Висота';
$string['hidden'] = 'Сховано';
$string['hidebrowse'] = 'Відключити режим перегляду';
$string['hidebrowse_help'] = 'Режим перегляду дозволяє студентам переглянути діяльність до початку реальної спроби. Якщо цей режим відключено, то кнопка перегляду буде прихована.';
$string['hidebrowsedesc'] = 'Це налаштування встановлює типове значення для попереднього перегляду - дозволяти або заборонити';
$string['hideexit'] = 'Заховати посилання на вихід';
$string['hidereview'] = 'Сховати кнопки перегляду';
$string['hidetoc'] = 'Показати структуру курсу';
$string['hidetoc_help'] = 'Це налаштування визначає, як зміст відображається в програвачі SCORM.';
$string['hidetocdesc'] = 'Це налаштування встановлює типове значення для показу структури курсу - показати або сховати';
$string['highestattempt'] = 'Найкраща спроба';
$string['identifier'] = 'Ідентифікатор питання';
$string['incomplete'] = 'Не завершено';
$string['indicator:cognitivedepth'] = 'SCORM: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутої студентом у діяльності SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM когнітивний';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної залученості, запропонованої діяльністю SCORM під час цього інтервалу аналізу (Рівні = Немає перегляду, Перегляд, Надіслати, Переглянути відгук)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальному розширенні, досягнутому студентом у діяльності SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM соц';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої заходами SCORM протягом цього інтервалу аналізу (Рівні = Без участі, лише учасник)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'Взаємодія';
$string['invalidactivity'] = 'Неправильна діяльність Scorm';
$string['invalidhacpsession'] = 'Неправильна HACP сесія';
$string['invalidmanifestname'] = 'Можна вибрати тільки файли imsmanifest.xml або .zip';
$string['invalidmanifestresource'] = 'УВАГА: в маніфесті вказано такі ресурси, але їх не знайдено:';
$string['invalidstatus'] = 'Недійсний статус';
$string['invalidurl'] = 'Вказано неправильну URL адресу';
$string['invalidurlhttpcheck'] = 'Вказано неправильну URL адресу. Повідомлення налагодження:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Останній доступ';
$string['lastaccess'] = 'Останній доступ';
$string['lastattempt'] = 'Остання завершена спроба';
$string['lastattemptlock'] = 'Закрити після фінальної спроби';
$string['lastattemptlock_help'] = 'Якщо включено, студент не має можливості запуску SCORM після використання всіх виділених йому спроб.';
$string['lastattemptlockdesc'] = 'Якщо включено, студент не має можливості запуску SCORM після використання всіх виділених йому спроб.';
$string['location'] = 'Показати панель локалізації';
$string['masteryoverride'] = 'Головний бал перевизначає статус';
$string['masteryoverride_help'] = 'Якщо параметрр включено і при виклику LMSFinish надано головний бал, а сирий бал також задано, то статус буде перераховано з використанням сирого балу та головного балу  і будь-який статус, переданий SCORM (включно з "незавершеним") буде перевизначено.';
$string['masteryoverridedesc'] = 'Це налаштування визначає типове, що перевизначає головний бал';
$string['max'] = 'Макс.оцінка';
$string['maximumattempts'] = 'Кількість спроб';
$string['maximumattempts_help'] = 'Цей параметр дозволяє обмежити кількість спроб. Він застосовується тільки для SCORM 1.2 і AICC пакетів.';
$string['maximumattemptsdesc'] = 'Це налаштування встановлює типове значення для максимальної кількості спроб в діяльності';
$string['maximumgradedesc'] = 'Це налаштування встановлює типове значення для оцінки за активність';
$string['menubar'] = 'Показати меню';
$string['min'] = 'Мін.оцінка';
$string['missing_attribute'] = 'Пропущений атрибут {$a->attr} в тегі {$a->tag}';
$string['missing_tag'] = 'Пропущений тег {$a->tag}';
$string['missingparam'] = 'Потрібно елемент, який відсутній або неправильний';
$string['mode'] = 'Режим';
$string['modulename'] = 'SCORM пакет';
$string['modulename_help'] = '<p>Пакет <b>SCORM</b> є набором файлів, які упаковані відповідно до узгодженого стандарту для навчальних об\'єктів.</p>
<p>Модуль <b>SCORM</b> дозволяє додати до курсу пакети SCORM або AICC, які завантажуються у вигляді архіву.</p>
<p>Вміст зазвичай відображається на кількох сторінках з навігацією між сторінками. Існують різні варіанти для відображення вмісту: у спливаючому вікні, зі змістом, з кнопками навігації і т.д.</p>
<p>Пакети <b>SCORM</b> зазвичай містять питання, при цьому оцінки за відповіді записуються до журналу оцінок.</p>
<p><b>SCORM</b> може бути використаний:</p>
<ul>
  <li>Для представлення мультимедійного контенту та анімації</li>
  <li>Як інструмент оцінювання</li>
</ul>';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM пакети';
$string['myaiccsessions'] = 'Мої сесії AICC';
$string['myattempts'] = 'Мої спроби';
$string['nav'] = 'Показувати навігацію';
$string['nav_help'] = 'Цей параметр визначає, чи потрібно показувати або приховувати кнопки навігації та їх розташування

Можливі 3 варіанти:

* Ні -Кнопки навігації не відображаються
* Під вмістом - Кнопки навігації відображаються нижче містимого пакету SCORM
* Плаваюче - Кнопки навігації є плаваючими, з позицією зверху та зліва, що задано в пакеті';
$string['navdesc'] = 'Цей параметр визначає, чи потрібно показувати або приховувати кнопки навігації та їх розташування';
$string['navigation'] = 'Навігація';
$string['navpositionleft'] = 'Положення кнопок навігації зліва в пікселях.';
$string['navpositiontop'] = 'Положення кнопок навігації зверху в пікселях.';
$string['networkdropped'] = 'Програвач SCORM визначив, що з’єднання не надійне або розірвалося. Якщо ви будете продовжувати працювати з цим SCORM-пакетом, то ваш результат може не зберегтися.<br>
Вам зараз потрібно вийти зі SCORM та повернутися пізніше, коли буде нормальне підключення до інтернету.';
$string['newattempt'] = 'Почати нову спробу';
$string['next'] = 'Продовжити';
$string['no_attributes'] = 'Тег {$a->tag} повинен мати атрибути';
$string['no_children'] = 'Тег {$a->tag} повинен мати підпорядковані';
$string['noactivity'] = 'Немає що звітувати';
$string['noattemptsallowed'] = 'Кількість дозволених спроб';
$string['noattemptsmade'] = 'Кількість спроб, які ви повинні зробити';
$string['nolimit'] = 'Необмежена кількість спроб';
$string['nomanifest'] = 'Неправильний файл пакету - не вистачає imsmanifest.xml або AICC структури';
$string['noprerequisites'] = 'На жаль, ви не маєте достатньо передумов для доступу до цієї діяльності';
$string['noreports'] = 'Немає звітів';
$string['normal'] = 'Звичайний';
$string['noscriptnoscorm'] = 'Ваш браузер не підтримує javascript або його використання відключене. Цей SCORM пакет може не програватися або не зберігати дані правильно.';
$string['not_corr_type'] = 'Не співвідносний тип для тегу {$a->tag}';
$string['notattempted'] = 'Не було спроб';
$string['notopenyet'] = 'Вибачте, ця діяльність недоступна до {$a}';
$string['objectives'] = 'Цілі';
$string['openafterclose'] = 'Ви вказали дату відкриття після дати закриття';
$string['optallstudents'] = 'всі користувачі';
$string['optattemptsonly'] = 'тільки користувачі зі спробами';
$string['options'] = 'Опції (Попереджено від деяких браузерів)';
$string['optionsadv'] = 'Параметри (розширені)';
$string['optionsadv_desc'] = 'Якщо перевірвірені ширина і висота будуть перераховані в якості додаткових налаштувань.';
$string['optnoattemptsonly'] = 'тільки користувачі без спроб';
$string['organization'] = 'Організація';
$string['organizations'] = 'Організації';
$string['othersettings'] = 'Додаткові параметри';
$string['package'] = 'Файл пакету';
$string['package_help'] = 'Файл пакету - це zip (або pif) файл, який містить файли курсу у форматі SCORM/AICC.';
$string['packagedir'] = 'Помилка файлової системи: Не створюється каталог пакету';
$string['packagefile'] = 'Не вказано файлу пакету';
$string['packagehdr'] = 'Пакет';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Цей параметр дозволяє вказати URL для пакета SCORM, а не вибирати файл через менеджер файлів.';
$string['page-mod-scorm-x'] = 'Тільки сторінка модуля SCORM';
$string['pagesize'] = 'Розмір сторінки';
$string['passed'] = 'Пропущено';
$string['php5'] = 'PHP 5 (DOMXML власна бібліотека)';
$string['pluginadministration'] = 'Керування SCORM';
$string['pluginname'] = 'SCORM пакет';
$string['popup'] = 'У новому вікні';
$string['popuplaunched'] = 'Це SCORM пакет було запущено у спливаючому вікні, якщо ви закінчили перегляд цього ресурсу, натисніть тут, щоб повернутися на сторінку курсу';
$string['popupmenu'] = 'У випадаючому меню';
$string['popupopen'] = 'Відкрити пакет у новому вікні';
$string['popupsblocked'] = 'Схоже, що спливаючі вікна заблоковані, цей модуль SCORM буде зупинено. Будь ласка, перевірте налаштування вашого браузера, перш ніж почати знову.';
$string['position_error'] = 'Тег {$a->tag} не може бути підпорядкованим тегу {$a->parent}';
$string['preferencespage'] = 'Налаштування тільки для цієї сторінки';
$string['preferencesuser'] = 'Параметри для цього звіту';
$string['prev'] = 'Попередній';
$string['privacy:metadata:aicc:data'] = 'Персональні дані, що передаються з підсистеми AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Цей плагін надсилає дані назовні за допомогою AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Статус уроку, який потрібно відстежувати';
$string['privacy:metadata:aicc_session:scormmode'] = 'Режим відстежуваного елемента';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Статус елемента, який слід відстежувати';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Час сеансу, який потрібно відстежувати';
$string['privacy:metadata:aicc_session:timecreated'] = 'Час створення відстежуваного елемента';
$string['privacy:metadata:attempt'] = 'Номер спроби';
$string['privacy:metadata:scoes_track:element'] = 'Назва елемента, який слід відстежувати';
$string['privacy:metadata:scoes_track:value'] = 'Значення заданого елемента';
$string['privacy:metadata:scorm_aicc_session'] = 'Інформація про сесію AICC HACP';
$string['privacy:metadata:timemodified'] = 'Час останньої зміни відстежуваного елемента';
$string['privacy:metadata:userid'] = 'Ідентифікатор користувача, який отримав доступ до активності SCORM';
$string['protectpackagedownloads'] = 'Захист завантаження пакету';
$string['protectpackagedownloads_desc'] = 'Якщо включено, то пакети SCORM можуть бути завантажені тільки якщо у користувача є право course:manageactivities. Якщо параметр відключено, пакети SCORM можна завантажити завжди (мобільними та іншими засобами).';
$string['raw'] = 'Попередня оцінка';
$string['regular'] = 'Правильна декларація';
$string['report'] = 'Звіт';
$string['reportcountallattempts'] = '{$a->nbattempts} спроб від {$a->nbusers} користувачів, {$a->nbresults} результатів';
$string['reportcountattempts'] = '{$a->nbresults} результатів ({$a->nbusers} користувачів)';
$string['reports'] = 'Звіти';
$string['repositorynotsupported'] = 'Цей репозиторій не підтримує пряме посилання на файл imsmanifest.xml.';
$string['response'] = 'Відповідь';
$string['result'] = 'Результат';
$string['results'] = 'Результати';
$string['review'] = 'Перегляд';
$string['reviewmode'] = 'Режим перегляду';
$string['rightanswer'] = 'Правильна відповідь';
$string['scoes'] = 'Об’єкти навчання';
$string['score'] = 'Оцінка';
$string['scorm:addinstance'] = 'Додати новий SCORM пакет';
$string['scorm:deleteownresponses'] = 'Видаляти власні спроби';
$string['scorm:deleteresponses'] = 'Видаляти SCORM спроби';
$string['scorm:savetrack'] = 'Зберігати записи';
$string['scorm:skipview'] = 'Пропустити перегляд';
$string['scorm:viewreport'] = 'Дозволити прокрутку вікна';
$string['scorm:viewscores'] = 'Бачити оцінки';
$string['scormclose'] = 'Доступно до';
$string['scormcourse'] = 'Навчальний курс';
$string['scormloggingoff'] = 'Програма входу відключена';
$string['scormloggingon'] = 'Програма входу включена';
$string['scormopen'] = 'Доступно від';
$string['scormresponsedeleted'] = 'Видалені спроби користувача';
$string['scormstandard'] = 'Режим стандартів SCORM';
$string['scormstandarddesc'] = 'Якщо вимкнено, Moodle дозволяє пакетам SCORM 1.2 зберігати більше, ніж дозволяє специфікація, і використовує параметри формату повного імені Moodle під час передачі імені користувача в пакет SCORM.';
$string['scormtype'] = 'Тип';
$string['scormtype_help'] = 'Цей параметр визначає, як пакет включається в курс. Є до 4 варіанти:

* Завантажений пакет - Дозволяє SCORM пакет через завантаження за допомогою файлового менеджера
* Зовнішній SCORM маніфест - Дозволяє визначити  URL до imsmanifest.xml. Примітка: Якщо URL має інше доменне ім\'я, ніж у вашого сайту, то "завантаження" є кращим варіантом, тому що інакше бали не зберігаються.
* В завантаженому архіві - Дозволяє вказати URL пакету. Пакет буде розархівовано та збережено локально, і оновлюватися, коли зовнішній пакет SCORM оновлюється.
* Зовнішній AICC URL - це URL для запуску однієї AICC діяльності. Псевдо пакет буде побудована навколо нього.';
$string['scrollbars'] = 'Дозволити прокрутку у вікні';
$string['search:activity'] = 'SCORM пакет - інформація про діяльність';
$string['selectall'] = 'Вибрати все';
$string['selectnone'] = 'Зняти виділення';
$string['show'] = 'Показати';
$string['sided'] = 'На стороні';
$string['skipview'] = 'Студент пропускає наповнення структурної сторінки';
$string['skipview_help'] = 'Це налаштування визначає, чи варто сторінки в структурі (не показувати). Якщо ви додаєте пакет тільки з одним об’єктом навчання сторінка зі структурою змісту може бути пропущена.';
$string['skipviewdesc'] = 'Це налаштування встановлює типове значення для пропуску частини структурної сторінки';
$string['slashargs'] = 'ПОПЕРЕДЖЕННЯ: слеш аргумент відключено на цьому сайті, тому, можливо, об\'єкти не функціонують як очікувалося!';
$string['stagesize'] = 'Розміри робочої області';
$string['stagesize_help'] = 'Ці два параметри налаштування об’єктів визначають висоту та ширину фрейма/вікна.';
$string['started'] = 'Розпочато';
$string['status'] = 'Статус';
$string['statusbar'] = 'Показувати рядок статусу';
$string['student_response'] = 'Відповідь';
$string['subplugintype_scormreport'] = 'Звіт';
$string['subplugintype_scormreport_plural'] = 'Звіти';
$string['suspended'] = 'Заблокований';
$string['syntax'] = 'Синтаксична помилка';
$string['tag_error'] = 'Невідомий тег ({$a->tag}) з цим контентом: {$a->value}';
$string['time'] = 'Час';
$string['title'] = 'Заголовок';
$string['toc'] = 'Зміст';
$string['too_many_attributes'] = 'Тег {$a->tag} має занадто багато атрибутів';
$string['too_many_children'] = 'Тег {$a->tag} має занадто багато похідних';
$string['toolbar'] = 'Показати панель інструментів';
$string['totaltime'] = 'Час';
$string['trackcorrectcount'] = 'Правильний підрахунок';
$string['trackcorrectcount_help'] = 'Кількість правильних результатів для питання';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Це ідентифікатор, який надається SCORM пакетом для цього питання, специфікація SCORM не дозволяє надавати повний текст запитання.';
$string['trackingloose'] = 'ПОПЕРЕДЖЕННЯ: Дані записів цього пакету було втрачено!';
$string['tracklatency'] = 'Латентність';
$string['tracklatency_help'] = 'Час, який пройшов між моментом, коли студент отримав можливість для відповіді та часом його першої відповіді.';
$string['trackpattern'] = 'Шаблон';
$string['trackpattern_help'] = 'Це те, що буде правильною відповіддю на питання, воно не показує відповідь студентів.';
$string['trackresponse'] = 'Відповідь';
$string['trackresponse_help'] = 'Ця відповідь зроблена студентом на це питання';
$string['trackresult'] = 'Результат';
$string['trackresult_help'] = 'Підсумок, що базується на відповіді студента та правильному результаті';
$string['trackscoremax'] = 'Макс.оцінка';
$string['trackscoremax_help'] = 'Максимальне значення в діапазоні вихідних балів';
$string['trackscoremin'] = 'Мін.оцінка';
$string['trackscoremin_help'] = 'Мінімальне значення в діапазоні вихідних балів';
$string['trackscoreraw'] = 'Попередня оцінка';
$string['trackscoreraw_help'] = 'Номер, який показує продуктивність студента в порівнянні з мінімальним та максимальним значенням';
$string['tracksuspenddata'] = 'Заблоковані дані';
$string['tracksuspenddata_help'] = 'Місце для зберігання та видобування даних між сеансами студента';
$string['tracktime'] = 'Час';
$string['tracktime_help'] = 'Час коли було розпочато спробу';
$string['tracktype'] = 'Тип';
$string['tracktype_help'] = 'Тип питання, наприклад, "вибір" або "коротка відповідь".';
$string['trackweight'] = 'Вага';
$string['trackweight_help'] = 'Вага оцінювання питання при розрахунку балів.';
$string['type'] = 'Тип';
$string['typeaiccurl'] = 'URL-адреса зовнішньої AICC';
$string['typeexternal'] = 'Маніфест зовнішнього SCORM';
$string['typelocal'] = 'Звантажений пакет';
$string['typelocalsync'] = 'Завантажений пакет';
$string['undercontent'] = 'Під змістом';
$string['unziperror'] = 'Помилка сталася в процесі розпакування пакету';
$string['updatefreq'] = 'Частота авто-оновлення';
$string['updatefreq_error'] = 'Частота автоматичного оновлення може бути встановлена тільки для файлу зовнішнього пакету';
$string['updatefreq_help'] = 'Це дозволяє автоматично завантажувати та оновлювати зовнішній пакет';
$string['updatefreqdesc'] = 'Це налаштування встановлює типове значення для частоти автооновлення діяльності';
$string['validateascorm'] = 'Підтвердити пакет';
$string['validation'] = 'Підтвердження результату';
$string['validationtype'] = 'Це уподобання встановлює бібліотеку DOMXML, використану для підтвердження SCORM декларації. Якщо ви не знаєте, то залиште порожнім.';
$string['value'] = 'Значення';
$string['versionwarning'] = 'Версія декларації старіше ніж 1.3, не вистачає тега {$a->tag}';
$string['viewallreports'] = 'Переглянути звіти {$a} спроб';
$string['viewalluserreports'] = 'Переглянути звіти {$a} користувачів';
$string['whatgrade'] = 'Оцінювання спроб';
$string['whatgrade_help'] = 'Якщо дозволено кілька спроб, то цей параметр визначає, яка оцінка буде записана в журнал оцінок: найвища, середня, оцінка першої або останньої закінченої спроби. До останньої закінченої спроби не відносяться невдалі спроби.

Вказівки з управління кількома спробами:

* можливість почати нову спробу забезпечує прапорець вище кнопки "Ввести" на сторінці структури контенту. Впевніться, що ви надали доступ до цієї сторінки, якщо хочете дозволити більше однієї спроби.
* деякі пакети SCORM "розуміють" особливості застосування нових спроб, а деякі - ні. Це означає, що якщо студент повторно входить в існуючі спроби, а внутрішня логіка SCORM не дозволяє запобігти перезапису попередніх спроб, то вони можуть бути перезаписані, хоча спроба була завершена.
* налаштування "Примусово закінчувати", "Примусова нова спроба" також забезпечує подальше керування кількома спробами.';
$string['whatgradedesc'] = 'Цей параметр встановлює типовий метод оцінювання спроб (найвищий або середній бал, бали першої або останньої спроби).';
$string['width'] = 'Ширина';
$string['window'] = 'Вікно';
$string['youmustselectastatus'] = 'Ви повинні вибрати статус, який потрібно вимагати';
