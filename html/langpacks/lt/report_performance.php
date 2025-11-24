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
 * Strings for component 'report_performance', language 'lt', version '4.5'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Automatinė atsarginė kopija';
$string['check_backup_comment_disable'] = 'Atsarginės kopijos kūrimo metu gali nukentėti našumas. Jei įjungta, atsarginės kopijos turėtų būti suplanuotos ne piko metu.';
$string['check_backup_comment_enable'] = 'Atsarginės kopijos kūrimo metu gali nukentėti našumas. Atsarginės kopijos turėtų būti suplanuotos ne piko metu.';
$string['check_backup_details'] = 'Įjungus automatinį atsarginį kopijavimą, jūsų nurodytu laiku serveryje bus automatiškai sukurti visų kursų archyvai.<p>Šio proceso metu bus sunaudota daugiau serverio išteklių ir tai gali turėti įtakos našumui.</p>';
$string['check_cachejs_comment_disable'] = 'Jei įjungta, pagerėja puslapio įkėlimo našumas.';
$string['check_cachejs_comment_enable'] = 'Jei išjungta, puslapis gali būti įkeliamas lėtai.';
$string['check_cachejs_details'] = '„Javascript“ talpyklos kaupimas ir glaudinimas labai pagerina puslapio įkėlimo našumą. Primygtinai rekomenduojama naudoti produkcinėse svetainėse.';
$string['check_dbschema_errors'] = 'Duomenų bazės schema nesulygiuota.';
$string['check_dbschema_name'] = 'Duomenų bazės schemos patikrinimas';
$string['check_dbschema_ok'] = 'Duomenų bazės schema teisinga.';
$string['check_debugmsg_comment_developer'] = 'Jei nustatyta kita vertė nei DEVELOPER, našumas gali būti šiek tiek pagerintas.';
$string['check_debugmsg_comment_nodeveloper'] = 'Jei nustatyta į DEVELOPER, veikimas gali būti šiek tiek paveiktas.';
$string['check_debugmsg_details'] = 'Perėjimas į kūrėjo lygį retai turi pranašumų, nebent to paprašytų kūrėjas.<p>Gavus klaidos pranešimą ir jį nukopijavus bei kažkur įklijavus, LABAI REKOMENDUOJAME grąžinti Debug į NONE. Derinimo pranešimai gali suteikti įsilaužėliui užuominų apie jūsų svetainės sąranką ir gali turėti įtakos našumui.</p>';
$string['check_enablestats_comment_disable'] = 'Našumui gali turėti įtakos statistikos apdorojimas. Jei įjungta, statistikos nustatymus reikia nustatyti atsargiai.';
$string['check_enablestats_comment_enable'] = 'Našumui gali turėti įtakos statistikos apdorojimas. Statistikos nustatymus reikia nustatyti atsargiai.';
$string['check_enablestats_details'] = 'Tai įjungus bus apdoroti žurnalai programoje „cronjob“ ir surinkta statistika. Priklausomai nuo srauto jūsų svetainėje, tai gali šiek tiek užtrukti.<p>Šio proceso metu bus sunaudota daugiau serverio išteklių ir tai gali turėti įtakos našumui.</p>';
$string['check_themedesignermode_comment_disable'] = 'Jei įjungta, vaizdai ir stiliaus lapai nebus saugomi talpykloje, todėl labai pablogės našumas.';
$string['check_themedesignermode_comment_enable'] = 'Jei išjungta, vaizdai ir stilių lapai įrašomi į talpyklą, todėl žymiai pagerėja našumas.';
$string['check_themedesignermode_details'] = 'Tai dažnai yra lėtų Moodle svetainių priežastis. <p>Vidutiniškai „Moodle“ svetainei paleisti gali prireikti bent dvigubai daugiau procesoriaus, kai įjungtas temos kūrėjo režimas.</p>';
$string['comments'] = 'Komentarai';
$string['disabled'] = 'Išjungta';
$string['edit'] = 'Redaguoti';
$string['enabled'] = 'Įjungtas';
$string['issue'] = 'Išdavimas';
$string['morehelp'] = 'daugiau pagalbos';
$string['performance:view'] = 'Peržiūrėti greitaveikos ataskaitą';
$string['performancereportdesc'] = 'Šioje ataskaitoje pateikiamos problemos, kurios gali turėti įtakos svetainės našumui {$a}';
$string['pluginname'] = 'Greitaveikos peržiūra';
$string['privacy:metadata'] = 'Veiklos apžvalgos papildinys nesaugo jokių asmeninių duomenų.';
$string['value'] = 'Reikšmė';
