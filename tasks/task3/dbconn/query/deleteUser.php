<?php
    require_once "../dbconn.php";

    $delete = $conn->prepare('DELETE FROM users WHERE id = :id');
    $delete->bindParam(':id', $_POST['id']);
    $delete->execute();

