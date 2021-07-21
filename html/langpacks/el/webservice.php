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
 * Strings for component 'webservice', language 'el', version '3.11'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Εξαίρεση ελέγχου πρόσβασης';
$string['actwebserviceshhdr'] = 'Ενεργά πρωτόκολλα υπηρεσιών ιστού';
$string['addaservice'] = 'Προσθήκη υπηρεσίας';
$string['addcapabilitytousers'] = 'Έλεγχος δυνατότητας χρηστών';
$string['addcapabilitytousersdescription'] = 'Οι χρήστες θα πρέπει να έχουν δύο δυνατότητες: webservice:createtoken και μια δυνατότητα ανάλογα με τα χρησιμοποιούμενα πρωτόκολλα, για παράδειγμα webservice/rest:use, webservice/soap:use. Για να επιτευχθεί αυτό, δημιουργήστε έναν ρόλο υπηρεσιών ιστού με τις κατάλληλες δυνατότητες ενεργές και αναθέστε τον στον χρήστη υπηρεσιών ιστού ως ένα ρόλο συστήματος.';
$string['addfunction'] = 'Προσθήκη λειτουργίας';
$string['addfunctionhelp'] = 'Επιλογή της λειτουργίας που θα προστεθεί στην υπηρεσία.';
$string['addfunctions'] = 'Προσθήκη λειτουργιών';
$string['addfunctionsdescription'] = 'Επιλογή των απαιτούμενων λειτουργιών για την νεο-δημιουργημένη υπηρεσία.';
$string['addrequiredcapability'] = 'Ανάθεση/αφαίρεση της απαιτούμενης δυνατότητας';
$string['addservice'] = 'Προσθήκη μιας νέας υπηρεσίας: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Προσθήκη λειτουργιών στην υπηρεσία «{$a}»';
$string['allusers'] = 'Όλοι οι χρήστες';
$string['apiexplorer'] = 'Εξερευνητής API';
$string['apiexplorernotavalaible'] = 'Ο εξερευνητής API δεν είναι διαθέσιμος ακόμη.';
$string['arguments'] = 'Ορίσματα/παράμετροι';
$string['authmethod'] = 'Μέθοδος αυθεντικοποίησης';
$string['callablefromajax'] = 'Που μπορεί να κληθεί μέσω AJAX';
$string['cannotcreatetoken'] = 'Δεν υπάρχει άδεια δημιουργίας κουπονιού υπηρεσίας ιστού για την υπηρεσία {$a}.';
$string['cannotgetcoursecontents'] = 'Δεν είναι δυνατή η λήψη του περιεχομένου του μαθήματος';
$string['checkusercapability'] = 'Έλεγχος δυνατότητας χρήστη';
$string['checkusercapabilitydescription'] = 'Οι χρήστες θα πρέπει να έχουν κατάλληλες δυνατότητες ανάλογα με τα χρησιμοποιούμενα πρωτόκολλα, για παράδειγμα webservice/rest:use, webservice/soap:use. Για να επιτευχθεί αυτό, δημιουργήστε έναν ρόλο υπηρεσιών ιστού με τις δυνατότητες των πρωτοκόλλων ενεργές και αναθέστε τον στον χρήστη υπηρεσιών ιστού ως ένα ρόλο συστήματος.';
$string['configwebserviceplugins'] = 'Για λόγους ασφαλείας, μόνο τα πρωτόκολλα που χρησιμοποιούνται πρέπει να είναι ενεργοποιημένα.';
$string['context'] = 'Πλαίσιο';
$string['createservicedescription'] = 'Μια υπηρεσία είναι ένα σύνολο λειτουργιών υπηρεσιών ιστού. Θα επιτρέψετε στο χρήστη να έχει πρόσβαση σε μια νέα υπηρεσία. Στην σελίδα <strong>Προσθήκη υπηρεσίας</strong> επιλέξτε τις επιλογές «Ενεργοποίηση» και «Εξουσιοδοτημένοι χρήστες». Επιλέξτε «Δεν απαιτείται δυνατότητα».';
$string['createserviceforusersdescription'] = 'Μια υπηρεσία είναι ένα σύνολο λειτουργιών υπηρεσιών ιστού. Θα επιτρέψετε στο χρήστη να έχει πρόσβαση σε μια νέα υπηρεσία. Στην σελίδα <strong>Προσθήκη υπηρεσίας</strong> επιλέξτε τις επιλογές «Ενεργοποίηση» και «Εξουσιοδοτημένοι χρήστες». Επιλέξτε «Δεν απαιτείται δυνατότητα».';
$string['createtoken'] = 'Δημιουργία κουπονιού';
$string['createtokenforuser'] = 'Δημιουργία κουπονιού για ένα χρήστη';
$string['createtokenforuserdescription'] = 'Δημιουργία κουπονιού για τον χρήστη υπηρεσιών ιστού.';
$string['createuser'] = 'Δημιουργία ενός συγκεκριμένου χρήστη';
$string['createuserdescription'] = 'Ένας χρήστης υπηρεσιών ιστού απαιτείται για να αντιπροσωπεύει το σύστημα που ελέγχει το Moodle.';
$string['criteriaerror'] = 'Λείπουν δικαιώματα για να γίνει αναζήτηση με ένα κριτήριο.';
$string['default'] = 'Από προεπιλογή «{$a}»';
$string['deleteaservice'] = 'Διαγραφή υπηρεσίας';
$string['deleteservice'] = 'Διαγραφή της υπηρεσίας: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Η διαγραφή μιας υπηρεσίας θα διαγράψει επίσης τα κουπόνια που σχετίζονται με αυτήν την υπηρεσία. Θέλετε πραγματικά να διαγράψετε την εξωτερική υπηρεσία «{$a}»;';
$string['deletetokenconfirm'] = 'Θέλετε πραγματικά να διαγράψετε αυτό το κουπόνι υπηρεσίας ιστού <strong>{$a->user}</strong> της υπηρεσίας <strong>{$a->service}</strong>;';
$string['disabledwarning'] = 'Όλα τα πρωτόκολλα υπηρεσιών ιστού είναι απενεργοποιημένα. Η ρύθμιση «Ενεργοποίηση υπηρεσιών ιστού» βρίσκεται στα «Προχωρημένα χαρακτηριστικά».';
$string['doc'] = 'Τεκμηρίωση';
$string['docaccessrefused'] = 'Δεν επιτρέπεται να δείτε την τεκμηρίωση για αυτό το κουπόνι';
$string['documentation'] = 'τεκμηρίωση υπηρεσίας ιστού';
$string['downloadfiles'] = 'Μπορούν να ληφθούν αρχεία';
$string['downloadfiles_help'] = 'Εάν ενεργοποιηθεί, οποιοσδήποτε χρήστης μπορεί να κατεβάσει αρχεία με τα κλειδιά ασφαλείας του. Φυσικά περιορίζεται στα αρχεία που επιτρέπεται να κατεβάσει στον ιστότοπο.';
$string['editaservice'] = 'Επεξεργασία υπηρεσίας';
$string['editservice'] = 'Επεξεργασία της υπηρεσίας: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Ενεργοποιημένο';
$string['enabledocumentation'] = 'Ενεργοποίηση τεκμηρίωσης προγραμματιστή';
$string['enabledocumentationdescription'] = 'Λεπτομερής τεκμηρίωση υπηρεσιών ιστού είναι διαθέσιμη για ενεργοποιημένα πρωτόκολλα.';
$string['enableprotocols'] = 'Ενεργοποίηση πρωτοκόλλων';
$string['enableprotocolsdescription'] = 'Τουλάχιστον ένα πρωτόκολλο θα έπρεπε να είναι ενεργοποιημένο. Για λόγους ασφαλείας, πρέπει να ενεργοποιούνται μόνο πρωτόκολλα που θα χρησιμοποιηθούν.';
$string['enablews'] = 'Ενεργοποίηση υπηρεσιών ιστού';
$string['enablewsdescription'] = 'Οι υπηρεσίες ιστού πρέπει να είναι ενεργοποιημένες στα «Προχωρημένα χαρακτηριστικά».';
$string['entertoken'] = 'Δώστε ένα κλειδί ασφαλείας/κουπόνι:';
$string['error'] = 'Σφάλμα: {$a}';
$string['errorcatcontextnotvalid'] = 'Δεν μπορείτε να εκτελέσετε λειτουργίες στο πλαίσιο της κατηγορίας με αναγνωριστικό: {$a->catid}. Το συναφές μήνυμα σφάλματος ήταν: {$a->message}';
$string['errorcodes'] = 'Μήνυμα σφάλματος';
$string['errorcoursecontextnotvalid'] = 'Δεν μπορείτε να εκτελέσετε λειτουργίες στο πλαίσιο του μαθήματος με αναγνωριστικό: {$a->courseid}. Το συναφές μήνυμα σφάλματος ήταν: {$a->message}';
$string['errorinvalidparam'] = 'Η παράμετρος «{a$}» είναι μη έγκυρη.';
$string['errornotemptydefaultparamarray'] = 'Η παράμετρος περιγραφής της υπηρεσίας ιστού με όνομα «{$a}» είναι μια απλή ή πολλαπλή δομή. Η προεπιλογή μπορεί να είναι μόνο κενός πίνακας. Ελέγξτε την περιγραφή υπηρεσίας ιστού.';
$string['erroroptionalparamarray'] = 'Η παράμετρος περιγραφής της υπηρεσίας ιστού με όνομα «{$a}» είναι μια απλή ή πολλαπλή δομή. Δεν μπορεί να οριστεί ως VALUE_OPTIONAL. Ελέγξτε την περιγραφή υπηρεσίας ιστού.';
$string['eventwebservicefunctioncalled'] = 'Κλήθηκε λειτουργία υπηρεσίας ιστού';
$string['eventwebserviceloginfailed'] = 'Η σύνδεση με την υπηρεσία ιστού απέτυχε';
$string['eventwebserviceservicecreated'] = 'Η υπηρεσία ιστού δημιουργήθηκε';
$string['eventwebserviceservicedeleted'] = 'Η υπηρεσία ιστού διαγράφηκε';
$string['eventwebserviceserviceupdated'] = 'Η υπηρεσία ιστού ενημερώθηκε';
$string['eventwebserviceserviceuseradded'] = 'Ο χρήστης της υπηρεσίας ιστού προστέθηκε';
$string['eventwebserviceserviceuserremoved'] = 'Ο χρήστης της υπηρεσίας ιστού αφαιρέθηκε';
$string['eventwebservicetokencreated'] = 'Το κουπόνι υπηρεσίας ιστού δημιουργήθηκε';
$string['eventwebservicetokensent'] = 'Το κουπόνι υπηρεσίας ιστού στάλθηκε';
$string['execute'] = 'Εκτέλεση';
$string['executewarnign'] = 'ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Εάν πιέσετε «εκτέλεση», η βάση δεδομένων σας θα τροποποιηθεί και οι αλλαγές δεν θα μπορούν να αναιρεθούν αυτόματα!';
$string['externalservice'] = 'Εξωτερική υπηρεσία';
$string['externalservicefunctions'] = 'Λειτουργίες εξωτερικής υπηρεσίας';
$string['externalservices'] = 'Εξωτερικές υπηρεσίες';
$string['externalserviceusers'] = 'Χρήστες εξωτερικής υπηρεσίας';
$string['failedtolog'] = 'Αποτυχία καταγραφής';
$string['filenameexist'] = 'Το όνομα αρχείου υπάρχει ήδη: {$a}';
$string['forbiddenwsuser'] = 'Αδυναμία δημιουργίας κουπονιού για χρήστη μη επιβεβαιωμένο, διαγραμμένο, σε αναστολή ή επισκέπτη.';
$string['function'] = 'Λειτουργία';
$string['functions'] = 'Λειτουργίες';
$string['generalstructure'] = 'Γενική δομή';
$string['information'] = 'Πληροφορίες';
$string['installexistingserviceshortnameerror'] = 'Μια υπηρεσία ιστού με το σύντομο όνομα «{$a}» υπάρχει ήδη. Δεν είναι δυνατή η εγκατάσταση/ενημέρωση μιας διαφορετικής υπηρεσίας ιστού με αυτό το σύντομο όνομα.';
$string['installserviceshortnameerror'] = 'Σφάλμα κωδικοποίησης: Το σύντομο όνομα υπηρεσίας «{$a}» μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες (γράμματα και αριθμούς), κάτω παύλα (_), παύλα (-) ή τελεία (.).';
$string['invalidextparam'] = 'Μη έγκυρη παράμετρος εξωτερικής API: {$a}';
$string['invalidextresponse'] = 'Μη έγκυρη απάντηση εξωτερικής API: {$a}';
$string['invalidiptoken'] = 'Μη έγκυρο κουπόνι - η διεύθυνση IP σας δεν υποστηρίζεται';
$string['invalidtimedtoken'] = 'Μη έγκυρο κουπόνι - το κουπόνι έληξε';
$string['invalidtoken'] = 'Μη έγκυρο κουπόνι - το κουπόνι δεν βρέθηκε';
$string['iprestriction'] = 'Περιορισμοί διεύθυνσης IP';
$string['iprestriction_help'] = 'Ο χρήστης θα πρέπει να καλέσει την υπηρεσία ιστού από τις αναφερόμενες σε λίστα διευθύνσεις IP (διαχωρισμένες με κόμματα).';
$string['key'] = 'Κλειδί';
$string['keyshelp'] = 'Τα κλειδιά χρησιμοποιούνται για πρόσβαση στον λογαριασμό σας Moodle από εξωτερικές εφαρμογές.';
$string['loginrequired'] = 'Περιορίζεται στους συνδεδεμένους χρήστες';
$string['manageprotocols'] = 'Διαχείριση πρωτοκόλλων';
$string['managetokens'] = 'Διαχείριση κουπονιών';
$string['missingcaps'] = 'Λείπουν κάποιες δυνατότητες';
$string['missingcaps_help'] = 'Λίστα δυνατοτήτων που διακηρύσσονται για την υπηρεσία τις οποίες δεν έχει ο χρήστης. Κάποιες λειτουργίες της υπηρεσίας μπορεί να μην είναι διαθέσιμες χωρίς αυτές τις δυνατότητες.';
$string['missingpassword'] = 'Ξεχασμένος κωδικός πρόσβασης';
$string['missingrequiredcapability'] = 'Η δυνατότητα {$a} απαιτείται.';
$string['missingusername'] = 'Λείπει το όνομα χρήστη';
$string['missingversionfile'] = 'Σφάλμα στον κώδικα: το αρχείο version.php λείπει από το στοιχείο λογισμικού {$a}';
$string['nameexists'] = 'Αυτό το όνομα χρησιμοποιείται ήδη από άλλη υπηρεσία';
$string['nocapabilitytouseparameter'] = 'Ο χρήστης δεν έχει την απαιτούμενη δυνατότητα να χρησιμοποιήσει την παράμετρο {$a}';
$string['nofunctions'] = 'Αυτή η υπηρεσία δεν έχει λειτουργίες.';
$string['norequiredcapability'] = 'Δεν απαιτείται δυνατότητα';
$string['notoken'] = 'Η λίστα κουπονιών είναι άδεια.';
$string['onesystemcontrolling'] = 'Επιτρέψτε σε ένα εξωτερικό σύστημα να ελέγχει το Moodle';
$string['onesystemcontrollingdescription'] = 'Τα παρακάτω βήματα σας βοηθούν να ρυθμίσετε τις υπηρεσίες ιστού του Moodle για να επιτρέψετε σε ένα εξωτερικό σύστημα να αλληλεπιδράσει με το Moodle. Αυτό περιλαμβάνει τη ρύθμιση μιας μεθόδου αυθεντικοποίησης κουπονιού (κλειδί ασφαλείας).';
$string['onlyseecreatedtokens'] = 'Μπορείτε να δείτε μόνο τα κουπόνια που δημιουργήσατε.';
$string['operation'] = 'Λειτουργία';
$string['optional'] = 'Προαιρετικά';
$string['passwordisexpired'] = 'Ο κωδικός πρόσβασης έχει λήξει.';
$string['phpparam'] = 'XML-RPC (Δομή PHP)';
$string['phpresponse'] = 'XML-RPC (Δομή PHP)';
$string['postrestparam'] = 'Κώδικας PHP για REST (αίτημα POST)';
$string['potusers'] = 'Μη εξουσιοδοτημένοι χρήστες';
$string['potusersmatching'] = 'Μη εξουσιοδοτημένοι χρήστες που ταιριάζουν';
$string['print'] = 'Εκτύπωση όλων';
$string['privacy:metadata:serviceusers'] = 'Λίστα χρηστών που μπορούν να χρησιμοποιήσουν μια συγκεκριμένη εξωτερική υπηρεσία';
$string['privacy:metadata:serviceusers:iprestriction'] = 'Μόνο αυτή η διεύθυνση IP θα χρησιμοποιεί την υπηρεσία';
$string['privacy:metadata:serviceusers:timecreated'] = 'Η ημερομηνία δημιουργίας του αρχείου';
$string['privacy:metadata:serviceusers:userid'] = 'Το αναγνωριστικό του χρήστη';
$string['privacy:metadata:serviceusers:validuntil'] = 'Η ημερομηνία μέχρι την οποία η εξουσιοδότηση είναι έγκυρη';
$string['privacy:metadata:tokens'] = 'Ένα ιστορικό των κουπονιών για αλληλεπίδραση με το Moodle μέσω υπηρεσιών ιστού ή εφαρμογών κινητού.';
$string['privacy:metadata:tokens:creatorid'] = 'Το αναγνωριστικό του χρήστη που δημιούργησε το κουπόνι';
$string['privacy:metadata:tokens:iprestriction'] = 'Το IP αυτό περιορίζεται να χρησιμοποιεί μόνο αυτό το κουπόνι';
$string['privacy:metadata:tokens:lastaccess'] = 'Η ημερομηνία κατά την οποία χρησιμοποιήθηκε τελευταία φορά το κουπόνι';
$string['privacy:metadata:tokens:privatetoken'] = 'Ένα πιο ιδιωτικό κουπόνι χρησιμοποιείται περιστασιακά για την επικύρωση ορισμένων λειτουργιών, όπως η SSO (Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση).';
$string['privacy:metadata:tokens:timecreated'] = 'Η ημερομηνία κατά την οποία δημιουργήθηκε το κουπόνι';
$string['privacy:metadata:tokens:token'] = 'Το κουπόνι του χρήστη';
$string['privacy:metadata:tokens:tokentype'] = 'Ο τύπος του κουπονιού';
$string['privacy:metadata:tokens:userid'] = 'Το αναγνωριστικό του χρήστη του οποίου είναι το κουπόνι';
$string['privacy:metadata:tokens:validuntil'] = 'Η ημερομηνία κατά την οποία το κουπόνι καθίσταται άκυρο';
$string['privacy:request:notexportedsecurity'] = 'Δεν εξήχθη για λόγους ασφαλείας';
$string['protocol'] = 'Πρωτόκολλο';
$string['removefunction'] = 'Αφαίρεση';
$string['removefunctionconfirm'] = 'Θέλετε πραγματικά να καταργήσετε τη λειτουργία «{$a->function}» από την υπηρεσία «{$a->service}»;';
$string['requireauthentication'] = 'Αυτή η μέθοδος απαιτεί έλεγχο ταυτότητας με την άδεια xxx.';
$string['required'] = 'Απαιτείται';
$string['requiredcapability'] = 'Απαιτούμενη δυνατότητα';
$string['requiredcapability_help'] = 'Εάν οριστεί, μόνο οι χρήστες με την απαιτούμενη δυνατότητα μπορούν να έχουν πρόσβαση στην υπηρεσία.';
$string['requiredcaps'] = 'Απαιτούμενες δυνατότητες';
$string['resettokenconfirm'] = 'Θέλετε πραγματικά να επαναφέρετε αυτό το κουπόνι (κλειδί ασφαλείας) υπηρεσίας ιστού για τον χρήστη <strong>{$a->user}</strong> στην υπηρεσία <strong>{$a->service}</strong>;';
$string['resettokenconfirmsimple'] = 'Θέλετε πραγματικά να επαναφέρετε αυτό το κλειδί; Οποιοιδήποτε αποθηκευμένοι σύνδεσμοι που περιέχουν το παλιό κλειδί δεν θα λειτουργούν πια.';
$string['response'] = 'Απόκριση';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Στον λογαριασμό που επαναφέρθηκε πρέπει να γίνει ανάκτηση κωδικού πρόσβασης πριν ληφθεί ένα κουπόνι.';
$string['restparam'] = 'REST (παράμετροι POST)';
$string['restrictedusers'] = 'Εξουσιοδοτημένοι χρήστες μόνο';
$string['restrictedusers_help'] = 'Αυτή η ρύθμιση καθορίζει αν όλοι οι χρήστες με το δικαίωμα δημιουργίας κουπονιού υπηρεσιών ιστού μπορούν να δημιουργήσουν ένα κουπόνι για αυτήν την υπηρεσία μέσω της σελίδας των κλειδιών ασφαλείας ή αν μπορούν να το κάνουν μόνο εξουσιοδοτημένοι χρήστες.';
$string['securitykey'] = 'Κλειδί ασφαλείας (κουπόνι)';
$string['securitykeys'] = 'Κλειδιά ασφαλείας';
$string['selectauthorisedusers'] = 'Επιλέξτε εξουσιοδοτημένους χρήστες';
$string['selectedcapability'] = 'Επιλεγμένη';
$string['selectedcapabilitydoesntexit'] = 'Η ισχύουσα απαιτούμενη δυνατότητα ({$a}) δεν υπάρχει πλέον. Παρακαλούμε, κάντε την διόρθωση και αποθηκεύστε τις αλλαγές.';
$string['selectservice'] = 'Επιλέξτε μια υπηρεσία';
$string['selectspecificuser'] = 'Επιλέξτε έναν συγκεκριμένο χρήστη';
$string['selectspecificuserdescription'] = 'Προσθέστε τον χρήστη υπηρεσιών ιστού ως εξουσιοδοτημένο χρήστη.';
$string['service'] = 'Υπηρεσία';
$string['servicehelpexplanation'] = 'Μια υπηρεσία είναι ένα σύνολο λειτουργιών. Μια υπηρεσία μπορεί να προσπελαστεί από όλους τους χρήστες ή μόνο από ορισμένους χρήστες.';
$string['servicename'] = 'Όνομα υπηρεσίας';
$string['servicenotavailable'] = 'Η υπηρεσία ιστού δεν είναι διαθέσιμη. (Δεν υπάρχει ή μπορεί να είναι απενεργοποιημένη.)';
$string['servicerequireslogin'] = 'Η υπηρεσία ιστού δεν είναι διαθέσιμη. (Η σύνοδος αποσυνδέθηκε ή έχει λήξει.)';
$string['servicesbuiltin'] = 'Ενσωματωμένες υπηρεσίες';
$string['servicescustom'] = 'Προσαρμοσμένες υπηρεσίες';
$string['serviceusers'] = 'Εξουσιοδοτημένοι χρήστες';
$string['serviceusersettings'] = 'Ρυθμίσεις χρήστη';
$string['serviceusersmatching'] = 'Εξουσιοδοτημένοι χρήστες που ταιριάζουν';
$string['serviceuserssettings'] = 'Αλλάξτε τις ρυθμίσεις για τους εξουσιοδοτημένους χρήστες';
$string['shortnametaken'] = 'Το σύντομο όνομα χρησιμοποιείται ήδη για άλλη υπηρεσία ({$a})';
$string['simpleauthlog'] = 'Απλή αυθεντικοποίηση σύνδεσης';
$string['step'] = 'Βήμα';
$string['supplyinfo'] = 'Περισσότερες λεπτομέρειες';
$string['testauserwithtestclientdescription'] = 'Προσομοιώστε την εξωτερική πρόσβαση στην υπηρεσία χρησιμοποιώντας τον πελάτη δοκιμής της υπηρεσίας ιστού. Πριν το κάνετε, συνδεθείτε ως χρήστης με τη δυνατότητα moodle/webservice:createtoken και αποκτήστε το κλειδί ασφαλείας (token, κουπόνι) μέσω της σελίδας προτιμήσεων του χρήστη. Θα χρησιμοποιήσετε αυτό το κουπόνι στον πελάτη δοκιμής. Στον πελάτη δοκιμής, επίσης επιλέξτε ένα ενεργοποιημένο πρωτόκολλο με την αυθεντικοποίηση κουπονιού. <strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Οι λειτουργίες που δοκιμάζετε ΘΑ ΕΚΤΕΛΟΥΝΤΑΙ για αυτόν τον χρήστη, οπότε προσέξτε τι επιλέγετε να δοκιμάσετε!</strong>';
$string['testclient'] = 'Πελάτης δοκιμής της υπηρεσίας ιστού';
$string['testclientdescription'] = '&nbsp;

