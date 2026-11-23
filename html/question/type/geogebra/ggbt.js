M.form_ggbt = {};
var lang;
var Yggb;
var ggbf; // The section in the Moodleform which is used as drop target.
var usefile; // The checkbox indicating we are using a file.
var parameters;
var applet1;
var enable_label_drags;
var enable_right_click;
var enable_shift_drag_zoom;
var show_algebra_input;
var show_menu_bar;
var show_reset_icon;
var show_tool_bar;
M.form_ggbt.init = function (Y, options) {
    options.formcallback = M.form_ggbt.callback;
    lang = options.lang;
    Yggb = YUI().use("datatype-xml");
    if (!M.core_filepicker.instances[options.client_id]) {
        //Allow only GeoGebraTube repository ($args->type isn't working?)
        for (var r in options.repositories) {
            if (options.repositories[r].type !== 'geogebratube') {
                delete options.repositories[r];
            }
        }
        M.core_filepicker.init(Y, options);
    }

    Y.on('click', function (e, client_id) {
        e.preventDefault();
        M.core_filepicker.instances[client_id].show();
    }, '#id_filepicker-button-' + options.client_id, null, options.client_id);

    Y.on('click', function (e) {
        e.preventDefault();
        var id = Y.one('#id_ggbturl').get('value').split("/").pop();
        if (id.indexOf("m") == 0) {
            if (isNumber(id.substr(1)) || (!isNumber(id.substr(1)) && id.length > 8)) {
                id = id.substr(1);
            }
        }
        M.form_ggbt.injectapplet(id);
    }, '#id_loadapplet');

    Y.on('click', function (e) {
        e.preventDefault();
        M.form_ggbt.getrandvars();
    }, 'input[name="getvars"]');

    if (parameters) {
        applet1.inject("applet_container1", "preferHTML5");
    }

    ggbf = document.getElementById('id_ggbtheader');
    usefile = document.getElementById("id_usefile");

    if (ggbf === null) { // In this case we are editing a submission.
        ggbf = document.getElementById('id_submissiontypes');
        ggbcheckb = document.getElementById('id_assignsubmission_geogebra_enabled');
        if (!(ggbcheckb === null)) {
            ggbcheckb.addEventListener('change', handleggbdisable, false);
        }
    }

    if (!(ggbf === null)) {
        ggbf.addEventListener('dragenter', handleDragEnter, false);
        ggbf.addEventListener('dragover', handleDragOver, false);
        ggbf.addEventListener('dragleave', handleDragEndLeave, false);
        ggbf.addEventListener('dragend', handleDragEndLeave, false);
        ggbf.addEventListener('drop', handleDrop, false);
        usefile.addEventListener('change', handleusefile, false);
    }

    if (usefile.checked) {
        document.getElementById('applet_options').style.display = "block";
    } else {
        document.getElementById('applet_options').style.display = "none";
    }
    initoptions();
};

M.form_ggbt.callback = function (params) {
    var elementname = M.core_filepicker.instances[params['client_id']].options.elementname;
    Y.one('#id_' + elementname).set('value', params.url);
    // inject applet to div layer
    var id = (params.file).split(".")[0];
    if (id.indexOf("m") == 0) {
        if (isNumber(id.substr(1)) || (!isNumber(id.substr(1)) && id.length > 8)) {
            id = id.substr(1);
        }
    }
    M.form_ggbt.injectapplet(id);
};

M.form_ggbt.injectapplet = function (id) {
    parameters = {"material_id": id};
    parameters.language = lang;
    parameters.moodle = "editingQuestionOrSubmission";
    // Since we only support HTML5 this should work for js-code in the applet to get executed (ggboninit).
    parameters.useBrowserForJS = false;

    document.getElementById('applet_container1').style.display = "block";

    applet1 = new GGBApplet(parameters, true);
    applet1.setHTML5Codebase("https://cdn.geogebra.org/apps/5.0.541.0/web3d");

    applet1.inject("applet_container1", "preferHTML5");

};

