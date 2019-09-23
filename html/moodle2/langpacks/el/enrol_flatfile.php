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
 * Strings for component 'enrol_flatfile', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Κωδικοποίηση αρχείου';
$string['expiredaction'] = 'Δράση λήξης εγγραφής';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή του χρήστη. Παρακαλούμε έχετε υπόψη ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εξαλείφονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['filelockedmail'] = 'Το αρχείο κειμένου που χρησιμοποιείτε για εγγραφές βασισμένες σε αρχεία ({$a}) δεν μπορεί να διαγραφεί από την διεργασία χρονοπρογραμματισμού cron. Αυτό συνήθως σημαίνει ότι τα δικαιώματα σε αυτήν είναι λάθος. Παρακαλούμε διορθώστε τα δικαιώματα ώστε το Moodle να μπορεί να διαγράψει το αρχείο αυτό, ειδάλλως μπορεί να το επεξεργάζεται επανειλημμένα.';
$string['filelockedmailsubject'] = 'Σημαντικό σφάλμα: Αρχείο εγγραφής';
$string['flatfileenrolments'] = 'Εγγραφές απλού αρχείου (CSV)';
$string['flatfile:manage'] = 'Διαχείριση των εγγραφών χρηστών χειροκίνητα';
$string['flatfilesync'] = 'Συγχρονισμός απλού αρχείου εγγραφών';
$string['flatfile:unenrol'] = 'Ακύρωση εγγραφής χρηστών από το μάθημα χειροκίνητα';
$string['location'] = 'Τοποθεσία αρχείου';
$string['location_desc'] = 'Καθορίστε την πλήρη διαδρομή του αρχείου εγγραφών. Το αρχείο διαγράφεται αυτόματα μετά την επεξεργασία.';
$string['mapping'] = 'Αντιστοίχιση ρόλων επίπεδου αρχείου';
$string['messageprovider:flatfile_enrolment'] = 'Μηνύματα εγγραφής απλού αρχείου';
$string['notifyadmin'] = 'Ειδοποιήστε τον διαχειριστή';
$string['notifyenrolled'] = 'Ειδοποιήστε τους εγγεγραμμένους χρήστες';
$string['notifyenroller'] = 'Ειδοποιήστε τον χρήστη που είναι υπεύθυνος για τις εγγραφές';
$string['pluginname'] = 'Επίπεδο αρχείο (CSV)';
$string['pluginname_desc'] = 'Αυτή η μέθοδος θα ελέγχει κατ\' επανάληψη και θα επεξεργάζεται ένα ειδικά διαμορφωμένο αρχείο κειμένου στην τοποθεσία που εσείς ορίζετε. Το αρχείο αυτό είναι ένα αρχείο διαχωρισμένο με κόμματα που θεωρητικά έχει τέσσερα ή έξι πεδία ανα γραμμή:

operation, role, user idnumber, course idnumber [, starttime [, endtime]]

όπου:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber in the user table NB not id
* course idnumber - idnumber in the course table NB not id
* starttime - start time (in seconds since epoch) - optional
* endtime - end time (in seconds since epoch) - optional

Θα μπορούσε να μοιάζει κάπως σαν το παρακάτω:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Το πρόσθετο εγγραφών απλού αρχείου (CSV) μπορεί να αποθηκεύσει προσωπικά δεδομένα σχετικά με τις μελλοντικές εγγραφές στον πίνακα enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Η ενέργεια εγγραφής που αναμένεται κατά την ημερομηνία που δίνεται';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Το αναγνωριστικό μαθήματος στο οποίο αναφέρεται η εγγραφή';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'Το αναγνωριστικό του ρόλου που θα ανατεθεί ή θα αφαιρεθεί';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Πότε λήγει η αλλαγή εγγραφής.';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Ο χρόνος κατά τον οποίο τροποποιείται η εγγραφή';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Πότε ξεκινά η αλλαγή εγγραφής.';
$string['privacy:metadata:enrol_flatfile:userid'] = 'Το αναγνωριστικό του χρήστη στον οποίο αναφέρεται η ανάθεση ρόλου';
