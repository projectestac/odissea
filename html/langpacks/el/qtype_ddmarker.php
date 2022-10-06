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
 * Strings for component 'qtype_ddmarker', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Κενά πεδία για {no} περισσότερους δείκτες θέσης';
$string['alttext'] = 'Εναλλακτικό κείμενο';
$string['answer'] = 'Απάντηση';
$string['bgimage'] = 'Εικόνα υπόβαθρου';
$string['clearwrongparts'] = 'Μετακινήστε εσφαλμένα τοποθετημένους δείκτες θέσης πίσω στην προεπιλεγμένη θέση εκκίνησης κάτω από την εικόνα';
$string['coords'] = 'Συντεταγμένες';
$string['correctansweris'] = 'Η σωστή απάντηση είναι: {$a}';
$string['draggableimage'] = 'Μεταφέρσιμη εικόνα';
$string['draggableitem'] = 'Μεταφέρσιμο στοιχείο';
$string['draggableitemheader'] = 'Μεταφέρσιμο στοιχείο {$a}';
$string['draggableitemtype'] = 'Τύπος';
$string['draggableword'] = 'Μεταφέρσιμο κείμενο';
$string['dropbackground'] = 'Εικόνα υπόβαθρου για μεταφορά των δεικτών θέσης επάνω της';
$string['dropzone'] = 'Ζώνη απόθεσης {$a}';
$string['dropzoneheader'] = 'Ζώνες απόθεσης';
$string['dropzones'] = 'Ζώνες απόθεσης';
$string['dropzones_help'] = 'Οι ζώνες απόθεσης μπορούν να οριστούν με συντεταγμένες ή να μετακινηθούν στη θέση τους στην παραπάνω προεπισκόπηση.

Επιλέγοντας πρώτα ένα σχήμα (κύκλος, ορθογώνιο ή πολύγωνο), θα προσθέσει ένα νέο σχήμα ζώνης απόθεσης στην επάνω αριστερή πλευρά της προεπισκόπησης. Είναι ίσως χρήσιμο να ελαχιστοποιήσετε το τμήμα με τους δείκτες θέσης, ώστε να μπορείτε να δείτε την προεπισκόπηση κατά την επεξεργασία των ζωνών απόθεσης.

Η επεξεργασία ενός σχήματος ξεκινά με ένα κλικ στο σχήμα στην προεπισκόπηση για να εμφανιστούν οι λαβές χειρισμού. Μπορείτε να μετακινήσετε το σχήμα χρησιμοποιώντας τη κεντρική λαβή ή να προσαρμόσετε τις διαστάσεις του σχήματος με τις λαβές των κορυφών.

Μόνο για πολύγωνα, κρατώντας το πλήκτρο Ctrl (πλήκτρο Command σε Mac) ενώ κάνετε κλικ σε μια λαβή κορυφών, θα προστεθεί μια νέα κορυφή στο πολύγωνο. Παρακαλούμε κρατήστε ένα πολύγωνο σχήμα όσο το δυνατόν απλούστερο, χωρίς διασταυρώσεις.

Για πληροφορίες, τα τρία σχήματα χρησιμοποιούν συντεταγμένες με αυτόν τον τρόπο:

* Κύκλος: κέντρο_Χ, κέντρο_Ψ; ρ ακτίνα <br />για παράδειγμα: <code>80, 100; 50</code>
* Ορθογώνιο: πάνω_αριστερά_Χ, πάνω_αριστερά_Ψ; πλάτος, ύψος<br />για παράδειγμα: <code>20, 60, 80, 40</code>
* Πολύγωνο: Χ1, Ψ1; Χ2, Ψ2. ...; Χν, Ψν<br />για παράδειγμα: <code>20, 60, 100, 60, 20, 100</code>