M.form_ggbt.getrandvars = function () {
    var applet = document.ggbApplet;
    if (!(typeof applet === 'undefined')) {
        var objNumber = applet.getObjectNumber();
        var randomizedvar = document.getElementById('id_randomizedvar');
        var stringforrandomizedvars = "";
        var i = 0;
        for (var j = 0; j < objNumber; j++) {
            var strName = applet.getObjectName(j);
            if (applet.getObjectType(strName) == "numeric" && applet.isIndependent(strName)) {
                stringforrandomizedvars += strName + ",";
            } else {
                var answer = Y.one('#id_answer_' + i);
                if (applet.getObjectType(strName) == "boolean") {
                    if (!(answer === null)) {
                        if (!answer.get('value')) {
                            answer.set('value', strName);
                        }
                        M.form_ggbt.update_feedback(answer);
                        i++;
                    }
                }
            }
            randomizedvar.value = stringforrandomizedvars;
        }
    }
};

M.form_ggbt.update_feedback = function (answernode) {
    var id = answernode.get('id').split("_").pop();
    var varname = answernode.get('value');
    var feedback = Y.one('input[name="feedback[' + id + ']"]');
    var feedbackfromfile = Y.one('#id_feedbackfromfile_' + id);
    var doc = Yggb.XML.parse(ggbApplet.getXML(varname));
    var elem = doc.getElementsByTagName('caption');
    if (elem.length == 1) {
        var fbstring = elem[0].getAttribute('val');
        feedback.set('value', fbstring);
    } else if (elem.length > 1) {
        feedback.set('value', '');
        fbstring = '';
    } else {
        feedback.set('value', '');
        fbstring = 'Caption not set or variable name wrong.'; //this is rather an error condition but should be checked by the server
    }
    feedbackfromfile.set('value', fbstring);
};

// Function ggbAppletOnLoad gets called as soon as the applet is loaded (as ggbOnInit).
//noinspection JSUnusedGlobalSymbols
function ggbAppletOnLoad(id) {
    Y.one('input[name="ggbparameters"]').set('value', JSON.stringify(parameters));
    Y.one('input[name="ggbviews"]').set('value', JSON.stringify(applet1.getViews()));
    Y.one('input[name="ggbcodebaseversion"]').set('value', applet1.getHTML5CodebaseVersion());

    if (typeof(ggbcheckb) == "undefined") {
        var applet = document.ggbApplet;
        Y.one('input[name="ggbxml"]').set('value', applet.getXML());
        Y.one('input[name="ggbexercise"]').set('value', JSON.stringify(applet.getExerciseResult()));

        var randomizedvar = document.getElementById('id_randomizedvar');
        if (!randomizedvar.value) {
            M.form_ggbt.getrandvars();
        }

        var i = 0;
        var answer = Y.one('#id_answer_' + i);
        while (!(answer === null)) {
            if (answer.get('value')) {
                answer.on(['change', 'focus'], function (e) {
                    e.preventDefault();
                    M.form_ggbt.update_feedback(e.target)
                });
                M.form_ggbt.update_feedback(answer);
            }
            answer = Y.one('#id_answer_' + ++i);
        }
        document.querySelector('article').onkeypress = checkEnter;
    }


    if (usefile.checked) {
        document.getElementById('applet_container1').style.display = "block";
        document.getElementById('applet_options').style.display = "block";
    }
}


function checkEnter(e) {
    e = e || event;
    var txtArea = /textarea/i.test((e.target || e.srcElement).tagName);
    return txtArea || (e.keyCode || e.which || e.charCode || 0) !== 13;
}

function initoptions() {
    //TODO: make 3 Lines!
    enable_right_click = document.getElementById('enableRightClick');
    enable_label_drags = document.getElementById('enableLabelDrags');
    show_reset_icon = document.getElementById('showResetIcon');
    enable_shift_drag_zoom = document.getElementById('enableShiftDragZoom');
    show_algebra_input = document.getElementById('showAlgebraInput');
    show_menu_bar = document.getElementById('showMenuBar');
    show_tool_bar = document.getElementById('showToolBar');

    if (!(typeof parameters === 'undefined')) {
        enable_right_click.checked = parameters.enableRightClick;
        enable_label_drags.checked = parameters.enableLabelDrags;
        show_reset_icon.checked = parameters.showResetIcon;
        enable_shift_drag_zoom.checked = parameters.enableShiftDragZoom;
        show_algebra_input.checked = parameters.showAlgebraInput;
        show_menu_bar.checked = parameters.showMenuBar;
        show_tool_bar.checked = parameters.showToolBar;
    }

    enable_right_click.addEventListener('change', handlesettingschanged, false);
    enable_label_drags.addEventListener('change', handlesettingschanged, false);
    show_reset_icon.addEventListener('change', handlesettingschanged, false);
    enable_shift_drag_zoom.addEventListener('change', handlesettingschanged, false);
    show_algebra_input.addEventListener('change', handlesettingschanged, false);
    show_menu_bar.addEventListener('change', handlesettingschanged, false);
    show_tool_bar.addEventListener('change', handlesettingschanged, false);
}

