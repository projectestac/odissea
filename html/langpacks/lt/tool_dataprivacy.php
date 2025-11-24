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
 * Strings for component 'tool_dataprivacy', language 'lt', version '4.5'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Veiklos ir ištekliai';
$string['addcategory'] = 'Įtraukti kategoriją';
$string['addnewdefaults'] = 'Pridėti naują modulio numatytąjį';
$string['addpurpose'] = 'Įtraukti tikslą';
$string['addroleoverride'] = 'Pridėti vaidmens keitimą';
$string['allowfiltering'] = 'Leisti filtruoti eksportą pagal kursą';
$string['approve'] = 'Patvirtinti';
$string['approvedrequestsubmitted'] = 'Jūsų užklausa buvo pateikta ir netrukus bus apdorota.';
$string['approverequest'] = 'Patvirtinti užklausą';
$string['approverequestall'] = 'Patvirtinti užklausą (visi duomenys)';
$string['approveselectedcourses'] = 'Patvirtinti pasirinktus kursus';
$string['automaticdatadeletionapproval'] = 'Automatinio duomenų ištrynimo prašymo patvirtinimas';
$string['automaticdatadeletionapproval_desc'] = 'Jei įgalinta, duomenų ištrynimo užklausos patvirtinamos automatiškai.<br/>Atminkite, kad automatinis patvirtinimas bus taikomas tik naujoms duomenų ištrynimo užklausoms, kai šis nustatymas įgalintas. Esamas duomenų ištrynimo užklausas, laukiančias patvirtinimo, privatumo pareigūnas vis tiek turės patvirtinti rankiniu būdu.';
$string['automaticdataexportapproval'] = 'Automatinis duomenų eksporto užklausos patvirtinimas';
$string['automaticdataexportapproval_desc'] = 'Jei įgalinta, duomenų eksportavimo užklausos patvirtinamos automatiškai.<br/>Atminkite, kad automatinis patvirtinimas bus taikomas tik naujoms duomenų eksportavimo užklausoms, kai šis nustatymas įgalintas. Esamas duomenų eksportavimo užklausas, laukiančias patvirtinimo, privatumo pareigūnas vis tiek turės patvirtinti rankiniu būdu.';
$string['automaticdeletionrequests'] = 'Sukurti automatines duomenų ištrynimo užklausas';
$string['automaticdeletionrequests_desc'] = 'Jei įjungta, duomenų ištrynimo užklausa bus sukurta automatiškai visoms naudotojų paskyroms, ištrintoms rankiniu būdu.';
$string['bulkapproverequests'] = 'Patvirtinti prašymus';
$string['bulkdenyrequests'] = 'Atmesti prašymus';
$string['cachedef_contextlevel'] = 'Konteksto lygių tikslas ir kategorija';
$string['cachedef_purpose'] = 'Duomenų tikslai';
$string['cachedef_purpose_overrides'] = 'Duomenų privatumo įrankyje nepaisoma tikslo';
$string['cancelrequest'] = 'Atšaukti užklausą';
$string['cancelrequestconfirmation'] = 'Ar tikrai norite atšaukti šią duomenų užklausą?';
$string['cannotreset'] = 'Nepavyko iš naujo nustatyti šios užklausos. Iš naujo galima nustatyti tik atmestas užklausas.';
$string['categories'] = 'Kategorijos';
$string['categorieslist'] = 'Duomenų kategorijų sąrašas';
$string['category'] = 'Kategorija';
$string['category_help'] = 'Duomenų registro kategorija apibūdina duomenų tipą. Galima įtraukti naują kategoriją arba, jei pasirinkta „Paveldėti“, taikoma aukštesniojo konteksto duomenų kategorija. Kontekstai yra (nuo žemo iki aukšto): Blokai> Veiklos moduliai> Kursai> Kursų kategorijos> Svetainė.';
$string['categorycreated'] = 'Kategorija sukurta';
$string['categorydefault'] = 'Numatytoji kategorija';
$string['categorydefault_help'] = 'Numatytoji kategorija yra duomenų kategorija, taikoma bet kuriems naujiems atvejams. Jei pasirinkta  „Paveldėti“, taikoma aukštesniojo konteksto duomenų kategorija. Kontekstai yra (nuo žemo iki aukšto): Blokai> Veiklos moduliai> Kursai> Kursų kategorijos> Naudotojas> Svetainė.';
$string['categoryupdated'] = 'Kategorija atnaujinta';
$string['close'] = 'Uždaryti';
$string['compliant'] = 'Atitinka';
$string['confirmapproval'] = 'Ar tikrai norite patvirtinti duomenų užklausą?';
$string['confirmbulkapproval'] = 'Ar tikrai norite masiškai patvirtinti pasirinktas duomenų užklausas?';
$string['confirmbulkdenial'] = 'Ar tikrai norite masiškai atmesti pasirinktas duomenų užklausas?';
$string['confirmcompletion'] = 'Ar tikrai norite pažymėti šią naudotojo užklausą kaip užbaigtą?';
$string['confirmcontextdeletion'] = 'Ar tikrai norite patvirtinti pasirinktų kontekstų naikinimą? Tai taip pat panaikins visus naudotojo duomenis, susijusius su jų atitinkamais susiejimais.';
$string['confirmdenial'] = 'Ar tikrai norite atmesti duomenų užklausą?';
$string['confirmrequestresubmit'] = 'Ar tikrai norite atšaukti dabartinę {$a->type} užklausą, skirtą {$a->username}, ir pateikti ją iš naujo?';
$string['contactdataprotectionofficer'] = 'Susisiekti su privatumo pareigūnu';
$string['contactdataprotectionofficer_desc'] = 'Jei įjungta, naudotojai galės susisiekti su privatumo pareigūnu ir pateikti duomenų užklausą naudodami nuorodą savo profilio puslapyje.';
$string['contactdpoviaprivacypolicy'] = 'Susisiekti su duomenų apsaugos pareigūnu, kaip nurodyta privatumo politikoje.';
$string['contextlevelname10'] = 'Svetainė';
$string['contextlevelname30'] = 'Naudotojai';
$string['contextlevelname40'] = 'Kurso kategorijos';
$string['contextlevelname50'] = 'Kursai';
$string['contextlevelname70'] = 'Veiklos moduliai';
$string['contextlevelname80'] = 'Blokai';
$string['contextpurposecategorysaved'] = 'Tikslas ir kategorija išsaugota.';
$string['createcategory'] = 'Kurti duomenų kategoriją';
$string['createdeletedatarequest'] = 'Sukurti duomenų ištrynimo užklausą';
$string['createnewdatarequest'] = 'Sukurti naują duomenų užklausą';
$string['createpurpose'] = 'Kurti duomenų tikslą';
$string['creationauto'] = 'Automatiškai';
$string['creationmanual'] = 'Rankiniu būdu';
$string['datadeletion'] = 'Duomenų naikinimas';
$string['datadeletionpagehelp'] = 'Čia pateikiami duomenys, kurių saugojimo terminas pasibaigęs. Peržiūrėkite ir patvirtinkite duomenų ištrynimą, kurį atliks suplanuota užduotis „Ištrinti pasibaigusius kontekstus“.';
$string['dataprivacy:downloadallrequests'] = 'Atsisiųsti eksportuotus duomenis visiems';
$string['dataprivacy:downloadownrequest'] = 'Atsisiųsti savo eksportuotus duomenis';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Prašyti ištrinti nepilnamečių duomenis';
$string['dataprivacy:makedatarequestsforchildren'] = 'Sukurti duomenų užklausą nepilnamečiams';
$string['dataprivacy:managedataregistry'] = 'Valdyti duomenų registrą';
$string['dataprivacy:managedatarequests'] = 'Valdyti duomenų užklausas';
$string['dataprivacy:requestdelete'] = 'Prašyti duomenų ištrynimo sau';
$string['dataprivacy:requestdeleteforotheruser'] = 'Prašyti ištrinti duomenis kito naudotojo vardu';
$string['dataregistry'] = 'Duomenų registras';
$string['dataregistryinfo'] = 'Duomenų registras leidžia nustatyti kategorijas (duomenų rūšis) ir tikslus (duomenų tvarkymo priežastis) visam svetainės turiniui – nuo naudotojų ir kursų iki veiklų ir blokų. Kiekvienam tikslui gali būti nustatytas saugojimo laikotarpis. Pasibaigus saugojimo laikotarpiui, duomenys pažymimi ir įtraukiami į sąrašą, kad juos būtų galima ištrinti, laukiant administratoriaus patvirtinimo.';
$string['datarequestcreatedforuser'] = 'Duomenų užklausa sukurta {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Automatiškai sukurta iš suplanuotos užduoties (išanksto ištrintas naudotojas).';
$string['datarequestcreatedupondelete'] = 'Automatiškai sukurta ištrynus naudotoją.';
$string['datarequestemailsubject'] = 'Duomenų užklausa: {$a}';
$string['datarequests'] = 'Duomenų užklausos';
$string['dataretentionexplanation'] = 'Šioje santraukoje pateikiamos naudotojo duomenų saugojimo numatytosios kategorijos ir saugojimo tikslai. Tam tikros sritys gali turėti daugiau konkrečių kategorijų ir tikslų nei nurodyta čia.';
$string['dataretentionsummary'] = 'Duomenų saugojimo santrauka';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Prašoma data';
$string['daterequesteddetail'] = 'Date requested:';
$string['defaultexpired'] = 'Duomenys visiems naudotojams';
$string['defaultexpiredexcept'] = 'Duomenys apie visus naudotojus, išskyrus tuos, kurie atlieka bet kurį iš šių vaidmenų:<br>
{$a->unexpired}';
$string['defaultsinfo'] = 'Numatytosios kategorijos ir tikslai taikomi visiems naujiems ir esamiems atvejams, kai reikšmė nenustatyta.';
$string['defaultssaved'] = 'Numatytieji parametrai išsaugoti.';
$string['defaultswarninginfo'] = 'Įspėjimas: pakeitus šiuos numatytuosius nustatymus gali būti paveiktas esamų egzempliorių saugojimo laikotarpis.';
$string['defaultunexpired'] = 'Tik naudotojų, turinčių bet kurį iš šių vaidmenų, duomenys:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Tik naudotojų, kurie turi bet kurį iš šių vaidmenų, duomenys:<br>
{$a->expired}
Nebent jie taip pat turibet kurį iš šių vaidmenų:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Naikinti kategoriją';
$string['deletecategorytext'] = 'Ar tikrai norite naikinti kategoriją "{$a}"?';
$string['deletedefaults'] = 'Ištrinti numatytuosius nustatymus: {$a}';
$string['deletedefaultsconfirmation'] = 'Ar tikrai norite ištrinti numatytąją {$a} modulių kategoriją ir paskirtį?';
$string['deleteexistingdeleteduserstask'] = 'Sukurkite duomenų ištrynimo užklausą jau esamiems ištrintiems naudotojams';
$string['deleteexpiredcontextstask'] = 'Naikinti pasibaigusius kontekstus';
$string['deleteexpireddatarequeststask'] = 'Ištrinti pasibaigusio galiojimo duomenų užklausos eksportavimo failus';
$string['deletemyaccount'] = 'Naikinti mano paskyrą';
$string['deletepurpose'] = 'Pašalinti tikslą';
$string['deletepurposetext'] = 'Ar tikrai norite pašalinti tikslą "{$a}"?';
$string['deny'] = 'Atmesti';
$string['denyrequest'] = 'Atmesti užklausą';
$string['deprecated'] = 'Nebenaudojama';
$string['deprecatedexplanation'] = 'Šis papildinys naudoja seną vienos iš privatumo sąsajų versiją ir turėtų būti atnaujintas.';
$string['download'] = 'Atsisiųsti';
$string['downloadexpireduser'] = 'Atsisiuntimo galiojimo laikas baigėsi. Jei norite eksportuoti savo asmens duomenis, pateikite naują prašymą.';
$string['dporolemapping'] = 'Privatumo pareigūno vaidmens struktūra';
$string['dporolemapping_desc'] = 'Privatumo pareigūnas gali tvarkyti duomenų užklausas. Kad vaidmuo būtų įtrauktas į privatumo pareigūno vaidmenų susiejimo parinktis, turi būti leista naudoti galimybių įrankį/dataprivacy:managedatarequests.';
$string['duplicaterole'] = 'Vaidmuo jau nurodytas';
$string['editcategories'] = 'Redaguoti kategorijas';
$string['editcategory'] = 'Redaguoti kategoriją';
$string['editdefaults'] = 'Redaguoti numatytuosius nustatymus: {$a}';
$string['editmoduledefaults'] = 'Redaguoti modulio numatytuosius nustatymus';
$string['editpurpose'] = 'Redaguoti tikslą';
$string['editpurposes'] = 'Redaguoti tikslus';
$string['effectiveretentionperiodcourse'] = '{$a} (po kurso pabaigos datos)';
$string['effectiveretentionperioduser'] = '{$a} (nuo paskutinio naudotojo prieigos prie svetainės)';
$string['emailsalutation'] = 'Gerb. {$a},';
$string['errorcannotrequestdeleteforother'] = 'Neturite leidimo sukurti šio naudotojo ištrynimo užklausos.';
$string['errorcannotrequestdeleteforself'] = 'Neturite leidimo patys sukurti ištrynimo užklausos.';
$string['errorcannotrequestexportforself'] = 'Neturite leidimo kurti eksportavimo užklausos sau.';
$string['errorcontactdpodisabled'] = 'Galimybė susisiekti su privatumo pareigūnu išjungta.';
$string['errorcontexthasunexpiredchildren'] = 'Kontekstas „{$a}“ vis dar turi antrinių kontekstų, kurių galiojimo laikas dar nepasibaigęs. Joks kontekstas nebuvo pažymėtas ištrinti.';
$string['errorinvalidrequestcomments'] = 'Komentarų lauke gali būti tik paprastas tekstas.';
$string['errorinvalidrequestcreationmethod'] = 'Netinkamas užklausos kūrimo metodas!';
$string['errorinvalidrequeststatus'] = 'Netinkama užklausos būsena!';
$string['errorinvalidrequesttype'] = 'Netinkamas užklausos tipas!';
$string['errornocapabilitytorequestforothers'] = 'Naudotojas {$a->requestedby} neturi galimybės pateikti duomenų užklausos naudotojo {$a->userid} vardu';
$string['errornoexpiredcontexts'] = 'Nėra pasibaigusių kontekstų, kuriuos būtų galima apdoroti';
$string['errornoselectedcourse'] = 'Turite pasirinkti bent vieną kursą';
$string['errorrequestalreadyexists'] = 'Jau turite vykdomą užklausą.';
$string['errorrequestnotfound'] = 'Užklausa nerasta';
$string['errorrequestnotwaitingforapproval'] = 'Prašymas nelaukia patvirtinimo. Arba jis dar neparengtas, arba jau apdorotas.';
$string['errorsendingmessagetodpo'] = 'Bandant išsiųsti pranešimą {$a} įvyko klaida.';
$string['exceptionnotificationbody'] = '<p>Išimtis įvyko kreipiantis <b>{$a->fullmethodname}</b>.<br>Tai reiškia, kad papildinys <b>{$a->component}</b> neužbaigė duomenų apdorojimo. Papildinio kūrėjui gali būti perduota ši išimties informacija:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Apdorojant privatumo duomenis įvyko išimtis';
$string['expandplugin'] = 'Išskleisti ir sutraukti papildinį.';
$string['expandplugintype'] = 'Išskleisti ir sutraukti papildinio tipą.';
$string['expiredretentionperiodtask'] = 'Pasibaigęs saugojimo laikotarpis';
$string['expiredrolewithretention'] = '{$a->retention} (Pasibaigęs)';
$string['expiry'] = 'Pabaiga';
$string['explanationtitle'] = 'Puslapyje naudojamos piktogramos ir jų paaiškinimai.';
$string['external'] = 'Papildomas';
$string['externalexplanation'] = 'Papildomas papildinys įdiegtas svetainėje.';
$string['filterexportdata'] = 'Patvirtinti užklausą (pasirinktų kursų duomenys)';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Svetainės pagrindinio puslapio kursas';
$string['gdpr_art_6_1_a_description'] = 'Duomenų subjektas davė sutikimą, kad jo asmens duomenys būtų tvarkomi vienu ar keliais konkrečiais tikslais';
$string['gdpr_art_6_1_a_name'] = 'Sutikimas (GDPR Str. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Tvarkyti būtina siekiant įvykdyti sutartį, kurios šalis yra duomenų subjektas, arba siekiant duomenų subjekto prašymu imtis veiksmų prieš sudarant sutartį';
$string['gdpr_art_6_1_b_name'] = 'Sutartis (BDAR str. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Tvarkyti būtina, kad būtų laikomasi teisinės prievolės, kuri yra taikoma duomenų valdytojui';
$string['gdpr_art_6_1_c_name'] = 'Teisinė prievolė (BDAR 6 straipsnio 1 dalies c punktas)';
$string['gdpr_art_6_1_d_description'] = 'Duomenų tvarkymas būtinas siekiant apsaugoti gyvybiškai svarbius duomenų subjekto ar kito fizinio asmens interesus';
$string['gdpr_art_6_1_d_name'] = 'Gyvybiškai svarbūs interesai (BDAR str. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Tvarkyti būtina, kad būtų galima atlikti užduotį, atliekamą ginant viešąjį interesą arba vykdant duomenų valdytojui suteiktus oficialius įgaliojimus';
$string['gdpr_art_6_1_e_name'] = 'Viešoji užduotis (BDAR str. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Tvarkyti būtina siekiant teisėtų interesų, kurių siekia duomenų valdytojas arba trečioji šalis, išskyrus atvejus, kai tokie interesai yra svarbesni už duomenų subjekto interesus arba pagrindines teises ir laisves, dėl kurių būtina apsaugoti asmens duomenis, ypač kai duomenys subjektas yra vaikas';
$string['gdpr_art_6_1_f_name'] = 'Teisėti interesai (BDAR str. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Duomenų subjektas davė aiškų sutikimą, kad tie asmens duomenys būtų tvarkomi vienu ar keliais konkrečiais tikslais, išskyrus atvejus, kai Sąjungos ar valstybės narės teisės aktai numato, kad duomenų subjektas negali panaikinti BDAR 9 straipsnio 1 dalyje nurodyto draudimo.';
$string['gdpr_art_9_2_a_name'] = 'Aiškus sutikimas (BDAR str. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Duomenų tvarkymas būtinas siekiant vykdyti duomenų valdytojo arba duomenų subjekto pareigas ir naudotis konkrečiomis teisėmis darbo ir socialinės apsaugos bei socialinės apsaugos teisės srityje, jei tai leidžiama pagal Sąjungos ar valstybės narės teisę arba kolektyvine sutartimi pagal valstybės narės teisę, numatančia tinkamas duomenų subjekto pagrindinių teisių ir interesų apsaugos priemones';
$string['gdpr_art_9_2_b_name'] = 'Darbo ir socialinės apsaugos/apsaugos įstatymas (BDAR str. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Tvarkyti būtina siekiant apsaugoti gyvybinius duomenų subjekto ar kito fizinio asmens interesus, kai duomenų subjektas fiziškai ar teisiškai negali duoti sutikimo';
$string['gdpr_art_9_2_c_name'] = 'Gyvybiškų interesų apsauga (BDAR 9 straipsnio 2 dalies c punktas)';
$string['gdpr_art_9_2_d_description'] = 'Tvarkymas vykdomas vykdant teisėtą veiklą su atitinkamomis garantijomis, kurias atlieka fondas, asociacija ar bet kuri kita pelno nesiekianti įstaiga, turinti politinį, filosofinį, religinį ar profesinių sąjungų tikslą, ir su sąlyga, kad tvarkymas yra susijęs tik su organo nariams ar buvusiems nariams arba asmenims, kurie nuolat su ja palaiko ryšius dėl jos tikslų ir kad asmens duomenys nebūtų atskleidžiami už tos įstaigos ribų be duomenų subjektų sutikimo.';
$string['gdpr_art_9_2_d_name'] = 'Teisėta veikla, susijusi su fondo, asociacijos ar kitos ne pelno organizacijos nariais / glaudžiais ryšiais (BDAR 9 straipsnio 2 dalies d punktas)';
$string['gdpr_art_9_2_e_description'] = 'Tvarkymas susijęs su asmens duomenimis, kuriuos duomenų subjektas aiškiai paskelbė viešai';
$string['gdpr_art_9_2_e_name'] = 'Duomenų subjekto viešai paskelbti duomenys (BDAR 9 straipsnio 2 dalies e punktas)';
$string['gdpr_art_9_2_f_description'] = 'Tvarkyti būtina siekiant pareikšti, įgyvendinti ar ginti teisinius reikalavimus arba kai teismai veikia kaip teisminiai';
$string['gdpr_art_9_2_f_name'] = 'Teisiniai reikalavimai ir ieškiniai teisme (BDAR str. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Tvarkyti būtina dėl esminio viešojo intereso, remiantis Sąjungos arba valstybės narės teise, kuri turi būti proporcinga siekiamam tikslui, atsižvelgiant į teisės į duomenų apsaugą esmę ir numato tinkamas bei konkrečias priemones pagrindinėms teisėms ir duomenų subjekto interesus';
$string['gdpr_art_9_2_g_name'] = 'Esminis viešasis interesas (BDAR 9 straipsnio 2 dalies g punktas)';
$string['gdpr_art_9_2_h_description'] = 'Tvarkyti būtina profilaktinės ar darbo medicinos tikslais, darbuotojo darbingumui įvertinti, medicininei diagnozei nustatyti, sveikatos ar socialinei priežiūrai ar gydymui teikti arba sveikatos ar socialinės globos sistemoms ir paslaugoms valdyti remiantis 2008 m. Sąjungos ar valstybės narės teisę arba pagal sutartį su sveikatos priežiūros specialistu ir laikantis BDAR 9 straipsnio 3 dalyje nurodytų sąlygų ir apsaugos priemonių';
$string['gdpr_art_9_2_h_name'] = 'Medicinos tikslais (BDAR str. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Tvarkyti būtina dėl visuomenės interesų visuomenės sveikatos srityje, pavyzdžiui, siekiant apsaugoti nuo rimtų tarpvalstybinių grėsmių sveikatai arba užtikrinti aukštus sveikatos priežiūros ir vaistų ar medicinos prietaisų kokybės ir saugos standartus, remiantis Sąjungos arba valstybės narės teisę, kurioje numatytos tinkamos ir konkrečios priemonės, skirtos apsaugoti duomenų subjekto teises ir laisves, ypač profesinę paslaptį.';
$string['gdpr_art_9_2_i_name'] = 'Visuomenės sveikata (BDAR str. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Tvarkyti būtina archyvavimo tikslais visuomenės interesais, mokslinių ar istorinių tyrimų tikslais arba statistikos tikslais pagal 89 straipsnio 1 dalį, remiantis Sąjungos ar valstybės narės teise, kuri turi būti proporcinga siekiamam tikslui, atsižvelgiant į teisės į duomenų apsaugą ir numatyti tinkamas bei konkrečias priemones pagrindinėms duomenų subjekto teisėms ir interesams apsaugoti';
$string['gdpr_art_9_2_j_name'] = 'Viešasis interesas arba moksliniai / istoriniai / statistiniai tyrimai (BDAR 9 straipsnio 2 dalies j punktas)';
$string['hide'] = 'Sutraukti viską';
$string['httpwarning'] = 'Jokie iš šios svetainės atsisiųsti duomenys negali būti užšifruoti. Susisiekite su savo sistemos administratoriumi ir paprašykite įdiegti SSL šioje svetainėje.';
$string['inherit'] = 'Paveldėti';
$string['lawfulbases'] = 'Teisinės bazės';
$string['lawfulbases_help'] = 'Pasirinkite bent vieną variantą, kuris bus teisėtas asmens duomenų tvarkymo pagrindas. Norėdami gauti daugiau informacijos apie šiuos teisėtus pagrindus, žr. <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">BDAR str. 6.1</a>';
$string['markcomplete'] = 'Žymėti kaip užbaigtą';
$string['markedcomplete'] = 'Jūsų užklausą privatumo pareigūnas pažymėjo kaip užbaigtą.';
$string['message'] = 'Žinutė';
$string['messagelabel'] = 'Žinutė:';
$string['messageprovider:contactdataprotectionofficer'] = 'Duomenų užklausos';
$string['messageprovider:datarequestprocessingresults'] = 'Duomenų užklausos tvarkymo rezultatai';
$string['messageprovider:notifyexceptions'] = 'Duomenų užklausų išimčių pranešimai';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Mano asmeninių duomenų užklausos';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} vaikai';
$string['newrequest'] = 'Nauja užklausa';
$string['noactivitiestoload'] = 'Nėra veiklų';
$string['noassignedroles'] = 'Šiame kontekste nėra priskirtų vaidmenų';
$string['noblockstoload'] = 'Nėra blokų';
$string['nocategories'] = 'Kol kas nėra jokių kategorijų';
$string['nocoursestoload'] = 'Nėra veiklų';
$string['nocoursetofilter'] = 'Naudotojas nėra įregistruotas į jokius kursus, kuriuos galėtų pasirinkti';
$string['nodatarequests'] = 'Nėra duomenų užklausų';
$string['nodatarequestsmatchingfilter'] = 'Nėra duomenų užklausų, atitinkančių nurodytą filtrą';
$string['noexpiredcontexts'] = 'Šiame konteksto lygyje nėra duomenų, kurių saugojimo laikotarpis baigėsi.';
$string['nopersonaldatarequests'] = 'Neturite jokių asmens duomenų užklausų';
$string['nopurposes'] = 'Tikslų dar nėra';
$string['nosubjectaccessrequests'] = 'Nėra duomenų užklausų, dėl kurių turėtumėte imtis veiksmų';
$string['nosystemdefaults'] = 'Svetainės paskirtis ir kategorija dar neapibrėžta.';
$string['notset'] = 'Nenustatyta (naudojama numatytoji reikšmė)';
$string['notyetexpired'] = '{$a} (dar nepasibaigęs)';
$string['overrideinstances'] = 'Iš naujo nustatyti egzempliorius su tinkintomis reikšmėmis';
$string['pluginname'] = 'Duomenų privatumas';
$string['pluginname_help'] = 'Duomenų privatumo papildinys';
$string['pluginregistry'] = 'Duomenų privatumo registras';
$string['pluginregistrytitle'] = 'Papildinio privatumo atitikimo registras';
$string['privacy'] = 'Privatumas';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Šiuo metu duomenų užklausų puslapiui taikomi filtrai.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Duomenų užklausų, kurias naudotojas nori matyti viename puslapyje, skaičius';
$string['privacy:metadata:purpose'] = 'Informacija, susijusi su duomenų tikslais, skirtais šiai svetainei.';
$string['privacy:metadata:purpose:usermodified'] = 'Tikslą pakeitusio naudotojo ID';
$string['privacy:metadata:request'] = 'Informacija iš asmens duomenų užklausų (subjekto prieigos ir ištrynimo), pateiktų šiai svetainei.';
$string['privacy:metadata:request:comments'] = 'Visi naudotojo komentarai, pridedami prie užklausos.';
$string['privacy:metadata:request:dpocomment'] = 'Visi svetainės privatumo pareigūno komentarai, susiję su užklausa.';
$string['privacy:metadata:request:requestedby'] = 'Užklausą pateikiančio naudotojo ID, jei pateikta kito naudotojo vardu.';
$string['privacy:metadata:request:timecreated'] = 'Laiko žyma, nurodanti, kada naudotojas pateikė užklausą.';
$string['privacy:metadata:request:userid'] = 'Naudotojo, kuriam priklauso užklausa, ID';
$string['privacyofficeronly'] = 'Tik naudotojai, kuriems priskirtas privatumo pareigūno vaidmuo ({$a}), turi prieigą prie šio turinio';
$string['privacyrequestexpiry'] = 'Duomenų užklausos galiojimo laikas baigiasi';
$string['privacyrequestexpiry_desc'] = 'Laikas, per kurį patvirtintas duomenų užklausas bus galima atsisiųsti prieš pasibaigiant jų galiojimo laikui. Jei nustatyta į nulį, laiko limito nėra.';
$string['protected'] = 'Apsaugota';
$string['protectedlabel'] = 'Šių duomenų saugojimas turi didesnį teisinį precedentą, palyginti su naudotojo prašymu būti pamirštam. Šie duomenys bus ištrinti tik pasibaigus saugojimo laikotarpiui.';
$string['purpose'] = 'Tikslas';
$string['purpose_help'] = 'Tikslas apibūdina duomenų tvarkymo priežastį. Galima įtraukti naują tikslą arba, jei pasirinkta „Paveldėti“, tikslas taikomas iš aukštesnio konteksto. Kontekstai yra (nuo žemo iki aukšto): Blokai> Veiklos moduliai> Kursai> Kursų kategorijos> Naudotojas> Svetainė.';
$string['purposecreated'] = 'Tikslas sukurtas';
$string['purposedefault'] = 'Numatytasis tikslas';
$string['purposedefault_help'] = 'Numatytasis tikslas yra tikslas, taikomas bet kokiems naujiems atvejams. Jei pasirinkta „Paveldėti“, tikslas taikomas iš aukštesnio konteksto. Kontekstai yra (nuo žemo iki aukšto): Blokai> Veiklos moduliai> Kursai> Kursų kategorijos> Naudotojas> Svetainė.';
$string['purposeoverview'] = 'Tikslas apibūdina numatomą saugomų duomenų naudojimą ir saugojimo politiką. Tų duomenų saugojimo ir saugojimo pagrindas taip pat aprašytas tikslu.';
$string['purposes'] = 'Tikslai';
$string['purposeslist'] = 'Duomenų tikslų sąrašas';
$string['purposeupdated'] = 'Tikslas atnaujintas';
$string['replyto'] = 'Atsakyti į';
$string['requestactions'] = 'Veiksmai';
$string['requestapproved'] = 'Prašymas buvo patvirtintas';
$string['requestby'] = 'Užklausiama';
$string['requestbydetail'] = 'Prašoma:';
$string['requestcomments'] = 'Komentarai';
$string['requestcomments_help'] = 'Šiame lauke galite įvesti bet kokią papildomą informaciją apie Jūsų duomenų užklausą.';
$string['requestcreation'] = 'Kūrimas';
$string['requestdenied'] = 'Prašymas buvo atmestas';
$string['requestemailintro'] = 'Gauta duomenų užklausa:';
$string['requestfor'] = 'Naudotojas';
$string['requestmarkedcomplete'] = 'Prašymas pažymėtas kaip užbaigtas';
$string['requestorigin'] = 'Svetainė';
$string['requestsapproved'] = 'Prašymai buvo patvirtinti';
$string['requestsdenied'] = 'Prašymai buvo atmesti';
$string['requeststatus'] = 'Būsena';
$string['requestsubmitted'] = 'Jūsų užklausa buvo pateikta duomenų apsaugos pareigūnui';
$string['requesttype'] = 'Tipas';
$string['requesttype_help'] = 'Pasirinkite priežastį susisiekti su privatumo pareigūnu. Atminkite, kad ištrynus visus asmens duomenis nebegalėsite prisijungti prie svetainės.';
$string['requesttypedelete'] = 'Naikinti visus mano asmeninius duomenis';
$string['requesttypedeleteshort'] = 'Naikinti';
$string['requesttypeexport'] = 'Eksportuoti visus mano asmeninius duomenis';
$string['requesttypeexportallowfiltering'] = 'Eksportuoti mano asmeninius duomenis';
$string['requesttypeexportshort'] = 'Eksportuoti';
$string['requesttypeothers'] = 'Bendra apklausa';
$string['requesttypeothersshort'] = 'Žinutė';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Laikyti kursus be pabaigos datos aktyviais';
$string['requireallenddatesforuserdeletion_desc'] = 'Skaičiuojant naudotojo registracijos galiojimo pabaigą, atsižvelgiama į kelis veiksnius:

