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
 * Strings for component 'plugin', language 'gl', branch 'MOODLE_31_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accións';
$string['availability'] = 'Dispoñibilidade';
$string['cancelinstallall'] = 'Cancelar as novas instalacións ({$a})';
$string['cancelinstallhead'] = 'Cancelando a instalación de engadidos';
$string['cancelinstallinfo'] = 'Os seguintes engadidos aínda non están completamente instalados, polo que a súa instalación pode ser cancelada. Para facer isto, debe eliminar agora do servidor o cartafol do engadido. Asegúrese de que isto é o que realmente quere facer para prever a perda accidental de datos (tales como as súas propias modificacións do código).';
$string['cancelinstallinfodir'] = 'Cartafol a eliminar: {$a}';
$string['cancelinstallone'] = 'Cancelar esta instalación';
$string['cancelupgradeall'] = 'Cancelar as anovacións ({$a})';
$string['cancelupgradehead'] = 'Restaurando versións anteriores de engadidos';
$string['cancelupgradeone'] = 'Cancelar esta anovación';
$string['checkforupdates'] = 'Comprobar as actualizacións dispoñíbeis';
$string['checkforupdateslast'] = 'A última comprobación fíxose o {$a}';
$string['dependencyavailable'] = 'Dispoñíbel';
$string['dependencyfails'] = 'Fallo';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyinstallhead'] = 'Instalando dependencias ausentes';
$string['dependencyinstallmissing'] = 'Instalando dependencias ausentes ({$a})';
$string['dependencymissing'] = 'Falta';
$string['dependencyunavailable'] = 'Non dispoñíbel';
$string['dependencyupload'] = 'Enviar';
$string['dependencyuploadmissing'] = 'Enviar ficheiros ZIP';
$string['detectedmisplacedplugin'] = 'O engadido «{$a->component}» está instalado nunha localización incorrecta «{$a->current}», a localización agardada é «{$a->expected}»';
$string['displayname'] = 'Nome do engadido';
$string['err_response_curl'] = 'Non foi posíbel obter as actualizacións dispoñíbeis - produciuse un erro non agardado de cURL.';
$string['err_response_format_version'] = 'Formato de resposta con versión non agardada. Comprobe de novo as actualizacións dispoñíbeis.';
$string['err_response_http_code'] = 'Non foi posíbel obter as actualizacións dispoñíbeis - código de resposta HTTP non agardado.';
$string['filterall'] = 'Amosar todo';
$string['filtercontribonly'] = 'Amosar só os engadidos adicionais';
$string['filterupdatesonly'] = 'Amosar só os actualizábeis';
$string['misdepinfoplugin'] = 'Información do engadido';
$string['misdepinfoversion'] = 'Información da versión';
$string['misdepsavail'] = 'Dependencias ausentes dispoñíbeis';
$string['misdepsunavail'] = 'Dependencias ausentes non dispoñíbeis';
$string['misdepsunavaillist'] = 'Non se atopou a versión que cumpra cos requirimentos de dependencias: {$a}.';
$string['misdepsunknownlist'] = 'Non dispoñíbel no directorio de engadidos: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Ningún engadido deste tipo está instalado';
$string['notdownloadable'] = 'Non é posíbel descargar o paquete';
$string['notdownloadable_help'] = 'Non foi posíbel descargar automaticamente o paquete ZIP coa actualización. Vexa a páxina de documentación para obter máis axuda.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Notas';
$string['notwritable'] = 'Os ficheiros de engadidos non son escribíbeis';
$string['notwritable_help'] = 'Vostede activou o despregue de actualizacións automáticas e hai unha actualización dispoñíbel para este engadido. Porén, os ficheiros do engadido non son escribíbeis para o servidor web, polo que, polo momento, non foi posíbel instalar automaticamente a actualización.

