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
 * Tiny C4L UI.
 *
 * @module      tiny_c4l/ui
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {component} from './common';
import C4LModal from './modal';
import ModalFactory from 'core/modal_factory';
import {components as Components} from './components';
import {get_strings as getStrings} from 'core/str';
import {
    isStudent,
    getallowedComponents,
    showPreview,
    getpreviewCSS,
    getcustomComponents
} from './options';
import ModalEvents from 'core/modal_events';
import {
    addVariant,
    getVariantsClass,
    getVariantHtml,
    getVariantsHtml,
    loadVariantPreferences,
    removeVariant,
    saveVariantPreferences,
    variantExists
} from './variantslib';

let userStudent = false;
let previewC4L = true;
let allowedComponents = [];
let Contexts = [];
let langStrings = {};
let previewCSS = '';
let customComponents = [];
const compPrefix = 'c4lv-';

/**
 * Handle action
 *
 * @param {TinyMCE} editor
 */
export const handleAction = async(editor) => {
    userStudent = isStudent(editor);
    previewC4L = showPreview(editor);
    customComponents = getcustomComponents(editor);
    addCustomComponents();
    allowedComponents = getallowedComponents(editor);
    previewCSS = getpreviewCSS(editor);
    langStrings = await getAllStrings();
    loadVariantPreferences(Components).then(() => displayDialogue(editor));
};

/**
 * Display modal
 *
 * @param  {TinyMCE} editor
 */
const displayDialogue = async(editor) => {
    const data = Object.assign({}, {});

    // Show modal with buttons.
    const modal = await ModalFactory.create({
        type: C4LModal.TYPE,
        templateContext: await getTemplateContext(editor, data),
        large: true,
    });

    // Choose class to modal.
    const modalClass = previewC4L ? 'c4l-modal' : 'c4l-modal-no-preview';

    // Set class to modal.
    editor.targetElm.closest('body').classList.add(modalClass);

    // Inject custom component styles in editor.
    if (previewCSS !== "") {
        const styles = document.createElement('style');
        styles.textContent = previewCSS;
        editor.targetElm.closest('body').appendChild(styles);
    }

    modal.show();

    // Event modal listener.
    modal.getRoot().on(ModalEvents.hidden, () => {
        handleModalHidden(editor);
    });

    // Event filters listener.
    const filters = modal.getRoot()[0].querySelectorAll('.c4l-button-filter');
    filters.forEach(node => {
        node.addEventListener('click', (event) => {
            handleButtonFilterClick(event, modal);
        });
    });

    modal.getRoot()[0].querySelector('.c4l-select-filter').addEventListener('change', (event) => {
       handleSelectFilterChange(event, modal);
    });

    // Event buttons listeners.
    const buttons = modal.getRoot()[0].querySelectorAll('.c4lt-dialog-button');
    buttons.forEach(node => {
        node.addEventListener('click', (event) => {
            handleButtonClick(event, editor, modal);
        });
        if (previewC4L) {
            node.addEventListener('mouseenter', (event) => {
                handleButtonMouseEvent(event, modal, true);
            });
            node.addEventListener('mouseleave', (event) => {
                handleButtonMouseEvent(event, modal, false);
            });
        }
    });

    // Event variants listeners.
    const variants = modal.getRoot()[0].querySelectorAll('.c4l-button-variant');
    variants.forEach(node => {
        node.addEventListener('click', (event) => {
            handleVariantClick(event, modal);
        });
        if (previewC4L) {
            node.addEventListener('mouseenter', (event) => {
                handleVariantMouseEvent(event, modal, true);
            });
            node.addEventListener('mouseleave', (event) => {
                handleVariantMouseEvent(event, modal, false);
            });
        }
    });
};

/**
 * Handle a change within filter select.
 *
 * @param {MouseEvent} event The change event
 * @param {obj} modal
 */
