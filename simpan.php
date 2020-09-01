<?php
require_once('config/config.php');

if(isset($_POST['add'])) {
	$id_gardu = trim(mysqli_real_escape_string($con, $_POST['id_gardu']));
    $tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
    $petugas = trim(mysqli_real_escape_string($con, $_POST['petugas']));
    $penyulang = trim(mysqli_real_escape_string($con, $_POST['penyulang']));
    $lokasi = trim(mysqli_real_escape_string($con, $_POST['lokasi']));
   	$type = trim(mysqli_real_escape_string($con, $_POST['type']));
    $kapasitas = trim(mysqli_real_escape_string($con, $_POST['kapasitas']));
    $notiang = trim(mysqli_real_escape_string($con, $_POST['notiang']));

     mysqli_query($con, "insert into tb_pelaksana Values ('$id_gardu','$tanggal','$petugas','$penyulang','$lokasi','$type','$kapasitas','$notiang')") or die (mysqli_error($con));
     
  } else if (isset($_POST['edit'])) {

  }
?>