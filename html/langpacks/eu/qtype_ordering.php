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
 * Strings for component 'qtype_ordering', language 'eu', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posizio absolutua';
$string['addmultipleanswers'] = 'Gehitu {$a} elementu gehiago';
$string['addsingleanswer'] = 'Gehitu beste elementu bat';
$string['allornothing'] = 'Dena ala ezer ez';
$string['answer'] = 'Elementuaren testua';
$string['correctitemsnumber'] = 'Zuzen dauden elementuak: {$a}';
$string['correctorder'] = 'Elementu hauentzako ordena zuzena ondorengoa da:';
$string['defaultanswerformat'] = 'Erantzun-formatu lehenetsia';
$string['defaultquestionname'] = 'Arrastatu eta kokatu ondorengo elementuak ordena egokian.';
$string['draggableitemno'] = '{no}. elementu arrastagarria';
$string['draggableitems'] = 'Elementu arrastagarriak';
$string['duplicatesnotallowed'] = 'Elementu arrastagarriak bikoiztea ez dago baimenduta. "{$a->text}" katea dagoeneko erabiltzen da {$a->item} elementuan.';
$string['editingordering'] = 'Ordenatzeko galdera editatzen';
$string['gradedetails'] = 'Kalifikazio xehetasunak';
$string['gradingtype'] = 'Kalifikazio-mota';
$string['gradingtype_help'] = 'Aukeratu kalifikazioa kalkulatzeko modua.

**Dena ala ezer ez**
Elementu guztiak posizio egokian badaude, gehieneko puntuazioa lortzen da. Bestela, puntuazioa zero da.

**Posizio absolutua**
: Elementu bat zuzentzat hartzen da erantzun zuzenaren posizio berean badago. Galderaren gehieneko puntuazioa ikasleari erakutsitako **elementu-kopurua** da.

**Posizio zuzenarekiko**
Elementu bat zuzentzat hartzen da erantzun zuzenaren posizio berean badago. Elementu zuzenek puntuazio hau jasotzen dute: erakutsitako elementu kopurua ken bat. Elementu okerren puntuazioa honakoa da: erakutsitako elementu kopurua ken bat eta ken elementuaren posizio zuzenarekiko distantzia bat. Hala, ikasleari ***n*** elementu erakusten bazaizkio, elementu bakoitzerako eskuragarri dagoen puntuazioa ***(n - 1)*** da, eta galderaren gehieneko puntuazioa ***n x (n - 1)*** da, hau da, ****(n² - n)****.

**Ondorengoko elementuarekiko (azkena izan ezik)**
: Elementu bat zuzentzat hartzen da ondorengoko elementua erantzun zuzeneko elementu bera bada. Azken posizioko elementua ez da egiaztatzen. Hala, galderaren gehieneko puntuazioa ikasleari erakutsitako **elementu kopurua ken bat** da.

**Ondorengoko elementuarekiko (azkena barne)**
: Elementu bat zuzentzat hartzen da ondorengoko elementua erantzun zuzeneko elementu bera bada. Honek azken elementua ere kontuan hartzen du, ondorengoko elementurik ez daukan arren. Hala, galderaren gehieneko puntuazioa ikasleari erakutsitako **elementu kopurua** da.

**Aurreko eta ondorengoko elementuarekiko**
: Elementu bat zuzentzat hartzen da aurreko eta ondorengoko elementuak erantzun zuzenaren elementu berberak badira. Lehenengo elementuak ez luke aurreko punturik izan behar, eta azkeneko puntuak ez luke ondorengoko elementurik izan behar. Hala, elementu bakoitzean gehienez bi puntu lortu daitezke, eta galderari eman dakiokeen gehieneko puntuazioa ikasleari erakutsitako **elementu kopuruaren bikoitza** da.

**Aurreko eta ondorengoko elementu GUZTIEKIKO**
: Elementu bat zuzentzat jotzen da baldin eta erantzun zuzeneko aurreko elementu berberak baditu, eta erantzun zuzeneko ondorengoko elementu berberak erabiltzen baditu. Aurreko eta ondorengoko elementuen hurrenkerak ez du inporta. Hala, ikasleari ***n*** elementu erakusten bazaizkio, elementu bakoitzerako eskuragarri dagoen puntuazioa ***(n - 1)*** da, eta galderarentzat eskuragarri dagoen gehieneko puntuazioa ***n x (n - 1)**** da, hau da, ****(n² - n)****.

**Ordenatutako azpimultzo luzeena**
Kalifikazioa ordenatutako elementuen azpimultzo luzeenaren elementu kopurua da. Gehieneko puntuazioa erakutsitako elementu-kopuruaren berdina da. Azpimultzo batek gutxienez bi elementu izan behar ditu. Azpimultzoak ez du zertan lehenengo elementuan hasi behar (baina hala hasi daiteke) eta ez dute zertan elkarren ondoan egon behar (baina hala egon daitezke). Luzera bereko azpimultzo bat baino gehiago dagoenean, aurkitzen den lehenengo azpimultzoko elementuak, ezkerretik eskuinera bilatzean, erakutsiko dira zuzen gisa. Beste elementuak oker gisa erakutsiko dira.

