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
 * Strings for component 'elang', language 'en', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'Allowed content languages';
$string['allowedlanguages_desc'] = 'The content languages offered when creating or editing a video dictation. Select none to offer the full language list. An activity keeps its stored language even if you later remove it here.';
$string['allowtranscriptdownload'] = 'Transcript download for learners';
$string['allowtranscriptdownload_help'] = 'When enabled, learners can download the transcript worksheet, with every gap blanked out, as a PDF, Word, OpenDocument or text file.

This is off by default. Teachers can always download the transcript regardless of this setting.';
$string['allowtranscriptdownload_label'] = 'Learners may download the worksheet';
$string['completiondetail_completionfinishattempt'] = 'Finish an attempt';
$string['completionfinishattempt'] = 'Student must finish an attempt';
$string['cuepausemode'] = 'Playback at subtitle boundaries';
$string['cuepausemode_auto'] = 'Automatic';
$string['cuepausemode_help'] = 'Whether the medium stops at the end of a subtitle.

* Automatic — playback runs on, and stops at the end of a subtitle only while that subtitle is being worked on, that is after clicking it or one of its gaps, or moving the keyboard focus into one.
* Stop at every unanswered subtitle — playback stops at the end of each subtitle that still has an empty gap, and waits to be resumed.
* Never stop — playback runs through to the end of the medium.

