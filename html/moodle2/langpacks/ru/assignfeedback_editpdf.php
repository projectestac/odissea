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
 * Strings for component 'assignfeedback_editpdf', language 'ru', branch 'MOODLE_34_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Добавить в список быстрого вызова';
$string['annotationcolour'] = 'Цвет аннотации';
$string['black'] = 'Черный';
$string['blue'] = 'Синий';
$string['cannotopenpdf'] = 'Не удается открыть файл PDF. Файл может быть поврежден или имеет неподдерживаемый формат.';
$string['clear'] = 'Очистить';
$string['colourpicker'] = 'Выбор цвета';
$string['command'] = 'Команда:';
$string['comment'] = 'Комментарии';
$string['commentcolour'] = 'Цвет комментария';
$string['commentcontextmenu'] = 'Контекстное меню комментария';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Невозможно сохранить страницу {$a}';
$string['currentstamp'] = 'Штамп';
$string['deleteannotation'] = 'Удалить аннотацию';
$string['deletecomment'] = 'Удалить комментарий';
$string['deletefeedback'] = 'Удалить PDF-файл с отзывом';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Загрузить PDF-файл с озывом';
$string['draftchangessaved'] = 'Черновые комментарии сохранены';
$string['editpdf'] = 'Аннотирование PDF';
$string['editpdf_help'] = 'Аннотирование студенческих работ происходит непосредственно в браузере. В результате создается доступный для загрузки отредактированный PDF-файл.';
$string['enabled'] = 'Аннотирование PDF';
$string['enabled_help'] = 'При включенном параметре учитель может создать PDF-файлы аннотации при оценивании работ. Это позволяет учителю добавить комментарий, рисунок и штампы прямо поверх студенческих работ. Аннотация делается в браузере и не требует дополнительного программного обеспечения.';
$string['errorgenerateimage'] = 'Ошибка создания изображения с использованием Ghostscript, информация отладчика: {$a}';
$string['errorpdfpage'] = 'При создании этой страницы произошла ошибка.';
$string['expcolcomments'] = 'Развернуть/свернуть все комментарии';
$string['filter'] = 'Фильтр комментариев ...';
$string['generatefeedback'] = 'Создать PDF-файл с отзывом';
$string['generatingpdf'] = 'Создание PDF ...';
$string['gotopage'] = 'Перейти на страницу';
$string['green'] = 'Зеленый';
$string['gsimage'] = 'Тестовое изображение Ghostscript';
$string['highlight'] = 'Выделение';
$string['jsrequired'] = 'Для аннотирования PDF требуется JavaScript. Включите JavaScript в своем браузере, чтобы использовать эту функцию.';
$string['launcheditor'] = 'Запуск редактора PDF...';
$string['line'] = 'Линия';
$string['loadingeditor'] = 'Загрузка редактора PDF';
$string['navigatenext'] = 'Следующая страница';
$string['navigateprevious'] = 'Предыдущая страница';
$string['output'] = 'Выход:';
$string['oval'] = 'Овал';
$string['pagenumber'] = 'Страница  {$a}';
$string['pagexofy'] = 'Страница {$a->page} из {$a->total}';
$string['pathtogspathdesc'] = 'Обратите внимание, что для работы плагина «Аннотирование PDF» требуется указать путь в файлам Ghostscript на странице {$a}.';
$string['pen'] = 'Ручка';
$string['pluginname'] = 'Аннотирование PDF';
$string['preparesubmissionsforannotation'] = 'Подготовить присланные задания для комментирования';
$string['rectangle'] = 'Прямоугольник';
$string['red'] = 'Красный';
$string['result'] = 'Результат:';
$string['searchcomments'] = 'Поиск комментариев';
$string['select'] = 'Выбрать';
$string['stamp'] = 'Штамп';
$string['stamppicker'] = 'Выбор штампа';
$string['stamps'] = 'Штампы';
$string['stampsdesc'] = 'Штампы должны быть файлами изображений (рекомендованный размер: 40x40). Эти изображения могут быть использованы с инструментом Штамп для аннотации PDF.';
$string['test_doesnotexist'] = 'Путь к ghostscript указывает на несуществующий файл';
$string['test_empty'] = 'Путь к ghostscript пуст - введите корректный путь';
$string['testgs'] = 'Тест пути к ghostscript';
$string['test_isdir'] = 'Путь к ghostscript ведет к папке, укажите программу ghostscript в заданном пути';
$string['test_notestfile'] = 'Тестовый PDF-файл отсутствует';
$string['test_notexecutable'] = 'Путь к ghostscript ведет к не исполняемому файлу';
$string['test_ok'] = 'Похоже, что путь к Ghostscript указан верно. Пожалуйста, убедитесь, что вы можете прочитать сообщение на изображении ниже.';
$string['tool'] = 'Инструмент';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Просмотреть аннотированный PDF-файл...';
$string['white'] = 'Белый';
$string['yellow'] = 'Желтый';
