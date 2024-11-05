 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Daftar Pesan</h2>
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
						 	<div class="form-group cols-sm-6">
                              	<label>Nama</label>
                              	<input class="form-control" type="text" name="nama"  placeholder="Masukkan Nama..." required>
			               	</div>
							
							<div class="form-group cols-sm-6 mt-4">
                              	<label>Username</label>
                              	<input class="form-control" type="text" name="username" placeholder="Masukkan username..." required>
			               	</div>
							
							<div class="form-group cols-sm-6 mt-4">
                              	<label>Password</label>
                              	<input class="form-control" type="password" name="password" placeholder="Masukkan Password..." required>
			               	</div>
							
							<div class="form-group cols-sm-6 mt-4">
								<select class="btn dropdown-toggle" name="level" required>
									<option  selected disabled="">Pilih Level</option>
									<option  value="admin">Admin_Utama</option>
									<option  value="advokesma">Admin_Advokesma</option>
									<option  value="humas">Admin_Humas</option>
								</select>
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
		$password = md5($_POST['password']);
		$query=mysqli_query($koneksi,"INSERT INTO tb_admin VALUES (NULL,'".$_POST['nama']."','".$_POST['username']."','".$password."','".$_POST['level']."')");
			if($query){
				echo "<script>location='index.php?p=daftar'</script>";
				}
	}
?>