Neither of the first two stops at a subtitle whose gaps are all filled in: that is finished work, and stopping there would ask for a keypress that achieves nothing. This also means the second run through an exercise stops only where something is still missing.';
$string['cuepausemode_nostop'] = 'Never stop';
$string['cuepausemode_stop'] = 'Stop at every unanswered subtitle';
$string['editcontent'] = 'Edit content';
$string['editor_addcue'] = 'Add subtitle';
$string['editor_addgap'] = 'Mark gap from selection';
$string['editor_addhint'] = 'Add hint';
$string['editor_addvariant'] = 'Add variant';
$string['editor_advanced'] = 'Advanced settings';
$string['editor_algoexact'] = 'Exact match';
$string['editor_algorithm'] = 'Matching';
$string['editor_algowordrecognized'] = 'Recognise close answers';
$string['editor_answers'] = 'Accepted variants';
$string['editor_autosaved'] = 'All changes saved.';
$string['editor_autosaveerror'] = 'Could not save automatically — use Save to retry.';
$string['editor_captureend'] = 'Set end from playback';
$string['editor_capturestart'] = 'Set start from playback';
$string['editor_cueactions'] = 'Subtitle actions';
$string['editor_cuecount'] = 'Subtitles: {$a}';
$string['editor_cuenotsaved'] = 'Not saved';
$string['editor_currentmedia'] = 'Current medium:';
$string['editor_deletecue'] = 'Delete subtitle';
$string['editor_deletegap'] = 'Delete gap';
$string['editor_emptytranscript'] = '(no text yet)';
$string['editor_endtime'] = 'End time';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Gaps: {$a}';
$string['editor_gaphasalternatives'] = 'has accepted variants';
$string['editor_gaphashints'] = 'has hints';
$string['editor_gapmode_exact'] = 'exact match';
$string['editor_gapmode_wordrecognized'] = 'close answers accepted';
$string['editor_gaprange'] = 'Gap position (characters)';
$string['editor_gapunplaceable_outofrange'] = 'This gap is outside the transcript and cannot be shown in place.';
$string['editor_gapunplaceable_overlap'] = 'This gap overlaps another and cannot be shown in place.';
$string['editor_gotomedia'] = 'Go to Media';
$string['editor_heading'] = 'Edit subtitles and gaps';
$string['editor_hints'] = 'Hints';
$string['editor_hinttext'] = 'Hint text';
$string['editor_hinttype'] = 'Type';
$string['editor_hinttype_firstletter'] = 'First letter';
$string['editor_hinttype_partial'] = 'Partial';
$string['editor_hinttype_solution'] = 'Solution';
$string['editor_hinttype_text'] = 'Free text';
$string['editor_hinttype_translation'] = 'Translation';
$string['editor_hinttype_wordlength'] = 'Word length';
$string['editor_import'] = 'Import subtitles';
$string['editor_importappend'] = 'Append to existing subtitles';
$string['editor_importapply'] = 'Import';
$string['editor_importcancel'] = 'Cancel';
$string['editor_importcheck'] = 'Check content';
$string['editor_importchecking'] = 'Checking…';
$string['editor_importcuecount'] = 'Subtitles found';
$string['editor_importduration'] = 'Duration';
$string['editor_importedcues'] = 'Subtitles imported: {$a}';
$string['editor_importfilehint'] = 'Choose a WebVTT (.vtt) or SubRip (.srt) file with subtitles.';
$string['editor_importformat'] = 'Format';
$string['editor_importfromfile'] = 'Upload file';
$string['editor_importfromtext'] = 'Paste text';
$string['editor_importgapcount'] = 'Gaps found';
$string['editor_importhint'] = 'Paste WebVTT or SubRip content, then import it as subtitles.';
$string['editor_importparseerror'] = 'This content could not be read as WebVTT or SubRip.';
$string['editor_importpastedtext'] = 'Pasted text';
$string['editor_importreaderror'] = 'The file could not be read.';
$string['editor_importready'] = 'Ready to import';
$string['editor_importreplace'] = 'Replace all subtitles';
$string['editor_importreplacedcues'] = 'Subtitles replaced; newly imported: {$a}';
$string['editor_importsource'] = 'Source';
$string['editor_importsummary'] = 'What was found';
$string['editor_importtoolarge'] = 'This file is {$a->size}; the import accepts at most {$a->max}.';
$string['editor_importwrongtype'] = 'Choose a subtitle file ({$a}).';
$string['editor_insertafter'] = 'Insert subtitle after';
$string['editor_insertbefore'] = 'Insert subtitle before';
$string['editor_invalidtime'] = 'Enter a time as mm:ss.SSS, for example 01:05.400.';
$string['editor_linkurl'] = 'Reference link';
$string['editor_linkurl_help'] = 'Shown beside the gap as a place to look the word up. Leave empty for none.';
$string['editor_loaderror'] = 'The editor could not be loaded. Please reload the page.';
$string['editor_loading'] = 'Loading the editor…';
$string['editor_maxlength'] = 'Maximum length';
$string['editor_maxlength_help'] = 'Caps how much a learner can type. 0 means no limit.';
$string['editor_media'] = 'Media';
$string['editor_mediafile'] = 'Uploaded file';
$string['editor_mediakind'] = 'Medium type';
$string['editor_medianone'] = 'None';
$string['editor_mediaprovider'] = 'Provider';
$string['editor_mediaproviderref'] = 'Provider reference';
$string['editor_mediaproviderrefhint'] = 'Video ID or link in any common form (e.g. youtu.be/…).';
$string['editor_mediasaved'] = 'Medium saved.';
$string['editor_mediaurl'] = 'Direct URL';
$string['editor_nocues'] = 'No subtitles yet. Add one or import subtitles.';
$string['editor_nocueselected'] = 'Select a subtitle from the list to edit it.';
$string['editor_nocuesmatch'] = 'No subtitle matches this search.';
$string['editor_nogaps'] = 'No gaps';
$string['editor_nomedia'] = 'none';
$string['editor_nomedianotice'] = 'Add the video or audio file on the Media tab first. Subtitles are timed against the medium, so the editor needs one before you can work on subtitles and gaps.';
$string['editor_novideotrack'] = 'This browser cannot decode the video track of this medium (only the audio plays); learners would see a black picture. Please re-encode the file as H.264/MP4 (e.g. with ffmpeg or HandBrake) and upload it again.';
$string['editor_onboardinggaps'] = 'Select a word in a subtitle and mark it as a gap.';
$string['editor_onboardingimport'] = 'Import WebVTT or SubRip subtitles, or add subtitles by hand.';
$string['editor_onboardingintro'] = 'Build an exercise in three steps:';
$string['editor_onboardingmedia'] = 'Choose a medium (upload, URL or provider).';
$string['editor_onboardingtitle'] = 'Start your exercise';
$string['editor_onlywarnings'] = 'Only subtitles with warnings';
$string['editor_parsegaps'] = 'Recognise gap markers: [word] creates a gap with hints allowed, {word} one without.';
$string['editor_penalty'] = 'Penalty';
$string['editor_poster'] = 'Poster image';
$string['editor_preview'] = 'Learner preview';
$string['editor_problem_afterduration'] = 'The end time is after the end of the medium.';
$string['editor_problem_endbeforestart'] = 'The end time is at or before the start time.';
$string['editor_problem_negativestart'] = 'The start time is before the beginning of the recording.';
$string['editor_publish'] = 'Publish';
$string['editor_publishblocked'] = 'Some cues cannot be saved yet. Fix them before publishing.';
$string['editor_published'] = 'Version published.';
$string['editor_removehint'] = 'Remove hint';
$string['editor_removevariant'] = 'Remove';
$string['editor_repaircue'] = 'Correct the end time';
$string['editor_ruleapplied'] = 'Created %count% gaps from the rule.';
$string['editor_ruleapply'] = 'Apply %count% gaps';
$string['editor_ruleerror'] = 'The gaps could not be generated.';
$string['editor_ruleeverynth'] = 'Every nth word';
$string['editor_rulefound'] = 'The rule found %count% gaps.';
$string['editor_rulegenerate'] = 'Generate gaps';
$string['editor_ruleinterval'] = 'Interval (n)';
$string['editor_ruletype'] = 'Gap rule';
$string['editor_rulewordlist'] = 'Words to blank out';
$string['editor_rulewords'] = 'Word list';
$string['editor_save'] = 'Save draft';
$string['editor_saved'] = 'Draft saved.';
$string['editor_savedwithproblems'] = 'Saved what could be saved; some cues need attention.';
$string['editor_saveerror'] = 'The draft could not be saved.';
$string['editor_savemedia'] = 'Save medium';
$string['editor_saving'] = 'Saving…';
$string['editor_searchcues'] = 'Search subtitles';
$string['editor_selecttext'] = 'Select the word to blank out in the transcript first.';
$string['editor_solution'] = 'Solution';
$string['editor_starttime'] = 'Start time';
$string['editor_transcript'] = 'Transcript';
$string['editor_unsaved'] = 'Unsaved changes';
$string['editor_uploadmedia'] = 'Upload media files';
$string['editor_variantisregex'] = 'Treat {$a} as a regular expression';
$string['editor_variantmatching'] = 'How the accepted variants are matched';
$string['editor_warnemptysolution'] = 'A gap has no solution';
$string['editor_warnnotranscript'] = 'No text';
$string['editor_warntiming'] = 'End is not after start';
$string['editor_waveform'] = 'Audio waveform';
$string['elang:addinstance'] = 'Add a new video dictation';
$string['elang:attempt'] = 'Attempt a video dictation';
$string['elang:deleteattempts'] = 'Delete learner attempts';
$string['elang:exportreports'] = 'Export reports containing personal data';
$string['elang:exportsolution'] = 'Export the full transcript with answers';
$string['elang:exporttranscript'] = 'Export the transcript worksheet as a document';
$string['elang:manage'] = 'Create and edit exercise content';
$string['elang:useregex'] = 'Use regular expressions in accepted answers';
$string['elang:view'] = 'View a video dictation';
$string['elang:viewreports'] = 'View learner reports';
$string['error_attemptnotinprogress'] = 'This attempt is no longer in progress.';
$string['error_couldnotobtainlock'] = 'Could not obtain a lock for this operation. Please try again.';
$string['error_draftrevisionmismatch'] = 'This draft was changed since you loaded it. Please reload and try again.';
$string['error_duplicatecuekey'] = 'Two cues share the key \'{$a}\'; each cue needs a unique key.';
$string['error_duplicategapkey'] = 'Two gaps in one cue share the key \'{$a}\'; each gap needs a unique key.';
$string['error_duplicatehintlevel'] = 'A gap has two hints at level {$a}; each hint level must be unique.';
$string['error_gapnotinattemptversion'] = 'This gap does not belong to the exercise version of this attempt.';
$string['error_importnocues'] = 'No subtitles could be read from this content. A WebVTT or SubRip file has a timestamp line such as 00:00:01.000 --> 00:00:04.000 above each subtitle.';
$string['error_importnotutf8'] = 'This file is not valid UTF-8. It was probably saved in an older encoding — open it in a text editor and save it again as UTF-8.';
$string['error_importtoolarge'] = 'This file is {$a->size}; the import accepts at most {$a->max}. A subtitle file for a lesson recording is far smaller, so this is unlikely to be one.';
$string['error_importtoomanycues'] = 'This file contains {$a->count} subtitles; the import accepts at most {$a->max}.';
$string['error_invalidcuepausemode'] = 'Choose one of the offered options for playback at subtitle boundaries.';
$string['error_invalidgradingalgorithm'] = 'The grading algorithm \'{$a}\' is not one of exact or wordrecognized.';
$string['error_invalidhinttype'] = 'The hint type \'{$a}\' is not one of the allowed hint types.';
$string['error_invalidisregex'] = 'The regex marker of an answer variant must be 0 or 1.';
$string['error_invalidmediakind'] = 'The chosen media kind is not one of file, url or provider.';
$string['error_invalidpenalty'] = 'A hint penalty must be between 0 and 1.';
$string['error_invalidproviderref'] = '\'{$a}\' is not a recognised video ID or link for this provider.';
$string['error_invalidregexpattern'] = '\'{$a}\' is not a valid regular expression.';
$string['error_invalidsolutionavailability'] = 'Choose one of the offered options for when learners may see the solution transcript.';
$string['error_invalidsourceurl'] = 'Enter a full address starting with http:// or https://, or a YouTube or Vimeo link.';
$string['error_invalidsubtitleposition'] = 'Choose one of the offered options for where the subtitles are shown.';
$string['error_invalidv1cuejson'] = 'This version 1 cue could not be parsed.';
$string['error_negativegapoffset'] = 'A gap offset and length must not be negative.';
$string['error_noaccesstoattempt'] = 'You do not have access to this attempt.';
$string['error_nomorehints'] = 'No further hints are available for this gap.';
$string['error_nopublishedversion'] = 'This exercise has no published content yet.';
$string['error_responsetoolong'] = 'Your response is too long. The maximum for this gap is {$a} characters.';
$string['error_solutionnotavailable'] = 'The full transcript with answers is not available to you in this activity.';
$string['error_staleattemptstate'] = 'Your view of this attempt is out of date. Please reload the current state and try again.';
$string['error_transcriptnotavailable'] = 'There is no transcript available for you to download in this activity.';
$string['error_unknowngaprule'] = 'Unknown gap rule type \'{$a}\'.';
$string['error_unknownmediaprovider'] = '\'{$a}\' is not one of the supported media providers.';
$string['error_versionnotadraft'] = 'Only a draft version can be edited.';
$string['error_versionnotfound'] = 'That exercise version no longer exists.';
$string['error_versionnotpublishable'] = 'This version cannot be published: {$a}';
$string['export_audienceaftersubmission'] = 'Learners can download this once they have finished an attempt';
$string['export_audiencealways'] = 'Learners can download this at any time';
$string['export_audiencestaff'] = 'Teaching staff with permission only — not available to learners';
$string['export_docx'] = 'Download as Word (DOCX)';
$string['export_downloadpdf'] = 'Download PDF';
$string['export_heading'] = 'Export transcript';
$string['export_intro'] = 'Download the transcript of this exercise in several formats.';
$string['export_moreformats'] = 'More formats';
$string['export_nocontent'] = 'There is no published transcript to export yet.';
$string['export_odt'] = 'Download as OpenDocument (ODT)';
$string['export_pdf'] = 'Download as PDF';
$string['export_solution'] = 'Full transcript with answers';
$string['export_solutionhint'] = 'The complete transcript with every gap solution shown.';
$string['export_text'] = 'Download as text';
$string['export_versionnote'] = 'Exports are based on the currently published version of this exercise.';
$string['export_worksheet'] = 'Worksheet (gaps blanked out)';
$string['export_worksheethint'] = 'The text with every gap blanked out. Ready to hand out as learner material.';
$string['exporttranscript'] = 'Export transcript';
$string['filearea_media'] = 'Media';
$string['filearea_poster'] = 'Poster image';
$string['gradingheading'] = 'Answer grading';
$string['import_badtiming'] = 'Could not read the timing line: {$a}';
$string['import_emptytranscript'] = 'Skipped a cue with no transcript text.';
$string['import_warnlinetoolong'] = 'Block {$a->block} was skipped: it contains a line longer than {$a->max} characters, which is not a subtitle line.';
$string['jarothreshold'] = 'Similarity threshold';
$string['jarothreshold_help'] = 'For gaps set to "Recognise close answers", this is the minimum Jaro similarity between the expected answer and the one typed. 1 requires an exact match after the language-specific normalisation; lower values accept increasingly different spellings.';
$string['jarothresholdrange'] = 'The threshold must be between 0 and 1.';
$string['language'] = 'Content language';
$string['language_help'] = 'Choose the language of the exercise content. It controls how answers are compared, including case folding and transliteration. Choose "Generic (not specified)" when no language-specific handling should be used. New content versions start from this setting.';
$string['language_none'] = 'Generic (not specified)';
$string['media_cuenote'] = 'Existing subtitles and gaps are kept when you change the medium. Their timings are not adjusted, so check them in the editor afterwards.';
$string['media_current'] = 'Current medium';
$string['media_heading'] = 'Media';
$string['media_intro'] = 'Choose the video or audio this exercise is built on. Subtitles are timed against it, so this comes first.';
$string['media_none'] = 'No medium has been set for this exercise yet.';
$string['media_othersource'] = 'Other source';
$string['media_providerhint'] = 'Recognised providers: {$a}. Any other address is used as a direct media URL.';
$string['media_sourceurl'] = 'Source address';
$string['media_sourceurl_help'] = 'Paste the address of a video instead of uploading a file — a YouTube or Vimeo link, or a direct address of a media file.

