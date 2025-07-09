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
 * Class that defines the bulk action for setting marking workflow state in the assignment grading page.
 *
 * @module     mod_assign/bulkactions/grading/setmarkingworkflowstate
 * @copyright  2024 Shamim Rezaie <shamim@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import BulkAction from 'core/bulkactions/bulk_action';
import Templates from 'core/templates';
import {getString} from 'core/str';
import SaveCancelModal from 'core/modal_save_cancel';
import ModalEvents from 'core/modal_events';

const Selectors = {
    selectBulkItemCheckbox: 'input[type="checkbox"][name="selectedusers"]:checked',
};

export default class extends BulkAction {
    /** @type {number} The course module ID. */
    #cmid;

    /** @type {string} The session key. */
    #sesskey;

    /**
     * The class constructor.
     *
     * @param {number} cmid The course module ID.
     * @param {string} sesskey The session key.
     */
    constructor(cmid, sesskey) {
        super();
        this.#cmid = cmid;
        this.#sesskey = sesskey;
    }

    getBulkActionTriggerSelector() {
        return '[data-type="bulkactions"] [data-action="setmarkingworkflowstate"]';
    }

    async triggerBulkAction() {
        const selectedUsers = [...document.querySelectorAll(Selectors.selectBulkItemCheckbox)].map(checkbox => checkbox.value);

        const modal = await SaveCancelModal.create({
            title: await getString('setmarkingworkflowstate', 'mod_assign'),
            buttons: {
                save: await getString('batchoperationsetmarkingworkflowstate', 'mod_assign'),
            },
            body: Templates.render('mod_assign/bulkactions/grading/bulk_action_modal_body', {
                text: await getString('batchoperationconfirmsetmarkingworkflowstate', 'mod_assign'),
                operation: 'setmarkingworkflowstate',
                cmid: this.#cmid,
                selectedusers: selectedUsers.join(','),
                sesskey: this.#sesskey
            }),
            show: true,
            removeOnClose: true,
        });

        // Handle save event.
        modal.getRoot().on(ModalEvents.save, (e) => {
            e.preventDefault();
            modal.getRoot().find('form').submit();
        });
    }

    async renderBulkActionTrigger(showInDropdown, index) {
        return Templates.render('mod_assign/bulkactions/grading/bulk_setmarkingworkflowstate_trigger', {
            showindropdown: showInDropdown,
            isfirst: index === 0,
        });
    }
}
