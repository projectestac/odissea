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
 * Strings for component 'block_workflow', language 'el', version '4.4'.
 *
 * @package     block_workflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetasktitle'] = 'Ενεργή εργασία αυτή τη στιγμή';
$string['addanotherworkflow'] = 'Προσθήκη κι άλλης ροής εργασίας';
$string['addaworkflow'] = 'Προσθήκη μιας ροής εργασίας';
$string['addemail'] = 'Προσθήκη υποδείγματος μηνύματος ηλε.ταχυδρομείου';
$string['addroletostep'] = 'Προσθήκη ρόλου σε βήμα';
$string['addstep'] = 'Προσθήκη ενός πρόσθετου βήματος σε αυτή τη ροή εργασίας';
$string['addstepafter'] = 'Προσθήκη ενός βήματος μετά από αυτό το σημείο';
$string['addtask'] = 'Προσθήκη εργασίας';
$string['any'] = 'Οποιοδήποτε';
$string['appliesto'] = 'Εφαρμόζεται σε';
$string['atendfinishworkflow'] = 'ολοκλήρωση της ροής εργασίας';
$string['atendgobackatworkflowcreate'] = 'Δεν είναι δυνατός ο καθορισμός μιας ρύθμισης atendgobacktostep κατά τη δημιουργία της ροής εργασίας, καθώς δεν υπάρχουν βήματα για αναφορά';
$string['atendgobacktostep'] = 'Στο τέλος του βήματος {$a}';
$string['atendgobacktostepinfo'] = 'Μετά το βήμα {$a->stepcount}, επιστροφή στον αριθμό βήματος {$a->atendgobacktostep}.';
$string['atendgobacktostepno'] = 'επιστροφή στον αριθμό βήματος {$a->stepno} ({$a->name})';
$string['atendstop'] = 'Μετά το βήμα {$a->stepcount}, αυτή η ροή εργασίας θα τερματιστεί.';
$string['automaticallyfinish'] = 'Αυτόματη ολοκλήρωση';
$string['cannotdeleteworkflowinuseby'] = 'Αδυναμία διαγραφής. Αυτή η ροή εργασίας χρησιμοποιείται σε {$a} μέρη.';
$string['cannotremoveemailinuse'] = 'Αδυναμία διαγραφής υποδείγματος μηνύματος ηλε.ταχυδρομείου -- αυτό το υπόδειγμα, αυτή τη στιγμή χρησιμοποιείται';
$string['cannotremoveonlystep'] = 'Αδυναμία διαγραφής βήματος. Αυτό είναι το μόνο βήμα στην ροή εργασίας.';
$string['cannotremovestepsinuse'] = 'Αδυναμία διαγραφής βήματος. Αυτό το βήμα είναι αυτή τη στιγμή ενεργό σε {$a} ροές εργασίας.';
$string['cannotremoveworkflowinuse'] = 'Αδυναμία διαγραφής ροής εργασίας. Αυτή η ροή εργασίας, αυτή τη στιγμή χρησιμοποιείται.';
$string['cannotstepflowinuse'] = 'Αδυναμία διαγραφής βήματος. Αυτό το βήμα, αυτή τη στιγμή χρησιμοποιείται.';
$string['clone'] = 'Κλώνος';
$string['clonedname'] = '{$a} (κλωνοποιήθηκε)';
$string['clonedshortname'] = '{$a}_κλωνοποιήθηκε';
$string['cloneworkflowinstructions'] = 'Κλωνοποίηση οδηγιών ροής εργασίας';
$string['cloneworkflowname'] = 'Κλωνοποίηση ροής εργασίας «{$a}»';
$string['commentlabel'] = 'Ενημέρωση σχολίου ροής εργασίας';
$string['comments'] = 'Σχόλια';
$string['confirm'] = 'Επιβεβαίωση';
$string['confirmemaildeletetitle'] = 'Διαγραφή υποδείγματος μηνύματος ηλε.ταχυδρομείου «{$a}»;';
$string['confirmfinishstep'] = 'Σίγουρα να επισημανθεί αυτό το βήμα ({$a}) ως ολοκληρωμένο;';
$string['confirmjumptostep'] = 'Επιθυμείτε σίγουρα μεταπήδηση στο βήμα {$a->stepno} ({$a->stepname});';
$string['confirmstepdeletetitle'] = 'Διαγραφή βήματος «{$a}»;';
$string['confirmworkflowdeletetitle'] = 'Διαγραφή ροής εργασίας «{$a}»;';
$string['contexthasactiveworkflow'] = 'Το πλαίσιο αυτό έχει ήδη μια ενεργή ροή εργασίας';
$string['coursestartdate'] = 'η ημερομηνία έναρξης του μαθήματος';
$string['coursestudentclose'] = 'το μάθημα είναι κλειστό για μαθητές';
$string['coursestudentopen'] = 'το μάθημα είναι ανοιχτό για μαθητές';
$string['coursetutorclose'] = 'το μάθημα είναι κλειστό για βοηθούς εκμάθησης';
$string['coursetutoropen'] = 'το μάθημα είναι ανοιχτό για βοηθούς εκμάθησης';
$string['create'] = 'Δημιουργία';
$string['createemail'] = 'Δημιουργία νέου υποδείγματος μηνύματος ηλε.ταχυδρομείου.';
$string['createstep'] = 'Δημιουργία βήματος';
$string['createstepinstructions'] = 'Κάποιες οδηγίες για τη δημιουργία ενός βήματος.';
$string['createstepname'] = 'Δημιουργία νέου βήματος για τη ροή εργασίας «{$a}»';
$string['createtask'] = 'Δημιουργία νέας εργασίας για το βήμα «{$a}»';
$string['createtemplate'] = 'Δημιουργία υποδείγματος';
$string['createworkflow'] = 'Δημιουργία νέας ροής εργασίας';
$string['currentlyinuseby'] = 'Αυτή η ροή εργασίας είναι αυτή τη στιγμή σε χρήση από';
$string['dayafter'] = '{$a} ημέρα μετά';
$string['dayas'] = 'ίδια ημέρα με';
$string['daybefore'] = '{$a} ημέρα πριν';
$string['days'] = 'Ημέρες';
$string['daysafter'] = '{$a} ημέρες μετά';
$string['daysbefore'] = '{$a} ημέρες πριν';
$string['defaultstepdescription'] = 'Μια περιγραφή για αυτό το βήμα πρέπει να δοθεί εδώ';
$string['defaultstepinstructions'] = 'Κάνε χ, μετά ψ, μετά ω.';
$string['defaultstepname'] = 'Πρώτο βήμα';
$string['defaultworkflowdescription'] = 'Μια περιγραφή για αυτή τη ροή εργασίας';
$string['delete'] = 'Διαγραφή';
$string['deleteemail'] = 'Διαγραφή διεύθυνσης ηλε.ταχυδρομείου';
$string['deleteemailcheck'] = 'Είστε απολύτως σίγουροι ότι θέλετε να διαγραφεί πλήρως το υπόδειγμα μηνύματος ηλε.ταχυδρομείου «{$a}»;';
$string['deletestep'] = 'Διαγραφή βήματος';
$string['deletestepcheck'] = 'Είστε απολύτως σίγουροι ότι θέλετε να διαγραφεί πλήρως το βήμα «{$a}»;';
$string['deletetask'] = 'Διαγραφή εργασίας';
$string['deletetaskcheck'] = 'Είστε σίγουροι ότι θέλετε να διαγραφεί η εργασία «{$a->taskname}» από το βήμα «{$a->stepname}»;';
$string['deletetasktitle'] = 'Επιβεβαίωση διαγραφής εργασίας «{$a->taskname}» από το βήμα «{$a->stepname}»';
$string['deletetemplate'] = 'Διαγραφή υποδείγματος';
$string['deleteworkflow'] = 'Διαγραφή ροής εργασίας';
$string['deleteworkflowcheck'] = 'Είστε απολύτως σίγουροι ότι θέλετε να διαγραφεί πλήρως η ροή εργασίας {$a};';
$string['description'] = 'Περιγραφή';
$string['disabled'] = 'Απενεργοποιημένο';
$string['doerstitle'] = 'Ρόλοι';
$string['doertitle'] = 'Ρόλοι υπεύθυνοι για αυτό το βήμα';
$string['donotautomaticallyfinish'] = 'Χωρίς αυτόματη ολοκλήρωση';
$string['donotnotify'] = 'Χωρίς αποστολή επιπλέον ειδοποίησης';
$string['edit'] = 'Επεξεργασία';
$string['editcomments'] = 'Επεξεργασία σχολίων';
$string['editemail'] = 'Επεξεργασία υποδείγματος μηνύματος ηλε.ταχυδρομείου «{$a}»';
$string['editingcommentfor'] = 'Επεξεργασία σχολίου για «{$a->stepname}» στο {$a->contextname}';
$string['editstep'] = 'Επεξεργασία βήματος';
$string['editstepname'] = 'Επεξεργασία βήματος «{$a}»';
$string['editsteps'] = 'Επεξεργασία βημάτων για τη ροή εργασίας «{$a}»';
$string['edittask'] = 'Επεξεργασία εργασίας';
$string['edittemplate'] = 'Επεξεργασία υποδείγματος';
$string['edittemplateinstructions'] = 'Κάποιες οδηγίες για τη δημιουργία ενός υποδείγματος μηνύματος ηλε.ταχυδρομείου.';
$string['editworkflow'] = 'Επεξεργασία ροής εργασίας «{$a}»';
$string['editworkflowinstructions'] = 'Επεξεργασία οδηγιών ροής εργασίας';
$string['emaildescription'] = 'Τα υποδείγματα μηνυμάτων ηλε.ταχυδρομείου μπορούν να χρησιμοποιηθούν από τα διάφορα σενάρια σε ένα βήμα ροής εργασίας';
$string['emailfrom'] = 'σύστημα ροής εργασίας {$a}';
$string['emaillist'] = 'Αποστολή υποδειγμάτων μηνύματος ηλε.ταχυδρομείου';
$string['emailmessage'] = 'Μήνυμα';
$string['emailsettings'] = 'Ρυθμίσεις υποδείγματος μηνύματος ηλε.ταχυδρομείου';
$string['emailsubject'] = 'Θέμα';
$string['emptyfield'] = 'Το απαιτούμενο πεδίο είναι κενό: {$a}';
$string['enabled'] = 'Ενεργοποιημένη';
$string['enabledworkflow'] = 'Ενεργοποιημένη';
$string['enableworkflow'] = 'Ενεργοποίηση ροής εργασίας';
$string['eventstepaborted'] = 'Το βήμα εγκαταλείφθηκε';
$string['eventstepactivated'] = 'Το βήμα ενεργοποιήθηκε';
$string['eventstepcompleted'] = 'Το βήμα ολοκληρώθηκε';
$string['export'] = 'Εξαγωγή';
$string['exportworkflow'] = 'Εξαγωγή ροής εργασίας';
$string['finish'] = 'Ολοκλήρωση';
$string['finishstep'] = 'Ολοκλήρωση βήματος';
$string['finishstepautomatically'] = 'Αυτό το βήμα ολοκληρώνεται αυτόματα από το σύστημα ροής εργασίας στις {$a}.';
$string['finishstepfor'] = 'Ολοκλήρωση βήματος «{$a->stepname}» στο «{$a->contextname}»';
$string['format_html'] = 'html';
$string['format_plain'] = 'απλό';
$string['format_unknown'] = 'άγνωστο';
$string['general'] = 'Γενικά';
$string['hidetask'] = 'Απενεργοποίηση εργασίας';
$string['importfile'] = 'Αρχείο';
$string['importsuccess'] = 'Η εισαγωγή έγινε με επιτυχία. Θα ανακατευθυνθείτε στην σελίδα επεξεργασίας της ροής εργασίας σύντομα.';
$string['importworkflow'] = 'Εισαγωγή ροής εργασίας';
$string['instructions'] = 'Οδηγίες';
$string['inuseby'] = 'Αυτή τη στιγμή βρίσκεται σε χρήση σε {$a} τοποθεσίες.';
$string['invalidactivitysettingcolumn'] = 'Η στήλη που καθορίστηκε ({$a}), δεν υπάρχει.';
$string['invalidappliestotable'] = 'Ο πίνακας βάσης δεδομένων για {$a} δεν βρέθηκε. Μπορεί να μην είναι δυνατό να χρησιμοποιηθεί αυτή η εντολή για αυτόν τον τύπο της ροής εργασίας';
$string['invalidbody'] = 'Καθορίστηκε ένα μη έγκυρο σώμα';
$string['invalidcapability'] = 'Καθορίστηκε μια μη έγκυρη δυνατότητα.';
$string['invalidclearmustendcommand'] = 'Δεν έπρεπε να υπάρχει τίποτα μετά τη λέξη «clear».';
$string['invalidcommand'] = 'Μια μη έγκυρη εντολή καθορίστηκε στο σενάριο. Η εντολή που χρησιμοποιήθηκε ήταν «{$a}»';
$string['invalidemailemail'] = 'Καθορίστηκε μια μη έγκυρη διεύθυνση ηλε.ταχυδρομείου. Η διεύθυνση που καθορίστηκε ήταν «{$a}»';
$string['invalidemailshortname'] = 'Καθορίστηκε μη έγκυρο σύντομο όνομα ({$a})';
$string['invalidfield'] = 'Καθορίστηκε στα δεδομένα ένα μη έγκυρο πεδίο. Το πεδίο ήταν το «{$a}»';
$string['invalidformat'] = 'Καθορίστηκε ένας μη έγκυρος μορφότυπος: {$a}';
$string['invalidid'] = 'Καθορίστηκε ένα μη έγκυρο αναγνωριστικό';
$string['invalidinstructions'] = 'Καθορίστηκαν μη έγκυρες οδηγίες βήματος';
$string['invalidmissingvalue'] = 'Μη έγκυρη εντολή. Λείπει τιμή.';
$string['invalidname'] = 'Καθορίστηκε ένα μη έγκυρο όνομα';
$string['invalidobsoletesetting'] = 'Καθορίστηκε μια μη έγκυρη, απαρχαιωμένη τιμή. Οι έγκυρες τιμές είναι 0, ή 1.';
$string['invalidstate'] = 'Μη έγκυρη κατάσταση';
$string['jumpstep'] = 'Άλμα στο βήμα';
$string['jumptostep'] = 'Μεταπήδηση στο βήμα';
$string['lastmodified'] = 'Τελευταία τροποποίηση';
$string['manageworkflows'] = 'Διαχείριση ροών εργασίας';
$string['messageprovider:notification'] = 'Ειδοποιήσεις και επαγρυπνήσεις ροής εργασίας';
$string['missingfield'] = 'Το απαιτούμενο πεδίο λείπει: {$a}';
$string['movedown'] = 'Μετακίνηση κάτω';
$string['moveup'] = 'Μετακίνηση πάνω';
$string['name'] = 'Όνομα';
$string['nameinuse'] = 'Το όνομα που καθορίστηκε χρησιμοποιείται ήδη. Τα ονόματα πρέπει να είναι μοναδικά.';
$string['nameshortname'] = '{$a->name} ({$a->shortname})';
$string['noactiveworkflow'] = 'Δεν υπάρχει αυτή τη στιγμή καμία ενεργή ροή εργασίας.';
$string['nocomment'] = 'Κανένα σχόλιο ακόμη...';
$string['nocomments'] = 'Δεν έχουν γίνει σχόλια για αυτό το βήμα ακόμα';
$string['nomorestepsleft'] = 'Η ροή εργασίας έχει ολοκληρωθεί.';
$string['nosuchrole'] = 'Ο ρόλος {$a} δεν υπάρχει';
$string['notacourse'] = 'Αυτό δεν είναι μάθημα';
$string['notanactivity'] = 'Η εντολή {$a} μπορεί να χρησιμοποιηθεί μόνο με μια δραστηριότητα';
$string['notaworkflow'] = 'Αυτό δεν είναι ένα έγκυρο αρχείο ροής εργασίας';
$string['notcurrentlyinuse'] = 'Δεν χρησιμοποιείται αυτή τη στιγμή.';
$string['notificationdate'] = 'Ημερομηνία ειδοποίησης';
$string['notuniquestep'] = 'Το βήμα {$a} δεν είναι μοναδικό';
$string['notutfencoding'] = 'Αυτό το αρχείο δεν έχει κωδικοποίηση UTF-8';
$string['obsoleteworkflow'] = 'Απαρχαιωμένο';
$string['overview'] = 'Επισκόπηση';
$string['percentcomplete'] = '{$a}% ολοκληρωμένο';
$string['pluginname'] = 'Ροή εργασίας';
$string['privacy_somebodyelse'] = 'Κάποιος άλλος';
$string['privacy_you'] = 'Εσείς';
$string['quizclosedate'] = 'η ημερομηνία κλεισίματος του κουίζ';
$string['quizopendate'] = 'η ημερομηνία ανοίγματος του κουίζ';
$string['remove'] = 'Διαγραφή';
$string['removerolefromstep'] = 'Αφαίρεση ρόλου από βήμα';
$string['removestep'] = 'Διαγραφή βήματος';
$string['removetask'] = 'Διαγραφή εργασίας';
$string['removeworkflow'] = 'Διαγραφή ροής εργασίας';
$string['roles'] = 'Ρόλοι';
$string['shortname'] = 'Σύντομο όνομα';
$string['shortnameinuse'] = 'Το σύντομο όνομα που καθορίστηκε είναι ήδη σε χρήση. Τα σύντομα ονόματα πρέπει να είναι μοναδικά.';
$string['shortnametaken'] = 'Αυτό το σύντομο όνομα είναι ήδη σε χρήση από μια άλλη ροή εργασίας ({$a})';
$string['shownamesx'] = 'Εμφάνιση ονομάτων ({$a})';
$string['showtask'] = 'Ενεργοποίηση εργασίας';
$string['state'] = 'Κατάσταση';
$string['state_aborted'] = 'Εγκαταλείφθηκε';
$string['state_active'] = 'Ενεργή';
$string['state_completed'] = 'Ολοκληρωμένη';
$string['state_history'] = 'Ιστορικό';
$string['state_history_aborted'] = 'Εγκαταλείφθηκε';
$string['state_history_active'] = 'Ενεργοποιήθηκε';
$string['state_history_completed'] = 'Ολοκληρώθηκε';
$string['state_notstarted'] = 'Δεν ξεκίνησε';
$string['status'] = 'Τρέχουσα κατάσταση';
$string['step'] = 'Βήμα';
$string['stepactivation'] = 'Ενεργοποίηση βήματος';
$string['stepactivation_help'] = 'Ενεργοποίηση βήματος';
$string['stepactivation_link'] = 'μπλοκ/ροή εργασίας';
$string['stepcompletion'] = 'Ολοκλήρωση βήματος';
$string['stepcompletion_help'] = 'Ολοκλήρωση βήματος';
$string['stepcompletion_link'] = 'μπλοκ/ροή εργασίας';
$string['stepextranotify_link'] = 'μπλοκ/ροή εργασίας';
$string['stepinstructions'] = 'Οδηγίες';
$string['stepname'] = 'Όνομα βήματος';
$string['stepno'] = 'Βήμα Νο.';
$string['steps'] = 'Βήματα';
$string['stepsettings'] = 'Ρυθμίσεις βήματος';
$string['task'] = 'Εργασία';
$string['taskcomplete'] = 'Η εργασία ολοκληρώθηκε';
$string['tasknotspecified'] = 'Δεν καθορίστηκε καμία εργασία';
$string['tobecompletedby'] = 'Να ολοκληρωθεί μέχρι';
$string['tododone'] = 'Επισήμανση {$a} ως ολοκλήρωμένου';
$string['todolisttitle'] = 'Εργασίες προς ολοκλήρωση';
$string['todotask'] = 'Εργασία';
$string['todotitle'] = 'Στοιχεία προς ολοκλήρωση για αυτό το βήμα';
$string['todoundone'] = 'Επισήμανση {$a} ως μη ολοκληρωμένο';
$string['updatecomment'] = 'Σχόλια ενημέρωσης';
$string['workflow'] = 'Ροή εργασίας';
$string['workflowimport'] = 'Εισαγωγή διαγράμματος ροής';
$string['workflowinformation'] = 'Πληροφορίες διαγράμματος ροής';
$string['workflowlist'] = 'Διαγράμματα ροής';
$string['workflowoverview'] = 'Επισκόπηση διαγράμματος ροής';
$string['workflowsettings'] = 'Ρυθμίσεις διαγράμματος ροής';
$string['workflowstatus'] = 'Κατάσταση διαγράμματος ροής';
$string['workflowsteps'] = 'Βήματα διαγράμματος ροής';
$string['workflowusage'] = 'Χρήση διαγράμματος ροής';
$string['youandanyother'] = 'Εσείς, ή οποιοσδήποτε άλλος';
$string['youor'] = ', ή';
