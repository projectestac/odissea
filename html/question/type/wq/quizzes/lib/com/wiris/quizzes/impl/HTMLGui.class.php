<?php

class com_wiris_quizzes_impl_HTMLGui {
	public function __construct($lang) {
		if(!php_Boot::$skip_constructor) {
		$this->lang = (($lang !== null) ? $lang : "en");
		$this->t = com_wiris_quizzes_impl_Translator::getInstance($this->lang);
	}}
	public function configureQuestion($q, $conf) {
		if(!($conf->tabCorrectAnswer && $conf->optOpenAnswer)) {
			$i = $q->getCorrectAnswersLength() - 1;
			while($i >= 0) {
				$q->removeCorrectAnswer($i);
				$i--;
			}
		}
		if(!$conf->optAuxiliarCas) {
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_SHOW_CAS);
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_CAS_INITIAL_SESSION);
		}
		if(!$conf->optAuxiliarCasReplaceEditor && com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_SHOW_CAS_REPLACE === $q->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_SHOW_CAS)) {
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_SHOW_CAS);
		}
		if(!$conf->optAuxiliarTextInput) {
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_SHOW_AUXILIAR_TEXT_INPUT);
		}
		if(!$conf->optGradingFunction) {
			$i = $q->getAssertionsLength() - 1;
			while($i >= 0) {
				$a = $q->getAssertion($i);
				if(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION === $a->name) {
					$q->removeAssertion($a->name, $a->getCorrectAnswer(), $a->getAnswer());
				}
				$i--;
				unset($a);
			}
		}
		if(!($conf->optOpenAnswer && $conf->optCompoundAnswer)) {
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER);
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE);
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE_DISTRIBUTION);
		}
		$type = $q->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_ANSWER_FIELD_TYPE);
		if(!$conf->optAnswerFieldInlineEditor && com_wiris_quizzes_api_ui_QuizzesUIConstants::$INLINE_EDITOR === $type || !$conf->optAnswerFieldPopupEditor && com_wiris_quizzes_api_ui_QuizzesUIConstants::$POPUP_EDITOR === $type || !$conf->optAnswerFieldPlainText && com_wiris_quizzes_api_ui_QuizzesUIConstants::$TEXT_FIELD === $type || !$conf->optAnswerFieldInlineHand && com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_HAND === $type) {
			$q->removeLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_ANSWER_FIELD_TYPE);
		}
	}
	public function filterEmbeddedAnswersHTML($html, $mode, $q, $qi) {
		if($html === null || "" === $html) {
			return "";
		}
		$regexp = new EReg("<(input|img)[^>]*(wirisauthoringfield|wirisembeddedauthoringfield|wirisanswerfield)[^>]*(/>|>[^<]*</(input|img)>)", "gm");
		$html = $regexp->replace($html, "<<wirisembeddedanswerfield>>");
		$i = 0;
		$start = 0;
		$pos = null;
		$sb = new StringBuf();
		while(($pos = _hx_index_of($html, "<<wirisembeddedanswerfield>>", $start)) !== -1) {
			$sb->add(_hx_substr($html, $start, $pos - $start));
			if($mode === com_wiris_quizzes_api_ui_QuizzesUIConstants::$AUTHORING) {
				$value = $q->getCorrectAnswer($i);
				if(com_wiris_quizzes_impl_MathContent::getMathType($value) === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML) {
					$src = com_wiris_quizzes_impl_HTMLGui::mathMLImgSrc($value, false, 1.0);
					$sb->add("<img class=\"wirisembeddedauthoringfield\" src=\"" . $src . "\" data-answer-index=\"" . _hx_string_rec($i, "") . "\" />");
					unset($src);
				} else {
					$sb->add("<input type=\"text\" class=\"wirisembeddedauthoringfield\" value=\"" . com_wiris_util_xml_WXmlUtils::htmlEscape($value) . "\" data-answer-index=\"" . _hx_string_rec($i, "") . "\" />");
				}
				unset($value);
			} else {
				if($mode === com_wiris_quizzes_api_ui_QuizzesUIConstants::$DELIVERY) {
					$sb->add("<input type=\"hidden\" class=\"wirisanswerfield wirisembedded\" value=\"\" />");
				} else {
					if($mode === com_wiris_quizzes_api_ui_QuizzesUIConstants::$REVIEW) {
						$value = $qi->getStudentAnswer($i);
						if($value === null) {
							$value = "";
						}
						$sb->add("<input type=\"hidden\" class=\"wirisanswerfield wirisembedded wirisembeddedfeedback wirisassertionsfeedback wiriscorrectfeedback\" value=\"" . com_wiris_util_xml_WXmlUtils::htmlEscape($value) . "\" />");
						unset($value);
					}
				}
			}
			$i++;
			$start = $pos + 28;
		}
		$sb->add(_hx_substr($html, $start, null));
		return $sb->b;
	}
	public function printMath($h, $math) {
		if(com_wiris_quizzes_impl_MathContent::getMathType($math) === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML) {
			$tools = new com_wiris_quizzes_impl_HTMLTools();
			if($tools->isTokensMathML($math)) {
				$h->text($tools->mathMLToText($math));
			} else {
				$h->raw($math);
			}
		} else {
			$h->text($math);
		}
	}
	public function printLocalData($h, $q, $unique, $conf) {
		$h->openDivClass(null, "wirisfieldsetwrapper");
		$h->openFieldset("wirislocaldatafieldset" . $unique, $this->t->t("inputmethod"), "wirismainfieldset");
		$langString = $this->t->t("lang");
		$h->help("wirisinputmethodhelp" . $unique, "https://docs.wiris.com/" . $langString . "/quizzes/studio#correct_answer", $this->t->t("manual"));
		$id = null;
		$inputmethod = $conf->optAnswerFieldInlineEditor || $conf->optAnswerFieldPopupEditor || $conf->optAnswerFieldPlainText;
		if($inputmethod) {
			$h->openDivClass("wirisinputfielddiv" . $unique, "wirissecondaryfieldset");
			$h->openUl("wirisinputfieldul", "wirisul");
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD . "]";
			if($conf->optAnswerFieldInlineEditor) {
				$h->openLi();
				$h->input("radio", $id . "[0]", $id, com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_EDITOR, null, null);
				$h->label($this->t->t("answerinputinlineeditor"), $id . "[0]", null);
				$h->close();
			}
			if($conf->optAnswerFieldPopupEditor) {
				$h->openLi();
				$h->input("radio", $id . "[1]", $id, com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_POPUP_EDITOR, null, null);
				$h->label($this->t->t("answerinputpopupeditor"), $id . "[1]", null);
				$h->close();
			}
			if($conf->optAnswerFieldPlainText) {
				$h->openLi();
				$h->input("radio", $id . "[2]", $id, com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_PLAIN_TEXT, null, null);
				$h->label($this->t->t("answerinputplaintext"), $id . "[2]", null);
				$h->close();
			}
			$h->close();
			$h->close();
		}
		if($conf->optOpenAnswer && $conf->optCompoundAnswer) {
			$h->openDivClass("wiriscompoundanswerdiv" . $unique, "wirissecondaryfieldset");
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER . "]";
			$h->input("checkbox", $id, "", com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_TRUE, null, null);
			$h->label($this->t->t("compoundanswer"), $id, null);
			$h->openDivClass("wiriscompoundanswergradediv" . $unique, "wiristerciaryfieldset");
			$h->openDiv("wiriscompoundanswergradeand" . $unique);
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE . "][and]";
			$h->input("radio", $id, "wiriscompoundanswergrade", com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_GRADE_AND, null, null);
			$h->label($this->t->t("allanswerscorrect"), $id, null);
			$h->close();
			$h->openDiv("wiriscompoundanswergradedistribute" . $unique);
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE . "][distribute]";
			$h->input("radio", $id, "wiriscompoundanswergrade", com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_GRADE_DISTRIBUTE, null, null);
			$h->label($this->t->t("distributegrade"), $id, null);
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE_DISTRIBUTION . "]";
			$h->input("text", $id, "", "", $this->t->t("gradedistribution"), "wirisadditionalinput");
			$h->close();
			$h->close();
			$h->close();
		}
		if($conf->optAuxiliarTextInput) {
			$h->openDivClass("wirisauxiliartextinputdiv" . $unique, "wirissecondaryfieldset");
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_SHOW_AUXILIAR_TEXT_INPUT . "]";
			$h->input("checkbox", $id, "", "true", null, null);
			$labelText = $this->t->t("showauxiliartextinput");
			$h->label($labelText, $id, null);
			$h->close();
		}
		if($conf->optAuxiliarCas) {
			$h->openDivClass("wirisauxiliarcasdiv" . $unique, "wirissecondaryfieldset");
			$id = "wirislocaldata" . $unique . "[" . com_wiris_quizzes_impl_LocalData::$KEY_SHOW_CAS . "]";
			if(!$conf->optAuxiliarCasReplaceEditor) {
				$h->input("checkbox", $id, "", com_wiris_quizzes_impl_LocalData::$VALUE_SHOW_CAS_ADD, null, null);
			}
			$useCalc = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$CALC_ENABLED);
			$labelText = ((strtolower($useCalc) === "true") ? $this->t->t("showauxiliarcalcme") : $this->t->t("showauxiliarcas"));
			$h->label($labelText, $id, null);
			if($conf->optAuxiliarCasReplaceEditor) {
				$h->text(" ");
				$h->select($id, null, new _hx_array(array(new _hx_array(array(com_wiris_quizzes_impl_LocalData::$VALUE_SHOW_CAS_FALSE, $this->t->t("no"))), new _hx_array(array(com_wiris_quizzes_impl_LocalData::$VALUE_SHOW_CAS_ADD, $this->t->t("add"))), new _hx_array(array(com_wiris_quizzes_impl_LocalData::$VALUE_SHOW_CAS_REPLACE_INPUT, $this->t->t("replaceeditor"))))));
			}
			$h->text(" ");
			$h->jsComponent("wirisinitialcontentbutton" . $unique, "JsInitialCasInput", $q->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_CAS_INITIAL_SESSION));
			$h->close();
		}
		$h->close();
		$h->close();
	}
	public function getLangFromCasSession($session) {
		$start = _hx_index_of($session, "<session", null);
		if($start === -1) {
			return null;
		}
		$end = _hx_index_of($session, ">", $start + 1);
		$start = _hx_index_of($session, "lang", $start);
		if($start === -1 || $start > $end) {
			return null;
		}
		$start = _hx_index_of($session, "\"", $start) + 1;
		return _hx_substr($session, $start, 2);
	}
	public function getPrecisionFeedback($a) {
		$feedback = null;
		$min = $a->getParam("min");
		$max = $a->getParam("max");
		if("" === $min && "" === $max) {
			$feedback = "";
		} else {
			if("" === $min && !("" === $max)) {
				$feedback = $this->t->t("check_precision_correct_feedback_max");
			} else {
				if(!("" === $min) && "" === $max) {
					$feedback = $this->t->t("check_precision_correct_feedback_min");
				} else {
					if($min === $max) {
						$feedback = $this->t->t("check_precision_correct_feedback_equal");
					} else {
						$feedback = $this->t->t("check_precision_correct_feedback");
					}
				}
			}
		}
		$feedback = str_replace("\${min}", $min, $feedback);
		$feedback = str_replace("\${max}", $max, $feedback);
		$feedback = str_replace("\${relative}", (($a->getParam("relative") === "true") ? $this->t->t("significantfigures") : $this->t->t("decimalplaces")), $feedback);
		return $feedback;
	}
	public function printAssertionFeedback($h, $c, $q) {
		$gradeClass = $this->getGradeClass($c->value);
		$typeClass = _hx_substr($c->assertion, 0, _hx_index_of($c->assertion, "_", null));
		$h->openSpan(null, $gradeClass . " " . $typeClass);
		$index = $q->getAssertionIndex($c->assertion, $c->getCorrectAnswer(), $c->getAnswer());
		$feedback = $this->t->t($c->assertion . "_correct_feedback");
		if($index !== -1) {
			$a = $q->assertions[$index];
			if($a->parameters !== null) {
				if($a->name === com_wiris_quizzes_impl_Assertion::$CHECK_PRECISION) {
					$feedback = $this->getPrecisionFeedback($a);
				} else {
					$i = null;
					{
						$_g1 = 0; $_g = $a->parameters->length;
						while($_g1 < $_g) {
							$i1 = $_g1++;
							$name = _hx_array_get($a->parameters, $i1)->name;
							$value = _hx_array_get($a->parameters, $i1)->content;
							$feedback = str_replace("\${" . $name . "}", $value, $feedback);
							unset($value,$name,$i1);
						}
					}
				}
			}
		}
		$h->text($feedback);
		$h->close();
	}
	public function showAssertionFeedback($check) {
		if($check->getAssertionName() === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_ALL) {
			return false;
		}
		if(com_wiris_quizzes_impl_Assertion::isSyntacticName($check->getAssertionName()) && $check->value === 1.0) {
			return false;
		}
		return true;
	}
	public function printAnswerAssertionsFeedback($h, $correctAnswer, $userAnswer, $q, $qi) {
		$h->openUl(null, "wiristestassertionslist");
		$checks = $qi->getMatchingChecks($correctAnswer, $userAnswer);
		$j = null;
		{
			$_g1 = 0; $_g = $checks->length;
			while($_g1 < $_g) {
				$j1 = $_g1++;
				$check = $checks[$j1];
				if($this->showAssertionFeedback($check)) {
					$h->openLi();
					$this->printAssertionFeedback($h, $check, $q);
					$h->close();
				}
				unset($j1,$check);
			}
		}
		$h->close();
	}
	public function printCorrectAnswerFeedback($h, $correctAnswer, $userAnswer, $q, $qi) {
		$grade = $qi->getAnswerGrade($correctAnswer, $userAnswer, $q);
		$h->openSpan(null, "wiriscorrectanswerfeedback");
		if(_hx_equal($grade, 1)) {
			$h->openSpan(null, "wiriscorrect");
			$h->text($this->t->t("correct"));
			$h->close();
		} else {
			if(_hx_equal($grade, 0)) {
				$h->openSpan(null, "wirisincorrect");
				$h->text($this->t->t("incorrect"));
				$h->close();
			} else {
				$h->openSpan(null, "wirispartiallycorrect");
				$h->text(_hx_string_rec(Math::round($grade * 100), "") . "% " . $this->t->t("partiallycorrect"));
				$h->close();
			}
			$h->text(" " . $this->t->t("thecorrectansweris") . " ");
			$correct = $q->getCorrectAnswer($correctAnswer);
			$correct = $qi->expandVariables($correct);
			$this->printMath($h, $correct);
			$h->text(".");
		}
		$h->close();
	}
	public function getAnswerFeedbackHtml($correctAnswer, $userAnswer, $q, $qi, $conf) {
		$h = new com_wiris_quizzes_impl_HTML();
		if($conf->showCorrectAnswerFeedback) {
			$this->printCorrectAnswerFeedback($h, $correctAnswer, $userAnswer, $q, $qi);
		}
		if($conf->showAssertionsFeedback) {
			$this->printAnswerAssertionsFeedback($h, $correctAnswer, $userAnswer, $q, $qi);
		}
		return $h->getString();
	}
	public function getWirisTestDynamic($q, $qi, $correctAnswer, $userAnswer, $unique) {
		$h = new com_wiris_quizzes_impl_HTML();
		$h->openDivClass("wiristestresult" . $unique, "wiristestresult");
		$h->openDivClass("wiristestassertions" . $unique, "wiristestassertions");
		$h->openDivClass("wiristestassertionslistwrapper" . $unique, "wiristestassertionslistwrapper");
		$h->close();
		$h->close();
		$h->close();
		$h->openDivClass("wiristestcorrectanswer" . $unique . "[" . _hx_string_rec($correctAnswer, "") . "]", "wiristestcorrectanswer");
		$h->openDivClass(null, "wirisfieldsetwrapper");
		$h->openFieldset("wiristestcorrectanswerfieldset" . $unique, $this->t->t("correctanswer"), "wirismainfieldset wiristestcorrectanswerfieldset");
		$h->open("span", new _hx_array(array(new _hx_array(array("id", "wiriscorrectanswerlabel" . $unique)), new _hx_array(array("class", "mathml wiriscorrectanswerlabel")))));
		$h->close();
		$h->input("button", "wirisfillwithcorrectbutton" . $unique, null, null, $this->t->t("fillwithcorrect"), "wirisfillwithcorrectbutton");
		$h->input("button", "wirisrefreshbutton" . $unique, null, null, $this->t->t("refresh"), "wirisrefreshbutton");
		$h->close();
		$h->close();
		$h->close();
		return $h->getString();
	}
	public function printTester($h, $q, $qi, $correctAnswer, $userAnswer, $unique) {
		if($q === null) {
			$q = new com_wiris_quizzes_impl_QuestionImpl();
		}
		if($qi === null) {
			$qi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
		}
		$hasUserAnswer = $qi->userData !== null && $qi->userData->answers !== null && $qi->userData->answers->length > $userAnswer;
		$h->openDivClass("wiristestwrapper" . $unique, "wiristestwrapper");
		$h->openDivClass("wiristestanswerwrapper" . $unique, "wiristestanswerwrapper");
		$h->jsComponent("wirisanswer" . $unique . "[" . _hx_string_rec($userAnswer, "") . "]", "JsInput", com_wiris_quizzes_impl_HTMLGui_0($this, $correctAnswer, $h, $hasUserAnswer, $q, $qi, $unique, $userAnswer));
		$h->close();
		$h->openDivClass("wiristestbuttons" . $unique, "wiristestbuttons");
		$h->input("button", "wiristestbutton" . $unique, null, $this->t->t("test"), null, "wirisbutton");
		$h->open("span", new _hx_array(array(new _hx_array(array("id", "wirisclicktesttoevaluate" . $unique)))));
		$h->text($this->t->t("clicktesttoevaluate"));
		$h->close();
		$h->close();
		$h->openDivClass("wiristestdynamic" . $unique, "wiristestdynamic");
		$h->raw($this->getWirisTestDynamic($q, $qi, $correctAnswer, $userAnswer, $unique));
		$h->close();
		$h->close();
	}
	public function printAssertionsControls($h, $q, $correctAnswer, $userAnswer, $unique, $conf) {
		$answers = "[" . _hx_string_rec($correctAnswer, "") . "][" . _hx_string_rec($userAnswer, "") . "]";
		$h->openDiv("wirisassertioncontrols" . $unique);
		$h->openDivClass(null, "wirisfieldsetwrapper");
		$h->openFieldset("wiriscomparisonfieldset" . $unique . $answers, $this->t->t("comparisonwithstudentanswer"), "wirismainfieldset wiriscomparisonfieldset");
		$langString = $this->t->t("lang");
		$h->help("wiriscomparisonhelp" . $unique, "https://docs.wiris.com/" . $langString . "/quizzes/studio#comparison_with_student_answer", $this->t->t("manual"));
		$h->openDivClass("wiristolerance" . $unique, "wiristolerance");
		$idtolPrefix = "wirisassertionparam" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_LITERAL . "," . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC . "," . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_EQUATIONS . "," . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION . "]";
		$idTolValue = $idtolPrefix . "[tolerance_value]" . $answers;
		$h->label($this->t->t("tolerance") . ":", $idTolValue, "wirisleftlabel2");
		$h->text(" ");
		$h->input("text", $idTolValue, "", null, null, "wirissmalltextfield");
		$h->text(" ");
		$idTolType = $idtolPrefix . "[tolerance_type]" . $answers;
		$toleranceTypes = new _hx_array(array(new _hx_array(array("relative_tolerance", $this->t->t("percenterror"))), new _hx_array(array("absolute_tolerance", $this->t->t("absoluteerror"))), new _hx_array(array("significant_figures", $this->t->t("significantfigures"))), new _hx_array(array("decimal_places", $this->t->t("decimalplaces")))));
		$h->select($idTolType, "", $toleranceTypes);
		$h->close();
		$h->openUl("wiriscomparison" . $unique . $answers, "wirisul");
		$i = null;
		$idassertion = null;
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_Assertion::$equivalent->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!$conf->optGradingFunction && com_wiris_quizzes_impl_Assertion::$equivalent[$i1] === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION) {
					continue;
				}
				$h->openLiClass("wiris" . com_wiris_quizzes_impl_Assertion::$equivalent[$i1]);
				$idassertion = "wirisassertion" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$equivalent[$i1] . "]" . $answers;
				$h->input("radio", $idassertion, "wirisradiocomparison" . $unique . $answers, null, null, null);
				$h->label($this->t->t(com_wiris_quizzes_impl_Assertion::$equivalent[$i1]), $idassertion, null);
				if(com_wiris_quizzes_impl_Assertion::$equivalent[$i1] === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION) {
					$h->text(" ");
					$h->input("text", "wirisassertionparam" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION . "][name]" . $answers, "", "", null, null);
					$idNotEvaluate = "wirisassertionparam" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION . "][notevaluate]" . $answers;
					$h->input("checkbox", $idNotEvaluate, null, null, null, null);
					$h->label($this->t->t("notevaluate"), $idNotEvaluate, "wirissmalllabel");
					unset($idNotEvaluate);
				}
				$h->close();
				unset($i1);
			}
		}
		$h->openLiClass("wiriscomparesets");
		$comparesetsid = "wirisassertionparam" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC . "," . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_LITERAL . "][comparesets]" . $answers;
		$h->input("checkbox", $comparesetsid, null, null, null, null);
		$h->text(" ");
		$h->label($this->t->t("comparesets"), $comparesetsid, null);
		$h->close();
		$h->openLiClass("wirisusecase");
		$usecaseid = "wirisassertionparam" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_LITERAL . "][usecase]" . $answers;
		$h->input("checkbox", $usecaseid, null, null, null, null);
		$h->text(" ");
		$h->label($this->t->t("usecase"), $usecaseid, null);
		$h->close();
		$h->openLiClass("wirisusespaces");
		$usespacesid = "wirisassertionparam" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$EQUIVALENT_LITERAL . "][usespaces]" . $answers;
		$h->input("checkbox", $usespacesid, null, null, null, null);
		$h->text(" ");
		$h->label($this->t->t("usespaces"), $usespacesid, null);
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->openDivClass(null, "wirisfieldsetwrapper");
		$h->openFieldset("wirisadditionalchecksfieldset" . $unique . $answers, $this->t->t("additionalproperties"), "wirismainfieldset wirisadditionalchecksfieldset");
		$h->help("wirisadditionalcheckshelp" . $unique, "https://docs.wiris.com/" . $langString . "/quizzes/studio#additional_properties", $this->t->t("manual"));
		$h->openDivClass("wirisstructurediv" . $unique . $answers, "wirissecondaryfieldset");
		$h->openDivClass("wirisstructuredivlegend" . $unique . $answers, "wirissecondaryfieldsetlegend");
		$h->text($this->t->t("structure") . ":");
		$h->close();
		$options = new _hx_array(array());
		$options[0] = new _hx_array(array());
		$options[0][0] = "";
		$options[0][1] = $this->t->t("none");
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_Assertion::$structure->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$options[$i1 + 1] = new _hx_array(array());
				$options[$i1 + 1][0] = com_wiris_quizzes_impl_Assertion::$structure[$i1];
				$options[$i1 + 1][1] = $this->t->t(com_wiris_quizzes_impl_Assertion::$structure[$i1]);
				unset($i1);
			}
		}
		$h->select("wirisstructureselect" . $unique . $answers, "", $options);
		$h->close();
		$h->openDivClass("wirismorediv" . $unique . $answers, "wirissecondaryfieldset");
		$h->text($this->t->t("more") . ":");
		$h->openUl("wirismore" . $unique . $answers, "wirisul");
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_Assertion::$checks->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$aname = com_wiris_quizzes_impl_Assertion::$checks[$i1];
				$h->openLi();
				$idassertion = "wirisassertion" . $unique . "[" . $aname . "]" . $answers;
				$h->input("checkbox", $idassertion, null, null, null, null);
				$h->label($this->t->t($aname), $idassertion, null);
				$parameters = com_wiris_quizzes_impl_Assertion::getParameterNames($aname);
				if($parameters !== null) {
					if($aname === com_wiris_quizzes_impl_Assertion::$CHECK_PRECISION) {
						$idparam = "wirisassertionparam" . $unique . "[" . $aname . "][" . $parameters[0] . "]" . $answers;
						$h->text(" ");
						$h->label($this->t->t("fromprecision"), $idparam, null);
						$h->text(" ");
						$h->input("text", $idparam, null, null, null, "wirisintinputbox");
						$idparam = "wirisassertionparam" . $unique . "[" . $aname . "][" . $parameters[1] . "]" . $answers;
						$h->text(" ");
						$h->label($this->t->t("toprecision"), $idparam, null);
						$h->text(" ");
						$h->input("text", $idparam, null, null, null, "wirisintinputbox");
						$idparam = "wirisassertionparam" . $unique . "[" . $aname . "][" . $parameters[2] . "]" . $answers;
						$h->text(" ");
						$h->select($idparam, null, new _hx_array(array(new _hx_array(array("true", $this->t->t("significantfigures"))), new _hx_array(array("false", $this->t->t("decimalplaces"))))));
						unset($idparam);
					} else {
						$j = null;
						{
							$_g3 = 0; $_g2 = $parameters->length;
							while($_g3 < $_g2) {
								$j1 = $_g3++;
								$h->text(" ");
								$h->input("text", "wirisassertionparam" . $unique . "[" . $aname . "][" . $parameters[$j1] . "]" . $answers, null, null, null, "wirissmalltextfield");
								unset($j1);
							}
							unset($_g3,$_g2);
						}
						unset($j);
					}
				}
				$h->close();
				unset($parameters,$i1,$aname);
			}
		}
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->close();
	}
	public function printAssertionsSummary($h, $q, $index, $unique, $conf) {
		$syntax = null;
		$equivalent = null;
		$inputMethod = null;
		$properties = new _hx_array(array());
		$showInputMethod = false;
		$showSyntax = false;
		$showComparison = false;
		$showProperties = false;
		$showAlgorithm = false;
		if(com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_HAND === $q->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD)) {
			$showInputMethod = true;
			$inputMethod = $this->t->t("answerinputinlinehand");
		}
		if($q->assertions !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $q->assertions->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$a = $q->assertions[$i1];
					if($a->isSyntactic()) {
						$text = $this->getAssertionString($a, $q, 80);
						if(!($text === $this->t->t(com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION))) {
							$syntax = $text;
							$showSyntax = true;
						}
						unset($text);
					} else {
						if($index === Std::parseInt($a->getCorrectAnswer())) {
							$text = $this->getAssertionString($a, $q, 80);
							if(StringTools::startsWith($a->name, "equivalent_")) {
								if(!($text === $this->t->t(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC))) {
									$equivalent = $text;
									$showComparison = true;
								}
							} else {
								$properties->push($text);
								$showProperties = true;
							}
							unset($text);
						}
					}
					unset($i1,$a);
				}
			}
		}
		$showAlgorithm = $q->wirisCasSession !== null && strlen($q->wirisCasSession) > 0;
		if($showSyntax || $showComparison || $showProperties || $showAlgorithm || $showInputMethod) {
			$h->openDivClass(null, "wirisfieldsetwrapper");
			$h->openFieldset("validationandvariables" . _hx_string_rec($unique, ""), $this->t->t("validationandvariables"), "wirisfieldsetvalidationandvariables");
			$langString = $this->t->t("lang");
			$h->help("wirisvalidationandvariableshelp" . _hx_string_rec($unique, ""), "https://docs.wiris.com/" . $langString . "/quizzes/question-types#short_answer", $this->t->t("manual"));
			$h->openDl("wirisassertionsummarydl" . _hx_string_rec($unique, ""), "wirisassertionsummarydl");
			if($showInputMethod) {
				$h->dt($this->t->t("inputmethod"));
				$h->dd($inputMethod);
			}
			if($showSyntax) {
				$h->dt($this->t->t("allowedinput"));
				$h->dd($syntax);
			}
			if($showComparison) {
				$h->dt($this->t->t("comparison"));
				$cmp = "";
				if($showComparison) {
					$cmp .= $equivalent;
				}
				$h->dd($cmp);
			}
			if($showProperties) {
				$h->dt($this->t->t("properties"));
				$prop = new StringBuf();
				$i = null;
				{
					$_g1 = 0; $_g = $properties->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						if($i1 > 0) {
							$prop->add(", ");
						}
						$prop->add($properties[$i1]);
						unset($i1);
					}
				}
				$h->dd($prop->b);
			}
			if($showAlgorithm) {
				$h->dt($this->t->t("variables"));
				$variables = $this->t->t("hasalgorithm");
				if(!($q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION) === $q->defaultOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION))) {
					$variables .= ", " . $this->t->t("precision") . ": " . $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION);
				}
				$h->dd($variables);
			}
			$h->close();
			$h->close();
			$h->close();
		}
	}
	public function getToleranceText($q, $tolerance, $digits, $relative) {
		if($tolerance === null) {
			$tolerance = $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE);
		}
		if($relative === null) {
			$relative = $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_RELATIVE_TOLERANCE);
		}
		if($digits === null) {
			$digits = $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE_DIGITS);
		}
		$options = "";
		if(!($digits === $q->defaultOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE_DIGITS))) {
			if($relative === "true") {
				$options = $digits . " " . $this->t->t("significantfigures");
			} else {
				$options = $digits . " " . $this->t->t("decimalplaces");
			}
		} else {
			if(!($relative === $q->defaultOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_RELATIVE_TOLERANCE)) || !($tolerance === $q->defaultOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE))) {
				if($relative === "true") {
					$options = com_wiris_system_TypeTools::floatToString(Std::parseFloat($tolerance) * 100) . $this->t->t("percenterror");
				} else {
					$options = $tolerance . " " . $this->t->t("absoluteerror");
				}
			}
		}
		return $options;
	}
	public function shortenText($text, $chars) {
		if(strlen($text) > $chars) {
			$text = _hx_substr($text, 0, $chars - 3);
			$n = strlen($text) - 1;
			$c = _hx_char_code_at($text, $n);
			while($c === 32 || $c === 44 || $c === 46) {
				$text = _hx_substr($text, 0, $n);
				$n--;
				$c = _hx_char_code_at($text, $n);
			}
			$text .= "...";
		}
		return $text;
	}
	public function getAssertionString($a, $q, $chars) {
		$text = $this->t->t($a->name);
		$tolerance = null;
		$toleranceDigits = null;
		$relativeTolerance = null;
		$sb = new StringBuf();
		$count = 0;
		if($a->parameters !== null) {
			$i = 0;
			while($i < $a->parameters->length) {
				$ap = $a->parameters[$i++];
				if($ap->name === com_wiris_quizzes_impl_Assertion::$PARAM_ORDER_MATTERS && !($ap->content === "true")) {
					if($count > 0) {
						$sb->add(", ");
					}
					$sb->add($this->t->t("comparesets"));
					$count++;
				} else {
					if($ap->name === com_wiris_quizzes_impl_Assertion::$PARAM_REPETITION_MATTERS) {
					} else {
						if($ap->name === com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE) {
							$tolerance = $ap->content;
						} else {
							if($ap->name === com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE_DIGITS) {
								$toleranceDigits = $ap->content;
							} else {
								if($ap->name === com_wiris_quizzes_api_QuizzesConstants::$OPTION_RELATIVE_TOLERANCE) {
									$relativeTolerance = $ap->content;
								} else {
									if($ap->content === "true") {
										if($count > 0) {
											$sb->add(", ");
										}
										$sb->add($this->t->t($ap->name));
										$count++;
									} else {
										if($ap->content === "false") {
										} else {
											if($ap->content === com_wiris_quizzes_impl_Assertion::getParameterDefaultValue($a->name, $ap->name)) {
											} else {
												if($ap->name === com_wiris_quizzes_impl_Assertion::$PARAM_MIN) {
													if($i < $a->parameters->length && _hx_array_get($a->parameters, $i)->name === com_wiris_quizzes_impl_Assertion::$PARAM_MAX && _hx_array_get($a->parameters, $i)->content === $ap->content) {
														$sb->add(" ");
														$sb->add($ap->content);
														$i++;
													} else {
														$sb->add(" ");
														$sb->add($this->t->t("fromprecision"));
														$sb->add(" ");
														$sb->add($ap->content);
													}
												} else {
													if($ap->name === com_wiris_quizzes_impl_Assertion::$PARAM_MAX) {
														$sb->add(" ");
														$sb->add($this->t->t("toprecision"));
														$sb->add(" ");
														$sb->add($ap->content);
													} else {
														if($count > 0) {
															$sb->add(", ");
														}
														$sb->add($this->shortenText($ap->content, intval(Math::round($chars / 3.0))));
														$count++;
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
				unset($ap);
			}
		}
		$parameters = $sb->b;
		if($a->isEquivalence()) {
			$toleranceText = $this->getToleranceText($q, $tolerance, $toleranceDigits, $relativeTolerance);
			if(!($toleranceText === "")) {
				if($count > 0) {
					$toleranceText .= ", ";
				}
				$parameters = $toleranceText . $parameters;
				$count++;
			}
		}
		if($a->name === com_wiris_quizzes_impl_Assertion::$CHECK_PRECISION) {
			$text .= $parameters . " ";
			$text .= (($a->getParam(com_wiris_quizzes_impl_Assertion::$PARAM_RELATIVE) === "true") ? $this->t->t("significantfigures") : $this->t->t("decimalplaces"));
		} else {
			if($count > 0) {
				$parameters = $this->shortenText($parameters, $chars - strlen($text) - 3);
				$text .= " (" . $parameters . ")";
			}
		}
		return $text;
	}
	public function getWirisCasApplet($id, $lang) {
		$caslangs = $this->getWirisCasLanguages();
		$caslang = "en";
		$i = null;
		{
			$_g1 = 0; $_g = $caslangs->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($caslangs[$i1][0] === $lang) {
					$caslang = $lang;
				}
				unset($i1);
			}
		}
		$h = new com_wiris_quizzes_impl_HTML();
		$h->open("applet", new _hx_array(array(new _hx_array(array("id", $id)), new _hx_array(array("name", "wiriscas")), new _hx_array(array("codebase", com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$SERVICE_URL) . "/wiris-codebase")), new _hx_array(array("code", "WirisApplet_net_" . $caslang)), new _hx_array(array("archive", "wrs_net_" . $caslang . ".jar")), new _hx_array(array("height", "100%")), new _hx_array(array("width", "100%")))));
		$h->openclose("param", new _hx_array(array(new _hx_array(array("name", "command")), new _hx_array(array("value", "false")))));
		$h->openclose("param", new _hx_array(array(new _hx_array(array("name", "commands")), new _hx_array(array("value", "false")))));
		$h->openclose("param", new _hx_array(array(new _hx_array(array("name", "interface")), new _hx_array(array("value", "false")))));
		$h->close();
		return $h->getString();
	}
	public function getOutputOptions($unique) {
		$h = new com_wiris_quizzes_impl_HTML();
		$h->openDiv("wirisoutputcontrols" . $unique);
		$h->openDivClass(null, "wirisfieldsetwrapper");
		$h->openFieldset("wirisoutputcontrolsfieldset" . $unique, $this->t->t("outputoptions"), "wirismainfieldset");
		$langString = $this->t->t("lang");
		$h->help("wirisoutputcontrolshelp" . $unique, "https://docs.wiris.com/" . $langString . "/quizzes/studio#output_options", $this->t->t("manual"));
		$h->openTable("wirisoutputcontrolslist" . $unique, "wirisoutputcontrolslist");
		$id = null;
		$h->openTr(null);
		$h->openTd("wirisleftlabellist");
		$id = "wirisoption" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION . "]";
		$h->label($this->t->t(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION), $id, "wirisleftlabel");
		$h->close();
		$h->openTd(null);
		$h->input("text", $id, null, null, null, "wirisintinputbox");
		$h->text(" ");
		$id = "wirisoption" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT . "]";
		$h->select($id . "[0]", null, new _hx_array(array(new _hx_array(array("m", $this->t->t("significantfigures"))), new _hx_array(array("f", $this->t->t("decimalplaces"))))));
		$h->openSpan("wirisfloatingexample" . $unique, "wirisfloatingexample");
		$h->text($this->t->t("example") . ":");
		$h->openSpan("wirisfloatingexamplewrapper" . $unique, null);
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->openTr(null);
		$h->openTd("wirisleftlabellist");
		$h->label($this->t->t("notation"), $id . "[1]", "wirisleftlabel");
		$h->close();
		$h->openTd(null);
		$h->select($id . "[1]", null, new _hx_array(array(new _hx_array(array("g", $this->t->t("auto"))), new _hx_array(array("r", $this->t->t("floatingDecimal"))), new _hx_array(array("e", $this->t->t("scientific"))))));
		$id = "wirisoption" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR . "]";
		$h->label($this->t->t("decimalSeparator"), null, "wirisleftlabel wirissecondlabel");
		$h->select($id, null, new _hx_array(array(new _hx_array(array(".", $this->t->t("point"))), new _hx_array(array(",", $this->t->t("comma"))))));
		$id = "wirisoption" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_DIGIT_GROUP_SEPARATOR . "]";
		$h->label($this->t->t("thousandsSeparator"), null, "wirisleftlabel wirissecondlabel");
		$h->select($id, null, new _hx_array(array(new _hx_array(array(".", $this->t->t("point"))), new _hx_array(array(",", $this->t->t("comma"))), new _hx_array(array(" ", $this->t->t("space"))), new _hx_array(array("", $this->t->t("None"))))));
		$h->close();
		$h->close();
		$h->openTr("wirisrowthinspace");
		$h->openTd("wirisleftlabellist");
		$id = "wirisoptionpart" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_TIMES_OPERATOR . "]";
		$h->label($this->t->t(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TIMES_OPERATOR), null, "wirisleftlabel");
		$h->close();
		$h->openTd(null);
		$h->openSpan(null, "wirishorizontalparam");
		$h->input("radio", $id . "[0]", $id, com_wiris_quizzes_impl_HTMLGui_1($this, $h, $id, $langString, $unique), com_wiris_quizzes_impl_HTMLGui_2($this, $h, $id, $langString, $unique), null);
		$h->label("a" . com_wiris_quizzes_impl_HTMLGui_3($this, $h, $id, $langString, $unique) . "b", $id . "[0]", null);
		$h->close();
		$h->openSpan(null, "wirishorizontalparam");
		$h->input("radio", $id . "[1]", $id, com_wiris_quizzes_impl_HTMLGui_4($this, $h, $id, $langString, $unique), com_wiris_quizzes_impl_HTMLGui_5($this, $h, $id, $langString, $unique), null);
		$h->label("a" . com_wiris_quizzes_impl_HTMLGui_6($this, $h, $id, $langString, $unique) . "b", $id . "[1]", null);
		$h->close();
		$id = "wirisoption" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMPLICIT_TIMES_OPERATOR . "]";
		$h->input("checkbox", $id, null, "true", $this->t->t(com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMPLICIT_TIMES_OPERATOR), null);
		$h->label($this->t->t("invisible"), $id, null);
		$h->close();
		$h->close();
		$h->openTr(null);
		$h->openTd("wirisleftlabellist");
		$id = "wirisoptionpart" . $unique . "[" . com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMAGINARY_UNIT . "]";
		$h->label($this->t->t(com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMAGINARY_UNIT), null, "wirisleftlabel");
		$h->close();
		$h->openTd(null);
		$h->openSpan(null, "wirishorizontalparam");
		$h->input("radio", $id . "[0]", $id, "i", "i", null);
		$h->label("i", $id . "[0]", null);
		$h->close();
		$h->openSpan(null, "wirishorizontalparam");
		$h->input("radio", $id . "[1]", $id, "j", "j", null);
		$h->label("j", $id . "[1]", null);
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->openPWithClass("wirisoutputoptionwarning");
		$h->text($this->t->t("casoutputoptionswarning"));
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		return $h->getString();
	}
	public function getWirisCasLanguages() {
		$langs = new _hx_array(array(new _hx_array(array("ca", $this->t->t("Catalan"))), new _hx_array(array("en", $this->t->t("English"))), new _hx_array(array("es", $this->t->t("Spanish"))), new _hx_array(array("et", $this->t->t("Estonian"))), new _hx_array(array("eu", $this->t->t("Basque"))), new _hx_array(array("fr", $this->t->t("French"))), new _hx_array(array("de", $this->t->t("German"))), new _hx_array(array("it", $this->t->t("Italian"))), new _hx_array(array("nl", $this->t->t("Dutch"))), new _hx_array(array("pt", $this->t->t("Portuguese")))));
		return $langs;
	}
	public function printInputControls($h, $q, $correctAnswer, $userAnswer, $unique) {
		$answers = "[" . _hx_string_rec($correctAnswer, "") . "][" . _hx_string_rec($userAnswer, "") . "]";
		$id = null;
		$h->openDiv("wirisinputcontrols" . $unique);
		$h->openDivClass(null, "wirisfieldsetwrapper");
		$h->openFieldset("wirisinputcontrolsfieldset" . $unique, $this->t->t("allowedinput"), "wirismainfieldset");
		$langString = $this->t->t("lang");
		$h->help("wirisinputcontrolshelp" . $unique, "https://docs.wiris.com/" . $langString . "/quizzes/studio#allowed_input", $this->t->t("manual"));
		$h->openDivClass("wirissyntaxassertions" . $unique, "wirissyntaxassertions");
		$h->openUl("wirisinputcontrolslist" . $unique, "wirisinputcontrolslist");
		$i = null;
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_Assertion::$syntactic->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$h->openLi();
				$id = "wirisassertion" . $unique . "[" . com_wiris_quizzes_impl_Assertion::$syntactic[$i1] . "]" . $answers;
				$h->input("radio", $id, "wirisradiosyntax" . $unique, null, null, null);
				$h->openStrong();
				$h->label($this->t->t(com_wiris_quizzes_impl_Assertion::$syntactic[$i1]), $id, null);
				$h->close();
				$h->text(" ");
				$h->label($this->t->t(com_wiris_quizzes_impl_Assertion::$syntactic[$i1] . "_description"), $id, null);
				$h->close();
				unset($i1);
			}
		}
		$h->close();
		$h->openCollapsibleFieldset("wirissyntaxparams" . $unique, $this->t->t("syntaxparams"), "wirissyntaxparams", true, true);
		$h->openDivClass("wirissyntaxconstants" . $unique, "wirissyntaxparam wirisspaceafter");
		$h->openSpan("wirissyntaxconstantslabel" . $unique, "wirissyntaxlabel");
		$h->text($this->t->t("constants") . ":");
		$h->close();
		$h->openSpan("wirissyntaxconstantsvalues" . $unique, "wirissyntaxvalues");
		$id = "wirisassertionparampart" . $unique . "[syntax_expression, syntax_quantity][constants]" . $answers;
		$letterpi = com_wiris_quizzes_impl_HTMLGui_7($this, $answers, $correctAnswer, $h, $i, $id, $langString, $q, $unique, $userAnswer);
		$this->syntaxCheckbox($h, $id . "[0]", $letterpi, $letterpi, false);
		$this->syntaxCheckbox($h, $id . "[1]", "e", "e", false);
		$this->syntaxCheckbox($h, $id . "[2]", "i", "i", false);
		$this->syntaxCheckbox($h, $id . "[3]", "j", "j", false);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxfunctions" . $unique, "wirissyntaxparam");
		$h->openDivClass("wirissyntaxfunctionscheckboxes" . $unique, "wirisspaceafter");
		$h->openSpan("wirissyntaxfunctionlabel" . $unique, "wirissyntaxlabel");
		$h->text($this->t->t("functions") . ":");
		$h->close();
		$h->openSpan("wirissyntaxfunctionvalues" . $unique, "wirissyntaxvalues");
		$id = "wirisassertionparampart" . $unique . "[syntax_expression][functions]" . $answers;
		$this->syntaxCheckbox($h, $id . "[0]", "exp, log, ln", $this->t->t("explog"), false);
		$this->syntaxCheckbox($h, $id . "[1]", "sin, cos, tan," . " asin, acos, atan," . " arcsin, arccos, arctan," . " cosec, csc," . " sec," . " cotan, cot," . " acosec, acsc, arccosec, arccsc," . " asec, arcsec," . " acotan, acot, arccotan, arccot," . " sen, asen, arcsen", $this->t->t("trigonometric"), false);
		$this->syntaxCheckbox($h, $id . "[2]", "sinh, cosh, tanh," . " asinh, acosh, atanh," . " arcsinh, arccosh, arctanh," . " arsinh, arcosh, artanh," . " cosech, csch," . " sech," . " cotanh, coth," . " acosech, acsch, arccosech, arccsch, arcosech, arcsch," . " asech, arcsech, arsech," . " acotanh, acoth, arccotanh, arccoth, arcotanh, arcoth," . " senh, asenh, arcsenh, arsenh", $this->t->t("hyperbolic"), false);
		$this->syntaxCheckbox($h, $id . "[3]", "min, max, sign", $this->t->t("arithmetic"), false);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxfunctionscustom" . $unique, "wirisspaceafter");
		$h->openSpan("wirissyntaxuserfunctionlabel" . $unique, "wirissyntaxlabel");
		$h->label($this->t->t("userfunctions") . ":", $id . "[4]", null);
		$h->close();
		$h->openSpan("wirissyntaxfunctionscustomvalues" . $unique, "wirissyntaxvalues");
		$h->input("text", $id . "[4]", "", null, null, "wirisuserfunctions");
		$h->close();
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxunits" . $unique, "wirissyntaxparam wirisspaceafter");
		$h->openSpan("wirissyntaxunitslabel" . $unique, "wirissyntaxlabel");
		$h->text($this->t->t("units") . ":");
		$h->close();
		$h->openSpan("wirissyntaxunitsvalues" . $unique, "wirissyntaxvalues");
		$id = "wirisassertionparampart" . $unique . "[syntax_quantity][units]" . $answers;
		$this->syntaxCheckbox($h, $id . "[0]", "m", "m", false);
		$this->syntaxCheckbox($h, $id . "[1]", "s", "s", false);
		$this->syntaxCheckbox($h, $id . "[2]", "g", "g", false);
		$this->syntaxCheckbox($h, $id . "[3]", com_wiris_quizzes_impl_Assertion::$ANGLE_UNITS_LIST, com_wiris_quizzes_impl_HTMLGui_8($this, $answers, $correctAnswer, $h, $i, $id, $langString, $letterpi, $q, $unique, $userAnswer) . " ' \"", false);
		$this->syntaxCheckbox($h, $id . "[4]", com_wiris_quizzes_impl_Assertion::$CURRENCY_UNITS_LIST, "\$" . com_wiris_quizzes_impl_HTMLGui_9($this, $answers, $correctAnswer, $h, $i, $id, $langString, $letterpi, $q, $unique, $userAnswer) . com_wiris_quizzes_impl_HTMLGui_10($this, $answers, $correctAnswer, $h, $i, $id, $langString, $letterpi, $q, $unique, $userAnswer), false);
		$this->syntaxCheckbox($h, $id . "[5]", com_wiris_quizzes_impl_Assertion::$PERCENT_UNITS_LIST, "%", false);
		$this->syntaxCheckbox($h, $id . "[6]", com_wiris_quizzes_impl_Assertion::$ALL_UNITS_LIST, $this->t->t("all"), true);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxunitprefixes" . $unique, "wirissyntaxparam wirisspaceafter");
		$h->openSpan("wirissyntaxunitslabel" . $unique, "wirissyntaxlabel");
		$h->text($this->t->t("unitprefixes") . ":");
		$h->close();
		$h->openSpan("wirissyntaxunitsvalues" . $unique, "wirissyntaxvalues");
		$id = "wirisassertionparampart" . $unique . "[syntax_quantity][unitprefixes]" . $answers;
		$this->syntaxCheckbox($h, $id . "[0]", "M", "M", false);
		$this->syntaxCheckbox($h, $id . "[1]", "k", "k", false);
		$this->syntaxCheckbox($h, $id . "[2]", "c", "c", false);
		$this->syntaxCheckbox($h, $id . "[3]", "m", "m", false);
		$this->syntaxCheckbox($h, $id . "[4]", "y, z, a, f, p, n, " . com_wiris_quizzes_impl_HTMLGui_11($this, $answers, $correctAnswer, $h, $i, $id, $langString, $letterpi, $q, $unique, $userAnswer) . ", m, c, d, da, h, k, M, G, T, P, E, Z, Y", $this->t->t("all"), true);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxmixedfractions" . $unique, "wirissyntaxparam wirisspaceafter");
		$id = "wirisassertionparam" . $unique . "[syntax_quantity][mixedfractions]" . $answers;
		$h->openSpan("wirissyntaxmixedfractionslabel" . $unique, "wirissyntaxlabel");
		$h->label($this->t->t("mixedfractions") . ":", $id, null);
		$h->close();
		$h->openSpan("wirissyntaxmixedfractionsvalues" . $unique, "wirissyntaxvalues");
		$h->input("checkbox", $id, "", "true", null, null);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxlist" . $unique, "wirissyntaxparam");
		$id = "wirisassertionparam" . $unique . "[syntax_expression,syntax_quantity][list]" . $answers;
		$h->openSpan("wirissyntaxlistlabel" . $unique, "wirissyntaxlabel");
		$h->label($this->t->t("list") . ":", $id, null);
		$h->close();
		$h->openSpan("wirissyntaxlistvalue" . $unique, "wirissyntaxvalues");
		$h->input("checkbox", $id, "", "true", null, null);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxforcebrackets" . $unique, "wirissyntaxparam");
		$h->openSpan("wirissyntaxforcebracketslabel" . $unique, "wirissyntaxlabel");
		$h->close();
		$h->openSpan("wirissyntaxforcebracketsvalues" . $unique, "wirissyntaxvalues");
		$id = "wirisassertionparam" . $unique . "[syntax_expression][forcebrackets]" . $answers;
		$this->syntaxCheckbox($h, $id, "true", $this->t->t("forcebrackets"), false);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxintervals" . $unique, "wirissyntaxparam wirisspacebefore");
		$id = "wirisassertionparam" . $unique . "[syntax_expression][intervals]" . $answers;
		$h->openSpan("wirissyntaxintervalslabel" . $unique, "wirissyntaxlabel");
		$h->label($this->t->t("intervals") . ":", $id, null);
		$h->close();
		$h->openSpan("wirissyntaxintervalsvalue" . $unique, "wirissyntaxvalues");
		$h->input("checkbox", $id, "", "true", null, null);
		$h->close();
		$h->close();
		$h->openDivClass("wirissyntaxchars" . $unique, "wirissyntaxparam wirisspacebefore");
		$h->openSpan("wirissyntaxcharslabel" . $unique, "wirissyntaxlabel");
		$h->text($this->t->t("separators") . ":");
		$h->close();
		$h->openSpan("wirissyntaxcharsvalue" . $unique, "wirissyntaxvalues");
		$idgeneric = "wirisassertionparampart" . $unique . "[syntax_expression,syntax_quantity]";
		$h->openSpan("wirissyntaxcharspoint" . $unique, "wirissyntaxchar");
		$id = $idgeneric . "[point]" . $answers;
		$h->labelTitle($this->t->t("point") . ":", $id, "wirissyntaxcharslabel", $this->t->t("pointrole"));
		$h->select($id, "", new _hx_array(array(new _hx_array(array("nothing", $this->t->t("nothing"))), new _hx_array(array("decimalseparators", $this->t->t("decimalmark"))), new _hx_array(array("digitgroupseparators", $this->t->t("digitsgroup"))))));
		$h->close();
		$h->openSpan("wirissyntaxcharscomma" . $unique, "wirissyntaxchar");
		$id = $idgeneric . "[comma]" . $answers;
		$h->labelTitle($this->t->t("comma") . ":", $id, "wirissyntaxcharslabel", $this->t->t("commarole"));
		$h->select($id, "", new _hx_array(array(new _hx_array(array("decimalseparators", $this->t->t("decimalmark"))), new _hx_array(array("digitgroupseparators", $this->t->t("digitsgroup"))), new _hx_array(array("itemseparators", $this->t->t("listitems"))))));
		$h->close();
		$h->openSpan("wirissyntaxcharsspace" . $unique, "wirissyntaxchar");
		$id = $idgeneric . "[space]" . $answers;
		$h->labelTitle($this->t->t("space") . ":", $id, "wirissyntaxcharslabel", $this->t->t("spacerole"));
		$h->select($id, "", new _hx_array(array(new _hx_array(array("nothing", $this->t->t("nothing"))), new _hx_array(array("digitgroupseparators", $this->t->t("digitsgroup"))), new _hx_array(array("itemseparators", $this->t->t("listitems"))))));
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->close();
		$h->close();
	}
	public function syntaxInput($h, $id, $name, $value, $label, $all, $radio) {
		$className = (($all) ? "wirisassertionparamall" : null);
		$h->openSpan(null, "wirishorizontalparam");
		$h->input((($radio) ? "radio" : "checkbox"), $id, $name, $value, $value, $className);
		$h->labelTitle($label, $id, null, $value);
		$h->close();
	}
	public function syntaxRadio($h, $id, $name, $value, $label) {
		$this->syntaxInput($h, $id, $name, $value, $label, false, true);
	}
	public function syntaxCheckbox($h, $id, $value, $label, $all) {
		$this->syntaxInput($h, $id, null, $value, $label, $all, false);
	}
	public function getAssertionFeedback($q, $a) {
		$h = new com_wiris_quizzes_impl_HTML();
		$h->openUl(null, "wirisfeedbacklist");
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = $a[$i1];
				$h->openLi();
				$className = $this->getGradeClass($c->value);
				$suffix = (($c->value === 1.0) ? "_correct_feedback" : "_incorrect_feedback");
				$h->openSpan(null, $className);
				$text = $this->t->t($c->assertion . $suffix);
				if($q !== null && $q->assertions !== null) {
					$index = $q->getAssertionIndex($c->assertion, $c->getCorrectAnswer(), $c->getAnswer());
					if($index !== -1) {
						$ass = $q->assertions[$index];
						if($ass->parameters !== null) {
							$j = null;
							{
								$_g3 = 0; $_g2 = $ass->parameters->length;
								while($_g3 < $_g2) {
									$j1 = $_g3++;
									$p = $ass->parameters[$j1];
									$text = str_replace("\${" . $p->name . "}", $p->content, $text);
									unset($p,$j1);
								}
								unset($_g3,$_g2);
							}
							unset($j);
						}
						unset($ass);
					}
					unset($index);
				}
				$h->text($text);
				$h->close();
				$h->close();
				unset($text,$suffix,$i1,$className,$c);
			}
		}
		$h->close();
		return $h->getString();
	}
	public function getGradeClass($grade) {
		$className = null;
		if($grade === 1.0) {
			$className = "wiriscorrect";
		} else {
			if($grade === 0.0) {
				$className = "wirisincorrect";
			} else {
				$className = "wirispartiallycorrect";
			}
		}
		return $className;
	}
	public function getTabPreview($q, $qi, $correctAnswer, $userAnswer, $unique, $conf) {
		$h = new com_wiris_quizzes_impl_HTML();
		$this->printTester($h, $q, $qi, $correctAnswer, $userAnswer, $unique);
		return $h->getString();
	}
	public function getTabVariables($q, $correctAnswer, $unique, $conf) {
		$h = new com_wiris_quizzes_impl_HTML();
		$h->jsComponent("wiriscas" . $unique, "jsCasInput", $q->wirisCasSession);
		return $h->getString();
	}
	public function getTabValidation($q, $correctAnswer, $userAnswer, $unique, $conf) {
		$h = new com_wiris_quizzes_impl_HTML();
		$this->printInputControls($h, $q, $correctAnswer, $userAnswer, $unique);
		$this->printAssertionsControls($h, $q, $correctAnswer, $userAnswer, $unique, $conf);
		return $h->getString();
	}
	public function getTabCorrectAnswer($q, $correctAnswer, $unique, $conf) {
		$h = new com_wiris_quizzes_impl_HTML();
		if($conf->optOpenAnswer) {
			$h->openDivClass("wiriseditorwrapper" . $unique, "wiriscorrectanswerfieldwrapper");
			$content = "";
			if($q->correctAnswers !== null && $q->correctAnswers->length > $correctAnswer) {
				$content = _hx_array_get($q->correctAnswers, $correctAnswer)->content;
			}
			$h->jsComponent("wiriscorrectanswer" . $unique . "[" . _hx_string_rec($correctAnswer, "") . "]", "jsEditorInput", $content);
			$h->close();
		}
		$this->printLocalData($h, $q, $unique, $conf);
		$h->openPWithClass("wirisnewinterfacead");
		$h->raw($this->t->t("quizzesnewinterfacewarning"));
		$h->close();
		return $h->getString();
	}
	public $lang;
	public $t;
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
	static function mathMLImgSrc($mathml, $centerBaseline, $zoom) {
		$c = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration();
		$src = null;
		if("true" === $c->get(com_wiris_quizzes_api_ConfigurationKeys::$CROSSORIGINCALLS_ENABLED)) {
			$src = $c->get(com_wiris_quizzes_api_ConfigurationKeys::$EDITOR_URL) . "/render?";
		} else {
			$src = $c->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=render&";
		}
		$src .= "stats-app=quizzes&";
		if(!$centerBaseline) {
			$src .= "centerbaseline=false&";
		}
		if($zoom !== 1.0) {
			$src .= "zoom=" . _hx_string_rec($zoom, "") . "&";
		}
		$mathml = com_wiris_util_xml_MathMLUtils::removeStrokesAnnotation($mathml);
		$mathml = rawurlencode(com_wiris_quizzes_impl_HTMLTools::encodeUnicodeChars($mathml));
		$src .= "mml=" . $mathml;
		return $src;
	}
	function __toString() { return 'com.wiris.quizzes.impl.HTMLGui'; }
}
function com_wiris_quizzes_impl_HTMLGui_0(&$»this, &$correctAnswer, &$h, &$hasUserAnswer, &$q, &$qi, &$unique, &$userAnswer) {
	if($hasUserAnswer) {
		return _hx_array_get($qi->userData->answers, $userAnswer)->content;
	} else {
		return "";
	}
}
function com_wiris_quizzes_impl_HTMLGui_1(&$»this, &$h, &$id, &$langString, &$unique) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(183);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_2(&$»this, &$h, &$id, &$langString, &$unique) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(183);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_3(&$»this, &$h, &$id, &$langString, &$unique) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(183);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_4(&$»this, &$h, &$id, &$langString, &$unique) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(215);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_5(&$»this, &$h, &$id, &$langString, &$unique) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(215);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_6(&$»this, &$h, &$id, &$langString, &$unique) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(215);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_7(&$»this, &$answers, &$correctAnswer, &$h, &$i, &$id, &$langString, &$q, &$unique, &$userAnswer) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(960);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_8(&$»this, &$answers, &$correctAnswer, &$h, &$i, &$id, &$langString, &$letterpi, &$q, &$unique, &$userAnswer) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(176);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_9(&$»this, &$answers, &$correctAnswer, &$h, &$i, &$id, &$langString, &$letterpi, &$q, &$unique, &$userAnswer) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(8364);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_10(&$»this, &$answers, &$correctAnswer, &$h, &$i, &$id, &$langString, &$letterpi, &$q, &$unique, &$userAnswer) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(165);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLGui_11(&$»this, &$answers, &$correctAnswer, &$h, &$i, &$id, &$langString, &$letterpi, &$q, &$unique, &$userAnswer) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(181);
		return $s->toString();
	}
}
