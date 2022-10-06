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
 * Strings for component 'quiz_grading', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   quiz_grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldoneredirecting'] = 'Όλες οι επιλεγμένες προσπάθειες έχουν βαθμολογηθεί. Επιστροφή στη λίστα των ερωτήσεων.';
$string['alreadygraded'] = 'Ήδη βαθμολογημένο';
$string['alsoshowautomaticallygraded'] = 'Επίσης, εμφάνιση ερωτήσεων που έχουν βαθμολογηθεί αυτόματα';
$string['attemptstograde'] = 'Προσπάθειες βαθμολόγησης';
$string['automaticallygraded'] = 'Αυτόματη βαθμολόγηση';
$string['backtothelistofquestions'] = 'Επιστροφή στη λίστα ερωτήσεων';
$string['bydate'] = 'Κατά ημερομηνία';
$string['bystudentfirstname'] = 'Με το μικρό όνομα του μαθητή';
$string['bystudentidnumber'] = 'Κατά αναγνωριστικό αριθμό μαθητή';
$string['bystudentlastname'] = 'Με το επώνυμο μαθητή';
$string['cannotgradethisattempt'] = 'Δεν είναι δυνατή η βαθμολόγηση αυτής της προσπάθειας.';
$string['cannotloadquestioninfo'] = 'Δεν ήταν δυνατόν να φορτωθούν οι πληροφορίες ερώτησης για τον συγκεκριμένο τύπο ερώτησης';
$string['changeoptions'] = 'Αλλαγή επιλογών';
$string['essayonly'] = 'Οι παρακάτω ερωτήσεις πρέπει να βαθμολογηθούν χειροκίνητα';
$string['grade'] = 'βαθμός';
$string['gradeall'] = 'Βαθμολόγηση όλων';
$string['gradeattemptsall'] = 'Όλες ({$a})';
$string['gradeattemptsautograded'] = 'Αυτές που έχουν βαθμολογηθεί αυτόματα ({$a})';
$string['gradeattemptsmanuallygraded'] = 'Αυτές που έχουν βαθμολογηθεί προηγουμένως χειροκίνητα ({$a})';
$string['gradeattemptsneedsgrading'] = 'Εκείνες που χρειάζονται βαθμολόγηση ({$a})';
$string['graded'] = '(βαθμολογημένο)';
$string['gradenextungraded'] = 'Βαθμολόγηση των επόμενων {$a} μη βαθμολογημένων προσπαθειών';
$string['gradeungraded'] = 'Βαθμολόγηση και των {$a} μη βαθμολογημένων προσπαθειών';
$string['grading'] = 'Χειροκίνητη βαθμολόγηση';
$string['gradingall'] = 'Και οι {$a} προσπάθειες σε αυτή την ερώτηση.';
$string['gradingattempt'] = 'Προσπάθεια με αριθμό {$a->attempt} για τον/την {$a->fullname}';
$string['gradingattemptsxtoyofz'] = 'Προσπάθειες βαθμολόγησης {$a->from} έως {$a->to} από {$a->of}';
$string['gradingattemptwithidnumber'] = 'Αριθμός προσπάθειας {$a->attempt} για {$a->fullname} ({$a->idnumber})';
$string['grading:componentname'] = 'Αναφορά χειροκίνητης βαθμολόγησης';
$string['gradingnextungraded'] = 'Επόμενες {$a} μη βαθμολογημένες προσπάθειες';
$string['gradingnotallowed'] = 'Δεν έχετε το δικαίωμα να βαθμολογήσετε χειροκίνητα απαντήσεις σε αυτό το κουίζ';
$string['gradingquestionx'] = 'Βαθμολόγηση ερώτησης {$a->number}: {$a->questionname}';
$string['gradingreport'] = 'Αναφορά χειροκίνητης βαθμολόγησης';
$string['gradingungraded'] = '{$a} μη βαθμολογημένες προσπάθειες';
$string['gradinguser'] = 'Προσπάθειες για {$a}';
$string['grading:viewidnumber'] = 'Εμφάνιση των αναγνωριστικών αριθμών των μαθητών κατά τη διάρκεια της βαθμολόγησης';
$string['grading:viewstudentnames'] = 'Εμφάνιση των ονομάτων των μαθητών κατά τη διάρκεια της βαθμολόγησης';
$string['hideautomaticallygraded'] = 'Απόκρυψη ερωτήσεων που έχουν βαθμολογηθεί αυτόματα';
$string['inprogress'] = 'Σε εξέλιξη';
$string['invalidattemptid'] = 'Δεν υπάρχει τέτοιο αναγνωριστικό προσπάθειας';
$string['invalidquestionid'] = 'Η βαθμολογήσιμη ερώτηση με αναγνωριστικό {$a} δεν βρέθηκε';
$string['noquestionsfound'] = 'Δεν βρέθηκαν χειροκίνητα βαθμολογημένες ερωτήσεις';
$string['nothingfound'] = 'Τίποτα για εμφάνιση';
$string['options'] = 'Επιλογές';
$string['orderattempts'] = 'Προσπάθειες ταξινόμησης';
$string['pluginname'] = 'Μη αυτόματη βαθμολόγηση';
$string['privacy:metadata'] = 'Το πρόσθετο «Μη αυτόματη βαθμολόγηση κουίζ» δεν αποθηκεύει προσωπικά δεδομένα. Παρέχει μια διεπαφή στους χρήστες για να αποθηκεύουν δεδομένα, χωρίς το ίδιο το πρόσθετο να αποθηκεύει οτιδήποτε.';
$string['qno'] = 'Ερ. #';
$string['questionname'] = 'Όνομα ερώτησης';
$string['questionsperpage'] = 'Ερωτήσεις ανά σελίδα';
$string['questionsthatneedgrading'] = 'Ερωτήσεις που χρειάζονται βαθμολόγηση';
$string['questiontitle'] = 'Ερώτηση {$a->number} : «{$a->name}» ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} προσπάθειες {$a->openspan}βαθμολογημένες{$a->closespan}).';
$string['randomly'] = 'Τυχαία';
$string['saveandnext'] = 'Αποθήκευση και μετάβαση στην επόμενη σελίδα';
$string['showstudentnames'] = 'Δώστε ονόματα μαθητών';
$string['tograde'] = 'Προς βαθμολόγηση';
$string['total'] = 'Σύνολο';
$string['unknownquestion'] = 'Άγνωστη ερώτηση';
$string['updategrade'] = 'ενημέρωση βαθμών';
