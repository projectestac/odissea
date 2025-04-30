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
 * Strings for component 'cachestore_mongodb', language 'sv', version '4.4'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Databas';
$string['database_help'] = 'Namn på den databas som ska användas.';
$string['extendedmode'] = 'Använd utökade nycklar';
$string['extendedmode_help'] = 'Om aktiverat kommer fullständiga nyckeluppsättningar att användas när du arbetar med pluginmodulen. Detta används inte internt ännu men skulle göra det möjligt för dig att enkelt söka och utforska MongoDB manuellt om du så önskar. Om du aktiverar detta kommer du att lägga till en liten overhead så det bör bara göras om du behöver det.';
$string['password'] = 'Lösenord';
$string['password_help'] = 'Lösenordet för den användare som används för anslutningen.';
$string['pleaseupgrademongo'] = 'Du använder en gammal version av PHP Mongo-tillägget (< 1.3). Stödet för gamla versioner av Mongo-tillägget kommer att upphöra i framtiden. Överväg att uppgradera tillägget.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'MongoDB cachestore plugin lagrar data tillfälligt som en del av sin cachelagringsfunktionalitet. Dessa data lagras på en MongoDB-server där data regelbundet tas bort.';
$string['privacy:metadata:mongodb:data'] = 'Den olika data som lagras i cacheminnet';
$string['replicaset'] = 'Replikauppsättning';
$string['replicaset_help'] = 'Namnet på den replikerade uppsättning som ska anslutas till. Om detta anges bestäms huvudhanteraren med kommandot <code>ismaster</code> på klienterna, så drivrutinen kan i förlängningen ansluta till en server som inte ens listades.';
$string['server'] = 'Server';
$string['server_help'] = 'Det här är anslutningssträngen för den server du vill använda. Flera servrar kan anges med hjälp av en kommaavgränsad lista.';
$string['testserver'] = 'Testserver';
$string['testserver_desc'] = 'Anslutningssträngen för en server som ska användas för testning. Om en testserver har angetts kan MongoDB-prestandan testas med hjälp av sidan <tt>Testa prestanda</tt> under <em>Hantera webbplats &#10132; Cachning</em>.
Ett exempel: mongodb://127.0.0.1:27017';
$string['username'] = 'Användarnamn';
$string['username_help'] = 'Användarnamnet som ska användas när du gör en anslutning.';
$string['usesafe'] = 'Använd säkert läge';
$string['usesafe_help'] = 'Om alternativet <code>usesafe</code> är aktiverat kommer det att användas för infoga-, hämta- och ta bort-åtgärder. Om du har angett en replikuppsättning kommer detta att tillämpas tvingande.';
$string['usesafevalue'] = 'Använd säkert värde';
$string['usesafevalue_help'] = 'Du kan välja att ange ett visst värde för <code>usesafe</code>. Detta avgör antalet servrar som åtgärder måste slutföras på innan de anses vara slutförda.';
