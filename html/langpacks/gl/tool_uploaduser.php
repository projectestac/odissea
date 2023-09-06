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
 * Strings for component 'tool_uploaduser', language 'gl', version '4.1'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir eliminar';
$string['allowrenames'] = 'Permitir renomear';
$string['allowsuspends'] = 'Permitir suspender e activar as contas';
$string['assignedsysrole'] = 'Asignado o rol de sistema';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['defaultvalues'] = 'Valores predeterminados';
$string['deleteerrors'] = 'Eliminar erros';
$string['encoding'] = 'Codificación';
$string['errormnetadd'] = 'Non é posíbel engadir usuarios remotos';
$string['errors'] = 'Erros';
$string['invaliduserdata'] = 'Detectáronse datos incorrectos do usuario {$a} e foron limpados automaticamente.';
$string['nochanges'] = 'Sen cambios';
$string['pluginname'] = 'Enviar usuarios';
$string['renameerrors'] = 'Erros ao renomear';
$string['requiredtemplate'] = 'Requirido. Aquí pode utilizar sintaxe de modelo (%l = lastname, %f = firstname, %u = username). Consulte a axuda para ver detalles e exemplos.';
$string['rowpreviewnum'] = 'Vista previa das filas';
$string['unassignedsysrole'] = 'Sen asignar o rol de sistema';
$string['uploadpicture_baduserfield'] = 'O atributo de usuario especificado non é correcto. Ténteo de novo.';
$string['uploadpicture_cannotmovezip'] = 'Non é posíbel mover o arquivo zip a un directorio temporal.';
$string['uploadpicture_cannotprocessdir'] = 'Non é posíbel procesar arquivos que no fosen descomprimidos.';
$string['uploadpicture_cannotsave'] = 'Non é posíbel gardar a imaxe do usuario {$a}. Comprobe o ficheiro orixinal de imaxe.';
$string['uploadpicture_cannotunzip'] = 'Non é posíbel descomprimir o arquivo de imaxes.';
$string['uploadpicture_invalidfilename'] = 'O nome do ficheiro de imaxe {$a} ten caracteres incorrectos. Foi omitido.';
$string['uploadpicture_overwrite'] = 'Sobrescribir as imaxes do usuario?';
$string['uploadpicture_userfield'] = 'Atributo do usuario a utilizar para facelo coincidir coas imaxes:';
$string['uploadpicture_usernotfound'] = 'O usuario co «{$a->userfield}» valor de «{$a->uservalue}» non existe. Foi omitido.';
$string['uploadpicture_userskipped'] = 'Omitiuse o usuario {$a} (xa ten unha imaxe).';
$string['uploadpicture_userupdated'] = 'Imaxe actualizada para o usuario {$a}.';
$string['uploadpictures'] = 'Enviar imaxes do usuario';
$string['uploadpictures_help'] = 'As imaxes dos usuarios poden cargarse masivamente mediante un arquivo zip. Estes arquivos debe ser nomeados en atención ao «atributo do usuario» escollido (username, idnumber, id) por exemplo usuario1234.jpg para un usuario co nome_de_usuario (username) usuario1234.';
$string['uploaduser:uploaduserpictures'] = 'Enviar imaxes do usuario';
$string['uploadusers'] = 'Cargar usuarios';
$string['uploadusers_help'] = 'Para enviar os usuarios (e, opcionalmente, matriculalos en cursos) pode facerse por medio dun ficheiro de texto. O formato debe ser o seguinte:

* Cada liña conten só un rexistro.
* Cada rexistro é unha serie de datos separados por comas (ou por calquera outro delimitador)
* El primeiro rexistro conten unha lista de nomes de campo que definen o formato do resto do ficheiro
* Os nomes de campo necesarios son nome de usuario (username), contrasinal (password), nome propio (firstname), apelido (lastname) e correo (email)';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Vista previa do envío de usuarios';
$string['uploadusersresult'] = 'Resultados do envío de usuarios';
$string['useraccountupdated'] = 'Usuario actualizado';
$string['useraccountuptodate'] = 'Usuario ata hoxe';
$string['userdeleted'] = 'Eliminado o usuario';
$string['userrenamed'] = 'Usuario renomeado';
$string['userscreated'] = 'Usuarios creados';
$string['usersdeleted'] = 'Eliminados o usuarios';
$string['usersrenamed'] = 'Usuarios renomeados';
$string['usersskipped'] = 'Omitidos os usuarios';
$string['usersupdated'] = 'Usuarios actualizados';
$string['usersweakpassword'] = 'Usuarios con contrasinal feble';
$string['uubulk'] = 'Seleccionar para accións masivas con usuarios';
$string['uubulkall'] = 'Tódolos usuarios';
$string['uubulknew'] = 'Novos usuarios';
$string['uubulkupdated'] = 'Usuarios actualizados';
$string['uucsvline'] = 'Liña CSV';
$string['uulegacy1role'] = '(Alumno orixinal) tipo N=1';
$string['uulegacy2role'] = '(Profesor orixinal) tipo N=2';
$string['uulegacy3role'] = 'Profesor non editor orixinal) tipo N=3';
$string['uunoemailduplicates'] = 'Previr duplicados de enderezos de correo';
$string['uuoptype'] = 'Tipo de envío';
$string['uuoptype_addinc'] = 'Engadir todo, engadir contador a nomes de usuarios se for necesario.';
$string['uuoptype_addnew'] = 'Agregar só os novos, omitir os usuarios existentes';
$string['uuoptype_addupdate'] = 'Engadir os novos e actualizar os usuarios existentes';
$string['uuoptype_update'] = 'Só actualizar os usuarios existentes';
$string['uupasswordcron'] = 'Xerado en cron';
$string['uupasswordnew'] = 'Novo contrasinal de usuario';
$string['uupasswordold'] = 'Xa existe un contrasinal deste usuario';
$string['uustandardusernames'] = 'Estandarizar os nomes de usuario';
$string['uuupdateall'] = 'Substituír polo ficheiro e valores predeterminados';
$string['uuupdatefromfile'] = 'Substituír polo ficheiro';
$string['uuupdatemissing'] = 'Enches os datos ausentes desde un ficheiro e valores predeterminados';
$string['uuupdatetype'] = 'Detalles de usuario existente';
$string['uuusernametemplate'] = 'Modelo de nome de usuario';
