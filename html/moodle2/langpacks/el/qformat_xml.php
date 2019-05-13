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
 * Strings for component 'qformat_xml', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   qformat_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Μη έγκυρο αρχείο xml - αναμένοταν συμβολοσειρά (χρήση CDATA;)';
$string['pluginname'] = 'Μορφότυπος ερωτήσεων Moodle XML';
$string['pluginname_help'] = 'Αυτός είναι ένας μορφότυπος του Moodle για την εισαγωγή και την εξαγωγή ερωτήσεων.';
$string['privacy:metadata'] = 'Το πρόσθετο «Ερωτήσεις μορφότυπου XML» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['truefalseimporterror'] = '<b>Προειδοποίηση</b>: Δεν ήταν δυνατή η σωστή εισαγωγή της ερώτησης σωστού/λάθους «{$a->questiontext}». Δεν ήταν σαφές εάν η σωστή απάντηση είναι σωστό ή λάθος. Η ερώτηση έχει εισαχθεί υποθέτοντας ότι η απάντηση είναι «{$a->answer}». Εάν αυτό δεν είναι σωστό, θα πρέπει να επεξεργαστείτε την ερώτηση.';
$string['unsupportedexport'] = 'Ο τύπος ερώτησης {$a} δεν υποστηρίζεται από την εξαγωγή XML';
$string['xmlimportnoname'] = 'Λείπει το όνομα ερώτησης στο αρχείο XML';
$string['xmlimportnoquestion'] = 'Λείπει το κείμενο ερώτησης στο αρχείο XML';
$string['xmltypeunsupported'] = 'Ο τύπος ερώτησης {$a} δεν υποστηρίζεται από την εισαγωγή XML';
