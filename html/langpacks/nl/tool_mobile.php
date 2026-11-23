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
 * Strings for component 'tool_mobile', language 'nl', version '4.5'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb-debugging is ingeschakeld. Dit moet worden uitgeschakeld in de instellingen van de plug-in voor authenticatie via een externe database of voor inschrijving via een externe database.';
$string['androidappid'] = 'Unieke identificatiecode van de Android-app';
$string['androidappid_desc'] = 'Deze instelling kan op de standaardwaarde blijven staan, tenzij je een aangepaste Android-app hebt.';
$string['apppolicy'] = 'URL van het app-beleid';
$string['apppolicy_help'] = 'De URL van een beleid voor app-gebruikers dat op de Over-pagina in de app wordt vermeld. Als het veld leeg blijft, wordt in plaats daarvan de URL van het sitebeleid gebruikt.';
$string['apprequired'] = 'Deze functionaliteit is alleen beschikbaar wanneer je de Moodle-app voor mobiel of desktop gebruikt.';
$string['autologinkeygenerationlockout'] = 'Het genereren van een automatische inlogsleutel is geblokkeerd. Je moet {$a} minuten wachten tussen verzoeken.';
$string['autologinmintimebetweenreq'] = 'Minimale tijd tussen verzoeken voor automatisch inloggen';
$string['autologinmintimebetweenreq_desc'] = 'De minimale tijd tussen verzoeken voor automatisch inloggen vanuit de mobiele app. Als app-gebruikers vaak hun inloggegevens moeten invoeren bij het bekijken van ingesloten inhoud van de site, stel dan een lagere waarde in.';
$string['autologinnotallowedtoadmins'] = 'Auto-login is niet toegestaan voor site-beheerders.';
$string['autologout'] = 'Automatisch uitloggen afdwingen voor je gebruikers';
$string['autologout_desc'] = 'Om veiligheidsredenen kun je afdwingen dat gebruikers automatisch worden uitgelogd wanneer ze de app verlaten of sluiten, of wanneer de app naar de achtergrond gaat. Gebruikers moeten opnieuw inloggen wanneer ze terugkeren naar de app.';
$string['autologoutcustom'] = 'Aangepaste tijd nadat gebruikers de app verlaten of sluiten';
$string['autologoutinmediate'] = 'Onmiddellijk nadat gebruikers de app verlaten of sluiten';
$string['autologouttime'] = 'Timer voor automatisch uitloggen';
$string['cachedef_plugininfo'] = 'Hierin wordt de lijst met plug-ins met mobiele add-ons opgeslagen';
$string['cachedef_subscriptiondata'] = 'Dit bewaart de Moodle app abonnementsinformatie.';
$string['clickheretolaunchtheapp'] = 'Klik hier als de app niet automatisch opent.';
$string['configmobilecssurl'] = 'Een CSS-bestand om de interface van je mobiele app aan te passen.';
$string['customlangstrings'] = 'Aangepaste taalstrings';
$string['customlangstrings_desc'] = 'Woorden en zinnen die in de app getoond worden, kunnen hier aangepast worden. Zet elke aangepaste taal-string op een nieuwe lijn met als opmaak: string-identificatie, aangepaste taalstring en taalcode, gescheiden door een verticaal streepje (pipe). Bijvoorbeeld:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Bekijk de documentatie voor een volledige lijst met string-identificaties.';
$string['custommenuitems'] = 'Aangepaste menu-items';
$string['custommenuitems_desc'] = 'Er kunnen bijkomende items toegevoegd worden in het hoofdmenu van de app door ze hier op te geven. Voeg elk extra menu-item in op een nieuwe regel met opmaak: item tekst, link URL, methode om een link te openen en taalcode (optioneel, om een item enkel te tonen aan gebruikers van de opgegeven taal), gescheiden door een verticaal streepje (pipe).

De methodes om links te openen zijn: app (om een activiteit te linken die ondersteund wordt door de app), inappbrowser (voor het openen van een link in een browser zonder de app te verlaten), browser (voor het openen van de link in de standaardbrowser van het toestel buiten de app) en embedded (voor het tonen van de link in een iframe in een nieuwe pagina in de app).

