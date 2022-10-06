<?php

interface com_wiris_quizzes_api_QuestionInstance extends com_wiris_quizzes_api_Serializable{
	function setParameter($name, $value);
	function getProperty($name);
	function setProperty($name, $value);
	function areVariablesReady();
	function getAssertionChecks($correctAnswer, $studentAnswer);
	function getStudentAnswersLength();
	function getStudentAnswer($index);
	function setStudentAnswer($index, $answer);
	function setAuxiliarText($text);
	function setCasSession($session);
	function setRandomSeed($seed);
	function getStudentQuestionInstance();
	function getCompoundAnswerGrade($correctAnswer, $studentAnswer, $index, $question);
	function getAnswerGrade($correctAnswer, $studentAnswer, $question);
	function expandVariablesText($text);
	function expandVariablesMathML($mathml);
	function expandVariables($html);
	function isAnswerCorrect($studentAnswer);
	function updateFromStudentQuestionInstance($qi);
	function update($response);
}
