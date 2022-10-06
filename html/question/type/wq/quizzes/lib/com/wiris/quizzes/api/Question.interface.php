<?php

interface com_wiris_quizzes_api_Question extends com_wiris_quizzes_api_Serializable{
	function getProperty($name);
	function setProperty($name, $value);
	function getAlgorithm();
	function setAlgorithm($session);
	function setAnswerFieldType($type);
	function setOption($name, $value);
	function addAssertion($name, $correctAnswer, $studentAnswer, $parameters);
	function getCorrectAnswersLength();
	function getCorrectAnswer($index);
	function setCorrectAnswer($index, $answer);
	function getStudentQuestion();
}
