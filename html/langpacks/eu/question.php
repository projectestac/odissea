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
 * Strings for component 'question', language 'eu', branch 'MOODLE_38_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ekintza';
$string['addanotherhint'] = 'Gehitu beste pista bat';
$string['addcategory'] = 'Gehitu kategoria';
$string['addmorechoiceblanks'] = 'Gehitu {no} zuriune aukera gehiagorako';
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
$string['cannotdeletecate'] = 'Ezin duzu kategoria hau ezabatu testuinguru honetako lehenetsitako kategoria bada.';
$string['cannotdeleteneededbehaviour'] = 'Ezin da \'{$a} galdera-jokaera ezabatu. Badira  horren menpe daude dauden beste jokaera batzuk instalatuta.';
$string['cannotdeleteqtypeinuse'] = 'Ezin duzu \'{$a}\' galdera-mota ezabatu. Badira mota horretako galderak galdera-bankuan.';
$string['cannotdeleteqtypeneeded'] = 'Ezin duzu \'{$a}\' galdera-mota ezabatu. Horretan oinarritzen dira instalatutako beste galdera-mota batzuk.';
$string['cannotdeletetopcat'] = 'Goragoko kategoriak ezin dira ezabatu';
$string['cannotedittopcat'] = 'Goragoko kategoriak ezin dira editatu';
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
$string['categorynamecantbeblank'] = 'Kategoriaren izena ezin da hutsik egon';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Aldatu aukerak';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}"> "{$a->name}"</a> kategoriak, "{$a->coursename}" ikastarokoa, bere <strong>{$a->changefrom} truke egoera beste honetara aldatuko du {$a->changeto}</strong>.';
$string['check'] = 'Egiaztatu';
$string['chooseqtypetoadd'] = 'Aukeratu gehitu nahi duzun galdera-mota';
$string['clearwrongparts'] = 'Garbitu erantzun okerrak';
$string['clickflag'] = 'Markatu galdera';
$string['clicktoflag'] = 'Markatu galdera aurrerago kontsultatzeko';
$string['clicktounflag'] = 'Kendu marka';
$string['clickunflag'] = 'Kendu marka';
$string['closepreview'] = 'Itxi aurrebista';
$string['combinedfeedback'] = 'Feedback konbinatua';
$string['comment'] = 'Iruzkina';
$string['commented'] = 'Iruzkina eginda: {$a}';
$string['commentormark'] = 'Egin iruzkina edo aldatu puntuazioa';
$string['comments'] = 'Iruzkinak';
$string['commentx'] = 'Iruzkina: {$a}';
$string['complete'] = 'Osatu';
$string['contexterror'] = 'Ez zenuke hemen egon behar,  kategoria bat beste testuinguru batera mugitzen ez bazaude.';
$string['copy'] = 'Kopiatu {$a}-tik eta aldatu estekak.';
$string['correct'] = 'Zuzena';
$string['correctfeedback'] = 'Edozein erantzun zuzenetarako';
$string['correctfeedbackdefault'] = 'Zure erantzuna zuzena da.';
$string['created'] = 'Sortu da';
$string['createdby'] = 'Nork sortua';
$string['createdmodifiedheader'] = 'Sortutako edo gordetako azkena';
$string['createnewquestion'] = 'Sortu galdera berri bat...';
$string['cwrqpfs'] = 'Ausazko galderak, azpikategorietako galderak aukeratuta';
$string['cwrqpfsinfo'] = '<p> Moodle 1.9ra eguneratu bitartean, galdera-kategoriak hainbat testuingurutan banatuko ditugu. Zure guneko hainbat galdera-kategoriak eta galderek euren partekatze-egoera aldatu egingo dute. Hau egitea beharrezkoa da partekatutako eta ez partekatutako kategoria nahasketa batetik aukeratzen direnean galdera bat edo gehiago (gune honetan gertatzen den bezala). Hau gertatzen da ausazko galdera bat azpikategorietatik aukeratzeko ezartzen denean eta azpikategoria bat edo gehiagok ausazko galdera sortuko den jatorrizko kategoriak ez bezalako truke egoera dutenean.</p>
<p>Ondorengo galdera-kategoriek, zeinetatik aukeratzen dituzten goragoko kategoriek ausazko galderak, Moodle 1.9rako eguneraketan aldatu egingo dute beren truke-egoera ausazko galdera duen kategoriaren egoera berera. Ondoren agertzen diren kategoriek aldatuta izango dute truke egoera. Eragina izan duten galderek funtzionatu egingo dute dauden galdetegi guztietan ahalik eta galdetegi horiek ezabatu arte.</p>';
$string['cwrqpfsnoprob'] = 'Ez dago zure gunean \'Ausazko galderak azpikategorietatik aukeratuta\' aukeraren eraginpeko galdera-kategoriarik.';
$string['decimalplacesingrades'] = 'Hamartar-kopurua kalifikazioetan';
$string['defaultfor'] = '{$a}-ren balio lehenetsia';
$string['defaultinfofor'] = '\'{$a}\' testuinguruan partekatutako galderetarako lehenetsitako kategoria.';
$string['defaultmark'] = 'Lehenetsitako puntuazioa';
$string['defaultmarkmustbepositive'] = 'Lehenetsitako puntuazioa positiboa izan behar du.';
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
$string['editcategories_help'] = 'Zure galdera guztiak zerrenda luze bakar batean izan beharrean, kategoriak eta azpikategoriak sor ditzakezu galderak antolatzeko.

