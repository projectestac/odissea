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
 * Strings for component 'url', language 'pt', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Permitir variáveis de URL';
$string['allowvariables_desc'] = 'Permitir que variáveis sejam adicionadas aos URL. As variáveis permitem passar informações internas, por exemplo, o nome do utilizador, como parte do URL. Tenha atenção aos possíveis riscos de privacidade ao usar esta funcionalidade.';
$string['chooseavariable'] = 'Escolha uma variável…';
$string['clicktoopen'] = 'Clique em {$a} para abrir o recurso.';
$string['configdisplayoptions'] = 'Selecione todas as opções que devem estar disponíveis. As configurações existentes não serão alteradas. Mantenha a tecla Ctrl pressionada para selecionar múltiplas opções.';
$string['configframesize'] = 'Quando uma página Web ou um ficheiro é exibido numa frame, este valor é a altura (em píxeis) da frame superior (que contém a barra de navegação).';
$string['configrolesinparams'] = 'Os nomes dos papéis locais (das configurações das disciplinas) devem estar disponíveis como parâmetros do URL?';
$string['configsecretphrase'] = 'Esta frase secreta é usada para produzir um código encriptado que pode ser enviado para alguns servidores como parâmetro. O código  encriptado é produzido por um valor md5 do endereço IP do utilizador atual concatenado com a sua frase secreta. Isto é, código = md5(IP.frasesecreta). Tenha em atenção que não é fiável porque o endereço IP pode mudar e muitas vezes é partilhado por diferentes computadores.';
$string['contentheader'] = 'Conteúdo';
$string['createurl'] = 'Criar um URL';
$string['displayoptions'] = 'Opções de visualização disponíveis';
$string['displayselect'] = 'Modo de exibição';
$string['displayselect_help'] = 'Esta configuração, em conjunto com o tipo de ficheiro e possibilidades do navegador, determina a forma como é exibido o ficheiro. As opções podem ser:

* Automático: é selecionada automaticamente a melhor opção para exibir o ficheiro;

* Incorporar. o ficheiro é incorporado e exibido na página, mantendo a barra de navegação, a descrição do ficheiro e os blocos laterais;

* Forçar descarga: é aberta uma janela de diálogo para o utilizador abrir ou guardar o ficheiro;

* Mesma janela: apenas o ficheiro é exibido na janela do navegador;

* Janela pop-up: o ficheiro é exibido numa nova janela do navegador sem menus nem barra de endereço;

* Frame: o ficheiro é exibido numa frame, mantendo a barra de navegação e a descrição do ficheiro;

* Nova janela: o ficheiro é exibido numa nova janela do navegador, com menus e barra de endereço.';
$string['displayselectexplain'] = 'Escolha a forma de exibição tendo em conta que nem todos os tipos de exibição são adequados para todos os URLs.';
$string['externalurl'] = 'URL externo';
$string['framesize'] = 'Altura da frame';
$string['indicator:cognitivedepth'] = 'Compreensão do URL';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo aluno num recurso URL.';
$string['indicator:cognitivedepthdef'] = 'Compreensão do URL';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pelos recursos URL durante esse intervalo de análise (Níveis = Não visualizado, Visualizado)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Socialização do URL';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo aluno numa recurso URL.';
$string['indicator:socialbreadthdef'] = 'Socialização do URL';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social oferecido pelos recursos URL durante esse intervalo de análise (Níveis = Sem participação, Participante individual)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Não é possível mostrar este recurso, o URL é inválido';
$string['invalidurl'] = 'Insira um URL válido';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'O URL permite ao professor disponibilizar uma hiperligação para um conteúdo externo na página principal da disciplina, Tudo o que esteja disponível livremente online, como documentos ou imagens, pode ser partilhado, o URL não necessita de ser a página de um site. Pode copiar e colar a hiperligação de qualquer página online ou escolher uma hiperligação específica de um repositório como o Flickr, YouTube ou Wikimedia (dependendo dos repositórios que estão disponíveis na plataforma).

Existe uma série de opções de visualização do URL. Este pode ser incorporado, pode surgir numa nova janela ou, mediante opções avançadas, pode passar informações como o nome do aluno, se necessário.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLs';
$string['name'] = 'Nome';
$string['name_help'] = 'Servirá como o texto da hiperligação para o URL.

Insira um texto significativo que descreva concisamente a finalidade da URL.

Evite usar a palavra "hiperligação". Ajudará os utilizadores com leitores de ecrã, uma vez que os leitores de ecrã anunciam hiperligações (por exemplo: "Moodle.org, hiperligação"), por isso, não há necessidade de incluir a palavra "hiperligação" no campo de nome.';
$string['page-mod-url-x'] = 'Qualquer página do recurso URL';
$string['parameterinfo'] = 'parâmetro=variável';
$string['parametersheader'] = 'Variáveis de URL';
$string['parametersheader_help'] = 'Esta secção permite que passe informações internas como parte do URL. É útil se o URL for uma página da web interativa que recebe parâmetros e para qual pretende passar algo como o nome do utilizador atual, por exemplo. Insira o nome do parâmetro do URL na caixa de texto e selecione a variável do site correspondente.';
$string['pluginadministration'] = 'Administração do URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altura da janela pop-up (em píxeis)';
$string['popupheightexplain'] = 'Especifique a altura predefinida da janela pop-up.';
$string['popupwidth'] = 'Largura da janela pop-up (em píxeis)';
$string['popupwidthexplain'] = 'Especifique a largura predefinida da janela pop-up.';
$string['printintro'] = 'Mostrar descrição do URL';
$string['printintroexplain'] = 'Mostrar a descrição do URL abaixo do conteúdo? Alguns modos de exibição não apresentam a descrição do recurso, mesmo com esta configuração ativa.';
$string['privacy:metadata'] = 'O módulo do recurso URL não armazena quaisquer dados pessoais.';
$string['rolesinparams'] = 'Nome dos papéis nos parâmetros do URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL do servidor';
$string['url:addinstance'] = 'Adicionar novo URL';
$string['url:view'] = 'Ver URL';
