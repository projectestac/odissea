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
 * Tiny tiny_fontcolor for Moodle.
 *
 * @module      tiny_fontcolor
 * @copyright   2023 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {addMenubarItem, addContextmenuItem, addToolbarButtons} from 'editor_tiny/utils';
import {forecolor, backcolor, pluginName} from './common';

const configureToolbar = (toolbar) => {
    toolbar = addToolbarButtons(toolbar, 'formatting', [forecolor, backcolor]);
    return toolbar;
};

const configureMenu = (menu) => {
    menu = addMenubarItem(menu, 'format', forecolor);
    menu = addMenubarItem(menu, 'format', backcolor);
    return menu;
};

const configureContextMenu = (menu) => {
    if (!menu) {
        menu = '';
    }
    return addContextmenuItem(menu, '|', forecolor, backcolor);
};

// The default table context toolbar (see the table plugin's defaultTableToolbar). We re-declare it
// here because table_toolbar is read at plugin setup time, so the swatch buttons must be part of the
// initial editor config rather than set later on the 'init' event.
const defaultTableToolbar = 'tableprops tabledelete '
    + '| tableinsertrowbefore tableinsertrowafter tabledeleterow '
    + '| tableinsertcolbefore tableinsertcolafter tabledeletecol';

// The plugin's own settings are not merged into instanceConfig until after configure() runs
// (see editor.js getEditorConfiguration). They are, however, available on the second argument
// under options.plugins[pluginName].config, keyed by the bare option name.
const getPluginConfig = (options) => options?.plugins?.[pluginName]?.config ?? {};

// Whether the given plugin colour list option holds at least one colour.
const hasColors = (pluginConfig, name) => Array.isArray(pluginConfig[name]) && pluginConfig[name].length > 0;

// Add the per-field colour swatch buttons that consume table_background_color_map / table_border_color_map.
// Only do so when the "use for table" setting is on and the matching colour list actually has entries;
// an empty map would make the table plugin fall back to the default palette (see dialoguecolors.js).
const configureTableToolbar = (tableToolbar, pluginConfig) => {
    const base = tableToolbar || defaultTableToolbar;
    if (!pluginConfig.usefortable) {
        return base;
    }
    const additionalButtons = [];
    // Text colours act as border colours, background colours as cell background colours.
    if (hasColors(pluginConfig, 'textcolors')) {
        additionalButtons.push('tablecellbordercolor');
    }
    if (hasColors(pluginConfig, 'backgroundcolors')) {
        additionalButtons.push('tablecellbackgroundcolor');
    }
    return additionalButtons.length === 0 ? base : `${base} | ${additionalButtons.join(' ')}`;
};

export const configure = (instanceConfig, options) => {
    const pluginConfig = getPluginConfig(options);
    return {
        toolbar: configureToolbar(instanceConfig.toolbar),
        menu: configureMenu(instanceConfig.menu),
        // eslint-disable-next-line camelcase
        quickbars_selection_toolbar: configureContextMenu(instanceConfig.quickbars_selection_toolbar),
        // eslint-disable-next-line camelcase
        table_toolbar: configureTableToolbar(instanceConfig.table_toolbar, pluginConfig),
    };
};
