<?php

class com_wiris_quizzes_impl_QuestionImpl extends com_wiris_quizzes_impl_QuestionInternal implements com_wiris_quizzes_api_MultipleQuestion{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
		if(com_wiris_quizzes_impl_QuestionImpl::$defaultOptions === null) {
			com_wiris_quizzes_impl_QuestionImpl::$defaultOptions = com_wiris_quizzes_impl_QuestionImpl::getDefaultOptions();
		}
	}}
	public function getAssertion($i) {
		return $this->assertions[$i];
	}
	public function getAssertionsLength() {
		return com_wiris_quizzes_impl_QuestionImpl_0($this);
	}
	public function addAssertionOfSubquestion($sub, $name, $correctAnswer, $studentAnswer, $parameters) {
		if($this->subquestions !== null && $sub < $this->subquestions->length) {
			_hx_array_get($this->subquestions, $sub)->addAssertion($name, $correctAnswer, $studentAnswer, $parameters);
		}
	}
	public function setPropertyOfSubquestion($sub, $name, $value) {
		if($this->subquestions !== null && $sub < $this->subquestions->length) {
			_hx_array_get($this->subquestions, $sub)->setProperty($name, $value);
		}
	}
	public function getPropertyOfSubquestion($sub, $name) {
		if($this->subquestions === null || $sub >= $this->subquestions->length) {
			return null;
		}
		return _hx_array_get($this->subquestions, $sub)->getProperty($name);
	}
	public function setCorrectAnswerOfSubquestion($sub, $index, $correctAnswer) {
		if($this->subquestions !== null) {
			$this->addSubquestion($sub);
			_hx_array_get($this->subquestions, $sub)->setCorrectAnswer($index, $correctAnswer);
		}
	}
	public function getCorrectAnswerOfSubquestion($sub, $index) {
		if($this->subquestions === null || $sub >= $this->subquestions->length) {
			return null;
		}
		return _hx_array_get($this->subquestions, $sub)->getCorrectAnswer($index);
	}
	public function getCorrectAnswersLengthOfSubquestion($sub) {
		if($this->subquestions === null || $sub >= $this->subquestions->length) {
			return 0;
		}
		return _hx_array_get($this->subquestions, $sub)->getCorrectAnswersLength();
	}
	public function addSubquestion($index) {
		if($this->subquestions !== null) {
			$n = $this->subquestions->length;
			while($n <= $index) {
				$this->subquestions->push(new com_wiris_quizzes_impl_SubQuestion($n));
				$n++;
			}
		}
	}
	public function getNumberOfSubquestions() {
		return com_wiris_quizzes_impl_QuestionImpl_1($this);
	}
	public function getProperty($name) {
		return $this->getLocalData($name);
	}
	public function setProperty($name, $value) {
		$this->setLocalData($name, $value);
	}
	public function moveAnswers($correct, $user) {
		$this->id = null;
		$i = null;
		$answers = new _hx_array(array());
		{
			$_g1 = 0; $_g = $correct->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($i1 !== $correct[$i1]) {
					$answers[$i1] = $this->getCorrectAnswer($correct[$i1]);
					if($answers[$i1] === null) {
						$answers[$i1] = "";
					}
				}
				unset($i1);
			}
		}
		{
			$_g1 = 0; $_g = $correct->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($correct[$i1] !== $i1) {
					$this->setCorrectAnswer($i1, $answers[$i1]);
				}
				unset($i1);
			}
		}
		if($this->correctAnswers !== null) {
			$i = $this->correctAnswers->length - 1;
			while($i >= $correct->length) {
				$this->correctAnswers->remove($this->correctAnswers[$i]);
				$i--;
			}
		}
		if($this->assertions !== null) {
			$newAssertions = new _hx_array(array());
			{
				$_g1 = 0; $_g = $this->assertions->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$a = $this->assertions[$i1];
					$correctAnswers = $a->getCorrectAnswers();
					$newCorrectAnswersArray = new _hx_array(array());
					$j = null;
					{
						$_g3 = 0; $_g2 = $correctAnswers->length;
						while($_g3 < $_g2) {
							$j1 = $_g3++;
							$k = null;
							{
								$_g5 = 0; $_g4 = $correct->length;
								while($_g5 < $_g4) {
									$k1 = $_g5++;
									if($correct[$k1] === Std::parseInt($correctAnswers[$j1])) {
										$newCorrectAnswersArray->push($k1);
									}
									unset($k1);
								}
								unset($_g5,$_g4);
							}
							unset($k,$j1);
						}
						unset($_g3,$_g2);
					}
					if($newCorrectAnswersArray->length > 0) {
						$newCorrectAnswers = new _hx_array(array());
						{
							$_g3 = 0; $_g2 = $newCorrectAnswersArray->length;
							while($_g3 < $_g2) {
								$j1 = $_g3++;
								$newCorrectAnswers[$j1] = "" . _hx_string_rec($newCorrectAnswersArray[$j1], "");
								unset($j1);
							}
							unset($_g3,$_g2);
						}
						if($correctAnswers->length > 1 || $newCorrectAnswers->length === 1) {
							$a->setCorrectAnswers($newCorrectAnswers);
							$a->setAnswers($newCorrectAnswers);
							$newAssertions->push($a);
						} else {
							$k = null;
							{
								$_g3 = 0; $_g2 = $newCorrectAnswers->length;
								while($_g3 < $_g2) {
									$k1 = $_g3++;
									$b = $a->copy();
									$b->setCorrectAnswer($newCorrectAnswers[$k1]);
									$b->setAnswer($newCorrectAnswers[$k1]);
									$newAssertions->push($b);
									unset($k1,$b);
								}
								unset($_g3,$_g2);
							}
							unset($k);
						}
						unset($newCorrectAnswers);
					}
					unset($newCorrectAnswersArray,$j,$i1,$correctAnswers,$a);
				}
			}
			$this->assertions = $newAssertions;
		}
	}
	public function isImplicitOption($name, $value) {
		$i = 0;
		while($i < com_wiris_quizzes_impl_Option::$options->length) {
			if(com_wiris_quizzes_impl_Option::$options[$i] === $name) {
				break;
			}
			$i++;
		}
		return $i >= 8 && $this->defaultOption($name) === $value;
	}
	public function getAlgorithm() {
		if(com_wiris_quizzes_impl_HTMLTools::emptyCasSession($this->wirisCasSession)) {
			return null;
		} else {
			return $this->wirisCasSession;
		}
	}
	public function removeCalcOptions() {
		$_g1 = 0; $_g = com_wiris_quizzes_impl_CalcDocumentTools::$options->length;
		while($_g1 < $_g) {
			$i = $_g1++;
			$opt = com_wiris_quizzes_impl_CalcDocumentTools::$options[$i];
			$this->removeOption($opt);
			unset($opt,$i);
		}
	}
	public function setAlgorithm($session) {
		if(com_wiris_quizzes_impl_HTMLTools::emptyCasSession($session)) {
			$session = null;
		}
		if($session !== $this->wirisCasSession || $session !== null && !($session === $this->wirisCasSession)) {
			$this->id = null;
			if(com_wiris_quizzes_impl_HTMLTools::isCalc($session)) {
				$sessionDocument = new com_wiris_quizzes_impl_CalcDocumentTools($session);
				if(($this->wirisCasSession === null || !com_wiris_quizzes_impl_HTMLTools::isCalc($this->wirisCasSession) || !$this->getCalcDocument()->hasQuizzesQuestionOptions()) && $sessionDocument->hasQuizzesQuestionOptions()) {
					$this->removeCalcOptions();
				}
				$this->calcDocument = $sessionDocument;
			} else {
				$this->calcDocument = null;
			}
			$this->wirisCasSession = $session;
		}
	}
	public function setAnswerFieldType($type) {
		if(com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_EDITOR === $type || com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_PLAIN_TEXT === $type || com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_POPUP_EDITOR === $type || com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_HAND === $type) {
			$this->setLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD, $type);
		} else {
			throw new HException("Invalid type parameter.");
		}
	}
	public function changeAssertionParamName($a, $oldname, $newname) {
		if($a->parameters !== null) {
			$j = null;
			{
				$_g1 = 0; $_g = $a->parameters->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					if(_hx_array_get($a->parameters, $j1)->name === $oldname) {
						_hx_array_get($a->parameters, $j1)->name = $newname;
					}
					unset($j1);
				}
			}
		}
	}
	public function importTolerance($tolerance) {
		if($this->isDeprecatedTolerance($tolerance)) {
			$pattern10 = new EReg("^10\\^\\(-(.*)\\)\$", "");
			if($pattern10->match($tolerance)) {
				$exponent = trim($pattern10->matched(1));
				if(StringTools::startsWith($exponent, "(") && StringTools::endsWith($exponent, ")")) {
					$exponent = trim(_hx_substr($exponent, 1, strlen($exponent) - 2));
				}
				if(com_wiris_system_TypeTools::isFloating($exponent)) {
					$expd = -Std::parseFloat($exponent);
					$tolerance = _hx_string_rec(Math::pow(10.0, $expd), "") . "";
				} else {
					$patternlog = new EReg("-?log\\((.*)\\)", "");
					if($patternlog->match($exponent)) {
						$arg = $patternlog->matched(1);
						if(StringTools::startsWith($exponent, "-")) {
							$tolerance = $arg;
						} else {
							if(com_wiris_system_TypeTools::isFloating($arg)) {
								$tolerance = _hx_string_rec(1.0 / Std::parseFloat($arg), "") . "";
							}
						}
					}
				}
			}
		}
		return $tolerance;
	}
	public function isDeprecatedTolerance($tol) {
		return _hx_index_of($tol, "10^", null) !== -1;
	}
	public function importDeprecated() {
		if($this->assertions !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $this->assertions->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$a = $this->assertions[$i1];
					if($a->name === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SET) {
						$a->name = com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC;
						$a->setParam(com_wiris_quizzes_impl_Assertion::$PARAM_ORDER_MATTERS, "false");
						$a->setParam(com_wiris_quizzes_impl_Assertion::$PARAM_REPETITION_MATTERS, "false");
					}
					if($a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_LIST) {
						$a->name = com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC;
						$a->setParam(com_wiris_quizzes_impl_Assertion::$PARAM_NO_BRACKETS_LIST, "true");
					}
					if($a->name === com_wiris_quizzes_impl_Assertion::$CHECK_NO_MORE_DECIMALS) {
						$a->name = com_wiris_quizzes_impl_Assertion::$CHECK_PRECISION;
						$this->changeAssertionParamName($a, "digits", "max");
						$a->setParam("relative", "false");
					}
					if($a->name === com_wiris_quizzes_impl_Assertion::$CHECK_NO_MORE_DIGITS) {
						$a->name = com_wiris_quizzes_impl_Assertion::$CHECK_PRECISION;
						$this->changeAssertionParamName($a, "digits", "max");
						$a->setParam("relative", "true");
					}
					if($a->isEquivalence()) {
						$tol = $a->getParam(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE);
						if($tol !== null && $this->isDeprecatedTolerance($tol)) {
							$a->setParam(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE, $this->importTolerance($tol));
						}
						unset($tol);
					}
					unset($i1,$a);
				}
			}
		}
		$tolerance = $this->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE);
		if($this->isDeprecatedTolerance($tolerance)) {
			$this->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE, $this->importTolerance($tolerance));
		}
	}
	public function isDeprecated() {
		if($this->assertions !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $this->assertions->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$a = $this->assertions[$i1];
					if($a->name === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SET || $a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_LIST) {
						return com_wiris_quizzes_impl_QuestionImpl::$DEPRECATED_NEEDS_CHECK;
					} else {
						if($a->name === com_wiris_quizzes_impl_Assertion::$CHECK_NO_MORE_DIGITS || $a->name === com_wiris_quizzes_impl_Assertion::$CHECK_NO_MORE_DECIMALS) {
							return com_wiris_quizzes_impl_QuestionImpl::$DEPRECATED_COMPATIBLE;
						}
					}
					if($a->isEquivalence()) {
						$tol = $a->getParam(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE);
						if($tol !== null && $this->isDeprecatedTolerance($tol)) {
							return com_wiris_quizzes_impl_QuestionImpl::$DEPRECATED_COMPATIBLE;
						}
						unset($tol);
					}
					unset($i1,$a);
				}
			}
		}
		if($this->isDeprecatedTolerance($this->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE))) {
			return com_wiris_quizzes_impl_QuestionImpl::$DEPRECATED_COMPATIBLE;
		}
		return com_wiris_quizzes_impl_QuestionImpl::$NO_DEPRECATED;
	}
	public function getImpl() {
		return $this;
	}
	public function hasId() {
		return $this->id !== null && strlen($this->id) > 0;
	}
	public function getGrammarUrl($studentAnswer) {
		$prefix = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$SERVICE_URL);
		$prefix .= "/grammar/";
		$url = null;
		if($this->assertions !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $this->assertions->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$a = $this->assertions[$i1];
					if($a->isSyntactic()) {
						if($a->hasAnswer("" . _hx_string_rec($studentAnswer, ""))) {
							$url = $prefix . com_wiris_quizzes_impl_QuestionImpl::syntacticAssertionToURL($a);
							break;
						} else {
							if($url === null) {
								$url = $prefix . com_wiris_quizzes_impl_QuestionImpl::syntacticAssertionToURL($a);
							}
						}
					}
					unset($i1,$a);
				}
			}
		}
		if($url === null) {
			$url = $prefix . "Expression";
		}
		return $url;
	}
	public function addAssertion($name, $correctAnswer, $studentAnswer, $parameters) {
		$this->setParametrizedAssertion($name, "" . _hx_string_rec($correctAnswer, ""), "" . _hx_string_rec($studentAnswer, ""), $parameters);
	}
	public function isEquivalent($q) {
		$te = com_wiris_quizzes_impl_HTMLTools::emptyCasSession($this->wirisCasSession);
		$qe = com_wiris_quizzes_impl_HTMLTools::emptyCasSession($q->wirisCasSession);
		if($te && !$qe || !$te && $qe) {
			return false;
		} else {
			if(!$te && !$qe && !($this->wirisCasSession === $q->wirisCasSession)) {
				return false;
			}
		}
		if($this->correctAnswers !== null && $q->correctAnswers !== null) {
			if($this->correctAnswers->length !== $q->correctAnswers->length) {
				return false;
			}
			$i = null;
			{
				$_g1 = 0; $_g = $this->correctAnswers->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$tca = $this->correctAnswers[$i1];
					$qca = $q->correctAnswers[$i1];
					if(!($tca->id === $qca->id)) {
						return false;
					}
					if(!($tca->content === $qca->content)) {
						return false;
					}
					unset($tca,$qca,$i1);
				}
			}
		}
		if($this->assertions !== null && $q->assertions !== null) {
			if($this->assertions->length !== $q->assertions->length) {
				return false;
			}
			$i = null;
			{
				$_g1 = 0; $_g = $this->assertions->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$ta = $this->assertions[$i1];
					$qa = $q->assertions[$i1];
					if($ta->getCorrectAnswer() !== $qa->getCorrectAnswer() || $ta->getAnswer() !== $qa->getAnswer() || !($ta->name === $qa->name)) {
						return false;
					}
					if($ta->parameters === null && $qa->parameters !== null || $ta->parameters !== null && $qa->parameters === null) {
						return false;
					}
					if($ta->parameters !== null && $qa->parameters !== null) {
						if($ta->parameters->length !== $qa->parameters->length) {
							return false;
						}
						$j = null;
						{
							$_g3 = 0; $_g2 = $ta->parameters->length;
							while($_g3 < $_g2) {
								$j1 = $_g3++;
								$tp = $ta->parameters[$j1];
								$qp = $qa->parameters[$j1];
								if($tp->name !== $qp->name || $tp->content !== $qp->content) {
									return false;
								}
								unset($tp,$qp,$j1);
							}
							unset($_g3,$_g2);
						}
						unset($j);
					}
					unset($ta,$qa,$i1);
				}
			}
		}
		$k = null;
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_Option::$options->length;
			while($_g1 < $_g) {
				$k1 = $_g1++;
				$to = $this->getOption(com_wiris_quizzes_impl_Option::$options[$k1]);
				$qo = $q->getOption(com_wiris_quizzes_impl_Option::$options[$k1]);
				if($to === null && $qo !== null || $to !== null && $qo === null || !($to === $qo)) {
					return false;
				}
				unset($to,$qo,$k1);
			}
		}
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_LocalData::$keys->length;
			while($_g1 < $_g) {
				$k1 = $_g1++;
				$td = $this->getLocalData(com_wiris_quizzes_impl_LocalData::$keys[$k1]);
				$qd = $q->getLocalData(com_wiris_quizzes_impl_LocalData::$keys[$k1]);
				if($td === null && $qd !== null || $td !== null && $qd === null || !($td === $qd)) {
					return false;
				}
				unset($td,$qd,$k1);
			}
		}
		return true;
	}
	public function update($response) {
		$this->id = null;
		$qs = $response;
		if($qs !== null && $qs->results !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $qs->results->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$r = $qs->results[$i1];
					$s = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getSerializer();
					$tag = $s->getTagName($r);
					if($tag === com_wiris_quizzes_impl_ResultGetTranslation::$tagName) {
						$rgt = $r;
						$this->wirisCasSession = trim($rgt->wirisCasSession);
						unset($rgt);
					}
					unset($tag,$s,$r,$i1);
				}
			}
		}
	}
	public function hideCompoundAnswerAnswers($m) {
		$a = new com_wiris_quizzes_impl_MathContent();
		$a->set($m);
		$c = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($a);
		$i = null;
		{
			$_g1 = 0; $_g = $c->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c[$i1][1] = "<math></math>";
				unset($i1);
			}
		}
		$a = com_wiris_quizzes_impl_HTMLTools::joinCompoundAnswer($c);
		return $a->content;
	}
	public function getStudentQuestion() {
		$q = new com_wiris_quizzes_impl_QuestionImpl();
		$q->id = $this->id;
		$i = null;
		$q->assertions = $this->assertions;
		$q->localData = $this->localData;
		if($q->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER) === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_TRUE) {
			if($this->correctAnswers !== null) {
				$q->correctAnswers = new _hx_array(array());
				{
					$_g1 = 0; $_g = $this->correctAnswers->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						$ca = $this->correctAnswers[$i1];
						$content = $ca->content;
						if($ca->content !== null && strlen($ca->content) > 0) {
							$content = $this->hideCompoundAnswerAnswers($ca->content);
						}
						$q->setCorrectAnswer($i1, $content);
						unset($i1,$content,$ca);
					}
				}
			}
		}
		return $q;
	}
	public function defaultLocalData($name) {
		if($name === com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER) {
			return com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_FALSE;
		} else {
			if($name === com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD) {
				return com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_EDITOR;
			} else {
				if($name === com_wiris_quizzes_impl_LocalData::$KEY_SHOW_CAS) {
					return com_wiris_quizzes_impl_LocalData::$VALUE_SHOW_CAS_FALSE;
				} else {
					if($name === com_wiris_quizzes_impl_LocalData::$KEY_CAS_INITIAL_SESSION) {
						return null;
					} else {
						if($name === com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE) {
							return com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_GRADE_AND;
						} else {
							if($name === com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE_DISTRIBUTION) {
								return null;
							} else {
								return null;
							}
						}
					}
				}
			}
		}
	}
	public function getLocalData($name) {
		if($this->localData !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $this->localData->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					if(_hx_array_get($this->localData, $i1)->name === $name) {
						return _hx_array_get($this->localData, $i1)->value;
					}
					unset($i1);
				}
			}
		}
		return $this->defaultLocalData($name);
	}
	public function setLocalData($name, $value) {
		$this->id = null;
		if($this->localData === null) {
			$this->localData = new _hx_array(array());
		}
		$data = new com_wiris_quizzes_impl_LocalData();
		$data->name = $name;
		$data->value = $value;
		$i = null;
		$found = false;
		{
			$_g1 = 0; $_g = $this->localData->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_array_get($this->localData, $i1)->name === $name) {
					$this->localData[$i1] = $data;
					$found = true;
				}
				unset($i1);
			}
		}
		if(!$found) {
			$this->localData->push($data);
		}
	}
	public function getAssertionIndex($name, $correctAnswer, $userAnswer) {
		if($this->assertions === null) {
			return -1;
		}
		$i = null;
		{
			$_g1 = 0; $_g = $this->assertions->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$a = $this->assertions[$i1];
				if($a->getCorrectAnswer() === $correctAnswer && $a->getAnswer() === $userAnswer && $a->name === $name) {
					return $i1;
				}
				unset($i1,$a);
			}
		}
		return -1;
	}
	public function getCorrectAnswersLength() {
		return com_wiris_quizzes_impl_QuestionImpl_2($this);
	}
	public function getCorrectAnswer($index) {
		if($this->correctAnswers !== null && $this->correctAnswers->length > $index) {
			$a = $this->correctAnswers[$index];
			if($a !== null) {
				return $a->content;
			}
		}
		return null;
	}
	public function setCorrectAnswer($index, $content) {
		$this->id = null;
		if($index < 0) {
			throw new HException("Invalid index: " . _hx_string_rec($index, ""));
		}
		if($this->correctAnswers === null) {
			$this->correctAnswers = new _hx_array(array());
		}
		while($index >= $this->correctAnswers->length) {
			$this->correctAnswers->push(new com_wiris_quizzes_impl_CorrectAnswer());
		}
		$ca = $this->correctAnswers[$index];
		$ca->id = "" . _hx_string_rec($index, "");
		$ca->weight = 1.0;
		$content = com_wiris_quizzes_impl_HTMLTools::convertEditor2Newlines($content);
		$ca->set($content);
	}
	public function defaultOption($name) {
		return com_wiris_quizzes_impl_QuestionImpl::$defaultOptions->get($name);
	}
	public function removeCorrectAnswer($index) {
		$this->id = null;
		$this->correctAnswers->remove($this->correctAnswers[$index]);
		if($this->assertions !== null) {
			$i = $this->assertions->length - 1;
			while($i >= 0) {
				$a = $this->assertions[$i];
				$ca = Std::parseInt($a->getCorrectAnswer());
				if($ca === $index) {
					$this->assertions->remove($a);
				} else {
					if($ca > $index) {
						$a->setCorrectAnswer(_hx_string_rec($ca - 1, "") . "");
					}
				}
				$i--;
				unset($ca,$a);
			}
		}
	}
	public function removeLocalData($name) {
		$this->id = null;
		if($this->localData !== null) {
			$i = $this->localData->length - 1;
			while($i >= 0) {
				if(_hx_array_get($this->localData, $i)->name === $name) {
					$this->localData->remove($this->localData[$i]);
				}
				$i--;
			}
		}
	}
	public function removeOption($name) {
		if($this->hasCalcmeSessionWithOptions() && $this->isCalcmeOption($name)) {
			$this->wirisCasSession = $this->calcDocument->removeOption($name);
			return;
		}
		$this->id = null;
		if($this->options !== null) {
			$i = $this->options->length - 1;
			while($i >= 0) {
				if(_hx_array_get($this->options, $i)->name === $name) {
					$this->options->remove($this->options[$i]);
				}
				$i--;
			}
		}
	}
	public function getOption($name) {
		if($this->hasCalcmeSessionWithOptions() && $this->isCalcmeOption($name)) {
			$calcOption = $this->getCalcDocument()->getOption($name);
			if($calcOption !== null) {
				return $calcOption;
			}
		} else {
			if($this->options !== null) {
				$i = null;
				{
					$_g1 = 0; $_g = $this->options->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						if(_hx_array_get($this->options, $i1)->name === $name) {
							return _hx_array_get($this->options, $i1)->content;
						}
						unset($i1);
					}
				}
			}
		}
		return $this->defaultOption($name);
	}
	public function isCalcmeOption($name) {
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_CalcDocumentTools::$options->length;
			while($_g1 < $_g) {
				$i = $_g1++;
				$opt = com_wiris_quizzes_impl_CalcDocumentTools::$options[$i];
				if($opt === $name) {
					return true;
				}
				unset($opt,$i);
			}
		}
		return false;
	}
	public function getCalcDocument() {
		if($this->calcDocument === null) {
			$this->calcDocument = new com_wiris_quizzes_impl_CalcDocumentTools($this->wirisCasSession);
		}
		return $this->calcDocument;
	}
	public function hasCalcmeSessionWithOptions() {
		return com_wiris_quizzes_impl_HTMLTools::isCalc($this->wirisCasSession) && $this->getCalcDocument()->hasQuizzesQuestionOptions();
	}
	public function setOption($name, $value) {
		$this->id = null;
		if($value === null) {
			$this->removeOption($name);
		} else {
			if($this->hasCalcmeSessionWithOptions() && $this->isCalcmeOption($name)) {
				$this->wirisCasSession = $this->getCalcDocument()->setOption($name, $value);
			} else {
				if($this->isImplicitOption($name, $value)) {
					$this->removeOption($name);
				} else {
					if($this->options === null) {
						$this->options = new _hx_array(array());
					}
					$opt = new com_wiris_quizzes_impl_Option();
					$opt->name = $name;
					$opt->content = $value;
					$opt->type = com_wiris_quizzes_impl_MathContent::$TYPE_TEXT;
					$i = null;
					$found = false;
					{
						$_g1 = 0; $_g = $this->options->length;
						while($_g1 < $_g) {
							$i1 = $_g1++;
							if(_hx_array_get($this->options, $i1)->name === $name) {
								$this->options[$i1] = $opt;
								$found = true;
							}
							unset($i1);
						}
					}
					if(!$found) {
						$this->options->push($opt);
					}
				}
			}
		}
	}
	public function setParametrizedAssertion($name, $correctAnswer, $userAnswer, $parameters) {
		$this->id = null;
		if($this->assertions === null) {
			$this->assertions = new _hx_array(array());
		}
		$a = new com_wiris_quizzes_impl_Assertion();
		$a->name = $name;
		$a->setCorrectAnswer($correctAnswer);
		$a->setAnswer($userAnswer);
		$names = com_wiris_quizzes_impl_Assertion::getParameterNames($name);
		if($parameters !== null && $names !== null) {
			$a->parameters = new _hx_array(array());
			$n = com_wiris_quizzes_impl_QuestionImpl_3($this, $a, $correctAnswer, $name, $names, $parameters, $userAnswer);
			$i = null;
			{
				$_g = 0;
				while($_g < $n) {
					$i1 = $_g++;
					if($parameters[$i1] !== null) {
						$ap = new com_wiris_quizzes_impl_AssertionParam();
						$ap->name = $names[$i1];
						$ap->content = $parameters[$i1];
						$ap->type = com_wiris_quizzes_impl_MathContent::$TYPE_TEXT;
						$a->parameters->push($ap);
						unset($ap);
					}
					unset($i1);
				}
			}
		}
		$index = $this->getAssertionIndex($name, $correctAnswer, $userAnswer);
		if($index === -1) {
			$this->assertions->push($a);
		} else {
			$this->assertions[$index] = $a;
		}
	}
	public function removeAssertion($name, $correctAnswer, $userAnswer) {
		$this->id = null;
		if($this->assertions !== null) {
			$i = $this->assertions->length - 1;
			while($i >= 0) {
				$a = $this->assertions[$i];
				if($a->name === $name && $a->getCorrectAnswer() === $correctAnswer && $a->getAnswer() === $userAnswer) {
					$this->assertions->remove($a);
				}
				$i--;
				unset($a);
			}
		}
	}
	public function setAssertion($name, $correctAnswer, $userAnswer) {
		$this->setParametrizedAssertion($name, "" . _hx_string_rec($correctAnswer, ""), "" . _hx_string_rec($userAnswer, ""), null);
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function newInstance() {
		return new com_wiris_quizzes_impl_QuestionImpl();
	}
	public function onSerialize($s) {
		$s->beginTag(com_wiris_quizzes_impl_QuestionImpl::$TAGNAME);
		$this->id = $s->cacheAttribute("id", $this->id, null);
		$this->wirisCasSession = $s->childString("wirisCasSession", $this->wirisCasSession, null);
		$this->correctAnswers = $s->serializeArrayName($this->correctAnswers, "correctAnswers");
		$this->assertions = $s->serializeArrayName($this->assertions, "assertions");
		$this->options = $s->serializeArrayName($this->options, "options");
		$this->localData = $s->serializeArrayName($this->localData, "localData");
		$this->subquestions = $s->serializeArrayName($this->subquestions, "subquestions");
		$s->endTag();
	}
	public $calcDocument;
	public $subquestions;
	public $localData;
	public $options;
	public $assertions;
	public $correctAnswers;
	public $wirisCasSession;
	public $id;
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
	static $defaultOptions = null;
	static $TAGNAME = "question";
	static $NO_DEPRECATED = 0;
	static $DEPRECATED_COMPATIBLE = 1;
	static $DEPRECATED_NEEDS_CHECK = 2;
	static function getDefaultOptions() {
		$dopt = new Hash();
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_EXPONENTIAL_E, "e");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMAGINARY_UNIT, "i");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_IMPLICIT_TIMES_OPERATOR, "false");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_NUMBER_PI, com_wiris_quizzes_impl_QuestionImpl_4($dopt));
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION, "4");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_RELATIVE_TOLERANCE, "true");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TIMES_OPERATOR, com_wiris_quizzes_impl_QuestionImpl_5($dopt));
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE, "0.001");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE_DIGITS, "false");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT, "mg");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR, ".");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DIGIT_GROUP_SEPARATOR, "");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER, "false");
		$dopt->set(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER_NAME, "answer");
		return $dopt;
	}
	static function syntacticAssertionToURL($a) {
		$sb = new StringBuf();
		if($a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_MATH) {
			$sb->add("Math");
		} else {
			if($a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION) {
				$sb->add("Expression");
			} else {
				if($a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_QUANTITY) {
					$sb->add("Quantity");
				} else {
					if($a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_STRING) {
						$sb->add("String");
					} else {
						if($a->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_LIST) {
							$sb->add("List");
						}
					}
				}
			}
		}
		if($a->parameters !== null && $a->parameters->length > 0) {
			$sb->add("?");
			$i = null;
			{
				$_g1 = 0; $_g = $a->parameters->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$p = $a->parameters[$i1];
					if($i1 > 0) {
						$sb->add("&");
					}
					$sb->add(rawurlencode($p->name));
					$sb->add("=");
					$sb->add(rawurlencode($p->content));
					unset($p,$i1);
				}
			}
		}
		return $sb->b;
	}
	function __toString() { return 'com.wiris.quizzes.impl.QuestionImpl'; }
}
function com_wiris_quizzes_impl_QuestionImpl_0(&$»this) {
	if($»this->assertions === null) {
		return 0;
	} else {
		return $»this->assertions->length;
	}
}
function com_wiris_quizzes_impl_QuestionImpl_1(&$»this) {
	if($»this->subquestions === null) {
		return 0;
	} else {
		return $»this->subquestions->length;
	}
}
function com_wiris_quizzes_impl_QuestionImpl_2(&$»this) {
	if($»this->correctAnswers === null) {
		return 0;
	} else {
		return $»this->correctAnswers->length;
	}
}
function com_wiris_quizzes_impl_QuestionImpl_3(&$»this, &$a, &$correctAnswer, &$name, &$names, &$parameters, &$userAnswer) {
	if($parameters->length < $names->length) {
		return $parameters->length;
	} else {
		return $names->length;
	}
}
function com_wiris_quizzes_impl_QuestionImpl_4(&$dopt) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(960);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_QuestionImpl_5(&$dopt) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(183);
		return $s->toString();
	}
}
