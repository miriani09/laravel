<?php
    require_once "../dbconn/dbconn.php";

    $question = $conn->prepare("SELECT * FROM questions WHERE id = :id");
    $question->bindValue(':id', $_GET['id']);
    $question->execute();
    $result = $question->fetchAll((PDO::FETCH_ASSOC));

    foreach ($result as $items){
        $question = $items['question'];
        $answer = $items['answer'];
    }

    if (isset($_POST['submit'])){
        $edit = $conn->prepare("UPDATE questions SET question=:question,answer=:answer WHERE id = " . $_GET['id']);
        $edit->bindValue(':question', $_POST['question']);
        $edit->bindValue(':answer',$_POST['answer']);
        $edit->execute();
        header('location:view_tests.php');
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
     ?>
    <form method="post">
        <textarea name="question" id="" cols="40" rows="5"> <?php echo $question ?></textarea>
        <br>
        <input type="radio" name="answer" value="true" required>True
        <br>
        <input type="radio" name="answer" value="false" required>False
        <br><br>
        <button name="submit" class="btn btn-primary input">Submit</button>
    </form>
</body>
</html>