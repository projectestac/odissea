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
 * Strings for component 'elang', language 'ko', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = '허용되는 콘텐츠 언어';
$string['allowedlanguages_desc'] = '비디오 받아쓰기를 만들거나 편집할 때 제시되는 콘텐츠 언어입니다. 아무것도 고르지 않으면 전체 언어 목록이 나타납니다. 나중에 여기에서 지워도 활동은 저장된 언어를 유지합니다.';
$string['allowtranscriptdownload'] = '참여자의 대본 내려받기';
$string['allowtranscriptdownload_help'] = '켜면 참여자가 모든 빈칸을 숨긴 대본 학습지를 PDF, Word, OpenDocument 또는 텍스트로 내려받을 수 있습니다.

기본값은 꺼짐입니다. 권한이 있는 교수진은 이 설정과 관계없이 언제나 대본을 내려받을 수 있습니다.';
$string['allowtranscriptdownload_label'] = '참여자가 학습지를 내려받을 수 있습니다';
$string['completiondetail_completionfinishattempt'] = '시도 완료하기';
$string['completionfinishattempt'] = '참여자는 시도를 완료해야 합니다';
$string['cuepausemode'] = '자막이 끝날 때 일시정지';
$string['cuepausemode_auto'] = '자동';
$string['cuepausemode_help'] = '자막이 끝날 때 미디어를 멈출지 정합니다.

* 자동 — 재생이 이어지며, 그 자막을 다루고 있는 동안에만, 즉 자막이나 그 빈칸 중 하나를 눌렀거나 키보드 초점이 그곳에 있는 동안에만 자막 끝에서 멈춥니다.
* 답하지 않은 자막마다 멈춤 — 빈칸이 남은 자막의 끝마다 멈추고 다시 시작하기를 기다립니다.
* 멈추지 않음 — 미디어 끝까지 재생이 이어집니다.

