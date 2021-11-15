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
 * Strings for component 'lti', language 'gl', version '3.11'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar';
$string['accept_grades'] = 'Aceptar cualificacións dende a ferramenta';
$string['accept_grades_admin'] = 'Aceptar cualificacións dende a ferramenta';
$string['accept_grades_admin_help'] = 'Especificar cando o fornecedor da ferramenta pode engadir, actualizar, ler e eliminar cualificacións asociadas con instancias deste tipo de ferramenta.

Algúns fornecedores da ferramenta teñen a posibilidade de devolver información de cualificacións a Moodle baseadas en acción tomadas coa ferramenta, creando así
unha experiencia máis integrada.';
$string['accept_grades_help'] = 'Especifique cando o fornecedor da ferramenta pode engadir, actualizar, ler e eliminar cualificacións asociadas soamente coa instancia desta ferramenta externa.

Algúns dos fornecedores da ferramenta teñen a posibilidade de devolver a Moodle cualificacións baseadas en acción tomadas coa ferramenta, creando así unha experiencia máis integrada.

Vexa que este axuste pode sobrescribirse na configuración da ferramenta.';
$string['accepted'] = 'Aceptado';
$string['action'] = 'Acción';
$string['activate'] = 'Activar';
$string['activatetoadddescription'] = 'Precisa activar esta ferramenta antes de que poida engadir unha descrición.';
$string['active'] = 'Activa';
$string['activity'] = 'Actividade';
$string['add_ltiadv'] = 'Engadir LTI Advantage';
$string['add_ltilegacy'] = 'Engadir Legacy LTI';
$string['addnewapp'] = 'Activar a aplicación externa';
$string['addserver'] = 'Engadir un novo servidor de confianza';
$string['addtype'] = 'Engadir unha ferramenta preconfigurada';
$string['allow'] = 'Permitir';
$string['allowsetting'] = 'Permitirlle á ferramenta gardar 8K de axustes dentro de Moodle.';
$string['always'] = 'Sempre';
$string['autoaddtype'] = 'Engadir ferramenta';
$string['automatic'] = 'Automática, baseada no URL da ferramenta';
$string['baseurl'] = 'Nome do/a URL/ferramenta base de rexistro';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Cadea base de LTI OAuth';
$string['basiclti_endpoint'] = 'Punto de remate do inicio LTI';
$string['basiclti_in_new_window'] = 'A súa actividade abriuse nunha nova xanela';
$string['basiclti_in_new_window_open'] = 'Abrir nunha nova xanela';
$string['basiclti_parameters'] = 'Parámetros do inicio LTI';
$string['basicltiactivities'] = 'Actividades LTI';
$string['basicltifieldset'] = 'Campo personalizado de exemplo';
$string['basicltiintro'] = 'Descrición da actividade';
$string['basicltiname'] = 'Nome da actividade';
$string['basicltisettings'] = 'Axustes de interoperabilidade da Ferramenta básica de aprendizaxe';
$string['cachedef_keyset'] = 'Almacena na caché a información do xogo de chaves das ferramentas';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'Vostede non pode eliminar a configuración desta ferramenta';
$string['cannot_edit'] = 'Vostede non pode editar a configuración desta ferramenta';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Seleccione aquelas capacidades que Vostede quere ofrecerlle ao provedor da ferramenta. Pode seleccionarse máis dunha capacidade.';
$string['capabilitiesrequired'] = 'Esta ferramenta necesita acceso aos datos seguintes para activarse:';
$string['cleanaccesstokens'] = 'Eliminación de ferramentas externas de testemuño de acceso caducados';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Prema para continuar</a>';
$string['clientidadmin'] = 'ID do cliente';
$string['clientidadmin_help'] = 'O ID de cliente é un valor único empregado para identificar unha ferramenta. Créase automaticamente para cada ferramenta que usa o perfil de seguridade JWT introducido en LTI 1.3 e debe formar parte dos detalles transmitidos ao fornecedor da ferramenta para que poida configurar a conexión no seu extremo.';
$string['comment'] = 'Comentario';
$string['configpassword'] = 'Contrasinal predeterminado da ferramenta remota';
$string['configpreferheight'] = 'Altura predeterminada preferida';
$string['configpreferwidget'] = 'Estabelecer o inicie predeterminado do trebello';
$string['configpreferwidth'] = 'Largura predeterminada preferida';
$string['configresourceurl'] = 'Recurso URL predeterminado';
$string['configtoolurl'] = 'URL da ferramenta remota personalizada';
$string['configtypes'] = 'Activar as aplicacións LTI';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = 'Confirma que quere activar esta ferramenta?';
$string['contentitem'] = 'Contido-Mensaxe do elemento';
$string['contentitem_deeplinking'] = 'Admite ligazón profunda (mensaxe de elemento de contido)';
$string['contentitem_deeplinking_help'] = 'Se está marcada, a opción «Seleccionar contido» estará dispoñíbel ao engadir unha ferramenta externa.';
$string['contentitem_help'] = 'Se está marcada, a opción «Seleccionar contido» estará dispoñíbel ao engadir unha ferramenta externa.';
$string['contentitem_multiple_description'] = 'Os seguintes elementos engadiranse ao seu curso:';
$string['contentitem_multiple_graded'] = 'Actividade cualificada (nota máxima: {$a})';
$string['course_tool_types'] = 'Ferramentas do curso';
$string['courseactivitiesorresources'] = 'Actividades ou recursos do curso';
$string['courseid'] = 'Número ID do curso';
$string['courseinformation'] = 'Información sobre o curso';
$string['courselink'] = 'Ir ao curso';
$string['coursemisconf'] = 'O curso non está configurado';
$string['createdon'] = 'Creado en';
$string['curllibrarymissing'] = 'Para usar LTI debe estar instalada a biblioteca cURL de PHP';
$string['custom'] = 'Parámetros personalizados';
$string['custom_config'] = 'Usando unha configuración de ferramenta personalizada';
$string['custom_help'] = 'Os parámetros personalizados son os axustes utilizados polo fornecedor da ferramenta. Por exemplo, un parámetro personalizado pódese usar para
presentar un recurso específico do fornecedor. Cada parámetro deberá escribirse nunha líña separada usando un formato de «nome=valor»; por exemplo, «chapter=3».

