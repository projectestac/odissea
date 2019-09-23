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
 * Strings for component 'tool_task', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'Το ταχύτερο δυνατό';
$string['backtoscheduledtasks'] = 'Επιστροφή στις προγραμματισμένες εργασίες';
$string['blocking'] = 'Μπλοκάρισμα';
$string['cannotfindthepathtothecli'] = 'Δεν είναι δυνατή η εύρεση της διαδρομής για το εκτελέσιμο από γραμμή εντολών (CLI) αρχείο της PHP, οπότε η εκτέλεση της εργασίας διακόπηκε. Ορίστε τη ρύθμιση «Διαδρομή προς το εκτελέσιμο αρχείο της PHP» στην σελίδα «Διαχείριση ιστοτόπου / Εξυπηρετητής / Διαδρομές συστήματος».';
$string['clearfaildelay_confirm'] = 'Σίγουρα θέλετε να εκκαθαρίσετε την καθυστέρηση αποτυχίας για την εργασία «{$a}»; Μετά την εκκαθάριση της καθυστέρησης, η εργασία θα εκτελεστεί σύμφωνα με το κανονικό της πρόγραμμα.';
$string['component'] = 'Στοιχείο λογισμικού';
$string['corecomponent'] = 'Πυρήνας';
$string['default'] = 'Προεπιλογή';
$string['disabled'] = 'Απενεργοποιημένο';
$string['disabled_help'] = 'Οι απενεργοποιημένες προγραμματισμένες εργασίες δεν εκτελούνται από το cron, ωστόσο μπορούν να εκτελεστούν χειρονακτικά μέσω του εργαλείου CLI (Command-Line Interface).';
$string['edittaskschedule'] = 'Επεξεργασία προγράμματος εργασιών: {$a}';
$string['enablerunnow'] = 'Επιτρέψτε την επιλογή «Εκτέλεση τώρα» για προγραμματισμένες εργασίες';
$string['enablerunnow_desc'] = 'Επιτρέπει στους διαχειριστές να εκτελούν αμέσως μια προγραμματισμένη εργασία αμέσως, αντί να περιμένουν να εκτελούνται όπως έχει προγραμματιστεί. Το χαρακτηριστικό αυτό απαιτεί τη «Διαδρομή προς το εκτελέσιμο αρχείο της PHP» (pathtophp) να έχει οριστεί στις διαδρομές του συστήματος. Η εργασία εκτελείται στον εξυπηρετητή ιστού, επομένως ίσως θελήσετε να απενεργοποιήσετε αυτήν τη δυνατότητα για να αποφύγετε τυχόν προβλήματα επιδόσεων.';
$string['faildelay'] = 'Καθυστέρηση αποτυχίας';
$string['lastruntime'] = 'Τελευταία εκτέλεση';
$string['nextruntime'] = 'Επόμενη εκτέλεση';
$string['plugindisabled'] = 'Το πρόσθετο είναι απενεργοποιημένο';
$string['pluginname'] = 'Ρυθμίσεις προγραμματισμένων εργασιών';
$string['privacy:metadata'] = 'Το πρόσθετο «Ρυθμίσεις προγραμματισμένων εργασιών» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['resettasktodefaults'] = 'Επαναφορά του προγράμματος εργασιών στις προεπιλογές';
$string['resettasktodefaults_help'] = 'Αυτό θα απορρίψει τυχόν τοπικές αλλαγές και θα επαναφέρει το χρονοδιάγραμμα αυτής της εργασίας πίσω στις αρχικές του ρυθμίσεις.';
$string['runnow'] = 'Εκτέλεση τώρα';
$string['runnow_confirm'] = 'Σίγουρα θέλετε να εκτελέσετε αυτήν την εργασία «{$a}» τώρα; Η εργασία θα εκτελεστεί στον εξυπηρετητή ιστού και ενδέχεται να πάρει αρκετό χρόνο για να ολοκληρωθεί.';
$string['runpattern'] = 'Εκτέλεση μοτίβου';
$string['scheduledtaskchangesdisabled'] = 'Τροποποιήσεις στη λίστα των προγραμματισμένων εργασιών έχουν αποτραπεί στις ρυθμίσεις του Moodle';
$string['scheduledtasks'] = 'Προγραμματισμένες εργασίες';
$string['taskdisabled'] = 'Εργασία απενεργοποιημένη';
$string['taskscheduleday'] = 'Ημέρα';
$string['taskscheduleday_help'] = 'Πεδίο ημέρας του μήνα για χρονοπρογραμματισμό εργασίας. Το πεδίο χρησιμοποιεί τον ίδιο μορφότυπο όπως η εντολή χρονο-προγραμματισμού cron του unix. Μερικά παραδείγματα:

* <strong>*</strong> Κάθε ημέρα
* <strong>*/2</strong> Κάθε 2η ημέρα
* <strong>1</strong>  Την 1η κάθε μήνα
* <strong>1,15</strong> Την 1η και 15η κάθε μήνα';
$string['taskscheduledayofweek'] = 'Ημέρα της εβδομάδας';
$string['taskscheduledayofweek_help'] = 'Πεδίο ημέρας της εβδομάδας για χρονοπρογραμματισμό εργασίας. Το πεδίο χρησιμοποιεί τον ίδιο μορφότυπο όπως η εντολή χρονο-προγραμματισμού cron του unix. Μερικά παραδείγματα:

* <strong>*</strong> Κάθε ημέρα
* <strong>0</strong> Κάθε Κυριακή
* <strong>6</strong> Κάθε Σάββατο
* <strong>1,5</strong> Κάθε Δευτέρα και Παρασκευή';
$string['taskschedulehour'] = 'Ώρα';
$string['taskschedulehour_help'] = 'Πεδίο ώρας για χρονοπρογραμματισμό εργασίας. Το πεδίο χρησιμοποιεί τον ίδιο μορφότυπο όπως η εντολή χρονο-προγραμματισμού cron του unix. Μερικά παραδείγματα:

* <strong>*</strong> Κάθε ώρα
* <strong>*/2</strong> Κάθε 2 ώρες
* <strong>2-10</strong> Κάθε ώρα από τις 2 π.μ. έως 10 π.μ. (συμπεριλαμβανομένης)
* <strong>2,6,9</strong> 2 π.μ., 6 π.μ. και 9 π.μ.';
$string['taskscheduleminute'] = 'Λεπτό';
$string['taskscheduleminute_help'] = 'Πεδίο λεπτών για χρονοπρογραμματισμό εργασίας. Το πεδίο χρησιμοποιεί τον ίδιο μορφότυπο όπως η εντολή χρονο-προγραμματισμού cron του unix. Μερικά παραδείγματα:

* <strong>*</strong> Κάθε λεπτό
* <strong>*/5</strong> Κάθε 5 λεπτά
* <strong>2-10</strong> Κάθε λεπτό από «και 2» μέχρι «και 10» λεπτά της ώρας (συμπεριλαμβανομένων)
* <strong>2,6,9</strong> «και 2», «και 6» & «και 9» λεπτά μετά από κάθε ώρα «ακριβώς»';
$string['taskschedulemonth'] = 'Μήνας';
$string['taskschedulemonth_help'] = 'Πεδίο μήνα για χρονοπρογραμματισμό εργασίας. Το πεδίο χρησιμοποιεί τον ίδιο μορφότυπο όπως η εντολή χρονο-προγραμματισμού cron του unix. Μερικά παραδείγματα:

* <strong>*</strong> Κάθε μήνα
* <strong>*/2</strong> Κάθε 2ο μήνα
* <strong>1</strong> Κάθε Ιανουάριο
* <strong>1,5</strong> Κάθε Ιανουάριο και Μάιο';
