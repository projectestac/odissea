<?php

class com_wiris_quizzes_impl_CalcDocumentTools {
	public function __construct($calcDocument) {
		if(!php_Boot::$skip_constructor) {
		if($calcDocument !== null) {
			$this->calcDocument = com_wiris_util_xml_WXmlUtils::parseXML($calcDocument);
			$this->stringCalcDocument = $calcDocument;
		}
	}}
	public function getPropertiesElement() {
		$it = $this->getCalcDocumentElement()->elements();
		while($it->hasNext()) {
			$elem = $it->next();
			if($elem->getNodeName() === "properties") {
				return $elem;
			}
			unset($elem);
		}
		return null;
	}
	public function getCalcDocumentElement() {
		if($this->calcDocument->nodeType == Xml::$Document) {
			$this->calcDocument = $this->calcDocument->firstElement();
			return $this->getCalcDocumentElement();
		}
		if($this->calcDocument->nodeType != Xml::$Element || !($this->calcDocument->getNodeName() === "wiriscalc")) {
			throw new HException("This is not a well-formed Calc document!");
		}
		return $this->calcDocument;
	}
	public function getOption($name) {
		$props = $this->getPropertiesElement();
		if($props === null) {
			return null;
		}
		$it = $props->elements();
		while($it->hasNext()) {
			$prop = $it->next();
			if($name === com_wiris_util_xml_WXmlUtils::getAttribute($prop, "name")) {
				return com_wiris_util_xml_WXmlUtils::getInnerText($prop);
			}
			unset($prop);
		}
		return null;
	}
	public function removeOption($name) {
		$props = $this->getPropertiesElement();
		if($props === null) {
			return $this->stringCalcDocument;
		}
		$it = $props->elements();
		while($it->hasNext()) {
			$prop = $it->next();
			if($name === com_wiris_util_xml_WXmlUtils::getAttribute($prop, "name")) {
				$props->removeChild($prop);
				$this->stringCalcDocument = com_wiris_util_xml_WXmlUtils::serializeXML($this->calcDocument);
				return $this->stringCalcDocument;
			}
			unset($prop);
		}
		return $this->stringCalcDocument;
	}
	public function setOption($name, $value) {
		$props = $this->getPropertiesElement();
		if($props === null) {
			$documentElement = $this->getCalcDocumentElement();
			$props = Xml::createElement("properties");
			$documentElement->addChild($props);
		}
		$it = $props->elements();
		while($it->hasNext()) {
			$prop = $it->next();
			if($name === com_wiris_util_xml_WXmlUtils::getAttribute($prop, "name")) {
				if($value === com_wiris_util_xml_WXmlUtils::getInnerText($prop)) {
					return $this->stringCalcDocument;
				}
				$prop->removeChild($prop->firstChild());
				$prop->addChild(Xml::createPCData($value));
				$this->stringCalcDocument = com_wiris_util_xml_WXmlUtils::serializeXML($this->calcDocument);
				return $this->stringCalcDocument;
			}
			unset($prop);
		}
		$prop2 = Xml::createElement("property");
		com_wiris_util_xml_WXmlUtils::setAttribute($prop2, "name", $name);
		$props->addChild($prop2);
		$prop2->addChild(Xml::createPCData($value));
		$this->stringCalcDocument = com_wiris_util_xml_WXmlUtils::serializeXML($this->calcDocument);
		return $this->stringCalcDocument;
	}
	public function getVersion() {
		return com_wiris_util_xml_WXmlUtils::getAttribute($this->getCalcDocumentElement(), "version");
	}
	public function hasQuizzesQuestionOptions() {
		return $this->calcDocument !== null && com_wiris_util_type_StringUtils::compareVersions($this->getVersion(), "3.2") >= 0 && $this->getOption(com_wiris_quizzes_impl_CalcDocumentTools::$QUIZZES_QUESTION_OPTIONS) !== null && $this->getOption(com_wiris_quizzes_impl_CalcDocumentTools::$QUIZZES_QUESTION_OPTIONS) === "true";
	}
	public $stringCalcDocument;
	public $calcDocument;
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
	static $options;
	static $outputMathOptions;
	static $kernelOptions;
	static $QUIZZES_QUESTION_OPTIONS = "quizzes_question_options";
	function __toString() { return 'com.wiris.quizzes.impl.CalcDocumentTools'; }
}
com_wiris_quizzes_impl_CalcDocumentTools::$options = new _hx_array(array(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION, com_wiris_quizzes_api_QuizzesConstants::$OPTION_TIMES_OPERATOR, com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMAGINARY_UNIT, com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMPLICIT_TIMES_OPERATOR, com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT, com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR, com_wiris_quizzes_api_QuizzesConstants::$OPTION_DIGIT_GROUP_SEPARATOR));
com_wiris_quizzes_impl_CalcDocumentTools::$outputMathOptions = new _hx_array(array(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TIMES_OPERATOR, com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMAGINARY_UNIT, com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMPLICIT_TIMES_OPERATOR));
com_wiris_quizzes_impl_CalcDocumentTools::$kernelOptions = new _hx_array(array(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION, com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT, com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR, com_wiris_quizzes_api_QuizzesConstants::$OPTION_DIGIT_GROUP_SEPARATOR));
