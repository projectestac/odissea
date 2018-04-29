<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'question', language 'eu', branch 'MOODLE_32_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ekintza';
$string['addanotherhint'] = 'Gehitu beste pista bat';
$string['addcategory'] = 'Gehitu kategoria';
$string['addmorechoiceblanks'] = 'Zuriuneak {no} aukera gehiagotarako';
$string['adminreport'] = 'Zure galderen datu-basean izan daitezkeen arazoei buruzko txostena';
$string['advancedsearchoptions'] = 'Bilaketarako aukerak';
$string['alltries'] = 'Saiakera guztiak';
$string['answer'] = 'Erantzuna';
$string['answers'] = 'Erantzunak';
$string['answersaved'] = 'Erantzuna gorde da';
$string['attemptfinished'] = 'Saiakera amaitu da';
$string['attemptfinishedsubmitting'] = 'Amaitutako saiakera bidaltzen:';
$string['attemptoptions'] = 'Saiakeren aukerak';
$string['availableq'] = 'Eskuragarri?';
$string['badbase'] = 'Oinarri okerra **: {$a}**-(r)en aurretik';
$string['behaviour'] = 'Jokaera';
$string['behaviourbeingused'] = 'Erabilitako jokaera: {$a}';
$string['broken'] = 'Etendako esteka da hau: ez dagoen fitxategi batera eramaten du';
$string['byandon'] = '<em>{$a->user}</em>-ek <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Ezin izan da segurtasun-kopiaren fitxategia kopiatu';
$string['cannotcreate'] = 'Ezin da beste sarrera bat soryi hemen: question_attempts table';
$string['cannotcreatepath'] = 'Ezin da bidea sortu: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Ezin duzu \'{$a} jokaera ezabatu. Galderen saiakeretan erabili da dagoeneko.';
$string['cannotdeletecate'] = 'Ezin duzu kategoria hau ezabatu testuinguru honetako berezko kategoria bada.';
$string['cannotdeleteneededbehaviour'] = 'Ezin da \'{$a} galdera-jokaera ezabatu. Badira  horren menpe daude dauden beste jokaera batzuk instalatuta.';
$string['cannotdeleteqtypeinuse'] = 'Ezin duzu \'{$a}\' galdera-mota ezabatu. Badira mota horretako galderak galdera-bankuan.';
$string['cannotdeleteqtypeneeded'] = 'Ezin duzu \'{$a}\' galdera-mota ezabatu. Horretan oinarritzen dira instalatutako beste galdera-mota batzuk.';
$string['cannotenable'] = '{$a} galdera-mota ezin da zuzenean sortu.';
$string['cannotenablebehaviour'] = '{$a} galdera-jokaera ezin da erabili. Barne-erabilerarako baino ez da.';
$string['cannotfindcate'] = 'Ezin da kategoriaren erregistroa aurkitu';
$string['cannotfindquestionfile'] = 'Ezin izan da galderen fitxategia aurkitu zip-ean';
$string['cannotgetdsfordependent'] = 'Ezin da zehaztutako datu-multzoa lortu galdera dependenterako!  (galdera: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Ezin da zehaztutako datu-multzoa lortu kalkulatutako galderarako!  (galdera: {$})';
$string['cannothidequestion'] = 'Ezin izan da galdera ezkutatu';
$string['cannotimportformat'] = 'Sentitzen dugu, oraindik ez dago inplementatuta formatu honen inportazioa!';
$string['cannotinsertquestion'] = 'Ezin da beste galdera bat txertatu!';
$string['cannotinsertquestioncatecontext'] = 'Ezin izan da galdera-kategoria berria txertatu {$a->cat}, legez kontrako contextid {$a->ctx}';
$string['cannotloadquestion'] = 'Ezin da galdera kargatu';
$string['cannotmovequestion'] = 'Ezin duzu script hau erabili hainbat eremutatik datozen fitxategiekin lotuta dauden galderak mugitzeko.';
$string['cannotopenforwriting'] = 'Ezin da idazteko zabaldu: {$a}';
$string['cannotpreview'] = 'Ezin dituzu galdera hauek aurreikusi';
$string['cannotread'] = 'Ezin da inportatutako fitxategia irakurri (edo hutsik dago)';
$string['cannotretrieveqcat'] = 'Ezin izan da galdera-kategoria berreskuratu';
$string['cannotunhidequestion'] = 'Errorea galdera erakustean';
$string['cannotunzip'] = 'Ezin da fitxategia deskonprimatu.';
$string['cannotwriteto'] = 'Ezin dira  {$a}-ra esportatuko galderak idatzi';
$string['categories'] = 'Kategoriak';
$string['category'] = 'Kategoria';
$string['categorycurrent'] = 'Oraingo kategoria';
$string['categorycurrentuse'] = 'Erabili kategoria hau';
$string['categorydoesnotexist'] = 'Ez da kategoria hau existitzen';
$string['categoryinfo'] = 'Kategoriaren informazioa';
$string['categorymove'] = '\'{$a->name}\' kategoriak {$a->count} galdera ditu (horietako batzuk ezkutuan dauden edo ausazko galdera moduan gehituta dauden galdetegietan erabiliak egon daitezke). Mesedez, hauek mugitzeko beste kategoria bat aukeratu.';
$string['categorymoveto'] = 'Gorde kategorian';
$string['categorynamecantbeblank'] = 'Kategiaren izena ezin da hutsik egon';
$string['changeoptions'] = 'Aldatu aukerak';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}"> "{$a->name}"</a> kategoriak, "{$a->coursename}" ikastarokoa, bere <strong>{$a->changefrom} truke egoera beste honetara aldatuko du {$a->changeto}</strong>.';
$string['check'] = 'Egiaztatu';
$string['chooseqtypetoadd'] = 'Aukeratu gehitu nahi duzun galdera-mota';
$string['clearwrongparts'] = 'Garbitu ebazpen okerrak';
$string['clickflag'] = 'Markatu galdera';
$string['clicktoflag'] = 'Klik egin galdera hau markatzeko';
$string['clicktounflag'] = 'Klik egin galdera hau ez markatzeko';
$string['clickunflag'] = 'Ezabatu bandera';
$string['closepreview'] = 'Itxi aurrebista';
$string['combinedfeedback'] = 'Feedback konbinatua';
$string['comment'] = 'Iruzkina';
$string['commented'] = 'Iruzkina eginda: {$a}';
$string['commentormark'] = 'Iruzkina egin edo baliogabetu puntua';
$string['comments'] = 'Iruzkinak';
$string['commentx'] = 'Iruzkina: {$a}';
$string['complete'] = 'Osatu';
$string['contexterror'] = 'Ez zenuke hemen egon behar,  kategoria bat beste testuinguru batera mugitzen ez bazaude.';
$string['copy'] = 'Kopiatu {$a}-tik eta aldatu estekak.';
$string['correct'] = 'Zuzena';
$string['correctfeedback'] = 'Edozein ebazpen zuzenetarako';
$string['correctfeedbackdefault'] = 'Zure erantzuna zuzena da.';
$string['created'] = 'Sortuta';
$string['createdby'] = 'Nork sortua';
$string['createdmodifiedheader'] = 'Sortutako edo gordetako azkena';
$string['createnewquestion'] = 'Sortu beste galdera bat...';
$string['cwrqpfs'] = 'Ausazko galderak, azpikategorietako galderak aukeratuta';
$string['cwrqpfsinfo'] = '<p> Moodle 1.9ra eguneratu bitartean, galdera-kategoriak hainbat testuingurutan banatuko ditugu. Zure guneko hainbat kategoria eta galderek aldatu egingo dute truke egoera. Hau egitea beharrezkoa da partekatutako eta ez partekatutako kategoria nahasketa batetik aukeratzen direnean galdera bat edo gehiago (gune honetan gertatzen den bezala). Hau gertatzen da ausazko galdera bat azpikategorietatik aukeratzeko ezartzen denean eta azpikategoria bat edo gehiagok ausazko galdera sortuko den jatorrizko kategoriak ez bezalako truke egoera dutenean.</p>
<p>Ondorengo kategoriek, zeinetatik aukeratzen dituzten goragoko kategoriek ausazko galderak, Moodle 1.9rako eguneraketan aldatu egingo dute beren truke-egoera ausazko galdera duen kategoriaren egoera berera. Ondoren agertzen diren kategoriek aldatuta izango dute truke egoera. Eragina izan duten galderek funtzionatu egingo dute dauden galdetegi guztietan ahalik eta galdetegi horiek ezabatu arte.</p>';
$string['cwrqpfsnoprob'] = 'Ez dago zure gunean \'Ausazko galderak azpikategorietatik aukeratuta\' aukeraren eraginpeko kategoriarik.';
$string['decimalplacesingrades'] = 'Hamartar-kopurua kalifikazioetan';
$string['defaultfor'] = '{$a}-ren berezko balioa';
$string['defaultinfofor'] = '\'{$a}\' testuinguruan partekatutako galderetarako berezko kategoria.';
$string['defaultmark'] = 'Lehenetsitako puntuazioa';
$string['defaultmarkmustbepositive'] = 'Lehenetsitako markak positiboa izan behar du.';
$string['deletecoursecategorywithquestions'] = 'Galdera-banku honetan badira ikastaro-kategoria honekin lotutako hainbat galdera. jarraituz gero, ezabatu egingo dira. Nahi baduzu, lehenik mugitu ahal dituzu galdera-bankuaren interfazetik.';
$string['deletequestioncheck'] = 'Ziur al zaude \'{$a}\' ezabatu nahi duzula?';
$string['deletequestionscheck'] = 'Ziur al zaude ondoko galderak ezabatu nahi dituzula? <br /><br />{$a}';
$string['deletingbehaviour'] = 'Ezabatzen \'{$a}\' galderen jokaera';
$string['deletingqtype'] = '\'{$a}\' galdera-mota ezabatzen';
$string['didnotmatchanyanswer'] = '[Ez da ezein erantzunekin lotu]';
$string['disabled'] = 'Desgaituta';
$string['displayoptions'] = 'Erakusteko aukerak';
$string['disterror'] = '{$a} banaketak arazoak sortu ditu';
$string['donothing'] = 'Ez kopiatu, ez mugitu fitxategirik eta ez aldatu estekarik.';
$string['editcategories'] = 'Editatu kategoriak';
$string['editcategories_help'] = 'Zure galdera guztiak zerrenda luze bakar batean izan beharrean, kategoriak sor ditzakezu galderak bertan izateko.

