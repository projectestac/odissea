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
 * Strings for component 'auth', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Διαθέσιμα πρόσθετα αυθεντικοποίησης';
$string['allowaccountssameemail'] = 'Επιτρέπονται λογαριασμοί με την ίδια ηλεκτρονική διεύθυνση.';
$string['allowaccountssameemail_desc'] = 'Αν ενεργοποιηθεί, τότε πολλοί χρήστες θα έχουν την ίδια ηλεκτρονική διεύθυνση. Αυτό μπορεί να οδηγήσει σε προβλήματα ασφάλειας ή ιδιωτικότητας, όπως για παράδειγμα, σε περίπτωση αλλαγής του κωδικού πρόσβασης.';
$string['alternatelogin'] = 'Εάν εισάγετε μια URL διεύθυνση εδώ, θα χρησιμοποιηθεί ως σελίδα σύνδεσης για τον ιστότοπό σας. Η σελίδα πρέπει να περιέχει μια φόρμα, η οποία θα εχει την ιδιότητα action ορισμένη σε <strong>\'{$a}\'</strong> και θα επιστρέφει τα πεδία <strong>username (όνομα χρήστη)</strong> και <strong>password (κωδικός πρόσβασης)</strong>.<br />
Προσέξτε να μην εισάγετε λανθασμένη URL διεύθυνση διότι μπορεί να κλειδώσετε τον εαυτό σας έξω από αυτό τον ιστότοπο.<br />
Αφήστε τη ρύθμιση αυτή κενή για να χρησιμοποιηθεί η προεπιλεγμένη σελίδα σύνδεσης.';
$string['alternateloginurl'] = 'Εναλλακτική URL διεύθυνση σελίδας σύνδεσης';
$string['auth_changepasswordhelp'] = 'Βοήθεια αλλαγής κωδικού πρόσβασης';
$string['auth_changepasswordhelp_expl'] = 'Εμφάνιση της βοήθειας απολεσθέντος κωδικού πρόσβασης στους χρήστες που έχασαν τον {$a} κωδικό τους. Αυτό θα εμφανιστεί μαζί με ή αντί του <strong>URL διεύθυνση αλλαγής κωδικού πρόσβασης</strong> ή αλλαγή κωδικού πρόσβασης εσωτερικά του Moodle.';
$string['auth_changepasswordurl'] = 'URL διεύθυνση αλλαγής κωδικού πρόσβασης';
$string['auth_changepasswordurl_expl'] = 'Προσδιορίστε την URL διεύθυνση που θα αποστέλλεται στους χρήστες που έχουν χάσει τον  {$a} κωδικό πρόσβασής τους. Ορίστε την επιλογή <strong>Χρήση της κανονικής σελίδας αλλαγής κωδικού πρόσβασης</strong> σε <strong>Όχι</strong>.';
$string['auth_changingemailaddress'] = 'Έχετε ζητήσει μια αλλαγή της διεύθυνσης ηλεκτρονικού ταχυδρομείου, από {$a->oldemail} στο {$a->newemail}. Για λόγους ασφαλείας, σας στέλνουμε ένα μήνυμα ηλεκτρονικού ταχυδρομείου στη νέα διεύθυνση για να επιβεβαιώσετε ότι ανήκει σε εσάς. Η διεύθυνση του ηλεκτρονικού ταχυδρομείου σας θα ενημερωθεί αμέσως μόλις ανοίξετε το σύνδεσμο που σας έχει αποσταλεί σε αυτό το μήνυμα.';
$string['auth_common_settings'] = 'Κοινές ρυθμίσεις';
$string['auth_data_mapping'] = 'Αντιστοίχιση πεδίων δεδομένων';
$string['authenticationoptions'] = 'Επιλογές αυθεντικοποίησης';
$string['auth_fieldlock'] = 'Κλείδωμα τιμής';
$string['auth_fieldlock_expl'] = '<p><b>Κλείδωμα τιμής:</b> Εάν ενεργοποιηθεί, αποτρέπει χρήστες του Moodle και διαχειριστές να επεξεργαστούν το πεδίο άμεσα. Χρησιμοποιήστε την επιλογή αυτή εάν διατηρείτε τα δεδομένα σε εξωτερικό σύστημα αυθεντικοποίησης. </p>';
$string['auth_fieldlockfield'] = 'Κλείδωμα τιμής ({$a})';
$string['auth_fieldlocks'] = 'Κλείδωμα πεδίων χρήστη';
$string['auth_fieldlocks_help'] = '<p>Έχετε τη δυνατότητα να κλειδώσετε κάποια από τα πεδία χρηστών. Αυτό είναι χρήσιμο για ιστότοπους όπου τα πεδία αυτά συντηρούνται από τους διαχειριστές μη αυτόματα ή αυτόματα μέσω της λειτουργίας \'Εισαγωγή χρηστών\'. Εάν όμως κλειδώσετε πεδία που απαιτούνται από το Moodle, βεβαιωθείτε ότι παρέχεται τα δεδομένα αυτά κατά την δημιουργία των λογαριασμών ειδάλλως οι λογαριασμοί δεν θα μπορούν να χρησιμοποιηθούν.</p><p>Λάβετε υπόψιν και την ρύθμιση \'Ξεκλείδωσε αν κενό\' ώστε να αποφύγετε το πρόβλημα.</p>';
$string['auth_fieldmapping'] = 'Αντιστοίχιση πεδίων δεδομένων ({$a})';
$string['authinstructions'] = 'Αφήστε το κενό για να εμφανιστούν οι προεπιλεγμένες οδηγίες σύνδεσης στην σελίδα σύνδεσης. Αν θέλετε να παρέχετε προσαρμοσμένες οδηγίες, μπορείτε να τις εισάγετε εδώ.';
$string['auth_invalidnewemailkey'] = 'Σφάλμα: αν προσπαθείτε να επιβεβαιώσετε μια αλλαγή διεύθυνσης ηλ.ταχυδρομείου, μπορεί να κάνατε κάποιο λάθος στην αντιγραφή της URL διεύθυνσης που σας στείλαμε με ηλ.ταχυδρομείο. Παρακαλούμε, αντιγράψτε την διεύθυνση και προσπαθήστε ξανά.';
$string['authloginviaemail'] = 'Να επιτρέπεται σύνδεση μέσω ηλεκτρονικού ταχυδρομείου';
$string['authloginviaemail_desc'] = 'Επιτρέψτε στους χρήστες να χρησιμοποιούν εκτός από το όνομα χρήστη και την διεύθυνση ηλ.ταχυδρομείου (αν είναι μοναδική) για είσοδο στον ιστότοπο.';
$string['auth_multiplehosts'] = 'Περισσότεροι από έναν εξυπηρετητές μπορούν να προσδιοριστούν εδώ με DNS διευθύνσεις (ονόματα) ή IP διευθύνσεις (αριθμοί)  (π.χ. host1.com;auth.host2.com;local.host3.com) ή (π.χ.  209.15.10.226;19.125.10.26;192.168.1.1)';
$string['auth_notconfigured'] = 'Η μέθοδος αυθεντικοποίησης {$a} δεν έχει ρυθμιστεί.';
$string['auth_outofnewemailupdateattempts'] = 'Δεν έχετε άλλη προσπάθεια αλλαγής της διεύθυνσής σας ηλ.ταχυδρομείου. Το αίτημα σας ακυρώθηκε.';
$string['auth_passwordisexpired'] = 'Ο κωδικός πρόσβασής σας έχει λήξει. Παρακαλούμε, αλλάξτε τον τώρα.';
$string['auth_passwordwillexpire'] = 'Ο κωδικός πρόσβασής σας θα λήξει σε {$a} ημέρες. Θέλετε να αλλάξετε το συνθηματικό σας τώρα;';
$string['auth_remove_delete'] = 'Πλήρης διαγραφή χρήστη από την εσωτερική ΒΔ';
$string['auth_remove_keep'] = 'Διατήρηση χρήστη στην εσωτερική ΒΔ';
$string['auth_remove_suspend'] = 'Αναστολή χρήστη στην εσωτερική ΒΔ';
$string['auth_remove_user'] = 'Specify what to do with internal user account during mass synchronization when user was removed from external source. Only suspended users are automatically revived if they reappear in ext source.';
$string['auth_remove_user_key'] = 'Διαγραμμένος εξωτερικός χρήστης';
$string['auth_sync_script'] = 'Συγχρονισμός λογαριασμών χρηστών (μέσω μιας δέσμης ενεργειών της Cron)';
$string['auth_sync_suspended'] = 'Όταν είναι ενεργοποιημένη, το χαρακτηριστικό αναστολής θα χρησιμοποιηθεί για την ενημέρωση της κατάστασης αναστολής λογαριασμού τοπικού χρήστη.';
$string['auth_updatelocal'] = 'Τοπική ενημέρωση';
$string['auth_updatelocal_expl'] = '<p><b>Τοπική ενημέρωση:</b> Εάν ενεργοποιηθεί, το πεδίο θα ενημερώνεται (από εξωτερική πιστοποίηση) κάθε φορά που ο χρήστης εισέρχεται ή γίνεται συγχρονισμός χρηστών. Τα πεδία που ορίστηκαν να ενημερώνονται αυτόματα πρέπει να είναι κλειδωμένα.</p>';
$string['auth_updateremote'] = 'Ενημέρωσε εξωτερικά';
$string['auth_updateremote_expl'] = '<p><b>Ενημέρωσε εξωτερικά:</b> Εάν ενεργοποιηθεί, η εξωτερική πιστοποίηση θα ενημερώνεται κάθε φορά που η εγγραφή του χρήστη ενημερώνεται. Τα πεδία να είναι ξεκλείδωτα για να επιτρέπεται η επεξεργασία. </p>';
$string['auth_updateremote_ldap'] = '<p><b>Σημείωση:</b> Η ενημέρωση εξωτερικών LDAP δεδομένων απαιτεί να ορίσετε τα binddn και bindpw σε έναν bind-user με επιπλέον προνόμια σε όλες τις εγγραφές των χρηστών.  Επί του παρόντος δεν διατηρεί χαρακτηριστικά με πολλαπλές τιμές και αφαιρεί πλεονάζουσες τιμές κατά την ενημέρωση. </p>';
$string['auth_user_create'] = 'Να επιτρέπεται η δημιουργία χρηστών';
$string['auth_user_creation'] = 'Νέοι (ανώνυμοι) χρήστες μπορούν να δημιουργήσουν λογαριασμούς χρηστών στο εξωτερικό σημείο πιστοποίησης και να τους επιβεβαιώσουν μέσω ηλεκτρονικού ταχυδρομείου. Αν το ενεργοποιήσετε αυτό, θυμηθείτε επίσης να επεξεργαστείτε τις επιλογές κάθε συγκεκριμένης ενότητας για τη δημιουργία χρηστών.';
$string['auth_usernameexists'] = 'Αυτό το όνομα χρήστη υπάρχει ήδη. Παρακαλώ επιλέξτε άλλο.';
$string['auto_add_remote_users'] = 'Auto add remote users';
$string['changepassword'] = 'Αλλαγή κωδικού πρόσβασης URL';
$string['changepasswordhelp'] = 'Εδώ μπορείτε να διευκρινίσετε μια θέση στην οποία οι χρήστες σας μπορούν να ανακτήσουν ή να αλλάξουν το όνομα χρήστη/τον κωδικό πρόσβασής τους εάν τα έχουν ξεχάσει.  Αυτό θα παρέχεται στους χρήστες ως σύνδεσμος στη σελίδα σύνδεσης και τη σελίδα χρηστών τους.  Εάν το αφήσετε κενό, ο σύνδεσμος δεν θα τυπωθεί.';
$string['chooseauthmethod'] = 'Επιλέξτε μέθοδο πιστοποίησης';
$string['chooseauthmethod_help'] = '<p align="center"><b>Αλλαγή μεθόδου πιστοποίησης </b></p>

