<?php
define("HOST", "127.0.0.1");
define("USER", "root");
define("PASS", "");
define("DB_NAME", "notes_app");
$uploadDir = 'uploads/'; // Folder for file uploads
function create_connection()
{
    $conn = new mysqli(HOST, USER, PASS, DB_NAME);
    if ($conn->connect_error) {
        die('Cannot connect to the server: ' . $conn->connect_error);
    }
    return $conn;
}
?>