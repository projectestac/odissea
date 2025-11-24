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
 * Strings for component 'qtype_essay', language 'ca', version '4.5'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipus de fitxers acceptats:';
$string['acceptedfiletypes_help'] = 'Els tipus de fitxers acceptats es poden restringir introduint una llista d\'extensions de fitxers. Si el camp es deixa buit, tots els tipus de fitxer estaran permesos.';
$string['allowattachments'] = 'Permet adjuncions';
$string['answerfiles'] = 'Fitxers de resposta';
$string['answertext'] = 'Text de resposta';
$string['attachedfiles'] = 'Adjuncions: {$a}';
$string['attachmentsoptional'] = 'Les adjuncions són opcionals';
$string['attachmentsrequired'] = 'Adjuncions requerides';
$string['attachmentsrequired_help'] = 'Aquesta opció especifica el nombre mínim de fitxers adjunts que ha de tenir una resposta per ser considerada com a puntuable.';
$string['err_maxminmismatch'] = 'El límit màxim de paraules ha de ser superior al límit mínim de paraules';
$string['err_maxwordlimit'] = 'El límit màxim de paraules està habilitat, però no definit';
$string['err_maxwordlimitnegative'] = 'El límit màxim de paraules no pot ser un número negatiu';
$string['err_minwordlimit'] = 'El límit mínim de paraules està habilitat, però no definit';
$string['err_minwordlimitnegative'] = 'El límit mínim de paraules no pot ser un número negatiu';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML amb selector de fitxers';
$string['formatmonospaced'] = 'Text simple, font monoespaiada';
$string['formatnoinline'] = 'Sense text en línia';
$string['formatplain'] = 'Text simple';
$string['graderinfo'] = 'Informació per als puntuadors';
$string['graderinfoheader'] = 'Informació del qualificador';
$string['maxbytes'] = 'Mida màxima del fitxer';
$string['maxwordlimit'] = 'Límit màxim de paraules';
$string['maxwordlimit_help'] = 'Si la resposta requereix que els estudiants introdueixin text, aquest és el nombre màxim de paraules que cada estudiant podrà enviar.';
$string['maxwordlimitboundary'] = 'El límit de paraules per a aquesta pregunta és de {$a->limit} paraules i esteu intentant enviar {$a->count} paraules. Escurceu la vostra resposta i torneu-ho a provar.';
$string['minwordlimit'] = 'Límit mínim de paraules';
$string['minwordlimit_help'] = 'Si la resposta requereix que els estudiants introdueixin text, aquest és el nombre mínim de paraules que cada estudiant podrà enviar.';
$string['minwordlimitboundary'] = 'Aquesta pregunta requereix una resposta d\'almenys {$a->limit} paraules i esteu intentant enviar {$a->count} paraules. Amplieu la vostra resposta i torneu-ho a provar.';
$string['mustattach'] = 'Quan se selecciona «Sense text en línia», o quan les respostes són opcionals, heu de permetre com a mínim un fitxer adjunt.';
$string['mustrequire'] = 'Quan se selecciona «Sense text en línia» o quan les respostes són opcionals, heu de requerir almenys un fitxer adjunt.';
$string['mustrequirefewer'] = 'No podeu demanar més adjunts dels que permeteu.';
$string['nlines'] = '{$a} línies';
$string['nonexistentfiletypes'] = 'No s\'han reconegut els tipus de fitxer següents: {$a}';
$string['pluginname'] = 'Resposta oberta';
$string['pluginname_help'] = 'En resposta a una pregunta, l\'enquestat pot carregar un o més fitxers i/o introduir text en línia. Es pot proporcionar una plantilla de resposta. Les respostes s\'han de qualificar manualment.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'S\'està afegint una pregunta de resposta oberta';
$string['pluginnameediting'] = 'S\'està editant una pregunta de resposta oberta';
$string['pluginnamesummary'] = 'Permet respondre amb un fitxer carregat i/o amb un text en línia. S\'ha de qualificar manualment.';
$string['privacy:metadata'] = 'El connector de tipus de pregunta oberta permet als autors de preguntes establir opcions predeterminades com a preferències de l\'usuari.';
$string['privacy:preference:attachments'] = 'Nombre de fitxers adjunts permesos.';
$string['privacy:preference:attachmentsrequired'] = 'Nombre de fitxers adjunts requerits.';
$string['privacy:preference:defaultmark'] = 'La nota predeterminada establerta per a una pregunta determinada.';
$string['privacy:preference:maxbytes'] = 'Mida màxima del fitxer.';
$string['privacy:preference:responsefieldlines'] = 'Nombre de línies que indica la mida del quadre d\'entrada (àrea de text).';
$string['privacy:preference:responseformat'] = 'Quin és el format de resposta (editor HTML, text pla, etc.)?';
$string['privacy:preference:responserequired'] = 'Si l\'estudiant ha d\'introduir text o si l\'entrada de text és opcional.';
$string['responsefieldlines'] = 'Dimensions del quadre d\'entrada';
$string['responseformat'] = 'Format de la resposta';
$string['responseisrequired'] = 'Cal que l\'estudiant introdueixi un text';
$string['responsenotrequired'] = 'La introducció de text és opcional';
$string['responseoptions'] = 'Opcions de resposta';
$string['responserequired'] = 'Text requerit';
$string['responsetemplate'] = 'Plantilla de resposta';
$string['responsetemplate_help'] = 'Qualsevol text introduït aquí es mostrarà en el quadre d\'entrada de la resposta quan s\'iniciï un nou intent de la pregunta.';
$string['responsetemplateheader'] = 'Plantilla de resposta';
$string['wordcount'] = 'Recompte de paraules: {$a}';
$string['wordcounttoofew'] = 'Recompte de paraules: {$a->count}, menys que les {$a->limit} paraules requerides.';
$string['wordcounttoomuch'] = 'Recompte de paraules: {$a->count}, més del límit de {$a->limit} paraules.';
