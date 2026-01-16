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
 * Strings for component 'auth', language 'pt', version '4.5'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Módulos de autenticação disponíveis';
$string['allowaccountssameemail'] = 'Contas de utilizador com o mesmo e-mail';
$string['allowaccountssameemail_desc'] = 'Se ativar esta opção, o mesmo endereço de e-mail poderá ser utilizado em várias contas de utilizador. Esta ação poderá levantar alguns problemas de privacidade e de segurança em determinadas situações, como por exemplo, no envio de e-mails para alteração de senha.';
$string['alternatelogin'] = 'Se inserir um URL, será utilizado como página de autenticação para este site. A página deverá conter um formulário que tenha a propriedade \'action\' definida para \'<strong>{$a}</strong>\' e os campos de retorno <strong>username</strong> e <strong>password</strong>.<br />Tenha cuidado para não inserir um URL incorreto porque pode bloquear a si mesmo o acesso a este site.<br />Deixe em branco para utilizar a página de autenticação predefinida do Moodle.';
$string['alternateloginurl'] = 'Endereço alternativo para autenticação';
$string['auth_changepasswordhelp'] = 'Ajuda para alteraração de senha';
$string['auth_changepasswordhelp_expl'] = 'Mostrar ajuda aos utilizadores que perderam a sua senha {$a}. Será mostrada também ou em vez de <strong>URL para alterar senha</strong> ou a mudança de senha interna do Moodle.';
$string['auth_changepasswordurl'] = 'URL para alterar senha';
$string['auth_changepasswordurl_expl'] = 'Especifique o URL a enviar aos utilizadores que perderam a sua senha {$a}. Selecione <strong>Não</strong> no campo <strong>Usar página predefinida para alteração de senha</strong>';
$string['auth_changingemailaddress'] = 'Solicitou uma alteração de endereço de e-mail de {$a->oldemail} para {$a->newemail}. Por motivos de segurança, estamos a enviar uma mensagem para o seu novo endereço para confirmar que lhe pertence. O seu endereço de e-mail será atualizado assim que abrir o URL que lhe é enviado na mensagem. A hiperligação de confirmação expirará em 10 minutos.';
$string['auth_common_settings'] = 'Configurações comuns';
$string['auth_data_mapping'] = 'Mapeamento de dados';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p>Valor bloqueado: Se ativo, os utilizadores não poderão editar o campo. Utilize esta opção se pretende manter os dados no sistema de autenticação externo.</p>';
$string['auth_fieldlockfield'] = 'Bloquear valor ({$a})';
$string['auth_fieldlocks'] = 'Bloquear campos de utilizador';
$string['auth_fieldlocks_help'] = '<p>Pode bloquear campos de perfil dos utilizadores. Esta configuração é útil para sites onde os dados dos utilizadores são mantidos manualmente pelos administradores, editando os registos dos utilizadores ou fazendo o carregamento utilizando a ferramenta \'Carregar utilizadores\'. Se está a bloquear campos requeridos pelo Moodle, certifique-se que fornece esses dados ao criar contas de utilizadores, caso contrário, as contas não serão válidas.</p><p>Pondere a utilização do modo de bloqueio \'Desbloquear se vazio\' para evitar este problema.</p>';
$string['auth_fieldmapping'] = 'Mapeamento de dados ({$a})';
$string['auth_invalidnewemailkey'] = 'Erro: se está a tentar confirmar uma alteração de e-mail, deve ter cometido um erro ao copiar o URL enviado no e-mail de confirmação. Por favor, copie novamente o URL e tente novamente.';
$string['auth_loginpasswordtoggle'] = 'Alternar visibilidade da senha';
$string['auth_loginpasswordtoggle_desc'] = 'Adicionar um ícone ao campo da senha na página de autenticação que permite aos utilizadores mostrar ou ocultar a senha inserida.';
$string['auth_loginrecaptcha'] = 'Ativar reCAPTCHA na autenticação';
$string['auth_loginrecaptcha_desc'] = 'Adicionar um elemento de confirmação visual/áudio ao formulário da página de autenticação. Reduz o risco de tentativas de autenticação fraudulentas. Para mais detalhes, visite <a href="https://www.google.com/recaptcha">Google reCAPTCHA</a>.';
$string['auth_multiplehosts'] = 'Podem ser especificados vários servidores OU endereços (por exemplo, serv1.com;serv2.com;serv3.com OU xxx.xxx.xxx.xxx;yyy.yyy.yyy.yyy)';
$string['auth_notconfigured'] = 'O método de autenticação {$a} não está configurado.';
$string['auth_outofnewemailupdateattempts'] = 'Esgotou o número de tentativas disponíveis para atualizar o seu e-mail. O seu pedido de atualização foi cancelado.';
$string['auth_passwordisexpired'] = 'A sua senha expirou. Altere-a agora.';
$string['auth_passwordwillexpire'] = 'A sua senha expirará dentro de {$a} dias. Pretende alterá-la agora?';
$string['auth_remove_delete'] = 'Apagar interno totalmente';
$string['auth_remove_keep'] = 'Manter interno';
$string['auth_remove_suspend'] = 'Suspender interno';
$string['auth_remove_user'] = 'Especifique o que fazer durante a sincronização em massa com as contas internas de utilizadores no caso em que o utilizador foi removido da fonte externa. Só os utilizadores suspensos serão automaticamente recuperados se reaparecem na origem externa.';
$string['auth_remove_user_key'] = 'Remover utilizador externo';
$string['auth_sync_script'] = 'Sincronização de contas de utilizador';
$string['auth_sync_suspended'] = 'Se ativar esta opção, o atributo suspenso será utilizado para atualizar o estado de suspensão da conta local de utilizador.';
$string['auth_sync_suspended_key'] = 'Sincronizar estado da suspensão do utilizador local';
$string['auth_updatelocal'] = 'Atualizar localmente';
$string['auth_updatelocal_expl'] = '<p><b>Atualização local:</b> Se ativo, o campo será atualizado (a partir da origem externa) cada vez que o utilizador faz a autenticação ou ocorra uma sincronização de utilizadores. Os campos definidos para serem atualizados localmente deverão estar bloqueados.</p>';
$string['auth_updatelocalfield'] = 'Atualizar campo local ({$a})';
$string['auth_updateremote'] = 'Atualizar campo externo';
$string['auth_updateremote_expl'] = '<p><b>Atualização externa:</b> Se ativo, a autorização externa será atualizada quando o registo do utilizador for atualizado. Os campos deverão estar desbloquados para que sejam permitidas edições.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Nota</b>: Para atualizar dados externos do LDAP é necessário que defina o \'binddn\' e o \'bindpw\' para um \'utilizador bind\' com permissões de edição para todos os registos de utilizador. Atualmente não são preservados os atributos \'multi-valued\' e irá remover valores extra aquando da atualização.</p>';
$string['auth_updateremotefield'] = 'Atualizar campo externo ({$a})';
$string['auth_user_create'] = 'Permitir a criação de utilizadores';
$string['auth_user_creation'] = 'Novos utilizadores (anónimos) podem criar contas na origem de autenticação externa e confirmá-las por e-mail. Se ativar esta opção, lembre-se de configurar as opções no módulo específico para criação de utilizadores.';
$string['auth_usernameexists'] = 'O nome escolhido já existe. Escolha outro.';
$string['auth_usernotexist'] = 'Não é possível atualizar o utilizador \'{$a}\' porque não existe na base de dados';
$string['authenticationoptions'] = 'Opções da autenticação';
$string['authinstructions'] = 'Deixe este campo em branco para que as instruções de autenticação predefinidas sejam mostradas na página de autenticação. Se pretender disponibilizar instruções personalizadas, indique-as aqui.';
$string['authloginviaemail'] = 'Permitir autenticação por e-mail';
$string['authloginviaemail_desc'] = 'Se ativar esta opção, será permitido que os utilizadores usem o nome de utilizador ou o endereço de e-mail (se for único) para se autenticarem no site.';
$string['auto_add_remote_users'] = 'Adicionar automaticamente utilizadores remotos';
$string['cannotmapfield'] = 'O campo "{$a->fieldname}" não pode ser mapeado porque o nome curto "{$a->shortname}" é muito longo. Para ser possível o mapeamento, encurte o campo de perfil \'Nome curto\' para {$a->charlimit} caracteres. <a href="{$a->link}">Editar campos de perfil do utilizador</a>';
$string['changepassword'] = 'Endereço para alteração de senha';
$string['changepasswordhelp'] = 'Endereço URL da página de recuperação da senha que será enviado aos utilizadores por e-mail. Tenha em atenção que esta configuração não terá efeito caso um endereço URL de recuperação de senha esteja definido nas configurações comuns da autenticação.';
$string['chooseauthmethod'] = 'Método de autenticação';
$string['chooseauthmethod_help'] = 'Esta configuração determina o método de autenticação utilizado sempre que o utilizador se autentica. Deve selecionar unicamente métodos de autenticação ativos, caso contrário o utilizador não conseguirá autenticar-se. Para impedir um utilizador de se autenticar, selecione "Impedir autenticação".';
$string['createpassword'] = 'Gerar senha e notificar o utilizador';
$string['createpasswordifneeded'] = 'Criar senha, se necessário, e enviar por e-mail';
$string['emailchangecancel'] = 'Cancelar a alteração de e-mail';
$string['emailchangepending'] = 'Atualização pendente. Abra a hiperligação que lhe foi enviada para {$a->preference_newemail}.';
$string['emailnowexists'] = 'O endereço de e-mail que está a tentar definir no seu perfil já está associado à conta de outro utilizador. Sendo assim, o seu pedido foi cancelado, no entanto, pode voltar a tentar com um endereço de e-mail diferente.';
$string['emailupdate'] = 'Atualização do endereço de e-mail';
$string['emailupdatemessage'] = 'Caro(a) {$a->fullname},

