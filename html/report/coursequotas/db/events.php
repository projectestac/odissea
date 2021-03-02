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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

//See http://docs.moodle.org/dev/Event_2
$observers = [
    [
        'eventname' => '\core\event\course_deleted',
        'callback' => 'report_coursequotas_coursedeleted_handler',
        'includefile' => '/report/coursequotas/lib/handlers.lib.php',
    ],
    [
        'eventname' => '\core\event\course_category_deleted',
        'callback' => 'report_coursequotas_categorydeleted_handler',
        'includefile' => '/report/coursequotas/lib/handlers.lib.php',
    ]
];
