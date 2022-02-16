#!/usr/bin/env bash

echo "installing ckeditor plugins"
drush ckeditor_media_embed:install -y
echo "running frontend build for usdoj_uswds"
(cd docroot/themes/custom/usdoj_uswds;gulp init)