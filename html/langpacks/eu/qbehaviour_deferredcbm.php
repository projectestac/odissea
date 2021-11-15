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
 * Strings for component 'qbehaviour_deferredcbm', language 'eu', version '3.11'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Zehaztasuna';
$string['accuracyandbonus'] = 'Zehaztasuna + Saria';
$string['assumingcertainty'] = 'Ez duzu ziurtasuna aukeratu. Suposatzen da: {$a}.';
$string['averagecbmmark'] = 'Batez besteko CBM ebaluazioa';
$string['basemark'] = 'Oinarrizko ebaluazioa {$a}';
$string['breakdownbycertainty'] = 'Ziurtasunaren araberako banakatzea';
$string['cbmbonus'] = 'CBM saria';
$string['cbmgradeexplanation'] = 'CBM-rentzat, goiko kalifikazioa C=1 direneko erantzun guztiak ondo erantzun izanaren araberakoa da.';
$string['cbmgrades'] = 'CBM kalifikazioak';
$string['cbmgrades_help'] = 'Ziurtasunean oinarritutako ebaluazioarekin (ingelesez Certainty Based Marking, CBM) erantzun guztiak C=1-ekin (zalantzan) ondo erantzunez gero %100-eko kalifikazioa lortzen da. Kalifikazioak %300-ra arte igo daitezke erantzun guztiak C=3-rekin (oso ziur) ondo erantzunez gero. Erantzun okerrek ordea penalizazio handiagoa dute erantzuna oso ziurtzat markatuz gero zalantzazkoa markatuz baino. Honek galdetegiaren kalifikazio negatiboak eskuratzera eraman dezake jendea.

**Zehaztasuna** egoki dagoen %-a da ziurtasuna kontuan hartu gabe, baina galdera bakoitzerako gehieneko kalifikazioarekiko ponderatua. Ziurtasun gehiago eta gutxiagoko erantzunak ezberdintzeak galdera guztientzat ziurtasun berdina aukeratzeak baino kalifikazio hobeak ematen ditu. Hau **CBM Sarian** islatzen da. **Zehaztasuna**+**CBM Saria** **Zehaztasuna** baino jakintzaren neurri hobea da. Erantzun okerrek kalifikazio negatiboak eragin ditzakete, jakiten eta jakiten ez denaren inguruan begiratzeko ohartarazpen gisa.';
$string['cbmmark'] = 'CBM ebaluazioa {$a}';
$string['certainty'] = 'Ziurtasuna';
$string['certainty-1'] = 'Ideiarik ez';
$string['certainty1'] = 'Zalantzan (%67tik behera)';
$string['certainty2'] = 'Nahiko ziur (%67tik gora)';
$string['certainty3'] = 'Oso ziur (%80tik gora)';
$string['certainty_help'] = 'Ziurtasunean oinarritutako kalifikazioak zure erantzunaren egokitasunean duzun konfidantza adieraztea eskatzen du. Aukeran dauden mailak hurrengoak dira:

Ziurtasun maila                 | C=1 (Zalantzan) | C=2 (Nahiko ziur) | C=3 (Oso ziur)
------------------------------- | --------------- | ----------------- | ----------------
Erantzun zuzenaren kalifikazioa |        1        |          2        |        3
Erantzun okerraren kalifikazioa |        0        |         -2        |       -6
Zuzen izatearen probabilitatea  |      <%67       |       %67-80      |      >%80';
$string['certaintyshort-1'] = 'Idearik ez';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Idearik ez';
$string['foransweredquestions'] = 'Emaitzak erantzundako {$a} galderentzat soilik';
$string['forentirequiz'] = 'Emaitzak galdetegi osoarentzat ({$a} galdera)';
$string['howcertainareyou'] = 'Ziurtasuna {$a->help}: {$a->choices}';
$string['judgementok'] = 'Ados';
$string['judgementsummary'] = 'Erantzunak: {$a->responses}. Zehaztasuna: {$a->fraction}. (Balio-tarte egokiena {$a->idealrangelow} eta {$a->idealrangehigh} artean). Zu {$a->judgement} izan zara ziurtasun-maila honen arabera.';
$string['noquestions'] = 'Erantzunik ez';
$string['overconfident'] = 'zure buruaz ziurregi';
$string['pluginname'] = 'Beranduagoko feedbacka CBMrekin';
$string['privacy:metadata'] = 'Beranduagoko feedbacka CBMrekin galdera-jokaera pluginak ez du datu pertsonalik biltzen.';
$string['slightlyoverconfident'] = 'zure buruaz apur bat ziurregi';
$string['slightlyunderconfident'] = 'zure buruaz ez oso ziur';
$string['underconfident'] = 'zure buruaz oso ziurtasun gutxirekin';
$string['weightx'] = 'Pisua {$a}';
