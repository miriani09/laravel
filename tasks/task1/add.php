<?php
    require_once "conn.php";


    if (isset($_GET['submit'])){
        $eng = $_GET['eng'];
        $geo = $_GET['geo'];

        if ($eng === "" && $geo === ""){
            echo '<script>alert("Enter Words")</script>';
        }
        else{
            $sql_insert = "INSERT INTO words(english, georgian)
                        VALUES ('$eng', '$geo')";
            $conn->exec($sql_insert);
        }
    }
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
     ?>
    <form method="get">
        <input type="text" class="form-control input" name="eng" placeholder="Enter English Word">
        <br>
        <input type="text" class="form-control input" name="geo" placeholder="Enter Georgian Word">
        <br>
        <button name="submit" class="btn btn-primary input">Submit</button>
    </form>

</body>
</html>