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
 * Strings for component 'tool_usertours', language 'ca', version '4.4'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Part superior';
$string['actions'] = 'Accions';
$string['appliesto'] = 'Aplica a';
$string['backdrop'] = 'Mostra amb un fons';
$string['backdrop_help'] = 'Podeu utilitzar un fons per realçar la part de la pàgina a la qual us referiu.

Nota: els fons no són compatibles amb algunes parts de la pàgina, com ara la barra de navegació.';
$string['below'] = 'Part inferior';
$string['block'] = 'Bloc';
$string['block_named'] = 'Bloc anomenat «{$a}»';
$string['cachedef_stepdata'] = 'Llista de passos de la visita guiada';
$string['cachedef_tourdata'] = 'Llista d\'informació sobre visites guiades d\'usuaris habilitats que es recull a totes les pàgines';
$string['confirmstepremovalquestion'] = 'Esteu segur que voleu eliminar aquest pas?';
$string['confirmstepremovaltitle'] = 'Confirmeu que voleu esborrar aquest pas';
$string['confirmtourremovalquestion'] = 'Esteu segur que voleu eliminar aquesta visita guiada?';
$string['confirmtourremovaltitle'] = 'Confirmeu que voleu eliminar aquesta visita guiada';
$string['content'] = 'Contingut';
$string['content_heading'] = 'Contingut';
$string['content_help'] = 'El contingut que descriu el pas es pot afegir com a text net, sense format, inclòs entre etiquetes multilingües (per utilitzar-lo amb el filtre de contingut de diversos idiomes), si és necessari.';
$string['content_type'] = 'Tipus de contingut';
$string['content_type_help'] = '* Manual: el contingut s\'introdueix utilitzant un editor de text.
*Identificador de la cadena d\'idioma: en el format identificador de la cadena,component (sense cap espai després de la coma).';
$string['content_type_langstring'] = 'Identificador de la cadena d\'idioma';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'Selector de CSS';
$string['defaultvalue'] = 'Per defecte ({$a})';
$string['delay'] = 'Retard abans de mostrar el pas';
$string['delay_help'] = 'Podeu afegir un retard abans que es mostri el pas.

Aquest retard és en mil·lisegons.';
$string['description'] = 'Descripció';
$string['description_help'] = 'La descripció d\'una visita guiada es pot afegir com a text net, sense format, inclòs entre etiquetes multilingües (per utilitzar-lo amb el filtre de contingut de diversos idiomes), en cas de ser necessari.

Alternativament, es pot introduir un identificador de la cadena d\'idioma en el format identificador,component (sense claudàtors o espai després de la coma).';
$string['displaystepnumbers'] = 'Mostra els números dels passos';
$string['displaystepnumbers_help'] = 'Si s\'ha de mostrar el número del pas, p. ex., 1/4, 2/4, etc. per tal d\'indicar la durada de la visita guiada.';
$string['done'] = 'Fet';
$string['duplicatetour'] = 'Duplica la visita guiada';
$string['duplicatetour_name'] = '{$a} (còpia)';
$string['editstep'] = 'S\'està editant «{$a}»';
$string['enabled'] = 'Habilitat';
$string['endonesteptour'] = 'Entesos';
$string['endtour'] = 'Finalitza la visita guiada';
$string['endtourlabel'] = 'Etiqueta del botó de finalització de la visita guiada';
$string['endtourlabel_help'] = 'Opcionalment, podeu especificar una etiqueta personalitzada per al botó de finalització de la visita guiada. L\'etiqueta predeterminada és «Entesos» per a un sol pas i «Finalitza la visita guiada» per a visites guiades de diversos passos.

