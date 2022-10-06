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
 * Strings for component 'portfolio_mahara', language 'ko', version '3.8'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Leap2A 포트폴리오 지원 활성화(마하라 1.3 이상 필요)';
$string['err_invalidhost'] = '잘못된 mnet 호스트';
$string['err_invalidhost_help'] = '본 플러그인은 잘못되거나 삭제된 mnet 호스트에 연결하도록 설정되었습니다. 이 플러그인은 SSO IDP가 공개되고, SSO_SP가 구독되며, 포트폴리오가 구독 및 공개된 무들 네트워크 피어에 의존합니다.';
$string['err_networkingoff'] = 'MNet 이 꺼져있습니다.';
$string['err_networkingoff_help'] = 'MNet이 완전히 꺼져 있습니다.. 플러그인을 설정하기 전에  MNet을 활성화시키십시오. MNet 활성화 이전에는 플러그인 인스턴스가 보여지지 않도록 설정되어 있습니다 다시 보이도록 하려면 인스턴스들을 볼수 있음으로 설정할 필요가 있습니다. 이렇게 하기 전에는 플러그인 인스턴스들을 사용할 수 없습니다.';
$string['err_nomnetauth'] = 'mnet 인증 플러그인 비활성화';
$string['err_nomnetauth_help'] = '현재 mnet 인증 플러그인이 비활성화 되어 있으나, 이 서비스를 위해서 필요합니다.';
$string['err_nomnethosts'] = 'MNet에 의존함';
$string['err_nomnethosts_help'] = '이 플러그인은 MNET 인증 플러그인 뿐만아니라 SSO IDP가 공개되고, SSO_SP가 구독되며, 포트폴리오 서비스가 구독 및 공개된 MNet 피어에 의존합니다.  이들 조건들이 충족되기 전에는 플러그인  인스턴스가 숨겨집니다. 다시 보이게 하려면 수동으로 설정할 필요가 있을 것입니다';
$string['failedtojump'] = '원격 서버와 교신할 수 없음';
$string['failedtoping'] = '원격 서버 {$a} 와 교신할 수 없음';
$string['mnet_nofile'] = '전송 대상 파일을 찾을 수 없음 - 이상한 오류';
$string['mnet_nofilecontents'] = '전송 대상 파일은 찾았으나 그 내용을 취할 수 없음 - 이상한 오류 {$a}';
$string['mnet_noid'] = '이 토큰에 일치하는 전송 자료를 찾을 수 없음';
$string['mnet_notoken'] = '이 전송 자료에 일치하는 토큰을 찾을 수 없음';
$string['mnet_wronghost'] = '원격 서버가 본 토큰에 일치하는 전송 자료를 갖고 있지 않음';
$string['mnethost'] = 'MNet 호스트';
$string['pf_description'] = '사용자들에게 무들의 내용을 이 호스트로 전송할 수 있게 허용합니다.<br />
사이트의 인증된 사용자로 하여금 {$a} 로 내용을 전달할 수 있게 이 서비스를 구독<b>하고</b> 공개하십시요<br />
<ul>
<li><em>의존성</em>: 반드시 {$a} 에게  SSO(아이덴티티  제공자) 서비스를 <strong>공개</strong>해야 합니다</li>
<li><em>의존성</em>: 또한 반드시 {$a} 에 있는 SSO(서비스 제공자)를 <strong>구독</strong>해야 합니다.</li>
<li><em>의존성</em>: MNet 인증 플러그인을 활성화해야 합니다.
</ul><br />';
$string['pf_name'] = '포트폴리오 서비스';
$string['pluginname'] = '마하라 e포트폴리오';
$string['senddisallowed'] = '지금은 마하라로 파일을 전송할 수 없음';
$string['url'] = 'URL';
