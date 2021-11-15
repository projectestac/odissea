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
 * Strings for component 'studentquiz', language 'ca', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_comment'] = 'Afegeix un comentari';
$string['approve'] = 'Aprova';
$string['approve_toggle'] = 'Aprova/desaprova';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprovat';
$string['approveselectedscheck'] = 'Confirmeu que voleu aprovar/desaprovar les preguntes següents? <br /><br />{$a}';
$string['average_column_name'] = 'Mitjana';
$string['comment_column_name'] = 'Comentaris';
$string['comment_help'] = 'Escriu un comentari';
$string['comment_help_help'] = 'Escriu un comentari per a la pregunta';
$string['createnewquestion'] = 'Crea una pregunta nova';
$string['createnewquestionfirst'] = 'Crea la primera pregunta';
$string['difficulty_all_column_name'] = 'Dificultat comunitària';
$string['difficulty_level_column_name'] = 'Dificultat';
$string['emailcommentaddedbody'] = 'Hola, {$a->recepientname},

La vostra pregunta «{$a->questionname}» de l\'activitat StudentQuiz «{$a->modulename}» dins el curs «{$a->coursename}» ha estat comentada per «{$a->actorname}» el «{$a->timestamp}».

El comentari és: «{$a->commenttext}»

Podeu revisar aquesta pregunta a: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'La vostra pregunta «{$a->questionname}» ha estat comentada per {$a->username}.';
$string['emailcommentaddedsubject'] = 'S\'ha comentat la pregunta: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Hola, {$a->recepientname},

El comentari fet el «{$a->commenttime}» a la vostra pregunta «{$a->questionname}» de l\'activitat StudentQuiz «{$a->modulename}» dins el curs «{$a->coursename}» ha estat eliminat per «{$a->actorname}» el «{$a->timestamp}».

El comentari deia: «{$a->commenttext}»

Podeu revisar aquesta pregunta a: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'El comentari a la vostra pregunta «{$a->questionname}» ha estat eliminat per {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'S\'ha eliminat el comentari referent a la pregunta: {$a->questionname}';
$string['emailminecommentdeletedbody'] = 'Hola, {$a->recepientname},

El vostre comentari del «{$a->commenttime}» a la pregunta «{$a->questionname}» de l\'activitat StudentQuiz «{$a->modulename}» dins el curs «{$a->coursename}» ha estat eliminat per «{$a->actorname}» el «{$a->timestamp}».

El comentari deia: «{$a->commenttext}»

