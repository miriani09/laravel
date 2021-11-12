<?php
require_once "../dbconn/dbconn.php";


if (isset($_GET['submit'])){
    $name = $_GET['name'];
    $surname = $_GET['surname'];

    if ($name === "" && $surname === ""){
        echo '<script>alert("Fill Forms")</script>';
    }
    else{
        $sql_insert = "INSERT INTO users(name, surname)
                        VALUES ('$name', '$surname')";
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
    <title>Document</title>
</head>
<body>
    <?php
        require "header.php";

        for ($i = 0;$i <= 7;$i++) {

            $query0 = $conn->prepare("SELECT score FROM users ORDER BY score DESC limit 1");
            $query0->execute();
            $correct_answer = $query0->fetchColumn();
        }
     ?>
    <form method="get">
        <input type="text" class="form-control input" name="name" placeholder="Enter Name">
        <br>
        <input type="text" class="form-control input" name="surname" placeholder="Enter Surname">
        <br>
        <p>Score: <?php echo $correct_answer?></p>
        <br>
        <button name="submit" class="btn btn-primary input">Submit</button>
    </form>
</body>
</html>