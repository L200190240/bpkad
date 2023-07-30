<?php
ob_start(); // untukmembuffer;
include "config/koneksi.php";
//membuatvariabeluntukmenampung input username dan password
$username=$_POST['username'];
$password=$_POST['password'];


//memproteksidarimysql injection
$username = stripslashes($username); // menghapus backslash padatampilanphp
$password = stripslashes($password);
//$username = mysql_real_escape_string($username); // memfilterkarakterkhususmisal '
//$password = mysql_real_escape_string($password);

if (empty($username) || empty($password))
    {
    echo "Username dan Password tidak Boleh Kosong";
    }
else
    {
    $query=mysqli_query($conn, "SELECT * FROM pegawai WHERE username='$username' and password='$password'");
    $cek=mysqli_num_rows($query);
    $ambil = mysqli_fetch_array($query);
    // var_dump("SELECT * FROM pegawai WHERE username='$username' and password='$password'");
    if ($cek==1)
        {
        session_start();
        $_SESSION['username']= $username;
        // $_SESSION['password']= $password;
        $_SESSION['hak_akses']= $hak_akses;
        if ($ambil['hak_akses']=="pimpinan")
            {
            header ('location:pimpinan/index.php');
            }
        else if ($ambil['hak_akses']=="tatausaha")
            {
            header ('location:tatausaha/index.php');
            }
        else if ($ambil['hak_akses']=="kasie")
            {
            header ('location:kasie/index.php');
            }
        else if ($ambil['hak_akses']=="pegawai")
            {
            header ('location:pegawai/index.php');
            }
        }
    else
        {
        echo "Salah Username dan Password";
        }
    }
ob_end_flush();
?>