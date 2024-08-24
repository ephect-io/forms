#!/usr/bin/env sh

cd vendor/ephect-io/forms
php use install:module "$(pwd)" $1 $2