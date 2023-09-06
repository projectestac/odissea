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
 * Strings for component 'auth', language 'ko', version '4.1'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = '활성화된 인증 플러그인';
$string['allowaccountssameemail'] = '동일한 이메일 계정 허용';
$string['allowaccountssameemail_desc'] = '한명 이상의 사용자가 이메일을 공유하게 됩니다. 이로 인해 보안 문제나 개인 정보의 침해가 있을 수 있습니다. (예를 들어, 이메일을 통해 암호를 변경할 수 있음)';
$string['alternatelogin'] = '로그인 페이지로 사용할 URL을 입력. <strong>\'{$a}\'</strong> 처럼 실행문을 가진 형태여야 하고 <strong>사용자ID</strong>와  <strong>비밀번호</strong>를 리턴할 수 있는 필드를 포함하여야 한다.
<br />정확한 URL을 입력하도록 주의하지 않으면 이 사이트에 갇혀 버릴 수도 있다.<br />
기본 로그인 페이지를 사용하려면 이 칸을 빈칸으로 남겨두어라.';
$string['alternateloginurl'] = '대체 로그인 URL';
$string['auth_changepasswordhelp'] = '비밀번호 도움문서 바꾸기';
$string['auth_changepasswordhelp_expl'] = '비밀번호 도움문서를 자신의 {$a} 비밀번호를 잊어버린 사용자들에게 보여줍니다. 또한 이것은 무들의 비밀번호 변경 혹은 <strong>비밀번호 변경 주소</strong>를 대신 보여줄 수도 있습니다.';
$string['auth_changepasswordurl'] = '암호 재발급 주소';
$string['auth_changepasswordurl_expl'] = '{$a} 비밀번호를 잊어버린 사용자들에게 이 주소를 전송한다. <strong>표준적인 비밀번호 변경 페이지</strong>를 <strong>아니오</strong>로 설정하라.';
$string['auth_changingemailaddress'] = '사용자께서는 {$a->oldemail} 에서 {$a->newemail} 로 이메일 주소 변경 요청을 하셨습니다. 보안 관계상, 새로 바뀐 이메일 주소로 확인 메시지를 발송할 것입니다. 확인 메시지를 받고 URL 을 열어 응답하는 즉시, 새로운 이메일 주소로 업데이트될 것입니다.';
$string['auth_common_settings'] = '일반설정';
$string['auth_data_mapping'] = '데이타 매핑';
$string['auth_fieldlock'] = '사용자 정보 잠금';
$string['auth_fieldlock_expl'] = '<p><b>사용자 정보 잠금:</b> 만약 이를 켜 놓으면 무들 사용자나 관리자의 정보 필드를 바로 편집하는 것을 방지할 것입니다. 사용자 정보를 외부인증시스템이 지속적으로 관리하게 하려면 이 옵션을 사용하라. </p>';
$string['auth_fieldlockfield'] = '잠금 값({$a})';
$string['auth_fieldlocks'] = '사용자 항목 잠금';
$string['auth_fieldlocks_help'] = '<p>당신은 사용자 자료 필드를 잠글 수 있다. 이 기능은 운영자가 "사용자 업로드" 기능 등을 통해 직접 사용자 자료를 유지 관리할 때 유용하다. 무들에서 필요한데도 잠금 해제가 되지 않은 필드가 있다면, 그 필드에 대한 자료를 따로 생성해 주지 않는 한, 그 사용자 계정은 사용할 수 없게 된다.</p><p>이런 문제가 생기지 않길 바란다면 \'비어있다면 잠금 해제\'로 설정하라.</p>';
$string['auth_fieldmapping'] = '데이터 매핑({$a})';
$string['auth_invalidnewemailkey'] = '오류: 메일 주소 변경 확인을 시도했지만, 서버에서 발송한 이메일 주소와 일치하지 않는 모양입니다. 이메일 주소를 다시한번 확인하고 재 시도하기 바랍니다.';
$string['auth_multiplehosts'] = '다수의 호스트들은 host1.com;host2.com;host3.com 식이나 IP의 경우 xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx 형태로 쓸 수 있다.';
$string['auth_notconfigured'] = '인증 방법{$a}이(가)구성되지 않았습니다.';
$string['auth_outofnewemailupdateattempts'] = '허용된 이메일 주소 변경의 업데이트 시도 횟수를 넘겼습니다. 요청이 기각되었습니다.';
$string['auth_passwordisexpired'] = '당신의 비밀번호가 만료되었습니다. 지금 비밀번호를 바꾸세요.';
$string['auth_passwordwillexpire'] = '당신의 비밀번호가 {$a} 일 후에 만료됩니다. 지금 비밀번호를 바꾸시겠습니까?';
$string['auth_remove_delete'] = '내부적으로 완전 삭제';
$string['auth_remove_keep'] = '내부적으로 유지';
$string['auth_remove_suspend'] = '내부적으로 유보';
$string['auth_remove_user'] = '외부 자원으로부터 사용자가 제거될 때 동기화 과정에서 어떻게 처리할지를 지정. 유보된 사용자만이 외부 자원에 다시 등장할 때 자동적으로 되살릴 수 있다.';
$string['auth_remove_user_key'] = '제거된 외부 사용자';
$string['auth_sync_script'] = 'cron 동기화 스크립트';
$string['auth_sync_suspended'] = '사용 설정되면 일시 중지 된 속성을 사용하여 로컬 사용자 계정의 일시 중지 상태를 업데이트합니다.';
$string['auth_sync_suspended_key'] = '로컬 사용자 일시 중지 상태 동기화';
$string['auth_updatelocal'] = '내부 데이터의 개정';
$string['auth_updatelocal_expl'] = '<p><b> 내부 데이터의 업데이트 :</b> 만약 이를 켜 놓으면, 각 필드는 (외부 인증처로부터) 로그인할 때 마다 혹은 사용자가 동기화가 있을 때 업데이트 될 것입니다. 내부적으로 업데이트하도록 설정한 필드는 반드시 잠겨 있어야 합니다.';
$string['auth_updatelocalfield'] = '로컬 업데이트({$a})';
$string['auth_updateremote'] = '외부데이터의 업데이트';
$string['auth_updateremote_expl'] = '<p><b> 외부 데이터의 업데이트 :</b> 만약 이를 켜 놓으면, 외부 인증처는 사용자 기록이 업데이트될 때 동시에 업데이트될 것입니다. 필드들은 편집이 가능하도록 잠겨있지 않아야 합니다.';
$string['auth_updateremote_ldap'] = '<p><b>경고:</b> 외부의 LDAP 데이터를 업데이트 하는 것은 당신이 모든 사용자가 기록되는 특권을 편집하는 묶여있는 사용자를 요구한다. 현재는 많은 가치를 지닌 속성을 보존하지 않으며 여분의 가치들은 업데이트로 제거된다.</p>';
$string['auth_updateremotefield'] = '외부 업데이트({$a})';
$string['auth_user_create'] = '사용자 생성 가능';
$string['auth_user_creation'] = '새로운 사용자는 외부인증 소스 혹은 확인되어진 이메일을 통해 계정을 생성할 수 있다. 만약 이 기능을 켜 놓으면 사용자 생성을 위한 모듈 나름대로의 옵션 설정을 잊지마시오.';
$string['auth_usernameexists'] = '선택하신 사용자 아이다는 이미 존재합니다. 다른 사용자아이디를 입력하세요.';
$string['auth_usernotexist'] = '존재하지 않는 사용자 {$a} 는 업데이트할 수 없음';
$string['authenticationoptions'] = '인증 옵션들';
$string['authinstructions'] = '로그인 화면에 기본 안내가 나타나게 하려면 비워두십시오. 만일 나름대로의 안내문을 제공하고 싶으면 여기에 그 내용을 적어 넣으면 됩니다.';
$string['authloginviaemail'] = '이메일로 로그인 허용';
$string['authloginviaemail_desc'] = '사이트 로그인에 사용자이름과 이메일 주소를 사용하는 것을 허용';
$string['auto_add_remote_users'] = '원격 사용자 자동 추가';
$string['cannotmapfield'] = '"{$a->fieldname}" 필드의 "{$a-> fieldname}" 짧은 이름이 너무 길기 때문에 필드를 매핑 할 수 없습니다. 매핑을 허용하려면 짧은 이름을 {$a->charlimit} 문자로 줄여야합니다. <a href="{$a->link} "> 사용자 프로필 입력란 수정 </a>';
$string['changepassword'] = '패스워드 URL 변경';
$string['changepasswordhelp'] = '만약 사용자가 자신의 계정과 비밀번호를 잊어버리는 경우를 대비해 이곳에 계정과 비밀번호를 찾거나 혹은 바꿀 수 있는 장소를 지정해 줍니다. 이것은 로그인 페이지나 사용자 페이지에서 버튼으로 제공되지만, 이곳을 빈칸으로 놓아둔다면 웹페이지에 버튼이 나타나지 않습니다.';
$string['chooseauthmethod'] = '인증 방법 선택';
$string['chooseauthmethod_help'] = '이 설정은 사용자가 로그인할 때 사용되는 인증 방법을 결정합니다. 활성화된 인증 플러그 인만 선택해야 합니다. 그렇지 않으면 사용자가 더 이상 로그인할 수 없습니다. 사용자의 로그인을 차단하려면"로그인 없음"을 선택합니다.';
$string['createpassword'] = '암호를 만들고 사용자에게 통지';
$string['createpasswordifneeded'] = '필요한 경우 암호 생성 및 이메일 전송';
$string['emailchangecancel'] = '이메일 주소변경 취소';
$string['emailchangepending'] = '변경 보류. {$a->preference_newemail} 로 발송된 확인 내용에 응답하기 바랍니다.';
$string['emailnowexists'] = '최초 메일 변경 요청 이후, 누군가 여러분의 개인정보난의 이메일 주소에 대해 확인을 했습니다. 이에따라 이메일 주소 변경 요청은 기각되었읍니다만, 다른 주소를 이용하여 재 시도할 수는 있습니다.';
$string['emailupdate'] = '이메일 주소 업데이트';
$string['emailupdatemessage'] = '{$a->fullname} 님,

