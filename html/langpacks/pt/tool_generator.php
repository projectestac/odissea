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
 * Strings for component 'tool_generator', language 'pt', version '4.1'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Ficheiros grandes {$a}';
$string['courseexplanation'] = 'Esta ferramenta cria disciplinas padrão de teste que incluem muitas secções, atividades e ficheiros.

Com isto pretende-se fornecer um método padrão para testar o nível de fiabilidade e desempenho de vários componentes do sistema (tais como, efetuar e restaurar cópias de segurança).

Este teste é importante na medida em que já houve casos em que o sistema não funcionou (por exemplo, numa disciplina com 1000 atividades).

As disciplinas criadas com base nesta funcionalidade podem ocupar muito espaço da base de dados e do sistema de ficheiros (dezenas de gigabytes). Terá de eliminar as disciplinas (e aguardar que sejam executados vários processos de limpeza) para libertar esse espaço novamente.

**Não use esta funcionalidade em sites em produção. Use apenas num servidor de desenvolvimento.

(Para evitar um uso acidental, esta funcionalidade encontra-se desativada, a não ser que selecione o nível PROGRAMADOR em Erros.)';
$string['coursesize_0'] = 'XS (aprox. 10KB; criada em aprox. 1 segundo)';
$string['coursesize_1'] = 'S (aprox. 10MB; criada em aprox. 30 segundos)';
$string['coursesize_2'] = 'M (aprox. 100MB; criada em aprox. 2 minutos)';
$string['coursesize_3'] = 'L (aprox. 1GB; criada em aprox. 30 minutos)';
$string['coursesize_4'] = 'XL (aprox. 10GB; criada em aprox. 2 horas)';
$string['coursesize_5'] = 'XXL (aprox. 20GB; criada em aprox. 4 horas)';
$string['coursewithoutusers'] = 'A disciplina selecionada não tem utilizadores';
$string['createcourse'] = 'Criar disciplina';
$string['createtestplan'] = 'Criar plano de teste';
$string['creating'] = 'A criar disciplina';
$string['done'] = 'completo ({$a}s)';
$string['downloadtestplan'] = 'Descarregar o plano de teste';
$string['downloadusersfile'] = 'Descarregar o ficheiro de utilizadores';
$string['error_nocourses'] = 'Não há disciplinas para gerar o plano de teste';
$string['error_noforumdiscussions'] = 'A disciplina selecionada não contém fóruns de discussão';
$string['error_noforuminstances'] = 'A disciplina selecionada não contém instâncias do módulo Fórum';
$string['error_noforumreplies'] = 'A disciplina selecionada não contém respostas do fórum';
$string['error_nonexistingcourse'] = 'A disciplina especificada não existe';
$string['error_nopageinstances'] = 'A disciplina selecionada não contém instâncias do módulo Página';
$string['error_notdebugging'] = 'Não está disponível neste servidor porque a depuração (mensagens de erro) não está definida como PROGRAMADOR.';
$string['error_nouserspassword'] = 'Tem de definir $CFG->tool_generator_users_password em \'config.php\' para gerar o plano de teste';
$string['fullname'] = 'Testar disciplina: {$a->size}';
$string['maketestcourse'] = 'Criar disciplina experimental';
$string['maketestplan'] = 'Criar plano de teste JMeter';
$string['notenoughusers'] = 'A disciplina selecionada não contém utilizadores suficientes';
$string['pluginname'] = 'Gerador de dados de desenvolvimento';
$string['privacy:metadata'] = 'O módulo Gerador de dados de desenvolvimento não armazena dados pessoais.';
$string['progress_checkaccounts'] = 'A verificar as contas de utilizador ({$a})';
$string['progress_coursecompleted'] = 'Disciplina concluída ({$a}s)';
$string['progress_createaccounts'] = 'A criar contas de utilizador ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'A criar Trabalhos ({$a})';
$string['progress_createbigfiles'] = 'A criar ficheiros grandes ({$a})';
$string['progress_createcourse'] = 'A criar disciplina {$a}';
$string['progress_createforum'] = 'A criar fórum ({$a} tópicos)';
$string['progress_createpages'] = 'A criar páginas ({$a})';
$string['progress_createsmallfiles'] = 'A criar ficheiros pequenos ({$a})';
$string['progress_enrol'] = 'A inscrever utilizadores na disciplina ({$a})';
$string['progress_sitecompleted'] = 'Site concluído ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (aprox. 10MB; 3 disciplinas, criadas em aprox. 30 segundos)';
$string['sitesize_1'] = 'S (aprox. 50MB; 8 disciplinas, criadas em aprox. 2 minutos)';
$string['sitesize_2'] = 'M (aprox. 200MB; 73 disciplinas, criadas em aprox. 10 minutos)';
$string['sitesize_3'] = 'L (aprox. 1\'5GB; 227 disciplinas, criadas em aprox. 1\'5 horas)';
$string['sitesize_4'] = 'XL (aprox. 10GB; 1065 disciplinas, criadas em aprox. 5 horas)';
$string['sitesize_5'] = 'XXL (aprox. 20GB; 4177 disciplinas, criadas em aprox. 10 horas)';
$string['size'] = 'Tamanho da disciplina';
$string['smallfiles'] = 'Ficheiros pequenos';
$string['targetcourse'] = 'Disciplina alvo de teste';
$string['testplanexplanation'] = 'Esta ferramenta cria um ficheiro JMeter de plano de teste juntamente com o ficheiro de credenciais do utilizador.

