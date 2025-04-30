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
 * Strings for component 'adaptivequiz', language 'el', version '4.4'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Αναφορά προσπαθειών';
$string['adaptivequiz:addinstance'] = 'Προσθήκη ενός προσαρμόσιμου κουίζ';
$string['adaptivequiz:attempt'] = 'Προσπάθεια για ένα προσαρμόσιμο κουίζ';
$string['adaptivequiz:reviewattempts'] = 'Εξέταση υποβολών προσαρμόσιμου κουίζ';
$string['adaptivequiz:viewreport'] = 'Εμφάνιση αναφορών προσαρμόσιμου κουίζ';
$string['adaptivequizname'] = 'Όνομα';
$string['adaptivequizname_help'] = 'Δώστε το όνομα του στιγμιοτύπου του προσαρμόσιμου κουίζ';
$string['all_attempts_deleted'] = 'Διαγράφηκαν όλες οι προσπάθειες προσαρμόσιμων κουίζ';
$string['all_grades_removed'] = 'Διαγράφηκαν όλοι οι βαθμοί προσαρμόσιμων κουίζ';
$string['answer'] = 'Απάντηση';
$string['answers_display_name'] = 'Απαντήσεις';
$string['attempt_questiondetails'] = 'Λεπτομέρειες ερώτησης';
$string['attempt_state'] = 'Κατάσταση προσπάθειας';
$string['attempt_summary'] = 'Περίληψη προσπάθειας';
$string['attempt_user'] = 'Χρήστης';
$string['attemptclosed'] = 'Η προσπάθεια έκλεισε χειροκίνητα.';
$string['attemptclosedstatus'] = 'Έκλεισε χειροκίνητα από τον/την {$a->current_user_name} (αναγνωριστικό χρήστη: {$a->current_user_id}) στις {$a->now}.';
$string['attemptdeleted'] = 'Διαγράφηκε η προσπάθεια για τον/την {$a->name} που υποβλήθηκε στις {$a->timecompleted}';
$string['attemptfeedback'] = 'Ανατροφοδότηση προσπάθειας';
$string['attemptfeedback_help'] = 'Η ανατροφοδότηση προσπάθειας εμφανίζεται στο χρήστη μόλις ολοκληρωθεί η προσπάθεια';
$string['attemptfinishedtimestamp'] = 'Χρόνος ολοκλήρωσης προσπάθειας';
$string['attemptfirst'] = 'Πρώτη προσπάθεια';
$string['attemptlast'] = 'Τελευταία προσπάθεια';
$string['attemptquestion_ability'] = 'Μέτρο ικανότητας';
$string['attemptquestion_abilitylogits'] = 'Ικανότητα που μετρήθηκε (logits)';
$string['attemptquestion_difficulty'] = 'Δυσκολία ερώτησης (logits)';
$string['attemptquestion_diffsum'] = 'Άθροισμα δυσκολίας';
$string['attemptquestion_level'] = 'Επίπεδο ερώτησης';
$string['attemptquestion_rightwrong'] = 'Σωστό/Λάθος';
$string['attemptquestion_stderr'] = 'Τυπικό σφάλμα (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Επιτρεπόμενες προσπάθειες';
$string['attemptsallowed_help'] = 'Φορές που μπορεί ένας μαθητής να προσπαθήσει αυτή τη δραστηριότητα';
$string['attemptstarttime'] = 'Χρόνος έναρξης προσπάθειας';
$string['attemptstate'] = 'Κατάσταση της προσπάθειας';
$string['attemptstopcriteria'] = 'Λόγος διακοπής της προσπάθειας';
$string['attempttotaltime'] = 'Συνολικός χρόνος (ωω:λλ:δδ)';
$string['back_to_all_questions'] = '&laquo; Επιστροφή σε όλες τις ερωτήσεις';
$string['bestscore'] = 'Το καλύτερο σκορ';
$string['bestscorestderror'] = 'Τυπικό σφάλμα';
$string['browsersecurity'] = 'Ασφάλεια περιηγητή';
$string['browsersecurity_help'] = 'Αν επιλεγεί «Αναδυόμενο παράθυρο πλήρους οθόνης με κάποια JavaScript ασφάλεια»,

