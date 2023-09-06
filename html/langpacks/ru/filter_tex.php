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
 * Strings for component 'filter_tex', language 'ru', version '4.1'.
 *
 * @package     filter_tex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configconvertformat'] = 'Если доступны <i>latex</i> и <i>dvips</i> в дополнение к <i>convert</i> или <i>dvisvgm</i>, то выберите предпочтительный тип изображения (<i>convert</i> создает GIF или PNG; <i>dvisvgm</i> - SVG). Иначе будет использоваться mimeTeX, который создаёт GIF-изображения.';
$string['convertformat'] = 'Выходной формат изображения';
$string['filtername'] = 'Формулы в формате TeX';
$string['latexpreamble'] = 'Преамбула LaTeX';
$string['latexsettings'] = 'Настройки визуализатора LaTeX';
$string['pathconvert'] = 'Путь к исполняемому файлу <i>convert</i>';
$string['pathdvips'] = 'Путь к исполняемому файлу <i>dvips</i>';
$string['pathdvisvgm'] = 'Путь к исполняемому файлу <i>dvisvgm</i>';
$string['pathlatex'] = 'Путь к исполняемому файлу <i>latex</i>';
$string['pathmimetex'] = 'Путь к исполняемому файлу <i>mimetex</i>';
$string['pathmimetexdesc'] = 'Moodle будет использовать свой собственный исполняемый файл MimeTeX, если здесь не указан другой корректный путь в файлу.';
$string['privacy:metadata'] = 'Плагин Нотация TeX не хранит никаких персональных данных.';
$string['source'] = 'Источник TeX';
