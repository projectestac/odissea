<?php
/**
 * This class is used to send mail using common Web Service mail delivery of the Departament d'Ensenyament.
 *
 * REQUIREMENTS:
 * - have enabled the PHP SOAP library
 *
 * WORKDIR:
 * new mailsender -> add_message -> send_mail
 *
 * Basic example of using this class:
 *
 * include ('mailsender.class.php');
 * $sender  = new mailsender('XTECBLOCS', 'xtecblocs-noreply@xtec.cat', 'educacio', 'INT', true);
 * $to      = array('manuel.martinez.ortega@atsistemas.com');
 * $subject = 'Tester for the mail sender';
 * $body    = 'Testing the mailserder.class.php v.1';
 * $sender->add_message( $to, $cc, $bcc, $subject, $body);
 * $sender->send_mail();
 *
 * @author IECISA @mmartinez
 * @version 1.2
 */

class mailsender {

    /**
     * Mail adress of the allowed senders
     */
    private $allowed_senders = array(
        'xtec'     =>'correus_aplicacions.educacio@xtec.cat',
        'gencat'   =>'correus_aplicacions.educacio@gencat.cat',
        'educacio' =>'apligest@correueducacio.xtec.cat'
    );

    /**
     * Url of the allowed environments
     */
    public static $allowed_environments = array (
        'DES' => 'http://xtec-int.educacio.intranet:8080/event/ServeisComuns/intern/EnviaCorreu/a1/EnviaCorreu',
        //'INT' => 'http://xtec-wc.educacio.intranet:8080/esb/slide/ESB_Projects/ESB-EnviaCorreu_ESB-enviaCorreu/INT/ESB-Correu.wsdl',
        'INT' => 'http://xtec-int.educacio.intranet:8080/event/ServeisComuns/intern/EnviaCorreu/a1/EnviaCorreu',
        'ACC' => 'http://acc.xtec.cat:8080/event/ServeisComuns/intern/EnviaCorreu/a1/EnviaCorreu',
        'PRO' => 'http://aplitic.xtec.cat:8080/event/ServeisComuns/intern/EnviaCorreu/a1/EnviaCorreu',
        'FRM' => 'http://aplitic.xtec.cat:8080/event/ServeisComuns/intern/EnviaCorreu/a1/EnviaCorreu'
    );

    /**
     *  Other variables used
     */
    private $idApp;
    private $replyAddress;
    private $sender;
    private $wsurl;
    private $environment;
    private $messages;

    // Logger variables
    private $logger;

    // Soap Connection variables
    private $soap_client = false;
    private $proxyhost = false;
    private $proxyport = 80;
    private $proxyuser = false;
    private $proxypassword = false;



    /**
     * Class constructor
     *
     * @param int    $idApp        -> code of the application that want to send mails
     * @param string $replyAddress -> email address where destinataries can answer to
     * @param string $sender       -> code of the desired sender
     * @param string $enviroment   -> code of the desired enviroment
     * @param bool   $log          -> set if the log are enable or disable
     * @param bool   $logdebug     -> set if a full log is wanted or just a resume log
     * @param string $logpath      -> set the full path where the log will be stored
     */
    function __construct($idApp, $replyAddress = '', $sender = 'educacio', $environment = 'PRO', $log = false, $logdebug = false, $logpath = '', $proxyoptions = false) {
        $this->logger = ($log)? $this->get_logger($logdebug, $logpath) : false;
        $this->messages = array();

        if (!$this->set_idapp($idApp)) {
            throw new Exception('Mailsender: the idApp parameter is mandatory');
        }

        if (!$this->set_replyAddress($replyAddress)) {
            throw new Exception('Mailsender: "'.$replyAddress.'" is not a valid replyaddress');
        }

        if (!$this->set_sender($sender)) {
            throw new Exception('Mailsender: "'.$sender.'" is not a valid sender');
        }

        if (!$this->set_environment($environment)) {
            throw new Exception('Mailsender: "'.$environment.'" is not a valid environment');
        }

        if (is_array($proxyoptions)) {
            $this->set_proxy($proxyoptions);
        }

        try {
            if (!$this->init_soap()) {
                throw new Exception('Mailsender init_soap: Cannot load soap, service not avalaible or invalid wsdl');
            }
        } catch (Exception $e) {
            $this->add_log('get_soapclient: '.$e->getMessage(), 'ERROR');
            throw $e;
        }

        try {
            $this->test_availability();
        } catch (Exception $e) {
            throw new Exception('Mailsender: Test availability failed with message "'. $e->getMessage().'"');
        }

        $this->add_log('Class loaded successfull', 'DEBUG');
    }

