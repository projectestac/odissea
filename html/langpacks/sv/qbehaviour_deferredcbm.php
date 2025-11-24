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
 * Strings for component 'qbehaviour_deferredcbm', language 'sv', version '4.5'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Noggrannhet';
$string['accuracyandbonus'] = 'Noggrannhet + Bonus';
$string['assumingcertainty'] = 'Du har inte valt säkerhetsgrad. Förutsatt att: {$a}.';
$string['averagecbmmark'] = 'Genomsnittlig CBM-poäng';
$string['basemark'] = 'Grundpoäng {$a}';
$string['breakdownbycertainty'] = 'Nedbrytning på visshet';
$string['cbmbonus'] = 'CBM-bonus';
$string['cbmgradeexplanation'] = 'För CBM visas betyget ovan som relativt det maximala betyget för alla rätt vid C=1.';
$string['cbmgrades'] = 'CBM-betyg';
$string['cbmgrades_help'] = 'Med visshetsbaserad betygsättning (eng. <em>Certainty Based Marking</em> - CBM) får varje fråga korrekt med C = 1 (låg visshet) ett betyg på 100%. Betygen kan vara så höga som 300% om varje fråga är korrekt med C=3 (hög visshet). Missuppfattningar (med säkerhet felaktiga svar) sänker betygen mycket mer än felaktiga svar som erkänns vara osäkra. Detta kan till och med leda till negativa övergripande betyg.

**Noggrannhet** är den %-korrekta ignorerad med avseende på visshet men viktad för det maximala betyget för varje fråga. Att lyckas särskilja fler och mindre tillförlitliga svar ger ett bättre betyg än att välja samma visshet för varje fråga. Detta återspeglas i **CBM Bonus**. **Noggrannhet** + **CBM Bonus** är ett bättre mått på kunskap än **Noggrannhet**. Missuppfattningar kan leda till en negativ bonus, en varning om att titta noga på vad som är, och inte är, känt.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM-poäng {$a}';
$string['certainty'] = 'Säkerhet';
$string['certainty-1'] = 'Ingen aning';
$string['certainty1'] = 'C=1 (Osäker: <67%)';
$string['certainty2'] = 'C=2 (Medel: >67%)';
$string['certainty3'] = 'C=3 (Väldigt säker: >80%)';
$string['certainty_help'] = 'Visshetsbaserad betygsättning kräver att du anger hur pålitligt du tror att ditt svar är. De tillgängliga nivåerna är:

Visshetsnivå | C=1 (Osäker) | C=2 (mitt emellan) | C=3 (Ganska säker)
------------------- | ------------ | --------- | ----------------
Betyg om rätt |   1 |    2 |      3
Betyg om det är fel |   0 |   -2 |     -6
Sannolikhet korrekt |  <67% | 67-80% | >80%

Bästa betyg uppnås genom att erkänna osäkerhet. Om du till exempel tror att det finns risk som är högre än 1 av 3 att ha fel, bör du ange C = 1 för att undvika risken för ett negativt betyg.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Ingen aning';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Ingen aning';
$string['foransweredquestions'] = 'Resultat för de {$a} besvarade frågorna.';
$string['forentirequiz'] = 'Resultat för hela testet ({$a} frågor)';
$string['howcertainareyou'] = 'Säker på rätt svar{$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Svar: {$a->responses}. Noggrannhet: {$a->fraction}. (Optimalt intervall {$a->idealrangelow} till {$a->idealrangehigh}). Du var {$a->judgement} då du använde den här visshetsnivån.';
$string['noquestions'] = 'Inget svar';
$string['overconfident'] = 'Alltför självsäker';
$string['pluginname'] = 'Uppskjuten återkoppling med CBM (Curriculum-Based Measurement)';
$string['privacy:metadata'] = 'Pluginmodulen Fördröjd återkoppling med CBM frågebeteende lagrar ingen personinformation.';
$string['slightlyoverconfident'] = 'Lite för självsäker';
$string['slightlyunderconfident'] = 'Någorlunda säker';
$string['underconfident'] = 'Inte alls säker';
$string['weightx'] = 'Vikt {$a}';
