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
 * Strings for component 'auth_oauth2', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Υπάρχει ήδη ένας χρήστης σε αυτόν τον ιστότοπο με αυτό το όνομα χρήστη. Αν αυτός ο λογαριασμός είναι δικός σας, συνδεθείτε εισάγοντας το όνομα χρήστη και τον κωδικό πρόσβασής σας και προσθέστε τον ως συνδεδεμένο λογαριασμό μέσω της σελίδας προτιμήσεών σας.';
$string['alreadylinked'] = 'Αυτός ο εξωτερικός λογαριασμός είναι ήδη συνδεδεμένος με έναν λογαριασμό σε αυτόν τον ιστότοπο';
$string['auth_oauth2description'] = 'Αυθεντικοποίηση βασισμένη στα πρότυπα του OAuth 2';
$string['auth_oauth2settings'] = 'Ρυθμίσεις αυθεντικοποίησης OAuth 2.';
$string['confirmaccountemail'] = 'Γεια σας {$a->fullname},

Έχει ζητηθεί ένας νέος λογαριασμός στη διεύθυνση «{$a->sitename}»
χρησιμοποιώντας τη διεύθυνση ηλε.ταχυδρομείου σας.

Για να επιβεβαιώσετε τον νέο λογαριασμό σας, μεταβείτε σε αυτήν την διεύθυνση ιστού:

{$a->link}

Στα περισσότερα προγράμματα αλληλογραφίας, αυτό θα πρέπει να εμφανίζεται ως μπλε
σύνδεσμος στον οποίο μπορείτε απλά να κάνετε κλικ. Αν αυτό δεν λειτουργεί,
τότε κάντε αντιγραφή και επικόλληση τη διεύθυνση στη γραμμή διεύθυνσης
στο επάνω μέρος του παραθύρου του περιηγητή ιστού σας.

Αν χρειάζεστε βοήθεια, παρακαλούμε επικοινωνήστε με τον διαχειριστή του ιστοτόπου,
{$a->admin}

Εάν δεν ζητήσατε εσείς νέο λογαριασμό, ίσως να προσπαθεί κάποιος άλλος
να θέσει σε κίνδυνο τον λογαριασμό σας. Παρακαλούμε, επικοινωνήστε αμέσως με τον διαχειριστή του ιστοτόπου.';
$string['confirmaccountemailsubject'] = '{$a}: επιβεβαίωση λογαριασμού';
$string['confirmationinvalid'] = 'Ο σύνδεσμος επιβεβαίωσης είναι είτε άκυρος, είτε έχει λήξει. Παρακαλούμε ξεκινήστε την διαδικασία σύνδεσης για να δημιουργηθεί ένα νέο ηλεκτρονικό μήνυμα επιβεβαίωσης.';
$string['confirmationpending'] = 'Για αυτόν τον λογαριασμό εκκρεμεί επιβεβαίωση ηλε.ταχυδρομείου.';
$string['confirmlinkedloginemail'] = 'Γεια σας {$a->fullname},

Υποβλήθηκε ένα αίτημα για σύνδεση του {$a->issuername} λογαριασμού σας
{$a->linkedemail} στον (ιστότοπο) «{$a->sitename}» χρησιμοποιώντας τη
διεύθυνση ηλε.ταχυδρομείου σας.

Για να επιβεβαιώσετε αυτό το αίτημα και να συνδέσετε αυτούς τους λογαριασμούς
σύνδεσης, παρακαλούμε μεταβείτε σε αυτή την διεύθυνση ιστού:

{$a->link}

Στα περισσότερα προγράμματα ηλε.ταχυδρομείου, αυτό θα πρέπει να εμφανίζεται ως
μπλε σύνδεσμος στον οποίο μπορείτε απλά να κάνετε κλικ. Αν αυτό δεν λειτουργεί,
τότε κάντε αντιγραφή και επικόλληση αυτή την διεύθυνση στη γραμμή διεύθυνσης
στο επάνω μέρος του παραθύρου του περιηγητή σας.

Αν χρειάζεστε βοήθεια, παρακαλούμε επικοινωνήστε με τον διαχειριστή του ιστοτόπου,
{$a->admin}

Εάν δεν ζητήσατε εσείς νέο λογαριασμό, ίσως να προσπαθεί κάποιος άλλος
να θέσει σε κίνδυνο τον λογαριασμό σας. Παρακαλούμε, επικοινωνήστε αμέσως
με τον διαχειριστή του ιστοτόπου.';
$string['confirmlinkedloginemailsubject'] = '{$a}: επιβεβαίωση συνδεδεμένου λογαριασμού';
$string['createaccountswarning'] = 'Αυτό το πρόσθετο ελέγχου ταυτότητας επιτρέπει στους χρήστες να δημιουργούν λογαριασμούς στον ιστότοπό σας. Ενδέχεται να θέλετε να ενεργοποιήσετε τη ρύθμιση «Αποτροπή δημιουργίας λογαριασμού κατά την αυθεντικοποίηση» (authpreventaccountcreation) εάν χρησιμοποιείτε αυτό το πρόσθετο.';
$string['createnewlinkedlogin'] = 'Σύνδεση νέου λογαριασμού ({$a})';
$string['emailconfirmlink'] = 'Συνδέστε τους λογαριασμούς σας';
$string['emailconfirmlinksent'] = '<p>Βρέθηκε ένας λογαριασμός με αυτή την διεύθυνση ηλε.ταχυδρομείου αλλά δεν είναι ακόμα συνδεδεμένος.</p><p>Οι λογαριασμοί θα πρέπει να είναι συνδεδεμένοι μεταξύ τους πριν μπορέσετε να συνδεθείτε.</p><p>Ένα μήνυμα ηλε.ταχυδρομείου θα πρέπει να έχει σταλεί στη διεύθυνσή σας <b>{$a}</b>.</p><p>Περιέχει οδηγίες για να συνδέσετε τους λογαριασμούς σας.</p><p>Αν υπάρχει οποιαδήποτε δυσκολία, απευθυνθείτε στο διαχειριστή του ιστοτόπου.</p>';
$string['emailpasswordchangeinfo'] = 'Γεια σας {$a->firstname},