É seguro deixar estes campo sen cambios a non ser que diga outra cousa o fornecedor da ferramenta.';
$string['custominstr'] = 'Parámetros personalizados';
$string['debuglaunch'] = 'Opción de depuración';
$string['debuglaunchoff'] = 'Inicio normal';
$string['debuglaunchon'] = 'Depurar o inicio';
$string['default'] = 'Predeterminado';
$string['default_launch_container'] = 'Contedor predeterminado de inicio.';
$string['default_launch_container_help'] = 'O contedor de inicio afecta á visualización da ferramenta cando se inicia dende o curso.
Algúns contedores de inicio proporcionan máis información en pantalla do estado real da ferramenta, e outros ofrecen unha sensación máis integrada co contorno Moodle.

* **Predeterminado** - Utilice o contedor de inicio especificado pola ferramenta de configuración.
* **Incrustar** - A ferramenta aparece dentro da xanela existente de Moodle, dun modo semellante aos demais tipos de actividades.
* **Incrustar, sen bloques** - A ferramenta aparece dentro da xanela existente de Moodle, só cos controis de navegación
        na parte superior da páxina.
* ** Nova xanela** - A ferramenta ábrese nunha nova xanela, ocupando todo o espazo dispoñíbel.
        Dependendo do seu navegador, abrirase nunha nova lapela ou nunha xanela emerxente.
        É posíbel que algún dos navegadores impida a apertura da nova xanela.';
$string['delegate'] = 'Delegar no profesor';
$string['delegate_tool'] = 'Como se especifica na definición de ligazón profunda ou Delegar no profesor';
$string['delete'] = 'Eliminar';
$string['delete_confirmation'] = 'Confirma que quere eliminar esta ferramenta preconfigurada?';
$string['deletetype'] = 'Eliminar a ferramenta preconfigurada';
$string['display_description'] = 'Presentar a descrición da actividade cando se inicie';
$string['display_description_help'] = 'De seleccionarse, a descrición da actividade (especificada antes) presentarase por riba do contido dos provedores da ferramenta.

A descrición pode usarse para proporcionar instrucións adicionais para os que inician a ferramenta mais non é requirida.

A descrición non se amosa nunca cando o contedor da ferramenta está nunha xanela nova.';
$string['display_name'] = 'Presentar o nome da actividade ao iniciarse';
$string['display_name_help'] = 'De seleccionarse, o nome da actividade (especificado antes) presentarase por riba do contido da ferramenta dos fornecedores.

É posíbel que a ferramenta dos fornecedores tamén poida presentar o título. Esta opción pode evitar que o título da actividade
apareza dúas veces.

O título nunca se presenta cando o contedor de inicio está nunha nova xanela.';
$string['domain_mismatch'] = 'O inicio dos URL do dominio non coincide coa configuración da ferramenta.';
$string['donot'] = 'Non enviar';
$string['donotaccept'] = 'Non aceptar';
$string['donotallow'] = 'Non permitir';
$string['duplicateregurl'] = 'Este URL de rexistro xa está en uso';
$string['dynreg_update_btn_new'] = 'Rexistrar como unha nova ferramenta externa';
$string['dynreg_update_btn_update'] = 'Actualizar';
$string['dynreg_update_name'] = 'Nome da ferramenta';
$string['dynreg_update_notools'] = 'Non hai ferramentas no contexto.';
$string['dynreg_update_text'] = 'Hai ferramentas existentes anexadas ao dominio do rexistro. Quere actualizar unha ferramenta
externa xa instalada ou crear unha nova ferramenta externa?';
$string['dynreg_update_url'] = 'URL Base';
$string['dynreg_update_version'] = 'Versión LTI';
$string['dynreg_update_warn_dupdomain'] = 'Non é recomendábel ter varias ferramentas externas no mesmo dominio.';
$string['editdescription'] = 'Prema aquí para facer unha descrición a esta ferramenta';
$string['edittype'] = 'Editar a ferramenta preconfigurada';
$string['embed'] = 'Incorporado';
$string['embed_no_blocks'] = 'Incorporado, sen bloques';
$string['enableemailnotification'] = 'Enviar correos de notificación';
$string['enableemailnotification_help'] = 'De estar activado, os alumnos recibirán unha notificación por correo cando a súa ferramenta de entregas reciba cualificación.';
$string['enterkeyandsecret'] = 'Escriba a súa chave de consumidor e o segredo compartido';
$string['enterkeyandsecret_help'] = 'Se recibiu unha chave de consumidor e/ou un segredo compartido, introdúzao aquí';
$string['errorbadurl'] = 'O URL non é un URL correcto de ferramenta ou cartucho.';
$string['errorincorrectconsumerkey'] = 'A chave de consumidor é incorrecta.';
$string['errorinvaliddata'] = 'Datos incorrectos: {$a}';
$string['errorinvalidmediatype'] = 'Tipo de medio incorrecto: {$a}';
$string['errorinvalidresponseformat'] = 'Contido non válido-Formato de resposta do elemento.';
$string['errormisconfig'] = 'Ferramenta desconfigurada. Pregúntelle ao seu administrador para arranxar a configuración da ferramenta.';
$string['errortooltypenotfound'] = 'Non se atopou o tipo de ferramenta LTI.';
$string['existing_window'] = 'Xanela existente';
$string['extensions'] = 'Servizos de extensión LTI';
$string['external_tool_type'] = 'Ferramenta preconfigurada';
$string['external_tool_type_help'] = '* ** Automático, baseado no URL da ferramenta ** - A mellor configuración de ferramenta é seleccionada automaticamente. Se o URL da ferramenta non se recoñece, é posíbel que deba introducir os detalles da configuración da ferramenta manualmente.
* ** Unha ferramenta preconfigurada específica **: a configuración da ferramenta especificada será utilizada cando se comunique co provedor de ferramenta externa. Se o URL da ferramenta non parece pertencer ao fornecedor da ferramenta, amosarase unha advertencia. Non sempre é necesario introducir un URL de ferramenta.
* ** Configuración personalizada **: pode ser necesario ingresar manualmente unha chave de consumidor e un segredo compartido. A chave do consumidor e o segredo compartido poden obterse do fornecedor da ferramenta. Non obstante, non todas as ferramentas requiren unha chave de consumidor e segredos compartidos, nese caso os campos poden quedar en branco.

