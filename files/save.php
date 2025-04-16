<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css" type="text/css">
</head>
<body>
<?php

    include "../header.php";
    if(isset($_GET["text"])) {$text = htmlspecialchars($_GET["text"]);}
    $files = fopen("dani.txt", "a");
    if(fwrite($files,PHP_EOL.$text)) { echo "файл збережено";}
        else { echo "Виникла помилка при збереженні файлу";}
?>


<div class="row rb container">
    <div class="col-8 class="rd">
        <h3>Робоча область</h3>
        <?php
        //зчитування файлу
        $fil = fopen("dani.txt", "r+");
          if ($fil) echo "Файл відкрито"; else echo "Файлу не існує";
          //читаємо рядки файлу до його закінчення та виводимо
          while (!feof($fil)) {
              $st = htmlentities(fgets($fil));
              echo ("<br> $st");
          }
        fclose($fil);
        ?>

    </div>
    <div class="col-4 ">
       <h3>Додати текст</h3>
        <form action="save.php" method="get">
            <label class="form-control">Ввеідть текст</label>
            <textarea class="form-control" cols="100" rows="10" name="text"></textarea>
            <input type="submit" class="btn btn-primary">
        </form>
        <?php
        //перевірка існування файлу
        if(file_exists("dani.txt")) {
            echo "файл дійсно є";

        }
        else { echo "не існує файлу файлу";}

        //визначення розміру
        $size = filesize("dani.txt");
        echo "<br> розмір файлу - ".$size;
        //копіювання файлу
        copy("dani.txt","e:/99/dani2.txt");
        //rename("dani.txt","dani2.txt");
        unlink("dani65.txt")
        ?>
    </div>


</div>

<?php include "../footer.php";?>
</body>
</html>