<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_usertours', language 'ca', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['content_help'] = 'El contingut que descrigui el pas es pot afegir com a text sense format, inclòs en etiquetes multilingües (per utilitzar-lo amb el filtre de contingut multilingüe), si és necessari.

Alternativament, es pot introduir un identificador de cadena d\'idioma a l\'identificador de format, component (sense claudàtors o espai després de la coma).';
$string['cssselector'] = 'Selector de CSS';
$string['defaultvalue'] = 'Per defecte ({$a})';
$string['delay'] = 'Retard abans de mostrar el pas';
$string['delay_help'] = 'Podeu afegir un retard abans que es mostri el pas.

Aquest retard és en mil·lisegons.';
$string['description'] = 'Descripció';
$string['done'] = 'Fet';
$string['editstep'] = 'S\'està editant «{$a}»';
$string['enabled'] = 'Habilitat';
$string['endtour'] = 'Finalitza la visita guiada';
$string['event_step_shown'] = 'Pas mostrat';
$string['event_tour_ended'] = 'Visita guiada finalitzada';
$string['event_tour_reset'] = 'Visita guiada restaurada';
$string['event_tour_started'] = 'S\'ha iniciat la visita guiada';
$string['exporttour'] = 'Exporta la visita guiada';
$string['filter_header'] = 'Filtres de la visita guiada';
$string['filter_help'] = 'Selecciona les condicions sota les quals es mostrarà la visita guiada. Cal que tots els filtres coincideixin amb una visita guiada per mostrar a un usuari.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Es pot restringir una visita guiada als usuaris amb rols seleccionats en el context en què es mostra la visita guiada. Per exemple, la restricció d\'una visita guiada del Tauler a usuaris amb el rol d\'estudiant no funcionarà si els usuaris tenen el rol d\'estudiant en un curs (la qual cosa, generalment, és així). Una visita guiada del Tauler sols es pot restringir a usuaris amb un rol del sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostra la visita guiada quan l\'usuari faci servir algun dels temes seleccionats.';
$string['importtour'] = 'Importa una visita guiada';
$string['left'] = 'Part esquerra';
$string['modifyshippedtourwarning'] = 'Això és una visita guiada d\'usuari que ve per defecte amb Moodle. Qualsevol modificació que feu pot ser reemplaçada en l\'actualització següent.';
$string['movestepdown'] = 'Mou el pas a sota';
$string['movestepup'] = 'Mou el pas a sobre';
$string['movetourdown'] = 'Mou la visita guiada a sota';
$string['movetourup'] = 'Mou la visita guiada a sobre';
$string['name'] = 'Nom';
$string['newstep'] = 'Pas nou';
$string['newtour'] = 'Crea una visita guiada nova';
$string['next'] = 'Següent';
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
$string['target'] = 'Àrea de destinació';
$string['target_block'] = 'Bloc';
$string['target_heading'] = 'Destinació del pas';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectors de CSS';
$string['target_selector_targetvalue_help'] = 'Es pot utilitzar un selector de CSS per orientar gairebé qualsevol element de la pàgina. Podeu trobar fàcilment el selector adequat utilitzant les eines del desenvolupador per al vostre navegador web.';
$string['targettype'] = 'Tipus de destinació';
$string['targettype_help'] = 'Cada pas s\'associa a una part de la pàgina —l\'àrea de destinació. Els d\'àrees de destinació són els següents:

* Bloc; per mostrar un pas proper a un bloc específic
* Selector de CSS; per definir amb precisió l\'àrea de destinació utilitzant CSS
* Mostra al mig de la pàgina; per a un pas que no necessita estar associat a cap part específica de la pàgina';
$string['target_unattached'] = 'Mostra al mig de la pàgina';
$string['title'] = 'Títol';
$string['title_help'] = 'El títol d\'un pas es pot afegir com a text sense format, inclòs en etiquetes multilingües (per utilitzar-lo amb el filtre de contingut de diversos idiomes), en cas de ser necessari.

