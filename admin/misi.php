  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Misi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
       <form class= "card-body" method="POST" enctype="multipart/form-data">
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="kode_kandidat"  placeholder="Masukkan Kode Kandidaat">
	      	</div>
              <hr>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi1"  placeholder="Masukkan Misi 1">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi2"  placeholder="Masukkan Misi 2">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi3"  placeholder="Masukkan Misi 3">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi4"  placeholder="Masukkan Misi 4">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi5"  placeholder="Masukkan Misi 5">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi6"  placeholder="Masukkan Misi 6">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi7"  placeholder="Masukkan Misi 7">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi8"  placeholder="Masukkan Misi 8">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi9"  placeholder="Masukkan Misi 9">
	      	</div>
            <div class="form-group cols-sm-6 py-2">
             	<input class="form-control" type="text" name="misi10"  placeholder="Masukkan Misi 10">
	      	</div>
            <div class="form-group cols-sm-6 py-2 text-end">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">  
	      	</div>
        </form>        
      </div>
    </div>
  </div>
</div>
<?php 
	if(isset($_POST['simpan'])){
        $kode_kandidat = $_POST['kode_kandidat'];
		$misi1 = $_POST['misi1'];
		$misi2 = $_POST['misi2'];
		$misi3 = $_POST['misi3'];
		$misi4 = $_POST['misi4'];
		$misi5 = $_POST['misi5'];
		$misi6 = $_POST['misi6'];
		$misi7 = $_POST['misi7'];
		$misi8 = $_POST['misi8'];
		$misi9 = $_POST['misi9'];
        $misi10 = $_POST['misi10'];

        $data_kandidat = mysqli_query($koneksi,"SELECT * FROM tb_kandidat WHERE kode_kandidat = '$kode_kandidat'");
        $data = mysqli_fetch_assoc($data_kandidat);

        
		$query = mysqli_query($koneksi,"UPDATE tb_misi SET 
                misi1='$misi1',
                misi2='$misi2',
                misi3='$misi3',
                misi4='$misi4',
                misi5='$misi5',
                misi6='$misi6',
                misi7='$misi7',
                misi8='$misi8',
                misi9='$misi9',
                misi10='$misi10'
                WHERE id_misi='".$data['id_misi']."'");
				
			if($query){
				echo "<script>alert('Data berhasil ditambahkan')</script>";
                echo "<script>location='index.php?p=kandidat'</script>";
			}else{
				echo "<script>alert('Gagal menambahkan data')</script>";
			}
	
	}
?>