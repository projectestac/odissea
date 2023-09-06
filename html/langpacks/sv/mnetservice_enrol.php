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
 * Strings for component 'mnetservice_enrol', language 'sv', version '4.1'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Tillgängliga kurser på {$a}';
$string['availablecoursesonnone'] = 'Fjärrservern <a href="{$a->hosturl}">{$a->hostname}</a> erbjuder inga kurser för våra användare.';
$string['clientname'] = 'Fjärregistreringsklient';
$string['clientname_help'] = 'Detta verktyg låter dig registrera och avregistrera lokala användare på fjärrservrar som gör att du kan göra detta via Pluginmodulen \'MNet fjärregistrering\'.';
$string['editenrolments'] = 'Redigera kursregistreringar';
$string['hostappname'] = 'Applikation';
$string['hostname'] = 'Servernamn';
$string['hosturl'] = 'URL till fjärrserver';
$string['nopublishers'] = 'Inga fjärrkollegor tillgängliga';
$string['noroamingusers'] = 'Användare behöver funktionsbehörigheten <code>{$a}</code> i systemkontexten för att kunna registreras på fjärrkurser, men, det finns för närvarande inga användare med den här behörigheten. Klicka på fortsätt-knappen för att tilldela den nödvändiga behörigheten till en eller flera roller på din webbplats.';
$string['otherenrolledusers'] = 'Övriga registrerade användare';
$string['pluginname'] = 'Tjänst för fjärregistrering';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Tjänst för fjärregistrering';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Tidpunkt då registreringen ändrades';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Fjärrserverns registreringstyp som används för att registrera användare på deras kurs';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'ID för MNet-fjärrservern';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'ID för kursen på fjärrservern';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'Namn på rollen på fjärrservern';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Pluginmodulen Tjänst för fjärregistrering lagrar information om lokala användares kursregistreringar på fjärrservrar.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'ID för lokal användare på denna server';
$string['refetch'] = 'Uppdatera aktuell status från fjärrservrar';
