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
 * Strings for component 'tool_behat', language 'ca', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Aquesta eina d\'administració ajuda els desenvolupadors i creadors de proves a crear els fitxers .feature que descriuen les funcionalitats de Moodle i a executar-los de forma automàtica. Les <em>step definitions</em> disponibles per emprar-les en fitxers .feature s\'enumeren tot seguit.';
$string['allavailablesteps'] = 'Totes les definicions de passos disponibles';
$string['errorbehatcommand'] = 'S\'ha produït una errada executant el behat des de la línia d\'ordres. Proveu a executar "{$a} --help" de forma manual des d\'un terminal per saber més sobre el problema.';
$string['errorcomposer'] = 'Les dependències de Composer no estan instal·lades.';
$string['errordataroot'] = 'CFG->behat_dataroot no està configurada o és invàlida.';
$string['errorsetconfig'] = 'Cal establir les variables $CFG->behat_dataroot, $CFG->behat_prefix i $CFG->behat_wwwroot al fitxer config.php.';
$string['erroruniqueconfig'] = 'Cal que els valors de les variables $CFG->behat_dataroot, $CFG->behat_prefix i $CFG->behat_wwwroot siguin diferents als valors de  $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot i $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Arguments del valor del camp';
$string['fieldvalueargument_help'] = 'Aquest argument ha de ser completat per un valor de camp; hi ha molts tipus de camp: els simples, com ara caselles de verificació, selecciona o àrees de text, o els complexos, com ara selectors de dades. Podeu anar a els <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">Valors de camp</a> per veure el valor del camp esperat en funció del tipus de camp que  proporcioneu.';
$string['giveninfo'] = 'Donat. Processos per configurar l\'entorn.';
$string['infoheading'] = 'Informació';
$string['installinfo'] = 'Llegeix {$a} per la instal·lació i la informació de les proves d\'execució.';
$string['newstepsinfo'] = 'Llegeix {$a} per obtindre informació sobre com afegir noves definicions de passos.';
$string['newtestsinfo'] = 'Llegeix {$a} per obtindre informació sobre com escriure proves noves';
$string['nostepsdefinitions'] = 'No hi ha definicions de passos que utilitzin aquests filtres.';
$string['pluginname'] = 'Proves d\'acceptació';
$string['stepsdefinitionscomponent'] = 'Àrea';
$string['stepsdefinitionscontains'] = 'Conté';
$string['stepsdefinitionsfilters'] = 'Definicions de passos';
$string['stepsdefinitionstype'] = 'Tipus';
$string['theninfo'] = 'Llavors. Comprovacions per assegurar que els resultats són els esperats.';
$string['unknownexceptioninfo'] = 'Hi ha hagut un problema amb Selenium o amb el navegador. Intenteu actualitzar Selenium a la darrera versió. Error:';
$string['viewsteps'] = 'Filtre';
$string['wheninfo'] = 'Quan. Accions que provoquen un esdeveniment';
$string['wrongbehatsetup'] = 'Alguna cosa funciona malament amb la configuració de «behat», i per això no es poden enumerar les <em>step definitions</em>:
>errormsg}</b><br/><br/>Comproveu:<ul> <li>$CFG->behat_dataroot, $CFG->behat_prefix i $CFG->behat_wwwroot estan configurats a config.php amb  valors diferents de $CFG->dataroot, $CFG->prefix i $CFG->wwwroot.</li>
<li>Heu executat "{$a->behatinit}" des del vostre directori arrel de Moodle.</li>
<li>Les dependències s\'han instal·lat a vendor/ i el fitxer {$a->behatcommand} té permisos d\'execució.</li></ul>
>';
