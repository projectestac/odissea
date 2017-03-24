<?php

class com_wiris_util_type_Arrays {
	public function __construct() { 
	}
	static function newIntArray($length, $initValue) {
		$data = new _hx_array(array());
		--$length;
		while($length >= 0) {
			$data[$length] = $initValue;
			--$length;
		}
		return $data;
	}
	static function indexOfElement($array, $element) {
		$i = 0;
		$n = $array->length;
		while($i < $n) {
			if($array[$i] !== null && $array[$i] == $element) {
				return $i;
			}
			++$i;
		}
		return -1;
	}
	static function fromCSV($s) {
		$words = _hx_explode(",", $s);
		$i = 0;
		$n = $words->length;
		while($i < $n) {
			$w = trim($words[$i]);
			if(strlen($w) > 0) {
				$words[$i] = $w;
				++$i;
			} else {
				$words->splice($i, 1);
			}
			unset($w);
		}
		return $words;
	}
	static function contains($array, $element) {
		return com_wiris_util_type_Arrays::indexOfElement($array, $element) >= 0;
	}
	static function indexOfElementArray($array, $element) {
		$i = null;
		{
			$_g1 = 0; $_g = $array->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($array[$i1] !== null && _hx_equal($array[$i1], $element)) {
					return $i1;
				}
				unset($i1);
			}
		}
		return -1;
	}
	static function indexOfElementInt($array, $element) {
		$i = null;
		{
			$_g1 = 0; $_g = $array->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($array[$i1] === $element) {
					return $i1;
				}
				unset($i1);
			}
		}
		return -1;
	}
	static function containsArray($array, $element) {
		return com_wiris_util_type_Arrays::indexOfElementArray($array, $element) >= 0;
	}
	static function containsInt($array, $element) {
		return com_wiris_util_type_Arrays::indexOfElementInt($array, $element) >= 0;
	}
	static function clear($a) {
		$i = $a->length - 1;
		while($i >= 0) {
			$a->remove($a[$i]);
			$i--;
		}
	}
	static function insertSorted($a, $e) {
		com_wiris_util_type_Arrays::insertSortedImpl($a, $e, false);
	}
	static function insertSortedSet($a, $e) {
		com_wiris_util_type_Arrays::insertSortedImpl($a, $e, true);
	}
	static function insertSortedImpl($a, $e, $set) {
		$imin = 0;
		$imax = $a->length;
		while($imin < $imax) {
			$imid = Math::floor(($imax + $imin) / 2);
			$cmp = Reflect::compare($a[$imid], $e);
			if($cmp === 0) {
				if($set) {
					return;
				} else {
					$imin = $imid;
					$imax = $imid;
				}
			} else {
				if($cmp < 0) {
					$imin = $imid + 1;
				} else {
					$imax = $imid;
				}
			}
			unset($imid,$cmp);
		}
		$a->insert($imin, $e);
	}
	static function copyArray($a) {
		$b = new _hx_array(array());
		$i = $a->iterator();
		while($i->hasNext()) {
			$b->push($i->next());
		}
		return $b;
	}
	function __toString() { return 'com.wiris.util.type.Arrays'; }
}
