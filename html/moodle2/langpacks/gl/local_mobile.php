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
 * Strings for component 'local_mobile', language 'gl', branch 'MOODLE_32_STABLE'
 *
 * @package   local_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpermissions'] = 'Conceder permisos a un rol de usuario autenticado';
$string['allowpermissionsdescription'] = 'Editar o rol de usuario autenticado e conceder o permiso moodle/webservice:createtoken';
$string['cannotcreatetoken'] = 'A xeración automática do token non está dispoñible para os administradores do sitio (deben crear un token manualmente no sitio)';
$string['checkpluginconfiguration'] = 'Comprobar a configuración do módulo';
$string['clickheretolaunchtheapp'] = 'Por favor, faga clic aquí se a aplicación non abre automaticamente';
$string['customlangstrings'] = 'Cadeas de idioma personalizadas';
$string['customlangstrings_desc'] = 'As palabras e frases que se mostran na  aplicación pódense personalizar aquí. Introduza cada cadea de idioma personalizada nunha nova liña con formato: identificador de cadea, cadea de idioma personalizada e código de idioma, separados por caracteres de canal. Por exemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Para obter unha lista completa de identificadores de cadea, consulte
<a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/build/lang/en.json">esta lista</a>.';
$string['custommenuitems'] = 'Elementos de menú personalizados';
$string['custommenuitems_desc'] = 'Pódense engadir elementos adicionais ao menú principal da aplicación especificándoos aquí. Introduza cada elemento de menú personalizado nunha nova liña con formato: texto de elemento, ligazón URL, método de apertura de ligazón (inappbrowser, navegador ou incrustado) e código de idioma (opcional, para mostrar o elemento aos usuarios do dioma especificado) separados por barras verticais (pipe). Por exemplo:
<pre>
Axuda de App | https://someurl.xyz/help | Inappbrowser | en
Visite o noso SIS | https://someurl.xyz | Navegador | en
As miñas cualificacións | https://someurl.xyz/local/mygrades/index.php | Incorporado | en
As miñas cualificacións  | https://someurl.xyz/local/mygrades/index.php | Incrustado | es
</pre>
Utilice inappbrowser cando desexe abrir a ligazón nun navegador sen saír da aplicación, utilice onavegador para abrir a ligazón no navegador predeterminado do dispositivo e incrustado se desexa mostrar a ligazón incrustado nunha nova páxina na aplicación';
$string['disabledfeatures'] = 'Funcións deshabilitadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí as características que desexe deshabilitar na aplicación Mobile para o teu sitio. Teña en conta que algunhas das características aquí citadas poderían estar deshabilitadas por outro axuste do sitio. Terás que pechar a sesión e iniciar a sesión de novo  na aplicación para ver os cambios.';
$string['enableadditionalservice'] = 'Activar o servizo dos recursos adicionais de Moodle Mobile';
$string['enableadditionalservicedescription'] = 'Este servizo debe de estar activado';
$string['forcelogout'] = 'Forzar saída';
$string['forcelogout_desc'] = 'Se está activada, a opción da aplicación «Cambiar sitio» substitúese por «Pechar sesión». Isto fai que o usuario estea completamente desconectado. Polo tanto, deben volver a escribir o seu contrasinal a próxima vez que desexe acceder ao sitio.';
$string['local_mobiledescription'] = 'Módulo que estende as características do servizo Mobile';
$string['local_mobilesettings'] = 'Axustes';
$string['mainmenu'] = 'Menú principal';
$string['mobilefeatures'] = 'Características de Mobile';
$string['pluginname'] = 'Características adicionais Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'O engadido local de Moodle Mobile debe estar habilitado e configurado para poder executar a aplicación';
$string['remoteaddons'] = 'Complementos remotos';
