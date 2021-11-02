<?php

require_once "../dbconn/dbconn.php";

$delete = $conn->prepare('DELETE FROM questions WHERE id = :id');
$delete->bindValue(':id', $_GET['id']);
$delete->execute();

header("location:view_tests.php");