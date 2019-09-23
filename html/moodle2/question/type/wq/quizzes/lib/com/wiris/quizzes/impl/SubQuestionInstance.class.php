<?php

class com_wiris_quizzes_impl_SubQuestionInstance extends com_wiris_quizzes_impl_QuestionInstanceImpl {
	public function __construct($index) {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
		$this->userData = new com_wiris_quizzes_impl_UserData();
		$this->subNumber = $index;
	}}
	public function newInstance() {
		return new com_wiris_quizzes_impl_SubQuestionInstance(0);
	}
	public function onSerialize($s) {
		$s->beginTag(com_wiris_quizzes_impl_SubQuestionInstance::$TAGNAME);
		$this->subNumber = $s->attributeInt("index", $this->subNumber, 0);
		$this->userData = $s->serializeChildName($this->userData, com_wiris_quizzes_impl_UserData::$TAGNAME);
		$this->setChecksCompoundAnswers();
		$a = $s->serializeArrayName($this->hashToChecks($this->checks), "checks");
		if($this->isCompoundAnswerChecks($a)) {
			$this->collapseCompoundAnswerChecks($a);
		}
		$this->checks = $this->checksToHash($a, null);
		$this->serializeHandConstraints();
		$this->localData = $s->serializeArrayName($this->localData, "localData");
		$s->endTag();
	}
	public function pushSubinstance($step) {
	}
	public function addSubinstance($index) {
	}
	public function setParameter($name, $value) {
	}
	public function setAuxiliarText($text) {
	}
	public function setCasSession($session) {
	}
	public function setRandomSeed($seed) {
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
	static $TAGNAME = "subinstance";
	function __toString() { return 'com.wiris.quizzes.impl.SubQuestionInstance'; }
}
