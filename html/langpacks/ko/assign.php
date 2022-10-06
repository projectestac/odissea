<?php

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
 * Strings for component 'assign', language 'ko', branch 'MOODLE_38_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = '관심이 필요한 과제가 있습니다.';
$string['addattempt'] = '또 다른 시도 추가';
$string['addnewattempt'] = '새 시도 추가';
$string['addnewattemptfromprevious'] = '이전 제출에 기반한 새 시도 추가';
$string['addnewattemptfromprevious_help'] = '작업을 계속할 수 있도록 이전 제출의 내용을 새로운 제출에 복사합니다.';
$string['addnewattempt_help'] = '작업할 수 있는 새 빈 제출을 생성합니다.';
$string['addsubmission'] = '제출 추가';
$string['allowsubmissions'] = '사용자들에게 이 과제에 대해 제출을 계속하도록 허용합니다.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = '과제 세부사항과 제출 양식이 <strong>{$a}</strong> 부터 사용가능합니다.';
$string['allowsubmissionsfromdate'] = '제출 시작일:';
$string['allowsubmissionsfromdatesummary'] = '이 과제는 <strong>{$a}</strong>부터 제출이 가능합니다.';
$string['allowsubmissionsshort'] = '제출 변경 허용';
$string['alwaysshowdescription'] = '설명 항상 보여주기';
$string['alwaysshowdescription_help'] = '비활성화되면  과제 제출 허용일에 과제 설명이 보여지게 됩니다.';
$string['applytoteam'] = '모둠 전체에 성적과 피드백 적용';
$string['assign:addinstance'] = '새 과제 추가';
$string['assign:exportownsubmission'] = '내 제출 내보내기';
$string['assignfeedback'] = '피드백 플러그인';
$string['assignfeedbackpluginname'] = '피드백 플러그인';
$string['assign:grade'] = '과제 채점';
$string['assign:grantextension'] = '연장 허가';
$string['assignmentisdue'] = '과제 제출 마감 시한';
$string['assignmentname'] = '과제명';
$string['assignmentplugins'] = '과제 플러그인';
$string['assignmentsperpage'] = '페이지당 과제 수';
$string['assign:revealidentities'] = '학생의 아이덴티티 노출';
$string['assignsubmission'] = '제출 플러그인';
$string['assignsubmissionpluginname'] = '제출 플러그인';
$string['assign:submit'] = '과제 제출';
$string['assign:view'] = '과제 보기';
$string['assign:viewgrades'] = '성적 보기';
$string['attemptheading'] = '시도 {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = '이전 시도';
$string['attemptnumber'] = '시도 수';
$string['attemptreopenmethod'] = '시도 재개';
$string['attemptreopenmethod_manual'] = '수동으로';
$string['attemptreopenmethod_none'] = '절대 아님';
$string['attemptreopenmethod_untilpass'] = '통과할때까지 자동으로';
$string['attemptsettings'] = '시도 설정';
$string['availability'] = '사용가능성';
$string['backtoassignment'] = '과제로 돌아가기';
$string['batchoperationconfirmaddattempt'] = '선택된 제출에 대한 또 다른 시도를 허용 하시겠습니까?';
$string['batchoperationconfirmgrantextension'] = '선택한 모든 제출들에 연장 허가.';
$string['batchoperationconfirmlock'] = '선택된 모든 제출을 잠글까요?';
$string['batchoperationconfirmreverttodraft'] = '선택된 제출들을 초안으로 되돌릴까요?';
$string['batchoperationconfirmunlock'] = '선택된 모든 제출 잠금을 풀까요?';
$string['batchoperationlock'] = '제출 잠금';
$string['batchoperationreverttodraft'] = '선택된 제출들을 초안으로 되돌림';
$string['batchoperationsdescription'] = '선택된...';
$string['batchoperationunlock'] = '제출 잠금 해제';
$string['blindmarking'] = '사용자정보 없이 채점';
$string['choosegradingaction'] = '채점 행위';
$string['chooseoperation'] = '작업 선택';
$string['comment'] = '덧글';
$string['completionsubmit'] = '완료하려면 학생은 이 활동에 제출해야 합니다';
$string['configshowrecentsubmissions'] = '모든 사람이 최근 활동의 제출물 공지사항을 볼 수 있습니다.';
$string['confirmbatchgradingoperation'] = '{$a->count}명의 학생들을 위해 {$a->operation}를 하시겠습니까?';
$string['confirmsubmission'] = '채점을 위해 과제를 제출 하시겠습니까? 제출하면 이상 변경할 수 없습니다.';
$string['conversionexception'] = '과제를 변환할 수 없습니다. 예외: {$a}';
$string['couldnotconvertgrade'] = '사용자 {$a}에 대한 과제 성적을 변환할 수 없습니다.';
$string['couldnotconvertsubmission'] = '사용자 {$a}에 대한 과제 제출을 변환할 수 없습니다.';
$string['couldnotcreatecoursemodule'] = '강좌 모듈을 생성할 수 없었습니다.';
$string['couldnotcreatenewassignmentinstance'] = '새 과제 인스탄스를 생성할 수 없었습니다.';
$string['couldnotfindassignmenttoupgrade'] = '업그레이드할 오래된 과제 인스턴스를 찾을 수 없습니다.';
$string['currentattempt'] = '시도 {$a}입니다.';
$string['currentattemptof'] = '시도 {$a->attemptnumber} ({$a->maxattempts} 시도가 허용됩니다.)';
$string['currentgrade'] = '성적부에서 현재 성적';
$string['cutoffdate'] = '최종 마감일';
$string['cutoffdatefromdatevalidation'] = '최종 마감일은 마감일 이후이어야 합니다.';
$string['cutoffdate_help'] = '설정되면, 과제는 연장없이 이 날짜 이후에 제출을 허용하지 않습니다.';
$string['cutoffdatevalidation'] = '최종 마감일은 마감일 보다 먼저일 수 없습니다.';
$string['defaultsettings'] = '기본 과제 설정';
$string['defaultsettings_help'] = '이 설정은 모든 새로운 과제에 대한 기본 설정을 정의합니다.';
$string['defaultteam'] = '기본 모둠';
$string['deleteallsubmissions'] = '모든 제출물 삭제';
$string['description'] = '설명';
$string['downloadall'] = '모든 제출물 내려받기';
$string['duedate'] = '마감 일시';
$string['duedatecolon'] = '마감 일시: {$a}';
$string['duedateno'] = '무기한';
$string['duedatereached'] = '이 과제 제출 마감일이 지났습니다.';
$string['duedatevalidation'] = '마감일는 제출 시작일 이후여야 합니다.';
$string['editaction'] = '액션...';
$string['editattemptfeedback'] = '시도 번호 {$a}에 대한 성적과 피드백을 편집 할 수 있습니다.';
$string['editingstatus'] = '상태 편집';
$string['editsubmission'] = '제출물 편집';
$string['editsubmission_help'] = '제출한 것 변경';
$string['enabled'] = '활성화됨';
$string['errornosubmissions'] = '다운로드할 제출물이 없습니다.';
$string['errorquickgradingvsadvancedgrading'] = '이 과제는 현재 고급 채점을 사용하고 있어서 성적이 저장되지 않았습니다.';
$string['extensionduedate'] = '제출일 연장';
$string['extensionnotafterduedate'] = '연장 날짜는 제출 마감일 이후여야합니다';
$string['extensionnotafterfromdate'] = '연장 날짜는 제출 허용 날짜 이후여야합니다';
$string['feedback'] = '과제평';
$string['feedbackavailablesmall'] = '{$a->username}가 과제 {$a->assignment}에 대한 피드백을 했습니다.';
$string['feedbackplugin'] = '피드백 플러그인';
$string['feedbackpluginforgradebook'] = '성적부에 코멘트를 올릴 피드백 플러그인';
$string['feedbackpluginforgradebook_help'] = '오직 한개의 과제 피드백 플러그인이 성적부에 피드백을 올릴 수 있습니다.';
$string['feedbackplugins'] = '피드백 플러그인';
$string['feedbacksettings'] = '피드백 설정';
$string['feedbacktypes'] = '피드백 유형';
$string['filesubmissions'] = '파일 제출';
$string['filter'] = '필터';
$string['filternone'] = '필터 없음';
$string['filterrequiregrading'] = '채점 필요';
$string['filtersubmitted'] = '제출 완료';
$string['gradeabovemaximum'] = '성적은 {$a} 이하여야 합니다.';
$string['gradebelowzero'] = '성적은 0 이상이어야 합니다.';
$string['graded'] = '채점됨';
$string['gradedby'] = '채점자:';
$string['gradedfollowupsubmit'] = '채점됨 - 추후 제출 수령됨';
$string['gradedon'] = '채점일:';
$string['gradelocked'] = '해당 점수가 채점표에서 잠겼거나 덮어 써졌습니다.';
$string['gradeoutof'] = '{$a} 중 채점';
$string['gradeoutofhelp'] = '성적';
$string['gradeoutofhelp_help'] = '여기에 학생의 제출에 대한 성적을 입력하십시요. 소수점을 사용해도 됩니다.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} 은 {$a->timeupdated} 에<i>\'{$a->assignment}\'</i>에 대한 과제 제출을 업데이트 하였습니다.<br /><br />
업데이트한 과제는 <a href="{$a->url}">웹사이트</a>에 있습니다.';
$string['gradersubmissionupdatedsmall'] = '{$a->username}가 과제 {$a->assignment} 에 대한 제출을 업데이트 했습니다.';
$string['gradersubmissionupdatedtext'] = '{$a->username}은 {$a->timeupdated} 에 \'{$a->assignment}\'에 대한 과제 제출을 업데이트 하였습니다. 업데이트한 과제는 {$a->url} 에 있습니다.';
$string['gradestudent'] = '채점:  (아이디={$a->id}, 전체이름={$a->fullname}).';
$string['gradeuser'] = '성적 {$a}';
$string['grading'] = '채점';
$string['gradingchangessaved'] = '성적 변경 사항이 저장되었습니다';
$string['gradingmethodpreview'] = '채점 기준';
$string['gradingoptions'] = '옵션';
$string['gradingstatus'] = '채점 상태';
$string['gradingstudent'] = '학생 성적 부여';
$string['gradingsummary'] = '채점 요약';
$string['grantextension'] = '연장 허가';
$string['grantextensionforusers'] = '{$a}  학생들에게 연장 허가';
$string['groupsubmissionsettings'] = '모둠 제출 설정';
$string['hiddenuser'] = '참가자';
$string['hideshow'] = '감추기/보여주기';
$string['instructionfiles'] = '안내 파일';
$string['invalidfloatforgrade'] = '성적이 납득될 수 없습니다 : {$a}';
$string['invalidgradeforscale'] = '입력한 성적은 현재 척도에 맞지 않습니다.';
$string['lastmodifiedgrade'] = '마지막 수정됨(성적)';
$string['lastmodifiedsubmission'] = '마지막 수정됨(제출)';
$string['latesubmissions'] = '늦은 제출';
$string['latesubmissionsaccepted'] = '연장 허가를 받은 학생들만 아직 과제를 제출할 수 있습니다';
$string['locksubmissionforstudent'] = '다음 학생에 대해 추가 제출을 못하도록 합니다:  (아이디={$a->id}, 전체이름={$a->fullname})';
$string['locksubmissions'] = '제출 잠금';
$string['manageassignfeedbackplugins'] = '과제 피드백 플러그인 관리';
$string['manageassignsubmissionplugins'] = '과제 제출 플러그인 관리';
$string['markingworkflowstate'] = '표시 진행 상태';
$string['markingworkflowstate_help'] = '당신의 권한에 따라, 업무흐름은 다음 중 하나가 될 수 있습니다.

