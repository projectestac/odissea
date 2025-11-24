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
 * Strings for component 'antivirus_clamav', language 'ca', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Hi ha un problema amb l\'escaneig de l\'antivirus en aquest moment. El vostre fitxer {$a->item} no s\'ha pujat. Si us plau, intenteu-ho més tard.';
$string['clamfailed'] = 'No s\'ha pogut executar Clam AV. El missatge d\'error retornat és «{$a}». Heus aquí la sortida de Clam:';
$string['clamfailureonupload'] = 'En cas d\'errada del ClamAV';
$string['configclamactlikevirus'] = 'Tracta els fitxers com a virus';
$string['configclamdonothing'] = 'Tracta els fitxers com a correctes';
$string['configclamfailureonupload'] = 'Si heu configurat el Clam per tal d\'escanejar els fitxers pujats, però està mal configurat o falla en executar-se per alguna raó desconeguda, com s\'ha d\'actuar? Si escolliu «Tracta els fitxers com a virus», es mouran a l\'àrea de quarantena, o s\'esborraran. Si escolliu «Tracta els fitxers com a correctes», els fitxers es mouran al seu directori normal de destinació. Sigui com sigui, s\'advertirà als administradors que el Clam ha fallat. Si escolliu «Tracta els fitxers com a virus» i per alguna raó el Clam falla en executar-se (normalment, perquè heu introduït un valor no vàlid a la variable «pathtoclam»), TOTS els fitxers que es pugin es mouran a l\'àrea de quarantena o s\'esborraran, per la qual cosa heu d\'anar amb compte amb aquest paràmetre.';
$string['configclamtryagain'] = 'Rebutja la pujada i torna-ho a provar';
$string['errorcantopensocket'] = 'En connectar-se al sòcol del domini Unix, s\'ha produït un error {$a}';
$string['errornounixsocketssupported'] = 'El transport de sòcols de domini Unix no té suport en aquest sistema. Si us plau, utilitzeu l\'opció de línia de comandes.';
$string['invalidpathtoclam'] = 'Moodle ha estat configurat per executar Clam amb cada fitxer que es pengi, pero el camí de Clam AV proporcionat, {$a}, no és vàlid.';
$string['pathtoclam'] = 'Línia d\'ordres';
$string['pathtoclamdesc'] = 'Si el mètode d\'execució està configurat com a «línia de comandes», introduïu aquí el camí a ClamAV. A Linux, serà /usr/bin/clamscan o /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Sòcol de domini Unix';
$string['pathtounixsocketdesc'] = 'Si el mètode d\'execució s\'estableix a «Sòcol de domini Unix», introduïu aquí la ruta al sòcol ClamAV Unix. A Debian Linux això serà /var/run/clamav/clamd.ctl. Assegureu-vos que el dimoni de clamav tingui accés de lectura als fitxers pujats; la manera més senzilla d\'assegurar-vos-en és afegir l\'usuari «clamav» al vostre grup de servidors web («www-data» a Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'El connector antivirus ClamAV no emmagatzema cap dada personal.';
$string['quarantinedir'] = 'Directori de quarantena';
$string['runningmethod'] = 'Mètode d\'execució';
$string['runningmethodcommandline'] = 'Línia de comandes';
$string['runningmethoddesc'] = 'Mètode d\'execució de ClamAV. La línia de comandes s\'utilitza de manera predeterminada, però en sistemes Unix es pot obtenir un millor rendiment mitjançant l\'ús de sòcols del sistema.';
$string['runningmethodtcpsocket'] = 'Sòcol TCP';
$string['tcpsockethostdesc'] = 'Nom de domini del servidor ClamAV';
$string['tcpsocketportdesc'] = 'El port que s\'ha d\'utilitzar quan es connecta a ClamAV';
$string['tries'] = 'Intents d\'escaneig';
$string['tries_desc'] = 'Nombre d\'intents realitzats per ClamAV si hi ha un error durant el procés d\'escaneig.';
$string['tries_notice'] = 'L\'exploració Clamav ha provat {$a->tries} vegades.
{$a->notice}';
$string['unknownerror'] = 'Error desconegut de Clam.';
