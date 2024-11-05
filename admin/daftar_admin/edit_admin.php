 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
        <div class="container-fluid">
            <h1 class="section-title">Ubah data</h1>

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
               					<input class="form-control" type="text" name="nama"  value="<?php echo $r['nama'];?>" required>
		   					</div>
							
							<div class="form-group cols-sm-6">
               					<label>Username</label>
              					<input class="form-control" type="text" name="username" value="<?php echo $r['username']; ?>" required>
			 				</div>
							 <div class="form-group cols-sm-6 mt-4">
								<select class="btn dropdown-toggle" name="level" required>
									<option value="<?php echo $r['level'];?>" <?php if ( $r['level'] == $r['level']) echo 'selected="selected"'; ?>>
                                        <a><?php echo $r['level'];?></a>
                                    </option>
									<option  value="admin">Admin_Utama</option>
									<option  value="advokesma">Admin_Advokesma</option>
									<option  value="humas">Admin_Humas</option>
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
		$nama_update = ($_POST['nama']);
		$user_update = ($_POST['username']);
		$level_update = ($_POST['level']);
		$query=mysqli_query($koneksi,"UPDATE tb_admin SET nama='".$nama_update."', username='".$user_update."', level='".$level_update."'
									  WHERE id ='".$_GET['id']."'");
			if($query){
				echo "<script>alert('Data Diubah')</script>";
				echo "<script>location='index.php?p=daftar'</script>";
				}
	}
?>