Kategoria bakoitzak testuinguru bat du, eta honek zehaztuko du kategoriako galderak non erabil daitezkeen:

* Jarduera-testuingurua - Galderak jarduera-moduluan soilik erabil daitezke
* Ikastaro-testuingurua - Galderak ikastaroko jarduera-modulu guztietan erabil daitezke
* Ikastaro-kategoriaren testuinguruan - Galderak kategoriako ikastaro eta jarduera-modulu guztietan erabil daitezke
* Sistema-testuingurua - Galderak guneko ikastaro eta jarduera-modulu guztietan erabil daitezke

Kategoriak ere ausazko galderetarako erabiltzen dira, ausazko galderak kategoria jakin batetik aukeratzen baitira.';
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
$string['errorduringpost'] = 'Errorea gertatu da prozesamenduaren ostean!';
$string['errorduringpre'] = 'Errorea gertatu da prozesamenduaren aurretik!';
$string['errorduringproc'] = 'Errorea gertatu da prozesatzean!';
$string['errorduringregrade'] = 'Ezin izan da berriz kalifikatu {$a->qid} galdera, ondoko egoerara abaiatuko da: {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Errorea: ezin da {$a} fitxategia kopiatu.';
$string['errorfilecannotbemoved'] = 'Errorea: ezin da {$a} fitxategia mugitu.';
$string['errorfileschanged'] = 'Errorea: galderetatik estekatutako fitxategiak aldatu egin dira formularioa erakutsi denetik';
$string['erroritemappearsmorethanoncewithdifferentweight'] = '({$a}) galdera behin baino gehiagotan agertzen da galdetegian toki ezberdinetan eta pisu ezberdinarekin. Hori ez du gaur egun onartzen estatistika-txostenak eta ondorioz agian galdera honen inguruko estatistikak ez dira oso fidagarriak izango.';
$string['errormanualgradeoutofrange'] = '{$a->grade} kalifikazioa ez da 0 eta {$a->maxgrade}-ren artekoa {$a->name} (-)en galderarako. Puntuazioa eta iruzkina ez dira gorde.';
$string['errormovingquestions'] = 'Errorea {$a} ID-ak dituzten galderak mugitzean.';
$string['errorpostprocess'] = 'Errorea gertatu da prozesamenduaren ostean!';
$string['errorpreprocess'] = 'Errorea gertatu da prozesamenduaren aurretik!';
$string['errorprocess'] = 'Errorea gertatu da prozesatzean!';
$string['errorprocessingresponses'] = 'Errorea gertatu da zure erantzunak prozesatzean ({$a}). Egin klik \'jarraitu\' botoian lehengo orrira itzuli eta berriz saiatzeko.';
$string['errorsavingcomment'] = 'Eorrea datu-basean {$a->name} galderaren iruzkina gordetzean.';
$string['errorsavingflags'] = 'Errorea markaren egoera gordetzean.';
$string['errorupdatingattempt'] = 'Eorrea datu-basean {$a->id} saiakera eguneratzean.';
$string['eventquestioncategorycreated'] = 'Galdera-kategoria sortu da';
$string['eventquestioncategorydeleted'] = 'Galdera-kategoria ezabatu da';
$string['eventquestioncategorymoved'] = 'Galdera-kategoria mugitu da';
$string['eventquestioncategoryupdated'] = 'Galdera-kategoria eguneratu da';
$string['eventquestioncategoryviewed'] = 'Galdera-kategoria ikusi da';
$string['eventquestioncreated'] = 'Galdera sortu da';
$string['eventquestiondeleted'] = 'Galdera ezabatu da';
$string['eventquestionmoved'] = 'Galdera mugitu da';
$string['eventquestionsexported'] = 'Galdera esportatu da';
$string['eventquestionsimported'] = 'Galdera inportatu da';
$string['eventquestionupdated'] = 'Galdera eguneratu da';
$string['eventquestionviewed'] = 'Galdera ikusi da';
$string['export'] = 'Esportatu';
$string['exportasxml'] = 'Esportatu Moodle XML gisa';
$string['exportcategory'] = 'Esportatu kategoria';
$string['exportcategory_help'] = 'Ezarpen honek esportatuko diren galderak zein kategoriatik hartuko diren zehazten du.

