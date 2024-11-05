<!-- ======= Contact Section ======= -->
<section class="layanan">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Form Login Admin</h2>
        </div>

            <div class="row">
              <div>
                <div class="info">

                    <form class="user" method="POST">
						<div class="form-group">
							<input id="username" type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
						</div><br>
						<div class="form-group">
							<input id="password" type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
						</div><br>
							<input type="submit" name="login" value="Login" class="btn btn-success">
                        </div>
					</form>

                </div>
              </div>
            </div>  
        
<?php 
	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($koneksi,$_POST['username']);
		$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
	
		$sql_petugas = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$username' 
		AND password='$password'");
		$cek_petugas = mysqli_num_rows($sql_petugas);
		$data_petugas = mysqli_fetch_assoc($sql_petugas);

		if($cek_petugas>0){
			if($data_petugas['level']=="advokesma"){
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['data']=$data_petugas;
				header('location:admin_advo/');
			}
			elseif($data_petugas['level']=="admin"){
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['data']=$data_petugas;
				echo "<script>location='admin/'</script>";
			}
			elseif($data_petugas['level']=="humas"){
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['data']=$data_petugas;
				header('location:admin_humas/');
			}
		}
		else{
			echo "<script>alert('Username atau Password Salah')</script>";
		}

	}
 ?>
 
    </div></section>
 <!--end layanan -->    
 