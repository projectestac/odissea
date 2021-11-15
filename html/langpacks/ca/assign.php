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
 * Strings for component 'assign', language 'ca', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Teniu tasques que necessiten la vostra atenció';
$string['addattempt'] = 'Permet un altre intent';
$string['addnewattempt'] = 'Afegeix un altre intent';
$string['addnewattempt_help'] = 'Això crearà una tramesa en blanc per treballar.';
$string['addnewattemptfromprevious'] = 'Afegeix un intent nou basat en la tramesa anterior';
$string['addnewattemptfromprevious_help'] = 'Això copiarà el contingut de la tramesa prèvia en una tramesa nova perquè hi treballeu.';
$string['addnewgroupoverride'] = 'Afegeix una excepció de grup';
$string['addnewuseroverride'] = 'Afegeix una excepció d\'usuari';
$string['addsubmission'] = 'Afegeix la tramesa';
$string['addsubmission_help'] = 'Encara no heu fet cap tramesa.';
$string['allocatedmarker'] = 'Avaluador assignat';
$string['allocatedmarker_help'] = 'Avaluador assignat a aquesta tramesa';
$string['allowsubmissions'] = 'Permet a l\'usuari continuar realitzant trameses per a aquesta tasca.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Els detalls de la tasca i el formulari de la tramesa estaran disponibles des de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permet trameses des de';
$string['allowsubmissionsfromdate_help'] = 'Si està activat, els estudiants no podran fer trameses abans d\'aquesta data. Si està desactivat, podran començar la tramesa immediatament.';
$string['allowsubmissionsfromdatesummary'] = 'Aquesta tasca acceptarà trameses des de <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permet canvis en la tramesa';
$string['alwaysshowdescription'] = 'Mostra sempre la descripció';
$string['alwaysshowdescription_help'] = 'Si està desactivat, la descripció de la tasca de dalt només serà visible per als estudiants a partir de la data «Permet trameses des de».';
$string['applytoteam'] = 'Aplica les qualificacions i la retroacció al grup sencer';
$string['assign:addinstance'] = 'Afegeix una tasca nova';
$string['assign:editothersubmission'] = 'Editar una tasca d\'un altre estudiant';
$string['assign:exportownsubmission'] = 'Exporta les trameses pròpies';
$string['assign:grade'] = 'Qualificar tasca';
$string['assign:grantextension'] = 'Concedeix una pròrroga';
$string['assign:manageallocations'] = 'Gestiona els avaluadors assignats a les trameses';
$string['assign:managegrades'] = 'Revisa i publica les notes';
$string['assign:manageoverrides'] = 'Gestiona les excepcions de la tasca';
$string['assign:receivegradernotifications'] = 'Rebeu les notificacions de tramesa del qualificador';
$string['assign:releasegrades'] = 'Publica les notes';
$string['assign:revealidentities'] = 'Mostra la identitat dels estudiants';
$string['assign:reviewgrades'] = 'Revisa les notes';
$string['assign:showhiddengrader'] = 'Visualitza la identitat d\'un avaluador ocult';
$string['assign:submit'] = 'Tramet la tasca';
$string['assign:view'] = 'Veure tasca';
$string['assign:viewblinddetails'] = 'Mostra la identitat dels estudiants quan la qualificació a cegues està activada';
$string['assign:viewgrades'] = 'Mostra les qualificacions';
$string['assignfeedback'] = 'Connector de retroacció';
$string['assignfeedbackpluginname'] = 'Connector de retroacció';
$string['assignmentisdue'] = 'La tasca ha vençut';
$string['assignmentmail'] = '{$a->grader} ha enviat una retroacció per a la vostra tramesa de la tasca «{$a->assignment}»

Podeu veure-la adjunta a la vostra tramesa de la tasca:

{$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} ha enviat una retroacció per a la vostra tramesa de la tasca «<i>{$a->assignment}</i>».</p> <p>Podeu veure-la adjunta a la vostra tramesa de la tasca <a href="{$a->url}"></a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} ha enviat una retroacció per a la vostra tramesa de la tasca «{$a->assignment}». Podeu veure-la adjunta a la vostra tramesa';
$string['assignmentname'] = 'Nom de la tasca';
$string['assignmentplugins'] = 'Connectors de tasca';
$string['assignmentsperpage'] = 'Tasques per pàgina';
$string['assignsubmission'] = 'Connector de tramesa';
$string['assignsubmissionpluginname'] = 'Connector de tramesa';
$string['attemptheading'] = 'Intent {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Intents previs';
$string['attemptnumber'] = 'Número d\'intent';
$string['attemptreopenmethod'] = 'Intents reoberts';
$string['attemptreopenmethod_help'] = 'Determina com es tornen a obrir els intents de trameses de l\'estudiant. Les opcions disponibles són les següents:
<ul>
<li>Mai. La tramesa de l\'estudiant no es pot tornar a obrir.</li>
<li>Manualment. El professor pot tornar a obrir la tramesa de l\'estudiant.</li>
<li>Automàticament fins a la superació. La tramesa de l\'estudiant s\'obre de forma automàtica fins que l\'estudiant assoleixi la qualificació per aprovar establerta al butlletí de qualificacions per a aquesta tasca (secció Categories i elements).</li>
</ul>';
$string['attemptreopenmethod_manual'] = 'Manualment';
$string['attemptreopenmethod_none'] = 'Mai';
$string['attemptreopenmethod_untilpass'] = 'Automàticament fins superació';
$string['attemptsettings'] = 'Configuració dels intents';
$string['availability'] = 'Disponibilitat';
$string['backtoassignment'] = 'Torna a la tasca';
$string['batchoperationconfirmaddattempt'] = 'Voleu permetre un altre intent per a les trameses seleccionades?';
$string['batchoperationconfirmdownloadselected'] = 'Voleu baixar les trameses seleccionades?';
$string['batchoperationconfirmgrantextension'] = 'Voleu concedir una pròrroga a totes les trameses seleccionades?';
$string['batchoperationconfirmlock'] = 'Bloca totes les trameses seleccionades';
$string['batchoperationconfirmremovesubmission'] = 'Suprimeix les trameses seleccionades?';
$string['batchoperationconfirmreverttodraft'] = 'Reverteix les trameses seleccionades a esborrany?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Voleu establir l\'assignació d\'avaluador per a les trameses seleccionades?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Voleu habilitar el flux de l\'avaluació per a totes les trameses seleccionades?';
$string['batchoperationconfirmunlock'] = 'Desbloca totes les trameses seleccionades?';
$string['batchoperationlock'] = 'bloca les trameses';
$string['batchoperationreverttodraft'] = 'reverteix les trameses a esborrany';
$string['batchoperationsdescription'] = 'Amb la selecció...';
$string['batchoperationunlock'] = 'desbloca les trameses';
$string['batchsetallocatedmarker'] = 'Assigna un avaluador als {$a} usuaris seleccionats.';
$string['batchsetmarkingworkflowstateforusers'] = 'Estableix el flux de l\'avaluació per als {$a} usuaris seleccionats.';
$string['blindmarking'] = 'Qualificació a cegues';
$string['blindmarking_help'] = 'La qualificació a cegues oculta la identitat dels estudiants als qualificadors. Els paràmetres de la qualificació a cegues es blocaran tan bon punt s\'hagi fet una tramesa o qualificació en relació amb aquesta tasca.';
$string['blindmarkingenabledwarning'] = 'Aquesta activitat té activada la qualificació a cegues.';
$string['calendardue'] = 'Venciment de {$a}';
$string['calendargradingdue'] = '{$a} s\'ha de qualificar';
$string['changefilters'] = 'Canvia els filtres';
$string['changeuser'] = 'Canvia l\'usuari';
$string['choosegradingaction'] = 'Acció de qualificació';
$string['choosemarker'] = 'Tria...';
$string['chooseoperation'] = 'Tria operació';
$string['clickexpandreviewpanel'] = 'Cliqueu per expandir el plafó de revisió';
$string['collapsegradepanel'] = 'Contreu el tauler de qualificacions';
$string['collapsereviewpanel'] = 'Contreu el plafó de revisió';
$string['comment'] = 'Comentari';
$string['completiondetail:submit'] = 'Fer una tramesa';
$string['completionsubmit'] = 'Cal que els estudiants trametin quelcom per completar l\'activitat.';
$string['configshowrecentsubmissions'] = 'Tothom pot veure les notificacions de trameses en els informes d\'activitat recent.';
$string['confirmbatchgradingoperation'] = 'Esteu segurs que voleu {$a->operation} per als {$a->count} estudiants?';
$string['confirmsubmission'] = 'Segur que voleu trametre el vostre treball per qualificar? Ja no podreu realitzar més canvis.';
$string['confirmsubmissionheading'] = 'Confirma la tramesa';
$string['conversionexception'] = 'No s\'ha pogut convertir la tasca. L\'excepció fou: {$a}.';
$string['couldnotconvertgrade'] = 'No s\'ha pogut convertir la qualificació de la tasca de l\'usuari {$a}.';
$string['couldnotconvertsubmission'] = 'No s\'ha pogut convertir la tramesa de la tasca de l\'usuari {$a}.';
$string['couldnotcreatecoursemodule'] = 'No s\'ha pogut crear el mòdul de curs.';
$string['couldnotcreatenewassignmentinstance'] = 'No s\'ha pogut crear una instància nova de la tasca.';
$string['couldnotfindassignmenttoupgrade'] = 'No s\'ha pogut trobar una instància antiga de la tasca per actualitzar.';
$string['crontask'] = 'Processament en segon pla del mòdul de tasques';
$string['currentassigngrade'] = 'Qualificació actual en la tasca';
$string['currentattempt'] = 'Aquest és l\'intent {$a}.';
$string['currentattemptof'] = 'Aquest és l\'intent {$a->attemptnumber} ( {$a->maxattempts} intents permesos ).';
$string['currentgrade'] = 'Qualificació actual en el llibre de qualificacions';
$string['cutoffdate'] = 'Data límit';
$string['cutoffdate_help'] = 'Si s\'habilita, la tasca no acceptarà trameses després d\'aquesta data sense una pròrroga.';
$string['cutoffdatecolon'] = 'Data límit: {$a}';
$string['cutoffdatefromdatevalidation'] = 'La data límit ha de ser posterior a la data inicial del període.';
$string['cutoffdatevalidation'] = 'La data límit no pot ser anterior a la data de venciment.';
$string['defaultlayout'] = 'Restaura la disposició per defecte';
$string['defaultsettings'] = 'Paràmetres per defecte de la tasca';
$string['defaultsettings_help'] = 'Aquests paràmetres defineixen els valors per defecte per a totes les tasques noves.';
$string['defaultteam'] = 'Grup per defecte';
$string['deleteallsubmissions'] = 'Esborra totes les trameses';
$string['description'] = 'Descripció';
$string['disabled'] = 'Inhabilitat';
$string['downloadall'] = 'Descarrega totes les trameses';
$string['downloadasfolders'] = 'Descarrega les trameses en carpetes';
$string['downloadasfolders_help'] = 'Si la tramesa de la tasca conté més d\'un únic fitxer, les trameses poden descarregar-se en carpetes. Cada tramesa es posa en una carpeta separada, amb l\'estructura de carpeta mantinguda per a cada subcarpeta, i els fitxers no canvien de nom.';
$string['downloadselectedsubmissions'] = 'Baixa les trameses seleccionades';
$string['duedate'] = 'Data de venciment';
$string['duedate_help'] = 'És quan la tasca venç. Es permet retard en la tramesa, però qualsevol tramesa enviada després d\'aquesta data es marcarà com a lliurada amb retard. Per tal d\'evitar que es pugui trametre passada certa data, establiu una data límit a la tasca.';
$string['duedatecolon'] = 'Data de venciment: {$a}';
$string['duedateno'] = 'Sense data de venciment';
$string['duedatereached'] = 'La data de venciment per a aquesta tasca ja ha passat';
$string['duedatevalidation'] = 'La data de venciment ha de ser posterior a la data inicial de les trameses.';
$string['editaction'] = 'Accions...';
$string['editattemptfeedback'] = 'Edita la qualificació i la retroalimentació per l\'intent número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Esteu editant la retroacció d\'un intent anterior. Aquest és l\'intent {$a->attemptnumber} de {$a->totalattempts}.';
$string['editingstatus'] = 'S\'està editant l\'estat';
$string['editonline'] = 'Edita en línia';
$string['editsubmission'] = 'Edita la tramesa';
$string['editsubmission_help'] = 'Encara podeu fer canvis a la vostra tramesa';
$string['editsubmissionother'] = 'Edita la tramesa per a: {$a}';
$string['enabled'] = 'Habilitat';
$string['errornosubmissions'] = 'No hi ha tasques per baixar';
$string['errorquickgradingvsadvancedgrading'] = 'Les qualificacions no s\'han desat perquè aquesta tasca està emprant ara qualificacions avançades';
$string['errorrecordmodified'] = 'Les qualificacions no s\'han desat perquè algú ha modificat un o més registres més recentment que quan carregàreu la pàgina';
$string['eventallsubmissionsdownloaded'] = 'S\'estan descarregant totes les trameses.';
$string['eventassessablesubmitted'] = 'S\'ha tramès una tramesa.';
$string['eventbatchsetmarkerallocationviewed'] = '';
$string['eventbatchsetworkflowstateviewed'] = '';
$string['eventextensiongranted'] = 'S\'ha concedit una extensió.';
$string['eventfeedbackupdated'] = 'S\'ha actualitzat la retroacció';
$string['eventfeedbackviewed'] = 'S\'ha visualitzat la retroacció';
$string['eventgradingformviewed'] = 'S\'ha visualitzat el formulari de qualificació';
$string['eventgradingtableviewed'] = 'S\'ha visualitzat la taula de notes';
$string['eventidentitiesrevealed'] = 'Les identitats han estat revelades.';
$string['eventmarkerupdated'] = 'S\'ha actualitzat l\'avaluador assignat.';
$string['eventremovesubmissionformviewed'] = 'S\'ha visualitzat la confirmació de la supressió de la tramesa.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'S\'ha visualitzat la pàgina de confirmació de revelació d\'identitats.';
$string['eventstatementaccepted'] = 'L\'usuari ha acceptat la declaració de la tramesa.';
$string['eventsubmissionconfirmationformviewed'] = 'S\'ha visualitzat el formulari de confirmació de la tramesa.';
$string['eventsubmissioncreated'] = 'S\'ha creat la tramesa.';
$string['eventsubmissionduplicated'] = 'L\'usuari ha duplicat la seva tramesa.';
$string['eventsubmissionformviewed'] = 'S\'ha visualitzat el formulari de tramesa.';
$string['eventsubmissiongraded'] = 'La tramesa s\'ha avaluat.';
$string['eventsubmissionlocked'] = 'S\'han blocat les trameses de l\'usuari.';
$string['eventsubmissionstatusupdated'] = 'S\'ha actualitzat l\'estat de la tramesa.';
$string['eventsubmissionstatusviewed'] = 'S\'ha visualitzat l\'estat de la tasca.';
$string['eventsubmissionunlocked'] = 'S\'han desblocat les trameses de l\'usuari.';
$string['eventsubmissionupdated'] = 'S\'ha actualitzat la tasca.';
$string['eventsubmissionviewed'] = 'S\'ha visualitzat la tasca.';
$string['eventworkflowstateupdated'] = 'S\'ha actualitzat l\'estat del flux.';
$string['expandreviewpanel'] = 'Expandeix el plafó de revisió';
$string['extensionduedate'] = 'Data de venciment de la pròrroga';
$string['extensionnotafterduedate'] = 'La data de venciment de la pròrroga ha de ser posterior a la data de venciment de les trameses';
$string['extensionnotafterfromdate'] = 'La data de venciment de la pròrroga ha de ser posterior a la data inicial de les trameses';
$string['feedback'] = 'Retroacció';
$string['feedbackavailableanonhtml'] = 'Teniu una retroacció nova per a la vostra tramesa de la tasca «<i>{$a->assignment}</i>».<br /><br /> La podeu veure adjunta a la vostra <a href="{$a->url}">tramesa de la tasca</a>.';
$string['feedbackavailableanonsmall'] = 'Retroacció nova per a la tasca {$a->assignment}';
$string['feedbackavailableanontext'] = 'Teniu una retroacció nova per a la vostra tramesa de la tasca «{$a->assignment}».

