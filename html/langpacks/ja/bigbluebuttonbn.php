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
 * Strings for component 'bigbluebuttonbn', language 'ja', version '3.11'.
 *
 * @package     bigbluebuttonbn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'あなたにはまもなく始まるBigBlueButtonBNセッションがあります。';
$string['bbbduetimeoverstartingtime'] = 'この活動の終了日は開始日以降に設定する必要があります。';
$string['bbbdurationwarning'] = 'このセッションの最大継続時間は %duration% 分です。';
$string['bbbrecordallfromstartwarning'] = 'このセッションは開始と同時にレコーディングされます。';
$string['bbbrecordwarning'] = 'このセッションはレコーディングできます。';
$string['bigbluebuttonbn'] = 'BigBlueButton';
$string['bigbluebuttonbn:addinstance'] = '新しいミーティングを追加する';
$string['bigbluebuttonbn:join'] = 'ミーティングに参加する';
$string['bigbluebuttonbn:managerecordings'] = 'レコーディングを管理する';
$string['config_clienttype_default'] = 'デフォルトWebクライアントタイプ';
$string['config_extended_capabilities'] = '拡張機能設定';
$string['config_extended_capabilities_description'] = 'BigBlueButtonサーバが提供できる拡張機能の設定です。';
$string['config_general'] = '一般設定';
$string['config_general_description'] = 'これらの設定は<b>常に</b>使用されます。';
$string['config_scheduled'] = '「スケジュールセッション」設定';
$string['config_scheduled_description'] = 'これらの設定ではスケジュールセッションのデフォルトの挙動を設定します。';
$string['config_scheduled_duration_compensation'] = '補償時間 (分)';
$string['config_scheduled_duration_compensation_description'] = '継続時間を計算する時にスケジュールクロージングに追加される時間 (分) です。';
$string['config_scheduled_duration_enabled'] = '継続時間計算を有効にする';
$string['config_scheduled_duration_enabled_description'] = 'スケジュールセッションの継続時間はオープニングおよびクロージング時間を基に計算されます。';
$string['config_scheduled_pre_opening'] = 'オープニング時間前にアクセスできる (分)';
$string['config_scheduled_pre_opening_description'] = 'スケジュールオープニング時間前にセッションにアクセス可能な時間 (分) です。';
$string['config_server_url'] = 'BigBlueButtonサーバURL';
$string['config_server_url_description'] = 'あなたのBigBlueButtonサーバのURLは「/bigbluebutton/」で終了する必要があります (このデフォルトURLはあなたがテストに利用できるBlindside Networksにより提供されているBigBlueButtonサーバのURLです)。';
$string['config_shared_secret'] = 'BigBlueButton共有秘密鍵';
$string['config_shared_secret_description'] = 'あなたのBigBlueButtonサーバのセキュリティsaltです (このデフォルトsaltはあなたがテストに利用できるBlindside Networksにより提供されているBigBlueButtonサーバのsaltです)。';
$string['config_warning_curl_not_installed'] = 'この機能ではPHPのcURL拡張モジュールがインストールおよび有効にされている必要があります。この条件に合致している場合のみ、設定にアクセスすることができます。';
$string['email_body_notification_meeting_by'] = 'by';
$string['email_body_notification_meeting_description'] = '説明';
$string['email_body_notification_meeting_details'] = '詳細';
$string['email_body_notification_meeting_end_date'] = '終了日';
$string['email_body_notification_meeting_has_been'] = 'が';
$string['email_body_notification_meeting_start_date'] = '開始日';
$string['email_body_notification_meeting_title'] = 'タイトル';
$string['email_body_recording_ready_for'] = 'レコーディング:';
$string['email_body_recording_ready_is_ready'] = 'の準備ができました。';
$string['email_footer_sent_by'] = 'この自動通知メッセージは次のユーザによって送信されました:';
$string['email_footer_sent_from'] = '- コース';
$string['ends_at'] = '終了';
$string['event_activity_created'] = 'BigBlueButtonBN活動が作成されました。';
$string['event_activity_deleted'] = 'BigBlueButtonBN活動が削除されました。';
$string['event_activity_viewed'] = 'BigBlueButtonBN活動が閲覧されました。';
$string['event_meeting_created'] = 'BigBlueButtonBNミーティングが作成されました。';
$string['event_meeting_ended'] = 'BigBlueButtonBNミーティングが強制終了されました。';
$string['event_meeting_joined'] = 'BigBlueButtonBNミーティングに参加しました。';
$string['event_meeting_left'] = 'BigBlueButtonBNミーティングを退出しました。';
$string['event_recording_deleted'] = 'レコーディングが削除されました。';
$string['event_recording_imported'] = 'レコーディングがインポートされました。';
$string['event_recording_published'] = 'レコーディングが公開されました。';
$string['event_recording_unpublished'] = 'レコーディングが非公開にされました。';
$string['general_error_unable_connect'] = '接続できません。BigBlueButtonサーバのURLおよびBigBlueButtonサーバの稼働状況を確認してください。';
$string['index_confirm_end'] = '本当にバーチャルクラスを終了してもよろしいですか?';
$string['index_disabled'] = '無効';
$string['index_enabled'] = '有効';
$string['index_ending'] = 'バーチャルクラスルームを終了しています ... お待ちください。';
$string['index_error_checksum'] = 'チェックサムにエラーが発生しました。あなたが正しいsaltを入力したことを確認してください。';
$string['index_error_forciblyended'] = '手動で終了されたため、このミーティングに参加することはできません。';
$string['index_error_unable_display'] = 'ミーティングを表示できません。BigBlueButtonサーバのURLおよびBigBlueButtonサーバの稼働状況を確認してください。';
$string['index_heading'] = 'BigBlueButtonルーム';
$string['index_heading_actions'] = '操作';
$string['index_heading_group'] = 'グループ';
$string['index_heading_moderator'] = 'モデレータ';
$string['index_heading_name'] = 'ルーム';
$string['index_heading_recording'] = 'レコーディング';
$string['index_heading_users'] = 'ユーザ';
$string['index_heading_viewer'] = '視聴者';
$string['indicator:socialbreadth'] = 'BigBlueButtonBNソーシャル';
$string['mod_form_block_clienttype'] = 'Webクライアントテクノロジー';
$string['mod_form_block_general'] = '一般設定';
$string['mod_form_block_participants'] = '参加者';
$string['mod_form_block_presentation'] = 'プレゼンテーションコンテンツ';
$string['mod_form_block_record'] = 'レコーディング設定';
$string['mod_form_block_schedule'] = 'セッションスケジュール';
$string['mod_form_field_block_clienttype'] = 'Webクライアントテクノロジー';
$string['mod_form_field_closingtime'] = '参加終了';
$string['mod_form_field_conference_name'] = 'カンファレンス名';
$string['mod_form_field_duration'] = '継続時間';
$string['mod_form_field_duration_help'] = 'ミーティングの継続時間を設定することにより、レコーディングが終了するまでのミーティングの最大継続時間を設定します。';
$string['mod_form_field_instanceprofiles'] = 'インスタンスタイプ';
$string['mod_form_field_intro'] = '説明';
$string['mod_form_field_intro_help'] = 'ルームまたはカンファレンスの短い説明です。';
$string['mod_form_field_name'] = 'バーチャルクラスルーム名';
$string['mod_form_field_notification'] = '通知を送信する';
$string['mod_form_field_notification_created_help'] = 'この活動が作成されたことを登録済みユーザに知らせるため通知を送信します。';
$string['mod_form_field_notification_help'] = 'この活動が作成または修正されたことを登録済みユーザに知らせるため通知を送信します。';
$string['mod_form_field_notification_modified_help'] = 'この活動が修正されたことを登録済みユーザに知らせるため通知を送信します。';
$string['mod_form_field_notification_msg_at'] = '-';
$string['mod_form_field_notification_msg_created'] = '作成';
$string['mod_form_field_notification_msg_modified'] = '修正';
$string['mod_form_field_openingtime'] = '参加開始';
$string['mod_form_field_participant_add'] = '参加者を追加する';
$string['mod_form_field_participant_bbb_role_moderator'] = 'モデレータ';
$string['mod_form_field_participant_bbb_role_viewer'] = '視聴者';
$string['mod_form_field_participant_list'] = '参加者リスト';
$string['mod_form_field_participant_list_action_add'] = '追加する';
$string['mod_form_field_participant_list_action_remove'] = '削除する';
$string['mod_form_field_participant_list_text_as'] = '-';
$string['mod_form_field_participant_list_type_all'] = 'すべての登録済みユーザ';
$string['mod_form_field_participant_list_type_owner'] = 'オーナー';
$string['mod_form_field_participant_list_type_role'] = 'ロール';
$string['mod_form_field_participant_list_type_user'] = 'ユーザ';
$string['mod_form_field_record'] = 'セッションをレコーディングできる';
$string['mod_form_field_recordallfromstart'] = '開始からすべてレコード';
$string['mod_form_field_recordhidebutton'] = 'レコーディングボタンを隠す';
$string['mod_form_field_room_name'] = 'ルーム名';
$string['mod_form_field_userlimit'] = 'ユーザ制限';
$string['mod_form_field_userlimit_help'] = 'ミーティングで許可される最大ユーザ制限です。制限にゼロが設定された場合、ユーザ数は無制限となります。';
$string['mod_form_field_voicebridge'] = 'ボイスブリッジ [####]';
$string['mod_form_field_voicebridge_format_error'] = 'フォーマットエラーです。あなたは1から9999までの数字を入力する必要があります。';
$string['mod_form_field_voicebridge_help'] = 'ダイアルインを使用する場合、参加者がボイスカンファレンスに参加するために入力するボイスカンファレンスナンバーです。1から9999までの数字を入力する必要があります。値がゼロの場合、固定ボイスブリッジナンバーは無視されてBigBlueButtonによりランダムナンバーが生成されます。4桁が入力された場合、先頭に「7」が付加されます。';
$string['mod_form_field_voicebridge_notunique_error'] = '値がユニークではありません。このナンバーは別のルームまたはカンファレンスで使用されています。';
$string['mod_form_field_wait'] = 'モデレータを待つ';
$string['mod_form_field_wait_help'] = '視聴者はモデレータがセッションに入るまで待つ必要があります。';
$string['mod_form_field_welcome'] = 'ウェルカムメッセージ';
$string['mod_form_field_welcome_default'] = '<br /><b>%%CONFNAME%%</b>にようこそ!<br /><br />どのようにBigBlueButtonが動作するか理解するため私たちの<a href="event:http://www.bigbluebutton.org/content/videos"><u>チュートリアルビデオ</u></a>をご覧ください。<br /><br />オーディオブリッジに参加するには左上のヘッドセットアイコンをクリックしてください。<b>他の人への騒音を避けるため、ヘッドセットを使用してください。</b>';
$string['mod_form_field_welcome_help'] = 'BigBlueButtonサーバに設定されているデフォルトメッセージを置換します。メッセージには自動的に置換されるキーワード (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) を含むことができます。また次のようなHTMLタグを使用することもできます: <b>...</b> または <i></i>';
$string['modulename'] = 'BigBlueButtonBN';
$string['modulename_help'] = 'あなたはBigBlueButtonBNを使用してMoodle内のリンクからリアルタイムのオンラインクラスルームを作成することができます。BigBlueButtonはオープンソースの遠隔教育用ウェブカンファレンスシステムです。

