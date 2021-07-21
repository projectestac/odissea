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
 * Strings for component 'auth_oidc', language 'el', version '3.11'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_oidcdescription'] = 'Το πρόσθετο Σύνδεσης OpenID παρέχει λειτουργικότητα για μία (και μόνο) ενιαία αυθεντικοποίηση χρησιμοποιώντας διαμορφώσιμους παρόχους ταυτότητας.';
$string['cfg_authendpoint_desc'] = 'Η διεύθυνση URI του Τελικού σημείου εξουσιοδότησης από τον πάροχο ταυτότητάς σας που θα χρησιμοποιηθεί.';
$string['cfg_authendpoint_key'] = 'Τελικό σημείο εξουσιοδότησης';
$string['cfg_autoappend_key'] = 'Αυτόματη προσάρτηση';
$string['cfg_clientid_desc'] = 'Το αναγνωριστικό πελάτη σας που έχει καταχωρηθεί στον πάροχο ταυτότητας';
$string['cfg_clientid_key'] = 'Αναγνωριστικό πελάτη';
$string['cfg_clientsecret_key'] = 'Μυστικό πελάτη';
$string['cfg_customicon_key'] = 'Προσαρμοσμένο εικονίδιο';
$string['cfg_debugmode_key'] = 'Καταγραφή μηνυμάτων εντοπισμού σφαλμάτων';
$string['cfg_domainhint_key'] = 'Υπόδειξη τομέα';
$string['cfg_err_invalidauthendpoint'] = 'Μη έγκυρο τελικό σημείο εξουσιοδότησης';
$string['cfg_err_invalidclientid'] = 'Μη έγκυρο αναγνωριστικό πελάτη';
$string['cfg_err_invalidclientsecret'] = 'Μη έγκυρο μυστικό πελάτη';
$string['cfg_err_invalidtokenendpoint'] = 'Μη έγκυρο τελικό σημείο κουπονιού';
$string['cfg_forceredirect_desc'] = 'Εάν ενεργοποιηθεί, θα παραλείψει τη πρώτη (index) σελίδα σύνδεσης και θα ανακατευθύνει στη σελίδα Σύνδεσης OpenID. Μπορεί να παρακαμφθεί με την παράμετρο ?noredirect=1 στην διεύθυνση URL';
$string['cfg_forceredirect_key'] = 'Επιβολή ανακατεύθυνσης';
$string['cfg_icon_desc'] = 'Ένα εικονίδιο προς εμφάνιση δίπλα στο όνομα παρόχου στην σελίδα σύνδεσης χρηστών.';
$string['cfg_icon_key'] = 'Εικονίδιο';
$string['cfg_iconalt_check'] = 'Εικονίδιο σημαδιού ελέγχου';
$string['cfg_iconalt_go'] = 'Πράσινος κύκλος';
$string['cfg_iconalt_group'] = 'Εικονίδιο ομάδας';
$string['cfg_iconalt_group2'] = 'Εναλλακτικό εικονίδιο ομάδας';
$string['cfg_iconalt_key'] = 'Εικονίδιο κλειδιού';
$string['cfg_iconalt_lock'] = 'Εικονίδιο κλειδαριάς';
$string['cfg_iconalt_locked'] = 'Εικονίδιο κλειδώματος';
$string['cfg_iconalt_mnet'] = 'Εικονίδιο MNet';
$string['cfg_iconalt_o365'] = 'Εικονίδιο Microsoft 365';
$string['cfg_iconalt_plus'] = 'Εικονίδιο +';
$string['cfg_iconalt_rightarrow'] = 'Εικονίδιο βέλους προς τα δεξιά';
$string['cfg_iconalt_stop'] = 'Κόκκινος κύκλος';
$string['cfg_iconalt_user'] = 'Εικονίδιο χρήστη';
$string['cfg_iconalt_user2'] = 'Εναλλακτικό εικονίδιο χρήστη';
$string['cfg_iconalt_userlock'] = 'Χρήστης με εικονίδιο κλειδαριάς';
$string['cfg_loginflow_key'] = 'Μέθοδος αυθεντικοποίησης';
$string['cfg_logoutendpoint_key'] = 'Τελικό σημείο αποσύνδεσης';
$string['cfg_oidcresource_desc'] = 'Ο πόρος Σύνδεσης OpenID για τον οποίο θα αποσταλεί το αίτημα.';
$string['cfg_oidcresource_key'] = 'Πόρος';
$string['cfg_oidcscope_desc'] = 'Η εμβέλεια του OIDC προς χρήση.';
$string['cfg_oidcscope_key'] = 'Εμβέλεια';
$string['cfg_opname_key'] = 'Όνομα παρόχου';
$string['cfg_redirecturi_key'] = 'Διεύθυνση URL ανακατεύθυνσης';
$string['cfg_signoffintegration_key'] = 'Ενιαία αποσύνδεση';
$string['cfg_tokenendpoint_desc'] = 'Η διεύθυνση URI του τελικού σημείου του διακριτικού από τον πάροχο ταυτότητάς σας προς χρήση.';
$string['cfg_tokenendpoint_key'] = 'Τελικό σημείο κουπονιού';
$string['cfg_userrestrictions_key'] = 'Περιορισμοί χρήστη';
$string['cfg_userrestrictionscasesensitive_key'] = 'Περιορισμοί χρήστη με διάκριση πεζών/κεφαλαίων';
$string['errorauthdisconnectemptypassword'] = 'Ο κωδικός πρόσβασης δεν επιτρέπεται να είναι κενός';
$string['errorauthdisconnectemptyusername'] = 'Το όνομα χρήστης δεν επιτρέπεται να είναι κενό';
$string['errorauthdisconnectifmanual'] = 'Εάν χρησιμοποιείται την χειροκίνητη μέθοδο σύνδεσης, δώστε τα διαπιστευτήρια παρακάτω.';
$string['errorauthdisconnectinvalidmethod'] = 'Λήφθηκε μη έγκυρη μέθοδος σύνδεσης.';
$string['errorauthdisconnectnewmethod'] = 'Χρήση μεθόδου σύνδεσης χρηστών';
$string['errorauthdisconnectusernameexists'] = 'Το όνομα αυτό δόθηκε ήδη. Παρακαλούμε, επιλέξτε κάποιο άλλο.';
$string['errorauthgeneral'] = 'Παρουσιάστηκε κάποιο πρόβλημα κατά τη σύνδεσή σας. Παρακαλούμε, επικοινωνήστε με τον διαχειριστή σας για βοήθεια.';
$string['errorauthinvalididtoken'] = 'Λήφθηκε μη έγκυρο id_token.';
$string['errorauthnoauthcode'] = 'Δεν ελήφθη κωδικός εξουσιοδότησης από τον εξυπηρετητή ταυτότητας. Οι καταγραφές σφαλμάτων ενδέχεται να έχουν περισσότερες πληροφορίες.';
$string['errorauthnocreds'] = 'Παρακαλούμε, διαμορφώστε τα διαπιστευτήρια πελάτη Σύνδεσης OpenID.';
$string['errorauthnoendpoints'] = 'Παρακαλούμε, διαμορφώστε τα τελικά σημεία του εξυπηρετητή Σύνδεσης OpenID.';
$string['errorauthnohttpclient'] = 'Παρακαλούμε, ορίστε ένα πρόγραμμα-πελάτη HTTP.';
$string['errorauthnoidtoken'] = 'Το id_token (αναγνωριστικό κουπόνι) της Σύνδεσης OpenID δεν ελήφθη.';
$string['errorauthunknownstate'] = 'Άγνωστη κατάσταση.';
$string['errorauthuseralreadyconnected'] = 'Είστε ήδη συνδεδεμένος/-η με ένα διαφορετικό χρήστη OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'Ο χρήστης OpenID Connect που αυθεντικοποιήθηκε είναι ήδη συνδεδεμένος σε ένα χρήστη του Moodle.';
$string['errorbadloginflow'] = 'Έχει καθοριστεί τύπος μη έγκυρη αυθεντικοποίηση. ΣΗΜΕΙΩΣΗ: Εάν λαμβάνετε αυτό το μήνυμα μετά από μια πρόσφατη εγκατάσταση ή αναβάθμιση, παρακαλώ εκκαθαρίστε την κρυφή μνήμη του Moodle.';
$string['errorinvalidredirect_message'] = 'Η διεύθυνση URL στην οποία προσπαθείτε να ανακατευθύνετε δεν υπάρχει.';
$string['errorjwtcouldnotreadheader'] = 'Αδυναμία ανάγνωσης κεφαλίδας JWT';
$string['errorjwtinvalidheader'] = 'Μη έγκυρη κεφαλίδα JWT';
$string['errorjwtmalformed'] = 'Λήφθηκε JWT με μη ορθή μορφή.';
$string['erroroidccall'] = 'Σφάλμα στη Σύνδεση OpenID. Ελέγξτε τις καταγραφές για περισσότερες πληροφορίες.';
$string['erroroidccall_message'] = 'Σφάλμα στο OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Το τελικό σημείο του κουπονιού πρέπει να χρησιμοποιεί SSL/TLS για αυτό.';
$string['erroroidcclientinvalidendpoint'] = 'Λήφθηκε μη έγκυρη διεύθυνση URI τελικού σημείου.';
$string['erroroidcclientnoauthendpoint'] = 'Δεν έχει οριστεί τελικό σημείο εξουσιοδότησης. Παρακαλούμε, ορίστε με $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Παρακαλούμε, ορίστε διαπιστευτήρια πελάτη με setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Δεν έχει οριστεί τελικό σημείο κουπονιού. Παρακαλούμε, ορίστε με $this->setendpoints';
$string['erroroidcnotenabled'] = 'Το πρόσθετο αυθεντικοποίησης OpenID Connect δεν είναι ενεργοποιημένο.';
$string['errorrestricted'] = 'Αυτός ο ιστότοπος έχει περιορισμούς στους χρήστες που μπορούν να συνδεθούν με την Σύνδεση OpenID. Αυτοί οι περιορισμοί δεν σας επιτρέπουν να ολοκληρώσετε αυτήν την προσπάθεια σύνδεσης.';
$string['errorucpinvalidaction'] = 'Απόπειρα μη έγκυρης ενέργειας.';
$string['event_debug'] = 'Μήνυμα αποσφαλμάτωσης';
$string['eventuserauthed'] = 'Εξουσιοδοτημένος χρήστης με Σύνδεση OpenID';
$string['eventuserconnected'] = 'Ο χρήστης συνδέθηκε στην Σύνδεση OpenID';
$string['eventusercreated'] = 'Ο χρήστης έχει δημιουργηθεί με Σύνδεση OpenID';
$string['eventuserdisconnected'] = 'Ο χρήστης αποσυνδέθηκε από την Σύνδεση OpenID';
$string['eventuserloggedin'] = 'Ο χρήστης έχει συνδεθεί με Σύνδεση OpenID';
$string['oidc:manageconnection'] = 'Επιτρέπεται Σύνδεση & Αποσύνδεση OpenID';
$string['oidc:manageconnectionconnect'] = 'Επιτρέπεται OpenID Connection';
$string['oidc:manageconnectiondisconnect'] = 'Επιτρέπεται Αποσύνδεση OpenID';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Αυθεντικοποίηση Σύνδεσης OpenID';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Προηγούμενες μέθοδοι σύνδεσης για αναίρεση συνδέσεων του Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Η προηγούμενη μέθοδος σύνδεσης';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Το προηγούμενο (κρυπτογραφημένο) πεδίο κωδικού πρόσβασης χρήστη.';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'Το αναγνωριστικό του χρήστη Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Κουπόνια OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Ο κώδικας αυθεντικοποίησης για το κουπόνι';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Η λήξη του κουπονιού';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'Το κουπόνι αναγνωριστικού';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Το μοναδικό αναγνωριστικό χρήστη OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Το όνομα χρήστη του χρήστη OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Το κουπόνι ανανέωσης';
$string['privacy:metadata:auth_oidc_token:scope'] = 'Το πεδίο εφαρμογής του κουπονιού';
$string['privacy:metadata:auth_oidc_token:token'] = 'Το κουπόνι';
$string['privacy:metadata:auth_oidc_token:userid'] = 'Το αναγνωριστικό χρήστη του χρήστη Moodle';
$string['privacy:metadata:auth_oidc_token:username'] = 'Το όνομα χρήστη του χρήστη Moodle';
$string['ucp_disconnect_details'] = 'Αυτό θα αποσυνδέσει τον λογαριασμό σας στο Moodle από {$a}. Θα χρειαστεί να δημιουργήσετε ένα όνομα χρήστη και ένα κωδικό πρόσβασης για να συνδεθείτε στο Moodle.';
$string['ucp_disconnect_title'] = 'Αποσύνδεση {$a}';
$string['ucp_login_start'] = 'Ξεκινήστε την χρήση του {$a} για σύνδεση με το Moodle';
$string['ucp_login_status'] = 'Το όνομα σύνδεσης του {$a} είναι:';
$string['ucp_login_stop'] = 'Σταματήστε την χρήση του {$a} για σύνδεση με το Moodle';
$string['ucp_status_disabled'] = 'Απενεργοποιημένο';
$string['ucp_status_enabled'] = 'Ενεργοποιημένο';
$string['ucp_title'] = 'Διαχείριση {$a}';
