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
	static function compareIgnoringAccents($a, $b) {
		return com_wiris_util_type_StringUtils::stripAccents($a) === com_wiris_util_type_StringUtils::stripAccents($b);
	}
	function __toString() { return 'com.wiris.util.type.StringUtils'; }
}
