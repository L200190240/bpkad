<?php
include "../config/koneksi.php";
$id	= $_GET['id'];

$query = mysqli_query($conn,"UPDATE lpd SET status= 'Telah Dikonfirmasi' WHERE lpd.id = '$id'");
if ($query){
	echo "<script>alert('Data Sudah Terkonfirmasi!'); window.location = '../pimpinan/lpd.php'</script>";	
} else {
	echo "<script>alert('Data Gagal Dikonfirmasi!'); window.location = '../pimpinan/lpd.php'</script>";	
}
?>