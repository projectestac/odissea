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
 * Strings for component 'auth_emailadmin', language 'pt', version '4.4'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminawaitingapproval'] = 'A sua conta está aguardar a aprovação do administrador.';
$string['auth_emailadminconfirmation'] = 'Este é um exemplo da mensagem. O seu administrador pode personalizá-la em Administração do Site / Idioma / Personalização do idioma e modificando as entradas relacionadas com \'auth/auth_emailadmin.php\', especialmente \'auth_emailadminconfirmation\' e \'auth_emailadminuserconfirmation\'.

Nesta mensagem, o administrador encontrará exemplos de inclusão de dados do utilizador usando espaços reservados entre parênteses { }. Pode consultar a lista de campos possíveis na lista gerada pelo espaço reservado {a->userdata}.

--
Caro Administrador do Moodle,

Foi solicitada uma nova conta de utilizador em \'{$a->sitename}\' com os seguintes dados:

Qualquer exemplo específico de campo do utilizador:
user->lastname: {$a->lastname}

Todos os campos personalizados:
{$a->customfields}

Todos os campos do utilizador + campos personalizados:
{$a->userdata}

Para confirmar a nova conta, aceda ao seguinte endereço:

{$a->link}

Se o endereço acima não for apresentado como uma hiperligação em que basta clicar, copie o endereço e cole na linha de endereço do seu navegador web.

Também pode confirmar contas no Moodle, acedendo a Administração do Site / Utilizadores';
$string['auth_emailadminconfirmationsubject'] = '{$a}: confirmação de conta';
$string['auth_emailadminconfirmsent'] = '<p>
A sua conta foi registada e aguarda confirmação do administrador. Deverá receber uma confirmação ou ser contactado para mais esclarecimentos.</p>';
$string['auth_emailadmindescription'] = '<p>O autorregisto por e-mail com confirmação do administrador permite que o utilizador crie a sua própria conta através do botão \'Criar nova conta\' na página de autenticação. Os administradores do site recebem um e-mail com uma hiperligação segura para uma página na qual podem confirmar a conta. Autenticações futuras apenas verificarão o nome de utilizador e a senha em relação aos valores armazenados na base de dados do Moodle. </p><p> Nota: Além de ativar o módulo autorregisto por e-mail com confirmação do administrador também deve ser ativado o autorregisto na página "Gerir autenticação". </p>';
$string['auth_emailadminnoadmin'] = 'Nenhum administrador cumpre a estratégia de notificação. Por favor, verifique a configuração \'auth_emailadmin\'.';
$string['auth_emailadminnoemail'] = 'Ocorreu um erro ao tentar enviar-lhe um e-mail!';
$string['auth_emailadminnotif_failed'] = 'Não foi possível enviar a notificação de autorregisto para:&nbsp;';
$string['auth_emailadminnotif_strategy'] = 'Define a estratégia para enviar as notificações de autorregistos. As opções disponíveis são "Primeiro administrador", "Todos os administradores" ou um administrador específico.';
$string['auth_emailadminnotif_strategy_all'] = 'Todos os administradores';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Todos os administradores e utilizadores com permissão para atualizar utilizadores';
$string['auth_emailadminnotif_strategy_first'] = 'Primeiro administrador';
$string['auth_emailadminnotif_strategy_key'] = 'Estratégia da notificação:';
$string['auth_emailadminrecaptcha'] = 'Adiciona ao formulário um elemento visual/áudio de confirmação da página de inscrição de utilizadores com autorregisto por e-mail. Serve para proteger o site contra spammers e contribui para uma causa que vale a pena. Consulte a página http://www.google.com/recaptcha/learnmore para mais detalhes.<br /><em>É necessária a extensão cURL do PHP.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Ativar a utilização de reCAPTCHA';
$string['auth_emailadminsettings'] = 'Configurações';
$string['auth_emailadminuserconfirmation'] = 'Este é um exemplo da mensagem a enviar. O seu administrador pode personalizá-la em Administração do Site / Idioma / Personalização do idioma e modificando as entradas relacionadas com \'auth/auth_emailadmin.php\', especialmente \'auth_emailadminconfirmation\' e \'auth_emailadminuserconfirmation\'.

