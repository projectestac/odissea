<?php
require_once("../lib.php");
require_once("../locallib.php");

function get_bean() {
    global $beans, $currentbean, $params, $thiselement, $oldelements;
    $oldelements = array();
    $thiselement = "";
    $currentbean = -1;
    $params = array();
    $beans = array();

    $payload = file_get_contents("php://input");
    $xmlparser = xml_parser_create('UTF-8');
    xml_set_element_handler($xmlparser, 'start_element_bean', 'end_element_bean');
    xml_set_character_data_handler($xmlparser, 'character_data_bean');
    xml_parse($xmlparser, $payload);
    xml_parser_free($xmlparser);

    unset($oldelements);
    unset($thiselement);
    unset($currentbean);
    unset($params);

    return array_shift($beans);
}

function start_element_bean($parser, $name, $attribs) {
    global $beans, $currentbean, $params, $thiselement, $oldelements;

    array_push($oldelements, $thiselement);
    $thiselement = $name;
    if ($name == 'BEAN') {
        $currentbean++;
        $bean = array();
        $bean['ID'] = $attribs['ID'];
        $bean['PARAMS'] = "";
        $beans[$currentbean] = $bean;
        $params = array();
    } else if ($name == 'PARAM') {
        $params[$attribs['NAME']] = $attribs['VALUE'];
    } else if ($name == 'ACTIVITY') {
        $beans[$currentbean]['ACTIVITY'] = array('name' => $attribs['NAME'],
                                                'start' => $attribs['START'],
                                                'time' => $attribs['TIME'],
                                                'solved' => $attribs['SOLVED'],
                                                'score' => $attribs['SCORE'],
                                                'minActions' => $attribs['MINACTIONS'],
                                                'actions' => $attribs['ACTIONS']);
    }
}

function end_element_bean($parser, $name) {
    global $beans, $currentbean, $params, $thiselement, $oldelements;

    $thiselement = array_pop($oldelements);
    $beans[$currentbean]['PARAMS'] = $params;
}

function character_data_bean($parser, $text) {
    global $beans, $currentbean, $params, $thiselement;

    if ($thiselement == 'MESSAGE' || $thiselement == 'RESPONSES' || $thiselement == 'SCORES') {
        $strlowelement = strtolower($thiselement);
        if (!isset($params[$strlowelement])) {
            $params[$strlowelement] = "";
        }
        $params[$strlowelement] .= str_replace("'", "&#39;", $text);
    }
}


// ACTIONS

function get_sections($assignmentid) {
    global $DB;

    if (!exists_assignment($assignmentid)) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    }

    $time = '00:00:00';

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'get_sections');
    $bean->addAttribute('assignmentid', $assignmentid);

    if (!isset($error)) {
        if ($qv = $DB->get_record_sql("SELECT q.id as qvid, q.maxdeliver, q.showcorrection
                             FROM {qv} q, {qv_assignments} a
                             WHERE q.id = a.qvid AND a.id = $assignmentid")) {
            if ($qvsections = $DB->get_records('qv_sections', array('assignmentid' => $assignmentid))) {
                foreach ($qvsections as $qvsection) {
                    $time = qv_add_time($time, $qvsection->time);
                    $section = $bean->addChild('section');
                    $section->addAttribute('id', $qvsection->sectionid);
                    $section->addAttribute('showcorrection', $qv->showcorrection);
                    $section->addAttribute('maxdeliver', $qv->maxdeliver);
                    $section->addAttribute('attempts', $qvsection->attempts);
                    $section->addAttribute('scores', $qvsection->scores);
                    $section->addAttribute('pending_scores', $qvsection->pending_scores);
                    $section->addAttribute('state', $qvsection->state);
                    $section->addAttribute('time', $qvsection->time);
                }
            }
        }
    } else {
        $message->addAttribute('error', $error);
    }

    $bean->addAttribute('time', $time);

    return $bean;
}

