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
 * Strings for component 'qtype_formulas', language 'ru', version '4.1'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Абсолютная ошибка';
$string['addmorepartsblanks'] = 'Добавить еще части - {no}';
$string['algebraic_formula'] = 'Алгебраическая формула';
$string['answer'] = 'Ответ*';
$string['answer_help'] = '** Требование**.
Должен быть перечень чисел или список значений в зависимости от выбранного типа ответа. При единственном ответе число или значение могут быть введены непосредственно. Обратите внимание на то, что количество элементов в списке задает число полей ответа для этой части.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Ответ и единица измерения для части {$a->part}';
$string['answercombinedunitsingle'] = 'Ответ и единица измерения';
$string['answercoordinatemulti'] = 'Ответ за часть {$a->part} и координаты {$a->numanswer}';
$string['answercoordinatesingle'] = 'Ответ для координаты {$a->numanswer}';
$string['answermark'] = 'Оценка части*';
$string['answermark_help'] = '** Требование **.
Оценка за эту часть ответа должна больше 0.
По умолчанию оценка за весь вопрос - сумма оценок за все части.

Примечание: Если поле оценки этой части будет пустым, то часть будет удалена при сохранении вопроса.';
$string['answermulti'] = 'Ответ за часть {$a->part}';
$string['answerno'] = 'Часть {$a}';
$string['answersingle'] = 'Ответ';
$string['answertype'] = 'Тип ответа';
$string['answertype_link'] = 'https://moodleformulas.org/';
$string['answerunitsingle'] = 'единицa';
$string['choiceno'] = 'Нет';
$string['choiceyes'] = 'Да';
$string['commonsiunit'] = 'Общая единица СИ';
$string['correctansweris'] = 'Один из возможных правильных ответов: {$a}';
$string['correctfeedback'] = 'Для любого правильного ответа';
$string['correctness'] = 'Критерий оценки*';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['correctnessexpert'] = 'Эксперт';
$string['defaultanswertype'] = 'Тип ответа по умолчанию';
$string['defaultcorrectness'] = 'Критерий оценки по умолчанию';
$string['defaultcorrectness_desc'] = 'Критерий оценки по умолчанию для новых вопросов';
$string['defaultunitpenalty'] = 'Штраф за единицу по умолчанию';
$string['defaultunitpenalty_desc'] = 'Штраф по умолчанию за неправильную единицу (0-1)';
$string['error_algebraic_var'] = 'Синтаксическая ошибка определения алгебраической переменной.';
$string['error_answer_missing'] = 'Ответ не был определен.';
$string['error_answerbox_duplicate'] = 'Каждый заполнитель поля ответа может использоваться только один раз.';
$string['error_fixed_range'] = 'Синтаксическая ошибка фиксированного диапазона.';
$string['error_forloop'] = 'Синтаксическая ошибка для цикла';
$string['error_no_answer'] = 'Требуется хотя бы один ответ.';
$string['error_placeholder_main_duplicate'] = 'Дублированный заполнитель в тексте вопроса.';
$string['error_rule'] = 'Ошибка разбора правила!';
$string['error_subexpression_empty'] = 'Подвыражение пусто.';
$string['error_syntax'] = 'Ошибка синтаксиса.';
$string['error_unit'] = 'Ошибка анализа единиц!';
$string['error_unitpenalty'] = 'Штраф должен быть числом от 0 до 1.';
$string['error_validation_eval'] = 'Проверьте ошибку оценки!';
$string['error_vars_array_index_nonnumeric'] = 'Нечисловое значение не может использоваться как индекс списка.';
$string['error_vars_array_index_out_of_range'] = 'Индекс списка вне диапазона !!!';
$string['error_vars_array_size'] = 'Размер списка должен быть в пределах от 1 до 1000.';
$string['error_vars_array_type'] = 'Элемент в списке должен быть одного типа (либо число, либо строка).';
$string['error_vars_bracket_mismatch'] = 'Несоответствие скобок.';
$string['error_vars_end_separator'] = 'Отсутствует разделитель присваиваний в конце.';
$string['error_vars_name'] = 'Синтаксис имени переменной неверен.';
$string['error_vars_reserved'] = 'Функция {$a}() зарезервирована и не может использоваться в качестве переменной.';
$string['error_vars_string'] = 'Ошибка! Либо строка без закрывающей двойной кавычки, либо использование неприемлемого символа, такого как \'.';
$string['error_vars_undefined'] = 'Переменная \'{$a}\' не была определена.';
$string['feedback'] = 'Общая часть отзыва';
$string['feedback_help'] = 'Эта часть отзыва будет показана всем студентам. Он может включать глобальные и локальные переменные, которые будут заменены их значениями.';
$string['functiontakesatleasttwo'] = 'Функция {$a} должна иметь как минимум два аргумента';
$string['functiontakesnoargs'] = 'Функция {$a} не принимает аргументов';
$string['functiontakesonearg'] = 'Функция {$a} должна иметь только один аргумент';
$string['functiontakesoneortwoargs'] = 'Функция {$a} должна иметь один или два аргумента';
$string['functiontakestwoargs'] = 'Функция {$a} должна иметь только два аргумента';
$string['globalvarshdr'] = 'Переменные';
$string['illegalformulasyntax'] = 'Неверный синтаксис формулы, начинающийся с \'{$a}\\';
$string['incorrectfeedback'] = 'За любой неправильный ответ';
$string['incorrectfeedback_help'] = 'Этот отзыв будет показан студентам, которые не получили никакой оценки за эту часть. Он может включать глобальные и локальные переменные, которые будут заменены их значениями.';
$string['mainq'] = 'Основной вопрос';
$string['modelanswer'] = 'Модель ответов';
$string['none'] = 'Ничего';
$string['number'] = 'Число';
$string['number_unit'] = 'Число и единица измерения';
$string['numdataset'] = 'Число из набора данных';
$string['numeric'] = 'Числовой';
$string['numeric_unit'] = 'Число и единица измерения';
$string['numerical_formula'] = 'Числовая формула';
$string['numerical_formula_unit'] = 'Числовая формула и единица измерения';
$string['otherrule'] = 'Другие правила';
$string['otherrule_help'] = 'Здесь автор вопроса может задать дополнительные правила преобразования для других распространенных базовых единиц. Смотрите документацию для эффективного использования.';
$string['partiallycorrectfeedback'] = 'Для любого частично правильного ответа';
$string['partiallycorrectfeedback_help'] = 'Этот отзыв будет показан студентам, которые не получили максимальную оценку в этой части. Он может включать глобальные и локальные переменные, которые будут заменены их значениями.';
$string['placeholder'] = 'Название заполнителя';
$string['placeholder_help'] = 'Заполнитель используется для определения в основном вопросе местоположения
текста, который будет заменен содержимым части. Это строка буквенно-цифровых символов с префиксом \'**#**\', таких как #1, #2a, #2b и #A.

