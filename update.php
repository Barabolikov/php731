
<?php
include_once "config.php";
$id=0;
$name="Нема";
$description="Нема";
$price = 0;
$image="noimage.png";
if(isset($_POST["id"])) {$id=$_POST["id"];}
if(isset($_POST["name"])) {$name=$_POST["name"];}
if(isset($_POST["description"])) {$description=$_POST["description"];}
if(isset($_POST["price"])) {$price=$_POST["price"];}
if(isset($_POST["image"])) {$image=$_POST["image"];}

$uploadDir = 'images/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $fileName = basename($file['name']);
    $targetPath = $uploadDir . $fileName;
}
// Перевірямо розмір (не більше 2MB)
if ($file['size'] > 2 * 1024 * 1024) {
    die('Файл за великий (макс. 2MB)');
}

// Перевіряємо тип файлу
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
if (!in_array($file['type'], $allowedTypes)) {
    die('Помилка: можна завантажувати  тільки JPG, PNG, GIF');
}

if (move_uploaded_file($file['tmp_name'], $targetPath)) {
    echo "Файл збережено";} else {echo "Файл збережено";}



$sql = "UPDATE tovar SET name = '$name', description='$description', price='$price', image='$fileName' WHERE id=$id";
$result=$conn->query($sql);
$conn->close();

header("Location: http://php731.local");
exit;