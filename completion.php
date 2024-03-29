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
 * Strings for component 'completion', language 'ja', branch 'MOODLE_23_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = '評点到達';
$string['activities'] = '活動';
$string['activitiescompleted'] = '完了済み活動';
$string['activitycompletion'] = '活動完了';
$string['addcourseprerequisite'] = 'コース前提条件を追加する';
$string['afterspecifieddate'] = '次の日付以降';
$string['aggregationmethod'] = '総計方法';
$string['all'] = 'すべて';
$string['any'] = '任意';
$string['approval'] = '承認';
$string['badautocompletion'] = '「条件を満たした場合、活動完了を表示する」を選択した場合、あなたは少なくとも (下記の) 1つの必要条件も有効にする必要があります。';
$string['completed'] = '完了';
$string['completedunlocked'] = '完了オプションがロック解除されました。';
$string['completedunlockedtext'] = 'あなたが変更を保存した場合、すべてのユーザの完了状態が消去されます。完了状態の消去に関してあなたが方針を変更した場合、フォームを保存しないでください。';
$string['completedwarning'] = '完了オプションがロックされました。';
$string['completedwarningtext'] = 'すでに1名またはそれ以上のユーザ ({$a}) がこの活動を完了マークしています。完了オプションを変更することにより、それらの完了状況を消去するため、混乱の原因となる可能性があります。そのため、完了オプションはロックされてます。あなたが絶対に必要な場合を除き、ロック解除しないことをお勧めします。';
$string['completion'] = '完了トラッキング';
$string['completion-alt-auto-enabled'] = 'システムは状態に応じて、このアイテムに完了マークします: {$a}';
$string['completion-alt-auto-fail'] = '完了: {$a} (合格点未到達)';
$string['completion-alt-auto-n'] = '未完了: {$a}';
$string['completion-alt-auto-pass'] = '完了: {$a} (合格点到達)';
$string['completion-alt-auto-y'] = '完了: {$a}';
$string['completion-alt-manual-enabled'] = 'ユーザはこのアイテムを手動で完了マークすることができます: {$a}';
$string['completion-alt-manual-n'] = '未完了: {$a} 完了マークするには選択してください。';
$string['completion-alt-manual-y'] = '完了: {$a} 未完了マークするには選択してください。';
$string['completion_automatic'] = '条件を満たした場合、活動完了を表示する';
$string['completiondisabled'] = '無効、活動設定に表示しない';
$string['completionenabled'] = '有効、完了設定および活動設定によりコントロールする';
$string['completionexpected'] = '期待される完了日';
$string['completionexpected_help'] = 'この設定では期待される活動完了日を指定します。日付は学生に表示されず、活動完了レポートのみに表示されます。';
$string['completion-fail'] = '完了 (合格点未到達)';
$string['completion_help'] = '有効にした場合、コンディションに基づき手動または自動の活動完了がトラッキングされます。必要に応じて複数のコンディションを設定することができます。その場合、すべてのコンディションに合致したときのみ活動が完了したとみなされます。

活動が完了した場合、コースページの活動名の横にチェックが表示されます。';
$string['completionicons'] = '完了チェックボックス';
$string['completionicons_help'] = '活動目の横にあるチェックボックスにより、活動の完了時期を指定します。

ドット付きのチェックマークが表示された場合、あなたはボックスをチェックすることができます (あなたの気持ちが変わった場合、ボックスを再度クリックすることで、チェックを外すことができます)。>

