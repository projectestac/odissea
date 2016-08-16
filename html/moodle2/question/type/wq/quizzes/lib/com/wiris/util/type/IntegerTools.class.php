<?php

class com_wiris_util_type_IntegerTools {
	public function __construct(){}
	static function max($x, $y) {
		return (($x > $y) ? $x : $y);
	}
	static function min($x, $y) {
		return (($x < $y) ? $x : $y);
	}
	function __toString() { return 'com.wiris.util.type.IntegerTools'; }
}
