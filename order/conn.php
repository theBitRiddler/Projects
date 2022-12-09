<?php

$conn = new mysqli('localhost', 'root', '', 'my_order');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>