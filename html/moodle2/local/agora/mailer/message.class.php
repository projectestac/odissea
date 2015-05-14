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
    private $alloweb_in = array ('to',
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
    function message ($bodyType = TEXTPLAIN, $log = false, $logdebug = false, $logpath = '') {
        $this->logger = ($log)? $this->get_logger($logdebug, $logpath) : false;

        // Set bodyType
        $this->set_bodyType($bodyType);

        if (in_array(true, $this->error)) {
            $this->add_log('Class loaded with errors');
        } else {
            $this->add_log('Class loaded successfull');
        }
    }

////////////////////////////////////////////////////////
//////////          SET/GET FUNCTIONS          /////////
////////////////////////////////////////////////////////

    /**
     * Set adress
     *
     * @param array/string $address -> the address of the email destinataries
     * @param string       $in      -> type of address (to, cc, bcc)
     * @return bool                 -> true if all ok or false if not
     */
    public function set_adress ($adress = null, $in = null) {

        // Check if parameter $to is empty
        if (empty($adress)) {
            $this->add_log('set_adress parameter $adress is empty', 'ERROR');
            return false;
        }

        // Check if parameter $in is empty
        if (empty($in)) {
            $this->add_log('set_adress parameter $in is empty', 'ERROR');
            return false;
        }

        // Check if parameter $in is in the alloweb list
        if (!in_array($in, $this->alloweb_in)) {
            $this->add_log('set_adress parameter $in is not alloweb', 'ERROR');
            return false;
        }

        $cnt = 0;

        // heck if is array or a string
        if (is_array($adress)) {
            // If array, store all elements
            if (count($adress)>0) {
                foreach ($adress as $t) {
                    // Sanitate
                    $t = trim($t);
                    if (strlen($t) == 0) {
                        continue;
                    }
                    // Store
                    $this->{$in}[] = $t;
                    $cnt++;
                }
            } else {
                $this->add_log('set_adress parameter $adress array is empty', 'ERROR');
            }
        } else {
            //if string, sanitate and store value
            //sanitate
            $adress = trim($adress);
            //store
            if (strlen($adress)>0){
                //store
                $this->{$in}[] = $adress;
                $cnt++;
            } else {
                $this->add_log('set_adress parameter $adress string is empty', 'ERROR');
            }
        }

        $this->add_log('set adress to property $'.$in.' OK. Added '.$cnt.' adress');
        $this->add_log('setted property $'.$in.' value is "'.serialize($adress).'"', 'DEBUG');

        return true;
    }

    /**
     * Get adress
     *
     * @param string $in -> type of address to get
     * @return array     -> array with the elements
     */
    function get_adress ($in = null) {

        //check if parameter $in is empty
        if (empty($in)){
            $this->add_log('get_adress parameter $in is empty', 'ERROR');
            return false;
        }

        //check if parameter $in is in the alloweb list
        if (!in_array($in, $this->alloweb_in)){
            $this->add_log('get_adress parameter $in is not alloweb', 'ERROR');
            return false;
        }

        $this->add_log('get adress of property $'.$in.' OK. Getted '.count($this->{$in}).' adress');
        $this->add_log('getted property $'.$in.' value is "'.serialize($this->{$in}).'"', 'DEBUG');

        return $this->{$in};
    }

    /**
     * Set $to
     *
     * @param string/array $to -> the address of the to email destinataries
     * @return bool            -> true if all ok or false if not
     */
    function set_to ($to = null) {

        return $this->set_adress($to, 'to');
    }

    /**
     * Get to
     *
     * @return array -> array with the elements
     */
    function get_to () {

        return $this->get_adress('to');
    }

    /**
     * Set $cc
     *
     * @param string/array $cc -> the address of the cc email destinataries
     * @return bool            -> true if all ok or false if not
     */
    function set_cc ($cc = null) {

        return $this->set_adress($cc, 'cc');
    }

    /**
     * Get cc
     *
     * @return array -> array with the elements
     */
    function get_cc () {

        return $this->get_adress('cc');
    }

    /**
     * Set $bcc
     *
     * @param string/array $bcc -> the address of the bcc email destinataries
     * @return bool             -> true if all ok or false if not
     */
    function set_bcc ($bcc = null) {

        return $this->set_adress($bcc, 'bcc');
    }

    /**
     * Get cc
     *
     * @return array -> array with the elements
     */
    function get_bcc () {

        return $this->get_adress('bcc');
    }

    /**
     * Set bodyType
     *
     * @param int  $bodyType -> set the body content type
     * @return bool          -> true if all ok or false if not
     */
    private function set_bodyType ($bodyType = null) {

        //Set bodyType error to false
        $this->error['bodyType'] = false;

        // Check if parameter $bodyType is passed
        if (empty($bodyType)){
            $this->add_log('set_bodyType parameter is empty', 'ERROR');
            $this->error['bodyType'] = true;
            return false;
        }

        // Check if the value passed in $bodyType is in the $allowebBodyType
        if (!in_array($bodyType, $this->allowed_bodyType)){
            $this->add_log('set_bodyType parameter is not alloweb', 'ERROR');
            $this->error['bodyType'] = true;
            return false;
        }

        //Set bodyType string
        $this->bodyType = $bodyType;

        $this->add_log('set bodyType OK');
        $this->add_log('bodyType property is "'.$this->bodyType.'"', 'DEBUG');

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
    function set_subject ($str = null) {

        // Check if parameter $str is passed
        if (empty($str)) {
            $this->add_log('set_subject parameter $str is empty', 'ERROR');
            $this->error['subject'] = true;
            return false;
        }

        //sanitate
        $str = trim($str);

        if (strlen($str) < 1) {
            $this->add_log('set_subject parameter $str is length 0', 'ERROR');
            $this->error['subject'] = true;
            return false;
        }

        //set $subject string
        $this->subject = $str;

        $this->add_log('set subject OK');
        $this->add_log('subject property is "'.$str.'"', 'DEBUG');

        return true;

    }

    /**
     * Get subject
     *
     * @return string -> the subject in string
     */
    function get_subject () {
        return $this->subject;
    }

    /**
     * Set bodyContent
     *
     * @param string $str -> bodyContent
     * @return bool       -> true if all ok or false if not
     */
    function set_bodyContent ($str = null) {

        // Check if parameter $str is passed
        if (empty($str)) {
            $this->add_log('set_bodyContent parameter $str is empty', 'ERROR');
            $this->error['bodyContent'] = true;
            return false;
        }

        //sanitate
        $str = trim($str);

        if (strlen($str) < 1) {
            $this->add_log('set_bodyContent parameter $str is length 0', 'ERROR');
            $this->error['bodyContent'] = true;
            return false;
        }

        //set $subject string
        $this->bodyContent = $str;

        $this->add_log('set bodyContent OK');
        $this->add_log('bodyContent property is "'.$str.'"', 'DEBUG');

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

        //Check if parameter $name is passed
        if (empty($name)){
            $this->add_log('set_attachByPathOnWsServer parameter $name is empty', 'ERROR');
            return false;
        }

        //Check if parameter $path is passed
        if (empty($path)){
            $this->add_log('set_attachByPathOnWsServer parameter $path is empty', 'ERROR');
            return false;
        }

        //set all attach array
        $this->attachfilenames[]    = $name;
        $this->attachfilepaths[]    = $path;
        $this->attachfilecontents[] = null;
        $this->attachmimetypes []   = null;

        $this->add_log('set_attachByPathOnWsServer OK');
        $this->add_log('attachByPathOnWsServer properties are {$name: "'.$name.'", $path: "'.$path.'"}', 'DEBUG');

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

        $this->add_log('set_attachByPathOnAppServer OK');
        $this->add_log('attachByPathOnAppServer properties are {$name: "'.$name.'", $path: "'.$path.'"}', 'DEBUG');

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

        //Check if parameter $name is passed
        if (empty($name)) {
            $this->add_log('set_attachByContent parameter $name is empty', 'ERROR');
            return false;
        }

        //Check if parameter $path is passed
        if (empty($attachbinary)) {
            $this->add_log('set_attachByContent parameter $attachbinary is empty', 'ERROR');
            return false;
        }

        //Check if parameter $path is passed
        if (empty($attachmimetype)) {
            $this->add_log('set_attachByContent parameter $attachmimetype is empty', 'ERROR');
            return false;
        }

        //set all attach array
        $this->attachfilenames[]    = $name;
        $this->attachfilepaths[]    = null;
        $this->attachfilecontents[] = $attachbinary;
        $this->attachmimetypes []   = $attachmimetype;

        $this->add_log('set_attachByPathOnAppServer OK');
        $this->add_log('attachByPathOnAppServer properties are {$name: "'.$name.'", $attachbinary: "'.$attachbinary.'", $attachmimetype: "'.$attachmimetype.'"}', 'DEBUG');

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