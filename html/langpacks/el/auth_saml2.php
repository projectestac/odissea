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
 * Strings for component 'auth_saml2', language 'el', version '4.5'.
 *
 * @package     auth_saml2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterlogout'] = 'Εναλλακτική διεύθυνση URL επιστροφής μετά από αποσύνδεση';
$string['anyauth'] = 'Επιτρέπεται κάθε είδος αυθεντικοποίησης';
$string['attrsimple'] = 'Απλοποίηση ιδιοχαρακτηριστικών';
$string['auth_data_mapping'] = 'Αντιστοίχιση δεδομένων';
$string['auth_fieldlockfield'] = 'Κλείδωμα τιμής ({$a})';
$string['auth_fieldlocks'] = 'Κλείδωμα πεδίων χρήστη';
$string['auth_fieldmapping'] = 'Αντιστοίχιση πεδίων ({$a})';
$string['auth_updatelocalfield'] = 'Ενημέρωση τοπικού ({$a})';
$string['auth_updateremotefield'] = 'Ενημέρωση εξωτερικού ({$a})';
$string['autocreate'] = 'Αυτόματη δημιουργία χρηστών';
$string['autocreate_help'] = 'Αν οι χρήστες είναι στο IdP αλλά όχι στο Moodle, δημιουργήστε έναν λογαριασμό στο Moodle.';
$string['autologin'] = 'Αυτόματη σύνδεση';
$string['autologinbysession'] = 'Έλεγχος μία φορά ανά σύνοδο';
$string['autologincookie'] = 'Cookie αυτόματης σύνδεσης';
$string['availableidps'] = 'Επιλογή διαθέσιμων IdP';
$string['blockredirectheading'] = 'Ενέργειες μπλοκαρίσματος λογαριασμού';
$string['certificate'] = 'Επαναδημιουργία πιστοποιητικού';
$string['certificatedetails'] = 'Λεπτομέρειες πιστοποιητικού';
$string['certificatelock'] = 'Κλείδωμα πιστοποιητικού';
$string['certificatelock_help'] = 'Το κλείδωμα των πιστοποιητικών θα εμποδίσει το να αντικατασταθούν, αφού δημιουργηθούν.';
$string['certificatelock_locked'] = 'Το πιστοποιητικό είναι κλειδωμένο';
$string['certificatelock_lockedmessage'] = 'Το πιστοποιητικό είναι αυτή τη στιγμή κλειδωμένο.';
$string['certificatelock_regenerate'] = 'Δεν αναδημιουργούνται πιστοποιητικά επειδή έχουν κλειδωθεί!';
$string['certificatelock_unlock'] = 'Ξεκλείδωμα πιστοποιητικών';
$string['certificatelock_warning'] = 'Προειδοποίηση: Πρόκειται να κλειδώσετε τα πιστοποιητικά. Σίγουρα θέλετε να το κάνετε αυτό; <br> Τα πιστοποιητικά δεν είναι κλειδωμένα αυτήν τη στιγμή.';
$string['commonname'] = 'Κοινό όνομα';
$string['countryname'] = 'Χώρα';
$string['debug'] = 'Αποσφαλμάτωση';
$string['duallogin'] = 'Διπλή σύνδεση';
$string['emailtaken'] = 'Αδυναμία δημιουργίας νέου λογαριασμού, επειδή η διεύθυνση ηλε.ταχυδρομείου {$a} είναι ήδη καταχωρημένη';
$string['emailtakenupdate'] = 'Η διεύθυνση ηλε.ταχυδρομείου σας δεν ενημερώθηκε, επειδή η διεύθυνση {$a} είναι ήδη καταχωρημένη';
$string['error'] = 'Σφάλμα σύνδεσης';
$string['errorinvalidautologin'] = 'Μη έγκυρο αίτημα αυτόματης σύνδεσης';
$string['errorparsingxml'] = 'Σφάλμα κατά την ανάλυση XML: {$a}';
$string['exception'] = 'SAML2 εξαίρεση: {$a}';
$string['expirydays'] = 'Λήξη σε ημέρες';
$string['flaggedresponsetypemessage'] = 'Εμφάνιση προσαρμοσμένου μηνύματος';
$string['flaggedresponsetyperedirect'] = 'Ανακατεύθυνση προς εξωτερική διεύθυνση URL';
$string['flagmessage'] = 'Μήνυμα απόκρισης';
$string['flagredirecturl'] = 'Ανακατεύθυνση διεύθυνσης URL';
$string['flagresponsetype'] = 'Τύπος απόκρισης μπλοκαρίσματος λογαριασμού';
$string['grouprules'] = 'Κανόνες ομάδας';
$string['idpattr'] = 'Αντιστοίχιση IdP';
$string['idpattr_help'] = 'Ποιό ιδιοχαρακτηριστικό IdP να συγκρίνεται/ταιριάζει σε σχέση με ένα πεδίο χρήστη Moodle;';
$string['idpmetadata_badurl'] = 'Μη έγκυρα μετα-δεδομένα σε {$a}';
$string['idpmetadata_invalid'] = 'Το IdP XML δεν είναι έγκυρο';
$string['idpmetadata_noentityid'] = 'Το IdP XML δεν έχει entityID';
$string['idpmetadatarefresh'] = 'Ανανέωση μετα-δεδομένων IdP';
$string['idpmetadatarefresh_help'] = 'Εκτελέστε μια χρονοπρογραμματισμένη εργασία για να ενημερώσετε τα μετα-δεδομένα IdP από τη διεύθυνση URL των μετα-δεδομένων';
$string['idpname'] = 'Παράκαμψη ετικέτας IdP';
$string['idpnamedefault'] = 'Σύνδεση μέσω SAML2';
$string['idpnamedefault_varaible'] = 'Σύνδεση μέσω SAML2 ({$a})';
$string['localityname'] = 'Εντοπιότητα';
$string['locked'] = 'Κλείδωμα';
$string['logdir'] = 'Κατάλογος καταγραφής';
$string['logdirdefault'] = '/tmp/';
$string['logtofile'] = 'Ενεργοποιήστε την καταγραφή σε αρχείο';
$string['manageidpsheading'] = 'Διαχείριση διαθέσιμων IdP';
$string['mdlattr'] = 'Αντιστοίχιση Moodle';
$string['mdlattr_help'] = 'Με ποιο πεδίο χρήστη Moodle πρέπει να αντιστοιχιστεί το ιδιοχαρακτηριστικό IdP;';
$string['metadatafetchfailed'] = 'Η εύρεση/λήψη μεταδεδομένων απέτυχε: {$a}';
$string['metadatafetchfailedstatus'] = 'Η εύρεση/λήψη μεταδεδομένων απέτυχε: Κωδικός κατάστασης {$a}';
$string['metadatafetchfailedunknown'] = 'Η εύρεση/λήψη μεταδεδομένων απέτυχε: Άγνωστο σφάλμα cURL';
$string['multiidp:label:active'] = 'Ενεργό';
$string['multiidp:label:admin'] = 'Διαχειριστής';
$string['multiidp:label:alias'] = 'Ψευδώνυμο';
$string['multiidp:label:defaultidp'] = 'Προεπιλεγμένο IdP';
$string['multiidp:label:displayname'] = 'Εμφάνιση ονόματος (ή Εμφανιζόμενο όνομα)';
$string['multiidp:label:whitelist'] = 'Ανακατευθυνόμενες διευθύνσεις IP';
$string['multiidpbuttons'] = 'Κουμπιά με εικονίδια';
$string['multiidpdisplay'] = 'Τύπος προβολής πολλαπλών IdP';
$string['multiidpdropdown'] = 'Πτυσσόμενη λίστα';
$string['nameidasattrib'] = 'Έκθεση του NameID ως χαρακτηριστικού';
$string['nameidpolicy'] = 'Πολιτική NameID';
$string['nameidpolicy_help'] = '';
$string['noattribute'] = 'Έχετε συνδεθεί με επιτυχία, αλλά δεν ήταν δυνατή η εύρεση του ιδιοχαρακτηριστικού «{$a}» για να συσχετιστείτε με έναν λογαριασμό στο Moodle.';
$string['noidpfound'] = 'Το IdP «{$a}» δεν βρέθηκε ως ένα ρυθμισμένο IdP.';
$string['nouser'] = 'Έχετε συνδεθεί επιτυχώς ως «{$a}» αλλά δεν έχετε λογαριασμό στο Moodle.';
$string['nullprivatecert'] = 'Η δημιουργία ιδιωτικού πιστοποιητικού απέτυχε.';
$string['nullpubliccert'] = 'Η δημιουργία δημόσιου πιστοποιητικού απέτυχε.';
$string['organizationalunitname'] = 'Μονάδα Οργανισμού';
$string['organizationname'] = 'Όνομα οργανισμού';
$string['passivemode'] = 'Παθητική κατάσταση λειτουργίας';
$string['phone1'] = 'Τηλέφωνο';
$string['phone2'] = 'Κινητό τηλέφωνο';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'Το πρόσθετο «Αυθεντικοποίηση Saml2» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['privatekeypass'] = 'Κωδικός πρόσβασης κλειδιού ιδιωτικού πιστοποιητικού';
$string['privatekeypass_help'] = 'Αυτό χρησιμοποιείται για υπογραφή του τοπικού πιστοποιητικού Moodle. Αλλαγή αυτού καθιστά το τρέχον πιστοποιητικό μη έγκυρο.';
$string['regenerate_submit'] = 'Επαναδημιουργία';
$string['rememberidp'] = 'Υπηρεσία απομνημόνευσης ονόματος σύνδεσης';
$string['required'] = 'Το πεδίο αυτό είναι υποχρεωτικό';
$string['requireint'] = 'Το πεδίο αυτό είναι υποχρεωτικό και πρέπει να είναι ένας θετικός ακέραιος';
$string['selectloginservice'] = 'Επιλέξτε μια υπηρεσία σύνδεσης';
$string['sha1'] = 'Κλασικό SHA1 (Επικίνδυνο)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['showidplink'] = 'Εμφάνιση συνδέσμου IdP';
$string['showidplink_help'] = 'Αυτό θα εμφανίσει τον σύνδεσμο IdP όταν θα έχει ρυθμιστεί ο ιστότοπος.';
$string['signaturealgorithm'] = 'Αλγόριθμος υπογραφής';
$string['signaturealgorithm_help'] = 'Αυτός είναι ο αλγόριθμος που θα χρησιμοποιείται για να υπογράφονται τα αιτήματα SAML. Προειδοποίηση: Ο αλγόριθμος SHA1 παρέχεται μόνο για λόγους συμβατότητας προς τα πίσω, οπότε εκτός αν πρέπει οπωσδήποτε να τον χρησιμοποιήσετε, συνιστάται να τον αποφύγετε και να χρησιμοποιήσετε τουλάχιστον SHA256.';
$string['spmetadata'] = 'Μεταδεδομένα SP';
$string['spmetadatasign'] = 'Υπογραφή μεταδεδομένων SP';
$string['spmetadatasign_help'] = 'Υπογράψτε τα μεταδεδομένα SP.';
$string['sspversion'] = 'Έκδοση SimpleSAMLphp';
$string['stateorprovincename'] = 'Πολιτεία ή επαρχία';
$string['suspendeduser'] = 'Έχετε συνδεθεί με επιτυχία ως «{$a}», αλλά ο λογαριασμός σας στο Moodle έχει ανασταλεί.';
$string['taskmetadatarefresh'] = 'Εργασία ανανέωσης των μετα-δεδομένων';
$string['test_auth_button_login'] = 'Σύνδεση IdP';
$string['test_auth_button_logout'] = 'Αποσύνδεση IdP';
$string['test_passive_str'] = 'Δοκιμή με χρήση isPassive';
$string['tolower'] = 'Πεζά';
$string['tolower_help'] = 'Εφαρμογή πεζών στο IdP ιδιοχαρακτηριστικό πριν το ταίριασμα;';
$string['unlocked'] = 'Ξεκλείδωμα';
$string['unlockedifempty'] = 'Ξεκλείδωμα αν είναι κενό';
$string['update_never'] = 'Ποτέ';
$string['update_oncreate'] = 'Κατά τη δημιουργία';
$string['update_onlogin'] = 'Σε κάθε σύνδεση';
$string['update_onupdate'] = 'Κατά την ενημέρωση';
$string['wrongauth'] = 'Έχετε συνδεθεί με επιτυχία ως «{$a}», αλλά δεν έχετε εξουσιοδότηση για πρόσβαση στο Moodle.';
