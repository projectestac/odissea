<?php

class com_wiris_util_json_JSon extends com_wiris_util_json_StringParser {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public function newLine($depth, $sb) {
		$sb->add("\x0D\x0A");
		$i = null;
		{
			$_g = 0;
			while($_g < $depth) {
				$i1 = $_g++;
				$sb->add("  ");
				unset($i1);
			}
		}
		$this->lastDepth = $depth;
	}
	public function setAddNewLines($addNewLines) {
		$this->addNewLines = $addNewLines;
	}
	public function decodeArray() {
		$v = new _hx_array(array());
		$this->nextToken();
		$this->skipBlanks();
		if($this->c === 93) {
			$this->nextToken();
			return $v;
		}
		while($this->c !== 93) {
			$o = $this->localDecode();
			$v->push($o);
			$this->skipBlanks();
			if($this->c === 44) {
				$this->nextToken();
				$this->skipBlanks();
			} else {
				if($this->c !== 93) {
					throw new HException("Expected ',' or ']'.");
				}
			}
			unset($o);
		}
		$this->nextToken();
		return $v;
	}
	public function decodeHash() {
		$h = new Hash();
		$this->nextToken();
		$this->skipBlanks();
		if($this->c === 125) {
			$this->nextToken();
			return $h;
		}
		while($this->c !== 125) {
			$key = $this->decodeString();
			$this->skipBlanks();
			if($this->c !== 58) {
				throw new HException("Expected ':'.");
			}
			$this->nextToken();
			$this->skipBlanks();
			$o = $this->localDecode();
			$h->set($key, $o);
			$this->skipBlanks();
			if($this->c === 44) {
				$this->nextToken();
				$this->skipBlanks();
			} else {
				if($this->c !== 125) {
					throw new HException("Expected ',' or '}'. " . $this->getPositionRepresentation());
				}
			}
			unset($o,$key);
		}
		$this->nextToken();
		return $h;
	}
	public function decodeInteger() {
		$sb = new StringBuf();
		$hex = null;
		$hex = false;
		do {
			$sb->add(com_wiris_util_json_JSon_0($this, $hex, $sb));
			$this->nextToken();
			if($this->c === 120) {
				$hex = true;
				$sb->add(com_wiris_util_json_JSon_1($this, $hex, $sb));
				$this->nextToken();
			}
		} while($this->c >= 48 && $this->c <= 58 || $hex && $this->isHexDigit($this->c));
		return Std::parseInt($sb->b);
	}
	public function decodeString() {
		$sb = new StringBuf();
		$d = $this->c;
		$this->nextToken();
		while($this->c !== $d) {
			if($this->c === 92) {
				$this->nextToken();
				if($this->c === 110) {
					$sb->add("\x0A");
				} else {
					if($this->c === 114) {
						$sb->add("\x0D");
					} else {
						if($this->c === 34) {
							$sb->add("\"");
						} else {
							if($this->c === 39) {
								$sb->add("'");
							} else {
								if($this->c === 116) {
									$sb->add("\x09");
								} else {
									if($this->c === 92) {
										$sb->add("\\");
									} else {
										throw new HException("Unknown scape sequence '\\" . _hx_string_rec($this->c, "") . "'");
									}
								}
							}
						}
					}
				}
			} else {
				$sb->add(com_wiris_util_json_JSon_2($this, $d, $sb));
			}
			$this->nextToken();
		}
		$this->nextToken();
		return $sb->b;
	}
	public function localDecode() {
		$this->skipBlanks();
		if($this->c === 123) {
			return $this->decodeHash();
		} else {
			if($this->c === 91) {
				return $this->decodeArray();
			} else {
				if($this->c === 34) {
					return $this->decodeString();
				} else {
					if($this->c === 39) {
						return $this->decodeString();
					} else {
						if($this->c === 45 || $this->c >= 48 && $this->c <= 58) {
							return $this->decodeInteger();
						} else {
							throw new HException("Unrecognized char " . _hx_string_rec($this->c, ""));
						}
					}
				}
			}
		}
	}
	public function localDecodeString($str) {
		$this->init($str);
		return $this->localDecode();
	}
	public function encodeIntegerFormat($sb, $i) {
		$sb->add($i->toString());
	}
	public function encodeLong($sb, $i) {
		$sb->add("" . Std::string($i));
	}
	public function encodeInteger($sb, $i) {
		$sb->add("" . _hx_string_rec($i, ""));
	}
	public function encodeString($sb, $s) {
		$sb->add("\"");
		$i = null;
		{
			$_g1 = 0; $_g = strlen($s);
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = _hx_char_code_at($s, $i1);
				if($c === 34) {
					$sb->add("\\\"");
				} else {
					if($c === 13) {
						$sb->add("\\r");
					} else {
						if($c === 10) {
							$sb->add("\\n");
						} else {
							if($c === 9) {
								$sb->add("\\t");
							} else {
								if($c === 92) {
									$sb->add("\\\\");
								} else {
									$sb->add(_hx_char_at($s, $i1));
								}
							}
						}
					}
				}
				unset($i1,$c);
			}
		}
		$sb->add("\"");
	}
	public function encodeArray($sb, $v) {
		$newLines = $this->addNewLines && com_wiris_util_json_JSon::getDepth($v) > 2;
		$this->depth++;
		$myDepth = $this->lastDepth;
		$sb->add("[");
		if($newLines) {
			$this->newLine($this->depth, $sb);
		}
		$i = null;
		{
			$_g1 = 0; $_g = $v->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$o = $v[$i1];
				if($i1 > 0) {
					$sb->add(",");
					if($newLines) {
						$this->newLine($this->depth, $sb);
					}
				}
				$this->encodeImpl($sb, $o);
				unset($o,$i1);
			}
		}
		if($newLines) {
			$this->newLine($myDepth, $sb);
		}
		$sb->add("]");
		$this->depth--;
	}
	public function encodeHash($sb, $h) {
		$newLines = $this->addNewLines && com_wiris_util_json_JSon::getDepth($h) > 2;
		$this->depth++;
		$myDepth = $this->lastDepth;
		$sb->add("{");
		if($newLines) {
			$this->newLine($this->depth, $sb);
		}
		$e = $h->keys();
		$first = true;
		while($e->hasNext()) {
			if($first) {
				$first = false;
			} else {
				$sb->add(",");
				if($newLines) {
					$this->newLine($this->depth, $sb);
				}
			}
			$key = $e->next();
			$this->encodeString($sb, $key);
			$sb->add(":");
			$this->encodeImpl($sb, $h->get($key));
			unset($key);
		}
		if($newLines) {
			$this->newLine($myDepth, $sb);
		}
		$sb->add("}");
		$this->depth--;
	}
	public function encodeImpl($sb, $o) {
		if(com_wiris_system_TypeTools::isHash($o)) {
			$this->encodeHash($sb, $o);
		} else {
			if(com_wiris_system_TypeTools::isArray($o)) {
				$this->encodeArray($sb, $o);
			} else {
				if(Std::is($o, _hx_qtype("String"))) {
					$this->encodeString($sb, $o);
				} else {
					if(Std::is($o, _hx_qtype("Int"))) {
						$this->encodeInteger($sb, $o);
					} else {
						if(Std::is($o, _hx_qtype("haxe.Int64"))) {
							$this->encodeLong($sb, $o);
						} else {
							if(Std::is($o, _hx_qtype("com.wiris.util.json.JSonIntegerFormat"))) {
								$this->encodeIntegerFormat($sb, $o);
							} else {
								throw new HException("Impossible to convert to json object of type " . Std::string(Type::getClass($o)));
							}
						}
					}
				}
			}
		}
	}
	public function encodeObject($o) {
		$sb = new StringBuf();
		$this->depth = 0;
		$this->encodeImpl($sb, $o);
		return $sb->b;
	}
	public $lastDepth;
	public $depth;
	public $addNewLines;
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
	static function encode($o) {
		$js = new com_wiris_util_json_JSon();
		return $js->encodeObject($o);
	}
	static function decode($str) {
		$json = new com_wiris_util_json_JSon();
		return $json->localDecodeString($str);
	}
	static function getDepth($o) {
		if(com_wiris_system_TypeTools::isHash($o)) {
			$h = $o;
			$m = 0;
			if($h->exists("_left_") || $h->exists("_right_")) {
				if($h->exists("_left_")) {
					$m = com_wiris_common_WInteger::max(com_wiris_util_json_JSon::getDepth($h->get("_left_")), $m);
				}
				if($h->exists("_right_")) {
					$m = com_wiris_common_WInteger::max(com_wiris_util_json_JSon::getDepth($h->get("_right_")), $m);
				}
				return $m;
			}
			$iter = $h->keys();
			while($iter->hasNext()) {
				$key = $iter->next();
				$m = com_wiris_common_WInteger::max(com_wiris_util_json_JSon::getDepth($h->get($key)), $m);
				unset($key);
			}
			return $m + 2;
		} else {
			if(com_wiris_system_TypeTools::isArray($o)) {
				$a = $o;
				$i = null;
				$m = 0;
				{
					$_g1 = 0; $_g = $a->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						$m = com_wiris_common_WInteger::max(com_wiris_util_json_JSon::getDepth($a[$i1]), $m);
						unset($i1);
					}
				}
				return $m + 1;
			} else {
				return 1;
			}
		}
	}
	function __toString() { return 'com.wiris.util.json.JSon'; }
}
function com_wiris_util_json_JSon_0(&$»this, &$hex, &$sb) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($»this->c);
		return $s->toString();
	}
}
function com_wiris_util_json_JSon_1(&$»this, &$hex, &$sb) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($»this->c);
		return $s->toString();
	}
}
function com_wiris_util_json_JSon_2(&$»this, &$d, &$sb) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar($»this->c);
		return $s->toString();
	}
}
