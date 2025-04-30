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
 * Strings for component 'tool_filetypes', language 'pt', version '4.4'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Adicionar um novo tipo de ficheiro';
$string['corestring'] = 'String de idioma alternativa';
$string['corestring_help'] = 'Esta configuração pode ser usada para selecionar uma string de idioma diferente a partir do ficheiro de idioma mimetypes.php. Geralmente deve ficar em branco. Para os tipos personalizados, use o campo de descrição.';
$string['defaulticon'] = 'Ícone predefinido para o tipo MIME';
$string['defaulticon_help'] = 'Caso existam múltiplas extensões de ficheiros do mesmo tipo MIME, selecione esta opção para uma das extensões de forma a que este ícone possa vir a ser utilizado para ficheiros do tipo MIME.';
$string['delete_confirmation'] = 'Tem a certeza absoluta que pretende eliminar \'<strong>{$a}</strong>\'?';
$string['deletea'] = 'Eliminar {$a}';
$string['deletefiletypes'] = 'Eliminar um tipo de ficheiro';
$string['description'] = 'Descrição personalizada';
$string['description_help'] = 'Descrição de um tipo de ficheiro simples, por exemplo, \'Kindle ebook\'. Se o seu site suporta vários idiomas e utiliza o filtro Conteúdos multilingue, pode inserir tags multilingue neste campo para fornecer uma descrição em vários idiomas.';
$string['descriptiontype'] = 'Tipo de descrição';
$string['descriptiontype_custom'] = 'Descrição personalizada especificada neste formulário';
$string['descriptiontype_default'] = 'Predefinido (<i>Tipo MIME</i> ou string de idioma correspondente, caso esteja disponível)';
$string['descriptiontype_help'] = 'Existem três formas possíveis de especificar a descrição.

* Por predefinição é utilizado o <i>Tipo MIME</i>. Se existir um pacote linguístico em mimetypes.php que corresponda ao <i>Tipo MIME</i> em questão, este será usado; caso contrário, será apresentado aos utilizadores o <i>Tipo MIME</i> predefinido.
* Poderá especificar um descrição personalizada neste formulário.
* Poderá especificar o nome do pacote linguístico que pretende utilizar em mimetypes.php, em vez do <i>Tipo MIME</i>.';
$string['descriptiontype_lang'] = 'String de idioma alternativa (a partir de mimetypes.php)';
$string['displaydescription'] = 'Descrição';
$string['editfiletypes'] = 'Editar um tipo de ficheiro já existente';
$string['emptylist'] = 'Não existem tipos de ficheiro definidos.';
$string['error_addentry'] = 'A extensão do tipo de ficheiro, descrição, <i>Tipo MIME</i> e o ícone não devem conter espaço nem ponto-e-vírgula.';
$string['error_defaulticon'] = 'Outra extensão do ficheiro com o mesmo <i>Tipo MIME</i> já está marcada como o ícone predefinido.';
$string['error_extension'] = 'O tipo de extensão do ficheiro <strong>{$a}</strong> já existe ou é inválido. As extensões de ficheiros devem ser únicas e não podem conter caracteres especiais.';
$string['error_notfound'] = 'Não foi possível encontrar o tipo de ficheiro com a extensão {$a}.';
$string['extension'] = 'Extensão';
$string['extension_help'] = 'Extensão de nome do ficheiro sem o ponto, por exemplo, \'mobi\'';
$string['groups'] = 'Grupos de tipos de ficheiro';
$string['groups_help'] = 'Lista opcional de grupos de tipos de ficheiro aos quais este tipo de ficheiro pertence. São categorias genéricas tais como \'documento\' e \'imagem\'.';
$string['icon'] = 'Ficheiro de ícone';
$string['icon_help'] = 'Nome do ficheiro de ícone.

A lista de ícones é retirada do diretório /pix/f da sua instalação Moodle. Pode adicionar ícones personalizados a esta pasta caso seja necessário.';
$string['mimetype'] = '<i>Tipo MIME</i>';
$string['mimetype_help'] = 'Tipo MIME associado a este tipo de ficheiro, por exemplo, ‘application/x-mobipocket-ebook’';
$string['pluginname'] = 'Tipos de ficheiro';
$string['privacy:metadata'] = 'O módulo Tipos de ficheiro não armazena dados pessoais.';
$string['revert'] = 'Restaurar {$a} para as predefinições Moodle';
$string['revert_confirmation'] = 'Tem a certeza de que pretende restaurar <strong>.{$a}</strong> para as predefinições Moodle, descartando todas as alterações?';
$string['revertfiletype'] = 'Restaurar um tipo de ficheiro';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizado';
$string['source_deleted'] = 'Eliminado';
$string['source_modified'] = 'Modificado';
$string['source_standard'] = 'Padrão';
