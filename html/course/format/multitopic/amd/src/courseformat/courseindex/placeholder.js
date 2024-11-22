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
 * Course index placeholder replacer.
 *
 * @module     format_multitopic/courseformat/courseindex/placeholder
 * @class      format_multitopic/courseformat/courseindex/placeholder
 * @copyright  2022 James Calder and Otago Polytechnic
 * @copyright  2022 Jeremy FitzPatrick and Te Wānanga o Aotearoa
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import BaseComponent from 'core_courseformat/local/courseindex/placeholder';
import Templates from 'core/templates';
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
     * Load the course index template.
     *
     * @param {Object} state the initial state
     */
    async loadTemplateContent(state) {
        // Collect section information from the state.
        const exporter = this.reactive.getExporter();
        const data = exporter.course(state);
        data.sectionsnested = this._nestSections(data.sections);
        try {
            // To render an HTML into our component we just use the regular Templates module.
            const {html, js} = await Templates.renderForPromise(
                'format_multitopic/courseformat/courseindex/courseindex', // CHANGED.
                data,
            );
            Templates.replaceNode(this.element, html, js);
            this.pendingContent.resolve();

            // Save the rendered template into the session cache.
            this.reactive.setStorageValue(`courseIndex`, {html, js});
        } catch (error) {
            this.pendingContent.resolve(error);
            throw error;
        }
    }

    /**
     * Nest sections.
     *
     * @param {Array} sections
     * @return {Array}
     */
    _nestSections(sections) {
        let topSections = [];
        let parentSection = {};
        let lastParent = {};

        // Let's re-organise our sections.
        for (let i = 0; i < sections.length; i++) {
            let section = sections[i];
            section.subsections = [];
            if (section.indent === 0) {
                parentSection = section;
                lastParent = section;
                topSections.push(section);
            } else if (section.indent === 1) {
                lastParent = section;
                parentSection.subsections.push(section);
            } else if (section.indent === 2) {
                lastParent.subsections.push(section);
            }
        }
        return topSections;
    }
}
