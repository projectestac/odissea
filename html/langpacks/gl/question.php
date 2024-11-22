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
 * Strings for component 'question', language 'gl', version '4.1'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['addanotherhint'] = 'Engadir outra pista';
$string['addcategory'] = 'Engadir categoría';
$string['addmorechoiceblanks'] = 'En branco para {no} escollas máis';
$string['adminreport'] = 'Informe sobre posíbeis problemas na súa base de datos de preguntas.';
$string['advancedsearchoptions'] = 'Opcións de busca';
$string['alltries'] = 'Todos os intentos';
$string['answer'] = 'Resposta';
$string['answers'] = 'Respostas';
$string['answersaved'] = 'Resposta gardada';
$string['answerx'] = 'Resposta {$a}';
$string['attemptfinished'] = 'Intento finalizado';
$string['attemptfinishedsubmitting'] = 'Rematou o intento de envío: {$a}';
$string['attemptoptions'] = 'Opcións do intento';
$string['availableq'] = 'Dispoñíbel?';
$string['badbase'] = 'Base mala antes de que **: {$a}**';
$string['behaviour'] = 'Comportamento';
$string['behaviourbeingused'] = 'Comportamento utilizado: {$a}';
$string['broken'] = 'É unha "ligazón rota", indica un ficheiro inexistente.';
$string['byandon'] = 'por <em>{$a->user}</em> en <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Non se puido copiar o ficheiro da copia de seguranza';
$string['cannotcreate'] = 'Non se puido crear unha nova entrada na táboa question_attempts';
$string['cannotcreatepath'] = 'Non se puido crear a ruta: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Non pode eliminar o comportamento «{$a}». Úsase para intentos de preguntas.';
$string['cannotdeletecate'] = 'Non pode eliminar esa categoría porque é a categoría predeterminada para este contexto.';
$string['cannotdeleteneededbehaviour'] = 'Non pode eliminar o comportamento da pregunta «{$a}». Hai outros comportamentos instalados que dependen del.';
$string['cannotdeleteqtypeinuse'] = 'Non pode eliminar o tipo de pregunta «{$a}». Hai preguntas deste tipo no banco de preguntas.';
$string['cannotdeleteqtypeneeded'] = 'Non pode eliminar o tipo de pregunta «{$a}». Hai outros tipos de preguntas instalados que dependen del.';
$string['cannotdeletetopcat'] = 'Non se poden eliminar as principais categorías.';
$string['cannotedittopcat'] = 'Non se poden editar as principais categorías.';
$string['cannotenable'] = 'Non se pode crear directamente o tipo de pregunta {$a}.';
$string['cannotenablebehaviour'] = 'Non se pode usar directamente o tipo de comportamento {$a}. Soamente para uso interno.';
$string['cannotfindcate'] = 'Non se puido atopar o rexistro da categoría';
$string['cannotfindquestionfile'] = 'Non se pode atopar o ficheiro de datos da pregunta en zip';
$string['cannotgetdsfordependent'] = 'Non se pode obter o conxunto de datos especificado para un conxunto de datos dependente da pregunta! (pregunta: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Non se pode obter o conxunto de datos especificado para unha pregunta calculada! (pregunta: {$a})';
$string['cannothidequestion'] = 'Non foi quen de agochar a pregunta';
$string['cannotimportformat'] = 'Vaites, a importación deste formato aínda non está incluída!';
$string['cannotinsertquestion'] = 'Non foi posíbel inserir unha nova pregunta!';
$string['cannotinsertquestioncatecontext'] = 'Non foi posíbel inserir a nova categoría da pregunta {$a->cat} por ter id de contexto anormal {$a->ctx}';
$string['cannotloadquestion'] = 'Non foi posíbel cargar a pregunta';
$string['cannotmovequestion'] = 'Non é posíbel usar este script para mover preguntas que teñen ficheiros asociados con eles de diferentes áreas.';
$string['cannotopenforwriting'] = 'Non é posíbel abrir para escribir: {$a}';
$string['cannotpreview'] = 'Non é posíbel facer unha vista previa destas preguntas!';
$string['cannotread'] = 'Non é posíbel ler o ficheiro de importación (ou o ficheiro está baleiro)';
$string['cannotregradedifferentqtype'] = 'Non é posíbel volver cualificar unha pregunta doutro tipo.';
$string['cannotretrieveqcat'] = 'Non foi posíbel recuperar a categoría da pregunta';
$string['cannotunhidequestion'] = 'Produciuse un fallo ao volver amosar a pregunta.';
$string['cannotunzip'] = 'Non foi posíbel descomprimir o ficheiro.';
$string['cannotwriteto'] = 'Non é posíbel escribir as preguntas exportadas a {$a}';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categorycurrent'] = 'Categoría actual';
$string['categorycurrentuse'] = 'Usar esta categoría';
$string['categorydoesnotexist'] = 'Esta categoría non existe';
$string['categoryinfo'] = 'Info da categoría';
$string['categorymove'] = 'A categoría «{$a->name}» contén {$a->count} preguntas (algunhas das cales poden ser preguntas agochadas ou preguntas ao chou que aínda se usan nunha proba). Escolla outra categoría á cal movelas.';
$string['categorymoveto'] = 'Gardar na categoría';
$string['categorynamecantbeblank'] = 'O nome da categoría non se pode deixar en branco.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Cambiar opcións';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">A categoría «{$a->name}»</a> no curso «{$a->coursename}» cambiará o seu estado de compartición dende {$a->changefrom} a {$a->changeto}.';
$string['check'] = 'Comprobar';
$string['chooseqtypetoadd'] = 'Escolla o tipo de pregunta que engadir';
$string['clearwrongparts'] = 'Despexar respostas incorrectas';
$string['clickflag'] = 'Marcar a pregunta';
$string['clicktoflag'] = 'Marcar esta pregunta para referencia futura';
$string['clicktounflag'] = 'Retirar o marcador';
$string['clickunflag'] = 'Retirar o marcador';
$string['closepreview'] = 'Pechar a vista previa';
$string['combinedfeedback'] = 'Comentario combinado';
$string['comment'] = 'Comentario';
$string['commented'] = 'Comentado: {$a}';
$string['commentormark'] = 'Facer comentario ou anular a marca';
$string['comments'] = 'Comentarios';
$string['commentx'] = 'Comentar: {$a}';
$string['complete'] = 'Completa';
$string['contexterror'] = 'Non debería ter chegado aquí se non estivese movendo unha categoría a outro contexto.';
$string['copy'] = 'Copia de {$a} e cambiar ligazóns.';
$string['correct'] = 'Correcto';
$string['correctfeedback'] = 'Cada resposta correcta';
$string['correctfeedbackdefault'] = 'A súa resposta é correcta.';
$string['created'] = 'Creada';
$string['createdby'] = 'Creada por';
$string['createdmodifiedheader'] = 'Creada / última gardada';
$string['createnewquestion'] = 'Crear unha nova pregunta ...';
$string['cwrqpfs'] = 'Preguntas aleatorias seleccionando preguntas de subcategorías.';
$string['cwrqpfsinfo'] = '<p>Durante a actualización a Moodle 1.9 separaremos categorías de preguntas en diferentes contextos.
Nalgunhas categorías de preguntas do seu sitio terá que cambiarse o seu estado de compartición. Isto é necesario no
caso raro de que unha ou máis preguntas «ao chou» compartidas dunha proba estean configuradas para se seleccionar de
entre unha mestura de
categorías compartidas e non compartidas (como é o caso deste sitio). Isto sucede cando unha pregunta «ao chou» está
configurada para seleccionar de entre subcategorías e unha ou máis subcategorías teñen diferente estado de compartición respecto da categoría pai na cal a pregunta aleatoria se crea.</p>
<p>As seguintes categorías de preguntas, de entre as que veñen as preguntas «ao chou» nas categorías pai, cambiarán
o seu estado de compartición ao mesmo estado de compartición que a categoría que teña a pregunta «ao chou» teña na
actualización a Moodle 1.9. As seguintes categorías cambiarán o seu estado de compartición. As preguntas afectadas
continuarán a funcionar en calquera das probas existentes ata que as retire desas probas.</p>';
$string['cwrqpfsnoprob'] = 'Non hai categorías de preguntas afectadas no seu sitio polo problema de «Preguntas ao chou que seleccionan preguntas de subcategorías».';
$string['decimalplacesingrades'] = 'Posicións decimais nas cualificacións';
$string['defaultfor'] = 'Predeterminado/a para: {$a}';
$string['defaultinfofor'] = 'A categoría predeterminada para preguntas compartidas no contexto «{$a}».';
$string['defaultmark'] = 'Puntuación predeterminada';
$string['defaultmarkmustbepositive'] = 'A puntuación predeterminada debe ser positiva.';
$string['deletecoursecategorywithquestions'] = 'Hai preguntas no banco de preguntas asociadas con esta categoría de curso. De proseguir, eliminaranse. Pode querer movelas primeiro, usando a interface do banco de preguntas.';
$string['deletequestioncheck'] = 'Confirma definitivamente que quere eliminar «{$a}»?';
$string['deletequestionscheck'] = 'Confirma definitivamente que quere eliminar as seguintes preguntas?<br /><br />{$a}';
$string['deletequestiontitle'] = 'Eliminar a pregunta?';
$string['deletequestiontitle_plural'] = 'Eliminar as preguntas?';
$string['deleteselectedquestioncheck'] = 'Isto eliminará as versións seleccionadas da seguinte pregunta:<br /><br />{$a}';
$string['deleteversiontitle'] = 'Eliminar a versión seleccionada?';
$string['deleteversiontitle_plural'] = 'Eliminar as versións seleccionadas?';
$string['deletingbehaviour'] = 'Eliminando o comportamento de pregunta «{$a}»';
$string['deletingqtype'] = 'Eliminado o tipo de pregunta «{$a}»';
$string['didnotmatchanyanswer'] = '[Non coincide ningunha resposta]';
$string['disabled'] = 'Desactivado';
$string['displayoptions'] = 'Opcións de presentación:';
$string['disterror'] = 'A distribución {$a} causou problemas';
$string['donothing'] = 'Non copiar nin mover ficheiros nin cambiar ligazóns.';
$string['editcategories'] = 'Editar categorías';
$string['editcategories_help'] = 'Mellor que gardalo todo nunha gran lista, as preguntas pódense colocar en categorías e subcategorías.

