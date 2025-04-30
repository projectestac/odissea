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
 * Strings for component 'auth', language 'ca', version '4.4'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Connectors d\'autenticació disponibles';
$string['allowaccountssameemail'] = 'Permet comptes amb el mateix correu';
$string['allowaccountssameemail_desc'] = 'Si s\'habilita, diversos comptes d\'usuari podran tenir la mateixa adreça electrònica. Això pot donar lloc a problemes de seguretat o privacitat, per exemple, amb el correu electrònic de confirmació de canvi de contrasenya.';
$string['alternatelogin'] = 'Si introduïu un URL aquí, s\'utilitzarà com a pàgina d\'inici de sessió d\'aquest lloc. Aquesta pàgina hauria de contenir un formulari, amb la propietat «action» igual a <strong>{$a}</strong> i els camps de retorn <strong>username</strong> i <strong>password</strong>.<br />Tingueu cura de no escriure un URL incorrecte, ja que podríeu impedir l\'entrada dels usuaris en aquest lloc.<br />Si deixeu en blanc aquest paràmetre s\'utilitzarà la pàgina d\'inici de sessió per defecte.';
$string['alternateloginurl'] = 'URL d\'inici de sessió alternatiu';
$string['auth_changepasswordhelp'] = 'Ajuda de canvi de contrasenya';
$string['auth_changepasswordhelp_expl'] = 'Mostra l\'ajuda de canvi de contrasenya als usuaris que hagin oblidat la contrasenya {$a}. Aquest ajuda es visualitzarà en lloc de o a més a més de l\'<strong>URL de canvi de contrasenya</strong> o el canvi de contrasenya intern de Moodle.';
$string['auth_changepasswordurl'] = 'URL de canvi de contrasenya';
$string['auth_changepasswordurl_expl'] = 'Especifiqueu l\'URL on cal enviar els usuaris que hagin oblidat la contrasenya {$a}. Trieu <strong>No</strong> en <strong>Utilitza la pàgina estàndard de canvi de contrasenya</strong>.';
$string['auth_changingemailaddress'] = 'Heu sol·licitat un canvi d\'adreça de correu de {$a->oldemail} a {$a->newemail}. Per raons de seguretat, us enviarem un missatge de correu a l\'adreça nova, de manera que puguem confirmar que us pertany. El canvi d\'adreça de correu es farà efectiu tan bon punt obriu l\'enllaç que figura en aquell missatge.';
$string['auth_common_settings'] = 'Paràmetres comuns';
$string['auth_data_mapping'] = 'Mapatge de dades';
$string['auth_fieldlock'] = 'Bloca valor';
$string['auth_fieldlock_expl'] = '<p><b>Valor blocat</b>: si habiliteu aquesta opció, s\'impedirà que els usuaris i administradors del Moodle editin el camp directament. Utilitzeu aquesta opció quan aquestes dades es mantinguin en un sistema d\'autenticació extern.</p>';
$string['auth_fieldlockfield'] = 'Valor blocat ({$a})';
$string['auth_fieldlocks'] = 'Bloca camps d\'usuari';
$string['auth_fieldlocks_help'] = '<p>Podeu blocar els camps de dades d\'usuari. Això és útil en llocs on els administradors mantenen manualment les dades dels usuaris tot editant els registres d\'usuari o per mitjà de l\'opció de càrrega d\'usuaris. Si bloqueu camps requerits per Moodle, assegureu-vos que aquestes dades s\'introdueixen en crear els comptes d\'usuari, o en cas contrari no es podran utilitzar els comptes.</p><p>Considereu la possibilitat d\'utilitzar el mode «Desblocat si està buit» per evitar aquest problema.</p>';
$string['auth_fieldmapping'] = 'Mapatge de dades ({$a})';
$string['auth_invalidnewemailkey'] = 'Error: si intenteu confirmar un canvi d\'adreça de correu electrònic, probablement heu copiat malament l\'enllaç que us hem enviat. Copieu l\'enllaç complet i torneu a intentar-ho.';
$string['auth_loginpasswordtoggle'] = 'Commuta la visibilitat de la contrasenya';
$string['auth_loginpasswordtoggle_desc'] = 'Afegeix una icona al camp de contrasenya de la pantalla d\'inici de sessió que permeti als usuaris mostrar o amagar la contrasenya introduïda.';
$string['auth_loginrecaptcha'] = 'Habilita reCAPTCHA per iniciar la sessió';
$string['auth_loginrecaptcha_desc'] = 'Afegeix una confirmació visual/audio al formulari de la pàgina per iniciar la sessió. Això redueix el risc d\'intents d\'inici de sessió injustificats. Vegeu <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a> per saber-ne més.';
$string['auth_multiplehosts'] = 'Podeu especificar diversos ordinadors (p. e.: host1.com; host2.com; host3.com)';
$string['auth_notconfigured'] = 'El mètode d\'autenticació {$a} no està configurat.';
$string['auth_outofnewemailupdateattempts'] = 'Heu esgotat els intents d\'actualització de la vostra adreça de correu electrònic. La vostra petició d\'actualització s\'ha cancel·lat.';
$string['auth_passwordisexpired'] = 'La vostra contrasenya ha caducat. Sisplau, canvieu-la ara.';
$string['auth_passwordwillexpire'] = 'La vostra contrasenya caducarà d\'aquí a {$a} dies. Voleu canviar-la ara?';
$string['auth_remove_delete'] = 'Suprimeix el compte intern';
$string['auth_remove_keep'] = 'Manté el compte intern';
$string['auth_remove_suspend'] = 'Suspèn el compte intern';
$string['auth_remove_user'] = 'Especifiqueu què cal fer amb els comptes d\'usuari interns durant la sincronització en massa, quan l\'usuari ha estat suprimit en la font externa. Només els usuaris amb la inscripció suspesa es restauren automàticament si reapareixen a la font externa.';
$string['auth_remove_user_key'] = 'Usuari extern suprimit';
$string['auth_sync_script'] = 'Sincronització de comptes d\'usuari';
$string['auth_sync_suspended'] = 'Si s\'habilita, l\'atribut «suspès» s\'utilitzarà per actualitzar l\'estat de suspensió del compte de l\'usuari local.';
$string['auth_sync_suspended_key'] = 'Sincronitza l\'estat de suspensió de l\'usuari local';
$string['auth_updatelocal'] = 'Actualitza dades locals';
$string['auth_updatelocal_expl'] = '<p><b>Actualitza dades locals:</b> si habiliteu aquesta opció, el camp s\'actualitzarà (amb les dades externes d\'autenticació) cada vegada que l\'usuari entri o quan es faci una sincronització d\'usuaris. Els camps definits per actualitzar-se localment haurien d\'estar blocats.</p>';
$string['auth_updatelocalfield'] = 'Actualitza les dades locals ({$a})';
$string['auth_updateremote'] = 'Actualitza dades externes';
$string['auth_updateremote_expl'] = '<p>Actualitza dades externes:</b> si habiliteu aquesta opció, les dades externes d\'autenticació s\'actualitzaran quan s\'actualitzi el registre de l\'usuari. Els camps s\'haurien de desblocar per permetre l\'edició.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Nota:</b> actualitzar dades LDAP externes requreix definir binddn i dindpw amb un bind-user que tingui privilegis d\'edició en tots els registres d\'usuari. Actualment no preserva valors múltiples en els atributs i suprimeix els valors extra quan es fa l\'actualització.</p>';
$string['auth_updateremotefield'] = 'Actualitza les dades externes ({$a})';
$string['auth_user_create'] = 'Habilita la creació d\'usuaris';
$string['auth_user_creation'] = 'Els nous usuaris (anònims) poden crear comptes d\'usuari en la font d\'autenticació externa i confirmar-los via correu electrònic. Si habiliteu aquesta opció, recordeu de configurar també opcions específiques del mòdul per a la creació d\'usuaris.';
$string['auth_usernameexists'] = 'El nom d\'usuari elegit ja existeix. Trieu-ne un altre.';
$string['auth_usernotexist'] = 'No es pot actualitzar un usuari no existent: {$a}';
$string['authenticationoptions'] = 'Opcions d\'autenticació';
$string['authinstructions'] = 'Deixeu aquest camp en blanc si voleu mostrar les instruccions d\'inici de sessió per defecte a la pàgina d\'inici de sessió. Si voleu proporcionar instruccions alternatives, introduïu-les aquí.';
$string['authloginviaemail'] = 'Permet l\'inici de sessió mitjançant el correu electrònic';
$string['authloginviaemail_desc'] = 'Permet als usuaris utilitzar indistintament el nom d\'usuari i l\'adreça electrònica (mentre sigui única) per iniciar la sessió.';
$string['auto_add_remote_users'] = 'Afegeix automàticament usuaris remots';
$string['cannotmapfield'] = 'El camp «{$a->fieldname}» no pot ser mapat, perquè el nom curt «{$a->shortname}» és massa llarg. Per habilitar el mapatge cal reduir el nom curt del camp del perfil fins a {$a->charlimit} caràcters. <a href="{$a->link}">Edita els camps de perfil de l\'usuari</a>';
$string['changepassword'] = 'URL de canvi de contrasenya';
$string['changepasswordhelp'] = 'URL de la pàgina de recuperació d\'una contrasenya perduda, la qual s\'enviarà als usuaris per correu electrònic. Pareu esment en que aquest paràmetre no té cap efecte si s\'ha establert una URL de contrasenya oblidada als paràmetres comuns d\'autenticació.';
$string['chooseauthmethod'] = 'Trieu un mètode d\'autenticació';
$string['chooseauthmethod_help'] = 'Aquest paràmetre determina el mètode d\'autenticació utilitzat quan l\'usuari inicia la sessió. Només s\'haurien d\'escollir els mòduls d\'autenticació habilitats; altrament, l\'usuari no podrà iniciar més la sessió. Per tal d\'evitar que un usuari iniciï la sessió, escolliu «Sense inici de sessió».';
$string['createpassword'] = 'Genera contrasenya i notifica a l\'usuari';
$string['createpasswordifneeded'] = 'Crea la contrasenya si cal i envia-la per correu electrònic';
$string['emailchangecancel'] = 'Cancel·la el canvi de correu';
$string['emailchangepending'] = 'Canvi pendent. Obriu l\'enllaç que us hem enviat a l\'adreça {$a->preference_newemail}.';
$string['emailnowexists'] = 'L\'adreça de correu electrònic que heu intentat vincular al vostre perfil ha estat assignada a un altre compte des que vau fer la sol·licitud de canvi de correu. Per tant s\'ha cancel·lat aquesta sol·licitud. Podeu tornar a intentar-ho amb una altra adreça.';
$string['emailupdate'] = 'Actualització de l\'adreça de correu';
$string['emailupdatemessage'] = '{$a->fullname},

