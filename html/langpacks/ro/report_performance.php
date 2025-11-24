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
 * Strings for component 'report_performance', language 'ro', version '4.5'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Backup automat';
$string['check_backup_comment_disable'] = 'Performanța poate fi afectată în timpul procesului de backup. Dacă este activată, copiile de rezervă ar trebui să fie programate pentru perioade de vârf.';
$string['check_backup_comment_enable'] = 'Performanța poate fi afectată în timpul procesului de backup. Copiile de rezervă ar trebui să fie programate pentru orele de vârf.';
$string['check_backup_details'] = 'Activarea backupului automat va crea automat arhive ale tuturor cursurilor de pe server la ora specificată. <p> În timpul acestui proces, va consuma mai multe resurse de server și poate afecta performanța. </p>';
$string['check_cachejs_comment_disable'] = 'Dacă este activată, performanța de încărcare a paginii este îmbunătățită.';
$string['check_cachejs_comment_enable'] = 'Dacă este dezactivată, pagina se poate încărca lent.';
$string['check_cachejs_details'] = 'Memorarea în cache și compresia Javascript îmbunătățesc foarte mult performanța de încărcare a paginii. Este foarte recomandat pentru site-urile de producție.';
$string['check_dbschema_errors'] = 'Schema bazei de date nu este ajustată.';
$string['check_dbschema_name'] = 'Verificarea schemei bazei de date';
$string['check_dbschema_ok'] = 'Schema bazei de date este corectă.';
$string['check_debugmsg_comment_developer'] = 'Dacă este setată la o altă valoare decât DEVELOPER, performanța poate fi ușor îmbunătățită.';
$string['check_debugmsg_comment_nodeveloper'] = 'Dacă este setat la DEVELOPER, performanța poate fi ușor afectată.';
$string['check_debugmsg_details'] = 'Rareori există vreun avantaj în accesarea la nivel de dezvoltator, cu excepția cazului în care este solicitat de un dezvoltator. <p> Odată ce ați obținut mesajul de eroare și l-ați copiat și lipit undeva, este RECOMANDAT să repuneți DEBIGING la NICIUNUL. Mesajele de depanare pot oferi indicii unui hacker cu privire la configurarea site-ului dvs. și pot afecta performanța. </p>';
$string['check_enablestats_comment_disable'] = 'Performanța poate fi afectată de procesarea statisticilor. Dacă este activată, setările statistice trebuie setate cu precauție.';
$string['check_enablestats_comment_enable'] = 'Performanța poate fi afectată de procesarea statisticilor. Setările statistice trebuie setate cu precauție.';
$string['check_enablestats_details'] = 'Activarea acestui lucru va procesa jurnalele în cronjob și va aduna câteva statistici. În funcție de cantitatea de trafic de pe site-ul dvs., aceasta poate dura ceva timp. <p> În timpul acestui proces, va consuma mai multe resurse de server și poate afecta performanța. </p>';
$string['check_themedesignermode_comment_disable'] = 'Dacă este activată, imaginile și foile de stil nu vor fi memorate în cache, rezultând o degradare semnificativă a performanței.';
$string['check_themedesignermode_comment_enable'] = 'Dacă sunt dezactivate, imaginile și foile de stil sunt stocate în cache, rezultând îmbunătățiri semnificative ale performanței.';
$string['check_themedesignermode_details'] = 'Aceasta este adesea cauza site-urilor Moodle lente. <p> În medie, ar putea dura cel puțin dublul cantității de CPU pentru a rula un site Moodle cu modul de proiectare a temelor activat. </p>';
$string['comments'] = 'Comentarii';
$string['disabled'] = 'Dezactivează';
$string['edit'] = 'Editează';
$string['enabled'] = 'Activează';
$string['issue'] = 'Problema';
$string['morehelp'] = 'mai mult ajutor';
$string['performance:view'] = 'Vizualizează raportul de performanță';
$string['performancereportdesc'] = 'Acest raport listează problemele care pot afecta performanța site-ului {$a}';
$string['pluginname'] = 'Prezentare generală a performanței';
$string['privacy:metadata'] = 'Pluginul de prezentare generală a performanței nu stochează date personale.';
$string['value'] = 'Valoare';
