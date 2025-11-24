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
 * Strings for component 'folder', language 'el', version '4.5'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'κατά {$a->name} - {$a->date}';
$string['contentheader'] = 'Περιεχόμενο';
$string['display'] = 'Εμφάνιση περιεχομένων φακέλου';
$string['display_help'] = 'Εάν επιλέξετε να εμφανίσετε τα περιεχόμενα του φακέλου σε μια σελίδα μαθήματος, δεν θα υπάρχει σύνδεσμος σε ξεχωριστή σελίδα. Η περιγραφή θα εμφανιστεί μόνο αν έχει επιλεγεί/τικαριστεί η «Εμφάνιση περιγραφής στη σελίδα του μαθήματος».  Σημειώστε ότι οι ενέργειες εμφάνισης των συμμετεχόντων δεν μπορούν να καταγραφούν στην περίπτωση αυτή.';
$string['displayinline'] = 'Στην ίδια γραμμή σε μια σελίδα μαθήματος';
$string['displaypage'] = 'Σε ξεχωριστή σελίδα';
$string['dnduploadmakefolder'] = 'Αποσυμπίεση αρχείων και δημιουργία φακέλου';
$string['downloadfolder'] = 'Λήψη φακέλου';
$string['eventallfilesdownloaded'] = 'Ολοκληρώθηκε η λήψη του φακέλου σε συμπιεσμένο (zip) αρχείο';
$string['eventfolderupdated'] = 'Ο φάκελος ενημερώθηκε';
$string['folder:addinstance'] = 'Προσθήκη νέου φακέλου';
$string['folder:managefiles'] = 'Διαχείριση αρχείων στο άρθρωμα φακέλου';
$string['folder:view'] = 'Εμφάνιση περιεχομένου φακέλου';
$string['foldercontent'] = 'Αρχεία και υποφάκελοι';
$string['forcedownload'] = 'Επιβολή λήψης αρχείων';
$string['forcedownload_help'] = 'Εάν ορισμένα αρχεία, όπως εικόνες ή αρχεία HTML, θα πρέπει να εμφανίζονται στον περιηγητή αντί να γίνεται λήψη τους. Σημειώστε ότι για λόγους ασφαλείας, η ρύθμιση θα πρέπει να ξετικαριστεί μόνο εάν όλοι οι χρήστες με δυνατότητα διαχείρισης αρχείων στο φάκελο είναι αξιόπιστοι χρήστες.';
$string['indicator:cognitivedepth'] = 'Βάθος κατανόησης Φακέλου';
$string['indicator:cognitivedepth_help'] = 'Αυτός ο δείκτης βασίζεται στο βάθος κατανόησης που επιτεύχθηκε από τον μαθητή σε έναν πόρο Φακέλου.';
$string['indicator:cognitivedepthdef'] = 'Βάθος κατανόησης Φακέλου';
$string['indicator:cognitivedepthdef_help'] = 'Ο συμμετέχων έχει φτάσει αυτό το ποσοστό αφοσίωσης στο βάθος κατανόησης που προσφέρεται από τις δραστηριότητες Φακέλου κατά τη διάρκεια αυτού του διαστήματος ανάλυσης (Επίπεδα = Καμία εμφάνιση, Εμφάνιση)';
$string['indicator:cognitivedepthdef_link'] = 'Δείκτες_μαθησιακής_αναλυτικής#Βάθος_κατανόησης';
$string['indicator:socialbreadth'] = 'Κοινωνικό εύρος Φακέλου';
$string['indicator:socialbreadth_help'] = 'Αυτός ο δείκτης βασίζεται στο κοινωνικό εύρος που επιτεύχθηκε από τον μαθητή σε έναν πόρο Φακέλου.';
$string['indicator:socialbreadthdef'] = 'Κοινωνικό εύρος Φακέλου';
$string['indicator:socialbreadthdef_help'] = 'Ο συμμετέχων έχει φτάσει αυτό το ποσοστό αφοσίωσης στο κοινωνικό εύρος που προσφέρεται από τις δραστηριότητες Φακέλου κατά τη διάρκεια αυτού του διαστήματος ανάλυσης (Επίπεδα = Καμία συμμετοχή, Συμμετέχων μόνος)';
$string['indicator:socialbreadthdef_link'] = 'Δείκτες_μαθησιακής_αναλυτικής#Κοινωνικό_εύρος';
$string['maxsizetodownload'] = 'Μέγιστο μέγεθος λήψης φακέλου (MB)';
$string['maxsizetodownload_help'] = 'Το μέγιστο μέγεθος του φακέλου που μπορεί να κατεβεί ως αρχείο zip. Αν ορισθεί σε μηδέν, το μέγεθος του φακέλου θα είναι απεριόριστο.';
$string['modulename'] = 'Φάκελος';
$string['modulename_help'] = 'Το άρθρωμα φακέλου επιτρέπει σε ένα διδάσκοντα να εμφανίσει έναν αριθμό από σχετικά αρχεία μέσα σε έναν μόνο φάκελο, μειώνοντας τη συνεχή κύλιση της σελίδας του μαθήματος. Ένας συμπιεσμένος φάκελος μπορεί να ανεβεί και να αποσυμπιεστεί για εμφάνιση ή να δημιουργηθεί ένας άδειος φάκελος και να ανεβούν αρχεία μέσα σε αυτόν.

Ένας φάκελος μπορεί να χρησιμοποιηθεί:

* Για μια σειρά από αρχεία πάνω σε ένα θέμα, για παράδειγμα ένα σετ από περασμένα θέματα εξετάσεων σε μορφότυπο pdf ή μια συλλογή από αρχεία εικόνων για χρήση σε έργα ομάδων μαθητών.
* Για να παρέχει ένα κοινόχρηστο χώρο ανεβάσματος αρχείων από διδάσκοντες, πάνω στην σελίδα του μαθήματος (κρατώντας το φάκελο κρυφό ώστε να μπορούν να τον δουν μόνο διδάσκοντες).';
$string['modulename_link'] = '';
$string['modulenameplural'] = 'Φάκελοι';
$string['newfoldercontent'] = 'Νέο περιεχόμενο φακέλου';
$string['noautocompletioninline'] = 'Δεν είναι δυνατή η επιλογή της αυτόματης ολοκλήρωσης κατά την προβολή της δραστηριότητας μαζί με την επιλογή «Εμφάνιση στην ίδια γραμμή»';
$string['page-mod-folder-view'] = 'Κύρια σελίδα αρθρώματος φακέλου';
$string['page-mod-folder-x'] = 'Οποιαδήποτε σελίδα αρθρώματος φακέλου';
$string['pluginadministration'] = 'Διαχείριση φακέλου';
$string['pluginname'] = 'Φάκελος';
$string['privacy:metadata'] = 'Το πρόσθετο «Πόρος φακέλου αρχείων» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['search:activity'] = 'Φάκελος';
$string['showdownloadfolder'] = 'Εμφάνιση πλήκτρου φακέλου λήψεων';
$string['showdownloadfolder_help'] = 'Αν οριστεί σε «ναι», θα εμφανιστεί ένα κουμπί που θα επιτρέπει την λήψη του περιεχομένου του φακέλου ως ένα αρχείο zip.';
$string['showexpanded'] = 'Εμφάνιση υποφακέλων σε ανάπτυξη';
$string['showexpanded_help'] = 'Αν οριστεί σε «ναι», οι υποφακέλοι εμφανίζονται αναπτυγμένοι από προεπιλογή· διαφορετικά εμφανίζονται συμπτυγμένοι.';
