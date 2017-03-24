<?php

class com_wiris_quizzes_service_PhpServiceProxy {
	
	public static function dispatch() {
		$proxy = new com_wiris_quizzes_service_PhpServiceProxy();
		$proxy->doPost();
	}
	
	private function getReferer() {
		$referer = ((!empty($_SERVER['HTTPS']))?'https://':'http://') . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
		if(isset($_SERVER['QUERY_STRING'])) {
			$referer .= '?' . $_SERVER['QUERY_STRING'];
		}
		return $referer;
	}
	
	private function doPost() {
		$conf = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration();
		$conf->set(com_wiris_quizzes_api_ConfigurationKeys::$REFERER_URL, $this->getReferer());
		
		$request = new com_wiris_system_service_HttpRequest();
		$res = new com_wiris_system_service_HttpResponse();

		// Uploaded files.
		foreach ($_FILES as $key => $file) {
			if ($file['size'] > 0) {
				if ($file['size'] > com_wiris_quizzes_service_ServiceRouter::$MAX_UPLOAD_SIZE) {
					$res->sendError(400, "File too big.");
				}
				$content = '';
				$fh = fopen($file['tmp_name'], 'rb');
				if ($fh !== false) {
					while (!feof($fh)) {
						$content .= fread($fh, 4096);
					}
					fclose($fh);
				}
				$request->setParameter($key, $content);
			}
		}
		
		$service = new com_wiris_quizzes_service_ServiceRouter();
		$service->service($request, $res);
	}
}
?>