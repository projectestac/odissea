<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Добавяне на ограничения (условия) към променливи.';
$string['addmorevarblanks'] = 'Празни места за още {no} променливи';
$string['answerinvalid'] = 'Низът отговор не е валиден. Това не трябва да се случва.';
$string['answermissing'] = 'Липсва отговор. Вероятно JavaScript не е включена в браузъра или е възникнала неизвестна грешка.';
$string['answervar'] = 'Променливи за автоматично оценяване';
$string['answervar_help'] = 'За автоматично оценяване: име на булев обект в GeoGebra, които е верен (истинен), ако ученикът е отговорил на въпроса (частично). Събират се всички оценки от всички булеви променливи. Въпросът е верен, ако някоя комбинация надвишава 100%, но трябва да има поне една комбинация, които има сбор точно 100%. Оставете празно за ръчно оценяване.';
$string['applet_advanced_settings'] = 'Разширени настройки...';
$string['constraints'] = 'Ограничения (условия)';
$string['constraints_help'] = 'Има ли някакви ограничения за променливите, като например a < b, които не могат да бъдат декларирани чрез опциите на слайдера? Разделени със запетаи, поддържаните връзки са: <, <=, >, >=. Ако е необходимо, равенство може да използва същата променлива, когато се създава GeoGebra работен лист. Динамични диапазони, като например използване на променлива за минимум/максимум, не са поддържани.';
$string['constraintswrongortoohard'] = '{$a->inequalities} са грешни или твърде трудни за изпълнение. Опитахме (груба сила) {$a->tries} пъти за {$a->time} секунди. Може би ще използваме по-добър метод в бъдеще...';
$string['dragndrop'] = 'Придърпайте и пуснете GeoGebra файл където и да е в секцията на GeoGebra Аплета';
$string['enable_label_drags'] = 'Разрешаване на придърпване на етикети';
$string['enable_right_click'] = 'Разрешаване на десен клик и редакция от клавиатурата';
$string['enable_shift_drag_zoom'] = 'Разрешаване на Shift-Придърпване & Увеличаване';
$string['feedback'] = 'Обратна връзка, когато променливата е истина';
$string['feedback_help'] = 'Обратна връзка се получава автоматично от надписа на променливата в GeoGebra файла.';
$string['geogebraapplet'] = 'GeoGebra аплет';
$string['getvars'] = 'Получаване на променливи, които могат да бъдат направени произволни от аплета';
$string['ggbfilemissing'] = 'Низът base64 в отговора липсва. Вероятно string JavaScript не е включен в браузъра или е възникнала неизвестна грешка';
$string['ggbturl'] = 'URL или ID на GeoGebra работен лист';
$string['ggbturl_help'] = 'Можете или да използвате бутона за споделяне на GeoGebra и да копирате и да поставите линка или да използвате GeoGebra хранилище. Аплетът и параметрите са запазени в базата данни, аплетът няма да бъде презареден от GeoGebra освен ако не е поискано. Само представяне на ID или код за споделяне от аплета е също поддържан.';
$string['ggbxmlmissing'] = 'XML-стрингът в отговора липсва. Може би JavaScript не е включен в браузъра или е възникнала неизвестна грешка';
$string['invalidinequality'] = '{$a} е невалиден';
$string['isexercise'] = 'Използване на GeoGebra-Упражнение за проверка на въпроса';
$string['isexercise_help'] = 'Аплетът съдържа инструменти на потребителя, които могат да бъдат използвани за автоматична проверка на упражнението.\nВнимание: Не всички отговори по-долу са приложими в този случай!';
$string['israndomized'] = 'Има ли променливи, които да бъдат произволно избрани?';
$string['loadapplet'] = '(Пре)зареждане и показване на аплет';
$string['loadapplet_help'] = '(Пре)зареждане на аплет от GeoGebra и запазване на новата версия от GeoGebra в базата с данни.';
$string['mineqmax'] = 'Минимумът и максимумът за рандомизацията не са зададени правилно за променлицата {$a}. Или не сте задали минимум или максимум на слайдера, или елементът изобщо не е слайдер. Може би трябва да поправите това във Вашия GeoGebra файл.';
$string['minplusstepgtmax'] = 'Минимумът плюс инкремента е по-голям от максимума за променливата {$a}. Може би трябва да коригирате това във Вашия GeoGebra файл.';
$string['noappletloaded'] = 'Няма зареден аплет! Проверете дали URL адресът е верен и дали виждате аплет след избиране на линк или (пре)зареждане на аплета.';
$string['nofractionsumeq1'] = 'Поне една комбинация от оценки трябва да има сума 100%';
$string['pluginname_help'] = 'Въпросу, на които ученикът да отговори, използвайки GeoGebra';
$string['pluginnameadding'] = 'Добавяне на GeoGebra въпрос';
$string['pluginnameediting'] = 'Редактиране на GeoGebra въпрос';
$string['pluginnamesummary'] = 'Версия на изчислените въпроси, която използва GeoGebra, за да покаже въпроса и да потвърди отговора, когато се провежда викторина.';
$string['randomizedbutnovars'] = 'Избрали сте, че въпросът може да бъде направен произволен, но не сте посочили валидни променливи, които да бъдат произволни.';
$string['randomizedvar'] = 'Променливи, които да бъдат произволни';
$string['randomizedvar_help'] = 'Променливи, които могат да бъдат направени произволни (разделени със запетаи). Използвайте опциите на плъзгача в GeoGebra, за да декларирате Минимум, Максимум и Увеличение. Тези променливи могат също така да бъдат използвани в текста на въпроса, оградени от големи скоби, например: {a}';
$string['show_algebra_input'] = 'Показване на лента за входни данни';
$string['show_menu_bar'] = 'Показване на Меню';
$string['show_reset_icon'] = 'Показване на икона за започване на конструкцията от начало';
$string['show_tool_bar'] = 'Показване на Лента с инструменти';
$string['stepzero'] = 'Увеличението е 0 за променливата {$a}; или не сте посочили увеличението на плъзгача, или елементът изобщо не е плъзгач. Вероятно трябва да поправите това във Вашия GeoGebra файл.';
$string['useafile'] = '... или използвайте ggb-файл';
$string['valuecheckedfor'] = 'Булев обект в GeoGebra, който е използван за проверка на коректност.';
$string['variablenamewrong'] = 'Променлива с това име не може да бъде открита в GeoGebra файла.';
$string['variableno'] = 'Променлива {$a}';
$string['variables'] = 'Променливи';
$string['willbereadfromfile'] = 'Ще бъде прочетено от GeoGebra... (виж бутона Помощ)';
