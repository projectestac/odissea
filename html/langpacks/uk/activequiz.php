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
 * Strings for component 'activequiz', language 'uk', version '4.1'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:editquestions'] = 'Редагувати запитання для активного опитування';
$string['activequiz:viewownattempts'] = 'Дозволяє учням побачити власні спроби тестування';
$string['activequizintro'] = 'Представлення';
$string['activitygrades'] = 'Рівні діяльностей:';
$string['addquestion'] = 'Додати запитання';
$string['addtoquiz'] = 'Додати';
$string['anonymousresponses'] = 'Зробити відповіді учнів анонімними';
$string['anonymousresponses_help'] = 'Зробити відповіді учнів анонімними для викладача, щоб, при відображенні їхнього екрану, імена або назви груп не відображалися';
$string['anonymoususer'] = 'Анонімний користувач';
$string['assessed'] = 'Оцінено';
$string['assessed_help'] = 'Встановіть цей прапорець, щоб оцінити ваш тест';
$string['attempt_grade'] = 'Оцінка спроби';
$string['attemptno'] = 'Номер спроби';
$string['attempts'] = 'Спроби';
$string['attemptstarted'] = 'Ви вже розпочали спробу. Натисніть нижче, щоб перейти до відкритої спроби';
$string['attemptstartedalready'] = 'Один із членів вашої групи вже розпочав спробу';
$string['attemptview'] = 'Переглянути спроби';
$string['cantaddquestiontwice'] = 'Ви не можете додати однакове питання більше одного разу до тестування';
$string['cantinitattempts'] = 'Неможливо започаткувати спроби для Вас';
$string['closesession'] = 'Закрити сеанс';
$string['closingsession'] = 'Закриття сеансу...';
$string['countdatasetlabel'] = 'Кількість відповідей';
$string['defaultquestiontime'] = 'Стандартний час на запитання';
$string['edit'] = 'Редагувати опитування';
$string['editpage_opensession_error'] = 'Ви не можете редагувати запитання або налаштування тесту, під час відкритої сеансу.';
$string['enabledquestiontypes'] = 'Увімкнути типи запитань';
$string['endquestion'] = 'Останнє запитання';
$string['eventattemptstarted'] = 'Спроба розпочата';
$string['eventattemptviewed'] = 'Спроба переглянута';
$string['eventquestionmanuallygraded'] = 'Питання оцінено вручну';
$string['feedbackintro'] = 'Відгук на ваше запитання. Будь ласка, зачекайте, поки викладач розпочне наступне запитання';
$string['firstsession'] = 'Перший сеанс';
$string['fullanonymize'] = 'Зробити відповіді студентів повністю анонімними';
$string['fullanonymize_help'] = 'Зробити відповіді студентів повністю анонімними. Увага, якщо ви виберете цю опцію, відповіді цього сеансу не буде оцінено та застосовано до студентів.';
$string['gatheringresults'] = 'Збір результатів...';
$string['gotosession'] = 'Перейти до поточного сеансу';
$string['grademethod'] = 'Метод оцінювання сеансу';
$string['gradesettings'] = 'Налаштування оцінювання';
$string['groupmembership'] = 'Членство в групі';
$string['groupworksettings'] = 'Налаштування групи';
$string['hide_correct_answer'] = 'Приховати правильну відповідь';
$string['hidenotresponded'] = 'Приховати запитання без відповіді';
$string['hidestudentresponses'] = 'Приховати відповіді';
$string['highestsessiongrade'] = 'Найвища оцінка сеансу';
$string['indvquestiontime'] = 'Час запитання';
$string['indvquestiontime_help'] = 'Час запитання в секундах.';
$string['instructorquizinst'] = '<p>Будь ласка, зачекайте на цій сторінці, поки студенти не підключаться. Як<b>Розпочати тест</b>буде натиснуто, з\'явиться перше запитання </p>
  <p>
