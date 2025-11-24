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
 * Strings for component 'quizaccess_offlinemode', language 'en', version '4.5'.
 *
 * @package     quizaccess_offlinemode
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Answer changed';
$string['backtothequiz'] = 'Back to the quiz';
$string['changesmadereallygoaway'] = 'Your responses have not been saved to the server. Are you sure you want to leave this attempt.';
$string['dataprocessedsuccessfully'] = 'Data processed successfully ({$a}).';
$string['description'] = 'This quiz uses fault-tolerant mode. Adminstrators can {$a}';
$string['descriptionlink'] = 'upload exported responses';
$string['finishattemptsafterupload'] = 'Submit and finish each attempt after processing the upload';
$string['lastsaved'] = 'Last saved: {$a}';
$string['lastsavedtotheserver'] = 'Last saved to the server: {$a}';
$string['lastsavedtothiscomputer'] = 'Last saved to this computer: {$a}';
$string['loggedinaswronguser'] = 'You have logged in with an account other than the one that was attempting the quiz. That will not work. Click Continue to login again as the right user.';
$string['logindialogueheader'] = 'You may need to log in again';
$string['loginokagain'] = 'Your login is now OK.';
$string['offlinemode:uploadresponses'] = 'Upload responses';
$string['offlinemodeenabled'] = 'Experimental fault-tolerant mode';
$string['offlinemodeenabled_desc'] = 'Whether the fault-tolerant mode should be enabled by default for new quizzes, and also whether it should be an advanced settings (behind \'Show more ...\') on the quiz settings form.';
$string['offlinemodeenabled_help'] = 'The goal of this experimental option is to let students attempt a quiz even if the network connection is not reliable. For example on a train going through tunnels, or just with bad wi-fi. The students can move between pages of the quiz even if the server is not avaialble, and all their answers are stored locally, and sent to the server when possible.';
$string['pluginname'] = 'Quiz fault-tolerant mode';
$string['privacy:metadata'] = 'The Quiz fault-tolerant mode plugin does not store any personal data.';
$string['privatekey'] = 'Encryption private key';
$string['privatekey_desc'] = 'You can use public-key cryptography to protect the downloaded responses. To do that, you need to supply a private/public key pair. You can generate a private key using <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> at the command-line (if you have OpenSSL installed from https://www.openssl.org/). Then paste the content of the rsa_1024_priv.pem file into this box.';
$string['processingcomplete'] = 'Processing complete';
$string['processingfile'] = 'Processing file {$a}';
$string['publickey'] = 'Encryption public key';
$string['publickey_desc'] = 'This must correspond to the private key. You can generate it from the private key using <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> then past the contents of rsa_1024_pub.pem here.';
$string['responsefiles'] = 'Response files';
$string['responsefiles_help'] = 'You can upload one or more response files downloaded using the \'Emergency response export\' link during a quiz attempt.';
$string['reviewthisattempt'] = 'Review this attempt';
$string['savefailed'] = 'Save failed. You can continue working. From time to time you should {$a}.';
$string['savetheresponses'] = 'save the responses';
$string['savingdots'] = 'Saving ...';
$string['savingtryagaindots'] = 'Trying again to save to the server ...';
$string['submitfailed'] = 'Submit failed';
$string['submitfaileddownloadmessage'] = '... or you can {$a} as a file which can be processed later.';
$string['submitfailedmessage'] = 'Your responses could not be submitted. You can either try again ...';
$string['submitting'] = 'Submitting ...';
$string['uploadfailed'] = 'The upload failed';
$string['uploadingresponsesfor'] = 'Uploading responses for {$a}';
$string['uploadmoreresponses'] = 'Upload more responses';
$string['uploadresponses'] = 'Upload responses';
$string['uploadresponsesfor'] = 'Upload responses for {$a}';