An address entered here replaces an uploaded file. Leave it empty to use the upload above.

A provider video is played in the provider\\\'s own frame, which does not report its playback time. Such an exercise always shows the subtitles below the medium and never stops at subtitle boundaries.

**Where the data goes.** A YouTube or Vimeo frame connects each learner\\\'s browser to that company, which then receives their IP address and device details. By default the exercise asks before it does so. If your institution runs its own media server — Opencast, Panopto, Kaltura or similar — paste the direct address of the file from there instead: it is treated as a plain media URL, keeps the subtitle position and pause settings you chose, and no third party is involved.';
$string['migratev1_approvalheading'] = 'Migrated, awaiting review';
$string['migratev1_approvebutton'] = 'Approve this migration';
$string['migratev1_approved'] = 'The video dictation {$a} has been marked as approved.';
$string['migratev1_colactivity'] = 'Activity';
$string['migratev1_colalgorithm'] = 'Grading algorithm';
$string['migratev1_colcues'] = 'Subtitles';
$string['migratev1_colgaps'] = 'Gaps';
$string['migratev1_colissues'] = 'Issues';
$string['migratev1_collearners'] = 'Learners';
$string['migratev1_confirmdecommission'] = 'This IRREVERSIBLY drops the version 1 legacy tables and elang.options. There is no undo. Continue?';
$string['migratev1_confirmmigrate'] = 'This will queue a background task that writes new version 2 data for every activity listed above. The version 1 tables and elang.options are left untouched. Continue?';
$string['migratev1_decommissionblocked'] = 'Decommissioning is still blocked; see the list below.';
$string['migratev1_decommissionblockedintro'] = 'Decommissioning is blocked until:';
$string['migratev1_decommissionbutton'] = 'Drop version 1 legacy data';
$string['migratev1_decommissioned'] = 'Version 1 legacy data has been dropped.';
$string['migratev1_decommissionheading'] = 'Decommission version 1 data';
$string['migratev1_decommissionready'] = 'Every version 1 activity has been migrated and approved. The version 1 legacy tables and elang.options can now be dropped. This is irreversible.';
$string['migratev1_heading'] = 'Migrate version 1 activities';
$string['migratev1_migratebutton'] = 'Migrate these activities';
$string['migratev1_noissues'] = 'None';
$string['migratev1_nonepending'] = 'No version 1 activities are waiting to be migrated.';
$string['migratev1_nonependingapproval'] = 'No migrated activities are waiting for review.';
$string['migratev1_notablespresent'] = 'No version 1 legacy tables were found on this site. There is nothing to migrate.';
$string['migratev1_parseerrorcount'] = 'Subtitles that could not be parsed: {$a}';
$string['migratev1_pendingheading'] = 'Not yet migrated';
$string['migratev1_queued'] = 'The migration task has been queued. It will run on the next cron pass, or immediately via admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'Verified: the migrated data matches the version 1 source with no discrepancies.';
$string['migratev1_verifieddiscrepancies'] = 'Verification found discrepancies against the version 1 source: {$a}';
$string['migratev1_verifyfailed'] = 'Could not verify this activity: {$a}';
$string['modulename'] = 'Video dictation';
$string['modulename_help'] = 'The video dictation activity lets learners fill in gaps in time-coded subtitles while watching or listening to a video.

