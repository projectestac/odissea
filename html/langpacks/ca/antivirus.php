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
 * Strings for component 'antivirus', language 'ca', version '4.4'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Connectors d\'antivirus disponibles';
$string['antiviruscommonsettings'] = 'Paràmetres comuns d\'antivirus';
$string['antiviruses'] = 'Connectors d\'antivirus';
$string['antivirussettings'] = 'Gestiona els connectors d\'antivirus';
$string['configantivirusplugins'] = 'Seleccioneu els connectors d\'antivirus que voleu emprar i arrangeu-los en l\'ordre que han d\'aplicar-se.';
$string['dataerrordesc'] = 'S\'ha produït un error en l\'escàner de dades.';
$string['dataerrorname'] = 'Error en l\'escàner de dades';
$string['datainfecteddesc'] = 'S\'han detectat dades infectades.';
$string['datainfectedname'] = 'Dades infectades';
$string['datastream'] = 'Dades';
$string['emailadditionalinfo'] = 'Detalls addicionals retornats per l\'antivirus:';
$string['emailauthor'] = 'Pujat per:';
$string['emailcontenthash'] = 'Hash del contingut:';
$string['emailcontenttype'] = 'Tipus de contingut:';
$string['emaildate'] = 'Data de pujada:';
$string['emailfilename'] = 'Nom del fitxer:';
$string['emailfilesize'] = 'Mida del fitxer:';
$string['emailgeoinfo'] = 'Geolocalització:';
$string['emailinfectedfiledetected'] = 'Fitxer infectat detectat';
$string['emailipaddress'] = 'Adreça IP:';
$string['emailreferer'] = 'Referència:';
$string['emailreport'] = 'Informe:';
$string['emailscanner'] = 'Escàner:';
$string['emailscannererrordetected'] = 'Hi ha hagut un error en l\'escàner';
$string['emailsubject'] = '{$a} :: Notificació d\'antivirus';
$string['enablequarantine'] = 'Activa la quarantena';
$string['enablequarantine_help'] = 'Si s\'habilita, qualsevol fitxer que es detecti com a virus es col·locarà en una carpeta de quarantena ([dataroot]/{$a}) per a una inspecció posterior. La pujada a Moodle fallarà. Si teniu qualsevol exploració de virus a nivell de sistema de fitxers, la carpeta de quarantena s\'ha d\'excloure de la comprovació antivirus per evitar detectar els fitxers en quarantena.';
$string['fileerrordesc'] = 'S\'ha produït un error en l\'escàner de fitxers.';
$string['fileerrorname'] = 'Error en l\'escàner de fitxers';
$string['fileinfecteddesc'] = 'S\'ha detectat un fitxer infectat.';
$string['fileinfectedname'] = 'Fitxer infectat';
$string['notifyemail'] = 'Correu electrònic de notificació d\'alerta antivirus';
$string['notifyemail_help'] = 'L\'adreça de correu electrònic per a les notificacions quan es detecta un virus. Si es deixa en blanc, s\'enviaran notificacions a tots els administradors del lloc.';
$string['notifylevel'] = 'Nivell de notificacions';
$string['notifylevel_help'] = 'Els diferents nivells d\'informació sobre els quals voleu rebre notificacions.';
$string['notifylevelerror'] = 'Amenaces detectades i errors d\'escàner';
$string['notifylevelfound'] = 'Només amenaces detectades';
$string['privacy:metadata'] = 'El sistema Antivirus no emmagatzema cap dada personal.';
$string['quarantinedfiles'] = 'Fitxers en quarantena amb antivirus';
$string['quarantinedisabled'] = 'La quarantena està desactivada. El fitxer no està emmagatzemat.';
$string['quarantinetime'] = 'Temps màxim de quarantena';
$string['quarantinetime_desc'] = 'Se suprimiran els fitxers en quarantena anteriors al període especificat.';
$string['taskcleanup'] = 'Neteja els fitxers en quarantena.';
$string['threshold'] = 'Llindar per a la comprovació d\'estat';
$string['threshold_desc'] = 'Fins a quin punt revisar els resultats anteriors per a detectar errors, etc., tal com s\'informa a {$a}.';
$string['unknown'] = 'Desconegut';
$string['virusfound'] = '{$a->item} ha estat escanejat per un detector de virus i s\'ha identificat com a infectat!';
