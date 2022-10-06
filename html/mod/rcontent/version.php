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
 * Defines the version of rcontent
 *
 * This code fragment is called by moodle_needs_upgrading() and
 * /admin/index.php
 *
 * @package    mod
 * @subpackage rcontent
 * @copyright  2011 onwards Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2017101000;       // The current module version (Date: YYYYMMDDXX)
$plugin->requires  = 2014051200;        // Requires this Moodle version 2.7
$plugin->component = 'mod_rcontent';    // Full name of the plugin (used for diagnostics)
$plugin->release   = 'v2.0.7';          // Human-readable version name
$plugin->maturity  = MATURITY_STABLE;   // How stable the plugin is

$plugin->dependencies = array(
    'local_rcommon' => ANY_VERSION
);