Kategoria bakoitzak testuinguru bat izan behar du, eta honek zehaztuko du kategoriako zein galdera erabil daitekeen:

* Jarduera-testuingurua - Galderak bakarrik daude eskura jarduera-moduluan
*Ikastaro-testuingurua: Galderak eskura daude ikastaroko jarduera-modulu guztietan
*Ikastaro-kategoriaren testuinguruan - Galderak eskura daude kategoriako ikastaro eta jarduera-modulu guztietan
* Sistema-testuingurua - Galderak eskura daude guneko ikastaro eta jarduera-modulu guztietan

Kategoriak ere ausazko galderetarako erabil daitezke eta galderak kategoria jakin batetik aukeratu.';
$string['editcategory'] = 'Editatu kategoria';
$string['editingcategory'] = 'Kategoria editatzen';
$string['editingquestion'] = 'Galdera editatzen';
$string['editquestion'] = 'Editatu galdera';
$string['editquestions'] = 'Editatu galderak';
$string['editthiscategory'] = 'Editatu kategoria hau';
$string['emptyxml'] = 'Errore ezezaguna - imsmanifest.xml hutsik dago';
$string['enabled'] = 'Gaituta';
$string['erroraccessingcontext'] = 'Ezin da testuingurura iritsi';
$string['errordeletingquestionsfromcategory'] = 'Errorea gertatu da {$a} kategoriatik galderak ezabatzean.';
$string['errorduringpost'] = 'Errorea gertatu da prozesamendu-ostean!';
$string['errorduringpre'] = 'Errorea gertatu da aurre-prozesaketan!';
$string['errorduringproc'] = 'Errorea gertatu da prozesamenduan!';
$string['errorduringregrade'] = 'Ezin izan da berriz kalifikatu {$a->qid} galdera, ondoko egoerara abaiatuko da: {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Errorea: ezin da {$a} fitxategia kopiatu.';
$string['errorfilecannotbemoved'] = 'Errorea: ezin da {$a} fitxategia mugitu.';
$string['errorfileschanged'] = 'Errorea: galderetatik estekatutako fitxategiak aldatu egin dira formularioa erakutsi denetik';
$string['erroritemappearsmorethanoncewithdifferentweight'] = '({$a}) galdera behin baino gehiagotan agertzen da galdetegian toki ezberdinetan eta pisu ezberdinarekin. Hori ez du gaur egun onartzen estatistika-txostenak eta ondorioz agian galdera honen inguruko estatistikak ez dira oso fidagarriak izango.';
$string['errormanualgradeoutofrange'] = '{$a->grade} kalifikazioa ez da 0 eta {$a->maxgrade}-ren artekoa {$a->name} (-)en galderarako. Puntuazioa eta iruzkina ez dira gorde.';
$string['errormovingquestions'] = 'Errorea {$a} ID-ak dituzten galderak mugitzean.';
$string['errorpostprocess'] = 'Errorea gertatu da prozesamendu-ostean!';
$string['errorpreprocess'] = 'Errorea gertatu da aurre-prozesamenduan!';
$string['errorprocess'] = 'Errorea gertatu da prozesamenduan!';
$string['errorprocessingresponses'] = 'Errorea gertatu da zure ebazpenak prozesatzean ({$a}). Sakatu \'jarraitu\' lehengo orrira itzultzeko eta berriz saiatzeko.';
$string['errorsavingcomment'] = 'Eorrea datu-basean {$a->name} galderaren iruzkina gordetzean.';
$string['errorsavingflags'] = 'Errorea markaren egoera gordetzean.';
$string['errorupdatingattempt'] = 'Eorrea datu-basean {$a->id} saiakera eguneratzean.';
$string['eventquestioncategorycreated'] = 'Galdera-kategoria sortu da';
$string['export'] = 'Esportatu';
$string['exportcategory'] = 'Kategoria esportatu ';
$string['exportcategory_help'] = '<p>Zabaltzen den <b>Kategoria:</b> menua erabiltzen da galderak
zein kategoriatatik esportatuko diren aukeratzeko.</p>

