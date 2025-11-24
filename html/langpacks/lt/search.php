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
 * Strings for component 'search', language 'lt', version '4.5'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Išplėstinė paieška';
$string['all'] = 'Viskas';
$string['allareas'] = 'Visos sritys';
$string['allcourses'] = 'Visi kursai';
$string['allusers'] = 'Visi naudotojai';
$string['author'] = 'Autorius';
$string['authorname'] = 'Autoriaus vardas';
$string['back'] = 'Grįžti';
$string['beadmin'] = 'Turite turėti administratoriaus teises, kad galėtumėte naudotis šiuo puslapiu.';
$string['checkdb'] = 'Tikrinti duomenų bazę';
$string['checkdbadvice'] = 'Patikrinkite, ar jūsų duomenų bazėje nekyla jokių problemų.';
$string['checkdir'] = 'Tikrinti katalogą';
$string['checkdiradvice'] = 'Įsitikinkite, kad duomenų katalogas egzistuoja ir į jį galima įrašyti.';
$string['commenton'] = 'Komentaras apie';
$string['confirm_delete'] = 'Ar tikrai norite ištrinti {$a} indeksą? Kol paieškos sritis nebus indeksuota, naudotojai negaus paieškos rezultatų iš šios srities.';
$string['confirm_deleteall'] = 'Ar tikrai norite ištrinti visą indeksuotą turinį dabar? Kol svetainė nebus vėl indeksuota, naudotojai negaus paieškos rezultatų.';
$string['confirm_indexall'] = 'Ar tikrai norite atnaujinti indeksuotą turinį dabar? Jei reikia indeksuoti didelį kiekį turinio, tai gali užtrukti ilgai. Jei naudojate tiesioginius serverius, paprastai indeksavimą turėtumėte palikti suplanuotai užduočiai „Visuotinės paieškos indeksavimas“.';
$string['confirm_reindexall'] = 'Ar tikrai norite iš naujo indeksuoti visą svetainės turinį dabar? Jei jūsų svetainėje yra daug turinio, tai užtruks ilgai ir naudotojai gali negauti visų paieškos rezultatų, kol ji nebus baigta.';
$string['content:courserole'] = '{$a->role} {$a->course}';
$string['core-all'] = 'Visi';
$string['core-course-content'] = 'Kurso turinys';
$string['core-courses'] = 'Kursai';
$string['core-other'] = 'Kiti';
$string['core-users'] = 'Naudotojai';
$string['createanindex'] = 'kurti indeksą';
$string['createdon'] = 'Sukurta';
$string['database'] = 'Duomenų bazė';
$string['databasestate'] = 'Indeksuojama duomenų bazės būsena';
$string['datadirectory'] = 'Duomenų katalogas';
$string['deleteindex'] = 'Ištrinti indeksą {$a}';
$string['deletionsinindex'] = 'Naikinimai indekse';
$string['docmodifiedon'] = 'Paskutinį kartą pakeista {$a}';
$string['doctype'] = 'Dokumento tipas';
$string['doctypenotsupported'] = 'Nurodytas dokumento tipas dar nepalaikomas';
$string['documents'] = 'dokumentai';
$string['documentsfor'] = 'Dokumentai, skirti';
$string['documentsindatabase'] = 'Duomenų bazės dokumentai';
$string['documentsinindex'] = 'Indekso dokumentai';
$string['duration'] = 'Trukmė';
$string['emptydatabaseerror'] = 'Duomenų bazės lentelės nėra arba joje nėra indekso įrašų.';
$string['enginenotfound'] = 'Variklis {$a} nerastas.';
$string['enginenotinstalled'] = 'Variklis {$a} neįdiegtas.';
$string['enginenotselected'] = 'Jūs nepasirinkote jokios paieškos sistemos.';
$string['engineserverstatus'] = 'Paieškos variklis nepasiekiamas. Susisiekite su administratoriumi.';
$string['enteryoursearchquery'] = 'Įveskite paieškos užklausą';
$string['error_indexing'] = 'Indeksuojant įvyko klaida';
$string['errorareanotavailable'] = '{$a} paieškos sritis nepasiekiama.';
$string['errors'] = 'Klaidos';
$string['everywhere'] = 'Visur, kur galite prieiti';
$string['filesinindexdirectory'] = 'Indekso katalogo failai';
$string['filterheader'] = 'Filtras';
$string['fromtime'] = 'Pakeista po';
$string['globalsearch'] = 'Globali paieška';
$string['globalsearchdisabled'] = 'Visuotinė paieška neįjungta.';
$string['gradualreindex'] = 'Laipsniškas pakartotinis indeksavimas {$a}';
$string['gradualreindex_confirm'] = 'Ar tikrai norite iš naujo indeksuoti {$a}? Tai gali užtrukti, nors esami duomenys išliks pasiekiami per indeksavimą.';
$string['gradualreindex_queued'] = 'Buvo pateikta užklausa pakartotinai indeksuoti {$a->name} ({$a->count} kontekstus). Šį indeksavimą atliks suplanuota užduotis „Visuotinės paieškos indeksavimas“.';
$string['incourse'] = 'kurse {$a}';
$string['index'] = 'Indeksas';
$string['indexwhendisabledfullnotice'] = 'Indeksuoti šiuo metu neleidžiama, kai paieška išjungta. Norėdami tai įjungti, žr. nustatymą  <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'Indeksavimas nepasiekiamas.';
$string['invalidindexerror'] = 'Indekso kataloge yra netinkamas indeksas arba jis tuščias.';
$string['ittook'] = 'Truko';
$string['matchingfile'] = 'Atitinka iš failo <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Suderinta iš failų:';
$string['mycoursesonly'] = 'Tik mano kursai';
$string['next'] = 'Pirmyn';
$string['noindexmessage'] = 'Administratorius: paieškos indekso nėra.';
$string['noresults'] = 'Nėra rezultatų';
$string['normalsearch'] = 'Įprasta paieška';
$string['notitle'] = 'Be pavadinimo';
$string['openedon'] = 'atidaryta';
$string['optimize'] = 'Optimizuoti';
$string['order'] = 'Rezultatų tvarka';
$string['order_location'] = 'Suteikite pirmenybę rezultatams, susijusiems su {$a}';
$string['order_relevance'] = 'Pirmiausia aktualiausi rezultatai';
$string['priority'] = 'Prioritetas';
$string['priority_normal'] = 'Normalus';
$string['priority_reindexing'] = 'Perindeksavimas';
$string['privacy:metadata'] = 'Paieškos posistemė nesaugo jokių asmens duomenų.';
$string['progress'] = 'Progresas';
$string['queryerror'] = 'Jūsų pateiktos užklausos nepavyko išanalizuoti paieškos varikliui: {$a}';
$string['queueheading'] = 'Papildoma indeksavimo eilė ({$a} elementai)';
$string['resultsreturnedfor'] = 'rezultatai grąžinti';
$string['runindexer'] = 'Paleisti indeksavimo priemonę (tikrąją)';
$string['runindexertest'] = 'Paleisti indeksavimo priemonės testą';
$string['schemanotupdated'] = 'Paieškos schema pasenusi.';
$string['schemaversionunknown'] = 'Paieškos variklis nežino apie dabartinę schemos versiją.';
$string['score'] = 'Balas';
$string['search'] = 'Ieškoti';
$string['search:course'] = 'Kursai';
$string['search:course_teacher'] = 'Kurso Dėstytojas';
$string['search:customfield'] = 'Kursų pasirinktiniai laukai';
$string['search:message_received'] = 'Pranešimai - gauti';
$string['search:message_sent'] = 'Pranešimai - išsiųsti';
$string['search:mycourse'] = 'Mano kursai';
$string['search:section'] = 'Kurso skyriai';
$string['search:user'] = 'Naudotojai';
$string['searcharea'] = 'Paieškos sritis';
$string['searchareacategories'] = 'Paieškos sričių kategorijos';
$string['searching'] = 'Ieškoma...';
$string['searchnotpermitted'] = 'Jums negalima vykdyti paieškos';
$string['searchsetupdescription'] = 'Šie veiksmai padės nustatyti Moodle visuotinę paiešką.';
$string['searchwithin'] = 'Paieška viduje';
$string['seconds'] = 'sek.';
$string['solutions'] = 'Sprendimai';
$string['statistics'] = 'Statistika';
$string['step'] = 'Žingsnis';
$string['thesewordshelpimproverank'] = 'Šie žodžiai padės pagerinti paiešką';
$string['thesewordsmustappear'] = 'Šie žodžiai turi būti';
$string['thesewordsmustnotappear'] = 'Šių žodžių neturi būti';
$string['title'] = 'Pavadinimas';
$string['tofetchtheseresults'] = 'norint iškviesti šiuos rezultatus';
$string['topresults'] = 'Geriausi rezultatai';
$string['totalsize'] = 'Visas dydis';
$string['totime'] = 'Modifikuota anksčiau';
$string['type'] = 'Tipas';
$string['uncompleteindexingerror'] = 'Indeksavimas nebuvo baigtas sėkmingai. Paleiskite jį iš naujo.';
$string['versiontoolow'] = 'Atsiprašome, norint vykdyti visuotinę iešką reikia PHP 5.0.0 arba naujesnės versijos';
$string['viewresultincontext'] = 'Peržiūrėti šį rezultatą kontekste';
$string['wordsintitle'] = 'Žodžiai pavadinime';
