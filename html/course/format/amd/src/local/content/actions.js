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
 * Course state actions dispatcher.
 *
 * This module captures all data-dispatch links in the course content and dispatch the proper
 * state mutation, including any confirmation and modal required.
 *
 * @module     core_courseformat/local/content/actions
 * @class      core_courseformat/local/content/actions
 * @copyright  2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {BaseComponent} from 'core/reactive';
import Modal from 'core/modal';
import ModalSaveCancel from 'core/modal_save_cancel';
import ModalDeleteCancel from 'core/modal_delete_cancel';
import ModalEvents from 'core/modal_events';
import Templates from 'core/templates';
import {prefetchStrings} from 'core/prefetch';
import {getString} from 'core/str';
import {getFirst} from 'core/normalise';
import {toggleBulkSelectionAction} from 'core_courseformat/local/content/actions/bulkselection';
import * as CourseEvents from 'core_course/events';
import Pending from 'core/pending';
import ContentTree from 'core_courseformat/local/courseeditor/contenttree';
// The jQuery module is only used for interacting with Boostrap 4. It can we removed when MDL-71979 is integrated.
import jQuery from 'jquery';

// Load global strings.
prefetchStrings('core', ['movecoursesection', 'movecoursemodule', 'confirm', 'delete']);

// Mutations are dispatched by the course content actions.
// Formats can use this module addActions static method to add custom actions.
// Direct mutations can be simple strings (mutation) name or functions.
const directMutations = {
    sectionHide: 'sectionHide',
    sectionShow: 'sectionShow',
    cmHide: 'cmHide',
    cmShow: 'cmShow',
    cmStealth: 'cmStealth',
    cmMoveRight: 'cmMoveRight',
    cmMoveLeft: 'cmMoveLeft',
    cmNoGroups: 'cmNoGroups',
    cmSeparateGroups: 'cmSeparateGroups',
    cmVisibleGroups: 'cmVisibleGroups',
};

export default class extends BaseComponent {

    /**
     * Constructor hook.
     */
    create() {
        // Optional component name for debugging.
        this.name = 'content_actions';
        // Default query selectors.
        this.selectors = {
            ACTIONLINK: `[data-action]`,
            // Move modal selectors.
            SECTIONLINK: `[data-for='section']`,
            CMLINK: `[data-for='cm']`,
            SECTIONNODE: `[data-for='sectionnode']`,
            MODALTOGGLER: `[data-toggle='collapse']`,
            ADDSECTION: `[data-action='addSection']`,
            CONTENTTREE: `#destination-selector`,
            ACTIONMENU: `.action-menu`,
            ACTIONMENUTOGGLER: `[data-toggle="dropdown"]`,
            // Availability modal selectors.
            OPTIONSRADIO: `[type='radio']`,
        };
        // Component css classes.
        this.classes = {
            DISABLED: `text-body`,
            ITALIC: `font-italic`,
        };
    }

    /**
     * Add extra actions to the module.
     *
     * @param {array} actions array of methods to execute
     */
    static addActions(actions) {
        for (const [action, mutationReference] of Object.entries(actions)) {
            if (typeof mutationReference !== 'function' && typeof mutationReference !== 'string') {
                throw new Error(`${action} action must be a mutation name or a function`);
            }
            directMutations[action] = mutationReference;
        }
    }

    /**
     * Initial state ready method.
     *
     * @param {Object} state the state data.
     *
     */
    stateReady(state) {
        // Delegate dispatch clicks.
        this.addEventListener(
            this.element,
            'click',
            this._dispatchClick
        );
        // Check section limit.
        this._checkSectionlist({state});
        // Add an Event listener to recalculate limits it if a section HTML is altered.
        this.addEventListener(
            this.element,
            CourseEvents.sectionRefreshed,
            () => this._checkSectionlist({state})
        );
    }

    /**
     * Return the component watchers.
     *
     * @returns {Array} of watchers
     */
    getWatchers() {
        return [
            // Check section limit.
            {watch: `course.sectionlist:updated`, handler: this._checkSectionlist},
        ];
    }

    _dispatchClick(event) {
        const target = event.target.closest(this.selectors.ACTIONLINK);
        if (!target) {
            return;
        }
        if (target.classList.contains(this.classes.DISABLED)) {
            event.preventDefault();
            return;
        }

        // Invoke proper method.
        const actionName = target.dataset.action;
        const methodName = this._actionMethodName(actionName);

        if (this[methodName] !== undefined) {
            this[methodName](target, event);
            return;
        }

        // Check direct mutations or mutations handlers.
        if (directMutations[actionName] !== undefined) {
            if (typeof directMutations[actionName] === 'function') {
                directMutations[actionName](target, event);
                return;
            }
            this._requestMutationAction(target, event, directMutations[actionName]);
            return;
        }
    }

