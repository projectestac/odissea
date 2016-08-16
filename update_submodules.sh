#!/bin/bash

source "update_functions.sh"

#El tercer paràmetre només es posa si el repositori és nostre per poder-hi escriure
gitcheckout "html/moodle2/admin/tool/odisseagtafsync" "master" "git@github.com:projectestac/moodle-admin_odisseagtafsync.git"
gitcheckout "html/moodle2/auth/odissea" "master" "git@github.com:projectestac/moodle-auth_odissea.git"
gitcheckout "html/moodle2/blocks/configurable_reports" "MOODLE_30_STABLE" "https://github.com/projectestac/moodle-block_configurablereports.git"
gitcheckout "html/moodle2/testlib" "master" "git@github.com:projectestac/testlib_PHP.git"

