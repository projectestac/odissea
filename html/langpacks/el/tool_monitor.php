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
 * Strings for component 'tool_monitor', language 'el', version '3.11'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Προσθήκη νέου κανόνα';
$string['allevents'] = 'Όλα τα γεγονότα';
$string['allmodules'] = 'Όλα τα στιγμιότυπα';
$string['area'] = 'Περιοχή';
$string['areatomonitor'] = 'Περιοχή προς παρακολούθηση';
$string['cachedef_eventsubscriptions'] = 'Εδώ αποθηκεύεται ο κατάλογος των εγγραφών γεγονότων για μεμονωμένα μαθήματα';
$string['contactadmin'] = 'Επικοινωνήστε με τον διαχειριστή σας για να το ενεργοποιήσετε.';
$string['core'] = 'Πυρήνας';
$string['currentsubscriptions'] = 'Οι τρέχουσες εγγραφές σας';
$string['defaultmessagetemplate'] = 'Όνομα κανόνα: {rulename}<br />Περιγραφή: {description}<br />Όνομα γεγονότος: {eventname}';
$string['deleterule'] = 'Διαγραφή κανόνα';
$string['deletesubscription'] = 'Διαγραφή εγγραφής';
$string['description'] = 'Περιγραφή:';
$string['disablefieldswarning'] = 'Σε ορισμένα πεδία δεν μπορεί να γίνει επεξεργασία, καθώς αυτός ο κανόνας έχει ήδη εγγραφές.';
$string['duplicaterule'] = 'Δημιουργία αντιγράφου κανόνα';
$string['editrule'] = 'Επεξεργασία κανόνα';
$string['enablehelp'] = 'Ενεργοποίηση/απενεργοποίηση παρακολούθησης γεγονότων';
$string['enablehelp_help'] = 'Η παρακολούθηση γεγονότων πρέπει να είναι ενεργοποιημένη για να μπορέσετε να δημιουργήσετε και να εγγραφείτε σε κανόνες. Σημειώστε ότι η ενεργοποίηση της παρακολούθησης γεγονότων ενδέχεται να επηρεάσει την απόδοση του ιστοτόπου σας.';
$string['errorincorrectevent'] = 'Επιλέξτε ένα γεγονός που σχετίζεται με το επιλεγμένο πρόσθετο';
$string['event'] = 'Γεγονός';
$string['eventnotfound'] = 'Αδυναμία εύρεσης γεγονότος';
$string['eventrulecreated'] = 'Ο κανόνας δημιουργήθηκε';
$string['eventruledeleted'] = 'Ο κανόνας διαγράφηκε';
$string['eventruleupdated'] = 'Ο κανόνας ενημερώθηκε';
$string['eventsubcreated'] = 'Η εγγραφή δημιουργήθηκε';
$string['eventsubcriteriamet'] = 'Τα κριτήρια εγγραφής πληρούνται';
$string['eventsubdeleted'] = 'Η εγγραφή διαγράφηκε';
$string['freqdesc'] = '{$a->freq} φορές(-ά) σε {$a->mins} λεπτά(-ό)';
$string['frequency'] = 'Όριο για ειδοποιήσεις';
$string['frequency_help'] = 'Ο αριθμός των γεγονότων εντός συγκεκριμένης χρονικής περιόδου που απαιτείται για την αποστολή ενός μηνύματος ειδοποίησης.';
$string['inminutes'] = 'σε λεπτά';
$string['invalidmodule'] = 'Μη έγκυρο άρθρωμα';
$string['manage'] = 'Διαχείριση';
$string['managerules'] = 'Κανόνες παρακολούθησης γεγονότων';
$string['manageruleslink'] = 'Μπορείς να διαχειριστείς κανόνες μέσω της σελίδας {$a}.';
$string['managesubscriptions'] = 'Παρακολούθηση γεγονότων';
$string['managesubscriptionslink'] = 'Μπορείς να εγγραφείς σε κανόνες μέσω της σελίδας {$a}.';
$string['messageprovider:notification'] = 'Ειδοποιήσεις για εγγραφές κανόνων';
$string['messagetemplate'] = 'Μήνυμα ειδοποίησης';
$string['messagetemplate_help'] = 'Ένα μήνυμα ειδοποίησης αποστέλλεται στους εγγεγραμμένους όταν συμπληρωθεί το όριο ενημερώσεως. Μπορεί να περιλαμβάνει οποιοδήποτε ή όλα τα ακόλουθα δεσμευτικά θέσης:

* Σύνδεσμος προς την τοποθεσία του γεγονότος {link}
* Σύνδεσμος προς την παρακολουθούμενη περιοχή {modulelink}
* Όνομα κανόνα {rulename}
* Περιγραφή {description}
* Γεγονός {eventname}';
$string['messagetemplate_link'] = 'διαχείριση/εργαλείο/παρακολούθηση/διαχείρισηκανόνων';
$string['moduleinstance'] = 'Στιγμιότυπο';
$string['monitor:managerules'] = 'Διαχείριση κανόνων παρακολούθησης γεγονότων';
$string['monitor:managetool'] = 'Ενεργοποίηση/απενεργοποίηση παρακολούθησης γεγονότων';
$string['monitor:subscribe'] = 'Εγγραφή σε κανόνες παρακολούθησης γεγονότων';
$string['monitordisabled'] = 'Η παρακολούθηση γεγονότων είναι αυτή τη στιγμή απενεργοποιημένη.';
$string['monitorenabled'] = 'Η παρακολούθηση γεγονότων είναι αυτή τη στιγμή ενεργοποιημένη.';
$string['norules'] = 'Δεν υπάρχουν καθόλου κανόνες παρακολούθησης γεγονότων';
$string['pluginname'] = 'Παρακολούθηση γεγονότων';
$string['privacy:createdrules'] = 'Κανόνες παρακολούθησης γεγονότων που δημιούργησα';
$string['privacy:metadata:description'] = 'Περιγραφή του κανόνα';
$string['privacy:metadata:eventname'] = 'Πλήρες όνομα του γεγονότος';
$string['privacy:metadata:frequency'] = 'Συχνότητα ειδοποιήσεων';
$string['privacy:metadata:historysummary'] = 'Αποθηκεύει το ιστορικό των μηνυμάτων που στάλθηκαν';
$string['privacy:metadata:inactivedate'] = 'Περίοδος χρόνου, σε ημέρες, μετά την οποία θα αφαιρεθεί εντελώς μια ανενεργή εγγραφή';
$string['privacy:metadata:lastnotificationsent'] = 'Πότε έγινε τελευταία φορά ειδοποίηση για αυτήν τη συνδρομή.';
$string['privacy:metadata:messagesummary'] = 'Οι ειδοποιήσεις αποστέλλονται στο σύστημα μηνυμάτων.';
$string['privacy:metadata:name'] = 'Όνομα του κανόνα';
$string['privacy:metadata:plugin'] = 'Το όνομα Frankenstlye του πρόσθετου';
$string['privacy:metadata:rulessummary'] = 'Αυτό αποθηκεύει κανόνες παρακολούθησης.';
$string['privacy:metadata:subscriptionssummary'] = 'Αποθηκεύει εγγραφές χρηστών σε διάφορους κανόνες';
$string['privacy:metadata:template'] = 'Φόρμα μηνύματος';
$string['privacy:metadata:timecreatedrule'] = 'Πότε δημιουργήθηκε αυτός ο κανόνας';
$string['privacy:metadata:timecreatedsub'] = 'Πότε δημιουργήθηκε αυτή η εγγραφή';
$string['privacy:metadata:timemodifiedrule'] = 'Πότε τροποποιήθηκε τελευταία αυτός ο κανόνας';
$string['privacy:metadata:timesent'] = 'Πότε στάλθηκε το μήνυμα';
$string['privacy:metadata:timewindow'] = 'Χρονικό παράθυρο (διάστημα) σε δευτερόλεπτα';
$string['privacy:metadata:userid'] = 'Το αναγνωριστικό του χρήστη που δημιούργησε τον κανόνα.';
$string['privacy:metadata:useridhistory'] = 'Το αναγνωριστικό του χρήστη στον οποίο έχει αποσταλεί αυτή η ειδοποίηση';
$string['privacy:metadata:useridsub'] = 'Το αναγνωριστικό του εγγραφόμενου.';
$string['privacy:subscriptions'] = 'Οι εγγραφές μου παρακολούθησης γεγονότων';
$string['processevents'] = 'Επεξεργασία γεγονότων';
$string['ruleareyousure'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τον κανόνα «{$a}»;';
$string['ruleareyousureextra'] = 'Υπάρχουν {$a} εγγραφές σε αυτόν τον κανόνα, οι οποίες επίσης θα διαγραφούν.';
$string['rulecopysuccess'] = 'Ο κανόνας αντιγράφηκε με επιτυχία';
$string['ruledeletesuccess'] = 'Ο κανόνας διαγράφηκε με επιτυχία';
$string['rulehelp'] = 'Λεπτομέρειες κανόνα';
$string['rulehelp_help'] = 'Αυτός ο κανόνας παρακολουθεί πότε το γεγονός «{$a->eventname}» στο «{$a->eventcomponent}» έχει προκληθεί {$a->frequency} φορές/-ά σε {$a->minutes} λεπτά/-ό.';
$string['rulename'] = 'Όνομα κανόνα';
$string['rulenopermission'] = 'Δεν έχετε δικαίωμα να εγγραφείτε σε κανένα γεγονός.';
$string['rulenopermissions'] = 'Δεν έχετε δικαιώματα για «{$a} ενός κανόνα»';
$string['rulescansubscribe'] = 'Κανόνες στους οποίους μπορείς να εγγραφείς';
$string['selectacourse'] = 'Επιλογή ενός μαθήματος';
$string['selectcourse'] = 'Επισκεφθείτε αυτήν την αναφορά σε επίπεδο μαθήματος για να πάρετε μια λίστα με πιθανά αρθρώματα';
$string['subareyousure'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε την εγγραφή στον κανόνα «{$a}»;';
$string['subcreatesuccess'] = 'Η εγγραφή δημιουργήθηκε με επιτυχία';
$string['subdeletesuccess'] = 'Η εγγραφή διαγράφηκε με επιτυχία';
$string['subhelp'] = 'Στοιχεία εγγραφής';
$string['subhelp_help'] = 'Αυτή η εγγραφή παρακολουθεί πότε το γεγονός «{$a->eventname}» έχει προκληθεί στο «{$a->moduleinstance}» {$a->frequency} φορές/-ά σε {$a->minutes} λεπτά/-ό.';
$string['subscribeto'] = 'Εγγραφείτε στον κανόνα «{$a}»';
$string['taskchecksubscriptions'] = 'Ενεργοποίηση/απενεργοποίηση εγγραφών μη έγκυρων κανόνων';
$string['taskcleanevents'] = 'Εκκαθάριση γεγονότων της παρακολούθησης γεγονότων';
$string['unsubscribe'] = 'Απεγγραφή';
