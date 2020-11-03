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
 * Strings for component 'gradingform_rubric', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_rubric
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Προσθήκη κριτηρίου';
$string['additionalfeedback'] = 'Επιπρόσθετη ανατροφοδότηση';
$string['alwaysshowdefinition'] = 'Επιτρέψτε στους χρήστες την προεπισκόπηση της ρουμπρίκας (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric) (αλλιώς θα εμφανίζεται μόνο μετά τη βαθμολόγηση)';
$string['backtoediting'] = 'Επιστροφή στην επεξεργασία';
$string['confirmdeletecriterion'] = 'Σίγουρα θέλετε να διαγραφεί αυτό το κριτήριο;';
$string['confirmdeletelevel'] = 'Σίγουρα θέλετε να διαγραφεί αυτό το επίπεδο;';
$string['criterion'] = 'Κριτήριο {$a}';
$string['criterionaddlevel'] = 'Προσθήκη επιπέδου';
$string['criteriondelete'] = 'Διαγραφή κριτηρίου';
$string['criterionduplicate'] = 'Αντίγραφο κριτηρίου';
$string['criterionempty'] = 'Κάντε κλικ εδώ για να επεξεργαστείτε το κριτήριο';
$string['criterionmovedown'] = 'Μετακίνηση κάτω';
$string['criterionmoveup'] = 'Μετακίνηση πάνω';
$string['criterionremark'] = 'Σχόλιο για το κριτήριο {$a->description}: {$a->remark}';
$string['definerubric'] = 'Ορισμός ρουμπρίκας';
$string['description'] = 'Περιγραφή';
$string['enableremarks'] = 'Να επιτρέπεται στον βαθμολογητή να προσθέσει παρατηρήσεις κειμένου για κάθε κριτήριο';
$string['err_mintwolevels'] = 'Κάθε κριτήριο πρέπει να έχει τουλάχιστον δύο επίπεδα';
$string['err_nocriteria'] = 'Η ρουμπρίκα (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric) πρέπει να περιέχει τουλάχιστον ένα κριτήριο';
$string['err_nodefinition'] = 'Ο ορισμός του επιπέδου δεν μπορεί να είναι κενός';
$string['err_nodescription'] = 'Η περιγραφή κριτηρίου δεν μπορεί να είναι κενή';
$string['err_novariations'] = 'Τα επίπεδα κριτηρίων δεν μπορεί να αξίζουν όλα τον ίδιο αριθμό πόντων';
$string['err_scoreformat'] = 'Ο αριθμός των πόντων για κάθε επίπεδο πρέπει να είναι ένας έγκυρος αριθμός.';
$string['err_totalscore'] = 'Ο μέγιστος δυνατός αριθμός πόντων κατά την βαθμολόγηση με την ρουμπρίκα (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric), πρέπει να είναι μεγαλύτερος από 0';
$string['gradingof'] = 'Βαθμολόγηση {$a}';
$string['level'] = 'Επίπεδο {$a->definition}, {$a->score} πόντοι.';
$string['leveldefinition'] = 'Ορισμός επιπέδου {$a}
 ';
