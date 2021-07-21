#!/bin/bash

# Call example: ./update_app_from_parent.sh

version=20.11.03

pushd /tmp

git clone https://github.com/projectestac/agora_moodle2.git
git clone https://github.com/projectestac/odissea.git

pushd agora_moodle2
git submodule update --init --recursive
find . -name '\.git*' -exec rm -rf {} \; 2>/dev/null
popd

data=`date +"%Y%m%d"`

pushd odissea
git checkout -b UPSTREAM origin/UPSTREAM
rm -rf html/
mv ../agora_moodle2 html
git add -A
git commit -m 'Updated from agora_moodle2 repository ('$data')'
git push origin UPSTREAM
popd

popd

printf "\nRemaining work: rebase master using UPSTREAM. Conflicts may arise.\n"
