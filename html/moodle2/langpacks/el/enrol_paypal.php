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
 * Strings for component 'enrol_paypal', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Ανάθεση ρόλου';
$string['businessemail'] = 'Ηλεκτρονικό ταχυδρομείο επιχειρησιακού PayPal';
$string['businessemail_desc'] = 'Η ηλεκτρονική διεύθυνση του επιχειρησιακού σας PayPal λογαριασμού';
$string['cost'] = 'Κόστος εγγραφής';
$string['costerror'] = 'Το κόστος εγγραφής δεν είναι αριθμητικό';
$string['costorkey'] = 'Παρακαλούμε επιλέξτε μία από τις παρακάτω μεθόδους για εγγραφή.';
$string['currency'] = 'Νόμισμα';
$string['defaultrole'] = 'Προεπιλεγμένη ανάθεση ρόλου';
$string['defaultrole_desc'] = 'Επιλέξτε τον ρόλο, ο οποίος θα ανατεθεί στους χρήστες κατά τη διάρκεια των PayPal εγγραφών';
$string['enrolenddate'] = 'Ημερομηνία λήξης';
$string['enrolenddate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να εγγραφούν μόνο μέχρι αυτή την ημερομηνία.';
$string['enrolenddaterror'] = 'Η ημερομηνία λήξης εγγραφών δεν μπορεί να είναι νωρίτερα από την ημερομηνία έναρξης';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolperiod_desc'] = 'Προεπιλεγμένη διάρκεια ισχύος της εγγραφής. Αν ορισθεί σε μηδέν, η διάρκεια εγγραφής θα είναι απεριόριστη από προεπιλογή.';
$string['enrolperiod_help'] = 'Διάρκεια ισχύος της εγγραφής, ξεκινώντας από τη στιγμή εγγραφής του χρήστη. Αν απενεργοποιηθεί, η διάρκεια εγγραφής θα είναι απεριόριστη.';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['enrolstartdate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να εγγραφούν μόνο από την ημερομηνία αυτή και μετά.';
$string['errdisabled'] = 'Το πρόσθετο εγγραφής PayPal είναι απενεργοποιημένο και δεν χειρίζεται τις ειδοποιήσεις πληρωμής.';
$string['erripninvalid'] = 'Η ειδοποίηση άμεσης πληρωμής δεν έχει επαληθευτεί από το PayPal.';
$string['errpaypalconnect'] = 'Δεν ήταν δυνατή η σύνδεση με {$a->url} για να επαληθευτεί η ειδοποίηση άμεσης πληρωμής: {$a->result}';
$string['expiredaction'] = 'Ενέργεια λήξης εγγραφής';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή του χρήστη. Παρακαλούμε έχετε υπόψη ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εξαλείφονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['mailadmins'] = 'Ενημέρωση διαχειριστή';
$string['mailstudents'] = 'Ειδοποίηση μαθητών';
$string['mailteachers'] = 'Ενημέρωση καθηγητών';
$string['messageprovider:paypal_enrolment'] = 'Μηνύματα εγγραφής PayPal';
$string['nocost'] = 'Δεν υπάρχει κόστος που σχετικό με την εγγραφή σε αυτό το μάθημα!';
$string['paypalaccepted'] = 'Αποδεκτές οι πληρωμές μέσω PayPal';
$string['paypal:config'] = 'Παραμετροποίηση περιπτώσεων εγγραφής μέσω PayPal';
$string['paypal:manage'] = 'Διαχείριση εγγεγραμένων χρηστών';
$string['paypal:unenrol'] = 'Ακύρωση εγγραφής χρηστών στο μάθημα';
$string['paypal:unenrolself'] = 'Ακύρωση εγγραφής στο μάθημα από τον ίδιο';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Το άρθρωμα PayPal σας επιτρέπει να δημιουργήσετε μαθήματα επί πληρωμή. Αν το κόστος για κάθε μάθημα είναι μηδενικό, τότε οι μαθητές δεν καλούνται να πληρώσουν για να εισαχθούν. Υπάρχει ένα κόστος για όλο τον ιστότοπο το οποίο το ορίζετε εδώ ως προεπιλογή για όλο τον ιστότοπο και έπειτα μια ρύθμιση μαθήματος που μπορείτε να ορίσετε για κάθε μάθημα μεμονωμένα. Το κόστος μαθήματος παρακάμπτει το κόστος ιστοτόπου.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Πληροφορίες σχετικά με τις συναλλαγές PayPal για εγγραφές PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Διεύθυνση ηλεκτρονικού ταχυδρομείου ή αναγνωριστικό λογαριασμού PayPal του αποδέκτη πληρωμής (δηλαδή του εμπόρου).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'Το αναγνωριστικό του μαθήματος που πωλείται.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'Το αναγνωριστικό του στιγμιότυπου εγγραφής στο μάθημα.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Το πλήρες όνομα του μαθήματος του οποίου  η εγγραφή έχει πωληθεί.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Μια σημείωση που εισήχθη από τον αγοραστή στο πεδίο σημειώσεων του ιστοτόπου του PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Πλήρες όνομα του αγοραστή.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Σε περίπτωση επιστροφής χρημάτων, αντιστροφής ή ακυρώσεως αντιστροφής, αυτό θα ήταν το αναγνωριστικό συναλλαγής της αρχικής συναλλαγής.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Η κατάσταση της πληρωμής.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Διατηρεί το εάν η πληρωμή χρηματοδοτήθηκε με eCheck (echeck) ή αν χρηματοδοτήθηκε με το υπόλοιπο του PayPal, την πιστωτική κάρτα ή την άμεση μεταφορά (άμεση).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Ο λόγος για τον οποίο εκκρεμεί η κατάσταση πληρωμής (αν εκκρεμεί).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Ο λόγος για τον οποίο η κατάσταση πληρωμής γίνεται Αντιστροφή, Επιστροφή, Ακύρωση_Αντιστροφή ή Απόρριψη (αν η κατάσταση είναι μία από αυτές).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Κύρια διεύθυνση ηλεκτρονικού ταχυδρομείου του αποδέκτη πληρωμής (δηλαδή, του εμπόρου).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Μοναδικό αναγνωριστικό λογαριασμού PayPal του αποδέκτη πληρωμής (δηλ. του εμπόρου).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Ποσό φόρου που χρεώνεται στην πληρωμή.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Πότε ειδοποιείται το Moodle από  την PayPal για την πληρωμή.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Ο αρχικός αριθμός αναγνώρισης συναλλαγής του εμπόρου για την πληρωμή από τον αγοραστή, έναντι του οποίου καταχωρήθηκε η υπόθεση.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'Το αναγνωριστικό του χρήστη που αγόρασε την εγγραφή του μαθήματος.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Το πρόσθετο εγγραφής PayPal μεταβιβάζει δεδομένα χρήστη από το Moodle στην ιστοσελίδα του PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Διεύθυνση του χρήστη που αγοράζει το μάθημα.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Πόλη του χρήστη που αγοράζει το μάθημα.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Χώρα του χρήστη που αγοράζει το μάθημα.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Μια συμβολοσειρά, με διαχωριστικό την παύλα, που περιέχει το αναγνωριστικό του χρήστη (του αγοραστή), το αναγνωριστικό του μαθήματος, το αναγνωριστικό του στιγμιοτύπου εγγραφής.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Διεύθυνση ηλεκτρονικού ταχυδρομείου του χρήστη που αγοράζει το μάθημα.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Όνομα του χρήστη που αγοράζει το μάθημα.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Το επώνυμο του χρήστη που αγοράζει το μάθημα.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Πλήρες όνομα του αγοραστή.';
$string['processexpirationstask'] = 'Εργασία αποστολής ειδοποιήσεων λήξης εγγραφής στο PayPal';
$string['sendpaymentbutton'] = 'Αποστολή πληρωμής με Paypal';
$string['status'] = 'Επιτρέπονται εγγραφές PayPal';
$string['status_desc'] = 'Επιτρέπεται στους χρήστες να χρησιμοποιούν PayPal για να εγγραφούν στο μάθημα από προεπιλογή.';
$string['transactions'] = 'Συναλλαγές PayPal';
$string['unenrolselfconfirm'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή σας στο μάθημα «{$a}»;';