Hainbat inportazio-formatuk (GIFT eta XML Formatuak esaterako) kategoria eta testuinguruaren informazioa esportatze-fitxategian sartzeko aukera ematen dute, nahi izanez gero inportatzerakoan kategoriak berriz sortzeko aukera izateko. Beharrezkoa izanez gero, behar diren laukitxoak markatu beharko dira.';
$string['exporterror'] = 'Erroreak gertatu dira esportatzean';
$string['exportfilename'] = 'galderak';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Jaitsi galdera hau Moodle XML formatuan';
$string['exportquestions'] = 'Esportatu galderak fitxategira';
$string['exportquestions_help'] = 'Funtzio honek galdera-kategoria oso bat (eta edozein azpikategoria) testu-fitxategi batera esportatzeko balio du. Mesedez kontuan izan aukeratutako fitxategi-formatuaren arabera galderen datu eta galdera-mota batzuk ez direla esportatuko.';
$string['feedback'] = 'Feedbacka';
$string['filecantmovefrom'] = 'Galdera-fitxategiak ezin dira mugitu, zeuk ez baituzu fitxategiak mugitzeko baimenik saiatzen ari zaren lekutik.';
$string['filecantmoveto'] = 'Galdera-fitxategiak ezin dira mugitu edo kopiatu, zeuk ez baituzu fitxategiak gehitzeko baimenik saiatzen ari zaren lekura.';
$string['fileformat'] = 'Fitxategiaren formatua';
$string['filesareacourse'] = 'ikastaroaren fitxategi-eremua';
$string['filesareasite'] = 'gunearen fitxategi-eremua';
$string['filestomove'] = 'Mugitu/kopiatu fitxategiak {$a}-(e)ra?';
$string['fillincorrect'] = 'Bete erantzun zuzenak';
$string['filterbytags'] = 'Iragazi etiketen arabera...';
$string['firsttry'] = 'Lehen saiakera';
$string['flagged'] = 'Markatuta';
$string['flagthisquestion'] = 'Markatu galdera hau';
$string['formquestionnotinids'] = 'Galdera hau questionids-en ez dagoen formularioan dago';
$string['fractionsnomax'] = 'Erantzunetako batek %100 izan behar du galdera honetako gehienezko puntuazioa lortu ahal izateko.';
$string['generalfeedback'] = 'Galderaren feedback orokorra';
$string['generalfeedback_help'] = 'Galderaren feedback orokorra galdera erantzun ondoren erakusten zaio ikasleari. Erantzunaren feedback zehatzak ez bezala, galdera-mota eta ikasleak emandako erantzunaren araberakoa dena, feedback orokorra berdina da ikasle guztientzat.

Galderaren feedback orokorra erantzun egokia erakusteko eta azaltzeko erabil dezakezu, eta agian informazio gehiago erakusten duen estekaren bat gehi dezakezu galdera ulertu ez duenarentzat.';
$string['getcategoryfromfile'] = 'Hartu kategoria fitxategitik';
$string['getcontextfromfile'] = 'Hartu testuingurua fitxategitik';
$string['hintn'] = '{no}. Pista';
$string['hintnoptions'] = '{no}. Pistaren aukerak';
$string['hinttext'] = 'Pistaren testua';
$string['howquestionsbehave'] = 'Galderen jokaera';
$string['howquestionsbehave_help'] = 'Ikasleek galdetegiko galderekin modu ezberdinetan aritu daitezke. Esaterako, zuk ikasleek galdera guztiak erantzun eta galdetegia bidaltzea erabaki dezakezu, ezer kalifikatu aurretik eta edozein feedback jaso baino lehen. Kasu horretan modua \'Beranduagoko feedbacka\' izango litzateke.

Bestela, zuk ikasleek galdera bakoitza bidaltzean berehalako feedbacka jasotzea erabaki dezakezu eta, galdera ondo erantzun ez badu, galdera berriz erantzuteko aukera eman kalifikazioan penalizazioa ezarrita. Modu hau \'Interaktiboa hainbat saiakerarekin\' litzateke.

