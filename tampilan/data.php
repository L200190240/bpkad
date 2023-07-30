<?php
//connect ke database
 $conn = mysqli_connect("localhost","root","", "bps");
//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));
  
$qstring = "SELECT * FROM uploadst WHERE nosurat LIKE '".$term."%'";
//query database untuk mengecek tabel anime
$result = mysqli_query($qstring);
  
while ($row = mysqli_fetch_array($result))
{
    $row['value']=htmlentities(stripslashes($row['nosurat']));
    $row['nosurat']=(int)$row['nosurat'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>