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
 * Strings for component 'gradingform_erubric', language 'el', version '3.11'.
 *
 * @package     gradingform_erubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Προσθήκη κριτηρίου';
$string['addnew'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Προσθ. (+)';
$string['alwaysshowdefinition'] = 'Να επιτρέπεται η προεπισκόπηση της ρουμπρίκας από τους μαθητές (αλλιώς θα εμφανίζεται μόνο μετά τη βαθμολόγηση)';
$string['backtoediting'] = 'Επιστροφή στην επεξεργασία';
$string['benchmarkfinal'] = 'Τελική τιμή αναφοράς μαθητή';
$string['benchmarkinfo'] = 'Αποτελέσματα Μαθησιακής Αναλυτικής';
$string['benchmarkinfonull'] = 'Δεν υπάρχουν αποτελέσματα Μαθησιακής Αναλυτικής';
$string['collaborationempty'] = 'Τύπος συνεργασίας';
$string['collaborationochoice'] = 'Πρέπει να επιλέξετε τύπο συνεργασίας πριν προσθέσετε εκπαιδευτικούς πόρους!';
$string['collaborationtype'] = 'Τύπου:';
$string['collaborationtypeentries'] = 'αναρτήσεις & συνομιλίες';
$string['collaborationtypefileadds'] = 'υποβολές αρχείων';
$string['collaborationtypeinteractions'] = 'πλήθος αλληλεπιδρώντων';
$string['collaborationtypereplies'] = 'απαντήσεις σε φόρουμ';
$string['confirmchangecriteriontype'] = 'Είστε σίγουροι πως θέλετε να αλλάξετε τον τύπο κριτηρίου; Τα αρθρώματα μαθημάτων τρέχοντος κριτηρίου θα επαναρχικοποιηθούν.';
$string['confirmdeleteactivity'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε αυτή τη δραστηριότητα;';
$string['confirmdeleteassignment'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε αυτή την ανάθεση εργασίας;';
$string['confirmdeletecriterion'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε αυτό το κριτήριο;';
$string['confirmdeletelevel'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε αυτό το επίπεδο;';
$string['confirmdeleteresource'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε αυτόν τον πόρο;';
$string['coursemoduleempty'] = 'Προσθήκη Αρθρώματος Μαθήματος';
$string['coursemoduleis'] = 'Σε:';
$string['criterion'] = 'Κριτήριο {$a}';
$string['criterionaddlevel'] = 'Προσθήκη επιπέδου';
$string['criteriondelete'] = 'Διαγραφή κριτηρίου';
$string['criterionduplicate'] = 'Αντιγραφή κριτηρίου';
$string['criterionempty'] = 'Κλικ εδώ για προσθήκη κριτηρίου';
$string['criterionmovedown'] = 'Μετακίνηση κάτω';
$string['criterionmoveup'] = 'Μετακίνηση πάνω';
$string['criterionoperatorequals'] = 'ίσο (=)';
$string['criterionoperatormorethan'] = 'περισσότερο από (>=)';
$string['criterionremark'] = 'Σχόλιο για το κριτήριο {$a->description}: {$a->remark}';
$string['defineenrichedrubric'] = 'Ορισμός LA e-Rubric (ηλε.Ρουμπρίκα)';
$string['deleteactivity'] = 'Διαγραφή δραστηριότητας';
$string['deleteassignment'] = 'Διαγραφή ανάθεσης εργασίας';
$string['deleteresource'] = 'Διαγραφή πόρου';
$string['description'] = 'Περιγραφή';
$string['enableremarks'] = 'Ενεργοποίηση σχολίων ανά κριτήριο κατά τη βαθμολόγηση';
$string['enrichedrubricinfo'] = 'Κανόνες εμπλουτισμού κριτηρίων ρουμπρίκας';
$string['enrichedrubricinfoexplained'] = 'Τα εμπλουτισμένα κριτήρια θα αξιολογηθούν αυτόματα από το σύστημα, όπως και η επιλογή του κατάλληλου επιπέδου.
Όταν συμβεί αυτό, ο αξιολογητής δεν θα μπορεί να αλλάξει το αποτέλεσμα.<br />
Σε περίπτωση λογικού λάθους των κριτηρίων εμπλουτισμού, δεν θα επιλέγεται αυτόματα επίπεδο,
οπότε οι βαθμοί του συγκεκριμένου κριτηρίου δεν θα προσμετρηθούν και μόνο αν έχει ενεργοποιηθεί η παράκαμψη
ο αξιολογητής θα μπορεί να επιλέξει μόνος του επίπεδο.<br />';
$string['enrichedvalueempty'] = 'Προσθήκη τιμής';
$string['enrichedvaluesuffixfiles'] = 'αρχεία';
$string['enrichedvaluesuffixnothing'] = '<font color="red"><b>!!!</b></font>';
$string['enrichedvaluesuffixpercent'] = 'επί τοις εκατό';
$string['enrichedvaluesuffixpoints'] = 'βαθμοί/100';
$string['enrichedvaluesuffixstudents'] = 'άτομα';
$string['enrichedvaluesuffixtimes'] = 'φορές';
$string['enrichment'] = 'Εμπλουτισμός';
$string['enrichment_help'] = 'Παρακολουθήστε την ταινία παραδείγματος χρήσης για να δημιουργήσετε κριτήρια σε μια Εμπλουτισμένη Ρουμπρίκα Μαθησιακής Αναλυτικής:
<br /><br />
<a target="_blank" href="https://www.youtube.com/watch?v=jCuNm463yTU&hd=1">Δημιουργία στιγμιότυπου Εμπλουτισμένης Ρουμπρίκας Μαθησιακής Αναλυτικής.</a><br /><br />';
$string['enrichmentoptions'] = 'Επιλογές εμπλουτισμού κριτηρίων';
$string['enrichshareconfirm'] = '<p style="text-align:center;color:red;font-weight:bold">ΠΡΟΣΟΧΗ!</p>
Το πρόσθετο <b>Εμπλουτισμένη Ρουμπρίκα Μαθησιακής Αναλυτικής</b> μπορεί να χρησιμοποιηθεί ως υπόδειγμα φόρμας προχωρημένης βαθμολόγησης, ΜΟΝΟ ΓΙΑ ΤΟ ΠΑΡΟΝ ΜΑΘΗΜΑ!
Αν άλλοι χρήστες στον ιστότοπό σας χρησιμοποιήσουν αυτή τη φόρμα σε οποιοδήποτε άλλο μάθημα, <b>δεν θα δουλέψει ως έχει</b>! Η βασική δομή της ρουμπρίκας δεν θα αλλοιωθεί, όμως θα πρέπει να αντικαταστήσετε όλα τα ενσωματωμένα αρθρώματα μαθήματος με παρόμοια αρθρώματα από το μάθημα προορισμού.';
$string['err_attention'] = '<p style="text-align:center;color:red;font-weight:bold">ΠΡΟΣΟΧΗ!</p>';
$string['err_collaborationhoice'] = 'Οι εκπαιδευτικοί πόροι άμεσης ομιλίας (chat modules) δεν δύναται να επιλεγούν για έλεγχο απαντήσεων και υποβολής αρχείων σε ομαδικές συζητήσεις (forums).';
$string['err_collaborationtypeneedless'] = 'Το πεδίο τύπος πρέπει να επιλέγεται μόνο για έλεγχο συνεργασίας.';
$string['err_criterionmethod'] = 'Πρέπει να επιλέξετε ατομική ή συλλογική αναφορά για το εμπλουτισμένο κριτήριο.';
$string['err_criteriontypeid'] = 'Πρέπει να επιλέξετε τελεστή για το εμπλουτισμένο κριτήριο.';
$string['err_enrichedcriterionmissing'] = 'Πρέπει να επιλεχθούν όλα τα κριτήρια εμπλουτισμού, ή κανένα.';
$string['err_enrichedmoduleselection'] = 'Οι επιλεγμένοι εκπαιδευτικοί πόροι πρέπει να είναι του ίδιου τύπου, σύμφωνα με το είδος ελέγχου.';
$string['err_enrichedvalueformat'] = 'Η τιμή ελέγχου των επιπέδων εμπλουτισμού πρέπει να είναι έγκυρος θετικός ακέραιος αριθμός.';
$string['err_enrichedvaluemissing'] = 'Τα εμπλουτισμένα κριτήρια πρέπει να έχουν τιμές ελέγχου σε κάθε επίπεδο.';
$string['err_mintwolevels'] = 'Κάθε κριτήριο πρέπει να έχει τουλάχιστον δυο επίπεδα.';
$string['err_missingcoursemodule'] = 'Ελλιπής πόρος!';
$string['err_missingcoursemodules'] = '<p style="text-align:center;color:red;font-weight:bold">ΠΡΟΣΟΧΗ!</p>
Τουλάχιστον ένα άρθρωμα μαθήματος λείπει από τα κριτήρια!
Ίσως το άρθρωμα να έχει διαγραφεί ή αυτή η φόρμα βαθμολόγησης να έχει εισαχθεί από άλλο μάθημα ή εφεδρικό αντίγραφο ή κοινόχρηστη φόρμα.
Επεξεργαστείτε την τρέχουσα φόρμα προκειμένου να εμπλουτίσετε ξανά (ή όχι) το ή τα εν λόγο κριτήρια. Διαφορετικά <b>η αξιολόγηση των μαθητών ενδέχεται να μην είναι εφικτή</b>!';
$string['err_missingcoursemodulesedit'] = '<p style="text-align:center;color:red;font-weight:bold">ΠΡΟΣΟΧΗ!</p>
Τουλάχιστον ένα άρθρωμα μαθήματος λείπει από τα κριτήρια!
Μπορείτε να διαγράψετε αυτά τα κριτήρια ή να τα «απλουστεύσετε» επαναρχικοποιώντας κάποια πεδία εμπλουτισμού ή να τα εμπλουτίσετε ξανά.
<b>Αν δεν ενημερώσετε αυτή τη φόρμα και την αφήσετε ως έχει, ενδέχεται να μην είναι εφικτή η αξιολόγηση των μαθητών!</b>';
$string['err_missinglogstores'] = '<p><font color="red"><b>Λάθος Συστήματος Καταγραφής Συμβάντων!</b></font></p>
Το εργαλείο αυτό μπορεί να λειτουργήσει μόνο αν το <b>Τυπικό</b> και/ή το <b>Παλαιού τύπου</b> σύστημα καταγραφής έχει ενεργοποιηθεί. Φαίνεται πως κανένα από τα δύο δεν έχει.
Απευθυνθείτε στο διαχειριστή του ιστοτόπου για την ενεργοποίηση οποιουδήποτε από αυτά τα συστήματα, αν θέλετε να χρησιμοποιήσετε αυτό το εργαλείο.
Για περισσότερες πληροφορίες δείτε την <a target="_blank" href="https://docs.moodle.org/35/el/Learning_Analytics_Enriched_Rubric">τεκμηρίωση του αρθρώματος</a>.';
$string['err_nocriteria'] = 'Η ρουμπρίκα πρέπει να περιέχει τουλάχιστον ένα κριτήριο.';
$string['err_nodefinition'] = 'Ο χαρακτηρισμός των επιπέδων δεν μπορεί να είναι κενός.';
$string['err_nodescription'] = 'Η περιγραφή του κριτηρίου δεν μπορεί να είναι κενή.';
$string['err_novariations'] = 'Η ελάχιστη βαθμολογία της ρουμπρίκας δεν μπορεί να είναι ίδια με τη μέγιστη.';
$string['err_novariationspoints'] = 'Τα επίπεδα ενός κριτηρίου δεν μπορούν να έχουν τις ίδιες τιμές.';
$string['err_novariationsvalues'] = 'Τα εμπλουτισμένα κριτήρια πρέπει να έχουν διαφορετικές τιμές ελέγχου σε κάθε επίπεδο.';
$string['err_scoreformat'] = 'Η τιμή βαθμολόγησης των επιπέδων πρέπει να είναι έγκυρος αριθμός (θετικός ή αρνητικός).';
$string['err_totalscore'] = 'Η μέγιστη δυνατή βαθμολογία πρέπει να είναι μεγαλύτερη του μηδενός.';
$string['erubric'] = 'Ηλεκτρονική Ρουμπρίκα Μαθησιακής Αναλυτικής';
$string['gradingof'] = '{$a} βαθμολόγηση';
$string['intercactionempty'] = 'Τύπος κριτηρίου';
$string['level'] = 'Επίπεδο {$a->definition}, {$a->score} πόντοι.';
$string['leveldefinition'] = 'Περιγραφή επιπέδου {$a}';
$string['leveldelete'] = 'Διαγραφή επιπέδου {$a}';
$string['levelempty'] = 'Προσθέστε επίπεδο';
$string['levelsgroup'] = 'Ομάδα επιπέδων';
$string['lockzeropoints'] = 'Υπολογισμός βαθμολογίας θεωρώντας πως η ρουμπρίκα έχει ελάχιστο σκορ το μηδέν (0), ακόμη κι αν δεν έχει';
$string['lockzeropoints_help'] = 'Αυτή η ρύθμιση εφαρμόζεται αν το άθροισμα των ελάχιστων πόντων από κάθε κριτήριο είναι μεγαλύτερο από 0.
Αν ενεργοποιηθεί, η ελάχιστη δυνατή βαθμολογία για την ρουμπρίκα θα είναι μεγαλύτερη από 0.
Αν απενεργοποιηθεί, το ελάχιστο δυνατό σκορ για την ρουμπρίκα θα αναχθεί/αντιστοιχηθεί στην ελάχιστη διαθέσιμη βαθμολογία για την δραστηριότητα (που είναι 0, εκτός και αν χρησιμοποιείται μια διαβαθμισμένη κλίμακα).<br />
Για περισσότερες πληροφορίες δείτε την τεκμηρίωση του αρθρώματος σχετικά με τον <a target="_blank" href="https://docs.moodle.org/35/el/Learning_Analytics_Enriched_Rubric#Grade_calculation">υπολογισμό βαθμολογίας</a>.';
$string['name'] = 'Όνομα';
$string['needregrademessage'] = 'Το στιγμιότυπο της εμπλουτισμένης ρουμπρίκας έχει αλλάξει μετά την βαθμολόγηση του συγκεκριμένου μαθητή.
Ο μαθητής δεν θα μπορεί να δει αυτή τη φόρμα αξιολόγησης μέχρι να ενημερώσετε εκ νέου το βαθμό.';
$string['operatorempty'] = 'Επιλογή τελεστή';
$string['overideenrichmentevaluation'] = 'Παράκαμψη της αυτόματης διαδικασίας αξιολόγησης σε περίπτωση λογικού λάθους εμπλουτισμού<br>
<i>(Αν υπάρχουν λογικά λάθη εμπλουτισμού, η αξιολόγηση δεν θα είναι αλλιώς εφικτή!)</i>';
$string['participationin'] = 'Έλεγχος:';
$string['participationis'] = 'Είναι:';
$string['participationon'] = 'Σχετικά με:';
$string['pluginname'] = 'Εμπλουτισμένη Ρουμπρίκα Μαθησιακής Αναλυτικής';
$string['previewerubric'] = 'Προεπισκόπηση LA e-Rubric (ηλε.Ρουμπρίκας Μ.Α.)';
$string['privacy:metadata:fillings'] = 'Ό πίνακας στη Βάση Δεδομένων που αποθηκεύει βαθμολογικές πληροφορίες και παραγόμενα Μαθησιακής Αναλυτικής και Εξόρυξης Δεδομένων.';
$string['privacy:metadata:fillings:criterionid'] = 'Το αναγνωριστικό κριτηρίου μιας ηλε.ρουμπρίκας που χρησιμοποιήθηκε για βαθμολόγηση.';
$string['privacy:metadata:fillings:enrichedbenchmark'] = 'Η τελική τιμή αναφοράς του εμπλουτισμένου κριτηρίου, που προέκυψε από τα εξαγόμενα της Μαθησιακής Αναλυτικής και την Εξόρυξη Δεδομένων.';
$string['privacy:metadata:fillings:enrichedbenchmarkstudent'] = 'Η τιμή αναφοράς του μαθητή, που προέκυψε από τα εξαγόμενα της Μαθησιακής Αναλυτικής και την Εξόρυξη Δεδομένων.';
$string['privacy:metadata:fillings:enrichedbenchmarkstudents'] = 'Η συγκεντρωτική τιμή αναφοράς των εν ενεργεία μαθητών που προέκυψε από τα εξαγόμενα της Μαθησιακής Αναλυτικής και την Εξόρυξη Δεδομένων.';
$string['privacy:metadata:fillings:instanceid'] = 'Το αναγνωριστικό του στιγμιότυπου βαθμολόγησης μιας προσπάθειας βαθμολόγησης από ένα συγκεκριμένο βαθμολογητή που χρησιμοποιεί μια συγκεκριμένη ηλε.ρουμπρίκα.';
$string['privacy:metadata:fillings:levelid'] = 'Το αναγνωριστικό του επιλεγμένου επιπέδου ενός κριτηρίου ηλε.ρουμπρίκας.';
$string['privacy:metadata:fillings:remark'] = 'Οι παρατηρήσεις αξιολόγησης ενός βαθμολογητή, κατά την αξιολόγηση με βάση ένα κριτήριο της ηλε.ρουμπρίκας.';
$string['referencetypeempty'] = 'Ατομ./Συνολ.';
$string['referencetypenumber'] = 'μαθητή';
$string['referencetypepercentage'] = 'μαθητών';
$string['regrademessage1'] = '<p style="text-align:center;color:red;font-weight:bold">ΠΡΟΣΟΧΗ!</p>
Θέλετε να αποθηκεύσετε νέες αλλαγές σε μια εμπλουτισμένη ρουμπρίκα που έχει ήδη χρησιμοποιηθεί για βαθμολόγηση.
Ελέγξτε αν οι υπάρχουσες βαθμολογίες πρέπει να επανεξεταστούν.
Αν το επιλέξετε, η εμπλουτισμένη ρουμπρίκα δεν θα είναι ορατή από τους μαθητές μέχρι να βαθμολογηθούν εκ νέου.';
$string['regrademessage2'] = '<p style="text-align:center;color:red;font-weight:bold">ΠΡΟΣΟΧΗ!</p>
Θέλετε να αποθηκεύσετε νέες αλλαγές σε μια εμπλουτισμένη ρουμπρίκα που έχει ήδη χρησιμοποιηθεί για βαθμολόγηση.
Η υπάρχουσα βαθμολογία δεν θα αλλάξει, αλλά η εμπλουτισμένη ρουμπρίκα δεν θα είναι ορατή από τους μαθητές μέχρι να βαθμολογηθούν εκ νέου.';
$string['regradeoption0'] = 'Να μην γίνει επισήμανση για αναβαθμολόγηση';
$string['regradeoption1'] = 'Επισήμανση για αναβαθμολόγηση';
$string['restoredfromdraft'] = 'Σημείωση: Η τελευταία απόπειρα βαθμολόγησης αυτού του ατόμου δεν αποθηκεύτηκε, οπότε η πρότερη βαθμολογία επανακτήθηκε.
Αν θέλετε να ακυρώσετε αυτές τις αλλαγές πατήστε το κουμπί «Άκυρο» παρακάτω.';
$string['rubricmapping'] = 'Κανόνες απόδοσης τελικής βαθμολογίας';
$string['rubricmappingexplained'] = 'Το ελάχιστο δυνατό σκορ για αυτή την εμπλουτισμένη ρουμπρίκα είναι <b>{$a->minscore} πόντοι</b> και θα μετατραπεί στην ελάχιστη διαθέσιμη βαθμολογία σε αυτή την δραστηριότητα αξιολόγησης (που είναι το μηδέν εκτός και αν χρησιμοποιείται κάποια κλίμακα).  Το μέγιστο σκορ <b>{$a->maxscore} πόντοι</b> θα μετατραπεί στη μέγιστη βαθμολογία.<br /> Ενδιάμεσα σκορ θα μετατραπούν ανάλογα και θα στρογγυλοποιηθούν στον κοντινότερο διαθέσιμο βαθμό.<br /> Αν χρησιμοποιείται μια κλίμακα αντί βαθμολογίας, το σκορ θα αναχθεί στα αντίστοιχα στοιχεία της κλίμακας ως εάν ήταν διαδοχικοί ακέραιοι.<br /><br /> Αυτός ο υπολογισμός βαθμού μπορεί να αλλάξει τροποποιώντας την φόρμα και τικάροντας το κουτάκι «Υπολογισμός βαθμολογίας θεωρώντας πως η ρουμπρίκα έχει ελάχιστο σκορ το μηδέν (0)».';
$string['rubricnotcompleted'] = 'Πρέπει να επιλεχθεί ένα κατάλληλο επίπεδο για κάθε κριτήριο.';
$string['rubricoptions'] = 'Επιλογές ρουμπρίκας';
$string['rubricstatus'] = 'Τρέχουσα κατάσταση ηλε.ρουμπρίκας Μ.Α.';
$string['save'] = 'Αποθήκευση';
$string['saverubric'] = 'Αποθήκευση και ενεργοποίηση ηλε.ρουμπρίκας';
$string['saverubricdraft'] = 'Αποθήκευση ως προχείρου';
$string['scoreinputforlevel'] = 'Απόδοση βαθμού για το επίπεδο {$a}';
$string['scorepostfix'] = '{$a}βαθμοί';
$string['selectcollaboration'] = 'συνεργασία';
$string['selectgrade'] = 'βαθμολογία';
$string['selectstudy'] = 'μελέτη';
$string['showdescriptionstudent'] = 'Εμφάνιση περιγραφής ρουμπρίκας στους βαθμολογούμενους';
$string['showdescriptionteacher'] = 'Εμφάνιση περιγραφής ρουμπρίκας κατά τη βαθμολόγηση';
$string['showenrichedbenchmarkstudent'] = 'Εμφάνιση των υπολογιζόμενων τιμών αναφοράς εμπλουτισμού στους βαθμολογούμενους';
$string['showenrichedbenchmarkteacher'] = 'Εμφάνιση των υπολογιζόμενων τιμών αναφοράς εμπλουτισμού κατά τη βαθμολόγηση';
$string['showenrichedcriteriastudent'] = 'Εμφάνιση εμπλουτισμού των κριτηρίων στους βαθμολογούμενους';
$string['showenrichedcriteriateacher'] = 'Εμφάνιση εμπλουτισμού των κριτηρίων κατά τη βαθμολόγηση';
$string['showenrichedvaluestudent'] = 'Εμφάνιση τιμών ελέγχου εμπλουτισμού για κάθε επίπεδο στους βαθμολογούμενους';
$string['showenrichedvalueteacher'] = 'Εμφάνιση τιμών ελέγχου εμπλουτισμού για κάθε επίπεδο κατά τη βαθμολόγηση';
$string['showremarksstudent'] = 'Εμφάνιση σχολίων στους βαθμολογούμενους';
$string['showscorestudent'] = 'Εμφάνιση βαθμολογίας για κάθε επίπεδο στους βαθμολογούμενους';
$string['showscoreteacher'] = 'Εμφάνιση βαθμολογίας για κάθε επίπεδο κατά τη βαθμολόγηση';
$string['sortlevelsasc'] = 'Σειρά ταξινόμησης για τα επίπεδα:';
$string['sortlevelsasc0'] = 'Φθίνουσα με βάση τους πόντους';
$string['sortlevelsasc1'] = 'Αύξουσα με βάση τους πόντους';
$string['studentbenchmarkinfo'] = 'Τιμή αναφοράς μαθητή';
$string['studentsbenchmarkinfo'] = 'Τιμή αναφοράς μαθητών';
$string['timestampenrichmentend'] = 'Οι υπολογισμοί εμπλουτισμού γίνονται μέχρι την οφειλόμενη ημερομηνία υποβολής (αν έχει ενεργοποιηθεί)';
$string['timestampenrichmentstart'] = 'Οι υπολογισμοί εμπλουτισμού γίνονται από την ημερομηνία έναρξης υποβολών της εργασίας (αν έχει ενεργοποιηθεί)';
$string['zerolevelsabsent'] = 'Προσοχή: Η ελάχιστη δυνατή βαθμολογία για αυτή τη ρουμπρίκα δεν είναι μηδέν (0). Αυτό μπορεί να παράγει απροσδόκητα αποτελέσματα για τη συγκεκριμένη βαθμολογική δραστηριότητα.
Για να το αποφύγετε αυτό, κάθε κριτήριο θα πρέπει να έχει ένα επίπεδο με μηδέν (0) βαθμούς.<br>
Αυτή η προειδοποίηση μπορεί να αγνοηθεί, αν για τη συγκεκριμένη βαθμολογική δραστηριότητα χρησιμοποιείται διαβαθμισμένη κλίμακα (αντί αριθμητικής βαθμολογίας) και η ελάχιστη βαθμολογία της ρουμπρίκας αναλογεί στην ελάχιστη τιμή της κλίμακας.';