    private function call_function($function, $params) {
        try {
            set_time_limit(120);
            $response = $this->soap_client->__soapCall($function, array($params));
        } catch (SoapFault $e) {
            $this->add_log($function.': Error -> '.$e->faultstring, 'ERROR');
            $this->add_log($function.": Request: \n".$this->soap_client->__getLastRequest(), 'DEBUG');
            $this->add_log($function.": Response: \n".$this->soap_client->__getLastResponse(), 'DEBUG');
            throw new Exception($e->faultstring);
        }

        if (empty($response)) {
            $this->add_log($function.': Empty response', 'ERROR');
            $this->add_log($function.": Request: \n".$this->soap_client->__getLastRequest(), 'DEBUG');
            $this->add_log($function.": Response: \n".$this->soap_client->__getLastResponse(), 'DEBUG');
            throw new Exception('Empty response');
        }

        // Response OK
        if (isset($response->status) && $response->status == "OK") {
            $this->add_log($function.": Request: \n".$this->soap_client->__getLastRequest(), 'DEBUG');
            $this->add_log($function.": Response: \n".$this->soap_client->__getLastResponse(), 'DEBUG');
            return $response;
        }

        $errormessage = 'Unknown';
        if (isset($response->message) && !empty($response->message)) {
            $errormessage = $response->message;
        }

        $this->add_log($function.': '.$errormessage, 'ERROR');
        $this->add_log($function.": Request: \n".$this->soap_client->__getLastRequest(), 'DEBUG');
        $this->add_log($function.": Response: \n".$this->soap_client->__getLastResponse(), 'DEBUG');
        throw new Exception($errormessage);
    }