function get_section($assignmentid, $sectionid) {
    global $DB;

    $responses = "";
    $scores = "";
    $pendingscores = "";
    $attempts = 0;
    $state = -1;
    $time = "00:00:00";
    $maxdeliver = "";
    $showcorrection = "";

    if (!exists_assignment($assignmentid)) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        if ($qvsection = get_section_from_db($assignmentid, $sectionid)) {
            $responses = $qvsection->responses;
            $scores = $qvsection->scores;
            $pendingscores = $qvsection->pending_scores;
            $attempts = $qvsection->attempts;
            $state = $qvsection->state;
            $time = $qvsection->time;
        }

        if ($qv = $DB->get_record_sql("SELECT q.id as qvid, q.maxdeliver, q.showcorrection
                                 FROM {qv} q, {qv_assignments} a
                                 WHERE q.id=a.qvid AND a.id = $assignmentid")) {
              $maxdeliver = $qv->maxdeliver;
              $showcorrection = $qv->showcorrection;
        }
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'get_section');
    $bean->addAttribute('assignmentid', $assignmentid);

    $section = $bean->addChild('section');
    $section->addAttribute('id', $sectionid);
    if (isset($error)) {
        $section->addAttribute('error', $error);
    }
    $section->addAttribute('showcorrection', $showcorrection);
    $section->addAttribute('maxdeliver', $maxdeliver);
    $section->addAttribute('attempts', $attempts);
    $section->addAttribute('state', $state);
    $section->addAttribute('time', $time);

    $section->addChild('responses', $responses);
    $section->addChild('pending_scores', $pendingscores);

    return $bean;
}

function exists_assignment($assignmentid) {
    global $DB;
    return $DB->get_record('qv_assignments', array('id' => $assignmentid));
}

function check_max_deliver_not_exceeded($qvsection) {
    global $DB;

    $notexceeded = true;
    // Check max deliver < current attempts
    if ($qv = $DB->get_record_sql("SELECT q.maxdeliver, q.showcorrection
                           FROM {qv} q, {qv_assignments} a
                           WHERE q.id=a.qvid AND a.id = $qvsection->assignmentid")) {
        $notexceeded = ($qv->maxdeliver < 0 || $qvsection->attempts < $qv->maxdeliver);
    }
    return $notexceeded;
}


function save_section($assignmentid, $sectionid, $responses, $sectionorder = -1, $itemorder = -1, $sectiontime) {
    global  $DB;

    $qvassignment = exists_assignment($assignmentid);
    // if (!$exists_assignment($assignmentid)) {
    if (!$qvassignment) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        $modifiedassign = false;
        if ($sectionorder >= 0) { // Establishing sectionorder
            if ($sectionorder != 0 && $qvassignment->sectionorder == 0) { // It wasn't established before
                $qvassignment->sectionorder = $sectionorder;
                $modifiedassign = true;
            }
        }
        if ($itemorder >= 0) { // Establishing itemorder
            if ($itemorder != 0 && $qvassignment->itemorder == 0) { // It wasn't established before
                $qvassignment->itemorder = $itemorder;
                $modifiedassign = true;
            }
        }
        if ($modifiedassign) { // Only update if necessary
            if (!$DB->update_record('qv_assignments', $qvassignment)) {
                $error = ERROR_DB_INSERT;
            }
        }

        if (!$qvsection = get_section_from_db($assignmentid, $sectionid)) {
            // Insert section
            $qvsection = new stdClass();
            $qvsection->assignmentid = $assignmentid;
            $qvsection->sectionid = $sectionid;
            $qvsection->responses = $responses;
            $qvsection->state = qv::STATE_STARTED;
            $qvsection->time = $sectiontime;
            if (!$DB->insert_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_INSERT;
            }
        } else {
            if (check_max_deliver_not_exceeded($qvsection)) {
                // Update section
                $qvsection->responses = $responses;
                $qvsection->state = qv::STATE_STARTED;
                $qvsection->pending_scores = $qvsection->scores;
                $qvsection->time = qv_add_time($qvsection->time, $sectiontime);
                if (!$DB->update_record('qv_sections', $qvsection)) {
                    $error = ERROR_DB_UPDATE;
                }
            } else {
                $error = ERROR_MAXDELIVER_EXCEEDED;
            }
        }
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'save_section');
    $bean->addAttribute('assignmentid', $assignmentid);

    $section = $bean->addChild('section');
    $section->addAttribute('id', $sectionid);
    if (isset($error)) {
        $section->addAttribute('error', $error);
    }
    $section->addAttribute('state', $qvsection->state);

    return $bean;
}


