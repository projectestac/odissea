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

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->dirroot/blocks/courses_vicensvives/lib/vicensvives.php");

function vicensvives_count_licenses($idcoursebook=null) {
    $result = array();
    $ws = new vicensvives_ws();

    foreach ($ws->licenses($idcoursebook) as $license) {

        $idbook = $license->idBook;
        if (!isset($result[$idbook])) {
            $result[$idbook] = new stdClass;
            $result[$idbook]->studenttotal = 0;
            $result[$idbook]->studentactivated = 0;
            $result[$idbook]->teachertotal = 0;
            $result[$idbook]->teacheractivated = 0;
        }
        if (preg_match("/Student/i", $license->userType)) {
            $result[$idbook]->studenttotal++;
            $result[$idbook]->studentactivated += (int) $license->activated;
        } else if (preg_match("/Teacher/i", $license->userType)) {
            $result[$idbook]->teachertotal++;
            $result[$idbook]->teacheractivated += (int) $license->activated;
        }
    }

    return $result;
}
