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
 * Strings for component 'qtype_coderunner', language 'sv', version '4.5'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aborted'] = 'Testningen avbröts pga. ett fel.';
$string['allok'] = 'Alla test avklarade!';
$string['answer'] = 'Svar';
$string['answerprompt'] = 'Svar:';
$string['answerrequired'] = 'Vänligen mata in ett svar';
$string['asolutionis'] = 'Modellösning:';
$string['brokencombinator'] = 'Förväntade mig {$a->numtests} testresultat, men fick {$a->numresults}. Kanske för mycket utskrift eller fel på fråga?';
$string['coderunner_link'] = 'question/type/coderunner';
$string['columncontrols'] = 'Resultattabell';
$string['default_penalty_regime'] = 'Förvalda avdrag';
$string['expected'] = 'Förväntade utdata';
$string['expectedcolhdr'] = 'Förväntat';
$string['forexample'] = 'Till exempel';
$string['gotcolhdr'] = 'Fick';
$string['noerrorsallowed'] = 'Din programkod måste klara alla tester för att du ska få poäng. Pröva igen!';
$string['penaltyregime'] = '(avdrag: {$a} %)';
$string['penaltyregimelabel'] = 'Avdrag:';
$string['pluginname_link'] = 'question/type/coderunner';
$string['precheck'] = 'Förhandsgranska';
$string['precheck_only'] = 'Endast förhandsgranskning';
$string['prototypecontrols_help'] = 'Om "Är prototyp" är sant, blir denna fråga en prototyp för andra frågor. Efter det att frågan sparats kommer det angivna frågetypnamnet att visas i dropdown-listan med frågetyper. Nya frågor baserade på den här typen kommer då som standard ärva alla de anpassningsattribut som anges för denna fråga. Efterföljande ändringar till denna fråga kommer då att påverka alla härledda frågor, om de inte i sig är anpassade, vilket bryter kopplingen.

Prototypbaserade gäller enbart för en(1) nivå, så denna fråga, när den sparas som en prototyp, förlorar sin koppling till dess ursprungliga bastyp. Den blir en ny bastyp i sin egen rätt. OBS! Vid export av härledda frågor måste du se till att denna fråga ingår även i exporten eftersom den härledda frågan annars kommer att vara föräldralös när den importeras till ett annat system. Vidare är du ansvarig för att hålla reda på vilka frågor du använder som prototyper. Det rekommenderas att du byter namn på frågan till något i stil med \'PROTOTYP_för_min_nya_frågetyp\' för att göra efterföljande underhåll enklare.';
$string['resultcolumns'] = 'Resultatkolonner';
$string['testtype_precheck'] = 'Endast förhandsgranskning';
