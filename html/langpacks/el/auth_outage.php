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
 * Strings for component 'auth_outage', language 'el', version '3.11'.
 *
 * @package     auth_outage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autostart'] = 'Αυτόματη έναρξη κατάστασης συντήρησης.';
$string['autostart_help'] = 'Εάν επιλεγεί, όταν ξεκινήσει η διακοπή λειτουργίας, θα ενεργοποιηθεί αυτόματα η λειτουργία συντήρησης Moodle.';
$string['clicreatehelp'] = 'Δημιουργεί μια νέα διακοπή λειτουργίας.';
$string['clicreateparamautostart'] = 'πρέπει να είναι Y ή N, καθορίζει εάν η διακοπή ενεργοποιεί αυτόματα τη λειτουργία συντήρησης.';
$string['clicreateparamblock'] = 'μπλοκάρισμα μέχρι να ξεκινήσει η διακοπή λειτουργίας.';
$string['clicreateparamclone'] = 'κλωνοποίηση μιας άλλης διακοπής εκτός από την ώρα έναρξης.';
$string['clicreateparamdescription'] = 'η περιγραφή της διακοπής.';
$string['clicreateparamduration'] = 'πόσα δευτερόλεπτα θα πρέπει να διαρκέσει η διακοπή.';
$string['clicreateparamhelp'] = 'εμφανίζει βοήθεια για τις παραμέτρους.';
$string['clicreateparamonlyid'] = 'εξάγει μόνο το αναγνωριστικό της νέας διακοπής λειτουργίας, χρήσιμο για σενάρια.';
$string['clicreateparamstart'] = 'σε πόσα δευτερόλεπτα θα αρχίσει αυτή η διακοπή. Απαιτείται.';
$string['clicreateparamtitle'] = 'ο τίτλος της διακοπής.';
$string['clierrorinvalidvalue'] = 'Μη έγκυρη τιμή για την παράμετρο: {$a->param}';
$string['clierroroutageended'] = 'Η διακοπή έχει ήδη τελειώσει.';
$string['clierroroutagenotfound'] = 'Η διακοπή δεν βρέθηκε.';
$string['clifinishnotongoing'] = 'Η διακοπή λειτουργίας δεν συνεχίζεται.';
$string['clifinishparamactive'] = 'ολοκληρώνει την τρέχουσα ενεργή διακοπή λειτουργίας.';
$string['clifinishparamhelp'] = 'εμφανίζει βοήθεια για τις παραμέτρους.';
$string['clifinishparamoutageid'] = 'το αναγνωριστικό της διακοπής προς ολοκλήρωση.';
$string['clioutagecreated'] = 'Η διακοπή δημιουργήθηκε, αναγνωριστικό: {$a->id}';
$string['cliwaitforiterroridxoractive'] = 'Πρέπει να χρησιμοποιείτε την παράμετρο --outageid=# ή την --active αλλά όχι και τις δύο.';
$string['cliwaitforithelp'] = 'Περιμένει μέχρι να ξεκινήσει μια διακοπή λειτουργίας.';
$string['cliwaitforitoutagestarted'] = 'Η διακοπή ξεκίνησε!';
$string['cliwaitforitparamhelp'] = 'εμφανίζει βοήθεια για τις παραμέτρους.';
$string['cliwaitforitparamverbose'] = 'ενεργοποίηση κατάστασης αναλυτικότερων μηνυμάτων.';
$string['clone'] = 'Κλώνος';
$string['datetimeformat'] = '%a %d %h %Y at %I:%M%P %Z';
$string['defaultdescription'] = 'Περιγραφή';
$string['defaultlayoutcss'] = 'Διάταξη CSS';
$string['defaultoutageduration'] = 'Διάρκεια διακοπής';
$string['defaultoutagedurationdescription'] = 'Προεπιλεγμένη διάρκεια (σε λεπτά) μιας διακοπής.';
$string['defaulttitle'] = 'Τίτλος';
$string['defaultwarningduration'] = 'Διάρκεια προειδοποίησης';
$string['description'] = 'Δημόσια περιγραφή';
$string['finish'] = 'Τέλος';
$string['info15secondsbefore'] = '15 δευτερόλεπτα πριν';
$string['infoendofoutage'] = 'τέλος της διακοπής';
$string['infofrom'] = 'Από:';
$string['infohidewarning'] = 'χωρίς γραμμή προειδοποίησης';
$string['infopagestaticgenerated'] = 'Αυτή η προειδοποίηση δημιουργήθηκε στις {$a->time}.';
$string['infostart'] = 'αρχή';
$string['infostartofwarning'] = 'αρχή της προειδοποίησης';
$string['infostaticpage'] = 'στατική σελίδα';
$string['infountil'] = 'Μέχρι:';
$string['menumanage'] = 'Διαχείριση διακοπών';
$string['menusettings'] = 'Ρυθμίσεις';
$string['messageoutagebackonline'] = 'Επιστρέψαμε εντός σύνδεσης!';
$string['messageoutagebackonlinedescription'] = 'Μπορείτε να συνεχίσετε την περιήγηση με ασφάλεια.';
$string['messageoutageongoing'] = 'Πίσω εντός σύνδεσης στο {$a->stop}.';
$string['messageoutagewarning'] = 'Τερματισμός λειτουργίας σε {{countdown}}';
$string['na'] = 'δ/υ';
$string['notfound'] = 'Δεν βρέθηκαν διακοπές.';
$string['outageclone'] = 'Αντιγραφή διακοπής.';
$string['outageclonecrumb'] = 'Κλώνος';
$string['outagecreate'] = 'Δημιουργία διακοπής';
$string['outagecreatecrumb'] = 'Δημιουργία';
$string['outagedelete'] = 'Διαγραφή διακοπής';
$string['outageduration'] = 'Διάρκεια διακοπής';
$string['outageduration_help'] = 'Πόσο διαρκεί η διακοπή μετά την αρχή της.';
$string['outagedurationerrorinvalid'] = 'Η διάρκεια της διακοπής πρέπει να είναι θετικός.';
$string['outageedit'] = 'Τροποποίηση διακοπής';
$string['outageeditcrumb'] = 'Επεξεργασία';
$string['outagefinish'] = 'Τέλος διακοπής';
$string['outageslistfuture'] = 'Σχεδιασμένες διακοπές';
$string['outageslistpast'] = 'Ιστορικό διακοπής';
$string['pluginname'] = 'Διαχειριστής διακοπής';
$string['removeselectors'] = 'Διαγραφή επιλογέων';
$string['settingssectiondefaults'] = 'Προεπιλεγμένες παράμετροι διακοπής';
$string['settingssectionplugin'] = 'Ρυθμίσεις προσθέτου';
$string['starttime'] = 'Ημερομηνία και ώρα έναρξης';
$string['tableheaderduration'] = 'Διάρκεια';
$string['tableheaderdurationactual'] = 'Πραγματική διάρκεια';
$string['tableheaderdurationplanned'] = 'Σχεδιασμένη διάρκεια';
$string['tableheaderstartedtime'] = 'Ξεκίνησε στις';
$string['tableheaderstarttime'] = 'Αρχίζει την';
$string['tableheadertitle'] = 'Τίτλος';
$string['tableheaderwarnbefore'] = 'Προειδοποιεί πριν';
$string['tablestarttimefutureformat'] = '{$a->absolute}<br />Σε {$a->relative}';
$string['tablestarttimepastformat'] = '{$a->absolute}<br />{$a->relative} πριν';
$string['title'] = 'Τίτλος';
$string['titleerrorinvalid'] = 'Ο τίτλος δεν μπορεί να μείνει κενός.';
$string['titleerrortoolong'] = 'Ο τίτλος δεν μπορεί να έχει περισσότερους από {$a} χαρακτήρες.';
$string['warningduration'] = 'Διάρκεια προειδοποίησης';
$string['warningdurationerrorinvalid'] = 'Η διάρκεια προειδοποίησης θα πρέπει να είναι θετικός αριθμός.';