Cada categoría ten un contexto que determina onde se poden usar as preguntas na categoría:

* Contexto da actividade - As preguntas soamente están dispoñíbeis no módulo da actividade
* Contexto do curso - As preguntas están dispoñíbeis en todos os módulos do curso.
* Contexto de categoría do curso - As preguntas están dispoñíbeis en todos os módulos de actividade e cursos na categoría do curso
* Contexto do sistema - As preguntas están dispoñíbeis en todos os cursos e actividades do sitio

As categorías úsanse tamén para preguntas aleatorias, as preguntas selecciónanse dunha categoría particular.';
$string['editcategories_link'] = 'pregunta/categoría';
$string['editcategory'] = 'Editar categoría';
$string['editingcategory'] = 'Edición dunha categoría';
$string['editingquestion'] = 'Edición dunha pregunta';
$string['editquestion'] = 'Editar a pregunta';
$string['editquestions'] = 'Edición de preguntas';
$string['editthiscategory'] = 'Editar esta categoría';
$string['emptyxml'] = 'Erro descoñecido: imsmanifest.xml está baleiro';
$string['enabled'] = 'Activado';
$string['erroraccessingcontext'] = 'Non se pode acceder ao contexto';
$string['errordeletingquestionsfromcategory'] = 'Produciuse un erro ao eliminar preguntas da categoría {$a}.';
$string['errorduringpost'] = 'Produciuse un erro durante o postprocesamento!';
$string['errorduringpre'] = 'Produciuse un erro durante o pre-procesamento!';
$string['errorduringproc'] = 'Produciuse un erro durante o procesamento!';
$string['errorduringregrade'] = 'Non foi posíbel recualificar a pregunta {$a->qid}, estabelecendo o estado {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Erro: non é posíbel copiar o ficheiro {$a}.';
$string['errorfilecannotbemoved'] = 'Erro: non é posíbel mover o ficheiro {$a}.';
$string['errorfileschanged'] = 'Erro: os ficheiros están ligados a preguntas que cambiaron dende que se presentou o formulario.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'A pregunta ({$a}) aparece máis dunha vez con diferentes ponderacións en diferentes posición da proba. Actualmente isto no está admitido no informe de estatísticas e pode facer que as estatísticas para esta pregunta non sexan fiábeis.';
$string['errormanualgradeoutofrange'] = 'A cualificación {$a->grade} non está entre 0 e {$a->maxgrade} para a pregunta {$a->name}. A puntuación e o comentario non se gardaron.';
$string['errormovingquestions'] = 'Produciuse un erro ao mover preguntas con estes id {$a}.';
$string['errorpostprocess'] = 'Produciuse un erro durante o postprocesamento!';
$string['errorpreprocess'] = 'Produciuse un erro durante o pre-procesamento!';
$string['errorprocess'] = 'Produciuse un erro durante o procesamento!';
$string['errorprocessingresponses'] = 'Produciuse un erro ao procesar as súas respostas ({$a}). Prema en continuar para volver á páxina onde estivo e intentalo outra vez.';
$string['errorsavingcomment'] = 'Produciuse un erro ao gardar o comentario da pregunta {$a->name} na base de datos.';
$string['errorsavingflags'] = 'Produciuse un erro ao gardar o marcador de estado';
$string['errorupdatingattempt'] = 'Produciuse un erro ao actualizar o intento {$a->id} na base de datos.';
$string['eventquestioncategorycreated'] = 'Creouse a categoría de pregunta';
$string['eventquestioncategorydeleted'] = 'Eliminouse a categoría de pregunta';
$string['eventquestioncategorymoved'] = 'Moveuse a categoría de pregunta';
$string['eventquestioncategoryupdated'] = 'Actualizouse a categoría de pregunta';
$string['eventquestioncategoryviewed'] = 'Viuse a categoría de pregunta';
$string['eventquestioncreated'] = 'Creouse a pregunta';
$string['eventquestiondeleted'] = 'Pregunta eliminada';
$string['eventquestionmoved'] = 'Pregunta movida';
$string['eventquestionsexported'] = 'Preguntas exportadas';
$string['eventquestionsimported'] = 'Preguntas importadas';
$string['eventquestionupdated'] = 'Pregunta actualizada';
$string['eventquestionviewed'] = 'Pregunta vista';
$string['export'] = 'Exportar';
$string['exportasxml'] = 'Exportar como XML de Moodle';
$string['exportcategory'] = 'Exportar categoría';
$string['exportcategory_help'] = 'Este axuste determina a categoría da que se tomarán as preguntas para exportar.