Foi pedida uma alteração do e-mail da sua conta de utilizador em {$a->site}. Para confirmar esta alteração, aceda ao seguinte endereço web:

{$a->url}
A hiperligação de confirmação expirará em <b>10 minutos</b>.

{$a->supportemail}';
$string['emailupdatesuccess'] = 'O e-mail do utilizador <em>{$a->fullname}</em> foi atualizado com sucesso para <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmação de atualização de e-mail em {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'As senhas só podem ter, no máximo, {$a} caracteres iguais consecutivos.';
$string['errorminpassworddigits'] = 'A senha deverá ter, pelo menos, {$a} algarismo(s).';
$string['errorminpasswordlength'] = 'A senha deverá ter, pelo menos, {$a} caracteres.';
$string['errorminpasswordlower'] = 'A senha deverá ter, pelo menos, {$a} letra(s) minúscula(s).';
$string['errorminpasswordnonalphanum'] = 'A senha tem de ter, pelo menos, {$a} caracteres especiais, tais como *, - ou #.';
$string['errorminpasswordupper'] = 'A senha deverá ter, pelo menos, {$a} letra(s) maiúscula(s).';
$string['errorpasswordreused'] = 'Esta senha já foi utilizada anteriormente e não é permitida a sua reutilização';
$string['errorpasswordupdate'] = 'Erro na atualização da senha. A senha não foi modificada';
$string['eventuserloggedin'] = 'Utilizador autenticou-se';
$string['eventuserloggedinas'] = 'Utilizador entrou como outro utilizador';
$string['eventuserloginfailed'] = 'Falhou a autenticação do utilizador';
$string['forcechangepassword'] = 'Obrigar alteração da senha';
$string['forcechangepassword_help'] = 'Obrigar os utilizadores a alterar a senha na sua próxima autenticação no Moodle.';
$string['forcechangepasswordfirst_help'] = 'Obrigar os utilizadores a alterar a senha na sua primeira autenticação no Moodle.';
$string['forgottenpassword'] = 'Se inserir um URL aqui, será usado neste site como página para recuperação dae senha. Este campo foi criado para sites onde a totalidade das senhas é gerida externamente e não pelo Moodle. Deixe em branco se pretende usar a página de recuperação de senha predefinida do Moodle.';
$string['forgottenpasswordurl'] = 'URL para recuperação da senha';
$string['getrecaptchaapi'] = 'Para usar o reCAPTCHA, tem de obter uma chave da API em <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Botão de entrada como visitante';
$string['incorrectpleasetryagain'] = 'Incorreto. Por favor, tente novamente.';
$string['infilefield'] = 'Campo necessário no ficheiro';
$string['informminpassworddigits'] = 'pelo menos {$a} dígito(s)';
$string['informminpasswordlength'] = 'pelo menos {$a} caracteres';
$string['informminpasswordlower'] = 'pelo menos {$a} letra(s) minúscula(s)';
$string['informminpasswordnonalphanum'] = 'pelo menos {$a} caracteres especiais, tais como *, - ou #';
$string['informminpasswordreuselimit'] = 'As senhas podem ser reutilizadas após {$a} alterações';
$string['informminpasswordupper'] = 'pelo menos {$a} letra(s) maiúscula(s)';
$string['informpasswordpolicy'] = 'A senha tem de ter {$a}';
$string['instructions'] = 'Instruções';
$string['internal'] = 'Interno';
$string['limitconcurrentlogins'] = 'Limitar sessões simultâneas';
$string['limitconcurrentlogins_desc'] = 'Se ativar esta opção, o número de sessões iniciadas em simultâneo por cada utilizador passará a ser limitado. A sessão iniciada há mais tempo será terminada após o limite de tempo ser atingido. Tenha em atenção que os utilizadores poderão perder toda a informação ainda não guardada. Esta configuração não é compatível com módulos de autenticação \'Single Sign On\' (SSO).';
$string['locked'] = 'Bloqueado';
$string['md5'] = 'Criptografia MD5';
$string['nopasswordchange'] = 'A senha não pode ser modificada.';
$string['nopasswordchangeforced'] = 'Não é possível prosseguir sem modificar a senha. No entanto, não existe página disponível para a mudar. Por favor, contacte o Administrador do site Moodle.';
$string['noprofileedit'] = 'O perfil não pode ser alterado';
$string['ntlmsso_attempting'] = 'A tentar "Single Sign On" via NTLM...';
$string['ntlmsso_failed'] = 'A autenticação automática falhou. Tente usar a página normal da autenticação.';
$string['ntlmsso_isdisabled'] = 'SSO (Single Sign On) por NTLM está desativado.';
$string['passwordhandling'] = 'Tratamento do campo de senha';
$string['plaintext'] = 'Texto simples';
$string['pluginnotenabled'] = 'O módulo de autenticação \'{$a}\' não está ativado.';
$string['pluginnotinstalled'] = 'O módulo de autenticação \'{$a}\' não está instalado.';
$string['potentialidps'] = 'Autenticar-se usando a sua conta:';
$string['privacy:metadata:userpref:createpassword'] = 'Indica que deve ser gerada uma senha para o utilizador';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indica se o utilizador tem de alterar a sua senha na sua próxima autenticação';
$string['privacy:metadata:userpref:loginfailedcount'] = 'O número de vezes que falhou a autenticação do utilizador';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'O número de vezes que falhou a autenticação do utilizador desde a última autenticação com sucesso.';
$string['privacy:metadata:userpref:loginfailedlast'] = 'A data em que foi registada a última tentativa de autenticação sem sucesso';
$string['privacy:metadata:userpref:loginlockout'] = 'Se a conta de utilizador está bloqueada devido a tentativas de autenticação falhadas, e a data em que a conta ficou bloqueada';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indica que a conta de um utilizador nunca deverá ser sujeita a bloqueio';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Quando bloqueada, o \'segredo\' que o utilizador deve usar para desbloquear a sua conta';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'O CAPTCHA serve para evitar ações indevidas por parte de programas automáticos. Siga as instruções para confirmar que é uma pessoa. Pode ser uma caixa com caracteres apresentados numa imagem que deve inserir ou um conjunto de imagens para selecionar.