### Edición de ferramentas preconfiguradas

Están dispoñíbeis tres iconas após o menú despregábel da ferramenta preconfigurada:

* ** Engadir ** - Crear unha configuración de ferramenta de nivel de curso. Todas as instancias de ferramentas externas neste curso poden usar a configuración da ferramenta.
* ** Editar ** - Seleccione unha ferramenta de nivel de curso no menú despregábel e prema nesta icona. Poden editarse os detalles da configuración da ferramenta.
* ** Eliminar ** - Retirar a ferramenta de nivel de curso seleccionada.';
$string['external_tool_types'] = 'Ferramentas preconfiguradas';
$string['failedtoconnect'] = 'Moodle non foi quen de comunicarse co sistema «{$a}»';
$string['failedtocreatetooltype'] = 'Produciuse un fallo ao crear a ferramenta nova. Revise o URL e ténteo de novo.';
$string['failedtodeletetoolproxy'] = 'Non foi posíbel eliminar o rexistro da ferramenta. É probábel que precise visitar «Administrar os rexistros da ferramenta externa» e eliminalo manualmente.';
$string['filter_basiclti_configlink'] = 'Configurar os seus sitios preferidos e os seus contrasinais';
$string['filter_basiclti_password'] = 'O contrasinal é obrigatorio';
$string['filterconfig'] = 'Administración da LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Usar unha configuración existente para a instancia mal configurada';
$string['fixnew'] = 'Nova configuración';
$string['fixnewconf'] = 'Definir unha nova configuración para a instancia mal configurada';
$string['fixold'] = 'Usar a existente';
$string['force_ssl'] = 'Forzar SSL';
$string['force_ssl_help'] = 'Seleccionando esta opción forza que todos os inicios deste provedor empreguen SSL.

Ademais, todas as solicitudes de servizos Web dende o provedor da ferramenta empregarán SSL.

