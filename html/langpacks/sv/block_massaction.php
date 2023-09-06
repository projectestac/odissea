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
 * Strings for component 'block_massaction', language 'sv', version '4.1'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'Skicka notifikation om ändrat innehåll';
$string['action_delete'] = 'Radera';
$string['action_duplicate'] = 'Kopiera';
$string['action_duplicatetocourse'] = 'Kopiera till en annan kurs';
$string['action_duplicatetosection'] = 'Kopiera till sektion';
$string['action_hide'] = 'Dölj';
$string['action_makeavailable'] = 'Gör tillgänglig';
$string['action_moveleft'] = 'Dra ut (flytta vänster)';
$string['action_moveright'] = 'Indrag (flytta höger)';
$string['action_movetosection'] = 'Flytta till sektion';
$string['action_show'] = 'Visa';
$string['actionexecuted'] = 'Din begäran har utförts';
$string['applicablecourseformats'] = 'Tillämpbara kursformat';
$string['applicablecourseformats_description'] = 'Masshandlingar-blocket kommer endast att vara tillgängligt för de valda kursformaten. <br />Förvalda standardinställningar är de som testas och stöds av plugin-underhållaren. Lägg till andra format på egen risk.';
$string['backgroundtaskinformation'] = 'Din begäran utförs i bakgrunden. Du kan fortsätta arbeta så länge,';
$string['blockname'] = 'Masshandlingar';
$string['blocktitle'] = 'Masshandlingar';
$string['choosecoursetoduplicateto'] = 'Välj den kurs du vill kopiera de valda objekten till';
$string['choosesectiontoduplicateto'] = 'Välj vilken sektion du vill kopiera de valda objekten till';
$string['choosetargetcourse'] = 'Välj kurs att kopiera till';
$string['choosetargetsection'] = 'Välj sektion att kopiera till';
$string['confirmcourseselect'] = 'Välj kurs';
$string['confirmsectionselect'] = 'Välj sektion';
$string['deletecheck'] = 'Bekräfta radering';
$string['deletecheckconfirm'] = 'Är du säker på att du vill radera följande objekt?';
$string['deselectall'] = 'Avmarkera alla';
$string['duplicatemaxactivities'] = 'Max antal objekt att kopiera';
$string['duplicatemaxactivities_description'] = 'Max antal objekt som kan kopiera samtidigt utan att det görs som en bakgrundshandling. Om satt till "0" blir alla kopieringar bakgrundshandlingar.';
$string['invalidaction'] = 'Okänd handling:  {$a}';
$string['invalidcourseid'] = 'Ogiltigt kurs-id';
$string['invalidcoursemodule'] = 'Ogiltig aktivitet / resurs.';
$string['invalidmoduleid'] = 'Ogiltigt objekt-id: {$a}';
$string['jsonerror'] = 'Felkodning: Ogiltigt JSON-format';
$string['keepsectionnum'] = 'Behåll nuvarande sektionsnummer';
$string['massaction:addinstance'] = 'Lägg till blocket Masshandlingar';
$string['massaction:sendcontentchangednotifications'] = 'Skicka notifikationer om ändrat innehåll';
$string['massaction:use'] = 'Använd blocket Masshandlingar';
$string['modulename'] = 'Aktivitetsnamn';
$string['moduletype'] = 'Aktivitetstyp';
$string['multipleinstances'] = 'Det får INTE vara flera instanser av blocket för Masshandlingar på samma sida!';
$string['newsection'] = 'Ny sektion';
$string['noaction'] = 'Ingen handling vald';
$string['noactionsavailable'] = 'Du har inte behörighet att utföra något av alternativen blocket erbjuder.';
$string['nocaptobackup'] = 'Du har inte behörighet att göra backup i kursen.';
$string['nocaptorestore'] = 'Du har inte behörighet att återställa i kursen.';
$string['noitemselected'] = 'Välj minst ett objekt';
$string['nomovingtargetselected'] = 'Välj en målsektion';
$string['notargetcourseidspecified'] = 'Ingen kurs att kopiera till har angivits';
$string['pluginname'] = 'Masshandlingar';
$string['sectionnotexist'] = 'Målsektionen existerar inte';
$string['sectionselect'] = 'Val av sektion';
$string['sectionselect_help'] = 'Du kan bara välja sektioner som innehåller minst en kursmodul. Dessutom, när du använder kursformatet Tiles eller Ett enda ämne kan du bara välja sektioner som för närvarande är synliga.';
$string['selectall'] = 'Välj allt på sidan';
$string['selectallinsection'] = 'Välj allt i sektion';
$string['sourcecourseidlost'] = 'Källkurs-id kunde inte hittas';
$string['unusable'] = 'Masshandlingsfunktionen kan inte användas i detta kursformat eller med det aktuella temat';
$string['usage'] = 'Användning av blocket Masshandlingar';
$string['usage_help'] = '<p>Det här blocket tillåter lärare att utföra åtgärder på flera resurser eller aktiviteter i kursen, istället för att behöva utföra upprepade åtgärder på enskilda objekt.</p> <p>För att använda detta block måste Javascript vara aktiverat i din webbläsare och du måste vara i redigeringsläge på kurshemsidan. Kursformat som stöds är Veckoformat, Ämnesformat, Ihopfällbara sektionerl, Ett enda ämne och Tiles.</p> <p>Åtgärder som stöds inkluderar radering, in-/utskjutning, gömma/visa och flytta. För att välja objekt att utföra åtgärder på klickar du helt enkelt på kryssrutan till vänster om den på kurshemsidan, eller så kan du välja alla objekt eller välja alla objekt i en sektion med hjälp av blocket. För att utföra åtgärder, klicka på den åtgärd du vill utföra i blocket.</p>';
$string['withselected'] = 'Med valda';
