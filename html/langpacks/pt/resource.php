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
 * Strings for component 'resource', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   resource
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Clique na hiperligação {$a} para descarregar o ficheiro.';
$string['clicktoopen2'] = 'Clique na hiperligação {$a} para ver o ficheiro.';
$string['configdisplayoptions'] = 'Selecione todas as opções que devem estar disponíveis, as definições existentes não serão alteradas. Pressione a tecla CTRL para selecionar múltiplas opções.';
$string['configframesize'] = 'Quando uma página Web ou um ficheiro são visualizados numa frame, este valor corresponde à altura (em pixeis) da frame superior (que contém a navegação).';
$string['configparametersettings'] = 'Esta opção define o valor predefinido que é introduzido no painel de configuração de parâmetros quando adiciona um novo recurso. Depois da primeira vez, este valor é substituído pelas preferências individuais do utilizador.';
$string['configpopup'] = 'Quando se adiciona um recurso que pode ser apresentado numa nova janela, deve ser essa a opção predefinida?';
$string['configpopupdirectories'] = 'Devem as janelas de pop-up apresentar hiperligações para as pastas por predefinição?';
$string['configpopupheight'] = 'Qual deve ser a altura predefinida para as janelas de pop-up?';
$string['configpopuplocation'] = 'Devem as janelas de pop-up apresentar, por predefinição, a barra de endereço?';
$string['configpopupmenubar'] = 'Devem as janelas de pop-up apresentar, por predefinição, a barra de menus?';
$string['configpopupresizable'] = 'Devem as janelas de pop-up ser, por predefinição, redimensionáveis?';
$string['configpopupscrollbars'] = 'Devem as janelas de pop-up apresentar, por predefinição, a barra de scroll?';
$string['configpopupstatus'] = 'Devem as janelas de pop-up apresentar, por predefinição, a barra de estado?';
$string['configpopuptoolbar'] = 'Devem as janelas de pop-up apresentar, por predefinição, a barra de ferramentas?';
$string['configpopupwidth'] = 'Qual deve ser a largura predefinida para as janelas de pop-up?';
$string['contentheader'] = 'Conteúdo';
$string['displayoptions'] = 'Opções de visualização disponíveis';
$string['displayselect'] = 'Modo de exibição';
$string['displayselectexplain'] = 'Escolha a forma de exibição do recurso (nem todos os tipos de exibição são adequados para todos os ficheiros).';
$string['displayselect_help'] = 'Esta configuração, em conjunto com o tipo de ficheiro e possibilidades do navegador, determina a forma como é exibido o ficheiro. As opções podem ser:

* Automático: é selecionada automaticamente a melhor opção para exibir o ficheiro;

* Incorporar. o ficheiro é incorporado e exibido na página, mantendo a barra de navegação, a descrição do ficheiro e os blocos laterais;

* Forçar descarga: é aberta uma janela de diálogo para o utilizador abrir ou guardar o ficheiro;

* Mesma janela: apenas o ficheiro é exibido na janela do navegador;

* Janela de pop-up: o ficheiro é exibido numa nova janela do navegador sem menus nem barra de endereço;

* Frame: o ficheiro é exibido numa frame, mantendo a barra de navegação e a descrição do ficheiro;

* Nova janela: o ficheiro é exibido numa nova janela do navegador, com menus e barra de endereço.';
$string['displayselect_link'] = 'mod/file/mod';
$string['dnduploadresource'] = 'Criar novo ficheiro';
$string['encryptedcode'] = 'Código encriptado';
$string['filenotfound'] = 'Ficheiro não encontrado';
$string['filterfiles'] = 'Aplicar filtros ao conteúdo do ficheiro';
$string['filterfilesexplain'] = 'Selecione quais os ficheiros a serem filtrados, tendo em conta que pode causar problemas em alguns applets Java e Flash. Certifique-se que todos os ficheiros de texto se encontram na codificação UTF-8.';
$string['filtername'] = 'Hiperligações automáticas para nomes dos recursos';
$string['forcedownload'] = 'Forçar descarga';
$string['framesize'] = 'Largura da frame';
$string['indicator:cognitivedepth'] = 'Compreensão do Ficheiro';
$string['indicator:cognitivedepthdef'] = 'Compreensão do Ficheiro';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pelos recursos Ficheiro durante esse intervalo de análise (Níveis = Não visualizado, Visualizado)';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na capacidade cognitiva alcançada pelo aluno no recurso Ficheiro.';
$string['indicator:socialbreadth'] = 'Socialização do Ficheiro';
$string['indicator:socialbreadthdef'] = 'Socialização do Ficheiro';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social oferecido pelos recursos Ficheiro durante esse intervalo de análise (Níveis = Sem participação, Participante individual, Participante com outros)';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno no recurso Ficheiro.';
$string['legacyfiles'] = 'Migração de ficheiro antigo de disciplina';
$string['legacyfilesactive'] = 'Ativo';
$string['legacyfilesdone'] = 'Terminado';
$string['modifieddate'] = 'Modificado {$a}';
$string['modulename'] = 'Ficheiro';
$string['modulename_help'] = 'O recurso Ficheiro permite que um professor insira um ficheiro como um recurso de uma disciplina. Sempre que o navegador o permitir, o ficheiro será exibido dentro da interface da disciplina, caso contrário os alunos poderão descarregar. Este recurso pode incluir ficheiros de suporte, como por exemplo uma página HTML pode ter imagens incorporadas.

