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
 * Strings for component 'tool_dataprivacy', language 'gl', version '4.4'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Actividades e recursos';
$string['addcategory'] = 'Engadir categoría';
$string['addnewdefaults'] = 'Engadir un novo modulo predeterminado';
$string['addpurpose'] = 'Engadir propósito';
$string['addroleoverride'] = 'Engadir anulación de rol';
$string['approve'] = 'Aprobar';
$string['approverequest'] = 'Aprobar solicitude';
$string['automaticdeletionrequests'] = 'Crear solicitudes de eliminación de datos automáticas';
$string['automaticdeletionrequests_desc'] = 'Se está activado, crearanse solicitudes de eliminación de datos automáticas para calquera conta de usuario eliminada manualmente.';
$string['bulkapproverequests'] = 'Aprobar as solicitudes';
$string['bulkdenyrequests'] = 'Denegar as solicitudes';
$string['cachedef_contextlevel'] = 'Propósito e categoría dos niveis de contexto';
$string['cachedef_purpose'] = 'Propósitos dos datos';
$string['cachedef_purpose_overrides'] = 'Anulacións de propósito na ferramenta de Privacidade de datos';
$string['cancelrequest'] = 'Cancelar a solicitude';
$string['cancelrequestconfirmation'] = 'Confirma que quere cancelar esta solicitude de datos?';
$string['cannotreset'] = 'No é posíbel reiniciar esta solicitude. Soamente poden reiniciarse solicitudes rexeitadas.';
$string['categories'] = 'Categorías';
$string['categorieslist'] = 'Lista de categorías de datos';
$string['category'] = 'Categoría';
$string['category_help'] = 'Unha categoría no rexistro de datos describe un tipo de datos. Pode engadirse unha nova categoría, ou se se selecciona «herdado», aplícase a categoría de datos dun contexto máis elevado. Os contexto son (de baixo a alto): Bloques > Módulos de actividade > Cursos > Categorías de curso > Sitio.';
$string['categorycreated'] = 'Creada a categoría';
$string['categorydefault'] = 'Categoría predeterminada';
$string['categorydefault_help'] = 'A categoría predeterminada é a categoría de datos aplicada a todas as novas instancias. Se se selecciona «herdado», aplícase a categoría de datos dun contexto máis elevado. Os contexto son (de baixo a alto): Bloques > Módulos de actividade > Cursos > Categorías de curso > Usuario > Sitio.';
$string['categoryupdated'] = 'Actualizada a categoría';
$string['close'] = 'Pechar';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = 'Confirma que quere aprobar esta solicitude de datos?';
$string['confirmbulkapproval'] = 'Confirma que quere aprobar masivamente as solicitudes de datos seleccionadas?';
$string['confirmbulkdenial'] = 'Confirma que quere denegar masivamente as solicitudes de datos seleccionadas?';
$string['confirmcompletion'] = 'Confirma que quere marcar esta consulta do usuario como completa?';
$string['confirmcontextdeletion'] = 'Quere confirmar a eliminación dos contextos seleccionados? Isto tamén eliminará todos os datos do usuario para os seus subconxuntos respectivos.';
$string['confirmdenial'] = 'Confirma que quere denegar esta solicitude de datos?';
$string['confirmrequestresubmit'] = 'Confirma que quere eliminar a actual solicitude {$a->type} para {$a->username} e reenviala?';
$string['contactdataprotectionofficer'] = 'Contacte co responsábel da privacidade';
$string['contactdataprotectionofficer_desc'] = 'Se está activado, os usuarios poderán contactar co responsábel da privacidade e realizar unha solicitude de datos a través dunha ligazón na páxina de perfil.';
$string['contactdpoviaprivacypolicy'] = 'Póñase en contacto co responsábel da privacidade tal e como se describe na directiva de privacidade.';
$string['contextlevelname10'] = 'Sitio';
$string['contextlevelname30'] = 'Usuarios';
$string['contextlevelname40'] = 'Categorías de cursos';
$string['contextlevelname50'] = 'Cursos';
$string['contextlevelname70'] = 'Módulos de actividade';
$string['contextlevelname80'] = 'Bloques';
$string['contextpurposecategorysaved'] = 'Gardouse o propósito e a categoría';
$string['createcategory'] = 'Crear categoría de datos';
$string['createdeletedatarequest'] = 'Crear solicitude de eliminación de datos';
$string['createnewdatarequest'] = 'Crear unha nova solicitude de datos';
$string['createpurpose'] = 'Crear propósito de datos';
$string['creationauto'] = 'Automaticamente';
$string['creationmanual'] = 'Manualmente';
$string['datadeletion'] = 'Eliminación de datos';
$string['datadeletionpagehelp'] = 'Os datos para os que o período de retención caducou están listados aquí. Revise e confirme a eliminación de datos, que será executada pola tarefa programada «Eliminar os contextos caducados».';
$string['dataprivacy:downloadallrequests'] = 'Descargar datos exportados para todos';
$string['dataprivacy:downloadownrequest'] = 'Descargar os seus propios datos exportados';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Solicitar a eliminación de datos para menores';
$string['dataprivacy:makedatarequestsforchildren'] = 'Facer solicitudes de datos para menores de idade';
$string['dataprivacy:managedataregistry'] = 'Xestionar o rexistro de datos';
$string['dataprivacy:managedatarequests'] = 'Xestionar as solicitudes de datos';
$string['dataprivacy:requestdelete'] = 'Solicitar a eliminación de datos para vostede mesmo';
$string['dataprivacy:requestdeleteforotheruser'] = 'Solicitar a eliminación de datos en nome doutro usuario';
$string['dataregistry'] = 'Rexistro de datos';
$string['dataregistryinfo'] = 'O rexistro de datos permite estabelecer categorías (tipos de datos) e propósitos (os motivos do tratamento de datos) para todo o contido do sitio, dende usuarios e cursos ata actividades e bloques. Para cada propósito, pódese estabelecer un período de retención. Cando un período de retención caduca, os datos son marcados e listados para eliminalos, agardando a confirmación do administrador.';
$string['datarequestcreatedforuser'] = 'Solicitude de datos creada para {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Creado automaticamente dende unha tarefa programada (usuario preexistente eliminado).';
$string['datarequestcreatedupondelete'] = 'Creada automaticamente ao eliminar o usuario.';
$string['datarequestemailsubject'] = 'Solicitude de datos: {$a}';
$string['datarequests'] = 'Solicitudes de datos';
$string['dataretentionexplanation'] = 'Este resumo amosa os propósitos e as categorías predeterminadas para reter datos do usuario. Certas áreas puideran ter propósitos e categorías máis específicas que as aquí relacionadas.';
$string['dataretentionsummary'] = 'Resumo da retención de datos';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Data solicitada';
$string['daterequesteddetail'] = 'Data solicitada:';
$string['defaultexpired'] = 'Datos para todos os usuarios';
$string['defaultexpiredexcept'] = 'Datos para todos os usuarios, agás aqueles que teñan calquera dos seguintes roles:<br>
{$a->unexpired}';
$string['defaultsinfo'] = 'As categorías e os propósitos predeterminados aplícanse a todas as instancias creadas recentemente.';
$string['defaultssaved'] = 'Gardados os valores predeterminados';
$string['defaultswarninginfo'] = 'Advertencia: o cambio destes valores predeterminados pode afectar o período de retención de instancias existentes.';
$string['defaultunexpired'] = 'Só datos para usuarios con calquera dos seguintes roles:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Só datos para usuarios que teñan algún dos seguintes roles:<br>
{$a->expired}
 A menos que tamén teñan algún dos seguintes roles:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Eliminar categoría';
