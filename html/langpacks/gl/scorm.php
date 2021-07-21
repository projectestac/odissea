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
 * Strings for component 'scorm', language 'gl', version '3.11'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Activación';
$string['activityloading'] = 'Vostede será encamiñado automaticamente á actividade en';
$string['activityoverview'] = 'Ten pendentes paquetes SCORM que necesitan atención';
$string['activitypleasewait'] = 'Cargando a actividade, agarde ...';
$string['adminsettings'] = 'Axustes de administración';
$string['advanced'] = 'Parámetros';
$string['aicchacpkeepsessiondata'] = 'Datos de sesión AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Período de tempo en días no que se manterán os datos da sesión externa AICC HACP (un valor alto encherá a táboa con datos antigos, mais pode ser útil á hora de depurar)';
$string['aicchacptimeout'] = 'Tempo de espera AICC HACP';
$string['aicchacptimeout_desc'] = 'Período de tempo en minutos durante os que se manterá aberta unha sesión externa AICC HACP';
$string['aiccuserid'] = 'AICC pasar ID numérico do usuario';
$string['aiccuserid_desc'] = 'O estándar AICC para nomes de usuario é moi restritivo comparado co Moodle, e soamente permite caracteres alfanuméricos, guión medio (-) e subliña (_). Os puntos, os espazos e o símbolo de @ non están permitidos. Se activa isto, os números ID do usuario son pasados ao paquete AICC no canto dos nomes de usuario.';
$string['aliasonly'] = 'Cando selecciona un ficheiro imsmanifest.xml dun repositorio, debe usar un alias/atallo para este ficheiro.';
$string['allowapidebug'] = 'Activar a depuración e o seguimento da API (axustar a máscara de captura con apidebugmask)';
$string['allowtypeaicchacp'] = 'Activar AICC HACP externo';
$string['allowtypeaicchacp_desc'] = 'Se está activado, permite comunicacións externas AICC HACP sen requirir o acceso do usuario para facer pedimentos dun paquete AICC externo';
$string['allowtypeexternal'] = 'Activar o tipo de paquete externo';
$string['allowtypeexternalaicc'] = 'Activar URL AICC directo';
$string['allowtypeexternalaicc_desc'] = 'Se está activado, permite un URL directo a un paquete simple AICC';
$string['allowtypelocalsync'] = 'Activar o tipo de paquete descargado';
$string['apidebugmask'] = 'Máscara de captura de depuración API; empregue unha expresión regular simple en &lt;username&gt;:&lt;activityname&gt; p.ex. admin:.* para depurar só o usuario admin';
$string['areacontent'] = 'Ficheiros de contidos';
$string['areapackage'] = 'Ficheiro de paquete';
$string['asset'] = 'Recurso';
$string['assetlaunched'] = 'Recurso, visto';
$string['attempt'] = 'Intentar';
$string['attempt1'] = '1 intento';
$string['attempts'] = 'Intentos';
$string['attemptsmanagement'] = 'Xestión de intentos';
$string['attemptstatusall'] = 'Taboleiro e páxina de entrada';
$string['attemptstatusentry'] = 'Páxina de entrada unicamente';
$string['attemptstatusmy'] = 'Taboleiro unicamente';
$string['attemptsx'] = '{$a} intentos';
$string['attr_error'] = 'Valor incorrecto para o atributo ({$a->attr}) na etiqueta {$a->tag}.';
$string['autocommit'] = 'Implantar automaticamente';
$string['autocommit_help'] = 'Se está activado, os datos do SCORM gárdanse automaticamente na base de datos. Útil para obxectos SCORM que non gardan regularmente os seus datos.';
$string['autocommitdesc'] = 'Gardar automaticamente os datos do SCORM se o paquete SCORM non os garda.';
$string['autocontinue'] = 'Continuación automática';
$string['autocontinue_help'] = 'Se está activado, os seguintes obxectos de aprendizaxe inícianse automaticamente, senón debe empregarse o botón Continuar.';
$string['autocontinuedesc'] = 'Se está activado, os seguintes obxectos de aprendizaxe inícianse automaticamente, senón debe empregarse o botón Continuar.';
$string['averageattempt'] = 'Media de intentos';
$string['badarchive'] = 'Debe fornecer un arquivo zip correcto';
$string['badimsmanifestlocation'] = 'Atopouse un ficheiro imsmanifest.xml mais non esta na raíz do seu arquivo ZIP; empaquete de novo o seu SCORM';
$string['badmanifest'] = 'Algúns erros de manifesto: vexa o rexistro de erros';
$string['browse'] = 'Vista previa';
$string['browsed'] = 'Examinado';
$string['browsemode'] = 'Modo de vista previa';
$string['browserepository'] = 'Examinar o repositorio';
$string['calculatedweight'] = 'Ponderación calculada';
$string['calendarend'] = '{$a} pechan';
$string['calendarstart'] = '{$a} abren';
$string['cannotaccess'] = 'Non pode chamar a este «script» desta forma';
$string['cannotfindsco'] = 'Non foi posíbel atopar SCO';
$string['chooseapacket'] = 'Escoller ou actualizar un paquete';
$string['closebeforeopen'] = 'Especificou unha data de peche anterior á da apertura.';
$string['collapsetocwinsize'] = 'Contraer a TdC cun tamaño de xanela menor de';
$string['collapsetocwinsizedesc'] = 'Este axuste permítelle especificar o tamaño da xanela na que debería contraerse a TdC automaticamente.';
$string['compatibilitysettings'] = 'Configuración de compatibilidade';
$string['completed'] = 'Completado';
$string['completionscorerequired'] = 'Requirir puntuación mínima';
$string['completionscorerequired_help'] = 'Activando este axuste, requirirase que o usuario teña polo menos a puntuación mínima rexistrada para que se marque a actividade SCORM como finalizada, así como calquera outro requisito de Completado da actividade.';
$string['completionscorerequireddesc'] = 'Requírese unha cualificación mínima de {$a} para completar';
$string['completionstatus_completed'] = 'Completado';
$string['completionstatus_passed'] = 'Aprobado';
$string['completionstatusallscos'] = 'Require que todos os scos devolvan o estado de completado';
$string['completionstatusallscos_help'] = 'Algúns paquetes SCORM conteñen varios compoñentes ou «scos», cando isto está activado, todos os scos dentro do paquete deben devolver o lesson_status relevante para que esta actividade se marque como completada.';
$string['completionstatusrequired'] = 'Requirir o estado';
$string['completionstatusrequired_help'] = 'Ao marcar un ou mais estados, requirirase que o alumno cumpra polo menos con un deses estados para que se marque como finalizada esta actividade SCORM, así como calquera outro requisito de Completado da actividade';
$string['completionstatusrequireddesc'] = 'O alumno debe acadar polo menos un dos seguintes estados: {$a}';
$string['confirmloosetracks'] = 'ADVERTENCIA: O paquete semella ter sido modificado. Se foi cambiada a estrutura do paquete o seguimento de algúns usuarios pode terse perdido durante o proceso de actualización.';
$string['contents'] = 'Contidos';
$string['coursepacket'] = 'Paquete de curso';
$string['coursestruct'] = 'Estrutura de curso';
$string['crontask'] = 'Procesamento en segundo plano para SCORM';
$string['currentwindow'] = 'Xanela actual';
$string['datadir'] = 'Erro do sistema de ficheiros: Non é posíbel crear o directorio de datos do curso';
$string['defaultdisplaysettings'] = 'Axustes predeterminados da presentación';
$string['defaultgradesettings'] = 'Axustes predeterminados da cualificación';
$string['defaultothersettings'] = 'Outros axustes predeterminados';
$string['deleteallattempts'] = 'Eliminar todos os intentos SCORM';
$string['deleteattemptcheck'] = 'Confirma definitivamente que quere eliminar completamente estes intentos?';
$string['deleteselected'] = 'Eliminar todos os intentos seleccionados';
$string['deleteuserattemptcheck'] = 'Confirma definitivamente que quere eliminar todos os seus intentos?';
$string['details'] = 'Detalles do seguimento';
$string['directories'] = 'Amosar as ligazóns de directorio';
$string['disabled'] = 'Desactivado';
$string['display'] = 'Presentar o paquete';
$string['displayactivityname'] = 'Amosar o nome da actividade';
$string['displayactivityname_help'] = 'Se se amosa ou non o nome da actividade enriba do reprodutor do SCORM.';
$string['displayattemptstatus'] = 'Presentar o estado dos intentos';
$string['displayattemptstatus_help'] = 'Esta preferencia permite un resumo dos intentos do usuario que se amosará no bloque de vista xeral do curso no Taboleiro e/ou na páxina de entrada SCORM.';
$string['displayattemptstatusdesc'] = 'Se se amosa un resumo dos intentos do usuario no bloque de vista xeral do curso no Taboleiro e/ou na páxina de entrada de SCORM.';
$string['displaycoursestructure'] = 'Presentar a estrutura do curso na páxina de entrada';
$string['displaycoursestructure_help'] = 'Se está activado, o índice presentarase na páxina de esquema SCORM.';
$string['displaycoursestructuredesc'] = 'Se está activado, o índice presentarase na páxina de esquema SCORM.';
$string['displaydesc'] = 'Esta preferencia estabelece o valor predeterminado para presentar ou non o paquete dunha actividade';
$string['displaysettings'] = 'Axustes da presentación';
$string['dnduploadscorm'] = 'Engadir un paquete SCORM';
$string['domxml'] = 'Biblioteca externa DOMXML';
$string['duedate'] = 'Data límite';
$string['element'] = 'Elemento';
$string['enter'] = 'Introducir';
$string['entercourse'] = 'Introducir o curso';
$string['errorlogs'] = 'Rexistro de erros';
$string['eventattemptdeleted'] = 'Intento eliminado';
$string['eventinteractionsviewed'] = 'Interaccións vistas';
$string['eventreportviewed'] = 'Informe visto';
$string['eventscolaunched'] = 'Sco iniciado';
$string['eventscorerawsubmitted'] = 'Puntuación en bruto do SCORM enviado';
$string['eventstatussubmitted'] = 'Estados do SCORM enviado';
$string['eventtracksviewed'] = 'Pistas vistas';
$string['eventuserreportviewed'] = 'Informe de usuario visto';
$string['everyday'] = 'Todos os días';
$string['everytime'] = 'Cada vez que se use';
$string['exceededmaxattempts'] = 'Acadou o número máximo de intentos';
$string['exit'] = 'Saír do curso';
$string['exitactivity'] = 'Saír da actividade';
$string['expired'] = 'Vaites, esta actividade pechouse o {$a} e xa non está dispoñíbel';
$string['external'] = 'Actualizar os tempos dos paquetes externos';
$string['failed'] = 'Suspenso';
$string['finishscorm'] = 'Se xa rematou de ver este recurso, {$a}';
$string['finishscormlinkname'] = 'prema aquí para volver á páxina do curso';
$string['firstaccess'] = 'Primeiro acceso';
$string['firstattempt'] = 'Primeiro intento';
$string['floating'] = 'Flotante';
$string['forceattemptalways'] = 'Sempre';
$string['forceattemptoncomplete'] = 'Cando o intento anterior foi completado, aprobado ou suspenso';
$string['forcecompleted'] = 'Forzar o completado';
$string['forcecompleted_help'] = 'Se está activado, o estado do intento actual fórzase ao estado «completado». Só se aplica a paquetes SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Esta preferencia estabelece o valor predeterminado para forzar o axuste de completado';
$string['forcejavascript'] = 'Forzar aos usuarios a ter JavaScript activado';
$string['forcejavascript_desc'] = 'Se está activado (recomendado), impide o acceso aos obxectos SCORM cando JavaScript non está admitido/activado no navegador do usuario. Se está desactivado, o usuario pode ver o SCORM, mais a comunicación co API fallará e non se gardará a información da cualificación.';
$string['forcejavascriptmessage'] = 'Requírese de JavaScript para ver este obxecto, active JavaScript no seu navegador e tenteo de novo.';
$string['forcenewattempts'] = 'Forzar un novo intento';
$string['forcenewattempts_help'] = 'Hai 3 opcións:

* Non - Se un intento previamente completado, aprobado ou suspenso, o alumno contará coa opción de ingresar no modo de revisión ou iniciar un novo intento.
* Cando o intento anterior foi completado, aprobado ou suspenso - Isto depende do paquete SCORM que estabelece o estado de «completado», «aprobado» ou «suspenso».
* Sempre - Cada reentrada á actividade SCORM xerará un novo intento e o alumno non será devolto ao mesmo punto que acadou no seu intento anterior.';
$string['found'] = 'Atopouse o manifesto';
$string['frameheight'] = 'Esta preferencia determina a altura predeterminada para o cadro ou xanela da etapa';
$string['framewidth'] = 'Esta preferencia determina a largura predeterminado para o cadro ou xanela da etapa';
$string['fromleft'] = 'Dende a esquerda';
$string['fromtop'] = 'Dende arriba';
$string['fullscreen'] = 'Encher toda a pantalla';
$string['general'] = 'Datos xerais';
$string['gradeaverage'] = 'Cualificación media';
$string['gradeforattempt'] = 'Cualificación por intento';
$string['gradehighest'] = 'Cualificación máis alta';
$string['grademethod'] = 'Método de cualificación';
$string['grademethod_help'] = 'O método de cualificación define como se determina a cualificación dun intento único nunha actividade.

