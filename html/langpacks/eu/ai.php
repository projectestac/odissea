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
 * Strings for component 'ai', language 'eu', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Onartu eta jarraitu';
$string['action'] = 'Ekintza';
$string['action_generate_image'] = 'Sortu irudia';
$string['action_generate_image_desc'] = 'Irudi bat sortzen du testu-sarrera batean oinarrituta.';
$string['action_generate_text'] = 'Sortu testua';
$string['action_generate_text_desc'] = 'Testu bat sortzen du testu-sarrera batean oinarrituta.';
$string['action_generate_text_instruction'] = 'Erabiltzailearen testu-sarrera bat jasoko duzu. Zure ataza bere eskaeran oinarritutako testua sortzea da. Jarraitu agindu garrantzitsu hauek:
    1. Laburpena testu-soila izan behar da.
    2. Ez txertatu inongo Markdown formaturik, agurrik edo pellokeriarik.';
$string['action_summarise_text'] = 'Laburtu testua';
$string['action_summarise_text_desc'] = 'Ikastaro-orri bateko testuzko edukia laburtzen du.';
$string['action_summarise_text_instruction'] = 'Erabiltzailearen testu-sarrera bat jasoko duzu. Zure ataza emandako testua laburtzea da. Jarraitu gidalerro hauek:
    1. Laburtu: Pasarte luzeak puntu gakoetan laburtu
    2. Sinplifikatu: Informazio konplexua ulertzen erraza den informazio bihurtu, bereziki ikasleentzat.

Agindu garrantzitsuak:
    1. Laburpena testu-soila izan behar da.
    2. Ez txertatu inongo Markdown formaturik, agurrik edo pellokeriarik.
    3. Arreta jarri argitasuna, laburtasuna eta irisgarritasunean

