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
 * Strings for component 'qbehaviour_deferredcbm', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   qbehaviour_deferredcbm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Ακρίβεια';
$string['accuracyandbonus'] = 'Ακρίβεια + Δώρο';
$string['assumingcertainty'] = 'Δεν επιλέξατε κάποια βεβαιότητα. Θεωρείται ως: {$a}.';
$string['averagecbmmark'] = 'Μέσος βαθμός CBM';
$string['basemark'] = 'Βαθμός βάσης {$a}';
$string['breakdownbycertainty'] = 'Ανάλυση ανά βεβαιότητα';
$string['cbmbonus'] = 'Πριμοδότηση CBM';
$string['cbmgradeexplanation'] = 'Για το CBM, η παραπάνω βαθμίδα εμφανίζεται σε σχέση με το μέγιστο για όλα σωστά με C = 1.';
$string['cbmgrades'] = 'Βαθμολογίες CBM';
$string['cbmgrades_help'] = 'Με την βαθμολόγηση με βάση την βεβαιότητα (CBM) μια σωστή απάντηση σε κάθε ερώτηση με C=1 (χαμηλή βεβαιότητα) δίνει βαθμό 100%. Οι βαθμοί μπορεί να φτάσουν μέχρι 300% αν κάθε ερώτηση απαντηθεί σωστά με C=3 (υψηλή βεβαιότητα). Οι παρανοήσεις (σίγουρες αλλά λανθασμένες απαντήσεις) μειώνουν τους βαθμούς πολύ περισσότερο από τις λάθος απαντήσεις που όμως αναγνωρίζονται ως αβέβαιες. Αυτό μπορεί να οδηγήσει ακόμη και σε αρνητικούς συνολικούς βαθμούς.
** Ακρίβεια ** είναι το ποσοστό % σωστών απαντήσεων με αγνόηση της βεβαιότητας αλλά σταθμισμένο για το μέγιστο βαθμό κάθε ερωτήματος.
Η επιτυχής διάκριση περισσότερο και λιγότερο αξιόπιστων αποκρίσεων δίνει καλύτερο βαθμό από την επιλογή της ίδιας βεβαιότητας για κάθε ερώτηση. Αυτό αντανακλάται στο Bonus ** CBM **.
** Ακρίβεια ** + ** Μπόνους CBM ** είναι ένα καλύτερο μέτρο της γνώσης από (μόνο) ** Ακρίβεια **. Οι παρανοήσεις μπορούν να οδηγήσουν σε αρνητική βαθμολογία. Αυτό είναι μια προειδοποίηση για να δει κανείς πιο προσεκτικά τι είναι και δεν είναι γνωστό.';
$string['cbmgrades_link'] = 'συμπεριφοράερ/καθυστερημένηCBM/βαθμόςβεβαιότητας';
$string['cbmmark'] = 'Βαθμοί CBM {$a}';
$string['certainty'] = 'Βεβαιότητα';
$string['certainty1'] = 'C=1 (Αβέβαιος: <67%)';
$string['certainty-1'] = 'Δεν έχω ιδέα';
$string['certainty2'] = 'C=2 (Μέση βεβαιότητα: >67%)';
$string['certainty3'] = 'C=3 (Αρκετή βεβαιότητα: >80%)';
$string['certainty_help'] = 'Η βαθμολόγηση βάσει βεβαιότητας (Certainty Based Marking, για την αποφυγή τυχερών απαντήσεων) απαιτεί να δηλώσετε πόσο αξιόπιστη νομίζετε εσείς ότι είναι η απάντησή σας. Τα διαθέσιμα επίπεδα είναι:

Επίπεδο βεβαιότητας         | Β = 1 (Αβέβαιη) | Β = 2 (Mid) | Β = 3 (αρκετά σίγουρο)
--------------------------- | --------------- | ----------- | ----------------------
Βαθμοί εάν είναι σωστή      | 1               | 2           | 3
Βαθμοί αν είναι λανθασμένη  | 0               | -2          | -6
Πιθανότητα ορθότητας        | <67%            | 67-80%      | > 80%

Οι καλύτεροι βαθμοί κερδίζονται αναγνωρίζοντας την αβεβαιότητα. Για παράδειγμα, αν νομίζετε ότι υπάρχει μεγαλύτερη πιθανότητα από 1 στις 3 να κάνετε λάθος, πρέπει να εισάγετε Β = 1 και να αποφύγετε τον κίνδυνο αρνητικού σημείου.';
$string['certainty_link'] = 'συμπεριφοράερ/καθυστερημένηCBM/βεβαιότητα';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort-1'] = 'Δεν έχω ιδέα';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Δεν έχω ιδέα';
$string['foransweredquestions'] = 'Αποτελέσματα μόνο για τις {$a} απαντημένες ερωτήσεις';
$string['forentirequiz'] = 'Αποτελέσματα για ολόκληρο το κουίζ ({$a} ερωτήσεις)';
$string['howcertainareyou'] = 'Βεβαιότητα {$a->help}: {$a->choices}';
$string['judgementok'] = 'ΟΚ';
$string['judgementsummary'] = 'Αποκρίσεις: {$a->responses}. Ακρίβεια: {$a->fraction}. (Βέλτιστο εύρος από {$a->idealrangelow} σε {$a->idealrangehigh}). . Είσαστε {$a->judgement} χρησιμοποιώντας αυτό το επίπεδο βεβαιότητας.';
$string['noquestions'] = 'Χωρίς απόκριση';
$string['overconfident'] = 'με υπερβολική αυτοπεποίθηση';
$string['pluginname'] = 'Αναβαλλόμενη ανατροφοδότηση με CBM (Certainty-based marking: βαθμολόγηση με βάση την βεβαιότητα)';
$string['privacy:metadata'] = 'Το πρόσθετο «Συμπεριφορά καθυστερημένης ανατροφοδότησης με CBM» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['slightlyoverconfident'] = 'με λίγο υπερβολική αυτοπεποίθηση';
$string['slightlyunderconfident'] = 'με λίγο μειωμένη αυτοπεποίθηση';
$string['underconfident'] = 'χωρίς αυτοπεποίθηση';
$string['weightx'] = 'Συντελεστής βαρύτητας {$a}';
