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
 * Strings for component 'auth_ldap', language 'el', version '4.1'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Δεν είναι δυνατή η δημιουργία του νέου λογαριασμού στο Active Directory. Σιγουρευτείτε ότι πληρούνται όλες οι απαιτήσεις για να λειτουργήσει αυτό (σύνδεση LDAP, χρήστης δέσμευσης (bind-user) με κατάλληλα δικαιώματα, κλπ.)';
$string['auth_ldap_attrcreators'] = 'Κατάλογος ομάδων ή πλαισίων στα μέλη των οποίων επιτρέπεται να δημιουργούν ιδιοχαρακτηριστικά. Διαχωρίστε περισσότερες από μία ομάδες με «;». Συνήθως κάτι σαν «cn=teachers,ou=staff,o=myorg».';
$string['auth_ldap_attrcreators_key'] = 'Δημιουργοί ιδιοχαρακτηριστικών';
$string['auth_ldap_auth_user_create_key'] = 'Δημιουργία χρηστών εξωτερικά';
$string['auth_ldap_bind_dn'] = 'Εάν θέλετε να χρησιμοποιήσετε τον χρήστη δέσμευσης (bind-user) για να αναζητήσετε χρήστες, καθορίστε το εδώ. Κάτι σαν «cn=ldapuser,ou=public,o=org».';
$string['auth_ldap_bind_dn_key'] = 'Διακεκριμένο όνομα';
$string['auth_ldap_bind_pw'] = 'Κωδικός πρόσβασης για τον χρήστη δέσμευσης (bind-user).';
$string['auth_ldap_bind_pw_key'] = 'Κωδικός πρόσβασης';
$string['auth_ldap_bind_settings'] = 'Ρυθμίσεις δέσμευσης';
$string['auth_ldap_changepasswordurl_key'] = 'Διεύθυνση URL αλλαγής κωδικού πρόσβασης';
$string['auth_ldap_contexts'] = 'Λίστα πλαισίων όπου οι χρήστες είναι τοποθετημένοι. Χωρίστε διαφορετικά πλαίσια με «;». Για παράδειγμα: «ou=users,o=org; ou=others,o=org».';
$string['auth_ldap_contexts_key'] = 'Πλαίσια';
$string['auth_ldap_create_context'] = 'Αν ενεργοποιήσετε τη δημιουργία χρηστών με επιβεβαίωση μέσω ηλε.ταχυδρομείου τότε καθορίστε το πλαίσιο στο οποίο θα δημιουργηθούν οι χρήστες. Αυτό θα πρέπει να είναι διαφορετικό από ότι άλλων χρηστών για να αποφευχθούν προβλήματα ασφαλείας. Δεν χρειάζεται να προσθέσετε αυτή την τιμή στη μεταβλητή ldap_context, το Moodle θα αναζητήσει χρήστες αυτού του πλαισίου αυτόματα.<br /><b>Σημείωση!</b> Πρέπει να τροποποιήσετε την μέθοδο user_create() στο αρχείο auth/ldap/auth.php ώστε να λειτουργήσει η δημιουργία χρηστών.';
$string['auth_ldap_create_context_key'] = 'Πλαίσιο για νέους χρήστες';
$string['auth_ldap_create_error'] = 'Σφάλμα στη δημιουργία χρήστη στο LDAP.';
$string['auth_ldap_expiration_desc'] = 'Επιλέξτε «{$a->no}» για να απενεργοποιήσετε τον έλεγχο ληγμένου κωδικού ή «{$a->ldapserver}» για να διαβάζετε την λήξη του κωδικού απευθείας από τον εξυπηρετητή LDAP.';
$string['auth_ldap_expiration_key'] = 'Λήξη';
$string['auth_ldap_expiration_warning_desc'] = 'Αριθμός ημερών πριν εμφανιστεί προειδοποίηση λήξης του κωδικού πρόσβασης.';
$string['auth_ldap_expiration_warning_key'] = 'Προειδοποίηση λήξης';
$string['auth_ldap_expireattr_desc'] = 'Προαιρετικό: Παρακάμπτει την τιμή του ιδιοχαρακτηριστικού του LDAP η οποία αποθηκεύει τον χρόνο λήξης κωδικού πρόσβασης.';
$string['auth_ldap_expireattr_key'] = 'Τιμή του ιδιοχαρακτηριστικού expiry (λήξη)';
$string['auth_ldap_graceattr_desc'] = 'Προαιρετικό: Παρακάμπτει την τιμή του ιδιοχαρακτηριστικού grace login (συνδέσεις χάριτος μετά τη λήξη)';
$string['auth_ldap_gracelogin_key'] = 'Τιμή του ιδιοχαρακτηριστικού grace login (συνδέσεις χάριτος μετά τη λήξη)';
$string['auth_ldap_gracelogins_desc'] = 'Ενεργοποίηση της υποστήριξης grace login (συνδέσεις χάριτος μετά τη λήξη) του LDAP. Αφού λήξει ο κωδικός πρόσβασης ο χρήστης μπορεί να συνδεθεί μέχρι το grace login να φθάσει το 0. Ενεργοποιώντας αυτή τη ρύθμιση θα εμφανίζεται ένα μήνυμα grace login εάν ο κωδικός πρόσβασης έχει λήξει.';
$string['auth_ldap_gracelogins_key'] = 'Grace logins (συνδέσεις χάριτος μετά τη λήξη)';
$string['auth_ldap_groupecreators'] = 'Κατάλογος ομάδων ή πλαισίων στα μέλη των οποίων επιτρέπεται να δημιουργούν ομάδες. Διαχωρίστε περισσότερες από μία ομάδες με «;». Συνήθως κάτι σαν «cn=teachers,ou=staff,o=myorg».';
$string['auth_ldap_groupecreators_key'] = 'Δημιουργοί ομάδων';
$string['auth_ldap_host_url'] = 'Καθορίστε τον εξυπηρετητή LDAP σε μορφή διεύθυνσης URL όπως «ldap://ldap.myorg.com/» ή «ldaps://ldap.myorg.com/». Διαχωρίστε περισσότερους από έναν εξυπηρετητές με «;» (ως εναλλακτικές) για υποστήριξη (σε περίπτωση) αποτυχίας.';
$string['auth_ldap_host_url_key'] = 'Διεύθυνση URL του Η/Υ που φιλοξενεί τον εξυπηρετητή LDAP';
$string['auth_ldap_ldap_encoding'] = 'Καθορίστε την κωδικοποίηση που θα χρησιμοποιείται από τον εξυπηρετητή LDAP· πιθανότατα utf-8. Αν είναι επιλεγμένο το LDAP v2, τότε το Active Directory χρησιμοποιεί την δική του ρύθμιση κωδικοποίησης, π.χ. cp1252 ή cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Κωδικοποίηση LDAP';
$string['auth_ldap_login_settings'] = 'Ρυθμίσεις σύνδεσης';
$string['auth_ldap_memberattribute'] = 'Προαιρετικό: Παράκαμψη του χαρακτηριστικού member (μέλος) χρήστη, όταν οι χρήστες ανήκουν σε μια ομάδα. Συνήθως «member» (μέλος)';
$string['auth_ldap_memberattribute_isdn'] = 'Παρακάμπτει τη διαχείριση των τιμών του χαρακτηριστικού member (μέλος)';
$string['auth_ldap_memberattribute_isdn_key'] = 'Το χαρακτηριστικό member ((μέλος)) χρησιμοποιεί το dn ((distinguished name, διακεκριμένο όνομα))';
$string['auth_ldap_memberattribute_key'] = 'Χαρακτηριστικό member ((μέλος))';
$string['auth_ldap_no_mbstring'] = 'Χρειάζεστε την επέκταση mbstring για να δημιουργήσετε χρήστες στο Active Directory.';
$string['auth_ldap_noconnect'] = 'Το άρθρωμα LDAP δεν μπορεί να συνδεθεί με τον εξυπηρετητή: {$a}';
$string['auth_ldap_noconnect_all'] = 'Το άρθρωμα LDAP δεν μπορεί να συνδεθεί με κανέναν εξυπηρετητή: {$a}';
$string['auth_ldap_noextension'] = '<em>Το άρθρωμα LDAP της PHP δεν φαίνεται να είναι  ********** υπάρχει. Παρακαλούμε επιβεβαιώστε ότι είναι εγκατεστημένο και ενεργοποιημένο αν θέλετε να χρησιμοποιήσετε αυτό το πρόσθετο αυθεντικοποίησης.</em>';
$string['auth_ldap_objectclass'] = 'Προαιρετικό: Παρακάμπτει το objectClass που χρησιμοποιείται για την ονομασία/αναζήτηση χρηστών στο ldap_user_type. Συνήθως δεν χρειάζεται να το αλλάξετε.';
$string['auth_ldap_objectclass_key'] = 'Κλάση αντικειμένου';
$string['auth_ldap_opt_deref'] = 'Καθορίζει πως γίνεται χειρισμός των aliases (ψευδώνυμα) κατά την αναζήτηση. Επιλέξτε μία από τις παρακάτω τιμές: «Όχι» (LDAP_DEREF_NEVER) ή «Ναι» (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Αποσύνδεση ψευδωνύμων';
$string['auth_ldap_passtype'] = 'Προσδιορίστε το μορφότυπο των νέων ή αλλαγμένων κωδικών πρόσβασης στον εξυπηρετητή LDAP.';
$string['auth_ldap_passtype_key'] = 'Μορφότυπος κωδικού πρόσβασης';
$string['auth_ldap_passwdexpire_settings'] = 'Ρυθμίσεις λήξης κωδικού πρόσβασης LDAP';
$string['auth_ldap_preventpassindb'] = 'Επιλέξτε ναι για να αποτρέψετε την αποθήκευση κωδικών πρόσβασης στην βάση δεδομένων του Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Αποτροπή αποθήκευσης κωδικού πρόσβασης σε κρυφή μνήμη';
$string['auth_ldap_rolecontext'] = 'Πλαίσιο «{$a->localname}»';
$string['auth_ldap_rolecontext_help'] = 'Το πλαίσιο LDAP που χρησιμοποιείται για την επιλογή αντιστοίχισης του <i>{$a->localname}</i>. Διαχωρίστε πολλαπλές ομάδες με «;». Συνήθως κάτι σαν «cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Αναζητήστε χρήστες από τα υπο-πλαίσια.';
$string['auth_ldap_search_sub_key'] = 'Αναζήτηση σε υπο-πλαίσια';
$string['auth_ldap_server_settings'] = 'Ρυθμίσεις εξυπηρετητή LDAP';
$string['auth_ldap_suspended_attribute'] = 'Προαιρετικό: Όταν παρέχεται αυτό το χαρακτηριστικό θα χρησιμοποιηθεί για την ενεργοποίηση / αναστολή του τοπικά δημιουργημένου λογαριασμού χρήστη.';
$string['auth_ldap_suspended_attribute_key'] = 'Χαρακτηριστικό αναστολής';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() δεν υποστηρίζει τον επιλεγμένο τύπο χρήστη: {$a} (...ακόμα)';
$string['auth_ldap_update_userinfo'] = 'Ενημερώστε τις πληροφορίες χρήστη (όνομα, επώνυμο, διεύθυνση...) από το LDAP στο Moodle. Προσδιορίστε ρυθμίσεις για «Αντιστοίχιση πεδίων» αν χρειάζεται.';
$string['auth_ldap_user_attribute'] = 'Το χαρακτηριστικό που χρησιμοποιείται για την ονομασία/αναζήτηση χρηστών. Συνήθως «cn».';
$string['auth_ldap_user_attribute_key'] = 'Χαρακτηριστικό χρήστη';
$string['auth_ldap_user_exists'] = 'Το όνομα χρήση υπάρχει ήδη στο LDAP.';
$string['auth_ldap_user_settings'] = 'Ρυθμίσεις αναζήτησης χρηστών';
$string['auth_ldap_user_type'] = 'Επιλέξτε πως θα αποθηκεύονται οι χρήστες στον LDAP. Αυτή η ρύθμιση καθορίζει επίσης την λειτουργία της λήξης της σύνδεσης, των συνδέσεων χάριτος μετά τη λήξη και της δημιουργίας χρηστών.';
$string['auth_ldap_user_type_key'] = 'Τύπος χρήστη';
$string['auth_ldap_usertypeundefined'] = 'Ο τύπος config.user_type δεν έχει οριστεί ή η συνάρτηση ldap_expirationtime2unix δεν υποστηρίζει τον επιλεγμένο τύπο!';
$string['auth_ldap_usertypeundefined2'] = 'Ο τύπος config.user_type δεν έχει οριστεί ή η συνάρτηση ldap_unixi2expirationtime δεν υποστηρίζει τον επιλεγμένο τύπο!';
$string['auth_ldap_version'] = 'Η έκδοση του πρωτοκόλλου LDAP που χρησιμοποιεί ο εξυπηρετητής σας.';
$string['auth_ldap_version_key'] = 'Έκδοση';
$string['auth_ldapdescription'] = 'Αυτή η μέθοδος παρέχει αυθεντικοποίηση μέσω (έναντι) ενός εξωτερικού εξυπηρετητή LDAP (Lightweight Directory Access Protocol). Εάν το όνομα χρήστη και ο κωδικός πρόσβασης που δίνονται, ισχύουν, το Moodle δημιουργεί μια νέα καταχώρηση χρήστη στη βάση δεδομένων του. Αυτό το πρόσθετο μπορεί να διαβάσει τα ιδιοχαρακτηριστικά χρηστών από το LDAP και να συμπληρώσει εκ των προτέρων τα ζητούμενα πεδία στο Moodle. Για τις συνδέσεις στο εξής, ελέγχονται μόνο το όνομα χρήστη και ο κωδικός πρόσβασης.';
$string['auth_ldapextrafields'] = 'Αυτά τα πεδία είναι προαιρετικά. Υπάρχει η επιλογή να προ-συμπληρώσετε μερικά πεδία χρηστών του Moodle χρησιμοποιώντας πληροφορίες από τα <b>LDAP πεδία</b> που θα ορίσετε εδώ.
<p>Εάν αφήσετε αυτά τα πεδία κενά, τότε τίποτα δεν θα αποσταλεί από το LDAP (Lightweight Directory Access Protocol: Υπηρεσίες καταλόγου) και θα χρησιμοποιηθούν οι προεπιλογές του Moodle.</p>
<p>Σε κάθε περίπτωση, ο χρήστης θα μπορεί να παρέμβει σε όλα αυτά τα πεδία μετά την σύνδεση.</p>';
$string['auth_ldapnotinstalled'] = 'Δεν είναι δυνατή η χρήση της αυθεντικοποίησης LDAP. Το άρθρωμα LDAP της PHP δεν είναι εγκατεστημένο.';
$string['auth_ntlmsso'] = 'NTLM ενιαία αυθεντικοποίηση SSO (NTLM =NT LAN Manager: διαχειριστής τοπικού δικτύου των Microsoft NT) (SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση)';
$string['auth_ntlmsso_enabled'] = 'Ορίστε το σε «ναι» για προσπάθεια ενιαίας αυθεντικοποίησης SSO (Single Sign On: μία και μόνον ενιαία αυθεντικοποίηση) στον τομέα NTLM (NT LAN Manager: Πρωτόκολλα ασφαλείας της Microsoft). Σημειώστε ότι αυτό απαιτεί επιπρόσθετες ρυθμίσεις στον εξυπηρετητή για να λειτουργήσει. Για περισσότερες λεπτομέρειες, δείτε <a href="https://docs.moodle.org/en/NTLM_authentication">https://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Ενεργοποίηση';
$string['auth_ntlmsso_ie_fastpath'] = 'Επιλέξτε το για να ενεργοποιήσετε το γρήγορο μονοπάτι της NTLM ενιαίας αυθεντικοποίησης SSO (παρακάμπτει ορισμένα βήματα μόνο στον περιηγητή MS Internet Explorer). (NTLM =NT LAN Manager: διαχειριστής τοπικού δικτύου των Microsoft NT) (SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση)';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Δοκιμάστε το NTLM σε όλους τους περιηγητές';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Γρήγορο μονοπάτι MS IE (Microsoft Internet Explorer);';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Ναι, δοκιμή του NTLM σε άλλους περιηγητές';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Ναι, όλοι οι άλλοι περιηγητές χρησιμοποιούν τυποποιημένη φόρμα σύνδεσης/εισόδου';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Δεν είναι δυνατή η εξαγωγή του ονόματος χρήστη από την κεφαλίδα REMOTE_USER. Ορίστηκε σωστά ο μορφότυπος;';
$string['auth_ntlmsso_missing_username'] = 'Πρέπει να καθορίσετε τουλάχιστον το %username% στο μορφότυπο του απομακρυσμένου ονόματος χρήστη.';
$string['auth_ntlmsso_remoteuserformat'] = 'Αν έχετε επιλέξει «NTLM» ως «Τύπο αυθεντικοποίησης», μπορείτε να καθορίσετε τον μορφότυπο του ονόματος απομακρυσμένου χρήστη. Αν το αφήσετε κενό, θα χρησιμοποιηθεί ο προεπιλεγμένος μορφότυπος DOMAIN\\uservame. Μπορείτε να χρησιμοποιήσετε το προαιρετικό δεσμευτικό θέσης<b>%domain%</b> για να προσδιορίσετε που θα εμφανίζεται το όνομα τομέα και το υποχρεωτικό δεσμευτικό θέσης <b>%username%</b> για να προσδιορίσετε που θα εμφανίζεται το όνομα χρήστη. <br /><br /> Μερικοί ευρέως χρησιμοποιούμενοι μορφότυποι είναι <tt>%domain%\\%username%</tt> (προεπιλογή των MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> και μόνο <tt>%username%</tt> (αν δεν υπάρχει καθόλου τομέας).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Μορφότυπος απομακρυσμένου ονόματος χρήστη';
$string['auth_ntlmsso_subnet'] = 'Αν οριστεί, θα επιτρέπει ενιαία αυθεντικοποίηση SSO (Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση) μόνο με πελάτες στο ίδιο υποδίκτυο. Μορφότυπος IP: xxx.xxx.xxx.xxx/bitmask. Διαχωρίστε πολλαπλά υποδίκτυα με «,» (κόμμα).';
$string['auth_ntlmsso_subnet_key'] = 'Υποδίκτυο';
$string['auth_ntlmsso_type'] = 'Η μέθοδος αυθεντικοποίησης που ορίστηκε στις ρυθμίσεις του εξυπηρετητή ιστού για να αυθεντικοποιεί τους χρήστες (αν υπάρχει αμφιβολία, επιλέξτε NTLM)';
$string['auth_ntlmsso_type_key'] = 'Τύπος αυθεντικοποίησης';
$string['cannotmaprole'] = 'Ο ρόλος «{$a->rolename}» δεν μπορεί να αντιστοιχηθεί επειδή το σύντομο όνομά του «{$a->shortname}» είναι υπερβολικά μεγάλο και/ή περιέχει παύλες. Για να μπορέσει να αντιστοιχηθεί, το σύντομο όνομα πρέπει να μειωθεί σε μέγιστο αριθμό χαρακτήρων {$a->charlimit} και τυχόν παύλες να καταργηθούν. <a href="{$a->link}">Επεξεργαστείτε το ρόλο</a>';
$string['connectingldap'] = 'Σύνδεση με τον εξυπηρετητή LDAP...';
$string['connectingldapsuccess'] = 'Η σύνδεση με τον εξυπηρετητή LDAP ήταν επιτυχής';
$string['creatingtemptable'] = 'Δημιουργία προσωρινού πίνακα «{$a}»';
$string['diag_contextnotfound'] = 'Το πλαίσιο {$a} δεν υπάρχει ή δεν μπορεί να διαβαστεί κατά την δέσμευση DN.';
$string['diag_emptycontext'] = 'Εντοπίστηκε κενό πλαίσιο.';
$string['diag_genericerror'] = 'Σφάλμα LDAP {$a->code} στην ανάγνωση {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Η ομάδα {$a->group} για το ρόλο {$a->localname} δεν υπάρχει ή δεν μπορεί να διαβαστεί κατά την δέσμευση DN.';
$string['diag_toooldversion'] = 'Είναι πολύ απίθανο ένας σύγχρονος εξυπηρετητής LDAP να χρησιμοποιεί πρωτόκολλο LDAPv2. Οι λανθασμένες ρυθμίσεις ενδέχεται να καταστρέψουν τιμές στα πεδία χρηστών. Ελέγξτε το με τον διαχειριστή του LDAP σας.';
$string['didntfindexpiretime'] = 'Η password_expire() (λήξη κωδικού πρόσβασης) δεν βρήκε χρόνο λήξης.';
$string['didntgetusersfromldap'] = 'Δεν επιστράφηκε κανένας χρήστης από το LDAP -- σφάλμα; -- έξοδος...';
$string['gotcountrecordsfromldap'] = 'Λήφθηκαν {$a} εγγραφές από το LDAP';
$string['invalidusererrors'] = 'Προειδοποίηση: Παραλείφθηκε η δημιουργία {$a} λογαριασμών χρηστών.';
$string['invaliduserexception'] = 'Σφάλμα: Αδυναμία δημιουργίας  νέου λογαριασμού χρήστη. Λεπτομέρειες και αιτία:
{$a}
Παράλειψη του χρήστη.';
$string['ldapnotconfigured'] = 'Η διεύθυνση URL του εξυπηρετητή LDAP δεν είναι ρυθμισμένη';
$string['morethanoneuser'] = 'Περισσότερες από μία εγγραφές χρήστη βρέθηκαν στο LDAP. Θα χρησιμοποιηθεί μόνο η πρώτη.';
$string['needbcmath'] = 'Χρειάζεται η επέκταση BCMath για να χρησιμοποιηθεί ο έλεγχος ληγμένων κωδικών πρόσβασης με το Active Directory.';
$string['needmbstring'] = 'Χρειάζεται η επέκταση mbstring για αλλαγή κωδικού πρόσβασης στο Active Directory';
$string['nodnforusername'] = 'Σφάλμα στην user_update_password(). Λείπει το DN για τον/την: «{$a->username}»';
$string['noemail'] = 'Έγινε προσπάθεια να σου σταλεί ένα μήνυμα ηλε.ταχυδρομείου αλλά απέτυχε!';
$string['notcalledfromserver'] = 'Δεν πρέπει να καλείται από τον εξυπηρετητή ιστού!';
$string['noupdatestobedone'] = 'Δεν υπάρχουν ενημερώσεις';
$string['nouserentriestoremove'] = 'Δεν υπάρχουν καταχωρήσεις χρήστη για να διαγραφούν';
$string['nouserentriestorevive'] = 'Δεν υπάρχουν καταχωρήσεις χρηστών προς αναβίωση';
$string['nouserstobeadded'] = 'Δεν υπάρχουν καταχωρήσεις χρηστών για να προστεθούν';
$string['ntlmsso_attempting'] = 'Προσπάθεια για Single Sign On μέσω NTLM...';
$string['ntlmsso_failed'] = 'Αποτυχία αυτόματης σύνδεσης, παρακαλούμε δοκιμάστε την κανονική σελίδα σύνδεσης...';
$string['ntlmsso_isdisabled'] = 'Απενεργοποίηση της NTLM ενιαίας αυθεντικοποίησης SSO (NTLM =NT LAN Manager: διαχειριστής τοπικού δικτύου των Microsoft NT) (SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση).';
$string['ntlmsso_unknowntype'] = 'Άγνωστος τύπος NTLM ενιαίας αυθεντικοποίησης SSO (NTLM =NT LAN Manager: διαχειριστής τοπικού δικτύου των Microsoft NT) (SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση).';
$string['pagedresultsnotsupp'] = 'Δεν υποστηρίζονται τα σελιδοποιημένα αποτελέσματα LDAP (είτε η έκδοση PHP δεν τα υποστηρίζει, είτε έχετε ρυθμίσει το Moodle να χρησιμοποιεί το πρωτόκολλο LDAP έκδοσης 2, ή το Moodle δεν μπορεί να επικοινωνήσει με τον LDAP εξυπηρετητή σας για να δει αν είναι διαθέσιμη η υποστήριξη σελιδοποίησης.';
$string['pagesize'] = 'Επιβεβαιώστε ότι αυτή η τιμή είναι μικρότερη από το όριο πλήθους αποτελεσμάτων του LDAP εξυπηρετητή σας (μέγιστος αριθμός καταχωρήσεων που μπορούν να επιστραφούν σε ένα ερώτημα)';
$string['pagesize_key'] = 'Μέγεθος σελίδας';
$string['pluginname'] = 'Εξυπηρετητής LDAP';
$string['pluginnotenabled'] = 'Πρόσθετο μη ενεργοποιημένο!';
$string['privacy:metadata'] = 'Το πρόσθετο «Αυθεντικοποίηση LDAP» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['renamingnotallowed'] = 'Η μετονομασία χρήστη δεν επιτρέπεται στο LDAP';
$string['rootdseerror'] = 'Σφάλμα κατά την αναζήτηση στο rootDSE για την υπηρεσία καταλόγου Active Directory';
$string['start_tls'] = 'Χρησιμοποιήστε την κανονική υπηρεσία LDAP (θύρα 389) με κρυπτογράφηση TLS';
$string['start_tls_key'] = 'Χρήση TLS';
$string['syncroles'] = 'Συγχρονισμός ρόλων συστήματος από το LDAP';
$string['synctask'] = 'Εργασία συγχρονισμού χρηστών LDAP';
$string['systemrolemapping'] = 'Αντιστοίχιση ρόλου συστήματος';
$string['updatepasserror'] = 'Σφάλμα στο user_update_password(). Κωδικός σφάλματος: {$a->errno}. Μήνυμα σφάλματος: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Σφάλμα στο user_update_password() κατά την ανάγνωση του χρόνου λήξης του κωδικού πρόσβασης. Κωδικός σφάλματος: {$a->errno}. Μήνυμα σφάλματος: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Σφάλμα στην (διαδικασία) user_update_password() κατά την τροποποίηση του χρόνου λήξης και/ή των συνδέσεων χάριτος μετά τη λήξη. Κωδικός σφάλματος: {$a->errno}. Μήνυμα σφάλματος: {$a->errstring}';
$string['updateremfail'] = 'Σφάλμα κατά την ενημέρωση της εγγραφής LDAP. Κωδικός σφάλματος: {$a->errno}. Μήνυμα σφάλματος: {$a->errstring}<br/>Πλήκτρο ({$a->key}) - παλιά τιμή moodle: «{$a->ouvalue}» νέα τιμή: «{$a->nuvalue}».';
$string['updateremfailamb'] = 'Αποτυχία ενημέρωσης LDAP με διφορούμενο πεδίο {$a->key}. Παλιά τιμή moodle: «{$a->ouvalue}», νέα τιμή: «{$a->nuvalue}».';
$string['updateusernotfound'] = 'Δεν ήταν δυνατή η εύρεση χρήστη κατά την ενημέρωση εξωτερικά. Λεπτομέρειες/στοιχεία σφάλματος: βάση αναζήτησης: «{$a->userdn}»; φίλτρο αναζήτησης: «(objectClass = *)»; χαρακτηριστικά αναζήτησης: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() δεν υποστηρίζει τον επιλεγμένο τύπο χρήστη: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() δεν υποστηρίζει τον επιλεγμένο τύπο χρήστη: {$a}';
$string['useracctctrlerror'] = 'Σφάλμα κατά τη λήψη του userAccountControl (έλεγχος λογαριασμών χρηστών) για {$a}';
$string['userentriestoadd'] = 'Καταχωρήσεις χρηστών για προσθήκη: {$a}';
$string['userentriestoremove'] = 'Καταχωρήσεις χρήστη προς διαγραφή: {$a}';
$string['userentriestorevive'] = 'Καταχωρήσεις χρηστών για αναβίωση: {$a}';
$string['userentriestoupdate'] = 'Καταχωρήσεις χρηστών για ενημέρωση: {$a}';
$string['usernotfound'] = 'Αδυναμία εύρεσης χρήστη στο LDAP';