<p>Inportatzeko hainbat formatuk (GIFT eta XML Formatuak) aukera ematen dute
kategoria idazteko fitxategian sartzeko, (aukeran) kategoriak inportazioan
presente izateko. Horretarako, <b>Fitxategiari kategoria idatzi</b> laukitxoak
markatuta egon behar du. Aukeratuta badago, kategoria-testuingurua ere enbotatu
egin ahal duzu <b>Fitxategiari testuingurua idatzi</b> markatuta. Ez markatu
testuinguruaren aukera Moodle-ren bertsio zaharrekiko konpatibilitaterako.</p>';
$string['exporterror'] = 'Erroreak gertatu dira esportatzean';
$string['exportfilename'] = 'galderak';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Esportatu galderak fitxategira';
$string['exportquestions_help'] = 'Funtzio honek galdera-kategoria oso bat (eta edozein azpikategoria) testu-fitxategi batera esportatzeko balio du. Dena den, fitxategi-formatu batzuetan informazioa galtzen da galdera batzuk inportatzen direnean.
';
$string['feedback'] = 'Feedbacka';
$string['filecantmovefrom'] = 'Galdera-fitxategiak ezin dira mugitu, zeuk ez baituzu fitxategiak mugitzeko baimenik saiatzen ari zaren lekutik.';
$string['filecantmoveto'] = 'Galdera-fitxategiak ezin dira mugitu edo kopiatu, zeuk ez baituzu fitxategiak gehitzeko baimenik saiatzen ari zaren lekura.';
$string['fileformat'] = 'Fitxategiaren formatua';
$string['filesareacourse'] = 'ikastaroaren fitxategi-eremua';
$string['filesareasite'] = 'gunearen fitxategi-eremua';
$string['filestomove'] = 'Fitxategiak {$a}-ra mugitu/kopiatu?';
$string['fillincorrect'] = 'Bete erantzun zuzenak';
$string['firsttry'] = 'Lehen saiakera';
$string['flagged'] = 'Markatuta';
$string['flagthisquestion'] = 'Markatu galdera hau';
$string['formquestionnotinids'] = 'Galdera hau questionids-en ez dagoen formularioan dago';
$string['fractionsnomax'] = 'Erantzunetako batek %100 izan behar du galdera honetako gehienezko puntuazioa lortu ahal izateko.';
$string['generalfeedback'] = 'Feedback orokorra';
$string['generalfeedback_help'] = 'Feedback orokorra galdera erantzun ondoren erakusten zaio ikasleari. Feedback zehatzak ez bezala, galdera-mota eta ikasleak emandako erantzunaren araberakoa dena, feedback orokorra berdina da ikasle guztientzat.

