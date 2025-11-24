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
 * Strings for component 'enrol_imsenterprise', language 'lt', version '4.5'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Kadangi įrašėte savo parametrus, galite';
$string['allowunenrol'] = 'Leisti IMS duomenims išregistruoti besimokančiuosius ir dėstytojus';
$string['allowunenrol_desc'] = 'Jei įjungta, kursų registracija bus pašalinta, kai tai bus nurodyta įmonės duomenyse.';
$string['basicsettings'] = 'Pagrindiniai parametrai';
$string['categoryidnumber'] = 'Leisti kategorijos ID numerį';
$string['categoryidnumber_desc'] = 'Jei įjungta, IMS Enterprise sukurs kategoriją su ID numeriu.';
$string['categoryseparator'] = 'Kategorijų skyriklio simbolis';
$string['categoryseparator_desc'] = 'Būtina, kai įjungtas „Leisti kategorijos ID numerį“. Simbolis, skirtas atskirti kategorijos pavadinimą ir ID numerį.';
$string['coursesettings'] = 'Kursų duomenų parinktys';
$string['createnewcategories'] = 'Kurti naujas (paslėptas) kursų kategorijas, jei nerasta „Moodle“';
$string['createnewcategories_desc'] = 'Jei kursų gaunamuose duomenyse pateiktas elementas &lt;org&gt;&lt;orgunit&gt;, jo turinys bus naudojamas kategorijai nurodyti, jei kursai kuriami iš juodraščio. Papildinys pakartotinai nekategorizuos esamų kursų.

Jei yra kategorija pageidaujamu pavadinimu, bus sukurta paslėpta kategorija.';
$string['createnewcourses'] = 'Kurti naujus (paslėptus) kursus, jei nerasta „Moodle“';
$string['createnewcourses_desc'] = 'Jei įjungta, IMS įmonės registracijos papildinys gali kurti naujus kursus bet kam, randamam IMS duomenyse, bet ne „Moodle“ duomenų bazėje. Bet kokie naujai sukurti kursai pradžioje yra paslėpti.';
$string['createnewusers'] = 'Kurti naudotojo paskyras dar neregistruotiems „Moodle“ naudotojams';
$string['createnewusers_desc'] = 'IMS Enterprise registracijos duomenys paprastai apibūdina naudotojų rinkinį. Jei įjungta, paskyras galima sukurti visiems naudotojams, kurių nėra Moodle duomenų bazėje.

