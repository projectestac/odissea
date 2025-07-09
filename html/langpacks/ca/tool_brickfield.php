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
 * Strings for component 'tool_brickfield', language 'ca', version '4.4'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Accessibilitat';
$string['accessibilitydisabled'] = 'El conjunt d\'eines d\'accessibilitat Brickfield no està habilitat en aquest servidor. Contacteu amb l\'administració del servidor per activar-lo.';
$string['accessibilityreport'] = 'Conjunt d\'eines d\'accessibilitat';
$string['accessibilitytool'] = 'Eina d\'accessibilitat Brickfield';
$string['accessibilitytools'] = 'Eines d\'accessibilitat Brickfield';
$string['activate'] = 'Activa';
$string['activated'] = 'El connector està activat i a punt per ser utilitzat.';
$string['activationform'] = 'Registre Brickfield';
$string['activationheader'] = 'Activació Brickfield';
$string['activationinfo'] = '<p>Per tal d\'utilitzar aquest connector, heu de proporcionar claus vàlides per al lloc en aquest formulari.</p><p> <a href="{$a}" data-action="send_info" target="_blank">Registreu-vos al portal Brickfield (s\'obre en una finestra nova)</a> per rebre aquestes claus si encara no les teniu. </p><p>Una vegada activat, les vostres claus es validaran a través de les tasques programades del cron.</p>';
$string['activityresults:pluginname'] = 'Informe de l\'eina d\'accessibilitat d\'anàlisi d\'activitat';
$string['activityresults:toolname'] = 'Resum d\'anàlisi d\'activitat';
$string['activityresults:toolshortname'] = 'Anàlisi d\'activitat';
$string['advanced:pluginname'] = 'Informe avançat de l\'eina d\'accessibilitat';
$string['advanced:toolname'] = 'Resum avançat';
$string['advanced:toolshortname'] = 'Avançat';
$string['allcourses'] = 'Tots els cursos revisats ({$a})';
$string['allcoursescat'] = 'Tots els cursos revisats per categoria {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'Per petició';
$string['analysis:disabled'] = 'Inhabilitat';
$string['analysistype'] = 'Habilita la sol·licitud d\'anàlisi';
$string['analysistype_desc'] = 'Permet la sol·licitud de l\'anàlisi d\'accessibilitat del contingut';
$string['analysistypedisabled'] = 'L\'anàlisi del contingut està inhabilitada';
$string['bannercontentone'] = 'El conjunt d\'eines d\'accessibilitat per a l\'empresa té un conjunt de funcionalitats que ajudaran la vostra organització a millorar l\'accessibilitat dels vostres cursos.  <a href="{$a}">Contacteu amb Brickfield Education Labs</a> per reservar una demostració gratuïta de les característiques avançades.';
$string['bannercontenttwo'] = 'Construïu una plataforma d\'ensenyament i aprenentatge inclusiva trobant contingut que no segueix les pautes, arreglant els problemes i garantint el futur del contingut del curs de Moodle amb fitxers accessibles, l\'editor i característiques millorades.';
$string['bannerheadingone'] = 'Actualitza al conjunt d\'eines d\'accessibilitat per a l\'empresa';
$string['batch'] = 'Límit per tanda';
$string['brickfield'] = 'Conjunt d\'eines Brickfield';
$string['brickfield:viewcoursetools'] = 'Mostra els informes per cursos';
$string['brickfield:viewsystemtools'] = 'Mostra els informes per a tots els cursos';
$string['buttonone'] = 'Obtén una demostració gratuïta';
$string['cachepending'] = 'S\'estan compilant les dades de resum';
$string['checkdesc:alinksdontopennewwindow'] = 'Els enllaços que s\'obrin en una finestra nova haurien d\'avisar els usuaris amb antelació.';
$string['checkdesc:amustcontaintext'] = 'Un enllaç necessita contenir text per ser detectable.';
$string['checkdesc:areadontopennewwindow'] = 'Les àrees, utilitzades en mapes d\'imatges, que s\'obrin en una finestra nova haurien d\'avisar els usuaris amb antelació.';
$string['checkdesc:areahasaltvalue'] = 'A les àrees, utilitzades en mapes d\'imatges, no els hauria de faltar el text alternatiu (alt), similar a les imatges.';
$string['checkdesc:asuspiciouslinktext'] = 'El text de l\'enllaç hauria de ser descriptiu i proporcionar context sobre la seva destinació.';
$string['checkdesc:basefontisnotused'] = 'Els elements «basefont» (tradicionalment emprats per formatar) no són accessibles i no s\'haurien d\'usar.';
$string['checkdesc:blinkisnotused'] = 'Els elements «blink», que parpellegen, no són accessibles i no s\'haurien d\'usar.';
$string['checkdesc:boldisnotused'] = 'Els elements «bold» (b) no s\'haurien d\'usar per a la negreta; en lloc d\'això, s\'hi hauria d\'usar «strong».';
$string['checkdesc:contenttoolong'] = 'L\'extensió total del contingut de la pàgina no hauria d\'excedir les 500 paraules.';
$string['checkdesc:csstexthascontrast'] = 'El color de contrast entre el text i el fons és massa baix.';
$string['checkdesc:embedhasassociatednoembed'] = 'Als elements «embed» (per incrustar multimèdia) no els haurien de faltar els elements corresponents «noembed».';
$string['checkdesc:headerh3'] = 'Els encapçalaments després de l\'H3 (l\'opció més gran de l\'editor) no haurien de trencar la jerarquia d\'encapçalament de la pàgina.';
$string['checkdesc:headershavetext'] = 'Un encapçalament necessita contenir text per ser detectable.';
$string['checkdesc:iisnotused'] = 'Els elements «italic» (i) no s\'haurien d\'usar per a la cursiva; en lloc d\'això, s\'hi hauria d\'usar «em».';
$string['checkdesc:imgaltisdifferent'] = 'El text d\'imatge alternatiu (alt) no hauria de ser el nom del fitxer de la imatge.';
$string['checkdesc:imgaltistoolong'] = 'El text d\'imatge alternatiu (alt) no hauria de ser major que el màxim de caràcters permesos (125).';
$string['checkdesc:imgaltnotemptyinanchor'] = 'El text d\'imatge alternatiu (alt) no hauria d\'estar buit, especialment quan la imatge té un enllaç que porta a alguna part.';
$string['checkdesc:imgaltnotplaceholder'] = 'El text d\'imatge alternatiu (alt) no hauria de ser un simple marcador de text, com ara «imatge».';
$string['checkdesc:imghasalt'] = 'El text d\'imatge alternatiu (alt) no hauria de faltar en els elements d\'imatge, tret que sigui purament decoratiu, sense significat.';
$string['checkdesc:imgwithmaphasusemap'] = 'Els mapes d\'imatges, amb àrees clicables, han d\'associar els elements «usemap» i «map».';
$string['checkdesc:legendtextnotempty'] = 'Els elements «legend», emprats per als elements del conjunt de camps de peus o llegendes, haurien de contenir text.';
$string['checkdesc:marqueeisnotused'] = 'Els elements «marquee» (per al desplaçament automàtic) no són accessibles i no s\'haurien d\'usar.';
$string['checkdesc:noheadings'] = 'L\'absència d\'encapçalaments fa el contingut menys estructurat i més difícil de llegir.';
$string['checkdesc:objectmusthaveembed'] = 'Als elements «object» (per incrustar recursos externs) no els haurien de faltar els elements corresponents «embed».';
$string['checkdesc:objectmusthavetitle'] = 'Als elements «object» (per incrustar recursos externs) no els haurien de faltar les descripcions corresponents «title».';
$string['checkdesc:objectmusthavevalidtitle'] = 'Als elements «object» (per incrustar recursos externs) els haurien de correspondre els «titles» amb text.';
$string['checkdesc:strikeisnotused'] = 'Els elements «strike» no s\'haurien d\'usar per ratllar text; en lloc d\'això, s\'hauria d\'usar «del» (suprimit).';
$string['checkdesc:tabledatashouldhaveth'] = 'A les taules, idealment, no haurien de faltar els encapçalaments.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Els resums de taula i els peus no haurien de ser idèntics.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Les taules, idealment, no haurien de tenir cel·les amb marges.';
$string['checkdesc:tablethshouldhavescope'] = 'L\'«scope» de fila o columna d\'una taula (utilitzat per mapar fila i columna a cada cel·la) s\'hauria de declarar.';
$string['checkidvalidation'] = 'Tasca per comprovar per a cada «checkID» no vàlid';
$string['checkscompleted'] = 'Comprovacions completades: {$a}';
$string['checktype:image'] = 'Imatge';
$string['pluginname'] = 'Eines d\'accessibilitat';
$string['printable:downloadpdf'] = 'Descarrega el pdf';
