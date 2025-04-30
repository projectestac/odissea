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
 * Strings for component 'tool_uploaduser', language 'sv', version '4.4'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Tillåt borttagningar';
$string['allowrenames'] = 'Tillåt namnbyten';
$string['allowsuspends'] = 'Tillåt avstängning och aktivering av konton';
$string['assignedsysrole'] = 'Tilldelad systemroll {$a}';
$string['clidefault'] = 'Standard:';
$string['clierrorargument'] = 'Värdet för argumentet ––{$a->name} är ogiltigt.
Tillåtna värden: {$a->values}';
$string['clifile'] = 'Sökväg till CSV-fil med användardata. Obligatorisk.';
$string['clifilenotreadable'] = 'Filen {$a} finns inte eller går inte att läsa.';
$string['clihelp'] = 'Skriv ut denna hjälp.';
$string['climissingargument'] = 'Argumentet --{$a} är obligatoriskt.';
$string['clititle'] = 'Kommandoradsverktyg för användaruppladdning.';
$string['clivalidationerror'] = 'Valideringsfel;';
$string['csvdelimiter'] = 'CSV-avgränsare';
$string['defaultvalues'] = 'Förinställda standardvärden';
$string['deleteerrors'] = 'Ta bort fel';
$string['duplicateemail'] = 'Hittade flera användare med e-postadressen {$a}';
$string['encoding'] = 'Inkodning';
$string['errormnetadd'] = 'Kan inte lägga till externa användare';
$string['errorprefix'] = 'Fel:';
$string['errors'] = 'Fel';
$string['examplecsv'] = 'Exempeltextfil';
$string['examplecsv_help'] = 'Om du vill använda exempeltextfilen laddar du ner den och öppnar den sedan med en text- eller kalkylbladsredigerare. Lämna den första raden oförändrad. Redigera sedan efterföljande rader (poster) och lägg till dina användardata. Lägg till flera rader efter behov. Spara filen som CSV och ladda sedan upp den.

Exempeltextfilen kan också användas för testning eftersom du har möjlighet att förhandsgranska användardata och kan välja att avbryta åtgärden innan användarkonton skapas.';
$string['infoprefix'] = 'Info:';
$string['invalidtheme'] = '"{$a}"-temat är inte installerat och kommer att ignoreras.';
$string['invalidupdatetype'] = 'Detta alternativ kan inte väljas för den valda uppladdningstypen.';
$string['invaliduserdata'] = 'Ogiltig data hittades för användare {$a} och den har rensats bort.';
$string['linex'] = 'Rad {$a}';
$string['matchemail'] = 'Matcha på e-postadress';
$string['nochanges'] = 'Inga ändringar';
$string['notheme'] = 'Inget tema för denna användare.';
$string['pluginname'] = 'Användaruppladdning';
$string['privacy:metadata'] = 'Pluginmodulen Användaruppladdning lagrar ingen personlig information.';
$string['renameerrors'] = 'Fel vid namnbyte';
$string['requiredtemplate'] = 'Obligatoriskt. Du kan använda syntax för mall här  (%l = lastname, %f = firstname, %u = username).Se hjälpen för detaljer och exempel.';
$string['rowpreviewnum'] = 'Förhandsgranska rader';
$string['unassignedsysrole'] = 'Otilldelad systemroll {$a}';
$string['uploadpicture_baduserfield'] = 'Det attribut för användare som har angivits är inte giltigt. Vänligen försök igen.';
$string['uploadpicture_cannotmovezip'] = 'Det går inte att flytta zip-filen till en temporär katalog.';
$string['uploadpicture_cannotprocessdir'] = 'Det går inte att behandla de icke-hoppackade filerna';
$string['uploadpicture_cannotsave'] = 'Det går inte att spara bilden för användare {$a}. Kontrollera originalbilden.';
$string['uploadpicture_cannotunzip'] = 'Det går inte att packa upp filen med bilder.';
$string['uploadpicture_invalidfilename'] = 'Bildfilen {$a} s namn innehåller ogiltiga tecken. Hoppar över.';
$string['uploadpicture_overwrite'] = 'Vill du skriva över de befintliga användarbilderna?';
$string['uploadpicture_userfield'] = 'Attribut för användare som kan användas för att matcha bilder:';
$string['uploadpicture_usernotfound'] = 'Det finns ingen användare med ett \'{$a->userfield}\' värde av \'{$a->uservalue}\'. Hoppar över.';
$string['uploadpicture_userskipped'] = 'Hoppar över användare {$a} (det finns redan en bild).';
$string['uploadpicture_userupdated'] = 'Bilden för användare {$a} har uppdaterats.';
$string['uploadpictures'] = 'Ladda upp användarbilder';
$string['uploadpictures_help'] = '<p>Det går att ladda upp användarbilder som zippade bildfiler. Man bör ge bildfilerna ett namn <i>chosen-user-attribute.extension</i>. Om t.ex. det valda användarattribut som används för att matcha  bilder är användarnamn och detta namn är pelle1234, då bör filnamnet på bilden vara pelle1234.jpg.</p>
<p>De bildformat som  stödjs är gif, jpg, och png.</p>
<p>Namn på bildfiler är inte skiftlägeskänsliga.</p>';
$string['uploaduser:uploaduserpictures'] = 'Ladda upp användarbilder';
$string['uploadusers'] = 'Ladda upp användare';
$string['uploadusers_help'] = 'Användare kan laddas upp (och eventuellt registreras i kurser) via en textfil. Filen ska formateras enligt följande:

