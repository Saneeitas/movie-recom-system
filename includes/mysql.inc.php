<?php

// defining constants to be used in accessing the database
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'movies_db');

// connecting to the database
$dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbconn) { die("Connection failed: " . $conn->connect_error); }

// Establish character set
mysqli_set_charset($dbconn, 'utf8');

function escape_data($data, $dbconn) {
        if (get_magic_qoutes_gpc()) 
            $data = stripslashes($data);
        return mysqli_real_escape_string($dbconn, trim($data));
    }   