Se utiliza esta opción, asegúrese de que o seu sitio Moodle e o provedor da ferramenta son compatíbeis con SSL';
$string['forced_help'] = 'Este axuste foi forzado nun curso ou a nivel do sitio na configuración da ferramenta. Vostede non pode cambialo dende esta interface.';
$string['generaltool'] = 'Ferramental xeral';
$string['global_tool_types'] = 'Ferramentas preconfiguradas globais';
$string['grading'] = 'Rutas de cualificación';
$string['icon_url'] = 'URL da icona';
$string['icon_url_help'] = 'O URL da icona permite modificar a icona que se amosa na lista de cursos para esta actividade. En troques da icona LTI
pódese especificar unha icona axeitada ao tipo de actividade.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está baseado na profundidade cognitiva acadada polo alumno nunha actividade LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante acadou esta porcentaxe do compromiso cognitivo que ofrecen as actividades LTI durante este intervalo de análise (Niveis = Sen vista, Ver, Entregar, Ver comentarios)';
$string['indicator:cognitivedepthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Profundidade_cognitiva';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Este indicador está baseado na amplitude social acadada polo alumno nunha actividade LTI.';
$string['indicator:socialbreadthdef'] = 'LTI social';
$string['indicator:socialbreadthdef_help'] = 'O participante acadou esta porcentaxe do compromiso social que ofrecen as actividades LTI durante este intervalo de análise (Niveis = Sen participación, Participante en solitario, Participante con outros)';
$string['indicator:socialbreadthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Amplitude_social';
$string['initiatelogin'] = 'URL de acceso inicial';
$string['initiatelogin_help'] = 'O URL da ferramenta á que se deben enviar as solicitudes para iniciar un acceso. Este URL é necesario antes de que unha mensaxe poida enviarse satisfactoriamente á ferramenta.';
$string['invalidid'] = 'O ID da LTI era incorrecto';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Tipo de chave pública';
$string['keytype_help'] = 'O método de autenticación empregado para validar a ferramenta.';
$string['keytype_keyset'] = 'URL do conxunto de chaves';
$string['keytype_rsa'] = 'Chave RSA';
$string['launch_in_moodle'] = 'Iniciar a ferramenta no Moodle';
$string['launch_in_popup'] = 'Iniciar a ferramenta nunha xanela emerxente';
$string['launch_url'] = 'URL da ferramenta';
$string['launch_url_help'] = 'O URL de ferramenta indica o enderezo web da Ferramenta externa e pode conter información adicional.
Se non ten certeza de que ruta introducir, consulte co provedor da mesma para obter máis información.

Pode introducir un URL de cartucho se ten un e o resto dos detalles do formulario completarase automaticamente.

Se seleccionou unha ferramenta preconfigurada, é probábel que non sexa necesario especificar un URL de ferramenta. Se a ligazón
se utiliza só para poñer en funcionamento o sistema do provedor e non para ir a un recurso específico, é probábel que isto sexa así.';
$string['launchinpopup'] = 'Iniciar o contedor';
$string['launchinpopup_help'] = 'O contedor de inicio afecta á visualización da ferramenta cando se inicia dende o curso.
Algúns contedores de inicio proporcionan máis información en pantalla do estado real da ferramenta, e outros ofrecen unha sensación máis integrada co contorno Moodle.

* **Predeterminado** - Utilice o contedor de inicio especificado pola ferramenta de configuración.
* **Incrustado** - A ferramenta aparece dentro da xanela existente de Moodle, dun modo semellante aos demais tipos de actividades.
* **Incrustado, sen bloques** - A ferramenta aparece dentro da xanela existente de Moodle, só cos controis de navegación
        na parte superior da páxina.
* ** Nova xanela** - A ferramenta ábrese nunha nova xanela, ocupando todo o espazo dispoñíbel.
        Dependendo do seu navegador, abrirase nunha nova lapela ou nunha xanela emerxente.
        É posíbel que algún dos navegadores impida a apertura da nova xanela.';
$string['launchoptions'] = 'Opcións de inicio';
$string['leaveblank'] = 'Déixeo baleiro se non o precisa';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Engadir configuracións de ferramenta específica do curso';
$string['lti:addinstance'] = 'Engadir novas actividades de ferramenta externa';
$string['lti:addmanualinstance'] = 'Engadir unha ferramenta configurada manualmente';
$string['lti:addpreconfiguredinstance'] = 'Engade unha ferramenta preconfigurada';
$string['lti:admin'] = 'Ser un administrador cando se inicie a ferramenta';
$string['lti:grade'] = 'Ver as cualificacións devolvidas pola ferramenta externa';
$string['lti:manage'] = 'Ser un instrutor cando se inicie a ferramenta';
$string['lti:requesttooladd'] = 'Solicitar que unha ferramenta estea configurada para todo o sitio';
$string['lti:view'] = 'Iniciar actividades de ferramenta externa';
$string['lti_administration'] = 'Editar a ferramenta preconfigurada';
$string['lti_errormsg'] = 'A ferramenta devolveu a seguinte mensaxe de erro: «{$a}»';
$string['lti_launch_error'] = 'Produciuse un erro ao iniciar a ferramenta externa:';
$string['lti_launch_error_tool_request'] = '<p>
Para enviar unha solicitude a de que un administrador complete a configuración da ferramenta, prema <a href="{$a->admin_request_url}" target="_top">aquí</a>.
</p>';
$string['lti_launch_error_unsigned_help'] = '<p>Este erro pode ser o resultado da falta dunha chave de cliente e un segredo compartida, para o provedor da ferramenta.</p>
<p>Se vostede ten unha chave de cliente e un segredo compartida, debe fornecelos ao editar a instancia da ferramenta externa (asegúrese de que estean visíbeis as opcións avanzadas).</p>
<p>Pode tamén <a href="{$a->course_tool_editor}">crear unha configuración para o provedor da ferramenta a nivel de curso</a>. </p>';
$string['lti_tool_request_added'] = 'A solicitude de configuración da ferramenta enviouse correctamente. Poida que necesite contactar cun administrador para completar a configuración da ferramenta.';
$string['lti_tool_request_existing'] = 'Xa se entregou unha configuración da ferramenta no dominio da ferramenta.';
$string['ltisettings'] = 'Axustes LTI';
$string['ltiunknownserviceapicall'] = 'Chamada API a servizo LTI descoñecido.';
$string['ltiversion'] = 'Versión de LTI';
$string['ltiversion_help'] = 'A versión de LTI que se usa para asinar mensaxes e solicitudes de servizo: LTI 1.0/1.1 e LTI 2.0 usan o perfil de seguridade OAuth 1.0A; LTI 1.3.0 usa JWT';
$string['main_admin'] = 'Axuda xeral';
$string['main_admin_help'] = 'As ferramentas externas permiten que os usuarios de Moodle interactúen directamente con recursos educativos aloxados en servidores externos. Mediante un protocolo especial de inicio a ferramenta externa ten acceso a información xeral do usuario que a inicia. Por exemplo, o nome da institución, o ID do curso o ID do usuario e outra información como o nome ou o enderezo de correo-e do usuario.

As ferramentas enumeradas nesta páxina están separadas en tres categorías:

* **Activo** - Estes provedores de ferramentas foron aprobados e configurados por un administrador. Poden ser utilizadas dende calquera curso deste sitio. Se introduce unha chave de cliente e un segredo compartido, estabelecese unha comunicación segura.
* **Pendente** - Estes provedores de ferramentas obtivéronse pola importación de paquetes, mais non foron configurados por un administrador. Os profesores poden seguir utilizando as ferramentas destes provedores se dispoñen dunha chave de cliente e dun segredo compartido ou se non se require ningunha.
* **Rexeitado** - Estes provedores de ferramentas están marcados como aqueles que un administrador no ten intención de poñer ao dispor do sitio. Os profesores poden seguir utilizando as ferramentas destes provedores se dispoñen dunha chave de cliente e dun segredo compartido ou se non se require ningunha.';
$string['manage_external_tools'] = 'Xestionar as ferramentas';
$string['manage_tool_proxies'] = 'Administrar os rexistros da ferramenta externa';
$string['manage_tools'] = 'Administrar os tipos da ferramenta externa';
$string['manuallyaddtype'] = 'De xeito alternativo, pode <a href="{$a}">configurar unha ferramenta manualmente</a>';
$string['miscellaneous'] = 'Varios';
$string['misconfiguredtools'] = 'Detectáronse instancias de ferramentas mal configuradas';
$string['missingparameterserror'] = 'A páxina está mal configurada: «{$a}»';
$string['module_class_type'] = 'Tipo de módulo Moodle';
$string['modulename'] = 'LTI';
$string['modulename_help'] = 'O módulo de actividade da ferramenta externa permítelle aos alumnos interactuar con recursos educativos e actividades aloxadas noutros sitios de internet. Por exemplo, unha ferramenta externa podería fornecer acceso a un novo tipo de actividade ou de materiais educativos dunha editorial.

Para crear unha actividade de ferramenta externa requírese dun provedor de ferramenta que admita LTI (Learning Tools Interoperability - Interoperatividade de ferramenta de aprendizaxe). Un profesor pode crear unha actividade de ferramenta externa ou facer uso dunha ferramenta configurada polo administrador do sitio.

As ferramentas externas difiren dos recursos URL en varias formas:

* As ferramentas externas son sensíbeis ao contexto, é dicir,  teñen acceso a información sobre o usuario que iniciou a ferramenta, como a institución, o curso e o nome
* As ferramentas externas permiten ler, actualizar e eliminar cualificacións asociadas coa instancia da actividade
* As configuracións da ferramenta externa crean unha relación de confianza entre o seu sitio Moodle e o provedor da ferramenta, permitindo a comunicación segura entre ambos';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/personalizada';
$string['modulenameplural'] = 'Ferramentas externas';
$string['modulenamepluralformatted'] = 'Instancias LTI';
$string['name'] = 'Nome';
$string['never'] = 'Nunca';
$string['new_window'] = 'Nova xanela';
$string['no_lti_configured'] = 'Non hai ferramentas externas activas configuradas.';
$string['no_lti_pending'] = 'Non hai ferramentas externas pendentes.';
$string['no_lti_rejected'] = 'Non hai ferramentas externas rexeitadas.';
$string['no_lti_tools'] = 'Non hai ferramentas externas configuradas.';
$string['no_tp_accepted'] = 'Non hai rexistros aceptados de ferramentas externas.';
$string['no_tp_cancelled'] = 'Non hai rexistros cancelados de ferramentas externas.';
$string['no_tp_configured'] = 'Non hai rexistros de ferramentas externas non rexistradas e configuradas.';
$string['no_tp_pending'] = 'Non hai rexistros pendentes de ferramentas externas.';
$string['no_tp_rejected'] = 'Non hai rexistros pendentes de ferramentas externas.';
$string['noattempts'] = 'Non se realizou ningún intento nesta instancia da ferramenta';
$string['noltis'] = 'Non hai instancias de ferramenta externa';
$string['noprofileservice'] = 'No se atopou o servizo de perfil';
$string['noservers'] = 'Non se atoparon servidores';
$string['notypes'] = 'Actualmente non hai ferramentas LTI configuradas no Moodle. Prema na ligazón para Instalar (arriba) para engadir algunha.';
$string['noviewusers'] = 'Non se atoparon usuarios con permisos para empregar esta ferramenta';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 require un openssl.cnf válido para ser configurado e dispoñíbel para o servidor web. Póñase en contacto co administrador do sitio para configurar e activar openssl para este sitio.';
$string['optionalsettings'] = 'Axustes opcionais';
$string['organization'] = 'Detalles da organización';
$string['organizationdescr'] = 'Descrición da organización';
$string['organizationid'] = 'ID da organización';
$string['organizationid_default'] = 'ID de organización predeterminado';
$string['organizationid_default_help'] = 'O valor predeterminado que se usará para o ID da organización. A identificación do sitio identifica esta instalación de Moodle.';
$string['organizationid_help'] = 'Un identificador único para esta instancia de Moodle. Tipicamente, empregase o nome DNS da organización.

Se deixa este campo en branco, usarase como nome predeterminado o nome da máquina deste sitio Moodle.';
$string['organizationidguid'] = 'ID da organización';
$string['organizationidguid_help'] = 'Un identificador único para esta instancia de Moodle pasado á ferramenta como GUID (Identificador Único Global) da instancia de plataforma.

 Se se deixa este campo en branco, usarase o valor predeterminado.';
$string['organizationurl'] = 'URL da organización';
$string['organizationurl_help'] = 'O URL base desta instancia Moodle.

Se deixa este campo en branco, usarase un valor predeterminado baseado na configuración do sitio.';
$string['pagesize'] = 'Entregas amosadas por páxina';
$string['parameter'] = 'Parámetros da ferramenta';
$string['parameter_help'] = 'Os parámetros da ferramenta son axustes solicitados que serán pasados polo fornecedor da ferramenta no proxy aceptado da ferramenta.';
$string['password'] = 'Segredo compartido';
$string['password_admin'] = 'Segredo compartido';
$string['password_admin_help'] = 'O segredo compartido pode interpretarse como un contrasinal para autenticar o acceso á ferramenta. Debe fornecerse
xunto coa chave de cliente ao provedor da ferramenta.

Aquelas ferramentas que non requiran unha comunicación segura con Moodle e que non fornezan servizos adicionais
(como o informe de cualificacións) é probábel que non requiran un segredo compartido.';
$string['password_help'] = 'Para as ferramentas preconfiguradas, non é necesario introducir aquí un segredo compartido, xa que o segredo compartido
formará parte do proceso de configuración.

Deberemos encher este campo se creamos unha ligazón cara ao provedor dunha ferramenta que non estea configurada previamente.
Se se emprega máis dunha vez, durante o curso, este provedor da ferramenta, é boa idea engadir unha configuración da ferramenta.

O segredo compartido pode interpretarse como un contrasinal para autenticar o acceso á ferramenta. Debe fornecerse
xunto coa chave de cliente ao provedor da ferramenta.

Aquelas ferramentas que non requiran unha comunicación segura con Moodle e que non fornezan servizos adicionais
(como o informe de cualificacións) é probábel que non requiran un segredo compartido.';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administración da ferramenta externa';
$string['pluginname'] = 'Ferramenta externa';
$string['preferheight'] = 'Alto preferido';
$string['preferwidget'] = 'Iniciador de trebello preferido';
$string['preferwidth'] = 'Largo preferido';
$string['press_to_submit'] = 'Prema para iniciar esta actividade';
$string['privacy'] = 'Privacidade';
$string['privacy:metadata:coursefullname'] = 'O nome completo do curso dende o que o usuario está accedendo ao Consumidor LTI';
$string['privacy:metadata:courseid'] = 'O ID do curso dende o que o usuario está accedendo ao Consumidor LTI';
$string['privacy:metadata:courseidnumber'] = 'O número ID do curso dende o que o usuario está accedendo ao Consumidor LTI';
$string['privacy:metadata:courseshortname'] = 'O nome abreviado do curso dende o que o usuario está accedendo ao Consumidor LTI';
$string['privacy:metadata:createdby'] = 'O usuario que creou o rexistro';
$string['privacy:metadata:email'] = 'O enderezo de correo do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:externalpurpose'] = 'O Consumidor LTI fornece información e contexto do usuario ao provedor de ferramentas LTI.';
$string['privacy:metadata:firstname'] = 'O nome do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:fullname'] = 'O nome completo do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:lastname'] = 'O(s) apelido(s) do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:lti_submission'] = 'Entrega LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'A marca de tempo indicando cando se realizou a entrega';
$string['privacy:metadata:lti_submission:dateupdated'] = 'A marca de tempo indicando cando se modificou a entrega';
$string['privacy:metadata:lti_submission:gradepercent'] = 'A cualificación para o usuario como porcentaxe';
$string['privacy:metadata:lti_submission:originalgrade'] = 'A cualificación orixinal para o usuario';
$string['privacy:metadata:lti_submission:userid'] = 'O ID do usuario que enviou a actividade LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxies LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nome do proxy LTI';
$string['privacy:metadata:lti_types'] = 'Tipos LTI';
$string['privacy:metadata:lti_types:name'] = 'Nome do tipo LTI';
$string['privacy:metadata:role'] = 'O rol no curso do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:timecreated'] = 'A data na que se creou o rexistro';
$string['privacy:metadata:timemodified'] = 'A data na que se modificou o rexistro';
$string['privacy:metadata:userid'] = 'O ID do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:useridnumber'] = 'O número ID do usuario que está accedendo ao Consumidor LTI';
$string['privacy:metadata:username'] = 'O nome de usuario do usuario que está accedendo ao Consumidor LTI';
$string['publickey'] = 'Chave pública';
$string['publickey_help'] = 'A chave pública (en formato PEM) fornecida pola ferramenta para permitir a verificación de firmas de mensaxes entrantes e solicitudes de servizo.';
$string['publickeyset'] = 'Conxunto de chaves públicas';
$string['publickeyset_help'] = 'Conxunto de chaves públicas dende onde obterá este sitio a chave pública da ferramenta para permitir a verificación de sinaturas de mensaxes entrantes e solicitudes de servizo.';
$string['quickgrade'] = 'Permitir a cualificación rápida';
$string['quickgrade_help'] = 'Se está activado, poden ser cualificadas varias ferramentas nunha páxina. Engada as cualificacións e comentarios e prema no botón «Gardar todos os meus comentarios» para gardar todos os cambios desa páxina.';
$string['redirect'] = 'Vostede vai ser redirixido nuns segundos. Se non for así, prema no botón.';
$string['redirectionuris'] = 'URI(s) de redirección';
$string['redirectionuris_help'] = 'Unha lista de URI (un por liña) que utiliza a ferramenta para realizar solicitudes de autorización. Polo menos un debe rexistrarse antes de que unha mensaxe poida enviarse satisfactoriamente á ferramenta.';
$string['register'] = 'Rexistrar';
$string['register_warning'] = 'Semmela que á páxina de rexistro lévalle moito abrirse. Se non aparecera, revise que teña escrito ben o URL correcto nos axustes das configuracións. Se Moodle está a usar https, asegúrese de que a ferramenta que está a configurar é compatíbel con https e está a usar https no URL.';
$string['registertype'] = 'Configurar un novo rexistro de ferramenta externa';
$string['registration_options'] = 'Opcións do rexistro';
$string['registrationname'] = 'Nome do provedor da ferramenta';
$string['registrationname_help'] = 'Escriba o nome do provedor da ferramenta que está a rexistrar.';
$string['registrationurl'] = 'URL de rexistro';
$string['registrationurl_help'] = 'O URL para o rexistro debería estar dispoñíbel dende o provedor da ferramenta como o lugar cara a onde deberían enviarse as solicitudes de rexistro.';
$string['reject'] = 'Rexeitar';
$string['rejected'] = 'Rexeitado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Chave de cliente';
$string['resourcekey_admin'] = 'Chave de cliente';
$string['resourcekey_admin_help'] = 'A chave de cliente pode interpretarse como un nome de usuario para autenticar o acceso á ferramenta.
Pode ser usado polo provedor da ferramenta para identificar inequivocamente o sitio Moodle no que os usuarios inician a ferramenta.

