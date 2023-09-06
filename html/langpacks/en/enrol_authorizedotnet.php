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
 * Strings for component 'enrol_authorizedotnet', language 'en', version '4.1'.
 *
 * @package     enrol_authorizedotnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ZIP'] = 'ZIP/Postal Code';
$string['ZIPplaceholder'] = '46214-9707';
$string['account_payment'] = 'Account Payment';
$string['address'] = 'Address';
$string['addressplaceholder'] = '808 E UTAH VALLY DR';
$string['assignrole'] = 'Assign role';
$string['authorizedotnet:config'] = 'Configure Authorize.net enrol instances';
$string['authorizedotnet:manage'] = 'Manage enrolled users';
$string['authorizedotnet:unenrol'] = 'Unenrol users from course';
$string['authorizedotnet:unenrolself'] = 'Unenrol self from the course';
$string['billinginfo'] = 'Billing Information';
$string['card_payment'] = 'Card Payment';
$string['cardcode'] = 'Card Code';
$string['cardcodeplaceholder'] = 'xxx';
$string['cardnumber'] = 'Card Number';
$string['cardnumberplaceholder'] = '6011308854249711';
$string['cardnumberreq'] = '(enter card number without spacec or dashes)';
$string['checkproductionmode'] = 'Check for Live Mode';
$string['clientkey'] = 'Authorize.net merchant Client key';
$string['clientkey_descrition'] = 'Generate client key from merchant account & paste here';
$string['cost'] = 'Cost :';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['create_user_token'] = 'To make Stripe callback works, kindly  enable Moodle REST protocol on your site';
$string['currency'] = 'Currency';
$string['currencynote'] = 'Authorize.Net supports a single currency per gateway account, so if you need to accept payments in multiple currencies, your client must have multiple gateway accounts and your code will switch to the correct currency.';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Authorize.net enrolments';
$string['enabled_rest_protocol'] = 'Also kindly create your token';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['errorcode'] = 'Error Code  :';
$string['errormsg'] = 'Error Message :';
$string['errorsubmission'] = 'Error on form submission.';
$string['expdate'] = 'Expiry Date';
$string['expdatedes'] = '(mm yyyy)';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['expmonthplaceholder'] = '09';
$string['expyearplaceholder'] = '2025';
$string['firstname'] = 'First Name';
$string['from_here'] = 'from here';
$string['invalidcontextid'] = 'Not a valid context id';
$string['invalidcourseid'] = 'Not a valid course id';
$string['invalidintanceid'] = 'Not a valid instance id';
$string['invaliduserid'] = 'Not a valid user id';
$string['lastname'] = 'Last Name';
$string['loginid'] = 'Authorize.net Login ID';
$string['loginid_description'] = 'Copy API Login ID from merchant account & paste here';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['make_payment'] = 'Make Your Payment';
$string['merchantmd5hash'] = 'Authorize.net Merchant MD5 hash key';
$string['orderinfo'] = 'Order Information';
$string['pay'] = 'Pay';
$string['paymentinfo'] = 'Payment Information';
$string['pluginname'] = 'Authorize.net';
$string['pluginname_desc'] = 'The Authorize.net module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['requires_payment'] = 'This course requires a payment for entry.';
$string['status'] = 'Allow Authorize.net enrolments';
$string['status_desc'] = 'Allow users to use Authorize.net to enrol into a course by default.';
$string['success'] = 'success';
$string['successmsg'] = 'Your Payment has been Successful!';
$string['tarnsactionfail'] = 'Transaction Failed!';
$string['token_empty_error'] = 'Web service token could not be empty';
$string['transactionfailmsg'] = 'Transaction Failed! No response returned';
$string['transactionkey'] = 'Authorize.net Transaction Key';
$string['transactionkey_description'] = 'Copy API Transaction Key from merchant account & paste here';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['webservice_token_string'] = 'User Token';
$string['whatscvv'] = 'what\'s that';