Tenha em atenção que os alunos precisam de ter os programas apropriados instalados nos seus computadores para visualizarem os ficheiros.

Um ficheiro pode ser utilizado para:

* Partilhar apresentações com a turma;
* Incluir um mini site como um recurso da disciplina;
* Disponibilizar ficheiros de rascunho de certos programas para que os alunos possam editar e submeterpara avaliação.';
$string['modulename_link'] = 'mod/resource/view';
$string['modulenameplural'] = 'Ficheiros';
$string['notmigrated'] = 'O tipo de recurso herdado ({$a}) ainda não foi migrado.';
$string['optionsheader'] = 'Mostrar opções';
$string['page-mod-resource-x'] = 'Qualquer ficheiro dos recursos';
$string['pluginadministration'] = 'Administração do Ficheiro';
$string['pluginname'] = 'Ficheiro';
$string['popupheight'] = 'Altura da janela de pop-up (em pixeis)';
$string['popupheightexplain'] = 'Altura predefinida da janela de pop-up';
$string['popupresource'] = 'Este documento deve aparecer numa janela de pop-up.';
$string['popupresourcelink'] = 'Se tal não acontecer, clique aqui: {$a}';
$string['popupwidth'] = 'Largura da janela de pop-up (em pixeis)';
$string['popupwidthexplain'] = 'Largura predefinida da janela de pop-up';
$string['printintro'] = 'Mostrar descrição do recurso';
$string['printintroexplain'] = 'Mostrar a descrição do recurso abaixo do conteúdo? Alguns modos de exibição não apresentam o nome do recurso, mesmo com esta configuração ativa.';
$string['privacy:metadata'] = 'O módulo do recurso Ficheiro não armazena quaisquer dados pessoais.';
$string['resource:addinstance'] = 'Adicionar um novo recurso';
$string['resourcecontent'] = 'Ficheiros e subpastas';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['resource:exportresource'] = 'Exportar recurso';
$string['resource:view'] = 'Ver recurso';
$string['search:activity'] = 'Ficheiro';
$string['selectmainfile'] = 'Selecione o ficheiro principal clicando no ícone ao lado do nome do ficheiro.';
$string['showdate'] = 'Exibir data de carregamento/data de modificação';
$string['showdate_desc'] = 'Pretende exibir a data de carregamento/data de modificação na página da disciplina?';
$string['showdate_help'] = 'Exibir a data de carregamento/data de modificação ao lado das hiperligações para os ficheiros.';
$string['showsize'] = 'Mostrar tamanho';
$string['showsize_desc'] = 'Mostrar tamanho do ficheiro na página principal da disciplina?';
$string['showsize_help'] = 'Mostra o tamanho do ficheiro, por exemplo \'3.1 MB\', junto à hiperligação para o ficheiro.

Se existir mais do que um ficheiro no recurso, é exibido o tamanho total dos ficheiros.';
$string['showtype'] = 'Mostrar tipo';
$string['showtype_desc'] = 'Mostrar o tipo do ficheiro (ex. \'Word\') na página principal da disciplina?';
$string['showtype_help'] = 'Mostra a extensão do ficheiro, como \'Word\', junto à hiperligação para o ficheiro.

Se existirem vários ficheiros neste recurso, é exibido o tipo do ficheiro principal.

Caso o tipo do ficheiro seja desconhecido para a plataforma, não será exibido.';
$string['uploadeddate'] = 'Carregado {$a}';
