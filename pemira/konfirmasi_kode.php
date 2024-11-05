 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Verivikasi Kode</h2>
            <p> Masukkan kode verifikasi (6 digit) untuk melanjutkan proses meilihan, pastikan Anda sudah melakukan registrasi kepada 
                petugas untuk mendapatkan kode verifikasi.
            </p>
          </div>

 <div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg">
  			  <div class="card-body p-0">
      			<div class="row">
      				<div class="col-lg-12">
      				    <div class="p-5">
						  <div class="text-center">
               			  </div>
                   		    <form class= "card-body" method="POST" enctype="multipart/form-data">
						 	<div class="form-group cols-sm-6 text-center">
                              	<input class="form-control" type="number" name="kode_verifikasi"  placeholder="Masukkan kode verifikasi..." required>
			               	</div>
                            <div class="form-group cols-sm-6 mt-4">
                            	<input type="submit" name="input" value="Lanjutkan" class="btn btn-success">
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
        
        $kode_verifikasi = mysqli_real_escape_string($koneksi,$_POST['kode_verifikasi']);
        $query = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos WHERE kode_pencoblos='$kode_verifikasi'");
        
        $data_pencoblos = mysqli_fetch_assoc($query);

        $id_kandidat = $row['id_kandidat'];
        $id_pencoblos = $data_pencoblos['id_pencoblos'];

        $sql = mysqli_query($koneksi,"SELECT * FROM tb_data_terkumpul WHERE id_pencoblos='$id_pencoblos'");

        $cek_data = mysqli_num_rows($query);
        $cek_data_pencoblos = mysqli_num_rows($sql);

        if($cek_data_pencoblos == 0){
            if($cek_data > 0){
                $query_pilih = mysqli_query($koneksi,"INSERT INTO tb_data_terkumpul
                VALUES (NULL, '$id_pencoblos', '$id_kandidat')");
                    if($query_pilih){
                        $query = mysqli_query($koneksi,"UPDATE tb_pencoblos SET 
        status_pencoblosan = 1
        WHERE id_pencoblos ='".$id_pencoblos."'");
        
			if($query){
                echo"<script>
                    alert('Proses pemilihan kandidat Anda sudah selesai, data akan tersimpan secara otomatis. Terimakasih sudah berpatisipasi dalam pemilihan ketua HIMA PSDKU');
                </script>";
                      echo "<script>location='index.php?p=beranda'</script>";
				}else{
                    echo "<script>alert('Proses gagal')</script>";
                }
		    	    }else{
		    		    echo "<script>alert('Proses gagal')</script>";
		    	    }
            }else{
                echo "<script>alert('Gagal Memverifikasi kode')</script>";
            }
        }else{
            echo"<script>
            alert('Mohon maaf Anda sudah melakukan pemilihan sebelumnya. Terimakasih sudah berpatisipasi dalam pemilihan ketua HIMA PSDKU');
            </script>";
            echo "<script>location='index.php?p=beranda'</script>";
        }
	}
?>
