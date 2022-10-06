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
 * Strings for component 'quiz_overview', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   quiz_overview
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Εμφάνιση όλων των προσπαθειών';
$string['allattemptscontributetograde'] = 'Όλες οι προσπάθειες συνεισφέρουν στον τελικό βαθμό για τον χρήστη.';
$string['allstudents'] = 'Εμφάνιση όλων των {$a}';
$string['attemptsonly'] = 'Εμφάνιση μόνο {$a} με προσπάθειες';
$string['attemptsprepage'] = 'Προσπάθειες που εμφανίζονται ανά σελίδα';
$string['deleteselected'] = 'Διαγραφή επιλεγμένων προσπαθειών';
$string['done'] = 'Ολοκληρώθηκε';
$string['err_failedtodeleteregrades'] = 'Αποτυχία διαγραφής των υπολογισμένων βαθμών της προσπάθειας';
$string['err_failedtorecalculateattemptgrades'] = 'Αποτυχία επανυπολογισμού των βαθμών της προσπάθειας';
$string['highlightinggraded'] = 'Η προσπάθεια του χρήστη η οποία συνεισφέρει στο τελικό βαθμό είναι τονισμένη.';
$string['needed'] = 'Απαιτείται';
$string['noattemptsonly'] = 'Εμφάνιση μόνο {$a} χωρίς προσπάθειες';
$string['noattemptstoregrade'] = 'Καμία προσπάθεια δεν χρειάζεται επαναβαθμολόγηση';
$string['nogradepermission'] = 'Δεν έχετε δικαίωμα βαθμολόγησης αυτού του κουίζ.';
$string['onlyoneattemptallowed'] = 'Μόνο μια προσπάθεια ανά χρήστη επιτρέπεται σε αυτό το κουίζ.';
$string['optallattempts'] = 'όλες οι προσπάθειες';
$string['optallstudents'] = 'όλοι {$a} που έχουν προσπαθήσει ή όχι αυτό το κουίζ';
$string['optattemptsonly'] = '{$a} που έχουν προσπαθήσει αυτό το κουίζ';
$string['optnoattemptsonly'] = '{$a} που δεν έχουν προσπαθήσει αυτό το κουίζ';
$string['optonlyregradedattempts'] = 'που έχουν επαναβαθμολογηθεί / είναι επισημασμένα ότι χρήζουν επαναβαθμολόγησης';
$string['overview'] = 'Βαθμοί';
$string['overviewdownload'] = 'Κατέβασμα σύνοψης';
$string['overviewfilename'] = 'βαθμοί';
$string['overviewreport'] = 'Αναφορά βαθμών';
$string['overviewreportgraph'] = 'Συνολικός αριθμός των μαθητών που πετυχαίνουν κάθε διάστημα βαθμών';
$string['overviewreportgraphgroup'] = 'Αριθμός των μαθητών στην ομάδα «{$a}» που πετυχαίνουν κάθε διάστημα βαθμών';
$string['pagesize'] = 'Μέγεθος σελίδας';
$string['pluginname'] = 'Βαθμοί';
$string['preferencespage'] = 'Προτιμήσεις μόνο για αυτή τη σελίδα';
$string['preferencessave'] = 'Εμφάνιση αναφοράς';
$string['preferencesuser'] = 'Οι προτιμήσεις σας για αυτή την αναφορά';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Να εμφανίζονται βαθμοί για κάθε υποδοχή ερωτήσεων.';
$string['privacy:preference:slotmarks:no'] = 'Οι βαθμοί δεν εμφανίζονται δίπλα στην υποδοχή ερώτησης.';
$string['privacy:preference:slotmarks:yes'] = 'Οι βαθμοί εμφανίζονται δίπλα στην υποδοχή ερώτησης.';
$string['regrade'] = 'Επαναβαθμολόγηση';
$string['regradeall'] = 'Επαναβαθμολόγηση όλων';
$string['regradealldry'] = 'Γενική δοκιμή μιας πλήρους επαναβαθμολόγησης';
$string['regradealldrydo'] = 'Επαναβαθμολόγηση προσπαθειών που είναι επισημασμένες ότι χρήζουν επαναβαθμολόγησης ({$a})';
$string['regradealldrydogroup'] = 'Επαναβαθμολόγηση προσπαθειών ({$a->countregradeneeded}) που είναι επισημασμένες ότι χρήζουν επαναβαθμολόγησης στην ομάδα «{$a->groupname}».';
$string['regradealldrygroup'] = 'Γενική δοκιμή μιας πλήρους επαναβαθμολόγησης για την ομάδα «{$a->groupname}».';
$string['regradeallgroup'] = 'Πλήρη επαναβαθμολόγηση για την ομάδα «{$a->groupname}».';
$string['regradecomplete'] = 'Η επανα-βαθμολόγηση ολοκληρώθηκε με επιτυχία';
$string['regradedsuccessfullyxofy'] = 'Αναβαθμολογήθηκε με επιτυχία ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Επαναβαθμολόγηση';
$string['regradeselected'] = 'Επαναβαθμολόγηση των επιλεγμένων προσπαθειών';
$string['regradingattemptxofy'] = 'Προσπάθεια επανα-βαθμολόγησης ({$a->done}/{$a->count})';
$string['regradingattemptxofywithdetails'] = 'Αναβαθμολόγηση προσπάθειας ({$a->done}/{$a->count}) - Προσπάθεια {$a->attemptnum} από {$a->name} (αναγνωριστικό {$a->attemptid})';
$string['show'] = 'Εμφάνιση / λήψη';
$string['showattempts'] = 'Μόνο εμφάνιση / λήψη προσπαθειών';
$string['showdetailedmarks'] = 'Βαθμοί για κάθε ερώτηση';
$string['showinggraded'] = 'Εμφανίζεται μόνο η προσπάθεια που βαθμολογήθηκε για κάθε χρήστη.';
$string['showinggradedandungraded'] = 'Εμφανίζονται και οι προσπάθειες που βαθμολογήθηκαν και οι προσπάθειες που δεν βαθμολογήθηκαν για κάθε χρήστη. Η μία προσπάθεια που βαθμολογήθηκε για κάθε χρήστη είναι τονισμένη. Η μέθοδος βαθμολόγησης για αυτό το κουίζ είναι {$a}.';
$string['studentingroup'] = '«{$a->coursestudent}» στην ομάδα «{$a->groupname}».';
$string['studentingrouplong'] = '«{$a->coursestudent}» σε αυτή την ομάδα';
