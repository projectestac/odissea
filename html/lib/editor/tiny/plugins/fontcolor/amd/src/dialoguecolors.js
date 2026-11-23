// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Adds the defined colours to the editor's shared colour palette (color_map) for tiny_fontcolor.
 *
 * @module      tiny_fontcolor
 * @copyright   2026 Kristian Ringer <https://github.com/kristian-94>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
import {getForecolorMap, getBackcolorMap, isUseForTableOn} from './options';

/**
 * Convert our colour entries into the {title, value} object shape that the table plugin's
 * table_*_color_map options expect (they are registered with the 'object[]' processor).
 *
 * Our colours may carry a leading '#' and an alpha channel (#RRGGBBAA). The table plugin only
 * recognises 3- or 6-digit hex; anything else falls back to a canvas getImageData() parse whose
 * read-back is perturbed by browser anti-fingerprinting noise, making the swatch colours drift on
 * every open. So we normalise to a bare 6-digit hex here to keep the values stable.
 *
 * @param {object[]} colors Colour entries, each {value, text}.
 * @returns {object[]} Colour map entries {title, value} for the table_*_color_map options.
 */
const buildColorMap = (colors) => colors.map(color => ({
    value: color.value.replace(/^#/, '').substring(0, 6),
    title: color.text,
}));

/**
 * Add the defined colours to the editor's shared colour palette when the setting is enabled.
 *
 * @param {TinyMCE.Editor} editor
 */
export const setup = (editor) => {
    if (!isUseForTableOn(editor)) {
        return;
    }
    editor.on('init', () => {
        // Empty the default color palette, that is used inside the table properties (the color picker and
        // erase pen remain there anyway).
        editor.options.set('color_map', []);
        // Set palette for foreground and background color for table border and background.
        // These will show up in the context menu of the table plugin when clicking into a cell.
        editor.options.set('table_border_color_map', buildColorMap(getForecolorMap(editor)));
        editor.options.set('table_background_color_map', buildColorMap(getBackcolorMap(editor)));
    });
};
