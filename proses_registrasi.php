<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
if( $mysqli->query($query) ){
    echo "Registrasi Berhasil";
    echo "<br><a href='index.php'>Login</a>";
}else{
    echo "Registrasi Gagal" . $mysqli->error;
}

$mysqli->close();
?>