A chave de cliente debe ser fornecida polo provedor da ferramenta. O método para obter a chave de cliente varía entre
os provedores de ferramentas. Pode ser un procedemento automatizado, ou pode requirir un diálogo co provedor da ferramenta.

Aquelas ferramentas que non requiran unha comunicación segura con Moodle e que non fornezan servizos adicionais
(como o informe de cualificacións) é probábel que non requiran unha chave para o recurso.';
$string['resourcekey_help'] = 'Para as ferramentas preconfiguradas, non é necesario introducir aquí unha chave para o recurso, xa que o segredo compartido
formará parte do proceso de configuración.

Deberemos encher este campo se creamos unha ligazón cara ao provedor dunha ferramenta que non estea configurada previamente.
Se se emprega máis dunha vez, durante o curso, este provedor da ferramenta, é boa idea engadir unha configuración da ferramenta.na idea.

A chave de cliente pode interpretarse como un nome de usuario para autenticar o acceso á ferramenta.
Pode ser usado polo provedor da ferramenta para identificar inequivocamente o sitio Moodle no que os usuarios inician a ferramenta.

A chave de cliente debe ser fornecida polo provedor da ferramenta. O método para obter a chave de cliente varía entre os provedores
de ferramentas. Pode ser un procedemento automatizado, ou pode requirir un diálogo co provedor da ferramenta.