La podeu veure adjunta a la vostra tramesa de la tasca:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} ha enviat una retroacció per a la vostra tramesa de la tasca «<i>{$a->assignment}</i>»<br /><br />
Podeu veure-la adjunta a la vostra <a href="{$a->url}">tramesa de la tasca</a>.';
$string['feedbackavailablesmall'] = '{$a->username} ha donat retroacció per a la tasca {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} ha enviat una retroacció per a la vostra tramesa de la tasca «{$a->assignment}»
Podeu veure-la adjunta a la vostra tramesa de la tasca: {$a->url}';
$string['feedbackplugin'] = 'Connector de retroacció';
$string['feedbackpluginforgradebook'] = 'El connector de retroacció posarà comentaris en el butlletí de qualificacions.';
$string['feedbackpluginforgradebook_help'] = 'Només un connector de retroacció de tasca pot posar retroacció en el butlletí de qualificacions.';
$string['feedbackplugins'] = 'Connectors de retroacció';
$string['feedbacksettings'] = 'Paràmetres de retroacció';
$string['feedbacktypes'] = 'Tipus de retroacció';
$string['filesubmissions'] = 'Fitxers de la tramesa';
$string['filter'] = 'Filtre';
$string['filtergrantedextension'] = 'Amb pròrroga concedida';
$string['filternone'] = 'Sense filtre';
$string['filternotsubmitted'] = 'No s\'ha tramès';
$string['filterrequiregrading'] = 'Requereix qualificació';
$string['filtersubmitted'] = 'S\'ha tramès';
$string['fixrescalednullgrades'] = 'Aquesta tasca conté algunes qualificacions errònies. Podeu <a href="{$a->link}"> arreglar automàticament aquestes qualificacions</a>. Açò pot afectar el total del curs.';
$string['fixrescalednullgradesconfirm'] = 'Esteu segurs que voleu arreglar les qualificacions errònies? Totes les qualificacions afectades se suprimiran. Açò pot afectar el total del curs.';
$string['fixrescalednullgradesdone'] = 'S\'han arranjat les qualificacions.';
$string['gradeabovemaximum'] = 'La qualificació ha de ser menor o igual que {$a}.';
$string['gradebelowzero'] = 'La qualificació ha de ser major o igual que zero.';
$string['gradecanbechanged'] = 'Es pot canviar la qualificació';
$string['gradechangessaveddetail'] = 'S\'han desat els canvis a la qualificació i a la retroacció.';
$string['graded'] = 'Qualificada';
$string['gradedby'] = 'Qualificat per';
$string['gradedfollowupsubmit'] = 'Qualificada: s\'ha rebut una tramesa posterior';
$string['gradedon'] = 'Qualificat el';
$string['gradelocked'] = 'Aquesta qualificació està bloquejada o rectificada al llibre de qualificacions.';
$string['gradeoutof'] = 'Qualificació sobre {$a}';
$string['gradeoutofhelp'] = 'Qualificació';
$string['gradeoutofhelp_help'] = 'Introduïu aquí la qualificació per a la tramesa de l\'estudiant. Podeu incloure decimals.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} ha actualitzat la tramesa  de la tasca <i>"{$a->assignment}" a les {$a->timeupdated}</i>.<br /><br />
Està <a href="{$a->url}">disponible al web</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} ha actualitzat la seva tramesa per a la tasca {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} ha actualitzat la tramesa  de la tasca "{$a->assignment}" a les {$a->timeupdated}