$string['deletecategorytext'] = 'Confirma que quere eliminar a categoría «{$a}»?';
$string['deletedefaults'] = 'Eliminar valores predeterminados: {$a}';
$string['deletedefaultsconfirmation'] = 'Confirma que quere eliminar a categoría e propósito predeterminados dos módulos {$a}?';
$string['deleteexistingdeleteduserstask'] = 'Crear solicitude de eliminación de datos para usuarios eliminados preexistentes';
$string['deleteexpiredcontextstask'] = 'Eliminar os contextos caducados';
$string['deleteexpireddatarequeststask'] = 'Eliminar os ficheiros de solicitudes de exportación de datos caducados';
$string['deletemyaccount'] = 'Eliminar a miña conta';
$string['deletepurpose'] = 'Eliminar o propósito';
$string['deletepurposetext'] = 'Confirma que quere eliminar o propósito «{$a}»?';
$string['deny'] = 'Denegar';
$string['denyrequest'] = 'Denegar a solicitude';
$string['deprecated'] = 'Obsoleto';
$string['deprecatedexplanation'] = 'Este complemento está a usar unha versión antiga dunha das interfaces de privacidade e debería actualizarse.';
$string['download'] = 'Descarga';
$string['downloadexpireduser'] = 'A descarga caducou Envíe unha nova solicitude se quere exportar os seus datos persoais.';
$string['dporolemapping'] = 'Asignación de roles do responsábel da privacidade';
$string['dporolemapping_desc'] = 'O responsábel da privacidade pode xestionar solicitudes de datos. A capacidade tool/dataprivacy:managedatarequests debe estar permitida para que un rol se catalogue como unha opción de asignación de rol do responsábel da privacidade.';
$string['duplicaterole'] = 'Rol xa especificado';
$string['editcategories'] = 'Editar categorías';
$string['editcategory'] = 'Editar categoría';
$string['editdefaults'] = 'Editar valores predeterminados: {$a}';
$string['editmoduledefaults'] = 'Editar os valores predeterminados do módulo';
$string['editpurpose'] = 'Editar propósito';
$string['editpurposes'] = 'Editar propósitos';
$string['effectiveretentionperiodcourse'] = '{$a} (após a data de remate do curso)';
$string['effectiveretentionperioduser'] = '{$a} (dende a última vez que o usuario accedeu ao sitio)';
$string['emailsalutation'] = 'Prezado/a {$a}';
$string['errorcannotrequestdeleteforother'] = 'Non ten permiso para crear unha solicitude de eliminación para este usuario.';
$string['errorcannotrequestdeleteforself'] = 'Non ten permiso para crear unha solicitude de eliminación para vostede mesmo.';
$string['errorcontexthasunexpiredchildren'] = 'O contexto «{$a}» aínda ten subcontextos que aínda non caducaron. Non se marcou ningún contexto para eliminar.';
$string['errorinvalidrequestcreationmethod'] = 'O método de creación de solicitude non é válido.';
$string['errorinvalidrequeststatus'] = 'Estado de solicitude non válido';
$string['errorinvalidrequesttype'] = 'Tipo de solicitude non válido!';
$string['errornocapabilitytorequestforothers'] = 'O usuario {$a->requestedby} non ten a capacidade de facer unha solicitude de datos en nome do usuario {$a->userid}';
$string['errornoexpiredcontexts'] = 'Non hai contextos caducados para procesar';
$string['errorrequestalreadyexists'] = 'Xa ten unha solicitude en proceso.';
$string['errorrequestnotfound'] = 'Non se atopou a solicitude';
$string['errorrequestnotwaitingforapproval'] = 'A solicitude non está agardando a aprobación. Ou aínda non está preparada ou xa foi procesada.';
$string['errorsendingmessagetodpo'] = 'Produciuse un erro ao tentar enviar unha mensaxe a {$a}.';
$string['exceptionnotificationbody'] = '<p>Produciuse unha excepción ao chamar a <b>{$a->fullmethodname}</b>.<br>Isto significa que o engadido <b>{$a->component}</b> non completou o tratamento de datos. A seguinte información de excepción pode ser transmitida ao desenvolvedor do engadido:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Produciuse unha excepción ao procesar datos de privacidade';
$string['expandplugin'] = 'Engadido para expandir e contraer';
$string['expandplugintype'] = 'Tipo do engadido para expandir e contraer';
$string['expiredretentionperiodtask'] = 'Caducou o período de retención';
$string['expiredrolewithretention'] = '{$a->retention} (caducado)';
$string['expiry'] = 'Caducidade';
$string['explanationtitle'] = 'Iconas usadas nesta páxina e o que significan.';
$string['external'] = 'Adicional';
$string['externalexplanation'] = 'Un engadido adicional instalado neste sitio.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Curso na páxina de portada';
$string['gdpr_art_6_1_a_description'] = 'O interesado deu o seu consentimento para o tratamento dos seus datos persoais para un ou máis fins específicos';
$string['gdpr_art_6_1_a_name'] = 'Consentimento (RXPD Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'O tratamento é necesario para a realización dun contrato no que o interesado sexa parte ou para tomar medidas a pedimento do interesado antes de concertar un contrato.';
$string['gdpr_art_6_1_b_name'] = 'Contrato (RXPD Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'O tratamento é necesario para o cumprimento dunha obriga legal á que está suxeito o controlador';
$string['gdpr_art_6_1_c_name'] = 'Obriga legal (RXPD Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'O tratamento é necesario para protexer os intereses vitais do interesado ou doutra persoa física';
$string['gdpr_art_6_1_d_name'] = 'Intereses vitais (RXPD Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'O tratamento é necesario para a realización dunha tarefa levada a cabo en interese público ou no exercicio da autoridade oficial adscrita ao controlador';
$string['gdpr_art_6_1_e_name'] = 'Tarefa pública (RXPD Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'O tratamento é necesario para os fins dos intereses lexítimos perseguidos polo controlador ou por un terceiro, agás cando os intereses ou os dereitos e liberdades fundamentais dos interesados que requiran a protección de datos persoais son superados polos intereses, en particular cando o suxeito dos datos é un menor';
$string['gdpr_art_6_1_f_name'] = 'Intereses lexítimos (RXPD Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'O interesado deu o consentimento explícito para o tratamento destes datos persoais para un ou máis propósitos específicos, agás cando a lei da Unión Europea ou dos Estados membro estabeleza que o interesado non poderá levantar a prohibición mencionada no parágrafo 1 do artigo 9 do RXPD.';
$string['gdpr_art_9_2_a_name'] = 'Consentimento explícito (RXPD Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'O tratamento é necesario para o cumprimento das obrigas e exercer os dereitos específicos do controlador ou do interesado no ámbito da lexislación de emprego e de seguridade social e de protección social sempre que estea autorizado pola lei da Unión Europea ou dos Estados membro ou un convenio colectivo de conformidade coa lexislación dos Estados membro que prevé salvagardas axeitadas para os dereitos fundamentais e os intereses do interesado';
$string['gdpr_art_9_2_b_name'] = 'Lei de protección/seguridade social e emprego (RXPD Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'O tratamento é necesario para protexer os intereses vitais do interesado ou doutra persoa física cando o interesado está física ou legalmente incapacitado para dar o seu consentimento.';
$string['gdpr_art_9_2_c_name'] = 'Protección de intereses vitais (RXPD Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'O tratamento realízase no transcurso das súas lexítimas actividades coas garantías adecuadas por parte dunha fundación, asociación ou calquera outro organismo sen ánimo de lucro con finalidade política, filosófica, relixiosa ou sindical e sempre que o tratamento se refire exclusivamente á membros ou ex membros do organismo ou a persoas que teñan contacto regular con el en relación cos seus fins e que os datos persoais non se divulguen fóra do devandito organismo sen o consentimento dos interesados';
$string['gdpr_art_9_2_d_name'] = 'Actividades lexítimas respecto dos membros/contactos próximos dunha fundación, asociación ou outra organización non lucrativa (RXPD Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'O tratamento corresponde a datos de carácter persoal manifestados polo interesado';
$string['gdpr_art_9_2_e_name'] = 'Datos feitos públicos polo interesado (RXPD Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'O tratamento é necesario para o estabelecemento, o exercicio ou a defensa das reclamacións legais ou sempre que os tribunais de xustiza actúen na súa capacidade xudicial';
$string['gdpr_art_9_2_f_name'] = 'Requisitos legais e accións dos tribunais de xustiza (RXPD Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'O tratamento é necesario por razóns de interese público substancial, en función da lei da Unión Europea ou dos Estados membro que sexa proporcional ao obxectivo perseguido, respectar a esencia do dereito á protección de datos e estabelecer medidas adecuadas e específicas para salvagardar os dereitos fundamentais e os intereses do suxeito de datos';
$string['gdpr_art_9_2_g_name'] = 'Interese público substancial (RXPD Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'O tratamento é necesario para fins de medicina preventiva ou ocupacional, para a avaliación da capacidade de traballo do empregado, o diagnóstico médico, a prestación de asistencia sanitaria ou social ou o tratamento ou a xestión dos sistemas e servizos sanitarios ou sociais en base a lei da Unión Europea ou dos Estados membro ou de acordo co contrato cun profesional da saúde e suxeito ás condicións e salvagardas a que se refire o parágrafo 3 do Artigo 9 do RXPD';
$string['gdpr_art_9_2_h_name'] = 'Propósitos médicos (RXPD Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'O tratamento é necesario por razóns de interese público no ámbito da saúde pública, como a protección contra ameazas transfronteirizas graves á saúde ou o asegurar altos estándares de calidade e seguridade da asistencia sanitaria e de medicamentos ou dispositivos médicos, en función da lei da Unión Europea ou dos Estados membro que prevé medidas axeitadas e específicas para salvagardar os dereitos e liberdades do interesado, en particular o segredo profesional';
$string['gdpr_art_9_2_i_name'] = 'Saúde pública (RXPD Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'O tratamento é necesario para fins de arquivado en interese público, fins científicos ou históricos ou propósitos estatísticos de acordo co artigo 89 (1) baseado na lei da Unión Europea ou dos Estados membro que sexa proporcional ao obxectivo perseguido, respectar a esencia do dereito á protección de datos e estabelecer medidas adecuadas e específicas para salvagardar os dereitos fundamentais e os intereses do suxeito de datos';
$string['gdpr_art_9_2_j_name'] = 'Interese público, ou investigación científica/histórica/estatística (RXPD Art. 9.2(j))';
$string['hide'] = 'Contraer todo';
$string['httpwarning'] = 'Non é posíbel cifrar os datos descargados deste sitio. Póñase en contacto co administrador do sistema e solicite que instalen SSL neste sitio.';
$string['inherit'] = 'Herdanza';
$string['lawfulbases'] = 'Bases legales';
$string['lawfulbases_help'] = 'Seleccione polo menos unha opción que servirá de base legal para procesar datos persoais. Para obter máis detalles sobre estas bases legais, consulte <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">RXPD Art. 6.1 (en inglés)</a>';
$string['markcomplete'] = 'Marcar como completado';
$string['markedcomplete'] = 'A súa consulta foi marcada como completa polo responsábel da privacidade.';
$string['message'] = 'Mensaxe';
$string['messagelabel'] = 'Mensaxe:';
$string['messageprovider:contactdataprotectionofficer'] = 'Solicitude de datos';
$string['messageprovider:datarequestprocessingresults'] = 'Resultados de procesamento de solicitudes de datos';
$string['messageprovider:notifyexceptions'] = 'Notificacións de excepcións de solicitudes de datos';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'As miñas solicitudes de datos persoais';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} fillos';
$string['newrequest'] = 'Nova solicitude';
$string['noactivitiestoload'] = 'Sen actividades';
$string['noassignedroles'] = 'Sen roles asignados neste contexto';
$string['noblockstoload'] = 'Sen bloques';
$string['nocategories'] = 'Aínda non hai categorías';
$string['nocoursestoload'] = 'Sen actividades';
$string['nodatarequests'] = 'Non hai solicitudes de datos';
$string['nodatarequestsmatchingfilter'] = 'Non hai solicitudes de datos coincidentes co filtro indicado';
$string['noexpiredcontexts'] = 'Este nivel de contexto non ten datos para os que caducou o período de retención.';
$string['nopersonaldatarequests'] = 'Non ten ningunha solicitude de datos persoais';
$string['nopurposes'] = 'Aínda non hai propósitos';
$string['nosubjectaccessrequests'] = 'Non hai solicitudes de datos que requiran intervir';
$string['nosystemdefaults'] = 'O propósito e a categoría do sitio aínda non foron definidos.';
$string['notset'] = 'Sen estabelecer (use o valor predeterminado)';
$string['notyetexpired'] = '{$a} (aínda non caducou)';
$string['overrideinstances'] = 'Restabelecer as instancias con valores personalizados';
$string['pluginname'] = 'Privacidade de datos';
$string['pluginname_help'] = 'Engadido de privacidade de datos';
$string['pluginregistry'] = 'Rexistro do engadido de privacidade';
$string['pluginregistrytitle'] = 'Rexistro de cumprimento de privacidade do engadido';
$string['privacy'] = 'Privacidade';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Os filtros aplicados actualmente á páxina de solicitudes de datos.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'O número de solicitudes de datos que o usuario prefire ver nunha páxina';
$string['privacy:metadata:request'] = 'Información de solicitudes de datos persoais (solicitudes de acceso e eliminación do interesado) feitas para este sitio.';
$string['privacy:metadata:request:comments'] = 'Calquera comentario de usuario que acompañe a solicitude.';
$string['privacy:metadata:request:dpocomment'] = 'Calquera comentario feito polo responsábel da privacidade do sitio sobre a solicitude.';
$string['privacy:metadata:request:requestedby'] = 'O ID do usuario que fai a solicitude, se se fai en nome doutro usuario.';
$string['privacy:metadata:request:timecreated'] = 'A marca de tempo indicando cando foi feita a solicitude por parte do usuario.';
$string['privacy:metadata:request:userid'] = 'O ID do usuario ao que pertence a solicitude.';
$string['privacyofficeronly'] = 'Só os usuarios que teñen asignada un rol de oficial de privacidade ({$a}) teñen acceso a este contido';
$string['privacyrequestexpiry'] = 'Caducidade da solicitude de datos';
$string['privacyrequestexpiry_desc'] = 'O tempo durante o que as solicitudes de datos aprobadas estarán dispoñíbeis para descargar antes de caducar. Se se define a cero, non hai límite de tempo.';
$string['protected'] = 'Protexido';
$string['protectedlabel'] = 'A retención destes datos ten un precedente legal superior sobre a solicitude dun usuario para ser esquecido. Os datos só se eliminarán após que o período de retención caduque.';
$string['purpose'] = 'Propósito';
$string['purpose_help'] = 'O propósito describe o motivo do tratamento dos datos. Pode engadirse un novo propósito, ou se se selecciona «herdado», aplícase o propósito dun contexto máis elevado. Os contexto son (de baixo a alto): Bloques > Módulos de actividade > Cursos > Categorías de curso > Usuario > Sitio.';
$string['purposecreated'] = 'Creado o propósito';
$string['purposedefault'] = 'Propósito predeterminado';
$string['purposedefault_help'] = 'O propósito predeterminado é o propósito que se aplica a todas as novas instancias. Se se selecciona «herdado», aplícase o propósito dun contexto máis elevado. Os contexto son (de baixo a alto): Bloques > Módulos de actividade > Cursos > Categorías de curso > Usuario > Sitio.';
$string['purposeoverview'] = 'Un propósito describe o uso ao que está destinado e a directiva de retención para datos almacenados. A base para almacenar e reter eses datos está tamén descrita no propósito.';
$string['purposes'] = 'Propósitos';
$string['purposeslist'] = 'Lista de propósitos de datos';
$string['purposeupdated'] = 'Actualizado o propósito';
$string['replyto'] = 'Responderlle a';
$string['requestactions'] = 'Accións';
$string['requestapproved'] = 'A solicitude foi aprobada';
$string['requestby'] = 'Solicitado por';
$string['requestbydetail'] = 'Solicitado por:';
$string['requestcomments'] = 'Comentarios';
$string['requestcomments_help'] = 'Esta caixa permítelle introducir máis detalles sobre a súa solicitude de datos.';
$string['requestcreation'] = 'Creación';
$string['requestdenied'] = 'A solicitude foi denegada';
$string['requestemailintro'] = 'Recibiu unha solicitude de datos:';
$string['requestfor'] = 'Usuario';
$string['requestmarkedcomplete'] = 'A solicitude foi marcada como completada';
$string['requestorigin'] = 'Sitio';
$string['requestsapproved'] = 'As solicitudes foron aprobadas';
$string['requestsdenied'] = 'As solicitudes foron denegadas';
$string['requeststatus'] = 'Estado';
$string['requestsubmitted'] = 'A súa solicitude foi enviada ao responsábel da privacidade';
$string['requesttype'] = 'Tipo';
$string['requesttype_help'] = 'Seleccione o motivo polo que quere contactar co responsábel da privacidade';
$string['requesttypedelete'] = 'Eliminar todos os meus datos persoais';
$string['requesttypedeleteshort'] = 'Eliminar';
$string['requesttypeexport'] = 'Exportar todos os meus datos persoais';
$string['requesttypeexportshort'] = 'Exportar';
$string['requesttypeothers'] = 'Investigación xeral';
$string['requesttypeothersshort'] = 'Mensaxe';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Considerar os cursos sen data de remate como activos';
$string['requireallenddatesforuserdeletion_desc'] = 'Cando se calcula a caducidade do usuario, considéranse varios factores:

