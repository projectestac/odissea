<?php

class com_wiris_quizzes_impl_QuizzesServiceImpl implements com_wiris_quizzes_api_QuizzesService{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$this->protocol = com_wiris_quizzes_impl_QuizzesServiceImpl::$PROTOCOL_REST;
		$this->url = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$SERVICE_URL);
		com_wiris_quizzes_impl_QuizzesServiceImpl::$deploymentId = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$DEPLOYMENT_ID);
		com_wiris_quizzes_impl_QuizzesServiceImpl::$licenseId = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration()->get(com_wiris_quizzes_api_ConfigurationKeys::$LICENSE_ID);
	}}
	public function getServiceUrl() {
		$url = $this->url;
		if($this->protocol === com_wiris_quizzes_impl_QuizzesServiceImpl::$PROTOCOL_REST) {
			$url .= "/rest";
		}
		return $url;
	}
	public function webServiceEnvelope($data) {
		if($this->protocol === com_wiris_quizzes_impl_QuizzesServiceImpl::$PROTOCOL_REST) {
			$data = "<doProcessQuestions>" . $data . "</doProcessQuestions>";
		}
		return $data;
	}
	public function callService($mqr, $cache, $listener, $async) {
		$s = new com_wiris_util_xml_XmlSerializer();
		$s->setCached($cache);
		$aqr = $mqr->questionRequests;
		{
			$_g = 0;
			while($_g < $aqr->length) {
				$qr = $aqr[$_g];
				++$_g;
				if(!$cache && com_wiris_quizzes_impl_QuizzesServiceImpl::$USE_CACHE) {
					$qr->addProcess(new com_wiris_quizzes_impl_ProcessStoreQuestion());
				}
				if(com_wiris_quizzes_impl_QuizzesServiceImpl::$deploymentId !== null) {
					$qr->addMetaProperty("wrs-deployment", com_wiris_quizzes_impl_QuizzesServiceImpl::getDeploymentId());
				}
				if(com_wiris_quizzes_impl_QuizzesServiceImpl::$licenseId !== null) {
					$qr->addMetaProperty("wrs-license", com_wiris_quizzes_impl_QuizzesServiceImpl::getLicenseId());
				}
				$qr->addMetaProperty("wrs-cause", "quizzes_generic_cause");
				unset($qr);
			}
		}
		$postData = $this->webServiceEnvelope($s->write($mqr));
		$http = null;
		$httpl = new com_wiris_quizzes_impl_HttpToQuizzesListener($listener, $mqr, $this, $async);
		$config = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getConfiguration();
		$clientSide = com_wiris_settings_PlatformSettings::$IS_JAVASCRIPT || com_wiris_settings_PlatformSettings::$IS_FLASH;
		$allowCors = $clientSide && "true" === $config->get(com_wiris_quizzes_api_ConfigurationKeys::$CROSSORIGINCALLS_ENABLED);
		if($clientSide && !$allowCors) {
			$url = $config->get(com_wiris_quizzes_api_ConfigurationKeys::$PROXY_URL);
			$http = new com_wiris_quizzes_impl_HttpImpl($url, $httpl);
			$http->setParameter("service", "quizzes");
			$http->setParameter("rawpostdata", "true");
			$http->setParameter("postdata", $postData);
			$http->setHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
		} else {
			$url = $this->getServiceUrl();
			if($clientSide) {
				$http = new com_wiris_quizzes_impl_HttpImpl($url, $httpl);
			} else {
				$http = new com_wiris_quizzes_impl_MaxConnectionsHttpImpl($url, $httpl);
				$referrer = $config->get(com_wiris_quizzes_api_ConfigurationKeys::$REFERER_URL);
				if($referrer === null || trim($referrer) === "") {
					com_wiris_system_Logger::log(900, "'quizzes.referer.url' configuration item is not set so requests to the " . "service can not be identified. Unidentified requests may be blocked by the server " . "and will certainly be blocked in future releases." . "\x0A" . "Setup the referrer editing your configuration.ini file or setting it programatically " . "through the Configuration interface." . "\x0A");
				} else {
					$http->setHeader("Referer", $referrer);
				}
			}
			$http->setHeader("Content-Type", "text/xml; charset=UTF-8");
			$http->setPostData($postData);
		}
		$http->setAsync($async);
		$http->request(true);
	}
	public function executeMultipleImpl($mqr, $listener, $async) {
		$cache = com_wiris_quizzes_impl_QuizzesServiceImpl::$USE_CACHE;
		$i = 0;
		while($cache && $i < $mqr->questionRequests->length) {
			$q = _hx_array_get($mqr->questionRequests, $i)->question;
			$cache = $cache && $q->hasId();
			$i++;
			unset($q);
		}
		$this->callService($mqr, $cache, $listener, $async);
	}
	public function executeMultiple($mqr) {
		$listener = new com_wiris_quizzes_impl_QuizzesServiceSyncListener();
		$this->executeMultipleImpl($mqr, $listener, false);
		return $listener->mqs;
	}
	public function executeMultipleAsync($req, $listener) {
		$this->executeMultipleImpl($req, $listener, true);
	}
	public function singleResponse($mqs) {
		if($mqs->questionResponses->length === 0) {
			return new com_wiris_quizzes_impl_QuestionResponseImpl();
		} else {
			return $mqs->questionResponses[0];
		}
	}
	public function multipleRequest($req) {
		$reqi = $req;
		$mqr = new com_wiris_quizzes_impl_MultipleQuestionRequest();
		$mqr->questionRequests = new _hx_array(array());
		$mqr->questionRequests->push($reqi);
		return $mqr;
	}
	public function executeAsync($req, $listener) {
		$mqr = $this->multipleRequest($req);
		$this->executeMultipleAsync($mqr, new com_wiris_quizzes_impl_QuizzesServiceSingleListener($listener));
	}
	public function execute($req) {
		$mqr = $this->multipleRequest($req);
		$mqs = $this->executeMultiple($mqr);
		return $this->singleResponse($mqs);
	}
	public $protocol;
	public $url;
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
	static $USE_CACHE = true;
	static $PROTOCOL_REST = 0;
	static $deploymentId = null;
	static $licenseId = null;
	static function getDeploymentId() {
		return com_wiris_quizzes_impl_QuizzesServiceImpl_0();
	}
	static function getLicenseId() {
		return com_wiris_quizzes_impl_QuizzesServiceImpl_1();
	}
	function __toString() { return 'com.wiris.quizzes.impl.QuizzesServiceImpl'; }
}
function com_wiris_quizzes_impl_QuizzesServiceImpl_0() {
	if(com_wiris_quizzes_impl_QuizzesServiceImpl::$deploymentId === null) {
		return "null";
	} else {
		return com_wiris_quizzes_impl_QuizzesServiceImpl::$deploymentId;
	}
}
function com_wiris_quizzes_impl_QuizzesServiceImpl_1() {
	if(com_wiris_quizzes_impl_QuizzesServiceImpl::$licenseId === null) {
		return "null";
	} else {
		return com_wiris_quizzes_impl_QuizzesServiceImpl::$licenseId;
	}
}