{$a->site}에서 귀하의 사용자 계정에 대한 이메일 주소 변경을 요청하셨습니다. 이 변경 사항을 확인하려면 브라우저에서 다음 URL을여십시오.

궁금한 점이 있으면 {$a->supportemail}에서 지원팀에 문의하십시오.

{$a->url}';
$string['emailupdatesuccess'] = '사용자 <em>{$a->fullname}</em>의 이메일 주소가 <em>{$a->email}</em>로 업데이트 완료되었음';
$string['emailupdatetitle'] = '{$a->site} 의 이메일 업데이트 확인';
$string['errormaxconsecutiveidentchars'] = '암호에는 최소 {$a} 개의 연속된 동일 문자가 포함되야 합니다.';
$string['errorminpassworddigits'] = '암호에는 최소 {$a} 개의 숫자가 포함되야 합니다.';
$string['errorminpasswordlength'] = '암호길이는 최소 {$a} 문자 이상이라야 합니다.';
$string['errorminpasswordlower'] = '암호에는 최소 {$a} 개의 소문자가 포함되야 합니다.';
$string['errorminpasswordnonalphanum'] = '암호에는*, -, 또는 #과 같은 영숫자가 아닌 문자가 {$a}개 이상 있어야 합니다.';
$string['errorminpasswordupper'] = '암호에는 최소 {$a} 개의 대문자가 포함되야 합니다.';
$string['errorpasswordreused'] = '이 암호는 이전에 사용되었으며 재사용할 수 없습니다.';
$string['errorpasswordupdate'] = '비밀번호 업데이트 오류. 비밀번호가 변경되지 않았습니다.';
$string['eventuserloggedin'] = '사용자가 로그인 하였습니다.';
$string['eventuserloggedinas'] = '사용자가 다른 사용자로 로그인하였습니다.';
$string['eventuserloginfailed'] = '사용자 로그인 실패';
$string['forcechangepassword'] = '강제 암호변경';
$string['forcechangepassword_help'] = '다음 로그인시 사용자에게 비밀번호 교체 요청';
$string['forcechangepasswordfirst_help'] = '무들에 최초 로그인 할 때 비밀번호 교체 요청';
$string['forgottenpassword'] = '여기에 URL을 입력하면, 이 주소는 사이트에 대한 암호 복원 페이지로 이용될 것입니다. 이것은 암호가 무들 외부에서 처리되는 사이트를 위한 것입니다. 기본 암호 복원 방법을 사용하려면 빈칸으로 남겨 놓으시오.';
$string['forgottenpasswordurl'] = '암호 재발급 URL';
$string['getrecaptchaapi'] = 'reCAPTCHA를 사용하려면 <a href=\'https://www.google.com/recaptcha/admin\'> https://www.google.com/recaptcha/admin</a>에서 API 키를 받아야합니다.';
$string['guestloginbutton'] = '손님 접속 버튼';
$string['incorrectpleasetryagain'] = '틀렸습니다. 다시 해 보세요.';
$string['infilefield'] = '파일에 필요한 항목';
$string['informminpassworddigits'] = '최소 숫자 {$a} 개';
$string['informminpasswordlength'] = '최소 문자 {$a} 개';
$string['informminpasswordlower'] = '최소 소문자 {$a} 개';
$string['informminpasswordnonalphanum'] = '*, -, 또는 #와 같은 적어도 {$a}개의 영숫자가 아닌 문자';
$string['informminpasswordreuselimit'] = '{$a}변경 후 비밀번호 재사용 가능';
$string['informminpasswordupper'] = '최소 대문자 {$a} 개';
$string['informpasswordpolicy'] = '암호는 {$a} 를 충족시켜야 합니다.';
$string['instructions'] = '안내문';
$string['internal'] = '내부';
$string['limitconcurrentlogins'] = '동시 로그인 제한';
$string['limitconcurrentlogins_desc'] = '사용자가 여러 브라우져에서 동시에 접근하는 것을 제한합니다. 한계에 도달한 이후, 오래된 세션부터 종료됩니다. 이때 저장하지 않은 정보는 모두 사라집니다. 이 설정은 Single Sign On(SSO) 인증 플러그인과 호환되지 않습니다.';
$string['locked'] = '잠금';
$string['md5'] = 'MD5 인증';
$string['nopasswordchange'] = '암호를 변경할 수 없음';
$string['nopasswordchangeforced'] = '비밀번호 변경없이는 계속할 수 없습니다만 암호를 변경할 방법이 없습니다. 무들 관리자에게 연락하기 바랍니다.';
$string['noprofileedit'] = '개인정보를 편집할 수 없습니다.';
$string['ntlmsso_attempting'] = 'NTLM을 통한 싱글사인온 시도';
$string['ntlmsso_failed'] = '자동 로그인 실패, 일반 로그인을 시도하세요.';
$string['ntlmsso_isdisabled'] = 'NTLM SSO가 비활성화되어 있습니다.';
$string['passwordhandling'] = '비밀번호 처리';
$string['plaintext'] = '단순 텍스트';
$string['pluginnotenabled'] = '인증 플러그인 \'{$a}\'은 활성화되어 있지 않습니다.';
$string['pluginnotinstalled'] = '인증 플러그인 \'{$a}\'은 설치되어 있지 않습니다.';
$string['potentialidps'] = '등록된 계정을 사용해 로그인해주세요:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA는 자동화된 프로그램의 남용을 방지하기 위한 것입니다. 지시에 따라 자신이 사람인지 확인합니다. 이것은 확인할 상자, 입력해야 하는 이미지에 표시된 문자 또는 선택할 이미지 세트일 수 있습니다.

