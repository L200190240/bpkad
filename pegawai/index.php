<?php 
include '../tampilan/ataspegawai.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Utama</h2>
            </div>
                <a href="data_lpd.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">Rekapitulasi Surat Perjalanan Dinas</div>
                            <h4> <?php
                        $username=$_SESSION['username'];    
                        $sql = "SELECT * FROM  lpd, pegawai where lpd.nip=pegawai.nip";
                        $query = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                        <br>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </section>

  <?php 
include '../tampilan/footer.php';
?>
