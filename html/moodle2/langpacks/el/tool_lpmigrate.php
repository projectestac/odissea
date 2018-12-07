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
 * Strings for component 'tool_lpmigrate', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursecompetencymigrations'] = 'Μεταβάσεις προσόντων μαθήματος';
$string['coursemodulecompetencymigrations'] = 'Μεταβάσεις προσόντων δραστηριοτήτων και πόρων μαθήματος';
$string['errorcouldnotmapcompetenciesinframework'] = 'Δεν είναι δυνατή η σύνδεση με κάποιο προσόν σε αυτό το πλαίσιο.';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Σφάλμα κατά τη μετάβαση ενός προσόντος μαθήματος: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Σφάλμα κατά τη μετάβαση ενός προσόντος δραστηριότητας ή πόρου: {$a}';
$string['explanation'] = 'Το εργαλείο αυτό μπορεί να χρησιμοποιηθεί για ενημέρωση ενός πλαισίου προσόντων σε μια νέα έκδοση. Αναζητά προσόντα σε μαθήματα και δραστηριότητες χρησιμοποιώντας το παλαιότερο πλαίσιο, και ενημερώνει τους συνδέσμους να δείχνουν προς το νέο πλαίσιο.

Δεν συνιστάται η επεξεργασία του παλαιού συνόλου προσόντων απευθείας, καθώς αυτό θα τροποποιούσε όλα τα προσόντα που έχουν ήδη προστεθεί στα μαθησιακά πλάνα μαθητών.

Τυπικά θα κάνατε εισαγωγή της νέας έκδοσης ενός πλαισίου, θα κρύβατε το παλαιό πλαίσιο και μετά θα χρησιμοποιούσατε αυτό το εργαλείο για τη μετάβαση νέων μαθημάτων στο νέο πλαίσιο.';
$string['findingcoursecompetencies'] = 'Εύρεση προσόντων μαθήματος';
$string['findingmodulecompetencies'] = 'Εύρεση προσόντων δραστηριοτήτων και πόρων';
$string['pluginname'] = 'Εργαλείο μετάβασης προσόντων';
$string['warningcouldnotremovecoursecompetency'] = 'Το προσόν μαθήματος δεν μπορεί να διαγραφεί.';
$string['warningcouldnotremovemodulecompetency'] = 'Το προσόν δραστηριότητας ή πόρου δεν μπορεί να διαγραφεί.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Το προσόν μαθήματος προορισμού υπάρχει ήδη.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Το προσόν δραστηριότητας ή πόρου προορισμού υπάρχει ήδη.';
