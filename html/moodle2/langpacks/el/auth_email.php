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
 * Strings for component 'auth_email', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Η εγγραφή με χρήση ηλεκτρονικού ταχυδρομείου επιτρέπει σε ένα χρήστη να δημιουργήσει λογαρισμό μέσω του πλήκτρου \'Δημιουργία νέου λογαριασμού\' στη σελίδα σύνδεσης. Στη συνέχεια ο χρήστης λαμβάνει ένα μήνυμα ηλεκτρονικού ταχυδρομείου που περιέχει έναν ασφαλή σύνδεσμο για μια σελίδα για επιβεβαίωση του λογαριασμού. Σε κάθε μελλοντική σύνδεση, απλά ελέγχεται το όνομα χρήστη και ο κωδικός πρόσβασης σε σχέση με τις αποθηκευμένες τιμές στη βάση δεδομένων του Moodle.</p><p>Σημείωση: Εκτός από την ενεργοποίηση του πρόσθετου, η εγγραφή με χρήση ηλεκτρονικού ταχυδρομείου πρέπει επίσης να επιλεγεί από το αναπτυσσόμενο μενού εγγραφής στη σελίδα \'Διαχείριση αυθεντικοποίησης\'.</p>';
$string['auth_emailnoemail'] = 'Tried to send you an email but failed!';
$string['auth_emailrecaptcha'] = 'Adds a visual/audio confirmation form element to the signup page for email self-registering users. This protects your site against spammers and contributes to a worthwhile cause. See http://recaptcha.net/learnmore.html for more details. <br /><em>PHP cURL extension is required.</em>';
$string['auth_emailrecaptcha_key'] = 'Enable reCAPTCHA element';
$string['auth_emailsettings'] = 'Settings';
$string['pluginname'] = 'Εγγραφή με χρήση ηλεκτρονικού ταχυδρομείου';
