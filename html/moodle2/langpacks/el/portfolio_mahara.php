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
 * Strings for component 'portfolio_mahara', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Ενεργοποίηση υποστήριξης χαρτοφυλακίου Leap2A (απαιτεί Mahara 1.3 ή υψηλότερη)';
$string['err_invalidhost'] = 'Μη έγκυρος Η/Υ στο MNet';
$string['err_invalidhost_help'] = 'Αυτό το πρόσθετο είναι ρυθμισμένο λανθασμένα να δείχνει σε έναν μη έγκυρο (ή διαγραμμένο) κόμβο του MNet. Το πρόσθετο αυτό βασίζεται σε ομότιμους ιστοτόπους Moodle Networking, με SSO IDP που έχουν δημοσιευτεί, με SSO_SP που έχουν εγγραφεί και με χαρτοφυλάκιο που έχει εγγραφεί <b>και</b> δημοσιευτεί.';
$string['err_networkingoff'] = 'Το MNet είναι εκτός λειτουργίας';
$string['err_networkingoff_help'] = 'Η αυθεντικοποίηση MNet είναι προσωρινά απενεργοποιημένη. Παρακαλούμε, ενεργοποιήστε την πριν προσπαθήσετε να ρυθμίσετε αυτό το πρόσθετο. Οποιαδήποτε στιγμιότυπα αυτού του πρόσθετου είναι σε απόκρυψη μέχρι να ενεργοποιηθεί το MNet. Θα πρέπει τότε να γίνουν πάλι ορατά χειροκίνητα.';
$string['err_nomnetauth'] = 'Το πρόσθετο αυθεντικοποίησης MNet είναι απενεργοποιημένο';
$string['err_nomnetauth_help'] = 'Το πρόσθετο αυθεντικοποίησης MNet είναι απενεργοποιημένο, αλλά είναι απαραίτητο για αυτή την υπηρεσία';
$string['err_nomnethosts'] = 'Βασίζεται στο MNet';
$string['err_nomnethosts_help'] = 'Αυτό το πρόσθετο βασίζεται σε MNet ομότιμους με δημοσιευμένο SSO IDP, που έχουν εγγραφεί σε SSO SP, δημοσιευμένες <b>και</b> εγγεγραμμένες υπηρεσίες χαρτοφυλακίου καθώς και το πρόσθετο αυθεντικοποίησης MNet. Οποιαδήποτε στιγμιότυπα αυτού του πρόσθετου είναι σε απόκρυψη μέχρι να πληρούνται αυτές οι συνθήκες. Μετά θα χρειαστεί χειροκίνητα να ρυθμιστούν πάλι σε ορατά.';
$string['failedtojump'] = 'Αποτυχία εκκίνησης επικοινωνίας με τον απομακρυσμένο εξυπηρετητή';
$string['failedtoping'] = 'Αποτυχία εκκίνησης επικοινωνίας με τον απομακρυσμένο εξυπηρετητή: {$a}';
$string['mnethost'] = 'Κόμβος Η/Υ του MNet';
$string['mnet_nofile'] = 'Αποτυχία εύρεσης του αρχείου στο αντικείμενο μεταφοράς - περίεργο σφάλμα';
$string['mnet_nofilecontents'] = 'Το αρχείο βρέθηκε στο αντικείμενο μεταφοράς, αλλά δεν ήταν δυνατόν να ληφθεί το περιεχόμενο - περίεργο σφάλμα: {$a}';
$string['mnet_noid'] = 'Δεν ήταν δυνατή η εύρεση του αντίστοιχου ιστορικού μεταφοράς για αυτό το κουπόνι';
$string['mnet_notoken'] = 'Δεν ήταν δυνατή η εύρεση κουπονιού που να ταιριάζει σε αυτή τη μεταφορά';
$string['mnet_wronghost'] = 'Ο απομακρυσμένος κεντρικός Η/Υ δεν ταιριάζει με το ιστορικό μεταφοράς για αυτό το κουπόνι';
$string['pf_description'] = 'Να επιτρέπεται σε χρήστες να προωθούν περιεχόμενο του Moodle σε αυτό τον κεντρικό υπολογιστή <br />
Εγγραφείτε σε <b>και</b> δημοσιεύστε αυτή την υπηρεσία ώστε να επιτρέψετε στους αυθεντικοποιημένους χρήστες στον ιστότοπό σας να προωθούν περιεχόμενο σε {$a}<br /><ul><li><em>
Εξάρτηση</em>: Πρέπει επίσης να <strong>δημοσιεύσετε</strong> την SSO (Ορίστε Πάροχο) υπηρεσία σε {$a}.</li><li><em>
Εξάρτηση</em>: Πρέπει επίσης να <strong>εγγραφείτε</strong> στην SSO (Πάροχος Υπηρεσίας) υπηρεσία σε {$a}</li><li><em>
Εξάρτηση</em>: Πρέπει επίσης να ενεργοποιήσετε το πρόσθετο αυθεντικοποίησης MNet.
</li></ul><br />';
$string['pf_name'] = 'Υπηρεσίες Χαρτοφυλακίου';
$string['pluginname'] = 'Ηλε.Χαρτοφυλάκιο Mahara';
$string['privacy:metadata'] = 'Αυτό το πρόσθετο αποστέλλει δεδομένα εξωτερικά σε μια συνδεδεμένη εφαρμογή Mahara. Δεν αποθηκεύει δεδομένα τοπικά.';
$string['privacy:metadata:data'] = 'Προσωπικά δεδομένα που διαβιβάστηκαν από το υποσύστημα χαρτοφυλακίου.';
$string['senddisallowed'] = 'Δεν μπορείτε να μεταφέρετε αρχεία στο Mahara αυτή τη στιγμή';
$string['url'] = 'Διεύθυνση URL';
