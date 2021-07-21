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
 * Strings for component 'enrol_classicpay', language 'en', version '3.11'.
 *
 * @package     enrol_classicpay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin:page:legal'] = '<p>Classic Pay and Classic Pay Plus have been developed by Sebsoft.</p>
<p>However, Sebsoft can <i>not</i>, in any way, be held responsible or liable for processing transactions through the use of this system.<br/>
All liability claims will get rejected a priori.</p>
<p>You as merchant (or website owner) will be bound to Pay.nl by means of a (lawful) contract for the purpose of obtaining your collected funds (i.e. the payments done).<br/>
The payout will be provided by "Stichting Derdengelden Pay.nl", the legal company that\'s responsible for managing your funds.<br/>
Sebsoft will send you an invoice for all transactions made and/or generated invoices (applicable for ClassicPay Plus).</p>';
$string['api:notconfigured'] = 'You do not have a PAYNL Merchant token configured yet.<br/>
Please configure your settings to include a PAYNL Merchant token or <a href="{$a}">apply here</a>';
$string['apply:addsignee'] = 'Add a signee';
$string['apply:addsignee_help'] = 'If you want to add a signee, complete the following fields.';
$string['apply:alreadyconfigured'] = 'You already have a PAYNL Merchant token configured.';
$string['apply:authorizedtosign'] = 'Authorized to sign';
$string['apply:authorizedtosign:no'] = 'No';
$string['apply:authorizedtosign:shared'] = 'Shared authorized to sign';
$string['apply:authorizedtosign:yes'] = 'Authorized to sign independently';
$string['apply:authorizedtosign_help'] = 'Indicates if you are authorised to sign. If unknown, leave option to NO';
$string['apply:bankaccountnumber'] = 'Bankaccount Number (IBAN)';
$string['apply:bankaccountnumber_help'] = 'Bank account number. This should be an IBAN number for Europe.';
$string['apply:bankaccountowner'] = 'Bankaccount Owner';
$string['apply:bankaccountowner_help'] = 'Owner\'s name of the bank account';
$string['apply:bankcity'] = 'Bank city';
$string['apply:bankcity_help'] = 'Name of the city your bank is located.';
$string['apply:bankdocument'] = 'Copy bankaccount balance';
$string['apply:bankdocument_help'] = 'Latest copy of your bankaccount balance. We need this for validation purposes.<br/>
Any payment details are allowed to be made unreadable, as long as the account details are visible.';
$string['apply:bankname'] = 'Bank name';
$string['apply:bankname_help'] = 'Name of your bank, e.g. Rabobank, ING, ...';
$string['apply:bic'] = 'BIC / Swift';
$string['apply:bic_help'] = 'BIC or SWIFT code';
$string['apply:button:addsignee'] = 'Add {no} signee(s) to the form';
$string['apply:city'] = 'City';
$string['apply:city_help'] = 'City where the organisation is located';
$string['apply:cocdocument'] = 'COC Excerpt';
$string['apply:cocdocument_help'] = 'Excerpt of your Chamber of Commerce registration. We need this for validation purposes.';
$string['apply:cocnumber'] = 'COC Number';
$string['apply:cocnumber_help'] = 'Your Chamber of Commerce registration number';
$string['apply:companyname'] = 'Organisation Name';
$string['apply:companyname_help'] = 'Your organisation name';
$string['apply:countrycode'] = 'Country Code';
$string['apply:countrycode_help'] = 'Country where the organisation is located';
$string['apply:cpp:error'] = 'Error toggling Classic Pay plus: {$a}';
$string['apply:cpp:fail'] = 'Failure toggling Classic Pay plus';
$string['apply:cpp:success'] = 'Successfully toggled Classic Pay plus';
$string['apply:email'] = 'Email address';
$string['apply:email_help'] = 'Email address. This is needed to apply for PAYNL get in contact with you regarding your application.';
$string['apply:fail'] = '<div><p>Registration failure:</p><p>{$a->errcode}: {$a->error}</p><p>{$a->info}</p></div>';
$string['apply:firstname'] = 'First Name';
$string['apply:firstname_help'] = 'Your first name';
$string['apply:gender'] = 'Gender';
$string['apply:gender:female'] = 'Female';
$string['apply:gender:male'] = 'Male';
$string['apply:gender_help'] = 'Your gender';
$string['apply:header:details'] = 'Registration information';
$string['apply:header:paymentprofiles'] = 'Applicable payment methods for the application';
$string['apply:header:signees'] = 'Optional extra signees for the application';
$string['apply:housenumber'] = 'Housenumber';
$string['apply:housenumber_help'] = 'house number of the organisation';
$string['apply:iddocument'] = 'Identification document';
$string['apply:iddocument_help'] = 'Latest copy of your ID (passport or ID card), or a copy of your driver\'s license.';
$string['apply:information'] = '<div class="enrol-classicpay-info"><strong>Important application information.</strong><br/>
Please be careful to read the instructions very well before proceeding to apply.<br/>
<ul>
<li>Make sure to fill out this form to your best knowledge and honesty.</li>
<li>Double check this form before submitting.</li>
<li>Take note of the fact <b>all</b> documents are in fact required for your application.</li>
<li>Uploading every required document will speed up your application.</li>
<li>Your application will not be halted when you do not upload the required documents.<br/>
You will be able to start immediately, provided your application is successful<br/>
However, we will get in contact with you regarding the required documents and you will still have to provide them.<br/>
Failing to do so, or any type of abuse will lead to suspension of your account.</li>
<li>Any abuse or misuse will be reported to the authorities and can lead to your account being discontinued or blacklisted, either by us or by the payment service provider.</li>
<li>Any indication of forgery in or falsification of required documents will lead to you being reported to the authorities, either by us or by the payment service provider.</li>
<li><b><i>Unless all documents have been approved, your funds will not be released by the payment service provider.</i></b></li>
</ul></div>';
$string['apply:invoiceinterval_help'] = 'How often do you want invoices to be processed?';
$string['apply:languageid'] = 'Language ID';
$string['apply:languageid_help'] = 'Preferred language for your account';
$string['apply:lastname'] = 'Last Name';
$string['apply:lastname_help'] = 'You last name';
$string['apply:nav'] = 'PAYNL Merchant application.';
$string['apply:page:heading'] = 'Apply for a PAYNL Merchant token.';
$string['apply:paymentprofile'] = 'Payment method(s)';
$string['apply:phone'] = 'Phone number';
$string['apply:phone2'] = 'Alternate phone number';
$string['apply:phone2_help'] = 'Secondary phonenumber. If not needed, you can leave this blank';
$string['apply:phone_help'] = 'Phone number where you can be reached. We will try and contact you if there are any problems regarding the application';
$string['apply:sendemail_help'] = 'Indicates if you want to receive a registration email and what type.';
$string['apply:settlebalance_help'] = '??';
$string['apply:sitename'] = 'Site name';
$string['apply:sitename_help'] = 'Site name. We need this for program registration purposes.';
$string['apply:siteurl'] = 'Site url';
$string['apply:siteurl_help'] = 'Site url. We need this for program registration purposes.';
$string['apply:street'] = 'Street';
$string['apply:street_help'] = 'Street address of the organisation';
$string['apply:submit'] = 'Apply';
$string['apply:success'] = '<div><p>Registration successfully received and processed</p><p>{$a->info}</p>';
$string['apply:ubo'] = 'UBO';
$string['apply:ubo_help'] = 'UBO';
$string['apply:usecompanyauth_help'] = 'Use organisation authentication?';
$string['apply:vatnumber'] = 'VAT number';
$string['apply:vatnumber_help'] = 'Possible VAT Registration number for the organisation';
$string['apply:zipcode'] = 'Zipcode';
$string['apply:zipcode_help'] = 'Zip code of the organisation';
$string['assignrole'] = 'Assign role';
$string['button:cppo:update'] = 'Update payment methods';
$string['button:pay'] = 'Pay';
$string['checkcode'] = 'Check coupon code';
$string['classicpay:config'] = 'Configure classicpay';
$string['classicpay:createcoupon'] = 'Create coupons';
$string['classicpay:deletecoupon'] = 'Delete coupons';
$string['classicpay:editcoupon'] = 'Edit coupons';
$string['classicpay:manage'] = 'Manage classicpay';
$string['classicpay:plus:description'] = '<div class="enrol-classicpay-info">When requesting a Classicpay Plus account, it effectively means you\'re applying to create / request invoices.<br/>
This does bring a few extra costs, but it has the advantage both you and the enduser will automatically receive an invoice from our service when a course has been purchased.<br/>
By enabling Classicpay Plus you automatically agree with us billing you 10 cent, on top of the transactions costs, per transaction.<br/>
These will periodically be billed to you by us. You will receive an invoice for the number of generated invoices.<br/>
The first date of generating an invoice is leading. It isn\'t necessarily the case the number of transactions within a certain period is the same as the number of billed generated invoices.</div>';
$string['classicpay:plus:status:error'] = 'Error while checking classicpay plus account: {$a}';
$string['classicpay:plus:status:invalid'] = 'You do not have a classicpay plus account';
$string['classicpay:plus:status:valid'] = 'You have a classicpay plus account';
$string['classicpay:unenrol'] = 'Unenrol users';
$string['classicpay:unenrolself'] = 'Unenrol self';
$string['cost'] = 'Enrol cost';
$string['coupon:delete'] = 'Delete Coupon';
$string['coupon:delete:warn'] = '<p>You are about to remove a coupon with the following details.</p>
<p>Course: <i>{$a->course}</i><br/>Couponcode: <i>{$a->code}</i><br/>Validity: <i>{$a->validfrom} - {$a->validto}</i></p>
<p>Are you sure you want to do this?</p>';
$string['coupon:deleted'] = 'Coupon successfully deleted';
$string['coupon:details'] = 'Coupon details';
$string['coupon:edit'] = 'Edit existing coupon';
$string['coupon:expired'] = 'Coupon code has expired';
$string['coupon:invalid'] = 'Invalid coupon code';
$string['coupon:invoice'] = 'Re-request invoice';
$string['coupon:new'] = 'Add a new coupon';
$string['coupon:newprice'] = 'Discount: {$a->percentage}<br/>Discount: {$a->currency} {$a->discount}<br/>New price: <b>{$a->currency} {$a->newprice}</b>';
$string['coupon:saved'] = 'Coupon successfully inserted';
$string['coupon:status:active'] = 'ACTIVE';
$string['coupon:status:expired'] = 'EXPIRED';
$string['coupon:status:impending'] = 'IMPENDING';
$string['coupon:status:maxused'] = 'MAXUSED';
$string['coupon:updated'] = 'Coupon data successfully updated';
$string['couponcode'] = 'Couponcode';
$string['couponcodeexists'] = 'Coupon code already exists';
$string['couponcodemissing'] = 'Couponcode must be set';
$string['coupons:backtooverview'] = 'Back to coupon list';
$string['coupontype'] = 'Type';
$string['coupontype:percentage'] = 'Percentage';
$string['coupontype:value'] = 'Value';
$string['cp:apply'] = 'Merchant Application';
$string['cp:coupons'] = 'Manage coupons';
$string['cp:legal'] = 'Liability information';
$string['cp:paynlconnection'] = 'Classicpay Service Info';
$string['cp:subscriptions'] = 'Enrolments';
$string['cp:transactions'] = 'Transactions';
$string['cppapply:disable'] = 'Disable Classicpay Plus';
$string['cppapply:enable'] = 'Enable Classicpay Plus';
$string['cppapply:header'] = 'Classicpay Plus account status';
$string['cppoapply:header:paymentprofiles'] = 'Your configured payment methods';
$string['cppoapply:paymentprofiles:setting'] = '<div class="enrol-classicpay-info"><span style="color:red">*&nbsp;</span>The following methods require you to supply extra account information.<br/>
Upon selecting these you will receive a confirmation email that should tell you we\'ll get in touch with you regarding the details.<br/></div>';
$string['cppoapply:paymentprofiles:simple'] = '<div class="enrol-classicpay-info">Freely available methods.<br/>
These methods can be switched on or off without need for extra details.</div>';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during ClassicPay enrolments';
$string['enablecoupon'] = 'Enable coupons?';
$string['enablecoupon_help'] = 'Check this option to enable entering of coupons by default in the payment screen.
You can enable or disable it on a per enrolment instance level.';
$string['enabled'] = 'Enabled';
$string['enabled_desc'] = 'Status of the gateway if this can be used to create a transaction';
$string['enrol:already'] = 'You have already been enrolled for course: {$a->fullname}';
$string['enrol:fail'] = 'You have not been enrolled to this course.';
$string['enrol:fail:tx'] = 'Your transaction status is: {$a->statusname}.';
$string['enrol:ok'] = 'Thanks for your purchase.<br> You have now been enrolled for course: {$a->fullname}';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['entiresite'] = 'Entire site / any course';
$string['err:getserviceprofiles'] = 'Error loading Payment options: {$a->error}';
$string['err:percentage-exceed'] = 'Discount percentage can\'t exceed 100%';
$string['err:percentage-negative'] = 'Discount percentage can\'t be negative';
$string['err:setserviceprofiles'] = 'Error updating Payment options: {$a->error}';
$string['err:value-negative'] = 'Discount can\'t be negative';
$string['event:payment:complete'] = 'Classicpay payment completed';
$string['event:payment:started'] = 'Classicpay payment started';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['expirymessageenrolledbody'] = 'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Enrolment expiry notification';
$string['expirymessageenrollerbody'] = 'Enrolment in the course \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

