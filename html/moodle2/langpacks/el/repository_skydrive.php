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
 * Strings for component 'repository_skydrive', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   repository_skydrive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_foldername'] = 'Κρυφή μνήμη φακέλου';
$string['clientid'] = 'Αναγνωριστικό πελάτη';
$string['configplugin'] = 'Διαμόρφωση Microsoft OneDrive (παλαιού τύπου)';
$string['deprecatedwarning'] = 'Προειδοποίηση: Το API που χρησιμοποιείται από αυτό το πρόσθετο αποθετηρίου έχει απαρχαιωθεί από την Microsoft και θα σταματήσει να λειτουργεί κάποια στιγμή. Παρακαλούμε, κάντε μετεγκατάσταση (μεταφορά/μετατροπή) στο νεότερο αποθετήριο «Microsoft OneDrive».';
$string['oauthinfo'] = '<p>Για να χρησιμοποιήσετε αυτό το πρόσθετο, πρέπει να καταχωρήσετε τον ιστότοπό σας <a href="https://account.live.com/developers/applications">στην Microsoft</a>.</p>
<p>Ως μέρος της διαδικασίας καταχώρησης, θα πρέπει να δώσετε την ακόλουθη διεύθυνση URL ως «Redirect domain» (ανακατεύθυνση τομέα):</p>
<p>{$a->callbackurl}</p>
<p>Μόλις καταχωρηθείτε, σας παρέχεται ένα αναγνωριστικό πελάτη και ένα μυστικό που μπορείτε να το εισάγετε εδώ.</p>';
$string['pluginname'] = 'Microsoft OneDrive (παλαιού τύπου)';
$string['privacy:metadata'] = 'Το πρόσθετο αποθετηρίου «Microsoft OneDrive (παλαιού τύπου)» δεν αποθηκεύει κανένα προσωπικό δεδομένο αλλά μεταβιβάζει δεδομένα χρήστη από το Moodle προς το απομακρυσμένο σύστημα.';
$string['secret'] = 'Μυστικό';
$string['skydrive:view'] = 'Εμφάνιση OneDrive (παλαιού τύπου)';
