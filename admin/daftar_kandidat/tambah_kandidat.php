 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Tambah Data Kandidat</h2>
          </div>

 <div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
  			  <div class="card-body p-0">
      			<div class="row">
      				<div class="col-lg-12">
      				    <div class="p-5">
						  <div class="text-center">
               			  </div>
                   		    <form class= "card-body" method="POST" enctype="multipart/form-data">
						 	<div class="form-group cols-sm-6 py-3">
                              	<label>Id Kandidat</label>
                              	<input class="form-control" type="number" name="id_kandidat"  placeholder="Masukkan Id Kandidat..." required>
			               	</div>
						 	<div class="form-group cols-sm-6 py-3">
                              	<label>Nama Ketua</label>
                              	<input class="form-control" type="text" name="nama_ketua"  placeholder="Masukkan Nama Ketua..." required>
			               	</div>
						 	<div class="form-group cols-sm-6 py-3">
                              	<label>Nama Wakil</label>
                              	<input class="form-control" type="text" name="nama_wakil"  placeholder="Masukkan Nama Wakil..." required>
			               	</div>
                            <div class="form-group cols-sm-6 py-3">
                              	<label>Visi</label>
                              	<textarea class="form-control" type="text" name="visi"  placeholder="Masukkan Visi..." required></textarea>
			               	</div>
                            <div class="form-group cols-sm-6 py-3">
                              	<label>Foto Ketua</label>
                              	<input class="form-control" type="file" name="foto_ketua" required>
			               	</div>
                            <div class="form-group cols-sm-6 py-3">
                              	<label>Foto Wakil</label>
                              	<input class="form-control" type="file" name="foto_wakil">
			               	</div>
                            
                            <div class="form-group cols-sm-6 mt-4">
                            	<input type="submit" name="input" value="Simpan" class="btn btn-success">  
                            </div>
                    	    </form>        
      				    </div>
         			  </div>
        			</div>
            	 </div>
            </div>
		</div>
	</div>
</div>
        </div>
    </div>
</section>
 <!--end layanan -->
 
<?php 
	if(isset($_POST['input'])){

        $nomor_random_1 = rand(100, 1000);
        $nomor_random_2 = rand(100, 1000);

        $id_kandidat = $_POST['id_kandidat'];
        $kode_kandidat = $nomor_random_1.$nomor_random_2;
        $nama_ketua = $_POST['nama_ketua'];
        $nama_wakil = $_POST['nama_wakil'];
        $visi = $_POST['visi'];
        $misi = $_POST['id_kandidat'];
        $foto_ketua = $_FILES["foto_ketua"]["name"];
        $tmp_ketua = $_FILES["foto_ketua"]["tmp_name"];
        $path = "./../assets/img/kandidat/";
        
		if (empty($foto_wakil)){
            echo"<script>
            alert('Only ketua');
            </script>";
            move_uploaded_file($tmp_ketua, $path.$foto_ketua);
            $query = mysqli_query($koneksi,"INSERT INTO tb_kandidat VALUES ('$id_kandidat', '$kode_kandidat', '$nama_ketua', '$nama_wakil', '$visi', '$misi', '$foto_ketua', 'default.png')");
            if($query){
				echo"<script>
					alert('Data berhasil ditambahkan');
				</script>";
                $query_misi = mysqli_query($koneksi,"INSERT INTO tb_misi VALUES ('$id_kandidat',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ')");
				
			    if($query_misi){
                    echo"<script>
                        alert('Data berhasil ditambahkan');
                    </script>";
                          echo "<script>location='index.php?p=kandidat'</script>";
			    }else{
				    echo "<script>alert('Gagal menambahkan data')</script>";
			    }
            }else{
                echo"<script>
                        alert('Data gagal ditambahkan');
                    </script>";
            }
        }
		elseif (isset($foto_wakil) && isset($foto_ketua)){
            echo"<script>
            alert('Foto complate');
            </script>";
            move_uploaded_file($tmp_ketua, $path.$foto_ketua);
            move_uploaded_file($tmp_wakil, $path.$foto_wakil);
            $query = mysqli_query($koneksi,"INSERT INTO tb_kandidat VALUES ('$id_kandidat', '$kode_kandidat', '$nama_ketua', '$nama_wakil', '$visi', '$misi', '$foto_ketua', '$foto_wakil')");
            if($query){
				echo"<script>
					alert('Data berhasil ditambahkan');
				</script>";
                $query_misi = mysqli_query($koneksi,"INSERT INTO tb_misi VALUES ('$id_kandidat',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ')");
				
			    if($query_misi){
                    echo"<script>
                        alert('Data berhasil ditambahkan');
                    </script>";
                          echo "<script>location='index.php?p=kandidat'</script>";
			    }else{
				    echo "<script>alert('Gagal menambahkan data')</script>";
			    }
            }else{
                echo"<script>
                        alert('Data gagal ditambahkan');
                    </script>";
            }
        }
	
	}
?>