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
 * Strings for component 'antivirus_clamav', language 'el', version '3.8'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Σφάλμα εκτέλεσης του Clam AV. Το μήνυμα που επιστράφηκε ήταν το «{$a}». Αυτή είναι η έξοδος του Clam:';
$string['clamfailureonupload'] = 'Σε περίπτωση αποτυχίας του ClamAV';
$string['configclamactlikevirus'] = 'Θεώρησε ότι τα αρχεία περιέχουν ιούς';
$string['configclamdonothing'] = 'Θεώρησε ότι τα αρχεία δεν περιέχουν ιούς';
$string['configclamfailureonupload'] = 'Αν έχετε ρυθμίσει το πρόγραμμα clam για να σαρώνει τα ανεβασμένα αρχεία αλλά δεν έχει ρυθμιστεί σωστά ή αποτυγχάνει να εκτελεστεί για κάποιον άγνωστο λόγο, πώς θέλετε να ενεργήσει; Αν επιλέξετε «Θεώρησε οτι τα αρχεία περιέχουν ιούς», θα μεταφερθούν στην περιοχή καραντίνας ή θα διαγραφούν. Αν επιλέξετε «Θεώρησε ότι τα αρχεία δεν περιέχουν ιούς», τα αρχεία θα μεταφερθούν στον φάκελο προορισμού όπως συνήθως. Σε κάθε περίπτωση, οι διαχειριστές θα ειδοποιηθούν συναγερμικά ότι το clam απέτυχε. Αν επιλέξετε «Θεώρησε οτι τα αρχεία περιέχουν ιούς» και για κάποιο λόγο το clam αποτύχει να εκτελεστεί (συνήθως διότι έχετε εισαγάγει λανθασμένη διαδρομή ως το clam), τότε ΟΛΑ τα ανεβασμένα αρχεία θα μεταφερθούν στην ορισμένη περιοχή καραντίνας ή θα διαγραφούν. Προσοχή με αυτή τη ρύθμιση.';
$string['errorcantopensocket'] = 'Η σύνδεση στο Unix domain socket επέστρεψε το σφάλμα {$a}';
$string['errorclamavnoresponse'] = 'Το ClamAV δεν ανταποκρίνεται· ελέγξτε την κατάσταση λειτουργίας της αυτόνομης υπηρεσίας (daemon).';
$string['errornounixsocketssupported'] = 'Η μεταφορά μέσω Unix domain socket δεν υποστηρίζεται σε αυτό το σύστημα. Παρακαλούμε χρησιμοποιήστε την γραμμή εντολών ως εναλλακτική επιλογή.';
$string['invalidpathtoclam'] = 'Το μονοπάτι για το εκτελέσιμο αρχείο Clam AV, {$a}, δεν είναι έγκυρο.';
$string['pathtoclam'] = 'Γραμμή εντολών';
$string['pathtoclamdesc'] = 'Αν η μέθοδος εκτέλεσης είναι ορισμένη σε «Γραμμή εντολών», εισάγετε εδώ το μονοπάτι για το ClamAV. Στο Linux αυτό θα είναι /usr/bin/clamscan ή /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix domain socket (υποδοχή τομέα Unix)';
$string['pathtounixsocketdesc'] = 'Αν η μέθοδος εκτέλεσης είναι ορισμένη σε «Unix domain socket», εισάγετε τη διαδρομή για το UNIX socket (υποδοχή) του ClamAV εδώ. Στο Debian Linux αυτό θα είναι /var/run/clamav/clamd.ctl. Παρακαλούμε βεβαιωθείτε πως ο clamav daemon (διεργασία, αυτόνομη υπηρεσία) έχει πρόσβαση ανάγνωσης στα ανεβασμένα αρχεία. Ο ευκολότερος τρόπος για να το επιβεβαιώσετε είναι να προσθέσετε τον χρήστη «clamav» στην ομάδα του εξυπηρετητή ιστού σας («www-data» στο Debian Linux).';
$string['pluginname'] = 'Αντιιικό πρόγραμμα ClamAV';
$string['privacy:metadata'] = 'Το πρόσθετο «Αντι-ιικό πρόγραμμα ClamAV» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['quarantinedir'] = 'Κατάλογος/φάκελος καραντίνας';
$string['runningmethod'] = 'Μέθοδος εκτέλεσης';
$string['runningmethodcommandline'] = 'Γραμμή εντολών';
$string['runningmethoddesc'] = 'Μέθοδος εκτέλεσης του ClamAV. Η γραμμή εντολών χρησιμοποιείται από προεπιλογή, όμως στα συστήματα Unix μπορεί να επιτευχθεί καλύτερη απόδοση χρησιμοποιώντας ένα Unix domain socket.';
$string['runningmethodunixsocket'] = 'Unix domain socket (υποδοχή τομέα Unix)';
$string['unknownerror'] = 'Παρουσιάστηκε ένα σφάλμα με το πρόγραμμα αντιμετώπισης ιών.';
