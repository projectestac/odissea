    <?php
require_once('../../config.php');
require_once("{$CFG->libdir}/formslib.php");
require_once("locallib.php");
require_once($CFG->libdir.'/adminlib.php');

require_login();

$action  = optional_param('action', '', PARAM_TEXT);
$context = context_system::instance();
if (!has_capability('local/rcommon:managecredentials', $context)) {
    $canedit = has_capability('local/rcommon:editowncredentials', $context);
    $username = $USER->username;
    if ($action != 'manage' && $action != 'delete') {
        $action = 'manage';
    }
    $PAGE->set_url(new moodle_url('/local/local_rcommon/users.php'));
    $PAGE->set_context($context);
    $pagetitle = get_string('keymanager', 'local_rcommon');
    $PAGE->set_title($pagetitle);
    $PAGE->set_heading($pagetitle);
    $PAGE->navbar->add($pagetitle, null, null, navigation_node::TYPE_CUSTOM, null);
    $PAGE->set_pagelayout('incourse');
} else {
    admin_externalpage_setup('marsupial_credentials_users');
    $canedit = true;
}


echo $OUTPUT->header();

// get parameters


echo $OUTPUT->heading(get_string('keymanager', 'local_rcommon'));

// Key synchronization
switch ($action) {
    case 'manage':
        $username = isset($username) ? $username : optional_param('username', $USER->username, PARAM_TEXT);
        $user = $DB->get_record('user', array('username' => $username));
        if (!$user) {
            echo $OUTPUT->notification(get_string('usernotfound', 'local_rcommon'));
        } else {
            $id = $user->id;

            $sql = 'SELECT rcuc.*, rcb.name, rcp.name AS pname
                    FROM {rcommon_user_credentials} rcuc
                    LEFT JOIN {rcommon_books} rcb
                        ON rcb.isbn =  rcuc.isbn
                    LEFT JOIN {rcommon_publisher} rcp
                        ON rcp.id = rcb.publisherid
                    WHERE euserid = :userid ORDER BY rcp.name, rcb.name ASC ';
            $credentials = $DB->get_records_sql($sql, array('userid' => $id));
            echo '<input type="submit" onclick="document.location.href=\'add_user_credential.php?username='.$username.'\'" value="'.get_string('keyadd', 'local_rcommon').'" />';
            echo '<p>'.get_string('keysshowingfor','local_rcommon').' <b>'.htmlentities($username).'</b><br/>';
            if (!$credentials) {
                echo $OUTPUT->notification(get_string('userhasnokeys','local_rcommon'));
            } else {
                echo '<form action="credentials_bulk.php?action=unassign" id="frm" name="frm" method="post">';
                $table = new html_table();
                $table->class = 'generaltable generalbox';
                $table->head = array('', get_string('publisher', 'local_rcommon'),
                                get_string('book', 'local_rcommon'), get_string('key', 'local_rcommon'),
                                get_string('actions', 'local_rcommon'), "");
                $table->align = array('center', 'left', 'left', 'center', 'center', 'center');
                foreach ($credentials as $credential) {
                    $name = $credential->name ? $credential->name : get_string('deleted_book', 'local_rcommon');
                    $publisher = $credential->pname ? $credential->pname : get_string('deleted_book', 'local_rcommon');
                    $row = array();
                    $row[] = '<input type="checkbox" name="ids[]" value="' . $credential->id . '" onChange="allow_actions();">';
                    $row[] = $publisher;
                    $row[] = $name.' ('.$credential->isbn.')';
                    $row[] = $credential->credentials;
                    $actions = array();
                    if ($canedit) {
                        $actions[] = '<a href="edit_book_credential.php?id='.$credential->id.'">'.get_string('edit').'</a>';
                        $actions[] = '<a href="users.php?action=delete&id='.$credential->id.'&username='.$username.'">'.get_string('keymanager_unassignaction','local_rcommon').'</a>';
                    }
                    $actions[] = '<a onclick="M.local_rcommon.exec_test(' . $credential->id . ');" title="' . get_string('keymanager_test', 'local_rcommon') . '">' . get_string('keymanager_test', 'local_rcommon') . '</a>';
                    $row[] = implode(' | ', $actions);
                    $row[] = '<img id="loading_small_' . $credential->id.'" style="visibility:hidden" src="'.$OUTPUT->pix_url('i/loading_small').'" alt="" /><span id="desc_' . $credential->id . '"></span>';
                    $table->data[] = $row;
                }
                echo html_writer::table($table);
                echo '<input id="action" type="button" onclick="confirm_actions(this);" value="' . get_string('keymanager_unassignaction', 'local_rcommon') . '" disabled>
                <input type="button" onclick="select_all();" value = "' . get_string('keymanager_selectall', 'local_rcommon') . '">
                <input type="button" onclick="unselect_all();" value="' . get_string('keymanager_unselectall', 'local_rcommon') . '">
                </form>';
                $jsmodule = array(
                    'name'     => 'local_rcommon',
                    'fullpath' => '/local/rcommon/javascript.js',
                    'requires' => array('base','io','panel'),
                );
                $PAGE->requires->js_init_call('M.local_rcommon.init', array(), true, $jsmodule);
            }
        }
    break;
    case 'delete':
        $id       = required_param('id', PARAM_INT);
        $username = isset($username) ? $username : optional_param('username', $USER->username, PARAM_TEXT);
        $confirm  = optional_param('confirm', false, PARAM_BOOL);
        if (!$confirm) {
            echo '<p>'.get_string('keyconfirmdelete', 'local_rcommon').'</p>';
            echo '<br/>';
            echo '<a href="users.php?action=delete&username='.$username.'&confirm=true&id='.$id.'">'.get_string('keydelbtn', 'local_rcommon').'</a> &nbsp;&nbsp;<a href="users.php?action=manage&username='.urlencode($username).'">'.get_string('back').'</a>';
        } else {
            // Delete
            credentials::delete($id);
            echo '<script>document.location.href="users.php?action=manage&username='.$username.'";</script>';
        }
    break;
    default:
        require_capability('local/rcommon:managecredentials', context_system::instance());
        $usercount = get_users(false, '', true);
        $with_credentials = $DB->get_field_sql ('SELECT DISTINCT count(u.id) AS with_credentials FROM {user} u WHERE u.id IN (SELECT uc.euserid FROM {rcommon_user_credentials} uc GROUP BY uc.euserid)');

        $a = new StdClass();
        $a->total_users = $usercount;
        $a->with_credentials = $with_credentials;

        echo '<p>'.get_string('users_proportion', 'local_rcommon', $a).'</p>';

        $context = context_system::instance();
        $site = get_site();
        $sort         = optional_param('sort', 'firstname', PARAM_TEXT);
        $dir         = optional_param('dir', 'ASC', PARAM_TEXT);
        $page         = optional_param('page', 0, PARAM_INT);
        $perpage      = optional_param('perpage', 30, PARAM_INT);        // how many per page
        $show         = optional_param('show', 'with', PARAM_TEXT);        // how many per page
        $username     = optional_param('username', false, PARAM_TEXT);

        $columns = array('firstname' => get_string('firstname'),
                             'lastname' => get_string('lastname'),
                             'username' => get_string('username'));
        if (isset($columns[$sort])) {
            $sortname = 'u.'.$sort;
        } else {
            $sort = 'firstname';
            $sortname = 'u.'.$sort;
            $dir = 'ASC';
        }

        /*echo '<p>'.get_string('keyslookupusertext','local_rcommon').'</p>';
        $users = get_users(true, '', true);
        $options = array();
        foreach($users as $user){
            $options[$user->username] = $user->firstname.' '.$user->lastname.' ('.$user->username.')';
        }

        echo $OUTPUT->single_select('users.php?action=manage', 'username', $options, $username);*/

        $options = array('all' => get_string('showallusers'),
                        'with' => get_string('with_credentials', 'local_rcommon'),
                        'without' => get_string('without_credentials', 'local_rcommon'));
        echo get_string('filter', 'local_rcommon').': ';
        echo $OUTPUT->single_select('users.php', 'show', $options, $show, null);

        if ($show == 'with') {
            $join = 'INNER JOIN';
            $extrasql = "";
        } else if ($show == 'without') {
            $join = 'LEFT JOIN';
            $extrasql = ' AND cr.euserid is NULL';
        } else {
            $join = 'LEFT JOIN';
            $extrasql = "";
        }

        $sql = "SELECT u.id, u.firstname, u.lastname, u.username, COUNT(DISTINCT cr.id) AS books FROM {user} u
                $join {rcommon_user_credentials} cr
                ON u.id = cr.euserid
                WHERE u.confirmed = 1 AND u.deleted = 0 AND u.username != 'guest' $extrasql
                GROUP BY u.id, u.firstname, u.lastname, u.username ORDER BY $sort";

        $countsql = "SELECT count(DISTINCT u.id) FROM {user} u
                $join {rcommon_user_credentials} cr
                ON u.id = cr.euserid
                WHERE u.confirmed = 1 AND u.deleted = 0 AND u.username != 'guest' $extrasql";

        $users = $DB->get_records_sql ($sql, array(), $page * $perpage, $perpage);
        $usercount = $DB->count_records_sql ($countsql);
        flush();

        if ($users) {
            $baseurl = new moodle_url('/local/rcommon/users.php', array('perpage' => $perpage, 'show' => $show, 'sort' => $sort, 'dir' => $dir));
            echo $OUTPUT->paging_bar($usercount, $page, $perpage, $baseurl);


            foreach ($columns as $column => $columtext) {
                if ($sort != $column) {
                    $columnicon = "";
                    $columndir = "ASC";
                } else {
                    $columndir = $dir == "ASC" ? "DESC" : "ASC";
                    $columnicon = ($dir == "ASC") ? "sort_asc" : "sort_desc";
                    $columnicon = "<img class='iconsort' src=\"" . $OUTPUT->pix_url('t/' . $columnicon) . "\" alt=\"\" />";
                }
                $columns[$column] = "<a href=\"users.php?sort=$column&dir=$columndir&show=$show\">".$columtext."</a>$columnicon";
            }

            $table = new html_table();
            $table->head = array ();
            $table->head[] = $columns['firstname'].' / '.$columns['lastname'];
            $table->head[] = $columns['username'];
            $table->head[] = get_string('marsupialcredentials', 'local_rcommon');
            $table->head[] = get_string('actions');
            $table->align = array('left', 'left', 'center', 'center');

            $table->id = "users";
            foreach ($users as $user) {
                $buttons = array();
                $fullname = $user->firstname.' '.$user->lastname;

                $buttons[] = "<a href=\"users.php?action=manage&username=$user->username\">".get_string('keysadminsearchuserbtn','local_rcommon')."</a>";

                $row = array ();
                $row[] = "<a href=\"../../user/view.php?id=$user->id&amp;course=$site->id\">$fullname</a>";
                $row[] = $user->username;
                $row[] = $user->books;
                $row[] = implode(' ', $buttons);
                $table->data[] = $row;
            }

            echo html_writer::start_tag('div', array('class'=>'no-overflow'));
            echo html_writer::table($table);
            echo html_writer::end_tag('div');
            echo $OUTPUT->paging_bar($usercount, $page, $perpage, $baseurl);
        }

}

