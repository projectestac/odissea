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
 * Strings for component 'portfolio', language 'gl', version '4.5'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Resolver a exportación activa';
$string['activeportfolios'] = 'Portafolios dispoñíbeis';
$string['addalltoportfolio'] = 'Exportar todo ao portafolios';
$string['addnewportfolio'] = 'Engadir un novo portafolios';
$string['addtoportfolio'] = 'Exportar ao portafolios';
$string['alreadyalt'] = 'Xa está exportando: prema aquí para resolver esta transferencia';
$string['alreadyexporting'] = 'Xa ten unha exportación de portafolios activa nesta sesión. Antes de continuar, debe de completar esta exportación ou cancelala. Quere continuar? (Non a cancelará)';
$string['availableformats'] = 'Formatos de exportación dispoñíbeis';
$string['callbackclassinvalid'] = 'A clase «callback» especificada era incorrecta ou non formaba parte da xerarquía «portfolio_caller»';
$string['callercouldnotpackage'] = 'Produciuse un erro no empaquetado dos datos para exportar: o error orixinal foi {$a}';
$string['cannotsetvisible'] = 'Non é posíbel estabelecer este a visíbel, o complemento foi desactivado totalmente por mor dunha mala configuración.';
$string['commonportfoliosettings'] = 'Configuración común do portafolios';
$string['commonsettingsdesc'] = '<p>A cantidade de tempo que se considere que empregue unha transferencia «Moderada» ou «Alta» determina se o usuario poderá agardar ou non para que se complete a transferencia.</p><p>Os tamaños ata o limiar «Moderado» procésanse inmediatamente sen preguntarlle ao usuario, e as transferencias de «Moderado» e «Alto» determinan que se ofreza a opción pero se advirta que levará bastante tempo.</p><p>Adicionalmente, algúns engadidos de portafolios poden ignorar esta opción por completo e forzar a que tódalas transferencias se poñan en lista de espera.</p>';
$string['configexport'] = 'Configurar os datos exportados';
$string['configplugin'] = 'Configurar o complemento de portafolios';
$string['configure'] = 'Configurar';
$string['confirmcancel'] = 'Confirma que quere cancelar esta exportación?';
$string['confirmexport'] = 'Confirme esta exportación';
$string['confirmsummary'] = 'Resumo da súa exportación';
$string['continuetoportfolio'] = 'Continuar co seu portafolios';
$string['deleteportfolio'] = 'Eliminar a instancia de portafolios';
$string['destination'] = 'Destino';
$string['disabled'] = 'Vaites, as exportacións de portafolios están desactivadas neste sitio';
$string['disabledinstance'] = 'Desactivado';
$string['displayarea'] = 'Área de exportación';
$string['displayexpiry'] = 'Tempo de expiración da transferencia';
$string['displayinfo'] = 'Información sobre a exportación';
$string['dontwait'] = 'Non agardar';
$string['enabled'] = 'Activar os portafolios';
$string['enableddesc'] = 'Se o activa, os usuarios poderán exportar contidos, tales como publicacións de foros e envíos de tarefas, cara portafolios externos ou páxinas HTML.';
$string['err_uniquename'] = 'O nome do portafolios debe ser único (por complemento)';
$string['exportalreadyfinished'] = 'Completouse a exportación do portafolios!';
$string['exportalreadyfinisheddesc'] = 'Completouse a exportación do portafolios!';
$string['exportcomplete'] = 'Completouse a exportación do portafolios!';
$string['exportedpreviously'] = 'Exportacións previas';
$string['exportexceptionnoexporter'] = 'Produciuse una excepción_exportación_portafolios cunha sesión activa mais sen obxecto exportador';
$string['exportexpired'] = 'Expirou o tempo da exportación do portafolios!';
$string['exportexpireddesc'] = 'Tentou repetir a exportación dalgunha información, ou comezar unha exportación baleira. Para facer isto correctamente, debe regresar á localización orixinal e comezar de novo. Isto a veces sucede cando usa o botón de regresar após completar unha exportación ou ao poñer un marcador (bookmark) nun URL incorrecto.';
$string['exporting'] = 'Exportando ao portafolios';
$string['exportingcontentfrom'] = 'Exportando o contido de {$a}';
$string['exportingcontentto'] = 'Exportando o contido {$a}';
$string['exportqueued'] = 'A exportación do portafolios foi posta na cola para a súa transferencia';
$string['exportqueuedforced'] = 'A exportación do portafolios foi posta na cola para a súa transferencia (o sistema remoto forzou as transferencias na cola)';
$string['failedtopackage'] = 'Non foi posíbel atopar ficheiros que empaquetar';
$string['failedtosendpackage'] = 'Produciuse un fallo ao enviar os datos ao sistema de portafolios seleccionado: o erro orixinal foi {$a}';
$string['filedenied'] = 'Denegado o acceso a este ficheiro';
$string['filenotfound'] = 'Non se atopou o ficheiro';
$string['fileoutputnotsupported'] = 'Neste formato non se admite a reescritura da saída do ficheiro';
$string['format_document'] = 'Documento';
$string['format_file'] = 'Ficheiro';
$string['format_image'] = 'Imaxe';
$string['format_leap2a'] = 'Formato de portafolios Leap2A';
$string['format_mbkp'] = 'Formato de copia de seguridade de Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Presentación';
$string['format_richhtml'] = 'HTML con anexos';
$string['format_spreadsheet'] = 'Folla de cálculo';
$string['format_text'] = 'Texto simple';
$string['format_video'] = 'Vídeo';
$string['highdbsizethreshold'] = 'Maior tamaño da base de datos a transferir';
$string['highdbsizethresholddesc'] = 'Número de rexistros na base de datos por riba do que se considerará que a transferencia leva demasiado tempo';
$string['highfilesizethreshold'] = 'Maior tamaño do ficheiro a transferir';
$string['highfilesizethresholddesc'] = 'Tamaños de ficheiros maiores que este limiar considerase que levan moito tempo para transferirse';
$string['insanebody'] = 'Ola! Está recibindo esta mensaxe como administrador do sitio {$a->sitename}.

