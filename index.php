<?php
/**
 *
 * FileGator
 *
 * Copyright 2011-2013 by interactive32. All right reserved.
 * Designed & developed by alcalbg. Logo design by batabarata.
 * This software uses open-source plugins blueimp, foundation, lightbox and jquery.
 * For more info please visit gator's web page www.file-gator.com
 *
 *
 */

define('VERSION', 'v4.2');

error_reporting(NULL);

// start session & handle logout
session_start();
if(isset($_GET["logout"]) && $_GET["logout"] == 1){
	session_destroy();
	session_start();
}

require_once "configuration.php";

if(gatorconf::get('use_database')){
	require_once "./include/common/mysqli.php";
}

require_once "./include/common/phpass.php";
require_once "./include/file-gator.php";

$app = new gator();
$app->init();

