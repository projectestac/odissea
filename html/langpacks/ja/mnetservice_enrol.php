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
 * Strings for component 'mnetservice_enrol', language 'ja', version '3.11'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = '{$a} の利用可能なコース';
$string['availablecoursesonnone'] = 'リモートホスト「 <a href="{$a->hosturl}">{$a->hostname}</a> 」は私たちのユーザにコースを提供していません。';
$string['clientname'] = 'リモート登録クライアント';
$string['clientname_help'] = 'このツールでは「MNetリモート登録」プラグイン経由であなたのローカルユーザをリモートホストに登録および登録解除できるようにします。';
$string['editenrolments'] = '登録を編集する';
$string['hostappname'] = 'アプリケーション';
$string['hostname'] = 'ホスト名';
$string['hosturl'] = 'リモートホストURL';
$string['nopublishers'] = '利用できるリモートピアはありません。';
$string['noroamingusers'] = 'リモートコースに登録するにはユーザはシステムコンテクスト内にケイパビリティ「 {$a} 」を必要とします。現在、このケイパビリティを持ったユーザ存在しません。あなたのサイトの1つまたはそれ以上のロールに必要なケイパビリティを割り当てるには「続ける」ボタンをクリックしてください。';
$string['otherenrolledusers'] = '他の登録済みユーザ';
$string['pluginname'] = 'リモート登録サービス';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'リモート登録サービスです。';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = '登録の最終更新日時です。';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'コースにユーザを登録するため使用されるリモートサーバの登録タイプです。';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'リモートMNetホストのIDです。';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'リモートサーバのコースIDです。';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'リモートサーバのロール名です。';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'リモート登録サービスはリモートホストのコース内のローカルユーザの登録に関する情報を保存します。';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'このサーバのローカルユーザのIDです。';
$string['refetch'] = 'リモートホストから最新情報を再取得する';
