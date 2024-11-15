<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

if($result = $mysqli->query($query)){
    if($result->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    }else{
        echo "Login Gagal <a href='login.php'>Login</a>";
    }
$mysqli->close();
}
?>