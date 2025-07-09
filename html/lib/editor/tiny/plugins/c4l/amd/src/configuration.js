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
 * Tiny C4L configuration.
 *
 * @module      tiny_c4l/configuration
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {component as c4lButtonName} from './common';
import {addMenubarItem} from 'editor_tiny/utils';

const configureMenu = (menu) => {
    const items = menu.insert.items.split(' ');
    const inserted = items.some((item, index) => {
        // Append after the link button.
        if (item.match(/(link)\b/)) {
            items.splice(index + 1, 0, c4lButtonName);
            return true;
        }

        return false;
    });

    if (inserted) {
        menu.insert.items = items.join(' ');
    } else {
        addMenubarItem(menu, 'insert', c4lButtonName);
    }

    return menu;
};

const configureToolbar = (toolbar) => {
    // The toolbar contains an array of named sections.
    // The Moodle integration ensures that there is a section called 'content'.

    return toolbar.map((section) => {
        if (section.name === 'content') {
            // Insert the c4l button at the start of it.
            section.items.unshift(c4lButtonName);
        }

        return section;
    });
};

export const configure = (instanceConfig) => {
    return {
        menu: configureMenu(instanceConfig.menu),
        toolbar: configureToolbar(instanceConfig.toolbar),
    };
};