* Ο πελάτης δοκιμής ιστού <strong>εκτελεί</strong> τις λειτουργίες <strong>ΠΡΑΓΜΑΤΙΚΑ</strong>. Μην δοκιμάζετε λειτουργίες που δεν γνωρίζετε.
* Όλες οι υπάρχουσες λειτουργίες υπηρεσίας ιστού δεν έχουν ακόμη υλοποιηθεί στον δοκιμαστικό πελάτη.
* Για να βεβαιωθείτε ότι ο χρήστης δεν μπορεί να αποκτήσει πρόσβαση σε ορισμένες λειτουργίες, μπορείτε να δοκιμάσετε ορισμένες λειτουργίες που δεν έχετε επιτρέψει.
* Για να δείτε πιο σαφή μηνύματα σφάλματος, ορίστε την κατάσταση αποσφαλμάτωσης σε <strong>{$a->mode}</strong> μέσα σε {$a->atag}.';
$string['testwithtestclient'] = 'Δοκιμή της υπηρεσίας';
$string['testwithtestclientdescription'] = 'Προσομοιώστε την εξωτερική πρόσβαση στην υπηρεσία χρησιμοποιώντας τον πελάτη δοκιμής της υπηρεσίας ιστού. Χρησιμοποιήσετε ένα ενεργοποιημένο πρωτόκολλο με την αυθεντικοποίηση κουπονιού. <strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Οι λειτουργίες που δοκιμάζετε ΘΑ ΕΚΤΕΛΟΥΝΤΑΙ, οπότε προσέξτε τι επιλέγετε να δοκιμάσετε!</strong>';
$string['token'] = 'Κουπόνι';
$string['tokenauthlog'] = 'Αυθεντικοποίηση κουπονιού';
$string['tokencreatedbyadmin'] = 'Μπορεί να γίνει επαναφορά μόνο από διαχειριστή (*)';
$string['tokencreator'] = 'Δημιουργός';
$string['tokenfilter'] = 'Φίλτρο κουπονιών';
$string['tokenfilterreset'] = 'Εμφάνιση όλων των κουπονιών';
$string['tokenfiltersubmit'] = 'Εμφάνιση μόνο αντίστοιχων κουπονιών';
$string['unknownoptionkey'] = 'Άγνωστο κλειδί επιλογής ({$a})';
$string['unnamedstringparam'] = 'Μια παράμετρος συμβολοσειράς δεν έχει όνομα.';
$string['updateusersettings'] = 'Ενημέρωση';
$string['uploadfiles'] = 'Μπορεί να ανεβάσει αρχεία';
$string['uploadfiles_help'] = 'Εάν ενεργοποιηθεί, οποιοσδήποτε χρήστης μπορεί να ανεβάσει αρχεία με τα κλειδιά ασφαλείας τους στην περιοχή των δικών του αρχείων ή σε μια περιοχή προσχεδίων αρχείων. Οποιεσδήποτε ποσοστώσεις αρχείων χρηστών, ισχύουν.';
$string['userasclients'] = 'Χρήστες ως πελάτες με κουπόνι';
$string['userasclientsdescription'] = 'Τα παρακάτω βήματα σας βοηθούν να ρυθμίσετε την υπηρεσία ιστού του Moodle για τους χρήστες ως πελάτες. Αυτά τα βήματα βοηθούν επίσης να ρυθμίσετε τη συνιστώμενη μέθοδο αυθεντικοποίησης με κουπόνια (κλειδιά ασφαλείας, token). Σε αυτή τη περίπτωση χρήσης, ο χρήστης θα δημιουργήσει το κουπόνι του από τη σελίδα κουπονιών μέσω της σελίδας προτιμήσεων.';
$string['usermissingcaps'] = 'Δυνατότητες που λείπουν: {$a}';
$string['usernameorid'] = 'Όνομα χρήστη / αναγνωριστικό χρήστη';
$string['usernameorid_help'] = 'Εισαγάγετε ένα όνομα χρήστη ή ένα αναγνωριστικό χρήστη.';
$string['usernameoridnousererror'] = 'Δεν βρέθηκαν χρήστες με αυτό το όνομα χρήστη / αναγνωριστικό χρήστη.';
$string['usernameoridoccurenceerror'] = 'Έχουν βρεθεί περισσότεροι από ένας χρήστες με αυτό το όνομα χρήστη. Εισαγάγετε το αναγνωριστικό χρήστη.';
$string['usernotallowed'] = 'Ο χρήστης δεν επιτρέπεται για αυτήν την υπηρεσία. Πρώτα πρέπει να επιτρέψετε αυτόν τον χρήστη στην σελίδα διαχείρισης επιτρεπόμενων χρηστών του {$a}.';
$string['userservices'] = 'Υπηρεσίες χρηστών: {$a}';
$string['usersettingssaved'] = 'Οι ρυθμίσεις χρήστη αποθηκεύτηκαν';
$string['validuntil'] = 'Έγκυρο μέχρι';
$string['validuntil_help'] = 'Αν οριστεί, η υπηρεσία θα απενεργοποιηθεί μετά από αυτήν την ημερομηνία για αυτόν τον χρήστη.';
$string['webservice'] = 'Υπηρεσία ιστού';
$string['webservices'] = 'Υπηρεσίες ιστού';
$string['webservicesoverview'] = 'Επισκόπηση';
$string['webservicetokens'] = 'Κουπόνια υπηρεσίας ιστού';
$string['wrongusernamepassword'] = 'Λάθος όνομα χρήστη ή κωδικός πρόσβασης';
$string['wsaccessuserdeleted'] = 'Απαγόρευση πρόσβασης σε υπηρεσία ιστού για διαγραμμένο όνομα χρήστη: {$a}';
$string['wsaccessuserexpired'] = 'Απαγόρευση πρόσβασης σε υπηρεσία ιστού για ληγμένο κωδικό πρόσβασης. Όνομα χρήστη: {$a}';
$string['wsaccessusernologin'] = 'Απαγόρευση πρόσβασης σε υπηρεσία ιστού για αυθεντικοποίηση μη-σύνδεσης. Όνομα χρήστη : {$a}';
$string['wsaccessusersuspended'] = 'Απαγόρευση πρόσβασης σε υπηρεσία ιστού για όνομα χρήστη σε αναστολή: {$a}';
$string['wsaccessuserunconfirmed'] = 'Απαγόρευση πρόσβασης σε υπηρεσία ιστού για ανεπιβεβαίωτο όνομα χρήστη: {$a}';
$string['wsclientdoc'] = 'Τεκμηρίωση πελάτη μιας υπηρεσίας ιστού του Moodle';
$string['wsdocapi'] = 'Τεκμηρίωση API';
$string['wsdocumentation'] = 'Τεκμηρίωση υπηρεσίας ιστού';
$string['wsdocumentationdisable'] = 'Απενεργοποιημένη τεκμηρίωση υπηρεσίας ιστού';
$string['wsdocumentationintro'] = 'Για να δημιουργήσετε έναν πελάτη, σας συμβουλεύουμε να διαβάσετε το {$a->doclink}';
$string['wsdocumentationlogin'] = 'ή δώστε το όνομα χρήστη και τον κωδικό πρόσβασής σας στην υπηρεσία ιστού:';
$string['wspassword'] = 'Κωδικός πρόσβασης για την υπηρεσία ιστού';
$string['wsusername'] = 'Όνομα χρήστη για την υπηρεσία ιστού';
