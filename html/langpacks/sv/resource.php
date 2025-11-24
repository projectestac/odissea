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
 * Strings for component 'resource', language 'sv', version '4.5'.
 *
 * @package     resource
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Klicka på länken {$a} för att ladda ner filen.';
$string['clicktoopen2'] = 'Klicka på länken {$a} för att visa filen.';
$string['configdisplayoptions'] = 'Välj alla alternativ som ska vara tillgängliga, de befintliga inställningarna påverkas inte. Håll nere CTRL-tangenten för att välja flera fält. ';
$string['configframesize'] = 'När en webbsida eller en uppladdad fil visas i en ram är det här värdet höjden (i bildpunkter) i den övre ramen (som innehåller navigeringen).';
$string['configparametersettings'] = 'Det här ställer in standardvärdet för rutan för inställningar av parametrar i formuläret när Du vill lägga till nya resurser. Efter det att Du har gjort detta en första gång så blir detta en individuell inställning för varje användare.';
$string['configpopup'] = 'När Du lägger till en ny resurs som går att visa i ett \'popup\'-fönster, vill Du då att detta alternativ ska vara det förinställda standardvalet?';
$string['configpopupdirectories'] = 'Ska \'popup\'-fönster som förinställt standardval visa kataloglänkar?';
$string['configpopupheight'] = 'Vilken höjd ska vara det förinställda standardvalet på hödjen för nya \'popup\'-fönster?';
$string['configpopuplocation'] = 'Ska det förinställda standardvalet vara att nya \'popup\'-fönster visar \'location\'-raden?';
$string['configpopupmenubar'] = 'Ska det förinställda standardvalet vara att nya \'popup\'-fönster visar menyraden?';
$string['configpopupresizable'] = 'Ska det förinställda standardvalet vara att man kan ändra storleken på nya \'popup\'-fönster';
$string['configpopupscrollbars'] = 'Ska det förinställda standardvalet vara att man kan \'skrolla\' nya \'popup\'-fönster';
$string['configpopupstatus'] = 'Ska det förinställda standardvalet vara att nya \'popup\'-fönster visar statusraden?';
$string['configpopuptoolbar'] = 'Ska det förinställda standardvalet vara att nya \'popup\'-fönster  visar verktygsraden?';
$string['configpopupwidth'] = 'Vilket ska det förinställda standardvalet för bredden på nya \'popup\'-fönster vara?';
$string['contentheader'] = 'Innehåll';
$string['displayoptions'] = 'Alternativ som är tillgängliga för visning';
$string['displayselect'] = 'Visningsläge';
$string['displayselect_help'] = 'Denna inställning bestämmer tillsammans med typen av fil hur filen ska öppnas och visas.

* Automatisk – systemet och din webbläsare väljer själva hur filen ska visas. Exempelvis kan PDF-filer visas med verktyg för bl.a. utskrift direkt på moodlesidan. (Rekommenderas!)
* Bädda in – filen visas inbäddad på moodlesidan
* Tvingad nedladdning – användaren måste spara filen på sin dator och öppna den därifrån
* Öppna – filen visas direkt, vilket kan innebära att användaren måste backa i webbläsaren för att komma tillbaka till Moodle.
* Öppna i popupfönster – filen visas i ett popupfönster vars egenskaper kan ställas in.
* I ram – filen visas i en inbäddad ram på moodlesidan
* Nytt fönster – filen visas i webbläsaren i ett nytt fönster';
$string['displayselect_link'] = 'mod/file/mod';
$string['displayselectexplain'] = 'Välj visningsläge. Dessvärre passar inte alla lägen för alla filer.';
$string['dnduploadresource'] = 'Skapa filresurs';
$string['encryptedcode'] = 'Krypterad kod';
$string['filenotfound'] = 'Det gick tyvärr inte att hitta filen.';
$string['filterfiles'] = 'Filtrera filinnehåll';
$string['filterfilesexplain'] = 'Välj typ av filinnehållsfiltrering. Observera att detta kan orsaka problem för vissa Flash- och Java-appletar. Säkerställ att alla textfiler är UTF-8 kodade.';
$string['filtername'] = 'Automatisk länkning av namn på resurs';
$string['forcedownload'] = 'Framtvinga nedladdning';
$string['framesize'] = 'Höjd på ram';
$string['indicator:cognitivedepth'] = 'Fil kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en Filresurs.';
$string['indicator:cognitivedepthdef'] = 'Fil kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av Fil-resurserna under detta analysintervall (Nivåer = Ingen visning, Visa)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Fil social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en Filresurs.';
$string['indicator:socialbreadthdef'] = 'Fil social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Filresurserna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['legacyfiles'] = 'Migrering av gammal kursfil';
$string['legacyfilesactive'] = 'Aktiv';
$string['legacyfilesdone'] = 'Avslutad';
$string['modifieddate'] = 'Ändrad {$a}';
$string['modulename'] = 'Fil';
$string['modulename_help'] = 'Modulen <em>Fil</em> gör det möjligt för en lärare att tillhandahålla en fil som kursresurs. Om möjligt visas filen i kursgränssnittet. I annat fall uppmanas eleverna att ladda ner den. Filen kan innehålla stödfiler, till exempel kan en HTML-sida ha inbäddade bilder.

