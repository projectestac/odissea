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
 * Strings for component 'tool_monitor', language 'ca', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Afegir una nova regla';
$string['allevents'] = 'Tots els events';
$string['allmodules'] = 'Totes les instàncies';
$string['area'] = 'Àrea';
$string['areatomonitor'] = 'Àrea a monitorar';
$string['cachedef_eventsubscriptions'] = 'Això emmagatzema la llista d\'esdeveniments de subscripcions per als cursos individuals';
$string['contactadmin'] = 'Contacteu el vostre administrador per habilitar-ho.';
$string['core'] = 'Nucli';
$string['currentsubscriptions'] = 'Les vostres susbcripcions actuals';
$string['defaultmessagetemplate'] = 'Nom de la regla: {rulename}<br />Descripció: {description}<br />Nom de l\'esdeveniment: {eventname}';
$string['deleterule'] = 'Esborra la regla';
$string['deletesubscription'] = 'Esborra la subscripció';
$string['description'] = 'Descripció:';
$string['disablefieldswarning'] = 'Alguns camps no es poden editar en aquesta regla si té subscripcions.';
$string['duplicaterule'] = 'Duplicada la regla';
$string['editrule'] = 'Edita la regla';
$string['enablehelp'] = 'Habilita/inhabilita el monitoratge d\'esdeveniments';
$string['enablehelp_help'] = 'El monitoratge d\'esdeveniments ha d\'habilitar-se abans que creeu i us subscriviu a les regles. Noteu que habilitar el monitoratge d\'esdeveniments pot afectar el rendiment del vostre lloc.';
$string['errorincorrectevent'] = 'Seleccioneu un esdeveniment relacionat amb el complement seleccionat';
$string['event'] = 'Esdeveniment';
$string['eventnotfound'] = 'Esdeveniment no trobat';
$string['eventrulecreated'] = 'S\'ha creat la regla';
$string['eventruledeleted'] = 'S\'ha esborrat la regla';
$string['eventruleupdated'] = 'S\'ha actualitzat la regla';
$string['eventsubcreated'] = 'S\'ha creat la subcripció';
$string['eventsubcriteriamet'] = 'Satisfà els criteris de subscripció';
$string['eventsubdeleted'] = 'S\'ha esborrat la subcripció';
$string['freqdesc'] = '{$a->freq} vegades en {$a->mins} minut(s)';
$string['frequency'] = 'Llindar de notificació';
$string['frequency_help'] = 'El nombre d\'esdeveniments dins d\'un període de temps específic que calen per enviar un missatge de notificació.';
$string['inminutes'] = 'En minuts';
$string['invalidmodule'] = 'Mòdul invàlid';
$string['manage'] = 'Gestiona';
$string['managerules'] = 'Regles de monitoratge d\'esdeveniments';
$string['manageruleslink'] = 'Podeu gestionar les regles des de la pàgina {$a}';
$string['managesubscriptions'] = 'Monitoratge d\'esdeveniments';
$string['managesubscriptionslink'] = 'Us podeu subscriure a les regles des de la pàgina {$a}';
$string['messageprovider:notification'] = 'Notificacions de subscripcions a regla';
$string['messagetemplate'] = 'Missatge de notificació';
$string['messagetemplate_help'] = 'Un cop s\'ha arribat al llindar de notificació, s\'envia un missatge de notificació als subscrits . Pot incloure qualsevol o tots els següents marcadors:
<br /> <br />
* Enllaç a la ubicació de l\'esdeveniment {link}<br/>
* Enllaç a la zona monitoritzada {modulelink}<br/>
* Nom de la regla {rulename}<br/>
* Descripció {description}<br/>
* Esdeveniment  {eventname}';
$string['moduleinstance'] = 'Instància';
$string['monitordisabled'] = 'El monitoratge d\'esdeveniments està inhabilitat actualment.';
$string['monitorenabled'] = 'El monitoratge d\'esdeveniments està habilitat actualment.';
$string['monitor:managerules'] = 'Gestiona les regles del monitor d\'esdeveniments';
$string['monitor:managetool'] = 'Habilita/inhabilita el monitoratge d\'esdeveniments';
$string['monitor:subscribe'] = 'Subscriviu-vos a les regles del monitor d\'esdeveniments';
$string['norules'] = 'No hi ha regles de monitoratge d\'esdeveniments.';
$string['pluginname'] = 'Monitor d\'esdeveniments';
$string['processevents'] = 'Processa esdeveniments';
$string['ruleareyousure'] = 'Segur que voleu suprimir la regla «{$a}»?';
$string['ruleareyousureextra'] = 'Hi ha {$a} subscripcions a aquesta regla que es suprimiran.';
$string['rulecopysuccess'] = 'Regla duplicada correctament';
$string['ruledeletesuccess'] = 'Regla esborrada correctament';
$string['rulehelp'] = 'Detalls de la regla';
$string['rulehelp_help'] = 'Aquesta regla escolta quan l\'esdeveniment «{$a->eventname}» en  «{$a->eventcomponent}» s\'ha disparat  {$a->frequency} vegades en {$a->minutes} minuts.';
$string['rulename'] = 'Nom de la regla';
$string['rulenopermission'] = 'No teniu permís per subscriure-us a cap esdeveniment.';
$string['rulenopermissions'] = 'No teniu permís per «{$a} a la regla»';
$string['rulescansubscribe'] = 'Regles a les quals us podeu subscriure';
$string['selectacourse'] = 'Selecciona un curs';
$string['selectcourse'] = 'Visiteu l\'informe del nivell del curs per obtenir una llista de mòduls possibles.';
$string['subareyousure'] = 'Segur que voleu esborrar la subscripció a la regla «{$a}»?';
$string['subcreatesuccess'] = 'Subscripció creada correctament';
$string['subdeletesuccess'] = 'Subscripció esborrada correctament';
$string['subhelp'] = 'Detalls de la subscripció';
$string['subhelp_help'] = 'Aquesta subscripció escolta en quin moment l\'esdeveniment  «{$a->eventname}» s\'ha disparat al mòdul «{$a->moduleinstance}» la quantitat de {$a->frequency} vegades en  {$a->minutes} minuts.';
$string['subscribeto'] = 'Subscriu-me a la regla «{$a}»';
$string['taskchecksubscriptions'] = 'Activa/desactiva les subscripcions a les regles invàlides.';
$string['taskcleanevents'] = 'Suprimeix qualsevol esdeveniment que monitoritzi esdeveniments no necessaris.';
$string['unsubscribe'] = 'Cancel·la la subscripció';
