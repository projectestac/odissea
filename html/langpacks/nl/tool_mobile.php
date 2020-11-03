<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_mobile', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb foutopsporing is ingeschakeld. Dit zou uitgeschakeld moeten zijn in de instellingen van de externe databank-authenticatie of de externe aanmeldingsplugin.';
$string['androidappid'] = 'Android app unieke identificatie';
$string['androidappid_desc'] = 'Deze instelling mag standaard gelaten worden tenzij je een aangepaste Android app hebt.';
$string['apppolicy'] = 'App beleids-URL';
$string['apppolicy_help'] = 'De URL van een beleid voor app-gebruikers die getoond wordt op de Over-pagina in de app. Als het veld leeg gelaten wordt, dan zal de site-beleids-URL gebruikt worden.';
$string['apprequired'] = 'Deze functionaliteit is alleen beschikbaar wanneer je deze gebruikt via de mobiele Moodle- of desktop-app.';
$string['autologinkeygenerationlockout'] = 'Auto-login sleutel genereren is geblokkeerd. Je moet 6 minuten wachten tussen de aanvragen.';
$string['autologinnotallowedtoadmins'] = 'Auto-login is niet toegestaan voor site-beheerders.';
$string['cachedef_plugininfo'] = 'Dit bewaart de lijst met plugins met mobiele toevoegingen';
$string['clickheretolaunchtheapp'] = 'Klik hier als de app niet automatisch opent.';
$string['configmobilecssurl'] = 'Een CSS-bestand om je mobiele app interface aan te passen.';
$string['customlangstrings'] = 'Aangepaste taalstrings';
$string['customlangstrings_desc'] = 'Woorden en zinnen die in de app getoond worden, kunnen hier aangepast worden. Zet elke aangepaste taal-string op een nieuwe lijn met als opmaak: string-identificatie, aangepaste taalstring en taalcode, gescheiden door een verticaal streepje (pipe). Bijvoorbeeld:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Bekijk de documentatie voor een volledige lijst met string-identificaties.';
$string['custommenuitems'] = 'Aangepaste menu-items';
$string['custommenuitems_desc'] = 'Er kunnen bijkomende items toegevoegd worden in het hoofdmenu van de app door ze hier op te geven. Voeg elk extra menu-item in op een nieuwe regel met opmaak: item tekst, link URL, link-openmethode en taalcode (optioneel, om een item enkel te tonen aan gebruikers van de opgegeven taal), gescheiden door een verticaal streepje (pipe).

Link-openmethodes zijn: app (om een activiteit te linken die ondersteund wordt door de app), inappbrowser (voor het openen van een link in een browser zonder de app te verlaten), browser (voor het openen van de link in de standaardbrowser van het toestel buiten de app) en embedded (voor het tonen van de link in een iframe in een nieuwe pagina in de app).