* Το κουίζ θα ξεκινήσει μόνο αν ο μαθητής έχει περιηγητή με ενεργοποιημένη την JavaScript
* Το κουίζ θα εμφανιστεί σε ένα αναδυόμενο παράθυρο πλήρους οθόνης, το οποίο θα καλύπτει όλα τα άλλα παράθυρα και δεν θα έχει επιλογές πλοήγησης
* Οι εκπαιδευόμενοι περιορίζονται, όσο αυτό είναι δυνατό, από τη χρήση λειτουργιών όπως η αντιγραφή και η επικόλληση';
$string['calcerrorwithinlimits'] = 'Το υπολογιζόμενο τυπικό σφάλμα του {$a-> calerror} είναι εντός των ορίων που επιβάλλονται από τη δραστηριότητα {$a-> definederror}';
$string['closeattempt'] = 'Κλείσιμο προσπάθειας';
$string['confirmcloseattempt'] = 'Είστε βέβαιοι ότι θέλετε να κλείσετε και να ολοκληρώσετε την προσπάθεια αυτή της {$a->name};';
$string['confirmcloseattemptscore'] = '{$a->num_questions} ερωτήσεις απαντήθηκαν και το σκορ είναι μέχρι στιγμής {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Αυτή η προσπάθεια ξεκίνησε την {$a->started} και τελευταία φορά ενημερώθηκε στις {$a->modified}.';
$string['confirmdeleteattempt'] = 'Επιβεβαίωση της διαγραφής της προσπάθειας του/της {$a->name} που υποβλήθηκε στις {$a->timecompleted}';
$string['deleteattemp'] = 'Διαγραφή προσπάθειας';
$string['discrimination_display_name'] = 'Διάκριση';
$string['downloadcsv'] = 'Λήψη CSV (κείμενο με κόμματα)';
$string['enterrequiredpassword'] = 'Εισαγωγή του απαιτούμενου κωδικού πρόσβασης';
$string['errorattemptstate'] = 'Παρουσιάστηκε κάποιο σφάλμα κατά τον καθορισμό της κατάστασης της προσπάθειας';
$string['errorclosingattempt_alreadycomplete'] = 'Η προσπάθεια αυτή είναι ήδη ολοκληρωμένη. Δεν μπορεί να κλείσει χειροκίνητα.';
$string['errorfetchingquest'] = 'Αδυναμία εύρεσης/λήψης μιας ερώτησης για το επίπεδο {$a->level}';
$string['errorlastattpquest'] = 'Σφάλμα κατά τον έλεγχο της τιμής της απόκρισης για την τελευταία προσπάθεια ερώτησης';
$string['errornumattpzero'] = 'Σφάλμα με τον αριθμό ερωτήσεων που επιχειρήθηκαν να ισούται με μηδέν, ενώ ο χρήστης έχει υποβάλλει απάντηση σε προηγούμενη ερώτηση';
$string['errorsumrightwrong'] = 'Το άθροισμα των σωστών και λανθασμένων απαντήσεων δεν ισούται με το συνολικό αριθμό των ερωτήσεων που προσπαθήθηκαν';
$string['formelementdecimal'] = 'Δώστε έναν δεκαδικό αριθμό. Μέγιστο 10 ψηφία και το πολύ 5 ψηφία στα δεξιά της υποδιαστολής';
$string['formelementempty'] = 'Εισαγάγετε έναν θετικό ακέραιο από 1 έως 999';
$string['formelementnegative'] = 'Εισαγάγετε έναν θετικό αριθμό από 1 έως 999';
$string['formelementnumeric'] = 'Εισαγάγετε μια αριθμητική τιμή από 1 έως 999';
$string['formlowlevelgreaterthan'] = 'Το χαμηλότερο δυνατό επίπεδο πρέπει να είναι μικρότερο από ό,τι το υψηλότερο δυνατό';
$string['formminquestgreaterthan'] = 'Ο ελάχιστος αριθμός ερωτήσεων πρέπει να είναι μικρότερος από τον μέγιστο αριθμό ερωτήσεων';
$string['formquestionpool'] = 'Επιλέξτε τουλάχιστον μία κατηγορία ερώτησης';
$string['formstartleveloutofbounds'] = 'Το αρχικό επίπεδο πρέπει να είναι ένας αριθμός που είναι ενδιάμεσα στο χαμηλότερο και στο υψηλότερο επίπεδο';
$string['formstderror'] = 'Πρέπει να εισαγάγετε ένα ποσοστό μικρότερο από 50 και μεγαλύτερο ή ίσο με 0';
$string['functiondisabledbysecuremode'] = 'Αυτή η λειτουργία είναι αυτήν τη στιγμή απενεργοποιημένη';
$string['gradehighest'] = 'Ο μέγιστος βαθμός';
$string['grademethod'] = 'Μέθοδος βαθμολόγησης';
$string['grademethod_help'] = 'Όταν επιτρέπονται πολλαπλές προσπάθειες, υπάρχουν οι ακόλουθοι μέθοδοι υπολογισμού του τελικού βαθμού στο κουίζ:

