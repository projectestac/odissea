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
 * Strings for component 'qtype_calculated', language 'el', version '3.11'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Προσθήκη στοιχείου';
$string['addmoreanswerblanks'] = 'Προσθήκη επιπλέον κενής απάντησης.';
$string['addsets'] = 'Προσθήκη σετ';
$string['answerdisplay'] = 'Εμφάνιση απάντησης';
$string['answerformula'] = 'Τύπος/φόρμουλα {$a} απάντησης';
$string['answerhdr'] = 'Απάντηση';
$string['answerstoleranceparam'] = 'Παράμετροι ανοχής απαντήσεων';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Οποιαδήποτε τιμή';
$string['atleastoneanswer'] = 'Πρέπει να δώσετε τουλάχιστον μια απάντηση.';
$string['atleastonerealdataset'] = 'Θα πρέπει να υπάρχει τουλάχιστον ένα πραγματικό σύνολο δεδομένων στο κείμενο της ερώτησης';
$string['atleastonewildcard'] = 'Πρέπει να υπάρχει τουλάχιστον ένα μπαλαντέρ (μια μεταβλητή) στον τύπο/φόρμουλα της απάντησης ή στο κείμενο της ερώτησης';
$string['calcdistribution'] = 'Κατανομή';
$string['calclength'] = 'Δεκαδικές θέσεις';
$string['calcmax'] = 'Μέγιστο';
$string['calcmin'] = 'Ελάχιστο';
$string['choosedatasetproperties'] = 'Επιλογή ιδιοτήτων του συνόλου δεδομένων από το οποίο παίρνει τιμές το μπαλαντέρ (μεταβλητή)';
$string['choosedatasetproperties_help'] = 'Ένα σύνολο δεδομένων είναι ένα σύνολο τιμών που εισάγονται στη θέση ενός μπαλαντέρ. Μπορείτε να δημιουργήσετε ένα ιδιωτικό σύνολο δεδομένων για μια συγκεκριμένη ερώτηση ή ένα κοινόχρηστο σύνολο δεδομένων που μπορεί να χρησιμοποιηθεί και για άλλες ερωτήσεις υπολογισμού εντός της κατηγορίας.';
$string['correctanswerformula'] = 'Φόρμουλα σωστής απάντησης';
$string['correctanswershows'] = 'Φαίνεται η σωστή απάντηση';
$string['correctanswershowsformat'] = 'Μορφότυπος';
$string['correctfeedback'] = 'Για κάθε σωστή απόκριση';
$string['dataitemdefined'] = 'με {$a} αριθμητικές τιμές ήδη ορισμένες, είναι διαθέσιμο';
$string['datasetrole'] = 'Τα μπαλαντέρ <strong>{x..}</strong> θα αντικατασταθούν από μια αριθμητική τιμή από το σύνολο δεδομένων τους';
$string['decimals'] = 'με {$a}';
$string['deleteitem'] = 'Διαγραφή στοιχείου';
$string['deletelastitem'] = 'Διαγραφή τελευταίου στοιχείου';
$string['distributionoption'] = 'Επιλογή κατανομής';
$string['editdatasets'] = 'Επεξεργαστείτε τα σύνολα δεδομένων των μπαλαντέρ';
$string['editdatasets_help'] = 'Οι τιμές μπαλαντέρ μπορούν να δημιουργηθούν εισάγοντας έναν αριθμό σε κάθε πεδίο μπαλαντέρ και κάνοντας κλικ στο κουμπί Προσθήκη. Για να δημιουργήσετε αυτόματα 10 ή περισσότερες τιμές, επιλέξτε τον αριθμό των απαιτούμενων τιμών πριν κάνετε κλικ στο κουμπί Προσθήκη. Ομοιόμορφη κατανομή σημαίνει ότι οποιαδήποτε τιμή μεταξύ των ορίων είναι εξίσου πιθανό να δημιουργηθεί. μια λογαριθμικά ομοιόμορφη κατανομή σημαίνει ότι οι τιμές προς το κατώτερο όριο είναι πιο πιθανές.';
$string['editdatasets_link'] = 'ερώτηση/τύπος/υπολογισμού';
$string['existingcategory1'] = 'θα χρησιμοποιήσει ένα υπάρχον διαμοιραζόμενο σύνολο δεδομένων';
$string['existingcategory2'] = 'ένα αρχείο από ένα ήδη υπάρχον σύνολο αρχείων που χρησιμοποιούνται επίσης από άλλες ερωτήσεις σε αυτήν την κατηγορία';
$string['existingcategory3'] = 'ένας σύνδεσμος από ένα ήδη υπάρχον σύνολο συνδέσμων που χρησιμοποιούνται επίσης από άλλες ερωτήσεις σε αυτήν την κατηγορία';
$string['forceregeneration'] = 'επιβολή επαναδημιουργίας';
$string['forceregenerationall'] = 'επιβολή επαναδημιουργίας όλων των μπαλαντέρ';
$string['forceregenerationshared'] = 'επιβολή επαναδημιουργίας μόνο των μη κοινόχρηστων μπαλαντέρ';
$string['functiontakesatleasttwo'] = 'Η συνάρτηση {$a} πρέπει να έχει τουλάχιστον δύο ορίσματα';
$string['functiontakesnoargs'] = 'Η συνάρτηση {$a} δεν παίρνει καθόλου ορίσματα';
$string['functiontakesonearg'] = 'Η συνάρτηση {$a} πρέπει να έχει ακριβώς ένα όρισμα';
$string['functiontakesoneortwoargs'] = 'Η συνάρτηση {$a} πρέπει να έχει ή ένα ή δύο ορίσματα';
$string['functiontakestwoargs'] = 'Η συνάρτηση {$a} πρέπει να έχει ακριβώς δύο ορίσματα';
$string['generatevalue'] = 'Δημιουργία μιας νέας τιμής μεταξύ';
$string['getnextnow'] = 'Αποκτήστε τώρα ένα νέο «Στοιχείο για προσθήκη»';
$string['hexanotallowed'] = 'Δεν επιτρέπεται η τιμή δεκαεξαδικού μορφότυπου {$a->value} του συνόλου δεδομένων <strong>{$a->name}</strong>';
$string['illegalformulasyntax'] = 'Ανεπίτρεπτη σύνταξη τύπου/φόρμουλας που ξεκινάει με «{$a}»';
$string['incorrectfeedback'] = 'Για κάθε λανθασμένη απόκριση';
$string['itemno'] = 'Στοιχείο {$a}';
$string['itemscount'] = 'Στοιχεία<br />Πλήθος';
$string['itemtoadd'] = 'Στοιχείο για προσθήκη';
$string['keptcategory1'] = 'θα χρησιμοποιηθεί το ίδιο υπάρχον διαμοιραζόμενο σύνολο δεδομένων όπως και πριν';
$string['keptcategory2'] = 'ένα αρχείο από ένα επαναχρησιμοποιήσιμο σύνολο αρχείων ίδιας κατηγορίας όπως και πριν';
$string['keptcategory3'] = 'ένας σύνδεσμος από ένα επαναχρησιμοποιήσιμο σύνολο συνδέσμων ίδιας κατηγορίας όπως και πριν';
$string['keptlocal1'] = 'θα χρησιμοποιηθεί το ίδιο υπάρχον ιδιωτικό σύνολο δεδομένων όπως και πριν';
$string['keptlocal2'] = 'ένα αρχείο από το ιδιωτικό σύνολο αρχείων της ίδιας ερώτησης όπως πριν';
$string['keptlocal3'] = 'ένας σύνδεσμος από το ιδιωτικό σύνολο συνδέσμων της ίδιας ερώτησης όπως πριν';
$string['lengthoption'] = 'Επιλογή μήκους';
$string['loguniform'] = 'Λογαριθμικά ομοιόμορφη';
$string['loguniformbit'] = 'ψηφία, από λογαριθμικά ομοιόμορφη (loguniform) κατανομή';
$string['makecopynextpage'] = 'Επόμενη σελίδα (νέα ερώτηση)';
$string['mandatoryhdr'] = 'Υποχρεωτικοί χαρακτήρες μπαλαντέρ παρόντες στις ερωτήσεις';
$string['max'] = 'Μέγιστο';
$string['min'] = 'Ελάχιστο';
$string['minmax'] = 'Διάστημα τιμών';
$string['missingformula'] = 'Λείπει τύπος/φόρμουλα';
$string['missingname'] = 'Όνομα ερώτησης που λείπει';
$string['missingquestiontext'] = 'Κείμενο ερώτησης που λείπει';
$string['mustenteraformulaorstar'] = 'Πρέπει να εισαγάγετε έναν τύπο/φόρμουλα ή «*».';
$string['newcategory1'] = 'θα χρησιμοποιηθεί ένα νέο κοινό σύνολο δεδομένων';
$string['newcategory2'] = 'ένα αρχείο από ένα νέο σύνολο αρχείων που μπορεί επίσης να χρησιμοποιηθεί από άλλες ερωτήσεις σε αυτήν την κατηγορία';
$string['newcategory3'] = 'ένας σύνδεσμος από ένα νέο σύνολο συνδέσμων που μπορεί επίσης να χρησιμοποιηθεί από άλλες ερωτήσεις σε αυτήν την κατηγορία';
$string['newlocal1'] = 'θα χρησιμοποιηθεί ένα νέο ιδιωτικό σύνολο δεδομένων';
$string['newlocal2'] = 'ένα αρχείο από ένα νέο σύνολο αρχείων που θα χρησιμοποιηθεί μόνο από αυτήν την ερώτηση';
$string['newlocal3'] = 'ένας σύνδεσμος από ένα νέο σύνολο συνδέσμων που θα χρησιμοποιηθεί μόνο από αυτήν την ερώτηση';
$string['newsetwildcardvalues'] = 'νέο(-α) σύνολο(-α) τιμών μπαλαντέρ';
$string['nextitemtoadd'] = 'Επόμενο «Στοιχείο για προσθήκη»';
$string['nextpage'] = 'Επόμενη σελίδα';
$string['nocoherencequestionsdatyasetcategory'] = 'Για την ερώτηση με αναγνωριστικό {$a->qid}, η κατηγορία με αναγνωριστικό {$a->qcat} δεν είναι πανομοιότυπη με την κοινόχρηστη κατηγορία μπαλαντέρ {$a->name} με αναγνωριστικό {$a->sharedcat}. Τροποποιήστε την ερώτηση.';
$string['nocommaallowed'] = 'Το κόμμα «,» δεν μπορεί να χρησιμοποιηθεί. Χρησιμοποιήστε τελεία «.» όπως π.χ. 0.013 ή στο 1.3e-2';
$string['nodataset'] = 'τίποτα - δεν είναι μπαλαντέρ';
$string['nosharedwildcard'] = 'Δεν υπάρχει χαρακτήρας μπαλαντέρ σε αυτήν την κατηγορία';
$string['notvalidnumber'] = 'Η αποτίμηση (τιμή) του μπαλαντέρ
 δεν είναι έγκυρος αριθμός';