Certos formatos de importación, tales como GIFT e XML de Moodle, permiten que se inclúan a categoría e os datos de contexto no ficheiro de exportación, activándoos para (opcionalmente) ser recreados ou importados. De se requirir, as caixas de selección apropiadas deberían ser marcadas.';
$string['exporterror'] = 'Producíronse erros na exportación!';
$string['exportfilename'] = 'preguntas';
$string['exportnameformat'] = '%d/%m/%Y-%H:%M';
$string['exportonequestion'] = 'Descargar esta pregunta no formato XML de Moodle';
$string['exportquestions'] = 'Exportar preguntas no ficheiro';
$string['exportquestions_help'] = 'Esta función activa a exportación dunha categoría completa (e calquera subcategoría) de preguntas no ficheiro. Note que, consonte o formato de ficheiro seleccionado, algúns datos de preguntas e certos tipos de preguntas pode ser que non se exporten.';
$string['exportquestions_link'] = 'pregunta/exportar';
$string['feedback'] = 'Comentarios';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = 'Os ficheiros das preguntas non se poden mover porque non ten permiso para retirar ficheiros do lugar dende onde está intentando mover preguntas.';
$string['filecantmoveto'] = 'Os ficheiros de preguntas non se poden mover nin copiar porque non ten permiso para engadir ficheiros ao lugar a onde está intentando mover as preguntas.';
$string['fileformat'] = 'Formato de ficheiro';
$string['filesareacourse'] = 'a área de ficheiros do curso';
$string['filesareasite'] = 'a área de ficheiros do sitio';
$string['filestomove'] = 'Mover / copiar ficheiros a {$a}?';
$string['fillincorrect'] = 'Cubrir nas respostas correctas';
$string['filterbytags'] = 'Filtrar por etiquetas...';
$string['firsttry'] = 'Primeiro intento';
$string['flagged'] = 'Marcado';
$string['flagthisquestion'] = 'Marcar esta pregunta';
$string['formquestionnotinids'] = 'Formulario contido en pregunta que non está nos id de preguntas';
$string['fractionsnomax'] = 'Unha das respostas debería de ter unha puntuación de 100% de modo que sexa posíbel obter puntuacións completas nesta pregunta.';
$string['generalfeedback'] = 'Comentarios xerais';
$string['generalfeedback_help'] = 'Os comentarios xerais amósanselle ao alumno após que eles completaren a pregunta. Ao contrario do comentario específico, que depende do tipo de pregunta e da resposta que o alumno dese, amósase o mesmo texto de comentario xeral a todos os alumnos.

