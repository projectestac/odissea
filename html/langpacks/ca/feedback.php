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
 * Strings for component 'feedback', language 'ca', version '4.5'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Afegeix una pregunta';
$string['add_pagebreak'] = 'Afegeix un salt de pàgina';
$string['adjustment'] = 'Paràmetre';
$string['after_submit'] = 'Després de la tramesa';
$string['allowfullanonymous'] = 'Habilita l\'anonimat complet';
$string['analysis'] = 'Anàlisi';
$string['anonymous'] = 'Les respostes seran anònimes';
$string['anonymous_edit'] = 'Enregistrament dels noms d\'usuari';
$string['anonymous_entries'] = 'Entrades anònimes ({$a})';
$string['anonymous_user'] = 'Usuari anònim';
$string['answerquestions'] = 'Respon les preguntes';
$string['append_new_items'] = 'Afegeix elements nous';
$string['autonumbering'] = 'Numeració automàtica de les preguntes';
$string['autonumbering_help'] = 'Habilita o inhabilita la numeració automàtica per a cada pregunta';
$string['average'] = 'Mitjana';
$string['bold'] = 'Negreta';
$string['calendarend'] = '{$a} es tanca';
$string['calendarstart'] = '{$a} s\'obre';
$string['cannotaccess'] = 'Sols podeu accedir a aquesta retroalimentació des d\'un curs';
$string['cannotsavetempl'] = 'no és permès desar les plantilles';
$string['captcha'] = 'Test de Turing (CAPTCHA)';
$string['captchanotset'] = 'El test de Turing no s\'ha configurat.';
$string['check'] = 'Opcions múltiples - respostes excloents';
$string['check_values'] = 'Respostes possibles';
$string['checkbox'] = 'Opcions múltiples - es permeten respostes múltiples (caselles de selecció)';
$string['choosefile'] = 'Tria un fitxer';
$string['chosen_feedback_response'] = 'Resposta de retroalimentació escollida';
$string['closebeforeopen'] = 'Heu especificat una data d\'acabament anterior a la data d\'inici.';
$string['complete_the_form'] = 'Responeu les preguntes';
$string['completed'] = 'Completat';
$string['completed_feedbacks'] = 'Respostes enviades';
$string['completedon'] = 'S\'ha completat el {$a}';
$string['completiondetail:submit'] = 'Tramet la retroalimentació';
$string['completionsubmit'] = 'Mostra com a completada si s\'ha tramès la retroalimentació';
$string['configallowfullanonymous'] = 'Si habiliteu aquesta opció, els usuaris podran completar una activitat de retroalimentació a la pàgina principal sense necessitat d\'iniciar sessió.';
$string['confirmdeleteentry'] = 'Confirmeu que voleu suprimir aquesta entrada?';
$string['confirmdeleteitem'] = 'Confirmeu que voleu suprimir aquest element?';
$string['confirmdeletetemplate'] = 'Confirmeu que voleu suprimir aquesta plantilla?';
$string['confirmusetemplate'] = 'Confirmeu que voleu utilitzar aquesta plantilla?';
$string['continue_the_form'] = 'Continueu responent les preguntes';
$string['count_of_nums'] = 'Recompte de nombres';
$string['courseid'] = 'ID del curs';
$string['creating_templates'] = 'Desa aquestes preguntes com una plantilla nova.';
$string['delete_entry'] = 'Suprimeix l\'entrada';
$string['delete_item'] = 'Suprimeix la pregunta';
$string['delete_old_items'] = 'Suprimeix els elements antics';
$string['delete_pagebreak'] = 'Suprimeix el salt de pàgina';
$string['delete_template'] = 'Suprimeix la plantilla';
$string['delete_templates'] = 'Suprimeix la plantilla...';
$string['depending'] = 'Dependències';
$string['depending_help'] = 'És possible mostrar un element en funció del valor d\'un altre element. <br />
<strong>Aquí teniu un exemple.</strong><br /> <ul>
<li>Primer creeu un element (variable independent) del qual dependrà un altre element.</li>
<li>A continuació afegiu un salt de pàgina.</li>
<li>Després afegiu els elements (variables dependents) que depenen del valor de l\'element creat anteriorment.<br />
Trieu l\'element de la llista anomenat «Element de dependència» i indiqueu el valor requerit al quadre de text «Valor de dependència»</li> </ul>
<strong>L\'estructura hauria de ser com aquesta:</strong>
 <ol>
