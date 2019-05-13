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
 * Strings for component 'assignfeedback_offline', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Επιβεβαίωση εισαγωγής βαθμών';
$string['default'] = 'Ενεργοποιημένο από προεπιλογή';
$string['default_help'] = 'Εάν οριστεί, η ταξινόμηση εκτός σύνδεσης με φύλλα εργασίας θα ενεργοποιηθεί από προεπιλογή για όλες τις νέες αναθέσεις εργασιών.';
$string['downloadgrades'] = 'Λήψη φύλλου εργασίας βαθμολόγησης';
$string['enabled'] = 'Φύλλο εργασίας βαθμολόγησης χωρίς σύνδεση';
$string['enabled_help'] = 'Εάν ενεργοποιηθεί, ο διδάσκων θα μπορεί να κάνει λήψη και φόρτωση ενός φύλλου εργασίας με βαθμολογίες μαθητών κατά την βαθμολόγηση των εργασιών.';
$string['feedbackupdate'] = 'Ορίστε το πεδίο «{$a->field}» για τον/την «{$a->student}» σε «{$a->text}»';
$string['gradelockedingradebook'] = 'Ο βαθμός έχει κλειδωθεί στο βαθμολόγιο για {$a}';
$string['graderecentlymodified'] = 'Ο βαθμός έχει τροποποιηθεί στο Moodle πιο πρόσφατα από ό,τι στο φύλλο εργασίας βαθμολόγησης για {$a}';
$string['gradesfile'] = 'Φύλλο εργασίας (μορφότυπου csv) βαθμολόγησης';
$string['gradesfile_help'] = 'Φύλλο εργασίας βαθμολόγησης με τροποποιημένες βαθμολογίες. Αυτό το αρχείο πρέπει να είναι ένα αρχείο CSV με κωδικοποίηση UTF-8 που έχει ληφθεί από την εργασία, με στήλες για βαθμό βαθμολογίας και αναγνωριστικό.';
$string['gradeupdate'] = 'Όρισε το βαθμό για τον μαθητή {$a->student} σε {$a->grade}';
$string['ignoremodified'] = 'Να επιτρέπεται η ενημέρωση των εγγραφών που έχουν τροποποιηθεί πιο πρόσφατα στο Moodle από ό,τι στο λογιστικό φύλλο.';
$string['ignoremodified_help'] = 'Όταν γίνεται λήψη του φύλλου εργασίας βαθμολόγησης από το Moodle, περιέχει την ημερομηνία τελευταίας τροποποίησης για κάθε βαθμό. Αν κάποιος από τους βαθμούς τροποποιηθεί αφού γίνει λήψη, από προεπιλογή το Moodle θα αρνηθεί να αντικαταστήσει αυτή την ενημερωμένη πληροφορία όταν γίνεται εισαγωγή των βαθμών. Ενεργοποιώντας αυτή την επιλογή, το Moodle θα παραλείψει αυτό τον έλεγχο ασφάλειας και ίσως είναι δυνατό σε περισσότερους βαθμολογητές να γράφουν ο ένας πάνω στους βαθμούς του άλλου.';
$string['importgrades'] = 'Επιβεβαιώστε τις αλλαγές στο φύλλο εργασίας βαθμολόγησης';
$string['invalidgradeimport'] = 'Το Moodle δεν μπόρεσε να ανοίξει το ανεβασμένο φύλλο εργασίας. Βεβαιωθείτε ότι αποθηκεύτηκε σε μορφότυπο διαχωρισμένων με κόμμα τιμών (.csv) και ξαναπροσπαθήστε.';
$string['nochanges'] = 'Δεν βρέθηκαν τροποποιημένοι βαθμοί στο ανεβασμένο φύλλο εργασίας';
$string['offlinegradingworksheet'] = 'Βαθμοί';
$string['pluginname'] = 'Φύλλο εργασίας βαθμολόγησης εκτός σύνδεσης';
$string['privacy:nullproviderreason'] = 'Αυτό το πρόσθετο δεν διαθέτει βάση δεδομένων για την αποθήκευση πληροφοριών χρήστη. Χρησιμοποιεί μόνο τα API στο mod_assign για να βοηθήσει στην εμφάνιση της διασύνδεσης ταξινόμησης.';
$string['processgrades'] = 'Εισαγωγή βαθμών';
$string['skiprecord'] = 'Παράλειψη εγγραφής';
$string['updatedgrades'] = 'Ενημερώθηκαν {$a} βαθμοί και ανατροφοδοτήσεις';
$string['updaterecord'] = 'Ενημέρωση εγγραφής';
$string['uploadgrades'] = 'Ανέβασμα φύλλου εργασίας βαθμολόγησης';
