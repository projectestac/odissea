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
 * Strings for component 'qbehaviour_deferredcbm', language 'lt', version '4.5'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Tikslumas';
$string['accuracyandbonus'] = 'Tikslumas + Premija';
$string['assumingcertainty'] = 'Jūs nepasirinkote tikrumo. Tarkime: {$a}';
$string['averagecbmmark'] = 'Vidutinis CBM įvertinimas';
$string['basemark'] = 'Bazinis įvertinimas {$a}';
$string['breakdownbycertainty'] = 'Suskirstymas pagal tikrumą';
$string['cbmbonus'] = 'CBM premija';
$string['cbmgradeexplanation'] = 'CBM atveju aukščiau nurodytas įvertinimas rodomas atsižvelgiant į maksimalų visų teisingų C=1 įvertinimus.';
$string['cbmgrades'] = 'CBM įvertinimai';
$string['cbmgrades_help'] = 'Naudojant tikrumu pagrįstą žymėjimą (CBM), kai kiekvienas klausimas yra teisingas su C=1 (mažas tikrumas), įvertinimas yra 100%. Įvertinimai gali siekti net 300%, jei kiekvienas klausimas yra teisingas, kai C=3 (didelis tikrumas). Didelis tikrumas dėl neteisingu atsakymų vertinamas Žemiau negu neteisingas su mažu tikrumu. Tai netgi gali lemti neigiamus bendrus įverčius.

**Tikslumas** yra teisingas procentas, neatsižvelgiant į tikrumą, bet svertinis pagal maksimalų kiekvieno klausimo balą. Sėkmingai skiriant daugiau ir mažiau patikimų atsakymų gaunamas geresnis įvertinimas, nei pasirinkus tą patį tikrumą kiekvienam klausimui. Tai atsispindi **CBM premijoje**.
**Tikslumas** + **CBM premija** yra geresnis žinių matas nei **Tikslumas**. Klaidingos nuomonės gali sukelti neigiamą premiją, įspėjimą atidžiai pažvelgti į tai, kas yra žinoma ir kas nežinoma.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM įvertinimas {$a}';
$string['certainty'] = 'Tikrumas';
$string['certainty-1'] = 'Nėra idėjos';
$string['certainty1'] = 'C=1 (Nesu tikras: <67 %)';
$string['certainty2'] = 'Patenkinamai (daugiau nei 67%)';
$string['certainty3'] = 'Gerai (daugiau nei 80%)';
$string['certainty_help'] = 'Žymėjimas tikrumu reikalauja, kad nurodytumėte, kiek patikimas jūsų atsakymas. Galimi lygiai:

Apibrėžtumo lygis | C=1 (nesu tikras) | C=2 (vidutinis) | C=3 (gana tikras)
-------------------- | ------------ | --------- | -----------------
Pažymėkite, jei teisingai | 1 | 2 | 3
Pažymėkite, jei klaidingai | 0 | -2 | -6
Tikimybė teisinga | <67 % | 67-80 % | >80 proc.

Geriausi įvertinimai gaunami pripažinus neapibrėžtumą. Pavyzdžiui, jei manote, kad tikimybė klysti yra daugiau nei 1 iš 3, turėtumėte įvesti C=1 ir išvengti neigiamo balo rizikos.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Nėra idėjos';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Nėra idėjos';
$string['foransweredquestions'] = 'Rezultatai tik {$a} klausimų, į kuriuos buvo atsakyta';
$string['forentirequiz'] = 'Rezultatai visam testui ({$a} klausimų (-ai))';
$string['howcertainareyou'] = 'Ar jūs tuo tikras? {$a->help}: {$a->choices}';
$string['judgementok'] = 'Gerai';
$string['judgementsummary'] = 'Atsakymai: {$a->responses}. Tikslumas: {$a->fraction}. (Optimalus diapazonas nuo {$a->idealrangelow} iki {$a->idealrangehigh}). Jūs naudojote šį tikrumo lygį {$a->judgement}.';
$string['noquestions'] = 'Nėra atsakymų';
$string['overconfident'] = 'per daug pasitikintis';
$string['pluginname'] = 'Atidėtas grįžtamasis ryšys su CBM';
$string['privacy:metadata'] = 'Atidėtas grįžtamasis ryšys naudojant CBM klausimų elgesio papildinį nesaugo jokių asmeninių duomenų.';
$string['slightlyoverconfident'] = 'šiek tiek per daug pasitikintis';
$string['slightlyunderconfident'] = 'šiek tiek nepasitiki savimi';
$string['underconfident'] = 'nepakankamai pasitikintis';
$string['weightx'] = 'Svoris {$a}';
