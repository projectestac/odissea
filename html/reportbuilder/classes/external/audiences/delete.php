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

declare(strict_types=1);

namespace core_reportbuilder\external\audiences;

use core_external\external_api;
use core_external\external_value;
use core_external\external_function_parameters;
use core_reportbuilder\local\helpers\audience;
use core_reportbuilder\manager;
use core_reportbuilder\permission;

/**
 * External method for deleting a report audience
 *
 * @package     core_reportbuilder
 * @copyright   2021 David Matamoros <davidmc@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class delete extends external_api {

    /**
     * Describes the parameters for get_users_courses.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters(
            [
                'reportid' => new external_value(PARAM_INT, 'Report id'),
                'instanceid' => new external_value(PARAM_INT, 'Audience instance id'),
            ]
        );
    }

    /**
     * External function to delete a report audience instance.
     *
     * @param int $reportid
     * @param int $instanceid
     * @return bool
     */
    public static function execute(int $reportid, int $instanceid): bool {
        [
            'reportid' => $reportid,
            'instanceid' => $instanceid,
        ] = self::validate_parameters(self::execute_parameters(), [
            'reportid' => $reportid,
            'instanceid' => $instanceid,
        ]);

        $report = manager::get_report_from_id($reportid);

        self::validate_context($report->get_context());
        permission::require_can_edit_report($report->get_report_persistent());

        return audience::delete_report_audience($reportid, $instanceid);
    }

    /**
     * Describes the data returned from the external function.
     *
     * @return external_value
     */
    public static function execute_returns(): external_value {
        return new external_value(PARAM_BOOL, '', VALUE_REQUIRED);
    }
}