* Υψηλότερος βαθμός από όλες τις προσπάθειες.
* Μέσος όρος (μέση τιμή) όλων των προσπαθειών.
* Πρώτη προσπάθεια (όλες οι άλλες αγνοούνται).
* Τελευταία προσπάθεια (όλες οι άλλες αγνοούνται).';
$string['graphlegend_error'] = 'Τυπικό σφάλμα';
$string['highestlevel'] = 'Το υψηλότερο δυνατό επίπεδο δυσκολίας';
$string['highestlevel_help'] = 'Το υψηλότερο ή πιο δύσκολο επίπεδο από το οποίο η αξιολόγηση μπορεί να επιλέξει ερωτήσεις. Κατά τη διάρκεια μιας προσπάθειας η δραστηριότητα δεν θα πάει πέρα από αυτό το επίπεδο δυσκολίας';
$string['highlevelusers'] = 'Χρήστες πάνω από το επίπεδο του ερωτήματος';
$string['id'] = 'Αναγνωριστικό';
$string['indvuserreport'] = 'Μεμονωμένος χρήστης επιχειρεί αναφορά για {$a}';
$string['leveloutofbounds'] = 'Το επίπεδο {$a->level} που ζητήθηκε είναι εκτός ορίων για αυτήν την προσπάθεια';
$string['lowestlevel'] = 'Το χαμηλότερο επίπεδο δυσκολίας';
$string['lowestlevel_help'] = 'Το χαμηλότερο ή πιο εύκολο επίπεδο από το οποίο η αξιολόγηση μπορεί να επιλέξει ερωτήσεις. Κατά τη διάρκεια μιας προσπάθειας η δραστηριότητα δεν θα πάει πέρα από αυτό το επίπεδο δυσκολίας';
$string['lowlevelusers'] = 'Χρήστες κάτω από το επίπεδο του ερωτήματος';
$string['maximumquestions'] = 'Μέγιστος αριθμός ερωτήσεων';
$string['maximumquestions_help'] = 'Ο μέγιστος αριθμός των ερωτήσεων που μπορεί να προσπαθήσει ο μαθητής';
$string['maxquestattempted'] = 'Μέγιστος αριθμός των ερωτήσεων που προσπαθήθηκαν';
$string['midlevelusers'] = 'Χρήστες κοντά στο επίπεδο του ερωτήματος';
$string['minimumquestions'] = 'Ελάχιστος αριθμός ερωτήσεων';
$string['minimumquestions_help'] = 'Ο ελάχιστος αριθμός των ερωτήσεων που πρέπει να προσπαθήσει ο μαθητής';
$string['missingtagprefix'] = 'Λείπει πρόθεμα ετικέτας';
$string['modulename'] = 'Προσαρμόσιμο κουίζ';
$string['modulename_help'] = 'Η δραστηριότητα προσαρμόσιμου κουίζ επιτρέπει σε έναν δάσκαλο για να δημιουργήσει κουίζ που μετρούν αποτελεσματικά τις ικανότητες του δοκιμαζόμενου. Τα προσαρμόσιμα κουίζ αποτελούνται από ερωτήσεις που επιλέγονται από την τράπεζα ερωτήσεων και που διαθέτουν ετικέτα με βαθμολογία της δυσκολίας τους. Οι ερωτήσεις έχουν επιλεγεί για να ταιριάζουν με το εκτιμώμενο επίπεδο ικανότητας του τρέχοντος δοκιμαζόμενου. Αν ο δοκιμαζόμενος επιτυγχάνει σε μια ερώτηση, παρουσιάζεται στη συνέχεια μια πιο απαιτητική ερώτηση. Αν ο δοκιμαζόμενος απαντά σε μια ερώτηση λανθασμένα, παρουσιάζεται στη συνέχεια μια λιγότερο απαιτητική ερώτηση. Η τεχνική αυτή θα εξελιχθεί σε μια ακολουθία ερωτήσεων που συγκλίνει στο επίπεδο της πραγματικής ικανότητας του δοκιμαζόμενου. Το κουίζ σταματά όταν η ικανότητα του δοκιμαζόμενου καθοριστεί με την απαιτούμενη ακρίβεια.

