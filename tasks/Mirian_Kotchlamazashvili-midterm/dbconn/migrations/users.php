<?php
$table = "users";
$create = "CREATE TABLE IF NOT EXISTS $table(
              id INT(11) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
              fname VARCHAR(50) NOT NULL,
              lname VARCHAR (50) NOT NULL,
              birthdate DATE NULL,
              personalnumber VARCHAR(11) NULL,
              position VARCHAR (50) NULL,
              regdate DATE NULL,
              ordernumber VARCHAR (50) NULL 
)";

$conn->exec($create);