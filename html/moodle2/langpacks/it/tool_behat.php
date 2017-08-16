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
 * Strings for component 'tool_behat', language 'it', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Tool amministrativo per aiutare sviluppatori e tester a creare file .feature che descrivono le funzionalità di Moodle. I file potranno essere eseguiti automaticamente. Le definizioni disponibili degli step sono elencate sotto.';
$string['allavailablesteps'] = 'Tutte le definizioni disponibili degli step';
$string['errorbehatcommand'] = 'Si è verificato un errore durante l\'elaborazione CLI di behat. Prova a lanciare manualmente "{$a} --help" via CLI per ottenere maggiori informazioni sul problema.';
$string['errorcomposer'] = 'Le dipendenze di Composer non sono installate.';
$string['errordataroot'] = '$CFG->behat_dataroot non impostata o non valida.';
$string['errorsetconfig'] = '$CFG->behat_dataroot,
$CFG->behat_prefix and $CFG->behat_wwwroot devono essere impostate in config.php.';
$string['erroruniqueconfig'] = 'I valori di
$CFG->behat_dataroot,
$CFG->behat_prefix and $CFG->behat_wwwroot devono essere diversi da
$CFG->dataroot,
$CFG->prefix,
$CFG->wwwroot,
$CFG->phpunit_dataroot and $CFG->phpunit_prefix values.';
$string['fieldvalueargument'] = 'Argomenti valore del campo';
$string['fieldvalueargument_help'] = 'L\'argomento deve essere completato da un valore del campo. Esistono diversi tipi di campo, alcuni semplici come caselle di spunta, menu a tendina o aree d testo, altri più complessi come i campi data. Per conoscere il valore atteso in funzione del tipo di campo è possibile consultare <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">Field values</a>.';
$string['giveninfo'] = 'Fornito. Procedure per impostare l\'ambiente';
$string['infoheading'] = 'Informazioni';
$string['installinfo'] = 'Per ulteriori informazioni sull\'installazione e lo svolgimento di test: {$a}';
$string['newstepsinfo'] = 'Per ulteriori informazioni su come aggiungere definizioni di step: {$a}';
$string['newtestsinfo'] = 'Per per ulteriori informazioni su come preparare test: {$a}';
$string['nostepsdefinitions'] = 'Non sono presenti definizioni di step corrispondenti al filtro';
$string['pluginname'] = 'Test di accettazione';
$string['stepsdefinitionscomponent'] = 'Area';
$string['stepsdefinitionscontains'] = 'Contiene';
$string['stepsdefinitionsfilters'] = 'Definizione step';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Poi. Verifiche per assicurarsi che i risultati ottenuti siano quelli attesi.';
$string['unknownexceptioninfo'] = 'Si è verificato un errore in Selenium o nel browser. Per favore accertati di usare la versione più recente di Selenium: Errore:';
$string['viewsteps'] = 'Filtro';
$string['wheninfo'] = 'Quando. Azioni che generano un evento';
$string['wrongbehatsetup'] = 'Il setup bheat presenta dei problemi e non è possibile elencare le definizioni dei passi:<b>{$a->errormsg}</b><br/><br/>E\' necessario accertarsi che:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot siano impostate nel file config.php con valori diversi da  $CFG->dataroot, $CFG->prefix e $CFG->wwwroot.</li>
<li>il comando "{$a->behatinit}" sia stato lanciato dalla cartella radice di Moodle</li>
<li>le dipendenze sono state installate in vendor/ e il file {$a->behatcommand} abbia i permessi per essere eseguito </li></ul>';
