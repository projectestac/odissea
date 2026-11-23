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
 * Strings for component 'elang', language 'uk', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'Дозволені мови вмісту';
$string['allowedlanguages_desc'] = 'Мови вмісту, які пропонуються під час створення або редагування відеодиктанту. Не вибирайте жодної, щоб пропонувався повний список мов. Діяльність зберігає збережену мову, навіть якщо згодом ви вилучите її звідси.';
$string['allowtranscriptdownload'] = 'Завантаження розшифровки учасниками';
$string['allowtranscriptdownload_help'] = 'Коли увімкнено, учасники можуть завантажити робочий аркуш розшифровки з прихованим кожним пропуском у форматі PDF, Word, OpenDocument або текст.

Типово вимкнено. Викладачі з відповідним правом можуть завантажити розшифровку завжди, незалежно від цього налаштування.';
$string['allowtranscriptdownload_label'] = 'Учасники можуть завантажити робочий аркуш';
$string['completiondetail_completionfinishattempt'] = 'Завершити спробу';
$string['completionfinishattempt'] = 'Учасник має завершити спробу';
$string['cuepausemode'] = 'Пауза наприкінці субтитру';
$string['cuepausemode_auto'] = 'Автоматично';
$string['cuepausemode_help'] = 'Чи зупиняється медіафайл наприкінці субтитру.

* Автоматично — відтворення триває й зупиняється наприкінці субтитру лише доти, доки саме над ним триває робота, тобто після клацання по ньому чи по одному з його пропусків або коли фокус клавіатури перебуває в одному з них.
* Зупинятися на кожному субтитрі без відповіді — відтворення зупиняється наприкінці кожного субтитру, у якому лишився порожній пропуск, і чекає на продовження.
* Ніколи не зупинятися — відтворення триває до кінця медіафайлу.

