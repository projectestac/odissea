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
 * Strings for component 'cachestore_file', language 'el', version '4.4'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Κατάλογος που δημιουργείται αυτόματα';
$string['autocreate_help'] = 'Αν ενεργοποιηθεί, ο φάκελος που καθορίζεται στο μονοπάτι θα δημιουργηθεί αυτόματα αν δεν υπάρχει ήδη.';
$string['path'] = 'Μονοπάτι/φάκελος κρυφής μνήμης';
$string['path_help'] = 'Ο φάκελος που θα χρησιμοποιείται για την αποθήκευση αρχείων για την κρυφή μνήμη. Αν μείνει κενό (προεπιλογή) ένας φάκελος/κατάλογος θα δημιουργηθεί αυτόματα στον φάκελο δεδομένων του Moodle (moodledata). Αυτός μπορεί να χρησιμοποιηθεί ώστε να δείχνει μια αποθήκευση αρχείου προς ένα φάκελο σε ένα καλύτερης επίδοσης οδηγό/δίσκο (όπως έναν στην μνήμη).';
$string['pluginname'] = 'Κρυφή μνήμη αρχείων';
$string['prescan'] = 'Φάκελος προσάρωσης';
$string['prescan_help'] = 'Εάν ενεργοποιηθεί, ο κατάλογος σαρώνεται κατά την πρώτη χρήση της κρυφής μνήμης και τα αιτήματα για αρχεία ελέγχονται πρώτα με βάση τα δεδομένα σάρωσης. Αυτό μπορεί να βοηθήσει εάν έχετε ένα αργό σύστημα αρχείων και βρίσκετε ότι οι λειτουργίες αρχείων σας προκαλούν ένα μποτιλιάρισμα.';
$string['privacy:metadata'] = 'Το πρόσθετο αποθήκευσης κρυφής μνήμης αρχείων, αποθηκεύει στοιχεία για λίγο ως μέρος της λειτουργικότητας της κρυφής μνήμης, αλλά τα δεδομένα αυτά εκκαθαρίζονται τακτικά.';
$string['singledirectory'] = 'Μονή αποθήκευση καταλόγου';
$string['singledirectory_help'] = 'Εάν ενεργοποιηθεί, τα αρχεία (στοιχεία κρυφής μνήμης) θα αποθηκευτούν σε ένα μόνο κατάλογο, αντί να διαχωριστούν σε πολλούς καταλόγους.

Ενεργοποιώντας τη ρύθμιση αυτή, θα επιταχυνθεί η αλληλεπίδραση αρχείων, αλλά θα υπάρχει αυξημένος κίνδυνος να υπερβεί τα όρια του συστήματος αρχείων.

Συνιστάται να ενεργοποιήσετε αυτήν την ρύθμιση μόνο εάν ισχύουν τα ακόλουθα:

* Εάν γνωρίζετε ότι ο αριθμός των στοιχείων στην κρυφή μνήμη θα είναι αρκετά μικρός ώστε να μην προκαλέσει προβλήματα στο σύστημα αρχείων που χρησιμοποιείτε.
* Τα δεδομένα που αποθηκεύονται στην κρυφή μνήμη δεν είναι δαπανηρά για να δημιουργηθούν. Εάν είναι, τότε το να διατηρήσετε την προεπιλογή μπορεί να εξακολουθεί να είναι η καλύτερη επιλογή, καθώς μειώνει την πιθανότητα προβλημάτων';
