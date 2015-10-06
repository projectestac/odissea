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
 * Strings for component 'plugin', language 'gl', branch 'MOODLE_28_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accións';
$string['availability'] = 'Dispoñibilidade';
$string['checkforupdates'] = 'Comprobar as actualizacións dispoñíbeis';
$string['checkforupdateslast'] = 'A última comprobación fíxose o {$a}';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyupload'] = 'Enviar';
$string['detectedmisplacedplugin'] = 'O engadido «{$a->component}» está instalado nunha localización incorrecta «{$a->current}», a localización agardada é «{$a->expected}»';
$string['displayname'] = 'Nome do engadido';
$string['err_response_curl'] = 'Non foi posíbel obter as actualizacións dispoñíbeis - produciuse un erro non agardado de cURL.';
$string['err_response_format_version'] = 'Formato de resposta con versión non agardada. Comprobe de novo as actualizacións dispoñíbeis.';
$string['err_response_http_code'] = 'Non foi posíbel obter as actualizacións dispoñíbeis - código de resposta HTTP non agardado.';
$string['filterall'] = 'Amosar todo';
$string['filtercontribonly'] = 'Amosar só os engadidos adicionais';
$string['filtercontribonlyactive'] = 'Amosando só os engadidos adicionais';
$string['filterupdatesonly'] = 'Amosar só os actualizábeis';
$string['filterupdatesonlyactive'] = 'Amosando só os actualizábeis';
$string['moodleversion'] = 'Moodle {$a}';
$string['nonehighlighted'] = 'Ningún engadido require a súa atención agora';
$string['nonehighlightedinfo'] = 'Presentar a lista de todos os engadidos instalados de calquera forma';
$string['noneinstalled'] = 'Ningún engadido deste tipo está instalado';
$string['notdownloadable'] = 'Non é posíbel descargar o paquete';
$string['notdownloadable_help'] = 'Non foi posíbel descargar automaticamente o paquete ZIP coa actualización. Vexa a páxina de documentación para obter máis axuda.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Notas';
$string['notwritable'] = 'Os ficheiros de engadidos non son escribíbeis';
$string['notwritable_help'] = 'Vostede activou o despregue de actualizacións automáticas e hai unha actualización dispoñíbel para este engadido. Porén, os ficheiros do engadido non son escribíbeis para o servidor web, polo que, polo momento, non foi posíbel instalar automaticamente a actualización.

