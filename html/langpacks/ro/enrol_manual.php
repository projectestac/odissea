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
 * Strings for component 'enrol_manual', language 'ro', version '4.1'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avansat';
$string['alterstatus'] = 'Modificați status';
$string['altertimeend'] = 'Modificați ora de finalizare';
$string['altertimestart'] = 'Modificați ora de începere';
$string['assignrole'] = 'Alocă rol';
$string['assignroles'] = 'Alocă roluri';
$string['browsecohorts'] = 'Răsfoiește cohorte';
$string['browseusers'] = 'Răsfoiește utilizatori';
$string['confirmbulkdeleteenrolment'] = 'Sunteți sigur că doriți să ștergeți înscrierile acestor utilizatori?';
$string['defaultperiod'] = 'Durata implicită a înscrierii';
$string['defaultperiod_desc'] = 'Intervalul implicit de timp în care înscrierea este validă. Dacă este setat la zero, durata înscrierii va fi implicit nelimitată.';
$string['defaultperiod_help'] = 'Intervalul implicit de timp în care înscrierea este validă, începând cu momentul în care utilizatorul este înscris. Dacă este dezactivată, durata înscrierii va fi implicit nelimitată.';
$string['defaultstart'] = 'Începerea implicită a înscrierii';
$string['deleteselectedusers'] = 'Șterge înregistrările utilizatorilor selectați';
$string['editselectedusers'] = 'Editează înscrierile utilizatorilor selectați';
$string['enrolledincourserole'] = 'Înscris în "{$a->course}" ca "{$a->role}"';
$string['enrolusers'] = 'Înscrie utilizatorii';
$string['enroluserscohorts'] = 'Înscrie utilizatorii și cohortele selectate';
$string['expiredaction'] = 'Acțiune de expirare a înscrierii';
$string['expiredaction_help'] = 'Selectați acțiunea care trebuie întreprinsă, atunci când expiră înscrierea utilizatorului. Vă rugăm să observați că unele date și setări ale utilizatorului sunt șterse pe durata retragerii de la curs.';
$string['expirymessageenrolledbody'] = 'Stimate {$a->user},

Aceasta este o notificare că înscrierea dumneavoastră la cursul \'{$a->course}\' urmează să expire pe {$a->timeend}.

Dacă doriți să beneficiați de asistență, vă rugăm să contactați {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificare de expirarea a înscrierii';
$string['expirymessageenrollerbody'] = 'Înscrierea la cursul \'{$a->course}\' va expira în următoarele {$a->threshold} pentru următorii utilizatori:

{$a->users}

Pentru a extinde înscrierea acestora, mergeți la {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificare de expirarea a înscrierii';
$string['managemanualenrolements'] = 'Administrare înscrieri manuale';
$string['manual:config'] = 'Configurați sesiunile de înscriere manuală';
$string['manual:enrol'] = 'Înscrie utilizatori';
$string['manual:manage'] = 'Gestionează înscrierile utilizatorilor';
$string['manual:unenrol'] = 'Retrage utilizatori';
$string['manual:unenrolself'] = 'Retrageți-vă de la curs';
$string['manualpluginnotinstalled'] = 'Plugin-ul „Manual” nu a fost încă instalat';
$string['messageprovider:expiry_notification'] = 'Notificări de expirare a înscrierii manuale';
$string['now'] = 'Acum';
$string['pluginname'] = 'Înscrieri manuale';
$string['pluginname_desc'] = 'Acest plugin permite înscrierea manuală a utilizatorilor printr-un link în setările de administrare a cursului, de către un utilizator cu permisiuni adecvate, cum ar fi un formator. Plugin-ul ar trebui activat în mod normal, deoarece alte pluginuri de înscriere, cum ar fi autoînscrierea, necesită acest lucru.';
$string['privacy:metadata'] = 'Plugin-ul pentru înscrieri manuale nu stochează date personale.';
$string['selectcohorts'] = 'Selectează cohorte';
$string['selection'] = 'Selecție';
$string['selectusers'] = 'Selectează utilizatori';
$string['sendexpirynotificationstask'] = 'Înscrierea manuală trimite notificarea privind expirarea sarcinii';
$string['status'] = 'Activează înscrierile manuale';
$string['status_desc'] = 'Permiteți accesul la cursuri al utilizatorilor înscriși intern. Acesta trebuie păstrat activat în majoritatea cazurilor.';
$string['status_help'] = 'Această setare determină dacă utilizatorii pot fi înscriși manual, printr-un link în setările de administrare a cursului, de către un utilizator cu permisiuni adecvate, cum ar fi un formator.';
$string['statusdisabled'] = 'Dezactivat';
$string['statusenabled'] = 'Activat';
$string['syncenrolmentstask'] = 'Sincronizează sarcina de înscrieri manuale';
$string['unenrol'] = 'Retrage utilizator';
$string['unenrolselectedusers'] = 'Retrage utilizatorii selectați';
$string['unenrolselfconfirm'] = 'Sunteți sigur că doriți să vă retrageți de la curs "{$a}"?';
$string['unenroluser'] = 'Sunteți sigur că doriți să retrageți "{$a->user}" de la cursul "{$a->course}"?';
$string['unenrolusers'] = 'Retrage utilizatori';
$string['wscannotenrol'] = 'Sesiunea de plugin nu poate înscrie manual un utilizator în ID-ul cursului = {$a->courseid}';
$string['wsnoinstance'] = 'Sesiunea plugin-ului de înscriere manuală nu există sau este dezactivată pentru cursul (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Nu aveți permisiunea de a atribui această rolului ({$a->roleid}) acestui utilizator ({$a->userid}) în acest curs({$a->courseid}).';
