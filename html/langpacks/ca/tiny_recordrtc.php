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
 * Strings for component 'tiny_recordrtc', language 'ca', version '4.4'.
 *
 * @package     tiny_recordrtc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedtypes'] = 'Tipus d\'enregistrament';
$string['allowedtypes_desc'] = 'Quins botons d\'enregistrament haurien d\'aparèixer a Atto? A més d\'aquest paràmetre, també hi ha capacitats que poden controlar l\'accés als botons d\'usuaris concrets en contextos concrets.';
$string['attachrecording'] = 'Adjunta un enregistrament';
$string['audioandvideo'] = 'Àudio i vídeo';
$string['audiobitrate'] = 'Taxa de bits d\'àudio';
$string['audiobitrate_desc'] = 'Qualitat de l\'enregistrament d\'àudio (com més alt és el número, millor qualitat).';
$string['audiobuttontitle'] = 'Enregistra àudio';
$string['audiotimelimit'] = 'Límit de temps de l\'àudio';
$string['audiotimelimit_desc'] = 'Durada màxima d\'enregistrament per a clips d\'àudio.';
$string['audiotitle'] = 'Enregistra àudio';
$string['confirm_yes'] = 'Sí';
$string['discard_desc'] = 'Hi ha un enregistrament en curs. El voleu aturar?';
$string['discard_title'] = 'Tanca la confirmació';
$string['gumabort'] = 'Ha passat alguna cosa estranya que ha impedit l\'accés a la càmera o al micròfon.';
$string['gumabort_title'] = 'Ha passat alguna cosa';
$string['gumnotallowed'] = 'Cal que permeteu l\'accés a la càmera i/o al micròfon';
$string['gumnotallowed_title'] = 'Els permisos són incorrectes';
$string['gumnotfound'] = 'No s\'ha detectat cap dispositiu d\'entrada.';
$string['gumnotfound_title'] = 'No s\'ha trobat cap dispositiu';
$string['gumnotreadable'] = 'Alguna cosa impedeix que el navegador accedeixi a la càmera o al micròfon; intenteu-ho de nou!';
$string['gumnotreadable_title'] = 'Error de maquinari';
$string['gumnotsupported'] = 'El vostre navegador no admet l\'enregistrament en una connexió no segura.';
$string['gumnotsupported_title'] = 'No hi ha suport per a una connexió no segura';
$string['gumoverconstrained'] = 'La càmera o el micròfon no pot crear un flux amb les restriccions preestablertes';
$string['gumoverconstrained_title'] = 'Hi ha un problema amb les restriccions';
$string['gumsecurity'] = 'El vostre navegador no admet l\'enregistrament mitjançant una connexió insegura.';
$string['gumsecurity_title'] = 'No hi ha suport per a connexions insegures';
$string['gumtype'] = 'S\'ha intentat obtenir el flux de la càmera o el micròfon, però no s\'han especificat les restriccions';
$string['gumtype_title'] = 'No s\'ha definit cap restricció';
$string['helplinktext'] = 'Enregistrament RTC';
$string['insecurealert'] = 'El vostre navegador podria no permetre que aquest connector funcioni tret que s\'utilitzi mitjançant HTTPS o des de localhost.';
$string['insecurealert_title'] = 'Connexió no segura!';
$string['kbrate'] = '{$a} kbps';
$string['maxfilesizehit'] = 'Heu assolit el límit de mida màxim per a la càrrega de fitxers.';
$string['maxfilesizehit_title'] = 'S\'ha aturat l\'enregistrament';
$string['norecordingfound'] = 'Alguna cosa ha anat malament. No s\'ha enregistrat res.';
$string['norecordingfound_title'] = 'No s\'ha trobat cap enregistrament';
$string['nowebrtc'] = 'El vostre navegador ofereix un suport limitat o cap suport per a les tecnologies WebRTC i no es pot utilitzar amb aquest connector. Canvieu o actualitzeu el vostre navegador.';
$string['nowebrtc_title'] = 'No s\'admet la tecnologia WebRTC';
$string['onlyaudio'] = 'Només àudio';
$string['onlyvideo'] = 'Només vídeo';
$string['pluginname'] = 'RecordRTC';
$string['privacy:metadata'] = 'El connector RecordRTC no emmagatzema cap dada personal.';
$string['recordagain'] = 'Enregistra de nou';
$string['recordagain_desc'] = 'Ja heu enregistrat algun contingut. Si ho torneu a fer, s\'esborrarà aquest contingut. Esteu segur que voleu restablir l\'enregistrament?';
$string['recordagain_title'] = 'Confirmació d\'enregistrar de nou';
$string['recordingfailed'] = 'L\'enregistrament ha fallat. Torneu-ho a provar.';
$string['recordinguploaded'] = 'Enregistrament carregat';
$string['recordrtc:recordaudio'] = 'Enregistra l\'àudio a l\'editor de text';
$string['recordrtc:recordvideo'] = 'Enregistra el vídeo a l\'editor de text';
$string['startrecording'] = 'Inicia l\'enregistrament';
$string['stoprecording'] = 'Atura l\'enregistrament';
$string['timelimitwarning'] = 'Heu d\'introduir un nombre més gran que 0.';
$string['uploadaborted'] = 'S\'ha cancel·lat la pujada:';
$string['uploadfailed'] = 'La pujada ha fallat amb l\'error: {$a->error}';
$string['uploadfailed404'] = 'La pujada ha fallat: el fitxer és mass gran';
$string['uploading'] = 'Pujada - {$a->progress}%';
$string['uploadprogress'] = 'completat';
$string['videobitrate'] = 'Velocitat de bits de vídeo';
$string['videobitrate_desc'] = 'Qualitat de l\'enregistrament de vídeo (com més alt és el número, millor qualitat).';
$string['videobuttontitle'] = 'Enregistra vídeo';
$string['videotimelimit'] = 'Límit de temps del vídeo';
$string['videotimelimit_desc'] = 'Durada màxima d\'enregistrament per a videoclips.';
$string['videotitle'] = 'Enregistra vídeo';
