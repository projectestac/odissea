
/**
 *
 * Javascript to request ajax calls to rcontent mod
 *
 */

/**
 * Request isbn list from bd by ajax
 * @param int $levelid ID of the level
 */
function rcontent_load_isbn_list(levelid){
    if (levelid!=undefined){
        var callback = {
            success: function(o) {/*success handler code*/
                fill_select('isbn',o);
            },
            failure: function(o) {/*failure handler code*/
                rcontent_yui_ajax_process_error('ajaxresponseerror');
            }
        };

        //load data from bd by ajax
        var url=ajax_config.wwwroot +  '/mod/rcontent/loadselects_ajax.php?action=loadisbn&bookid='+levelid+'&sesskey=' + ajax_config.sesskey;
        rcontent_yui_async_request(url, callback);
    }else{
        rcontent_yui_ajax_process_error('parametererror');
    }
}

/**
 * Load from bd units list for a single isbn
 *
 * @param int bookid ID of the book
 */
function rcontent_load_unit_list(bookid){
    if (bookid!=undefined){
        var callback = {
            success: function(o) {/*success handler code*/
                fill_select('unit',o);
            },
            failure: function(o) {/*failure handler code*/
                rcontent_yui_ajax_process_error('ajaxresponseerror');
            }
            };
        //load data from bd by ajax
        var url=ajax_config.wwwroot +  '/mod/rcontent/loadselects_ajax.php?action=loadunit&bookid='+bookid+'&sesskey=' + ajax_config.sesskey;
        rcontent_yui_async_request(url, callback);
    }else{
        rcontent_yui_ajax_process_error('parametererror');
    }
}

/**
 * Load from bd activities list for a single isbn and a sigle unit
 *
 * @param int bookid ID of the book
 * @param int unitid ID of the unit
 */
function rcontent_load_activity_list(bookid, unitid){
    if (bookid!=undefined&&unitid!=undefined){
        var callback = {
            success: function(o) {/*success handler code*/
                fill_select('activity',o);
            },
            failure: function(o) {/*failure handler code*/
                rcontent_yui_ajax_process_error('ajaxresponseerror');
            }
        };
        //load data from bd by ajax
        var url=ajax_config.wwwroot +  '/mod/rcontent/loadselects_ajax.php?action=loadactivity&bookid='+bookid+'&unitid='+unitid+'&sesskey=' + ajax_config.sesskey;
        rcontent_yui_async_request(url, callback);
    }else{
        rcontent_yui_ajax_process_error('parametererror');
    }
}

/**
 * Shows the loaded list
 *
 * @param string id name of the select list
 * @param json o data loades from bd
 */
function fill_select(id,o){
    var response=[];
    var select = document.getElementById('id_'+id);
  //first remove other select options
    if (id=='isbn'){
        select_unit = document.getElementById('id_unit');
        select_unit.innerHTML = '';
        var option = document.createElement('option');
        option.appendChild(document.createTextNode(ajax_config.get_string_unit));
        option.setAttribute('value', '0');
        select_unit.appendChild(option);
    }
    if (id=='unit'||id=='isbn'){
        select_activity = document.getElementById('id_activity');
        select_activity.innerHTML = '';
        var option = document.createElement('option');
        option.appendChild(document.createTextNode(ajax_config.get_string_activity));
        option.setAttribute('value', '0');
        select_activity.appendChild(option);
    }

    select.innerHTML = '';

    //second show new select options
    if(o.responseText!='[""]'){
        // Parse the data returned from the server
        rcontent_yui_json_parse(o.responseText, select);
    }
}

function rcontent_yui_async_request(url){
    rcontent_yui_async_request(url, null);
}

function rcontent_yui_async_request(url, callback){
    // Moodle 2.4 or higuer
    YUI().use('yui2-json', 'yui2-connection', 'yui2-event', function(Y) {
        Y.YUI2.util.Connect.asyncRequest('GET', url, callback)
    });
}

function rcontent_yui_ajax_process_error (typerror){
    alert(eval('ajax_config.'+typerror));
    //save error in bd by ajax
    var url=ajax_config.wwwroot +  '/mod/rcontent/loadselects_ajax.php?action='+typerror+'&bookid='+bookid+'&sesskey=' + ajax_config.sesskey;
    if(ajax_config.cmid!=undefined) url+='&cmid='+ajax_config.cmid;
    rcontent_yui_async_request(url);
}


function rcontent_yui_json_parse(responseText, select){
    if(typeof YAHOO != 'undefined') {
        // Up to Moodle 2.3
        try{
            response = YAHOO.lang.JSON.parse(responseText);
        }
        catch(e){
            rcontent_yui_ajax_process_error('jsonerror');
        }
        rcontent_create_select_with_response(response, select)
    } else{
        // Moodle 2.4 or higuer
        YUI().use('json-parse', 'json-stringify', function (Y) {
            try{
                response = Y.JSON.parse(responseText);
            }
            catch(e){
                rcontent_yui_ajax_process_error('jsonerror');
            }
            rcontent_create_select_with_response(response, select);
        });
    }
}

function rcontent_create_select_with_response(response, select) {
    var currentgroup = '';
    var optgroup;
    // The optgroup data was parsed into an array of objects
    for (var i = 0, len = response.length; i < len; ++i) {
        //second fill new options
        var r = response[i];
        var option = document.createElement('option');
        option.appendChild(document.createTextNode(r.name));
        option.setAttribute('value', r.id);
        if (r.group != undefined) {
            if (currentgroup != r.group) {
                optgroup = document.createElement('optgroup');
                optgroup.setAttribute('label', r.group);
                select.appendChild(optgroup);
                currentgroup = r.group;
            }
            optgroup.appendChild(option);
        } else {
            select.appendChild(option);
        }
    }
}
