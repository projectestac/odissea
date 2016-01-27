<?php

/**
 * This class is used to create new mail messages
 *
 * Basic example of using this class:
 *
 *
 *
 * @author IECISA @mmartinez
 * @version 1.0
 */

define('TEXTPLAIN', 'text/plain');
define('TEXTHTML', 'text/html');
define('MAXCONTENTLENGTH', '3950');

class message {

    /**
     * Define variables to use
     */
    //Define strings
    private $subject = '';
    private $bodyContent = '';
    private $bodyType = 'text/plain';
    //Define arrays
    private $to = array();
    private $cc = array();
    private $bcc = array();
    private $attachfilenames = array();
    private $attachfilepaths = array();
    private $attachfilecontents = array();
    private $attachmimetypes = array();
    //Define arrays list
    private $allowed_bodyType = array (TEXTPLAIN,
                                       TEXTHTML);
    private $allowed_in = array ('to',
                                 'cc',
                                 'bcc');
    private $error = array('bodyType' => false,
                           'subject' => false);

    // Logger variables
    private $logger;

    /**
     * Class constructor
     *
     * @param int    $bodyType -> set the body content type (default: TEXTPLAIN, TEXTHTML, other options are discarded)
     * @param bool   $log      ->
     * @param bool   $logdebug ->
     * @param string $logpath  ->
     */
    function message ($bodytype = TEXTPLAIN, $log = false, $logdebug = false, $logpath = '') {
        $this->logger = ($log)? $this->get_logger($logdebug, $logpath) : false;

        $this->set_bodyType($bodytype);

        if (in_array(true, $this->error)) {
            $this->add_log('Class loaded with errors');
        } else {
            //$this->add_log('Class loaded successfull', 'DEBUG');
        }
    }

////////////////////////////////////////////////////////
//////////          SET/GET FUNCTIONS          /////////
////////////////////////////////////////////////////////

    /**
     * Set address
     *
     * @param array/string $address -> the address of the email destinataries
     * @param string       $in      -> type of address (to, cc, bcc)
     * @return bool                 -> true if all ok or false if not
     */
    private function set_address ($address, $in) {

        // Check if parameter $to is empty
        if (empty($address)) {
            $this->add_log('set_address parameter $address is empty', 'WARNING');
            return false;
        }

        $cnt = 0;

        // heck if is array or a string
        if (is_array($address)) {
            // If array, store all elements
            if (count($address) > 0) {
                foreach ($address as $addr) {
                    if ($this->add_address($in, $addr)) {
                        $cnt++;
                    }
                }
            }
        } else {
            if ($this->add_address($in, $address)) {
                $cnt++;
            }
        }

        if ($cnt <= 0) {
            $this->add_log('No address has been set', 'ERROR');
            return false;
        }

        $this->add_log('set_address OK, property '.$in.' has '.$cnt.' addresses "'.serialize($address).'"', 'DEBUG');

        return true;
    }

    private function add_address($type, $email) {
        $email = trim($email);

        if (empty($email)) {
            $this->add_log('Found empty address', 'WARNING');
            return false;
        }

        if (substr($email, -8) == '.invalid') {
            $this->add_log('Found .invalid address', 'WARNING');
            return false;
        }

        $this->{$type}[] = $email;
        return true;
    }

    /**
     * Get set_address
     *
     * @param string $in -> type of address to get
     * @return array     -> array with the elements
     */
    private function get_address ($in) {

        // Check if parameter $in is empty
        if (empty($in)) {
            $this->add_log('get_address parameter $in is empty', 'ERROR');
            return false;
        }

        // Check if parameter $in is in the alloweb list
        if (!in_array($in, $this->allowed_in)) {
            $this->add_log('get_address parameter $in is not alloweb', 'ERROR');
            return false;
        }

        return $this->{$in};
    }

    /**
     * Set $to
     *
     * @param string/array $to -> the address of the to email destinataries
     * @return bool            -> true if all ok or false if not
     */
    function set_to ($to = null) {
        return $this->set_address($to, 'to');
    }

    /**
     * Get to
     *
     * @return array -> array with the elements
     */
    function get_to () {
        return $this->get_address('to');
    }

