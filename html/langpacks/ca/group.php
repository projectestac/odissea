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
 * Strings for component 'group', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Afegit per {$a}';
$string['addgroup'] = 'Afegeix l\'usuari al grup';
$string['addgroupstogrouping'] = 'Afegeix grups a l\'agrupament';
$string['addgroupstogroupings'] = 'Afegeix/suprimeix grups';
$string['adduserstogroup'] = 'Afegeix/suprimeix usuaris';
$string['allocateby'] = 'Assigna membres';
$string['anygrouping'] = '[Qualsevol agrupament]';
$string['autocreategroups'] = 'Crea grups automàticament';
$string['backtogroupings'] = 'Torna a agrupaments';
$string['backtogroups'] = 'Torna a grups';
$string['badnamingscheme'] = 'Ha de contenir exactament un caràcter \'@\' o \'#\'';
$string['byfirstname'] = 'Alfabèticament per nom, cognom';
$string['byidnumber'] = 'Alfabèticament per nombre ID';
$string['bylastname'] = 'Alfabèticament per cognom, nom';
$string['createautomaticgrouping'] = 'Crea agrupament automàtic';
$string['creategroup'] = 'Crea grup';
$string['creategrouping'] = 'Crea agrupament';
$string['creategroupinselectedgrouping'] = 'Crea grup en l\'agrupament';
$string['createingrouping'] = 'S\'estan agrupant els grups creats automàticament';
$string['createorphangroup'] = 'Crea un grup orfe';
$string['databaseupgradegroups'] = 'La versió de grups és ara {$a}';
$string['defaultgrouping'] = 'Agrupament per defecte';
$string['defaultgroupingname'] = 'Agrupament';
$string['defaultgroupname'] = 'Grup';
$string['deleteallgroupings'] = 'Suprimeix tots els agrupaments';
$string['deleteallgroups'] = 'Suprimeix tots els grups';
$string['deletegroupconfirm'] = 'Segur que voleu suprimir el grup \'{$a}\'?';
$string['deletegrouping'] = 'Suprimeix agrupament';
$string['deletegroupingconfirm'] = 'Segur que voleu suprimir l\'agrupament \'{$a}\'? (els grups d\'aquest agrupament no se suprimiran)';
$string['deletegroupsconfirm'] = 'Segur que voleu suprimir els grups següents?';
$string['deleteselectedgroup'] = 'Suprimeix grup seleccionat';
$string['editgroupingsettings'] = 'Edita paràmetres d\'agrupament';
$string['editgroupsettings'] = 'Edita paràmetres del grup';
$string['enablemessaging'] = 'Missatgeria de grup';
$string['enablemessaging_help'] = 'Si s\'habilita, els membres d\'un grup poden enviar missatges als altres membres del seu grup mitjançant el menú de missatges.';
$string['enrolmentkey'] = 'Clau d\'inscripció';
$string['enrolmentkeyalreadyinuse'] = 'Aquesta clau de matrícula ja l\'utilitza un altre grup.';
$string['enrolmentkey_help'] = 'Una clau d\'inscripció obre l\'accés al curs, que queda restringit a les persones que la saben. Si s\'especifica una clau d\'inscripció, l\'usuari no només podrà inscriure\'s al curs, si la coneix, sinó que també esdevindrà automàticament membre del grup.

