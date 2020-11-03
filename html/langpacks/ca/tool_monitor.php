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
 * Strings for component 'tool_monitor', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Afegeix una nova regla';
$string['allevents'] = 'Tots els esdeveniments';
$string['allmodules'] = 'Totes les instàncies';
$string['area'] = 'Àrea';
$string['areatomonitor'] = 'Àrea a monitorar';
$string['cachedef_eventsubscriptions'] = 'Això emmagatzema la llista d\'esdeveniments de subscripcions per als cursos individuals';
$string['contactadmin'] = 'Poseu-vos en contacte amb el vostre administrador per habilitar-ho.';
$string['core'] = 'Nucli';
$string['currentsubscriptions'] = 'Les vostres susbcripcions actuals';
$string['defaultmessagetemplate'] = 'Nom de la regla: {rulename}<br />Descripció: {description}<br />Nom de l\'esdeveniment: {eventname}';
$string['deleterule'] = 'Esborra la regla';
$string['deletesubscription'] = 'Esborra la subscripció';
$string['description'] = 'Descripció:';
$string['disablefieldswarning'] = 'Alguns camps no es poden editar perquè aquesta regla ja té subscripcions.';
$string['duplicaterule'] = 'Duplica la regla';
$string['editrule'] = 'Edita la regla';
$string['enablehelp'] = 'Habilita/inhabilita el monitoratge d\'esdeveniments';
$string['enablehelp_help'] = 'El monitoratge d\'esdeveniments ha d\'habilitar-se abans que creeu i us subscriviu a les regles. Pareu esment en que habilitar el monitoratge d\'esdeveniments pot afectar el rendiment del vostre lloc.';
$string['errorincorrectevent'] = 'Seleccioneu un esdeveniment relacionat amb el complement seleccionat';
$string['event'] = 'Esdeveniment';
$string['eventnotfound'] = 'No s\'ha trobat l\'esdeveniment';
$string['eventrulecreated'] = 'S\'ha creat la regla';
$string['eventruledeleted'] = 'S\'ha esborrat la regla';
$string['eventruleupdated'] = 'S\'ha actualitzat la regla';
$string['eventsubcreated'] = 'S\'ha creat la subcripció';
$string['eventsubcriteriamet'] = 'Satisfà els criteris de subscripció';
$string['eventsubdeleted'] = 'S\'ha esborrat la subcripció';
$string['freqdesc'] = '{$a->freq} vegades en {$a->mins} minut(s)';
$string['frequency'] = 'Llindar de notificació';
$string['frequency_help'] = 'El nombre d\'esdeveniments dins d\'un període de temps específic que calen per enviar un missatge de notificació.';
$string['inminutes'] = 'en minuts';
$string['invalidmodule'] = 'Mòdul no vàlid';
$string['manage'] = 'Gestiona';
$string['managerules'] = 'Regles de monitoratge d\'esdeveniments';
$string['manageruleslink'] = 'Podeu gestionar les regles des de la pàgina {$a}';
$string['managesubscriptions'] = 'Monitoratge d\'esdeveniments';
$string['managesubscriptionslink'] = 'Us podeu subscriure a les regles des de la pàgina {$a}';
$string['messageprovider:notification'] = 'Notificacions de subscripcions a regla';
$string['messagetemplate'] = 'Missatge de notificació';
$string['messagetemplate_help'] = 'Un cop s\'ha arribat al llindar de notificació, s\'envia un missatge de notificació als subscriptors. Pot incloure qualsevol o tots els següents comodins:

