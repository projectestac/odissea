<?php

class com_wiris_quizzes_impl_HandwritingConstraints {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		if(com_wiris_quizzes_impl_HandwritingConstraints::$all_symbols === null) {
			com_wiris_quizzes_impl_HandwritingConstraints::$all_symbols = _hx_explode(" ", com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS_STRING);
		}
		if(com_wiris_quizzes_impl_HandwritingConstraints::$symbol_conflicts === null) {
			com_wiris_quizzes_impl_HandwritingConstraints::$symbol_conflicts = new _hx_array(array(new _hx_array(array("x", "X", "×", "χ")), new _hx_array(array(".", ",", "·")), new _hx_array(array("2", "z", "Z")), new _hx_array(array("5", "s", "S", "\$")), new _hx_array(array("1", ",", "|", "'")), new _hx_array(array("i", "j", ":", ";")), new _hx_array(array("y", "4", "Y")), new _hx_array(array("p", "P", "ρ")), new _hx_array(array("c", "C", "(", "⊂")), new _hx_array(array("0", "o", "O", "°")), new _hx_array(array("Δ", "A")), new _hx_array(array("B", "β")), new _hx_array(array("∃", "3")), new _hx_array(array("9", "q", "g")), new _hx_array(array("9", "a")), new _hx_array(array("v", "V", "∨", "ν")), new _hx_array(array("r", "σ")), new _hx_array(array("t", "+")), new _hx_array(array("∈", "E", "ε")), new _hx_array(array("n", "h")), new _hx_array(array("k", "K", "κ")), new _hx_array(array("u", "U", "∪")), new _hx_array(array("w", "W", "ω")), new _hx_array(array("d", "∂", "δ")), new _hx_array(array("∂", "a")), new _hx_array(array("∅", "θ", "Θ")), new _hx_array(array("∩", "n", "η")), new _hx_array(array("Λ", "∧", "^")), new _hx_array(array("ψ", "Ψ")), new _hx_array(array("∅", "φ", "Φ")), new _hx_array(array("Π", "π", "∏")), new _hx_array(array("ζ", "ξ")), new _hx_array(array("ζ", "3", "z")), new _hx_array(array("⏜", "^", "~", "-"))));
		}
		if(com_wiris_quizzes_impl_HandwritingConstraints::$symbol_default_excluded === null) {
			com_wiris_quizzes_impl_HandwritingConstraints::$symbol_default_excluded = new _hx_array(array(new _hx_array(array("sin", "cos", "tan", "log"))));
		}
	}}
	public function getNegativeConstraints() {
		$h = new com_wiris_quizzes_impl_HandwritingConstraints();
		$h->symbols = new _hx_array(array());
		$h->structure = $this->structure;
		$blocked = new _hx_array(array());
		$i = null;
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_HandwritingConstraints::$symbol_conflicts->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$conflictSet = com_wiris_quizzes_impl_HandwritingConstraints::$symbol_conflicts[$i1];
				$exclude = new _hx_array(array());
				$j = null;
				{
					$_g3 = 0; $_g2 = $conflictSet->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						if(!com_wiris_system_ArrayEx::contains($this->symbols, $conflictSet[$j1])) {
							$exclude->push($conflictSet[$j1]);
						}
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				if($exclude->length < $conflictSet->length) {
					$_g3 = 0; $_g2 = $exclude->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$blocked->push($exclude[$j1]);
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				unset($j,$i1,$exclude,$conflictSet);
			}
		}
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_HandwritingConstraints::$symbol_default_excluded->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$defaultExcluded = com_wiris_quizzes_impl_HandwritingConstraints::$symbol_default_excluded[$i1];
				$exclude = true;
				$j = null;
				{
					$_g3 = 0; $_g2 = $defaultExcluded->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						if(com_wiris_system_ArrayEx::contains($this->symbols, $defaultExcluded[$j1])) {
							$exclude = false;
						}
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				if($exclude) {
					$_g3 = 0; $_g2 = $defaultExcluded->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$blocked->push($defaultExcluded[$j1]);
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				unset($j,$i1,$exclude,$defaultExcluded);
			}
		}
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_HandwritingConstraints::$all_symbols->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!com_wiris_system_ArrayEx::contains($blocked, com_wiris_quizzes_impl_HandwritingConstraints::$all_symbols[$i1])) {
					$h->symbols->push(com_wiris_quizzes_impl_HandwritingConstraints::$all_symbols[$i1]);
				}
				unset($i1);
			}
		}
		return $h;
	}
	public function toJSON() {
		$h = new Hash();
		$h->set("symbols", $this->symbols);
		$h->set("structure", $this->structure);
		return com_wiris_util_json_JSon::encode($h);
	}
	public function addStructureFromText($t) {
		if(_hx_index_of($t, "/", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$FRACTIONS);
		}
		if(_hx_index_of($t, "sqrt", null) !== -1 || _hx_index_of($t, "root", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$RADICALS);
		}
		if(_hx_index_of($t, "\x0A", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$MULTILINE);
		}
	}
	public function addStructureFromMathML($m) {
		if(_hx_index_of($m, "<mfrac", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$FRACTIONS);
		}
		if(_hx_index_of($m, "<mroot", null) !== -1 || _hx_index_of($m, "<msqrt", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$RADICALS);
		}
		if(_hx_index_of($m, "<munderover", null) !== -1 || _hx_index_of($m, "<munder", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$BIGOPERATORS);
		}
		if(_hx_index_of($m, "<mtable", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$PIECEWISE);
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$MATRICES);
		}
		if(_hx_index_of($m, "<mspace", null) !== -1) {
			com_wiris_util_type_Arrays::insertSortedSet($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$MULTILINE);
		}
	}
	public function addToken($t) {
		if(!StringTools::startsWith($t, "#")) {
			$t = com_wiris_util_xml_WXmlUtils::htmlUnescape($t);
			com_wiris_util_type_Arrays::insertSortedSet($this->symbols, $t);
		}
	}
	public function addTagContent($s, $tag, $split) {
		$start = null;
		$end = 0;
		while(($start = _hx_index_of($s, "<" . $tag, $end)) !== -1) {
			$end = $start + 1 + strlen($tag);
			$charAfterTag = _hx_char_code_at($s, $end);
			if($charAfterTag === 32 || $charAfterTag === 62) {
				$endBeginTag = _hx_index_of($s, ">", $end);
				if($endBeginTag === -1) {
					return;
				}
				if(_hx_char_code_at($s, $endBeginTag - 1) !== 47) {
					$beginContent = $endBeginTag + 1;
					$endContent = _hx_index_of($s, "<", $beginContent);
					if($endContent === -1) {
						return;
					}
					$content = _hx_substr($s, $beginContent, $endContent - $beginContent);
					if($split) {
						$i = 0;
						while($i < strlen($content)) {
							$c = com_wiris_quizzes_impl_HandwritingConstraints_0($this, $beginContent, $charAfterTag, $content, $end, $endBeginTag, $endContent, $i, $s, $split, $start, $tag);
							$this->addToken($c);
							$i += strlen($c);
							unset($c);
						}
						unset($i);
					} else {
						$this->addToken($content);
					}
					$end = $endContent + 1;
					unset($endContent,$content,$beginContent);
				}
				unset($endBeginTag);
			}
			unset($charAfterTag);
		}
	}
	public function addSymbolsFromMathML($s) {
		$tokenTags = new _hx_array(array("mi", "mn", "mo"));
		$i = null;
		{
			$_g1 = 0; $_g = $tokenTags->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$this->addTagContent($s, $tokenTags[$i1], $tokenTags[$i1] === "mn");
				unset($i1);
			}
		}
	}
	public function addSymbolsFromText($text) {
		$this->addSymbolsFromMathML(_hx_deref(new com_wiris_quizzes_impl_HTMLTools())->textToMathML($text));
	}
	public function addQuestionInstanceConstraints($qi) {
		if($qi->hasVariables()) {
			$mvars = $qi->getMathMLVariables();
			if($mvars !== null) {
				$keys = $mvars->keys();
				while($keys->hasNext()) {
					$content = $mvars->get($keys->next());
					$this->addSymbolsFromMathML($content);
					$this->addStructureFromMathML($content);
					unset($content);
				}
			}
			$tvars = $qi->getTextVariables();
			if($tvars !== null) {
				$keys = $tvars->keys();
				while($keys->hasNext()) {
					$content = $tvars->get($keys->next());
					$this->addSymbolsFromText($content);
					$this->addStructureFromText($content);
					unset($content);
				}
			}
		}
	}
	public function addQuestionConstraints($q) {
		$h = new com_wiris_quizzes_impl_HTMLTools();
		$i = null;
		{
			$_g1 = 0; $_g = $q->getCorrectAnswersLength();
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$answer = $q->getCorrectAnswer($i1);
				$answer = $h->prepareFormulas($answer);
				if(com_wiris_quizzes_impl_MathContent::getMathType($answer) === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML) {
					$this->addSymbolsFromMathML($answer);
					$this->addStructureFromMathML($answer);
				} else {
					$this->addSymbolsFromText($answer);
					$this->addStructureFromText($answer);
				}
				unset($i1,$answer);
			}
		}
	}
	public $structure;
	public $symbols;
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
	static $ALL_SYMBOLS_STRING;
	static $all_symbols;
	static $symbol_conflicts;
	static $symbol_default_excluded;
	static $GENERAL = "General";
	static $FRACTIONS = "Fraction";
	static $BIGOPERATORS = "BigOperator";
	static $RADICALS = "Radical";
	static $PIECEWISE = "PiecewiseFunction";
	static $MATRICES = "Matrix";
	static $MULTILINE = "Multiline";
	static function readHandwritingConstraints($json) {
		$hc = new com_wiris_quizzes_impl_HandwritingConstraints();
		$obj = com_wiris_util_json_JSon::decode($json);
		$hc->symbols = (($obj->exists("symbols")) ? $obj->get("symbols") : new _hx_array(array()));
		$hc->structure = (($obj->exists("structure")) ? $obj->get("structure") : new _hx_array(array()));
		return $hc;
	}
	static function newHandwritingConstraints() {
		$hc = new com_wiris_quizzes_impl_HandwritingConstraints();
		$hc->symbols = new _hx_array(array());
		$hc->structure = new _hx_array(array());
		$hc->structure->push(com_wiris_quizzes_impl_HandwritingConstraints::$GENERAL);
		$hc->structure->push(com_wiris_quizzes_impl_HandwritingConstraints::$FRACTIONS);
		return $hc;
	}
	function __toString() { return 'com.wiris.quizzes.impl.HandwritingConstraints'; }
}
com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS_STRING = "0 1 2 3 4 5 6 7 8 9 a A α b B β c C . · , ; ... : cos cm d D dm δ Δ ÷ / e " . "E ξ = ≈ ∃ f F ∀ g G γ Γ ≥ > h H i I ∈ ∞ ∫ j J k K κ l L λ Λ ≤ lim log " . "{ [ ( < m M μ n N η ≠ o O p P ρ φ Φ π Π ψ Ψ ± ′ q Q r R → } ] ) s S σ Σ " . "sin √ ∑ ∏ t T τ tan θ Θ u U v V ν w W ω Ω x X χ × y Y z Z ζ frac | - ! " . "+ ~ ^ ° € \$ £ % ‰ ∂ ∇ ε ∅ ∪ ∩ ⊂ ⊃ ⊆ ⊇ ℙ ℕ ℤ ℚ ℂ ℝ 𝕀 ⇒ ⏜ ∧ ∨ #";
function com_wiris_quizzes_impl_HandwritingConstraints_0(&$�this, &$beginContent, &$charAfterTag, &$content, &$end, &$endBeginTag, &$endContent, &$i, &$s, &$split, &$start, &$tag) {
	{
		$s1 = new haxe_Utf8(null);
		$s1->addChar(haxe_Utf8::charCodeAt(_hx_substr($content, $i, null), 0));
		return $s1->toString();
	}
}
