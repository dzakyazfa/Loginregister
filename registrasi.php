<?php
include './koneksi.php';
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$query = "INSERT INTO isi(ID, username, email, password)
          VALUES ('$id','$username', '$email', '$password')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num>0){
    echo"Berhasil Tambah Data";
}else{
    echo"Tidak Berhasil Tambah Data ".mysqli_connect_error();
}
?>