Teachers import a WebVTT or SubRip subtitle file, mark words or phrases as gaps, and configure how strictly answers are compared. Learners work through the transcript segment by segment, request graded hints and receive immediate feedback.';
$string['modulenameplural'] = 'Video dictations';
$string['nav_exportshort'] = 'Export';
$string['nav_media'] = 'Media';
$string['nav_reports'] = 'Attempts';
$string['nav_subtitles'] = 'Subtitles & gaps';
$string['noinstances'] = 'There are no video dictations in this course.';
$string['overview_attempts'] = 'Attempts';
$string['playbackheading'] = 'Playback and subtitles';
$string['playbackoverlayhint'] = 'A caption over the picture shows only the subtitle currently playing, so playback always pauses at the end of a subtitle that still has gaps to fill. There is nothing to choose here.';
$string['playbackproviderhint'] = 'A YouTube or Vimeo video is played by the provider in its own frame, which does not report its playback time. Such an exercise always shows the subtitles below the medium and never stops at subtitle boundaries, whatever is chosen above. Uploaded files and direct media URLs honour both settings.';
$string['player_check'] = 'Check answer';
$string['player_consentaccept'] = 'Load the video from {$a}';
$string['player_consentdetail'] = 'Playing it connects your browser to {$a}. {$a} receives your IP address and information about your device, and may read cookies it has already set. Nothing is sent until you choose to load the video.';
$string['player_consentheading'] = 'This video is provided by {$a}';
$string['player_exitfullscreen'] = 'Leave full screen';
$string['player_finish'] = 'Finish attempt';
$string['player_finished'] = 'Attempt finished. Score: %score%%';
$string['player_finishincomplete'] = 'Empty gaps remaining: {$a}. Finish the attempt anyway?';
$string['player_fullscreen'] = 'Full screen';
$string['player_gaplabel'] = 'Gap %gap%';
$string['player_gaplink'] = 'Open link';
$string['player_hint'] = 'Show a hint';
$string['player_loaderror'] = 'The exercise could not be loaded. Please reload the page.';
$string['player_loading'] = 'Loading the exercise…';
$string['player_nocontent'] = 'No exercise content has been published yet. Please check back later.';
$string['player_novideotrack'] = 'Your browser cannot display the video track of this medium; the audio will still play. Please inform your teacher.';
$string['player_outdatedattempt'] = 'This exercise has been updated since you started this attempt. You are continuing on the earlier content; finish this attempt to work with the updated exercise next time.';
$string['player_progress'] = '{$a->done} of {$a->total} gaps answered';
$string['player_ready'] = 'Exercise ready.';
$string['player_scorelabel'] = 'Score: %score%%';
$string['player_stateaccepted'] = 'Accepted';
$string['player_statecorrect'] = 'Correct';
$string['player_statehinted'] = 'Hint used';
$string['player_stateincorrect'] = 'Incorrect';
$string['player_submitfailed'] = 'Your answer could not be saved. Please try again.';
$string['player_transcriptheading'] = 'Transcript';
$string['pluginadministration'] = 'Video dictation administration';
$string['pluginname'] = 'Video dictation';
$string['privacy_metadata_elang'] = 'For each activity, the record of who signed off the one-way migration of its 1.x content.';
$string['privacy_metadata_elang_attempt'] = 'For each attempt at an exercise, the activity stores who made it, when, how far it got, and how it was scored.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'How many gaps the learner has answered in this attempt.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'The sequential number of this attempt for the user and activity.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'How many gaps were accepted as correct in this attempt.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'How many gaps were answered with a character-perfect match in this attempt.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'How many gaps the learner requested a hint for in this attempt.';
$string['privacy_metadata_elang_attempt_score'] = 'The score achieved in this attempt.';
$string['privacy_metadata_elang_attempt_state'] = 'Whether the attempt is in progress, finished, or abandoned.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'The time the attempt was finished.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'The time the attempt was last updated.';
$string['privacy_metadata_elang_attempt_timestart'] = 'The time the attempt was started.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'The total number of gaps in the exercise version this attempt is on.';
$string['privacy_metadata_elang_attempt_userid'] = 'The id of the user who made the attempt.';
$string['privacy_metadata_elang_attempt_versionid'] = 'The exercise version this attempt was made against.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'The user who approved the migration of this activity from mod_elang 1.x. Stored so the sign-off remains auditable.';
$string['privacy_metadata_elang_response'] = 'For each gap a learner answers within an attempt, the activity stores the response text and how it was evaluated.';
$string['privacy_metadata_elang_response_accepted'] = 'Whether the response was accepted as correct for this gap.';
$string['privacy_metadata_elang_response_hintlevel'] = 'The highest hint level revealed to the learner for this gap.';
$string['privacy_metadata_elang_response_responsetext'] = 'The text the learner typed for this gap.';
$string['privacy_metadata_elang_response_resultstate'] = 'The classification the evaluator found for this response (exact, word-recognised, incorrect or empty).';
$string['privacy_metadata_elang_response_score'] = 'The points this response contributed, after any hint penalty.';
$string['privacy_metadata_elang_response_timecreated'] = 'The time this response was first submitted.';
$string['privacy_metadata_elang_response_timemodified'] = 'The time this response was last updated.';
$string['privacy_metadata_elang_response_tries'] = 'How many times the learner submitted a response to this gap.';
$string['privacy_metadata_elang_version'] = 'For each content version, the activity stores which user last modified it.';
$string['privacy_metadata_elang_version_usermodified'] = 'The user who last modified this content version. Stored for auditing who edited the exercise content.';
$string['privacy_provider_externallink'] = 'When an exercise is built on a YouTube or Vimeo video, opening it connects the learner\\\'s browser to that provider. The plugin sends nothing itself, but the connection is caused by the activity. Whether it happens at all depends on the site setting for provider consent and on the learner agreeing.';
$string['privacy_provider_ipaddress'] = 'The IP address the learner\\\'s browser connects from.';
$string['privacy_provider_useragent'] = 'The browser and device details the browser sends.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'Ask before embedding YouTube or Vimeo';
$string['providerconsent_desc'] = 'Exercises built on a YouTube or Vimeo video show a notice instead of the video, and embed it only after the learner agrees. Without this, the provider receives the learner\\\'s IP address and browser details as soon as the page opens — before anyone presses play. Turn it off only if your institution obtains this consent elsewhere.';
$string['report_actions'] = 'Actions';
$string['report_answered'] = 'Answered';
$string['report_attemptnumber'] = 'Attempt';
$string['report_back'] = 'Back to all attempts';
$string['report_correct'] = 'Correct';
$string['report_delete'] = 'Delete';
$string['report_deleteconfirm'] = 'Permanently delete this attempt and all of its responses? This cannot be undone.';
$string['report_deleted'] = 'The attempt was deleted.';
$string['report_exact'] = 'Exact';
$string['report_export'] = 'Export';
$string['report_filterany'] = 'Any';
$string['report_filterapply'] = 'Apply filters';
$string['report_filterattempt'] = 'Attempt number';
$string['report_filterfrom'] = 'Started from';
$string['report_filterrangeerror'] = 'The end of the range is before its start.';
$string['report_filterreset'] = 'Clear filters';
$string['report_filterstate'] = 'State';
$string['report_filterto'] = 'Started until';
$string['report_filteruser'] = 'Participant';
$string['report_finished'] = 'Finished';
$string['report_heading'] = 'Attempts';
$string['report_hinted'] = 'With hint';
$string['report_hints'] = 'Hint level';
$string['report_kpianswered'] = 'Answered';
$string['report_kpiattempts'] = 'Attempts shown';
$string['report_kpiaverage'] = 'Average score (finished)';
$string['report_kpicorrect'] = 'Accepted';
$string['report_kpiexact'] = 'Exactly right';
$string['report_kpifinished'] = 'Finished';
$string['report_kpihinted'] = 'Used a hint';
$string['report_kpihintedgaps'] = 'Needed a hint';
$string['report_noattempts'] = 'No attempts yet.';
$string['report_nogaps'] = 'The version this attempt was taken on has no gaps.';
$string['report_nomatchingattempts'] = 'No attempt matches these filters.';
$string['report_noresponse'] = 'Not answered';
$string['report_response'] = 'Response';
$string['report_result'] = 'Result';
$string['report_result_empty'] = 'Empty';
$string['report_result_exact'] = 'Exact';
$string['report_result_incorrect'] = 'Incorrect';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Recognised';
$string['report_score'] = 'Score';
$string['report_solution'] = 'Solution';
$string['report_started'] = 'Started';
$string['report_state'] = 'State';
$string['report_state_abandoned'] = 'Abandoned';
$string['report_state_finished'] = 'Finished';
$string['report_state_inprogress'] = 'In progress';
$string['report_transcript'] = 'Transcript';
$string['report_tries'] = 'Tries';
$string['report_user'] = 'Participant';
$string['report_view'] = 'View';
$string['reports'] = 'Reports';
$string['resetattempts'] = 'Delete all learner attempts and answers';
$string['solutionavailability'] = 'Full transcript with answers for learners';
$string['solutionavailability_aftersubmission'] = 'After the attempt is finished';
$string['solutionavailability_always'] = 'Any time';
$string['solutionavailability_help'] = 'When learners may download the full transcript with every gap solution shown.

