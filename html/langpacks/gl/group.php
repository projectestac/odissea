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
 * Strings for component 'group', language 'gl', version '3.11'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Engadido por {$a}';
$string['addgroup'] = 'Engadir usuarios ao grupo';
$string['addgroupstogrouping'] = 'Engadir grupos a agrupamentos';
$string['addgroupstogroupings'] = 'Engadir/retirar grupos';
$string['adduserstogroup'] = 'Engadir/retirar usuarios';
$string['allocateby'] = 'Asignar membros';
$string['anygrouping'] = '[Calquera agrupamento]';
$string['autocreategroups'] = 'Crear grupos automaticamente';
$string['backtogroupings'] = 'Volver aos agrupamentos';
$string['backtogroups'] = 'Volver aos grupos';
$string['badnamingscheme'] = 'Debe conter exactamente un carácter «@» ou «#»';
$string['byfirstname'] = 'Alfabeticamente por nome e apelido';
$string['byidnumber'] = 'Alfabeticamente por número de ID';
$string['bylastname'] = 'Alfabeticamente por apelido e nome';
$string['createautomaticgrouping'] = 'Crear agrupamento automático';
$string['creategroup'] = 'Crear grupo';
$string['creategrouping'] = 'Crear agrupamento';
$string['creategroupinselectedgrouping'] = 'Crear grupo en agrupamento';
$string['createingrouping'] = 'Crear en agrupamento';
$string['createorphangroup'] = 'Crear un grupo orfo';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['databaseupgradegroups'] = 'A versión dos grupos agora é a {$a}';
$string['defaultgrouping'] = 'Agrupamento predeterminado:';
$string['defaultgroupingname'] = 'Agrupamento';
$string['defaultgroupname'] = 'Grupo';
$string['deleteallgroupings'] = 'Eliminar todos os agrupamentos';
$string['deleteallgroups'] = 'Eliminar todos os grupos';
$string['deletegroupconfirm'] = 'Confirma que quere eliminar o grupo «{$a}»?';
$string['deletegrouping'] = 'Eliminar agrupamento';
$string['deletegroupingconfirm'] = 'Confirma que quere eliminar o agrupamento «{$a}»? (Os grupos non se eliminarán).';
$string['deletegroupsconfirm'] = 'Confirma que quere eliminar os grupos seguintes?';
$string['deleteselectedgroup'] = 'Eliminar grupo seleccionado';
$string['editgroupingsettings'] = 'Editar os axustes de agrupamento';
$string['editgroupsettings'] = 'Editar os axustes de grupo';
$string['editusersgroupsa'] = 'Editar grupos para «{$a}»';
$string['enablemessaging'] = 'Mensaxería en grupo';
$string['enablemessaging_help'] = 'Se está activado, os membros do grupo poden enviar mensaxes aos demais do seu grupo a través do caixón de mensaxería.';
$string['encoding'] = 'Codificación';
$string['enrolmentkey'] = 'Chave de matriculación';
$string['enrolmentkey_help'] = 'Unha chave de matriculación permite que o acceso ao curso estea limitado só a aquelas persoas que coñecen a chave. De especificarse unha chave de matriculación de grupo, entón dita chave non só permitirá aos usuarios acceder ao curso, senón que faraos membros do grupo.

