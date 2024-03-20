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

namespace core_reportbuilder\local\systemreports;

use core_reportbuilder\local\models\audience;
use core_reportbuilder\local\models\report;
use core_reportbuilder\permission;
use core_reportbuilder\system_report;
use core_reportbuilder\local\entities\user;
use core_reportbuilder\local\helpers\audience as audience_helper;
use core_user\fields;

/**
 * Report access list
 *
 * @package     core_reportbuilder
 * @copyright   2021 David Matamoros <davidmc@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class report_access_list extends system_report {

    /**
     * Initialise the report
     */
    protected function initialise(): void {
        $userentity = new user();
        $userentityalias = $userentity->get_table_alias('user');

        $this->set_main_table('user', $userentityalias);
        $this->add_entity($userentity);

        // Find users allowed to view the report thru the report audiences.
        $audiences = audience::get_records(['reportid' => $this->get_parameter('id', 0, PARAM_INT)]);
        [$wheres, $params] = audience_helper::user_audience_sql($audiences, $userentityalias);

        if (count($wheres) > 0) {
            $select = '(' . implode(' OR ', $wheres) . ')';
        } else {
            $select = "1=0";
        }

        $this->add_base_condition_sql($select, $params);
        $this->add_base_condition_simple("{$userentityalias}.deleted", 0);

        $this->add_columns();
        $this->add_filters();

        $this->set_downloadable(false);
    }

    /**
     * Ensure we can view the report
     *
     * @return bool
     */
    protected function can_view(): bool {
        $reportid = $this->get_parameter('id', 0, PARAM_INT);
        $report = report::get_record(['id' => $reportid], MUST_EXIST);

        return permission::can_edit_report($report);
    }

    /**
     * Add columns to report
     */
    protected function add_columns(): void {
        $userentity = $this->get_entity('user');
        $this->add_column($userentity->get_column('fullnamewithpicturelink'));

        // Include all identity field columns.
        $identityfields = fields::for_identity($this->get_context(), true)->get_required_fields();
        foreach ($identityfields as $identityfield) {
            $this->add_column($userentity->get_identity_column($identityfield));
        }

        $this->set_initial_sort_column('user:fullnamewithpicturelink', SORT_ASC);
    }

    /**
     * Add filters to report
     */
    protected function add_filters(): void {
        $userentity = $this->get_entity('user');
        $this->add_filter($userentity->get_filter('fullname'));

        // Include all identity field filters.
        $identityfields = fields::for_identity($this->get_context(), true)->get_required_fields();
        foreach ($identityfields as $identityfield) {
            $this->add_filter($userentity->get_identity_filter($identityfield));
        }
    }
}
