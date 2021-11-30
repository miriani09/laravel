<?php
$table = "users";
$create = "CREATE TABLE IF NOT EXISTS $table(
              id INT(11) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
              fname VARCHAR(50) NOT NULL,
              lname VARCHAR (50) NOT NULL,
              birthdate DATE NULL,
              personalnumber VARCHAR(11) NULL,
              regdate DATE NULL,
              position VARCHAR (50) NULL,
              image VARCHAR (255) NULL 
)";

$conn->exec($create);