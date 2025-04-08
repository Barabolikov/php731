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
?>


<div class="row rb container">
    <div class="col-9 class="rd">
        <h3>Додавання товару</h3>
        <form action="create.php" method="post" enctype="multipart/form-data">
            <label class="form-control no-bord">Назва товару</label>
            <input class="form-control" type="text" name="name" placeholder="Назва">
            <label class="form-control no-bord">Опис товару</label>
            <textarea class="form-control" name="description"></textarea>
            <label class="form-control no-bord">Ціна товару</label>
            <input class="form-control" type="text" name="price" placeholder="300">
            <label class="form-control no-bord">Зображення</label>
            <input class="form-control" type="file" name="image" value="Обрати">
            <input class="form-control sor btn btn-info" type="reset" value="Очистити">
            <input class="form-control sor btn btn-primary" type="submit" value="Додати">
        </form>

    </div>
    <div class="col-3 ">
       <h3>sidebar</h3>
    </div>

</div>

<?php include "footer.php";?>
</body>
</html>