Algunhas instancias do engadido de portafolios foron desactivadas automaticamente por estar mal configuradas. Isto significa que os usuarios actualmente non poden exportar contidos a estes portafolios.

A lista de portafolios que foron desactivados é:

{$a->textlist}

Isto debe corrixirse o máis cedo posíbel, visitando {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Ola! Está recibindo esta mensaxe como administrador do sitio {$a->sitename}.</p>
<p>Algunhas instancias do engadido de portafolios foron desactivadas automaticamente por estar mal configuradas. Isto significa que os usuarios actualmente non poden exportar contidos a estes portafolios.</p>
<p>A lista de portafolios que foron desactivados é:</p>
{$a->htmllist}
<p>Isto debe corrixirse o máis cedo posíbel, visitando as <a href="{$a->fixurl}">páxinas de configuración dos portafolios</a></p>';
$string['insanebodysmall'] = 'Ola! Está recibindo esta mensaxe como administrador do sitio {$a->sitename}. Algunhas instancias do engadido de portafolios foron desactivadas automaticamente por estar mal configuradas. Isto significa que os usuarios actualmente non poden exportar contidos a estes portafolios. Isto debe corrixirse o máis cedo posíbel, visitando {$a->fixurl}.';
$string['insanesubject'] = 'Algunhas instancias de portafolios foron desactivadas automaticamente';
$string['instancedeleted'] = 'O portafolios foi eliminado correctamente';
$string['instanceismisconfigured'] = 'A instancia de portafolios está mal configurada e foi omitida. O erro foi: {$a}';
$string['instancenotdelete'] = 'Produciuse un fallo ao eliminar o portafolios';
$string['instancenotsaved'] = 'Produciuse un fallo ao gardar o portafolios';
$string['instancesaved'] = 'O portafolios foi gardado correctamente';
$string['intro'] = 'O contido que creou vostede, como os envíos de tarefas, publicacións no foro e entradas no blog, poden exportarse cara un portafolios ou descargarse.<br>
Calquera portafolios que non queira usar pode agocharse, para que non apareza na lista como unha opción á que exportar contidos.';
$string['invalidaddformat'] = 'Formato de engadido incorrecto pasado a «portfolio_add_button». ({$a}) Debe ser un de «PORTFOLIO_ADD_XXX»';
$string['invalidbuttonproperty'] = 'Non foi posíbel atopara esa propiedade ({$a}) de «portfolio_button»';
$string['invalidconfigproperty'] = 'Non foi posíbel atopara esa propiedade da configuración ({$a->property} de {$a->class})';
$string['invalidexportproperty'] = 'Non foi posíbel atopara esa propiedade de exportación da configuración ({$a->property} de {$a->class})';
$string['invalidfileareaargs'] = 'Argumentos de área de ficheiro incorrectos pasados a «set_file_and_format_data»; deben conter «contextid», «component», «filearea» e «itemid»';
$string['invalidformat'] = 'Algo está exportando un formato incorrecto, {$a}';
$string['invalidinstance'] = 'Non foi posíbel atopar esta instancia de portafolios';
$string['invalidpreparepackagefile'] = 'Chamada incorrecta a «prepare_package_file»; debe estabelecerse «sinxela» ou «multificheiro»';
$string['invalidproperty'] = 'Non foi posíbel atopara esa propiedade ({$a->property} de {$a->class})';
$string['invalidsha1file'] = 'Chamada incorrecta a «get_sha1_file»; debe estabelecerse «sinxela» ou «multificheiro»';
$string['invalidtempid'] = 'ID de exportación incorrecto: é probábel que teña expirado';
$string['invaliduserproperty'] = 'Non foi posíbel atopara esa propiedade da configuración do usuario ({$a->property} de {$a->class})';
$string['leap2a_emptyselection'] = 'Non foi seleccionado un valor requirido';
$string['leap2a_entryalreadyexists'] = 'Tentou engadir unha entrada Leap2A cun id ({$a}) que xa existe nesta fonte';
$string['leap2a_feedtitle'] = 'Exportación Leap2A dende Moodle para {$a}';
$string['leap2a_filecontent'] = 'Tentou poñer o contido dunha entrada Leap2A nun ficheiro, no canto de empregar a subclase';
$string['leap2a_invalidentryfield'] = 'Tentou configurar un campo de entrada que non existía ({$a}) ou non o pode configurar directamente';
$string['leap2a_invalidentryid'] = 'Tentou acceder a unha entrada cun ID que non existe ({$a})';
$string['leap2a_missingfield'] = 'Falta o campo de entrada Leap2A requirido {$a}';
$string['leap2a_nonexistantlink'] = 'Unha entrada Leap2A  ({$a->from}) tentou ligarse a una entrada non existente ({$a->to}) con rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Sobrescribindo o tipo orixinal dunha entrada ({$a}) á selección en «make_selection»';
$string['leap2a_selflink'] = 'Unha entrada Leap2A ({$a->id}) tentou ligarse a si mesma con rel {$a->rel}';
$string['logs'] = 'Rexistros das transferencias';
$string['logsummary'] = 'Transferencias anteriores satisfactorias';
$string['manageportfolios'] = 'Administrar os portafolios';
$string['manageyourportfolios'] = 'Administrar os seus portafolios';
$string['mimecheckfail'] = 'O engadido de portafolios {$a->plugin} non admite ese mimetype {$a->mimetype}';
$string['missingcallbackarg'] = 'Falta o argumento callback {$a->arg} para a clase {$a->class}';
$string['moderatedbsizethreshold'] = 'Tamaño «Moderado» da base de datos a transferir';
$string['moderatedbsizethresholddesc'] = 'Número de rexistros na base de datos cos que se considerará que a transferencia leva demasiado tempo';
$string['moderatefilesizethreshold'] = 'Tamaño «Moderado» do ficheiro a transferir';
$string['moderatefilesizethresholddesc'] = 'Limiar do tamaño dos ficheiros a partires do que considerase que levan moito tempo para transferirse';
$string['multipleinstancesdisallowed'] = 'Tentando crear outra instancia dun complemento que foi desactivado en varias ocasións ({$a})';
$string['mustsetcallbackoptions'] = 'Ten que configurar as opcións de retorno (callback) no construtor «portfolio_add_button» ou empregar ol método «set_callback_options»';
$string['noavailableplugins'] = 'Vaites, non hai portafolios dispoñíbeis para ser exportados';
$string['nocallbackclass'] = 'Non foi posíbel atopar a clase «callback» para usala ({$a})';
$string['nocallbackcomponent'] = 'Non foi posíbel atopar o compoñente especificado {$a}.';
$string['nocallbackfile'] = 'Algo está roto dentro do módulo que está tentando exportar; non foi posíbel atopar o ficheiro de portafolios requirido';
$string['noclassbeforeformats'] = 'Ten que configurar a clase «callback» antes de chamar a «set_formats» en «portfolio_button»';
$string['nocommonformats'] = 'Non existen formatos comúns entre os complementos dispoñíbeis e o sitio que chama {$a->location} (admitidos polo chamador  {$a->formats})';
$string['noinstanceyet'] = 'Non foi seleccionado';
$string['nologs'] = 'Non hai rexistros que presentar!';
$string['nomultipleexports'] = 'Vaites, o destino do portafolios ({$a->plugin}) non admite exportacións múltiples de vez. <a href="{$a->link}">Remate primeiro o actual</a> e ténteo de novo';
$string['nonprimative'] = 'Pasouse un valor non primitivo como argumento «callback» a «portfolio_add_button». Non é posíbel continuar. A chave era {$a->key} e o valor era {$a->value}';
$string['nopermissions'] = 'Vaites, non ten os permisos necesarios para exportar ficheiros desta zona';
$string['notexportable'] = 'Vaites, o tipo de contido que está tentando exportar non é exportábel';
$string['notimplemented'] = 'Vaites, está tentando exportar contido nun formato que ainda non está incluído ({$a})';
$string['notyetselected'] = 'Non foi seleccionado';
$string['notyours'] = 'Vostede está tentando retomar unha exportación dun portafolios que non lle pertence.';
$string['nouploaddirectory'] = 'Non foi posíbel crear un directorio temporal para empaquetar os seus datos nel';
$string['off'] = 'Activado mais agochado';
$string['on'] = 'Activado e visíbel';
$string['plugin'] = 'Complemento do portafolios';
$string['plugincouldnotpackage'] = 'Produciuse un erro no empaquetado dos datos para exportar: o error orixinal foi {$a}';
$string['pluginismisconfigured'] = 'O engadido de portafolios está mal configurada e foi omitido. O erro foi: {$a}';
$string['portfolio'] = 'Portafolios';
$string['portfolios'] = 'Portafolios';
$string['privacy:metadata'] = 'O subsistema de portafolios actúa como unha canle, pasando solicitudes de complementos a varios complementos de portafolios.';
$string['privacy:metadata:instance'] = 'Identificador para o portafolios.';
$string['privacy:metadata:instancesummary'] = 'Isto almacena tanto as instancias como as preferencias para os portafolios que o usuario está a usar.';
$string['privacy:metadata:name'] = 'Nome de preferencia';
$string['privacy:metadata:portfolio_log'] = 'Rexistro de transferencias de portafolios (usado para verificar posteriormente os duplicados)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Nome da clase usada para crear a transferencia';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Nome do compoñente responsábel da exportación';
$string['privacy:metadata:portfolio_log:time'] = 'Tempo de transferencia (no caso dunha transferencia en cola este é o momento en que a transferencia real correu, non cando o usuario a iniciou)';
$string['privacy:metadata:portfolio_log:userid'] = 'Usuario que exportou o contido';
$string['privacy:metadata:portfolio_tempdata'] = 'Almacena datos temporais para as exportacións de carteira, limpado por cron após un día';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Exportar datos';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Hora de caducidade deste rexistro';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Se está a usar a instancia de complemento de portafolios';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Usuario que realiza as exportacións';
$string['privacy:metadata:userid'] = 'ID do usuario';
$string['privacy:metadata:value'] = 'Valor para a preferencia.';
$string['privacy:path'] = 'Instancias de portafolios';
$string['queuesummary'] = 'Transferencias actualmente na cola';
$string['returntowhereyouwere'] = 'Volver ao lugar anterior';
$string['save'] = 'Gardar';
$string['selectedformat'] = 'Seleccionar o formato de exportación';
$string['selectedwait'] = 'Seleccionar agardar?';
$string['selectplugin'] = 'Seleccione o destino';
$string['showhide'] = 'Amosar / agochar';
$string['singleinstancenomultiallowed'] = 'Só está dispoñíbel unha instancia do engadido de portafolios e non admite realizar múltiples exportacións por sesión, e agora mesmo hai unha exportación activa na sesión usando este engadido';
$string['somepluginsdisabled'] = 'Algúns complementos de portafolios foron desactivados por estaren mal configurados ou teren as seguintes dependencias mal configuradas:';
$string['sure'] = 'Confirma que quere eliminar «{$a}»? Esta acción no se poderá desfacer.';
$string['thirdpartyexception'] = 'Produciuse unha excepción dun terceiro durante a exportación do portafolios ({$a}). Foi atrapado e volveu facelo, mais isto debe arranxarse.';
$string['transfertime'] = 'Tempo da transferencia';
$string['unknownplugin'] = 'Descoñecido (probabelmente teña sido eliminado polo administrador)';
$string['wait'] = 'Agarde';
$string['wanttowait_high'] = 'Non se recomenda que agarde ata que se complete esta transferencia, mais pode facelo se realmente está seguro e sabe o que está a facer';
$string['wanttowait_moderate'] = 'Quere agardar por esta transferencia? Pode levar varios minutos';
