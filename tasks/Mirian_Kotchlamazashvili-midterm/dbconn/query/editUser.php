<?php
    require_once "../dbconn.php";

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $personalnumber = $_POST['personalnumber'];
    $regdate = date("Y-m-d h:i:sa");
    $position = $_POST['position'];

    $sql_update = $conn->prepare("UPDATE users SET fname=:firstname, lname=:lastname, birthdate=:birthdate, personalnumber=:personalnumber,
                                     position=:position, regdate=:regdate WHERE id = :id");
    $sql_update->bindParam(':id', $id);
    $sql_update->bindParam(':firstname', $firstname);
    $sql_update->bindParam(':lastname', $lastname);
    $sql_update->bindParam(':birthdate', $birthdate);
    $sql_update->bindParam(':personalnumber', $personalnumber);
    $sql_update->bindParam(':position', $position);
    $sql_update->bindParam(':regdate', $regdate);
    $sql_update->execute();
echo $id;
