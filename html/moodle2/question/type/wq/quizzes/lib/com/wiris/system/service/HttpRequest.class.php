<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


class com_wiris_system_service_HttpRequest {
    public $extraParams;
    private $wrap;

    public function __construct() {
        if(!php_Boot::$skip_constructor) {
        $this->extraParams = new Hash();
        $this->wrap = com_wiris_system_CallWrapper::getInstance();
    }}

    public function setParameter($key, $value) {
        $this->extraParams->set($key, $value);
    }
    public function getParameterNames() {
        // At this point we need to access directly to $_GET and $_POST variables because
        // we don't know what params are sended via POST or GET.
        // For security reasons this method only returns the params names.
        // To get the param value optional_param method.
        $param = new _hx_array(array());
        $key = "";
        foreach ($_GET as $key => $value) {
        $param->insert(0, $key);
        }
        foreach ($_POST as $key => $value) {
        $param->insert(0, $key);
        }
        return $param;
    }

    public function getContextURL() {
        return "";
    }

    public function getParameter($key) {
        $this->wrap->stop();
        $parameter = null;
        if (optional_param($key, null, PARAM_RAW) != null) {
            $parameter = optional_param($key, null, PARAM_RAW);
        } else {
             if ($this->extraParams->exists($key)) {
                $parameter = $this->extraParams->get($key);
            }
        }
        $this->wrap->start();
        return $parameter;
    }

}
