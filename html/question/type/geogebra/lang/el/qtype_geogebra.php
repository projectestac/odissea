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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Προσθήκη περιορισμών (συνθηκών) στις μεταβλητές.';
$string['addmorevarblanks'] = 'Κενά για {no} περισσότερες μεταβλητές';
$string['answerinvalid'] = 'Η απάντηση-συμβολοσειρά δεν είναι έγκυρη. Αυτό δεν μπορεί να συμβαίνει.';
$string['answermissing'] = 'Η απάντηση λείπει. Πιθανώς η JavaScript δεν είναι ενεργοποιημένη ή συνέβη κάποιο άγνωστο λάθος στο φυλλομετρητή';
$string['answervar'] = 'Μεταβλητές για αυτόματη βαθμολόγηση';
$string['answervar_help'] = 'Για την αυτόματη βαθμολόγηση: Ένα όνομα μιας μεταβλητής Boolean στο GeoGebra που να είναι αληθής, αν ο μαθητής έλυσε την ερώτηση (εν μέρει). Προσθέτει όλες τις βαθμολογίες  για όλες τις μεταβλητές Boolean. Η ερώτηση είναι σωστή εάν οποιοσδήποτε συνδυασμός υπερβαίνει το 100%, αλλά θα πρέπει να υπάρχει τουλάχιστον ένας συνδυασμός που αθροίζει ακριβώς το 100%. Αφήστε κενό για χειροκίνητη βαθμολόγηση.';
$string['applet_advanced_settings'] = 'Προχωρημένες ρυθμίσεις...';
$string['constraints'] = 'Σταθερές (συνθήκες)';
$string['constraints_help'] = 'Υπάρχουν καθόλου περιορισμοί για τις μεταβλητές, όπως α < β, που δεν μπορούν να δηλωθούν από τις ιδιότητες του δρομέα; Να τις χωρίζετε με το κόμμα. Οι σχέσεις που υποστηρίζονται είναι είναι: <, <=,>,> =. Αν χρειάζεστε ισότητα θα πρέπει να χρησιμοποιήσετε την ίδια μεταβλητή κατά τη δημιουργία του φύλλου εργασίας του GeoGebra. Δυναμική περιοχές, όπως η χρήση μεταβλητών για το μέγιστο και το ελάχιστο δρομέα δεν υποστηρίζονται.';
$string['constraintswrongortoohard'] = '{$ 2} είναι λάθος ή πάρα πολύ δύσκολο να ανταποκριθεί, προσπαθήσαμε (brute force) {$ 3} φορές σε {} $ 4 δευτερόλεπτα. Ίσως θα χρησιμοποιήσουμε μια καλύτερη μέθοδος στο μέλλον ...';
$string['dragndrop'] = 'Σύρε και εναπόθεσε ένα αρχείο GeoGebra οπουδήποτε στην εφαρμογή του GeoGebra';
$string['enable_label_drags'] = 'Ενεργοποιημένο το σύρσιμο των ετικετών';
$string['enable_right_click'] = 'Ενεργό το δεξί κλικ και η επεξεργασία του πληκτρολογίου';
$string['enable_shift_drag_zoom'] = 'Ενεργοποιημένο το Shift-Drag & Zoom';
$string['feedback'] = 'Αξιολόγηση όταν η μεταβλητή είναι αληθής';
$string['feedback_help'] = 'Η αξιολόγηση γίνεται αυτόματα από επικεφαλίδα της  μεταβλητής στο αρχείο του GeoGebra.';
$string['geogebraapplet'] = 'Εφαρμογή GeoGebra';
$string['getvars'] = 'Πάρτε μεταβλητές που μπορούν να γίνουν τυχαίες από την εφαρμογή';
$string['ggbfilemissing'] = 'Η συμβολοσειρά base64 στην απόκριση χάθηκε. Πιθανώς τα JavaScript δεν είναι ενεργοποιημένα στο πρόγραμμα περιήγησης ή προέκυψε κάποιο άγνωστο σφάλμα';
$string['ggbturl'] = 'URL ή  ID του φύλλου εργασίας του GeoGebra';
$string['ggbturl_help'] = 'Μπορείτε είτε να χρησιμοποιήσετε το κουμπί διαμοιρασμού στο GeoGebra και να αντιγράψετε και να επικολλήσετε τον σύνδεσμο ή χρησιμοποιήστε το αποθετήριο του GeoGebra. Η εφαρμογή και οι παράμετροι αποθηκεύονται στη βάση δεδομένων, η εφαρμογή δεν θα φορτωθεί από GeoGebra εκτός εάν ζητηθεί. Υποστηρίζεται επίσης η  παροχή ταυτότητας ID ή κουμπί διαμοιρασμού .';
$string['ggbxmlmissing'] = 'Η συμβολοσειρά XML στην απόκριση χάθηκε. Πιθανώς τα JavaScript δεν είναι ενεργοποιημένα στο πρόγραμμα περιήγησης ή προέκυψε κάποιο άγνωστο σφάλμα';
$string['invalidinequality'] = '{$a} δεν είναι έγκυρο';
$string['isexercise'] = 'Χρήση του GeoGebra-Exercise για έλεγχο της ερώτησης';
$string['isexercise_help'] = 'Η εφαρμογή περιέχει εργαλεία οριζόμενα από τον χρήστη  που μπορούν να χρησιμοποιηθεί για τον αυτόματο έλεγχο της άσκησης.\nΠροσοχή: Όλες οι παρακάτω απαντήσεις δεν είναι εφαρμόσιμες στην περίπτωση αυτή!';
$string['israndomized'] = 'Υπάρχουν μεταβλητές που θα πρέπει να είναι τυχαίες;';
$string['loadapplet'] = '(Ξανα)φόρτωσε και δείξε την εφαρμογή';
$string['loadapplet_help'] = '(Ξανα)φόρτωσε την εφαρμογή από το GeoGebra και να αποθηκεύσετε τη νέα έκδοση από GeoGebra στη βάση δεδομένων.';
$string['mineqmax'] = 'To Ελάχιστο και το Μέγιστο για τη τυχαά επιλογή δεν ανταποκρίνονται κατάλληλα για τη μεταβλητή {$ 5}, είτε δεν έχετε ορίσει σωστά το Ελάχιστο και το μέγιστο του δρομέα ή το στοιχείο δεν είναι καν δρομέας. Διορθώστε το στο αρχείο σας του GeoGebra.';
$string['minplusstepgtmax'] = 'Αν στο Ελάχιστο προσθέσετε κάτι , γίνεται μεγαλύτερο από το Μέγιστο για την μεταβλητή {$ 5}, διορθώστε το στο αρχείο σας του GeoGebra.';
$string['noappletloaded'] = 'Δεν φορτώθηκε καμμιά εφαρμογή! Ελέγξτε αν το URL είναι σωστό και αν δείτε μια εφαρμογή μετά τη επιλογή του δεσμού ή  (ξανα) φόρτωση της εφαρμογής';
$string['nofractionsumeq1'] = 'Τουλάχιστον ένας συνδυασμός των βαθμών πρέπει να έχει άθροισμα 100%';
$string['pluginname_help'] = 'Ερωτήσεις όπου ο μαθητής μπορεί να λύσει το πρόβλημα με τη χρήση του GeoGebra';
$string['pluginnameadding'] = 'Προσθήκη μιας ερώτησης στο GeoGebra';
$string['pluginnameediting'] = 'Επεξεργασία μια ερώτηση στο GeoGebra';
$string['pluginnamesummary'] = 'Μια έκδοση του υπολογίζεται ερωτήσεις που χρησιμοποιεί το GeoGebra για να δείξει την ερώτηση και την επαλήθευση της απάντησης όταν το κουίζ πραγματοποιηθεί.';
$string['randomizedbutnovars'] = 'Έχετε επιλέξει ότι η ερώτηση πρέπει να είναι τυχαία, αλλά δεν ορίσατε κάποιες μεταβλητές να είναι τυχαίες.';
$string['randomizedvar'] = 'Μεταβλητές που πρέπει να είναι τυχαίες';
$string['randomizedvar_help'] = 'Οι μεταβλητές  θα πρέπει να είναι τυχαίες (χωρισμένες με κόμμα). Χρησιμοποιήστε τις επιλογές του δρομές στο GeoGebra για να δηλώσετε το Ελάχιστο , Μέγιστο και την Αύξηση. Οι μεταβλητές αυτές μπορούν επίσης να χρησιμοποιηθούν στο κείμενο της ερώτησης με εγκλεισμό τους σε άγκιστρα, για παράδειγμα: {a}';
$string['show_algebra_input'] = 'Εμφάνιση Μπάρας Εισαγωγής';
$string['show_menu_bar'] = 'Εμφάνιση Μενού';
$string['show_reset_icon'] = 'Δείξε τι εικονίδιο της επαναφοράς';
$string['show_tool_bar'] = 'Εμφάνιση Εργαλειοθήκης';
$string['stepzero'] = 'Η αύξηση είναι 0 για τη μεταβλητή {$ 5}; είτε δεν έχετε ορίσει την αύξηση στον δρομέα ή το στοιχείο δεν είναι κάποιος δρομέας.  Πρέπει να το  διορθώσετε αυτό στο αρχείο του GeoGebra.';
$string['useafile'] = '... ή χρησιμοποιείστε άνα αρχείο ggb';
$string['valuecheckedfor'] = 'Αντικείμενο Boolean  στο GeoGebra το οποίο χρησιμοποιείται για να ελέγξει την ορθότητα.';
$string['variablenamewrong'] = 'Δεν υπάρχει μεταβλητή με το όνομα αυτό στο αρχείο GeoGebra.';
$string['variableno'] = 'Μεταβλητή {$a}';
$string['variables'] = 'Μεταβλητές';
$string['willbereadfromfile'] = 'Θα διαβαστεί από το GeoGebra ... (δείτε το κουμπί βοήθειας)';
