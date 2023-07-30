<?php
error_reporting(0);

include "../config/koneksi.php";
$revisi       = $_POST['revisi'];

$query = mysqli_query($conn, "INSERT INTO revisi (revisi) VALUES ('$revisi')");
if ($query){
	echo "<script>alert('Revisi Berhasil ditambahkan!'); window.location = 'revisi.php'</script>";
} else {
	echo "<script>alert('Revisi Gagal Ditambahkan!'); window.location = 'revisi.php'</script>";
}
?>