{$a->users}

To extend their enrolment, go to {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Enrolment expiry notification';
$string['gettokentime'] = 'Time on remote API: {$a}';
$string['invoice:requested'] = 'Your request to process the invoice has succesfully been processed';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['maximum'] = 'Maximum';
$string['maxusage'] = 'Maximum usage';
$string['maxusage_help'] = 'Maximum number of times this coupon code can be used.<br/>
If 0 is entered, it means unlimited usage.';
$string['minimum'] = 'Minimum';
$string['name'] = 'Name';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['page:title:spapply'] = 'Apply for a PAYNL Merchant';
$string['paylogin'] = 'Login to PAYNL';
$string['payment:cancelled'] = 'You have cancelled your payment for course: {$a->fullname}';
$string['paynlapitoken'] = 'PAYNL API token';
$string['paynlapitoken_desc'] = 'The token is needed for communicating with the PAYNL API';
$string['paynlconn:remote:error'] = 'Error while calling remote PAY API: {$a}';
$string['paynlmerchantid'] = 'PAYNL Merchant ID';
$string['paynlmerchantid_desc'] = 'The Merchant ID is needed to identify the merchant on the PAYNL API';
$string['paynlserviceid'] = 'PAYNL Service ID';
$string['paynlserviceid_desc'] = 'The Service ID is needed to identify the service on the PAYNL API';
$string['paynlsettings'] = 'PAYNL Account merchant settings';
$string['paynlsettings_apply'] = '<a href="">Apply for PAYNL</a>';
$string['paynlsettings_desc'] = 'Below you will need to set the PAYNL merchant settings that wil enable you to initialize and utilize payments.';
$string['percentage'] = 'Percentage';
$string['percentagemissing'] = 'Percentage must be given';
$string['pluginname'] = 'ClassicPay';
$string['pluginname_desc'] = 'This plugin allows you to purchase a course with the PAYNL gateway';
$string['privacy:metadata:enrol_classicpay'] = 'The classicpay enrolment plugin transmits user data from Moodle to the PayNL website.';
$string['privacy:metadata:enrol_classicpay:cost'] = 'Final cost of this order';
$string['privacy:metadata:enrol_classicpay:courseid'] = 'Course ID';
$string['privacy:metadata:enrol_classicpay:discount'] = 'Calculated discount';
$string['privacy:metadata:enrol_classicpay:gateway'] = 'Gateway used';
$string['privacy:metadata:enrol_classicpay:gateway_transaction_id'] = 'Transaction ID for PayNL';
$string['privacy:metadata:enrol_classicpay:hasinvoice'] = 'Whether or not this order has an invoice';
$string['privacy:metadata:enrol_classicpay:instanceid'] = 'Enrolment instance ID';
$string['privacy:metadata:enrol_classicpay:orderid'] = 'Reference to order ID';
$string['privacy:metadata:enrol_classicpay:percentage'] = 'Calculated discount percentage';
$string['privacy:metadata:enrol_classicpay:rawcost'] = 'Raw cost of this order';
$string['privacy:metadata:enrol_classicpay:status'] = 'Order status code';
$string['privacy:metadata:enrol_classicpay:statusname'] = 'Order status name';
$string['privacy:metadata:enrol_classicpay:timecreated'] = 'Time the order record was created';
$string['privacy:metadata:enrol_classicpay:timemodified'] = 'Time the order record was last updated';
$string['privacy:metadata:enrol_classicpay:userid'] = 'User ID';
$string['promo'] = 'ClassicPay enrolment plugin for Moodle';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['purchase'] = 'Purchase course';
$string['registrationcancelled'] = 'Registration cancelled. You are now being redirected to the homepage.';
$string['setserviceprofiles:success'] = 'Successfully updated Payment options:<br/>{$a}';
$string['settings'] = 'Settings';
$string['status'] = 'Allow ClassicPay enrolments';
$string['status_desc'] = 'Allow users to use ClassicPay to enrol into a course by default.';
$string['task:process_pending_orders'] = 'Synchronises pending payment order status in case we missed exchange requests';
$string['task:request_invoices'] = 'Synchronise invoice request queue';
$string['task:sync_cpplus'] = 'Synchronise whether or not we have a classicpay PLUS account';
$string['th:action'] = 'Action(s)';
$string['th:code'] = 'Code';
$string['th:cost'] = 'Cost';
$string['th:courseid'] = 'Course';
$string['th:discount'] = 'Discount';
$string['th:maxusage'] = 'Max usage';
$string['th:numused'] = '#Used';
$string['th:paymentcreated'] = 'Transaction started';
$string['th:paymentmodified'] = 'Last updated';
$string['th:percentage'] = 'Percentage';
$string['th:rawcost'] = 'Course Price';
$string['th:status'] = 'Status';
$string['th:txid'] = 'Transaction ID';
$string['th:type'] = 'Type';
$string['th:user'] = 'User';
$string['th:validfrom'] = 'Valid from';
$string['th:validto'] = 'Valid to';
$string['th:value'] = 'Value';
$string['title:cancelpage'] = 'Payment cancelled';
$string['title:couponedit'] = 'ClassicPay - Edit coupon';
$string['title:couponmanager'] = 'Coupon management';
$string['title:couponmanager:delete'] = 'Coupon manager - removal';
$string['title:couponmanager:details'] = 'Coupon manager details';
$string['title:couponmanager:edit'] = 'Coupon manager - edit';
$string['title:enrolments'] = 'Classicpay - enrolments';
$string['title:legal'] = 'Classicpay - liability information';
$string['title:returnpage'] = 'Payment Status';
$string['title:service'] = 'Classicpay - account information';
$string['title:transactions'] = 'ClassicPay - Transactions';
$string['validfrom'] = 'Valid from';
$string['validfromhigherthanvalidto'] = 'Validity from data is past validity to date';
$string['validfrommissing'] = 'Start date of validity must be set';
$string['validto'] = 'Valid to';
$string['validtomissing'] = 'End date for validity must be set';
$string['value'] = 'Value';
$string['valuemissing'] = 'A value must be given';
$string['vat'] = 'VAT';
$string['vat_help'] = 'VAT percentage of course cost (note: course cost is including VAT).';
$string['warn:servicepage'] = '<div class="enrol-classicpay-warn">Every action you perform on this page will be performed on our classicpay service.<br/>
Be careful to read and fully understand the comments before proceeding.</div>';
