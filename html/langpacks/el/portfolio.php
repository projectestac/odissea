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
 * Strings for component 'portfolio', language 'el', version '3.8'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Επίλυση ενεργής εξαγωγής';
$string['activeportfolios'] = 'Διαθέσιμα χαρτοφυλάκια';
$string['addalltoportfolio'] = 'Εξαγωγή όλων σε χαρτοφυλάκιο';
$string['addnewportfolio'] = 'Προσθήκη νέου χαρτοφυλακίου';
$string['addtoportfolio'] = 'Εξαγωγή σε χαρτοφυλάκιο';
$string['alreadyalt'] = 'Η εξαγωγή πραγματοποιείται ήδη - παρακαλούμε κάντε κλικ εδώ για να επιλύσετε αυτή τη μεταφορά';
$string['alreadyexporting'] = 'Έχετε ήδη μια ενεργή εξαγωγή χαρτοφυλακίου σε αυτή τη σύνοδο. Προτού συνεχίσετε θα πρέπει είτε να ολοκληρώστε αυτή την εξαγωγή είτε να την ακυρώσετε. Θέλετε να συνεχίσετε (Διαφορετικά θα ακυρωθεί)';
$string['availableformats'] = 'Διαθέσιμες μορφοποιήσεις εξαγωγής';
$string['callbackclassinvalid'] = 'Η καθορισμένη κλάση επανάκλησης δεν ήταν έγκυρη ή δεν ανήκε στην ιεραρχία portfolio_caller';
$string['callercouldnotpackage'] = 'Αποτυχία συσκευασίας των δεδομένων σας για εξαγωγή: το αρχικό σφάλμα ήταν {$a}';
$string['cannotsetvisible'] = 'Δεν μπορεί να οριστεί ως ορατό - το πρόσθετο έχει απενεργοποιηθεί τελείως εξαιτίας λάθους στις ρυθμίσεις';
$string['commonportfoliosettings'] = 'Κοινές ρυθμίσεις χαρτοφυλακίου';
$string['commonsettingsdesc'] = '<p>Το εάν μια μεταφορά απαιτεί «Μέτριο» ή «Μεγάλο» χρόνο για να πραγματοποιηθεί μπορεί να αλλάξει με βάση το εάν ο χρήστης μπορεί να περιμένει για την ολοκλήρωση της μεταφοράς ή όχι.</p><p>Τα μεγέθη μέχρι το όριο «Μεγάλο» εκτελούνται αμέσως χωρίς να ερωτηθεί ο χρήστης, ενώ οι μεταφορές με χρόνο «Μέτριο» και «Μεγάλο» δίνουν την επιλογή στον χρήστη αλλά προειδοποιώντας τον οτι η μεταφορά μπορεί να αργήσει λίγο.</p><p>Επιπροσθέτως, κάποια πρόσθετα χαρτοφυλακίου μαθητή μπορεί να αγνοήσουν αυτή την επιλογή τελείως και να υποχρεώσουν όλες τις μεταφορές να τοποθετηθούν στην ουρά για εκτέλεση.</p>';
$string['configexport'] = 'Ρύθμιση εξαγόμενων δεδομένων';
$string['configplugin'] = 'Ρύθμιση του πρόσθετου για χαρτοφυλάκια';
$string['configure'] = 'Ρύθμιση';
$string['confirmcancel'] = 'Είστε βέβαιοι ότι θέλετε να ακυρώσετε αυτήν την εξαγωγή;';
$string['confirmexport'] = 'Παρακαλούμε επιβεβαιώστε αυτή την εξαγωγή';
$string['confirmsummary'] = 'Περίληψη της εξαγωγής σας';
$string['continuetoportfolio'] = 'Συνεχίστε στο χαρτοφυλάκιό σας';
$string['deleteportfolio'] = 'Διαγραφή του στιγμιότυπου του χαρτοφυλακίου';
$string['destination'] = 'Προορισμός';
$string['disabled'] = 'Λυπόμαστε αλλά οι εξαγωγές χαρτοφυλακίων δεν είναι ενεργές σε αυτό τον ιστότοπο';
$string['disabledinstance'] = 'Απενεργοποιημένο';
$string['displayarea'] = 'Περιοχή εξαγωγών';
$string['displayexpiry'] = 'Ώρα λήξης εξαγωγής';
$string['displayinfo'] = 'Πληροφορίες εξαγωγής';
$string['dontwait'] = 'Χωρίς αναμονή';
$string['enabled'] = 'Ενεργοποίηση χαρτοφυλακίων';
$string['enableddesc'] = 'Αν ενεργοποιηθεί, οι χρήστες θα μπορούν να εξάγουν περιεχόμενο, όπως αναρτήσεις φόρουμ και υποβολές εργασιών, σε εξωτερικά χαρτοφυλάκια μαθητή ή HTML σελίδες.';
$string['err_uniquename'] = 'Τό όνομα του χαρτοφυλάκιου πρέπει να είναι μοναδικό (ανά πρόσθετο)';
$string['exportalreadyfinished'] = 'Η εξαγωγή χαρτοφυλακίου ολοκληρώθηκε!';
$string['exportalreadyfinisheddesc'] = 'Η εξαγωγή χαρτοφυλακίου ολοκληρώθηκε!';
$string['exportcomplete'] = 'Η εξαγωγή χαρτοφυλακίου ολοκληρώθηκε!';
$string['exportedpreviously'] = 'Προηγούμενες εξαγωγές';
$string['exportexceptionnoexporter'] = 'Ανέκυψε μια εξαίρεση portfolio_export_exception με μια ενεργή σύνοδο αλλά χωρίς αντικείμενο εξαγωγέα';
$string['exportexpired'] = 'Η εξαγωγή του χαρτοφυλακίου έληξε';
$string['exportexpireddesc'] = 'Προσπαθήσατε να επαναλάβετε την εξαγωγή κάποιας πληροφορίας, ή να ξεκινήσετε μια κενή εξαγωγή. Για να το κάνετε σωστά αυτό θα πρέπει να πάτε πίσω στην αρχική τοποθεσία και να ξεκινήσετε ξανά. Αυτό συμβαίνει ορισμένες φορές αν χρησιμοποιήσετε το κουμπί «Πίσω» μετά την ολοκλήρωση μιας εξαγωγής, ή δημιουργώντας έναν σελιδοδείκτη σε μη έγκυρο url.';
$string['exporting'] = 'Εξαγωγή στο χαρτοφυλάκιο';
$string['exportingcontentfrom'] = 'Εξαγωγή περιεχομένου από {$a}';
$string['exportingcontentto'] = 'Εξαγωγή περιεχομένου σε {$a}';
$string['exportqueued'] = 'Η εξαγωγή του χαρτοφυλακίου έχει τοποθετηθεί με επιτυχία στην ουρά για μεταφορά';
$string['exportqueuedforced'] = 'Η εξαγωγή του χαρτοφυλακίου έχει τοποθετηθεί με επιτυχία στην ουρά για μεταφορά (Το απομακρυσμένο σύστημα έχει μεταφορές υποχρεωτικά σε ουρά)';
$string['failedtopackage'] = 'Δεν ήταν δυνατή η εύρεση αρχείων για συσκευασία';
$string['failedtosendpackage'] = 'Αποτυχία αποστολής των δεδομένων σας στο επιλεγμένο σύστημα χαρτοφυλακίου: το αρχικό λάθος ήταν {$a}';
$string['filedenied'] = 'Άρνηση πρόσβασης στο αρχείο';
$string['filenotfound'] = 'Αδυναμία εύρεσης αρχείου';
$string['fileoutputnotsupported'] = 'Η επανεγγραφή του αρχείου εξόδου δεν υποστηρίζεται για αυτόν τον μορφότυπο';
$string['format_document'] = 'Έγγραφο';
$string['format_file'] = 'Αρχείο';
$string['format_image'] = 'Εικόνα';
$string['format_leap2a'] = 'Leap2A μορφότυπος χαρτοφυλακίου';
$string['format_mbkp'] = 'Μορφότυπος αντιγράφων ασφαλείας του Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Παρουσίαση';
$string['format_richhtml'] = 'HTML με συνημμένα';
$string['format_spreadsheet'] = 'Λογιστικό φύλλο';
$string['format_text'] = 'Απλό κείμενο';
$string['format_video'] = 'Βίντεο';
$string['highdbsizethreshold'] = 'Μεγάλο μέγεθος βάσης δεδομένων μεταφοράς';
$string['highdbsizethresholddesc'] = 'Αριθμός των εγγραφών στη βάση δεδομένων πάνω του οποίου θεωρείται ότι θα χρειαστούν «μεγάλο» χρόνο για την μεταφορά';
$string['highfilesizethreshold'] = 'Μεγάλο μέγεθος αρχείου για μεταφορά';
$string['highfilesizethresholddesc'] = 'Αρχεία με μέγεθος μεγαλύτερο από αυτό το όριο θα θεωρούνται ότι θα χρειαστούν «μεγάλο» χρόνο για μεταφορά';
$string['insanebody'] = 'Γεια! Λαμβάνετε αυτό το μήνυμα σαν διαχειριστής του {$a->sitename}. Κάποια στιγμιότυπα των πρόσθετων για χαρτοφυλάκια έχουν απενεργοποιηθεί αυτόματα λόγω λαθών στις ρυθμίσεις. Αυτό σημαίνει ότι οι χρήστες δεν μπορούν προς το παρόν να εξάγουν περιεχόμενο σε αυτά τα χαρτοφυλάκια. Η λίστα με τα στιγμιότυπα των πρόσθετων για χαρτοφυλάκια που έχουν απενεργοποιηθεί είναι: {$a->textlist}<br />
Αυτό μπορεί να διορθωθεί το συντομότερο δυνατόν πηγαίνοντας στο {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Γεια! Λαμβάνετε αυτό το μήνυμα σαν διαχειριστής του {$a->sitename}.</p>
<p>Κάποια στιγμιότυπα των πρόσθετων για χαρτοφυλάκια έχουν απενεργοποιηθεί αυτόματα λόγω λαθών στις ρυθμίσεις. Αυτό σημαίνει ότι οι χρήστες δεν μπορούν προς το παρόν να εξάγουν περιεχόμενο σε αυτά τα χαρτοφυλάκια.</p>
<p>Η λίστα με τα στιγμιότυπα των πρόσθετων για χαρτοφυλάκια που έχουν απενεργοποιηθεί είναι: {$a->textlist}</p>
<p>Αυτό μπορεί να διορθωθεί το συντομότερο δυνατόν πηγαίνοντας στις <a href="{$a->fixurl}">σελίδες ρυθμίσεων χαρτοφυλακίου</a></p>';
$string['insanebodysmall'] = 'Γεια σας! Λαμβάνετε αυτό το μήνυμα ως διαχειριστής του ιστοτόπου {$a->sitename}. Κάποια στιγμιότυπα πρόσθετων χαρτοφυλακίου έχουν απενεργοποιηθεί αυτόματα λόγω λαθών στις ρυθμίσεις. Αυτό σημαίνει ότι οι χρήστες δεν μπορούν προς το παρόν να εξάγουν περιεχόμενο σε αυτά τα χαρτοφυλάκια. Αυτό πρέπει να διορθωθεί το συντομότερο δυνατόν πηγαίνοντας στο {$a->fixurl}.';
$string['insanesubject'] = 'Κάποια στιγμιότυπα χαρτοφυλακίου έχουν απενεργοποιηθεί αυτόματα';
$string['instancedeleted'] = 'Το χαρτοφυλάκιο διαγράφηκε με επιτυχία';
$string['instanceismisconfigured'] = 'Το στιγμιότυπο του χαρτοφυλάκιου είναι κακοδιαμορφωμένο, οπότε παραλείπεται. Το σφάλμα ήταν: {$a}';
$string['instancenotdelete'] = 'Αποτυχία διαγραφής χαρτοφυλακίου';
$string['instancenotsaved'] = 'Αποτυχία αποθήκευσης χαρτοφυλακίου';
$string['instancesaved'] = 'Το χαρτοφυλάκιο αποθηκεύθηκε με επιτυχία';
$string['intro'] = 'Περιεχόμενο που έχετε δημιουργήσει, όπως υποβολή εργασιών, αναρτήσεις σε φόρουμ και ιστολόγια, μπορούν να εξαχθούν σε ένα χαρτοφυλάκιο μαθητή ή να γίνει λήψη τους.<br />
Όποιο χαρτοφυλάκιο δεν επιθυμείτε να χρησιμοποιήσετε μπορεί να αποκρύπτεται ώστε να μην εμφανίζεται ως επιλογή για εξαγωγή περιεχομένου σε αυτό.';
$string['invalidaddformat'] = 'Μια μη έγκυρη μορφή προσθήκης δόθηκε στο portfolio_add_button. Το ({$a}) πρέπει να είναι ένα από τα PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Δεν ήταν δυνατή η εύρεση της ιδιότητας ({$a}) του portfolio_button';
$string['invalidconfigproperty'] = 'Δεν ήταν δυνατή η εύρεση της ιδιότητας ρύθμισης ({$a->property} του {$a->class})';
$string['invalidexportproperty'] = 'Δεν ήταν δυνατή η εύρεση της ιδιότητας ρύθμισης εξαγωγής ({$a->property} του {$a->class})';
$string['invalidfileareaargs'] = 'Μη έγκυρες παράμετροι περιοχής αρχείου δόθηκαν στο set_file_and_format_data - πρέπει να περιέχουν τα contextid, component, filearea και itemid';
$string['invalidformat'] = 'Κάτι εξάγει σε μη έγκυρη μορφή, {$a}';
$string['invalidinstance'] = 'Δεν ήταν δυνατή η εύρεση αυτού του στιγμιότυπου χαρτοφυλακίου';
$string['invalidpreparepackagefile'] = 'Μη έγκυρη κλήση στο prepare_package_file - πρέπει να ρυθμιστεί σαν single ή multifiles';
$string['invalidproperty'] = 'Δεν ήταν δυνατή η εύρεση αυτής της ιδιότητας ({$a->property} του {$a->class})';
$string['invalidsha1file'] = 'Μη έγκυρη κλήση στο get_sha1_file - πρέπει να ρυθμιστεί σαν single ή multifiles';
$string['invalidtempid'] = 'Άκυρο αναγνωριστικό εξαγωγής. Πιθανώς να έληξε';
$string['invaliduserproperty'] = 'Δεν ήταν δυνατή η εύρεση αυτής της ιδιότητας ρύθμισης χρήστη ({$a->property} του {$a->class})';
$string['leap2a_emptyselection'] = 'Η απαιτούμενη τιμή δεν έχει επιλεγεί';
$string['leap2a_entryalreadyexists'] = 'Προσπαθήσατε να προσθέσετε μια καταχώρηση Leap2A με αναγνωριστικό ({$a}) που υπάρχει ήδη σε αυτήν την τροφοδοσία';
$string['leap2a_feedtitle'] = 'Εξαγωγή Leap2A από το Moodle για {$a}';
$string['leap2a_filecontent'] = 'Προσπαθήσατε να ορίσετε το περιεχόμενο μιας καταχώρησης Leap2A σε ένα αρχείο, αντί να χρησιμοποιήσετε την υπο-κλάση αρχείου';
$string['leap2a_invalidentryfield'] = 'Προσπαθήσατε να ορίσετε ένα πεδίο εισαγωγής που δεν υπήρχε ({$a}) ή δεν μπορείτε να το ορίσετε άμεσα';
$string['leap2a_invalidentryid'] = 'Προσπαθήσατε να αποκτήσετε πρόσβαση σε μια καταχώρηση με αναγνωριστικό που δεν υπήρχε ({$a})';
$string['leap2a_missingfield'] = 'Το απαιτούμενο πεδίο εισαγωγής Leap2A {$a} λείπει';
$string['leap2a_nonexistantlink'] = 'Μια καταχώρηση Leap2A ({$a->from}) προσπάθησε να συνδεθεί με μια μη υπάρχουσα καταχώρηση ({$a->to}) με rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Αντικατάσταση του αρχικού τύπου μιας καταχώρησης ({$a}) στην επιλογή στο make_selection';
$string['leap2a_selflink'] = 'Μια καταχώρηση Leap2A ({$a->id}) προσπάθησε να συνδεθεί στον εαυτό της με rel (σχέση;) {$a->rel}';
$string['logs'] = 'Καταγραφές μεταφοράς';
$string['logsummary'] = 'Προηγούμενες επιτυχημένες μεταφορές';
$string['manageportfolios'] = 'Διαχείριση χαρτοφυλακίων';
$string['manageyourportfolios'] = 'Διαχειριστείτε τα χαρτοφυλάκιά σας';
$string['mimecheckfail'] = 'Το πρόσθετο χαρτοφυλακίου {$a->plugin} δεν υποστηρίζει αυτόν τον τύπο mimetype {$a->mimetype}';
$string['missingcallbackarg'] = 'Λείπει παράμετρος callback {$a->arg} για την κλάση {$a->class}';
$string['moderatedbsizethreshold'] = '«Μέτριο» μέγεθος βάσης δεδομένων για μεταφορά';
$string['moderatedbsizethresholddesc'] = 'Αριθμός των εγγραφών στη βάση δεδομένων πάνω των οποίων θεωρείται ότι θα χρειαστούν «μέτριο» χρόνο για μεταφορά';
$string['moderatefilesizethreshold'] = '«Μέτριο» μέγεθος αρχείου για μεταφορά';
$string['moderatefilesizethresholddesc'] = 'Αρχεία με μέγεθος μεγαλύτερο από αυτό το όριο θα θεωρούνται ότι θα χρειαστούν «μέτριο» χρόνο για μεταφορά';
$string['multipleinstancesdisallowed'] = 'Προσπάθεια δημιουργίας ενός άλλου στιγμιότυπου ενός πρόσθετου που έχει απαγορεύσει πολλαπλά στιγμιότυπα ({$a})';
$string['mustsetcallbackoptions'] = 'Πρέπει να ρυθμίσετε τις επιλογές της κλάσης επανάκλησης είτε στον κατασκευαστή κλάσης portfolio_add_button ή χρησιμοποιώντας την μέθοδο set_callback_options';
$string['noavailableplugins'] = 'Λυπούμαστε αλλά δεν υπάρχουν διαθέσιμα χαρτοφυλάκια για να εξάγετε';
$string['nocallbackclass'] = 'Δεν ήταν δυνατή η εύρεση της κλάσης επανάκλησης προς χρήση ({$a})';
$string['nocallbackcomponent'] = 'Δεν βρέθηκε το στοιχείο λογισμικού που καθορίστηκε {$a}.';
$string['nocallbackfile'] = 'Κάτι στο άρθρωμα από το οποίο προσπαθείτε να εξάγετε είναι κατεστραμμένο - δεν ήταν δυνατόν να βρεθεί ένα απαιτούμενο αρχείο χαρτοφυλακίου';
$string['noclassbeforeformats'] = 'Πρέπει να ρυθμίσετε την κλάση επανάκλησης πριν καλέσετε την set_formats στο portfolio_button';
$string['nocommonformats'] = 'Δεν υπάρχουν κοινοί μορφότυποι μεταξύ οποιουδήποτε διαθέσιμου πρόσθετου χαρτοφυλακίων και της καλούσας τοποθεσίας {$a->location} (η καλούσα υποστήριζε μορφότυπους {$a->formats})';
$string['noinstanceyet'] = 'Δεν έχει ακόμη επιλεχθεί';
$string['nologs'] = 'Δεν υπάρχουν καταγραφές για εμφάνιση!';
$string['nomultipleexports'] = 'Λυπούμαστε, αλλά ο προορισμός χαρτοφυλακίου ({$a->plugin}) δεν υποστηρίζει ταυτόχρονα πολλαπλές εξαγωγές. Παρακαλούμε, <a href="{$a->link}">να τερματίσετε την τρέχουσα πρώτα</a> και να προσπαθήσετε ξανά.';
$string['nonprimative'] = 'Μια μη πρωταρχική τιμή δόθηκε σαν παράμετρος συνάρτησης επανάκλησης (callback) στο portfolio_add_button. Δεν είναι δυνατή η συνέχεια. Το κλειδί ήταν {$a->key} και η τιμή ήταν {$a->value}';
$string['nopermissions'] = 'Λυπούμαστε αλλά δεν έχετε τα κατάλληλα δικαιώματα για να εξάγετε αρχεία από αυτή την περιοχή';
$string['notexportable'] = 'Λυπούμαστε αλλά ο τύπος του περιεχομένου που προσπαθείτε να εξάγετε δεν είναι εξαγώγιμος';
$string['notimplemented'] = 'Λυπούμαστε αλλά προσπαθείτε να εξάγετε περιεχόμενο σε κάποιο μορφότυπο για τον οποίο δεν έχουμε ακόμα υλοποίηση ({$a})';
$string['notyetselected'] = 'Δεν έχει επιλεχθεί ακόμα';
$string['notyours'] = 'Προσπαθείτε να συνεχίσετε μια εξαγωγή χαρτοφυλακίου που δεν σας ανήκει!';
$string['nouploaddirectory'] = 'Δεν ήταν δυνατή η δημιουργία ενός προσωρινού καταλόγου για να συσκευαστούν τα δεδομένα σας';
$string['off'] = 'Ενεργοποιμένο αλλά κρυφό';
$string['on'] = 'Ενεργοποιημένο και ορατό';
$string['plugin'] = 'Υπομονάδα λογισμικού χαρτοφυλακίου';
$string['plugincouldnotpackage'] = 'Αποτυχία συσκευασίας των δεδομένων σας προς εξαγωγή: Το αρχικό σφάλμα ήταν {$a}';
$string['pluginismisconfigured'] = 'Το πρόσθετο χαρτοφυλακίου είναι κακοδιαμορφωμένο, οπότε παραλείπεται. Το σφάλμα ήταν: {$a}';
$string['portfolio'] = 'Χαρτοφυλάκιο';
$string['portfolios'] = 'Χαρτοφυλάκια';
$string['privacy:metadata'] = 'Το υποσύστημα χαρτοφυλακίου λειτουργεί ως κανάλι, μεταδίδοντας αιτήματα από (άλλα) πρόσθετα στα διάφορα πρόσθετα χαρτοφυλακίων.';
$string['privacy:metadata:instance'] = 'Αναγνωριστικό χαρτοφυλακίου';
$string['privacy:metadata:instancesummary'] = 'Αποθήκευση δεδομένων για στιγμιότυπα και προτιμήσεις χαρτοφυλακίων.';
$string['privacy:metadata:name'] = 'Όνομα της προτίμησης';
$string['privacy:metadata:portfolio_log'] = 'Μητρώο μεταφορών χαρτοφυλακίου (χρησιμοποιείται για να ελέγξει αργότερα για διπλότυπα)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Όνομα της κλάσης που χρησιμοποιήθηκε για τη δημιουργία της μεταφοράς';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Όνομα στοιχείου λογισμικού υπεύθυνο για την εξαγωγή';
$string['privacy:metadata:portfolio_log:time'] = 'Χρόνος μεταφοράς (στην περίπτωση ουράς αναμονής, αυτός είναι ο πραγματικός χρόνος που ξεκίνησε η εκτέλεση της μεταφοράς, όχι που την ξεκίνησε ο χρήστης)';
$string['privacy:metadata:portfolio_log:userid'] = 'Αναγνωριστικό χρήστη που εξήγαγε περιεχόμενο';
$string['privacy:metadata:portfolio_tempdata'] = 'Αποθηκεύει προσωρινά δεδομένα για εξαγωγές χαρτοφυλακίων.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Δεδομένα εξαγωγής';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Ο χρόνος λήξης αυτής της εγγραφής';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Το στιγμιότυπο πρόσθετου χαρτοφυλακίου που χρησιμοποιείται';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Ο χρήστης που εκτελεί την εξαγωγή';
$string['privacy:metadata:userid'] = 'Αναγνωριστικό χρήστη';
$string['privacy:metadata:value'] = 'Τιμή για την προτίμηση';
$string['privacy:path'] = 'Στιγμιότυπα χαρτοφυλακίου';
$string['queuesummary'] = 'Μεταφορές αυτή τη στιγμή στην ουρά';
$string['returntowhereyouwere'] = 'Επιστροφή εκεί που ήσασταν';
$string['save'] = 'Αποθήκευση';
$string['selectedformat'] = 'Επιλεγμένη μορφή εξαγωγής';
$string['selectedwait'] = 'Επιλογή για αναμονή;';
$string['selectplugin'] = 'Επιλογή προορισμού';
$string['showhide'] = 'Εμφάνιση / απόκρυψη';
$string['singleinstancenomultiallowed'] = 'Μόνο ένα στιγμιότυπο πρόσθετου χαρτοφυλακίου είναι διαθέσιμο, δεν υποστηρίζει πολλαπλές εξαγωγές ανά σύνοδο και υπάρχει ήδη μια ενεργή εξαγωγή στην σύνοδο (τρέχουσα περίοδο λειτουργίας) που χρησιμοποιεί αυτό το πρόσθετο!';
$string['somepluginsdisabled'] = 'Κάποια πρόσθετα χαρτοφυλακίου έχουν απενεργοποιηθεί εξ ολοκλήρου διότι είτε είναι κακοδιαμορφωμένα είτε βασίζονται σε κάτι άλλο το οποίο είναι:';
$string['sure'] = 'Είστε σίγουροι ότι θέλετε να διαγραφεί το «{$a}»; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί.';
$string['thirdpartyexception'] = 'Συνέβη μια εξαίρεση ενός τρίτου κατασκευαστή κατά την εξαγωγή του χαρτοφυλακίου ({$a}). Η εξαίρεση πιάστηκε και επαναδιαβιβάστηκε αλλά αυτό το σφάλμα θα έπρεπε να διορθωθεί';
$string['transfertime'] = 'Χρόνος μεταφοράς';
$string['unknownplugin'] = 'Άγνωστο (μπορεί έκτοτε να έχει αφαιρεθεί από έναν διαχειριστή)';
$string['wait'] = 'Αναμονή';
$string['wanttowait_high'] = 'Δεν συνιστάται να περιμένετε την ολοκλήρωση αυτής της μεταφοράς, αλλά μπορείτε εάν είστε σίγουροι για αυτό που κάνετε';
$string['wanttowait_moderate'] = 'Θέλετε να περιμένετε για αυτή τη μεταφορά; Μπορεί να χρειαστεί μερικά λεπτά';
