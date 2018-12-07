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
 * Strings for component 'tool_xmldb', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Oraingoa';
$string['aftertable'] = 'Taularen ondoren:';
$string['back'] = 'Atzera';
$string['backtomainview'] = 'Itzuli orri nagusira';
$string['cannotuseidfield'] = 'Ezin da "id" eremua sartu. Zutabe auto-zenbakitua da.';
$string['change'] = 'Aldatu';
$string['charincorrectlength'] = 'Char eremuaren luzera desegokia';
$string['checkbigints'] = 'Egiaztatu zenbaki osoak';
$string['check_bigints'] = 'Bilatu zuzenak ez diren datu-baseko zenbakiak';
$string['checkdefaults'] = 'Egiaztatu berezko baloreak';
$string['check_defaults'] = 'Bilatu sendotasunik gabeko berezko balioak';
$string['checkforeignkeys'] = 'Egiaztatu kanpoko gakoak';
$string['check_foreign_keys'] = 'Bilatu urratutako kanpoko gakoak';
$string['checkindexes'] = 'Egiaztatu indizeak';
$string['check_indexes'] = 'Bilatu falta diren datu-baseko indizeak';
$string['checkoraclesemantics'] = 'Egiaztatu semantika';
$string['check_oracle_semantics'] = 'Bilatu luzera baliogabeko semantika';
$string['completelogbelow'] = '(ikusi behean bilaketaren erregistro osoa)';
$string['confirmcheckbigints'] = 'Funtzionalitate honek <a href="http://tracker.moodle.org/browse/MDL-11038">zenbaki oso ezegokiak izan ditzaketen eremuak</a> bilatuko ditu zure Moodle zerbitzarian, eta sortuko ditu (exekutatu gabe!) zenbaki osoak zure datu-basean modu egokian definituta izateko beharrezkoak diren SQL komandoak.

Behin komando horiek sortuta zure SQL interfaze gogokoenean kopiatu eta modu seguruan exekuta ditzakezu (ez ahaztu hori egin aurretik zure datuen segurtasun-kopia bat egitea).

Irmoki gomendatzen da eskuragarri dagoen zure Moodle bertsioaren azken kaleratzea instalatuta izatea zenbaki oso ezegokiak bilatu baino lehen.

Funtzionalitate honek ez du datu-basean inolako ekintzarik egiten (bertatik irakurri baino ez), eta beraz arazorik gabe edozein unetan exekuta daiteke.';
$string['confirmcheckdefaults'] = 'Funtzionalitate honek zure Moodle zerbitzarian sendotasunik ez duten berezko balioak bilatuko ditu, eta sortuko ditu (exekutatu gabe!) berezko balio horiek guztiak modu egokian zehazteko beharrezkoak diren SQL komandoak.

Behin komando horiek sortuta zure SQL interfaze gogokoenean kopiatu eta modu seguruan exekuta ditzakezu (ez ahaztu hori egin aurretik zure datuen segurtasun-kopia bat egitea).

Irmoki gomendatzen da eskuragarri dagoen zure Moodle bertsioaren azken kaleratzea instalatuta izatea sendotasunik gabeko berezko balioak bilatu baino lehen.

Funtzionalitate honek ez du datu-basean inolako ekintzarik egiten (bertatik irakurri baino ez), eta beraz arazorik gabe edozein unetan exekuta daiteke.';
$string['confirmcheckforeignkeys'] = 'Funtzionalitate honek install.xml definizioetan zehaztutako kanpoko gakoen urraketa potentzialen bilaketa egingo du. (Moodle-k une honetan ez du kanpoko gakorik sortzen datu-basean, eta horregatik ager daitezke datu baliogabeak.)

Irmoki gomendatzen da eskuragarri dagoen zure Moodle bertsioaren azken kaleratzea instalatuta izatea kanpoko gakoen urraketa potentzialen bilaketa exekutatu baino lehen.

Funtzionalitate honek ez du datu-basean inolako ekintzarik egiten (bertatik irakurri baino ez), eta beraz arazorik gabe edozein unetan exekuta daiteke.';
$string['confirmcheckindexes'] = 'Funtzionalitate honek falta daitezkeen indizeak bilatuko ditu zure Moodle zerbitzarian, eta sortuko ditu (exekutatu gabe!) dena eguneratuta izateko beharrezkoak diren SQL komandoak.

