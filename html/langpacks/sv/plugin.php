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
 * Strings for component 'plugin', language 'sv', version '4.4'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Åtgärder';
$string['availability'] = 'Tillgänglighet';
$string['cancelinstallall'] = 'Avbryt nya installationer ({$a})';
$string['cancelinstallhead'] = 'Avbryter installationen';
$string['cancelinstallinfo'] = 'Följande plugins är inte helt installerade ännu så deras installation kan avbrytas. För att göra det måste plugin-mappen tas bort från servern nu. Se till att detta verkligen är vad du vill för förhindra oavsiktlig dataförlust (till exempel dina egna kodändringar).';
$string['cancelinstallinfodir'] = 'Katalog som kommer tas bort: {$a}';
$string['cancelinstallone'] = 'Avbryt';
$string['cancelupgradeall'] = 'Avbryt uppgraderingar ({$a})';
$string['cancelupgradehead'] = 'Återställer tidigare versioner';
$string['cancelupgradeone'] = 'Avbryt';
$string['checkforupdates'] = 'Sök efter uppdateringar';
$string['checkforupdateslast'] = 'Senaste sökning: {$a}';
$string['dependencyavailable'] = 'Tillgänglig';
$string['dependencyfails'] = 'Fel';
$string['dependencyinstall'] = 'Installera';
$string['dependencyinstallhead'] = 'Installera saknade beroenden';
$string['dependencyinstallmissing'] = 'Installera saknade beroenden ({$a})';
$string['dependencymissing'] = 'Saknade';
$string['dependencyunavailable'] = 'Ej tillgänglig';
$string['dependencyupload'] = 'Ladda upp';
$string['dependencyuploadmissing'] = 'Ladda upp ZIP-filer';
$string['detectedmisplacedplugin'] = 'Installationsplatsen för "{$a->component}" är felaktig ("{$a->current}"). Förväntad plats är "{$a->expected}"';
$string['displayname'] = 'Namn';
$string['err_response_curl'] = 'Kunde inte hämta data om nya uppdateringar - oväntad cURL-fel.';
$string['err_response_format_version'] = 'Oväntad version på svarsformatet. Vänligen kontrollera igen efter nya uppdateringar.';
$string['err_response_http_code'] = 'Kunde inte hämta data om nya uppdateringar - oväntad HTTP-svarskod.';
$string['filterall'] = 'Visa alla';
$string['filtercontribonly'] = 'Visa övriga';
$string['filterupdatesonly'] = 'Visa endast uppdaterbara';
$string['incompatibleversion'] = 'Inkompatibel Moodleversion: {$a}';
$string['isenabled'] = 'Aktiverad?';
$string['misdepinfoplugin'] = 'Beskrivning';
$string['misdepinfoversion'] = 'Versionsinformation';
$string['misdepsavail'] = 'Tillgängliga saknade beroenden';
$string['misdepsunavail'] = 'Ej tillgängliga saknade beroenden';
$string['misdepsunavaillist'] = 'Ingen version som uppfyllde beroendekravet \'{$a}\' hittades.';
$string['misdepsunknownlist'] = 'Ej i pluginkatalogen: <strong>{$a}</string>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Inga pluginmoduler av denna typ är installerade';
$string['notdownloadable'] = 'Det går inte att hämta paketet';
$string['notdownloadable_help'] = 'ZIP-paketet med uppdateringen kan inte laddas ned automatiskt.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Anteckningar';
$string['notsupported'] = 'Pluginmodulen kanske inte är kompatibel med Moodle, version {$a}';
$string['notwritable'] = 'Saknar skrivbehörighet till pluginkatalogen';
$string['notwritable_help'] = 'Plugin-filer är inte skrivbara för webbservern. Webbserverprocessen måste ha skrivbehörighet till plugin-katalogen och allt dess innehåll. Skrivåtkomst till rotmappen för den angivna plugin-typen kan också krävas.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Alla';
$string['overviewext'] = 'Tilläggsmoduler';
$string['overviewupdatable'] = 'Nya uppdateringar';
$string['packagesdebug'] = 'Felsökningsmeddelanden aktiverade';
$string['packagesdownloading'] = 'Laddar ner {$a}';
$string['packagesextracting'] = 'Extraherar {$a}';
$string['packagesvalidating'] = 'Validerar {$a}';
$string['packagesvalidatingfailed'] = 'Installationen avbröts på grund av valideringsfel';
$string['packagesvalidatingok'] = 'Valideringen lyckades, installationen kan fortsätta';
$string['plugincheckall'] = 'Alla';
$string['plugincheckattention'] = 'Pluginmoduler som kräver åtgärd';
$string['pluginchecknone'] = 'Inga plugin kräver din uppmärksamhet';
$string['pluginchecknotice'] = 'Denna sida visar pluginmoduler som kan kräva åtgärder under uppgraderingen. Det kan t.ex. finnas nya pluginmoduler som behöver installeras, uppgraderas eller som saknas. Övriga pluginmoduler visas om det finns en tillgänglig uppdatering för dem. Det rekommenderas att du kontrollerar om det finns nyare versioner tillgängliga och uppdatera dem innan du fortsätter med denna uppgradering.';
$string['plugindisable'] = 'Inaktivera';
$string['plugindisabled'] = 'Inaktiverad';
$string['pluginenable'] = 'Aktivera';
$string['pluginenabled'] = 'Aktiverad';
$string['release'] = 'Släppt version';
$string['requiredby'] = 'Krävs av: {$a}';
$string['requires'] = 'Kräver';
$string['rootdir'] = 'Katalog';
$string['settings'] = 'Inställningar';
$string['source'] = 'Källa';
$string['sourceext'] = 'Tillägg';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Status';
$string['status_delete'] = 'Kommer att tas bort';
$string['status_downgrade'] = 'Nyare version redan installerad!';
$string['status_missing'] = 'Saknas från skivan';
$string['status_new'] = 'Kommer att installeras';
$string['status_nodb'] = 'Ingen databas';
$string['status_upgrade'] = 'Kommer att uppgraderas';
$string['status_uptodate'] = 'Installerad';
$string['supportedconversions'] = 'Dokumentkonverteringar som stöds';
$string['supportedmoodleversions'] = 'Moodleversioner som stöds';
$string['systemname'] = 'Identifierare';
$string['type_antivirus'] = 'Antivirus-pluginmodul';
$string['type_antivirus_plural'] = 'Antivirus-pluginmoduler';
$string['type_auth'] = 'Autentiseringsmetod';
$string['type_auth_plural'] = 'Pluginmoduler för autentisering';
$string['type_availability'] = 'Tillgänglighetsbegränsning';
$string['type_availability_plural'] = 'Tillgänglighetsbegränsningar';
$string['type_block'] = 'Block';
$string['type_block_plural'] = 'Block';
$string['type_cachelock'] = 'Cachelåsningshanterare';
$string['type_cachelock_plural'] = 'Cachelåsningshanterare';
$string['type_cachestore'] = 'Cachearkiv';
$string['type_cachestore_plural'] = 'Cachearkiv';
$string['type_calendartype'] = 'Kalendertyp';
$string['type_calendartype_plural'] = 'Kalendertyper';
$string['type_contentbank'] = 'Innehållsbank';
$string['type_contentbank_plural'] = 'Pluginmoduler för innehållsbank';
$string['type_contenttype'] = 'Innehållsbank';
$string['type_contenttype_plural'] = 'Pluginmoduler för innehållsbank';
$string['type_coursereport'] = 'Kursrapport';
$string['type_coursereport_plural'] = 'Kursrapporter';
$string['type_customfield'] = 'Anpassat fält';
$string['type_customfield_plural'] = 'Anpassade fält';
$string['type_dataformat'] = 'Dataformat';
$string['type_dataformat_plural'] = 'Dataformat';
$string['type_editor'] = 'Redigerare';
$string['type_editor_plural'] = 'Redigerare';
$string['type_enrol'] = 'Registreringsmetod';
$string['type_enrol_plural'] = 'Registreringsmetoder';
$string['type_fileconverter'] = 'Dokumentkonverterare';
$string['type_fileconverter_plural'] = 'Dokumentkonverterare';
$string['type_fileconvertermanage'] = 'Hantera dokumentkonverterare';
$string['type_filter'] = 'Textfilter';
$string['type_filter_plural'] = 'Textfilter';
$string['type_format'] = 'Kursformat';
$string['type_format_plural'] = 'Kursformat';
$string['type_gradeexport'] = 'Metod för betygsexport';
$string['type_gradeexport_plural'] = 'Metoder för betygsexport';
$string['type_gradeimport'] = 'Metod för betygsimport';
$string['type_gradeimport_plural'] = 'Metoder för betygsimport';
$string['type_gradereport'] = 'Betygsboksrapport';
$string['type_gradereport_plural'] = 'Betygsboksrapporter';
$string['type_gradingform'] = 'Avancerad betygssättningsmetod';
$string['type_gradingform_plural'] = 'Avancerade betygssättningsmetoder';
$string['type_h5plib'] = 'H5P-ramverk';
$string['type_h5plib_plural'] = 'H5P-ramverk';
$string['type_local'] = 'Lokal plugin';
$string['type_local_plural'] = 'Lokala pluginmoduler';
$string['type_media'] = 'Mediaspelare';
$string['type_media_plural'] = 'Mediaspelare';
$string['type_message'] = 'Notifieringsplugin';
$string['type_message_plural'] = 'Notis-pluginmoduler';
$string['type_mlbackend'] = 'Maskininlärnings backend';
$string['type_mlbackend_plural'] = 'Maskininlärnings backends';
$string['type_mnetservice'] = 'MNET tjänst';
$string['type_mnetservice_plural'] = 'MNET tjänster';
$string['type_mod'] = 'Aktivitetsmodul';
$string['type_mod_plural'] = 'Aktivitetsmoduler';
$string['type_paygw'] = 'Betaltjänst';
$string['type_paygw_plural'] = 'Betaltjänster';
$string['type_paygwmanage'] = 'Hantera betaltjänster';
$string['type_plagiarism'] = 'Pluginmodul för plagiatkontroll';
$string['type_plagiarism_plural'] = 'Pluginmoduler för plagiatkontroll';
$string['type_portfolio'] = 'Portfölj';
$string['type_portfolio_plural'] = 'Portföljer';
$string['type_profilefield'] = 'Profilfälttyp';
$string['type_profilefield_plural'] = 'Profilfälttyper';
$string['type_qbank'] = 'Pluginmodul för frågebank';
$string['type_qbank_plural'] = 'Pluginmoduler för frågebanker';
$string['type_qbehaviour'] = 'Frågebeteende';
$string['type_qbehaviour_plural'] = 'Frågebeteenden';
$string['type_qformat'] = 'Frågeimport/-export format';
$string['type_qformat_plural'] = 'Frågeimport/-export format';
$string['type_qtype'] = 'Frågetyp';
$string['type_qtype_plural'] = 'Frågetyper';
$string['type_report'] = 'Webbplatsrapport';
$string['type_report_plural'] = 'Rapporter';
$string['type_repository'] = 'Lagringstjänst';
$string['type_repository_plural'] = 'Lagringstjänster';
$string['type_search'] = 'Sökmotor';
$string['type_search_plural'] = 'Sökmotorer';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Teman';
$string['type_tool'] = 'Administrationsverktyg';
$string['type_tool_plural'] = 'Administrationsverktyg';
$string['type_webservice'] = 'Webbtjänst-protokoll';
$string['type_webservice_plural'] = 'Webbtjänstprotokoll';
$string['uninstall'] = 'Avinstallera';
$string['uninstallconfirm'] = 'Du är på väg att avinstallera pluginmodulen <em>{$a->name}</em>. Detta kommer att resultera i att all information i databasen, inklusive pluginmodulens inställningar och loggposter samt eventuella användarfiler som hanteras av pluginmodulen tas bort. Detta går inte att ångra och Moodle kommer inte att skapa en återställningsbackup. Är du SÄKER PÅ att du vill fortsätta?';
$string['uninstalldelete'] = 'All data associerad med pluginmodulen <em>{$a->name}</em> har tagits bort från databasen. För att förhindra att den installeras på nytt måste foldern <em>{$a->rootdir}</em> tas bort manuellt. Folderns skrivinställningar gör att Moodle inte själv kan ta bort foldern.';
$string['uninstalldeleteconfirm'] = 'All data associerad med pluginmodulen <em>{$a->name}</em> har tagits bort från databasen. För att förhindra att den installeras på nytt måste foldern <em>{$a->rootdir}</em> tas bort. Vill du ta bort foldern nu?';
$string['uninstalldeleteconfirmexternal'] = 'Det verkar som om den aktuella versionen av pluginmodulen har erhållits via en utcheckning från ett källkodshanteringssystem ({$a}). Om du tar bort plugin-katalogen kan du förlora viktiga lokala ändringar i koden. Se till att du definitivt vill ta bort plugin-katalogen innan du fortsätter.';
$string['uninstallextraconfirmblock'] = 'Det finns {$a->instances} instanser av detta block.';
$string['uninstallextraconfirmenrol'] = 'Det finns {$a->enrolments} användarregistreringar.';
$string['uninstallextraconfirmmod'] = 'Det finns {$a->instances} instanser i {$a->courses} kurser av denna modul.';
$string['uninstalling'] = 'Avinstallerar {$a->name}';
$string['updateavailable'] = 'Ny version: {$a}';
$string['updateavailable_moreinfo'] = 'Mer info...';
$string['updateavailable_release'] = 'Version {$a}';
$string['updatepluginconfirm'] = 'Bekräfta uppdatering';
$string['updatepluginconfirmexternal'] = 'Det verkar som om den aktuella versionen av plugin-programmet har erhållits via en utcheckning från ett källkodshanteringssystem ({$a}). Om du installerar denna uppdatering kommer du inte längre kunna erhålla uppdateringar från källkodshanteringssystemet. Vänligen bekräfta att du verkligen vill uppdatera pluginmodulen innan du fortsätter.';
$string['updatepluginconfirminfo'] = 'Du är på väg att installera en ny version av plugin-<strong>{$a->name}</strong>. Ett zip-paket med version {$a->version} av plugin-programmet hämtas från <a href="{$a->url}">{$a->url}</a> och extraheras till moodle-installationen så att den kan uppgradera installationen.';
$string['updatepluginconfirmwarning'] = 'Observera att Moodle inte automatiskt kommer att göra en säkerhetskopia av databasen före uppgraderingen. Vi rekommenderar starkt att du gör en fullständig säkerhetskopiering av databasen nu, för att hantera det sällsynta fall att den nya koden har buggar som gör din webbplats otillgänglig eller till och med skadar din databas. Fortsätt på egen risk.';
$string['validationmsg_componentmatch'] = 'Fullständigt komponentnamn';
$string['validationmsg_componentmismatchname'] = 'Pluginnamnet stämmer inte överens';
$string['validationmsg_componentmismatchname_help'] = 'Vissa ZIP-paket, till exempel de som genereras av Github, kan innehålla ett felaktigt rotkatalognamn. Du måste fixa namnet på rotkatalogen för att matcha det deklarerade plugin-namnet.';
$string['validationmsg_componentmismatchname_info'] = 'Plugin-programmet deklarerar att namnet är \'{$a}\', men det matchar inte namnet på rotkatalogen.';
$string['validationmsg_componentmismatchtype'] = 'Plugin-typ matchar inte';
$string['validationmsg_componentmismatchtype_info'] = 'Förväntad typ, \'{$a->expected}\', men pluginmodulen deklarerar sin typ som \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Hittade inte den extraherade filen';
$string['validationmsg_filesnumber'] = 'Hittade inte tillräckligt många filer i paketet';
$string['validationmsg_filestatus'] = 'Kan inte extrahera alla nödvändiga filer';
$string['validationmsg_filestatus_info'] = 'Försök att extrahera filen {$a->file} resulterade i felet \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Hittade språkfil';
$string['validationmsg_maturity'] = 'Deklarerad mognadsnivå';
$string['validationmsg_maturity_help'] = 'Pluginmodulen kan deklarera sin mognadsnivå. Om utvecklaren anser att pluginmodulen är stabil kommer den deklarerade mognadsnivån att vara <kbd>MATURITY_STABLE</kbd>. Alla andra mognadsnivåer (t.ex. <kbd>MATURITY_ALFA</kbd> eller <kbd>MATURITY_BETA</kbd>) betraktas som instabila och en varning visas.';
$string['validationmsg_missingcomponent'] = 'Pluginmodulen deklarerar inte sitt komponentnamn';
$string['validationmsg_missingcomponent_help'] = 'Alla pluginmoduler måste ange sitt fullständiga komponentnamn via parametern <code>$plugin->component</code> i filen version.php.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Filnamnet på engelska språkfilen matchar inte';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Den angivna plugin-typen saknar den förväntade engelska språkfilen {$a}.';
$string['validationmsg_missinglangenfile'] = 'Hittade ingen engelsk språkfil';
$string['validationmsg_missinglangenfolder'] = 'Språkkatalogen för engelska saknas';
$string['validationmsg_missingversion'] = 'Pluginmodulen deklarerar inte sin version';
$string['validationmsg_missingversionphp'] = 'Hittar inte filen version.php';
$string['validationmsg_multiplelangenfiles'] = 'Flera engelska språkfiler hittades';
$string['validationmsg_onedir'] = 'Ogiltig struktur på ZIP-paketet.';
$string['validationmsg_onedir_help'] = 'ZIP-paketet får bara innehålla en rotkatalog som innehåller plugin-koden. Namnet på den rotkatalogen måste matcha namnet på pluginmodulen.';
$string['validationmsg_pathwritable'] = 'Kontrollerar skrivbehörighet';
$string['validationmsg_pluginversion'] = 'Pluginmodulversion';
$string['validationmsg_pluginversiontoolow'] = 'En nyare version av denna plugin är redan installerad';
$string['validationmsg_release'] = 'Pluginversion';
$string['validationmsg_requiresmoodle'] = 'Moodleversion som krävs';
$string['validationmsg_rootdir'] = 'Namn på den pluginmodul som ska installeras';
$string['validationmsg_rootdir_help'] = 'Namnet på rotkatalogen i ZIP-paketet bildar namnet på pluginmodulen som ska installeras. Om namnet inte är korrekt kanske du vill byta namn på rotkatalogen i ZIP-filen innan du installerar pluginmodulen.';
$string['validationmsg_rootdirinvalid'] = 'Ogiltigt pluginnamn';
$string['validationmsg_rootdirinvalid_help'] = 'Namnet på rotkatalogen i ZIP-paketet bryter mot formella syntaxkrav. Vissa ZIP-paket, till exempel de som genereras av Github, kan innehålla ett felaktigt rotkatalognamn. Du måste korrigera namnet på rotkatalogen för att matcha plugin-namnet.';
$string['validationmsg_targetexists'] = 'Målkatalogen finns redan och kommer att tas bort';
$string['validationmsg_targetexists_help'] = 'Plugin-katalogen finns redan och kommer att ersättas av innehållet i plugin-paketet.';
$string['validationmsg_targetnotdir'] = 'Det finns redan en fil i målkatalogen';
$string['validationmsg_unknowntype'] = 'Okänd plugintyp';
$string['validationmsg_versionphpsyntax'] = 'Syntax som inte stöds har identifierats i version.php-filen';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Fel';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Varning';
$string['version'] = 'Version';
$string['versiondb'] = 'Nuvarande version';
$string['versiondisk'] = 'Ny version';
