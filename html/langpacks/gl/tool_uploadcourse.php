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
 * Strings for component 'tool_uploadcourse', language 'gl', version '3.11'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir eliminar';
$string['allowdeletes_help'] = 'Se está aceptado ou non o campo eliminar.';
$string['allowrenames'] = 'Permitir renomear';
$string['allowrenames_help'] = 'Se está aceptado ou non o campo renomear.';
$string['allowresets'] = 'Permitir reiniciar';
$string['allowresets_help'] = 'Se está aceptado ou non o campo reiniciar.';
$string['cachedef_helper'] = 'Axudante de almacenamento na memoria caché';
$string['cannotdeletecoursenotexist'] = 'Non é posíbel eliminar un curso que non existe';
$string['cannotforcelang'] = 'Non hai permiso para forzar o idioma para este curso';
$string['cannotgenerateshortnameupdatemode'] = 'Non é posíbel xerar un nome abreviado cando están permitidas as actualizacións';
$string['cannotreadbackupfile'] = 'Non é posíbel ler o ficheiro de copia de seguridade';
$string['cannotrenamecoursenotexist'] = 'Non é posíbel renomear un curso que non existe';
$string['cannotrenameidnumberconflict'] = 'Non é posíbel renomear o curso, hai conflito co número ID dun curso que xa existe';
$string['cannotrenameshortnamealreadyinuse'] = 'Non é posíbel renomear o curso, o nome abreviado xa existe';
$string['cannotupdatefrontpage'] = 'Está prohibido modificar a páxina principal';
$string['canonlyrenameinupdatemode'] = 'Só é posíbel renomear un curso cando está permitida a actualización';
$string['canonlyresetcourseinupdatemode'] = 'Só é posíbel reiniciar un curso no modo de actualización';
$string['couldnotresolvecatgorybyid'] = 'Non foi posíbel resolver a categoría polo seu ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Non foi posíbel resolver a categoría polo seu número ID';
$string['couldnotresolvecatgorybypath'] = 'Non foi posíbel resolver a categoría pola ruta';
$string['coursecreated'] = 'Curso creado';
$string['coursedeleted'] = 'Curso eliminado';
$string['coursedeletionnotallowed'] = 'Non está permitida a eliminación de cursos';
$string['coursedoesnotexistandcreatenotallowed'] = 'O curso non existe e non está permitido crear curso';
$string['courseexistsanduploadnotallowed'] = 'O curso existe e non está permitida a actualización';
$string['coursefile'] = 'Ficheiro';
$string['coursefile_help'] = 'Este ficheiro semella ser un ficheiro CSV.';
$string['courseidnumberincremented'] = 'Número ID de curso incrementado {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Proceso do curso';
$string['courserenamed'] = 'Curso renomeado';
$string['courserenamingnotallowed'] = 'Non está permitido o renomeado de cursos';
$string['coursereset'] = 'Curso restabelecido';
$string['courseresetnotallowed'] = 'Non está permitido o restabelecemento de cursos';
$string['courserestored'] = 'Curso restaurado';
$string['coursescreated'] = 'Cursos creados: {$a}';
$string['coursesdeleted'] = 'Cursos eliminados: {$a}';
$string['courseserrors'] = 'Erros nos cursos: {$a}';
$string['courseshortnamegenerated'] = 'Xerado no nome abreviado de curso: {$a}';
$string['courseshortnameincremented'] = 'Nome abreviado de curso incrementado {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total de cursos: {$a}';
$string['coursesupdated'] = 'Cursos actualizados: {$a}';
$string['coursetemplatename'] = 'Restaurar dende este curso após envialo';
$string['coursetemplatename_help'] = 'Escriba un nome abreviado de curso para usar como modelo para a creación de todos os cursos.';
$string['coursetorestorefromdoesnotexist'] = 'Non existe o curso a partires do que restaurar';
$string['courseupdated'] = 'Curso actualizado';
$string['createall'] = 'Crear todos, incrementar o nome abreviado se for necesario';
$string['createnew'] = 'Soamente crear cursos novos, omitir os existentes';
$string['createorupdate'] = 'Crear cursos novos, ou actualizar os existentes';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['csvdelimiter_help'] = 'Delimitador CSV do ficheiro CSV.';
$string['csvfileerror'] = 'Algo está mal no formato do ficheiro CSV. Revise que coincidan o número de cabeceiras e o número de columnas, e que o delimitador e a codificación do ficheiro sexan correctas: {$a}';
$string['csvline'] = 'Liña';
$string['defaultvalues'] = 'Valores predeterminados do curso';
$string['encoding'] = 'Codificación';
$string['encoding_help'] = 'Codificación para o ficheiro CSV.';
$string['errorwhiledeletingcourse'] = 'Produciuse un erro ao eliminar o curso';
$string['errorwhilerestoringcourse'] = 'Produciuse un erro ao restaurar o curso';
$string['generatedshortnamealreadyinuse'] = 'O nome abreviado xerado xa está a ser empregado';
$string['generatedshortnameinvalid'] = 'O nome abreviado xerado é incorrecto';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'O número ID xa está a ser usado por un curso';
$string['importoptions'] = 'Opcións de importación';
$string['invalidbackupfile'] = 'O ficheiro de copia de seguridade non é válido';
$string['invalidcourseformat'] = 'Formato incorrecto de curso';
$string['invalidcsvfile'] = 'Ficheiro CVS de entrada incorrecto';
$string['invalidencoding'] = 'A codificación non é válida';
$string['invalideupdatemode'] = 'O modo de actualización seleccionado non é válido';
$string['invalidfullnametoolong'] = 'O campo nome completo está limitado a {$a} caracteres';
$string['invalidmode'] = 'O modo seleccionado non é válido';
$string['invalidroles'] = 'Os nomes de rol non son válidos: {$a}';
$string['invalidshortname'] = 'O nome abreviado non é válido';
$string['invalidshortnametoolong'] = 'O campo nome abreviado está limitado a {$a} caracteres';
$string['invalidvisibilitymode'] = 'O modo visíbel non é válido';
$string['missingmandatoryfields'] = 'Falta(n) valor(es) para campos obrigatorios: {$a}';
$string['missingshortnamenotemplate'] = 'Falta o nome abreviado e non foi estabelecido o modelo de nome abreviado';
$string['mode'] = 'Modo de envío';
$string['mode_help'] = 'Isto permítelle especificar se os cursos poden crearse e/ou actualizarse';
$string['nochanges'] = 'Sen cambios';
$string['pluginname'] = 'Curso enviado';
$string['preview'] = 'Vista previa';
$string['privacy:metadata'] = 'O engadido de Curso enviado non almacena ningún dato persoal.';
$string['reset'] = 'Reiniciar o curso após envialo';
$string['reset_help'] = 'Reiniciar ou non o curso após crealo/actualizalo.';
$string['restoreafterimport'] = 'Restaurar após importar';
$string['result'] = 'Resultado';
$string['rowpreviewnum'] = 'Vista previa das filas';
$string['rowpreviewnum_help'] = 'Número de filas do ficheiro CSV que se verán na páxina seguinte. Esta opción é para limitar o tamaño da páxina seguinte.';
$string['shortnametemplate'] = 'Modelo para xerar o nome abreviado';
$string['shortnametemplate_help'] = 'O nome abreviado do curso é o amosado na navegación. Pode usar a sintaxe de modelo aquí (%f = fullname, %i = idnumber), ou escribir un valor inicial que é incrementado.';
$string['templatefile'] = 'Restaurar dende este ficheiro após envialo';
$string['templatefile_help'] = 'Seleccionar un ficheiro para usalo como modelo para a creación de todos os cursos.';
$string['unknownimportmode'] = 'Modo de importación descoñecido';
$string['updatemissing'] = 'Encher os datos que faltan dende os datos CSV e os valores predeterminados';
$string['updatemode'] = 'Modo de actualización';
$string['updatemode_help'] = 'Se permite que os cursos sexan actualizados, Terá que dicirlle á ferramenta con que actualizar os cursos.';
$string['updatemodedoessettonothing'] = 'O modo de actualización non permite que nada se actualice';
$string['updateonly'] = 'Actualizar só os cursos existentes';
$string['updatewithdataonly'] = 'Actualizar soamente con datos CSV';
$string['updatewithdataordefaults'] = 'Actualizar con datos CSV e con valores predeterminados';
$string['uploadcourses'] = 'Enviar cursos';
$string['uploadcourses_help'] = 'Pode enviar os cursos mediante dun ficheiro de texto. O formato debe ser o seguinte:

* Cada liña contén só un rexistro.
* Cada rexistro é unha serie de datos separados por comas (ou por calquera outro delimitador)
* El primeiro rexistro contén unha lista de nomes de campo que definen o formato do resto do ficheiro
* Os nomes de campo necesarios son nome abreviado, nome completo e categoría';
$string['uploadcoursespreview'] = 'Vista previa do envío de cursos';
$string['uploadcoursesresult'] = 'Resultado do envío de cursos';