이미지가 무엇인지 잘 모르겠으면 다른 CAPTCHA나 오디오 CAPTCHA를 사용해 보십시오.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = '보안 질문';
$string['selfregistration'] = '자체 등록';
$string['selfregistration_help'] = '이메일 기잔 자체 인증과 같은 인증 플러그인이 선택되면 잠재적인 사용자들이 자신을 등록하고 계정을 만들 수 있게 합니다. 이 경우 스팸을 보내는 사람들이 계정을 만들어 포럼 게시글이나 블로그 게시글을 스팸 목적으로 사용할 수 있습니다. 이러한 위험을 피하기 위해서는 자체 등록을 비활성화하거나 <em>허용된 이메일 도메인</em> 설정으로 자체등록을 제한해야 합니다.';
$string['settingmigrationmismatch'] = '플러그인 설정 이름을 수정하는 동안 값 불일치가 감지되었습니다! \'{$a-> plugin}\'인증 플러그인은 \'{$a-> current}\'에 \'{$a-> setting}\'을 \'{$a-> legacy}\'로 설정했습니다. 현재 이름으로 후자의 값이 유효한 값으로 설정되었지만 이것이 예상되는지 확인하고 확인해야합니다.';
$string['sha1'] = 'SHA-1 해쉬';
$string['showguestlogin'] = '로그인  페이지에서 손님 로그인 버튼을 보이거나 숨길 수 있습니다.';
$string['stdchangepassword'] = '비밀번호변경을 위해 표준  페이지 사용';
$string['stdchangepassword_expl'] = '만약 외부 인증 시스템이 무들을 통한 비밀번호 변경을 허용한다면, 이것을 "예"로 바꾸시오. 이 설정은 \'비밀번호 URL 변경\'을 덮어쓰기 합니다.';
$string['stdchangepassword_explldap'] = '주목 : 만약 LDAP서버가 원격에 있다면, SSL 함호화 터널(ldaps://)을 통해서 LDAP를 사용할 것을 추천한다.';
$string['suspended'] = '유보된 계정';
$string['suspended_help'] = '유예된 사용자 계정으로는 로그인하거나 웹 서비스를 사용할 수 없으며, 어떠한 연락도 전달되지 않을 것입니다.';
$string['testsettings'] = '테스트 설정';
$string['testsettingsheading'] = '인증 설정 테스트 -  {$a}';
$string['unlocked'] = '잠금 해제';
$string['unlockedifempty'] = '비어있다면 잠금 해제';
$string['update_never'] = '불가';
$string['update_oncreate'] = '생성 중';
$string['update_onlogin'] = '모든 접속';
$string['update_onupdate'] = '업데이트 중';
$string['user_activatenotsupportusertype'] = '인증:  ldap user_activate()는 {$a} 사용자 형식을 지원하지 않음';
$string['user_disablenotsupportusertype'] = '인증:  ldap user_activate()는 아직까지 선택된 사용자 형식을 지원하지 않음';
$string['username'] = '사용자 이름';
$string['username_help'] = '일부 인증 플러그인을 사용하면 사용자 이름을 변경할 수 없습니다.';
