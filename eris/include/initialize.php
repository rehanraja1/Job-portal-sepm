<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Correct SITE_ROOT to reflect actual path: C:/xampp/htdocs/eris
defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'eris');

// Path to the 'include' folder
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'include');

// Load the database configuration and class files
require_once(LIB_PATH . DS . "config.php");
require_once(LIB_PATH . DS . "function.php");
require_once(LIB_PATH . DS . "session.php");
require_once(LIB_PATH . DS . "accounts.php");
require_once(LIB_PATH . DS . "autonumbers.php");
require_once(LIB_PATH . DS . "companies.php");
require_once(LIB_PATH . DS . "job.php");
require_once(LIB_PATH . DS . "employees.php");
require_once(LIB_PATH . DS . "categories.php");
require_once(LIB_PATH . DS . "applicant.php");
require_once(LIB_PATH . DS . "jobregistration.php");
require_once(LIB_PATH . DS . "database.php");
?>