Aquelas ferramentas que non requiran unha comunicación segura con Moodle e que non fornezan servizos adicionais
(como o informe de cualificacións) é probábel que non requiran unha chave para o recurso.';
$string['resourceurl'] = 'URL do recurso';
$string['return_to_course'] = 'Prema <a href="{$a->link}" target="_top">aquí</a> para volver ao curso.';
$string['saveallfeedback'] = 'Gardar todos os meus comentarios';
$string['search:activity'] = 'Ferramenta externa, información da actividade';
$string['secure_icon_url'] = 'URL da icona segura';
$string['secure_icon_url_help'] = 'Semellante ao URL da icona, mais empregase cando se accede de xeito seguro a través do SSL. Este campo serve para evitar que o navegador amose unha adevertencia sobre unha imaxe insegura.';
$string['secure_launch_url'] = 'URL seguro de ferramenta';
$string['secure_launch_url_help'] = 'Similar o URL de ferramenta mais usase en troques deste cando se require alta seguridade. Moodle usará o URL seguro de ferramenta en troques do URL de ferramenta cando se acceda ao sitio Moodle mediante SSL, ou se a configuración da ferramenta está definida para que inicie sempre mediante SSL.

O URL de ferramenta tamén pode configurarse cara a un enderezo https para forzar a que se inicie mediante SSL, co que este campo pode deixarse en branco.';
$string['selectcontent'] = 'Seleccionar contido';
$string['send'] = 'Enviar';
$string['services'] = 'Servizos';
$string['services_help'] = 'Seleccione aqueles servizos que Vostede quere ofrecerlle ao provedor da ferramenta. Pode seleccionarse máis dun servizo.';
$string['setupoptions'] = 'Opcións de configuración';
$string['share_email'] = 'Compartir o correo do lanzador coa ferramenta';
$string['share_email_admin'] = 'Compartir o correo do lanzador coa ferramenta';
$string['share_email_admin_help'] = 'Especifique se debe ser compartido o enderezo de correo do usuario que inicia a ferramenta co provedor da ferramenta.
É probábel que o provedor da ferramenta necesite o enderezo de correo de quen a inicia para distinguir usuarios co mesmo
nome na Interface gráfica, ou para enviarlle correos baseados en accións na ferramenta.';
$string['share_email_help'] = 'Especifique se debe ser compartido o enderezo de correo do usuario que inicia a ferramenta co provedor da ferramenta.

