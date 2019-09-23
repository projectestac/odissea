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
 * Strings for component 'auth_oauth2', language 'ko', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = '이 사용자 이름으로 이 사이트에 사용자가 이미 있습니다. 귀하의 계정인 경우 사용자 이름과 비밀번호를 입력하여 로그인하고 환경 설정 페이지에서 링크된 로그인으로 추가하십시오.';
$string['alreadylinked'] = '이 외부 계정은이 사이트의 계정에 이미 연결되어 있습니다.';
$string['auth_oauth2description'] = 'OAuth 2 표준 기반 인증';
$string['auth_oauth2settings'] = 'OAuth2 인증 설정';
$string['confirmaccountemail'] = '안녕하세요. {$a->fullname}님.

\'{$a->sitename}\'에 새 계정이 귀하의 이메일을 사용하여 요청되었습니다.

새 계정을 확인하려면 다음 웹 주소로 이동하십시오.

{$a->link}
대부분의 메일 프로그램에서는 당신이 단지 클릭만 하면 되도록 주소가 파란색 링크로 표시됩니다.

링크가 작동하지 않으면 주소를 잘라내어 귀하의 웹 브라우저 상단 라인의 주소창에 붙여 넣으십시오.

도움이 필요하면 사이트 관리자에게 문의하십시오.
{$a->admin}';
$string['confirmaccountemailsubject'] = '{$a}: 계정 확인';
$string['confirmationinvalid'] = '확인 링크가 잘못되었거나 만료되었습니다. 새 확인 메일을 생성하려면 로그인 프로세스를 다시 시작하십시오.';
$string['confirmationpending'] = '이 계정은 이메일 확인이 보류되고 있습니다.';
$string['confirmlinkedloginemail'] = '안녕하세요. {$a->fullname}님.

 \'{$a->sitename}\'에서 당신의 이메일 주소를 이용하여 {$a->issuername}의 {$a->linkedemail}을 당신의 계정에 연결하라는 요청이 있었습니다.

이 요청을 확인하고 로그인을 연결하려면 다음 웹 주소로 이동하십시오.

{$a->link}
대부분의 메일 프로그램에서는 당신이 단지 클릭만 하면 되도록 주소가 파란색 링크로 표시됩니다.

링크가 작동하지 않으면 주소를 잘라내어 귀하의 웹 브라우저 상단 라인의 주소창에 붙여 넣으십시오. 도움이 필요하면 사이트 관리자에게 문의하십시오.
{$a->admin}';
$string['confirmlinkedloginemailsubject'] = '{$a}: 링크된 로그인 확인';
$string['createaccountswarning'] = '이 인증 플러그인을 사용하면 사용자들이 당신의 사이트에서 계정을 만들 수 있습니다. 이 플러그인을 사용하는 경우 "authpreventaccountcreation"설정을 활성화 할 수 있습니다.';
$string['createnewlinkedlogin'] = '새 계정 연결 ({$a})';
$string['emailconfirmlink'] = '당신의 계정을 연결하세요.';
$string['emailconfirmlinksent'] = '<p>이 이메일 주소로 기존 계정을 찾았지만 아직 연결되지 않았습니다. </p>
   <p> 로그인하기 전에 계정을 연결해야합니다. </p>
   <p> 이메일이 <b> {$a} </b>의 주소로 발송되었습니다. </p>
   <p> 여기에는 계정 연결 방법이 포함되어 있습니다. </p>
   <p> 문제가 있을 경우 사이트 관리자에게 문의하십시오. </p>';
$string['info'] = '외부 계정';
$string['issuer'] = '공개 기반 인증 프로토콜2 서비스';
$string['linkedlogins'] = '링크된 로그인';
$string['loginerror_authenticationfailed'] = '인증 프로세스가 실패했습니다.';
$string['pluginname'] = '공개기반 인증 프로토콜2';
