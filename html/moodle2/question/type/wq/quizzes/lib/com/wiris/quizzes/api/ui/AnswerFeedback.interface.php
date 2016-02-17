<?php

interface com_wiris_quizzes_api_ui_AnswerFeedback extends com_wiris_quizzes_api_ui_QuizzesComponent{
	function showFieldDecorationFeedback($visible);
	function showAssertionsFeedback($visible);
	function showCorrectAnswerFeedback($visible);
	function setEmbedded($component);
}