Nota: As chaves de matriculación de grupo deben estar activadas nos axustes de automatriculación e debe especificarse tamén unha chave para o curso.';
$string['enrolmentkeyalreadyinuse'] = 'Esta chave de matriculación xa foi empregada para outro grupo';
$string['erroraddremoveuser'] = 'Produciuse un erro ao engadir/retirar ao usuario {$a} do grupo';
$string['erroreditgroup'] = 'Produciuse un erro a crear ou actualizar o grupo {$a}';
$string['erroreditgrouping'] = 'Produciuse un erro a crear ou actualizar o agrupamento {$a}';
$string['errorinvalidgroup'] = 'Erro: Grupo {$a} incorrecto';
$string['errorremovenotpermitted'] = 'Vostede non ten permiso para retirar a un membro do grupo {$a} que foi engadido automaticamente';
$string['errorselectone'] = 'Seleccione un só grupo antes de escoller esta opción';
$string['errorselectsome'] = 'Seleccione un ou máis grupos antes de escoller esta opción';
$string['evenallocation'] = 'Nota: Para manter constante a asignación de usuarios, o número real de membros por grupo difire do número que vostede especificou.';
$string['eventgroupcreated'] = 'Grupo creado';
$string['eventgroupdeleted'] = 'Grupo eliminado';
$string['eventgroupingcreated'] = 'Agrupamento creado';
$string['eventgroupingdeleted'] = 'Agrupamento eliminado';
$string['eventgroupinggroupassigned'] = 'Grupo asignado a agrupamento';
$string['eventgroupinggroupunassigned'] = 'Grupo retirado do agrupamento';
$string['eventgroupingupdated'] = 'Agrupamento actualizado';
$string['eventgroupmemberadded'] = 'Membro do grupo engadido';
$string['eventgroupmemberremoved'] = 'Membro do grupo retirado';
$string['eventgroupupdated'] = 'Grupo actualizado';
$string['existingmembers'] = 'Membros existentes: {$a}';
$string['filtergroups'] = 'Filtrar grupos por:';
$string['group'] = 'Grupo';
$string['groupaddedsuccesfully'] = 'O grupo {$a} foi engadido satisfactoriamente';
$string['groupaddedtogroupingsuccesfully'] = 'O grupo {$a->groupname} foi engadido satisfactoriamente ao agrupamento {$a->groupingname}';
$string['groupby'] = 'Especificar';
$string['groupdescription'] = 'Descrición do grupo';
$string['groupinfo'] = 'Información sobre o grupo seleccionado';
$string['groupinfomembers'] = 'Información sobre os membros seleccionados';
$string['groupinfopeople'] = 'Información sobre as persoas seleccionadas';
$string['grouping'] = 'Agrupamento';
$string['grouping_help'] = 'Un agrupamento é un conxunto de grupos dentro dun curso. De estar seleccionado un agrupamento, os usuarios asignados aos grupos dentro do agrupamento poderán traballar xuntos.';
$string['groupingaddedsuccesfully'] = 'O agrupamento {$a} foi engadido satisfactoriamente';
$string['groupingdescription'] = 'Descrición do agrupamento';
$string['groupingname'] = 'Nome do agrupamento';
$string['groupingnameexists'] = 'O nome de agrupamento «{$a}» xa existe neste curso. Escolla outro.';
$string['groupings'] = 'Agrupamentos';
$string['groupingsection'] = 'Acceso aos agrupamentos';
$string['groupingsection_help'] = 'Un agrupamento é un conxunto de grupos dentro dun curso. De estar seleccionado un agrupamento, só os alumnos asignados aos grupos dentro deste agrupamento terán acceso á sección.';
$string['groupingsonly'] = 'Só agrupamentos';
$string['groupmember'] = 'Membro do grupo';
$string['groupmemberdesc'] = 'Rol estándar dun membro do grupo.';
$string['groupmembers'] = 'Membros do grupo';
$string['groupmemberssee'] = 'Ver os membros do grupo';
$string['groupmembersselected'] = 'Membros do grupo seleccionado';
$string['groupmode'] = 'Modo de grupo';
$string['groupmode_help'] = 'Este axuste ten 3 opcións:

* Sen grupos - Non hai grupos, todos son parte dunha gran comunidade
* Grupos separados - Cada membro do grupo só pode ver seu propio grupo; os demais son invisíbeis
* Grupos visíbeis - Cada membro do grupo traballa dentro do seu grupo, mais tamén pode ver aos outros grupo

O modo de grupo definido a nivel de curso é o modo predeterminado para todas as actividades do curso. Cada actividade que admita grupos pode definir o seu propio modo de grupo, aínda que se o modo de grupo está definido a nivel de curso, o axuste do modo de grupo para cada actividade é ignorado.';
$string['groupmodeforce'] = 'Forzar o modo de grupo';
$string['groupmodeforce_help'] = 'De forzarse o modo de grupo, entón aplicase a todas as actividades no curso o modo de grupo. Nese caso ignorase o axuste do modo de grupo.';
$string['groupmy'] = 'O meu grupo';
$string['groupname'] = 'Nome do grupo';
$string['groupnameexists'] = 'O nome de grupo «{$a}» xa existe neste curso. Escolla outro.';
$string['groupnotamember'] = 'Vaites, vostede non é membro deste grupo';
$string['groups'] = 'Grupos';
$string['groupscount'] = 'Grupos ({$a})';
$string['groupsettingsheader'] = 'Grupos';
$string['groupsgroupings'] = 'Grupos &amp; agrupamentos';
$string['groupsinselectedgrouping'] = 'Grupos en:';
$string['groupsnone'] = 'Sen grupos';
$string['groupsonly'] = 'Só grupos';
$string['groupspreview'] = 'Vista previa de grupos';
$string['groupsseparate'] = 'Grupos separados';
$string['groupsvisible'] = 'Grupos visíbeis';
$string['grouptemplate'] = 'Grupo @';
$string['hidepicture'] = 'Agochar a imaxe';
$string['importgroups'] = 'Importar grupos';
$string['importgroups_help'] = 'Os grupos poden importarse mediante un ficheiro de texto. O formato do ficheiro ten que ser como sigue:

* Cada liña do ficheiro contén un rexistro
* Cada rexistro é unha serie de datos separados por comas
* O primeiro rexistro contén unha lista de nomes de campos que definen o formato do resto do ficheiro
* É obrigatorio o nome de campo groupname
* Son opcionais os nomes de campo: groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Incluír soamente as matriculacións activas';
$string['includeonlyactiveenrol_help'] = 'Se está activado, os usuarios suspendidos no serán incluídos nos grupos.';
$string['javascriptrequired'] = 'Esta páxina require que JavaScript estea activado.';
$string['memberofgroup'] = 'Membro do grupo de: {$a}';
$string['members'] = 'Membros por grupo';
$string['membersofselectedgroup'] = 'Membros de:';
$string['mygroups'] = 'Os meus grupos';
$string['namingscheme'] = 'Esquema de nomeamento';
$string['namingscheme_help'] = 'O símbolo «en» ou «arroba» (@) pode empregarse para crear grupos con nomes que conteñen letras. Por exemplo, Grupo @ pode xerar grupos denominados Grupo A, Grupo B, Grupo C, ...

O símbolo «grade» ou «grella» (#) pode empregarse para crear grupos con nomes que conteñen números. Por exemplo, Grupo # pode xerar grupos denominados Grupo 1, Grupo 2, Grupo 3, ...';
$string['newgrouping'] = 'Novo agrupamento';
$string['newpicture'] = 'Nova imaxe';
$string['newpicture_help'] = 'Seleccione unha imaxe en formato JPG ou PNG. A imaxe será recortada e axustada a un cadrado de 100x100 píxeles.';
$string['noallocation'] = 'Sen asignar';
$string['nogroup'] = 'Sen grupo';
$string['nogrouping'] = 'Sen agrupamentos';
$string['nogroups'] = 'Aínda non se estabeleceron grupos neste curso';
$string['nogroupsassigned'] = 'Non hai grupos asignados';
$string['nopermissionforcreation'] = 'Non é posíbel crear o grupo «{$a}», vostede non ten os permisos requiridos';
$string['nosmallgroups'] = 'Evitar o último grupo pequeno';
$string['notingroup'] = 'Ignorar usuarios en grupos';
$string['notingrouping'] = '[Fóra dun agrupamento]';
$string['notingrouplist'] = '[Fóra dun grupo]';
$string['nousersinrole'] = 'Non existen usuarios axeitados no rol seleccionado';
$string['number'] = 'Número de grupos/membros';
$string['numgroups'] = 'Número de grupos';
$string['nummembers'] = 'Membros por grupo';
$string['othergroups'] = 'Outros grupos';
$string['overview'] = 'Vista xeral';
$string['potentialmembers'] = 'Membros potenciais: {$a}';
$string['potentialmembs'] = 'Membros potenciais';
$string['printerfriendly'] = 'Presentar en formato para imprimir';
$string['privacy:metadata:core_message'] = 'As conversas en grupo';
$string['privacy:metadata:groups'] = 'Un rexistro de membros do grupo.';
$string['privacy:metadata:groups:groupid'] = 'O ID do grupo.';
$string['privacy:metadata:groups:timeadded'] = 'A marca de tempo que indica cando foi engadido o usuario ao grupo.';
$string['privacy:metadata:groups:userid'] = 'O ID do usuario que está asociado ao grupo.';
$string['random'] = 'Ao chou';
$string['removefromgroup'] = 'Retirar ao usuario do grupo {$a}';
$string['removefromgroupconfirm'] = 'Confirma que quere eliminar ao usuario «{$a->user}» do grupo «{$a->group}»?';
$string['removegroupfromselectedgrouping'] = 'Retirar grupo do agrupamento';
$string['removegroupingsmembers'] = 'Retirar todos os grupo dos agrupamentos';
$string['removegroupsmembers'] = 'Retirar todos os membros do grupo';
$string['removeselectedusers'] = 'Retirar os usuarios seleccionados';
$string['selectfromgroup'] = 'Seleccionar os membros do grupo';
$string['selectfromgrouping'] = 'Seleccionar os membros do agrupamento';
$string['selectfromrole'] = 'Seleccionar os membros segundo o rol';
$string['showgroupsingrouping'] = 'Amosar grupos en agrupamento';
$string['showmembersforgroup'] = 'Amosar os membros do grupo';
$string['toomanygroups'] = 'Non hai usuarios abondo para completar este número de grupos (só hai {$a} usuarios no rol seleccionado).';
$string['usercount'] = 'Número de usuarios';
$string['usercounttotal'] = 'Número de usuarios ({$a})';
$string['usergroupmembership'] = 'Membresía dos usuarios seleccionados:';
