<?php
$table = "roles";
$create_table = "CREATE TABLE IF NOT EXISTS $table(
                 id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                 name VARCHAR(100) NOT NULL,
                 create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


$conn->exec($create_table);
