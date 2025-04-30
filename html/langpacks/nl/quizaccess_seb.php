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
 * Strings for component 'quizaccess_seb', language 'nl', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Voeg een nieuw sjabloon toe.';
$string['allowedbrowserkeysdistinct'] = 'De sleutels moeten allemaal verschillend zijn.';
$string['allowedbrowserkeyssyntax'] = 'Een sleutel moet bestaan uit een 64-karakter hex string.';
$string['cachedef_config'] = 'SEB configuratie cache';
$string['cachedef_configkey'] = 'SEB cache configuratie sleutel';
$string['cachedef_quizsettings'] = 'SEB cache test instellingen';
$string['cantdelete'] = 'Het sjabloon kan niet verwijderd worden wanneer dit gebruikt worden in één of meerdere testen.';
$string['cantedit'] = 'Het sjabloon kan niet bewerkt worden wanneer dit gebruikt worden in één of meerdere testen.';
$string['checkingaccess'] = 'Toegang tot Safe Exam Browser controleren...';
$string['clientrequiresseb'] = 'Deze test is ingesteld om de Safe Exam Browser met client-configuraties te gebruiken.';
$string['confirmtemplateremovalquestion'] = 'Weet je zeker dat je dit sjabloon wilt verwijderen?';
$string['confirmtemplateremovaltitle'] = 'Bevestig sjabloon verwijdering?';
$string['conflictingsettings'] = 'Je hebt géén toestemming om de instellingen van de Safe Exam Browser te bewerken.';
$string['content'] = 'Sjabloon';
$string['description'] = 'Beschrijving';
$string['disabledsettings'] = 'Instellingen uitschakelen.';
$string['disabledsettings_help'] = 'De Safe Exam Browser testinstellingen kunnen niet bijgewerkt worden, wanneer een of meerdere test pogingen zijn gedaan. Om de instelling aan te passen, moeten alle testpogingen verwijderd worden.';
$string['downloadsebconfig'] = 'Download SEB configuratie bestand';
$string['duplicatetemplate'] = 'Er bestaat al een sjabloon met dezelfde naam.';
$string['edittemplate'] = 'Bewerk sjabloon';
$string['enabled'] = 'Inschakelen';
$string['error:ws:nokeyprovided'] = 'Er moet minimaal één Safe Exam Browser-sleutel worden verstrekt.';
$string['error:ws:quiznotexists'] = 'Test met cursusmodule-ID {$a} niet gevonden.';
$string['event:accessprevented'] = 'Test toegang is verhinderd';
$string['event:templatecreated'] = 'SEB sjabloon is aangemaakt';
$string['event:templatedeleted'] = 'SEB Sjabloon is verwijderd';
$string['event:templatedisabled'] = 'SEB Sjabloon is uitgeschakeld';
$string['event:templateenabled'] = 'SEB Sjabloon is ingeschakeld';
$string['event:templateupdated'] = 'SEB Sjabloon is bijgewerkt';
$string['exitsebbutton'] = 'Sluit Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Upload de Safe Exam Browser configuratie bestand';
$string['filemanager_sebconfigfile_help'] = 'Upload je eigen Safe Exam Browser configuratie bestand voor deze test.';
$string['filenotpresent'] = 'Upload een SEB configuratie bestand.';
$string['fileparsefailed'] = 'Het geüploade bestand kon niet bewaard worden als een SEB configuratie bestand.';
$string['httplinkbutton'] = 'Download instellingen';
$string['invalid_browser_key'] = 'Ongeldige SEB browser sleutel';
$string['invalid_config_key'] = 'Ongeldige SEB configuratie sleutel.';
$string['invalidkeys'] = 'De Safe Exam Browser-sleutels konden niet gevalideerd worden. Controleer of je de Safe Exam Browser gebruikt met het juiste configuratiebestand.';
$string['invalidtemplate'] = 'Ongeldige SEB configuratie sjabloon.';
$string['manage_templates'] = 'Safe Exam Browser sjablonen';
$string['managetemplates'] = 'Beheer sjablonen.';
$string['missingrequiredsettings'] = 'De configuratie-instellingen bevatten niet alle vereiste instellingen.';
$string['name'] = 'Naam';
$string['newtemplate'] = 'Nieuw sjabloon';
$string['noconfigfilefound'] = 'Er kon geen geüploade SEB configuratie bestand gevonden voor de test met cmid: {$a}';
$string['noconfigfound'] = 'Er is geen SEB configuratie voor de test met cmid: {$a}';
$string['not_seb'] = 'Er is wordt geen Safe Exam Browser gebruikt.';
$string['notemplate'] = 'Geen sjabloon';
$string['passwordnotset'] = 'De huidige instellingen vereist dat testen die de Safe Exam Browser gebruiken een test paswoord te hebben.';
$string['pluginname'] = 'Safe Exam Browser toegangsregels';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe Exam Browser instellingen voor een test omvat de ID van de laatste gebruiker die de instellingen heeft gemaakt of aangepast.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID van de test waarvoor de instelilngen bestaan.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'De unix tijd waarop de instellingen aangemaakt zijn.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'De unix tijd waarop de instellingen voor het laatst gewijzigd zijn.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'De ID van de gebruiker die voor het laatste de instelingen aangemaakt of aangepast heeft.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browser sjabloon instellingen. Dit is inclusief de ID van de gebruiker die voor het laatst het sjabloon heeft gemaakt of aangepast.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'De unix tijd waarop het sjabloon is aangemaakt.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'De unix tijd waarop het sjabloon voor het laatst aangepast is.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'De ID van de gebruiker die voor het laatst een sjabloon heeft ontwikkeld of aangepast.';
$string['quizsettings'] = 'Test instellingen';
$string['restoredfrom'] = '{$a->name} (hersteld via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Omzeil de eis om de test in de Safe Exam Browser te bekijken.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Wijzig SEB test instellingen: Selecteer SEB instellingsbestand';
$string['seb:manage_seb_activateurlfiltering'] = 'Wijzig SEB test instellingen: Activeer URL filtering';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Wijzig SEB test instellingen: Sta browser exam toetsen toe';
$string['seb:manage_seb_allowreloadinexam'] = 'Wijzig SEB test instellingen: Sta herladen toe';
$string['seb:manage_seb_allowspellchecking'] = 'Wijzig SEB test instellingen:  Schakelen spellingscontrole in';
$string['seb:manage_seb_allowuserquitseb'] = 'SEB-testinstelling wijzigen: Stoppen toestaan';
$string['seb:manage_seb_enableaudiocontrol'] = 'SEB-testinstelling wijzigen: Schakel audiocontrole in';
$string['seb:manage_seb_expressionsallowed'] = 'SEB-testinstelling wijzigen: eenvoudige uitdrukkingen toegestaan';
$string['seb:manage_seb_expressionsblocked'] = 'SEB-testinstelling wijzigen: eenvoudige uitdrukkingen geblokkeerd';
$string['seb:manage_seb_filterembeddedcontent'] = 'SEB-testinstelling wijzigen: Filter ingesloten inhoud';
$string['seb:manage_seb_linkquitseb'] = 'SEB-testinstelling wijzigen: Sluit link';
$string['seb:manage_seb_muteonstartup'] = 'SEB-testinstelling wijzigen: Dempen bij opstarten';
$string['seb:manage_seb_quitpassword'] = 'SEB-testinstelling wijzigen: Wachtwoord afsluiten';
$string['seb:manage_seb_regexallowed'] = 'SEB-testinstelling wijzigen: Regex-expressies toegestaan';
$string['seb:manage_seb_regexblocked'] = 'SEB-testinstelling wijzigen: Regex-expressies geblokkeerd';
$string['seb:manage_seb_requiresafeexambrowser'] = 'SEB-testinstelling wijzigen: Safe Exam Browser vereisen';
$string['seb:manage_seb_showkeyboardlayout'] = 'SEB-testinstelling wijzigen: toetsenbordindeling weergeven';
$string['seb:manage_seb_showreloadbutton'] = 'SEB testinstelling wijzigen: herlaadknop weergeven';
$string['seb:manage_seb_showsebdownloadlink'] = 'SEB-testinstelling wijzigen: downloadlink weergeven';
$string['seb:manage_seb_showsebtaskbar'] = 'SEB-testinstelling wijzigen: Taakbalk tonen';
$string['seb:manage_seb_showtime'] = 'SEB-testinstelling wijzigen: tijd weergeven';
$string['seb:manage_seb_showwificontrol'] = 'SEB-testinstelling wijzigen: Wi-Fi-besturing weergeven';
$string['seb:manage_seb_templateid'] = 'SEB-testinstelling wijzigen: Selecteer SEB-sjabloon';
$string['seb:manage_seb_userconfirmquit'] = 'SEB-testinstelling wijzigen: bevestigen bij afsluiten';
$string['seb:managetemplates'] = 'Beheer SEB-configuratiesjablonen';
$string['seb_activateurlfiltering'] = 'URL filtering inschakelen';
$string['seb_activateurlfiltering_help'] = 'Wanneer ingeschakeld, zullen de URL gefilterd worden wanneer de webpagina\'s geladen worden. De filterset moet hieronder gedefinieerd worden';
$string['seb_allowedbrowserexamkeys'] = 'Toegestane browser examensleutels';
$string['seb_allowedbrowserexamkeys_help'] = 'In dit veld kun je de toegestane browser examensleutels voor versies van Safe Exam Browser die toegang tot de test krijgen invullen. Als er geen sleutels ingevoegd worden, dan worden de browser examensleutels niet gecontroleerd.';
$string['seb_allowreloadinexam'] = 'Inschakelen opnieuw laden in examen';
$string['seb_allowreloadinexam_help'] = 'Wanneer ingeschakeld is het mogelijk om je pagina opnieuw in te laden (herlaadknop in SEB taakbalk, browser werkbalk, iOS zij slider-menu, toetsenbord sneltoetsen F5/cmd+r). Merk op dat Offline caching misschien niet meer wekt wanneer de gebruiker probeert de pagina opnieuw te laden zonder internet connectie.';
$string['seb_allowspellchecking'] = 'Inschakelen spellingchecker';
$string['seb_allowspellchecking_help'] = 'Wanneer ingeschakeld, is het gebruik van een spellingchecker toegestaan in de SEB browser.';
$string['seb_allowuserquitseb'] = 'Inschakelen stoppen met SEB';
$string['seb_allowuserquitseb_help'] = 'Wanneer ingeschakelen, kunnen gebruikers stoppen met SEB door op de "stop" knop in de SEB taakbalk te klikken of door de CTROL-Q combinatie te gebruiken, of de hoofdbrowser scherm te sluiten.';
$string['seb_enableaudiocontrol'] = 'Schakel audiobediening in';
$string['seb_enableaudiocontrol_help'] = 'Indien ingeschakeld, wordt het audioregelpictogram weergegeven in de SEB-taakbalk.';
$string['seb_expressionsallowed'] = 'Uitdrukkingen toegestaan.';
$string['seb_expressionsallowed_help'] = 'Een tekstveld met de toegestane filteruitdrukkingen voor de toegestane URL\'s. Gebruik van de wildcard char \'\\ *\' is mogelijk. Voorbeelden van uitdrukkingen: \'example.com\' of \'example.com/spullen/\\*\'. \'voorbeeld.com\' komt overeen met \'voorbeeld.com\', \'www.voorbeeld.com\' en \'www.mail.voorbeeld.com\'. \'example.com/spullen/\\*\' komt overeen met alle verzoeken voor een subdomein van \'voorbeeld.com\' met \'spullen\' als het eerste segment van het pad.';
$string['seb_expressionsblocked'] = 'Uitdrukkingen geblokkeerd';
$string['seb_expressionsblocked_help'] = 'Een tekstveld met de filterexpressies voor de geblokkeerde URL\'s. Gebruik van de wildcard char \'\\ *\' is mogelijk. Voorbeelden van uitdrukkingen: \'example.com\' of \'example.com/spullen/\\*\'. \'voorbeeld.com\' komt overeen met \'voorbeeld.com\', \'www.voorbeeld.com\' en \'www.mail.voorbeeld.com\'. \'example.com/spullen/\\*\' komt overeen met alle verzoeken voor een subdomein van \'voorbeeld.com\' met \'spullen\' als het eerste segment van het pad.';
$string['seb_filterembeddedcontent'] = 'Filter ook ingesloten inhoud';
$string['seb_filterembeddedcontent_help'] = 'Indien ingeschakeld, worden ingesloten bronnen ook gefilterd met behulp van de filterset.';
$string['seb_help'] = 'Stel een test in om de Safe Exam Browser te gebruiken.';
$string['seb_linkquitseb'] = 'Toon Exit Safe Exam Browser knop, geconfigureerd met deze Exit link';
$string['seb_linkquitseb_help'] = 'In dit veld kunt u de link invoeren om SEB af te sluiten. Het wordt gebruikt op de knop \'Veilige examenbrowser afsluiten\' op de pagina die verschijnt nadat het examen is ingediend. Wanneer u op de knop of de link klikt waar u deze wilt plaatsen, kunt u SEB afsluiten zonder dat u een afsluitwachtwoord hoeft in te voeren. Als er geen link is ingevoerd, wordt de knop "Veilige examenbrowser afsluiten" niet weergegeven en is er geen link ingesteld om SEB af te sluiten.';
$string['seb_managetemplates'] = 'Beheer Safe Exam Browser-sjablonen';
$string['seb_muteonstartup'] = 'Dempen bij opstarten';
$string['seb_muteonstartup_help'] = 'Indien ingeschakeld, wordt audio aanvankelijk gedempt bij het starten van SEB.';
$string['seb_quitpassword'] = 'Sluit wachtwoord';
$string['seb_quitpassword_help'] = 'Dit wachtwoord wordt gevraagd wanneer gebruikers SEB proberen te verlaten met de knop "Afsluiten", Ctrl-Q of de knop Sluiten in het hoofdbrowservenster. Als er geen stopwachtwoord is ingesteld, vraagt SEB gewoon "Weet je zeker dat je SEB wilt afsluiten?".';
$string['seb_regexallowed'] = 'Regex toegestaan';
$string['seb_regexallowed_help'] = 'Een tekstveld met de filterexpressies voor toegestane URL\'s in een reguliere expressie (Regex) -indeling.';
$string['seb_regexblocked'] = 'Regex geblokkeerd';
$string['seb_regexblocked_help'] = 'Een tekstveld met de filterexpressies voor geblokkeerde URL\'s in een reguliere expressie (Regex) -indeling.';
$string['seb_requiresafeexambrowser'] = 'Vereisen het gebruik van Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Indien ingeschakeld, kunnen leerlingen de test alleen proberen met de Safe Exam Browser.
De beschikbare opties zijn:

* Nee
<br/> Safe Exam Browser is niet vereist om de test te proberen.
* Ja - Gebruik een bestaande sjabloon
<br/> Een sjabloon voor de configuratie van Safe Exam Browser kan worden gebruikt. Sjablonen worden beheerd in het sitebeheer. Je handmatige instellingen overschrijven de instellingen in de sjabloon.
* Ja - handmatig configureren
<br/> Er wordt geen sjabloon gebruikt voor de configuratie van Safe Exam Browser. Je kunt Safe Exam Browser handmatig configureren.
* Ja - Upload mijn eigen configuratie
<br/> Je kunt je eigen Safe Exam Browser-configuratiebestand uploaden. Alle handmatige instellingen en het gebruik van sjablonen worden uitgeschakeld.
* Ja - Gebruik SEB-clientconfiguratie
<br/> Er zijn geen configuraties van Safe Exam Browser aan de Moodle-kant. De test kan worden geprobeerd met elke configuratie van Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Toetsenbordindeling weergeven';
$string['seb_showkeyboardlayout_help'] = 'Indien ingeschakeld, wordt de huidige toetsenbordindeling weergegeven in de SEB-taakbalk. Hiermee kunt u overschakelen naar andere toetsenbordindelingen die zijn ingeschakeld in het besturingssysteem.';
$string['seb_showreloadbutton'] = 'Knop voor opnieuw laden weergeven';
$string['seb_showreloadbutton_help'] = 'Indien ingeschakeld, wordt een herlaadknop weergegeven in de SEB-taakbalk, waardoor de huidige webpagina opnieuw kan worden geladen.';
$string['seb_showsebdownloadlink'] = 'Toon Safe Exam Browser download knop';
$string['seb_showsebdownloadlink_help'] = 'Indien ingeschakeld, wordt een knop voor het downloaden van Safe Exam Browser weergegeven op de startpagina van de test.';
$string['seb_showsebtaskbar'] = 'SEB-taakbalk weergeven';
$string['seb_showsebtaskbar_help'] = 'Indien ingeschakeld, verschijnt er een taakbalk onderaan het SEB-browservenster. De taakbalk is vereist om items weer te geven zoals Wi-Fi-bediening, herlaadknop, tijd en toetsenbordindeling.';
$string['seb_showtime'] = 'Toon tijd';
$string['seb_showtime_help'] = 'Indien ingeschakeld, wordt de huidige tijd weergegeven in de SEB-taakbalk.';
$string['seb_showwificontrol'] = 'Wi-Fi-bediening weergeven';
$string['seb_showwificontrol_help'] = 'Indien ingeschakeld, verschijnt er een Wi-Fi-bedieningsknop in de SEB-taakbalk. Met de knop kunnen gebruikers opnieuw verbinding maken met Wi-Fi-netwerken waarmee eerder verbinding was gemaakt.';
$string['seb_templateid'] = 'Configuratiesjabloon Safe Exam Browser';
$string['seb_templateid_help'] = 'De instellingen in de geselecteerde configuratiesjabloon worden gebruikt voor de configuratie van de Safe Exam Browser tijdens het uitvoeren van de test. U kunt de instellingen in de sjabloon overschrijven met uw handmatige instellingen.';
$string['seb_use_client'] = 'Ja - Gebruik SEB-clientconfiguratie';
$string['seb_use_manually'] = 'Ja - handmatig configureren';
$string['seb_use_template'] = 'Ja - Gebruik een bestaande sjabloon';
$string['seb_use_upload'] = 'Ja - Upload mijn eigen configuratie bestand.';
$string['seb_userconfirmquit'] = 'Vraag de gebruiker om het stoppen te bevestigen';
$string['seb_userconfirmquit_help'] = 'Indien ingeschakeld, moeten gebruikers het afsluiten van SEB bevestigen wanneer een stoplink wordt gedetecteerd.';
$string['sebdownloadbutton'] = 'Download Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Fout bij validatie van SEB-sleutels';
$string['seblinkbutton'] = 'Start Safe Exam Browser';
$string['sebrequired'] = 'Deze test is zo geconfigureerd dat leerlingen deze alleen mogen proberen met de Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Auto-configuratie SEB';
$string['setting:autoreconfigureseb_desc'] = 'Wanneer ingesteld, worden gebruikers die met de Safe Exam Browser naar de test navigeren, worden automatisch gedwongen hun Safe Exam Browser opnieuw in te stellen.';
$string['setting:displayblocksbeforestart'] = 'Toon blokken voor het starten van de test.';
$string['setting:displayblocksbeforestart_desc'] = 'Wanneer ingesteld, worden blokken getoond voordat de gebruiker de test poging heeft afgerond.';
$string['setting:displayblockswhenfinished'] = 'Toon blokken na afronding test.';
$string['setting:displayblockswhenfinished_desc'] = 'Wanneer ingesteld, worden blokken getoond nadat de gebruiker de test poging heeft afgerond.';
$string['setting:downloadlink'] = 'Safe Exam Browser download link';
$string['setting:downloadlink_desc'] = 'URL om de Safe Exam Browser software te downloaden.';
$string['setting:quizpasswordrequired'] = 'Test wachtwoord verplicht';
$string['setting:quizpasswordrequired_desc'] = 'Wanneer ingesteld, moeten alle testen die de Safe Exam Browser gebruiken verplicht een test wachtwoord ingesteld hebben.';
$string['setting:showhttplink'] = 'Toon http:// link';
$string['setting:showseblink'] = 'Toon seb:// link';
$string['setting:showseblinks'] = 'Toon Safe Exam Browser configuratie-links';
$string['setting:showseblinks_desc'] = 'Of er links moeten getoond worden zodat een gebruiker naar het Safe Exam Browser configuratiebestand kan gebracht worden wanneer toegang tot een test wordt verhinderd. Merk op dat seb:// niet in elke browser zal werken.';
$string['setting:supportedversions'] = 'Merk op dat volgende minimale versies van de Safe Exam Browser client vereist zijn om de functie "configuratie-sleutel" te kunnen gebruiken: macOS - 2.1.5pre2, Windows - 3.0, IOS - 2.1.14.';
$string['settingsfrozen'] = 'Omdat er al minstens één test-poging is, kunnen de instellingen voor de Safe Exam Browser niet meer aangepast worden.';
$string['unknown_reason'] = 'Onbekende reden';
$string['used'] = 'In gebruik';
