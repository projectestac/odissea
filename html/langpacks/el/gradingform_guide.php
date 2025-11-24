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
 * Strings for component 'gradingform_guide', language 'el', version '4.5'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Προσθήκη ανατροφοδότησης που χρησιμοποιείται συχνά';
$string['addcriterion'] = 'Προσθήκη κριτηρίου';
$string['additionalcomments'] = 'Πρόσθετα σχόλια';
$string['additionalcommentsforcriterion'] = 'Πρόσθετα σχόλια για το κριτήριο, {$a}';
$string['alwaysshowdefinition'] = 'Εμφάνιση του ορισμού του οδηγού στους μαθητές';
$string['backtoediting'] = 'Επιστροφή στην επεξεργασία';
$string['clicktocopy'] = 'Κάντε κλικ για να αντιγραφεί αυτό το κείμενο στα κριτήρια ανατροφοδότησης';
$string['clicktoedit'] = 'Πατήστε για επεξεργασία';
$string['clicktoeditname'] = 'Κάντε κλικ εδώ για να επεξεργαστείτε το όνομα κριτηρίου';
$string['comment'] = 'Σχόλιο';
$string['commentpickerforcriterion'] = 'Επιλογέας συχνά χρησιμοποιούμενων σχολίων για {$a} επιπλέον σχόλια';
$string['comments'] = 'Συχνά χρησιμοποιούμενα σχόλια';
$string['commentsdelete'] = 'Διαγραφή σχολίου';
$string['commentsempty'] = 'Πατήστε για επεξεργασία σχολίου';
$string['commentsmovedown'] = 'Μετακίνηση κάτω';
$string['commentsmoveup'] = 'Μετακίνηση πάνω';
$string['confirmdeletecriterion'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το στοιχείο;';
$string['confirmdeletelevel'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το επίπεδο;';
$string['criterion'] = 'Όνομα κριτηρίου';
$string['criteriondelete'] = 'Διαγραφή κριτηρίου';
$string['criterionempty'] = 'Πατήστε για επεξεργασία κριτηρίου';
$string['criterionmovedown'] = 'Μετακίνηση κάτω';
$string['criterionmoveup'] = 'Μετακίνηση πάνω';
$string['criterionname'] = 'Όνομα κριτηρίου';
$string['criterionremark'] = 'Παρατήρηση κριτηρίου «{$a}»';
$string['definemarkingguide'] = 'Ορισμός οδηγού βαθμολόγησης';
$string['description'] = 'Περιγραφή';
$string['descriptionmarkers'] = 'Περιγραφή για τους βαθμολογητές';
$string['descriptionstudents'] = 'Περιγραφή για τους μαθητές';
$string['err_maxscoreisnegative'] = 'Το μέγιστο σκορ είναι μη έγκυρο. Αρνητικές τιμές δεν επιτρέπονται.';
$string['err_maxscorenotnumeric'] = 'Το κριτήριο μέγιστου σκορ πρέπει να είναι αριθμητικό';
$string['err_nocomment'] = 'Το σχόλιο δεν μπορεί να είναι κενό';
$string['err_nodescription'] = 'Η περιγραφή μαθητή δεν μπορεί να είναι κενή';
$string['err_nodescriptionmarkers'] = 'Η περιγραφή βαθμολογητή δεν μπορεί να είναι κενή';
$string['err_nomaxscore'] = 'Το κριτήριο μέγιστου σκορ δεν μπορεί να είναι κενό';
$string['err_noshortname'] = 'Το όνομα κριτηρίου δεν μπορεί να είναι κενό';
$string['err_scoreinvalid'] = 'Το σκορ που δόθηκε ((στο κριτήριο)) «{$a->criterianame}» είναι μη έγκυρο. Το μέγιστο σκορ είναι: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Το σκορ που δόθηκε ((στο κριτήριο)) «{$a->criterianame}» είναι μη έγκυρο. Αρνητικές τιμές δεν επιτρέπονται.';
$string['err_shortnametoolong'] = 'Το όνομα κριτηρίου πρέπει να είναι μικρότερο από 256 χαρακτήρες';
$string['gradingof'] = 'Βαθμολόγηση {$a}';
$string['guide'] = 'Οδηγός βαθμολόγησης';
$string['guidemappingexplained'] = 'ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Ο οδηγός βαθμολόγησής σας έχει ένα μέγιστο βαθμό <b>{$a->maxscore} πόντων</b> αλλά ο μέγιστος βαθμός που έχει οριστεί στη δραστηριότητά σας είναι {$a->modulegrade}. Το μέγιστο σκορ που ορίζεται στον οδηγό βαθμολόγησής σας, θα προσαρμοστεί (αναλογικά) στο μέγιστο βαθμό (που ορίζεται) στο άρθρωμα δραστηριότητας.<br />Τα ενδιάμεσα σκορ θα μετατραπούν (αναλογικά) και θα στρογγυλοποιηθούν στον πλησιέστερο διαθέσιμο βαθμό.';
$string['guidenotcompleted'] = 'Παρακαλούμε, δώστε μια έγκυρη βαθμολογία για κάθε κριτήριο';
$string['guideoptions'] = 'Ρυθμίσεις οδηγού βαθμολόγησης';
$string['guidestatus'] = 'Τρέχουσα κατάσταση οδηγού βαθμολόγησης';
$string['hidemarkerdesc'] = 'Απόκρυψη περιγραφών κριτηρίων βαθμολογητή';
$string['hidestudentdesc'] = 'Απόκρυψη περιγραφών κριτηρίων μαθητή';
$string['informationforcriterion'] = '{$a} πληροφορίες';
$string['insertcomment'] = 'Εισαγάγετε συχνά χρησιμοποιούμενο σχόλιο';
$string['maxscore'] = 'Μέγιστο σκορ';
$string['name'] = 'Όνομα';
$string['needregrademessage'] = 'Ο ορισμός του οδηγού βαθμολόγησης άλλαξε μετά την βαθμολόγηση αυτού του μαθητή. Ο μαθητής δεν μπορεί να δει αυτόν τον οδηγό βαθμολόγησης μέχρι να ελέγξετε τον οδηγό βαθμολόγησης και να ενημερώσετε τον βαθμό.';
$string['outof'] = 'Σκορ στα {$a}';
$string['pluginname'] = 'Οδηγός βαθμολόγησης';
$string['previewmarkingguide'] = 'Προεπισκόπηση οδηγού βαθμολόγησης';
$string['privacy:metadata:criterionid'] = 'Ένα αναγνωριστικό για ένα κριτήριο για προχωρημένη βαθμολόγηση.';
$string['privacy:metadata:fillingssummary'] = 'Αποθηκεύει πληροφορίες σχετικά με τη βαθμολογία και την ανατροφοδότηση ενός χρήστη για τον οδηγό βαθμολόγησης.';
$string['privacy:metadata:instanceid'] = 'Ένα αναγνωριστικό σε έναν βαθμό που χρησιμοποιείται από μια δραστηριότητα.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Εάν θα εμφανίζονται περιγραφές κριτηρίων βαθμολογητή';
$string['privacy:metadata:preference:showstudentdesc'] = 'Εάν θα εμφανίζονται περιγραφές κριτηρίων μαθητή';
$string['privacy:metadata:remark'] = 'Παρατηρήσεις σχετικά με αυτό το κριτήριο βαθμού.';
$string['privacy:metadata:score'] = 'Ένα σκορ για αυτό το κριτήριο βαθμού';
$string['regrademessage1'] = 'Πρόκειται να αποθηκεύσετε αλλαγές σε ένα οδηγό βαθμολόγησης ο οποίος έχει ήδη χρησιμοποιηθεί για βαθμολόγηση. Παρακαλούμε να επισημάνετε αν οι υπάρχοντες βαθμοί χρειάζονται επανεξέταση. Αν ενεργοποιήσετε αυτή την επιλογή, τότε ο οδηγός βαθμολόγησης θα παραμείνει κρυμμένος από τους μαθητές μέχρι να αναβαθμολογηθεί η απάντησή τους.';
$string['regrademessage5'] = 'Πρόκειται να αποθηκεύσετε σημαντικές αλλαγές σε έναν οδηγό βαθμολόγησης που έχει ήδη χρησιμοποιηθεί για βαθμολόγηση. Η τιμή στο βαθμολόγιο θα παραμείνει αμετάβλητη, αλλά ο οδηγός βαθμολόγησης θα αποκρύπτεται από τους μαθητές έως ότου το στοιχείο τους ξαναβαθμολογηθεί.';
$string['regradeoption0'] = 'Να μην γίνει επισήμανση για αναβαθμολόγηση';
$string['regradeoption1'] = 'Επισήμανση για αναβαθμολόγηση';
$string['remark_help'] = 'Εισαγάγετε τυχόν επιπλέον σχόλια σχετικά με αυτό το κριτήριο.';
$string['restoredfromdraft'] = 'ΣΗΜΕΙΩΣΗ: Η τελευταία προσπάθεια βαθμολόγησης αυτού του ατόμου δεν αποθηκεύτηκε σωστά, οπότε προσχέδια βαθμών επαναφέρθηκαν. Εάν θέλετε να ακυρώσετε αυτές τις αλλαγές, χρησιμοποιήστε το κουμπί «Ακύρωση» παρακάτω.';
$string['save'] = 'Αποθήκευση';
$string['saveguide'] = 'Αποθήκευση οδηγού βαθμολόγησης και προετοιμασία του';
$string['saveguidedraft'] = 'Αποθήκευση ως προσχέδιο';
$string['score'] = 'σκορ';
$string['score_help'] = 'Εισαγάγετε ένα σκορ για το κριτήριο {$a->criterion} μεταξύ 0 και {$a->maxscore}.';
$string['scoreforcriterion'] = '{$a} σκορ';
$string['showmarkerdesc'] = 'Εμφάνιση περιγραφών κριτηρίων βαθμολογητή';
$string['showmarkspercriterionstudents'] = 'Εμφάνιση βαθμών ανά κριτήριο στους μαθητές';
$string['showstudentdesc'] = 'Εμφάνιση περιγραφών κριτηρίων μαθητή';