Pode usar o comentario xeral para darlles aos alumnos unha resposta totalmente traballada e quizais unha ligazón para obteren máis información que poidan usar se non comprenden as preguntas.';
$string['getcategoryfromfile'] = 'Obter a categoría do ficheiro';
$string['getcontextfromfile'] = 'Obter o contexto do ficheiro';
$string['hintn'] = 'Aviso {no}';
$string['hintnoptions'] = 'Opcións do consello {no}';
$string['hinttext'] = 'Aviso de texto';
$string['howquestionsbehave'] = 'Como se comportan as preguntas';
$string['howquestionsbehave_help'] = 'Os alumnos poden interactuar coas preguntas na proba de varias maneira diferentes. Por exemplo, pode querer que os alumnos introduzan unha resposta para cadansúa pregunta e logo entregar a proba enteira, antes de que cualificar nada ou de que eles teñan comentarios. Iso poderiamos chamalo modo de «Comentario diferido».

Alternativamente, pode querer que os alumnos entreguen cada pregunta así como vaian avanzando para obter comentarios inmediatos e se non o conseguen facer correctamente, que teñan outro intento cunha puntuación menor. Iso poderiamos chamalo modo «Interactivo con múltiples intentos».

Eses son probabelmente os dous modos máis comúns de comportamento usados.';
$string['howquestionsbehave_link'] = 'Comportamento das preguntas';
$string['idnumber'] = 'Número ID';
$string['idnumber_help'] = 'Se se usa, o número de identificación debe ser único dentro de cada categoría de pregunta. Ofrece outro xeito de identificar unha pregunta que ás veces é útil, pero normalmente pódese deixar en branco.';
$string['ignorebroken'] = 'Ignorar ligazóns rotas';
$string['import'] = 'Importar';
$string['importcategory'] = 'Importar categoría';
$string['importcategory_help'] = 'Este axuste determina a categoría dentro da cal se poñerán as preguntas importadas.

Certos formatos de importación, tales como GIFT e XML de Moodle, poden incluír categoría e datos contextuais no ficheiro de importación. Para facer uso destes datos, antes ca a categoría seleccionada, as caixas de selección apropiadas deberían marcarse. De non existiren as categorías especificadas no ficheiro de importación, crearanse.';
$string['importerror'] = 'Produciuse un erro durante o proceso da importación';
$string['importerrorquestion'] = 'Produciuse un erro ao importar a pregunta';
$string['importfromcoursefiles'] = '... ou escolla un ficheiro de curso que importar.';
$string['importfromupload'] = 'Seleccionar un ficheiro que enviar ...';
$string['importingquestions'] = 'Importando {$a} preguntas do ficheiro';
$string['importparseerror'] = 'Atopáronse erro(s) ao procesar o ficheiro de importación. Non se importou ningunha pregunta. Para importar algunhas preguntas boas inténteo outra vez co axuste «Alto no erro» como «Non»';
$string['importquestions'] = 'Importar preguntas do ficheiro';
$string['importquestions_help'] = 'Esta función activa preguntas nunha variedade de formatos que importar mediante un ficheiro de texto. Note que o ficheiro debe de usar a codificación UTF-8.';
$string['importquestions_link'] = 'pregunta/importar';
$string['importwrongfileencoding'] = 'O ficheiro que seleccionou non usa a codificación de caracteres UTF-8. Os ficheiros {$a} deben usar UTF-8.';
$string['importwrongfiletype'] = 'O tipo de ficheiro que seleccionou ({$a->actualtype}) non coincide co tipo esperado por este formato de importación ({$a->expectedtype}).';
$string['impossiblechar'] = 'Detectouse o carácter imposíbel {$a} como carácter de paréntese';
$string['includesubcategories'] = 'Amosar tamén preguntas de subcategorías';
$string['incorrect'] = 'Incorrecto';
$string['incorrectfeedback'] = 'Para cada resposta incorrecta';
$string['incorrectfeedbackdefault'] = 'A súa resposta é incorrecta.';
$string['information'] = 'Información';
$string['invalidanswer'] = 'Resposta incompleta';
$string['invalidarg'] = 'Non se forneceron argumentos válidos ou a configuración do servidor non é correcta';
$string['invalidcategoryidforparent'] = 'O id da categoría é incorrecto para ese pai!';
$string['invalidcategoryidtomove'] = 'O id da categoría é incorrecto para movela!';
$string['invalidconfirm'] = 'A cadea de confirmación era incorrecta';
$string['invalidcontextinhasanyquestions'] = 'O contexto pasado a question_context_has_any_questions é incorrecto.';
$string['invalidgrade'] = 'As cualificacións ({$a}) non coinciden coas opcións cualificación; omítese a pregunta.';
$string['invalidpenalty'] = 'Penalización incorrecta';
$string['invalidwizardpage'] = 'Ou é incorrecta ou non se especificou un asistente de páxina!';
$string['lastmodifiedby'] = 'Última modificación de';
$string['lasttry'] = 'Último intento';
$string['linkedfiledoesntexist'] = 'O ficheiro ligado {$a} non existe';
$string['makechildof'] = 'Facer fillo de «{$a}»';
$string['makecopy'] = 'Facer copia';
$string['maketoplevelitem'] = 'Mover ao nivel superior';
$string['manualgradeinvalidformat'] = 'Isto non é un número válido.';
$string['manualgradeoutofrange'] = 'Esta cualificación está alén do intervalo correcto.';
$string['manuallygraded'] = 'Cualificado manualmente {$a->mark} co comentario: {$a->comment}';
$string['mark'] = 'Puntuación';
$string['markedoutof'] = 'Puntuado sobre';
$string['markedoutofmax'] = 'Puntuado sobre {$a}';
$string['markoutofmax'] = 'Puntuación: {$a->mark} sobre {$a->max}';
$string['marks'] = 'Puntuacións';
$string['matchgrades'] = 'Coincidir cualificacións';
$string['matchgrades_help'] = 'As cualificacións importadas teñen que coincidir cun da lista fixada de cualificacións válidas - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (tamén valores negativos). Se non, hai dúas opcións:

* Prodúcese un erro se a cualificación non está listada - Se unha pregunta contén calquera cualificación non atopada na lista amósase un erro e infórmase de que a pregunta non se importará
* A cualificación máis próxima non se lista - Se unha cualificación non coincide cun valor na lista, a cualificación cámbiase ao valor coincidente máis próximo da lista';
$string['matchgradeserror'] = 'Prodúcese un erro se a cualificación non está listada';
$string['matchgradesnearest'] = 'Cualificación máis próxima se non está listada';
$string['missingcourseorcmid'] = 'É necesario fornecer o id do curso ou cmid para imprimir a pregunta.';
$string['missingcourseorcmidtolink'] = 'É necesario fornecer o id do curso ou cmig para get_question_edit_link.';
$string['missingimportantcode'] = 'Este tipo de pregunta carece de código importante: {$a}.';
$string['missingoption'] = 'Faltan as opcions da pregunta máis próxima {$a}';
$string['modified'] = 'Último gardado';
$string['move'] = 'Mover dende {$a} e cambiar ligazóns.';
$string['movecategory'] = 'Mover categoría';
$string['movedquestionsandcategories'] = 'Mover preguntas e categorías de preguntas dende {$a->oldplace} a {$a->newplace}.';
$string['movelinksonly'] = 'Soamente cambiar onde as ligazóns apuntan, non mover nin copiar ficheiros.';
$string['moveq'] = 'Mover pregunta(s)';
$string['moveqtoanothercontext'] = 'Mover pregunta a outro contexto.';
$string['moveto'] = 'Mover a';
$string['movingcategory'] = 'Movendo a categoría';
$string['movingcategoryandfiles'] = 'Confirma que quere mover a categoría {$a->name} e todas as categorías fillas ao contexto de "{$a->contextto}"?<br />Detectouse {$a->urlcount} ficheiros ligados dende preguntas en {$a->fromareaname}, quere copialos ou movelos a {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Confirma que quere mover a categoría "{$a->name}" e todas as categorías fillas ao contexto "{$a->contextto}"?';
$string['movingquestions'] = 'Movendo preguntas e calquera ficheiro';
$string['movingquestionsandfiles'] = 'Confirma que quere mover as pregunta(s) {$a->questions} ao contexto de <strong>"{$a->tocontext}"</strong>?<br />Detectouse <strong>{$a->urlcount} ficheiros</strong> ligados dende estas pregunta(s) en {$a->fromareaname}, quere copiar ou movelos a {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Confirma que quere mover as pregunta(s) {$a->questions} ao contexto de <strong>"{$a->tocontext}"</strong>?<br /><strong>Non hai ficheiros</strong> ligados dende estas pregunta(s) en {$a->fromareaname}.';
$string['needtochoosecat'] = 'É necesario escoller unha categoría a onde mover esta pregunta ou prema «Cancelar».';
$string['nocate'] = 'Non hai tal categoría {$a}!';
$string['nopermissionadd'] = 'Non ten permiso para engadir preguntas aquí.';
$string['nopermissionedit'] = 'Non ten permiso para editar preguntas dende aquí.';
$string['nopermissionmove'] = 'Non ten permiso para mover preguntas dende aquí. Debe gardar a pregunta nesta categoría ou gardala como unha pregunta nova.';
$string['noprobs'] = 'Non se atoparon problemas na súa base de datos de preguntas.';
$string['noquestionbanks'] = 'Non se atopou ningún engadido do banco de preguntas.';
$string['noquestions'] = 'Non se atoparon preguntas que poidan exportarse. Asegúrese de ter seleccionada unha categoría que exportar que conteña as preguntas.';
$string['noquestionsinfile'] = 'Non hai preguntas no ficheiro de importación';
$string['noresponse'] = '[Sen resposta]';
$string['notagfiltersapplied'] = 'Non se aplicaron filtros de etiquetas';
$string['notanswered'] = 'Non respondida';
$string['notchanged'] = 'Sen cambios dende o último intento';
$string['notenoughanswers'] = 'Este tipo de pregunta require cando menos {$a} respostas';
$string['notenoughdatatoeditaquestion'] = 'Non se especificou nin un id de pregunta, nin un id de categoría nin tipo de pregunta.';
$string['notenoughdatatomovequestions'] = 'É necesario que forneza os id da pregunta ou preguntas que queira mover.';
$string['notflagged'] = 'Sen marcador';
$string['notgraded'] = 'Sen cualificar';
$string['notshown'] = 'Non amosado';
$string['notyetanswered'] = 'Aínda non respondido';
$string['notyourpreview'] = 'Esta previsualización non lle corresponde';
$string['novirtualquestiontype'] = 'Non hai tipo de pregunta virtual par o tipo de pregunta {$a}';
$string['numqas'] = 'Núm. dos intentos da pregunta';
$string['numquestions'] = 'Núm. preguntas';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} agochado +{$a->numdraft} borrador)';
$string['options'] = 'Opcións';
$string['page-question-category'] = 'Páxina da categoría de pregunta';
$string['page-question-edit'] = 'Páxina de edición da pregunta';
$string['page-question-export'] = 'Páxina de exportación da pregunta';
$string['page-question-import'] = 'Páxina de importación da pregunta';
$string['page-question-x'] = 'Calquera páxina da pregunta';
$string['parent'] = 'Pai';
$string['parentcategory'] = 'Categoría principal';
$string['parentcategory_help'] = 'A categoría de pai é aquela na que se colocará a categoría nova. «Superior» significa que esta categoría non é contida por ningunha outra categoría. Os contextos de categoría amósanse en letra grosa. Debe de haber cando menos unha categoría en cada contexto.';
$string['parentcategory_link'] = 'pregunta/categoría';
$string['parenthesisinproperclose'] = 'Paréntese anterior ** non se pechou apropiadamente en {$a}**';
$string['parenthesisinproperstart'] = 'Paréntese anterior ** non se abriu apropiadamente en {$a}**';
$string['parsingquestions'] = 'Procesando preguntas do ficheiro de importación.';
$string['partiallycorrect'] = 'Parcialmente correcto';
$string['partiallycorrectfeedback'] = 'Por calquera resposta parcialmente correcta';
$string['partiallycorrectfeedbackdefault'] = 'A súa resposta é parcialmente correcta.';
$string['penaltyfactor'] = 'Factor de penalización';
$string['penaltyfactor_help'] = 'Este axuste determina que fracción da puntuación acadada se resta por cada resposta incorrecta. Soamente se aplica cando a proba se executa en modo adaptativo.

