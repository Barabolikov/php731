
<?php
include_once "config.php";
$id=0;
$name="Нема";
$description="Нема";
$price = 0;
$image="noimage.png";
if(isset($_GET["id"])) {$id=$_GET["id"];}
if(isset($_GET["name"])) {$name=$_GET["name"];}
if(isset($_GET["description"])) {$description=$_GET["description"];}
if(isset($_GET["price"])) {$price=$_GET["price"];}
if(isset($_GET["image"])) {$image=$_GET["image"];}

$sql = "UPDATE tovar SET name = '$name', description='$description', price='$price', image='$image' WHERE id=$id";
$result=$conn->query($sql);
$conn->close();