Feedback orokorra erantzun egokia erakusteko eta azaltzeko erabil dezakezu, eta agian informazio gehiago erakusten duen estekaren bat gehi dezakezu galdera ulertu ez duenarentzat.';
$string['getcategoryfromfile'] = 'Lortu kategoria fitxategitik';
$string['getcontextfromfile'] = 'Lortu testuingurua fitxategitik';
$string['hintn'] = '{no}. Pista';
$string['hintnoptions'] = '{no}. Pistaren aukerak';
$string['hinttext'] = 'Pistaren testua';
$string['howquestionsbehave'] = 'Galderen jokaera';
$string['howquestionsbehave_help'] = 'Ikasleek galdetegiko galderekin modu ezberdinetan aritu daitezke. Esaterako, zuk ikasleek galdera guztiak erantzun eta galdetegia bidaltzea erabaki dezakezu, ezer kalifikatu aurretik eta edozein feedback jaso baino lehen. Kasu horretan modua \'Beranduagoko feedbacka\' izango litzateke.

Bestela, zuk ikasleek galdera bakoitza bidaltzean berehalako feedback-a jasotzea erabaki dezakezu eta, galdera ondo erantzun ez badu, galdera berriz erantzuteko aukera eman kalifikazioa hobetzen saiatzeko. Modu hau \'Interaktiboa hainbat saiakerarekin\' litzateke.

Horiek dira ziur asko gehien erabiltzen diren jokaerak.';
$string['ignorebroken'] = 'Baztertu apurtutako estekak';
$string['import'] = 'Inportatu';
$string['importcategory'] = 'Inportatu kategoria';
$string['importcategory_help'] = '<p> <b>Kategoria:</b> zabaltzen den menua erabiltzen da inportatutako galderak
zein kategoriatara joango diren aukeratzeko.</p>

<p>Inportatzeko hainbat formatuk (GIFT eta XML Formatua) aukera ematen dute
inportatzeko fitxategiaren barruan kategoria zehazteko. Horretarako
<b>Kategoria fitxategitik lortu</b> laukitxoak markatuta egon behar du. Bestela,
galderak aukeratutako kategoriara joango dira fitxategiaren jarraipideak alde batera
utzita. Moodle-tik esportatutako formatuek ere izan dezakete kategoria-katean enbotatuta
kategoria-testuingurua. Desmarkatu <b>Testuingurua fitxategitik lortu</b> berezko testuingurua
erabiltzera behartzeko.</p>

