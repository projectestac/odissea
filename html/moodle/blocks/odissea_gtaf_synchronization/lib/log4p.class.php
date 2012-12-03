<?php
 /**
  * This class takes, process, save and show log during the live of the object monitored
  * 
  * 
  * @author IECISA @mmartinez
  * @version 1.0
  * 
  */

  class log4p{
  	
  	/**
  	 * Variables to use
  	 */
  	private $log = array(), $savetofile,$savetofilepath;
  	
  	/**
  	 * Class constructor
  	 * 
  	 * @param bool $savetofile -> set the functionality savetofile on or off
  	 * @param string $savetofilepath -> path and file name where the log have to be saved when $state is set to true
  	 */
  	function __construct($savetofile = false, $savetofilepath = ''){
  		$this->savetofile = $this->loadsavetofile($savetofile, $savetofilepath);
  	}
  	
  	/**
  	 * Add entry to the log
  	 * 
  	 * @param string $str  -> log entry text
   	 * @param string $type -> posible values ERROR, WARNING, INFO
  	 */
  	function add ($str, $type = 'INFO*'){
  		//alowed type values
  		$types_allowed = array('ERROR', 'WARNING', 'INFO*', 'DEBUG');
  		
  		if (!in_array($type, $types_allowed)){
  		    $type = 'UNKNOWN';	
  		}
  		
  		//add log to our variable
  		$this->log[] = date('[Y-m-d H:i:s] ').'   *'.$type.'*   '.$str;
  		
  		//save log to file if its switched on
  		if ($this->savetofile){
  			$this->addtofile($this->log[count($this->log)-1]);
  		}
  		
  		return;
  	}
  	
  	/**
  	 * Save log entry in a file
  	 * 
  	 * @param string $str       -> log entry text
  	 * @param string $delimiter -> characters used to diference one line from other
  	 */
  	private function addtofile ($str = '', $delimiter = "\n"){
  		
  		//check if parameter is not empty
  		if (empty($str)){
  			return false;
  		}
  		
  	    //save in file
  		if (!fwrite($this->filelogpointer, $str.$delimiter)){
  			$this->savetofile = false;
  			$this->add('Logger: addtofile cant write in log file. Save to file has been switch to off.', 'ERROR');
  			return false;
  		}
  		
  		return true;
  	}
  	
  	/**
  	 * Convert log array to a string using the defined delimiter
  	 * 
  	 * @param  string $delimiter -> characters used to diference one line from other
  	 * @return string            -> string with all the entries in log separated by the delimeter
  	 */
  	function get_log ($delimiter = '\n'){
  		
  		if (empty($this->log)){
  			return false;
  		}
  		
  		return implode($delimiter, $this->log);
  		
  	}
  	
  	/**
  	 * Function that put the saver on or off if savetofilepath exits and is writable
  	 * 
  	 * @param  bool   $state          -> set the function savetofile on or off
  	 * @param  string $savetofilepath -> path and file name where the log have to be saved when $state is set to true
  	 * @param  string $delimiter      -> characters used to diference one line from other
  	 * @return bool                   -> true if saver could be switched to on or false if not
  	 */
  	function loadsavetofile ($state = false, $savetofilepath = '', $delimiter = "\n"){
  		
  		//check if parameters are set to true and are correct
  		if ($state == false || $savetofilepath == ''){
  			$this->add('Logger: its off becouse the parameters to switch it on sets it', 'WARNING');
  		    return false;
  		}
  		
  		//prepare savetofilepath parameter
  		$savetofilepath = str_replace('\\', '/', $savetofilepath); 		
  		$filepatharray = explode("/", $savetofilepath);
  		
  		//get actuall path
  		$pwd = dirname(__FILE__);
  		$pwd = str_replace('\\', '/', $pwd);
  		//go one folder up
  		$pwdarray = explode ('/', $pwd);
  		$pwd = '';
  		for ($i=0;$i<count($pwdarray)-1;$i++){
  			$pwd .= $pwdarray[$i].'/';
  		}
  	
  		//check if exits log folder
  		if (!is_dir($pwd.$filepatharray[count($filepatharray)-2])){
  			if (!mkdir($pwd.$filepatharray[count($filepatharray)-2])){
  				$this->add('Logger: folder not exits and its imposible to create it', 'WARNING');
  				return false;
  			}
  		}
  		
  		//open or create log file 
  		if (!$file = fopen($pwd.$savetofilepath, "a+")){
  			$this->add('Logger: file not exits and its imposible to create it', 'WARNING');
  			return false;
  		}
  		
  		//test if its posible to save in file
  		if (!fwrite($file, $delimiter)){
  			$this->add('Logger: imposible to write in log file. Save to file has been switch to off.', 'ERROR');
  			return false;
  		}
  		
  		$this->filelogpointer = $file;
  		$this->savetofile = true;
  		$this->add('Logger: loaded correctly in '.$pwd.$savetofilepath);
  		return true;
  	}
  	
  }
?>