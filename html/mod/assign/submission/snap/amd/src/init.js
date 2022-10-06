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
 * This module handles the display and events of the Snap! editor.
 *
 * @module     assignsubmission_snap/snap
 * @copyright 2020 Sara Arjona <sara@moodle.com> and Joan Guillén <jguille2@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import $ from 'jquery';

export const init = (xmlProject, userid, attemptNumber, editable) => {
    const snapFrame = getSnapFrame(userid, attemptNumber);
    if (snapFrame && editable) {
        // Register events (to update the hidden xmlproject field when the form is submitted).
        const form = getXMLInput().closest('form');
        registerListenerEvents(form, snapFrame);
    }
};

const getSnapFrame = (userid, attemptNumber) => {
    return document.getElementById('snap_snap-' + userid + '-' + attemptNumber).contentWindow;
};

const getXMLInput = () => {
    return $('input[name="snap_xmlproject"]')[0];
};

const registerListenerEvents = (form, snapFrame) => {
    const submitButton = document.getElementById('id_submitbutton');
    submitButton.addEventListener('click',
        function(event) {
            event.preventDefault();
            window.addEventListener('message',function(e) {
                if (e.data.selector == 'getProjectXML') {updateProject(form, e.data.response);}
            },false);
            snapFrame.postMessage({selector:'getProjectXML'},'*');
        }
    );
};

const updateProject = (form, newContent) => {
    const xmlProject = getXMLInput();
    xmlProject.value = newContent;
    form.submit();
};