    _actionMethodName(name) {
        const requestName = name.charAt(0).toUpperCase() + name.slice(1);
        return `_request${requestName}`;
    }

    /**
     * Check the section list and disable some options if needed.
     *
     * @param {Object} detail the update details.
     * @param {Object} detail.state the state object.
     */
    _checkSectionlist({state}) {
        // Disable "add section" actions if the course max sections has been exceeded.
        this._setAddSectionLocked(state.course.sectionlist.length > state.course.maxsections);
    }

    /**
     * Return the ids represented by this element.
     *
     * Depending on the dataset attributes the action could represent a single id
     * or a bulk actions with all the current selected ids.
     *
     * @param {HTMLElement} target
     * @returns {Number[]} array of Ids
     */
    _getTargetIds(target) {
        let ids = [];
        if (target?.dataset?.id) {
            ids.push(target.dataset.id);
        }
        const bulkType = target?.dataset?.bulk;
        if (!bulkType) {
            return ids;
        }
        const bulk = this.reactive.get('bulk');
        if (bulk.enabled && bulk.selectedType === bulkType) {
            ids = [...ids, ...bulk.selection];
        }
        return ids;
    }

    /**
     * Handle a move section request.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestMoveSection(target, event) {
        // Check we have an id.
        const sectionIds = this._getTargetIds(target);
        if (sectionIds.length == 0) {
            return;
        }

        event.preventDefault();

        const pendingModalReady = new Pending(`courseformat/actions:prepareMoveSectionModal`);

        // The section edit menu to refocus on end.
        const editTools = this._getClosestActionMenuToogler(target);

        // Collect section information from the state.
        const exporter = this.reactive.getExporter();
        const data = exporter.course(this.reactive.state);
        let titleText = null;

        // Add the target section id and title.
        let sectionInfo = null;
        if (sectionIds.length == 1) {
            sectionInfo = this.reactive.get('section', sectionIds[0]);
            data.sectionid = sectionInfo.id;
            data.sectiontitle = sectionInfo.title;
            data.information = await this.reactive.getFormatString('sectionmove_info', data.sectiontitle);
            titleText = this.reactive.getFormatString('sectionmove_title');
        } else {
            data.information = await this.reactive.getFormatString('sectionsmove_info', sectionIds.length);
            titleText = this.reactive.getFormatString('sectionsmove_title');
        }


        // Create the modal.
        // Build the modal parameters from the event data.
        const modal = await this._modalBodyRenderedPromise(Modal, {
            title: titleText,
            body: Templates.render('core_courseformat/local/content/movesection', data),
        });

        const modalBody = getFirst(modal.getBody());

        // Disable current selected section ids.
        sectionIds.forEach(sectionId => {
            const currentElement = modalBody.querySelector(`${this.selectors.SECTIONLINK}[data-id='${sectionId}']`);
            this._disableLink(currentElement);
        });

        // Setup keyboard navigation.
        new ContentTree(
            modalBody.querySelector(this.selectors.CONTENTTREE),
            {
                SECTION: this.selectors.SECTIONNODE,
                TOGGLER: this.selectors.MODALTOGGLER,
                COLLAPSE: this.selectors.MODALTOGGLER,
            },
            true
        );

        // Capture click.
        modalBody.addEventListener('click', (event) => {
            const target = event.target;
            if (!target.matches('a') || target.dataset.for != 'section' || target.dataset.id === undefined) {
                return;
            }
            if (target.getAttribute('aria-disabled')) {
                return;
            }
            event.preventDefault();
            this.reactive.dispatch('sectionMoveAfter', sectionIds, target.dataset.id);
            this._destroyModal(modal, editTools);
        });

        pendingModalReady.resolve();
    }

    /**
     * Handle a move cm request.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestMoveCm(target, event) {
        // Check we have an id.
        const cmIds = this._getTargetIds(target);
        if (cmIds.length == 0) {
            return;
        }

        event.preventDefault();

        const pendingModalReady = new Pending(`courseformat/actions:prepareMoveCmModal`);

        // The section edit menu to refocus on end.
        const editTools = this._getClosestActionMenuToogler(target);

        // Collect information from the state.
        const exporter = this.reactive.getExporter();
        const data = exporter.course(this.reactive.state);

        let titleText = null;
        if (cmIds.length == 1) {
            const cmInfo = this.reactive.get('cm', cmIds[0]);
            data.cmid = cmInfo.id;
            data.cmname = cmInfo.name;
            data.information = await this.reactive.getFormatString('cmmove_info', data.cmname);
            titleText = this.reactive.getFormatString('cmmove_title');
        } else {
            data.information = await this.reactive.getFormatString('cmsmove_info', cmIds.length);
            titleText = this.reactive.getFormatString('cmsmove_title');
        }

        // Create the modal.
        // Build the modal parameters from the event data.
        const modal = await this._modalBodyRenderedPromise(Modal, {
            title: titleText,
            body: Templates.render('core_courseformat/local/content/movecm', data),
        });

        const modalBody = getFirst(modal.getBody());

        // Disable current selected section ids.
        cmIds.forEach(cmId => {
            const currentElement = modalBody.querySelector(`${this.selectors.CMLINK}[data-id='${cmId}']`);
            this._disableLink(currentElement);
        });

        // Setup keyboard navigation.
        new ContentTree(
            modalBody.querySelector(this.selectors.CONTENTTREE),
            {
                SECTION: this.selectors.SECTIONNODE,
                TOGGLER: this.selectors.MODALTOGGLER,
                COLLAPSE: this.selectors.MODALTOGGLER,
                ENTER: this.selectors.SECTIONLINK,
            }
        );

        // Open the cm section node if possible (Bootstrap 4 uses jQuery to interact with collapsibles).
        // All jQuery in this code can be replaced when MDL-71979 is integrated.
        cmIds.forEach(cmId => {
            const currentElement = modalBody.querySelector(`${this.selectors.CMLINK}[data-id='${cmId}']`);
            const sectionnode = currentElement.closest(this.selectors.SECTIONNODE);
            const toggler = jQuery(sectionnode).find(this.selectors.MODALTOGGLER);
            let collapsibleId = toggler.data('target') ?? toggler.attr('href');
            if (collapsibleId) {
                // We cannot be sure we have # in the id element name.
                collapsibleId = collapsibleId.replace('#', '');
                const expandNode = modalBody.querySelector(`#${collapsibleId}`);
                jQuery(expandNode).collapse('show');
            }
        });

        modalBody.addEventListener('click', (event) => {
            const target = event.target;
            if (!target.matches('a') || target.dataset.for === undefined || target.dataset.id === undefined) {
                return;
            }
            if (target.getAttribute('aria-disabled')) {
                return;
            }
            event.preventDefault();

            let targetSectionId;
            let targetCmId;
            if (target.dataset.for == 'cm') {
                const dropData = exporter.cmDraggableData(this.reactive.state, target.dataset.id);
                targetSectionId = dropData.sectionid;
                targetCmId = dropData.nextcmid;
            } else {
                const section = this.reactive.get('section', target.dataset.id);
                targetSectionId = target.dataset.id;
                targetCmId = section?.cmlist[0];
            }
            this.reactive.dispatch('cmMove', cmIds, targetSectionId, targetCmId);
            this._destroyModal(modal, editTools);
        });

        pendingModalReady.resolve();
    }

    /**
     * Handle a create section request.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestAddSection(target, event) {
        event.preventDefault();
        this.reactive.dispatch('addSection', target.dataset.id ?? 0);
    }

    /**
     * Handle a delete section request.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestDeleteSection(target, event) {
        const sectionIds = this._getTargetIds(target);
        if (sectionIds.length == 0) {
            return;
        }

        event.preventDefault();

        // We don't need confirmation to delete empty sections.
        let needsConfirmation = sectionIds.some(sectionId => {
            const sectionInfo = this.reactive.get('section', sectionId);
            const cmList = sectionInfo.cmlist ?? [];
            return (cmList.length || sectionInfo.hassummary || sectionInfo.rawtitle);
        });
        if (!needsConfirmation) {
            this.reactive.dispatch('sectionDelete', sectionIds);
            return;
        }

        let bodyText = null;
        let titleText = null;
        if (sectionIds.length == 1) {
            titleText = this.reactive.getFormatString('sectiondelete_title');
            const sectionInfo = this.reactive.get('section', sectionIds[0]);
            bodyText = this.reactive.getFormatString('sectiondelete_info', {name: sectionInfo.title});
        } else {
            titleText = this.reactive.getFormatString('sectionsdelete_title');
            bodyText = this.reactive.getFormatString('sectionsdelete_info', {count: sectionIds.length});
        }

        const modal = await this._modalBodyRenderedPromise(ModalDeleteCancel, {
            title: titleText,
            body: bodyText,
        });

        modal.getRoot().on(
            ModalEvents.delete,
            e => {
                // Stop the default save button behaviour which is to close the modal.
                e.preventDefault();
                modal.destroy();
                this.reactive.dispatch('sectionDelete', sectionIds);
            }
        );
    }

    /**
     * Handle a toggle cm selection.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestToggleSelectionCm(target, event) {
        toggleBulkSelectionAction(this.reactive, target, event, 'cm');
    }

    /**
     * Handle a toggle section selection.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestToggleSelectionSection(target, event) {
        toggleBulkSelectionAction(this.reactive, target, event, 'section');
    }

    /**
     * Basic mutation action helper.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     * @param {string} mutationName the mutation name
     */
    async _requestMutationAction(target, event, mutationName) {
        if (!target.dataset.id && target.dataset.for !== 'bulkaction') {
            return;
        }
        event.preventDefault();
        if (target.dataset.for === 'bulkaction') {
            // If the mutation is a bulk action we use the current selection.
            this.reactive.dispatch(mutationName, this.reactive.get('bulk').selection);
        } else {
            this.reactive.dispatch(mutationName, [target.dataset.id]);
        }
    }

