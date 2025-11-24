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
 * Strings for component 'ai', language 'pt', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Aceitar e continuar';
$string['action'] = 'Ação';
$string['action_generate_image'] = 'Gerar imagem';
$string['action_generate_image_desc'] = 'Gerar uma imagem com base numa prompt de texto.';
$string['action_generate_text'] = 'Gerar texto';
$string['action_generate_text_desc'] = 'Gerar um texto com base numa prompt de texto.';
$string['action_generate_text_instruction'] = 'Receberá uma entrada de texto do utilizador. A sua tarefa é gerar texto com base no pedido do utilizador. Siga estas instruções importantes:
 1. Devolver o resumo apenas em texto simples.
 2. Não incluir qualquer formatação de marcadores, saudações ou banalidades.';
$string['action_summarise_text'] = 'Resumir texto';
$string['action_summarise_text_desc'] = 'Resume o texto do conteúdo de uma página de uma disciplina.';
$string['action_summarise_text_instruction'] = 'Receberá uma entrada de texto do utilizador. A sua tarefa é resumir o texto fornecido. Siga estas orientações:
 1. Condensar: resuma textos longos em pontos-chave.
 2. Simplificar: torne a informação complexa mais fácil de compreender, especialmente para os alunos.

Instruções importantes:
 1. Devolver o resumo apenas em texto simples.
 2. Não incluir qualquer formatação de marcadores, saudações ou banalidades.
 3. Concentrar-se na clareza, concisão e acessibilidade.

Certifique-se de que o resumo é fácil de ler e transmite eficazmente os pontos principais do texto original.';
$string['action_translate_text'] = 'Traduzir texto';
$string['action_translate_text_desc'] = 'Traduza o texto fornecido de um idioma para outro.';
$string['actionsettingprovider'] = 'Configurações da ação {$a}';
$string['actionsettingprovider_desc'] = 'Estas configurações controlam a forma como {$a->providername} executa a ação {$a->actionname}.';
$string['ai'] = 'IA';
$string['aiplacements'] = 'Inserções de IA';
$string['aiproviders'] = 'Fornecedores de IA';
$string['aiusagepolicy'] = 'Política de utilização de IA';
$string['availableplacements'] = 'Escolha onde as ações de IA estão disponíveis';
$string['availableplacements_desc'] = 'As inserções definem como e onde as ações de IA podem ser utilizadas no seu site. Pode escolher quais as ações disponíveis em cada inserção através das configurações.';
$string['availableproviders'] = 'Gerir os fornecedores de IA ligados ao seu LMS';
$string['availableproviders_desc'] = 'Os fornecedores de IA adicionam funcionalidades de IA ao seu site através de "ações", como o resumo de texto ou a geração de imagens. <br/>
Pode gerir as ações de cada fornecedor nas respetivas configurações.';
$string['contentwatermark'] = 'Gerado por IA';
$string['declineaipolicy'] = 'Declinar';
$string['manageaiplacements'] = 'Gerir inserções de IA';
$string['manageaiproviders'] = 'Gerir fornecedores de IA';
$string['noproviders'] = 'Esta ação não está disponível. Nenhum <a href="{$a}">fornecedor de IA</a> configurado para esta ação.';
$string['placement'] = 'Inserção';
$string['placementactionsettings'] = 'Ações';
$string['placementactionsettings_desc'] = 'As ações de IA disponíveis para esta inserção.';
$string['placementsettings'] = 'Configurações específicas da inserção';
$string['placementsettings_desc'] = 'Estas configurações controlam a forma como este posicionamento de IA liga-se ao serviço de IA e às operações relacionadas.';
$string['privacy:metadata:ai_action_generate_image'] = 'Uma tabela que armazena os pedidos de geração de imagem efetuados pelos utilizadores.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'A proporção das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'O número de imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'A prompt para o pedido de geração de imagem.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'A qualidade das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'O prompt revisto das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'O URL da origem das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'O estilo das imagens geradas.';
$string['privacy:metadata:ai_action_generate_text'] = 'Uma tabela que armazena os pedidos de geração de texto feitos pelos utilizadores.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Os tokens de conclusão utilizados para gerar o texto.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'O hash exclusivo que representa o estado/versão do modelo e do conteúdo.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'O texto real gerado pelo modelo de IA com base na prompt.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'O prompt para o pedido de geração de texto.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Os tokens de prompt utilizados para gerar o texto.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'O ID da resposta.';
$string['privacy:metadata:ai_action_register'] = 'Uma tabela que armazena os pedidos de ação feitos pelos utilizadores.';
$string['privacy:metadata:ai_action_register:actionid'] = 'O ID do pedido da ação.';
$string['privacy:metadata:ai_action_register:actionname'] = 'O nome da ação do pedido.';
$string['privacy:metadata:ai_action_register:provider'] = 'O nome do fornecedor que tratou o pedido.';
$string['privacy:metadata:ai_action_register:success'] = 'O estado do pedido da ação.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'A data/hora da conclusão do pedido.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'A data/hora de criação do pedido.';
$string['privacy:metadata:ai_action_register:userid'] = 'O ID do utilizador que fez o pedido.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Uma tabela que armazena os pedidos de texto resumido feitos pelos utilizadores.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Os tokens de conclusão utilizados para resumir o texto.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'O hash exclusivo que representa o estado/versão do modelo e do conteúdo.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'O texto real gerado pelo modelo de IA com base na prompt.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'O prompt para o pedido de texto resumido.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Os tokens do prompt utilizados para resumir o texto.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'O ID da resposta.';
$string['privacy:metadata:ai_policy_register'] = 'Uma tabela que armazena o estado da aceitação da política de IA para cada utilizador.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'O ID do contexto cujos dados foram guardados.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'A data/hora a que o utilizador aceitou a política de IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'O ID do utilizador cujos dados foram guardados.';
$string['provider'] = 'Fornecedor';
$string['provideractionsettings'] = 'Ações';
$string['provideractionsettings_desc'] = 'Escolha e configure as ações que {$a} pode realizar no seu site.';
$string['providers'] = 'Fornecedores';
$string['providersettings'] = 'Configurações';
$string['userpolicy'] = '<h4><strong>Bem-vindo à nova funcionalidade de IA!</strong></h4>
<p>Esta funcionalidade de Inteligência Artificial (IA) baseia-se exclusivamente em Large Language Models (LLM) externos para melhorar a sua experiência de aprendizagem e ensino. Antes de começar a utilizar estes serviços de IA, leia esta política de utilização.</p>
<h4><strong>Precisão do conteúdo gerado por IA</strong></h4>
<p>A IA pode fornecer sugestões e informações úteis, mas a sua precisão pode variar. Deve sempre verificar as informações fornecidas para ter a certeza de que são precisas, completas e adequadas à sua situação específica.</p>
<h4><strong>Como são processados os seus dados?</strong></h4>
<p>Esta funcionalidade de IA utiliza Large Language Models (LLM) externos. Se utilizar esta funcionalidade, quaisquer informações ou dados pessoais que partilhe serão tratados de acordo com a política de privacidade destes LLM. Recomendamos que leia a política de privacidade do LLM para compreender como os seus dados pessoais serão tratados.
Além disso, pode ser mantido, neste site, um registo das suas interações com os recursos de IA.</p>
<p>Se tiver dúvidas sobre como os seus dados são processados, consulte os seus professores ou os administradores da organização de aprendizagem.</p>
<p>Ao continuar, reconhece que compreende e concorda com esta política.</p>';
