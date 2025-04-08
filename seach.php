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

    include_once "config.php";
    include_once "header.php";
?>


<div class="row rb container">
    <div class="col-10 class="rd">
        <h3>Робоча область</h3>
        <?php
        $seach="aa";
        if(isset($_GET["seach"])) {$seach=htmlspecialchars($_GET["seach"]);}

        $sql = "SELECT * FROM tovar WHERE name LIKE '$seach'";
        //echo ($sql);
           $result=$conn->query($sql);
           if ($result->num_rows > 0) {
               while ($row =$result->fetch_assoc()) {
                   $tov = "/info/?id=".$row['id'];
                   echo ("<div class='tovar'>");
                    echo ("<a href='".$tov. "'><div class='name'>".$row['name']."</div>");

                    echo ("<div class='im'>"."<img src='images/".$row['image']." '>"."</div></a>");
                    echo ("<div class='price'>".$row['price']." Грн.</div>");
                    echo ("<div> <button class='btn btn-primary'> Купити</button></div>");

                    echo ("</div>");
               }
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