    /**
     * Check if ws is available for the setted sender and enviroment.
     *
     * @return bool -> true if test passed successfuly or false if not
     */
    private function test_availability() {

        $this->add_log('test_availability: Testing ws availability...', 'DEBUG');

        $params = new stdClass();
        $params->from = @new SoapVar($this->sender, XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");
        $this->call_function('disponibilitat', $params);
        $this->add_log('test_availability: Server avalaible', 'DEBUG');
    }

    /**
     * Send mail with al the messages loaded previously
     *
     * @return array -> resume of the messages sended
     */
    public function send_mail () {

        $this->add_log('send_mail: Sending mails...', 'DEBUG');

        // Prepare xml to be send
        if (!$messages = $this->get_messages()) {
            $this->add_log('send_mail:  No messages or malformed', 'ERROR');
            self::debugging('mailsender send_mail: No messages or malformed');
            return false;
        }

        try {
            $response = $this->call_function('enviament', $messages);
        } catch (Exception $e) {
            $this->add_log('send_mail: Send mail KO', 'ERROR');
            return false;
        }
        $this->add_log('send_mail: Send mail OK', 'DEBUG');

        // Process each message
        $return = array();
        $errors = 0;
        if (!is_array($response->respostaCorreu)) {
            $response->respostaCorreu = array($response->respostaCorreu);
        }

        foreach ($response->respostaCorreu as $respostaCorreu) {
            $responsemessage = (isset($respostaCorreu->message) && !empty($respostaCorreu->message))? $respostaCorreu->message : "" ;
            $return[] = array('id' => $respostaCorreu->id, 'status' => $respostaCorreu->status, 'message' => $responsemessage);

            if ($respostaCorreu->status == 'KO') {
                $this->add_log('send_mail: Response message '.$respostaCorreu->id.' response with KO. Reason: '.$responsemessage, 'WARNING');
                $errors ++;
                continue;
            }

            $this->add_log('send_mail: Response message '.$respostaCorreu->id.' response with OK', 'DEBUG');
        }
        $this->add_log('send_mail: Response messages resume: '.(count($return)-$errors).' OK, '.$errors.' KO, '.count($return).' Total');

        // Unset requested messages
        $this->messages = array();

        return $return;

    }

    /**
     * Add message object to mailsender
     *
     * @param object $message -> Object with the message to add
     * @return bool           -> true if all ok, false if not
     */
    public function add ($message = null) {

        if (empty($message)) {
            $this->add_log('add: message is empty', 'ERROR');
            return false;
        }

        $attach = $message->get_attach();

        return $this->add_message($message->get_to(), $message->get_cc(), $message->get_bcc(), $message->get_subject(), $message->get_bodyContent(),
            $attach[0], $attach[1], $attach[2], $attach[3], $message->get_bodyType());
    }

    /**
     * Add messages to the request xml
     *
     * @param array $to                 -> list of email address to send message to
     * @param array $cc                 -> list of email address to send message copy to
     * @param array $bcc                -> list of email address to send message hidden copy to
     * @param string $subject           -> subject of the message to be send
     * @param string $bodyContent       -> content of the message to be send
     * @param array $attachfilenames    -> list of attached files name to be send
     * @param array $attachfilepaths    -> list of attached files paths to be send
     * @param array $attachfilecontents -> list of attached binary code to be send
     * @param array $attachmimetypes    -> list of attached mime type files to be send to
     * @param string $bodyType          -> content type of the body (text/plain or text/html)
     * @return bool                     -> true if added was successfull or false if not
     */
    public function add_message($to = array(), $cc = array(), $bcc = array(), $subject = '', $bodyContent = '', $attachfilenames = array(), $attachfilepaths = array(), $attachfilecontents = array(), $attachmimetypes = array(), $bodyType = 'text/plain') {

        $cntmsg = count($this->messages) + 1;

        // Check if there are destinataris
        $parameters = array('to', 'cc', 'bcc');
        $errorcnt = 0;
        $errorstr = '';
        foreach ($parameters as $parameter) {
            if (empty(${$parameter})) {
                $errorcnt++;
            }
        }
        if ($errorcnt == count($parameters)) {
            $errorstr .= 'Parameters $to, $cc and $bcc are empty, and there isnt any destinatary';
        }

        // Check if there are body contents
        $parameters = array('subject', 'bodyContent', 'bodyType');
        foreach ($parameters as $parameter) {
            if (empty(${$parameter})) {
                $errorstr .= (!empty($errorstr))? ', ' : '';
                $errorstr .= 'parameter $'.$parameter.' is empty';
                continue;
            }
            if ($parameter == 'bodyType' && ${$parameter} != 'text/plain' && ${$parameter} != 'text/html') {
                $errorstr .= 'parameter bodyType is incorrect, it must be "text/plain" or "text/html"';
            }
        }

        // If the are errors add message to logger and stop add messages
        if ($errorstr != '') {
            $this->add_log('add_message: '.$cntmsg.' KO, '.$errorstr, 'ERROR');
            return false;
        }

        // Set xml
        $message = '                    <correu>
                          <from>'.$this->sender.'</from>
                          <replyAddresses>
                              <address>'.$this->replyAddress.'</address>
                          </replyAddresses>
                          <destinationAddresses>';
        foreach ($to as $t) {
            $message .= '                          <destination>
                                  <address>'.$t.'</address>
                                  <type>TO</type>
                            </destination>';
        }
        foreach ($cc as $c) {
            $message .= '                      <destination>
                                           <address>'.$c.'</address>
                                           <type>CC</type>
                                         </destination>';
        }
        foreach ($bcc as $bc) {
            $message .= '                      <destination>
                                                   <address>'.$bc.'</address>
                                                   <type>BCC</type>
                                               </destination>';
        }

        // Test the charset to do conversions
        $subject = mb_convert_encoding($subject, "UTF-8", 'auto');
        $bodyContent = mb_convert_encoding($bodyContent, "UTF-8", 'auto');

        $message .= '                     </destinationAddresses>
                             <subject><![CDATA['.$subject.']]></subject>
                             <mailBody>
                                  <bodyType>'.$bodyType.'</bodyType>
                                  <bodyContent><![CDATA['.$bodyContent.']]></bodyContent>
                             </mailBody>';

        if (!empty($attachfilenames) && (!empty($attachfilepaths) || (!empty($attachfilecontents) && !empty($attachmimetypes)))) {
            $cnt = 0;
            $message .= "\n".'        <attachments>';
            foreach ($attachfilenames as $attachfilename) {
                if (empty($attachfilename) || (empty($attachfilepaths[$cnt]) && empty($attachfilecontents[$cnt]) && empty($attachmimetypes[$cnt]))){
                    $cnt++;
                    continue;
                }

                $message .= "\n".'<attachment>'."\n";
                if (!empty($attachfilepaths[$cnt])) {
                    //file is posted in a path of the server

                    //check that file exits
                    if (!is_file($attachfilepaths[$cnt])) {
                        $cnt++;
                        $message = substr($message, 0, strlen($message)-14);
                        $this->add_log('Add attachfile '.$cnt.' to message '.$cntmsg.' KO, attachfilepath is not a valid path. Cancel add to messages', 'ERROR');
                        return false;
                    }
                    $message .= '<fileName>'.$attachfilename.'</fileName>
                        <filePath>'.$attachfilepaths[$cnt].'</filePath>';
                }else if (!empty($attachfilecontents[$cnt])) {
                    //file is in base64 bin mode
                    $message .= '
                        <fileName><![CDATA['.$attachfilename.']]></fileName>
                        <attachmentContent>';
                    if (is_file($attachfilecontents[$cnt])) {
                        // Get file type and set it to $attachmimetypes[$cnt]
                        $attachmimetypes[$cnt] = $this->get_mime_type($attachfilecontents[$cnt]);
                        $attachfilecontents[$cnt] = base64_encode(fread(fopen($attachfilecontents[$cnt], 'r'), filesize($attachfilecontents[$cnt])));

                    } else if (empty($attachmimetypes[$cnt])) {
                        $this->add_log('Add message '.$cntmsg.' KO, attachmimetypes not found for attach '.($cnt+1).'. Cancell add messages.', 'ERROR');
                        return false;
                    }
                    $message .= '        <fileContent>'.$attachfilecontents[$cnt].'</fileContent>
                            <mimeType>'.$attachmimetypes[$cnt].'</mimeType>
                        </attachmentContent>';
                } else {
                    $message = substr($message, 0, strlen($message)-14);
                    continue;
                }
                $message .= "\n".'</attachment>';
                $cnt++;
            }

            $message .= "\n".'</attachments>';
        }

        $message .= "\n".'</correu>';

        // Add to messages array
        $this->messages[] = $message;
        $cnt = count($this->messages);
        $this->add_log('Add message '.$cnt.' OK, message: "'."\n".'<![CDATA['.$message.']]>"', 'DEBUG');
        return true;
    }

////////////////////////////////////////////////////////
//////////          SET/GET FUNCTIONS          /////////
////////////////////////////////////////////////////////

    /**
     * Check and set idApp
     *
     * @param string $idapp -> code of the application that is been using this class
     * @return bool         -> true if all ok or false if not
     */
    private function set_idapp($idapp = '') {
        if (empty($idapp)) {
            $this->add_log('set_idapp: IdApp KO, parameter is empty', 'ERROR');
            return false;
        }

        $this->add_log('set_idapp: IdApp OK, setted to "'.$idapp.'"');

        $this->idApp = $idapp;
        return true;
    }

    /**
     * Check and set replyAddress
     *
     * @param string $replyAddres -> email address where destinataris can reply to
     * @return bool               -> true if all ok or false if not
     */
    function set_replyAddress($replyAddress = '') {

        $replyAddress = trim($replyAddress);
        $replyAddress = strtolower($replyAddress);
        $replyAddress = addslashes($replyAddress);

        if (!preg_match("/^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9]+@[a-zA-Z0-9]+[a-zA-Z0-9-]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/", $replyAddress)) {
            $this->add_log('set_replyAddress: "'.$replyAddress.'" is not a valid email address', 'ERROR');
            return false;
        }

        $this->add_log('set_replyAddress: OK Reply Address:"'.$replyAddress.'"', 'DEBUG');
        $this->replyAddress = $replyAddress;
        return true;
    }

    /**
     * Check if the sender is allowed and set it
     *
     * @param  string $sender -> code of the desired sender
     * @return string         -> true if all ok or false if not
     */
    function set_sender($sender = '') {

        if (!array_key_exists($sender, $this->allowed_senders)) {
            $this->add_log('set_sender: "'.$sender.'" is not a valid sender', 'ERROR');
            $this->sender = null;
            return false;
        }

        $this->add_log('set_sender: Sender: "'.$sender.'"', 'DEBUG');
        $this->sender = $this->allowed_senders[$sender];
        return true;
    }

    /**
     * Check if isset the desired environment, else denie any activity
     *
     * @param string $environment -> code of the desired environment
     * @return string            -> ws url of the desired environment
     */
    function set_environment($environment = '') {

        if (empty($environment)) {
            $this->add_log('set_environment: Environment cannot be empty', 'ERROR');
            $this->environment          = null;
            $this->wsurl = "";
            return false;
        }

        if (!isset(self::$allowed_environments[$environment])) {
            // Environment is already a URL
            $this->wsurl = $environment;
            $this->environment = 'REMOTE';
        } else {
            $this->environment = $environment; // Save the code!
            $this->wsurl = self::$allowed_environments[$this->environment];
        }

        $this->add_log('set_environment: Environment "'.$this->environment.'"', 'DEBUG');
        $this->add_log('set_environment: WSDLurl "'.$this->wsurl.'"', 'DEBUG');
        return true;
    }

    /**
     * Function to get messages than convert array to string
     *
     * @return string -> full XML to be send
     */
    private function get_messages() {

        // Check that messages are not empty
        if (empty($this->messages)) {
            $this->add_log('get_messages: No messages to send');
            return false;
        }

        // Convert array to string
        $messagesxml = '<idApp>'.$this->idApp.'</idApp>'.implode("", $this->messages);
        $messagesxml = mb_convert_encoding($messagesxml, "UTF-8", 'auto');

        return new SoapVar('<ns1:PeticioEnviament>'.$messagesxml.'</ns1:PeticioEnviament>',XSD_ANYXML);
    }

    /**
     * Function to take out wsdl and take out de portType that make php crash
     * @return string     -> path to the local wsdl or false if failed
     */
    private function init_soap() {

        if ($this->environment != 'REMOTE') {
            $currentfile = dirname(__FILE__).'/wsdl/wsdl-'.$this->environment.'.wsdl';
            if (is_file($currentfile)) {
                $this->add_log('init_soap: OK Local wsdl ->'.$currentfile, 'DEBUG');
                $this->get_soapclient($currentfile);
                return true;
            }
        }

        // Check if $url is empty
        if (empty($this->wsurl)) {
            $this->add_log('init_soap: wsurl is empty', 'ERROR');
            return false;
        }

        $this->add_log('init_soap: OK Remote wsdl -> '.$this->wsurl, 'DEBUG');

        @$this->get_soapclient($this->wsurl . '?wsdl');

        $this->add_log('init_soap: Soap Client WSDL loaded', 'DEBUG');
        return true;
    }

    /**
     * Set proxy configuration if needed
     * @param array $options with the next values
     *        string $host to the proxy
     *        integer $port of the proxy (optional, default 80)
     *        string $user to connect to the proxy (optional)
     *        string $password to connect to the proxy (optional)
     */
    private function set_proxy(array $options) {
        $this->proxyhost = $options['host'];

        if (isset($options['port'])) {
            $this->proxyport = $options['port'];
        }
        if (isset($options['user'])) {
            $this->proxyuser = $options['user'];
        }
        if (isset($options['password'])) {
            $this->proxypassword = $options['password'];
        }
    }


    private function get_soapclient($url) {
        $options = array('trace' => 1,
                        'connection_timeout' => 120,
                        'soap_version' => SOAP_1_1);

        if (!empty($this->proxyhost)) {
            $options['proxy_host'] = $this->proxyhost;
            $options['proxy_port'] = $this->proxyport;
            if (!empty($this->proxyuser)) {
                $options['proxy_login'] = $this->proxyuser;
                if (!empty($this->proxypassword)) {
                    $options['proxy_password'] = $this->proxypassword;
                }
            }
            $this->add_logd('mailsender get_soapclient: Proxy set '.$this->proxyhost);
        }
        $this->soap_client = @new SoapClient($url, $options);
    }

    /**
     * Method to get the mime type of a given file
     *
     * @param string $fn -> absolute path to the file
     * @return string    -> mime type of the given file
     */
    private function get_mime_type($fn) {

        static $mime_magic_data;

      #-- fallback
      $type = false;

      #-- read in first 3K of given file
      if (is_dir($fn)) {
         return("httpd/unix-directory");
      }
      elseif (is_resource($fn) || ($fn = @fopen($fn, "rb"))) {
         $bin = fread($fn, $maxlen=3072);
         fclose($fn);
      }
      elseif (!file_exists($fn)) {
         return false;
      }
      else {
         return("application/octet-stream");   // give up
      }

      #-- use PECL::fileinfo when available
      if (function_exists("finfo_buffer")) {
         if (!isset($mime_magic_data)) {
            $mime_magic_data = finfo_open(MAGIC_MIME);
         }
         $type = finfo_buffer($bin);
         return($type);
      }

      #-- read in magic data, when called for the very first time
      if (!isset($mime_content_type)) {
         if (file_exists($fn = ini_get("mime_magic.magicfile")) || file_exists($fn = "./lib/magic.mime") || file_exists($fn = "../lib/magic.mime"))
         {
            $mime_magic_data = array();

            #-- read in file
            $f = fopen($fn, "r");
            $fd = fread($f, 1<<20);
            fclose($f);
            $fd = str_replace("       ", "\t", $fd);

            #-- look at each entry
            foreach (explode("\n", $fd) as $line) {

               #-- skip empty lines
               if (!strlen($line) or ($line[0] == "#") or ($line[0] == "\n")) {
                  continue;
               }

               #-- break into four fields at tabs
               $l = preg_split("/\t+/", $line);
               @list($pos, $typestr, $magic, $ct) = $l;
#print_r($l);

               #-- ignore >continuing lines
               if ($pos[0] == ">") {
                  continue;
               }
               #-- real mime type string?
               $ct = strtok($ct, " ");
               if (!strpos($ct, "/")) {
                  continue;
               }

               #-- mask given?
               $mask = 0;
               if (strpos($typestr, "&")) {
                  $typestr = strtok($typestr, "&");
                  $mask = strtok(" ");
                  if ($mask[0] == "0") {
                     $mask = ($mask[1] == "x") ? hexdec(substr($mask, 2)) : octdec($mask);
                  }
                  else {
                     $mask = (int)$mask;
                  }
               }

               #-- strip prefixes
               if ($magic[0] == "=") {
                  $magic = substr($magic, 1);
               }

               #-- convert type
               if ($typestr == "string") {
                  $magic = stripcslashes($magic);
                  $len = strlen($magic);
                  if ($mask) {
                     continue;
                  }
               }
               #-- numeric values
               else {

                  if ((ord($magic[0]) < 48) or (ord($magic[0]) > 57)) {
#echo "\nmagicnumspec=$line\n";
#var_dump($l);
                     continue;  #-- skip specials like  >, x, <, ^, &
                  }

                  #-- convert string representation into int
                  if ((strlen($magic) >= 4) && ($magic[1] == "x")) {
                     $magic = hexdec(substr($magic, 2));
                  }
                  elseif ($magic[0]) {
                     $magic = octdec($magic);
                  }
                  else {
                     $magic = (int) $magic;
                     if (!$magic) { continue; }   // zero is not a good magic value anyhow
                  }

                  #-- different types
                  switch ($typestr) {

                     case "byte":
                        $len = 1;
                        break;

                     case "beshort":
                        $magic = ($magic >> 8) | (($magic & 0xFF) << 8);
                     case "leshort":
                     case "short":
                        $len = 2;
                        break;

                     case "belong":
                        $magic = (($magic >> 24) & 0xFF)
                               | (($magic >> 8) & 0xFF00)
                               | (($magic & 0xFF00) << 8)
                               | (($magic & 0xFF) << 24);
                     case "lelong":
                     case "long":
                        $len = 4;
                        break;

                     default:
                        // date, ldate, ledate, leldate, beldate, lebelbe...
                        continue;
                  }
               }

               #-- add to list
               $mime_magic_data[] = array($pos, $len, $mask, $magic, trim($ct));
            }
         }
//echo "mime_magic_data = "; print_r($mime_magic_data);
      }


      #-- compare against each entry from the mime magic database
      foreach ($mime_magic_data as $def) {

         #-- entries are organized as follows
         list($pos, $len, $mask, $magic, $ct) = $def;

         #-- ignored entries (we only read first 3K of file for opt. speed)
         if ($pos >= $maxlen) {
            continue;
         }

         $slice = substr($bin, $pos, $len);
         #-- integer comparison value
         if ($mask) {
            $value = hexdec(bin2hex($slice));
            if (($value & $mask) == $magic) {
               $type = $ct;
               break;
            }
         }
         #-- string comparison
         else {
            if ($slice == $magic) {
               $type = $ct;
               break;
            }
         }
      }// foreach

      #-- built-in defaults
      if (!$type) {

         #-- some form of xml
         if (strpos($bin, "<"."?xml ") !== false) {
            return("text/xml");
         }
         #-- html
         elseif ((strpos($bin, "<html>") !== false) || (strpos($bin, "<HTML>") !== false)
         || strpos($bin, "<title>") || strpos($bin, "<TITLE>")
         || (strpos($bin, "<!--") !== false) || (strpos($bin, "<!DOCTYPE HTML ") !== false)) {
            $type = "text/html";
         }
         #-- mail msg
         elseif ((strpos($bin, "\nReceived: ") !== false) || strpos($bin, "\nSubject: ")
         || strpos($bin, "\nCc: ") || strpos($bin, "\nDate: ")) {
            $type = "message/rfc822";
         }
         #-- php scripts
         elseif (strpos($bin, "<"."?php") !== false) {
            return("application/x-httpd-php");
         }
         #-- plain text, C source or so
         elseif (strpos($bin, "function ") || strpos($bin, " and ")
         || strpos($bin, " the ") || strpos($bin, "The ")
         || (strpos($bin, "/*") !== false) || strpos($bin, "#include ")) {
            return("text/plain");
         }

         #-- final fallback
         else {
            $type = "application/octet-stream";
         }
      }



      #-- done
      return $type;
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

    /**
     * Shows a message when php debug is in the highest error_reporting
     */
    private static function debugging($message) {
        $debugdisplay = ini_get('display_errors');

        if (($debugdisplay == '1' || strtolower($debugdisplay) == 'on') && (error_reporting() >= E_ALL | E_STRICT)) {
            if (defined('CLI_SCRIPT') && CLI_SCRIPT) {
                echo "++ $message ++\n";
            } else {
                echo '<div class="notifytiny debuggingmessage" data-rel="debugging">' , $message , '</div>';
            }
        }
    }

    private function add_log ($str, $type = 'INFO*') {
        if ($this->logger) {
            $this->logger->add('mailsender: '.$str, $type);
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