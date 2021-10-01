<?php

require_once "conn.php";

$delete = $conn->prepare('DELETE FROM words WHERE id = :id');
$delete->bindValue(':id', $_GET['id']);
$delete->execute();

header("location:view_words.php");