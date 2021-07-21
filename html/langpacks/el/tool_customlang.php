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
 * Strings for component 'tool_customlang', language 'el', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Αποθήκευση συμβολοσειρών στο πακέτο γλώσσας';
$string['checkout'] = 'Άνοιγμα πακέτου γλώσσας για επεξεργασία';
$string['checkoutdone'] = 'Φορτώθηκε το πακέτο γλώσσας';
$string['checkoutinprogress'] = 'Φόρτωση πακέτου γλώσσας';
$string['cliexportfileexists'] = 'Το αρχείο για την γλώσσα {$a->lang} υπάρχει ήδη, παραλείπεται. Εάν θέλετε αντικατάσταση, προσθέστε την επιλογή --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Το αρχείο {$a->filepath} δεν βρέθηκε για τη γλώσσα {$a->lang}. Παράλειψη αυτού του αρχείου.';
$string['cliexportheading'] = 'Έναρξη εξαγωγής αρχείων γλώσσας.';
$string['cliexportnofilefoundforlang'] = 'Δεν βρέθηκε αρχείο για εξαγωγή. Παράλειψη εξαγωγής για αυτήν τη γλώσσα.';
$string['cliexportstartexport'] = 'Εξαγωγή γλώσσας {$a}';
$string['cliexportzipdone'] = 'Το zip δημιουργήθηκε: {$a}';
$string['cliexportzipfail'] = 'Αδυναμία δημιουργίας zip {$a}';
$string['clifiles'] = 'Αρχεία προς εισαγωγή σε {$a}';
$string['cliimporting'] = 'Συμβολοσειρά εισαγωγής αρχείων (κατάσταση {$a})';
$string['climissingfiles'] = 'Λείπουν έγκυρα αρχεία';
$string['climissinglang'] = 'Γλώσσα που λείπει';
$string['climissingmode'] = 'Λείπει ή μη έγκυρη κατάσταση (έγκυρη είναι: όλα, νέα ή ενημέρωση)';
$string['climissingsource'] = 'Λείπει αρχείο ή φάκελος';
$string['clinolog'] = 'Τίποτα προς εισαγωγή σε {$a}';
$string['confirmcheckin'] = 'Πρόκειται να αποθηκεύσετε τροποποιήσεις στο τοπικό πακέτο γλώσσας. Αυτό θα εξάγει τις προσαρμοσμένες συμβολοσειρές από τον μεταφραστή στον κατάλογο δεδομένων του ιστοτόπου σας και ο ιστότοπός σας θα ξεκινήσει να χρησιμοποιεί τις τροποποιημένες συμβολοσειρές. Πατήστε «Συνέχεια» για να προχωρήσετε στην αποθήκευση.';
$string['customlang:edit'] = 'Επεξεργασία τοπικής μετάφρασης';
$string['customlang:export'] = 'Εξαγωγή τοπικής μετάφρασης';
$string['customlang:view'] = 'Εμφάνιση τοπικής μετάφρασης';
$string['export'] = 'Εξαγωγή προσαρμοσμένων συμβολοσειρών';
$string['exportfilter'] = 'Επιλογή στοιχείου/-ων προς εξαγωγή';
$string['filter'] = 'Φίλτρα συμβολοσειρών';
$string['filtercomponent'] = 'Εμφάνιση συμβολοσειρών από αυτά τα στοιχεία λογισμικού (php σελίδες)<br />(επιλογή με Click, Shift+Click, Ctrl+Click)';
$string['filtercustomized'] = 'Μόνο τροποποιημένες & αποθηκευμένες (πράσινο)';
$string['filtermodified'] = 'Tροποποιημένες σε αυτή την σύνοδο μόνο (μπλε)';
$string['filteronlyhelps'] = 'Μόνο συμβολοσειρές βοήθειας';
$string['filtershowstrings'] = 'Αναζήτηση';
$string['filterstringid'] = 'Όνομα συμβολοσειράς';
$string['filtersubstring'] = 'Μόνο συμβολοσειρές που περιέχουν';
$string['headingcomponent'] = 'Στοιχείο λογισμικού';
$string['headinglocal'] = 'Τοπική προσαρμογή<br />
<small><i>Αν πιστεύετε ότι η μετάφρασή σας είναι καλύτερη από την επίσημη (ή δεν υπάρχει άλλη), μπορείτε να συνεισφέρετε μέσω της <a href="https://lang.moodle.org/local/amos/view.php">Εργαλειοθήκης μετάφρασης AMOS</a>.</i></small>';
$string['headingstandard'] = 'Αρχικό κείμενο<br />
<small><i>Δείτε το <a href="https://moodle.org/mod/glossary/view.php?id=8542&mode=letter&hook=ALL&sortkey&sortorder=asc&fullsearch=0&page=-1">Γλωσσάριο της επίσημης μετάφρασης</a> πριν κάνετε την δική σας.</i></small>';
$string['headingstringid'] = 'Συμβολοσειρά';
$string['import'] = 'Εισαγωγή προσαρμοσμένων συμβολοσειρών';
$string['import_all'] = 'Δημιουργία ή ενημέρωση όλων των συμβολοσειρών από στοιχείο/-εία';
$string['import_mode'] = 'Κατάσταση/τρόπος εισαγωγής';
$string['import_new'] = 'Δημιουργία μόνο συμβολοσειρών χωρίς τοπική προσαρμογή';
$string['import_update'] = 'Ενημέρωση μόνο συμβολοσειρών χωρίς τοπική προσαρμογή';
$string['importfile'] = 'Εισαγωγή αρχείου';
$string['langpack'] = 'Στοιχείο/-εία γλώσσας';
$string['markinguptodate'] = 'Σημείωση της τοπικής προσαρμογής μετάφρασης ως ενημερωμένης';
$string['markinguptodate_help'] = 'Η τοπική προσαρμογή μετάφρασης μπορεί να έχει απαρχαιωθεί, εάν είτε το αρχικό αγγλικό κείμενο ή η επίσημη μετάφραση, έχουν τροποποιηθεί μετά την προσαρμογή στον ιστότοπό σας. Ξανακοιτάξτε την προσαρμογή. Αν την βρείτε ενημερωμένη, ενεργοποιήστε το κουτάκι επιλογής. Διαφορετικά επεξεργαστείτε ξανά την μετάφραση.';
$string['markuptodate'] = 'Σημείωση ως ενημερωμένης';
$string['modifiedno'] = 'Δεν υπάρχουν καθόλου τροποποιημένες συμβολοσειρές για αποθήκευση.';
$string['modifiednum'] = 'Υπάρχουν {$a} τροποποιημένες συμβολοσειρές. Θέλετε να αποθηκεύσετε αυτές τις αλλαγές στο τοπικό πακέτο γλώσσας;';
$string['nolocallang'] = 'Δεν βρέθηκαν τοπικές συμβολοσειρές.';
$string['nostringsfound'] = 'Δεν βρέθηκαν συμβολοσειρές! Παρακαλούμε τροποποιήστε τις ρυθμίσεις στα φίλτρα.';
$string['notice_ignorenew'] = 'Παράβλεψη συμβολοσειράς {$a->component}/{$a->stringid} επειδή δεν είναι προσαρμοσμένη.';
$string['notice_ignoreupdate'] = 'Παράβλεψη συμβολοσειράς {$a->component}/{$a->stringid} επειδή έχει ήδη οριστεί.';
$string['notice_inexitentstring'] = 'Η συμβολοσειρά {$a->compoonent}/{$a->stringid} δεν βρέθηκε.';
$string['notice_missingcomponent'] = 'Λείπει το στοιχείο {$a->component}.';
$string['notice_success'] = 'Η συμβολοσειρά {$a->component}/{$a->stringid} ενημερώθηκε με επιτυχία.';
$string['placeholder'] = 'Δεσμευτικά θέσης';
$string['placeholder_help'] = 'Τα δεσμευτικά θέσης (placeholders) είναι ειδικές δηλώσεις όπως `{$a}` ή `{$a->something}` μέσα σε συμβολοσειρές. Αντικαθίστανται από μια τιμή όταν οι συμβολοσειρές εμφανίζονται. Είναι σημαντικό να αντιγράφονται με ακρίβεια από την αρχική συμβολοσειρά. Μην τα μεταφράσετε!';
$string['placeholderwarning'] = 'περιέχονται δεσμευτικά θέσης!';
$string['pluginname'] = 'Προσαρμογή γλώσσας';
$string['privacy:metadata'] = 'Το πρόσθετο «Προσαρμογή γλώσσας» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['savecheckin'] = 'Αποθήκευση αλλαγών στο πακέτο γλώσσας';
$string['savecontinue'] = 'Εφαρμογή αλλαγών και συνέχεια επεξεργασίας';
