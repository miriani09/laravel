<?php
    require_once "../dbconn.php";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $personalnumber = $_POST['personalnumber'];
    $regdate = date("Y-m-d h:i:sa");
    $position = $_POST['position'];
    $ordernumber = $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 15);
;

    $sql_insert = $conn->prepare("INSERT INTO users (fname, lname, birthdate, personalnumber, regdate, position, ordernumber)
                                        VALUES (:firstname, :lastname, :birthdate, :personalnumber, :regdate, :position, :ordernumber)");
    $sql_insert->bindParam(':firstname', $firstname);
    $sql_insert->bindParam(':lastname', $lastname);
    $sql_insert->bindParam(':birthdate', $birthdate);
    $sql_insert->bindParam(':personalnumber', $personalnumber);
    $sql_insert->bindParam(':regdate', $regdate);
    $sql_insert->bindParam(':position', $position);
    $sql_insert->bindParam(':ordernumber', $ordernumber);
    $sql_insert->execute();
