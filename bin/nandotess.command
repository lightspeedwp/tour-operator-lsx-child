#!/bin/bash

echo "* lsx-starter-child-theme *";
cd ~/Sites-LightSpeed/@git/lsx-starter-child-theme;

gulp compile-css;
gulp compile-js;
gulp wordpress-lang;

rm -Rf ~/Sites-LightSpeed/@mamp/lsx.mamp/wp-content/themes/lsx-starter-child-theme;
rsync -a \
	--exclude='.git' \
	--exclude='bin' \
	--exclude='node_modules' \
	--exclude='.DS_Store' \
	--exclude='lsx-starter-child-theme.sublime-workspace' \
	--exclude='lsx-starter-child-theme.sublime-project' \
	--exclude='custom.scss' \
	--exclude='gulpfile.js' \
	--exclude='package.json' \
	--exclude='README.md' \
	--exclude='.gitignore' \
	--exclude='LICENSE' \
	~/Sites-LightSpeed/@git/lsx-starter-child-theme ~/Sites-LightSpeed/@mamp/lsx.mamp/wp-content/themes;

exit;