function save_section_teacher($assignmentid, $sectionid, $responses, $scores) {
    global $DB;

    $qvassignment = exists_assignment($assignmentid);
    if (!$qvassignment) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        if (!$qvsection = get_section_from_db($assignmentid, $sectionid)) {
            // Insert section
            $qvsection = new stdClass();
            $qvsection->assignmentid = $assignmentid;
            $qvsection->sectionid = $sectionid;
            $qvsection->responses = $responses;
            $qvsection->pending_scores = $scores;
            $qvsection->state = qv::STATE_STARTED;
            $qvsection->time = '00:00:00';
            if (!$DB->insert_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_INSERT;
            }
        } else {
            // Update section
            $qvsection->responses = $responses;
            $qvsection->pending_scores = $scores;
            $qvsection->state = qv::STATE_STARTED;

            if (!$DB->update_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_UPDATE;
            } else {
                // qv_update_gradebook($qvsection);
                $qv = $DB->get_record('qv', array('id' => $qvassignment->qvid));
                $cm = get_coursemodule_from_instance('qv', $qv->id, $qv->course, false, MUST_EXIST);
                $qv->cmidnumber = $cm->idnumber;
                qv_update_grades($qv, $qvassignment->userid);
            }
        }
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'save_section_teacher');
    $bean->addAttribute('assignmentid', $assignmentid);

    $section = $bean->addChild('section');
    $section->addAttribute('id', $sectionid);
    if (isset($error)) {
        $section->addAttribute('error', $error);
    }
    $section->addAttribute('state', $qvsection->state);

    return $bean;
}


function deliver_section($assignmentid, $sectionid, $responses, $scores, $sectionorder = -1, $itemorder = -1, $sectiontime) {
    global $DB;

    $qvassignment = exists_assignment($assignmentid);
    // if (!$exists_assignment($assignmentid)) {
    if (!$qvassignment) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        $modifiedassign = false;
        if ($sectionorder >= 0) { // Establishing sectionorder
            if ($sectionorder != 0 && $qvassignment->sectionorder == 0) { // It wasn't established before
                $qvassignment->sectionorder = $sectionorder;
                $modifiedassign = true;
            }
        }
        if ($itemorder >= 0) { // Establishing itemorder
            if ($itemorder != 0 && $qvassignment->itemorder == 0) { // It wasn't established before
                    $qvassignment->itemorder = $itemorder;
                    $modifiedassign = true;
            }
        }
        if ($modifiedassign) { // Only update if necessary
            if (!$DB->update_record('qv_assignments', $qvassignment)) {
                $error = ERROR_DB_INSERT;
            }
        }

        if (!$qvsection = get_section_from_db($assignmentid, $sectionid)) {
            // Insert section
            $qvsection = new stdClass();
            $qvsection->assignmentid = $assignmentid;
            $qvsection->sectionid = $sectionid;
            $qvsection->responses = $responses;
            $qvsection->scores = $scores;
            $qvsection->pending_scores = $scores;
            $qvsection->attempts = 1;
            $qvsection->state = qv::STATE_DELIVERED;
            $qvsection->time = $sectiontime;
            if (!$DB->insert_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_INSERT;
            } else {
                // qv_update_gradebook($qvsection);
                $qv = $DB->get_record('qv', array('id' => $qvassignment->qvid) );
                $cm = get_coursemodule_from_instance('qv', $qv->id, $qv->course, false, MUST_EXIST);
                $qv->cmidnumber = $cm->idnumber;
                qv_update_grades($qv, $qvassignment->userid);
            }
        } else {
            // Check max deliver < current attempts
            if (check_max_deliver_not_exceeded($qvsection)) {
                // Update section
                $qvsection->responses = $responses;
                $qvsection->scores = $scores;
                $qvsection->pending_scores = $scores;
                $qvsection->attempts++;
                $qvsection->state = qv::STATE_DELIVERED;
                $qvsection->time = qv_add_time($qvsection->time, $sectiontime);
                if (!$DB->update_record('qv_sections', $qvsection)) {
                    $error = ERROR_DB_UPDATE;
                } else {
                    // qv_update_gradebook($qvsection);
                    $qv = $DB->get_record('qv', array('id' => $qvassignment->qvid) );
                    $cm = get_coursemodule_from_instance('qv', $qv->id, $qv->course, false, MUST_EXIST);
                    $qv->cmidnumber = $cm->idnumber;
                    qv_update_grades($qv, $qvassignment->userid);
                }
            } else {
                $error = ERROR_MAXDELIVER_EXCEEDED;
            }
        }
    }

    if ($qv = $DB->get_record_sql("SELECT q.id as qvid, q.maxdeliver, q.showcorrection
                             FROM {qv} q, {qv_assignments} a
                         WHERE q.id=a.qvid AND a.id = $assignmentid")) {
        $maxdeliver = $qv->maxdeliver;
        $showcorrection = $qv->showcorrection;
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'deliver_section');
    $bean->addAttribute('assignmentid', $assignmentid);

    $section = $bean->addChild('section');
    $section->addAttribute('id', $sectionid);
    if (isset($error)) {
        $section->addAttribute('error', $error);
    }
    $section->addAttribute('attempts', $qvsection->attempts);
    $section->addAttribute('maxdeliver', $maxdeliver);
    $section->addAttribute('showcorrection', $showcorrection);
    $section->addAttribute('time', $qvsection->time);
    $section->addAttribute('state', $qvsection->state);

    return $bean;
}

