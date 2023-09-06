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
 * Module to export parts of the state and transform them to be used in templates
 * and as draggable data.
 *
 * @module     core_courseformat/local/courseeditor/exporter
 * @class      core_courseformat/local/courseeditor/exporter
 * @copyright  2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
export default class {

    /**
     * Class constructor.
     *
     * @param {CourseEditor} reactive the course editor object
     */
    constructor(reactive) {
        this.reactive = reactive;

        // Completions states are defined in lib/completionlib.php. There are 4 different completion
        // state values, however, the course index uses the same state for complete and complete_pass.
        // This is the reason why completed appears twice in the array.
        this.COMPLETIONS = ['incomplete', 'complete', 'complete', 'fail'];
    }

    /**
     * Generate the course export data from the state.
     *
     * @param {Object} state the current state.
     * @returns {Object}
     */
    course(state) {
        // Collect section information from the state.
        const data = {
            sections: [],
            editmode: this.reactive.isEditing,
            highlighted: state.course.highlighted ?? '',
        };
        const sectionlist = state.course.sectionlist ?? [];
        sectionlist.forEach(sectionid => {
            const sectioninfo = state.section.get(sectionid) ?? {};
            const section = this.section(state, sectioninfo);
            data.sections.push(section);
        });
        data.hassections = (data.sections.length != 0);

        return data;
    }

    /**
     * Generate a section export data from the state.
     *
     * @param {Object} state the current state.
     * @param {Object} sectioninfo the section state data.
     * @returns {Object}
     */
    section(state, sectioninfo) {
        const section = {
            ...sectioninfo,
            highlighted: state.course.highlighted ?? '',
            cms: [],
        };
        const cmlist = sectioninfo.cmlist ?? [];
        cmlist.forEach(cmid => {
            const cminfo = state.cm.get(cmid);
            const cm = this.cm(state, cminfo);
            section.cms.push(cm);
        });
        section.hascms = (section.cms.length != 0);

        return section;
    }

    /**
     * Generate a cm export data from the state.
     *
     * @param {Object} state the current state.
     * @param {Object} cminfo the course module state data.
     * @returns {Object}
     */
    cm(state, cminfo) {
        const cm = {
            ...cminfo,
            isactive: false,
        };
        return cm;
    }

    /**
     * Generate a dragable cm data structure.
     *
     * This method is used by any draggable course module element to generate drop data
     * for its reactive/dragdrop instance.
     *
     * @param {*} state the state object
     * @param {*} cmid the cours emodule id
     * @returns {Object|null}
     */
    cmDraggableData(state, cmid) {
        const cminfo = state.cm.get(cmid);
        if (!cminfo) {
            return null;
        }

        // Drop an activity over the next activity is the same as doing anything.
        let nextcmid;
        const section = state.section.get(cminfo.sectionid);
        const currentindex = section?.cmlist.indexOf(cminfo.id);
        if (currentindex !== undefined) {
            nextcmid = section?.cmlist[currentindex + 1];
        }

        return {
            type: 'cm',
            id: cminfo.id,
            name: cminfo.name,
            sectionid: cminfo.sectionid,
            nextcmid,
        };
    }

    /**
     * Generate a dragable cm data structure.
     *
     * This method is used by any draggable section element to generate drop data
     * for its reactive/dragdrop instance.
     *
     * @param {*} state the state object
     * @param {*} sectionid the cours section id
     * @returns {Object|null}
     */
    sectionDraggableData(state, sectionid) {
        const sectioninfo = state.section.get(sectionid);
        if (!sectioninfo) {
            return null;
        }
        return {
            type: 'section',
            id: sectioninfo.id,
            name: sectioninfo.name,
            number: sectioninfo.number,
        };
    }

    /**
     * Generate a compoetion export data from the cm element.
     *
     * @param {Object} state the current state.
     * @param {Object} cminfo the course module state data.
     * @returns {Object}
     */
    cmCompletion(state, cminfo) {
        const data = {
            statename: '',
            state: 'NaN',
        };
        if (cminfo.completionstate !== undefined) {
            data.state = cminfo.completionstate;
            data.hasstate = true;
            const statename = this.COMPLETIONS[cminfo.completionstate] ?? 'NaN';
            data[`is${statename}`] = true;
        }
        return data;
    }

    /**
     * Return a sorted list of all sections and cms items in the state.
     *
     * @param {Object} state the current state.
     * @returns {Array} all sections and cms items in the state.
     */
    allItemsArray(state) {
        const items = [];
        const sectionlist = state.course.sectionlist ?? [];
        // Add sections.
        sectionlist.forEach(sectionid => {
            const sectioninfo = state.section.get(sectionid);
            items.push({type: 'section', id: sectioninfo.id, url: sectioninfo.sectionurl});
            // Add cms.
            const cmlist = sectioninfo.cmlist ?? [];
            cmlist.forEach(cmid => {
                const cminfo = state.cm.get(cmid);
                items.push({type: 'cm', id: cminfo.id, url: cminfo.url});
            });
        });
        return items;
    }
}
