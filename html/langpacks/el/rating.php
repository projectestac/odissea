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
 * Strings for component 'rating', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Μέσος όρος βαθμολογίας';
$string['aggregatecount'] = 'Άθροισμα βαθμολογιών';
$string['aggregatemax'] = 'Μεγαλύτερος βαθμός';
$string['aggregatemin'] = 'Μικρότερος βαθμός';
$string['aggregatenone'] = 'Χωρίς βαθμολόγηση';
$string['aggregatesum'] = 'Συνολική βαθμολογία';
$string['aggregatetype'] = 'Τύπος συνάθροισης';
$string['aggregatetype_help'] = 'Ο τύπος συγκεντρωτικών ορίζει το πως οι βαθμολογίες θα συνδυάζονται για να σχηματίσουν τον τελικό βαθμό στο βαθμολόγιο.

* Μέσος όρος βαθμολογίας - η μέση τιμή όλων των βαθμολογιών
* Άθροισμα βαθμολογιών - Ο αριθμός των βαθμολογημένων αντικειμένων γίνεται ο τελικός βαθμός. Σημειώστε ότι το συνολικό άθροισμα δεν μπορεί να υπερβαίνει το μεγαλύτερο βαθμό για τη δραστηριότητα.
* Μεγαλύτερος - Ο υψηλότερος βαθμός γίνεται ο τελικός βαθμός.
* Μικρότερος - Ο χαμηλότερος βαθμός γίνεται ο τελικός βαθμός
* Σύνολο - Όλοι οι βαθμοί προστίθενται μαζί. Σημειώστε ότι το συνολικό άθροισμα δεν μπορεί να υπερβαίνει το μεγαλύτερο βαθμό για τη δραστηριότητα.

Αν έχει επιλεγεί «Χωρίς βαθμολόγηση» τότε η δραστηριότητα δεν θα εμφανίζεται στο βαθμολόγιο.';
$string['allowratings'] = 'Να επιτρέπονται αξιολογήσεις στοιχείων;';
$string['allratingsforitem'] = 'Όλες οι βαθμολογίες που υποβλήθηκαν';
$string['capabilitychecknotavailable'] = 'Η δυνατότητα ελέγχου δεν είναι διαθέσιμη μέχρι να αποθηκευτεί η δραστηριότητα';
$string['couldnotdeleteratings'] = 'Λυπούμαστε, αυτό δεν μπορεί να διαγραφεί καθώς κάποιοι το έχουν ήδη αξιολογήσει';
$string['grade_rating_name'] = 'Αξιολόγηση';
$string['norate'] = 'Δεν επιτρέπεται αξιολόγηση στοιχείων!';
$string['noratings'] = 'Δεν υποβλήθηκαν βαθμολογίες';
$string['noviewanyrate'] = 'Μπορείτε να δείτε αποτελέσματα μόνο για στοιχεία που εσείς δημιουργήσατε';
$string['noviewrate'] = 'Δεν έχετε τη δυνατότητα να δείτε αξιολογήσεις στοιχείων';
$string['privacy:metadata:rating'] = 'Η αξιολόγηση που εισάγει χρήστης αποθηκεύεται μαζί με μια αντιστοίχιση του στοιχείου που αξιολογήθηκε.';
$string['privacy:metadata:rating:rating'] = 'Η αριθμητική αξιολόγηση που εισήγαγε ο χρήστης.';
$string['privacy:metadata:rating:timecreated'] = 'Πότε έγινε η πρώτη βαθμολόγηση.';
$string['privacy:metadata:rating:timemodified'] = 'Πότε έγινε η τελευταία βαθμολόγηση.';
$string['privacy:metadata:rating:userid'] = 'Ο χρήστης που έκανε την αξιολόγηση.';
$string['rate'] = 'Αξιολόγηση';
$string['ratepermissiondenied'] = 'Δεν έχετε δικαίωμα να αξιολογήσετε αυτό το στοιχείο';
$string['rating'] = 'Αξιολόγηση';
$string['ratinginvalid'] = 'Η αξιολόγηση είναι μη έγκυρη';
$string['ratings'] = 'Βαθμοί';
$string['ratingtime'] = 'Περιορισμός των βαθμών σε στοιχεία με ημερομηνίες σε αυτό το διάστημα:';
$string['rolewarning'] = 'Ρόλοι με δικαίωμα να βαθμολογούν';
$string['rolewarning_help'] = 'Για την υποβολή βαθμολογιών οι χρήστες απαιτείται να έχουν την δυνατότητα moodle/rating:rate και όποιες άλλες δυνατότητες απαιτούνται ειδικά για το συγκεκριμένο άρθρωμα. Οι χρήστες που τους ανατίθενται οι ακόλουθοι ρόλοι θα είναι σε θέση να βαθμολογούν. Η λίστα των ρόλων μπορεί να τροποποιηθεί μέσω του συνδέσμου δικαιωμάτων στο μενού ενεργειών ή στο μπλοκ διαχείρισης, ανάλογα με το αισθητικό θέμα.';
$string['scaleselectionrequired'] = 'Κατά την επιλογή ενός τύπου συνάθροισης βαθμολογιών πρέπει επίσης να επιλέξετε είτε μια κλίμακα είτε ένα μέγιστο αριθμό πόντων.';