Alternativament, es pot introduir un identificador de la cadena d\'idioma en el format identificador,component (sense claudàtors o espai després de la coma).';
$string['event_step_shown'] = 'Pas mostrat';
$string['event_tour_ended'] = 'La visita guiada ha finalitzat';
$string['event_tour_reset'] = 'La visita guiada s\'ha reiniciat';
$string['event_tour_started'] = 'La visita guiada s\'ha iniciat';
$string['exporttour'] = 'Exporta la visita guiada';
$string['filter_accessdate'] = 'Data d\'accés';
$string['filter_accessdate_enabled'] = 'Habilita el filtre de data d\'accés';
$string['filter_accessdate_enabled_help'] = 'Mostra la visita guiada només als usuaris nous i als usuaris que han accedit al lloc recentment.';
$string['filter_category'] = 'Categoria';
$string['filter_category_help'] = 'Mostra la visita guiada en una pàgina associada a un curs de la categoria seleccionada.';
$string['filter_course'] = 'Cursos';
$string['filter_course_help'] = 'Mostra la visita guiada en una pàgina associada al curs seleccionat.';
$string['filter_courseformat'] = 'Format de curs';
$string['filter_courseformat_help'] = 'Mostra la visita guiada en una pàgina associada a un curs utilitzant el format de curs seleccionat.';
$string['filter_cssselector'] = 'Selector CSS';
$string['filter_cssselector_help'] = 'Mostra la visita guiada només quan s\'ha trobat el selector CSS especificat a la pàgina.';
$string['filter_date_account_creation'] = 'Data de creació del compte de l\'usuari en els darrers';
$string['filter_date_first_login'] = 'Data del primer accés de l\'usuari en els darrers';
$string['filter_date_last_login'] = 'Data del darrer accés de l\'usuari en els darrers';
$string['filter_header'] = 'Filtres de la visita guiada';
$string['filter_help'] = 'Selecciona les condicions sota les quals es mostrarà la visita guiada. Cal que tots els filtres coincideixin amb una visita guiada per mostrar a un usuari.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Es pot restringir una visita guiada als usuaris amb rols seleccionats en el context en què es mostra la visita guiada. Per exemple, la restricció d\'una visita guiada del Tauler a usuaris amb el rol d\'estudiant no funcionarà si els usuaris tenen el rol d\'estudiant en un curs (la qual cosa, generalment, és així). Una visita guiada del Tauler sols es pot restringir a usuaris amb un rol del sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostra la visita guiada quan l\'usuari faci servir algun dels temes seleccionats.';
$string['importtour'] = 'Importa una visita guiada';
$string['invalid_lang_id'] = 'L\'identificador de la cadena d\'idioma no és vàlid';
$string['left'] = 'Part esquerra';
$string['modifyshippedtourwarning'] = 'Això és una visita guiada d\'usuari que ve per defecte amb Moodle. Qualsevol modificació que feu pot ser reemplaçada en l\'actualització següent.';
$string['moodle_language_identifier'] = 'Identificador de la cadena d\'idioma';
$string['movestepdown'] = 'Mou el pas a sota';
$string['movestepup'] = 'Mou el pas a sobre';
$string['movetourdown'] = 'Mou la visita guiada a sota';
$string['movetourup'] = 'Mou la visita guiada a sobre';
$string['name'] = 'Nom';
$string['name_help'] = 'El nom d\'una visita guiada es pot afegir com a text sense format, inclòs en etiquetes multilingües (per utilitzar-lo amb el filtre de contingut de diversos idiomes), en cas de ser necessari.

Alternativament, es pot introduir un identificador de cadena d\'idioma en el format identificador,component (sense claudàtors o espai després de la coma).';
$string['newstep'] = 'Pas nou';
$string['newtour'] = 'Crea una visita guiada nova';
$string['next'] = 'Següent';
$string['nextstep'] = 'Següent';
$string['nextstep_sequence'] = 'Següent ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opcions';
$string['orphan'] = 'Mostra si no es troba la part de la pàgina associada amb el pas';
$string['orphan_help'] = 'Es mostra el pas quan no es pugui trobar la part de la pàgina associada amb aquest pas.';
$string['pathmatch'] = 'Aplica la coincidència d\'URL';
$string['pathmatch_help'] = 'Les visites guiades es mostraran a qualsevol pàgina l\'URL de la qual coincideixi amb aquest valor.

Podeu emprar el caràcter % com un comodí que signifiqui qualsevol cosa. Alguns valors d\'exemple inclouen:

* /my/%, per coincidir amb el Tauler
* /course/view.php?id=2, per coincidir amb un curs determinat
* /mod/forum/view.php%, per coincidir amb la llista de distribució del fòrum
* /user/profile.php%, per coincidir amb la pàgina de perfil de l\'usuari

Si voleu mostrar una visita guiada a la pàgina inicial del lloc, podeu utilitzar el valor: «FRONTPAGE».';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Ubicació';
$string['placement_help'] = 'Un pas es pot posar a la part superior, inferior, esquerra o dreta de la pàgina. Les parts que es recomanen són la superior o la inferior, ja que aquestes s\'ajusten millor a la visualització amb mòbils.

Si el pas no encaixa al lloc determinat d\'una pàgina concreta, es mostrarà de manera automàtica a una altra banda.';
$string['pluginname'] = 'Visites guiades';
$string['privacy:metadata:preference:completed'] = 'El temps que un usuari tarda a completar una visita guiada d\'usuari.';
$string['privacy:metadata:preference:requested'] = 'El temps que un usuari va demanar manualment per darrera vegada una visita guiada d\'usuari.';
$string['privacy:request:preference:completed'] = 'Vau marcar la visita guiada d\'usuari "{$a->name}" com a completada l\'última vegada el {$a->time}';
$string['privacy:request:preference:requested'] = 'Vau demanar la visita guiada d\'usuari "{$a->name}" l\'última vegada el {$a->time}';
$string['reflex'] = 'Continua en fer clic';
$string['reflex_help'] = 'Avança al pas següent quan es fa clic a la pàgina associada amb el pas.';
$string['resettouronpage'] = 'Reinicia la visita guiada de l\'usuari en aquesta pàgina';
$string['resumetour'] = 'Resum';
$string['right'] = 'Part dreta';
$string['select_block'] = 'Seleccioneu un bloc';
$string['selector_defaulttitle'] = 'Afegiu un títol descriptiu';
$string['selectordisplayname'] = 'Un selector de CSS que coincideixi amb «{$a}»';
$string['selecttype'] = 'Seleccioneu el tipus de pas';
$string['sharedtourslink'] = 'Repositori de visites guiades';
$string['skip'] = 'Omet';
$string['skip_tour'] = 'Omet la visita guiada';
$string['target'] = 'Destinació';
$string['target_block'] = 'Bloc';
$string['target_heading'] = 'Destinació del pas';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectors de CSS';
$string['target_selector_targetvalue_help'] = 'Es pot utilitzar un selector de CSS per orientar gairebé qualsevol element de la pàgina. Podeu trobar fàcilment el selector adequat utilitzant les eines del desenvolupador per al vostre navegador web.';
$string['target_unattached'] = 'Mostra al mig de la pàgina';
$string['targettype'] = 'Tipus de destinació';
$string['targettype_help'] = 'Cada pas s\'associa a una part de la pàgina —la destinació. Els tipus de destinació són els següents:

* Bloc; per mostrar un pas proper a un bloc específic.
* Selector de CSS; per definir amb precisió l\'àrea de destinació utilitzant CSS.
* Mostra al mig de la pàgina; per a un pas que no necessita estar associat a cap part específica de la pàgina.';
$string['title'] = 'Títol';
$string['title_help'] = 'El títol d\'un pas es pot afegir com a text sense format, inclòs en etiquetes multilingües (per utilitzar-lo amb el filtre de contingut de diversos idiomes), en cas de ser necessari.

