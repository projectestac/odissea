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
 * Strings for component 'groupselect', language 'ca', version '3.11'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acció';
$string['assignedteacher'] = 'Professor no editor assignat';
$string['assigngroup'] = 'Permet l\'assignació de professors no editors als grups';
$string['assigngroup_help'] = 'Si s\'activa, apareixerà un botó, el qual assigna aleatòriament supervisors als grups (si el curs té supervisors). Els supervisors assignats no són membres dels grups, però s\'inclouen al fitxer d\'exportació i són visibles a la pàgina principal de Tria grup (si està habilitat als paràmetres). És útil si el curs usa assistents per gestionar els grups.';
$string['cannotselectclosed'] = 'Ja no és permès de triar grup.';
$string['cannotselectmaxed'] = 'No es possible triar el grup {$a} - ja s\'ha arribat al nombre màxim de membres.';
$string['cannotselectnocap'] = 'No se us permet seleccionar grup.';
$string['cannotselectnoenrol'] = 'Heu d\'estar inscrit al curs per tal de poder triar grup.';
$string['cannotunselectclosed'] = 'Ja no és possible deixar el grup del qual formeu part.';
$string['creategroup'] = 'Crea un grup nou';
$string['deleteemptygroups'] = 'Elimina el grup quan l\'últim estudiant l\'abandoni';
$string['deleteemptygroups_help'] = 'Si s\'habilita, s\'eliminarà el grup automàticament quan l\'últim estudiant l\'abandoni';
$string['description'] = 'Descripció del grup';
$string['duedate'] = 'Data de venciment';
$string['edittooltip'] = 'Cliqueu per editar';
$string['enablepermissions'] = 'Permisos generals';
$string['eventexportlinkcreated'] = 'Exporta l\'enllaç generat';
$string['eventgroupteacheradded'] = 'S\'ha afegit correctament el professor no editor';
$string['export'] = 'Genera un enllaç per  descarregar el fitxer amb les dades del grup (CSV)';
$string['export_download'] = 'Descarrega el fitxer CSV';
$string['fromallgroups'] = 'Tots els grups';
$string['globalpassword_help'] = 'Defineix una contrasenya global per a poder triar un grup. Sobreescriu les claus definides pels estudiants.';
$string['groupid'] = 'ID del grup';
$string['groupselect:addinstance'] = 'Afegeix un «Tria de grup» nou';
$string['groupselect:assign'] = 'Permet assignar professors als grups';
$string['groupselect:create'] = 'Permet crear grups';
$string['groupselect:export'] = 'Permet exportar els membres dels grups';
$string['groupselect:select'] = 'Permet esdevenir membre del grup';
$string['groupselect:unselect'] = 'Permet deixar el grup';
$string['hidefullgroups'] = 'Oculta els grups plens de la llista';
$string['hidefullgroups_help'] = 'Si s\'activa, s\'ocultaran de la vista principal els grups que assoleixin el nombre màxim de participants (exclosos el grup o els grups de l\'usuari). Pot ser útil per reduir la mida de la pàgina, si l\'activitat té molts grups.';
$string['hidegroupmembers'] = 'Oculta els membres del grup per als estudiants';
$string['hidegroupmembers_help'] = 'Si s\'estableix, tots els membres del grup s\'ocultaran per als estudiants. Si els estudiants tenen la capacitat de gestionar grups (moodle/course:managegroups) o si poden accedir a tots els grups (moodle/site:accessallgroups), els membres es mostraran sempre.';
$string['hidesuspendedstudents'] = 'Oculta els estudiants no inscrits';
$string['hidesuspendedstudents_help'] = 'Si s\'activa, els alumnes no inscrits s\'esborraran del recompte d\'usuaris i de les llistes de grup.';
$string['incorrectpassword'] = 'La contrasenya introduïda és incorrecta';
$string['managegroups'] = 'Gestiona els grups';
$string['maxcharlenreached'] = 'S\'ha assolit el nombre màxim de caràcters';
$string['maxgroupmembership'] = 'Nombre màxim de grups que l\'estudiant pot triar';
$string['maxgroupmembership_error_low'] = 'Error: s\'ha de definir com a mínim un grup!';
$string['maxgroupmembership_help'] = 'Nombre màxim de grups en els quals es pot participar. Un 0 significa que no és possible participar en cap grup.';
$string['maxlimitreached'] = 'Nombre màxim assolit';
$string['maxmembers'] = 'Nombre màxim de membres per grup';
$string['maxmembers_error_low'] = 'Error: useu el 0 per indicar que la mida dels grups NO té límit!';
$string['maxmembers_error_smaller_minmembers'] = 'Error: ha de ser major que el nombre mínim de participants per grup!';
$string['maxmembers_help'] = 'Nombre màxim de membres per grup. Poseu 0 si no hi ha cap límit.';
$string['maxmembers_icon'] = 'El grup té massa membres';
$string['maxmembers_notification'] = 'El grup té massa membres! El màxim és {$a}.';
$string['member'] = 'Membre';
$string['membercount'] = 'Comptador';
$string['membershidden'] = 'Llista de membres no disponible';
$string['memberslist'] = 'Membres';
$string['minmembers'] = 'Membres mínims per grup';
$string['minmembers_error_bigger_maxmembers'] = 'Error: la mida mínima del grup ha de ser inferior al nombre màxim de membres definit!';
$string['minmembers_error_low'] = 'Error: no es poden introduir nombres negatius per a la mida mínima del grup!';
$string['minmembers_help'] = 'Nombre mínim de membres per grup. Afegeix notificacions per a membres de grups que estan sota aquest límit. Per defecte és 0 (desactivat).';
$string['minmembers_icon'] = 'El grup no assoleix el mínim de membres requerit';
$string['minmembers_notification'] = 'El vostre grup no assoleix el mínim de membres requerit! El mínim és {$a}.';
$string['miscellaneoussettings'] = 'Paràmetres diversos';
$string['modulename'] = 'Tria de grup';
$string['modulename_help'] = 'Permet als participants crear i triar grups. Característiques:

