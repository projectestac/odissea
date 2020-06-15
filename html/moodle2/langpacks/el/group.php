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
 * Strings for component 'group', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Προστέθηκε από {$a}';
$string['addgroup'] = 'Προσθήκη χρήστη στην ομάδα';
$string['addgroupstogrouping'] = 'Προσθήκη ομάδας στην ομαδοποίηση';
$string['addgroupstogroupings'] = 'Προσθήκη/διαγραφή ομάδων';
$string['adduserstogroup'] = 'Προσθήκη/διαγραφή χρηστών';
$string['allocateby'] = 'Εκχώρηση μελών';
$string['anygrouping'] = '[Οποιαδήποτε ομαδοποίηση]';
$string['autocreategroups'] = 'Αυτόματη δημιουργία ομάδων';
$string['backtogroupings'] = 'Επιστροφή στις ομαδοποιήσεις';
$string['backtogroups'] = 'Επιστροφή στις ομάδες';
$string['badnamingscheme'] = 'Πρέπει να περιέχει ακριβώς έναν «@» ή έναν «#» χαρακτήρα';
$string['byfirstname'] = 'Αλφαβητικά βάσει ονόματος, επώνυμου';
$string['byidnumber'] = 'Αλφαβητικά βάσει αναγνωριστικού αριθμού';
$string['bylastname'] = 'Αλφαβητικά βάσει επώνυμου, ονόματος';
$string['createautomaticgrouping'] = 'Δημιουργία αυτόματης ομαδοποίησης';
$string['creategroup'] = 'Δημιουργία ομάδος';
$string['creategrouping'] = 'Δημιουργία ομαδοποίησης';
$string['creategroupinselectedgrouping'] = 'Δημιουργία ομάδας στην ομαδοποίηση';
$string['createingrouping'] = 'Ομαδοποίηση αυτόματα δημιουργημένων ομάδων';
$string['createorphangroup'] = 'Δημιουργία ορφανής ομάδας';
$string['databaseupgradegroups'] = 'Η έκδοση του Ομάδες είναι τώρα {$a}';
$string['defaultgrouping'] = 'Προεπιλεγμένη ομαδοποίηση';
$string['defaultgroupingname'] = 'Ομαδοποίηση';
$string['defaultgroupname'] = 'Ομάδα';
$string['deleteallgroupings'] = 'Διαγραφή όλων των ομαδοποιήσεων';
$string['deleteallgroups'] = 'Διαγραφή όλων των ομάδων';
$string['deletegroupconfirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε την ομάδα «{$a}»;';
$string['deletegrouping'] = 'Διαγραφή ομαδοποίησης';
$string['deletegroupingconfirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε την ομαδοποίηση «{$a}»; (Οι ομάδες στην ομαδοποίηση δεν διαγράφονται.)';
$string['deletegroupsconfirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε τις ακόλουθες ομάδες;';
$string['deleteselectedgroup'] = 'Διαγραφή επιλεγμένων ομάδων';
$string['editgroupingsettings'] = 'Επεξεργασία ρυθμίσεων ομαδοποίησης';
$string['editgroupsettings'] = 'Επεξεργασία ρυθμίσεων ομάδας';
$string['editusersgroupsa'] = 'Επεξεργασία ομάδων για «{$a}»';
$string['enablemessaging'] = 'Ομαδικά μηνύματα';
$string['enablemessaging_help'] = 'Εάν ενεργοποιηθεί, τα μέλη μιας ομάδας μπορούν να στείλουν μηνύματα στους άλλους στην ομάδα μέσω του συρταριού μηνυμάτων.';
$string['enrolmentkey'] = 'Κλειδί εγγραφής';
$string['enrolmentkeyalreadyinuse'] = 'Αυτό το κλειδί εγγραφής χρησιμοποιείται ήδη για μια άλλη ομάδα.';
$string['enrolmentkey_help'] = 'Ένα κλειδί εγγραφής επιτρέπει στην πρόσβαση στο μάθημα να περιορίζεται μόνο σε όσους γνωρίζουν το κλειδί. Εάν έχει οριστεί ένα κλειδί εγγραφής ομάδας, τότε η εισαγωγή αυτού του κλειδιού όχι μόνο θα επιτρέψει στο χρήστη την είσοδο στο μάθημα, αλλά θα τον κάνει αυτόματα και μέλος αυτής της ομάδας.

Σημείωση: (Πριν τη χρήση) τα κλειδιά εγγραφής ομάδας πρέπει να είναι ενεργοποιημένα στις ρυθμίσεις αυτο-εγγραφής και πρέπει επίσης να καθοριστεί ένα κλειδί εγγραφής για το μάθημα.';
$string['erroraddremoveuser'] = 'Σφάλμα κατά την προσθήκη/διαγραφή του χρήστη {$a} στην ομάδα';
$string['erroreditgroup'] = 'Σφάλμα δημιουργίας/ανανέωσης της ομάδας {$a}';
$string['erroreditgrouping'] = 'Σφάλμα δημιουργίας/ανανέωσης της ομαδοποίησης {$a}';
$string['errorinvalidgroup'] = 'Σφάλμα, μη έγκυρη ομάδα {$a}';
$string['errorremovenotpermitted'] = 'Δεν έχετε δικαίωμα να καταργήσετε το αυτόματα προστιθέμενο μέλος ομάδας {$a}';
$string['errorselectone'] = 'Παρακαλούμε επιλέξτε μια μονή ομάδα προτού επιλέξτε αυτή την επιλογή';
$string['errorselectsome'] = 'Παρακαλούμε επιλέξτε μια ή περισσότερες ομάδες προτού επιλέξτε αυτή την επιλογή';
$string['evenallocation'] = 'Σημείωση: Για την διατήρηση της ομαλότητας στην κατανομή ομάδας, ο πραγματικός αριθμός των μελών ανά ομάδα διαφέρει από τον αριθμό που ορίσατε.';
$string['eventgroupcreated'] = 'Η ομάδα δημιουργήθηκε';
$string['eventgroupdeleted'] = 'Η ομάδα διαγράφηκε';
$string['eventgroupingcreated'] = 'Η ομαδοποίηση δημιουργήθηκε';
$string['eventgroupingdeleted'] = 'Η ομαδοποίηση διαγράφηκε';
$string['eventgroupinggroupassigned'] = 'Η ομάδα ανήκει πλέον στην ομαδοποίηση';
$string['eventgroupinggroupunassigned'] = 'Η ομάδα δεν ανήκει πλέον στην ομαδοποίηση';
$string['eventgroupingupdated'] = 'Η ομαδοποίηση ενημερώθηκε';
$string['eventgroupmemberadded'] = 'Προστέθηκε μέλος ομάδας';
$string['eventgroupmemberremoved'] = 'Αφαιρέθηκε μέλος ομάδας';
$string['eventgroupupdated'] = 'Η ομάδα ενημερώθηκε';
$string['existingmembers'] = 'Υπάρχοντα μέλη: {$a}';
$string['filtergroups'] = 'Φιλτράρισμα ομάδων με:';
$string['group'] = 'Ομάδα συμμετεχόντων';
$string['groupaddedsuccesfully'] = 'Η ομάδα {$a} προστέθηκε με επιτυχία';
$string['groupaddedtogroupingsuccesfully'] = 'Η ομάδα «{$a->groupname}» προστέθηκε στην ομαδοποίηση «{$a->groupingname}» με επιτυχία';
$string['groupby'] = 'Αυτόματη δημιουργία με βάση:';
$string['groupdescription'] = 'Περιγραφή ομάδας';
$string['groupinfo'] = 'Πληροφορίες σχετικά με την επιλεγμένη ομάδα';
$string['groupinfomembers'] = 'Πληροφορίες σχετικά με τα επιλεγμένα μέλη';
$string['groupinfopeople'] = 'Πληροφορίες σχετικά με τα επιλεγμένα άτομα';
$string['grouping'] = 'Ομαδοποίηση';
$string['groupingaddedsuccesfully'] = 'Η ομαδοποίηση {$a} προστέθηκε με επιτυχία';
$string['groupingdescription'] = 'Περιγραφή ομαδοποίησης';
$string['grouping_help'] = 'Μια ομαδοποίηση είναι μια συλλογή ομάδων μέσα σε ένα μάθημα. Εάν επιλεγεί μια ομαδοποίηση, οι μαθητές που έχουν ανατεθεί σε ομάδες εντός της ομαδοποίησης θα μπορούν να συνεργαστούν.
((Η λειτουργία ομάδων πρέπει να έχει οριστεί σε ξεχωριστές ή ορατές ομάδες.))';
$string['groupingname'] = 'Όνομα ομαδοποίησης';
$string['groupingnameexists'] = 'Το όνομα ομαδοποίησης «{$a}» υπάρχει ήδη σε αυτό το μάθημα, παρακαλούμε επιλέξτε ένα άλλο.';
$string['groupings'] = 'Ομαδοποιήσεις';
$string['groupingsection'] = 'Πρόσβαση ομαδοποίησης';
$string['groupingsection_help'] = 'Μια ομαδοποίηση είναι μια συλλογή ομάδων μέσα σε ένα μάθημα. Εάν επιλεγεί μια ομάδα εδώ, μόνο οι μαθητές που έχουν ανατεθεί σε ομάδες εντός αυτής της ομαδοποίησης θα έχουν πρόσβαση στο τμήμα μαθήματος.';
$string['groupingsonly'] = 'Μόνο ομαδοποιήσεις';
$string['groupmember'] = 'Μέλος ομάδας';
$string['groupmemberdesc'] = 'Τυπικός ρόλος για το μέλος μιας ομάδας.';
$string['groupmembers'] = 'Μέλη ομάδας';
$string['groupmemberssee'] = 'Εμφάνιση μελών ομάδας';
$string['groupmembersselected'] = 'Μέλη της επιλεγμένης ομάδας';
$string['groupmode'] = 'Λειτουργία ομάδας';
$string['groupmodeforce'] = 'Επιβολή τρόπου λειτουργίας ομάδων';
$string['groupmodeforce_help'] = 'Αν ο τρόπος λειτουργίας ομάδων είναι υποχρεωτικός, τότε ο τρόπος λειτουργίας ομάδων του μαθήματος εφαρμόζεται σε κάθε δραστηριότητα του μαθήματος. Οι ρυθμίσεις τρόπου λειτουργίας ομάδων κάθε δραστηριότητας θα αγνοηθούν.';
$string['groupmode_help'] = 'Αυτή η ρύθμιση έχει 3 επιλογές:

* Καμία ομάδα
* Ξεχωριστές ομάδες - Κάθε μέλος της ομάδας μπορεί να δει μόνο τη δική του ομάδα· οι άλλες είναι αόρατες
* Ορατές ομάδες - Κάθε μέλος της ομάδας εργάζεται στη δική του ομάδα αλλά μπορεί επίσης να δει τις άλλες ομάδες

Ο τρόπος λειτουργίας των ομάδων που ορίζεται σε επίπεδο μαθήματος είναι ο προεπιλεγμένος τρόπος λειτουργίας για όλες τις δραστηριότητες στο μάθημα. Κάθε δραστηριότητα που υποστηρίζει ομάδες μπορεί επίσης να ορίσει το δικό της τρόπο λειτουργίας, ωστόσο αν ο τρόπος λειτουργίας σε επίπεδο μαθήματος είναι υποχρεωτικός, η ρύθμιση τρόπου λειτουργίας ομάδων κάθε δραστηριότητας θα αγνοηθεί.';
$string['groupmy'] = 'Η ομάδα μου';
$string['groupname'] = 'Όνομα ομάδας';
$string['groupnameexists'] = 'Το όνομα ομάδας «{$a}» υπάρχει ήδη σε αυτό το μάθημα, παρακαλούμε επιλέξτε ένα άλλο.';
$string['groupnotamember'] = 'Λυπόμαστε, αλλά δεν είστε μέλος αυτής της ομάδας';
$string['groups'] = 'Ομάδες';
$string['groupscount'] = 'Ομάδες ({$a})';
$string['groupsettingsheader'] = 'Ομάδες';
$string['groupsgroupings'] = 'Ομάδες & Ομαδοποιήσεις';
$string['groupsinselectedgrouping'] = 'Ομάδες σε:';
$string['groupsnone'] = 'Καθόλου ομάδες';
$string['groupsonly'] = 'Μόνο ομάδες';
$string['groupspreview'] = 'Προεπισκόπηση ομάδων';
$string['groupsseparate'] = 'Διαχωρισμός ομάδων';
$string['groupsvisible'] = 'Ορατές ομάδες';
$string['grouptemplate'] = 'Ομάδα @';
$string['hidepicture'] = 'Απόκρυψη εικόνας';
$string['importgroups'] = 'Εισαγωγή ομάδων';
$string['importgroups_help'] = 'Οι ομάδες μπορούν να εισαχθούν μέσω αρχείου κειμένου. Ο μορφότυπος του αρχείου θα πρέπει να είναι ο εξής:

* Κάθε γραμμή του αρχείου περιέχει μία εγγραφή
* Κάθε εγγραφή είναι μια σειρά δεδομένων που χωρίζονται με κόμματα
* Η πρώτη εγγραφή περιέχει μια λίστα ονομάτων πεδίων που καθορίζουν το μορφότυπο του υπόλοιπου αρχείου
* Απαιτούμενο όνομα πεδίου είναι το «groupname» (όνομα ομάδας)
* Προαιρετικά ονόματα πεδίων είναι «description» (περιγραφή), «enrolmentkey» (κλειδί εγγραφής), «groupingname» (όνομα ομαδοποίησης)
* Παλαιότερες εκδόσεις πριν την 3.0 χρησιμοποιούσαν και «picture» (εικόνα) και «hidepicture» (απόκρυψη εικόνας)';
$string['importgroups_link'] = 'ομάδα/εισαγωγή';
$string['includeonlyactiveenrol'] = 'Να συμπεριληφθούν μόνο ενεργές εγγραφές';
$string['includeonlyactiveenrol_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες σε αναστολή δεν θα συμπεριλαμβάνονται σε ομάδες.';
$string['javascriptrequired'] = 'Αυτή η σελίδα απαιτεί ενεργοποίηση της Javascript.';
$string['members'] = 'Μέλη ανά ομάδα';
$string['membersofselectedgroup'] = 'Μέλη σε:';
$string['mygroups'] = 'Οι ομάδες μου';
$string['namingscheme'] = 'Σύστημα ονοματολογίας';
$string['namingscheme_help'] = 'Το σύμβολο at (@) μπορεί να χρησιμοποιείται για τη δημιουργία ομάδων με ονόματα που περιέχουν γράμματα. Για παράδειγμα Ομάδα @ θα παραγάγει ομάδες με ονόματα Ομάδα Α, Ομάδα Β, Ομάδα Γ, ... Το σύμβολο αριθμός (#) μπορεί να χρησιμοποιείται για τη δημιουργία ομάδων με ονόματα που περιέχουν αριθμούς. Για παράδειγμα Ομάδα # θα παραγάγει ομάδες με ονόματα Ομάδα 1, Ομάδα 2, Ομάδα 3, ...';
$string['newgrouping'] = 'Νέα ομαδοποίηση';
$string['newpicture'] = 'Νέα εικόνα';
$string['newpicture_help'] = 'Επιλογή μιας εικόνας σε μορφότυπο JPG ή PNG. Η εικόνα θα περικοπεί σε ένα τετράγωνο και θα αλλάξει σε 100x100 εικονοστοιχεία.';
$string['noallocation'] = 'Καμία εκχώρηση';
$string['nogroup'] = 'Καμία ομάδα';
$string['nogrouping'] = 'Καμία ομαδοποίηση';
$string['nogroups'] = 'Δεν υπάρχουν οριστεί ομάδες σε αυτό το μάθημα ακόμα';
$string['nogroupsassigned'] = 'Χωρίς ανάθεση ομάδων';
$string['nopermissionforcreation'] = 'Αδυναμία δημιουργίας της ομάδας «{$a}» καθώς δεν έχετε τα απαιτούμενα δικαιώματα';
$string['nosmallgroups'] = 'Αποτροπή τελευταίας μικρής ομάδας';
$string['notingroup'] = 'Αγνόηση χρηστών σε ομάδες';
$string['notingrouping'] = '[Όχι σε ομαδοποίηση]';
$string['notingrouplist'] = '[Όχι σε ομάδα]';
$string['nousersinrole'] = 'Δεν υπάρχουν κατάλληλοι χρήστες στον επιλεγμένο ρόλο';
$string['number'] = 'Καταμέτρηση ομάδας/μελών';
$string['numgroups'] = 'Αριθμός ομάδων';
$string['nummembers'] = 'Μέλη ανά ομάδα';
$string['othergroups'] = 'Άλλες ομάδες';
$string['overview'] = 'Επισκόπηση';
$string['potentialmembers'] = 'Δυνητικά μέλη: {$a}';
$string['potentialmembs'] = 'Δυνητικά μέλη';
$string['printerfriendly'] = 'Εμφάνιση φιλική για εκτύπωση';
$string['privacy:metadata:core_message'] = 'Οι ομαδικές συζητήσεις';
$string['privacy:metadata:groups'] = 'Ένα ιστορικό μελών της ομάδας.';
$string['privacy:metadata:groups:groupid'] = 'Το αναγνωριστικό της ομάδας.';
$string['privacy:metadata:groups:timeadded'] = 'Η χρονοσφραγίδα που δείχνει πότε προστέθηκε ο χρήστης στην ομάδα.';
$string['privacy:metadata:groups:userid'] = 'Το αναγνωριστικό του χρήστη το οποίο συσχετίζεται με την ομάδα.';
$string['random'] = 'Τυχαία';
$string['removefromgroup'] = 'Αφαίρεση χρήστη από την ομάδα {$a}';
$string['removefromgroupconfirm'] = 'Θέλετε πραγματικά να αφαιρέσετε το χρήστη «{$a->user}» από την ομάδα «{$a->group}»;';
$string['removegroupfromselectedgrouping'] = 'Αφαίρεση της ομάδας από την ομαδοποίηση';
$string['removegroupingsmembers'] = 'Αφαίρεση όλων των ομάδων από τις ομαδοποιήσεις';
$string['removegroupsmembers'] = 'Αφαίρεση όλων των μελών της ομάδας';
$string['removeselectedusers'] = 'Αφαίρεση των επιλεγμένων χρηστών';
$string['selectfromgroup'] = 'Επιλέξτε μέλη από την ομάδα';
$string['selectfromgrouping'] = 'Επιλέξτε μέλη από την ομαδοποίηση';
$string['selectfromrole'] = 'Επιλογή μελών με το ρόλο';
$string['showgroupsingrouping'] = 'Εμφάνιση ομάδων στην ομαδοποίηση';
$string['showmembersforgroup'] = 'Εμφάνιση μελών για την ομάδα';
$string['toomanygroups'] = 'Ανεπαρκής αριθμός χρηστών για τη δημιουργία αυτού του αριθμού ομάδων - υπάρχουν μόνο {$a} χρήστες στον επιλεγμένο ρόλο.';
$string['usercount'] = 'Καταμέτρηση χρηστών';
$string['usercounttotal'] = 'Καταμέτρηση χρηστών ({$a})';
$string['usergroupmembership'] = 'Ένταξη του επιλεγμένου χρήστη:';