$string['oneanswertrueansweroutsidelimits'] = 'Τουλάχιστον μία σωστή απάντηση εκτός των πραγματικών ορίων τιμής.<br /> Τροποποιήστε τις ρυθμίσεις ανοχής απαντήσεων που είναι διαθέσιμες ως Προχωρημένες παράμετροι';
$string['param'] = 'Παράμετρος {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Για κάθε μερικώς σωστή απόκριση';
$string['pluginname'] = 'Τύπος υπολογισμού';
$string['pluginname_help'] = 'Οι υπολογιζόμενες ερωτήσεις επιτρέπουν τη δημιουργία μεμονωμένων αριθμητικών ερωτήσεων με τη χρήση μπαλαντέρ σε άγκιστρα, οι οποίες αντικαθίστανται με μεμονωμένες τιμές κατά τη λήψη του κουίζ. Για παράδειγμα, η ερώτηση «Ποιό είναι το εμβαδόν ενός ορθογωνίου μήκους {l} και πλάτους {w};» θα είχε τη σωστή φόρμουλα/τύπο απάντησης «{l}*{w}» (όπου * δηλώνει τον πολλαπλασιασμό).';
$string['pluginname_link'] = 'ερώτηση/τύπος/υπολογισμού';
$string['pluginnameadding'] = 'Προσθήκη μιας υπολογισμένης ερώτησης';
$string['pluginnameediting'] = 'Τροποποίηση μιας υπολογισμένης ερώτησης';
$string['pluginnamesummary'] = 'Οι υπολογισμένες ερωτήσεις είναι σαν τις αριθμητικές ερωτήσεις αλλά οι αριθμοί που χρησιμοποιούνται διαλέγονται τυχαία από ένα σύνολο όταν διεξάγεται το κουίζ.';
$string['possiblehdr'] = 'Πιθανοί χαρακτήρες μπαλαντέρ παρουσιάζονται μόνο στο κείμενο της ερώτησης';
$string['privacy:metadata'] = 'Το πρόσθετο «Ερωτήσεις υπολογιστικού τύπου» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['questiondatasets'] = 'Σύνολα δεδομένων ερώτησης';
$string['questiondatasets_help'] = 'Σύνολα δεδομένων ερώτησης των μπαλαντέρ που θα χρησιμοποιούνται σε κάθε ιδιαίτερη ερώτηση';
$string['questionstoredname'] = 'Όνομα αποθηκευμένης ερώτησης';
$string['replacewithrandom'] = 'Αντικαταστήστε με τυχαία τιμή';
$string['reuseifpossible'] = 'επαναχρησιμοποιήστε την προηγούμενη τιμή, εάν είναι διαθέσιμη';
$string['setno'] = 'Σύνολο {$a}';
$string['setwildcardvalues'] = 'σύνολο(α) τιμών μπαλαντέρ';
$string['sharedwildcard'] = 'Διαμοιραζόμενο μπαλαντέρ {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Κοινόχρηστο μπαλαντέρ';
$string['sharedwildcards'] = 'Διαμοιραζόμενα μπαλαντέρ';
$string['showitems'] = 'Εμφάνιση';
$string['significantfigures'] = 'με {$a}';
$string['significantfiguresformat'] = 'σημαντικά ψηφία';
$string['synchronize'] = 'Συγχρονίστε τα δεδομένα από διαμοιραζόμενα σύνολα δεδομένων με άλλες ερωτήσεις σε ένα κουίζ';
$string['synchronizeno'] = 'Χωρίς συγχρονισμό';
$string['synchronizeyes'] = 'Με συγχρονισμό';
$string['synchronizeyesdisplay'] = 'Συγχρονίστε και εμφανίστε το διαμοιραζόμενο όνομα του συνόλου δεδομένων ως πρόθεμα του ονόματος ερωτήματος';
$string['tolerance'] = 'Ανοχή ±';
$string['tolerancetype'] = 'Τύπος (ανοχής)';
$string['trueanswerinsidelimits'] = 'Η σωστή απάντηση : {$a->correct} είναι μέσα στα όρια της πραγματικής τιμής {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ΣΦΑΛΜΑ Η σωστή απάντηση : {$a->correct} είναι έξω από τα όρια της πραγματικής τιμής {$a->true}</span>';
$string['uniform'] = 'Ομοιόμορφα';
$string['uniformbit'] = 'δεκαδικά ψηφία, από ομοιόμορφη κατανομή';
$string['unsupportedformulafunction'] = 'Η συνάρτηση {$a} δεν υποστηρίζεται';
$string['updatecategory'] = 'Ενημέρωση της κατηγορίας';
$string['updatedatasetparam'] = 'Ενημέρωση των παραμέτρων των συνόλων δεδομένων';
$string['updatetolerancesparam'] = 'Ενημερώστε τις παραμέτρους ανοχής απαντήσεων';
$string['updatewildcardvalues'] = 'Ενημερώστε τις τιμές του/των μπαλαντέρ';
$string['useadvance'] = 'Χρησιμοποιήστε το κουμπί προώθησης για να δείτε τα σφάλματα';
$string['usedinquestion'] = 'Χρησιμοποιείται σε Ερώτηση';
$string['wildcard'] = 'Μπαλαντέρ {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Οι παράμετροι των μπαλαντέρ που χρησιμοποιούνται για τη δημιουργία των τιμών';
$string['wildcardrole'] = 'Τα μπαλαντέρ <strong>{x..}</strong> θα αντικαθίστανται από μια αριθμητική τιμή από τις παραγόμενες τιμές';
$string['wildcards'] = 'Μπαλαντέρ {a}...{z}';
$string['wildcardvalues'] = 'Τιμές μπαλαντέρ';
$string['wildcardvaluesgenerated'] = 'Οι τιμές μπαλαντέρ δημιουργήθηκαν';
$string['youmustaddatleastoneitem'] = 'Πρέπει να προσθέσετε τουλάχιστον ένα στοιχείο συνόλου δεδομένων, για να μπορέσετε να αποθηκεύσετε αυτήν την ερώτηση.';
$string['youmustaddatleastonevalue'] = 'Πρέπει να προσθέσετε τουλάχιστον ένα σύνολο τιμών μπαλαντέρ για να μπορέσετε να αποθηκεύσετε αυτήν την ερώτηση.';
$string['zerosignificantfiguresnotallowed'] = 'Η σωστή απάντηση δεν μπορεί να έχει καθόλου σημαντικά ψηφία!';
