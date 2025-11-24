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
 * Strings for component 'adaptivequiz', language 'ca', version '4.5'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Capacitat estimada';
$string['abilityestimated_help'] = 'La capacitat estimada d\'un examinat s\'alinea amb la dificultat de la pregunta en què l\'examinat té una probabilitat del 50% de respondre la pregunta correctament. Per identificar el nivell de rendiment, feu coincidir el valor de l\'habilitat amb l\'interval de nivell de les preguntes (vegeu l\'interval després del símbol \'/\').';
$string['activityreports'] = 'Informe d\'intents';
$string['adaptivequiz:addinstance'] = 'Afegeix un nou qüestionari adaptatiu';
$string['adaptivequiz:attempt'] = 'Prova el qüestionari adaptatiu';
$string['adaptivequiz:reviewattempts'] = 'Revisar els enviaments de qüestionaris adaptatius';
$string['adaptivequiz:viewreport'] = 'Veure informes de qüestionaris adaptatius';
$string['adaptivequizname'] = 'Nom';
$string['adaptivequizname_help'] = 'Introduïu el nom de la instància del Qüestionari adaptatiu';
$string['all_attempts_deleted'] = 'S\'han suprimit tots els intents del qüestionari adaptatiu.';
$string['all_grades_removed'] = 'S\'han eliminat totes les qualificacions del Quiz Adaptatiu';
$string['answer'] = 'Resposta';
$string['answers_display_name'] = 'Respostes';
$string['attempt_questiondetails'] = 'Detalls de la pregunta';
$string['attempt_state'] = 'Estat de l\'intent';
$string['attempt_summary'] = 'Resum de l\'intent';
$string['attempt_user'] = 'Usuari';
$string['attemptclosed'] = 'L\'intent s\'ha tancat manualment.';
$string['attemptclosedstatus'] = 'Tancat manualment per {$a->current_user_name} (user-id: {$a->current_user_id}) el {$a->now}.';
$string['attemptdeleted'] = 'Intent suprimit per a {$a->name} enviat el {$a->timecompleted}';
$string['attemptfeedback'] = 'Intent de retroacció';
$string['attemptfeedback_help'] = 'Els comentaris de l\'intent es mostren a l\'usuari un cop finalitzat l\'intent.';
$string['attemptfeedbackdefaulttext'] = 'Has acabat l\'intent, gràcies per fer el qüestionari!';
$string['attemptfinishedtimestamp'] = 'Hora de finalització de l\'intent';
$string['attemptfirst'] = 'Primer intent';
$string['attemptlast'] = 'Últim intent';
$string['attemptnofirstquestion'] = 'Ho sento, però no he pogut definir la primera pregunta per iniciar l\'intent, possiblement el qüestionari està mal configurat.';
$string['attemptquestion_ability'] = 'Mesura de la capacitat';
$string['attemptquestion_abilitylogits'] = 'Capacitat mesurada (logits)';
$string['attemptquestion_difficulty'] = 'Dificultat de la pregunta (logits)';
$string['attemptquestion_diffsum'] = 'Suma de dificultat';
$string['attemptquestion_level'] = 'Nivell de pregunta';
$string['attemptquestion_rightwrong'] = 'Resposta correcta/incorrect';
$string['attemptquestion_stderr'] = 'Error estàndard (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Progrés de les preguntes: {$a}';
$string['attemptquestionsprogress_help'] = 'El nombre màxim de preguntes que es mostren aquí no és necessàriament el nombre de preguntes que heu de respondre durant el qüestionari. És el nombre MÀXIM POSSIBLE de preguntes que podeu respondre; el qüestionari pot acabar abans si la mesura de la capacitat està prou definida.';
$string['attemptsallowed'] = 'Intents permesos';
$string['attemptsallowed_help'] = 'El nombre de vegades que un estudiant pot intentar aquesta activitat';
$string['attemptstarttime'] = 'Hora d\'inici de l\'intent';
$string['attemptstate'] = 'Estat de l\'intent';
$string['attemptstopcriteria'] = 'Motiu de l\'intent d\'aturada';
$string['attemptsusernoprevious'] = 'Encara no has intentat aquest qüestionari.';
$string['attemptsuserprevious'] = 'Els vostres intents anteriors';
$string['attempttotaltime'] = 'Temps total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Torna a totes les preguntes';
$string['bestscore'] = 'Millor puntuació';
$string['bestscorestderror'] = 'Error estàndard';
$string['browsersecurity'] = 'Seguretat del navegador';
$string['browsersecurity_help'] = 'Si se selecciona "Finestra emergent de pantalla completa amb certa seguretat de JavaScript", el qüestionari només començarà si l\'estudiant té un navegador web habilitat per a JavaScript, el qüestionari apareixerà en una finestra emergent de pantalla completa que cobreix totes les altres finestres i no té controls de navegació i s\'impedeix, en la mesura del possible, que els estudiants utilitzin funcions com copiar i enganxar.';
$string['calcerrorwithinlimits'] = 'L\'error estàndard calculat de {$a->calerror} està dins dels límits imposats per l\'activitat {$a->definederror}';
$string['closeattempt'] = 'Tanca l\'intent';
$string['completionattemptcompletedcminfo'] = 'Fes un intent';
$string['completionattemptcompletedform'] = 'L\'estudiant ha d\'haver completat com a mínim un intent en aquesta activitat';
$string['confirmcloseattempt'] = 'Confirmeu que voleu tancar aquest intent de {$a->name} i finalitzar-lo?';
$string['confirmcloseattemptscore'] = 'S\'han respost {$a->num_questions} preguntes i la puntuació fins ara és de {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Aquest intent es va iniciar el {$a->started} i es va actualitzar per última vegada el {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmant l\'eliminació de l\'intent de {$a->name} enviat el {$a->timecompleted}';
$string['deleteattemp'] = 'Eliminar l\'intent';
$string['discrimination_display_name'] = 'Discriminació';
$string['downloadcsv'] = 'Descarrega el fitxer CSV';
$string['enterrequiredpassword'] = 'Introduïu la contrasenya requerida';
$string['errorattemptstate'] = 'Hi ha hagut un error en determinar l\'estat de l\'intent';
$string['errorclosingattempt_alreadycomplete'] = 'Aquest intent ja s\'ha completat, no es pot tancar manualment.';
$string['errorfetchingquest'] = 'No s\'ha pogut obtenir una pregunta per al nivell {$a->level}';
$string['errorlastattpquest'] = 'Error en comprovar el valor de resposta de l\'última pregunta contestada';
$string['errornumattpzero'] = 'Error amb el nombre de preguntes contestades igual a zero, però l\'usuari ha enviat una resposta a la pregunta anterior';
$string['errorsumrightwrong'] = 'La suma de les respostes correctes i incorrectes no és igual al nombre total de preguntes contestades';
$string['eventattemptcompleted'] = 'Intent completat';
$string['formelementdecimal'] = 'Introduïu un nombre decimal. Màxim 10 dígits i màxim 5 dígits a la dreta del punt decimal.';
$string['formelementempty'] = 'Introduïu un enter positiu de l\'1 al 999';
$string['formelementnegative'] = 'Introduïu un nombre positiu de l\'1 al 999';
$string['formelementnumeric'] = 'Introduïu un valor numèric de l\'1 al 999';
$string['formlowlevelgreaterthan'] = 'El nivell més baix ha de ser inferior al nivell més alt';
$string['formminquestgreaterthan'] = 'El nombre mínim de preguntes ha de ser inferior al nombre màxim de preguntes';
$string['formquestionpool'] = 'Seleccioneu com a mínim una categoria de preguntes';
$string['formstartleveloutofbounds'] = 'El nivell inicial ha de ser un número que estigui entre el nivell més baix i el més alt';
$string['formstderror'] = 'Cal introduir un percentatge inferior a 50 i superior o igual a 0';
$string['functiondisabledbysecuremode'] = 'Aquesta funcionalitat està inhabilitada actualment';
$string['gradehighest'] = 'Qualificació més alta';
$string['grademethod'] = 'Mètode de qualificació';
$string['grademethod_help'] = 'Quan es permeten diversos intents, hi ha disponibles els mètodes següents per calcular la nota final del test: * Nota més alta de tots els intents * Primer intent (s\'ignoren tots els altres intents) * Últim intent (s\'ignoren tots els altres intents)';
$string['graphlegend_error'] = 'Error estàndard';
$string['highestlevel'] = 'Nivell més alt de dificultat';
$string['highestlevel_help'] = 'El nivell més alt o més difícil del qual es poden seleccionar preguntes per a l\'avaluació. Durant un intent, l\'activitat no superarà aquest nivell de dificultat.';
$string['highlevelusers'] = 'Usuaris per sobre del nivell de pregunta';
$string['indvuserreport'] = 'Informe d\'intents d\'usuaris individuals per a {$a}';
$string['leveloutofbounds'] = 'El nivell sol·licitat {$a->level} està fora dels límits de l\'intent';
$string['lowestlevel'] = 'Nivell de dificultat més baix';
$string['lowestlevel_help'] = 'El nivell més baix o menys difícil del qual es poden seleccionar preguntes per a l\'avaluació. Durant un intent, l\'activitat no superarà aquest nivell de dificultat.';
$string['lowlevelusers'] = 'Usuaris per sota del nivell de pregunta';
$string['maximumquestions'] = 'Nombre màxim de preguntes';
$string['maximumquestions_help'] = 'El nombre màxim de preguntes que l\'estudiant pot intentar respondre';
$string['maxquestattempted'] = 'Nombre màxim de preguntes contestades';
$string['midlevelusers'] = 'Usuaris propers al nivell de pregunta';
$string['minimumquestions'] = 'Nombre mínim de preguntes';
$string['minimumquestions_help'] = 'El nombre mínim de preguntes que l\'estudiant ha d\'intentar respondre';
$string['missingtagprefix'] = 'Falta el prefix de l\'etiqueta';
$string['modformshowattemptprogress'] = 'Mostra el progrés del qüestionari als estudiants';
$string['modformshowattemptprogress_help'] = 'Quan es selecciona, durant l\'intent, l\'estudiant veurà una barra de progrés que indica quantes preguntes s\'han respost del nombre màxim.';
$string['modulename'] = 'Qüestionari adaptatiu';
$string['modulename_help'] = 'L\'activitat Qüestionari adaptatiu permet al professor crear qüestionaris que mesurin de manera eficient les habilitats dels estudiants. Els qüestionaris adaptatius consten de preguntes seleccionades del banc de preguntes que estan etiquetades amb una puntuació de la seva dificultat. Les preguntes es trien per coincidir amb el nivell d\'habilitat estimat de l\'estudiant que està contestant el qüestionari. Si l\'estudiant encerta una pregunta, a continuació es presenta una pregunta més desafiant. Si l\'estudiant respon incorrectament una pregunta, a continuació es presenta una pregunta menys desafiant. Aquesta tècnica es convertirà en una seqüència de preguntes que convergiran en el nivell d\'habilitat efectiu de l\'estudiant. El qüestionari s\'atura quan l\'habilitat de l\'estudiant es determina amb la precisió requerida. Aquesta activitat és la més adequada per determinar una mesura d\'habilitat o apatitud al llarg d\'una escala unidimensional. Tot i que l\'escala pot ser molt àmplia, totes les preguntes han de proporcionar una mesura d\'habilitat o aptitud a la mateixa escala. En una prova de nivell, per exemple, les preguntes de nivell baix a l\'escala que els principiants poden respondre correctament també les haurien de respondre experts, mentre que les preguntes de nivell superior a l\'escala només les haurien de respondre experts o per sort o casualitat. Les preguntes que no discriminen entre els estudiants  de diferents habilitats faran que la prova sigui ineficaç i poden proporcionar resultats no concloents. Les preguntes utilitzades al Qüestionari Adaptatiu han de * ser puntuades automàticament com a correctes/incorrectes * estar etiquetades amb la seva dificultat mitjançant \'adpq_\' seguit d\'un nombre enter positiu que estigui dins del rang del qüestionari <br>El Qüestionari Adaptatiu es pot configurar per * definir el rang de dificultats de les preguntes/habilitats de l\'usuari que s\'han de mesurar. 1-10, 1-16 i 1-100 són exemples de rangs vàlids. * definir la precisió necessària abans que s\'aturi el qüestionari. Sovint, un error del 5% en la mesura de l\'habilitat és una regla d\'aturada adequada * requerir un nombre mínim de preguntes per respondre * requerir un nombre màxim de preguntes que es puguin respondre Aquesta descripció i el procés de prova en aquesta activitat es basen en <a href="http://www.rasch.org/memo69.pdf">Proves adaptatives per ordinador: una metodologia que ha arribat el seu moment</a> de John Michael Linacre, Ph.D. Laboratori Psicometric MESA - Universitat de Chicago. Memoràndum MESA núm. 69.';
$string['modulenameplural'] = 'Qüestionari adaptatiu';
$string['name'] = 'Nom';
$string['noattemptsallowed'] = 'No es permeten més intents en aquesta activitat';
$string['nonewmodules'] = 'No s\'han trobat instàncies de Qüestionari adaptatiu';
$string['nopermission'] = 'No teniu permís per veure aquest recurs';
$string['notinprogress'] = 'Aquest intent no està en curs.';
$string['notyourattempt'] = 'Aquest no és el teu intent de fer l\'activitat';
$string['numofattemptshdr'] = 'Nombre d\'intents';
$string['percent_correct_display_name'] = '% Correcte';
$string['pluginadministration'] = 'Qüestionari adaptatiu';
$string['pluginname'] = 'Qüestionari adaptatiu';
$string['question_report'] = 'Anàlisi de preguntes';
$string['questionanalysisbtn'] = 'Anàlisi de preguntes';
$string['questionnumber'] = 'Pregunta #';
$string['questionpool'] = 'Grup de preguntes';
$string['questionpool_help'] = 'Seleccioneu la categoria o categories de preguntes d\'on l\'activitat extreurà preguntes durant un intent.';
$string['questions_report'] = 'Informe sobre les preguntes';
$string['questionsattempted'] = 'Suma de preguntes contestades';
$string['questionspoolerrornovalidstartingquestions'] = 'Les categories de preguntes seleccionades no contenen preguntes etiquetades correctament per coincidir amb el nivell de dificultat inicial seleccionat.';
$string['recentactquestionsattempted'] = 'Preguntes contestades: {$a}';
$string['recentattemptstate'] = 'Estat de l\'intent:';
$string['recentcomplete'] = 'Completat';
$string['recentinprogress'] = 'En curs';
$string['reportanswersdistributionchartdisplaystacked'] = 'Barres de visualització apilades';
$string['reportanswersdistributionchartnumrightlabel'] = 'Nombre de respostes correctes';
$string['reportanswersdistributionchartnumwronglabel'] = 'Nombre de respostes incorrectes';
$string['reportanswersdistributionchartxaxislabel'] = 'Dificultat de la pregunta';
$string['reportanswersdistributionchartyaxislabel'] = 'Nombre de respostes';
$string['reportattemptadmanswerright'] = 'Correcte';
$string['reportattemptadmanswerwrong'] = 'Incorrecte';
$string['reportattemptadmchartadmdifflabel'] = 'Dificultat administrada';
$string['reportattemptadmcharttargetdifflabel'] = 'Dificultat objectiu';
$string['reportattemptanswerdistributiontab'] = 'Distribució de respostes';
$string['reportattemptgraphtab'] = 'Gràfic d\'intents';
$string['reportattemptgraphtabletitle'] = 'Vista de taula del gràfic d\'intents';
$string['reportattemptquestionsdetailstab'] = 'Detalls de les preguntes';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - revisió de l\'intent de {$a->fullname} enviat el {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'tots els usuaris que ho han intentat';
$string['reportattemptsenrolledwithattempts'] = 'participants que han fet intents';
$string['reportattemptsenrolledwithnoattempts'] = 'participants que NO han fet intents';
$string['reportattemptsfilterformheader'] = 'Filtratge';
$string['reportattemptsfilterformsubmit'] = 'Filtre';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Inclou els usuaris amb inscripcions inactives';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Si inclou usuaris amb inscripcions suspeses.';
$string['reportattemptsfilterusers'] = 'Mostra';
$string['reportattemptsnotenrolled'] = 'usuaris no inscrits que han fet intents';
$string['reportattemptspersistentfilter'] = 'Filtre persistent';
$string['reportattemptspersistentfilter_help'] = 'Quan es marca aquesta opció, la configuració del filtre següent s\'emmagatzemarà quan s\'enviï i s\'aplicarà cada vegada que visiteu la pàgina de l\'informe.';
$string['reportattemptsprefsformheader'] = 'Preferències d\'informes';
$string['reportattemptsprefsformsubmit'] = 'Aplica';
$string['reportattemptsresetfilter'] = 'Restableix el filtre';
$string['reportattemptsshowinitialbars'] = 'Mostra la barra d\'inicials';
$string['reportattemptsummarytab'] = 'Resum de l\'intent';
$string['reportattemptsusersperpage'] = 'Nombre d\'usuaris que es mostren:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - informe d\'intents d\'usuaris individuals per a {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - informe de preguntes';
$string['reportuserattemptstitleshort'] = 'Intents de {$a}';
$string['requirepassword'] = 'Es requereix contrasenya';
$string['requirepassword_help'] = 'Els estudiants han d\'introduir una contrasenya abans de poder començar el seu intent';
$string['requirepasswordmessage'] = 'Per a poder respondre, has de saber la contrasenya del qüestionari';
$string['resetadaptivequizsall'] = 'Suprimeix tots els intents del qüestionari adaptatiu';
$string['result'] = 'Resultat';
$string['reviewattempt'] = 'Revisar l\'intent';
$string['reviewattemptreport'] = 'Revisió de l\'intent feta per {$a->fullname} enviada el {$a->finished}';
$string['score'] = 'Puntuació';
$string['standarderror'] = 'Error estàndard per aturar';
$string['standarderror_help'] = 'Quan la quantitat d\'error en la mesura de la capacitat de l\'usuari cau per sota d\'aquesta quantitat, el qüestionari s\'aturarà. Ajusteu aquest valor del 5% per exigir més o menys precisió en la mesura de la capacitat.';
$string['standarderrorhdr'] = 'Error estàndard';
$string['startattemptbtn'] = 'Iniciar l\'intent';
$string['startinglevel'] = 'Nivell inicial de dificultat';
$string['startinglevel_help'] = 'Quan l\'alumne comença un intent, l\'activitat seleccionarà aleatòriament una pregunta que coincideixi amb el nivell de dificultat.';
$string['statistic'] = 'Estadística';
$string['stopingconditionshdr'] = 'Condicions d\'aturada';
$string['submitanswer'] = 'Envia la resposta';
$string['times_used_display_name'] = 'Vegades utilitzades';
$string['updateattempterror'] = 'Error en intentar actualitzar el registre d\'intents';
$string['user'] = 'Usuari';
$string['value'] = 'Valor';
$string['wrongpassword'] = 'La contrasenya és incorrecta';
