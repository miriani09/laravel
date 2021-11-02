<?php
    require_once "../dbconn/dbconn.php";

    $words = $conn->prepare("SELECT * FROM questions");
    $words->execute();
    $result = $words->fetchAll((PDO::FETCH_ASSOC));
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

    <table class="table w-100 p-3 " style="width: 50% !important;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Answer</th>
            <th></th>
        </tr>
        </thead>
        <?php
        foreach ($result as $i => $items){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?php echo $i+1?></th>
            <td><?php echo $items['question']?></td>
            <td><?php echo $items['answer']?></td>
            <td>
                <a href="edit.php?id=<?php echo $items['id']?>" type="button" class="btn btn-primary">Edit</a>
                <a href="delete.php?id=<?php echo $items['id']?>" type="button" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

</body>
</html>