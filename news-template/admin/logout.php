<?php
$conn=mysqli_connect("localhost","root","","news-site") or die("connection failed");

session_start();


session_unset();



session_destroy();

header("Location: http://localhost/news-template/admin/");





?>