É probábel que o provedor da ferramenta necesite o enderezo de correo de quen a inicia para distinguir usuarios co mesmo nome, ou para enviarlle correos baseados en accións na ferramenta.

Observe que este axuste pode anularse na configuración da ferramenta.';
$string['share_name'] = 'Compartir o nome do lanzador coa ferramenta';
$string['share_name_admin'] = 'Compartir o nome do lanzador coa ferramenta';
$string['share_name_admin_help'] = 'Especifique se debe compartido o nome completo do usuario que inicia a ferramenta co provedor da ferramenta.
É probábel que o provedor da ferramenta necesite o nome de quen a inicia para amosar información significativa dentro da ferramenta.';
$string['share_name_help'] = 'Especifique se debe ser compartido o nome completo do usuario que inicia a ferramenta co provedor da ferramenta.

É probábel que o provedor da ferramenta necesite o nome de quen a inicia para amosar información significativa dentro da ferramenta.

Observe que este axuste pode anularse na configuración da ferramenta.';
$string['share_roster'] = 'Permitirlle á ferramenta acceder ao rexistro de usuarios do curso';
$string['share_roster_admin'] = 'A ferramenta pode acceder ao rexistro de usuarios do curso';
$string['share_roster_admin_help'] = 'Especifique se a ferramenta pode acceder á lista de usuarios matriculados nos cursos dende os que se inicia esta ferramenta.';
$string['share_roster_help'] = 'Especifique se a ferramenta pode acceder ou non á lista de usuarios matriculados en cursos dende os que se inicia esta ferramenta.

Observe que este axuste pode anularse na configuración da ferramenta.';
$string['show_in_course_activity_chooser'] = 'Amosar dentro do selector de actividades e como unha ferramenta preconfigurada';
$string['show_in_course_lti1'] = 'Uso da configuración da ferramenta';
$string['show_in_course_lti1_help'] = 'Esta ferramenta pode amosarse no selector de actividades para que un profesor a seleccione para engadila a un curso. Tamén pode amosarse no menú desagregábel de ferramenta preconfigurada ao engadirlle una ferramenta externa ao curso. Así mesmo, a configuración da ferramenta pode non amosarse nos formularios, mais soamente poderá usarse se se introduce o URL lanzador correcto cando se engade unha ferramenta externa a un curso.';
$string['show_in_course_lti2'] = 'Uso da configuración da ferramenta';
$string['show_in_course_lti2_help'] = 'Esta ferramenta pode amosarse no selector de actividades para que un profesor a seleccione para engadila a un curso ou no menú despregábel de ferramenta preconfigurada cando se lle engade unha ferramenta externa a un curso.';
$string['show_in_course_no'] = 'Non amosar, usar soamente cando se introduce unha coincidencia co URL lanzador';
$string['show_in_course_preconfigured'] = 'Amosar como ferramenta preconfigurada ao engadir unha ferramenta externa';
$string['sitehost'] = 'Nome de máquina do sitio';
$string['siteid'] = 'ID do sitio';
$string['size'] = 'Parámetros de tamaño';
$string['submission'] = 'Entrega';
$string['submissions'] = 'Entregas';
$string['submissionsfor'] = 'Entregas para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso de servizo LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos de servizo LTI';
$string['subplugintype_ltiservice'] = 'Servizo LTI';
$string['subplugintype_ltiservice_plural'] = 'Servizos LTI';
$string['subplugintype_ltisource'] = 'Orixe LTI';
$string['subplugintype_ltisource_plural'] = 'Orixes LTI';
$string['successfullycreatedtooltype'] = 'A nova ferramenta creouse satisfactoriamente!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Obtívose satisfactoriamente a configuración da ferramenta dende o contido seleccionado.';
$string['toggle_debug_data'] = 'Activar/Desactivar os datos de depuración';
$string['tool_config_not_found'] = 'Neste URL non se atopou a configuración da ferramenta.';
$string['tool_settings'] = 'Axustes da ferramenta';
$string['tooldescription'] = 'Descrición da ferramenta';
$string['tooldescription_help'] = 'A descrición da ferramenta que será amosada aos profesores na lista de actividades.

