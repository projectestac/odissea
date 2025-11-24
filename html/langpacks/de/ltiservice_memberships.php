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
 * Strings for component 'ltiservice_memberships', language 'de', version '4.5'.
 *
 * @package     ltiservice_memberships
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow'] = 'Service nutzen, um Mitgliedsinformationen aus Datenschutzgründen zurückzuholen';
$string['ltiservice_memberships'] = 'IMS LTI Namen und Rollenbereitstellung';
$string['ltiservice_memberships_help'] = 'Erlauben Sie dem Tool, die Informationen von Teilnehmer/innen aus dem Kurs mithilfe des IMS LTI Names and Role Provisioning Service abzurufen. Es gelten die Datenschutzeinstellungen. Bei Anfragen auf Kursebene basieren diese auf den Konfigurationseinstellungen des Tools. Wenn Sie solche Details immer senden möchten, delegieren Sie die Auswahl nicht an die Trainer/innen. Anfragen auf Link-Ebene verwenden immer die Datenschutzeinstellungen, die für den Link gelten.';
$string['notallow'] = 'Diesen Service nicht nutzen';
$string['pluginname'] = 'Webservice für IMS LTI Namen und Rollenbereitstellung';
$string['privacy:metadata:email'] = 'E-Mail des Nutzers, der LTI-Consumer nutzte';
$string['privacy:metadata:externalpurpose'] = 'Diese Information wird an externen LTI Provider gesendet.';
$string['privacy:metadata:firstname'] = 'Vorname des Nutzers, der LTI-Consumer nutzt';
$string['privacy:metadata:fullname'] = 'Vollständiger Name des Nutzers, der LTI-Consumer nutzt';
$string['privacy:metadata:lastname'] = 'Nachname des Nutzers, der LTI-Consumer nutzt';
$string['privacy:metadata:userid'] = 'ID des Nutzers, der LTI-Consumer nutzt';
$string['privacy:metadata:useridnumber'] = 'ID der Person, die den LTI-Consumer nutzt';
