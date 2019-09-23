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
 * Strings for component 'plugin', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ενέργειες';
$string['availability'] = 'Διαθεσιμότητα';
$string['cancelinstallall'] = 'Ακύρωση νέων εγκαταστάσεων ({$a})';
$string['cancelinstallhead'] = 'Ακύρωση εγκατάστασης πρόσθετων';
$string['cancelinstallinfo'] = 'Τα ακόλουθα πρόσθετα δεν έχουν εγκατασταθεί πλήρως, επομένως η εγκατάσταση τους μπορεί να ακυρωθεί. Για να γίνει αυτό, ο φάκελος πρόσθετων πρέπει να αφαιρεθεί από τον εξυπηρετητή τώρα. Βεβαιωθείτε ότι αυτό είναι πραγματικά αυτό που θέλετε, ώστε να αποφύγετε κατά λάθος απώλεια δεδομένων (όπως οι δικές σας τροποποιήσεις κώδικα).';
$string['cancelinstallinfodir'] = 'Φάκελος προς διαγραφή: {$a}';
$string['cancelinstallone'] = 'Ακύρωση αυτής της εγκατάστασης';
$string['cancelupgradeall'] = 'Ακύρωση αναβαθμίσεων ({$a})';
$string['cancelupgradehead'] = 'Επαναφορά προηγούμενης έκδοσης των πρόσθετων';
$string['cancelupgradeone'] = 'Ακύρωση αυτής της εγκατάστασης';
$string['checkforupdates'] = 'Έλεγχος για διαθέσιμες ενημερώσεις';
$string['checkforupdateslast'] = 'Τελευταίος έλεγχος έγινε στις {$a}';
$string['dependencyavailable'] = 'Διαθέσιμο';
$string['dependencyfails'] = 'Αποτυχίες';
$string['dependencyinstall'] = 'Εγκατάσταση';
$string['dependencyinstallhead'] = 'Εγκατάσταση εξαρτήσεων που λείπουν';
$string['dependencyinstallmissing'] = 'Εγκατάσταση εξαρτήσεων που λείπουν ({$a})';
$string['dependencymissing'] = 'Λείπει';
$string['dependencyunavailable'] = 'Μη διαθέσιμο';
$string['dependencyupload'] = 'Ανέβασμα';
$string['dependencyuploadmissing'] = 'Ανέβασμα αρχείων ZIP';
$string['detectedmisplacedplugin'] = 'Το πρόσθετο «{$a->component}» είναι εγκατεστημένο σε λανθασμένη τοποθεσία «{$a->current}». Η αναμενόμενη θέση είναι «{$a->expected}».';
$string['displayname'] = 'Όνομα πρόσθετου';
$string['err_response_curl'] = 'Δεν είναι δυνατή η λήψη των διαθέσιμων δεδομένων ενημερώσεων - μη αναμενόμενο σφάλμα cURL.';
$string['err_response_format_version'] = 'Μη αναμενόμενη έκδοση του μορφότυπου απόκρισης. Παρακαλούμε, δοκιμάστε να ελέγξετε ξανά για διαθέσιμες ενημερώσεις.';
$string['err_response_http_code'] = 'Δεν είναι δυνατή η εξαγωγή δεδομένων διαθέσιμων ενημερώσεων - μη αναμενόμενος κώδικας απόκρισης HTTP.';
$string['filterall'] = 'Εμφάνιση όλων';
$string['filtercontribonly'] = 'Εμφάνιση επιπλέον πρόσθετων μόνο';
$string['filterupdatesonly'] = 'Εμφάνιση μόνο ενημερώσιμων';
$string['isenabled'] = 'Ενεργοποιημένο;';
$string['misdepinfoplugin'] = 'Πληροφορίες πρόσθετου';
$string['misdepinfoversion'] = 'Πληροφορίες έκδοσης';
$string['misdepsavail'] = 'Διαθέσιμες εξαρτήσεις που λείπουν';
$string['misdepsunavail'] = 'Μη διαθέσιμες εξαρτήσεις που λείπουν';
$string['misdepsunavaillist'] = 'Δεν βρέθηκε καμία έκδοση που να ικανοποιεί τις απαιτήσεις εξάρτησης: {$a}.';
$string['misdepsunknownlist'] = 'Όχι στον κατάλογο Πρόσθετα: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Δεν έχουν εγκατασταθεί πρόσθετα αυτού του τύπου';
$string['notdownloadable'] = 'Δεν είναι δυνατή η λήψη του πακέτου';
$string['notdownloadable_help'] = 'Δεν μπορεί να γίνει αυτόματη λήψη του πακέτου ZIP με την ενημερωμένη έκδοση. Παρακαλούμε, ανατρέξτε στη σελίδα τεκμηρίωσης για περισσότερη βοήθεια.';
$string['notdownloadable_link'] = 'διαχείριση/mdeploy/δενκατεβαίνει';
$string['notes'] = 'Σημειώσεις';
$string['notwritable'] = 'Τα αρχεία πρόσθετου δεν είναι εγγράψιμα';
$string['notwritable_help'] = 'Τα αρχεία πρόσθετου δεν είναι εγγράψιμα από τον εξυπηρετητή ιστού. Η διαδικασία εξυπηρετητή ιστού πρέπει να έχει πρόσβαση εγγραφής στον φάκελο του πρόσθετου και σε όλο το περιεχόμενό του. Μπορεί επίσης να απαιτείται η πρόσβαση εγγραφής στον ριζικό φάκελο του συγκεκριμένου τύπου πρόσθετου.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Όλα τα πρόσθετα';
$string['overviewext'] = 'Επιπλέον πρόσθετα';
$string['overviewupdatable'] = 'Διαθέσιμες ενημερώσεις';
$string['packagesdebug'] = 'Η έξοδος (μηνυμάτων) εντοπισμού σφαλμάτων ενεργοποιήθηκε';
$string['packagesdownloading'] = 'Λήψη {$a}';
$string['packagesextracting'] = 'Εξαγωγή {$a}';
$string['packagesvalidating'] = 'Επικύρωση {$a}';
$string['packagesvalidatingfailed'] = 'Η εγκατάσταση ακυρώθηκε λόγω αποτυχίας επικύρωσης.';
$string['packagesvalidatingok'] = 'Η επικύρωση ήταν επιτυχής. Η εγκατάσταση μπορεί να συνεχιστεί.';
$string['plugincheckall'] = 'Όλα τα πρόσθετα';
$string['plugincheckattention'] = 'Πρόσθετα που απαιτούν προσοχή';
$string['pluginchecknone'] = 'Κανένα πρόσθετο δεν απαιτεί την προσοχή σας τώρα';
$string['pluginchecknotice'] = 'Αυτή η σελίδα εμφανίζει πρόσθετα που ενδέχεται να απαιτούν την προσοχή σας κατά την αναβάθμιση, όπως νέα πρόσθετα που θα εγκατασταθούν, πρόσθετα προς αναβάθμιση, πρόσθετα που λείπουν κ.λπ.. Επιπλέον πρόσθετα εμφανίζονται αν υπάρχει διαθέσιμη ενημέρωση για αυτά. Συνιστάται να ελέγξετε αν υπάρχουν πιο πρόσφατες εκδόσεις των πρόσθετων και να ενημερώσετε τον πηγαίο κώδικα τους προτού συνεχίσετε με αυτήν την αναβάθμιση του Moodle.';
$string['plugindisable'] = 'Απενεργοποίηση';
$string['plugindisabled'] = 'Απενεργοποιημένο';
$string['pluginenable'] = 'Ενεργοποίηση';
$string['pluginenabled'] = 'Ενεργοποιημένο';
$string['release'] = 'Διανομή (υποέκδοση)';
$string['requiredby'] = 'Απαιτείται από: {$a}';
$string['requires'] = 'Απαιτεί';
$string['rootdir'] = 'Κατάλογος';
$string['settings'] = 'Ρυθμίσεις';
$string['source'] = 'Πηγή';
$string['sourceext'] = 'Επιπρόσθετα';
$string['sourcestd'] = 'Τυπική';
$string['status'] = 'Κατάσταση';
$string['status_delete'] = 'Προς διαγραφή';
$string['status_downgrade'] = 'Υπάρχει ήδη εγκατεστημένη νεότερη έκδοση!';
$string['status_missing'] = 'Λείπει από το δίσκο!';
$string['status_new'] = 'Προς εγκατάσταση';
$string['status_nodb'] = 'Δεν υπάρχει βάση δεδομένων';
$string['status_upgrade'] = 'Προς ενημέρωση';
$string['status_uptodate'] = 'Εγκατεστημένο';
$string['supportedconversions'] = 'Υποστηριζόμενες μετατροπές εγγράφων';
$string['supportedmoodleversions'] = 'Υποστηριζόμενες εκδόσεις Moodle';
$string['systemname'] = 'Αναγνωριστικό';
$string['type_antivirus'] = 'Αντι-ιικό πρόσθετο';
$string['type_antivirus_plural'] = 'Αντι-ιικά πρόσθετα';
$string['type_auth'] = 'Μέθοδος αυθεντικοποίησης';
$string['type_auth_plural'] = 'Μέθοδοι αυθεντικοποίησης';
$string['type_availability'] = 'Περιορισμός διαθεσιμότητας';
$string['type_availability_plural'] = 'Περιορισμοί διαθεσιμότητας';
$string['type_block'] = 'Μπλοκ';
$string['type_block_plural'] = 'Μπλοκ';
$string['type_cachelock'] = 'Χειριστήριο κλειδώματος κρυφής μνήμης';
$string['type_cachelock_plural'] = 'Χειριστήρια κλειδώματος κρυφής μνήμης';
$string['type_cachestore'] = 'Χώρος αποθήκευσης κρυφής μνήμης';
$string['type_cachestore_plural'] = 'Χώροι αποθήκευσης κρυφής μνήμης';
$string['type_calendartype'] = 'Τύπος ημερολογίου';
$string['type_calendartype_plural'] = 'Τύποι ημερολογίου';
$string['type_coursereport'] = 'Αναφορά μαθήματος';
$string['type_coursereport_plural'] = 'Αναφορές μαθήματος';
$string['type_dataformat'] = 'Μορφότυπος δεδομένων';
$string['type_dataformat_plural'] = 'Μορφότυποι δεδομένων';
$string['type_editor'] = 'Επεξεργαστής κειμένου';
$string['type_editor_plural'] = 'Επεξεργαστές κειμένου';
$string['type_enrol'] = 'Μέθοδος εγγραφής';
$string['type_enrol_plural'] = 'Μέθοδοι εγγραφής';
$string['type_fileconverter'] = 'Μετατροπέας εγγράφων';
$string['type_fileconvertermanage'] = 'Διαχείριση μετατροπέων εγγράφων';
$string['type_fileconverter_plural'] = 'Μετατροπείς εγγράφων';
$string['type_filter'] = 'Φίλτρο κειμένου';
$string['type_filter_plural'] = 'Φίλτρα κειμένου';
$string['type_format'] = 'Μορφότυπος μαθήματος';
$string['type_format_plural'] = 'Μορφότυποι μαθήματος';
$string['type_gradeexport'] = 'Μέθοδος εξαγωγής βαθμού';
$string['type_gradeexport_plural'] = 'Μέθοδοι εξαγωγής βαθμών';
$string['type_gradeimport'] = 'Μέθοδος εισαγωγής βαθμών';
$string['type_gradeimport_plural'] = 'Μέθοδοι εισαγωγής βαθμών';
$string['type_gradereport'] = 'Αναφορά βαθμολογίου';
$string['type_gradereport_plural'] = 'Αναφορές βαθμολογίου';
$string['type_gradingform'] = 'Προχωρημένη μέθοδος βαθμολόγησης';
$string['type_gradingform_plural'] = 'Προχωρημένες μέθοδοι βαθμολόγησης';
$string['type_local'] = 'Τοπικό πρόσθετο';
$string['type_local_plural'] = 'Τοπικά πρόσθετα';
$string['type_media'] = 'Πρόγραμμα αναπαραγωγής πολυμέσων';
$string['type_media_plural'] = 'Προγράμματα αναπαραγωγής πολυμέσων';
$string['type_message'] = 'Έξοδος μηνυμάτων';
$string['type_message_plural'] = 'Έξοδοι μηνυμάτων';
$string['type_mlbackend'] = 'Λογισμικό υποστήριξης μάθησης μηχανών';
$string['type_mlbackend_plural'] = 'Λογισμικά υποστήριξης μάθησης μηχανών';
$string['type_mnetservice'] = 'Υπηρεσία του MNet';
$string['type_mnetservice_plural'] = 'Υπηρεσίες του MNet';
$string['type_mod'] = 'Άρθρωμα δραστηριότητας';
$string['type_mod_plural'] = 'Αρθρώματα δραστηριοτήτων';
$string['type_plagiarism'] = 'Πρόσθετο λογοκλοπής';
$string['type_plagiarism_plural'] = 'Πρόσθετα λογοκλοπής';
$string['type_portfolio'] = 'Χαρτοφυλάκιο';
$string['type_portfolio_plural'] = 'Χαρτοφυλάκια';
$string['type_profilefield'] = 'Τύπος πεδίου προφίλ';
$string['type_profilefield_plural'] = 'Τύποι πεδίων προφίλ';
$string['type_qbehaviour'] = 'Συμπεριφορά ερωτήσεων';
$string['type_qbehaviour_plural'] = 'Συμπεριφορές ερωτήσεων';
$string['type_qformat'] = 'Μορφότυπος εισαγωγής/εξαγωγής ερωτήσεων';
$string['type_qformat_plural'] = 'Μορφότυποι εισαγωγής/εξαγωγής ερωτήσεων';
$string['type_qtype'] = 'Τύπος ερώτησης';
$string['type_qtype_plural'] = 'Τύποι ερωτήσεων';
$string['type_report'] = 'Αναφορά ιστοτόπου';
$string['type_report_plural'] = 'Αναφορές ιστοτόπου';
$string['type_repository'] = 'Αποθετήριο';
$string['type_repository_plural'] = 'Αποθετήρια';
$string['type_search'] = 'Μηχανή αναζήτησης';
$string['type_search_plural'] = 'Μηχανές αναζήτησης';
$string['type_theme'] = 'Θέμα';
$string['type_theme_plural'] = 'Θέματα';
$string['type_tool'] = 'Εργαλείο διαχειριστή';
$string['type_tool_plural'] = 'Εργαλεία διαχειριστή';
$string['type_webservice'] = 'Πρωτόκολλο υπηρεσίας ιστού';
$string['type_webservice_plural'] = 'Πρωτόκολλα υπηρεσίας ιστού';
$string['uninstall'] = 'Απεγκατάσταση';
$string['uninstallconfirm'] = 'Πρόκειται να καταργήσετε την εγκατάσταση του πρόσθετου <em>{$a->name}</ em>. Αυτό θα διαγράψει τελείως τα πάντα στη βάση δεδομένων που σχετίζονται με αυτό το πρόσθετο, συμπεριλαμβανομένων των ρυθμίσεων, του ιστορικού καταγραφών, των αρχείων χρηστών που διαχειριζόταν το πρόσθετο κλπ.. Δεν υπάρχει τρόπος επιστροφής και το ίδιο το Moodle δεν δημιουργεί αντίγραφα ασφαλείας για επαναφορά. Είστε ΣΙΓΟΥΡΟΙ οτι θέλετε να συνεχίσετε;';
$string['uninstalldelete'] = 'Όλα τα δεδομένα που σχετίζονται με το πρόσθετο <em>{$a->name}</em> έχουν διαγραφεί από τη βάση δεδομένων. Για να αποτρέψετε την αυτο-επανεγκατάσταση του πρόσθετου, ο φάκελός του <em>{$a->rootdir}</ em> πρέπει να διαγραφεί χειροκίνητα από τον εξυπηρετητή σας τώρα. Το ίδιο το Moodle δεν μπορεί να διαγράψει τον φάκελο λόγω δικαιωμάτων εγγραφής';
$string['uninstalldeleteconfirm'] = 'Όλα τα δεδομένα που σχετίζονται με το πρόσθετο <em>{$a->name}</em> έχουν διαγραφεί από τη βάση δεδομένων. Για να αποτρέψετε την αυτο-επανεγκατάσταση του πρόσθετου, ο φάκελός του <em>{$a->rootdir}</em> πρέπει να καταργηθεί από τον εξυπηρετητή σας. Θέλετε να διαγραφεί τώρα ο φάκελος του πρόσθετου;';
$string['uninstalldeleteconfirmexternal'] = 'Φαίνεται ότι η τρέχουσα έκδοση του πρόσθετου έχει ληφθεί μέσω συστήματος διαχείρισης κώδικα ({$a}). Εάν καταργήσετε το φάκελο του πρόσθετου, ενδέχεται να χάσετε σημαντικές τοπικές τροποποιήσεις του κώδικα. Βεβαιωθείτε ότι σίγουρα θέλετε να καταργήσετε τον φάκελο του πρόσθετου πριν συνεχίσετε.';
$string['uninstallextraconfirmblock'] = 'Υπάρχουν {$a->instance} στιγμιότυπα αυτού του μπλοκ.';
$string['uninstallextraconfirmenrol'] = 'Υπάρχουν {$a->enrollments} εγγραφές χρηστών.';
$string['uninstallextraconfirmmod'] = 'Υπάρχουν {$a->instances} στιγμιότυπα  αυτού του αρθρώματος σε {$a->courses} μαθήματα.';
$string['uninstalling'] = 'Κατάργηση εγκατάστασης του {$a->name}';
$string['updateavailable'] = 'Υπάρχει μια νέα έκδοση {$a} διαθέσιμη!';
$string['updateavailable_moreinfo'] = 'Περισσότερες πληροφορίες...';
$string['updateavailable_release'] = 'Διανομή (υποέκδοση) {$a}';
$string['updatepluginconfirm'] = 'Επιβεβαίωση ενημέρωσης πρόσθετου';
$string['updatepluginconfirmexternal'] = 'Φαίνεται ότι η τρέχουσα έκδοση του πρόσθετου έχει ληφθεί μέσω συστήματος διαχείρισης κώδικα ({$a}). Εάν εγκαταστήσετε αυτήν την ενημερωμένη έκδοση, δεν θα μπορείτε πλέον να λαμβάνετε ενημερωμένες εκδόσεις από το σύστημα διαχείρισης πηγαίου κώδικα. Βεβαιωθείτε ότι σίγουρα θέλετε να ενημερώσετε το πρόσθετο πριν συνεχίσετε.';
$string['updatepluginconfirminfo'] = 'Πρόκειται να εγκαταστήσετε μια νέα έκδοση του πρόσθετου <strong>{$a->name}</ strong>. Ένα πακέτο zip με την έκδοση {$a->version} του πρόσθετου θα ληφθεί/κατεβεί από το <a href="{$a->url}">{$a->url}</a> και θα εξαχθεί στην εγκατάσταση Moodle ώστε να μπορεί να αναβαθμίσει την εγκατάσταση.';
$string['updatepluginconfirmwarning'] = 'Παρακαλούμε, σημειώστε ότι το Moodle δεν θα δημιουργήσει αυτόματα αντίγραφο ασφαλείας της βάσης δεδομένων σας πριν από την αναβάθμιση. Συνιστάται ανεπιφύλακτα να δημιουργήσετε τώρα ένα πλήρες ακριβές αντίγραφο ασφαλείας, για να αντιμετωπίσετε τη σπάνια περίπτωση που ο νέος κώδικας έχει σφάλματα που καθιστούν τον ιστότοπό σας μη διαθέσιμο ή ακόμα και καταστρέφει τη βάση δεδομένων σας. Προχωρήστε με δική σας ευθύνη.';
$string['validationmsg_componentmatch'] = 'Πλήρες όνομα στοιχείου λογισμικού';
$string['validationmsg_componentmismatchname'] = 'Αναντιστοιχία ονόματος πρόσθετου';
$string['validationmsg_componentmismatchname_help'] = 'Κάποια πακέτα zip, όπως εκείνα που δημιουργούνται από το Github, μπορεί να περιέχουν λανθασμένο όνομα ριζικού (αρχικού) καταλόγου. Πρέπει να διορθώσετε το όνομα του ριζικού καταλόγου ώστε να συμφωνεί με το δηλωμένο όνομα του πρόσθετου.';
$string['validationmsg_componentmismatchname_info'] = 'Το πρόσθετο δηλώνει ότι το όνομά του είναι «{$a}» αλλά αυτό δεν ταιριάζει με το όνομα του ριζικού καταλόγου.';
$string['validationmsg_componentmismatchtype'] = 'Αναντιστοιχία τύπου πρόσθετου';
$string['validationmsg_componentmismatchtype_info'] = 'Ο αναμενόμενος τύπος ήταν «{$a->expected}» αλλά το πρόσθετο δηλώνει ότι ο τύπος του είναι «{$a->found}».';
$string['validationmsg_filenotexists'] = 'Αδυναμία εύρεσης εξαγόμενου αρχείου';
$string['validationmsg_filesnumber'] = 'Δεν υπάρχουν αρκετά αρχεία στο πακέτο';
$string['validationmsg_filestatus'] = 'Δεν είναι δυνατή η εξαγωγή όλων των αρχείων';
$string['validationmsg_filestatus_info'] = 'Η προσπάθεια εξαγωγής του αρχείου {$a->file} οδήγησε σε σφάλμα «{$a->status}».';
$string['validationmsg_foundlangfile'] = 'Βρέθηκε αρχείο γλώσσας';
$string['validationmsglevel_debug'] = 'Αποσφαλμάτωση';
$string['validationmsglevel_error'] = 'Σφάλμα';
$string['validationmsglevel_info'] = 'ΟΚ';
$string['validationmsglevel_warning'] = 'Προειδοποίηση';
$string['validationmsg_maturity'] = 'Δηλωμένο επίπεδο ωριμότητας';
$string['validationmsg_maturity_help'] = 'Το πρόσθετο μπορεί να δηλώσει το επίπεδο ωριμότητάς του. Εάν ο συντηρητής θεωρεί το πρόσθετο σταθερό, το δηλωμένο επίπεδο ωριμότητας θα διαβάσει το MATURITY_STABLE. Όλα τα άλλα επίπεδα ωριμότητας (όπως το alpha ή το beta) θα πρέπει να θεωρούνται ασταθή και να υπάρχει προειδοποίηση.';
$string['validationmsg_missingcomponent'] = 'Το πρόσθετο δεν δηλώνει το όνομα του στοιχείου λογισμικού του';
$string['validationmsg_missingcomponent_help'] = 'Όλα τα πρόσθετα πρέπει να παρέχουν το πλήρες όνομα του στοιχείου λογισμικού τους μέσω της δήλωσης `$plugin->component` στο αρχείο version.php.';
$string['validationmsg_missingcomponent_link'] = 'Προγραμματισμός:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Αναντιστοιχία ονόματος αρχείου αγγλικής γλώσσας';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Στον συγκεκριμένο τύπο πρόσθετου λείπει το αναμενόμενο αρχείο αγγλικής γλώσσας {$a}.';
$string['validationmsg_missinglangenfile'] = 'Δεν βρέθηκε αρχείο αγγλικής γλώσσας';
$string['validationmsg_missinglangenfolder'] = 'Λείπει φάκελος αγγλικής γλώσσας';
$string['validationmsg_missingversion'] = 'Το πρόσθετο δεν δηλώνει την έκδοσή του';
$string['validationmsg_missingversionphp'] = 'Αδυναμία εύρεσης αρχείου version.php';
$string['validationmsg_multiplelangenfiles'] = 'Έχουν βρεθεί πολλά αρχεία αγγλικής γλώσσας';
$string['validationmsg_onedir'] = 'Μη έγκυρη δομή του πακέτου ZIP.';
$string['validationmsg_onedir_help'] = 'Το πακέτο ZIP πρέπει να περιέχει μόνο ένα ριζικό κατάλογο που περιέχει τον κώδικα του πρόσθετου. Το όνομα του ριζικού καταλόγου πρέπει να ταιριάζει με το όνομα του πρόσθετου.';
$string['validationmsg_pathwritable'] = 'Έλεγχος πρόσβασης εγγραφής';
$string['validationmsg_pluginversion'] = 'Έκδοση Plugin';
$string['validationmsg_release'] = 'Διανομή (υποέκδοση) πρόσθετου';
$string['validationmsg_requiresmoodle'] = 'Απαιτούμενη έκδοση Moodle';
$string['validationmsg_rootdir'] = 'Όνομα του πρόσθετου προς εγκατάσταση';
$string['validationmsg_rootdir_help'] = 'Το όνομα του ριζικού καταλόγου στο πακέτο ZIP σχηματίζει το όνομα του πρόσθετου που πρόκειται να εγκατασταθεί. Εάν το όνομα δεν είναι σωστό, μπορείτε να μετονομάσετε τον ριζικό κατάλογο στον ZIP πριν εγκαταστήσετε το πρόσθετο.';
$string['validationmsg_rootdirinvalid'] = 'Μη έγκυρο όνομα πρόσθετου';
$string['validationmsg_rootdirinvalid_help'] = 'Το όνομα του ριζικού καταλόγου στο πακέτο ZIP παραβιάζει απαιτήσεις τυπικού συντακτικού. Κάποια πακέτα ZIP, όπως εκείνα που δημιουργούνται από το Github, μπορεί να περιέχουν λανθασμένο όνομα ριζικού (αρχικού) καταλόγου. Πρέπει να διορθώσετε το όνομα του ριζικού καταλόγου ώστε να συμφωνεί με το (δηλωμένο) όνομα του πρόσθετου.';
$string['validationmsg_targetexists'] = 'Η τοποθεσία στόχος υπάρχει ήδη και θα καταργηθεί';
$string['validationmsg_targetexists_help'] = 'Ο κατάλογος πρόσθετου υπάρχει ήδη και θα αντικατασταθεί από το περιεχόμενο του πακέτου του πρόσθετου.';
$string['validationmsg_targetnotdir'] = 'Η τοποθεσία στόχος καταλαμβάνεται από ένα αρχείο (δεν είναι φάκελος)';
$string['validationmsg_unknowntype'] = 'Άγνωστος τύπος πρόσθετου';
$string['validationmsg_versionphpsyntax'] = 'Μη υποστηριζόμενη (ή λανθασμένη) σύνταξη εντοπίστηκε στο αρχείο version.php';
$string['version'] = 'Έκδοση';
$string['versiondb'] = 'Τρέχουσα έκδοση';
$string['versiondisk'] = 'Νέα έκδοση';
