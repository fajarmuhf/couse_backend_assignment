<?php

include("database.php"); // sertakan database.php untuk dapat menggunakan class database

echo "CRUD TESTING<br>";

$test = new Database(); // membuat objek baru dari class database agar dapat menggunakan fungsi didalamnya

$test->execute("DELETE FROM game_tbl WHERE status = 0");

?>