<p>Kategoriak inportatzeko fitxategi batean ezarrita daudenean, ez badude
sortu egingo dira.</p>';
$string['importerror'] = 'Errorea gertatu da inportazio-prozesamenduan';
$string['importerrorquestion'] = 'Errorea galdera inportatzean';
$string['importfromcoursefiles'] = '... edo aukeratu ikastaroko fitxategia inportatzeko.';
$string['importfromupload'] = 'Aukeratu igotzeko fitxategia...';
$string['importingquestions'] = 'Inportatzen {$a} galderak fitxategitik';
$string['importparseerror'] = 'Errorea(k) izan d(ir)a inportazio-fitxategia analizatzean. Ez dira galderak inporttau. Inportatzeko, saiatu berriz eta ezarri EZ ondoko ezarpenean \'Gelditu errorean\'\'';
$string['importquestions'] = 'Galderak fitxategitik inportatu';
$string['importquestions_help'] = 'Funtzio honi esker hainbat formatutako galderak inporta ditzakegu testu-fitxategi baten bidez. Kontuan hartu fitxategiak UTF-8 kodifikazioa izan behar duela.';
$string['importwrongfiletype'] = 'Aukeratu duzun fitxategi-mota ({$a->actualtype}) ez dator bat espero zen inportatze-formatuarekin ({$a->expectedtype}).';
$string['impossiblechar'] = 'Ezinezko karakterea {$a} detektatu da parentesi karaktere gisa';
$string['includesubcategories'] = 'Erakutsi galderak azpikategorietatik ere';
$string['incorrect'] = 'Okerra';
$string['incorrectfeedback'] = 'Edozein ebazpen okerretarako';
$string['incorrectfeedbackdefault'] = 'Zure erantzuna ez da zuzena';
$string['information'] = 'Informazioa';
$string['invalidanswer'] = 'Erantzuna ez dago osorik';
$string['invalidarg'] = 'Argumentu baliogabeak egikarituta edo zerbitzariaren konfigurazio okerra';
$string['invalidcategoryidforparent'] = 'Goragoko kategoriaren IDak ez du balio!';
$string['invalidcategoryidtomove'] = 'Mugitzeko kategoriaren IDak ez du balio!';
$string['invalidconfirm'] = 'Egiaztatze-katea ez da zuzena';
$string['invalidcontextinhasanyquestions'] = 'Testuinguru baliogabea hona pasa da: question_context_has_any_questions.';
$string['invalidgrade'] = 'Kalifikazioak ({$a}) ez datoz bat kalifikazio aukerekin - galdera saihestu da.';
$string['invalidpenalty'] = 'Penalizazioa ez da baliagarria';
$string['invalidwizardpage'] = 'Orria ez da zuzena edo ez dago ondo zehaztuta!';
$string['lastmodifiedby'] = 'Nork aldatua azkenengoz';
$string['lasttry'] = 'Azken saiakera';
$string['linkedfiledoesntexist'] = 'Ez dago {$a} lotutako fitxategia';
$string['makechildof'] = 'Bihurtu \'{$a}\'-ren ondorengo';
$string['makecopy'] = 'Kopia egin';
$string['maketoplevelitem'] = 'Igo ondorengo mailara';
$string['manualgradeinvalidformat'] = 'Hau ez da zenbaki baliagarria.';
$string['manualgradeoutofrange'] = 'Kalifikazio hau ibilartetik kanpo dago.';
$string['manuallygraded'] = 'Eskuz kalifikatua {$a->mark} eta iruzkina du: {$a->comment}';
$string['mark'] = 'Puntuazioa';
$string['markedoutof'] = 'Honela puntuatu';
$string['markedoutofmax'] = 'Honela puntuatu  {$a}';
$string['markoutofmax'] = '{$a->mark} lortuta gehienezko {$a->max} -(e)tik ';
$string['marks'] = 'Puntuazioak';
$string['matchgrades'] = 'Kalifikazioak lotu';
$string['matchgradeserror'] = 'Errorea, kalifikazioa ez badago zerrendan';
$string['matchgrades_help'] = 'Inportatutako kalifikazioek bat etorri behar dute
ezarri den kalifikazio egokien zerrendako batekin - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (balore negatiboak ere ezar daitezke). Horrela ez bada, bi aukera daude:

