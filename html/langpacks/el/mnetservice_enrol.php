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
 * Strings for component 'mnetservice_enrol', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   mnetservice_enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Διαθέσιμα μαθήματα στο {$a}';
$string['availablecoursesonnone'] = 'Ο απομακρυσμένος Η/Υ (host) <a href="{$a->hosturl}">{$a->hostname}</a> δεν προσφέρει μαθήματα για τους χρήστες μας.';
$string['clientname'] = 'Λογισμικό πελάτης απομακρυσμένων εγγραφών';
$string['clientname_help'] = 'Αυτό το εργαλείο σας επιτρέπει να εγγράφετε και να ακυρώνετε την εγγραφή τοπικών χρηστών σας, σε απομακρυσμένους υπολογιστές που σας το επιτρέπουν, μέσω του πρόσθετου αυθεντικοποίησης MNet.';
$string['editenrolments'] = 'Επεξεργασία εγγραφών';
$string['hostappname'] = 'Εφαρμογή';
$string['hostname'] = 'Όνομα Η/Υ δικτύου';
$string['hosturl'] = 'Διεύθυνση URL απομακρυσμένου Η/Υ δικτύου';
$string['nopublishers'] = 'Δεν διατίθενται απομακρυσμένοι ομότιμοι.';
$string['noroamingusers'] = 'Οι χρήστες απαιτείται να έχουν τη δυνατότητα «{$a}» στο πλαίσιο συστήματος για να εγγραφούν σε απομακρυσμένα μαθήματα, ωστόσο προς το παρόν δεν υπάρχουν χρήστες με αυτή τη δυνατότητα. Κάντε κλικ στο κουμπί «Συνέχεια» για να αντιστοιχίσετε την απαιτούμενη δυνατότητα σε έναν ή περισσότερους ρόλους στον ιστότοπό σας.';
$string['otherenrolledusers'] = 'Άλλοι εγγεγραμμένοι χρήστες';
$string['pluginname'] = 'Υπηρεσία απομακρυσμένης εγγραφής';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Υπηρεσία απομακρυσμένης εγγραφής';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Ο χρόνος κατά τον οποίο τροποποιήθηκε η εγγραφή';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Ο τύπος εγγραφής στον απομακρυσμένο εξυπηρετητή που χρησιμοποιείται για την εγγραφή του χρήστη στο μάθημά του';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'Το αναγνωριστικό του απομακρυσμένου Η/Υ δικτύου MNet';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'Το αναγνωριστικό του μαθήματος στον απομακρυσμένο εξυπηρετητή';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'Το όνομα του ρόλου στον απομακρυσμένο εξυπηρετητή';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Η υπηρεσία απομακρυσμένης εγγραφής αποθηκεύει πληροφορίες για εγγραφές τοπικών χρηστών σε μαθήματα σε απομακρυσμένους κεντρικούς Η/Υ.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'Το αναγνωριστικό του τοπικού χρήστη σε αυτόν τον εξυπηρετητή';
$string['refetch'] = 'Επαναλάβετε την ενημέρωση της κατάστασης από τους απομακρυσμένους Η/Υ δικτύου';
