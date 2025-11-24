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
 * Strings for component 'tool_dbtransfer', language 'lt', version '4.5'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Galimos duomenų bazės tvarkyklės perkėlimui';
$string['cliheading'] = 'Duomenų bazės perkėlimas – įsitikinkite, kad perkėlimo metu niekas nepasiekia serverio!';
$string['climigrationnotice'] = 'Vykdomas duomenų bazės perkėlimas, palaukite, kol perkėlimas bus baigtas ir serverio administratorius atnaujins konfigūraciją ir ištrins failą $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Žurnalo rodymo veiksmų konvertavimas';
$string['dbexport'] = 'Duomenų bazės perkėlimas';
$string['dbtransfer'] = 'Duomenų bazės eksportavimas';
$string['enablemaintenance'] = 'Įjungti priežiūros režimą';
$string['enablemaintenance_help'] = 'Ši parinktis įgalina priežiūros režimą duomenų bazės perkėlimo metu ir po jo, ji neleidžia visiems naudotojams pasiekti, kol perkėlimas nebus baigtas. Atkreipkite dėmesį, kad administratorius, atnaujinęs config.php nustatymus, turi rankiniu būdu ištrinti failą $CFG->dataroot/climaintenance.html, kad atnaujintų įprastą veikimą.';
$string['exportdata'] = 'Exportuoti duomenis';
$string['notargetconectexception'] = 'Negalima prisijungti prie norimos duomenų bazės';
$string['options'] = 'Parinktys';
$string['pluginname'] = 'Duomenų bazės perkėlimas';
$string['privacy:metadata'] = 'Duomenų bazės perdavimo papildinys nesaugo jokių asmens duomenų.';
$string['targetdatabase'] = 'Tikslinė duomenų bazė';
$string['targetdatabasenotempty'] = 'Nurodytoje duomenų bazėje neturi būti jokių lentelių su nurodytu prefiksas!';
$string['transferdata'] = 'Perkelti duomenis';
$string['transferdbintro'] = 'Šitas kodas perkels visus duomenis iš šios duomenų bazės į kitą duomenų bazės serverį';
$string['transferdbtoserver'] = 'Perkelti šią Moodle duomenų bazę į kitą serverį';
$string['transferringdbto'] = 'Perkeltį šią duomenų bazę {$a->dbtype} į {$a->dbname} duomenų bazę, kuri yra {$a->dbhost}';