Behin komando horiek sortuta zure SQL interfaze gogokoenean kopiatu eta modu seguruan exekuta ditzakezu (ez ahaztu hori egin aurretik zure datuen segurtasun-kopia bat egitea).

Irmoki gomendatzen da eskuragarri dagoen zure Moodle bertsioaren azken kaleratzea instalatuta izatea falta diren indizeak bilatu baino lehen.

Funtzionalitate honek ez du datu-basean inolako ekintzarik egiten (bertatik irakurri baino ez), eta beraz arazorik gabe edozein unetan exekuta daiteke.';
$string['confirmcheckoraclesemantics'] = 'Funtzionalitate honek <a href="http://tracker.moodle.org/browse/MDL-29322">BYTE semantika erabiltzen duten Oracle varchar2 zutabeak</a> bilatuko ditu zure Moodle zerbitzarian, eta sortuko ditu (exekutatu gabe!) zutabe guztiek horren ordez CHAR semantika (datu-baseen arteko bateragarritasunerako hobea eta edukien gehienezko luzera handitzen duena) erabil dezaten beharrezkoak diren SQL komandoak.

Behin komando horiek sortuta zure SQL interfaze gogokoenean kopiatu eta modu seguruan exekuta ditzakezu (ez ahaztu hori egin aurretik zure datuen segurtasun-kopia bat egitea).

Irmoki gomendatzen da eskuragarri dagoen zure Moodle bertsioaren azken kaleratzea instalatuta izatea BYTE semantika erabiltzen duten zutabeak bilatu baino lehen.

