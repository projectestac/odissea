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
 * Adds payments links to the admin tree
 *
 * @package    core
 * @copyright  2020 Marina Glancy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// XTEC ************ AFEGIT - Allow access only to xtecadmin user (Payment)
// 2021.07.14 @aginard
if (get_protected_agora()) {
// ************ FI

$ADMIN->add('payment', new admin_externalpage(
    'paymentaccounts',
    new lang_string('paymentaccounts', 'payment'),
    new moodle_url("/payment/accounts.php"),
    ['moodle/payment:manageaccounts', 'moodle/payment:viewpayments']));

// XTEC ************ AFEGIT - Allow access only to xtecadmin user
// 2021.07.14 @aginard
}
// ************ FI
