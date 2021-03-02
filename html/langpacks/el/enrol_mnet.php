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
 * Strings for component 'enrol_mnet', language 'el', version '3.8'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Κάποιο στιγμιότυπο του πρόσθετου εγγραφής MNet υπάρχει ήδη για αυτόν τον Η/Υ. Μόνο ένα στιγμιότυπο ανά Η/Υ και/ή ένα στιγμιότυπο για όλους τους Η/Υ επιτρέπεται.';
$string['instancename'] = 'Όνομα μεθόδου εγγραφής';
$string['instancename_help'] = 'Μπορείτε προαιρετικά να μετονομάσετε αυτό το στιγμιότυπο της μεθόδου εγγραφής MNet. Αν αφήσετε αυτό το πεδίο κενό, θα χρησιμοποιηθεί το προεπιλεγμένο όνομα στιγμιότυπου, το οποίο θα περιέχει το όνομα του απομακρυσμένου Η/Υ και τον ρόλο που έχει ανατεθεί στους χρήστες του.';
$string['mnet:config'] = 'Ρύθμιση στιγμιότυπων εγγραφής MNet';
$string['mnet_enrol_description'] = 'Δημοσίευση αυτής της υπηρεσίας για να επιτρέπεται στους διαχειριστές στο {$a} να εγγράφουν τους μαθητές τους σε μαθήματα που έχετε δημιουργήσει στον εξυπηρετητή σας.<br/>
<ul>
<li><em>Εξάρτηση</em>: Πρέπει επίσης να <strong>εγγραφείτε</strong> στην υπηρεσία SSO (Πάροχος Ταυτότητας) στο {$a}.</li>
<li><em>Εξάρτηση</em>: Πρέπει επίσης να <strong>δημοσιεύσετε</strong> την υπηρεσία SSO (Πάροχος Υπηρεσιών) στο {$a}.</li>
</ul><br/>
Εγγραφείτε σε αυτή την υπηρεσία για να μπορέσετε να εγγράψετε τους μαθητές σας σε μαθήματα στο {$a}.<br/>
<ul>
<li><em>Εξάρτηση</em>: Πρέπει επίσης να <strong>δημοσιεύσετε</strong> την υπηρεσία SSO (Πάροχος Ταυτότητας) στο {$a}.</li>
<li><em>Εξάρτηση</em>: Πρέπει επίσης να <strong>εγγραφείτε</strong> στην υπηρεσία SSO (Πάροχος Υπηρεσιών) στο {$a}.</li>
</ul><br/>';
$string['mnet_enrol_name'] = 'Υπηρεσία απομακρυσμένης εγγραφής';
$string['pluginname'] = 'Mnet απομακρυσμένες εγγραφές (Moodle Net)';
$string['pluginname_desc'] = 'Επιτρέπει ο απομακρυσμένος εξυπηρετητής Mnet να εγγράψει τους χρήστες του στα μαθήματα μας.';
$string['privacy:metadata'] = 'Το πρόσθετο «Απομακρυσμένες εγγραφές MNet» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['remotesubscriber'] = 'Απομακρυσμένος Η/Υ';
$string['remotesubscriber_help'] = 'Επιλέξτε «Όλοι οι Η/Υ» για να ανοίξει αυτό το μάθημα προς όλους του ομότιμους προς τους οποίους προσφέρουμε την υπηρεσία απομακρυσμένης εγγραφής. Ή διαλέξτε έναν μόνο Η/Υ για να κάνετε αυτό το μάθημα διαθέσιμο προς τους χρήστες του μόνο.';
$string['remotesubscribersall'] = 'Όλοι οι Η/Υ';
$string['roleforremoteusers'] = 'Ρόλος για τους χρήστες του';
$string['roleforremoteusers_help'] = 'Τι ρόλο θα πάρουν οι απομακρυσμένοι χρήστες από τον επιλεγμένο Η/Υ.';