<p>Керування:</p>
  <ul>
        <li>
         Повторити запитання
          <ul>
                <li>
                  Дозволяє викладачеві повторно задавати поточне або попереднє запитання (доступно під час перегляду запитання).
                </li>
            </ul>
        </li>
        <li>
          Наступне питання
        <ul>
                <li>
                  Переходить до наступного запитання (доступне під час перегляду питання).
               </li>
            </ul>
        </li>
        <li>
         Останнє запитання
         <ul>
                <li>
                Завершує поточне запитання. Також дозволяє інструктору завершити запитання достроково (доступно під час виконання запитання).<i>Якщо питання не має обмежень у часі, викладач повинен буде натиснути <b>останнє запитання.</b></i>
            </li>
            </ul>
        </li>
        <li>
          Перейти до запитання
       <ul>
                <li>
          Відкриває діалогове вікно, щоб направити всіх користувачів на запитання у тесті (доступне під час перегляду запитання).
            </li>
            </ul>
        </li>
        <li>
          Закрити сеанс
        <ul>
                <li>
                 Закриває поточний сеанс і всі спроби для студентів. Автоматично оцінює всі спроби (доступно в будь-який час).
                </li>
            </ul>
        </li>
        <li>
         Перезавантажте результати
           <ul>
                  <li>
                    Перезавантажує відповіді учнів у інформаційному вікні. Дозволяє викладачу побачити, скільки студентів або груп відповіли та скільки ще не відповіли (доступно під час перегляду запитання).
               </li>
            </ul>
        </li>
        <li>
         Приховати/Показати Без відповіді
         <ul>
                <li>
                Приховати або показати інформаційне поле, яке відображає, скільки студентів або груп відповіли і які студенти або групи ще не відповіли (доступне під час опитування).
             </li>
            </ul>
        </li>
        <li>
         Показати правильну відповідь
         <ul>
                <li>
                 Викладач може бачити запитання з обраною правильною відповіддю (доступно під час перегляду запитання). Це не відображатиме правильну відповідь для типів запитань, що оцінюються вручну, таких як твір або малюнок.
         </li>
            </ul>
        </li>
    </ul>
</p>';
$string['showstudentresponses'] = 'Показати відповіді';
$string['start_session'] = 'Почати сеанс';
$string['startedon'] = 'Розпочато на';
$string['startquiz'] = 'Почати тестування';
$string['studentquizinst'] = '<p>Будь ласка, зачекайте, поки викладач розпочне тестування. Після початку ви побачите таймер з відліком до початку першого запитання </p>';
$string['successregrade'] = 'Успішно перевірено тестування';
$string['teacherjoinquizinstruct'] = 'Скористайтеся цим, якщо ви хочете самостійно спробувати тестування <br /> (вам також потрібно буде розпочати вікторину в окремому вікні)';
$string['teacherstartinstruct'] = 'Використовуйте це, щоб розпочати тестування для учнів <br /> Використовуйте текстове поле, щоб визначити назву для цього сеансу (щоб допомогти під час перегляду результатів пізніше).';
$string['theattempt'] = 'Спроба';
$string['timecompleted'] = 'Час завершено';
$string['timemodified'] = 'Час змінено';
$string['timertext'] = 'Ваше запитання закінчиться і буде автоматично надіслано через:';
$string['trycount'] = 'У вас залишилося {$a->tries} спроб.';
$string['unabletocreate_session'] = 'Не вдається створити сеанс';
$string['view'] = 'Переглянути тестування';
$string['viewstats'] = 'Переглянути статистику тестування';
$string['waitforquestion'] = 'Очікування надсилання запитання:';
$string['waitforquestiontime'] = 'Дочекайтеся часу для запитання';
$string['waitforrevewingend'] = 'Зараз викладач розглядає попереднє запитання. Будь ласка, зачекайте, поки почнеться наступне запитання';
$string['waitstudent'] = 'Очікування на підключення учнів';
$string['workedingroups'] = 'Працюватиме в групах.';
