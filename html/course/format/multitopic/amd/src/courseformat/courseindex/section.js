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
 * Course index section component.
 *
 * This component is used to control specific course section interactions like drag and drop.
 *
 * @module     format_multitopic/courseformat/courseindex/section
 * @class      format_multitopic/courseformat/courseindex/section
 * @copyright  2022 onwards James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import ComponentBase from 'core_courseformat/local/courseindex/section';

export default class Component extends ComponentBase {

    /**
     * Static method to create a component instance form the mustahce template.
     *
     * @param {string} target the DOM main element or its ID
     * @param {object} selectors optional css selector overrides
     * @return {Component}
     */
     static init(target, selectors) {
        return new this({
            element: document.getElementById(target),
            selectors,
        });
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
            let target = this.section;
            return target.indent <= origin.indent && origin.id != sectionzeroid
                && (target.id != sectionzeroid || this.course.draganddropsectionmoveafter);
        } else {
            return super.validateDropData(dropdata);
        }
    }


    /**
     * Display the component dropzone.
     *
     * @param {Object} dropdata the accepted drop data
     */
    showDropZone(dropdata) {
        if (dropdata.type == 'section') {
            const origin = this.reactive.get("section", dropdata.id);
            let target = this.section;
            while (target.indent > origin.indent) {
                target = this.reactive.get("section", this.course.sectionlist[target.number - 1]);
            }
            const moveDirection = this.course.draganddropsectionmoveafter ?
                (target.number != origin.number) : Math.sign(target.number - origin.number);
            const targetContentDom = this.element.querySelector(".courseindex-item-content");
            let targetShow = target;
            let targetShowBorder = moveDirection;
            if (moveDirection > 0 && targetContentDom.classList.contains("show")) {
                let targetChild = target;
                while (this.course.sectionlist.length > targetChild.number + 1
                && this.reactive.get("section", this.course.sectionlist[targetChild.number + 1]).indent > target.indent) {
                    targetChild = this.reactive.get("section", this.course.sectionlist[targetChild.number + 1]);
                    if (targetChild.indent <= origin.indent) {
                        targetShow = targetChild;
                        targetShowBorder = -1;
                        break;
                    }
                }
            }
            const targetShowDom = document.querySelector(
                ".courseindex-section[data-id='" + targetShow.id + "']");
            // The relative move of section depends on the section number.
            if (targetShowBorder > 0) {
                targetShowDom.classList.add(this.classes.DROPDOWN);
            } else if (targetShowBorder < 0) {
                targetShowDom.classList.add(this.classes.DROPUP);
            }
        } else {
            super.showDropZone(dropdata);
        }
    }

    /**
     * Hide the component dropzone.
     *
     * @param {Object} dropdata the accepted drop data
     */
    hideDropZone(dropdata) {
        if (dropdata.type == 'section') {
            const origin = this.reactive.get("section", dropdata.id);
            let target = this.section;
            while (target.indent > origin.indent) {
                target = this.reactive.get("section", this.course.sectionlist[target.number - 1]);
            }
            const moveDirection = this.course.draganddropsectionmoveafter ?
                (target.number != origin.number) : Math.sign(target.number - origin.number);
            const targetContentDom = this.element.querySelector(".courseindex-item-content");
            let targetShow = target;
            let targetShowBorder = moveDirection;
            if (moveDirection > 0 && targetContentDom.classList.contains("show")) {
                let targetChild = target;
                while (this.course.sectionlist.length > targetChild.number + 1
                && this.reactive.get("section", this.course.sectionlist[targetChild.number + 1]).indent > target.indent) {
                    targetChild = this.reactive.get("section", this.course.sectionlist[targetChild.number + 1]);
                    if (targetChild.indent <= origin.indent) {
                        targetShow = targetChild;
                        targetShowBorder = -1;
                        break;
                    }
                }
            }
            const targetShowDom = document.querySelector(
                ".courseindex-section[data-id='" + targetShow.id + "']");
            if (targetShowBorder > 0) {
                targetShowDom.classList.remove(this.classes.DROPDOWN);
            } else if (targetShowBorder < 0) {
                targetShowDom.classList.remove(this.classes.DROPUP);
            }
        } else {
            super.hideDropZone(dropdata);
        }
    }

    /**
     * Drop event handler.
     *
     * @param {Object} dropdata the accepted drop data
     * @param {Event} event the drop event
     */
    drop(dropdata, event) {
        // Call the move mutation.
        if (dropdata.type == 'section') {
            const origin = this.reactive.get("section", dropdata.id);
            let target = this.section;
            while (target.indent > origin.indent) {
                target = this.reactive.get("section", this.course.sectionlist[target.number - 1]);
            }
            const moveDirection = this.course.draganddropsectionmoveafter ?
                (target.number != origin.number) : Math.sign(target.number - origin.number);
            const targetContentDom = this.element.querySelector(".courseindex-item-content");
            let targetCall = target;
            if (moveDirection > 0 && !targetContentDom.classList.contains("show")) {
                let targetChild = target;
                while (this.course.sectionlist.length > targetChild.number + 1
                && this.reactive.get("section", this.course.sectionlist[targetChild.number + 1]).indent > target.indent) {
                    targetChild = this.reactive.get("section", this.course.sectionlist[targetChild.number + 1]);
                    if (targetChild.indent <= origin.indent) {
                        targetCall = targetChild;
                    }
                }
            }
            if (moveDirection != 0) {
                this.reactive.dispatch(this.course.draganddropsectionmoveafter ? 'sectionMoveAfter' : 'sectionMove',
                    [origin.id], targetCall.id);
            }
        } else {
            super.drop(dropdata, event);
        }
    }

}