<?php

class com_wiris_quizzes_api_QuizzesConstants {
	public function __construct() { 
	}
	static $OPTION_RELATIVE_TOLERANCE = "relative_tolerance";
	static $OPTION_TOLERANCE = "tolerance";
	static $OPTION_PRECISION = "precision";
	static $OPTION_TIMES_OPERATOR = "times_operator";
	static $OPTION_IMAGINARY_UNIT = "imaginary_unit";
	static $OPTION_EXPONENTIAL_E = "exponential_e";
	static $OPTION_NUMBER_PI = "number_pi";
	static $OPTION_IMPLICIT_TIMES_OPERATOR = "implicit_times_operator";
	static $OPTION_FLOAT_FORMAT = "float_format";
	static $OPTION_DECIMAL_SEPARATOR = "decimal_separator";
	static $OPTION_DIGIT_GROUP_SEPARATOR = "digit_group_separator";
	static $ANSWER_FIELD_TYPE_INLINE_EDITOR = "inlineEditor";
	static $ANSWER_FIELD_TYPE_POPUP_EDITOR = "popupEditor";
	static $ANSWER_FIELD_TYPE_TEXT = "textField";
	static $META_PROPERTY_REFERER = "referer";
	static $META_PROPERTY_QUESTION = "question";
	static $META_PROPERTY_USER = "userref";
	function __toString() { return 'com.wiris.quizzes.api.QuizzesConstants'; }
}