function correct_section($assignmentid, $sectionid, $responses, $scores) {
    global $DB;

    $qvassignment = exists_assignment($assignmentid);
    if (!$qvassignment) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        if (!$qvsection = get_section_from_db($assignmentid, $sectionid)) {
            // Insert section
            $qvsection = new stdClass();
            $qvsection->assignmentid = $assignmentid;
            $qvsection->sectionid = $sectionid;
            if ($responses == "") {
                $qvsection->responses = "";
            } else {
                $qvsection->responses = $responses;
            }
            if ($scores == "") {
                $qvsection->scores = "";
                $qvsection->pending_scores = "";
            } else {
                $qvsection->scores = $scores;
                $qvsection->pending_scores = $scores;
            }
            $qvsection->attempts = 0;
            $qvsection->state = qv::STATE_CORRECTED;

            if (!$DB->insert_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_INSERT;
            }
        } else {
            // Update section
            $qvsection->state = qv::STATE_CORRECTED;
            if ($responses != "") {
                $qvsection->responses = $responses;
            }
            if ($scores != "") {
                $qvsection->scores = $scores;
                $qvsection->pending_scores = $scores;
            }
            if (!$DB->update_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_UPDATE;
            } else {
                // qv_update_gradebook($qvsection);
                $qv = $DB->get_record('qv', array('id' => $qvassignment->qvid) );
                $cm = get_coursemodule_from_instance('qv', $qv->id, $qv->course, false, MUST_EXIST);
                $qv->cmidnumber = $cm->idnumber;
                qv_update_grades($qv, $qvassignment->userid);
            }
        }
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'correct_section');
    $bean->addAttribute('assignmentid', $assignmentid);

    $section = $bean->addChild('section');
    $section->addAttribute('id', $sectionid);
    if (isset($error)) {
        $section->addAttribute('error', $error);
    }
    $section->addAttribute('state', $qvsection->state);

    return $bean;
}

function save_time($assignmentid, $sectionid, $sectiontime) {
    global $DB;

    if (!exists_assignment($assignmentid)) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        if (!$qvsection = get_section_from_db($assignmentid, $sectionid)) {
            // Insert section
            $qvsection = new stdClass();
            $qvsection->assignmentid = $assignmentid;
            $qvsection->sectionid = $sectionid;
            $qvsection->responses = "";
            $qvsection->scores = "";
            $qvsection->attempts = 0;
            $qvsection->state = qv::STATE_STARTED;
            $qvsection->time = $sectiontime;
            if (!$DB->insert_record('qv_sections', $qvsection)) {
                    $error = ERROR_DB_UPDATE;
            }
        } else {
            // Update section
            $qvsection->time = qv_add_time($qvsection->time, $sectiontime);
            if (!$DB->update_record('qv_sections', $qvsection)) {
                $error = ERROR_DB_UPDATE;
            }
        }
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'save_time');
    $bean->addAttribute('assignmentid', $assignmentid);

    $section = $bean->addChild('section');
    $section->addAttribute('id', $sectionid);
    if (isset($error)) {
        $section->addAttribute('error', $error);
    }
    $section->addAttribute('time', $qvsection->time);

    return $bean;
}

