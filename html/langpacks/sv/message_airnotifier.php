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
 * Strings for component 'message_airnotifier', language 'sv', version '4.4'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Hantera enheter';
$string['airnotifieraccesskey'] = 'Åtkomstnyckel för Airnotifier';
$string['airnotifierappname'] = 'Namn på airnotifier-app';
$string['airnotifierfielderror'] = 'Ta bort tomma blanksteg eller onödiga tecken från följande fält: {$a}';
$string['airnotifiermobileappname'] = 'Namn på mobilapp';
$string['airnotifierport'] = 'Port';
$string['airnotifierurl'] = 'Airnotifier URL';
$string['checkconfiguration'] = 'Kontrollera och testa push-meddelandekonfigurationen';
$string['configairnotifieraccesskey'] = 'Åtkomstnyckeln för anslutning till Airnotifier-servern. Du kan skaffa en åtkomstnyckel genom att klicka på länken "Begär åtkomstnyckel" nedan (endast registrerade webbplatser) eller genom att skapa ett konto på <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['configairnotifierappname'] = 'Mobil appidentifierare';
$string['configairnotifiermobileappname'] = 'Den unika Mobila appidentifieraren (oftast något i stil com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Porten som ska användas vid anslutning till airnotifier-servern.';
$string['configairnotifierurl'] = 'URL som ska användas för att ansluta skicka push-meddelanden.';
$string['configured'] = 'Konfigurerad';
$string['deletecheckdevicename'] = 'Ta bort enhet: {$a->name}';
$string['deletedevice'] = 'Ta bort enheten. Observera att en app kan registrera enheten igen. Om enheten fortsätter att dyka upp igen inaktiverar du den.';
$string['devicetoken'] = 'Enhetstoken';
$string['enableprocessor'] = 'Aktivera mobila notiser';
$string['errorretrievingkey'] = 'Ett fel uppstod när åtkomstnyckeln skulle hämtas. Din webbplats måste vara registrerad för att du ska kunna använda den här tjänsten. Om din webbplats redan är registrerad, försök att uppdatera din registrering. Alternativt kan du skaffa en åtkomstnyckel genom att skapa ett konto på <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['keyretrievedsuccessfully'] = 'Åtkomstnyckeln hämtades. För att komma åt Moodle-appanvändningsstatistik skapar du ett konto på <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['messageprovidersempty'] = 'Inga mobilmeddelanden är aktiverade i standardinställningarna för meddelanden.';
$string['messageproviderslow'] = 'Endast ett fåtal mobilmeddelanden är aktiverade i standardinställningarna för meddelanden.';
$string['moodleappsportallimitswarning'] = 'Observera att antalet användarenheter som tillåts ta emot meddelanden beror på din Moodle app prenumeration. För mer information, besök <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['nodevices'] = 'Inga registrerade enheter. Enheter visas automatiskt när du har installerat Moodle-appen och lagt till den här webbplatsen.';
$string['noemailevernotset'] = '$CFG->noemailever inaktiverat';
$string['noemaileverset'] = '$CFG->noemailever är inaktiverat i <code>config.php</code>. Du måste ange den här inställningen till <code>falskt</code>, eller ta bort den.';
$string['nopermissiontomanagedevices'] = 'Du har inte behörighet att hantera enheter.';
$string['notconfigured'] = 'Airnotifier-servern har inte konfigurerats. Push-meddelanden kan inte skickas.';
$string['notificationsserverconfiguration'] = 'Konfiguration av meddelandeserver (Airnotifier)';
$string['pluginname'] = 'Mobil';
$string['privacy:appiddescription'] = 'Detta är en identifierare för det program som används.';
$string['privacy:enableddescription'] = 'Om den här enheten är aktiverad för airnotifier.';
$string['privacy:metadata:date'] = 'Datum då meddelandet skickades.';
$string['privacy:metadata:enabled'] = 'Om airnotifier-enheten är aktiverad.';
$string['privacy:metadata:externalpurpose'] = 'Denna information skickas till en extern webbplats som i sin tur levererar den till användarens mobila enhet.';
$string['privacy:metadata:fullmessage'] = 'Det fullständiga meddelandet.';
$string['privacy:metadata:notification'] = 'Om detta meddelande är en notis.';
$string['privacy:metadata:smallmessage'] = 'En del av meddelandet.';
$string['privacy:metadata:subject'] = 'Meddelandets ämnesrad.';
$string['privacy:metadata:tableexplanation'] = 'Information om airnotifierenhet lagras här.';
$string['privacy:metadata:userdeviceid'] = 'ID som är kopplat till användarens mobila enhet';
$string['privacy:metadata:userfromfullname'] = 'Fullständigt namn på användaren som skickade meddelandet.';
$string['privacy:metadata:userfromid'] = 'Användar-ID:t för upphovsmannen till meddelandet.';
$string['privacy:metadata:userid'] = 'ID:t för användaren som skickade meddelandet.';
$string['privacy:metadata:username'] = 'Användarnamnet för användaren.';
$string['privacy:metadata:usersubsystem'] = 'Denna plugin är kopplad till meddelandesystemet.';
$string['privacy:subcontext'] = 'Airnotifiermeddelande';
$string['requestaccesskey'] = 'Begär åtkomstnyckel';
$string['sendtest'] = 'Skicka test push-meddelande till mina enheter';
$string['sendtestconfirmation'] = 'Ett test push-meddelande skickas till de enheter du använder för att ansluta till den här webbplatsen. Kontrollera att dina enheter är anslutna till Internet och att mobilappen inte är öppen (eftersom push-meddelanden bara visas när de tas emot i bakgrunden).';
$string['serverconnectivityerror'] = 'Den här webbplatsen kan inte ansluta till meddelandeservern {$a}';
$string['showhide'] = 'Aktivera/inaktivera enheten.';
$string['sitemustberegistered'] = 'För att kunna använda den offentliga Airnotifier-versionen måste din webbplats vara registrerad. Alternativt kan du skaffa en åtkomstnyckel genom att skapa ett konto på <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['unknowndevice'] = 'Okänd enhet';
$string['userdevices'] = 'Användarenheter';
