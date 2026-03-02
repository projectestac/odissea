<?php
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
 * Plugin C4L strings for language en.
 *
 * @package     tiny_c4l
 * @category    string
 * @copyright   2022 Marc Català <reskit@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalhtml'] = 'Additional HTML admin page';
$string['aimedatstudents'] = 'Aimed at Students';
$string['aimedatstudents_desc'] = 'By default, only selected components will be available for users with student capabilities when using the editor. To change the default setting, just check or uncheck you own preferred selection.';
$string['align-center'] = 'Align to center';
$string['align-left'] = 'Align to left';
$string['align-right'] = 'Align to right';
$string['allpurposecard'] = 'All-purpose card';
$string['attention'] = 'Attention';
$string['button_c4l'] = 'C4L';
$string['c4l:use'] = 'Use TinyMCE C4L';
$string['c4l:viewplugin'] = 'View C4L plugin';
$string['caption'] = 'Caption';
$string['comfort-reading'] = 'Comfort reading';
$string['conceptreview'] = 'Concept review';
$string['contextual'] = 'Contextual';
$string['custom'] = 'Custom';
$string['customcompcode'] = 'HTML code component {$a}';
$string['customcompcodedesc'] = 'The word <code>{{CUSTOMCLASS}}</code> is a mandatory class to be beside your main component CSS classes. <br />
Code example:
<pre>
&lt;div class="{{CUSTOMCLASS}} &lt;!-- Add your main CSS classes here --&gt;"&gt;
    &lt;p&gt;{{PLACEHOLDER}}&lt;/p&gt;
&lt;/div&gt;
</pre>
Be aware that any Javascript code or inline CSS will be removed before rendering.';
$string['customcompcount'] = 'Number of custom components';
$string['customcompcountdesc'] = 'Number of custom components to be created';
$string['customcompenable'] = 'Enable component {$a}';
$string['customcompenabledesc'] = 'If enabled, this component will be available.';
$string['customcompicon'] = 'Icon component {$a}';
$string['customcompicondesc'] = 'Optional icon component. Recommended size: 18x18 pixels.';
$string['customcompname'] = 'Button text component {$a}';
$string['customcompnamedesc'] = 'Text showed inside the button.';
$string['customcompsortorder'] = 'Sort order component {$a}';
$string['customcompsortorderdesc'] = 'Sets the position of the component in the UI.';
$string['customcomptext'] = 'Placeholder text component {$a}';
$string['customcomptextdesc'] = 'Text to show as a placeholder in your component. Insert the word <code>{{PLACEHOLDER}}</code> in your code.';
$string['customcomptitle'] = 'Custom component {$a}';
$string['customcomponents'] = 'Custom components';
$string['customcompvariant'] = 'Enable variants component {$a}';
$string['customcompvariantdesc'] = 'If enabled, full width variant will be available for this component.';
$string['customimagesbank'] = 'Bank of images';
$string['customimagesbankdesc'] = 'To insert any of the  uploaded images to your code, add this line:<br />
<code>&lt;img src="{{filename.extension}}" alt="Custom image"&gt;</code>';
$string['custompreviewcss'] = 'CSS code';
$string['custompreviewcssdesc'] = 'CSS used to preview components inside the editor.
<p>Any CSS code added here must be also included either to your theme or inside the style tags <code>&lt;style&gt;...&lt;style&gt;</code> and saved into the  <strong>additionalhtmlhead</strong> setting at {$a};
 otherwise your styles will not be applied to your components when rendered.</p>';
