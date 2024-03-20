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
 * Strings for component 'qtype_calculated', language 'uk', version '4.1'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Додати варіант';
$string['addmoreanswerblanks'] = 'Додати ще порожній варіант відповіді';
$string['addsets'] = 'Додати набір (набори)';
$string['answerdisplay'] = 'Показати відповідь';
$string['answerformula'] = 'Формула відповіді {$a}';
$string['answerhdr'] = 'Відповідь';
$string['answerstoleranceparam'] = 'Параметри похибки для відповіді';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Будь-яке значення';
$string['atleastoneanswer'] = 'Ви повинні подати хоча б одну відповідь.';
$string['atleastonerealdataset'] = 'У тексті питання має бути присутнім як мінімум один реальний набір даних';
$string['atleastonewildcard'] = 'Як мінімум один символ підстановки повинен бути присутнім у формулі для відповіді або у тексті питання';
$string['calcdistribution'] = 'Розподіл';
$string['calclength'] = 'Десяткових знаків';
$string['calcmax'] = 'Максимум';
$string['calcmin'] = 'Мінімум';
$string['choosedatasetproperties'] = 'Вибір властивостей наборів даних для символів підстановки';
$string['choosedatasetproperties_help'] = 'Набір даних є набором значень, що вставляється замість символів підстановки. Ви можете створити приватний набір даних для конкретного питання або загальний набір даних, які можуть бути використані іншими розрахунковими питаннями, що входять в категорію.';
$string['correctanswerformula'] = 'Формула для правильної відповіді (без "=", напр.: <b>2*sin({x}+{y})</b>)';
$string['correctanswershows'] = 'Правильна відповідь показує';
$string['correctanswershowsformat'] = 'Формат';
$string['correctfeedback'] = 'Для будь-якої правильної відповіді';
$string['dataitemdefined'] = 'з {$a} числових значень вже визначено доступність';
$string['datasetrole'] = 'Символи підстановки (шаблони) <strong>{x..}</strong> будуть замінені числовими значеннями з їх наборів даних.';
$string['decimals'] = 'з {$a}';
$string['deleteitem'] = 'Видалити елемент';
$string['deletelastitem'] = 'Видалити останній елемент';
$string['distributionoption'] = 'Виберіть параметр розподілення';
$string['editdatasets'] = 'Редагування наборів даних для символів підстановки';
$string['editdatasets_help'] = 'Значення символів підстановки можуть бути створені шляхом введення числа в кожне поле символів підстановки та натисканням кнопки "Додати". Для автоматичного створення 10 або більше значень виберіть необхідну кількість значень та натисніть на кнопку "Додати". Рівномірний розподіл означає, що будь-яке значення діапазону може бути згенеровано з однаковою ймовірністю; логарифмічний розподіл означає, що більш імовірно значення з нижньої частини діапазону.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'буде використано існуючий відкритий набір даних';
$string['existingcategory2'] = 'файл із вже існуючого набору файлів, які також використовуються у інших питаннях в цій категорії';
$string['existingcategory3'] = 'посилання із вже наявного набору посилань, які також використовуються у інших питаннях в цій категорії';
$string['forceregeneration'] = 'примусова регенерація';
$string['forceregenerationall'] = 'примусове генерування значень для усіх символів підстановки';
$string['forceregenerationshared'] = 'примусове генерування значень тільки для символів підстановки, які не є загальними';
$string['functiontakesatleasttwo'] = 'Функція {$a} повинна мати як мінімум 2 аргументи';
$string['functiontakesnoargs'] = 'Функція {$a} не приймає ніяких аргументів';
$string['functiontakesonearg'] = 'Функція {$a} повинна мати тільки один аргумент';
$string['functiontakesoneortwoargs'] = 'Функція {$a} повинна мати один або два аргументи';
$string['functiontakestwoargs'] = 'Функція {$a} повинна мати тільки два аргументи';
$string['generatevalue'] = 'Генерувати нове значення в межах';
$string['getnextnow'] = 'Отримати новий "Варіант для додавання" зараз';
$string['hexanotallowed'] = 'Набір даних <strong>{$a->name}</strong> шістнадцятковий формат даних {$a->value} не допускає';
$string['illegalformulasyntax'] = 'Некоректний синтаксис формули починаючи з \'{$a}\'';
$string['incorrectfeedback'] = 'Для будь-якої неправильної відповіді';
$string['itemno'] = 'Елемент {$a}';
$string['itemscount'] = 'Кількість<br />елементів';
$string['itemtoadd'] = 'Варіант для додавання';
$string['keptcategory1'] = 'використовувати тій самий існуючий загальний набір даних, що і раніше';
$string['keptcategory2'] = 'файл з тієї ж категорії багаторазового набору файлів, як перед цим';
$string['keptcategory3'] = 'посилання з тієї ж категорії багаторазового набору посилань, як перед цим';
$string['keptlocal1'] = 'використовувати тій самий існуючий приватний набір даних, що і раніше';
$string['keptlocal2'] = 'файл з того ж питання приватного набору файлів, як і раніше';
$string['keptlocal3'] = 'посилання з того ж питання приватного набору посилань, як і раніше';
$string['lengthoption'] = 'Виберіть параметр довжини';
$string['loguniform'] = 'Логарифмічний розподіл';
$string['loguniformbit'] = 'цифр, з логарифмічним розподілом';
$string['makecopynextpage'] = 'Наступна сторінка (нове питання)';
$string['mandatoryhdr'] = 'Символи підстановки, що обов’язково повинні бути присутніми у відповіді';
$string['max'] = 'Макс.';
$string['min'] = 'Мін.';
$string['minmax'] = 'Діапазон значень';
$string['missingformula'] = 'Відсутня формула';
$string['missingname'] = 'Відсутня назва питання';
$string['missingquestiontext'] = 'Відсутній текст питання';
$string['mustenteraformulaorstar'] = 'Ви повинні ввести формулу або \'*\'.';
$string['newcategory1'] = 'використовувати новий загальний набір даних';
$string['newcategory2'] = 'файл з нового набору файлів, які можуть бути використані іншими питаннями в цій категорії';
$string['newcategory3'] = 'посилання з нового набору посилань, які можуть бути використані іншими питаннями в цій категорії';
$string['newlocal1'] = 'використовувати новий приватний набір даних';
$string['newlocal2'] = 'файл з нового набору файлів, які будуть використовуватися тільки в цьому питанні';
$string['newlocal3'] = 'посилання з нового набору посилань, які будуть використовуватися тільки в цьому питанні';
$string['newsetwildcardvalues'] = 'новий набір (набори) значень для символу (символів) підстановки';
$string['nextitemtoadd'] = 'Наступний "Варіант для додавання"';
$string['nextpage'] = 'Наступна сторінка';
$string['nocoherencequestionsdatyasetcategory'] = 'Для питання id {$a->qid} в категорії id {$a->qcat} немає збігання із загальним символом підстановки {$a->name} категорії id {$a->sharedcat}. Відредагуйте питання.';
$string['nocommaallowed'] = '"," (кома) не може використовуватися, використовуйте "." (крапку) як в 0.013 або 1.3e-2';
$string['nodataset'] = 'нічого - це не символ підстановки';
$string['nosharedwildcard'] = 'Немає загальних символів підстановки у цій категорії';
$string['notvalidnumber'] = 'Значення символу підстановки не є коректним числом';
$string['oneanswertrueansweroutsidelimits'] = 'Щонайменше одна правильна відповідь поза межами діапазону правильного значення.<br />Змінити налаштування похибки відповідей, що доступні в розширених параметрах';
$string['param'] = 'Параметр {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Для будь-якої частково правильної відповіді';
$string['pluginname'] = 'Розрахунковий';
$string['pluginname_help'] = 'Розрахункові питання дозволяють створення індивідуальних числових питань з використанням символів підстановки (шаблонів) у фігурних дужках, які підставляються з індивідуальними значеннями, коли тест запускається. Наприклад, питання: "Яка площа прямокутника довжиною {L} і шириною {W}?", повинне містити коректну формулу для відповіді {= {L} * {W}} (де * означає множення).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Додати питання типу Розрахунковий';
$string['pluginnameediting'] = 'Редагувати питання типу Розрахунковий';
$string['pluginnamesummary'] = 'Розрахункові питання схожі з числовими, але тут числа можуть вибиратися випадковим чином з деякого заданого набору в момент запуску тесту.';
$string['possiblehdr'] = 'Можливі символи підстановки представлені тільки у тексті питання';
$string['privacy:metadata'] = 'Плагін типу «Обчислюване запитання» не зберігає жодних особистих даних.';
$string['questiondatasets'] = 'Набори даних для питання';
$string['questiondatasets_help'] = 'Набори даних для символів підстановки всередині питання використовуватимуться у кожному окремому питанні';
$string['questionstoredname'] = 'Збережена назва питання';
$string['replacewithrandom'] = 'Замінити на випадкове значення';
$string['reuseifpossible'] = 'повторно використати попереднє доступне значення';
$string['setno'] = 'Набір {$a}';
$string['setwildcardvalues'] = 'набір (набори) значень для символу (символів) підстановки';
$string['sharedwildcard'] = 'Загальний символ підстановки {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Загальний символ підстановки';
$string['sharedwildcards'] = 'Загальні символи підстановки';
$string['showitems'] = 'Показувати';
$string['significantfigures'] = 'з {$a}';
$string['significantfiguresformat'] = 'значущих цифр';
$string['synchronize'] = 'Синхронізуйте дані зі спільних наборів даних з іншими запитаннями у тесті';
$string['synchronizeno'] = 'Не синхронізувати';
$string['synchronizeyes'] = 'Синхронізувати';
$string['synchronizeyesdisplay'] = 'Синхронізувати та відобразити назву спільних наборів даних як префікс назви запитання';
$string['tolerance'] = 'Толерантність ±';
$string['tolerancetype'] = 'Тип';
$string['trueanswerinsidelimits'] = 'Правильна відповідь: {$a->correct} в межах діапазону правильного значення {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ПОМИЛКА правильної відповіді: {$a->correct} поза межами дійсного значення {$a->true}</span>';
$string['uniform'] = 'Рівномірний розподіл';
$string['uniformbit'] = 'десяткових знаків, з рівномірним розподілом';
$string['unsupportedformulafunction'] = 'Функція {$a} не підтримується';
$string['updatecategory'] = 'Оновити категорію';
$string['updatedatasetparam'] = 'Оновити параметри наборів даних';
$string['updatetolerancesparam'] = 'Оновити параметри похибки для відповіді';
$string['updatewildcardvalues'] = 'Оновити значення символу (символів) підстановки';
$string['useadvance'] = 'Використовуйте додаткову кнопку для перегляду помилок';
$string['usedinquestion'] = 'Використано в питанні';
$string['wildcard'] = 'Символ підстановки {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Параметри символів підстановки, що використовуються для генерування значень';
$string['wildcardrole'] = 'Символи підстановки (шаблони) <strong>{x..}</strong> будуть замінені числовими значеннями, що генеруватимуться.';
$string['wildcards'] = 'Символи підстановки {a}...{z}';
$string['wildcardvalues'] = 'Значення символу (символів) підстановки';
$string['wildcardvaluesgenerated'] = 'Згенеровані значення символу (символів) підстановки';
$string['youmustaddatleastoneitem'] = 'Ви маєте додати як мінімум один варіант набору даних, перш ніж зможете зберегти це питання.';
$string['youmustaddatleastonevalue'] = 'Ви маєте додати як мінімум один набір значень для символу (символів) підстановки, перш ніж зможете зберегти це питання.';
$string['zerosignificantfiguresnotallowed'] = 'Коректна відповідь не може мати 0 значущих цифр!';