* a hora do último acceso do usuario comparase co período de retención para usuarios; y
* se é que o usuario está matriculado activamente nalgún curso.

Ao revisar as matriculacións activas dun curso, se o curso non ten data de remate, entón este axuste usase para determinar se ese curso se considera activo ou non.

Se o curso non ten data de remate, e este axuste está activado, entón o usuario non pode ser eliminado';
$string['requiresattention'] = 'Require atención.';
$string['requiresattentionexplanation'] = 'Este engadido non inclúe a API de privacidade de Moodle. Se este engadido almacena datos persoais non se poderán exportar nin eliminar mediante o sistema de privacidade de Moodle.';
$string['resubmitrequest'] = 'Reenviar a solicitude {$a->type} para {$a->username}';
$string['resubmitrequestasnew'] = 'Reenviar como solicitude nova';
$string['resubmittedrequest'] = 'A solicitude actual {$a->type} para {$a->username} foi cancelada e reenviada';
$string['resultdeleted'] = 'Recentemente solicitou que se eliminase a súa conta e datos persoais en {$a}. Este proceso foi completado e xa non poderá iniciar sesión.';
$string['resultdownloadready'] = 'A súa copia dos seus datos persoais de {$a} que solicitou recentemente, está dispoñíbel para descargar dende a seguinte ligazón.';
$string['retentionperiod'] = 'Período de retención';
$string['retentionperiod_help'] = 'O período de retención especifica o período de tempo que deben conservarse. Cando o período de retención caduque, os datos serán marcados e listados para eliminalos, agardando a confirmación do administrador.';
$string['retentionperiodnotdefined'] = 'Non se definiu un período de retención';
$string['retentionperiodzero'] = 'Sen período de retención';
$string['reviewdata'] = 'Revisar os datos';
$string['role'] = 'Rol';
$string['role_help'] = 'O rol ao que debería aplicárselle a anulación.';
$string['roleoverride'] = 'Anulación de rol';
$string['roleoverrideoverview'] = 'A directiva de retención predeterminada pode ser anulada para roles específicos de usuarios, permitíndolle a vostede especificar unha directiva de retención máis longa ou máis curta. Un usuario soamente está caducado cando todos os seus roles caducaron.';
$string['roleoverrides'] = 'Anulacións de roles';
$string['selectbulkaction'] = 'Seleccione unha acción masiva';
$string['selectdatarequests'] = 'Seleccione as solicitudes de datos.';
$string['selectuserdatarequest'] = 'Seleccionar solicitudes de datos {$a->requesttype} de {$a->username}.';
$string['send'] = 'Enviar';
$string['sensitivedatareasons'] = 'Motivos de procesamento de datos persoais sensíbeis';
$string['sensitivedatareasons_help'] = 'Seleccione un ou máis motivos aplicábeis que eximan a prohibición de procesar datos persoais sensíbeis vinculados a este efecto. Para obter máis información, consulte <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">RXPD Art. 9.2</a>';
$string['setdefaults'] = 'Estabelecer valores predeterminados';
$string['showdataretentionsummary'] = 'Amosar o resumo da retención de datos';
$string['showdataretentionsummary_desc'] = 'Se está activado, amosase unha ligazón cara ao resumo de retención de datos no rodapé da páxina e no perfil do usuario.';
$string['statusapproved'] = 'Aprobado';
$string['statusawaitingapproval'] = 'Agardando aprobación';
$string['statuscancelled'] = 'Cancelada';
$string['statuscomplete'] = 'Completa';
$string['statusdeleted'] = 'Eliminado';
$string['statusdetail'] = 'Estado:';
$string['statusexpired'] = 'Caducado';
$string['statuspending'] = 'Pendente';
$string['statuspreprocessing'] = 'Pre-procesamento';
$string['statusprocessing'] = 'Procesando';
$string['statusready'] = 'Descarga preparada';
$string['statusrejected'] = 'Rexeitado';
$string['subjectscope'] = 'Alcance del asunto';
$string['subjectscope_help'] = 'O alcance do asunto enumera as funcións que poden asignarse neste contexto.';
$string['summary'] = 'Resumo da configuración do rexistro';
$string['systemconfignotsetwarning'] = 'Non foron definidos unha categoría e un propósito do sitio. Cando iso non está definido, tódolos datos serán retirados cando se procesen as solicitudes de eliminación.';
$string['tobedeleted'] = 'Datos a ser eliminados';
$string['unexpiredrolewithretention'] = '{$a->retention} (sen caducar)';
$string['user'] = 'Usuario';
$string['userlistexplanation'] = 'Este engadido ten o provedor base mais tamén debería incorporar o provedor da lista de usuarios para a compatibilidade total da funcionalidade de privacidade.';
$string['userlistnoncompliant'] = 'Non se atopa o provedor da lista de usuarios';
$string['viewrequest'] = 'Ver a solicitude';
$string['visible'] = 'Expandir todo';
