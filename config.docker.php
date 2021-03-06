<?php
// copy this file to config.inc.php, and set your MySQL database connection info
$config = array(
    //connection information
    "host"   => 'mysql',  //the hostname of your database server  - cannot be empty
    "db"     => 'gtd',    //the name of your database - cannot be empty
    "prefix" =>'gtdphp_', // the GTD table prefix for your installation (optional) - can be an empty string
    "user"   => 'gtd',    //username for database access  - cannot be empty
    "pass"   => 'gtd',    //database password
    //database information
    "dbtype" => 'mysql',  //database type: currently only 'mysql' is valid.  DO NOT CHANGE!
    // remove the "//" from the line below if you are going to use the EXPERIMENTAL UTF-8 support
    "charset"  => 'UTF8'
);
