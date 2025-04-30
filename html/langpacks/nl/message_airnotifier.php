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
 * Strings for component 'message_airnotifier', language 'nl', version '4.4'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Beheer apparaten';
$string['airnotifieraccesskey'] = 'Airnotifier toegangssleutel';
$string['airnotifierappname'] = 'Airnotifier app naam';
$string['airnotifierfielderror'] = 'Verwijder spaties of onnodige tekens uit volgend veld: {$a}';
$string['airnotifiermobileappname'] = 'Naam mobiele app';
$string['airnotifierport'] = 'Airnotifier poort';
$string['airnotifierurl'] = 'Airnotifier URL';
$string['checkconfiguration'] = 'Controleer en test de configuratie van push-notificaties';
$string['configairnotifieraccesskey'] = 'De toegangssleutel nodig om te verbinden met de Airnotifier server. Je kunt een sleutel bekomen door te klikken op de "Toegangssleutel aanvragen"-link onderaan (enkel geregistreerde sites) of door het maken van een account op de <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['configairnotifierappname'] = 'De app name identifier in Airnotifier';
$string['configairnotifiermobileappname'] = 'De unieke identificatie (gewoonlijk iets als com.moodle.moodlemobile) voor de mobiele app';
$string['configairnotifierport'] = 'De te gebruiken poort om te verbinden met de Airnotifier-server';
$string['configairnotifierurl'] = 'De server-URL om mee te verbinden voor het versturen van push-meldingen.';
$string['configured'] = 'Geconfigureerd';
$string['deletecheckdevicename'] = 'Verwijder je toestel: {$a->name}';
$string['deletedevice'] = 'Verwijder het apparaat. Merk op dat een app het apparaat opnieuw kan registreren. Als het apparaat blijft verschijnen, schakel het dan uit.';
$string['devicetoken'] = 'Apparaatstoken';
$string['donotsendnotification'] = 'Stuur helemaal geen meldigingen';
$string['enableprocessor'] = 'Schakel mobiele meldingen in';
$string['encryptnotifications'] = 'Versleutel meldingen';
$string['encryptnotifications_help'] = 'Schakel waar mogelijk end-to-end-codering van app-meldingen in.  Sommige gegevens kunnen worden verwijderd uit de meldingen als ze niet kunnen worden versleuteld.';
$string['encryptprocessing'] = 'Voor toestellen die geen encryptie ondersteunen';
$string['encryptprocessing_desc'] = 'Geëncrypteerde meldingen vereisen minstens Android 8, IOS 13 en Moodle App 4.2 of nieuwer.';
$string['errorretrievingkey'] = 'Er is een fout opgetreden bij het ontvangen van de sleutel. Jouw Moodle-site moet geregistreerd zijn om deze service te kunnen gebruiken. Als je site al geregistreerd is, probeer deze registratie dan te updaten.
Je kunt ook een toegangssleutel bekomen door een account te maken op de <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['keyretrievedsuccessfully'] = 'Het ontvangen van de toegangssleutel is gelukt. Om toegang te krijgen tot de Moodle app statistieken moet je een account maken op de <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['messageprovidersempty'] = 'Mobiele notificaties zijn niet ingeschakeld in de standaard notificatievoorkeuren.';
$string['messageproviderslow'] = 'Slechts enkele mobiele notificaties zijn ingeschakeld in de standaard notificatievoorkeuren.';
$string['moodleappsportallimitswarning'] = 'Merk op dat het toegestane aantal toestellen waarmee berichten kunnen ontvangen worden afhangt van je Moodle App abonnement. Bezoek voor meer details de <a href="{$a}" target="_blank">Moodle Apps Portal</a>';
$string['nodevices'] = 'Geen geregistreerde apparaten. Apparaten zullen automatisch verschijnen nadat de Moodle Mobile app geïnstalleerd hebt en je deze site toegevoegd hebt.';
$string['noemailevernotset'] = '$CFG->noemailever uitgeschakeld';
$string['noemaileverset'] = '$CFG->noemailever is ingeschakeld in config.php. Je moet deze instelling op uit zetten of verwijderen.';
$string['nopermissiontomanagedevices'] = 'Je hebt het recht niet om apparaten te beheren.';
$string['notconfigured'] = 'De Airnotifier server is nog niet geconfigureerd, dus push-berichten kunnen niet verstuurd worden.';
$string['notificationsserverconfiguration'] = 'Configuratie notificatieserver (Airnotifier)';
$string['pluginname'] = 'Mobiel';
$string['privacy:appiddescription'] = 'Dit is een identificatie voor de gebruikte applicatie.';
$string['privacy:enableddescription'] = 'Of dit toestel ingeschakeld is voor airnotifier.';
$string['privacy:metadata:date'] = 'De datum waarop het bericht werd verstuurd.';
$string['privacy:metadata:enabled'] = 'Of het airnotifier-toestel is ingeschakeld.';
$string['privacy:metadata:externalpurpose'] = 'Deze informatie is naar een externe site gestuurd om uiteindelijk bezorgd te worden bij het mobiele toestel van de gebruiker.';
$string['privacy:metadata:fullmessage'] = 'Het volledige bericht';
$string['privacy:metadata:notification'] = 'Of dit bericht een melding is.';
$string['privacy:metadata:smallmessage'] = 'Een sectie van het bericht.';
$string['privacy:metadata:subject'] = 'De onderwerpregel van het bericht.';
$string['privacy:metadata:tableexplanation'] = 'Airnotifier-toestelinformatie wordt hier bewaard.';
$string['privacy:metadata:userdeviceid'] = 'De ID die linkt naar het mobiel apparaat van een gebruiker';
$string['privacy:metadata:userfromfullname'] = 'De volledige naam van de gebruiker die het bericht verstuurde.';
$string['privacy:metadata:userfromid'] = 'De gebruikersID van de auteur van het bericht.';
$string['privacy:metadata:userid'] = 'De ID van de gebruiker die het bericht verstuurde.';
$string['privacy:metadata:username'] = 'De gebruikersnaam van de gebruiker.';
$string['privacy:metadata:usersubsystem'] = 'Deze plugin is verbonden met het gebruikerssubsysteem';
$string['privacy:subcontext'] = 'Berichten Airnotifier';
$string['requestaccesskey'] = 'Toegangssleutel vragen';
$string['sendnotificationnotenc'] = 'Stuur melingen zonder encryptie';
$string['sendtest'] = 'Stuur push-notificaties naar mijn toestellen';
$string['sendtestconfirmation'] = 'Er werd een test push-notificatie is gestuurd naar de toestellen die je gebruikt om verbinding te maken met deze site. Zorg er voor dat je toestellen met het internet verbonden zijn en dat de mobiele app niet open staat (push-notificaties worden enkel getoond als ze op de achtergrond ontvangen worden).';
$string['serverconnectivityerror'] = 'Deze site kan geen verbinding maken met notificatie-server {$a}';
$string['showhide'] = 'Apparaat inschakelen/uitschakelen.';
$string['sitemustberegistered'] = 'Om de publieke Airnotifier te kunnen gebruiken, moet je je site registreren bij Moodle. Je kunt ook een sleutel bekomen door een account te maken op de <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['unknowndevice'] = 'Onbekend apparaat';
$string['userdevices'] = 'Gebruikerstoestellen';
$string['view_notification'] = 'Tik om te bekijken';
