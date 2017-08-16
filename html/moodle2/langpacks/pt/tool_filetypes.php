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
 * Strings for component 'tool_filetypes', language 'pt', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Adicionar um novo tipo de ficheiro';
$string['corestring'] = 'String de idioma alternativa';
$string['corestring_help'] = 'Esta configuração pode ser usada para selecionar uma string de idioma diferente a partir do ficheiro de idioma mimetypes.php. Geralmente deve ser deixada em branco. Para os tipos personalizados, use o campo de descrição.';
$string['defaulticon'] = 'Ícone predefinido para o tipo MIME';
$string['defaulticon_help'] = 'Caso existam múltiplas extensões de ficheiros do tipo MIME, selecione esta opção para uma das extensões de forma a que este ícone possa vir a ser utilizado para ficheiros do tipo MIME.';
$string['deletea'] = 'Eliminar {$a}';
$string['delete_confirmation'] = 'Tem a certeza absoluta que pretende eliminar \'<strong>{$a}</strong>\'?';
$string['deletefiletypes'] = 'Eliminar um tipo de ficheiro';
$string['description'] = 'Descrição personalizada';
$string['description_help'] = 'Descrição de um tipo de ficheiro simples, por exemplo ‘Kindle ebook’. Se o seu site suporta vários idiomas e utiliza um filtro de multi-idioma, pode introduzir tags de multi-idioma neste campo para fornecer uma descrição em várias línguas.';
$string['descriptiontype'] = 'Tipo de descrição';
$string['descriptiontype_custom'] = 'Descrição personalizada especificada neste formulário';
$string['descriptiontype_default'] = 'Predefinido (<i>MIME type</i> ou idioma correspondente da string, caso esteja disponível)';
$string['descriptiontype_help'] = 'Existem três formas possíveis de especificar a descrição.

* Por predefinição é utilizado o <i>MIME type</i>. Se existir um pacote linguístico em mimetypes.php que corresponda ao <i>MIME type</i> em questão, este será usado; caso contrário o <i>MIME type</i> predefinido será apresentado aos utilizadores.
* Poderá especificar um descrição personalizada neste formulário.
* Poderá especificar o nome do pacote linguístico que pretende utilizar em mimetypes.php, em vez do <i>MIME type</i>.';
$string['descriptiontype_lang'] = 'String de idioma alternativa (a partir de mimetypes.php)';
$string['displaydescription'] = 'Descrição';
$string['editfiletypes'] = 'Editar um tipo de ficheiro já existente';
$string['emptylist'] = 'Não existem tipos de ficheiros definidos.';
$string['error_addentry'] = 'A extensão do tipo de ficheiro, descrição, <i>MIME type</i> e o ícone não devem conter espaço nem ponto-e-vírgula.';
$string['error_defaulticon'] = 'Outra extensão do ficheiro com o mesmo <i>MIME type</i> já está marcada como o ícone padrão.';
$string['error_extension'] = 'O tipo de extensão do ficheiro <strong>{$a}</strong> já existe ou é inválido. As extensões de ficheiros devem ser únicas e não podem conter caracteres especiais.';
$string['error_notfound'] = 'O tipo de ficheiro com a extensão {$a} não pode ser encontrado.';
$string['extension'] = 'Extensão';
$string['extension_help'] = 'Extensão de nome do ficheiro sem o ponto, por exemplo, ‘mobi’';
$string['groups'] = 'Grupos de tipos de ficheiro';
$string['groups_help'] = 'Lista opcional de grupos de tipos de ficheiro a que este tipo de ficheiro pertence. Estas são categorias genéricas tais como &lsquo;documento&rsquo; and &lsquo;imagem&rsquo;.';
$string['icon'] = 'Ficheiro de ícone';
$string['icon_help'] = 'Nome do ficheiro de ícone.

A lista de ícones é retirada do diretório /pix/f da sua instalação Moodle. Pode adicionar ícones personalizados a esta pasta caso seja necessário.';
$string['mimetype'] = '<i>MIME type</i>';
$string['mimetype_help'] = '<i>MIME type</i> associado a este tipo de ficheiro, por exemplo, ‘application/x-mobipocket-ebook’';
$string['pluginname'] = 'Tipos de ficheiro';
$string['revert'] = 'Restaurar {$a} para as predefinições Moodle';
$string['revert_confirmation'] = 'Tem a certeza que pretende restaurar <strong>.{$a}</strong> para as predefinições Moodle, descartando todas as alterações?';
$string['revertfiletype'] = 'Restaurar um tipo de ficheiro';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizado';
$string['source_deleted'] = 'Eliminado';
$string['source_modified'] = 'Modificado';
$string['source_standard'] = 'Padrão';
