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
 * Strings for component 'qformat_multianswer', language 'uk', version '4.5'.
 *
 * @package     qformat_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Вбудовані відповіді (пропущені слова)';
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
$string['privacy:metadata'] = 'Плагін Embedded answers question не зберігає жодних особистих даних.';