Η δραστηριότητα αυτή ταιριάζει καλύτερα για τον καθορισμό ενός μέτρου ικανότητας σε όλο το εύρος μιας μονοδιάστατης κλίμακας. Ενώ η κλίμακα μπορεί να είναι πολύ ευρεία, οι ερωτήσεις πρέπει όλες να παρέχουν ένα μέτρο ικανότητας ή επάρκειας στην ίδια κλίμακα. Σε μια δοκιμασία κατάταξης για παράδειγμα, ερωτήσεις χαμηλά στην κλίμακα που ακόμη και αρχάριοι να είναι σε θέση να απαντήσουν σωστά, πρέπει επίσης να μπορούν να απαντηθούν από έμπειρους, ενώ ερωτήσεις υψηλότερα στην κλίμακα πρέπει να μπορούν να απαντηθούν μόνο από έμπειρους ή με πολύ τύχη. Ερωτήσεις που δεν διακρίνουν μεταξύ δοκιμαζόμενων διαφορετικών ικανοτήτων θα κάνουν τη δοκιμασία αναποτελεσματική και μπορεί να παρέχουν αδιευκρίνιστα αποτελέσματα. ασαφή αποτελέσματα.

Οι ερωτήσεις που χρησιμοποιούνται στο προσαρμόσιμο κουίζ πρέπει

* να βαθμολογούνται αυτόματα ως σωστές/λανθασμένες
* να διαθέτουν ετικέτα με βαθμολογία της δυσκολίας τους με χρήση του «adpq_» που θα ακολουθείται από έναν θετικό ακέραιο που είναι μέσα στα όρια για το κουίζ.

Το προσαρμόσιμο κουίζ μπορεί να ρυθμιστεί να

* καθορίζει το εύρος βαθμού-δυσκολίας-ερώτησης/βαθμός-ικανότητας-χρηστών προς μέτρηση. 1-10, 1-16 και 1-100 είναι παραδείγματα έγκυρων περιοχών
* καθορίζει την ακρίβεια που απαιτείται για να τερματίσει το κουίζ. Σφάλμα 5% στην μέτρηση της ικανότητας είναι συχνά ένας κατάλληλος κανόνας τερματισμού
* απαιτεί ένα ελάχιστο αριθμό ερωτήσεων προς απάντηση
* απαιτεί ένα μέγιστο αριθμό ερωτήσεων προς απάντηση.

