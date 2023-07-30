<?php
error_reporting(0);

include "../config/koneksi.php";
$nosurat      = $_POST['nosurat'];
$dasar	 	  = $_POST['dasar'];
$nip		  = $_POST['nip'];
$nama		  = $_POST['nama'];
$golongan	  = $_POST['golongan'];
$jabatan	  = $_POST['jabatan'];
$tujuan	      = $_POST['tujuan'];


$query = mysqli_query($conn, "INSERT INTO spt (nosurat,dasar, nip, nama, golongan, jabatan, tujuan) VALUES ('$nosurat', '$dasar', '$nip', '$nama', '$golongan', '$jabatan', '$tujuan')");
if ($query){
	echo "<script>alert('Laporan Berhasil dimasukan!'); window.location = '../pimpinan/spt.php'</script>";
} else {
	echo "<script>alert('Laporan Gagal dimasukan!'); window.location = '../pimpinan/spt.php'</script>";
}
?>
