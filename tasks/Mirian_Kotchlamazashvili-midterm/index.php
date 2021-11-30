<?php
    require_once "dbconn/dbconn.php";

    $select_admin = $conn->prepare("SELECT * FROM admin");
    $select_admin->execute();
    $result = $select_admin->fetchAll((PDO::FETCH_ASSOC));

    if (isset($_POST['submit'])) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        foreach ($result as $item) {
            if ($mail == $item['mail'] && $password == $item['password']){
                header("location: admin_panel/index.php");
            }
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
    <title>Admin</title>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
                     alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="mail" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>