Se não tiver a certeza de quais são as imagens, tente obter outro CAPTCHA ou um CAPTCHA de áudio.';
$string['recaptcha_link'] = 'link';
$string['security_question'] = 'Pergunta de segurança';
$string['selfregistration'] = 'Autorregisto';
$string['selfregistration_help'] = 'Se estiver selecionado um módulo de autenticação, por exemplo, o Autorregisto com confirmação por e-mail, será possível aos potenciais utilizadores registarem-se e criarem a sua conta de utilizador. No entanto, isto torna também possível que spammers criem contas para usar os fóruns, blogues, etc. e inserirem mensagens de spam (publicidade, por exemplo). Para evitar estas situações, o autorregisto deve ser desativado ou limitado através da opção <em>Domínios de e-mail permitidos</em>.';
$string['settingmigrationmismatch'] = 'Foram detetados valores incompatíveis ao corrigir os nomes de configuração do módulo! O módulo de autenticação \'{$a->plugin}\' tinha a opção \'{$a->setting}\' configurada para \'{$a->legacy}\' com o nome antigo e \'{$a->current} com o nome atual. O último valor foi definido como válido, mas deve verificar e confirmar se é o que pretende.';
$string['sha1'] = 'tabela hash SHA-1';
$string['showguestlogin'] = 'Pode optar por ocultar ou mostrar o botão de entrada como visitante na página de autenticação.';
$string['showloginform'] = 'Mostrar formulário de autenticação manual';
$string['showloginform_desc'] = 'Se todos os utilizadores do site usarem um método de autenticação, por exemplo, OAuth2, que não exige inserir o nome de utilizador e senha, pode ocultar o formulário de autenticação manual. Tenha em atenção que utilizadores com contas manuais não poderão autenticar-se.

