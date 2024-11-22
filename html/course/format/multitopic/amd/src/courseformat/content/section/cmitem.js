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
 * Course course module item component.
 *
 * This component is used to control specific course modules interactions like drag and drop.
 *
 * @module     format_multitopic/courseformat/content/section/cmitem
 * @class      format_multitopic/courseformat/content/section/cmitem
 * @copyright  2023 James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import CmItemBase from 'core_courseformat/local/content/section/cmitem';

export default class extends CmItemBase {

    /**
     * Check if cm bulk selection is available.
     * @param {Object} bulk the current state bulk attribute
     * @returns {Boolean}
     */
    _isCmBulkEnabled(bulk) {
        if (!bulk.enabled) {
            return false;
        }
        return (bulk.selectedType === '' || bulk.selectedType === 'cm')
            && (this.element.closest('li.course-section').dataset.fmtonpage == '1'); // ADDED.
    }

}