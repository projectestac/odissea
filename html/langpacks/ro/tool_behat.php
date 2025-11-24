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
 * Strings for component 'tool_behat', language 'ro', version '4.5'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Acest instrument de administrare ajută dezvoltatorii și testatorii să creeze fișiere .feature care descriu funcționalitățile Moodle și să le ruleze automat. Definițiile de pași disponibile pentru utilizare în fișierele .feature sunt enumerate mai jos.';
$string['allavailablesteps'] = 'Toate definițiile de pași disponibile';
$string['errorbehatcommand'] = 'Eroare la executarea comenzii CLI. Încercați să rulați „{$a} --help” manual din CLI pentru a afla mai multe despre problemă.';
$string['errorcomposer'] = 'Dependențele de compozitor nu sunt instalate.';
$string['errordataroot'] = '$ CFG-> behat_dataroot nu este setat sau nu este valid.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot need to be set in config.php.';
$string['erroruniqueconfig'] = 'Valorile $CFG->behat_dataroot, $CFG->behat_prefix și $CFG->behat_wwwroot trebuie să fie diferite de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot și $CFG- >valori phpunit_prefix.<br/>Sau, dacă $CFG->behat_prefix este același, $CFG->behat_dbname sau $CFG->behat_dbhost trebuie să fie diferit de $CFG->phpunit_dbname și $CFG->phpunit_dbhost și de la $ CFG->dbname și $CFG->dbhost.';
$string['fieldvalueargument'] = 'Argumente privind valoarea câmpului';
$string['fieldvalueargument_help'] = 'Acest argument ar trebui completat cu o valoare de câmp. Există multe tipuri de câmpuri, inclusiv cele simple, cum ar fi casetele de selecție, selecțiile sau zonele de text, sau cele complexe, cum ar fi selectoarele de dată. Consultați documentația dezvoltatorului <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Teste de acceptanță</a> pentru detalii despre valorile câmpurilor așteptate.';
$string['giveninfo'] = 'Dat. Procese de configurare a mediului';
$string['infoheading'] = 'Informații';
$string['installinfo'] = 'Citește {$a} pentru informații despre instalare și teste de execuție';
$string['newstepsinfo'] = 'Citește {$a} pentru informații despre cum să adăugați noi definiții de pași';
$string['newtestsinfo'] = 'Citește {$a} pentru informații despre cum să scrieți noi teste';
$string['nostepsdefinitions'] = 'Nu există definiții de pași care să corespundă acestui filtru';
$string['pluginname'] = 'Testarea de acceptare';
$string['privacy:metadata'] = 'Plugin-ul de testare a acceptării nu stochează date personale.';
$string['stepsdefinitionscomponent'] = 'Zonă';
$string['stepsdefinitionscontains'] = 'Conține';
$string['stepsdefinitionsfilters'] = 'Definiții pas';
$string['stepsdefinitionstype'] = 'Tip';
$string['theninfo'] = 'Apoi. Verificările pentru a se asigura că rezultatele sunt cele așteptate';
$string['unknownexceptioninfo'] = 'A apărut o problemă cu Selenium sau browserul dvs. Vă rugăm să vă asigurați că utilizați cea mai recentă versiune de Selenium. Eroare:';
$string['viewsteps'] = 'Filtru';
$string['warndirrootconfigfound'] = 'Un fișier de configurare a fost găsit la {$a}. Acest fișier nu este actualizat automat și poate deveni învechit. Vă recomandăm să eliminați acest fișier.';
$string['wheninfo'] = 'Când. Acțiune care provoacă un eveniment';
$string['wrongbehatsetup'] = 'Ceva nu este în regulă cu configurarea și, prin urmare, definițiile pașilor nu pot fi listate: <b> {$a->errormsg} </b> <br/> <br/> Vă rugăm să verificați: <ul>
<li> $CFG->behat_dataroot, $CFG->behat_prefix și $CFG->behat_wwwroot sunt setate în config.php cu valori diferite de $ CFG-> dataroot, $CFG->prefix și $CFG->wwwroot. </ li>
<li> Ați rulat „{$a->behatinit}” din directorul rădăcină Moodle. </li>
<li> Dependențele sunt instalate în furnizor / și fișierul {$a->behatcommand} are permisiuni de execuție. </li> </ul>';
