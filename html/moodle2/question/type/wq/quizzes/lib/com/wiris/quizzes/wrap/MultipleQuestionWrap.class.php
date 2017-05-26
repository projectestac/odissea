<?php

class com_wiris_quizzes_wrap_MultipleQuestionWrap implements com_wiris_quizzes_api_MultipleQuestion{
	public function __construct($impl) {
		if(!php_Boot::$skip_constructor) {
		$this->question = $impl;
		$this->wrapper = com_wiris_system_CallWrapper::getInstance();
	}}
	public function setProperty($name, $value) {
		try {
			$this->wrapper->start();
			$this->question->setProperty($name, $value);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
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
			$r = $this->question->getProperty($name);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
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
			$r = $this->question->serialize();
			$this->wrapper->stop();
			return $r;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getAlgorithm() {
		try {
			$this->wrapper->start();
			$r = $this->question->getAlgorithm();
			$this->wrapper->stop();
			return $r;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setAlgorithm($session) {
		try {
			$this->wrapper->start();
			$this->question->setAlgorithm($session);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getCorrectAnswer($index) {
		try {
			$this->wrapper->start();
			$r = $this->question->getCorrectAnswer($index);
			$this->wrapper->stop();
			return $r;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getCorrectAnswersLength() {
		try {
			$this->wrapper->start();
			$r = $this->question->getCorrectAnswersLength();
			$this->wrapper->stop();
			return $r;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setCorrectAnswer($index, $answer) {
		try {
			$this->wrapper->start();
			$this->question->setCorrectAnswer($index, $answer);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setAnswerFieldType($type) {
		try {
			$this->wrapper->start();
			$this->question->setAnswerFieldType($type);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setOption($name, $value) {
		try {
			$this->wrapper->start();
			$this->question->setOption($name, $value);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function addAssertion($name, $correctAnswer, $studentAnswer, $parameters) {
		try {
			$this->wrapper->start();
			$this->question->addAssertion($name, $correctAnswer, $studentAnswer, $parameters);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getStudentQuestion() {
		try {
			$this->wrapper->start();
			$response = new com_wiris_quizzes_wrap_QuestionWrap($this->question->getStudentQuestion());
			$this->wrapper->stop();
			return $response;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters) {
		try {
			$this->wrapper->start();
			$this->question->addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setPropertyOfSubquestion($sub, $name, $value) {
		try {
			$this->wrapper->start();
			$this->question->setPropertyOfSubquestion($sub, $name, $value);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getPropertyOfSubquestion($sub, $name) {
		try {
			$this->wrapper->start();
			$value = $this->question->getPropertyOfSubquestion($sub, $name);
			$this->wrapper->stop();
			return $value;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function setCorrectAnswerOfSubquestion($sub, $index, $correctAnswer) {
		try {
			$this->wrapper->start();
			$this->question->setCorrectAnswerOfSubquestion($sub, $index, $correctAnswer);
			$this->wrapper->stop();
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getCorrectAnswerOfSubquestion($sub, $index) {
		try {
			$this->wrapper->start();
			$value = $this->question->getCorrectAnswerOfSubquestion($sub, $index);
			$this->wrapper->stop();
			return $value;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getCorrectAnswersLengthOfSubquestion($sub) {
		try {
			$this->wrapper->start();
			$len = $this->question->getCorrectAnswersLengthOfSubquestion($sub);
			$this->wrapper->stop();
			return $len;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public function getNumberOfSubquestions() {
		try {
			$this->wrapper->start();
			$len = $this->question->getNumberOfSubquestions();
			$this->wrapper->stop();
			return $len;
		}catch(Exception $»e) {
			$_ex_ = ($»e instanceof HException) ? $»e->e : $»e;
			$e = $_ex_;
			{
				$this->wrapper->stop();
				throw new HException($e);
			}
		}
	}
	public $wrapper;
	public $question;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->»dynamics[$m]) && is_callable($this->»dynamics[$m]))
			return call_user_func_array($this->»dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call «'.$m.'»');
	}
	function __toString() { return 'com.wiris.quizzes.wrap.MultipleQuestionWrap'; }
}
