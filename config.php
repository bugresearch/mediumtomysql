<?php
/* Connection Variables */
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";

/* Connection Commands */
try {
    $db = new PDO("mysql:host=".$db_host.";dbname=".$db_name.";charset=utf8", $db_user, $db_pass);
} catch ( PDOException $e ){
    print $e->getMessage();
}

/* Other */
error_reporting(0);
?>
