 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      	<div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Hasil Akhir</h2>
            <p> Disini kami selaku panitia dari PEMIRA mencoba untuk transparans mengenai hasil pemungutan suara dari pemilihan
                ketua hima 2022. Hal ini juga sebagai menjalankan salah satu azas dari PEMIRA yakni jujur dan adil.
                Apa yang ditayangkan merupakan hasil apa adanya tanpa ada ditambahi maupun dikurangi.
            </p>
          </div>
          
<div class="container-fluid">

	<div class="row justify-content-center">
	<?php 
		$sql_seluruh_mahasiswa = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos");
		$data_seluruh_mahasiswa = mysqli_num_rows($sql_seluruh_mahasiswa);

		//Angkatan 2020
		//Teknik Informatika
		$sql_seluruh_mahasiswaTI2020 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'teknik informatika'");
		$sql_seluruh_mahasiswaTI2020sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'teknik informatika' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaTI2020belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'teknik informatika' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaTI2020 = mysqli_num_rows($sql_seluruh_mahasiswaTI2020);
		$data_seluruh_mahasiswaTI2020sudah = mysqli_num_rows($sql_seluruh_mahasiswaTI2020sudah);
		$data_seluruh_mahasiswaTI2020belum = mysqli_num_rows($sql_seluruh_mahasiswaTI2020belum);

		//Teknologi Hasil Pertanian
		$sql_seluruh_mahasiswaTHP2020 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'teknologi hasil pertanian'");
		$sql_seluruh_mahasiswaTHP2020sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'teknologi hasil pertanian' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaTHP2020belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'teknologi hasil pertanian' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaTHP2020 = mysqli_num_rows($sql_seluruh_mahasiswaTHP2020);
		$data_seluruh_mahasiswaTHP2020sudah = mysqli_num_rows($sql_seluruh_mahasiswaTHP2020sudah);
		$data_seluruh_mahasiswaTHP2020belum = mysqli_num_rows($sql_seluruh_mahasiswaTHP2020belum);

		//Akuntansi
		$sql_seluruh_mahasiswaAKN2020 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'akuntansi'");
		$sql_seluruh_mahasiswaAKN2020sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'akuntansi' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaAKN2020belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2020' 
		AND prodi_pencoblos = 'akuntansi' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaAKN2020 = mysqli_num_rows($sql_seluruh_mahasiswaAKN2020);
		$data_seluruh_mahasiswaAKN2020sudah = mysqli_num_rows($sql_seluruh_mahasiswaAKN2020sudah);
		$data_seluruh_mahasiswaAKN2020belum = mysqli_num_rows($sql_seluruh_mahasiswaAKN2020belum);



		//Angkatan 2021
		//Teknik Informatika
		$sql_seluruh_mahasiswaTI2021 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'teknik informatika'");
		$sql_seluruh_mahasiswaTI2021sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'teknik informatika' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaTI2021belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'teknik informatika' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaTI2021 = mysqli_num_rows($sql_seluruh_mahasiswaTI2021);
		$data_seluruh_mahasiswaTI2021sudah = mysqli_num_rows($sql_seluruh_mahasiswaTI2021sudah);
		$data_seluruh_mahasiswaTI2021belum = mysqli_num_rows($sql_seluruh_mahasiswaTI2021belum);

		//Teknologi Hasil Pertanian
		$sql_seluruh_mahasiswaTHP2021 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'teknologi hasil pertanian'");
		$sql_seluruh_mahasiswaTHP2021sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'teknologi hasil pertanian' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaTHP2021belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021'
		AND prodi_pencoblos = 'teknologi hasil pertanian' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaTHP2021 = mysqli_num_rows($sql_seluruh_mahasiswaTHP2021);
		$data_seluruh_mahasiswaTHP2021sudah = mysqli_num_rows($sql_seluruh_mahasiswaTHP2021sudah);
		$data_seluruh_mahasiswaTHP2021belum = mysqli_num_rows($sql_seluruh_mahasiswaTHP2021belum);

		//Akuntansi
		$sql_seluruh_mahasiswaAKN2021 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'akuntansi'");
		$sql_seluruh_mahasiswaAKN2021sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021'
		AND prodi_pencoblos = 'akuntansi' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaAKN2021belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2021' 
		AND prodi_pencoblos = 'akuntansi' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaAKN2021 = mysqli_num_rows($sql_seluruh_mahasiswaAKN2021);
		$data_seluruh_mahasiswaAKN2021sudah = mysqli_num_rows($sql_seluruh_mahasiswaAKN2021sudah);
		$data_seluruh_mahasiswaAKN2021belum = mysqli_num_rows($sql_seluruh_mahasiswaAKN2021belum);


		//Angkatan 2022
		//Teknik Informatika
		$sql_seluruh_mahasiswaTI2022 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022' 
		AND prodi_pencoblos = 'teknik informatika'");
		$sql_seluruh_mahasiswaTI2022sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022'
		AND prodi_pencoblos = 'teknik informatika' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaTI2022belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022' 
		AND prodi_pencoblos = 'teknik informatika' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaTI2022 = mysqli_num_rows($sql_seluruh_mahasiswaTI2022);
		$data_seluruh_mahasiswaTI2022sudah = mysqli_num_rows($sql_seluruh_mahasiswaTI2022sudah);
		$data_seluruh_mahasiswaTI2022belum = mysqli_num_rows($sql_seluruh_mahasiswaTI2022belum);

		//Teknologi Hasil Pertanian
		$sql_seluruh_mahasiswaTHP2022 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022' 
		AND prodi_pencoblos = 'teknologi hasil pertanian'");
		$sql_seluruh_mahasiswaTHP2022sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022'
		AND prodi_pencoblos = 'teknologi hasil pertanian' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaTHP2022belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022'
		AND prodi_pencoblos = 'teknologi hasil pertanian' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaTHP2022 = mysqli_num_rows($sql_seluruh_mahasiswaTHP2022);
		$data_seluruh_mahasiswaTHP2022sudah = mysqli_num_rows($sql_seluruh_mahasiswaTHP2022sudah);
		$data_seluruh_mahasiswaTHP2022belum = mysqli_num_rows($sql_seluruh_mahasiswaTHP2022belum);

		//Akuntansi
		$sql_seluruh_mahasiswaAKN2022 = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022' 
		AND prodi_pencoblos = 'akuntansi'");
		$sql_seluruh_mahasiswaAKN2022sudah = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022'
		AND prodi_pencoblos = 'akuntansi' 
		AND status_pencoblosan = 1");
		$sql_seluruh_mahasiswaAKN2022belum = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos 
		WHERE tahun_angkatan = '2022' 
		AND prodi_pencoblos = 'akuntansi' 
		AND status_pencoblosan = 0");
		$data_seluruh_mahasiswaAKN2022 = mysqli_num_rows($sql_seluruh_mahasiswaAKN2022);
		$data_seluruh_mahasiswaAKN2022sudah = mysqli_num_rows($sql_seluruh_mahasiswaAKN2022sudah);
		$data_seluruh_mahasiswaAKN2022belum = mysqli_num_rows($sql_seluruh_mahasiswaAKN2022belum);

        $no=1;
		$query = mysqli_query($koneksi,"SELECT * FROM tb_kandidat JOIN tb_misi ON tb_kandidat.id_misi = tb_misi.id_misi");
		while ($row=mysqli_fetch_assoc($query)) {
              
        if($row['foto_wakil'] == "default.png"){
	?>
		<div class="col-lg-6">
			<div class="card o-hidden border-0 shadow-lg">
  			  	<div class="card-body p-0">
      				<div class="row">
      					<div class="col-lg-12">
      				    	<div class="p-5">
						  		<div class="text-center">
								  	<h2 class="p-5">CALON <?php echo $no++ ?></h2>
              						<ul>
                  						<img class="p-2" width="200px" src="assets/img/kandidat/<?php echo $row['foto_ketua']; ?>">
              						</ul>
            						<?php
            						  $id_kandidat = $row['id_kandidat'];
            						  $sql = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos");
            						  $sql_memilih = mysqli_query($koneksi,"SELECT * FROM tb_data_terkumpul WHERE id_kandidat = '$id_kandidat'");
            						  $banyak_pencoblos = mysqli_num_rows($sql_memilih);
            						  $total_data_pencoblos = mysqli_num_rows($sql);

            						  $persentase = $banyak_pencoblos / $total_data_pencoblos * 100;
            						?>
									<div class="p-5">
										<div class="progress">
              						  		<div class="progress-bar" role="progressbar" style="width: <?php echo $persentase; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo round($persentase); ?>%</div>
              							</div>
									</div>
               			  		</div>        
      				    	</div>
         				</div>
        			</div>
            	</div>
            </div>
		</div>
        <?php	
            }else{ 
				?>

		<div class="col-lg-6">
			<div class="card o-hidden border-0 shadow-lg">
  			  	<div class="card-body p-0">
      				<div class="row">
      					<div class="col-lg-12">
      				    	<div class="p-5">
						  		<div class="text-center">
								  	<h2 class="p-5">CALON <?php echo $no++ ?></h2>
              						<ul>
                  						<img class="p-2" width="200px" src="assets/img/kandidat/<?php echo $row['foto_ketua']; ?>">
										<img class="p-2" width="200px" src="assets/img/kandidat/<?php echo $row['foto_wakil']; ?>">
              						</ul>
            						<?php
            						  $id_kandidat = $row['id_kandidat'];
            						  $sql = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos");
            						  $sql_memilih = mysqli_query($koneksi,"SELECT * FROM tb_data_terkumpul WHERE id_kandidat = '$id_kandidat'");
            						  $banyak_pencoblos = mysqli_num_rows($sql_memilih);
            						  $total_data_pencoblos = mysqli_num_rows($sql);

            						  $persentase = $banyak_pencoblos / $total_data_pencoblos * 100;
            						?>
									<div class="p-5">
										<div class="progress">
              						  		<div class="progress-bar" role="progressbar" style="width: <?php echo $persentase; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo round($persentase); ?>%</div>
              							</div>
									</div>
               			  		</div>        
      				    	</div>
         			  	</div>
        			</div>
            	</div>
        	</div>
		</div>
	<?php 	}
	?>
	<?php }
	?>
