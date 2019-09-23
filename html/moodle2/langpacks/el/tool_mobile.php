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
 * Strings for component 'tool_mobile', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Η αποσφαλμάτωση ADOdb είναι ενεργοποιημένη. Θα πρέπει να απενεργοποιηθεί στις ρυθμίσεις του πρόσθετου εγγραφής εξωτερικής βάσης δεδομένων ή αυθεντικοποίησης εξωτερικής βάσης δεδομένων.';
$string['androidappid'] = 'Μοναδικό αναγνωριστικό εφαρμογής κινητού Android';
$string['androidappid_desc'] = 'Αυτή η ρύθμιση μπορεί να παραμείνει στην προεπιλογή της, εκτός εάν έχετε μια προσαρμοσμένη εφαρμογή κινητού Android.';
$string['apppolicy'] = 'Διεύθυνση URL της πολιτικής της εφαρμογής κινητού';
$string['apppolicy_help'] = 'Η διεύθυνση URL μιας πολιτικής για χρήστες εφαρμογών κινητού, η οποία περιλαμβάνεται στη σελίδα Πληροφορίες σχετικά με την εφαρμογή. Εάν το πεδίο παραμείνει κενό, θα χρησιμοποιηθεί η διεύθυνση URL πολιτικής ιστοτόπου.';
$string['autologinkeygenerationlockout'] = 'Η δημιουργία κλειδιού αυτόματης σύνδεσης είναι μπλοκαρισμένη. Πρέπει να περιμένετε 6 λεπτά μεταξύ των αιτημάτων.';
$string['autologinnotallowedtoadmins'] = 'Η αυτόματη σύνδεση δεν επιτρέπεται για τους διαχειριστές ιστοτόπων.';
$string['cachedef_plugininfo'] = 'Αυτό αποθηκεύει την λίστα των πρόσθετων (plugin) μαζί με τα πρόσθετα (addons) κινητών';
$string['clickheretolaunchtheapp'] = 'Κάντε κλικ εδώ αν η εφαρμογή κινητού δεν ανοίγει αυτόματα.';
$string['configmobilecssurl'] = 'Ένα αρχείο CSS για να προσαρμόσετε την επιφάνεια εργασίας της εφαρμογής του κινητού σας.';
$string['customlangstrings'] = 'Προσαρμοσμένες συμβολοσειρές γλώσσας';
$string['customlangstrings_desc'] = 'Λέξεις και φράσεις που εμφανίζονται στην εφαρμογή κινητού μπορούν να προσαρμοστούν εδώ. Εισαγάγετε κάθε προσαρμογή συμβολοσειράς γλώσσας σε νέα γραμμή με μορφότυπο: αναγνωριστικό συμβολοσειράς, προσαρμοσμένη συμβολοσειρά και κωδικός γλώσσας, διαχωρισμένα με χαρακτήρες κάθετης γραμμής (|).
Για παράδειγμα:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Για μια πλήρη λίστα αναγνωριστικών συμβολοσειρών, δείτε την τεκμηρίωση/βοήθεια.';
$string['custommenuitems'] = 'Προσαρμοσμένα στοιχεία μενού';
$string['custommenuitems_desc'] = 'Επιρόσθετα στοιχεία μπορούν να προστεθούν στο κύριο μενού της εφαρμογής, καθορίζοντάς τα εδώ. Εισαγάγετε κάθε προσαρμοσμένο στοιχείο μενού σε μια νέα γραμμή με μορφότυπο: κείμενο στοιχείου, διεύθυνση URL συνδέσμου, μέθοδος ανοίγματος συνδέσμου και κωδικός γλώσσας (προαιρετικά, για την εμφάνιση του αντικειμένου σε χρήστες της συγκεκριμένης γλώσσας μόνο), χωρισμένα με χαρακτήρες κάθετης γραμμής (|).

Οι μέθοδοι ανοίγματος συνδέσμου είναι:

* app - στην εφαρμογή κινητού (για σύνδεσμο προς μια δραστηριότητα που υποστηρίζεται από την εφαρμογή),
* inappbrowser - στον περιηγητή εφαρμογής κινητού (για άνοιγμα ενός συνδέσμου στον περιηγητή χωρίς απομάκρυνση από την εφαρμογή),
* browser - στον περιηγητή (για άνοιγμα ενός συνδέσμου στον προεπιλεγμένο περιηγητή της συσκευής έξω από την εφαρμογή), και
* embedded - ενσωματωμένα (για εμφάνιση του συνδέσμου σε ένα iframe σε μια νέα σελίδα μέσα στην εφαρμογή).