Podeu revisar aquesta pregunta a: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'El vostre comentari a la pregunta «{$a->questionname}» ha estat eliminat per {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'S\'ha eliminat el comentari a la pregunta: {$a->questionname}';
$string['filter'] = 'Filtre';
$string['filter_ishigher'] = 'És més alt';
$string['filter_islower'] = 'És més baix';
$string['filter_label_approved'] = 'Preguntes aprovades';
$string['filter_label_comment'] = 'Comentaris';
$string['filter_label_createdate'] = 'Creació';
$string['filter_label_difficulty_level'] = 'Dificultat';
$string['filter_label_fast_filters'] = 'Filtre ràpid per a preguntes';
$string['filter_label_myattempts'] = 'Els meus intents';
$string['filter_label_mydifficulty'] = 'La meva dificultat';
$string['filter_label_mylastattempt'] = 'El meu darrer intent';
$string['filter_label_myrate'] = 'La meva valoració';
$string['filter_label_onlyapproved'] = 'Aprovat';
$string['filter_label_onlyapproved_help'] = 'Preguntes aprovades pel vostre professor';
$string['filter_label_onlydifficult'] = 'Difícil per a tothom';
$string['filter_label_onlydifficult_help'] = 'Pregunta amb una dificultat mitjana de més de {$a}%';
$string['filter_label_onlydifficultforme'] = 'Difícil per a mi';
$string['filter_label_onlydifficultforme_help'] = 'Pregunta amb la meva dificultat de més del {$a}%';
$string['filter_label_onlygood'] = 'Bona';
$string['filter_label_onlygood_help'] = 'Pregunta amb una valoració mitjana de com a mínim {$a} estrelles';
$string['filter_label_onlymine'] = 'Meves';
$string['filter_label_onlymine_help'] = 'Preguntes que heu creat.';
$string['filter_label_onlynew'] = 'Sense respondre';
$string['filter_label_onlynew_help'] = 'Preguntes que mai heu respost';
$string['filter_label_question'] = 'Títol de la pregunta';
$string['filter_label_questiontext'] = 'Contingut de la pregunta';
$string['filter_label_rates'] = 'Valoració';
$string['filter_label_show_mine'] = 'Les meves preguntes';
$string['filter_label_tags'] = 'Etiqueta';
$string['finish_button'] = 'Acaba';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['latest_column_name'] = 'Més recent';
$string['messageprovider:commentadded'] = 'Notificació de comentari afegit';
$string['messageprovider:commentdeleted'] = 'Notificació de comentari eliminat';
$string['messageprovider:minecommentdeleted'] = 'Notificació de l\'eliminació del meu comentari';
$string['messageprovider:questionchanged'] = 'Notificació de canvis en les preguntes';
$string['mine_column_name'] = 'Meves';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'L\'activitat StudentQuiz permet als estudiants afegir preguntes per a tothom. A la visió general de StudentQuiz els estudiants poden filtrar les preguntes. També poden fitrar les preguntes creades per tothom per practicar. El professor té l\'opció de convertir en anònimes les preguntes creades per columna. <br><br>L\'activitat StudentQuiz premia els estudiants amb punts per motivar-los a afegir preguntes i practicar-hi. Els punts són a una llista en una taula de classificació.<br><br>Per a més informació, consulteu la <a href="https://studentquiz.hsr.ch/docs/">documentació de StudentQuiz</a>.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['more'] = 'Més';
$string['myattempts_column_name'] = 'Els meus intents';
$string['mydifficulty_column_name'] = 'La meva dificultat';
$string['mylastattempt_column_name'] = 'El meu darrer intent';
$string['myrate_column_name'] = 'La meva valoració';
$string['nav_export'] = 'Exportar';
$string['nav_import'] = 'Importar';
$string['needtoallowatleastoneqtype'] = 'Heu de permetre almenys un tipus de pregunta';
$string['next_button'] = 'Següent';
$string['no_comment'] = 'n.a.';
$string['no_comments'] = 'Sense comentaris';
$string['no_difficulty_level'] = 'n.a.';
$string['no_myattempts'] = 'n.a.';
$string['no_mylastattempt'] = 'n.a.';
$string['no_questions_add'] = 'No hi ha cap pregunta en aquest StudentQuiz. No dubteu a afegir-n\'hi.';
$string['no_questions_filter'] = 'Cap de les preguntes coincideix amb els criteris del vostre filtre. Reinicieu el filtre per veure-ho tot.';
$string['no_questions_selected_message'] = 'Seleccioneu com a mínim una pregunta per començar el qüestionari.';
$string['no_rates'] = 'n.a.';
$string['no_tags'] = 'n.a.';
$string['not_approved'] = '✗';
$string['number_column_name'] = 'Número';
$string['pagesize'] = 'Mida de la pàgina:';
$string['please_enrole_message'] = 'Inscriviu-vos al curs per veure el vostre progrés';
$string['pluginadministration'] = 'Administració de l\'StudentQuiz';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Anterior';
$string['progress_bar_caption'] = 'El vostre progrés en aquesta activitat StudentQuiz';
$string['questionsinuse'] = '(*Les preguntes marcades amb un asterisc ja s\'utilitzen en altres qüestionaris.)';
$string['ranking_block_title'] = 'Classificació';
$string['rate_all_column_name'] = 'Valoració comunitària';
$string['rate_column_name'] = 'Valoració';
$string['rate_error'] = 'Valoreu';
$string['rate_help'] = 'Valora aquesta pregunta';
$string['rate_help_help'] = 'Valora aquesta pregunta.  \\n 1 estrella és molt malament i 5 estrelles és molt bé';
$string['rate_points'] = 'Punts';
$string['rate_title'] = 'Valora';
$string['reportcomment'] = 'Denuncia';
$string['reportquiz_admin_title'] = 'Estadístiques de l\'estudiant';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Mitjana de les darreres respostes correctes de la comunitat';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Mitjana de les darreres respostes incorrectes de la comunitat';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Percentatge de respostes correctes de la comunitat';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Suma de les respostes correctes / suma de totes les respostes.';
$string['reportquiz_stats_all_progress'] = 'Progrés mitjà de la comunitat';
$string['reportquiz_stats_all_progress_help'] = 'Progrés mitjà de la comunitat basat en tots els membres de la comunitat.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Mitjana de les respostes correctes de la comunitat';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Mitjana de les respostes incorrectes de la comunitat';
$string['reportquiz_stats_all_questions_answered'] = 'Mitjana de totes les respostes de la comunitat';
$string['reportquiz_stats_all_questions_answered_help'] = 'Nombre mitjà de respostes donades per tots els membres de la comunitat.';
$string['reportquiz_stats_all_questions_approved'] = 'Nombre de preguntes aprovades';
$string['reportquiz_stats_all_questions_approved_help'] = 'El professorat pot aprovar preguntes per verificar-ne la correcció. Aquest és el nombre de totes les preguntes aprovades dins d\'aquest StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Nombre de preguntes dins d\'aquest StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Nombre de preguntes creades per la comunitat';
$string['reportquiz_stats_all_rates_average'] = 'Valoració mitjana de totes les preguntes';
$string['reportquiz_stats_all_rates_average_help'] = 'La valoració de cada pregunta és la mitjana d\'estrelles que ha rebut de la comunitat. Exemple: la comunitat ha creat 4 preguntes. Si la pregunta A va ser valorada amb 3 estrelles per la comunitat, la pregunta B = 4 estrelles, la pregunta C = 2 estrelles i la pregunta D = 5 estrelles, aleshores la mitjana de valoració de totes les preguntes és 3.5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Nombre de les vostres darreres respostes correctes';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Nombre de les vostres darreres respostes incorrectes';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Percentatge de les vostres respostes correctes';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Percentatge de totes les vostres respostes correctes del conjunt de totes les respostes donades en aquest StudentQuiz. Les respostes parcialment correctes es consideren respostes errònies.';
$string['reportquiz_stats_own_progress'] = 'Progrés personal';
$string['reportquiz_stats_own_progress_help'] = 'Percentatge de les vostres darreres respostes correctes del conjunt de totes les preguntes d\'aquest StudentQuiz. Les respostes parcialment correctes es consideren respostes errònies.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total de les vostres respostes correctes';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total de les vostres respostes incorrectes';
$string['reportquiz_stats_own_questions_answered'] = 'Total de totes les vostres respostes';
$string['reportquiz_stats_own_questions_answered_help'] = 'Nombre de totes les vostres respostes donades en aquest StudentQuiz';
$string['reportquiz_stats_own_questions_approved'] = 'Nombre de les vostres preguntes aprovades';
$string['reportquiz_stats_own_questions_approved_help'] = 'Els professors poden aprovar les preguntes per verificar-ne la correcció. Aquest és el nombre total de les vostres preguntes aprovades en aquest StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Nombre de preguntes amb què heu contribuït';
$string['reportquiz_stats_own_questions_created_help'] = 'Nombre de preguntes amb què heu contribuït en aquest StudentQuiz';
$string['reportquiz_stats_own_rates_average'] = 'La vostra mitjana de valoració rebuda';
$string['reportquiz_stats_own_rates_average_help'] = 'La valoració de cada pregunta és la mitjana d\'estrelles que s\'ha rebut de la comunitat. Exemple: heu creat les preguntes A i B. Si la pregunta A va ser valorada amb 3 estrelles per la comunitat i la  pregunta B amb 4 estrelles, la mitjana de valoració rebuda és 3.5.';
$string['reportquiz_stats_title'] = 'Estadístiques';
$string['reportquiz_total_attempt'] = 'Vegades que l\'usuari executa el qüestionari';
$string['reportquiz_total_obtained_marks'] = 'Nota total';
$string['reportquiz_total_questions_answered'] = 'Total de respostes';
$string['reportquiz_total_questions_right'] = 'Total de respostes correctes';
$string['reportquiz_total_questions_wrong'] = 'Respostes incorrectes';
$string['reportquiz_total_users'] = 'Nombre de participants';
$string['reportrank_table_column_approvedquestions'] = 'Punts per preguntes aprovades';
$string['reportrank_table_column_communitystatus'] = 'Estadístiques de la comunitat';
$string['reportrank_table_column_correctanswers'] = 'Respostes correctes';
$string['reportrank_table_column_countquestions'] = 'Punts per preguntes creades';
$string['reportrank_table_column_description'] = 'Descripció';
$string['reportrank_table_column_factor'] = 'Factor';
$string['reportrank_table_column_fullname'] = 'Nom complet';
$string['reportrank_table_column_incorrectanswers'] = 'Respostes incorrectes';
$string['reportrank_table_column_lastcorrectanswers'] = 'Punts pels darrers intents correctes';
$string['reportrank_table_column_lastincorrectanswers'] = 'Punts pels darrers intents incorrectes';
$string['reportrank_table_column_points'] = 'Punts';
$string['reportrank_table_column_progress'] = 'Progrés personal';
$string['reportrank_table_column_quantifier_name'] = 'Nom';
$string['reportrank_table_column_rank'] = 'Classificació';
$string['reportrank_table_column_summeanrates'] = 'Punts per estrelles rebudes';
$string['reportrank_table_column_total_points'] = 'Punts totals';
$string['reportrank_table_column_value'] = 'Valor';
$string['reportrank_table_column_yourstatus'] = 'Estadístiques personals';
$string['reportrank_table_quantifier_caption'] = 'Com s\'han calculat els vostres punts';
$string['reportrank_table_title'] = 'Classificació dels estudiants. Els 10 millors';
$string['reportrank_table_title_for_manager'] = 'Classificació dels estudiants';
$string['reportrank_title'] = 'Classificació';
$string['review_button'] = 'Revisió';
$string['setting_question_publishing'] = 'Publicació de la pregunta';
$string['setting_question_publishing_automatic'] = 'Publica les preguntes noves de manera automàtica';
$string['setting_question_publishing_help'] = 'Les preguntes publicades apareixen al conjunt de preguntes perquè altres estudiants les hi agafin. Es pot permetre que totes les preguntes es publiquin de manera automàtica, o bé se\'n pot requerir una aprovació abans de publicar-les. <br>Cal tenir en compte que aquest paràmetre només s\'aplica a les preguntes acabades de crear.';
$string['setting_question_publishing_require_approval'] = 'Requereix una aprovació abans de publicar les preguntes';
$string['settings_allowallqtypes'] = 'Permet tots els tipus de pregunta';
$string['settings_allowedqtypes'] = 'Tipus de pregunta permesos';
$string['settings_allowedqtypes_help'] = 'Aquí especifiqueu el tipus de preguntes que es permeten';
$string['settings_anonymous'] = 'Converteix l\'estudiant en anònim';
$string['settings_anonymous_help'] = 'Els estudiants no poden veure els noms dels altres.';
$string['settings_anonymous_label'] = 'Fes que els estudiants siguin anònims';
$string['settings_approvedquantifier'] = 'Factor de pregunta aprovat';
$string['settings_approvedquantifier_help'] = 'Punts per cada pregunta aprovada';
$string['settings_approvedquantifier_label'] = 'Punts per cada pregunta aprovada';
$string['settings_commentdeletionperiod'] = 'Edició de comentaris o període de supressió (minuts)';
$string['settings_commentdeletionperiod_help'] = 'Estableix el període (en minuts) en què el botó Edita/Suprimeix es trobarà disponible perquè els estudiants editin/suprimeixin el seu propi comentari (o la seva pròpia resposta a un comentari) un cop publicats. Es permeten valors d\'entre 0-60 minuts. Si el període de supressió s\'estableix a 0, els estudiants no podran editar/suprimir els seus propis comentaris. Cal tenir en compte que els professors i administradors sempre podran editar/suprimir els comentaris dels estudiants, i que també podran veure el contingut de qualsevol comentari que s\'hagi suprimit.';
$string['settings_email_digest_first_day'] = 'Quin és el primer dia de la setmana?';
$string['settings_email_digest_first_day_help'] = 'Si heu seleccionat un resum setmanal, aquesta opció us permet definir-ne el primer dia del període de set dies (que començaria a les 00h:00m:00s del dia que definiu). Això és útil d\'una manera especial si, per exemple, l\'activitat comença a mitjan setmana.';
$string['settings_email_digest_type'] = 'Tipus de resum de missatge de correu electrònic';
$string['settings_email_digest_type_daily_digest'] = 'Resum diari';
$string['settings_email_digest_type_help'] = 'Studentquiz disposa de diverses notificacions que podeu activar, com ara la que informa l\'estudiant que és autor de preguntes sobre qualsevol modificació en l\'estat de les dites preguntes (p. ex.: un professor ha aprovat una de les seves preguntes). Podeu emprar aquest paràmetre per determinar la freqüència d\'aquestes notificacions. Els resums de missatge de correu electrònic només s\'envien quan hi ha almenys una notificació dins el període establert.';
$string['settings_email_digest_type_no_digest'] = 'Sense resum (un missatge de correu electrònic per acció)';
$string['settings_email_digest_type_weekly_digest'] = 'Resum setmanal';
$string['settings_excluderoles'] = 'Exclou aquests rols de la classificació';
$string['settings_excluderoles_help'] = 'Els rols seleccionats es troben ocults a les classificacions; de totes maneres, els usuaris inscrits en aquests rols poden participar amb normalitat a l\'activitat';
$string['settings_forcecommenting'] = 'Imposa els comentaris';
$string['settings_forcecommenting_help'] = 'Imposa els comentaris a l\'intent de la pregunta';
$string['settings_forcerating'] = 'Imposa les valoracions';
$string['settings_forcerating_help'] = 'Imposa les valoracions a l\'intent de la pregunta';
$string['settings_lastcorrectanswerquantifier'] = 'Últim factor de resposta correcta';
$string['settings_lastcorrectanswerquantifier_help'] = 'Punts per cada resposta correcta en el darrer intent';
$string['settings_lastcorrectanswerquantifier_label'] = 'Punts de les últimes respostes correctes';
$string['settings_lastincorrectanswerquantifier'] = 'Últim factor de resposta incorrecta';
$string['settings_lastincorrectanswerquantifier_help'] = 'Punts per cada resposta incorrecta o parcialment correcta en l\'últim intent';
$string['settings_lastincorrectanswerquantifier_label'] = 'Punts de les últimes respostes incorrectes';
$string['settings_notification'] = 'Paràmetres de notificació';
$string['settings_questionquantifier'] = 'Factor de pregunta creat';
$string['settings_questionquantifier_help'] = 'Punts per cada pregunta creada';
$string['settings_questionquantifier_label'] = 'Punts per cada pregunta creada';
$string['settings_ratequantifier'] = 'Factor de valoració';
$string['settings_ratequantifier_help'] = 'Punts per cada estrella rebuda.';
$string['settings_ratequantifier_label'] = 'Multiplicador per la mitjana d\'estrelles rebudes per una pregunta';
$string['settings_removeqbehavior'] = 'Elimina el comportament de les preguntes del connector StudentQuiz';
$string['settings_removeqbehavior_help'] = 'Aquesta informació només hauria d\'aparèixer una vegada durant l\'actualització. Us informem que hem detectat que teniu instal·lat el connector del comportament de preguntes de l\'StudentQuiz. Aquest complement no és necessari, ja que intentem eliminar-lo automàticament. Si encara veieu aquesta configuració, desinstal·leu el complement del comportament de preguntes StudentQuiz manualment <a href="{$a}">aquí</ a>.';
$string['settings_removeqbehavior_label'] = 'Elimina el complement del comportament de preguntes StudentQuiz';
$string['settings_reportingemail'] = 'Adreça de correu electrònic per informar sobre comentaris ofensius';
$string['settings_reportingemail_help'] = 'Si es proporciona aquesta adreça de correu electrònic, aleshores apareix l\'enllaç Denuncia al costat de cada comentari. Els usuaris poden clicar aquet enllaç per denunciar comentaris ofensius. La informació s\'envia a aquesta adreça de correu electrònic.