<p>Με αυτό το μενού είναι εφικτή η αλλαγή της μεθόδου πιστοποίησης του χρήστη.</p>

<p>Οι αλλαγές να γίνονται με προσοχή.</p>';
$string['createpassword'] = 'Δημιουργήστε κωδικό πρόσβασης και ενημερώστε τον χρήστη';
$string['createpasswordifneeded'] = 'Δημιουργία κωδικού πρόσβασης αν χρειαστεί';
$string['emailchangecancel'] = 'Cancel email change';
$string['emailchangepending'] = 'Change pending. Open the link sent to you at {$a->preference_newemail}.';
$string['emailnowexists'] = 'The email address you tried to assign to your profile has been assigned to someone else since your original request. Your request for change of email address is hereby cancelled, but you may try again with a different address.';
$string['emailupdate'] = 'Ανανέωση διεύθυνσης ηλεκτρονικού ταχυδρομείου';
$string['emailupdatemessage'] = 'Αγαπητέ χρήστη {$a->fullname}, Ζητήσατε μια αλλαγή της διεύθυνσης σας ηλεκτρονικού ταχυδρομείου για το λογαριασμό σας στο {$a->site}. Παρακαλώ ανοίξτε την παρακάτω διεύθυνση URL στον περιηγητή σας για να επιβεβαιώσετε αυτήν την αλλαγή:{$a->url} <br /> Αν έχετε οποιαδήποτε ερώτηση, παρακαλώ επικοινωνήστε με την υποστήριξη (του ιστοτόπου): {$a->supportemail}';
$string['emailupdatesuccess'] = 'Email address of user <em>{$a->fullname}</em> was successfully updated to <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmation of email update at {$a->site}';
$string['enterthenumbersyouhear'] = 'Enter the numbers you hear';
$string['enterthewordsabove'] = 'Enter the words above';
$string['errormaxconsecutiveidentchars'] = 'Passwords must have at most {$a} consecutive identical characters.';
$string['errorminpassworddigits'] = 'Passwords must have at least {$a} digit(s).';
$string['errorminpasswordlength'] = 'Passwords must be at least {$a} characters long.';
$string['errorminpasswordlower'] = 'Passwords must have at least {$a} lower case letter(s).';
$string['errorminpasswordnonalphanum'] = 'Passwords must have at least {$a} non-alphanumeric character(s).';
$string['errorminpasswordupper'] = 'Passwords must have at least {$a} upper case letter(s).';
$string['errorpasswordreused'] = 'Αυτός ο κωδικός πρόσβασης έχει χρησιμοποιηθεί στο παρελθόν και δεν επιτρέπεται η επαναχρησιμοποίηση του.';
$string['errorpasswordupdate'] = 'Error updating password, password not changed';
$string['eventuserloggedin'] = 'Ο χρήστης έχει συνδεθεί';
$string['eventuserloggedinas'] = 'Ο χρήστης έχει συνδεθεί ως άλλος χρήστης';
$string['eventuserloginfailed'] = 'Η είσοδος χρήστη απέτυχε';
$string['forcechangepassword'] = 'Υποχρεωτική αλλαγή κωδικού πρόσβασης';
$string['forcechangepasswordfirst_help'] = 'Επιβεβλημένη αλλαγή του κωδικού πρόσβασης των χρηστών την πρώτη φορά που θα εισέλθουν στο ΠΗΚΕΑΣ';
$string['forcechangepassword_help'] = 'Επιβεβλημένη αλλαγή του κωδικού πρόσβασης των χρηστών την επόμενη φορά που θα εισέλθουν στο ΠΗΚΕΑΣ';
$string['forgottenpassword'] = 'If you enter a URL here, it will be used as the lost password recovery page for this site. This is intended for sites where passwords are handled entirely outside of Moodle. Leave this blank to use the default password recovery.';
$string['forgottenpasswordurl'] = 'Forgotten password URL';
$string['getanaudiocaptcha'] = 'Ακούστε το ηχητικό CAPTCHA';
$string['getanimagecaptcha'] = 'Πάρε μια εικόνα CAPTCHA';
$string['getanothercaptcha'] = 'Πάρε ένα άλλο CAPTCHA';
$string['guestloginbutton'] = 'Σύνδεσμος για την σύνδεση ως καλεσμένος';
$string['incorrectpleasetryagain'] = 'Incorrect. Please try again.';
$string['infilefield'] = 'Απαιτούμενο πεδίο στο αρχείο';
$string['informminpassworddigits'] = 'τουλάχιστον {$a} ψηφίο (-α)';
$string['informminpasswordlength'] = 'τουλάχιστον {$a} χαρακτήρες';
$string['informminpasswordlower'] = 'τουλάχιστον {$a} πεζό (ά) γράμμα (τα)';
$string['informminpasswordnonalphanum'] = 'τουλάχιστον {$a} μη αλφαριθμητικούς(ο) χαρακτήρες(α) όπως *,- ή #';
$string['informminpasswordreuselimit'] = 'Οι κωδικοί μπορεί να ξαναχρησιμοποιηθούν μετά από {$a} αλλαγές';
$string['informminpasswordupper'] = 'τουλάχιστον {$a} κεφαλαίο (α) γράμμα (τα)';
$string['informpasswordpolicy'] = 'Ο κωδικός πρόσβασης πρέπει να έχει {$a}';
$string['instructions'] = 'Οδηγίες';
$string['internal'] = 'Εσωτερικό';
$string['limitconcurrentlogins_desc'] = 'Αν ενεργοποιηθεί, ο αριθμός των σύγχρονων συνδέσεων περιηγητή περιορίζεται. Η παλαιότερη συνεδρία τερματίζεται μόλις ξεπεραστεί το όριο. Παρακαλώ σημειώστε ότι οι χρήστες μπορεί να χάσουν όλη την μη αποθηκευμένη εργασία τους. Αυτή η ρύθμιση είναι ασύμβατη με πρόσθετα αυθεντικοποίησης SSO (single sign-on) μίας και μόνον ταυτοποιήσης.';
$string['locked'] = 'Κλειδωμένο';
$string['md5'] = 'MD5 κρυπτογράφηση';
$string['nopasswordchange'] = 'Password can not be changed';
$string['nopasswordchangeforced'] = 'You cannot proceed without changing your password, however there is no available page for changing it. Please contact your Moodle Administrator.';
$string['noprofileedit'] = 'Το προφίλ δεν μπορεί να επεξεργαστεί';
$string['ntlmsso_attempting'] = 'Attempting Single Sign On via NTLM...';
$string['ntlmsso_failed'] = 'Auto-login failed, try the normal login page...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO is disabled.';
$string['passwordhandling'] = 'Χειρισμός του πεδίου κωδικού';
$string['plaintext'] = 'Απλό κείμενο';
$string['pluginnotenabled'] = 'Το πρόσθετο αυθεντικοποίησης \'{$a}\'  δεν είναι ενεργοποιημένο.';
$string['pluginnotinstalled'] = 'Το πρόσθετο αυθεντικοποίησης \'{$a}\'  δεν είναι εγκατεστημένο.';
$string['potentialidps'] = 'Συνδεθείτε χρησιμοποιώντας το λογαριασμό σας στο:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = '<h2>Περιγραφή</h2>
<p>Το CAPTCHA είναι ένα πρόγραμα που μπορεί να αποφασίσει εάν κάποιος χρήστης είναι ανθρωπος ή υπολογιστής. Τα CAPTCHA χρησιμοποιούνται από πολλούς ιστοτόπους για να αποτρέψουν την κατάχρηση από "bot," ή αυτοματοποιημένα προγράμματα συνήθως γραμμένα για να δημιουργούν spam. Κανένα πρόγραμμα υπολογιστή δεν μοπρεί να διαβάσει στρεβλωμένο κείμενο τόσο καλά όσο οι άνθρωποι,  οπότε οι τα bot δεν μπορούν να προσπελάσουν ιστοτόπους που προστατεύονται από CAPTCHA.</p>

