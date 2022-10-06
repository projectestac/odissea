<?php

class com_wiris_util_type_StringUtils {
	public function __construct(){}
	static function stripAccents($s) {
		$sb = new StringBuf();
		$i = com_wiris_system_Utf8::getIterator($s);
		while($i->hasNext()) {
			$sb->add(com_wiris_util_xml_WCharacterBase::stripAccent($i->next()));
		}
		return $sb->b;
	}
	static function padLeftZeros($s, $length) {
		if($s === null || strlen($s) >= $length) {
			return $s;
		}
		$stringBuf = new StringBuf();
		{
			$_g = strlen($s);
			while($_g < $length) {
				$i = $_g++;
				$stringBuf->add("0");
				unset($i);
			}
		}
		$stringBuf->add($s);
		return $stringBuf->b;
	}
	static function compareIgnoringAccents($a, $b) {
		return com_wiris_util_type_StringUtils::stripAccents($a) === com_wiris_util_type_StringUtils::stripAccents($b);
	}
	static function slice($s, $beginIndex, $endIndex) {
		$stringLength = strlen($s);
		if($beginIndex < 0) {
			$beginIndex = com_wiris_util_type_IntegerTools::max(0, $stringLength + $beginIndex);
		} else {
			if($beginIndex > $stringLength) {
				$beginIndex = $stringLength;
			}
		}
		if($endIndex < 0) {
			$endIndex = com_wiris_util_type_IntegerTools::max(0, strlen($s) + $endIndex);
		} else {
			if($endIndex > $stringLength) {
				$endIndex = $stringLength;
			}
		}
		$span = com_wiris_util_type_IntegerTools::max(0, $endIndex - $beginIndex);
		return _hx_substr($s, $beginIndex, $span);
	}
	static function compareVersions($a, $b) {
		$va = _hx_explode(".", $a);
		$vb = _hx_explode(".", $b);
		$i = 0;
		while($i < $va->length) {
			$na = Std::parseInt($va[$i]);
			$nb = 0;
			if($i < $vb->length) {
				$nb = Std::parseInt($vb[$i]);
			}
			$n = $na - $nb;
			if($n !== 0) {
				return $n;
			}
			$i++;
			unset($nb,$na,$n);
		}
		while($i < $vb->length) {
			$nb = Std::parseInt($vb[$i]);
			if($nb !== 0) {
				return -$nb;
			}
			$i++;
			unset($nb);
		}
		return 0;
	}
	function __toString() { return 'com.wiris.util.type.StringUtils'; }
}
