<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Lisää rajoitteita (ehtoja) muuttujiin.';
$string['addmorevarblanks'] = 'Aukko {no}:lle muuttujalle';
$string['answerinvalid'] = 'Vastaus-merkkijono ei ole kelvollinen. Näin ei pitäisi tapahtua.';
$string['answermissing'] = 'Vastaus puuttuu. Luultavasti JavaScript ei ole käytössä selaimessa tai tapahtui tuntematon virhe.';
$string['answervar'] = 'Automaattisen arvioinnin muuttujat';
$string['answervar_help'] = 'Automaattiseen arviointiin: Totuusarvo-objektin nimi GeoGebrassa, joka on tosi, jos oppilas on (osittain) ratkaissut kysymyksen. Laskee yhteen kaikkien totuusarvomuuttujien arvioinnit. Kysymys on oikein, jos mikä tahansa yhdistelmä ylittää 100%, mutta vähintään yhden yhdistelmän tulisi summautua tasan 100 %:iin. Jätä tyhjäksi, jos arvioit käsin.';
$string['applet_advanced_settings'] = 'Lisäasetukset...';
$string['constraints'] = 'Rajoitteet (ehdot)';
$string['constraints_help'] = 'Onko muuttujille rajoitteita, kuten a < b, joita ei voitu ilmoittaa käyttämällä liukusäätimen asetuksia? Pilkulla erotettuna. Tuetut relaatiot ovat: <, <=, >, >=. Jos tarvitset epäyhtälöä, on käytettävä samaa muuttujaa kuin GeoGebra-työkirjassa. Dynaaminen arvojoukkoa eli muuttujien käyttämistä liukusäätimen min/max -arvoina ei tueta.';
$string['constraintswrongortoohard'] = '{$a->inequalities} ovat väärin tai liian vaikeita, yritimme (raa\'alla voimalla) {$a->tries} kertaa {$a->time} sekunnissa. Ehkä käytämme parempaa menetelmää tulevaisuudessa...';
$string['dragndrop'] = 'Raahaa ja pudota GeoGebra-tiedosto mihin tahansa GeoGebra-applettiosiossa.';
$string['enable_label_drags'] = 'Salli nimien raahaaminen';
$string['enable_right_click'] = 'Salli hiiren oikean painikkeen klikkaaminen ja muokkaaminen näppäimistöllä';
$string['enable_shift_drag_zoom'] = 'Salli Vaihto-raahaus ja zoomaus';
$string['feedback'] = 'Palaute, jos muuttuja on tosi';
$string['feedback_help'] = 'Palaute on automaattisesti otettu GeoGebra-tiedoston muuttujan tekstistä.';
$string['geogebraapplet'] = 'GeoGebra-appletti';
$string['getvars'] = 'Hae muuttujat, jotka voi satunnaistaa appletista';
$string['ggbfilemissing'] = 'Base64-merkkijono puuttuu vastauksesta.  Luultavasti JavaScript ei ole käytössä selaimessa tai tapahtui tuntematon virhe.';
$string['ggbturl'] = 'URL tai ID GeoGebran työkirjaan';
$string['ggbturl_help'] = 'Voit käyttää joko Jaa-painiketta GeoGebrassa ja kopioida ja liittää linkin, tai käyttää GeoGebran säilytyspaikkaa. Appletti ja parametrit tallennetaan tietokantaan, eikä applettia ladata uudelleen GeoGebrasta, ellei sitä pyydetä. Pelkkä ID:n antamista tai appletin avaimen jakamista on myös tuettu ominaisuus.';
$string['ggbxmlmissing'] = 'XML-merkkijono puuttuu vastauksesta. Luultavasti JavaScript ei ole käytössä selaimessa tai tapahtui tuntematon virhe.';
$string['invalidinequality'] = '{$a} ei ole kelvollinen';
$string['isexercise'] = 'Käytä GeoGebra-harjoitusta kysymyksen tarkastamiseen';
$string['isexercise_help'] = 'Tämä appletti sisältää käyttäjän määrittelemiä työkaluja, joita voi käyttää harjoituksen automaattisen tarkistamiseen. Varo: Kaikki vastaukset alla eivät ole sovellettavissa tässä tapauksessa.';
$string['israndomized'] = 'Onko muuttujia, jotka pitäisi satunnaistaa?';
$string['loadapplet'] = 'Lataa (uudelleen) ja näytä appletti';
$string['loadapplet_help'] = 'Lataa appletti (uudelleen) GeoGebrasta ja varastoi uusi versio GeoGebrasta tietokantaan.';
$string['mineqmax'] = 'Min ja Max eivät ole oikein määriteltyjä muuttujan {$a} satunnaistamiseksi. Joko et ole määritellyt liukusäätimen Min ja Max tai muuttuja ei ole liukusäädin. Sinun on luultavasti korjattava tämä GeoGebra-tiedostossa.';
$string['minplusstepgtmax'] = 'Min plus lisäys (Animaatioaskel) on suurempi kuin muuttujan {$a} Max. Sinun on luultavasti korjattava tämä GeoGebra-tiedostossa.';
$string['noappletloaded'] = 'Applettia ei ole ladattu! Tarkista onko URL-osoite oikea ja näetkö appletin valittuasi linkin tai ladattuasi appletin (uudelleen).';
$string['nofractionsumeq1'] = 'Ainakin yhden arviointien yhdistelmän täytyy summautua 100 %:iin.';
$string['pluginname_help'] = 'Kysymykset, joiden ratkaisemisessa oppilas voi käyttää GeoGebraa';
$string['pluginnameadding'] = 'GeoGebra-kysymyksen lisääminen';
$string['pluginnameediting'] = 'GeoGebra-kysymyksen muokkaaminen';
$string['pluginnamesummary'] = 'Laskutehtävätyyppi, joka käyttää GeoGebraa näyttämään kysymyksen ja tarkistamaan vastauksen kyselyssä.';
$string['randomizedbutnovars'] = 'Olet valinnut, että kysymys satunnaistetaan, mutta et ole määritellyt yhtään kelvollista satunnaistettavaa muuttujaa.';
$string['randomizedvar'] = 'Satunnaistettavat muuttujat';
$string['randomizedvar_help'] = 'Muuttujat, jotka halutaan satunnaistettavan (pilkulla erotettuna). Aseta Min, Max ja lisäys (Animaatioaskel) liukusäätimen asetuksissa GeoGebrassa. Näitä muuttujia voi käyttää myös kysymystekstissä sulkemalla ne aaltokulkeisiin, esimerkiksi: {a}';
$string['show_algebra_input'] = 'Näytä syöttökenttä';
$string['show_menu_bar'] = 'Näytä valikko';
$string['show_reset_icon'] = 'Näytä ikoni konstruktion alustamiseen';
$string['show_tool_bar'] = 'Näytä työkalupalkki';
$string['stepzero'] = 'Lisäys (Animaatioaskel) on 0 muuttujalle {$a}; joko et ole asettanut liukusäätimen animaatioaskelta tai objekti ei ole liukusäädin. Sinun on luultavasti korjattava tämä GeoGebra-tiedostoon.';
$string['useafile'] = '... tai käytä ggb-tiedostoa';
$string['valuecheckedfor'] = 'Totuusarvo-objekti GeoGebrassa, jota käytetään oikeellisuuden tarkastamisessa.';
$string['variablenamewrong'] = 'Muuttujaa tällä nimellä ei löytynyt GeoGebra-tiedostosta.';
$string['variableno'] = 'Muuttuja {$a}';
$string['variables'] = 'Muuttujat';
$string['willbereadfromfile'] = 'Luetaan GeoGebrasta... (katso Ohje-painike)';