<h2>Οδηγίες</h2>
<p>Παρκααλώ καταχωρήστε τις λέξεις που βλέπετε στο πλαίσιο σε σειρά και χωρισμένες από ένα κενό χαρακτήρα. Κάτι τέτοιο αποτρέπει αυτοματοποιημένα προγράμματα από το να καταχραστούν αυτήν την υπηρεσία.</p>

<p>Εάν δεν είστε σίγουροι ποιες είναι οι λέξεις τότε είτε εισαγάγετε την καλύτερή σας εικασία ή ακολουθήστε το σύνδεσμο "Φέρε άλλο CAPTCHA". </p>

<p>Άτομα με προβλήματα όρασης μπορούν να ακολουθήσουν το σύνδεσμο "Φέρε ένα ηχητικό CAPTCHA" ώστε να ακούσουν ένα σετ από ψηφία που μπορούν να εισαχθούν αντί της οπτικής πρόκλησης.</p>';
$string['security_question'] = 'Ερώτηση ασφαλείας';
$string['selfregistration'] = 'Self registration';
$string['selfregistration_help'] = 'Αν ένα πρόσθετο αυθεντικοποίησης, όπως η αυτο-εγγραφή μέσω ηλ.ταχυδρομείου, επιλεγεί επιτρέπει σε πιθανούς χρήστες να αυτοεγγράφονται και να δημιουργούν λογαριασμούς. Αυτό δίνει δυνατότητα σε ανεπιθύμητους να δημιουργούν λογαριασμούς για να στέλνουν ανεπιθύμητα μηνύματα μέσω δημοσιεύσεων σε φόρουμ, αναρτήσεων σε ιστολόγια κλπ. Για να αποφύγετε αυτόν τον κίνδυνο, η αυτο-εγγραφή πρέπει να απενεργοποιείται ή να περιορίζεται με τη ρύθμιση <em>Επιτρεπόμενοι τομείς διευθύνσεων ηλ.ταχυδρομείου</em>.';
$string['settingmigrationmismatch'] = 'Εντοπίστηκε αναντιστοιχία τιμών κατά τη διόρθωση των ονομάτων των ρυθμίσεων του πρόσθετου. Το πρόσθετο αυθεντικοποίησης \'{$a->plugin}\' είχε τη ρύθμιση \'{$a->setting}\' διαμορφωμένη σε \'{$a->legacy}\' με το παλιό όνομα και σε \'{$a->current}\' με το τρέχον όνομα. Η τελευταία τιμή έχει οριστεί ως η έγκυρη αλλά θα πρέπει να ελέγξετε και να επιβεβαιώσετε έχει γίνει αποδεκτή.';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Μπορείτε να αποκρύψετε ή να εμφανίσετε το σύνδεσμο στη σελίδα σύνδεσης';
$string['stdchangepassword'] = 'Χρήση standard σελίδας αλλαγής κωδικού';
$string['stdchangepassword_expl'] = 'Εάν το εξωτερικό σύστημα πιστοποίησης επιτρέπει αλλαγές στο κωδικό πρόσβασης μεσα στο ΠΗΛΕΑΣ, ρυθμίστε το σε Ναι. Αυτή η ρύθμιση υπερβαίνει το \'URL αλλαγής κωδικού\'.';
$string['stdchangepassword_explldap'] = 'Σημείωση: Δεν προτείνεται να χρησιμοποιήσετε LDAP πάνω από ένα SSL κρυπτογραφημένο τούνελ (ldaps://) εάν ο LDAP server είναι απομακρυσμένος.';
$string['suspended'] = 'Ανεσταλμένος λογαριασμός';
$string['suspended_help'] = 'Οι λογαριασμοί χρηστών σε αναστολή δεν μπορούν να συνδεθούν ή να χρησιμοποιήσουν διαδικτυακές υπηρεσίες και όλα τα εξερχόμενα μηνύματα απορρίπτονται.';
$string['testsettings'] = 'Δοκιμαστικές ρυθμίσεις';
$string['unlocked'] = 'Ξεκλειδωμένο';
$string['unlockedifempty'] = 'Ξεκλειδωμένο άν είναι άδειο';
$string['update_never'] = 'Ποτέ';
$string['update_oncreate'] = 'Στην δημιουργία';
$string['update_onlogin'] = 'Σε κάθε είσοδο';
$string['update_onupdate'] = 'Στην ανανέωση';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() does not support selected usertype: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() does not support selected usertype (..yet)';
$string['username'] = 'Όνομα χρήστη';
$string['username_help'] = 'Παρακαλούμε να έχετε υπόψιν σας ότι κάποια πρόσθετα αυθεντικοποίησης δεν επιτρέπουν αλλαγή στο όνομα χρήστη.';
