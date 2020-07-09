<?php
// CONFIGURATIONS BEGIN for ja_utf8 and English Switching
// default language
define ('CUBE_UTILS_ML_DEFAULT_LANGNAME','english');
// list the language tags separated with comma
define('CUBE_UTILS_ML_LANGS','en,ja'); // [en]english[/en]  [ja]japanese[/ja] common

// list the language images separated with comma
define('CUBE_UTILS_ML_LANGIMAGES','modules/cubeUtils/images/GB.png,modules/cubeUtils/images/JP.png,');

// list the language names separated with comma
define('CUBE_UTILS_ML_LANGNAMES','english,ja_utf8');

// list the language caption separated with comma
define('CUBE_UTILS_ML_LANGDESCS','English,Japanese');

// tag name for language image  (default [mlimg]. don't include specialchars)
define('CUBE_UTILS_ML_IMAGETAG','mlimg');
define('CUBE_UTILS_ML_URLTAG','mlurl');

// make regular expression which disallows language tags to cross it
define('CUBE_UTILS_ML_NEVERCROSSREGEX','/\<\/table\>/');

// the life time of language selection stored in cookie
define('CUBE_UTILS_ML_COOKIELIFETIME' ,365*86400);
define ('CUBE_UTILS_ML_PARAM_NAME','ml_lang');
define ('CUBE_UTILS_ML_COOKIE_NAME','ml_langname');

// 'charset_mysql.php' in Legacy module language directory will be called.
define ('CUBE_UTILS_ML_DBSETUP_LANGUAGE','english');
//define ('CUBE_UTILS_ML_DBSETUP_LANGUAGE','ja_utf8');
define ('CUBE_UTILS_ML_OUTPUT_MULTIBYTE',0);
//define ('CUBE_UTILS_ML_OUTPUT_CHARSET','ISO-8859-1');
define ('CUBE_UTILS_ML_OUTPUT_CHARSET','utf-8');