Alternativament, es pot introduir un identificador de cadena d\'idioma en l\'identificador de format, component (sense claudàtors o espai després de la coma).';
$string['tour1_content_addingblocks'] = 'Penseu bé quins blocs voleu incloure a les vostres pàgines. Els blocs no es mostren a l\'aplicació per al mòbil de Moodle, per tant, com a regla general, assegureu-vos que el vostre lloc funciona correctament sense blocs.';
$string['tour1_content_blockregion'] = 'Encara hi ha una regió de blocs aquí. Recomanem eliminar completament els blocs de Navegació i Administració, ja que tota la funcionalitat es troba en un altre lloc del tema Boost.';
$string['tour1_content_customisation'] = 'Per personalitzar l\'aspecte del vostre lloc i la portada, utilitzeu el menú de configuració a la cantonada de la capçalera. Proveu d\'activar l\'edició ara.';
$string['tour1_content_end'] = 'Això ha estat una visita guiada; és una funcionalitat nova a Moodle 3.2. No es tornarà a mostrar fins que no la restabliu fent servir l\'enllaç que trobareu a peu de pàgina. Com a administrador, també podeu crear les vostres pròpies visites guiades.';
$string['tour1_content_navigation'] = 'La navegació principal ara es fa a través d\'aquest menú. El contingut del menú s\'actualitza segons el lloc on es trobi. Utilitzeu el botó de part superior per amagar-lo o mostrar-lo.';
$string['tour1_content_welcome'] = 'Benvinguts al tema Boost per a Moodle 3.2. Si heu fet servir Moodle abans, segurament trobareu que l\'aspecte és una mica diferent.';
$string['tour1_title_addingblocks'] = 'S\'estan afegint blocs';
$string['tour1_title_blockregion'] = 'Espai per als blocs';
$string['tour1_title_customisation'] = 'Personalització';
$string['tour1_title_end'] = 'Final de la visita guiada';
$string['tour1_title_navigation'] = 'Navegació';
$string['tour1_title_welcome'] = 'Benvinguts';
$string['tour2_content_addblock'] = 'Si activeu l\'edició, podreu afegir blocs des del menú lateral. Tot i això, penseu bé sobre com incloure blocs a les vostres pàgines. Tingueu en compte que els blocs no es mostren a l\'aplicació de Moodle per a dispositius mòbils, de manera que per a una millor experiència d\'usuari, cal que us assegureu que el vostre curs funciona bé sense cap bloc.';
$string['tour2_content_addingblocks'] = 'Podeu afegir blocs a aquesta pàgina fent servir aquest botó. Tot i això, penseu bé sobre com incloure blocs a les vostres pàgines. Tingueu en compte que els blocs no es mostren a l\'aplicació de Moodle per a dispositius mòbils, de manera que per a una millor experiència d\'usuari, cal que us assegureu que el vostre curs funciona bé sense cap bloc.';
$string['tour2_content_customisation'] = 'Per canviar els paràmetres del curs, feu servir el menú de configuració que trobareu a la cantonada de la capçalera. Podreu trobar un menú de configuració semblant a la pàgina principal de cadascuna de les activitats. Proveu a activar l\'edició ara.';
$string['tour2_content_end'] = 'Això ha estat una visita guiada; és una funcionalitat nova a Moodle 3.2. No es tornarà a mostrar fins que no la restabliu fent servir l\'enllaç que trobareu a peu de pàgina. L\'administrador del lloc també pot crear visites guiades per a aquest lloc.';
$string['tour2_content_navigation'] = 'La navegació principal ara es fa a través d\'aquest menú. Utilitzeu el botó de la part superior per amagar-lo o mostrar-lo. Veureu que hi ha enllaços directes a les seccions del vostre curs.';
$string['tour2_content_opendrawer'] = 'Proveu a obrir el menú de navegació ara.';
$string['tour2_content_participants'] = 'Visualitzeu els participants aquí. Des d\'aquí podreu afegir i treure estudiants.';
$string['tour2_content_welcome'] = 'Benvinguts al tema Boost per a Moodle 3.2. Si heu fet servir Moodle abans, veureu que a la pàgina del curs l\'aspecte és una mica diferent.';
$string['tour2_title_addblock'] = 'Afegeix un bloc';
$string['tour2_title_addingblocks'] = 'S\'estan afegint blocs';
$string['tour2_title_customisation'] = 'Personalització';
$string['tour2_title_end'] = 'Final de la visita guiada';
$string['tour2_title_navigation'] = 'Navegació';
$string['tour2_title_opendrawer'] = 'Obre el menú de navegació';
$string['tour2_title_participants'] = 'Participants del curs';
$string['tour2_title_welcome'] = 'Benvinguts';
$string['tourconfig'] = 'Fitxer de configuració de la visita guiada que s\'ha d\'importar';
$string['tourisenabled'] = 'La visita guiada està activada';
$string['tourlist_explanation'] = 'Podeu crear totes les visites guiades que vulgueu i activar-les per a parts diferents de Moodle. Només es pot crear una visita guiada per pàgina.';
$string['tour_resetforall'] = 'S\'ha reiniciat l\'estat de la visita guiada. Es tornarà a mostrar a tots els usuaris.';
$string['tours'] = 'Visites guiades';
$string['usertours'] = 'Visites guiades';
$string['usertours:managetours'] = 'Creeu, editeu i elimineu visites guiades';
$string['viewtour_edit'] = 'Podeu <a href="{$a->editlink}">editar les visites guiades per defecte</a> i <a href="{$a->resetlink}">forçar que la visita guiada es mostri</a> a tots els usuaris de nou.';
$string['viewtour_info'] = 'Aquesta és la visita guiada «{$a->tourname}». S\'aplica al camí «{$a->path}».';
