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
 * Tab format component.
 *
 * @module     format_multitopic/courseformat/contenttabs/tab
 * @class      format_multitopic/courseformat/contenttabs/tab
 * @copyright  2023 James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import TabTitle from 'format_multitopic/courseformat/contenttabs/tabtitle';
import DndSection from 'core_courseformat/local/courseeditor/dndsection';

export default class extends DndSection {

    /**
     * Constructor hook.
     */
    create() {
        // Optional component name for debugging.
        this.name = 'contenttabs_tab';
        // Default query selectors.
        this.selectors = {
            SECTION_ITEM: `a.nav-link`,
        };
        // CSS classes.
        this.classes = {
            LOCKED: 'editinprogress',
            DROPBEFORE: 'drop-before',
            DROPAFTER: 'drop-after',
        };

        // We need our id to watch specific events.
        this.id = this.element.dataset.id;
    }

    /**
     * Initial state ready method.
     *
     * @param {Object} state the initial state
     */
    stateReady(state) {
        this.configState(state);
        // Drag and drop is only available for components compatible course formats.
        if (this.reactive.isEditing && this.reactive.supportComponents) {
            const sectionItem = this.getElement(this.selectors.SECTION_ITEM);
            // Init the inner dragable element.
            const headerComponent = new TabTitle({
                ...this,
                element: sectionItem,
                fullregion: this.element,
            });
            this.configDragDrop(headerComponent);
        }
    }

    /**
     * Component watchers.
     *
     * @returns {Array} of watchers
     */
    getWatchers() {
        return [
            {watch: `section[${this.id}]:updated`, handler: this._refreshSection},
        ];
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
            const target = this.section;
            const targettablevel = this.element.className.match(/\btab_level_(\d+)\b/)[1];
            return dropdata?.id != this.id && targettablevel == origin.levelsan
                    && (target.levelsan == targettablevel || target.number > origin.number
                        || this.course.draganddropsectionmoveafter)
                    && origin.id != sectionzeroid;
        }
        return false;
    }

    /**
     * Display the component dropzone.
     *
     * @param {Object} dropdata the accepted drop data
     */
    showDropZone(dropdata) {
        if (dropdata.type == 'section') {
            const origin = this.reactive.get("section", dropdata.id);
            const targettablevel = this.element.className.match(/\btab_level_(\d+)\b/)[1];
            if (targettablevel == origin.levelsan) {
                // The relative move of section depends on the section number.
                if (this.section.number > dropdata.number || this.course.draganddropsectionmoveafter) {
                    this.element.classList.remove(this.classes.DROPBEFORE);
                    this.element.classList.add(this.classes.DROPAFTER);
                } else {
                    this.element.classList.add(this.classes.DROPBEFORE);
                    this.element.classList.remove(this.classes.DROPAFTER);
                }
            }
        }
    }

    /**
     * Hide the component dropzone.
     */
    hideDropZone() {
        this.element.classList.remove(this.classes.DROPBEFORE);
        this.element.classList.remove(this.classes.DROPAFTER);
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
            const targettablevel = this.element.className.match(/\btab_level_(\d+)\b/)[1];
            if (targettablevel == origin.levelsan) {
                this.reactive.dispatch(this.course.draganddropsectionmoveafter ? 'sectionMoveAfter' : 'sectionMove',
                    [origin.id], target.id);
            }
        }
    }

    /**
     * Update a tab using the state information.
     *
     * @param {object} param
     * @param {Object} param.element details the update details.
     */
    _refreshSection({element}) {
        // Update classes.
        this.element.classList.toggle(this.classes.DRAGGING, element.dragging ?? false);
        this.element.classList.toggle(this.classes.LOCKED, element.locked ?? false);
        this.locked = element.locked;
        // Update title.
        this.getElement("div.tab_content").innerHTML = element.title;
    }

}