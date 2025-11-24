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
 * Strings for component 'quizaccess_seb', language 'sv', version '4.5'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Ny mall';
$string['allowedbrowserkeysdistinct'] = 'Nycklarna måste skilja sig åt';
$string['allowedbrowserkeyssyntax'] = 'En nyckel ska vara en 64-teckens hexadecimal sträng.';
$string['cachedef_config'] = 'SWP-konfigurationscache';
$string['cachedef_configkey'] = 'SWP konfigurationsnyckel-cache';
$string['cachedef_quizsettings'] = 'SWP kunskapstestinställnings-cache';
$string['cantdelete'] = 'Mallen kan inte tas bort eftersom den används av ett eller flera kunskapstester.';
$string['cantedit'] = 'Mallen kan inte redigeras eftersom den används av ett eller flera kunskapstester.';
$string['checkingaccess'] = 'Kontrollerar åtkomst till Säker webbläsare för prov...';
$string['clientrequiresseb'] = 'Detta kunskapstest använder Säker Webbläsare för Prov med klientkonfiguration.';
$string['confirmtemplateremovalquestion'] = 'Är du säker på att du vill ta bort denna mall?';
$string['confirmtemplateremovaltitle'] = 'Bekräfta mallborttagning?';
$string['conflictingsettings'] = 'Du har inte behörighet att uppdatera befintliga SWP-inställningar.';
$string['content'] = 'Mall';
$string['description'] = 'Beskrivning';
$string['disabledsettings'] = 'Inaktiverade inställningar';
$string['disabledsettings_help'] = 'Inställningarna för SWP för kunskapstest kan inte ändras om det redan genomförts försök på kunskapstestet. För att ändra inställningarna måste först befintliga försök tas bort.';
$string['downloadsebconfig'] = 'Ladda ned SWP-konfigurationsfil';
$string['duplicatetemplate'] = 'En mall med samma namn finns redan.';
$string['edittemplate'] = 'Redigera mall';
$string['enabled'] = 'Aktiverad';
$string['error:ws:nokeyprovided'] = 'Minst en SWP-nyckel måste anges.';
$string['error:ws:quiznotexists'] = 'Hittade inget kunskapstest för kursmodul med ID: {$a}';
$string['event:accessprevented'] = 'Åtkomst till kunskapstestet förhindrades';
$string['event:templatecreated'] = 'SWP-mall skapades';
$string['event:templatedeleted'] = 'SWP-mall togs bort';
$string['event:templatedisabled'] = 'SWP-mall inaktiverades';
$string['event:templateenabled'] = 'SWP-mall aktiverades';
$string['event:templateupdated'] = 'SWP-mall uppdaterades';
$string['exitsebbutton'] = 'Avsluta Säker Webbläsare för Prov';
$string['filemanager_sebconfigfile'] = 'Ladda upp SWP-konfigurationsfil';
$string['filemanager_sebconfigfile_help'] = 'Vänligen ladda upp din egna SWP-konfigurationsfil för detta kunskapstest.';
$string['filenotpresent'] = 'Vänligen ladda upp SWP-konfigurationsfil.';
$string['fileparsefailed'] = 'Den uppladdade filen kunde inte sparas som en SWP-konfigurationsfil.';
$string['httplinkbutton'] = 'Ladda ned konfiguration';
$string['invalid_browser_key'] = 'Ogiltig SWP-browsernyckel';
$string['invalid_config_key'] = 'Ogiltig SWP-konfigurationsnyckel';
$string['invalidkeys'] = 'Konfigurations- eller webbläsarnycklarna för kunskapstestet kunde inte valideras. Vänligen försäkra dig om att du använder SWP och att konfigurationsfilen är korrekt.';
$string['invalidtemplate'] = 'Ogiltig SWP-konfigurationsmall';
$string['manage_templates'] = 'Mallar för Säker Webbläsare för Prov';
$string['managetemplates'] = 'Hantera mallar';
$string['missingrequiredsettings'] = 'Det saknas nödvändiga värden i konfigurationsinställningarna.';
$string['name'] = 'Namn';
$string['newtemplate'] = 'Ny mall';
$string['noconfigfilefound'] = 'Kunde inte hitta någon uppladdad SWP-konfigurationsfil för kunskapstest med cmid: {$a}';
$string['noconfigfound'] = 'Kunde inte hitta någon SWP-konfiguration för kunskapstest med cmid: {$a}';
$string['not_seb'] = 'Använder inte Säker Webbläsare för Prov.';
$string['notemplate'] = 'Ingen mall';
$string['passwordnotset'] = 'Nuvarande inställningar kräver att kunskapstest som använder Säker Webbläsare för Prov har specificerat ett lösenord.';
$string['pluginname'] = 'Säker Webbläsare för Prov';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'SWP-inställningar för ett kunskapstest. Detta inkluderar Användar-ID:t för den som senast ändrade inställningarna.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Kunskapstest-ID som inställningen gäller för.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix-formaterad tidpunkt då inställningarna skapades.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Unix-formaterad tidpunkt då inställningarna senast ändrades.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Användar-ID för den som senast skapade eller ändrade inställningarna.';
$string['privacy:metadata:quizaccess_seb_template'] = 'SWP-mallinställningar. Detta inkluderar ID:t för den användare som senast skapade eller ändrade mallen.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix-formaterad tid för då mallen skapades.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix-formaterad tid för då mallen senast ändrades.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID för användaren som senast skapade eller ändrade mallen.';
$string['quizsettings'] = 'Inställningar för kunskapstest';
$string['restoredfrom'] = '{$a->name} (återställt via cmid {$a->cmid})';
$string['seb'] = 'Säker Webbläsare för Prov';
$string['seb:bypassseb'] = 'Åsidosätt kravet att kunskapstestet ska använda Säker Webbläsare för Prov.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Ändra SWP-inställningar för kunskapstest: Välj SWP-konfigurationsfil';
$string['seb:manage_seb_activateurlfiltering'] = 'Ändra SWP-inställning för kunskapstest: Aktivera URL-filtrering';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Ändra SWP-inställning för kunskapstest: Tillåtna webbläsarnycklar för test';
$string['seb:manage_seb_allowreloadinexam'] = 'Ändra SWP-inställning för kunskapstest: Tillåt ladda om';
$string['seb:manage_seb_allowspellchecking'] = 'Ändra SWP-inställning för kunskapstest: Aktivera stavningskontroll';
$string['seb:manage_seb_allowuserquitseb'] = 'Ändra SWP-inställning för kunskapstest: Tillåt att avsluta';
$string['seb:manage_seb_enableaudiocontrol'] = 'Ändra SWP-inställning för kunskapstest: Aktivera ljudkontroll';
$string['seb:manage_seb_expressionsallowed'] = 'Ändra SWP-inställning för kunskapstest: Tillåt enkla uttryck';
$string['seb:manage_seb_expressionsblocked'] = 'Ändra SWP-inställning för kunskapstest: Blockera enkla uttryck';
$string['seb:manage_seb_filterembeddedcontent'] = 'Ändra SWP-inställning för kunskapstest: Filtrera inbäddat innehåll';
$string['seb:manage_seb_linkquitseb'] = 'Ändra SWP-inställning för kunskapstest: Snabblänk';
$string['seb:manage_seb_muteonstartup'] = 'Ändra SWP-inställning för kunskapstest: Tyst läge vid uppstart';
$string['seb:manage_seb_quitpassword'] = 'Ändra SWP-inställning för kunskapstest: Lösenord för att avsluta';
$string['seb:manage_seb_regexallowed'] = 'Ändra SWP-inställning för kunskapstest: Tillåt Reguljära uttryck';
$string['seb:manage_seb_regexblocked'] = 'Ändra SWP-inställning för kunskapstest: Blockera Reguljära uttryck';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Ändra SWP-inställningar för kunskapstest: Kräv Säker Webbläsare för Prov';
$string['seb:manage_seb_showkeyboardlayout'] = 'Ändra SWP-inställning för kunskapstest: Visa tangentbordslayout';
$string['seb:manage_seb_showreloadbutton'] = 'Ändra SWP-inställning för kunskapstest: Visa Uppdatera-knappen';
$string['seb:manage_seb_showsebdownloadlink'] = 'Ändra SWP-inställning för kunskapstest: Visa nedladdningslänk';
$string['seb:manage_seb_showsebtaskbar'] = 'Ändra SWP-inställning för kunskapstest: Visa aktivitetsraden';
$string['seb:manage_seb_showtime'] = 'Ändra SWP-inställning för kunskapstest: Visa tid';
$string['seb:manage_seb_showwificontrol'] = 'Ändra SWP-inställning för kunskapstest: Visa WiFi-kontroll';
$string['seb:manage_seb_templateid'] = 'Ändra SWP-inställning för kunskapstest: Välj SWP-mall';
$string['seb:manage_seb_userconfirmquit'] = 'Ändra SWP-inställning för kunskapstest: Bekräfta vid avslut';
$string['seb:managetemplates'] = 'Hantera SWP-konfigurationsmallar';
$string['seb_activateurlfiltering'] = 'Aktivera URL-filtrering';
$string['seb_activateurlfiltering_help'] = 'Om aktiverat kommer URL:er filtreras då sidor laddas. Filtret måste definieras här nedanför.';
$string['seb_allowedbrowserexamkeys'] = 'Tillåtna webbläsarnycklar';
$string['seb_allowedbrowserexamkeys_help'] = 'I det här fältet kan du ange tillåtna webbläsarnycklar för de versioner av <em>Säker Webbläsare för Prov</em> som har åtkomst till detta kunskapstest. Om inga nycklar anges kontrolleras inte webbläsaren.';
$string['seb_allowreloadinexam'] = 'Aktivera siduppdatering';
$string['seb_allowreloadinexam_help'] = 'Om aktiverad tillåts siduppdatering (uppdateringsknapp i SWP-aktivitetsfältet, webbläsarens verktygsfält, iOS-sidoreglagemeny, kortkommando <kbd>F5</kbd>/<kbd>Cmd+R</kbd>). Observera att cachelagring offline kan fallera om en användare försöker ladda om en sida utan internetanslutning.';
$string['seb_allowspellchecking'] = 'Aktivera stavningskontroll';
$string['seb_allowspellchecking_help'] = 'Om aktiverad tillåts stavningskontroll i SWP-webbläsaren.';
$string['seb_allowuserquitseb'] = 'Aktivera avslutande av SWP';
$string['seb_allowuserquitseb_help'] = 'Om aktiverat kan användare avsluta SWP med "Avsluta"-knappen i aktivitetsfältet  SWP eller genom att trycka på tangenterna <kbd>Ctrl+Q</kbd> eller genom att klicka på huvudwebbläsarens stängningsknapp.';
$string['seb_enableaudiocontrol'] = 'Aktivera ljudkontroller';
$string['seb_enableaudiocontrol_help'] = 'Om aktiverat visas ljudkontrollerna i aktivitetsraden i SWP.';
$string['seb_expressionsallowed'] = 'Tillåtna uttryck';
$string['seb_expressionsallowed_help'] = 'Ett textfält som innehåller filtreringsuttrycken för de <em>tillåtna<\\em> webbadresserna. Användning av jokertecken \'\\*\' är möjligt. Exempel på uttryck: \'example.com\' eller \'example.com/stuff/\\*\'. "example.com" matchar "example.com", "www.example.com" och "www.mail.example.com". \'example.com/stuff/\\*\' matchar alla förfrågningar till alla underdomäner till \'example.com\' som har \'stuff\' som första segment i sökvägen.';
$string['seb_expressionsblocked'] = 'Otillåtna uttryck';
$string['seb_expressionsblocked_help'] = 'Ett textfält som innehåller filtreringsuttrycken för de <em>otillåtna<\\em> webbadresserna. Användning av jokertecken \'\\*\' är möjligt. Exempel på uttryck: \'example.com\' eller \'example.com/stuff/\\*\'. "example.com" matchar "example.com", "www.example.com" och "www.mail.example.com". \'example.com/stuff/\\*\' matchar alla förfrågningar till alla underdomäner till \'example.com\' som har \'stuff\' som första segment i sökvägen.';
$string['seb_filterembeddedcontent'] = 'Filtrera även inbäddat innehåll';
$string['seb_filterembeddedcontent_help'] = 'Om aktiverat filtreras även inbäddade resurser med hjälp av filteruppsättningen.';
$string['seb_help'] = 'Konfigurera kunskapstest att använda Säker Webbläsare för Prov (SWP).';
$string['seb_linkquitseb'] = 'Visa SWP-knappen "Avsluta" med denna länk';
$string['seb_linkquitseb_help'] = 'I det här fältet kan du ange länken för att avsluta SWP. Den kommer att användas för "Avsluta SWP"-knappen på sidan som visas efter att kunskapstestet lämnats in. När du klickar på knappen eller länken är det möjligt att avsluta SWP utan att behöva ange ett avsluta-lösenord. Om ingen länk anges visas inte knappen.';
$string['seb_managetemplates'] = 'Hantera SWP-mallar';
$string['seb_muteonstartup'] = 'Tyst läge vid uppstart';
$string['seb_muteonstartup_help'] = 'Om aktiverat är ljudet initialt avstängt då SWP startas.';
$string['seb_quitpassword'] = 'Lösenord för att avsluta';
$string['seb_quitpassword_help'] = 'Detta lösenord efterfrågas när användare försöker avsluta SWP med "Avsluta"-knappen, <kbd>Ctrl+Q</kbd> eller stängningsknappen i huvudwebbläsarefönstret. Om inget lösenord anges visas enbart <em>"Är du säker på att du vill avsluta SWP?"</em>.';
$string['seb_regexallowed'] = 'Tillåtna URL:er (Regex)';
$string['seb_regexallowed_help'] = 'Ett textfält som innehåller filteruttrycken för tillåtna URL:er angivna som ett <a href="https://sv.m.wikipedia.org/wiki/Regulj%C3%A4ra_uttryck" target="_blank">reguljärt uttryck (Regex)</a>';
$string['seb_regexblocked'] = 'Blockerade URL:er (Regex)';
$string['seb_regexblocked_help'] = 'Ett textfält som innehåller filteruttrycken för otillåtna URL:er angivna som ett <a href="https://sv.m.wikipedia.org/wiki/Regulj%C3%A4ra_uttryck" target="_blank">reguljärt uttryck (Regex)</a>';
$string['seb_requiresafeexambrowser'] = 'Kräv Säker Webbläsare för Prov';
$string['seb_requiresafeexambrowser_help'] = 'Om aktiverad kan eleverna bara genomföra kunskapstestet med hjälp av webbläsaren <em>Säker Webbläsare för Prov</em> (SWP).