* Errorea, kalifikazioa ez badago zerrendan - Galdera batek zerrendan ez dagoen kalifikazioren bat badu errore bat erakutsiko da eta galdera hori ez da inportatuko
* Kalifikazio hurbilena ez badago zerrendan - Kalifikazio bat ez badator bat zerrendako baloreekin, kalifikazioa aldatu egingo da eta zerrendako balore hurbilena ezarriko zaio';
$string['matchgradesnearest'] = 'Kalifikazio hurbilena, ez badago zerrendan';
$string['missingcourseorcmid'] = 'courseid edo cmid gehitu behar da hemen: print_question.';
$string['missingcourseorcmidtolink'] = 'courseid edo cmid gehitu behar da hemen: get_question_edit_link.';
$string['missingimportantcode'] = 'Galdera-mota honek kode garrantzitsu bat falta du: {$a}.';
$string['missingoption'] = 'Aukera anitzeko {$a} galderak ez du beharrezko aukerarik';
$string['modified'] = 'Gordetako azkena';
$string['move'] = 'Mugitu {$a}-tik eta aldatu estekak';
$string['movecategory'] = 'Mugitu kategoria';
$string['movedquestionsandcategories'] = 'Galderak eta galdera-kategoriak mugituta {$a->oldplace} -(t)ik {$a->newplace} -(r)a.';
$string['movelinksonly'] = 'Esteken helmuga bakarrik aldatu, fitxategiak ez mugitu eta ez kopiatu.';
$string['moveq'] = 'Mugitu galdera(k)';
$string['moveqtoanothercontext'] = 'Mugitu galdera beste testuinguru batera';
$string['moveto'] = 'Mugitu hona >>';
$string['movingcategory'] = 'Kategoria mugitzen';
$string['movingcategoryandfiles'] = 'Ziur al zaude {$a->name} eta bere azpiko kategoria guztiak "{$a->contextto}" testuingurura aldatu nahi dituzula?<br />Galderetatik lotutako {$a->urlcount} fitxategi aurkitu dugu {$a->fromareaname}-n, kopiatu edo {$a->toareaname}-ra mugitu nahi al dituzu?';
$string['movingcategorynofiles'] = 'Ziur al zaude "{$a->name}" kategoria eta bere azpiko kategoria guztiak "{$a->contextto}" testuingurura mugitu nahi dituzula?';
$string['movingquestions'] = 'Galderak eta hainbat fitxategi mugitzen';
$string['movingquestionsandfiles'] = 'Ziur al zaude {$a->questions} galdera(k) <strong>"{$a->tocontext}"</strong> kontestura mugitu nahi d(it)uzula?<br /> Galdera hauetatik/honetatik lotutako <strong>{$a->urlcount} fitxategi</strong> aurkitu dugu{$a->fromareaname}-n, kopiatu edo {$a->toareaname}-ra mugitu nahi al dituzu?';
$string['movingquestionsnofiles'] = 'Ziur al zaude {$a->questions} galdera(k) <strong>"{$a->tocontext}"</strong> kontestura mugitu nahi d(it)uzula?<br /> Ez dago galdera hauetatik/honetatik lotutako <strong>inongo fitxategirik</strong> {$a->fromareaname}-n.';
$string['needtochoosecat'] = 'Galdera hau mugitzeko kategoria bat aukeratu behar duzu; bestela, sakatu \'utzi\'.';
$string['nocate'] = 'Ez da kategoria existitzen {$a}!';
$string['nopermissionadd'] = 'Ez duzu baimenik hemen galderarik gaineratzeko.';
$string['nopermissionmove'] = 'Ez duzu baimenik galderak hemendik mugitzeko. Galdera kategoria honetan gorde behar duzu edo galdera berri gisa gorde.';
$string['noprobs'] = 'Zure galderen datu-basean ez da arazorik aurkitu.';
$string['noquestions'] = 'Ez da esporta daitekeen galderarik aurkitu. Ziurta ezazu aukeratu duzun kategoriak galderak badituela.';
$string['noquestionsinfile'] = 'Ez dago galderarik inportazio-fitxategian';
$string['noresponse'] = '[Ebazpenik ez]';
$string['notanswered'] = 'Erantzun gabea';
$string['notchanged'] = 'Aldaketarik ez azken saiakeratik';
$string['notenoughanswers'] = 'Galdera-mota honek gutxienez {$a} erantzun behar ditu';
$string['notenoughdatatoeditaquestion'] = 'Ez da galderaren, kategoriaren eta galdera-motaren id-a zehaztu.';
$string['notenoughdatatomovequestions'] = 'Mugitu nahi dituzun galderen ida-ak eman behar dituzu.';
$string['notflagged'] = 'Markatu gabea';
$string['notgraded'] = 'Kalifikatu gabea';
$string['notshown'] = 'Ez da erakusten';
$string['notyetanswered'] = 'Erantzun gabea';
$string['notyourpreview'] = 'Aurrebista hau dagokizu zuri';
$string['novirtualquestiontype'] = 'Ez dago galdera-mota birtualik {$a} galdera-motarako';
$string['numqas'] = 'Ez. Galderen saiakerak';
$string['numquestions'] = 'Ez dago galderarik';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} ezkutuan)';
$string['options'] = 'Aukerak';
$string['page-question-category'] = 'Galdera-kategoriaren orria';
$string['page-question-edit'] = 'Galdera editatzeko orria';
$string['page-question-export'] = 'Galdera esportatzeko orria';
$string['page-question-import'] = 'Galdera inportatzeko orria';
$string['page-question-x'] = 'Edozein galdera-orri';
$string['parent'] = 'Goragokoa';
$string['parentcategory'] = 'Goragoko kategoria';
$string['parentcategory_help'] = 'Goragoko kategoria  bere baitan beste kategoria bat duen kategoria da. \'Goragokorik ez\'-ek adierazten du kategoria hau ez dagoela beste baten barruan. Kategoria-testuinguruak letra lodiz erakusten dira. Testuingurua bakoitzean gutxienez kategoria bat izan behar da.';
$string['parenthesisinproperclose'] = '**-ren aurretiko parentesia ez da ondo itxi {$a}**-n';
$string['parenthesisinproperstart'] = '**-ren aurretiko parentesia ez da ondo ireki {$a}**-n';
$string['parsingquestions'] = 'Inportatutako fitxategiaren galderak aztertzen.';
$string['partiallycorrect'] = 'Zuzena zati batean';
$string['partiallycorrectfeedback'] = 'Edozein ebazpen erdi zuzenetarako';
$string['partiallycorrectfeedbackdefault'] = 'Zure galdera zuzena da neurri batean.';
$string['penaltyfactor'] = 'Penalizazio-faktorea';
$string['penaltyfactor_help'] = '<p>Erantzun oker bakoitzagatik puntuazioaren zati bat kentzea zehaztu ahal duzu. Hori, galdetegia  moldagarria bada bakarrik, hau da, ikasleak galderak erantzuteko saio bat baino gehiago duenean. Penalizazio-faktoreak 0 eta 1 bitartean egon behar du- Zigor-faktorea 1 bada, ikasleak lehen saioan eman behar du erantzun zuzena kalifikazio altuena lortzeko. Penalizazio-faktorea 0 bada, ikasleak nahi
bezainbat saio egin ditzake kalifikazio altuena lortzeko.</p>';
$string['penaltyforeachincorrecttry'] = 'Penalizazioa saiakera oker bakoitzeko';
$string['penaltyforeachincorrecttry_help'] = 'Galderak \'Interaktiboa hainbat saiakerarekin\' edo \'Egokitze modua\' erabilita egiten direnean, ikasleak erantzuteko hainbat aukera izan ditzan, aukera honek erantzun oker bakoitzeko aplikatuko den penalizazioa zehazten du.

