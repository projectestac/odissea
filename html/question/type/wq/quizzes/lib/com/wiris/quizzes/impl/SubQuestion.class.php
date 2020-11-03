<?php

class com_wiris_quizzes_impl_SubQuestion extends com_wiris_quizzes_impl_QuestionImpl {
	public function __construct($index) {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
		$this->subNumber = $index;
	}}
	public function newInstance() {
		return new com_wiris_quizzes_impl_SubQuestion(0);
	}
	public function onSerialize($s) {
		$s->beginTag(com_wiris_quizzes_impl_SubQuestion::$TAGNAME);
		$this->id = $s->cacheAttribute("id", $this->id, null);
		$this->subNumber = $s->attributeInt("index", $this->subNumber, 0);
		$this->correctAnswers = $s->serializeArrayName($this->correctAnswers, "correctAnswers");
		$this->assertions = $s->serializeArrayName($this->assertions, "assertions");
		$this->localData = $s->serializeArrayName($this->localData, "localData");
		$s->endTag();
	}
	public function addSubquestion($index) {
	}
	public function getOption($name) {
		return null;
	}
	public function removeOption($name) {
	}
	public function setOption($name, $value) {
	}
	public function getAlgorithm() {
		return null;
	}
	public function setAlgorithm($session) {
	}
	public function getStepNumber() {
		return $this->subNumber;
	}
	public $subNumber;
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
	static $TAGNAME = "subquestion";
	function __toString() { return 'com.wiris.quizzes.impl.SubQuestion'; }
}
