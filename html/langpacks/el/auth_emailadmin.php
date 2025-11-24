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
 * Strings for component 'auth_emailadmin', language 'el', version '4.5'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmationsubject'] = '{$a}: επιβεβαίωση λογαριασμού';
$string['auth_emailadmindescription'] = '<p>Η αυτο-καταχώρηση με χρήση ηλε.ταχυδρομείου και επιβεβαίωση διαχειριστή επιτρέπει σε έναν χρήστη να δημιουργήσει δικό του λογαριασμό μέσω ενός πλήκτρου «Δημιουργία νέου λογαριασμού» στη σελίδα σύνδεσης. Οι διαχειριστές του ιστοτόπου λαμβάνουν στη συνέχεια ένα μήνυμα ηλε.ταχυδρομείου που περιέχει έναν ασφαλή σύνδεσμο σε μια σελίδα όπου μπορούν να επιβεβαιώσουν τον λογαριασμό. Οι μελλοντικές συνδέσεις θα ελέγχουν απλώς το όνομα χρήστη και τον κωδικό πρόσβασης σε σχέση με τις αποθηκευμένες τιμές στη βάση δεδομένων Moodle.</p><p>Σημείωση: Εκτός από την ενεργοποίηση του πρόσθετου, η αυτο-καταχώρηση με χρήση ηλε.ταχυδρομείου και επιβεβαίωση διαχειριστή πρέπει επίσης να επιλεγεί στο πτυσσόμενο μενού αυτο-καταχώρησης στη σελίδα «Διαχείριση αυθεντικοποίησης».</p>';
$string['auth_emailadminnoemail'] = 'Έγινε προσπάθεια για αποστολή ενός μηνύματος ηλε.ταχυδρομείου αλλά απέτυχε!';
$string['auth_emailadminnotif_failed'] = 'Αδυναμία αποστολής ειδοποίησης καταχώρησης σε:';
$string['auth_emailadminnotif_strategy_all'] = 'Όλοι οι διαχειριστές (χρήστες admin)';
$string['auth_emailadminnotif_strategy_first'] = 'Πρώτος διαχειριστής';
$string['auth_emailadminnotif_strategy_key'] = 'Στρατηγική ειδοποιήσεων:';
$string['auth_emailadminrecaptcha_key'] = 'Ενεργοποίηση στοιχείου reCAPTCHA';
$string['auth_emailadminsettings'] = 'Ρυθμίσεις';
$string['pluginname'] = 'Αυτο-καταχώρηση με χρήση ηλε.ταχυδρομείου και επιβεβαίωση διαχειριστή';
