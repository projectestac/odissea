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
 * Strings for component 'payment', language 'el', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Αρχειοθετημένα';
$string['accountconfignote'] = 'Οι πύλες πληρωμής για αυτόν τον λογαριασμό θα ρυθμιστούν ξεχωριστά';
$string['accountdeleteconfirm'] = 'Εάν αυτός ο λογαριασμός έχει προηγούμενες πληρωμές, θα αρχειοθετηθεί, διαφορετικά τα δεδομένα ρυθμίσεών του θα διαγραφούν οριστικά. Σίγουρα θέλετε να συνεχίσετε;';
$string['accountidnumber'] = 'Αναγνωριστικός αριθμός';
$string['accountidnumber_help'] = 'Ο αναγνωριστικός αριθμός χρησιμοποιείται μόνο όταν ταιριάζει ο λογαριασμός με εξωτερικά συστήματα και δεν εμφανίζεται πουθενά στον ιστότοπο. Εάν ο λογαριασμός έχει επίσημο κωδικό όνομα, μπορεί να εισαχθεί, διαφορετικά το πεδίο μπορεί να παραμείνει κενό.';
$string['accountname'] = 'Όνομα λογαριασμού';
$string['accountname_help'] = 'Πώς θα προσδιορίζεται αυτός ο λογαριασμός, για εκπαιδευτικούς ή διευθυντές που ρυθμίζουν πληρωμές (για παράδειγμα στο πρόσθετο εγγραφής μαθήματος).';
$string['accountnotavailable'] = 'Μη διαθέσιμος';
$string['createaccount'] = 'Δημιουργία λογαριασμού πληρωμών';
$string['deleteorarchive'] = 'Διαγραφή ή αρχειοθέτηση';
$string['eventaccountcreated'] = 'Ο λογαριασμός πληρωμών δημιουργήθηκε';
$string['eventaccountdeleted'] = 'Ο λογαριασμός πληρωμών διαγράφηκε';
$string['eventaccountupdated'] = 'Ο λογαριασμός πληρωμών ενημερώθηκε';
$string['feeincludesurcharge'] = '{$a->fee} (περιλαμβάνει {$a->surcharge}% προσαύξηση για τη χρήση αυτού του τύπου πληρωμής)';
$string['gatewaycannotbeenabled'] = 'Αδυναμία ενεργοποίησης της πύλης πληρωμών, επειδή οι ρυθμίσεις δεν είναι πλήρεις.';
$string['gatewaydisabled'] = 'Απενεργοποιημένο';
$string['gatewayenabled'] = 'Ενεργοποιημένο';
$string['gatewaynotfound'] = 'Η πύλη δεν βρέθηκε';
$string['gotomanageplugins'] = 'Ενεργοποιήστε και απενεργοποιήστε τις πύλες πληρωμών και ορίστε προσαυξήσεις μέσω {$a}.';
$string['gotopaymentaccounts'] = 'Μπορείτε να δημιουργήσετε πολλαπλούς λογαριασμούς πληρωμών χρησιμοποιώντας οποιαδήποτε από αυτές τις πύλες στη σελίδα {$a}';
$string['hidearchived'] = 'Απόκρυψη αρχειοθετημένων';
$string['noaccountsavilable'] = 'Δεν υπάρχουν διαθέσιμοι λογαριασμοί πληρωμών.';
$string['nocurrencysupported'] = 'Δεν υποστηρίζεται πληρωμή σε κανένα νόμισμα. Βεβαιωθείτε ότι είναι ενεργοποιημένη τουλάχιστον μία πύλη πληρωμής.';
$string['nogateway'] = 'Δεν υπάρχει πύλη πληρωμών που να μπορεί να χρησιμοποιηθεί.';
$string['nogatewayselected'] = 'Πρέπει πρώτα να επιλέξετε μια πύλη πληρωμών.';
$string['paymentaccount'] = 'Λογαριασμός πληρωμών';
$string['paymentaccounts'] = 'Λογαριασμοί πληρωμών';
$string['paymentaccountsexplained'] = 'Δημιουργήστε έναν ή περισσότερους λογαριασμούς πληρωμών για αυτόν τον ιστότοπο. Κάθε λογαριασμός περιλαμβάνει ρυθμίσεις για τις διαθέσιμες πύλες πληρωμής. Το άτομο που ρυθμίζει τις πληρωμές στον ιστότοπο (για παράδειγμα, πληρωμή για την εγγραφή σε μάθημα) θα μπορεί να επιλέξει από τους διαθέσιμους λογαριασμούς.';
$string['payments'] = 'Πληρωμές';
$string['privacy:metadata:database:payments'] = 'Πληροφορίες για τις πληρωμές.';
$string['privacy:metadata:database:payments:amount'] = 'Το ποσό για την πληρωμή.';
$string['privacy:metadata:database:payments:currency'] = 'Το νόμισμα της πληρωμής.';
$string['privacy:metadata:database:payments:gateway'] = 'Η πύλη πληρωμών που χρησιμοποιείται για την πληρωμή.';
$string['privacy:metadata:database:payments:timecreated'] = 'Ο χρόνος που έγινε η πληρωμή.';
$string['privacy:metadata:database:payments:timemodified'] = 'Ο χρόνος τελευταίας ενημέρωσης της καρτέλας πληρωμής.';
$string['privacy:metadata:database:payments:userid'] = 'Ο χρήστης που έκανε την πληρωμή.';
$string['restoreaccount'] = 'Επαναφορά';
$string['selectpaymenttype'] = 'Επιλογή τύπου πληρωμής';
$string['showarchived'] = 'Εμφάνιση αρχειοθετημένων';
$string['supportedcurrencies'] = 'Υποστηριζόμενα νομίσματα';
$string['surcharge'] = 'Προσαύξηση (ποσοστό)';
$string['surcharge_desc'] = 'Η προσαύξηση είναι ένα επιπρόσθετο ποσοστό που χρεώνεται στους χρήστες που επιλέγουν να πληρώσουν χρησιμοποιώντας αυτήν την πύλη πληρωμών.';