* Never — only teachers can download it.
* After the attempt is finished — a learner may download it once they have finished an attempt at this activity.
* Any time — a learner may download it before answering as well.

Teachers can always download it regardless of this setting.';
$string['solutionavailability_never'] = 'Never';
$string['subplugintype_elangscript'] = 'Script handler';
$string['subplugintype_elangscript_plural'] = 'Script handlers';
$string['subtitleposition'] = 'Subtitle display';
$string['subtitleposition_below'] = 'Below the medium';
$string['subtitleposition_help'] = 'Where the interactive subtitles are shown.

* Below the medium — the whole transcript sits under the medium in its own scrolling area, following playback.
* On the medium, bottom / top — only the subtitle currently playing is drawn over the medium.

An audio-only medium has no picture to draw on, so it always uses the display below the medium. The setting itself is kept, and applies again as soon as the activity uses a video.';
$string['subtitleposition_overlaybottom'] = 'On the medium — bottom';
$string['subtitleposition_overlaytop'] = 'On the medium — top';
$string['task_migratev1activities'] = 'Migrate version 1 activities';
$string['transcriptheading'] = 'Transcript for learners';
$string['validate_cueafterend'] = '{$a->where}: ends at {$a->endtime} ms, after the medium ({$a->duration} ms). Playback can never reach it.';
$string['validate_cueendbeforestart'] = '{$a}: the end is not after the start.';
$string['validate_cuewhere'] = 'Cue {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = 'The solution for {$a} is empty.';
$string['validate_hintlevels'] = 'The hint levels for {$a} are not a contiguous sequence starting at 1.';
$string['validate_negativetime'] = '{$a}: the start time is before the beginning of the recording.';
$string['validate_nocues'] = 'The version has no cues.';
$string['validate_nogaps'] = 'The version has no gaps to answer.';
$string['validate_nonpositivelength'] = 'The character length of {$a} must be positive.';
$string['validate_rangeoutside'] = 'The character range of {$a} lies outside its transcript.';
$string['validate_rangeoverlap'] = 'The character range of {$a} overlaps another gap.';
$string['validate_unknownalgorithm'] = 'The grading algorithm "{$a->algorithm}" for {$a->where} is not recognised.';
$string['validate_where'] = 'gap {$a->gapkey} in cue {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'Gap {$a->gapkey}: grading algorithm is "{$a->actual}", expected "{$a->expected}".';
$string['verify_attemptcount'] = 'The number of migrated attempts is {$a->actual}, expected {$a->expected} distinct 1.x learners.';
$string['verify_jarothreshold'] = 'The answer-comparison threshold is {$a->actual}, expected {$a->expected}.';
$string['verify_missingattempt'] = 'User {$a}: expected a migrated attempt, found none.';
$string['verify_missingcue'] = 'Cue {$a}: the migrated cue is missing.';
$string['verify_missinggap'] = 'Gap {$a}: the migrated gap is missing.';
$string['verify_missinghint'] = 'Gap {$a}: version 1 allowed help here, but no hint was migrated.';
$string['verify_orphancue'] = 'Cue {$a}: no corresponding version 1 cue was found.';
$string['verify_orphangap'] = 'Gap {$a}: no corresponding version 1 gap was found.';
$string['verify_rangemismatch'] = 'Gap {$a}: the character range does not match the version 1 source.';
$string['verify_responsecount'] = 'User {$a->userid}: the number of migrated responses is {$a->actual}, expected {$a->expected}.';
$string['verify_solutionmismatch'] = 'Gap {$a->gapkey}: the solution is "{$a->actual}", expected "{$a->expected}".';
$string['verify_transcriptmismatch'] = 'Cue {$a}: the transcript does not match the version 1 source.';
$string['verify_unexpectedhint'] = 'Gap {$a}: version 1 disallowed help here, but a hint was migrated.';
