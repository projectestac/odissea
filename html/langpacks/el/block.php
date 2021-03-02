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
 * Strings for component 'block', language 'el', version '3.8'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Μετακίνηση αυτού (του μπλοκ) σε μια ειδική θέση πλευρικής ελαχιστοποίησης.';
$string['anypagematchingtheabove'] = 'Οποιαδήποτε σελίδα ταιριάζει με τα παραπάνω';
$string['appearsinsubcontexts'] = 'Εμφανίζεται σε υπο-πλαίσια';
$string['assignrolesinblock'] = 'Αναθέστε ρόλους στο μπλοκ «{$a}»';
$string['blocksdrawertoggle'] = 'Απόκρυψη/εμφάνιση συρταριού πλοήγησης';
$string['blocksettings'] = 'Ρυθμίσεις μπλοκ';
$string['bracketfirst'] = '{$a} (πρώτο)';
$string['bracketlast'] = '{$a} (τελευταίο)';
$string['configureblock'] = 'Ρύθμιση μπλοκ {$a}';
$string['contexts'] = 'Πλαίσια σελίδας';
$string['contexts_help'] = 'Τα πλαίσια είναι πιο συγκεκριμένοι τύποι σελίδων όπου αυτό το μπλοκ μπορεί να εμφανιστεί μέσα στην τοποθεσία του αρχικού μπλοκ. Θα έχετε διάφορες επιλογές εδώ ανάλογα με την τοποθεσία του αρχικού μπλοκ και την τρέχουσα τοποθεσία σας. Για παράδειγμα, μπορείτε να περιορίσετε ένα μπλοκ να εμφανίζεται μόνο σε σελίδες φόρουμ σε ένα μάθημα, προσθέτοντας το μπλοκ στο μάθημα (κάνοντάς το να εμφανίζεται σε όλες τις υπο-σελίδες) και μετά πηγαίνοντας σε ένα φόρουμ και ορίζοντας στις επιλογές του μπλοκ, να περιορίζεται η εμφάνιση μόνο σε σελίδες φόρουμ.';
$string['createdat'] = 'Αρχική θέση μπλοκ';
$string['createdat_help'] = 'Η αρχική θέση που δημιουργήθηκε το μπλοκ. Οι ρυθμίσεις του μπλοκ μπορεί να προκαλέσουν την εμφάνιση του σε άλλες θέσεις (πλαίσια) μέσα στην αρχική θέση. Για παράδειγμα, ένα μπλοκ που δημιουργήθηκε σε μια σελίδα μαθήματος θα μπορούσε να εμφανιστεί σε δραστηριότητες μέσα σε αυτό το μάθημα. Ένα μπλοκ που δημιουργήθηκε στην αρχική σελίδα μπορεί να εμφανίζεται σε ολόκληρο τον ιστότοπο.';
$string['defaultregion'] = 'Προεπιλεγμένη περιοχή';
$string['defaultregion_help'] = 'Τα αισθητικά θέματα μπορούν να ορίσουν μία ή περισσότερες ονομασμένες περιοχές μπλοκ όπου εμφανίζονται μπλοκ. Αυτή η ρύθμιση ορίζει σε ποιά από αυτές τις περιοχές θέλετε το μπλοκ σας να εμφανίζεται από προεπιλογή. Η περιοχή μπορεί να παρακαμφθεί σε συγκεκριμένες σελίδες αν απαιτηθεί.';
$string['defaultweight'] = 'Προεπιλεγμένη βαρύτητα';
$string['defaultweight_help'] = 'Η προεπιλεγμένη βαρύτητα σας επιτρέπει να επιλέξετε περίπου που θέλετε το μπλοκ να εμφανίζεται στην επιλεγμένη περιοχή, είτε στην κορυφή ή στο κάτω μέρος. Η τελική περιοχή υπολογίζεται από όλα τα μπλοκ στην εν λόγω περιοχή (για παράδειγμα, μόνο ένα μπλοκ μπορεί πραγματικά να είναι στην κορυφή). Η τιμή αυτή μπορεί να παρακαμφθεί σε συγκεκριμένες σελίδες, εάν απαιτείται.';
$string['deleteblock'] = 'Διαγραφή μπλοκ {$a}';
$string['deleteblockcheck'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το μπλοκ με τίτλο {$a};';
$string['deleteblockwarning'] = '<p>Πρόκειται να διαγράψετε ένα μπλοκ που εμφανίζεται αλλού.</p><p>Αρχική τοποθεσία μπλοκ: {$a->location}<br />Εμφάνιση σε τύπους σελίδων: {$a->pagetype}</p><p>Είστε βέβαιοι ότι θέλετε να συνεχίσετε;</p>';
$string['deletecheck'] = 'Διαγραφή μπλοκ {$a};';
$string['dockblock'] = 'Πλευρική ελαχιστοποίηση του μπλοκ «{$a}»';
$string['hideblock'] = 'Σύμπτυξη μπλοκ {$a}';
$string['hidedockpanel'] = 'Απόκρυψη αναδυόμενου πάνελ';
$string['hidepanel'] = 'Απόκρυψη πίνακα';
$string['moveblock'] = 'Μετακίνηση μπλοκ {$a}';
$string['moveblockafter'] = 'Μετακίνηση μπλοκ μετά το μπλοκ {$a}';
$string['moveblockbefore'] = 'Μετακίνηση μπλοκ πριν από το μπλοκ {$a}';
$string['moveblockinregion'] = 'Μετακίνηση μπλοκ στην περιοχή {$a}';
$string['movingthisblockcancel'] = 'Μετακίνηση του μπλοκ ({$a})';
$string['myblocks'] = 'Τα μπλοκ μου';
$string['onthispage'] = 'Σε αυτή τη σελίδα';
$string['pagetypes'] = 'Τύποι σελίδας';
$string['pagetypewarning'] = 'Ο τύπος σελίδας που είχε καθοριστεί προηγουμένως δεν είναι πλέον επιλέξιμος. Επιλέξτε τον πιο κατάλληλο τύπο σελίδας παρακάτω.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Καταγράφει το πότε ο χρήστης ελαχιστοποίησε πλευρικά ένα μπλοκ';
$string['privacy:metadata:userpref:hiddenblock'] = 'Καταγράφει πότε ο χρήστης κατέρρευσε/έκρυψε ένα μπλοκ';
$string['privacy:request:blockisdocked'] = 'Υποδεικνύει εάν το μπλοκ έχει ελαχιστοποιηθεί πλευρικά';
$string['privacy:request:blockishidden'] = 'Δείχνει εάν το μπλοκ ήταν κρυμμένο/κατέρρευσε';
$string['region'] = 'Περιοχή';
$string['restrictpagetypes'] = 'Τύποι εμφάνισης σελίδων';
$string['showblock'] = 'Εμφάνιση μπλοκ {$a}';
$string['showoncontextandsubs'] = 'Εμφάνιση στο «{$a}» και σε οποιεσδήποτε σελίδες μέσα σε αυτό';
$string['showoncontextonly'] = 'Εμφάνιση στο «{$a}» μόνο';
$string['showonentiresite'] = 'Εμφάνιση σε όλο τον ιστότοπο';
$string['showonfrontpageandsubs'] = 'Εμφάνιση στην αρχική σελίδα και σε οποιαδήποτε σελίδα προστεθεί στην αρχική σελίδα';
$string['showonfrontpageonly'] = 'Εμφάνιση στην αρχική σελίδα μόνο';
$string['subpages'] = 'Επιλέξτε σελίδες';
$string['thisspecificpage'] = 'Αυτή η συγκεκριμένη σελίδα';
$string['undockall'] = 'Επαναφορά από πλευρική ελαχιστοποίηση όλων στην προηγούμενη θέση τους';
$string['undockblock'] = 'Επαναφορά από πλευρική ελαχιστοποίηση του μπλοκ «{$a}» στην προηγούμενη θέση του';
$string['undockitem'] = 'Επαναφορά από πλευρική ελαχιστοποίηση στην προηγούμενη θέση του στοιχείου';
$string['visible'] = 'Ορατό';
$string['weight'] = 'Συντελεστής βαρύτητας';
$string['wherethisblockappears'] = 'Που εμφανίζεται αυτό το μπλοκ';