Alternativament, es pot introduir un identificador de cadena d\'idioma en el format identificador,component (sense claudàtors o espai després de la coma).';
$string['tour1_content_addingblocks'] = 'Penseu bé si voleu incloure blocs a les vostres pàgines. Els blocs no es mostren a l\'aplicació per al mòbil de Moodle, per tant, com a regla general, assegureu-vos que el vostre lloc funciona correctament sense blocs.';
$string['tour1_content_blockregion'] = 'Encara hi ha una regió de blocs aquí. Recomanem eliminar completament els blocs de Navegació i Administració, ja que tota la funcionalitat es troba en un altre lloc del tema Boost.';
$string['tour1_content_customisation'] = 'Per personalitzar l\'aspecte del vostre lloc i la portada, utilitzeu el menú de configuració a la cantonada de la capçalera. Proveu d\'activar l\'edició ara.';
$string['tour1_content_end'] = 'Heu arribat al final de la visita guiada d\'usuari. No tornarà a mostrar-se, tret que ho restabliu mitjançant l\'enllaç que trobareu al peu de la pàgina. Com a administrador també podeu crear les vostres pròpies visites guiades, com ara aquesta.';
$string['tour1_content_navigation'] = 'La navegació principal ara es fa a través d\'aquest menú. El contingut del menú s\'actualitza segons el lloc on es trobi. Utilitzeu el botó de part superior per amagar-lo o mostrar-lo.';
$string['tour1_content_welcome'] = 'Benvinguts al tema Boost. Si l\'heu actualitzat des d\'una versió anterior, trobareu una aparença diferent amb aquest tema.';
$string['tour1_title_addingblocks'] = 'S\'estan afegint blocs';
$string['tour1_title_blockregion'] = 'Espai per als blocs';
$string['tour1_title_customisation'] = 'Personalització';
$string['tour1_title_end'] = 'Final de la visita guiada';
$string['tour1_title_navigation'] = 'Navegació';
$string['tour1_title_welcome'] = 'Benvinguts';
$string['tour2_content_addblock'] = 'Si activeu l\'edició, podreu afegir blocs des del menú lateral. Tot i això, penseu bé si voleu incloure blocs a les vostres pàgines. Tingueu present que els blocs no es mostren a l\'aplicació de Moodle per a dispositius mòbils, de manera que per a una millor experiència d\'usuari, cal que us assegureu que el vostre curs funciona bé sense cap bloc.';
$string['tour2_content_addingblocks'] = 'Podeu afegir blocs a aquesta pàgina fent servir aquest botó. Tot i això, penseu bé si voleu incloure blocs a les vostres pàgines. Tingueu en compte que els blocs no es mostren a l\'aplicació de Moodle per a dispositius mòbils, de manera que per a una millor experiència d\'usuari, cal que us assegureu que el vostre curs funciona bé sense cap bloc.';
$string['tour2_content_customisation'] = 'Per canviar els paràmetres del curs, feu servir el menú de configuració que trobareu a la cantonada de la capçalera. Podreu trobar un menú de configuració semblant a la pàgina principal de cadascuna de les activitats. Proveu a activar l\'edició ara.';
$string['tour2_content_end'] = 'Heu arribat al final de la visita guiada d\'usuari. No tornarà a mostrar-se, tret que ho restabliu mitjançant l\'enllaç que trobareu al peu de la pàgina. L\'administrador del lloc també pot crear altres visites guiades, si cal.';
$string['tour2_content_navigation'] = 'La navegació principal ara es fa a través d\'aquest menú. Utilitzeu el botó de la part superior per amagar-lo o mostrar-lo. Veureu que hi ha enllaços directes a les seccions del vostre curs.';
$string['tour2_content_opendrawer'] = 'Proveu a obrir el menú de navegació ara.';
$string['tour2_content_participants'] = 'Visualitzeu els participants aquí. Des d\'aquí podreu afegir i treure estudiants.';
$string['tour2_content_welcome'] = 'Benvinguts al tema Boost. Si el vostre lloc s\'ha actualitzat des d\'una versió anterior, trobareu un aspecte diferent aquí, a la pàgina del curs.';
$string['tour2_title_addblock'] = 'Afegeix un bloc';
$string['tour2_title_addingblocks'] = 'S\'estan afegint blocs';
$string['tour2_title_customisation'] = 'Personalització';
$string['tour2_title_end'] = 'Final de la visita guiada';
$string['tour2_title_navigation'] = 'Navegació';
$string['tour2_title_opendrawer'] = 'Obre el menú de navegació';
$string['tour2_title_participants'] = 'Participants del curs';
$string['tour2_title_welcome'] = 'Benvinguts';
$string['tour3_content_dashboard'] = 'El vostre Tauler nou té moltes funcionalitats per ajudar-vos a accedir fàcilment a la informació més important per a vós.';
$string['tour3_content_displayoptions'] = 'Els cursos es poden ordenar pel nom del curs, pel nom curt del curs o per la data del darrer accés.

