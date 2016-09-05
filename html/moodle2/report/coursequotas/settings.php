<?php

$ADMIN->add('reports', new admin_externalpage('coursequotas', get_string('coursequotas', 'report_coursequotas'), "$CFG->wwwroot/report/coursequotas/index.php",'report/coursequotas:view'));
$ADMIN->add('reports', new admin_externalpage('filemanager', get_string('filemanager', 'report_coursequotas'), "$CFG->wwwroot/report/coursequotas/filemanager.php",'report/coursequotas:manage'));

// no report settings
$settings = null;