const handleSelectFilterChange = (event, modal) => {
    const select = event.target.closest('select');

    if (select) {
        const currentContext = select.value;
        if (Contexts.indexOf(currentContext) !== -1) {
            // Select current button.
            const buttons = modal.getRoot()[0]
                .querySelectorAll('.c4l-buttons-filters button');
            buttons.forEach(node => node.classList.remove('c4l-button-filter-enabled'));
            const button = modal.getRoot()[0]
                .querySelector('.c4l-button-filter[data-filter="' + currentContext + '"]');
            button.classList.add('c4l-button-filter-enabled');

            // Show/hide component buttons.
            showContextButtons(modal, currentContext);
        }
    }
};

/**
 * Handle a click within filter button.
 *
 * @param {MouseEvent} event The change event
 * @param {obj} modal
 */
const handleButtonFilterClick = (event, modal) => {
    const button = event.target.closest('button');

    const currentContext = button.dataset.filter;
    // Filter button.
    if (Contexts.indexOf(currentContext) !== -1) {
        // Select current button.
        const buttons = modal.getRoot()[0].querySelectorAll('.c4l-buttons-filters button');
        buttons.forEach(node => node.classList.remove('c4l-button-filter-enabled'));
        button.classList.add('c4l-button-filter-enabled');

        // Select current option in select.
        const select = modal.getRoot()[0].querySelector('.c4l-select-filter');
        select.selectedIndex = Contexts.indexOf(currentContext);

        // Show/hide component buttons.
        showContextButtons(modal, currentContext);
    }
};

/**
 * Handle when closing the Modal.
 *
 * @param {obj} editor
 */
const handleModalHidden = (editor) => {
    editor.targetElm.closest('body').classList.remove('c4l-modal-no-preview');
    saveVariantPreferences(Components);
};

/**
 * Handle a click in a component button.
 *
 * @param {MouseEvent} event The click event
 * @param {obj} editor
 * @param {obj} modal
 */
const handleButtonClick = (event, editor, modal) => {
    const selectedButton = event.target.closest('button').dataset.id;

    // Component button.
    const component = Components.find(element => element.name == selectedButton);
    if (component != undefined) {
        const sel = editor.selection.getContent();
        let componentCode = component.code;
        const placeholder = (sel.length > 0 ? sel : component.text);

        // Create a new node to replace the placeholder.
        const randomId = generateRandomID();
        const newNode = document.createElement('span');
        newNode.dataset.id = randomId;
        newNode.innerHTML = placeholder;
        componentCode = componentCode.replace('{{PLACEHOLDER}}', newNode.outerHTML);

        // Return active variants for current component.
        const variants = getVariantsClass(component.name);

        // Apply variants to html component.
        if (variants.length > 0) {
            componentCode = componentCode.replace('{{VARIANTS}}', variants.join(' '));
            componentCode = componentCode.replace('{{VARIANTSHTML}}', getVariantsHtml(component.name));
        } else {
            componentCode = componentCode.replace('{{VARIANTS}}', '');
            componentCode = componentCode.replace('{{VARIANTSHTML}}', '');
        }

        // Apply random IDs.
        componentCode = applyRandomID(componentCode);

        // Apply lang strings.
        componentCode = applyLangStrings(componentCode);

        // Sets new content.
        editor.selection.setContent(componentCode);

        // Select text.
        const nodeSel = editor.dom.select('span[data-id="' + randomId + '"]');
        if (nodeSel?.[0]) {
            editor.selection.select(nodeSel[0]);
        }

        modal.destroy();
        editor.focus();
    }
};

/**
 * Handle a mouse events mouseenter/mouseleave in a component button.
 *
 * @param {MouseEvent} event The click event
 * @param {obj} modal
 * @param {bool} show
 */