Bijvoorbeeld:
<pre>
App\'s help|https://someurl.xyz/help|inappbrowser
Mijn cijfers|https://someurl.xyz/local/mygrades/index.php|embedded|nl
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Dit zie je enkel in het Nederlands|https://someurl.xyz/english|browser|nl_only
</pre>';
$string['darkmode'] = 'Donkere modus';
$string['disabledfeatures'] = 'Uitgeschakelde functies';
$string['disabledfeatures_desc'] = 'Selecteer hier de functies die je wilt uitschakelen in de mobiele app voor je site. Houd er rekening mee dat sommige functies in deze lijst mogelijk al zijn uitgeschakeld via andere site-instellingen. Je moet in de app uit- en weer inloggen om de wijzigingen te zien.';
$string['displayerrorswarning'] = 'Foutmeldingen weergeven (debugdisplay) is ingeschakeld. Dit moet worden uitgeschakeld.';
$string['downloadcourse'] = 'Cursus downloaden';
$string['downloadcourses'] = 'Cursussen downloaden';
$string['enablesmartappbanners'] = 'App-banners inschakelen';
$string['enablesmartappbanners_desc'] = 'Indien ingeschakeld zal dit een banner tonen om de Moodle Mobile app te promoten wanneer de site met een mobiele browser bezocht wordt.';
$string['filetypeexclusionlist'] = 'Uitsluitingslijst voor bestandstypen';
$string['filetypeexclusionlist_desc'] = 'Selecteer alle bestandstypen die niet bedoeld zijn voor gebruik op een mobiel apparaat. Zulke bestanden worden in de cursus weergegeven, maar als een gebruiker ze probeert te openen, verschijnt een waarschuwing dat het bestandstype niet bedoeld is voor gebruik op een mobiel apparaat. De gebruiker kan de waarschuwing dan annuleren of negeren en het bestand toch openen.';
$string['filetypeexclusionlistplaceholder'] = 'Uitsluitingslijst voor mobiele bestandstypen';
$string['forcedurlscheme'] = 'Als je alleen je eigen app met aangepaste huisstijl via een browservenster wilt laten openen, geef dan hier het URL-schema ervan op. Als je alleen de officiële app wilt toestaan, stel dan de standaardwaarde in. Laat het veld leeg als je elke app wilt toestaan.';
$string['forcedurlscheme_key'] = 'URL-schema';
$string['forcelogout'] = 'Uitloggen afdwingen';
$string['forcelogout_desc'] = 'Indien ingeschakeld, worden gebruikers altijd volledig uitgelogd, ook bij het wisselen van account. Ze moeten dan de volgende keer dat ze de site willen openen hun wachtwoord opnieuw invoeren.';
$string['getmoodleonyourmobile'] = 'Download de mobiele app';
$string['h5poffline'] = 'H5P-inhoud offline bekijken';
$string['httpsrequired'] = 'HTTPS vereist';
$string['insecurealgorithmwarning'] = 'Het lijkt erop dat het HTTPS-certificaat een onveilig algoritme gebruikt voor de ondertekening (SHA-1). Probeer het certificaat bij te werken.';
$string['invalidcertificatechainwarning'] = 'Het lijkt erop dat de certificaatketen ongeldig is. Dit certificaat werkt mogelijk wel in een browser, maar niet in een mobiele app.';
$string['invalidcertificateexpiredatewarning'] = 'Het lijkt erop dat het HTTPS-certificaat van de site is verlopen.';
$string['invalidcertificatestartdatewarning'] = 'Het lijkt erop dat het HTTPS-certificaat van de site nog niet geldig is (met een startdatum in de toekomst).';
$string['invalidprivatetoken'] = 'Ongeldig privé token. Token zou niet leeg mogen zijn of worden doorgegeven via GET parameter.';
$string['invaliduserquotawarning'] = 'De gebruikersquota (userquota) is ingesteld op een ongeldig getal. Stel een geldig getal (een geheel getal) in bij de beveiligingsinstellingen van de site.';
$string['iosappid'] = 'Unieke identificatiecode van de iOS-app';
$string['iosappid_desc'] = 'Deze instelling mag standaard blijven tenzij je een aangepaste iOS app hebt.';
$string['launchviasiteinbrowser'] = 'Starten via de site in de systeembrowser';
$string['loginintheapp'] = 'Via de app';
$string['logininthebrowser'] = 'Via een browser-venster (voor SSO plugins)';
$string['loginintheembeddedbrowser'] = 'Via een ingebedde browser (voor SSO plugins)';
$string['logoutconfirmation'] = 'Weet je zeker dat je wilt uitloggen bij de mobiele app op je mobiele apparaten? Als je uitlogt, moet je je gebruikersnaam en wachtwoord opnieuw invoeren in de mobiele app op alle apparaten waarop je de app hebt geïnstalleerd.';
$string['mainmenu'] = 'Hoofdmenu';
$string['managefiletypes'] = 'Bestandstypen beheren';
$string['minimumversion'] = 'Als een app-versie is opgegeven (3.8.0 of hoger), krijgen gebruikers met een oudere app-versie het verzoek hun app bij te werken voordat ze toegang tot de site krijgen.';
$string['minimumversion_key'] = 'Minimaal vereiste app-versie';
$string['mobileapp'] = 'Mobiele app';
$string['mobileappearance'] = 'Mobiel uiterlijk';
$string['mobileappenabled'] = 'Op deze site is toegang via de mobiele app ingeschakeld.<br /><a href="{$a}">Download de mobiele app</a>.';
$string['mobileappsubscription'] = 'Abonnement op de Moodle-app';
$string['mobileauthentication'] = 'Mobiele authenticatie';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobiele functies';
$string['mobilenotificationsdisabledwarning'] = 'Mobiele meldingen zijn niet ingeschakeld. Ze moeten worden ingeschakeld bij de meldingsinstellingen.';
$string['mobilesettings'] = 'Mobiele instellingen';
$string['moodleappsportalfeatureswarning'] = 'Let op: sommige functies kunnen beperkt zijn, afhankelijk van je abonnement op de Moodle-app. Bezoek voor meer informatie het <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notifications'] = 'Meldingen';
$string['notificationsactivedevices'] = 'Actieve apparaten';
$string['notificationscurrentactivedevices'] = 'Apparaten die deze maand meldingen ontvangen';
$string['notificationsignorednotifications'] = 'Niet verzonden meldingen';
$string['notificationslimitreached'] = 'De maandelijkse limiet voor actieve toestellen is overschreden. Voor sommige gebruikers zullen geen berichten verstuurd worden. Je wordt aangeraden om je app te upgraden via de <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notificationsmissingwarning'] = 'Er konden geen Moodle app-statistieken voor berichten opgehaald worden.';
$string['notificationsnewdevices'] = 'Nieuwe apparaten';
$string['notificationsseemore'] = 'Let op: de gebruiksstatistieken van de Moodle-app worden niet in realtime berekend. Log in op het <a href="{$a}" target="_blank">Moodle Apps Portal</a> voor meer gedetailleerde statistieken, inclusief gegevens van voorgaande maanden.';
$string['notificationssentnotifications'] = 'Verzonden meldingen';
$string['oauth2identityproviders'] = 'OAuth 2-identiteitsproviders';
$string['offlineuse'] = 'Offline gebruik';
$string['pluginname'] = 'Moodle-apptools';
$string['pluginnotenabledorconfigured'] = 'Plug-in niet ingeschakeld of geconfigureerd.';
$string['privacy:metadata:core_userkey'] = 'Sleutels van de gebruiker die worden gebruikt om een automatische inlogsleutel voor de huidige gebruiker te maken.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'De datum van het laatste verzoek om een automatische inlogsleutel. Tussen elk verzoek zijn 6 minuten vereist.';
$string['qrcodedisabled'] = 'Toegang via QR-code uitgeschakeld';
$string['qrcodeformobileappaccess'] = 'QR-code voor toegang via de mobiele app';
$string['qrcodeformobileapploginabout'] = 'Scan de QR-code met je mobiele app en je wordt automatisch ingelogd. De QR-code verloopt over {$a}.';
$string['qrcodeformobileappurlabout'] = 'Scan de QR-code met je mobiele app om de site-URL in je app in te vullen.';
$string['qrcodetype'] = 'Toegang via QR-code';
$string['qrcodetype_desc'] = 'Er kan een QR-code voorzien worden die mobiele app-gebruikers kunnen scannen. Dit kan gebruikt worden om de site-URL ingevuld krijgen of automatisch aangemeld te worden zonder dat de gebruiker gebruikersnaam en wachtwoord moet ingeven.';
$string['qrcodetypelogin'] = 'QR-code met automatisch inloggen';
$string['qrcodetypeurl'] = 'QR-code met site-URL';
$string['qrkeyttl'] = 'Geldigheidsduur van de QR-authenticatiesleutel';
$string['qrkeyttl_desc'] = 'De tijdsduur gedurende welke een QR-code voor automatisch inloggen geldig is.';
$string['qrsameipcheck'] = 'IP-controle voor QR-authenticatie';
$string['qrsameipcheck_desc'] = 'Of gebruikers hetzelfde netwerk moeten gebruiken voor zowel het genereren als het scannen van een QR-code om in te loggen. Schakel dit alleen uit als gebruikers problemen melden met inloggen via QR-code.';
$string['qrsiteadminsnotallowed'] = 'Om veiligheidsredenen is inloggen via QR-code niet toegestaan voor sitebeheerders of als je bent ingelogd als een andere gebruiker.';
$string['readingthisemailgettheapp'] = 'Lees je dit in een e-mail? <a href="{$a}">Download de mobiele app en ontvang meldingen op je mobiele apparaat</a>.';
$string['remoteaddons'] = 'Externe add-ons';
$string['responsivemainmenuitems'] = 'Responsieve menu-items';
$string['scanqrcode'] = 'QR-code scannen';
$string['selfsignedoruntrustedcertificatewarning'] = 'Het lijkt erop dat het HTTPS-certificaat zelfondertekend of niet vertrouwd is. De mobiele app werkt alleen met vertrouwde sites. Gebruik een online SSL-checker om het probleem te achterhalen. Als daaruit blijkt dat je certificaat in orde is, kun je deze waarschuwing negeren.';
$string['setuplink'] = 'Downloadpagina van de app';
$string['setuplink_desc'] = 'URL van de pagina met opties om de mobiele app te downloaden uit de App Store en Google Play. De link naar de downloadpagina van de app wordt weergegeven in de voettekst van de pagina en in het profiel van een gebruiker. Laat leeg om geen link weer te geven.';
$string['smartappbanners'] = 'App-banners';
$string['subscription'] = 'Abonnement';
$string['subscriptioncreated'] = 'Startdatum';
$string['subscriptionerrorrequest'] = 'Er is een onverwachte fout opgetreden bij het ophalen van de abonnementsgegevens van je Moodle-app.';
$string['subscriptionexpiration'] = 'Vervaldatum';
$string['subscriptionfeaturenotapplied'] = 'Deze functie is geconfigureerd op je site, maar is niet opgenomen in je abonnement op de Moodle-app. De instelling heeft daarom geen effect.';
$string['subscriptionfeatures'] = 'Abonnementsfuncties';
$string['subscriptionlimitsurpassed'] = 'Abonnementslimiet overschreden';
$string['subscriptionregister'] = 'Bezoek het <a href="{$a}" target="_blank">Moodle Apps Portal</a> voor details over de verschillende app-abonnementen en voor toegang tot de gebruiksstatistieken van de Moodle-app.';
$string['subscriptionsseemore'] = 'Let op: de weergegeven informatie wordt niet in realtime bijgewerkt. Mogelijk moet je uit- en weer inloggen om updates te zien. Log in op het <a href="{$a}" target="_blank">Moodle Apps Portal</a> voor informatie over het upgraden van je app-abonnement.';
$string['switchaccount'] = 'Van account wisselen';
$string['typeoflogin'] = 'Type inlog';
$string['typeoflogin_desc'] = 'Als de site een SSO-authenticatiemethode gebruikt, selecteer dan via een browservenster of via een ingebedde browser. Een ingebedde browser geeft een betere gebruikerservaring, maar het werkt niet met alle SSO-plugins.';
$string['viewqrcode'] = 'QR-code bekijken';
