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
 * Strings for component 'quizaccess_offlinemode', language 'pt', version '3.11'.
 *
 * @package     quizaccess_offlinemode
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Resposta alterada';
$string['backtothequiz'] = 'Voltar ao teste';
$string['changesmadereallygoaway'] = 'As suas respostas não foram guardadas no servidor. Tem a certeza de que pretende abandonar esta tentativa?';
$string['dataprocessedsuccessfully'] = 'Dados processados com sucesso ({$a}).';
$string['description'] = 'Este teste utiliza o \'Modo tolerante a falhas\'. Os administradores podem {$a}';
$string['descriptionlink'] = 'carregar as respostas exportadas';
$string['finishattemptsafterupload'] = 'Submeter e concluir cada tentativa após o processamento do ficheiro carregado';
$string['lastsaved'] = 'Última vez guardado: {$a}';
$string['lastsavedtotheserver'] = 'Última vez guardado no servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Última vez guardado neste computador: {$a}';
$string['loggedinaswronguser'] = 'Autenticou-se com uma conta diferente daquela que estava durante a tentativa do teste. Não é possível prosseguir. Clique em Continuar para autenticar-se novamente com o utilizador correto.';
$string['logindialogueheader'] = 'Talvez seja necessário autenticar-se novamente';
$string['loginokagain'] = 'A sua autenticação está correta.';
$string['offlinemode:uploadresponses'] = 'Carregar respostas';
$string['offlinemodeenabled'] = 'Modo tolerante a falhas - Experimental';
$string['offlinemodeenabled_desc'] = 'Se o \'Modo tolerante a falhas\' deve estar ativado em novos Testes, por predefinição, e se deve ser, ou não, uma configuração avançada (visível ao clicar em \'Mostrar mais...\') na página das configurações do Teste.';
$string['offlinemodeenabled_help'] = 'O objetivo desta opção experimental é permitir que os alunos respondam ao teste mesmo que a ligação à rede não seja confiável. Por exemplo, mau funcionamento ou falha da rede sem fios. Os alunos podem "navegar" nas páginas do teste mesmo se o servidor não estiver disponível, e todas as suas respostas são armazenadas localmente e enviadas ao servidor quando possível.';
$string['pluginname'] = 'Teste em modo tolerante a falhas';
$string['privacy:metadata'] = 'O módulo \'Teste em modo tolerante a falhas\' não armazena quaisquer dados pessoais.';
$string['privatekey'] = 'Chave privada de encriptação';
$string['privatekey_desc'] = 'Pode usar uma chave pública de encriptação para proteger as respostas descarregadas. Para isso, é necessário fornecer um par de chaves privada/pública. Pode gerar uma chave privada ao usar <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> na linha de comando (se o OpenSSL foi instalado desde https://www.openssl.org/). De seguida, cole nesta caixa o conteúdo do ficheiro rsa_1024_priv.pem.';
$string['processingcomplete'] = 'Processamento completo';
$string['processingfile'] = 'A processar o ficheiro {$a}';
$string['publickey'] = 'Chave pública de encriptação';
$string['publickey_desc'] = 'Tem de corresponder à chave privada. Pode gerar a partir da chave privada ao  usar <code>openssl rsa -pubout -em rsa_1024_priv.pem -out rsa_1024_pub.pem</code> e depois cole aqui o conteúdo de rsa_1024_pub.pem.';
$string['responsefiles'] = 'Ficheiros de respostas';
$string['responsefiles_help'] = 'Pode carregar um ou mais ficheiros de respostas descarregados através da hiperligação \'exportação de emergência das respostas\' durante uma tentativa do Teste.';
$string['reviewthisattempt'] = 'Rever esta tentativa';
$string['savefailed'] = 'Ocorreu uma falha ao guardar as respostas. Ppode continuar a trabalhar. De vez em quando deve {$a}.';
$string['savetheresponses'] = 'guardar as respostas';
$string['savingdots'] = 'A guardar...';
$string['savingtryagaindots'] = 'Tente novamente para submeter para o servidor...';
$string['submitfailed'] = 'Falha na submissão';
$string['submitfaileddownloadmessage'] = '... ou pode {$a} como um ficheiro que pode ser processado mais tarde.';
$string['submitfailedmessage'] = 'As suas respostas não puderam ser submetidas. Pode tentar novamente...';
$string['submitting'] = 'A submeter...';
$string['uploadfailed'] = 'Ocorreu um erro ao carregar';
$string['uploadingresponsesfor'] = 'A carregar respostas de {$a}';
$string['uploadmoreresponses'] = 'Carregar mais respostas';
$string['uploadresponses'] = 'Carregar respostas';
$string['uploadresponsesfor'] = 'Carregar respostas de {$a}';
