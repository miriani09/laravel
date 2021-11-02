<?php
    require_once "../dbconn/dbconn.php";


    if (isset($_POST['submit'])){
        if (isset($_POST['answer']) && $_POST['question'] != ""){
            $question = $_POST['question'];
            $answer = $_POST['answer'];

            $sql_insert = $conn->prepare("INSERT INTO questions(question, answer)
                        VALUES (:question, :answer)");
            $sql_insert->bindValue(':question', $question);
            $sql_insert->bindValue(':answer', $answer);
            $sql_insert->execute();
        }
        else{
            echo '<script>alert("Fill Forms")</script>';
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
        require "header.php";
     ?>
    <form method="post">
        <textarea name="question" id="" cols="40" rows="5"></textarea>
        <br>
        <input type="radio" name="answer" value="true" required>True
        <br>
        <input type="radio" name="answer" value="false" required>False
        <br><br>
        <button name="submit" class="btn btn-primary input">Submit</button>
    </form>
</body>
</html>