També podeu triar mostrar els cursos en una llista, amb un resum de la informació, o amb la vista per defecte de «targeta».';
$string['tour3_content_overview'] = 'El bloc Resum del curs mostra tots els cursos on esteu inscrits.

Podeu triar mostrar els cursos actuals, els passats, els futurs o els que heu destacat.';
$string['tour3_content_recentcourses'] = 'El bloc Cursos visitats recentment mostra els últims cursos als quals heu accedit, permetent-vos tornar directament a d\'ells.';
$string['tour3_content_starring'] = 'Podeu triar afegir-hi una estrela a un curs per a destacar-lo, o bé amagar un curs que ja no siga important per a vosaltres.

Aquestes accions només afecten la vostra visualització.

També podeu triar mostrar els cursos en una llista, amb un resum de la informació o la vista per defecte de «targeta».';
$string['tour3_content_timeline'] = 'El bloc Línia del temps mostra els vostres futurs esdeveniments importants.

Podeu triar mostrar les activitats de la pròxima setmana, mes o més tard en el futur.';
$string['tour3_title_dashboard'] = 'El vostre Tauler';
$string['tour3_title_displayoptions'] = 'Mostra les opcions';
$string['tour3_title_overview'] = 'Resum dels cursos';
$string['tour3_title_recentcourses'] = 'Cursos visitats recentment';
$string['tour3_title_starring'] = 'Destacant i amagant cursos';
$string['tour3_title_timeline'] = 'Bloc línia del temps';
$string['tour4_content_groupconvo'] = 'Si sou membre d\'un grup amb la missatgeria de grup habilitada, veureu les converses de grup aquí.

Les converses de grup del curs us permeten interactuar amb els altres membres del vostre grup en un lloc privat i adequat.';
$string['tour4_content_icon'] = 'Podeu accedir als vostres missatges des de qualsevol pàgina utilitzant aquesta icona.

Si teniu cap missatge sense llegir, el nombre de missatges sense llegir també es mostrarà aquí.

Feu clic a la icona per obrir la caixa de missatgeria i continuar la visita guiada.';
$string['tour4_content_messaging'] = 'Les noves funcionalitats de missatgeria inclouen la missatgeria per als grups d\'un curs i un millor control de qui pot enviar-vos missatges.';
$string['tour4_content_settings'] = 'Podeu accedir als paràmetres de la vostra missatgeria a través de la icona de l\'engranatge. Un nou paràmetre de privacitat us permet restringir qui pot enviar-vos missatges.';
$string['tour4_content_starred'] = 'Podeu triar destacar converses concretes per tal de trobar-les més fàcilment.';
$string['tour4_title_groupconvo'] = 'Missatges de grup';
$string['tour4_title_icon'] = 'Missatgeria';
$string['tour4_title_messaging'] = 'Nova interfície per a la missatgeria';
$string['tour4_title_settings'] = 'Paràmetres de la missatgeria';
$string['tour4_title_starred'] = 'Destacat';
$string['tour_activityinfo_activity_student_content'] = 'Les dates de l\'activitat i què cal fer per completar-la es mostren a la pàgina de l\'activitat.';
$string['tour_activityinfo_activity_student_title'] = 'Nou: informació de l\'activitat';
$string['tour_activityinfo_activity_teacher_content'] = 'Les dates de les activitats i les condicions de compleció ara es mostren als estudiants a la pàgina de cada activitat (i opcionalment, també es poden mostrar a la pàgina del curs).

