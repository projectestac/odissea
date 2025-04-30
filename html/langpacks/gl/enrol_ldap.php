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
 * Strings for component 'enrol_ldap', language 'gl', version '4.4'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignación de rol «{$a->role_shortname}» ao usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['assignrolefailed'] = 'Non foi posíbel asignar o rol «{$a->role_shortname}» ao usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['autocreate'] = '<p>Os cursos poden ser creados automaticamente se hai matriculacións para un curso que aínda non exista en Moodle.</p><p>Se está a usar a creación de cursos automáticos, recoméndase eliminar as seguintes capacidades: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname and moodle/course:changesummary, dos roles relevantes para evitar modificacións dos catro campos indicados anteriormente (número de identificación, nome abreviado, nome completo e resumo).</p>';
$string['autocreate_key'] = 'Creación automática';
$string['autocreation_settings'] = 'Axustes para creación automática de curso';
$string['autoupdate_settings'] = 'Axustes para a actualización automática de cursos';
$string['autoupdate_settings_desc'] = '<p>Seleccione campos para actualizar cando se executa a tarefa programada «Sincronizar as matriculacións LDAP».</p><p>Cando se seleccione polo menos un campo, terá lugar unha actualización.</p>';
$string['bind_dn'] = 'Se quere utilizar un usuario de ligazón para buscar usuarios, especifíqueo aquí. Algo como «cn=ldapuser,ou=public,o=org»';
$string['bind_dn_key'] = 'Nome de usuario de conexión';
$string['bind_pw'] = 'Contrasinal para o usuario de ligazón.';
$string['bind_pw_key'] = 'Contrasinal';
$string['bind_settings'] = 'Axustes de conexión';
$string['cannotcreatecourse'] = 'Non foi posíbel crear o curso: faltan datos requiridos do rexistro LDAP!';
$string['cannotupdatecourse'] = 'Non foi posíbel crear o curso: faltan datos requiridos do rexistro LDAP! Número ID do curso: «{$a->idnumber}»';
$string['cannotupdatecourse_duplicateshortname'] = 'Non é posíbel actualizar o curso: Nome abreviado duplicado. Ignorando o curso co número id «{$a->idnumber}»...';
$string['category'] = 'Categoría para cursos creados automaticamente.';
$string['category_key'] = 'Categoría';
$string['contexts'] = 'Contextos LDAP';
$string['couldnotfinduser'] = 'Non foi posíbel atopar o usuario «{$a}», omitindo';
$string['course_fullname'] = 'Opcional: Campo LDAP de onde se colle o nome completo.';
$string['course_fullname_key'] = 'Nome completo';
$string['course_fullname_updateonsync'] = 'Actualiza o nome completo durante o script de sincronización';
$string['course_fullname_updateonsync_key'] = 'Actualizar o nome completo';
$string['course_idnumber'] = 'Atributo de LDAP para obter o número de ID do curso, normalmente «cn» ou «uid».';
$string['course_idnumber_key'] = 'Número ID';
$string['course_search_sub'] = 'Buscar membros do grupo dende subcontextos';
$string['course_search_sub_key'] = 'Buscar subcontextos';
$string['course_settings'] = 'Axustes de matriculación nos cursos';
$string['course_shortname'] = 'Opcional: campo LDAP de onde se colle o nome abreviado.';
$string['course_shortname_key'] = 'Nome abreviado';
$string['course_shortname_updateonsync'] = 'Actualiza o nome abreviado durante o script de sincronización';
$string['course_shortname_updateonsync_key'] = 'Actualizar o nome abreviado';
$string['course_summary'] = 'Opcional: campo LDAP de onde se colle o resumo.';
$string['course_summary_key'] = 'Resumo';
$string['course_summary_updateonsync'] = 'Actualiza o resumo durante o script de sincronización';
$string['course_summary_updateonsync_key'] = 'Actualizar o resumo';
$string['coursenotexistskip'] = 'Non existe o curso «{$a}» e a creación automática está desactivada, ignorase.';
$string['courseupdated'] = 'O curso co «idnumber» «{$a->idnumber}» foi actualizado correctamente.';
$string['courseupdateskipped'] = 'O curso co «idnumber» «{$a->idnumber}» non require actualización. Ignorando...';
$string['createcourseextid'] = 'CREAR o usuario matriculado no curso «{$a->courseextid}» que non existe';
$string['createnotcourseextid'] = 'O usuario está matriculado nun curso que non existe «{$a->courseextid}»';
$string['creatingcourse'] = 'Creando o curso «{$a}»...';
$string['duplicateshortname'] = 'Produciuse un fallo na creación do curso: Nome abreviado duplicado. Ignorando o curso co número id «{$a->idnumber}»...';
$string['editlock'] = 'Bloquear valor';
$string['emptyenrolment'] = 'Matriculación baleira para o rol «{$a->role_shortname}» no curso «{$a->course_shortname}»';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Matricular o usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['enroluserenable'] = 'Activada a matriculación para o usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() non permite o tipo de usuario seleccionado: {$a}';
$string['extcourseidinvalid'] = 'O id do curso externo non é correcto!';
$string['extremovedsuspend'] = 'Desactivada a matriculación do usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Desactivada a matriculación e retirados os roles do usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['extremovedunenrol'] = 'Desmatricular o usuario «{$a->user_username}» no curso «{$a->course_shortname}» (id {$a->course_id})';
$string['failed'] = 'Produciuse un fallo!';
$string['general_options'] = 'Opcións xerais';
$string['group_memberofattribute'] = 'Nome do atributo que especifica a que grupos pertence un determinado usuario ou grupo (é dicir, memberOf, groupMembership, etc.)';
$string['group_memberofattribute_key'] = 'Atributo «Membro de»';
$string['host_url'] = 'Especificar o servidor LDAP en forma de URL como «ldap://ldap.myorg.com/» ou «ldaps://ldap.myorg.com/»';
$string['host_url_key'] = 'URL do equipo';
$string['idnumber_attribute'] = 'Se os membros do grupo teñen nomes distintos, especifique o mesmo atributo que usou para a asignación do «Número ID» do usuario nos axustes de autenticación LDAP.';
$string['idnumber_attribute_key'] = 'ID de atributo de número';
$string['ldap:manage'] = 'Xestionar instancia de matriculación LDAP';
$string['ldap_encoding'] = 'Especifique a codificación utilizada no servidor LDAP. O máis probábel é que sexa utf-8, MS AD v2 utilice unha codificación da plataforma tal como cp1252, cp1250, etc.';
$string['ldap_encoding_key'] = 'Codificación LDAP';
$string['memberattribute'] = 'Atributo de membro LDAP';
$string['memberattribute_isdn'] = 'Se o grupo de membros contén nomes distintos, faise necesario que o especifique aquí. Se o fai, tamén é necesario configurar os axustes restantes desta sección';
$string['memberattribute_isdn_key'] = 'O atributo do membro utiliza dn';
$string['nested_groups'] = 'Quere utilizar grupos aniñados (grupos de grupos) para a matriculación?';
$string['nested_groups_key'] = 'Grupos aniñados';
$string['nested_groups_settings'] = 'Axustes de grupos aniñados';
$string['nosuchrole'] = 'Non existe ese rol: «{$a}»';
$string['objectclass'] = 'objectClass utilizado para buscar cursos. Normalmente «posixGroup».';
$string['objectclass_key'] = 'Clase de obxecto';
$string['ok'] = 'Aceptar!';
$string['opt_deref'] = 'Se os membros do grupo teñen nomes distintos, especifique como manexar os alias durante a busca. Seleccione un dos seguintes valores: «Non» (LDAP_DEREF_NEVER) ou «Si» (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Alias dereferencia';
$string['phpldap_noextension'] = '<em>O módulo PHP LDAP non parece estar presente. Asegúrese de que está instalado e activado se quere usar este engadido de matriculación.</em>';
$string['pluginname'] = 'Matriculacións LDAP';
$string['pluginname_desc'] = '<p>Pode utilizar un servidor LDAP para controlar as súas matriculacións. É asumido que a súa árbore LDAP contén grupos que asignan os cursos, e que cada un deses grupos/cursos terán entradas de membros para asignar alumnos.</p><p>É asumido que os cursos son definidos como grupos en LDAP, e que cada grupo ten varios campos de membros (<em>member</em> ou <em>memberUid</em>) que conteñen unha única identificación de usuario.</p><p>Para utilizar a matriculación LDAP, os seus usuarios <strong>deben</strong> ter un campo de número id válido. Os grupos LDAP deben ter este número id nos campos de membro para que un usuario poida inscribirse no curso. Normalmente, isto funciona ben se xa está a utilizar a Autenticación LDAP.</p><p>As matriculacións serán actualizadas cando os usuarios inicien a sesión. Tamén pode executar un script para manter as matriculacións sincronizadas. Vexa en <em>enrol/ldap/cli/sync.php</p><p>Este engadido tamén pode ser definido para crear automaticamente novos cursos ao aparecer grupos novos en LDAP.</p>';
$string['pluginnotenabled'] = 'Engadido non activado!';
$string['privacy:metadata'] = 'O engadido de LDAP non almacena ningún dato persoal.';
$string['role_mapping'] = '<p>Para cada rol, cómpre especificar todos os contextos LDAP nos que se atopan os grupos que representan os cursos. Separe diferentes contextos cun punto e coma (;).</p><p>Tamén precisa especificar o atributo que utiliza o seu servidor LDAP para conter os membros dun grupo. Isto normalmente é «member» ou «memberUid».</p>';
$string['role_mapping_attribute'] = 'Atributo do membro LDAP para {$a}';
$string['role_mapping_context'] = 'Contextos LDAP para {$a}';
$string['role_mapping_key'] = 'Asignar roles de LDAP';
$string['roles'] = 'Asignación de roles';
$string['server_settings'] = 'Axustes do servidor LDAP';
$string['synccourserole'] = '== Sincronización do curso «{$a->idnumber}» para o rol «{$a->role_shortname}»';
$string['syncenrolmentstask'] = 'Sincronizar a tarefa de matriculacións LDAP';
$string['template'] = 'Opcional: os cursos creados automaticamente poden copiar os seus axustes dun modelo de curso.';
$string['template_key'] = 'Modelo';
$string['unassignrole'] = 'Retirarlle o rol «{$a->role_shortname}» ao usuario «{$a->user_username}» do curso «{$a->course_shortname}» (id {$a->course_id})';
$string['unassignrolefailed'] = 'Non foi posíbel asignar o rol «{$a->role_shortname}» ao usuario «{$a->user_username}» do curso «{$a->course_shortname}» (id {$a->course_id})';
$string['unassignroleid'] = 'Desasignando rol co ID «{$a->role_id}« ao usuario co ID «{$a->user_id}»';
$string['updatelocal'] = 'Actualizar datos locais';
$string['user_attribute'] = 'Se os membros do grupo teñen nomes distintos, especifique o atributo utilizado para nomear/buscar usuarios. Se está a usar autenticación LDAP, este valor debería coincidir co atributo especificado na asignación do «Número ID» do engadido de autenticación.';
$string['user_attribute_key'] = 'ID de atributo de número';
$string['user_contexts'] = 'Se os membros do grupo teñen nomes distintos, especifique a lista dos contextos nos que están situados os usuarios. Separe os diferentes contextos con «;». Por exemplo: «ou=users,o=org; ou=others,o=org»';
$string['user_contexts_key'] = 'Contextos';
$string['user_search_sub'] = 'Se os membros do grupo teñen nomes distintos, especifique se a busca de usuarios se fai en subcontextos tamén';
$string['user_search_sub_key'] = 'Buscar subcontextos';
$string['user_settings'] = 'Axustes de buscas do usuario';
$string['user_type'] = 'Se os membros do grupo teñen nomes distintos, especifique como se gardan os usuarios en LDAP';
$string['user_type_key'] = 'Tipo de usuario';
$string['version'] = 'A versión do protocolo LDAP que está a utilizar o seu servidor.';
$string['version_key'] = 'Versión';
