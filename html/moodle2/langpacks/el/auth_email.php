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
 * Strings for component 'auth_email', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'Η επιβεβαίωση μέσω ηλ. ταχυδρομείου είναι η προκαθορισμένη μέθοδος πιστοποίησης. Όταν ο χρήστης συνδεθεί επιλέγοντας το δικό του όνομα χρήστη και συνθηματικό, αποστέλεται στην ηλ. διεύθυνσή του ένα μήνυμα ηλεκτρονικού ταχυδρομείου για επιβεβαίωση. Αυτό το μήνυμα περιέχει έναν ασφαλή σύνδεσμο για μία σελίδα όπου ο χρήστης μπορεί να επιβεβαιώσει τον λογαριασμό του. Σε κάθε μελλοντική σύνδεση, απλά ελέγχεται το όνομα χρήστη και το συνθηματικό σε σχέση με τις αποθηκευμένες τιμές στη βάση δεδομένων του ΠΗΛΕΑΣ.';
$string['auth_emailnoemail'] = 'Tried to send you an email but failed!';
$string['auth_emailrecaptcha'] = 'Προσθέτει ένα στοιχείο φόρμας για οπτική/ακουστική επιβεβαίωση στην σελίδα αυτο-εγγραφής χρηστών μέσω ηλεκτρονικού ταχυδρομείουs. Αυτό προστατεύει τον ιστότοπό σας από επιθέσεις και συμβάλει και σε ένα αξιόλογο σκοπό. Για περισσότερες λεπτομέρειες  http://recaptcha.net/learnmore.html. <br /><em>Προσοχή! Απαιτείται η επέκταση PHP cURL.</em>';
$string['auth_emailrecaptcha_key'] = 'Enable reCAPTCHA element';
$string['auth_emailsettings'] = 'Settings';
$string['pluginname'] = 'Πιστοποίηση βασισμένη στο ηλ. ταχυδρομείο.';
