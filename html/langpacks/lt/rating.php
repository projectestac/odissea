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
 * Strings for component 'rating', language 'lt', version '4.5'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Įvertinimų vidurkis';
$string['aggregatecount'] = 'Įvertinimų kiekis';
$string['aggregatemax'] = 'Maksimalus įvertinimas';
$string['aggregatemin'] = 'Minimalus įvertinimas';
$string['aggregatenone'] = 'Nėra įvertinimų';
$string['aggregatesum'] = 'Įvertinimų suma';
$string['aggregatetype'] = 'Agregavimo tipas';
$string['aggregatetype_help'] = 'Agregavimo tipas apibrėžia, kaip įvertinimai jungiami formuojant galutinį įvertinimą įvertinimų knygelėje.

* Įvertinimų vidurkis – visų įvertinimų vidurkis.
* Įvertinimų kiekis – įvertinimai įvertintų elementų skaičius tampa galutiniu įvertinimu. Atkreipkite dėmesį, kad bendra suma negali viršyti maksimalaus šios veiklos įvertinimo.
* Maksimumas – aukščiausias įvertinimas tampa galutiniu įvertinimu.
* Minimumas – mažiausias įvertinimas tampa galutiniu įvertinimu.
* Suma – visi įvertinimai sudedami. Atkreipkite dėmesį, kad bendra suma negali viršyti maksimalaus šios veiklos įvertinimo.

Jei pasirenkama Nėra įvertinimų, veikla įvertinimų knygelėje nerodoma.';
$string['allowratings'] = 'Leisti elementus vertinti pažymiais?';
$string['allratingsforitem'] = 'Visi pateikti pažymiai';
$string['capabilitychecknotavailable'] = 'Nėra galimybės tikrinti, kai veikla įrašoma';
$string['couldnotdeleteratings'] = 'Atsiprašome, negalima panaikinti, nes jau yra pažymiais įvertintų asmenų';
$string['norate'] = 'Elementų vertinimas pažymiais neleidžiamas!';
$string['noratings'] = 'Pažymių nepateikta';
$string['noviewanyrate'] = 'Galite peržiūrėti tik savo sukurtų elementų rezultatus';
$string['noviewrate'] = 'Neturite galimybės peržiūrėti elemento pažymių';
$string['privacy:metadata:rating'] = 'Naudotojo įvestas įvertinimas saugomas kartu su įvertinto elemento atvaizdu.';
$string['privacy:metadata:rating:rating'] = 'Skaitinis įvertinimas, kurį įvedė naudotojas.';
$string['privacy:metadata:rating:timecreated'] = 'Laikas, kai pirmą kartą buvo atliktas įvertinimas.';
$string['privacy:metadata:rating:timemodified'] = 'Laikas, kada įvertinimas paskutinį kartą buvo atnaujintas.';
$string['privacy:metadata:rating:userid'] = 'Naudotojas, kuris vertino.';
$string['rate'] = 'Vertinti';
$string['ratepermissiondenied'] = 'Neturite teisės vertinti šio elemento pažymiu';
$string['rating'] = 'Įvertinimas';
$string['ratinginvalid'] = 'Įvertinimas neleistinas';
$string['ratings'] = 'Vertinimas';
$string['ratingtime'] = 'Neleisti vertinti elementų, kurių datos patenka į šį laikotarpį:';
$string['rolewarning'] = 'Vaidmenys, kuriems suteikta teisė vertinti pažymiais';
$string['rolewarning_help'] = 'Vaidmenys su leidimu vertinti yra vaidmenys su galimybe moodle/rating:rate ir bet kokios konkrečios veiklos įvertinimo galimybėmis. Puslapyje Leidimai galite suteikti leidimą vertinti daugiau vaidmenų.';
$string['scaleselectionrequired'] = 'Pasirinkdami suvestinių įvertinimų tipą taip pat turite pasirinkti naudoti skalę arba nustatyti maksimalų taškų skaičių.';
