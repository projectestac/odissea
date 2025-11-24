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
 * Strings for component 'adaptivequiz', language 'uk', version '4.5'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Звіт про спроби';
$string['adaptivequizname'] = 'Ім\'я';
$string['answer'] = 'Відповідь';
$string['answers_display_name'] = 'Відповіді';
$string['attempt_questiondetails'] = 'Деталі питання';
$string['attempt_user'] = 'Користувач';
$string['attemptclosed'] = 'Спробу було закрито вручну.';
$string['attemptclosedstatus'] = 'Закрито вручну  {$a->current_user_name} (user-id: {$a->current_user_id}) на {$a->now}.';
$string['attemptdeleted'] = 'Спробу видалено для {$a->name} подано на {$a->timecompleted}';
$string['attemptfeedback'] = 'Відгук про спроби';
$string['attemptfeedback_help'] = 'Відгук про спробу відображається для користувача після завершення спроби';
$string['attemptfeedbackdefaulttext'] = 'Ви завершили спробу, дякую за участь у тестуванні!';
$string['attemptfinishedtimestamp'] = 'Час завершення спроби';
$string['attemptfirst'] = 'Перша спроба';
$string['attemptlast'] = 'Остання спроба';
$string['attemptquestion_level'] = 'Рівень запитання';
$string['attemptquestion_rightwrong'] = 'Правильно/Неправильно';
$string['attemptquestion_stderr'] = 'Стандартна помилка (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Спроби дозволено';
$string['attemptsallowed_help'] = 'Кількість разів що студент може спробувати виконати цю дію';
$string['attemptstarttime'] = 'Час початку спроби';
$string['attemptstate'] = 'Стан спроби';
$string['attemptstopcriteria'] = 'Причина припинення спроби';
$string['attemptsusernoprevious'] = 'Ви ще не пробували пройти це тестування.';
$string['attemptsuserprevious'] = 'Ваші попередні спроби';
$string['attempttotaltime'] = 'Загальний час (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Повернутися до всіх запитань';
$string['bestscore'] = 'Найкращий результат';
$string['bestscorestderror'] = 'Стандартна помилка';
$string['browsersecurity'] = 'Безпека браузера';
$string['closeattempt'] = 'Закрити спробу';
$string['confirmcloseattempt'] = 'Ви впевнені, що хочете закрити та завершити цю спробу {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} на запитання було отримано відповіді та оцінка наразі є {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Ця спроба була розпочата о {$a->started} і останнє оновлення о {$a->modified}.';
$string['confirmdeleteattempt'] = 'Підтвердження видалення спроби з {$a->name} подано о {$a->timecompleted}.';
$string['deleteattemp'] = 'Видалити спробу';
$string['downloadcsv'] = 'Завантажити CSV';
$string['enterrequiredpassword'] = 'Введіть необхідний пароль';
$string['errorattemptstate'] = 'Під час визначення стану спроби сталася помилка';
$string['errorclosingattempt_alreadycomplete'] = 'Ця спроба вже завершена, її не можна закрити вручну.';
$string['errorlastattpquest'] = 'Помилка перевірки значення відповіді на останнє запитання';
$string['errorsumrightwrong'] = 'Сума правильних і неправильних відповідей не відповідає загальній кількості запитань';
$string['formelementdecimal'] = 'Введіть десяткове число. Максимальна довжина 10 цифр і максимум 5 цифр праворуч від десяткової коми';
$string['formelementempty'] = 'Введіть натуральне число від 1 до 999';
$string['formelementnegative'] = 'Введіть позитивне число від 1 до 999';
$string['formelementnumeric'] = 'Введіть числове значення від 1 до 999';
$string['formlowlevelgreaterthan'] = 'Найнижчий рівень має бути меншим за найвищий';
$string['formminquestgreaterthan'] = 'Мінімальна кількість запитань має бути менше максимальної кількості запитань';
$string['formquestionpool'] = 'Виберіть принаймні одну категорію запитання';
$string['formstartleveloutofbounds'] = 'Початковий рівень має бути числом між найнижчим і найвищим рівнем';
$string['formstderror'] = 'Необхідно ввести відсоток, менший за 50 і більший/або дорівнює 0';
$string['functiondisabledbysecuremode'] = 'Наразі ця функція вимкнена';
$string['gradehighest'] = 'Найвища оцінка';
$string['grademethod'] = 'Метод оцінювання';
$string['grademethod_help'] = 'Якщо дозволено кілька спроб, для обчислення остаточної оцінки у тестуванні доступні наступні методи:

