<?php

class com_wiris_quizzes_impl_HTMLTools {
	public function __construct() {
		;
	}
	public function isMathMLString($math) {
		$math = trim($math);
		return StringTools::startsWith($math, "<math") && StringTools::endsWith($math, "</math>");
	}
	public function getAnswerVariables($answers, $keyword, $compound) {
		$h = new Hash();
		$i = null;
		if(!$compound) {
			{
				$_g1 = 0; $_g = $answers->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$a = $answers[$i1];
					if(!$h->exists($a->type)) {
						$h->set($a->type, new Hash());
					}
					$h->get($a->type)->set($keyword . _hx_string_rec(($i1 + 1), ""), $a->content);
					unset($i1,$a);
				}
			}
			if($answers->length === 1) {
				$h->get(_hx_array_get($answers, 0)->type)->set($keyword, _hx_array_get($answers, 0)->content);
			}
		} else {
			$answer = $answers[0];
			$a = com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswer($answer);
			{
				$_g1 = 0; $_g = $a->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$s = $a[$i1][1];
					$type = com_wiris_quizzes_impl_HTMLTools_0($this, $_g, $_g1, $a, $answer, $answers, $compound, $h, $i, $i1, $keyword, $s);
					if(!$h->exists($type)) {
						$h->set($type, new Hash());
					}
					$h->get($type)->set($keyword . _hx_string_rec(($i1 + 1), ""), $s);
					unset($type,$s,$i1);
				}
			}
			if(!$h->exists($answer->type)) {
				$h->set($answer->type, new Hash());
			}
			$h->get($answer->type)->set($keyword, $answer->content);
		}
		return $h;
	}
	public function expandAnswersText($text, $answers, $keyword, $compound) {
		if($answers === null || $answers->length === 0 || _hx_index_of($text, "#" . $keyword, null) === -1) {
			return $text;
		}
		$h = $this->getAnswerVariables($answers, $keyword, $compound);
		$textvariables = $h->get(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
		return $this->expandVariablesText($text, $textvariables);
	}
	public function expandAnswers($text, $answers, $keyword, $compound) {
		if($answers === null || $answers->length === 0 || _hx_index_of($text, "#" . $keyword, null) === -1) {
			return $text;
		}
		$h = $this->getAnswerVariables($answers, $keyword, $compound);
		return $this->expandVariables($text, $h);
	}
	public function setItemSeparator($sep) {
		$this->separator = (($sep === null) ? "," : $sep);
	}
	public function isImplicitArgumentFactor($x) {
		if($x->getNodeName() === "mi" || $x->getNodeName() === "mn") {
			return true;
		}
		if($x->getNodeName() === "msup") {
			$c = $x->firstElement();
			if($c !== null && $c->getNodeName() === "mi" || $c->getNodeName() === "mn") {
				return true;
			}
		}
		return false;
	}
	public function fullMathML2TextImpl($e) {
		$sb = new StringBuf();
		if($e->getNodeName() === "mo" || $e->getNodeName() === "mn" || $e->getNodeName() === "mi" || $e->getNodeName() === "mtext") {
			$sb->add(com_wiris_util_xml_WXmlUtils::getNodeValue($e->firstChild()));
		} else {
			if($e->getNodeName() === "mfenced" || $e->getNodeName() === "mtr" || $e->getNodeName() === "mtable") {
				$open = $e->get("open");
				if($open === null) {
					$open = "(";
				}
				$close = $e->get("close");
				if($close === null) {
					$close = ")";
				}
				$separators = $e->get("separators");
				if($separators === null) {
					$separators = ",";
				}
				if($open === "(" && $close === ")" && $e->firstElement()->getNodeName() === "mtable") {
					$open = "";
					$close = "";
				}
				$sb->add($open);
				$it = $e->elements();
				$i = 0;
				$n = haxe_Utf8::length($separators);
				while($it->hasNext()) {
					if($i > 0 && $n > 0) {
						$sb->add(com_wiris_quizzes_impl_HTMLTools_1($this, $close, $e, $i, $it, $n, $open, $sb, $separators));
					}
					$sb->add($this->fullMathML2TextImpl($it->next()));
					$i++;
				}
				$sb->add($close);
			} else {
				if($e->getNodeName() === "mfrac") {
					$it = $e->elements();
					$num = $this->fullMathML2TextImpl($it->next());
					if(strlen($num) > 1) {
						$num = "(" . $num . ")";
					}
					$den = $this->fullMathML2TextImpl($it->next());
					if(strlen($den) > 1) {
						$den = "(" . $den . ")";
					}
					$sb->add($num);
					$sb->add("/");
					$sb->add($den);
				} else {
					if($e->getNodeName() === "msup") {
						$it = $e->elements();
						$bas = $this->fullMathML2TextImpl($it->next());
						if(strlen($bas) > 1) {
							$bas = "(" . $bas . ")";
						}
						$exp = $this->fullMathML2TextImpl($it->next());
						if(strlen($exp) > 1) {
							$exp = "(" . $exp . ")";
						}
						$sb->add($bas);
						$sb->add("^");
						$sb->add($exp);
					} else {
						if($e->getNodeName() === "msqrt") {
							$sb->add("sqrt(");
							$e->setNodeName("math");
							$sb->add($this->fullMathML2TextImpl($e));
							$sb->add(")");
						} else {
							if($e->getNodeName() === "mroot") {
								$it = $e->elements();
								$rad = $this->fullMathML2TextImpl($it->next());
								$ind = $this->fullMathML2TextImpl($it->next());
								$sb->add("root(");
								$sb->add($rad);
								$sb->add(",");
								$sb->add($ind);
								$sb->add(")");
							} else {
								if($e->getNodeName() === "mspace" && "newline" === $e->get("linebreak")) {
									$sb->add("\x0A");
								} else {
									if($e->getNodeName() === "semantics") {
										$it = $e->elements();
										if($it->hasNext()) {
											$mml = $it->next();
											if($it->hasNext()) {
												$ann = $it->next();
												if($ann->getNodeName() === "annotation" && "text/plain" === $ann->get("encoding")) {
													return com_wiris_util_xml_WXmlUtils::getText($ann);
												}
											}
											return $this->fullMathML2TextImpl($mml);
										}
									} else {
										$it = $e->elements();
										while($it->hasNext()) {
											$x = $it->next();
											$sb->add($this->fullMathML2TextImpl($x));
											if($x->getNodeName() === "mi" && $this->isFunctionName(com_wiris_util_xml_WXmlUtils::getNodeValue($x->firstChild())) && $it->hasNext()) {
												$y = $it->next();
												if($y->getNodeName() === "msqrt" || $y->getNodeName() === "mfrac" || $y->getNodeName() === "mroot") {
													$sb->add("(");
													$sb->add($this->fullMathML2TextImpl($y));
													$sb->add(")");
												} else {
													$parentheses = false;
													$argument = new StringBuf();
													while($y !== null && $this->isImplicitArgumentFactor($y)) {
														if($y->getNodeName() === "msup") {
															$parentheses = true;
														}
														$argument->add($this->fullMathML2TextImpl($y));
														$y = (($it->hasNext()) ? $it->next() : null);
													}
													if($parentheses) {
														$sb->add("(");
													}
													$sb->add($argument->b);
													if($parentheses) {
														$sb->add(")");
													}
													if($y !== null) {
														$sb->add($this->fullMathML2TextImpl($y));
													}
													unset($parentheses,$argument);
												}
												unset($y);
											}
											unset($x);
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $sb->b;
	}
	public function mathMLToText($mathml) {
		$root = com_wiris_util_xml_WXmlUtils::parseXML($mathml);
		if($root->nodeType == Xml::$Document) {
			$root = $root->firstElement();
		}
		$this->removeMrows($root);
		return $this->fullMathML2TextImpl($root);
	}
	public function isReservedWordPrefix($token, $words) {
		$i = null;
		{
			$_g1 = 0; $_g = $words->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(StringTools::startsWith($words[$i1], $token)) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	public function reservedWordTokens($elem, $words) {
		$it = $elem->elements();
		while($it->hasNext()) {
			$this->reservedWordTokens($it->next(), $words);
		}
		if(_hx_index_of(com_wiris_quizzes_impl_HTMLTools::$MROWS, "@" . $elem->getNodeName() . "@", null) !== -1) {
			$children = new _hx_array(array());
			$it = $elem->elements();
			while($it->hasNext()) {
				$children->push($it->next());
			}
			$index = 0;
			while($index < $children->length) {
				$c = $children[$index];
				if($c->getNodeName() === "mi") {
					$mis = new _hx_array(array());
					$mitexts = new _hx_array(array());
					while($c !== null && $c->getNodeName() === "mi") {
						$text = com_wiris_util_xml_WXmlUtils::getNodeValue($c->firstChild());
						$mitexts->push($text);
						$mis->push($c);
						$index++;
						$c = com_wiris_quizzes_impl_HTMLTools_2($this, $c, $children, $elem, $index, $it, $mis, $mitexts, $text, $words);
						unset($text);
					}
					$k = 0;
					while($k < $mis->length) {
						$word = $mitexts[$k];
						$lastReservedWord = null;
						$j = 0;
						$l = 0;
						while($this->isReservedWordPrefix($word, $words)) {
							if(com_wiris_system_ArrayEx::contains($words, $word)) {
								$lastReservedWord = $word;
								$l = $j;
							}
							$j++;
							if($j + $k >= $mis->length) {
								break;
							}
							$word .= $mitexts[$k + $j];
						}
						if($lastReservedWord !== null) {
							if($mitexts[$k] === $lastReservedWord) {
								_hx_array_get($mis, $k)->set("mathvariant", "normal");
							} else {
								_hx_array_get($mis, $k)->removeChild(_hx_array_get($mis, $k)->firstChild());
								_hx_array_get($mis, $k)->addChild(com_wiris_util_xml_WXmlUtils::createPCData($elem, $lastReservedWord));
								$m = null;
								{
									$_g = 0;
									while($_g < $l) {
										$m1 = $_g++;
										$k++;
										$mi = $mis[$k];
										$elem->removeChild($mi);
										unset($mi,$m1);
									}
									unset($_g);
								}
								unset($m);
							}
						}
						$k++;
						unset($word,$lastReservedWord,$l,$j);
					}
					unset($mitexts,$mis,$k);
				} else {
					if($c->getNodeName() === "mn") {
						$first = $c;
						$index++;
						$c = com_wiris_quizzes_impl_HTMLTools_3($this, $c, $children, $elem, $first, $index, $it, $words);
						if($c !== null && $c->getNodeName() === "mn") {
							$mns = new _hx_array(array());
							$num = new StringBuf();
							$num->add(com_wiris_util_xml_WXmlUtils::getNodeValue($first->firstChild()));
							while($c !== null && $c->getNodeName() === "mn") {
								$mns->push($c);
								$num->add(com_wiris_util_xml_WXmlUtils::getNodeValue($c->firstChild()));
								$index++;
								$c = com_wiris_quizzes_impl_HTMLTools_4($this, $c, $children, $elem, $first, $index, $it, $mns, $num, $words);
							}
							$first->removeChild($first->firstChild());
							$first->addChild(com_wiris_util_xml_WXmlUtils::createPCData($first, $num->b));
							$m = null;
							{
								$_g1 = 0; $_g = $mns->length;
								while($_g1 < $_g) {
									$m1 = $_g1++;
									$elem->removeChild($mns[$m1]);
									unset($m1);
								}
								unset($_g1,$_g);
							}
							unset($num,$mns,$m);
						}
						unset($first);
					} else {
						$index++;
						$c = com_wiris_quizzes_impl_HTMLTools_5($this, $c, $children, $elem, $index, $it, $words);
					}
				}
				unset($c);
			}
		}
	}
	public function restoreFlatMathML($elem) {
		$it = $elem->elements();
		while($it->hasNext()) {
			$this->restoreFlatMathML($it->next());
		}
		if(_hx_index_of(com_wiris_quizzes_impl_HTMLTools::$MROWS, "@" . $elem->getNodeName() . "@", null) !== -1) {
			$children = $elem->elements();
			$elements = new _hx_array(array());
			while($children->hasNext()) {
				$elements->push($children->next());
			}
			if($elements->length > 0) {
				$current = $elements[0];
				$i = 1;
				while($i < $elements->length) {
					$previous = $current;
					$current = $elements[$i++];
					if(_hx_index_of(com_wiris_quizzes_impl_HTMLTools::$MSUPS, "@" . $current->getNodeName() . "@", null) !== -1) {
						$elem->removeChild($previous);
						$current->insertChild($previous, 0);
					}
					unset($previous);
				}
			}
		}
	}
	public function removeMrows($elem) {
		if($elem->nodeType != Xml::$Element && $elem->nodeType != Xml::$Document) {
			return;
		}
		$children = $elem->iterator();
		while($children->hasNext()) {
			$this->removeMrows($children->next());
		}
		$children = $elem->iterator();
		$i = 0;
		while($children->hasNext()) {
			$c = $children->next();
			if($c->nodeType == Xml::$Element) {
				if($c->getNodeName() === "mrow") {
					$mrowChildren = $c->elements();
					$singlechild = false;
					if($mrowChildren->hasNext()) {
						$mrowChildren->next();
						$singlechild = !$mrowChildren->hasNext();
					}
					if($singlechild || _hx_index_of(com_wiris_quizzes_impl_HTMLTools::$MROWS, $elem->getNodeName(), null) !== -1) {
						$elem->removeChild($c);
						$n = null;
						$count = 0;
						while(($n = $c->firstChild()) !== null) {
							$c->removeChild($n);
							$elem->insertChild($n, $i + $count);
							$count++;
						}
						if($count !== 1) {
							$i = -1;
							$children = $elem->iterator();
						}
						unset($n,$count);
					}
					unset($singlechild,$mrowChildren);
				} else {
					if($c->getNodeName() === "mfenced") {
						if("(" === $c->get("open")) {
							$c->remove("open");
						}
						if(")" === $c->get("close")) {
							$c->remove("close");
						}
					}
				}
			}
			$i++;
			unset($c);
		}
	}
	public function breakMis($elem, $pos) {
		if($elem->nodeType != Xml::$Element && $elem->nodeType != Xml::$Document) {
			return;
		}
		$children = $elem->iterator();
		$i = 0;
		while($children->hasNext()) {
			$this->breakMis($children->next(), $i);
			$i++;
		}
		if($elem->nodeType == Xml::$Element && $elem->getNodeName() === "mi") {
			$text = com_wiris_util_xml_WXmlUtils::getNodeValue($elem->firstChild());
			if(haxe_Utf8::length($text) > 1) {
				$p = $elem->_parent;
				$mrow = Xml::createElement("mrow");
				$p->removeChild($elem);
				$p->insertChild($mrow, $pos);
				while(strlen($text) > 0) {
					$mi = Xml::createElement("mi");
					$chartext = haxe_Utf8::sub($text, 0, 1);
					$mi->addChild(com_wiris_util_xml_WXmlUtils::createPCData($elem, $chartext));
					$text = _hx_substr($text, strlen($chartext), null);
					$mrow->addChild($mi);
					unset($mi,$chartext);
				}
			} else {
				$elem->remove("mathvariant");
			}
		}
	}
	public function flattenMsups($elem, $pos) {
		if($elem->nodeType != Xml::$Element && $elem->nodeType != Xml::$Document) {
			return;
		}
		$children = $elem->iterator();
		$i = 0;
		while($children->hasNext()) {
			$this->flattenMsups($children->next(), $i);
			$i++;
		}
		if($elem->nodeType == Xml::$Element && _hx_index_of(com_wiris_quizzes_impl_HTMLTools::$MSUPS, "@" . $elem->getNodeName() . "@", null) !== -1) {
			$n = $elem->_parent;
			$mrow = Xml::createElement("mrow");
			$c = $elem->firstElement();
			$elem->removeChild($c);
			$mrow->addChild($c);
			$n->removeChild($elem);
			$mrow->addChild($elem);
			$n->insertChild($mrow, $pos);
		}
	}
	public function updateReservedWords($mathml, $words) {
		if($mathml === null || trim($mathml) === "") {
			return "";
		}
		$mathml = com_wiris_util_xml_WXmlUtils::resolveEntities($mathml);
		$doc = Xml::parse($mathml);
		$this->flattenMsups($doc, 0);
		$this->breakMis($doc, 0);
		$this->removeMrows($doc);
		$this->reservedWordTokens($doc->firstElement(), $words);
		$this->restoreFlatMathML($doc->firstElement());
		return com_wiris_util_xml_WXmlUtils::serializeXML($doc);
	}
	public function getParentTag($s, $n) {
		$stack = new _hx_array(array());
		$error = false;
		while(($n = _hx_index_of($s, "<", $n)) !== -1 && !$error) {
			if($this->isQuizzesIdentifierStart(_hx_char_code_at($s, $n + 1))) {
				$close = _hx_index_of($s, ">", $n);
				$space = _hx_index_of($s, " ", $n);
				if($space !== -1 && $space < $close) {
					$close = $space;
				}
				if($close !== -1) {
					$stack->push(_hx_substr($s, $n + 1, $close - $n - 1));
				} else {
					$error = true;
				}
				unset($space,$close);
			} else {
				if(_hx_char_code_at($s, $n + 1) === 47) {
					$close = _hx_index_of($s, ">", $n);
					$tag = _hx_substr($s, $n + 2, $close - $n - 2);
					if($stack->length === 0) {
						return $tag;
					} else {
						if(!($stack->pop() === $tag)) {
							$error = true;
						}
					}
					unset($tag,$close);
				} else {
					if(_hx_substr($s, $n, 4) === "<!--") {
						$n = _hx_index_of($s, "-->", $n);
						if($n === -1) {
							$error = true;
						}
					}
				}
			}
			$n++;
		}
		return null;
	}
	public function isEntity($s, $n) {
		if($n > 0 && _hx_char_code_at($s, $n - 1) === 38) {
			$n++;
			$end = _hx_index_of($s, ";", $n);
			if($end !== -1) {
				while($this->isQuizzesIdentifierPart(_hx_char_code_at($s, $n))) {
					$n++;
				}
				return $n === $end;
			}
		}
		return false;
	}
	public function variablePosition($s, $n) {
		if($this->insideTag($s, $n) || $this->isEntity($s, $n) || $this->insideComment($s, $n)) {
			return com_wiris_quizzes_impl_HTMLTools::$POSITION_NONE;
		} else {
			$parent = $this->getParentTag($s, $n);
			if($parent === null) {
				return com_wiris_quizzes_impl_HTMLTools::$POSITION_ALL;
			}
			if($parent === "script" || $parent === "option") {
				return com_wiris_quizzes_impl_HTMLTools::$POSITION_ONLY_TEXT;
			} else {
				if($parent === "style") {
					return com_wiris_quizzes_impl_HTMLTools::$POSITION_NONE;
				} else {
					if($parent === "mi" || $parent === "mo" || $parent === "mtext" || $parent === "ms") {
						return com_wiris_quizzes_impl_HTMLTools::$POSITION_ONLY_MATHML;
					} else {
						if($parent === "td") {
							return com_wiris_quizzes_impl_HTMLTools::$POSITION_TABLE;
						} else {
							return com_wiris_quizzes_impl_HTMLTools::$POSITION_ALL;
						}
					}
				}
			}
		}
	}
	public function extractTextFromMathML($formula) {
		if(_hx_index_of($formula, "<mtext", null) === -1) {
			return $formula;
		}
		$allowedTags = new _hx_array(array("math", "mrow"));
		$stack = new _hx_array(array());
		$omittedcontent = false;
		$lasttag = null;
		$beginformula = _hx_index_of($formula, "<", null);
		$start = null;
		$end = 0;
		while($end < strlen($formula) && ($start = _hx_index_of($formula, "<", $end)) !== -1) {
			$end = _hx_index_of($formula, ">", $start);
			$tag = _hx_substr($formula, $start, $end - $start + 1);
			$trimmedTag = _hx_substr($formula, $start + 1, $end - $start - 1);
			if(_hx_substr($trimmedTag, strlen($trimmedTag) - 1, null) === "/") {
				continue;
			}
			$spacepos = _hx_index_of($tag, " ", null);
			if($spacepos !== -1) {
				$trimmedTag = _hx_substr($tag, 1, $spacepos - 1);
			}
			if($this->inArray($trimmedTag, $allowedTags)) {
				$stack->push(new _hx_array(array($trimmedTag, $tag)));
				$lasttag = $trimmedTag;
			} else {
				if($trimmedTag === "/" . $lasttag) {
					$stack->pop();
					if($stack->length > 0) {
						$lastpair = $stack[$stack->length - 1];
						$lasttag = $lastpair[0];
						unset($lastpair);
					} else {
						$lasttag = null;
					}
					if($stack->length === 0 && !$omittedcontent) {
						$formula1 = _hx_substr($formula, 0, $beginformula);
						if($end < strlen($formula) - 1) {
							$formula2 = _hx_substr($formula, $end + 1, null);
							$formula = $formula1 . $formula2;
							unset($formula2);
						} else {
							$formula = $formula1;
						}
						unset($formula1);
					}
				} else {
					if($trimmedTag === "mtext") {
						$pos2 = _hx_index_of($formula, "</mtext>", $start);
						$text = _hx_substr($formula, $start + 7, $pos2 - $start - 7);
						$text = com_wiris_util_xml_WXmlUtils::resolveEntities($text);
						$nbsp = com_wiris_quizzes_impl_HTMLTools_6($this, $allowedTags, $beginformula, $end, $formula, $lasttag, $omittedcontent, $pos2, $spacepos, $stack, $start, $tag, $text, $trimmedTag);
						$nbspLength = strlen($nbsp);
						if(strlen($text) >= $nbspLength) {
							if(_hx_substr($text, 0, $nbspLength) === $nbsp) {
								$text = " " . _hx_substr($text, $nbspLength, null);
							}
							if(strlen($text) >= $nbspLength && _hx_substr($text, strlen($text) - $nbspLength, null) === $nbsp) {
								$text = _hx_substr($text, 0, strlen($text) - $nbspLength) . " ";
							}
						}
						$formula1 = _hx_substr($formula, 0, $start);
						$formula2 = _hx_substr($formula, $pos2 + 8, null);
						if($omittedcontent) {
							$tail1 = "";
							$head2 = "";
							$i = $stack->length - 1;
							while($i >= 0) {
								$pair = $stack[$i];
								$tail1 = $tail1 . "</" . $pair[0] . ">";
								$head2 = $pair[1] . $head2;
								$i--;
								unset($pair);
							}
							$formula1 = $formula1 . $tail1;
							$formula2 = $head2 . $formula2;
							if(com_wiris_quizzes_impl_MathContent::isEmpty($formula2)) {
								$formula2 = "";
							}
							$formula = $formula1 . $text . $formula2;
							$beginformula = $start + strlen($tail1) + strlen($text);
							$end = $beginformula + strlen($head2);
							unset($tail1,$i,$head2);
						} else {
							$head = _hx_substr($formula1, 0, $beginformula);
							$head2 = _hx_substr($formula1, $beginformula, null);
							$formula2 = $head2 . $formula2;
							if(com_wiris_quizzes_impl_MathContent::isEmpty($formula2)) {
								$formula2 = "";
							}
							$formula = $head . $text . $formula2;
							$beginformula += strlen($text);
							$end = $beginformula + strlen($formula1);
							unset($head2,$head);
						}
						$omittedcontent = false;
						unset($text,$pos2,$nbspLength,$nbsp,$formula2,$formula1);
					} else {
						$num = 1;
						$pos = $start + strlen($tag);
						while($num > 0) {
							$end = _hx_index_of($formula, "</" . $trimmedTag . ">", $pos);
							$mid = _hx_index_of($formula, "<" . $trimmedTag, $pos);
							if($end === -1) {
								return $formula;
							} else {
								if($mid === -1 || $end < $mid) {
									$num--;
									$pos = $end + strlen(("</" . $trimmedTag . ">"));
								} else {
									$pos = $mid + strlen(("<" . $trimmedTag));
									$num++;
								}
							}
							unset($mid);
						}
						$end += strlen(("</" . $trimmedTag . ">"));
						$omittedcontent = true;
						unset($pos,$num);
					}
				}
			}
			unset($trimmedTag,$tag,$spacepos);
		}
		return $formula;
	}
	public function ImageB64Url($b64) {
		return "data:image/png;base64," . $b64;
	}
	public function addPlotterImageB64Tag($value) {
		$h = new com_wiris_quizzes_impl_HTML();
		$h->imageClass($this->ImageB64Url($value), null, "wirisplotter");
		return $h->getString();
	}
	public function addConstructionImageTag($value) {
		$h = new com_wiris_quizzes_impl_HTML();
		$src = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getResourceUrl("plotter_loading.png");
		$h->openclose("img", new _hx_array(array(new _hx_array(array("src", $src)), new _hx_array(array("alt", "Plotter")), new _hx_array(array("title", "Plotter")), new _hx_array(array("class", "wirisconstruction")), new _hx_array(array("data-wirisconstruction", $value)))));
		return $h->getString();
	}
	public function addPlotterImageTag($filename) {
		$url = null;
		if(com_wiris_settings_PlatformSettings::$IS_JAVASCRIPT && StringTools::endsWith($filename, ".b64")) {
			$s = com_wiris_system_Storage::newStorage($filename);
			$url = $this->ImageB64Url($s->read());
		} else {
			$url = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL) . "?service=cache&name=" . $filename;
		}
		$h = new com_wiris_quizzes_impl_HTML();
		$h->imageClass($url, null, "wirisplotter");
		return $h->getString();
	}
	public function isTokensMathML($mathml) {
		$mathml = com_wiris_quizzes_impl_HTMLTools::stripRootTag($mathml, "math");
		$allowedTags = new _hx_array(array("mrow", "mn", "mi", "mo"));
		$start = 0;
		while(($start = _hx_index_of($mathml, "<", $start)) !== -1) {
			$sb = new StringBuf();
			$start++;
			$c = _hx_char_code_at($mathml, $start);
			if($c === 47) {
				continue;
			}
			while($c !== 32 && $c !== 47 && $c !== 62) {
				$sb->b .= chr($c);
				$start++;
				$c = _hx_char_code_at($mathml, $start);
			}
			if($c === 32 || $c === 47) {
				return false;
			}
			$tagname = $sb->b;
			if(!$this->inArray($tagname, $allowedTags)) {
				return false;
			}
			$start++;
			$end = _hx_index_of($mathml, "<", $start);
			$content = _hx_substr($mathml, $start, $end - $start);
			$i = com_wiris_system_Utf8::getIterator($content);
			while($i->hasNext()) {
				$c = $i->next();
				if(!(com_wiris_util_xml_WCharacterBase::isDigit($c) || com_wiris_util_xml_WCharacterBase::isLetter($c) || $c === 35)) {
					return false;
				}
			}
			unset($tagname,$sb,$i,$end,$content,$c);
		}
		return true;
	}
	public function textToMathMLImpl($text) {
		$n = haxe_Utf8::length($text);
		if($n === 0) {
			return $text;
		}
		$mathml = new StringBuf();
		$token = null;
		$i = 0;
		$c = haxe_Utf8::charCodeAt($text, $i);
		while($i < $n) {
			if(com_wiris_util_xml_WCharacterBase::isDigit($c)) {
				$token = new StringBuf();
				while($i < $n && com_wiris_util_xml_WCharacterBase::isDigit($c)) {
					$token->b .= chr($c);
					$i++;
					if($i < $n) {
						$c = haxe_Utf8::charCodeAt($text, $i);
					}
				}
				$mathml->add("<mn>");
				$mathml->add($token->b);
				$mathml->add("</mn>");
			} else {
				if(com_wiris_util_xml_WCharacterBase::isLetter($c)) {
					$token = new StringBuf();
					while($i < $n && com_wiris_util_xml_WCharacterBase::isLetter($c)) {
						$token->add(com_wiris_quizzes_impl_HTMLTools_7($this, $c, $i, $mathml, $n, $text, $token));
						$i++;
						if($i < $n) {
							$c = haxe_Utf8::charCodeAt($text, $i);
						}
					}
					$tok = $token->b;
					$tokens = null;
					if($this->isReservedWord($tok)) {
						$tokens = new _hx_array(array($tok));
					} else {
						$m = haxe_Utf8::length($tok);
						$tokens = new _hx_array(array());
						$j = null;
						{
							$_g = 0;
							while($_g < $m) {
								$j1 = $_g++;
								$tokens[$j1] = com_wiris_quizzes_impl_HTMLTools_8($this, $_g, $c, $i, $j, $j1, $m, $mathml, $n, $text, $tok, $token, $tokens);
								unset($j1);
							}
							unset($_g);
						}
						unset($m,$j);
					}
					$k = null;
					{
						$_g1 = 0; $_g = $tokens->length;
						while($_g1 < $_g) {
							$k1 = $_g1++;
							$mathml->add("<mi>");
							$mathml->add($tokens[$k1]);
							$mathml->add("</mi>");
							unset($k1);
						}
						unset($_g1,$_g);
					}
					unset($tokens,$tok,$k);
				} else {
					$mathml->add("<mo>");
					if($c === 32) {
						$c = 160;
					}
					$mathml->add(com_wiris_util_xml_WXmlUtils::htmlEscape(com_wiris_quizzes_impl_HTMLTools_9($this, $c, $i, $mathml, $n, $text, $token)));
					$mathml->add("</mo>");
					$i++;
					if($i < $n) {
						$c = haxe_Utf8::charCodeAt($text, $i);
					}
				}
			}
		}
		return $mathml->b;
	}
	public function textToMathMLWithSemantics($text) {
		$mathml = $this->textToMathMLImpl($text);
		$mathml = "<semantics><mrow>" . $mathml . "</mrow><annotation encoding=\"text/plain\">" . $text . "</annotation></semantics>";
		$result = com_wiris_quizzes_impl_HTMLTools::addMathTag($mathml);
		return $result;
	}
	public function textToMathML($text) {
		$mathml = $this->textToMathMLImpl($text);
		$result = com_wiris_quizzes_impl_HTMLTools::addMathTag($mathml);
		return $result;
	}
	public function isReservedWord($word) {
		return $this->isFunctionName($word);
	}
	public function isFunctionName($word) {
		$functionNames = new _hx_array(array("exp", "ln", "log", "sin", "sen", "cos", "tan", "tg", "asin", "arcsin", "asen", "arcsen", "acos", "arccos", "atan", "arctan", "cosec", "csc", "sec", "cotan", "acosec", "acsc", "asec", "acotan", "sinh", "senh", "cosh", "tanh", "asinh", "arcsinh", "asenh", "arcsenh", "acosh", "arccosh", "atanh", "arctanh", "cosech", "csch", "sech", "cotanh", "acosech", "acsch", "asech", "acotanh", "sign"));
		return $this->inArray($word, $functionNames);
	}
	public function toSubFormula($mathml) {
		$mathml = com_wiris_quizzes_impl_HTMLTools::stripRootTag($mathml, "math");
		return "<mrow>" . $mathml . "</mrow>";
	}
	public function inArray($value, $array) {
		$i = null;
		{
			$_g1 = 0; $_g = $array->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($array[$i1] === $value) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	public function prepareFormulas($text) {
		$start = 0;
		while(($start = _hx_index_of($text, "<math", $start)) !== -1) {
			$length = _hx_index_of($text, "</math>", $start) - $start + strlen("</math>");
			$formula = _hx_substr($text, $start, $length);
			$pos = 0;
			while(($pos = _hx_index_of($formula, "#", $pos)) !== -1) {
				$initag = $pos;
				while($initag >= 0 && _hx_char_code_at($formula, $initag) !== 60) {
					$initag--;
				}
				$parentpos = $initag;
				$parenttag = null;
				$parenttagname = null;
				while($parenttag === null) {
					while($parentpos >= 2 && _hx_char_code_at($formula, $parentpos - 2) === 47 && _hx_char_code_at($formula, $parentpos - 1) === 62) {
						$parentpos -= 2;
						while($parentpos >= 0 && _hx_char_code_at($formula, $parentpos) !== 60) {
							$parentpos--;
						}
					}
					$parentpos--;
					while($parentpos >= 0 && _hx_char_code_at($formula, $parentpos) !== 60) {
						$parentpos--;
					}
					if(_hx_char_code_at($formula, $parentpos) === 60 && _hx_char_code_at($formula, $parentpos + 1) === 47) {
						$namepos = $parentpos + strlen("</");
						$character = _hx_char_code_at($formula, $namepos);
						$nameBuf = new StringBuf();
						while($this->isQuizzesIdentifierPart($character)) {
							$nameBuf->b .= chr($character);
							$namepos++;
							$character = _hx_char_code_at($formula, $namepos);
						}
						$name = $nameBuf->b;
						$depth = 1;
						$namelength = strlen($name);
						while($depth > 0 && $parentpos >= 0) {
							$currentTagName = _hx_substr($formula, $parentpos, $namelength);
							if($name === $currentTagName) {
								$currentStartTag = _hx_substr($formula, $parentpos - strlen("<"), $namelength + strlen("<"));
								if("<" . $name === $currentStartTag && _hx_index_of($formula, ">", $parentpos) < _hx_index_of($formula, "/", $parentpos)) {
									$depth--;
								} else {
									$currentOpenCloseTag = _hx_substr($formula, $parentpos - strlen("</"), $namelength + strlen("</"));
									if("</" . $name === $currentOpenCloseTag) {
										$depth++;
									}
									unset($currentOpenCloseTag);
								}
								unset($currentStartTag);
							}
							if($depth > 0) {
								$parentpos--;
							} else {
								$parentpos -= strlen("<");
							}
							unset($currentTagName);
						}
						if($depth > 0) {
							return $text;
						}
						unset($namepos,$namelength,$nameBuf,$name,$depth,$character);
					} else {
						$parenttag = _hx_substr($formula, $parentpos, _hx_index_of($formula, ">", $parentpos) - $parentpos + 1);
						$parenttagname = _hx_substr($parenttag, 1, strlen($parenttag) - 2);
						if(_hx_index_of($parenttagname, " ", null) !== -1) {
							$parenttagname = _hx_substr($parenttagname, 0, _hx_index_of($parenttagname, " ", null));
						}
					}
				}
				if(_hx_index_of(com_wiris_quizzes_impl_HTMLTools::$MROWS, "@" . $parenttagname . "@", null) !== -1) {
					$firstchar = true;
					$appendpos = $pos + 1;
					$character = com_wiris_util_xml_WXmlUtils::getUtf8Char($formula, $appendpos);
					while($this->isQuizzesIdentifierStart($character) || $this->isQuizzesIdentifierPart($character) && !$firstchar) {
						$appendpos += strlen((com_wiris_quizzes_impl_HTMLTools_10($this, $appendpos, $character, $firstchar, $formula, $initag, $length, $parentpos, $parenttag, $parenttagname, $pos, $start, $text)));
						$character = com_wiris_util_xml_WXmlUtils::getUtf8Char($formula, $appendpos);
						$firstchar = false;
					}
					if(_hx_char_code_at($formula, $appendpos) !== 60) {
						$pos++;
						continue;
					}
					$nextpos = _hx_index_of($formula, ">", $pos);
					$end = false;
					while(!$end && $nextpos !== -1 && $pos + strlen(">") < strlen($formula)) {
						$nextpos += strlen(">");
						$nexttaglength = _hx_index_of($formula, ">", $nextpos) - $nextpos + strlen(">");
						$nexttag = _hx_substr($formula, $nextpos, $nexttaglength);
						$nexttagname = _hx_substr($nexttag, 1, strlen($nexttag) - 2);
						if(_hx_index_of($nexttagname, " ", null) !== -1) {
							$nexttagname = _hx_substr($nexttagname, 0, _hx_index_of($nexttagname, " ", null));
						}
						$specialtag = null;
						$speciallength = 0;
						if($nexttagname === "msup" || $nexttagname === "msub" || $nexttagname === "msubsup") {
							$specialtag = $nexttag;
							$speciallength = $nexttaglength;
							$nextpos = $nextpos + $nexttaglength;
							$nexttaglength = _hx_index_of($formula, ">", $nextpos) - $nextpos + strlen(">");
							$nexttag = _hx_substr($formula, $nextpos, $nexttaglength);
							$nexttagname = _hx_substr($nexttag, 1, strlen($nexttag) - 2);
							if(_hx_index_of($nexttagname, " ", null) !== -1) {
								$nexttagname = _hx_substr($nexttagname, 0, _hx_index_of($nexttagname, " ", null));
							}
						}
						if($nexttagname === "mi" || $nexttagname === "mn" || $nexttagname === "mo") {
							$contentpos = $nextpos + $nexttaglength;
							$toappend = new StringBuf();
							$character = com_wiris_util_xml_WXmlUtils::getUtf8Char($formula, $contentpos);
							while($this->isQuizzesIdentifierStart($character) || $this->isQuizzesIdentifierPart($character) && !$firstchar) {
								$charstr = com_wiris_quizzes_impl_HTMLTools_11($this, $appendpos, $character, $contentpos, $end, $firstchar, $formula, $initag, $length, $nextpos, $nexttag, $nexttaglength, $nexttagname, $parentpos, $parenttag, $parenttagname, $pos, $speciallength, $specialtag, $start, $text, $toappend);
								$contentpos += strlen($charstr);
								$toappend->add($charstr);
								$character = com_wiris_util_xml_WXmlUtils::getUtf8Char($formula, $contentpos);
								$firstchar = false;
								unset($charstr);
							}
							$toAppendStr = $toappend->b;
							$nextclosepos = _hx_index_of($formula, "<", $contentpos);
							$nextcloseend = _hx_index_of($formula, ">", $nextclosepos) + strlen(">");
							if(strlen($toAppendStr) === 0) {
								$end = true;
							} else {
								if($nextclosepos !== $contentpos) {
									$content = _hx_substr($formula, $contentpos, $nextclosepos - $contentpos);
									$nextclosetag = _hx_substr($formula, $nextclosepos, $nextcloseend - $nextclosepos);
									$newnexttag = $nexttag . $content . $nextclosetag;
									$formula = _hx_substr($formula, 0, $nextpos) . $newnexttag . _hx_substr($formula, $nextcloseend, null);
									$formula = _hx_substr($formula, 0, $appendpos) . $toAppendStr . _hx_substr($formula, $appendpos, null);
									$end = true;
									unset($nextclosetag,$newnexttag,$content);
								} else {
									$formula = _hx_substr($formula, 0, $nextpos) . _hx_substr($formula, $nextcloseend, null);
									$formula = _hx_substr($formula, 0, $appendpos) . $toAppendStr . _hx_substr($formula, $appendpos, null);
									if($specialtag !== null) {
										$fulltaglength = _hx_index_of($formula, ">", $appendpos) + strlen(">") - $initag;
										$formula = _hx_substr($formula, 0, $initag) . $specialtag . _hx_substr($formula, $initag, $fulltaglength) . _hx_substr($formula, $initag + $fulltaglength + $speciallength, null);
										$end = true;
										unset($fulltaglength);
									}
								}
							}
							$appendpos += strlen($toAppendStr);
							unset($toappend,$toAppendStr,$nextclosepos,$nextcloseend,$contentpos);
						} else {
							$end = true;
						}
						if(!$end) {
							$nextpos = _hx_index_of($formula, ">", $pos);
						}
						unset($specialtag,$speciallength,$nexttagname,$nexttaglength,$nexttag);
					}
					unset($nextpos,$firstchar,$end,$character,$appendpos);
				}
				$pos++;
				unset($parenttagname,$parenttag,$parentpos,$initag);
			}
			$text = _hx_substr($text, 0, $start) . $formula . _hx_substr($text, $start + $length, null);
			$start = $start + strlen($formula);
			unset($pos,$length,$formula);
		}
		return $text;
	}
	public function sortIterator($it) {
		$sorted = new _hx_array(array());
		while($it->hasNext()) {
			$a = $it->next();
			$j = 0;
			while($j < $sorted->length) {
				if(com_wiris_quizzes_impl_HTMLTools::compareStrings($sorted[$j], $a) > 0) {
					break;
				}
				$j++;
			}
			$sorted->insert($j, $a);
			unset($j,$a);
		}
		return $sorted;
	}
	public function getPlaceHolder($name) {
		return "#" . $name;
	}
	public function insideComment($html, $pos) {
		$beginComment = $this->lastIndexOf($html, "<!--", $pos);
		if($beginComment !== -1) {
			$endComment = $this->lastIndexOf($html, "-->", $pos);
			return $endComment < $beginComment;
		}
		return false;
	}
	public function lastIndexOf($src, $str, $pos) {
		return _hx_last_index_of(_hx_substr($src, 0, $pos), $str, null);
	}
	public function insideTag($html, $pos) {
		$beginTag = $this->lastIndexOf($html, "<", $pos);
		while($beginTag !== -1 && !$this->isQuizzesIdentifierStart(_hx_char_code_at($html, $beginTag + 1))) {
			if($beginTag === 0) {
				return false;
			}
			$beginTag = $this->lastIndexOf($html, "<", $beginTag - 1);
		}
		if($beginTag === -1) {
			return false;
		}
		$endTag = _hx_index_of($html, ">", $beginTag);
		return $endTag > $pos;
	}
	public function isQuizzesIdentifierPart($c) {
		return $this->isQuizzesIdentifierStart($c) || com_wiris_util_xml_WCharacterBase::isDigit($c);
	}
	public function isQuizzesIdentifierStart($c) {
		return com_wiris_util_xml_WCharacterBase::isLetter($c) || $c === 95;
	}
	public function isQuizzesIdentifier($s) {
		if($s === null) {
			return false;
		}
		$i = com_wiris_system_Utf8::getIterator($s);
		if(!$i->hasNext()) {
			return false;
		}
		if(!$this->isQuizzesIdentifierStart($i->next())) {
			return false;
		}
		while($i->hasNext()) {
			if(!$this->isQuizzesIdentifierPart($i->next())) {
				return false;
			}
		}
		return true;
	}
	public function getVariableName($html, $pos) {
		$name = null;
		if(_hx_char_code_at($html, $pos) === 35) {
			$end = $pos + 1;
			if($end < strlen($html)) {
				$c = com_wiris_util_xml_WXmlUtils::getUtf8Char($html, $end);
				if($this->isQuizzesIdentifierStart($c)) {
					$end += strlen((com_wiris_quizzes_impl_HTMLTools_12($this, $c, $end, $html, $name, $pos)));
					if($end < strlen($html)) {
						$c = com_wiris_util_xml_WXmlUtils::getUtf8Char($html, $end);
						while($c > 0 && $this->isQuizzesIdentifierPart($c)) {
							$end += strlen((com_wiris_quizzes_impl_HTMLTools_13($this, $c, $end, $html, $name, $pos)));
							$c = (($end < strlen($html)) ? com_wiris_util_xml_WXmlUtils::getUtf8Char($html, $end) : -1);
						}
					}
					$name = _hx_substr($html, $pos + 1, $end - ($pos + 1));
				}
			}
		}
		return $name;
	}
	public function replaceVariablesInsideHTMLTables($html, $variables) {
		$h = new com_wiris_quizzes_impl_HTMLTableTools($this->separator);
		return $h->replaceVariablesInsideHTMLTables($html, $variables);
	}
	public function replaceVariablesInsideHTML($token, $variables, $type, $escapeText) {
		$mathml = $type === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML;
		$text = $type === com_wiris_quizzes_impl_MathContent::$TYPE_TEXT;
		$imageRef = $type === com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE_REF;
		$imageData = $type === com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE;
		$construction = $type === com_wiris_quizzes_impl_MathContent::$TYPE_CONSTRUCTION;
		$keys = $this->sortIterator($variables->keys());
		$j = $keys->length - 1;
		while($j >= 0) {
			$name = $keys[$j];
			$placeholder = $this->getPlaceHolder($name);
			$pos = 0;
			while(($pos = _hx_index_of($token, $placeholder, $pos)) !== -1) {
				$v = $this->variablePosition($token, $pos);
				if(($v === com_wiris_quizzes_impl_HTMLTools::$POSITION_ALL || $v === com_wiris_quizzes_impl_HTMLTools::$POSITION_TABLE || $text && $v === com_wiris_quizzes_impl_HTMLTools::$POSITION_ONLY_TEXT || $mathml && $v === com_wiris_quizzes_impl_HTMLTools::$POSITION_ONLY_MATHML) && $name === $this->getVariableName($token, $pos)) {
					$value = $variables->get($name);
					if($text && $escapeText) {
						$value = com_wiris_util_xml_WXmlUtils::htmlEscape($value);
					} else {
						if($mathml) {
							$value = com_wiris_quizzes_impl_HTMLTools::addMathTag($value);
							$value = $this->extractTextFromMathML($value);
						} else {
							if($imageRef) {
								$value = $this->addPlotterImageTag($value);
							} else {
								if($imageData) {
									$value = $this->addPlotterImageB64Tag($value);
								} else {
									if($construction) {
										$value = $this->addConstructionImageTag($value);
									}
								}
							}
						}
					}
					$token = _hx_substr($token, 0, $pos) . $value . _hx_substr($token, $pos + strlen($placeholder), null);
					$pos += strlen($value);
					unset($value);
				} else {
					$pos++;
				}
				unset($v);
			}
			$j--;
			unset($pos,$placeholder,$name);
		}
		return $token;
	}
	public function replaceMathMLVariablesInsideMathML($formula, $variables) {
		$keys = $this->sortIterator($variables->keys());
		$j = $keys->length - 1;
		while($j >= 0) {
			$name = $keys[$j];
			$placeholder = $this->getPlaceHolder($name);
			$pos = 0;
			while(($pos = _hx_index_of($formula, $placeholder, $pos)) !== -1) {
				if($this->variablePosition($formula, $pos) >= 2) {
					$value = $this->toSubFormula($variables->get($name));
					$splittag = false;
					$formula1 = _hx_substr($formula, 0, $pos);
					$formula2 = _hx_substr($formula, $pos + strlen($placeholder), null);
					$openTag1 = _hx_last_index_of($formula1, "<", null);
					$closeTag1 = _hx_last_index_of($formula1, ">", null);
					$openTag2 = _hx_index_of($formula2, "<", null);
					$closeTag2 = _hx_index_of($formula2, ">", null);
					$after = "";
					$before = "";
					if($closeTag1 + 1 < strlen($formula1)) {
						$splittag = true;
						$closeTag = _hx_substr($formula2, $openTag2, $closeTag2 - $openTag2 + 1);
						$before = _hx_substr($formula1, $openTag1, null) . $closeTag;
						unset($closeTag);
					}
					if($openTag2 > 0) {
						$splittag = true;
						$openTag = _hx_substr($formula1, $openTag1, $closeTag1 - $openTag1 + 1);
						$after = $openTag . _hx_substr($formula2, 0, $closeTag2 + 1);
						unset($openTag);
					}
					$tag1 = _hx_substr($formula1, $openTag1, $closeTag1 + 1 - $openTag1);
					$space = _hx_index_of($tag1, " ", null);
					if($space !== -1) {
						$attribs = _hx_substr($tag1, $space + 1, strlen($tag1) - 1 - ($space + 1));
						$value = "<mstyle " . $attribs . ">" . $value . "</mstyle>";
						unset($attribs);
					}
					$formula1 = _hx_substr($formula1, 0, $openTag1);
					$formula2 = _hx_substr($formula2, $closeTag2 + 1, null);
					if($splittag) {
						$formula = $formula1 . "<mrow>" . $before . $value . $after . "</mrow>" . $formula2;
					} else {
						$formula = $formula1 . $value . $formula2;
					}
					unset($value,$tag1,$splittag,$space,$openTag2,$openTag1,$formula2,$formula1,$closeTag2,$closeTag1,$before,$after);
				}
				$pos++;
			}
			$j--;
			unset($pos,$placeholder,$name);
		}
		return $formula;
	}
	public function splitHTMLbyMathML($html) {
		$tokens = new _hx_array(array());
		$start = 0;
		$end = 0;
		while(($start = _hx_index_of($html, "<math", $end)) !== -1) {
			if($start - $end > 0) {
				$tokens->push(_hx_substr($html, $end, $start - $end));
			}
			$firstClose = _hx_index_of($html, ">", $start);
			if($firstClose !== -1 && _hx_substr($html, $firstClose - 1, 1) === "/") {
				$end = $firstClose + 1;
			} else {
				$end = _hx_index_of($html, "</math>", $start) + strlen("</math>");
			}
			$tokens->push(_hx_substr($html, $start, $end - $start));
			unset($firstClose);
		}
		if($end < strlen($html)) {
			$tokens->push(_hx_substr($html, $end, null));
		}
		return $tokens;
	}
	public function expandVariables($html, $variables) {
		if($variables === null || _hx_index_of($html, "#", null) === -1) {
			return $html;
		}
		$encoded = $this->isMathMLEncoded($html);
		if($encoded) {
			$html = $this->decodeMathML($html);
		}
		$html = com_wiris_util_xml_WXmlUtils::resolveEntities($html);
		$html = $this->prepareFormulas($html);
		$html = $this->replaceVariablesInsideHTMLTables($html, $variables);
		$tokens = $this->splitHTMLbyMathML($html);
		$sb = new StringBuf();
		$i = null;
		{
			$_g1 = 0; $_g = $tokens->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$token = $tokens[$i1];
				$v = null;
				if(StringTools::startsWith($token, "<math")) {
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML);
					if($v !== null) {
						$token = $this->replaceMathMLVariablesInsideMathML($token, $v);
					}
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
					if($v !== null) {
						$token = $this->replaceMathMLVariablesInsideMathML($token, $v);
					}
				} else {
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE_REF);
					if($v !== null) {
						$token = $this->replaceVariablesInsideHTML($token, $v, com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE_REF, true);
					}
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE);
					if($v !== null) {
						$token = $this->replaceVariablesInsideHTML($token, $v, com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE, true);
					}
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_CONSTRUCTION);
					if($v !== null) {
						$token = $this->replaceVariablesInsideHTML($token, $v, com_wiris_quizzes_impl_MathContent::$TYPE_CONSTRUCTION, true);
					}
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML);
					if($v !== null) {
						$token = $this->replaceVariablesInsideHTML($token, $v, com_wiris_quizzes_impl_MathContent::$TYPE_MATHML, true);
					}
					$v = $variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
					if($v !== null) {
						$token = $this->replaceVariablesInsideHTML($token, $v, com_wiris_quizzes_impl_MathContent::$TYPE_TEXT, true);
					}
				}
				$sb->add($token);
				unset($v,$token,$i1);
			}
		}
		$result = $sb->b;
		if($encoded) {
			$result = $this->encodeMathML($result);
		}
		return $result;
	}
	public function expandVariablesText($text, $textvariables) {
		return $this->replaceVariablesInsideHTML($text, $textvariables, com_wiris_quizzes_impl_MathContent::$TYPE_TEXT, false);
	}
	public function encodeMathML($html) {
		$opentag = "Â«";
		$closetag = "Â»";
		$quote = "Â¨";
		$amp = "Â§";
		$start = null;
		$end = 0;
		while(($start = _hx_index_of($html, "<math", $end)) !== -1) {
			$closemath = "</math>";
			$end = _hx_index_of($html, $closemath, $start) + strlen($closemath);
			$formula = _hx_substr($html, $start, $end - $start);
			$formula = str_replace("<", $opentag, $formula);
			$formula = str_replace(">", $closetag, $formula);
			$formula = str_replace("\"", $quote, $formula);
			$formula = str_replace("&", $amp, $formula);
			$html = _hx_substr($html, 0, $start) . $formula . _hx_substr($html, $end, null);
			$end = $start + strlen($formula);
			unset($formula,$closemath);
		}
		return $html;
	}
	public function decodeMathML($html) {
		$opentag = "Â«";
		$closetag = "Â»";
		$quote = "Â¨";
		$amp = "Â§";
		$closemath = $opentag . "/math" . $closetag;
		$start = null;
		$end = 0;
		while(($start = _hx_index_of($html, $opentag . "math", $end)) !== -1) {
			$end = _hx_index_of($html, $closemath, $start) + strlen($closemath);
			$formula = _hx_substr($html, $start, $end - $start);
			$formula = com_wiris_util_xml_WXmlUtils::htmlUnescape($formula);
			$formula = str_replace($opentag, "<", $formula);
			$formula = str_replace($closetag, ">", $formula);
			$formula = str_replace($quote, "\"", $formula);
			$formula = str_replace($amp, "&", $formula);
			$html = _hx_substr($html, 0, $start) . $formula . _hx_substr($html, $end, null);
			$end = $start + strlen($formula);
			unset($formula);
		}
		return $html;
	}
	public function isMathMLEncoded($html) {
		$opentag = "Â«";
		return _hx_index_of($html, $opentag . "math", null) !== -1;
	}
	public function extractVariableNames($html) {
		if($this->isMathMLEncoded($html)) {
			$html = $this->decodeMathML($html);
		}
		$html = com_wiris_util_xml_WXmlUtils::resolveEntities($html);
		$html = $this->prepareFormulas($html);
		$names = new _hx_array(array());
		$start = 0;
		while(($start = _hx_index_of($html, "#", $start)) !== -1) {
			if($this->variablePosition($html, $start) > 0) {
				$name = $this->getVariableName($html, $start);
				com_wiris_quizzes_impl_HTMLTools::insertStringInSortedArray($name, $names);
				unset($name);
			}
			$start++;
		}
		return com_wiris_quizzes_impl_HTMLTools::toNativeArray($names);
	}
	public $separator = ",";
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
	static $POSITION_NONE = -1;
	static $POSITION_ONLY_TEXT = 1;
	static $POSITION_ONLY_MATHML = 2;
	static $POSITION_ALL = 3;
	static $POSITION_TABLE = 4;
	static $MROWS = "@math@mrow@msqrt@mstyle@merror@mpadded@mphantom@mtd@menclose@mscarry@msrow@";
	static $MSUPS = "@msub@msup@msubsup@";
	static function toNativeArray($a) {
		$n = new _hx_array(array());
		$k = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$k1 = $_g1++;
				$n[$k1] = $a[$k1];
				unset($k1);
			}
		}
		return $n;
	}
	static function insertStringInSortedArray($s, $a) {
		if($s !== null) {
			$i = 0;
			while($i < $a->length) {
				if(com_wiris_quizzes_impl_HTMLTools::compareStrings($a[$i], $s) >= 0) {
					break;
				}
				$i++;
			}
			if($i < $a->length) {
				if(!($a[$i] === $s)) {
					$a->insert($i, $s);
				}
			} else {
				$a->push($s);
			}
		}
	}
	static function encodeUnicodeChars($mathml) {
		$sb = new StringBuf();
		$i = null;
		{
			$_g1 = 0; $_g = strlen($mathml);
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = _hx_char_code_at($mathml, $i1);
				if($c > 127) {
					$sb->add("&#");
					$sb->add($c);
					$sb->add(";");
				} else {
					$sb->b .= chr($c);
				}
				unset($i1,$c);
			}
		}
		return $sb->b;
	}
	static function compareStrings($a, $b) {
		$i = null;
		$an = strlen($a);
		$bn = strlen($b);
		$n = (($an > $bn) ? $bn : $an);
		{
			$_g = 0;
			while($_g < $n) {
				$i1 = $_g++;
				$c = _hx_char_code_at($a, $i1) - _hx_char_code_at($b, $i1);
				if($c !== 0) {
					return $c;
				}
				unset($i1,$c);
			}
		}
		return strlen($a) - strlen($b);
	}
	static function addMathTag($mathml) {
		if(!StringTools::startsWith($mathml, "<math")) {
			$mathml = "<math xmlns=\"http://www.w3.org/1998/Math/MathML\">" . $mathml . "</math>";
		}
		return $mathml;
	}
	static function stripRootTag($xml, $tag) {
		$s = com_wiris_quizzes_impl_HTMLTools::splitRootTag($xml, $tag);
		return $s[1];
	}
	static function splitRootTag($xml, $tag) {
		$xml = trim($xml);
		$r = new _hx_array(array("", null, ""));
		if(StringTools::startsWith($xml, "<" . $tag)) {
			$depth = 1;
			$lastOpen = _hx_last_index_of($xml, "<", null);
			$lastClose = _hx_last_index_of($xml, ">", null);
			$j1 = _hx_index_of($xml, "<" . $tag, 1);
			$j2 = _hx_index_of($xml, "</" . $tag, 1);
			$j3 = _hx_index_of($xml, "/>", null);
			if(_hx_index_of($xml, ">", null) - $j3 !== 1) {
				$j3 = -1;
			}
			while($depth > 0) {
				if(($j1 === -1 || $j2 < $j1) && ($j3 === -1 || $j2 < $j3)) {
					$depth--;
					if($depth > 0) {
						$j2 = _hx_index_of($xml, "</" . $tag, $j2 + 1);
					}
				} else {
					if($j1 !== -1 && ($j3 === -1 || $j1 < $j3)) {
						$depth++;
						$j3 = _hx_index_of($xml, "/>", $j1);
						if(_hx_index_of($xml, ">", $j1) - $j3 !== 1) {
							$j3 = -1;
						}
						$j1 = _hx_index_of($xml, "<" . $tag, $j1 + 1);
					} else {
						$depth--;
						$j3 = -1;
					}
				}
			}
			if($j2 === $lastOpen) {
				$ini = _hx_index_of($xml, ">", null) + 1;
				$r[0] = _hx_substr($xml, 0, $ini);
				$r[1] = _hx_substr($xml, $ini, $lastOpen - $ini);
				$r[2] = _hx_substr($xml, $lastOpen, null);
			} else {
				if($j3 + 1 === $lastClose) {
					$r[0] = _hx_substr($xml, 0, strlen($xml) - 2) . ">";
					$r[1] = "";
					$r[2] = "</" . $tag . ">";
				} else {
					$r[1] = $xml;
				}
			}
		} else {
			$r[1] = $xml;
		}
		return $r;
	}
	static function ensureRootTag($xml, $tag) {
		$xml = trim($xml);
		if(!StringTools::startsWith($xml, "<" . $tag)) {
			$xml = "<" . $tag . ">" . $xml . "</" . $tag . ">";
		}
		return $xml;
	}
	static function parseCompoundAnswer($correctAnswer) {
		if($correctAnswer->content !== null && com_wiris_quizzes_impl_MathContent::$TYPE_TEXT === $correctAnswer->type) {
			return com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswerText($correctAnswer);
		} else {
			if($correctAnswer->content !== null && com_wiris_quizzes_impl_MathContent::$TYPE_MATHML === $correctAnswer->type) {
				return com_wiris_quizzes_impl_HTMLTools::parseCompoundAnswerMathML($correctAnswer);
			} else {
				return new _hx_array(array());
			}
		}
	}
	static function parseCompoundAnswerText($correctAnswer) {
		$answers = new _hx_array(array());
		$text = $correctAnswer->content;
		$lines = _hx_explode("\x0A", $text);
		$i = null;
		{
			$_g1 = 0; $_g = $lines->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$line = $lines[$i1];
				$p = _hx_index_of($line, "=", null);
				if($p !== -1) {
					$label = _hx_substr($line, 0, $p + 1);
					$value = trim(_hx_substr($line, $p + 1, null));
					$answers->push(new _hx_array(array($label, $value)));
					unset($value,$label);
				}
				unset($p,$line,$i1);
			}
		}
		return $answers;
	}
	static function parseCompoundAnswerMathML($correctAnswer) {
		$answers = new _hx_array(array());
		$newline = "<mspace linebreak=\"newline\"/>";
		$equal = "<mo>=</mo>";
		$mml = com_wiris_quizzes_impl_HTMLTools::convertEditor2Newlines($correctAnswer->content);
		$s = com_wiris_quizzes_impl_HTMLTools::splitRootTag($mml, "math");
		$mml = com_wiris_quizzes_impl_HTMLTools::stripRootTag($s[1], "mrow");
		$lines = new _hx_array(array());
		$start = 0;
		$end = 0;
		do {
			$end = _hx_index_of($mml, $newline, $start);
			$line = (($end > -1) ? _hx_substr($mml, $start, $end - $start) : _hx_substr($mml, $start, null));
			if($lines->length > 0 && _hx_index_of($line, "<mo>=</mo>", null) === -1) {
				$lastElem = $lines[$lines->length - 1] . $newline . $line;
				$lines[$lines->length - 1] = $lastElem;
				unset($lastElem);
			} else {
				$lines->push($line);
			}
			$start = $end + strlen($newline);
			unset($line);
		} while($end !== -1);
		$i = null;
		{
			$_g1 = 0; $_g = $lines->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$line = com_wiris_quizzes_impl_HTMLTools::stripRootTag($lines[$i1], "mrow");
				$equalIndex = _hx_index_of($line, $equal, null);
				if($equalIndex !== -1) {
					$equalIndex += strlen($equal);
					$label = $s[0] . _hx_substr($line, 0, $equalIndex) . $s[2];
					$value = _hx_substr($line, $equalIndex, null);
					$a = _hx_index_of($value, "<annotation encoding=\"text/plain\">", null);
					if($a !== -1) {
						$a = _hx_index_of($value, ">", $a) + 1;
						$b = _hx_index_of($value, "</annotation>", $a);
						$value = _hx_substr($value, $a, $b - $a);
						unset($b);
					} else {
						$value = $s[0] . $value . $s[2];
					}
					$answer = new _hx_array(array($label, $value));
					$answers->push($answer);
					unset($value,$label,$answer,$a);
				}
				unset($line,$i1,$equalIndex);
			}
		}
		return $answers;
	}
	static function joinCompoundAnswer($answers) {
		$sb = new StringBuf();
		$m = new com_wiris_quizzes_impl_MathContent();
		if($answers->length > 0) {
			$mml = com_wiris_quizzes_impl_MathContent::getMathType($answers[0][0]) === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML;
			$m->type = com_wiris_quizzes_impl_HTMLTools_14($answers, $m, $mml, $sb);
			$root = "<math>";
			$i = null;
			{
				$_g1 = 0; $_g = $answers->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					if($i1 !== 0) {
						$sb->add((($mml) ? "<mspace linebreak=\"newline\"/>" : "\x0A"));
					}
					$ans = $answers[$i1];
					$s = com_wiris_quizzes_impl_HTMLTools::splitRootTag($ans[0], "math");
					$sb->add($s[1]);
					$root = com_wiris_quizzes_impl_HTMLTools::combineTagAtts($root, $s[0]);
					$s = com_wiris_quizzes_impl_HTMLTools::splitRootTag($ans[1], "math");
					$sb->add($s[1]);
					$root = com_wiris_quizzes_impl_HTMLTools::combineTagAtts($root, $s[0]);
					unset($s,$i1,$ans);
				}
			}
			$m->content = $sb->b;
			if($mml) {
				$m->content = $root . $m->content . "</math>";
			}
		} else {
			$m->set("");
		}
		return $m;
	}
	static function combineTagAtts($t1, $t2) {
		$p1 = _hx_index_of($t1, " ", null);
		$p2 = _hx_index_of($t2, " ", null);
		if($p1 === -1) {
			return $t2;
		}
		if($p2 === -1) {
			return $t1;
		}
		$t1 = _hx_substr($t1, 0, strlen($t1) - 1);
		$t2 = _hx_substr($t2, 0, strlen($t2) - 1);
		$t2 = _hx_substr($t2, $p2 + 1, null);
		$atts = _hx_explode(" ", $t2);
		$i = 0;
		{
			$_g1 = 0; $_g = $atts->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_index_of($t1, $atts[$i1], null) === -1) {
					$t1 = $t1 . " " . $atts[$i1];
				}
				unset($i1);
			}
		}
		$t1 = $t1 . ">";
		return $t1;
	}
	static function tagName($xml, $n) {
		$endtag = _hx_index_of($xml, ">", $n);
		$tag = _hx_substr($xml, $n + 1, $endtag - ($n + 1));
		$aux = null;
		if(($aux = _hx_index_of($tag, " ", null)) !== -1) {
			$tag = _hx_substr($tag, 0, $aux);
		}
		return $tag;
	}
	static function endTag($xml, $n) {
		$name = com_wiris_quizzes_impl_HTMLTools::tagName($xml, $n);
		$depth = 1;
		$pos = $n + 1;
		while($depth > 0) {
			$pos = _hx_index_of($xml, "<", $pos);
			if($pos === -1) {
				return strlen($xml);
			} else {
				if(_hx_substr($xml, _hx_index_of($xml, ">", $pos) - 1, 1) === "/") {
				} else {
					if(_hx_substr($xml, $pos + 1, 1) === "/") {
						if(com_wiris_quizzes_impl_HTMLTools::tagName($xml, $pos + 1) === $name) {
							$depth--;
						}
					} else {
						if(com_wiris_quizzes_impl_HTMLTools::tagName($xml, $pos) === $name) {
							$depth++;
						}
					}
				}
			}
			$pos = $pos + 1;
		}
		$pos = _hx_index_of($xml, ">", $pos) + 1;
		return $pos;
	}
	static function convertEditor2Newlines($mml) {
		$head = "<mtable columnalign=\"left\" rowspacing=\"0\">";
		$start = null;
		if(($start = _hx_index_of($mml, $head, null)) !== -1) {
			$start += strlen($head);
			$end = _hx_last_index_of($mml, "</mtable>", null);
			$mml = _hx_substr($mml, $start, $end - $start);
			$start = 0;
			$sb = new StringBuf();
			$lines = 0;
			while(($start = _hx_index_of($mml, "<mtd>", $start)) !== -1) {
				if($lines !== 0) {
					$sb->add("<mspace linebreak=\"newline\"/>");
				}
				$end = com_wiris_quizzes_impl_HTMLTools::endTag($mml, $start);
				$start += 5;
				$end -= 6;
				$sb->add(_hx_substr($mml, $start, $end - $start));
				$start = $end + 6;
				$lines++;
			}
			$mml = $sb->b;
			$mml = com_wiris_quizzes_impl_HTMLTools::ensureRootTag($mml, "math");
		}
		return $mml;
	}
	static function emptyCasSession($value) {
		return $value === null || _hx_index_of($value, "<mo", null) === -1 && _hx_index_of($value, "<mi", null) === -1 && _hx_index_of($value, "<mn", null) === -1 && _hx_index_of($value, "<csymbol", null) === -1;
	}
	static function hasCasSessionParameter($session, $parameter, $name) {
		$session = com_wiris_util_xml_WXmlUtils::resolveEntities($session);
		$expr = com_wiris_quizzes_impl_HTMLTools::getParameterEReg($parameter, $name);
		if($expr->match($session)) {
			return true;
		} else {
			$noaccents = com_wiris_util_type_StringUtils::stripAccents($parameter);
			if(!($noaccents === $parameter)) {
				$expr = com_wiris_quizzes_impl_HTMLTools::getParameterEReg($noaccents, $name);
				return $expr->match($session);
			}
			return false;
		}
	}
	static function getParameterEReg($parameter, $name) {
		return new EReg(".*<input>\\s*<math[^>]*>\\s*<mi>" . $parameter . "</mi>\\s*<mo>\\s*(" . com_wiris_quizzes_impl_HTMLTools_15($name, $parameter) . "|\\s)\\s*</mo><mi>" . $name . "\\d*</mi>.*", "gmi");
	}
	static function casSessionLang($value) {
		$start = _hx_index_of($value, "<session", null);
		if($start === -1) {
			return null;
		}
		$end = _hx_index_of($value, ">", $start + 1);
		$start = _hx_index_of($value, "lang", $start);
		if($start === -1 || $start > $end) {
			return null;
		}
		$start = _hx_index_of($value, "\"", $start) + 1;
		return _hx_substr($value, $start, 2);
	}
	static function isCalc($session) {
		if($session === null) {
			return false;
		}
		$i = _hx_index_of($session, "<wiriscalc", null);
		if($i > -1) {
			return true;
		}
		$start = _hx_index_of($session, "<session", null);
		if($start === -1) {
			return false;
		}
		$end = _hx_index_of($session, ">", $start);
		$start = _hx_index_of($session, "version", $start);
		if($start > $end) {
			return false;
		}
		$start = _hx_index_of($session, "\"", $start);
		$end = _hx_index_of($session, "\"", $start + 1);
		$version = _hx_substr($session, $start + 1, $end - $start - 1);
		$version = _hx_substr($version, 0, _hx_index_of($version, ".", null));
		$num = Std::parseInt($version);
		return $num >= 3;
	}
	static function calcSessionLang($value) {
		$lang = com_wiris_quizzes_impl_HTMLTools::casSessionLang($value);
		if($lang === null) {
			$start = _hx_index_of($value, "<properties", null);
			$end = _hx_index_of($value, "</properties>", $start);
			$start = _hx_index_of($value, "<property name=\"lang\"", $start);
			if($end >= $start) {
				return null;
			}
			$start = _hx_index_of($value, ">", $start) + 1;
			$end = _hx_index_of($value, "</property>", $start);
			$lang = _hx_substr($value, $start, $end - $start);
		}
		return $lang;
	}
	static function stripConstructionsFromCalcSession($calcSession) {
		if(com_wiris_quizzes_impl_HTMLTools::isCalc($calcSession)) {
			$start = _hx_index_of($calcSession, "<wiriscalc", null);
			$end = _hx_index_of($calcSession, "</wiriscalc>", $start);
			$start = _hx_index_of($calcSession, "<constructions", $start);
			if($start > -1 && $start < $end) {
				$end = _hx_index_of($calcSession, "</constructions>", $start);
				$sb = new StringBuf();
				$sb->add(_hx_substr($calcSession, 0, $start));
				$sb->add(_hx_substr($calcSession, $end + strlen("</constructions>"), null));
				$calcSession = $sb->b;
			}
		}
		return $calcSession;
	}
	static function setCalcSessionTitle($calcSession, $title) {
		if(com_wiris_quizzes_impl_HTMLTools::isCalc($calcSession)) {
			$start = _hx_index_of($calcSession, "<wiriscalc", null);
			$end = _hx_index_of($calcSession, "</wiriscalc>", $start + 1);
			$start = _hx_index_of($calcSession, "<title", $start + 1);
			if($start > -1 && $start < $end) {
				$end = _hx_index_of($calcSession, "</title>", $start + 1);
				$start = _hx_index_of($calcSession, "<math", $start + 1);
				if($start > -1 && $start < $end) {
					$start = _hx_index_of($calcSession, "<mtext", $start + 1);
					$end = _hx_index_of($calcSession, "</mtext>", $start + 1);
					if($start > -1 && $start < $end) {
						$start = _hx_index_of($calcSession, ">", $start + 1) + 1;
						if($start > -1 && $start < $end) {
							$s1 = _hx_substr($calcSession, 0, $start);
							$s2 = _hx_substr($calcSession, $end, null);
							return $s1 . $title . $s2;
						}
					}
				}
			}
		}
		return $calcSession;
	}
	static function getCalcSessionTitle($calcSession) {
		if(com_wiris_quizzes_impl_HTMLTools::isCalc($calcSession)) {
			$start = _hx_index_of($calcSession, "<wiriscalc", null);
			$end = _hx_index_of($calcSession, "</wiriscalc>", $start + 1);
			$start = _hx_index_of($calcSession, "<title", $start + 1);
			if($start > -1 && $start < $end) {
				$end = _hx_index_of($calcSession, "</title>", $start + 1);
				$start = _hx_index_of($calcSession, "<math", $start + 1);
				if($start > -1 && $start < $end) {
					$start = _hx_index_of($calcSession, "<mtext", $start + 1);
					$end = _hx_index_of($calcSession, "</mtext>", $start + 1);
					if($start > -1 && $start < $end) {
						$start = _hx_index_of($calcSession, ">", $start + 1) + 1;
						if($start > -1 && $start < $end) {
							$title = _hx_substr($calcSession, $start, $end - $start);
							return $title;
						}
					}
				}
			}
		}
		return null;
	}
	static function getEmptyCalcMeSession() {
		return "<wiriscalc version=\"3.1\"><title><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mtext>UntitledÂ calc</mtext></math></title><properties><property name=\"lang\">en</property><property name=\"precision\">4</property><property name=\"use_degrees\">false</property></properties><session version=\"3.0\" lang=\"en\"><task><title><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mtext>SheetÂ 1</mtext></math></title><group><command><input><math xmlns=\"http://www.w3.org/1998/Math/MathML\"/></input></command></group></task></session></wiriscalc>";
	}
	function __toString() { return 'com.wiris.quizzes.impl.HTMLTools'; }
}
function com_wiris_quizzes_impl_HTMLTools_0(&$»this, &$_g, &$_g1, &$a, &$answer, &$answers, &$compound, &$h, &$i, &$i1, &$keyword, &$s) {
	if($»this->isMathMLString($s)) {
		return com_wiris_quizzes_impl_MathContent::$TYPE_MATHML;
	} else {
		return com_wiris_quizzes_impl_MathContent::$TYPE_TEXT;
	}
}
function com_wiris_quizzes_impl_HTMLTools_1(&$»this, &$close, &$e, &$i, &$it, &$n, &$open, &$sb, &$separators) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(haxe_Utf8::charCodeAt($separators, com_wiris_quizzes_impl_HTMLTools_16($close, $e, $i, $it, $n, $open, $s, $sb, $separators)));
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_2(&$»this, &$c, &$children, &$elem, &$index, &$it, &$mis, &$mitexts, &$text, &$words) {
	if($index < $children->length) {
		return $children[$index];
	}
}
function com_wiris_quizzes_impl_HTMLTools_3(&$»this, &$c, &$children, &$elem, &$first, &$index, &$it, &$words) {
	if($index < $children->length) {
		return $children[$index];
	}
}
function com_wiris_quizzes_impl_HTMLTools_4(&$»this, &$c, &$children, &$elem, &$first, &$index, &$it, &$mns, &$num, &$words) {
	if($index < $children->length) {
		return $children[$index];
	}
}
function com_wiris_quizzes_impl_HTMLTools_5(&$»this, &$c, &$children, &$elem, &$index, &$it, &$words) {
	if($index < $children->length) {
		return $children[$index];
	}
}
function com_wiris_quizzes_impl_HTMLTools_6(&$»this, &$allowedTags, &$beginformula, &$end, &$formula, &$lasttag, &$omittedcontent, &$pos2, &$spacepos, &$stack, &$start, &$tag, &$text, &$trimmedTag) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(160);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_7(&$»this, &$c, &$i, &$mathml, &$n, &$text, &$token) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($c);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_8(&$»this, &$_g, &$c, &$i, &$j, &$j1, &$m, &$mathml, &$n, &$text, &$tok, &$token, &$tokens) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(haxe_Utf8::charCodeAt($tok, $j1));
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_9(&$»this, &$c, &$i, &$mathml, &$n, &$text, &$token) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($c);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_10(&$»this, &$appendpos, &$character, &$firstchar, &$formula, &$initag, &$length, &$parentpos, &$parenttag, &$parenttagname, &$pos, &$start, &$text) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($character);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_11(&$»this, &$appendpos, &$character, &$contentpos, &$end, &$firstchar, &$formula, &$initag, &$length, &$nextpos, &$nexttag, &$nexttaglength, &$nexttagname, &$parentpos, &$parenttag, &$parenttagname, &$pos, &$speciallength, &$specialtag, &$start, &$text, &$toappend) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($character);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_12(&$»this, &$c, &$end, &$html, &$name, &$pos) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($c);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_13(&$»this, &$c, &$end, &$html, &$name, &$pos) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($c);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_14(&$answers, &$m, &$mml, &$sb) {
	if($mml) {
		return com_wiris_quizzes_impl_MathContent::$TYPE_MATHML;
	} else {
		return com_wiris_quizzes_impl_MathContent::$TYPE_TEXT;
	}
}
function com_wiris_quizzes_impl_HTMLTools_15(&$name, &$parameter) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(160);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_HTMLTools_16(&$close, &$e, &$i, &$it, &$n, &$open, &$s, &$sb, &$separators) {
	if($i < $n) {
		return $i;
	} else {
		return $n - 1;
	}
}
