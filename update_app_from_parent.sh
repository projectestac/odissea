#!/bin/bash

#Exemple invocació: ./prepare_package.sh

version=14.11.27

git clone https://github.com/projectestac/agora_moodle2.git moodle_new

pushd moodle_new
git submodule update --recursive --init
echo 'Submòduls actualitzats'
read -p "Continuar? <prem una tecla> " -n 1 -r
echo    # (optional) move to a new line
find . -name '\.git*' -exec rm -rf {} \;
popd



mv html/moodle2 html/moodle2_old
mv moodle_new html/moodle2

cp html/moodle2_old/settings.php html/moodle2/settings.php
cp html/moodle2_old/.htaccess html/moodle2/.htaccess
cp html/moodle2_old/config-works-dist.php html/moodle2/config-works-dist.php
cp html/moodle2_old/works.php html/moodle2/works.php
cp html/moodle2_old/config-restricted-dist.php html/moodle2/config-restricted-dist.php
cp html/moodle2_old/theme/xtec2/pix/favicon.ico html/moodle2/theme/xtec2/pix/favicon.ico
cp html/moodle2_old/theme/xtec2/pix/logo_main.png html/moodle2/theme/xtec2/pix/logo_main.png

cp html/moodle2_old/config.php html/moodle2/config.php
cp html/moodle2_old/monitor.php html/moodle2/monitor.php
cp html/moodle2_old/opcache.php html/moodle2/opcache.php
cp html/moodle2_old/testapp.php html/moodle2/testapp.php
cp html/moodle2_old/CHANGES.txt html/moodle2/CHANGES.txt

cp -Rp html/moodle2_old/testlib html/moodle2/testlib
cp -Rp html/moodle2_old/auth/odissea html/moodle2/auth/odissea
cp -Rp html/moodle2_old/blocks/configurable_reports html/moodle2/blocks/configurable_reports
cp -Rp html/moodle2_old/admin/tool/odisseagtafsync html/moodle2/admin/tool/odisseagtafsync

rm html/moodle2/index_iw.php
rm html/moodle2/site-config.php
rm html/moodle2/config-mysql.php
rm html/moodle2/config-oracle.php
rm html/moodle2/theme/xtec2/pix/logo_main.gif

rm -Rf html/moodle2_old
