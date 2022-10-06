<?php

class com_wiris_quizzes_wrap_MultipleQuestionInstanceWrap implements com_wiris_quizzes_api_MultipleQuestionInstance{
	public function __construct($instance) {
		if(!php_Boot::$skip_constructor) {
		$this->instance = $instance;
		$this->wrapper = com_wiris_system_CallWrapper::getInstance();
	}}
	public function setProperty($name, $value) {
		try {
			$this->wrapper->start();
			$this->instance->setProperty($name, $value);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getProperty($name) {
		try {
			$this->wrapper->start();
			$r = $this->instance->getProperty($name);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function isSubAnswerCorrect($sub, $answerIndex) {
		try {
			$this->wrapper->start();
			$r = $this->instance->isSubAnswerCorrect($sub, $answerIndex);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getSubAnswerGrade($sub, $correctAnswer, $studentAnswer, $question) {
		try {
			$qw = $question;
			if($qw !== null) {
				$question = $qw->question;
			}
			$this->wrapper->start();
			$r = $this->instance->getSubAnswerGrade($sub, $correctAnswer, $studentAnswer, $question);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getCompoundSubAnswerGrade($sub, $correctAnswer, $studentAnswer, $index, $question) {
		try {
			$qw = $question;
			if($qw !== null) {
				$question = $qw->question;
			}
			$this->wrapper->start();
			$r = $this->instance->getCompoundSubAnswerGrade($sub, $correctAnswer, $studentAnswer, $index, $question);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setStudentAnswerOfSubquestion($sub, $index, $answer) {
		try {
			$this->wrapper->start();
			$this->instance->setStudentAnswerOfSubquestion($sub, $index, $answer);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getStudentAnswerOfSubquestion($sub, $index) {
		try {
			$this->wrapper->start();
			$answer = $this->instance->getStudentAnswerOfSubquestion($sub, $index);
			$this->wrapper->stop();
			return $answer;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getStudentAnswersLengthOfSubquestion($sub) {
		try {
			$this->wrapper->start();
			$length = $this->instance->getStudentAnswersLengthOfSubquestion($sub);
			$this->wrapper->stop();
			return $length;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setParameter($name, $value) {
		try {
			$this->wrapper->start();
			$this->instance->setParameter($name, $value);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function areVariablesReady() {
		try {
			$this->wrapper->start();
			$r = $this->instance->areVariablesReady();
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getAssertionChecksSubQuestion($sub, $correctAnswer, $studentAnswer) {
		try {
			$this->wrapper->start();
			$r = $this->instance->getAssertionChecksSubQuestion($sub, $correctAnswer, $studentAnswer);
			$r = php_Lib::toPhpArray($r);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getAssertionChecks($correctAnswer, $studentAnswer) {
		try {
			$this->wrapper->start();
			$r = $this->instance->getAssertionChecks($correctAnswer, $studentAnswer);
			$r = php_Lib::toPhpArray($r);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getStudentAnswersLength() {
		try {
			$this->wrapper->start();
			$r = $this->instance->getStudentAnswersLength();
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getStudentAnswer($index) {
		try {
			$this->wrapper->start();
			$r = $this->instance->getStudentAnswer($index);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setStudentAnswer($index, $answer) {
		try {
			$this->wrapper->start();
			$this->instance->setStudentAnswer($index, $answer);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setAuxiliarText($text) {
		try {
			$this->wrapper->start();
			$this->instance->setAuxiliarText($text);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setCasSession($session) {
		try {
			$this->wrapper->start();
			$this->instance->setCasSession($session);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setRandomSeed($seed) {
		try {
			$this->wrapper->start();
			$this->instance->setRandomSeed($seed);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function serialize() {
		try {
			$this->wrapper->start();
			$r = $this->instance->serialize();
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getStudentQuestionInstance() {
		try {
			$this->wrapper->start();
			$response = new com_wiris_quizzes_wrap_QuestionInstanceWrap($this->instance->getStudentQuestionInstance());
			$this->wrapper->stop();
			return $response;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getCompoundAnswerGrade($correctAnswer, $studentAnswer, $index, $question) {
		try {
			$qw = $question;
			if($qw !== null) {
				$question = $qw->question;
			}
			$this->wrapper->start();
			$r = $this->instance->getCompoundAnswerGrade($correctAnswer, $studentAnswer, $index, $question);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getAnswerGrade($correctAnswer, $studentAnswer, $question) {
		try {
			$qw = $question;
			if($qw !== null) {
				$question = $qw->question;
			}
			$this->wrapper->start();
			$r = $this->instance->getAnswerGrade($correctAnswer, $studentAnswer, $question);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function expandVariablesText($html) {
		try {
			$this->wrapper->start();
			$r = $this->instance->expandVariablesText($html);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function expandVariablesMathML($html) {
		try {
			$this->wrapper->start();
			$r = $this->instance->expandVariablesMathML($html);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function expandVariables($html) {
		try {
			$this->wrapper->start();
			$r = $this->instance->expandVariables($html);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function isAnswerCorrect($answerIndex) {
		try {
			$this->wrapper->start();
			$r = $this->instance->isAnswerCorrect($answerIndex);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function updateFromStudentQuestionInstance($instance) {
		try {
			$qiw = $instance;
			if($qiw !== null) {
				$instance = $qiw->instance;
			}
			$this->wrapper->start();
			$this->instance->updateFromStudentQuestionInstance($instance);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function update($response) {
		try {
			$this->wrapper->start();
			$this->instance->update($response);
			$this->wrapper->stop();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public $wrapper;
	public $instance;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->�dynamics[$m]) && is_callable($this->�dynamics[$m]))
			return call_user_func_array($this->�dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call �'.$m.'�');
	}
	function __toString() { return 'com.wiris.quizzes.wrap.MultipleQuestionInstanceWrap'; }
}
