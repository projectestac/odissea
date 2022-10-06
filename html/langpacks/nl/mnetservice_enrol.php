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
 * Strings for component 'mnetservice_enrol', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   mnetservice_enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Beschikbare cursussen op {$a}';
$string['availablecoursesonnone'] = 'Externe host <a href="{$a->hosturl}">{$a->hostname}</a> biedt geen cursussen aan voor onze gebruikers.';
$string['clientname'] = 'Externe aanmeldingsclient';
$string['clientname_help'] = 'Aan- en afmelden van gebruikers van jouw Moodle-installatie op Moodle-hosts die je daarvoor de toelating geven via hun Moodle Network aanmeldingsplugin.';
$string['editenrolments'] = 'Bewerk aanmeldingen';
$string['hostappname'] = 'Toepassing';
$string['hostname'] = 'Host naam';
$string['hosturl'] = 'URL externe host';
$string['nopublishers'] = 'Geen externe peers beschikbaar.';
$string['noroamingusers'] = 'Gebruikers hebben de moglijkheid \'{$a}\' nodig in de systeemcontext om te kunnen aanmelden in externe cursussen, hoewel er nu geen gebruikers zijn met die mogelijkheid. Klik op ga verder om de vereiste mogelijkheid toe te voegen aan één of meer rollen op je site.';
$string['otherenrolledusers'] = 'Andere aangemelde gebruikers';
$string['pluginname'] = 'Externe aanmeldingsservice';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Externe aanmeldingsservice';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Het tijdstip waarop de aanmelding werd gewijzigd';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Het aanmeldingstype op de externe server die gebruikt werd om de gebruiker in zijn cursus aan te melden';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'De ID van de externe MNet host';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'ID van de cursus op de externe server';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'De naam van de rol op de externe server';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'De externe aanmeldingsservice bewaart informatie over aanmeldingen van lokale gebruikers in cursussen op de externe hosts.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'De ID van de lokale gebruiker op deze server';
$string['refetch'] = 'Haal de up-to-date-status ven de externe hosts opnieuw op';
