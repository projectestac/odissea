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
 * Strings for component 'tool_moodlenet', language 'sv', version '4.4'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Lägg till innehåll från MoodleNet';
$string['aria:enterprofile'] = 'Ange ID för din MoodleNet-profil';
$string['aria:footermessage'] = 'Bläddra efter innehåll på MoodleNet';
$string['autoenablenotification'] = '<p>I Moodle 4.0 och framåt aktiveras <a href="https://moodle.net/">MoodleNet-integrering</a> som standard under <em>Avancerade alternativ</em>. Användare med möjlighet att skapa och hantera aktiviteter kan bläddra i MoodleNet via aktivitetsväljaren och importera MoodleNet-resurser till sina kurser.</p><p>Om så önskas kan en alternativ MoodleNet-instans anges i <a href="{$a->settingslink}">MoodleNet-inställningarna</a>.</p>';
$string['autoenablenotification_subject'] = 'Standardinställningarna för MoodleNet har ändrats.';
$string['browsecontentmoodlenet'] = 'Eller bläddra efter innehåll på MoodleNet';
$string['clearsearch'] = 'Rensa sökning';
$string['connectandbrowse'] = 'Anslut till och bläddra i:';
$string['defaultmoodlenet'] = 'MoodleNet URL';
$string['defaultmoodlenet_desc'] = 'URL:en till MoodleNet-instansen som är tillgänglig via aktivitetsväljaren.';
$string['defaultmoodlenetname'] = 'Namn på MoodleNet-instansen';
$string['defaultmoodlenetname_desc'] = 'Namnet på MoodleNet-instansen som är tillgänglig via aktivitetsväljaren.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Aktivera integration mot MoodleNet';
$string['enablemoodlenet_desc'] = 'Om aktiverad kan en användare med möjlighet att skapa och hantera aktiviteter bläddra i MoodleNet via aktivitetsväljaren och importera MoodleNet-resurser till sin kurs. Dessutom kan en användare med möjlighet att återställa säkerhetskopior välja en backup-fil på MoodleNet och återställa den i Moodle.';
$string['errorduringdownload'] = 'Ett fel inträffade då filen \'{$a}\' laddades ned';
$string['footermessage'] = 'Eller bläddra efter innehåll på';
$string['forminfo'] = 'Ditt MoodleNet-profil ID sparas automatiskt i din profil på denna webbplats.';
$string['importconfirm'] = 'Du håller på att importera innehållet "{$a->resourcename} ({$a->resourcetype})" till kursen "{$a->coursename}". Är du säker på att du vill fortsätta?';
$string['importconfirmnocourse'] = 'Du håller på att importera innehållet "{$a->resourcename} ({$a->resourcetype})" till din webbplats. Är du säker på att du vill fortsätta?';
$string['importformatselectguidingtext'] = 'I vilket format skulle du vilja att innehållet "{$a->name} ({$a->type})" läggs till i din kurs?';
$string['importformatselectheader'] = 'Välj visningsformat för innehållet';
$string['inputhelp'] = 'Om du redan har ett MoodleNet-konto kopierar du ID:t från din MoodleNet-profil och klistrar in det här:';
$string['instancedescription'] = 'MoodleNet är en öppen social media-plattform för pedagoger, med fokus på samverkande kurering av samlingar av öppna resurser.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile är felaktigt formaterad';
$string['missinginvalidpostdata'] = 'Resursinformationen från MoodleNet saknas eller har ett felaktigt format. Om detta sker upprepade gånger, kontakta webbplatsens administratör.';
$string['mnetprofile'] = 'MoodleNet-profil';
$string['mnetprofiledesc'] = '<p>Ange din MoodleNet-profil information här för att omdirigeras till din profil när du besöker MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'Integrationen mot MoodleNet måste aktiveras i Webbplatsadministrationen / MoodleNet innan resursimporter kan bearbetas.';
$string['moodlenetsettings'] = 'MoodleNet-inställningar';
$string['notification'] = 'Du är på väg att importera innehållet "{$a->name} ({$a->type})" till din webbplats. Välj den kurs där det ska läggas till, eller <a href="{$a->cancellink}">avbryt</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Verktyget MoodleNet är endast till för att underlätta kommunikationen med MoodleNet. Det lagrar inga data.';
$string['profilevalidationerror'] = 'Ett problem uppstod när ditt MoodleNet-profil ID skulle verifieras';
$string['profilevalidationfail'] = 'Vänligen ange ett giltigt MoodleNet-profil ID';
$string['profilevalidationpass'] = 'Ser bra ut!';
$string['removedmnetprofilenotification'] = 'På grund av de senaste ändringarna på MoodleNet-plattformen måste alla användare som tidigare sparat sitt MoodleNet-profil-ID på webbplatsen ange ett MoodleNet-profil ID i det nya formatet för att autentisera sig på MoodleNet-plattformen.';
$string['removedmnetprofilenotification_subject'] = 'Ändrat format för MoodleNet-profil ID';
$string['saveandgo'] = 'Spara och fortsätt';
$string['searchcourses'] = 'Sök kurser';
$string['selectpagetitle'] = 'Välj sida';
$string['uploadlimitexceeded'] = 'Filstorleken {$a->filesize} överskrider uppladdningsgränsen på {$a->uploadlimit} bytes för användaruppladdningar.';
