<?php
require_once "../dbconn/dbconn.php";

    $select_users = $conn->prepare("SELECT * FROM users");
    $select_users->execute();
    $result = $select_users->fetchAll((PDO::FETCH_ASSOC));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

    <?php
        require_once "../blocks/header.php";
        require_once "./ajax/ajax.php";
    ?>
    <input type="text" id="myInput" placeholder="Search..." style="height: 30px;width: 100%;text-align: center;border: solid 2px grey">

    <table class="table w-100 p-3 " id="myTable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Personal Number</th>
            <th scope="col">Position</th>
            <th scope="col">Register Date</th>
            <th scope="col">Order Number</th>
            <th></th>
        </tr>
        </thead>
        <?php
        foreach ($result as $i => $items){
        ?>
        <tbody>
        <tr id="userRow">
            <th scope="row"><?php echo $i+1?></th>
            <td><?php echo $items['fname']?></td>
            <td><?php echo $items['lname']?></td>
            <td><?php echo $items['birthdate']?></td>
            <td><?php echo $items['personalnumber']?></td>
            <td><?php echo $items['position']?></td>
            <td><?php echo $items['regdate']?></td>
            <td><?php echo $items['ordernumber']?></td>
            <td>
                <form method="get">
                    <a href="edit_users.php?id=<?php echo $items['id']?>" type="button"  class="btn btn-danger">Edit</a>

                    <a href="#" type="button" id="<?php echo $items['id']?>" class="btn btn-danger delete">Delete</a>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

</body>
</html>