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
 * Strings for component 'backup', language 'eu', branch 'MOODLE_32_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Aukeratu programatutako segurtasun-kopiak egitea edo ez. Eskuz aukeratuz gero programatutako segurtasun-kopiak soilik CLI bidezko script-en bitartez egin ahal izango dira. Hau komando lerroan eskuz egin daiteke edo cron-aren bitartez.';
$string['autoactivedisabled'] = 'Desgaituta';
$string['autoactiveenabled'] = 'Gaituta';
$string['autoactivemanual'] = 'Eskuz';
$string['automatedbackupschedule'] = 'Egutegia';
$string['automatedbackupschedulehelp'] = 'Erabaki asteko zein egunetan egingo diren segurtasun-kopia automatikoak';
$string['automatedbackupsinactive'] = 'Programatutako segurtasun-kopiak gunearen kudeatzaileak gaitu ditu';
$string['automatedbackupstatus'] = 'Programatutako segurtasun-kopiaren egoera';
$string['automateddeletedays'] = 'Ezabatu ondokoa baino zaharragoak diren segurtasun-kopiak';
$string['automatedmaxkept'] = 'Gehienez mantendu beharreko segurtasun-kopia kopurua';
$string['automatedmaxkepthelp'] = 'Honek ikastaro bakoitzetik gehienez gorde beharreko azken aldiko segurtasun-kopia kopurua zehazten du. Zaharragoak diren segurtasun-kopiak automatikoki ezabatuko dira.';
$string['automatedminkept'] = 'Gutxienez mantendu beharreko segurtasun-kopia kopurua';
$string['automatedminkepthelp'] = 'Zehaztutako egun kopuru bat baino zaharragoak diren segurtasun-kopiak ezabatzen badira, aktibitaterik gabeko ikastaro bat segurtasun-kopiarik gabe geratzea gertatu daiteke. Hau ekiditeko, gutxienez mantendu beharreko segurtasun-kopia kopuru bat zehaztu daiteke.';
$string['automatedsettings'] = 'Programatutako segurtasun-kopiaren ezarpenak';
$string['automatedsetup'] = 'Programatutako segurtasun-kopiak';
$string['automatedstorage'] = 'Segurtasun-kopia automatikoen biltegia';
$string['automatedstoragehelp'] = 'Aukeratu non gordeko diren segurtasun-kopiak automatikoki sortzen direnean.';
$string['backupactivity'] = 'Jardueraren segurtasun-kopia:{$a}';
$string['backupcourse'] = 'Ikastaroaren segurtasun-kopia:{$a}';
$string['backupcoursedetails'] = 'Ikastaroaren xehetasunak';
$string['backupcoursesection'] = 'Atala: {$a}';
$string['backupcoursesections'] = 'Ikastaroaren atalak';
$string['backupdate'] = 'Egikaritze-data';
$string['backupdetails'] = 'Segurtasun-kopiaren xehetasunak';
$string['backupdetailsnonstandardinfo'] = 'Aukeratutako fitxategia ez da Moodle-ko segurtasun-kopia fitxategi estandarra. Berreskuratze-prozesua segurtasun-fitxategi estandarra bihurtzen eta ondoren berreskuratzen saiatuko da.';
$string['backupformat'] = 'Formatua';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Formatu ezezaguna';
$string['backuplog'] = 'Informazio teknikoa eta abisuak';
$string['backupmode'] = 'Modua';
$string['backupmode10'] = 'Orokorra';
$string['backupmode20'] = 'Inportatu';
$string['backupmode30'] = 'Bilgunea';
$string['backupmode40'] = 'Gune bera';
$string['backupmode50'] = 'Automatizatua';
$string['backupmode60'] = 'Bihurtuta';
$string['backupsection'] = 'Ikastaro-atalaren segurtasun-kopia:{$a}';
$string['backupsettings'] = 'Segurtasun-kopiaren ezarpenak';
$string['backupsitedetails'] = 'Gunearen xehetasunak';
$string['backupstage16action'] = 'Jarraitu';
$string['backupstage1action'] = 'Hurrengoa';
$string['backupstage2action'] = 'Hurrengoa';
$string['backupstage4action'] = 'Egin segurtasun-kopia';
$string['backupstage8action'] = 'Jarraitu';
$string['backuptype'] = 'Mota';
$string['backuptypeactivity'] = 'Jarduera';
$string['backuptypecourse'] = 'Ikastaroa';
$string['backuptypesection'] = 'Atala';
$string['backupversion'] = 'Segurtasun-kopiaren bertsioa';
$string['cannotfindassignablerole'] = 'Segurtasun-kopiaren fitxategiko {$a} rola ezin da lotu zuk eslei dezakezun inongo rolekin.';
$string['choosefilefromactivitybackup'] = 'Jardueren segurtasun-kopien eremua';
$string['choosefilefromactivitybackup_help'] = 'Jardueren segurtasun-kopia lehenetsitako baloreak erabiliz egiten denean, kopiaren fitxategiak hemen gordeko dira.';
$string['choosefilefromautomatedbackup'] = 'Segurtasun-kopia automatikoak';
$string['choosefilefromautomatedbackup_help'] = 'Segurtasun-kopia automatikoak ditu';
$string['choosefilefromcoursebackup'] = 'Ikastaroaren segurtasun-kopien eremua';
$string['choosefilefromcoursebackup_help'] = 'Ikastaro baten segurtasun-kopia lehenetsitako baloreak erabiliz egiten denean, kopiaren fitxategiak hemen gordeko dira.';
$string['choosefilefromuserbackup'] = 'Erabiltzailearen segurtasun-kopietarako eremu pribatua';
$string['choosefilefromuserbackup_help'] = 'Ikastaroen segurtasun-kopiak anonimo bihurtutako erabiltzaileen informazioa duenean, kopiaren fitxategiak hemen gordeko dira.';
$string['configgeneralactivities'] = 'Ezarri berezkoa jarduerak segurtasun-kopia batean sartzeko.';
$string['configgeneralanonymize'] = 'Gaituta erabiltzaileei buruzko informazio guztia anonimo bihurtuko da berez.';
$string['configgeneralbadges'] = 'Ezarri berezkoa dominak segurtasun-kopietan sartzeko.';
$string['configgeneralblocks'] = 'Ezarri berezkoa blokeak segurtasun-kopia batean sartzeko';
$string['configgeneralcalendarevents'] = 'Ezarri berezkoa egutegiko ekitaldiak segurtasun-kopietan sartzeko.';
$string['configgeneralcomments'] = 'Ezarri berezkoa iruzkinak segurtasun-kopia batean sartzeko';
$string['configgeneralcompetencies'] = 'Ezarri berezkoa gaitasunak segurtasun-kopietan sartzeko.';
$string['configgeneralfilters'] = 'Ezarri berezkoa iragazkiak segurtasun-kopia batean sartzeko';
$string['configgeneralgroups'] = 'Ezarri berezkoa taldeak eta taldekatzeak segurtasun-kopietan sartzeko.';
$string['configgeneralhistories'] = 'Ezarri berezkoa erabiltzaileen historia jarduerak segurtasun-kopian sartzeko';
$string['configgenerallogs'] = 'Gaituta, erregistroak berez sartuko dira segurtasun-kopietan.';
$string['configgeneralquestionbank'] = 'Gaituz gero galdera-bankua berez seguratsun-kopietan sartuko da. KONTUAN IZAN: ezarpen hau desgaituz gero galdera-bankua erabiltzen duten jardueren segurtasun-kopia ere desgaituko du, galdetegiarena esaterako.';
$string['configgeneralroleassignments'] = 'Gaituta, rol-esleipenak berez sartuko dira segurtasun-kopietan.';
$string['configgeneralusers'] = 'Ezarri berezkoa erabiltzaileak segurtasun-kopietan sartzeko.';
$string['configgeneraluserscompletion'] = 'Gaituta, erabiltzaileen osaketa-informazioa berez sartuko da segurtasun-kopietan.';
$string['configloglifetime'] = 'Honek agerraldian mantendu beharreko erregistroen gehienezko epea zehazten du. Epe hau baino zaharragoak diren erregistroak automatikoki ezabatuko dira. Hemen balio txikia mantentzea gomendatzen da, agerraldietako informazioaren segurtasun-kopiak erraldoiak izan daitezkeelako.';
$string['confirmcancel'] = 'Utzi segurtasun-kopia';
$string['confirmcancelno'] = 'Jarraitu';
$string['confirmcancelquestion'] = 'Ziur al zaude utzi egin nahi duzula? Sartu duzun informazio guztia galdu egingo da.';
$string['confirmcancelyes'] = 'Utzi';
$string['confirmnewcoursecontinue'] = 'Ikastaro berriaren abisua';
$string['confirmnewcoursecontinuequestion'] = 'Behin-behinean (ezkutuan) dauden ikastaroak sortuko dira berreskuratze-prozesuan. Berreskuratzea bertan behera uzteko Utzi sakatu. Ez itxi nabigatzailea berreskuratze-prozesuak iraun bitartean.';
$string['coursecategory'] = 'Ikastaroa berreskuratzeko kategoria';
$string['courseid'] = 'Jatorrizko IDa';
$string['coursesettings'] = 'Ikastaroaren ezarpenak';
$string['coursetitle'] = 'Izenburua';
$string['currentstage1'] = 'Hasierako ezarpenak';
$string['currentstage16'] = 'Osatuta';
$string['currentstage2'] = 'Egituraren ezarpenak';
$string['currentstage4'] = 'Egiaztatu eta berrikusi';
$string['currentstage8'] = 'Egin segurtasun-kopia';
$string['enterasearch'] = 'Idatzi bilaketa bat';
$string['error_block_for_module_not_found'] = 'Bloke-instantzia umezurtza (id: {$a->bid}) aurkitu da (id: {$a->mid}) ikastaro-modulurako. Bloke hau ez da berreskuratuko';
$string['errorcopyingbackupfile'] = 'Errorea gertatu da segurtasun-kopia fitxategia aldi baterako karpetara kopiatzean berreskuratzea hasi aurretik.';
$string['error_course_module_not_found'] = 'Ikastaro-modulu umezurtza (id: {$a})  aurkitu da. Modulu hau ez da segurtausn-kopian gehituko.';
$string['errorfilenamemustbezip'] = 'Sartzen duzun fitxategiak ZIP motakoa izan behar du eta .mbz luzapena behar du izan';
$string['errorfilenamerequired'] = 'Fitxategi-izen egokia sartu behar duzu segurtasun-kopia honetarako';
$string['errorinvalidformat'] = 'Segurtasun-kopiaren formatu ezezaguna';
$string['errorinvalidformatinfo'] = 'Aukeratutako fitxategia ez da Moodle-rako segurtasun-kopiaren fitxategi baliagarria eta ezin da berreskuratu.';
$string['errorminbackup20version'] = 'Segurtasun-kopiaren fitxategia hau Moodle-ren segutasun-kopiaren garapen ({$a->backup}) bertsioarekin sortu da segurtasun-kopiaren fitxategi hau. Gutxienez behar dena, berriz, hau da: {$a->min}. Ezin da, beraz, berreskuratu.';
$string['errorrestorefrontpagebackup'] = 'Hasiera-orrian hasiera-orriko segurtasun-kopiak baino ezin dira berreskuratu';
$string['executionsuccess'] = 'Zure segurtasun-kopiaren fitxategia egoki osatu da.';
$string['filealiasesrestorefailures'] = 'Erroreak ezizenak berreskuratzean';
$string['filealiasesrestorefailures_help'] = 'Ezizen/estekak beste fitxategietarako esteka sinbolikoak dira, kanpo-biltegietan dauden fitxategietarakoak barne. Batzuetan, Moodle-k ezin ditu berreskuratu - esaterako segurtasun-kopia beste gune batean berreskuratzean edo estekatutako fitxategia existitzen ez denean.

