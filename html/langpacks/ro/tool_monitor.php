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
 * Strings for component 'tool_monitor', language 'ro', version '4.5'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Adăugați o regulă nouă';
$string['allevents'] = 'Toate evenimentele';
$string['allmodules'] = 'Toate instanțele';
$string['area'] = 'Zonă';
$string['areatomonitor'] = 'Zona de monitorizare';
$string['cachedef_eventsubscriptions'] = 'Aceasta stochează lista abonamentelor la evenimente pentru cursuri individuale';
$string['contactadmin'] = 'Contactați administratorul pentru a o activa.';
$string['core'] = 'Nucleu';
$string['coresubsystem'] = 'Subsystem ({$a})';
$string['currentsubscriptions'] = 'Abonamentele tale actuale';
$string['defaultmessagetemplate'] = 'Numele regulii: {rulename} <br /> Descriere: {description} <br /> Nume eveniment: {eventname}';
$string['deleterule'] = 'Șterge regula';
$string['deletesubscription'] = 'Anulează subscripția';
$string['description'] = 'Descriere:';
$string['disablefieldswarning'] = 'Unele câmpuri nu pot fi editate, deoarece această regulă are deja abonamente.';
$string['duplicaterule'] = 'Duplicăre regulă';
$string['editrule'] = 'Editare regulă';
$string['enablehelp'] = 'Activați / dezactivați monitorizarea evenimentelor';
$string['enablehelp_help'] = 'Monitorizarea evenimentelor trebuie să fie activată înainte de a putea crea și abona reguli. Rețineți că activarea monitorizării evenimentelor poate afecta performanța site-ului dvs.';
$string['errorincorrectevent'] = 'Te rugăm să selectezi un eveniment legat de plugin-ul selectat';
$string['event'] = 'Eveniment';
$string['eventnotfound'] = 'Evenimentul nu a fost găsit';
$string['eventrulecreated'] = 'Regula a fost creată';
$string['eventruledeleted'] = 'Regula a fost ștearsă';
$string['eventruleupdated'] = 'Regula a fost actualizată';
$string['eventsubcreated'] = 'Subscripția a fost creată';
$string['eventsubcriteriamet'] = 'Criteriile de abonare sunt îndeplinite';
$string['eventsubdeleted'] = 'Subscripție ștearsă';
$string['freqdesc'] = '{$a->freq} ori în {$a->mins} minute';
$string['frequency'] = 'Prag de notificare';
$string['frequency_help'] = 'Numărul de evenimente într-o perioadă de timp specificată necesară pentru a fi trimis un mesaj de notificare.';
$string['inminutes'] = 'în minute';
$string['invalidmodule'] = 'Modulul nu este valid';
$string['manage'] = 'Gestionare';
$string['managerules'] = 'Reguli de monitorizare a evenimentelor';
$string['manageruleslink'] = 'Puteți gestiona regulile din pagina {$a}.';
$string['managesubscriptions'] = 'Monitorizarea evenimentelor';
$string['managesubscriptionslink'] = 'Vă puteți abona la reguli din pagina {$a}.';
$string['messageprovider:notification'] = 'Notificări privind abonamentele la reguli';
$string['messagetemplate'] = 'Mesaj de notificare';
$string['messagetemplate_help'] = 'Un mesaj de notificare este trimis abonaților odată ce pragul de notificare a fost atins. Poate include oricare sau toți următorii substituenți:

* Link către locația evenimentului {link}
* Link către zona monitorizată {modulelink}
* Denumirea modulului de curs {modulename}
* Denumirea regulii {nume de regulă}
* Descriere {description}
* Eveniment {eventname}
* Denumirea completă a cursului {coursefullname}
* Denumirea scurtă a cursului {courseshortname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Instanță';
$string['monitor:managerules'] = 'Gestionează regulile de monitorizare a evenimentelor';
$string['monitor:managetool'] = 'Activează/dezactivează monitorizarea evenimentelor';
$string['monitor:subscribe'] = 'Abonează-te la regulile de monitorizare a evenimentelor';
$string['monitordisabled'] = 'Monitorizarea evenimentelor este dezactivată în prezent.';
$string['monitorenabled'] = 'Monitorizarea evenimentelor este activată în prezent.';
$string['norules'] = 'Nu există reguli de monitorizare a evenimentelor.';
$string['pluginname'] = 'Monitor de evenimente';
$string['privacy:createdrules'] = 'Am creat regulile de monitorizare a evenimentelor';
$string['privacy:metadata:description'] = 'Descrierea regulii';
$string['privacy:metadata:eventname'] = 'Numele complet calificat al evenimentului';
$string['privacy:metadata:frequency'] = 'Frecvența notificărilor';
$string['privacy:metadata:historysummary'] = 'Stochează istoricul notificărilor de mesaje trimise';
$string['privacy:metadata:inactivedate'] = 'Perioada de timp, în zile, după care un abonament inactiv va fi eliminat complet';
$string['privacy:metadata:lastnotificationsent'] = 'Când a fost trimisă ultima notificare pentru acest abonament.';
$string['privacy:metadata:messagesummary'] = 'Notificările sunt trimise către sistemul de mesaje.';
$string['privacy:metadata:name'] = 'Denumirea regulii';
$string['privacy:metadata:plugin'] = 'Frankenstlye numele plugin-ului';
$string['privacy:metadata:rulessummary'] = 'Aceasta stochează regulile de monitorizare.';
$string['privacy:metadata:subscriptionssummary'] = 'Stochează abonamentele utilizatorilor la diferite reguli';
$string['privacy:metadata:template'] = 'Șablon de mesaj';
$string['privacy:metadata:timecreatedrule'] = 'Când a fost creată această regulă';
$string['privacy:metadata:timecreatedsub'] = 'Când a fost creată această subscripție';
$string['privacy:metadata:timemodifiedrule'] = 'Când a fost modificată ultima dată această regulă';
$string['privacy:metadata:timesent'] = 'Când a fost trimis mesajul';
$string['privacy:metadata:timewindow'] = 'Fereastra de timp în secunde';
$string['privacy:metadata:userid'] = 'Identificatorul utilizatorului care a creat regula.';
$string['privacy:metadata:useridhistory'] = 'Identificatorul utilizatorului căruia i-a fost trimisă această notificare';
$string['privacy:metadata:useridsub'] = 'ID-ul abonatului.';
$string['privacy:subscriptions'] = 'Abonamentele mele de monitorizare a evenimentelor';
$string['processevents'] = 'Procesează evenimente';
$string['ruleareyousure'] = 'Sigur doriți să ștergeți regula „{$a}”?';
$string['ruleareyousureextra'] = 'Există {$a} abonamente la această regulă care vor fi șterse.';
$string['rulecopysuccess'] = 'Regula dublată cu succes';
$string['ruledeletesuccess'] = 'Regula a fost ștearsă';
$string['rulehelp'] = 'Detalii despre regulă';
$string['rulehelp_help'] = 'Această regulă urmărește când evenimentul „{$a->eventname}” din „{$a->eventcomponent}” a fost declanșat {$a->frequency} timp (uri) în {$a->minutes} minut (e).';
$string['rulename'] = 'Denumirea regulii';
$string['rulenopermission'] = 'Nu aveți permisiunea de a vă abona la evenimente.';
$string['rulenopermissions'] = 'Nu aveți permisiuni pentru „{$a} o regulă”';
$string['rulescansubscribe'] = 'Reguli la care vă puteți abona';
$string['selectacourse'] = 'Selectează un curs';
$string['selectcourse'] = 'Accesează acest raport la nivel de curs pentru a obține o listă a posibilelor module';
$string['subareyousure'] = 'Sigur doriți să ștergeți abonamentul la regula „{$a}”?';
$string['subcreatesuccess'] = 'Abonamentul a fost creat cu succes';
$string['subdeletesuccess'] = 'Abonamentul a fost eliminat cu succes';
$string['subhelp'] = 'Detalii abonament';
$string['subhelp_help'] = 'Acest abonament urmărește când evenimentul „{$a->eventname}” a fost declanșat în „{$a->moduleinstance}” cu frecvența {$a->frequency} în {$a->minutes} minute.';
$string['subscribeto'] = 'Abonați-vă la regula „{$a}”';
$string['taskchecksubscriptions'] = 'Activați / dezactivați abonamentele la reguli care nu sunt valide';
$string['taskcleanevents'] = 'Curățați evenimentele de monitorizare a evenimentelor';
$string['unsubscribe'] = 'Dezabonați-vă';
