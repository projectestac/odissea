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
 * Strings for component 'debug', language 'ro', version '4.5'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Nu s-a găsit plugin-ul de autentificare {$a}.';
$string['blocknotexist'] = 'Blocul {$a} nu există.';
$string['cannotbenull'] = '{$a} nu poate fi nul!';
$string['cannotdowngrade'] = 'Nu se poate face downgrade la {$a->plugin} de la {$a->oldversion} la {$a->newversion}.';
$string['cannotfindadmin'] = 'Nu s-a găsit un administrator!';
$string['cannotinitpage'] = 'Nu se poate iniţializa complet pagina: id {$a->id} {$a->name} invalid';
$string['cannotsetuptable'] = 'Tabelele {$a} NU au putut fi create cu succes!';
$string['codingerror'] = 'S-a detectat o eroare de codare, trebuie revizuită de un programator: {$a}';
$string['configmoodle'] = 'Moodle nu a fost configurat încă. Trebuie să configuraţi mai întâi config.php.';
$string['debuginfo'] = 'Informații despre depanare';
$string['erroroccur'] = 'S-a produs o eroare în timpul acestui proces';
$string['invalidarraysize'] = 'Mărime incorectă a vectorilor în parametrii lui {$a}';
$string['invalideventdata'] = 'S-au trimis date despre eveniment incorecte: {$a}';
$string['invalidparameter'] = 'A fost detectată o valoare nevalidă a parametrului';
$string['invalidresponse'] = 'S-a detectat o valoare-răspuns invalidă, execuţia nu poate continua.';
$string['line'] = 'Linie';
$string['missingconfigversion'] = 'Tabelul de configurare nu conține versiunea. Nu se poate continua.';
$string['modulenotexist'] = 'Modulul {$a} nu există';
$string['morethanonerecordinfetch'] = 'S-a găsit mai mult decât o înregistrare în fetch()!';
$string['mustbeoveride'] = 'Metoda abstractă {$a} trebuie supracomandată.';
$string['noadminrole'] = 'Nu s-a găsit niciun rol de administrator';
$string['noblocks'] = 'Nu s-a instalat niciun bloc!';
$string['nocate'] = 'Nu există categorii!';
$string['nomodules'] = 'Nu s-au găsit module!!';
$string['nopageclass'] = 'S-a(u) importat {$a}, dar nu s-au găsit clase de pagină';
$string['noreports'] = 'Nu există niciun raport disponibil';
$string['notables'] = 'Nu există tabele!';
$string['outputbuffer'] = 'Date tampon de ieșire';
$string['phpvaroff'] = 'Variabila de server PHP \'{$a->name}\' ar trebui să fie dezactivată - {$a->link}';
$string['phpvaron'] = 'Variabila de server PHP \'{$a->name}\' nu este dezactivată - {$a->link}';
$string['reactive_highlightoff'] = 'Evidențiere ACTIVATĂ';
$string['reactive_highlighton'] = 'Evidențiere DEZACTIVATĂ';
$string['reactive_instances'] = 'Instanțe reactive:';
$string['reactive_noinstances'] = 'Această pagină nu are instanțe reactive.';
$string['reactive_pin'] = 'Fixați';
$string['reactive_readmodeoff'] = 'Mod de citire DEZACTIVAT';
$string['reactive_readmodeon'] = 'Mod de citire ACTIVAT';
$string['reactive_resetpanel'] = 'Resetare panou';
$string['reactive_saveingwarning'] = 'Avertisment: Editarea status-ul poate cauza rezultate neașteptate.';
$string['reactive_statedata'] = 'Informații de status';
$string['reactive_unpin'] = 'Desprindeți';
$string['sessionmissing'] = 'Obiectul {$a} lipseste din sesiune';
$string['sqlrelyonobsoletetable'] = 'Acest SQL se bazează pe tabel(e) învechit(a): {$a}! Codul Dvs. trebuie revizuit de un developer.';
$string['stacktrace'] = 'Urmă de stivă';
$string['withoutversion'] = 'Fişierul principal version.php lipseşte, nu poate fi citit sau este corupt.';
$string['xmlizeunavailable'] = 'Funcţiile xmlize nu sunt disponibile';
