<?php
// SESSION INITIALIZED ALWAYS
session_start();



// CUT DOWN MINOR ERROR REPORTING
error_reporting(E_ERROR);

// INCLUDE AND INIT PROPEL ORM LIBS, ADD ORM CLASS FILES TO INCLUDE PATH
require_once 'propel/Propel.php';
Propel::init("/Library/WebServer/ORM/build/conf/wsot-conf.php");

require_once('getinputs.php');
require_once('sanitize.php');
require_once('h2o/h2o.php');

// SALT STRING FOR PASSWORDS - MAKES 'EM HARDER TO BREAK
$salt = "0720a758209ba32d8263609d56d404fab5e5de8b";

// GET ACTIVE SITE PREFERENCES
$_PREFS = RuleSetQuery::create()->findOneByActive(true);
?>