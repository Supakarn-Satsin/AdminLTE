<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "omegared1";


$con = mysqli_connect($host, $user, $pass, $dbname);


if (mysqli_connect_errno()) {

    die("การเชื่อมต่อผิดพลาด: " . mysqli_connect_error());
} else {

    echo "ว้าว ขนลุก";
}
?>
