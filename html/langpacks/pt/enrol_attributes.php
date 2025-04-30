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
 * Strings for component 'enrol_attributes', language 'pt', version '4.4'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Adicionar condição';
$string['addgroup'] = 'Adicionar grupo';
$string['ajax-error'] = 'Ocorreu um erro';
$string['ajax-okforced'] = 'Foram inscritos {$a} utilizadores';
$string['ajax-okpurged'] = 'As inscrições foram canceladas';
$string['attributes:config'] = 'Configurar instâncias do módulo';
$string['attributes:manage'] = 'Gerir utilizadores inscritos';
$string['attributes:unenrol'] = 'Cancelar a inscrição de utilizadores da disciplina';
$string['attributes:unenrolself'] = 'Cancelar a própria inscrição da disciplina';
$string['attrsyntax'] = 'Regras dos campos de perfil do utilizador';
$string['attrsyntax_help'] = '<p>Estas regras só podem usar campos de perfil do utilizador personalizados.</p>';
$string['cachedef_dbquerycache'] = 'Cache da consulta à base de dados';
$string['confirmforce'] = '(Re)inscrever todos os utilizadores correspondentes a esta regra.';
$string['confirmpurge'] = 'Cancelar todas as inscrições correspondentes a esta regra.';
$string['defaultrole'] = 'Papel predefinido';
$string['defaultrole_desc'] = 'Papel predefinido usado para inscrever utilizadores através deste módulo (cada instância pode substituir esta configuração).';
$string['defaultwhenexpired'] = 'Comportamento predefinido após expiração de atributos';
$string['defaultwhenexpired_desc'] = 'O que fazer com utilizadores que já não correspondem à regra do atributo. Esta configuração pode ser substituída em cada instância de inscrição.';
$string['deletecondition'] = 'Apagar condição';
$string['force'] = 'Forçar inscrições agora';
$string['group'] = 'Atribuição de grupo';
$string['group_help'] = 'Pode atribuir nenhum ou vários grupos';
$string['mappings'] = 'Mapeamentos Shibboleth';
$string['mappings_desc'] = 'Ao usar a autenticação Shibboleth, este módulo pode atualizar automaticamente o perfil de um utilizador a cada autenticação.<br><br> Por exemplo, se pretender atualizar o campo de perfil do utilizador <code>homeorganizationtype</code> com o atributo Shibboleth <code>Shib-HomeOrganizationType</code> (desde que seja a variável de ambiente disponível para o servidor durante a autenticação), pode inserir numa linha: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>Pode inserir quantas linhas forem necessárias.<br><br>Para não usar esta funcionalidade, ou se não usar a autenticação Shibboleth, basta deixar em branco.';
$string['no_custom_field'] = 'Parece não haver qualquer campo personalizado. Vá para <a href="{$a}" target="_blank">configurações do utilizador</a> para adicionar um.';
$string['no_profile_field_selected'] = 'Não foi selecionado nenhum campo de perfil nas configurações do módulo \'Inscrição por campos de perfil do utilizador\'.';
$string['observelogins'] = 'Inscrever utilizadores ao autenticarem-se';
$string['observelogins_desc'] = 'Tentar inscrever os utilizadores imediatamente quando se autenticarem no site. Isto pode afetar o desempenho do seu site. Desative esta funcionalidade se acontecer muitos utilizadores autenticarem-se ao mesmo tempo e o facto de serem inscritos ao mesmo tempo pode provocar um congestionamento.';
$string['pluginname'] = 'Inscrição por campos de perfil do utilizador';
$string['privacy:metadata'] = 'O módulo Inscrição por campos de perfil do utilizador não armazena quaisquer dados pessoais.';
$string['profilefields'] = 'Campos de perfil a usar no seletor';
$string['profilefields_desc'] = 'Quais os campos de perfil do utilizador que podem ser usados ao configurar uma instância de inscrição?<br><br>
<div class="alert alert-warning alert-block fade in" role="alert" data-aria-autofocus="true">Se não selecionar um atributo, o uso do módulo é discutível e, por isso, desative o seu uso nas disciplinas.</div><br>Mesmo assim, a funcionalidade abaixo pode continuar a ser usada.';
$string['purge'] = 'Cancelar inscrições';
$string['removewhenexpired'] = 'Cancelar inscrição após expiração de atributos';
$string['removewhenexpired_help'] = 'Cancelar a inscrição de utilizadores ao autenticarem-se se já não corresponderem à regra do atributo.';
$string['whenexpired'] = 'Comportamento após expiração de atributos';
$string['whenexpired_help'] = 'O que fazer com utilizadores que já não correspondem à regra do atributo.';
$string['whenexpireddonothing'] = 'Deixar utilizador inscrito';
$string['whenexpiredremove'] = 'Cancelar a inscrição do utilizador';
$string['whenexpiredsuspend'] = 'Suspender o utilizador';
