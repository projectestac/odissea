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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = '변수에 대한 제한요소(조건)을 추가하세요.';
$string['addmorevarblanks'] = '더 많은 {no} 변수를 위한 공백';
$string['answerinvalid'] = '응답에서 답변-스트링이 적절하지 않습니다. 이는 발생하지 않아야 합니다.';
$string['answermissing'] = '응답에서 답변이 사라졌습니다. 아마도 자바스크립트를 브라우저에서 사용할 수 없거나 알 수 없는 오류가 발생하였습니다.';
$string['answervar'] = '자동 채점을 위한 변수';
$string['answervar_help'] = '자동 채점: 학생이 질문을 (부분적으로) 해결하면 true인 지오지브라에서 진릿값 대상의 이름. 모든 진릿값 변수의 점수를 합산합니다. 만일 어떤 조합이 100%를 넘었으나, 합산된 것이 정확하게 100%가 되는 최소한 하나의 조합이 존재해야만, 그 질문이 올바른 것이 됩니다. 수동 채점을 위해서는 공백으로 남겨놓으십시오.';
$string['applet_advanced_settings'] = '고급 설정...';
$string['constraints'] = '제한요소 (조건)';
$string['constraints_help'] = '(콤마로 분리되어) a < b 와 같이 슬라이더 조건을 사용하여 표현될 수 없는, 변수에 대한 어떤 제한요소가 있습니까? 지원되는 관계는 다음과 같습니다. < , <= , > , >= . 만일 등식이 필요하면, 지오지브라 워크시트를 만들 때 동일한 변수를 사용해야 합니다. 동적 범위, 즉, 슬라이더의 최솟값/최댓값을 위한 변수를 사용하는 것은 지원되지 않습니다.';
$string['constraintswrongortoohard'] = '{$a->inequalities}는 잘못되거나 만나기가 상당히 어려우므로, 우리는 (강제적으로) {$a->time}초 안에 {$a->tries}회 시도합니다. 아마도 앞으로 더 나은 방법을 사용할 것입니다...';
$string['dragndrop'] = '지오지브라 애플릿 부분에서 지오지브라 파일을 어디나 드래그 앤 드롭하세요.';
$string['enable_label_drags'] = '레이블 드래그 가능';
$string['enable_right_click'] = '오른쪽 클릭, 확대, 키보드 편집 가능';
$string['enable_shift_drag_zoom'] = 'Shift 키 + 드래그로 확대 가능';
$string['feedback'] = '변수가 true일 때 피드백';
$string['feedback_help'] = '피드백은 지오지브라 파일에서 변수의 캡션으로부터 가져와집니다.';
$string['geogebraapplet'] = '지오지브라 애플릿';
$string['getvars'] = '애플릿으로부터 랜덤화될 수 있는 변수 얻기';
$string['ggbfilemissing'] = '응답에서 base64 스트링이 사라졌습니다. 아마도 자바스크립트가 브라우져에서 사용가능하지 않거나 알 수 없는 오류가 발생하였습니다.';
$string['ggbturl'] = '지오지브라튜브 워크시트의 URL 또는 ID';
$string['ggbturl_help'] = '당신은 지오지브라튜브에서 공유 버튼을 사용하고 링크를 복사하고 붙이거나 지오지브라튜브 저장을 사용할 수 있습니다. 애플릿과 변수는 데이터베이스에 저장되며, 애플릿은 요청되지 않으면 지오지브라튜브에서 다시 불러오지는 않습니다. 단지 ID를 제공하거나 애플릿의 키를 공유하는 것이 지원됩니다.';
$string['ggbxmlmissing'] = '응답에서 XML 스트링이 사라졌습니다. 아마도 자바스크립트를 브라우저에서 사용할 수 없거나 알 수 없는 오류가 발생하였습니다.';
$string['invalidinequality'] = '{$a}는 적절합니다.';
$string['isexercise'] = '질문을 점검하기 위해 지오지브라 연습문제 사용';
$string['isexercise_help'] = '애플릿이 연습문제 자동점검을 위한 사용자 설정 도구를 포함하고 있습니다.\n주의: 아래의 모든 답변은 이 경우 적용될 수 없습니다.';
$string['israndomized'] = '랜덤화되어야 하는 변수가 있습니까?';
$string['loadapplet'] = '(다시) 불러오기와 애플릿 보이기';
$string['loadapplet_help'] = '지오지브라튜브로부터 애플릿을 (다시) 불러오고 데이터베이스에 지오지브라튜브로부터 새로운 버전을 저장하세요.';
$string['mineqmax'] = '랜덤화를 위한 최솟값과 최댓값은 {$a}에 대하여 적절하게 지정되지 않았습니다. 이는 슬라이더의 최솟값과 최댓값이 지정되지 않았거나, 구성요소에 슬라이더가 없기 때문입니다. 아마도 지오지브라 파일에서 이를 수정해야만 합니다.';
$string['minplusstepgtmax'] = '변수 {$a}를 위한 최댓값보다 최솟값과 증가량의 합이 크므로, 지오지브라 파일에서 이를 수정해야 합니다.';
$string['noappletloaded'] = '불러온 애플릿이 없습니다! URL이 올바른지와 링크를 선택하고 애플릿을 (다시) 불러오기를 선택한 후 애플릿을 보았는지 확인하십시오.';
$string['nofractionsumeq1'] = '최소한 점수의 한 조합은 합이 100%가 되어야 합니다.';
$string['pluginname_help'] = '지오지브라를 사용하여 학생이 질문을 해결할 수 있는 질문들';
$string['pluginnameadding'] = '지오지브라 질문 추가';
$string['pluginnameediting'] = '지오지브라 질문 수정';
$string['pluginnamesummary'] = '질문을 보여주고 퀴즈가 이루어졌을 때 답을 확인하기 위한 지오지브라를 사용한 계산된 질문의 버전';
$string['randomizedbutnovars'] = '질문이 랜덤화되어야만 한다고 선택하였으나, 랜덤화되어야 하는 적절한 변수를 지정하지 않았습니다.';
$string['randomizedvar'] = '랜덤화된 변수';
$string['randomizedvar_help'] = '(콤마로 분리된) 랜덤화되어야 하는 변수. 최솟값, 최댓값과 증가분을 지정하기 위해 지오지브라에서 슬라이더 설정사항을 사용하세요. 이 변수들은 또한 {a}와 같이 중괄호로 질문 내에서 사용될 수 있습니다.';
$string['show_algebra_input'] = '입력창 보이기';
$string['show_menu_bar'] = '메뉴 보이기';
$string['show_reset_icon'] = '구성 재설정을 위한 아이콘 보이기';
$string['show_tool_bar'] = '도구상자 보이기';
$string['stepzero'] = '변수 {$a}를 위한 증가는 0 입니다. 이는 슬라이더의 증가를 지정하지 않았거나 구성요소에 슬라이더가 존재하지 않기 때문입니다. 아마도 지오지브라 파일을 수정해야만 합니다.';
$string['useafile'] = '... 또는 지오지브라 파일 사용';
$string['valuecheckedfor'] = '옳은지를 점검하는 데 사용되는 지오지브라의 진릿값 대상';
$string['variablenamewrong'] = '해당 이름을 가진 변수가 지오지브라 파일에서 찾을 수 없습니다.';
$string['variableno'] = '변수 {$a}';
$string['variables'] = '변수들';
$string['willbereadfromfile'] = '지오지브라에서 읽을 수 있음... (도움말 버튼을 참조)';
