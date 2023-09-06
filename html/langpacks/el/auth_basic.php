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
 * Strings for component 'auth_basic', language 'el', version '4.1'.
 *
 * @package     auth_basic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_basic_not_enabled'] = 'Το Auth Basic δεν είναι ενεργοποιημένο. Το πρόσθετο δεν θα λειτουργήσει μέχρι να το ενεργοποιήσετε στο «Διαχείριση Αυθεντικοποίησης»';
$string['auth_basicdescription'] = 'Οι χρήστες μπορούν να συνδεθούν μέσω βασικής αυθεντικοποίησης HTTP';
$string['debug'] = 'Κατάσταση λειτουργίας εντοπισμού σφαλμάτων';
$string['debug_help'] = 'Μαζική εξαγωγή λεπτομερειών της διαδικασίας αυθεντικοποίησης σε καταγραφές σφαλμάτων και κεφαλίδες http';
$string['generated_masterpassword'] = 'Κωδικός πρόσβασης που δημιουργήθηκε';
$string['masterpassword'] = 'Κύριος κωδικός πρόσβασης';
$string['masterpassword_desc'] = 'Κύριος κωδικός πρόσβασης';
$string['masterpassword_not_enabled'] = 'Παρακαλούμε, προσθέστε <code>$CFG->auth_basic_enabled_master_password = true;</code> στο config.php για να ενεργοποιήσετε τον κύριο κωδικό πρόσβασης.<br/>
Μπορείτε να δημιουργήσετε νέους κύριους κωδικούς πρόσβασης, αλλά δεν θα λειτουργήσουν μέχρι να ενεργοποιηθεί η ρύθμιση.';
$string['menusettings'] = 'Ρυθμίσεις';
$string['onlybasic'] = 'Μόνο βασική';
$string['onlybasic_help'] = 'Εάν Ναι, τότε θα λειτουργεί μόνο για χρήστες των οποίων ο τύπος αυθεντικοποίησης έχει οριστεί ρητά σε «βασική» (για επιπλέον ασφάλεια).';
$string['password'] = 'Κωδικός πρόσβασης';
$string['pluginname'] = 'Βασική αυθεντικοποίηση';
$string['privacy:metadata:auth_basic_master_password'] = 'Κύριος κωδικός πρόσβασης.';
$string['privacy:metadata:auth_basic_master_password:userid'] = 'Ο/Η χρήστης που δημιούργησε τον κύριο κωδικό πρόσβασης.';
$string['privacy:metadata:masterpassword'] = 'κύριοςκωδικόςπρόσβασης';
$string['regeneratepassword'] = 'Επαναδημιουργία κωδικών πρόσβασης';
$string['savepassword'] = 'Αποθήκευση κωδικού πρόσβασης';
$string['send401'] = 'Επιβολή βασικής για όλους';
$string['send401_cancel'] = 'Πρέπει να εισαγάγετε ένα έγκυρο όνομα χρήστη και κωδικό πρόσβασης';
$string['send401_help'] = 'Αν ναι, τότε σε όλους τους χρήστες θα παρουσιάζεται το βασικό παράθυρο διαλόγου αυθεντικοποίησης και η κανονική σελίδα σύνδεσης θα απενεργοποιηθεί. Στις περισσότερες περιπτώσεις δεν θα το θέλετε αυτό.';
$string['timecreated'] = 'Χρόνος δημιουργίας';
$string['timeexpired'] = 'Χρόνος λήξης';
$string['usage'] = 'Χρήση';
$string['username'] = 'Όνομα';
$string['uses'] = 'Τρόπος χρήσης';
$string['whitelist_not_set'] = 'Το <code>$CFG->auth_basic_whitelist_ips</code> δεν έχει ρυθμιστεί στο config.php, οπότε δεν θα υπάρχει περιορισμός διευθύνσεων IP.';
$string['whitelistonly'] = 'Να επιτρέπεται μόνο η πρόσβαση στις ακόλουθες διευθύνσεις IP: <strong>{$a}</strong>';