Està disponible aquí:

{$a->url}';
$string['gradestudent'] = 'Qualifica l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Qualifica {$a}';
$string['grading'] = 'Qualificació';
$string['gradingchangessaved'] = 'Els canvis a les notes han estat desats';
$string['gradingduedate'] = 'Recorda\'m de qualificar-ho';
$string['gradingduedate_help'] = 'És la data esperada en què s\'hauria d\'haver completat la qualificació de les trameses. Aquesta data s\'utilitza per prioritzar les notificacions del Tauler per als professors.';
$string['gradingdueduedatevalidation'] = 'La data de «Recorda\'m de qualificar-ho» no pot ser anterior a la data de venciment.';
$string['gradingduefromdatevalidation'] = 'La data de Recorda\'m de qualificar-ho no pot ser anterior a la data a partir de la qual es permet trametre.';
$string['gradingmethodpreview'] = 'Criteris de qualificació';
$string['gradingoptions'] = 'Opcions';
$string['gradingstatus'] = 'Estat de la qualificació';
$string['gradingstudent'] = 'S\'està qualificant l\'estudiant';
$string['gradingsummary'] = 'Resum de la qualificació';
$string['grantextension'] = 'Concedeix una pròrroga';
$string['grantextensionforusers'] = 'Concedeix una pròrroga a {$a} estudiants';
$string['groupoverrides'] = 'Excepcions de grup';
$string['groupoverridesdeleted'] = 'S\'han esborrat les excepcions de grup';
$string['groupsnone'] = 'No hi ha grups als quals tingueu accés.';
$string['groupsubmissionsettings'] = 'Paràmetres de la tramesa en grup';
$string['hiddenuser'] = 'Participant';
$string['hidegrader'] = 'Oculta la identitat de qui qualifica als estudiants';
$string['hidegrader_help'] = 'Oculta la identitat de qualsevol usuari que qualifiqui la tramesa d\'una tasca, de manera que els estudiants no puguin veure qui ha puntuat el seu treball.';
$string['hideshow'] = 'Mostra/Oculta';
$string['inactiveoverridehelp'] = '* L\'estudiant no té el grup o el rol correcte per realitzar la tramesa.';
$string['indicator:cognitivedepth'] = 'Tasca cognitiva';
$string['indicator:cognitivedepth_help'] = 'Aquest indicador es basa en la profunditat cognitiva assolida per l\'estudiant en una activitat del tipus tasca.';
$string['indicator:cognitivedepthdef_help'] = 'El participant ha assolit aquest percentatge de la implicació cognitiva oferta per les activitats de Tasca en el decurs d\'aquest interval d\'anàlisi (Nivells = No visualització, Visualització, Enviament, Visualització de retroalimentacions, Comenaris a les retroalimentacions, Reenviament després de veure les retroalimentacions)';
$string['indicator:socialbreadth'] = 'Tasca social';
$string['indicator:socialbreadth_help'] = 'Aquest indicador es basa en l\'abast social assolit per l\'estudiant en una activitat del tipus tasca.';
$string['instructionfiles'] = 'Fitxers amb instruccions';
$string['introattachments'] = 'Fitxers addicionals';
$string['introattachments_help'] = 'Es poden afegir fitxers addicionals per emprar-los en la tasca, com ara plantilles de resposta. Els enllaços de descàrrega dels arxius es mostraran a la pàgina de la tasca, sota la descripció.';
$string['invalidfloatforgrade'] = 'La qualificació proporcionada no es comprèn: {$a}';
$string['invalidgradeforscale'] = 'La qualificació proporcionada no era vàlida per a l\'escala actual';
$string['lastmodifiedgrade'] = 'Darrera modificació (qualificació)';
$string['lastmodifiedsubmission'] = 'Darrera modificació (tramesa)';
$string['latesubmissions'] = 'Trameses fora de termini';
$string['latesubmissionsaccepted'] = 'Permès fins {$a}';
$string['loading'] = 'S\'està carregant...';
$string['locksubmissionforstudent'] = 'Impedeix més trameses de l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Bloca les trameses';
$string['manageassignfeedbackplugins'] = 'Gestiona els connectors de retroacció de la tasca';
$string['manageassignsubmissionplugins'] = 'Gestiona els connectors de tramesa de la tasca';
$string['marker'] = 'Avaluador';
$string['markerfilter'] = 'Filtre d\'avaluador';
$string['markerfilternomarker'] = 'No hi ha marcador';
$string['markingallocation'] = 'Utilitza l\'assignació d\'avaluadors';
$string['markingallocation_help'] = 'Si s\'habilita alhora amb el flux d\'avaluació, es podran assignar avaluadors a estudiants concrets.';
$string['markingworkflow'] = 'Utilitza el flux d\'avaluació';
$string['markingworkflow_help'] = 'Si s\'habilita, les puntuacions passaran per una sèrie d\'estats abans de ser publicades. Això permet qualificar en múltiples passades i publicar les notes per a tots els estudiants alhora.';
$string['markingworkflowstate'] = 'Estat del flux d\'avaluació';
$string['markingworkflowstate_help'] = 'Estats possibles del flux d\'avaluació (en funció dels vostres permisos)