const handleButtonMouseEvent = (event, modal, show) => {
    const selectedButton = event.target.closest('button').dataset.id;
    const node = modal.getRoot()[0].querySelector('div[data-id="code-preview-' + selectedButton + '"]');
    const previewDefault = modal.getRoot()[0].querySelector('div[data-id="code-preview-default"]');

    if (node) {
        if (show) {
            previewDefault.classList.toggle('c4l-hidden');
            node.classList.toggle('c4l-hidden');
        } else {
            node.classList.toggle('c4l-hidden');
            previewDefault.classList.toggle('c4l-hidden');
        }
    }
};

/**
 * Handle a mouse events mouseenter/mouseleave in a variant button.
 *
 * @param {MouseEvent} event The mouseenter/mouseleave event
 * @param {obj} modal
 * @param {bool} show
 */
const handleVariantMouseEvent = (event, modal, show) => {
    const variant = event.target.closest('span');
    const variantEnabled = variant.dataset.state == 'on';
    const button = event.target.closest('button');

    if (!variantEnabled) {
        updateVariantComponentState(variant, button, modal, show, false);
    }
};


/**
 * Handle a mouse event within the variant buttons.
 *
 * @param {MouseEvent} event The mouseenter/mouseleave event
 * @param {obj} modal
 */
const handleVariantClick = (event, modal) => {
    event.stopPropagation();
    const variant = event.target.closest('span');
    const button = event.target.closest('button');
    updateVariantComponentState(variant, button, modal, false, true);
};

/**
 * Get the template context for the dialogue.
 *
 * @param {Editor} editor
 * @param {object} data
 * @returns {object} data
 */
const getTemplateContext = async(editor, data) => {
    return Object.assign({}, {
        elementid: editor.id,
        buttons: await getButtons(editor),
        filters: await getFilters(),
        preview: previewC4L,
    }, data);
};

/**
 * Get the C4L filters for the dialogue.
 *
 * @returns {object} data
 */
const getFilters = async() => {
    const filters = [];
    const stringValues = await getStrings(Contexts.map((key) => ({key, component})));

    // Iterate over contexts.
    Contexts.forEach((context, index) => {
        filters.push({
            name: stringValues[index],
            type: context,
            filterClass: index === 0 ? 'c4l-button-filter-enabled' : '',
        });
    });

    return filters;
};

/**
 * Get the C4L buttons for the dialogue.
 *
 * @param {Editor} editor
 * @returns {object} buttons
 */
const getButtons = (editor) => {
    const buttons = [];
    const sel = editor.selection.getContent();
    let componentCode = '';
    let placeholder = '';
    let variants = [];
    let buttonText = '';

    // Iterate over components.
    Components.forEach((component) => {
        if (!userStudent || (userStudent && allowedComponents.includes(component.name))) {
            if (previewC4L) {
                placeholder = (sel.length > 0 ? sel : component.text);
                componentCode = component.code;
                componentCode = componentCode.replace('{{PLACEHOLDER}}', placeholder);
                // Return active variants for component.
                variants = getVariantsClass(component.name);

                // Apply class variants and html to html component.
                const variantsNode = document.createElement('span');
                variantsNode.dataset.id = 'variantHTML-' + component.id;
                if (variants.length > 0) {
                    componentCode = componentCode.replace('{{VARIANTS}}', variants.join(' '));
                    variantsNode.innerHTML = getVariantsHtml(component.name);
                    componentCode = componentCode.replace('{{VARIANTSHTML}}', variantsNode.outerHTML);
                } else {
                    componentCode = componentCode.replace('{{VARIANTS}}', '');
                    componentCode = componentCode.replace('{{VARIANTSHTML}}', variantsNode.outerHTML);
                }

                // Apply lang strings.
                componentCode = applyLangStrings(componentCode);
            }

            // Save contexts.
            if (Contexts.indexOf(component.type) === -1) {
                Contexts.push(component.type);
            }

            buttonText = component.type == 'custom' ? component.buttonname : langStrings.get(component.name);
            buttons.push({
                id: component.name,
                name: buttonText,
                type: component.type,
                icon: component.icon ?? '',
                imageClass: component.imageClass,
                classComponent: compPrefix + component.name,
                htmlcode: componentCode,
                css: component.css ?? '',
                variants: getVariantsState(component.name, component.variants),
            });

            // Add class to hide button.
            if (Contexts.indexOf(component.type) !== 0) {
                buttons[buttons.length - 1].imageClass += ' c4l-hidden';
            }
        }
    });

    return buttons;
};

