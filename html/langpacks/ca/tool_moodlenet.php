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
 * Strings for component 'tool_moodlenet', language 'ca', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Afegint contingut de MoodleNet';
$string['aria:enterprofile'] = 'Introduïu el vostre ID del perfil de MoodleNet';
$string['aria:footermessage'] = 'Navega pel contingut de MoodleNet';
$string['autoenablenotification'] = '<p>A partir del Moodle 4.0, la integració de <a href="https://moodle.net/">MoodleNet</a> està habilitada per defecte a les funcions avançades. Els usuaris amb la capacitat de crear i gestionar activitats poden navegar per MoodleNet a través del selector d\'activitats i importar-ne recursos als seus cursos.</p><p>Si es vol, es pot especificar una instància alternativa de MoodleNet a la <a href="{$a->settingslink}">configuració d\'entrada a MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'El paràmetre per defecte de MoodleNet ha canviat.';
$string['browsecontentmoodlenet'] = 'O navega pels continguts de MoodleNet';
$string['clearsearch'] = 'Esborra la cerca';
$string['connectandbrowse'] = 'Connecta i navega:';
$string['defaultmoodlenet'] = 'URL de MoodleNet';
$string['defaultmoodlenet_desc'] = 'L\'URL de la instància de MoodleNet disponible a través del selector d\'activitats.';
$string['defaultmoodlenetname'] = 'Nom de la instància de MoodleNet';
$string['defaultmoodlenetname_desc'] = 'El nom de la instància de MoodleNet disponible a través del selector d\'activitats.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Habilita la integració amb MoodleNet (entrada)';
$string['enablemoodlenet_desc'] = 'Si està habilitat, els usuaris amb la capacitat de crear i gestionar activitats poden navegar per MoodleNet a través del selector d\'activitats i importar-ne recursos al seu curs. A més, els usuaris amb la capacitat de restaurar còpies de seguretat poden seleccionar un fitxer de còpia de seguretat a MoodleNet i restaurar-lo al Moodle.';
$string['errorduringdownload'] = 'S\'ha produït un error en descarregar el fitxer: {$a}';
$string['footermessage'] = 'O navega pels continguts de';
$string['forminfo'] = 'El vostre ID de perfil de MoodleNet es desarà automàticament al vostre perfil en aquest lloc.';
$string['importconfirm'] = 'Esteu a punt d\'importar el contingut «{$a->resourcename} ({$a->resourcetype})» al curs «{$a->coursename}». Esteu segur que voleu continuar?';
$string['importconfirmnocourse'] = 'Esteu a punt d\'importar el contingut «{$a->resourcename} ({$a->resourcetype})» al vostre lloc web. Esteu segur que voleu continuar?';
$string['importformatselectguidingtext'] = 'En quin format voleu que s\'afegeixi el contingut «{$a->name} ({$a->type})» al vostre curs?';
$string['importformatselectheader'] = 'Trieu el format de visualització del contingut';
$string['inputhelp'] = 'O si ja teniu un compte de MoodleNet, copieu l\'ID del vostre perfil de MoodleNet i enganxeu-lo aquí:';
$string['instancedescription'] = 'MoodleNet és una plataforma de xarxes socials oberta per a educadors, centrada en la curació col·laborativa de col·leccions de recursos oberts.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-exemple@moodle.net';
$string['invalidmoodlenetprofile'] = 'El format de $userprofile no és correcte.';
$string['missinginvalidpostdata'] = 'La informació del recurs de MoodleNet no hi és o té un format incorrecte.
Si això passa repetidament, poseu-vos en contacte amb l\'administrador del lloc.';
$string['mnetprofile'] = 'Perfil de MoodleNet';
$string['mnetprofiledesc'] = '<p>Introduïu aquí les dades del vostre perfil de MoodleNet per ser redirigit al vostre perfil quan visiteu MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'La integració amb MoodleNet ha d\'estar habilitada a Administració del lloc / MoodleNet per a què es puguin processar les importacions de recursos.';
$string['moodlenetsettings'] = 'Configuració d\'entrada a MoodleNet';
$string['notification'] = 'Esteu a punt d\'importar el contingut «{$a->name} ({$a->type})» al vostre lloc web. Seleccioneu el curs on s\'ha d\'afegir o <a href="{$a->cancellink}">cancel·leu</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'L\'eina MoodleNet només facilita la comunicació amb MoodleNet. No emmagatzema dades.';
$string['profilevalidationerror'] = 'S\'ha produït un problema en intentar validar l\'ID del vostre perfil de MoodleNet.';
$string['profilevalidationfail'] = 'Introduïu un ID de perfil de MoodleNet vàlid.';
$string['profilevalidationpass'] = 'Té bon aspecte!';
$string['removalwarning_feature'] = 'Si necessiteu continuar utilitzant MoodleNet, poseu-vos en contacte amb l\'administrador del vostre lloc web per configurar una instància de MoodleNet autoallotjada.';
$string['removalwarning_service'] = 'Després d\'aquesta data, ja no podreu navegar ni afegir contingut de MoodleNet Central.';
$string['removalwarning_title'] = 'El servei MoodleNet es tancarà el 20 d\'abril de 2026.';
$string['removedmnetprofilenotification'] = 'A causa dels canvis recents a la plataforma MoodleNet, qualsevol usuari que hagi desat prèviament el seu ID de perfil de MoodleNet al lloc web haurà d\'introduir un ID de perfil de MoodleNet en el format nou per autenticar-se a la plataforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Canvi de format d\'ID del perfil de MoodleNet';
$string['saveandgo'] = 'Desa i vés-hi';
$string['searchcourses'] = 'Cerca cursos';
$string['selectpagetitle'] = 'Tria una pàgina';
$string['uploadlimitexceeded'] = 'La mida del fitxer {$a->filesize} supera el límit de càrrega de l\'usuari de {$a->uploadlimit} bytes.';
