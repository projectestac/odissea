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
 * Strings for component 'tool_uploadcourse', language 'lt', version '4.5'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Leisti ištrynimus';
$string['allowdeletes_help'] = 'Nesvarbu, ar ištrintas laukas priimtas, ar ne.';
$string['allowrenames'] = 'Leisti pervardinimus';
$string['allowrenames_help'] = 'Nesvarbu, ar pervadintas laukas priimtas, ar ne.';
$string['allowresets'] = 'Leisti nustatyti iš naujo';
$string['allowresets_help'] = 'Nesvarbu, ar iš naujo nustatytas laukas priimtas, ar ne.';
$string['cachedef_helper'] = 'Pagalbininko talpyklos kaupimas';
$string['cannotdeletecoursenotexist'] = 'Negalima ištrinti kurso, kuris neegzistuoja';
$string['cannotforcelang'] = 'Nėra leidimo priverstinai naudoti kalbą šiame kurse';
$string['cannotgenerateshortnameupdatemode'] = 'Negalima sugeneruoti trumpojo pavadinimo, kai naujinimai leidžiami';
$string['cannotreadbackupfile'] = 'Negalima perskaityti atsarginės kopijos failo';
$string['cannotrenamecoursenotexist'] = 'Negalima pervadinti kurso, kuris neegzistuoja';
$string['cannotrenameidnumberconflict'] = 'Negalima pervardyti kurso, ID numeris nesuderinamas su esamu kursu';
$string['cannotrenameshortnamealreadyinuse'] = 'Negalima pervadinti kurso, trumpas pavadinimas jau naudojamas';
$string['cannotupdatefrontpage'] = 'Jums neleidžiama pakeisti svetainės pagrindinio puslapio.';
$string['canonlyrenameinupdatemode'] = 'Kursą galima pervardinti tik tada, kada atnaujinimai leidžiami';
$string['canonlyresetcourseinupdatemode'] = 'Kursą galima iš naujo nustatyti tik atnaujinimo režime';
$string['couldnotresolvecatgorybyid'] = 'Nepavyko nustatyti kategorijos pagal ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Nepavyko nustatyti kategorijos pagal ID numerį';
$string['couldnotresolvecatgorybypath'] = 'Nepavyko nustatyti kategorijos pagal kelią';
$string['coursecreated'] = 'Kursas sukurtas';
$string['coursedeleted'] = 'Kursas panaikintas';
$string['coursedeletionnotallowed'] = 'Kurso panaikinimas neleidžiamas';
$string['coursedoesnotexistandcreatenotallowed'] = 'Kursas neegzistuoja ir kurso kurti neleidžiama';
$string['courseexistsanduploadnotallowed'] = 'Kursas egzistuoja ir atnaujinti neleidžiama';
$string['coursefile'] = 'Failas';
$string['coursefile_help'] = 'Šis failas turi būti CSV failas.';
$string['courseidnumberincremented'] = 'Kurso ID numeris padidintas {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Kurso eiga';
$string['courserenamed'] = 'Kursas pervadintas';
$string['courserenamingnotallowed'] = 'Kurso pervadinimas neleidžiamas';
$string['coursereset'] = 'Kurso atstatymas';
$string['courseresetnotallowed'] = 'Dabar leidžiama iš naujo nustatyti kursą';
$string['courserestored'] = 'Kurso atkūrimas';
$string['coursescreated'] = 'Kursai sukurti: {$a}';
$string['coursesdeleted'] = 'Kursai panaikinti: {$a}';
$string['courseserrors'] = 'Kursų klaidos: {$a}';
$string['courseshortnamegenerated'] = 'Sugeneruotas kurso trumpasis pavadinimas: {$a}';
$string['courseshortnameincremented'] = 'Kurso trumpasis pavadinimas padidintas {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Iš viso kursų: {$a}';
$string['coursesupdated'] = 'Kursai atnaujinti: {$a}';
$string['coursetemplatename'] = 'Įkėlus atkurti iš šio kurso';
$string['coursetemplatename_help'] = 'Įveskite esamą trumpąjį kurso pavadinimą, kurį naudosite kaip šabloną kuriant visus kursus.';
$string['coursetorestorefromdoesnotexist'] = 'Kursas, iš kurio atstatyti, neegzistuoja';
$string['courseupdated'] = 'Kursas atnaujintas';
$string['courseuploadnotallowed'] = 'Nėra leidimo įkelti kursus į kategoriją: {$a}';
$string['courseuploadupdatenotallowed'] = 'Kursas tokiu trumpuoju pavadinimu egzistuoja, bet jūs neturite teisių naudoti kursų įkėlimo funkcijos, kad jį atnaujintumėte.';
$string['createall'] = 'Sukurti viską, jei reikia, padidinkite trumpąjį pavadinimą';
$string['createnew'] = 'Kurti tik naujus kursus, praleisti esamus';
$string['createorupdate'] = 'Kurti naujus kursus arba atnaujinkite esamus';
$string['csvdelimiter'] = 'CSV skyriklis';
$string['csvdelimiter_help'] = 'Simbolis, atskiriantis kiekvieno įrašo duomenų seriją.';
$string['csvfileerror'] = 'Kažkas negerai su CSV failo formatu. Patikrinkite, ar sutampa antraščių ir stulpelių skaičius ir ar teisingas skyriklis bei failo kodavimas. {$a}';
$string['csvline'] = 'Linija';
$string['customfieldinvalid'] = 'Tinkintas laukas „{$a}“ yra tuščias arba jame yra neteisingų duomenų';
$string['defaultvalues'] = 'Numatytosios kurso reikšmės';
$string['defaultvaluescustomfieldcategory'] = 'Numatytosios „{$a}“ vertės';
$string['downloadcontentnotallowed'] = 'Kurso turinio atsisiuntimo konfigūravimas neleidžiamas';
$string['encoding'] = 'Kodavimas';
$string['encoding_help'] = 'CSV failo kodavimas.';
$string['errorcannotcreateorupdateenrolment'] = 'Negalima sukurti arba atnaujinti registracijos metodo „{$a}“';
$string['errorcannotdeleteenrolment'] = 'Negalima ištrinti registracijos metodo \'{$a}\'';
$string['errorcannotdisableenrolment'] = 'Negalima išjungti registracijos metodo \'{$a}\'';
$string['errorunsupportedmethod'] = 'Įregistravimo metodas „{$a}“ nepalaikomas įkeliant csv';
$string['errorwhiledeletingcourse'] = 'Klaida naikinant kursą';
$string['errorwhilerestoringcourse'] = 'Klaida atkuriant kursą';
$string['generatedshortnamealreadyinuse'] = 'Sugeneruotas trumpasis pavadinimas jau naudojamas';
$string['generatedshortnameinvalid'] = 'Sugeneruotas trumpasis pavadinimas yra netinkamas';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'ID numeris jau naudojamas kurse';
$string['importoptions'] = 'Importavimo parinktys';
$string['invalidbackupfile'] = 'Neteisingas atsarginės kopijos failas';
$string['invalidcourseformat'] = 'Netinkamas kurso formatas';
$string['invalidcsvfile'] = 'Netinkamas įvesties CSV failas';
$string['invaliddownloadcontent'] = 'Netinkamas kurso turinio vertės atsisiuntimas';
$string['invalidencoding'] = 'Netinkama koduotė';
$string['invalideupdatemode'] = 'Pasirinktas netinkamas atnaujinimo režimas';
$string['invalidfullnametoolong'] = 'Vardo lauke yra tik {$a} simboliai';
$string['invalidmode'] = 'Pasirinktas netinkamas režimas';
$string['invalidroles'] = 'Neteisingi vaidmenų pavadinimai: {$a}';
$string['invalidshortname'] = 'Neteisingas trumpas pavadinimas';
$string['invalidshortnametoolong'] = 'Trumpojo pavadinimo laukas yra apribotas iki {$a} simbolių';
$string['invalidvisibilitymode'] = 'Netinkamas matomas režimas';
$string['missingmandatoryfields'] = 'Trūksta privalomų laukų vertės: {$a}';
$string['missingshortnamenotemplate'] = 'Trūksta trumpojo pavadinimo ir trumpojo pavadinimo šablonas nenustatytas';
$string['mode'] = 'Atnaujinimo režimas';
$string['mode_help'] = 'Tai leidžia nurodyti, ar galima kurti ir (arba) atnaujinti kursus.';
$string['nochanges'] = 'Jokių pakeitimų';
$string['pluginname'] = 'Kurso įkėlimas';
$string['preview'] = 'Peržiūra';
$string['privacy:metadata'] = 'Kurso įkėlimo papildinys nesaugo jokių asmeninių duomenų.';
$string['reset'] = 'Atstatyti kursą po įkėlimo';
$string['reset_help'] = 'Ar iš naujo nustatyti kursą jį sukūrus/atnaujinus.';
$string['restoreafterimport'] = 'Atkurti po importavimo';
$string['result'] = 'Rezultatas';
$string['rowpreviewnum'] = 'Peržiūrėti eilutes';
$string['rowpreviewnum_help'] = 'Iš CSV failo eilučių, kurios bus peržiūrimos kitame puslapyje, skaičius. Ši parinktis egzistuoja siekiant apriboti kito puslapio dydį.';
$string['shortnametemplate'] = 'Šablonas trumpo pavadinimo generavimui';
$string['shortnametemplate_help'] = 'Trumpas kurso pavadinimas rodomas navigacijoje. Čia galite naudoti šablono sintaksę (%f = fullname, %i = idnumber) arba įvesti pradinę reikšmę, kuri yra padidinama.';
$string['templatefile'] = 'Atkurti iš šio failo po įkėlimo';
$string['templatefile_help'] = 'Pasirinkti failą, kuris bus naudojamas kaip šablonas kuriant visus kursus.';
$string['unknownimportmode'] = 'Nežinomas importavimo režimas';
$string['updatemissing'] = 'Užpildyti trūkstamus elementus iš CSV duomenų ir numatytųjų';
$string['updatemode'] = 'Atnaujinimo režimas';
$string['updatemode_help'] = 'Jei leidžiate atnaujinti kursus, taip pat turite nurodyti įrankiui, su kuo atnaujinti kursus.';
$string['updatemodedoessettonothing'] = 'Atnaujinimo režimas neleidžia nieko atnaujinti';
$string['updateonly'] = 'Atnaujinti tik esamus kursus';
$string['updatewithdataonly'] = 'Atnaujinti tik CSV duomenimis';
$string['updatewithdataordefaults'] = 'Atnaujinti naudojant CSV duomenis ir numatytuosius nustatymus';
$string['uploadcourse:use'] = 'Naudoti kurso įkėlimo įrankį';
$string['uploadcourses'] = 'Kursų įkėlimas';
$string['uploadcourses_help'] = 'Kursus galima įkelti tekstiniu failu. Failo formatas turi būti toks:

* Kiekvienoje failo eilutėje yra vienas įrašas
* Kiekvienas įrašas yra duomenų serija, atskirta pasirinktu skyrikliu
* Pirmajame įraše yra laukų pavadinimų sąrašas, apibrėžiantis likusio failo formatą
* Privalomi laukų pavadinimai yra trumpasis vardas, pilnas vardas ir kategorija';
$string['uploadcoursespreview'] = 'Įkeltų kursų peržiūra';
$string['uploadcoursesresult'] = 'Įkeltų kursų rezultatai';
