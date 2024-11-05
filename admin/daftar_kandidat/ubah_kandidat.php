<!-- ======= Contact Section ======= -->
<section class="layanan">
      <div class="container" data-aos="fade-up">
        <div class="container-fluid">
            <h1 class="section-title">Ubah Data Kandidat</h1>

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
								<label class="py-2">Nama Ketua</label>
               					<input class="form-control" type="text" name="nama_ketua" value="<?php echo $r['nama_ketua'];?>" required>
		   					</div>
							
							<div class="form-group cols-sm-6 py-3">
               					<label class="py-2">Nama Wakil</label>
              					<input class="form-control" type="text" name="nama_wakil" value="<?php echo $r['nama_wakil']; ?>" required>
			 				</div>

                            <div class="form-group cols-sm-6 py-3">
               					<label class="py-2">Visi</label>
              					<input class="form-control" type="text" name="visi" value="<?php echo $r['visi']; ?>" required>
			 				</div>
                            
                            <div class="form-group cols-sm-6 py-3">
                                <label class="py-2">Foto Ketua</label><br>
                            <?php   if ($r['foto_ketua'] != "") {?> 
                                <img class="py-2" width="100" src="./../assets/img/kandidat/<?php echo $r['foto_ketua']; ?>">
                            <?php
                                    }else{
                                        echo "<a>kosong</a>";
                                    }
                            ?>
                              	<input class="form-control py-2" type="file" name="foto_ketua" required>
							</div>

                            <div class="form-group cols-sm-6 py-3">
                                <label class="py-2">Foto Wakil</label><br>
                            <?php   if ($r['foto_wakil'] != "") {?> 
                                <img class="py-2" width="100" src="./../assets/img/kandidat/<?php echo $r['foto_wakil']; ?>">
                            <?php
                                    }else{
                                        echo "<a>kosong</a>";
                                    }
                            ?>
                              	<input class="form-control py-2" type="file" name="foto_wakil" required>
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
        $nama_ketua = $_POST['nama_ketua'];
        $nama_wakil = $_POST['nama_wakil'];
        $visi = $_POST['visi'];
        $foto_ketua = $_FILES["foto_ketua"]["name"];
        $tmp_ketua = $_FILES["foto_ketua"]["tmp_name"];
        $foto_wakil = $_FILES["foto_wakil"]["name"];
        $tmp_wakil = $_FILES["foto_wakil"]["tmp_name"];
        $path = "./../assets/img/kandidat/";

        $query=mysqli_query($koneksi,"SELECT * FROM tb_kandidat 
        WHERE id_kandidat ='".$r['id_kandidat']."'");
        $foto_lama=mysqli_fetch_array($query);

        unlink('./../assets/img/kandidat/'.$foto_lama['foto_ketua']);   
        unlink('./../assets/img/kandidat/'.$foto_lama['foto_wakil']);              
        move_uploaded_file($tmp_ketua, $path.$foto_ketua);     
        move_uploaded_file($tmp_wakil, $path.$foto_wakil);   

		$query=mysqli_query($koneksi,"UPDATE tb_kandidat SET 
        nama_ketua='$nama_ketua', 
        nama_wakil='$nama_wakil', 
        visi='$visi',
        foto_ketua='$foto_ketua',
        foto_wakil='$foto_wakil'
        WHERE id_kandidat ='".$r['id_kandidat']."'");
        
			if($query){
				echo "<script>alert('Data Diubah')</script>";
				echo "<script>location='index.php?p=kandidat'</script>";
				}
	}
?>