Κάποιος (πιθανώς εσείς) ζήτησε έναν νέο κωδικό πρόσβασης για το λογαριασμό σας στο «{$a->sitename}».

Ωστόσο, ο κωδικός πρόσβασης δεν μπορεί να επαναρχικοποιηθεί επειδή χρησιμοποιείτε το λογαριασμό σας σε άλλον ιστότοπο για να συνδεθείτε.

Συνδεθείτε όπως πριν, χρησιμοποιώντας το σύνδεσμο στη σελίδα σύνδεσης.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Αλλαγή πληροφοριών κωδικού πρόσβασης';
$string['info'] = 'Εξωτερικός λογαριασμός';
$string['issuer'] = 'Υπηρεσία OAuth 2';
$string['issuernologin'] = 'Αυτός ο εκδότης δεν μπορεί να χρησιμοποιηθεί για σύνδεση';
$string['linkedlogins'] = 'Συνδεδεμένοι λογαριασμοί';
$string['linkedloginshelp'] = 'Βοήθεια με τους συνδεδεμένους λογαριασμούς';
$string['loginerror_authenticationfailed'] = 'Αποτυχία διαδικασίας αυθεντικοποίησης';
$string['loginerror_cannotcreateaccounts'] = 'Δεν ήταν δυνατή η εύρεση λογαριασμού με τη διεύθυνση ηλε.ταχυδρομείου σας.';
$string['loginerror_invaliddomain'] = 'Η διεύθυνση ηλε.ταχυδρομείου δεν επιτρέπεται σε αυτόν τον ιστότοπο.';
$string['loginerror_nouserinfo'] = 'Δεν επιστράφηκε καμιά πληροφορία χρήστη. Η υπηρεσία OAuth 2 μπορεί να μην είναι σωστά ρυθμισμένη.';
$string['loginerror_userincomplete'] = 'Η πληροφορία χρήστη που επιστράφηκε δεν περιέχει όνομα χρήστη και διεύθυνση ηλε.ταχυδρομείου. Η υπηρεσία OAuth 2 μπορεί να μην είναι σωστά ρυθμισμένη.';
$string['noissuersavailable'] = 'Καμία από τις διαμορφωμένες υπηρεσίες OAuth2 δεν σας επιτρέπει να συνδέσετε λογαριασμούς σύνδεσης';
$string['notenabled'] = 'Λυπούμαστε αλλά το πρόσθετο αυθεντικοποίησης OAuth 2 δεν είναι ενεργοποιημένο';
$string['notloggedindebug'] = 'Η προσπάθεια σύνδεσης απέτυχε. Αιτία: {$a}';
$string['notwhileloggedinas'] = 'Δεν μπορεί να γίνει διαχείριση των συνδεδεμένων λογαριασμών όσο είστε συνδεδεμένοι μέσω λογαριασμού άλλου χρήστη.';
$string['oauth2:managelinkedlogins'] = 'Διαχείριση δικών σας συνδεδεμένων λογαριασμών εισόδου/σύνδεσης';
$string['plugindescription'] = 'Αυτό το πρόσθετο αυθεντικοποίησης εμφανίζει μια λίστα με τους διαμορφωμένους παρόχους ταυτότητας στη σελίδα σύνδεσης. Η επιλογή ενός παρόχου ταυτότητας επιτρέπει στους χρήστες να συνδεθούν με τα διαπιστευτήριά τους από έναν πάροχο OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Αυθεντικοποίηση OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Αυτό το πρόσθετο είναι συνδεδεμένο στο υποσύστημα αυθεντικοποίησης.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Το κουπόνι επιβεβαίωσης.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Η χρονοσφραγίδα όταν το κουπόνι επιβεβαίωσης λήγει.';
$string['privacy:metadata:auth_oauth2:email'] = 'Η εξωτερική διεύθυνση ηλε.ταχυδρομείου που αντιστοιχεί σε αυτόν το λογαριασμό.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'Το αναγνωριστικό του εκδότη OAuth 2 για αυτή την σύνδεση OAuth 2.';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Λογαριασμοί OAuth 2 που συνδέονται με το λογαριασμό Moodle ενός χρήστη.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Η χρονοσφραγίδα όταν ο λογαριασμός χρήστη συνδέθηκε μέσω OAuth 2 σύνδεσης.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Η χρονοσφραγίδα όταν αυτή η εγγραφή τροποποιήθηκε.';
$string['privacy:metadata:auth_oauth2:userid'] = 'Το αναγνωριστικό του λογαριασμού χρήστη στον οποίο το OAuth 2 είναι συνδεδεμένο.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Το αναγνωριστικό του χρήστη που τροποποίησε αυτόν τον λογαριασμό.';
$string['privacy:metadata:auth_oauth2:username'] = 'Το εξωτερικό όνομα χρήστη που αντιστοιχεί σε αυτόν το λογαριασμό.';
