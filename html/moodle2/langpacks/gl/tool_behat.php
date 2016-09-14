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
 * Strings for component 'tool_behat', language 'gl', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta ferramenta de administración permítelle aos desenvolvedores e creadores de probas xerar ficheiros .feature que describen as funcionalidades de Moodle e execútanse automaticamente. As definicións dispoñíbeis dos pasos para o seu uso nos ficheiros .feature enuméranse a seguir.';
$string['allavailablesteps'] = 'Todas as definicións de pasos dispoñíbeis';
$string['errorbehatcommand'] = 'Produciuse un erro durante a execución da orde behat na liña de ordes. Execute manualmente «{$a} --help» desde a liña de ordes para saber máis sobre este erro.';
$string['errorcomposer'] = 'Non están instaladas as dependencias do compositor (composer).';
$string['errordataroot'] = '$CFG->behat_datarootno non está estabelecido ou é incorrecto.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot necesitan estabelecerse en config.php.';
$string['erroruniqueconfig'] = 'Os valores de $CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot necesitan ser diferentes  aos valores de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot e $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Argumentos de valor do campo';
$string['fieldvalueargument_help'] = 'Este argumento debería de completarse por un valor de campo; hai moitos tipos de campos: os sinxelos como as caixas de verificación, seleccións ou áreas de texto; ou campos complexos como os selectores de datos. Pode revisar <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">Field values (Valores de campos)</a> para ver os valores de campo agardados dependendo do tipo de campo que forneza.';
$string['giveninfo'] = 'Dado. Procesos para configurar o entorno';
$string['infoheading'] = 'Información';
$string['installinfo'] = 'Lea {$a} para ver información sobre a instalación e execución de probas';
$string['newstepsinfo'] = 'Lea {$a} para ver información sobre como engadir novas definicións de pasos';
$string['newtestsinfo'] = 'Lea {$a} para ver información sobre como escribir novas probas';
$string['nostepsdefinitions'] = 'Non hai definicións de pasos que coincidan con estos filtros';
$string['pluginname'] = 'Proba de aceptación';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contén';
$string['stepsdefinitionsfilters'] = 'Definicións de pasos';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Entón. Revisando para asegurar que os resultados sexan os agardados';
$string['unknownexceptioninfo'] = 'Produciuse un problema con Selenium ou co seu navegador. Asegúrese de que está usando a versión máis recente de Selenium. Erro:';
$string['viewsteps'] = 'Filtro';
$string['wheninfo'] = 'Cando. Accións que provocan unha actividade';
$string['wrongbehatsetup'] = 'Algo está mal nos axustes de behat, polo que as definicións dos pasos non poden listarse: <b>{$a->errormsg}</b><br/><br/>Revise que :<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot estean estabelecidos en config.php con diferentes valores a $CFG->dataroot, $CFG->prefix e $CFG->wwwroot.</li>
<li>Vostede executou «{$a->behatinit}» desde o seu directorio raíz de Moodle.</li>
<li>As dependencias están instaladas no ficheiro {$a->behatcommand} do vendedor e ten permisos para execución.</li></ul>';