/**
 * Get variants for the dialogue.
 *
 * @param  {string} component
 * @param  {object} elements
 * @return {object} Variants for a component
 */
const getVariantsState = (component, elements) => {
    const variants = [];
    let variantState = '';
    let variantClass = '';

    // Max 3 variants.
    if (elements.length > 3) {
        elements = elements.slice(0, 2);
    }

    elements.forEach((variant, index) => {
        if (variantExists(component, variant)) {
            variantState = 'on';
            variantClass = 'on ';
        } else {
            variantState = 'off';
            variantClass = '';
        }
        variantClass += variant + '-variant-' + variantState;
        variants.push({
            id: index,
            name: variant,
            state: variantState,
            imageClass: variantClass,
            title: langStrings.get(variant),
        });
    });

    return variants;
};

/**
 * Update a variant component UI.
 *
 * @param {obj} variant
 * @param {obj} button
 * @param {obj} modal
 * @param {bool} show
 * @param {bool} updateHtml
 */
const updateVariantComponentState = (variant, button, modal, show, updateHtml) => {
    const selectedVariant = 'c4l-' + variant.dataset.variant + '-variant';
    const component = Components.find(element => element.name == button.dataset.id);
    const componentClass = button.dataset.classcomponent;
    const previewComponent = modal.getRoot()[0]
        .querySelector('div[data-id="code-preview-' + button.dataset.id + '"] .' + componentClass);
    const variantPreview = modal.getRoot()[0]
        .querySelector('span[data-id="variantHTML-' + component.id + '"]');
    let variantsHtml = '';

    if (previewComponent) {
        if (updateHtml) {
            if (variant.dataset.state == 'on') {
                removeVariant(component.name, variant.dataset.variant);
                updateVariantButtonState(variant, false);
                previewComponent.classList.remove(selectedVariant);
            } else {
                addVariant(component.name, variant.dataset.variant);
                updateVariantButtonState(variant, true);
                previewComponent.classList.add(selectedVariant);
            }

            // Update variant preview HTML.
            if (variantPreview) {
                variantPreview.innerHTML = getVariantsHtml(component.name);
            }
        } else {
            variantsHtml = getVariantsHtml(component.name);
            if (show) {
                previewComponent.classList.add(selectedVariant);
                variantsHtml += getVariantHtml(variant.dataset.variant);
            } else {
                previewComponent.classList.remove(selectedVariant);
            }

            // Update variant preview HTML.
            if (variantPreview) {
                variantPreview.innerHTML = variantsHtml;
            }
        }
    } else {
        if (updateHtml) {
            // Update variants preferences.
            if (variant.dataset.state == 'on') {
                removeVariant(component.name, variant.dataset.variant);
                updateVariantButtonState(variant, false);
            } else {
                addVariant(component.name, variant.dataset.variant);
                updateVariantButtonState(variant, true);
            }
        }
    }
};

/**
 * Update a variant button UI.
 *
 * @param {obj} variant
 * @param {bool} activate
 */
const updateVariantButtonState = (variant, activate) => {
    if (activate) {
        variant.dataset.state = 'on';
        variant.classList.remove(variant.dataset.variant + '-variant-off');
        variant.classList.add(variant.dataset.variant + '-variant-on');
        variant.classList.add('on');
    } else {
        variant.dataset.state = 'off';
        variant.classList.remove(variant.dataset.variant + '-variant-on');
        variant.classList.add(variant.dataset.variant + '-variant-off');
        variant.classList.remove('on');
    }
};