Este plano de teste é projetado para funcionar em conjunto com {$a}, o que facilita a execução do plano de teste num ambiente Moodle específico, reúne informação sobre os procedimentos e compara os resultados. Por isso, é necessário descarregar e usar o script \'test_runner.sh\' ou seguir as instruções de instalação e de uso.

É necessário definir uma senha para os utilizadores da disciplina em \'config.php\' (p. ex. $CFG->tool_generator_users_password = \'moodle\';). Não existe nenhum valor predefinido para esta senha para impedir utilizações não intencionais da ferramenta. É necessário usar a opção de atualização de senhas no caso de os utilizadores da sua disciplina terem outra senha ou caso as senhas tenham sido geradas pelo \'tool_generator\' sem definir um valor $CFG->tool_generator_users_password.

Faz parte de \'tool_generator\' e por isso funciona corretamente com as disciplinas criadas pelo gerador de sites e disciplinas. Também pode ser utilizado com qualquer disciplina que contenha, pelo menos:

* Número suficiente de utilizadores inscritos (depende do tamanho do plano de teste que selecionou) com a senha redefinida para \'moodle\';

* Uma instância do módulo Página;

* Uma instância do módulo Fórum com, pelo menos, um tópico e uma resposta.

Deve considerar a capacidade dos seus servidores durante a execução de grandes planos de teste, uma vez que a quantidade de carga gerada pelo JMeter pode ser especialmente grande. O período de ramp-up foi ajustado de acordo com o número de segmentos (utilizadores) para reduzir este tipo de problemas, mas a carga ainda é muito grande.

**Não execute o plano de teste num servidor de produção**. Esta funcionalidade apenas cria ficheiros para o JMeter, o que por si só não causa nenhum perigo, mas **NUNCA** deverá executar este plano de teste num servidor de produção.';
$string['testplansize_0'] = 'Extra Pequeno ({$a->users} utilizadores, {$a->loops} ciclos e período de rampa {$a->rampup})';
$string['testplansize_1'] = 'S ({$a->users} utilizadores, {$a->loops} loops e {$a->rampup} período de ramp-up)';
$string['testplansize_2'] = 'M ({$a->users} utilizadores, {$a->loops} loops e {$a->rampup} período de ramp-up)';
$string['testplansize_3'] = 'L ({$a->users} utilizadores, {$a->loops} loops e {$a->rampup} período de ramp-up)';
$string['testplansize_4'] = 'XL ({$a->users} utilizadores, {$a->loops} loops e {$a->rampup} período de ramp-up)';
$string['testplansize_5'] = 'XXL ({$a->users} utilizadores, {$a->loops} loops e {$a->rampup} período de ramp-up)';
$string['updateuserspassword'] = 'Atualize a senha dos utilizadores da disciplina';
$string['updateuserspassword_help'] = 'JMeter precisa de entrar como um utilizador da disciplina. Pode atribuir senhas aos utilizadores utilizando  $CFG->tool_generator_users_password em config.php. Esta configuração atualiza a senha do utilizador na disciplina de acordo com $CFG->tool_generator_users_password. Esta ferramenta pode ser útil se a disciplina que está a usar não foi criada pela ferramenta $CFG->tool_generator_users_password, não estava definida quando criou as disciplinas de teste.';
