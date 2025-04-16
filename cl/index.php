<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
<?php
    include_once "People.php";
    include "../header.php";
?>


<div class="row rb container">
    <div class="col-8 class="rd">
        <h3>Робоча область</h3>
        <?php
            $peoples = [
                   new People(1,"Василь",1000),
                   new People(2,"Павло",500),
                   new People(3,"Поліна",1000)
            ];

        foreach($peoples as $people) {
            $people->Vivod();
        }


        ?>

    </div>
    <div class="col-4 ">
       <h3>Sidebar</h3>


    </div>

</div>

<?php include "../footer.php";?>
</body>
</html>