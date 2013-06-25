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
 * Strings for component 'auth_odissea', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   auth_odissea
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_odisseadescription'] = 'This method provides authentication against an external LDAP server.
                                  If the given username and password are valid, Moodle creates a new user
                                  entry in its database. This module can read user attributes from LDAP, prefill
                                  wanted fields in Moodle and change username for NIF or equivalent.
                                  For following logins, only the username and password are checked.';
$string['pluginname'] = 'Odissea';
$string['auth_odissea_nif_attribute'] = 'Optional: Overrides the attribute used for identity number of users (NIF or equivalent). Usually \'nif\'.';
$string['auth_odissea_nif_attribute_key'] = 'NIF';
