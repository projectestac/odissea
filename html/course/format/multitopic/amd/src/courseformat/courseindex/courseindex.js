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
 * Course index main component.
 *
 * @module     format_multitopic/courseformat/courseindex/courseindex
 * @class      format_multitopic/courseformat/courseindex/courseindex
 * @copyright  2022 onwards James Calder and Otago Polytechnic
 * @copyright  2022 Jeremy FitzPatrick and Te Wānanga o Aotearoa
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import BaseComponent from 'core_courseformat/local/courseindex/courseindex';
import {getCurrentCourseEditor} from 'core_courseformat/courseeditor';

export default class Component extends BaseComponent {

    /**
     * Static method to create a component instance form the mustache template.
     *
     * @param {element|string} target the DOM main element or its ID
     * @param {object} selectors optional css selector overrides
     * @return {Component}
     */
     static init(target, selectors) {
        return new this({
            element: document.getElementById(target),
            reactive: getCurrentCourseEditor(),
            selectors,
        });
    }

    /**
     * Refresh the section list.
     *
     * @param {object} param
     * @param {Object} param.element (Moodle <4.4)
     * @param {Object} param.state (Moodle >=4.4)
     */
    _refreshCourseSectionlist(param) {
        const element = param.state ? param.state.course : param.element;

        let containers = [];
        let containerlevels = [];
        const newcontainer = {indent: -1, container: this.element, order: []};
        containers.push(newcontainer);
        containerlevels.push(newcontainer);

        for (let sectionid of element.sectionlist) {
            const section = this.reactive.get("section", sectionid);
            if (section.component) {
                continue;
            }
            while (containerlevels[containerlevels.length - 1].indent >= section.indent) {
                containerlevels.pop();
            }
            containerlevels[containerlevels.length - 1].order.push(section.id);
            const newcontainer = {
                indent: section.indent,
                container: this.sections[section.id].querySelector(":scope > .courseindex-item-content > .subsections"),
                order: []
            };
            containers.push(newcontainer);
            containerlevels.push(newcontainer);
        }
        while (containerlevels.length > 0) {
            containerlevels.pop();
        }

        for (let container of containers) {
            this._fixOrder(container.container, container.order, this.sections);
        }

        // Update indentation and URLs.
        for (let sectionid of element.sectionlist) {
            const section = this.reactive.get("section", sectionid);
            const sectionDom = this.sections[sectionid];
            const linkDom = sectionDom.querySelector(":scope > .courseindex-item a.courseindex-link");
            if (linkDom) {
                const link = section.sectionurl.replace("&amp;", "&");
                if (linkDom.href != link) {
                    linkDom.href = link;
                }
            }
            if (section.component) {
                continue;
            }
            if (sectionDom.dataset?.indent != section.indent) {
                const sectiontitledom = sectionDom.querySelector(":scope > .courseindex-item");
                if (sectiontitledom) {
                    sectiontitledom.style = "padding-left: " + section.indent + "em;";
                }
                const sectioncontentdom = sectionDom.querySelector(
                    ":scope > .courseindex-item-content > .courseindex-sectioncontent"
                );
                if (sectioncontentdom) {
                    sectioncontentdom.style = "padding-left: " + section.indent + "em;";
                }
                sectionDom.dataset.indent = section.indent;
            }
        }
    }

    /**
     * Create a new section instance.
     *
     * @param {Object} details the update details.
     * @param {Object} details.state the state data.
     * @param {Object} details.element the element data.
     */
    async _createSection({state, element}) {
        if (element.component) {
            super._createSection({state, element});
            return;
        }

        // Create a fake node while the component is loading.
        const fakeelement = document.createElement('div');
        fakeelement.dataset.id = element.id;
        fakeelement.dataset.for = "section";
        fakeelement.classList.add('bg-pulse-grey', 'w-100');
        fakeelement.innerHTML = '&nbsp;';
        const fakecontent = document.createElement('div');
        fakeelement.insertAdjacentElement("beforeend", fakecontent);
        fakecontent.setAttribute("class", "courseindex-item-content");
        const fakesubsections = document.createElement('div');
        fakecontent.insertAdjacentElement("beforeend", fakesubsections);
        fakesubsections.setAttribute("class", "subsections");
        this.sections[element.id] = fakeelement;
        // Place the fake node on the correct position.
        this._refreshCourseSectionlist({
            state,
            element: state.course,
        });
        // Collect render data.
        const exporter = this.reactive.getExporter();
        const data = exporter.section(state, element);
        // Create the new content.
        const newcomponent = await this.renderComponent(fakeelement, 'format_multitopic/courseformat/courseindex/section', data);
        // CHANGED LINE ABOVE.
        // Replace the fake node with the real content.
        const newelement = newcomponent.getElement();
        this.sections[element.id] = newelement;
        fakeelement.parentNode.replaceChild(newelement, fakeelement);
        if (fakesubsections.children.length > 0) {
            newelement.querySelector(".courseindex-item-content .subsections").replaceWith(fakesubsections);
        }
    }

}