Если это поле оставить пустым, то часть будет добавлена после текста основного вопроса.';
$string['pleaseputananswer'] = 'Поставьте ответ в каждом поле ввода.';
$string['pluginname'] = 'Формулы';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Добавление вопроса «Формулы»';
$string['pluginnameediting'] = 'Редактирование вопроса «Формулы»';
$string['pluginnamesummary'] = 'Тип вопроса со случайными значениями и несколькими ответами.
Поля ответов могут быть размещены где угодно, чтобы создавать вопросы, содержащие различные структуры, такие как векторы, полиномы и матрицы.
Другие функции, такие как проверка единиц и вопросы из нескольких частей, также тесно интегрированы и просты в использовании.';
$string['privacy:metadata'] = 'Плагин типа вопроса «Формулы» не хранит никаких личных данных.';
$string['qtextpreview'] = 'Предварительный просмотр с использованием набора данных';
$string['questiontext'] = 'Текст вопроса';
$string['questiontext_help'] = 'В дополнение к обычному тексту вопроса, вы также можете использовать здесь глобальные переменные и заполнители.

Глобальные переменные будут заменены их значениями, а заполнители будут заменены частями.
     Простой пример с переменными <tt> A, B, C </tt> и заполнителями <tt> #1, #2, #3 </tt>:

<pre class = "prettyprint">Чему равно {A} + {B}? <br>{#1}<br>Чему равно {A} - {B}? <br> {#2}<br>Каков результат {C} / {B}?<br>{#3} </pre>';
$string['relerror'] = 'Относительная ошибка';
$string['renew'] = 'Обновить';
$string['ruleid'] = 'Основные правила конвертации';
$string['ruleid_help'] = 'Этот тип вопроса имеет встроенную систему преобразования единиц измерения и основные правила конвертации.

Основными из них являются правила «системы единиц СИ», по которым значения будут преобразованы в стандартные единицы. Например, единицы измерения длины: км, м, см и мм.
Эта опция не эффективна, если единицы измерения не использовались.';
$string['settingusepopup'] = 'Использовать подсказки';
$string['settingusepopup_desc'] = 'Отобразить правильный ответ и отзыв во всплывающей подсказке';
$string['subqoptions'] = 'Дополнительные параметры';
$string['vars1'] = 'Локальные переменные';
$string['vars2'] = 'Оценочные переменные';
$string['vars2_link'] = 'https://moodleformulas.org/';
$string['varsglobal'] = 'Глобальные переменные';
$string['varsglobal_link'] = 'https://moodleformulas.org/';
$string['varsrandom'] = 'Случайные переменные';
$string['varsrandom_help'] = 'Новые случайные значения генерируются для этих переменных в начале каждой попытки. Это может
быть сделано путем определения набора элементов для выбора:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Элементы могут быть числами, строками или списками из них. В начале новой попытки один элемент будет взят из набора и назначен переменной, расположенной слева. Кроме того, для набора чисел можно использовать обозначение диапазона, например, 10:100:10 (см. выше пример E). </p>';
$string['varsrandom_link'] = 'https://moodleformulas.org/';
$string['varsstatistics'] = 'Статистика';
$string['yougotnright'] = 'Вы правильно ответили на {$a->num} часть (-и, -ей) этого вопроса.';
