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
 * Strings for component 'filter_wiris', language 'pt', version '4.5'.
 *
 * @package     filter_wiris
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessproviderenabled'] = 'Controlo de acesso';
$string['accessproviderenabled_help'] = 'Se ativar esta opção, apenas os utilizadores autenticados podem aceder aos serviços MathType.';
$string['alloweditorpluginactive'] = 'Editor sempre ativo';
$string['alloweditorpluginactive_help'] = 'Se ativar esta opção, o editor estará sempre disponível independentemente do filtro MathType por WIRIS estar desativado, ou não, na disciplina ou ao nível da atividade. Por predefinição, se o filtro MathType por WIRIS estiver desativado numa disciplina/atividade, o MathType por WIRIS também estará desativado na mesma disciplina/atividade.';
$string['area'] = 'área';
$string['arenotinstalled'] = 'não está instalado. ';
$string['atto'] = 'Atto';
$string['button1'] = 'Verificar MathType por WIRIS';
$string['button2'] = 'Verificar Testes Wiris';
$string['cachedef_formulas'] = 'Fórmulas MathType por WIRIS';
$string['cachedef_images'] = 'Imagens MathType por WIRIS';
$string['clearcache'] = 'Limpar cache';
$string['clearcachedesc'] = 'Limpar a cache do filtro MathType por WIRIS';
$string['clickwirisplugincorrectlyinstalled'] = 'Clique no botão abaixo para verificar se o MathType por WIRIS está instalado corretamente.';
$string['clickwirisquizzescorrectlyinstalled'] = 'Clique no botão abaixo para verificar se Testes Wiris está instalado corretamente.';
$string['connectionsettings'] = 'Configurações da ligação';
$string['contact'] = 'Para mais informações ou se tiver alguma dúvida, entre em contacto com o suporte WIRIS:';
$string['disabled'] = 'Desativado';
$string['editormodalwindow'] = 'Janela modal ativada';
$string['editormodalwindowfullscreen'] = 'Janela modal no modo de ecrã completo';
$string['editormodalwindowfullscreen_help'] = 'Especifica se a janela modal deve ser aberta no modo de ecrã inteiro.';
$string['editornameexpected'] = 'É necessário o nome do editor';
$string['editorsettings'] = 'Configurações do editor';
$string['enabled'] = 'Ativado';
$string['error'] = 'ERRO';
$string['errordeletingcache'] = 'Erro ao apagar a cache na área {$a}';
$string['errorsavingcache'] = 'Erro ao guardar a cache na área {$a}';
$string['filter_standalone'] = 'Apenas o filtro MathType por WIRIS';
$string['filter_standalonedesc'] = 'Poderá mostrar as fórmulas já existentes, mas a criação de novas fórmulas não estará disponível. Também remove a mensagem de aviso.';
$string['filtermustbeinstalled'] = 'O filtro tem de estar instalado na pasta de filtros do Moodle.';
$string['filtername'] = 'MathType por WIRIS';
$string['furtherinformation'] = 'Para mais informações, consulte a página de documentação ';
$string['havesameversion'] = '&nbsp;tem a mesma versão';
$string['imageformat'] = 'Formato da imagem';
$string['imageformat_help'] = 'Especifica o formato da imagem (svg ou png).';
$string['imageservicehost'] = 'Servidor do serviço';
$string['imageservicehost_help'] = 'Especifica o servidor da imagem da fórmula.';
$string['imageservicepath'] = 'Caminho do serviço';
$string['imageservicepath_help'] = 'Especifica o caminho do servidor da imagem da fórmula.';
$string['imageserviceport'] = 'Porta do serviço';
$string['imageserviceport_help'] = 'Especifica a porta do servidor da imagem da fórmula.';
$string['imageserviceprotocol'] = 'Protocolo do serviço';
$string['imageserviceprotocol_help'] = 'Especifica o protocolo do servidor da imagem da fórmula.';
$string['imagesettings'] = 'Configurações da imagem';
$string['impossibletofindwirisfilterversion'] = 'Não é possível encontrar o ficheiro da versão do filtro MathType por WIRIS.';
$string['lookingforfilterfiles'] = 'A pesquisar ficheiros do filtro';
$string['lookingforwirisfilterversion'] = 'A pesquisara versão do filtro MathType por WIRIS';
$string['lookingforwirisplugin'] = 'A pesquisar MathType por WIRIS para&nbsp;';
$string['lookingforwirispluginenabled'] = 'A pesquisar MathType por WIRIS para&nbsp;';
$string['mustbeinstalled'] = '&nbsp;tem de estar instalado.';
$string['noteditorspluginsinstalled'] = 'Não estão instalados módulos de editores';
$string['notsupportededitor'] = '&nbsp;não é um editor suportado.';
$string['ok'] = 'OK';
$string['oldconfiguration'] = 'Um antigo ficheiro \'configuration.in\'i foi detetado em {$a}. Por favor, mova-o para a pasta /filter/wiris/configuration.ini.';
$string['onlytextareaeditorinstalled'] = 'Está instalado apenas um módulo de editor de área de texto';
$string['or'] = 'ou ';
$string['pluginname'] = 'MathType por WIRIS';
$string['pluginperformance'] = 'Modo de desempenho da imagem';
$string['pluginperformance_help'] = 'Especifica se a resposta deve ser JSON em vez de um binário que permite que os pedidos sejam armazenados em cache. Ative o desempenho para usar a resposta JSON.';
$string['rendertype'] = 'Tipo de renderização';
$string['rendertype_help'] = 'Especifica como renderizar as fórmulas.<br>- PHP: o serviço de renderização Wiris é chamado a partir do módulo de filtro.<br>- Cliente: todas as solicitações aos servidores Wiris são feitas a partir do navegador.<br><i>É altamente recomendado deixar a renderização do lado do servidor ativada (PHP), que é definida por predefinição. Só é recomendado ativar a renderização do lado do cliente (Cliente) em ambientes de alta simultaneidade, onde um grande número de utilizadores simultâneos precisa representar várias expressões matemáticas complexas simultaneamente</i>.';
$string['securitysettings'] = 'Configurações de segurança';
$string['tinymce'] = 'TinyMCE';
$string['title'] = 'Página de teste do filtro MathType por WIRIS';
$string['version'] = 'versão';
$string['versionsdontmatch'] = '&nbsp;versões não coincidentes';
$string['windowsettings'] = 'Configurações da janela';
$string['wirisbehaterroreditornotfound'] = 'Não foi possível encontrar MathType por WIRIS';
$string['wiriscas'] = 'Calculadora';
$string['wirischemeditor'] = 'Editor de Química';
$string['wirischemeditor_help'] = 'Mostrar o botão Editor de ChemType.';
$string['wirisfilterversion'] = 'Versão do filtro MathType por WIRIS =&nbsp;';
$string['wirismatheditor'] = 'Editor de Matemática';
$string['wirismatheditor_help'] = 'Mostrar o botão Editor de MathType.';
$string['wirispluginfilterfor'] = 'Filtro MathType por WIRIS e MathType por WIRIS para&nbsp;';
$string['wirispluginfiltermustbeinstalled'] = 'O filtro MathType por WIRIS tem de estar instalado.';
$string['wirispluginfor'] = 'MathType por WIRIS para&nbsp;';
$string['wirispluginforatto'] = 'MathType por WIRIS para Atto&nbsp;';
$string['wirispluginfortinymce'] = 'MathType por WIRIS para TinyMCE&nbsp;';
