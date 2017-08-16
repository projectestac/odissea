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
 * Strings for component 'plugin', language 'nl', branch 'MOODLE_32_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acties';
$string['availability'] = 'Beschikbaarheid';
$string['cancelinstallall'] = 'Annuleer nieuwe installaties ({$a})';
$string['cancelinstallhead'] = 'Annuleer installatie van plugins';
$string['cancelinstallinfo'] = 'Volgende plugins zijn nog niet volledig geïnstalleerd en hun installatie kan nog geannuleerd worden. Om dit de doen moet de plugin-map nu van de server verwijderd worden. Wees er zeker van dat je dit wil doen om gegevensverlies te voorkomen (zoals je eigen code-wijzigingen)';
$string['cancelinstallinfodir'] = 'Te verwijderen map: {$a}';
$string['cancelinstallone'] = 'Annuleer installatie';
$string['cancelupgradeall'] = 'Annuleer upgrades ({$a})';
$string['cancelupgradehead'] = 'Vorige versie van plugins terugzetten';
$string['cancelupgradeone'] = 'Annuleer deze upgrade';
$string['checkforupdates'] = 'Controleer op beschikbare updates';
$string['checkforupdateslast'] = 'Laatst gecontroleerd op {$a}';
$string['dependencyavailable'] = 'Beschikbaar';
$string['dependencyfails'] = 'Mislukt';
$string['dependencyinstall'] = 'Installeer';
$string['dependencyinstallhead'] = 'Ontbrekende afhankelijkheden installeren';
$string['dependencyinstallmissing'] = 'Installeer ontbrekende afhankelijkheden ({$a})';
$string['dependencymissing'] = 'Ontbrekend';
$string['dependencyunavailable'] = 'Niet beschikbaar';
$string['dependencyupload'] = 'Upload';
$string['dependencyuploadmissing'] = 'Upload ZIP-bestanden';
$string['detectedmisplacedplugin'] = 'Plugin "{$a->component}" is op de foute plaats ge_installeerd "{$a->current}", verwachte locatie is  "{$a->expected}"';
$string['displayname'] = 'Pluginnaam';
$string['err_response_curl'] = 'Kon beschikbare updategegevens niet ophalen - onverwachte cURL-fout.';
$string['err_response_format_version'] = 'Onverwachte versie van de antwoordopmaak. Probeer om alle beschikbare updates te controleren.';
$string['err_response_http_code'] = 'Kon beschikbare updategegevens niet ophalen - onverwachte HTTP antwoordcode.';
$string['filterall'] = 'Toon alles';
$string['filtercontribonly'] = 'Toon enkel contributiecode';
$string['filterupdatesonly'] = 'Toon enkel geüpdated';
$string['misdepinfoplugin'] = 'Plugin info';
$string['misdepinfoversion'] = 'Versie info';
$string['misdepsavail'] = 'Beschikbare ontbrekende afhankelijkheden';
$string['misdepsunavail'] = 'Niet beschikbare ontbrekende afhankelijkheden';
$string['misdepsunavaillist'] = 'Er is geen versie gevonden om aan de afhankelijkheidsvereisten te voldoen: {$a}.';
$string['misdepsunknownlist'] = 'Niet in de plugin-map: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Er zijn geen plugins van dit type geïnstalleerd';
$string['notdownloadable'] = 'Kan pakket niet downloaden';
$string['notdownloadable_help'] = 'ZIP-pakket met de update kan niet automatisch gedownload worden. Bekijk de documentatiepagina voor meer hulp.';
$string['notes'] = 'Notities';
$string['notwritable'] = 'Pluginbestanden niet beschrijfbaar';
$string['notwritable_help'] = 'De plugin-bestanden zijn niet beschrijfbaar door de webserver. Het webserverproces moet schrijftoegang hebben tot de plugin-map en alle inhoud ervan. Schrijftoegang tot de root-map van het plugintype kan ook nodig zijn.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Alle plugins';
$string['overviewext'] = 'Bijkomende plugins';
$string['overviewupdatable'] = 'Beschikbare updates';
$string['packagesdebug'] = 'Foutopsporing ingeschakeld';
$string['packagesdownloading'] = '{$a} downloaden';
$string['packagesextracting'] = 'Uitpakken {$a}';
$string['packagesvalidating'] = 'Valideren {$a}';
$string['packagesvalidatingfailed'] = 'Installatie onderbroken door een validatiefout';
$string['packagesvalidatingok'] = 'Validatie gelukt, installatie kan verder gaan';
$string['plugincheckall'] = 'Alle plugins';
$string['plugincheckattention'] = 'Plugins die je aandacht vergen';
$string['pluginchecknone'] = 'Er zijn geen plugins die je aandacht vergen';
$string['pluginchecknotice'] = 'Deze pagina toont de plugins die je aandacht nodig hebben tijdens de upgrade. Bij de aangeduide items zitten ook nieuwe plugins die geïnstalleerd zullen worden, geüpdate plugins die aangepast gaan worden en ontbrekende plugins. Contributiecode of niet-standaardplugins worden ook aangeduid als er een upgrade voor is. Je kunt best nagaan of er nieuwe versies bestaan van de beschikbare plugins en update hun broncode voor je verder gaat met deze Moodle upgrade.';
$string['plugindisable'] = 'Uitschakelen';
$string['plugindisabled'] = 'Uitgeschakeld';
$string['pluginenable'] = 'Inschakelen';
$string['pluginenabled'] = 'Ingeschakeld';
$string['release'] = 'Release';
$string['requiredby'] = 'Vereist door: {$a}';
$string['requires'] = 'Vereist';
$string['rootdir'] = 'Map';
$string['settings'] = 'Instellingen';
$string['source'] = 'Bron';
$string['sourceext'] = 'Contributiecode';
$string['sourcestd'] = 'Standaard';
$string['status'] = 'Status';
$string['status_delete'] = 'Te verwijderen';
$string['status_downgrade'] = 'Er is al een hogere versie geïnstalleerd!';
$string['status_missing'] = 'Ontbrekend op schijf';
$string['status_new'] = 'Te installeren';
$string['status_nodb'] = 'Geen databank';
$string['status_upgrade'] = 'Te upgraden';
$string['status_uptodate'] = 'Geïnstalleerd';
$string['supportedmoodleversions'] = 'Ondersteunde Moodleversies';
$string['systemname'] = 'Identificatie';
$string['type_antivirus'] = 'Antivirus plugin';
$string['type_antivirus_plural'] = 'Antivirus plugins';
$string['type_auth'] = 'Authenticatiemethode';
$string['type_auth_plural'] = 'Authenticatie-plugins';
$string['type_availability'] = 'Beschikbaarheidsrestrictie';
$string['type_availability_plural'] = 'Beschikbaarheidsrestricties';
$string['type_block'] = 'Blok';
$string['type_block_plural'] = 'Blokken';
$string['type_cachelock'] = 'Cache blokker handler';
$string['type_cachelock_plural'] = 'Cache blokkeer handlers';
$string['type_cachestore'] = 'Cache opslag';
$string['type_cachestore_plural'] = 'Cache opslag';
$string['type_calendartype'] = 'Kalendertype';
$string['type_calendartype_plural'] = 'Kalendertypes';
$string['type_coursereport'] = 'cursusrapport';
$string['type_coursereport_plural'] = 'Cursusrapporten';
$string['type_dataformat'] = 'Datumformaat';
$string['type_dataformat_plural'] = 'Datumformaten';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editors';
$string['type_enrol'] = 'Aanmelsdingswijze';
$string['type_enrol_plural'] = 'Aanmeldingswijze';
$string['type_filter'] = 'Filter';
$string['type_filter_plural'] = 'Tekst filters';
$string['type_format'] = 'Cursusopmaak';
$string['type_format_plural'] = 'Cursusindelingen';
$string['type_gradeexport'] = 'Cijfer exportmethode';
$string['type_gradeexport_plural'] = 'Cijfer exportmethodes';
$string['type_gradeimport'] = 'Cijfer importmethode';
$string['type_gradeimport_plural'] = 'Cijfer importmethodes';
$string['type_gradereport'] = 'Cijferlijstrapport';
$string['type_gradereport_plural'] = 'Cijferlijstrapporten';
$string['type_gradingform'] = 'Geavanceerde beoordelingsmethode';
$string['type_gradingform_plural'] = 'Geavanceerde beoordelingsmethodes';
$string['type_local'] = 'Lokale plugin';
$string['type_local_plural'] = 'lokale plugins';
$string['type_media'] = 'Media-speler';
$string['type_media_plural'] = 'Media-spelers';
$string['type_message'] = 'Berichten-output';
$string['type_message_plural'] = 'Berichten-outputs';
$string['type_mnetservice'] = 'MNet service';
$string['type_mnetservice_plural'] = 'MNet services';
$string['type_mod'] = 'Activiteitenmodule';
$string['type_mod_plural'] = 'Activiteitenmodules';
$string['type_plagiarism'] = 'Plagiaatspreventieplugin';
$string['type_plagiarism_plural'] = 'Plagiaatspreventieplugins';
$string['type_portfolio'] = 'Portfolio';
$string['type_portfolio_plural'] = 'Portfolio\'s';
$string['type_profilefield'] = 'Profielveldtype';
$string['type_profilefield_plural'] = 'Profielveldtypes';
$string['type_qbehaviour'] = 'Vragengedrag';
$string['type_qbehaviour_plural'] = 'Vragengedrag';
$string['type_qformat'] = 'Vraag import/export opmaak';
$string['type_qformat_plural'] = 'Vraag import/export opmaak';
$string['type_qtype'] = 'Vraagtype';
$string['type_qtype_plural'] = 'Vraagtypes';
$string['type_report'] = 'Site rapport';
$string['type_report_plural'] = 'Rapporten';
$string['type_repository'] = 'Opslagruimte';
$string['type_repository_plural'] = 'Opslagruimten';
$string['type_search'] = 'Zoekmachine';
$string['type_search_plural'] = 'Zoekmachines';
$string['type_theme'] = 'Thema';
$string['type_theme_plural'] = 'Thema\'s';
$string['type_tool'] = 'Beheertool';
$string['type_tool_plural'] = 'Beheertools';
$string['type_webservice'] = 'Webservice protocol';
$string['type_webservice_plural'] = 'Webservice protocols';
$string['uninstall'] = 'Verwijder';
$string['uninstallconfirm'] = 'Je gaat plugin <em> {$a->name}</em> verwijderen. Alles in de databank dat hiermee geassocieerd is , zal gewist worden, inclusief de configuratie, logs, gebruikersbestanden die door de plugin beheerd worden enz. Er is geen enkele manier om dit ongedaan te maken en Moodle maakt geen backup om hiervan te herstellen. Weet je ZEKER dat je hiermee wil doorgaan?';
$string['uninstalldelete'] = 'Alle gegevens die geassocieerd zijn met plugin <em> {$a->name}</em> zijn uit de database verwijderd. Om te verhinderen dat de plugin zichzelf terug installeerd, moet de map waarin die staat <em> {$a->rootdir}</em> manueel verwijderd worden van je server. Moodle kan dat niet zelf, bij gebrek aan schrijfrecht op die map.';
$string['uninstalldeleteconfirm'] = 'Alle gegevens die geassocieerd zijn met plugin <em> {$a->name}</em> zijn uit de database verwijderd. Om te verhinderen dat de plugin zichzelf terug installeerd, moet de map waarin die staat <em> {$a->rootdir}</em> verwijderd worden van je server. Wil je de plugin-map nu verwijderen?';
$string['uninstalldeleteconfirmexternal'] = 'Het lijkt er op dat de huidige versie van de plugin via een broncodebeheersysteem  ({$a}) is geïnstalleerd. Als je deze map verwijdert, dan verlies je misschien belangrijke informatie over wijzigingen aan de code. Verzeker jezelf ervan dat je deze plugin wil verwijderen voor je verder gaat.';
$string['uninstallextraconfirmblock'] = 'Er zijn {$a->instances} exemplaren van dit blok';
$string['uninstallextraconfirmenrol'] = 'Er zijn {$a->enrolments} gebruikers aangemeld';
$string['uninstallextraconfirmmod'] = 'Er zijn {$a->instances} exemplaren van deze module in {$a->courses} cursussen';
$string['uninstalling'] = 'Verwijderen van {$a->name}';
$string['updateavailable'] = 'Er is een nieuwe versie {$a} beschikbaar!';
$string['updateavailable_moreinfo'] = 'Meer informatie...';
$string['updateavailable_release'] = 'Release {$a}';
$string['updatepluginconfirm'] = 'Plugin update-bevestiging';
$string['updatepluginconfirmexternal'] = 'Blijkbaar is de huidige versie van de plugin verkregen via een broncode beheersysteem ({$a}). Als je deze update installeert, zal je de code niet meer via het broncode beheersysteem kunnen updaten. Zorg ervoor dat je zeker weet dat je de plugin op deze manier wil updaten voor je verder gaat.';
$string['updatepluginconfirminfo'] = 'Je gaat een nieuwe versie installeren van plugin <strong>{$a->name}</strong>. Een zip-bestand met versie {$a->version} van de plugin zal gedownload worden van <a href="{$a->url}">{$a->url}</a> en uitgepakt worden naar jow Moodle-installatie, zodat het je site kan upgraden.';
$string['updatepluginconfirmwarning'] = 'Moodle zal niet automatisch een back-up maken voor de upgrade. We raden je sterk aan dat je nu een volledige back-up van je databank maakt, om te kunnen herstellen van het zeldzame geval dat een fout in de nieuwe code je site ontoegankelijk maakt of je databank beschadigt. Ga verder op eigen risico.';
$string['validationmsg_componentmatch'] = 'Volledige componentnaam';
$string['validationmsg_componentmismatchname'] = 'Add-on name klopt niet';
$string['validationmsg_componentmismatchname_help'] = 'Sommige ZIP-bestanden, zoals die gemaakt door Github, kunnen een foute root-mapnaam bevatten. Je moet de naam van de root-map van de plugin aanpassen zodat die de naam van de plugin heeft.';
$string['validationmsg_componentmismatchname_info'] = 'De plugin verklaart dat zijn naam \'{$a}\' is en dat die naam niet overeen komt met de root-map';
$string['validationmsg_componentmismatchtype'] = 'Het plugin-type is fout.';
$string['validationmsg_componentmismatchtype_info'] = 'Het verwachte type is \'{$a->expected}\', maar de plugin verklaart dat het type \'{$a->found}\' is.';
$string['validationmsg_filenotexists'] = 'Uitgepakt bestand niet gevonden';
$string['validationmsg_filesnumber'] = 'Te weinig bestanden in het pakket';
$string['validationmsg_filestatus'] = 'Kon niet alle bestanden uitpakken';
$string['validationmsg_filestatus_info'] = 'De poging om bestand {$a->file} uit te pakken mislukte met als fout \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Taalbestand gevonden';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Fout';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Waarschuwing';
$string['validationmsg_maturity'] = 'Verklaar maturiteitsniveau';
$string['validationmsg_maturity_help'] = 'De plugin kan verklaren hoe volwassen de code is. Als degene die de code onderhoud vindt dat de code stabiel is, dan zal er MATURITY_STABLE staan. Alle andere niveau\'s (zoals alpha of beta) moeten als niet stabiel beschouwd worden en er wordt een waarschuwing getoond.';
$string['validationmsg_missingcomponent'] = 'Plugin verklaart zijn componentnaam niet';
$string['validationmsg_missingcomponent_help'] = 'Alle plugins moeten hun volledige componentnaam geven via de `$plugin->component` verklaring in het bestand version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'Fout in de bestandsnaam van het Engelstalig taalpakket';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Het plugin-type mist het verwachte Engelstalig taalbestand {$a}.';
$string['validationmsg_missinglangenfile'] = 'Geen Engelstalig taalpakket gevonden';
$string['validationmsg_missinglangenfolder'] = 'Map Engels taalpakket ontbreekt';
$string['validationmsg_missingversion'] = 'De plugin zegt niet welke versie het is';
$string['validationmsg_missingversionphp'] = 'Bestand version.php niet gevonden';
$string['validationmsg_multiplelangenfiles'] = 'Meerdere Engelse taalbestanden gevonden';
$string['validationmsg_onedir'] = 'Ongeldige structuur van het ZIP-bestand';
$string['validationmsg_onedir_help'] = 'Het zip-bestand moet één root-map bevatten waarin de plugin zit. De naam van die map moet dezelfde zijn als de naam van de plugin.';
$string['validationmsg_pathwritable'] = 'Test schrijftoegang';
$string['validationmsg_pluginversion'] = 'Plugin-versie';
$string['validationmsg_release'] = 'Plugin-release';
$string['validationmsg_requiresmoodle'] = 'Vereiste Moodleversie';
$string['validationmsg_rootdir'] = 'Naam van de te installeren plugin';
$string['validationmsg_rootdir_help'] = 'De naam van de root-map in het ZIP-bestand is de naam van de geïnstalleerde contributiecode. Als de naam fout is, dan kun je de root-map in het zip-bestand hernoemen voor je de contributiecode installeerd.';
$string['validationmsg_rootdirinvalid'] = 'Ongeldige naam contributiecode';
$string['validationmsg_rootdirinvalid_help'] = 'De naam van de root-map in het ZIP-bestand bevat ongeldige tekens. Sommige ZIP-bestanden, zoals diegene die door Github gegenereerd worden, kunnen een foute root-mapnaam bevatten. Je moet die naam van de root-map aanpassen, zodat die overeenkomt met de naam van de geïnstalleerde contributiecode.';
$string['validationmsg_targetexists'] = 'Doellocatie bestaat al en zal verwijderd worden';
$string['validationmsg_targetexists_help'] = 'De map waar de add-on in geïnstalleerd moet worden bestaat al en zal vervangen worden door de inhoud van het plugin-pakket.';
$string['validationmsg_targetnotdir'] = 'Doellocatie wordt ingenomen door een bestand';
$string['validationmsg_unknowntype'] = 'Onbekend plugintype';
$string['validationmsg_versionphpsyntax'] = 'Niet-ondersteunde syntax gevonden in het bestand version.php';
$string['version'] = 'Versie';
$string['versiondb'] = 'Huidige versies';
$string['versiondisk'] = 'Nieuwe versie';
