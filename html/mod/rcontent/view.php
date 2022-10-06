<?php

require_once('../../config.php');
require_once('lib.php');

$id = optional_param('id', false, PARAM_INT); // Course_module ID, or
$a = optional_param('a', false, PARAM_INT); // Rcontent instance ID

if ($id !== false) {
    if (($cm = get_coursemodule_from_id('rcontent', $id)) === false) {
        print_error('Course Module ID was incorrect');
    }
    if (($course = $DB->get_record('course', array('id' => $cm->course))) === false) {
        print_error('Course is misconfigured');
    }

    if (($rcontent = $DB->get_record('rcontent', array('id' => $cm->instance))) === false) {
        print_error('Course module is incorrect');
    }
} else if ($a !== false) {
    if (($rcontent = $DB->get_record('rcontent', array('id' => $a))) === false) {
        print_error('Course module is incorrect');
    }

    if (($course = $DB->get_record('course', array('id' => $rcontent->course))) === false) {
        print_error('Course is misconfigured');
    }

    if (($cm = get_coursemodule_from_instance('rcontent', $rcontent->id, $course->id)) === false) {
        print_error('Course Module ID was incorrect');
    }
} else {
    print_error('You must specify a course_module ID or an instance ID');
}

if (!empty($rcontent->frame) || $rcontent->popup == 1) {
    require_login($course, false, $cm);
} else {
    require_login($course);
    $strexit = get_string('exitactivity', 'rcontent');
    $exitlink = '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$rcontent->course.'" target="_parent" title="'.$strexit.'">'.$strexit.'</a> ';
    $PAGE->set_button($exitlink);
}


$context = context_course::instance($course->id);
$contextmodule = context_module::instance($cm->id);

$pagetitle = strip_tags(format_string($rcontent->name));

$PAGE->set_title($pagetitle);
$PAGE->set_heading($course->fullname);
$url = new moodle_url('/mod/rcontent/view.php', array('id' => $id)); // Base URL
$PAGE->set_focuscontrol('');
$PAGE->set_cacheable(true);

$PAGE->navbar->add(get_string('modulenameplural', 'rcontent'), new moodle_url('/mod/rcontent/index.php', array('id'=>$course->id)));
$PAGE->navbar->add($rcontent->name);

$PAGE->set_url($url);

//call to autentification web services
require_once($CFG->dirroot.'/local/rcommon/WebServices/AuthenticateContent.php');
$rcontent->module = 'rcontent';
$rcontent->cmid = $cm->id;
$return = AuthenticateUserContent($rcontent);

if ($return->AutenticarUsuarioContenidoResult->Codigo <= 0 || !isset($return->AutenticarUsuarioContenidoResult->URL) || empty($return->AutenticarUsuarioContenidoResult->URL)) {
    print_error(get_string('error_authentication', 'local_rcommon').$return->AutenticarUsuarioContenidoResult->Codigo.', '.$return->AutenticarUsuarioContenidoResult->Descripcion);
}

$url = $return->AutenticarUsuarioContenidoResult->URL;


if ($rcontent->popup == 1 ) {
    $options = $rcontent->popup_options;

    if (core_text::strpos($options, ',height') !== false) {
        $options = core_text::substr($options, 0, core_text::strpos($options, ',height'));
    }
    $PAGE->requires->data_for_js('rcontentplayerdata', array('cwidth' => str_replace('%', '', $rcontent->width),
                                                              'cheight' => str_replace('%', '', $rcontent->height),
                                                              'popupoptions' => $options,
                                                              'courseid' => $rcontent->course,
                                                              'launch' => true,
                                                              'launch_url' => $url), true);
    echo $OUTPUT->header();
    echo $OUTPUT->heading(format_string($rcontent->name));
    $content = '<a target="_blank" href="'.$url.'">'.get_string('popupblockedlinkname', 'rcontent').'</a>';
    echo $OUTPUT->box(get_string('popupblocked', 'rcontent', $content));

    $PAGE->requires->js('/mod/rcontent/view.js');
    $PAGE->requires->js_init_call('M.mod_rcontentform.init');

} else {
    echo $OUTPUT->header();
    echo $OUTPUT->heading(format_string($rcontent->name));

    // add button fullscreen
    echo '<div align="right"><button id="rcontent-fullscreen">'.get_string('fullscreen','rcontent').'</button></div>';

    $framesize = get_config('rcontent', 'framesize');
    echo '<iframe height="'.$framesize.'px" width="100%" src="'.$url.'" id="rcontent_iframe"> <a href="'.$url.'" target="_blank">Resource</a></iframe>';

    echo'<script type="text/javascript">
        //<![CDATA[
        function resizeEmbeddedHtml() {
            //calculate new embedded html height size
            objectheight = yui_getViewportHeight() - 130;
            //the object tag cannot be smaller than a human readable size
            if (objectheight < 200) {
               objectheight = 200;
            }
            //resize the embedded html object
            yui_setStyle("rcontent_iframe", "height", objectheight+"px");
            yui_setStyle("rcontent_iframe", "width", "100%");
        }

        function yui_getViewportHeight(){
            YUI().use("node", function (Y) {
                objectheight = Y.one(document).get("winHeight");
            });
            return objectheight;
        }

        function yui_setStyle (element, name, value){
            YUI().use("node", function (Y) {
                var myNode = Y.one(document.getElementById(element));
                myNode.setStyle(name, value);
            });
        }

        resizeEmbeddedHtml();
        YUI().use("event", function (Y) {
            Y.on("windowresize", resizeEmbeddedHtml);
        });
        //]]>
       </script>';

}

$params = array(
    'context' => $contextmodule,
    'objectid' => $rcontent->id
);
$event = \mod_rcontent\event\course_module_viewed::create($params);
$event->add_record_snapshot('rcontent', $rcontent);
$event->trigger();

echo $OUTPUT->footer();

//Add for fullscreen
echo '<script  type="text/javascript">
(function () {
       
    var rcontentIframe = document.getElementById("rcontent_iframe")
        rcontentFullscreen = document.getElementById("rcontent-fullscreen");

    if (rcontentIframe && rcontentFullscreen) {
        rcontentFullscreen.addEventListener("click", function (evt) {
            if (rcontentIframe.requestFullscreen) {
                rcontentIframe.requestFullscreen();
            }
            else if (rcontentIframe.msRequestFullscreen) {
                rcontentIframe.msRequestFullscreen();
            }
            else if (rcontentIframe.mozRequestFullScreen) {
                rcontentIframe.mozRequestFullScreen();
            }
            else if (rcontentIframe.webkitRequestFullScreen) {
                rcontentIframe.webkitRequestFullScreen();
            }
        }, false);
    }
})();
</script>';