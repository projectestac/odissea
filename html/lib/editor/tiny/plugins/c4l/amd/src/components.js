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
        docs: {
            description: "{{#docs_keyconcept_desc}}",
            useCases: [
                "{{#docs_keyconcept_use1}}",
                "{{#docs_keyconcept_use2}}",
                "{{#docs_keyconcept_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_tip_desc}}",
            useCases: [
                "{{#docs_tip_use1}}",
                "{{#docs_tip_use2}}",
                "{{#docs_tip_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_reminder_desc}}",
            useCases: [
                "{{#docs_reminder_use1}}",
                "{{#docs_reminder_use2}}",
                "{{#docs_reminder_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_quote_desc}}",
            useCases: [
                "{{#docs_quote_use1}}",
                "{{#docs_quote_use2}}",
                "{{#docs_quote_use3}}",
                "{{#docs_quote_use4}}",
            ],
        },
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
        docs: {
            description: "{{#docs_dodontcards_desc}}",
            useCases: [
                "{{#docs_dodontcards_use1}}",
                "{{#docs_dodontcards_use2}}",
            ],
        },
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
        docs: {
            description: "{{#docs_readingcontext_desc}}",
            useCases: [
                "{{#docs_readingcontext_use1}}",
                "{{#docs_readingcontext_use2}}",
                "{{#docs_readingcontext_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_example_desc}}",
            useCases: [
                "{{#docs_example_use1}}",
                "{{#docs_example_use2}}",
            ],
        },
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
        docs: {
            description: "{{#docs_figure_desc}}",
            useCases: [
                "{{#docs_figure_use1}}",
                "{{#docs_figure_use2}}",
                "{{#docs_figure_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_tag_desc}}",
            useCases: [
                "{{#docs_tag_use1}}",
                "{{#docs_tag_use2}}",
            ],
        },
        variants: ["align-right"],
    },
    {
        id: "9",
        name: "inlinetag",
        type: "contextual",
        imageClass: "c4l-inlinetag-icon",
        code: `<span class="c4lv-inlinetag {{VARIANTS}}" aria-label="{{#inlinetag}}">{{PLACEHOLDER}}</span>`,
        text: "Text",
        docs: {
            description: "{{#docs_inlinetag_desc}}",
            useCases: [
                "{{#docs_inlinetag_use1}}",
                "{{#docs_inlinetag_use2}}",
            ],
        },
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
        docs: {
            description: "{{#docs_attention_desc}}",
            useCases: [
                "{{#docs_attention_use1}}",
                "{{#docs_attention_use2}}",
            ],
        },
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
        docs: {
            description: "{{#docs_estimatedtime_desc}}",
            useCases: [
                "{{#docs_estimatedtime_use1}}",
                "{{#docs_estimatedtime_use2}}",
            ],
        },
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
        docs: {
            description: "{{#docs_duedate_desc}}",
            useCases: [
                "{{#docs_duedate_use1}}",
            ],
        },
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
        docs: {
            description: "{{#docs_proceduralcontext_desc}}",
            useCases: [
                "{{#docs_proceduralcontext_use1}}",
                "{{#docs_proceduralcontext_use2}}",
                "{{#docs_proceduralcontext_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_learningoutcomes_desc}}",
            useCases: [
                "{{#docs_learningoutcomes_use1}}",
                "{{#docs_learningoutcomes_use2}}",
            ],
        },
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
        docs: {
            description: "{{#docs_gradingvalue_desc}}",
            useCases: [
                "{{#docs_gradingvalue_use1}}",
            ],
        },
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
        docs: {
            description: "{{#docs_expectedfeedback_desc}}",
            useCases: [
                "{{#docs_expectedfeedback_use1}}",
                "{{#docs_expectedfeedback_use2}}",
                "{{#docs_expectedfeedback_use3}}",
            ],
        },
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
        docs: {
            description: "{{#docs_allpurposecard_desc}}",
            useCases: [
                "{{#docs_allpurposecard_use1}}",
                "{{#docs_allpurposecard_use2}}",
            ],
        },
        variants: ["full-width"],
    },
    {
        id: "18",
        name: "conceptreview",
        type: "contextual",
        imageClass: "c4l-conceptreview-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4lv-conceptreview {{VARIANTS}}" aria-label="{{#conceptreview}}">
            <h6 class="c4l-concept-review-title">{{#conceptreview}}</h6>{{PLACEHOLDER}}</div>`,
        text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor odio vel turpis consequat sodales.",
        docs: {
            description: "{{#docs_conceptreview_desc}}",
            useCases: [
                "{{#docs_conceptreview_use1}}",
                "{{#docs_conceptreview_use2}}",
            ],
        },
        variants: ["full-width"],
    },
    {
        id: "19",
        name: "furtherreading",
        type: "contextual",
        imageClass: "c4l-furtherreading-icon",
        code:
            `<p class="c4l-spacer"></p>
            <div class="c4lv-furtherreading {{VARIANTS}}" aria-label="{{#furtherreading}}">
            <h6 class="c4l-further-reading-title">{{#furtherreading}}</h6>
            <ul class="c4l-furtherreading-list"><li>{{PLACEHOLDER}}</li><li>Curabitur non nulla sit amet
            nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</li>
            <li> Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
             Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</li></ul></div>`,
        text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, neque id feugiat consectetur, " +
            "enim ipsum tincidunt nunc, id suscipit mauris urna sit amet lectus.",
        docs: {
            description: "{{#docs_furtherreading_desc}}",
            useCases: [
                "{{#docs_furtherreading_use1}}",
                "{{#docs_furtherreading_use2}}",
                "{{#docs_furtherreading_use3}}",
                "{{#docs_furtherreading_use4}}",
            ],
        },
        variants: ["full-width"],
    },
    {
        id: "20",
        name: "aiuseallowed",
        type: "evaluative",
        imageClass: "c4l-aiuseallowed-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-inline-group"><div class="c4lv-aiuseallowed {{VARIANTS}}"
             aria-label="{{#aiuseallowed}}">{{PLACEHOLDER}}</div></div>`,
        text: "Use of AI is <strong>allowed</strong>",
        docs: {
            description: "{{#docs_aiuseallowed_desc}}",
            useCases: [
                "{{#docs_aiuseallowed_use1}}",
                "{{#docs_aiuseallowed_use2}}",
            ],
        },
        variants: ["align-left"],
    },
    {
        id: "21",
        name: "aiusenotallowed",
        type: "evaluative",
        imageClass: "c4l-aiusenotallowed-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-inline-group"><div class="c4lv-aiusenotallowed {{VARIANTS}}"
             aria-label="{{#aiusenotallowed}}">{{PLACEHOLDER}}</div></div>`,
        text: "Use of AI is <strong>not allowed</strong>",
        docs: {
            description: "{{#docs_aiusenotallowed_desc}}",
            useCases: [
                "{{#docs_aiusenotallowed_use1}}",
                "{{#docs_aiusenotallowed_use2}}",
                "{{#docs_aiusenotallowed_use3}}",
            ],
        },
        variants: ["align-left"],
    },
    {
        id: "22",
        name: "aiusereported",
        type: "evaluative",
        imageClass: "c4l-aiusereported-icon",
        code:
            `<p class="c4l-spacer"></p><div class="c4l-inline-group"><div class="c4lv-aiusereported {{VARIANTS}}"
             aria-label="{{#aiusereported}}">{{PLACEHOLDER}}</div></div>`,
        text: "Use of AI must be <strong>reported</strong>",
        docs: {
            description: "{{#docs_aiusereported_desc}}",
            useCases: [
                "{{#docs_aiusereported_use1}}",
                "{{#docs_aiusereported_use2}}",
                "{{#docs_aiusereported_use3}}",
                "{{#docs_aiusereported_use4}}",
            ],
        },
        variants: ["align-left"],
    },
];

export default {
    components,
};
