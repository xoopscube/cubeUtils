<?php
/**
 * @package    CubeUtils
 * @version    2.3
 * @author     Gigamaster, 2020 XCL PHP7
 * @author     NobuNobu, 2008-01-31  <nobunobu@nobunobu.com>
 * @copyright  Copyright 2006-2021 NobuNobu - XOOPS Cube Project
 * @license    Legacy https://github.com/xoopscube/xcl/blob/master/GPL_V2.txt
 * @license    Cube : https://github.com/xoopscube/xcl/blob/master/BSD_license.txt
 * 
 * CONFIGURATIONS BEGIN for Switching english, fr_utf8 and ja_utf8
 * default language images root html/images/
 */

define ('CUBE_UTILS_ML_DEFAULT_LANGNAME','english');
// list the language tags separated with comma
define('CUBE_UTILS_ML_LANGS','en,fr,ja'); // [en]english[/en] [fr]english[/fr]  [ja]japanese[/ja] common

// list the language images separated with comma
define('CUBE_UTILS_ML_LANGIMAGES','/images/GB.png,/images/FR.png,/images/JP.png,');

// list the language names separated with comma
define('CUBE_UTILS_ML_LANGNAMES','english,fr_utf8,ja_utf8');

// list the language caption separated with comma
define('CUBE_UTILS_ML_LANGDESCS','English,French,Japanese,');

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