    /**
     * Handle a course module duplicate request.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestCmDuplicate(target, event) {
        const cmIds = this._getTargetIds(target);
        if (cmIds.length == 0) {
            return;
        }
        const sectionId = target.dataset.sectionid ?? null;
        event.preventDefault();
        this.reactive.dispatch('cmDuplicate', cmIds, sectionId);
    }

    /**
     * Handle a delete cm request.
     *
     * @param {Element} target the dispatch action element
     * @param {Event} event the triggered event
     */
    async _requestCmDelete(target, event) {
        const cmIds = this._getTargetIds(target);
        if (cmIds.length == 0) {
            return;
        }

        event.preventDefault();

        let bodyText = null;
        let titleText = null;
        if (cmIds.length == 1) {
            const cmInfo = this.reactive.get('cm', cmIds[0]);
            titleText = getString('cmdelete_title', 'core_courseformat');
            bodyText = getString(
                'cmdelete_info',
                'core_courseformat',
                {
                    type: cmInfo.modname,
                    name: cmInfo.name,
                }
            );
        } else {
            titleText = getString('cmsdelete_title', 'core_courseformat');
            bodyText = getString(
                'cmsdelete_info',
                'core_courseformat',
                {count: cmIds.length}
            );
        }

        const modal = await this._modalBodyRenderedPromise(ModalDeleteCancel, {
            title: titleText,
            body: bodyText,
        });

        modal.getRoot().on(
            ModalEvents.delete,
            e => {
                // Stop the default save button behaviour which is to close the modal.
                e.preventDefault();
                modal.destroy();
                this.reactive.dispatch('cmDelete', cmIds);
            }
        );
    }

