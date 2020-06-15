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
 * Strings for component 'tool_filetypes', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Προσθήκη νέου τύπου αρχείου';
$string['corestring'] = 'Συμβολοσειρά εναλλακτικής γλώσσας';
$string['corestring_help'] = 'Αυτή η ρύθμιση μπορεί να χρησιμοποιηθεί για την επιλογή συμβολοσειράς διαφορετικής γλώσσας από το αρχείο γλώσσας πυρήνα mimetypes.php. Γενικά πρέπει να μένει κενό. Για προσαρμοσμένους τύπους χρησιμοποιήστε το πεδίο περιγραφής.';
$string['defaulticon'] = 'Προεπιλεγμένο εικονίδιο για τύπο MIME';
$string['defaulticon_help'] = 'Αν υπάρχουν πολλαπλές επεκτάσεις αρχείου με τον ίδιο τύπο MIME, επιλέξτε αυτή την επιλογή για μια από τις επεκτάσεις, έτσι ώστε το εικονίδιό της να χρησιμοποιηθεί όταν προσδιορίζεται/αναζητείται ένα εικονίδιο από τον τύπο MIME.';
$string['deletea'] = 'Διαγραφή {$a}';
$string['delete_confirmation'] = 'Είστε απολύτως σίγουροι ότι θέλετε να διαγραφεί το <strong>.{$a}</strong>;';
$string['deletefiletypes'] = 'Διαγραφή τύπου αρχείου';
$string['description'] = 'Προσαρμοσμένη περιγραφή';
$string['description_help'] = 'Απλή περιγραφή τύπου αρχείου, π.χ. «Ηλε.βιβλίο Kindle». Αν ο ιστότοπός σας υποστηρίζει πολλαπλές γλώσσες και χρησιμοποιεί το φίλτρο πολλαπλών γλωσσών, μπορείτε να εισάγετε ετικέτες πολλαπλών γλωσσών σε αυτό το πεδίο για να παρέχετε μια περιγραφή σε διαφορετικές γλώσσες.';
$string['descriptiontype'] = 'Τύπος περιγραφής';
$string['descriptiontype_custom'] = 'Προσαρμοσμένη περιγραφή που καθορίζεται σε αυτή τη φόρμα';
$string['descriptiontype_default'] = 'Προεπιλογή (τύπος MIME ή αντίστοιχη συμβολοσειρά γλώσσας αν είναι διαθέσιμη)';
$string['descriptiontype_help'] = 'Υπάρχουν τρεις δυνατοί τρόποι καθορισμού περιγραφής.

* Η προεπιλεγμένη συμπεριφορά χρησιμοποιεί τον τύπο MIME. Αν υπάρχει στο αρχείο mimetypes.php συμβολοσειρά γλώσσας που αντιστοιχεί σε αυτόν τον τύπο MIME, τότε θα χρησιμοποιηθεί. Αλλιώς θα εμφανιστεί στους χρήστες, ο ίδιος ο τύπος MIME.
* Μπορείτε να καθορίσετε μια προσαρμοσμένη περιγραφή σε αυτήν εδώ την φόρμα.
* Μπορείτε να καθορίσετε το όνομα μιας συμβολοσειράς γλώσσας στο mimetypes.php για να χρησιμοποιηθεί αντί για τον τύπο MIME.';
$string['descriptiontype_lang'] = 'Εναλλακτική συμβολοσειρά γλώσσας (από το types.php mime)';
$string['displaydescription'] = 'Περιγραφή';
$string['editfiletypes'] = 'Επεξεργασία υπάρχοντος τύπου αρχείου';
$string['emptylist'] = 'Δεν υπάρχουν καθόλου δηλωμένοι τύποι αρχείων.';
$string['error_addentry'] = 'Η επέκταση τύπου αρχείου, η περιγραφή, ο τύπος MIME και το εικονίδιο, δεν πρέπει να περιέχουν αλλαγή γραμμής και τον χαρακτήρα «;» (ελληνικό ερωτηματικό).';
$string['error_defaulticon'] = 'Κάποια άλλη επέκταση αρχείου με τον ίδιο τύπο MIME είναι ήδη ορισμένη ως το προεπιλεγμένο εικονίδιο.';
$string['error_extension'] = 'Η επέκταση τύπου αρχείου <strong>{$a}</strong> υπάρχει ήδη ή είναι άκυρη. Οι επεκτάσεις αρχείων πρέπει να είναι μοναδικές και πρέπει να μην περιέχουν ειδικούς χαρακτήρες.';
$string['error_notfound'] = 'Ο τύπος αρχείου με επέκταση {$a} δεν βρέθηκε.';
$string['extension'] = 'Επέκταση';
$string['extension_help'] = 'Επέκταση ονόματος αρχείου χωρίς την τελεία, π.χ. «mobi»';
$string['groups'] = 'Ομάδες τύπων';
$string['groups_help'] = 'Προαιρετική λίστα με ομάδες τύπων αρχείων στις οποίες αυτός ο τύπος ανήκει. Υπάρχουν κατηγορίες γενικής χρήσης όπως «έγγραφο» και «εικόνα».';
$string['icon'] = 'Εικονίδιο αρχείου';
$string['icon_help'] = 'Όνομα αρχείου εικονιδίου. Η λίστα με τα εικονίδια λαμβάνεται από τον κατάλογο/φάκελο /pix/f της εγκατάστασης Moodle σας. Μπορείτε να προσθέσετε προσαρμοσμένα εικονίδια σε αυτόν τον φάκελο αν απαιτείται.';
$string['mimetype'] = 'Τύπος MIME';
$string['mimetype_help'] = 'Τύπος MIME που συσχετίζεται με αυτόν τον τύπο αρχείου, π.χ. «application/x-mobipocket-ebook» (MIME=Multipurpose Internet Mail Extensions: μορφότυπος ηλε.ταχυδρομείου με επεκτάσεις πολλαπλού σκοπού. Οτιδήποτε πέρα από το απλό αγγλικό κείμενο, π.χ. ελληνικά, εικόνες, συνημμένα κλπ).';
$string['pluginname'] = 'Τύποι αρχείου';
$string['privacy:metadata'] = 'Το πρόσθετο «Τύποι αρχείων» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['revert'] = 'Επαναφορά του {$a} στις προεπιλογές του Moodle';
$string['revert_confirmation'] = 'Είστε σίγουροι ότι θέλετε να επαναφέρετε το <strong>.{$a}</strong> στην προεπιλογή του Moodle, απορρίπτοντας τις αλλαγές;';
$string['revertfiletype'] = 'Επαναφορά ενός τύπου αρχείου';
$string['source'] = 'Τύπος';
$string['source_custom'] = 'Προσαρμοσμένη';
$string['source_deleted'] = 'Διαγραμμένη';
$string['source_modified'] = 'Τροποποιημένη';
$string['source_standard'] = 'Τυπική';
