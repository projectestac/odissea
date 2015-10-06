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
 * Strings for component 'repository_boxnet', language 'gl', branch 'MOODLE_28_STABLE'
 *
 * @package   repository_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Chave da API';
$string['apiv1migration_message_content'] = 'Como parte da recente actualización de Moodle (2.6, 2.5.3, 2.4.7), o engadido do repositorio Box foi desactivado. Para volver activalo, necesita configuralo de novo, tal e como se describe na documentación {$a->docsurl}.';
$string['apiv1migration_message_small'] = 'Este engadido foi desactivado, xa que require configuración, tal e como se describe na documentación sobre a migración de Box APIv1.';
$string['apiv1migration_message_subject'] = 'Información importante respecto ao engadido do repositorio Box';
$string['boxnet:view'] = 'Ver o repositorio de box.net';
$string['cannotcreatereference'] = 'Non é posíbel crear unha referencia, non hai permisos abondo para compartir o ficheiro en Box.';
$string['clientid'] = 'ID do cliente';
$string['clientsecret'] = 'Secreto do cliente';
$string['configplugin'] = 'Configuración de Box.net';
$string['filesourceinfo'] = 'Box ({$a->fullname}): {$a->filename}';
$string['information'] = 'Obteña unha chave para a API da <a href="http://www.box.net/developers/services">páxina de desenvolvemento de Box.net</a> para o seu sitio Moodle.';
$string['invalidpassword'] = 'Contrasinal incorrecto';
$string['migrationadvised'] = 'Polo que parece, Vostede estaba usando Box coa API versión 1, Executou vostede a <a href="{$a}">ferramenta para a migración</a> para converter as referencias antigas?';
$string['migrationinfo'] = 'Como parte da migración á nova API fornecida por Box, as súas referencias a ficheiros tiveron que seren migradas. Desafortunadamente, o sistema de referencias non é compatible coa API v2, polo que teremos que descargalas e convertelas en ficheiros reais.</p>
<p>Teña presente que a migración pode <strong>levar moito tempo</strong>, dependendo de cantas referencias se estean a usar, e como de grandes sexan os seus ficheiros.</p>
<p>Pode executar a ferramenta para a migración premendo no botón inferior, ou tamén, executando o script por liña de ordes: repository/boxnet/cli/migrationv1.php.
p>Pode atopar máis detalles <a href="{$a->docsurl}">aquí</a>.</p>';
$string['migrationtool'] = 'Ferramenta para a migración de Box APIv1';
$string['nullfilelist'] = 'Non hai ficheiros neste repositorio';
$string['password'] = 'Contrasinal';
$string['pluginname'] = 'Box.net';
$string['pluginname_help'] = 'Repositorio en Box.net';
$string['runthemigrationnow'] = 'Execute agora a ferramenta demigración';
$string['saved'] = 'Dato gardado en Box.net';
$string['shareurl'] = 'Compartir o URL';
$string['username'] = 'Nome de usuario para Box.net';
$string['warninghttps'] = 'Box require que o seu sitio estea usando HTTPS para que poida funcionar o repositorio.';
