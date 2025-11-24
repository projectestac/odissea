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
 * Strings for component 'booking', language 'el', version '4.5'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Ενεργή';
$string['activitycompletionsuccess'] = 'Όλοι οι επιλεγμένοι χρήστες έχουν επισημανθεί για ολοκλήρωση δραστηριότητας';
$string['addastemplate'] = 'Προσθήκη ως υπόδειγμα';
$string['addcategory'] = 'Επεξεργασία κατηγοριών';
$string['addmorebookings'] = 'Προσθήκη περισσοτέρων κρατήσεων';
$string['addnewcategory'] = 'Προσθήκη νέας κατηγορίας';
$string['addnewtagtemplate'] = 'Προσθήκη νέου υποδείγματος ετικετών';
$string['address'] = 'Διεύθυνση';
$string['addtocalendar'] = 'Προσθήκη στο ημερολόγιο';
$string['addtogroup'] = 'Αυτόματη εγγραφή χρηστών σε ομάδα';
$string['addusertogroup'] = 'Προσθήκη χρήστη στην ομάδα:';
$string['advancedoptions'] = 'Προχωρημένες επιλογές';
$string['aftercompletedtext'] = 'Μετά την ολοκλήρωση της δραστηριότητας';
$string['aftercompletedtext_help'] = 'Αφήστε το κενό για να χρησιμοποιήσετε το προεπιλεγμένο κείμενο του ιστοτόπου. Μπορείτε να χρησιμοποιήσετε οποιοδήποτε από τα παρακάτω σύμβολα κράτησης θέσης στο κείμενο:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - Το N είναι ένας αριθμός διδάσκοντος ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Δώστε κωδικό QR με αναγνωριστικό χρήστη</li>
<li>{qr_username} - Δώστε κωδικό QR με όνομα χρήστη του χρήστη</li>
<li>{times} - Χρόνοι συνόδων</li>
<li>{shorturl} - Σύντομη διεύθυνση URL ob επιλογή</li>
</ul>';
$string['allbookingoptions'] = 'Λήψη χρηστών για όλες τις επιλογές κράτησης';
$string['allcomments'] = 'Όλοι μπορούν να σχολιάσουν';
$string['allmailssend'] = 'Όλα τα μηνύματα ηλε.ταχυδρομείου προς τους χρήστες στάλθηκαν!';
$string['allowupdate'] = 'Να επιτρέπεται ενημέρωση της κράτησης';
$string['allratings'] = 'Όλοι μπορούν να αξιολογήσουν';
$string['answer'] = 'Απάντηση';
$string['answered'] = 'Απαντήθηκε';
$string['asglobaltemplate'] = 'Χρήση ως καθολικού υποδείγματος';
$string['associatedcourse'] = 'Συσχετιζόμενο μάθημα';
$string['astemplate'] = 'Χρήση ως υποδείγματος σε αυτό το μάθημα';
$string['attachedfiles'] = 'Συνημμένα αρχεία';
$string['autoenrol'] = 'Αυτόματη εγγραφή χρηστών';
$string['availability'] = 'Ακόμη διαθέσιμο';
$string['available'] = 'Διαθέσιμες θέσεις';
$string['availableplaces'] = 'Διαθέσιμες θέσεις: {$a->available} από {$a->maxanswers}';
$string['backtoresponses'] = '<< Πίσω στις απαντήσεις';
$string['banusernames'] = 'Απαγόρευση ονομάτων χρηστών';
$string['banusernameswarning'] = 'Το όνομα χρήστη σας είναι απαγορευμένο, οπότε δεν μπορείτε να κάνετε κράτηση.';
$string['beforebookedtext_help'] = 'Αφήστε το κενό για να χρησιμοποιήσετε το προεπιλεγμένο κείμενο του ιστοτόπου. Μπορείτε να χρησιμοποιήσετε οποιοδήποτε από τα παρακάτω σύμβολα κράτησης θέσης στο κείμενο:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - Το N είναι ένας αριθμός διδάσκοντος ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Δώστε κωδικό QR με αναγνωριστικό χρήστη</li>
<li>{qr_username} - Δώστε κωδικό QR με όνομα χρήστη του χρήστη</li>
<li>{times} - Χρόνοι συνόδων</li>
<li>{shorturl} - Σύντομη διεύθυνση URL ob επιλογή</li>
</ul>';
$string['beforecompletedtext_help'] = 'Αφήστε το κενό για να χρησιμοποιήσετε το προεπιλεγμένο κείμενο του ιστοτόπου. Μπορείτε να χρησιμοποιήσετε οποιοδήποτε από τα παρακάτω σύμβολα κράτησης θέσης στο κείμενο:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - Το N είναι ένας αριθμός διδάσκοντος ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Δώστε κωδικό QR με αναγνωριστικό χρήστη</li>
<li>{qr_username} - Δώστε κωδικό QR με όνομα χρήστη του χρήστη</li>
<li>{times} - Χρόνοι συνόδων</li>
<li>{shorturl} - Σύντομη διεύθυνση URL ob επιλογή</li>
</ul>';
$string['booked'] = 'Σε κράτηση';
$string['bookedusers'] = 'Χρήστες με κράτηση';
$string['booking'] = 'Κρατήσεις';
$string['booking:addinstance'] = 'Προσθήκη νέας κράτησης';
$string['booking:choose'] = 'Κράτηση';
$string['booking:comment'] = 'Προσθήκη σχολίων';
$string['booking:communicate'] = 'Δυνατότητα επικοινωνίας';
$string['booking:deleteresponses'] = 'Διαγραφή αποκρίσεων';
$string['booking:downloadresponses'] = 'Λήψη αποκρίσεων';
$string['booking:managecomments'] = 'Διαχείριση σχολίων';
$string['booking:readallinstitutionusers'] = 'Εμφάνιση όλων των χρηστών';
$string['booking:readresponses'] = 'Ανάγνωση αποκρίσεων';
$string['booking:updatebooking'] = 'Διαχείριση επιλογών κράτησης';
$string['bookingattachment'] = 'Συνημμένο';
$string['bookingcategory'] = 'Κατηγορία';
$string['bookingduration'] = 'Διάρκεια';
$string['bookingfull'] = 'Δεν υπάρχουν καθόλου διαθέσιμες θέσεις';
$string['bookingopen'] = 'Άνοιγμα';
$string['bookingoptionname'] = 'Όνομα επιλογής κράτησης';
$string['bookingoptionsfromtemplatemenu'] = 'Νέα επιλογή κράτησης από υπόδειγμα';
$string['bookingoptionsmenu'] = 'Επιλογές κράτησης';
$string['bookingoptiontitle'] = 'Τίτλος επιλογής κράτησης';
$string['bookingorganizatorname'] = 'Όνομα οργανωτή';
$string['bookingpoints'] = 'Πόντοι μαθήματος';
$string['bookingpolicy'] = 'Πολιτική κρατήσεων';
$string['bookingpollurl'] = 'Διεύθυνση URL ψηφοφορίας';
$string['bookingpollurlteachers'] = 'Διεύθυνση URL ψηφοφορίας διδασκόντων';
$string['bookingsaved'] = 'Η κράτησή σας αποθηκεύτηκε με επιτυχία. Τώρα μπορείτε να προχωρήσετε στην κράτηση άλλων μαθημάτων.';
$string['bookingtags'] = 'Ετικέτες';
$string['bookingtext'] = 'Κείμενο κράτησης';
$string['booknow'] = 'Κράτηση τώρα';
$string['btnbooknowname'] = 'Όνομα πλήκτρου: Κράτηση τώρα';
$string['btncacname'] = 'Όνομα πλήκτρου: Επιβεβαίωση ολοκλήρωσης δραστηριότητας';
$string['btncancelname'] = 'Όνομα πλήκτρου: Ακύρωση κράτησης';
$string['cancel'] = 'Άκυρο';
$string['cancelbooking'] = 'Ακύρωση κράτησης';
$string['categories'] = 'Κατηγορίες';
$string['category'] = 'Κατηγορία';
$string['categoryname'] = 'Όνομα κατηγορίας';
$string['choosepdftitle'] = 'Επιλέξτε έναν τίτλο για το φύλλο καταχώρησης';
$string['comments'] = 'Σχόλια';
$string['completed'] = 'Ολοκληρώθηκε';
$string['completedcomments'] = 'Μόνο με ολοκληρωμένη δραστηριότητα';
$string['completedratings'] = 'Μόνο με ολοκληρωμένη δραστηριότητα';
$string['completionmodule'] = 'Με την ολοκλήρωση της επιλεγμένης δραστηριότητας του μαθήματος, ενεργοποιήστε τη μαζική διαγραφή των κρατήσεων χρηστών';
$string['confirmactivtyfrom'] = 'Επιβεβαίωση δραστηριότητας χρηστών από';
$string['copy'] = '- Αντιγραφή';
$string['copyonlythisbookingurl'] = 'Αντιγραφή αυτής της διεύθυνσης URL κράτησης';
$string['copytoclipboard'] = 'Αντιγραφή στο πρόχειρο: Ctrl+C, Enter';
$string['coursedate'] = 'Ημερομηνία';
$string['courseendtime'] = 'Χρόνος λήξης του μαθήματος';
$string['coursestarttime'] = 'Χρόνος έναρξης του μαθήματος';
$string['csvfile'] = 'Αρχείο CSV';
$string['customfieldconfigure'] = 'Προσαρμοσμένα πεδία επιλογών κρατήσεων';
$string['customfielddef'] = 'Προσαρμοσμένα πεδία επιλογών κρατήσεων';
$string['customfieldoptions'] = 'Λίστα δυνατών τιμών';
$string['customfieldtype'] = 'Τύπος πεδίου';
$string['dateerror'] = 'Λανθασμένη ημερομηνία στην γραμμή {$a}:';
$string['datenotset'] = 'Δεν ορίστηκε ημερομηνία';
$string['dateparseformat'] = 'Μορφότυπος συντακτικής ανάλυσης ημερομηνίας';
$string['days'] = '{$a} ημέρες';
$string['defaultbookingoption'] = 'Προεπιλεγμένες επιλογές κράτησης';
$string['defaulttemplate'] = 'Προεπιλεγμένο υπόδειγμα';
$string['deletecategory'] = 'Διαγραφή';
$string['deletedrule'] = 'Ο κανόνας διαγράφηκε.';
$string['deletedtext'] = 'Μήνυμα ακύρωσης κράτησης';
$string['deleteresponsesactivitycompletion'] = 'Διαγραφή όλων των χρηστών με ολοκληρωμένη δραστηριότητα: {$a}';
$string['deleterule'] = 'Διαγραφή';
$string['deletesubcategory'] = 'Παρακαλούμε, πρώτα διαγράψτε όλες τις υποκατηγορίες αυτής της κατηγορίας!';
$string['deleteuserfrombooking'] = 'Θέλετε πραγματικά να διαγράψετε τους χρήστες από τις κρατήσεις;';
$string['download'] = 'Λήψη';
$string['downloadallresponses'] = 'Λήψη όλων των αποκρίσεων για όλες τις επιλογές κρατήσεων';
$string['downloadusersforthisoptionods'] = 'Λήψη χρηστών ως .ods';
$string['downloadusersforthisoptionxls'] = 'Λήψη χρηστών ως .xls';
$string['editcategory'] = 'Επεξεργασία';
$string['editinstitutions'] = 'Επεξεργασία ιδρυμάτων';
$string['editotherbooking'] = 'Άλλοι κανόνες κρατήσεων';
$string['editrule'] = 'Επεξεργασία';
$string['edittag'] = 'Επεξεργασία';
$string['editteachers'] = 'Επεξεργασία';
$string['editteacherslink'] = 'Επεξεργασία διδασκόντων';
$string['enablecompletiongroup'] = 'Απαιτούνται καταχωρήσεις';
$string['entervalidurl'] = 'Παρακαλούμε, δώστε μια έγκυρη διεύθυνση URL!';
$string['errorpagination'] = 'Παρακαλούμε, δώστε έναν αριθμό μεγαλύτερο από 0';
$string['eventduration'] = 'Διάρκεια γεγονότος';
$string['eventpoints'] = 'Πόντοι';
$string['eventtype'] = 'Τύπος γεγονότος';
$string['forcourse'] = 'για το μάθημα';
$string['full'] = 'Πλήρως';
$string['fullname'] = 'Πλήρες όνομα';
$string['generaterecnum'] = 'Παραγωγή αριθμών';
$string['generaterecnumareyousure'] = 'Αυτό θα παραγάγει νέους αριθμούς και θα διαγράψει μόνιμα τον παλιό!';
$string['generaterecnumnotification'] = 'Έγινε παραγωγή νέων αριθμών.';
$string['gotobooking'] = '<< Κρατήσεις';
$string['groupexists'] = 'Η ομάδα υπάρχει ήδη στο μάθημα στόχος. Παρακαλούμε, επιλέξτε ένα άλλο όνομα για την επιλογή κρατήσεων.';
$string['groupname'] = 'Όνομα ομάδας';
$string['hidedescription'] = 'Απόκρυψη περιγραφής';
$string['hours'] = '{$a} ώρες';
$string['icalcanceldesc'] = 'Όταν ένας χρήστης ακυρώσει μια κράτηση ή αφαιρεθεί από τη λίστα κρατήσεων, τότε να γίνει επισύναψη ενός συνημμένου ical ως ακυρωμένο γεγονός.';
$string['importcsvtitle'] = 'Εισαγωγή CSV';
$string['importexcelbutton'] = 'Εισαγωγή ολοκλήρωσης δραστηριότητας';
$string['importexceltitle'] = 'Εισαγωγή ολοκλήρωσης δραστηριότητας';
$string['institution'] = 'Ίδρυμα';
$string['institutions'] = 'Ιδρύματα';
$string['lblacceptingfrom'] = 'Όνομα ταμπέλας: Αποδοχή από';
$string['lblbooking'] = 'Όνομα ταμπέλας: Κράτηση';
$string['lblinstitution'] = 'Όνομα ταμπέλας: Ίδρυμα';
$string['lbllocation'] = 'Όνομα ταμπέλας: Τοποθεσία';
$string['lblname'] = 'Όνομα ταμπέλας: Όνομα';
$string['lblnumofusers'] = 'Όνομα ταμπέλας: Αριθμός χρηστών';
$string['lblsurname'] = 'Όνομα ταμπέλας: Επώνυμο';
$string['lblteachname'] = 'Όνομα ταμπέλας: Διδάσκοντες';
$string['leftandrightdate'] = '{$a->leftdate} μέχρι {$a->righttdate}';
$string['limit'] = 'Όριο';
$string['limitanswers'] = 'Περιορισμός του αριθμού των συμμετεχόντων';
$string['limitanswers_help'] = 'Αν αλλάξετε αυτή την επιλογή και έχετε κρατήσεις ατόμων, μπορείτε να τις διαγράψετε χωρίς ειδοποίηση!';
$string['location'] = 'Τοποθεσία';
$string['mailconfirmationsent'] = 'Θα λάβετε σύντομα ένα μήνυμα επιβεβαίωσης μέσω ηλε.ταχυδρομείου';
$string['managebooking'] = 'Διαχείριση';
$string['messagesubject'] = 'Θέμα';
$string['messagetext'] = 'Μήνυμα';
$string['minutes'] = '{$a} λεπτά';
$string['modulename'] = 'Κράτηση';
$string['modulenameplural'] = 'Κρατήσεις';
$string['moveoptionto'] = 'Μεταφορά επιλογής κράτησης σε άλλο στιγμιότυπο κράτησης';
$string['multiselect'] = 'Πολλαπλή επιλογή';
$string['next'] = 'Επόμενο';
$string['no'] = 'Όχι';
$string['notopenyet'] = 'Συγγνώμη, αυτή η δραστηριότητα δεν είναι διαθέσιμη μέχρι {$a}';
$string['notstarted'] = 'Δεν ξεκίνησε ακόμη';
$string['nouserfound'] = 'Δεν βρέθηκε χρήστης:';
$string['nousers'] = 'Κανένας χρήστης!';
$string['numberrows'] = 'Αρίθμηση γραμμών';
$string['onwaitinglist'] = 'Είστε στην λίστα αναμονής';
$string['optiondates'] = 'Σύνοδος πολλαπλών ημερομηνιών';
$string['optiondatessuccessfullydelete'] = 'Ο χρόνος συνόδου διαγράφηκε.';
$string['optiondatessuccessfullysaved'] = 'Ο χρόνος συνόδου αποθηκεύτηκε.';
$string['optiondatestime'] = 'Χρόνος συνόδου';
$string['optionid'] = 'Αναγνωριστικό επιλογής';
$string['optionmenu'] = 'Αυτή η επιλογή κράτησης';
$string['optionsfields'] = 'Πεδία στην σελίδα επισκόπησης επιλογών κράτησης';
$string['optiontemplatename'] = 'Όνομα υποδείγματος επιλογών';
$string['optiontemplatessettings'] = 'Υποδείγματα επιλογών κράτησης';
$string['otherbookingaddrule'] = 'Προσθήκη νέου κανόνα';
$string['otherbookinglimit'] = 'Όριο';
$string['otherbookingnumber'] = 'Αριθμός χρηστών';
$string['otherbookingsuccessfullysaved'] = 'Ο κανόνας αποθηκεύτηκε!';
$string['pdflandscape'] = 'Οριζόντια';
$string['pdfportrait'] = 'Πορτραίτο';
$string['pluginadministration'] = 'Διαχείριση κρατήσεων';
$string['pluginname'] = 'Κράτηση';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'Διεύθυνση URL ψηφοφορίας';
$string['pollurlteacherstextsubject'] = 'Παρακαλούμε, απαντήστε στην έρευνα';
$string['pollurltextmessage'] = 'Παρακαλούμε, απαντήστε στην έρευνα

