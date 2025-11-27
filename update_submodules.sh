#!/bin/bash

source "update_functions.sh"

gitcheckout "html/admin/tool/odisseagtafsync" "master" "git@github.com:projectestac/moodle-admin_odisseagtafsync.git"
gitcheckout "html/auth/saml2" "master" "https://github.com/projectestac/moodle-auth_saml2.git"
