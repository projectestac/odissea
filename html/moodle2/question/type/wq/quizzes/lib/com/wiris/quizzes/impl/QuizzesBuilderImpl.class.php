<?php

class com_wiris_quizzes_impl_QuizzesBuilderImpl extends com_wiris_quizzes_api_QuizzesBuilder {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public function getLockProvider() {
		if($this->locker === null) {
			$className = $this->getConfiguration()->get(com_wiris_quizzes_impl_ConfigurationImpl::$LOCKPROVIDER_CLASS);
			if(!($className === "")) {
				$this->locker = Type::createInstance(Type::resolveClass($className), new _hx_array(array()));
			} else {
				$this->locker = new com_wiris_quizzes_impl_FileLockProvider($this->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$CACHE_DIR));
			}
		}
		return $this->locker;
	}
	public function getVariablesCache() {
		if($this->variablesCache === null) {
			$this->variablesCache = $this->createCache(com_wiris_quizzes_impl_ConfigurationImpl::$VARIABLESCACHE_CLASS);
		}
		return $this->variablesCache;
	}
	public function getImagesCache() {
		if($this->imagesCache === null) {
			$this->imagesCache = $this->createCache(com_wiris_quizzes_impl_ConfigurationImpl::$IMAGESCACHE_CLASS);
		}
		return $this->imagesCache;
	}
	public function createCache($configKey) {
		$cache = null;
		$className = $this->getConfiguration()->get($configKey);
		if(!($className === "")) {
			$cache = Type::createInstance(Type::resolveClass($className), new _hx_array(array()));
		} else {
			$cache = $this->newStoreCache();
		}
		return $cache;
	}
	public function newStoreCache() {
		return new com_wiris_util_sys_StoreCache($this->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$CACHE_DIR));
	}
	public function getResourceUrl($name) {
		$c = $this->getConfiguration();
		if("true" === $c->get(com_wiris_quizzes_api_ConfigurationKeys::$RESOURCES_STATIC)) {
			return $c->get(com_wiris_quizzes_api_ConfigurationKeys::$RESOURCES_URL) . "/" . $name;
		} else {
			return $c->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=resource&name=" . $name;
		}
	}
	public function getPairings($c, $u) {
		$p = new _hx_array(array());
		$reverse = null;
		if($c >= $u) {
			$reverse = false;
		} else {
			$aux = $c;
			$c = $u;
			$u = $aux;
			$reverse = true;
		}
		if($u === 0) {
			return $p;
		}
		$n = Math::floor($c / $u);
		$d = Math::floor(_hx_mod($c, $u));
		$i = null;
		$cc = 0;
		$cu = 0;
		{
			$_g = 0;
			while($_g < $u) {
				$i1 = $_g++;
				$j = null;
				{
					$_g1 = 0;
					while($_g1 < $n) {
						$j1 = $_g1++;
						$p->push(new _hx_array(array((($reverse) ? $cu : $cc), (($reverse) ? $cc : $cu))));
						$cc++;
						unset($j1);
					}
					unset($_g1);
				}
				if($i1 < $d) {
					$p->push(new _hx_array(array((($reverse) ? $cu : $cc), (($reverse) ? $cc : $cu))));
					$cc++;
				}
				$cu++;
				unset($j,$i1);
			}
		}
		return $p;
	}
	public function getSerializer() {
		$s = new com_wiris_util_xml_XmlSerializer();
		$s->register(new com_wiris_quizzes_impl_Answer());
		$s->register(new com_wiris_quizzes_impl_Assertion());
		$s->register(new com_wiris_quizzes_impl_AssertionCheckImpl());
		$s->register(new com_wiris_quizzes_impl_AssertionParam());
		$s->register(new com_wiris_quizzes_impl_CorrectAnswer());
		$s->register(new com_wiris_quizzes_impl_LocalData());
		$s->register(new com_wiris_quizzes_impl_MathContent());
		$s->register(new com_wiris_quizzes_impl_MultipleQuestionRequest());
		$s->register(new com_wiris_quizzes_impl_MultipleQuestionResponse());
		$s->register(new com_wiris_quizzes_impl_Option());
		$s->register(new com_wiris_quizzes_impl_ProcessGetCheckAssertions());
		$s->register(new com_wiris_quizzes_impl_ProcessGetTranslation());
		$s->register(new com_wiris_quizzes_impl_ProcessGetVariables());
		$s->register(new com_wiris_quizzes_impl_ProcessStoreQuestion());
		$s->register(new com_wiris_quizzes_impl_QuestionImpl());
		$s->register(new com_wiris_quizzes_impl_QuestionRequestImpl());
		$s->register(new com_wiris_quizzes_impl_QuestionResponseImpl());
		$s->register(new com_wiris_quizzes_impl_QuestionInstanceImpl());
		$s->register(new com_wiris_quizzes_impl_ResultError());
		$s->register(new com_wiris_quizzes_impl_ResultErrorLocation());
		$s->register(new com_wiris_quizzes_impl_ResultGetCheckAssertions());
		$s->register(new com_wiris_quizzes_impl_ResultGetTranslation());
		$s->register(new com_wiris_quizzes_impl_ResultGetVariables());
		$s->register(new com_wiris_quizzes_impl_ResultStoreQuestion());
		$s->register(new com_wiris_quizzes_impl_TranslationNameChange());
		$s->register(new com_wiris_quizzes_impl_UserData());
		$s->register(new com_wiris_quizzes_impl_Variable());
		return $s;
	}
	public function removeHandAnnotations($mathml) {
		$conf = $this->getConfiguration();
		if(!($conf->get(com_wiris_quizzes_api_ConfigurationKeys::$HAND_LOGTRACES) === "true") || _hx_index_of($conf->get(com_wiris_quizzes_api_ConfigurationKeys::$SERVICE_URL), "www.wiris.net", null) === -1) {
			return com_wiris_util_xml_MathMLUtils::removeStrokesAnnotation($mathml);
		}
		return $mathml;
	}
	public function newMultipleResponseFromXml($xml) {
		$s = $this->getSerializer();
		$elem = $s->read($xml);
		$mqr = null;
		$tag = $s->getTagName($elem);
		if($tag === com_wiris_quizzes_impl_QuestionResponseImpl::$tagName) {
			$res = $elem;
			$mqr = new com_wiris_quizzes_impl_MultipleQuestionResponse();
			$mqr->questionResponses = new _hx_array(array());
			$mqr->questionResponses->push($res);
		} else {
			if($tag === com_wiris_quizzes_impl_MultipleQuestionResponse::$tagName) {
				$mqr = $elem;
			} else {
				throw new HException("Unexpected XML root tag " . $tag . ".");
			}
		}
		return $mqr;
	}
	public function newResponseFromXml($xml) {
		$mqr = $this->newMultipleResponseFromXml($xml);
		return $mqr->questionResponses[0];
	}
	public function newRequestFromXml($xml) {
		$s = $this->getSerializer();
		$elem = $s->read($xml);
		$req = null;
		$tag = $s->getTagName($elem);
		if($tag === com_wiris_quizzes_impl_QuestionRequestImpl::$tagName) {
			$req = $elem;
		} else {
			if($tag === com_wiris_quizzes_impl_MultipleQuestionRequest::$tagName) {
				$mqr = $elem;
				$req = $mqr->questionRequests[0];
			} else {
				throw new HException("Unexpected XML root tag " . $tag . ".");
			}
		}
		return $req;
	}
	public function newTranslationRequest($q, $lang) {
		$r = new com_wiris_quizzes_impl_QuestionRequestImpl();
		$r->question = $q;
		$p = new com_wiris_quizzes_impl_ProcessGetTranslation();
		$p->lang = $lang;
		$r->addProcess($p);
		return $r;
	}
	public function breakCompoundAnswers($q, $u) {
		$assertions = new _hx_array(array());
		$correctAnswers = new _hx_array(array());
		$userAnswers = new _hx_array(array());
		$aux = new _hx_array(array());
		$i = null;
		{
			$_g1 = 0; $_g = $q->correctAnswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = $q->correctAnswers[$i1];
				$parts = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($c);
				$aux[$c->id] = $parts->length;
				$j = null;
				{
					$_g3 = 0; $_g2 = $parts->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$cc = new com_wiris_quizzes_impl_CorrectAnswer();
						$cc->type = $c->type;
						$cc->id = 1000 + $c->id * 1000 + $j1;
						$cc->content = $parts[$j1][1];
						$cc->weight = 1.0 / $parts->length;
						$correctAnswers->push($cc);
						unset($j1,$cc);
					}
					unset($_g3,$_g2);
				}
				unset($parts,$j,$i1,$c);
			}
		}
		{
			$_g1 = 0; $_g = $u->answers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$a = $u->answers[$i1];
				$parts = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($a);
				$j = null;
				{
					$_g3 = 0; $_g2 = $parts->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$ca = new com_wiris_quizzes_impl_Answer();
						$ca->id = 1000 + $a->id * 1000 + $j1;
						$ca->set($parts[$j1][1]);
						$userAnswers->push($ca);
						unset($j1,$ca);
					}
					unset($_g3,$_g2);
				}
				unset($parts,$j,$i1,$a);
			}
		}
		{
			$_g1 = 0; $_g = $q->assertions->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$a = $q->assertions[$i1];
				$n = $aux[$a->getCorrectAnswer()];
				$j = null;
				{
					$_g2 = 0;
					while($_g2 < $n) {
						$j1 = $_g2++;
						$ca = new com_wiris_quizzes_impl_Assertion();
						$ca->name = $a->name;
						$ca->parameters = $a->parameters;
						$assertions->push($ca);
						if($a->name === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION) {
							$caa = new _hx_array(array());
							$aa = new _hx_array(array());
							$k = null;
							{
								$_g3 = 0;
								while($_g3 < $n) {
									$k1 = $_g3++;
									$caa[$k1] = 1000 + $a->getCorrectAnswer() * 1000 + $k1;
									$aa[$k1] = 1000 + $a->getAnswer() * 1000 + $k1;
									unset($k1);
								}
								unset($_g3);
							}
							$ca->setCorrectAnswers($caa);
							$ca->setAnswers($aa);
							break;
							unset($k,$caa,$aa);
						} else {
							$ca->setCorrectAnswer(1000 + $a->getCorrectAnswer() * 1000 + $j1);
							$ca->setAnswer(1000 + $a->getAnswer() * 1000 + $j1);
						}
						unset($j1,$ca);
					}
					unset($_g2);
				}
				unset($n,$j,$i1,$a);
			}
		}
		$q->correctAnswers = $correctAnswers;
		$q->assertions = $assertions;
		$u->answers = $userAnswers;
	}
	public function newFeedbackRequest($html, $question, $instance) {
		$r = $this->newEvalMultipleAnswersRequest(null, null, $question, $instance);
		$qr = $r;
		$qi = $instance;
		$this->setVariables($html, $qi, $qr);
		return $r;
	}
	public function newEvalMultipleAnswersRequest($correctAnswers, $userAnswers, $question, $instance) {
		$q = null;
		$qi = null;
		if($question !== null) {
			$q = _hx_deref(($question))->getImpl();
		}
		if($instance !== null) {
			$qi = $instance;
		}
		$qq = new com_wiris_quizzes_impl_QuestionImpl();
		if($q !== null) {
			$qq->wirisCasSession = $q->wirisCasSession;
			$qq->options = $q->options;
		}
		$i = null;
		$k = null;
		$qq->assertions = new _hx_array(array());
		if($q !== null && $q->assertions !== null && $q->assertions->length > 0) {
			$_g1 = 0; $_g = $q->assertions->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$qq->assertions->push($q->assertions[$i1]);
				unset($i1);
			}
		}
		$uu = new com_wiris_quizzes_impl_UserData();
		if($qi !== null && $qi->userData !== null) {
			$uu->randomSeed = $qi->userData->randomSeed;
		} else {
			$qqi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
			$uu->randomSeed = $qqi->userData->randomSeed;
		}
		if($correctAnswers !== null) {
			$_g1 = 0; $_g = $correctAnswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$value = $correctAnswers[$i1];
				if($value === null) {
					$value = "";
				}
				$qq->setCorrectAnswer($i1, $value);
				unset($value,$i1);
			}
		} else {
			if($q !== null) {
				$_g1 = 0; $_g = $q->getCorrectAnswersLength();
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$ca = $q->getCorrectAnswer($i1);
					if($ca !== null) {
						$qq->setCorrectAnswer($i1, $ca);
						_hx_array_get($qq->correctAnswers, $i1)->weight = _hx_array_get($q->correctAnswers, $i1)->weight;
					}
					unset($i1,$ca);
				}
			}
		}
		{
			$_g1 = 0; $_g = $qq->getCorrectAnswersLength();
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$ca = $qq->correctAnswers[$i1];
				if($ca !== null && $ca->content !== null) {
					$ca->content = com_wiris_util_xml_MathMLUtils::removeStrokesAnnotation($ca->content);
				}
				unset($i1,$ca);
			}
		}
		if($userAnswers !== null) {
			$_g1 = 0; $_g = $userAnswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$uu->setUserAnswer($i1, $userAnswers[$i1]);
				unset($i1);
			}
		} else {
			if($qi !== null) {
				$_g1 = 0; $_g = $qi->getStudentAnswersLength();
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$sa = $qi->getStudentAnswer($i1);
					if($sa !== null) {
						$uu->setUserAnswer($i1, $sa);
					}
					unset($sa,$i1);
				}
			}
		}
		if($uu->answers === null) {
			$uu->answers = new _hx_array(array());
		}
		{
			$_g1 = 0; $_g = $uu->answers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($uu->answers[$i1] === null || _hx_array_get($uu->answers, $i1)->content === null) {
					$uu->setUserAnswer($i1, "");
				} else {
					$uu->setUserAnswer($i1, $this->removeHandAnnotations(_hx_array_get($uu->answers, $i1)->content));
				}
				unset($i1);
			}
		}
		if($qq->assertions === null) {
			$qq->assertions = new _hx_array(array());
		}
		$syntax = null;
		{
			$_g1 = 0; $_g = $qq->assertions->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_array_get($qq->assertions, $i1)->isSyntactic()) {
					$syntax = $qq->assertions[$i1];
				}
				unset($i1);
			}
		}
		if($syntax === null) {
			$syntax = new com_wiris_quizzes_impl_Assertion();
			$syntax->addCorrectAnswer(0);
			$syntax->name = com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION;
			$qq->assertions->push($syntax);
		}
		{
			$_g1 = 0; $_g = $uu->answers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$foundSyntax = false;
				{
					$_g3 = 0; $_g2 = $qq->assertions->length;
					while($_g3 < $_g2) {
						$k1 = $_g3++;
						$ass = $qq->assertions[$k1];
						if($ass->isSyntactic() && com_wiris_util_type_Arrays::containsInt($ass->getAnswers(), $i1)) {
							$foundSyntax = true;
						}
						unset($k1,$ass);
					}
					unset($_g3,$_g2);
				}
				if(!$foundSyntax) {
					$syntax->addAnswer($i1);
				}
				unset($i1,$foundSyntax);
			}
		}
		if($qi !== null && $qi->hasVariables()) {
			$_g1 = 0; $_g = $qq->getCorrectAnswersLength();
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$value = $qq->getCorrectAnswer($i1);
				if(com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_PLAIN_TEXT === $q->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD) || $syntax->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_STRING) {
					$value = $qi->expandVariablesText($value);
				} else {
					$value = $qi->expandVariablesMathMLEval($value);
				}
				$qq->setCorrectAnswer($i1, $value);
				unset($value,$i1);
			}
		}
		$equivall = new _hx_array(array());
		$i = $qq->assertions->length - 1;
		while($i >= 0) {
			if(_hx_array_get($qq->assertions, $i)->name === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_ALL) {
				$correctanswer = _hx_array_get($qq->assertions, $i)->getCorrectAnswer();
				$j = $qq->assertions->length - 1;
				while($j >= 0) {
					if(_hx_array_get($qq->assertions, $j)->isSyntactic()) {
						_hx_array_get($qq->assertions, $j)->removeCorrectAnswer($correctanswer);
						if(_hx_array_get($qq->assertions, $j)->getCorrectAnswers()->length === 0) {
							$qq->assertions->remove($qq->assertions[$j]);
							if($j < $i) {
								$i--;
							}
						}
					}
					$j--;
				}
				unset($j,$correctanswer);
			}
			$i--;
		}
		$usedcorrectanswers = new _hx_array(array());
		{
			$_g1 = 0; $_g = $qq->getCorrectAnswersLength();
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$usedcorrectanswers[$i1] = false;
				unset($i1);
			}
		}
		$usedanswers = new _hx_array(array());
		{
			$_g1 = 0; $_g = $uu->answers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$usedanswers[$i1] = false;
				unset($i1);
			}
		}
		{
			$_g1 = 0; $_g = $qq->assertions->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$ass = $qq->assertions[$i1];
				if($ass->isEquivalence()) {
					$usedcorrectanswers[$ass->getCorrectAnswer()] = true;
					$usedanswers[$ass->getAnswer()] = true;
				} else {
					if($ass->isCheck()) {
						$usedanswers[$ass->getAnswer()] = true;
					}
				}
				unset($i1,$ass);
			}
		}
		$pairs = $this->getPairings($qq->getCorrectAnswersLength(), $uu->answers->length);
		{
			$_g1 = 0; $_g = $usedcorrectanswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!$usedcorrectanswers[$i1]) {
					$_g3 = 0; $_g2 = $pairs->length;
					while($_g3 < $_g2) {
						$k1 = $_g3++;
						if($pairs[$k1][0] === $i1) {
							$user = $pairs[$k1][1];
							$qq->setAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, $i1, $user);
							$usedanswers[$user] = true;
							unset($user);
						}
						unset($k1);
					}
					unset($_g3,$_g2);
				}
				unset($i1);
			}
		}
		{
			$_g1 = 0; $_g = $usedanswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!$usedanswers[$i1]) {
					$_g3 = 0; $_g2 = $pairs->length;
					while($_g3 < $_g2) {
						$k1 = $_g3++;
						if($pairs[$k1][1] === $i1) {
							$qq->setAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, $pairs[$k1][0], $i1);
						}
						unset($k1);
					}
					unset($_g3,$_g2);
				}
				unset($i1);
			}
		}
		if($q !== null && $q->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER) === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_TRUE) {
			$this->breakCompoundAnswers($qq, $uu);
		}
		$qr = new com_wiris_quizzes_impl_QuestionRequestImpl();
		$qr->question = $qq;
		$qr->userData = $uu;
		$qr->checkAssertions();
		return $qr;
	}
	public function newEvalRequest($correctAnswer, $userAnswer, $q, $qi) {
		$correctAnswers = (($correctAnswer === null) ? null : new _hx_array(array($correctAnswer)));
		$userAnswers = (($userAnswer === null) ? null : new _hx_array(array($userAnswer)));
		return $this->newEvalMultipleAnswersRequest($correctAnswers, $userAnswers, $q, $qi);
	}
	public function extractQuestionInstanceVariableNames($qi) {
		$vars = new _hx_array(array());
		$i = $qi->variables->keys();
		while($i->hasNext()) {
			$h = $qi->variables->get($i->next());
			$j = $h->keys();
			while($j->hasNext()) {
				com_wiris_quizzes_impl_HTMLTools::insertStringInSortedArray($j->next(), $vars);
			}
			unset($j,$h);
		}
		return com_wiris_quizzes_impl_HTMLTools::toNativeArray($vars);
	}
	public function getConfiguration() {
		return com_wiris_quizzes_impl_ConfigurationImpl::getInstance();
	}
	public function setVariables($html, $qi, $qr) {
		$variables = null;
		if($html === null) {
			$variables = $this->extractQuestionInstanceVariableNames($qi);
		} else {
			$h = new com_wiris_quizzes_impl_HTMLTools();
			$variables = $h->extractVariableNames($html);
		}
		if($variables->length > 0) {
			$qr->variables($variables, com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
			$qr->variables($variables, com_wiris_quizzes_impl_MathContent::$TYPE_MATHML);
		}
	}
	public function newVariablesRequest($html, $question, $instance) {
		if($question === null) {
			throw new HException("Question q cannot be null.");
		}
		$q = $question;
		$qi = null;
		if($instance !== null) {
			$qi = $instance;
		}
		if($qi === null || $qi->userData === null) {
			$qi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
		}
		$qr = new com_wiris_quizzes_impl_QuestionRequestImpl();
		$qr->question = $q;
		$qr->userData = $qi->userData;
		$this->setVariables($html, $qi, $qr);
		return $qr;
	}
	public function readQuestionInstance($xml) {
		$s = $this->getSerializer();
		$elem = $s->read($xml);
		$tag = $s->getTagName($elem);
		if(!($tag === "questionInstance")) {
			throw new HException("Unexpected root tag " . $tag . ". Expected questionInstance.");
		}
		return $elem;
	}
	public function readQuestion($xml) {
		return new com_wiris_quizzes_impl_QuestionLazy($xml);
	}
	public function getMathFilter() {
		return new com_wiris_quizzes_impl_MathMLFilter();
	}
	public function getQuizzesService() {
		return new com_wiris_quizzes_impl_QuizzesServiceImpl();
	}
	public function newQuestionInstanceImpl($question) {
		$qi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
		if($question !== null) {
			$q = _hx_deref(($question))->getImpl();
			$type = $q->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD);
			if($type === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_EDITOR || $type === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_POPUP_EDITOR || $type === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_INLINE_HAND) {
				$qi->setHandwritingConstraints($question);
			}
			if("," === $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR) || "," === $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DIGIT_GROUP_SEPARATOR) && StringTools::startsWith($q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT), ",")) {
				$qi->setLocalData(com_wiris_quizzes_impl_LocalData::$KEY_ITEM_SEPARATOR, ";");
			}
		}
		return $qi;
	}
	public function newQuestion() {
		$q = new com_wiris_quizzes_impl_QuestionImpl();
		return $q;
	}
	public function getQuizzesUIBuilder() {
		if($this->uibuilder === null) {
			$this->uibuilder = new com_wiris_quizzes_impl_QuizzesUIBuilderImpl();
		}
		return $this->uibuilder;
	}
	public $locker;
	public $imagesCache;
	public $variablesCache;
	public $uibuilder = null;
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
	static $singleton = null;
	static function getInstance() {
		if(com_wiris_quizzes_impl_QuizzesBuilderImpl::$singleton === null) {
			com_wiris_quizzes_impl_QuizzesBuilderImpl::$singleton = new com_wiris_quizzes_impl_QuizzesBuilderImpl();
		}
		return com_wiris_quizzes_impl_QuizzesBuilderImpl::$singleton;
	}
	function __toString() { return 'com.wiris.quizzes.impl.QuizzesBuilderImpl'; }
}
