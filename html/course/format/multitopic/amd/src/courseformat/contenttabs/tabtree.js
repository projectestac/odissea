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

import {BaseComponent} from 'core/reactive';
import {getCurrentCourseEditor} from 'core_courseformat/courseeditor';
import Tab from 'format_multitopic/courseformat/contenttabs/tab';
import Templates from 'core/templates';


/**
 * Course section tabs updater.
 *
 * @module     format_multitopic/courseformat/contenttabs/tabtree
 * @class      format_multitopic/courseformat/contenttabs/tabtree
 * @copyright  2022 Jeremy FitzPatrick and Te Wānanga o Aotearoa
 * @copyright  2023 onwards James Calder and Otago Polytechnic
 * @copyright  based on work by 2021 Ferran Recio <ferran@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

export default class Component extends BaseComponent {

    /**
     * Constructor hook.
     */
    create() {
        // Optional component name for debugging.
        this.name = 'contenttabs';
        // Default query selectors.
        this.selectors = {
            TAB: `ul:first-of-type li`,
            CHILDTAB: `ul:nth-child(2) li`,
            SECTION_ITEM: `a.nav-link`,
        };
        // Default classes
        this.classes = {
            ACTIVETAB: 'active'
        };
        // Objects to keep tabs on the tabs
        this.tabs = {};
        this.childtabs = {};
        this.activetab = [null, null];

        this.originalsinglesectionid = document.querySelector("ul.sections").dataset.originalsinglesectionid;
    }

    static init(target) {
        return new this({
            element: document.getElementById(target),
            reactive: getCurrentCourseEditor(),
        });
    }

    /**
     * Initial state ready method.
     *
     */
    stateReady() {
        this._indexContents();
    }

    getWatchers() {
        return [
            // Sections sorting.
            {watch: `course.sectionlist:updated`, handler: this._refreshCourseSectionTabs},
        ];
    }

    /**
     * Refresh the section tabs.
     *
     * @param {object} param
     * @param {Object} param.element
     */
    async _refreshCourseSectionTabs({element}) {

        const originalSingleSection = this.reactive.get("section", this.originalsinglesectionid);
        let singleSectionId;
        let singleSection;
        if (originalSingleSection) {
            singleSectionId = (originalSingleSection.levelsan < 2) ? originalSingleSection.id : originalSingleSection.pageid;
            singleSection = (singleSectionId == originalSingleSection.id) ?
                            originalSingleSection : this.reactive.get("section", singleSectionId);
        } else {
            singleSectionId = null;
            singleSection = null;
        }

        let newActiveTab0id;
        if (singleSection) {
            newActiveTab0id = (singleSection.levelsan >= 1) ? singleSection.parentid : singleSection.id;
        } else {
            newActiveTab0id = null;
        }

        // Add/remove the second-level tabs, if necessary.
        let tabsSecondRowDom = this.element.querySelector('ul:nth-of-type(2)');
        const tabsSecondRowShow = singleSection
                            && ((element.tabsdata.length > 1)
                                || (element.tabsdata[0].subtree.length > 1));
        if (tabsSecondRowShow && !tabsSecondRowDom) {
            // Create tab row.
            this.element.querySelector('ul:first-of-type').insertAdjacentElement(
                'afterend', tabsSecondRowDom = document.createElement('ul')
            );
            tabsSecondRowDom.className = 'nav nav-tabs mb-3';
            // Create add tab.
            const addTab0Dom = this.element.querySelector('ul:first-of-type li:last-of-type');
            let data = {
                "level": 1,
                "active": false,
                "inactive": false,
                "link": [{
                    "link": addTab0Dom.querySelector('a').getAttribute('href').replace(/\binsertlevel=0\b/, 'insertlevel=1'),
                }],
                "title": addTab0Dom.getAttribute('title'),
                "text": '<i class="icon fa fa-plus fa-fw" title="' + addTab0Dom.getAttribute('title') + '"></i>',
            };
            let item = document.createElement("li");
            tabsSecondRowDom.insertAdjacentElement('beforeend', item);
            let html = await Templates.render("format_multitopic/courseformat/contenttabs/tab", data);
            item = Templates.replaceNode(item, html, "")[0];
        } else if (tabsSecondRowDom && !tabsSecondRowShow) {
            tabsSecondRowDom.remove();
        }

        let toptabslist = [];
        let childtabslist = [];
        for (let tabdata of element.tabsdata) {
            toptabslist.push(tabdata.sectionid);
            if (tabdata.sectionid == newActiveTab0id) {
                for (let tabdata2 of tabdata.subtree) {
                    childtabslist.push(tabdata2.sectionid);
                }
            }
        }

        // Do things that make the first row tabs match firstsectionlist.
        let toptabs = this.element.querySelector('ul:first-of-type');
        await this._fixOrder(toptabs, toptabslist, this.selectors.TAB, 0, element.tabsdata[0].subtree.length > 1);

        // And the second row tabs match secondsectionlist.
        if (tabsSecondRowShow) {
            let childtabs = this.element.querySelector('ul:nth-of-type(2)');
            await this._fixOrder(childtabs, childtabslist, this.selectors.CHILDTAB, 1, false);
        }

        this._changeActiveTabs(newActiveTab0id, tabsSecondRowShow ? singleSection.id : null);

        this._indexContents();
    }

    /**
     * Change active tabs, if necessary.
     *
     * @param {int|null} newActiveTab0id
     * @param {int|null} newActiveTab1id
     */
    _changeActiveTabs(newActiveTab0id, newActiveTab1id) {

        // Change the active top-level tab, if necessary.
        if (newActiveTab0id != this.activetab[0]) {
            let anchor = this.element.querySelector('ul:first-of-type div[data-itemid="' + this.activetab[0] + '"]')?.parentElement;
            if (anchor) {
                let section = this.reactive.get("section", this.activetab[0]);
                anchor.classList.remove("active");
                anchor.href = section.sectionurl.replace("&amp;", "&");
            }
            this.activetab[0] = newActiveTab0id;
            anchor = this.element.querySelector('ul:first-of-type div[data-itemid="' + this.activetab[0] + '"]')?.parentElement;
            if (anchor) {
                anchor.classList.add("active");
                anchor.removeAttribute("href");
            }
            // Change the second-level add tab, if necessary.
            if (newActiveTab1id) {
                const addAnchor = this.element.querySelector('ul:nth-of-type(2) li:last-of-type a');
                const addLink = addAnchor.href.replace(/\binsertparentid=\d+\b/, "insertparentid=" + this.activetab[0]);
                addAnchor.setAttribute("href", addLink);
            }
        }

        // Change the active second-level tab, if necessary.
        if (newActiveTab1id && newActiveTab1id != this.activetab[1]) {
            let anchor = this.element.querySelector('ul:nth-of-type(2) div[data-itemid="' + this.activetab[1] + '"]')
                            ?.parentElement;
            if (anchor) {
                let section = this.reactive.get("section", this.activetab[1]);
                anchor.classList.remove("active");
                anchor.href = section.sectionurl.replace("&amp;", "&");
            }
            this.activetab[1] = newActiveTab1id;
            anchor = this.element.querySelector('ul:nth-of-type(2) div[data-itemid="' + this.activetab[1] + '"]')?.parentElement;
            if (anchor) {
                anchor.classList.add("active");
                anchor.removeAttribute("href");
            }
        }
        this.activetab[1] = newActiveTab1id;

    }

    /**
     * Regenerate content indexes.
     *
     * This method is used when a legacy action refresh some content element.
     */
    _indexContents() {
        // Find unindexed tabs.
        this._scanIndex(
            this.selectors.TAB,
            this.tabs,
            (item) => {
                return new Tab(item);
            },
            0
        );

        // Find unindexed child tabs.
        this._scanIndex(
            this.selectors.CHILDTAB,
            this.childtabs,
            (item) => {
                return new Tab(item);
            },
            1
        );
    }

    /**
     * Reindex a tab.
     *
     * This method is used internally by _indexContents.
     *
     * @param {string} selector the DOM selector to scan
     * @param {*} index the index attribute to update
     * @param {*} creationhandler method to create a new indexed element
     * @param {int} level tab level
     */
    _scanIndex(selector, index, creationhandler, level) {
        const items = this.getElements(`${selector}:not([data-indexed])`);
        items.forEach((item) => {
            if (!item?.dataset?.id) {
                return;
            }
            // Delete previous item component.
            if (index[item.dataset.id] !== undefined) {
                index[item.dataset.id].unregister();
            }
            // Create the new component.
            index[item.dataset.id] = creationhandler({
                ...this,
                element: item,
            });
            // Update selected tab
            let classes = item.querySelector("a").classList;
            if (classes.contains(this.classes.ACTIVETAB)) {
                this.activetab[level] = item.dataset.id;
            }
            // Mark as indexed.
            item.dataset.indexed = true;
        });
    }

    /**
     * Fix/reorder the section or cms order.
     *
     * @param {Element} container the HTML element to reorder.
     * @param {Array} neworder an array with the ids order
     * @param {string} selector the element selector
     * @param {int} level the tab level
     * @param {boolean} hassubtree
     */
    async _fixOrder(container, neworder, selector, level, hassubtree) {

        // Empty lists should not be visible.
        if (!neworder.length) {
            container.classList.add('hidden');
            container.innerHTML = '';
            return;
        }

        // Grant the list is visible (in case it was empty).
        container.classList.remove('hidden');

        // Move the elements in order at the beginning of the list.
        for (const [index, itemid] of Object.entries(neworder)) {
            const section = this.reactive.get("section", itemid);
            const visible = (section.visible && section.available || section.section == 0)
                && (neworder.length > 1 || hassubtree);
            const current = (section.currentnestedlevel != undefined && section.currentnestedlevel >= level);
            let item = this.getElement(selector, itemid);
            if (item === null) {
                // If we don't have an item, create it.
                let data = {
                    "sectionid": itemid,
                    "level": level,
                    "active": 0,
                    "inactive": 0,
                    "link": [{
                        "link": section.sectionurl
                    }],
                    "title": section.name,
                    "text": '<div class="tab_content' + (visible ? '' : ' dimmed') + (current ? ' marker' : '')
                        + '" data-itemid="' + section.id + '">' + section.title + '</div>'
                };
                item = document.createElement("li");
                container.insertBefore(item, container.lastElementChild);
                let html = await Templates.render("format_multitopic/courseformat/contenttabs/tab", data);
                item = Templates.replaceNode(item, html, "")[0];
            }

            // Update visibility & current marker
            const content = item.querySelector("div.tab_content");
            if (content && content.classList.contains("dimmed") == visible) {
                if (visible) {
                    content.classList.remove("dimmed");
                } else {
                    content.classList.add("dimmed");
                }
            }
            if (content && content.classList.contains("marker") != current) {
                if (current) {
                    content.classList.add("marker");
                } else {
                    content.classList.remove("marker");
                }
            }

            // Get the current element at that position.
            const currentitem = container.children[index];
            if (currentitem === undefined) {
                container.append(item);
                return;
            }
            if (currentitem !== item) {
                container.insertBefore(item, currentitem);
            }
        }
        // Remove the remaining elements.
        // But we don't want the "Add" blown away.
        while (container.children.length > neworder.length + 1) {
                container.removeChild(container.lastElementChild.previousSibling);
        }

    }

}