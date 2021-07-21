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
 * Strings for component 'antivirus', language 'sv', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Tillgängliga Antivirus-plugins';
$string['antiviruscommonsettings'] = 'Gemensamma antivirusinställningar';
$string['antiviruses'] = 'Antivirus-plugins';
$string['antivirussettings'] = 'Hantera Antivirus-plugins';
$string['configantivirusplugins'] = 'Vänligen välj de antivirus-plugins du vill använda och arrangera dem i den ordning du vill att de ska tillämpas.';
$string['datainfecteddesc'] = 'Infekterad data har upptäckts.';
$string['datainfectedname'] = 'Infekterad data';
$string['datastream'] = 'Data';
$string['emailadditionalinfo'] = 'Ytterligare information från virus-motorn:';
$string['emailauthor'] = 'Uppladdat av:';
$string['emailcontenthash'] = 'Innehålls-hash:';
$string['emailcontenttype'] = 'Innehållstyp:';
$string['emaildate'] = 'Uppladdningsdatum:';
$string['emailfilename'] = 'Filnamn:';
$string['emailfilesize'] = 'Filstorlek:';
$string['emailgeoinfo'] = 'Plats:';
$string['emailinfectedfiledetected'] = 'Infekterad fil har upptäckts';
$string['emailipaddress'] = 'IP-adress:';
$string['emailreferer'] = 'Referens:';
$string['emailreport'] = 'Rapport:';
$string['emailscanner'] = 'Antivirusprogram:';
$string['emailscannererrordetected'] = 'Ett fel inträffade vid genomsökningen';
$string['emailsubject'] = '{$a} :: Antivirusnotis';
$string['enablequarantine'] = 'Aktivera karantän';
$string['enablequarantine_help'] = 'Om aktiverad kommer alla infekterade filer som upptäcks placeras i en karantänmapp ([dataroot]/{$a}) för senare inspektion. Uppladdningen i Moodle kommer att misslyckas. Om du använder ett antivirusprogram på filnivå bör denna katalog uteslutas från sökningen för att undvika att eventuella filer i karantän ger utslag.';
$string['fileinfecteddesc'] = 'En infekterad fil upptäcktes.';
$string['fileinfectedname'] = 'Infekterad fil';
$string['notifyemail'] = 'E-post för notifiering från Antivirusprogrammet';
$string['notifyemail_help'] = 'E-postadress för notifieringar när ett virus upptäcks. Om detta fält lämnas tomt kommer alla webbplatsadministratörer få notifieringen.';
$string['privacy:metadata'] = 'Antivirussystemet lagrar inga personliga data.';
$string['quarantinedfiles'] = 'Filer i karantän';
$string['quarantinedisabled'] = 'Karantän är inaktiverad. Filen lagras inte.';
$string['quarantinetime'] = 'Maximal karantäntid';
$string['quarantinetime_desc'] = 'Filer i karantän äldre än den angivna perioden kommer att tas bort.';
$string['taskcleanup'] = 'Städa upp filer i karantän';
$string['unknown'] = 'Okänd';
$string['virusfound'] = '{$a->item} har sökts igenom av antivirusprogrammet och har konstaterats vara infekterad!';
