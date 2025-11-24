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
 * Strings for component 'block', language 'uk', version '4.5'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Додати блок {$a}';
$string['anypagematchingtheabove'] = 'Будь-яка сторінка, яка відповідає вказаному';
$string['appearsinsubcontexts'] = 'З’являється у суб-контентах';
$string['assignrolesinblock'] = 'Призначити ролі у блок {$a}';
$string['blocksdrawertoggle'] = 'Приховати/показати ящик блоків';
$string['blocksettings'] = 'Налаштування блоку';
$string['bracketfirst'] = '{$a} (ім’я)';
$string['bracketlast'] = '{$a} (прізвище)';
$string['configureblock'] = 'Налаштувати блок {$a}';
$string['contexts'] = 'Контексти сторінки';
$string['contexts_help'] = 'Контексти більш конкретні типи сторінок, де цей блок може бути відображеним у місці розташування блоків. Ви будете мати тут різні варіанти в залежності від вихідного розташування блоку і вашого поточного місце розташування. Наприклад, можна обмежити появу блоку тільки сторінками форуму в курсі, додавши блок до курсу (що заставить його з\'явитися на всіх суб-сторінках курсу), то при переході на форум та редагуванні  налаштувань блоку знову обмежити його показ тільки сторінками форуму.';
$string['createdat'] = 'Оригінальне розташування блоку';
$string['createdat_help'] = 'Початкове місце, де був створений блок. Налаштування блокування можуть спричинити його відображення в інших місцях (контекстах) у вихідному місці. Наприклад, блок, створений на сторінці курсу, може відображатися в діяльності в рамках цього курсу. Блок, створений на головній сторінці сайту, може відображатися по всьому сайту.';
$string['defaultregion'] = 'Типова область';
$string['defaultregion_help'] = 'Теми можуть визначати одну або більше іменованих блоків показу, де блоки будуть з’являтися. Цей параметр визначає, в яких з них ви хочете, щоб цей блок з’являвся типово. Якщо потрібно, то місце може бути змінене для конкретних сторінок.';
$string['defaultweight'] = 'Типова вага';
$string['defaultweight_help'] = 'Типова вага дозволяє визначити місце розташування блоку у вибраній області сайту у порівнянні з іншими блоками, вище або нижче. Остаточне розташування розраховується з врахуванням усіх блоків у цьому місці (наприклад, тільки один блок справді може бути у верхній частині). Якщо потрібно, то це значення може бути змінено для конкретних сторінок, .';
$string['deleteblock'] = 'Видалити блок {$a}';
$string['deleteblockcheck'] = 'Це видалить блок {$a}.';
$string['deleteblockinprogress'] = 'Видалення блоку {$a} триває...';
$string['deleteblockwarning'] = '<p>Ви збираєтеся видалити блок, який з\'являється в іншому місці.</p><p>Оригінальне розміщення блоку: {$a->location}<br />Показується на типах сторінок: {$a->pagetype}</p><p>Ви впевнені, що хочете продовжити?</p>';
$string['deletecheck'] = 'Видалити блок  {$a} ?';
$string['deletecheck_modal'] = 'Видалити блок?';
$string['hideblock'] = 'Приховати блок {$a}';
$string['hidepanel'] = 'Приховати панель';
$string['moveblock'] = 'Перемістити блок {$a}';
$string['moveblockafter'] = 'Перемістити блок після блоку {$a}';
$string['moveblockbefore'] = 'Перемістити блок перед блоком {$a}';
$string['moveblockinregion'] = 'Перемістити блок до області {$a}';
$string['movingthisblockcancel'] = 'Перемістити цей блок ({$a})';
$string['myblocks'] = 'Мої блоки';
$string['onthispage'] = 'На цю сторінку';
$string['pagetypes'] = 'Типи сторінок';
$string['pagetypewarning'] = 'Попередньо вказаний тип сторінки вже не підтримується. Будь ласка, вкажіть зі списку нижче тип, який найбільш відповідатиме.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Записує, коли користувач закріпив блок';
$string['privacy:metadata:userpref:hiddenblock'] = 'Записує, коли користувач згорнув/приховав блок';
$string['privacy:request:blockisdocked'] = 'Вказує, чи був блок закріплений';
$string['privacy:request:blockishidden'] = 'Вказує, чи був блок прихований/згорнутий';
$string['region'] = 'Область';
$string['restrictpagetypes'] = 'Обмежити цими типами сторінок';
$string['showblock'] = 'Показати блок {$a}';
$string['showoncontextandsubs'] = 'Показувати на \'{$a}\'  та будь-яких сторінках в них';
$string['showoncontextonly'] = 'Показувати тільки на \'{$a}\'';
$string['showonentiresite'] = 'Показувати на всьому сайті';
$string['showonfrontpageandsubs'] = 'Відображати на домашній сторінці сайту та будь-яких сторінках, доданих на домашню сторінку сайту.';
$string['showonfrontpageonly'] = 'Відображати лише на головній сторінці сайту';
$string['subpages'] = 'Конкретні суб-сторінки';
$string['thisspecificpage'] = 'Ця конкретна сторінка (сторінка {$a})';
$string['visible'] = 'Видимість';
$string['weight'] = 'Вага';
$string['wherethisblockappears'] = 'Де цей блок з\'являється';