Faga que o cartafol do engadido e todos os seus contidos sexan escribíbeis para poder instalar automaticamente a actualización dispoñíbel.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Todos os engadidos';
$string['overviewext'] = 'Engadidos adicionais';
$string['overviewupdatable'] = 'Actualizacións dispoñíbeis';
$string['packagesdebug'] = 'Saída de depuración activada';
$string['packagesdownloading'] = 'Descargando {$a}';
$string['packagesextracting'] = 'Extraendo {$a}';
$string['packagesvalidating'] = 'Validando: {$a}';
$string['packagesvalidatingfailed'] = 'Instalación cancelada por mor dun erro de validación';
$string['packagesvalidatingok'] = 'Validación correcta, a instalación pode continuar';
$string['plugincheckall'] = 'Todos os engadidos';
$string['plugincheckattention'] = 'Engadidos que requiren atención';
$string['pluginchecknone'] = 'Ningún engadido require da súa atención agora';
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
$string['supportedmoodleversions'] = 'Versións de Moodle compatíbeis';
$string['systemname'] = 'Identificador';
$string['type_antivirus'] = 'Engadido antivirus';
$string['type_antivirus_plural'] = 'Engadidos antivirus';
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
$string['type_dataformat'] = 'Formato de datos';
$string['type_dataformat_plural'] = 'Formatos de datos';
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
$string['type_search'] = 'Motor de busca';
$string['type_search_plural'] = 'Motores de busca';
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
$string['uninstallextraconfirmblock'] = 'Hai {$a->instances} instancias deste bloque.';
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
$string['validationmsg_componentmatch'] = 'Nome completo do compoñente';
$string['validationmsg_componentmismatchname'] = 'Non coincide o nome do engadido';
$string['validationmsg_componentmismatchname_help'] = 'Algúns paquetes ZIP, como os xerados por Github, poden conter un nome de directorio raíz incorrecto. É necesario corrixir o nome do directorio raíz para que coincida co nome declara do engadido.';
$string['validationmsg_componentmismatchname_info'] = 'O engadido declara que o seu nome é «{$a}» mais este non coincide co nome do directorio raíz.';
$string['validationmsg_componentmismatchtype'] = 'Non coincide o tipo de engadido';
$string['validationmsg_componentmismatchtype_info'] = 'Tipo agardado «{$a->expected}» mais o engadido declara que o seu tipo é «{$a->found}».';
$string['validationmsg_filenotexists'] = 'Non se atopou o ficheiro extraido';
$string['validationmsg_filesnumber'] = 'No se atoparon ficheiros abondo no paquete';
$string['validationmsg_filestatus'] = 'Non foi posíbel extraer todos os ficheios';
$string['validationmsg_filestatus_info'] = 'Ao tentar extraer o ficheiro {$a->file} resultou nun erro «{$a->status}».';
$string['validationmsg_foundlangfile'] = 'Atopouse o ficheiro de idioma';
$string['validationmsglevel_debug'] = 'Depuración';
$string['validationmsglevel_error'] = 'Erro';
$string['validationmsglevel_info'] = 'Aceptar';
$string['validationmsglevel_warning'] = 'Aviso';
$string['validationmsg_maturity'] = 'Declarado o nivel de madurez';
$string['validationmsg_maturity_help'] = 'O engadido pode declarar o seu nivel de madurez. Se o mantedor considera que o engadido é estábel, o nivel de madurez declarado lerá MATURITY_STABLE. Todos os demais niveis de madurez (como alfa ou beta) deberían de considerarse inestábeis e aparecerá unha advertencia.';
$string['validationmsg_missingcomponent'] = 'O engadido non declara o nome do seu compoñente';
$string['validationmsg_missingcomponent_help'] = 'Todos os engadidos deben fornecer o seu nome completo mediante a declaración de  «$plugin->component» no ficheiro version.php.';
$string['validationmsg_missingcomponent_link'] = 'Desenvolvemento:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Non coincide o nome do ficheiro de idioma inglés';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Ao tipo de engadido dado fáltalle o ficheiro de idioma inglés agardado  {$a}.';
$string['validationmsg_missinglangenfile'] = 'Non se atopou o ficheiro de idioma inglés';
$string['validationmsg_missinglangenfolder'] = 'Falta o cartafol do idioma inglés';
$string['validationmsg_missingversion'] = 'O engadido non declara a súa versión';
$string['validationmsg_missingversionphp'] = 'Non se atopa o ficheiro version.php';
$string['validationmsg_multiplelangenfiles'] = 'Atopáronse múltiples ficheiros de idioma inglés';
$string['validationmsg_onedir'] = 'Estrutura incorrecta do paquete ZIP.';
$string['validationmsg_onedir_help'] = 'O paquete ZIP debe conter exactamente un directorio raíz que conten o código do engadido. O nome dese directorio raíz debe coincidir co nome do engadido.';
$string['validationmsg_pathwritable'] = 'Comprobación de acceso de escritura';
$string['validationmsg_pluginversion'] = 'Versión do engadido';
$string['validationmsg_release'] = 'Publicación do engadido';
$string['validationmsg_requiresmoodle'] = 'Versión de Moodle requirida';
$string['validationmsg_rootdir'] = 'Nome do engadido que será instalado';
$string['validationmsg_rootdir_help'] = 'o nome do directorio raíz dentro do paquete ZIP forma o nome do engadido a ser instalado. Se o nome non é correcto, pode querer renomear o directorio raíz dentro do ZIP antes de instalar o engadido.';
$string['validationmsg_rootdirinvalid'] = 'Nome de engadido incorrecto';
$string['validationmsg_rootdirinvalid_help'] = 'O nome do directorio raíz dentro do paquete ZIP incumpre os requisitos formais de sintaxes. Algúns paquetes ZIP, tales como os xerados por Github, poden conter un nome incorrecto do directorio raíz. Terá que arranxar o nome do directorio raíz, para que coincida co nome do engadido.';
$string['validationmsg_targetexists'] = 'Xa existía previamente a localización de destino e vai ser retirada';
$string['validationmsg_targetexists_help'] = 'O directorio onde se instalará o engadido xa existía previamente e será substituído polos contidos do paquete do engadido.';
$string['validationmsg_targetnotdir'] = 'A localización destino está ocupada por un ficheiro';
$string['validationmsg_unknowntype'] = 'Tipo de engadido descoñecido';
$string['validationmsg_versionphpsyntax'] = 'Sintaxe non compatíbel no ficheiro version.php';
$string['version'] = 'Versión';
$string['versiondb'] = 'Versión actual';
$string['versiondisk'] = 'Nova versión';
