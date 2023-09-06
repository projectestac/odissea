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
 * A widget to search users within the gradebook.
 *
 * @module    gradereport_user/user
 * @copyright 2022 Mathew May <mathew.solutions>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import Pending from 'core/pending';
import * as Templates from 'core/templates';
import * as Repository from 'core_grades/searchwidget/repository';
import * as WidgetBase from 'core_grades/searchwidget/basewidget';
import {get_string as getString} from 'core/str';
import Url from 'core/url';
import $ from 'jquery';
import * as Selectors from 'core_grades/searchwidget/selectors';

/**
 * Our entry point into starting to build the search widget.
 * It'll eventually, based upon the listeners, open the search widget and allow filtering.
 *
 * @method init
 */
export const init = () => {
    const pendingPromise = new Pending();
    registerListenerEvents();
    pendingPromise.resolve();
};

/**
 * Register user search widget related event listeners.
 *
 * @method registerListenerEvents
 */
const registerListenerEvents = () => {
    let {bodyPromiseResolver, bodyPromise} = WidgetBase.promisesAndResolvers();
    const dropdownMenuContainer = document.querySelector(Selectors.elements.getSearchWidgetDropdownSelector('user'));

    // Handle the 'shown.bs.dropdown' event (Fired when the dropdown menu is fully displayed).
    $(Selectors.elements.getSearchWidgetSelector('user')).on('show.bs.dropdown', async(e) => {
        const courseID = e.relatedTarget.dataset.courseid;
        const groupId = e.relatedTarget.dataset.groupid;
        const actionBaseUrl = Url.relativeUrl('/grade/report/user/index.php', {}, false);
        // Display a loading icon in the dropdown menu container until the body promise is resolved.
        await WidgetBase.showLoader(dropdownMenuContainer);

        // If an error occurs while fetching the data, display the error within the dropdown menu.
        const data = await Repository.userFetch(courseID, actionBaseUrl, groupId).catch(async(e) => {
            const errorTemplateData = {
                'errormessage': e.message
            };
            bodyPromiseResolver(
                await Templates.render('core_grades/searchwidget/error', errorTemplateData)
            );
        });

        // Early return if there is no module data.
        if (data === []) {
            return;
        }

        // The HTML for the 'All users' option which will be rendered in the non-searchable content are of the widget.
        const allUsersOptionName = await getString('allusersnum', 'gradereport_user', data.users.length);
        const allUsersOption = await Templates.render('gradereport_user/all_users_item', {
            id: 0,
            name: allUsersOptionName,
            url: Url.relativeUrl('/grade/report/user/index.php', {id: courseID, userid: 0}, false),
        });

        await WidgetBase.init(
            dropdownMenuContainer,
            bodyPromise,
            data.users,
            searchUsers(),
            allUsersOption
        );

        // Resolvers for passed functions in the dropdown menu creation.
        bodyPromiseResolver(Templates.render(
            'core_grades/searchwidget/user/usersearch_body', {displayunsearchablecontent: true}
        ));
    });

    // Handle the 'hide.bs.dropdown' event (Fired when the dropdown menu is being closed).
    $(Selectors.elements.getSearchWidgetSelector('user')).on('hide.bs.dropdown', () => {
        // Reset the state once the user menu dropdown is closed.
        dropdownMenuContainer.innerHTML = '';
    });
};

/**
 * Define how we want to search and filter users when the user decides to input a search value.
 *
 * @method registerListenerEvents
 * @returns {function(): function(*, *): (*)}
 */
const searchUsers = () => {
    return () => {
        return (users, searchTerm) => {
            if (searchTerm === '') {
                return users;
            }
            searchTerm = searchTerm.toLowerCase();
            const searchResults = [];
            users.forEach((user) => {
                const userName = user.fullname.toLowerCase();
                if (userName.includes(searchTerm)) {
                    searchResults.push(user);
                }
            });
            return searchResults;
        };
    };
};
