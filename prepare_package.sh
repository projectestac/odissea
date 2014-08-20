#!/bin/bash

#Exemple invocació: ./prepare_package.sh ~/git/agora/html/moodle2

version=14.08.20

if [ $# == 0 ]; then
	echo "Script per actualitzar els espais Moodle d'Agora"
	echo "Forma d'ús: ./prepare_package.sh [path_origen]"
	echo "Exemple invocació: ./prepare_package.sh ~/git/agora/html/moodle2"
	exit
fi

mv html/moodle2 html/moodle2_old
cp -Rp $1 html/moodle2

cp html/moodle2_old/config.php html/moodle2/config.php
cp html/moodle2_old/.htaccess html/moodle2/.htaccess
cp html/moodle2_old/config-restricted.php html/moodle2/config-restricted.php
cp html/moodle2_old/theme/xtec2/pix/favicon.ico html/moodle2/theme/xtec2/pix/favicon.ico
cp html/moodle2_old/theme/xtec2/pix/logo_main.png html/moodle2/theme/xtec2/pix/logo_main.png

cp html/moodle2_old/apc.php html/moodle2/apc.php
cp html/moodle2_old/CHANGES.txt html/moodle2/CHANGES.txt

cp -Rp html/moodle2_old/auth/odissea html/moodle2/auth/odissea
cp -Rp html/moodle2_old/admin/tool/odisseagtafsync html/moodle2/admin/tool/odisseagtafsync

rm html/moodle2/index_iw.php
rm html/moodle2/settings.php
rm html/moodle2/site-config.php
rm html/moodle2/config-multi.php
rm html/moodle2/config_mysql.php
rm html/moodle2/config_oracle.php
rm html/moodle2/theme/xtec2/pix/logo_main.gif

rm -Rf html/moodle2_old
