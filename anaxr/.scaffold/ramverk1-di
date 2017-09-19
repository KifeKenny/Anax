#!/usr/bin/env bash
#
# Postprocess scaffold
#

#
# These are basics for ramverk1-me
#
composer install
make cimage-update

#
# These are specifics for upgrading to Anax DI
#
cp vendor/anax/di/config/di.php config/
cp vendor/anax/di/src/App/AppDI.php src/App
cp vendor/anax/di/src/App/AppDIMagic.php src/App