Nota: Les claus d\'inscripció de grup s\'han d\'activar als paràmetres de l\'autoinscripció, i també s\'ha d\'especificar una clau d\'inscripció per al curs.';
$string['erroraddremoveuser'] = 'S\'ha produït un error en afegir l\'usuari {$a} o suprimir-lo del grup.';
$string['erroreditgroup'] = 'S\'ha produït un error en crear o actualitzar el grup {$a}';
$string['erroreditgrouping'] = 'S\'ha produït un error en crear o actualitzar l\'agrupament {$a}';
$string['errorinvalidgroup'] = 'S\'ha produït un error: el grup {$a} no és vàlid';
$string['errorremovenotpermitted'] = 'No teniu permís per a eliminar el membre del grup {$a} afegit automàticament';
$string['errorselectone'] = 'Seleccioneu un sol grup abans de triar aquesta opció';
$string['errorselectsome'] = 'Seleccioneu un o més grups abans de triar aquesta opció';
$string['evenallocation'] = 'Nota: el nombre de membres per grup serà diferent del que havíeu especificat, a fi de distribuir-los més equilibradament.';
$string['eventgroupcreated'] = 'S\'ha creat el grup';
$string['eventgroupdeleted'] = 'S\'ha suprimit el grup';
$string['eventgroupingcreated'] = 'S\'ha creat l\'agrupament';
$string['eventgroupingdeleted'] = 'S\'ha suprimit l\'agrupament';
$string['eventgroupinggroupassigned'] = 'S\'ha assignat el grup a l\'agrupament';
$string['eventgroupinggroupunassigned'] = 'S\'ha tret el grup a l\'agrupament';
$string['eventgroupingupdated'] = 'S\'ha actualitzat l\'agrupament';
$string['eventgroupmemberadded'] = 'S\'ha afegit el membre del grup';
$string['eventgroupmemberremoved'] = 'S\'ha suprimit el membre del grup';
$string['eventgroupupdated'] = 'S\'ha actualitzat el grup';
$string['existingmembers'] = 'Membres existents: {$a}';
$string['filtergroups'] = 'Filtra grups per:';
$string['group'] = 'Grup';
$string['groupaddedsuccesfully'] = 'S\'ha afegit amb èxit el grup {$a}';
$string['groupaddedtogroupingsuccesfully'] = 'El grup {$a->groupname} s\'ha afegit a l\'agrupació  {$a->groupingname} amb èxit.';
$string['groupby'] = 'Crea grups automàticament basats en';
$string['groupdescription'] = 'Descripció del grup';
$string['groupinfo'] = 'Informació sobre el grup seleccionat';
$string['groupinfomembers'] = 'Informació sobre els membres seleccionats';
$string['groupinfopeople'] = 'Informació sobre les persones seleccionades';
$string['grouping'] = 'Agrupament';
$string['groupingaddedsuccesfully'] = 'L\'agrupació {$a} s\'ha afegit amb èxit.';
$string['groupingdescription'] = 'Descripció de l\'agrupament';
$string['grouping_help'] = 'Un agrupament és una llista de grups dins d\'un curs. Si s\'ha seleccionat un agrupament, les persones assignades a l\'agrupament podran treballar conjuntament.';
$string['groupingname'] = 'Nom de l\'agrupament';
$string['groupingnameexists'] = 'El nom d\'agrupament \'{$a}\' ja existeix en aquest curs. Trieu-ne un altre.';
$string['groupings'] = 'Agrupaments';
$string['groupingsection'] = 'Accés d\'agrupament';
$string['groupingsection_help'] = 'Un agrupament és un conjunt de grups dins d\'un curs. Si seleccioneu un agrupament aquí, només els estudiants assignats als grups dins d\'aquest agrupament tindran accés a la secció.';
$string['groupingsonly'] = 'Només agrupaments';
$string['groupmember'] = 'Membre del grup';
$string['groupmemberdesc'] = 'Rol estàndard per a membres d\'un grup';
$string['groupmembers'] = 'Membres del grup';
$string['groupmemberssee'] = 'Visualitza els membres del grup';
$string['groupmembersselected'] = 'Membres del grup seleccionat';
$string['groupmode'] = 'Mode de grups';
$string['groupmodeforce'] = 'Imposa el mode de grup';
$string['groupmodeforce_help'] = 'Si es força el mode de grups, el mode de grups del curs s\'aplica a cada activitat del curs. Aleshores els modes de grup de cada activitat no es tenen en compte.';
$string['groupmode_help'] = 'Aquest paràmetre té 3 opcions:

* Sense grups
* Grups separats: cada membre d\'un grup veu només el seu grup, els altres són invisibles.
* Grups visibles: cada membre d\'un grup treballa dins del seu propi grup, però pot veure també els altres grups.

