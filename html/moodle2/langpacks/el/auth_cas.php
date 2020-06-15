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
 * Strings for component 'auth_cas', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'Χρήστες CAS';
$string['accesNOCAS'] = 'άλλοι χρήστες';
$string['auth_cas_auth_user_create'] = 'Create users externally';
$string['auth_cas_baseuri'] = 'URI του εξυπηρετητή (τίποτα αν δεν υπάρχει baseURI)<br />Για παράδειγμα, εάν ο εξυπηρετητής CAS απαντάει στο host.domaine.fr/CAS/ τότε <br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = 'Δεν μπορείτε να προχωρήσετε χωρίς να αλλάξετε τον κωδικό πρόσβασής σας, ωστόσο δεν υπάρχει διαθέσιμη σελίδα για την αλλαγή του. Παρακαλούμε επικοινωνήστε με τον διαχειριστή του Moodle.';
$string['auth_cas_cantconnect'] = 'Το LDAP μέρος του αρθρώματος CAS δεν μπορεί να συνδεθεί στον εξυπηρετητή: {$a}';
$string['auth_cas_casversion'] = 'Έκδοση πρωτοκόλλου CAS';
$string['auth_cas_certificate_check'] = 'Επιλέξτε «ναι» αν θέλετε να επικυρώσετε το πιστοποιητικό του εξυπηρετητή';
$string['auth_cas_certificate_check_key'] = 'Επικύρωση εξυπηρετητή';
$string['auth_cas_certificate_path'] = 'Μονοπάτι του CA (Certificate Authority: Αρχή έκδοσης πιστοποιητικών για ασφαλείς συνδέσεις στο Διαδίκτυο) αρχείου αλυσίδας (σε μορφότυπο PEM) για επικύρωση του πιστοποιητικού εξυπηρετητή.';
$string['auth_cas_certificate_path_empty'] = 'Αν ενεργοποιήσετε την επικύρωση εξυπηρετητή, πρέπει να καθορίσετε μια διαδρομή πιστοποιητικού';
$string['auth_cas_certificate_path_key'] = 'Μονοπάτι πιστοποιητικού';
$string['auth_cas_changepasswordurl'] = 'Διεύθυνση URL αλλαγής Κωδικού Πρόσβασης';
$string['auth_cas_create_user'] = 'Ενεργοποιήστε το εάν επιθυμείτε να εισάγετε CAS-αυθεντικοποιημένους χρήστες στην βάση δεδομένων του Moodle. Εάν όχι, τότε μόνο οι χρήστες που είναι ήδη στη βάση μπορούν να συνδεθούν.';
$string['auth_cas_create_user_key'] = 'Δημιουργία χρήστη';
$string['auth_cas_curl_ssl_version'] = 'Η έκδοση SSL (2 ή 3) προς χρήση. Από προεπιλογή, η PHP θα προσπαθήσει να την προσδιορίσει μόνη της, αν και σε ορισμένες περιπτώσεις πρέπει να οριστεί χειροκίνητα.';
$string['auth_cas_curl_ssl_version_default'] = 'Προεπιλογή';
$string['auth_cas_curl_ssl_version_key'] = 'cURL Έκδοση SSL';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_casdescription'] = 'Αυτή η μέθοδος χρησιμοποιεί ένα εξυπηρετητή CAS (Central Authentication Service: κεντρική υπηρεσία αυθεντικοποίησης) για την πιστοποίηση των χρηστών σε ένα SSO περιβάλλον (Single Sign On: μία και μόνον ενιαία αυθεντικοποίηση). Μπορείτε επίσης να χρησιμοποιήσετε απλή LDAP (Lightweight Directory Access Protocol) πιστοποίηση. Εάν το όνομα χρήστη και ο κωδικός πρόσβασης είναι έγκυρα σύμφωνα με το CAS, το Moodle δημιουργεί μια καινούργια καταχώρηση για τον χρήστη στην βάση δεδομένων του, λαμβάνοντας ιδιοχαρακτηριστικά του χρήστη μέσω LDAP αν χρειαστεί. Στις επόμενες συνδέσεις μόνο το όνομα χρήστη και ο κωδικός ελέγχονται.';
$string['auth_cas_enabled'] = 'Ενεργοποιήστε αν θέλετε να χρησιμοποιήσετε αυθεντικοποίηση CAS.';
$string['auth_cas_hostname'] = 'Το όνομα Η/Υ (hostname) του CAS εξυπηρετητή <br /> π.χ.: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Διεύθυνση ή DNS όνομα του Η/Υ (hostname)';
$string['auth_cas_invalidcaslogin'] = 'Λυπούμαστε! Η σύνδεση απέτυχε. Αδυναμία εξουσιοδότησης.';
$string['auth_cas_language'] = 'Επιλογή γλώσσας για σελίδες αυθεντικοποίησης';
$string['auth_cas_language_key'] = 'Γλώσσα';
$string['auth_cas_logincas'] = 'Πρόσβαση ασφαλούς σύνδεσης';
$string['auth_cas_logoutcas'] = 'Επιλέξτε «Ναι» εάν θέλετε να αποσυνδεθείτε από το CAS όταν αποσυνδέεστε από το Moodle';
$string['auth_cas_logoutcas_key'] = 'CAS επιλογή αποσύνδεσης';
$string['auth_cas_logout_return_url'] = 'Δώστε την URL διεύθυνση στην οποία οι χρήστες του εξυπηρετητή CAS θα ανακατευθύνονται όταν αποσυνδεθούν.<br />
Αν αφεθεί κενή, οι χρήστες θα ανακατευθύνονται εκεί που το Moodle ανακατευθύνει τους χρήστες του';
$string['auth_cas_logout_return_url_key'] = 'Εναλλακτική διεύθυνση URL επιστροφής κατά την αποσύνδεση';
$string['auth_cas_multiauth'] = 'Επιλέξτε «Ναι» αν θέλετε να έχετε πολλαπλή αυθεντικοποίηση (CAS + άλλη αυθεντικοποίηση)';
$string['auth_cas_multiauth_key'] = 'Πολλαπλή αυθεντικοποίηση';
$string['auth_casnotinstalled'] = 'Δεν είναι δυνατή η χρήση της αυθεντικοποίησης CAS. Το άρθρωμα LDAP της PHP δεν είναι εγκατεστημένο.';
$string['auth_cas_port'] = 'Θύρα του εξυπηρετητή CAS';
$string['auth_cas_port_key'] = 'Θύρα';
$string['auth_cas_proxycas'] = 'Επιλέξτε «Ναι» εάν χρησιμοποιείτε το CAS σε κατάσταση λειτουργίας διακομιστή μεσολάβησης';
$string['auth_cas_proxycas_key'] = 'Κατάσταση λειτουργίας διακομιστή μεσολάβησης';
$string['auth_cas_server_settings'] = 'Ρυθμίσεις του εξυπηρετητή CAS';
$string['auth_cas_text'] = 'Ασφαλή σύνδεση';
$string['auth_cas_use_cas'] = 'Χρήση CAS';
$string['auth_cas_version'] = 'Έκδοση του πρωτοκόλλου CAS προς χρήση';
$string['CASform'] = 'Επιλογή αυθεντικοποίησης';
$string['noldapserver'] = 'Κανένας εξυπηρετητής LDAP δεν ρυθμίστηκε για CAS! Ο συγχρονισμός απενεργοποιήθηκε. (Central Authentication Service: κεντρική υπηρεσία αυθεντικοποίησης)';
$string['pluginname'] = 'Εξυπηρετητής CAS (SSO)';
$string['privacy:metadata'] = 'Το πρόσθετο «Αυθεντικοποίηση εξυπηρετητή CAS (SSO)» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['synctask'] = 'CAS εργασία συγχρονισμού χρηστών';
