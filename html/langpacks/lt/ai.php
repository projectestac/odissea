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
 * Strings for component 'ai', language 'lt', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Priimti ir tęsti';
$string['action'] = 'Veiksmas';
$string['action_generate_image'] = 'Generuoti paveiksliuką';
$string['action_generate_image_desc'] = 'Generuoja paveiksliuką pagal teksto užklausą.';
$string['action_generate_text'] = 'Generuoti tekstą';
$string['action_generate_text_desc'] = 'Generuoja tekstą pagal teksto užklausą.';
$string['action_generate_text_instruction'] = 'Gausite naudotojo įvestą tekstą. Jūsų užduotis – sugeneruoti tekstą pagal jo užklausą. Laikykitės šių svarbių nurodymų:
    1. Santrauką pateikite tik paprastu tekstu.
    2. Neįtraukite jokio Markdown formatavimo, pasisveikinimų ar banalybių.';
$string['action_summarise_text'] = 'Apibendrinti tekstą';
$string['action_summarise_text_desc'] = 'Apibendrina kurso puslapio teksto turinį.';
$string['action_summarise_text_instruction'] = 'Gausite naudotojo įvestą tekstą. Jūsų užduotis – apibendrinti pateiktą tekstą. Laikykitės šių nurodymų:
    1. Sutrumpinkite: ilgas ištraukas sutraukite į pagrindines mintis.
    2. Supaprastinkite: sudėtingą informaciją pateikite taip, kad ją būtų lengviau suprasti, ypač besimokantiesiems.

Svarbūs nurodymai:
    1. Santrauką pateikite tik paprastu tekstu.
    2. Neįtraukite jokio Markdown formatavimo, pasisveikinimų ar banalybių.
    3. Siekite aiškumo, glaustumo ir prieinamumo.

