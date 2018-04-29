<?php

class com_wiris_quizzes_wrap_MultipleQuestionWrap extends com_wiris_quizzes_wrap_QuestionWrap implements com_wiris_quizzes_api_MultipleQuestion{
	public function __construct($impl) {
		if(!php_Boot::$skip_constructor) {
		parent::__construct($impl);
		$this->mquestion = $impl;
		$this->wrapper = com_wiris_system_CallWrapper::getInstance();
	}}
	public function addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters) {
		try {
			$this->wrapper->start();
			$this->mquestion->addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters);
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
			$this->mquestion->setPropertyOfSubquestion($sub, $name, $value);
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
			$value = $this->mquestion->getPropertyOfSubquestion($sub, $name);
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
			$this->mquestion->setCorrectAnswerOfSubquestion($sub, $index, $correctAnswer);
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
			$value = $this->mquestion->getCorrectAnswerOfSubquestion($sub, $index);
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
			$len = $this->mquestion->getCorrectAnswersLengthOfSubquestion($sub);
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
			$len = $this->mquestion->getNumberOfSubquestions();
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
	public $mquestion;
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