* No avaluada: No s\'ha iniciat l\'avaluació
* S\'està avaluant: L\'avaluació ha començat, però encara no ha acabat
* Avaluació completada: L\'avaluació ha acabat, però potser cal revisar-la per confirmar-la o corregir-la
* En revisió: El professor encarregat del control de qualitat està revisant ara mateix l\'avaluació
* A punt per publicar: L\'avaluació ha passat el control de qualitat, però és en espera fins que es concedeixi permís als estudiants per veure-la
* Publicada: Els estudiants poden accedir a la qualificació/retroalimentació';
$string['markingworkflowstateinmarking'] = 'Avaluant-se';
$string['markingworkflowstateinreview'] = 'En revisió';
$string['markingworkflowstatenotmarked'] = 'No avaluada';
$string['markingworkflowstatereadyforrelease'] = 'A punt per publicar';
$string['markingworkflowstatereadyforreview'] = 'Avaluació completada';
$string['markingworkflowstatereleased'] = 'Publicada';
$string['maxattempts'] = 'Quantitat màxima d\'intents';
$string['maxattempts_help'] = 'El nombre màxim d\'intents de trameses que pot fer un estudiant. Després que l\'estudiant arribi a aquest nombre d\'intents, la tramesa no es podrà tornar a obrir.';
$string['maxgrade'] = 'Qualificació màxima';
$string['maxperpage'] = 'Nombre màxim de tasques per pàgina';
$string['maxperpage_help'] = 'El nombre màxim de tasques que un qualificador pot veure a la pàgina de qualificació de les tasques. És útil per prevenir que el temps expiri en cursos amb un nombre molt alt d\'inscrits.';
$string['messageprovider:assign_notification'] = 'Notificacions de tasques';
$string['modulename'] = 'Tasca';
$string['modulename_help'] = 'El mòdul d\'activitat tasca permet al professor comunicar les instruccions, recollir els treballs i proporcionar qualificacions i retroacció.

Els estudiants poden trametre qualsevol contingut digital (fitxers), com ara documents de processador de textos, fulls de càlcul, imatges o clips d\'àudio i vídeo. Alternativament, o a més a més, la tasca pot requerir que els estudiants teclegin el text directament a l\'editor de text. Una tasca també pot utilitzar-se per recordar als estudiants les tasques del «món real» que han de completar fora de línia, com ara obres d\'art, i, per tant, que no requereixen cap tipus de contingut digital. Els estudiants poden trametre el treball de manera individual o com a membres d\'un grup.

