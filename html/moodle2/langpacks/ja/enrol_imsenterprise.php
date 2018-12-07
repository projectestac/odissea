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
 * Strings for component 'enrol_imsenterprise', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'あなたの設定を保存した後、';
$string['allowunenrol'] = 'IMSデータに学生/教師の<strong>登録解除</strong>を許可する';
$string['allowunenrol_desc'] = 'この設定を有効にした場合、エンタープライズデータ内で指定することによりコース登録が解除されます。';
$string['basicsettings'] = '基本設定';
$string['categoryidnumber'] = 'カテゴリIDナンバーを許可する';
$string['categoryidnumber_desc'] = 'この設定を有効にした場合、IMS EnterpriseはIDナンバーのカテゴリを作成します。';
$string['categoryseparator'] = 'カテゴリセパレータ文字';
$string['categoryseparator_desc'] = '「カテゴリIDナンバー」が有効にされた場合、必須となります。カテゴリ名およびIDナンバーを分けるための文字です。';
$string['coursesettings'] = 'コースデータオプション';
$string['createnewcategories'] = 'Moodleに登録されていない場合、新しい (非表示) コースカテゴリを作成する';
$string['createnewcategories_desc'] = 'コースの入力データ内に<org><orgunit>要素が存在する場合、そのコンテンツは最初から作成されるコースのカテゴリを指定するために使用されます。このプラグインは既存のコースを再度カテゴリ分類することはありません。

指定した名称のカテゴリが存在しない場合、非表示カテゴリが作成されます。';
$string['createnewcourses'] = 'Moodleに登録されていない場合、新しい (非表示) コースを作成する';
$string['createnewcourses_desc'] = 'この設定を有効にした場合、IMSエンタープライズ登録プラグインではIMSデータで見つかったMoodleデータベースに登録されていないコースを新たに作成することができます。すべての新しく作成されたコースは非表示とされます。';
$string['createnewusers'] = 'Moodleに登録されていないユーザアカウントを作成する';
$string['createnewusers_desc'] = 'IMSエンタープライズユーザ登録データには一般的に一連のユーザを記述します。この設定を有効にした場合、Moodleデータベースで探すことのできないユーザすべてを作成することができます。

ユーザは最初に「idnumber」、次にMoodleユーザ名で検索されます。パスワードはIMSエンタープライズプラグインによってインポートされません。Moodle認証プラグインでユーザ認証することをお勧めします。';
$string['cronfrequency'] = '処理の頻度';
$string['deleteusers'] = 'IMSデータに指定されている場合、ユーザアカウントを削除する';
$string['deleteusers_desc'] = 'この設定を有効にした場合、IMSエンタープライズ登録データでユーザアカウントの削除を指定  (「recstatus」フラグにユーザアカウントの削除を意味する「3」を設定) することができます。Moodleの標準どおり、実際にはユーザレコードはMoodleデータベースから削除されず、アカウントに削除フラグがセットされます。';
$string['doitnow'] = 'IMSエンタープライズインポート処理を実行してください。';
$string['emptyattribute'] = '空白のままにする';
$string['filelockedmail'] = 'あなたが使用しているIMSファイルベースの登録 ({$a}) テキストファイルをcronプロセスで削除することができません。通常、これはファイルパーミッションが正しくないことを意味します。Moodleが削除できるようファイルのパーミッションを変更してください。変更しない場合、この処理が繰り返し実行されます。';
$string['filelockedmailsubject'] = 'インポートエラー: 登録ファイル';
$string['fixcasepersonalnames'] = '個人名をタイトル文字にする';
$string['fixcaseusernames'] = 'ユーザ名を小文字に変更する';
$string['ignore'] = '無視';
$string['importimsfile'] = 'IMSエンタープライズファイルをインポートする';
$string['imsenterprise:config'] = 'IMSエンタープライズ登録インスタンスを設定する';
$string['imsenterprisecrontask'] = '登録ファイル処理';
$string['imsrolesdescription'] = 'IMSエンタープライズ仕様には8種類の異なるロールを含みます。ロールを無視する場合も含めてMoodleにこれらのロールを割り当ててください。';
$string['location'] = 'ファイルロケーション';
$string['logtolocation'] = 'ログファイルの出力場所 (空白はログなし)';
$string['mailadmins'] = '管理者にメール通知する';
$string['mailusers'] = 'ユーザにメール通知する';
$string['messageprovider:imsenterprise_enrolment'] = 'IMSエンタープライズ登録メッセージ';
$string['miscsettings'] = 'その他';
$string['nestedcategories'] = 'ネストカテゴリを許可する';
$string['nestedcategories_desc'] = 'この設定を有効にした場合、IMS Enterpriseはネストカテゴリを作成します。';
$string['pluginname'] = 'IMSエンタープライズファイル';
$string['pluginname_desc'] = 'このメソッドではあなたが指定した場所にある特別にフォーマットされたテキストファイルを繰り返しチェックおよび処理します。IMSエンタープライズ仕様に基づき、ファイルにはperson、groupおよびmembershipをXML要素に含む必要があります。';
$string['privacy:metadata'] = 'IMSエンタープライズファイル登録プラグインはどのような個人データも保存しません。';
$string['processphoto'] = 'ユーザ写真データをプロファイルに追加する';
$string['processphotowarning'] = '警告: イメージ処理はサーバに深刻な負荷を与えます。多くの学生の処理が予想される場合、このオプションを有効にしないことをお勧めします。';
$string['restricttarget'] = '次のターゲットが指定されている場合のみ処理する';
$string['restricttarget_desc'] = 'IMSエンタープライズデータファイルは複数の「ターゲット」を対象とすることができます - 異なるLMSまたは学校/大学の異なるシステム。<properties>タグ内の<target>にネーミングすることでデータが1つまたはそれ以上のターゲットシステムを対象としているエンタープライズファイルを指定することができます。

