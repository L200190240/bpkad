<?php
		$conn =mysqli_connect('localhost','root','', 'bps') or die(mysqli_error()); // koneksi ke server database
		mysqli_select_db('bps',$c)or die(mysqli_error()); // pilih database
		
		$sql="select * from pegawai where nip='$_POST[parent_id]'";
		$response = array(); // siapkan respon yang nanti akan di convert menjadi JSON
		$query = mysqli_query($conn, $sql);		
		if($query){
			if(mysqli_num_rows($query) > 0){
				while($row = mysqli_fetch_object($query)){
					// masukan setiap baris data ke variable respon
					$response[] = $row; 
				}
			}else{
				$response['error'] = 'Data kosong'; // memberi respon ketika data kosong
			}
		}else{
			$response['error'] = mysqli_error(); // memberi respon ketika query salah
		}
		die(json_encode($response)); // convert variable respon menjadi JSON, lalu tampilkan 
	
?>
