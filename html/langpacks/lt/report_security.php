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
 * Strings for component 'report_security', language 'lt', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Ši būsena patikrina, ar neseniai buvo aptikta klaida, ar ne, remiantis pagrindiniuose antivirusiniuose nustatymuose nustatytu slenksčiu.';
$string['check_antivirus_error'] = 'Per paskutinį {$a->lookback} buvo aptikta klaidų: {$a->errors}';
$string['check_antivirus_info'] = 'Šiuo metu neįjungtas joks antivirusinis skaitytuvas';
$string['check_antivirus_logstore_not_supported'] = 'Nepavyko patikrinti antivirusinių skaitytuvų būsenos dėl pasirinktos žurnalų saugyklos tipo';
$string['check_antivirus_name'] = 'Antivirusinė';
$string['check_antivirus_ok'] = 'Įgalintas (-i) {$a->scanners} antivirusinis (-i) skaitytuvas (-ai), per pastarąjį {$a->lookback} jokių problemų nebuvo aptikta';
$string['check_configrw_details'] = '<p>Rekomenduojame, kad įdiegus būtų pakeisti <code>config.php</code> failo leidimai, kad žiniatinklio serveris negalėtų keisti failo.
Atminkite, kad ši priemonė žymiai nepagerina serverio saugumo, nors gali sulėtinti arba apriboti bendruosius išnaudojimus.</p>';
$string['check_configrw_name'] = 'Config.php, į kurį galima rašyti';
$string['check_configrw_ok'] = 'PHP scenarijai negali modifikuoti config.php.';
$string['check_configrw_warning'] = 'PHP scenarijai gali modifikuoti config.php.';
$string['check_cookiesecure_details'] = '<p>Jei įjungtas https ryšys, rekomenduojama įjungti saugių slapukų siuntimą. Turėtumėte turėti nuolatinį peradresavimą iš http į https ir idealiu atveju teikti HSTS antraštes.</p>';
$string['check_cookiesecure_error'] = 'Įjunkite saugos slapukus';
$string['check_cookiesecure_http'] = 'Norėdami naudoti saugius slapukus, turite įjungti https';
$string['check_cookiesecure_name'] = 'Saugos slapukai';
$string['check_cookiesecure_ok'] = 'Saugos slapukai įjungti.';
$string['check_crawlers_details'] = '<p>Parametras Atidaryti „Google“ įjungia paieškos variklius, leidžiančius svečiams pasiekti kursus. Nėra prasmės įjungti šį parametrą, jei yra išjungta svečio prisijungimo galimybė.</p>';
$string['check_crawlers_error'] = 'Prieiga per paieškos variklius leidžiama, tačiau svečio prisijungimo galimybė yra išjungta.';
$string['check_crawlers_info'] = 'Paieškos variklius galima pasiekti turint svečio prieigą.';
$string['check_crawlers_name'] = 'Atidaryti „Google“';
$string['check_crawlers_ok'] = 'Prieiga per paieškos variklius neįjungta.';
$string['check_defaultuserrole_details'] = '<p>Visiems prisijungusiems naudotojams suteikiamos numatytojo naudotojo vaidmens galimybės. Įsitikinkite, kad šiam vaidmeniui nepriskirtos jokios rizikingos galimybės.</p> <p>Iš senstelėjusių numatytojo naudotojo vaidmens tipų palaikomas tik <em>Autentifikuotasis naudotojas</em>. Kursų peržiūros galimybė neturi būti įjungta.</p>';
$string['check_defaultuserrole_error'] = 'Numatytasis naudotojo vaidmuo {$a} neteisingai apibrėžtas!';
$string['check_defaultuserrole_name'] = 'Numatytasis visų naudotojų vaidmuo';
$string['check_defaultuserrole_notset'] = 'Nenustatytas numatytasis vaidmuo.';
$string['check_defaultuserrole_ok'] = 'Numatytojo visų naudotojų vaidmens apibrėžimas yra geras.';
$string['check_dirindex_info'] = 'Katalogų indeksas neturėtų būti įjungtas';
$string['check_displayerrors_details'] = '<p>Nerekomenduojama įjungti PHP parametro <code>display_errors</code> produkcinėse svetainėse, nes klaidų pranešimai gali atskleisti slaptos informacijos apie jūsų serverį.</p>';
$string['check_displayerrors_error'] = 'Įjungtas PHP parametras, įgalinantis rodyti klaidas. Rekomenduojama jį išjungti.';
$string['check_displayerrors_name'] = 'PHP klaidų rodymas';
$string['check_displayerrors_ok'] = 'PHP klaidų rodymo funkcija išjungta.';
$string['check_dotfiles_info'] = 'Visi taškiniai failai, išskyrus /.well-known/*, neturėtų būti vieši';
$string['check_emailchangeconfirmation_details'] = '<p>Rekomenduojama nustatyti, kad naudotojams savo profilyje pakeitus el. pašto adresą būtų privalomas patvirtinimo el. paštu žingsnis. Jei tai išjungta, pašto šiukšlintojai gali bandyti per serverį siųsti pašto šiukšles.</p> <p>Taip pat el. pašto laukas gali būti užrakintas, kad jo nepasiektų autentifikavimo papildiniai; ši galimybė čia neapsvarstyta.</p>';
$string['check_emailchangeconfirmation_error'] = 'Naudotojai gali įvesti norimą el. pašto adresą.';
$string['check_emailchangeconfirmation_info'] = 'Naudotojai gali įvesti tik tokius el. pašto adresus, kurių domenai yra leidžiami naudoti.';
$string['check_emailchangeconfirmation_name'] = 'El. pašto keitimo patvirtinimas';
$string['check_emailchangeconfirmation_ok'] = 'Patvirtinimas, kad keičiamas el. pašto adresas naudotojo profilyje.';
$string['check_embed_details'] = '<p>Labai pavojinga leisti įdėti neribotą kiekį objektų – bet kuris registruotasis naudotojas gali paleisti XSS ataką prieš kitus serverio naudotojus. Šis parametras turėtų būti išjungtas gamybos serveriuose.</p>';
$string['check_embed_error'] = 'Įjungta galimybė įdėti neribotą kiekį objektų – tai labai pavojinga daugumai serverių.';
$string['check_embed_name'] = 'Leisti EMBED ir OBJECT';
$string['check_embed_ok'] = 'Galimybė įdėti neribotą kiekį objektų išjungta.';
$string['check_frontpagerole_details'] = 'p>Numatytasis svetainės pradinio puslapio vaidmuo suteikiamas visiems registruotiesiems naudotojams, kad jie galėtų atlikti veiksmus svetainės pradiniame puslapyje. Įsitikinkite, kad šiam vaidmeniui nepriskirtos jokios rizikingos galimybės.</p> <p>Rekomenduojama šiam tikslui sukurti atskirą vaidmenį ir nenaudoti senojo tipo vaidmens.</p>';
$string['check_frontpagerole_error'] = 'Aptiktas neteisingai apibrėžtas svetainės pradinio puslapio vaidmuo {$a}!';
$string['check_frontpagerole_name'] = 'Svetainės pradinio puslapio vaidmuo';
$string['check_frontpagerole_notset'] = 'Nenustatytas svetainės pradinio puslapio vaidmuo.';
$string['check_frontpagerole_ok'] = 'Svetainės pradinio puslapio vaidmens apibrėžimas yra geras.';
$string['check_guestrole_details'] = '<p>Svečio vaidmuo naudojamas svečiams, neprisijungusiems naudotojams ir laikinajai svečio prieigai prie kursų. Įsitikinkite, kad šiam vaidmeniui nepriskirtos jokios rizikingos galimybės.</p> <p>Iš senstelėjusių tipų, tinkamų svečio vaidmeniui, palaikomas tik <em>Svečias</em>.</p>';
$string['check_guestrole_error'] = 'Svečio vaidmuo {$a} neteisingai apibrėžtas!';
$string['check_guestrole_name'] = 'Svečio vaidmuo';
$string['check_guestrole_notset'] = 'Nenustatytas svečio vaidmuo.';
$string['check_guestrole_ok'] = 'Svečio vaidmens apibrėžimas yra geras.';
$string['check_nodemodules_details'] = '<p>Kataloge <code>{$a->path}</code> yra Node.js moduliai ir jų priklausomybės, kuriuos paprastai įdiegia NPM programa. Šių modulių gali prireikti vietiniam Moodle kūrimui, pvz., naudojant grunto sistemą. Jų nereikia norint paleisti Moodle svetainę produkcinėje versijoje, be to, juose gali būti potencialiai pavojingo kodo, dėl kurio jūsų svetainė gali būti užpulta nuotoliniu būdu.</p><p>Primygtinai rekomenduojama pašalinti katalogą, jei svetainė pasiekiama per viešą URL, arba bent jau uždrausti žiniatinklio prieigą prie jo savo žiniatinklio serverio konfigūracijoje.</p>';
$string['check_nodemodules_info'] = 'Node_modules katalogo neturėtų būti viešose svetainėse.';
$string['check_nodemodules_name'] = 'Node.js modulių katalogas';
$string['check_openprofiles_details'] = '<p>Atidarytais naudotojų profiliais gali piktnaudžiauti pašto šiukšlintojai. Rekomenduojama įjungti arba <code>Reikalauti, kad naudotojai prisijungtų prie profilių</code>, arba <code>Reikalauti, kad naudotojai prisijungtų</code>.</p>';
$string['check_openprofiles_error'] = 'Visi gali peržiūrėti naudotojų profilius neprisijungę.';
$string['check_openprofiles_name'] = 'Atidaryti naudotojų profiliai';
$string['check_openprofiles_ok'] = 'Reikalaujama prisijungti norint peržiūrėti naudotojų profilius.';
$string['check_passwordpolicy_details'] = '<p>Rekomenduojama nustatyti reikalavimus slaptažodžiui, nes slaptažodžio atspėjimas dažnai yra lengviausias būdas gauti neleistiną prieigą.
Tačiau nereikėtų nustatyti per griežtų reikalavimų, nes tai gali lemti, kad naudotojams bus sudėtinga prisiminti savo slaptažodį ir jie arba jį pamirš, arba turės užsirašyti.</p>';
$string['check_passwordpolicy_error'] = 'Reikalavimai slaptažodžiui nenustatyti.';
$string['check_passwordpolicy_name'] = 'Reikalavimai slaptažodžiui';
$string['check_passwordpolicy_ok'] = 'Reikalavimai slaptažodžiui įjungti.';
$string['check_preventexecpath_details'] = '<p>Leidimas nustatyti vykdomuosius kelius per administratoriaus GUI yra privilegijų eskalavimo vektorius. Tai turi būti priverstinai nustatyta config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Vykdomi keliai';
$string['check_preventexecpath_ok'] = 'Vykdomi keliai nustatomi tik config.php.';
$string['check_preventexecpath_warning'] = 'Vykdomus kelius galima nustatyti administratoriaus GUI.';
$string['check_publicpaths_403'] = '(Grąžino 403, idealiu atveju turėtų būti 404)';
$string['check_publicpaths_generic'] = '{$a} failai neturėtų būti vieši';
$string['check_publicpaths_name'] = 'Patikrinti visus viešus/privačius kelius';
$string['check_publicpaths_ok'] = 'Visi vidiniai keliai nėra viešai prieinami';
$string['check_publicpaths_warning'] = 'Kai kurie vidiniai keliai yra viešai prieinami';
$string['check_riskadmin_detailsok'] = '<p>Patikrinkite pateiktą sistemos administratorių sąrašą:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Patikrinkite pateiktą sistemos administratorių sąrašą:</p>{$a->admins} <p>Rekomenduojama priskirti administratoriaus vaidmenį tik sistemos kontekste. Šiems naudotojams priskirtas (nepalaikomas) administratoriaus vaidmuo kituose kontekstuose:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratoriai';
$string['check_riskadmin_ok'] = 'Serverio administratorių rasta {$a}.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) peržiūrėti vaidmens priskyrimą</a>';
$string['check_riskadmin_warning'] = 'Serverio administratorių rasta {$a->admincount}, o nepalaikomų administratoriaus vaidmens priskyrimų rasta {$a->unsupcount}.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Šie atlikti pakeitimai suteikia naudotojams galimybę įtraukti naudotojo duomenis kuriant atsargines duomenų kopijas. Įsitikinkite, kad ši teisė yra reikalinga.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Šiuo metu šie sistemos vaidmenys suteikia naudotojams galimybę įtraukti naudotojo duomenis kuriant atsargines duomenų kopijas. Įsitikinkite, kad ši teisė yra reikalinga.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Aukščiau nurodyti vaidmenys arba pakeitimai vietinėje sistemoje toliau išvardytų naudotojų paskyroms šiuo metu suteikia teisę kurti atsargines kopijas, apimančias šiuose kursuose įregistruotųjų naudotojų asmeninius duomenis. Įsitikinkite, kad tos paskyros (a) yra patikimos ir (b) apsaugotos stipriais slaptažodžiais:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Jokie vaidmenys nesuteikia aiškių teisių kurti atsarginių naudotojo duomenų kopijų. Tačiau atminkite, kad administratoriai, turėdami galimybes daryti „viską“, vis dar gali jas kurti.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} kontekste {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href=rdblquote{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Naudotojo duomenų atsarginė kopija';
$string['check_riskbackup_ok'] = 'Jokie vaidmenys nesuteikia aiškių teisių daryti atsargines naudotojo duomenų kopijas';
$string['check_riskbackup_unassign'] = 'Jokie vaidmenys nesuteikia aiškių teisių kurti atsarginių naudotojo duomenų kopijų';
$string['check_riskbackup_warning'] = 'Vaidmenų rasta {$a->rolecount}, pakeitimų rasta {$a->overridecount}, o naudotojų rasta {$a->usercount} – visi jie turi galimybę kurti atsargines naudotojo duomenų kopijas.';
$string['check_riskxss_details'] = '<p>RISK_XSS nurodo visas rizikingas galimybes, kuriomis gali naudotis tik patikimi naudotojai.</p> <p>Patikrinkite toliau pateiktą naudotojų sąrašą, kad būtumėte tikri, jog visiškai pasitikite jų veikla šiame serveryje:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS patikimi naudotojai';
$string['check_riskxss_warning'] = 'RISK_XSS – naudotojų, kurie turi būti patikimi, rasta {$a}.';
$string['check_unsecuredataroot_details'] = '<p>Neturi būti galima pasiekti šakninio duomenų katalogo per žiniatinklį. Geriausias būdas užtikrinti, kad katalogas yra nepasiekiamas, yra naudoti katalogą už viešai prieinamo žiniatinklio katalogo ribų.</p> <p>Jei perkelsite katalogą, atitinkamai turėsite atnaujinti <code>$CFG->dataroot</code> parametrą faile <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Šakninis katalogas <code>{$a}</code> yra netinkamoje vietoje ir jis yra viešai prieinamas žiniatinklyje!';
$string['check_unsecuredataroot_name'] = 'Nesaugus šakninis duomenų katalogas';
$string['check_unsecuredataroot_ok'] = 'Neturi būti galima pasiekti šakninio duomenų katalogo per žiniatinklį.';
$string['check_unsecuredataroot_warning'] = 'Šakninis katalogas <code>{$a}</code> yra netinkamoje vietoje ir jis gali būti viešai prieinamas žiniatinklyje!';
$string['check_upgradefile_info'] = 'Atnaujinimo pastabų failai neturėtų būti vieši';
$string['check_vendordir_details'] = '<p>Kataloge <code>{$a->path}</code> yra įvairių trečiųjų šalių bibliotekų ir jų priklausomybių, kurias paprastai įdiegia PHP Composer. Šios bibliotekos gali būti reikalingos vietiniam Moodle kūrimui, pavyzdžiui, PHPUnit sistemai diegti. Jie nereikalingi norint paleisti Moodle svetainę produkcinėje versijoje, be to, juose gali būti potencialiai pavojingo kodo, dėl kurio jūsų svetainė gali būti užpulta nuotoliniu būdu.</p><p>Primygtinai rekomenduojama pašalinti katalogą, jei svetainė pasiekiama per viešą URL, arba bent jau uždrausti žiniatinklio prieigą prie jo savo žiniatinklio serverio konfigūracijoje.</p>';
$string['check_vendordir_info'] = 'Pardavėjų katalogas turėtų būti viešose svetainėse.';
$string['check_vendordir_name'] = 'Pardavėjų katalogas';
$string['check_webcron_details'] = '<p>Paleidus „cron“ iš interneto naršyklės, anoniminiams naudotojams gali būti atskleista privilegijuota informacija. Rekomenduojama „cron“ paleisti tik iš komandinės eilutės arba nustatyti „cron“ slaptažodį nuotolinei prieigai.</p>';
$string['check_webcron_name'] = 'Žiniatinklio periodinės užduotys';
$string['check_webcron_ok'] = 'Anoniminiai naudotojai negali pasiekti „cron“.';
$string['check_webcron_warning'] = 'Anoniminiai naudotojai gali pasiekti „cron“.';
$string['configuration'] = 'Konfigūracija';
$string['description'] = 'Aprašas';
$string['details'] = 'Išsami informacija';
$string['eventreportviewed'] = 'Peržiūrėta saugos patikros ataskaita';
$string['issue'] = 'Problema';
$string['pluginname'] = 'Saugumo patikrinimai';
$string['privacy:metadata'] = 'Saugumo apžvalgos papildinys nesaugo jokių asmeninių duomenų.';
$string['security:view'] = 'Peržiūrėti saugos ataskaitą';
$string['timewarning'] = 'Duomenų apdorojimas gali trukti ilgai, būkite kantrūs...';
