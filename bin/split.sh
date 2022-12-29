#!/usr/bin/env bash

set -e
set -x

CURRENT_BRANCH="main"

function split()
{
    SHA1=`./bin/splitsh-lite --prefix=$1`
    git push $2 "$SHA1:refs/heads/$CURRENT_BRANCH" -f
}

function remote()
{
    git remote add $1 $2 || true
}

git pull origin $CURRENT_BRANCH

remote foo git@github.com:chronhub/foo.git
remote bar git@github.com:chronhub/bar.git

split 'src/Framework/Foo' foo
split 'src/Framework/Bar' bar