    /**
     * Handle a cm availability change request.
     *
     * @param {Element} target the dispatch action element
     */
    async _requestCmAvailability(target) {
        const cmIds = this._getTargetIds(target);
        if (cmIds.length == 0) {
            return;
        }
        // Show the availability modal to decide which action to trigger.
        const exporter = this.reactive.getExporter();
        const data = {
            allowstealth: exporter.canUseStealth(this.reactive.state, cmIds),
        };
        const modal = await this._modalBodyRenderedPromise(ModalSaveCancel, {
            title: getString('availability', 'core'),
            body: Templates.render('core_courseformat/local/content/cm/availabilitymodal', data),
            saveButtonText: getString('apply', 'core'),
        });

        this._setupMutationRadioButtonModal(modal, cmIds);
    }

    /**
     * Handle a section availability change request.
     *
     * @param {Element} target the dispatch action element
     */
    async _requestSectionAvailability(target) {
        const sectionIds = this._getTargetIds(target);
        if (sectionIds.length == 0) {
            return;
        }
        const title = (sectionIds.length == 1) ? 'sectionavailability_title' : 'sectionsavailability_title';
        // Show the availability modal to decide which action to trigger.
        const modal = await this._modalBodyRenderedPromise(ModalSaveCancel, {
            title: this.reactive.getFormatString(title),
            body: Templates.render('core_courseformat/local/content/section/availabilitymodal', []),
            saveButtonText: getString('apply', 'core'),
        });

        this._setupMutationRadioButtonModal(modal, sectionIds);
    }

