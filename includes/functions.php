<?php
/* Filename : functions.php
 * date created : April 6, 2018 2351hrs
 * contains all the controllers and core functionality
 */

ini_set("display_errors", "1"); // Should be disabled in production, disabled in remote server
ob_start();
session_start();
//Some definations requried for the theme 
define('LTE', 'modules/adminlte/');
/**
 * Database details
 */
$servername = "localhost";
$username = "pbehrein_main";
$password = "Pavitra14";
$dbname = "pbehrein_farewell";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/**
 * To display errors
 */
require_once 'controllers/errors.php';

/**
 * Handle all the miscellaneous functions
 */
require_once 'controllers/misc.php';
//Force SSL if production server
if(!isLocalhost()) {
    requireSSL();
}
/**
 * handle all the outgoing emails and email templates.
 */
require_once 'controllers/email.php';
/**
 * login/logout functions
 */
require_once 'controllers/login.php';

/**
 * generate gravatar image urls
 */
require_once 'controllers/gravatar.php';

/**
 * handle user registrations
 */
require_once 'controllers/register.php';

/**
 * handle all the functions required by write.php
 */
require_once 'controllers/write.php';
/**
 * handle feed and likes
 */
require_once 'controllers/feed.php';