$string['leveldelete'] = 'Διαγραφή επιπέδου {$a}';
$string['levelempty'] = 'Κάντε κλικ για να επεξεργαστείτε το επίπεδο';
$string['levelsgroup'] = 'Ομάδα επιπέδων';
$string['lockzeropoints'] = 'Υπολογισμός βαθμού με ελάχιστο σκορ τον ελάχιστο επιτεύξιμο βαθμό για τη ρουμπρίκα';
$string['lockzeropoints_help'] = 'Αυτή η ρύθμιση ισχύει μόνο εάν το άθροισμα του ελάχιστου αριθμού πόντων για κάθε κριτήριο είναι μεγαλύτερο από 0.
Εάν επιλεγεί, ο ελάχιστος βαθμός για τη δραστηριότητα θα είναι ο ελάχιστος επιτεύξιμος βαθμός για τη ρουμπρίκα.
Αν δεν επιλεγεί, το ελάχιστο δυνατό σκορ για τη ρουμπρίκα θα αντιστοιχηθεί στον ελάχιστο βαθμό που είναι διαθέσιμος για τη δραστηριότητα (ο οποίος είναι 0 εκτός αν χρησιμοποιείται κάποια κλίμακα).';
$string['name'] = 'Όνομα';
$string['needregrademessage'] = 'Ο ορισμός της ρουμπρίκας άλλαξε αφού αυτός ο μαθητής είχε βαθμολογηθεί. Ο μαθητής δεν μπορεί να δει αυτή τη ρουμπρίκα μέχρι να την ελέγξετε και να ενημερώσετε τον βαθμό.';
$string['notset'] = 'Μη ορισμένο';
$string['pluginname'] = 'Ρουμπρίκα';
$string['pointsvalue'] = '{$a} πόντοι';
$string['previewrubric'] = 'Προεπισκόπιση ρουμπρίκας';
$string['privacy:metadata:criterionid'] = 'Ένα αναγνωριστικό για ένα συγκεκριμένο κριτήριο που βαθμολογείται.';
$string['privacy:metadata:fillingssummary'] = 'Αποθηκεύει πληροφορίες σχετικά με τον βαθμό χρήστη που δημιουργείται από την ρουμπρίκα.';
$string['privacy:metadata:instanceid'] = 'Αναγνωριστικό που σχετίζεται με έναν βαθμό σε μια δραστηριότητα.';
$string['privacy:metadata:levelid'] = 'Το επίπεδο που προκύπτει από την ρουμπρίκα.';
$string['privacy:metadata:remark'] = 'Παρατηρήσεις σχετικά με το κριτήριο της ρουμπρίκας που αξιολογείται.';
$string['regrademessage1'] = 'Πρόκειται να αποθηκεύσετε αλλαγές σε μια ρουμπρίκα (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric) η οποία έχει ήδη χρησιμοποιηθεί για βαθμολόγηση. Παρακαλούμε να επισημάνετε αν οι υπάρχοντες βαθμοί χρειάζονται επανεξέταση. Αν ενεργοποιήσετε αυτή την επιλογή, τότε η ρουμπρίκα θα παραμείνει κρυμμένη από τους μαθητές μέχρι να αναβαθμολογηθεί η απάντησή τους.';
$string['regrademessage5'] = 'Πρόκειται να αποθηκεύσετε αλλαγές σε μια ρουμπρίκα (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric) η οποία έχει ήδη χρησιμοποιηθεί για βαθμολόγηση. Η τιμές στο βαθμολόγιο δεν θα αλλάξουν, αλλά η ρουμπρίκα θα παραμείνει κρυμμένη από τους μαθητές μέχρι να αναβαθμολογηθεί η απάντησή τους.';
$string['regradeoption0'] = 'Να μην γίνει επισήμανση για αναβαθμολόγηση';
$string['regradeoption1'] = 'Επισήμανση για αναβαθμολόγηση';
$string['restoredfromdraft'] = 'ΣΗΜΕΙΩΣΗ: Η τελευταία προσπάθεια βαθμολόγησης αυτού του ατόμου δεν αποθηκεύτηκε σωστά, οπότε προσχέδια βαθμών επαναφέρθηκαν. Εάν θέλετε να ακυρώσετε αυτές τις αλλαγές, χρησιμοποιήστε το κουμπί «Ακύρωση» παρακάτω.';
$string['rubric'] = 'Ρουμπρίκα';
$string['rubricmapping'] = 'Σκορ στους κανόνες αντιστοίχισης βαθμών';
$string['rubricmappingexplained'] = 'Το ελάχιστο δυνατό σκορ για αυτήν την ρουμπρίκα είναι <b>{$a->minscore} πόντοι</b>. Θα μετατραπεί στον ελάχιστο διαθέσιμο βαθμό για τη δραστηριότητα (που είναι 0 εκτός αν χρησιμοποιείται κλίμακα). Το μέγιστο σκορ των <b>{$a->maxscore} πόντων</b> θα μετατραπεί στο μέγιστο βαθμό. Τα ενδιάμεσα σκορ θα μετατραπούν αντίστοιχα.

Αν χρησιμοποιείται κλίμακα για τους βαθμούς, το σκορ θα στρογγυλοποιηθεί και θα μετατραπεί στα στοιχεία της κλίμακας σαν να ήταν διαδοχικοί ακέραιοι αριθμοί.

Αυτός ο υπολογισμός βαθμού μπορεί να αλλάξει τροποποιώντας την φόρμα και τικάροντας το κουτάκι «Υπολογισμός βαθμού με ελάχιστο σκορ τον ελάχιστο επιτεύξιμο βαθμό για τη ρουμπρίκα».';
$string['rubricnotcompleted'] = 'Παρακαλούμε, επιλέξτε κάτι για κάθε κριτήριο';
$string['rubricoptions'] = 'Επιλογές ρουμπρίκας';
$string['rubricstatus'] = 'Τρέχουσα κατάσταση ρουμπρίκας';
$string['save'] = 'Αποθήκευση';
$string['saverubric'] = 'Αποθήκευση και προετοιμασία ρουμπρίκας';
$string['saverubricdraft'] = 'Αποθήκευση ως προσχέδιο';
$string['scoreinputforlevel'] = 'Εισαγωγή σκορ για το επίπεδο {$a}';
$string['scorepostfix'] = '{$a} πόντοι';
$string['showdescriptionstudent'] = 'Εμφάνιση περιγραφής ρουμπρίκας στους βαθμολογούμενους';
$string['showdescriptionteacher'] = 'Εμφάνιση περιγραφής ρουμπρίκας κατά τη διάρκεια της αξιολόγησης';
$string['showremarksstudent'] = 'Εμφάνιση παρατηρήσεων σε αυτούς που βαθμολογούνται';
$string['showscorestudent'] = 'Εμφάνιση πόντων για κάθε επίπεδο σε αυτούς που βαθμολογούνται';
$string['showscoreteacher'] = 'Εμφάνιση πόντων για κάθε επίπεδο κατά την αξιολόγηση';
$string['sortlevelsasc'] = 'Διάταξη ταξινόμησης για επίπεδα:';
$string['sortlevelsasc0'] = 'Φθίνουσα κατά αριθμό πόντων';
$string['sortlevelsasc1'] = 'Αύξουσα κατά αριθμό πόντων';
$string['zerolevelsabsent'] = 'Προειδοποίηση: Το ελάχιστο δυνατό σκορ για αυτή τη ρουμπρίκα δεν είναι 0· αυτό μπορεί να οδηγήσει σε μη αναμενόμενες βαθμολογίες για τη δραστηριότητα. Για να αποφευχθεί αυτό, κάθε κριτήριο πρέπει να έχει ένα επίπεδο με 0 βαθμούς.<br>
Αυτή η προειδοποίηση μπορεί να αγνοηθεί εάν μια κλίμακα χρησιμοποιείται για βαθμολόγηση, και τα ελάχιστα επίπεδα στη ρουμπρίκα αντιστοιχούν στην ελάχιστη τιμή της κλίμακας.';
