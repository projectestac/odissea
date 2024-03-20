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
 * Strings for component 'book', language 'gl', version '4.1'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Engadir un novo capítulo';
$string['addafterchapter'] = 'Engadir un novo capítulo após «{$a->title}»';
$string['book:addinstance'] = 'Engadir un novo libro';
$string['book:edit'] = 'Editar capítulos do libro';
$string['book:read'] = 'Ver  bloque';
$string['book:viewhiddenchapters'] = 'Ver capítulos agochados do libro';
$string['chapterandsubchaptersdeleted'] = 'O capítulo «{$a->title}» e os seuss {$a->subchapters} subcapítulos foron eliminados';
$string['chapterdeleted'] = 'O capítulo «{$a->title}» foi eliminado';
$string['chapters'] = 'Capítulos';
$string['chaptertitle'] = 'Título do capítulo';
$string['confchapterdelete'] = 'Confirma que quere eliminar este capítulo?';
$string['confchapterdeleteall'] = 'Confirma que quere eliminar este capítulo e todos os seus subcapítulos?';
$string['content'] = 'Contido';
$string['customtitles'] = 'Títulos personalizados';
$string['customtitles_help'] = 'Normalmente o título do capítulo amosase na táboa de contidos (TOC) E TAMÉN como cabeceira enriba do contido.

Se activa a caixa para títulos á medida, no título do capítulo NON SE AMOSARÁ como cabeceira enriba do contido. Pódese escribir un título diferente (posibelmente máis longo que o título do capítulo) como parte do contido.';
$string['deletechapter'] = 'Eliminar o capítulo «{$a}»';
$string['editchapter'] = 'Editar o capítulo «{$a}»';
$string['editingchapter'] = 'Editando o capítulo';
$string['errorchapter'] = 'Produciuse un erro ao ler o capítulo d libro.';
$string['eventchaptercreated'] = 'Capítulo creado';
$string['eventchapterdeleted'] = 'Capítulo eliminado';
$string['eventchapterupdated'] = 'Capítulo actualizado';
$string['eventchapterviewed'] = 'Capítulo visto';
$string['hidechapter'] = 'Agochar o capítulo «{$a}»';
$string['indicator:cognitivedepth'] = 'Libro cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está baseado na profundidade cognitiva acadada polo alumno nun recurso libro.';
$string['indicator:cognitivedepthdef'] = 'Libro cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante acadou esta porcentaxe do compromiso cognitivo que ofrecen as actividades do Libro durante este intervalo de análise (Niveis = Sen vista, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Profundidade_cognitiva';
$string['indicator:socialbreadth'] = 'Libro social';
$string['indicator:socialbreadth_help'] = 'Este indicador está baseado na amplitude social acadada polo alumno nun recurso libro.';
$string['indicator:socialbreadthdef'] = 'Libro social';
$string['indicator:socialbreadthdef_help'] = 'O participante acadou esta porcentaxe do compromiso social que ofrecen as actividades do Libro durante este intervalo de análise (Niveis = Sen participación, Participante en solitario)';
$string['indicator:socialbreadthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Amplitude_social';
$string['modulename'] = 'Libro';
$string['modulename_help'] = 'O módulo de libro permítelle a un profesor crear un recurso multipáxina en formato semellante a un libro, con capítulos e subcapítulos. Os libros poden conter ficheiros multimedia así como texto e son prácticos para presentar longos anacos de información que poden subdividirse en seccións.

Un libro pódese usar

* Para presentar material de lectura para módulos individuais de estudo
* Como un manual de persoal de departamento
* Como un modo de presentar un portafolios de traballo do alumno';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Libros';
$string['movechapterdown'] = 'Mover o capítulo «{$a}» cara abaixo';
$string['movechapterup'] = 'Mover o capítulo «{$a}» cara arriba';
$string['navexit'] = 'Saír do libro';
$string['navimages'] = 'Imaxes';
$string['navnext'] = 'Seguinte';
$string['navnexttitle'] = 'Seguinte: {$a}';
$string['navoptions'] = 'Opcións dispoñíbeis para as ligazóns da navegación';
$string['navoptions_desc'] = 'Opcións para amosar a navegación nas páxinas dos libros';
$string['navprev'] = 'Anterior';
$string['navprevtitle'] = 'Anterior: {$a}';
$string['navstyle'] = 'Estilo de navegación';
$string['navstyle_help'] = '* Imaxes - Úsanse iconas para a navegación
* Texto - Úsanse os títulos dos capítulos para a navegación';
$string['navtext'] = 'Texto';
$string['navtoc'] = 'Só a TOC';
$string['nocontent'] = 'Aínda non se engadiu ningún contido a este libro.';
$string['numbering'] = 'Formatado de capítulo';
$string['numbering0'] = 'Ningún';
$string['numbering1'] = 'Número';
$string['numbering2'] = 'Viñetas';
$string['numbering3'] = 'Sangrado';
$string['numbering_help'] = '* Ningún - Os títulos de capítulo e subcapítulo non teñen formatado
* Números - Os títulos de capítulos e subcapítulos preséntanse con viñetas na táboa de contidos
* Viñetas - Os subcapítulos están sangrados e preséntanse con viñetas na táboa de contidos
* Sangrado - Os subcapítulos están sangrados na táboa de contidos';
$string['numberingoptions'] = 'Opcións dispoñíbeis para o formatado de capítulo';
$string['numberingoptions_desc'] = 'As opcións para presentar capítulos e subcapítulos na táboa de contidos';
$string['page-mod-book-x'] = 'Calquera páxina do módulo de libro';
$string['pluginadministration'] = 'Administración de libro';
$string['pluginname'] = 'Libro';
$string['previouschapter'] = 'Capítulo anterior';
$string['privacy:metadata'] = 'O modulo de actividade libro non almacena ningún dato persoal.';
$string['removeallbooktags'] = 'Retirar todas as etiquetas libro';
$string['search:activity'] = 'Libro, información do recurso';
$string['search:chapter'] = 'Libro, capítulos';
$string['showchapter'] = 'Amosar o capítulo «{$a}»';
$string['subchapter'] = 'Subcapítulo';
$string['subchapternotice'] = '(Só está dipoñíbel dende que se cree o primeiro capítulo)';
$string['subplugintype_booktool'] = 'Ferramenta libro';
$string['subplugintype_booktool_plural'] = 'Ferramentas libro';
$string['tagarea_book_chapters'] = 'Capítulos de libro';
$string['tagsdeleted'] = 'As etiquetas do libro foron eliminadas';
$string['toc'] = 'Táboa de contidos';
$string['top'] = 'superior';
