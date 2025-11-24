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
 * Strings for component 'course', language 'ko', version '4.5'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = '학습활동 선택기 꼬리말';
$string['activitychooseractivefooter_desc'] = '학습활동 선택기는 꼬리말에 항목을 추가하는 플러그인을 지원할 수 있습니다.';
$string['activitychoosercategory'] = '학습활동 선택기';
$string['activitychooserhidefooter'] = '꼬리말 없음.';
$string['activitychooserrecommendations'] = '추천 학습활동';
$string['activitychoosersettings'] = '학습활동 설정';
$string['activitychoosertabmode'] = '학습활동 선택기 탭';
$string['activitychoosertabmode_desc'] = '학습활동 선택기를 통해 교사는 강의에 추가할 학습활동과 학습자료를 쉽게 선택할 수 있습니다. 이 설정으로 학습활동 선택기에 표시할 탭을 결정합니다. 별 표시 탭은 한 개 이상의 학습활동이 별 표시되었을 경우에만 보여지고, 추천 탭은 사이트 관리자가 일부 추천 학습활동을 지정하였을 경우에만 보여집니다.';
$string['activitychoosertabmodeone'] = '별 표시, 모두, 학습활동, 학습자료, 추천';
$string['activitychoosertabmodethree'] = '별 표시, 학습활동, 학습자료, 추천';
$string['activitychoosertabmodetwo'] = '별 표시, 모두, 추천';
$string['activitydate:closed'] = '닫힘:';
$string['activitydate:closes'] = '닫기:';
$string['activitydate:opened'] = '열림:';
$string['activitydate:opens'] = '열기:';
$string['aria:coursecategory'] = '강의 범주';
$string['aria:courseimage'] = '강의 이미지';
$string['aria:coursename'] = '강의명';
$string['aria:courseshortname'] = '강의 약칭';
$string['aria:defaulttab'] = '기본 학습활동';
$string['aria:favourite'] = '강의에 별 표시';
$string['aria:favouritestab'] = '별 표시된 강의';
$string['aria:modulefavourite'] = '학습활동 {$a} 별 표시하기';
$string['aria:recommendedtab'] = '추천 학습활동';
$string['browsecourseadminindex'] = '현재 색인으로 강의 관리를 검색합니다.';
$string['browsesettingindex'] = '현재 색인으로 설정을 검색합니다.';
$string['completion_automatic:done'] = '완료:';
$string['completion_automatic:failed'] = '실패:';
$string['completion_automatic:todo'] = '실행:';
$string['completion_manual:aria:done'] = '{$a} 은(는) 완료로 표시됩니다. 실행을 취소하려면 누르세요.';
$string['completion_manual:aria:markdone'] = '{$a}을(를) 완료로 표시하기';
$string['completion_manual:done'] = '완료';
$string['completion_manual:markdone'] = '완료로 표시하기';
$string['completion_setby:auto:done'] = '완료: {$a->condition} ({$a->setby}에 의해 설정됨)';
$string['completion_setby:auto:todo'] = '실행: {$a->condition} ({$a->setby}에 의해 설정됨)';
$string['completion_setby:manual:done'] = '{$a->activityname}은(는) {$a->setby}에 의해 완료로 표시됩니다. 실행을 취소하려면 누르세요.';
$string['completion_setby:manual:markdone'] = '{$a->activityname}은(는) {$a->setby}에 의해 미완료로 표시됩니다. 완료로 표시하려면 누르세요.';
$string['completionrequirements'] = '{$a} 완료 요건';
$string['coursealreadyfinished'] = '이미 종료된 강의';
$string['coursecontentnotification'] = '콘텐츠 수정 알림 보내기';
$string['coursecontentnotification_help'] = '신규 또는 수정된 학습활동이나 학습자료를 수강생에게 알리려면 알림 상자를 선택하십시오. 학습활동이나 학습자료에 접근 가능한 사용자만이 알림을 받습니다.';
$string['coursecontentnotifnew'] = '신규 콘텐츠 {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>현 강의에서 {$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a>은(는) 신규입니다 <a href="{$a->courselink}">{$a->coursename}</a>.</p>
<p><a href="{$a->notificationpreferenceslink}"> 알림 기본설정 변경하기</a></p>';
$string['coursecontentnotifupdate'] = '수정 콘텐츠 {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>현 강의에서 {$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a>은(는) 수정되었습니다<a href="{$a->courselink}">{$a->coursename}</a>.</p>
<p><a href="{$a->notificationpreferenceslink}">알림 기본설정 변경하기</a></p>';
$string['coursenotyetfinished'] = '강의가 아직 끝나지 않았습니다.';
$string['coursenotyetstarted'] = '강의가 아직 시작되지 않았습니다.';
$string['courseparticipants'] = '강의 참가자';
$string['coursetoolong'] = '강의가 너무 깁니다.';
$string['customfield_islocked'] = '잠김';
$string['customfield_islocked_help'] = '필드가 잠겨 있으면 잠긴 사용자 정의 필드를 변경할 수 있는 사용자(관리자 역할을 가진 사용자)만이 강의 설정에서 변경할 수 있습니다.';
$string['customfield_notvisible'] = '아무도 없음';
$string['customfield_visibility'] = '표시 대상';
$string['customfield_visibility_help'] = '이 설정은 강의 목록이나 사용 가능한 대시보드 사용자 정의 필드 필터에서 사용자 정의 필드명과 값을 볼 수 있는 사람을 결정합니다.';
$string['customfield_visibletoall'] = '모든 사람';
$string['customfield_visibletoteachers'] = '교사';
$string['customfieldsettings'] = '공통 강의 사용자 정의 설정';
$string['downloadcontent'] = '강의 콘텐츠 다운로드에 포함';
$string['downloadcontent_help'] = '다운로드 가능한 강의 콘텐츠의 zip 파일에 해당 학습활동이나 학습자료가 포함되어야 합니까? 파일, 폴더, 페이지 및 레이블은 온전히 다운로드 할 수 있지만, 그 외의 학습활동과 학습자료는 모두 이름과 설명만 다운로드 됩니다. 이 옵션을 사용하려면 강의 설정에서 \'강의 콘텐츠 다운로드\'가 활성화 되어야 합니다.

