<?php
    require_once "conn.php";

    $words = $conn->prepare("SELECT * FROM words WHERE id = :id");
    $words->bindValue(':id', $_GET['id']);
    $words->execute();
    $result = $words->fetchAll((PDO::FETCH_ASSOC));


foreach ($result as $items){
    $eng = $items['english'];
    $geo = $items['georgian'];
}

if (isset($_POST['submit'])){
    $edit = $conn->prepare("UPDATE words SET english=:english,georgian=:georgian WHERE id = :id");
    $edit->bindValue(':english', $_POST['id']);
    $edit->bindValue(':english', $_POST['eng']);
    $edit->bindValue(':georgian',$_POST['geo']);
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
        include "header.php";
     ?>
    <form method="post">
        <input type="text" value="<?php echo $eng ?>" class="form-control input" name="eng">
        <br>
        <input type="text" value="<?php echo $geo ?>" class="form-control input" name="geo">
        <br>
        <button name="submit" class="btn btn-primary input">Submit</button>
    </form>
</body>
</html>