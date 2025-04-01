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
    <div class="col-10 class="rd">
        <h3>Товар</h3>
        <?php
            $id=0;
            if(isset($_GET["id"])) {$id=$_GET["id"];}
           $sql = "SELECT id, name, description, price, image FROM tovar where id=".$id;
           $result=$conn->query($sql);
            $row = $result->fetch_assoc();
        echo ("<div class='tovar'>");
        echo ("<div class='name'>".$row['name']."</div>");

        echo ("<div class='im'>"."<img src='/images/".$row['image']." '>"."</div>");
        echo ("<div class='price'>".$row['price']." Грн.</div>");
        ?>
      <form action="" method="post">
            <button id="bt1" class="btn-primary" name = "button1">Редагувати</button>
            <button id='bt2' class='btn-info' name = 'button2'>Видалити</button>
        </form>

        </div>
    <?php

            if (isset($_POST['button1'])) {
                echo ("Натиснута кнопка 1");
            } elseif (isset($_POST['button2'])) {

                $sql = "DELETE FROM tovar WHERE id=".$id;
                echo ($sql);
                $result=$conn->query($sql);

            }

    $conn->close();
        ?>

    </div>
    <div class="col-2 ">
       <h3>sidebar</h3>
    </div>

</div>

<?php include "footer.php";?>
</body>
</html>