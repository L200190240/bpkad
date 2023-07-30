<?php
include "../config/koneksi.php";
$kodeL          	= $_POST['kodeL'];
$prov            	= $_POST['provinsi'];
$kab		    	= $_POST['kabupaten'];
$kec		 	    = $_POST['kecamatan'];
$kota 	        	= $_POST['kota'];
$kpos 	        	= $_POST['kode_pos'];



$query = mysqli_query($conn. "INSERT INTO lokasi (kodeL, provinsi, kabupaten, kecamatan, kota, kode_pos) VALUES ('$kodeL', '$prov', '$prov', '$kab', '$kec', '$kota', $kpos)");
if ($query){
	echo "<script>alert('Data Anggran Berhasil dimasukan!'); window.location = 'lokasi.php'</script>";	
} else {
	echo "<script>alert('Data Anggaran Gagal dimasukan!'); window.location = 'inputlokasi.php'</script>";	
}
?>