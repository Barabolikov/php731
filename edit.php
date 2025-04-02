<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php

include "config.php";
include "header.php";


$id=0;
if(isset($_GET["id"])) {$id=$_GET["id"];}
$sql = "SELECT id, name, description, price, image FROM tovar where id=".$id;
$result=$conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="row rb container">
    <div class="col-9 class="rd">
    <h3>Редагування товару</h3>
    <form action="/update.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <label class="form-control no-bord">Назва товару</label>
        <input class="form-control" type="text" name="name" value="<?php echo $row['name']?>">
        <label class="form-control no-bord">Опис товару</label>
        <textarea class="form-control" name="description"><?php echo $row['description']?></textarea>
        <label class="form-control no-bord">Ціна товару</label>
        <input class="form-control" type="text" name="price" value="<?php echo $row['price']?>">
        <label class="form-control no-bord">Зображення</label>
        <img src="/images/<?php echo $row['image']?>">
        <input class="form-control" type="file" name="image" value="Обрати">
        <input class="form-control sor btn btn-info" type="reset" value="Очистити">
        <input class="form-control sor btn btn-primary" type="submit" value="Редагувати">
    </form>

</div>
<div class="col-3 ">
    <h3>sidebar</h3>
</div>

</div>

<?php include "footer.php";?>
</body>
</html>