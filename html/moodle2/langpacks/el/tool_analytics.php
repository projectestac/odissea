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
 * Strings for component 'tool_analytics', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Ακρίβεια';
$string['allpredictions'] = 'Όλες οι προβλέψεις';
$string['analysingsitedata'] = 'Ανάλυση του ιστοτόπου...';
$string['analyticmodels'] = 'Μοντέλα αναλυτικής';
$string['bettercli'] = 'Η αξιολόγηση μοντέλων και η δημιουργία προβλέψεων μπορεί να περιλαμβάνει σημαντικό φόρτο επεξεργασίας. Συστήνεται αυτές οι ενέργειες να εκτελούνται μέσω της γραμμής εντολών.';
$string['cantguessenddate'] = 'Αδυναμία πρόβλεψης της ημερομηνίας λήξης';
$string['cantguessstartdate'] = 'Αδυναμία πρόβλεψης της ημερομηνίας έναρξης';
$string['clearmodelpredictions'] = 'Σίγουρα θέλετε να εκκαθαρίσετε όλες τις προβλέψεις «{$a}»;';
$string['clearpredictions'] = 'Εκκαθάριση προβλέψεων';
$string['clienablemodel'] = 'Μπορείτε να ενεργοποιήσετε το μοντέλο επιλέγοντας μια μέθοδο διαίρεσης χρόνου με το αναγνωριστικό της. Σημειώστε ότι μπορείτε επίσης να την ενεργοποιήσετε αργότερα χρησιμοποιώντας τη διεπαφή ιστού («καμία» για έξοδο).';
$string['clievaluationandpredictions'] = 'Μια προγραμματισμένη εργασία εκτελείται για κάθε ενεργοποιημένο μοντέλο και εξάγει προβλέψεις. Η αξιολόγηση των μοντέλων μέσω της διεπαφής ιστού είναι απενεργοποιημένη. Μπορείτε να επιτρέψετε με χειροκίνητο τρόπο την εκτέλεση αυτών των διαδικασιών μέσω της διεπαφής ιστού, απενεργοποιώντας τη ρύθμιση αναλυτικής<a href="{$a}"> «onlycli»</a>(only command line interface: διεπαφή γραμμής εντολών μόνο).';
$string['clievaluationandpredictionsnoadmin'] = 'Μια προγραμματισμένη εργασία εκτελείται για κάθε ενεργοποιημένο μοντέλο και εξάγει προβλέψεις. Η αξιολόγηση των μοντέλων μέσω της διεπαφής ιστού είναι απενεργοποιημένη. Μπορεί να επιτραπεί από ένα διαχειριστή του ιστοτόπου.';
$string['disabled'] = 'Απενεργοποιημένο';
$string['editmodel'] = 'Επεξεργασία του μοντέλου «{$a}»';
$string['edittrainedwarning'] = 'Αυτό το μοντέλο έχει ήδη εκπαιδευτεί. Σημειώστε ότι η αλλαγή των δεικτών ή της μεθόδου διαίρεσης του χρόνου θα διαγράψει τις προηγούμενες προβλέψεις και θα αρχίσει να δημιουργεί νέες προβλέψεις.';
$string['enabled'] = 'Ενεργοποιημένο';
$string['errorcantenablenotimesplitting'] = 'Πρέπει να επιλέξετε μια μέθοδο διαίρεσης χρόνου πριν να ενεργοποιήσετε το μοντέλο';
$string['errornoenabledandtrainedmodels'] = 'Δεν υπάρχουν καθόλου ενεργοποιημένα και εκπαιδευμένα μοντέλα για να γίνουν προβλέψεις.';
$string['errornoenabledmodels'] = 'Δεν υπάρχουν καθόλου ενεργοποιημένα μοντέλα για να εκπαιδευτούν.';
$string['errornoexport'] = 'Μπορούν να εξαχθούν μόνο εκπαιδευμένα μοντέλα';
$string['errornostaticedit'] = 'Στα μοντέλα που βασίζονται σε υποθέσεις δεν μπορεί να γίνει επεξεργασία.';
$string['errornostaticevaluated'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν μπορούν να αξιολογηθούν. Είναι πάντα 100% σωστά σε σχέση με το πως ορίστηκαν.';
$string['errornostaticlog'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν μπορούν να αξιολογηθούν διότι δεν υπάρχουν καταγραφές απόδοσης.';
$string['erroronlycli'] = 'Επιτρέπεται εκτέλεση μόνο από γραμμή εντολών';
$string['errortrainingdataexport'] = 'Τα δεδομένα εκπαίδευσης μοντέλου δεν μπορούσαν να εξαχθούν';
$string['evaluate'] = 'Αξιολόγηση';
$string['evaluatemodel'] = 'Αξιολόγηση μοντέλου';
$string['evaluationinbatches'] = 'Τα περιεχόμενα του ιστοτόπου υπολογίζονται και αποθηκεύονται σε δέσμες. Η διαδικασία αξιολόγησης μπορεί να διακοπεί ανά πάσα στιγμή. Την επόμενη φορά που θα εκτελεστεί, θα συνεχιστεί από το σημείο που σταμάτησε.';
$string['export'] = 'Εξαγωγή';
$string['exporttrainingdata'] = 'Εξαγωγή δεδομένων εκπαίδευσης';
$string['extrainfo'] = 'Πληροφορίες';
$string['generalerror'] = 'Σφάλμα αξιολόγησης. Κωδικός κατάστασης {$a}';
$string['getpredictions'] = 'Πάρτε προβλέψεις';
$string['getpredictionsresults'] = 'Αποτελέσματα με χρήση  {$a->name} για τη διαίρεση της διάρκειας του μαθήματος';
$string['getpredictionsresultscli'] = 'Αποτελέσματα με χρήση της διαίρεσης χρόνου διάρκειας μαθήματος {$a->name} (αναγνωριστικό: {$a->id})';
$string['goodmodel'] = 'Αυτό είναι ένα καλό μοντέλο για χρήση για την δημιουργία προβλέψεων. Ενεργοποιήστε το για να ξεκινήσουν να δημιουργούνται προβλέψεις.';
$string['indicators'] = 'Δείκτες';
$string['info'] = 'Πληροφορίες';
$string['insights'] = 'Ενοράσεις';
$string['invalidanalysables'] = 'Άκυρα στοιχεία ιστοτόπου';
$string['invalidanalysablesinfo'] = 'Αυτή η σελίδα παραθέτει τα προς ανάλυση στοιχεία αυτού του ιστοτόπου που δεν μπορούν να χρησιμοποιηθούν από αυτό το μοντέλο πρόβλεψης. Τα στοιχεία της λίστας ούτε μπορούν να χρησιμοποιηθούν για την κατάρτιση του μοντέλου πρόβλεψης, ούτε το μοντέλο πρόβλεψης μπορεί να δώσει προβλέψεις για αυτά.';
$string['invalidanalysablestable'] = 'Πίνακας μη έγκυρων προς ανάλυση στοιχείων ιστοτόπου';
$string['invalidprediction'] = 'Άκυρο για λήψη προβλέψεων';
$string['invalidtraining'] = 'Άκυρο για εκπαίδευση του μοντέλου';
$string['loginfo'] = 'Καταγραφή επιπλέον πληροφοριών';
$string['modelid'] = 'Αναγνωριστικό μοντέλου';
$string['modelinvalidanalysables'] = 'Μη έγκυρα προς ανάλυση στοιχεία για το μοντέλο «{$a}»';
$string['modelresults'] = '{$a} αποτελέσματα';
$string['modeltimesplitting'] = 'Διαίρεση χρόνου';
$string['nextpage'] = 'Επόμενη σελίδα';
$string['nodatatoevaluate'] = 'Δεν υπάρχουν δεδομένα για να αξιολογηθεί το μοντέλο';
$string['nodatatopredict'] = 'Δεν υπάρχουν νέα στοιχεία για να γίνουν προβλέψεις για αυτά';
$string['nodatatotrain'] = 'Δεν υπάρχουν νέα δεδομένα που να μπορούν να χρησιμοποιηθούν για εκπαίδευση';
$string['noinvalidanalysables'] = 'Αυτός ο ιστότοπος δεν περιέχει κανένα μη έγκυρο προς ανάλυση στοιχείο.';
$string['notdefined'] = 'Χωρίς ορισμό ακόμη';
$string['pluginname'] = 'Αναλυτικά μοντέλα';
$string['predictionprocessfinished'] = 'Η διαδικασία πρόβλεψης ολοκληρώθηκε';
$string['predictionresults'] = 'Αποτελέσματα πρόβλεψης';
$string['predictmodels'] = 'Μοντέλα πρόβλεψης';
$string['predictorresultsin'] = 'Πληροφορίες καταγραφών προβλέψεων στον κατάλογο «{$a}»';
$string['previouspage'] = 'Προηγούμενη σελίδα';
$string['privacy:metadata'] = 'Το πρόσθετο «Αναλυτικά μοντέλα» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['sameenddate'] = 'Η τρέχουσα ημερομηνία λήξης είναι καλή';
$string['samestartdate'] = 'Η τρέχουσα ημερομηνία έναρξης είναι καλή';
$string['target'] = 'Στόχος';
$string['timesplittingnotdefined'] = 'Η διαίρεση χρόνου δεν ορίστηκε.';
$string['timesplittingnotdefined_help'] = 'Πρέπει να επιλέξετε μια μέθοδο διαίρεσης χρόνου πριν να ενεργοποιήσετε το μοντέλο.';
$string['trainandpredictmodel'] = 'Εκπαίδευση μοντέλου και υπολογισμός προβλέψεων';
$string['trainingprocessfinished'] = 'Η διαδικασία εκπαίδευσης ολοκληρώθηκε';
$string['trainingresults'] = 'Αποτελέσματα εκπαίδευσης';
$string['trainmodels'] = 'Μοντέλα εκπαίδευσης';
$string['viewlog'] = 'Καταγραφές';
$string['weeksenddateautomaticallyset'] = 'Η ημερομηνία λήξης ορίστηκε αυτόματα με βάση την ημερομηνία έναρξης και τον αριθμό των τμημάτων';
$string['weeksenddatedefault'] = 'Η ημερομηνία λήξης υπολογίστηκε με βάση την ημερομηνία έναρξης.';