Η επιλογή ενός κειμένου από τους δείκτες θέσης θα προσθέσει αυτό το κείμενο στο σχήμα στην προεπισκόπηση.';
$string['followingarewrong'] = 'Οι ακόλουθοι δείκτες θέσης τοποθετήθηκαν σε λάθος περιοχή : {$a}.';
$string['followingarewrongandhighlighted'] = 'Οι παρακάτω δείκτες θέσης τοποθετήθηκαν εσφαλμένα: {$a}. Οι φωτο-επισημασμένοι δείκτες θέσης εμφανίζονται τώρα με τη σωστή τοποθέτηση.<br />Κάντε κλικ στο δείκτη θέσης για να φωτο-επισημάνετε την επιτρεπόμενη περιοχή.';
$string['formerror_nobgimage'] = 'Θα πρέπει να επιλέξετε μια εικόνα που θα χρησιμοποιηθεί ως υπόβαθρο για την περιοχή μεταφοράς & απόθεσης.';
$string['formerror_noitemselected'] = 'Έχετε ορίσει μια ζώνη απόθεσης αλλά δεν επιλέξατε έναν δείκτη θέσης που πρέπει να μεταφερθεί στη ζώνη.';
$string['formerror_nosemicolons'] = 'Δεν υπάρχουν ερωτηματικά στη συμβολοσειρά συντεταγμένων σας. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Μόνο ετικέτες «{$a}» επιτρέπονται στην ταμπέλα για έναν δείκτη θέσης.';
$string['formerror_onlyusewholepositivenumbers'] = 'Παρακαλούμε, χρησιμοποιήστε μόνο ολόκληρους θετικούς αριθμούς για να προσδιορίσετε τις συντεταγμένες x, y και/ή το πλάτος και το ύψος των σχημάτων. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Για ένα σχήμα πολυγώνου πρέπει να καθορίσετε τουλάχιστον 3 σημεία. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Έχετε εισάγει δύο φορές τις ίδιες συντεταγμένες. Κάθε σημείο πρέπει να είναι μοναδικό. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Το σχήμα που ορίσατε βγαίνει από τα όρια της εικόνας υπόβαθρου.';
$string['formerror_toomanysemicolons'] = 'Υπάρχουν υπερβολικά πολλά μέρη, που χωρίζονται με ερωτηματικά, στις συντεταγμένες που έχετε ορίσει. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Το πλάτος και το ύψος που έχετε καθορίσει είναι μη αναγνωρίσιμα. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Οι συντεταγμένες x, y που έχετε καθορίσει είναι μη αναγνωρίσιμες. Οι συντεταγμένες σας για ένα {$a->shape} θα πρέπει να εκφράζονται ως - {$a->coordsstring}.';
$string['infinite'] = 'Άπειρος';
$string['marker'] = 'Δείκτης θέσης';
$string['marker_n'] = 'Δείκτης θέσης {no}';
$string['markers'] = 'Δείκτες θέσης';
$string['nolabel'] = 'Χωρίς κείμενο ταμπέλας';
$string['noofdrags'] = 'Αριθμός';
$string['pleasedragatleastonemarker'] = 'Η απάντησή σας δεν είναι πλήρης. Πρέπει να τοποθετήσετε τουλάχιστον έναν δείκτη θέσης στην εικόνα.';
$string['pluginname'] = 'Δείκτες θέσης για μεταφορά & απόθεση';
$string['pluginnameadding'] = 'Προσθήκη δείκτη θέσης για μεταφορά & απόθεση';
$string['pluginnameediting'] = 'Επεξεργασία δείκτη θέσης για μεταφορά & απόθεση';
$string['pluginname_help'] = 'Οι δείκτες θέσης για μεταφορά & απόθεση απαιτούν από τον αποκρινόμενο να μεταφέρει ταμπέλες κειμένου και να τις αποθέσει σε καθορισμένες ζώνες απόθεσης σε μια εικόνα υπόβαθρου.';
$string['pluginname_link'] = 'ερώτηση/τύπος/μεταποθδείκτηςθέσης';
$string['pluginnamesummary'] = 'Οι δείκτες θέσης μεταφέρονται και αποθέτονται πάνω σε μια εικόνα υπόβαθρου.

Σημείωση: Αυτός ο τύπος ερώτησης δεν είναι προσβάσιμος σε χρήστες με προβλήματα όρασης.';
$string['previewareaheader'] = 'Προεπισκόπηση';
$string['previewareamessage'] = 'Επιλέξτε μια εικόνα υπόβαθρου, πληκτρολογήστε ταμπέλες κειμένου για δείκτες θέσης και ορίστε ζώνες απόθεσης στην εικόνα υπόβαθρου μέσα στις οποίες πρέπει να μεταφέρονται.';
$string['privacy:metadata'] = 'Το πρόσθετο τύπου ερώτησης μεταφοράς & απόθεσης δεικτών θέσης δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['refresh'] = 'Ανανέωση προεπισκόπησης';
$string['shape'] = 'Σχήμα';
$string['shape_circle'] = 'Κύκλος';
$string['shape_circle_coords'] = 'x,y;r (όπου x,y είναι οι συντεταγμένες του κέντρου του κύκλου και r είναι η ακτίνα)';
$string['shape_circle_lowercase'] = 'κύκλος';
$string['shape_polygon'] = 'Πολύγωνο';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (Όπου x1, y1 είναι οι συντεταγμένες της πρώτης κορυφής, x2, y2 είναι οι συντεταγμένες της δεύτερης κ.ο.κ..  Δεν χρειάζεται να επαναλάβετε τις συντεταγμένες για την πρώτη κορυφή για να κλείσετε το πολύγωνο.)';
$string['shape_polygon_lowercase'] = 'πολύγωνο';
$string['shape_rectangle'] = 'Ορθογώνιο';
$string['shape_rectangle_coords'] = 'χ,ψ;π,υ (όπου χ, ψ είναι οι συντεταγμένες της άνω αριστερής γωνίας του ορθογωνίου και π και υ είναι το πλάτος και το ύψος του ορθογωνίου)';
$string['shape_rectangle_lowercase'] = 'ορθογώνιο';
$string['showmisplaced'] = 'Φωτο-επισήμανση ζωνών απόθεσης στις οποίες δεν έγινε απόθεση του σωστού δείκτη θέσης.';
$string['shuffleimages'] = 'Ανακάτεμα των μεταφέρσιμων στοιχείων κάθε φορά που επιχειρείται η ερώτηση';
$string['stateincorrectlyplaced'] = 'Να αναφέρετε ποιοι δείκτες θέσης τοποθετήθηκαν λανθασμένα';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Ζώνη απόθεσης {$a}';
$string['ytop'] = 'Πάνω';
