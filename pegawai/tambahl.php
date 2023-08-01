<?php
error_reporting(0);

include "../config/koneksi.php";
$nosurat	  = $_POST['nosurat'];
$nip		  = $_POST['nip'];
$nama		  = $_POST['nama'];
$namap		  = $_POST['namap'];
$golongan	  = $_POST['golongan'];
$jabatan	  = $_POST['jabatan'];
$tujuan	      = $_POST['tujuan'];
$angkutan	  = $_POST['angkutan'];
$tempatb	  = $_POST['tempatb'];
$tempatt	  = $_POST['tempatt'];
$tglb	      = $_POST['tglb'];
$tglk		  = $_POST['tglk'];

$query = mysqli_query($conn, "INSERT INTO lpd (nosurat, nip, nama,namap, golongan, jabatan, tujuan, angkutan, tempatb, tempatt, tglb, tglk) VALUES ('$nosurat', '$nip', '$nama', '$namap', '$golongan', '$jabatan', '$tujuan', '$angkutan', '$tempatb', '$tempatt', '$tglb', '$tglk')");
if ($query){
	echo "<script>alert('Laporan Berhasil dimasukan!'); window.location = '../pimpinan/lpd.php'</script>";
} else {
	echo "<script>alert('Laporan Gagal dimasukan!'); window.location = '../pimpinan/lpd.php'</script>";
}
?>