En la revisió de les tasques, els professors poden deixar comentaris i pujar fitxers de retroacció, com ara trameses corregides de l\'estudiant, documents amb comentaris o retroacció d\'àudio parlat. Les tasques poden qualificar-se amb una escala numèrica o personalitzada o amb un mètode de qualificació avançada, com ara una rúbrica. Les qualificacions finals es registren en el butlletí de qualificacions.';
$string['modulenameplural'] = 'Tasques';
$string['moreusers'] = '{$a} més...';
$string['multipleteams'] = 'Membre de més d\'un grup';
$string['multipleteams_desc'] = 'La tasca requereix la tramesa en grups. Sou membre de més d\'un grup. Per poder trametre heu de ser membre de només un grup. Poseu-vos en contacte amb el professor per canviar la vostra adhesió a un grup.';
$string['multipleteamsgrader'] = 'Sou membre de més d\'un grup, per això no teniu els permisos per fer trameses.';
$string['mysubmission'] = 'La meva tramesa:';
$string['newsubmissions'] = 'Tasques trameses';
$string['noattempt'] = 'Cap intent';
$string['noclose'] = 'No hi ha data de tancament';
$string['nofiles'] = 'No hi ha fitxers.';
$string['nofilters'] = 'Sense filtres';
$string['nograde'] = 'No hi ha qualificació.';
$string['nolatesubmissions'] = 'No s\'accepten trameses fora de termini';
$string['nomoresubmissionsaccepted'] = 'Sols és permès per als participants que tenen concedida una pròrroga.';
$string['none'] = 'Cap';
$string['noonlinesubmissions'] = 'Aquesta tasca no requereix que trameteu res en línia.';
$string['noopen'] = 'No hi ha data d\'apertura';
$string['nosavebutnext'] = 'Següent';
$string['nosubmission'] = 'No s\'ha tramès res per a aquesta tasca';
$string['nosubmissionsacceptedafter'] = 'No s\'accepten trameses després de';
$string['noteam'] = 'No és membre de cap grup';
$string['noteam_desc'] = 'La tasca requereix la tramesa en grups. No sou membre de cap grup; per tant, no podeu fer una tramesa. Poseu-vos en contacte amb el professor per afegir-vos a un grup.';
$string['noteamgrader'] = 'No sou membre de cap grup, per això no teniu els permisos per fer trameses.';
$string['notgraded'] = 'Sense qualificació';
$string['notgradedyet'] = 'No s\'ha qualificat encara';
$string['notifications'] = 'Notificacions';
$string['notsubmittedyet'] = 'No s\'ha tramès encara';
$string['nousers'] = 'Sense usuaris';
$string['nousersselected'] = 'Cap usuari seleccionat';
$string['numberofdraftsubmissions'] = 'Esborranys';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissionsneedgrading'] = 'Necessiten qualificació';
$string['numberofsubmittedassignments'] = 'S\'han tramès';
$string['numberofteams'] = 'Grups';
$string['offline'] = 'No es requereix cap tramesa en línia';
$string['open'] = 'Obert';
$string['outlinegrade'] = 'Qualificació: {$a}';
$string['outof'] = '{$a->current} de {$a->total}';
$string['overdue'] = '<font color="red">La tasca ha vençut fa: {$a}</font>';
$string['override'] = 'Excepció';
$string['overridegroup'] = 'Estableix una excepció per al grup';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrideuser'] = 'Estableix una excepció per a l\'usuari';
$string['page-mod-assign-view'] = 'Pàgina principal del mòdul de tasques';
$string['page-mod-assign-x'] = 'Pàgina de qualsevol mòdul de tasques';
$string['paramtimeremaining'] = 'Manquen {$a}';
$string['participant'] = 'Participant';
$string['pluginadministration'] = 'Administració de la tasca';
$string['pluginname'] = 'Tasca';
$string['preventsubmissionnotingroup'] = 'Cal formar part d\'un grup per fer una tramesa';
$string['preventsubmissionnotingroup_help'] = 'Si s\'activa, els usuaris que no són membres d\'un grup no podran fer trameses.';
$string['preventsubmissions'] = 'Impedeix que l\'usuari faci més trameses per a aquesta tasca.';
$string['preventsubmissionsshort'] = 'Impedeix canvis en la tramesa';
$string['previous'] = 'Anterior';
$string['privacy:attemptpath'] = 'intent {$a}';
$string['privacy:blindmarkingidentifier'] = 'L\'identificador emprat per a la qualificació a cegues';
$string['privacy:gradepath'] = 'qualificació';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Dades de retroaccció per a la tasca.';
$string['privacy:metadata:assignfilter'] = 'Opcions de filtratge com ara «S\'ha tramès», «No s\'ha tramès», «Requereix qualificació» i «Amb pròrroga concedida»';
$string['privacy:metadata:assignmentid'] = 'ID de la tasca';
$string['privacy:metadata:assignmessageexplanation'] = 'Els missatges s\'envien als estudiants a través del servei de missatgeria.';
$string['privacy:metadata:assignperpage'] = 'Nombre de tasques mostrades per pàgina.';
$string['privacy:metadata:assignquickgrading'] = 'Una preferència per si s\'utilitza la qualificació ràpida o no.';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Dades de la tramesa per a la tasca.';
$string['privacy:metadata:grader'] = 'L\'ID d\'usuari de la persona que qualifica.';
$string['privacy:metadata:groupid'] = 'ID del grup del qual l\'usuari és membre.';
$string['privacy:metadata:mailed'] = 'Ja s\'ha enviat un missatge de correu electrònic a aquest usuari?';
$string['privacy:metadata:userid'] = 'ID de l\'usuari';
$string['quickgrading'] = 'Qualificació ràpida';
$string['quickgrading_help'] = 'La qualificació ràpida us permet d\'assignar qualificacions (i resultats) directament a la taula de trameses. La qualificació ràpida no és compatible amb la qualificació avançada i no es recomana quan qualifiquen diverses persones.';
$string['quickgradingchangessaved'] = 'S\'han desat els canvis en la qualificació';
$string['quickgradingresult'] = 'Qualificació ràpida';
$string['recordid'] = 'Identificador';
$string['removeallgroupoverrides'] = 'Esborra totes les excepcions de grup';
$string['removealluseroverrides'] = 'Esborra totes les excepcions d\'usuari';
$string['removesubmission'] = 'Suprimeix la tramesa';
$string['removesubmissionconfirm'] = 'Confirmeu que voleu suprimir les dades de la tramesa?';
$string['removesubmissionconfirmforstudent'] = 'Confirmeu que voleu suprimir les dades de la tramesa per a l\'estudiant {$a}?';
$string['removesubmissionforstudent'] = 'Suprimeix la tramesa per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'L\'opció de reobrir l\'intent fins que s\'aprova és incompatible amb la de qualificació a cegues, perquè les qualificacions no es publiquen al llibre de qualificacions fins que les identitats dels estudiants es mostren.';
$string['requireallteammemberssubmit'] = 'Requereix la tramesa de tots els membres del grup';
$string['requireallteammemberssubmit_help'] = 'Si s\'habilita, caldrà que tots els membres del grup d\'estudiants cliquin al botó de trametre per tal que la tasca de grup es consideri tramesa. Si s\'inhabilita, la tasca de grup es considerarà tramesa tan bon punt qualsevol membre del grup cliqui al botó de trametre.';
$string['requiresubmissionstatement'] = 'Requereix que els estudiants acceptin el compromís de tramesa';
$string['requiresubmissionstatement_help'] = 'Requereix que els estudiants acceptin el compromís de tramesa per a totes les trameses d\'aquesta tasca.';
$string['revealidentities'] = 'Mostra les identitats dels estudiants';
$string['revealidentitiesconfirm'] = 'Segur que voleu mostrar les identitats dels estudiants d\'aquesta tasca? Aquesta operació no es pot desfer. Una vegada s\'hagin mostrat les identitats dels estudiants, les seves puntuacions es traspassaran al llibre de qualificacions.';
$string['reverttodefaults'] = 'Retorna als paràmetres per defecte de la tasca';
$string['reverttodraft'] = 'Reverteix la tramesa a l\'estat d\'esborrany';
$string['reverttodraftforstudent'] = 'Reverteix la tramesa a esborrany per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Reverteix la tramesa a esborrany';
$string['reviewed'] = 'Revisada';
$string['save'] = 'Desa';
$string['saveallquickgradingchanges'] = 'Desa tots els canvis de la qualificació ràpida';
$string['saveandcontinue'] = 'Desa i continua';
$string['savechanges'] = 'Desa els canvis';
$string['savegradingresult'] = 'Qualificació';
$string['savenext'] = 'Desa i mostra el següent';
$string['saveoverrideandstay'] = 'Desa i introdueix una altra excepció';
$string['savingchanges'] = 'S\'estan desant els canvis...';
$string['scale'] = 'Escala';
$string['search:activity'] = 'Tasques: informació de l\'activitat';
$string['selectedusers'] = 'Usuaris seleccionats';
$string['selectlink'] = 'Seleccioneu...';
$string['selectuser'] = 'Seleccioneu {$a}';
$string['sendlatenotifications'] = 'Notifica el retard en les trameses a qui qualifica';
$string['sendlatenotifications_help'] = 'Si està activat, qui qualifica (normalment, els professors) rep un missatge cada vegada que un estudiant envia un treball amb retard. Els mètodes de missatgeria són configurables.';
$string['sendnotifications'] = 'Notifica les trameses a qui qualifica';
$string['sendnotifications_help'] = 'Si està activat, qui qualifica (normalment, els professors) rep un missatge cada vegada que un estudiant envia un treball prest, a temps o amb retard. Els mètodes de missatgeria són configurables.';
$string['sendstudentnotifications'] = 'Notifica als estudiants';
$string['sendstudentnotifications_help'] = 'Si s\'habilita aquesta opció, els estudiants rebran un missatge amb la qualificació actualitzada o la retroacció.';
$string['sendstudentnotificationsdefault'] = 'Paràmetre per defecte per a «Notifica als estudiants»';
$string['sendstudentnotificationsdefault_help'] = 'Defineix el valor per defecte de la casella de verificació "Notifica als estudiants" en el formulari de qualificació.';
$string['sendsubmissionreceipts'] = 'Envia la confirmació de la tramesa als estudiants';
$string['sendsubmissionreceipts_help'] = 'Aquest canvi permetrà la confirmació de la tramesa per als estudiants. Els estudiants rebran una notificació cada vegada que trametin una tasca amb èxit.';
$string['setmarkerallocationforlog'] = 'Assigna un avaluador: (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Assigna un avaluador';
$string['setmarkingworkflowstate'] = 'Estableix l\'estat del flux d\'avaluació';
$string['setmarkingworkflowstateforlog'] = 'Estableix l\'estat del flux d\'avaluació: (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'Paràmetres de la tasca';
$string['showrecentsubmissions'] = 'Mostra les trameses recents';
$string['status'] = 'Estat';
$string['studentnotificationworkflowstateerror'] = 'L\'estat del flux de la qualificació ha de ser «Publicada» si voleu notificar-ne els estudiants.';
$string['submission'] = 'Tramesa';
$string['submissioncopiedhtml'] = '<p>Heu fet una còpia de la vostra tramesa prèvia de la tasca «<i>{$a->assignment}</i>».</p><p>Podeu veure l\'estat de la vostra  <a href="{$a->url}">tramesa de tasca</a>.</p>';
$string['submissioncopiedsmall'] = 'Heu copiat la vostra tramesa prèvia de tasca corresponent a {$a->assignment}';
$string['submissioncopiedtext'] = 'Heu fet una còpia de la vostra tramesa prèvia de tasca corresponent a «{$a->assignment}»

