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
 * Strings for component 'qtype_multianswer', language 'el', version '3.11'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Επιβεβαιώνω ότι επιθυμώ να αποθηκευτεί η ερώτηση όπως συντάχθηκε';
$string['confirmsave'] = 'Επιβεβαίωση και κατόπιν αποθήκευση {$a}';
$string['correctanswer'] = 'Σωστή απάντηση';
$string['correctanswerandfeedback'] = 'Σωστή απάντηση και ανατροφοδότηση';
$string['decodeverifyquestiontext'] = 'Αποκωδικοποίηση και επαλήθευση του κειμένου της ερώτησης';
$string['invalidmultianswerquestion'] = 'Μη έγκυρη ερώτηση ενσωματωμένων απαντήσεων (Cloze) ({$a}).';
$string['layout'] = 'Διάταξη';
$string['layouthorizontal'] = 'Οριζόντια σειρά από κουμπιά μοναδικής επιλογής';
$string['layoutmultiple_horizontal'] = 'Οριζόντια σειρά από πλαίσια ελέγχου';
$string['layoutmultiple_vertical'] = 'Κάθετη στήλη από πλαίσια ελέγχου';
$string['layoutselectinline'] = 'Πτυσσόμενο μενού στην ίδια γραμμή με το κείμενο';
$string['layoutundefined'] = 'Μη ορισμένη διάταξη';
$string['layoutvertical'] = 'Κάθετη στήλη από κουμπιά μοναδικής επιλογής';
$string['nooptionsforsubquestion'] = 'Αδυναμία λήψης επιλογών για το τμήμα # {$a->sub} (question->id={$a->id}) της ερώτησης';
$string['noquestions'] = 'Η ερώτηση τύπου ενσωματωμένων απαντήσεων (Cloze πολλαπλής απάντησης) «<strong>{$a}</strong>» δεν περιέχει καμία ερώτηση';
$string['pleaseananswerallparts'] = 'Απαντήστε σε όλα τα τμήματα της ερώτησης.';
$string['pluginname'] = 'Ενσωματωμένες απαντήσεις (Cloze)';
$string['pluginname_help'] = 'Οι ερωτήσεις Ενσωματωμένων απαντήσεων (Cloze) αποτελούνται από ένα απόσπασμα κειμένου με ερωτήσεις, όπως π.χ. πολλαπλής επιλογής ή σύντομης απάντησης, ενσωματωμένες μέσα σε αυτό.';
$string['pluginname_link'] = 'ερώτηση/τύπος/πολλαπλήςαπάντησης';
$string['pluginnameadding'] = 'Προσθήκη μιας ερώτησης με Ενσωματωμένες απαντήσεις (Cloze)';
$string['pluginnameediting'] = 'Τροποποίηση μιας ερώτησης με Ενσωματωμένες απαντήσεις (Cloze)';
$string['pluginnamesummary'] = 'Οι ερωτήσεις αυτού του τύπου είναι πολύ ευέλικτες, αλλά μπορούν να δημιουργηθούν μόνο με την εισαγωγή κειμένου το οποίο περιέχει ειδικούς κωδικούς που δημιουργούν ενσωματωμένες ερωτήσεις πολλαπλής επιλογής, σύντομης απάντησης και αριθμητικές.';
$string['privacy:metadata'] = 'Το πρόσθετο «Ερωτήσεις τύπου ενσωματωμένων απαντήσεων (Cloze)» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['qtypenotrecognized'] = 'τύπος ερώτησης {$a} μη αναγνωρίσιμος';
$string['questiondefinition'] = 'Ορισμός ερώτησης';
$string['questiondeleted'] = 'Η ερώτηση διαγράφηκε';
$string['questioninquiz'] = '<ul>
<li>προσθέστε ή διαγράψτε ερωτήσεις,</li>
<li>αλλάξτε τη σειρά ερωτήσεων στο κείμενο,</li>
<li>αλλάξτε τον τύπο τους (αριθμητικές, σύντομες, πολλαπλής επιλογής).</li>
</ul>';
$string['questionnotfound'] = 'Αδυναμία εύρεσης της ερώτησης του τμήματος ερώτησης #{$a}';
$string['questionsadded'] = 'Η ερώτηση προστέθηκε';
$string['questionsaveasedited'] = 'Η ερώτηση θα αποθηκευτεί όπως συντάχθηκε';
$string['questionsless'] = '{$a} ερωτήσεις/-η λιγότερες/-η από ό,τι στην ερώτηση πολλαπλών απαντήσεων που είναι αποθηκευμένη στη βάση δεδομένων';
$string['questionsmissing'] = 'Το κείμενο ερώτησης πρέπει να περιλαμβάνει τουλάχιστον μία ενσωματωμένη απάντηση.';
$string['questionsmore'] = '{$a} ερωτήσεις/-η περισσότερες/-η από ό,τι στην ερώτηση πολλαπλών απαντήσεων που είναι αποθηκευμένη στη βάση δεδομένων';
$string['questiontypechanged'] = 'Ο τύπος ερώτησης άλλαξε';
$string['questiontypechangedcomment'] = 'Τουλάχιστον ένας τύπος ερωτήματος έχει αλλάξει.<br />Προσθέσατε, διαγράψατε ή μετακινήσατε μια ερώτηση;<br />Κοιτάξτε μπροστά.';
$string['questionusedinquiz'] = 'Αυτή η ερώτηση χρησιμοποιείται σε {$a->nb_of_quiz} κουίζ. Συνολικές προσπάθειες: {$a->nb_of_attempts}';
$string['storedqtype'] = 'Τύπος αποθηκευμένης ερώτησης {$a}';
$string['subqresponse'] = 'μέρος {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Άγνωστος τύπος ερώτησης: {$a->type} του τμήματος ερώτησης # {$a->sub}';
$string['warningquestionmodified'] = '<b>ΠΡΟΕΙΔΟΠΟΙΗΣΗ</b>';
$string['youshouldnot'] = '<b>ΔΕΝ ΠΡΕΠΕΙ</b>';