*Els participants poden crear grups, donar-los una descripció i protegir-los amb contrasenya, si volen.
*Els participants poden triar grups i unir-s\'hi.
*Es poden assignar supervisors als grups.
*El professor pot exportar la llista de grups del curs com a fitxer CSV.
*És plenament compatible amb el sistema bàsic de grups de Moodle: els grups es poden crear per altres mitjans, si cal; admet tasques amb trameses en grup, etc.';
$string['modulenameplural'] = 'Tria de grups';
$string['nogroups'] = 'No hi ha cap grup disponible per seleccionar.';
$string['notavailableanymore'] = 'Des de {$a}, aquesta Tria de grup no està disponible.';
$string['notavailableyet'] = 'Aquesta tria de grup estarà disponible el {$a}';
$string['notifyexpiredselection'] = 'Mostra un avís, si s\'ha arribat a la data de tancament.';
$string['notifyexpiredselection_help'] = 'Si s\'activa, apareixerà un missatge que indicarà que ja s\'ha superat la data límit.';
$string['ok'] = 'D\'acord';
$string['password'] = 'Requereix una contrasenya';
$string['pluginadministration'] = 'Administració del mòdul';
$string['pluginname'] = 'Tria de grup';
$string['saving'] = 'S\'estan desant els canvis...';
$string['select'] = 'Tria el grup {$a}';
$string['selectconfirm'] = 'Confirmeu que voleu formar part del grup <em>{$a}</em>?';
$string['showassignedteacher'] = 'Mostra els professors assignats';
$string['showassignedteacher_help'] = 'Si s\'activa, els supervisors assignats es mostraran al costat dels membres. És útil si els estudiants necessiten saber qui és el seu supervisor.';
$string['studentcancreate'] = 'Permet crear grups als estudiants';
$string['studentcancreate_help'] = 'Si s\'activa, els estudiants sense grup (de l\'agrupament triat) podran crear grups';
$string['studentcanjoin'] = 'Els participants poden unir-se a grups';
$string['studentcanjoin_help'] = 'Si s\'activa, els participants poden unir-se a grups. Aquest permís es pot configurar més endavant a les capacitats del rol.';
$string['studentcanleave'] = 'Els participants poden abandonar grups';
$string['studentcanleave_help'] = 'Si s\'activa, els participants poden deixar els grups. Aquest permís es pot configurar més endavant a les capacitats del rol.';
$string['studentcansetdesc'] = 'Els estudiants poden editar la descripció del grup';
$string['studentcansetdesc_help'] = 'Si s\'activa, l\'estudiant pot incorporar una descripció per al grup en crear-lo o en editar-lo.';
$string['studentcansetenrolmentkey'] = 'Els estudiants poden establir contrasenyes per inscriure\'s als grups';
$string['studentcansetenrolmentkey_help'] = 'Si s\'activa, els estudiants podran definir una clau d\'inscripció, que serà un requisit perquè altres companys puguin triar el grup.';
$string['studentcansetgroupname'] = 'Els estudiants poden posar nom als grups nous';
$string['studentcansetgroupname_help'] = 'Si s\'activa, els estudiants podran posar nom als grups';
$string['supervisionrole'] = 'Rol del supervisor';
$string['supervisionrole_help'] = 'Definir el rol per als supervisors (per defecte: professors no editors)';
$string['targetgrouping'] = 'Agrupament des d\'on es triarà un grup';
$string['timeavailable'] = 'Obre a partir de';
$string['timeavailable_error_past_timedue'] = 'Error: no es pot posar una data posterior a la data límit';
$string['timedue'] = 'Tanca a partir de';
$string['timedue_error_pre_timeavailable'] = 'Error: no es pot acabar abans de la data d\'inici';
$string['unselect'] = 'Abandona el grup {$a}';
$string['unselectconfirm'] = 'Esteu segur que voleu abandonar el grup <em>{$a}</em>?';