Observera att eleverna måste ha lämplig programvara på sina datorer för att öppna filen.

En fil kan användas

* För att dela presentationer som ges i klassen
* Att inkludera en miniwebbplats som kursresurs
* För att tillhandahålla utkast till filer skapade för olika mjukvaror (som t.ex. Word, Photoshop eller programkod) så att deltagarna kan redigera och skicka in dem för bedömning';
$string['modulename_link'] = 'mod/resource/view';
$string['modulenameplural'] = 'Filer';
$string['notmigrated'] = 'Den här "legacy"-typen av resurs ({$a}) har tyvärr ännu inte migrerats. ';
$string['optionsheader'] = 'Visa alternativ';
$string['page-mod-resource-x'] = 'Valfri filmodul-sida';
$string['pluginadministration'] = 'Administration av modul för filer';
$string['pluginname'] = 'Fil';
$string['popupheight'] = 'Höjd på popup-fönster (i pixlar)';
$string['popupheightexplain'] = 'Anger standardhöjden på popup-fönster.';
$string['popupresource'] = 'Den här resursen bör dyka upp i ett snabbfönster.';
$string['popupresourcelink'] = 'Om den inte gjorde det, klicka här: {$a}';
$string['popupwidth'] = 'Bredd på popup-fönster (i pixlar)';
$string['popupwidthexplain'] = 'Anger standardbredden på popup-fönster.';
$string['printintro'] = 'Visa kursbeskrivning';
$string['printintroexplain'] = 'Vill du visa beskrivningen av resursen under innehållet? En del visningstyper kommer inte att visa beskrivningen även om detta är aktiverat.';
$string['privacy:metadata'] = 'Pluginmodulen Filresurs lagrar ingen personinformation.';
$string['resource:addinstance'] = 'Lägg till en ny resurs';
$string['resource:exportresource'] = 'Exportera resurs';
$string['resource:view'] = 'Visa resurs';
$string['resourcecontent'] = 'Filer och undermappar';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['search:activity'] = 'Fil';
$string['selectmainfile'] = 'Vänligen välj huvudfilen genom att klicka på ikonen bredvid filnamnet.';
$string['showdate'] = 'Visa uppladdnings-/ändringsdatum';
$string['showdate_desc'] = 'Visa uppladdnings-/ändringsdatum på kurssidan?';
$string['showdate_help'] = 'Visar uppladdningsdatumet/det ändrade datumet bredvid länkar till filen.

Om det finns flera filer i den här resursen visas startfilens uppladdnings-/ändringsdatum.';
$string['showsize'] = 'Visa storlek';
$string['showsize_desc'] = 'Visa filstorleken på kurssidan?';
$string['showsize_help'] = 'Visar filstorleken, t.ex. "3.1 MB ", bredvid länkar till filen. Om det finns flera filer i denna resurs, är den totala storleken på alla filer som visas';
$string['showtype'] = 'Visa typ';
$string['showtype_desc'] = 'Visa filtyp (t.ex. "Word" eller "PDF") på kurssidan?';
$string['showtype_help'] = 'Visar filtyp, till exempel "Word" eller "PDF" förutom länkar till filen. Om det finns flera filer i denna resurs är det första filtypen som visas. Om filtypen är okänd för systemet, kommer den inte att visas.';
$string['uploadeddate'] = 'Uppladdad {$a}';
