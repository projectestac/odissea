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
 * Tab header component.
 *
 * This component is used to control specific tab interactions like drag and drop.
 *
 * @module     format_multitopic/courseformat/contenttabs/tabtitle
 * @class      format_multitopic/courseformat/contenttabs/tabtitle
 * @copyright  2023 James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import DndSectionItem from 'core_courseformat/local/courseeditor/dndsectionitem';

export default class extends DndSectionItem {

    /**
     * Constructor hook.
     *
     * @param {Object} descriptor
     */
    create(descriptor) {
        // Optional component name for debugging.
        this.name = 'contenttabs_tabtitle';
        // We need our id to watch specific events.

        // Get main info from the descriptor.
        this.id = descriptor.id;
        this.section = descriptor.section;
        this.course = descriptor.course;
        this.fullregion = descriptor.fullregion;
    }

    /**
     * Initial state ready method.
     *
     * @param {Object} state the initial state
     */
    stateReady(state) {
        this.configDragDrop(this.id, state, this.fullregion);
    }

    /**
     * Initial state ready method.
     *
     * @param {number} sectionid the section id
     * @param {Object} state the initial state
     * @param {Element} fullregion the complete section region to mark as dragged
     */
    configDragDrop(sectionid, state, fullregion) {
        super.configDragDrop(sectionid, state, fullregion);
        if (fullregion.className.match(/\btab_level_(\d+)\b/)[1] != this.section.levelsan) {
            this.getDraggableData = undefined;
        }
    }

    /**
     * Validate if the drop data can be dropped over the component.
     *
     * @param {Object} dropdata the exported drop data.
     * @returns {boolean}
     */
    validateDropData(dropdata) {
        // We accept a section that fits
        if (dropdata?.type === 'section') {
            const sectionzeroid = this.course.sectionlist[0];
            const origin = this.reactive.get("section", dropdata.id);
            const targettablevel = this.fullregion.className.match(/\btab_level_(\d+)\b/)[1];
            return dropdata?.id != this.id && targettablevel < origin.levelsan
                    && origin.id != sectionzeroid;
        }
        return false;
    }

    /**
     * Display the component dropzone.
     */
    showDropZone() {
        this.element.classList.add(this.classes.DROPZONE);
    }

    /**
     * Hide the component dropzone.
     */
    hideDropZone() {
        this.element.classList.remove(this.classes.DROPZONE);
    }

    /**
     * Drop event handler.
     *
     * @param {Object} dropdata the accepted drop data
     */
    drop(dropdata) {
        // Call the move mutation.
        if (dropdata.type == 'section') {
            const origin = this.reactive.get("section", dropdata.id);
            const target = this.section;
            const targettablevel = this.fullregion.className.match(/\btab_level_(\d+)\b/)[1];
            if (targettablevel < origin.levelsan) {
                this.reactive.dispatch('fmtSectionMoveInto', [origin.id], target.id);
            }
        }
    }

}