* Enllaç a la ubicació de l\'esdeveniment {link}
* Enllaç a la zona monitorada {modulelink}
* Nom de la regla {rulename}
* Descripció {description}
* Esdeveniment  {eventname}';
$string['moduleinstance'] = 'Instància';
$string['monitordisabled'] = 'El monitoratge d\'esdeveniments està inhabilitat actualment.';
$string['monitorenabled'] = 'El monitoratge d\'esdeveniments està habilitat actualment.';
$string['monitor:managerules'] = 'Gestiona les regles del monitor d\'esdeveniments';
$string['monitor:managetool'] = 'Habilita/inhabilita el monitoratge d\'esdeveniments';
$string['monitor:subscribe'] = 'Subscriviu-vos a les regles del monitor d\'esdeveniments';
$string['norules'] = 'No hi ha regles de monitoratge d\'esdeveniments.';
$string['pluginname'] = 'Monitor d\'esdeveniments';
$string['privacy:createdrules'] = 'Les regles de monitoratge d\'esdeveniments creades per mi';
$string['privacy:metadata:description'] = 'Descripció de la regla';
$string['privacy:metadata:eventname'] = 'Nom complet de l\'esdeveniment';
$string['privacy:metadata:frequency'] = 'Freqüència de les notificacions';
$string['privacy:metadata:historysummary'] = 'Emmagatzema l\'històric dels missatges de notificació enviats';
$string['privacy:metadata:inactivedate'] = 'Període de temps, en dies, després del qual s\'esborrarà completament una subscripció inactiva';
$string['privacy:metadata:lastnotificationsent'] = 'Quan s\'envià per darrera vegada una notificació per aquesta subscripció.';
$string['privacy:metadata:messagesummary'] = 'Les notificacions s\'envien al sistema de missatgeria.';
$string['privacy:metadata:name'] = 'Nom de la regla';
$string['privacy:metadata:plugin'] = 'Nom «Frankenstyle» del connector';
$string['privacy:metadata:rulessummary'] = 'Això emmagatzema les regles del monitor.';
$string['privacy:metadata:subscriptionssummary'] = 'Emmagatzema les subscripcions de l\'usuari a diverses regles';
$string['privacy:metadata:template'] = 'Plantilla de missatge';
$string['privacy:metadata:timecreatedrule'] = 'Quan es creà aquesta regla';
$string['privacy:metadata:timecreatedsub'] = 'Quan es creà aquesta subscripció';
$string['privacy:metadata:timemodifiedrule'] = 'Quan es modificà aquesta regla per darrera vegada';
$string['privacy:metadata:timesent'] = 'Quan s\'envià aquest missatge';
$string['privacy:metadata:timewindow'] = 'Finestra temporal en segons';
$string['privacy:metadata:userid'] = 'L\'ID de l\'usuari que creà la regla.';
$string['privacy:metadata:useridhistory'] = 'L\'ID de l\'usuari a qui s\'envià la present notificació.';
$string['privacy:metadata:useridsub'] = 'L\'ID del subscriptor.';
$string['privacy:subscriptions'] = 'Les meves subscripcions';
$string['processevents'] = 'Processa els esdeveniments';
$string['ruleareyousure'] = 'Segur que voleu suprimir la regla «{$a}»?';
$string['ruleareyousureextra'] = 'Hi ha {$a} subscripcions a aquesta regla que se suprimiran.';
$string['rulecopysuccess'] = 'Regla duplicada correctament';
$string['ruledeletesuccess'] = 'Regla esborrada correctament';
$string['rulehelp'] = 'Detalls de la regla';
$string['rulehelp_help'] = 'Aquesta regla escolta quan l\'esdeveniment «{$a->eventname}» en  «{$a->eventcomponent}» s\'ha disparat  {$a->frequency} vegades en {$a->minutes} minuts.';
$string['rulename'] = 'Nom de la regla';
$string['rulenopermission'] = 'No teniu permís per subscriure-us a cap esdeveniment.';
$string['rulenopermissions'] = 'No teniu permís per «{$a} una regla»';
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
$string['taskcleanevents'] = 'Fes neteja dels esdeveniments del monitor d\'esdeveniments';
$string['unsubscribe'] = 'Cancel·la la subscripció';