Ziurtatu laburpena irakurtzen erraza dela eta jatorrizko testuaren puntu gakoak modu egokian adierazten dituela.';
$string['action_translate_text'] = 'Itzuli testua';
$string['action_translate_text_desc'] = 'Emandako testua hizkuntza batetik bestera itzultzen du.';
$string['actionsettingprovider'] = '{$a} ekintzaren ezarpenak';
$string['actionsettingprovider_desc'] = 'Ezarpen hauek {$a->providername} hornitzaileak {$a->actionname} ekintza nola exekutatzen duen kontrolatzen dute.';
$string['ai'] = 'AA (Adimen Artifiziala)';
$string['aiplacements'] = 'AA kokapenak';
$string['aiproviders'] = 'AA hornitzaileak';
$string['aiusagepolicy'] = 'AA erabilera-politika';
$string['availableplacements'] = 'Aukeratu AA ekintzak non egongo diren eskuragarri';
$string['availableplacements_desc'] = 'Kokapenak AA ekintzak zure gunean zehar non eta nola erabili ahalko diren zehazten dute. Ezarpenen bitartez kokapen bakoitzean zein ekintza egongo den eskuragarri aukeratu dezakezu.';
$string['availableproviders'] = 'Kudeatu zure LMSarekin konektatutako AA hornitzaileak';
$string['availableproviders_desc'] = 'AA hornitzaileek zure gunean zehar Adimen Artifizialeko funtzioak \'ekintzen\' bitartez gehitzen dute, hala nola testuen laburpena edo irudien sorrera.<br/>
Hornitzaile bakoitzaren ezarpenetan euren ekintzak kudeatu ditzakezu.';
$string['contentwatermark'] = 'AA bidez sortuta';
$string['declineaipolicy'] = 'Ez onartu';
$string['manageaiplacements'] = 'Kudeatu AA kokapenak';
$string['manageaiproviders'] = 'Kudeatu AA hornitzaileak';
$string['noproviders'] = 'Ekintza hau ez dago eskuragarri. Ez dago <a href="{$a}">AA hornitzailerik</a> konfiguratuta ekintza honetarako.';
$string['placement'] = 'Kokapena';
$string['placementactionsettings'] = 'Ekintzak';
$string['placementactionsettings_desc'] = 'Kokapen honetarako eskuragarri dauden AA ekintzak.';
$string['placementsettings'] = 'Kokapenaren ezarpen espezifikoak';
$string['placementsettings_desc'] = 'Ezarpen hauek AA kokapen hau AA zerbitzuarekin nola konektatzen den eta horrekin lotutako eragiketak kontrolatzen dituzte.';
$string['privacy:metadata:ai_action_generate_image'] = 'Erabiltzaileek irudiak sortzeko eskaerak gordetzen dituen taula.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Sortutako irudien itxura-ratioa.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Sortutako irudi kopurua.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Irudi-sorrerarako eskaeraren testu-sarrera.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Sortutako irudien kalitatea.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Sortutako irudien testu-sarrera berrikusia.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Sortutako irudien jatorrizko URLa.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Sortutako irudien estiloa.';
$string['privacy:metadata:ai_action_generate_text'] = 'Erabiltzaileek testuak sortzeko eskaerak gordetzen dituen taula.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Testua sortzeko erabilitako osatze-tokenak.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Eredua eta edukiaren egoera/bertsioa erakusten duen hash bakarra.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Testu-sarreran oinarrituta AA ereduak sortutako testua.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Testu-sorreraren eskaerarako erabilitako testu-sarrera.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Testua sortzeko erabilitako testu-sarrera tokenak.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'Erantzunaren IDa.';
$string['privacy:metadata:ai_action_register'] = 'Erabiltzaileek egindako ekintzak gordetzen dituen taula.';
$string['privacy:metadata:ai_action_register:actionid'] = 'Ekintza-eskaeraren IDa.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Eskaeraren ekintzaren izena.';
$string['privacy:metadata:ai_action_register:provider'] = 'Eskaera kudeatu zuen hornitzailearen izena.';
$string['privacy:metadata:ai_action_register:success'] = 'Ekintza-eskaeraren egoera.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Eskaera osatu zeneko unea.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Eskaera sortu zeneko unea.';
$string['privacy:metadata:ai_action_register:userid'] = 'Eskaera egin zuen erabiltzailearen IDa.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Erabiltzaileek eskatutako testu-laburpenak gordetzen dituen taula.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Testua laburtzeko erabilitako osatze-tokenak.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Eredua eta edukiaren egoera/bertsioa erakusten duen hash bakarra.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Testu-sarreran oinarrituta AA ereduak sortutako testua.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Testua laburtzeko eskaeran erabilitako testu-sarrera.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Testua laburtzeko erabilitako testu-sarrera tokenak.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'Erantzunaren IDa.';
$string['privacy:metadata:ai_policy_register'] = 'Erabiltzaile bakoitzaren AA politikaren onarpenaren egoera gordetzen duen taula.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'Gordetako datuei dagokien testuinguruaren IDa.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Erabiltzaileak AA politika onartu zueneko unea.';
$string['privacy:metadata:ai_policy_register:userid'] = 'Gordetako datuei dagokien erabiltzailearen IDa.';
$string['provider'] = 'Hornitzailea';
$string['provideractionsettings'] = 'Ekintzak';
$string['provideractionsettings_desc'] = 'Aukeratu eta konfiguratu {$a} zure gunean exekutatu ditzakeen ekintzak.';
$string['providers'] = 'Hornitzaileak';
$string['providersettings'] = 'Ezarpenak';
$string['userpolicy'] = '<h4><strong>Ongi etorri AA funtzio berrira!</strong></h4>
<p>Adimen Artifizialeko (AA) funtzioa kanpoko Hizkuntza Eredu Handietan (LLM) soilik oinarritzen da zure ikaste eta irakaste esperientzia hobetzeko. AA zerbitzu hauek erabiltzen hasi baino lehen, irakurri mesedez erabilera-politika hau.</p>
<h4><strong>AA bidez sortutako edukiaren zehaztasuna</strong></h4>
<p>AAk iradokizun eta informazio erabilgarriak eman ditzake, baina bere zehaztasuna aldakorra izan daiteke. Emandako informazioa beti egiaztatu behar duzu, zure egoera zehatzerako zehatza, osoa eta egokia dela ziurtatzeko.</p>
<h4><strong>Nola prozesatzen dira zure datuak</strong></h4>
<p>AA bidezko funtzio honek kanpoko LLMak erabiltzen ditu. Funtzio hau erabiliz gero, partekatzen duzun edozein informazio edo datu pertsonal hirugarren horren zerbitzuaren pribatutasun-politikaren arabera kudeatuko da. Euren pribatutasun-politika berrikustea gomendatzen dizugu, zure datu pertsonalak nola erabiliko diren ulertzeko. Beste alde batetik, gune honetan AAren ezaugarriekin izandako zure interakzioen erregistro bat gorde daiteke.</p>
<p>Zure datuak prozesatzen diren moduaren inguruko buruzko galderarik baduzu, galdetu zure irakasle edo erakundeko ikaskuntza-kudeatzaileei.</p>
<p>Aurrera eginda, politika hau ulertu eta onartzen duzunaren onespena ematen duzu.</p>';
