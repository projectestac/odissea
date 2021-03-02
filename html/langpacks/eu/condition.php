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
 * Strings for component 'condition', language 'eu', version '3.8'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Gehitu {no} jarduera-osaketarako baldintza formularioari';
$string['addgrades'] = 'Gehitu {no} kalifikazio-baldintza formularioari';
$string['adduserfields'] = 'Gehitu {no} erabiltzaile eremu-baldintza formularioari';
$string['availabilityconditions'] = 'Mugatu eskuragarritasuna';
$string['availablefrom'] = 'Noiztik aurrera eskuragarri:';
$string['availablefrom_help'] = 'Noiztik/noiz arte eskuragarri-k zehazten du noiz izango duen eskuragarri ikasleak jarduera ikastaroaren orriko esteka baten bidez. Noiztik/noiz arte eskuragarri eta eskuragarritasun ezarpenen arteko ezberdintasuna hauxe da: azken honek eskuragarritasun datatik haratago utzi egiten dio ikasleari jardueraren deskribapena ikusten, eta noiztik/noiz arte eskuragarri-k berriz erabat ukatzen dio sarbidea eta beraz ez du data horietatik kanpo deskribapena ere ikusiko.';
$string['availableuntil'] = 'Noiz arte eskuragarri:';
$string['badavailabledates'] = 'Datak ez dira egokiak. Bi datak ezartzen badituzu, "noiztik aurrera eskuragarri"-k "noiz arte" baino lehenagokoa behar du.';
$string['badgradelimits'] = 'Goiko eta beheko kalifikazio-muga ezartzen baduzu, goikoak behekoak baino handiagoa izan behar du.';
$string['completion_complete'] = 'osatutzat markatu behar da';
$string['completion_fail'] = 'gutxiegi kalifikazioarekin osatuta egon behar du';
$string['completion_incomplete'] = 'ez du osatuta markatuta egon behar';
$string['completion_pass'] = 'gaindituta kalifikazioarekin osatuta egon behar';
$string['completioncondition'] = 'Jarduera-osaketarako baldintza';
$string['completioncondition_help'] = 'Jarduerari ekin ahal izateko bete behar diren jardueraren osaketa-balditzak ezartzen ditu ezarpen honek. Ohartu osaketaren jarraipena ezarri behar dela inongo jarduera-osaketa baldintza ezarri aurretik.

Hainbat jarduera-osaketarako baldintza ezar daitezke, nahi izanez gero. Halakoetan, jarduerari ekiteko osaketa-baldintza GUZTIAK bete beharko dira.';
$string['completionconditionsection'] = 'Jarduera-osaketarako baldintza';
$string['completionconditionsection_help'] = 'Ezarpen honek zehazten du jarduera osatzeko baldintzaren bat ezarri behar dela atalera sarbidea izateko. Kontuan izan aldez aurretik osaketaren jarraipena ezarri behar dela inongo jarduera osatzeko baldintza ezarri ahal izateko.

Jarduera osatzeko hainbat baldintza ezar daitezke nahi izanez gero. Horrelakoetan atalerako sarbidea jarduera osatzeko baldintza GUZTIAK betetakoan emango da.';
$string['configenableavailability'] = 'Gaituz gero, baldintzak (data, kalifikazioa edo osatuta egotearen arabera) ezarri ahal izango dituzu jarduera eskuragarri dagoen ala ez kontrolatzeko.';
$string['contains'] = 'daukana';
$string['doesnotcontain'] = 'ez daukana';
$string['enableavailability'] = 'Baldintzatutako eskuragarritasuna gaitu';
$string['endswith'] = 'honela bukatzen da';
$string['fielddeclaredmultipletimes'] = 'Ezin duzu erabili eremu bera behin baino gehiagotan jarduerako.';
$string['grade_atleast'] = 'gutxienez izan behar du';
$string['grade_upto'] = 'eta hau baino gutxiago';
$string['gradecondition'] = 'Kalifikazio-baldintza';
$string['gradecondition_help'] = 'Jarduerari ekin ahal izateko bete behar diren jardueraren kalifikazio-balditzak ezartzen ditu ezarpen honek.

Jardueraren hainbat kalifikazio-baldintza ezar daitezke, nahi izanez gero. Halakoetan, jarduerari ekiteko osaketa-baldintza GUZTIAK bete beharko dira.';
$string['gradeconditionsection'] = 'Kalifikazio-baldintza';
$string['gradeconditionsection_help'] = 'Ezarpen honek zehazten du jarduera osatzeko baldintzaren bat ezarri behar dela atalera sarbidea izateko. Kontuan izan aldez aurretik osaketaren jarraipena ezarri behar dela inongo jarduera osatzeko baldintza ezarri ahal izateko.

