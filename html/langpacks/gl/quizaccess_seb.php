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
 * Strings for component 'quizaccess_seb', language 'gl', version '4.5'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Engadir un novo modelo';
$string['allowedbrowserkeysdistinct'] = 'Todas as teclas deben ser diferentes.';
$string['allowedbrowserkeyssyntax'] = 'Unha chave debe ser unha cadea hex de 64 caracteres.';
$string['cachedef_config'] = 'Caché de configuración do SEB';
$string['cachedef_configkey'] = 'Caché de chaves de configuración do SEB';
$string['cachedef_quizsettings'] = 'Caché de axustes do cuestionario do SEB';
$string['cantdelete'] = 'O modelo non se pode eliminar xa que se usou para un ou máis cuestionarios';
$string['cantedit'] = 'O modelo non se pode editar xa que se usou para un ou máis cuestionarios';
$string['checkingaccess'] = 'Comprobando o acceso ao Navegador de exame seguro (Safe Exam Browser)…';
$string['clientrequiresseb'] = 'Este cuestionario foi configurado para usar o Navegador de exame seguro coa configuración do cliente.';
$string['confirmtemplateremovalquestion'] = 'Confirma que quere retirar este modelo?';
$string['confirmtemplateremovaltitle'] = 'Confirma a retirada do modelo?';
$string['conflictingsettings'] = 'Non ten permiso para actualizar os axustes do Navegador de exame seguro existente.';
$string['content'] = 'Modelo';
$string['description'] = 'Descrición';
$string['disabledsettings'] = 'Axustes desactivados.';
$string['disabledsettings_help'] = 'Os axustes do Navegador de exame seguro non se poden cambiar se se tentou o cuestionario. Para cambiar un axuste, primeiro deben eliminarse todos os intentos do cuestionario.';
$string['downloadsebconfig'] = 'Descargar o ficheiro de configuración SEB';
$string['duplicatetemplate'] = 'Xa existe un modelo co mesmo nome.';
$string['edittemplate'] = 'Editar o modelo';
$string['enabled'] = 'Activado';
$string['error:ws:nokeyprovided'] = 'Debe fornecerse polo menos unha chave de Navegador de exame seguro.';
$string['error:ws:quiznotexists'] = 'Non se atopou o cuestionario que coincide co ID do módulo do curso: {$a}';
$string['event:accessprevented'] = 'Impediuse o acceso ao cuestionario';
$string['event:templatecreated'] = 'Creouse o modelo do SEB';
$string['event:templatedeleted'] = 'Eliminouse o modelo do SEB';
$string['event:templatedisabled'] = 'Desactivouse o modelo do SEB';
$string['event:templateenabled'] = 'Activouse o modelo do SEB';
$string['event:templateupdated'] = 'Actualizouse o modelo do SEB';
$string['exitsebbutton'] = 'Saír do Navegador de exame seguro';
$string['filemanager_sebconfigfile'] = 'Enviar un ficheiro de configuración do Navegador de exame seguro';
$string['filemanager_sebconfigfile_help'] = 'Envíe o seu propio ficheiro de configuración do Navegador de exame seguro para este cuestionario.';
$string['filenotpresent'] = 'Envíe un ficheiro de configuración do SEB.';
$string['fileparsefailed'] = 'Non foi posíbel gardar o ficheiro enviado como ficheiro de configuración do SEB.';
$string['httplinkbutton'] = 'Descargar configuración';
$string['invalid_browser_key'] = 'Chave do navegador do SEB non válida';
$string['invalid_config_key'] = 'Chave de configuración do SEB non válida';
$string['invalidkeys'] = 'Non se puideron validar as chaves do Navegador de exame seguro. Comprobe que está a usar o Navegador de exame seguro co ficheiro de configuración correcto.';
$string['invalidtemplate'] = 'Modelo de configuración do SEB non válido';
$string['manage_templates'] = 'Modelos de Navegador de exame seguro';
$string['managetemplates'] = 'Xestionar modelos';
$string['missingrequiredsettings'] = 'Faltan algúns axustes  necesarios na configuración';
$string['name'] = 'Nome';
$string['newtemplate'] = 'Novo modelo';
$string['noconfigfilefound'] = 'Non foi posíbel atopar ningún ficheiro de configuración do SEB enviado para o cuestionario co cmid: {$a}';
$string['noconfigfound'] = 'Non foi posíbel atopar ningunha configuración do SEB para o cuestionario co cmid: {$a}';
$string['not_seb'] = 'Non se usa ningún Navegador de exame seguro.';
$string['notemplate'] = 'Sen modelo';
$string['passwordnotset'] = 'Os axustes actuais precisan que os cuestionarios usen o Navegador de exame seguro para ter un contrasinal do cuestionario.';
$string['pluginname'] = 'Regras de acceso ao Navegador de exame seguro';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Os axustes do Navegador de exame seguro para un cuestionario. Isto inclúe o ID do último usuario que creou ou modificou os axustes.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID do cuestionario para a que existen os axustes.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Hora Unix na que se crearon os axustes.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Hora Unix que na que se modificaron por última vez os axustes.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID do usuario que creou ou modificou os axustes por última vez.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Axustes modelo do Navegador de exame seguro. Isto inclúe o ID do último usuario que creou ou modificou o modelo.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Hora Unix na que se creou o modelo.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Hora Unix que na que se modificou por última vez o modelo.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID do usuario que creou ou modificou o modelo por última vez.';
$string['quizsettings'] = 'Configuración da proba';
$string['restoredfrom'] = '{$a->nome} (restaurado a traves do cmid {$a->cmid})';
$string['seb'] = 'Navegador de exame seguro';
$string['seb:bypassseb'] = 'Obviar o requisito para ver o cuestionario no Navegador de exame seguro.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Cambiar o axuste do cuestionario no SEB: Escolla o ficheiro de configuración do SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Cambiar o axuste do cuestionario no SEB: Activar o filtrado de URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Cambiar o axuste do cuestionario no SEB: Chaves de exame do navegador permitidas';
$string['seb:manage_seb_allowreloadinexam'] = 'Cambiar o axuste do cuestionario no SEB: Permitir a recarga';
$string['seb:manage_seb_allowspellchecking'] = 'Cambiar o axuste do cuestionario no SEB: Activar a corrección ortográfica';
$string['seb:manage_seb_allowuserquitseb'] = 'Cambiar o axuste do cuestionario no SEB: Permitir saír';
$string['seb:manage_seb_enableaudiocontrol'] = 'Cambiar o axuste do cuestionario no SEB: Activar o control do son';
$string['seb:manage_seb_expressionsallowed'] = 'Cambiar o axuste do cuestionario no SEB: Permitir as expresións simples';
$string['seb:manage_seb_expressionsblocked'] = 'Cambiar o axuste do cuestionario no SEB: Bloquear as expresións simples';
$string['seb:manage_seb_filterembeddedcontent'] = 'Cambiar o axuste do cuestionario no SEB: Filtrar o contido incrustado';
$string['seb:manage_seb_linkquitseb'] = 'Cambiar o axuste do cuestionario no SEB: Saír da ligazón';
$string['seb:manage_seb_muteonstartup'] = 'Cambiar o axuste do cuestionario no SEB: Silenciar no inicio';
$string['seb:manage_seb_quitpassword'] = 'Cambiar o axuste do cuestionario no SEB: Contrasinal de saída';
$string['seb:manage_seb_regexallowed'] = 'Cambiar o axuste do cuestionario no SEB: Permitir as expresións regulares';
$string['seb:manage_seb_regexblocked'] = 'Cambiar o axuste do cuestionario no SEB: Bloquear as expresións regulares';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Cambiar o axuste do cuestionario no SEB: Requirir un Navegador de exame seguro';
$string['seb:manage_seb_showkeyboardlayout'] = 'Cambiar o axuste do cuestionario no SEB: Amosar a disposición do teclado';
$string['seb:manage_seb_showreloadbutton'] = 'Cambiar o axuste do cuestionario no SEB: Amosar o botón de recarga';
$string['seb:manage_seb_showsebdownloadlink'] = 'Cambiar o axuste do cuestionario no SEB: Amosar a ligazón de descarga';
$string['seb:manage_seb_showsebtaskbar'] = 'Cambiar o axuste do cuestionario no SEB: Amosar a barra de tarefas';
$string['seb:manage_seb_showtime'] = 'Cambiar o axuste do cuestionario no SEB: Amosar a hora';
$string['seb:manage_seb_showwificontrol'] = 'Cambiar o axuste do cuestionario no SEB: Amosar o control da wifi';
$string['seb:manage_seb_templateid'] = 'Cambiar o axuste do cuestionario no SEB: Escolla o ficheiro modelo do SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Cambiar o axuste do cuestionario no SEB: Confirmar a saída';
$string['seb:managetemplates'] = 'Xestionar modelos de configuración do SEB';
$string['seb_activateurlfiltering'] = 'Activar o filtrado de URL';
$string['seb_activateurlfiltering_help'] = 'Se está activado, os URL filtraranse ao cargar páxinas web. O conxunto de filtros ten que definirse a continuación.';
$string['seb_allowedbrowserexamkeys'] = 'Chaves de exame do navegador permitidas';
$string['seb_allowedbrowserexamkeys_help'] = 'Neste campo pode introducir as chaves de exame permitidas do navegador para as versións do Navegador de exame seguro que están permitidas para acceder a este cuestionario. Se non se introducen chaves, entón as chaves de exame do navegador non se verifican.';
$string['seb_allowreloadinexam'] = 'Activar a recarga no exame';
$string['seb_allowreloadinexam_help'] = 'Se está activado, permítese a recarga de páxinas (botón de recarga na barra de tarefas do SEB, barra de ferramentas do navegador, menú esvarante lateral de iOS, atallo de teclado F5/cmd+R). Teña en conta que o almacenamento en caché fóra de liña pode rachar se un usuario tenta recargar unha páxina sen conexión á Internet.';
$string['seb_allowspellchecking'] = 'Activar a corrección ortográfica';
$string['seb_allowspellchecking_help'] = 'Se está activado, permítese a corrección ortográfica no navegador SEB.';
$string['seb_allowuserquitseb'] = 'Activar o abandono do SEB';
$string['seb_allowuserquitseb_help'] = 'Se está activado, os usuarios poden abandonar o SEB co botón «Saír» na barra de tarefas do SEB, premendo as teclas Ctrl-Q ou premendo o botón de peche da xanela principal do navegador.';
$string['seb_enableaudiocontrol'] = 'Activar os controis de son';
$string['seb_enableaudiocontrol_help'] = 'Se está activado, a icona de control de son amósase na barra de tarefas do SEB.';
$string['seb_expressionsallowed'] = 'Expresións permitidas';
$string['seb_expressionsallowed_help'] = 'Un campo de texto que contén as expresións de filtrado permitidas para os URL permitidos. É posíbel o uso do comodín «\\*». Exemplos para expresións: «exemplo.com» ou «exemplo.com/algo/\\*». «exemplo.com» coincide con «exemplo.com», «www.exemplo.com» e «www.correo.exemplo.com». «exemple.com/algo/\\*» coincide con todas as solicitudes a calquera subdominio de «exemplo.com» que teñan «algo» como primeiro segmento do camiño.';
$string['seb_expressionsblocked'] = 'Expresións bloqueadas';
$string['seb_expressionsblocked_help'] = 'Un campo de texto que contén as expresións de filtrado bloqueadas para os URL bloqueados. É posíbel o uso do comodín «\\*». Exemplos para expresións: «exemplo.com» ou «exemplo.com/algo/\\*». «exemplo.com» coincide con «exemplo.com», «www.exemplo.com» e «www.correo.exemplo.com». «exemple.com/algo/\\*» coincide con todas as solicitudes a calquera subdominio de «exemplo.com» que teñan «algo» como primeiro segmento do camiño.';
$string['seb_filterembeddedcontent'] = 'Filtrar tamén o contido incrustado';
$string['seb_filterembeddedcontent_help'] = 'Se está activado, os recursos incrustados tamén se filtrarán usando o conxunto de filtros.';
$string['seb_help'] = 'Configurar o cuestionario para usar o Navegador de exame seguro';
$string['seb_linkquitseb'] = 'Amosar o botón Saír do Navegador de exame seguro, configurado con esta ligazón de saída';
$string['seb_linkquitseb_help'] = 'Neste campo pode introducir a ligazón para saír do SEB. Utilizarase nun botón «Saír do Navegador de exame seguro» na páxina que aparece após a entrega do exame. Ao premer no botón ou na ligazón colocada onde queira poñela, é posíbel abandonar o SEB sen ter que introducir un contrasinal de saída. Se non se introduce ningunha ligazón, entón non aparece o botón «Saír do Navegador de exame seguro» e non hai ningunha ligazón definida para saír do SEB.';
$string['seb_managetemplates'] = 'Xestionar modelos  do Navegador de exame seguro';
$string['seb_muteonstartup'] = 'Silenciar ao iniciar';
$string['seb_muteonstartup_help'] = 'Se está activado, o son é inicialmente silenciado ao iniciar SEB.';
$string['seb_quitpassword'] = 'Contrasinal de saída';
$string['seb_quitpassword_help'] = 'Este contrasinal solicitase cando os usuarios tentan saír do SEB co botón «Saír», con Ctrl-Q ou o co botón de peche na xanela principal do navegador. Se non se define ningún contrasinal de saída, entón o SEB só indica «Confirma que quere abandonar o SEB?».';
$string['seb_regexallowed'] = 'Expresións regulares permitidas';
$string['seb_regexallowed_help'] = 'Un campo de texto que contén as expresións de filtrado do URL permitidos nun formato de expresión regular (Regex).';
$string['seb_regexblocked'] = 'Expresións regulares bloqueadas';
$string['seb_regexblocked_help'] = 'Un campo de texto que contén as expresións de filtrado do URL bloqueados nun formato de expresión regular (Regex).';
$string['seb_requiresafeexambrowser'] = 'Requirir o emprego de navegador seguro de exame';
$string['seb_requiresafeexambrowser_help'] = 'Se está activado, o alumnado só pode tentar facer o cuestionario usando o Navegador de exame seguro.
As opcións dispoñíbeis son:

