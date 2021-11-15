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
 * Strings for component 'antivirus', language 'gl', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Engadidos antivirus dispoñíbeis';
$string['antiviruscommonsettings'] = 'Axustes comúns do antivirus';
$string['antiviruses'] = 'Engadidos antivirus';
$string['antivirussettings'] = 'Xestionar os engadidos de antivirus';
$string['configantivirusplugins'] = 'Escolla os engadidos de antivirus que desexa utilizar e dispóñaos na orde de aplicación.';
$string['datainfecteddesc'] = 'Detectáronse datos infectados.';
$string['datainfectedname'] = 'Datos infectados';
$string['datastream'] = 'Datos';
$string['emailadditionalinfo'] = 'Detalles adicionais devoltos polo motor de virus:';
$string['emailauthor'] = 'Cargado por:';
$string['emailcontenthash'] = 'Cadea de control do contido:';
$string['emailcontenttype'] = 'Tipo de contido:';
$string['emaildate'] = 'Data de carga:';
$string['emailfilename'] = 'Nome de ficheiro:';
$string['emailfilesize'] = 'Tamaño do ficheiro:';
$string['emailgeoinfo'] = 'Xeolocalización:';
$string['emailinfectedfiledetected'] = 'Detectouse o ficheiro infectado';
$string['emailipaddress'] = 'Enderezo IP:';
$string['emailreferer'] = 'Referente:';
$string['emailreport'] = 'Informe:';
$string['emailscanner'] = 'Escáner:';
$string['emailscannererrordetected'] = 'Produciuse un erro do escáner';
$string['emailsubject'] = '{$a} :: Notificación de antivirus';
$string['enablequarantine'] = 'Activar a corentena';
$string['enablequarantine_help'] = 'Se está activado, os ficheiros detectados como virus colocaranse nun cartafol de corentena ([dataroot]/{$a}) para a súa posterior inspección. A carga en Moodle fallará. Se ten algún escaneo de virus a nivel de sistema de ficheiros, o cartafol de corentena debería excluírse da comprobación antivirus para evitar detectar os ficheiros en corentena.';
$string['fileinfecteddesc'] = 'Detectouse un ficheiro infectado.';
$string['fileinfectedname'] = 'Ficheiro infectado';
$string['notifyemail'] = 'Correo de notificación de alerta antivirus';
$string['notifyemail_help'] = 'O enderezo de correo para as notificacións cando se detecta un virus. Se se deixa en branco, recibirán as notificacións a todos os administradores do sitio.';
$string['privacy:metadata'] = 'O sistema de antivirus non almacena ningún dato persoal.';
$string['quarantinedfiles'] = 'Ficheiros en corentena de antivirus';
$string['quarantinedisabled'] = 'A corentena está desactivada. O ficheiro non está almacenado.';
$string['quarantinetime'] = 'Tempo máximo de corentena';
$string['quarantinetime_desc'] = 'Eliminaranse os ficheiros en corentena anteriores ao período especificado.';
$string['taskcleanup'] = 'Limpar os ficheiros en corentena.';
$string['unknown'] = 'Descoñecido';
$string['virusfound'] = '{$a->item}, foi examinado por un antivirus e detectouse que está infectado!';
