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
 * Strings for component 'report_security', language 'nl', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Deze status controleert of er een recente fout is gedetecteerd op basis van de drempel die is ingesteld in de belangrijkste antivirusinstellingen.';
$string['check_antivirus_error'] = '{$a->errors} fouten zijn gedetecteerd in de laatste {$a->lookback}';
$string['check_antivirus_info'] = 'Er zijn momenteel geen antivirusscanners ingeschakeld';
$string['check_antivirus_logstore_not_supported'] = 'Kan de status van antivirusscanners niet verifiëren vanwege het gekozen type logarchief';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = '{$a->scanners} antivirusscanner(s) ingeschakeld, er zijn geen problemen gedetecteerd in de laatste {$a->lookback}';
$string['check_configrw_details'] = '<p>We raden aan om de rechten op het bestand <code>config.php</code> te wijzigen na installatie, zodat het bestand niet door de webserver gewijzigd kan worden.
Merk op dat dit de veiligheid van de server niet enorm gaat verhogen, maar het kan inbraken vertragen of beperken.</p>';
$string['check_configrw_name'] = 'config.php beschrijfbaar';
$string['check_configrw_ok'] = 'config.php kan niet gewijzigd worden door PHP-scripts';
$string['check_configrw_warning'] = 'PHP-scripts kunnen config.php wijzigen';
$string['check_cookiesecure_details'] = '<p>Als je https inschakelt, dan kun je ook best secure cookies inschakelen. Je zou ook een permanente omleiding van http naar https moeten maken. Best schakel je ook HSTS headers in op je webserver.</p>';
$string['check_cookiesecure_error'] = 'Schakel secure cookies in';
$string['check_cookiesecure_http'] = 'Je moet https inschakelen om veilige cookies te kunnen gebruiken';
$string['check_cookiesecure_name'] = 'Secure cookies';
$string['check_cookiesecure_ok'] = 'Secure cookies ingeschakeld.';
$string['check_crawlers_details'] = '<p>De instelling Open voor Google maakt het voor zoekrobots mogelijk cursussen te doorzoeken met de gastrol. Het is nutteloos deze instelling in te schakelen als aanmelden als gast niet toegelaten is.</p>';
$string['check_crawlers_error'] = 'Gast-toegang voor zoekrobots toegelaten terwijl gast-toegang is uitgeschakeld.';
$string['check_crawlers_info'] = 'Zoekrobots mogen binnen als gasten';
$string['check_crawlers_name'] = 'Open voor Google';
$string['check_crawlers_ok'] = 'Gast-toegang voor zoekrobots uitgeschakeld';
$string['check_defaultuserrole_details'] = '<p>Alle aangemelde gebruikers krijgen de mogelijkheden van de standaard rol. Zorg er voor dat er geen gevaarlijke mogelijkheden toegelaten zijn in deze rol.</p>
<p>De enige ondersteunde verouderde rol voor de standaard gebruiker is de rol: <em>geauthenticeerde gebruiker</em>. De bekijk cursusmogelijkheid kan beter niet ingeschakeld zijn.</p>
<p>Controleer of de de tool voor automatisch aanvraag om gegevens verwijderen (tool_dataprivacy | automaticdatadeletionapproval) is ingeschakeld. Gebruikers kunnen dan aanvragen om gegevensverwijdering aanvragen die grote hoeveelheden gegevens kunnen verwijderen.</p>';
$string['check_defaultuserrole_error'] = 'Fout gedefinieerde standaard rol "{$a}" gedetecteerd!';
$string['check_defaultuserrole_name'] = 'Standaard rol voor alle gebruikers';
$string['check_defaultuserrole_notset'] = 'Standaardrol niet ingeschakeld';
$string['check_defaultuserrole_ok'] = 'Definitie van de standaard rol voor alle gebruikers is OK';
$string['check_dirindex_info'] = 'Directoryindex mag niet zijn ingeschakeld';
$string['check_displayerrors_details'] = '<p>Het inschakelen van de PHP-instelling <code>display_errors</code> wordt afgeraken op productiesites omdat een foutmelding gevoelige informatie over je server kan vrijgeven.';
$string['check_displayerrors_error'] = 'De PHP-instelling voor het tonen van fouten is ingeschakeld. Je kunt dit beter uitschakelen.';
$string['check_displayerrors_name'] = 'Tonen van PHP-fouten';
$string['check_displayerrors_ok'] = 'Tonen van PHP-fouten uitgeschakeld';
$string['check_dotfiles_info'] = 'Alle dotfiles behalve /.well-known/* mogen niet openbaar zijn';
$string['check_emailchangeconfirmation_details'] = '<p>Er wordt aangeraden gebruikers hun e-mailadres te laten bevestigen wanneer ze dat wijzigen in hun profiel. Indien uitgeschakeld kunnen spammers proberen de server te misbruiken om spam te versturen.</p><p>Het e-mailveld kan ook geblokkeerd worden voor authenticatieplugins, deze mogelijkheid is hier niet overwogen.</p>';
$string['check_emailchangeconfirmation_error'] = 'Gebruikers kunnen gelijk welk e-mailadres ingeven';
$string['check_emailchangeconfirmation_info'] = 'Gebruikers kunnen alleen e-mailadressen gebruiken van toegelaten domeinen.';
$string['check_emailchangeconfirmation_name'] = 'Wijzig e-mailadres bevestiging';
$string['check_emailchangeconfirmation_ok'] = 'Bevestiging van de wijziging van het e-mailadres in het gebruikersprofiel.';
$string['check_embed_details'] = '<p>Het onbeperkt embedden van objecten is erg gevaarlijk - elke geregistreerde gebruiker kan een XSS-aanval starten tegen andere servergebruikers. Deze instelling moet uitgeschakeld worden op productieservers.</p>';
$string['check_embed_error'] = 'Onbeperkt embedden van objecten ingeschakeld - dit is erg gevaarlijk voor de meeste servers.';
$string['check_embed_name'] = 'EMBED en OBJECT toelaten';
$string['check_embed_ok'] = 'Onbeperkt embedden van objecten is niet toegelaten';
$string['check_frontpagerole_details'] = '<p>Alle geregistreerde gebruikers krijgen de standaardrol voor de  site startpagina voor activiteiten op die pagina. Zorg ervoor dat deze rol geen mogelijkheden heeft met beveiligingsproblemen.</p>
<p>Er wordt aangeraden een speciale rol hiervoor te maken en de standaardrollen niet te gebruiken.</p>';
$string['check_frontpagerole_error'] = 'Fout gedefinieerde site startpaginarol "{$a}" gedetecteerd!';
$string['check_frontpagerole_name'] = 'Site startpaginarol';
$string['check_frontpagerole_notset'] = 'Site startpaginarol niet ingesteld.';
$string['check_frontpagerole_ok'] = 'Site startpagina roldefinitie is OK.';
$string['check_guestrole_details'] = '<p>De gastrol wordt gebruikt voor gasten, niet aangemelde gebruikers en tijdelijke gasttoegang voor cursussen. Zorg er voor dat geen gevaarlijke mogelijkheden toegelaten zijn voor deze rol.</p>
<p>De enige ondersteunde verouderde rol voor dit type gebruiker is <em>Gast</em>.</p>';
$string['check_guestrole_error'] = 'Fout geconfigureerde gastrol "{$a}" gedetecteerd!';
$string['check_guestrole_name'] = 'Gast rol';
$string['check_guestrole_notset'] = 'Gast rol niet ingeschakeld';
$string['check_guestrole_ok'] = 'Gastrol definitie OK';
$string['check_nodemodules_details'] = '<p>De map <em>{$a->path}</em> bevat Node.js modules en hun afhankelijkheden, typisch geïnstalleerd door NPM. Deze modules kunnen nodig zijn voor lokale Moodle-ontwikkeling, zoals voor het gebruik van het grunt framework. Ze zijn niet nodig om een Moodle-site in productie te gebruiken en kunnen mogelijk gevaarlijke code bevatten die je site kwetsbaar maakt voor aanvallen.</p><p>Het is sterk aangeraden om deze map te verwijderen als je site bereikbaar is via een publieke URL of om om minstens de toegang ertoe te beveiligen via de configuratie van je webserver.</p>';
$string['check_nodemodules_info'] = 'De map node_modules zou niet mogen aanwezig zijn op publieke sites';
$string['check_nodemodules_name'] = 'Map voor node_modules';
$string['check_openprofiles_details'] = 'Open gebruikersprofielen kunnen door spammers misbruikt worden. Aangeraden wordt om ofwel <code>Aanmelden verplicht voor gebruikersprofielen</code> ofwel <code>Aanmelden verplicht</code> in te schakelen.';
$string['check_openprofiles_error'] = 'Iedereen kan gebruikersprofielen zien zonder aan te melden';
$string['check_openprofiles_name'] = 'Open gebruikersprofielen';
$string['check_openprofiles_ok'] = 'Aanmelden is vereist om gebruikersprofielen te kunnen zien';
$string['check_passwordpolicy_details'] = '<p>Aangeraden wordt om een wachtwoordsbeleid te voeren, omdat het raden van wachtwoorden dikwijls de gemakkelijkste manier is om onrechtmatig toegang te krijgen. Maak de vereisten echter niet te streng, omdat het resultaat daarvan kan zijn dat gebruikers hun wachtwoorden niet meer kunnen onthouden en ze vergeten of opschrijven.</p>';
$string['check_passwordpolicy_error'] = 'Wachtwoordbeleid niet ingesteld';
$string['check_passwordpolicy_name'] = 'Wachtwoordbeleid';
$string['check_passwordpolicy_ok'] = 'Wachtwoordbeleid ingeschakeld';
$string['check_preventexecpath_details'] = '<p>Het instellen van uitvoerbare paden via de administratiepagina\'s is een bijkomend risico voor escalatie van privileges. Dit moet afgedwongen worden in config.php: </p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'Paden voor uitvoerbare programma\'s';
$string['check_preventexecpath_ok'] = 'Paden voor uitvoerbare programma\'s kunnen enkel in config.php ingesteld worden.';
$string['check_preventexecpath_warning'] = 'Paden voor uitvoerbare programma\'s kunnen in de beheerdersinterface ingesteld worden.';
$string['check_publicpaths_403'] = '(Retourneerde een 403, idealiter zou 404 moeten zijn)';
$string['check_publicpaths_generic'] = '{$a} -bestanden mogen niet openbaar zijn';
$string['check_publicpaths_name'] = 'Controleer alle openbare / privépaden';
$string['check_publicpaths_ok'] = 'Geen enkel intern pad is openbaar';
$string['check_publicpaths_warning'] = 'Sommige interne paden zijn openbaar';
$string['check_riskadmin_detailsok'] = '<p>Controleer aub volgende lijst beheerders:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Controleer onderstaande lijst beheerders::</p>{$a->admins}
<p>Aangeraden wordt om de beheerdersrol enkel toe te wijzen in de systeemcontext. Volgende gebruikers hebben een niet-ondersteunde beheerdersrol:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Beheerders';
$string['check_riskadmin_ok'] = '{$a} serverbeheerders gevonden';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) roltoewijzing nakijken</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} beheerdersaccounts gevonden en {$a->unsupcount} niet-ondersteunde beheerdersrollen toegewezen.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Dit instellen geeft gebruikers het recht om gebruikersgegevens in back-ups te zetten. Laat dit alleen toe als het echt nodig is.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Volgende systeemrollen kunnen gebruikersgegevens in de back-ups zetten. Laat dit alleen toe als het echt nodig is.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Door de bovenstaande roloverschrijvingen kunnen volgende gebruikers back-ups maken met daarin privégegevens van alle gebruikers in hun cursus. Zorg ervoor dat ze te vertrouwen zijn en beschermd door sterke wachtwoorden:<p> {$a}';
$string['check_riskbackup_detailsok'] = 'Er is geen enkele rol die toelaat om gebruikersgegevens in back-ups te zetten. Merk op dat beheerders met de "doe alles"-mogelijkheid dit wel nog kunnen.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} in {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Back-up van gebruikersgegevens';
$string['check_riskbackup_ok'] = 'Er zijn geen rollen die expliciet het back-uppen van gebruikersgegevens toelaten';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) in {$a->contextname}</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} rollen gevonden, {$a->overridecount} overschijvingen en  {$a->usercount} gebruikers met de mogelijkheid gebruikersgegevens te back-uppen.';
$string['check_riskxss_details'] = '<p>RISK_XSS wijst alle gevaarlijk mogelijkheden aan die alleen vertrouwde gebruikers zouden mogen krijgen.</p>
<p>Controleer volgende gebruikerslijst en zorg er voor dat je ze volledig kunt vertrouwen op deze server.</p>{$a}';
$string['check_riskxss_name'] = 'XSS vertrouwde gebruikers';
$string['check_riskxss_warning'] = 'RISK_XSS vond {$a} vertrouwde gebruikers.';
$string['check_unsecuredataroot_details'] = '<p>De dataroot-map mag niet toegankelijk zijn vanaf het internet. De beste manier om er voor te zorgen dat deze map niet toegankelijk is, is ze aan te maken buiten de publieke web-map.</p>
<p>Als je de map verplaatst, dan moet je de <code>$CFG->dataroot</code>-instelling in <code>config.php</code> ook aanpassen.</p>';
$string['check_unsecuredataroot_error'] = 'Je dataroot-map <code>{$a}</code> staat op de verkeerde plaats en is toegankelijk vanaf het internet!';
$string['check_unsecuredataroot_name'] = 'Onveilige dataroot';
$string['check_unsecuredataroot_ok'] = 'De dataroot-map mag niet toegankelijk zijn vanaf het internet.';
$string['check_unsecuredataroot_warning'] = 'Je dataroot-map <code>{$a}</code> staat op de verkeerde plaats en kan toegankelijk zijn vanaf het internet!';
$string['check_upgradefile_info'] = 'Upgrade notitiebestanden zouden niet publiek beschikbaar mogen zijn';
$string['check_vendordir_details'] = '<p>De map <em>{$a->path}</em> bevat verschillende externe bibliotheken en hun afhankelijkheden, typisch geïnstalleerd door de PHP Composer. Deze bibliotheken kunnen nodig zijn voor lokale Moodle-ontwikkeling, zoals voor het installeren van het PHPUnit framework. Ze zijn niet nodig om een Moodle-site in productie te gebruiken en kunnen mogelijk gevaarlijke code bevatten die je site kwetsbaar maakt voor aanvallen.</p><p>Het is sterk aangeraden om deze map te verwijderen als je site bereikbaar is via een publieke URL of om om minstens de toegang ertoe te beveiligen via de configuratie van je webserver.</p>';
$string['check_vendordir_info'] = 'De vendor-map zou niet mogen bestaan op publieke sites.';
$string['check_vendordir_name'] = 'Vendor-map';
$string['check_webcron_details'] = '<p>Web cron kan privé-gegevens van gebruikers tonen aan anonieme gebruikers. Daarom kun je best cron via CLI gebruiken of de cron-pagina beschermen met een wachtwoord.</p>';
$string['check_webcron_name'] = 'Web cron';
$string['check_webcron_ok'] = 'Anonieme gebruikers hebben geen toegang tot cron.';
$string['check_webcron_warning'] = 'Anonieme gebruikers hebben toegang tot cron.';
$string['configuration'] = 'Configuratie';
$string['description'] = 'Beschrijving';
$string['details'] = 'Details';
$string['eventreportviewed'] = 'Rapport beveiligingscontrole bekeken';
$string['issue'] = 'Probleem';
$string['pluginname'] = 'Beveiligingscontrole';
$string['privacy:metadata'] = 'De beveiligingsoverzichtsplugin bewaart geen persoonlijke gegevens.';
$string['security:view'] = 'Bekijk veiligheidsrapport';
$string['timewarning'] = 'Deze bewerking kan lang duren, wees geduldig.';
