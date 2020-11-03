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
 * Strings for component 'portfolio_flickr', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_flickr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Κλειδί API';
$string['contenttype'] = 'Τύποι περιεχομένου';
$string['err_noapikey'] = 'Δεν υπάρχει κλειδί API';
$string['err_noapikey_help'] = 'Δεν έχει ρυθμιστεί κανένα κλειδί API για αυτό το πρόσθετο. Μπορείτε να πάρετε ένα από αυτά από τη σελίδα υπηρεσιών Flickr.';
$string['hidefrompublicsearches'] = 'Απόκρυψη αυτών των εικόνων από δημόσιες αναζητήσεις;';
$string['isfamily'] = 'Ορατό στην οικογένεια';
$string['isfriend'] = 'Ορατό σε φίλους';
$string['ispublic'] = 'Δημόσιο (όλοι μπορούν τα το δουν)';
$string['moderate'] = 'Επίβλεψη';
$string['noauthtoken'] = 'Δεν ήταν δυνατή η ανάκτηση ενός κουπονιού αυθεντικοποίησης για χρήση σε αυτή την σύνοδο';
$string['other'] = 'Καλλιτεχνικές, Εικονογραφίες, CGI, ή άλλες μη-φωτογραφικές εικόνες';
$string['photo'] = 'Φωτογραφίες';
$string['pluginname'] = 'Flickr (Σύστημα διαδικτυακής διαχείρισης φωτογραφιών)';
$string['privacy:metadata'] = 'Αυτό το πρόσθετο αποστέλλει δεδομένα εξωτερικά σε ένα συνδεδεμένο λογαριασμό Flickr. Δεν αποθηκεύει δεδομένα τοπικά.';
$string['privacy:metadata:data'] = 'Προσωπικά δεδομένα που διαβιβάστηκαν από το υποσύστημα χαρτοφυλακίου.';
$string['restricted'] = 'Απαγορευμένο';
$string['safe'] = 'Ασφαλές';
$string['safetylevel'] = 'Επίπεδο ασφαλείας';
$string['screenshot'] = 'Στιγμιότυπο οθόνης';
$string['set'] = 'Ρύθμιση';
$string['setupinfo'] = 'Οδηγίες εγκατάστασης';
$string['setupinfodetails'] = 'Για να αποκτήσετε το κλειδί API και τη μυστική συμβολοσειρά, συνδεθείτε στο Flickr και <a href="{$a->applyurl}">υποβάλετε αίτηση για ένα νέο κλειδί</a>. Μόλις δημιουργηθεί νέο κλειδί και μυστικό για εσάς, ακολουθήστε τον σύνδεσμο «Επεξεργασία ροής auth για αυτήν την εφαρμογή» στη σελίδα. Επιλέξτε «Τύπος εφαρμογής» σε «Εφαρμογή ιστού». Στο πεδίο «Διεύθυνση URL επανάκλησης», τοποθετήστε την τιμή: <br /><code>{$a->callbackurl}</code><br />Μπορείτε επίσης να δώσετε την περιγραφή και το λογότυπο του Moodle ιστοτόπου σας. Αυτές οι τιμές μπορούν να οριστούν αργότερα <a href="{$a->keysurl}">στη διεύθυνση</a>, όπου εμφανίζονται οι εφαρμογές σας στο Flickr.';
$string['sharedsecret'] = 'Μυστική συμβολοσειρά';
$string['title'] = 'Τίτλος';
$string['uploadfailed'] = 'Αποτυχία ανεβάσματος εικόνας στο flickr.com: {$a}';