해당 설정은 오프라인 사용을 위한 모바일 앱의 콘텐츠 다운로드에는 영향을 미치지 않습니다.';
$string['downloadcourseconfirmation'] = '강의 콘텐츠의 zip 파일을 다운로드하려고 합니다 (다운로드 불가능한 항목이나 {$a}보다 큰 파일은 제외).';
$string['downloadcoursecontent'] = '강의 콘텐츠 다운로드';
$string['downloadcoursecontent_help'] = '이 설정은 강의 콘텐츠 다운로드 기능이 있는 사용자(학생이나 교사 권한을 가진 사용자)가 강의 콘텐츠를 다운로드할 수 있는지 여부를 결정합니다.';
$string['enabledownloadcoursecontent'] = '강의 콘텐츠 다운로드 활성화';
$string['errorendbeforestart'] = '강의 종료일({$a})이 시작일보다 빠릅니다.';
$string['favourite'] = '별 표시된 강의';
$string['gradetopassnotset'] = '현 강의는 합격 성적 설정이 없습니다. 해당 강의의 성적 항목(성적부 설정)에서 설정할 수 있습니다.';
$string['informationformodule'] = '학습활동 {$a}에 대한 정보';
$string['module'] = '활동';
$string['namewithlink'] = '링크가 있는 범주명';
$string['noaccesssincestartinfomessage'] = '{$a->userfirstname}님, 안녕하세요.
<p>강의 {$a->coursename}의 많은 학생들이 해당 강의에 접속한 적이 없습니다.</p>';
$string['nocourseactivity'] = '강의 시작일과 종료일 사이에 학습활동이 충분하지 않습니다.';
$string['nocourseendtime'] = '해당 강의에 종료일이 없습니다.';
$string['nocoursesections'] = '강의 섹션 없음';
$string['nocoursestudents'] = '학생 없음';
$string['norecentaccessesinfomessage'] = '{$a->userfirstname}님, 안녕하세요.
<p>최근에 강의 {$a->coursename}의 많은 학생들이 해당 강의에 접속하지 않았습니다.</p>';
$string['noteachinginfomessage'] = '{$a->userfirstname}님, 안녕하세요.
<p>다음 주에 시작하는 강의에 교사가 없거나 학생 수강 등록이 없는 것으로 확인되었습니다.</p>';
$string['participants:perpage'] = '페이지당 참여자 수';
$string['participants:perpage_help'] = '각 강의의 참여자 메뉴에서 페이지당 표시되는 사용자 수.';
$string['participantsnavigation'] = '참여자 세번째 탐색.';
$string['pdfexportfont'] = 'PDF 글꼴';
$string['privacy:completionpath'] = '강의 수료';
$string['privacy:favouritespath'] = '강의 별 표시 정보';
$string['privacy:metadata:activityfavouritessummary'] = '해당 강의 시스템에는 사용자가 별 표시한 학습활동 선택기 항목에 대한 정보가 포함되어 있습니다.';
$string['privacy:metadata:completionsummary'] = '해당 강의에는 사용자에 대한 수료 정보가 포함되어 있습니다.';
$string['privacy:metadata:favouritessummary'] = '해당 강의에는 사용자가 별 표시한 강의와 관련된 정보가 포함되어 있습니다.';
$string['privacy:perpage'] = '페이지당 표시할 강의 수.';
$string['recommend'] = '추천';
$string['recommendcheckbox'] = '추천 활동 {$a}';
$string['relativedatessubmissionduedateafter'] = '강의 시작 후 {$a->datediffstr}';
$string['relativedatessubmissionduedatebefore'] = '강의 시작 전 {$a->datediffstr}';
$string['searchactivitiesbyname'] = '이름으로 학습활동 검색';
$string['searchresults'] = '검색 결과: {$a}';
$string['studentsatriskincourse'] = '강의 {$a}에서의 위기 직면 학생';
$string['studentsatriskinfomessage'] = '{$a->userfirstname}님, 안녕하세요.
<p>과정 {$a->coursename}의 학생이 위험한 상태인 것으로 확인되었습니다.</p>';
$string['submitsearch'] = '검색 결과 제출';
$string['target:coursecompetencies'] = '강의에서 제시한 역량을 달성하지 못할 위험에 처한 학생';
$string['target:coursecompetencies_help'] = '이 목표는 학생이 제시된 역량을 달성하지 못할 위험에 처했는지를 설명합니다. 해당 목표는 강의가 제시한 역량을 강의가 끝날 때까지 달성해야 합니다.';
$string['target:coursecompletion'] = '강의 수료 조건을 충족하지 못할 위험에 처한 학생';
$string['target:coursecompletion_help'] = '이 목표는 해당 학생이 강의 수료 조건을 충족하지 못할 위험에 처했는지를 보여줍니다.';
$string['target:coursedropout'] = '퇴출 위험에 처한 학생';
$string['target:coursedropout_help'] = '이 목표는 해당 학생이 퇴출 위험에 처했는지를 보여줍니다.';
$string['target:coursegradetopass'] = '강의 합격을 위한 최소 성적을 달성하지 못할 위험에 처한 학생';
$string['target:coursegradetopass_help'] = '이 목표는 해당 학생이 강의 합격을 위한 최소 성적을 달성하지 못할 위험에 처했는지를 보여줍니다.';
$string['target:noaccesssincecoursestart'] = '아직 강의에 접속하지 않은 학생';
$string['target:noaccesssincecoursestart_help'] = '이 목표는 등록한 강의에 접속한 적이 없는 학생을 보여줍니다.';
$string['target:noaccesssincecoursestartinfo'] = '다음 학생은 시작된 강의에 등록했으나, 해당 강의에 접근한 적이 없습니다.';
$string['target:norecentaccesses'] = '최근에 강의에 접속하지 않은 학생';
$string['target:norecentaccesses_help'] = '해당 목표는 설정한 분석 기간(기본값: 지난 달) 동안 등록한 강의에 접속하지 않은 학생을 식별합니다.';
$string['target:norecentaccessesinfo'] = '다음 학생은 설정한 분석 기간(기본값: 지난 달) 동안 등록한 강의에 접속하지 않았습니다.';
$string['target:noteachingactivity'] = '시작하지 못할 위험에 처한 강의';
$string['target:noteachingactivity_help'] = '이 목표는 다음 주에 시작 예정인 강의에 교수 활동이 있는지를 보여줍니다.';
$string['target:noteachingactivityinfo'] = '곧 시작될 예정인 다음 강의는 교사가 없거나 등록된 학생이 없기 때문에 시작하지 못할 위험에 처해있습니다.';
$string['targetlabelstudentcompetenciesno'] = '강의가 제시한 역량을 달성할 가능성이 있는 학생';
$string['targetlabelstudentcompetenciesyes'] = '강의가 제시한 역량을 달성하지 못할 위험에 처한 학생';
$string['targetlabelstudentcompletionno'] = '강의 수료 조건을 충족할 가능성이 있는 학생';
$string['targetlabelstudentcompletionyes'] = '강의 수료 조건을 충족하지 못할 위험에 처한 학생';
$string['targetlabelstudentdropoutno'] = '위험 요인 없음';
$string['targetlabelstudentdropoutyes'] = '퇴출 위험에 처한 학생';
$string['targetlabelstudentgradetopassno'] = '강의 합격을 위한 최소 성적을 충족할 가능성이 있는 학생';
$string['targetlabelstudentgradetopassyes'] = '강의 합격을 위한 최소 성적을 충족하지 못할 위기 직면한 학생';
$string['targetlabelteachingno'] = '시작하지 못할 위험에 처한 강의';
$string['targetlabelteachingyes'] = '강의에 접근할 수 있는 교수 역량이 있는 사용자';
