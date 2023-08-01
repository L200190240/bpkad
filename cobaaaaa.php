<?php 
include '../tampilan/ataspimpin.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Laporan Data Perjalanan Dinas</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Data Laporan Perjalanan Dinas
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
                                            <th>Nama Pegawai</th>
                                            <th>No.Surat</th>
                                            <th>Tujuan Kab/Kota</th>
                                            <th>Tanggal Tujuan</th>
                                            <th>Sampai Dengan</th>
                                            <th>Perihal</th>
                                            <th>Laporan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    require_once('koneksi.php');
                                    $query1="select * from lpd, pegawai where pegawai.nip=lpd.nip and batal=''";

                                    if(isset($_POST['qcari'])){
                                        $qcari=$_POST['qcari'];
                                        $query1="SELECT * FROM  lpd, pegawai where lpd.nip=pegawai.nip 
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
                                                    <td><?php       echo $rows -> nama;?></td>
                                                    <td><?php       echo $rows -> nosurat;?></td>
                                                    <td><?php       echo $rows -> tempatt;?></td>
                                                    <td><?php       echo $rows -> tanggalb;?></td>
                                                    <td><?php       echo $rows -> tanggalk;?></td>
                                                    <td><?php       echo $rows -> perihal;?></td>
                                                    <td><?php       echo $rows -> laporan;?></td>
                                                    <td><div class="button-demo">
                                                        <a href="hapuslpd.php?id=<?=$rows -> id?>" type="button" class="btn btn-primary waves-effect">Batal</a>
                                                        </div>
                                                        <div class="button-demo">
                                                        <?php 
                                                        if($rows -> status == 'Telah Dikonfirmasi'){
                                                            echo "<p class='btn btn-success waves-effect'>Sudah Terkonfirmasi</p>";
                                                        } else {
                                                            echo '<a href="konfimasi.php?id='.$rows->id.'" type="button" class="btn btn-primary waves-effect">Konfirmasi</a>';
                                                        } ?>
                                                        </div>
                                                    </td>
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


<?php echo $jsArray; ?>  
    function changeValue(nosurat){  
    document.getElementById('nip').value = dtPgw[nosurat].nip;  
    document.getElementById('namap').value = dtPgw[nosurat].namap;
    document.getElementById('golongan').value = dtPgw[nosurat].jabatan;
    document.getElementById('tujuan').value = dtPgw[nosurat].tujuan;   
    document.getElementById('angkutan').value = dtPgw[nosurat].angkutan;  
    document.getElementById('tempatb').value = dtPgw[nosurat].tempatb;  
    document.getElementById('tempatt').value = dtPgw[nosurat].tempatt;
    document.getElementById('tglb').value = dtPgw[nosurat].tglb;  
    document.getElementById('tglk').value = dtPgw[nosurat].tglk;       
    };  