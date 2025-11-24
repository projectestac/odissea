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
 * Strings for component 'portfolio', language 'lt', version '4.5'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Spręsti aktyvų eksportavimą';
$string['activeportfolios'] = 'Galimi portfeliai';
$string['addalltoportfolio'] = 'Eksportuoti viską į portfelį';
$string['addnewportfolio'] = 'Įtraukti naują portfelį';
$string['addtoportfolio'] = 'Eksportuoti į portfelį';
$string['alreadyalt'] = 'Jau eksportuojama. Spustelėkite čia, kad išspręstumėte šį perdavimą.';
$string['alreadyexporting'] = 'Šiame seanse jau vyksta aktyvus portfelio eksportavimas. Norėdami tęsti, turite užbaigti šį eksportavimą arba jį atšaukti. Ar norite jį tęsti? (Jei ne, jis bus atšauktas).';
$string['availableformats'] = 'Galimi eksportavimo formatai';
$string['callbackclassinvalid'] = 'Nurodyta atgalinio iškvietimo klasė negalioja arba nėra hierarchijos portfolio_caller dalis';
$string['callercouldnotpackage'] = 'Nepavyko išpakuoti eksportuotinų duomenų: pradinė klaida {$a}';
$string['cannotsetvisible'] = 'Negalima nustatyti kaip matomo: papildinys buvo visiškai išjungtas dėl klaidingos konfigūracijos';
$string['commonportfoliosettings'] = 'Bendrieji portfelio parametrai';
$string['commonsettingsdesc'] = '<p>Nuo perdavimo trukmės slenksčio reikšmės „Vidutinė“ arba „Ilga“ priklauso, ar naudotojas galės palaukti ir perdavimą užbaigti, ar ne.</p><p>Perdavimai, kurių trukmė yra iki slenksčio reikšmės „Vidutinė“, tiesiog vyksta neklausus naudotojo, o perdavimai, kurių trukmė yra „Vidutinė“ ir „Ilga“, siūlomi pasirinkti, tačiau įspėjama, kad tai gali užtrukti.</p><p>Be to, kai kurie portfelio papildiniai gali visiškai nepaisyti šios parinkties ir visus perdavimus priverstinai įrašyti į eilę.</p>';
$string['configexport'] = 'Konfigūruoti eksportuotus duomenis';
$string['configplugin'] = 'Konfigūruoti portfelio papildinį';
$string['configure'] = 'Konfigūruoti';
$string['confirmcancel'] = 'Ar tikrai norite atšaukti šį eksportavimą?';
$string['confirmexport'] = 'Patvirtinkite šį eksportavimą';
$string['confirmsummary'] = 'Eksportavimo suvestinė';
$string['continuetoportfolio'] = 'Tęsti eksportuoti į portfelį';
$string['deleteportfolio'] = 'Naikinti portfelio egzempliorių';
$string['destination'] = 'Paskirtis';
$string['disabled'] = 'Atsiprašome, tačiau portfelio eksportavimas šioje svetainėje neįjungtas';
$string['disabledinstance'] = 'Išjungta';
$string['displayarea'] = 'Eksportavimo sritis';
$string['displayexpiry'] = 'Perdavimo galiojimo laikas';
$string['displayinfo'] = 'Eksportavimo informacija';
$string['dontwait'] = 'Nelaukite';
$string['enabled'] = 'Įjungti portfelius';
$string['enableddesc'] = 'Tai leis administratoriams sukonfigūruoti nuotolines sistemas, į kurias naudotojai galėtų eksportuoti turinį';
$string['err_uniquename'] = 'Portfelio pavadinimas turi būti unikalus (naudojant kiekvieną papildinį)';
$string['exportalreadyfinished'] = 'Portfelio eksportavimas baigtas';
$string['exportalreadyfinisheddesc'] = 'Portfelio eksportavimas baigtas';
$string['exportcomplete'] = 'Portfelio eksportavimas baigtas';
$string['exportedpreviously'] = 'Ankstesni eksportavimai';
$string['exportexceptionnoexporter'] = 'Įvyko aktyvaus seanso, o ne eksportavimo priemonės objekto išimtis portfolio_export_exception';
$string['exportexpired'] = 'Portfelio eksportavimo laikas baigėsi';
$string['exportexpireddesc'] = 'Bandėte kartoti tam tikros informacijos eksportavimą arba pradėti tuščią eksportavimą. Norėdami tai atlikti tinkamai, turite grįžti į pradinę vietą ir pradėti dar kartą. Tai kartais nutinka, jei pasibaigus eksportavimui naudojate grįžties mygtuką arba į adresyną įrašote klaidingą URL.';
$string['exporting'] = 'Eksportuojama į portfelį';
$string['exportingcontentfrom'] = 'Eksportuojamas turinys iš {$a}';
$string['exportingcontentto'] = 'Eksportuojamas turinys į {$a}';
$string['exportqueued'] = 'Portfelio eksportavimas sėkmingai įrašytas į eilę perduoti';
$string['exportqueuedforced'] = 'Portfelio eksportavimas sėkmingai įrašytas į eilę perduoti (nuotolinė sistema įgalino į eilę įrašytus perdavimus)';
$string['failedtopackage'] = 'Nepavyko rasti pakuotinų failų';
$string['failedtosendpackage'] = 'Nepavyko išsiųsti duomenų į pasirinktą portfelių sistemą: pradinė klaida {$a}';
$string['filedenied'] = 'Prieiga uždrausta naudojant šį failą';
$string['filenotfound'] = 'Failo nerasta';
$string['fileoutputnotsupported'] = 'Pasirinkus šį formatą failo išvesties perrašymas nepalaikomas';
$string['format_document'] = 'Dokumentas';
$string['format_file'] = 'Failas';
$string['format_image'] = 'Vaizdas';
$string['format_leap2a'] = '„Leap2A“ portfelio formatas';
$string['format_mbkp'] = '„Moodle“ atsarginio kopijavimo formatas';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Pateiktis';
$string['format_richhtml'] = 'HTML su priedais';
$string['format_spreadsheet'] = 'Skaičiuoklė';
$string['format_text'] = 'Paprastasis tekstas';
$string['format_video'] = 'Vaizdo įrašas';
$string['highdbsizethreshold'] = 'Ilgos trukmės duomenų bazės perdavimas';
$string['highdbsizethresholddesc'] = 'Duomenų bazės įrašų skaičius, kurį viršijus perdavimo trukmė bus laikoma ilga';
$string['highfilesizethreshold'] = 'Ilgos trukmės failo perdavimas';
$string['highfilesizethresholddesc'] = 'Failai, kurių dydis viršija šio slenksčio reikšmę, bus laikomi ilgos perdavimo trukmės';
$string['insanebody'] = 'Sveiki! Šią žinutę gavote kaip {$a->sitename} administratorius. Kai kurie portfelio egzemplioriai automatiškai buvo išjungti dėl klaidingos konfigūracijos. Tai reiškia, kad šiuo metu naudotojai į šiuos portfelius negali eksportuoti turinio. Išjungtų portfelio papildinių egzempliorių sąrašas yra: {$a->textlist}. Tai turėtų būti ištaisyta kuo greičiau, apsilankius {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Sveiki! Šią žinutę gavote kaip {$a->sitename} administratorius.</p> <p>Kai kurie portfelio egzemplioriai automatiškai buvo išjungti dėl klaidingos konfigūracijos. Tai reiškia, kad šiuo metu naudotojai į šiuos portfelius negali eksportuoti turinio.</p> <p>Išjungtų portfelių papildinių egzempliorių sąrašas yra:</p> {$a->htmllist} <p>Tai turėtų būti ištaisyta kuo greičiau, apsilankius <a href=rdblquote{$a->fixurl}">portfelių konfigūravimo puslapiuose</a></p>.';
$string['insanebodysmall'] = 'Sveiki! Šią žinutę gavote kaip {$a->sitename} administratorius. Kai kurie portfelio egzemplioriai automatiškai buvo išjungti dėl klaidingos konfigūracijos. Tai reiškia, kad šiuo metu naudotojai į šiuos portfelius negali eksportuoti turinio. Tai turėtų būti ištaisyta kuo greičiau, apsilankius {$a->fixurl}.';
$string['insanesubject'] = 'Kai kurie portfelio egzemplioriai automatiškai išjungti';
$string['instancedeleted'] = 'Portfelis sėkmingai panaikintas';
$string['instanceismisconfigured'] = 'Portfelio egzempliorius praleistas dėl klaidingos konfigūracijos. Klaida: {$a}';
$string['instancenotdelete'] = 'Nepavyko panaikinti portfelio';
$string['instancenotsaved'] = 'Nepavyko įrašyti portfelio';
$string['instancesaved'] = 'Portfelis sėkmingai įrašytas';
$string['intro'] = 'Jūsų sukurtą turinį, pvz., užduotis, forumo įrašus ir tinklaraščio įrašus, galima eksportuoti į aplanką arba atsisiųsti.<br>
Bet koks portfelis, kurio nenorite naudoti, gali būti paslėptas, kad jis nebūtų įtrauktas į sąrašą kaip galimybė eksportuoti turinį.';
$string['invalidaddformat'] = 'Klaidingas įtraukimo formatas perduotas portfolio_add_button. ({$a}) Turi būti vienas iš PORTFOLIO_ADD_XXX.';
$string['invalidbuttonproperty'] = 'Nepavyko rasti tokios portfolio_button ({$a}) ypatybės';
$string['invalidconfigproperty'] = 'Nepavyko rasti tokios {$a->class}) konfigūravimo ypatybės ({$a->property}';
$string['invalidexportproperty'] = 'Nepavyko rasti tokios {$a->class}) eksportavimo konfigūravimo ypatybės ({$a->property}';
$string['invalidfileareaargs'] = 'Turi būti nurodytas į set_file_and_format_data perduotų klaidingų failo srities argumentų konteksto ID, komponentas, failo sritis ir elemento ID';
$string['invalidformat'] = 'Kažkuris elementas eksportuojamas klaidingu formatu, {$a}';
$string['invalidinstance'] = 'Nepavyko rasti tokio portfelio egzemplioriaus';
$string['invalidpreparepackagefile'] = 'Klaidingas skambutis į prepare_package_file – turi būti nustatytas vienas arba keli failai';
$string['invalidproperty'] = 'Nepavyko rasti tokios {$a->class}) ypatybės ({$a->property}';
$string['invalidsha1file'] = 'Klaidingas skambutis į get_sha1_file – turi būti nustatytas vienas arba keli failai';
$string['invalidtempid'] = 'Klaidingas eksportavimo ID. Gali būti pasibaigęs jo galiojimo laikas.';
$string['invaliduserproperty'] = 'Nepavyko rasti tokios {$a->class}) naudotojo konfigūravimo ypatybės ({$a->property}';
$string['leap2a_emptyselection'] = 'Nepasirinkta būtina reikšmė';
$string['leap2a_entryalreadyexists'] = 'Bandėte įtraukti „Leap2A“ įrašą, kurio ID ({$a}) jau yra šioje informacijos santraukoje';
$string['leap2a_feedtitle'] = '„Leap2A“ eksportavimas iš „Moodle“, skirtas {$a}';
$string['leap2a_filecontent'] = 'Bandėte nustatyti „Leap2A“ įrašo turinį faile, užuot naudoję failo poklasį';
$string['leap2a_invalidentryfield'] = 'Bandėte nustatyti įrašo lauką, kurio nėra ({$a}), arba negalėjote nustatyti tiesiogiai';
$string['leap2a_invalidentryid'] = 'Bandėte pasiekti įrašą pagal ID, kurio nėra ({$a})';
$string['leap2a_missingfield'] = 'Trūksta būtino „Leap2A“ įrašo lauko {$a}';
$string['leap2a_nonexistantlink'] = '„Leap2A“ įrašas ({$a->from}) bandė sietis su neegzistuojančiu įrašu ({$a->to}) naudodamas ryšį {$a->rel}';
$string['leap2a_overwritingselection'] = 'Įrašo ({$a}) pradinio tipo perrašymas, kad būtų galima pasirinkti make_selection';
$string['leap2a_selflink'] = '„Leap2A“ įrašas ({$a->id}) bandė sietis su savimi naudodamas ryšį {$a->rel}';
$string['logs'] = 'Perduoti žurnalai';
$string['logsummary'] = 'Ankstesni sėkmingi perdavimai';
$string['manageportfolios'] = 'Valdyti portfelius';
$string['manageyourportfolios'] = 'Valdyti savo portfelius';
$string['mimecheckfail'] = 'Portfelio papildinys {$a->plugin} nepalaiko tokio MIME tipo {$a->mimetype}';
$string['missingcallbackarg'] = 'Trūksta klasės {$a->class} atgalinio iškvietimo argumento {$a->arg}';
$string['moderatedbsizethreshold'] = 'Vidutinės trukmės duomenų bazės perdavimas';
$string['moderatedbsizethresholddesc'] = 'Duomenų bazės įrašų skaičius, kurį viršijus perdavimo trukmė bus laikoma vidutine';
$string['moderatefilesizethreshold'] = 'Vidutinės trukmės failo perdavimas';
$string['moderatefilesizethresholddesc'] = 'Failai, kurių dydis viršija šio slenksčio reikšmę, bus laikomi vidutinės perdavimo trukmės';
$string['multipleinstancesdisallowed'] = 'Bandoma sukurti kitą papildinio egzempliorių, tačiau neleidžiama, kad papildinys turėtų kelis egzempliorius ({$a})';
$string['mustsetcallbackoptions'] = 'Atgalinio iškvietimo parinktis turite nustatyti portfolio_add_button konstruktoriuje arba naudodami set_callback_options metodą';
$string['noavailableplugins'] = 'Atsiprašome, tačiau nėra galimų portfelių, į kuriuos galėtumėte eksportuoti';
$string['nocallbackclass'] = 'Nepavyko rasti atgalinio iškvietimo klasės, skirtos naudoti ({$a})';
$string['nocallbackcomponent'] = 'Nepavyko rasti nurodyto komponento {$a}.';
$string['nocallbackfile'] = 'Kažkuris elementas modulyje, iš kurio bandote eksportuoti, sugadintas – nepavyksta rasti reikiamo failo ({$a})';
$string['noclassbeforeformats'] = 'Turite nustatyti atgalinio iškvietimo klasę, kad galėtumėte iškviesti set_formats, esančius portfolio_button';
$string['nocommonformats'] = 'Nėra jokių bendrų formatų jokiame galimame portfelio papildinyje ir skambinimo vietoje {$a->location} (skambintojo palaikoma {$a->formats})';
$string['noinstanceyet'] = 'Dar nepasirinkta';
$string['nologs'] = 'Nėra rodytinų žurnalų.';
$string['nomultipleexports'] = 'Atsiprašome, tačiau portfelio vietoje ({$a->plugin}) nepalaikomi keli eksportavimo procesai vienu metu. Pirma užbaikite <a href="{$a->link}">dabartinį</a>, tada bandykite dar kartą.';
$string['nonprimative'] = 'Nesudėtinga reikšmė perduota kaip atgalinio iškvietimo argumentas į portfolio_add_button. Atsisakoma tęsti. Raktas – {$a->key}, o reikšmė – {$a->value}.';
$string['nopermissions'] = 'Atsiprašome, tačiau neturite reikiamų teisių, kad galėtumėte eksportuoti iš šios srities';
$string['notexportable'] = 'Atsiprašome, tačiau turinys, kurį bandote eksportuoti, yra neeksportuojamo tipo';
$string['notimplemented'] = 'Atsiprašome, tačiau bandote eksportuoti turinį formatu, kuris dar neįdiegtas ({$a})';
$string['notyetselected'] = 'Dar nepasirinkta';
$string['notyours'] = 'Bandote tęsti jums nepriklausančio portfelio eksportą!';
$string['nouploaddirectory'] = 'Nepavyko sukurti laikino katalogo, į kurį būtų galima pakuoti jūsų duomenis';
$string['off'] = 'Įjungta, bet paslėpta';
$string['on'] = 'Įjungta ir matoma';
$string['plugin'] = 'Portfelio papildinys';
$string['plugincouldnotpackage'] = 'Nepavyko išpakuoti eksportuotinų duomenų: pradinė klaida {$a}';
$string['pluginismisconfigured'] = 'Portfelio papildinys praleistas dėl klaidingos konfigūracijos. Klaida: {$a}';
$string['portfolio'] = 'Portfelis';
$string['portfolios'] = 'Portfeliai';
$string['privacy:metadata'] = 'Portfolio posistemis veikia kaip kanalas, perduodantis užklausas iš papildinių į įvairius portfolio papildinius.';
$string['privacy:metadata:instance'] = 'Portfolio identifikatorius';
$string['privacy:metadata:instancesummary'] = 'Saugo duomenis apie portfolio atvejus ir nuostatas.';
$string['privacy:metadata:name'] = 'Pirmenybės pavadinimas';
$string['privacy:metadata:portfolio_log'] = 'Portfelio persiuntimo žurnalas (naudojamas norint vėliau patikrinti, ar nėra dublikatų)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Perkėlimui sukurti naudotos klasės pavadinimas';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Už eksportavimą atsakingo komponento pavadinimas';
$string['privacy:metadata:portfolio_log:time'] = 'Persiuntimo laikas (eilės atveju tai laikas, kai buvo atliktas faktinis persiuntimas, o ne tada, kai naudotojas jį pradėjo)';
$string['privacy:metadata:portfolio_log:userid'] = 'Turinį eksportavusio naudotojo ID';
$string['privacy:metadata:portfolio_tempdata'] = 'Saugo laikinus portfelio eksporto duomenis.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Eksportuoti duomenis';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Laikas, kada baigs galioti šis įrašas';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Naudojamas portfelio papildinio pavyzdys';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Eksportuojantis naudotojas';
$string['privacy:metadata:userid'] = 'Naudotojo ID';
$string['privacy:metadata:value'] = 'Vertė pirmumui';
$string['privacy:path'] = 'Portfolio egzemplioriai';
$string['queuesummary'] = 'Dabar eilėje esantys perdavimai';
$string['returntowhereyouwere'] = 'Grąžinti ten, kur buvote';
$string['save'] = 'Įrašyti';
$string['selectedformat'] = 'Pasirinkti eksportavimo formatai';
$string['selectedwait'] = 'Ar pasirinkta laukti?';
$string['selectplugin'] = 'Pasirinkti paskirtį';
$string['showhide'] = 'Rodyti / slėpti';
$string['singleinstancenomultiallowed'] = 'Galimas tik vienas portfelio papildinio egzempliorius. Vykstant seansui jis nepalaiko kelių eksportavimo procesų, be to, šiame seanse jau yra aktyvus eksportavimas naudojant šį papildinį.';
$string['somepluginsdisabled'] = 'Kai kurie portfelio papildiniai visiškai išjungti, nes jie yra klaidingos konfigūracijos arba pagrįsti kažkuo, kas yra:';
$string['sure'] = 'Ar tikrai norite panaikinti {$a}? Šio veiksmo nebus galima anuliuoti.';
$string['thirdpartyexception'] = 'Vykdant portfelio eksportavimą įvyko trečiosios šalies išimtis ({$a}). Rasta ir pateikta iš naujo, tačiau tai iš tikrųjų turi būti pataisyta.';
$string['transfertime'] = 'Perdavimo laikas';
$string['unknownplugin'] = 'Nežinoma (gali būt pašalinta administratoriaus)';
$string['wait'] = 'Laukti';
$string['wanttowait_high'] = 'Nerekomenduojama laukti šio perdavimo norint užbaigti, tačiau galite, jei tikrai žinote, ką darote';
$string['wanttowait_moderate'] = 'Ar lauksite šio perdavimo? Tai gali trukti kelias minutes.';