Faga que o cartafol do engadido e todos os seus contidos sexan escribíbeis para poder instalar automaticamente a actualización dispoñíbel.';
$string['notwritable_link'] = 'admin/mdeploy/notwritable';
$string['numdisabled'] = 'Desactivado: {$a}';
$string['numextension'] = 'Colaboracións: {$a}';
$string['numtotal'] = 'Instalado: {$a}';
$string['numupdatable'] = 'Actualizacións dispoñíbeis: {$a}';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['pluginchecknotice'] = 'Esta páxina presenta os engadidos que poden requirir a súa atención durante a actualización. Os elementos resaltados inclúen novos engadidos que están a pique de seren instalados, os que van ser actualizados e os engadidos anteriores que agora faltan. Os engadidos adicionais tamén se destacan se existe unha actualización para eles. Recomendase que comprobe se existen versións máis recentes dos engadidos e que lles actualice o seu código fonte antes de continuar con esta actualización de Moodle.';
$string['plugindisable'] = 'Desactivar';
$string['plugindisabled'] = 'Desactivado';
$string['pluginenable'] = 'Activar';
$string['pluginenabled'] = 'Activado';
$string['release'] = 'Publicación';
$string['requiredby'] = 'Requirido por: {$a}';
$string['requires'] = 'Require';
$string['rootdir'] = 'Directorio';
$string['settings'] = 'Axustes';
$string['showall'] = 'Recargar e amosar todos os engadidos';
$string['somehighlighted'] = 'Número de engadidos que requiren a súa atención: {$a}';
$string['somehighlightedinfo'] = 'Presentar a lista completa dos engadidos instalados';
$string['somehighlightedonly'] = 'Presentar só os engadidos que requiren a súa atención';
$string['source'] = 'Orixe';
$string['sourceext'] = 'Adicional';
$string['sourcestd'] = 'Estándar';
$string['status'] = 'Estado';
$string['status_delete'] = 'Para ser borrado';
$string['status_downgrade'] = 'Xa está instalada unha versión superior!';
$string['status_missing'] = 'Ausente do disco';
$string['status_new'] = 'Para ser instalado';
$string['status_nodb'] = 'Non hai unha base de datos';
$string['status_upgrade'] = 'Para ser anovado';
$string['status_uptodate'] = 'Instalado';
$string['systemname'] = 'Identificador';
$string['type_auth'] = 'Método de autenticación';
$string['type_auth_plural'] = 'Métodos de autenticación';
$string['type_availability'] = 'Restrición de dispoñibilidade';
$string['type_availability_plural'] = 'Restricións de dispoñibilidade';
$string['type_block'] = 'Bloque';
$string['type_block_plural'] = 'Bloques';
$string['type_cachelock'] = 'Manipulador de bloqueo da caché';
$string['type_cachelock_plural'] = 'Manipuladores de bloqueo da caché';
$string['type_cachestore'] = 'Almacén de caché';
$string['type_cachestore_plural'] = 'Almacéns de caché';
$string['type_calendartype'] = 'Tipo de calendario';
$string['type_calendartype_plural'] = 'Tipos de calendario';
$string['type_coursereport'] = 'Informe do curso';
$string['type_coursereport_plural'] = 'Informes do curso';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editores';
$string['type_enrol'] = 'Método de matriculación';
$string['type_enrol_plural'] = 'Métodos de matriculación';
$string['type_filter'] = 'Filtro de texto';
$string['type_filter_plural'] = 'Filtros de texto';
$string['type_format'] = 'Formato do curso';
$string['type_format_plural'] = 'Formatos de curso';
$string['type_gradeexport'] = 'Método de exportar cualificacións';
$string['type_gradeexport_plural'] = 'Métodos de exportar cualificacións';
$string['type_gradeimport'] = 'Método de importar cualificacións';
$string['type_gradeimport_plural'] = 'Métodos de importar cualificacións';
$string['type_gradereport'] = 'Informe do libro de cualificacións';
$string['type_gradereport_plural'] = 'Informes do libro de cualificacións';
$string['type_gradingform'] = 'Método avanzado de cualificación';
$string['type_gradingform_plural'] = 'Métodos avanzados de cualificación';
$string['type_local'] = 'Engadido local';
$string['type_local_plural'] = 'Engadidos locais';
$string['type_message'] = 'Procesador de mensaxes';
$string['type_message_plural'] = 'Procesadores de mensaxes';
$string['type_mnetservice'] = 'Servizo MNet';
$string['type_mnetservice_plural'] = 'Servizos MNet';
$string['type_mod'] = 'Módulo de actividade';
$string['type_mod_plural'] = 'Módulos de actividade';
$string['type_plagiarism'] = 'Engadido de plaxio';
$string['type_plagiarism_plural'] = 'Engadidos de plaxio';
$string['type_portfolio'] = 'Portafolio';
$string['type_portfolio_plural'] = 'Portafolios';
$string['type_profilefield'] = 'Tipo do campo de perfil';
$string['type_profilefield_plural'] = 'Tipos de campo de perfil';
$string['type_qbehaviour'] = 'Comportamento da pregunta';
$string['type_qbehaviour_plural'] = 'Comportamento das preguntas';
$string['type_qformat'] = 'Formato para importar/exportar preguntas';
$string['type_qformat_plural'] = 'Formatos para importar/exportar preguntas';
$string['type_qtype'] = 'Tipo de pregunta';
$string['type_qtype_plural'] = 'Tipos de pregunta';
$string['type_report'] = 'Informe do sitio';
$string['type_report_plural'] = 'Informes';
$string['type_repository'] = 'Repositorio';
$string['type_repository_plural'] = 'Repositorios';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temas';
$string['type_tool'] = 'Ferramenta de administración';
$string['type_tool_plural'] = 'Ferramentas de administración';
$string['type_webservice'] = 'Protocolo de servizo web';
$string['type_webservice_plural'] = 'Protocolos de servizo web';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Está a piques de desinstalar o engadido <em>{$a->name}</em>. Isto borrará completamente todo o asociado a este engadido na base de datos, incluíndo a súa configuración, rexistros, ficheiros do usuario xestionados polo engadido, etc. No hai volta atrás e Moodle por si mesmo non crea ningunha copia de seguranza para recuperación. Confirma que quere continuar?';
$string['uninstalldelete'] = 'Todos os datos asociados co engadido <em>{$a->name}</em> foron eliminados da base de datos. Para impedir que o engadido se reinstale a si mesmo, debe retirar manualmente o seu cartafol <em>{$a->rootdir}</em> do servidor agora. O propio Moodle non pode retirar o cartafol por mor dos permisos de escritura.';
$string['uninstalldeleteconfirm'] = 'Todos os datos asociados co engadido <em>{$a->name}</em> foron eliminados da base de datos. Para impedir que o engadido se reinstale a si mesmo, debe retirar o seu cartafol <em>{$a->rootdir}</em> do servidor. Quere retirar o cartafol do engadido agora?';
$string['uninstalldeleteconfirmexternal'] = 'Semella que a versión actual do engadido foi obtida mediante o sistema de xestión de código fonte ({$a}) de pago. Se vostede retira o cartafol do engadido, pode perder modificacións locais importantes do código. Asegúrese de que quere, definitivamente, retirar o cartafol do engadido antes de continuar.';
$string['uninstallextraconfirmblock'] = 'Haiy {$a->instances} instancias deste bloque.';
$string['uninstallextraconfirmenrol'] = 'Hai {$a->enrolments} matriculacións de usuarios.';
$string['uninstallextraconfirmmod'] = 'Hai {$a->instances} instancias deste módulo en {$a->courses} cursos.';
$string['uninstalling'] = 'Desinstalando {$a->name}';
$string['updateavailable'] = 'Hai unha nova versión de {$a} dispoñíbel!';
$string['updateavailable_moreinfo'] = 'Máis información...';
$string['updateavailable_release'] = 'Versión {$a}';
$string['updatepluginconfirm'] = 'Confirmación de actualización do engadido';
$string['updatepluginconfirmexternal'] = 'Semella que a versión actual do engadido foi obtida mediante o sistema de xestión de código fonte ({$a}) de pago. Se vostede instala esta actualización, xa non poderá posteriormente obter actualizacións de engadidos desde o sistema de xestión de código fonte. Asegúrese de que quere, definitivamente, actualizar o engadido antes de continuar.';
$string['updatepluginconfirminfo'] = 'Está a piques de instalar unha nova versión do engadido <strong>{$a->name}</strong>. Vai descargarse un paquete ZIP coa versión {$a->version} do engadido dende <a href="{$a->url}">{$a->url}</a> e será extraído á súa instalación de Moodle, para que poida actualizar a súa instalación.';
$string['updatepluginconfirmwarning'] = 'Teña en conta que Moodle non fará automaticamente unha copia de seguranza da súa base de datos antes da actualización. Recomendámoslle encarecidamente que faga unha copia de seguranza completa (instantánea) agora, para poder solucionar calquera problema que poida xurdir se o novo código tivese algún fallo que faga o seu sitio inoperante ou  incluso que estragara a base de datos. Proceda baixo a súa responsabilidade.';
$string['version'] = 'Versión';
$string['versiondb'] = 'Versión actual';
$string['versiondisk'] = 'Nova versión';