ほとんどの場合、このことを心配する必要はありません。設定欄を空白にした場合、Moodleはターゲットが指定されているかどうか問わず常にデータを処理します。そうでない場合、出力するための正確な名称を<target>タグ内に記述してください。';
$string['roles'] = 'ロール';
$string['settingfullname'] = 'コースフルネームのIMS説明タグ';
$string['settingfullnamedescription'] = 'コースフィールドにフルネームが必要であるため、あなたは選択された説明タグをIMSエンタープライズファイル内に定義する必要があります。';
$string['settingshortname'] = 'コース省略名のIMS説明タグ';
$string['settingshortnamedescription'] = 'コースフィールドに省略名が必要であるため、あなたは選択された説明タグをIMSエンタープライズファイル内に定義する必要があります。';
$string['settingsummary'] = 'コース概要のIMS説明タグ';
$string['settingsummarydescription'] = '任意フィールドです。あなたがコース概要を指定したくない場合、「空白のままにする」を選択してください。';
$string['sourcedidfallback'] = '「userid」が見つからない場合、ユーザIDに「sourcedid」を使用する';
$string['sourcedidfallback_desc'] = 'IMSデータでは<sourcedid>フィールドはソースシステムで使用される不変のユーザIDコードをあらわします。<userid>フィールドはユーザがログインする時に使用されるIDコードを含む別のフィールドです。多くの場合、これら2つのコードは同じです - しかし、必ずとは限りません。

いくつかの学生情報が<userid>フィールドに出力されない場合、この設定を有効にして<sourcedid>をMoodleのユーザIDに使用してください。そうでない場合、この設定を無効のままにしてください。';
$string['truncatecoursecodes'] = 'この長さにコースコードを切り詰める';
$string['truncatecoursecodes_desc'] = 'ここでは処理する前にコースコードを指定した長さに切り詰めることができます。コースコードを切り詰めたい場合、このボックスに文字長を入力してください。そうでない場合、このボックスを空白のままにすることによりコースコードは切り詰められません。';
$string['updatecourses'] = 'コースを更新する';
$string['updatecourses_desc'] = 'この設定を有効にした場合、IMS Enterprise登録プラグインは長いコース名およびコース省略名を更新することができます (「recstatus」フラグに「2」が設定された場合、更新を意味します)。';
$string['updateusers'] = 'IMSデータで指定された場合、ユーザアカウントを更新する';
$string['updateusers_desc'] = 'この設定を有効にした場合、IMS Enterprise登録データはユーザアカウントの変更を指定することができます (「recstatus」フラグに「2」が設定された場合、更新を意味します)。';
$string['usecapitafix'] = '「Capita」を使用している場合、チェックしてください (XMLフォーマットが少しだけ正しくありません)';
$string['usecapitafix_desc'] = 'Capitaによって作成された学生データにはXML出力において若干のエラーがあることが見つかっています。あなたがCapitaを使用している場合、このオプションを有効にしてください - そうでなければ、チェックしないままにしてください。';
$string['usersettings'] = 'ユーザデータオプション';
$string['zeroisnotruncation'] = '表示:0  切り詰め:なし';