앞의 두 가지 모두 빈칸이 모두 채워진 자막에서는 멈추지 않습니다. 이미 끝난 작업이며, 거기에서 멈추면 아무 효과 없는 키 입력을 요구하게 되기 때문입니다. 따라서 연습 문제를 두 번째로 훑을 때는 아직 빠진 곳에서만 멈춥니다.';
$string['cuepausemode_nostop'] = '멈추지 않음';
$string['cuepausemode_stop'] = '답하지 않은 자막마다 멈춤';
$string['editcontent'] = '콘텐츠 편집';
$string['editor_addcue'] = '세그먼트 추가';
$string['editor_addgap'] = '선택 영역으로 빈칸 만들기';
$string['editor_addhint'] = '힌트 추가';
$string['editor_addvariant'] = '이형 추가';
$string['editor_advanced'] = '고급 설정';
$string['editor_algoexact'] = '정확히 일치';
$string['editor_algorithm'] = '답안 비교';
$string['editor_algowordrecognized'] = '비슷한 답안 허용';
$string['editor_answers'] = '허용되는 이형';
$string['editor_autosaved'] = '모든 변경 사항이 저장되었습니다.';
$string['editor_autosaveerror'] = '자동 저장에 실패했습니다. 저장 단추로 다시 시도하세요.';
$string['editor_captureend'] = '재생 위치에서 종료 시각 설정';
$string['editor_capturestart'] = '재생 위치에서 시작 시각 설정';
$string['editor_cueactions'] = '세그먼트 작업';
$string['editor_cuecount'] = '세그먼트: {$a}';
$string['editor_currentmedia'] = '현재 미디어:';
$string['editor_deletecue'] = '세그먼트 삭제';
$string['editor_deletegap'] = '빈칸 삭제';
$string['editor_emptytranscript'] = '(아직 텍스트가 없습니다)';
$string['editor_endtime'] = '종료 시각';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = '빈칸: {$a}';
$string['editor_gaprange'] = '빈칸 위치 (문자 수)';
$string['editor_gotomedia'] = '미디어로 이동';
$string['editor_heading'] = '자막과 빈칸 편집';
$string['editor_hints'] = '힌트';
$string['editor_hinttext'] = '힌트 문구';
$string['editor_hinttype'] = '유형';
$string['editor_hinttype_firstletter'] = '첫 글자';
$string['editor_hinttype_partial'] = '일부 표시';
$string['editor_hinttype_solution'] = '정답';
$string['editor_hinttype_text'] = '자유 입력';
$string['editor_hinttype_translation'] = '번역';
$string['editor_hinttype_wordlength'] = '단어 길이';
$string['editor_import'] = '자막 가져오기';
$string['editor_importappend'] = '기존 세그먼트에 추가';
$string['editor_importapply'] = '가져오기';
$string['editor_importcancel'] = '취소';
$string['editor_importcheck'] = '내용 확인';
$string['editor_importchecking'] = '확인 중…';
$string['editor_importcuecount'] = '찾은 세그먼트';
$string['editor_importduration'] = '길이';
$string['editor_importedcues'] = '가져온 세그먼트: {$a}';
$string['editor_importfilehint'] = '자막이 들어 있는 WebVTT (.vtt) 또는 SubRip (.srt) 파일을 선택하세요.';
$string['editor_importformat'] = '형식';
$string['editor_importfromfile'] = '파일 올리기';
$string['editor_importfromtext'] = '텍스트 붙여넣기';
$string['editor_importgapcount'] = '찾은 빈칸';
$string['editor_importhint'] = 'WebVTT 또는 SubRip 내용을 붙여넣고 세그먼트로 가져오세요.';
$string['editor_importparseerror'] = '이 내용은 WebVTT나 SubRip으로 읽을 수 없었습니다.';
$string['editor_importpastedtext'] = '붙여넣은 텍스트';
$string['editor_importreaderror'] = '파일을 읽을 수 없었습니다.';
$string['editor_importready'] = '가져올 준비가 되었습니다';
$string['editor_importreplace'] = '모든 세그먼트 바꾸기';
$string['editor_importreplacedcues'] = '세그먼트를 바꾸었습니다. 새로 가져옴: {$a}';
$string['editor_importsource'] = '출처';
$string['editor_importsummary'] = '찾은 내용';
$string['editor_importtoolarge'] = '이 파일은 {$a->size}입니다. 가져오기는 최대 {$a->max}까지 받습니다.';
$string['editor_importwrongtype'] = '자막 파일을 선택하세요 ({$a}).';
$string['editor_insertafter'] = '뒤에 세그먼트 삽입';
$string['editor_insertbefore'] = '앞에 세그먼트 삽입';
$string['editor_invalidtime'] = '시각을 mm:ss.SSS 형식으로 입력하세요. 예: 01:05.400';
$string['editor_linkurl'] = '찾아볼 링크';
$string['editor_linkurl_help'] = '단어를 찾아볼 수 있는 곳으로 빈칸 옆에 표시됩니다. 링크를 제공하지 않으려면 비워 두세요.';
$string['editor_loaderror'] = '편집기를 불러오지 못했습니다. 페이지를 새로 고치세요.';
$string['editor_loading'] = '편집기를 불러오는 중…';
$string['editor_maxlength'] = '최대 길이';
$string['editor_maxlength_help'] = '참여자가 입력할 수 있는 분량을 제한합니다. 0은 제한 없음을 뜻합니다.';
$string['editor_media'] = '미디어';
$string['editor_mediafile'] = '올린 파일';
$string['editor_mediakind'] = '미디어 유형';
$string['editor_medianone'] = '없음';
$string['editor_mediaprovider'] = '제공자';
$string['editor_mediaproviderref'] = '제공자 참조';
$string['editor_mediaproviderrefhint'] = '동영상 ID 또는 링크. 일반적인 형식으로 입력할 수 있습니다 (예: youtu.be/…).';
$string['editor_mediasaved'] = '미디어를 저장했습니다.';
$string['editor_mediaurl'] = '미디어 직접 URL';
$string['editor_nocues'] = '아직 세그먼트가 없습니다. 하나 추가하거나 자막을 가져오세요.';
$string['editor_nocueselected'] = '편집할 세그먼트를 목록에서 선택하세요.';
$string['editor_nocuesmatch'] = '이 검색에 맞는 세그먼트가 없습니다.';
$string['editor_nogaps'] = '빈칸 없음';
$string['editor_nomedia'] = '없음';
$string['editor_nomedianotice'] = '먼저 미디어 탭에서 동영상이나 음성 파일을 추가하세요. 자막은 미디어에 맞춰 시각이 정해지므로, 세그먼트와 빈칸 작업을 하려면 편집기에 미디어가 필요합니다.';
$string['editor_novideotrack'] = '이 브라우저는 이 미디어의 영상 트랙을 디코딩할 수 없습니다 (소리만 재생됩니다). 참여자에게는 검은 화면이 보입니다. 파일을 H.264/MP4로 다시 인코딩한 뒤 (예: ffmpeg 또는 HandBrake) 다시 올리세요.';
$string['editor_onboardinggaps'] = '세그먼트에서 단어를 선택해 빈칸으로 만드세요.';
$string['editor_onboardingimport'] = 'WebVTT 또는 SubRip 자막을 가져오거나 세그먼트를 직접 추가하세요.';
$string['editor_onboardingintro'] = '세 단계로 연습 문제를 만듭니다:';
$string['editor_onboardingmedia'] = '미디어를 고르세요 (올리기, URL, 제공자).';
$string['editor_onboardingtitle'] = '연습 문제를 시작하세요';
$string['editor_onlywarnings'] = '경고가 있는 세그먼트만';
$string['editor_parsegaps'] = '빈칸 표시를 인식합니다: [단어]는 힌트를 허용하는 빈칸, {단어}는 힌트 없는 빈칸을 만듭니다.';
$string['editor_penalty'] = '감점';
$string['editor_poster'] = '대표 이미지';
$string['editor_preview'] = '참여자 미리보기';
$string['editor_publish'] = '게시';
$string['editor_published'] = '버전을 게시했습니다.';
$string['editor_removehint'] = '힌트 제거';
$string['editor_removevariant'] = '제거';
$string['editor_ruleapplied'] = '규칙으로 빈칸 %count%개를 만들었습니다.';
$string['editor_ruleapply'] = '빈칸 %count%개 적용';
$string['editor_ruleerror'] = '빈칸을 만들지 못했습니다.';
$string['editor_ruleeverynth'] = 'n번째 단어마다';
$string['editor_rulefound'] = '규칙으로 빈칸 %count%개를 찾았습니다.';
$string['editor_rulegenerate'] = '빈칸 만들기';
$string['editor_ruleinterval'] = '간격 (n)';
$string['editor_ruletype'] = '빈칸 규칙';
$string['editor_rulewordlist'] = '숨길 단어';
$string['editor_rulewords'] = '단어 목록';
$string['editor_save'] = '초안 저장';
$string['editor_saved'] = '초안을 저장했습니다.';
$string['editor_saveerror'] = '초안을 저장하지 못했습니다.';
$string['editor_savemedia'] = '미디어 저장';
$string['editor_saving'] = '저장 중…';
$string['editor_searchcues'] = '세그먼트 검색';
$string['editor_selecttext'] = '먼저 대본에서 숨길 단어를 선택하세요.';
$string['editor_solution'] = '정답';
$string['editor_starttime'] = '시작 시각';
$string['editor_transcript'] = '대본';
$string['editor_unsaved'] = '저장하지 않은 변경 사항';
$string['editor_uploadmedia'] = '미디어 파일 올리기';
$string['editor_variantisregex'] = '{$a}을(를) 정규 표현식으로 처리';
$string['editor_variantmatching'] = '허용되는 이형을 비교하는 방식';
$string['editor_warnemptysolution'] = '정답이 없는 빈칸';
$string['editor_warnnotranscript'] = '텍스트 없음';
$string['editor_warntiming'] = '종료가 시작보다 뒤가 아닙니다';
$string['editor_waveform'] = '음성 파형';
$string['elang:addinstance'] = '새 비디오 받아쓰기 추가';
$string['elang:attempt'] = '비디오 받아쓰기 수행';
$string['elang:deleteattempts'] = '참여자 시도 삭제';
$string['elang:exportreports'] = '개인정보가 포함된 보고서 내보내기';
$string['elang:exportsolution'] = '정답이 포함된 전체 대본 내보내기';
$string['elang:exporttranscript'] = '학습지를 문서로 내보내기';
$string['elang:manage'] = '연습 문제 콘텐츠 만들기 및 편집';
$string['elang:useregex'] = '허용되는 답안에 정규 표현식 사용';
$string['elang:view'] = '비디오 받아쓰기 보기';
$string['elang:viewreports'] = '참여자 보고서 보기';
$string['error_attemptnotinprogress'] = '이 시도는 더 이상 진행 중이 아닙니다.';
$string['error_couldnotobtainlock'] = '이 작업의 잠금을 얻지 못했습니다. 다시 시도하세요.';
$string['error_draftrevisionmismatch'] = '이 초안은 불러온 뒤에 바뀌었습니다. 다시 불러온 뒤 시도하세요.';
$string['error_duplicatecuekey'] = '두 세그먼트가 “{$a}” 키를 함께 씁니다. 세그먼트마다 고유한 키가 필요합니다.';
$string['error_duplicategapkey'] = '같은 세그먼트의 두 빈칸이 “{$a}” 키를 함께 씁니다. 빈칸마다 고유한 키가 필요합니다.';
$string['error_duplicatehintlevel'] = '한 빈칸의 {$a}단계에 힌트가 두 개 있습니다. 각 단계는 고유해야 합니다.';
$string['error_gapnotinattemptversion'] = '이 빈칸은 이 시도의 연습 문제 버전에 속하지 않습니다.';
$string['error_importnocues'] = '이 내용에서 자막을 읽지 못했습니다. WebVTT 또는 SubRip 파일에는 자막마다 00:00:01.000 --> 00:00:04.000 같은 시각 줄이 있습니다.';
$string['error_importnotutf8'] = '이 파일은 올바른 UTF-8이 아닙니다. 예전 인코딩으로 저장되었을 가능성이 큽니다. 텍스트 편집기로 열어 UTF-8로 다시 저장하세요.';
$string['error_importtoolarge'] = '이 파일은 {$a->size}입니다. 가져오기는 최대 {$a->max}까지 받습니다. 수업 녹화의 자막 파일은 이보다 훨씬 작으므로 자막 파일이 아닐 가능성이 큽니다.';
$string['error_importtoomanycues'] = '이 파일에는 자막이 {$a->count}개 들어 있습니다. 가져오기는 최대 {$a->max}개까지 받습니다.';
$string['error_invalidcuepausemode'] = '자막이 끝날 때의 일시정지에 대해 제시된 선택지 중 하나를 고르세요.';
$string['error_invalidgradingalgorithm'] = '평가 알고리즘 “{$a}”은(는) exact도 wordrecognized도 아닙니다.';
$string['error_invalidhinttype'] = '힌트 유형 “{$a}”은(는) 허용된 유형이 아닙니다.';
$string['error_invalidisregex'] = '이형의 정규 표현식 표시는 0 또는 1이어야 합니다.';
$string['error_invalidmediakind'] = '선택한 미디어 유형이 file, url, provider 중 어느 것도 아닙니다.';
$string['error_invalidpenalty'] = '힌트 감점은 0과 1 사이여야 합니다.';
$string['error_invalidproviderref'] = '“{$a}”은(는) 이 제공자에서 인식되는 동영상 ID나 링크가 아닙니다.';
$string['error_invalidregexpattern'] = '“{$a}”은(는) 올바른 정규 표현식이 아닙니다.';
$string['error_invalidsolutionavailability'] = '참여자가 정답이 포함된 대본을 볼 수 있는 시점에 대해 제시된 선택지 중 하나를 고르세요.';
$string['error_invalidsourceurl'] = 'http:// 또는 https://로 시작하는 전체 주소나 YouTube 또는 Vimeo 링크를 입력하세요.';
$string['error_invalidsubtitleposition'] = '자막을 표시할 위치에 대해 제시된 선택지 중 하나를 고르세요.';
$string['error_invalidv1cuejson'] = '버전 1의 이 세그먼트를 처리하지 못했습니다.';
$string['error_negativegapoffset'] = '빈칸의 위치와 길이는 음수일 수 없습니다.';
$string['error_noaccesstoattempt'] = '이 시도에 접근할 권한이 없습니다.';
$string['error_nomorehints'] = '이 빈칸에 더 이상의 힌트가 없습니다.';
$string['error_nopublishedversion'] = '이 연습 문제에는 아직 게시된 콘텐츠가 없습니다.';
$string['error_responsetoolong'] = '답안이 너무 깁니다. 이 빈칸의 최대 길이는 {$a}자입니다.';
$string['error_solutionnotavailable'] = '이 활동에서는 정답이 포함된 대본을 볼 수 없습니다.';
$string['error_staleattemptstate'] = '이 시도에 대한 화면이 최신이 아닙니다. 현재 상태를 다시 불러온 뒤 시도하세요.';
$string['error_transcriptnotavailable'] = '이 활동에는 내려받을 수 있는 대본이 없습니다.';
$string['error_unknowngaprule'] = '알 수 없는 빈칸 규칙 유형 “{$a}”.';
$string['error_unknownmediaprovider'] = '“{$a}”은(는) 지원되는 미디어 제공자가 아닙니다.';
$string['error_versionnotadraft'] = '초안 상태인 버전만 편집할 수 있습니다.';
$string['error_versionnotfound'] = '이 연습 문제 버전은 더 이상 존재하지 않습니다.';
$string['error_versionnotpublishable'] = '이 버전은 게시할 수 없습니다: {$a}';
$string['export_audienceaftersubmission'] = '참여자는 시도를 완료한 뒤 내려받을 수 있습니다';
$string['export_audiencealways'] = '참여자는 언제든지 내려받을 수 있습니다';
$string['export_audiencestaff'] = '권한이 있는 교수진만 가능하며 참여자에게는 제공되지 않습니다';
$string['export_docx'] = 'Word 형식 (DOCX)으로 내려받기';
$string['export_downloadpdf'] = 'PDF 내려받기';
$string['export_heading'] = '대본 내보내기';
$string['export_intro'] = '이 연습 문제의 대본을 여러 형식으로 내려받으세요.';
$string['export_moreformats'] = '다른 형식';
$string['export_nocontent'] = '내보낼 수 있는 게시된 대본이 아직 없습니다.';
$string['export_odt'] = 'OpenDocument 형식 (ODT)으로 내려받기';
$string['export_pdf'] = 'PDF 형식으로 내려받기';
$string['export_solution'] = '정답이 포함된 대본';
$string['export_solutionhint'] = '모든 빈칸의 정답이 보이는 전체 텍스트입니다.';
$string['export_text'] = '텍스트로 내려받기';
$string['export_versionnote'] = '내보내기는 이 연습 문제의 현재 게시된 버전을 기준으로 합니다.';
$string['export_worksheet'] = '학습지 (빈칸 숨김)';
$string['export_worksheethint'] = '모든 빈칸을 숨긴 텍스트입니다. 참여자 자료로 나누어 줄 수 있습니다.';
$string['exporttranscript'] = '대본 내보내기';
$string['filearea_media'] = '미디어';
$string['filearea_poster'] = '대표 이미지';
$string['gradingheading'] = '답안 평가';
$string['import_badtiming'] = '시각 줄을 읽지 못했습니다: {$a}';
$string['import_emptytranscript'] = '텍스트가 없는 세그먼트를 건너뛰었습니다.';
$string['import_warnlinetoolong'] = '블록 {$a->block}을(를) 건너뛰었습니다: {$a->max}자를 넘는 줄이 있어 자막 줄이 아닙니다.';
$string['jarothreshold'] = '유사도 기준값';
$string['jarothreshold_help'] = '“비슷한 답안 허용”으로 설정한 빈칸에서, 기대되는 답안과 입력된 답안 사이의 최소 Jaro 유사도입니다. 1은 언어별 정규화 뒤 정확한 일치를 요구하며, 값이 낮을수록 더 다른 표기도 허용합니다.';
$string['jarothresholdrange'] = '기준값은 0과 1 사이여야 합니다.';
$string['language'] = '콘텐츠 언어';
$string['language_help'] = '연습 문제 콘텐츠의 언어를 고르세요. 대소문자 처리와 음역을 포함해 답안 비교 방식을 정합니다. 언어별 처리를 쓰지 않으려면 “일반 (지정 안 함)”을 고르세요. 새 콘텐츠 버전은 이 설정에서 시작합니다.';
$string['language_none'] = '일반 (지정 안 함)';
$string['media_cuenote'] = '미디어를 바꿔도 기존 자막과 빈칸은 그대로 유지됩니다. 시각은 자동으로 맞추어지지 않으므로 나중에 편집기에서 확인하세요.';
$string['media_current'] = '현재 미디어';
$string['media_heading'] = '미디어';
$string['media_intro'] = '이 연습 문제의 바탕이 되는 동영상이나 음성을 고르세요. 자막은 여기에 맞춰 시각이 정해지므로 이것이 첫 단계입니다.';
$string['media_none'] = '이 연습 문제에는 아직 미디어가 설정되지 않았습니다.';
$string['media_othersource'] = '다른 출처';
$string['media_providerhint'] = '인식되는 제공자: {$a}. 그 밖의 주소는 직접 미디어 URL로 사용됩니다.';
$string['media_sourceurl'] = '미디어 URL';
$string['media_sourceurl_help'] = '파일을 올리는 대신 동영상 주소를 붙여넣으세요. YouTube나 Vimeo 링크, 또는 미디어 파일의 직접 주소를 쓸 수 있습니다.

