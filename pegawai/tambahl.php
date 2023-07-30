<?php
error_reporting(0);

include "../config/koneksi.php";
$nip          = $_POST['nip'];
$nama		  = $_POST['nama'];
$nosurat      = $_POST['nosurat'];
$pilihan_kota = $_POST['pilihan_kota'];
$tt 		  = $_POST['tempatt'];
$tb			  = $_POST['tanggalb'];
$tk 	      = $_POST['tanggalk'];
$perihal 	  = $_POST['perihal'];
$laporan 	  = $_POST['laporan'];


$query = mysqli_query($conn, "INSERT INTO lpd (nip,nama, nosurat, pilihan_kota, tempatt, tanggalb, tanggalk,perihal,laporan) VALUES ('$nip','$nama', '$nosurat','$pilihan_kota', '$tt', '$tb', '$tk', '$perihal', '$laporan')");
if ($query){
	echo "<script>alert('Laporan Berhasil dimasukan!'); window.location = 'lpd.php'</script>";
} else {
	echo "<script>alert('Laporan Gagal dimasukan!'); window.location = 'lpd.php'</script>";
}
?>
