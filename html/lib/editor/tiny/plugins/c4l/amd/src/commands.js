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
 * Tiny C4L commands.
 *
 * @module      tiny_c4l/commands
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {getButtonImage} from 'editor_tiny/utils';
import {get_string as getString} from 'core/str';
import {handleAction} from './ui';
import {
    component,
    c4lButtonName,
    c4lMenuItemName,
    icon,
} from './common';
import {
        isC4LVisible,
        getpreviewCSS
} from './options';

export const getSetup = async() => {
    const [
        c4lButtonNameTitle,
        c4lMenuItemNameTitle,
        buttonImage,
    ] = await Promise.all([
        getString('button_c4l', component),
        getString('menuitem_c4l', component),
        getButtonImage('icon', component),
    ]);

    return (editor) => {
        if (isC4LVisible(editor)) {
            // Register the C4L Icon.
            editor.ui.registry.addIcon(icon, buttonImage.html);

            // Register the C4L Toolbar Button.
            editor.ui.registry.addButton(c4lButtonName, {
                icon,
                tooltip: c4lButtonNameTitle,
                onAction: () => handleAction(editor),
            });

            // Add the C4L Menu Item.
            // This allows it to be added to a standard menu, or a context menu.
            editor.ui.registry.addMenuItem(c4lMenuItemName, {
                icon,
                text: c4lMenuItemNameTitle,
                onAction: () => handleAction(editor),
            });

            // Inject custom CSS.
            editor.options.set('content_style', getpreviewCSS(editor));
        }
    };
};