BigBlueButtonBNを使用することにより、あなたはタイトル、説明、カレンダーエントリ (セッションに参加できる日付範囲のため)、グループおよびオンラインセッションをレコーディングするための詳細を指定することができます。

後でレコーディングを視聴するにはこのコースにRecordingsBNリソースを追加してください。';
$string['modulenameplural'] = 'BigBlueButtonBN';
$string['pluginadministration'] = 'BigBlueButton管理';
$string['pluginname'] = 'BigBlueButtonBN';
$string['removedevents'] = '削除されたイベント';
$string['removedlogs'] = '削除されたカスタムログ';
$string['removedrecordings'] = '削除されたレコーディング';
$string['removedtags'] = '削除されたタグ';
$string['resetevents'] = 'イベントを削除';
$string['resetlogs'] = 'カスタムログを削除';
$string['resetrecordings'] = 'レコーディングの削除';
$string['resettags'] = 'タグの削除';
$string['started_at'] = '開始';
$string['starts_at'] = '開始';
$string['view_conference_action_end'] = 'セッション終了';
$string['view_conference_action_join'] = 'セッションに参加する';
$string['view_error_bigbluebutton'] = 'BigBlueButtonにエラーが発生しました: {$a}';
$string['view_error_create'] = 'BigBlueButtonサーバがエラーメッセージを返しました。ミーティングを作成することはできません。';
$string['view_error_import_no_courses'] = 'レコーディングのために検索するコースはありません。';
$string['view_error_import_no_recordings'] = 'このコースにはインポートするレコーディングはありません。';
$string['view_error_max_concurrent'] = '許可される同時ミーティング数に達しました。';
$string['view_error_no_group'] = 'まだ設定されているグループはありません。ミーティングに参加する前にグループを準備してください。';
$string['view_error_no_group_student'] = 'あなたはグループに参加していません。あなたの教師または管理者にご連絡ください。';
$string['view_error_no_group_teacher'] = 'またグループは設定されていません。グループを作成するか管理者にご連絡ください。';
$string['view_error_unable_join'] = 'ミーティングに参加できません。BigBlueButtonサーバのURLおよびBigBlueButtonサーバの稼働状況を確認してください。';
$string['view_error_unable_join_student'] = 'BigBlueButtonサーバに接続できません。あなたの教師または管理者にご連絡ください。';
$string['view_error_unable_join_teacher'] = 'BigBlueButtonサーバに接続できません。管理者にご連絡ください。';
$string['view_error_url_missing_parameters'] = 'このURLにはパラメータが不足しています。';
$string['view_error_userlimit_reached'] = 'ミーティングに許可されるユーザ数に達しました。';
$string['view_groups_selection'] = 'あなたが参加したいグループを選択して操作を確認してください。';
$string['view_groups_selection_join'] = '参加';
$string['view_groups_selection_warning'] = 'それぞれのグループに1つのカンファレンスルームがあります。あなたが2つ以上のカンファレンスルームにアクセスしている場合、正しいカンファレンスルームを選択しているか確認してください。';
$string['view_login_moderator'] = 'モデレータとしてログインする ...';
$string['view_login_viewer'] = '視聴者としてログインする ...';
$string['view_message_conference_has_ended'] = 'このカンファレンスは終了しています。';
$string['view_message_conference_in_progress'] = 'このカンファレンスは開催中です。';
$string['view_message_conference_not_started'] = 'このカンファレンスはまだ開始されていません。';
$string['view_message_conference_room_ready'] = 'このカンファレンスルームの準備が完了しました。あなたはセッションに参加することができます。';
$string['view_message_conference_wait_for_moderator'] = '参加できるようになるため、モデレータを待っています。';
$string['view_message_finished'] = 'この活動は終了しました。';
$string['view_message_has_joined'] = '参加しました。';
$string['view_message_have_joined'] = '参加しました。';
$string['view_message_hour'] = '時間';
$string['view_message_hours'] = '時間';
$string['view_message_minute'] = '分';
$string['view_message_minutes'] = '分';
$string['view_message_moderator'] = 'モデレータ';
$string['view_message_moderators'] = 'モデレータ';
$string['view_message_norecordings'] = 'このミーティングのレコーディングはありません。';
$string['view_message_notavailableyet'] = 'このセッションはまだ利用できません。';
$string['view_message_room_closed'] = 'このルームはクローズされています。';
$string['view_message_room_open'] = 'このルームはオープンされています。';
$string['view_message_room_ready'] = 'このルームは準備ができています。';
$string['view_message_session_has_user'] = '&nbsp;';
$string['view_message_session_has_users'] = '&nbsp;';
$string['view_message_session_no_users'] = 'このセッションにはユーザはいません。';
$string['view_message_session_running_for'] = 'このセッションは次の時間開催されています:';
$string['view_message_session_started_at'] = 'このセッションは次の時間に開始しました:';
$string['view_message_tab_close'] = 'タブ/ウィンドウは手動で閉じる必要があります。';
$string['view_message_user'] = 'ユーザ';
$string['view_message_users'] = 'ユーザ';
$string['view_message_viewer'] = '視聴者';
$string['view_message_viewers'] = '視聴者';
$string['view_noguests'] = 'BigBlueButtonBNはゲストには公開されていません。';
$string['view_nojoin'] = 'あなたはこのセッションに参加できるロールではありません。';
$string['view_recording'] = 'レコーディング';
$string['view_recording_actionbar'] = 'ツールバー';
$string['view_recording_activity'] = '活動';
$string['view_recording_button_import'] = 'レコーディングインポートリンク';
$string['view_recording_button_return'] = '戻る';
$string['view_recording_course'] = 'コース';
$string['view_recording_date'] = '日付';
$string['view_recording_delete_confirmation'] = '本当にこの {$a} を削除してもよろしいですか?';
$string['view_recording_delete_confirmation_warning_p'] = 'このレコーディングには異なるコースまたは活動にインポートされた {$a} のリンクがあります。レコーディングが削除された場合、これらのリンクも削除されます。';
$string['view_recording_delete_confirmation_warning_s'] = 'このレコーディングには異なるコースまたは活動にインポートされた {$a} のリンクがあります。レコーディングが削除された場合、このリンクも削除されます。';
$string['view_recording_description'] = '説明';
$string['view_recording_duration'] = '継続時間';
$string['view_recording_duration_min'] = '分';
$string['view_recording_format_notes'] = 'ノート';
$string['view_recording_format_podcast'] = 'ポッドキャスト';
$string['view_recording_format_presentation'] = 'プレゼンテーション';
$string['view_recording_format_screenshare'] = 'スクリーン共有';
$string['view_recording_format_statistics'] = '統計';
$string['view_recording_format_video'] = 'ビデオ';
$string['view_recording_import_confirmation'] = '本当にこのレコーディングをインポートしてもよろしいですか?';
$string['view_recording_length'] = '長さ';
$string['view_recording_link_warning'] = 'このリンクは異なるコースまたは活動で作成されたレコーディングを指しています。';
$string['view_recording_list_actionbar'] = 'ツールバー';
$string['view_recording_list_actionbar_delete'] = '削除';
$string['view_recording_list_actionbar_edit'] = '編集';
$string['view_recording_list_actionbar_hide'] = '隠す';
$string['view_recording_list_actionbar_import'] = 'インポート';
$string['view_recording_list_actionbar_protect'] = '非公開にする';
$string['view_recording_list_actionbar_publish'] = '公開する';
$string['view_recording_list_actionbar_show'] = '表示する';
$string['view_recording_list_actionbar_unprotect'] = '公開にする';
$string['view_recording_list_actionbar_unpublish'] = '非公開にする';
$string['view_recording_list_activity'] = '活動';
$string['view_recording_list_course'] = 'コース';
$string['view_recording_list_date'] = '日付';
$string['view_recording_list_description'] = '説明';
$string['view_recording_list_duration'] = '継続時間';
$string['view_recording_list_recording'] = 'レコーディング';
$string['view_recording_modal_button'] = '適用';
$string['view_recording_modal_title'] = 'レコーディングの値を設定する';
$string['view_recording_name'] = '名称';
$string['view_recording_playback'] = 'プレイバック';
$string['view_recording_preview'] = 'プレビュー';
$string['view_recording_recording'] = 'レコーディング';
$string['view_recording_tags'] = 'タグ';
$string['view_recording_unpublish_confirmation'] = '本当に {$a} を非公開にしてもよろしいですか?';
$string['view_recording_unpublish_confirmation_warning_p'] = 'このレコーディングには異なるコースまたは活動にインポートされた {$a} のリンクがあります。レコーディングが非公開にされた場合、これらのリンクも非公開にされます。';
$string['view_recording_unpublish_confirmation_warning_s'] = 'このレコーディングには異なるコースまたは活動にインポートされた {$a} のリンクがあります。レコーディングが非公開にされた場合、このリンクも非公開にされます。';
$string['view_section_title_presentation'] = 'プレゼンテーションファイル';
$string['view_section_title_recordings'] = 'レコーディング';
