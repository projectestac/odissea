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
 * Strings for component 'qtype_gapfill', language 'sv', version '4.1'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Lägg till en ledtråd i frågan.';
$string['addhinttext_text'] = 'Fyll i de två första tipsen i avsnittet "Multipla försök".';
$string['additemsettings'] = 'Inställningar för luckor';
$string['answerdisplay'] = 'Inställningar för svarsalternativen';
$string['answerdisplay_help'] = '<strong>Dra/släpp</strong> visar en lista med ord som kan dras in i luckorna.<BR><strong>Skriv</strong> visar luckor men inga ordalternativ, text ska skrivas in. <BR><strong>Rullgardinsmeny</strong> visar samma lista med korrekta (och eventuellt felaktiga) svar i varje lucka.';
$string['blank'] = 'tomt';
$string['cannotimport'] = 'Kan inte importera';
$string['casesensitive'] = 'Skifteslägeskänslig';
$string['casesensitive_help'] = 'Om detta är markerat, och rätt svar är ABBA, kommer abba att markeras som fel svar';
$string['correct'] = 'Återkoppling för rätt svar';
$string['correctanswer'] = 'Rätt svar';
$string['course'] = 'Hjälp med import';
$string['coursenotfound'] = 'Kursen hittades inte, kontrollera kursens namn';
$string['courseshortname'] = 'Kursens kortnamn';
$string['courseshortname_help'] = 'Ange kortnamnet på kursen som du vill importera frågan till. Detta gör en standardimport av xml-frågan från filen example_questions.xml i frågetypsmappen Gapfill.';
$string['delimitchars'] = 'Avgränsningstecken';
$string['delimitchars_help'] = 'Ändra tecken som avgränsar ett fält från standard [ ], användbart för programmeringsspråkfrågor';
$string['delimitset_text'] = 'Bestämmer avgränsningstecken för saknade ord, så du kan välja % eller @ istället.';
$string['disableregex'] = 'Avaktivera Regex';
$string['disableregex_help'] = 'Inaktivera hantering av reguljära uttryck och utför en standardsträngjämförelse. Detta kan vara användbart för html-frågor där vinkelparenteserna (&lt; och &gt;) ska behandlas bokstavligt och matematik där symboler som * bör ses bokstavligen snarare än som uttryck';
$string['disableregexset_text'] = 'Inaktivera hantering av reguljära uttryck i svar';
$string['displaydragdrop'] = 'Dra/släpp';
$string['displaydropdown'] = 'Rullgardinsmeny';
$string['displaygapfill'] = 'Skriv';
$string['distractor1'] = 'blå,sko,liten';
$string['distractor2'] = 'blå,sko,liten';
$string['duplicatepartialcredit'] = 'Poängen är reducerad eftersom du har angivit dubbla svar.';
$string['editquestiontext'] = 'Redigera frågetexten';
$string['example1'] = 'Dra verben till luckorna.<BR>Han [skrattade] och [satte] sig ned.';
$string['example2'] = 'Välj verb i rullgardinsmenyn. <BR>Han [skrattade] och [satte] sig ned.';
$string['example3'] = 'I vilken stad ligger Kattrumpan? Den ligger i [Kalmar].<BR>
Den här luckan accepterar antingen "hund" eller "katt": [hund|katt]';
$string['fixedgapsize'] = 'Lika stora luckor/mellanrum överallt';
$string['fixedgapsize_help'] = 'När frågan besvaras kommer alla luckor att vara lika stora som den största luckan. Detta tar bort storleken på luckan som en ledtråd till rätt svar. Annars gör luckorna för exempelvis orden [staten] och [jordbruksutskottet] det tydligt var respektive ord ska in.';
$string['fixedgapsizeset_text'] = 'Ställer in storleken på varje lucka till samma som den största luckan';
$string['gap_plural'] = 'luckor';
$string['gap_singular'] = 'lucka';
$string['gapfill'] = 'Gapfill.';
$string['importexamples'] = 'Importera';
$string['incorrect'] = 'Återkoppling för felaktigt svar';
$string['itemsettings_button'] = 'Inställningar för svarsalternativ';
$string['itemsettings_button_help'] = 'Klicka för att byta inställningsläget för att ange  feedback för korrekta eller felaktiga svar.
Klicka sedan på en lucka för att få upp inställningsformuläret.
Skriv återkoppling för korrekt svar i det över formuläret, och återkoppling för felaktigt svar i det nedre formuläret.';
$string['itemsettingsbutton'] = 'Inställningar för luckor';
$string['itemsettingserror'] = 'Fungerar bara med Atto-redigeraren. Gå till dina inställningar för att byta till Atto.';
$string['letterhint0'] = 'Den första bokstaven i rätt svar läggs till i varje felaktigt svar när du trycker på <B> försök igen</B>.';
$string['letterhint1'] = 'Nästa bokstav i rätt svar läggs till i varje felaktigt svar när du trycker på <B> försök igen</B>.';
$string['letterhints'] = 'Bokstavsledtrådar';
$string['letterhints_help'] = 'Visa bokstav från korrekt svar som en ledtråd när multipla försök tillåts och fel svar har getts.';
$string['letterhints_text'] = 'Visa bokstav från korrekt svar som en ledtråd när multipla försök tillåts och fel svar har getts.';
$string['moreoptions'] = 'Fler inställningar';
$string['noduplicates'] = 'Inga dubletter';
$string['noduplicates_help'] = 'När aktiverat måste varje svar vara unikt. <BR>Detta är användbart där varje lucka accepterar något av flera svar.<BR>
Exempel: "Vilka färger har de olympiska medaljerna" och varje fält har [guld|silver|brons]. Om studenten skriver in guld i alla fält får bara det första ett betyg (de andra får fortfarande en bock).';
$string['optionsaftertext'] = 'Svarsalternativ under frågetext';
$string['optionsaftertext_help'] = 'Dragbara svarsalternativ visas under frågetexten istället för ovanför.';
$string['optionsaftertext_text'] = 'Visa dragbara svarsalternativ under frågetexten.';
$string['or'] = 'eller';
$string['pleaseenterananswer'] = 'Ange ett svar';
$string['pluginname'] = 'Gapfill';
$string['pluginname_help'] = 'Sätt hakparenteser runt orden som ska fyllas i, t.ex. [Katten] satt på [mattan]. <br>
Om matta eller golv är acceptabelt, använd [mattan|golvet]. <BR>Rullgardinsmeny och Dra/släpp medger en blandad lista med svar som även kan innehålla valfria distraherande (felaktiga) svarsalternativ.';
$string['pluginname_link'] = 'question/type/gapfill';
$string['pluginnameadding'] = 'Lägger till en Gapfill-fråga';
$string['pluginnameediting'] = 'Redigerar en Gapfill-fråga';
$string['pluginnamesummary'] = 'En frågetyp där man ska fylla i saknade ord, antingen genom drag-och-släpp eller med menyalternativ. Mycket enkel att konstruera.';
$string['privacy:null_reason'] = 'Frågetypen Gapfill påverkar eller lagrar ingen data i sig själv';
$string['questioncatnotfound'] = 'Frågekategorin kunde inte hittas, klicka <a href={$a}>här</a> för att initiera och sedan din webbläsares back-knapp';
$string['questionsmissing'] = 'Du har inga saknade ord i din frågetext';
$string['questiontext'] = 'Frågetext';
$string['questiontext_help'] = 'Sätt avgränsningstecken runt de ord som ska fyllas i.';
$string['singleuse'] = 'Dragbara objekt kan bara användas i en lucka';
$string['singleuse_help'] = 'Ta bort dragna objekt från listan när de släppts i en lucka';
$string['singleuse_text'] = 'Ta bort dragna objekt från listan när de släppts i en lucka';
$string['visitquestions'] = 'Klicka<a href={$a}>här</a> för att komma till frågorna';
$string['wronganswers'] = 'Distraherare';
$string['wronganswers_help'] = 'Lista över felaktiga svar för att distrahera från de rätta svaren. Varje ord avgränsas med kommatecken, gäller endast i Dra/släpp- och Rullgardinsläge.';
$string['yougotnrightcount'] = 'Du besvarade {$a->num} {$a->gaporgaps} av {$a->outof} korrekt.';