Για παράδειγμα:
<pre>
App help|https://someurl.xyz/help|inappbrowser
My grades|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
</pre>';
$string['disabledfeatures'] = 'Απενεργοποιημένα χαρακτηριστικά';
$string['disabledfeatures_desc'] = 'Επιλέξτε εδώ τα χαρακτηριστικά που θέλετε να απενεργοποιήσετε στην εφαρμογή κινητού για τον ιστότοπό σας. Λάβετε υπόψη ότι ορισμένα από τα χαρακτηριστικά που παρατίθενται εδώ θα μπορούσαν να απενεργοποιηθούν μέσω άλλων ρυθμίσεων ιστοτόπου. Θα πρέπει να αποσυνδεθείτε και να συνδεθείτε ξανά στην εφαρμογή για να δείτε τις αλλαγές.';
$string['displayerrorswarning'] = 'Η εμφάνιση μηνυμάτων εντοπισμού σφαλμάτων (debugdisplay) είναι ενεργοποιημένη. Θα πρέπει να είναι απενεργοποιημένη.';
$string['downloadcourse'] = 'Λήψη μαθήματος';
$string['downloadcourses'] = 'Λήψη μαθημάτων';
$string['enablesmartappbanners'] = 'Ενεργοποίηση εικόνων προώθησης εφαρμογών κινητού';
$string['enablesmartappbanners_desc'] = 'Αν ενεργοποιηθεί, μια εικόνα προώθησης της εφαρμογής κινητού θα εμφανιστεί όταν αποκτάτε πρόσβαση στον ιστότοπο μέσω περιηγητή κινητού.';
$string['forcedurlscheme'] = 'Αν θέλετε να επιτρέπετε μόνο στην δική σας εφαρμογή κινητού να ανοίγει μέσω περιηγητή, τότε ορίστε τη διεύθυνση URL του σχήματος εδώ· αλλιώς αφήστε το πεδίο κενό.';
$string['forcedurlscheme_key'] = 'Διεύθυνση URL σχήματος';
$string['forcelogout'] = 'Υποχρεωτική αποσύνδεση';
$string['forcelogout_desc'] = 'Αν ενεργοποιηθεί, η επιλογή εφαρμογής κινητού «Αλλαγή ιστοτόπου» αντικαθίσταται από την «Αποσύνδεση». Αυτό έχει ως αποτέλεσμα ο χρήστης να αποσυνδεθεί τελείως. Θα πρέπει λοιπόν να δώσουν ξανά τον κωδικό πρόσβασής τους την επόμενη φορά που θα επιθυμούν να έχουν πρόσβαση στον ιστότοπο.';
$string['getmoodleonyourmobile'] = 'Κατεβάστε την εφαρμογή για κινητά';
$string['httpsrequired'] = 'Απαιτείται HTTPS';
$string['insecurealgorithmwarning'] = 'Φαίνεται ότι το πιστοποιητικό HTTPS χρησιμοποιεί έναν μη ασφαλή αλγόριθμο για την υπογραφή (SHA-1). Παρακαλούμε, δοκιμάστε να ενημερώσετε το πιστοποιητικό.';
$string['invalidcertificatechainwarning'] = 'Φαίνεται ότι η αλυσίδα πιστοποιητικών δεν είναι έγκυρη.';
$string['invalidcertificateexpiredatewarning'] = 'Φαίνεται ότι το πιστοποιητικό HTTPS για τον ιστότοπο έχει λήξει.';
$string['invalidcertificatestartdatewarning'] = 'Φαίνεται ότι το πιστοποιητικό HTTPS για τον ιστότοπο δεν είναι ακόμα έγκυρο (με ημερομηνία έναρξης στο μέλλον).';
$string['invalidprivatetoken'] = 'Μη έγκυρο ιδιωτικό κουπόνι. Το κουπόνι δεν πρέπει να είναι άδειο ή να περνάει μέσω παραμέτρου GET.';
$string['invaliduserquotawarning'] = 'Η ποσόστωση χρήστη (userquota) έχει οριστεί σε μη έγκυρο αριθμό. Θα πρέπει να οριστεί σε έναν έγκυρο αριθμό (ακέραια τιμή) στις ρυθμίσεις ασφαλείας ιστοτόπου.';
$string['iosappid'] = 'Μοναδικό αναγνωριστικό εφαρμογής κινητού iOS';
$string['iosappid_desc'] = 'Αυτή η ρύθμιση μπορεί να παραμείνει στην προεπιλογή της, εκτός εάν έχετε μια προσαρμοσμένη εφαρμογή κινητού iOS.';
$string['loginintheapp'] = 'Μέσω της εφαρμογής κινητού';
$string['logininthebrowser'] = 'Μέσω ενός παραθύρου περιηγητή (για πρόσθετα SSO)';
$string['loginintheembeddedbrowser'] = 'Μέσω ενός ενσωματωμένου περιηγητή (για πρόσθετα SSO)';
$string['mainmenu'] = 'Κυρίως μενού';
$string['mobileapp'] = 'Εφαρμογή κινητού';
$string['mobileappconnected'] = 'Εφαρμογή κινητού συνδέθηκε';
$string['mobileappearance'] = 'Εμφάνιση κινητού';
$string['mobileappenabled'] = 'Αυτός ο ιστότοπος έχει ενεργοποιημένη την πρόσβαση μέσω κινητού.<br /><a href="{$a}">Κατεβάστε την εφαρμογή κινητού</a>.';
$string['mobileauthentication'] = 'Αυθεντικοποίηση κινητού';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Χαρακτηριστικά κινητού';
$string['mobilenotificationsdisabledwarning'] = 'Οι ειδοποιήσεις για κινητά δεν είναι ενεργοποιημένες. Θα πρέπει να είναι ενεργοποιημένες στις ρυθμίσεις ειδοποιήσεων.';
$string['mobilesettings'] = 'Ρυθμίσεις κινητού';
$string['offlineuse'] = 'Χρήση εκτός σύνδεσης';
$string['pluginname'] = 'Εργαλεία της εφαρμογής Moodle για κινητά';
$string['pluginnotenabledorconfigured'] = 'Πρόσθετο μη ενεργοποιημένο ή μη ρυθμισμένο.';
$string['privacy:metadata:core_userkey'] = 'Τα κλειδιά χρήστη που χρησιμοποιούνται για τη δημιουργία κλειδιού αυτόματης σύνδεσης για τον τρέχοντα χρήστη.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Η ημερομηνία του τελευταίου αιτήματος κλειδιού αυτόματης σύνδεσης. Ανάμεσα στις αιτήσεις απαιτούνται 6 λεπτά.';
$string['remoteaddons'] = 'Απομακρυσμένα πρόσθετα';
$string['selfsignedoruntrustedcertificatewarning'] = 'Φαίνεται ότι το πιστοποιητικό HTTPS είναι αυτο-υπογεγραμμένο ή δεν είναι έμπιστο. Η εφαρμογή για κινητά θα λειτουργεί μόνο με αξιόπιστους ιστοτόπους.';
$string['setuplink'] = 'Σελίδα λήψης της εφαρμογής κινητού';
$string['setuplink_desc'] = 'Διεύθυνση URL της σελίδας με συνδέσμους λήψης της εφαρμογής κινητού από το App Store και το Google Play.';
$string['smartappbanners'] = 'Εικόνες προώθησης εφαρμογών κινητού';
$string['typeoflogin'] = 'Τύπος σύνδεσης/εισόδου';
$string['typeoflogin_desc'] = 'Εάν ο ιστότοπος χρησιμοποιεί μία και μόνον ενιαία αυθεντικοποίηση SSO, τότε επιλέξτε μέσω ενός παραθύρου περιηγητή ή μέσω ενσωματωμένου περιηγητή. Ένας ενσωματωμένος περιηγητής παρέχει μια καλύτερη εμπειρία χρήστη, αν και δεν λειτουργεί με όλα τα πρόσθετα SSO. Εάν χρησιμοποιείτε SSO, η «Αυτόματη σύνδεση επισκεπτών» (auto-login guests) πρέπει να απενεργοποιηθεί.';