Heu sol·licitat el canvi d\'adreça de correu electrònic del vostre compte d\'usuari a {$a->site}. Obriu l\'enllaç següent amb el vostre navegador per confirmar el canvi:

{$a->url}';
$string['emailupdatesuccess'] = 'L\'adreça de correu electrònic de l\'usuari <em>{$a->fullname}</em> ha estat actualitzada i ara és <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmació d\'actualització d\'adreça de correu en {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'La contrasenya ha de contenir almenys {$a} caràcters consecutius.';
$string['errorminpassworddigits'] = 'La contrasenya ha de contenir almenys {$a} dígit/s.';
$string['errorminpasswordlength'] = 'La longitud mínima de la contrasenya són {$a} caràcters.';
$string['errorminpasswordlower'] = 'La contrasenya ha de contenir almenys {$a} minúscula/es.';
$string['errorminpasswordnonalphanum'] = 'La contrasenya ha de contenir almenys {$a} caràcter/s no alfanumèric/s com ara *, -, o #.';
$string['errorminpasswordupper'] = 'La contrasenya ha de contenir almenys {$a} majúscula/es.';
$string['errorpasswordreused'] = 'La contrasenya ha estat utilitzada abans, i no es permet reutilitzar-la.';
$string['errorpasswordupdate'] = 'No s\'ha pogut canviar la contrasenya. S\'ha produït un error.';
$string['eventuserloggedin'] = 'L\'usuari ha iniciat sessió';
$string['eventuserloggedinas'] = 'L\'usuari ha iniciat sessió com un altre usuari';
$string['eventuserloginfailed'] = 'Ha fallat l\'inici de sessió';
$string['forcechangepassword'] = 'Imposa un canvi de contrasenya';
$string['forcechangepassword_help'] = 'Obliga els usuaris a canviar la contrasenya la propera vegada que iniciïn la sessió a Moodle.';
$string['forcechangepasswordfirst_help'] = 'Obliga els usuaris a canviar la contrasenya la primera vegada que iniciïn la sessió a Moodle.';
$string['forgottenpassword'] = 'Si introduïu un URL aquí, s\'utilitzarà com a pàgina de recuperació de contrasenyes d\'aquest lloc. Aquest paràmetre està pensat per als casos en què les contrasenyes es gestionen totalment fora de Moodle. Deixeu el camp en blanc per utilitzar el mecanisme per defecte de recuperació de contrasenyes.';
$string['forgottenpasswordurl'] = 'URL de recuperació de contrasenyes';
$string['getrecaptchaapi'] = 'Per utilitzar reCAPTCHA heu d\'obtenir una clau API de <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Botó d\'inici de sessió de visitants';
$string['incorrectpleasetryagain'] = 'Incorrecte. Torneu a intentar-ho.';
$string['infilefield'] = 'Camp requerit en el fitxer';
$string['informminpassworddigits'] = 'com a mínim {$a} dígit(s)';
$string['informminpasswordlength'] = 'com a mínim {$a} caràcters';
$string['informminpasswordlower'] = 'com a mínim {$a} minúscula/es';
$string['informminpasswordnonalphanum'] = 'com a mínim {$a} caràcter(s) no alfanumèric(s) com ara *, -, o #.';
$string['informminpasswordreuselimit'] = 'Les contrasenyes es poden reutilitzar després de {$a} canvis.';
$string['informminpasswordupper'] = 'com a mínim {$a} lletra/es majúscula/es';
$string['informpasswordpolicy'] = 'La contrasenya ha de tenir {$a}';
$string['instructions'] = 'Instruccions';
$string['internal'] = 'Intern';
$string['limitconcurrentlogins'] = 'Limita les sessions concurrents';
$string['limitconcurrentlogins_desc'] = 'Si s\'habilita es restringeix el nombre de sessions concurrents per a cada usuari. La sessió més antiga es tanca en arribar al límit. Pareu esment en que els usuaris perdran la feina no desada. Aquest paràmetre no és compatible amb els connectors d\'inici de sessió únic (SSO).';
$string['locked'] = 'Blocat';
$string['md5'] = 'Resum MD5';
$string['nopasswordchange'] = 'No es pot canviar la contrasenya';
$string['nopasswordchangeforced'] = 'No podeu continuar sense canviar la contrasenya, però no està disponible cap pàgina on pugueu canviar-la. Contacteu amb l\'administració del vostre Moodle.';
$string['noprofileedit'] = 'El perfil no es pot editar';
$string['ntlmsso_attempting'] = 'S\'està intentant l\'autenticació única a través de NTLM...';
$string['ntlmsso_failed'] = 'L\'inici de sessió automàtic ha fallat. Proveu d\'iniciar la sessió per la pàgina normal...';
$string['ntlmsso_isdisabled'] = 'L\'autenticació única per NTLM està inhabilitada';
$string['passwordhandling'] = 'Gestió del camp de contrasenya';
$string['plaintext'] = 'Text net';
$string['pluginnotenabled'] = 'El connector d\'autenticació \'{$a}\' no està habilitat.';
$string['pluginnotinstalled'] = 'El connector d\'autenticació \'{$a}\' no està instal·lat.';
$string['potentialidps'] = 'Autentiqueu-vos utilitzant el vostre compte a:';
$string['privacy:metadata:userpref:createpassword'] = 'Indica que s\'ha de generar una contrasenya per a l\'usuari';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indica si l\'usuari hauria de canviar la seva contrasenya en iniciar la sessió';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Nombre de vegades que ha fallat l\'autenticació de l\'usuari';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Nombre de vegades que ha fallat l\'autenticació de l\'usuari des de l\'últim inici de sessió';
$string['privacy:metadata:userpref:loginfailedlast'] = 'La data en què es va registrar l\'últim intent d\'inici de sessió fallit';
$string['privacy:metadata:userpref:loginlockout'] = 'Indica si el compte de l\'usuari està bloquejat a causa d\'intents d\'inici de sessió fallits, i la data en què el compte va entrar en estat de bloqueig';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indica que el compte d\'un usuari no hauria d\'estar subjecte a cap bloqueig';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Quan estigui bloquejat, el secret que l\'usuari ha d\'utilitzar per a desbloquejar el seu compte';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'El CAPTCHA s\'usa per prevenir l\'abús de programes automatitzats. Seguiu les instruccions per verificar que sou una persona. Pot ser una casella per marcar, caràcters presentats en una imatge que heu d\'introduir o un conjunt d\'imatges per seleccionar.

