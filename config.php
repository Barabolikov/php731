<?php
include_once "functions.php";
$servername="localhost";
$username="root";
$password="";
$dbname="myuser";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    vivodcon("Коннект невдалий");
} else {
    vivodcon ("Коннект з базою встановлений");
}
?>