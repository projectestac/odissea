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
 * Course section format component.
 *
 * @module     format_multitopic/courseformat/content/section
 * @class      format_multitopic/courseformat/content/section
 * @copyright  2022 onwards James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import Header from 'format_multitopic/courseformat/content/section/header';
import SectionBase from 'core_courseformat/local/content/section';

export default class extends SectionBase {

    /**
     * Initial state ready method.
     *
     * @param {Object} state the initial state
     */
    stateReady(state) {
        this.configState(state);
        // Drag and drop is only available for components compatible course formats.
        if (this.reactive.isEditing && this.reactive.supportComponents) {
            // Section zero and other formats sections may not have a title to drag.
            const sectionItem = this.getElement(this.selectors.SECTION_ITEM);
            if (sectionItem) {
                // Init the inner dragable element.
                const headerComponent = new Header({ // CHANGED.
                    ...this,
                    element: sectionItem,
                    fullregion: this.element,
                });
                this.configDragDrop(headerComponent);
            }
        }

        if (this.section.component) {
            return;
        }

        const originalSingleSectionId = document.querySelector("ul.sections").dataset.originalsinglesectionid;
        const originalSingleSection = this.reactive.get("section", originalSingleSectionId);
        let singleSectionId;
        if (originalSingleSection) {
            singleSectionId = (originalSingleSection.levelsan < 2) ? originalSingleSection.id : originalSingleSection.pageid;
        } else {
            singleSectionId = null;
        }
        const fmtonpageNew = (this.section.pageid == singleSectionId) ? "1" : "0";
        if (this.element.dataset.fmtonpage != fmtonpageNew) {
            this.element.dataset.fmtonpage = fmtonpageNew;
            this.element.style.display = (fmtonpageNew == "1") ? "block" : "none";
        }
    }

    /**
     * Validate if the drop data can be dropped over the component.
     *
     * @param {Object} dropdata the exported drop data.
     * @returns {boolean}
     */
    validateDropData(dropdata) {
        if (dropdata?.type === 'section') {
            const origin = this.reactive.get("section", dropdata.id);
            return origin.id != this.section.id && origin.levelsan >= 2
                    && (this.section.levelsan >= 2 || this.section.section > origin.section
                        || this.course.draganddropsectionmoveafter);
        }
        return super.validateDropData(dropdata);
    }

}