Möjliga alternativ är:

* Nej
<br/>SWP krävs inte för att genomföra kunskapstestet.
* Ja – Använd en befintlig mall
<br/>En mall för konfigurationen av SWP kan användas. Mallar hanteras i webbplatsadministrationen. De manuella inställningar skriver över inställningarna i mallen.
* Ja – Konfigurera manuellt
<br/>Ingen mall för konfigurationen av SWP kommer att användas. Du kan konfigurera SWP manuellt.
* Ja – Ladda upp egen konfiguration
<br/>Du kan ladda upp en egen SWP-konfigurationsfil. Alla manuella inställningar och användningen av mallar kommer att inaktiveras.
* Ja – Använd SWP-klientkonfiguration
<br/>Ingen konfiguration av SWP gör på Moodle-sidan. Kunskapstestet kan genomföras med valfri SWP-konfiguration.';
$string['seb_showkeyboardlayout'] = 'Visa tangentbordslayout';
$string['seb_showkeyboardlayout_help'] = 'Om aktiverat visas nuvarande tangentbordslayout i aktivitetsfältet i SWP. Det är möjligt att byta till en annan layout om den konfigurerats i operativsystemet.';
$string['seb_showreloadbutton'] = 'Visa \'Uppdatera\'-knappen';
$string['seb_showreloadbutton_help'] = 'Om aktiverat visas uppdateringsknappen i aktivitetsfältet i SWP.';
$string['seb_showsebdownloadlink'] = 'Visa nedladdningsknappen';
$string['seb_showsebdownloadlink_help'] = 'Om aktiverat visas en nedladdningsknapp på startsidan för provet.';
$string['seb_showsebtaskbar'] = 'Visa SWP-verktygsrad';
$string['seb_showsebtaskbar_help'] = 'Om aktiverat visas aktivitetsfältet i nederkanten i SWP-fönstret. Aktivitetsfältet innehåller objekt såsom WiFi-kontroll, uppdateringsknappen, tiden och tangentbordslayout.';
$string['seb_showtime'] = 'Visa tid';
$string['seb_showtime_help'] = 'Om aktiverat visas tiden i aktivitetsraden i SWP.';
$string['seb_showwificontrol'] = 'Visa Wi-Fi kontroll';
$string['seb_showwificontrol_help'] = 'Om aktiverat visas WiFi-kontrollknappen i aktivitetsraden i SWP. Knappen gör det möjligt för användare att ansluta till trådlösa nätverk som de tidigare varit anslutna till.';
$string['seb_templateid'] = 'SWP-konfigurationsmall';
$string['seb_templateid_help'] = 'Inställningarna i den valda mallen används för att konfigurera SWP-webbläsaren när ett kunskapstest genomförs. Du kan skriva över inställningarna i mallen med dina egna.';
$string['seb_use_client'] = 'Ja - använd SWP-klientkonfiguration';
$string['seb_use_manually'] = 'Ja - Konfigurera manuellt';
$string['seb_use_template'] = 'Ja - Använd befintlig mall';
$string['seb_use_upload'] = 'Ja - Ladda upp min egen konfiguration';
$string['seb_userconfirmquit'] = 'Be användare bekräfta avslut';
$string['seb_userconfirmquit_help'] = 'Om aktiverat måste användare bekräfta avslutandet av SWP när en avslutslänk upptäcks.';
$string['sebdownloadbutton'] = 'Ladda ned Säker Webbläsare för Prov';
$string['sebkeysvalidationfailed'] = 'Validering av SWP-nyckel misslyckades';
$string['seblinkbutton'] = 'Starta Säker Webbläsare för Prov';
$string['sebrequired'] = 'Detta kunskapstest kräver att eleverna använder Säker Webbläsare för Prov.';
$string['setting:autoreconfigureseb'] = 'Konfigurera SWP automatiskt';
$string['setting:autoreconfigureseb_desc'] = 'Om aktiverat kommer användare av SWP tvingas till automatisk konfiguration av SWP.';
$string['setting:displayblocksbeforestart'] = 'Visa block innan kunskapstestet påbörjas';
$string['setting:displayblocksbeforestart_desc'] = 'Om aktiverat visas block innan användaren påbörjar kunskapstestet.';
$string['setting:displayblockswhenfinished'] = 'Visa block när kunskapstestet avslutats';
$string['setting:displayblockswhenfinished_desc'] = 'Om aktiverat visas block efter det att användaren avslutat kunskapstestet.';
$string['setting:downloadlink'] = 'Nedladdningslänk för Säker Webbläsare för Prov';
$string['setting:downloadlink_desc'] = 'URL för nedladdning av SWP-klienten.';
$string['setting:quizpasswordrequired'] = 'Lösenord för kunskapstest krävs';
$string['setting:quizpasswordrequired_desc'] = 'Om aktiverat krävs lösenord för kunskapstestet i SWP.';
$string['setting:showhttplink'] = 'Visa http:// länk';
$string['setting:showseblink'] = 'Visa seb:// länk';
$string['setting:showseblinks'] = 'Visa SWP-konfigurationslänkar';
$string['setting:showseblinks_desc'] = 'Om länkar för att få åtkomst till konfigurationsfilen för SWP ska visas när åtkomst till kunskapstestet inte tillåts. Observera att seb:// kanske inte fungerar för alla webbläsare.';
$string['setting:supportedversions'] = '<strong>OBS!</strong> Följande minimiversioner av klientprogramvaran för <em>Säker Webbläsare för Prov</em> krävs för att använda config-nyckelfunktionen:

* macOS - 2.1.5pre2
* Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Eftersom minst ett försök gjorts på kunskapstestet går det inte längre att ändra SWP-inställningarna.';
$string['unknown_reason'] = 'Okänd orsak';
$string['used'] = 'Används';
