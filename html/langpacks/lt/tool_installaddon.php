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
 * Strings for component 'tool_installaddon', language 'lt', version '4.5'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Pripažinimas';
$string['acknowledgementtext'] = 'Suprantu, kad prieš diegiant papildomus papildinius esu atsakinga už visas šios svetainės atsargines kopijas. Sutinku ir suprantu, kad įskiepiuose (ypač, bet ne tik iš neoficialių šaltinių) gali būti saugos spragų, jie gali padaryti svetainę nepasiekiamą arba sukelti privačių duomenų nutekėjimą ar praradimą.';
$string['featuredisabled'] = 'Papildinio diegimo programa šioje svetainėje išjungta.';
$string['installaddon'] = 'Įdiekite papildinį!';
$string['installaddons'] = 'Įdiegti papildinius';
$string['installfromrepo'] = 'Įdiegti papildinius iš Moodle papildinių puslapio';
$string['installfromrepo_help'] = 'Būsite nukreipti į Moodle papildinių katalogą, kur galėsite ieškoti ir įdiegti papildinį. Atminkite, kad taip pat bus išsiųstas visas jūsų svetainės pavadinimas, URL ir Moodle versija, kad jums būtų lengviau įdiegti.';
$string['installfromzip'] = 'Įdiegti papildinį iš ZIP failo';
$string['installfromzip_help'] = 'Alternatyva įdiegti papildinį tiesiai iš Moodle papildinių katalogo yra įkelti papildinio ZIP paketą. ZIP paketo struktūra turi būti tokia pati kaip paketo, atsisiųsto iš Moodle papildinių katalogo.';
$string['installfromzipfile'] = 'ZIP paketas';
$string['installfromzipfile_help'] = 'Papildinio ZIP pakete turi būti tik vienas katalogas, pavadintas taip, kad atitiktų papildinio pavadinimą. ZIP bus išskleistas į atitinkamą papildinio tipo vietą. Jei paketas buvo atsisiųstas iš Moodle papildinių katalogo, jis turės tokią struktūrą.';
$string['installfromzipinvalid'] = 'Papildinio ZIP pakete turi būti tik vienas katalogas, pavadintas taip, kad atitiktų papildinio pavadinimą. Pateiktas failas nėra tinkamas ZIP paketas.';
$string['installfromziprootdir'] = 'Pervadinti šakninį katalogą';
$string['installfromziprootdir_help'] = 'Kai kuriuose ZIP paketuose, pvz., sugeneruotuose „Github“, gali būti neteisingas šakninio katalogo pavadinimas. Jei taip, čia galima įvesti teisingą pavadinimą.';
$string['installfromzipsubmit'] = 'Įdiegti papildinį iš ZIP failo';
$string['installfromziptype'] = 'Papildinio tipas';
$string['installfromziptype_help'] = 'Įskiepių, kurie teisingai deklaruoja savo komponento pavadinimą, diegimo programa gali automatiškai aptikti papildinio tipą. Jei automatinis aptikimas nepavyksta, rankiniu būdu pasirinkite tinkamą papildinio tipą. Įspėjimas: Diegimo procedūra gali nepavykti, jei nurodytas netinkamas papildinio tipas.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Įsitikinkite, kad interneto serverio procesas gali įrašyti papildinio tipo šakninę vietą.';
$string['permcheckerror'] = 'Klaida tikrinant rašymo leidimą';
$string['permcheckprogress'] = 'Tikrinama, ar yra rašymo leidimas...';
$string['permcheckrepeat'] = 'Tikrinti dar kartą';
$string['permcheckresultno'] = 'Papildinio tipo vietos <em>{$a->path}</em> negalima įrašyti';
$string['permcheckresultyes'] = 'Papildinio tipo vietą <em>{$a->path}</em> galima įrašyti';
$string['pluginname'] = 'Papildinio diegimo programa';
$string['privacy:metadata'] = 'Papildinių įdiegimo papildinys nesaugo jokių asmeninių duomenų.';
$string['remoterequestalreadyinstalled'] = 'Yra užklausa įdiegti papildinio {$a->name} ({$a->component}) versiją {$a->version} iš Moodle papildinių katalogo šioje svetainėje. Tačiau šis papildinys <strong>jau įdiegtas</strong> svetainėje.';
$string['remoterequestconfirm'] = 'Yra užklausa įdiegti papildinio <strong>{$a->name}</strong> ({$a->component}) versiją {$a->version} iš Moodle papildinių katalogo šioje svetainėje. Jei tęsite, papildinio ZIP paketas bus atsisiųstas patvirtinimui. Dar niekas nebus įdiegta.';
$string['remoterequestinvalid'] = 'Yra užklausa įdiegti papildinį iš Moodle papildinių katalogo šioje svetainėje. Deja, užklausa negalioja, todėl papildinio įdiegti negalima.';
$string['remoterequestnoninstallable'] = 'Yra užklausa įdiegti papildinio {$a->name} ({$a->component}) versiją {$a->version} iš Moodle papildinių katalogo šioje svetainėje. Tačiau išankstinė papildinio diegimo patikra nepavyko (priežasties kodas: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Yra užklausa įdiegti papildinio {$a->name} ({$a->component}) versiją {$a->version} iš Moodle papildinių katalogo šioje svetainėje. Tačiau vietos <strong>{$a->typepath}</strong> <strong>neįmanoma įrašyti</strong>. Turite suteikti interneto serverio naudotojui rašymo prieigą prie vietos, tada paspausti tęsti mygtuką, kad patikrintumėte pakartotinai.';
$string['remoterequestpluginfoexception'] = 'Oi... Bandant gauti informacijos apie papildinio {$a->name} ({$a->component}) versiją {$a->version} įvyko klaida. Papildinio įdiegti negalima. Įjunkite derinimo režimą, kad pamatytumėte išsamią klaidos informaciją.';
$string['typedetectionfailed'] = 'Nepavyko aptikti papildinio tipo. Prašome pasirinkti papildinio tipą rankiniu būdu.';
$string['typedetectionmismatch'] = 'Pasirinktas papildinio tipas neatitinka papildinio deklaruojamo tipo: {$a}';