function handlesettingschanged(evt) {
    parameters[evt.target.id] = (evt.target.checked);
    Y.one('input[name="ggbparameters"]').set('value', JSON.stringify(parameters));
    if (evt.target.id == "showToolBar" || evt.target.id == "showMenuBar" || evt.target.id == "showAlgebraInput") {
        applet1 = new GGBApplet(parameters, true);
        applet1.setHTML5Codebase("https://cdn.geogebra.org/apps/5.0.541.0/web3d");
        applet1.inject("applet_container1", "preferHTML5");
    } else {
        ggbApplet[evt.target.id](evt.target.checked);
    }
}

function handleusefile() {
    if (!usefile.checked) {
        document.getElementById('applet_container1').style.display = "none";
        document.getElementById('applet_options').style.display = "none";
    } else {
        document.getElementById('id_ggbturl').value = "";
        document.getElementById('applet_container1').style.display = "none";
    }
}

function handleggbdisable() {
    if (!ggbcheckb.checked) {
        document.getElementById('applet_container1').style.display = "none";
        document.getElementById('applet_options').style.display = "none";
        if (usefile.checked) {
            usefile.click();
        }
    } else {
        document.getElementById('applet_container1').style.display = "block";
    }
}

function handleDragEnter() {
    if (typeof(ggbcheckb) == "undefined" || ggbcheckb.checked) {
        ggbf.classList.add('hover');
        document.getElementById('applet_container1').style.visibility = "hidden";
    }
}

function handleDragOver(e) {
    if (typeof(ggbcheckb) == "undefined" || ggbcheckb.checked) {
        if (e.preventDefault) {
            e.preventDefault();
        }
        ggbf.classList.add('hover');
        document.getElementById('applet_container1').style.visibility = "hidden";
        return false;
    }
}

function handleDragEndLeave() {
    if (typeof(ggbcheckb) == "undefined" || ggbcheckb.checked) {
        ggbf.classList.remove('hover');
        document.getElementById('applet_container1').style.removeProperty("visibility");
    }
}

function handleDrop(e) {
    if (typeof(ggbcheckb) == "undefined" || ggbcheckb.checked) {
        e.preventDefault();
        e.stopPropagation();
        file = e.dataTransfer.files[0];
        ggbf.classList.remove('hover');
        document.getElementById('applet_container1').style.removeProperty("visibility");
        document.getElementById('applet_container1').style.display = "block";
        document.getElementById('applet_options').style.display = "block";

        document.getElementById('id_ggbturl').value = "";
        usefile = document.getElementById("id_usefile");
        if (!usefile.checked) {
            usefile.click();
        }
        var reader = new FileReader();
        reader.onload = function (event) {
            var base64 = event.target.result.replace("data:application/vnd.geogebra.file;base64,", "");
            parameters = {"ggbBase64": base64};
            parameters.language = lang;
//            parameters.useBrowserForJS = true;
            parameters.enableRightClick = enable_right_click.checked;
            parameters.enableLabelDrags = enable_label_drags.checked;
            parameters.showResetIcon = show_reset_icon.checked;
            parameters.enableShiftDragZoom = enable_shift_drag_zoom.checked;
            parameters.showAlgebraInput = show_algebra_input.checked;
            parameters.showMenuBar = show_menu_bar.checked;
            parameters.showToolBar = show_tool_bar.checked;
            parameters.moodle = "editingQuestionOrSubmission";
            applet1 = new GGBApplet(parameters, true);
            applet1.setHTML5Codebase("https://cdn.geogebra.org/apps/5.0.541.0/web3d");
            applet1.inject("applet_container1", "preferHTML5");
        };

        reader.readAsDataURL(file);
    }
}

function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