* Non
<br/>O Navegador de exame seguro non é necesario para tentar o cuestionario.
* Si - Usa un modelo existente
<br/>Pódese usar un modelo para a configuración do Navegador de exame seguro. Os modelos son xestionados na administración do sitio. Os seus axustes manuais sobrescriben os axustes no modelo.
* Sí - Configurar manualmente
<br/>Non se utilizará ningún modelo para a configuración do Navegador de exame seguro. Pode configurar o Navegador de exame seguro manualmente.
* Si - Cargar a miña propia configuración
<br/>Pode cargar o seu propio ficheiro de configuración do Navegador de exame seguro. Desactivaranse todos os axustes manuais e o uso de modelos.
* Si – Usar a configuración do cliente SEB
<br/>Non hai configuracións do Navegador de exame seguro no lado de Moodle. O cuestionario pódese tentar con calquera configuración do Navegador de exame seguro.';
$string['seb_showkeyboardlayout'] = 'Amosar a disposición do teclado';
$string['seb_showkeyboardlayout_help'] = 'Se está activado, a disposición actual do teclado amosase na barra de tarefas do SEB. Permite cambiar a outras disposicións de teclado, que teñan sido activadas no sistema operativo.';
$string['seb_showreloadbutton'] = 'Amosar o botón de recarga';
$string['seb_showreloadbutton_help'] = 'Se está activado, amosase un botón de recarga na barra de tarefas do SEB, o que permite recargar a páxina web actual.';
$string['seb_showsebdownloadlink'] = 'Amosar o botón de descarga do Navegador de exame seguro';
$string['seb_showsebdownloadlink_help'] = 'Se está activado, na páxina de inicio do cuestionario amosarase un botón para a descarga do Navegador de exame seguro.';
$string['seb_showsebtaskbar'] = 'Mostrar a barra de tarefas do SEB';
$string['seb_showsebtaskbar_help'] = 'Se está activado, aparecerá unha barra de tarefas na parte inferior da xanela do navegador SEB. A barra de tarefas é necesaria para amosar elementos como o control da wifi, o botón de recarga, a hora e a disposición do teclado.';
$string['seb_showtime'] = 'Amosar a hora';
$string['seb_showtime_help'] = 'Se está activado, amosarase a hora actual na barra de tarefas do SEB.';
$string['seb_showwificontrol'] = 'Amosar o control sa wifi';
$string['seb_showwificontrol_help'] = 'Se está activado, aparece un botón de control da wifi na barra de tarefas do SEB. O botón permite aos usuarios volver conectarse a redes wifi que se teña conectado anteriormente.';
$string['seb_templateid'] = 'Modelo de configuración do Navegador de exame seguro';
$string['seb_templateid_help'] = 'Os axustes do modelo de configuración seleccionado empregarase para a configuración do Navegador de exame seguro mentres tenta o cuestionario. Pode sobrescribir os axustes do modelo cos seus axustes manuais.';
$string['seb_use_client'] = 'Si – Usar a configuración do cliente SEB';
$string['seb_use_manually'] = 'Sim – Configurar manualmente';
$string['seb_use_template'] = 'Si – Usar un modelo existente';
$string['seb_use_upload'] = 'Si – Enviar a miña propia configuración';
$string['seb_userconfirmquit'] = 'Pedir ao usuario que confirme a saída';
$string['seb_userconfirmquit_help'] = 'Se está activado, os usuarios teñen que confirmar a saída do SEB cando se detecta unha ligazón de saída.';
$string['sebdownloadbutton'] = 'Descargar o Navegador de exame seguro';
$string['sebkeysvalidationfailed'] = 'Produciuse un erro ao validar as chaves do SEB';
$string['seblinkbutton'] = 'Iniciar un Navegador de exame seguro';
$string['sebrequired'] = 'Esta proba foi configurada para que só poida tentar resolvela empregando un navegador seguro de exame.';
$string['setting:autoreconfigureseb'] = 'Configurar o SEB automaticamente';
$string['setting:autoreconfigureseb_desc'] = 'Se está activado, os usuarios que naveguen ao cuestionario mediante o Navegador de exame seguro veranse obrigados automaticamente a reconfigurar o seu Navegador de exame seguro.';
$string['setting:displayblocksbeforestart'] = 'Amosar os bloques antes de comezar o cuestionario';
$string['setting:displayblocksbeforestart_desc'] = 'Se está activado, os bloques amosaranse antes de que un usuario intente o cuestionario.';
$string['setting:displayblockswhenfinished'] = 'Amosar os bloques após comezar o cuestionario';
$string['setting:displayblockswhenfinished_desc'] = 'Se está activado, os bloques amosaranse após que un usuario remate o seu intento de cuestionario.';
$string['setting:downloadlink'] = 'Ligazón de descarga do Navegador de exame seguro';
$string['setting:downloadlink_desc'] = 'URL para descargar a aplicación Navegador de exame seguro';
$string['setting:quizpasswordrequired'] = 'Requírese o contrasinal de cuestionario';
$string['setting:quizpasswordrequired_desc'] = 'Se está activado, todos os cuestionarios que requiren o Navegador de exame seguro deben ter un contrasinal de cuestionario definido.';
$string['setting:showhttplink'] = 'Amosar a ligazón http://';
$string['setting:showseblink'] = 'Amosar a ligazón seb://';
$string['setting:showseblinks'] = 'Amosar as ligazóns de configuración do Navegador de exame seguro';
$string['setting:showseblinks_desc'] = 'Indica se debe amosar ligazóns para que un usuario acceda ao ficheiro de configuración do Navegador de exame seguro cando se impida o acceso ao cuestionario. Teña en conta que as ligazóns seb:// poden non funcionar en todos os navegadores.';
$string['setting:supportedversions'] = 'Teña en conta que as seguintes versións mínimas do cliente Navegador de exame seguro (Safe Exam Browser) están obrigadas a usar a característica de chave de configuración: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Debido a que hai polo menos un intento de cuestionario, a configuración do Navegador de exame seguro xa non se pode actualizar.';
$string['unknown_reason'] = 'Motivo descoñecido';
$string['used'] = 'En uso';