$string['do-card'] = 'Do card';
$string['docs'] = 'When to use';
$string['docs_usecases'] = 'Use cases';
$string['docs_aiuseallowed_desc'] = 'Indicates that the use of artificial intelligence tools is permitted for a specific activity or assessment.';
$string['docs_aiuseallowed_use1'] = 'AI tools may be used as part of the learning process.';
$string['docs_aiuseallowed_use2'] = 'You want to reduce ambiguity about whether AI use is acceptable.';
$string['docs_aiusenotallowed_desc'] = 'Clearly states that the use of artificial intelligence tools is prohibited for a specific activity or assessment.';
$string['docs_aiusenotallowed_use1'] = 'The assessment requires independent work.';
$string['docs_aiusenotallowed_use2'] = 'The learning objective depends on demonstrating individual competence.';
$string['docs_aiusenotallowed_use3'] = 'The task involves controlled or exam conditions.';
$string['docs_aiusereported_desc'] = 'Indicates that the use of artificial intelligence tools is permitted, but must be explicitly declared by the learner.';
$string['docs_aiusereported_use1'] = 'AI use is allowed but must be documented.';
$string['docs_aiusereported_use2'] = 'Transparency and responsible AI practices are learning objectives.';
$string['docs_aiusereported_use3'] = 'Students are expected to critically reflect on their use of AI tools.';
$string['docs_aiusereported_use4'] = 'Institutional policy requires disclosure of AI assistance.';
$string['docs_allpurposecard_desc'] = 'Provides a piece of content with its own visual context, to make it specific or different.';
$string['docs_allpurposecard_use1'] = 'In theoretical content, it sets a separated context from the main thread.';
$string['docs_allpurposecard_use2'] = 'In quizzes or other assessing/practising environments that include both theory and practice, it may be used as a container for the theory.';
$string['docs_attention_desc'] = 'Attracts the learner\'s attention to some relevant issue or information.';
$string['docs_attention_use1'] = 'To warn the learner of a relevant aspect that he must consider related to a learning subject.';
$string['docs_attention_use2'] = 'In the context of a predefined learning flow, it attracts the learner\'s attention over a recommended (or expected) way to proceed in a certain context.';
$string['docs_conceptreview_desc'] = 'Retrieves a previously learned concept that may be useful for the learner to better understand a new concept being introduced.';
$string['docs_conceptreview_use1'] = 'It helps the learner recall the relevance of a previously learned concept, making them more conscious of its role within the overall learning path.';
$string['docs_conceptreview_use2'] = 'When working with new content that involves a high cognitive load, allowing the educator to provide quick access to prior knowledge.';
$string['docs_dodontcards_desc'] = 'A comparative display where the learner can find the correct and incorrect ways to do something or conceive a particular idea in a joint visual context.';
$string['docs_dodontcards_use1'] = 'In a practical context (most often), to clarify the right/wrong way to do something.';
$string['docs_dodontcards_use2'] = 'In a theoretical context, to help the learner appreciate the differences between a good and a wrong approach to a particular concept or idea.';
$string['docs_duedate_desc'] = 'Displays the date by which some task is expected to be done by the learner.';
$string['docs_duedate_use1'] = 'To visually highlight the due date, making it easier for the learner to keep in mind.';
$string['docs_estimatedtime_desc'] = 'Displays the estimated time for the learner to perform something.';
$string['docs_estimatedtime_use1'] = 'In a theoretical context, to help the learner calculate the approximate duration of a particular content.';
$string['docs_estimatedtime_use2'] = 'In a practical context, to establish the optimal or required time to perform a task.';
$string['docs_example_desc'] = 'Displays a significative case that helps the learner comprehend a concept or idea explained in the content.';
$string['docs_example_use1'] = 'To display an example that requires some degree of elaboration.';
$string['docs_example_use2'] = 'In a practical context, to show a demo of a particular way to solve the problem.';
$string['docs_expectedfeedback_desc'] = 'Gives the learner feedback or related information on a particular task.';
$string['docs_expectedfeedback_use1'] = 'To provide the learner feedback related to the current task.';
$string['docs_expectedfeedback_use2'] = 'If not offering feedback at the moment, to indicate when the learner will receive that feedback.';
$string['docs_expectedfeedback_use3'] = 'If not offering feedback at the moment, to specify how the feedback will be and/or the requisites for receiving it.';
$string['docs_figure_desc'] = 'Integrates an image into the content flow, allowing for inserting a footnote and source attribution.';
$string['docs_figure_use1'] = 'To illustrate a concept mentioned in the content.';
$string['docs_figure_use2'] = 'To add precision or detail to a particular concept or idea.';
$string['docs_figure_use3'] = 'To help reduce the complexity of a concept that requires a significant level of abstraction to be comprehended.';
$string['docs_furtherreading_desc'] = 'A curated list of complementary resources that allow the learner to deepen, extend, or reinforce the content.';
$string['docs_furtherreading_use1'] = 'To offer optional resources for learners who wish to explore a topic in greater depth.';
$string['docs_furtherreading_use2'] = 'To complement the main content with alternative perspectives, explanations, or formats.';
$string['docs_furtherreading_use3'] = 'To support different learning preferences by providing varied types of resources.';
$string['docs_furtherreading_use4'] = 'To point to authoritative materials that reinforce key ideas.';
$string['docs_gradingvalue_desc'] = 'Displays the relative value of the grade for a particular task.';
$string['docs_gradingvalue_use1'] = 'Aimed only at practical contexts, establishes the partial value of the current task regarding the total grade.';
$string['docs_inlinetag_desc'] = 'Allows referring to a category or other taxonomies inside a paragraph.';
$string['docs_inlinetag_use1'] = 'When a category or another taxonomy has been established via the Tag component, we use the inline Tag to refer to it inside a text.';
$string['docs_inlinetag_use2'] = 'For implicit categories related to the status of the content, i.e. to indicate that a particular article has been recently added, with a tag of New.';
$string['docs_keyconcept_desc'] = 'Highlights a concept or idea.';
$string['docs_keyconcept_use1'] = 'Succinct definition of a relevant concept.';
$string['docs_keyconcept_use2'] = 'Brief synthesis of a particular concept that has been explained above.';
$string['docs_keyconcept_use3'] = 'In Science materials, to display formulas or abstract mathematical outputs.';
$string['docs_learningoutcomes_desc'] = 'Displays the expected Learning Outcomes for a learner to gain after completing a course or activity.';
$string['docs_learningoutcomes_use1'] = 'To display Learning Goals (the overall intended outcomes of a course or program).';
$string['docs_learningoutcomes_use2'] = 'To display Learning Objectives (what a learner is expected to gain after engaging in a particular learning activity).';
$string['docs_nodocsavailable_desc'] = 'No documentation available for this component.';
$string['docs_proceduralcontext_desc'] = 'Provides the learner with a detailed description of a procedure due to following in a particular context.';
$string['docs_proceduralcontext_use1'] = 'To invite the learner to take a particular action.';
$string['docs_proceduralcontext_use2'] = 'To keep the learner informed on where in his learning roadmap he is at that moment.';
$string['docs_proceduralcontext_use3'] = 'In a practical context, to detail the characteristics of an expected output.';
$string['docs_quote_desc'] = 'Highlights a textual quote by some author or work external to our content.';
$string['docs_quote_use1'] = 'To emphasise a particular concept or idea, stressing its importance or helping the learner understand its significance and ramifications.';
$string['docs_quote_use2'] = 'To show an experienced point of view of a particular matter.';
$string['docs_quote_use3'] = 'To bring context to a particular subject.';
$string['docs_quote_use4'] = 'To display informed judgements from prominent authors or historical characters.';
$string['docs_readingcontext_desc'] = 'Provides a visual context suitable for reading, applicable to fragments of text in the main content.';
$string['docs_readingcontext_use1'] = 'To make a text more readable or easily identifiable as literary or specialised.';
$string['docs_readingcontext_use2'] = 'To convey the sense of a separate context where the action of reading prevails.';
$string['docs_readingcontext_use3'] = 'To display a quote significantly longer than the common single-sentence type for which the Quote component is better suited.';
$string['docs_reminder_desc'] = 'Retrieves a particular concept that may help the learner better understand the current learning subject.';
$string['docs_reminder_use1'] = 'When introducing a new concept that requires a particular previous knowledge.';
$string['docs_reminder_use2'] = 'After explaining a complex concept, to summarise the essential part the learner is encouraged to remember.';
$string['docs_reminder_use3'] = 'Refresh the learner\'s memory regarding a theoretical concept needed to solve an exercise.';
$string['docs_tag_desc'] = 'Sets a contextual environment regarding the kind of subject, category or similar taxonomies.';
$string['docs_tag_use1'] = 'To display some content under a specific taxonomy following a different logic than the main title hierarchy.';
$string['docs_tag_use2'] = 'In a practical context, to separate concerns between the different competencies required during its implementation.';
$string['docs_tip_desc'] = 'Offers advice, suggestion or a clue.';
$string['docs_tip_use1'] = 'To offer advice or guidance (on the content itself, not learning-related procedural aspects).';
$string['docs_tip_use2'] = 'To disambiguate a concept.';
$string['docs_tip_use3'] = 'To help prevent a usual mistake (a particular concept or idea is often misunderstood or leads to confusion).';
$string['dodontcards'] = 'Do/don\'t cards';
$string['dont-card'] = 'Don\'t card';
$string['dont-card-only'] = 'Don\'t card only';
$string['duedate'] = 'Due date';
$string['enabledocs'] = 'Enable docs';
$string['enabledocs_desc'] = 'If enabled, a documentation panel is available alongside the preview.';
$string['enablepreview'] = 'Enable preview';
$string['enablepreview_desc'] = 'If enabled, a preview is showed when you hover the mouse cursor over each component.';
$string['estimatedtime'] = 'Estimated time';
$string['evaluative'] = 'Evaluative';
$string['example'] = 'Example';
$string['expectedfeedback'] = 'Expected feedback';
$string['figure'] = 'Figure';
$string['furtherreading'] = 'Further reading';
$string['full-width'] = 'Full width';
$string['generalsettings'] = 'General';
$string['aiuseallowed'] = 'AI use allowed';
$string['aiusenotallowed'] = 'AI use not allowed';
$string['aiusereported'] = 'AI use reported';
$string['gradingvalue'] = 'Grading value';
$string['helper'] = 'Helper';
$string['helplinktext'] = 'C4L helper';
$string['inlinetag'] = 'Inline tag';
$string['keyconcept'] = 'Key concept';
$string['learningoutcomes'] = 'Learning outcomes';
$string['menuitem_c4l'] = 'Components for Learning (C4L)';
$string['min'] = 'min';
$string['notintendedforstudents'] = 'Not intended for Students ';
$string['notintendedforstudents_desc'] = 'By default, evaluative and procedural components are not intended for users with student capabilities to use in the editor. To change the default setting, check the components you would like to make available to the students.';
$string['ordered-list'] = 'Ordered items';
$string['pluginname'] = 'Components for Learning (C4L)';
$string['preview'] = 'Preview';
$string['previewdefault'] = 'Place the pointer on any component to see its preview.';
$string['previewdocsdefault'] = 'Place the pointer on any component to see its recomended use cases.';
$string['privacy:preference:components_variants'] = 'Preferred variants of each component';
$string['procedural'] = 'Procedural';
$string['proceduralcontext'] = 'Procedural context';
$string['quote'] = 'Quote';
$string['readingcontext'] = 'Reading context';
$string['reminder'] = 'Reminder';
$string['tag'] = 'Tag';
$string['textplaceholder'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$string['tip'] = 'Tip';
