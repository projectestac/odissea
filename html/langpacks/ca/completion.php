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
 * Strings for component 'completion', language 'ca', version '3.11'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Qualificació assolida';
$string['activities'] = 'Activitats';
$string['activitiescompleted'] = 'Compleció d\'activitat';
$string['activitiescompletednote'] = 'Avís: Cal configurar els criteris de compleció de l\'activitat perquè una activitat aparegui en la llista de dalt.';
$string['activitieslabel'] = 'Activitats / recursos';
$string['activityaggregation'] = 'La condició requereix que';
$string['activityaggregation_all'] = 'S\'hagin completat TOTES les activitats seleccionades';
$string['activityaggregation_any'] = 'S\'hagi completat QUALSEVOL activitat seleccionada';
$string['activitycompletion'] = 'Compleció de l\'activitat';
$string['activitycompletionupdated'] = 'S\'han desat els canvis';
$string['activitygradenotrequired'] = 'No cal una qualificació';
$string['affectedactivities'] = 'Els canvis afectaran les <b>{$a}</b> activitats o recursos següents:';
$string['aggregationmethod'] = 'Mètode d\'agregació';
$string['all'] = 'Totes';
$string['any'] = 'Qualsevol';
$string['approval'] = 'Aprovació';
$string['areyousureoverridecompletion'] = 'Segur que voleu rectificar l\'estat de compleció actual d\'aquesta activitat per aquest usuari i marcar-la com «{$a}»?';
$string['badautocompletion'] = 'Quan habiliteu la compleció automàtica, cal que activeu almenys un requisit (a sota).';
$string['badcompletiongradeitemnumber'] = 'No es pot habilitar el requeriment de qualificació per <b>{$a}</b> perquè la puntuació per {$a} està deshabilitada.';
$string['bulkactivitycompletion'] = 'Edita en massa la compleció d\'activitat';
$string['bulkactivitydetail'] = 'Trieu les activitats que voleu editar en massa.';
$string['bulkcompletiontracking'] = 'Seguiment de compleció';
$string['bulkcompletiontracking_help'] = '<strong>Cap:</strong> No indiqueu compleció d\'activitat

<strong>Manual:</strong> Els estudiants poden marcar manualment l\'activitat com a completada

<strong>Amb condicions:</strong> Mostra l\'activitat com a completada quan s\'acompleixen les condicions';
$string['checkactivity'] = 'Casella de selecció per a l\'activitat o el recurs: {$a}';
$string['checkall'] = 'Selecciona o desselecciona totes les activitats i tots els recursos';
$string['checkallsection'] = 'Selecciona o desselecciona totes les activitats i tots els recursos de la secció següent: {$a}';
$string['completeactivity'] = 'Completa l\'activitat';
$string['completed'] = 'Completada';
$string['completedunlocked'] = 'Opcions de compleció debloquejades';
$string['completedunlockedtext'] = 'Quan deseu els canvis, l\'estat de compleció per a tots els estudiants s\'esborrarà. Si canvieu d\'opinió sobre això, no deseu el formulari.';
$string['completedwarning'] = 'Opcions de compleció bloquejades';
$string['completedwarningtext'] = 'L\'activitat ja s\'ha marcat com a completada per {$a} participant(s). Canviar les opcions de compleció esborrarà el seu estat de compleció i pot generar confusió. Per això, aquestes opcions estan bloquejades i no s\'haurien de desbloquejar si no és absolutament necessari.';
$string['completion'] = 'Seguiment de compleció';
$string['completion-alt-auto-enabled'] = 'El sistema indica que aquest ítem està completat d\'acord amb les condicions: {$a}';
$string['completion-alt-auto-fail'] = 'Completada: {$a} (no s\'ha assolit la qualificació d\'aprovat)';
$string['completion-alt-auto-n'] = 'No completada: {$a}';
$string['completion-alt-auto-n-override'] = 'No completada: {$a->modname} (establert per {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Completada: {$a} (han assolit la qualificació)';
$string['completion-alt-auto-y'] = 'Completat: {$a}';
$string['completion-alt-auto-y-override'] = 'Completada: {$a->modname} (establert per {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Els estudiants poden marcar aquest apartat com a completat de manera manual: {$a}';
$string['completion-alt-manual-n'] = 'No completada: {$a}. Seleccioneu-la per marcar-ho com a completada.';
$string['completion-alt-manual-n-override'] = 'No completada: {$a->modname} (establert per {$a->overrideuser}). Seleccioneu-ho per a marcar-ho com a completada.';
$string['completion-alt-manual-y'] = 'Completada: {$a}. Seleccioneu-lo per marcar-ho com a no completada.';
$string['completion-alt-manual-y-override'] = 'Completada: {$a->modname} (establert per {$a->overrideuser}). Seleccioneu-ho per a marcar-ho com a no completada.';
$string['completion-fail'] = 'Completada (no s\'ha aconseguit assolir la qualificació)';
$string['completion-n'] = 'No completada';
$string['completion-n-override'] = 'No completada (establert per {$a})';
$string['completion-pass'] = 'Completada (s\'ha assolit la qualificació)';
$string['completion-y'] = 'Completada';
$string['completion-y-override'] = 'Completada (establert per {$a})';
$string['completion_automatic'] = 'Mostra l\'activitat com completada si es compleixen les condicions';
$string['completion_help'] = 'Si s\'habilita, es fa un seguiment de compleció de l\'activitat, de forma manual o de forma automàtica, sobre la base de certes condicions. Es poden configurar múltiples condicions. Si es fa així, l\'activitat només es considerarà completada quan es complisquen TOTES les condicions.

