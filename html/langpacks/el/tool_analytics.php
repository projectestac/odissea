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
 * Strings for component 'tool_analytics', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Ακρίβεια';
$string['actionexecutedgroupedusefulness'] = 'Ομαδοποιημένες ενέργειες';
$string['actions'] = 'Ενέργειες';
$string['actionsexecutedbyusers'] = 'Ενέργειες που εκτελούνται από χρήστες';
$string['actionsexecutedbyusersfor'] = 'Ενέργειες που εκτελούνται από χρήστες για το μοντέλο «{$a}»';
$string['allpredictions'] = 'Όλες οι προβλέψεις';
$string['alltimesplittingmethods'] = 'Όλα τα χρονικά διαστήματα ανάλυσης';
$string['analysingsitedata'] = 'Ανάλυση του ιστοτόπου...';
$string['analysis'] = 'Ανάλυση';
$string['analyticmodels'] = 'Μοντέλα αναλυτικής';
$string['bettercli'] = 'Η αξιολόγηση μοντέλων και η δημιουργία προβλέψεων μπορεί να περιλαμβάνει σημαντικό φόρτο επεξεργασίας. Συνιστάται αυτές οι ενέργειες να εκτελούνται μέσω της γραμμής εντολών.';
$string['cantguessenddate'] = 'Αδυναμία πρόβλεψης της ημερομηνίας λήξης';
$string['cantguessstartdate'] = 'Αδυναμία πρόβλεψης της ημερομηνίας έναρξης';
$string['classdoesnotexist'] = 'Η κλάση {$a} δεν υπάρχει';
$string['clearmodelpredictions'] = 'Σίγουρα θέλετε να εκκαθαρίσετε όλες τις προβλέψεις «{$a}»;';
$string['clearpredictions'] = 'Εκκαθάριση προβλέψεων';
$string['clienablemodel'] = 'Μπορείτε να ενεργοποιήσετε το μοντέλο επιλέγοντας ένα χρονικό διάστημα ανάλυσης με το αναγνωριστικό του. Σημειώστε ότι μπορείτε επίσης να το ενεργοποιήσετε αργότερα χρησιμοποιώντας τη διεπαφή ιστού («κανένα» για έξοδο).';
$string['clievaluationandpredictions'] = 'Μια προγραμματισμένη εργασία εκτελείται για κάθε ενεργοποιημένο μοντέλο και εξάγει προβλέψεις. Η αξιολόγηση των μοντέλων μέσω της διεπαφής ιστού είναι απενεργοποιημένη. Μπορείτε να επιτρέψετε με χειροκίνητο τρόπο την εκτέλεση αυτών των διαδικασιών μέσω της διεπαφής ιστού, απενεργοποιώντας τη ρύθμιση αναλυτικής<a href="{$a}"> «onlycli»</a>(only command line interface: διεπαφή γραμμής εντολών μόνο).';
$string['clievaluationandpredictionsnoadmin'] = 'Μια προγραμματισμένη εργασία εκτελείται για κάθε ενεργοποιημένο μοντέλο και εξάγει προβλέψεις. Η αξιολόγηση των μοντέλων μέσω της διεπαφής ιστού είναι απενεργοποιημένη. Μπορεί να επιτραπεί από ένα διαχειριστή του ιστοτόπου.';
$string['component'] = 'Στοιχείο';
$string['componentcore'] = 'Βασικά';
$string['componentselect'] = 'Επιλέξτε όλα τα μοντέλα που παρέχονται από το στοιχείο «{$a}»';
$string['componentselectnone'] = 'Αποεπιλογή όλων';
$string['contexts'] = 'Πλαίσια συμφραζομένων';
$string['contexts_help'] = 'Το μοντέλο θα περιοριστεί σε αυτό το σύνολο πλαισίων συμφραζομένων. Αν δεν επιλεγούν καθόλου πλαίσια, δεν θα εφαρμοστεί κανένας περιορισμός πλαισίου.';
$string['createmodel'] = 'Δημιουργία μοντέλου';
$string['currenttimesplitting'] = 'Τρέχον χρονικό διάστημα ανάλυσης';
$string['delete'] = 'Διαγραφή';
$string['deletemodelconfirmation'] = 'Σίγουρα θέλετε να διαγράψετε το «{$a}»; Αυτές οι αλλαγές δεν μπορούν να αναιρεθούν.';
$string['disabled'] = 'Απενεργοποιημένο';
$string['editmodel'] = 'Επεξεργασία του μοντέλου «{$a}»';
$string['edittrainedwarning'] = 'Αυτό το μοντέλο έχει ήδη εκπαιδευτεί. Σημειώστε ότι η αλλαγή των δεικτών του ή του χρονικού διαστήματος ανάλυσης θα διαγράψει τις προηγούμενες προβλέψεις και θα αρχίσει να δημιουργεί νέες προβλέψεις.';
$string['enabled'] = 'Ενεργοποιημένο';
$string['errorcantenablenotimesplitting'] = 'Πρέπει να επιλέξετε ένα χρονικό διάστημα ανάλυσης πριν να ενεργοποιήσετε το μοντέλο';
$string['errornoenabledandtrainedmodels'] = 'Δεν υπάρχουν καθόλου ενεργοποιημένα και εκπαιδευμένα μοντέλα για να γίνουν προβλέψεις.';
$string['errornoenabledmodels'] = 'Δεν υπάρχουν καθόλου ενεργοποιημένα μοντέλα για να εκπαιδευτούν.';
$string['errornoexport'] = 'Μπορούν να εξαχθούν μόνο εκπαιδευμένα μοντέλα';
$string['errornostaticevaluated'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν μπορούν να αξιολογηθούν. Είναι πάντα 100% σωστά σε σχέση με το πως ορίστηκαν.';
$string['errornostaticlog'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν μπορούν να αξιολογηθούν διότι δεν υπάρχουν καταγραφές απόδοσης.';
$string['erroronlycli'] = 'Επιτρέπεται εκτέλεση μόνο από γραμμή εντολών';
$string['errortrainingdataexport'] = 'Τα δεδομένα εκπαίδευσης μοντέλου δεν μπορούσαν να εξαχθούν';
$string['evaluate'] = 'Αξιολόγηση';
$string['evaluatemodel'] = 'Αξιολόγηση μοντέλου';
$string['evaluationinbatches'] = 'Τα περιεχόμενα του ιστοτόπου υπολογίζονται και αποθηκεύονται σε δέσμες. Η διαδικασία αξιολόγησης μπορεί να διακοπεί ανά πάσα στιγμή. Την επόμενη φορά που θα εκτελεστεί, θα συνεχιστεί από το σημείο που σταμάτησε.';
$string['evaluationmode'] = 'Κατάσταση λειτουργίας αξιολόγησης';
$string['evaluationmodecolconfiguration'] = 'Ρυθμίσεις';
$string['evaluationmodecoltrainedmodel'] = 'Εκπαιδευμένο μοντέλο';
$string['evaluationmodeconfiguration'] = 'Αξιολόγηση των ρυθμίσεων του μοντέλου';
$string['evaluationmode_help'] = 'Υπάρχουν δύο καταστάσεις λειτουργίας αξιολόγησης:

* Εκπαιδευμένο μοντέλο - Τα δεδομένα ιστοτόπου χρησιμοποιούνται ως δεδομένα δοκιμών για την αξιολόγηση της ακρίβειας του εκπαιδευμένου μοντέλου.
* Διαμόρφωση - Τα δεδομένα της τοποθεσίας χωρίζονται σε δεδομένα εκπαίδευσης και δοκιμών, τόσο για την εκπαίδευση όσο και για τη δοκιμή της ακρίβειας της διαμόρφωσης του μοντέλου.

Το εκπαιδευμένο μοντέλο είναι διαθέσιμο μόνο αν έχει εισαχθεί στον ιστότοπο ένα εκπαιδευμένο μοντέλο και δεν έχει ακόμα εκπαιδευτεί με χρήση δεδομένων ιστοτόπου.';
$string['evaluationmodeinfo'] = 'Αυτό το μοντέλο έχει εισαχθεί στον ιστότοπο. Μπορείτε είτε να αξιολογήσετε την απόδοση του μοντέλου, είτε να αξιολογήσετε την απόδοση των ρυθμίσεων του μοντέλου χρησιμοποιώντας δεδομένα ιστοτόπου.';
$string['evaluationmodetrainedmodel'] = 'Αξιολόγηση του εκπαιδευμένου μοντέλου';
$string['executescheduledanalysis'] = 'Εκτέλεση προγραμματισμένης ανάλυσης';
$string['export'] = 'Εξαγωγή';
$string['exportincludeweights'] = 'Συμπερίληψη των συντελεστών (βαρύτητας) του εκπαιδευμένου μοντέλου';
$string['exportmodel'] = 'Ρυθμίσεις εξαγωγής';
$string['exporttrainingdata'] = 'Εξαγωγή δεδομένων εκπαίδευσης';
$string['extrainfo'] = 'Πληροφορίες';
$string['generalerror'] = 'Σφάλμα αξιολόγησης. Κωδικός κατάστασης {$a}';
$string['getpredictions'] = 'Πάρτε προβλέψεις';
$string['goodmodel'] = 'Αυτό είναι ένα καλό μοντέλο για χρήση για την δημιουργία προβλέψεων. Ενεργοποιήστε το για να ξεκινήσουν να δημιουργούνται προβλέψεις.';
$string['ignoreversionmismatches'] = 'Αγνόηση αναντιστοιχιών των εκδόσεων';
$string['ignoreversionmismatchescheckbox'] = 'Να αγνοηθούν οι διαφορές μεταξύ αυτής της έκδοσης ιστοτόπου και της αρχικής έκδοσης ιστοτόπου.';
$string['importedsuccessfully'] = 'Το μοντέλο έχει εισαχθεί με επιτυχία.';
$string['importmodel'] = 'Εισαγωγή μοντέλου';
$string['indicators'] = 'Δείκτες';
$string['indicators_help'] = 'Οι δείκτες είναι αυτά που νομίζετε ότι θα οδηγήσουν σε μια ακριβή πρόβλεψη του στόχου.';
$string['indicators_link'] = 'Δείκτες';
$string['indicatorsnum'] = 'Αριθμός δεικτών: {$a}';
$string['info'] = 'Πληροφορίες';
$string['insights'] = 'Ενοράσεις';
$string['insightsreport'] = 'Αναφορά ενοράσεων';
$string['invalidanalysables'] = 'Άκυρα στοιχεία ιστοτόπου';
$string['invalidanalysablesinfo'] = 'Αυτή η σελίδα παραθέτει τα προς ανάλυση στοιχεία αυτού του ιστοτόπου που δεν μπορούν να χρησιμοποιηθούν από αυτό το μοντέλο πρόβλεψης. Τα στοιχεία της λίστας ούτε μπορούν να χρησιμοποιηθούν για την κατάρτιση του μοντέλου πρόβλεψης, ούτε το μοντέλο πρόβλεψης μπορεί να δώσει προβλέψεις για αυτά.';
$string['invalidanalysablestable'] = 'Πίνακας μη έγκυρων προς ανάλυση στοιχείων ιστοτόπου';
$string['invalidcurrenttimesplitting'] = 'Το τρέχον διάστημα ανάλυσης δεν είναι έγκυρο για το στόχο αυτού του μοντέλου. Παρακαλούμε, επιλέξτε ένα διαφορετικό διάστημα.';
$string['invalidindicatorsremoved'] = 'Έχει προστεθεί ένα νέο μοντέλο. Οι δείκτες που δεν λειτουργούν με τον επιλεγμένο στόχο έχουν καταργηθεί αυτόματα.';
$string['invalidprediction'] = 'Άκυρο για λήψη προβλέψεων';
$string['invalidtimesplitting'] = 'Το επιλεγμένο διάστημα ανάλυσης δεν είναι έγκυρο για τον επιλεγμένο στόχο.';
$string['invalidtimesplittinginmodels'] = 'Το διάστημα ανάλυσης που χρησιμοποιείται από ορισμένα μοντέλα είναι μη έγκυρο. Παρακαλούμε, επιλέξτε ένα διαφορετικό διάστημα για τα παρακάτω μοντέλα: {$a}';
$string['invalidtraining'] = 'Άκυρο για εκπαίδευση του μοντέλου';
$string['loginfo'] = 'Καταγραφή επιπλέον πληροφοριών';
$string['missingmoodleversion'] = 'Το εισαγόμενο αρχείο δεν καθορίζει έναν αριθμό έκδοσης';
$string['modelid'] = 'Αναγνωριστικό μοντέλου';
$string['modelinvalidanalysables'] = 'Μη έγκυρα προς ανάλυση στοιχεία για το μοντέλο «{$a}»';
$string['modelname'] = 'Όνομα μοντέλου';
$string['modelresults'] = '{$a} αποτελέσματα';
$string['modeltimesplitting'] = 'Χρονικό διάστημα ανάλυσης';
$string['newmodel'] = 'Νέο μοντέλο';
$string['nextpage'] = 'Επόμενη σελίδα';
$string['noactionsfound'] = 'Οι χρήστες δεν έχουν εκτελέσει καμία ενέργεια στις δημιουργούμενες ενοράσεις.';
$string['nodatatoevaluate'] = 'Δεν υπάρχουν δεδομένα για να αξιολογηθεί το μοντέλο';
$string['nodatatopredict'] = 'Δεν υπάρχουν νέα στοιχεία για να γίνουν προβλέψεις για αυτά.';
$string['nodatatotrain'] = 'Δεν υπάρχουν νέα δεδομένα που να μπορούν να χρησιμοποιηθούν για εκπαίδευση.';
$string['noinvalidanalysables'] = 'Αυτός ο ιστότοπος δεν περιέχει κανένα μη έγκυρο προς ανάλυση στοιχείο.';
$string['notdefined'] = 'Χωρίς ορισμό ακόμη';
$string['pluginname'] = 'Αναλυτικά μοντέλα';
$string['predictionprocessfinished'] = 'Η διαδικασία πρόβλεψης ολοκληρώθηκε';
$string['predictionresults'] = 'Αποτελέσματα πρόβλεψης';
$string['predictmodels'] = 'Μοντέλα πρόβλεψης';
$string['predictorresultsin'] = 'Πληροφορίες καταγραφών προβλέψεων στον κατάλογο «{$a}»';
$string['previouspage'] = 'Προηγούμενη σελίδα';
$string['privacy:metadata'] = 'Το πρόσθετο «Αναλυτικά μοντέλα» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['restoredefault'] = 'Επαναφορά προεπιλεγμένων μοντέλων';
$string['restoredefaultempty'] = 'Επιλέξτε τα μοντέλα που θέλετε να επαναφερθούν.';
$string['restoredefaultinfo'] = 'Αυτά τα προεπιλεγμένα μοντέλα λείπουν ή έχουν αλλάξει από τότε που εγκαταστάθηκαν. Μπορείτε να επαναφέρετε τα επιλεγμένα προεπιλεγμένα μοντέλα.';
$string['restoredefaultnone'] = 'Όλα τα προεπιλεγμένα μοντέλα που παρέχονται από τον πυρήνα και τα εγκατεστημένα πρόσθετα έχουν ήδη δημιουργηθεί. Δεν βρέθηκαν νέα μοντέλα· δεν υπάρχει τίποτα για επαναφορά.';
$string['restoredefaultsome'] = 'Επιτυχής δημιουργία {$account} νέου/-ων μοντέλου/-ων.';
$string['restoredefaultsubmit'] = 'Επαναφορά επιλεγμένων';
$string['sameenddate'] = 'Η τρέχουσα ημερομηνία λήξης είναι καλή';
$string['samestartdate'] = 'Η τρέχουσα ημερομηνία έναρξης είναι καλή';
$string['scheduledanalysisresults'] = 'Αποτελέσματα με χρήση της {$a->name} για τη διαίρεση της διάρκειας του μαθήματος';
$string['scheduledanalysisresultscli'] = 'Αποτελέσματα με χρήση της μεθόδου διαίρεσης χρόνου {$a->name} (αναγνωριστικό: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Επιλέξτε το χρονικό διάστημα ανάλυσης προς χρήση για αξιολόγηση της διαμόρφωσης του μοντέλου.';
$string['target'] = 'Στόχος';
$string['target_help'] = 'Ο στόχος είναι αυτό που το μοντέλο θα προβλέψει.';
$string['target_link'] = 'Στόχοι';
$string['timesplittingnotdefined'] = 'Δεν ορίστηκε χρονικό διάστημα ανάλυσης.';
$string['timesplittingnotdefined_help'] = 'Πρέπει να επιλέξετε ένα χρονικό διάστημα ανάλυσης πριν να ενεργοποιήσετε το μοντέλο.';
$string['trainandpredictmodel'] = 'Εκπαίδευση μοντέλου και υπολογισμός προβλέψεων';
$string['trainingprocessfinished'] = 'Η διαδικασία εκπαίδευσης ολοκληρώθηκε';
$string['trainingresults'] = 'Αποτελέσματα εκπαίδευσης';
$string['trainmodels'] = 'Μοντέλα εκπαίδευσης';
$string['versionnotsame'] = 'Το εισαγόμενο αρχείο ήταν από μια διαφορετική έκδοση ({$a->importedversion}) από την τρέχουσα ({$a->version})';
$string['viewlog'] = 'Καταγραφές αξιολόγησης';
$string['weeksenddateautomaticallyset'] = 'Η ημερομηνία λήξης ορίστηκε αυτόματα με βάση την ημερομηνία έναρξης και τον αριθμό των τμημάτων';
$string['weeksenddatedefault'] = 'Η ημερομηνία λήξης υπολογίστηκε με βάση την ημερομηνία έναρξης.';
