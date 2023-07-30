<?php 
include '../tampilan/ataspimpin.php';
?>

   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Utama</h2>
            </div>
                <a href="sppd.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Surat Perintah Perjalanan Dinas</div>
                            <h4> <?php
                        $username=$_SESSION['username'];    
                        $sql = "SELECT * from sppd";
                        $query = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                        <br>
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
                           
                            $sql = "SELECT * from spt";
                            $query = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($query);
                            echo " $count <br/>";
                        ?> </h4>
                        <br>
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