**Ondoko azpimultzo luzeena**
Kalifikazioa ordenatutako elkarren ondoan dauden elementuen azpimultzo luzeenean dagoen elementu kopurua da. Azpimultzo batek gutxienez bi elementu izan behar ditu. Azpimultzo batek gutxienez bi elementu izan behar ditu. Azpimultzoak ez du zertan lehenengo elementuan hasi behar (baina hala hasi daiteke) eta ELKARREN ONDOAN egon behar dute. Luzera bereko azpimultzo bat baino gehiago dagoenean, aurkitzen den lehenengo azpimultzoko elementuak, ezkerretik eskuinera bilatzean, erakutsiko dira zuzen gisa. Beste elementuak oker gisa erakutsiko dira.';
$string['highlightresponse'] = 'Nabarmendu erantzuna zuzen ala oker gisa';
$string['horizontal'] = 'Horizontala';
$string['incorrectitemsnumber'] = 'Oker dauden elementuak: {$a}';
$string['layouttype'] = 'Elementuen diseinua';
$string['layouttype_help'] = 'Elementuak bertikalki ala horizontalki erakutsi behar diren';
$string['longestcontiguoussubset'] = 'Ondoko azpimultzo luzeena';
$string['longestorderedsubset'] = 'Ordenatutako azpimultzo luzeena';
$string['moved'] = '{$a->item} mugitu da. Posizio berria: {$a->position} guztirako {$a->total}(e)tatik.';
$string['moveleft'] = 'Mugitu ezkerrera';
$string['moveright'] = 'Mugitu eskuinera';
$string['noresponsedetails'] = 'Sentitzen dugu, baina ez dago eskuragarri galdera honen erantzunari buruzko xehetasunik.';
$string['noscore'] = 'Puntuaziorik ez';
$string['notenoughanswers'] = 'Ordenatzeko galderak {$a} baino erantzun gehiago izan behar ditu.';
$string['notenoughsubsetitems'] = 'Azpimultzo batek gutxienez {$a} elementu izan behar ditu.';
$string['numberingstyle'] = 'Aukera kopurua?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'Numerazio-estilo lehenetsia';
$string['numberingstyle_help'] = 'Aukeratu galdera honetako elementu arrastagarrien numerazio-estiloa.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Numeraziorik ez';
$string['partialitemsnumber'] = 'Partzialki zuzen dauden elementuak: {$a}';
$string['pluginname'] = 'Ordenatzea';
$string['pluginname_help'] = 'Elementu batzuk nahastuta agertzen dira. Elementuak arrastatu daitezke zentzuzko ordenan jarriaz.';
$string['pluginname_link'] = 'galdera/mota/ordenatzea';
$string['pluginnameadding'] = 'Ordenatzeko galdera bat gehitzen';
$string['pluginnameediting'] = 'Ordenatzeko galdera bat editatzen';
$string['pluginnamesummary'] = 'Nahastutako elementuak ordena adierazgarrian jarri.';
$string['positionx'] = '{$a}. posizioa';
$string['privacy:preference:gradingtype'] = 'Kalifikazio-mota.';
$string['privacy:preference:layouttype'] = 'Elementuen diseinua.';
$string['privacy:preference:numberingstyle'] = 'Aukeratutakoen numerazio estiloa.';
$string['privacy:preference:selectcount'] = 'Aukeratutakoen kopurua.';
$string['privacy:preference:selecttype'] = 'Elementu aukeraketa mota.';
$string['privacy:preference:showgrading'] = 'Kalifikazioaren xehetasunak erakutsiko diren ala ez.';
$string['regradeissuenumitemschanged'] = 'Elementu arrastagarri kopurua aldatu da.';
$string['relativeallpreviousandnext'] = 'Aurreko eta ondorengoko elementu GUZTIEKIKO';
$string['relativenextexcludelast'] = 'Ondorengoko elementuarekiko (azkena izan ezik)';
$string['relativenextincludelast'] = 'Ondorengoko elementuarekiko (azkena barne)';
$string['relativeonepreviousandnext'] = 'Aurreko eta ondorengoko elementuarekiko';
$string['relativetocorrect'] = 'Posizio zuzenarekiko';
$string['removeeditor'] = 'Kendu HTML editorea';
$string['removeitem'] = 'Kendu elementu arrastagarria';
$string['scoredetails'] = 'Hauek dira erantzun honetako elementu bakoitzarentzako puntuazioak:';
$string['selectall'] = 'Aukeratu elementu guztiak';
$string['selectcontiguous'] = 'Aukeratu ondoko elementu azpimultzo bat';
$string['selectcount'] = 'Azpimultzoaren tamaina';
$string['selectcount_help'] = 'Galdera galdeketa batean agertzen denean erakutsiko den elementu kopurua.';
$string['selectrandom'] = 'Aukeratu elementu azpimultzo bat ausaz';
$string['selecttype'] = 'Elementu aukeraketa mota';
$string['selecttype_help'] = 'Aukeratu elementu guztiak edo elementu azpimultzo bat erakutsi behar den.';
$string['showgrading'] = 'Kalifikazioaren xehetasunak';
$string['showgrading_help'] = 'Aukeratu kalifikazioaren kalkuluaren xehetasunak erakutsi ala ezkutatzea ikasle batek Ordenatzea galdera honen berrikuspena egiten duenean.';
$string['vertical'] = 'Bertikala';