    /**
     * Add events to a mutation selector radio buttons modal.
     * @param {Modal} modal
     * @param {Number[]} ids the section or cm ids to apply the mutation
     */
    _setupMutationRadioButtonModal(modal, ids) {
        // The save button is not enabled until the user selects an option.
        modal.setButtonDisabled('save', true);

        const submitFunction = (radio) => {
            const mutation = radio?.value;
            if (!mutation) {
                return false;
            }
            this.reactive.dispatch(mutation, ids);
            return true;
        };

        const modalBody = getFirst(modal.getBody());
        const radioOptions = modalBody.querySelectorAll(this.selectors.OPTIONSRADIO);
        radioOptions.forEach(radio => {
            radio.addEventListener('change', () => {
                modal.setButtonDisabled('save', false);
            });
            radio.parentNode.addEventListener('click', () => {
                radio.checked = true;
                modal.setButtonDisabled('save', false);
            });
            radio.parentNode.addEventListener('dblclick', dbClickEvent => {
                if (submitFunction(radio)) {
                    dbClickEvent.preventDefault();
                    modal.destroy();
                }
            });
        });

        modal.getRoot().on(
            ModalEvents.save,
            () => {
                const radio = modalBody.querySelector(`${this.selectors.OPTIONSRADIO}:checked`);
                submitFunction(radio);
            }
        );
    }

    /**
     * Disable all add sections actions.
     *
     * @param {boolean} locked the new locked value.
     */
    _setAddSectionLocked(locked) {
        const targets = this.getElements(this.selectors.ADDSECTION);
        targets.forEach(element => {
            element.classList.toggle(this.classes.DISABLED, locked);
            element.classList.toggle(this.classes.ITALIC, locked);
            this.setElementLocked(element, locked);
        });
    }

    /**
     * Replace an element with a copy with a different tag name.
     *
     * @param {Element} element the original element
     */
    _disableLink(element) {
        if (element) {
            element.style.pointerEvents = 'none';
            element.style.userSelect = 'none';
            element.classList.add(this.classes.DISABLED);
            element.classList.add(this.classes.ITALIC);
            element.setAttribute('aria-disabled', true);
            element.addEventListener('click', event => event.preventDefault());
        }
    }

    /**
     * Render a modal and return a body ready promise.
     *
     * @param {Modal} ModalClass the modal class
     * @param {object} modalParams the modal params
     * @return {Promise} the modal body ready promise
     */
    _modalBodyRenderedPromise(ModalClass, modalParams) {
        return new Promise((resolve, reject) => {
            ModalClass.create(modalParams).then((modal) => {
                modal.setRemoveOnClose(true);
                // Handle body loading event.
                modal.getRoot().on(ModalEvents.bodyRendered, () => {
                    resolve(modal);
                });
                // Configure some extra modal params.
                if (modalParams.saveButtonText !== undefined) {
                    modal.setSaveButtonText(modalParams.saveButtonText);
                }
                if (modalParams.deleteButtonText !== undefined) {
                    modal.setDeleteButtonText(modalParams.saveButtonText);
                }
                modal.show();
                return;
            }).catch(() => {
                reject(`Cannot load modal content`);
            });
        });
    }

    /**
     * Hide and later destroy a modal.
     *
     * Behat will fail if we remove the modal while some boostrap collapse is executing.
     *
     * @param {Modal} modal
     * @param {HTMLElement} element the dom element to focus on.
     */
    _destroyModal(modal, element) {
        modal.hide();
        const pendingDestroy = new Pending(`courseformat/actions:destroyModal`);
        if (element) {
            element.focus();
        }
        setTimeout(() =>{
            modal.destroy();
            pendingDestroy.resolve();
        }, 500);
    }

    /**
     * Get the closest actions menu toggler to an action element.
     *
     * @param {HTMLElement} element the action link element
     * @returns {HTMLElement|undefined}
     */
    _getClosestActionMenuToogler(element) {
        const actionMenu = element.closest(this.selectors.ACTIONMENU);
        if (!actionMenu) {
            return undefined;
        }
        return actionMenu.querySelector(this.selectors.ACTIONMENUTOGGLER);
    }
}
