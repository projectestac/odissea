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
 * Strings for component 'qtype_multianswer', language 'uk', version '4.4'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Я підтверджую, що хочу, щоб питання було збережене як при редагуванні';
$string['confirmsave'] = 'Підтвердити та зберегти {$a}';
$string['correctanswer'] = 'Правильна відповідь';
$string['correctanswerandfeedback'] = 'Правильна відповідь і коментар';
$string['corruptedquestion'] = 'Це питання пошкоджено і містить підзапитання, яких немає у вашій системі.';
$string['decodeverifyquestiontext'] = 'Декодувати і перевірити текст питання';
$string['invalidmultianswerquestion'] = 'Недійсні вбудовані відповіді (Закрити) запитання ({$a}).';
$string['layout'] = 'Макет';
$string['layouthorizontal'] = 'Горизонтальний рядок вимикачів';
$string['layoutmultiple_horizontal'] = 'Горизонтальний ряд прапорців';
$string['layoutmultiple_vertical'] = 'Вертикальний стовпець прапорців';
$string['layoutselectinline'] = 'Випадаюче меню в рядку в тексті';
$string['layoutundefined'] = 'Невизначений формат';
$string['layoutvertical'] = 'Вертикальна колонка вимикачів';
$string['missingsubquestion'] = 'Це підзапитання відсутнє у вашій системі і не може бути відображено.';
$string['multichoicex'] = 'Кілька варіантів {$a}';
$string['nooptionsforsubquestion'] = 'Не вдається отримати варіанти для частини питання # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Питання в закритій формі (багатокритеріальне) "<strong>{$a}</strong>" не містить ніякого питання';
$string['pleaseananswerallparts'] = 'Будь ласка, дайте відповідь на всі частини питання.';
$string['pluginname'] = 'Вкладені відповіді (Закрите)';
$string['pluginname_help'] = '<p>Питання типу Вбудовані відповіді (пропущені слова) складається з тексту, в якому треба вставити пропущені слова за змістом. Кожне пропущене слово може бути відповіддю типу Коротка відповідь, Числовий або Множинний вибір. Структура пропущеного слова:</p><p>
{ - початок слова<br />
N - необов’язкове число, кількість балів за правильну відповідь<br />
:ТИП_ПИТАННЯ: - визначає форму подання відповіді<br />
~ розділяє варіанти відповіді<br />
= ставиться перед правильним варіантом відповіді<br />
# ставиться перед початком необов’язкового коментаря<br />
} - кінець слова</p>
<p>Типи питань:</p><p>
SA або SHORTANSWER - коротка відповідь (регістр не важливий)<br />
SAC або SHORTANSWER_C - коротка відповідь (регістр важливий)<br />
NM або NUMERICAL - числовий (відповідь у форматі Число:Похибка)<br />
MC або MULTICHOICE - множинний вибір (виринаючий список)<br />
MCV або MULTICHOICE_V - множинний вибір (радіо-кнопки по вертикалі)<br />
MCH або MULTICHOICE_H - множинний вибір (радіо-кнопки по горизонталі)</p>
<p>Приклади:</p><ul>
<li>Відоме місто Цюріх знаходиться у {1:MC:Швеції~=Швейцарії#Правильно~Люксембурзі}.</li>
<li>В Україні час влітку відрізняється від GMT (часу за Грінвічем) на {1:MCH:1~=2~3} години.</li>
<li>На вірші поеми "Руслан і Людмила" великого російського поета {1:SAC:%100%Пушкіна~%50%Пушкина~%50%пушкіна} композитор {2:SA:=Глінка} написав однойменну оперу.</li>
<li>Прискорення вільного падіння складає {2:NUMERICAL:=9.8:0.02#Чудово~%50%10:0.18#Близько до істини} м/с.</li>
</ul>';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Додати питання типу Вбудовані відповіді (пропущені слова)';
$string['pluginnameediting'] = 'Редагувати питання типу Вбудовані відповіді (пропущені слова)';
$string['pluginnamesummary'] = 'Питання цього типу є дуже гнучкими, але можуть бути створені тільки шляхом введення тексту, що містить спеціальні коди, які створюють вбудований множинний вибір, короткі відповіді і числові запитання (текст з пропущеними словами).';
$string['privacy:metadata'] = 'Плагін типу запитання «Вбудовані відповіді» (Cloze) не зберігає жодних особистих даних.';
$string['qtypenotrecognized'] = 'Тип запитання {$a} не розпізнано';
$string['questiondefinition'] = 'Формулювання запитання';
$string['questiondeleted'] = 'Питання видалено';
$string['questioninquiz'] = '<ul> <li>додати або видалити питання, </li> <li>змінити порядок питань у тексті,</li> <li>зміна їх типів питань (числове, коротка відповідь, множинний вибір). </li></ul>';
$string['questionnotfound'] = 'Не можу знайти питання частини #{$a} питання';
$string['questionsadded'] = 'Питання додано';
$string['questionsaveasedited'] = 'Питання було збережено як редаговано';
$string['questionsless'] = '{$a} питань менше ніж багатокритеріальних питань міститься у базі даних';
$string['questionsmissing'] = 'Не допустимі питання, створіть хоча б одне питання';
$string['questionsmore'] = '{$a} питань більше ніж багатокритеріальних питань міститься у базі даних';
$string['questiontypechanged'] = 'Тип питання змінено';
$string['questiontypechangedcomment'] = 'Принаймні один тип запитання було змінено. <br >Ви додали, видалили чи перемістили запитання?<br >Дивіться далі.';
$string['questionusedinquiz'] = 'Це питання використовується в {$a->nb_of_quiz} тесті(ах), в загальній кількості спроб: {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Змінено кількість вбудованих підпитань у запитання.';
$string['storedqtype'] = 'Збережений тип питання {$a}';
$string['subqresponse'] = 'частина {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Невідомий тип питання: {$a->type} частини питання # {$a->sub}';
$string['warningquestionmodified'] = '<b>УВАГА</b>';
$string['youshouldnot'] = '<b>ВИ НЕ ПОВИННІ </b>';
