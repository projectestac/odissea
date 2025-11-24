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
 * Strings for component 'url', language 'lt', version '4.5'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Leisti URL kintamuosius';
$string['allowvariables_desc'] = 'Leisti į URL adresus įtraukti kintamuosius. Kintamieji leidžia perduoti vidinę informaciją, pavyzdžiui, naudotojo vardą, kaip URL adreso dalį. Naudodamiesi šia funkcija turėkite omenyje galimą privatumo riziką.';
$string['chooseavariable'] = 'Pasirinkite kintamąjį...';
$string['clicktoopen'] = 'Norėdami atverti šaltinį, spustelėkite nuorodą „{$a}“.';
$string['configdisplayoptions'] = 'Pasirinkite visas parinktis, kurios turėtų būti prieinamos. Esami parametrai nemodifikuoti. Norėdami pasirinkti kelis laukus, laikykite nuspaudę klavišą CTRL.';
$string['configframesize'] = 'Kai rėmelyje rodomas žiniatinklio puslapis arba įkeltas failas, ši reikšmė yra viršutinio rėmelio (kuriame yra naršymas) aukštis (pikseliais).';
$string['configrolesinparams'] = 'Ar tinkinti vaidmenų pavadinimai (iš kurso nustatymų) turėtų būti prieinami kaip URL parametrų kintamieji?';
$string['configsecretphrase'] = 'Ši slapta frazė naudojama norint sukurti šifruotą kodo reikšmę, kurią galima siųsti į kai kuriuos serverius kaip parametrą. Šifruotą kodą sukuria dabartinio naudotojo ID adreso reikšmė „md5“, sujungta su jūsų slapta fraze. IE kodas = md5(IP.slaptafrazė). Atkreipkite dėmesį, kad tai nepatikima, nes IP adresas gali keistis ir dažnai yra bendrai naudojamas kelių skirtingų kompiuterių.';
$string['contentheader'] = 'Turinys';
$string['createurl'] = 'Sukurti URL';
$string['displayoptions'] = 'Galimos rodymo parinktys';
$string['displayselect'] = 'Rodyti';
$string['displayselect_help'] = 'Šis parametras kartu su URL tipu ir nustatymu, ar naršyklė leidžia įdėjimą, nustato, kaip rodomas URL. Galimos parinktys: : * Automatinis – geriausia rodymo parinktis, nes URL pasirenkamas automatiškai * Įdėjimas – URL rodomas puslapyje, esančiame po naršymo juosta, kartu su URL aprašu ir visais blokais * Priverstinis atsisiuntimas – naudotojas raginamas atsisiųsti URL failą * Atidarytas – naršyklės lange rodomas tik URL * Iššokančiajame lange – URL rodomas naujame naršyklės lange be meniu ar adreso juostos * Rėmelyje – URL rodomas rėmelyje po naršymo juosta ir URL aprašu * Naujas langas – URL rodomas naujame naršyklės lange su meniu ir adreso juosta';
$string['displayselectexplain'] = 'Pasirinkite rodymo tipą. Deja, visiems URL tinka ne visi tipai.';
$string['externalurl'] = 'Išorinis URL';
$string['framesize'] = 'Rėmelio aukštis';
$string['indicator:cognitivedepth'] = 'Pažintinis URL';
$string['indicator:cognitivedepth_help'] = 'Šis rodiklis pagrįstas pažinimo gyliu, kurį besimokantysis pasiekia URL šaltinyje.';
$string['indicator:cognitivedepthdef'] = 'Pažintinis URL';
$string['indicator:cognitivedepthdef_help'] = 'Dalyvis per šį analizės intervalą pasiekė šį kognityvinio įsitraukimo procentą, kurį siūlo URL ištekliai (lygiai = nėra peržiūros, peržiūra)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Socialinis URL';
$string['indicator:socialbreadth_help'] = 'Šis rodiklis pagrįstas socialiniu platumu, kurį besimokantysis pasiekė URL šaltinyje.';
$string['indicator:socialbreadthdef'] = 'Socialinis URL';
$string['indicator:socialbreadthdef_help'] = 'Dalyvis pasiekė šį URL ištekliaus siūlomą socialinio įsitraukimo procentą per šį analizės intervalą (lygiai = nedalyvauta, vienas dalyvis)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Nepavyko atvaizduoti šio ištekliaus, URL negaliojantis.';
$string['invalidurl'] = 'Įvestas URL yra negaliojantis';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'URL modulis leidžia dėstytojui pateikti žiniatinklio nuorodą kaip kurso šaltinį. Viskas, kas yra laisvai prieinama internete, pvz., dokumentai ar vaizdai, gali būti susieta; URL nebūtinai turi būti pagrindinis svetainės puslapis. Tam tikro tinklalapio URL gali būti nukopijuotas ir įklijuotas arba dėstytojas gali naudoti failų rinkiklį ir pasirinkti nuorodą iš saugyklos, pvz., „Flickr“, „YouTube“ ar „Wikimedia“ (atsižvelgiant į tai, kokios saugyklos svetainėje įgalintos).

Yra keletas URL rodymo parinkčių, pvz., įterptas arba atidaromas naujame lange, ir išplėstinės informacijos, pvz., besimokančiojo vardo, perdavimo URL, jei reikia, parinktys.

Atminkite, kad URL taip pat galima pridėti prie bet kurio kito šaltinio ar veiklos tipo naudojant teksto rengyklę.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URL';
$string['name'] = 'Pavadinimas';
$string['name_help'] = 'Tai bus nuorodos tekstas URL.

Įveskite prasmingą tekstą, kuris glaustai apibūdintų URL adreso paskirtį.

Venkite žodžio „nuoroda“. Tai padės ekrano skaitytuvų naudotojams, nes ekrano skaitytuvai skelbia nuorodas (pvz., „Moodle.org, nuoroda“), todėl į pavadinimo lauką nereikia įtraukti žodžio „nuoroda“.';
$string['page-mod-url-x'] = 'Bet kuris URL modulio puslapis';
$string['parameterinfo'] = 'parametras=kintamasis';
$string['parametersheader'] = 'Parametrai';
$string['parametersheader_help'] = 'Šioje skiltyje galite perduoti vidinę informaciją kaip URL dalį. Tai naudinga, jei URL yra interaktyvus tinklalapis, kuriame naudojami parametrai, ir, pavyzdžiui, norite perduoti kažką panašaus į dabartinio naudotojo vardą. Teksto laukelyje įveskite URL parametro pavadinimą, tada pasirinkite atitinkamą svetainės kintamąjį.';
$string['pluginadministration'] = 'URL modulio administravimas';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Iššokančiojo lango aukštis (pikseliais)';
$string['popupheightexplain'] = 'Nurodo numatytąjį iššokančiųjų laukų aukštį.';
$string['popupwidth'] = 'Iššokančiojo lango plotis (pikseliais)';
$string['popupwidthexplain'] = 'Nurodo numatytąjį iššokančiųjų laukų plotį.';
$string['printintro'] = 'Rodyti URL aprašą';
$string['printintroexplain'] = 'Ar rodyti URL aprašą po turiniu? Kai kurie rodymo tipai gali nerodyti aprašo net įjungti.';
$string['privacy:metadata'] = 'URL ištekliaus papildinys nesaugo jokių asmeninių duomenų.';
$string['rolesinparams'] = 'Vaidmenų pavadinimai kaip URL kintamieji';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Serverio URL';
$string['url:addinstance'] = 'Pridėti naują URL išteklių';
$string['url:view'] = 'Peržiūrėti URL';
