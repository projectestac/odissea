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
 * Strings for component 'block', language 'ru', version '4.1'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Любая страница, подходящая под вышеуказанное';
$string['appearsinsubcontexts'] = 'Отображаются в подчиненных контекстах';
$string['assignrolesinblock'] = 'Назначение ролей в блоке «{$a}»';
$string['blocksdrawertoggle'] = 'Отобразить/скрыть выдвижную область блоков';
$string['blocksettings'] = 'Настройки блока';
$string['bracketfirst'] = '{$a} (первый)';
$string['bracketlast'] = '{$a} (последний)';
$string['configureblock'] = 'Настроить блок «{$a}»';
$string['contexts'] = 'Контексты страниц';
$string['contexts_help'] = 'Контексты конкретных типов страниц, где этот блок может быть отображен в своем исходном расположении. Вы будете иметь различные варианты в зависимости от исходного расположения блока и своего текущего местонахождения.
Например, можно ограничить блок отображением его в курсе только на страницах форума. Можно добавить блок в курс (сделав его отображающимся на всех страницах курса), а при переходе на форум и редактировании настроек блока снова ограничить видимость блока только страницами форума.';
$string['createdat'] = 'Первоначальное расположение блока';
$string['createdat_help'] = 'Оригинальное месторасположение блока, где он был создан. Настройки блока могут привести к его отображению и в других местах (контекстах) в исходном месторасположении. Например, блок созданный на странице курса, может быть отображен в элементах этого курса. Блок, созданный на главной странице, будет отображаться на всём сайте.';
$string['defaultregion'] = 'Область по умолчанию';
$string['defaultregion_help'] = 'Темы могут определять одну или несколько областей (колонок), где будут отображаться блоки. Этот параметр определяет, в какой из них Вы хотите по умолчанию отображать блок. При необходимости его расположение на конкретных страницах может быть изменено.';
$string['defaultweight'] = 'Вес по умолчанию';
$string['defaultweight_help'] = 'Вес по умолчанию позволяет ориентировочно выбрать, где Вы хотите отображать блок в указанной области - вверху или внизу. Окончательное местоположение рассчитывается исходя из всех блоков в этой области (в действительности только один блок может быть вверху). При необходимости это значение на конкретных страницах может быть изменено.';
$string['deleteblock'] = 'Удалить блок «{$a}»';
$string['deleteblockcheck'] = 'Вы уверены, что хотите удалить блок «{$a}»?';
$string['deleteblockinprogress'] = 'Удаление блока {$a} ...';
$string['deleteblockwarning'] = '<p> Вы собираетесь удалить блок, который отображается где-то в другом месте. </p><p> Оригинальное расположение блока: {$a->location} <br /> Отображается на страницах: {$a->pagetype} </p><p> Вы уверены, что хотите продолжить? </p>';
$string['deletecheck'] = 'Удалить блок «{$a}»?';
$string['deletecheck_modal'] = 'Удалить блок?';
$string['hideblock'] = 'Скрыть блок «{$a}»';
$string['hidepanel'] = 'Скрыть панель';
$string['moveblock'] = 'Переместить блок «{$a}»';
$string['moveblockafter'] = 'Поместить блок после блока «{$a}»';
$string['moveblockbefore'] = 'Поместить блок перед блоком «{$a}»';
$string['moveblockinregion'] = 'Переместить блок в область «{$a}»';
$string['movingthisblockcancel'] = 'Перемещение этого блока ({$a})';
$string['myblocks'] = 'Мои блоки';
$string['onthispage'] = 'На этой странице';
$string['pagetypes'] = 'Типы страниц';
$string['pagetypewarning'] = 'Больше нет возможности выбирать указанный ранее тип страницы. Выберите наиболее подходящий тип страницы из приведенных ниже.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Записывает, когда пользователь помещает блок в док';
$string['privacy:metadata:userpref:hiddenblock'] = 'Записывает, когда пользователь сворачивает/скрывает блок';
$string['privacy:request:blockisdocked'] = 'Показывает, был ли блок помещен в док';
$string['privacy:request:blockishidden'] = 'Показывает, был ли блок скрыт/свернут';
$string['region'] = 'Область';
$string['restrictpagetypes'] = 'Ограничить этими типами страниц';
$string['showblock'] = 'Показать блок «{$a}»';
$string['showoncontextandsubs'] = 'Показывать на «{$a}» и любых подстраницах';
$string['showoncontextonly'] = 'Показывать только на странице «{$a}»';
$string['showonentiresite'] = 'Отображать на всем сайте';
$string['showonfrontpageandsubs'] = 'Показывать на главной странице и на всех страницах, добавленных к главной';
$string['showonfrontpageonly'] = 'Отображать только на главной странице';
$string['subpages'] = 'Выберите страницы';
$string['thisspecificpage'] = 'Эта конкретная страница';
$string['visible'] = 'Видимый';
$string['weight'] = 'Вес';
$string['wherethisblockappears'] = 'Где отображать этот блок';
