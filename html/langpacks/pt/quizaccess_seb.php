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
 * Strings for component 'quizaccess_seb', language 'pt', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Adicionar novo modelo';
$string['allowedbrowserkeysdistinct'] = 'As chaves têm de ser todas diferentes.';
$string['allowedbrowserkeyssyntax'] = 'A chave deve ser uma cadeia hexadecimal de 64 caracteres.';
$string['cachedef_config'] = 'Cache da configuração SEB';
$string['cachedef_configkey'] = 'Cache da chave de configuração SEB';
$string['cachedef_quizsettings'] = 'Cache da configurações do teste SEB';
$string['cantdelete'] = 'O modelo não pode ser apagado porque foi utilizado em um ou mais testes';
$string['cantedit'] = 'O modelo não pode ser modificado porque está a ser utilizado em um ou mais testes.';
$string['checkingaccess'] = 'A verificar acesso ao Safe Exam Browser...';
$string['clientrequiresseb'] = 'Este teste foi configurado para usar o Safe Exam Browser com a configuração do cliente.';
$string['confirmtemplateremovalquestion'] = 'Tem a certeza de que pretende remover este modelo?';
$string['confirmtemplateremovaltitle'] = 'Confirma a remoção do modelo?';
$string['conflictingsettings'] = 'Não tem permissão para atualizar as configurações existentes do Safe Exam Browser.';
$string['content'] = 'Modelo';
$string['description'] = 'Descrição';
$string['disabledsettings'] = 'Desativar configurações';
$string['disabledsettings_help'] = 'As configurações Safe Exam Browser do teste não poderão ser alteradas se já houver tentativas de resposta ao teste. Para alterar esta configuração, primeiro tem de apagar todas as tentativas do teste.';
$string['downloadsebconfig'] = 'Descarregar o ficheiro de configuração SEB';
$string['duplicatetemplate'] = 'Já existe um modelo com o este nome.';
$string['edittemplate'] = 'Editar modelo';
$string['enabled'] = 'Ativado';
$string['error:ws:nokeyprovided'] = 'Tem de indicar pelo menos uma chave Safe Exam Browser.';
$string['error:ws:quiznotexists'] = 'Não foi encontrado o teste correspondente ao ID do módulo da disciplina: {$a}';
$string['event:accessprevented'] = 'Foi impedido o acesso ao teste';
$string['event:templatecreated'] = 'O modelo SEB foi criado';
$string['event:templatedeleted'] = 'O modelo SEB foi apagado';
$string['event:templatedisabled'] = 'O modelo SEB foi desativado';
$string['event:templateenabled'] = 'O modelo SEB foi ativado';
$string['event:templateupdated'] = 'O modelo SEB foi atualizado';
$string['exitsebbutton'] = 'Sair do Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Carregar ficheiro de configuração do Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Carregue o seu ficheiro de configuração do Safe Exam Browser para este teste.';
$string['filenotpresent'] = 'Carregue o ficheiro de configuração do SEB';
$string['fileparsefailed'] = 'Não foi possível guardar o ficheiro carregado como ficheiro de configuração do SEB.';
$string['httplinkbutton'] = 'Descarregar a configuração';
$string['invalid_browser_key'] = 'Chave do navegador SEB inválida';
$string['invalid_config_key'] = 'Chave de configuração SEB inválida';
$string['invalidkeys'] = 'Não foi possível validar as chaves do Safe Exam Browser. Verifique se está a usar o Safe Exam Browser com o ficheiro de configuração correto.';
$string['invalidtemplate'] = 'Modelo de configuração SEB inválido';
$string['manage_templates'] = 'Modelos Safe Exam Browser';
$string['managetemplates'] = 'Gerir modelos';
$string['missingrequiredsettings'] = 'Estão em falta alguns valores obrigatórios nas definições da configuração.';
$string['name'] = 'Nome';
$string['newtemplate'] = 'Novo modelo';
$string['noconfigfilefound'] = 'Não foi possível encontrar qualquer ficheiro carregado de configuração do SEB para o teste com cmdi: {$a}';
$string['noconfigfound'] = 'Nenhuma configuração do SEB foi encontrada para o teste com cmid: {$a}';
$string['not_seb'] = 'Nenhum Safe Exam Browser está a ser usado';
$string['notemplate'] = 'Nenhum modelo';
$string['passwordnotset'] = 'As configurações atuais exigem que os testes que usam o Safe Exam Browser tenham uma senha definida.';
$string['pluginname'] = 'Regras de acesso Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Configurações do Safe Exam Browser para um teste. Inclui o ID do último utilizador a criar ou modificar as configurações.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID do teste para o qual existem configurações.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Data e hora Unix em que as configurações foram criadas';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Data/hora Unix em que as configurações foram modificadas pela última vez.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID do utilizador que criou ou modificou as configurações pela última vez.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Configurações do modelo do Safe Exam Browser. Inclui o ID do último utilizador para criar ou modificar o modelo.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Data e hora Unix em que o modelo foi criado';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Data/hora Unix em que o modelo foi modificado.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID do utilizador que criou ou modificou o modelo pela última vez.';
$string['quizsettings'] = 'Configurações do teste';
$string['restoredfrom'] = '{$a->name} (recuperado via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Ignorar o requisito para visualizar o teste no Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Modificar a configuração SEB do teste: Selecionar ficheiro de configuração do SEB.';
$string['seb:manage_seb_activateurlfiltering'] = 'Modificar a configuração SEB do teste: Ativar filtragem de URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Modificar a configuração SEB do teste: Modificar as chaves permitidas do Safe Exam Browser';
$string['seb:manage_seb_allowreloadinexam'] = 'Modificar a configuração SEB do teste: Permitir atualizar';
$string['seb:manage_seb_allowspellchecking'] = 'Modificar a configuração SEB do teste: Permitir a verificação ortográfica';
$string['seb:manage_seb_allowuserquitseb'] = 'Modificar a configuração SEB do teste: Permitir sair';
$string['seb:manage_seb_enableaudiocontrol'] = 'Modificar a configuração SEB do teste: Ativar controlo do áudio';
$string['seb:manage_seb_expressionsallowed'] = 'Modificar a configuração SEB do teste: Expressões simples permitidas';
$string['seb:manage_seb_expressionsblocked'] = 'Modificar a configuração SEB do teste: Expressões simples bloqueadas';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modificar a configuração SEB do teste: Filtrar conteúdo incorporado';
$string['seb:manage_seb_linkquitseb'] = 'Modificar a configuração SEB do teste: Hiperligação para sair';
$string['seb:manage_seb_muteonstartup'] = 'Modificar a configuração SEB do teste: Silencioso no arranque';
$string['seb:manage_seb_quitpassword'] = 'Modificar a configuração SEB do teste: Senha para sair';
$string['seb:manage_seb_regexallowed'] = 'Modificar a configuração SEB do teste: Expressões regulares permitidas';
$string['seb:manage_seb_regexblocked'] = 'Modificar a configuração SEB do teste: Expressões regulares bloqueadas';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Modificar a configuração SEB do teste: Forçar o uso do Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modificar a configuração SEB do teste: Mostrar o esquema do teclado';
$string['seb:manage_seb_showreloadbutton'] = 'Modificar a configuração SEB do teste: Mostrar botão de atualizar';
$string['seb:manage_seb_showsebdownloadlink'] = 'Modificar a configuração SEB do teste: Mostrar botão para descarregar o Safe Exam Browser';
$string['seb:manage_seb_showsebtaskbar'] = 'Modificar a configuração SEB do teste: Mostrar a barra de tarefas';
$string['seb:manage_seb_showtime'] = 'Modificar a configuração SEB do teste: Mostrar hora';
$string['seb:manage_seb_showwificontrol'] = 'Modificar a configuração SEB do teste: Mostrar controlo do Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Modificar a configuração SEB do teste: Selecionar modelo do SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Modificar a configuração SEB do teste: Confirmar ao sair';
$string['seb:managetemplates'] = 'Gerir modelos de configuração SEB';
$string['seb_activateurlfiltering'] = 'Ativar filtragem de URL';
$string['seb_activateurlfiltering_help'] = 'Se ativar esta opção, os URL serão filtrados ao carregar páginas da web. O conjunto de filtros deve ser definido abaixo.';
$string['seb_allowedbrowserexamkeys'] = 'Chaves permitidas para o Safe Exam Browser';
$string['seb_allowedbrowserexamkeys_help'] = 'Neste campo, pode inserir as chaves permitidas do Safe Exam Browser para versões do Safe Exam Browser que têm permissão para aceder a este teste. Se nenhuma chave for inserida, as chaves do Safe Exam Browser não são verificadas.';
$string['seb_allowreloadinexam'] = 'Permitir atualizar no exame';
$string['seb_allowreloadinexam_help'] = 'Se ativar esta opção, a atualização da página é permitida (botão atualizar na barra de tarefas do SEB, barra de ferramentas do navegador, menu deslizante lateral do iOS, tecla de atalho do teclado F5 / Cmd+R). Tenha em atenção que a cache offline poderá ser perdida se o utilizador tenta atualizar uma página sem ligação à Internet.';
$string['seb_allowspellchecking'] = 'Ativar verificação ortográfica';
$string['seb_allowspellchecking_help'] = 'Se ativar esta opção, a verificação ortográfica é permitida no navegador SEB.';
$string['seb_allowuserquitseb'] = 'Ativar a saída do SEB';
$string['seb_allowuserquitseb_help'] = 'Se ativar esta opção, os utilizadores podem sair do SEB com o botão "Sair" na barra de tarefas do SEB, pressionando as teclas Ctrl+Q ou clicando no botão Fechar da janela principal do navegador.';
$string['seb_enableaudiocontrol'] = 'Ativar controlo do áudio';
$string['seb_enableaudiocontrol_help'] = 'Se ativar esta opção, o ícone de controlo do áudio é mostrado na barra de tarefas do SEB.';
$string['seb_expressionsallowed'] = 'Expressões permitidas';
$string['seb_expressionsallowed_help'] = 'Campo de texto que contém as expressões de filtragem permitidas para os URLs permitidos. É permitido o uso do caráter universal \'\\*\'. Exemplos de expressões: \'example.com\' ou \'example.com/stuff/\\*\'.  A expressão \'example.com\' é o mesmo que \'example.com\', \'www.example.com\' e \'www.mail.example.com\'. \'example.com/stuff/\\*\' corresponde a todas as solicitações a qualquer subdomínio de \'example.com\' que tenha \'stuff\' como primeiro segmento do endereço.';
$string['seb_expressionsblocked'] = 'Expressões bloqueadas';
$string['seb_expressionsblocked_help'] = 'Campo de texto que contém as expressões de filtragem permitidas para os URLs não permitidos. É permitido o uso do caráter universal \'\\*\'. Exemplos de expressões: \'example.com\' ou \'example.com/stuff/\\*\'. A expressão \'example.com\' é o mesmo que \'example.com\', \'www.example.com\' e \'www.mail.example.com\'. \'example.com/stuff/\\*\' corresponde a todas as solicitações a qualquer subdomínio de \'example.com\' que tenha \'stuff\' como primeiro segmento do endereço.';
$string['seb_filterembeddedcontent'] = 'Filtrar conteúdo incorporado';
$string['seb_filterembeddedcontent_help'] = 'Se ativar esta opção, os recursos incorporados também serão filtrados usando o conjunto de filtros.';
$string['seb_help'] = 'Configurar o teste para usar o Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Mostrar botão de sair do Safe Browser Browser, configurado com esta hiperligação de saída';
$string['seb_linkquitseb_help'] = 'Neste campo pode inserir a hiperligação para sair do SEB. É usada no botão "Sair do Safe Exam Browser" na página exibida após a submissão do teste. Ao clicar no botão ou na hiperligação colocada onde pretende, é possível sair do SEB sem ter de inserir uma senha de saída. A hiperligação de saída deve começar com https://. Se nenhuma hiperligação for indicada, o botão "Sair do Safe Exam Browser" não aparecerá e não haverá uma hiperligação definida para sair do SEB.';
$string['seb_managetemplates'] = 'Gerir modelos do Safe Exam Browser';
$string['seb_muteonstartup'] = 'Silencioso no arranque';
$string['seb_muteonstartup_help'] = 'Se ativar esta opção, o áudio estará desligado ao iniciar o SEB.';
$string['seb_quitpassword'] = 'Senha para sair';
$string['seb_quitpassword_help'] = 'Esta senha é solicitada quando os utilizadores tentam sair do SEB com o botão "Sair", Ctrl+Q ou o botão Fechar da janela principal do navegador. Se nenhuma senha de saída for definida, o SEB solicitará "Tem a certeza de que pretende sair do SEB?".';
$string['seb_regexallowed'] = 'Expressões regulares permitidas';
$string['seb_regexallowed_help'] = 'Campo de texto que contém as expressões de filtragem para URLs permitidos no formato de expressão regular (Regex).';
$string['seb_regexblocked'] = 'Expressões regulares bloqueadas';
$string['seb_regexblocked_help'] = 'Campo de texto que contém as expressões de filtragem para URLs não permitidos no formato de expressão regular (Regex).';
$string['seb_requiresafeexambrowser'] = 'Forçar uso do Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Se ativar esta opção, os alunos só podem tentar responder ao teste se usarem o Safe Exam Browser.
As opções disponíveis são:

* Não
<br/>Não é necessário o Safe Exam Browser para responder ao teste.
* Sim – Usar um modelo existente
<br/>Pode ser usado um modelo de configuração do Safe Exam Browser.
Os modelos são geridos na Administração do Site. As suas configurações manuais substituem as configurações do modelo.
* Sim – Configurar manualmente
<br/>Não será usado qualquer modelo de configuração do Safe Exam Browser. Pode configurar manualmente o Safe Exam Browser.
* Sim – Carregar a sua configuração
<br/>Pode carregar o seu ficheiro de configuração do Safe Exam Browser. Todas as configurações manuais e o uso de modelos serão desativados.
* Sim – Usar a configuração do cliente SEB
<br/>Não existem configurações do Safe Exam Browser no lado do Moodle. É possível submeter tentativas de resposta ao teste com qualquer configuração do Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Mostrar esquema do teclado';
$string['seb_showkeyboardlayout_help'] = 'Se ativar esta opção, o esquema atual do teclado é mostrado na barra de tarefas do SEB. Permite alternar para outros esquemas de teclado que estão ativados no sistema operativo.';
$string['seb_showreloadbutton'] = 'Mostrar botão de recarregar';
$string['seb_showreloadbutton_help'] = 'Se ativar esta opção, será exibido um botão de atualizar na barra de tarefas do SEB, permitindo recarregar a página web atual.';
$string['seb_showsebdownloadlink'] = 'Mostrar botão de descarga do Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Se ativar esta opção, será mostrado, na página inicial do teste, um botão para descarregar o Safe Exam Browser.';
$string['seb_showsebtaskbar'] = 'Mostrar barra de tarefas SEB';
$string['seb_showsebtaskbar_help'] = 'Se ativar esta opção, aparecerá uma barra de tarefas na parte inferior da janela do navegador SEB. A barra de tarefas é necessária para exibir itens como controlo Wi-Fi, o botão \'Atualizar\', a hora e o esquema do teclado.';
$string['seb_showtime'] = 'Mostrar hora';
$string['seb_showtime_help'] = 'Se ativar esta opção, a hora atual é mostrada na barra de tarefas do SEB.';
$string['seb_showwificontrol'] = 'Mostrar controlo do Wi-Fi';
$string['seb_showwificontrol_help'] = 'Se ativar esta opção, um botão de controlo do Wi-Fi aparece na barra de tarefas do SEB. O botão permite que os utilizadores liguem-se a redes Wi-Fi que já tinha ligado anteriormente.';
$string['seb_templateid'] = 'Modelo de configuração do Safe Exam Browser';
$string['seb_templateid_help'] = 'As configurações no modelo de configuração selecionado serão usadas para a configuração do Safe Exam Browser durante a tentativa de resposta ao teste. Pode substituir as configurações no modelo pelas suas configurações manuais.';
$string['seb_use_client'] = 'Sim - Usar a configuração do cliente SEB';
$string['seb_use_manually'] = 'Sim - Configurar manualmente';
$string['seb_use_template'] = 'Sim - Usar um modelo existente';
$string['seb_use_upload'] = 'Sim - Carregar a minha configuração';
$string['seb_userconfirmquit'] = 'Perguntar ao utilizador para confirmar a saída';
$string['seb_userconfirmquit_help'] = 'Se ativar esta opção, os utilizadores têm de confirmar a saída do SEB quando existe uma hiperligação de saída.';
$string['sebdownloadbutton'] = 'Descarregar o Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Ocorreu um erro ao validar as chaves SEB';
$string['seblinkbutton'] = 'Iniciar o Safe Exam Browser';
$string['sebrequired'] = 'Este teste foi configurado para que os alunos possam tentar responder apenas usando o Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Configuração automática do SEB';
$string['setting:autoreconfigureseb_desc'] = 'Se ativar esta opção, os utilizadores que acederem ao teste usando o Safe Exam Browser serão automaticamente forçados a reconfigurar o seu Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Mostrar blocos antes de iniciar o teste';
$string['setting:displayblocksbeforestart_desc'] = 'Se ativar esta opção, os blocos serão exibidos antes do utilizador tentar responder ao teste.';
$string['setting:displayblockswhenfinished'] = 'Mostrar blocos depois de concluir o teste';
$string['setting:displayblockswhenfinished_desc'] = 'Se ativar esta opção, os blocos serão exibidos depois do utilizador terminar a tentativa de resposta ao teste.';
$string['setting:downloadlink'] = 'Hiperligação para descarregar o Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL para descarregar o Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Senha do teste obrigatória';
$string['setting:quizpasswordrequired_desc'] = 'Se ativar esta opção, todos os testes que exigem o Safe Exam Browser têm de ter definida uma senha do teste.';
$string['setting:showhttplink'] = 'Mostrar hiperligação http: //';
$string['setting:showseblink'] = 'Mostrar hiperligação seb: //';
$string['setting:showseblinks'] = 'Mostrar hiperligações da configuração do Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Se pretende, ou não, mostrar ao utilizador a hiperligação para aceder ao ficheiro de configuração do Safe Exam Browser quando não for permitido o acesso ao teste. Tenha em atenção que as hiperligações seb:// podem não funcionar em todos os navegadores.';
$string['setting:supportedversions'] = 'Tenha em atenção que são necessárias as seguintes versões mínimas do cliente Safe Exam Browser para usar a funcionalidade Chave de configuração: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14';
$string['settingsfrozen'] = 'Pelo facto de já existir pelo menos uma tentativa de resposta ao teste, as configurações do Safe Exam Browser já não podem ser atualizadas.';
$string['unknown_reason'] = 'Motivo desconhecido';
$string['used'] = 'em uso';
