 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Ubah Data Pencoblos</h2>
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
                              	<label>NIM Pencoblos</label>
                              	<input class="form-control" type="text" name="nim_pencoblos"  value="<?php echo $r['nim_pencoblos'];?>" required>
			               	</div>
						 	<div class="form-group cols-sm-6 py-3">
                              	<label>Nama Pencoblos</label>
                              	<input class="form-control" type="text" name="nama_pencoblos"  value="<?php echo $r['nama_pencoblos'];?>" required>
			               	</div>
                            <div class="form-group cols-sm-6 py-3">
                              	<label>Program Studi</label><br>
                              	<select class="btn btn-light dropdown-toggle" name="prodi_pencoblos" required>
									<option value="<?php echo $r['prodi_pencoblos'];?>" <?php if ( $r['prodi_pencoblos'] == $r['prodi_pencoblos']) echo 'selected="selected"'; ?>>
                                        <a><?php echo $r['prodi_pencoblos'];?></a>
                                    </option>
									<option  value="Teknik Informatika">D3 Teknik Informatika</option>
									<option  value="Teknologi Hasil Pertanian">D3 Teknologi Hasil Pertanian</option>
									<option  value="Akuntansi">D3 Akuntansi</option>
								</select>
			               	</div>
							<div class="form-group cols-sm-6 py-3">
                              	<label>Tahun Angkatan</label><br>
                              	<select class="btn btn-light dropdown-toggle" name="tahun_angkatan" required>
									<option value="<?php echo $r['tahun_angkatan'];?>" <?php if ( $r['tahun_angkatan'] == $r['tahun_angkatan']) echo 'selected="selected"'; ?>>
                                        <a><?php echo $r['tahun_angkatan'];?></a>
                                    </option>
									<option  value="2020">2020</option>
									<option  value="2021">2021</option>
									<option  value="2022">2022</option>
									<option  value="2023">2020</option>
								</select>
			               	</div>
                            
                            <div class="form-group cols-sm-6 mt-4">
                            	<input type="submit" name="input" value="Ubah" class="btn btn-success">  
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
        $nim_pencoblos = $_POST['nim_pencoblos'];
        $nama_pencoblos = $_POST['nama_pencoblos'];
        $prodi_pencoblos = $_POST['prodi_pencoblos'];
        $tahun_angkatan = $_POST['tahun_angkatan'];
        
        $query=mysqli_query($koneksi,"UPDATE tb_pencoblos SET 
        nim_pencoblos='".$nim_pencoblos."', 
        nama_pencoblos='".$nama_pencoblos."', 
        prodi_pencoblos='".$prodi_pencoblos."', 
        tahun_angkatan='".$tahun_angkatan."'
        WHERE id_pencoblos ='".$_GET['id']."'");
                if($query){
                    echo"<script>
                        alert('Data berhasil diubah');
                    </script>";
                          echo "<script>location='index.php?p=pencoblos'</script>";
			    }else{
				    echo "<script>alert('Gagal menambahkan data')</script>";
                    echo "<script>location='index.php?p=pencoblos'</script>";
			    }
	}
?>