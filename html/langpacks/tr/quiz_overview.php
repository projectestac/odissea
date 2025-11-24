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
 * Strings for component 'quiz_overview', language 'tr', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Tüm denemeleri göster';
$string['allattemptscontributetograde'] = 'Tüm denemeler kullanıcının final notuna katkı sağlar.';
$string['allstudents'] = 'Tüm {$a} göster';
$string['attemptsonly'] = 'Sadece deneyenleri {$a} göster';
$string['attemptsprepage'] = 'Sayfa başına gösterilen denemeler';
$string['deleteselected'] = 'Seçili denemeleri sil';
$string['done'] = 'Yapıldı';
$string['err_failedtodeleteregrades'] = 'Hesaplanan deneme notları silinemedi';
$string['err_failedtorecalculateattemptgrades'] = 'Deneme notlarını tekrar hesaplarken hata';
$string['highlightinggraded'] = 'Final notuna katkıda bulunan kullanıcı denemesi parlak gösterilir.';
$string['needed'] = 'Gerekli';
$string['noattemptsonly'] = 'Sadece deneme yapmayan {$a} göster/indir';
$string['noattemptstoregrade'] = 'Tekrar puanlanması gereken deneme yok';
$string['nogradepermission'] = 'Bu sınava not verme iznine sahip değilsiniz.';
$string['onlyoneattemptallowed'] = 'Bu sınavda her kullanıcının sadece 1 deneme hakkı vardır.';
$string['optallattempts'] = 'tüm denemeler';
$string['optallstudents'] = 'Sınavı deneyen/denemeyen tüm \'{$a}\'';
$string['optattemptsonly'] = 'Sadece sınavı deneyenler \'{$a}\'';
$string['optnoattemptsonly'] = 'Sınavı denemeyenler \'{$a}\'';
$string['optonlyregradedattempts'] = 'tekrar puanlanan/ tekrar puanllanması gerekir olarak işaretlenen';
$string['overview'] = 'Notlar';
$string['overviewdownload'] = 'İndirmeyi gözden geçir';
$string['overviewfilename'] = 'notlar';
$string['overviewreport'] = 'Puanlama raporu';
$string['overviewreportgraph'] = 'Genel puan aralıklarına ulaşan öğrenci sayısı';
$string['overviewreportgraphgroup'] = 'Puan aralıklarına ulaşan \'{$a}\'guruptaki öğrenci sayısı';
$string['pagesize'] = 'Sayfa boyutu';
$string['pluginname'] = 'Notlar';
$string['preferencespage'] = 'Yalnızca bu sayfa için tercihler';
$string['preferencessave'] = 'Raporu göster';
$string['preferencesuser'] = 'Bu rapor için seçenekleriniz';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Her soru slotu için puan gösterilsin mi?';
$string['privacy:preference:slotmarks:no'] = 'Soru slotu yanında puanlar gösterilmiyor';
$string['privacy:preference:slotmarks:yes'] = 'Soru slotu yanında puanlar gösteriliyor';
$string['regrade'] = 'Tekrar not ver';
$string['regrade_allattempts'] = 'Tüm denemeler';
$string['regrade_allquestions'] = 'Tüm sorular';
$string['regrade_attempts'] = 'Denemelere yeniden not ver....';
$string['regrade_commitregrade'] = 'Yeniden not verme taahhüdü';
$string['regrade_dryrun'] = 'Prova olarak çalıştır';
$string['regrade_help'] = 'Yeniden not verme, mümkünse her sorunun geçerli sürümünü kullanarak denemelerin otomatik notunu yeniden hesaplar. Prova çalışması, denemeleri etkilemeden not değişikliklerini önizlemenize olanak tanır.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'Yeniden not verme için yapılan son provasında, yeniden not vermenin {$a->attempts} denemelerindeki {$a->questions} sorularının notlarını değiştirdiği görülmüştür.';
$string['regrade_regradenow'] = 'Şimdi yeniden not ver';
$string['regrade_selectedattempts'] = 'Seçilen denemeler';
$string['regrade_selectedquestions'] = 'Seçilen sorular';
$string['regradeall'] = 'Tümüne tekrar not ver';
$string['regradealldry'] = 'Tam yeniden puanlama denemesi';
$string['regradealldrydo'] = 'Tekrar puanlanması gerek olarak işaretlenenleri tekrar puanla({$a})';
$string['regradealldrydogroup'] = '\'{$a->groupname}\' grubundaki tekrar puanlanması gerek ({$a->countregradeneeded}) olarak işaretlenenleri tekrar puanla';
$string['regradealldrygroup'] = '\'{$a->groupname}\' Grubu için tam yeniden puanlama denemesi';
$string['regradeallgroup'] = '\'{$a->groupname}\' grubu için tam yeniden not verme';
$string['regradecomplete'] = 'Yeniden not verme tamamlandı';
$string['regradedsuccessfullyxofy'] = 'Yeniden puanlama bitti({$a->done}/{$a->count})';
$string['regradeheader'] = 'Tekrar puanlanıyor';
$string['regradeselected'] = 'Seçili uygulamalara yeniden not ver';
$string['regradingattemptissue'] = 'Slot {$a->slot}: {$a->neden}';
$string['regradingattemptxofy'] = 'Yeniden puanlama denemesi {$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = '{$a->name} tarafından yapılan {$a->attemptnum} girişiminde (kimlik {$a->attemptid}) aşağıdaki sorular yeniden not verilmedi';
$string['regradingattemptxofywithdetails'] = 'Yeniden puanlama denemesi ({$a->done}/{$a->count}) - {$a->name} (id {$a->attemptid}) ait {$a->attemptnum}. deneme';
$string['show'] = 'Göster / indir';
$string['showattempts'] = 'Sadece denemeleri göster / indir';
$string['showdetailedmarks'] = 'Her bir soru için puanlar';
$string['showinggraded'] = 'Yalnızca her bir kullanıcı için not verilen uygulama gösteriliyor';
$string['showinggradedandungraded'] = 'Her bir kullanıcı için puanlanan ve puanlanmayan uygulamaları gösterir. Her bir kullanıcı için not verilen uygulama vurgulu olarak gösterilir. Bu sınav için not verme yöntemi {$a}.';
$string['studentingroup'] = '\'{$a->groupname}\' grubunda \'{$a->coursestudent}\'';
$string['studentingrouplong'] = 'Bu grupta \'{$a->coursestudent}\'';
