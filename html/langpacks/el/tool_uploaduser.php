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
 * Strings for component 'tool_uploaduser', language 'el', version '4.4'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Να επιτρέπονται διαγραφές';
$string['allowrenames'] = 'Να επιτρέπονται μετονομασίες';
$string['allowsuspends'] = 'Να επιτρέπεται η αναστολή και η ενεργοποίηση λογαριασμών';
$string['assignedsysrole'] = 'Αναλογικός ρόλος συστήματος {$a}';
$string['clidefault'] = 'Προεπιλογή:';
$string['clierrorargument'] = 'Η τιμή για το όρισμα --{$a->name} δεν είναι έγκυρη. Επιτρεπόμενες τιμές: {$a->values}';
$string['clifile'] = 'Διαδρομή προς το αρχείο CSV με τα δεδομένα χρήστη. Απαιτείται.';
$string['clifilenotreadable'] = 'Το αρχείο {$a} δεν υπάρχει ή δεν είναι αναγνώσιμο';
$string['clihelp'] = 'Εκτύπωση αυτής της βοήθειας.';
$string['climissingargument'] = 'Το όρισμα --{$a} απαιτείται';
$string['clititle'] = 'Εργαλείο χρήστη ανεβάσματος μέσω γραμμής εντολών.';
$string['clivalidationerror'] = 'Σφάλμα επικύρωσης:';
$string['csvdelimiter'] = 'Διαχωριστικό CSV';
$string['defaultvalues'] = 'Προεπιλεγμένες τιμές';
$string['deleteerrors'] = 'Προεπιλεγμένα σφάλματα';
$string['encoding'] = 'Κωδικοποίηση';
$string['errormnetadd'] = 'Δεν είναι δυνατή η προσθήκη απομακρυσμένων χρηστών';
$string['errorprefix'] = 'Σφάλμα:';
$string['errors'] = 'Σφάλματα';
$string['examplecsv'] = 'Παράδειγμα αρχείου κειμένου';
$string['examplecsv_help'] = 'Για να χρησιμοποιήσετε το παράδειγμα αρχείου κειμένου, κατεβάστε το και μετά ανοίξτε το με έναν επεξεργαστή κειμένου ή λογιστικού φύλλου. Αφήστε την πρώτη γραμμή χωρίς αλλαγές και μετά επεξεργαστείτε τις ακόλουθες γραμμές (εγγραφές) και προσθέστε τα δεδομένα χρήστη σας, προσθέτοντας περισσότερες γραμμές αν χρειάζεται. Αποθηκεύστε το αρχείο ως CSV και μετά ανεβάστε το.

Το παράδειγμα αρχείου κειμένου μπορεί επίσης να χρησιμοποιηθεί για δοκιμές, καθώς μπορείτε να κάνετε προεπισκόπηση των δεδομένων χρήστη και μπορείτε να επιλέξετε να ακυρώσετε την ενέργεια πριν δημιουργηθούν λογαριασμοί χρηστών.';
$string['infoprefix'] = 'Πληροφορίες:';
$string['invalidtheme'] = 'Το αισθητικό θέμα «{$a}» δεν έχει εγκατασταθεί και θα αγνοηθεί.';
$string['invalidupdatetype'] = 'Αυτή η επιλογή δεν είναι εφικτή για τον επιλεγμένο τύπο ανεβάσματος.';
$string['invaliduserdata'] = 'Ανιχνεύθηκαν μη έγκυρα δεδομένα για τον χρήστη {$a} και καθαρίστηκαν αυτόματα.';
$string['linex'] = 'Γραμμή {$a}';
$string['nochanges'] = 'Καμία αλλαγή';
$string['notheme'] = 'Δεν έχει οριστεί αισθητικό θέμα για αυτόν τον χρήστη.';
$string['pluginname'] = 'Ανέβασμα χρήστη';
$string['privacy:metadata'] = 'Το πρόσθετο «Ανέβασμα χρηστών» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['renameerrors'] = 'Σφάλματα στις μετονομασίες';
$string['requiredtemplate'] = 'Απαιτείται. Μπορείτε να χρησιμοποιήσετε εδώ συντακτικό υποδείγματος (%l = επίθετο, %f = όνομα, %u = όνομα χρήστη). Δείτε τη βοήθεια για λεπτομέρειες και παραδείγματα.';
$string['rowpreviewnum'] = 'Προεπισκόπηση γραμμών';
$string['unassignedsysrole'] = 'Αφαίρεση του ρόλου συστήματος {$a}';
$string['uploadpicture_baduserfield'] = 'Το συγκεκριμένο χαρακτηριστικό χρήστη δεν είναι έγκυρο. Παρακαλούμε ξαναπροσπαθήστε.';
$string['uploadpicture_cannotmovezip'] = 'Αδυναμία μεταφοράς του αρχείου zip στον προσωρινό φάκελο.';
$string['uploadpicture_cannotprocessdir'] = 'Αδυναμία επεξεργασίας αποσυμπιεσμένων αρχείων.';
$string['uploadpicture_cannotsave'] = 'Αδυναμία αποθήκευσης εικόνας για το χρήστη {$a}. Ελέγξτε το αρχικό αρχείο.';
$string['uploadpicture_cannotunzip'] = 'Αδυναμία αποσυμπίεσης αρχείου εικόνας.';
$string['uploadpicture_invalidfilename'] = 'Το αρχείο εικόνας {$a} περιέχει μη έγκυρους χαρακτήρες στο όνομά του. Παράλειψη αρχείου.';
$string['uploadpicture_overwrite'] = 'Αντικατάσταση υπαρχουσών εικόνων χρηστών;';
$string['uploadpicture_userfield'] = 'Ιδιότητα χρήστη για ταίριασμα εικόνων:';
$string['uploadpicture_usernotfound'] = 'Ο χρήστης με «{$a->userfield}» τιμή του «{$a->uservalue}» δεν υπάρχει. Παράλειψη χρήστη.';
$string['uploadpicture_userskipped'] = 'Παράλειψη χρήστη {$a} (ο χρήστης έχει εικόνα ήδη).';
$string['uploadpicture_userupdated'] = 'Ανανέωση εικόνας για το χρήστη {$a}.';
$string['uploadpictures'] = 'Ανέβασμα εικόνων χρηστών';
$string['uploadpictures_help'] = 'Εικόνες χρηστών μπορούν να ανεβούν ως ένα zip συμπιεσμένο αρχείο με εικόνες. Τα αρχεία εικόνων πρέπει να ονομάζονται επιλεγμένος-χρήστης-ιδιότητα.επέκταση, για παράδειγμα χρήστης1234.jpg για ένα χρήστη με όνομα χρήστη χρήστης1234.';
$string['uploaduser:uploaduserpictures'] = 'Ανέβασμα εικόνων χρηστών';
$string['uploadusers'] = 'Εισαγωγή χρηστών';
$string['uploadusers_help'] = 'Οι χρήστες μπορεί να ανεβάζονται (και προαιρετικά να εγγράφονται σε μαθήματα) μέσω αρχείου κειμένου. Ο μορφότυπος του αρχείου πρέπει να είναι ως εξής:

* Κάθε γραμμή του αρχείου περιέχει μία εγγραφή
* Κάθε εγγραφή είναι μια σειρά από δεδομένα χωρισμένα με κόμμα (ή άλλο διαχωριστικό)
* Η πρώτη εγγραφή περιέχει μια λίστα με ονόματα πεδίων που ορίζουν τον μορφότυπο του υπόλοιπου αρχείου
* Απαιτούμενα πεδία είναι τα username, password, firstname, lastname, email (για όνομα χρήστη, κωδικό πρόσβασης, όνομα, επώνυμο, διεύθυνση ηλε.ταχυδρομείου, αντίστοιχα)';
$string['uploadusers_link'] = '';
$string['uploaduserspreview'] = 'Προεπισκόπηση ανεβάσματος χρηστών';
$string['uploadusersresult'] = 'Ανέβασμα αποτελεσμάτων χρηστών';
$string['useraccountupdated'] = 'Ο χρήστης ανανεώθηκε';
$string['useraccountuptodate'] = 'Χρήστης ενημερωμένος';
$string['userdeleted'] = 'Ο χρήστης διαγράφηκε';
$string['userrenamed'] = 'Ο χρήστης μετονομάστηκε';
$string['userscreated'] = 'Δημιουργήθηκαν οι χρήστες';
$string['usersdeleted'] = 'Οι χρήστες διαγράφηκαν';
$string['usersrenamed'] = 'Μετονομάστηκαν οι χρήστες';
$string['usersskipped'] = 'Χρήστες που παραλείφθηκαν';
$string['usersupdated'] = 'Οι χρήστες ανανεώθηκαν';
$string['usersweakpassword'] = 'Χρήστες με αδύναμο κωδικό πρόσβασης';
$string['userthemesnotallowed'] = 'Τα αισθητικά θέματα χρηστών δεν είναι ενεργοποιημένα, επομένως οποιαδήποτε θέματα στο αρχείο εισαγωγής χρηστών θα αγνοηθούν.';
$string['uubulk'] = 'Επιλογή για μαζικές ενέργειες σε χρήστες';
$string['uubulkall'] = 'Όλοι οι χρήστες';
$string['uubulknew'] = 'Νέοι χρήστες';
$string['uubulkupdated'] = 'Ανανεωμένοι χρήστες';
$string['uucsvline'] = 'Γραμμή CSV';
$string['uulegacy1role'] = '(Αρχικός Μαθητής) typeN=1';
$string['uulegacy2role'] = '(Αρχικός Διδάσκων) typeN=2';
$string['uulegacy3role'] = '(Αρχικός Περιορισμένος διδάσκων) typeN=3';
$string['uunoemailduplicates'] = 'Μη αποδοχή διπλότυπων διευθύνσεων ηλε.ταχυδρομείου';
$string['uuoptype'] = 'Τύπος ανεβάσματος';
$string['uuoptype_addinc'] = 'Προσθήκη όλων, προσθήκη αριθμού στα ονόματα χρηστών αν χρειάζεται';
$string['uuoptype_addnew'] = 'Μόνο προσθήκη νέων, παράλειψη υπαρχόντων χρηστών';
$string['uuoptype_addupdate'] = 'Προσθήκη νέων και ανανέωση υπαρχόντων χρηστών';
$string['uuoptype_update'] = 'Μόνο ανανέωση υπαρχόντων χρηστών';
$string['uupasswordcron'] = 'Δημιουργήθηκε στην (εντολή χρονο-προγραμματισμού) cron';
$string['uupasswordnew'] = 'Κωδικός πρόσβασης νέου χρήστη';
$string['uupasswordold'] = 'Κωδικός πρόσβασης υπάρχοντος χρήστη';
$string['uustandardusernames'] = 'Τυποποίησε τα ονόματα χρηστών';
$string['uuupdateall'] = 'Παράκαμψη με αρχείο και προεπιλογές';
$string['uuupdatefromfile'] = 'Παράκαμψη με αρχείο';
$string['uuupdatemissing'] = 'Συμπλήρωση κενών από αρχείο και προεπιλογές';
$string['uuupdatetype'] = 'Υπάρχουσες λεπτομέρειες χρήστη';
$string['uuusernametemplate'] = 'Υπόδειγμα χρήστη';
$string['warningprefix'] = 'Προειδοποίηση:';