空白のチェックボックスが表示された場合、教師により設定されたコンディションにしたがってあなたが活動を完了した時点で、チェックマークが自動的に表示されます。';
$string['completion_manual'] = 'ユーザが手動で活動を完了マークできる';
$string['completionmenuitem'] = '完了';
$string['completion-n'] = '未完了';
$string['completion_none'] = '活動完了を表示しない';
$string['completionnotenabled'] = '完了は有効にされていません。';
$string['completionnotenabledforcourse'] = 'このコースでは完了は有効にされていません。';
$string['completionnotenabledforsite'] = 'このサイトでは完了は有効にされていません。';
$string['completiononunenrolment'] = '完了時に登録解除する';
$string['completion-pass'] = '完了 (合格点到達)';
$string['completionsettingslocked'] = '完了設定ロック中';
$string['completionstartonenrol'] = '受講登録時、完了トラッキングを開始する';
$string['completionstartonenrolhelp'] = 'コース受講登録後、コース完了における学生の進捗トラッキングを開始します。';
$string['completion-title-manual-n'] = '完了マークする: {$a}';
$string['completion-title-manual-y'] = '未完了マークする: {$a}';
$string['completionusegrade'] = '評定を必要とする';
$string['completionusegrade_desc'] = 'この活動を完了するには、学生が評定される必要があります。';
$string['completionusegrade_help'] = 'この設定を有効にした場合、学生が評定された時点で活動が完了したとみなされます。活動の合格点が設定された場合、合格および不合格アイコンが表示されます。';
$string['completionview'] = '閲覧を必要とする';
$string['completionview_desc'] = '完了するには、学生はこの活動を閲覧する必要があります。';
$string['completion-y'] = '完了';
$string['configenablecompletion'] = 'この設定を有効にした場合、あなたはコースレベルで完了 (進捗) トラッキングすることができます。';
$string['confirmselfcompletion'] = '自己完了を承認します。';
$string['coursealreadycompleted'] = 'あなたはすでにこのコースを完了しています。';
$string['coursecomplete'] = 'コース完了';
$string['coursecompleted'] = 'コース完了';
$string['coursegrade'] = 'コース評定';
$string['courseprerequisites'] = 'コース前提条件';
$string['coursesavailable'] = '利用可能なコース';
$string['coursesavailableexplaination'] = 'このリストに表示するためには、コース完了クライテリアを設定する必要があります。';
$string['criteria'] = 'クライテリア';
$string['criteriagradenote'] = 'ここで要求評点を変更したとしても、現在のコース合格点は更新されないことに留意してください。';
$string['criteriagroup'] = 'クライテリアグループ';
$string['criteriarequiredall'] = '下記のクライテリアすべてが必須である';
$string['criteriarequiredany'] = '下記のクライテリアどれでも必須である';
$string['csvdownload'] = 'スプレッドシートフォーマットでダウンロードする (UTF-8 .csv)';
$string['datepassed'] = '合格日';
$string['days'] = '日';
$string['daysafterenrolment'] = '受講登録後の日数';
$string['deletecompletiondata'] = '完了データを削除する';
$string['deletecoursecompletiondata'] = 'コース完了データを削除する';
$string['durationafterenrolment'] = '受講登録後の持続期間';
$string['editcoursecompletionsettings'] = 'コース完了設定を編集する';
$string['enablecompletion'] = '完了トラッキングを有効にする';
$string['enrolmentduration'] = '残り日数';
$string['err_noactivities'] = 'すべての活動で完了情報が有効にされていないため、何も表示されません。活動の設定画面により、あなたは完了情報を有効にすることができます。';
$string['err_nocourses'] = '他のどのコースでもコース完了が有効にされていないため、何も表示することはできません。あなたはコース設定内でコース完了を有効にすることができます。';
$string['err_nograde'] = 'このコースにはコース合格点が設定されていません。このクライテリアタイプを設定するには、あなたはコースに合格点を設定する必要があります。';
$string['err_noroles'] = 'このコースにはケイパビリティ「moodle/course:markcomplete」が割り当てられたロールがありません。このケイパビリティをロールに追加することで、あなたはこのクライテリアタイプを有効にすることができます。';
$string['err_nousers'] = 'このコースまたはグループには完了情報を表示するユーザはいません (デフォルトでは、完了情報は学生のみに表示されます。学生が登録されていない場合、このエラーが表示されます。管理者はこのオプションを管理画面で変更することができます)。';
$string['err_settingslocked'] = '1名またはそれ以上の学生がすでにクライテリアを完了しているため、設定がロックされています。完了クライテリア設定ロックを解除するには、既存のユーザデータを削除する必要があります。ユーザデータ削除により混乱が生じる恐れがあります。';
$string['err_system'] = '完了システムで内部エラーが発生しました (詳細情報を表示するため、システム管理者はデバッグ情報の表示を有効にできます)。';
$string['excelcsvdownload'] = 'Excel互換フォーマットでダウンロードする (.csv)';
$string['fraction'] = '割合';
$string['graderequired'] = '要求評点';
$string['gradexrequired'] = '要求評点: {$a}';
$string['inprogress'] = '進行中';
$string['manualcompletionby'] = '手動により完了できるロール';
$string['manualselfcompletion'] = '手動による自己完了';
$string['markcomplete'] = '完了マークする';
$string['markedcompleteby'] = '{$a} により完了マーク';
$string['markingyourselfcomplete'] = 'あなた自身による完了マーク';
$string['moredetails'] = '詳細情報';
$string['nocriteriaset'] = 'このコースに設定されている完了クライテリアはありません。';
$string['notcompleted'] = '未完了';
$string['notenroled'] = 'あなたはこのコースに登録されていません。';
$string['notyetstarted'] = '未開始';
$string['overallcriteriaaggregation'] = '全体のクライテリアタイプ総計';
$string['pending'] = '保留';
$string['periodpostenrolment'] = '受講登録後の期間';
$string['prerequisites'] = '前提条件';
$string['prerequisitescompleted'] = '前提条件完了';
$string['progress'] = '学生の進捗';
$string['progress-title'] = '{$a->user} - {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = '進捗: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = '事前学習の評価';
$string['remainingenroledfortime'] = '指定された期間の受講登録保持';
$string['remainingenroleduntildate'] = '指定された日付までの受講登録保持';
$string['reportpage'] = '{$a->total} ユーザの　{$a->from} から {$a->to} を表示しています。';
$string['requiredcriteria'] = '必須クライテリア';
$string['restoringcompletiondata'] = '完了データの書き出し';
$string['saved'] = '保存完了';
$string['seedetails'] = '詳細を表示する';
$string['self'] = '自己';
$string['selfcompletion'] = '自己完了';
$string['showinguser'] = 'ユーザの表示';
$string['unenrolingfromcourse'] = 'コースから登録解除する';
$string['unenrolment'] = '登録解除';
$string['unit'] = 'ユニット';
$string['unlockcompletion'] = '完了オプションのロックを解除する';
$string['unlockcompletiondelete'] = '完了オプションロックを解除した後、ユーザ完了データを削除する';
$string['usealternateselector'] = '代替コースセレクタを使用する';
$string['usernotenroled'] = 'このコースに登録されているユーザはいません。';
$string['viewcoursereport'] = 'コースレポートを表示する';
$string['viewingactivity'] = '{$a} の閲覧';
$string['writingcompletiondata'] = '完了データの書き出し';
$string['xdays'] = '{$a} 日';
$string['yourprogress'] = 'あなたの進捗';