Per a les activitats que requereixen que els estudiants marquin manualment una activitat com a completada, es mostra el botó «Marca com a feta» a la pàgina de l\'activitat.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nou: informació de l\'activitat';
$string['tour_activityinfo_course_student_content'] = 'Les dates de l\'activitat i/o què cal fer per completar-la es mostren a la pàgina del curs.';
$string['tour_activityinfo_course_student_title'] = 'Nou: informació de l\'activitat';
$string['tour_activityinfo_course_teacher_content'] = 'Els paràmetres nous de curs «Mostra les condicions de compleció de l\'activitat» i «Mostra les dates de l\'activitat» permeten triar si es mostren les condicions de finalització de l\'activitat (si s\'estableixen) i/o les dates per als estudiants a la pàgina del curs.';
$string['tour_activityinfo_course_teacher_title'] = 'Nou: informació de l\'activitat';
$string['tour_final_step_content'] = 'Heu arribat al final de la visita guiada d\'usuari. No tornarà a mostrar-se, tret que ho restabliu mitjançant l\'enllaç que trobareu al peu de la pàgina.';
$string['tour_final_step_title'] = 'Final de la visita guiada';
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div>Ordeneu les columnes i trieu quines es mostraran. Al mode d’edició, utilitzeu aquesta drecera per accedir a tasques freqüents relacionades amb la visualització i l’edició dels elements de qualificació.';
$string['tour_gradebook_action_title'] = 'Enllaços ràpids a accions';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div>Filtreu els estudiants per les inicials del nom o el cognom.';
$string['tour_gradebook_filter_title'] = 'Filtreu per nom';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Utilitzeu el quadre de cerca per trobar estudiants determinats ràpidament';
$string['tour_gradebook_search_title'] = 'Cerqueu estudiants de manera fàcil';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Envia notícies importants aquí.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Hi ha res que vulgueu contar a tothom?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Afegeix contingut nou o edita\'n l\'existent.';
$string['tour_navigation_course_edit_teacher_title'] = 'Activa el mode d\'edició';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Navegueu per les activitats i feu el seguiment del vostre progrés.';
$string['tour_navigation_course_index_student_title'] = 'Trobeu el vostre camí';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Arrossega i deixa anar activitats per tornar a ordenar el contingut del curs.';
$string['tour_navigation_course_index_teacher_title'] = 'Índex del curs';
$string['tour_navigation_course_student_tour_des'] = 'On navegar a través de les activitats del curs';
$string['tour_navigation_course_student_tour_name'] = 'Índex del curs';
$string['tour_navigation_course_teacher_tour_des'] = 'Mode d\'edició, arrossegar i deixar anar activitats i publicació d\'anuncis a un curs';
$string['tour_navigation_course_teacher_tour_name'] = 'Edició del curs';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Aquest panell lateral pot contenir més funcions.';
$string['tour_navigation_dashboard_title'] = 'Amplieu per explorar';
$string['tour_navigation_dashboard_tour_des'] = 'On es troben els blocs';
$string['tour_navigation_dashboard_tour_name'] = 'Calaix de blocs';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Afegeix, copia, suprimeix i oculta cursos des d\'aquest menú';
$string['tour_navigation_mycourses_endtourlabel'] = 'Entesos';
$string['tour_navigation_mycourses_title'] = 'Cursos i categories';
$string['tour_navigation_mycourses_tour_des'] = 'Opcions d\'administració del curs a la pàgina Els meus cursos';
$string['tour_navigation_mycourses_tour_name'] = 'Administració del curs';
$string['tour_resetforall'] = 'S\'ha reiniciat l\'estat de la visita guiada. Es tornarà a mostrar a tots els usuaris.';
$string['tourconfig'] = 'Fitxer de configuració de la visita guiada que s\'ha d\'importar';
$string['tourisenabled'] = 'La visita guiada està activada';
$string['tourlist_explanation'] = 'Podeu crear totes les visites guiades que vulgueu i activar-les per a parts diferents de Moodle. Només es pot crear una visita guiada per pàgina.';
$string['tours'] = 'Visites guiades';
$string['usertours'] = 'Visites guiades';
$string['usertours:managetours'] = 'Creeu, editeu i elimineu visites guiades';
$string['viewtour_edit'] = 'Podeu <a href="{$a->editlink}">editar les visites guiades per defecte</a> i <a href="{$a->resetlink}">forçar que la visita guiada es mostri</a> a tots els usuaris de nou.';
$string['viewtour_info'] = 'Aquesta és la visita guiada «{$a->tourname}». S\'aplica al camí «{$a->path}».';