Si aquest camp per a l\'adreça de correu electrònic es deixa en blanc, aleshores la funcionalitat Denuncia no es mostrarà (tret que s\'hagi proporcionat una adreça de correu electrònic per denunciar a nivell del lloc).

Podeu afegir més d\'una adreça de correu electrònic, sempre que les separeu amb un punt i coma.';
$string['settings_section_header_comment_rating'] = 'Paràmetres dels comentaris i les valoracions';
$string['settings_section_header_question'] = 'Paràmetres de la pregunta';
$string['show_less'] = 'Mostra menys';
$string['show_more'] = 'Mostra més';
$string['slot_of_slot'] = 'Pregunta {$ a-> slot} de {$ a-> slots} en aquest conjunt';
$string['start_quiz_button'] = 'Comença el qüestionari';
$string['state_approved'] = 'Aprovada';
$string['state_changed'] = 'Modificada';
$string['state_disapproved'] = 'Rebutjada';
$string['state_new'] = 'Nova';
$string['state_toggle'] = 'Modifica l\'estat';
$string['statistic_block_approvals'] = 'Preguntes aprovades';
$string['statistic_block_created'] = 'Preguntes creades';
$string['statistic_block_progress_available'] = 'Preguntes disponibles';
$string['statistic_block_progress_last_attempt_correct'] = 'Últim intent correcte';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Últim intent incorrecte';
$string['statistic_block_progress_never'] = 'Preguntes mai contestades';
$string['statistic_block_title'] = 'El meu progrés';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Afegeix una instància nova per a StudentQuiz';
$string['studentquiz:emailnotifyapproved'] = 'Notificació de pregunta aprovada';
$string['studentquiz:emailnotifychanged'] = 'Notificació de pregunta modificada';
$string['studentquiz:emailnotifycommentadded'] = 'Notificació de comentari nou';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notificació de comentari eliminat';
$string['studentquiz:manage'] = 'Modera les preguntes de l\'StudentQuiz';
$string['studentquiz:previewothers'] = 'Previsualitza les preguntes dels altres a StudentQuiz';
$string['studentquiz:submit'] = 'Envia preguntes a l\'StudentQuiz';
$string['studentquiz:unhideanonymous'] = 'Es poden veure els noms reals, fins i tot quan l\'anonimització està activa';
$string['studentquiz:view'] = 'Visualitza les preguntes a l\'StudentQuiz';
$string['studentquizname'] = 'Nom de l\'StudentQuiz';
$string['studentquizname_help'] = 'El nom d\'aquesta activitat StudentQuiz';
$string['tags'] = 'Etiquetes';
$string['unapprove'] = 'Desaprova';
