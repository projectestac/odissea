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
 * Strings for component 'plugin', language 'eu', version '4.4'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ekintzak';
$string['availability'] = 'Eskuragarritasuna';
$string['cancelinstallall'] = 'Utzi bertan behera instalazio berriak ({$a})';
$string['cancelinstallhead'] = 'Plugin-instalazioa bertan behera uzten';
$string['cancelinstallinfo'] = 'Hurrengo pluginak oraindik ez daude guztiz instalatuta eta beraz euren instalazioa atzera bota daiteke. Horretarako, gehigarriaren karpeta zerbitzaritik orain ezabatu behar da. Ziurtatu ezazu hori dela egin nahi duzuna istripuzko datu-galera ekiditeko (zure kode-aldaketak esaterako).';
$string['cancelinstallinfodir'] = 'Ezabatzeko karpeta: {$a}';
$string['cancelinstallone'] = 'Utzi bertan behera instalazio hau';
$string['cancelupgradeall'] = 'Utzi bertan behera eguneraketak ({$a})';
$string['cancelupgradehead'] = 'Pluginen aurreko bertsioak berreskuratzen';
$string['cancelupgradeone'] = 'Utzi bertan behera eguneraketa hau';
$string['checkforupdates'] = 'Egiaztatu zein eguneraketa dagoen eskuragarri';
$string['checkforupdateslast'] = 'Egindako azken egiaztatzea: {$a}';
$string['dependencyavailable'] = 'Eskuragarri';
$string['dependencyfails'] = 'Huts egin du';
$string['dependencyinstall'] = 'Instalatu';
$string['dependencyinstallhead'] = 'Instalatu falta diren mendekotasunak';
$string['dependencyinstallmissing'] = 'Instalatu falta diren mendekotasunak ({$a})';
$string['dependencymissing'] = 'Falta da';
$string['dependencyunavailable'] = 'Ez dago eskuragarri';
$string['dependencyupload'] = 'Igo';
$string['dependencyuploadmissing'] = 'Igo ZIP fitxategiak';
$string['detectedmisplacedplugin'] = '"{$a->component}" plugina kokapen ezegokian "{$a->current}" instalatu da. Hemen behar luke: "{$a->expected}"';
$string['displayname'] = 'Pluginaren izena';
$string['err_response_curl'] = 'Ezin izan da eguneraketarik eskuratu - espero ez zen cURL errorea.';
$string['err_response_format_version'] = 'Erantzunaren formatuaren ezusteko bertsioa. Mesedez saiatu eskuragarri dauden eguneraketak berriz egiaztatzen.';
$string['err_response_http_code'] = 'Ezin izan da eskuragarri dauden eguneraketen daturik eskuratu - ezusteko HTTP erantzun-kodea-';
$string['filterall'] = 'Erakutsi guztiak';
$string['filtercontribonly'] = 'Erakutsi plugin gehigarriak soilik';
$string['filterupdatesonly'] = 'Erakutsi eguneratzeko modukoak soilik';
$string['incompatibleversion'] = 'Bateragarria ez den Moodle bertsioa: {$a}';
$string['isenabled'] = 'Gaituta?';
$string['misdepinfoplugin'] = 'Pluginaren informazioa';
$string['misdepinfoversion'] = 'Bertsioaren informazioa';
$string['misdepsavail'] = 'Falta diren menpekotasunak eskuragarri';
$string['misdepsunavail'] = 'Falta diren menpekotasunak ez daude eskuragarri';
$string['misdepsunavaillist'] = 'Ez da aurkitu mendekotasun baldintzak betetzen dituen bertsiorik: {$a}.';
$string['misdepsunknownlist'] = 'Ez dago pluginen direktorioan: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Honelako pluginak ez daude instalatuta';
$string['notdownloadable'] = 'Ezin da paketea jaitsi';
$string['notdownloadable_help'] = 'Eguneraketa duen ZIP paketea ezin da automatikoki jaitsi.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Oharrak';
$string['notsupported'] = 'Plugina agian ez da bateragarria Moodleko bertsioarekin {$a}';
$string['notwritable'] = 'Pluginaren fitxategiak ezin dira idatzi';
$string['notwritable_help'] = 'Web-zerbitzariko pluginetako fitxategiak ezin dira idatzi. Web-zerbitzariaren prozesuak pluginaren karpetan eta bere edukietan idazteko baimenak izan behar ditu. Baliteke plugin mota horretako jatorrizko karpetan ere idazteko baimenak behar izatea.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Plugin guztiak';
$string['overviewext'] = 'Plugin gehigarriak';
$string['overviewupdatable'] = 'Eskura dauden eguneraketak';
$string['packagesdebug'] = 'Arazketa irteera gaitu da';
$string['packagesdownloading'] = '{$a} jaisten';
$string['packagesextracting'] = '{$a} erauzten';
$string['packagesvalidating'] = '{$a} balioztatzen';
$string['packagesvalidatingfailed'] = 'Instalazioa bertan behera utzi da balioztatze-errore bat dela eta';
$string['packagesvalidatingok'] = 'Balioztatze arrakastatsua, instalazioak aurrera egin dezake';
$string['plugincheckall'] = 'Plugin guztiak';
$string['plugincheckattention'] = 'Zure arreta eskatzen duten pluginak';
$string['pluginchecknone'] = 'Ez dago zure arreta eskatzen duen pluginik';
$string['pluginchecknotice'] = 'Orri honek eguneraketa egin bitartean zure arreta eska dezaketen pluginak erakusten ditu, hala nola instalatuko diren pluginak, eguneratuko direnak, falta direnak... Eguneratu daitezkeen pluginak ere erakusten dira. Pluginen eguneraketak eskuragarri dauden konprobatzea gomendatzen da, eta halakorik egotekotan iturri-kodea eguneratzea gomendatzen da Moodle eguneratzen jarraitu aurretik.';
$string['plugindisable'] = 'Desgaitu';
$string['plugindisabled'] = 'Desgaituta';
$string['pluginenable'] = 'Gaitu';
$string['pluginenabled'] = 'Gaituta';
$string['release'] = 'Bertsioa';
$string['requiredby'] = 'Ondokoak behar du:  {$a}';
$string['requires'] = 'Behar du';
$string['rootdir'] = 'Direktorioa';
$string['settings'] = 'Ezarpenak';
$string['source'] = 'Iturburua';
$string['sourceext'] = 'Gehigarria';
$string['sourcestd'] = 'Estandarra';
$string['status'] = 'Egoera';
$string['status_delete'] = 'Ezabatu egingo da';
$string['status_downgrade'] = 'Dagoeneko goragoko bertsioa instalatuta dago!';
$string['status_missing'] = 'Diskotik falta da';
$string['status_new'] = 'Instalatu egingo da';
$string['status_nodb'] = 'Ez dago datu-baserik';
$string['status_upgrade'] = 'Eguneratu egingo da';
$string['status_uptodate'] = 'Instalatuta';
$string['supportedconversions'] = 'Onartutako dokumentu-bihurketak';
$string['supportedmoodleversions'] = 'Onartutako Moodle bertsioak';
$string['systemname'] = 'Identifikatzailea';
$string['type_antivirus'] = 'Antiburus-plugina';
$string['type_antivirus_plural'] = 'Antiburus-pluginak';
$string['type_auth'] = 'Autentifikazio-metodoa';
$string['type_auth_plural'] = 'Autentifikazio-pluginak';
$string['type_availability'] = 'Eskuragarritasun-murrizketa';
$string['type_availability_plural'] = 'Eskuragarritasun-murrizketak';
$string['type_block'] = 'Blokea';
$string['type_block_plural'] = 'Blokeak';
$string['type_cachelock'] = 'Cache-blokeoaren kudeatzailea';
$string['type_cachelock_plural'] = 'Cache-blokeoaren kudeatzaileak';
$string['type_cachestore'] = 'Cache-biltegia';
$string['type_cachestore_plural'] = 'Cache-biltegiak';
$string['type_calendartype'] = 'Egutegi mota';
$string['type_calendartype_plural'] = 'Egutegi motak';
$string['type_communication'] = 'Komunikazio hornitzailea';
$string['type_communication_plural'] = 'Komunikazio hornitzaileak';
$string['type_contentbank'] = 'Eduki-bankua';
$string['type_contentbank_plural'] = 'Eduki-bankuko pluginak';
$string['type_contenttype'] = 'Eduki-bankua';
$string['type_contenttype_plural'] = 'Eduki-bankuko pluginak';
$string['type_coursereport'] = 'Ikastaroaren txostena';
$string['type_coursereport_plural'] = 'Ikastaroaren txostenak';
$string['type_customfield'] = 'Eremu pertsonalizatua';
$string['type_customfield_plural'] = 'Eremu pertsonalizatuak';
$string['type_dataformat'] = 'Datuen formatua';
$string['type_dataformat_plural'] = 'Datuen formatuak';
$string['type_editor'] = 'Editorea';
$string['type_editor_plural'] = 'Editoreak';
$string['type_enrol'] = 'Matrikulazio-metodoa';
$string['type_enrol_plural'] = 'Matrikulazio-metodoak';
$string['type_fileconverter'] = 'Dokumentu-bihurgailua';
$string['type_fileconverter_plural'] = 'Dokumentu-bihurgailuak';
$string['type_fileconvertermanage'] = 'Kudeatu dokumentu-bihurgailuak';
$string['type_filter'] = 'Testu-iragazkia';
$string['type_filter_plural'] = 'Testu-iragazkiak';
$string['type_format'] = 'Ikastaro-formatua';
$string['type_format_plural'] = 'Ikastaro-formatuak';
$string['type_gradeexport'] = 'Kalifikazioak esportatzeko metodoa';
$string['type_gradeexport_plural'] = 'Kalifikazioak esportatzeko metodoak';
$string['type_gradeimport'] = 'Kalifikazioak inportatzeko metodoa';
$string['type_gradeimport_plural'] = 'Kalifikazioak inportatzeko metodoak';
$string['type_gradereport'] = 'Kalifikazio-liburuaren txostena';
$string['type_gradereport_plural'] = 'Kalifikazio-liburuaren txostenak';
$string['type_gradingform'] = 'Kalifikazio-metodo aurreratuak';
$string['type_gradingform_plural'] = 'Kalifikazio-metodo aurreratuak';
$string['type_h5plib'] = 'H5P testuingurua';
$string['type_h5plib_plural'] = 'H5P testuinguruak';
$string['type_local'] = 'Plugin lokala';
$string['type_local_plural'] = 'Plugin lokalak';
$string['type_media'] = 'Erreproduzigailua';
$string['type_media_plural'] = 'Erreproduzigailuak';
$string['type_message'] = 'Jakinarazpen-gehigarria';
$string['type_message_plural'] = 'Jakinarazpen-gehigarria';
$string['type_mlbackend'] = 'Ikaste automatikoaren backend-a';
$string['type_mlbackend_plural'] = 'Ikaste automatikoaren backend-ak';
$string['type_mnetservice'] = 'MNet zerbitzua';
$string['type_mnetservice_plural'] = 'MNet zerbitzuak';
$string['type_mod'] = 'Jarduera-modulua';
$string['type_mod_plural'] = 'Jarduera-moduluak';
$string['type_paygw'] = 'Ordainketa ataria';
$string['type_paygw_plural'] = 'Ordainketa atariak';
$string['type_paygwmanage'] = 'Kudeatu ordainketa atariak';
$string['type_plagiarism'] = 'Plagiorako plugina';
$string['type_plagiarism_plural'] = 'Plagiorako pluginak';
$string['type_portfolio'] = 'Portfolioa';
$string['type_portfolio_plural'] = 'Portfolioak';
$string['type_profilefield'] = 'Profilerako eremu mota';
$string['type_profilefield_plural'] = 'Profilerako eremu motak';
$string['type_qbank'] = 'Galdera-bankuko plugina';
$string['type_qbank_plural'] = 'Galdera-bankuko pluginak';
$string['type_qbehaviour'] = 'Galderen jokaera';
$string['type_qbehaviour_plural'] = 'Galderen jokaerak';
$string['type_qformat'] = 'Galdera inportatzeko/esportatzeko formatua';
$string['type_qformat_plural'] = 'Galdera inportatzeko/esportatzeko formatuak';
$string['type_qtype'] = 'Galdera mota';
$string['type_qtype_plural'] = 'Galdera motak';
$string['type_report'] = 'Guneko txostena';
$string['type_report_plural'] = 'Txostenak';
$string['type_repository'] = 'Biltegia';
$string['type_repository_plural'] = 'Biltegiak';
$string['type_search'] = 'Bilaketa-motorra';
$string['type_search_plural'] = 'Bilaketa-motorrak';
$string['type_theme'] = 'Azala';
$string['type_theme_plural'] = 'Azalak';
$string['type_tool'] = 'Kudeaketa-tresna';
$string['type_tool_plural'] = 'Kudeaketa-tresnak';
$string['type_webservice'] = 'Web-zerbitzuen protokoloa';
$string['type_webservice_plural'] = 'Web-zerbitzuen protokoloak';
$string['uninstall'] = 'Desinstalatu';
$string['uninstallconfirm'] = '<em>{$a->name}</em> plugina desinstalatzera zoaz. Honek pluginarekin lotutako guztia datu-basetik ezabatuko du, konfigurazioa, erregistroak, pluginak kudeatutako erabiltzaile-fitxategiak,... barne. Honek ez du atzera bueltarik eta Moodlek berak ez du segurtasun-kopiarik sortzen. ZIUR zaude jarraitu nahi duzula?';
$string['uninstalldelete'] = '<em>{$a->name}</em> pluginarekin lotutako datu guztiak datu-basetik ezabatu dira. Plugina berriz instalatzea ekiditeko, bere <em>{$a->rootdir}</em> karpeta zerbitzaritik eskuz ezabatu behar da orain. Moodlek berak ezin du karpeta  ezabatu idazketa baimenak direla-eta.';
$string['uninstalldeleteconfirm'] = '<em>{$a->name}</em> pluginarekin lotutako datu guztiak datu-basetik ezabatu dira. Plugina berriz instalatzea ekiditeko, bere <em>{$a->rootdir}</em> karpeta zerbitzaritik eskuz ezabatu behar da. Pluginaren karpeta orain ezabatu nahi duzu?';
$string['uninstalldeleteconfirmexternal'] = 'Badirudi pluginaren oraingo bertsioa ({$a}) iturburu kodea kudeatzeko sistema batetik aterata lortu dela. Pluginaren karpeta ezabatzen baduzu kodeari egindako aldaketa lokal garrantzitsuak galdu ditzakezu. Mesedez aurrera egin baino lehen ziurtatu benetan pluginaren karpeta ezabatu nahi duzula.';
$string['uninstallextraconfirmblock'] = 'Bloke honen {$a->instances} instantzia dago';
$string['uninstallextraconfirmenrol'] = '{$a->enrolments} erabiltzaile matrikulatuta daude';
$string['uninstallextraconfirmmod'] = 'Modulu honen {$a->instances} instantzia dago {$a->courses} ikastarotan.';
$string['uninstalling'] = '{$a->name} desinstalatzen';
$string['updateavailable'] = 'Bada bertsio berri bat eskuragarri {$a}!';
$string['updateavailable_moreinfo'] = 'Informazio gehiago...';
$string['updateavailable_release'] = 'Bertsioa: {$a}';
$string['updatepluginconfirm'] = 'Pluginaren eguneraketaren berrespena';
$string['updatepluginconfirmexternal'] = 'Badirudi pluginaren oraingo bertsioa ({$a}) iturburu kodea kudeatzeko sistema batetik aterata lortu dela. Eguneraketa hau instalatzen baduzu aurrerantzean ezingo duzu iturburu kodea kudeatzeko sistematik pluginaren eguneraketarik jaso. Mesedez aurrera egin baino lehen ziurtatu benetan plugina eguneratu nahi duzula.';
$string['updatepluginconfirminfo'] = '<strong>{$a->name}</strong> pluginaren bertsio berri bat instalatzera zoaz. {$a->version} bertsioa duen zip pakete bat jaitsiko da <a href="{$a->url}">{$a->url}</a> helbidetik eta zure Moodle instalazioan erauziko da zure instalazioa eguneratu ahal dezazun.';
$string['updatepluginconfirmwarning'] = 'Mesedez kontuan izan Moodlek ez duela automatikoki zure datu-basearen segurtasun-kopiarik egiten eguneratzea egin aurretik. Irmoki gomendatzen dizugu oraintxe bertan segurtasun-kopia oso bat egitea, kode berriak gunea ez erabilgarri utzi edo datu-basea kaltetuko lukeen arazo arraroren bat izango balu gainditzeko aukera izan dezazun. Aurrera arriskuaren jabe izanda egin ezazu.';
$string['validationmsg_componentmatch'] = 'Osagaiaren izen osoa';
$string['validationmsg_componentmismatchname'] = 'Pluginaren izena ez dator bat';
$string['validationmsg_componentmismatchname_help'] = 'ZIP pakete batzuek, GitHub bidez sortutakoak adibidez, jatorrizko direktorioa ezegokia izan dezakete. Jatorrizko direktorioaren izena konpondu behar duzu pluginaren izenarekin bat etorri dadin.';
$string['validationmsg_componentmismatchname_info'] = 'Pluginak bere izena \'{$a}\' dela dio baina ez dator bat bere jatorrizko direktorioaren izenarekin.';
$string['validationmsg_componentmismatchtype'] = 'Plugin mota ez dator bat';
$string['validationmsg_componentmismatchtype_info'] = '\'{$a->expected}\' espero zen baina pluginak bere mota \'{$a->found}\' dela dio.';
$string['validationmsg_filenotexists'] = 'Ez da erauzitako fitxategia aurkitu';
$string['validationmsg_filesnumber'] = 'Paketean ez dira aurkitu behar ziren fitxategi guztiak';
$string['validationmsg_filestatus'] = 'Ezin izan dira fitxategi guztiak erauzi';
$string['validationmsg_filestatus_info'] = '\'{$a->status}\' errorea gertatu da {$a->file} fitxategia erauztean.';
$string['validationmsg_foundlangfile'] = 'Bilatutako hizkuntza-fitxategia';
$string['validationmsg_maturity'] = 'Adierazitako kode-heldutasuna';
$string['validationmsg_maturity_help'] = 'Pluginak bere heldutasun-maila adierazi dezake. Arduradunak plugina egonkorra dela uste badu, adierazitako heldutasun-maila MATURITY_STABLE izango da. Beste heldutasun-maila guztiak (hala nola alpha edo beta) ezegonkortzat hartu beharko lirateke eta abisu bat erakutsiko da.';
$string['validationmsg_missingcomponent'] = 'Pluginak ez du bere osagaiaren izenik adierazten';
$string['validationmsg_missingcomponent_help'] = 'Plugin guztiek bere osagaiaren izen osoa adierazi behar dute `$plugin->component` adierazpenaren bidez version.php fitxategian.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Ingelesezko hizkuntza fitxategiaren izena ez dator bat';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Emandako plugin motak ez du espero zen {$a} ingelesezko hizkuntza fitxategia.';
$string['validationmsg_missinglangenfile'] = 'Ez da ingelesaren hizkuntza-fitxategia aurkitu';
$string['validationmsg_missinglangenfolder'] = 'Ez da ingelesaren hizkuntza-karpeta aurkitu';
$string['validationmsg_missingversion'] = 'Pluginak ez du bertsioa adierazten';
$string['validationmsg_missingversionphp'] = 'version.php fitxategia ez da aurkitu';
$string['validationmsg_multiplelangenfiles'] = 'Ingelesaren fitxategi batzuk aurkitu dira';
$string['validationmsg_onedir'] = 'ZIP paketearen egitura ez da baliozkoa.';
$string['validationmsg_onedir_help'] = 'ZIP paketeak pluginaren kode guztia duen jatorrizko direktorioa bakarra izan behar du. Jatorrizko direktorio horren izena pluginaren izenarekin bat etorri behar da.';
$string['validationmsg_pathwritable'] = 'Idazteko sarbidearen egiaztapena';
$string['validationmsg_pluginversion'] = 'Pluginaren bertsioa';
$string['validationmsg_pluginversiontoolow'] = 'Plugin honen bertsio berriago bat instalatuta dago jada';
$string['validationmsg_release'] = 'Pluginaren bertsioa';
$string['validationmsg_requiresmoodle'] = 'Behar den Moodle bertsioa';
$string['validationmsg_rootdir'] = 'Instalatuko den pluginaren izena';
$string['validationmsg_rootdir_help'] = 'ZIP paketearen jatorrizko direktorioaren izena instalatuko den pluginaren izenarekin bat etorri behar da. Izena ondo ez badago, ZIP barruko jatorrizko direktorioaren izena aldatu beharko duzu gehigarria instalatu baino lehen.';
$string['validationmsg_rootdirinvalid'] = 'Pluginaren izen baliogabea';
$string['validationmsg_rootdirinvalid_help'] = 'ZIP paketearen jatorrizko direktorioaren izenak sintaxi formalaren eskakizunak urratzen ditu. ZIP pakete batzuek, GitHub bidez sortutakoak adibidez, jatorrizko direktorioaren izen ezegokia izan dezakete. Jatorrizko direktorioaren izena konpondu behar duzu pluginaren izenarekin bat etor dadin.';
$string['validationmsg_targetexists'] = 'Helburuko kokapena dagoeneko existitzen da eta ezabatuko da';
$string['validationmsg_targetexists_help'] = 'Pluginaren direktorioa dagoeneko existitzen da eta paketearen edukiekin ordezkatua izango da.';
$string['validationmsg_targetnotdir'] = 'Helburuko kokapena fitxategi batekin okupatuta dago';
$string['validationmsg_unknowntype'] = 'Plugin mota ezezaguna';
$string['validationmsg_versionphpsyntax'] = 'Onartu gabeko sintaxia antzeman da version.php fitxategian';
$string['validationmsglevel_debug'] = 'Araztu';
$string['validationmsglevel_error'] = 'Errorea';
$string['validationmsglevel_info'] = 'Ados';
$string['validationmsglevel_warning'] = 'Oharra';
$string['version'] = 'Bertsioa';
$string['versiondb'] = 'Oraingo bertsioa';
$string['versiondisk'] = 'Bertsio berria';