Αυτή η περιγραφή και η διαδικασία δοκιμασίας σε αυτή τη δραστηριότητα βασίζεται στο: <a href="http://www.rasch.org/memo69.pdf">Υπολογιστής-προσαρμοστική δοκιμή: Μια μεθοδολογία της οποίας έχει έρθει η ώρα</a> του John Michael Linacre, Ph.D. MESA Psychometric Laboratory (ψυχομετρικό εργαστήριο) - Πανεπιστήμιο του Σικάγου. Μνημόνιο MESA Αρ. 69.';
$string['modulenameplural'] = 'Ενεργό κουίζ';
$string['na'] = 'δ/υ';
$string['name'] = 'Όνομα';
$string['noattemptsallowed'] = 'Δεν επιτρέπονται άλλες προσπάθειες σε αυτή τη δραστηριότητα';
$string['nonewmodules'] = 'Δεν βρέθηκαν στιγμιότυπα προσαρμόσιμων κουίζ';
$string['nopermission'] = 'Δεν έχετε δικαίωμα να δείτε αυτό τον πόρο.';
$string['notinprogress'] = 'Αυτή η προσπάθεια δεν είναι σε εξέλιξη.';
$string['notyourattempt'] = 'Αυτή δεν είναι η δική σας προσπάθεια στην δραστηριότητα';
$string['numofattemptshdr'] = 'Αριθμός προσπαθειών';
$string['percent_correct_display_name'] = '% Σωστό';
$string['pluginadministration'] = 'Προσαρμοστικό κουίζ';
$string['pluginname'] = 'Προσαρμοστικό κουίζ';
$string['question_report'] = 'Ανάλυση ερώτησης';
$string['questionanalysisbtn'] = 'Ανάλυση ερώτησης';
$string['questionnumber'] = 'Ερώτηση #';
$string['questionpool'] = 'Δεξαμενή ερωτήσεων';
$string['questionpool_help'] = 'Επιλογή της κατηγορίας/-ών ερώτησης από όπου θα αντλήσει ερωτήσεις η δραστηριότητα κατά τη διάρκεια μιας προσπάθειας.';
$string['questions_report'] = 'Αναφορά ερωτήσεων';
$string['questionsattempted'] = 'Άθροισμα για τις ερωτήσεις για τις οποίες έγινε προσπάθεια';
$string['recentactquestionsattempted'] = 'Ερωτήσεις για τις οποίες έγινε προσπάθεια: {$a}';
$string['recentattemptstate'] = 'Κατάσταση προσπάθειας:';
$string['recentcomplete'] = 'Ολοκληρώθηκε';
$string['recentinprogress'] = 'Σε εξέλιξη';
$string['requirepassword'] = 'Απαιτείται κωδικός πρόσβασης';
$string['requirepassword_help'] = 'Απαιτείται κωδικός πρόσβασης από τους μαθητές πριν προσπαθήσουν την προσπάθειά τους';
$string['requirepasswordmessage'] = 'Για να προσπαθήσετε αυτό το κουίζ πρέπει να γνωρίζετε τον κωδικό του';
$string['resetadaptivequizsall'] = 'Διαγραφή όλων των προσπαθειών για προσαρμοστικό κουίζ';
$string['result'] = 'Αποτέλεσμα';
$string['reviewattempt'] = 'Εξέταση προσπάθειας';
$string['reviewattemptreport'] = 'Εξέταση της προσπάθειας του/της {$a->fullname} που υποβλήθηκε στις {$a->finished}';
$string['score'] = 'Σκορ';
$string['standarderror'] = 'Τυπικό σφάλμα για τερματισμό';
$string['standarderror_help'] = 'Όταν το μέγεθος του σφάλματος στην μέτρηση της ικανότητας του χρήστη πέσει κάτω από αυτό το μέγεθος, τότε το κουίζ θα τερματιστεί. Κάντε μικροδιορθώσεις σε αυτήν την τιμή από 5% που είναι η προεπιλογή, ώστε να απαιτείται μεγαλύτερη ή μικρότερη ακρίβεια στην μέτρηση της ικανότητας.';
$string['standarderrorhdr'] = 'Τυπικό σφάλμα';
$string['startattemptbtn'] = 'Έναρξη προσπάθειας';
$string['startinglevel'] = 'Αρχικό επίπεδο δυσκολίας';
$string['startinglevel_help'] = 'Όταν ο μαθητής ξεκινά μια προσπάθεια, η δραστηριότητα θα επιλέγει τυχαία μια ερώτηση που ταιριάζει στο επίπεδο δυσκολίας';
$string['statistic'] = 'Στατιστικό';
$string['stopingconditionshdr'] = 'Συνθήκες τερματισμού';
$string['submitanswer'] = 'Υποβολή απάντησης';
$string['times_used_display_name'] = 'Φορές που χρησιμοποιήθηκε';
$string['updateattempterror'] = 'Σφάλμα κατά την προσπάθεια ενημέρωσης εγγραφής προσπάθειας';
$string['user'] = 'Χρήστης';
$string['value'] = 'Τιμή';
$string['wrongpassword'] = 'Ο κωδικός πρόσβασης είναι λανθασμένος';
