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
 * Strings for component 'block_completion_progress', language 'ca', version '4.1'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Codi de color HTML per als elements completats';
$string['completed_colour_title'] = 'Color de completat';
$string['completion_not_enabled'] = 'El seguiment de la compleció no està habilitat en aquest lloc.';
$string['completion_not_enabled_course'] = 'El seguiment de la compleció no està habilitat en aquest curs.';
$string['completion_progress:addinstance'] = 'Afegeix un bloc «Progrés de la compleció»';
$string['completion_progress:myaddinstance'] = 'Afegeix un bloc «Progrés de la compleció» a la pàgina d\'inici';
$string['completion_progress:overview'] = 'Visualitza el resum del progrés de la compleció del curs per a tots els estudiants';
$string['completion_progress:showbar'] = 'Mostra la barra al bloc «Progrés de la compleció»';
$string['config_activitiesincluded'] = 'Activitats incloses';
$string['config_activitycompletion'] = 'Totes les activitats amb criteris de compleció definits';
$string['config_default_title'] = 'Progrés de la compleció';
$string['config_group'] = 'Només visible al grup';
$string['config_header_monitored'] = 'Monitorat';
$string['config_icons'] = 'Empra icones a la barra';
$string['config_longbars'] = 'Com es mostren les barres llargues';
$string['config_orderby'] = 'Ordena la barra per';
$string['config_orderby_course_order'] = 'Ordre en el curs';
$string['config_orderby_due_time'] = 'Temps segons la data «{$a}»';
$string['config_percentage'] = 'Mostra el percentatge als estudiants';
$string['config_scroll'] = 'Desplaça';
$string['config_selectactivities'] = 'Selecciona les activitats';
$string['config_selectedactivities'] = 'Activitats seleccionades';
$string['config_squeeze'] = 'Comprimeix';
$string['config_title'] = 'Títol alternatiu';
$string['config_wrap'] = 'Ajusta';
$string['coursenametoshow'] = 'Nom del curs que es mostrarà al tauler';
$string['defaultlongbars'] = 'Presentació per defecte per a les barres llargues';
$string['forceiconsinbar'] = 'Força icones en la barra de progrés';
$string['fullname'] = 'Nom complet del curs';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Codi de color HTML per als elements futurs que encara no han estat completats';
$string['futureNotCompleted_colour_title'] = 'Color de no completat futur';
$string['how_activitiesincluded_works'] = 'Com funciona la inclusió d\'activitats';
$string['how_activitiesincluded_works_help'] = '<p>Per defecte, totes les activitats amb criteris de compleció definits s\'inclouen a la barra.</p><p>A més, podeu seleccionar activitats manualment perquè siguin incloses.</p>';
$string['how_group_works'] = 'Com funciona la visibilitat de grup';
$string['how_group_works_help'] = '<p>Si seleccioneu un grup, la visualització d\'aquest bloc només estarà disponible per a aquest grup.</p>';
$string['how_longbars_works'] = 'Com es mostren les barres llargues';
$string['how_longbars_works_help'] = '<p>Quan les barres excedeixen la mida configurada, poden mostrar-se de les maneres següents:</p><ul><li>Comprimides en una barra horitzontal</li><li>Permetent el desplaçament lateral per a mostrar els segments que superen el límit</li><li>Ajustant els segments per a mostrar-los tots en múltiples línies</li></ul><p>Tingueu en compte que quan la barra es mostra ajustant els segments no es visualitzarà l\'indicador ARA.</p>';
$string['how_ordering_works'] = 'Com funciona l\'ordenació';
$string['how_ordering_works_help'] = '<p>Hi ha dues maneres d\'ordenar les activitats en el bloc Progrés de la compleció.</p><ul><li><em>Temporal, usant la data «S\'espera que es completi el»</em> (per defecte)<br />Les dates esperades de compleció de les activitats i els recursos s\'usen per ordenar la barra. Aquells recursos i activitats que no tinguin definida una data de compleció s\'ordenen segons la posició en el curs. Quan s\'usa aquesta opció, es mostra l\'indicador ARA.</li><li><em>Ordre dins el curs</em><br />Les activitats i els recursos es presenten en el mateix ordre que a la pàgina del curs. Quan s\'usa aquesta opció, s\'ignoren les dates de compleció i no es mostra l\'indicador ARA.</li></ul>';
$string['how_selectactivities_works'] = 'Com funciona la inclusió d\'activitats';
$string['how_selectactivities_works_help'] = '<p>Per a seleccionar activitats manualment i incloure-les a la barra, assegureu-vos que "Activitats incloses" té el valor "activitats seleccionades".</p><p>Només es poden incloure aquelles activitats amb criteris de compleció definits.</p><p>Mantingueu premuda la tecla Ctrl per a seleccionar múltiples activitats.</p>';
$string['lastonline'] = 'Última del curs';
$string['mouse_over_prompt'] = 'Passeu-hi el ratolí o toqueu la barra per a més informació.';
$string['no_activities_config_message'] = 'No hi ha cap activitat o recurs amb criteris de compleció definits, o no s\'ha seleccionat cap activitat o recurs. Cal que definiu el seguiment de la compleció a les activitats i els recursos abans de configurar aquest bloc.';
$string['no_activities_message'] = 'No s\'està monitorant cap activitat o recurs. Empreu la configuració per a definir el monitoratge.';
$string['no_blocks'] = 'No hi ha cap bloc Progrés de la compleció en els cursos.';
$string['no_courses'] = 'No esteu matriculat a cap curs. Només es mostraran les barres dels cursos en què esteu matriculat.';
$string['no_visible_activities_message'] = 'Cap de les activitats monitorades és visible actualment.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Codi de color HTML per als elements actuals que encara no han estat completats';
$string['notCompleted_colour_title'] = 'Color de no completat';
$string['not_all_expected_set'] = 'No totes les activitats amb criteris de compleció tenen definida una data «{$a}».';
$string['now_indicator'] = 'ARA';
$string['overview'] = 'Resum d\'estudiants';
$string['pluginname'] = 'Progrés de la compleció';
$string['privacy:metadata'] = 'El bloc del Progrés de la compleció només mostra les dades de compleció existents.';
$string['progress'] = 'Progrés';
$string['progressbar'] = 'Progrés de la compleció';
$string['shortname'] = 'Nom curt del curs';
$string['showallinfo'] = 'Mostra tota la informació';
$string['showinactive'] = 'Mostra els usuaris inactius al resum';
$string['submitted'] = 'S\'ha tramès';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Codi de color HTML per als elements que han estat enviats, però encara no completats';
$string['submittednotcomplete_colour_title'] = 'Color d\'enviat però no completat';
$string['time_expected'] = 'Esperat';
$string['why_set_the_title'] = 'Per què podeu voler definir el títol d\'una instància concreta del bloc?';
$string['why_set_the_title_help'] = '<p>Pot haver-hi múltiples instàncies del bloc Progrés de la compleció. Podeu emprar diferents blocs Progrés de la compleció per a monitorar conjunts diferents d\'activitats o recursos. Per exemple, podeu fer el seguiment de les tasques en un bloc i els qüestionaris en un altre. És per aquest motiu que podeu sobreescreiure el títol predeterminat i definir-ne un de més apropiat a cada instància.</p>';
$string['why_show_precentage'] = 'Per què mostrar un percentatge del progrés al estudiants?';
$string['why_show_precentage_help'] = '<p>És possible mostrar als estudiants un percentatge global del progrés.</p><p>Es calcula com el nombre d\'activitats completades dividit pel nombre total d\'activitats a la barra.</p><p>El percentatge de progrés és visible fins que l\'estudiant passa per sobre d\'un element de la barra.</p>';
$string['why_use_icons'] = 'Per què hauríeu de voler usar icones?';
$string['why_use_icons_help'] = '<p>Potser voleu afegir signes de vist-i-plau o creus al Progrés de la compleció perquè el bloc sigui visualment més accessible als estudiants amb daltonisme.</p><p>També pot clarificar el significat del bloc, si considereu que els colors no són intuïtius per qüestions culturals o personals.</p>';
$string['wrapafter'] = 'En ajustar, limita les files a';