Жоден із перших двох режимів не зупиняється на субтитрі, усі пропуски якого заповнено: це вже зроблена робота, і зупинка там вимагала б натискання клавіші без жодного наслідку. Це також означає, що другий прохід вправою зупиняється лише там, де чогось іще бракує.';
$string['cuepausemode_nostop'] = 'Ніколи не зупинятися';
$string['cuepausemode_stop'] = 'Зупинятися на кожному субтитрі без відповіді';
$string['editcontent'] = 'Редагувати вміст';
$string['editor_addcue'] = 'Додати сегмент';
$string['editor_addgap'] = 'Створити пропуск із виділеного';
$string['editor_addhint'] = 'Додати підказку';
$string['editor_addvariant'] = 'Додати варіант';
$string['editor_advanced'] = 'Додаткові налаштування';
$string['editor_algoexact'] = 'Точний збіг';
$string['editor_algorithm'] = 'Порівняння відповідей';
$string['editor_algowordrecognized'] = 'Приймати близькі відповіді';
$string['editor_answers'] = 'Прийнятні варіанти';
$string['editor_autosaved'] = 'Усі зміни збережено.';
$string['editor_autosaveerror'] = 'Автоматичне збереження не вдалося — скористайтеся кнопкою «Зберегти».';
$string['editor_captureend'] = 'Задати кінець із відтворення';
$string['editor_capturestart'] = 'Задати початок із відтворення';
$string['editor_cueactions'] = 'Дії із сегментом';
$string['editor_cuecount'] = 'Сегменти: {$a}';
$string['editor_currentmedia'] = 'Поточний медіафайл:';
$string['editor_deletecue'] = 'Вилучити сегмент';
$string['editor_deletegap'] = 'Вилучити пропуск';
$string['editor_emptytranscript'] = '(тексту ще немає)';
$string['editor_endtime'] = 'Час завершення';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Пропуски: {$a}';
$string['editor_gaprange'] = 'Розташування пропуску (символи)';
$string['editor_gotomedia'] = 'Перейти до «Медіа»';
$string['editor_heading'] = 'Редагувати субтитри та пропуски';
$string['editor_hints'] = 'Підказки';
$string['editor_hinttext'] = 'Текст підказки';
$string['editor_hinttype'] = 'Тип';
$string['editor_hinttype_firstletter'] = 'Перша літера';
$string['editor_hinttype_partial'] = 'Часткова';
$string['editor_hinttype_solution'] = 'Відповідь';
$string['editor_hinttype_text'] = 'Довільний текст';
$string['editor_hinttype_translation'] = 'Переклад';
$string['editor_hinttype_wordlength'] = 'Довжина слова';
$string['editor_import'] = 'Імпортувати субтитри';
$string['editor_importappend'] = 'Додати до наявних сегментів';
$string['editor_importapply'] = 'Імпортувати';
$string['editor_importcancel'] = 'Скасувати';
$string['editor_importcheck'] = 'Перевірити вміст';
$string['editor_importchecking'] = 'Перевіряємо…';
$string['editor_importcuecount'] = 'Знайдені сегменти';
$string['editor_importduration'] = 'Тривалість';
$string['editor_importedcues'] = 'Імпортовані сегменти: {$a}';
$string['editor_importfilehint'] = 'Виберіть файл WebVTT (.vtt) або SubRip (.srt) із субтитрами.';
$string['editor_importformat'] = 'Формат';
$string['editor_importfromfile'] = 'Завантажити файл';
$string['editor_importfromtext'] = 'Вставити текст';
$string['editor_importgapcount'] = 'Знайдені пропуски';
$string['editor_importhint'] = 'Вставте вміст WebVTT або SubRip і імпортуйте його як сегменти.';
$string['editor_importparseerror'] = 'Цей вміст не вдалося прочитати ні як WebVTT, ні як SubRip.';
$string['editor_importpastedtext'] = 'Вставлений текст';
$string['editor_importreaderror'] = 'Файл не вдалося прочитати.';
$string['editor_importready'] = 'Готово до імпорту';
$string['editor_importreplace'] = 'Замінити всі сегменти';
$string['editor_importreplacedcues'] = 'Сегменти замінено; нових імпортовано: {$a}';
$string['editor_importsource'] = 'Джерело';
$string['editor_importsummary'] = 'Що знайдено';
$string['editor_importtoolarge'] = 'Цей файл має {$a->size}; імпорт приймає щонайбільше {$a->max}.';
$string['editor_importwrongtype'] = 'Виберіть файл субтитрів ({$a}).';
$string['editor_insertafter'] = 'Вставити сегмент після';
$string['editor_insertbefore'] = 'Вставити сегмент перед';
$string['editor_invalidtime'] = 'Введіть час у форматі mm:ss.SSS, наприклад 01:05.400.';
$string['editor_linkurl'] = 'Посилання для довідки';
$string['editor_linkurl_help'] = 'Показується поряд із пропуском як місце, де можна подивитися слово. Залиште порожнім, якщо посилання не потрібне.';
$string['editor_loaderror'] = 'Не вдалося завантажити редактор. Перезавантажте сторінку.';
$string['editor_loading'] = 'Завантажуємо редактор…';
$string['editor_maxlength'] = 'Найбільша довжина';
$string['editor_maxlength_help'] = 'Обмежує, скільки учасник може ввести. 0 означає без обмеження.';
$string['editor_media'] = 'Медіа';
$string['editor_mediafile'] = 'Завантажений файл';
$string['editor_mediakind'] = 'Тип медіафайлу';
$string['editor_medianone'] = 'Немає';
$string['editor_mediaprovider'] = 'Постачальник';
$string['editor_mediaproviderref'] = 'Посилання постачальника';
$string['editor_mediaproviderrefhint'] = 'Ідентифікатор або посилання на відео у звичному вигляді (наприклад youtu.be/…).';
$string['editor_mediasaved'] = 'Медіафайл збережено.';
$string['editor_mediaurl'] = 'Пряма адреса медіафайлу';
$string['editor_nocues'] = 'Сегментів ще немає. Додайте сегмент або імпортуйте субтитри.';
$string['editor_nocueselected'] = 'Виберіть сегмент зі списку, щоб його відредагувати.';
$string['editor_nocuesmatch'] = 'Жоден сегмент не відповідає цьому пошуку.';
$string['editor_nogaps'] = 'Немає пропусків';
$string['editor_nomedia'] = 'немає';
$string['editor_nomedianotice'] = 'Спершу додайте відео- чи аудіофайл на вкладці «Медіа». Субтитри синхронізуються з медіафайлом, тож редактору він потрібен, перш ніж працювати із сегментами та пропусками.';
$string['editor_novideotrack'] = 'Цей браузер не може декодувати відеодоріжку цього медіафайлу (відтворюється лише звук); учасники бачили б чорний екран. Перекодуйте файл у H.264/MP4 (наприклад, за допомогою ffmpeg або HandBrake) і завантажте його ще раз.';
$string['editor_onboardinggaps'] = 'Виділіть слово в сегменті й зробіть із нього пропуск.';
$string['editor_onboardingimport'] = 'Імпортуйте субтитри WebVTT або SubRip чи додайте сегменти вручну.';
$string['editor_onboardingintro'] = 'Створіть вправу в три кроки:';
$string['editor_onboardingmedia'] = 'Виберіть медіафайл (завантаження, адреса або постачальник).';
$string['editor_onboardingtitle'] = 'Почніть свою вправу';
$string['editor_onlywarnings'] = 'Лише сегменти з попередженнями';
$string['editor_parsegaps'] = 'Розпізнавати позначки пропусків: [слово] створює пропуск із дозволеними підказками, {слово} — без них.';
$string['editor_penalty'] = 'Зниження балу';
$string['editor_poster'] = 'Зображення обкладинки';
$string['editor_preview'] = 'Перегляд очима учасника';
$string['editor_publish'] = 'Опублікувати';
$string['editor_published'] = 'Версію опубліковано.';
$string['editor_removehint'] = 'Вилучити підказку';
$string['editor_removevariant'] = 'Вилучити';
$string['editor_ruleapplied'] = 'За правилом створено пропусків: %count%.';
$string['editor_ruleapply'] = 'Застосувати пропуски: %count%';
$string['editor_ruleerror'] = 'Не вдалося створити пропуски.';
$string['editor_ruleeverynth'] = 'Кожне n-те слово';
$string['editor_rulefound'] = 'Правило знайшло пропусків: %count%.';
$string['editor_rulegenerate'] = 'Створити пропуски';
$string['editor_ruleinterval'] = 'Крок (n)';
$string['editor_ruletype'] = 'Правило пропусків';
$string['editor_rulewordlist'] = 'Слова, які приховати';
$string['editor_rulewords'] = 'Список слів';
$string['editor_save'] = 'Зберегти чернетку';
$string['editor_saved'] = 'Чернетку збережено.';
$string['editor_saveerror'] = 'Не вдалося зберегти чернетку.';
$string['editor_savemedia'] = 'Зберегти медіафайл';
$string['editor_saving'] = 'Зберігаємо…';
$string['editor_searchcues'] = 'Шукати в сегментах';
$string['editor_selecttext'] = 'Спершу виділіть у розшифровці слово, яке треба приховати.';
$string['editor_solution'] = 'Відповідь';
$string['editor_starttime'] = 'Час початку';
$string['editor_transcript'] = 'Розшифровка';
$string['editor_unsaved'] = 'Незбережені зміни';
$string['editor_uploadmedia'] = 'Завантажити медіафайли';
$string['editor_variantisregex'] = 'Обробляти {$a} як регулярний вираз';
$string['editor_variantmatching'] = 'Як порівнюються прийнятні варіанти';
$string['editor_warnemptysolution'] = 'Пропуск без відповіді';
$string['editor_warnnotranscript'] = 'Немає тексту';
$string['editor_warntiming'] = 'Кінець не пізніше за початок';
$string['editor_waveform'] = 'Форма звукової хвилі';
$string['elang:addinstance'] = 'Додавати новий відеодиктант';
$string['elang:attempt'] = 'Виконувати відеодиктант';
$string['elang:deleteattempts'] = 'Вилучати спроби учасників';
$string['elang:exportreports'] = 'Експортувати звіти з персональними даними';
$string['elang:exportsolution'] = 'Експортувати повну розшифровку з відповідями';
$string['elang:exporttranscript'] = 'Експортувати робочий аркуш як документ';
$string['elang:manage'] = 'Створювати й редагувати вміст вправ';
$string['elang:useregex'] = 'Використовувати регулярні вирази у прийнятних відповідях';
$string['elang:view'] = 'Переглядати відеодиктант';
$string['elang:viewreports'] = 'Переглядати звіти учасників';
$string['error_attemptnotinprogress'] = 'Ця спроба вже не триває.';
$string['error_couldnotobtainlock'] = 'Не вдалося отримати блокування для цієї дії. Спробуйте ще раз.';
$string['error_draftrevisionmismatch'] = 'Ця чернетка змінилася відтоді, як ви її завантажили. Перезавантажте її й спробуйте ще раз.';
$string['error_duplicatecuekey'] = 'Два сегменти мають спільний ключ «{$a}»; кожному сегменту потрібен унікальний ключ.';
$string['error_duplicategapkey'] = 'Два пропуски в одному сегменті мають спільний ключ «{$a}»; кожному пропуску потрібен унікальний ключ.';
$string['error_duplicatehintlevel'] = 'Пропуск має дві підказки на рівні {$a}; кожен рівень має бути унікальним.';
$string['error_gapnotinattemptversion'] = 'Цей пропуск не належить до версії вправи цієї спроби.';
$string['error_importnocues'] = 'З цього вмісту не вдалося прочитати жодного субтитру. У файлі WebVTT або SubRip над кожним субтитром є рядок часу, наприклад 00:00:01.000 --> 00:00:04.000.';
$string['error_importnotutf8'] = 'Цей файл не є коректним UTF-8. Найімовірніше, його збережено в давнішому кодуванні — відкрийте його в текстовому редакторі й збережіть знову як UTF-8.';
$string['error_importtoolarge'] = 'Цей файл має {$a->size}; імпорт приймає щонайбільше {$a->max}. Файл субтитрів до запису заняття значно менший, тож це навряд чи він.';
$string['error_importtoomanycues'] = 'Цей файл містить субтитрів: {$a->count}; імпорт приймає щонайбільше {$a->max}.';
$string['error_invalidcuepausemode'] = 'Виберіть один із запропонованих варіантів паузи наприкінці субтитру.';
$string['error_invalidgradingalgorithm'] = 'Алгоритм оцінювання «{$a}» не є ані exact, ані wordrecognized.';
$string['error_invalidhinttype'] = 'Тип підказки «{$a}» не належить до дозволених типів.';
$string['error_invalidisregex'] = 'Позначка регулярного виразу для варіанта має бути 0 або 1.';
$string['error_invalidmediakind'] = 'Вибраний тип медіафайлу не є ані file, ані url, ані provider.';
$string['error_invalidpenalty'] = 'Зниження балу за підказку має бути від 0 до 1.';
$string['error_invalidproviderref'] = '«{$a}» не є розпізнаним ідентифікатором чи посиланням на відео для цього постачальника.';
$string['error_invalidregexpattern'] = '«{$a}» не є коректним регулярним виразом.';
$string['error_invalidsolutionavailability'] = 'Виберіть один із запропонованих варіантів того, коли учасники можуть бачити розшифровку з відповідями.';
$string['error_invalidsourceurl'] = 'Введіть повну адресу, що починається з http:// або https://, чи посилання на YouTube або Vimeo.';
$string['error_invalidsubtitleposition'] = 'Виберіть один із запропонованих варіантів розташування субтитрів.';
$string['error_invalidv1cuejson'] = 'Цей сегмент із версії 1 не вдалося опрацювати.';
$string['error_negativegapoffset'] = 'Розташування та довжина пропуску не можуть бути від’ємними.';
$string['error_noaccesstoattempt'] = 'Ви не маєте доступу до цієї спроби.';
$string['error_nomorehints'] = 'Для цього пропуску більше підказок немає.';
$string['error_nopublishedversion'] = 'Ця вправа ще не має опублікованого вмісту.';
$string['error_responsetoolong'] = 'Ваша відповідь задовга. Для цього пропуску максимум — {$a} символів.';
$string['error_solutionnotavailable'] = 'Розшифровка з відповідями недоступна вам у цій діяльності.';
$string['error_staleattemptstate'] = 'Ваш вигляд цієї спроби застарів. Перезавантажте поточний стан і спробуйте ще раз.';
$string['error_transcriptnotavailable'] = 'У цій діяльності немає розшифровки для завантаження.';
$string['error_unknowngaprule'] = 'Невідомий тип правила пропусків «{$a}».';
$string['error_unknownmediaprovider'] = '«{$a}» не належить до підтримуваних постачальників медіа.';
$string['error_versionnotadraft'] = 'Редагувати можна лише версію у стані чернетки.';
$string['error_versionnotfound'] = 'Цієї версії вправи вже не існує.';
$string['error_versionnotpublishable'] = 'Цю версію не можна опублікувати: {$a}';
$string['export_audienceaftersubmission'] = 'Учасники можуть завантажити це після завершення спроби';
$string['export_audiencealways'] = 'Учасники можуть завантажити це будь-коли';
$string['export_audiencestaff'] = 'Лише викладачі з відповідним правом — учасникам не пропонується';
$string['export_docx'] = 'Завантажити як Word (DOCX)';
$string['export_downloadpdf'] = 'Завантажити PDF';
$string['export_heading'] = 'Експортувати розшифровку';
$string['export_intro'] = 'Завантажте розшифровку цієї вправи в кількох форматах.';
$string['export_moreformats'] = 'Інші формати';
$string['export_nocontent'] = 'Опублікованої розшифровки для експорту ще немає.';
$string['export_odt'] = 'Завантажити як OpenDocument (ODT)';
$string['export_pdf'] = 'Завантажити як PDF';
$string['export_solution'] = 'Розшифровка з відповідями';
$string['export_solutionhint'] = 'Повний текст із показаною відповіддю для кожного пропуску.';
$string['export_text'] = 'Завантажити як текст';
$string['export_versionnote'] = 'Експорт спирається на поточну опубліковану версію цієї вправи.';
$string['export_worksheet'] = 'Робочий аркуш (пропуски приховано)';
$string['export_worksheethint'] = 'Текст із прихованим кожним пропуском. Готовий до роздавання як матеріал для учасників.';
$string['exporttranscript'] = 'Експортувати розшифровку';
$string['filearea_media'] = 'Медіа';
$string['filearea_poster'] = 'Зображення обкладинки';
$string['gradingheading'] = 'Оцінювання відповідей';
$string['import_badtiming'] = 'Не вдалося прочитати рядок часу: {$a}';
$string['import_emptytranscript'] = 'Сегмент без тексту пропущено.';
$string['import_warnlinetoolong'] = 'Блок {$a->block} пропущено: у ньому є рядок, довший за {$a->max} символів, а це не рядок субтитру.';
$string['jarothreshold'] = 'Поріг подібності';
$string['jarothreshold_help'] = 'Для пропусків із налаштуванням «Приймати близькі відповіді» це найменша подібність Jaro між очікуваною та введеною відповіддю. Значення 1 вимагає точного збігу після нормалізації, властивої мові; нижчі значення приймають дедалі відмінніші написання.';
$string['jarothresholdrange'] = 'Поріг має бути від 0 до 1.';
$string['language'] = 'Мова вмісту';
$string['language_help'] = 'Виберіть мову вмісту вправи. Вона визначає, як порівнюються відповіді, зокрема обробку великих і малих літер та транслітерацію. Виберіть «Загальна (не вказано)», якщо обробка, властива мові, не потрібна. Нові версії вмісту беруть це налаштування за початкове.';
$string['language_none'] = 'Загальна (не вказано)';
$string['media_cuenote'] = 'Наявні субтитри та пропуски зберігаються, коли ви змінюєте медіафайл. Їхній час не підлаштовується, тож перевірте їх потім у редакторі.';
$string['media_current'] = 'Поточний медіафайл';
$string['media_heading'] = 'Медіа';
$string['media_intro'] = 'Виберіть відео або звук, на якому ґрунтується ця вправа. Субтитри синхронізуються з ним, тож це перший крок.';
$string['media_none'] = 'Для цієї вправи ще не задано медіафайл.';
$string['media_othersource'] = 'Інше джерело';
$string['media_providerhint'] = 'Розпізнані постачальники: {$a}. Будь-яка інша адреса використовується як пряма адреса медіафайлу.';
$string['media_sourceurl'] = 'Адреса медіафайлу';
$string['media_sourceurl_help'] = 'Вставте адресу відео замість завантаження файлу — посилання на YouTube чи Vimeo або пряму адресу медіафайлу.