Penalizazioa galderaren kalifikazio osoaren proportzioa da, eta beraz 3 puntu balio dituen galdera batek 0,3333333-ko penalizazioa badu ikasleak 3 puntu lortuko ditu lehenengo saiakerak asmatuz gero, 2 puntu bigarren saiakeran eta puntu 1 hirugarren saiakeran.';
$string['permissionedit'] = 'Editatu galdera hau';
$string['permissionmove'] = 'Mugitu galdera hau';
$string['permissionsaveasnew'] = 'Gorde hau galdera berri gisa';
$string['permissionto'] = 'Honetarako baimena duzu:';
$string['previewquestion'] = 'Aurreikusi galdera: {$a}';
$string['published'] = 'partekatuta';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Ondoko galdera "{$a->name}" ({$a->qtype})</a> kategoria honetan dago baina <a href="{$a->qurl}">galdetegi honetan ere erabilita dago "{$a->quizname}"</a> beste ikastaro batean: "{$a->coursename}".';
$string['questionbank'] = 'Galdera-bankua';
$string['questionbehaviouradminsetting'] = 'Galderen jokaerarako ezarpenak';
$string['questionbehavioursdisabled'] = 'Desgaitzeko galderen jokaerak';
$string['questionbehavioursdisabledexplained'] = 'Idatzi komaz banatutako zerrenda bat zabaltzen den menuan agertzea nahi ez dituzun jokaerekin';
$string['questionbehavioursorder'] = 'Galderen jokaeren ordena';
$string['questionbehavioursorderexplained'] = 'Idatzi komaz banatutako zerrenda bat zabaltzen den menuan agertzea nahi dituzun jokaerekin';
$string['questioncategory'] = 'Galdera-kategoria';
$string['questioncatsfor'] = 'Galdera-kategoriak \'{$a}\'-rako';
$string['questiondoesnotexist'] = 'Ez dago galdera hau';
$string['questionidmismatch'] = 'Errorea galderen IDetan';
$string['questionname'] = 'Galderaren izena';
$string['questionnamecopy'] = '{$a} (kopiatu)';
$string['questionno'] = '{$a} galdera';
$string['questionpreviewdefaults'] = 'Galderak aurreikusteko berezko baloreak';
$string['questionpreviewdefaults_desc'] = 'Berezko balio hauek erabiltzaile batek galdera bat lehenengo aldiz aurreikusten duenean erabiltzen dira. Behin erabiltzaileak galdera aurreikusi duenean bere hobespenak erabiltzaile-hobespenetan gordeko dira.';
$string['questions'] = 'Galderak';
$string['questionsaveerror'] = 'Erroreak gertatu dira galdera gordetzean - ({$a})';
$string['questionsinuse'] = '(*z markatutako galderak dagoeneko galdetegiren batean erabiltzen ari dira. Galderak hauek ez dira ezabatu galdetegi horietatik, bakarrik kategoria-zerrendatik ezabatuko dira.)';
$string['questionsmovedto'] = 'Oraindik erabiltzen ari diren galderak  \'{$a}\'-ra mugitzen goragoko ikastaro-kategorian.';
$string['questionsrescuedfrom'] = 'Galderak gordeta {$a} testuingurutik';
$string['questionsrescuedfrominfo'] = 'Galdera hauek (batzuk ezkutuan egon daitezke) gorde egin ziren {$a} testuingurua ezabatu zenean, oraindik ere hainbat galdetegitan edo bestelako jardueratan erabili egiten direlako.';
$string['questiontext'] = 'Galderaren testua';
$string['questiontype'] = 'Galdera-mota';
$string['questionuse'] = 'Erabili galdera jarduera honetan';
$string['questionvariant'] = 'Galderaren aldaera';
$string['questionx'] = '{$a}. galdera';
$string['requiresgrading'] = 'Kalifikazioa behar du';
$string['responsehistory'] = 'Ebazpenen historia';
$string['restart'] = 'Hasi berriz';
$string['restartwiththeseoptions'] = 'Hasi berriz aukera hauekin';
$string['reviewresponse'] = 'Ebazpena berrikusi';
$string['rightanswer'] = 'Erantzun zuzena';
$string['rightanswer_help'] = 'erantzun egokiarentzako automatikoki emandako laburpena. Hau mugatua egon daiteke, eta behar bada erantzun egokia azaltzeko feedback orokorra erabiltzea nahiko duzu, eta aukera hau desaktibatu.';
$string['save'] = 'Gorde';
$string['savechangesandcontinueediting'] = 'Gorde aldaketak eta jarraitu editatzen';
$string['saved'] = 'Gordeta: {$a}';
$string['saveflags'] = 'Gorde marken egoera';
$string['selectacategory'] = 'Aukeratu kategoria bat:';
$string['selectaqtypefordescription'] = 'Aukeratu galdera-mota bat deskribapena ikusteko.';
$string['selectcategoryabove'] = 'Goiko kategoria bat aukeratu';
$string['selectquestionsforbulk'] = 'Aukeratu galderak eragiketa masiboetarako';
$string['settingsformultipletries'] = 'Saiakera anitzak';
$string['shareincontext'] = 'Partekatu {$a}-rentzat testuinguruan.';
$string['showhidden'] = 'Galdera zaharrak ere erakutsi';
$string['showmarkandmax'] = 'Erakutsi puntuazioa eta gehienekoa';
$string['showmaxmarkonly'] = 'Erakutsi gehieneko puntuazioa bakarrik';
$string['shown'] = 'Erakutsia';
$string['shownumpartscorrect'] = 'Erakutsi ebazpen zuzenen kopurua';
$string['shownumpartscorrectwhenfinished'] = 'Erakutsi ebazpen zuzenen kopurua';
$string['showquestiontext'] = 'Erakutsi galderaren testua galdera-zerrendan';
$string['specificfeedback'] = 'Feedback zehatza';
$string['specificfeedback_help'] = 'Ikasleek emandako erantzunen araberako feedbacka';
$string['started'] = 'Hasita';
$string['state'] = 'Egoera';
$string['step'] = 'Urratsa';
$string['stoponerror'] = 'Gelditu errorea gertatzen bada';
$string['stoponerror_help'] = 'Ezarpen honek errore bat aurkitzean inportatze-prozesua geratuko den zehazten du, eta ondorioz ez da galderarik inportatuko, edo erroreak dituzten galderak ezikusi eta baliozko galderak inportatuko diren.';
$string['submissionoutofsequence'] = 'Ordenetik kanpoko sarrera. Mesedez ez egin klik atzera botoian galdetegiarekin lanean ari zarenean.';
$string['submissionoutofsequencefriendlymessage'] = 'Datuetara orden normaletik kanpo sartu egin zara. Hau gertatu daiteke zure nabigatzailearen Atzera eta Aurrera botoiak erabiltzen badituzu; mesedez ez erabili botoi horiek galdetegia egin bitartean. Orria kargatu bitartean nonbait klik egin baduzu ere gertatu daiteke hau. Jarraitzeko <strong>Jarraitu</strong> sakatu.';
$string['submit'] = 'Bidali';
$string['submitandfinish'] = 'Bidali eta amaitu';
$string['submitted'] = 'Bidali: {$a}';
$string['tagarea_question'] = 'Galderak';
$string['technicalinfo'] = 'Informazio teknikoa';
$string['technicalinfo_help'] = 'Informazio tekniko hau ziur aski galdera-motetan lan egiten ari diren garatzaileentzat izan daiteke baliagarria. Lagungarria izan daiteke ere galderekin dauden arazoen diagnosia egitean.';
$string['technicalinfomaxfraction'] = 'Gehieneko zatikia: {$a}';
$string['technicalinfominfraction'] = 'Gutxieneko zatikia: {$a}';
$string['technicalinfoquestionsummary'] = 'Galderaren laburpena: {$a}';
$string['technicalinforesponsesummary'] = 'Erantzunaren laburpena:  {$a}';
$string['technicalinforightsummary'] = 'Erantzun zuzenaren laburpena: {$a}';
$string['technicalinfostate'] = 'Galderaren egoera: {$a}';
$string['technicalinfovariant'] = 'Galderaren aldaera: {$a}';
$string['tofilecategory'] = 'Fitxategiari kategoria idatzi';
$string['tofilecontext'] = 'Fitxategiari testuingurua idatzi';
$string['uninstallbehaviour'] = 'Desinstalatu galderen jokaera hau.';
$string['uninstallqtype'] = 'Galdera-mota hau desinstalatu.';
$string['unknown'] = 'Ezezaguna';
$string['unknownbehaviour'] = 'Jokaera ezezaguna: {$a}.';
$string['unknownorunhandledtype'] = 'Ezezagun edo kontrolatu gabeko galdera-mota: {$a}';
$string['unknownquestion'] = 'Galdera ezezaguna: {$a}.';
$string['unknownquestioncatregory'] = 'Galdera-kategoria ezezaguna: {$a}.';
$string['unknownquestiontype'] = 'Galdera-mota ezezaguna: {$a}.';
$string['unknowntolerance'] = 'Tolerantzia-mota ezezaguna:  {$a}';
$string['unpublished'] = 'partekatu gabe';
$string['unusedcategorydeleted'] = 'Kategoria hau ezabatu egin da ikastaroa ezabatuta bertako galderak ez zirelako gehiago erabili zerbitzarian.';
$string['updatedisplayoptions'] = 'Eguneratu erakusteko aukerak';
$string['upgradeproblemcategoryloop'] = 'Galdera-kategoriak eguneratzean arazo bat atzeman da. Kategoria-zuhaitzean begizta (loop) bat dago. Horren eraginpeko kategorien ID-ak {$a} dira.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Ezin da ondoko galdera-kategoria eguneratu: {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Arazoa atzemena da galdera-kategoriak eguneratzean. {$a->id} kategoria  {$a->parent} goragoko kategoriari dagokio eta ez da existitzen. Arazoa konpontzeko, goragoko kategoria aldatu egin da.';
$string['whethercorrect'] = 'Zuzena bada';
$string['whethercorrect_help'] = 'Honek \'Ondo\', \'Partzialki ondo\' eta \'Gaizki\'-ren deskribapenak barne hartzen ditu, baita informazio hori ematen duen kolorezko edozein nabarmentze.';
$string['whichtries'] = 'Zein saiakera';
$string['withselected'] = 'aukerarekin';
$string['wrongprefix'] = 'Izenaren aurrizkia gaizku formateatua:  {$a}';
$string['xoutofmax'] = '{$a->mark} gehienezko {$a->max} -(e)tik';
$string['yougotnright'] = 'Egoki aukeratu duzu {$a->num}.';
$string['youmustselectaqtype'] = 'Galdera-mota aukeratu behar duzu.';
$string['yourfileshoulddownload'] = 'Esportatzeko fitxategiak berehala hasi beha luke jaisten. Horrela gertatu ezean, mesedez, <a href="{$a}">egin klik hemen</a>.';
