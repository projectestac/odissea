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
 * Strings for component 'certificate', language 'uk', version '4.1'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Додати іншу зв\'язану діяльність';
$string['addlinktitle'] = 'Натисніть щоб додати іншу зв\'язану діяльність';
$string['areaintro'] = 'Опис сертифікату';
$string['awarded'] = 'Нагороджено';
$string['awardedto'] = 'Виданий';
$string['back'] = 'Назад';
$string['border'] = 'Рамка';
$string['borderblack'] = 'Чорний';
$string['borderblue'] = 'Синій';
$string['borderbrown'] = 'Коричневий';
$string['bordercolor'] = 'Колір рамки';
$string['bordercolor_help'] = 'Оскільки зображення можуть значно збільшити розмір файлу PDF, Ви можете надрукувати рамку з ліній замість використання зображення рамки (впевнитесь, що для параметру \'Зображення рамки\' встановлено значення НІ). Параметр \'Лінії рамки\' друкує гарну рамку з трьох ліній різної ширини обраного кольору.';
$string['bordergreen'] = 'Зелений';
$string['borderlines'] = 'Лінії рамки';
$string['borderstyle'] = 'Зображення рамки';
$string['borderstyle_help'] = 'Параметр \'Зображення рамки\' дозволяє обрати зображення з каталогу certificate/pix/borders. Оберіть зображення рамки навколо меж сертифіката або оберіть без рамки.';
$string['certificate'] = 'Перевірка коду сертифікату:';
$string['certificate:addinstance'] = 'Додати сертифікат';
$string['certificate:manage'] = 'Керування екземпляром сертифікату';
$string['certificate:printteacher'] = 'Якщо ввімкнена опція друкувати викладача, то на сертифікаті буде список викладачів';
$string['certificate:student'] = 'Отримати сертифікат';
$string['certificate:view'] = 'Переглянути сертифікат';
$string['certificatename'] = 'Назва сертифікату';
$string['certificatereport'] = 'Звіт щодо сертифікатів';
$string['certificatesfor'] = 'Сертифікати для';
$string['certificatetype'] = 'Тип сертифікату';
$string['certificatetype_help'] = 'Тут задається макет сертифікату. Каталог типу містить чотири сертифікати за замовченням: A4 Embedded - друк на папері формату A4 з вбудованими шрифтами. A4 Non-Embedded - друк на папері формату A4 без вбудованих шрифтів. Letter Embedded - друк на папері формату Letter з вбудованими шрифтами. Letter Non-Embedded - друк на папері формату Letter без вбудованих шрифтів. Типи Non-Embedded використовують шрифти Helvetica та Times. Якщо у користувачів не буде цих шрифтів на комп\'ютерах, або якщо в обраній мові використовуються символи які відсутні в цих шрифтах, то оберіть тип Embedded. Embedded типи використовують шрифти Dejavusans та Dejavuserif. Це зробить PDF файли досить великими; таким чином, не рекомендується використовувати цей тип, якщо не має в цьому необхідності. Нові типи можуть бути додані в каталог certificate/type. Назва каталогу та будь-які нові мовні рядки для нового типу також повинні бути додані до мовного файлу сертифікату.';
$string['certify'] = 'Засвітчує, що';
$string['code'] = 'Код';
$string['completiondate'] = 'Завершення курсу';
$string['course'] = 'З';
$string['coursegrade'] = 'Оцінка з курсу';
$string['coursename'] = 'Курс';
$string['coursetimereq'] = 'Необхідна кількість хвилин у курсі';
$string['coursetimereq_help'] = 'Задайте мінімальній обсяг часу, в хвилинах, який необхідно студентові бути зарахованим на курс щоб отримати сертифікат.';
$string['credithours'] = 'Кредити';
$string['customtext'] = 'Додатковий текст';
$string['customtext_help'] = 'Якщо необхідно, щоб на сертифікаті були надруковані прізвища викладачів, відмінні від тих кому призначена роль викладач, не обирайте \'Друк викладача\' або будь-яке зображення підпису, окрім зображення лінії. Введіть прізвища викладачів в це текстове поле в тому вигляді, в якому вони мають бути відображені. За замовченням, цей текст розміщується в лівому нижньому куті сертифікату. Доступні наступні теги &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src та width (або height) обов\'язкові), &lt;a&gt; (href - обов\'язкове), &lt;font&gt; (можливі атрибути: color, (шістнадцятковий код кольору), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'Від';
$string['datefmt'] = 'Формат дати';
$string['datefmt_help'] = 'Оберіть формат дати яким буде надруковано дату в сертифікаті. Або оберіть останній варіант для того щоб дату було надруковано в форматі мови обраної користувачем.';
$string['datehelp'] = 'Дата';
$string['deletissuedcertificates'] = 'Видаляти видані сертифікати';
$string['delivery'] = 'Спосіб отримання сертифікату';
$string['delivery_help'] = 'Тут слід обрати, як саме учні мають отримувати свій сертифікат. Відкрити в браузері: відкриває сертифікат в новому вікні браузера. Примусове завантаження: відкриває вікно завантаження файлу в браузері. Сертифікат електронною поштою: в даному випадку сертифікат надсилається учневі у вигляді додатку на електронну пошту. Після того я користувач отримає свій сертифікат, якщо він обире посилання на сертифікат на головній сторінці курсу, він побачить дату отримання сертифікату й зможе переглянути його.';
$string['designoptions'] = 'Налаштування вигляду';
$string['download'] = 'Примусове вивантаження';
$string['emailcertificate'] = 'Пошта';
$string['emailothers'] = 'Відправити іншим';
$string['emailothers_help'] = 'Введіть адреси електронної пошти через кому, тих хто повинен бути попереджений про факт отримання сертифікатів студентами';
$string['emailstudenttext'] = 'Сертифікат про проходження курсу {$a->course} додається.';
$string['emailteachermail'] = '{$a->student} отримав свій сертифікат: \'{$a->certificate}\' з курсу {$a->course}. Його можна переглянути за наступним посиланням: {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} отримав свій сертифікат: \'<i>{$a->certificate}</i>\' з курсу {$a->course}. Його можна переглянути за наступним посиланням: <a href="{$a->url}">Сертифікат</a>.';
$string['emailteachers'] = 'Повідомити викладачів';
$string['emailteachers_help'] = 'Коли включено, викладачі будуть попереджені по електронній пошті, коли коли студенти отримають сертифікат';
$string['entercode'] = 'Введіть код сертифікату для перевірки:';
$string['fontsans'] = 'Sans-serif шрифт';
$string['fontsans_desc'] = 'Sans-serif шрифт для сертифікатів із вбудованими шрифтами';
$string['fontserif'] = 'Serif шрифт';
$string['fontserif_desc'] = 'Serif шрифт для сертифікатів із вбудованими шрифтами';
$string['getcertificate'] = 'Отримайте свій сертифікат';
$string['grade'] = 'Оцінка';
$string['gradedate'] = 'Дата оцінення';
$string['gradefmt'] = 'Формат оцінки';
$string['gradefmt_help'] = 'Якщо обрати друк оцінки на сертифікаті, то є три доступні формати: Процентна оцінка: друк оцінки в процентах. Оцінка в балах: друк оцінки в балах. Літерна оцінка: друк процентної оцінки у вигляді літери.';
$string['gradeletter'] = 'Літера';
$string['gradepercent'] = 'Проценти';
$string['gradepoints'] = 'Бали';
$string['imagetype'] = 'Тип зображення';
$string['incompletemessage'] = 'Для того щоб завантажити сертифікат, спочатку необхідно виконати всі завдання. Будь-ласка, поверніться до курсу й виконайте всі необхідні завдання курсу.';
$string['intro'] = 'Опис';
$string['issued'] = 'Виданий';
$string['issueddate'] = 'Дата видачі';
$string['issueoptions'] = 'Налаштування видачі';
$string['landscape'] = 'Горизонтальний';
$string['lastviewed'] = 'Востаннє ви отримували цей сертифікат:';
$string['letter'] = 'Лист';
$string['lockingoptions'] = 'Налаштування блокування';
$string['modulename'] = 'Сертифікат';
$string['modulename_help'] = 'Цей модуль дозволяє автоматично генерувати сертифікати на основі попередньо визначених умов встановлених викладачем.';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'Сертифікати';
$string['mycertificates'] = 'Мої сертифікати';
$string['nocertificates'] = 'Сертифікатів немає';
$string['nocertificatesissued'] = 'Немає виданих сертифікатів';
$string['nocertificatesreceived'] = 'не отримано жодного сертифікату про проходження курсу.';
$string['nofileselected'] = 'Необхідно обрати файли для завантаження!';
$string['nogrades'] = 'Немає доступних оцінок';
$string['notapplicable'] = 'Н/Д';
$string['notfound'] = 'Номер сертифікату не може бути підтверджено.';
$string['notissued'] = 'Не видано';
$string['notissuedyet'] = 'Ще не видано';
$string['notreceived'] = 'Ви не отримали цей сертифікат';
$string['openbrowser'] = 'Відкрити у новому вікні';
$string['opendownload'] = 'Кнопка нижче для збереження сертифікату на Ваш комп\'ютер.';
$string['openemail'] = 'Кнопка нижче для надсилання сертифікату на Вашу електронну пошту.';
$string['openwindow'] = 'Кнопка нижче для відкриття сертифікату у новому вікні браузера.';
$string['or'] = 'Або';
$string['orientation'] = 'Орієнтація';
$string['orientation_help'] = 'Оберіть книжкову або альбомну орієнтацію Вашого сертифікату.';
$string['pluginadministration'] = 'Адміністрування сертифікату';
$string['pluginname'] = 'Сертифікат';
$string['portrait'] = 'Портретна';
$string['printdate'] = 'Друкувати дату';
$string['printdate_help'] = 'Дата яку буде надруковано, якщо обрана дата друку. Якщо обрана дата завершення курсу, але учень не закінчив курс, то буде надрукована дата отримання. Також можна надрукувати дату в залежності від того коли була виставлена оцінка. Якщо сертифікат було видано до того як ця діяльність була оцінена, то буде надрукована дата отримання.';
$string['printerfriendly'] = 'Сторінка друку';
$string['printgrade'] = 'Друкувати оцінку';
$string['printgrade_help'] = 'Можна обрати будь-які доступні оцінки курсу з журналу оцінок, щоб надрукувати отриману оцінку користувачем в сертифікаті. Оцінки перелічені в тому порядку в якому вони з\'являються в журналі оцінок. Оберіть формат оцінки нижче.';
$string['printhours'] = 'Друкувати кредитні години';
$string['printhours_help'] = 'Введіть кількість кредитів які буде надруковано у сертифікаті.';
$string['printnumber'] = 'Друкувати код';
$string['printnumber_help'] = 'На сертифікаті можна надрукувати унікальний 10-ти значний код з випадкових літер та цифр. Потім цей номер можна перевірити, порівнявши його з номером коду, що відображається у звіті про сертифікати.';
$string['printoutcome'] = 'Результат друку';
$string['printoutcome_help'] = 'Можна обрати будь-який результат курсу для друку його назви та результату у сертифікаті отримуваному користувачем. Прикладом може бути: Рівень володіння мовою.';
$string['printseal'] = 'Зображення печатки або логотипу';
$string['printseal_help'] = 'Цей параметр дозволяє обрати друк печатки або лого на сертифікаті з каталогу certificate/pix/seals. За замовченням, це зображення знаходиться в нижньому правому куті сертифікату.';
$string['printsignature'] = 'Зображення підпису';
$string['printsignature_help'] = 'Цей параметр дозволяє друк підпису на сертифікаті з каталогу certificate/pix/signatures. Можна друкувати графічне зображення підпису або лінію для подальшого заповнення підпису. За замовченням, це зображення знаходиться зліва внизу сертифікату.';
$string['printteacher'] = 'Друкувати П.І.Б. викладача(ів)';
$string['printteacher_help'] = 'Для друку прізвища викладача на сертифікаті необхідно встановити роль викладач на рівні модуля. Це необхідно зробити якщо на курсі більше одного викладача й необхідно друкувати різні прізвища викладачів на кожному сертифікаті. Клацніть для редагування сертифікату, потім вкладку Локальні ролі. Потім призначте роль викладач (викладач з правом редагування) сертифікату (це не повинні бути викладачі на курсі, можна призначити цю роль будь-кому). Ці прізвища будут вказані на сертифікаті як викладачі.';
$string['printwmark'] = 'Зображення водяного знаку';
$string['printwmark_help'] = 'Файл водяного знаку може бути розміщено в якості фону сертифікату. Водяний знак - це бляклий малюнок. Він може бути логотипом, печаткою, гербом, написом або чим завгодно, що Ви бажаєте використати в якості графічного фону.';
$string['receivedcerts'] = 'Отримані сертифікати';
$string['receiveddate'] = 'Дата отримання';
$string['removecert'] = 'Видані сертифікати видалено';
$string['report'] = 'Звіт';
$string['reportcert'] = 'Звіт про сертифікати';
$string['reportcert_help'] = 'Якщо обрати \'Так\', то в звітах про сертифікати користувача буде відображатися дата отримання цього сертифікату, кодовій номер та назва курсу. Якщо обрано друк оцінки на сертифікаті, то ця оцінка також буде відображатися у звіті про сертифікат.';
$string['requiredtimenotmet'] = 'Ви маєте витратити як мінімум {$a->requiredtime} хвилин на курс, перед тим як зможете отримати доступ до цього сертифікату.';
$string['requiredtimenotvalid'] = 'Необхідний час має бути числом більшим 0.';
$string['reviewcertificate'] = 'Перевірте свій сертифікат';
$string['savecert'] = 'Зберегти сертифікати';
$string['savecert_help'] = 'Якщо обрано цю опцію, то копія pdf-файлу сертифікату кожного користувача  зберігається в каталозі moodledata файлів курсу для цього сертифікату. Посилання на збережений сертифікат кожного користувача буду відображатися у звіті про сертифікати.';
$string['seal'] = 'печатка';
$string['sigline'] = 'лінія';
$string['signature'] = 'Підпис';
$string['statement'] = 'закінчив курс';
$string['summaryofattempts'] = 'Звіт щодо раніш отриманих сертифікатів';
$string['textoptions'] = 'Налаштування тексту';
$string['title'] = 'Сертифікат про досягнення';
$string['to'] = 'виданий';
$string['typeA4_embedded'] = 'А4 за замовчуванням';
$string['typeA4_non_embedded'] = 'А4 шаблон користувача';
$string['typeletter_embedded'] = 'А5 за замовчуванням';
$string['typeletter_non_embedded'] = 'А5 шаблон користувача';
$string['unsupportedfiletype'] = 'Файл зображення має бути в форматі jpeg або png';
$string['uploadimage'] = 'Завантажити зображення';
$string['uploadimagedesc'] = 'Ця кнопка відкриє новий екран де Ви зможете завантажити зображення.';
$string['userdateformat'] = 'Формат дати користувача';
$string['validate'] = 'Перевірити';
$string['verifycertificate'] = 'Перевірити сертифікат';
$string['viewcertificateviews'] = 'Переглянути {$a} видані сертифікати';
$string['viewed'] = 'Ви отримали цей сертифікат:';
$string['viewtranscript'] = 'Переглянути сертифікати';
$string['watermark'] = 'Водяний знак';