Una marca al costat del nom de l\'activitat en la pàgina del curs indica que l\'activitat s\'ha completat.';
$string['completion_manual'] = 'Els estudiants poden marcar de forma manual l\'activitat com a completada';
$string['completion_none'] = 'No indiqueu la compleció de l\'activitat';
$string['completionactivitydefault'] = 'Utilitzeu el valor per defecte de l\'activitat';
$string['completiondefault'] = 'Valor per defecte del seguiment de compleció';
$string['completiondisabled'] = 'Inhabilitada, no es mostra als paràmetres de l\'activitat';
$string['completionduration'] = 'Inscripció';
$string['completionenabled'] = 'Habilitada, control mitjançant compleció i paràmetres de l\'activitat';
$string['completionexpected'] = 'S\'espera que es completi el';
$string['completionexpected_help'] = 'Aquest paràmetre especifica la data en què s\'espera que es completi l\'activitat.';
$string['completionexpecteddesc'] = 'S\'espera la compleció el {$a}';
$string['completionexpectedfor'] = '{$a->instancename} hauria d\'estar completa';
$string['completionicons'] = 'Caixes de marques de compleció';
$string['completionicons_help'] = 'Una marca a la vora d\'un nom d\'activitat pot ser utilitzada per indicar que l\'activitat està completada.

Si es mostra una caixa amb la vora discontínua, apareixerà una marca de forma automàtica quan hàgiu completat l\'activitat d\'acord amb les condicions establertes pel professor.