* paskutinis naudotojo prisijungimo laikas lyginamas su naudotojų saugojimo laikotarpiu; ir
* ar naudotojas aktyviai dalyvauja kokiuose nors kursuose.

Tikrinant aktyvią registraciją į kursą, jei kursas neturi pabaigos datos, šis nustatymas naudojamas norint nustatyti, ar tas kursas laikomas aktyviu, ar ne.

Jei kursas neturi pabaigos datos, o šis nustatymas įjungtas, naudotojo ištrinti negalima.';
$string['requiresattention'] = 'Reikalingas dėmesys.';
$string['requiresattentionexplanation'] = 'Šis papildinys neįgyvendina Moodle privatumo API. Jei šis papildinys saugo bet kokius asmenų duomenis, jis negalės būti eksportuojamas arba pašalintas per Moodle privatumo sistemą.';
$string['resubmitrequest'] = 'Iš naujo pateikti {$a->type} užklausą, skirtą {$a->username}';
$string['resubmitrequestasnew'] = 'Pateikti iš naujo kaip naują užklausą';
$string['resubmittedrequest'] = 'Esama {$a->type} užklausa, skirta {$a->username}, buvo atšaukta ir pateikta iš naujo';
$string['resultdeleted'] = 'Neseniai prašėte, kad jūsų paskyra ir asmeniniai duomenys, esantys {$a}, būtų ištrinti. Šis procesas baigtas ir jūs nebegalėsite prisijungti.';
$string['resultdownloadready'] = 'Asmeninių duomenų kopiją iš {$a}, kurios neseniai paprašėte, dabar galite atsisiųsti iš toliau pateiktos nuorodos.';
$string['retentionperiod'] = 'Saugojimo periodas';
$string['retentionperiod_help'] = 'Saugojimo laikotarpis nurodo, kiek laiko reikia saugoti duomenis. Pasibaigus saugojimo laikotarpiui, duomenys pažymimi ir įtraukiami į sąrašą, kad juos būtų galima ištrinti, laukiant administratoriaus patvirtinimo.';
$string['retentionperiodnotdefined'] = 'Nebuvo apibrėžtas saugojimo laikotarpis';
$string['retentionperiodzero'] = 'Nėra saugojimo laikotarpio';
$string['reviewdata'] = 'Peržiūrėjimo data';
$string['role'] = 'Vaidmuo';
$string['role_help'] = 'Vaidmuo, kuriam turėtų būti taikomas perrašymas.';
$string['roleoverride'] = 'Rolės keitimas';
$string['roleoverrideoverview'] = 'Numatytoji saugojimo politika gali būti nepaisoma tam tikriems naudotojo vaidmenims, todėl galite nurodyti ilgesnę arba trumpesnę saugojimo politiką. Naudotojo galiojimo laikas baigiasi tik tada, kai baigiasi visų jo vaidmenų galiojimo laikas.';
$string['roleoverrides'] = 'Rolės perrašymai';
$string['selectbulkaction'] = 'Pasirinkite masinį veiksmą.';
$string['selectcourses'] = 'Pasirinkite kursus, kuriuos norite eksportuoti';
$string['selectdatarequests'] = 'Pasirinkite duomenų užklausas.';
$string['selectuserdatarequest'] = 'Pasirinkite {$a->username} {$a->requesttype} duomenų užklausą.';
$string['send'] = 'Siųsti';
$string['sensitivedatareasons'] = 'Jautrios asmens duomenų tvarkymo priežastys';
$string['sensitivedatareasons_help'] = 'Pasirinkite vieną ar daugiau tinkamų priežasčių, dėl kurių netaikomas draudimas tvarkyti su šiuo tikslu susijusius jautrius asmens duomenis. Jei reikia daugiau informacijos, žr. <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">BDAR str. 9.2</a>';
$string['setdefaults'] = 'Nustatyti numatytuosius';
$string['showdataretentionsummary'] = 'Rodyti duomenų saugojimo suvestinę';
$string['showdataretentionsummary_desc'] = 'Jei įjungta, puslapio poraštėje ir vartotojų profiliuose rodoma nuoroda į duomenų saugojimo suvestinę.';
$string['statusapproved'] = 'Patvirtinta';
$string['statusawaitingapproval'] = 'Laukiama patvirtinimo';
$string['statuscancelled'] = 'Atšauktas';
$string['statuscomplete'] = 'Baigti';
$string['statusdeleted'] = 'Panaikintas';
$string['statusdetail'] = 'Būsena:';
$string['statusexpired'] = 'Pasibaigęs';
$string['statuspending'] = 'Laukiama';
$string['statuspreprocessing'] = 'Pirminis apdorojimas';
$string['statusprocessing'] = 'Apdorojimas';
$string['statusready'] = 'Atsisiuntimas paruoštas';
$string['statusrejected'] = 'Atmestas';
$string['subjectscope'] = 'Dalyko taikymo sritis';
$string['subjectscope_help'] = 'Dalyko srityje išvardyti vaidmenys, kurie gali būti priskirti šiame kontekste.';
$string['summary'] = 'Registro konfigūracijos suvestinė';
$string['systemconfignotsetwarning'] = 'Svetainės tikslas ir kategorija neapibrėžti. Kai jie nėra apibrėžti, visi duomenys bus pašalinti apdorojant ištrynimo užklausas.';
$string['tobedeleted'] = 'Duomenys, kuriuos reikia ištrinti';
$string['unexpiredrolewithretention'] = '{$a->retention} (Nepasibaigęs)';
$string['user'] = 'Naudotojas';
$string['userlistexplanation'] = 'Šis papildinys turi pagrindinį teikėją, bet taip pat turėtų įdiegti naudotojų sąrašo teikėją, kad būtų visiškai palaikomos privatumo funkcijos.';
$string['userlistnoncompliant'] = 'Trūksta naudotojų sąrašo teikėjo';
$string['viewrequest'] = 'Peržiūrėti užklausą';
$string['visible'] = 'Išskleisti viską';