여기에 주소를 입력하면 올린 파일보다 우선합니다. 위의 올리기를 쓰려면 비워 두세요.

제공자 동영상은 제공자 자신의 프레임에서 재생되며, 그 프레임은 재생 위치를 알려 주지 않습니다. 그래서 이런 연습 문제는 자막을 항상 미디어 아래에 표시하고 자막 끝에서 멈추지 않습니다.

**데이터가 어디로 가는지.** YouTube나 Vimeo 프레임은 참여자 한 사람 한 사람의 브라우저를 그 회사에 연결하며, 회사는 참여자의 IP 주소와 기기 정보를 받습니다. 기본값에서는 연습 문제가 그에 앞서 동의를 구합니다. 소속 기관이 자체 미디어 서버 (Opencast, Panopto, Kaltura 등)를 운영한다면 거기에서 파일의 직접 주소를 붙여넣으세요. 일반 미디어 URL로 처리되어 선택한 자막 위치와 일시정지 설정이 유지되며 제삼자가 개입하지 않습니다.';
$string['migratev1_approvalheading'] = '이전됨, 확인 대기';
$string['migratev1_approvebutton'] = '이 이전을 승인';
$string['migratev1_approved'] = '비디오 받아쓰기 {$a}을(를) 승인됨으로 표시했습니다.';
$string['migratev1_colactivity'] = '활동';
$string['migratev1_colalgorithm'] = '평가 알고리즘';
$string['migratev1_colcues'] = '세그먼트';
$string['migratev1_colgaps'] = '빈칸';
$string['migratev1_colissues'] = '문제';
$string['migratev1_collearners'] = '참여자';
$string['migratev1_confirmdecommission'] = '이 작업은 버전 1의 예전 테이블과 elang.options 열을 되돌릴 수 없게 삭제합니다. 취소할 수 없습니다. 계속하시겠습니까?';
$string['migratev1_confirmmigrate'] = '이 작업은 위에 나열된 각 활동에 대해 버전 2 데이터를 쓰는 백그라운드 작업을 대기열에 넣습니다. 버전 1의 테이블과 elang.options는 그대로 유지됩니다. 계속하시겠습니까?';
$string['migratev1_decommissionblocked'] = '삭제가 아직 막혀 있습니다. 아래 목록을 확인하세요.';
$string['migratev1_decommissionblockedintro'] = '삭제는 다음 조건이 충족될 때까지 막혀 있습니다:';
$string['migratev1_decommissionbutton'] = '버전 1의 예전 데이터 삭제';
$string['migratev1_decommissioned'] = '버전 1의 예전 데이터를 삭제했습니다.';
$string['migratev1_decommissionheading'] = '버전 1 데이터 폐기';
$string['migratev1_decommissionready'] = '버전 1의 모든 활동이 이전되고 승인되었습니다. 예전 테이블과 elang.options를 이제 삭제할 수 있습니다. 이 작업은 되돌릴 수 없습니다.';
$string['migratev1_heading'] = '버전 1 활동 이전';
$string['migratev1_migratebutton'] = '이 활동들을 이전';
$string['migratev1_noissues'] = '없음';
$string['migratev1_nonepending'] = '이전을 기다리는 버전 1 활동이 없습니다.';
$string['migratev1_nonependingapproval'] = '확인을 기다리는 이전된 활동이 없습니다.';
$string['migratev1_notablespresent'] = '이 사이트에서 버전 1의 예전 테이블을 찾지 못했습니다. 이전할 것이 없습니다.';
$string['migratev1_parseerrorcount'] = '처리하지 못한 세그먼트: {$a}';
$string['migratev1_pendingheading'] = '아직 이전되지 않음';
$string['migratev1_queued'] = '이전 작업을 대기열에 넣었습니다. 다음 cron 실행 때 또는 admin/cli/adhoc_task.php --execute로 바로 실행됩니다.';
$string['migratev1_verifiedclean'] = '확인 완료: 이전된 데이터가 버전 1 원본과 차이 없이 일치합니다.';
$string['migratev1_verifieddiscrepancies'] = '확인 결과 버전 1 원본과 차이가 있습니다: {$a}';
$string['migratev1_verifyfailed'] = '이 활동을 확인하지 못했습니다: {$a}';
$string['modulename'] = '비디오 받아쓰기';
$string['modulename_help'] = '비디오 받아쓰기 활동에서는 참여자가 동영상을 보거나 들으면서 시각이 매겨진 자막의 빈칸을 채웁니다.

