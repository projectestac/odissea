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
 * Strings for component 'report_security', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p> Es recomana que canvieu els permisos del fitxer config.php després de la instal·lació per tal que el fitxer no pugui ser modificat pel servidor web. Fixeu-vos que aquesta mesura no millora de manera significativa la seguretat del servidor, encara que pot ajudar a disminuir els punts febles del sistema.</p>';
$string['check_configrw_name'] = 'config.php té permisos d\'escriptura';
$string['check_configrw_ok'] = 'config.php no pot ser modificat pels scripts de PHP.';
$string['check_configrw_warning'] = 'Els scripts de PHP poden modificar config.php.';
$string['check_cookiesecure_details'] = '<p>Si habiliteu la comunicació https es recomana que habiliteu també les galetes segures. També hauríeu  d\'afegir una redirecció permanent des de http a https.</p>';
$string['check_cookiesecure_error'] = 'Habiliteu les galetes segures';
$string['check_cookiesecure_name'] = 'Galetes segures';
$string['check_cookiesecure_ok'] = 'Galetes segures habilitades.';
$string['check_crawlers_details'] = '<p>El paràmetre «Obert a Google» permet que els motors de cerca accedeixin als cursos amb permís d\'accés als convidats. No té sentit habilitar aquest paràmetre si no es permet l\'inici de sessió dels convidats.</p>';
$string['check_crawlers_error'] = 'Es permet l\'accés als motors de cerca, però s\'ha inhabilitat l\'accés de visitant.';
$string['check_crawlers_info'] = 'Els motors de cerca poden entrar com a convidats.';
$string['check_crawlers_name'] = 'Obert a Google';
$string['check_crawlers_ok'] = 'L\'accés als motors de cerca no està habilitat.';
$string['check_defaultuserrole_details'] = '<p>Tots els usuaris que han iniciat sessió tenen les capacitats del rol d\'usuari per defecte. Comproveu que aquest rol no té permesa cap capacitat arriscada.</p> <p>L\'únic tipus heretat admès pel rol d\'usuari per defecte és  <em>Usuari autenticat</em>. La capacitat de veure cursos no s\'ha d\'habilitar.</p>';
$string['check_defaultuserrole_error'] = 'El rol d\'usuari per defecte «{$a}» està definit incorrectament!';
$string['check_defaultuserrole_name'] = 'Rol per defecte per tots els usuaris';
$string['check_defaultuserrole_notset'] = 'El rol per defecte no està configurat.';
$string['check_defaultuserrole_ok'] = 'La definició del rol per defecte per tots els usuaris és correcta.';
$string['check_displayerrors_details'] = '<p>No es recomana activar el paràmetre <code>display_errors</code> del PHP en entorns de producció perquè els missatges d\'error poden mostrar informació sensible relativa al vostre servidor.</p>';
$string['check_displayerrors_error'] = 'S\'ha habilitat el paràmetre de PHP per mostrar errors. Es recomana que estigui inhabilitat.';
$string['check_displayerrors_name'] = 'Visualització dels errors de PHP';
$string['check_displayerrors_ok'] = 'S\'ha inhabilitat la visualització dels errors de PHP.';
$string['check_emailchangeconfirmation_details'] = '<p>Es recomana que calgui demanar un correu electrònic de confirmació quan els usuaris canvien l\'adreça electrònica al seu perfil. Si s\'inhabilita, és possible que els emissors de correu brossa intentin explotar aquesta debilitat del servidor per enviar correu brossa.</p> <p>El camp de correu també pot bloquejar-se des dels connectors d\'autenticació; aquesta possibilitat no es considera aquí.</p>';
$string['check_emailchangeconfirmation_error'] = 'Els usuaris poden introduir qualsevol adreça de correu electrònic.';
$string['check_emailchangeconfirmation_info'] = 'Els usuaris poden introduir adreces de correu electrònic sols de dominis permesos.';
$string['check_emailchangeconfirmation_name'] = 'Confirmació del canvi del correu electrònic';
$string['check_emailchangeconfirmation_ok'] = 'Confirmació del canvi del correu electrònic al perfil de l\'usuari.';
$string['check_embed_details'] = '<p>Incrustar un nombre il·limitat d\'objectes és molt perillós; qualsevol usuari registrat pot llançar un atac XSS contra altres usuaris del servidor. Aquest paràmetre s\'hauria d\'inhabilitar en servidors en producció.</p>';
$string['check_embed_error'] = 'Hi ha habilitada la incrustació il·limitada d\'objectes - Això és molt perillós per la majoria de servidors.';
$string['check_embed_name'] = 'Permet EMBED i OBJECT';
$string['check_embed_ok'] = 'No es permet incrustar un nombre il·limitat d\'objectes.';
$string['check_frontpagerole_details'] = '<p>El rol de la pàgina principal es dóna a tots els usuaris inscrits a les activitats de la pagina principal. Comproveu que aquest rol no té permesa cap capacitat arriscada.</p> <p>Es recomana que es creï un rol especial per a aquest propòsit i que no s\'utilitzi cap rol de tipus heretat.</p>';
$string['check_frontpagerole_error'] = 'S\'ha detectat una definició incorrecta del rol de la pàgina principal «{$a}»!';
$string['check_frontpagerole_name'] = 'Rol de la pàgina principal';
$string['check_frontpagerole_notset'] = 'El rol de la pàgina principal no està definit.';
$string['check_frontpagerole_ok'] = 'El rol de la pàgina principal està definit de forma correcta.';
$string['check_guestrole_details'] = '<p>El rol de convidat és utilitzat pels convidats, pels usuaris que no han iniciat sessió i en cas d\'accés temporal als cursos com a convidat. Comproveu que aquest rol no té permesa cap capacitat arriscada.</p> <p>L\'únic tipus heretat admès pel rol d\'usuari convidat és <em>Convidat</em>.</p>';
$string['check_guestrole_error'] = 'El rol de convidat «{$a}» està definit incorrectament!';
$string['check_guestrole_name'] = 'Rol de convidat';
$string['check_guestrole_notset'] = 'El rol de convidat no està configurat.';
$string['check_guestrole_ok'] = 'La configuració del rol de convidat és correcta!';
$string['check_mediafilterswf_details'] = '<p>La incrustació automàtica d\'objectes de Flash SWF és molt perillosa; qualsevol usuari registrat pot llançar un atac XSS contra altres usuaris del servidor. Inhabiliteu-la en servidors en producció.
</p>';
$string['check_mediafilterswf_error'] = 'El filtre multimèdia flash està habilitat - això és molt perillós per la majoria de servidors.';
$string['check_mediafilterswf_name'] = 'El filtre multimèdia .swf està habilitat';
$string['check_mediafilterswf_ok'] = 'El filtre multimèdia flash no està habilitat.';
$string['check_noauth_details'] = '<p>El connector <em>Sense autenticació</em> no està pensat per a llocs en producció. Inhabiliteu-lo, llevat que aquest lloc sigui de desenvolupament o de proves.</p>';
$string['check_noauth_error'] = 'El connector <em>Sense autenticació</em> no pot utilitzar-se en llocs en producció.';
$string['check_noauth_name'] = 'Sense autenticació';
$string['check_noauth_ok'] = 'S\'ha inhabilitat el connector <em>Sense autenticació</em>.';
$string['check_openprofiles_details'] = 'Els perfils oberts dels usuaris poden ser usats abusivament pels que envien correu brossa. Es recomana que: <code>Forceu els usuaris a iniciar la sessió per accedir als perfils</code> o bé <code>Forceu els usuaris a iniciar sessió</code> estigui habilitat.';
$string['check_openprofiles_error'] = 'Qualsevol persona pot visualitzar perfils d\'usuaris sense iniciar sessió.';
$string['check_openprofiles_name'] = 'Perfils oberts dels usuaris';
$string['check_openprofiles_ok'] = 'Cal iniciar sessió abans de veure els perfils dels usuaris.';
$string['check_passwordpolicy_details'] = '<p>Es recomana que configureu una política de contrasenyes, ja que provar d\'endevinar contrasenyes és sovint la forma més senzilla d\'aconseguir l\'accés de forma no autoritzada.
No poseu requeriments massa estrictes tampoc, ja que als usuaris no els serà fàcil recordar la seva contrasenya i l\'oblidaran o l\'escriuran en qualsevol lloc.
</p>';
$string['check_passwordpolicy_error'] = 'No s\'ha establert una política de contrasenyes.';
$string['check_passwordpolicy_name'] = 'Política de contrasenyes';
$string['check_passwordpolicy_ok'] = 'S\'ha habilitat la política de contrasenyes.';
$string['check_riskadmin_detailsok'] = '<p>Comproveu la llista d\'administrador següent:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Verifiqueu la següent llista d\'administradors del sistema:</p>{$a->admins}
<p>Es recomana asignar funcions d\'administració sols en el context del sistema. Els usuaris següents tenen funcions d\'administració (sense suport) en altres contexts:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administradors';
$string['check_riskadmin_ok'] = 'S\'han trobat {$a} administrador(s) dels servidor.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}): revisa l\'assignació de rols</a>';
$string['check_riskadmin_warning'] = 'S\'han trobat {$a->admincount} administradors del servidor i {$a->unsupcount} rols d\'administrador no suportats.';
$string['check_riskbackup_detailsok'] = 'No hi ha cap rol que permeti explícitament fer una còpia de seguretat de les dades dels usuaris. Tanmateix fixeu-vos que els administrador que tinguin la capacitat «ferqualsevolcosa» poden segurament fer-ho.';
$string['check_riskbackup_details_overriddenroles'] = '<p> Aquesta sobreescriptura activa donarà als usuaris la capacitat d\'incloure dades d\'usuari a les còpies de seguretat. Comproveu que aquest permís és necessari.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Els rols de sistema següents permeten actualment als usuaris incloure dades d\'usuari a les còpies de seguretat. Comproveu que aquest permís és necessari.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Degut als rols anteriors o a les substitucions locals, els seguents comptes d\'usuaris tenen permís per fer còpies de seguretat amb dades privades de qualsevol usuari inscrit al seu curs. Comproveu que (a) són de confiança i (b) estan protegits amb contrasenyes fortes:</p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} en {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Còpia de seguretat de les dades d\'usuari';
$string['check_riskbackup_ok'] = 'No hi ha rols que explícitament permetin fer una còpia de seguretat de les dades dels usuaris.';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) en {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'S\'han trobat {$a->rolecount} rols , {$a->overridecount} sobreescriptures i {$a->usercount} usuaris amb la capacitat de fer còpies de seguretat de dades d\'usuari.';
$string['check_riskxss_details'] = '<p>RISK_XSS simbolitza totes les capacitats perilloses que sols els usuaris de confiança poden utilitzar. </p>
<p>Verifiqueu la llista d\'usuaris següent i assegureu-vos que confieu en ells completament en aquest servidor:</p>
<p>{$a}</p>';
$string['check_riskxss_name'] = 'Usuaris de confiança XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - S\'han trobat {$a} usuaris que cal que siguin de confiança.';
$string['check_unsecuredataroot_details'] = '<p>El directori dataroot cal que no sigui accessible via web. La millor forma d\'assegurar-se que aquest directori no és accessible és posar el directori fora del directori web. </p> <p>Si canvieu de lloc el directori us caldrà actualitzar el paràmetre <code>$CFG->dataroot</code> al fitxer <code>config.php</code></p>';
$string['check_unsecuredataroot_error'] = 'El vostre directori arrel de dades <code>{$a}</code> està mal situat i està exposat al web!';
$string['check_unsecuredataroot_name'] = 'El directori arrel de dades és insegur';
$string['check_unsecuredataroot_ok'] = 'El directori arrel de dades no ha de ser accessible via web.';
$string['check_unsecuredataroot_warning'] = 'El vostre directori arrel de dades <code>{$a}</code> està mal situat i pot estar estar exposat al web.';
$string['check_webcron_details'] = '<p>Executar cron des d\'un navegador web pot exposar informació privilegiada a usuaris anònims. Es recomana que sols executeu cron des de la línia d\'ordres o que configureu una contrasenya de cron per permetre un accés remot.</p>';
$string['check_webcron_name'] = 'Web de cron';
$string['check_webcron_ok'] = 'Els usuaris anònims no poden accedir a cron.';
$string['check_webcron_warning'] = 'Els usuaris anònims poden accedir a cron.';
$string['configuration'] = 'Configuració';
$string['description'] = 'Descripció';
$string['details'] = 'Detalls';
$string['issue'] = 'Incidència';
$string['pluginname'] = 'Característiques de la seguretat';
$string['security:view'] = 'Mostra l\'informe de seguretat';
$string['status'] = 'Estat';
$string['statuscritical'] = 'Crític';
$string['statusinfo'] = 'Informació';
$string['statusok'] = 'D\'acord';
$string['statusserious'] = 'Seriós';
$string['statuswarning'] = 'Avís';
$string['timewarning'] = 'El processament de dades pot trigar una temps llarg; tingueu paciència...';
