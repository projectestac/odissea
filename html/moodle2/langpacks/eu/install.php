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
 * Strings for component 'install', language 'eu', branch 'MOODLE_31_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Kudeaketarako zehaztu den direktorioa ez da zuzena';
$string['admindirname'] = 'Admin direktorioa';
$string['admindirsetting'] = 'Web ostalari gutxi batzuk /admin URL berezi gisa erabiltzen dute kontrol-panel edo antzekora sarbidea emateko. Zoritxarrez, honek Moodle-ren kudeaketa-orrien berezko kokapenarekin gatazka sortzen du. Hau konpondu dezakezu zure instalazioko admin karpeta berrizendatuz, eta izen berria hemen sartuta. Adibidez <em>moodleadmin</em>. Honek Moodle-ko admin estekak konponduko du.';
$string['admindirsettinghead'] = 'Ezarri Admin direktorioa...';
$string['admindirsettingsub'] = 'Web ostalari gutxi batzuk /admin URL berezi gisa erabiltzen dute kontrol-panel edo antzekora sarbidea emateko. Zoritxarrez, honek Moodle-ren kudeaketa-orrien berezko kokapenarekin gatazka sortzen du. Hau konpondu dezakezu zure instalazioko admin karpeta berrizendatuz, eta izen berria hemen sartuta. Adibidez <em>moodleadmin</em>. Honek Moodle-ko admin estekak konponduko du.';
$string['availablelangs'] = 'Hizkuntza-pakete eskuragarriak';
$string['caution'] = 'Kontuz';
$string['chooselanguage'] = 'Aukeratu hizkuntza bat';
$string['chooselanguagehead'] = 'Aukeratu hizkuntza bat';
$string['chooselanguagesub'] = 'Mesedez, aukeratu instalaziorako hizkuntza bat. Hizkuntza hori erabiliko da gunearen berezko hizkuntza gisa, baina aurrerago alda daiteke.';
$string['cliadminemail'] = 'Kudeatzailearen e-posta helbide berria';
$string['cliadminpassword'] = 'Kudeatzailearen pasahitz berria';
$string['cliadminusername'] = 'Kudeatzaile kontuaren erabiltzaile-izena';
$string['clialreadyconfigured'] = 'Dagoeneko badago config.php konfigurazio-fitxategia. Mesedez erabili admin/cli/install_database.php Moodle gune honetan instalatu nahi baduzu.';
$string['clialreadyinstalled'] = 'Dagoeneko badago config.php konfigurazio-fitxategia. Mesedez erabili admin/cli/upgrade.php zure Moodle gunea eguneratu nahi baduzu.';
$string['cliinstallfinished'] = 'Instalazioa ondo burutu da.';
$string['cliinstallheader'] = 'Moodle {$a} komando-lerro bidezko instalaziorako programa';
$string['climustagreelicense'] = 'Modu ez-interaktiboan lizentzia onartu behar duzu --agree-license aukera zehaztuz';
$string['cliskipdatabase'] = 'Alde batera uzten datu-basearen instalazioa.';
$string['clitablesexist'] = 'Datu-base taulak dagoeneko existitzen dira, CLI instalazioak ezin du jarraitu.';
$string['compatibilitysettings'] = 'Zure PHP ezarpenak egiaztatzen...';
$string['compatibilitysettingshead'] = 'Zure PHP ezarpenak egiaztatzen...';
$string['compatibilitysettingssub'] = 'Zure zerbitzariak baldintza hauek guztiak bete beharko ditu Moodle bertan ondo funtzionatzeko.';
$string['configfilenotwritten'] = 'Instalazioaren scriptak ezin izan du aukeratutako zehaztapen guztiak beteko dituen config.php fitxategia automatikoki sortu, ziuraski Moodle direktorioan idazteko baimenik ez izateagatik. Hurrengo kode hau config.php izeneko fitxategi batean kopiatu eta Moodle-ren erroko direktorioan itsatsi dezakezu.';
$string['configfilewritten'] = 'config.php ondo sortu da';
$string['configurationcomplete'] = 'Ezarpenak osatu dira';
$string['configurationcompletehead'] = 'Ezarpenak osatu dira';
$string['configurationcompletesub'] = 'Moodle zure konfigurazioa instalazioaren erroan kokatutatako fitxategi batean gordetzen saiatu da.';
$string['database'] = 'Datu-basea';
$string['databasehead'] = 'Datu-basearen ezarpenak';
$string['databasehost'] = 'Datu-basearen ostalaria';
$string['databasename'] = 'Datu-basearen izena';
$string['databasepass'] = 'Datu-basearen pasahitza';
$string['databaseport'] = 'Datu-basearen ataka';
$string['databasesocket'] = 'Unix socket-a';
$string['databasetypehead'] = 'Aukeratu datu-base kontrolatzailea';
$string['databasetypesub'] = 'Moodle-k hainbat motatako datu-base zerbitzariak onartzen ditu. Mesedez, jarri harremanetan zerbitzariaren kudeatzailearekin ez badakizu zein mota erabili.';
$string['databaseuser'] = 'Datu-basearen erabiltzailea';
$string['dataroot'] = 'Datuen karpeta';
$string['datarooterror'] = '\'Datuen karpeta\' ezin izan da sortu edo aurkitu. Adierazi zuzen bidea edo karpeta eskuz sortu.';
$string['datarootpermission'] = 'Datu-direktorioen baimena';
$string['datarootpublicerror'] = 'Zehaztutako \'Datu-direktoriora\' web bidez eskuragarri dago, beste direktorio bat erabili behar duzu.';
$string['dbconnectionerror'] = 'Ezin izan da zehaztutako datu-basearekin konektatu. Mesedez, datu-basearen ezarpenak egiaztatu.';
$string['dbcreationerror'] = 'Errorea datu-basea sortzean. Emandako ezarpenekin ezin izan da emandako izena duen datu-basea sortu.';
$string['dbhost'] = 'Ostalariaren zerbitzaria';
$string['dbpass'] = 'Pasahitza';
$string['dbport'] = 'Ataka';
$string['dbprefix'] = 'Taulen aurrizkia';
$string['dbtype'] = 'Mota';
$string['directorysettings'] = '<p>Mesedez egiaztatu zure Moodle instalazioaren kokapenak.</p>