/**
 * Show/hide buttons depend on selected context.
 *
 * @param  {object} modal
 * @param  {String} context
 */
const showContextButtons = (modal, context) => {
    const showNodes = modal.getRoot()[0].querySelectorAll('button[data-type="' + context + '"]');
    const hideNodes = modal.getRoot()[0].querySelectorAll('button[data-type]:not([data-type="' + context + '"])');

    showNodes.forEach(node => node.classList.remove('c4l-hidden'));
    hideNodes.forEach(node => node.classList.add('c4l-hidden'));
};

/**
 * Replace all localized strings.
 *
 * @param  {String} text
 * @return {String} String with lang tags replaced with a localized string.
 */
const applyLangStrings = (text) => {
    const compRegex = /{{#([^}]*)}}/g;

    [...text.matchAll(compRegex)].forEach(strLang => {
        text = text.replace('{{#' + strLang[1] + '}}', langStrings.get(strLang[1]));
    });

    return text;
};

/**
 * Generates a random string.
 * @return {string} A random string
 */
const generateRandomID = () => {
    const timestamp = new Date().getTime();
    return 'R' + Math.round(Math.random() * 100000) + '-' + timestamp;
};

/**
 * Replace all ID tags with a random string.
 * @param  {String} text
 * @return {String} String with all ID tags replaced with a random string.
 */
const applyRandomID = (text) => {
    const compRegex = /{{@ID}}/g;

    if (text.match(compRegex)) {
        text = text.replace(compRegex, generateRandomID());
    }

    return text;
};

/**
 * Get language strings.
 *
 * @return {object} Language strings
 */
const getAllStrings = async() => {
    const keys = [];
    const compRegex = /{{#([^}]*)}}/g;

    Components.forEach(element => {

        // Only add name from standard components.
        if (element.name.indexOf("customcomp") == -1) {
            keys.push(element.name);
        }

        // Get lang strings from variants.
        element.variants.forEach(variant => {
            if (keys.indexOf(variant) === -1) {
                keys.push(variant);
            }
        });

        // Get lang strings from components.
        [...element.code.matchAll(compRegex)].forEach(strLang => {
            if (keys.indexOf(strLang[1]) === -1) {
                keys.push(strLang[1]);
            }
        });

        // Get lang strings from text placeholders.
        [...element.text.matchAll(compRegex)].forEach(strLang => {
            if (keys.indexOf(strLang[1]) === -1) {
                keys.push(strLang[1]);
            }
        });
    });

    const stringValues = await getStrings(keys.map((key) => ({key, component})));
    return new Map(keys.map((key, index) => ([key, stringValues[index]])));
};

/**
 * Add custom components to standard components.
 */
const addCustomComponents = () => {
    if (customComponents.length > 0) {
        customComponents.forEach(customcomp => {
            if (Components.find(element => element.id == customcomp['id'] + 1000) == undefined) {
                Components.push({
                    id: customcomp['id'] + 1000,
                    name: customcomp['name'],
                    buttonname: customcomp['buttonname'],
                    type: 'custom',
                    imageClass: 'c4l-custom-icon',
                    code: replaceCustomPlaceholders(customcomp),
                    text: customcomp['text'].length > 0 ? customcomp['text'] : '{{#textplaceholder}}',
                    variants: customcomp['variants'] ? ["full-width"] : [],
                    icon: customcomp['icon'],
                    css: customcomp['css']
                });
            }
        });
    }
};

/**
 * Replace custom placeholders with values.
 *
 * @param  {object} component
 * @return {string} HTML code.
 */
const replaceCustomPlaceholders = (component) => {
    let html = component['code'];
    const variants = component['variants'] ? " {{VARIANTS}}" : "";
    html = html.replace('{{CUSTOMCLASS}}', compPrefix + component['name'] + ' ' + compPrefix + "custom-component" + variants);

    return html;
};
