<?php
include "../config/koneksi.php";
$id	= $_GET['id'];

$query = mysqli_query($conn,"UPDATE `lpd` SET `batal` = '1' WHERE `lpd`.`id` = '$id'");
if ($query){
	echo "<script>alert('Data Berhasil dibatalkan!'); window.location = 'batal.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dibatalkan!'); window.location = 'batal.php'</script>";	
}
?>