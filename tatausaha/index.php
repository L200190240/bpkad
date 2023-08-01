<?php 
include '../tampilan/atastata.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Utama</h2>
            </div>
                <a href="pegawai.php">
            	  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Pegawai</div>
                           <h4> <?php
                        $sql = "SELECT * FROM pegawai";
                        $query = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                 		 <div class="number count-to" data-from="0" data-to=""
                 		
                            data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <a href="lpd.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">Laporan Perjalanan Dinas</div>
                            <h4> <?php
                        $sql = "SELECT * FROM lpd";
                        $query = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <a href="sppd.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Surat Perjalanan Dinas</div>
                            <h4> <?php
                        $sql = "SELECT * FROM sppd";
                        $query = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <a href="spt.php">
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Surat Tugas</div>
                            <h4><?php
                        $sql = "SELECT * FROM spt";
                        $query = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </section>

<!--   <?php 
include '../tampilan/footer.php';
?> -->
