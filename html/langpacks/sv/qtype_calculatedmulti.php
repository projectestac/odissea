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
 * Strings for component 'qtype_calculatedmulti', language 'sv', version '4.5'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Svarsalternativ';
$string['answeroptions_help'] = 'Den föreslagna formeln för svarsalternativ är ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Beräknad flervalsfråga';
$string['pluginname_help'] = 'Beräknade flervalsfrågor fungerar som flervalsfrågor där valet av svarsalternativ baseras på resultatet av en numerisk formel där platshållare inom klammerparanteraser fungerar som substituerande av individuella värden när kunskapstestet genomförs. Till exempel skulle frågan <em>"Vad är arean av en rektangel med längden {L} och bredd {W}?"</em> kunna ha ett svarsalternativ <code>{= {L} * {B}}</code> där <code>*</code> betecknar multiplikation.';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'Lägg till en beräknad flervalsfråga';
$string['pluginnameediting'] = 'Redigera en beräknad flervalsfråga';
$string['pluginnamesummary'] = 'Beräknade flervalsfrågor är som flervalsfrågor  med svarsalternativ som genereras från numeriska värden som väljs slumpmässigt från en datamängd när testet tas.';
$string['privacy:metadata'] = 'Pluginmodulen Beräknad flervalsfråga frågetyp lagrar ingen personinformation.';