* 아직 채점하지 않음 - 채점자가 아직 시작하지 않음
* 채점중 - 채점자가 현재 채점중
* 채점 완료 - 채점자가 현재 완료하였으나, 확인이 필요할 수 있음
* 검토중 - 최종 검토를 담당하는 선생님이 현재 확인 중
* 발표 대기 - 최종 확인이 끝났으나, 결과를 발표하기 전 대기중
* 발표 - 학생들이 자신의 점수와 선생님의 의견을 읽을 수 있음.';
$string['markingworkflowstateinmarking'] = '표시 중';
$string['markingworkflowstateinreview'] = '검토 중';
$string['markingworkflowstatenotmarked'] = '표시되지 않음';
$string['markingworkflowstatereadyforrelease'] = '공개 준비 완료';
$string['markingworkflowstatereadyforreview'] = '채점 완료';
$string['markingworkflowstatereleased'] = '공개됨';
$string['maxattempts'] = '최대 시도';
$string['maxgrade'] = '최대 성적';
$string['messageprovider:assign_notification'] = '과제 통지';
$string['modulename'] = '과제';
$string['modulenameplural'] = '과제제출';
$string['multipleteams'] = '한 그룹 이상의 회원';
$string['multipleteams_desc'] = '본 과제는 그룹 제출 과제입니다. 당신은 두 그룹 이상의 회원입니다. 과제 제출을 위해서는 반드시 한 곳에만 속해 있어야 합니다.  가입된 그룹을 변경 하려면 담당 선생님께 문의하시기 바랍니다.';
$string['mysubmission'] = '내 제출';
$string['newsubmissions'] = '제출된 과제들';
$string['noattempt'] = '시도 없음';
$string['nofiles'] = '파일 없음';
$string['nograde'] = '성적 없음';
$string['nolatesubmissions'] = '늦은 제출은 받지 않습니다.';
$string['nomoresubmissionsaccepted'] = '더 이상 제출을 받지 않습니다';
$string['noonlinesubmissions'] = '이 과제는 온라인으로 제출하는 것을 요구하지 않습니다.';
$string['nosavebutnext'] = '다음';
$string['nosubmission'] = '이 과제에 대해 제출된 것이 없습니다.';
$string['nosubmissionsacceptedafter'] = '다음 이후에는 제출을 받지 않습니다';
$string['noteam'] = '어느 그룹의 회원도 아님';
$string['noteam_desc'] = '본 과제는 그룹 제출 과제입니다. 당신은 어떤 그룹에도 속해 있지 않기 때문에, 과제물을 제출할 수 없습니다.  그룹에 참여하려면 담당 선생님에게 연락하시기 바랍니다.';
$string['notgraded'] = '채점되지 않음';
$string['notgradedyet'] = '아직 채점되지 않음';
$string['notifications'] = '통지';
$string['notsubmittedyet'] = '아직 제출되지 않음';
$string['nousersselected'] = '선택된 사용자가 없습니다.';
$string['numberofdraftsubmissions'] = '초안';
$string['numberofparticipants'] = '참가자';
$string['numberofsubmissionsneedgrading'] = '채점이 필요합니다.';
$string['numberofsubmittedassignments'] = '제출함';
$string['numberofteams'] = '모둠';
$string['offline'] = '온라인 제출이 필요하지 않습니다.';
$string['open'] = '열기';
$string['outlinegrade'] = '성적 {$a}';
$string['outof'] = '{$a->total}중 {$a->current}';
$string['overdue'] = '<font color="red">과제 제출 기한이 {$a} 지났습니다, </font>';
$string['page-mod-assign-view'] = '과제 모듈 주 페이지 및 제출 페이지';
$string['page-mod-assign-x'] = '모든 과제 모듈 페이지';
$string['participant'] = '참가자';
$string['pluginadministration'] = '과제 관리';
$string['pluginname'] = '과제';
$string['preventsubmissions'] = '이 과제에 데헤 추가 제출 금지';
$string['preventsubmissionsshort'] = '제출 변경 금지';
$string['previous'] = '이전으로';
$string['privacy:gradepath'] = '성적';
$string['quickgrading'] = '빠른 채점';
$string['quickgradingchangessaved'] = '채점 변경이 저장되었습니다.';
$string['quickgradingresult'] = '빠른 채점';
$string['recordid'] = '식별자';
$string['requireallteammemberssubmit'] = '모든 모둠 구성원이 제출해야 합니다.';
$string['requiresubmissionstatement'] = '학생들에게 제출문에 동의할 것을 요구';
$string['revealidentities'] = '학생들의 아이덴티티 공개';
$string['reverttodraft'] = '제출을 초안 상태로 돌리기';
$string['reverttodraftforstudent'] = '제출을 초안으로 되돌림:  (아이디={$a->id}, 성명={$a->fullname})';
$string['reverttodraftshort'] = '제출을 초안으로 되돌림';
$string['reviewed'] = '검토했음';
$string['save'] = '저장';
$string['saveallquickgradingchanges'] = '모든 빠른 채점 변경 저장';
$string['savechanges'] = '변경사항 저장';
$string['savegradingresult'] = '성적';
$string['savenext'] = '저장하고 다음 것 보기';
$string['scale'] = '척도';
$string['selectedusers'] = '선택된 사용자';
$string['selectlink'] = '선택 ...';
$string['selectuser'] = '{$a} 선택';
$string['sendlatenotifications'] = '채점자에게 늦은 제출 통지하기';
$string['sendnotifications'] = '채점자에게 제출 통지하기';
$string['sendstudentnotifications'] = '학습자들에게 통지';
$string['sendstudentnotificationsdefault'] = '학습자 통지 기본 설정';
$string['sendsubmissionreceipts'] = '학생들에게 제출 확인증을 보냅니다.';
$string['settings'] = '과제 설정';
$string['showrecentsubmissions'] = '최근 제출물 보기';
$string['status'] = '상태';
$string['submission'] = '제출';
$string['submissiondrafts'] = '학생들이 제출 버튼 클릭 필요';
$string['submissioneditable'] = '학생들은 이 제출을 편집할 수 있습니다.';
$string['submissionempty'] = '아무것도 제출되지 않았습니다.';
$string['submissionlog'] = '학생: {$a->fullname}, 상태: {$a->status}';
$string['submissionnotcopiedinvalidstatus'] = '제출물이 다시 열린 후에 편집되어 제출물이 복사되지 않았습니다.';
$string['submissionnoteditable'] = '학생들은 이 제출을 편집할 수 없습니다.';
$string['submissionnotready'] = '이 과제는 제출할  준비가 안되어 있습니다.';
$string['submissionplugins'] = '제출 플러그인';
$string['submissionreceipts'] = '제출 확인증 보내기';
$string['submissionreceiptsmall'] = '{$a->assignment}에 대한 과제를 제출하였습니다.';
$string['submissionreceipttext'] = '"{$a->assignment}" 에 대한 과제를 제출하였습니다.

