<?php

class com_wiris_quizzes_impl_QuizzesUIBuilderImpl implements com_wiris_quizzes_api_ui_QuizzesUIBuilder{
	public function __construct() { 
	}
	public function replaceFields($question, $instance, $element) {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
	}
	public function getMathViewer() {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
		return null;
	}
	public function newAuxiliarCasField($question, $instance, $index) {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
		return null;
	}
	public function newEmbeddedAnswersEditor($question, $instance) {
		return new com_wiris_quizzes_impl_EmbeddedAnswersEditorImpl($question, $instance);
	}
	public function newAuthoringField($question, $instance, $correctAnswer, $userAnswer) {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
		return null;
	}
	public function newAnswerField($question, $instance, $index) {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
		return null;
	}
	public function newAnswerFeedback($question, $instance, $correctAnswer, $studentAnswer) {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
		return null;
	}
	public function setLanguage($lang) {
		com_wiris_quizzes_impl_QuizzesUIBuilderImpl::throwNotImplementedInServerTechnology();
	}
	static function throwNotImplementedInServerTechnology() {
		throw new HException("Not implemented in server technology. This method should be called from client-side.");
	}
	function __toString() { return 'com.wiris.quizzes.impl.QuizzesUIBuilderImpl'; }
}
