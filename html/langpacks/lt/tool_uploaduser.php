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
 * Strings for component 'tool_uploaduser', language 'lt', version '4.5'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Leisti ištrynimus';
$string['allowrenames'] = 'Leisti pervardinimus';
$string['allowsuspends'] = 'Leisti paskyrų sulaikymą ir aktyvavimą';
$string['assignedsysrole'] = 'Priskirtas sistemos vaidmuo {$a}';
$string['clidefault'] = 'Numatytas:';
$string['clierrorargument'] = 'Argumento --{$a->name} reikšmė neteisinga. Leidžiamos reikšmės: {$a->values}';
$string['clifile'] = 'Kelias į CSV failą su naudotojo duomenimis. Privalomas.';
$string['clifilenotreadable'] = 'Failo {$a} nėra arba jis neįskaitomas';
$string['clihelp'] = 'Spausdinti šį žinyną.';
$string['climissingargument'] = 'Būtinas argumentas --{$a}';
$string['clititle'] = 'Komandinė eilutė Įkelti naudotojo įrankį.';
$string['clivalidationerror'] = 'Patvirtinimo klaida:';
$string['csvdelimiter'] = 'CSV skyriklis';
$string['defaultvalues'] = 'Numatytos reikšmės';
$string['deleteerrors'] = 'Šalinti klaidas';
$string['duplicateemail'] = 'Aptikti keli naudotojai, turintys {$a} el. pašto adresą';
$string['encoding'] = 'Kodavimas';
$string['errormnetadd'] = 'Negalima pridėti nutolusių naudotojų';
$string['errorprefix'] = 'Klaida:';
$string['errors'] = 'Klaidos';
$string['examplecsv'] = 'Tekstinio failo pavyzdys';
$string['examplecsv_help'] = 'Norėdami naudoti tekstinio failo pavyzdį, atsisiuntę jį, atidarykite naudodami teksto arba skaičiuoklės rengyklę. Palikite pirmąją eilutę nepakeistą, tada redaguokite kitas eilutes (įrašus) ir pridėkite savo naudotojo duomenis, prireikus pridėdami daugiau eilučių. Išsaugokite failą kaip CSV, tada įkelkite.

Tekstinio failo pavyzdys taip pat gali būti naudojamas testavimui, nes galite peržiūrėti naudotojo duomenis ir pasirinkti atšaukimo  veiksmą prieš sukuriant naudotojų paskyras.';
$string['infoprefix'] = 'Info:';
$string['invalidtheme'] = 'Tema „{$a}“ neįdiegta ir bus ignoruojama.';
$string['invalidupdatetype'] = 'Šios parinkties negalima pasirinkti su pasirinktu įkėlimo tipu.';
$string['invaliduserdata'] = 'Aptikti neteisingi naudotojo {$a} duomenys ir jie buvo automatiškai išvalyti.';
$string['invaliduserdatavalues'] = 'Rasti neteisingi duomenys  ({$a->values}) apie naudotoją {$a->username}. Šie duomenys buvo ištaisyti arba ištrinti.';
$string['linex'] = 'Eilutė {$a}';
$string['matchemail'] = 'El. pašto adreso atitikimas';
$string['nochanges'] = 'Jokių pakeitimų';
$string['notheme'] = 'Šiam naudotojui jokia tema neapibrėžta.';
$string['pluginname'] = 'Naudotojo įkėlimai';
$string['privacy:metadata'] = 'Naudotojų įkėlimo papildinys nesaugo jokių asmeninių duomenų.';
$string['renameerrors'] = 'Pervardinti klaidas';
$string['requiredtemplate'] = 'Būtina. Jums galite naudoti šabloninę sintaksę čia (%l = lastname, %f = firstname, %u = username). Žiūrėti pagalbą jei reikia daugiau informacijos.';
$string['rowpreviewnum'] = 'Peržiūrėti eilutes';
$string['unassignedsysrole'] = 'Nepriskirtas sistemos vaidmuo {$a}';
$string['uploadpicture_baduserfield'] = 'Nurodytas naudotojo atributas negaliojantis. Prašau bandyti vėliau.';
$string['uploadpicture_cannotmovezip'] = 'Nepavyko perkelti zip failo į laikiną aplanką.';
$string['uploadpicture_cannotprocessdir'] = 'Nepavyko apdoroti išskleistų failų.';
$string['uploadpicture_cannotsave'] = 'Nepavyko išsaugoti paveikslėlio naudotojui {$a}. Patikrinkite originalų paveikslėlį.';
$string['uploadpicture_cannotunzip'] = 'Nepavyko išskleisti paveikslėlių failo.';
$string['uploadpicture_invalidfilename'] = 'Paveikslėlio failas {$a} turi negaliojančių ženklų varde. Praleidžiama.';
$string['uploadpicture_overwrite'] = 'Perrašyti esantį naudotojo paveikslėlį?';
$string['uploadpicture_userfield'] = 'Naudotojo atributas naudojamas sutikrinti paveikslėlius:';
$string['uploadpicture_usernotfound'] = 'Naudotojas su \'{$a->userfield}\' reikšme  \'{$a->uservalue}\' neegzistuoja. Praleidžiama.';
$string['uploadpicture_userskipped'] = 'Praleidžiamas naudotojas {$a} (jau turi paveikslėlį).';
$string['uploadpicture_userupdated'] = 'Paveikslėlis atnaujintas naudotojui {$a}';
$string['uploadpictures'] = 'Įkelti naudotojų paveikslėlius';
$string['uploadpictures_help'] = 'Naudotojo paveikslėliai gali būti įkelti kaip zip formato failai ar kaip paveikslėliai. Paveikslėliai turi būti pavadinti naudotojo-atributas.plėtinys, pvz.: naudotojas1234.jpg , kur naudotojo vardas yra naudotojas1234';
$string['uploaduser:uploaduserpictures'] = 'Įkelti naudotojo paveiksliukus';
$string['uploadusers'] = 'Įkelti naudotojus';
$string['uploadusers_help'] = 'Naudotojai gali būti įkeliami (ir pasirinktinai įregistruojami į kursus) naudojant tekstinį failą. Failo formatas turėtų būti:

* Kiekvienoje failo eilutėje yra vienas įrašas
* Kiekvienas įrašas yra duomenų serija, atskirta pasirinktu skyrikliu
* Pirmajame įraše yra laukų pavadinimų sąrašas, apibrėžiantis likusio failo formatą
* Privalomi laukų pavadinimai yra naudotojo vardas, slaptažodis, vardas, pavardė, el. paštas';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Įkelti naudotojo peržiūrą';
$string['uploadusersresult'] = 'Įkelti naudotojo rezultatus';
$string['useraccountupdated'] = 'Naudotojas atnaujintas';
$string['useraccountuptodate'] = 'Naudotojo duomenys nauji';
$string['userdeleted'] = 'Naudotojas ištrintas';
$string['userrenamed'] = 'Naudotojas pervadintas';
$string['userscreated'] = 'Naudotojas sukurtas';
$string['usersdeleted'] = 'Naudotojas ištrintas';
$string['usersrenamed'] = 'Naudotojas pervadintas';
$string['usersskipped'] = 'Naudotojas praleistas';
$string['usersupdated'] = 'Naudotojas atnaujintas';
$string['usersweakpassword'] = 'Naudotojas turi silpną slaptažodį';
$string['userthemesnotallowed'] = 'Naudotojų temos neįjungtos, todėl į įkeltą naudotojų failą įtrauktos temos bus ignoruojamos.';
$string['uubulk'] = 'Ieškoti masinių operacijų';
$string['uubulkall'] = 'Visi naudotojai';
$string['uubulknew'] = 'Nauji naudotojai';
$string['uubulkupdated'] = 'Atnaujinti naudotojai';
$string['uucsvline'] = 'CSV linija';
$string['uulegacy1role'] = '(Originalus besimokantysis) typeN=1';
$string['uulegacy2role'] = '(Orginalus dėstytojas) typeN=2';
$string['uulegacy3role'] = '(Orginalus neredaguojantis dėstytojas) typeN=3';
$string['uunoemailduplicates'] = 'Uždrausti elektroninio pašto dublikatus';
$string['uuoptype'] = 'Įkeliamas tipas';
$string['uuoptype_addinc'] = 'Pridėti visus, jei reikės, papildyti skaičiais naudotojo vardus';
$string['uuoptype_addnew'] = 'Pridėti tik naujus, praleisti egzistuojančius naudotojus';
$string['uuoptype_addupdate'] = 'Pridėti naujus ir atnaujinti egzistuojančius naudotojus';
$string['uuoptype_update'] = 'Atnaujinti tik egzistuojančius naudotojus';
$string['uupasswordcron'] = 'Sugeneruota periodinių (cron) užduočių metu';
$string['uupasswordnew'] = 'Naujo naudotojo slaptažodis';
$string['uupasswordold'] = 'Egzistuojančio naudotojo slaptažodis';
$string['uustandardusernames'] = 'Standartizuoti naudotojų vardai';
$string['uuupdateall'] = 'Keisti failu ir numatytomis reikšmėmis';
$string['uuupdatefromfile'] = 'Perrašyti sufailu';
$string['uuupdatemissing'] = 'Užpildyti nerastas reikšmes iš failo ar numatytų reikšmių';
$string['uuupdatetype'] = 'Egzistuojančių naudotojų duomenys';
$string['uuusernametemplate'] = 'Naudotojų vardų šablonai';
$string['warningprefix'] = 'Įspėjimas:';