Bijvoorbeeld:
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Bezoek ons SIS | https://someurl.xyz | browser | nl
Mijn cijfers | https://someurl.xyz/local/mygrades/index.php | embedded | nl
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>';
$string['darkmode'] = 'Donkere modus';
$string['disabledfeatures'] = 'Uitgeschakelde functies';
$string['disabledfeatures_desc'] = 'Selecteer hier de mogelijkheden die je wil uitschakelen in de Mobiele app voor jouw site. Merk op dat sommige mogelijkheden die hier opgelijst zijn al uitgeschakeld kunnen zijn via andere instellingen. Je zult moeten aanmelden en afmelden in de app om de wijzigingen te kunnen zien.';
$string['displayerrorswarning'] = 'Het tonen van foutopsporingsberichten (debugdisplay) is ingeschakeld. Dit zou uitgeschakeld moeten zijn.';
$string['downloadcourse'] = 'Download cursus';
$string['downloadcourses'] = 'Download cursussen';
$string['enablesmartappbanners'] = 'Smart App Banners inschakelen';
$string['enablesmartappbanners_desc'] = 'Indien ingeschakeld zal dit een banner tonen om de Moodle Mobile app te promoten wanneer de site met een mobiele browser bezocht wordt.';
$string['forcedurlscheme'] = 'Als je wilt toestaan dat alleen de aan jouw organisatie aangepaste app kan geopend worden via een browser venster, specificeer hier dan het URL schema daarvan. Als je enkel de officiële app wil toestaan, zet de standaardwaarde dan hier. Laat het veld leeg als je gelijk welke app wil toestaan.';
$string['forcedurlscheme_key'] = 'URL-schema';
$string['forcelogout'] = 'Verplicht afmelden';
$string['forcelogout_desc'] = 'Indien ingeschakeld wordt de optie \'Wijzig site\' gewijzigd in \'Uitloggen\'. Hierdoor wordt de gebruiker volledig uitgelogd. Die moet dan zijn gebruikersnaam en wachtwoord opnieuw ingeven wanneer ze een volgende keer toegang willen tot de site.';
$string['getmoodleonyourmobile'] = 'Installeer de mobiele app';
$string['h5poffline'] = 'Bekijk H5P-inhoud offline';
$string['httpsrequired'] = 'HTTPS vereist';
$string['insecurealgorithmwarning'] = 'Het lijkt er op dat het HTTPS-certificaat en onveilig algoritme gebruikt voor ondertekening (SHA-1). Probeer het certificaat te updaten.';
$string['invalidcertificatechainwarning'] = 'Het lijkt er op dat de certificaatketting niet geldig is';
$string['invalidcertificateexpiredatewarning'] = 'Het lijkt er op dat het HTTPS certificaat voor deze site vervallen is.';
$string['invalidcertificatestartdatewarning'] = 'Het lijkt er op dat het HTTPS-certificaat nog niet geldig is (met een startdatum in de toekomst).';
$string['invalidprivatetoken'] = 'Ongeldig privé token. Token zou niet leeg mogen zijn of worden doorgegeven via GET parameter.';
$string['invaliduserquotawarning'] = 'Het gebruikersquotum is ingesteld op een ongeldig getal. Het moet ingesteld worden op een geldig geheel getal in "Site beveiligingsinstellingen".';
$string['iosappid'] = 'Unieke identifier van de IOS app';
$string['iosappid_desc'] = 'Deze instelling mag standaard blijven tenzij je een aangepaste iOS app hebt.';
$string['loginintheapp'] = 'Via de app';
$string['logininthebrowser'] = 'Via een browser-venster (voor SSO plugins)';
$string['loginintheembeddedbrowser'] = 'Via een ingebedde browser (voor SSO plugins)';
$string['mainmenu'] = 'Hoofdmenu';
$string['minimumversion'] = 'Als een app-versie wordt opgegeven (3.8.0 of hoger) dan zullen alle gebruikers die een oudere app gebruiken eerst moeten upgraden voor ze toegang krijgen tot de site.';
$string['minimumversion_key'] = 'Minimale app-versie vereist';
$string['mobileapp'] = 'Mobiele app';
$string['mobileappconnected'] = 'Moodle app verbonden';
$string['mobileappearance'] = 'Mobiel uiterlijk';
$string['mobileappenabled'] = 'Deze site heeft toegang tot mobiele apps ingeschakeld.<br /><a href="{$a}">Download de mobiele app</a>.';
$string['mobileauthentication'] = 'Mobiele authenticatie';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobiele mogelijkheden';
$string['mobilenotificationsdisabledwarning'] = 'Mobiele meldingen zijn niet ingeschakeld. Ze zouden moeten ingeschakeld zijn in berichten instellingen.';
$string['mobilesettings'] = 'Mobiele instellingen';
$string['moodleappsportalfeatureswarning'] = 'Merk op dat sommige functies beperkt kunnen zijn, afhankelijk van je Moodle app abonnement. Bezoek voor meer details de <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['oauth2identityproviders'] = 'OAuth 2 identiteitsproviders';
$string['offlineuse'] = 'Offline cursus';
$string['pluginname'] = 'Mobiele app tools';
$string['pluginnotenabledorconfigured'] = 'Plugin niet ingeschakeld of geconfigureerd.';
$string['privacy:metadata:core_userkey'] = 'Gebruikerssleutels die gebruikt zijn om de autologin-sleutel te maken voor de huidige gebruiker.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'De datum waarop de laatste autologin-sleutel opgevraagd is. Tussen elke vraag moet 6 minuten zitten.';
$string['readingthisemailgettheapp'] = 'Dit in een e-mail lezen? <a href="{$a}"> Download de mobiele app en ontvang meldingen op je mobiele apparaat </a>.';
$string['remoteaddons'] = 'Externe add-ons';
$string['responsivemainmenuitems'] = 'Responsieve menu-items';
$string['selfsignedoruntrustedcertificatewarning'] = 'Het lijkt er op dat het HTTPS-certificaat zelf ondertekend is of niet vertrouwd. De mobile app zal enkel werken met vertrouwde sites.';
$string['setuplink'] = 'App downloadpagina';
$string['setuplink_desc'] = 'URL van de pagina die linkt naar de mobiele app van de App Store en Google Play. De app download pagina-link wordt getoond in de footer van de profielpagina van een gebruiker. Laat leeg om geen link te tonen.';
$string['smartappbanners'] = 'App Banners';
$string['typeoflogin'] = 'Soort login';
$string['typeoflogin_desc'] = 'Als de site een SSO-authenticatiemethode gebruikt, selecteer dan via een browservenster of via een ingebedde browser. Een ingebedde browser geeft een betere gebruikerservaring, maar het werkt niet met alle SSO-plugins.';
