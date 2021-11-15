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
 * Strings for component 'search_solr', language 'eu', version '3.11'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Zehaztutako Solr zerbitzaria ez dago eskuragarri edo zehaztutako indizea ez da existitzen.';
$string['connectionsettings'] = 'Konexio-ezarpenak';
$string['errorcreatingschema'] = 'Errorea Solr eskema sortzean: {$a}';
$string['errorsolr'] = 'Solr bilaketa-motorrak errore baten berri eman du: {$a}';
$string['errorvalidatingschema'] = 'Errorea Solr eskema balioztatzean: {$a->fieldname} eremua ez da existitzen. Mesedez <a href="{$a->setupurl}">jarraitu esteka hau</a>  behar diren eremuak konfiguratzeko.';
$string['extensionerror'] = 'Apache Solr-eko PHP hedapena ez dago instalatuta. Mesedez arakatu dokumentazioa.';
$string['fileindexing'] = 'Gaitu fitxategien indexatzea';
$string['fileindexing_help'] = 'Zure Solr instalazioak onartzen badu, funtzio honek Moodlek fitxategiak indexatuak izan daitezen bidaltzea ahalbidetzen du.<br/>
Aukera hau gaitu ondoren zure guneko eduki guztiak berriz indexatu beharko dituzu fitxategi guztiak gehitu daitezen.';
$string['fileindexsettings'] = 'Fitxategi-indexazioaren ezarpenak';
$string['maxindexfilekb'] = 'Indexatzeko fitxategien gehieneko tamaina (kB)';
$string['maxindexfilekb_help'] = 'Kilobyte kopuru hau gainditzen duten fitxategiak ez dira bilaketa-indexazioan kontuan izango. Zero ezarriz gero, edozein tamainako fitxategiak indexatuko dira.';
$string['minimumsolr4'] = 'Solr 4.0 da Moodlek behar duen gutxieneko bertsioa';
$string['missingconfig'] = 'Zure Apache Solr zerbitzaria oraindik ez dago konfiguratuta Moodlen.';
$string['multivaluedfield'] = '"{$a}" eremuak karaktere-kate bat bueltatu du eskalar baten bueltatu beharrean. Mesedez ezabatu oraingo indizea, sortu berri bat eta exekutatu setup_schema.php datuak Solr-en indexatu baino lehen.';
$string['nodatafromserver'] = 'Ez dago zerbitzariko daturik';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Plugin honek datuak bidaltzen ditu lotutako kanpoko Solr bilaketa-motorrera. Ez du lokalki daturik biltzen.';
$string['privacy:metadata:data'] = 'Bilaketa sistemaren bitartez pasatako datu pertsonalak.';
$string['schemafieldautocreated'] = '"{$a}" eremua dagoeneko Solr eskeman existitzen da. Ziuraski datuak indexatu baino lehen script hau exekutatzea ahaztu zenuen eta Solr-ek eremuak automatikoki sortuko zituen. Mesedez ezabatu ezazu indizea, berri bat sortu eta setup_schema.php berriz exekutatu ezazu datuak Solr-en indexatu baino lehen.';
$string['schemasetupfromsolr5'] = 'Zure Solr zerbitzariaren bertsioa 5.0 baino txikiagoa da. Script honek soilik 5.0 bertsioa edo handiago bat konfiguratu lezake. Zure  eskemako eremuak eskuz konfiguratu beharko dituzu \\search_solr\\document::get_default_fields_definition() funtzioaren arabera.';
$string['searchinfo'] = 'Bilaketak';
$string['searchinfo_help'] = 'Bilatu beharreko eremua bilaketa-kontsultan \'title:\', \'content:\', \'name:\', or \'intro:\' eremuak jarrita zehaztu daiteke. Esaterako, \'title:berriak\' bilatuz gero izenburuan \'berriak\' hitza duten emaitzak bueltatuko dira.

Operadore boolearrak (\'AND\', \'OR\', \'NOT\') hitz-gakoak konbinatu eta saihesteko erabili daitezke.

Karaktere komodinak (\'*\' edo \'?\' ) bilaketa-kontsultak karaktereak erakusteko erabili daitezke.';
$string['setupok'] = 'Eskema erabiltzeko prest dago.';
$string['solrauthpassword'] = 'HTTP autentifikaziorako pasahitza';
$string['solrauthuser'] = 'HTTP autentifikaziorako erabiltzaile-izena';
$string['solrhttpconnectionport'] = 'Ataka';
$string['solrhttpconnectiontimeout'] = 'Denbora-muga';
$string['solrhttpconnectiontimeout_desc'] = 'HTTP konexioaren denbora-muga datuen HTTP transferentzia-eragiketa egiteko baimentzen den gehieneko denbora (segundoetan) zehazten du.';
$string['solrindexname'] = 'Indizearen izena';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr motorra ez dago bilaketa-motorrean konfiguratuta';
$string['solrsecuremode'] = 'Modu segurua';
$string['solrserverhostname'] = 'Ostalariaren izena';
$string['solrserverhostname_desc'] = 'Solr zerbitzariaren domeinu-izena.';
$string['solrsetting'] = 'Solr ezarpenak';
$string['solrsslcainfo'] = 'SSL CA ziurtagiriaren izena';
$string['solrsslcainfo_desc'] = 'Kideak egiaztatzeko erabiliko den CA ziurtagiri bat edo gehiago dituen fitxategi-izena';
$string['solrsslcapath'] = 'SSL CA ziurtagirien bidea';
$string['solrsslcapath_desc'] = 'Kideak egiaztatzeko erabiliko diren CA ziurtagiriak dituen direktorioaren bidea';
$string['solrsslcert'] = 'SSL ziurtagiria';
$string['solrsslcert_desc'] = 'PEM formatua duen ziurtagiri pribatuaren fitxategi-izena';
$string['solrsslkey'] = 'SSL giltza';
$string['solrsslkey_desc'] = 'PEM formatua duen gako pribatuaren izena';
$string['solrsslkeypassword'] = 'SSL gakoaren pasahitza';
$string['solrsslkeypassword_desc'] = 'PEM formatua duen gako pribatuaren fitxategi-izenaren pasahitza';
