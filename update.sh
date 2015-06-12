#!/bin/bash

function gitcheckout {
    dir=$1
    branch=$2
    remote=$3

    if [ ! -d "$dir" ]; then
        update_exec "git submodule update --init $dir"

        if [ ! -d "$dir" ]; then
            echo 'ERROR: el directori $dir no existeix'
            exit -1
        fi
    fi

    echo "Entrant $dir BRANCH $branch REPO $remote ..."
    pushd $dir > /dev/null
    if [ ! -z "$remote" ]; then
        update_exec "git remote set-url origin $remote"
        update_exec "git fetch"
    fi

    update_exec "git checkout $branch"

    git_pull $branch

    popd > /dev/null
    echo 'OK'
}

function git_pull {
    branch=$1
    if [[ $action == 'stash' ]]
    then
        update_exec "git stash"
    fi

    if [[ $action == 'reset' ]]
    then
        update_exec "git reset --hard origin/$branch"
    fi

    update_exec "git pull"

    if [[ $action == 'stash' ]]
    then
        if [[ -n $(git stash list) ]]; then
            echo ' >>>> Aplicat Stash'
            update_exec "git stash pop"
        fi
    fi
}

function update_exec {
    if ! $1 > /dev/null
    then
        echo >&2 "ERROR: on $1"
        exit -2
    fi
}

############## SCRIPT START
tempaction=$1
if [[ $tempaction == 'reset' ]]
then
    echo 'Demanat RESET'
    action=$tempaction
elif [[ $tempaction == 'stash' ]]
then
    echo 'Demanat STASH'
    action=$tempaction
else
    action=""
fi

echo 'Pull inicial'
git_pull master

if [[ $action != 'reset' ]]
then
    echo 'Inicialitzant submòduls...'
    update_exec "git submodule update --recursive --init"

    echo 'Sincronitzant submòduls...'
    update_exec "git submodule sync"
fi

#El tercer paràmetre només es posa si el repositori és nostre per poder-hi escriure
gitcheckout "html/moodle2/admin/tool/odisseagtafsync" "master" "git@github.com:projectestac/moodle-admin_odisseagtafsync.git"
gitcheckout "html/moodle2/auth/odissea" "master" "git@github.com:projectestac/moodle-auth_odissea.git"
gitcheckout "html/moodle2/blocks/configurable_reports" "CR_23_STABLE" "https://github.com/jleyva/moodle-block_configurablereports.git"
gitcheckout "html/moodle2/testlib" "master" "git@github.com:projectestac/testlib_PHP.git"

echo "Garbage collecting..."
git gc

echo "That's all folks!"
