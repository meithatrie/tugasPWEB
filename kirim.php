<?php

include 'config.php';

$nama         = $_POST['nama'];
$email        = $_POST['email'];
$pesan        = $_POST['pesan'];

$query="INSERT INTO tb_user SET nama='$nama',email='$email',pesan='$pesan'";
mysqli_query($conn, $query);

header("location:hubungi.php");
?>
