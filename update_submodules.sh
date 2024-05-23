#!/bin/bash

source "update_functions.sh"

gitcheckout "html/admin/tool/odisseagtafsync" "master" "git@github.com:projectestac/moodle-admin_odisseagtafsync.git"
gitcheckout "html/blocks/configurable_reports" "MOODLE_36_STABLE" "https://github.com/jleyva/moodle-block_configurablereports.git"
gitcheckout "html/auth/saml2" "master" "https://github.com/projectestac/moodle-auth_saml2.git"