Podeu veure l\'estat de la tasca tramesa:
{$a->url}';
$string['submissiondrafts'] = 'Requereix que els estudiants facin clic al botó Tramet';
$string['submissiondrafts_help'] = 'Si està activat, els estudiants hauran de fer clic al botó Tramet per establir la seva tramesa com a final. Això permet que els estudiants mantinguin una versió d\'esborrany de la tramesa en el sistema.
Si es canvia aquest paràmetre de «No» a «Sí» després que els estudiants hagin tramès algun treball, la tramesa es considerarà com a definitiva.';
$string['submissioneditable'] = 'L\'estudiant pot editar aquesta tramesa';
$string['submissionempty'] = 'No s\'ha tramès res';
$string['submissionlog'] = 'Estudiant: {$a->fullname}, estat: {$a->status}';
$string['submissionmodified'] = 'Teniu encara dades de tramesa. Sortiu d\'aquesta pàgina i torneu-ho a provar.';
$string['submissionmodifiedgroup'] = 'Algú ha modificat aquesta tramesa. Sortiu d\'aquesta pàgina i torneu-ho a provar.';
$string['submissionnotcopiedinvalidstatus'] = 'La tramesa no s\'ha copiat perquè s\'ha editat des que es va reobrir.';
$string['submissionnoteditable'] = 'L\'estudiant no pot editar aquesta tramesa';
$string['submissionnotready'] = 'Aquesta tasca no està preparada per trametre\'s:';
$string['submissionplugins'] = 'Connectors de tramesa';
$string['submissionreceipthtml'] = '<p>Heu realitzat una tramesa de la tasca «<i>{$a->assignment}</i>».</p><p>Podeu veure l\'estat de la vostra  <a href="{$a->url}">tramesa de tasca</a>.</p>';
$string['submissionreceiptotherhtml'] = 'S\'ha tramès la vostra tasca
«<i>{$a->assignment}</i>».<br /><br />
Podeu veure l\'estat de la vostra <a href="{$a->url}">tasca tramesa.</a>.';
$string['submissionreceiptothersmall'] = 'La vostra tasca {$a->assignment} ha estat tramesa.';
$string['submissionreceiptothertext'] = 'La vostra tasca «{$a->assignment}» ha estat tramesa.

Podeu veure l\'estat de la tramesa:

     {$a->url}';
