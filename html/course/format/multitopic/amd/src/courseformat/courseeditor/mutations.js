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
 * Format Multitopic mutations.
 *
 * An instance of this class will be used to add custom mutations to the course editor.
 * To make sure the addMutations method find the proper functions, all functions must
 * be declared as class attributes, not a simple methods. The reason is because many
 * plugins can add extra mutations to the course editor.
 *
 * @module     format_multitopic/courseformat/courseeditor/mutations
 * @copyright  2022 onwards James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 onwards Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {getCurrentCourseEditor} from 'core_courseformat/courseeditor';
import DefaultMutations from 'core_courseformat/local/courseeditor/mutations';

class MultitopicMutations extends DefaultMutations {

    /**
     * Move course sections to specific course location.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids to move
     * @param {number} targetSectionId the target section id
     */
    sectionMove = async function(stateManager, sectionIds, targetSectionId) {
        if (!targetSectionId) {
            throw new Error(`Mutation sectionMove requires targetSectionId`);
        }
        const course = stateManager.get('course');
        // ADDED.
        let subsectionIds = [];
        for (const sectionId of sectionIds) {
            const section = stateManager.get("section", sectionId);
            for (let subsection = section;
                    subsection && (subsection.id == section.id || subsection.levelsan > section.levelsan);
                    subsection = (course.sectionlist.length > subsection.number + 1) ?
                        stateManager.get("section", course.sectionlist[subsection.number + 1]) : null) {
                subsectionIds.push(subsection.id);
            }
        }
        // END ADDED.
        this.sectionLock(stateManager, subsectionIds, true);
        const updates = await this._callEditWebservice('section_move', course.id, sectionIds, targetSectionId);
        if (typeof this.bulkReset === "function") {
            this.bulkReset(stateManager);
        }
        stateManager.processUpdates(updates);
        this.sectionLock(stateManager, subsectionIds, false);
    };

    /**
     * Move course sections after a specific course location.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids to move
     * @param {number} targetSectionId the target section id
     */
    sectionMoveAfter = async function(stateManager, sectionIds, targetSectionId) {
        if (!targetSectionId) {
            throw new Error(`Mutation sectionMoveAfter requires targetSectionId`);
        }
        const course = stateManager.get('course');
        // ADDED.
        let subsectionIds = [];
        for (const sectionId of sectionIds) {
            const section = stateManager.get("section", sectionId);
            for (let subsection = section;
                    subsection && (subsection.id == section.id || subsection.levelsan > section.levelsan);
                    subsection = (course.sectionlist.length > subsection.number + 1) ?
                        stateManager.get("section", course.sectionlist[subsection.number + 1]) : null) {
                subsectionIds.push(subsection.id);
            }
        }
        // END ADDED.
        this.sectionLock(stateManager, subsectionIds, true);
        const updates = await this._callEditWebservice('section_move_after', course.id, sectionIds, targetSectionId);
        if (typeof this.bulkReset === "function") {
            this.bulkReset(stateManager);
        }
        stateManager.processUpdates(updates);
        this.sectionLock(stateManager, subsectionIds, false);
    };

    /**
     * Move course sections into a specific course location.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids to move
     * @param {number} targetSectionId the target section id
     */
    fmtSectionMoveInto = async function(stateManager, sectionIds, targetSectionId) {
        if (!targetSectionId) {
            throw new Error(`Mutation sectionMoveInto requires targetSectionId`);
        }
        const course = stateManager.get('course');
        // ADDED.
        let subsectionIds = [];
        for (const sectionId of sectionIds) {
            const section = stateManager.get("section", sectionId);
            for (let subsection = section;
                    subsection && (subsection.id == section.id || subsection.levelsan > section.levelsan);
                    subsection = (course.sectionlist.length > subsection.number + 1) ?
                        stateManager.get("section", course.sectionlist[subsection.number + 1]) : null) {
                subsectionIds.push(subsection.id);
            }
        }
        // END ADDED.
        this.sectionLock(stateManager, subsectionIds, true);
        const updates = await this._callEditWebservice('fmt_section_move_into', course.id, sectionIds, targetSectionId);
        if (typeof this.bulkReset === "function") {
            this.bulkReset(stateManager);
        }
        stateManager.processUpdates(updates);
        this.sectionLock(stateManager, subsectionIds, false);
    };

}

export const init = () => {
    const courseEditor = getCurrentCourseEditor();
    // Some plugin (activity or block) may have their own mutations already registered.
    // This is why we use addMutations instead of setMutations here.
    courseEditor.addMutations(new MultitopicMutations());
};
