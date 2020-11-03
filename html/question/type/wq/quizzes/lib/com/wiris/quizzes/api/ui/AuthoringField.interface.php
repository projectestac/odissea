<?php

interface com_wiris_quizzes_api_ui_AuthoringField extends com_wiris_quizzes_api_ui_QuizzesField{
	function showAnswerFieldPlainText($visible);
	function showAnswerFieldPopupEditor($visible);
	function showAnswerFieldInlineEditor($visible);
	function showGradingFunction($visible);
	function showAuxiliarTextInput($visible);
	function showAuxiliarCasReplaceEditor($visible);
	function showAuxiliarCas($visible);
	function showCorrectAnswer($visible);
	function showPreviewTab($visible);
	function showVariablesTab($visible);
	function showValidationTab($visible);
	function showCorrectAnswerTab($visible);
	function getFieldType();
	function setFieldType($type);
}
