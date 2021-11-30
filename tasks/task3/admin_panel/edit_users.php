<?php
    require_once "../dbconn/dbconn.php";
    $select = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $select->bindParam(':id', $_GET['id']);
    $select->execute();
    $result = $select->fetchAll((PDO::FETCH_ASSOC));

    foreach ($result as $items){
        $id = $items['id'];
        $fname = $items['fname'];
        $lname = $items['lname'];
        $birthdate = $items['birthdate'];
        $personalnumber = $items['personalnumber'];
        $regdate = $items['regdate'];
        $position = $items['position'];
        $image = $items['image'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <?php
        require_once "../blocks/header.php";
        require_once "./ajax/ajax.php";
    ?>

    <div class="col-xl-2" style="margin-top: 1%; margin-left: 1%">
        <form method="post" enctype="multipart/form-data">
            <div class="form-outline mb-3">
                <input type="text" name="firstname" id="firstname" value="<?php echo $fname ?>" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="text" name="lastname" id="lastname" value="<?php echo $lname ?>" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="date" name="birthdate" id="birthdate" value="<?php echo $birthdate ?>" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="text" name="personalnumber" id="personalnumber" value="<?php echo $personalnumber ?>" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="text" name="regdate" id="regdate" value="<?php echo $regdate ?>" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="text" name="position" id="position" value="<?php echo $position ?>" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="file" name="image" id="image" value="<?php echo $image ?>" class="form-control form-control-md"/>
            </div>
            <div class="form-outline mb-3">
                <h4 id="successfully" style="color: green"></h4>
                <input type="text" id="id" value="<?php echo $id ?>" hidden>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
                <button name="editSubmit" id="editSubmit" class="btn btn-primary btn-md"  style="padding-left: 2.5rem; padding-right: 2.5rem;">Update</button>
            </div>
        </form>
    </div>
</body>
</html>