<p><b>Web helbidea:</b>
Zehaztu Moodle-ra sartzeko erabiliko den web helbide osoa.
Zure webgunera URL ezberdinetatik sartzea badago, zure ikasleek normalean erabiliko dutena idatzi. Azken barra ez jarri.</p>

<p><b>Moodle karpeta:</b>
Zehaztu instalazio honen bide osoa.
Maiuskulak eta minuskulak ondo daudela ziurtatu.</p>

<p><b>Datuen karpeta:</b>
Moodle-k igotako fitxategiak gordeko ditueneko tokia behar duzu. Karpeta horretan web zerbitzariko erabiltzaileek irakurri eta IDATZI ahal izango dute (normalean \'nobody\' edo \'apache\'), baina ez da web-etik zuzeneko sarbidea egon behar. Ez bada existitzen instalazioak sortzeko ahalegina egingo du.</p>';
$string['directorysettingshead'] = 'Mesedez, baieztatu zure instalazioaren kokapenak';
$string['directorysettingssub'] = '<b>Web helbidea:</b>
Zehaztu Moodle-ra sartzeko erabiliko den web helbide osoa.
Zure webgunera URL ezberdinetatik sartzea badago, zure ikasleek normalean erabiliko dutena idatzi. Azken barra ez jarri.
<br />
<br />
<b>b>Moodle karpeta:</b>
Zehaztu instalazio honen bide osoa.
Maiuskulak eta minuskulak ondo daudela ziurtatu.
<br />
<br />
<b>Datuen karpeta:</b>
Moodle-k igotako fitxategiak gordeko ditueneko tokia behar duzu. Karpeta horretan web zerbitzariko erabiltzaileek irakurri eta IDATZI ahal izango dute (normalean \'nobody\' edo \'apache\'), baina ez da web-etik zuzeneko sarbidea egon behar. Ez bada existitzen instalazioak sortzeko ahalegina egingo du.';
$string['dirroot'] = 'Moodle direktorioa';
$string['dirrooterror'] = '\'Moodle karpeta\' ezarpena zuzena ez dela dirudi - bertan ezin izan da Moodle-ren instalaziorik aurkitu. Jatorrizko balorea berrezarri da.';
$string['download'] = 'Jaitsi';
$string['downloadlanguagebutton'] = 'Jaitsi "{$a}" hizkuntza-paketea';
$string['downloadlanguagehead'] = 'Jaitsi hizkuntza-paketea';
$string['downloadlanguagenotneeded'] = 'Instalazio-prozesuarekin lehenetsitako hizkuntzaz jarraitu dezakezu, "{$a}".';
$string['downloadlanguagesub'] = 'Orain zure hizkuntza-paketea jaisteko eta hizkuntza horretan instalazioarekin jarraitzeko aukera daukazu.<br /><br />Ezin bada hizkuntza-paketea deskargatu, prozesuak ingelesez jarraituko luke. (Instalazioa burututakoan, beste hizkuntza gehigarriak jaitsi eta instalatu ahal izango dituzu).';
$string['doyouagree'] = 'Ados al zaude? (bai/ez):';
$string['environmenthead'] = 'Zure ingurunea egiaztatzen...';
$string['environmentsub'] = 'Zure zerbitzariaren osagai ezberdinak sistemaren betebeharrekin bat datozen egiaztatzen ari gara';
$string['environmentsub2'] = 'Moodle-ko bertsio bakoitzak PHPko gutxieneko bertsioa eta derrigorrez instalatu beharreko PHP luzapen batzuk ditu. Ingurunearen azterketa oso bat egiten da instalazioa eta eguneraketa bakoitza egin aurretik. Mesedez, jarri harremanetan zerbitzariaren kudeatzailearekin ez badakizu bertsio berria edo PHP luzapenak nola instalatu.';
$string['errorsinenvironment'] = 'Huts egin du ingurunearen egiaztatzeak!';
$string['fail'] = 'Errorea';
$string['fileuploads'] = 'Fitxategien igoera';
$string['fileuploadserror'] = 'Aktibatuta egon behar du';
$string['fileuploadshelp'] = '<p>Zure zerbitzarian fitxategien igoera aktibatuta ez dagoela dirudi.</p>

<p>Moodle oraindik instala daiteke, baina ezingo duzu fitxategirik,
ezta erabiltzaileen irudirik ere, ikastaroetara igo.</p>

<p>Fitxategien igoera ahalbidetzeko, zuk (edo sistemaren kudeatzaileak)
jatorrizko php.ini fitxategia editatu eta <b>file_uploads</b> ezarpena
\'1\'era aldatu behar duzu.</p>';
$string['inputdatadirectory'] = 'Datuen karpeta:';
$string['inputwebadress'] = 'Web helbidea:';
$string['inputwebdirectory'] = 'Moodle direktorioa:';
$string['installation'] = 'Instalazioa';
$string['langdownloaderror'] = 'Zoritxarrez "{$a}" hizkuntza ezin izan da jaitsi. Instalazio-prozesuak ingelesez jarraituko du.';
$string['langdownloadok'] = '"{$a}" hizkuntza zuzen instalatu da. Instalazio-prozesuak hizkuntza horretan jarraituko du.';
$string['memorylimit'] = 'Memoriaren muga';
$string['memorylimiterror'] = 'PHP memoriaren muga baxuegia da... Beranduago arazoak izan ditzakezu.';
$string['memorylimithelp'] = '<p>Zure zerbitzarian PHP memoria-muga {$a} da une honetan.</p>

<p>Aurrerago honek Moodle-ri arazoak sor diezaizkioke,
bereziki modulu edo/eta erabiltzaile asko badituzu.</p>

<p>PHP memoria-muga ahal bezain altu konfiguratzea aholkatzen dizugu, ad. 40M.
Hori egiteko modu asko daude:</p>
<ol>
<li>Ahal baduzu, PHP <i>--enable-memory-limit</i>-ekin berriz konpilatu.
Horrek Moodle-k berak memoria-muga ezartzea ahalbidetzen du.</li>
<li>php.ini fitxategirako sarbidea baduzu,<b>memory_limit</b> ezarpena alda dezakezu
40Mra, adibidez. Sarbiderik ez baduzu, zure administratzaileari egin dezala eska diezaiokezu.</li>
<li>PHP zerbitzari batzuetan Moodle-ren direktorioan beheko lerro hau daukan .htaccess fitxategia sor dezakezu:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Hala ere, zerbitzari batzuetan horrek PHP orri <b>guztiek</b> ez funtzionatzea ekar dezake
(orriak ikustean erroreak ere ikusiko dituzu). Kasu horretan, .htaccess fitxategia ezabatu beharko duzu.</p></li>
</ol>';
$string['mssqlextensionisnotpresentinphp'] = 'PHP ez da ondo konfiguratu MSSQL luzapenaren bidez SQL*Server-ekin komunikatzeko. Mesedez konprobatu zure php.ini fitxategia edo PHP berriz konpilatu.';
$string['mysqliextensionisnotpresentinphp'] = 'PHP ez da ondo konfiguratu MySQLi luzapenaren bidez MySQL-rekin komunikatzeko. Mesedez konprobatu zure php.ini fitxategia edo PHP berriz konpilatu.';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemssql'] = 'SQL*Server FreeTDS (native/mssql)';
$string['nativemssqlhelp'] = 'Orain Moodle-ko datuak gordeko diren datu-basea konfiguratu behar duzu.
Datu-base hau lehendik sortuta egon behar du, baita sarbidea eta pasahitza dituen erabiltzaile bat ere. Taulen aurrizkia derrigorrezkoa da.';
$string['nativemysqli'] = 'Improved MySQL (native/mysqli)';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Orain Moodle-ko datuak gordeko diren datu-basea konfiguratu behar duzu.
Datu-base hau lehendik sortuta egon behar du, baita sarbidea eta pasahitza dituen erabiltzaile bat ere. Taulen aurrizkia derrigorrezkoa da.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Datu-basean gordetzen dira Moodle-ko ezarpen eta datu gehienak eta hemen konfiguratu behar da.</p>
<p>Datu-basearen izena, erabiltzailea, pasahitza eta taula aurrizkia derrigorrezko eremuak dira;</p>
<p>Datu-base hau lehendik sortuta egon behar du, baita bertan irakurtzeko eta idazteko sarbidea dituen erabiltzaile bat ere.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Orain Moodle-ko datuak gordeko diren datu-basea konfiguratu behar duzu.
Datu-base hau lehendik sortuta egon behar du, baita sarbidea eta pasahitza dituen erabiltzaile bat ere. Taulen aurrizkia derrigorrezkoa da.';
$string['nativesqlsrvnodriver'] = 'PHP-rako Microsoft-eko SQL Server-erako Kontrolatzaileak ez daude instalatuta edo ez daude ondo konfiguratuta.';
$string['nativesqlsrvnonwindows'] = 'PHP-rako Microsoft-eko SQL Server-erako Kontrolatzaileak soilik Windows sistema eragileetan daude eskuragarri.';
$string['ociextensionisnotpresentinphp'] = 'PHP ez da ondo konfiguratu OCI8 luzapenaren bidez Oracle-rekin komunikatzeko. Mesedez konprobatu zure php.ini fitxategia edo PHP berriz konpilatu.';
$string['pass'] = 'Zuzena';
$string['paths'] = 'Bideak';
$string['pathserrcreatedataroot'] = 'Instalatzaileak ezin du datuen karpeta ({$a->dataroot}) sortu.';
$string['pathshead'] = 'Egiaztatu bideak';
$string['pathsrodataroot'] = 'Dataroot direktorioa ez da idazteko modukoa.';
$string['pathsroparentdataroot'] = 'Goragoko direktorioan ({$a->parent}) ezin da idatzi. Instalatzaileak ezin du datuen karpeta ({$a->dataroot}) sortu.';
$string['pathssubadmindir'] = 'Web ostalari gutxi batzuk /admin URL berezi gisa erabiltzen dute kontrol-panel edo antzekora sarbidea emateko. Zoritxarrez, honek Moodle-ren kudeatze-orrien berezko kokapenarekin gatazka sortzen du. Hau konpondu dezakezu zure instalazioko admin karpeta berrizendatuz, eta izen berria hemen sartuta. Adibidez <em>moodleadmin</em>. Honek Moodle-ko admin estekak konponduko du.';
$string['pathssubdataroot'] = '<p>Moodle-k erabiltzaileek igotako fitxategien edukiak bilduko dituen direktorio bat.</p>
<p>Direktorio honetan web-zerbitzariaren erabiltzaileak irakurtzeko eta idazteko baimena izan beharko ditu (normalean \'www-data\', \'nobody\', edo \'apache\').</p>
<p>Ez litzateke web bidez eskuragarri egon beharko.</p>
<p>Direktorioa existitzen ez bada, instalazioan sortzeko saiakera egingo da.</p>';
$string['pathssubdirroot'] = '<p>Moodle-ko kodea daukan direktorioaren helbide osoa.</p>';
$string['pathssubwwwroot'] = '<p>Moodle eskuragarri egongo den helbide osoa, hau da, erabiltzaileek Moodle-n sartzeko nabigatzaileareko helbide barran idatziko duten helbidea</p>
<p>Moodle ezin da hainbat helbidetatik eskuragarri egon. Zure gunea hainbat helbidetatik eskuragarri badago errazena aukeratu eta bertara beste helbideetatik behin-betiko berbideraketak konfiguratu itzazu.</p>
<p>Zure gunea Internetetik eta barne-sare batetik eskuragarri badago (batzuetan Intranet deitutakoa), hemen helbide publikoa erabili ezazu.</p>
<p>Oraingo helbidea egokia ez bada, mesedez aldatu ezazu URLa zure nabigatzailean eta instalazioa berriz abiatu ezazu.</p>';
$string['pathsunsecuredataroot'] = 'Dataroot-en kokapena ez da segurua';
$string['pathswrongadmindir'] = 'Admin direktorioa ez da existitzen';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP ez da ondo konfiguratu PGSQL luzapenaren bidez PostgreSQL-rekin komunikatzeko. Mesedez konprobatu zure php.ini fitxategia edo PHP berriz konpilatu.';
$string['phpextension'] = '{$a} PHP luzapena';
$string['phpversion'] = 'PHP bertsioa';
$string['phpversionhelp'] = '<p>Moodle-k gutxienez PHP 5.4.4 bertsioa behar du (7.x bertsioak muga batzuk ditu). </p>
<p>Zure bertsioa: {$a}</p>
<p>PHP eguneratu edo PHP bertsio berriagoa duen zerbitzari batera jo</p>';
$string['releasenoteslink'] = 'Moodle-ren bertsio honi buruzko informazio gehiagorako, mesedez ikus itzazu bertsio-oharrak hemen: {$a}';
$string['safemode'] = 'Modu segurua';
$string['safemodeerror'] = 'Moodle-k arazoak izan ditzake \'modu segurua\' ezarriz gero';
$string['safemodehelp'] = '<p>Moodle-k arazo ezberdinak izan ditzake \'modu segurua\' ezarriz gero, eta baliteke fitxategi berriak ezin sortu izatea.</p>

<p>Normalean \'modu segurua\' web zerbitzari publiko paranoideek soilik aktibatzen dute. Gauzak horrela, zure Moodle webgunea kudeatzeko beste enpresa bilatu beharko zenuke.</p>

<p>Nahi izanez gero, zure instalazioarekin jarrai dezakezu, baina aurrerago arazoak izango dituzu.</p>';
$string['sessionautostart'] = 'Saioaren hasiera automatikoa';
$string['sessionautostarterror'] = 'Indargabetuta egon behar du';
$string['sessionautostarthelp'] = '<p>Moodle-k saioko laguntza behar du eta horren ezean ez du funtzionatuko.</p>

<p>Saioak php.ini fitxategian aktibatu behar dira session.auto_start parametroari dagokionez.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP-ren SQLite luzapena ez da ondo konfiguratu. Mesedez konprobatu zure php.ini fitxategia edo PHP berriz konpilatu.';
$string['upgradingqtypeplugin'] = 'Galdera/mota plugina eguneratzen';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Orri hau ikusten baduzu <strong>{$a->packname} {$a->packversion}</strong> paketea zure ordenagailuan arrakastaz instalatu ahal izan duzu. Zorionak!';
$string['welcomep30'] = '<strong>{$a->installername}</strong>ren bertsio honek <strong>Moodle</strong>k
    zure ordenadorean funtzionatzeko behar diren aplikazioak dauzka,
    bereziki:';
$string['welcomep40'] = 'Paketeak ere zera dauka: <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Paketeko aplikazio guztien erabilpena dagozkien lizentziek
    arautzen dute. <strong>{$a->installername}</strong> aplikazioak
    <a href="http://www.opensource.org/docs/definition_plain.html">kode irekia</a> dauka eta
   <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> lizentziapean banatzen da.';
$string['welcomep60'] = 'Datozen orriek urrats erraz batzuen bidez gidatuko zaituzte <strong>Moodle</strong> zure ordenagailuan instalatu eta konfiguratzeko. Aholkatzen diren lehentsitako baloreak mantendu edo, nahi izanez gero, alda ditzakezu zure beharrei erantzun diezaieten.';
$string['welcomep70'] = '"Hurrengoa" botoia sakatu <strong>Moodle</strong>ren konfigurazioarekin jarraitzeko.';
$string['wwwroot'] = 'Web helbidea';
$string['wwwrooterror'] = '\'Web helbidea\' zuzena ez dela dirudi. Ezin izan da Moodle-ren instalazioa aurkitu. Jatorrizko balorea berrezarri da.';
