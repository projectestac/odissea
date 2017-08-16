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
 * Strings for component 'tool_monitor', language 'nl', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Voeg een nieuwe regel toe';
$string['allevents'] = 'Alle gebeurtenissen';
$string['allmodules'] = 'Alle instanties';
$string['area'] = 'Zone';
$string['areatomonitor'] = 'Te monitoren zone';
$string['cachedef_eventsubscriptions'] = 'Dit bewaart de lijst met gebeurtenis-inschrijvingen per cursus';
$string['contactadmin'] = 'Neem contact op met je beheerder om dit in te schakelen';
$string['core'] = 'Kern';
$string['currentsubscriptions'] = 'Je huidige inschrijvingen';
$string['defaultmessagetemplate'] = 'Regelnaam: {rulename}<br />Beschrijving: {description}<br />Gebeurtenisnaam: {eventname}';
$string['deleterule'] = 'Verwijder regel';
$string['deletesubscription'] = 'Verwijder inschrijving';
$string['description'] = 'Beschrijving:';
$string['disablefieldswarning'] = 'Sommige velden kunnen niet gewijzigd worden als deze regel al inschrijvingen heeft.';
$string['duplicaterule'] = 'Regel dupliceren';
$string['editrule'] = 'Bewerk regel';
$string['enablehelp'] = 'Gebeurtenismonitoring inschakelen/uitschakelen';
$string['enablehelp_help'] = 'Gebeurtenismonitoring moet ingeschakeld zijn voor je regels kunt maken en je er op inschrijven. Merk op dat het inschakelen van gebeurtenismonitoring invloed kan hebben op de performantie van je site.';
$string['errorincorrectevent'] = 'Selecteer een gebeurtenis die betrekking heeft op de geselecteerde plugin';
$string['event'] = 'Gebeurtenis';
$string['eventnotfound'] = 'Gebeurtenis niet gevonden';
$string['eventrulecreated'] = 'Regel gemaakt';
$string['eventruledeleted'] = 'Regel verwijderd';
$string['eventruleupdated'] = 'Regel aangepast';
$string['eventsubcreated'] = 'Inschrijving gemaakt';
$string['eventsubcriteriamet'] = 'Aan inschrijvingscriteria voldaan';
$string['eventsubdeleted'] = 'Inschrijving verwijderd';
$string['freqdesc'] = '{$a->freq} keer in {$a->mins} minuten';
$string['frequency'] = 'Meldingsdrempel';
$string['frequency_help'] = 'Het aantal gebeurtenissen binnen een opgegeven periode die nodig zijn om een melding te sturen.';
$string['inminutes'] = 'in minuten';
$string['invalidmodule'] = 'Ongeldige module';
$string['manage'] = 'Beheer';
$string['managerules'] = 'Regels gebeurtenismonitoring';
$string['manageruleslink'] = 'Je kunt de regels beheren van pagina {$a}.';
$string['managesubscriptions'] = 'Gebeurtenismonitoring';
$string['managesubscriptionslink'] = 'Je kunt inschrijven op regels van de {$a} pagina.';
$string['messageprovider:notification'] = 'Meldingen van regel-inschrijvingen';
$string['messagetemplate'] = 'Meldingsbericht';
$string['messagetemplate_help'] = 'Er is een melding gestuurd naar wie ingeschreven is om een melding te ontvangen wanneer de drempelwaarde is bereikt. Het kan gaan om één of meer van volgende plaatshouders:
<br /><br />
* Link naar de locatie van de gebeurtenis {link}<br />
* Link naar de gemonitorde zone {modulelink}<br />
* Naam van de regel {rulename}<br />
* Beschrijving {description}<br />
* Gebeurtenis {eventname}';
$string['moduleinstance'] = 'Instantie';
$string['monitordisabled'] = 'Gebeurtenismonitoring is uitgeschakeld';
$string['monitorenabled'] = 'Gebeurtenismonitoring is ingeschakeld';
$string['monitor:managerules'] = 'Beheer regels gebeurtenismonitor';
$string['monitor:managetool'] = 'Gebeurtenissen monitoren inschakelen en uitschakelen';
$string['monitor:subscribe'] = 'Inschrijven op regels voor gebeurtenissen monitoren';
$string['norules'] = 'Er zijn geen regels om gebeurtenissen te monitoren';
$string['pluginname'] = 'Gebeurtenismonitor';
$string['processevents'] = 'Gebeurtenissen verwerken';
$string['ruleareyousure'] = 'Weet je zeker dat je regel "{$a}" wil verwijderen?';
$string['ruleareyousureextra'] = 'Er zijn {$a} inschrijving(en) die ook verwijderd zullen worden.';
$string['rulecopysuccess'] = 'Regel gekopiëerd';
$string['ruledeletesuccess'] = 'Regel verwijderd';
$string['rulehelp'] = 'Regeldetails';
$string['rulehelp_help'] = 'Deze regel luistert naar gebeurtenis  \'{$a->eventname}\' in \'{$a->eventcomponent}\', waneer die {$a->frequency} keer in {$a->minutes} minute(n) gebeurt.';
$string['rulename'] = 'Regelnaam';
$string['rulenopermission'] = 'Je hebt onvoldoende rechten om je in te schrijven voor een gebeurtenis.';
$string['rulenopermissions'] = 'Je hebt het recht niet om een regel te "{$a}"';
$string['rulescansubscribe'] = 'Regels waarop je kan inschrijven';
$string['selectacourse'] = 'Selecteer een cursus';
$string['selectcourse'] = 'Ga naar dit rapport op cursusniveau om een lijst met mogelijke modules te zien';
$string['subareyousure'] = 'Weet je zeker dat je je wil uitschrijven voor regel "{$a}"?';
$string['subcreatesuccess'] = 'Ingeschreven';
$string['subdeletesuccess'] = 'Uitsgeschreven';
$string['subhelp'] = 'Inschrijvingsdetails';
$string['subhelp_help'] = 'De inschrijving luistert naar gebeurtenis  \'{$a->eventname}\', wanneer die in \'{$a->moduleinstance}\' {$a->frequency} keer in {$a->minutes} minuten gebeurt.';
$string['subscribeto'] = 'Inschrijven voor regel "{$a}"';
$string['taskchecksubscriptions'] = 'Activeer/deactiveer ongeldige rolinschrijvingen';
$string['taskcleanevents'] = 'Verwijder onnodige gebeurtenismonitors';
$string['unsubscribe'] = 'Uitschrijven';