    /**
     * Set $cc
     *
     * @param string/array $cc -> the address of the cc email destinataries
     * @return bool            -> true if all ok or false if not
     */
    function set_cc ($cc = null) {
        return $this->set_address($cc, 'cc');
    }

    /**
     * Get cc
     *
     * @return array -> array with the elements
     */
    function get_cc () {
        return $this->get_address('cc');
    }

    /**
     * Set $bcc
     *
     * @param string/array $bcc -> the address of the bcc email destinataries
     * @return bool             -> true if all ok or false if not
     */
    function set_bcc ($bcc = null) {
        return $this->set_address($bcc, 'bcc');
    }

    /**
     * Get cc
     *
     * @return array -> array with the elements
     */
    function get_bcc () {
        return $this->get_address('bcc');
    }

    /**
     * Set bodyType
     *
     * @param int  $bodyType -> set the body content type
     * @return bool          -> true if all ok or false if not
     */
    private function set_bodyType ($bodytype = null) {

        // Set bodyType error to false
        $this->error['bodyType'] = false;

        // Check if parameter $bodyType is passed
        if (empty($bodytype)) {
            $this->add_log('set_bodyType parameter is empty', 'ERROR');
            $this->error['bodyType'] = true;
            return false;
        }

        // Check if the value passed in $bodyType is in the $allowebBodyType
        if (!in_array($bodytype, $this->allowed_bodyType)) {
            $this->add_log('set_bodyType parameter is not alloweb', 'ERROR');
            $this->error['bodyType'] = true;
            return false;
        }

        $this->bodyType = $bodytype;

        $this->add_log('set_bodyType OK, bodyType is "'.$this->bodyType.'"', 'DEBUG');

        return true;
    }

    /**
     * Get bodyType
     *
     * @return string -> the bodyType in string
     */
    function get_bodyType () {
        return $this->bodyType;
    }

    /**
     * Set subject
     *
     * @param string $str -> subject
     * @return bool       -> true if all ok or false if not
     */
    function set_subject($str = null) {

        $str = trim($str);
        if (empty($str)) {
            $this->add_log('set_subject parameter $str is empty', 'ERROR');
            $this->error['subject'] = true;
            return false;
        }

        $this->subject = $str;
        $this->add_log('set_subject OK, subject is "'.$str.'"', 'DEBUG');

        return true;
    }

    /**
     * Get subject
     *
     * @return string -> the subject in string
     */
    function get_subject() {
        return $this->subject;
    }

    /**
     * Set bodyContent
     *
     * @param string $str -> bodyContent
     * @return bool       -> true if all ok or false if not
     */
    function set_bodyContent ($str = null) {

        $str = trim($str);

        // Check if parameter $str is passed
        if (empty($str)) {
            $this->add_log('set_bodyContent is empty', 'ERROR');
            $this->error['bodyContent'] = true;
            return false;
        }

        $bytes = mb_strlen($str, '8bit');
        /*if ($bytes > MAXCONTENTLENGTH) {
            $this->add_log("The body is longer than ".MAXCONTENTLENGTH." bytes: $bytes", 'ERROR');
            $this->error['bodyContent'] = true;
            return false;
        }*/

        $this->bodyContent = $str;

        $this->add_log('set_bodyContent OK, bodyContent is '.$bytes.' bytes long', 'DEBUG');
        return true;
    }

    /**
     * Get bodyContent
     *
     * @return string -> the bodyContent in string
     */
    function get_bodyContent () {
        return $this->bodyContent;
    }

    /**
     * Set attach file by path on WS Server
     *
     * @param string $name -> the name of the attached file
     * @param string $path -> the absolute path to the app server where is allocated the attached file
     * @return bool        -> true if all ok or false if not
     */
    function set_attachByPathOnWsServer ($name = null, $path = null) {

        // Check if parameter $name is passed
        if (empty($name)) {
            $this->add_log('set_attachByPathOnWsServer parameter $name is empty', 'ERROR');
            return false;
        }

        // Check if parameter $path is passed
        if (empty($path)) {
            $this->add_log('set_attachByPathOnWsServer parameter $path is empty', 'ERROR');
            return false;
        }

        // Set all attach array
        $this->attachfilenames[]    = $name;
        $this->attachfilepaths[]    = $path;
        $this->attachfilecontents[] = null;
        $this->attachmimetypes []   = null;

        $this->add_log('set_attachByPathOnWsServer OK, attachByPathOnWsServer are {$name: "'.$name.'", $path: "'.$path.'"}', 'DEBUG');

        return true;
    }

