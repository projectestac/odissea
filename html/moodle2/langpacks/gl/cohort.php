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
 * Strings for component 'cohort', language 'gl', branch 'MOODLE_31_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Engadir un novo círculo';
$string['allcohorts'] = 'Todos os circulos';
$string['anycohort'] = 'Calquera';
$string['assign'] = 'Asignar';
$string['assigncohorts'] = 'Asignar membros ao círculo';
$string['assignto'] = 'Círculo «{$a}» membros';
$string['backtocohorts'] = 'Volver aos círculos';
$string['bulkadd'] = 'Engadir ao círculo';
$string['bulknocohort'] = 'Non se atoparon círculos dispoñíbeis';
$string['categorynotfound'] = 'Non se atopa a categoría <b>{$a}</b>, ou vostede non ten permisos para crear alí un circulo. Usarase o contexto predeterminado.';
$string['cohort'] = 'Círculo';
$string['cohorts'] = 'Círculos';
$string['cohortsin'] = '{$a}: círculos dispoñíbeis';
$string['component'] = 'Orixe';
$string['contextnotfound'] = 'Non se atopa o contexto <b>{$a}</b>, ou vostede non ten permisos para crear alí un circulo. Usarase o contexto predeterminado.';
$string['csvcontainserrors'] = 'Atopáronse erros nos datos do CSV. Vexa embaixo os detalles.';
$string['csvcontainswarnings'] = 'Atopáronse avisos nos datos do CSV. Vexa embaixo os detalles.';
$string['csvextracolumns'] = 'A(s) columna(s) <b>{$a}</b> será(n) ignorada(s).';
$string['currentusers'] = 'Usuarios actuais';
$string['currentusersmatching'] = 'Usuarios actuais coincidentes';
$string['defaultcontext'] = 'Contexto predeterminado';
$string['delcohort'] = 'Eliminar o círculo';
$string['delconfirm'] = 'Confirma que quere eliminar o círculo «{$a}»?';
$string['description'] = 'Descrición';
$string['displayedrows'] = '{$a->displayed} filas amosadas dun total de  {$a->total}.';
$string['duplicateidnumber'] = 'Xa existe un círculo co mesmo número ID';
$string['editcohort'] = 'Editar o círculo';
$string['editcohortidnumber'] = 'Editar o ID do círculo';
$string['editcohortname'] = 'Editar o nome do círculo';
$string['eventcohortcreated'] = 'Círculo creado';
$string['eventcohortdeleted'] = 'Círculo eliminado';
$string['eventcohortmemberadded'] = 'Usuario engadido a un círculo';
$string['eventcohortmemberremoved'] = 'Usuario retirado dun círculo';
$string['eventcohortupdated'] = 'Círculo actualizado';
$string['external'] = 'Círculo externo';
$string['idnumber'] = 'ID do círculo';
$string['memberscount'] = 'Tamaño do círculo';
$string['name'] = 'Nome';
$string['namecolumnmissing'] = 'Algo está mal no formato do ficheiro CSV. Comprobe que inclúa os nomes das columnas.';
$string['namefieldempty'] = 'O nome do campo non pode estar baleiro.';
$string['newidnumberfor'] = 'Novo número ID para o círculo {$a}';
$string['newnamefor'] = 'Novo nome para o círculo {$a}';
$string['nocomponent'] = 'Creada manualmente';
$string['potusers'] = 'Usuarios potenciais';
$string['potusersmatching'] = 'Usuarios potenciais coincidentes';
$string['preview'] = 'Vista previa';
$string['removeuserwarning'] = 'A retirada dos usuarios dun círculo pode resultar nunha desmatriculación de usuarios de múltiplos cursos, o que inclúe a eliminación da configuración do usuario, as cualificacións, a pertenza a grupos e outra información dos usuarios dos cursos afectados.';
$string['search'] = 'Buscar';
$string['searchcohort'] = 'Buscar un círculo';
$string['selectfromcohort'] = 'Seleccionar os membros do círculo';
$string['systemcohorts'] = 'Círculos do sistema';
$string['unknowncohort'] = 'Círculo ({$a}) descoñecido';
$string['uploadcohorts'] = 'Enviar círculos';
$string['uploadcohorts_help'] = 'Pode enviarse círculos mediante ficheiros de texto. O formato do ficheiro é o seguinte:

* Cada liña do ficheiro contén un rexistro
* Cada rexistro é unha serie de datos separados por comas (ou por outros delimitadores)
* O primeiro rexistro contén unha lista de nomes de campos que definen o formato do resto do ficheiro
* O nome de campo obrigatorio é «name» (nome)
* Os nomes de campo opcionais son «idnumber», «description», «descriptionformat», «visible», «context», «category», «category_id», «category_idnumber», «category_path»';
$string['uploadedcohorts'] = 'Enviados {$a} círculos';
$string['useradded'] = 'Usuario «{$a}» engadido ao círculo';
$string['visible'] = 'Visíbel';
$string['visible_help'] = 'Calquera círculo pode ser visto polos usuarios que teñan o permiso «moodle/cohort:view» no contexto de círculo. <br/>
Os círculos visíbeis poden ser vistos polos usuarios nos cursos subxacentes.';