Horiek dira ziur asko gehien erabiltzen diren jokaerak.';
$string['idnumber'] = 'ID zenbakia';
$string['idnumber_help'] = 'Erabiliz gero, ID zenbakiak bakarra izan behar du galdera-kategoria bakoitzean. Batzuetan erabilgarria den galdera bat identifikatzeko beste era bat ematen du, baina normalean zuriz utz dezakezu.';
$string['ignorebroken'] = 'Baztertu apurtutako estekak';
$string['import'] = 'Inportatu';
$string['importcategory'] = 'Inportatu kategoria';
$string['importcategory_help'] = 'Ezarpen honek galderak zein kategoriara inportatuko diren zehazten du.

Hainbat inportazio-formatuk (GIFT eta XML Formatuak esaterako) kategoria eta testuinguruaren informazioa esportatze-fitxategian izan dezakete. Datu hauek erabiltzeko, kategoria bat aukeratu beharrean behar diren laukitxoak markatu beharko zenituzke. Inportatze-fitxategiko kategoriak existitzen ez badira sortu egingo dira.';
$string['importerror'] = 'Errorea gertatu da inportazio-prozesamenduan';
$string['importerrorquestion'] = 'Errorea galdera inportatzean';
$string['importfromcoursefiles'] = '... edo aukeratu ikastaroko fitxategia inportatzeko.';
$string['importfromupload'] = 'Aukeratu igotzeko fitxategia...';
$string['importingquestions'] = 'Inportatzen {$a} galderak fitxategitik';
$string['importparseerror'] = 'Errorea(k) izan d(ir)a inportazio-fitxategia aztertzean. Ez dira galderak inportatu. Inportatzeko, saiatu berriz eta ezarri EZ ondoko ezarpenean \'Gelditu errorean\'\'';
$string['importquestions'] = 'Inportatu galderak fitxategitik';
$string['importquestions_help'] = 'Funtzio honi esker hainbat formatutako galderak inporta ditzakegu testu-fitxategi baten bidez. Kontuan hartu fitxategiak UTF-8 kodifikazioa izan behar duela.';
$string['importwrongfiletype'] = 'Aukeratu duzun fitxategi-mota ({$a->actualtype}) ez dator bat espero zen inportatze-formatuarekin ({$a->expectedtype}).';
$string['impossiblechar'] = 'Ezinezko karakterea {$a} detektatu da parentesi karaktere gisa';
$string['includesubcategories'] = 'Erakutsi galderak azpikategorietatik ere';
$string['incorrect'] = 'Okerra';
$string['incorrectfeedback'] = 'Edozein erantzun okerretarako';
$string['incorrectfeedbackdefault'] = 'Zure erantzuna ez da zuzena';
$string['information'] = 'Informazioa';
$string['invalidanswer'] = 'Erantzuna ez dago osorik';
$string['invalidarg'] = 'Argumentu ezegokiak eman dira edo zerbitzariaren konfigurazio ezegokia da';
$string['invalidcategoryidforparent'] = 'Goragoko kategoriaren IDak ez du balio!';
$string['invalidcategoryidtomove'] = 'Mugitzeko kategoriaren IDak ez du balio!';
$string['invalidconfirm'] = 'Egiaztatze-katea ez da egokia';
$string['invalidcontextinhasanyquestions'] = 'Testuinguru baliogabea hona pasa da: question_context_has_any_questions.';
$string['invalidgrade'] = 'Kalifikazioak ({$a}) ez datoz bat kalifikazio aukerekin - galdera saihestu da.';
$string['invalidpenalty'] = 'Penalizazioa ez da baliagarria';
$string['invalidwizardpage'] = 'Orria ez da egokia edo ez dago ondo zehaztuta!';
$string['lastmodifiedby'] = 'Nork aldatua azkenengoz';
$string['lasttry'] = 'Azken saiakera';
$string['linkedfiledoesntexist'] = 'Ez dago {$a} lotutako fitxategia';
$string['makechildof'] = 'Bihurtu \'{$a}\'-ren ondorengo';
$string['makecopy'] = 'Egin kopia';
$string['maketoplevelitem'] = 'Mugitu goragoko mailara';
$string['manualgradeinvalidformat'] = 'Hau ez da zenbaki baliagarria.';
$string['manualgradeoutofrange'] = 'Kalifikazio hau ibilartetik kanpo dago.';
$string['manuallygraded'] = 'Eskuz {$a->mark} kalifikazioa eman zaio eta hurrengo iruzkina du: {$a->comment}';
$string['mark'] = 'Puntuazioa';
$string['markedoutof'] = 'Gehienezko kalifikazioa';
$string['markedoutofmax'] = 'Gehienezko {$a}-(e)tik kalifikatuta';
$string['markoutofmax'] = '{$a->mark} gehienezko {$a->max}-(e)tik';
$string['marks'] = 'Puntuazioak';
$string['matchgrades'] = 'Lotu kalifikazioak';
$string['matchgradeserror'] = 'Errorea, kalifikazioa ez badago zerrendan';
$string['matchgrades_help'] = 'Inportatutako kalifikazioek bat etorri behar dute ezarri den kalifikazio egokien zerrendako batekin - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (balio negatiboak ere ezar daitezke). Horrela ez bada, bi aukera daude:

* Errorea, kalifikazioa ez badago zerrendan - Galdera batek zerrendan ez dagoen kalifikazioren bat badu errore bat erakutsiko da eta galdera hori ez da inportatuko
* Kalifikazio hurbilena ez badago zerrendan - Kalifikazio bat ez badator bat zerrendako balioekin, kalifikazioa aldatu egingo da eta zerrendako balio hurbilena ezarriko zaio';
$string['matchgradesnearest'] = 'Kalifikazio hurbilena, ez badago zerrendan';
$string['missingcourseorcmid'] = 'courseid edo cmid gehitu behar da hemen: print_question.';
$string['missingcourseorcmidtolink'] = 'courseid edo cmid gehitu behar da hemen: get_question_edit_link.';
$string['missingimportantcode'] = 'Galdera-mota honek kode garrantzitsu bat falta du: {$a}.';
$string['missingoption'] = 'Aukera anitzeko {$a} galderak ez du beharrezko aukerarik';
$string['modified'] = 'Gordetako azkena';
$string['move'] = 'Mugitu {$a}-tik eta aldatu estekak';
$string['movecategory'] = 'Mugitu kategoria';
$string['movedquestionsandcategories'] = 'Galderak eta galdera-kategoriak {$a->oldplace} -(t)ik {$a->newplace} -(r)a mugitu dira.';
$string['movelinksonly'] = 'Aldatu soilik esteken helmuga, ez mugitu edo kopiatu fitxategiak.';
$string['moveq'] = 'Mugitu galdera(k)';
$string['moveqtoanothercontext'] = 'Mugitu galdera beste testuinguru batera';
$string['moveto'] = 'Mugitu hona >>';
$string['movingcategory'] = 'Kategoria mugitzen';
$string['movingcategoryandfiles'] = 'Ziur zaude {$a->name} eta bere azpiko kategoria guztiak "{$a->contextto}" testuingurura aldatu nahi dituzula?<br />Galderetatik lotutako {$a->urlcount} fitxategi aurkitu dugu {$a->fromareaname}-n, kopiatu edo {$a->toareaname}-ra mugitu nahi al dituzu?';
$string['movingcategorynofiles'] = 'Ziur zaude "{$a->name}" kategoria eta bere azpiko kategoria guztiak "{$a->contextto}" testuingurura mugitu nahi dituzula?';
$string['movingquestions'] = 'Galderak eta hainbat fitxategi mugitzen';
$string['movingquestionsandfiles'] = 'Ziur zaude {$a->questions} galdera(k) <strong>"{$a->tocontext}"</strong> kontestura mugitu nahi d(it)uzula?<br /> Galdera hauetatik/honetatik lotutako <strong>{$a->urlcount} fitxategi</strong> aurkitu dugu{$a->fromareaname}-n, kopiatu edo {$a->toareaname}-ra mugitu nahi al dituzu?';
$string['movingquestionsnofiles'] = 'Ziur zaude {$a->questions} galdera(k) <strong>"{$a->tocontext}"</strong> kontestura mugitu nahi d(it)uzula?<br /> Ez dago galdera hauetatik/honetatik lotutako <strong>inongo fitxategirik</strong> {$a->fromareaname}-n.';
$string['needtochoosecat'] = 'Galdera hau mugitzeko kategoria bat aukeratu behar duzu; bestela, egin klik \'utzi\' botoian.';
$string['nocate'] = 'Ez da kategoria existitzen {$a}!';
$string['nopermissionadd'] = 'Ez duzu baimenik hemen galderarik gaineratzeko.';
$string['nopermissionmove'] = 'Ez duzu baimenik galderak hemendik mugitzeko. Galdera kategoria honetan gorde behar duzu edo galdera berri gisa gorde.';
$string['noprobs'] = 'Zure galderen datu-basean ez da arazorik aurkitu.';
$string['noquestions'] = 'Ez da esporta daitekeen galderarik aurkitu. Ziurtatu ezazu aukeratu duzun kategoriak galderak badituela.';
$string['noquestionsinfile'] = 'Ez dago galderarik inportazio-fitxategian';
$string['noresponse'] = '[Erantzunik ez]';
$string['notagfiltersapplied'] = 'Ez da etiketa-iragazkirik aplikatu';
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
$string['numqas'] = 'Galderen saiakera kopurua';
$string['numquestions'] = 'Galdera kopurua';
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
$string['partiallycorrectfeedback'] = 'Edozein erantzun erdi zuzenetarako';
$string['partiallycorrectfeedbackdefault'] = 'Zure erantzuna zuzena da neurri batean.';
$string['penaltyfactor'] = 'Penalizazio-faktorea';
$string['penaltyfactor_help'] = 'Ezarpen honek erantzun oker bakoitzagatik puntuaziotik kenduko zen zatia zehazten du. Galdetegia egokitze-moduan konfiguratuta dagoenean soilik du eragina.