$string['submissionreceipts'] = 'Envia confirmacions de la tramesa';
$string['submissionreceiptsmall'] = 'Heu realitzat la tramesa de la tasca {$a->assignment}';
$string['submissionreceipttext'] = 'Heu realitzat una tramesa de la tasca »{$a->assignment}»
Podeu veure l\'estat de la vostra tramesa de la tasca: {$a->url}';
$string['submissionsclosed'] = 'Trameses tancades';
$string['submissionsettings'] = 'Paràmetres de la tramesa';
$string['submissionslocked'] = 'Aquesta tasca no accepta trameses';
$string['submissionslockedshort'] = 'No es permeten canvis en la tramesa';
$string['submissionsnotgraded'] = 'Trameses sense qualificar: {$a}';
$string['submissionstatement'] = 'Compromís de tramesa';
$string['submissionstatement_help'] = 'Declaració que cada estudiant ha d\'acceptar per trametre el seu treball.';
$string['submissionstatementacceptedlog'] = 'L\'usuari {$a} ha acceptat el compromís de tramesa';
$string['submissionstatementdefault'] = 'Aquesta tasca conté únicament treball propi, i en el cas que hagi fet servir una font externa o l\'opinió d\'un company, n\'he citat l\'autor.';
$string['submissionstatementteamsubmission'] = 'Declaració de la tramesa en grup';
$string['submissionstatementteamsubmission_help'] = 'Declaració que cada estudiant ha d\'acceptar per trametre el treball del seu grup.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Declaració de la tramesa en grup en la qual tots els membres del grup trameten';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Declaració que cada estudiant ha d\'acceptar per trametre el seu treball com a membre d\'un grup.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Aquesta tramesa és el meu propi treball com a membre d\'un grup, excepte on he reconegut l\'ús de treballs d\'altres persones.';
$string['submissionstatementteamsubmissiondefault'] = 'Aquesta tramesa és el treball del meu grup, excepte on hem reconegut l\'ús de treballs d\'altres persones.';
$string['submissionstatus'] = 'Estat de la tramesa';
$string['submissionstatus_'] = 'No s\'ha tramès';
$string['submissionstatus_draft'] = 'Esborrany (no s\'ha tramès la versió definitiva)';
$string['submissionstatus_marked'] = 'Qualificada';
$string['submissionstatus_new'] = 'No s\'ha tramès';
$string['submissionstatus_reopened'] = 'Reoberta';
$string['submissionstatus_submitted'] = 'S\'ha tramès per qualificar';
$string['submissionstatusheading'] = 'Estat de la tramesa';
$string['submissionsummary'] = '{$a->status}. Darrera modificació en {$a->timemodified}';
$string['submissionteam'] = 'Grup';
$string['submissiontypes'] = 'Tipus de tramesa';
$string['submitaction'] = 'Tramet';
$string['submitassignment'] = 'Tramet la tasca';
$string['submitassignment_help'] = 'Un cop s\'hagi tramès la tasca no podreu fer més canvis';
$string['submitforgrading'] = 'Tramet per qualificar';
$string['submitted'] = 'S\'ha tramès';
$string['submittedearly'] = 'La tasca s\'ha tramès {$a} abans del límit';
$string['submittedlate'] = 'La tasca s\'ha tramès {$a} tard';
$string['submittedlateshort'] = '{$a} tard';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Connector de retroacció';
$string['subplugintype_assignfeedback_plural'] = 'Connectors de retroacció';
$string['subplugintype_assignsubmission'] = 'Connector de tramesa';
$string['subplugintype_assignsubmission_plural'] = 'Connectors de tramesa';
$string['teamname'] = 'Equip: {$a}';
$string['teamsubmission'] = 'Els estudiants trameten en grups';
$string['teamsubmission_help'] = 'Si s\'habilita, els estudiants es dividiran en grups basats en el conjunt de grups per defecte o bé en un agrupament personalitzat. Es compartirà una tramesa en grup entre els membres del grup, i tots aquests membres del grup podran veure els canvis a la tramesa que facin els altres.';
$string['teamsubmissiongroupingid'] = 'Agrupament per als grups d\'estudiants';
$string['teamsubmissiongroupingid_help'] = 'Aquest és l\'agrupament que utilitzarà la tasca per trobar grups d\'estudiants. Si no s\'estableix, s\'utilitzarà el conjunt de grups per defecte.';
$string['textinstructions'] = 'Instruccions de la tasca';
$string['timemodified'] = 'Darrera modificació';
$string['timeremaining'] = 'Temps restant';
$string['timeremainingcolon'] = 'Temps restant: {$a}';
$string['togglezoom'] = 'Amplia/redueix la regió';
$string['ungroupedusers'] = 'El paràmetre «Cal formar part d\'un grup per fer una tramesa» està activat, i alguns usuaris o no són membres de cap grup o són membres de més d\'un grup, per la qual cosa no poden fer trameses.';
$string['ungroupedusersoptional'] = 'El paràmetre \'Els estudiants trameten en grups\' està actiu i alguns usuaris o bé no són membres de cap grup, o bé són membres de més d\'un grup. Recordeu que les trameses d\'aquests estudiants es mostraran com a membres del \'Grup per defecte\'.';
$string['unlimitedattempts'] = 'Il·limitats';
$string['unlimitedattemptsallowed'] = 'Es permeten intents il·limitats.';
$string['unlimitedpages'] = 'Sense límit';
$string['unlocksubmissionforstudent'] = 'Permet trameses per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloca les trameses';
$string['unsavedchanges'] = 'Canvis no desats';
$string['unsavedchangesquestion'] = 'Hi ha canvis sense desar a les qualificacions o retroalimentacions. Voleu desar-los i continuar?';
$string['updategrade'] = 'Actualitza la qualificació';
$string['updatetable'] = 'Desa i actualitza la taula';
$string['upgradenotimplemented'] = 'No s\'ha implementat l\'actualització per al connector ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Pròrroga concedida fins: {$a}';
$string['usergrade'] = 'Qualificació de l\'usuari';
$string['useridlistnotcached'] = 'Els canvis a les qualificacions NO s\'han desat, ja que no ha estat possible determinar la procedència de la tramesa.';
$string['useroverrides'] = 'Excepcions d\'usuari';
$string['useroverridesdeleted'] = 'S\'han esborrat les excepcions d\'usuari';
$string['usersnone'] = 'Cap estudiant no té accés a la tasca.';
$string['userswhoneedtosubmit'] = 'Usuaris que manquen per trametre: {$a}';
$string['validmarkingworkflowstates'] = 'Estats vàlids del flux d\'avaluació';
$string['viewadifferentattempt'] = 'Visualitza un intent diferent';
$string['viewbatchmarkingallocation'] = 'Visualitza la pàgina de l\'assignació per lots d\'avaluadors.';
$string['viewbatchsetmarkingworkflowstate'] = 'Visualitza la pàgina de l\'assignació per lots d\'estats de flux d\'avaluació.';
$string['viewfeedback'] = 'Visualitza la retroacció';
$string['viewfeedbackforuser'] = 'Visualitza la retroacció de l\'usuari: {$a}';
$string['viewfull'] = 'Vista completa';
$string['viewfullgradingpage'] = 'Obre la pàgina de qualificació completa per proporcionar retroacció';
$string['viewgradebook'] = 'Visualitza el butlletí de qualificacions';
$string['viewgrading'] = 'Visualitza totes les trameses';
$string['viewgradingformforstudent'] = 'Visualitza la pàgina de qualificació per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Visualitza la pròpia pàgina de tramesa de la tasca';
$string['viewownsubmissionstatus'] = 'Visualitza la pròpia pàgina d\'estat de la tramesa';
$string['viewrevealidentitiesconfirm'] = 'Visualitza la pàgina de confirmació de la revelació de les identitats dels estudiants.';
$string['viewsubmission'] = 'Visualitza la tramesa';
$string['viewsubmissionforuser'] = 'Visualitza la tramesa per a l\'usuari: {$a}';
$string['viewsubmissiongradingtable'] = 'Visualitza la taula de qualificacions de la tramesa';
$string['viewsummary'] = 'Visualitza el resum';
$string['workflowfilter'] = 'Filtre d\'estat de flux';
$string['xofy'] = '{$a->x} de {$a->y}';
