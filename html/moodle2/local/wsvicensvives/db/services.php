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

// We defined the web service functions to install.
$functions = array(
    'local_wsvicensvives_get_lti_grade' => array(
        'classname'   => 'local_wsvicensvives_external',
        'methodname'  => 'get_lti_grade',
        'classpath'   => 'local/wsvicensvives/externallib.php',
        'description' => 'Get LTI grade in a course for one user',
        'type'        => 'read',
    )
);

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
$services = array(
    'Vicens Vives Services' => array(
        'functions' => array('local_wsvicensvives_get_lti_grade'),
        'restrictedusers' => 0,
        'enabled' => 1,
    )
);