교수자는 WebVTT 또는 SubRip 자막 파일을 가져와 단어나 어구를 빈칸으로 지정하고, 답안을 얼마나 엄격하게 비교할지 설정합니다. 참여자는 대본을 세그먼트 단위로 진행하며 감점이 있는 힌트를 요청하고 즉시 결과를 확인합니다.';
$string['modulenameplural'] = '비디오 받아쓰기';
$string['nav_exportshort'] = '내보내기';
$string['nav_media'] = '미디어';
$string['nav_reports'] = '시도';
$string['nav_subtitles'] = '자막과 빈칸';
$string['noinstances'] = '이 강좌에는 비디오 받아쓰기가 없습니다.';
$string['overview_attempts'] = '시도';
$string['playbackheading'] = '재생과 자막';
$string['playbackoverlayhint'] = '영상 위에 겹친 자막은 지금 재생 중인 자막만 보여 주므로, 아직 채울 빈칸이 남은 자막의 끝에서는 재생이 항상 멈춥니다. 여기에서 고를 항목은 없습니다.';
$string['playbackproviderhint'] = 'YouTube나 Vimeo 동영상은 제공자의 프레임 안에서 재생되며, 그 프레임은 재생 위치를 알려 주지 않습니다. 그래서 이런 연습 문제는 자막을 항상 미디어 아래에 표시하고, 위에서 무엇을 고르든 자막 끝에서 멈추지 않습니다. 올린 파일과 직접 미디어 URL은 두 설정을 모두 따릅니다.';
$string['player_check'] = '답안 확인';
$string['player_consentaccept'] = '{$a}에서 동영상 불러오기';
$string['player_consentdetail'] = '재생하면 브라우저가 {$a}에 연결됩니다. {$a}은(는) 여러분의 IP 주소와 기기 정보를 받고, 이미 저장해 둔 쿠키를 읽을 수 있습니다. 동영상을 불러오기로 선택하기 전까지는 아무것도 전송되지 않습니다.';
$string['player_consentheading'] = '이 동영상은 {$a}에서 제공합니다';
$string['player_finish'] = '시도 완료';
$string['player_finished'] = '시도를 완료했습니다. 점수: %score%%';
$string['player_finishincomplete'] = '아직 비어 있는 빈칸: {$a}. 그래도 시도를 완료할까요?';
$string['player_gaplabel'] = '빈칸 %gap%';
$string['player_gaplink'] = '링크 열기';
$string['player_hint'] = '힌트 보기';
$string['player_loaderror'] = '연습 문제를 불러오지 못했습니다. 페이지를 새로 고치세요.';
$string['player_loading'] = '연습 문제를 불러오는 중…';
$string['player_nocontent'] = '아직 게시된 연습 문제 콘텐츠가 없습니다. 나중에 다시 확인하세요.';
$string['player_novideotrack'] = '브라우저가 이 미디어의 영상 트랙을 표시할 수 없습니다. 소리는 계속 재생됩니다. 담당 교수자에게 알려 주세요.';
$string['player_outdatedattempt'] = '이 연습 문제는 여러분이 이 시도를 시작한 뒤에 갱신되었습니다. 지금은 이전 콘텐츠로 이어서 하고 있습니다. 이 시도를 완료하면 다음부터 갱신된 연습 문제로 진행합니다.';
$string['player_progress'] = '빈칸 {$a->total}개 중 {$a->done}개에 답했습니다';
$string['player_ready'] = '연습 문제가 준비되었습니다.';
$string['player_scorelabel'] = '점수: %score%%';
$string['player_stateaccepted'] = '허용됨';
$string['player_statecorrect'] = '정답';
$string['player_statehinted'] = '힌트 사용';
$string['player_stateincorrect'] = '오답';
$string['player_submitfailed'] = '답안을 저장하지 못했습니다. 다시 시도하세요.';
$string['player_transcriptheading'] = '대본';
$string['pluginadministration'] = '비디오 받아쓰기 관리';
$string['pluginname'] = '비디오 받아쓰기';
$string['privacy_metadata_elang'] = '각 활동에 대해 1.x 콘텐츠의 단방향 이전을 누가 승인했는지에 대한 기록.';
$string['privacy_metadata_elang_attempt'] = '연습 문제의 시도마다 누가 언제 했는지, 어디까지 진행했는지, 어떻게 평가되었는지를 저장합니다.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = '이 시도에서 참여자가 답한 빈칸의 수.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = '해당 사용자와 활동에 대한 이 시도의 일련번호.';
$string['privacy_metadata_elang_attempt_correctgaps'] = '이 시도에서 정답으로 인정된 빈칸의 수.';
$string['privacy_metadata_elang_attempt_exactgaps'] = '이 시도에서 문자까지 정확히 일치하게 답한 빈칸의 수.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = '이 시도에서 참여자가 힌트를 요청한 빈칸의 수.';
$string['privacy_metadata_elang_attempt_score'] = '이 시도에서 얻은 점수.';
$string['privacy_metadata_elang_attempt_state'] = '시도가 진행 중인지, 완료되었는지, 중단되었는지.';
$string['privacy_metadata_elang_attempt_timefinish'] = '시도를 완료한 시각.';
$string['privacy_metadata_elang_attempt_timemodified'] = '시도를 마지막으로 갱신한 시각.';
$string['privacy_metadata_elang_attempt_timestart'] = '시도를 시작한 시각.';
$string['privacy_metadata_elang_attempt_totalgaps'] = '이 시도가 속한 연습 문제 버전의 전체 빈칸 수.';
$string['privacy_metadata_elang_attempt_userid'] = '시도를 수행한 사용자의 ID.';
$string['privacy_metadata_elang_attempt_versionid'] = '이 시도가 수행된 연습 문제 버전.';
$string['privacy_metadata_elang_migrationapproveduserid'] = '이 활동의 mod_elang 1.x 이전을 승인한 사용자. 승인을 나중에 확인할 수 있도록 저장됩니다.';
$string['privacy_metadata_elang_response'] = '시도 중 참여자가 답한 빈칸마다 답안 내용과 평가 방식을 저장합니다.';
$string['privacy_metadata_elang_response_accepted'] = '이 빈칸에서 답안이 정답으로 인정되었는지 여부.';
$string['privacy_metadata_elang_response_hintlevel'] = '이 빈칸에서 참여자에게 표시된 가장 높은 힌트 단계.';
$string['privacy_metadata_elang_response_responsetext'] = '참여자가 이 빈칸에 입력한 문자열.';
$string['privacy_metadata_elang_response_resultstate'] = '평가가 이 답안에 부여한 분류 (정확, 단어 인식, 오답, 빈칸).';
$string['privacy_metadata_elang_response_score'] = '힌트 감점을 적용한 뒤 이 답안이 기여한 점수.';
$string['privacy_metadata_elang_response_timecreated'] = '이 답안을 처음 제출한 시각.';
$string['privacy_metadata_elang_response_timemodified'] = '이 답안을 마지막으로 갱신한 시각.';
$string['privacy_metadata_elang_response_tries'] = '참여자가 이 빈칸에 답안을 제출한 횟수.';
$string['privacy_metadata_elang_version'] = '콘텐츠 버전마다 누가 마지막으로 수정했는지를 저장합니다.';
$string['privacy_metadata_elang_version_usermodified'] = '이 콘텐츠 버전을 마지막으로 수정한 사용자. 연습 문제 콘텐츠를 누가 편집했는지 확인할 수 있도록 저장됩니다.';
$string['privacy_provider_externallink'] = '연습 문제가 YouTube나 Vimeo 동영상을 바탕으로 할 때, 이를 열면 참여자의 브라우저가 해당 제공자에 연결됩니다. 플러그인 자체는 아무것도 보내지 않지만 연결은 활동으로 인해 일어납니다. 연결이 일어나는지 여부는 사이트의 제공자 동의 설정과 참여자의 동의에 달려 있습니다.';
$string['privacy_provider_ipaddress'] = '참여자의 브라우저가 접속하는 IP 주소.';
$string['privacy_provider_useragent'] = '브라우저가 보내는 브라우저 및 기기 정보.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'YouTube나 Vimeo를 넣기 전에 확인';
$string['providerconsent_desc'] = 'YouTube나 Vimeo 동영상을 바탕으로 한 연습 문제는 동영상 대신 안내를 보여 주고, 참여자가 동의한 뒤에야 동영상을 넣습니다. 이것이 없으면 페이지를 여는 즉시 제공자가 참여자의 IP 주소와 브라우저 정보를 받습니다. 누군가 재생을 누르기도 전입니다. 소속 기관이 다른 방법으로 이 동의를 받는 경우에만 끄세요.';
$string['report_actions'] = '작업';
$string['report_answered'] = '답한 빈칸';
$string['report_attemptnumber'] = '시도';
$string['report_back'] = '모든 시도로 돌아가기';
$string['report_correct'] = '정답';
$string['report_delete'] = '삭제';
$string['report_deleteconfirm'] = '이 시도와 모든 답안을 영구히 삭제할까요? 되돌릴 수 없습니다.';
$string['report_deleted'] = '시도를 삭제했습니다.';
$string['report_exact'] = '정확히 일치';
$string['report_export'] = '내보내기';
$string['report_filterany'] = '전체';
$string['report_filterapply'] = '필터 적용';
$string['report_filterattempt'] = '시도 번호';
$string['report_filterfrom'] = '시작일 (이후)';
$string['report_filterrangeerror'] = '기간의 끝이 시작보다 앞섭니다.';
$string['report_filterreset'] = '필터 지우기';
$string['report_filterstate'] = '상태';
$string['report_filterto'] = '시작일 (이전)';
$string['report_filteruser'] = '참여자';
$string['report_finished'] = '완료됨';
$string['report_heading'] = '시도';
$string['report_hinted'] = '힌트 사용';
$string['report_hints'] = '힌트 단계';
$string['report_kpianswered'] = '답한 빈칸';
$string['report_kpiattempts'] = '표시된 시도';
$string['report_kpiaverage'] = '평균 점수 (완료됨)';
$string['report_kpicorrect'] = '인정됨';
$string['report_kpiexact'] = '완전히 정확';
$string['report_kpifinished'] = '완료됨';
$string['report_kpihinted'] = '힌트를 사용함';
$string['report_kpihintedgaps'] = '힌트가 필요했음';
$string['report_noattempts'] = '아직 시도가 없습니다.';
$string['report_nogaps'] = '이 시도가 수행된 버전에는 빈칸이 없습니다.';
$string['report_nomatchingattempts'] = '이 필터에 맞는 시도가 없습니다.';
$string['report_noresponse'] = '답하지 않음';
$string['report_response'] = '답안';
$string['report_result'] = '결과';
$string['report_result_empty'] = '빈칸';
$string['report_result_exact'] = '정확';
$string['report_result_incorrect'] = '오답';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = '단어 인식';
$string['report_score'] = '점수';
$string['report_solution'] = '정답';
$string['report_started'] = '시작';
$string['report_state'] = '상태';
$string['report_state_abandoned'] = '중단됨';
$string['report_state_finished'] = '완료됨';
$string['report_state_inprogress'] = '진행 중';
$string['report_transcript'] = '대본';
$string['report_tries'] = '답안 제출 횟수';
$string['report_user'] = '참여자';
$string['report_view'] = '보기';
$string['reports'] = '보고서';
$string['resetattempts'] = '모든 참여자의 시도와 답안 삭제';
$string['solutionavailability'] = '참여자를 위한 정답 포함 대본';
$string['solutionavailability_aftersubmission'] = '시도를 완료한 뒤';
$string['solutionavailability_always'] = '언제든지';
$string['solutionavailability_help'] = '참여자가 모든 빈칸의 정답이 보이는 전체 대본을 내려받을 수 있는 시점입니다.

