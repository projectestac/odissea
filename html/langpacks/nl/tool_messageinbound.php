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
 * Strings for component 'tool_messageinbound', language 'nl', version '4.4'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'klassenaam';
$string['component'] = 'Component';
$string['configmessageinboundhost'] = 'Het serveradres waar Moodle e-mail moet controleren. Om een niet-standaard poort op te geven, kun je [server]:[poort] gebruikern, bijvoorbeeld mail.voorbeeld.com:993. Als je geen poort opgeeft, zal Moodle de standaard poort gebruiken voor het gebruikte type mailserver.';
$string['defaultexpiration'] = 'Vervalperiode standaard adres';
$string['defaultexpiration_help'] = 'Wanneer een e-mailadres is gegenereerd, dan kan het automatisch vervallen na een tijdje, zodat het niet meer gebruikt kan worden. Het is een goed idee om een vervalperiode in te stellen.';
$string['description'] = 'Beschrijving';
$string['domain'] = 'E-mail domein';
$string['edit'] = 'Bewerk';
$string['edithandler'] = 'Bewerk instellingen voor de {$a} afhandelaar';
$string['editinghandler'] = '{$a} bewerken';
$string['enabled'] = 'Ingeschakeld';
$string['fixedenabled_help'] = 'Je kunt de status van deze afhandelaar niet aanpassen. Dat kan zijn omdat deze nodig is voor andere afhandelaars';
$string['fixedvalidateaddress'] = 'Geldig afzenderadres';
$string['fixedvalidateaddress_help'] = 'Je kunt de adresvalidatie voor deze afhandelaar niet wijzigen. Dat kan zijn omdat die een specifieke instelling vereist.';
$string['handlerdisabled'] = 'De e-mailafhandelaar die je probeerde te bereiken is uitgeschakeld. Kon het bericht nu niet verwerken.';
$string['incomingmailconfiguration'] = 'Configuratie voor inkomende e-mail';
$string['incomingmailserversettings'] = 'Inkomend e-mail serverinstellingen';
$string['incomingmailserversettings_desc'] = 'Moodle kan verbinden met juist geconfigureerde IMAP-servers. Je kunt de instellingen die je gebruikt om met je IMAP-server verbinding te maken hier instellen.';
$string['invalid_recipient_handler'] = 'Als een geldig bericht werd ontvangen, maar de afzender kon niet geauthenticeerd worden, dan wordt het bericht op de e-mailserver bewaard en wordt de gebruiker gecontacteerd via het e-mailadres in het gebruikersprofiel. De gebruiker krijgt dan de kans om te antwoorden op het bericht om zo de authenticiteit van het originele bericht te bevestigen.

Deze afhandelaar verwerkt zo\'n antwoorden.

Het is niet mogelijk om de afzenderverificatie van de ze afhandelaar uit te schakelen omdat de gebruiker kan antwoorden van een fout e-mailadres als de configuratie van hun e-mailclient fout is.';
$string['invalid_recipient_handler_name'] = 'Afhandelaar ongeldige ontvangers';
$string['invalidrecipientdescription'] = 'Het bericht  "{$a->subject}" kon niet geauthenticeerd worden omdat het verzonden is van een ander e-mailadres dat wat in je gebruikersprofiel staat. Om dit bericht te authenticeren, moet je het beantwoorden.';
$string['invalidrecipientdescriptionhtml'] = 'Het bericht  "{$a->subject}" kon niet geauthenticeerd worden omdat het verzonden is van een ander e-mailadres dat wat in je gebruikersprofiel staat. Om dit bericht te authenticeren, moet je het beantwoorden.';
$string['invalidrecipientfinal'] = 'Het bericht  "{$a->subject}" kon niet geauthenticeerd worden. Controleer of je het verstuurt van hetzelfde e-mailadres als wat in je gebruikersprofiel staat.';
$string['mailbox'] = 'Mailbox naam';
$string['mailboxconfiguration'] = 'Mailbox configuratie';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Mail instellingen';
$string['message_handlers'] = 'Berichtenafhandelaars';
$string['messageinbound'] = 'Inkomend bericht';
$string['messageinboundenabled'] = 'Verwerking van inkomende e-mail inschakelen';
$string['messageinboundenabled_desc'] = 'Verwerking van inkomende e-mail moet ingesteld zijn om berichten te kunnen versturen met de juiste informatie.';
$string['messageinboundgeneralconfiguration'] = 'Algemene configuratie';
$string['messageinboundgeneralconfiguration_desc'] = 'Met inkomende berichtverwerking kun je e-mail met Moodle ontvangen en verwerken. Hiermee kun je bijvoorbeeld forumberichten beantwoorden via e-mail of bestanden toevoegen aan privébestanden van gebruikers.';
$string['messageinboundhost'] = 'Inkomende mail server';
$string['messageinboundhostoauth_help'] = 'OAuth 2 Service om de IMAP-server te bereiken via XOAUTH2-authenticatie. Als de service niet bestaat, moet je hem aanmaken.';
$string['messageinboundhostpass'] = 'Wachtwoord';
$string['messageinboundhostpass_desc'] = 'Dit is het wachtwoord dat je serviceprovider gegeven heeft om in je e-mailaccount aan te melden.';
$string['messageinboundhostssl'] = 'Gebruik SSL';
$string['messageinboundhostssl_desc'] = 'Sommige mailservers ondersteunen bijkomende beveiliging door de communicatie tussen Moodle en je mailserver te beveiligen. We raden je aan SSL-encryptie te gebruiken als je server dit ondersteunt.';
$string['messageinboundhosttype'] = 'Servertype';
$string['messageinboundhostuser'] = 'Gebruikersnaam';
$string['messageinboundhostuser_desc'] = 'Dit is de gebruikersnaam die je serviceprovider gegeven heeft om in te loggen op je e-mailaccount.';
$string['messageinboundmailboxconfiguration_desc'] = 'Waneer er berichten verzonden worden, dan krijgen zij het formaat adres+gegevens@voorbeeld.com. Om Moodle op een betrouwbare manier die adressen te laten genereren, moet je apart het adres opgeven dat je normaal zou gebruiken voor het @ symbool en het domein dat na het @ symbool komt. In het voorbeeld zou de mailboxnaam "adres" zijn en het domein "voorbeeld.com". Je moet hiervoor een e-mailaccount opzetten die je voor niets anders gebruikt.';
$string['messageprocessingerror'] = 'Je hebt pas een e-mail met als onderwerp "{$a->subject}" gestuurd, maar die kon niet verwerkt worden.

