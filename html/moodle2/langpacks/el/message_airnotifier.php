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
 * Strings for component 'message_airnotifier', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   message_airnotifier
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifieraccesskey'] = 'Κλειδί πρόσβασης airnotifier';
$string['airnotifierappname'] = 'Όνομα εφαρμογής airnotifier';
$string['airnotifier:managedevice'] = 'Διαχείριση συσκευών';
$string['airnotifiermobileappname'] = 'Όνομα εφαρμογής κινητού';
$string['airnotifierport'] = 'Θύρα airnotifier';
$string['airnotifierurl'] = 'Διεύθυνση URL του airnotifier';
$string['configairnotifieraccesskey'] = 'Το κλειδί πρόσβασης για να χρησιμοποιηθεί για σύνδεση στον εξυπηρετητή airnotifier.';
$string['configairnotifierappname'] = 'Το αναγνωριστικό όνομα της εφαρμογής κινητού στο Airnotifier.';
$string['configairnotifiermobileappname'] = 'Το μοναδικό αναγνωριστικό της εφαρμογής κινητού (συνήθως κάτι σαν com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Η θύρα για την σύνδεση του εξυπηρετητή airnotifier.';
$string['configairnotifierurl'] = 'Η διεύθυνση URL του εξυπηρετητή στην οποία πρέπει να συνδεθείτε για να αποστείλετε ειδοποιήσεις προώθησης.';
$string['deletecheckdevicename'] = 'Διαγραφή της συσκευής σας: {$a->name}';
$string['deletedevice'] = 'Διαγραφή της συσκευής. Σημειώστε ότι μια εφαρμογή μπορεί να καταχωρήσει τη συσκευή ξανά. Αν η συσκευή συνεχίσει να επανεμφανίζεται, απενεργοποιήστε τη.';
$string['devicetoken'] = 'Κουπόνι συσκευής';
$string['errorretrievingkey'] = 'Ένα σφάλμα προέκυψε κατά την ανάκτηση του κλειδιού. Ο ιστότοπός σας πρέπει να καταχωρηθεί για να χρησιμοποιήσετε αυτή την υπηρεσία. Αν ο ιστότοπός σας είναι ήδη καταχωρημένος, παρακαλούμε προσπαθήστε να ενημερώσετε την καταχώρησή σας.';
$string['keyretrievedsuccessfully'] = 'Το κλειδί ανακτήθηκε επιτυχώς';
$string['nodevices'] = 'Καμία καταχωρημένη συσκευή. Οι συσκευές θα εμφανιστούν αυτόματα μετά την εγκατάσταση της εφαρμογής κινητού Moodle και την προσθήκη αυτού του ιστοτόπου.';
$string['nopermissiontomanagedevices'] = 'Δεν έχετε δικαιώματα διαχείρισης συσκευών.';
$string['notconfigured'] = 'Ο εξυπηρετητής Airnotifier δεν έχει ρυθμιστεί οπότε τα μηνύματα του Airnotifier δεν μπορούν να σταλούν';
$string['pluginname'] = 'Ειδοποιήσεις κινητής συσκευής';
$string['privacy:appiddescription'] = 'Αυτό είναι ένα αναγνωριστικό για την εφαρμογή που χρησιμοποιείται.';
$string['privacy:enableddescription'] = 'Αν αυτή η συσκευή είναι ενεργοποιημένη για το Airnotifier.';
$string['privacy:metadata:date'] = 'Η ημερομηνία αποστολής του μηνύματος.';
$string['privacy:metadata:enabled'] = 'Εάν η συσκευή Airnotifier είναι ενεργοποιημένη';
$string['privacy:metadata:externalpurpose'] = 'Αυτές οι πληροφορίες αποστέλλονται σε έναν απομακρυσμένο ιστότοπο για να παραδοθούν τελικά στην κινητή συσκευή του χρήστη.';
$string['privacy:metadata:fullmessage'] = 'Το πλήρες μήνυμα.';
$string['privacy:metadata:notification'] = 'Εάν αυτό το μήνυμα είναι ειδοποίηση.';
$string['privacy:metadata:smallmessage'] = 'Ένα τμήμα του μηνύματος.';
$string['privacy:metadata:subject'] = 'Η γραμμή θέματος του μηνύματος.';
$string['privacy:metadata:tableexplanation'] = 'Εδώ αποθηκεύονται πληροφορίες για την συσκευή Airnotifier.';
$string['privacy:metadata:userdeviceid'] = 'Η σύνδεση αναγνωριστικού προς την κινητή συσκευή του χρήστη';
$string['privacy:metadata:userfromfullname'] = 'Το πλήρες όνομα του χρήστη που έστειλε το μήνυμα.';
$string['privacy:metadata:userfromid'] = 'Το αναγνωριστικό χρήστη του συγγραφέα του μηνύματος.';
$string['privacy:metadata:userid'] = 'Το αναγνωριστικό του χρήστη που έστειλε το μήνυμα.';
$string['privacy:metadata:username'] = 'Το όνομα χρήστη του χρήστη.';
$string['privacy:metadata:usersubsystem'] = 'Το πρόσθετο αυτό συνδέεται με το υποσύστημα χρηστών.';
$string['privacy:subcontext'] = 'Μήνυμα στο Airnotifier';
$string['requestaccesskey'] = 'Αίτημα για κλειδί πρόσβασης';
$string['showhide'] = 'Ενεργοποίηση/απενεργοποίηση της συσκευής.';
$string['sitemustberegistered'] = 'Για να χρησιμοποιήσετε το δημόσιο στιγμιότυπο Airnotifier, πρέπει να καταχωρήσετε τον ιστότοπό σας στο Moodle.';
$string['unknowndevice'] = 'Άγνωστη συσκευή';