Errorearen arrazoi zehatzaren inguruko xehetasun gehiago berreskuratzearen log fitxategian topatuko dituzu.';
$string['filealiasesrestorefailuresinfo'] = 'Segurtasun-kopian sartutako ezizen/esteka batzuk ezin izan dira berreskuratu. Hurrengo zerrendan hauen esperotako kokapenak eta jatorrizko guneko fitxategiaren kokapena daude.';
$string['filename'] = 'Fitxategiaren izena';
$string['filereferencesincluded'] = 'Segurtasun kopian kanpo-edukietako fitxategi-erreferentziak daude. Hauek ez dute funtzionatuko segurtasun-kopia beste gune batean berreskuratuz gero.';
$string['filereferencesnotsamesite'] = 'Segurtasun-kopia beste gune batena da, fitxategi-erreferentziak ezin dira berreskuratu.';
$string['filereferencessamesite'] = 'Segurtasun-kopia gune honetakoa da, beraz fitxategi-erreferentziak berreskura daitezke.';
$string['generalactivities'] = 'Jarduerak eta baliabideak barne ditu';
$string['generalanonymize'] = 'Informazioa anonimo bihurtu';
$string['generalbackdefaults'] = 'Segurtasun-kopien berezko ezarpen orokorrak';
$string['generalbadges'] = 'Dominak barne ditu';
$string['generalblocks'] = 'Blokeak barne ditu';
$string['generalcalendarevents'] = 'Sartu egutegiko ekitaldiak';
$string['generalcomments'] = 'Iruzkinak barne ditu';
$string['generalcompetencies'] = 'Sartu gaitasunak';
$string['generalfilters'] = 'Iragazkiak barne ditu';
$string['generalgradehistories'] = 'Historiak barne ditu';
$string['generalgroups'] = 'Taldeak eta taldekatzeak barne ditu';
$string['generalhistories'] = 'Historiak barne ditu';
$string['generallogs'] = 'Agerraldiak barne ditu';
$string['generalquestionbank'] = 'Galdera-bankua barne du';
$string['generalroleassignments'] = 'Rol-esleipenak barne ditu';
$string['generalsettings'] = 'Segurtasun-kopia orokorren ezarpenak';
$string['generalusers'] = 'Erabiltzaileak barne ditu';
$string['generaluserscompletion'] = 'Erabiltzaileen osaketa-informazioak barne ditu';
$string['hidetypes'] = 'Ezkutatu aukera-motak';
$string['importbackupstage16action'] = 'Jarraitu';
$string['importbackupstage1action'] = 'Hurrengoa';
$string['importbackupstage2action'] = 'Hurrengoa';
$string['importbackupstage4action'] = 'Egin inportazioa';
$string['importbackupstage8action'] = 'Jarraitu';
$string['importcurrentstage0'] = 'Ikastaro-aukeraketa';
$string['importcurrentstage1'] = 'Hasierako ezarpenak';
$string['importcurrentstage16'] = 'Osatuta';
$string['importcurrentstage2'] = 'Egituraren ezarpenak';
$string['importcurrentstage4'] = 'Egiaztatu eta berrikusi';
$string['importcurrentstage8'] = 'Egin inportazioa';
$string['importfile'] = 'Inportatu segurtasun-kopiaren fitxategi bat';
$string['importgeneralduplicateadminallowed'] = 'Baimendu admin gatazkaren konponketa';
$string['importgeneralduplicateadminallowed_desc'] = 'Guneak \'admin\' erabiltzaile-izena duen kontua badauka, orduan \'admin\' erabiltzaile-izena duen segurtasun-kopia bat berreskuratzeak gatazka sor lezake. Aukera hau gaituz gero, gatazka konponduko da segurtasun-kopiako erabiltzaile-izena \'admin_xyz\'-ra aldatuta.';
$string['importgeneralmaxresults'] = 'Zrrendatutako ikastaroen gehieneko kopurua inportatzeko';
$string['importgeneralmaxresults_desc'] = 'Honek inportatze-prozesuaren lehen urratsean zerrendaturiko ikastaro-kopurua zehazten du.';
$string['importgeneralsettings'] = 'Inportaziorako berezko ezarpenak';
$string['importsettings'] = 'Inportatze-ezarpen orokorrak';
$string['importsuccess'] = 'Inportazioa osatu da. Sakatu jarraituri ikastarora itzultzeko.';
$string['includeactivities'] = 'Barne du: ';
$string['includeditems'] = 'Barne dituen elementuak:';
$string['includefilereferences'] = 'Fitxategien erreferentziak kanpoko edukietara';
$string['includesection'] = '{$a} atala';
$string['includeuserinfo'] = 'Erabiltzaileen datuak';
$string['jumptofinalstep'] = 'Jauzi egin azken urratsera';
$string['locked'] = 'Bokleatuta';
$string['lockedbyconfig'] = 'Ezarpena blokeatuta dago segurtasun-kopiaren berezko ezarpenengatik.';
$string['lockedbyhierarchy'] = 'Mendekotasunek blokeatuta';
$string['lockedbypermission'] = 'Ez duzu nahikoa baimenik ezarpen hau aldatzeko.';
$string['loglifetime'] = 'Mantendu erregistroak tarte honetan:';
$string['managefiles'] = 'Kudeatu segurtasun-kopiaren fitxategiak';
$string['missingfilesinpool'] = 'Zenbait fitxategi ezin izan dira gorde segurtasun-kopia egitean, eta beraz ezin izango dira berreskuratu.';
$string['module'] = 'Modulua';
$string['moodleversion'] = 'Moodle bertsioa';
$string['morecoursesearchresults'] = '{$a} ikastaro baino gehiago aurkitu dira, lehenbiziko {$a} emaitza erakusten';
$string['moreresults'] = 'Emaitza gehiegi daude, zehaztu gehiago bilaketa.';
$string['nomatchingcourses'] = 'Ez dago erakusteko ikastarorik';
$string['norestoreoptions'] = 'Ez dago berreskuratzeko kategoriarik edo ikastarorik.';
$string['originalwwwroot'] = 'Segurtasun-kopiaren URLa';
$string['preparingdata'] = 'Datuak prestatzen';
$string['preparingui'] = 'Orria erakusteko prestatzen';
$string['previousstage'] = 'Aurrekoa';
$string['qcategory2coursefallback'] = '"{$a->name}" izeneko galdera-kategoriak, jatorrian sistema/ikastaro-kategoria testuinguruan segurtasun-kopian, berreskuratzean ikastaro testuinguruan sortuko da.';
$string['qcategorycannotberestored'] = '"{$a->name}"  galdera-kategoria ezin da sortu berreskuratuta';
$string['question2coursefallback'] = '"{$a->name}" izeneko galdera-kategoriak, jatorrian sistema/ikastaro-kategoria testuinguruan segurtasun-kopian, berreskuratzean ikastaro testuinguruan sortuko da.';
$string['questionegorycannotberestored'] = '"{$a->name}" galderak ezin dira sortu berreskuratuta';
$string['restoreactivity'] = 'Berreskuratu jarduera';
$string['restorecourse'] = 'Berreskuratu ikastaroa';
$string['restorecoursesettings'] = 'Ikastaroaren ezarpenak';
$string['restoreexecutionsuccess'] = 'Ikastaroa egoki berreskuratu da; jarraitu botoiari sakatuta berreskuratu duzun ikastaroa ikusiko duzu.';
$string['restorefileweremissing'] = 'Zenbait fitxategi ezin izan dira berreskuratu segurtasun-kopian ez zeudelako.';
$string['restorenewcoursefullname'] = 'Ikastaro berriaren izena';
$string['restorenewcourseshortname'] = 'Ikastaro berriaren izen laburra';
$string['restorenewcoursestartdate'] = 'Hasiera-data berria';
$string['restorerolemappings'] = 'Berreskuratu rolen loturak';
$string['restorerootsettings'] = 'Berreskuratu ezarpenak';
$string['restoresection'] = 'Berreskuratu atala';
$string['restorestage1'] = 'Baieztatu';
$string['restorestage16'] = 'Berrikusi';
$string['restorestage16action'] = 'Berreskuratu';
$string['restorestage1action'] = 'Hurrengoa';
$string['restorestage2'] = 'Helburua';
$string['restorestage2action'] = 'Hurrengoa';
$string['restorestage32'] = 'Prozesua';
$string['restorestage32action'] = 'Jarraitu';
$string['restorestage4'] = 'Ezarpenak';
$string['restorestage4action'] = 'Hurrengoa';
$string['restorestage64'] = 'Osatuta';
$string['restorestage64action'] = 'Jarraitu';
$string['restorestage8'] = 'Eskema';
$string['restorestage8action'] = 'Hurrengoa';
$string['restoretarget'] = 'Berreskuratu helburua';
$string['restoretocourse'] = 'Berreskuratu ikastarora:';
$string['restoretocurrentcourse'] = 'Berreskuratu ikastaro honetan';
$string['restoretocurrentcourseadding'] = 'Batu ikastaroaren segurtasun-kopia ikastaro honetara';
$string['restoretocurrentcoursedeleting'] = 'Ezabatu ikastaro honetako edukiak eta ondoren berreskuratu';
$string['restoretoexistingcourse'] = 'Berreskuratu aldez aurretik dagoen ikastaro batera';
$string['restoretoexistingcourseadding'] = 'Segurtasun-kopia gehitu aldez aurretik dagoen ikastarora';
$string['restoretoexistingcoursedeleting'] = 'Ezabatu aldez aurretik dagoen ikastaro bateko edukiak eta ondoren berreskuratu.';
$string['restoretonewcourse'] = 'Ikastaro berri gisa berreskuratu';
$string['restoringcourse'] = 'Ikastaro-berreskuraketa martxan da';
$string['restoringcourseshortname'] = 'berreskuratzen';
$string['rootenrolmanual'] = 'Berreskuratu eskuzko matrikulazio gisa.';
$string['rootsettingactivities'] = 'Jarduerak eta baliabideak barne ditu';
$string['rootsettinganonymize'] = 'Erabiltzaileen informazioa anonimo bihurtu';
$string['rootsettingbadges'] = 'Dominak barne ditu';
$string['rootsettingblocks'] = 'Blokeak barne ditu';
$string['rootsettingcalendarevents'] = 'Egutegiko ekitaldiak barne ditu';
$string['rootsettingcomments'] = 'Iruzkinak barne ditu';
$string['rootsettingcompetencies'] = 'Gaitasunak barne ditu';
$string['rootsettingfilters'] = 'Iragazkiak barne ditu ';
$string['rootsettinggradehistories'] = 'Kalifikazioen historia barne du';
$string['rootsettinggroups'] = 'Taldeak eta taldekatzeak barne ditu';
$string['rootsettingimscc1'] = 'Bihurtu IMS Common Cartridge 1.0-ra';
$string['rootsettingimscc11'] = 'Bihurtu IMS Common Cartridge 1.1-era';
$string['rootsettinglogs'] = 'Ikastaroaren agerraldiak barne ditu';
$string['rootsettingquestionbank'] = 'Galdera-bankua barne du';
$string['rootsettingroleassignments'] = 'Erabiltzaileen rol-esleipenak barne ditu';
$string['rootsettings'] = 'Segurtasun-kopiaren ezarpenak';
$string['rootsettingusers'] = 'Matrikulatutako erabiltzaileak barne ditu';
$string['rootsettinguserscompletion'] = 'Erabiltzaileen osaketa-xehetasunak barne ditu';
$string['sectionactivities'] = 'Jarduerak';
$string['sectioninc'] = 'Segurtasun-kopian (ez erabiltzaileen informazioa)';
$string['sectionincanduser'] = 'Segurtasun-kopian erabiltzaileen informazioarekin';
$string['selectacategory'] = 'Aukera ezazu kategoria bat';
$string['selectacourse'] = 'Aukera ezazu ikastaro bat';
$string['setting_course_fullname'] = 'Ikastaroaren izena';
$string['setting_course_shortname'] = 'Ikastaroaren izen laburra';
$string['setting_course_startdate'] = 'Ikastaroaren hasiera-data';
$string['setting_keep_groups_and_groupings'] = 'Mantendu orain taldeak eta taldekatzeak';
$string['setting_keep_roles_and_enrolments'] = 'Mantendu oraingo rolak eta matrikulazioak';
$string['setting_overwriteconf'] = 'Ikastaroaren ezarpenak gainidatzi';
$string['showtypes'] = 'Erakutsi aukera-motak';
$string['sitecourseformatwarning'] = 'Hau hasiera-orriko segurtasun-kopia bat da, kontuan izan soilik hasiera-orrian berreskura daitekeela.';
$string['skiphidden'] = 'Alde batera utzi ezkutuan dauden ikastaroak';
$string['skiphiddenhelp'] = 'Aukeratu ezkutuan dauden ikastaroak alde batera uztea edo ez';
$string['skipmodifdays'] = 'Alde batera utzi ondokoaren ondoren aldatu ez diren ikastaroak';
$string['skipmodifdayshelp'] = 'Aukeratu azken egun-kopuru horretan aldatu ez diren ikastaroak alde batera uztea edo ez';
$string['skipmodifprev'] = 'Alde batera utzi aurreko segurtasun-kopiatik aldatu ez diren ikastaroak';
$string['skipmodifprevhelp'] = 'Aukeratu aurreko programatutako segurtasun-kopiatik aldatu ez diren ikastaroak alde batera uztea edo ez. honek erregistroa gaituta egotea behar du.';
$string['storagecourseandexternal'] = 'Ikastaroko segurtasun-kopien fitxategi-eremua eta direktorio espezifikoa';
$string['storagecourseonly'] = 'Ikastaroko segurtasun-kopien fitxategi-eremua';
$string['storageexternalonly'] = 'Zehaztu direktorio bat segurtasun-kopia automatikoetarako';
$string['timetaken'] = 'Hartutako denbora';
$string['title'] = 'Izenburua';
$string['totalcategorysearchresults'] = 'Kategoriak denera: {$a}';
$string['totalcoursesearchresults'] = 'Ikastaroak denera: {$a}';
$string['unnamedsection'] = 'Izenik gabeko atala';
$string['userinfo'] = 'Erabiltzailearen informazioa';
