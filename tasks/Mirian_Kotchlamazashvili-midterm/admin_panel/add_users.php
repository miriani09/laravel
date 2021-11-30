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
                <input type="text" required name="firstname" id="firstname" class="form-control form-control-md" placeholder="Enter First Name" />
            </div>

            <div class="form-outline mb-3">
                <input type="text" required name="lastname" id="lastname" class="form-control form-control-md" placeholder="Enter Last Name" />
            </div>

            <div class="form-outline mb-3">
                <input type="date" required name="birthdate" id="birthdate" class="form-control form-control-md"/>
            </div>

            <div class="form-outline mb-3">
                <input type="text" required name="personalnumber" id="personalnumber" class="form-control form-control-md" placeholder="Enter Personal NUmber" />
            </div>

            <div class="form-outline mb-3">
                <input type="text" required name="position" id="position" class="form-control form-control-md" placeholder="Enter Position" />
            </div>

            <div class="form-outline mb-3">
                <h4 id="successfully" style="color: green"></h4>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
                <button name="addSubmit" id="addSubmit" class="btn btn-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>
        </form>
    </div>
</body>
</html>