function add_message($assignmentid, $sectionid, $itemid, $userid, $message) {
    global $USER, $DB;

    if (!exists_assignment($assignmentid)) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else if ($message != "") {
        if (!$qvsection = get_section_from_db($assignmentid, $sectionid)) {
            // Insert section
            $qvsection = new stdClass();
            $qvsection->assignmentid = $assignmentid;
            $qvsection->sectionid = $sectionid;
            $qvsection->responses = "";
            $qvsection->id = $DB->insert_record('qv_sections', $qvsection);
            if (!$qvsection->id) {
                $error = ERROR_DB_INSERT;
            }
        }
        if (!isset($error)) {
            // Insert message
            $qvmessage = new StdClass();
            $qvmessage->sid = $qvsection->id;
            $qvmessage->itemid = $itemid;
            $qvmessage->userid = ($userid != "" ? $userid : $USER->id);
            $qvmessage->created = time();
            $qvmessage->message = $message;
            $msgid = $DB->insert_record('qv_messages', $qvmessage);
            if ($msgid <= 0) {
                $error = ERROR_DB_INSERT;
            } else {
                // Mark message read for author user
                $qvmessageread = read_message($qvsection);
            }
        }
    }

    // Response
    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'add_message');
    $bean->addAttribute('assignmentid', $assignmentid);
    $bean->addAttribute('sectionid', $sectionid);
    $bean->addAttribute('itemid', $itemid);
    $bean->addAttribute('userid', $userid);

    $message = $bean->addChild('message');
    $message->addAttribute('id', $msgid);
    if (isset($error)) {
        $message->addAttribute('error', $error);
    }
    return $bean;
}

function get_messages($assignmentid, $sectionid) {
    global $USER, $DB;

    if (!exists_assignment($assignmentid)) {
        $error = ERROR_ASSIGNMENTID_DOES_NOT_EXIST;
    } else {
        if ($qvsection = get_section_from_db($assignmentid, $sectionid)) {
            $qvmessageread = read_message($qvsection);
        }
    }

    $bean = new SimpleXMLElement('<bean/>');
    $bean->addAttribute('id', 'get_messages');
    $bean->addAttribute('assignmentid', $assignmentid);
    $bean->addAttribute('sectionid', $sectionid);
    $bean->addAttribute('userid', $USER->id);
    if (isset($error)) {
        $bean->addAttribute('error', $error);
    } else if ($qvsection && $qvmessages = $DB->get_records('qv_messages', array('sid' => $qvsection->id), 'created')) {
        foreach ($qvmessages as $qvmessage) {
            $message = $bean->addChild('message', $qvmessage->message);
            $message->addAttribute('id', $qvmessage->id);
            $message->addAttribute('itemid', $qvmessage->itemid);
            $message->addAttribute('userid', $qvmessage->userid);
            if ($qvusername = $DB->get_field('user', 'username', array('id' => $qvmessage->userid))) {
                $message->addAttribute('username', $qvusername);
            }
            $message->addAttribute('id', $qvmessage->id);
            $message->addAttribute('id', $qvmessage->id);
            if (isset($error)) {
                $message->addAttribute('error', $error);
            }
        }
    }

    return $bean;
}

function read_message($qvsection) {
    global $USER, $DB;

    // Mark section as read by userid
    if ($qvmessageread = $DB->get_record('qv_messages_read', array('sid' => $qvsection->id, 'userid' => $USER->id))) {
        $qvmessageread->timereaded = time();
        if (!$DB->update_record('qv_messages_read', $qvmessageread)) {
            $error = ERROR_DB_UPDATE;
        }
    } else {
        $qvmessageread = new stdClass();
        $qvmessageread->sid = $qvsection->id;
        $qvmessageread->userid = $USER->id;
        $qvmessageread->timereaded = time();
        if (!$DB->insert_record('qv_messages_read', $qvmessageread)) {
            $error = ERROR_DB_INSERT;
        }
    }
    return $qvmessageread;
}

function get_section_from_db($assignmentid, $sectionid) {
    global $DB;
    return $DB->get_record('qv_sections', array('assignmentid' => $assignmentid, 'sectionid' => $sectionid));
}