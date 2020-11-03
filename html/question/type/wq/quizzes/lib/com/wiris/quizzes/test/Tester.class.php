<?php

class com_wiris_quizzes_test_Tester {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$this->numCalls = 0;
	}}
	public function testCompatibility() {
		$question = "<question><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>2</mn></math>]]></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"/><assertion name=\"equivalent_symbolic\"/></assertions><options><option name=\"tolerance\">10^(-3)</option><option name=\"relative_tolerance\">true</option><option name=\"precision\">4</option><option name=\"times_operator\">·</option><option name=\"implicit_times_operator\">false</option><option name=\"imaginary_unit\">i</option></options><localData><data name=\"inputField\">popupEditor</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"></data><data name=\"inputCompound\">true</data></localData></question>";
		$instance = "<questionInstance><userData><randomSeed>64038</randomSeed><answers><answer type=\"mathml\"><![CDATA[<math><mi>a</mi><mo>=</mo><semantics><mrow><mn>1</mn></mrow><annotation encoding=\"text/plain\">1</annotation></semantics><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><semantics><mrow><mn>3</mn></mrow><annotation encoding=\"text/plain\">3</annotation></semantics></math>]]></answer></answers></userData><checks><check assertion=\"syntax_expression\" answer=\"1000\" correctAnswer=\"1000\">1</check><check assertion=\"syntax_expression\" answer=\"1001\" correctAnswer=\"1001\">1</check><check assertion=\"equivalent_symbolic\" answer=\"1000\" correctAnswer=\"1000\">1</check><check assertion=\"equivalent_symbolic\" answer=\"1001\" correctAnswer=\"1001\">0</check></checks><localData><data name=\"handwritingConstraints\">{&quot;symbols&quot;:[&quot;1&quot;,&quot;2&quot;,&quot;=&quot;,&quot;a&quot;,&quot;b&quot;],&quot;structure&quot;:[&quot;General&quot;,&quot;Fraction&quot;,&quot;Multiline&quot;]}</data></localData></questionInstance>";
		$builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $builder->readQuestion($question);
		$qi = $builder->readQuestionInstance($instance);
		if(!($q->getCorrectAnswer(0) === "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>2</mn></math>")) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		if(!($q->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER) === com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE)) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		if($qi->getCompoundAnswerGrade(0, 0, 0, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		if($qi->getCompoundAnswerGrade(0, 0, 1, $q) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		$q2 = $builder->readQuestion($q->serialize());
		$s = $qi->serialize();
		$qi2 = $builder->readQuestionInstance($s);
		if(!($q2->getCorrectAnswer(0) === "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>2</mn></math>")) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		if(!($q2->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER) === com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE)) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		if($qi2->getCompoundAnswerGrade(0, 0, 0, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		if($qi2->getCompoundAnswerGrade(0, 0, 1, $q) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed compatibility test!", null));
		}
		haxe_Log::trace("Test compatibility OK!", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 1254, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "testCompatibility")));
	}
	public function testSubQuestion4() {
		$question = "<question><subquestions><subquestion><correctAnswers><correctAnswer>12</correctAnswer></correctAnswers><assertions><assertion name=\"check_factorized\"/></assertions></subquestion><subquestion index=\"1\"><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>5</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>42</mn></math>]]></correctAnswer></correctAnswers><localData><data name=\"inputCompound\">true</data></localData></subquestion></subquestions></question>";
		$instance = "<questionInstance><userData><randomSeed>25693</randomSeed></userData><checks><check assertion=\"syntax_expression\">1.0</check></checks><localData><data name=\"handwritingConstraints\">{\"structure\":[\"General\",\"Fraction\"],\"symbols\":[]}</data></localData><subinstances><subinstance><userData><answers><answer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mo>·</mo><mn>2</mn><mo>·</mo><mn>2</mn></math>]]></answer></answers></userData><checks><check assertion=\"check_factorized\">1.0</check><check assertion=\"syntax_expression\">1.0</check><check assertion=\"equivalent_symbolic\">1.0</check></checks><localData><data name=\"handwritingConstraints\">{\"structure\":[\"General\",\"Fraction\"],\"symbols\":[\"1\",\"2\"]}</data></localData></subinstance><subinstance index=\"1\"><userData><answers><answer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>42</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>42</mn></math>]]></answer></answers></userData><checks><check answer=\"0_c0\" correctAnswer=\"0_c0\" assertion=\"equivalent_symbolic\">0.0</check><check answer=\"0_c1\" correctAnswer=\"0_c1\" assertion=\"equivalent_symbolic\">1.0</check><check answer=\"0_c0\" correctAnswer=\"0_c0\" assertion=\"syntax_expression\">1.0</check><check answer=\"0_c1\" correctAnswer=\"0_c1\" assertion=\"syntax_expression\">1.0</check></checks><localData><data name=\"handwritingConstraints\">{\"structure\":[\"General\",\"Fraction\",\"Multiline\"],\"symbols\":[\"2\",\"4\",\"5\",\"=\",\"a\",\"b\"]}</data></localData></subinstance></subinstances></questionInstance>";
		$builder = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $builder->readQuestion($question);
		$qi = $builder->readQuestionInstance($instance);
		if(!($q->getCorrectAnswerOfSubquestion(0, 0) === "12")) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Answer of subquestion 0", null));
		}
		if(!($q->getPropertyOfSubquestion(1, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER) === com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Compound answer.", null));
		}
		if(!$qi->isSubAnswerCorrect(0, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Subanswer 0 incorrect", null));
		}
		if($qi->getCompoundSubAnswerGrade(1, 0, 0, 0, $q) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Compound answer grade s1_0_c0 incorrect.", null));
		}
		if($qi->getCompoundSubAnswerGrade(1, 0, 0, 1, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Compound answer grade s1_0_c1 incorrect", null));
		}
		if(_hx_index_of($q->serialize(), "subquestion", null) < 0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Error serializing.", null));
		}
		$s = $qi->serialize();
		if(_hx_index_of($s, "0_c0", null) < 0 || _hx_index_of($s, "0_c1", null) < 0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 4! Compound indices not found", null));
		}
		haxe_Log::trace("Test subquestion4 OK!", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 1233, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "testSubQuestion4")));
	}
	public function responseSubQuestion3($s, $q, $qi) {
		$qii = $qi;
		$qii->update($s);
		$ss = $qii->serialize();
		if($qii->isSubAnswerCorrect(0, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion3!", null));
		}
		if($qii->getCompoundSubAnswerGrade(1, 0, 0, 0, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion3!", null));
		}
		if($qii->getCompoundSubAnswerGrade(1, 0, 0, 1, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion3!", null));
		}
		if($qii->getCompoundSubAnswerGrade(1, 0, 0, 2, $q) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion3!", null));
		}
	}
	public function testSubQuestion3() {
		$builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $builder->newMultipleQuestion();
		$q->setCorrectAnswerOfSubquestion(0, 0, "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>1</mn></math>");
		$q->addAssertionOfSubquestion(0, com_wiris_quizzes_impl_Assertion::$CHECK_FACTORIZED, 0, 0, null);
		$q->setCorrectAnswerOfSubquestion(1, 0, "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>0</mn><mo>.</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>15</mn><mspace linebreak=\"newline\"/><mi>c</mi><mo>=</mo><mn>10</mn></math>");
		$q->setPropertyOfSubquestion(1, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE);
		$qi = $builder->newMultipleQuestionInstance($q);
		$qi->setStudentAnswerOfSubquestion(0, 0, "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>1</mn></math>");
		$qi->setStudentAnswerOfSubquestion(1, 0, "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>0</mn><mo>.</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>15</mn><mspace linebreak=\"newline\"/><mi>c</mi><mo>=</mo><mn>11</mn></math>");
		$qr = $builder->newEvalMultipleAnswersRequest(null, null, $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($qr, new com_wiris_quizzes_test_TestIdServiceListener("subquestion3", $this, $q, $qi));
	}
	public function responseSubQuestion2($s, $q, $qi) {
		$qii = $qi;
		$qii->update($s);
		if($qii->isAnswerCorrect(0)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if(!$qii->isSubAnswerCorrect(0, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if($qii->isSubAnswerCorrect(1, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if(!$qii->isSubAnswerCorrect(2, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if($qii->getSubAnswerGrade(0, 0, 0, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if($qii->getSubAnswerGrade(1, 0, 0, $q) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if($qii->getSubAnswerGrade(1, 1, 0, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
		if($qii->getSubAnswerGrade(2, 0, 0, $q) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 2!", null));
		}
	}
	public function testSubQuestion2() {
		$builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $builder->newMultipleQuestion();
		$q->setCorrectAnswer(0, "42");
		$q->setCorrectAnswerOfSubquestion(0, 0, "1^2");
		$q->setCorrectAnswerOfSubquestion(1, 0, "2^2");
		$q->setCorrectAnswerOfSubquestion(1, 1, "5");
		$q->setCorrectAnswerOfSubquestion(2, 0, "3^2");
		$qi = $builder->newMultipleQuestionInstance($q);
		$qi->setStudentAnswer(0, "0");
		$qi->setStudentAnswerOfSubquestion(0, 0, "1");
		$qi->setStudentAnswerOfSubquestion(1, 0, "5");
		$qi->setStudentAnswerOfSubquestion(2, 0, "9");
		$qr = $builder->newEvalMultipleAnswersRequest(null, null, $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($qr, new com_wiris_quizzes_test_TestIdServiceListener("subquestion2", $this, $q, $qi));
	}
	public function responseSubQuestion1($s, $q, $qi) {
		$qi->update($s);
		$mq = $q;
		$answer00 = $mq->getCorrectAnswerOfSubquestion(0, 0);
		$answer01 = $mq->getCorrectAnswerOfSubquestion(0, 1);
		$answer1 = $mq->getCorrectAnswerOfSubquestion(1, 0);
		$answer1 = $qi->expandVariablesText($answer1);
		if(!($answer00 === "123" && $answer01 === "(123)^(1/2)" && $answer1 === "(x^2+1)^(1/2)")) {
			throw new HException(new com_wiris_system_Exception("Failed test subquestion 1!", null));
		}
	}
	public function testSubQuestion1() {
		$builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $builder->newMultipleQuestion();
		$algorithm = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><msqrt><mrow><mn>1</mn><mo>+</mo><msup><mi>x</mi><mn>2</mn></msup></mrow></msqrt></math></input></command></group></library></session>";
		$q->setCorrectAnswerOfSubquestion(0, 0, "123");
		$q->setCorrectAnswerOfSubquestion(0, 1, "(123)^(1/2)");
		$q->setCorrectAnswerOfSubquestion(1, 0, "#a");
		$q->setAlgorithm($algorithm);
		$qi = $builder->newMultipleQuestionInstance($q);
		$qr = $builder->newVariablesRequest("#a", $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($qr, new com_wiris_quizzes_test_TestIdServiceListener("subquestion1", $this, $q, $qi));
	}
	public function responseFeedback3($r, $q, $qi) {
		$qi->update($r);
		$a1 = $qi->expandVariables("#answer1");
		$a2 = $qi->expandVariables("#answer2");
		if(!($a1 === "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn></math>" && $a2 === "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn></math>")) {
			throw new HException(new com_wiris_system_Exception("Failed test feedback3!", null));
		}
	}
	public function testFeedback3() {
		$qb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $qb->readQuestion("<question><wirisCasSession><![CDATA[<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>parameter</mi><mo>&nbsp;</mo><mi>answer1</mi><mo>=</mo><mn>0</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>parameter</mi><mo>&nbsp;</mo><mi>answer2</mi><mo>=</mo><mn>0</mn></math></input></command></group></library></session>]]></wirisCasSession><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>2</mn></math>]]></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"/><assertion name=\"equivalent_symbolic\"/></assertions><options><option name=\"tolerance\">10^(-3)</option><option name=\"relative_tolerance\">true</option><option name=\"precision\">4</option><option name=\"times_operator\">·</option><option name=\"implicit_times_operator\">false</option><option name=\"imaginary_unit\">i</option><option name=\"answer_parameter\">true</option></options><localData><data name=\"inputField\">popupEditor</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"></data><data name=\"inputCompound\">true</data></localData></question>");
		$qi = $qb->newQuestionInstance($q);
		$u = new com_wiris_quizzes_impl_UserData();
		$u->setUserCompoundAnswer(0, 0, "2");
		$u->setUserCompoundAnswer(0, 1, "3");
		$qi->setStudentAnswer(0, _hx_array_get($u->answers, 0)->content);
		$r = $qb->newFeedbackRequest("<p>a=#answer1</p><p>b=#answer2</p>", $q, $qi);
		$this->numCalls++;
		$qb->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("feedback3", $this, $q, $qi));
	}
	public function inArray($a, $b) {
		$i = null;
		{
			$_g1 = 0; $_g = $b->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_equal($b[$i1], $a)) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	public function onServiceResponse($id, $res, $q, $qi) {
		try {
			if($id === "compound1") {
				$this->responseCompound1($res, $q, $qi);
			} else {
				if($id === "compound2") {
					$this->responseCompound2($res, $q, $qi);
				} else {
					if($id === "compound3") {
						$this->responseCompound3($res, $q, $qi);
					} else {
						if($id === "compound4") {
							$this->responseCompound4($res, $q, $qi);
						} else {
							if($id === "compoundsets") {
								$this->responseCompoundSets($res, $q, $qi);
							} else {
								if($id === "images1") {
									$this->responseImages1($res, $q, $qi);
								} else {
									if($id === "images2") {
										$this->responseImages2($res, $q, $qi);
									} else {
										if($id === "lang1") {
											$this->responseLang1($res, $q, $qi);
										} else {
											if($id === "openquestion1") {
												$this->responseOpenQuestion1($res);
											} else {
												if($id === "tolerance1") {
													$this->responseTolerance1($res);
												} else {
													if($id === "randomquestion1") {
														$this->responseRandomQuestion1($res, $q, $qi);
													} else {
														if($id === "randomquestion2") {
															$this->responseRandomQuestion2($res, $q, $qi);
														} else {
															if($id === "encodings1") {
																$this->responseEncodings1($res, $q, $qi);
															} else {
																if($id === "encodings2") {
																	$this->responseEncodings2($res, $q, $qi);
																} else {
																	if($id === "translation1") {
																		$this->responseTranslation1($res, $q);
																	} else {
																		if($id === "bugs1") {
																			$this->responseBugs1($res, $q, $qi);
																		} else {
																			if($id === "multianswer") {
																				$this->responseMultianswer($res, $q, $qi);
																			} else {
																				if($id === "multianswer2") {
																					$this->responseMultianswer2($res, $q, $qi);
																				} else {
																					if($id === "anyanswer1") {
																						$this->responseAnyAnswer1($res, $q, $qi);
																					} else {
																						if($id === "floateval1") {
																							$this->responseFloatEval1($res, $q, $qi);
																						} else {
																							if($id === "handwritingConstraints") {
																								$this->responseHandwritingConstraints($res, $q, $qi);
																							} else {
																								if($id === "parameters") {
																									$this->responseParameters($res, $q, $qi);
																								} else {
																									if($id === "unicode1") {
																										$this->responseUnicode1($res, $q, $qi);
																									} else {
																										if($id === "unicode2") {
																											$this->responseUnicode2($res, $q, $qi);
																										} else {
																											if($id === "floatformat1") {
																												$this->responseFloatFormat1($res, $q, $qi);
																											} else {
																												if($id === "feedback") {
																													$this->responseFeedback($res, $q, $qi);
																												} else {
																													if($id === "feedback2") {
																														$this->responseFeedback2($res, $q, $qi);
																													} else {
																														if($id === "subquestion1") {
																															$this->responseSubQuestion1($res, $q, $qi);
																														} else {
																															if($id === "subquestion2") {
																																$this->responseSubQuestion2($res, $q, $qi);
																															} else {
																																if($id === "subquestion3") {
																																	$this->responseSubQuestion3($res, $q, $qi);
																																} else {
																																	if($id === "feedback3") {
																																		$this->responseFeedback3($res, $q, $qi);
																																	} else {
																																		if($id === "userid") {
																																			$this->responseUserId($res, $q, $qi);
																																		} else {
																																			throw new HException(new com_wiris_system_Exception("Unknown test id.", null));
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
				}
			}
			haxe_Log::trace("Test " . $id . " OK!", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 1081, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "onServiceResponse")));
			$this->endCall();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$e = $_ex_;
			{
				haxe_Log::trace("Failed test " . $id . "!!!", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 1084, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "onServiceResponse")));
				throw new HException($e);
			}
		}
	}
	public function responseFeedback2($s, $q, $qi) {
		$qi->update($s);
		if(!($qi->getAnswerGrade(0, 0, $q) === 1.0)) {
			throw new HException("Failed test!");
		}
		$t = $qi->expandVariables("#answer");
		if(!($t === "<math><mn>122</mn><mo>+</mn><mn>1</mn></math>")) {
			throw new HException("Failed test!");
		}
		$t = $qi->expandVariablesMathML("<math><mo>#</mo><mi>a</mi><mi>nswer</mi><mn>1</mn></math>");
		if(!($t === "<math><mrow><mn>122</mn><mo>+</mn><mn>1</mn></mrow></math>")) {
			throw new HException("Failed test!");
		}
	}
	public function responseFeedback($s, $q, $qi) {
		$qi->update($s);
		if(!($qi->getAnswerGrade(0, 0, $q) === 1.0)) {
			throw new HException("Failed test!");
		}
		$t = $qi->expandVariablesText("#c");
		if(!($t === "124")) {
			throw new HException("Failed test!");
		}
		$t = $qi->expandVariables("#answer");
		if(!($t === "122+1")) {
			throw new HException("Failed test!");
		}
		$t = $qi->expandVariablesText("#answer1");
		if(!($t === "122+1")) {
			throw new HException("Failed test!");
		}
	}
	public function testFeedback() {
		$b = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$s = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>parameter</mi><mo>&nbsp;</mo><mi>answer</mi><mo>=</mo><mn>0</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>c</mi><mo>=</mo><mi>answer</mi><mo>+</mo><mn>1</mn></math></input></command></group></library></session>";
		$html = "#c #answer #answer1";
		$q = $b->newQuestion();
		$q->setAlgorithm($s);
		$q->setCorrectAnswer(0, "123");
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_STUDENT_ANSWER_PARAMETER, "true");
		$i = $b->newQuestionInstance($q);
		$i->setStudentAnswer(0, "122+1");
		$r = $b->newFeedbackRequest($html, $q, $i);
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("feedback", $this, $q, $i));
		$i = $b->newQuestionInstance($q);
		$i->setStudentAnswer(0, "<math><mn>122</mn><mo>+</mn><mn>1</mn></math>");
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("feedback2", $this, $q, $i));
	}
	public function responseUnicode2($s, $q, $qi) {
		$qi->update($s);
		if($qi->getAnswerGrade(0, 0, $q) !== 1.0) {
			throw new HException("Failed test!");
		}
	}
	public function responseUnicode1($s, $q, $qi) {
		$b = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$qi->update($s);
		$correctAnswer = $qi->expandVariablesMathML($q->getCorrectAnswer(0));
		$studentAnswer = "<math><mi>a</mi><mo>&#x2009;</mo><mo>=</mo><mo>&nbsp;</mo><mi mathvariant=\"normal\">&#120128;</mi><mspace linebreak=\"newline\"/><mi>b</mi><mo>&#x2009;</mo><mo>=</mo><mo>&nbsp;</mo><mi mathvariant=\"normal\">&#8474;</mi></math>";
		$r = $b->newEvalRequest($correctAnswer, $studentAnswer, $q, $qi);
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("unicode2", $this, $q, $qi));
	}
	public function testUnicode() {
		$correctAnswer = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi mathvariant=\"normal\">&#x1d540;</mi><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mo>#</mo><mi>S</mi></math>";
		$algorithm = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>S</mi><mo>=</mo><rationals/></math></input></command></group></library></session>";
		$b = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $b->newQuestion();
		$q->setCorrectAnswer(0, $correctAnswer);
		$q->setAlgorithm($algorithm);
		$q->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE);
		$qi = $b->newQuestionInstance($q);
		$r = $b->newVariablesRequest($correctAnswer, $q, $qi);
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("unicode1", $this, $q, $qi));
	}
	public function responseParameters($res, $q, $qi) {
		$qi->update($res);
		$html = "<p>És cert o fals?</p><p>#s</p>";
		$expected = "<p>És cert o fals?</p><p>El polinomi <math><mrow><msup><mi>x</mi><mn>3</mn></msup><mo>-</mo><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>2</mn></mrow></math> té grau <math><mrow><mn>3</mn></mrow></math>.</p>";
		$computed = $qi->expandVariables($html);
		if(!($computed === $expected)) {
			throw new HException("Failed test! \x0AComputed: " . $computed . "\x0A" . "Expected: " . $expected);
		}
	}
	public function testParameters() {
		$str = "<question><wirisCasSession><![CDATA[<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>parameter</mi><mo>&nbsp;</mo><mi>sentence</mi><mo>=</mo><mo>&quot;</mo><mi>The</mi><mo>&nbsp;</mo><mi>polynomial</mi><mo>&nbsp;</mo><mo>#</mo><mn>1</mn><mo>&nbsp;</mo><mi>has</mi><mo>&nbsp;</mo><mi>degree</mi><mo>&nbsp;</mo><mo>#</mo><mn>2</mn><mo>.</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>parameter</mi><mo>&nbsp;</mo><mi>p</mi><mo>=</mo><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mi>x</mi><mo>-</mo><mn>1</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>d</mi><mo>=</mo><mi>degree</mi><mo>(</mo><mi>p</mi><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>s</mi><mo>=</mo><mi>string_substitution</mi><mo>(</mo><mi>sentence</mi><mo>,</mo><mo>&nbsp;</mo><mi>p</mi><mo>,</mo><mo>&nbsp;</mo><mi>d</mi><mo>)</mo></math></input></command></group></library></session>]]></wirisCasSession></question>";
		$html = "<p>És cert o fals?</p><p>#s</p>";
		$b = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $b->readQuestion($str);
		$qi = $b->newQuestionInstance($q);
		$qi->setParameter("sentence", "<ms>El polinomi #1 té grau #2.</ms>");
		$qi->setParameter("p", "x^3-x^2+2");
		$req = $b->newVariablesRequest($html, $q, $qi);
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("parameters", $this, $q, $qi));
	}
	public function responseUserId($res, $q, $qi) {
		$qi->update($res);
		$a = $qi->expandVariablesText("#a");
		if(!($a === "697")) {
			throw new HException("Failed test user_id! \x0AComputed: " . $a . "\x0A" . "Expected: 697");
		}
	}
	public function testUserId() {
		$session = "<session lang=\"ca\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"ca\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>paràmetre</mi><mo>&nbsp;</mo><mi>id_usuari</mi><mo>=</mo><mn>0</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>llavor_aleatori</mi><mo>(</mo><mi>id_usuari</mi><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>aleatori</mi><mo>(</mo><mn>1</mn><mo>.</mo><mo>.</mo><mn>1000</mn><mo>)</mo></math></input></command></group></library><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi></math></input><output><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>697</mn></math></output></command></group><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"/></input></command></group></session>";
		$b = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $b->newQuestion();
		$q->setAlgorithm($session);
		$qi = $b->newQuestionInstance($q);
		$qi->setParameter(com_wiris_quizzes_api_QuizzesConstants::$PARAMETER_USER_ID, "123");
		$req = $b->newVariablesRequest("#a", $q, $qi);
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("userid", $this, $q, $qi));
	}
	public function testDeprecated() {
		$str = "<question><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>s</mi></math>]]></correctAnswer><correctAnswer id=\"1\"></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"/><assertion name=\"equivalent_set\"/></assertions><options><option name=\"tolerance\">10^(-4)</option><option name=\"relative_tolerance\">false</option><option name=\"precision\">4</option><option name=\"implicit_times_operator\">false</option><option name=\"times_operator\">·</option><option name=\"imaginary_unit\">i</option></options><localData><data name=\"inputField\">inlineEditor</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"></data><data name=\"casSession\"/></localData></question>";
		$b = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $b->readQuestion($str);
		$qi = $b->newQuestionInstance(null);
		$eqs = $b->newEvalRequest("{{x=0},{x=1}}", "{{x=1},{x=0}}", $q, $qi);
		$this->numCalls++;
		$b->getQuizzesService()->executeAsync($eqs, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, null, null));
	}
	public function responseBugs1($s, $q, $qi) {
		$qi->update($s);
		$a = $qi->expandVariablesText("#a");
		if(!($a === "10")) {
			throw new HException(new com_wiris_system_Exception("Failed test", null));
		}
	}
	public function testBugs() {
		$str = "<question><wirisCasSession><![CDATA[<session lang=\"fr\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\">library</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>aléa</mi><mo>(</mo><mn>1</mn><mo>.</mo><mo>.</mo><mn>10</mn><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mi>aléa</mi><mo>(</mo><mo>-</mo><mn>10</mn><mo>.</mo><mo>.</mo><mn>1</mn><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mi>max</mi><mo>(</mo><mi>b</mi><mo>,</mo><mn>0</mn><mo>)</mo></math></input></command></group></library><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"/></input></command></group></session>]]></wirisCasSession><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>a</mi></math>]]></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"/><assertion name=\"equivalent_symbolic\"/></assertions><options><option name=\"tolerance\">10^(-4)</option><option name=\"relative_tolerance\">false</option><option name=\"precision\">4</option><option name=\"implicit_times_operator\">false</option><option name=\"times_operator\">·</option><option name=\"imaginary_unit\">i</option>\x09</options>\x09<localData><data name=\"inputField\">inlineEditor</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"/><data name=\"casSession\"/></localData></question>";
		$b = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $b->readQuestion($str);
		$qi = $b->newQuestionInstance(null);
		$qi->setRandomSeed(12345);
		$r = $b->newVariablesRequest("#a", $q, $qi);
		$s = $b->getQuizzesService();
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("bugs1", $this, $q, $qi));
		$q = $b->newQuestion();
		$q->addAssertion("syntax_quantity", 0, 0, new _hx_array(array(null, null, null, null, "true", "", ".", "\\,,\\s", null)));
		$r = $b->newEvalRequest("<math><mn>1234567</mn><mo>.</mo><mn>8</mn></math>", "<math><mn>1</mn><mo>,</mo><mn>234</mn><mo>,</mo><mn>567</mn><mo>.</mo><mn>8</mn></math>", $q, null);
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, $q, null));
		$r = $b->newEvalRequest("<math><mn>1234567</mn><mo>.</mo><mn>8</mn></math>", "<math><mn>1</mn><mo>&#160;</mo><mn>234</mn><mo>&#160;</mo><mn>567</mn><mo>.</mo><mn>8</mn></math>", $q, null);
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, $q, null));
		$r = $b->newEvalRequest("<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>9</mn></mfrac><mo>+</mo><mfenced open=\"[\" close=\"]\"><mrow><mfrac><mn>1</mn><mn>4</mn></mfrac><mo>+</mo><mfenced close=\")\" open=\"(\"><mrow><mfrac><mn>1</mn><mn>4</mn></mfrac><mo>+</mo><mfrac><mn>1</mn><mn>5</mn></mfrac></mrow></mfenced><mo>&#183;</mo><mfenced close=\")\" open=\"(\"><mrow><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>+</mo><mn>2</mn></mrow></mfenced></mrow></mfenced><mo>:</mo><mfenced close=\")\" open=\"(\"><mfrac><mn>3</mn><mn>2</mn></mfrac></mfenced></math>", "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>9</mn></mfrac><mo>+</mo><mfenced open=\"[\" close=\"]\"><mrow><mfrac><mn>1</mn><mn>4</mn></mfrac><mo>+</mo><mfenced close=\")\" open=\"(\"><mrow><mfrac><mn>1</mn><mn>4</mn></mfrac><mo>+</mo><mfrac><mn>1</mn><mn>5</mn></mfrac></mrow></mfenced><mo>&#183;</mo><mfenced close=\")\" open=\"(\"><mrow><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>+</mo><mn>2</mn></mrow></mfenced></mrow></mfenced><mo>:</mo><mfenced close=\")\" open=\"(\"><mfrac><mn>3</mn><mn>2</mn></mfrac></mfenced></math>", $q, null);
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, $q, null));
	}
	public function testCache() {
		$qstr = "<question id=\"cachemiss\"><wirisCasSession><![CDATA[<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>random</mi><mo>(</mo><mn>1</mn><mo>.</mo><mo>.</mo><mn>10</mn><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mi>random</mi><mo>(</mo><mn>1</mn><mo>.</mo><mo>.</mo><mn>10</mn><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>c</mi><mo>=</mo><mi>a</mi><mo>+</mo><mi>b</mi></math></input></command></group></library></session>]]></wirisCasSession><correctAnswers><correctAnswer></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"/><assertion name=\"equivalent_symbolic\"/></assertions><options><option name=\"tolerance\">10^(-4)</option><option name=\"relative_tolerance\">false</option><option name=\"precision\">4</option><option name=\"implicit_times_operator\">false</option><option name=\"times_operator\">·</option><option name=\"imaginary_unit\">i</option></options><localData><data name=\"inputField\">inlineEditor</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"></data><data name=\"casSession\"/></localData></question>";
		$text = "#a  + #b = #c";
		$b = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $b->readQuestion($qstr);
		$s = $b->getQuizzesService();
		$qi = $b->newQuestionInstance(null);
		$s1 = Date::now()->getTime();
		$qi->update($s->execute($b->newVariablesRequest($text, $q, $qi)));
		$t1 = Date::now()->getTime() - $s1;
		$str1 = $qi->expandVariables($text);
		if(_hx_index_of($str1, "#", null) !== -1 || _hx_index_of($str1, "<math", null) === -1) {
			throw new HException("Failed test");
		}
		$qi = $b->newQuestionInstance(null);
		$s2 = Date::now()->getTime();
		$qi->update($s->execute($b->newVariablesRequest($text, $q, $qi)));
		$t2 = Date::now()->getTime() - $s2;
		$str2 = $qi->expandVariables($text);
		if(_hx_index_of($str2, "#", null) !== -1 || _hx_index_of($str2, "<math", null) === -1) {
			throw new HException("Failed test");
		}
		if($t2 >= $t1) {
			haxe_Log::trace("WARNING: Uncached question was faster than cached one! time miss: " . _hx_string_rec($t1, "") . "ms, time hit: " . _hx_string_rec($t2, "") . "ms.", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 820, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "testCache")));
		}
	}
	public function testFilter() {
		$text = "Hola <math><mn>3</mn></math> hola <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msqrt><mn>3</mn></msqrt></math>";
		$filter = com_wiris_quizzes_api_QuizzesBuilder::getInstance()->getMathFilter();
		$filtered = $filter->filter($text);
		$expected = "Hola <img src=\"" . com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=cache&amp;name=5ca7d1107389675d32b56ec097464c14.png\" align=\"middle\" /> hola <img src=\"" . com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=cache&amp;name=61eed805aa7caf23565ff147e24a35df.png\" align=\"middle\" />";
		if(!($expected === $filtered)) {
			throw new HException("Failed test filter. \x0AGot: " . $filtered . "\x0AExpected: " . $expected . "\x0A");
		}
	}
	public function testPerformance() {
		$text = "<p><span style=\"font-family: 'times new roman', times, serif; font-size: medium;\">Rounded to the nearest tenth of a foot, a #F foot mountain peak is _____ miles tall.  <br /></span></p>" . "<p><span style=\"text-decoration: underline;\"><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">UNIT</span><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"> CONVERSIONS</span></strong></span></p>\x0A" . "<ul>\x0A" . "<li><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">When converting from a larger to a smaller unit, multiply.</span></li>\x0A" . "<li><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">When converting from a smaller to a larger unit, divide.</span></li>\x0A" . "</ul>\x0A" . "<p><strong><span style=\"text-decoration: underline;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">COMMON MEASUREMENT CONVERSIONS AND FACTS</span></span></strong></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Length</span>:</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Customary:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 foot <em>(</em><em>ft</em><em>)</em> = 12 inches <em>(in)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 yard <em>(yd)</em> = 3 feet <em>(ft)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 mile <em>(mi)</em> = 5,280 feet <em>(ft)</em></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Metric:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 centimeter <em>(cm</em><em>)</em> = 10 millimeters <em>(mm)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 meter <em>(m)</em> = 100 centimeters <em>(cm)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 kilometer <em>(km)</em> = 1,000 meters <em>(m)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tools used to measure length: ruler, yard stick, meter stick, measuring tape</span></p>\x0A" . "<p><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><strong><span style=\"text-decoration: underline;\">Time</span>:</strong><br /></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 day = 24 hours <em>(hrs)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 hour <em>(hr)</em> = 60 minutes <em>(min)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 minute <em>(min)</em> = 60 seconds <em>(sec)</em></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 week = 7 days</span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 year = 365 days</span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 year = 52 weeks</span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tools used to measure time: clock, calendar</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Mass</span> (Metric):</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 gram <em>(g</em><em>)</em> = 1,000 milligrams <em>(mg)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 kilogram <em>(kg)</em> = 1,000 grams <em>(g)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tool used to measure mass: scale</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Weight</span> (Customary):</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 pound <em>(lb</em><em>)</em> = 16 ounces <em>(oz)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 ton = 2,000 pounds <em>(lbs)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tool used to measure weight: scale</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Volume (Capacity)</span>:</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Customary:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 cup <em>(c</em><em>)</em> = 8 fluid ounces <em>(oz)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 pint <em>(pt)</em> = 2 cups <em>(c)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 quart <em>(qt)</em> = 2 pints <em>(pt)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 gallon <em>(gal)</em> = 4 quarts <em>(qt)</em></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Metric:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 liter <em>(L</em><em>)</em> = 1,000 milliliters <em>(ml)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tools used to measure volume: measuring cups</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Angle</span>:</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Line = 180°</span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Circle = 360°</span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tool used to measure angle: protractor</span></p>" . "<p><strong><span style=\"background-color: #aaffaa;\">#CF</span></strong></p>" . "<p><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Your answer is correct, but it is not rounded to the nearest tenth.</span></p>" . "<p><span style=\"text-decoration: underline;\"><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">UNIT</span><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"> CONVERSIONS</span></strong></span></p>\x0A" . "<ul>\x0A" . "<li><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">When converting from a larger to a smaller unit, multiply.</span></li>\x0A" . "<li><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">When converting from a smaller to a larger unit, divide.</span></li>\x0A" . "</ul>\x0A" . "<p><strong><span style=\"text-decoration: underline;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">COMMON MEASUREMENT CONVERSIONS AND FACTS</span></span></strong></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Length</span>:</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Customary:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 foot <em>(</em><em>ft</em><em>)</em> = 12 inches <em>(in)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 yard <em>(yd)</em> = 3 feet <em>(ft)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 mile <em>(mi)</em> = 5,280 feet <em>(ft)</em></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Metric:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 centimeter <em>(cm</em><em>)</em> = 10 millimeters <em>(mm)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 meter <em>(m)</em> = 100 centimeters <em>(cm)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 kilometer <em>(km)</em> = 1,000 meters <em>(m)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tools used to measure length: ruler, yard stick, meter stick, measuring tape</span></p>\x0A" . "<p><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><strong><span style=\"text-decoration: underline;\">Time</span>:</strong><br /></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 day = 24 hours <em>(hrs)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 hour <em>(hr)</em> = 60 minutes <em>(min)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 minute <em>(min)</em> = 60 seconds <em>(sec)</em></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 week = 7 days</span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 year = 365 days</span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 year = 52 weeks</span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tools used to measure time: clock, calendar</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Mass</span> (Metric):</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 gram <em>(g</em><em>)</em> = 1,000 milligrams <em>(mg)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 kilogram <em>(kg)</em> = 1,000 grams <em>(g)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tool used to measure mass: scale</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Weight</span> (Customary):</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 pound <em>(lb</em><em>)</em> = 16 ounces <em>(oz)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 ton = 2,000 pounds <em>(lbs)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tool used to measure weight: scale</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Volume (Capacity)</span>:</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Customary:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 cup <em>(c</em><em>)</em> = 8 fluid ounces <em>(oz)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 pint <em>(pt)</em> = 2 cups <em>(c)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 quart <em>(qt)</em> = 2 pints <em>(pt)</em></span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 gallon <em>(gal)</em> = 4 quarts <em>(qt)</em></span></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><em>Metric:</em></span><br /> <span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">1 liter <em>(L</em><em>)</em> = 1,000 milliliters <em>(ml)</em></span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tools used to measure volume: measuring cups</span></p>\x0A" . "<p><strong><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\"><span style=\"text-decoration: underline;\">Angle</span>:</span></strong></p>\x0A" . "<p style=\"padding-left: 30px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Line = 180°</span><br /><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Circle = 360°</span></p>\x0A" . "<p style=\"padding-left: 60px;\"><span style=\"background-color: #ffaaaa; font-family: 'times new roman', times, serif;\">Tool used to measure angle: protractor</span></p>";
		$session = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><apply><csymbol definitionURL=\"http://www.wiris.com/XML/csymbol\">repeat</csymbol><mtable><mtr><mtd><mi>f</mi><mo>(</mo><mo>)</mo><mo>=</mo><mi>random</mi><mo>(</mo><mn>10001</mn><mo>,</mo><mn>15999</mn><mo>)</mo></mtd></mtr><mtr><mtd><mi>F</mi><mo>=</mo><mi>f</mi><mo>(</mo><mo>)</mo></mtd></mtr><mtr><mtd><mi>m</mi><mo>=</mo><mfrac><mi>F</mi><mn>528</mn></mfrac></mtd></mtr><mtr><mtd><mi>M</mi><mo>=</mo><mi>round</mi><mo>(</mo><mi>m</mi><mo>)</mo><mo>*</mo><mn>0</mn><mo>.</mo><mn>1</mn></mtd></mtr><mtr><mtd><mi>Ans</mi><mo>=</mo><mi>M</mi></mtd></mtr><mtr><mtd><mi>N</mi><mo>=</mo><mi>round</mi><mo>(</mo><mi>M</mi><mo>)</mo></mtd></mtr><mtr><mtd><mi>P</mi><mo>=</mo><mfrac><mi>F</mi><mn>5280</mn></mfrac></mtd></mtr></mtable><mrow><mi>M</mi><mo>=</mo><mi>N</mi></mrow></apply></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>WATest</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>:=</mo><mo>(</mo><mi>x</mi><mo>&ne;</mo><mi>Ans</mi><mo>)</mo><mo>?</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>u</mi><mo>(</mo><mo>)</mo><mo>=</mo><mi>random</mi><mo>(</mo><mn>1</mn><mo>,</mo><mn>23</mn><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>U</mi><mo>=</mo><mi>u</mi><mo>(</mo><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>1</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Excellent</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>2</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Outstanding</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>3</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>You</mi><mo>&nbsp;</mo><mi>got</mi><mo>&nbsp;</mo><mi>it</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>4</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>That</mi><mo>&apos;</mo><mi>s</mi><mo>&nbsp;</mo><mi>it</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>5</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Correct</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>6</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>You</mi><mo>&nbsp;</mo><mi>rock</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>7</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Perfect</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>8</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Wow</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>9</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Phenomenal</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>10</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Superstar</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>11</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Amazing</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>12</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Nice</mi><mo>&nbsp;</mo><mi>going</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>13</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>You</mi><mo>&apos;</mo><mi>re</mi><mo>&nbsp;</mo><mi>a</mi><mo>&nbsp;</mo><mi>rock</mi><mo>&nbsp;</mo><mi>star</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>14</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Mathlete</mi><mo>&nbsp;</mo><mi>extraordinaire</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>15</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Right</mi><mo>&nbsp;</mo><mi>on</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>16</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Genius</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>17</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Tremendous</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>18</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Stupendous</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>19</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Magnificent</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>20</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Incredible</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>21</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>You</mi><mo>&nbsp;</mo><mi>win</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>22</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>You</mi><mo>&apos;</mo><mi>re</mi><mo>&nbsp;</mo><mi>on</mi><mo>&nbsp;</mo><mi>fire</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Pos</mi><mo>(</mo><mn>23</mn><mo>)</mo><mo>=</mo><mo>&quot;</mo><mi>Awesome</mi><mo>!</mo><mo>&quot;</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>CF</mi><mo>=</mo><mi>Pos</mi><mo>(</mo><mi>U</mi><mo>)</mo></math></input></command></group></library></session>";
		$qb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $qb->newQuestion();
		$qq = _hx_deref(($q))->getImpl();
		$qq->wirisCasSession = $session;
		$qi = $qb->newQuestionInstance(null);
		$r = $qb->newVariablesRequest($text, $q, $qi);
		$qi->update($qb->getQuizzesService()->execute($r));
		$expanded = $qi->expandVariables($text);
		haxe_Log::trace($expanded, _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 778, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "testPerformance")));
	}
	public function responseTranslation1($s, $q) {
		$fr = "<session lang=\"fr\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\">library</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>aléa</mi><mo>(</mo><mn>1</mn><mo>.</mo><mo>.</mo><mn>10</mn><mo>)</mo></math></input></command></group></library></session>";
		$qq = _hx_deref(($q))->getImpl();
		$qq->update($s);
		$tr = $qq->wirisCasSession;
		if(!($fr === trim($tr))) {
			throw new HException(new com_wiris_system_Exception("Expected: \x0A" . $fr . "\x0A Got:\x0A" . $tr . "\x0A", null));
		}
	}
	public function testTranslation() {
		$en = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\">library</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>random</mi><mo>(</mo><mn>1</mn><mo>.</mo><mo>.</mo><mn>10</mn><mo>)</mo></math></input></command></group></library></session>";
		$q = new com_wiris_quizzes_impl_QuestionImpl();
		$q->wirisCasSession = $en;
		$r = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->newTranslationRequest($q, "fr");
		$s = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getQuizzesService();
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("translation1", $this, $q, null));
	}
	public function responseEncodings2($s, $q, $qi) {
		$texts = new _hx_array(array("• #a", "2 #b 3"));
		$results = new _hx_array(array("• 123", "2 < 3"));
		$qi->update($s);
		$i = null;
		{
			$_g1 = 0; $_g = $texts->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$expanded = $qi->expandVariablesText($texts[$i1]);
				if(!($expanded === $results[$i1])) {
					throw new HException(new com_wiris_system_Exception("Failed Test. Expected:\x0A" . $results[$i1] . ".\x0AGot:\x0A" . $expanded . "\x0A", null));
				}
				unset($i1,$expanded);
			}
		}
	}
	public function responseEncodings1($s, $q, $qi) {
		$text = "Encode #a.";
		$result = "Encode <math><mrow><mi mathvariant=\"normal\">&#960;</mi><mo>&#183;</mo><mfenced><mrow><mo>&#176;</mo><mo>'</mo></mrow></mfenced><mo>+</mo><mfenced><mrow><mi mathvariant=\"normal\">&#8477;</mi><mo>+</mo><mo>-&#8734;</mo><mo>+</mo><mi>x</mi><mo>&#183;</mo><mi>y</mi></mrow></mfenced><mo>+</mo><mi>&#920;</mi></mrow></math>.";
		$qi->update($s);
		$expanded = $qi->expandVariables($text);
		if(!($expanded === $result)) {
			throw new HException(new com_wiris_system_Exception("Failed Test. Expected:\x0A" . $result . ".\x0AGot:\x0A" . $expanded . "\x0A", null));
		}
	}
	public function testEncodings() {
		$session = "<session lang=\"en\" version=\"2.0\"><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>x</mi><mo>*</mo><mi>y</mi><mo>+</mo><reals/><cn>-&infin;</cn><mo>+</mo><pi/><mo>&nbsp;</mo><csymbol definitionURL=\"http://.../units/minute/angular\">&apos;</csymbol><csymbol definitionURL=\"http://.../units/degree/angular\">&deg;</csymbol><mi>&Theta;</mi></math></input><output><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><pi/><mo>*</mo><mfenced><mrow><csymbol definitionURL=\"http://.../units/degree/angular\">&deg;</csymbol><mo>&nbsp;</mo><csymbol definitionURL=\"http://.../units/minute/angular\">&apos;</csymbol></mrow></mfenced><mo>+</mo><mfenced><mrow><reals/><mo>+</mo><cn>-&infin;</cn><mo>+</mo><mi>x</mi><mo>*</mo><mi>y</mi></mrow></mfenced><mo>+</mo><mi>&Theta;</mi></math></output></command></group><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"/></input></command></group></session>";
		$text = "Encode #a.";
		$q = new com_wiris_quizzes_impl_QuestionImpl();
		$qi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
		$q->wirisCasSession = $session;
		$r = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->newVariablesRequest($text, $q, $qi);
		$s = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getQuizzesService();
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("encodings1", $this, $q, $qi));
		$text2 = "• #a";
		$text3 = "2 #b 3";
		$session2 = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>123</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mo>&quot;</mo><mo>&lt;</mo><mo>&quot;</mo></math></input></command></group></library></session>";
		$q = new com_wiris_quizzes_impl_QuestionImpl();
		$qi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
		$q->wirisCasSession = $session2;
		$r = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->newVariablesRequest($text2 . " " . $text3, $q, $qi);
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("encodings2", $this, $q, $qi));
	}
	public function responseRandomQuestion2($s, $q, $qi) {
		$qi->update($s);
		if(!$qi->isAnswerCorrect(0)) {
			throw new HException(new com_wiris_system_Exception("Failed Test!", null));
		}
	}
	public function responseRandomQuestion1($s, $q, $qi) {
		$text = "Hello! How much is #b - #a?";
		$correctAnswer = "#a";
		$qi->update($s);
		$deliveryText = $qi->expandVariables($text);
		if(!($deliveryText === "Hello! How much is <math><mrow><mn>2</mn></mrow></math> - <math><mrow><mn>1</mn></mrow></math>?")) {
			throw new HException(new com_wiris_system_Exception("Failed Test!", null));
		}
		$userAnswer = "1";
		$rb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$eqr = $rb->newEvalRequest($correctAnswer, $userAnswer, $q, $qi);
		$this->numCalls++;
		$rb->getQuizzesService()->executeAsync($eqr, new com_wiris_quizzes_test_TestIdServiceListener("randomquestion2", $this, $q, $qi));
	}
	public function testRandomQuestion() {
		$session = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mn>2</mn></math></input></command></group></library></session>";
		$correctAnswer = "#a";
		$text = "Hello! How much is #b - #a?";
		$b = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $b->newQuestion();
		$q->setAlgorithm($session);
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION, 0, 0, null);
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, 0, 0, null);
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$CHECK_SIMPLIFIED, 0, 0, null);
		$qi = $b->newQuestionInstance($q);
		$vqr = $b->newVariablesRequest($text . " " . $correctAnswer, $q, $qi);
		$quizzes = $b->getQuizzesService();
		$this->numCalls++;
		$quizzes->executeAsync($vqr, new com_wiris_quizzes_test_TestIdServiceListener("randomquestion1", $this, $q, $qi));
	}
	public function responseTolerance1($s) {
		$qi = com_wiris_quizzes_api_QuizzesBuilder::getInstance()->newQuestionInstance(null);
		$qi->update($s);
		$correct = $qi->isAnswerCorrect(0);
		if($correct) {
			throw new HException("Failed test!");
		}
	}
	public function testTolerance() {
		$correctAnswer = "<math><mfrac><mn>1</mn><mn>2</mn></mfrac></math>";
		$userAnswer = "0.501";
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = _hx_deref(($rb->newQuestion()))->getImpl();
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE, "10^(-3)");
		$req = $rb->newEvalRequest($correctAnswer, $userAnswer, $q, null);
		$s = $rb->getQuizzesService();
		$this->numCalls++;
		$s->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("tolerance1", $this, null, null));
		$q = _hx_deref(($rb->newQuestion()))->getImpl();
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_TOLERANCE, "10^(-2)");
		$req = $rb->newEvalRequest($correctAnswer, $userAnswer, $q, null);
		$this->numCalls++;
		$s->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, $q, null));
	}
	public function responseOpenQuestion1($s) {
		$qi = com_wiris_quizzes_api_QuizzesBuilder::getInstance()->newQuestionInstance(null);
		$qi->update($s);
		$correct = $qi->isAnswerCorrect(0);
		if(!$correct) {
			throw new HException("Failed test!");
		}
	}
	public function testOpenQuestionHand() {
		$correctAnswer = "1234";
		$userAnswer = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><semantics><mrow><mn>1234</mn></mrow><annotation encoding=\"application/json\">[[[47,74],[48,78],[50,84],[52,100],[53,119],[54,137],[55,153],[56,164],[58,169],[59,171],[60,172]],[[95,92],[96,92],[96,91],[96,90],[98,89],[101,87],[109,83],[129,77],[140,75],[147,74],[150,74],[151,75],[152,82],[152,94],[149,112],[140,130],[132,143],[128,150],[127,154],[128,154],[129,154],[130,154],[133,154],[143,153],[157,152],[170,152],[178,152],[181,152],[181,151]],[[204,85],[204,84],[206,83],[208,81],[210,81],[218,78],[231,76],[237,76],[241,76],[244,78],[246,81],[248,87],[248,94],[248,104],[242,113],[235,120],[230,123],[228,123],[229,123],[231,123],[234,123],[243,123],[252,124],[259,125],[266,130],[270,134],[272,140],[272,149],[268,153],[262,156],[255,157],[249,157],[242,157],[237,155],[234,153],[233,152],[233,151]],[[354,74],[353,75],[351,79],[346,82],[330,98],[319,110],[309,122],[302,130],[300,135],[299,136],[300,136],[302,136],[306,136],[317,136],[333,136],[365,137],[383,139],[390,141],[391,141]],[[366,165],[366,163],[366,159],[366,147],[366,122],[366,114],[361,62],[361,58],[360,50],[360,48]]]</annotation></semantics></math>";
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$eqs = $rb->newEvalRequest($correctAnswer, $userAnswer, null, null);
		$quizzes = $rb->getQuizzesService();
		$this->numCalls++;
		$quizzes->executeAsync($eqs, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, null, null));
	}
	public function testOpenQuestion() {
		$correctAnswer = "1+1";
		$userAnswer = "2";
		$rb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$rb->getConfiguration()->set(com_wiris_quizzes_api_ConfigurationKeys::$REFERER_URL, "hudson.wiris.info");
		$eqs = $rb->newEvalRequest($correctAnswer, $userAnswer, null, null);
		$quizzes = $rb->getQuizzesService();
		$this->numCalls++;
		$quizzes->executeAsync($eqs, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, null, null));
	}
	public function testAssertion() {
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $rb->newQuestion();
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION, 0, 0, new _hx_array(array(null, null, null, null, null, null, null, null, null, "true")));
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_EQUATIONS, 0, 0, null);
		$eqs = $rb->newEvalRequest("x^2=1", "x=1 or x=-1", $q, null);
		$this->numCalls++;
		$rb->getQuizzesService()->executeAsync($eqs, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, $q, null));
	}
	public function responseFloatFormat1($r, $q, $qi) {
		$qi->update($r);
		$computed = new _hx_array(array($qi->expandVariablesText("#a"), $qi->expandVariablesText("#b")));
		$expected = new _hx_array(array("123.456.789", "1.234,57"));
		$i = null;
		{
			$_g1 = 0; $_g = $computed->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!($computed[$i1] === $expected[$i1])) {
					throw new HException("Failed text! Got " . $computed[$i1] . " instead of " . $expected[$i1] . ".");
				}
				unset($i1);
			}
		}
	}
	public function testFloatFormat() {
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $rb->newQuestion();
		$qi = $rb->newQuestionInstance($q);
		$q->setAlgorithm("<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>123456789</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mn>1234</mn><mo>.</mo><mn>56789</mn></math></input></command></group></library></session>");
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR, ",");
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT, ",f");
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_PRECISION, "2");
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DIGIT_GROUP_SEPARATOR, ".");
		$req = $rb->newVariablesRequest("#a #b", $q, $qi);
		$this->numCalls++;
		$rb->getQuizzesService()->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("floatformat1", $this, $q, $qi));
	}
	public function responseFloatEval1($r, $q, $qi) {
		$qi->update($r);
		$res = $qi->expandVariablesMathML("#a");
		$expanded = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mrow><mrow><mn>1000000</mn></mrow></mrow></math>";
		if(!($res === $expanded)) {
			throw new HException("Failed test! Got: " . $res . " instead of " . $expanded . ".");
		}
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$req = $rb->newEvalRequest("#a", "1000001", $q, $qi);
		$this->numCalls++;
		$rb->getQuizzesService()->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("openquestion1", $this, $q, $qi));
	}
	public function testFloatEval() {
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $rb->newQuestion();
		$qi = $rb->newQuestionInstance($q);
		$q->setAlgorithm("<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1000000</mn><mo>.</mo></math></input></command></group></library></session>");
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$SYNTAX_QUANTITY, 0, 0, null);
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_DECIMAL_SEPARATOR, ",");
		$q->setOption(com_wiris_quizzes_api_QuizzesConstants::$OPTION_FLOAT_FORMAT, "mr");
		$req = $rb->newVariablesRequest("#a", $q, $qi);
		$this->numCalls++;
		$rb->getQuizzesService()->executeAsync($req, new com_wiris_quizzes_test_TestIdServiceListener("floateval1", $this, $q, $qi));
	}
	public function responseAnyAnswer1($s, $q, $qi) {
		$qi->update($s);
		if($qi->getAnswerGrade(0, 0, $q) !== 0.0) {
			throw new HException("Failed test!");
		}
		if($qi->getAnswerGrade(1, 0, $q) !== 1.0) {
			throw new HException("Failed test!");
		}
	}
	public function testAnyAnswer() {
		$correctAnswer = "123";
		$correctAnswer2 = "*";
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $rb->newQuestion();
		$q->setCorrectAnswer(0, $correctAnswer);
		$q->setCorrectAnswer(1, $correctAnswer2);
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, 0, 0, null);
		$q->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_ALL, 1, 0, null);
		$qi = $rb->newQuestionInstance(null);
		$qi->setStudentAnswer(0, "++++");
		$eqs = $rb->newEvalRequest(null, null, $q, $qi);
		$quizzes = $rb->getQuizzesService();
		$this->numCalls++;
		$quizzes->executeAsync($eqs, new com_wiris_quizzes_test_TestIdServiceListener("anyanswer1", $this, $q, $qi));
	}
	public function responseImages2($s, $q, $qi) {
		$text = "#p";
		$md5s = new _hx_array(array("1d35f135d9d9e9a3596c4143ac6b10bf", "4e0fa2b5e6d8b12ce9fda6541fdb5557", "d12e3d4c916bf89de659e0d53002dc8e", "49f8df1ac28ce771814d9f968ea13e36"));
		$qi->update($s);
		$res = $qi->expandVariables($text);
		if(!$this->checkImage($res, $md5s)) {
			throw new HException("Failed test!. Got:\x0A" . $res);
		}
	}
	public function checkImage($res, $md5s) {
		$expandedPre = "<img src=\"" . com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=cache&amp;name=";
		$expandedPost = ".png\" class=\"wirisplotter\"/>";
		$match = false;
		$i = null;
		{
			$_g1 = 0; $_g = $md5s->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($res === $expandedPre . $md5s[$i1] . $expandedPost) {
					$match = true;
				}
				unset($i1);
			}
		}
		return $match;
	}
	public function responseImages1($s, $q, $qi) {
		$text = "#p";
		$md5s = new _hx_array(array("1d35f135d9d9e9a3596c4143ac6b10bf", "4e0fa2b5e6d8b12ce9fda6541fdb5557", "d12e3d4c916bf89de659e0d53002dc8e", "49f8df1ac28ce771814d9f968ea13e36"));
		$qi->update($s);
		$res = $qi->expandVariables($text);
		if(!$this->checkImage($res, $md5s)) {
			throw new HException("Failed test!. Got:\x0A" . $res);
		}
		$rb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$r = $rb->newVariablesRequest(null, $q, $qi);
		$this->numCalls++;
		$rb->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("images2", $this, $q, $qi));
	}
	public function testImages() {
		$algorithm = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>&nbsp;</mo><mo>=</mo><mo>&nbsp;</mo><mi>plot</mi><mo>(</mo><mi>sin</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>)</mo></math></input></command></group></library></session>";
		$text = "#p";
		$rb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $rb->newQuestion();
		$q->setAlgorithm($algorithm);
		$qi = $rb->newQuestionInstance(null);
		$r = $rb->newVariablesRequest($text, $q, $qi);
		$s = $rb->getQuizzesService();
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("images1", $this, $q, $qi));
	}
	public function responseLang1($s, $q, $qi) {
		$text = "#a #t #f";
		$textexpanded = "sin(x) cert fals";
		$qi->update($s);
		$qqi = $qi;
		$qq = _hx_deref(($q))->getImpl();
		if(!$qqi->isCacheReady()) {
			throw new HException("Failed test!. Variable cache should be ready immediately after Question Instance update.\x0A");
		}
		$res = $qi->expandVariablesText($text);
		if(!($res === $textexpanded)) {
			throw new HException("Failed test!. Got:\x0A" . $res);
		}
		if(!$qqi->getBooleanVariableValue("#t")) {
			throw new HException("Failed test!. #t was true");
		}
		if($qqi->getBooleanVariableValue("f")) {
			throw new HException("Failed test!. f was false");
		}
		$langs = new _hx_array(array("en", "es", "ca", "it", "fr", "de", "el", "pt", "no", "nn", "da"));
		$tests = new _hx_array(array("Input method", "Método de entrada", "Mètode d'entrada", "Metodo di input", "Méthode de saisie", "Eingabemethode", "Μέθοδος εισόδου", "Método de entrada", "Inndatametode", "Inndatametode", "Inputmetode"));
		$i = null;
		{
			$_g1 = 0; $_g = $langs->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$g = new com_wiris_quizzes_impl_HTMLGui($langs[$i1]);
				$html = $g->getTabCorrectAnswer($qq, 0, "0", new com_wiris_quizzes_impl_HTMLGuiConfig("wirisopenanswer"));
				if(_hx_index_of($html, $tests[$i1], null) === -1) {
					throw new HException("Failed test!. String \"" . $tests[$i1] . "\" not found in popup for language \"" . $langs[$i1] . "\".\x0A");
				}
				unset($i1,$html,$g);
			}
		}
	}
	public function testLang() {
		$algorithm = "<session lang=\"ca\" version=\"2.0\"><library closed=\"false\"><mi style=\"color:#ffc800\">variables</mi><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>sin</mi><mo>(</mo><mi>x</mi><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>t</mi><mo>=</mo><mo>(</mo><mn>1</mn><mo>==</mo><mn>1</mn><mo>?</mo><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>f</mi><mo>=</mo><mo>(</mo><mn>1</mn><mo>==</mo><mn>0</mn><mo>?</mo><mo>)</mo></math></input></command></group></library></session>";
		$text = "#a #t #f";
		$rb = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $rb->newQuestion();
		$q->setAlgorithm($algorithm);
		$qi = $rb->newQuestionInstance($q);
		$r = $rb->newVariablesRequest($text, $q, $qi);
		$s = $rb->getQuizzesService();
		$this->numCalls++;
		$s->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("lang1", $this, $q, $qi));
	}
	public function responseMultianswer2($s, $q, $qi) {
		$qi->update($s);
		if(!($qi->getAnswerGrade(0, 0, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qi->getAnswerGrade(1, 1, $q) === 0.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qi->getAnswerGrade(2, 1, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qi->getAnswerGrade(3, 1, $q) === 0.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function responseMultianswer($s, $q, $qi) {
		$correct = new _hx_array(array("#a", "#b", "#b1", "#b2"));
		$user = new _hx_array(array("1", "2"));
		$qi->update($s);
		$builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$r = $builder->newEvalMultipleAnswersRequest($correct, $user, $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("multianswer2", $this, $q, $qi));
	}
	public function testMultiAnswer() {
		$correct = new _hx_array(array("#a", "#b", "#b1", "#b2"));
		$builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $builder->newQuestion();
		$q->addAssertion("equivalent_symbolic", 0, 0, null);
		$q->addAssertion("equivalent_symbolic", 1, 1, null);
		$q->addAssertion("equivalent_symbolic", 2, 1, null);
		$q->addAssertion("equivalent_symbolic", 3, 1, null);
		$q->setAlgorithm("<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mn>1</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b1</mi><mo>=</mo><mn>2</mn></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b2</mi><mo>=</mo><mn>3</mn></math></input></command></group></library></session>");
		$text = "";
		$i = null;
		{
			$_g1 = 0; $_g = $correct->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$text = $text . " " . $correct[$i1];
				unset($i1);
			}
		}
		$qi = $builder->newQuestionInstance(null);
		$r = $builder->newVariablesRequest($text, $q, null);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("multianswer", $this, $q, $qi));
	}
	public function responseCompoundSets($response, $q, $qi) {
		$qi->update($response);
		if(!($qi->getCompoundAnswerGrade(0, 0, 0, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qi->getCompoundAnswerGrade(0, 0, 1, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function testCompoundSets() {
		$qb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $qb->readQuestion("<question><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mfenced open=\"{\" close=\"}\"><mrow><mn>1</mn><mo>,</mo><mn>2</mn></mrow></mfenced><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mfenced open=\"{\" close=\"}\"><mrow><mn>3</mn><mo>,</mo><mn>4</mn></mrow></mfenced></math>]]></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"><param name=\"nobracketslist\">true</param></assertion><assertion name=\"equivalent_symbolic\"><param name=\"ordermatters\">false</param><param name=\"repetitionmatters\">false</param></assertion></assertions><options><option name=\"tolerance\">0.001</option><option name=\"relative_tolerance\">true</option><option name=\"precision\">4</option><option name=\"times_operator\">·</option><option name=\"implicit_times_operator\">false</option><option name=\"imaginary_unit\">i</option></options><localData><data name=\"inputField\">popupEditor</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"></data><data name=\"inputCompound\">true</data></localData></question>");
		$userAnswer = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mn>1</mn><mspace linebreak=\"newline\"/><mn>2</mn><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>3</mn><mspace linebreak=\"newline\"/><mn>4</mn></math>";
		$qi = $qb->newQuestionInstance($q);
		$r = $qb->newEvalMultipleAnswersRequest(null, new _hx_array(array($userAnswer)), $q, $qi);
		$this->numCalls++;
		$qb->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("compoundsets", $this, $q, $qi));
	}
	public function responseCompound4($s, $q, $qi) {
		$qi->update($s);
		$this->checkEqualFloats($qi->getAnswerGrade(0, 0, $q), 1.0);
		$this->checkEqualFloats($qi->getAnswerGrade(0, 1, $q), 2.0 / 3.0);
		$this->checkEqualFloats($qi->getAnswerGrade(0, 2, $q), 5.0 / 6.0);
		if(!($qi->getCompoundAnswerGrade(0, 0, 0, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qi->getCompoundAnswerGrade(0, 1, 0, $q) === 0.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qi->getCompoundAnswerGrade(0, 2, 2, $q) === 0.5)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function checkEqualFloats($a, $b) {
		$d = com_wiris_quizzes_test_Tester_0($this, $a, $b);
		if($d > 0.00000000001) {
			throw new HException(new com_wiris_system_Exception("Failed test: expected " . _hx_string_rec($b, "") . " but got " . _hx_string_rec($a, "") . ".", null));
		}
	}
	public function responseCompound3($s, $q, $qi) {
		$qi->update($s);
		$qqi = $qi;
		$qq = _hx_deref(($q))->getImpl();
		if(!($qqi->getAnswerGrade(0, 0, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qqi->getAnswerGrade(1, 0, $q) === 0.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qqi->getCompoundAnswerGrade(0, 0, 0, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qqi->getCompoundAnswerGrade(0, 0, 2, $q) === 1.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qqi->getCompoundAnswerGrade(1, 0, 0, $q) === 0.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!($qqi->getCompoundAnswerGrade(1, 0, 2, $q) === 0.0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function responseCompound2($s, $q, $qi) {
		$qi->update($s);
		$qqi = $qi;
		if(!$qqi->isAnswerMatching(0, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function responseCompound1($s, $q, $qi) {
		$qi->update($s);
		$qqi = $qi;
		$qq = _hx_deref(($q))->getImpl();
		if(!$qqi->isAnswerMatching(0, 0)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->isAnswerMatching(0, 1)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->isAnswerMatching(0, 2)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(!$qqi->isAnswerMatching(0, 3)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getCompoundAnswerGrade(0, 1, 0, $qq) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getCompoundAnswerGrade(0, 1, 1, $qq) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getCompoundAnswerGrade(0, 1, 2, $qq) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getCompoundAnswerGrade(0, 2, 0, $qq) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getCompoundAnswerGrade(0, 2, 1, $qq) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getCompoundAnswerGrade(0, 2, 2, $qq) !== 0.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		$qq->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_GRADE_DISTRIBUTE);
		$qq->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE_DISTRIBUTION, "20% 30% 50%");
		if($qqi->getAnswerGrade(0, 0, $qq) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getAnswerGrade(0, 1, $qq) !== 0.8) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getAnswerGrade(0, 2, $qq) !== 0.2) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if($qqi->getAnswerGrade(0, 3, $qq) !== 1.0) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		$qq->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_GRADE_DISTRIBUTE);
		$qq->removeLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE_DISTRIBUTION);
		if(Math::round($qqi->getAnswerGrade(0, 1, $qq) * 100) / 100.0 !== 0.67) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		if(Math::round($qqi->getAnswerGrade(0, 2, $qq) * 100) / 100.0 !== 0.33) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function testCompound() {
		$correctAnswer = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><msqrt><mn>2</mn></msqrt><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mi>x</mi><mspace linebreak=\"newline\"/><mi>z</mi><mo>=</mo><mn>0</mn></math>";
		$userCorrectAnswer = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><msqrt><mn>1</mn><mo>+</mo><mn>1</mn></msqrt><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mi>x</mi><mspace linebreak=\"newline\"/><mi>z</mi><mo>=</mo><mn>0</mn></math>";
		$userIncorectAnswer = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>0</mn><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mi>x</mi><mspace linebreak=\"newline\"/><mi>z</mi><mo>=</mo><mn>0</mn></math>";
		$userIncorrectAnswer2 = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><msqrt><mn>2</mn></msqrt></math>";
		$u = new com_wiris_quizzes_impl_UserData();
		$u->setUserCompoundAnswer(3, 0, "<math><msqrt><mn>2</mn></msqrt></math>");
		$u->setUserCompoundAnswer(3, 1, "x");
		$u->setUserCompoundAnswer(3, 2, "0");
		$userCorrectAnswer2 = _hx_array_get($u->answers, 3)->content;
		$builder = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance();
		$q = $builder->newQuestion();
		$qq = _hx_deref(($q))->getImpl();
		$qq->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE);
		$qi = $builder->newQuestionInstance(null);
		$r = $builder->newEvalMultipleAnswersRequest(new _hx_array(array($correctAnswer)), new _hx_array(array($userCorrectAnswer, $userIncorectAnswer, $userIncorrectAnswer2, $userCorrectAnswer2)), $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("compound1", $this, $q, $qi));
		$correctAnswer = "<math><mtable columnalign=\"left\" rowspacing=\"0\"><mtr><mtd><mi>x</mi><mo>=</mo><msqrt><mn>2</mn></msqrt></mtd></mtr><mtr><mtd><mi>y</mi><mo>=</mo><mi>x</mi></mtd></mtr><mtr><mtd><mi>z</mi><mo>=</mo><mn>0</mn></mtd></mtr></mtable></math>";
		$r = $builder->newEvalRequest($correctAnswer, $userCorrectAnswer, $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("compound2", $this, $q, $qi));
		$qq->wirisCasSession = "<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mi style=\"color:#ffc800\">variables</mi><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>test</mi><mo>(</mo><mi>a</mi><mo>,</mo><mi>b</mi><mo>,</mo><mi>c</mi><mo>)</mo><mo>:</mo><mo>=</mo><mfenced><mrow><mi>a</mi><mo>==</mo><msqrt><mn>2</mn></msqrt><mo>&and;</mo><mi>b</mi><mo>==</mo><mi>x</mi><mo>&and;</mo><mi>c</mi><mo>==</mo><mn>0</mn></mrow></mfenced><mo>&nbsp;</mo><mo>?</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>test2</mi><mo>(</mo><mi>a</mi><mo>,</mo><mi>b</mi><mo>,</mo><mi>c</mi><mo>)</mo><mo>:</mo><mo>=</mo><mo>(</mo><mi>a</mi><mo>==</mo><mn>0</mn><mo>&and;</mo><mi>b</mi><mo>==</mo><mn>0</mn><mo>&and;</mo><mi>c</mi><mo>==</mo><mn>0</mn><mo>)</mo><mo>&nbsp;</mo><mo>?</mo></math></input></command></group></library></session>";
		$qq->setParametrizedAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION, "0", "0", new _hx_array(array("test")));
		$qq->setParametrizedAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION, "1", "0", new _hx_array(array("test2")));
		$r = $builder->newEvalMultipleAnswersRequest(new _hx_array(array($correctAnswer, $correctAnswer)), new _hx_array(array($userCorrectAnswer)), $q, $qi);
		$this->numCalls++;
		$builder->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("compound3", $this, $q, $qi));
		$q2 = $builder->newQuestion();
		$q2->setAlgorithm("<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mi style=\"color:#ffc800\">variables</mi><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>test</mi><mo>(</mo><mi>a</mi><mo>,</mo><mi>b</mi><mo>,</mo><mi>c</mi><mo>)</mo><mo>:</mo><mo>=</mo><mo>[</mo><mi>a</mi><mo>==</mo><msqrt><mn>2</mn></msqrt><mo>&nbsp;</mo><mo>?</mo><mo>,</mo><mi>b</mi><mo>==</mo><mi>x</mi><mo>&nbsp;</mo><mo>?</mo><mo>,</mo><mi>if</mi><mo>&nbsp;</mo><mi>c</mi><mo>==</mo><mn>0</mn><mo>&nbsp;</mo><mi>then</mi><mo>&nbsp;</mo><mn>1</mn><mo>&nbsp;</mo><mi>else_if</mi><mo>&nbsp;</mo><mi>c</mi><mo>&gt;</mo><mn>0</mn><mo>&nbsp;</mo><mi>then</mi><mo>&nbsp;</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&nbsp;</mo><mi>else</mi><mo>&nbsp;</mo><mn>0</mn><mo>&nbsp;</mo><mi>end</mi><mo>]</mo></math></input></command></group></library><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"/></input></command></group></session>");
		$q2->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION, 0, 0, new _hx_array(array("test")));
		$q2->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION, 0, 1, new _hx_array(array("test")));
		$q2->addAssertion(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION, 0, 2, new _hx_array(array("test")));
		$q2->setCorrectAnswer(0, $correctAnswer);
		$q2->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_TRUE);
		$q2->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE, com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_COMPOUND_ANSWER_GRADE_DISTRIBUTE);
		$q2->setProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_COMPOUND_ANSWER_GRADE_DISTRIBUTION, "33% 33% 33%");
		$userIncorrectAnswer3 = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><msqrt><mn>2</mn></msqrt><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mi>x</mi><mspace linebreak=\"newline\"/><mi>z</mi><mo>=</mo><mn>10</mn></math>";
		$i2 = $builder->newQuestionInstance($q2);
		$i2->setStudentAnswer(0, $userCorrectAnswer);
		$i2->setStudentAnswer(1, $userIncorectAnswer);
		$i2->setStudentAnswer(2, $userIncorrectAnswer3);
		$this->numCalls++;
		$r = $builder->newFeedbackRequest("#answer1 #answer2 #answer3 #answer4", $q2, $i2);
		$builder->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("compound4", $this, $q2, $i2));
	}
	public function responseHandwritingConstraints($s, $q, $qi) {
		$qi->update($s);
		$json = com_wiris_util_json_JSon::decode($qi->getProperty(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_HANDWRITING_CONSTRAINTS));
		$symbols = $json->get("symbols");
		if($this->inArray("s", $symbols) || !$this->inArray("z", $symbols) || !$this->inArray("2", $symbols) || $this->inArray("X", $symbols) || $this->inArray("Y", $symbols) || !$this->inArray("cos", $symbols)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
	}
	public function testHandwritingConstraints() {
		$question = "<question><wirisCasSession><![CDATA[<session lang=\"en\" version=\"2.0\"><library closed=\"false\"><mtext style=\"color:#ffc800\" xml:lang=\"en\">variables</mtext><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mi>sin</mi><mo>(</mo><mi>x</mi><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>b</mi><mo>=</mo><mi>cos</mi><mo>(</mo><mi>y</mi><mo>)</mo></math></input></command><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>c</mi><mo>=</mo><mn>2</mn><mo>*</mo><mi>x</mi><mo>+</mo><mn>3</mn><mo>*</mo><mi>y</mi><mo>+</mo><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>*</mo><mi>z</mi></math></input></command></group></library><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"/></input></command></group></session>]]></wirisCasSession><correctAnswers><correctAnswer type=\"mathml\"><![CDATA[<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>#</mo><mi>a</mi><mo>-</mo><mn>5</mn></math>]]></correctAnswer></correctAnswers><assertions><assertion name=\"syntax_expression\"/><assertion name=\"equivalent_symbolic\"/></assertions><options><option name=\"tolerance\">10^(-3)</option><option name=\"relative_tolerance\">true</option><option name=\"precision\">4</option><option name=\"times_operator\">·</option><option name=\"implicit_times_operator\">false</option><option name=\"imaginary_unit\">i</option></options><localData><data name=\"inputField\">inlineHand</data><data name=\"gradeCompound\">and</data><data name=\"gradeCompoundDistribution\"></data><data name=\"casSession\"/></localData></question>";
		$qb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
		$q = $qb->readQuestion($question);
		$qi = $qb->newQuestionInstance($q);
		$json = com_wiris_util_json_JSon::decode($qi->getProperty(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_HANDWRITING_CONSTRAINTS));
		$symbols = $json->get("symbols");
		if($this->inArray("s", $symbols) || !$this->inArray("a", $symbols) || $this->inArray("cos", $symbols)) {
			throw new HException(new com_wiris_system_Exception("Failed test!", null));
		}
		$r = $qb->newVariablesRequest("#a #b #c", $q, $qi);
		$this->numCalls++;
		$qb->getQuizzesService()->executeAsync($r, new com_wiris_quizzes_test_TestIdServiceListener("handwritingConstraints", $this, $q, $qi));
	}
	public function run() {
		$g = new com_wiris_quizzes_impl_HTMLGui("en");
		$c = new com_wiris_quizzes_impl_HTMLGuiConfig("");
		$e = new com_wiris_system_Exception("Dummy", null);
		$t = new com_wiris_quizzes_test_TestIdServiceListener(null, null, null, null);
		haxe_Log::trace("Starting generic integration test...", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 58, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "run")));
		$this->numCalls++;
		$this->start = Date::now();
		$h = new com_wiris_quizzes_impl_HTMLToolsUnitTests();
		$h->run();
		haxe_Log::trace("HTML unit test OK!", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 65, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "run")));
		haxe_Log::trace("Service url: " . com_wiris_quizzes_api_QuizzesBuilder::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$SERVICE_URL), _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 66, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "run")));
		$this->testOpenQuestion();
		$this->testCompatibility();
		$this->testSubQuestion2();
		$this->testSubQuestion3();
		$this->testSubQuestion4();
		$this->testParameters();
		$this->testUserId();
		$this->testHandwritingConstraints();
		$this->testMultiAnswer();
		$this->testBugs();
		$this->testUnicode();
		$this->testFeedback();
		$this->testFeedback3();
		$this->testOpenQuestionHand();
		$this->testAnyAnswer();
		if(!(com_wiris_settings_PlatformSettings::$IS_FLASH || com_wiris_settings_PlatformSettings::$IS_JAVASCRIPT)) {
			$this->testCache();
			$this->testFilter();
		}
		$this->testEncodings();
		$this->testCompound();
		$this->testTranslation();
		$this->testTolerance();
		$this->testRandomQuestion();
		$this->testFloatFormat();
		if(!(com_wiris_settings_PlatformSettings::$IS_FLASH || com_wiris_settings_PlatformSettings::$IS_JAVASCRIPT)) {
			$this->testImages();
		}
		$this->testBugs();
		$this->testFloatEval();
		$this->testAssertion();
		$this->testDeprecated();
		$this->testLang();
		$this->testSubQuestion1();
		$this->endCall();
	}
	public function endCall() {
		$this->numCalls--;
		if($this->numCalls <= 0) {
			$end = Date::now();
			haxe_Log::trace("Successful test!. Time: " . _hx_string_rec(($end->getTime() - $this->start->getTime()), "") . "ms.", _hx_anonymous(array("fileName" => "Tester.hx", "lineNumber" => 45, "className" => "com.wiris.quizzes.test.Tester", "methodName" => "endCall")));
		}
	}
	public $numCalls;
	public $start;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->�dynamics[$m]) && is_callable($this->�dynamics[$m]))
			return call_user_func_array($this->�dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call �'.$m.'�');
	}
	static function main() {
		$argv = Sys::args();
		try {
			$t = new com_wiris_quizzes_test_Tester();
			$t->run();
		}catch(Exception $�e) {
			$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
			$x = $_ex_;
			{
				throw new HException($x);
			}
		}
	}
	function __toString() { return 'com.wiris.quizzes.test.Tester'; }
}
function com_wiris_quizzes_test_Tester_0(&$�this, &$a, &$b) {
	if($a < $b) {
		return $b - $a;
	} else {
		return $a - $b;
	}
}
