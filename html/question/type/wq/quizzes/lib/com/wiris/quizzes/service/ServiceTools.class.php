<?php

class com_wiris_quizzes_service_ServiceTools {
	public function __construct() { 
	}
	static function getContentType($name) {
		$ext = _hx_substr($name, _hx_last_index_of($name, ".", null) + 1, null);
		if($ext === "png") {
			return "image/png";
		} else {
			if($ext === "gif") {
				return "image/gif";
			} else {
				if($ext === "jpg" || $ext === "jpeg") {
					return "image/jpeg";
				} else {
					if($ext === "html" || $ext === "htm") {
						return "text/html";
					} else {
						if($ext === "css") {
							return "text/css";
						} else {
							if($ext === "js") {
								return "application/javascript";
							} else {
								if($ext === "txt") {
									return "text/plain";
								} else {
									if($ext === "ini") {
										return "text/plain";
									} else {
										return "application/octet-stream";
									}
								}
							}
						}
					}
				}
			}
		}
	}
	static function appendQuizzesJS() {
		$cfg = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration();
		$config = $cfg->getJSConfig();
		$expose = "if(!window.com) window.com={};\x0A" . "if(!window.com.wiris) window.com.wiris={};\x0A" . "if(!window.com.wiris.quizzes) window.com.wiris.quizzes={};\x0A" . "if(!window.com.wiris.quizzes.api) window.com.wiris.quizzes.api={};\x0A" . "if(!window.com.wiris.quizzes.api.ui) window.com.wiris.quizzes.api.ui={};\x0A" . "window.com.wiris.quizzes.api.QuizzesBuilder = com.wiris.quizzes.api.QuizzesBuilder;\x0A" . "window.com.wiris.quizzes.api.ConfigurationKeys = com.wiris.quizzes.api.ConfigurationKeys;\x0A" . "window.com.wiris.quizzes.api.QuizzesConstants = com.wiris.quizzes.api.QuizzesConstants;\x0A" . "window.com.wiris.quizzes.api.ui.QuizzesUIConstants = com.wiris.quizzes.api.ui.QuizzesUIConstants;\x0A";
		$main = "com.wiris.quizzes.JsQuizzesFilter.main();\x0A";
		return $config . $expose . $main;
	}
	function __toString() { return 'com.wiris.quizzes.service.ServiceTools'; }
}
