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
 * Strings for component 'search', language 'eu', version '4.5'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Bilaketa aurreratua';
$string['all'] = 'Guztiak';
$string['allareas'] = 'Eremu guztiak';
$string['allcourses'] = 'Ikastaro guztiak';
$string['allusers'] = 'Erabiltzaile guztiak';
$string['author'] = 'Egilea';
$string['authorname'] = 'Egilearen izena';
$string['back'] = 'Atzera';
$string['beadmin'] = 'Kudeatzailea izan behar duzu orri hau erabiltzeko';
$string['checkdb'] = 'Egiaztatu datu-basea';
$string['checkdbadvice'] = 'Egiaztatu datu-basea arazorik dagoen ikusteko';
$string['checkdir'] = 'Egiaztatu karpeta';
$string['checkdiradvice'] = 'Ziurtatu datuen karpeta badela eta bertan idaz daitekeela';
$string['commenton'] = 'Iruzkina noiz:';
$string['confirm_delete'] = 'Ziur zaude {$a}(e)rako indizea ezabatu nahi duzula? Bilaketa eremua indexatu bitartean, bilaketetan erabiltzaileek ez dute eremu honetako emaitzarik lortuko.';
$string['confirm_deleteall'] = 'Ziur zaude indizatutako eduki guztiak orain ezabatu nahi dituzula? Gunea berriz indizatu bitartean, erabiltzaileek bilaketetan ez dute emaitzik lortuko.';
$string['confirm_indexall'] = 'Ziur zaude indexatutako edukiak orain eguneratu nahi dituzula? Eduki kopuru handia indexatzea beharrezkoa bada, honek denbora luzea beharko du. Lanean dauden zerbitzarien kasuan, indexatzea \'Bilaketa orokorrerako indexatzea\' programatutako atazaren esku utzi beharko litzateke.';
$string['confirm_reindexall'] = 'Ziur zaude guneko eduki guztiak orain berriz indexatu nahi dituzula? Zure guneak eduki kopuru handia badauka, honek denbora luzea beharko du, eta osatu bitartean erabiltzaileek ez dituzte bilaketen emaitza guztiak eskuratuko.';
$string['content:courserole'] = '{$a->role} rola {$a->course} ikastaroan';
$string['core-all'] = 'Guztiak';
$string['core-course-content'] = 'Ikastaroko edukia';
$string['core-courses'] = 'Ikastaroak';
$string['core-other'] = 'Beste bat';
$string['core-users'] = 'Erabiltzaileak';
$string['createanindex'] = 'sortu indizea';
$string['createdon'] = 'Sortua noiz:';
$string['database'] = 'Datu-basea';
$string['databasestate'] = 'Datu-basearen egoera indexatzen';
$string['datadirectory'] = 'Datuen karpeta';
$string['deleteindex'] = 'Ezabatu {$a} indizea';
$string['deletionsinindex'] = 'Ezabaketak indizean';
$string['docmodifiedon'] = 'Azken aldaketa: {$a}';
$string['doctype'] = 'Dokumentu mota';
$string['doctypenotsupported'] = 'Zehaztutako dokumentu mota ez da oraindik onartzen.';
$string['documents'] = 'dokumentuak';
$string['documentsfor'] = 'Dokumentuak honetarako:';
$string['documentsindatabase'] = 'Dokumentuak datu-basean';
$string['documentsinindex'] = 'Dokumentuak indizean';
$string['duration'] = 'Iraupena';
$string['emptydatabaseerror'] = 'Ez dago datu-basearen taula edo ez du aurkibide-erregistrorik';
$string['enginenotfound'] = 'Ez da {$a} bilatzailea aurkitu.';
$string['enginenotinstalled'] = '{$a} bilatzailea ez dago instalatuta.';
$string['enginenotselected'] = 'Ez duzu bilaketa-motorrik aukeratu.';
$string['engineserverstatus'] = 'Bilaketa-motorra ez dago eskuragarri. Jar zaitez harremanetan kudeatzailearekin.';
$string['enteryoursearchquery'] = 'Idatzi zure bilaketa';
$string['error_indexing'] = 'Errorea gertatu da indexatzean';
$string['errorareanotavailable'] = '{$a} bilaketa-eremua ez dago oraindik eskuragarri.';
$string['errors'] = 'Erroreak';
$string['everywhere'] = 'Sarbidea duzun leku guztietan';
$string['filesinindexdirectory'] = 'Fitxategiak aurkibide-direktorioan';
$string['filterheader'] = 'Iragazkia';
$string['fromtime'] = 'Data honen ostean eguneratuta:';
$string['globalsearch'] = 'Bilaketa orokorra';
$string['globalsearchdisabled'] = 'Bilaketa orokorra ez dago gaituta';
$string['gradualreindex'] = 'Pixkanaka berriz indexatzea {$a}';
$string['gradualreindex_confirm'] = 'Ziur zaude {$a} berriz indexatzea nahi duzula? Honek behar bada denbora nahiko beharko du, nahiz eta berriz indexatu bitartean oraingo datuak eskuragarri egongo diren.';
$string['gradualreindex_queued'] = 'Berriz indexatzearen eskaera egin da {$a->name}(e)rako ({$a->count} testuinguru). Indexatze hau "Bilaketa orokorrerako indexatzea" programatutako atazak egingo du.';
$string['incourse'] = '{$a} ikastaroan';
$string['index'] = 'Indizea';
$string['indexwhendisabledfullnotice'] = 'Indexatzea ez dago baimenduta bilaketa desgaituta badago. Bilaketa gaitzeko, ikusi mesedez <a href="{$a->url}">searchindexwhendisabled</a> ezarpena.';
$string['indexwhendisabledshortnotice'] = 'Indexatzea ez dago eskuragarri.';
$string['invalidindexerror'] = 'Aurkibide-direktorioak aurkibide ezegoki bat du edo hutsik dago';
$string['ittook'] = 'Tori';
$string['matchingfile'] = '<span class="filename">{$a}</span> fitxategian topatutakoak';
$string['matchingfiles'] = 'Hurrengo fitxategietan topatutakoak:';
$string['mycoursesonly'] = 'Nire ikastaroak soilik';
$string['next'] = 'Hurrengoa';
$string['noindexmessage'] = 'Kudeatzailea: ez dago bilaketa-aurkibiderik, antza. Mesedez';
$string['noresults'] = 'Emaitzarik ez';
$string['normalsearch'] = 'Bilaketa normala';
$string['notitle'] = 'Izenbururik ez';
$string['openedon'] = 'irekia noiz:';
$string['optimize'] = 'Optimizatu';
$string['order'] = 'Emaitzen ordena';
$string['order_location'] = 'Lehenetsi emaitzak {$a}(r)en arabera';
$string['order_relevance'] = 'Emaitza esanguratsuenak lehenengo';
$string['performsearch'] = 'Egin bilaketa';
$string['priority'] = 'Lehentasuna';
$string['priority_normal'] = 'Arrunta';
$string['priority_reindexing'] = 'Berriz indexatzea';
$string['privacy:metadata'] = 'Bilaketen azpisistemak ez du datu pertsonalik biltzen.';
$string['progress'] = 'Aurrerapena';
$string['queryerror'] = 'Bilaketa-motorrak ezin izan du zure bilaketa aztertu: {$a}';
$string['queueheading'] = 'Indexatze gehigarrien ilara ({$a} elementu)';
$string['resultsreturnedfor'] = 'lortutako emaitzak honetarako:';
$string['runindexer'] = 'Abiarazi indexatzailea (erreala)';
$string['runindexertest'] = 'Abiarazi indexatzailaren proba';
$string['schemanotupdated'] = 'Bilaketa-eskema iraungita dago.';
$string['schemaversionunknown'] = 'Bilaketa-motorrak ez du uneko bertsioaren eskema ezagutzen.';
$string['score'] = 'Puntuazioa';
$string['search'] = 'Bilatu';
$string['search:course'] = 'Ikastaroak';
$string['search:course_teacher'] = 'Ikastaroko Irakaslea';
$string['search:customfield'] = 'Ikastaroko eremu pertsonalizatuak';
$string['search:message_received'] = 'Mezuak - jasotakoak';
$string['search:message_sent'] = 'Mezuak - bidalitakoak';
$string['search:mycourse'] = 'Nire ikastaroak';
$string['search:section'] = 'Ikastaro-atalak';
$string['search:user'] = 'Erabiltzaileak';
$string['searcharea'] = 'Bilaketa-eremua';
$string['searchareacategories'] = 'Bilaketa-eremuen kategoriak';
$string['searching'] = 'Bilatzen hemen:';
$string['searchnotpermitted'] = 'Ez duzu bilaketa egiteko baimenik';
$string['searchsetupdescription'] = 'Hurrengo pausoek lagunduko dizute Moodlen bilaketa orokorra martxan jartzen.';
$string['searchwithin'] = 'Bilatu honen barruan';
$string['seconds'] = 'segundo';
$string['sitewidesearch'] = 'Gune mailako bilaketa';
$string['solutions'] = 'Konponketak';
$string['statistics'] = 'Estatistikak';
$string['step'] = 'Urratsa';
$string['thesewordshelpimproverank'] = 'Hitz hauek hobetu egingo dute bilaketa';
$string['thesewordsmustappear'] = 'Hitz hauek agertu egin behar dute';
$string['thesewordsmustnotappear'] = 'Hitz hauek ez dute agertu behar';
$string['title'] = 'Izenburua';
$string['tofetchtheseresults'] = 'Emaitza hauek lortzeko:';
$string['topresults'] = 'Emaitza onenak';
$string['totalsize'] = 'Tamaina osoa';
$string['totime'] = 'Data honen aurretik eguneratuta:';
$string['type'] = 'Mota';
$string['uncompleteindexingerror'] = 'Indexatzea ez da ondo osatu; mesedez, berriz abiarazi ezazu.';
$string['versiontoolow'] = 'Sentitzen dugu, bilaketa orokorrak PHP 5.0.0 edo aurreragokoa behar du';
$string['viewresultincontext'] = 'Ikusi emaitza hau bere testuinguruan';
$string['wordsintitle'] = 'Hitzak izenburuan';
