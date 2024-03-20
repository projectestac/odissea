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
 * Strings for component 'plugin', language 'ro', version '4.1'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acțiuni';
$string['availability'] = 'Disponibilitate';
$string['cancelinstallall'] = 'Anulează noile instalări ({$a})';
$string['cancelinstallhead'] = 'Anulează instalarea plugin-urilor';
$string['cancelinstallinfo'] = 'Următoarele plugin-uri nu sunt complet instalate încă, astfel că instalarea acestora poate fi anulată. Pentru a face acest lucru, folderul plugin trebuie îndepărtat de pe server acum. Asigurați-vă că doriți acest lucru, pentru a preveni pierderea accidentală de date (cum ar fi modificările propriului cod).';
$string['cancelinstallinfodir'] = 'Folder de șters: {$a}';
$string['cancelinstallone'] = 'Anulează această instalare';
$string['cancelupgradeall'] = 'Anulează actualizările ({$a})';
$string['cancelupgradehead'] = 'Se restabilesc noile versiuni de plugin';
$string['cancelupgradeone'] = 'Anulați această actualizare';
$string['checkforupdates'] = 'Se verifică actualizările disponibile';
$string['checkforupdateslast'] = 'Ultima verificare a fost în data de {$a}';
$string['dependencyavailable'] = 'Disponibil';
$string['dependencyfails'] = 'Eșuări';
$string['dependencyinstall'] = 'Instalare';
$string['dependencyinstallhead'] = 'Se instalează dependințele lipsă';
$string['dependencyinstallmissing'] = 'Se instalează dependințele lipsă ({$a})';
$string['dependencymissing'] = 'Lipsește';
$string['dependencyunavailable'] = 'Nediponibil';
$string['dependencyupload'] = 'Încărcare';
$string['dependencyuploadmissing'] = 'Încărcare fișiere ZIP';
$string['detectedmisplacedplugin'] = 'Plugin-ul "{$a->component}" este instalat în locație incorectă "{$a->current}", locația presupusă este "{$a->expected}"';
$string['displayname'] = 'Denumire plugin';
$string['err_response_curl'] = 'Nu se pot prelua prelua actualizările disponibile ale datelor - eroare cURL neașteptată.';
$string['err_response_format_version'] = 'Versiune neașteptată a formatului response. Vă rugăm să reverificați actualizările disponibile.';
$string['err_response_http_code'] = 'Nu se pot prelua actualizările disponibile ale datelor - cod HTTP de răspuns neașteptat.';
$string['filterall'] = 'Afișează toate';
$string['filtercontribonly'] = 'Afișează doar plugin-urile adiționale';
$string['filterupdatesonly'] = 'Afișati doar pe cele care pot fi updatate';
$string['incompatibleversion'] = 'Vesiune Moodle incompatibilă: {$a}';
$string['isenabled'] = 'Activat?';
$string['misdepinfoplugin'] = 'Informații despre plugin';
$string['misdepinfoversion'] = 'Informații despre versiune';
$string['misdepsavail'] = 'Dependințe disponibile care lipsesc';
$string['misdepsunavail'] = 'Dependințe nedisponibile care lipsesc';
$string['misdepsunavaillist'] = 'Nu a fost găsită o versiune care să îndeplinească cerințele dependinței: {$a}.';
$string['misdepsunknownlist'] = 'Nu se găsește în directorul plugin-urilor: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Nu sunt instalate plugin-uri de acest tip';
$string['notdownloadable'] = 'Nu se poate descărca pachetul';
$string['notdownloadable_help'] = 'Pachetul ZIP cu actualizarea nu poate fi descărcat automat.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Notițe';
$string['notsupported'] = 'Este posibil ca plugin-ul să nu fie compatibil cu versiunea Moodle  {$a}';
$string['notwritable'] = 'Fișiere plugin care nu pot fi scrise';
$string['notwritable_help'] = 'Fișierele plugin sunt inscriptibile de către serverul web. Procesul serverului web trebuie să aibă acces pentru a scrie folderul plugin și conținutul său complet. De asemenea, poate fi necesar accesul  pentru a scrie în directorul rădăcină al plugin-ului.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Toate plugin-urile';
$string['overviewext'] = 'Plugin-uri adiționale';
$string['overviewupdatable'] = 'Actualizări disponibile';
$string['packagesdebug'] = 'Rezultatul debug-ului este activat';
$string['packagesdownloading'] = 'Se descarcă {$a}';
$string['packagesextracting'] = 'Se extrag {$a}';
$string['packagesvalidating'] = 'Se validează {$a}';
$string['packagesvalidatingfailed'] = 'Instalare anulată din cauza problemelor de validare';
$string['packagesvalidatingok'] = 'Validare cu succes, instalarea poate continua';
$string['plugincheckall'] = 'Toate plugin-urile';
$string['plugincheckattention'] = 'Plugin-uri care necesită atenție';
$string['pluginchecknone'] = 'Nu există acum plugin-uri care să necesite atenție';
$string['pluginchecknotice'] = 'Această pagină afișează plugin-urile care ar putea necesita atenție în timpul actualizării, cum ar fi noi plugin-uri care urmează să fie instalate, plugin-uri care urmează să fie upgradate, plugin-uri lipsă etc. Plugin-urile suplimentare sunt afișate dacă există o actualizare disponibilă pentru acestea. Se recomandă să verificați dacă există versiuni mai recente disponibile ale plugin-urilor și să actualizați codul sursă înainte de a continua cu această actualizare Moodle.';
$string['plugindisable'] = 'Dezactivați';
$string['plugindisabled'] = 'Dezactivat';
$string['pluginenable'] = 'Activează';
$string['pluginenabled'] = 'Activat';
$string['release'] = 'Lansare';
$string['requiredby'] = 'Cerut de: {$a}';
$string['requires'] = 'Cerințe';
$string['rootdir'] = 'Director';
$string['settings'] = 'Setări';
$string['source'] = 'Sursă';
$string['sourceext'] = 'Adițional';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Status';
$string['status_delete'] = 'Pentru a fi șterse';
$string['status_downgrade'] = 'O versiune superioară este deja instalată!';
$string['status_missing'] = 'Lipseşte de pe disk!';
$string['status_new'] = 'Pentru a fi instalat';
$string['status_nodb'] = 'Nu există baza de date';
$string['status_upgrade'] = 'Pentru a fi upgradat';
$string['status_uptodate'] = 'Instalat';
$string['supportedconversions'] = 'Conversiile documentelor acceptate';
$string['supportedmoodleversions'] = 'Versiuni Moodle acceptate';
$string['systemname'] = 'Identificator';
$string['type_antivirus'] = 'Plugin antivirus';
$string['type_antivirus_plural'] = 'Plugin-uri antivirus';
$string['type_auth'] = 'Metodă de autentificare';
$string['type_auth_plural'] = 'Plugin-uri de autentificare';
$string['type_availability'] = 'Restricție de disponibilitate';
$string['type_availability_plural'] = 'Restricții de disponibilitate';
$string['type_block'] = 'Bloc';
$string['type_block_plural'] = 'Block-uri';
$string['type_cachelock'] = 'Handler pentru blocarea memoriei cache';
$string['type_cachelock_plural'] = 'Handlere pentru blocarea memoriei cache';
$string['type_cachestore'] = 'Înregistrare cache';
$string['type_cachestore_plural'] = 'Înregistrări cache';
$string['type_calendartype'] = 'Tip de calendar';
$string['type_calendartype_plural'] = 'Tipuri de calendar';
$string['type_contentbank'] = 'Banca de conținut';
$string['type_contentbank_plural'] = 'Pluginuri pentru banca de conținut';
$string['type_contenttype'] = 'Banca de conținut';
$string['type_contenttype_plural'] = 'Pluginuri pentru banca de conținut';
$string['type_coursereport'] = 'Raport curs';
$string['type_coursereport_plural'] = 'Rapoarte curs';
$string['type_customfield'] = 'Câmp personalizat';
$string['type_customfield_plural'] = 'Câmpuri personalizate';
$string['type_dataformat'] = 'Format date';
$string['type_dataformat_plural'] = 'Formate date';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editoare';
$string['type_enrol'] = 'Metodă de înrolare';
$string['type_enrol_plural'] = 'Metode de înrolare';
$string['type_fileconverter'] = 'Convertor de documente';
$string['type_fileconverter_plural'] = 'Convertoare de documente';
$string['type_fileconvertermanage'] = 'Gestionați convertoarele de documente';
$string['type_filter'] = 'Filtru';
$string['type_filter_plural'] = 'Filtre text';
$string['type_format'] = 'Format curs';
$string['type_format_plural'] = 'Formate curs';
$string['type_gradeexport'] = 'Metodă de export a notelor';
$string['type_gradeexport_plural'] = 'Metode de export a notelor';
$string['type_gradeimport'] = 'Metodă de import a notelor';
$string['type_gradeimport_plural'] = 'Metode de import a notelor';
$string['type_gradereport'] = 'Raport catalog';
$string['type_gradereport_plural'] = 'Rapoarte catalog';
$string['type_gradingform'] = 'Metodă avansată de notare';
$string['type_gradingform_plural'] = 'Metode avansate de notare';
$string['type_h5plib'] = 'Cadru H5P';
$string['type_h5plib_plural'] = 'Cadre H5P';
$string['type_local'] = 'Plugin local';
$string['type_local_plural'] = 'Plugin-uri locale';
$string['type_media'] = 'Media player';
$string['type_media_plural'] = 'Media playere';
$string['type_message'] = 'Plugin de notificare';
$string['type_message_plural'] = 'Pluginuri de notificare';
$string['type_mlbackend'] = 'Backend de învățare automată';
$string['type_mlbackend_plural'] = 'Backend-uri de învățare automată';
$string['type_mnetservice'] = 'Serviciu MNet';
$string['type_mnetservice_plural'] = 'Servicii MNet';
$string['type_mod'] = 'Modul de activitate';
$string['type_mod_plural'] = 'Module de activitate';
$string['type_paygw'] = 'Gateway de plată';
$string['type_paygw_plural'] = 'Gateway-uri de plată';
$string['type_paygwmanage'] = 'Gestionați gateway-urile de plată';
$string['type_plagiarism'] = 'Plugin plagiarism';
$string['type_plagiarism_plural'] = 'Plugin-uri plagiarism';
$string['type_portfolio'] = 'Portofoliu';
$string['type_portfolio_plural'] = 'Portofolii';
$string['type_profilefield'] = 'Tipul de profil de câmp';
$string['type_profilefield_plural'] = 'Tipuri de profil de câmp';
$string['type_qbank'] = 'Plugin Bancă de întrebări';
$string['type_qbank_plural'] = 'Plugin-uri Bancă de întrebări';
$string['type_qbehaviour'] = 'Comportament întrebare';
$string['type_qbehaviour_plural'] = 'Comportamente întrebare';
$string['type_qformat'] = 'Formatul întrebării pentru import/export';
$string['type_qformat_plural'] = 'Formatul întrebării pentru import/export';
$string['type_qtype'] = 'Tip de întrebare';
$string['type_qtype_plural'] = 'Tipuri de întrebări';
$string['type_report'] = 'Raport site';
$string['type_report_plural'] = 'Rapoarte';
$string['type_repository'] = 'Depozit';
$string['type_repository_plural'] = 'Depozite';
$string['type_search'] = 'Caută motor';
$string['type_search_plural'] = 'Caută motoare';
$string['type_theme'] = 'Temă';
$string['type_theme_plural'] = 'Teme';
$string['type_tool'] = 'Tool admin';
$string['type_tool_plural'] = 'Tool-uri admin';
$string['type_webservice'] = 'Protocol Webservice';
$string['type_webservice_plural'] = 'Protocoale Webservice';
$string['uninstall'] = 'Dezinstalare';
$string['uninstallconfirm'] = 'Sunteți pe punctul de a dezinstala plugin-ul <em>{$a->name}</em>. Acest lucru se va șterge tot din baza de date ce este asociat cu acest plugin, inclusiv configurația, înregistrările din jurnal, fișierele utilizatorului gestionate de plugin etc. Nu există nici o cale de întoarcere și Moodle nu creează nici o rezervă de recuperare. Esti sigur ca vrei să continui?';
$string['uninstalldelete'] = 'Toate datele asociate cu plugin-ul <em>{$a->name}</em> au fost șterse din baza de date. Pentru a preveni ca plugin-ul să se reinstaleze singur, folderul său <em>{$a->rootdir}</em> trebuie să fie șters acummanual de pe serverul dumneavoastră. Moodle nu poate elimina folderul din cauza permisiunii de a scrie.';
$string['uninstalldeleteconfirm'] = 'Toate datele asociate cu plugin-ul <em>{$a->name}</em> au fost șterse din baza de date. Pentru a preveni reinstalarea plugin-ului , folderul său <em>{$a->rootdir}</em> trebuie să fie eliminat de pe server. Doriți să ștergeți plugin-ul acum?';
$string['uninstalldeleteconfirmexternal'] = 'Se pare că versiunea curentă a plugin-ului a fost obținută prin intermediul sistemului de management al codului sursă ({$a}) checkout. Dacă îndepărtați folderul plugin, puteți pierde modificări locale importante ale codului. Asigurați-vă că sigur doriți să eliminați folderul plugin înainte de a continua.';
$string['uninstallextraconfirmblock'] = 'Există {$a->instances} exemple ale acestui block.';
$string['uninstallextraconfirmenrol'] = 'Există {$a->enrolments} înscrieri ale utilizatorului.';
$string['uninstallextraconfirmmod'] = 'Există {$a->instances} exemple ale acestui modul în {$a->courses} cursuri.';
$string['uninstalling'] = 'Se dezinstalează {$a->name}';
$string['updateavailable'] = 'Există o nouă versiune {$a} disponibilă!';
$string['updateavailable_moreinfo'] = 'Mai multe informații...';
$string['updateavailable_release'] = '{$a} lansat';
$string['updatepluginconfirm'] = 'Confirmarea actualizării plugin-ului';
$string['updatepluginconfirmexternal'] = 'Se pare că versiunea curentă a plugin-ului a fost obținută prin intermediul sistemului de management al codului sursă ({$a}) Checkout. În cazul în care instalați această actualizare, nu veți mai putea să obțineți actualizările plugin-uri din sistemul de gestionare a codurilor sursă. Asigurați-vă că sigur doriți să actualizați plugin-ul înainte de a continua.';
$string['updatepluginconfirminfo'] = 'Sunteți pe punctul de a instala o nouă versiune a plugin-ului <strong>{$a->name}</strong>. Un pachet zip cu versiunea a {$a->version} plugin-ului va fi descărcată de la <a href="{$a->url}">{$a->url}</a> și extrasă în instalarea dumneavoastră Moodle pentru a vă actualiza instalarea.';
$string['updatepluginconfirmwarning'] = 'Vă rugăm să rețineți că Moodle nu va face în mod automat un backup al bazei de date înainte de actualizare. Vă recomandăm insistent să faceți un backup snapshot complet acum, pentru cazul rar în care noul cod are bug-uri care fac ca site-ul dumneavoastră să fie indisponibil sau chiar să corupă baza de date. Mai departe continuați pe propriul risc.';
$string['validationmsg_componentmatch'] = 'Nume complet al componentei';
$string['validationmsg_componentmismatchname'] = 'Neconcordanță nume plugin';
$string['validationmsg_componentmismatchname_help'] = 'Anumite pachete ZIP, cum ar fi cele generate de Github, pot conține un nume incorect de director root. Trebuie să modifcați numele directorului root pentru a se potrivi cu numele declarat al plugin-ului.';
$string['validationmsg_componentmismatchname_info'] = 'Plugin-ul își afișează numele ca fiind \'{$a}\' dar nu se potrivește cu numele din directorul root.';
$string['validationmsg_componentmismatchtype'] = 'Neconcordanță a tipului de plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Tipul de portofoliu presupus \'{$a->expected}\' dar plugin-ul declară că tipul lui este \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Nu a fost găsit fișierul extras';
$string['validationmsg_filesnumber'] = 'Nu au fost găsite destule fișiere în pachet';
$string['validationmsg_filestatus'] = 'NU se pot extrage fișierele';
$string['validationmsg_filestatus_info'] = 'Încrecarea de a extrage fișierul {$a->file} a rezultat în eroarea  \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Fișierul language a fost găsit';
$string['validationmsg_maturity'] = 'Maturity level declarat';
$string['validationmsg_maturity_help'] = 'Plugin-ul își poate declara nivelul său de maturitate. În cazul în care maintainer-ul consideră plugin-ul stabil, nivelul de maturitate declarat va citi MATURITY_STABLE. Toate celelalte niveluri de maturitate (cum ar fi alfa sau beta) ar trebui să fie considerate instabilă și să fie emis un avertisment.';
$string['validationmsg_missingcomponent'] = 'Plugin-ul nu afișează numele componentei lui';
$string['validationmsg_missingcomponent_help'] = 'Toate plugin-urile trebuie să afișeze numele complet al componentei lor via declarația $plugin->component` în fișierul version.php.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Neconcordanță nume fișier english language';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Tipul de plugin nu are fișierul în limba engleză {$a}.';
$string['validationmsg_missinglangenfile'] = 'Nu a fost găsit fișierul language Engleză';
$string['validationmsg_missinglangenfolder'] = 'Lipsește folderul English language';
$string['validationmsg_missingversion'] = 'Plugin-ul nu își declară versiunea';
$string['validationmsg_missingversionphp'] = 'Fișierul version.php nu a fost găsit';
$string['validationmsg_multiplelangenfiles'] = 'Au fost găsite multiple fișiere language';
$string['validationmsg_onedir'] = 'Structură invalidă a pachetului ZIP';
$string['validationmsg_onedir_help'] = 'Pachetul ZIP trebuie să conțină doar un director root care deține codul de plugin-ul. Numele acelui directorul root trebuie să se potrivească cu numele plugin-ului.';
$string['validationmsg_pathwritable'] = 'Verifcare acces pentru scriere';
$string['validationmsg_pluginversion'] = 'Versiune plugin';
$string['validationmsg_pluginversiontoolow'] = 'O versiune superioară a acestui plugin este deja instalată';
$string['validationmsg_release'] = 'Lansare plugin';
$string['validationmsg_requiresmoodle'] = 'Versiune Moodle necesară';
$string['validationmsg_rootdir'] = 'Numele plugin-ului de instalat';
$string['validationmsg_rootdir_help'] = 'Numele directorului root în pachetul ZIP formează numele plugin-ul care urmează să fie instalat. În cazul în care numele nu este corect, s-ar putea să doriți să redenumiți directorul root în ZIP înainte de a instala plugin-ul.';
$string['validationmsg_rootdirinvalid'] = 'Nume plugin invalid';
$string['validationmsg_rootdirinvalid_help'] = 'Numele directorului root în pachetul ZIP încalcă cerințe formale de sintaxă. Anumite pachete ZIP, cum ar fi cele generate de Github, pot conține un nume incorect pentru director root. Trebuie să modificați numele directorul root pentru a se potrivi cu numele plugin-ului.';
$string['validationmsg_targetexists'] = 'Locația țintă există deja și va fi eliminată';
$string['validationmsg_targetexists_help'] = 'Plugin-ul directory există deja și va fi înlocuit cu conținutul pachetului plugin.';
$string['validationmsg_targetnotdir'] = 'Locația țintă este ocupată de un fișier';
$string['validationmsg_unknowntype'] = 'Tip de plugin invalid';
$string['validationmsg_versionphpsyntax'] = 'Sintaxa detectată nu este acceptată în fișierul version.php';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Eroare';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Avertizare';
$string['version'] = 'Versiune';
$string['versiondb'] = 'Versiune curentă';
$string['versiondisk'] = 'Versiune nouă';