Адреса, введена тут, замінює завантажений файл. Залиште її порожньою, щоб скористатися завантаженням вище.

Відео постачальника відтворюється у власному кадрі постачальника, який не повідомляє час відтворення. Така вправа завжди показує субтитри під медіафайлом і ніколи не зупиняється наприкінці субтитру.

**Куди йдуть дані.** Кадр YouTube або Vimeo з’єднує браузер кожного учасника з цією компанією, і вона отримує IP-адресу та відомості про пристрій. Типово вправа запитує згоди перед цим. Якщо ваш заклад має власний медіасервер — Opencast, Panopto, Kaltura чи подібний — вставте натомість пряму адресу файлу звідти: вона обробляється як звичайна адреса медіа, зберігає вибране розташування субтитрів і налаштування паузи, і жодна третя сторона не залучається.';
$string['migratev1_approvalheading'] = 'Перенесено, очікує перевірки';
$string['migratev1_approvebutton'] = 'Схвалити це перенесення';
$string['migratev1_approved'] = 'Відеодиктант {$a} позначено як схвалений.';
$string['migratev1_colactivity'] = 'Діяльність';
$string['migratev1_colalgorithm'] = 'Алгоритм оцінювання';
$string['migratev1_colcues'] = 'Сегменти';
$string['migratev1_colgaps'] = 'Пропуски';
$string['migratev1_colissues'] = 'Проблеми';
$string['migratev1_collearners'] = 'Учасники';
$string['migratev1_confirmdecommission'] = 'Ця дія НЕЗВОРОТНО вилучає давні таблиці версії 1 та стовпець elang.options. Скасувати неможливо. Продовжити?';
$string['migratev1_confirmmigrate'] = 'Ця дія ставить у чергу фонове завдання, яке запише дані версії 2 для кожної діяльності вище. Таблиці версії 1 та elang.options залишаються недоторканими. Продовжити?';
$string['migratev1_decommissionblocked'] = 'Вилучення все ще заблоковано; див. список нижче.';
$string['migratev1_decommissionblockedintro'] = 'Вилучення заблоковано, доки:';
$string['migratev1_decommissionbutton'] = 'Вилучити давні дані версії 1';
$string['migratev1_decommissioned'] = 'Давні дані версії 1 вилучено.';
$string['migratev1_decommissionheading'] = 'Виведення даних версії 1 з ужитку';
$string['migratev1_decommissionready'] = 'Усі діяльності версії 1 перенесено та схвалено. Давні таблиці та elang.options тепер можна вилучити. Цю дію не можна скасувати.';
$string['migratev1_heading'] = 'Перенести діяльності версії 1';
$string['migratev1_migratebutton'] = 'Перенести ці діяльності';
$string['migratev1_noissues'] = 'Немає';
$string['migratev1_nonepending'] = 'Немає діяльностей версії 1, що очікують перенесення.';
$string['migratev1_nonependingapproval'] = 'Немає перенесених діяльностей, що очікують перевірки.';
$string['migratev1_notablespresent'] = 'На цьому сайті не знайдено давніх таблиць версії 1. Переносити нічого.';
$string['migratev1_parseerrorcount'] = 'Сегменти, які не вдалося опрацювати: {$a}';
$string['migratev1_pendingheading'] = 'Ще не перенесено';
$string['migratev1_queued'] = 'Завдання перенесення поставлено в чергу. Воно виконається під час наступного запуску cron або одразу через admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'Перевірено: перенесені дані збігаються з джерелом версії 1 без розбіжностей.';
$string['migratev1_verifieddiscrepancies'] = 'Перевірка виявила розбіжності з джерелом версії 1: {$a}';
$string['migratev1_verifyfailed'] = 'Не вдалося перевірити цю діяльність: {$a}';
$string['modulename'] = 'Відеодиктант';
$string['modulename_help'] = 'Діяльність «Відеодиктант» дає учасникам змогу заповнювати пропуски в субтитрах із часовими позначками, дивлячись або слухаючи відео.

