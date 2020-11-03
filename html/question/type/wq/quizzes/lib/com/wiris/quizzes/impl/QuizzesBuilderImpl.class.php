<?php

class com_wiris_quizzes_impl_QuizzesBuilderImpl extends com_wiris_quizzes_api_QuizzesBuilder {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public function addInterestingLocalDataToRequest($q, $qi, $qr) {
		$sb = new StringBuf();
		$localDataQ = com_wiris_quizzes_impl_QuizzesBuilderImpl_0($this, $q, $qi, $qr, $sb);
		$localDataQI = com_wiris_quizzes_impl_QuizzesBuilderImpl_1($this, $localDataQ, $q, $qi, $qr, $sb);
		$localData = null;
		if($localDataQ === null && $localDataQI === null) {
			return;
		} else {
			if($localDataQ === null) {
				$localData = $localDataQI;
			} else {
				if($localDataQI === null) {
					$localData = $localDataQ;
				} else {
					$localData = $localDataQ->concat($localDataQI);
				}
			}
		}
		{
			$_g = 0;
			while($_g < $localData->length) {
				$ld = $localData[$_g];
				++$_g;
				if(com_wiris_util_type_Arrays::containsArray(com_wiris_quizzes_impl_QuizzesBuilderImpl::$INTERESTING_LOCAL_DATA_NAME_AND_VALUE, $ld->name)) {
					if(strlen($sb->b) > 0) {
						$sb->add(",");
					}
					$sb->add($ld->name . "=" . $ld->value);
				} else {
					if(com_wiris_util_type_Arrays::containsArray(com_wiris_quizzes_impl_QuizzesBuilderImpl::$INTERESTING_LOCAL_DATA_ONLY_NAME, $ld->name) && $ld->value !== null && strlen($ld->value) > 0) {
						if(strlen($sb->b) > 0) {
							$sb->add(",");
						}
						$sb->add($ld->name . "=true");
					}
				}
				unset($ld);
			}
		}
		if(strlen($sb->b) > 0) {
			$qr->addMetaProperty("wrs-local-data", $sb->b);
		}
	}
	public function newFeaturedAssertionsRequest($question) {
		if($question === null) {
			throw new HException("Question cannot be null.");
		}
		$q = $question;
		$qr = new com_wiris_quizzes_impl_QuestionRequestImpl();
		$qr->question = $this->removeSubquestions($q);
		$this->addInterestingLocalDataToRequest($question, null, $qr);
		$qr->addProcess(new com_wiris_quizzes_impl_ProcessGetFeaturedAssertions());
		return $qr;
	}
	public function newFeaturedSyntaxAssertionsRequest($question) {
		if($question === null) {
			throw new HException("Question cannot be null.");
		}
		$q = $question;
		$qr = new com_wiris_quizzes_impl_QuestionRequestImpl();
		$qr->question = $this->removeSubquestions($q);
		$qr->addProcess(new com_wiris_quizzes_impl_ProcessGetFeaturedSyntaxAssertions());
		$this->addInterestingLocalDataToRequest($question, null, $qr);
		return $qr;
	}
	public function getAccessProvider() {
		if($this->accessProvider === null) {
			$classpath = $this->getConfiguration()->get(com_wiris_quizzes_impl_ConfigurationImpl::$ACCESSPROVIDER_CLASSPATH);
			if(!($classpath === "")) {
				com_wiris_quizzes_impl_ClasspathLoader::load($classpath);
			}
			$className = $this->getConfiguration()->get(com_wiris_quizzes_impl_ConfigurationImpl::$ACCESSPROVIDER_CLASS);
			if(!($className === "")) {
				$this->accessProvider = Type::createInstance(Type::resolveClass($className), new _hx_array(array()));
			}
		}
		return $this->accessProvider;
	}
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
		$version = $c->get(com_wiris_quizzes_api_ConfigurationKeys::$VERSION);
		if("true" === $c->get(com_wiris_quizzes_api_ConfigurationKeys::$RESOURCES_STATIC)) {
			return $c->get(com_wiris_quizzes_api_ConfigurationKeys::$RESOURCES_URL) . "/" . $name . "?v=" . $version;
		} else {
			return $c->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=resource&name=" . $name . "&v=" . $version;
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
		$n = intval($c / $u);
		$d = intval(_hx_mod($c, $u));
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
		$s->register(new com_wiris_quizzes_impl_ProcessGetFeaturedAssertions());
		$s->register(new com_wiris_quizzes_impl_ProcessGetFeaturedSyntaxAssertions());
		$s->register(new com_wiris_quizzes_impl_ProcessGetTranslation());
		$s->register(new com_wiris_quizzes_impl_ProcessGetVariables());
		$s->register(new com_wiris_quizzes_impl_ProcessStoreQuestion());
		$s->register(new com_wiris_quizzes_impl_QuestionImpl());
		$s->register(new com_wiris_quizzes_impl_QuestionRequestImpl());
		$s->register(new com_wiris_quizzes_impl_QuestionResponseImpl());
		$s->register(new com_wiris_quizzes_impl_SubQuestion(0));
		$s->register(new com_wiris_quizzes_impl_QuestionInstanceImpl());
		$s->register(new com_wiris_quizzes_impl_SubQuestionInstance(0));
		$s->register(new com_wiris_quizzes_impl_ResultError());
		$s->register(new com_wiris_quizzes_impl_ResultErrorLocation());
		$s->register(new com_wiris_quizzes_impl_ResultGetCheckAssertions());
		$s->register(new com_wiris_quizzes_impl_ResultGetTranslation());
		$s->register(new com_wiris_quizzes_impl_ResultGetVariables());
		$s->register(new com_wiris_quizzes_impl_ResultStoreQuestion());
		$s->register(new com_wiris_quizzes_impl_ResultGetFeaturedSyntaxAssertions());
		$s->register(new com_wiris_quizzes_impl_ResultGetFeaturedAssertions());
		$s->register(new com_wiris_quizzes_impl_TranslationNameChange());
		$s->register(new com_wiris_quizzes_impl_UserData());
		$s->register(new com_wiris_quizzes_impl_Variable());
		$s->register(new com_wiris_quizzes_impl_Parameter());
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
		$r->question = $this->removeSubquestions($q);
		$p = new com_wiris_quizzes_impl_ProcessGetTranslation();
		$p->lang = $lang;
		$r->addProcess($p);
		return $r;
	}
	public function removeSubquestions($q) {
		$qi = $q->getImpl();
		if($qi === null || $qi->subquestions === null || $qi->subquestions->length === 0) {
			return $qi;
		}
		$qq = new com_wiris_quizzes_impl_QuestionImpl();
		$qq->id = $qi->id;
		$qq->wirisCasSession = $qi->wirisCasSession;
		$qq->options = $qi->options;
		$qq->localData = $qi->localData;
		$qq->correctAnswers = $qi->correctAnswers;
		$qq->assertions = $qi->assertions;
		return $qq;
	}
	public function newFeedbackRequest($html, $question, $instance) {
		$r = $this->newEvalMultipleAnswersRequest(null, null, $question, $instance);
		$qr = $r;
		$qi = $instance;
		$this->setVariables($html, $question, $qi, $qr);
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
		$uu = new com_wiris_quizzes_impl_UserData();
		$uu->answers = new _hx_array(array());
		if($q !== null) {
			$qq->wirisCasSession = $q->wirisCasSession;
			$qq->options = $q->options;
		}
		if($qi !== null && $qi->userData !== null) {
			$uu->randomSeed = $qi->userData->randomSeed;
			$uu->parameters = $qi->userData->parameters;
		} else {
			$qqi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
			$uu->randomSeed = $qqi->userData->randomSeed;
		}
		$i = 0;
		if($correctAnswers !== null) {
			$_g1 = 0; $_g = $correctAnswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$value = com_wiris_util_xml_MathMLUtils::removeStrokesAnnotation($correctAnswers[$i1]);
				if($value === null) {
					$value = "";
				}
				$qq->setCorrectAnswer($i1, $value);
				unset($value,$i1);
			}
		}
		if($userAnswers !== null) {
			$_g1 = 0; $_g = $userAnswers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$uu->setUserAnswer($i1, $this->removeHandAnnotations($userAnswers[$i1]));
				unset($i1);
			}
		}
		$qq->assertions = new _hx_array(array());
		$i = -1;
		$lastCaNum = $qq->getCorrectAnswersLength();
		$lastUaNum = $uu->answers->length;
		$lastAssNum = 0;
		while($i < 0 || $q !== null && $q->subquestions !== null && $i < $q->subquestions->length || ($i < 0 || $qi !== null && $qi->subinstances !== null && $i < $qi->subinstances->length)) {
			$qa = null;
			if($q !== null) {
				$qa = com_wiris_quizzes_impl_QuizzesBuilderImpl_2($this, $correctAnswers, $i, $instance, $lastAssNum, $lastCaNum, $lastUaNum, $q, $qa, $qi, $qq, $question, $userAnswers, $uu);
			}
			$ua = null;
			if($qi !== null) {
				$ua = com_wiris_quizzes_impl_QuizzesBuilderImpl_3($this, $correctAnswers, $i, $instance, $lastAssNum, $lastCaNum, $lastUaNum, $q, $qa, $qi, $qq, $question, $ua, $userAnswers, $uu);
			}
			$step = com_wiris_quizzes_impl_QuizzesBuilderImpl_4($this, $correctAnswers, $i, $instance, $lastAssNum, $lastCaNum, $lastUaNum, $q, $qa, $qi, $qq, $question, $ua, $userAnswers, $uu);
			$j = null;
			if($correctAnswers === null && $qa !== null) {
				$_g1 = 0; $_g = $qa->getCorrectAnswersLength();
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$ca = $qa->getCorrectAnswer($j1);
					if($ca !== null) {
						$ca = com_wiris_util_xml_MathMLUtils::removeStrokesAnnotation($ca);
						$qq->setCorrectAnswer($lastCaNum + $j1, $ca);
						_hx_array_get($qq->correctAnswers, $lastCaNum + $j1)->weight = _hx_array_get($qa->correctAnswers, $j1)->weight;
						if($i >= 0) {
							_hx_array_get($qq->correctAnswers, $lastCaNum + $j1)->id = $step . _hx_string_rec($j1, "");
						}
					}
					unset($j1,$ca);
				}
				unset($_g1,$_g);
			}
			if($userAnswers === null && $ua !== null && $ua->answers !== null) {
				$_g1 = 0; $_g = $ua->answers->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$aa = _hx_array_get($ua->answers, $j1)->content;
					if($aa !== null) {
						$aa = $this->removeHandAnnotations($aa);
						$uu->setUserAnswer($lastUaNum + $j1, $aa);
						if($i >= 0) {
							_hx_array_get($uu->answers, $lastUaNum + $j1)->id = $step . _hx_string_rec($j1, "");
						}
					}
					unset($j1,$aa);
				}
				unset($_g1,$_g);
			}
			if($i < 0) {
				$lastCaNum = 0;
				$lastUaNum = 0;
			}
			$syntax = null;
			if($qa !== null && $qa->assertions !== null) {
				$_g1 = 0; $_g = $qa->assertions->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$ass = _hx_array_get($qa->assertions, $j1)->copy();
					if($i >= 0) {
						$caids = $ass->getCorrectAnswers();
						$k = null;
						{
							$_g3 = 0; $_g2 = $caids->length;
							while($_g3 < $_g2) {
								$k1 = $_g3++;
								$caids[$k1] = $step . $caids[$k1];
								unset($k1);
							}
							unset($_g3,$_g2);
						}
						$ass->setCorrectAnswers($caids);
						$uaids = $ass->getAnswers();
						{
							$_g3 = 0; $_g2 = $uaids->length;
							while($_g3 < $_g2) {
								$k1 = $_g3++;
								$uaids[$k1] = $step . $uaids[$k1];
								unset($k1);
							}
							unset($_g3,$_g2);
						}
						$ass->setAnswers($uaids);
						unset($uaids,$k,$caids);
					}
					if($ass->isSyntactic()) {
						$syntax = $ass;
					}
					$qq->assertions->push($ass);
					unset($j1,$ass);
				}
				unset($_g1,$_g);
			}
			if($syntax === null) {
				$syntax = new com_wiris_quizzes_impl_Assertion();
				$syntax->addCorrectAnswer($step . "0");
				$syntax->name = com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION;
				$qq->assertions->push($syntax);
			}
			{
				$_g1 = $lastUaNum; $_g = $uu->answers->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$foundSyntax = false;
					$k = null;
					{
						$_g3 = $lastAssNum; $_g2 = $qq->assertions->length;
						while($_g3 < $_g2) {
							$k1 = $_g3++;
							$ass = $qq->assertions[$k1];
							if($ass->isSyntactic() && com_wiris_util_type_Arrays::containsArray($ass->getAnswers(), $step . _hx_string_rec(($j1 - $lastUaNum), ""))) {
								$foundSyntax = true;
							}
							unset($k1,$ass);
						}
						unset($_g3,$_g2);
					}
					if(!$foundSyntax) {
						$syntax->addAnswer($step . _hx_string_rec(($j1 - $lastUaNum), ""));
					}
					unset($k,$j1,$foundSyntax);
				}
				unset($_g1,$_g);
			}
			if($qi !== null && $qi->hasVariables()) {
				$_g1 = $lastCaNum; $_g = $qq->getCorrectAnswersLength();
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$value = $qq->getCorrectAnswer($j1);
					if(com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_INPUT_FIELD_PLAIN_TEXT === $qa->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_INPUT_FIELD) || $syntax->name === com_wiris_quizzes_impl_Assertion::$SYNTAX_STRING) {
						$value = $qi->expandVariablesText($value);
					} else {
						$value = $qi->expandVariablesMathMLEval($value);
					}
					$qq->setCorrectAnswer($j1, $value);
					unset($value,$j1);
				}
				unset($_g1,$_g);
			}
			$j = $qq->assertions->length - 1;
			while($j >= $lastAssNum) {
				if(_hx_array_get($qq->assertions, $j)->name === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_ALL) {
					$correctanswer = _hx_array_get($qq->assertions, $j)->getCorrectAnswer();
					$k = $qq->assertions->length - 1;
					while($k >= $lastAssNum) {
						if(_hx_array_get($qq->assertions, $k)->isSyntactic()) {
							_hx_array_get($qq->assertions, $k)->removeCorrectAnswer($correctanswer);
							if(_hx_array_get($qq->assertions, $k)->getCorrectAnswers()->length === 0) {
								$qq->assertions->remove($qq->assertions[$k]);
								if($k < $j) {
									$j--;
								}
							}
						}
						$k--;
					}
					unset($k,$correctanswer);
				}
				$j--;
			}
			$usedcorrectanswers = new _hx_array(array());
			{
				$_g1 = 0; $_g = $qq->getCorrectAnswersLength() - $lastCaNum;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$usedcorrectanswers[$j1] = false;
					unset($j1);
				}
				unset($_g1,$_g);
			}
			$usedanswers = new _hx_array(array());
			{
				$_g1 = 0; $_g = $uu->answers->length - $lastCaNum;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$usedanswers[$j1] = false;
					unset($j1);
				}
				unset($_g1,$_g);
			}
			{
				$_g1 = $lastAssNum; $_g = $qq->assertions->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					$ass = $qq->assertions[$j1];
					$corr = $this->getIndex($ass->getCorrectAnswer());
					$ans = $this->getIndex($ass->getAnswer());
					if($ass->isEquivalence()) {
						if($corr < $usedcorrectanswers->length) {
							$usedcorrectanswers[$corr] = true;
						}
						if($ans < $usedanswers->length) {
							$usedanswers[$ans] = true;
						}
					} else {
						if($ass->isCheck()) {
							if($ans < $usedanswers->length) {
								$usedanswers[$ans] = true;
							}
						}
					}
					unset($j1,$corr,$ass,$ans);
				}
				unset($_g1,$_g);
			}
			$pairs = $this->getPairings($qq->getCorrectAnswersLength() - $lastCaNum, $uu->answers->length - $lastUaNum);
			{
				$_g1 = 0; $_g = $usedcorrectanswers->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					if(!$usedcorrectanswers[$j1]) {
						$k = null;
						{
							$_g3 = 0; $_g2 = $pairs->length;
							while($_g3 < $_g2) {
								$k1 = $_g3++;
								if($pairs[$k1][0] === $j1) {
									$user = $pairs[$k1][1];
									$qq->setParametrizedAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, $step . _hx_string_rec($j1, ""), $step . _hx_string_rec($user, ""), null);
									$usedanswers[$user] = true;
									unset($user);
								}
								unset($k1);
							}
							unset($_g3,$_g2);
						}
						unset($k);
					}
					unset($j1);
				}
				unset($_g1,$_g);
			}
			{
				$_g1 = 0; $_g = $usedanswers->length;
				while($_g1 < $_g) {
					$j1 = $_g1++;
					if(!$usedanswers[$j1]) {
						$k = null;
						{
							$_g3 = 0; $_g2 = $pairs->length;
							while($_g3 < $_g2) {
								$k1 = $_g3++;
								if($pairs[$k1][1] === $j1) {
									$qq->setParametrizedAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, $step . _hx_string_rec($pairs[$k1][0], ""), $step . _hx_string_rec($j1, ""), null);
								}
								unset($k1);
							}
							unset($_g3,$_g2);
						}
						unset($k);
					}
					unset($j1);
				}
				unset($_g1,$_g);
			}
			if($qa !== null && $qa->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER) === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_TRUE) {
				$assertions = new _hx_array(array());
				$correctAns = new _hx_array(array());
				$userAns = new _hx_array(array());
				$aux = new Hash();
				$j = $qq->getCorrectAnswersLength();
				while($qq->correctAnswers !== null && $qq->correctAnswers->length > 0 && $j > $lastCaNum) {
					$c = $qq->correctAnswers->pop();
					$parts = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($c);
					$aux->set($c->id, $parts->length);
					$k = null;
					{
						$_g1 = 0; $_g = $parts->length;
						while($_g1 < $_g) {
							$k1 = $_g1++;
							$cc = new com_wiris_quizzes_impl_CorrectAnswer();
							$cc->type = $c->type;
							$cc->id = $c->id . "_c" . _hx_string_rec($k1, "");
							$cc->content = $parts[$k1][1];
							$cc->weight = 1.0 / $parts->length;
							$correctAns->push($cc);
							unset($k1,$cc);
						}
						unset($_g1,$_g);
					}
					$j--;
					unset($parts,$k,$c);
				}
				$j = $uu->answers->length;
				while($uu->answers !== null && $uu->answers->length > 0 && $j > $lastUaNum) {
					$a = $uu->answers->pop();
					$parts = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($a);
					$k = null;
					{
						$_g1 = 0; $_g = $parts->length;
						while($_g1 < $_g) {
							$k1 = $_g1++;
							$ca = new com_wiris_quizzes_impl_Answer();
							$ca->id = $a->id . "_c" . _hx_string_rec($k1, "");
							$ca->set($parts[$k1][1]);
							$userAns->push($ca);
							unset($k1,$ca);
						}
						unset($_g1,$_g);
					}
					$j--;
					unset($parts,$k,$a);
				}
				$j = $qq->assertions->length;
				while($qq->assertions !== null && $qq->assertions->length > 0 && $j > $lastAssNum) {
					$a = $qq->assertions->pop();
					$n = $aux->get($a->getCorrectAnswer());
					$k = null;
					{
						$_g = 0;
						while($_g < $n) {
							$k1 = $_g++;
							$ca = new com_wiris_quizzes_impl_Assertion();
							$ca->name = $a->name;
							$ca->parameters = $a->parameters;
							$assertions->push($ca);
							if($a->name === com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION) {
								$caa = new _hx_array(array());
								$aa = new _hx_array(array());
								$l = null;
								{
									$_g1 = 0;
									while($_g1 < $n) {
										$l1 = $_g1++;
										$caa[$l1] = $a->getCorrectAnswer() . "_c" . _hx_string_rec($l1, "");
										$aa[$l1] = $a->getAnswer() . "_c" . _hx_string_rec($l1, "");
										unset($l1);
									}
									unset($_g1);
								}
								$ca->setCorrectAnswers($caa);
								$ca->setAnswers($aa);
								break;
								unset($l,$caa,$aa);
							} else {
								$ca->setCorrectAnswer($a->getCorrectAnswer() . "_c" . _hx_string_rec($k1, ""));
								$ca->setAnswer($a->getAnswer() . "_c" . _hx_string_rec($k1, ""));
							}
							unset($k1,$ca);
						}
						unset($_g);
					}
					$j--;
					unset($n,$k,$a);
				}
				$qq->correctAnswers = (($qq->correctAnswers === null) ? $correctAns : $qq->correctAnswers->concat($correctAns));
				$qq->assertions = (($qq->assertions === null) ? $assertions : $qq->assertions->concat($assertions));
				$uu->answers = (($uu->answers === null) ? $userAns : $uu->answers->concat($userAns));
				unset($userAns,$correctAns,$aux,$assertions);
			}
			$lastCaNum = $qq->getCorrectAnswersLength();
			$lastUaNum = $uu->answers->length;
			$lastAssNum = $qq->assertions->length;
			$i++;
			unset($usedcorrectanswers,$usedanswers,$ua,$syntax,$step,$qa,$pairs,$j);
		}
		$qr = new com_wiris_quizzes_impl_QuestionRequestImpl();
		$qr->question = $qq;
		$qr->userData = $uu;
		$qr->checkAssertions();
		$this->addInterestingLocalDataToRequest($question, $instance, $qr);
		return $qr;
	}
	public function getIndex($id) {
		$i = _hx_index_of($id, "_", null) + 1;
		$j = _hx_index_of($id, "_", $i);
		if($j === -1) {
			return Std::parseInt(_hx_substr($id, $i, null));
		} else {
			return Std::parseInt(_hx_substr($id, $i, $j - $i));
		}
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
	public function removeAnswerVariables($variables, $q, $qi) {
		$qq = _hx_deref(($q))->getImpl();
		if($qq->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER) === "true") {
			$name = $qq->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER_NAME);
			$defname = $qq->defaultOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER_NAME);
			if($defname === $name) {
				$lang = com_wiris_quizzes_impl_HTMLTools::casSessionLang($qq->getAlgorithm());
				$name = com_wiris_quizzes_impl_Translator::getInstance($lang)->t($name);
			}
			$n = 0;
			$i = null;
			{
				$_g1 = 0; $_g = $variables->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					if(StringTools::startsWith($variables[$i1], $name)) {
						$after = _hx_substr($variables[$i1], strlen($name), null);
						if(strlen($after) === 0 || com_wiris_util_type_IntegerTools::isInt($after) && Std::parseInt($after) <= $qi->getStudentAnswersLength()) {
							$variables[$i1] = null;
							$n++;
						} else {
							if($qq->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER) === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_TRUE && $q->getCorrectAnswersLength() > 0) {
								$parts = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($qq->correctAnswers[0]);
								if(com_wiris_util_type_IntegerTools::isInt($after) && Std::parseInt($after) <= $parts->length) {
									$variables[$i1] = null;
									$n++;
								}
								unset($parts);
							}
						}
						unset($after);
					}
					unset($i1);
				}
			}
			if($n > 0) {
				$newvariables = new _hx_array(array());
				$j = 0;
				{
					$_g1 = 0; $_g = $variables->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						if($variables[$i1] !== null) {
							$newvariables[$j] = $variables[$i1];
							$j++;
						}
						unset($i1);
					}
				}
				$variables = $newvariables;
			}
		}
		return $variables;
	}
	public function setVariables($html, $q, $qi, $qr) {
		$variables = null;
		if($html === null) {
			$variables = $this->extractQuestionInstanceVariableNames($qi);
		} else {
			$h = new com_wiris_quizzes_impl_HTMLTools();
			$variables = $h->extractVariableNames($html);
			$variables = $this->removeAnswerVariables($variables, $q, $qi);
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
		$qr->question = $this->removeSubquestions($q);
		$qr->userData = $qi->userData;
		$this->setVariables($html, $q, $qi, $qr);
		$this->addInterestingLocalDataToRequest($question, $instance, $qr);
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
			if($q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER) === "true") {
				$answername = $q->getOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER_NAME);
				if($q->defaultOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER_NAME) === $answername) {
					$alg = $q->getAlgorithm();
					if($alg !== null) {
						$lang = com_wiris_quizzes_impl_HTMLTools::casSessionLang($alg);
						if($lang !== null && !(com_wiris_quizzes_impl_QuestionInstanceImpl::$DEF_ALGORITHM_LANGUAGE === $lang)) {
							$qi->setLocalData(com_wiris_quizzes_impl_QuestionInstanceImpl::$KEY_ALGORITHM_LANGUAGE, $lang);
						}
					}
				} else {
					$qi->setLocalData(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER_NAME, $answername);
				}
			}
			if($q->subquestions !== null && $q->subquestions->length > 0) {
				$i = null;
				{
					$_g1 = 0; $_g = $q->subquestions->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						$qi->pushSubinstance($q->subquestions[$i1]);
						unset($i1);
					}
				}
			}
		}
		return $qi;
	}
	public function newMultipleQuestion() {
		$q = new com_wiris_quizzes_impl_QuestionImpl();
		$q->subquestions = new _hx_array(array());
		return $q;
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
	public $accessProvider;
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
	static $INTERESTING_LOCAL_DATA_NAME_AND_VALUE;
	static $INTERESTING_LOCAL_DATA_ONLY_NAME;
	function __toString() { return 'com.wiris.quizzes.impl.QuizzesBuilderImpl'; }
}
com_wiris_quizzes_impl_QuizzesBuilderImpl::$INTERESTING_LOCAL_DATA_NAME_AND_VALUE = new _hx_array(array(com_wiris_quizzes_impl_LocalData::$KEY_SHOW_AUXILIAR_TEXT_INPUT, com_wiris_quizzes_impl_LocalData::$KEY_SHOW_CAS));
com_wiris_quizzes_impl_QuizzesBuilderImpl::$INTERESTING_LOCAL_DATA_ONLY_NAME = new _hx_array(array(com_wiris_quizzes_impl_LocalData::$KEY_AUXILIAR_TEXT, com_wiris_quizzes_impl_LocalData::$KEY_CAS_SESSION, com_wiris_quizzes_impl_LocalData::$KEY_CAS_INITIAL_SESSION));
function com_wiris_quizzes_impl_QuizzesBuilderImpl_0(&$»this, &$q, &$qi, &$qr, &$sb) {
	if($q !== null) {
		return _hx_deref(($q))->getImpl()->localData;
	}
}
function com_wiris_quizzes_impl_QuizzesBuilderImpl_1(&$»this, &$localDataQ, &$q, &$qi, &$qr, &$sb) {
	if($qi !== null) {
		return _hx_deref(($qi))->localData;
	}
}
function com_wiris_quizzes_impl_QuizzesBuilderImpl_2(&$»this, &$correctAnswers, &$i, &$instance, &$lastAssNum, &$lastCaNum, &$lastUaNum, &$q, &$qa, &$qi, &$qq, &$question, &$userAnswers, &$uu) {
	if($i < 0) {
		return $q;
	} else {
		return $q->subquestions[$i];
	}
}
function com_wiris_quizzes_impl_QuizzesBuilderImpl_3(&$»this, &$correctAnswers, &$i, &$instance, &$lastAssNum, &$lastCaNum, &$lastUaNum, &$q, &$qa, &$qi, &$qq, &$question, &$ua, &$userAnswers, &$uu) {
	if($i < 0) {
		return $qi->userData;
	} else {
		return _hx_array_get($qi->subinstances, $i)->userData;
	}
}
function com_wiris_quizzes_impl_QuizzesBuilderImpl_4(&$»this, &$correctAnswers, &$i, &$instance, &$lastAssNum, &$lastCaNum, &$lastUaNum, &$q, &$qa, &$qi, &$qq, &$question, &$ua, &$userAnswers, &$uu) {
	if($i < 0) {
		return "";
	} else {
		return "s" . _hx_string_rec($i, "") . "_";
	}
}
