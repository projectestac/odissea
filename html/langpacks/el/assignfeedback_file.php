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
 * Strings for component 'assignfeedback_file', language 'el', version '4.5'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Να ανεβούν ένα ή περισσότερα αρχεία ανατροφοδότησης για όλους τους επιλεγμένους χρήστες;';
$string['batchuploadfiles'] = 'Ανέβασμα αρχείων ανατροφοδότησης για πολλούς χρήστες';
$string['batchuploadfilesforusers'] = 'Αποστολή αρχείων ανατροφοδότησης για {$a} επιλεγμένους/-ο χρήστες/-η.';
$string['configmaxbytes'] = 'Μέγιστο μέγεθος αρχείου';
$string['confirmuploadzip'] = 'Επιβεβαιώστε το ανέβασμα του zip';
$string['countfiles'] = '{$a} αρχεία';
$string['default'] = 'Ενεργοποιημένο από προεπιλογή';
$string['default_help'] = 'Αν οριστεί, αυτή η μέθοδος ανατροφοδότησης θα ενεργοποιηθεί από προεπιλογή για όλες τις νέες εργασίες.';
$string['enabled'] = 'Αρχείο ανατροφοδότησης';
$string['enabled_help'] = 'Εάν ενεργοποιηθεί, ο διδάσκων θα μπορεί να ανεβάζει αρχεία με ανατροφοδότηση όταν βαθμολογεί υποβολές εργασίας. Αυτά τα αρχεία μπορεί να είναι, αλλά δεν περιορίζονται σε, βαθμολογημένες υποβολές μαθητών, έγγραφα με σχολιασμό ή ανατροφοδότηση με ηχογράφηση ομιλίας.';
$string['feedbackfileadded'] = 'Νέο αρχείο ανατροφοδότησης «{$a->filename}» για το μαθητή «{$a->student}»';
$string['feedbackfileupdated'] = 'Το αρχείο ανατροφοδότησης «{$a->filename}» ενημερώθηκε για τον μαθητή «{$a->student}»';
$string['feedbackzip'] = 'Συμπιεσμένο αρχείο zip με αρχεία ανατροφοδότησης';
$string['feedbackzip_help'] = 'Ένα συμπιεσμένο αρχείο που περιέχει μια λίστα αρχείων ανατροφοδότησης για έναν ή περισσότερους μαθητές. Τα αρχεία ανατροφοδότησης θα αποδοθούν στους μαθητές με βάση το αναγνωριστικό συμμετέχοντα, το οποίο θα πρέπει να είναι το δεύτερο μέρος κάθε ονόματος αρχείου αμέσως μετά το πλήρες όνομα του χρήστη. Αυτή η σύμβαση ονοματοδοσίας χρησιμοποιείται κατά τη λήψη των υποβολών, ώστε να μπορείτε να κάνετε λήψη όλων των υποβολών, να προσθέσετε σχόλια σε μερικά αρχεία και στη συνέχεια να συμπιέσετε ξανά και να ανεβάσετε όλα τα αρχεία. Αρχεία χωρίς αλλαγές θα αγνοηθούν.';
$string['file'] = 'Αρχεία ανατροφοδότησης';
$string['filesadded'] = 'Αρχεία ανατροφοδότησης που προστέθηκαν: {$a}';
$string['filesupdated'] = 'Αρχεία ανατροφοδότησης που ενημερώθηκαν: {$a}';
$string['importfeedbackfiles'] = 'Εισαγωγή αρχείου(ων) ανατροφοδότησης';
$string['maxbytes'] = 'Μέγιστο μέγεθος αρχείου';
$string['maxfiles'] = 'Μέγιστος αριθμός ανεβασμένων αρχείων';
$string['maximumsize'] = 'Μέγιστο μέγεθος αρχείου';
$string['moreusers'] = '{$a} περισσότερα...';
$string['nochanges'] = 'Δεν υπάρχουν αλλαγές';
$string['pluginname'] = 'Αρχείο ανατροφοδότησης';
$string['privacy:metadata:filepurpose'] = 'Αρχεία ανατροφοδότησης από τον διδάσκοντα για τον μαθητή.';
$string['privacy:path'] = 'Αρχεία ανατροφοδότησης';
$string['selectedusers'] = 'Επιλεγμένοι χρήστες';
$string['uploadfiles'] = 'Αποστολή αρχείου ανατροφοδότησης';
$string['uploadzip'] = 'Ανέβασμα πολλών αρχείων ανατροφοδότησης σε ένα (συμπιεσμένο αρχείο) zip';
$string['uploadzipsummary'] = 'Αρχεία ανατροφοδότησης μετά από εισαγωγή από ένα (συμπιεσμένο αρχείο) zip';
$string['userswithnewfeedback'] = 'Χρήστες με ενημερωμένη ανατροφοδότηση: {$a}';
