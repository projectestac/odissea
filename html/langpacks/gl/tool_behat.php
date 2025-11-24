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
 * Strings for component 'tool_behat', language 'gl', version '4.5'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta ferramenta de administración permítelle aos desenvolvedores e creadores de probas xerar ficheiros .feature que describen as funcionalidades de Moodle e execútanse automaticamente. As definicións dispoñíbeis dos pasos para o seu uso nos ficheiros .feature enuméranse a seguir.';
$string['allavailablesteps'] = 'Todas as definicións de pasos dispoñíbeis';
$string['errorbehatcommand'] = 'Produciuse un erro durante a execución da orde behat na liña de ordes. Execute manualmente «{$a} --help» dende a liña de ordes para saber máis sobre este erro.';
$string['errorcomposer'] = 'Non están instaladas as dependencias do compositor (composer).';
$string['errordataroot'] = '$CFG->behat_datarootno non está estabelecido ou é incorrecto.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot necesitan estabelecerse en config.php.';
$string['erroruniqueconfig'] = 'Os valores de $CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot necesitan ser diferentes aos valores de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot e $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Argumentos de valor do campo';
$string['fieldvalueargument_help'] = 'Este argumento debería completarse cun valor de campo. Hai moitos tipos de campo, incluídos os sinxelos como caixas de selección, seleccións ou áreas de texto ou complexos como os seleccionadores de datas. Consulte a documentación dev <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Probas de aceptación</a> para detalles sobre os valores de campo agardados.';
$string['giveninfo'] = 'Dado. Procesos para configurar o contorno';
$string['infoheading'] = 'Información';
$string['installinfo'] = 'Lea {$a} para ver información sobre a instalación e execución de probas';
$string['newstepsinfo'] = 'Lea {$a} para ver información sobre como engadir novas definicións de pasos';
$string['newtestsinfo'] = 'Lea {$a} para ver información sobre como escribir novas probas';
$string['nostepsdefinitions'] = 'Non hai definicións de pasos que coincidan con estos filtros';
$string['pluginname'] = 'Proba de aceptación';
$string['privacy:metadata'] = 'O engadido de Proba de aceptación non almacena ningún dato persoal.';
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
<li>Vostede executou «{$a->behatinit}» dende o seu directorio raíz de Moodle.</li>
<li>As dependencias están instaladas no ficheiro {$a->behatcommand} do vendedor e ten permisos para execución.</li></ul>';