* 제공하지 않음 — 교수자만 내려받을 수 있습니다.
* 시도를 완료한 뒤 — 참여자는 이 활동에서 시도를 완료한 뒤 내려받을 수 있습니다.
* 언제든지 — 참여자는 답하기 전에도 내려받을 수 있습니다.

권한이 있는 교수진은 이 설정과 관계없이 언제나 내려받을 수 있습니다.';
$string['solutionavailability_never'] = '제공하지 않음';
$string['subplugintype_elangscript'] = '문자 체계 처리기';
$string['subplugintype_elangscript_plural'] = '문자 체계 처리기';
$string['subtitleposition'] = '자막 표시';
$string['subtitleposition_below'] = '미디어 아래';
$string['subtitleposition_help'] = '대화형 자막을 어디에 표시할지 정합니다.

* 미디어 아래 — 전체 대본이 미디어 아래의 별도 스크롤 영역에 놓이며 재생을 따라갑니다.
* 동영상 위쪽 또는 아래쪽 — 지금 재생 중인 자막만 미디어 위에 겹쳐 표시됩니다.

소리만 있는 미디어에는 겹칠 화면이 없으므로 항상 미디어 아래 표시를 사용합니다. 설정 자체는 그대로 남아 있다가 활동이 동영상을 쓰면 다시 적용됩니다.';
$string['subtitleposition_overlaybottom'] = '동영상 아래쪽';
$string['subtitleposition_overlaytop'] = '동영상 위쪽';
$string['task_migratev1activities'] = '버전 1 활동 이전';
$string['transcriptheading'] = '참여자를 위한 대본';
$string['validate_cueafterend'] = '{$a->where}: {$a->endtime} ms에서 끝나 미디어 ({$a->duration} ms)보다 뒤입니다. 재생이 그곳에 이를 수 없습니다.';
$string['validate_cueendbeforestart'] = '{$a}: 종료가 시작보다 뒤가 아닙니다.';
$string['validate_cuewhere'] = '세그먼트 {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = '{$a}의 정답이 비어 있습니다.';
$string['validate_hintlevels'] = '{$a}의 힌트 단계가 1부터 시작하는 연속된 순서가 아닙니다.';
$string['validate_negativetime'] = '{$a}: 시작 시각이 녹음 시작보다 앞섭니다.';
$string['validate_nocues'] = '이 버전에는 세그먼트가 없습니다.';
$string['validate_nogaps'] = '이 버전에는 답할 빈칸이 없습니다.';
$string['validate_nonpositivelength'] = '{$a}의 문자 길이는 양수여야 합니다.';
$string['validate_rangeoutside'] = '{$a}의 문자 범위가 해당 대본을 벗어납니다.';
$string['validate_rangeoverlap'] = '{$a}의 문자 범위가 다른 빈칸과 겹칩니다.';
$string['validate_unknownalgorithm'] = '{$a->where}의 평가 알고리즘 “{$a->algorithm}”을(를) 인식할 수 없습니다.';
$string['validate_where'] = '세그먼트 {$a->cuekey}의 빈칸 {$a->gapkey}';
$string['verify_algorithmmismatch'] = '빈칸 {$a->gapkey}: 평가 알고리즘이 “{$a->actual}”이지만 “{$a->expected}”이(가) 예상되었습니다.';
$string['verify_attemptcount'] = '이전된 시도 수는 {$a->actual}이지만 1.x의 서로 다른 참여자 {$a->expected}명이 예상되었습니다.';
$string['verify_jarothreshold'] = '답안 비교 기준값은 {$a->actual}이지만 {$a->expected}이(가) 예상되었습니다.';
$string['verify_missingattempt'] = '사용자 {$a}: 이전된 시도가 예상되었으나 찾지 못했습니다.';
$string['verify_missingcue'] = '세그먼트 {$a}: 이전된 세그먼트가 없습니다.';
$string['verify_missinggap'] = '빈칸 {$a}: 이전된 빈칸이 없습니다.';
$string['verify_missinghint'] = '빈칸 {$a}: 버전 1에서는 여기에 도움말이 허용되었으나 힌트가 이전되지 않았습니다.';
$string['verify_orphancue'] = '세그먼트 {$a}: 대응하는 버전 1 세그먼트를 찾지 못했습니다.';
$string['verify_orphangap'] = '빈칸 {$a}: 대응하는 버전 1 빈칸을 찾지 못했습니다.';
$string['verify_rangemismatch'] = '빈칸 {$a}: 문자 범위가 버전 1 원본과 일치하지 않습니다.';
$string['verify_responsecount'] = '사용자 {$a->userid}: 이전된 답안 수는 {$a->actual}이지만 {$a->expected}이(가) 예상되었습니다.';
$string['verify_solutionmismatch'] = '빈칸 {$a->gapkey}: 정답이 “{$a->actual}”이지만 “{$a->expected}”이(가) 예상되었습니다.';
$string['verify_transcriptmismatch'] = '세그먼트 {$a}: 대본이 버전 1 원본과 일치하지 않습니다.';
$string['verify_unexpectedhint'] = '빈칸 {$a}: 버전 1에서는 여기에 도움말이 허용되지 않았으나 힌트가 이전되었습니다.';