Hai 4 métodos de cualificación:

* Obxectos de aprendizaxe - Número de obxectos de aprendizaxe completados/aprobados
* Cualificación máis alta: A puntuación máxima obtida entre todos os obxectos de aprendizaxe aprobados
* Cualificación media: A media de todas as puntuacións
* Cualificacións sumadas: A suma de todas as puntuacións';
$string['grademethoddesc'] = 'O método de cualificación define como se determina a cualificación dun intento único nunha actividade.';
$string['gradereported'] = 'Cualificación informada';
$string['gradescoes'] = 'Obxectos de aprendizaxe';
$string['gradesettings'] = 'Axustes da cualificación';
$string['gradesum'] = 'Cualificacións sumadas';
$string['height'] = 'Alto';
$string['hidden'] = 'Agochado';
$string['hidebrowse'] = 'Desactivar o modo de vista previa';
$string['hidebrowse_help'] = 'O modo de vista previa permite a un alumno examinar unha actividade antes de intentalo. Se o modo de vista previa está desactivado, o botón de vista previa estará agochado.';
$string['hidebrowsedesc'] = 'O modo de vista previa permite a un alumno examinar unha actividade antes de intentalo.';
$string['hideexit'] = 'Agochar a ligazón de saída';
$string['hidereview'] = 'Agochar o botón de revisión';
$string['hidetoc'] = 'Presentar a estrutura do curso no reprodutor';
$string['hidetoc_help'] = 'Como se amosa a táboa de contidos no reprodutor SCORM';
$string['hidetocdesc'] = 'Este axuste especifica como se amosa a táboa de contidos no reprodutor SCORM.M';
$string['highestattempt'] = 'Intento máis alto';
$string['identifier'] = 'Identificador de preguntas';
$string['incomplete'] = 'Incompleto';
$string['indicator:cognitivedepth'] = 'SCORM cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está baseado na profundidade cognitiva acadada polo alumno nunha actividade de SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante acadou esta porcentaxe do compromiso cognitivo que ofrecen as actividades SCORM durante este intervalo de análise (Niveis = Sen vista, Ver, Entregar, Ver comentarios)';
$string['indicator:cognitivedepthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Profundidade_cognitiva';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadth_help'] = 'Este indicador está baseado na amplitude social acadada polo alumno nunha actividade de SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'O participante acadou esta porcentaxe do compromiso social que ofrecen as actividades de SCORM durante este intervalo de análise (Niveis = Sen participación, Participante en solitario)';
$string['indicator:socialbreadthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Amplitude_social';
$string['info'] = 'Información';
$string['interactions'] = 'Interaccións';
$string['invalidactivity'] = 'A actividade SCORM é incorrecta';
$string['invalidhacpsession'] = 'Sesión HACP incorrecta';
$string['invalidmanifestname'] = 'Só se poden seleccionarse ficheiros imsmanifest.xml ou arquivos .zip';
$string['invalidmanifestresource'] = 'ADVERTENCIA: Os seguintes recursos son mencionados no manifesto, mais non é posíbel atopalos:';
$string['invalidurl'] = 'Especificouse un URL incorrecto';
$string['invalidurlhttpcheck'] = 'O URL especificado non é correcto. Depurar a mensaxe: <pre>{$a->cmsg}</pre>';
$string['last'] = 'Último acceso as';
$string['lastaccess'] = 'Último acceso';
$string['lastattempt'] = 'Último intento de completado';
$string['lastattemptlock'] = 'Bloquear após o intento final';
$string['lastattemptlock_help'] = 'Se está activado, impídeselle ao alumno iniciar o reprodutor SCORM após ter empregado todos os intentos que tiña asignados.';
$string['lastattemptlockdesc'] = 'Se está activado, impídeselle ao alumno iniciar o reprodutor SCORM após ter empregado todos os intentos que tiña asignados.';
$string['location'] = 'Amosar a barra de localización';
$string['masteryoverride'] = 'A puntuación por mestría anula o estado';
$string['masteryoverride_help'] = 'Se está activado, e se fornece unha puntuación por mestría, cando se chame a LMSFinish e se teña estabelecida unha puntuación en bruto, volverá calcularse o estado usando axuste puntuación en bruto e a puntuación por mestría; e anularase calquera estado fornecido polo SCORM (incluíndo «incompleto»).';
$string['masteryoverridedesc'] = 'Esta preferencia estabelece o valor predeterminado para o axuste da anulación por puntuación por mestría';
$string['max'] = 'Puntuación máxima';
$string['maximumattempts'] = 'Número de intentos';
$string['maximumattempts_help'] = 'Este axuste activa que o número de intentos sexa restrinxido. Isto só é aplicábel para SCORM 1.2 e paquetes AICC.';
$string['maximumattemptsdesc'] = 'Esta preferencia estabelece o valor predeterminado sobre o número máximo de intentos nunha actividade';
$string['maximumgradedesc'] = 'Esta preferencia estabelece o valor predeterminado sobre a cualificación máxima dunha actividade';
$string['menubar'] = 'Amosar a barra de menú';
$string['min'] = 'Puntuación mínima';
$string['missing_attribute'] = 'Non se atopa o atributo ({$a->attr}) na etiqueta {$a->tag}';
$string['missing_tag'] = 'Non se atopa a etiqueta {$a->tag}';
$string['missingparam'] = 'Un elemento requirido falta ou é erróneo';
$string['mode'] = 'Modo';
$string['modulename'] = 'Paquete SCORM';
$string['modulename_help'] = 'Un paquete SCORM é un conxunto de ficheiros que se empaquetan segundo unha norma acordada para os obxectos de aprendizaxe. O módulo de actividade SCORM activa os paquetes SCORM ou AICC para ser cargados como un ficheiro zip e engadilos a un curso.

O contido amosase normalmente en varias páxinas, con navegación entre as páxinas. Hai varias opcións para ver o contido nunha xanela emerxente, cun índice, con botóns navegación, etc. As actividades SCORM xeralmente inclúen preguntas, con cualificacións que se rexistran no libro de cualificacións.

As actividades de SCORM pódense utilizar

* Para a presentación de contidos multimedia e animacións
* Como unha ferramenta de avaliación';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'Paquetes SCORM';
$string['myaiccsessions'] = 'As miñas sesións AICC';
$string['myattempts'] = 'Os meus intentos';
$string['nav'] = 'Amosar a navegación';
$string['nav_help'] = 'Este axuste especifica se amosar ou agochar os botóns de navegación e as súas posicións.

Hai 3 opcións:

* Non - Non amosar os botóns de navegación
* Baixo o contido - Amosar os botóns de navegación baixo o contido do paquete SCORM
* Flotante- Os botóns de navegación amósanse flotando, coa posición dende a parte superior e dende a esquerda determinadas polo paquete.';
$string['navdesc'] = 'Este axuste especifica se amosar ou agochar os botóns de navegación e a súa posición.';
$string['navigation'] = 'Navegación';
$string['navpositionleft'] = 'Posición dos botóns de navegación dende a esquerda en píxeles.';
$string['navpositiontop'] = 'Posición dos botóns de navegación dende arriba en píxeles.';
$string['networkdropped'] = 'O reprodutor de SCORM determinou que a conexión de Internet non é estábel ou que foi interrompida. Se continúa nesta actividade SCORM, é probábel que non se garde o seu progreso.<br />
Debería de saír agora desta actividade, e volver cando teña unha conexión máis fiábel de Internet.';
$string['newattempt'] = 'Comezar un novo intento';
$string['next'] = 'Continuar';
$string['no_attributes'] = 'A etiqueta {$a->tag} debe ter atributos';
$string['no_children'] = 'A etiqueta {$a->tag} debe ter fillas';
$string['noactivity'] = 'Non hai nada que informar';
$string['noattemptsallowed'] = 'Número de intentos permitidos';
$string['noattemptsmade'] = 'Número de intentos realizados';
$string['nolimit'] = 'Intentos ilimitados';
$string['nomanifest'] = 'Non se atopou o manifesto';
$string['noprerequisites'] = 'Vaites, vostede non ten os requisitos previos para acceder a este obxecto de aprendizaxe';
$string['noreports'] = 'Non hai informes que presentar';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'O seu navegador non admite JavaScript, ou ten a opción JavaScript desactivada. Este paquete SCORM non pode reproducir ou gardar os datos correctamente.';
$string['not_corr_type'] = 'Non coincide o tipo para a etiqueta {$a->tag}';
$string['notattempted'] = 'Non intentada';
$string['notopenyet'] = 'Vaites, esta actividade non está dispoñíbel ata {$a}';
$string['objectives'] = 'Obxectivos';
$string['openafterclose'] = 'Especificou unha data aberta após a data de remate';
$string['optallstudents'] = 'todos os usuarios';
$string['optattemptsonly'] = 'só usuarios con intentos';
$string['options'] = 'Opcións (non admitidas por algúns navegadores)';
$string['optionsadv'] = 'Opcións (Avanzadas)';
$string['optionsadv_desc'] = 'Se está marcada, a xanela de opcións estabelecese como axustes avanzados no formulario';
$string['optnoattemptsonly'] = 'só usuarios sen intentos';
$string['organization'] = 'Organización';
$string['organizations'] = 'Organizacións';
$string['othersettings'] = 'Axustes adicionais';
$string['package'] = 'Ficheiro de paquete';
$string['package_help'] = 'O ficheiro de paquete é un arquivo zip (ou pif) que contén ficheiros de definición do curso SCORM/AICC.';
$string['packagedir'] = 'Erro do sistema de ficheiros: Non é posíbel crear o directorio de paquetes';
$string['packagefile'] = 'Non especificou ningún ficheiro de paquete';
$string['packagehdr'] = 'Paquete';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Este axuste activa un URL para especificar o paquete SCORM no canto de escoller un ficheiro a través do selector de ficheiros.';
$string['page-mod-scorm-x'] = 'Calquera páxina do módulo SCORM';
$string['pagesize'] = 'Tamaño da páxina';
$string['passed'] = 'Aprobado';
$string['php5'] = 'PHP 5 (biblioteca nativa DOMXML)';
$string['pluginadministration'] = 'Administración SCORM/AICC';
$string['pluginname'] = 'Paquete SCORM';
$string['popup'] = 'Nova xanela';
$string['popuplaunched'] = 'Este paquete SCORM foi iniciado dentro dunha xanela emerxente; se xa rematou de ver este recurso, prema aquí para volver á páxina do curso.';
$string['popupmenu'] = 'Nun menú despregábel';
$string['popupopen'] = 'Abrir o paquete nunha xanela nova';
$string['popupsblocked'] = 'Semella que están bloqueadas as xanelas emerxentes, detendo a execución deste módulo SCORM. Comprobe a configuración do navegador antes de comezar de novo.';
$string['position_error'] = 'A etiqueta {$a->tag} non pode ser filla da etiqueta {$a->parent}';
$string['preferencespage'] = 'Preferencias só para esta páxina';
$string['preferencesuser'] = 'Preferencias para este informe';
$string['prev'] = 'Anterior';
$string['privacy:metadata:aicc:data'] = 'Datos persoais pasados a mediante o subsistema AICC / SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Este engadido envía datos externamente utilizando o AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'O estado da lección a seguir';
$string['privacy:metadata:aicc_session:scormmode'] = 'O modo do elemento a seguir';
$string['privacy:metadata:aicc_session:scormstatus'] = 'O estado do elemento a seguir';
$string['privacy:metadata:aicc_session:sessiontime'] = 'O momento da sesión a seguir';
$string['privacy:metadata:aicc_session:timecreated'] = 'O momento en que se creou o elemento a seguir';
$string['privacy:metadata:attempt'] = 'O número do intento';
$string['privacy:metadata:scoes_track:element'] = 'O nome do elemento a seguir';
$string['privacy:metadata:scoes_track:value'] = 'O valor do elemento dado';
$string['privacy:metadata:scorm_aicc_session'] = 'A información da sesión do AACC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'Os datos de seguimento dos SCOes que pertencen á actividade';
$string['privacy:metadata:timemodified'] = 'O momento no que se modificou por última vez o elemento seguido';
$string['privacy:metadata:userid'] = 'O ID do usuario que accedeu á actividade SCORM';
$string['protectpackagedownloads'] = 'Protexer descargas de paquetes';
$string['protectpackagedownloads_desc'] = 'Se o activa, os paquetes SCORM soamente poden ser descargados se o usuario ten o permiso course:manageactivities. Se o desactiva, os paquetes SCORM sempre poden descargarse (por dispositivo móbil ou outro método).';
$string['raw'] = 'Puntuación en bruto';
$string['regular'] = 'Manifesto normal';
$string['report'] = 'Informe';
$string['reportcountallattempts'] = '{$a->nbattempts} intentos de {$a->nbusers} usuarios, dun total de {$a->nbresults} resultados';
$string['reportcountattempts'] = '{$a->nbresults} resultados ({$a->nbusers} users)';
$string['reports'] = 'Informes';
$string['repositorynotsupported'] = 'Sé se admiten repositorios de sistemas de ficheiro ao ligalos directamente a un ficheiro imsmanifest.xml.';
$string['response'] = 'Resposta';
$string['result'] = 'Resultado';
$string['results'] = 'Resultados';
$string['review'] = 'Revisar';
$string['reviewmode'] = 'Modo revisión';
$string['rightanswer'] = 'Resposta correcta';
$string['scoes'] = 'Obxectos de aprendizaxe';
$string['score'] = 'Puntuación';
$string['scorm:addinstance'] = 'Engadir un paquete novo de SCORM';
$string['scorm:deleteownresponses'] = 'Eliminar os seus intentos';
$string['scorm:deleteresponses'] = 'Eliminar intentos SCORM';
$string['scorm:savetrack'] = 'Gardar seguimentos';
$string['scorm:skipview'] = 'Omitir a vista xeral';
$string['scorm:viewreport'] = 'Ver informes';
$string['scorm:viewscores'] = 'Ver puntuacións';
$string['scormclose'] = 'Dispoñíbel para';
$string['scormcourse'] = 'Curso de aprendizaxe';
$string['scormloggingoff'] = 'Acceso ao API desconectado';
$string['scormloggingon'] = 'Acceso ao API conectado';
$string['scormopen'] = 'Dispoñíbel dende';
$string['scormresponsedeleted'] = 'Eliminados os intentos do usuario';
$string['scormstandard'] = 'Modo de estándares SCORM';
$string['scormstandarddesc'] = 'Cando está desactivado, Moodle permite que os paquetes de SCORM 1.2 almacenen máis que a especificación que permite e utiliza o axuste do formato de nome completo de Moodle ao pasar o nome do usuario ao paquete SCORM.';
$string['scormtype'] = 'Tipo';
$string['scormtype_help'] = 'Este axuste determina como se inclúe o paquete no el curso. Hai 4 opcións:

* Paquete enviado - Posibilita escoller un paquete SCORM por medio do selector de ficheiros
* Manifesto SCORM externo - Posibilita especificar un URL imsmanifest.xml. Nota: Se o URL ten un nome de dominio distinto do seu sitio, entón a mellor opción é «Paquete descargado», xa que noutro caso as cualificacións non son gardadas.
* Paquete descargado - Posibilita especificar un URL do paquete. O paquete será descomprimido e gardado localmente, e actualizado cando se actualice o paquete SCORM externo.
* URL AICC externo - Este URL é o URL de inicio para unha soa actividade AICC. Construirase un pseudo paquete arredor del.';
$string['scrollbars'] = 'Permitir o desprazamento na xanela';
$string['search:activity'] = 'Paquete SCORM, información de actividade';
$string['selectall'] = 'Seleccionar todo';
$string['selectnone'] = 'Desmarcar todo';
$string['show'] = 'Amosar';
$string['sided'] = 'Lateral';
$string['skipview'] = 'Omitir para o alumno a páxina de estrutura de contidos';
$string['skipview_help'] = 'Este axuste especifica se a páxina de estrutura de contido nunca debe ser omitido (non se presenta). Se o paquete contén só un obxecto de aprendizaxe, a páxina de estrutura de contidos pódese omitir sempre.';
$string['skipviewdesc'] = 'Esta preferencia estabelece o valor predeterminado sobre cando omitir a estrutura do contido dunha páxina';
$string['slashargs'] = 'ADVERTENCIA: os argumentos «slash» (barrados) están desactivados neste sitio e é probábel que os obxectos non se comporten como se agarda.';
$string['stagesize'] = 'Tamaño da etapa';
$string['stagesize_help'] = 'Estes dous axustes definen a altura e a largura do marco ou xanela do obxecto de aprendizaxe.</p>';
$string['started'] = 'Arrancado o';
$string['status'] = 'Estado';
$string['statusbar'] = 'Amosar a barra de estado';
$string['student_response'] = 'Resposta';
$string['subplugintype_scormreport'] = 'Informe';
$string['subplugintype_scormreport_plural'] = 'Informes';
$string['suspended'] = 'Suspendido';
$string['syntax'] = 'Erro de sintaxe';
$string['tag_error'] = 'Etiqueta descoñecida ({$a->tag}) con este contido: {$a->value}';
$string['time'] = 'Hora';
$string['title'] = 'Título';
$string['toc'] = 'Índice';
$string['too_many_attributes'] = 'A etiqueta {$a->tag} ten atributos de máis';
$string['too_many_children'] = 'A etiqueta {$a->tag} ten fillos de máis';
$string['toolbar'] = 'Amosar a barra de ferramentas';
$string['totaltime'] = 'Hora';
$string['trackcorrectcount'] = 'Número correcto';
$string['trackcorrectcount_help'] = 'Número de resultados correctos para a pregunta';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Este é o identificador configurado polo seu paquete SCORM para esta pregunta, a especificación SCORM non permite que se forneza o texto completo da pregunta.';
$string['trackingloose'] = 'ADVERTENCIA: Os datos de seguimento deste paquete perderanse!';
$string['tracklatency'] = 'Latencia';
$string['tracklatency_help'] = 'Tempo transcorrido entre o momento en que se pon <br />a interacción a disposición do alumno para <br />responder e o momento da primeira resposta';
$string['trackpattern'] = 'Patrón';
$string['trackpattern_help'] = 'Así é como sería unha resposta correcta para esta pregunta, non amosa a resposta do alumno.';
$string['trackresponse'] = 'Resposta';
$string['trackresponse_help'] = 'Esta é a resposta do alumno para esta pregunta';
$string['trackresult'] = 'Resultado';
$string['trackresult_help'] = 'Resultado baseado na resposta do alumno e no resultado correcto';
$string['trackscoremax'] = 'Puntuación máxima';
$string['trackscoremax_help'] = 'Valor máximo no intervalo de puntuación en bruto';
$string['trackscoremin'] = 'Puntuación mínima';
$string['trackscoremin_help'] = 'Valor mínimo no intervalo de puntuación en bruto';
$string['trackscoreraw'] = 'Puntuación en bruto';
$string['trackscoreraw_help'] = 'Número que reflicte o resultado do alumno en relación co intervalo delimitado polos valores de mínimo e máximo';
$string['tracksuspenddata'] = 'Suspender os datos';
$string['tracksuspenddata_help'] = 'Fornece un espazo para almacenar e recuperar datos entre sesións de aprendizaxe';
$string['tracktime'] = 'Hora';
$string['tracktime_help'] = 'Hora na que se iniciou o intento';
$string['tracktype'] = 'Tipo';
$string['tracktype_help'] = 'Tipo da pregunta, por exemplo «escolla múltiple» ou «resposta curta».';
$string['trackweight'] = 'Ponderación';
$string['trackweight_help'] = 'Ponderación asignada á pregunta ao calcular a puntuación.';
$string['type'] = 'Tipo';
$string['typeaiccurl'] = 'URL AICC externo';
$string['typeexternal'] = 'Manifiesto SCORM externo';
$string['typelocal'] = 'Paquete enviado';
$string['typelocalsync'] = 'Paquete descargado';
$string['undercontent'] = 'Baixo o contido';
$string['unziperror'] = 'Produciuse un erro durante a descompresión do paquete';
$string['updatefreq'] = 'Frecuencia de actualización automática';
$string['updatefreq_error'] = 'A frecuencia de actualización automática só pode configurarse cando o ficheiro do paquete está aloxado externamente.';
$string['updatefreq_help'] = 'Isto permite que o paquete externo poida ser descargado e actualizado automaticamente';
$string['updatefreqdesc'] = 'Esta preferencia estabelece o valor predeterminado sobre a frecuencia de actualización automática dunha actividade';
$string['validateascorm'] = 'Validar un paquete';
$string['validation'] = 'Resultado da validación';
$string['validationtype'] = 'Esta preferencia estabelece que sexa empregada a biblioteca DOMXML para validar un Manifesto SCORM. Se ten dúbidas, deixe a opción seleccionada.';
$string['value'] = 'Valor';
$string['versionwarning'] = 'A versión do manifesto é anterior á 1.3, coa advertencia da etiqueta {$a->tag}';
$string['viewallreports'] = 'Ver informes para {$a} intentos';
$string['viewalluserreports'] = 'Ver os informes de {$a} usuarios';
$string['whatgrade'] = 'Intentos de cualificación';
$string['whatgrade_help'] = 'De se permitir intentos múltiples, este axuste especifica se o máis alto, o medio (media), o primeiro ou o último intento completado son o rexistrado no libro de cualificacións. A opción do último intento completado non inclúe intentos cun estado «suspenso».

Notas sobre a manipulación de varios intentos:

* A opción de iniciar un novo intento fornécese mediante unha caixa enriba do botón Intro na páxina de estrutura de contidos, para que asegúrese de estar dando acceso a esta páxina, se quere permitir máis de un intento.
* Algúns paquetes SCORM son intelixentes sobre os novos intentos, non son moitos. O que isto significa é que, se o alumno reintroduce un intento anterior, se o contido SCORM non ten lóxica interna para evitar a substitución de intentos anteriores poden ser sobrescritos, aínda que o intento fose «completado» ou «aprobado».
* Os axustes «Forzar o completado», «Forzar un novo intento» e «Bloqueo tras intento final» tamén facilitaran aínda máis a xestión de varios intentos.';
$string['whatgradedesc'] = 'Se o máximo, o medio, o primeiro ou último intento completado se rexistra na axenda de cualificación se se permiten múltiples intentos.';
$string['width'] = 'Largo';
$string['window'] = 'Xanela';
$string['youmustselectastatus'] = 'Debe seleccionar un estado a requirir';
