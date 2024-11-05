
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-right" data-aos-delay="200">
          <img src="assets/img/Logo Kabinaet Gama Adhigana.png" class="img-fluid animated" alt="">
        </div> 
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <h1> PEMIRA 2023 </h1>
          <h2>Dari Kami untuk UNS dan Indonesia</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#pricing" class="btn-get-started scrollto bg-warning">Pilih Kandidat</a>
            <!-- <a href="index.php?p=hasil_akhir" class="btn-get-started scrollto bg-success">Hasil Akhir</a> -->
          </div> 
        </div> 
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up"> 

        <div class="section-title">
          <h2>Calon Kandidat</h2>
          <p>Mari berpartisipasi dalam pemilihan calon Ketua HIMA untuk memilih pemimpin terbaik yang akan mewakili dan memajukan himpunan kita.</p>
        </div>
        
        <div class="row text-center">
          <?php 
          $no=1;
					$query = mysqli_query($koneksi,"SELECT * FROM tb_kandidat JOIN tb_misi ON tb_kandidat.id_misi = tb_misi.id_misi");
						while ($row=mysqli_fetch_assoc($query)) {
              
            if($row['foto_wakil'] == "default.png"){
				?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h2>CALON <?php echo $no++ ?></h2>
              <ul class="text-center">
                  <img class="p-3" width="200" src="assets/img/kandidat/<?php echo $row['foto_ketua']; ?>">
              </ul>
              <?php
                $id_kandidat = $row['id_kandidat'];
                $sql = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos");
                $sql_memilih = mysqli_query($koneksi,"SELECT * FROM tb_data_terkumpul WHERE id_kandidat = '$id_kandidat'");
                $banyak_pencoblos = mysqli_num_rows($sql_memilih);
                $total_data_pencoblos = mysqli_num_rows($sql);

                $persentase = $banyak_pencoblos / $total_data_pencoblos * 100;
              ?>
               <!-- <div class="progress">
                <div class="progress-bar py-2" role="progressbar" style="width: <?php echo $persentase; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo round($persentase); ?>%</div>
              </div> -->
              <div class="p-5">
              <div class="text-center">
                <a href="index.php?p=detail_kandidat&id=<?php echo $row['id_kandidat']?>" class="btn btn-primary"><i class="bi bi-eye"></i> Detail Kandidat</a>
                <a href="index.php?p=pilih_kandidat&id=<?php echo $row['id_kandidat'];?>" class="btn btn-success" onclick="return confirm('Apakah Anda yakin untuk melakukan pemilihan pada kandidat ini?')">Pilih Kandidat</a>
              </div>
              </div>
            </div>
          </div>
        <?php	
            }else{ 
				?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h2>CALON <?php echo $no++ ?></h2>
              <ul class="text-center">
									<img class="p-3" width="200" src="assets/img/kandidat/<?php echo $row['foto_ketua']; ?>"> 
							    <img class="p-3" width="200" src="assets/img/kandidat/<?php echo $row['foto_wakil']; ?>">
              </ul>
              <?php
                $id_kandidat = $row['id_kandidat'];
                $sql = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos");
                $sql_memilih = mysqli_query($koneksi,"SELECT * FROM tb_data_terkumpul WHERE id_kandidat = '$id_kandidat'");
                $banyak_pencoblos = mysqli_num_rows($sql_memilih);
                $total_data_pencoblos = mysqli_num_rows($sql);

                $persentase = $banyak_pencoblos / $total_data_pencoblos * 100;
              ?>
              <!-- <div class="progress">
                <div class="progress-bar py-2" role="progressbar" style="width: <?php echo $persentase; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo round($persentase); ?>%</div>
              </div> -->
              <div class="p-5">
              <div class="text-center">
              <a href="index.php?p=detail_kandidat&id=<?php echo $row['id_kandidat']?>" class="btn btn-primary"><i class="bi bi-eye"></i> Detail Kandidat</a>
              <a href="index.php?p=pilih_kandidat&id=<?php echo $row['id_kandidat'];?>" class="btn btn-success" onclick="return confirm('Apakah Anda yakin untuk melakukan pemilihan pada kandidat ini?')">Pilih Kandidat</a>
              </div>
              </div>
            </div> 
          </div>
	<?php 	}
				 		?><?php }
				 		  ?>
        </div>
					

      </div>
    </section>