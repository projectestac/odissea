<?php

function getPrecision($minActions, $numActions, $solved, $score){
    $precision = 0;
    if ($minActions>0 && $numActions>0){
        if ($solved=='true'){
            if ($numActions<$minActions) $precision=100;
            else $precision=($minActions*100)/$numActions;
        }else{
            $precision=100*($score*$score)/($minActions*$numActions);
        }
    }
    return $precision;
}

function getSeconds($miliseconds) {
    return round($miliseconds/1000);
}

function startElement($parser, $name, $attribs) {
    global $beans, $currentBean, $params, $thisElement, $oldElements, $elements;
    array_push($oldElements, $thisElement);
    $thisElement = $name;
    if ($name == 'BEAN') {
        $currentBean++;
        $bean = array();
        $bean['ID'] = $attribs['ID'];
        $bean['PARAMS'] = "";
        $beans[$currentBean] = $bean;
        $params = array();
    } else if ($name == 'PARAM') {
        $params[$attribs['NAME']] = $attribs['VALUE'];
    } else if ($name == 'ACTIVITY') {
        $beans[$currentBean]['ACTIVITY'] =
            array('name' => $attribs['NAME'],
                 'start' => $attribs['START'],
                 'time' => $attribs['TIME'],
                 'solved' => $attribs['SOLVED'],
                 'score' => $attribs['SCORE'],
                 'minActions' => $attribs['MINACTIONS'],
                 'actions' => $attribs['ACTIONS']);
    }
    $elements[$thisElement] = $attribs;
}

function endElement($parser, $name) {
    global $beans, $currentBean, $params, $thisElement, $oldElements;
    $thisElement = array_pop($oldElements);
    $beans[$currentBean]['PARAMS'] = $params;
}

// This function is not being used
function characterData($parser, $text) {
    global $beans, $currentBean, $params, $thisElement, $elements;
    if (!is_array($elements[$thisElement])) {
        $elements[$thisElement] .= $text;
    }
}

// Function to debug beans
function beans_log_file($text) {
    global $CFG;
    try {
        $logdir = $CFG->dataroot.'/logjclic.log';

        if ($handle = @fopen($logdir, "a")) {
            $content = "\r\n".date("Y-m-d H:i:s")." - Data: ".$text;
            @fwrite($handle, $content);
            @fclose($handle);
        }
    } catch (Exception $e) {
        return;
    }
}
