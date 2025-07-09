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
 * Tiny C4L components.
 *
 * @module      tiny_c4l/components
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

const components = [
    {
        id: "0",
        name: "keyconcept",
        type: "contextual",
        imageClass: "c4l-keyconcept-icon",
        code:
            '<p class="c4l-spacer"></p><div class="c4lv-keyconcept {{VARIANTS}}" aria-label="{{#keyconcept}}">' +
            "{{PLACEHOLDER}}</div>",
        text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor odio vel turpis consequat sodales.",
        variants: ["full-width"],
    },
    {
        id: "1",
        name: "tip",
        type: "contextual",
        imageClass: "c4l-tip-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-tip {{VARIANTS}}" aria-label="{{#tip}}">
            {{PLACEHOLDER}}</div>`,
        text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor odio vel turpis consequat sodales.",
        variants: ["full-width"],
    },
    {
        id: "2",
        name: "reminder",
        type: "contextual",
        imageClass: "c4l-reminder-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-reminder {{VARIANTS}}"
             aria-label="{{#reminder}}">
            {{PLACEHOLDER}}</div>`,
        text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor odio vel turpis consequat sodales.",
        variants: ["full-width"],
    },
    {
        id: "3",
        name: "quote",
        type: "contextual",
        imageClass: "c4l-quote-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-quote {{VARIANTS}}"
            aria-label="{{#quote}}">
            <div class="c4l-quote-body"><div class="c4l-quote-line"></div><div class="c4l-quote-text">
            <p>{{PLACEHOLDER}}</p>
            </div></div>
            {{VARIANTSHTML}}
            </div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a posuere nibh, eu mollis lacus." +
            " Praesent dictum in velit sed dapibus.",
        variants: ["full-width", "quote"],
    },
    {
        id: "4",
        name: "dodontcards",
        type: "contextual",
        imageClass: "c4l-dodontcards-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-dodontcards {{VARIANTS}}"
            aria-label="{{#dodontcards}}">
            <div class="c4l-dodontcards-do" aria-label="{{#do-card}}">{{PLACEHOLDER}}</div>
            <div class="c4l-dodontcards-dont" aria-label="{{#dont-card}}">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus a posuere nibh, eu mollis lacus.
            Praesent dictum in velit sed dapibus. Orci varius natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus.</div></div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a posuere nibh, eu mollis lacus." +
            " Praesent dictum in velit sed dapibus." +
            "Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
        variants: ["full-width"],
    },
    {
        id: "5",
        name: "readingcontext",
        type: "contextual",
        imageClass: "c4l-readingcontext-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-readingcontext {{VARIANTS}}"
            aria-label="{{#readingcontext}}">
            <p>{{PLACEHOLDER}}</p>{{VARIANTSHTML}}</div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo, hendrerit ac sem vitae," +
            " posuere egestas nisi. Lorem ipsum dolor sit amet. " +
            "Phasellus leo, hendrerit ac sem vitae, posuere egestas nisi.",
        variants: ["full-width", "quote", "comfort-reading"],
    },
    {
        id: "6",
        name: "example",
        type: "contextual",
        imageClass: "c4l-example-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-example {{VARIANTS}}"
            aria-label="{{#example}}"><h1>Lorem ipsum dolor sit amet</h1>
             <p>{{PLACEHOLDER}}</p></div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit." +
            " Phasellus a posuere nibh, eu mollis lacus." +
            " Praesent dictum in velit sed dapibus. Orci varius natoque penatibus et magnis dis parturient montes," +
            " nascetur ridiculus mus.",
        variants: ["full-width"],
    },
    {
        id: "7",
        name: "figure",
        type: "contextual",
        imageClass: "c4l-figure-icon",
        code:
            `<p class="c4l-spacer"></p><figure class="c4lv-figure {{VARIANTS}}"
            aria-label="{{#figure}}"><img src="" alt="Lorem ipsum dolor sit amet">
            {{VARIANTSHTML}}</figure>`,
        text: "Consectetur adipiscing elit.",
        variants: ["full-width", "caption"],
    },
    {
        id: "8",
        name: "tag",
        type: "contextual",
        imageClass: "c4l-tag-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-display-left" aria-label="{{#tag}}">
            <div class="c4lv-tag {{VARIANTS}}">{{PLACEHOLDER}}</div></div>`,
        text: "Lorem ipsum",
        variants: ["align-right"],
    },
    {
        id: "9",
        name: "inlinetag",
        type: "contextual",
        imageClass: "c4l-inlinetag-icon",
        code: `<span class="c4lv-inlinetag {{VARIANTS}}" aria-label="{{#inlinetag}}">{{PLACEHOLDER}}</span>`,
        text: "Text",
        variants: [],
    },
    {
        id: "10",
        name: "attention",
        type: "procedural",
        imageClass: "c4l-attention-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-attention {{VARIANTS}}" aria-label="{{#attention}}">
            {{PLACEHOLDER}}</div>`,
        text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor odio vel turpis consequat sodales.",
        variants: ["full-width"],
    },
    {
        id: "11",
        name: "estimatedtime",
        type: "procedural",
        imageClass: "c4l-estimatedtime-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-inline-group"><div class="c4lv-estimatedtime {{VARIANTS}}"
            aria-label="{{#estimatedtime}}">{{PLACEHOLDER}} <span>{{#min}}</span></div></div>`,
        text: "15",
        variants: ["align-left"],
    },
    {
        id: "12",
        name: "duedate",
        type: "procedural",
        imageClass: "c4l-duedate-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-inline-group"><div class="c4lv-duedate {{VARIANTS}}"
            aria-label="{{#duedate}}">{{PLACEHOLDER}}</div></div>`,
        text: "November 17th",
        variants: ["align-left"],
    },
    {
        id: "13",
        name: "proceduralcontext",
        type: "procedural",
        imageClass: "c4l-proceduralcontext-icon",
        code:
            `<p class="c4l-spacer"></p><p class="c4lv-proceduralcontext {{VARIANTS}}"
            aria-label="{{#proceduralcontext}}" >
            {{PLACEHOLDER}}</p>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a posuere nibh, eu mollis lacus." +
            " Praesent dictum in velit sed dapibus." +
            " Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla quis lorem aliquet," +
            " fermentum dolor ac, venenatis turpis.",
        variants: ["full-width"],
    },
    {
        id: "14",
        name: "learningoutcomes",
        type: "procedural",
        imageClass: "c4l-learningoutcomes-icon",
        code:
            `<p class="c4l-spacer"></p>
            <div class="c4lv-learningoutcomes {{VARIANTS}}" aria-label="{{#learningoutcomes}}">
            <h6 class="c4l-learningoutcomes-title">{{#learningoutcomes}}</h6>
            <ul class="c4l-learningoutcomes-list"><li>{{PLACEHOLDER}}</li><li>Curabitur non nulla sit amet
            nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</li>
            <li> Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
             Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</li></ul></div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, neque id feugiat consectetur, " +
            "enim ipsum tincidunt nunc, id suscipit mauris urna sit amet lectus.",
        variants: ["full-width", "ordered-list"],
    },
    {
        id: "15",
        name: "gradingvalue",
        type: "evaluative",
        imageClass: "c4l-gradingvalue-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-inline-group"><div class="c4lv-gradingvalue {{VARIANTS}}"
             aria-label="{{#gradingvalue}}"><span>{{#gradingvalue}}: </span>{{PLACEHOLDER}}</div></div>`,
        text: "33.3%",
        variants: ["align-left"],
    },
    {
        id: "16",
        name: "expectedfeedback",
        type: "evaluative",
        imageClass: "c4l-expectedfeedback-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-expectedfeedback {{VARIANTS}}"
            aria-label="{{#expectedfeedback}}">
            <p>{{PLACEHOLDER}}</p></div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a posuere nibh, eu mollis lacus." +
            " Praesent dictum in velit sed dapibus.",
        variants: ["full-width"],
    },
    {
        id: "17",
        name: "allpurposecard",
        type: "helper",
        imageClass: "c4l-allpurposecard-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-allpurposecard {{VARIANTS}}"
            aria-label="{{#allpurposecard}}"><p>{{PLACEHOLDER}}</p></div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a posuere nibh, eu mollis lacus." +
            " Praesent dictum in velit sed dapibus." +
            " Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
        variants: ["full-width"],
    },
];

export default {
    components,
};
