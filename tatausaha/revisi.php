<?php 
include '../tampilan/ataspimpin.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman revisi</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Data Revisi Surat
                            </h2>
                            <br>
                            <form method="post" target="_self"> 
                                Cari Data :&nbsp;<input name='qcari' class="form-control" type="text" placeholder='Cari Data Berdasarkan Nama '/>
                                <br>
                                <input type="submit" class="btn btn-primary waves-effect" value="Cari " /> <a href='lpd.php' class='btn btn-sm btn-success' > All Data</a>
                            </form>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr><th>No</th>
                                            <th>Revisi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    require_once('koneksi.php');
                                    $query1="select * from revisi";

                                    if(isset($_POST['qcari'])){
                                        $qcari=$_POST['qcari'];
                                        $query1="SELECT * FROM revisi 
                                        and nama like '%$qcari%'
                                        or tanggalb like '%$qcari%'  ";
                                    }

                                    $result=mysqli_query($conn, $query1) or die(mysqli_error());
                                    $no=1; //penomoran 
                                    while($rows=mysqli_fetch_object($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $no
                                                    ?></td>
                                                    <td><?php       echo $rows -> revisi;?></td>
                                                </tr>
                                    <?php
                                        $no++;
                                    }?>
                                </table>
                            </div>
                        <div class="button-demo">
                            <a href="index.php" type="button" class="btn btn-warning waves-effect">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
include '../tampilan/footer.php';
?>
