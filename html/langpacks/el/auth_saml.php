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
 * Strings for component 'auth_saml', language 'el', version '3.11'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_autologin'] = 'Αυτόματη σύνδεση SAML';
$string['auth_saml_check_mapping_duplicates'] = 'Εύρεση διπλότυπων αντιστοιχίσεων μαθήματος';
$string['auth_saml_course_mapping_dsn'] = 'DSN μαθήματος';
$string['auth_saml_course_mapping_sql'] = 'SQL μαθήματος';
$string['auth_saml_coursemapping'] = 'Αντιστοίχιση μαθημάτων';
$string['auth_saml_courses'] = 'Αντιστοίχιση μαθημάτων SAML';
$string['auth_saml_db_reset_button'] = 'Επαναρχικοποίηση τιμών στις εργοστασιακές ρυθμίσεις';
$string['auth_saml_disablejit'] = 'Απενεργοποίηση προπαροχής την ώρα που απαιτείται';
$string['auth_saml_disablejit_description'] = 'Επιλογή για ανενεργοποίηση της προπαροχής στην ώρα που απαιτείται. Όταν το JIT (μόνο την ώρα που απαιτείται) είναι απενεργοποιημένο, ο λογαριασμός δεν θα δημιουργηθεί.';
$string['auth_saml_dontdisplaytouser'] = 'Να μην εμφανίζεται μήνυμα λάθους εγγραφής στον χρήστη';
$string['auth_saml_dosinglelogout'] = 'Ενιαία αποσύνδεση';
$string['auth_saml_error_authentication_process'] = 'Σφάλμα κατά την διαδικασία αυθεντικοποίησης του {\\$a}';
$string['auth_saml_error_complete_user_data'] = 'Αποτυχία ολοκλήρωσης δεδομένων χρήστη του {\\$a}';
$string['auth_saml_error_complete_user_login'] = 'Αποτυχία ολοκλήρωσης σύνδεσης χρήστη του {\\$a}';
$string['auth_saml_error_executing'] = 'Σφάλμα εκτέλεσης';
$string['auth_saml_error_role_not_found'] = 'Σφάλμα κατά την εγγραφή. Ο ρόλος {\\$a} δεν υπάρχει στο Moodle';
$string['auth_saml_form_error'] = 'Υπάρχουν κάποια λάθη στη φόρμα. Παρακαλούμε, δείτε παρακάτω για τη διόρθωσή τους';
$string['auth_saml_ignoreinactivecourses'] = 'Παράβλεψη ανενεργών';
$string['auth_saml_ignoreinactivecourses_description'] = 'Αν δεν επιλεγεί, το πρόσθετο θα καταργήσει την εγγραφή των «ανενεργών» χρηστών από τα μαθήματα';
$string['auth_saml_initialize_roles'] = 'Επαναρχικοποίηση ρόλου';
$string['auth_saml_jit_not_active'] = 'Ο λογαριασμός χρήστη {\\$a} δεν υπάρχει και η προπαροχή μόνο την ώρα που απαιτείται είναι απενεργοποιημένη';
$string['auth_saml_logextrainfo'] = 'Καταγραφή επιπλέον πληροφοριών';
$string['auth_saml_logfile'] = 'Μονοπάτι αρχείου καταγραφής';
$string['auth_saml_loginusing'] = 'Συνδεθείτε εδώ χρησιμοποιώντας όνομα χρήστη και τον κωδικό πρόσβασής σας';
$string['auth_saml_logo_info'] = 'Περιγραφή σύνδεσης SAML';
$string['auth_saml_logo_info_description'] = 'Περιγραφή που θα εμφανίζεται κάτω από το κουμπί σύνδεσης SAML.';
$string['auth_saml_logo_path'] = 'Εικόνα SAML';
$string['auth_saml_logo_path_description'] = 'Μονοπάτι εικόνας για το κουμπί σύνδεσης SAML.';
$string['auth_saml_mapping_dsn_examples'] = 'mysql://moodleuser:moodlepass@localhost/saml_course_mapping
sqlite:/<path-to-db>/mapping.sqlite3
oci8://user:pwd@host/sid
postgresql7://user:pwd@host/sid';
$string['auth_saml_mapping_export'] = 'Εξαγωγή τους σε ένα CSV';
$string['auth_saml_missed_data'] = 'Τα ακόλουθα δεδομένα περιέχουν ελλιπή ιδιοχαρακτηριστικά:';
$string['auth_saml_role_mapping_dsn'] = 'Ρόλος dsn';
$string['auth_saml_role_mapping_sql'] = 'Ρόλος sql';
$string['auth_saml_rolemapping'] = 'Αντιστοίχιση ρόλων';
$string['auth_saml_samlhookfile'] = 'Μονοπάτι αρχείου άγκιστρου';
$string['auth_saml_samllib'] = 'Μονοπάτι βιβλιοθήκης SimpleSAMLphp';
$string['auth_saml_samllib_description'] = 'Μονοπάτι βιβλιοθήκης για το περιβάλλον SimpleSAMLphp που θέλετε να χρησιμοποιήσετε. Π.χ.: /var/www/sp/simplesamlphp/lib.';
$string['auth_saml_sucess_creating_course_mapping'] = 'Ο πίνακας course_mapping δημιουργήθηκε στη βάση δεδομένων του moodle';
$string['auth_saml_sucess_creating_role_mapping'] = 'Ο πίνακας course_role δημιουργήθηκε στη βάση δεδομένων του moodle';
$string['auth_saml_supportcourses'] = 'Μαθήματα που υποστηρίζουν SAML';
$string['auth_saml_syncusersfrom'] = 'Συγχρονίστε χρήστες από το άρθρωμα';
$string['auth_saml_username'] = 'Αντιστοίχιση ονομάτων χρηστών SAML';
$string['auth_samltitle'] = 'Αυθεντικοποίηση SAML';
$string['pluginname'] = 'Αυθεντικοποίηση SAML';
$string['pluginnotenabled'] = 'Πρόσθετο μη ενεργοποιημένο!';