* Найвища оцінка з усіх спроб
* Перша спроба (всі інші спроби ігноруються)
* Остання спроба (всі інші спроби ігноруються)';
$string['graphlegend_error'] = 'Стандартна помилка';
$string['highestlevel'] = 'Найвищий рівень складності';
$string['highestlevel_help'] = 'Найвищий або найскладніший рівень, з якого оцінювання може вибрати запитання. Під час спроби запитання не виходить за межі цього рівня складності';
$string['highlevelusers'] = 'Користувачі вище рівня запитань';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Індивідуальний звіт про спроби для {$a}';
$string['leveloutofbounds'] = 'Необхідний рівень  {$a->level} поза межами спроби';
$string['lowestlevel'] = 'Найнижчий рівень складності';
$string['lowestlevel_help'] = 'Найнижчий рівень складності з якого оцінювання може вибрати запитання. Під час спроби запитання не виходить за межі цього рівня складності';
$string['lowlevelusers'] = 'Користувачі нижче рівня запитань';
$string['maximumquestions'] = 'Максимальна кількість запитань';
$string['maximumquestions_help'] = 'Максимальна кількість запитань, яку студент може задати';
$string['maxquestattempted'] = 'Максимальна кількість заданих запитань';
$string['minimumquestions'] = 'Мінімальна кількість запитань';
$string['minimumquestions_help'] = 'Мінімальна кількість запитань, яку студент може задати';
$string['missingtagprefix'] = 'Відсутній префікс тегу';
$string['na'] = 'н/д';
$string['name'] = 'Ім\'я';
$string['nopermission'] = 'Ви не маєте дозволу на перегляд цього ресурсу';
$string['notinprogress'] = 'Ця спроба не виконується.';
$string['numofattemptshdr'] = 'Кількість спроб';
$string['percent_correct_display_name'] = '% Правильно';
$string['questionnumber'] = 'Запитання #';
$string['recentactquestionsattempted'] = 'Задані запитання: {$a}';
$string['recentattemptstate'] = 'Стан спроби:';
$string['recentcomplete'] = 'Завершено';
$string['recentinprogress'] = 'В процесі';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - спроба перевірки {$a->fullname} надіслана {$a->finished}';
$string['reportattemptsummarytab'] = 'Підсумок спроби';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - індивідуальний звіт про спроби для {$a->username}';
$string['reportuserattemptstitleshort'] = 'Спроби {$a}';
$string['requirepassword'] = 'Необхідний пароль';
$string['requirepassword_help'] = 'Перед початком спроби студенти повинні ввести пароль';
$string['requirepasswordmessage'] = 'Щоб почати це тестування, вам потрібно знати пароль тестування';
$string['result'] = 'Результат';
$string['reviewattempt'] = 'Переглянути спробу';
$string['reviewattemptreport'] = 'Перегляд спроби {$a->fullname} яка завершена о {$a->finished}';
$string['standarderrorhdr'] = 'Стандартна помилка';
$string['startattemptbtn'] = 'Почати спробу';
$string['startinglevel'] = 'Початковий рівень складності';
$string['startinglevel_help'] = 'Коли учень починає спробу, тестування випадковим чином вибирає запитання, що відповідає рівню складності';
$string['statistic'] = 'Статистика';
$string['stopingconditionshdr'] = 'Умови зупинки';
$string['submitanswer'] = 'Надіслати відповідь';
$string['user'] = 'Користувач';
$string['value'] = 'Значення';
$string['wrongpassword'] = 'Пароль неправильний';