    /**
     * Set attach file by path on the application server
     *
     * @param string $name -> the name of the attached file
     * @param string $path -> the absolute path to the app server where is allocated the attached file
     * @return bool        -> true if all ok or false if not
     */
    function set_attachByPathOnAppServer ($name = null, $path = null) {

        //Check if parameter $name is passed
        if (empty($name)) {
            $this->add_log('set_attachByPathOnAppServer parameter $name is empty', 'ERROR');
            return false;
        }

        //Check if parameter $path is passed
        if (empty($path)) {
            $this->add_log('set_attachByPathOnAppServer parameter $path is empty', 'ERROR');
            return false;
        }

        //set all attach array
        $this->attachfilenames[]    = $name;
        $this->attachfilepaths[]    = null;
        $this->attachfilecontents[] = $path;
        $this->attachmimetypes []   = null;

        $this->add_log('set_attachByPathOnAppServer OK, attachByPathOnAppServer are {$name: "'.$name.'", $path: "'.$path.'"}', 'DEBUG');

        return true;
    }

    /**
     * Set attach file by content
     *
     * @param string $name           -> the name of the attached file
     * @param string $attachbinary   -> the file to attach in binary mode
     * @param string $attachmimetype -> the mime.type of the file attached
     * @return bool                  -> true if all ok or false if not
     */
    function set_attachByContent ($name = null, $attachbinary = null, $attachmimetype = null) {

        // Check if parameter $name is passed
        if (empty($name)) {
            $this->add_log('set_attachByContent parameter $name is empty', 'ERROR');
            return false;
        }

        // Check if parameter $path is passed
        if (empty($attachbinary)) {
            $this->add_log('set_attachByContent parameter $attachbinary is empty', 'ERROR');
            return false;
        }

        // Check if parameter $path is passed
        if (empty($attachmimetype)) {
            $this->add_log('set_attachByContent parameter $attachmimetype is empty', 'ERROR');
            return false;
        }

        //set all attach array
        $this->attachfilenames[]    = $name;
        $this->attachfilepaths[]    = null;
        $this->attachfilecontents[] = $attachbinary;
        $this->attachmimetypes []   = $attachmimetype;

        $this->add_log('set_attachByPathOnAppServer OK, attachByPathOnAppServer are {$name: "'.$name.'", $attachbinary: "'.$attachbinary.'", $attachmimetype: "'.$attachmimetype.'"}', 'DEBUG');

        return true;
    }
    /**
     * Get attach file
     *
     * @return array -> multidimesion array with all the attached content
     */
    function get_attach() {
        return array($this->attachfilenames, $this->attachfilepaths, $this->attachfilecontents, $this->attachmimetypes);
    }

    ////////////////////////////////////////////////////////
    //////////            LOG FUNCTIONS            /////////
    ////////////////////////////////////////////////////////

    /**
     * Check if isset the logger class, else denie any log
     *
     * @param bool $debug  -> activate debug mode or not
     * @param string $path -> absolute path where file log wil be stored
     * @return bool        -> true if logger could be loaded or false if not
     */
    private function get_logger($debug = false, $path = '') {
        if (!@include_once('log4p.class.php')) {
            return false;
        }

        try {
            return log4p::instance(true, $path, $debug);
        } catch (Exception $e) {
            debugging('ERROR: Cannot initialize apligestlogger, there won\'t be any log.');
            debugging($e->getMessage());
        }
        return false;
    }

    private function add_log ($str, $type = 'INFO*') {
        if ($this->logger) {
            $this->logger->add('message: '.$str, $type);
        }
    }

    /**
     * Print de log generated by the class
     *
     * @return string -> full string with the log
     */
    public function print_log() {
        if ($this->logger) {
            $this->logger->print_log();
        }
    }
}