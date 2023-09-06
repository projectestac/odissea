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
 * Strings for component 'tool_oauth2', language 'el', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Αυτή η ενέργεια θα παρέχει μόνιμη πρόσβαση API στο Moodle για τον αυθεντικοποιημένο λογαριασμό. Αυτός προορίζεται να χρησιμοποιηθεί ως λογαριασμός συστήματος για τη διαχείριση αρχείων που ανήκουν στο Moodle.';
$string['authconnected'] = 'Ο λογαριασμός συστήματος είναι πλέον συνδεδεμένος για πρόσβαση εκτός σύνδεσης';
$string['authnotconnected'] = 'Ο λογαριασμός συστήματος δεν συνδέθηκε για πρόσβαση εκτός σύνδεσης';
$string['configured'] = 'Ρυθμισμένη';
$string['configuredstatus'] = 'Ρυθμισμένη';
$string['connectsystemaccount'] = 'Συνδεθείτε σε λογαριασμό συστήματος';
$string['createfromtemplate'] = 'Δημιουργία μιας υπηρεσίας OAuth 2 από ένα υπόδειγμα';
$string['createfromtemplatedesc'] = 'Επιλέξτε ένα από τα υποδείγματα υπηρεσιών OAuth 2 παρακάτω για να δημιουργήσετε μια υπηρεσία OAuth με έγκυρες ρυθμίσεις για έναν από τους γνωστούς τύπους υπηρεσιών. Αυτό θα δημιουργήσει την υπηρεσία OAuth 2, με όλα τα σωστά τελικά σημεία και τις παραμέτρους που απαιτούνται για την αυθεντικοποίηση (έλεγχο ταυτότητας), παρόλο που θα χρειαστεί να εισάγετε το αναγνωριστικό πελάτη και το μυστικό για τη νέα υπηρεσία πριν να μπορέσετε να την χρησιμοποιήσετε.';
$string['createnewendpoint'] = 'Δημιουργία νέου τελικού σημείου για τον εκδότη «{$a}»';
$string['createnewfacebookissuer'] = 'Δημιουργία νέας υπηρεσίας Facebook';
$string['createnewgoogleissuer'] = 'Δημιουργία νέας υπηρεσίας Google';
$string['createnewissuer'] = 'Δημιουργία νέας προσαρμοσμένης υπηρεσίας';
$string['createnewmicrosoftissuer'] = 'Δημιουργία νέας υπηρεσίας Microsoft';
$string['createnewnextcloudissuer'] = 'Δημιουργία νέας υπηρεσίας Nextcloud';
$string['createnewservice'] = 'Δημιουργία νέας υπηρεσίας:';
$string['createnewuserfieldmapping'] = 'Δημιουργία νέας αντιστοίχισης πεδίων χρήστη για τον εκδότη «{$a}»';
$string['custom_service'] = 'Προσαρμοσμένο';
$string['deleteconfirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε τον εκδότη «{$a}» της ταυτότητας; Όσα πρόσθετα βασίζονται σε αυτόν τον εκδότη θα σταματήσουν να λειτουργούν.';
$string['deleteendpointconfirm'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το τελικό σημείο «{$a->endpoint}» για τον εκδότη «{$a->issuer}»; Οποιαδήποτε πρόσθετα εξαρτώνται από αυτό το τελικό σημείο θα σταματήσουν να λειτουργούν.';
$string['deleteuserfieldmappingconfirm'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τη χαρτογράφηση πεδίου χρήστη για τον εκδότη «{$a}»;';
$string['discovered'] = 'Η ανακάλυψη υπηρεσίας ήταν επιτυχής';
$string['discovered_help'] = 'Ανακάλυψη σημαίνει ότι τα τελικά σημεία του OAuth 2 θα μπορούσαν να προσδιοριστούν αυτόματα από τη βασική διεύθυνση URL για την υπηρεσία OAuth. Δεν απαιτείται να «ανακαλυφθούν» όλες οι υπηρεσίες, αλλά τότε τα τερματικά σημεία και οι πληροφορίες αντιστοίχισης χρηστών θα πρέπει να εισαχθούν χειροκίνητα.';
$string['discoverystatus'] = 'Ανακάλυψη';
$string['editendpoint'] = 'Επεξεργασία τελικού σημείου: {$a->endpoint} για τον εκδότη {$a->issuer}';
$string['editendpoints'] = 'Ρύθμιση τελικών σημείων';
$string['editissuer'] = 'Επεξεργασία εκδότη ταυτότητας: {$a}';
$string['edituserfieldmapping'] = 'Επεξεργασία αντιστοίχισης πεδίων χρήστη για τον εκδότη {$a}';
$string['edituserfieldmappings'] = 'Ρυθμίστε τις αντιστοιχίσεις πεδίων χρήστη';
$string['endpointdeleted'] = 'Το τελικό σημείο διαγράφηκε';
$string['endpointname'] = 'Όνομα';
$string['endpointname_help'] = 'Το κλειδί που χρησιμοποιείται για την αναζήτηση αυτού του τελικού σημείου. Πρέπει να τελειώνει σε «_endpoint».';
$string['endpointsforissuer'] = 'Τελικά σημεία για τον εκδότη: {$a}';
$string['endpointurl'] = 'Διεύθυνση URL';
$string['endpointurl_help'] = 'Διεύθυνση URL για αυτό το τελικό σημείο. Χρειάζεται πρωτόκολλο https: //.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Τομείς σύνδεσης';
$string['issueralloweddomains_help'] = 'Αν οριστεί, αυτή η ρύθμιση είναι μια λίστα με τομείς που χωρίζονται με κόμματα και στους οποίους θα περιορίζονται οι συνδέσεις κατά τη χρήση αυτού του παρόχου.';
$string['issueralloweddomains_link'] = 'OAuth_2_σύνδεση_τομείς';
$string['issuerbaseurl'] = 'Βασική διεύθυνση URL της υπηρεσίας';
$string['issuerbaseurl_help'] = 'Η βασική διεύθυνση URL που χρησιμοποιείται για πρόσβαση στην υπηρεσία';
$string['issuerclientid'] = 'Αναγνωριστικό πελάτη';
$string['issuerclientid_help'] = 'Το αναγνωριστικό πελάτη OAuth για αυτόν τον εκδότη.';
$string['issuerclientsecret'] = 'Μυστικό πελάτη';
$string['issuerclientsecret_help'] = 'Το μυστικό πελάτη OAuth για αυτόν τον εκδότη.';
$string['issuerdeleted'] = 'Ο εκδότης ταυτότητας διαγράφηκε';
$string['issuerdisabled'] = 'Ο εκδότης ταυτότητας απενεργοποιήθηκε';
$string['issuerenabled'] = 'Ο εκδότης ταυτότητας ενεργοποιήθηκε';
$string['issuerimage'] = 'Διεύθυνση URL λογότυπου';
$string['issuerimage_help'] = 'Μια διεύθυνση URL εικόνας που χρησιμοποιείται για την εμφάνιση ενός λογότυπου για αυτόν τον εκδότη. Μπορεί να εμφανιστεί στη σελίδα σύνδεσης.';
$string['issuerloginpagename'] = 'Το όνομα που θα εμφανίζεται στη σελίδα σύνδεσης';
$string['issuerloginpagename_help'] = 'Εάν καθοριστεί, αυτό το όνομα θα χρησιμοποιείται στη σελίδα σύνδεσης αντί για το όνομα της υπηρεσίας.';
$string['issuerloginparams'] = 'Επιπρόσθετες παράμετροι που περιλαμβάνονται σε ένα αίτημα σύνδεσης.';
$string['issuerloginparams_help'] = 'Ορισμένα συστήματα απαιτούν πρόσθετες παραμέτρους για ένα αίτημα σύνδεσης για να διαβάσουν το βασικό προφίλ του χρήστη.';
$string['issuerloginparamsoffline'] = 'Επιπρόσθετες παράμετροι που περιλαμβάνονται σε ένα αίτημα σύνδεσης για πρόσβαση εκτός σύνδεσης.';
$string['issuerloginparamsoffline_help'] = 'Κάθε σύστημα αυθεντικοποίησης OAuth ορίζει ένα διαφορετικό τρόπο αιτήματος πρόσβασης εκτός σύνδεσης. Π.χ. Η Google απαιτεί τις επιπρόσθετες παραμέτρους: «access_type=offline&prompt=consent». Αυτές οι παράμετροι θα πρέπει να είναι σε μορφότυπο παραμέτρων ερωτημάτων διευθύνσεων ιστού URL.';
$string['issuerloginscopes'] = 'Εμβέλειες που περιλαμβάνονται σε ένα αίτημα σύνδεσης.';
$string['issuerloginscopes_help'] = 'Ορισμένα συστήματα απαιτούν επιπρόσθετες εμβέλειες για ένα αίτημα σύνδεσης για να διαβάσουν το βασικό προφίλ του χρήστη. Οι τυπικές εμβέλειες για ένα σύστημα συμβατό με το OpenID Connect είναι «openid profile email».';
$string['issuerloginscopesoffline'] = 'Εμβέλειες που περιλαμβάνονται σε ένα αίτημα σύνδεσης για πρόσβαση εκτός σύνδεσης.';
$string['issuerloginscopesoffline_help'] = 'Κάθε σύστημα αυθεντικοποίησης OAuth ορίζει ένα διαφορετικό τρόπο αιτήματος πρόσβασης εκτός σύνδεσης. Π.χ. Η Microsoft απαιτεί μια επιπρόσθετη εμβέλεια με όνομα «offline_access» (πρόσβαση εκτός σύνδεσης).';
$string['issuername'] = 'Όνομα';
$string['issuername_help'] = 'Όνομα του εκδότη ταυτότητας. Μπορεί να εμφανιστεί στη σελίδα σύνδεσης.';
$string['issuerrequireconfirmation'] = 'Απαιτείται επαλήθευση διεύθυνσης ηλε.ταχυδρομείου';
$string['issuerrequireconfirmation_help'] = 'Να απαιτείται να επαληθεύουν όλοι οι χρήστες τη διεύθυνσή τους ηλε.ταχυδρομείου πριν μπορέσουν να συνδεθούν με το OAuth. Αυτό ισχύει για νεοδημιουργημένους λογαριασμούς στο πλαίσιο της διαδικασίας σύνδεσης ή όταν ένας υπάρχων λογαριασμός Moodle συνδέεται με μια σύνδεση OAuth μέσω διευθύνσεων ηλε.ταχυδρομείου που ταιριάζουν.';
$string['issuers'] = 'Εκδότες';
$string['issuersetup'] = 'Λεπτομερείς οδηγίες σχετικά με τη διαμόρφωση των κοινών υπηρεσιών OAuth 2';
$string['issuersetuptype'] = 'Λεπτομερείς οδηγίες σχετικά με τη ρύθμιση του παρόχου {$a} OAuth 2';
$string['issuershowonloginpage'] = 'Εμφάνιση στη σελίδα σύνδεσης';
$string['issuershowonloginpage_help'] = 'Εάν είναι ενεργοποιημένο το πρόσθετο εξακρίβωσης ταυτότητας OAuth 2, αυτός ο εκδότης σύνδεσης θα εμφανίζεται στη σελίδα σύνδεσης για να επιτρέψει στους χρήστες να συνδεθούν με λογαριασμούς από αυτόν τον εκδότη.';
$string['issuersservicesallow'] = 'Να επιτρέπονται οι υπηρεσίες';
$string['issuersservicesnotallow'] = 'Να μην επιτρέπονται οι υπηρεσίες';
$string['issuerusedforinternal'] = 'Εσωτερικές υπηρεσίες';
$string['issuerusedforlogin'] = 'Σύνδεση';
$string['issuerusein'] = 'Αυτή η υπηρεσία θα χρησιμοποιηθεί';
$string['issuerusein_help'] = 'Οι υπηρεσίες OAuth 2 μπορούν να χρησιμοποιηθούν σε εσωτερικές υπηρεσίες, στη σελίδα σύνδεσης ή και στα δύο, εάν χρειάζεται.';
$string['issueruseineverywhere'] = 'Σελίδα σύνδεσης και εσωτερικές υπηρεσίες';
$string['issueruseininternalonly'] = 'Μόνο εσωτερικές υπηρεσίες';
$string['issueruseinloginonly'] = 'Μόνο σελίδα σύνδεσης';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Εμφάνιση στη σελίδα σύνδεσης ως';
$string['loginissuer'] = 'Να επιτρέπεται η σύνδεση';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Δεν έχει ρυθμιστεί';
$string['notdiscovered'] = 'Η ανακάλυψη υπηρεσίας δεν ήταν επιτυχής';
$string['notloginissuer'] = 'Να μην επιτραπεί η σύνδεση';
$string['pluginname'] = 'Υπηρεσίες OAuth 2';
$string['privacy:metadata'] = 'Το πρόσθετο «Υπηρεσίες OAuth 2» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['savechanges'] = 'Αποθήκευση αλλαγών';
$string['serviceshelp'] = 'Οδηγίες εγκατάστασης του παρόχου υπηρεσιών.';
$string['systemaccountconnected'] = 'Λογαριασμός συστήματος συνδεδεμένος';
$string['systemaccountconnected_help'] = 'Οι λογαριασμοί συστήματος χρησιμοποιούνται για να παρέχουν προχωρημένη λειτουργικότητα σε πρόσθετα. Δεν απαιτούνται μόνο για την λειτουργικότητα της σύνδεσης/εισόδου, αλλά και για κάποια πρόσθετα που χρησιμοποιούν την υπηρεσία OAuth καθώς τους επιτρέπουν να παρέχουν ένα μικρότερο σύνολο από λειτουργίες όταν ο λογαριασμός συστήματος δεν έχει συνδεθεί. Για παράδειγμα, τα αποθετήρια δεν μπορούν να υποστηρίξουν «ελεγχόμενους συνδέσμους» χωρίς ένα λογαριασμό συστήματος που να εκτελεί τις λειτουργίες αρχείων.';
$string['systemaccountnotconnected'] = 'Ο λογαριασμός συστήματος δεν συνδέθηκε';
$string['systemauthstatus'] = 'Λογαριασμός συστήματος συνδεδεμένος';
$string['usebasicauth'] = 'Αυθεντικοποίηση αιτημάτων κουπονιού μέσω κεφαλίδων HTTP';
$string['usebasicauth_help'] = 'Χρησιμοποιήστε το βασικό σχήμα αυθεντικοποίησης HTTP όταν στέλνετε αναγνωριστικό πελάτη και κωδικό πρόσβασης με ένα αίτημα ανανέωσης κουπονιού. Συνιστάται από το πρότυπο OAuth 2, αλλά ενδέχεται να μην είναι διαθέσιμο σε ορισμένους εκδότες.';
$string['userfieldexternalfield'] = 'Εξωτερικό όνομα πεδίου';
$string['userfieldexternalfield_error'] = 'Αυτό το πεδίο δεν μπορεί να περιέχει HTML.';
$string['userfieldexternalfield_help'] = 'Όνομα πεδίου που παρέχεται από το εξωτερικό σύστημα OAuth.';
$string['userfieldinternalfield'] = 'Εσωτερικό όνομα πεδίου';
$string['userfieldinternalfield_help'] = 'Όνομα του πεδίου χρήστη Moodle που πρέπει να αντιστοιχηθεί από το εξωτερικό πεδίο.';
$string['userfieldmappingdeleted'] = 'Η αντιστοίχιση πεδίου χρήστη διαγράφηκε';
$string['userfieldmappingsforissuer'] = 'Αντιστοιχίσεις πεδίων χρήστη για τον εκδότη: {$a}';
