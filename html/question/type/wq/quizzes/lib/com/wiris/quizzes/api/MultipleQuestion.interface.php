<?php

interface com_wiris_quizzes_api_MultipleQuestion extends com_wiris_quizzes_api_Question{
	function addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters);
	function setPropertyOfSubquestion($sub, $name, $value);
	function getPropertyOfSubquestion($sub, $name);
	function setCorrectAnswerOfSubquestion($sub, $index, $correctAnswer);
	function getCorrectAnswerOfSubquestion($sub, $index);
	function getCorrectAnswersLengthOfSubquestion($sub);
	function getNumberOfSubquestions();
}