Se ocultar o formulário de autenticação manual e não conseguir autenticar-se, pode mostrar o formulário novamente através da linha de comando: php admin/cli/cfg.php --name=showloginform --set=1.';
$string['stdchangepassword'] = 'Usar a página predefinida para alterar a senha';
$string['stdchangepassword_expl'] = 'Se o sistema de autenticação externa permitir alteração de senha pelo Moodle, altere a configuração para Sim. Esta definição prevalece sobre a opção \'Endereço para alteração de senha\'.';
$string['stdchangepassword_explldap'] = 'NOTA: Se o servidor LDAP for remoto é recomendado utilizar o LDAP sobre um túnel encriptado SSL (ldaps://).';
$string['suspended'] = 'Conta suspensa';
$string['suspended_help'] = 'Os utilizadores que tenham as suas contas suspensas não podem autenticar-se no site nem usar os web services e qualquer mensagem enviada para eles será descartada.';
$string['testsettings'] = 'Testar configurações';
$string['testsettingsheading'] = 'Testar configurações da autenticação - {$a}';
$string['unlocked'] = 'Desbloqueado';
$string['unlockedifempty'] = 'Desbloquear se vazio';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'Ao criar';
$string['update_onlogin'] = 'Em cada autenticação';
$string['update_onupdate'] = 'Ao atualizar';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() não suporta o usertype selecionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() não suporta o usertype selecionado (por enquanto)';
$string['username'] = 'Utilizador';
$string['username_help'] = 'Tenha atenção que alguns módulos de autenticação não permitem a alteração do nome de utilizador.';
