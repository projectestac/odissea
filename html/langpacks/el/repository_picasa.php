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
 * Strings for component 'repository_picasa', language 'el', version '4.5'.
 *
 * @package     repository_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Αναγνωριστικό πελάτη';
$string['configplugin'] = 'Ρυθμίσεις αποθετηρίου Picasa';
$string['oauthinfo'] = '<p>Για να χρησιμοποιήσετε αυτό το πρόσθετο, πρέπει να καταχωρήσετε τον ιστότοπό σας στο Google, όπως περιγράφεται στην τεκμηρίωση για την <a href="{$a->docsurl}">εγκατάσταση του Google OAuth 2.0</a>.</p>
<p>Ως μέρος της διαδικασίας καταχώρησης, θα πρέπει να δώσετε την ακόλουθη διεύθυνση URL ως «Authorized Redirect URIs» (εξουσιοδοτημένες ανακατευθύνσεις URI): </p>
<p>{$a->callbackurl} </p>
<p>Μόλις καταχωρηθείτε, σας παρέχεται ένα αναγνωριστικό πελάτη και ένα μυστικό που μπορεί να χρησιμοποιηθεί για τη διαμόρφωση όλων των πρόσθετων Google Drive και Picasa.</p>';
$string['picasa:view'] = 'Εμφάνιση του repository picasa';
$string['pluginname'] = 'Άλμπουμ Ιστού Picasa';
$string['privacy:metadata:repository_picasa'] = 'Το πρόσθετο «Αποθετήριο Picasa για άλμπουμ ιστού» δεν αποθηκεύει κανένα προσωπικό δεδομένο αλλά μεταβιβάζει δεδομένα χρήστη από το Moodle προς το απομακρυσμένο σύστημα.';
$string['privacy:metadata:repository_picasa:searchtext'] = 'Το κείμενο αναζήτησης ερωτήματος χρήστη του αποθετηρίου Picasa.';
$string['secret'] = 'Μυστικό';