O factor de penalización debería ser un número entre 0 e 1. Un factor de penalización 1 significa que o alumno ten que conseguir dar a resposta correcta na súa primeira contestación para obter o rendemento completo por ela. Un factor de penalización de 0 significa que o alumno/a pode volver intentalo tantas veces como queira que aínda así poderá obter as puntuacións completas.';
$string['penaltyforeachincorrecttry'] = 'Penalización por cadanseu intento incorrecto';
$string['penaltyforeachincorrecttry_help'] = 'Cando executa preguntas que usan os comportamentos «Interactivo con múltiples intentos» ou «Modo adaptativo», de modo que o alumno/a ten varios intentos para acertar, esta opción controla canto son penalizados por cadanseu intento incorrecto.

A penalización é unha proporción da cualificación total da pregunta, de modo que se a pregunta tivese cando menos tres puntos, e a penalización é 0.3333333, entón os alumno/as puntuarán 3 se conseguen acertar a primeira vez, 2 se conseguen acertar no segundo intento e 1 se acertan no terceiro intento.

Para algunhas preguntas de múltiples partes, esta lóxica de puntuación aplícase por separado a cada parte da pregunta. Os detalles dependen do tipo de pregunta e poden ser complicados, pero o principio é darlles crédito aos alumnos polos coñecementos que demostraron do xeito máis xusto posíbel.';
$string['permissionedit'] = 'Editar esta pregunta';
$string['permissionmove'] = 'Mover esta pregunta';
$string['permissionsaveasnew'] = 'Gardar isto como unha nova pregunta';
$string['permissionto'] = 'Ten permiso para:';
$string['previewquestion'] = 'Previsualizar a pregunta: {$a}';
$string['privacy:metadata:database:question'] = 'Os detalles sobre unha pregunta específica.';
$string['privacy:metadata:database:question:createdby'] = 'A persoa que creou a pregunta.';
$string['privacy:metadata:database:question:generalfeedback'] = 'O comentario xeral para esta pregunta.';
$string['privacy:metadata:database:question:modifiedby'] = 'A persoa que fixo a última actualización da pregunta.';
$string['privacy:metadata:database:question:name'] = 'O nome da pregunta.';
$string['privacy:metadata:database:question:questiontext'] = 'O texto da pregunta.';
$string['privacy:metadata:database:question:timecreated'] = 'A data e a hora na que se creou esta pregunta.';
$string['privacy:metadata:database:question:timemodified'] = 'A data e a hora na que se actualizou esta pregunta.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Os pasos do intento de pregunta poden ter datos adicionais específicos para ese paso. Os datos almacénanse na táboa step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'O nome do elemento de datos.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'O valor do elemento de datos.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Cada intento de preguntas ten unha serie de pasos para indicar as distintas fases do principio ao final ao marcado. Esta táboa almacena a información de cada un destes pasos.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'A cualificación asignada a este intento de pregunta escalou a un valor de 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'O estado desta pregunta intenta paso ao final da transición paso.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'A data e hora en que comezou esta transición de paso.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'O usuario que realizou a transición de paso.';
$string['privacy:metadata:database:question_attempts'] = 'A información sobre un intento dunha pregunta específica.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Unha indicación de que o usuario sinalizou esta pregunta no intento.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Un resumo da resposta da pregunta.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'O momento no que foi actualizado o intento da pregunta.';
$string['privacy:metadata:database:question_bank_entries'] = 'Os detalles sobre unha pregunta específica do banco de preguntas.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'A persoa propietaria da pregunta do banco de preguntas.';
$string['privacy:metadata:link:qbehaviour'] = 'O subsistema de preguntas usa o tipo de engadido Question Behaviour (Comportamento de pregunta).';
$string['privacy:metadata:link:qformat'] = 'O subsistema de preguntas fai uso do tipo de engadido Question Format (Formato de pregunta) para o propósito de importar e exportar preguntas en diferentes formatos.';
$string['privacy:metadata:link:qtype'] = 'O subsistema de preguntas interactúa co tipo de engadido Question Type (Tipo de pregunta) que contén os diferentes tipos de preguntas.';
$string['published'] = 'compartido';
$string['qbanknotfound'] = 'O engadido de banco de preguntas «{$a}» non existe ou non é recoñecido.';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'Versión da pregunta';
$string['questionaffected'] = '<a href="{$a->qurl}">Pregunta "{$a->name}" ({$a->qtype})</a> está nesta categoría pero tamén se usa na <a href="{$a->qurl}">proba "{$a->quizname}"</a> destoutro curso "{$a->coursename}".';
$string['questionbank'] = 'Banco de preguntas';
$string['questionbanknavigation'] = 'Banco de preguntas de navegación terciaria';
$string['questionbehaviouradminsetting'] = 'Configuración do comportamento da pregunta';
$string['questionbehavioursdisabled'] = 'Comportamentos da pregunta que desactivar';
$string['questionbehavioursdisabledexplained'] = 'Introducir unha lista separada por comas de comportamentos que non queira que aparezan no menú despregábel.';
$string['questionbehavioursorder'] = 'Orde de comportamentos da pregunta';
$string['questionbehavioursorderexplained'] = 'Introducir unha lista separada por comas de comportamentos que non queira que aparezan no menú despregábel.';
$string['questioncategories'] = 'Categorías de pregunta';
$string['questioncategory'] = 'Categoría de pregunta';
$string['questioncatsfor'] = 'Categorías de pregunta para «{$a}»';
$string['questiondoesnotexist'] = 'Esta pregunta non existe';
$string['questionformtagheader'] = '{$a} etiquetas';
$string['questionidmismatch'] = 'Os id da pregunta non coinciden';
$string['questionloaderror'] = 'Non foi posíbel cargar as opcións da pregunta.';
$string['questionname'] = 'Nome da pregunta';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionnamecopy'] = '{$a} (copia)';
$string['questionno'] = 'Pregunta {$a}';
$string['questionpreviewdefaults'] = 'Configuracións predeterminadas da vista previa da pregunta';
$string['questionpreviewdefaults_desc'] = 'Estes valores predeterminados úsanse cando un usuario fai unha vista previa por primeira vez dunha pregunta no banco de preguntas. Unha vez que un usuario teña feito a vista previa dunha pregunta, gárdanse a súas preferencias persoais como preferencias do usuario.';
$string['questions'] = 'Preguntas';
$string['questionsaveerror'] = 'Producíronse erros durante o proceso de gardar a pregunta - ({$a})';
$string['questionsinuse'] = '(* As preguntas marcadas cun asterisco empréganse nalgún lugar, por exemplo nunha proba. Por iso, se continúa, estas preguntas non se eliminarán realmente, só quedarán agochadas.)';
$string['questionsmovedto'] = 'As preguntas que aínda se usan que se moveron a "{$a}" na categoría pai do curso.';
$string['questionsrescuedfrom'] = 'As preguntas gardadas dende o contexto {$a}.';
$string['questionsrescuedfrominfo'] = 'Estas preguntas (algunha das cales poden estar agochadas) gardáronse cando se eliminou o contexto {$a} porque aínda se usan nalgunhas probas ou outras actividades.';
$string['questiontags'] = 'Etiquetas de preguntas';
$string['questiontext'] = 'Texto da pregunta';
$string['questiontype'] = 'Tipo de pregunta';
$string['questionuse'] = 'Use a pregunta nesta actividade';
$string['questionvariant'] = 'Variante da pregunta';
$string['questionx'] = 'Pregunta {$a}';
$string['requiresgrading'] = 'Require cualificación';
$string['responsehistory'] = 'Historial de contestación';
$string['restart'] = 'Comezar outra vez';
$string['restartwiththeseoptions'] = 'Comezar outra vez con estas opcións';
$string['restoremultipletopcats'] = 'O ficheiro de copia de seguridade contén máis dunha categoría de preguntas de nivel superior para o contexto {$a}.';
$string['reviewresponse'] = 'Revisar a contestación';
$string['rightanswer'] = 'Resposta correcta';
$string['rightanswer_help'] = 'Un resumo coa contestación correcta xerado automaticamente. Isto pode non ser abondo, así que quizais queira dar unha explicación da solución correcta no comentario xeral da pregunta, e apagar esta opción.';
$string['save'] = 'Gardar';
$string['savechangesandcontinueediting'] = 'Garda os cambios e continuar editando';
$string['saved'] = 'Gardado: {$a}';
$string['saveflags'] = 'Gardar o estado dos marcadores';
$string['selectacategory'] = 'Seleccionar unha categoría:';
$string['selectaqtypefordescription'] = 'Seleccionar un tipo de pregunta para ver a súa descrición.';
$string['selectcategoryabove'] = 'Seleccionar unha categoría enriba';
$string['selectquestionsforbulk'] = 'Seleccionar preguntas para accións globais';
$string['settingsformultipletries'] = 'Intentos múltiples';
$string['shareincontext'] = 'Compartir no contexto de {$a}';
$string['showhidden'] = 'Amosar tamén as preguntas antigas';
$string['showmarkandmax'] = 'Amosar puntuación e máx.';
$string['showmaxmarkonly'] = 'Amosar soamente a máx. puntuación';
$string['shown'] = 'Amosada';
$string['shownumpartscorrect'] = 'Amosar o número de contestacións correctas';
$string['shownumpartscorrectwhenfinished'] = 'Amosar o número de contestacións correctas logo de finalizar a pregunta';
$string['showquestiontext'] = 'Amosar o texto da pregunta na lista de preguntas';
$string['showquestiontext_full'] = 'Si, con imaxes, multimedia, etc.';
$string['showquestiontext_off'] = 'Non';
$string['showquestiontext_plain'] = 'Si, só o texto';
$string['specificfeedback'] = 'Comentario específico';
$string['specificfeedback_help'] = 'Comentario que depende de que contestación dese o alumno/a.';
$string['started'] = 'Comezou ás';
$string['state'] = 'Estado';
$string['step'] = 'Paso';
$string['steps'] = 'Pasos';
$string['stoponerror'] = 'Alto no erro';
$string['stoponerror_help'] = 'Este axuste determina que o proceso de importación se deterá ao detectarse un erro, de modo que ningunha pregunta se importará ou que calquera pregunta que conteña erros se ignorará mentres que calquera pregunta correcta se importará.';
$string['submissionoutofsequence'] = 'Acceso contrario á secuencia. Por favor, non prema no botón de volver atrás ao traballar nas preguntas da proba.';
$string['submissionoutofsequencefriendlymessage'] = 'Introduciu datos nunha secuencia contraria á normal. Isto pode ocorrer se usa o botón de Volver atrás ou Adiante do seu navegador; por favor, non os use durante o test. Tamén pode suceder se preme en algo mentres se carga a páxina. Prema <strong>Continuar</strong> para continuar.';
$string['submit'] = 'Entregar';
$string['submitandfinish'] = 'Entregar e finalizar';
$string['submitted'] = 'Entregar: {$a}';
$string['tagarea_question'] = 'Preguntas';
$string['technicalinfo'] = 'Información técnica';
$string['technicalinfo_help'] = 'Esta información técnica probablemente só é práctica para desenvolvedores que estean a traballar en novos tipos de preguntas. Tamén pode ser de axuda ao intentar diagnosticar problemas coas preguntas.';
$string['technicalinfomaxfraction'] = 'Fracción máxima: {$a}';
$string['technicalinfominfraction'] = 'Fracción mínima: {$a}';
$string['technicalinfoquestionsummary'] = 'Resumo da pregunta: {$a}';
$string['technicalinforesponsesummary'] = 'Resumo da resposta: {$a}';
$string['technicalinforightsummary'] = 'Resumo da resposta correcta: {$a}';
$string['technicalinfostate'] = 'Estado da pregunta: {$a}';
$string['technicalinfovariant'] = 'Variante da pregunta: {$a}';
$string['tofilecategory'] = 'Escribir a categoría no ficheiro';
$string['tofilecontext'] = 'Escribir o contexto no ficheiro';
$string['topfor'] = 'Superior para {$a}';
$string['uninstallbehaviour'] = 'Desinstalar este comportamento de pregunta.';
$string['uninstallqtype'] = 'Desinstalar este tipo de pregunta.';
$string['unknown'] = 'Descoñecido';
$string['unknownbehaviour'] = 'Comportamento descoñecido: {$a}.';
$string['unknownorunhandledtype'] = 'Tipo de pregunta non coñecido ou non manexado: {$a}';
$string['unknownquestion'] = 'Pregunta descoñecida: {$a}.';
$string['unknownquestioncatregory'] = 'Categoría de pregunta descoñecida: {$a}.';
$string['unknownquestiontype'] = 'Tipo de pregunta descoñecida: {$a}.';
$string['unknowntolerance'] = 'Tipo de tolerancia descoñecida {$a}';
$string['unpublished'] = 'descompartido';
$string['unusedcategorydeleted'] = 'Esta categoría eliminouse porque, após eliminar o curso, as súas preguntas non se usaron máis.';
$string['updatedisplayoptions'] = 'Actualizar as opcións de presentación';
$string['upgradeproblemcategoryloop'] = 'Detectouse un problema ao actualizar as categorías de preguntas. Hai un bucle na árbore de categorías. Os id das categoría afectadas son {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Non foi posíbel actualizar a categoría da pregunta {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Detectouse un problema ao anovar as categorías de preguntas. A categoría {$a->id} refírese ao pai {$a->parent}, que non existe. Cambiouse o pai para arranxar este problema.';
$string['version_selection'] = 'Version {$a->version}';
$string['whethercorrect'] = 'Cando correcto';
$string['whethercorrect_help'] = 'Isto cobre ámbalas descricións, tanto a textual «Correcta», «Parcialmente correcta» ou «Incorrecta», e calquera realce de cor que transmita a mesma información.';
$string['whichtries'] = 'Que intentos';
$string['withselected'] = 'Co seleccionado';
$string['wrongprefix'] = 'nameprefix {$a} erradamente formatado';
$string['xoutofmax'] = '{$a->mark} fóra de {$a->max}';
$string['yougotnright'] = 'Seleccionou correctamente {$a->num}.';
$string['youmustselectaqtype'] = 'Debe seleccionar un tipo de pregunta.';
$string['yourfileshoulddownload'] = 'O seu ficheiro de exportación debería comezar a descargarse axiña. Se non o fai, <a href="{$a}">prema aquí</a>.';
