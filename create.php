
<?php
include "config.php";

$name="Нема";
$description="Нема";
$price = 0;
$image="noimage.png";
if(isset($_GET["name"])) {$name=$_GET["name"];}
if(isset($_GET["description"])) {$description=$_GET["description"];}
if(isset($_GET["price"])) {$price=$_GET["price"];}
if(isset($_GET["image"])) {$image=$_GET["image"];}

$sql = "INSERT INTO tovar (name, description, price, image, feature) VALUES ('$name', '$description', $price, '$image',NULL)";
$result=$conn->query($sql);
$conn->close();
