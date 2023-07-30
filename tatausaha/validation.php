<?php
$conn = mysqli_connect("localhost", "root", "", "bps");

$sql = mysqli_query("SELECT * from spd where nosurat = '$_POST[username]';");
$cocok = mysqli_num_rows($sql);

echo $cocok;
?>