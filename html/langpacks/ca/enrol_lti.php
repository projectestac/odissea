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
 * Strings for component 'enrol_lti', language 'ca', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: És recomanable que la configuració de l\'administració del lloc «Permet la inserció en marcs» estigui activada, de manera que les eines es mostrin dins d\'un marc en lloc d\'en una finestra nova.';
$string['authltimustbeenabled'] = 'Nota: Aquest complement requereix que el complement d\'autenticació LTI estigui habilitat.';
$string['cartridgeurl'] = 'URL del cartutx';
$string['couldnotestablishproxy'] = 'No s\'ha pogut establir l\'intermediari amb el consumidor.';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Si s\'habilita, els usuaris sols podran entrar fins aquesta data.';
$string['enrolenddateerror'] = 'La data final d\'inscripció no pot ser anterior a la data de començament.';
$string['enrolisdisabled'] = 'El complement «Publica com a eina LTI» està inhabilitat.';
$string['enrolmentfinished'] = 'Inscripció acabada.';
$string['enrolmentnotstarted'] = 'La inscripció no ha començat.';
$string['enrolperiod'] = 'Durada de la inscripció';
$string['enrolperiod_help'] = 'Interval de temps en què la inscripció és vàlida, començant quan l\'usuari s\'autoinscriu des d\'un sistema remot. Si s\'inhabilita, la durada de la inscripció és il·limitada.';
$string['enrolstartdate'] = 'Data de començament';
$string['enrolstartdate_help'] = 'Si s\'habilita, els usuaris sols poden accedir des d\'aquesta data en endavant.';
$string['failedrequest'] = 'La petició ha fallat. Causa: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Per accedir a l\'eina, seguiu l\'enllaç del dessota.';
$string['gradesync'] = 'Sincronització de les qualificacions';
$string['gradesync_help'] = 'Si les qualificacions de l\'eina s\'envien o no al sistema remot (consumidor LTI).';
$string['incorrecttoken'] = 'El testimoni és incorrecte. Reviseu l\'URL i torneu a provar-ho, o bé contacteu amb l\'administrador d\'aquesta eina.';
$string['invalidrequest'] = 'Petició invàlida';
$string['invalidtoolconsumer'] = 'El consumidor d\'eina no és vàlid.';
$string['launchdetails'] = 'Detalls del llançament';
$string['launchdetails_help'] = 'Cal un URL del cartutx (anomenat també URL de configuració) i una contrasenya per configurar l\'eina.';
$string['lti:config'] = 'Configura les instàncies «Publica com a eina LTI»';
$string['lti:unenrol'] = 'Canceŀla la inscripció a usuaris del curs';
$string['maxenrolled'] = 'Nombre màxim d\'usuaris inscrits';
$string['maxenrolled_help'] = 'El nombre màxim d\'usuaris remots que poden accedir a l\'eina. Si es configura a zero, el nombre d\'usuaris inscrits pot ser iŀlimitat.';
$string['maxenrolledreached'] = 'S\'ha arribat al nombre màxim d\'usuaris remots autoritzats per accedir a l\'eina.';
$string['membersync'] = 'Sincronització d\'usuaris';
$string['membersync_help'] = 'Si existeix o no una tasca programada que sincronitzi els usuaris inscrits en aquest curs amb els usuaris del sistema remot, creant, si s\'escau, un compte per cada usuari remot i inscrivint-los o desinscrivint-los quan calgui.

Si s\'estableix a «no», en el moment en què un usuari remot accedeixi a l\'eina se li crearà un compte i se l\'inscriurà automàticament.';
$string['membersyncmode'] = 'Mode de sincronització d\'usuari';
$string['membersyncmode_help'] = 'Determina si els usuaris remots haurien d\'estar inscrits en aquest curs i/o si se n\'hi hauria d\'anul·lar la inscripció.';
$string['membersyncmodeenrolandunenrol'] = 'Inscriu els usuaris nous i canceŀla la inscripció als usuaris desapareguts.';
$string['membersyncmodeenrolnew'] = 'Inscriu usuaris nous';
$string['membersyncmodeunenrolmissing'] = 'Canceŀla la inscripció als usuaris desapareguts';
$string['notoolsprovided'] = 'No s\'han proporcionat eines';
$string['opentool'] = 'Eina oberta';
$string['pluginname'] = 'Publica com a eina LTI';
$string['pluginname_desc'] = 'El complement «Publica com a eina LTI» juntament amb el complement d\'autenticació LTI, permet als usuaris remots d\'accedir als cursos seleccionats i a les activitats. En altres paraules, Moodle funciona com un proveïdor d\'eina LTI.';
$string['registration'] = 'Registre d\'eines publicades';
$string['registrationurl'] = 'URL per al registre';
$string['registrationurl_help'] = 'Si s\'utilitza un URL de registre (anomenat també URL intermediari), aleshores l\'eina es configurarà automàticament.';
$string['remotesystem'] = 'Sistema remot';
$string['requirecompletion'] = 'Requereix la compleció d\'un curs o activitat de forma prèvia a la sincronització de les qualificacions.';
$string['returnurlnotset'] = 'No s\'ha especificat l\'URL de retorn.';
$string['roleinstructor'] = 'Rol del professor';
$string['roleinstructor_help'] = 'El rol que l\'eina assigna al professor remot.';
$string['rolelearner'] = 'Rol de l\'estudiant';
$string['rolelearner_help'] = 'El rol que l\'eina assigna a l\'estudiant remot.';
$string['secret'] = 'Contrasenya';
$string['secret_help'] = 'Una cadena de caràcters que es comparteix amb el sistema remot (consumidor LTI) per permetre l\'accés a l\'eina.';
$string['sharedexternaltools'] = 'Publicada com a eina LTI';
$string['successfulregistration'] = 'El registre ha tingut èxit.';
$string['tasksyncgrades'] = 'Sincronització de les qualificacions del complement «Publica com a eina LTI»';
$string['tasksyncmembers'] = 'Sincronització dels usuaris del complement «Publica com a eina LTI»';
$string['toolsprovided'] = 'Eines publicades';
$string['toolsprovided_help'] = 'Es pot compartir una eina amb un altre lloc especificant detalls de l\'execució o bé un URL de registre.';
$string['tooltobeprovided'] = 'Eina a publicar';
$string['toolurl'] = 'URL de l\'eina';
$string['userdefaultvalues'] = 'Valors per defecte de l\'usuari';