Isto debería de describir para que é a ferramenta e que é o que fai, así como calquera información adicional que o profesor podería necesitar saber.';
$string['tooldetailsaccesstokenurl'] = 'URL do testemuño de acceso';
$string['tooldetailsauthrequesturl'] = 'URL de solicitude de autenticación';
$string['tooldetailsclientid'] = 'ID do cliente';
$string['tooldetailsdeploymentid'] = 'ID de despregue';
$string['tooldetailsmailtosubject'] = 'Configuración de ferramenta LTI';
$string['tooldetailsmodalemail'] = 'Correo';
$string['tooldetailsmodallink'] = 'Ver detalles da configuración';
$string['tooldetailsmodaltitle'] = 'Detalles de configuración da ferramenta';
$string['tooldetailsplatformid'] = 'ID da plataforma';
$string['tooldetailspublickeyseturl'] = 'URL de conxunto de chave pública';
$string['toolisbeingused'] = 'Esta ferramenta está a ser usada {$a} veces';
$string['toolisnotbeingused'] = 'Esta ferramenta aínda non foi usada';
$string['toolproxy'] = 'Rexistros da ferramenta externa';
$string['toolproxy_help'] = 'Os rexistros de ferramentas externas permítenlle aos administradores de Moodle configurar ferramentas externas dende un proxy de ferramenta obtido dende un provedor de ferramentas que admita LTI 2.0. Un URL para rexistro fornecido polo provedor da ferramenta é todo o que se necesita para iniciar o proceso. As capacidades e servizos ofrecidos polo provedor da ferramenta son seleccionadas cando se configura un novo rexistro.

Os rexistros de ferramentas listados nesta páxina están separados en catro categorías:

* **Configurado** - Estes rexistros de ferramenta foron configurados, mais o proceso de rexistro aínda non foi iniciado.
* **Pendente** - O proceso de rexistro para estas ferramentas foi iniciado, mais non foi completado. Abra e garde os axustes para movelo de volta á
categoría de «Configurado».
* **Aceptado** - Estes rexistros de ferramentas foron aprobados; os recursos especificados no proxy da ferramenta aparecerán dentro da páxina de tipos
de ferramentas externas cun estado inicial «Pendente».
* **Rexeitado** - Estes rexistros de ferramentas son os que foron rexeitados durante o proceso de rexistro. Abra e peche as configuracións para movelo
de volta á categoría de «Configurado» para que o proceso de rexistro poida ser reiniciado.';
$string['toolproxyregistration'] = 'Rexistro da ferramenta externa';
$string['toolregistration'] = 'Rexistro da ferramenta externa';
$string['toolsetup'] = 'Configuración da ferramenta externa';
$string['tooltypeadded'] = 'Engadiuse a ferramenta preconfigurada';
$string['tooltypedeleted'] = 'Eliminouse a ferramenta preconfigurada';
$string['tooltypenotdeleted'] = 'Non foi posíbel eliminar a ferramenta preconfigurada';
$string['tooltypes'] = 'Ferramentas';
$string['tooltypeupdated'] = 'Actualizouse a ferramenta preconfigurada';
$string['toolurl'] = 'URL base da ferramenta';
$string['toolurl_contentitemselectionrequest'] = 'URL de selección de contido';
$string['toolurl_contentitemselectionrequest_help'] = 'O URL de selección de contido usarse para iniciar a páxina de selección de contido do fornecedor de ferramentas. Se estiver baleiro, empregarase o URL da ferramenta';
$string['toolurl_help'] = 'O URL da ferramenta empregase para emparellar os URL coa ferramenta de configuración correspondente. O prefixo http(s) no URL é opcional.

Adicionalmente, o URL base empregase como URL da ferramenta se non se especificou un URL na instancia da ferramenta externa.

Por exemplo, un URL base de *tool.com* concordaría co seguinte:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

un URL base de *www.tool.com/quizes* concordaría co seguinte:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

un URL base *quiz.tool.com* concordaría co seguinte:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Se existen dúas configuración diferentes de ferramenta para o mesmo dominio, usarase a concordancia máis específica.

Tamén pode inserir un URL de cartucho se ten un e os detalles da ferramenta serán cubertos automaticamente';
$string['toolurlplaceholder'] = 'URL da ferramenta...';
$string['typename'] = 'Nome da ferramenta';
$string['typename_help'] = 'O nome da ferramenta empregase para identificar ao provedor da ferramenta dentro de Moodle. O nome que se introduza será visíbel aos profesores cando engadan ferramentas externas nos seus cursos.';
$string['types'] = 'Tipos';
$string['unabletocreatetooltype'] = 'Non é posíbel crear a ferramenta';
$string['unabletofindtooltype'] = 'Non é posíbel atopar a ferramenta para {$a->id}';
$string['unknownstate'] = 'Estado descoñecido';
$string['update'] = 'Actualizar';
$string['useraccountinformation'] = 'Información da conta do usuario';
$string['userpersonalinformation'] = 'Información persoal do usuario';
$string['using_tool_cartridge'] = 'Usando cartucho de ferramenta';
$string['using_tool_configuration'] = 'Usando a configuración de ferramenta:';
$string['validurl'] = 'Un URL correcto debe comezar con http(s)://';
$string['viewsubmissions'] = 'Ver as entregas e a pantalla de cualificación';