echo $OUTPUT->footer();

// Javascript
echo '<script type="text/javascript">
    function confirm_actions(el){
        if(el.value == ""){
            return false;
        }

        //count checked checks
        chk_cnt = 0;
        console.log(document.frm.elements);
        var checkboxes = document.frm.elements["ids[]"];
        for (var x in checkboxes){
            if (checkboxes[x].checked){
                chk_cnt++;
                console.log(checkboxes[x].checked);
            }
        }

        //stop execution if there is any check checked
        if (chk_cnt == 0){
            return false;
        }

        //confirm message
        var message = Array();
        message= "' . get_string('keymanager_messageunassing', 'local_rcommon') . '";

        if (!confirm(message.replace("XX", chk_cnt))){
            return false;
        }

        document.frm.submit();
    }

    function select_all(){
        for (var element in document.frm.elements){
            if (document.frm.elements[element].name == "ids[]"){
                if (!document.frm.elements[element].checked){
                    document.frm.elements[element].checked = true;
                }
            }
        }
        document.getElementById(\'action\').disabled = false;
    }

    function unselect_all(){
        for (var element in document.frm.elements){
            if (document.frm.elements[element].name == "ids[]"){
                if (document.frm.elements[element].checked){
                    document.frm.elements[element].checked = false;
                }
            }
        }
        document.getElementById(\'action\').disabled = true;
    }

    function allow_actions(){
        var active = false;
        for (var element in document.frm.elements){
            if (document.frm.elements[element].name == "ids[]"){
                if (document.frm.elements[element].checked){
                    active = true;
                    break;
                }
            }
        }

        if (active){
            document.getElementById(\'action\').disabled = false;
        } else {
            document.getElementById(\'action\').disabled = true;
        }
    }
</script>';