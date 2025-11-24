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
 * Strings for component 'quizaccess_seb', language 'lt', version '4.5'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Pridėti naują šabloną';
$string['allowedbrowserkeysdistinct'] = 'Visi raktai turi būti skirtingi.';
$string['allowedbrowserkeyssyntax'] = 'Raktas turi būti 64 simbolių šešioliktainė eilutė.';
$string['cachedef_config'] = 'SEN konfigūracijos talpykla';
$string['cachedef_configkey'] = 'SEN konfigūracijos rakto talpykla';
$string['cachedef_quizsettings'] = 'SEN testo nustatymų talpykla';
$string['cantdelete'] = 'Šablono ištrinti negalima, nes jis buvo naudojamas vienam ar keliems testams.';
$string['cantedit'] = 'Šablono redaguoti negalima, nes jis buvo naudojamas vienam ar keliems testams.';
$string['checkingaccess'] = 'Tikrinama prieiga prie saugios egzaminų naršyklės...';
$string['clientrequiresseb'] = 'Šis testas buvo sukonfigūruotas naudoti saugią egzamino naršyklę su kliento konfigūracija.';
$string['confirmtemplateremovalquestion'] = 'Ar tikrai norite pašalinti šį šabloną?';
$string['confirmtemplateremovaltitle'] = 'Patvirtinti šablono pašalinimą?';
$string['conflictingsettings'] = 'Neturite leidimo atnaujinti esamų saugios egzamino naršyklės nustatymų.';
$string['content'] = 'Šablonas';
$string['description'] = 'Aprašymas';
$string['disabledsettings'] = 'Išjungti nustatymai.';
$string['disabledsettings_help'] = 'Saugios egzamino naršyklės testo nustatymų pakeisti negalima, jei buvo bandoma atlikti testą. Norint pakeisti nustatymą, pirmiausia reikia ištrinti visus testo bandymus.';
$string['downloadsebconfig'] = 'Atsisiųsti SEN konfigūracijos failą';
$string['duplicatetemplate'] = 'Šablonas tokiu pačiu pavadinimu jau yra.';
$string['edittemplate'] = 'Redaguoti šabloną';
$string['enabled'] = 'Įjungtas';
$string['error:ws:nokeyprovided'] = 'Turi būti pateiktas bent vienas saugios egzamino naršyklės raktas.';
$string['error:ws:quiznotexists'] = 'Testas, atitinkantis kurso modulio ID {$a}, nerastas';
$string['event:accessprevented'] = 'Prieiga prie testo buvo uždrausta';
$string['event:templatecreated'] = 'SEN šablonas buvo sukurtas';
$string['event:templatedeleted'] = 'SEN šablonas buvo ištrintas';
$string['event:templatedisabled'] = 'SEN šablonas buvo išjungtas';
$string['event:templateenabled'] = 'SEN šablonas buvo įjungtas';
$string['event:templateupdated'] = 'SEN šablonas buvo atnaujintas';
$string['exitsebbutton'] = 'Išeiti iš saugios egzamino naršyklės';
$string['filemanager_sebconfigfile'] = 'Įkelti saugios egzamino naršyklės konfigūracijos failą.';
$string['filemanager_sebconfigfile_help'] = 'Įkelkite savo saugios egzamino naršyklės konfigūracijos failą šiam testui.';
$string['filenotpresent'] = 'Įkelkite SEN konfigūracijos failą.';
$string['fileparsefailed'] = 'Įkelto failo nepavyko išsaugoti kaip SEN konfigūracijos failo.';
$string['httplinkbutton'] = 'Atsisiųsti konfigūraciją';
$string['invalid_browser_key'] = 'Neteisingas SEN naršyklės raktas';
$string['invalid_config_key'] = 'Neteisingas SEN konfigūracijos raktas';
$string['invalidkeys'] = 'Nepavyko patvirtinti saugios egzamino naršyklės raktų. Patikrinkite, ar saugią egzamino naršyklę naudojate su tinkamu konfigūracijos failu.';
$string['invalidtemplate'] = 'Netinkamas SEN konfigūracijos šablonas';
$string['manage_templates'] = 'Saugios egzamino naršyklės šablonai';
$string['managetemplates'] = 'Tvarkyti šablonus';
$string['missingrequiredsettings'] = 'Konfigūracijos nustatymuose trūksta kai kurių būtinų verčių.';
$string['name'] = 'Pavadinimas';
$string['newtemplate'] = 'Naujas šablonas';
$string['noconfigfilefound'] = 'Nepavyko rasti įkelto SEN konfigūracijos failo testui su cmid: {$a}';
$string['noconfigfound'] = 'Nepavyko rasti SEN konfigūracijos teste su cmid: {$a}';
$string['not_seb'] = 'Saugi egzamino naršyklė nenaudojama.';
$string['notemplate'] = 'Nėra šablono';
$string['passwordnotset'] = 'Dabartiniai nustatymai reikalauja testų naudojant saugią egzamino naršyklę, kad būtų nustatytas testo slaptažodis.';
$string['pluginname'] = 'Saugios egzamino naršyklės prieigos taisyklės';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Saugios egzamino naršyklės nustatymai teste. Tai apima paskutinio naudotojo, kuris sukūrė arba pakeitė nustatymus, ID.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Testo ID, kurio nustatymai egzistuoja.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix laikas, kai buvo sukurti nustatymai.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Unix laikas, kai nustatymai buvo paskutinį kartą pakeisti.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Naudotojo, kuris paskutinį kartą sukūrė arba modifikavo nustatymus, ID.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Saugios egzamino naršyklės šablono nustatymai. Tai apima paskutinio naudotojo, kuris sukūrė arba modifikavo šabloną, ID.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix laikas, kai buvo sukurtas šablonas.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix laikas, kai šablonas buvo paskutinį kartą modifikuotas.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'Naudotojo, kuris paskutinį kartą sukūrė arba modifikavo šabloną, ID.';
$string['quizsettings'] = 'Testo nustatymai';
$string['restoredfrom'] = '{$a->name} (atkurta naudojant cmid {$a->cmid})';
$string['seb'] = 'Saugi egzamino naršyklė';
$string['seb:bypassseb'] = 'Apeikite reikalavimą peržiūrėti testą saugioje egzamino naršyklėje.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Pakeiskite SEN testo nustatymą: pasirinkite SEN konfigūracijos failą';
$string['seb:manage_seb_activateurlfiltering'] = 'Pakeiskite SEN testo nustatymą: suaktyvinkite URL filtravimą';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Keisti SEN testo nustatymą: Leidžiami naršyklės egzamino klavišai';
$string['seb:manage_seb_allowreloadinexam'] = 'Keisti SEN testo nustatymą: Leisti perkrauti';
$string['seb:manage_seb_allowspellchecking'] = 'Keisti SEN testo nustatymą: Įjungti rašybos tikrinimą';
$string['seb:manage_seb_allowuserquitseb'] = 'Keisti SEN testo nustatymą: Leisti išeiti';
$string['seb:manage_seb_configuremanually'] = 'Pakeisti SEN testo nustatymą: Pasirinkti rankinę konfigūraciją';
$string['seb:manage_seb_enableaudiocontrol'] = 'Keisti SEN testo nustatymą: įgalinti garso valdymą';
$string['seb:manage_seb_expressionsallowed'] = 'Pakeisti SEN testo nustatymą: Leidžiamos paprastos išraiškos';
$string['seb:manage_seb_expressionsblocked'] = 'Pakeisti SEN testo nustatymą: Blokuojamos paprastos išraiškos';
$string['seb:manage_seb_filterembeddedcontent'] = 'Pakeisti SEN testo nustatymą: Filtruti įdėtą turinį';
$string['seb:manage_seb_linkquitseb'] = 'Pakeisti SEN testo nustatymą: Uždaryti nuorodą';
$string['seb:manage_seb_muteonstartup'] = 'Pakeiskite SEN testo nustatymą: Nutildyti paleidžiant';
$string['seb:manage_seb_quitpassword'] = 'Pakeisti SEN testo nustatymą: Uždaryti slaptažodį';
$string['seb:manage_seb_regexallowed'] = 'Pakeisti SEN testo nustatymą: Leidžiamos reguliariosios išraiškos';
$string['seb:manage_seb_regexblocked'] = 'Pakeisti SEN testo nustatymą: Blokuojamos reguliariosios išraiškos';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Pakeisti SEN testo nustatymą: Reikalauti saugios egzamino naršyklės';
$string['seb:manage_seb_showkeyboardlayout'] = 'Pakeisti SEN testo nustatymą: Rodyti klaviatūros išdėstymą';
$string['seb:manage_seb_showreloadbutton'] = 'Pakeisti SEN testo nustatymą: Rodyti pakartotinio įkėlimo mygtuką';
$string['seb:manage_seb_showsebdownloadlink'] = 'Pakeisti SEN testo nustatymą: Rodyti atsisiuntimo nuorodą';
$string['seb:manage_seb_showsebtaskbar'] = 'Pakeisti SEN testo nustatymą: Rodyti užduočių juostą';
$string['seb:manage_seb_showtime'] = 'Keisti SEN testo nustatymą: Rodyti laiką';
$string['seb:manage_seb_showwificontrol'] = 'Keisti SEB testo nustatymą: Rodyti „Wi-Fi“ valdymą';
$string['seb:manage_seb_templateid'] = 'Keisti SEN testo nustatymą: Pasirinkiti SEN šabloną';
$string['seb:manage_seb_userconfirmquit'] = 'Keisti SEN testo nustatymą: Patvirtinti baigiant';
$string['seb:manage_seb_usesebclientconfig'] = 'Pakeisti SEN testo nustatymą: Naudoti SEN kliento konfigūraciją';
$string['seb:managetemplates'] = 'Tvarkyti SEN konfigūracijos šablonus';
$string['seb_activateurlfiltering'] = 'Įgalinti URL filtravimą';
$string['seb_activateurlfiltering_help'] = 'Jei įjungta, įkeliant tinklalapius URL adresai bus filtruojami. Filtrų rinkinys turi būti apibrėžtas toliau.';
$string['seb_allowcapturecamera'] = 'Leisti naršyklei pasiekti kamerą';
$string['seb_allowcapturemicrophone'] = 'Leisti naršyklei pasiekti mikrofoną';
$string['seb_allowedbrowserexamkeys'] = 'Leidžiami naršyklės egzamino raktai';
$string['seb_allowedbrowserexamkeys_help'] = 'Šiame lauke galite įvesti leidžiamus naršyklės egzamino raktus, skirtus saugios egzamino naršyklės versijoms, kurioms leidžiama pasiekti šį testą. Jei neįvedami jokie raktai, naršyklės egzamino raktai nėra tikrinami.';
$string['seb_allowreloadinexam'] = 'Įgalinti egzamino įkėlimą iš naujo';
$string['seb_allowreloadinexam_help'] = 'Jei įjungta, leidžiama įkelti puslapį iš naujo (perkrovimo mygtukas SEN užduočių juostoje, naršyklės įrankių juosta, iOS šoninio slankiklio meniu, spartusis klavišas F5/cmd+R). Atminkite, kad talpyklos atkūrimas neprisijungus gali nutrūkti, jei naudotojas bandys iš naujo įkelti puslapį be interneto ryšio.';
$string['seb_allowspellchecking'] = 'Įjungti rašybos tikrinimą';
$string['seb_allowspellchecking_help'] = 'Jei įjungta, SEN naršyklėje leidžiama tikrinti rašybą.';
$string['seb_allowuserquitseb'] = 'Įgalinti išėjimą iš SEN';
$string['seb_allowuserquitseb_help'] = 'Jei įjungta, naudotojai gali išeiti iš SEN paspausdami mygtuką "Išeiti" SEN užduočių juostoje arba paspausdami klavišus Ctrl-Q arba spustelėdami pagrindinio naršyklės lango uždarymo mygtuką.';
$string['seb_enableaudiocontrol'] = 'Įgalinti garso valdiklius';
$string['seb_enableaudiocontrol_help'] = 'Jei įjungta, SEN užduočių juostoje rodoma garso valdymo piktograma.';
$string['seb_expressionsallowed'] = 'Išraiškos leidžiamos';
$string['seb_expressionsallowed_help'] = 'Teksto laukas, kuriame yra leidžiamos leidžiamų URL filtravimų išraiškos. Galima naudoti pakaitos simbolį „\\*“. Išraiškų pavyzdžiai: „example.com“ arba „example.com/stuff/\\*“. „example.com“ atitinka „example.com“, „www.example.com“ ir „www.mail.example.com“. „example.com/stuff/\\*“ atitinka visas užklausas bet kuriam „example.com“ padomeniui, kurių pirmasis kelio segmentas yra „stuff“.';
$string['seb_expressionsblocked'] = 'Išraiškos užblokuotos';
$string['seb_expressionsblocked_help'] = 'Teksto laukas, kuriame yra užblokuotų URL filtravimų išraiškos. Galima naudoti pakaitos simbolį „\\*“. Išraiškų pavyzdžiai: „example.com“ arba „example.com/stuff/\\*“. „example.com“ atitinka „example.com“, „www.example.com“ ir „www.mail.example.com“. „example.com/stuff/\\*“ atitinka visas užklausas bet kuriam „example.com“ padomeniui, kurių pirmasis kelio segmentas yra „stuff“.';
$string['seb_filterembeddedcontent'] = 'Taip pat filtruoti įterptą turinį';
$string['seb_filterembeddedcontent_help'] = 'Jei įjungta, įterptieji ištekliai taip pat bus filtruojami naudojant filtrų rinkinį.';
$string['seb_help'] = 'Nustatykite testą, kad galėtumėte naudoti saugią egzamino naršyklę.';
$string['seb_linkquitseb'] = 'Rodyti mygtuką "Išeiti iš saugios egzamino naršyklės", sukonfigūruotą naudojant šią išeities nuorodą';
$string['seb_linkquitseb_help'] = 'Šiame lauke galite įvesti išėjimo iš SEB nuorodą. Ji bus naudojamas mygtuke „Išeiti iš saugios egzamino naršyklės“ puslapyje, kuris pasirodys po egzamino pateikimo. Paspaudus mygtuką ar nuorodą, esančią ten, kur norite ją įdėti, galima išeiti iš SEB neįvedus išeities slaptažodžio. Jei nuoroda neįvesta, mygtukas „Išeiti iš saugios egzamino naršyklės“ nepasirodo ir nėra nurodytos nuorodos, leidžiančios išeiti iš SEB.';
$string['seb_managetemplates'] = 'Tvarkykite saugios egzamino naršyklės šablonus';
$string['seb_muteonstartup'] = 'Nutildyti paleidžiant';
$string['seb_muteonstartup_help'] = 'Jei įjungta, paleidžiant SEN garsas iš pradžių nutildomas.';
$string['seb_quitpassword'] = 'Uždaryti slaptažodį';
$string['seb_quitpassword_help'] = 'Šis slaptažodis yra privalomas, kai naudotojai bando išeiti iš SEB paspausdami mygtuką „Išeiti“, Ctrl-Q arba uždaryti mygtuką pagrindiniame naršyklės lange. Jei nenustatytas joks išeities slaptažodis, SEB tiesiog paklaus: „Ar tikrai norite išeiti iš SEB?“.';
$string['seb_regexallowed'] = 'Regex leidžiamas';
$string['seb_regexallowed_help'] = 'Teksto laukas, kuriame yra leidžiamų URL filtravimo išraiškos reguliarios išraiškos (Regex) formatu.';
$string['seb_regexblocked'] = 'Regex užblokuotas';
$string['seb_regexblocked_help'] = 'Teksto laukas, kuriame yra užblokuotų URL filtravimo išraiškos reguliarios išraiškos (Regex) formatu.';
$string['seb_requiresafeexambrowser'] = 'Reikalauti naudoti saugią egzamino naršyklę';
$string['seb_requiresafeexambrowser_help'] = 'Jei įjungta, besimokantieji  gali bandyti atlikti testą tik naudodami saugią egzamino naršyklę.
Galimos parinktys:

* Ne
<br/>Saugi egzamino naršyklė nebūtina norint atlikti testą.
* Taip – Naudoti esamą šabloną
<br/>Galima naudoti saugios egzamino naršyklės konfigūravimo šabloną. Šablonai tvarkomi svetainės administracijoje. Jūsų rankiniai nustatymai perrašo šablono nustatymus.
* Taip – Konfigūruoti rankiniu būdu
<br/>Nebus naudojamas joks saugios egzamino naršyklės konfigūravimo šablonas. Saugią egzamino naršyklę galite konfigūruoti rankiniu būdu.
* Taip – Įkelti savo konfigūraciją
<br/>Galite įkelti savo saugios egzamino naršyklės konfigūracijos failą. Visi rankiniai nustatymai ir šablonų naudojimas bus išjungti.
* Taip – Naudoti SEB kliento konfigūraciją
<br/>Moodle pusėje nėra saugios egzamino naršyklės konfigūracijų. Testą galima bandyti atlikti naudojant bet kokią saugios egzamino naršyklės konfigūraciją.';
$string['seb_showkeyboardlayout'] = 'Rodyti klaviatūros išdėstymą';
$string['seb_showkeyboardlayout_help'] = 'Jei įjungta, dabartinis klaviatūros išdėstymas rodomas SEN užduočių juostoje. Tai leidžia perjungti kitus klaviatūros išdėstymus, kurie buvo įjungti operacinėje sistemoje.';
$string['seb_showreloadbutton'] = 'Rodyti perkrovimo mygtuką';
$string['seb_showreloadbutton_help'] = 'Jei įjungta, SEN užduočių juostoje rodomas įkėlimo mygtukas, leidžiantis iš naujo įkelti dabartinį tinklalapį.';
$string['seb_showsebdownloadlink'] = 'Rodyti saugios egzamino naršyklės atsisiuntimo mygtuką';
$string['seb_showsebdownloadlink_help'] = 'Jei įjungta, testo pradžios puslapyje bus rodomas saugios egzamino naršyklės atsisiuntimo mygtukas.';
$string['seb_showsebtaskbar'] = 'Rodyti SEN užduočių juostą';
$string['seb_showsebtaskbar_help'] = 'Jei įjungta, SEN naršyklės lango apačioje pasirodo užduočių juosta. Užduočių juosta reikalinga norint rodyti tokius elementus kaip „Wi-Fi“ valdymas, perkrovimo mygtukas, laikas ir klaviatūros išdėstymas.';
$string['seb_showtime'] = 'Rodyti laiką';
$string['seb_showtime_help'] = 'Jei įjungta, dabartinis laikas rodomas SEN užduočių juostoje.';
$string['seb_showwificontrol'] = 'Rodyti „Wi-Fi“ valdymą';
$string['seb_showwificontrol_help'] = 'Jei įjungta, SEN užduočių juostoje pasirodo Wi-Fi valdymo mygtukas. Mygtukas leidžia naudotojams iš naujo prisijungti prie „Wi-Fi“ tinklų, prie kurių anksčiau buvo prisijungta.';
$string['seb_templateid'] = 'Saugios egzamino naršyklės konfigūracijos šablonas';
$string['seb_templateid_help'] = 'Bandant atlikti testą, pasirinkto konfigūracijos šablono nustatymai bus naudojami konfigūruojant saugią egzamino naršyklę. Šablono nustatymus galite perrašyti rankiniais nustatymais.';
$string['seb_use_client'] = 'Taip – Naudoti SEN kliento konfigūraciją';
$string['seb_use_manually'] = 'Taip – Konfigūruoti rankiniu būdu';
$string['seb_use_template'] = 'Taip – Naudoti esamą šabloną';
$string['seb_use_upload'] = 'Taip – Įkelti savo konfigūraciją';
$string['seb_userconfirmquit'] = 'Prašyti naudotojo patvirtinti išėjimą';
$string['seb_userconfirmquit_help'] = 'Jei įjungta, naudotojai turi patvirtinti išėjimą iš SEN, kai aptinkama išėjimo nuoroda.';
$string['sebdownloadbutton'] = 'Atsisiųsti saugią egzamino naršyklę';
$string['sebkeysvalidationfailed'] = 'Klaida tikrinant SEN raktus';
$string['seblinkbutton'] = 'Paleisti saugią egzamino naršyklę';
$string['sebrequired'] = 'Šis testas buvo sukonfigūruotas taip, kad besimokantieji galėtų jį išbandyti tik naudodami saugią egzamino naršyklę.';
$string['setting:autoreconfigureseb'] = 'Automatinis SEN konfigūravimas';
$string['setting:autoreconfigureseb_desc'] = 'Jei įjungta, naudotojai, kurie naršo testą  naudodami saugią egzamino naršyklę, bus automatiškai priversti iš naujo sukonfigūruoti saugią egzamino naršyklę.';
$string['setting:displayblocksbeforestart'] = 'Rodyti blokus prieš pradedant testą';
$string['setting:displayblocksbeforestart_desc'] = 'Jei įjungta, blokai bus rodomi prieš naudotojui bandant atlikti testą.';
$string['setting:displayblockswhenfinished'] = 'Baigus testą rodyti blokus';
$string['setting:displayblockswhenfinished_desc'] = 'Jei įjungta, blokai bus rodomi naudotojui baigus testą.';
$string['setting:downloadlink'] = 'Saugios egzamino naršyklės atsisiuntimo nuoroda';
$string['setting:downloadlink_desc'] = 'Saugios egzamino naršyklės programos atsisiuntimo URL.';
$string['setting:quizpasswordrequired'] = 'Reikalingas testo slaptažodis';
$string['setting:quizpasswordrequired_desc'] = 'Jei įjungta, visose testuose, kuriems reikalinga saugi egzamino naršyklė, turi būti nustatytas testo slaptažodis.';
$string['setting:showhttplink'] = 'Rodyti http:// nuorodą';
$string['setting:showseblink'] = 'Rodyti sen:// nuorodą';
$string['setting:showseblinks'] = 'Rodyti saugios egzamino naršyklės konfigūracijos nuorodas';
$string['setting:showseblinks_desc'] = 'Ar rodyti nuorodas, kad naudotojas galėtų pasiekti saugios egzamino naršyklės konfigūracijos failą, kai prieiga prie testo neleidžiama. Atminkite, kad sen:// nuorodos gali veikti ne visose naršyklėse.';
$string['setting:supportedversions'] = 'Atminkite, kad norint naudoti konfigūracijos rakto funkciją, reikalingos šios minimalios saugios egzamino naršyklės kliento versijos: macOS – 2.1.5pre2, Windows – 3.0, iOS – 2.1.14.';
$string['settingsfrozen'] = 'Kadangi yra bent vienas bandymas atlikti testą, saugios egzamino naršyklės nustatymų atnaujinti nebegalima.';
$string['unknown_reason'] = 'Nežinoma priežastis';
$string['used'] = 'Naudojamas';
