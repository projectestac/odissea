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
 * Options helper for C4L plugin.
 *
 * @module      tiny_c4l/options
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {getPluginOptionName} from 'editor_tiny/options';
import {pluginName} from './common';

const isstudentName = getPluginOptionName(pluginName, 'isstudent');
const allowedcompsName = getPluginOptionName(pluginName, 'allowedcomps');
const showpreviewName = getPluginOptionName(pluginName, 'showpreview');
const viewc4lName = getPluginOptionName(pluginName, 'viewc4l');
const previewCSS = getPluginOptionName(pluginName, 'previewcss');
const customComps = getPluginOptionName(pluginName, 'customcomps');

export const register = (editor) => {
    const registerOption = editor.options.register;

    registerOption(allowedcompsName, {
        processor: 'array',
        "default": [],
    });

    registerOption(isstudentName, {
        processor: 'boolean',
        "default":  false,
    });

    registerOption(showpreviewName, {
        processor: 'boolean',
        "default":  true,
    });

    registerOption(viewc4lName, {
        processor: 'boolean',
        "default":  true,
    });

    registerOption(previewCSS, {
        processor: 'string',
        "default": '',
    });

    registerOption(customComps, {
        processor: 'array',
        "default": [],
    });
};

/**
 * Get the permissions configuration for the Tiny C4L plugin.
 *
 * @param {TinyMCE} editor
 * @returns {object}
 */
export const isC4LVisible = (editor) => editor.options.get(viewc4lName);

/**
 * Get whether user is a student configuration for the Tiny C4L plugin.
 *
 * @param {TinyMCE} editor
 * @returns {object}
 */
export const isStudent = (editor) => editor.options.get(isstudentName);

/**
 * Get the preview visibility configuration for the Tiny C4L plugin.
 *
 * @param {TinyMCE} editor
 * @returns {object}
 */
export const showPreview = (editor) => editor.options.get(showpreviewName);

/**
 * Get components allowed at students configuration for the Tiny C4L plugin.
 *
 * @param {TinyMCE} editor
 * @returns {object}
 */
export const getallowedComponents = (editor) => editor.options.get(allowedcompsName);

/**
 * Get custom components configuration for the Tiny C4L plugin.
 *
 * @param {TinyMCE} editor
 * @returns {object}
 */
export const getcustomComponents = (editor) => editor.options.get(customComps);

/**
 * Get custom preview CSS configuration for the Tiny C4L plugin.
 *
 * @param {TinyMCE} editor
 * @returns {string}
 */
export const getpreviewCSS = (editor) => editor.options.get(previewCSS);
