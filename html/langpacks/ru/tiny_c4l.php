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
 * Strings for component 'tiny_c4l', language 'ru', version '4.1'.
 *
 * @package     tiny_c4l
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalhtml'] = 'Дополнительный HTML';
$string['aimedatstudents'] = 'Для студентов';
$string['aimedatstudents_desc'] = 'По умолчанию при работе с редактором пользователям с ролью студента будут доступны только выбранные компоненты. Чтобы изменить настройки по умолчанию, просто установите или снимите флажок с выбранного вами варианта.';
$string['align-center'] = 'Выравнивание по центру';
$string['align-left'] = 'Выравнивание по левому краю';
$string['align-right'] = 'Выравнивание по правому краю';
$string['allpurposecard'] = 'Универсальная карточка';
$string['attention'] = 'Внимание';
$string['button_c4l'] = 'C4L';
$string['c4l:viewplugin'] = 'Видеть плагин C4L';
$string['comfort-reading'] = 'Комфортное чтение';
$string['contextual'] = 'Контекстные';
$string['custom'] = 'Пользовательские';
$string['customcompcode'] = 'Код HTML компонента {$a}';
$string['customcompcodedesc'] = 'Слово <code>{{CUSTOMCLASS}}</code> - это обязательный класс, который должен находиться рядом с классами CSS вашего основного компонента. <br />
Пример кода:
<pre>
&lt;div class="{{CUSTOMCLASS}} &lt;!-- Добавьте сюда свои основные классы CSS --&gt;"&gt;
    &lt;p&gt;{{PLACEHOLDER}}&lt;/p&gt;
&lt;/div&gt;
</pre>
Помните, что любой код Javascript или встроенный CSS будут удалены перед рендерингом.';
$string['customcompcount'] = 'Количество пользовательских компонентов';
$string['customcompcountdesc'] = 'Количество созданных пользовательских компонентов';
$string['customcompenable'] = 'Включить компонент {$a}';
$string['customcompenabledesc'] = 'Если включено, этот компонент будет доступен.';
$string['customcompicon'] = 'Иконка компонента {$a}';
$string['customcompicondesc'] = 'Необязательная иконка компонента. Рекомендованный размер: 18x18 пикселей.';
$string['customcompname'] = 'Текст на кнопке компонента {$a}';
$string['customcompnamedesc'] = 'Текст, отображаемый внутри кнопки.';
$string['customcomponents'] = 'Пользовательские компоненты';
$string['customcompsortorder'] = 'Порядок сортировки компонента {$a}';
$string['customcompsortorderdesc'] = 'Задаёт позицию компонента в пользовательском интерфейсе.';
$string['customcomptext'] = 'Заполнитель текста компонента {$a}';
$string['customcomptextdesc'] = 'Текст, который будет отображаться в качестве заполнителя в вашем компоненте. Вставьте в код слово {{PLACEHOLDER}}.';
$string['customcomptitle'] = 'Пользовательский компонент {$a}';
$string['customcompvariant'] = 'Включить варианты компонента {$a}';
$string['customcompvariantdesc'] = 'Если эта опция включена, для данного компонента будет доступен вариант во всю ширину.';
$string['customimagesbank'] = 'Банк рисунков';
$string['customimagesbankdesc'] = 'Чтобы вставить любое из загруженных изображений в ваш код, добавьте строку:<br />
<code>&lt;img src="{{filename.extension}}" alt="Custom image"&gt;</code>';
$string['custompreviewcss'] = 'Код CSS';
$string['custompreviewcssdesc'] = 'CSS, используемый для предварительного просмотра компонентов в редакторе.
<p>Любой CSS-код, добавленный здесь, должен быть также включен в вашу тему или внутри тегов стиля <code>&lt;style&gt;...&lt;style&gt;</code> и сохранен в настройках <strong>additionalhtmlhead</strong> по адресу {$a};
иначе стили не будут применяться к компонентам при отображении.</p>';
$string['do-card'] = 'Карточка «делать»';
$string['dodontcards'] = 'Карточки «делать/не делать»';
$string['dont-card'] = 'Карточка «не делать»';
$string['duedate'] = 'Срок выполнения';
$string['enablepreview'] = 'Включить предпросмотр';
$string['enablepreview_desc'] = 'Если эта функция включена, то при наведении курсора мыши на каждый компонент отображается предварительный просмотр.';
$string['estimatedtime'] = 'Примерное время';
$string['evaluative'] = 'Оценочные';
$string['example'] = 'Пример';
$string['expectedfeedback'] = 'Отзыв';
$string['figure'] = 'Рисунок';
$string['full-width'] = 'Во всю ширину';
$string['generalsettings'] = 'Общее';
$string['gradingvalue'] = 'Оценка';
$string['helper'] = 'Вспомогательные';
$string['inlinetag'] = 'Встроенный тег';
$string['keyconcept'] = 'Ключевая концепция';
$string['learningoutcomes'] = 'Результаты обучения';
$string['menuitem_c4l'] = 'Компоненты для обучения (C4L)';
$string['notintendedforstudents'] = 'Не для студентов';
$string['notintendedforstudents_desc'] = 'По умолчанию оценочные и процедурные компоненты не предназначены для использования в редакторе пользователями с ролью студента. Чтобы изменить настройку по умолчанию, отметьте компоненты, которые вы хотите сделать доступными для студентов.';
$string['ordered-list'] = 'Пользовательские компоненты';
$string['pluginname'] = 'Компоненты для обучения (C4L)';
$string['preview'] = 'Предварительный просмотр';
$string['previewdefault'] = 'Для предварительного просмотра любого компонента наведите на него указатель.';
$string['privacy:preference:components_variants'] = 'Предпочтительные варианты каждого компонента';
$string['procedural'] = 'Процедурные';
$string['proceduralcontext'] = 'Процедурный контекст';
$string['quote'] = 'Цитирование';
$string['readingcontext'] = 'Контекст чтения';
$string['reminder'] = 'Напоминание';
$string['tag'] = 'Тег';
$string['tip'] = 'Подсказка';
