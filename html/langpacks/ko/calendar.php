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
 * Strings for component 'calendar', language 'ko', version '4.4'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = '활동 이벤트';
$string['addevent'] = '이벤트 추가';
$string['advancedoptions'] = '상세 설정';
$string['allday'] = '하루';
$string['annually'] = '매년';
$string['calendar'] = '캘린더';
$string['calendarexporturl'] = '캘린더 URL';
$string['calendarheading'] = '{$a} 캘린더';
$string['calendarpreferences'] = '달력 선택 설정';
$string['calendartypes'] = '캘린더 유형';
$string['calendarurlcopiedtoclipboard'] = '캘린더 URL이 클립보드에 복사되었습니다.';
$string['category'] = '카테고리';
$string['categoryevent'] = '카테고리 이벤트';
$string['categoryevents'] = '일정 분류';
$string['clickhide'] = '클릭하여 숨기기';
$string['clickshow'] = '클릭하여 표시하기';
$string['colactions'] = '행동';
$string['colcalendar'] = '캘린더';
$string['collastupdated'] = '마지막 업데이트';
$string['colpoll'] = '새로고침 주기';
$string['commontasks'] = '옵션';
$string['confirmeventdelete'] = '"{$a}"일정을 지울까요?';
$string['confirmeventseriesdelete'] = '"{$a->name}"일정은 묶음일정의 일부입니다. 이 일정을 지우길 원하거나, 아니면 모든 {$a->count}묶음일정을 지우기를 원하십니까?';
$string['confirmsubscriptiondelete'] = '"{$a}" 캘린더 구독을 삭제하시겠습니까?';
$string['copycalendarurl'] = '캘린더 URL 복사';
$string['copyurl'] = 'URL 복사';
$string['course'] = '강의';
$string['coursecalendar'] = '{$a} 캘린더';
$string['coursecalendarlink'] = '강의 달력';
$string['courseevent'] = '강의 이벤트';
$string['courseevents'] = '강의 이벤트';
$string['courses'] = '강의';
$string['customexport'] = '범위 설정 ({$a->timestart} - {$a->timeend})';
$string['daily'] = '매일';
$string['day'] = '하루';
$string['dayeventsmany'] = '{$a->num} 이벤트, {$a->day}';
$string['dayeventsnone'] = '이벤트 없음, {$a}';
$string['dayeventsone'] = '1 이벤트, {$a}';
$string['daynext'] = '다음날';
$string['dayprev'] = '이전날';
$string['dayviewfor'] = '일별 조회:';
$string['dayviewtitle'] = '일별 보기: {$a}';
$string['daywithnoevents'] = '해당 일은 이벤트가 없습니다.';
$string['default'] = '기본';
$string['deleteallevents'] = '모든 일정 지우기';
$string['deleteevent'] = '이벤트 삭제';
$string['deleteevents'] = '일정 삭제';
$string['deleteoneevent'] = '일정 지우기';
$string['detailedmonthviewfor'] = '자세한 월별 조회:';
$string['detailedmonthviewtitle'] = '자세한 달별 보기 {$a}';
$string['durationminutes'] = '지속 시간(분)';
$string['durationnone'] = '기간 없음';
$string['durationuntil'] = '~까지';
$string['editevent'] = '이벤트 편집';
$string['erroraddingevent'] = '이벤트 추가 실패';
$string['errorbadsubscription'] = '달력 구독이 없습니다.';
$string['errorbeforecoursestart'] = '강의 시작일 전에는 이벤트 설정이 불가합니다.';
$string['errorcannotimport'] = '지금 달력 구독을 설정할 수 없습니다.';
$string['errorhasuntilandcount'] = 'UNTIL 또는 COUNT는 반복 규칙에 나타날 수 있지만, UNTIL과 COUNT는 같은 반복 규칙에 나타나서는 안 됩니다.';
$string['errorinvalidbydayprefix'] = 'BYDAY 규칙 앞에 오는 정수 값은 MONTHLY 또는 YEARLY 반복 규칙에만 나타날 수 있습니다.';
$string['errorinvalidbydaysuffix'] = 'BYDAY 규칙의 요일 부분에 대한 유효한 값은 MO, TU, WE, TH, FR, SA 및 SU입니다.';
$string['errorinvalidbyhour'] = 'BYHOUR 규칙의 유효한 값은 0~23입니다.';
$string['errorinvalidbyminute'] = 'BYMINUTE 규칙의 유효한 값은 0~59입니다.';
$string['errorinvalidbymonth'] = 'BYMONTH 규칙의 유효한 값은 1~12입니다.';
$string['errorinvalidbymonthday'] = 'BYMONTHDAY 규칙에 유효한 값은 1~31 또는 -31~-1입니다.';
$string['errorinvalidbysecond'] = 'BYSECOND 규칙에 유효한 값은 0~59입니다.';
$string['errorinvalidbysetpos'] = 'BYSETPOS 규칙에 유효한 값은 1~366 또는 -366~-1입니다.';
$string['errorinvalidbyweekno'] = 'BYWEEKNO 규칙에 유효한 값은 1~53 또는 -53~-1입니다.';
$string['errorinvalidbyyearday'] = 'BYYEARDAY 규칙에 유효한 값은 1~366 또는 -366~-1입니다.';
$string['errorinvaliddate'] = '유효하지 않은 날짜';
$string['errorinvalidicalurl'] = 'iCal URL이 유효하지 않습니다.';
$string['errorinvalidinterval'] = 'INTERVAL 규칙의 값은 양의 정수여야 합니다.';
$string['errorinvalidminutes'] = '1~999 사이의 숫자를 입력하여 기간을 분 단위로 지정하세요.';
$string['errorinvalidrepeats'] = '1~999 사이의 숫자를 입력하여 이벤트 수를 지정하세요.';
$string['errormustbeusedwithotherbyrule'] = 'BYSETPOS 규칙은 다른 BYxxx 규칙 부분과 함께 사용해야 합니다.';
$string['errornodescription'] = '설명이 필요합니다.';
$string['errornoeventname'] = '이름이 필요합니다.';
$string['errornonyearlyfreqwithbyweekno'] = 'BYWEEKNO 규칙은 YEARLY 규칙에만 유효합니다.';
$string['errorrequiredurlorfile'] = '달력을 가져오기 하기 위해서 URL이나 파일이 필요합니다.';
$string['errorrrule'] = '통과된 반복 규칙이 잘못된 것 같습니다.';
$string['errorrruleday'] = '반복 규칙에 잘못된 요일 매개변수가 있습니다.';
$string['errorrrulefreq'] = '반복 규칙에 잘못된 빈도 매개변수가 있습니다.';
$string['eventcalendareventcreated'] = '캘린더 이벤트가 생성되었습니다.';
$string['eventcalendareventdeleted'] = '캘린더 이벤트가 삭제되었습니다.';
$string['eventcalendareventupdated'] = '캘린더 이벤트가 업데이트되었습니다.';
$string['eventdate'] = '일자';
$string['eventdescription'] = '설명';
$string['eventduration'] = '기간';
$string['eventendtime'] = '종료 시간';
$string['eventendtimewrapped'] = '{$a} (종료 시간)';
$string['eventinstanttime'] = '시간';
$string['eventkind'] = '시간';
$string['eventname'] = '일정 이름';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnamelocation'] = '{$a->name} 위치: {$a->location}';
$string['eventnone'] = '이벤트 없음';
$string['eventrepeat'] = '반복';
$string['events'] = '이벤트';
$string['eventsall'] = '모든 이벤트';
$string['eventsdeleted'] = '이벤트 삭제됨';
$string['eventsfor'] = '{$a} 일정';
$string['eventsimported'] = '이벤트 가져옴 : {$a}';
$string['eventskey'] = '일정 키';
$string['eventsrelatedtocourses'] = '강좌 관련 일정';
$string['eventstarttime'] = '시작 시간';
$string['eventsupdated'] = '이벤트 업데이트됨 : {$a}';
$string['eventtime'] = '시간';
$string['eventtype'] = '일정 종류';
$string['eventtypecourse'] = '강의';
$string['eventtypesite'] = '사이트';
$string['eventview'] = '일정 상세정보';
$string['expired'] = '기간이 끝남';
$string['explain_site_timeformat'] = '사이트 전체의 시간 표시 형태를 12시간제로 표시할지 24시간제로 표시할지를 선택할 수 있습니다. "기본값"을 선택하면 자동적으로 사이트에서 사용하는 시간표시 형태로 나타납니다. 사용자들은 자신의 설정에서 이를 바꿀 수 있습니다.';
$string['export'] = '내보내기';
$string['exportbutton'] = '내보냄';
$string['exportcalendar'] = '달력 내보냄';
$string['fri'] = '금';
$string['friday'] = '금요일';
$string['generateurlbutton'] = '달력 URL 가져옴';
$string['gotoactivity'] = '활동으로 이동';
$string['gotocalendar'] = '달력으로 가기';
$string['group'] = '모둠';
$string['groupevent'] = '모둠 행사';
$string['groupevents'] = '모듬 일정';
$string['hourly'] = '매 시간';
$string['importcalendar'] = '달력 가져오기';
$string['importcalendarfrom'] = '가져오기:';
$string['importcalendarheading'] = '달력 가져오기...';
$string['importfromfile'] = '달력 파일 (.ics)';
$string['importfromurl'] = '달력 URL';
$string['invalidtimedurationminutes'] = '입력한 지속 시간(분)이 정확하지 않습니다. 0 이상의 값을 넣거나 지속시간 없음을 선택하세요.';
$string['invalidtimedurationuntil'] = '행사 종료 일시가 행사 시작 일시보다 이릅니다. 계속하기 전에 이를 바로잡기 바랍니다.';
$string['iwanttoexport'] = '내보내기';
$string['managesubscriptions'] = '구독 관리';
$string['manyevents'] = '{$a} 일정';
$string['mon'] = '월';
$string['monday'] = '월요일';
$string['monthly'] = '매달';
$string['monthnext'] = '다음 달';
$string['monththis'] = '이번 달';
$string['namewithsource'] = '{$a->name}({$a->source})';
$string['never'] = '접속안함';
$string['newevent'] = '새로운 일정';
$string['nocalendarsubscriptions'] = '달력 구독이 없습니다.';
$string['notitle'] = '제목 없음';
$string['noupcomingevents'] = '계획된 일정이 없습니다.';
$string['oneevent'] = '일정 하나';
$string['pollinterval'] = '업데이트 간격';
$string['pollinterval_help'] = '얼마나 자주 달력이 새 이벤트로 업데이트되기를 원하는지.';
$string['pref_lookahead'] = '곧 있을 일정 미리보기';
$string['pref_lookahead_help'] = '향후 행사로 표시될 행사가 예정된 날의 수를 설정합니다. 이 이후의 행사는 향후 행사에 나타나지 않습니다. 이 시간 기간동안 모든 행사가 표시될 것이라는것은 보증되지 않습니다.: 만일 (최대 향후 행사 수 보다) 너무 많은 행사가 있는 경우 나중 행사들은 표시되지 않을 것입니다.';
$string['pref_maxevents'] = '도래할 일정의 최대수';
$string['pref_maxevents_help'] = '미리 보여줄 일정의 최대수를 설정하는 것임. 큰 수를 넣으면 그만큼 많은 행사를 미리 보여 줄 수 있겠지만, 화면을 많이 차지하게 될 것입니다.';
$string['pref_persistflt'] = '필터 설정 기억';
$string['pref_persistflt_help'] = '이를 활성화 해 놓으면 무들은 여러분이 로그인 할 때마다 자동적으로 일정의 필터 설정에 대해 상기시키고 이를 복구할 것이다.';
$string['pref_startwday'] = '한 주의 첫 요일';
$string['pref_startwday_help'] = '여기에서 선택한 요일을 한 주를 시작하는 요일로 달력에 표시할 것이다. ';
$string['pref_timeformat'] = '시간 표시 형식';
$string['pref_timeformat_help'] = '시간 표시 방법을 12시 혹은 24시 형식 중에서 고를 수 있다. "기본"을 선택하면 사이트에서 사용하는 기본 언어팩에 의해 자동적으로 결정된다.';
$string['preferences'] = '맞춤설정';
$string['preferences_available'] = '개인적 설정';
$string['recentupcoming'] = '현재와 추후 2달';
$string['repeatedevents'] = '반복된 일정';
$string['repeateditall'] = '반복된 일련의 모든 {$a} 일정 변경';
$string['repeateditthis'] = '이 일정만 변경';
$string['repeatevent'] = '이 일정 반복';
$string['repeatnone'] = '반복 없음';
$string['repeatweeksl'] = '매주 반복, 모두 생성함';
$string['repeatweeksr'] = '반복일정';
$string['sat'] = '토';
$string['saturday'] = '토요일';
$string['shown'] = '보여짐';
$string['site'] = '사이트';
$string['siteevents'] = '사이트 이벤트';
$string['spanningevents'] = '진행중인 일정';
$string['subscriptionname'] = '달력 이름';
$string['subscriptionremoved'] = '달력 구독 {$a} 이 제거되었습니다';
$string['subscriptions'] = '구독';
$string['subscriptionupdated'] = '달력 구독 {$a} 이 업데이트되었습니다';
$string['sun'] = '일';
$string['sunday'] = '일요일';
$string['thu'] = '목';
$string['thursday'] = '목요일';
$string['timeformat_12'] = '12-시간(오전/오후)';
$string['timeformat_24'] = '24-시간';
$string['today'] = '오늘';
$string['tomorrow'] = '내일';
$string['tt_deleteevent'] = '일정 삭제';
$string['tt_editevent'] = '일정 편집';
$string['tue'] = '화';
$string['tuesday'] = '화요일';
$string['typecategory'] = '종류별 일정';
$string['typeclose'] = '일정 닫기';
$string['typecourse'] = '강좌 일정';
$string['typedue'] = '일정 기한';
$string['typegradingdue'] = '일정 등급 매기기';
$string['typegroup'] = '모둠 일정';
$string['typeopen'] = '일정 열기';
$string['typesite'] = '사이트 일정';
$string['typeuser'] = '사용자 일정';
$string['upcomingevents'] = '예정된 행사';
$string['upcomingeventsfor'] = '다가오는 이벤트:';
$string['urlforical'] = '달력에 기재할 iCalendar 내보냄을 위한 URL';
$string['user'] = '사용자';
$string['userevent'] = '사용자 행사';
$string['userevents'] = '사용자 일정';
$string['wed'] = '수';
$string['wednesday'] = '수요일';
$string['weekly'] = '주별';
$string['weeknext'] = '다음 주';
$string['weekthis'] = '이번 주';
$string['when'] = '언제?';
$string['yesterday'] = '어제';
$string['youcandeleteallrepeats'] = '이 것은 일련의 반복되는 일정의 한 부분입니다. 이 일정만 제거하거나 일련의 모든 {$a} 일정을 한꺼번에 제거할 수 있습니다.';