Jarduera osatzeko hainbat baldintza ezar daitezke nahi izanez gero. Horrelakoetan atalerako sarbidea jarduera osatzeko baldintza GUZTIAK betetakoan emango da.';
$string['gradeitembutnolimits'] = 'Gehieneko edo gutxieneko muga sartu behar duzu, edo biak.';
$string['gradelimitsbutnoitem'] = 'Kalifikazio-elementu bat aukeratu behar duzu.';
$string['gradesmustbenumeric'] = 'Gutxieneko eta gehieneko kalifikazioak zenbakizkoak izan behar dia (edo zuri utzi).';
$string['groupingnoaccess'] = 'Orain ez zara atal honetarako sarbidea duen talde bateko partaide.';
$string['isempty'] = 'hutsik dago';
$string['isequalto'] = 'honen berdina';
$string['isnotempty'] = 'ez dago hutsik';
$string['none'] = '(bat ere ez)';
$string['notavailableyet'] = 'Ez dago oraingoz eskuragarri';
$string['requires_completion_0'] = 'Ez dago eskuragarri <strong>{$a}</strong> jarduera osatu gabe badago.';
$string['requires_completion_1'] = 'Ez dago eskuragarri <strong>{$a}</strong>  jarduera "osatuta" markatu arte.';
$string['requires_completion_2'] = 'Ez dago eskuragarri <strong>{$a}</strong> jarduera osatu eta gainditu arte.';
$string['requires_completion_3'] = 'Ez dago eskuragarri, ez bada <strong>{$a}</strong> osatuta eta suspendituta.';
$string['requires_date'] = 'Eskuragarri {$a}-tik aurrera.';
$string['requires_date_before'] = 'Eskuragarri {$a} arte.';
$string['requires_date_both'] = 'Eskuragarri {$a->from}-tik {$a->until}-ra';
$string['requires_date_both_single_day'] = 'Eskuragarri hemen: {$a}.';
$string['requires_grade_any'] = 'Ez dago eskuragarri <strong>{$a}</strong>-n kalifikazio izan arte.';
$string['requires_grade_max'] = 'Ez dago eskuragarri <strong>{$a}</strong>-n ez baduzu puntuazio egokia.';
$string['requires_grade_min'] = 'Ez dago eskuragarri <strong>{$a}</strong>-n eskatutako puntuazioa lortu arte.';
$string['requires_grade_range'] = 'Ez dago eskuragarri <strong>{$a}</strong>-n pntuazio jakin bat lortzen ez baduzu.';
$string['requires_grouping'] = 'Eskuragarria soilik <strong>{$a}</strong> talde-multzorako.';
$string['requires_user_field_contains'] = 'Ez dago eskuragarri zure <strong>{$a->field}</strong> -k <strong>{$a->value}</strong> izan arte.';
$string['requires_user_field_doesnotcontain'] = 'Ez dago eskuragarri zure <strong>{$a->field}</strong> -k <strong>{$a->value}</strong> izan arte.';
$string['requires_user_field_endswith'] = 'Ez dago eskuragarri zure <strong>{$a->field}</strong>  <strong>{$a->value}</strong>-rekin amaitu arte.';
$string['requires_user_field_isempty'] = 'Ez dago eskuragarri zure <strong>{$a->field}</strong>  hutsik egon arte.';
$string['requires_user_field_isequalto'] = 'Ez dago eskuragarri zure <strong>{$a->field}</strong>  <strong>{$a->value}</strong> izan arte.';
$string['requires_user_field_isnotempty'] = 'Ez dago eskuragarri zure <strong>{$a->field}</strong>  hutsik egon arte.';
$string['requires_user_field_startswith'] = 'Ez da eskuragarria izango <strong>{$a->field}</strong> eremuak  <strong>{$a->value}</strong> hasiera izan ezean.';
$string['showavailability'] = 'Sarbidea ukatua dagoen bitartean';
$string['showavailability_hide'] = 'Jarduera guztiz ezkutatu ikastaroan eta kalifikazio-liburuan';
$string['showavailability_show'] = 'Erakutsi jarduera grisean, murrizketaren inguruko informazioarekin.';
$string['showavailabilitysection'] = 'Atala eskuragarri izan aurretik:';
$string['showavailabilitysection_hide'] = 'Ezkutatu atala erabat';
$string['showavailabilitysection_show'] = 'Erakutsi atala grisean, murrizketaren inguruko informazioarekin.';
$string['startswith'] = 'honela hasten da';
$string['userfield'] = 'Erabiltzailearen eremua';
$string['userfield_help'] = 'Eskuragarritasuna muga dezakezu erabiltzailearen profileko eremu batean oinarrituta.';
$string['userrestriction_hidden'] = 'Murriztuta (guztiz ezkutuan, mezurik ez): {$a}';
$string['userrestriction_visible'] = 'Murriztuta: {$a}';