Викладачі імпортують файл субтитрів WebVTT або SubRip, позначають слова чи вирази як пропуски й налаштовують, наскільки суворо порівнюються відповіді. Учасники проходять розшифровку сегмент за сегментом, просять підказки зі зниженням балу й одразу отримують відгук.';
$string['modulenameplural'] = 'Відеодиктанти';
$string['nav_exportshort'] = 'Експорт';
$string['nav_media'] = 'Медіа';
$string['nav_reports'] = 'Спроби';
$string['nav_subtitles'] = 'Субтитри та пропуски';
$string['noinstances'] = 'У цьому курсі немає відеодиктантів.';
$string['overview_attempts'] = 'Спроби';
$string['playbackheading'] = 'Відтворення та субтитри';
$string['playbackoverlayhint'] = 'Субтитр, накладений на зображення, показує лише той субтитр, що звучить саме зараз, тож відтворення завжди зупиняється наприкінці субтитру, у якому ще лишилися незаповнені пропуски. Тут немає чого обирати.';
$string['playbackproviderhint'] = 'Відео з YouTube або Vimeo відтворює постачальник у власному кадрі, який не повідомляє час відтворення. Така вправа завжди показує субтитри під медіафайлом і ніколи не зупиняється наприкінці субтитру, хоч би що було вибрано вище. Завантажені файли та прямі адреси медіа дотримуються обох налаштувань.';
$string['player_check'] = 'Перевірити відповідь';
$string['player_consentaccept'] = 'Завантажити відео з {$a}';
$string['player_consentdetail'] = 'Відтворення з’єднує ваш браузер із {$a}. {$a} отримує вашу IP-адресу та відомості про пристрій і може прочитати куки, які вже встановив. Нічого не надсилається, доки ви не вирішите завантажити відео.';
$string['player_consentheading'] = 'Це відео надає {$a}';
$string['player_finish'] = 'Завершити спробу';
$string['player_finished'] = 'Спробу завершено. Бали: %score%%';
$string['player_finishincomplete'] = 'Порожніх пропусків залишилося: {$a}. Усе одно завершити спробу?';
$string['player_gaplabel'] = 'Пропуск %gap%';
$string['player_gaplink'] = 'Відкрити посилання';
$string['player_hint'] = 'Показати підказку';
$string['player_loaderror'] = 'Не вдалося завантажити вправу. Перезавантажте сторінку.';
$string['player_loading'] = 'Завантажуємо вправу…';
$string['player_nocontent'] = 'Вміст вправи ще не опубліковано. Завітайте пізніше.';
$string['player_novideotrack'] = 'Ваш браузер не може показати відеодоріжку цього медіафайлу; звук усе одно відтворюватиметься. Повідомте викладача.';
$string['player_outdatedattempt'] = 'Цю вправу оновлено відтоді, як ви почали цю спробу. Ви продовжуєте на попередньому вмісті; завершіть цю спробу, щоб наступного разу працювати з оновленою вправою.';
$string['player_progress'] = 'Відповіді дано на {$a->done} із {$a->total} пропусків';
$string['player_ready'] = 'Вправу підготовлено.';
$string['player_scorelabel'] = 'Бали: %score%%';
$string['player_stateaccepted'] = 'Прийнято';
$string['player_statecorrect'] = 'Правильно';
$string['player_statehinted'] = 'Використано підказку';
$string['player_stateincorrect'] = 'Неправильно';
$string['player_submitfailed'] = 'Не вдалося зберегти вашу відповідь. Спробуйте ще раз.';
$string['player_transcriptheading'] = 'Розшифровка';
$string['pluginadministration'] = 'Керування відеодиктантом';
$string['pluginname'] = 'Відеодиктант';
$string['privacy_metadata_elang'] = 'Для кожної діяльності — запис про те, хто схвалив односпрямоване перенесення її вмісту з 1.x.';
$string['privacy_metadata_elang_attempt'] = 'Для кожної спроби у вправі діяльність зберігає, хто її виконав, коли, як далеко просунувся та як її оцінено.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'Скільки пропусків учасник заповнив у цій спробі.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'Порядковий номер цієї спроби для користувача та діяльності.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'Скільки пропусків прийнято як правильні в цій спробі.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'Скільки пропусків заповнено з точним посимвольним збігом у цій спробі.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'Для скількох пропусків учасник попросив підказку в цій спробі.';
$string['privacy_metadata_elang_attempt_score'] = 'Бали, отримані в цій спробі.';
$string['privacy_metadata_elang_attempt_state'] = 'Чи спроба триває, завершена або покинута.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'Час завершення спроби.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'Час останнього оновлення спроби.';
$string['privacy_metadata_elang_attempt_timestart'] = 'Час початку спроби.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'Загальна кількість пропусків у версії вправи, до якої належить ця спроба.';
$string['privacy_metadata_elang_attempt_userid'] = 'Ідентифікатор користувача, який виконав спробу.';
$string['privacy_metadata_elang_attempt_versionid'] = 'Версія вправи, щодо якої виконано цю спробу.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'Користувач, який схвалив перенесення цієї діяльності з mod_elang 1.x. Зберігається, щоб схвалення залишалося простежуваним.';
$string['privacy_metadata_elang_response'] = 'Для кожного пропуску, який учасник заповнює у межах спроби, діяльність зберігає текст відповіді та спосіб її оцінювання.';
$string['privacy_metadata_elang_response_accepted'] = 'Чи прийнято відповідь як правильну для цього пропуску.';
$string['privacy_metadata_elang_response_hintlevel'] = 'Найвищий рівень підказки, показаний учасникові для цього пропуску.';
$string['privacy_metadata_elang_response_responsetext'] = 'Текст, який учасник ввів у цей пропуск.';
$string['privacy_metadata_elang_response_resultstate'] = 'Класифікація, яку оцінювання надало цій відповіді (точна, розпізнане слово, неправильна або порожня).';
$string['privacy_metadata_elang_response_score'] = 'Бали, які дала ця відповідь після можливого зниження за підказку.';
$string['privacy_metadata_elang_response_timecreated'] = 'Час першого надсилання цієї відповіді.';
$string['privacy_metadata_elang_response_timemodified'] = 'Час останнього оновлення цієї відповіді.';
$string['privacy_metadata_elang_response_tries'] = 'Скільки разів учасник надсилав відповідь для цього пропуску.';
$string['privacy_metadata_elang_version'] = 'Для кожної версії вмісту діяльність зберігає, який користувач змінив її востаннє.';
$string['privacy_metadata_elang_version_usermodified'] = 'Користувач, який востаннє змінив цю версію вмісту. Зберігається, щоб можна було простежити, хто редагував вміст вправи.';
$string['privacy_provider_externallink'] = 'Коли вправа ґрунтується на відео з YouTube або Vimeo, її відкриття з’єднує браузер учасника з цим постачальником. Плагін сам нічого не надсилає, але з’єднання спричиняє діяльність. Чи станеться це взагалі, залежить від налаштування сайту щодо згоди на постачальників і від згоди учасника.';
$string['privacy_provider_ipaddress'] = 'IP-адреса, з якої під’єднується браузер учасника.';
$string['privacy_provider_useragent'] = 'Відомості про браузер і пристрій, які надсилає браузер.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'Запитувати перед вбудовуванням YouTube або Vimeo';
$string['providerconsent_desc'] = 'Вправи, що ґрунтуються на відео з YouTube або Vimeo, показують повідомлення замість відео й вбудовують його лише після згоди учасника. Без цього постачальник отримує IP-адресу та відомості про браузер учасника щойно сторінка відкриється — ще до того, як хтось натисне відтворення. Вимикайте це лише тоді, коли ваш заклад отримує цю згоду в інший спосіб.';
$string['report_actions'] = 'Дії';
$string['report_answered'] = 'З відповіддю';
$string['report_attemptnumber'] = 'Спроба';
$string['report_back'] = 'Назад до всіх спроб';
$string['report_correct'] = 'Правильні';
$string['report_delete'] = 'Вилучити';
$string['report_deleteconfirm'] = 'Остаточно вилучити цю спробу та всі її відповіді? Скасувати неможливо.';
$string['report_deleted'] = 'Спробу вилучено.';
$string['report_exact'] = 'Точні';
$string['report_export'] = 'Експортувати';
$string['report_filterany'] = 'Усі';
$string['report_filterapply'] = 'Застосувати фільтри';
$string['report_filterattempt'] = 'Номер спроби';
$string['report_filterfrom'] = 'Розпочато від';
$string['report_filterrangeerror'] = 'Кінець проміжку передує його початку.';
$string['report_filterreset'] = 'Очистити фільтри';
$string['report_filterstate'] = 'Стан';
$string['report_filterto'] = 'Розпочато до';
$string['report_filteruser'] = 'Учасник';
$string['report_finished'] = 'Завершені';
$string['report_heading'] = 'Спроби';
$string['report_hinted'] = 'З підказкою';
$string['report_hints'] = 'Рівень підказки';
$string['report_kpianswered'] = 'З відповіддю';
$string['report_kpiattempts'] = 'Показані спроби';
$string['report_kpiaverage'] = 'Середній бал (завершені)';
$string['report_kpicorrect'] = 'Прийняті';
$string['report_kpiexact'] = 'Цілком правильні';
$string['report_kpifinished'] = 'Завершені';
$string['report_kpihinted'] = 'Скористалися підказкою';
$string['report_kpihintedgaps'] = 'Потребували підказки';
$string['report_noattempts'] = 'Спроб поки немає.';
$string['report_nogaps'] = 'Версія, у якій виконано цю спробу, не має пропусків.';
$string['report_nomatchingattempts'] = 'Жодна спроба не відповідає цим фільтрам.';
$string['report_noresponse'] = 'Без відповіді';
$string['report_response'] = 'Відповідь';
$string['report_result'] = 'Результат';
$string['report_result_empty'] = 'Порожньо';
$string['report_result_exact'] = 'Точна';
$string['report_result_incorrect'] = 'Неправильна';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Розпізнана';
$string['report_score'] = 'Бали';
$string['report_solution'] = 'Відповідь';
$string['report_started'] = 'Розпочато';
$string['report_state'] = 'Стан';
$string['report_state_abandoned'] = 'Покинуто';
$string['report_state_finished'] = 'Завершено';
$string['report_state_inprogress'] = 'Триває';
$string['report_transcript'] = 'Розшифровка';
$string['report_tries'] = 'Спроби відповіді';
$string['report_user'] = 'Учасник';
$string['report_view'] = 'Переглянути';
$string['reports'] = 'Звіти';
$string['resetattempts'] = 'Вилучити всі спроби та відповіді учасників';
$string['solutionavailability'] = 'Розшифровка з відповідями для учасників';
$string['solutionavailability_aftersubmission'] = 'Після завершення спроби';
$string['solutionavailability_always'] = 'Будь-коли';
$string['solutionavailability_help'] = 'Коли учасники можуть завантажити повну розшифровку з показаною відповіддю для кожного пропуску.