과제 제출 상태를 볼 수 있습니다:  {$a->url}';
$string['submissionsclosed'] = '제출이 마감되었습니다.';
$string['submissionsettings'] = '제출 설정';
$string['submissionslocked'] = '이 과제는 제출을 받지 않습니다.';
$string['submissionslockedshort'] = '제출변경이 허용되지 않습니다.';
$string['submissionsnotgraded'] = '제출이 채점되지 않았습니다. {$a}';
$string['submissionstatement'] = '제출문';
$string['submissionstatementacceptedlog'] = '사용자 {$a}가 제출문에 동의하였습니다.';
$string['submissionstatementdefault'] = '이 과제는 혼자의 힘으로 한 것입니다. 다른 사람이 한 일을 이용한 경우에는 이 사실을 표시하였습니다.';
$string['submissionstatement_help'] = '과제 제출 확인글';
$string['submissionstatus'] = '제출 상태';
$string['submissionstatus_'] = '제출이 없습니다.';
$string['submissionstatus_draft'] = '초안(제출 되지 않았음)';
$string['submissionstatusheading'] = '제출 상태';
$string['submissionstatus_marked'] = '채점됨';
$string['submissionstatus_new'] = '새 제출';
$string['submissionstatus_reopened'] = '다시 오픈됨';
$string['submissionstatus_submitted'] = '채점을 위해 제출되었습니다.';
$string['submissionsummary'] = '{$a->status}. {$a->timemodified}에  마지막 수정';
$string['submissionteam'] = '모둠';
$string['submissiontypes'] = '제출 유형';
$string['submitaction'] = '제출';
$string['submitassignment'] = '과제 제출';
$string['submitassignment_help'] = '과제가 제출되면 더 이상 변경할 수 없습니다.';
$string['submitforgrading'] = '채점을 위한 제출';
$string['submitted'] = '제출 완료';
$string['submittedearly'] = '과제가 {$a} 일찍 제출되었습니다.';
$string['submittedlate'] = '과제가 {$a} 늦게 제출되었습니다.';
$string['submittedlateshort'] = '{$a} 늦음';
$string['subplugintype_assignfeedback'] = '피드백 플러그인';
$string['subplugintype_assignfeedback_plural'] = '피드백 플러그인';
$string['subplugintype_assignsubmission'] = '제출 플러그인';
$string['subplugintype_assignsubmission_plural'] = '제출 플러그인';
$string['teamname'] = '팀: {$a}';
$string['teamsubmission'] = '모둠에서 학생 제출';
$string['teamsubmissiongroupingid'] = '학습 모둠들을 위한 모둠 무리';
$string['textinstructions'] = '과제 안내';
$string['timemodified'] = '마지막 수정';
$string['timeremaining'] = '남은 시간';
$string['timeremainingcolon'] = '남은 시간: {$a}';
$string['ungroupedusers'] = '\'제출하기 위해서는 그룹이 요구됨\'이란 설정이 활성화되어 있는데,  사용자가 어느 그룹의 회원도 아니거나 또 두 그룹 이상의 회원이라면 제출할 수 없습니다.';
$string['ungroupedusersoptional'] = '\'학생들은 그룹으로 제출할 것\'이라는 설정이 활성화되어 있는데 일부 사용자가 그룹의 구성원이 아니거나 둘 이상의 그룹의 구성원입니다. 이런 학생들은 \'기본 그룹\'의 회원으로 제출됨을 유념하십시오.';
$string['unlimitedattempts'] = '무제한';
$string['unlimitedattemptsallowed'] = '무제한 시도가 허용됩니다.';
$string['unlocksubmissionforstudent'] = '학생에게 제출 허용 : (아이디={$a->id}, 전체이름={$a->fullname}).';
$string['unlocksubmissions'] = '제출 잠금 해제';
$string['updategrade'] = '성적 업데이트';
$string['updatetable'] = '저장하고 테이블 업데이트';
$string['upgradenotimplemented'] = '업그레이드가 플러그인 ({$a->type} {$a->subtype})에는 구현되지 않았습니다.';
$string['userextensiondate'] = '{$a} 까지 연장되었습니다.';
$string['usergrade'] = '사용자 성적';
$string['userswhoneedtosubmit'] = '제출이 필요한 사용자 : {$a}';
$string['viewfeedback'] = '피드백 보기';
$string['viewfeedbackforuser'] = '사용자 {$a}에 대한 피드백 보기';
$string['viewfull'] = '전체 보기';
$string['viewfullgradingpage'] = '피드백하기 위해 전체 채점 페이지 열기';
$string['viewgradebook'] = '성적부 보기';
$string['viewgrading'] = '모든 제출 보기/채점하기';
$string['viewgradingformforstudent'] = '학생의 채점 페이지 보기  (아이디={$a->id}, 전체이름={$a->fullname}).';
$string['viewownsubmissionform'] = '자신이 제출한 과제 페이지 보기';
$string['viewownsubmissionstatus'] = '자신의 제출 상태 페이지';
$string['viewrevealidentitiesconfirm'] = '학생의 아이덴티티를 공개하는 것을 확인하는 페이지 보기';
$string['viewsubmission'] = '제출 보기';
$string['viewsubmissionforuser'] = '사용자 {$a}의  제출 보기';
$string['viewsubmissiongradingtable'] = '제출 채점 테이블 보기';
$string['viewsummary'] = '보기 요약';
$string['workflowfilter'] = '워크플로우 필터';