El mode de grup definit a nivell de curs és el mode per defecte en totes les activitats del curs. Cada activitat que admeti grups pot definir també el seu propi mode de grup, encara que si s\'imposa el mode de grup a nivell de curs, s\'ignorarà el paràmetre de mode de grup de cada activitat.';
$string['groupmy'] = 'El meu grup';
$string['groupname'] = 'Nom del grup';
$string['groupnameexists'] = 'Ja existeix un grup denominat \'{$a}\' en aquest curs. Trieu un altre nom.';
$string['groupnotamember'] = 'No sou membre d\'aquest grup';
$string['groups'] = 'Grups';
$string['groupscount'] = 'Grups ({$a})';
$string['groupsettingsheader'] = 'Grups';
$string['groupsgroupings'] = 'Grups i agrupaments';
$string['groupsinselectedgrouping'] = 'Grups:';
$string['groupsnone'] = 'Sense grups';
$string['groupsonly'] = 'Només grups';
$string['groupspreview'] = 'Previsualització de grups';
$string['groupsseparate'] = 'Grups separats';
$string['groupsvisible'] = 'Grups visibles';
$string['grouptemplate'] = 'Grup @';
$string['hidepicture'] = 'Oculta la imatge';
$string['importgroups'] = 'Importa grups';
$string['importgroups_help'] = 'Els grups poden ser importats amb el fitxer de text. El format del fitxer ha de ser de la següent manera:
* Cada línia del fitxer conté un registre
* Cada registre és una seqüència de dades separades per comes
* El primer registre conté una llista de noms de camps que defineixen el format de la resta del fitxer
* El nom de camp requerit és groupname
* Els camps description, enrolmentkey, picture i hidepicture són opcionals';
$string['includeonlyactiveenrol'] = 'Inclou sols les inscripcions actives';
$string['includeonlyactiveenrol_help'] = 'Si s\'habilita, els usuaris amb inscripció desactivada no seran inclosos als grups.';
$string['javascriptrequired'] = 'Aquesta pàgina requereix Javascript';
$string['members'] = 'Membres per grup';
$string['membersofselectedgroup'] = 'Membres de:';
$string['mygroups'] = 'Els meus grups';
$string['namingscheme'] = 'Esquema de noms';
$string['namingscheme_help'] = 'El símbol de l\'arrova (@) es pot fer servir per crear grups amb noms que contenen lletres. Per exemple Grup @ generarà grups anomentats Grup A, Grup B, Grup C, ...<br/>
<br/>
El símbol de l\'encoixinat (#) es pot fer servir per crear grups amb noms que contenen números. Per exemple Grup # generarà grups anomenats Grup 1, Grup 2, Grup 3, ...';
$string['newgrouping'] = 'Nou agrupament';
$string['newpicture'] = 'Imatge nova';
$string['newpicture_help'] = 'Seleccioneu una imatge en format JPG o PNG. La imatge es retallarà com un quadre i es redimensionarà a 100x100 píxels.';
$string['noallocation'] = 'Sense ubicació';
$string['nogroup'] = 'Sense grup';
$string['nogrouping'] = 'Sense agrupaments';
$string['nogroups'] = 'Encara no s\'ha definit cap grup en aquest curs';
$string['nogroupsassigned'] = 'No s\'han assignat grups';
$string['nopermissionforcreation'] = 'No s\'ha pogut crear el grup "{$a}" perquè no teniu els permisos requerits';
$string['nosmallgroups'] = 'Impedeix que el darrer grup sigui massa petit';
$string['notingroup'] = 'Ignora usuaris en grups';
$string['notingrouping'] = '[en cap agrupament]';
$string['notingrouplist'] = '[En cap grup]';
$string['nousersinrole'] = 'No hi ha usuaris apropiats en el rol seleccionat';
$string['number'] = 'Nombre de grups o membres per grup';
$string['numgroups'] = 'Nombre de grups';
$string['nummembers'] = 'Membres per grup';
$string['othergroups'] = 'Altres grups';
$string['overview'] = 'Resum';
$string['potentialmembers'] = 'Membres en potència: {$a}';
$string['potentialmembs'] = 'Membres potencials';
$string['printerfriendly'] = 'Visualització per a imprimir de l\'agrupament';
$string['random'] = 'aleatòriament';
$string['removefromgroup'] = 'Elimina del grup {$a}';
$string['removefromgroupconfirm'] = 'Segur que voleu eliminar l\'usuari "{$a->user}" del grup "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Treu el grup de l\'agrupament';
$string['removegroupingsmembers'] = 'Treu tots els grups dels agrupaments';
$string['removegroupsmembers'] = 'Treu tots els membres del grup';
$string['removeselectedusers'] = 'Suprimeix els usuaris seleccionats';
$string['selectfromgroup'] = 'Selecciona els membres des d\'un grup';
$string['selectfromgrouping'] = 'Selecciona els membres de l\'agrupament';
$string['selectfromrole'] = 'Rol d\'on seleccionar membres';
$string['showgroupsingrouping'] = 'Mostra grups de l\'agrupament';
$string['showmembersforgroup'] = 'Mostra membres del grup';
$string['toomanygroups'] = 'No hi ha prou usuaris per a poblar aquest nombre de grups. Només hi ha {$a} usuaris en el rol seleccionat.';
$string['usercount'] = 'Nombre d\'usuaris';
$string['usercounttotal'] = 'Nombre d\'usuaris ({$a})';
$string['usergroupmembership'] = 'Grups als quals pertany l\'usuari seleccionat:';
