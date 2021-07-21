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
 * Strings for component 'tool_customlang', language 'sv', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Spara strängar till språkpaket';
$string['checkout'] = 'Öppna språkpaket för redigering';
$string['checkoutdone'] = 'Språkpaket laddat';
$string['checkoutinprogress'] = 'Laddar språkpaket';
$string['cliexportfileexists'] = 'Fil för {$a->lang} finns redan - hoppar över. Om du vill skriva över, lägg till <code>--override=true</code>.';
$string['cliexportfilenotfoundforcomponent'] = 'Filen {$a->filepath} för språk {$a->lang} kunde inte hittas. Hoppar över denna fil.';
$string['cliexportheading'] = 'Påbörjar export av språkfiler.';
$string['cliexportnofilefoundforlang'] = 'Hittade inga filer att exportera. Hoppar över exporten för detta språk.';
$string['cliexportstartexport'] = 'Exporterar språk: {$a}';
$string['cliexportzipdone'] = 'ZIP-fil skapad: {$a}';
$string['cliexportzipfail'] = 'Kan inte skapa ZIP-fil: {$a}';
$string['clifiles'] = 'Filer som ska importeras till {$a}';
$string['cliimporting'] = 'Importera filer-text (läge {$a})';
$string['climissingfiles'] = 'Hittar inga giltiga filer';
$string['climissinglang'] = 'Språk saknas';
$string['climissingmode'] = 'Saknad eller ogiltig inställning (giltiga värden är alla, ny, uppdatera)';
$string['climissingsource'] = 'Fil eller folder saknas';
$string['clinolog'] = 'Det finns inget att importera till {$a}';
$string['confirmcheckin'] = 'Du står i begrepp att spara modifieringar för ditt lokala språkpaket. Detta kommer att exportera de anpassade strängarna från översättningsverktyget till din Moodle datakatalog och Moodle kommer att börja använda de modifierade strängarna.<br /><br />Klicka på \'Fortsätt\' för att gå vidare med att spara.';
$string['customlang:edit'] = 'Redigera lokal översättning';
$string['customlang:export'] = 'Exportera lokal översättning';
$string['customlang:view'] = 'Visa lokal översättning';
$string['export'] = 'Exportera anpassade strängar';
$string['exportfilter'] = 'Välj komponent(er) att exportera';
$string['filter'] = 'Filtrera strängar';
$string['filtercomponent'] = 'Visa strängar för dessa komponenter';
$string['filtercustomized'] = 'Endast anpassade';
$string['filtermodified'] = 'Endast de som ändrats i denna session';
$string['filteronlyhelps'] = 'Endast hjälp';
$string['filtershowstrings'] = 'Visa strängar';
$string['filterstringid'] = 'Strängidentifierare';
$string['filtersubstring'] = 'Enbart strängar som innehåller';
$string['headingcomponent'] = 'Komponent';
$string['headinglocal'] = 'Lokal anpassning';
$string['headingstandard'] = 'Standardtext';
$string['headingstringid'] = 'Sträng';
$string['import'] = 'Importera anpassade strängar';
$string['import_all'] = 'Skapa eller uppdatera alla strängar från komponenterna.';
$string['import_mode'] = 'Importläge';
$string['import_new'] = 'Skapa enbart strängar som inte anpassats lokalt';
$string['import_update'] = 'Uppdatera endast strängar som anpassats lokalt';
$string['importfile'] = 'Importera fil';
$string['langpack'] = 'Språkkomponent(er)';
$string['markinguptodate'] = 'Markerar anpassningen som aktuell';
$string['markinguptodate_help'] = 'Den anpassade översättningen kan komma att bli föråldrad om antingen den engelska orginalet eller huvudöversättningen har modifierats sedan strängen anpassades på din webbplats. Se över den anpassade översättningen. Om du finner att den är aktuell, klicka i kryssrutan. Annars redigera den.';
$string['markuptodate'] = 'markera som aktuell';
$string['modifiedno'] = 'Det finns inga modifierade strängar att spara.';
$string['modifiednum'] = 'Det finns {$a} modifierade strängar. Vill du spara dessa ändringar till ditt lokala språkpaket?';
$string['nolocallang'] = 'Inga lokala strängar hittades.';
$string['nostringsfound'] = 'Inga strängar hittades, ändra filterinställningarna';
$string['notice_ignorenew'] = 'Ignorerar strängen {$a->component}/{$a->stringid} eftersom den inte är anpassad.';
$string['notice_ignoreupdate'] = 'Ignorerar strängen {$a->component}/{$a->stringid} eftersom den redan definierats.';
$string['notice_inexitentstring'] = 'Strängen {$a->component}/{$a->stringid} kunde inte hittas.';
$string['notice_missingcomponent'] = 'Saknar {$a}-komponenten.';
$string['notice_success'] = 'Strängen {$a->component}/{$a->stringid} uppdaterades.';
$string['placeholder'] = 'Platshållare';
$string['placeholder_help'] = 'Platshållare är speciella uttryck som `{$a}` eller `{$a->something}` i strängen. De ersätts med ett värde när strängen skrivs ut på skärmen. Det är viktigt att kopiera dem exakt som de är i den ursprungliga strängen. Översätt inte dessa eller ändra deras vänster till-höger orientering.';
$string['placeholderwarning'] = 'strängen innehåller en platshållare';
$string['pluginname'] = 'Språkanpassning';
$string['privacy:metadata'] = 'Pluginmodulen för språkanpassningar lagrar ingen personinformation.';
$string['savecheckin'] = 'Spara ändringar till språkpaketet';
$string['savecontinue'] = 'Använd ändringarna och fortsätt redigering';
