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

import ajax from 'core/ajax';

/**
 * Default mutation manager
 *
 * @module     core_courseformat/local/courseeditor/mutations
 * @class     core_courseformat/local/courseeditor/mutations
 * @copyright  2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
export default class {

    // All course editor mutations for Moodle 4.0 will be located in this file.

    /**
     * Private method to call core_courseformat_update_course webservice.
     *
     * @method _callEditWebservice
     * @param {string} action
     * @param {number} courseId
     * @param {array} ids
     * @param {number} targetSectionId optional target section id (for moving actions)
     * @param {number} targetCmId optional target cm id (for moving actions)
     */
    async _callEditWebservice(action, courseId, ids, targetSectionId, targetCmId) {
        const args = {
            action,
            courseid: courseId,
            ids,
        };
        if (targetSectionId) {
            args.targetsectionid = targetSectionId;
        }
        if (targetCmId) {
            args.targetcmid = targetCmId;
        }
        let ajaxresult = await ajax.call([{
            methodname: 'core_courseformat_update_course',
            args,
        }])[0];
        return JSON.parse(ajaxresult);
    }

    /**
     * Execute a basic section state action.
     * @param {StateManager} stateManager the current state manager
     * @param {string} action the action name
     * @param {array} sectionIds the section ids
     * @param {number} targetSectionId optional target section id (for moving actions)
     * @param {number} targetCmId optional target cm id (for moving actions)
     */
    async _sectionBasicAction(stateManager, action, sectionIds, targetSectionId, targetCmId) {
        const course = stateManager.get('course');
        this.sectionLock(stateManager, sectionIds, true);
        const updates = await this._callEditWebservice(
            action,
            course.id,
            sectionIds,
            targetSectionId,
            targetCmId
        );
        stateManager.processUpdates(updates);
        this.sectionLock(stateManager, sectionIds, false);
    }

    /**
     * Execute a basic course module state action.
     * @param {StateManager} stateManager the current state manager
     * @param {string} action the action name
     * @param {array} cmIds the cm ids
     * @param {number} targetSectionId optional target section id (for moving actions)
     * @param {number} targetCmId optional target cm id (for moving actions)
     */
    async _cmBasicAction(stateManager, action, cmIds, targetSectionId, targetCmId) {
        const course = stateManager.get('course');
        this.cmLock(stateManager, cmIds, true);
        const updates = await this._callEditWebservice(
            action,
            course.id,
            cmIds,
            targetSectionId,
            targetCmId
        );
        stateManager.processUpdates(updates);
        this.cmLock(stateManager, cmIds, false);
    }

    /**
     * Mutation module initialize.
     *
     * The reactive instance will execute this method when addMutations or setMutation is invoked.
     *
     * @param {StateManager} stateManager the state manager
     */
    init(stateManager) {
        // Add a method to prepare the fields when some update is comming from the server.
        stateManager.addUpdateTypes({
            prepareFields: this._prepareFields,
        });
    }

    /**
     * Add default values to state elements.
     *
     * This method is called every time a webservice returns a update state message.
     *
     * @param {Object} stateManager the state manager
     * @param {String} updateName the state element to update
     * @param {Object} fields the new data
     * @returns {Object} final fields data
     */
    _prepareFields(stateManager, updateName, fields) {
        // Any update should unlock the element.
        fields.locked = false;
        return fields;
    }

    /**
     * Hides sections.
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids
     */
    async sectionHide(stateManager, sectionIds) {
        await this._sectionBasicAction(stateManager, 'section_hide', sectionIds);
    }

    /**
     * Show sections.
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids
     */
    async sectionShow(stateManager, sectionIds) {
        await this._sectionBasicAction(stateManager, 'section_show', sectionIds);
    }

    /**
     * Show cms.
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of cm ids
     */
    async cmShow(stateManager, cmIds) {
        await this._cmBasicAction(stateManager, 'cm_show', cmIds);
    }

    /**
     * Hide cms.
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of cm ids
     */
    async cmHide(stateManager, cmIds) {
        await this._cmBasicAction(stateManager, 'cm_hide', cmIds);
    }

    /**
     * Stealth cms.
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of cm ids
     */
    async cmStealth(stateManager, cmIds) {
        await this._cmBasicAction(stateManager, 'cm_stealth', cmIds);
    }

    /**
     * Move course modules to specific course location.
     *
     * Note that one of targetSectionId or targetCmId should be provided in order to identify the
     * new location:
     *  - targetCmId: the activities will be located avobe the target cm. The targetSectionId
     *                value will be ignored in this case.
     *  - targetSectionId: the activities will be appended to the section. In this case
     *                     targetSectionId should not be present.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmids the list of cm ids to move
     * @param {number} targetSectionId the target section id
     * @param {number} targetCmId the target course module id
     */
    async cmMove(stateManager, cmids, targetSectionId, targetCmId) {
        if (!targetSectionId && !targetCmId) {
            throw new Error(`Mutation cmMove requires targetSectionId or targetCmId`);
        }
        const course = stateManager.get('course');
        this.cmLock(stateManager, cmids, true);
        const updates = await this._callEditWebservice('cm_move', course.id, cmids, targetSectionId, targetCmId);
        stateManager.processUpdates(updates);
        this.cmLock(stateManager, cmids, false);
    }

    /**
     * Move course modules to specific course location.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids to move
     * @param {number} targetSectionId the target section id
     */
    async sectionMove(stateManager, sectionIds, targetSectionId) {
        if (!targetSectionId) {
            throw new Error(`Mutation sectionMove requires targetSectionId`);
        }
        const course = stateManager.get('course');
        this.sectionLock(stateManager, sectionIds, true);
        const updates = await this._callEditWebservice('section_move', course.id, sectionIds, targetSectionId);
        stateManager.processUpdates(updates);
        this.sectionLock(stateManager, sectionIds, false);
    }

    /**
     * Add a new section to a specific course location.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {number} targetSectionId optional the target section id
     */
    async addSection(stateManager, targetSectionId) {
        if (!targetSectionId) {
            targetSectionId = 0;
        }
        const course = stateManager.get('course');
        const updates = await this._callEditWebservice('section_add', course.id, [], targetSectionId);
        stateManager.processUpdates(updates);
    }

    /**
     * Delete sections.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of course modules ids
     */
    async sectionDelete(stateManager, sectionIds) {
        const course = stateManager.get('course');
        const updates = await this._callEditWebservice('section_delete', course.id, sectionIds);
        stateManager.processUpdates(updates);
    }

    /**
     * Mark or unmark course modules as dragging.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of course modules ids
     * @param {bool} dragValue the new dragging value
     */
    cmDrag(stateManager, cmIds, dragValue) {
        this.setPageItem(stateManager);
        this._setElementsValue(stateManager, 'cm', cmIds, 'dragging', dragValue);
    }

    /**
     * Mark or unmark course sections as dragging.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids
     * @param {bool} dragValue the new dragging value
     */
    sectionDrag(stateManager, sectionIds, dragValue) {
        this.setPageItem(stateManager);
        this._setElementsValue(stateManager, 'section', sectionIds, 'dragging', dragValue);
    }

    /**
     * Mark or unmark course modules as complete.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of course modules ids
     * @param {bool} complete the new completion value
     */
    cmCompletion(stateManager, cmIds, complete) {
        const newValue = (complete) ? 1 : 0;
        this._setElementsValue(stateManager, 'cm', cmIds, 'completionstate', newValue);
    }

    /**
     * Move cms to the right: indent = 1.
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of cm ids
     */
    async cmMoveRight(stateManager, cmIds) {
        await this._cmBasicAction(stateManager, 'cm_moveright', cmIds);
    }

    /**
     * Move cms to the left: indent = 0.
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of cm ids
     */
    async cmMoveLeft(stateManager, cmIds) {
        await this._cmBasicAction(stateManager, 'cm_moveleft', cmIds);
    }

    /**
     * Lock or unlock course modules.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} cmIds the list of course modules ids
     * @param {bool} lockValue the new locked value
     */
    cmLock(stateManager, cmIds, lockValue) {
        this._setElementsValue(stateManager, 'cm', cmIds, 'locked', lockValue);
    }

    /**
     * Lock or unlock course sections.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the list of section ids
     * @param {bool} lockValue the new locked value
     */
    sectionLock(stateManager, sectionIds, lockValue) {
        this._setElementsValue(stateManager, 'section', sectionIds, 'locked', lockValue);
    }

    _setElementsValue(stateManager, name, ids, fieldName, newValue) {
        stateManager.setReadOnly(false);
        ids.forEach((id) => {
            const element = stateManager.get(name, id);
            if (element) {
                element[fieldName] = newValue;
            }
        });
        stateManager.setReadOnly(true);
    }

    /**
     * Set the page current item.
     *
     * Only one element of the course state can be the page item at a time.
     *
     * There are several actions that can alter the page current item. For example, when the user is in an activity
     * page, the page item is always the activity one. However, in a course page, when the user scrolls to an element,
     * this element get the page item.
     *
     * If the page item is static means that it is not meant to change. This is important because
     * static page items has some special logic. For example, if a cm is the static page item
     * and it is inside a collapsed section, the course index will expand the section to make it visible.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {String|undefined} type the element type (section or cm). Undefined will remove the current page item.
     * @param {Number|undefined} id the element id
     * @param {boolean|undefined} isStatic if the page item is static
     */
    setPageItem(stateManager, type, id, isStatic) {
        let newPageItem;
        if (type !== undefined) {
            newPageItem = stateManager.get(type, id);
            if (!newPageItem) {
                return;
            }
        }
        stateManager.setReadOnly(false);
        // Remove the current page item.
        const course = stateManager.get('course');
        course.pageItem = null;
        // Save the new page item.
        if (newPageItem) {
            course.pageItem = {
                id,
                type,
                sectionId: (type == 'section') ? newPageItem.id : newPageItem.sectionid,
                isStatic,
            };
        }
        stateManager.setReadOnly(true);
    }

    /**
     * Unlock all course elements.
     *
     * @param {StateManager} stateManager the current state manager
     */
    unlockAll(stateManager) {
        const state = stateManager.state;
        stateManager.setReadOnly(false);
        state.section.forEach((section) => {
            section.locked = false;
        });
        state.cm.forEach((cm) => {
            cm.locked = false;
        });
        stateManager.setReadOnly(true);
    }

    /**
     * Update the course index collapsed attribute of some sections.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the affected section ids
     * @param {boolean} collapsed the new collapsed value
     */
    async sectionIndexCollapsed(stateManager, sectionIds, collapsed) {
        const collapsedIds = this._updateStateSectionPreference(stateManager, 'indexcollapsed', sectionIds, collapsed);
        if (!collapsedIds) {
            return;
        }
        const course = stateManager.get('course');
        await this._callEditWebservice('section_index_collapsed', course.id, collapsedIds);
    }

    /**
     * Update the course content collapsed attribute of some sections.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {array} sectionIds the affected section ids
     * @param {boolean} collapsed the new collapsed value
     */
    async sectionContentCollapsed(stateManager, sectionIds, collapsed) {
        const collapsedIds = this._updateStateSectionPreference(stateManager, 'contentcollapsed', sectionIds, collapsed);
        if (!collapsedIds) {
            return;
        }
        const course = stateManager.get('course');
        await this._callEditWebservice('section_content_collapsed', course.id, collapsedIds);
    }

    /**
     * Private batch update for a section preference attribute.
     *
     * @param {StateManager} stateManager the current state manager
     * @param {string} preferenceName the preference name
     * @param {array} sectionIds the affected section ids
     * @param {boolean} preferenceValue the new preferenceValue value
     * @return {Number[]|null} sections ids with the preference value true or null if no update is required
     */
    _updateStateSectionPreference(stateManager, preferenceName, sectionIds, preferenceValue) {
        stateManager.setReadOnly(false);
        const affectedSections = new Set();
        // Check if we need to update preferences.
        sectionIds.forEach(sectionId => {
            const section = stateManager.get('section', sectionId);
            if (section === undefined) {
                return null;
            }
            const newValue = preferenceValue ?? section[preferenceName];
            if (section[preferenceName] != newValue) {
                section[preferenceName] = newValue;
                affectedSections.add(section.id);
            }
        });
        stateManager.setReadOnly(true);
        if (affectedSections.size == 0) {
            return null;
        }
        // Get all collapsed section ids.
        const collapsedSectionIds = [];
        const state = stateManager.state;
        state.section.forEach(section => {
            if (section[preferenceName]) {
                collapsedSectionIds.push(section.id);
            }
        });
        return collapsedSectionIds;
    }

    /**
     * Get updated state data related to some cm ids.
     *
     * @method cmState
     * @param {StateManager} stateManager the current state
     * @param {array} cmids the list of cm ids to update
     */
    async cmState(stateManager, cmids) {
        this.cmLock(stateManager, cmids, true);
        const course = stateManager.get('course');
        const updates = await this._callEditWebservice('cm_state', course.id, cmids);
        stateManager.processUpdates(updates);
        this.cmLock(stateManager, cmids, false);
    }

    /**
     * Get updated state data related to some section ids.
     *
     * @method sectionState
     * @param {StateManager} stateManager the current state
     * @param {array} sectionIds the list of section ids to update
     */
    async sectionState(stateManager, sectionIds) {
        this.sectionLock(stateManager, sectionIds, true);
        const course = stateManager.get('course');
        const updates = await this._callEditWebservice('section_state', course.id, sectionIds);
        stateManager.processUpdates(updates);
        this.sectionLock(stateManager, sectionIds, false);
    }

    /**
     * Get the full updated state data of the course.
     *
     * @param {StateManager} stateManager the current state
     */
    async courseState(stateManager) {
        const course = stateManager.get('course');
        const updates = await this._callEditWebservice('course_state', course.id);
        stateManager.processUpdates(updates);
    }

}
