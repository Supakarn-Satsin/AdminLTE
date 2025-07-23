<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password ==""){
    echo "<script>
    alert('กรุณากรอก Username หรือ Password');
    location.herf='login.php';
    </script>";
}

require 'connect.php';

//$username = mysqli_real_escape_string($con, $username);
//$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num == 0) {
    echo "<script>alert('ไม่ผ่านค่ะ รบกวนกลับไปใส่ใหม่ค่ะ');
    location.href='login.php';
    </script>";
} else {
    $_SESSION['username'] = $row['username'];
    $_SESSION['fullname'] = $row['fullname'];
    header('location:dist/');
}