<li>Element 1 P: Teniu cotxe? R: Sí/No</li>
<li>Salt de pàgina</li>
<li>Element 2 P: Quin és el color del vostre cotxe?<br /> (aquest element depèn de l\'element 1 amb valor = Sí)</li>
<li>Element 3 P: Per què no teniu cotxe?<br /> (aquest element depèn de l\'element 1 amb valor = No)</li>
<li> ...altres elements</li>
</ol>';
$string['dependitem'] = 'Element de dependència';
$string['dependvalue'] = 'Valor de dependència';
$string['description'] = 'Descripció';
$string['do_not_analyse_empty_submits'] = 'No analitzeu els enviaments buits';
$string['downloadresponseas'] = 'Descarrega totes les respostes com a:';
$string['drop_feedback'] = 'Suprimeix d\'aquest curs';
$string['dropdown'] = 'Opcions múltiples - resposta única permesa (menú desplegable)';
$string['dropdown_values'] = 'Respostes';
$string['dropdownlist'] = 'Opcions múltiples - resposta única (menú desplegable)';
$string['dropdownrated'] = 'Menú desplegable (puntuat)';
$string['edit_item'] = 'Edita la pregunta';
$string['edit_items'] = 'Edita les preguntes';
$string['email_notification'] = 'Habilita la notificació de les trameses';
$string['email_notification_help'] = 'Si s\'habilita aquesta opció, els professors rebran una notificació de les trameses de retroalimentacions.';
$string['emailteachermail'] = '{$a->username} ha completat l\'activitat de retroalimentació: \'{$a->feedback}\'

Podeu veure-la aquí:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} ha completat l\'activitat de retroalimentació: <i>\'{$a->feedback}\'</i></p>
<p>La podeu veure <a href="{$a->url}">al web.</a>.</p>';
$string['entries_saved'] = 'Les vostres respostes s\'han desat.';
$string['eventresponsedeleted'] = 'S\'ha suprimit la resposta';
$string['eventresponsesubmitted'] = 'S\'ha enviat la resposta';
$string['export_questions'] = 'Exporta les preguntes';
$string['export_to_excel'] = 'Exporta a Excel';
$string['feedback:addinstance'] = 'Afegeix una nova retroalimentació';
$string['feedback:complete'] = 'Completa una retroalimentació';
$string['feedback:createprivatetemplate'] = 'Crea una plantilla privada';
$string['feedback:createpublictemplate'] = 'Crea una plantilla pública';
$string['feedback:deletesubmissions'] = 'Suprimeix els enviaments completats';
$string['feedback:deletetemplate'] = 'Suprimeix la plantilla';
$string['feedback:edititems'] = 'Edita els elements';
$string['feedback:mapcourse'] = 'Associa cursos a retroalimentació globals';
$string['feedback:receivemail'] = 'Rep notificacions per correu electrònic';
$string['feedback:view'] = 'Visualitza una retroalimentació';
$string['feedback:viewanalysepage'] = 'Mostra la pàgina d\'anàlisi després de l\'enviament';
$string['feedback:viewreports'] = 'Mostra els informes';
$string['feedback_is_not_for_anonymous'] = 'La retroalimentació no és per a usuaris anònims';
$string['feedback_is_not_open'] = 'La retroalimentació no està oberta';
$string['feedbackclose'] = 'Permet les respostes a';
$string['feedbackcompleted'] = '{$a->username} ha completat {$a->feedbackname}';
$string['feedbackopen'] = 'Permet respostes des del';
$string['file'] = 'Fitxer';
$string['filter_by_course'] = 'Filtra per curs';
$string['handling_error'] = 'S\'ha produït un error en la gestió d\'accions del mòdul de retroalimentació';
$string['hide_no_select_option'] = 'Amaga l\'opció "No seleccionat"';
$string['horizontal'] = 'Horitzontal';
$string['import_questions'] = 'importa preguntes';
$string['import_successfully'] = 'Importació realitzada amb èxit';
$string['importfromthisfile'] = 'importa des d\'aquest fitxer';
$string['indicator:cognitivedepthdef_help'] = 'El participant ha assolit aquest percentatge de la implicació cognitiva oferta per les activitats de Retroalimentació en el decurs d\'aquest interval d\'anàlisi (Nivells = No visualització, Visualització, Enviament)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Informació';
$string['infotype'] = 'Tipus d\'informació';
$string['insufficient_responses'] = 'respostes insuficients';
$string['insufficient_responses_for_this_group'] = 'No hi ha prou respostes per a aquest grup';
$string['insufficient_responses_help'] = 'Per a mantenir l\'anonimat de la retroalimentació calen com a mínim dues respostes.';
$string['item_label'] = 'Etiqueta';
$string['item_name'] = 'Pregunta';
$string['label'] = 'Àrea de text i multimèdia';
$string['labelcontents'] = 'Continguts';
$string['mapcourse'] = 'Associa retroalimentacions a cursos';
$string['mapcourse_help'] = 'Per defecte, els formularis de retroalimentació creats en la vostra pàgina principal estan disponibles a tot el lloc web i apareixeran en tots els cursos que utilitzin el bloc de retroacció. Podeu imposar que aparegui el formulari de retroalimentació marcant-lo com a bloc fix o limitar els cursos en què apareixerà el formulari de retroalimentació associant-lo a cursos específics.';
$string['mapcourseinfo'] = 'Aquesta és una retroalimentació per a tot el lloc que està disponible per a tots els cursos que utilitzin el bloc de retroalimentació. Podeu, tanmateix, limitar els cursos en què apareixerà fent una associació o mapatge. Cerqueu el curs i associeu-lo a aquesta retroalimentació.';
$string['mapcoursenone'] = 'No hi ha cursos associats. La retroalimentació està disponible per a tots els cursos.';
$string['mapcourses'] = 'Associa una retroalimentació a cursos.';
$string['mappedcourses'] = 'Cursos associats';
$string['mappingchanged'] = 'L\'associació del curs ha canviat';
$string['maximal'] = 'Màxim';
$string['messageprovider:message'] = 'Recordatori de la retroalimentació';
$string['messageprovider:submission'] = 'Notificacions de la retroalimentació';
$string['minimal'] = 'Mínim';
$string['mode'] = 'Mode';
$string['modulename'] = 'Retroalimentació';
$string['modulename_help'] = 'El mòdul d\'activitat de retroacció permet al professor crear una enquesta personalitzada per recollir la retroalimentació dels participants utilitzant diversos tipus de preguntes que inclouen opcions múltiples, de sí/no o d\'introducció de text.

Les respostes de la retroalimentació poden ser anònimes, si es vol, i els resultats es poden mostrar a tots els participants o es poden restringir només als professors. Qualsevol activitat de retroalimentació a la pàgina principal del lloc també pot ser completada pels usuaris no autenticats.

Les activitats de retroalimentació es poden utilitzar:

* Per a valoracions del curs i per ajudar a millorar el contingut per a posteriors participants.
* Per permetre als participants inscriure\'s a mòduls del curs, esdeveniments, etc.
* Per a enquestes a visitants sobre opcions de cursos, polítiques de la institució educativa, etc.
* Per a enquestes contra l\'assetjament escolar on els estudiants puguin informar sobre incidències de manera anònima.';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Retroaccions';
$string['move_item'] = 'Mou aquesta pregunta';
$string['multichoice'] = 'Opcions múltiples';
$string['multichoice_values'] = 'Valors de les opcions múltiples';
$string['multichoicerated'] = 'Opcions múltiples (puntuades)';
$string['multichoicetype'] = 'Tipus d\'opcions múltiples';
$string['multiplesubmit'] = 'Permet trameses múltiples';
$string['multiplesubmit_help'] = 'Si s\'habiliten les enquestes anònimes, els usuaris podran trametre la retroalimentació una quantitat de vegades il·limitada.';
$string['name'] = 'Nom';
$string['name_required'] = 'Nom (obligatori)';
$string['next_page'] = 'Pàgina següent';
$string['no_handler'] = 'No existeix un gestor d\'acció per a';
$string['no_itemlabel'] = 'Sense etiqueta';
$string['no_itemname'] = 'Element sense nom';
$string['no_items_available_yet'] = 'Encara no s\'han definit preguntes';
$string['no_templates_available_yet'] = 'Encara no hi ha plantilles';
$string['non_anonymous'] = 'El nom de l\'usuari es registrarà i es mostrarà amb les respostes';
$string['non_anonymous_entries'] = 'Entrades no anònimes ({$a})';
$string['non_respondents_students'] = 'Estudiants que no han respost ({$a})';
$string['not_completed_yet'] = 'Encara no s\'ha completat';
$string['not_selected'] = 'No s\'ha seleccionat';
$string['not_started'] = 'No s\'ha iniciat';
$string['numberoutofrange'] = 'Número fora de límits';
$string['numeric'] = 'Resposta numèrica';
$string['numeric_range_from'] = 'Interval des de';
$string['numeric_range_to'] = 'Interval fins';
$string['of'] = 'de';
$string['oldvaluespreserved'] = 'Totes les preguntes antigues i els valors assignats es mantindran';
$string['oldvalueswillbedeleted'] = 'Les preguntes actuals i totes les respostes es suprimiran.';
$string['only_one_captcha_allowed'] = 'En una retroalimentació només es pot posar un sol Test de Turing';
$string['overview'] = 'Resum';
$string['page'] = 'Pàgina';
$string['page-mod-feedback-x'] = 'Qualsevol pàgina de mòduls de retroalimentació';
$string['page_after_submit'] = 'Missatge de compleció';
$string['pagebreak'] = 'Salt de pàgina';
$string['pluginadministration'] = 'Administració de la retroalimentació';
$string['pluginname'] = 'Retroalimentació';
$string['position'] = 'Posició';
$string['previewquestions'] = 'Previsualitza les preguntes';
$string['previous_page'] = 'Pàgina anterior';
$string['public'] = 'Públic';
$string['question'] = 'Pregunta';
$string['questionandsubmission'] = 'Paràmetres de la pregunta i de la tramesa';
$string['questions'] = 'Preguntes';
$string['questionslimited'] = 'Es mostren només les primeres {$a} respostes, vegeu les respostes individuals o descarregueu la taula de dades per a veure-ho tot.';
$string['radio'] = 'Opcions múltiples - una resposta';
$string['radio_values'] = 'Respostes';
$string['ready_feedbacks'] = 'Retroalimentacions llestes';
$string['required'] = 'Requerit';
$string['resetting_data'] = 'Reinicia les respostes de retroalimentació';
$string['resetting_feedbacks'] = 'S\'estan reiniciant les retroalimentació';
$string['response_nr'] = 'Número de resposta';
$string['responses'] = 'Respostes';
$string['responsetime'] = 'Temps de resposta';
$string['save_as_new_item'] = 'Desa com una nova pregunta';
$string['save_as_new_template'] = 'Desa com una nova plantilla';
$string['save_entries'] = 'Envia les respostes';
$string['save_item'] = 'Desa la pregunta';
$string['saving_failed'] = 'No s\'ha pogut desar';
$string['search:activity'] = 'Retroalimentació: informació de l\'activitat';
$string['search_course'] = 'Cerca curs';
$string['searchcourses'] = 'Cerca cursos';
$string['searchcourses_help'] = 'Cerqueu el codi o el nom del/s curs/os que voleu associar amb aquesta retroalimentació.';
$string['selected_dump'] = 'A continuació es llisten els índexs seleccionats de la variable $SESSION:';
$string['send'] = 'envia';
$string['send_message'] = 'envia missatge';
$string['show_all'] = 'Mostra tot';
$string['show_analysepage_after_submit'] = 'Mostra la pàgina d\'anàlisi';
$string['show_entries'] = 'Mostra les respostes';
$string['show_entry'] = 'Mostra la resposta';
$string['show_nonrespondents'] = 'Mostra els que no han respost';
$string['site_after_submit'] = 'Lloc després de l\'enviament';
$string['sort_by_course'] = 'Ordena per curs';
$string['started'] = 'S\'ha iniciat';
$string['startedon'] = 'S\'ha iniciat el {$a}';
$string['subject'] = 'Tema';
$string['switch_item_to_not_required'] = 'Estableix com a no obligatòria';
$string['switch_item_to_required'] = 'Estableix com a obligatòria';
$string['template'] = 'Plantilla';
$string['template_deleted'] = 'S\'ha suprimit la plantilla';
$string['template_saved'] = 'Plantilla desada';
$string['templates'] = 'Plantilles';
$string['textarea'] = 'Resposta de text llarga';
$string['textarea_height'] = 'Nombre de línies';
$string['textarea_width'] = 'Amplària';
$string['textfield'] = 'Resposta de text curta';
$string['textfield_maxlength'] = 'Nombre màxim de caràcters acceptats';
$string['textfield_size'] = 'Amplària del camp del text';
$string['there_are_no_settings_for_recaptcha'] = 'No hi ha paràmetres per al test de Turing';
$string['this_feedback_is_already_submitted'] = 'Heu completat aquesta activitat';
$string['typemissing'] = 'falta el valor del "tipus"';
$string['update_item'] = 'Desa els canvis de la pregunta';
$string['url_for_continue'] = 'Enllaç de l\'activitat següent';
$string['url_for_continue_help'] = 'Després de trametre la retroalimentació, es mostra un botó per a continuar amb un enllaç a la pàgina del curs. Alternativament, l\'enllaç pot conduir a l\'activitat següent si s\'introdueix aquí l\'URL d\'aquesta activitat.';
$string['use_one_line_for_each_value'] = 'Useu una línia per cada resposta!';
$string['use_this_template'] = 'Utilitza aquesta plantilla';
$string['using_templates'] = 'Utilitza una plantilla';
$string['vertical'] = 'vertical';
