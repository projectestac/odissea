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
 * Strings for component 'tool_assignmentupgrade', language 'el', version '4.5'.
 *
 * @package     tool_assignmentupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Είστε σίγουροι;';
$string['areyousuremessage'] = 'Είστε σίγουροι πως θέλετε να αναβαθμίσετε την εργασία  "{$a->name}";';
$string['assignmentid'] = 'ID εργασίας';
$string['assignmentnotfound'] = 'Η εργασία δε βρέθηκε (id={$a})';
$string['assignmentsperpage'] = 'Εργασίες / σελίδα';
$string['assignmenttype'] = 'Τύπος εργασίας (που ανατέθηκε)';
$string['backtoindex'] = 'Πίσω στο ευρετήριο';
$string['batchoperations'] = 'Μαζικές λειτουργίες';
$string['batchupgrade'] = 'Αναβάθμιση πολλαπλών εργασιών';
$string['confirmbatchupgrade'] = 'Επιβεβαίωση μαζικής αναβάθμισης εργασιών';
$string['conversioncomplete'] = 'Η εργασία αναβαθμίστηκε';
$string['conversionfailed'] = 'Η αναβάθμιση των εργασιών δεν ήταν επιτυχής. Το σφάλμα από το ημερολόγιο καταγραφής ήταν: <br />{$a}';
$string['listnotupgraded'] = 'Εμφάνιση εργασιών που δεν αναβαθμίστηκαν';
$string['listnotupgraded_desc'] = 'Μπορείτε να αναβαθμίσετε μεμονωμένες εργασίες από εδώ';
$string['noassignmentsselected'] = 'Δεν έχουν επιλεγεί εργασίες';
$string['noassignmentstoupgrade'] = 'Δεν υπάρχουν εργασίες που χρήζουν αναβάθμισης';
$string['notsupported'] = '';
$string['notupgradedintro'] = 'Η σελίδα αυτή περιέχει αναθέσεις που έχουν δημιουργηθεί με παλαιότερες εκδόσεις του Moodle και δεν έχουν αναβαθμιστεί στη νέα  μονάδα εργασιών που χρησιμοποιείται από το Moodle 2.3 και μετέπειτα. Δεν μπορούν να αναβαθμιστούν όλες οι αναθέσεις - εάν έχουν δημιουργηθεί με κάποιον προσαρμοσμένο υπο-τύπο ανάθεσης, τότε ο υπο-τύπος αυτός θα πρέπει να αναβαθμιστεί στον μορφότυπο του νέου πρόσθετου ανάθεσης για να ολοκληρωθεί η αναβάθμιση.';
$string['notupgradedtitle'] = 'Αναθέσεις που δεν αναβαθμίστηκαν';
$string['pluginname'] = 'Εργαλείο αναβάθμισης αναθέσεων';
$string['privacy:metadata:preference:perpage'] = 'Η ορισμένη για τον χρήστη προτίμηση εγγραφών ανά σελίδα της αναβάθμισης ανάθεσης.';
$string['select'] = 'Επιλογή';
$string['submissions'] = 'Υποβολές';
$string['supported'] = 'Αναβάθμιση';
$string['unknown'] = 'Άγνωστο';
$string['updatetable'] = 'Πίνακας αναβάθμισης';
$string['upgradable'] = 'Υποστηρίζεται αναβάθμιση';
$string['upgradeall'] = 'Αναβάθμιση όλων των εργασιών';
$string['upgradeallconfirm'] = 'Θέλετε να αναβαθμίσετε όλες τις εργασίες;';
$string['upgradeassignmentfailed'] = 'Αποτέλεσμα: Η αναβάθμιση απέτυχε. Η καταγραφή από την αναβάθμιση ήταν:<br />
<div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Αποτέλεσμα: Αναβάθμιση επιτυχής';
$string['upgradeassignmentsummary'] = 'Αναβάθμιση εργασίας: {$a->name} (Μάθημα: {$a->shortname})';
$string['upgradeprogress'] = 'Αναβάθμιση εργασίας {$a->current} από {$a->total}';
$string['upgradeselected'] = 'Αναβάθμιση επιλεγμένων εργασιών';
$string['upgradeselectedcount'] = 'Θέλετε να αναβαθμίσετε τις {$a} εργασίες;';
$string['upgradesingle'] = 'Αναβάθμιση μεμονωμένης εργασίας';
$string['viewcourse'] = 'Προβολή του μαθήματος με την αναβαθμισμένη εργασία';