Užtikrinkite, kad santrauka būtų lengvai skaitoma ir veiksmingai perteiktų pagrindines pradinio teksto mintis.';
$string['action_translate_text'] = 'Versti tekstą';
$string['action_translate_text_desc'] = 'Išversti pateiktą tekstą iš vienos kalbos į kitą.';
$string['actionsettingprovider'] = '{$a} veiksmo nustatymai';
$string['actionsettingprovider_desc'] = 'Šie nustatymai kontroliuoja, kaip {$a->providername} atlieka veiksmą {$a->actionname}.';
$string['ai'] = 'DI';
$string['aiplacements'] = 'DI įterpimo vietos';
$string['aiproviders'] = 'DI teikėjai';
$string['aiusagepolicy'] = 'DI naudojimo politika';
$string['availableplacements'] = 'Pasirinkite, kur galimi DI veiksmai';
$string['availableplacements_desc'] = 'Įterpimo vietos apibrėžia, kaip ir kur jūsų svetainėje galima naudoti dirbtinio intelekto veiksmus. Nustatymuose galite pasirinkti, kuriuos veiksmus galima naudoti kiekvienoje vietoje.';
$string['availableproviders'] = 'Tvarkykite DI paslaugų teikėjus, prijungtus prie jūsų VMA';
$string['availableproviders_desc'] = 'DI paslaugų teikėjai jūsų svetainę papildo DI funkcijomis, pvz., teksto santraukomis ar paveikslėlių generavimu.<br/>
Kiekvieno teikėjo veiksmus galite tvarkyti jo nustatymuose.';
$string['contentwatermark'] = 'Sugeneruota su DI';
$string['declineaipolicy'] = 'Atmesti';
$string['manageaiplacements'] = 'Tvarkykite dirbtinio intelekto įterpimo vietas';
$string['manageaiproviders'] = 'DI paslaugų teikėjų valdymas';
$string['noproviders'] = 'Šis veiksmas negalimas. Šiam veiksmui nesukonfigūruotas nė vienas <a href="{$a}">DI teikėjas</a>.';
$string['placement'] = 'Įterpimo vieta';
$string['placementactionsettings'] = 'Veiksmai';
$string['placementactionsettings_desc'] = 'DI veiksmai, galimi šiai įterpimo vietai.';
$string['placementsettings'] = 'Konkrečios įterpimo vietos nustatymai';
$string['placementsettings_desc'] = 'Šiais nustatymais valdoma, kaip ši DI įterpimo vieta jungiasi prie DI paslaugos ir kaip atliekamos susijusios operacijos.';
$string['privacy:metadata:ai_action_generate_image'] = 'Lentelė, kurioje saugomos naudotojų pateiktos paveikslėlių generavimo užklausos.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Sukurtų paveikslėlių kraštinių santykis.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Sugeneruotų paveiksliukų skaičius.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Paveiksliuko generavimo užklausa.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Sukurtų paveiksliukų kokybė.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Patikslinta sugeneruotų paveiksliukų užklausa.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Sugeneruotų paveikslėlių šaltinio URL.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Sugeneruotų paveiksliukų stilius.';
$string['privacy:metadata:ai_action_generate_text'] = 'Lentelė, kurioje saugomos naudotojų pateiktos teksto generavimo užklausos.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Unikali maiša, atspindinti modelio ir turinio būseną / versiją.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Faktinis tekstas, kurį DI modelis sugeneravo pagal įvestą užklausą.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Teksto generavimo užklausa.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'Atsakymo ID.';
$string['privacy:metadata:ai_action_register'] = 'Lentelė, kurioje saugomos naudotojų pateiktos veiksmo užklausos.';
$string['privacy:metadata:ai_action_register:actionid'] = 'Veiksmo užklausos ID.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Užklausos veiksmo pavadinimas.';
$string['privacy:metadata:ai_action_register:provider'] = 'Užklausą apdorojusio paslaugos teikėjo pavadinimas.';
$string['privacy:metadata:ai_action_register:success'] = 'Veiksmo užklausos būsena.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Užklausos įvykdymo laikas.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Užklausos sukūrimo laikas.';
$string['privacy:metadata:ai_action_register:userid'] = 'Užklausą pateikusio naudotojo ID.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Lentelė, kurioje saugomos naudotojų pateiktos teksto santraukos užklausos.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Unikali maiša, atspindinti modelio ir turinio būseną / versiją.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Faktinis tekstas, kurį DI modelis sugeneravo pagal įvestą užklausą.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Teksto apibendrinimo užklausa.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'Atsakymo ID.';
$string['privacy:metadata:ai_policy_register'] = 'Lentelė, kurioje saugoma kiekvieno naudotojo DI politikos priėmimo būsena.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'Konteksto, kurio duomenys buvo išsaugoti, ID.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Laikas, kai naudotojas sutiko su DI politika.';
$string['privacy:metadata:ai_policy_register:userid'] = 'Naudotojo, kurio duomenys buvo išsaugoti, ID.';
$string['provider'] = 'Paslaugos teikėjas';
$string['provideractionsettings'] = 'Veiksmai';
$string['provideractionsettings_desc'] = 'Pasirinkite ir sukonfigūruokite veiksmus, kuriuos {$a} gali atlikti jūsų svetainėje.';
$string['providers'] = 'Paslaugos teikėjai';
$string['providersettings'] = 'Nustatymai';
$string['userpolicy'] = '<h4><strong>Sveiki atvykę į naują DI funkciją!</strong></h4>
<p>Ši dirbtinio intelekto (DI) funkcija veikia tik išorinių didžiųjų kalbos modelių (LLM) pagrindu ir skirta pagerinti jūsų mokymosi ir mokymo patirtį. Prieš pradėdami naudotis šiomis DI paslaugomis, perskaitykite šią naudojimo politiką.</p>
<h4><strong>DI sugeneruoto turinio tikslumas</strong></h4>
<p>DI gali pateikti naudingų pasiūlymų ir informacijos, tačiau jos tikslumas gali skirtis. Visada dar kartą patikrinkite pateiktą informaciją, kad įsitikintumėte, jog ji tiksli, išsami ir tinka jūsų konkrečiai situacijai.</p>
<h4><strong>Kaip tvarkomi jūsų duomenys</strong></h4>
<p>Ši DI funkcija naudoja išorinius didžiuosius kalbos modelius (LLM). Jei naudojatės šia funkcija, visa jūsų pateikta informacija ar asmens duomenys bus tvarkomi pagal tų LLM privatumo politiką. Rekomenduojame perskaityti jų privatumo politiką, kad suprastumėte, kaip jie tvarkys jūsų duomenis. Be to, šioje svetainėje gali būti išsaugomas jūsų sąveikos su DI funkcijomis įrašas.</p>
<p>Jei turite klausimų apie tai, kaip tvarkomi jūsų duomenys, kreipkitės į savo dėstytojus ar mokymo organizaciją.</p>
<p>Tęsdami patvirtinate, kad suprantate šią politiką ir su ja sutinkate.</p>';