Funtzionalitate honek ez du datu-basean inolako ekintzarik egiten (bertatik irakurri baino ez), eta beraz arazorik gabe edozein unetan exekuta daiteke.';
$string['confirmdeletefield'] = 'Ziur zaude ondoko eremua ezabatu nahi duzula:';
$string['confirmdeleteindex'] = 'Ziur al zaude ondoko indizea ezabatu nahi duzula:';
$string['confirmdeletekey'] = 'Ziur al zaude ondoko gakoa ezabatu nahi duzula:';
$string['confirmdeletetable'] = 'Ziur zaude ondoko taula ezabatu nahi duzula:';
$string['confirmdeletexmlfile'] = 'Ziur zaude ondoko fitxategia ezabatu nahi duzula:';
$string['confirmrevertchanges'] = 'Ziur al zaude honen gainean egindako aldaketak desegin nahi dituzula:';
$string['create'] = 'Sortu';
$string['createtable'] = 'Sortu taula:';
$string['defaultincorrect'] = 'Berezko balio desegokia';
$string['delete'] = 'Ezabatu';
$string['delete_field'] = 'Ezabatu eremua';
$string['delete_index'] = 'Ezabatu aurkibidea';
$string['delete_key'] = 'Ezabatu gakoa';
$string['delete_table'] = 'Ezabatu taula';
$string['delete_xml_file'] = 'Ezabatu XML fitxategia';
$string['doc'] = 'Dokumentazioa';
$string['docindex'] = 'Dokumentazioaren aurkibidea:';
$string['documentationintro'] = 'Dokumentazio hau automatikoki sortzen da XMLDB  datu-basearen definiziotik. Ingelesez baino ez dago eskura.';
$string['down'] = 'Behera';
$string['duplicate'] = 'Bikoiztu';
$string['duplicatefieldname'] = 'Dagoeneko bada izen hori duen beste eremu bat';
$string['duplicatefieldsused'] = 'Bikoiztutako eremuak erabili dira';
$string['duplicateindexname'] = 'Bikoiztutako aurkibidearen izena';
$string['duplicatekeyname'] = 'Dagoeneko bada izen hori duen beste gako bat';
$string['duplicatetablename'] = 'Dagoeneko bada izen hori duen beste taula bat';
$string['edit'] = 'Editatu';
$string['edit_field'] = 'Editatu eremua';
$string['edit_field_save'] = 'Gorde eremua';
$string['edit_index'] = 'Editatu aurkibidea';
$string['edit_index_save'] = 'Gorde aurkibidea';
$string['edit_key'] = 'Editatu gakoa';
$string['edit_key_save'] = 'Gorde gakoa';
$string['edit_table'] = 'Editatu taula';
$string['edit_table_save'] = 'Gorde taula';
$string['edit_xml_file'] = 'Editatu XML fitxategia';
$string['enumvaluesincorrect'] = 'Enum eremuaren balio desegokiak';
$string['expected'] = 'Espero zena';
$string['extensionrequired'] = 'Sentitzen dugu - ekintza honetarako \'{$a}\' PHP luzapena beharrezkoa da. Mesedez luzapena instalatu ezazu funtzionalitate hau erabili nahi baduzu.';
$string['field'] = 'Eremua';
$string['fieldnameempty'] = 'Eremuaren izena hutsik';
$string['fields'] = 'Eremuak';
$string['fieldsnotintable'] = 'Eremua ez da taulan existitzen';
$string['fieldsusedinindex'] = 'Eremu hau indize gisa erabilitzen da';
$string['fieldsusedinkey'] = 'Eremu hau gako gisa erabiltzen da.';
$string['filemodifiedoutfromeditor'] = 'Kontuz: Fitxategia lokalki aldatu da XMLDB editorea erabiliz. Gordez gero aldaketa lokalak gainidatziko dira.';
$string['filenotwriteable'] = 'Ezin da fitxategia idatzi';
$string['fkunknownfield'] = '{$a->tablename} taulako {$a->keyname} kanpoko gakoak aipatutako {$a->reftable} taulan existitzen ez den {$a->reffield} eremua erakusten du.';
$string['fkunknowntable'] = '{$a->tablename} taulako {$a->keyname} kanpoko gakoak existitzen ez den {$a->reftable} taula erakusten du.';
$string['fkviolationdetails'] = '{$a->tablename} taulan, {$a->numrows} errenkadetatik {$a->keyname} kanpoko gako urratzen duten {$a->numviolations} errenkada daude.';
$string['float2numbernote'] = 'Oharra: Nahiz eta "float" eremuak XMLDBn %100 onartuak izan, horien ordez "number" eremuetara migratzea gomendatzen da.';
$string['floatincorrectdecimals'] = 'Float eremuaren hamartarren kopuru ezegokia';
$string['floatincorrectlength'] = 'Float eremuaren luzera ezegokia';
$string['generate_all_documentation'] = 'Dokumentazio osoa';
$string['generate_documentation'] = 'Dokumentazioa';
$string['gotolastused'] = 'Joan erabilitako azken fitxategira';
$string['incorrectfieldname'] = 'Izen desegokia';
$string['incorrectindexname'] = 'Indizearen izen desegokia';
$string['incorrectkeyname'] = 'Gakoaren izen desegokia';
$string['incorrecttablename'] = 'Taularen izen desegokia';
$string['index'] = 'Indizea';
$string['indexes'] = 'Indizeak';
$string['indexnameempty'] = 'Indizearen izena hutsik dago';
$string['integerincorrectlength'] = 'Integer eremuaren luzera desegokia';
$string['key'] = 'Gakoa';
$string['keynameempty'] = 'Gakoaren izena ezin da hutsik egon';
$string['keys'] = 'Gakoak';
$string['listreservedwords'] = 'Hitz Erreserbatuen Zerrenda<br/>(<a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> eguneratuta mantentzeko erabilia)';
$string['load'] = 'Igo';
$string['main_view'] = 'Ikuspegi nagusia';
$string['masterprimaryuniqueordernomatch'] = 'Zure kanpoko gakoko eremuak erakusten den taularen \'UNIQUE KEY\' gakoan agertzen diren ordena berean zerrendatu behar dira.';
$string['missing'] = 'Falta da';
$string['missingindexes'] = 'Falta diren indizeak atzeman dira';
$string['mustselectonefield'] = 'Eremu bat aukeratu behar duzu horrekin lotutako ekintzak ikusteko!';
$string['mustselectoneindex'] = 'Indize bat aukeratu behar duzu horrekin lotutako ekintzak ikusteko!';
$string['mustselectonekey'] = 'Gako bat aukeratu behar duzu horrekin lotutako ekintzak ikusteko!';
$string['newfield'] = 'Eremu berria';
$string['newindex'] = 'Indize berria';
$string['newkey'] = 'Gako berria';
$string['newtable'] = 'Taula berria';
$string['newtablefrommysql'] = 'Taula berria MySQL-etik';
$string['new_table_from_mysql'] = 'Taula berria MySQL-etik';
$string['nofieldsspecified'] = 'Ez da eremurik zehaztu';
$string['nomasterprimaryuniquefound'] = 'Zure kanpoko gakoak erakusten dituen zutabeak aipatzen den taularen gako nagusian (PRIMARY KEY) edo gako bakar batean (UNIQUE KEY) egon behar dira. Kontuan izan zutabea UNIQUE INDEX batean egotea ez dela nahikoa.';
$string['nomissingindexesfound'] = 'Ez da antzeman falta den indizerik, zure datu-baseak ez du bestelako ekintzarik behar.';
$string['noreffieldsspecified'] = 'Ez da aipatutako eremurik zehaztu';
$string['noreftablespecified'] = 'Ez da aipatutako taula aurkitu';
$string['noviolatedforeignkeysfound'] = 'Ez da urratutako kanpoko gakorik aurkitu';
$string['nowrongdefaultsfound'] = 'Ez da aurkitu sendotasunik gabeko berezko baliorik, zure datu-baseak ez du bestelako ekintzarik behar.';
$string['nowrongintsfound'] = 'Ez da zenbaki oso ezegokirik aurkitu, zure datu-baseak ez du bestelako ekintzarik behar.';
$string['nowrongoraclesemanticsfound'] = 'Ez da BYTE semantika erabiltzen duten Oracle zutaberik aurkitu, zure datu-baseak ez du bestelako ekintzarik behar.';
$string['numberincorrectdecimals'] = 'Hamartarren kopuru ezegokia zenbakizko eremuan';
$string['numberincorrectlength'] = 'Zenbakizko eremuaren luzera ezegokia';
$string['pendingchanges'] = 'Oharra: Fitxategi honi aldaketak egin dizkiozu. Edozein unetan gorde daitezke.';
$string['pendingchangescannotbesaved'] = 'Fitxategi honetan aldaketak daude baina ezin dira gorde! Mesedez egiaztatu web zerbitzariak bai karpeta baita bertako "install.xml" fitxategia ere idazteko baimenak dituela.';
$string['pendingchangescannotbesavedreload'] = 'Fitxategi honetan aldaketak daude baina ezin dira gorde! Mesedez egiaztatu web zerbitzariak bai karpeta baita bertako "install.xml" fitxategiak ere idazteko baimenak dituztela. Orduan orri hau freskatu eta aldaketa horiek gorde ahal izango dituzu.';
$string['pluginname'] = 'XMLDB editorea';
$string['primarykeyonlyallownotnullfields'] = 'Gako nagusiak (primary key) ezin dira hutsik egon';
$string['privacy:metadata'] = 'XMLDB editorea pluginak ez du datu pertsonalik biltzen.';
$string['reserved'] = 'Erreserbatua';
$string['reservedwords'] = 'Hitz erreserbatuak';
$string['revert'] = 'Desegin';
$string['revert_changes'] = 'Desegin aldaketak';
$string['save'] = 'Gorde';
$string['searchresults'] = 'Bilatu emaitzak';
$string['selectaction'] = 'Aukeratu ekintza:';
$string['selectdb'] = 'Aukeratu datu-basea:';
$string['selectfieldkeyindex'] = 'Aukeratu eremua/gakoa/indizea:';
$string['selectonecommand'] = 'Mesedez, aukeratu ekintza bat zerrendatik PHP kodea erakusteko';
$string['selectonefieldkeyindex'] = 'Mesedez, aukeratu zerrendako eremu/gako/indize bat PHP kodea ikusteko.';
$string['selecttable'] = 'Aukeratu taula:';
$string['table'] = 'Taula';
$string['tablenameempty'] = 'Taularen izena ezin da hutsik egon';
$string['tables'] = 'Taulak';
$string['unknownfield'] = 'Eremu ezezagun bat erakusten du';
$string['unknowntable'] = 'Taula ezezagun bat erakusten du';
$string['unload'] = 'Jaitsi';
$string['up'] = 'Gora';
$string['view'] = 'Ikusi';
$string['viewedited'] = 'Ikusi editatutakoa';
$string['vieworiginal'] = 'Ikusi jatorrizkoa';
$string['viewphpcode'] = 'Ikusi PHP kodea';
$string['view_reserved_words'] = 'Ikusi hitz erreserbatuak';
$string['viewsqlcode'] = 'Ikusi SQL kodea';
$string['view_structure_php'] = 'Ikusi PHP egitura';
$string['view_structure_sql'] = 'Ikusi SQL egitura';
$string['view_table_php'] = 'Ikusi PHP taula';
$string['view_table_sql'] = 'Ikusi SQL taula';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Urratutako kanpoko gakoak';
$string['violatedforeignkeysfound'] = 'Urratutako kanpoko gakoak aurkitu dira';
$string['violations'] = 'Urraketak';
$string['wrong'] = 'Okerra';
$string['wrongdefaults'] = 'Berezko balore okerrak aurkitu dira';
$string['wrongints'] = 'Zenbaki-oso okerrak aurkitu dira';
$string['wronglengthforenum'] = 'Enum eremuaren luzera ez da zuzena';
$string['wrongnumberofreffields'] = 'Zenbaki ezegokia erakutsitako eremuan';
$string['wrongoraclesemantics'] = 'Oracle-ko BYTE semantika ezegokia aurkitu da';
$string['wrongreservedwords'] = 'Une honetan erabilitako Hitz Erreserbatuak<br />(kontuan izan taularen izenak ez direla garrantzizkoak $CFG->prefix erabiltzen bada)';
$string['yesmissingindexesfound'] = '<p>Zure datu-basean hainbat indize falta direla atzeman da. Hemen dituzu horien xehetasunak eta arazoa konpontzeko zure SQL interfaz gogokoenean exekutatu behar diren SQL komandoak. Gogoratu aurretik zure datuen segurtasun-kopia bat egitea!</p>
<p>Behin hori egindakoan, funtzio hau berriz ere exekutatzea gomendatzen da indize gehiagorik ez dela falta egiaztatzeko.</p>';
$string['yeswrongdefaultsfound'] = '<p>Zure datu-basean sendotasunik gabeko berezko balore batzuk aurkitu dira. Hemen dituzu horien xehetasunak eta arazoa konpontzeko zure SQL interfaz gogokoenean exekutatu behar diren SQL komandoak. Gogoratu aurretik zure datuen segurtasun-kopia bat egitea!</p>
<p>Behin hori egindakoan, funtzio hau berriz ere exekutatzea gomendatzen da arazoak sortzen duen berezko beste balorerik ez dagoela ziurtatzeko.</p>';
$string['yeswrongintsfound'] = '<p>Zure datu-basean hainbat integer oker aurkitu dira. Hemen dituzu horien xehetasunak eta arazoa konpontzeko zure SQL interfaz gogokoenean exekutatu behar diren SQL komandoak. Gogoratu aurretik zure datuen segurtasun-kopia bat egitea!</p>
<p>Behin hori egindakoan, funtzio hau berriz ere exekutatzea gomendatzen da beste zenbaki oso okerrik ez dagoela ziurtatzeko.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Zure datu-basean BYTE semantika erabiltzen duten Oracle zutabeak aurkitu dira. Hemen dituzu horien zehaztasunak eta sortzeko zure SQL interfaz gogokoenean exekutatu behar diren SQL komandoak. Gogoratu aurretik zure datuen segurtasun-kopia bat egitea!</p>
<p>Behin hori egindakoan, funtzio hau berriz ere exekutatzea gomendatzen da semantika ezegoki gehiago ez dagoela ziurtatzeko.</p>';
