#!/bin/bash

if [ "$#" -ne 1 ] ; then
    echo "Script to compress the release"
    echo "Usage: prepare_release.sh <version>"
    echo "Usage example: ./prepare_release_for_github.sh 14.09.30"
    exit 0
fi

version=$1
app=odissea
filename=$app"_v"$version

cd /tmp
git clone https://github.com/projectestac/$app.git
cd $app
git submodule update --recursive --init

find . -name '\.git*' -exec rm -rf {} \;

echo "Creating file $filename.tar.gz"
tar cfzp ../$filename.tar.gz *

echo "Creating file $filename.zip"
zip -r -q ../$filename.zip .
echo "Done"