Penalizazio-faktoreak 0 eta 1 bitartean egon behar du- Penalizazio-faktorea 1 bada, ikasleak lehen saioan eman behar du erantzun zuzenak kalifikazioa izateko. Penalizazio-faktorea 0 bada, ikasleak nahi bezainbeste saio egin ditzake kalifikazio altuena lortzeko.';
$string['penaltyforeachincorrecttry'] = 'Penalizazioa saiakera oker bakoitzeko';
$string['penaltyforeachincorrecttry_help'] = 'Galderak \'Interaktiboa hainbat saiakerarekin\' edo \'Egokitze modua\' erabilita egiten direnean, ikasleak erantzuteko hainbat aukera izan ditzan, aukera honek erantzun oker bakoitzeko aplikatuko den penalizazioa zehazten du.

Penalizazioa galderaren kalifikazio osoaren proportzioa da, eta beraz 3 puntu balio dituen galdera batek 0,3333333-ko penalizazioa badu ikasleak 3 puntu lortuko ditu lehenengo saiakerak asmatuz gero, 2 puntu bigarren saiakeran eta puntu 1 hirugarren saiakeran.

Zati bat baino gehiago duten galderetan logika hau galderaren zati bakoitzari modu banatuan aplikatzen zaio. Xehetasunak galderara-motaren araberakoak dira eta konplikatuak izan daitezke, baina irizpide orokorra ikasleari egindakoaren araberako puntuazioa ahalik eta modu justuenean ematea da.';
$string['permissionedit'] = 'Editatu galdera hau';
$string['permissionmove'] = 'Mugitu galdera hau';
$string['permissionsaveasnew'] = 'Gorde hau galdera berri gisa';
$string['permissionto'] = 'Honetarako baimena duzu:';
$string['previewquestion'] = 'Aurreikusi galdera: {$a}';
$string['privacy:metadata:database:question'] = 'Galdera zehatz baten inguruko xehetasunak.';
$string['privacy:metadata:database:question_attempts'] = 'Galdera zehatz baten saiakeraren inguruko informazioa.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Erabiltzaileak saiakeraren baitan galdera hau markatu izanaren adierazlea.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Galderaren erantzunaren laburpena.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Galderen saiakera-pauso bakoitzak pauso horrekin lotutako datu gehigarriak izan ditzake. Datu horiek step_data taulan gordetzen dira.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Datu-elementuaren izena.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Datu-elementuaren balioa.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Galderen saiakera bakoitzak pauso kopuru bat dauka hasieratik osatu eta kalifikatu arteko faseak adierazteko. Taula honek pauso horietako bakoitzaren informazioa gordetzen du.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Galdera honetako saiakerak eskuratutako kalifikazioa, gehienez 1 balioa izateko eskalatua.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Galdera honen saiakera-pausoaren egoera pauso-trantsizioaren amaieran.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Pauso-trantsizio hau hasi zeneko unea.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Pauso-trantsizioa egin zuen erabiltzailea';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Galdera-saiakera eguneratu zeneko unea.';
$string['privacy:metadata:database:question:createdby'] = 'Galdera sortu zuen erabiltzailea.';
$string['privacy:metadata:database:question:generalfeedback'] = 'Galdera honen feedback orokorra.';
$string['privacy:metadata:database:question:modifiedby'] = 'Galdera azkenengoz eguneratu zuen erabiltzailea.';
$string['privacy:metadata:database:question:name'] = 'Galderaren izena.';
$string['privacy:metadata:database:question:questiontext'] = 'Galderaren testua.';
$string['privacy:metadata:database:question:timecreated'] = 'Galdera hau sortu zeneko unea.';
$string['privacy:metadata:database:question:timemodified'] = 'Galdera hau eguneratu zeneko unea.';
$string['privacy:metadata:link:qbehaviour'] = 'Galderen sistemak galdera-jokaera plugin-motaren erabilera egiten du.';
$string['privacy:metadata:link:qformat'] = 'Galderen sistemak galdera-formatua plugin-motaren erabilera egiten du galderak formatu ezberdinetan inportatu eta esportatzeko.';
$string['privacy:metadata:link:qtype'] = 'Galderen sistemak galdera-mota plugin-motarekin aritzen da, eta bertan galdera-mota ezberdinak daude.';
$string['published'] = 'partekatuta';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Ondoko galdera "{$a->name}" ({$a->qtype})</a> galdera-kategoria honetan dago baina <a href="{$a->qurl}">galdetegi honetan ere erabilita dago "{$a->quizname}"</a> beste ikastaro batean: "{$a->coursename}".';
$string['questionbank'] = 'Galdera-bankua';
$string['questionbehaviouradminsetting'] = 'Galderen jokaerarako ezarpenak';
$string['questionbehavioursdisabled'] = 'Desgaitzeko galderen jokaerak';
$string['questionbehavioursdisabledexplained'] = 'Idatzi komaz banatutako zerrenda bat zabaltzen den menuan agertzea nahi ez dituzun jokaerekin';
$string['questionbehavioursorder'] = 'Galderen jokaeren ordena';
$string['questionbehavioursorderexplained'] = 'Idatzi komaz banatutako zerrenda bat zabaltzen den menuan agertzea nahi dituzun jokaerekin';
$string['questioncategory'] = 'Galdera-kategoriak';
$string['questioncatsfor'] = 'Galdera-kategoriak \'{$a}\'-rako';
$string['questiondoesnotexist'] = 'Ez dago galdera hau';
$string['questionformtagheader'] = '{$a} etiketa(k)';
$string['questionidmismatch'] = 'Errorea galderen IDetan';
$string['questionname'] = 'Galderaren izena';
$string['questionnamecopy'] = '{$a} (kopia)';
$string['questionno'] = '{$a}. galdera';
$string['questionpreviewdefaults'] = 'Galderak aurreikusteko lehenetsitako balioak';
$string['questionpreviewdefaults_desc'] = 'Lehenetsitako balio hauek erabiltzaile batek galdera bat lehenengo aldiz aurreikusten duenean erabiltzen dira. Behin erabiltzaileak galdera aurreikusi duenean bere hobespenak erabiltzaile-hobespenetan gordeko dira.';
$string['questions'] = 'Galderak';
$string['questionsaveerror'] = 'Erroreak gertatu dira galdera gordetzean - ({$a})';
$string['questionsinuse'] = '(\'*\' izartxoaz markatutako galderak dagoeneko lekuren batean erabiltzen dira, galdetegiren batean adibidez. Ondorioz, aurrera egiten baduzu galderak hauek ez dira benetan ezabatuko, ezkutatu baino ez dira egingo.)';
$string['questionsmovedto'] = 'Oraindik erabiltzen ari diren galderak  \'{$a}\'-ra mugitzen goragoko ikastaro-kategorian.';
$string['questionsrescuedfrom'] = 'Galderak gordeta {$a} testuingurutik';
$string['questionsrescuedfrominfo'] = 'Galdera hauek (batzuk ezkutuan egon daitezke) gorde egin ziren {$a} testuingurua ezabatu zenean, oraindik ere hainbat galdetegitan edo bestelako jardueratan erabili egiten direlako.';
$string['questiontags'] = 'Galderen etiketak';
$string['questiontext'] = 'Galderaren testua';
$string['questiontype'] = 'Galdera-mota';
$string['questionuse'] = 'Erabili galdera jarduera honetan';
$string['questionvariant'] = 'Galderaren aldaera';
$string['questionx'] = '{$a}. galdera';
$string['requiresgrading'] = 'Kalifikazioa behar du';
$string['responsehistory'] = 'Erantzunen historia';
$string['restart'] = 'Hasi berriz';
$string['restartwiththeseoptions'] = 'Hasi berriz aukera hauekin';
$string['restoremultipletopcats'] = 'Segurtasun-kopia fitxategiak {$a} testuinguruko maila goreneko galdera-kategoria bat baino gehiago dauka.';
$string['reviewresponse'] = 'Berrikusi erantzuna';
$string['rightanswer'] = 'Erantzun zuzena';
$string['rightanswer_help'] = 'Erantzun egokiarentzako automatikoki emandako laburpena. Hau mugatua egon daiteke, eta behar bada erantzun egokia azaltzeko feedback orokorra erabiltzea nahiko duzu, eta aukera hau desaktibatu.';
$string['save'] = 'Gorde';
$string['savechangesandcontinueediting'] = 'Gorde aldaketak eta jarraitu editatzen';
$string['saved'] = 'Gordeta: {$a}';
$string['saveflags'] = 'Gorde marken egoera';
$string['selectacategory'] = 'Aukeratu kategoria bat:';
$string['selectaqtypefordescription'] = 'Aukeratu galdera-mota bat deskribapena ikusteko.';
$string['selectcategoryabove'] = 'Aukeratu goiko kategoria bat';
$string['selectquestionsforbulk'] = 'Aukeratu galderak eragiketa masiboetarako';
$string['settingsformultipletries'] = 'Saiakera anitzak';
$string['shareincontext'] = 'Partekatu {$a}-rentzat testuinguruan.';
$string['showhidden'] = 'Erakutsi galdera zaharrak ere';
$string['showmarkandmax'] = 'Erakutsi puntuazioa eta gehienekoa';
$string['showmaxmarkonly'] = 'Erakutsi gehienezko puntuazioa soilik';
$string['shown'] = 'Erakutsia';
$string['shownumpartscorrect'] = 'Erakutsi erantzun zuzenen kopurua';
$string['shownumpartscorrectwhenfinished'] = 'Erakutsi erantzun zuzenen kopurua';
$string['showquestiontext'] = 'Erakutsi galderaren testua galdera-zerrendan';
$string['specificfeedback'] = 'Erantzunaren feedback zehatza';
$string['specificfeedback_help'] = 'Ikasleek emandako erantzunen araberako feedbacka';
$string['started'] = 'Hasita';
$string['state'] = 'Egoera';
$string['step'] = 'Urratsa';
$string['steps'] = 'Pausoak';
$string['stoponerror'] = 'Gelditu errorea gertatzen bada';
$string['stoponerror_help'] = 'Ezarpen honek errore bat aurkitzean inportatze-prozesua geratuko den zehazten du, eta ondorioz ez da galderarik inportatuko, edo erroreak dituzten galderak ezikusi eta baliozko galderak inportatuko diren.';
$string['submissionoutofsequence'] = 'Ordenetik kanpoko sarrera. Mesedez ez egin klik atzera botoian galdetegiarekin lanean ari zarenean.';
$string['submissionoutofsequencefriendlymessage'] = 'Datuetara orden normaletik kanpo sartu egin zara. Hau gertatu daiteke zure nabigatzailearen Atzera eta Aurrera botoiak erabiltzen badituzu; mesedez ez erabili botoi horiek galdetegia egin bitartean. Orria kargatu bitartean nonbait klik egin baduzu ere gertatu daiteke hau. Jarraitzeko egin klik <strong>Jarraitu</strong> botoian.';
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
$string['tofilecategory'] = 'Sartu kategoria fitxategian';
$string['tofilecontext'] = 'Sartu testuingurua fitxategian';
$string['topfor'] = 'Gorena {$a}-(e)rako';
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
$string['whethercorrect'] = 'Zuzena den ala ez';
$string['whethercorrect_help'] = 'Honek \'Ondo\', \'Partzialki ondo\' eta \'Gaizki\'-ren deskribapenak barne hartzen ditu, baita informazio hori ematen duen kolorezko edozein nabarmentze.';
$string['whichtries'] = 'Zein saiakera';
$string['withselected'] = 'Aukeratutakoekin';
$string['wrongprefix'] = 'Izenaren aurrizkia gaizku formateatua:  {$a}';
$string['xoutofmax'] = '{$a->mark} gehienezko {$a->max}-(e)tik';
$string['yougotnright'] = '{$a->num} erantzun zuzen aukeratu duzu.';
$string['youmustselectaqtype'] = 'Galdera-mota aukeratu behar duzu.';
$string['yourfileshoulddownload'] = 'Esportatutako fitxategiaren deskarga laster hasi beharko litzateke. Horrela gertatu ezean, mesedez, <a href="{$a}">egin klik hemen</a>.';