Si no esteu segur de quines són les imatges, podeu provar d\'obtenir un altre CAPTCHA o un CAPTCHA d\'àudio.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Pregunta de seguretat';
$string['selfregistration'] = 'Autoregistre';
$string['selfregistration_help'] = 'Si seleccioneu un connector d\'autenticació, com ara l\'autoregistre basat en correu electrònic, llavors es permet que usuaris potencials s\'inscriguin i creïn comptes. Això fa possible que s\'enviï brossa a fòrums, blogs, etc. Per evitar aquest perill, inhabiliteu l\'autoregistre o limiteu-lo mitjançant el paràmetre <em>Dominis de correu permesos</em>.';
$string['settingmigrationmismatch'] = 'S\'han detectat valors no coincidents mentre es corregien els noms de configuració del connector. El connector d\'autenticació «{$a->plugin}»  tenia el paràmetre «{$a->setting}» configurat a «{$a->legacy}» sota el nom antic i a «{$a->current}» sota el nom actual. Aquest últim valor s\'ha definit com a vàlid, però heu de verificar i confirmar que és el valor esperat.';
$string['sha1'] = 'Resum SHA-1';
$string['showguestlogin'] = 'Podeu ocultar o mostrar el botó d\'inici de sessió com a visitant a la pàgina d\'inici de sessió.';
$string['stdchangepassword'] = 'Utilitza la pàgina estàndard de canvi de contrasenya';
$string['stdchangepassword_expl'] = 'Si el sistema extern d\'autenticació permet canvis de contrasenya per mitjà de Moodle, canvieu aquest paràmetre a Sí. Aquest paràmetre substitueix l\'«URL de canvi de contrasenya».';
$string['stdchangepassword_explldap'] = 'NOTA: s\'aconsella que utilitzeu LDAP sobre un túnel xifrat SSL (ldaps://) si el servidor LDAP és remot.';
$string['suspended'] = 'Compte invalidat';
$string['suspended_help'] = 'Els comptes dels usuaris amb la inscripció suspesa no poden connectar-se a Moodle ni utilitzar serveis web, i se\'n descarten els missatges de sortida.';
$string['testsettings'] = 'Prova la configuració';
$string['testsettingsheading'] = 'Paràmetres de la prova d\'autenticació {$a}';
$string['unlocked'] = 'Desblocat';
$string['unlockedifempty'] = 'Desblocat si està buit';
$string['update_never'] = 'Mai';
$string['update_oncreate'] = 'En crear';
$string['update_onlogin'] = 'En cada inici de sessió';
$string['update_onupdate'] = 'En actualitzar';
$string['user_activatenotsupportusertype'] = 'auth: l\'user_activate() de l\'ldap no suporta el tipus d\'usuari seleccionat: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: l\'user_disable() de l\'ldap no admet el tipus d\'usuari seleccionat (...encara)';
$string['username'] = 'Nom d\'usuari';
$string['username_help'] = 'Recordeu que alguns connectors d\'autenticació no us permetran canviar el nom d\'usuari.';