Naudotojų pirmiausia ieškoma pagal jų ID numerį, o paskui – pagal Moodle naudotojo vardą. Slaptažodžiai neimportuojami IMS Enterprise papildiniu. Naudotojų autentifikavimui rekomenduojama naudoti autentifikavimo papildinį.';
$string['cronfrequency'] = 'Apdorojimo dažnis';
$string['deleteusers'] = 'Naikinti naudotojų paskyras, kai tai nurodyta IMS duomenyse';
$string['deleteusers_desc'] = 'Jei įjungta, IMS įmonės registracijos duomenys gali nurodyti naudotojo paskyrų naikinimą (jei vėliavėlė „recstatus“ nustatyta kaip 3, o tai reiškia paskyros naikinimą). Pagal „Moodle“ standartą naudotojo įrašas iš tikrųjų nepanaikinamas iš „Moodle“ duomenų bazės, bet vėliavėlė nustatyta žymėti paskyrą kaip panaikintą.';
$string['disableenrolmentandremoveallroles'] = 'Sustabdyti registraciją ir pašalinti vaidmenis';
$string['disableenrolonly'] = 'Sustabdyti tik registraciją';
$string['doitnow'] = 'atlikti IMS įmonės importavimą iš karto';
$string['emptyattribute'] = 'Palikiti jį tuščią';
$string['filelockedmail'] = 'Tekstinio failo, kurį naudojate IMS failu pagrįstoms registracijoms ({$a}), negalima panaikinti „Cron“ procesu. Paprastai tai reiškia, kad šiam veiksmui atlikti netinkamos teisės. Pakoreguokite teises, kad „Moodle“ galėtų panaikinti failą, antraip jis gali būti pakartotinai apdorotas.';
$string['filelockedmailsubject'] = 'Svarbi klaida: registracijos failas';
$string['fixcasepersonalnames'] = 'Pakeisti asmeninius pavadinimo atvejo vardus';
$string['fixcaseusernames'] = 'Pakeisti naudotojo vardus, kad jie būtų rašomi mažosiomis raidėmis';
$string['ignore'] = 'Nepaisyti';
$string['importimsfile'] = 'Importuoti IMS įmonės failą';
$string['imsenterprise:config'] = 'Konfigūruokite IMS Enterprise registracijos egzempliorius';
$string['imsenterprisecrontask'] = 'Registracijos failų apdorojimas';
$string['imsrolesdescription'] = 'IMS įmonės specifikacijoje yra 8 skirtingi vaidmenų tipai. Pasirinkite, kaip norėtumėte juos priskirti „Moodle“, įskaitant tai, ar kurio nors iš jų turėtų būti nepaisoma.';
$string['location'] = 'Failo vieta';
$string['logtolocation'] = 'Žurnalo failo išvesties vieta (neprisijungus rodoma tuščia)';
$string['mailadmins'] = 'Pranešti administratoriui el. paštu';
$string['mailusers'] = 'Pranešti naudotojams el. paštu';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS Enterprise registracijos pranešimai';
$string['miscsettings'] = 'Kita';
$string['nestedcategories'] = 'Leisti įdėtas kategorijas';
$string['nestedcategories_desc'] = 'Jei įjungta, IMS Enterprise sukurs įdėtas kategorijas';
$string['noaction'] = 'Jokių veiksmų';
$string['pluginname'] = 'IMS įmonės failas';
$string['pluginname_desc'] = 'Šis metodas pakartotinai patikrins ir apdoros specialiai suformatuotą tekstinį failą jūsų nurodytoje vietoje. Faile turi būti pateiktas IMS įmonės specifikacijas turintis asmuo, grupė ir narystės XML elementai.';
$string['privacy:metadata'] = 'IMS Enterprise failų registravimo papildinys nesaugo jokių asmens duomenų.';
$string['processphoto'] = 'Įtraukti naudotojo nuotrauką į profilį';
$string['processphotowarning'] = 'Įspėjimas: atvaizdo apdorojimas gali labai apsunkinti serverio darbą. Rekomenduojama nesuaktyvinti šios parinkties, jei numatoma, kad dalyvaus daug besimokančiųjų.';
$string['removeenrolmentandallroles'] = 'Ištrinti registraciją ir vaidmenis';
$string['restricttarget'] = 'Tik apdoroti duomenis, jei nurodytas šis tikslas';
$string['restricttarget_desc'] = 'IMS įmonės duomenų failo negalima naudoti keliems „tikslams“ – skirtingose MVS arba skirtingose mokyklų / universitetų sitemose. Galima nurodyti įmonės faile, kad duomenis numatyta naudoti vienoje arba keliose tikslinėse sistemose, jas pažymint žymėmis <target>, esančiomis žymėje <properties>. Iš tikrųjų neturėtumėte dėl to nerimauti. Palikite parametrą tuščią ir „Moodle“ visada apdoros duomenų failą, nesvarbu, ar tikslas bus nurodytas, ar ne. Kitą vertus, įveskite tikslų pavadinimą, kuri bus žymės <target> išvestis.';
$string['roles'] = 'Vaidmenys';
$string['settingfullname'] = 'IMS aprašymo žyma visam kurso pavadinimui';
$string['settingfullnamedescription'] = 'Visas pavadinimas yra privalomas kurso laukas, todėl savo IMS Enterprise faile turite apibrėžti pasirinktą aprašo žymą';
$string['settingshortname'] = 'Trumpojo kurso pavadinimo IMS aprašo žyma';
$string['settingshortnamedescription'] = 'Trumpasis pavadinimas yra privalomas kurso laukas, todėl turite apibrėžti pasirinktą aprašo žymą savo IMS Enterprise faile';
$string['settingsummary'] = 'IMS aprašo žyma kurso santraukai';
$string['settingsummarydescription'] = 'Neprivalomas laukas, pasirinkite „Palikti tuščią“, jei nenorite nurodyti kurso santraukos';
$string['sourcedidfallback'] = 'Naudokite „sourcedid“ asmens naudotojo ID, jei lauko „userid“ nerandate';
$string['sourcedidfallback_desc'] = 'IMS duomenyse laukas <sourceid> žymi asmens nuolatinį ID kodą, kuris naudojamas šaltinio sistemoje. Laukas <userid> yra atskiras laukas, kuriame turi būti ID kodas, kurį naudotojas naudoja prisijungdamas. Daugeliu atvejų šie du kodai gali būti tokie patys – bet ne visada. Kai kurioms besimokančiųjų informacinėms sistemoms nepavyksta išvesti lauko <userid>. Tokiu atveju, turėtumėte įjungti šį parametrą, kad jis leistų naudoti <sourcedid> kaip „Moodle“ naudotojo ID. Kitais atvejais palikite šį parametrą išjungtą.';
$string['truncatecoursecodes'] = 'Sutrumpinkite kursų kodus iki';
$string['truncatecoursecodes_desc'] = 'Tam tikrais atvejais kursų kodus prieš apdorodami galite sutrumpinti iki nurodyto ilgio. Jei norite tą daryti, į šį lauką įveskite simbolių skaičių. Kitu atveju, palikite lauką tuščią ir kodai nebus sutrumpinti.';
$string['unenrolaction'] = 'Išregistravimo veiksmas';
$string['unenrolaction_desc'] = 'Veiksmai, kurių reikia imtis, kai naudotojas išregistruojamas iš kurso (taikoma tik tada, kai įjungtas anksčiau nurodytas išregistravimo nustatymas).';
$string['updatecourses'] = 'Atnaujinti kursą';
$string['updatecourses_desc'] = 'Jei įjungta, IMS Enterprise registracijos papildinys gali atnaujinti pilnus ir trumpuosius kursų pavadinimus (jei "recstatus" vėliavėlė nustatyta į 2, o tai reiškia atnaujinimą).';
$string['updateusers'] = 'Atnaujinkite vartotojų paskyras, kai jos nurodytos IMS duomenyse';
$string['updateusers_desc'] = 'Jei įjungta, IMS Enterprise registracijos duomenys gali nurodyti naudotojų paskyrų pakeitimus (jei vėliavėlė "recstatus" nustatyta į 2, o tai reiškia atnaujinimą).';
$string['usecapitafix'] = 'Pažymėkite šį langelį, jei naudojate Capita (nes jų XML formatas šiek tiek skiriasi)';
$string['usecapitafix_desc'] = '„Capita“ sukurtos besimokančiųjų duomenų sistemos XML išvestyje rasta viena nedidelė klaida. Jei naudojate „Capita“ turėtumėte įjungti šį parametrą – kitais atvejais, palikite jį nepažymėtą.';
$string['usersettings'] = 'Naudotojo duomenų parinktys';
$string['zeroisnotruncation'] = '0 reiškia, kad netrumpinama';
