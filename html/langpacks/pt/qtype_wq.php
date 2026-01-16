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
 * Strings for component 'qtype_wq', language 'pt', version '4.5'.
 *
 * @package     qtype_wq
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_provider_enabled'] = 'Controlar acesso';
$string['access_provider_enabled_help'] = 'Se ativar esta opção, apenas os utilizadores autenticados podem aceder aos serviços Wiris.';
$string['addingwq'] = 'A adicionar uma pergunta genérica de Testes Wiris';
$string['auxiliar_text'] = 'Adicione um raciocínio opcional para a sua resposta:';
$string['cachedef_images'] = 'Imagens de Testes Wiris';
$string['cachedir'] = 'DIR_CACHE:';
$string['compatibility_settings'] = 'Configurações da compatibilidade';
$string['connectionsettings'] = 'Configurações da ligação';
$string['corruptquestion_attempt'] = 'A pergunta {$a->questionname} estava corrompida e não pôde ser carregada. Contacte o seu professor para que ele a possa corrigir.';
$string['corruptquestion_edit'] = 'AVISO: Esta pergunta foi corrompida e os seus dados matemáticos foram perdidos da base de dados. Tentámos restaurar tudo o que foi possível, mas é necessário reconstruir o algoritmo CalcMe, caso a sua pergunta o tivesse, bem como quaisquer opções de entrada e validação personalizadas. Contacte o administrador para obter mais informações.';
$string['debug_mode_enabled'] = 'Modo de depuração';
$string['debug_mode_enabled_help'] = 'Ativa o modo de depuração, que imprime informações adicionais que podem ajudar a equipa WIRIS a resolver problemas. Não ative, a menos que seja solicitado pela equipa WIRIS.';
$string['editingwq'] = 'A editar uma pergunta genérica de Testes Wiris';
$string['error'] = 'ERRO';
$string['failedtoloadwirisquizzesfromxml'] = 'Ocorreu um erro ao carregar a definição XML de Testes Wiris para a pergunta com ID';
$string['filtercodes_compatibility_enabled'] = 'Compatibilidade com o Filtro Códigos';
$string['filtercodes_compatibility_enabled_help'] = 'O filtro Códigos não é compatível com certos recursos do Testes Wiris se a opção "Ignorar tags" for selecionada. Ativar esta opção resolve o problema de compatibilidade. Não ative em qualquer outra situação.';
$string['info_disabled'] = 'ATIVADO';
$string['info_enabled'] = 'ATIVADO';
$string['info_information'] = 'Para mais informações ou se tiver alguma dúvida, entre em contaco com o suporte da Wiris:';
$string['info_maintitle'] = 'Página de teste de Testes Wiris';
$string['info_tableheader_report'] = 'Relatório';
$string['info_tableheader_status'] = 'Estado';
$string['info_tableheader_test'] = 'Teste';
$string['info_test10_name'] = 'A verificar a funcionalidade de Testes Wiris (variável)';
$string['info_test11_name'] = 'A verificar a funcionalidade de Testes Wiris (ação)';
$string['info_test12_name'] = 'Máximo de ligações ao servidor';
$string['info_test12_rt1'] = 'Neste momento, existem %s ligações simultâneas ativas de um máximo de %s. O maior número de ligações simultâneas é %s.';
$string['info_test12_rt2'] = 'Erro com o sistema de segurança do máximo de ligações. Detalhes: <br/><pre>%s<br/>%s</pre>';
$string['info_test1_name'] = 'Versão de Testes Wiris';
$string['info_test1_rt1'] = 'A versão de Testes Wiris é';
$string['info_test1_rt2'] = 'Não é possível encontrar a versão de Testes Wiris';
$string['info_test2_info'] = 'Verificar o filtro MathType por WIRIS';
$string['info_test2_infopage'] = 'página de informação';
$string['info_test2_name'] = 'Versão do filtro MathType por WIRIS';
$string['info_test2_rt1'] = 'O filtro MathType por WIRIS está corretamente instalado.';
$string['info_test2_rt2'] = 'O módulo Testes Wiris requer a versão 3.17.20 ou superior do filtro MathType por WIRIS. A versão instalada é';
$string['info_test2_rt3'] = 'Não é possível encontrar o ficheiro da versão do filtro MathType por WIRIS.';
$string['info_test3_name'] = 'Versão do Moodle';
$string['info_test3_rt1'] = 'A versão do Moodle é suficientemente recente.';
$string['info_test3_rt2'] = 'A versão do Moodle é %s. O Testes Wiris não funcionam corretamente com versões do Moodle anteriores à 2011060313';
$string['info_test3_rt3'] = 'Não é possível encontrar o ficheiro da versão do Moodle.';
$string['info_test4_name'] = 'Módulos';
$string['info_test4_pluginname1'] = 'Pergunta verdadeiro/falso';
$string['info_test4_pluginname2'] = 'Pergunta de resposta curta';
$string['info_test4_pluginname3'] = 'Pergunta de resposta incorporada (Cloze)';
$string['info_test4_pluginname4'] = 'Pergunta de escolha múltipla';
$string['info_test4_pluginname5'] = 'Pergunta de correspondência';
$string['info_test4_pluginname6'] = 'Pergunta de desenvolvimento';
$string['info_test4_pluginname7'] = 'Tipos comuns de pergunta';
$string['info_test4_rt1'] = 'Estão instalados os seguintes tipos de pergunta de Testes Wiris:';
$string['info_test4_rt2'] = 'Estão em falta os seguintes tipos de pergunta de Testes Wiris:';
$string['info_test4_rt3'] = 'Instalar';
$string['info_test5_name'] = 'Base de dados';
$string['info_test5_rt1'] = 'Todas as tabelas estão presentes.';
$string['info_test5_rt2'] = 'Está em falta uma ou mais tabelas.';
$string['info_test6_name'] = 'Testes Wiris';
$string['info_test7_name'] = 'Configurações da verificação';
$string['info_test8_name'] = 'Verificar se o servidor está acessível';
$string['info_test8_rt1'] = 'A estabelecer ligação a %s através da porta %s';
$string['info_test9_name'] = 'Serviço Testes Wiris';
$string['log_server_errors'] = 'Registo de erros do servidor';
$string['log_server_errors_help'] = 'Registe detalhadamente os erros provenientes do serviço WirisQuizzes e outros erros ocorridos durante o processamento das perguntas do WirisQuizzes nos registos do seu servidor. Isto pode aumentar o tamanho dos seus ficheiros de registo, mas pode ajudar a equipa do Wiris a solucionar problemas.';
$string['mathjax_compatibity'] = 'Compatibilidade com MathJax';
$string['mathjax_compatibity_help'] = '(Experimental) Ativa a compatibilidade com o MathJax. Esta opção só é necessária se pretender utilizar o MathJax em vez do MathType para renderizar fórmulas LaTeX em perguntas WirisQuizzes. As fórmulas criadas com MathType ou WirisQuizzes serão ainda renderizadas pelo MathType. Para obter o melhor desempenho, recomendamos a utilização do MathType para renderizar todas as fórmulas.';
$string['maxconnections_disabled'] = 'Desativar a proteção contra máximo de ligações';
$string['maxconnections_disabled_help'] = 'Desativa o mecanismo de proteção que limita o número de ligações simultâneas ao servidor WirisQuizzes. Ative esta configuração apenas se a sua utilização do WirisQuizzes atingir o limite de ligações simultâneas e lembre-se que a sua infraestrutura terá de lidar com o aumento do número de ligações simultâneas ao nosso servidor.';
$string['ok'] = 'OK';
$string['pluginname'] = 'Testes Wiris';
$string['privacy:metadata:qtype_wq'] = 'Informações sobre a resposta correta do utilizador para um determinado tipo de pergunta de Testes Wiris';
$string['privacy:metadata:qtype_wq:question'] = 'ID do tipo de pergunta de Testes Wiris';
$string['privacy:metadata:qtype_wq:xml'] = 'XML de perguntas de Testes Wiris';
$string['proxyurl'] = 'URL_PROXY:';
$string['quizzescalcurl'] = 'URL de CalcMe';
$string['quizzescalcurl_help'] = 'URL de onde carregar a aplicação web CalcMe.';
$string['quizzeseditorurl'] = 'URL do serviço MathType';
$string['quizzeseditorurl_help'] = 'URL onde carregar o MathType.';
$string['quizzesgraphurl'] = 'URL da ferramenta Graph';
$string['quizzesgraphurl_help'] = 'URL para carregar a ferramenta utilizada para renderização de gráficos e respostas gráficas a perguntas.';
$string['quizzeshandurl'] = 'URL do serviço MathType Hand';
$string['quizzeshandurl_help'] = 'URL de onde carregar Wiris HAND.';
$string['quizzesserviceurl'] = 'URL do serviço Testes Wiris';
$string['quizzesserviceurl_help'] = 'URL para ligação ao serviço Testes Wizis.';
$string['quizzeswirislauncherurl'] = 'URL de Wiris CAS JNLP';
$string['quizzeswirislauncherurl_help'] = 'URL de onde carregar a aplicação Wiris CAS JNLP.';
$string['quizzeswirisurl'] = 'URL do serviço da aplicação Wiris CAS';
$string['quizzeswirisurl_help'] = 'URL de onde carregar a aplicação Wiris CAS.';
$string['serviceurl'] = 'URL_SERVICE:';
$string['troubleshooting_settings'] = 'Resolução de problemas';
$string['wirisquestionincorrect'] = 'O sistema não consegue gerar uma das perguntas do teste. Talvez haja um problema temporário de ligação ou um problema na forma como a pergunta foi formulada. Pode tentar responder ao teste novamente, sem penalizações, clicando em Continuar. Se o erro persistir, pode informar os seus professores de que existe um problema com a pergunta{$a->questionname}.';
$string['wirisquizzeserror'] = 'Ocorreu um erro em Testes Wiris.';
$string['wq'] = 'Testes wiris';
$string['wq_help'] = 'Ajuda para Testes Wiris';
$string['wqsummary'] = 'Adiciona uma pergunta genérica do Testes Wiris. Apenas para fins de teste. Ficará oculta.';