Διεύθυνση URL έρευνας {pollurl}';
$string['pollurltextsubject'] = 'Παρακαλούμε, απαντήστε στην έρευνα';
$string['presence'] = 'Παρουσία';
$string['previous'] = 'Προηγούμενη';
$string['question'] = 'Ερώτηση';
$string['removeresponses'] = 'Διαγραφή όλων των αποκρίσεων';
$string['reset'] = 'Επαναρχικοποίηση';
$string['responses'] = 'Αποκρίσεις';
$string['responsesto'] = 'Αποκρίσεις στο {$a}';
$string['rootcategory'] = 'Ρίζα';
$string['savenewtagtemplate'] = 'Αποθήκευση';
$string['searchdate'] = 'Ημερομηνία';
$string['searchname'] = 'Μικρό/Βαπτιστικό όνομα';
$string['searchsurname'] = 'Επώνυμο';
$string['searchtag'] = 'Ετικέτες αναζήτησης';
$string['searchwaitinglist'] = 'Σε λίστα αναμονής';
$string['select'] = 'Επιλογή';
$string['selectanoption'] = 'Παρακαλούμε, διαλέξτε μια επιλογή κράτησης';
$string['selectatleastoneuser'] = 'Παρακαλούμε, επιλέξτε τουλάχιστον 1 χρήστη!';
$string['selectcategory'] = 'Επιλογή κατηγορίας';
$string['selectfield'] = 'Πτυσσόμενη λίστα';
$string['selectoptionid'] = 'Παρακαλούμε, διαλέξτε επιλογή!';
$string['selectoptioninotherbooking'] = 'Επιλογή';
$string['sendreminderemail'] = 'Αποστολή μηνύματος (ηλε.ταχυδρομείου) υπενθύμισης';
$string['sendreminderemailsuccess'] = 'Το μήνυμα (ηλε.ταχυδρομείου) ειδοποίησης έχει αποσταλεί!';
$string['showcustomfields'] = 'Προσαρμοσμένα πεδία επιλογών κρατήσεων';
$string['showdescription'] = 'Εμφάνιση περιγραφής';
$string['showmybookingsonly'] = 'Οι κρατήσεις μου';
$string['signature'] = 'Υπογραφή';
$string['signincustfields'] = 'Προσαρμοσμένα πεδία προφίλ';
$string['signinextracols'] = 'Πρόσθετη στήλη';
$string['signinlogofooter'] = 'Λογότυπο στο υποσέλιδο προς εμφάνιση στο φύλλο σύνδεσης';
$string['signinlogoheader'] = 'Λογότυπο στην επικεφαλίδα προς εμφάνιση στο φύλλο σύνδεσης';
$string['signinonesession'] = 'Εμφάνιση επιλεγμένου χρόνου συνόδου στο φύλλο σύνδεσης';
$string['signinsheetfields'] = 'Πεδία φύλλου σύνδεσης (PDF)';
$string['spaceleft'] = 'διαθέσιμος χώρος';
$string['spacesleft'] = 'διαθέσιμοι χώροι';
$string['starttimenotset'] = 'Η ημερομηνία έναρξης δεν ορίστηκε';
$string['statuschangetext'] = 'Μήνυμα αλλαγής κατάστασης';
$string['subscribersto'] = 'Διδάσκοντες για «{$a}»';
$string['subscribetocourse'] = 'Εγγραφή χρηστών στο μάθημα';
$string['subscribeuser'] = 'Σίγουρα να εγγραφούν οι μαθητές στο ακόλουθο μάθημα';
$string['successfulldeleted'] = 'Η κατηγορία διαγράφηκε!';
$string['sucesfullcompleted'] = 'Η δραστηριότητα ολοκληρώθηκε με επιτυχία για τους χρήστες.';
$string['sucesfullytransfered'] = 'Οι χρήστες μεταφέρθηκαν με επιτυχία.';
$string['tagsuccessfullysaved'] = 'Η ετικέτα αποθηκεύτηκε.';
$string['tagtag'] = 'Ετικέτα';
$string['tagtemplates'] = 'Υπόδειγμα ετικέτας';
$string['tagtext'] = 'Κείμενο';
$string['taken'] = 'Με κράτηση';
$string['teacherroleid'] = 'Εγγραφή διδάσκοντος με αυτό το ρόλο στο μάθημα';
$string['teachers'] = 'Διδάσκοντες';
$string['templatedeleted'] = 'Το υπόδειγμα διαγράφηκε!';
$string['terminated'] = 'Τερματίστηκε';
$string['textfield'] = 'Είσοδος κειμένου μίας μόνο γραμμής';
$string['timecreated'] = 'Χρόνος δημιουργίας';
$string['to'] = 'σε';
$string['toomuchusersbooked'] = 'Ο μέγιστος αριθμός χρηστών για τους οποίους μπορείτε να κάνετε κράτηση είναι: {$a}';
$string['topic'] = 'Θέμα';
$string['transefusers'] = 'Μεταφορά χρηστών';
$string['transfer'] = 'Μεταφορά';
$string['transferheading'] = 'Μεταφορά επιλεγμένων χρηστών στην επιλεγμένη επιλογή κρατήσεων';
$string['transfersuccess'] = 'Οι χρήστες έχουν μεταφερθεί με επιτυχία στη νέα επιλογή κρατήσεων';
$string['updatebooking'] = 'Τροποποίηση αυτής της επιλογής κρατήσεων';
$string['usedinbooking'] = 'Δεν μπορείτε να διαγράψετε αυτή την κατηγορία, διότι την χρησιμοποιείτε στις κρατήσεις!';
$string['usedinbookinginstances'] = 'Το υπόδειγμα χρησιμοποιείται στα ακόλουθα στιγμιότυπα κρατήσεων';
$string['usercalendarentry'] = 'Έχετε κράτηση για αυτή την <a href="{$a}">σύνοδο</a>.';
$string['userdownload'] = 'Λήψη χρηστών';
$string['userid'] = 'Αναγνωριστικό χρήστη';
$string['userleave'] = 'Ο χρήστης έχει ακυρώσει την κράτησή του/της';
$string['usernameofbookingmanager'] = 'Επιλογή ενός διαχειριστή κρατήσεων';
$string['usersonlist'] = 'Χρήστης στη λίστα';
$string['userssuccessfullenrolled'] = 'Όλοι οι χρήστες έχουν εγγραφεί!';
$string['userssuccessfullybooked'] = 'Όλοι οι χρήστες έχουν εγγραφεί στην άλλη επιλογή κράτησης.';
$string['viewallresponses'] = 'Διαχείριση {$a} αποκρίσεων';
$string['waitinglist'] = 'Λίστα αναμονής';
$string['waitinglisttaken'] = 'Στην λίστα αναμονής';
$string['week'] = 'Εβδομάδα';
$string['whichview'] = 'Προεπιλεγμένη εμφάνιση για επιλογές κρατήσεων';
$string['withselected'] = 'Με τους επιλεγμένους χρήστες:';
$string['wrongdataallfields'] = 'Παρακαλούμε, συμπληρώστε όλα τα πεδία!';
$string['yes'] = 'Ναι';
$string['yourselection'] = 'Η επιλογή σας';
