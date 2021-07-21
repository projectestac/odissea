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
 * Strings for component 'tool_recyclebin', language 'pt', version '3.11'.
 *
 * @package     tool_recyclebin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertdeleted'] = '\'{$a->name}\' foi apagado.';
$string['alertemptied'] = 'A reciclagem foi esvaziada.';
$string['alertrestored'] = '\'{$a->name}\' foi restaurado.';
$string['autohide'] = 'Ocultar automaticamente';
$string['autohide_desc'] = 'Oculta automaticamente a hiperligação para a reciclagem quando a mesma está vazia.';
$string['categorybinenable'] = 'Ativar reciclagem na categoria';
$string['categorybinexpiry'] = 'Tempo de vida da disciplina';
$string['categorybinexpiry_desc'] = 'Por quanto tempo deverá uma disciplina apagada permanecer na reciclagem?';
$string['coursebinenable'] = 'Ativar reciclagem na disciplina';
$string['coursebinexpiry'] = 'Tempo de vida do item';
$string['coursebinexpiry_desc'] = 'Por quanto tempo deverá um item apagado permanecer na reciclagem?';
$string['datedeleted'] = 'Data apagada';
$string['deleteall'] = 'Esvaziar reciclagem';
$string['deleteallconfirm'] = 'Tem a certeza de que pretende apagar todos os itens da reciclagem?';
$string['deleteconfirm'] = 'Tem a certeza de que pretende apagar o item selecionado da reciclagem?';
$string['deleteexpirywarning'] = 'Os conteúdos serão permanentemente apagados após {$a}.';
$string['eventitemcreated'] = 'Item criado';
$string['eventitemcreated_desc'] = 'Item criado com o ID {$a->objectid}.';
$string['eventitemdeleted'] = 'Item apagado';
$string['eventitemdeleted_desc'] = 'O item com o ID {$a->objectid} foi apagado.';
$string['eventitemrestored'] = 'Item restaurado';
$string['eventitemrestored_desc'] = 'O item com o ID {$a->objectid} foi restaurado.';
$string['invalidcontext'] = 'Contexto fornecido inválido.';
$string['noitemsinbin'] = 'A reciclagem está vazia.';
$string['notenabled'] = 'Desculpe, mas a funcionalidade reciclagem foi desativada pelo administrador.';
$string['pluginname'] = 'Reciclagem';
$string['privacy:metadata'] = 'O módulo Reciclagem não armazena quaisquer dados pessoais.';
$string['recyclebin:deleteitems'] = 'Apagar itens da reciclagem';
$string['recyclebin:restoreitems'] = 'Restaurar itens da reciclagem';
$string['recyclebin:viewitems'] = 'Ver itens da reciclagem';
$string['taskcleanupcategorybin'] = 'Esvaziar reciclagem da categoria';
$string['taskcleanupcoursebin'] = 'Esvaziar reciclagem da disciplina';