* Varje rad i filen innehåller en post
* Varje post är en serie data åtskilda av kommatecken (eller andra avgränsare)
* Den första posten innehåller en lista med fältnamn som definierar formatet för resten av filen
* Obligatoriska fältnamn är: <code>username, password, firstname, lastname, email</code>';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Förhandsgranska uppladdning av användare';
$string['uploadusersresult'] = 'Resultat av uppladdning av användare';
$string['useraccountupdated'] = 'Användare har uppdaterats';
$string['useraccountuptodate'] = 'Användare uppdaterad';
$string['userdeleted'] = 'Användare borttagen';
$string['userrenamed'] = 'Användare  har fått nya namn';
$string['userscreated'] = 'Användare har skapats';
$string['usersdeleted'] = 'Användare borttagna';
$string['usersrenamed'] = 'Användare  har fått nya namn';
$string['usersskipped'] = 'Användare hoppades över';
$string['usersupdated'] = 'Användare har uppdaterats';
$string['usersweakpassword'] = 'Användare som har ett svagt lösenord';
$string['userthemesnotallowed'] = 'Användarteman är inte aktiverade. Eventuella teman i uppladdningsfilerna kommer att ignoreras.';
$string['uubulk'] = 'Välj för åtgärd för flera användare';
$string['uubulkall'] = 'Alla användare';
$string['uubulknew'] = 'Nya användare';
$string['uubulkupdated'] = 'Uppdaterade användare';
$string['uucsvline'] = 'CSV-rad';
$string['uulegacy1role'] = '(Original Student) typeN=1';
$string['uulegacy2role'] = '(Original lärare) typeN=2';
$string['uulegacy3role'] = '(Original icke-redigrerande lärare) typeN=3';
$string['uunoemailduplicates'] = 'Förhindra att den skapas dubletter av e-postadresser';
$string['uuoptype'] = 'Typ av uppladdning';
$string['uuoptype_addinc'] = 'Lägg till alla, koppla till en räknare till användarnamn om det behövs.';
$string['uuoptype_addnew'] = 'Lägg endast till en ny, hoppa över befintliga användare';
$string['uuoptype_addupdate'] = 'Lägg till nya och uppdatera befintliga användare';
$string['uuoptype_update'] = 'Uppdatera endast befintliga användare';
$string['uupasswordcron'] = 'Genererad i cron';
$string['uupasswordnew'] = 'Nytt lösenord för användare';
$string['uupasswordold'] = 'Befintligt lösenord för användare';
$string['uustandardusernames'] = 'Standardisera användarnamn';
$string['uuupdateall'] = 'Överskrid med fil och standardmässiga förval';
$string['uuupdatefromfile'] = 'Överskrid med fil';
$string['uuupdatemissing'] = 'Fyll i det som saknas från fil och standardmässiga förval';
$string['uuupdatetype'] = 'Befintliga detaljer för användare';
$string['uuusernametemplate'] = 'Användarnamnsmall';
$string['warningprefix'] = 'Varning:';
