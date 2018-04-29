<?php

class com_wiris_quizzes_impl_QuestionInternal extends com_wiris_util_xml_SerializableImpl implements com_wiris_quizzes_api_MultipleQuestion{
	public function __construct() { if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public function addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters) {
	}
	public function setPropertyOfSubquestion($sub, $name, $value) {
	}
	public function getPropertyOfSubquestion($sub, $name) {
		return null;
	}
	public function setCorrectAnswerOfSubquestion($sub, $index, $correctAnswer) {
	}
	public function getCorrectAnswerOfSubquestion($sub, $index) {
		return null;
	}
	public function getCorrectAnswersLengthOfSubquestion($sub) {
		return 0;
	}
	public function getNumberOfSubquestions() {
		return 0;
	}
	public function getProperty($name) {
		return null;
	}
	public function setProperty($name, $value) {
	}
	public function getAlgorithm() {
		return null;
	}
	public function setAlgorithm($session) {
	}
	public function getCorrectAnswersLength() {
		return 0;
	}
	public function getCorrectAnswer($index) {
		return null;
	}
	public function setCorrectAnswer($index, $answer) {
	}
	public function setAnswerFieldType($type) {
	}
	public function setOption($name, $value) {
	}
	public function addAssertion($name, $correctAnswer, $studentAnswer, $parameters) {
	}
	public function getStudentQuestion() {
		return null;
	}
	public function hasId() {
		return false;
	}
	public function setId($id) {
	}
	public function getImpl() {
		return null;
	}
	function __toString() { return 'com.wiris.quizzes.impl.QuestionInternal'; }
}
