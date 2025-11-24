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
 * Strings for component 'enrol_ldap', language 'el', version '4.5'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Αντιστοίχιση του ρόλου «{$a->role_shortname}» στο χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (id {$a->course_id})';
$string['assignrolefailed'] = 'Δεν ήταν δυνατή η ανάθεση του ρόλου «{$a->role_shortname}» στον χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (αναγνωριστικό {$a->course_id})';
$string['autocreate'] = '<p>Μαθήματα μπορούν να δημιουργούνται αυτόματα εάν υπάρχουν εγγραφές σε ένα μάθημα το οποίο δεν υπάρχει ακόμα στο Moodle</p><p>Αν χρησιμοποιείτε αυτόματη δημιουργία μαθήματος, συνιστάται να αφαιρέσετε τις ακόλουθες δυνατότητες: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname και moodle/course:changesummary, από τους σχετικούς ρόλους ώστε να αποτρέψετε τροποποιήσεις των τεσσάρων πεδίων μαθήματος που αναφέρθηκαν παραπάνω (ID number, shortname, fullname και summary δηλ. αναγνωριστικός αριθμός, σύντομο όνομα, πλήρες όνομα και περίληψη).</p>';
$string['autocreate_key'] = 'Αυτόματη δημιουργία';
$string['autocreation_settings'] = 'Ρυθμίσεις αυτόματης δημιουργίας μαθημάτων';
$string['autoupdate_settings'] = 'Αυτόματες ρυθμίσεις ενημέρωσης μαθημάτων';
$string['autoupdate_settings_desc'] = '<p>Επιλέξτε πεδία για ενημέρωση όταν εκτελείται το χρονοπρογραμματισμένο σενάριο «Συγχρονισμός εγγραφών LDAP».</p><p>Όταν επιλεγεί τουλάχιστον ένα πεδίο, θα γίνει μια ενημέρωση.</p>';
$string['bind_dn'] = 'Εάν θέλετε να χρησιμοποιήσετε έναν χρήστη δέσμευσης (bind-user) για αναζήτηση χρηστών, ορίστε το εδώ. Κάτι σαν «cn=ldapuser,ou=public,o=org».';
$string['bind_dn_key'] = 'Διακεκριμένο όνομα χρήστη δέσμευσης (bind-user)';
$string['bind_pw'] = 'Κωδικός πρόσβασης για τον χρήστη δέσμευσης (bind-user).';
$string['bind_pw_key'] = 'Κωδικός πρόσβασης';
$string['bind_settings'] = 'Ρυθμίσεις δέσμευσης';
$string['cannotcreatecourse'] = 'Δεν είναι δυνατή η δημιουργία μαθήματος: λείπουν τα απαιτούμενα δεδομένα από την εγγραφή LDAP!';
$string['cannotupdatecourse'] = 'Δεν είναι δυνατή η ενημέρωση του μαθήματος: λείπουν τα απαιτούμενα δεδομένα από την εγγραφή LDAP! Αναγνωριστικός αριθμός μαθήματος: «{$a->idnumber}»';
$string['cannotupdatecourse_duplicateshortname'] = 'Δεν είναι δυνατή η ενημέρωση του μαθήματος: Διπλότυπο σύντομο όνομα. Παράλειψη μαθήματος με αναγνωριστικό αριθμό «{$a->idnumber}»...';
$string['category'] = 'Η κατηγορία για αυτόματα δημιουργημένα μαθήματα.';
$string['category_key'] = 'Κατηγορία';
$string['contexts'] = 'πλαίσια LDAP';
$string['couldnotfinduser'] = 'Δεν ήταν δυνατή η εύρεση του χρήστη «{$a}». Παράλειψη...';
$string['course_fullname'] = 'Προαιρετικό: Πεδίο LDAP για ανάκτηση του πλήρες ονόματος.';
$string['course_fullname_key'] = 'Πλήρες όνομα';
$string['course_fullname_updateonsync'] = 'Ενημέρωση πλήρους ονόματος κατά τη διάρκεια του σεναρίου συγχρονισμού';
$string['course_fullname_updateonsync_key'] = 'Ενημέρωση πλήρους ονόματος';
$string['course_idnumber'] = 'Χαρακτηριστικό LDAP από το οποίο θα πάρετε τον αναγνωριστικό αριθμό μαθήματος. Συνήθως «cn» ή «uid».';
$string['course_idnumber_key'] = 'Αναγνωριστικός αριθμός';
$string['course_search_sub'] = 'Αναζήτηση μελών της ομάδας από υπο-πλαίσια';
$string['course_search_sub_key'] = 'Αναζήτηση σε υπο-πλαίσια';
$string['course_settings'] = 'Ρυθμίσεις εγγραφής σε μάθημα';
$string['course_shortname'] = 'Προαιρετικό: Το πεδίο LDAP για τη λήψη του σύντομου ονόματος.';
$string['course_shortname_key'] = 'Σύντομο όνομα';
$string['course_shortname_updateonsync'] = 'Ενημέρωση σύντομου ονόματος κατά τη διάρκεια της δέσμης συγχρονισμού';
$string['course_shortname_updateonsync_key'] = 'Ενημέρωση σύντομου ονόματος';
$string['course_summary'] = 'Προαιρετικό: Το πεδίο LDAP για τη λήψη της περίληψης.';
$string['course_summary_key'] = 'Περίληψη';
$string['course_summary_updateonsync'] = 'Ενημέρωση περίληψης κατά τη διάρκεια της δέσμης συγχρονισμού';
$string['course_summary_updateonsync_key'] = 'Ενημέρωση περίληψης';
$string['coursenotexistskip'] = 'Το μάθημα «{$a}» δεν υπάρχει και η αυτόματη δημιουργία είναι απενεργοποιημένη. Γίνεται παράλειψη...';
$string['courseupdated'] = 'Το μάθημα με αναγνωριστικό αριθμό «{$a->idnumber}» ενημερώθηκε με επιτυχία.';
$string['courseupdateskipped'] = 'Το μάθημα με αναγνωριστικό αριθμό «{$a->idnumber}» δεν απαιτεί ενημέρωση. Παράλειψη...';
$string['createcourseextid'] = 'ΔΗΜΙΟΥΡΓΙΑ Χρήστη που έχει εγγραφεί σε μη υπάρχον μάθημα «{$a->courseextid}»';
$string['createnotcourseextid'] = 'Ο χρήστης εγγράφηκε σε μη υπάρχον μάθημα «{$a->courseextid}»';
$string['creatingcourse'] = 'Δημιουργία μαθήματος «{$a}»...';
$string['duplicateshortname'] = 'Η δημιουργία του μαθήματος απέτυχε. Διπλό σύντομο όνομα. μαθήματος με αναγνωριστικό αριθμό «{$a->idnumber}»...';
$string['editlock'] = 'Κλείδωμα τιμής';
$string['emptyenrolment'] = 'Κενή εγγραφή για τον ρόλο «{$a->role_shortname}» στο μάθημα «{$a->course_shortname}»';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Εγγραφή του χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (αναγνωριστικό «{$a->course_id}»)';
$string['enroluserenable'] = 'Ενεργοποιημένη εγγραφή για το χρήστη «{$a->user_username}».';
$string['explodegroupusertypenotsupported'] = 'Το ldap_explode_group() δεν υποστηρίζει τον επιλεγμένο τύπο χρήστη: {$a}';
$string['extcourseidinvalid'] = 'Το εξωτερικό αναγνωριστικό μαθήματος είναι μη έγκυρο!';
$string['extremovedsuspend'] = 'Απενεργοποιήθηκε η εγγραφή για το χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (αναγνωριστικό «{$a->course_id}»)';
$string['extremovedsuspendnoroles'] = 'Απενεργοποιήθηκε η εγγραφή και αφαιρέθηκαν οι ρόλοι για το χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (αναγνωριστικό «{$a->course_id}»)';
$string['extremovedunenrol'] = 'Ακύρωση εγγραφής χρήστη «{$a->user_username}» από το μάθημα «{$a->course_shortname}» (αναγνωριστικό «{$a->course_id}»)';
$string['failed'] = 'Αποτυχία!';
$string['general_options'] = 'Γενικές επιλογές';
$string['group_memberofattribute'] = 'Όνομα του χαρακτηριστικού που καθορίζει τις ομάδες στις οποίες ανήκει ένας συγκεκριμένος χρήστης ή ομάδα (π.χ. μέλος ομάδας, μέλος ομαδοποίησης, κλπ.)';
$string['group_memberofattribute_key'] = 'Χαρακτηριστικό «Member of» (Μέλος της ομάδας...)';
$string['host_url'] = 'Ορίστε τον κεντρικό υπολογιστή LDAP host σε μορφή URL όπως «ldap://ldap.myorg.com/»
ή «ldaps://ldap.myorg.com/».';
$string['host_url_key'] = 'Διεύθυνση ιστού του Η/Υ (host)';
$string['idnumber_attribute'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακεκριμένα ονόματα, καθορίστε το ίδιο χαρακτηριστικό που χρησιμοποιήσατε για τη αντιστοίχιση του αναγνωριστικού αριθμού του χρήστη στις ρυθμίσεις αυθεντικοποίησης LDAP.';
$string['idnumber_attribute_key'] = 'Χαρακτηριστικό αναγνωριστικού αριθμού';
$string['ldap:manage'] = 'Διαχείριση περιπτώσεων LDAP εγγραφής';
$string['ldap_encoding'] = 'Καθορίστε την κωδικοποίηση που χρησιμοποιείται από τον εξυπηρετητή LDAP. Πιθανότατα το utf-8, το MS AD v2 χρησιμοποιεί προεπιλεγμένη κωδικοποίηση πλατφόρμας όπως cp1252, cp1250, κλπ.';
$string['ldap_encoding_key'] = 'Κωδικοποίηση LDAP';
$string['memberattribute'] = 'Χαρακτηριστικό μέλους LDAP';
$string['memberattribute_isdn'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακεκριμένα ονόματα, πρέπει να τα ορίσετε εδώ. Αν ναι, πρέπει επίσης να διαμορφώσετε τις υπόλοιπες ρυθμίσεις σε αυτή την ενότητα.';
$string['memberattribute_isdn_key'] = 'Το χαρακτηριστικό member ((μέλος)) χρησιμοποιεί το dn ((distinguished name, διακεκριμένο όνομα))';
$string['nested_groups'] = 'Θέλετε να χρησιμοποιήσετε εμφωλευμένες ομάδες (ομάδες ομάδων) για εγγραφή;';
$string['nested_groups_key'] = 'Εμφωλευμένες ομάδες';
$string['nested_groups_settings'] = 'Ρυθμίσεις εμφωλευμένων ομάδων';
$string['nosuchrole'] = 'Δεν υπάρχει τέτοιος ρόλος: «{$a}»';
$string['objectclass'] = 'objectClass που χρησιμοποιείται για την αναζήτηση μαθημάτων. Συνήθως «posixGroup».';
$string['objectclass_key'] = 'Κλάση αντικειμένου';
$string['ok'] = 'OK!';
$string['opt_deref'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακριτικά ονόματα, καθορίστε τον τρόπο χειρισμού των ψευδωνύμων κατά τη διάρκεια μιας αναζήτησης. Επιλέξτε μία από τις ακόλουθες τιμές: «Όχι» (LDAP_DEREF_NEVER) ή «Ναι» (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Αποσύνδεση ψευδωνύμων';
$string['phpldap_noextension'] = '********** <em>Το άρθρωμα PHP LDAP φαίνεται να μην υπάρχει. Παρακαλούμε βεβαιωθείτε ότι έχει εγκατασταθεί και ενεργοποιηθεί αν θέλετε να χρησιμοποιήσετε αυτό το πρόσθετο εγγραφής.</em>';
$string['pluginname'] = 'LDAP εγγραφές';
$string['pluginname_desc'] = '<p>Μπορείτε να χρησιμοποιήσετε έναν εξυπηρετητή LDAP για να ελέγξετε τις εγγραφές σας. Θεωρείται πως το LDAP δέντρο σας περιέχει ομάδες που αντιστοιχούν σε μαθήματα και πως κάθε ομάδα/μάθημα θα έχει καταχωρήσεις ένταξης μελών για να αντιστοιχίσει στους μαθητές.</p><p>Θεωρείται ότι τα μαθήματα ορίζονται ως ομάδες στον LDAP, με κάθε ομάδα να έχει πολλαπλά πεδία εγγραφής ως μέλος (<em>member</em> ή <em>memberUid</em>) τα οποία περιέχουν ένα μοναδικό αναγνωριστικό για κάθε χρήστη.</p><p>Για την χρήση εγγραφής LDAP, οι χρήστες σας <strong>πρέπει</strong> να έχουν ένα έγκυρο πεδίο idnumber. Οι ομάδες LDAP πρέπει να έχουν αυτό το idnumber στα πεδία των μελών για να εγγραφεί ένας χρήστης στο μάθημα. Αυτό δουλεύει καλά εάν χρησιμοποιείτε LDAP πιστοποίηση ήδη.</p><p>Οι εγγραφές ενημερώνονται όταν ο χρήστης συνδεθεί. Μπορείτε να εκτελέσετε και ένα σενάριο για να συγχρονίζονται οι εγγραφές. Δείτε στο <em>enrol/ldap/enrol_ldap_sync.php</em>.</p><p>Αυτό το πρόσθετο μπορεί να οριστεί ώστε να δημιουργεί νέα μαθήματα αυτόματα όταν εμφανίζονται νέες ομάδες στον LDAP.</p>';
$string['pluginnotenabled'] = 'Πρόσθετο μη ενεργοποιημένο!';
$string['privacy:metadata'] = 'Το πρόσθετο «Εγγραφές LDAP» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['role_mapping'] = '<p>Για κάθε ρόλο, πρέπει να καθορίσετε όλα τα πλαίσια LDAP όπου βρίσκονται οι ομάδες που αντιπροσωπεύουν τα μαθήματα. Διαχωρίστε διαφορετικά πλαίσια με ένα ερωτηματικό (;).</p><p>Πρέπει επίσης να καθορίσετε το ιδιοχαρακτηριστικό που χρησιμοποιεί ο εξυπηρετητής LDAP για να διατηρεί τα μέλη μιας ομάδας. Αυτό είναι συνήθως «member» ή «memberUid»</p>';
$string['role_mapping_attribute'] = 'Χαρακτηριστικό member (μέλος) του LDAP για {$a}';
$string['role_mapping_context'] = 'Πλαίσια LDAP για {$a}';
$string['role_mapping_key'] = 'Αντιστοίχιση ρόλων από το LDAP';
$string['roles'] = 'Αντιστοίχιση ρόλων';
$string['server_settings'] = 'Ρυθμίσεις εξυπηρετητή LDAP';
$string['synccourserole'] = '== Συγχρονισμός μαθήματος «{$a->idnumber}» για τον ρόλο «{$a->role_shortname}»';
$string['syncenrolmentstask'] = 'Διεργασία συγχρονισμού εγγραφών LDAP';
$string['template'] = 'Προαιρετικό: μαθήματα που δημιουργούνται αυτόματα μπορούν να αντιγράψουν τις ρυθμίσεις τους από ένα υπόδειγμα μαθήματος.';
$string['template_key'] = 'Υπόδειγμα';
$string['unassignrole'] = 'Αφαίρεση του ρόλου «{$a->role_shortname}» από τον χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (αναγνωριστικό {$a->course_id})...';
$string['unassignrolefailed'] = 'Αποτυχία αφαίρεσης του ρόλου «{$a->role_shortname}» από τον χρήστη «{$a->user_username}» στο μάθημα «{$a->course_shortname}» (αναγνωριστικό {$a->course_id})';
$string['unassignroleid'] = 'Αφαίρεση του ρόλου με αναγνωριστικό «{$a->role_id}» από τον χρήστη με αναγνωριστικό «{$a->user_id}».';
$string['updatelocal'] = 'Ενημέρωση τοπικών δεδομένων (πεδίων)';
$string['user_attribute'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακεκριμένα ονόματα, καθορίστε το ιδιοχαρακτηριστικό που χρησιμοποιείται για την ονομασία/αναζήτηση χρηστών. Εάν χρησιμοποιείτε αυθεντικοποίηση LDAP, αυτή η τιμή θα πρέπει να ταιριάζει με το ιδιοχαρακτηριστικό που καθορίζεται στην αντιστοίχιση του «ID Number» στο πρόσθετο αυθεντικοποίησης LDAP.';
$string['user_attribute_key'] = 'Χαρακτηριστικό αναγνωριστικού αριθμού';
$string['user_contexts'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακεκριμένα ονόματα, καθορίστε τη λίστα των πλαισίων όπου βρίσκονται οι χρήστες. Διαχωρίστε διαφορετικά πλαίσια με ένα ερωτηματικό (;). Για παράδειγμα: «ou=users,o=org; ou=others,o=org».';
$string['user_contexts_key'] = 'Πλαίσια';
$string['user_search_sub'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακεκριμένα ονόματα, καθορίστε εάν η αναζήτηση χρηστών γίνεται και σε υπο-πλαίσια.';
$string['user_search_sub_key'] = 'Αναζήτηση σε υπο-πλαίσια';
$string['user_settings'] = 'Ρυθμίσεις αναζήτησης χρήστη';
$string['user_type'] = 'Εάν η ιδιότητα μέλους της ομάδας περιέχει διακεκριμένα ονόματα, καθορίστε τον τρόπο αποθήκευσης των χρηστών στο LDAP';
$string['user_type_key'] = 'Τύπος χρήστη';
$string['version'] = 'Η έκδοση του LDAP πρωτοκόλλου που χρησιμοποιεί ο εξυπηρετητής.';
$string['version_key'] = 'Έκδοση';
