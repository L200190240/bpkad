<?php 
include '../tampilan/ataspimpin.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Revisi</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Revisi</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="tambahr.php" method="POST">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="revisi" required></textarea> 
                                        <label class="form-label">Revisi</label>
                                    </div>
                                </div>

                                <br></br>
                <td><input type="submit" value="Simpan Data" class="btn btn-primary waves-effect">&nbsp &nbsp &nbsp
                    <a href="sppd.php" class="btn btn-warning waves-effect">Kembali</a></td>       
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        </div>
    </section>

   <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(nip){  
    document.getElementById('nm').value = dtPgw[nip].nama;  
    document.getElementById('gol').value = dtPgw[nip].gol;
    document.getElementById('jab').value = dtPgw[nip].jab;    
    };  
    </script> 
  <?php 
include '../tampilan/footer.php';
?>