* Ніколи — завантажити можуть лише викладачі.
* Після завершення спроби — учасник може завантажити її, щойно завершить спробу в цій діяльності.
* Будь-коли — учасник може завантажити її навіть до того, як відповідатиме.

Викладачі з відповідним правом можуть завантажити її завжди, незалежно від цього налаштування.';
$string['solutionavailability_never'] = 'Ніколи';
$string['subplugintype_elangscript'] = 'Обробник писемності';
$string['subplugintype_elangscript_plural'] = 'Обробники писемності';
$string['subtitleposition'] = 'Показ субтитрів';
$string['subtitleposition_below'] = 'Під медіафайлом';
$string['subtitleposition_help'] = 'Де показуються інтерактивні субтитри.

* Під медіафайлом — уся розшифровка розташована під медіафайлом у власній області прокручування й стежить за відтворенням.
* У відео, внизу або вгорі — над медіафайлом малюється лише той субтитр, що звучить саме зараз.

Медіафайл лише зі звуком не має зображення, на якому можна малювати, тож завжди використовує показ під медіафайлом. Саме налаштування зберігається й знову діє, щойно діяльність використає відео.';
$string['subtitleposition_overlaybottom'] = 'У відео — внизу';
$string['subtitleposition_overlaytop'] = 'У відео — вгорі';
$string['task_migratev1activities'] = 'Перенести діяльності версії 1';
$string['transcriptheading'] = 'Розшифровка для учасників';
$string['validate_cueafterend'] = '{$a->where}: завершується на {$a->endtime} мс, тобто після медіафайлу ({$a->duration} мс). Відтворення туди ніколи не дійде.';
$string['validate_cueendbeforestart'] = '{$a}: кінець не пізніше за початок.';
$string['validate_cuewhere'] = 'Сегмент {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = 'Відповідь для {$a} порожня.';
$string['validate_hintlevels'] = 'Рівні підказок для {$a} не утворюють неперервної послідовності, що починається з 1.';
$string['validate_negativetime'] = '{$a}: час початку передує початку запису.';
$string['validate_nocues'] = 'Версія не має сегментів.';
$string['validate_nogaps'] = 'Версія не має пропусків для заповнення.';
$string['validate_nonpositivelength'] = 'Довжина в символах для {$a} має бути додатною.';
$string['validate_rangeoutside'] = 'Діапазон символів для {$a} виходить за межі його розшифровки.';
$string['validate_rangeoverlap'] = 'Діапазон символів для {$a} перекривається з іншим пропуском.';
$string['validate_unknownalgorithm'] = 'Алгоритм оцінювання «{$a->algorithm}» для {$a->where} не розпізнано.';
$string['validate_where'] = 'пропуск {$a->gapkey} у сегменті {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'Пропуск {$a->gapkey}: алгоритм оцінювання — «{$a->actual}», очікувався «{$a->expected}».';
$string['verify_attemptcount'] = 'Кількість перенесених спроб — {$a->actual}, очікувалося окремих учасників версії 1.x: {$a->expected}.';
$string['verify_jarothreshold'] = 'Поріг порівняння відповідей — {$a->actual}, очікувався {$a->expected}.';
$string['verify_missingattempt'] = 'Користувач {$a}: очікувалася перенесена спроба, жодної не знайдено.';
$string['verify_missingcue'] = 'Сегмент {$a}: перенесеного сегмента бракує.';
$string['verify_missinggap'] = 'Пропуск {$a}: перенесеного пропуску бракує.';
$string['verify_missinghint'] = 'Пропуск {$a}: версія 1 дозволяла тут підказку, але жодної не перенесено.';
$string['verify_orphancue'] = 'Сегмент {$a}: відповідного сегмента з версії 1 не знайдено.';
$string['verify_orphangap'] = 'Пропуск {$a}: відповідного пропуску з версії 1 не знайдено.';
$string['verify_rangemismatch'] = 'Пропуск {$a}: діапазон символів не збігається з джерелом версії 1.';
$string['verify_responsecount'] = 'Користувач {$a->userid}: кількість перенесених відповідей — {$a->actual}, очікувалося {$a->expected}.';
$string['verify_solutionmismatch'] = 'Пропуск {$a->gapkey}: відповідь — «{$a->actual}», очікувалася «{$a->expected}».';
$string['verify_transcriptmismatch'] = 'Сегмент {$a}: розшифровка не збігається з джерелом версії 1.';
$string['verify_unexpectedhint'] = 'Пропуск {$a}: версія 1 не дозволяла тут підказки, але одну перенесено.';
