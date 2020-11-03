<?php

interface com_wiris_quizzes_api_MultipleQuestionInstance extends com_wiris_quizzes_api_QuestionInstance{
	function getAssertionChecksSubQuestion($sub, $correctAnswer, $studentAnswer);
	function getCompoundSubAnswerGrade($sub, $correctAnswer, $studentAnswer, $index, $question);
	function getSubAnswerGrade($sub, $correctAnswer, $studentAnswer, $question);
	function isSubAnswerCorrect($sub, $studentAnswer);
	function setStudentAnswerOfSubquestion($sub, $index, $answer);
	function getStudentAnswerOfSubquestion($sub, $index);
	function getStudentAnswersLengthOfSubquestion($sub);
}