Si es mostra una marca amb la vora contínua, podeu clicar-hi al damunt per marcar la caixa quan considereu que heu completat l\'activitat. (Cliqueu-hi de nou per treure la marca si canvieu de parer).
La marca és opcional però és una forma senzilla de seguir el vostre progrés a través del curs.';
$string['completionmenuitem'] = 'Compleció';
$string['completionnotenabled'] = 'No s\'ha habilitat la compleció';
$string['completionnotenabledforcourse'] = 'No s\'ha habilitat la compleció en aquest curs';
$string['completionnotenabledforsite'] = 'No s\'ha habilitat la compleció en aquest lloc';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'La data en què el curs es marcarà com a completat';
$string['completionsettingslocked'] = 'Bloquejats els paràmetres de compleció';
$string['completionupdated'] = 'S\'ha actualitzat la compleció per a l\'activitat <b>{$a}</b>';
$string['completionusegrade'] = 'Qualificació requerida';
$string['completionusegrade_desc'] = 'L\'estudiant ha de rebre una qualificació per completar aquesta activitat';
$string['completionusegrade_help'] = 'Si s\'habilita, l\'activitat es considera completa quan un estudiant rep una qualificació. Les icones d\'aprovat o suspès es mostraran si s\'ha configurat la qualificació d\'aprovat per l\'activitat.';
$string['completionview'] = 'Visualització requerida';
$string['completionview_desc'] = 'Cal que l\'estudiant visualitzi aquesta activitat per completar-la';
$string['configcompletiondefault'] = 'Configuració per defecte per al seguiment de la compleció quan es creen activitats noves.';
$string['configenablecompletion'] = 'Si està habilitada, us permet d\'establir condicions de compleció (progrés) del curs i les activitats. Es recomana d\'establir condicions de compleció per tal que es mostrin dades significatives al resum del curs del tauler dels usuaris.';
$string['confirmselfcompletion'] = 'Confirma auto-compleció';
$string['courseaggregation'] = 'La condició requereix que';
$string['courseaggregation_all'] = 'TOTS els cursos seleccionats s\'hagin completat';
$string['courseaggregation_any'] = 'QUALSEVOL dels cursos seleccionats s\'hagi completat';
$string['coursealreadycompleted'] = 'Ja heu completat aquest curs';
$string['coursecomplete'] = 'Curs complet';
$string['coursecompleted'] = 'Curs completat';
$string['coursecompletedmessage'] = '<p>Enhorabona</p><p>Heu completat el curs <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Compleció del curs';
$string['coursecompletioncondition'] = 'Condició: {$a}';
$string['coursegrade'] = 'Qualificació del curs';
$string['coursesavailable'] = 'Cursos disponibles';
$string['coursesavailableexplaination'] = 'Avís: Cal configurar els criteris de compleció del curs per tal que un curs aparegui en la llista de dalt.';
$string['criteria'] = 'Criteris';
$string['criteriagroup'] = 'Grup de criteris';
$string['criteriarequiredall'] = 'Cal que es compleixin tots els criteris que es mostren a continuació';
$string['criteriarequiredany'] = 'Cal que es compleixi algun dels criteris que es mostren a continuació';
$string['csvdownload'] = 'Baixa en format de full de càlcul (UTF-8 .csv)';
$string['datepassed'] = 'Data en què es va aprovar';
$string['days'] = 'Dies';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['defaultcompletion'] = 'Compleció d\'activitat per defecte';
$string['defaultcompletionupdated'] = 'S\'han desat els canvis';
$string['deletecompletiondata'] = 'Suprimeix les dades de compleció';
$string['dependencies'] = 'Dependències';
$string['dependenciescompleted'] = 'Compleció d\'altres cursos';
$string['detail_desc:receivegrade'] = 'Rebre una qualificació';
$string['detail_desc:view'] = 'Visualitzar';
$string['editcoursecompletionsettings'] = 'Edita els paràmetres de compleció del curs';
$string['enablecompletion'] = 'Habilita el seguiment de la compleció';
$string['enablecompletion_help'] = 'Un cop activada, es poden establir condicions de compleció de l\'activitat als paràmetres de l\'activitat i/o es poden establir condicions de compleció de curs. Es recomana tenir-la habilitada; d\'aquesta manera, es mostraran dades significatives a la vista global del curs al Tauler.';
$string['enrolmentduration'] = 'Durada de la inscripció';
$string['enrolmentdurationlength'] = 'L\'usuari ha de romandre inscrit durant';
$string['err_noactivities'] = 'La informació de compleció no està habilitada per cap activitat, per això no se\'n mostra cap. Podeu habilitar la informació de compleció editant els paràmetres d\'alguna activitat.';
$string['err_nocourses'] = 'La compleció del curs no està habilitada per cap altre curs, per això no se\'n mostra cap. Podeu habilitar la compleció del curs editant els paràmetres del curs.';
$string['err_nograde'] = 'No s\'ha configurat cap nota per aprovar aquest curs. Per habilitar aquest criteri us cal crear una qualificació d\'aprovat per a aquest curs.';
$string['err_noroles'] = 'No hi ha cap rol dins del curs amb la capacitat moodle/course:markcomplete.';
$string['err_nousers'] = 'No hi ha estudiants en aquest curs o grup per als quals es pugui mostrar la informació de compleció. (Per defecte, la informació de compleció sols es mostra per als usuaris amb la capacitat «Ser mostrat als informes de compleció». Aquesta capacitat s\'estableix només per al rol per defecte d\'estudiant, per la qual cosa si no hi ha estudiants veureu aquest missatge.)';
$string['err_settingslocked'] = 'Un o més estudiants han completat algun criteri, per això la configuració està bloquejada. Desbloquejar els paràmetres dels criteris de compleció suprimirà qualsevol dada dels usuaris i pot causar confusió.';
$string['err_system'] = 'S\'ha produït un error intern en el sistema de compleció. (Els administradors del sistema poden habilitar la depuració d\'errors per trobar més informació.)';
$string['eventcoursecompleted'] = 'Curs completat';
$string['eventcoursecompletionupdated'] = 'S\'ha actualitzat la compleció del curs';
$string['eventcoursemodulecompletionupdated'] = 'S\'ha actualitzat la compleció d\'activitat del curs';
$string['eventdefaultcompletionupdated'] = 'S\'ha actualitzat la compleció d\'activitat del curs per defecte';
$string['excelcsvdownload'] = 'Descarrega en format compatible amb Excel (.csv)';
$string['fraction'] = 'Fracció';
$string['graderequired'] = 'Qualificació del curs requerida';
$string['gradexrequired'] = '{$a} requerit';
$string['hiddenrules'] = 'S\'han amagat alguns paràmetres específics de <b>{$a}</b>. Per a veure\'ls, desseleccioneu altres activitats';
$string['inprogress'] = 'En curs';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Compleció manual per altres';
$string['manualcompletionbynote'] = 'Avís: Per tal que aparegui a la llista, la capacitat moodle/course:markcomplete s\'ha de permetre per a algun rol';
$string['manualselfcompletion'] = 'Auto-compleció manual';
$string['manualselfcompletionnote'] = 'Avís: El bloc d\'auto-compleció s\'hauria d\'afegir al curs si la auto-compleció manual està activa.';
$string['markcomplete'] = 'Marca com a completat';
$string['markedcompleteby'] = 'Ha estat marcat com a completat per {$a}';
$string['markingyourselfcomplete'] = 'Marqueu-vos vós mateix com a completat';
$string['modifybulkactions'] = 'Modifica les accions que voleu editar en massa';
$string['moredetails'] = 'Més detalls';
$string['nocriteriaset'] = 'No s\'han definit criteris de compleció per a aquest curs';
$string['nogradeitem'] = 'No es pot habilitar la qualificació requerida per a <b>{$a}</b> perquè l\'activitat no s\'ha qualificat.';
$string['notcompleted'] = 'No completada';
$string['notenroled'] = 'No us heu inscrit en aquest curs';
$string['nottracked'] = 'A hores d\'ara no s\'està realitzant el seguiment de la vostra compleció en aquest curs.';
$string['notyetstarted'] = 'No s\'ha començat encara';
$string['overallaggregation'] = 'Requisits de compleció';
$string['overallaggregation_all'] = 'El curs es completa quan es compleixen TOTES les condicions';
$string['overallaggregation_any'] = 'El curs es completa quan es compleix QUALSEVOL de les condicions';
$string['pending'] = 'Pendents';
$string['periodpostenrolment'] = 'Període posterior a la inscripció';
$string['privacy:metadata:completionstate'] = 'Si s\'ha completat l\'activitat';
$string['privacy:metadata:course'] = 'Un identificador de curs';
$string['privacy:metadata:coursecompletedsummary'] = 'Emmagatzema informació sobre els usuaris que han completat els criteris en un curs';
$string['privacy:metadata:coursemoduleid'] = 'L\'ID de l\'activitat';
$string['privacy:metadata:coursemodulesummary'] = 'Emmagatzema dades de compleció d\'activitat per a un usuari';
$string['privacy:metadata:coursesummary'] = 'Emmagatzema dades de compleció de curs per a un usuari';
$string['privacy:metadata:gradefinal'] = 'Qualificació del curs rebuda per la compleció de curs';
$string['privacy:metadata:overrideby'] = 'L\'ID d\'usuari de la persona que rectificà la compleció d\'activitat';
$string['privacy:metadata:reaggregate'] = 'Si la compleció del curs es reagregà o no.';
$string['privacy:metadata:timecompleted'] = 'Quan es va completar el curs';
$string['privacy:metadata:timeenrolled'] = 'Quan es va inscriure l\'usuari al curs';
$string['privacy:metadata:timemodified'] = 'Quan es va modificar la compleció d\'activitat';
$string['privacy:metadata:timestarted'] = 'Quan va començar el curs';
$string['privacy:metadata:unenroled'] = 'Si la inscripció al curs de l\'usuari s\'ha cancel·lat';
$string['privacy:metadata:userid'] = 'L\'ID d\'usuari de la persona amb dades de compleció del curs i les activitats';
$string['privacy:metadata:viewed'] = 'Si l\'activitat es va visualitzar o no';
$string['progress'] = 'Progrés de l\'estudiant';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progrés: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconeixement d\'aprenentatges previs';
$string['remainingenroledfortime'] = 'Roman inscrit per un període determinat de temps';
$string['remainingenroleduntildate'] = 'Roman inscrit fins a una data determinada';
$string['reportpage'] = 'Es mostren els usuaris {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Criteri requerit';
$string['resetactivities'] = 'Desselecciona totes les activitats i tots els recursos';
$string['restoringcompletiondata'] = 'Escrivint les dades de compleció';
$string['roleaggregation'] = 'La condició requereix que';
$string['roleaggregation_all'] = 'TOTS els rols seleccionats per a marcar quan la condició es compleix';
$string['roleaggregation_any'] = 'QUALSEVOL rol seleccionat per a marcar quan la condició es compleix';
$string['roleidnotfound'] = 'No s\'ha trobat el rol amb ID {$a}';
$string['saved'] = 'Desat';
$string['seedetails'] = 'Visualitza els detalls';
$string['select'] = 'Selecciona';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto-compleció';
$string['showcompletionconditions'] = 'Mostra les condicions de compleció de l\'activitat';
$string['showcompletionconditions_help'] = 'Les condicions de compleció de l’activitat sempre es mostren a la pàgina de l’activitat. Aquest paràmetre determina si les condicions de compleció de l\'activitat també es mostren a sota de cada activitat a la pàgina del curs.';
$string['showinguser'] = 'Visualitza usuaris';
$string['unenrolingfromcourse'] = 'S\'està suprimint la inscripció al curs';
$string['unenrolment'] = 'Cancel·lació de la inscripció';
$string['unit'] = 'Unitat';
$string['unlockcompletion'] = 'Desbloqueja les opcions de compleció';
$string['unlockcompletiondelete'] = 'Desbloqueja les opcions de compleció i suprimeix les dades de compleció dels usuaris';
$string['updateactivities'] = 'Actualitza l\'estatus de compleció de les activitats seleccionades';
$string['usealternateselector'] = 'Utilitza el selector de curs alternatiu';
$string['usernotenroled'] = 'L\'usuari no s\'ha inscrit en aquest curs';
$string['viewcoursereport'] = 'Visualitza l\'informe del curs';
$string['viewingactivity'] = 'Visualitzar la {$a}';
$string['withconditions'] = 'Amb condicions';
$string['writingcompletiondata'] = 'Escrivint les dades de compleció';
$string['xdays'] = '{$a} dies';
$string['yourprogress'] = 'El vostre progrés';