</div>
</div>

<div class="container-fluid my-4">
	<div class="row justify-content">
		<div class="col-lg-12">
			<div class="card o-hidden border-0 shadow-lg">
  			  <div class="card-body p-0">
      			<div class="row">
      				<div class="col-lg-12">
      				    <div class="p-5">
						  	<div class="text-center p-5">
                          		<h1 class="fw-bold">
						  			Jumlah seluruh mahasiswa UNS PSDKU : <?php echo $data_seluruh_mahasiswa;?>
                          		</h1>
               			  	</div> 	
								<hr>
                          		<h3 class="fw-bold my-4">
						  			Jumlah seluruh Mahasiswa Teknik Informatika
                          		</h3>	
								<h5 class="fw-bold">
						  			Angkatan 2020
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaTI2020;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTI2020sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTI2020belum;?></h6>
                                        </li>
                                    </ul>

								<h5 class="fw-bold my-4">
						  			Angkatan 2021
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaTI2021;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTI2021sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTI2021belum;?></h6>
                                        </li>
                                    </ul>
								<h5 class="fw-bold">
						  			Angkatan 2022
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaTI2022;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTI2022sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTI2022belum;?></h6>
                                        </li>
                                    </ul>

								<hr>
								
								<h3 class="fw-bold">
						  			Jumlah seluruh Mahasiswa Teknologi Hasil Pertanian
                          		</h3>	

								<h5 class="fw-bold my-4">
						  			Angkatan 2020
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2020;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2020sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2020belum;?></h6>
                                        </li>
                                    </ul>

								<h5 class="fw-bold my-4">
						  			Angkatan 2021
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2021;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2021sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2021belum;?></h6>
                                        </li>
                                    </ul>

								<h5 class="fw-bold my-4">
						  			Angkatan 2022
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2022;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2022sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaTHP2022belum;?></h6>
                                        </li>
                                    </ul>

								<hr>
								<h3 class="fw-bold">
						  			Jumlah seluruh Mahasiswa Akuntansi
                          		</h3>	

								<h5 class="fw-bold my-4">
						  			Angkatan 2020
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2020;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2020sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2020belum;?></h6>
                                        </li>
                                    </ul>

								<h5 class="fw-bold my-4">
						  			Angkatan 2021
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2021;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2021sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2021belum;?></h6>
                                        </li>
                                    </ul>

								<h5 class="fw-bold my-4">
						  			Angkatan 2022
                          		</h5>

								  <ul class="list-inline py-3">
                                        <li class="list-inline-item">
                                            <h6>Seluruh Jumlah Mahasiswa</h6>
                                            <h6>Jumlah Mahasiswa yang sudah memilih</h6>
                                            <h6>Jumlah Mahasiswa yang belum memilih</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6>:</h6>
                                            <h6>:</h6>
                                            <h6>:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2022;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2022sudah;?></h6>
                                            <h6><?php echo $data_seluruh_mahasiswaAKN2022belum;?></h6>
                                        </li>
                                    </ul>
								<hr>       
      				    </div>
         			  </div>
        			</div>
            	 </div>
            </div>
		</div>
	</div>
</div>

<div class="container-fluid my-4">
	<div class="row justify-content">
		<div class="col-lg-12">
			<div class="card o-hidden border-0 shadow-lg">
  			  <div class="card-body p-0">
      			<div class="row">
      				<div class="col-lg-12">
      				    <div class="p-5">
						  	<div class="text-center p-5">
                          		<h1 class="fw-bold">
						  			Cek Status Anda
                          		</h1>
               			  	
         			  </div>
        			</div>
            	 </div>
            </div>
		</div>
	</div>
</div>

</section>
 <!--end layanan -->