Nesta mensagem, o administrador encontrará exemplos de inclusão de dados do utilizador usando espaços reservados entre parênteses { }. Pode consultar a lista de campos possíveis na lista gerada na sua própria notificação.

--
Caro(a) {$a->firstname},

Bem-vindo(a) ao nosso Moodle! A sua conta foi aprovada. Se ainda não o fez, conte-nos como encontrou a nossa organização.

Para contas de alunos, informe-nos sobre o projeto no qual gostaria de participar e criaremos a sua conta de professor. Pode saber <a href=http://www.nossomoodle.org/contas-alunos>aqui</a> quais as informações necessárias para criar as contas dos alunos.

O nome deve ser o "nome" e a "primeira letra do apelido" do aluno. O apelido do aluno será o nome da escola. As senhas devem ter pelo menos 8 caracteres.

Estamos muito entusiasmados por se juntar a nós e esperamos ver os seus alunos a participar em alguns dos nossos projetos. Agora é membro de uma comunidade em rápido crescimento de educadores e alunos que usam o nosso Moodle para partilhar projetos, trabalhos e conhecimentos. Se precisar de ajuda, não hesite em contactar-nos através deste <a href=mailto:nossomoodle@nossomoodle.org>e-mail</a>. Tentaremos responder a quaisquer perguntas, comentários ou preocupações que possa ter em relação a recursos, serviços e ferramentas Google. Consulte a nossa <a href=http://www.nossomoodle.org/>página web</a>.

* * *

Quem somos?

O nosso Moodle é um ambiente colaborativo fácil de usar, baseado na Internet, que permite aos educadores desenvolver e gerir projetos curriculares baseados na Web, partilhar informações e trabalhar em conjunto a nível internacional. A nossa organização fornece uma variedade de ferramentas e extras da Google, incluindo mensagens integradas, conferências e calendários, para oferecer suporte à colaboração entre professores e alunos.

A nossa organização dá as boas-vindas aos seus projetos e espera partilhar uma grande variedade de projetos e atividades com os alunos participantes. Quando se autenticar, terá acesso a uma lista diversificada de categorias populares. Clique numa das categorias para navegar pelos projetos incluídos. A navegação pelos projetos (clique nos títulos), podem ajudá-lo a criar uma ideia, ou mais, para que possa usar no desenvolvimento de um projeto próprio ou podem ajudá-lo a identificar projetos nos quais pode querer colaborar com outros professores e alunos.

* * *

Uma vez que a nossa organização é impulsionada por projetos e administrada por voluntários, gostaríamos que considerasse a possibilidade de criar um projeto na nossa organização ou voluntariar-se para ajudar num dos já existentes. Se decidir que pretende criar um projeto ou ser voluntário para ajudar ou apoiar outros projetos, contacte-nos através deste <a href=mailto:nossomoodle@nossomoodle.org>e-mail</a>. Os líderes e voluntários da nossa organização estão aqui para apoiar as suas necessidades.

Lembre-se de que o suporte online para todos os participantes é fornecido por voluntários. Use o que aprendeu aqui e ajude outros professores a aprender também! Estamos ansiosos para trabalhar consigo e ver os seus novos projetos!


Obrigado,

O Diretor

--
A nossa equipa
<a href=http://www.nossomoodle.org/>http://www.nossomoodle.org</a>
<a href=mailto:nossomoodle@nossomoodle.org>nossomoodle@nossomoodle.org</a>
<a href=tel:123%20456%20789>Telefone:123 456 789</a>';
$string['pluginname'] = 'Autorregisto por e-mail com confirmação do administrador';
$string['privacy:metadata'] = 'O módulo Autorregisto por e-mail com confirmação do administrador não armazena quaisquer dados pessoais.';