De foutmelding staat hier onder.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Je hebt pas een e-mail met als onderwerp "{$a->subject}" gestuurd, maar die kon niet verwerkt worden.</p>
<p>De foutmelding staat hier onder.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'De e-mail "{$a->subject}" kon niet verwerkt worden door volgende fout: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'De e-mail "{$a->subject}" kon niet verwerkt worden. Contacteer je beheerder voor meer informatie.';
$string['messageprocessingsuccess'] = '{$a->plain}

Als je deze meldingen in de toekomst niet meer wil ontvangen, pas dan je instellingen voor persoonlijke berichten aan door  {$a->messagepreferencesurl} te openen in je browser.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Als je deze meldingen in de toekomst niet meer wil ontvangen, pas dan je  <a href="{$a->messagepreferencesurl}">instellingen voor persoonlijke berichten</a> aan.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Bericht om te bevestigen dat een inkomend bericht van jou kwam';
$string['messageprovider:messageprocessingerror'] = 'Waarschuwing wanneer een inkomend bericht niet verwerkt kon worden';
$string['messageprovider:messageprocessingsuccess'] = 'Bevestiging dat een bericht verwerkt kon worden';
$string['name'] = 'Naam';
$string['noencryption'] = 'Uit - geen encryptie';
$string['noexpiry'] = 'Geen vervaldatum';
$string['oldmessagenotfound'] = 'Je probeerde manueel een bericht te authenticeren, maar het bericht kon niet gevonden worden. Het is mogelijk dat het al verwerkt is of dat het bericht verlopen is.';
$string['oneday'] = 'Eén dag';
$string['onehour'] = 'Eén uur';
$string['oneweek'] = 'Eén week';
$string['oneyear'] = 'Eén jaar';
$string['pluginname'] = 'Configuratie inkomende berichten';
$string['privacy:metadata:coreuserkey'] = 'Gebruikerssleutels om de ontvangen e-mail te valideren';
$string['privacy:metadata:messagelist'] = 'Een lijst met berichtenidentificaties waarvan de validatie mislukt is en die verdere authorisatie vereisen';
$string['privacy:metadata:messagelist:address'] = 'Het adres naar waar de e-mail verzonden is';
$string['privacy:metadata:messagelist:messageid'] = 'De bericht-ID';
$string['privacy:metadata:messagelist:timecreated'] = 'Het tijdstip waarop de record gemaakt is';
$string['privacy:metadata:messagelist:userid'] = 'De ID van de gebruiker die het bericht moet goedkeuren';
$string['replysubjectprefix'] = 'Antw:';
$string['requirevalidation'] = 'Valideer afzenderadres';
$string['ssl'] = 'SSL (Auto-detect SSL versie)';
$string['sslv2'] = 'SSLv2 (Verplicht SSL Versie 2)';
$string['sslv3'] = 'SSLv3 (Verplicht SSL Versie 3)';
$string['taskcleanup'] = 'Opruimen van  niet geverifiëerde inkomende e-mail';
$string['taskpickup'] = 'Inkomende e-mail ophalen';
$string['tls'] = 'TLS (TLS; gesstart via onderhandeling op protocol-niveau over een ongeëncrypteerd kanaal; AANBEVOLEN manier om een veilige verbinding op te starten)';
$string['tlsv1'] = 'TLSv1 (rechtstreekse connectie met TLS-server versie 1.x)';
$string['validateaddress'] = 'Valideer e-mailadres van de afzender';
$string['validateaddress_help'] = 'Wanneer er een bericht van een gebruiker ontvangen wordt, dan probeert Moodle om het bericht te valideren door het e-mailadres van de afzender te vergelijken met het adres in het gebruikersprofiel.

Als de afzender niet overeenkomt, dan krijgt de gebruiker de vraag toegestuurd om te bevestigen dat die de e-mail echt wel verstuurd heeft.

Als deze instelling uitgeschakeld is, dan zal het e-mailadres van de afzender niet gecontroleerd worden.';
