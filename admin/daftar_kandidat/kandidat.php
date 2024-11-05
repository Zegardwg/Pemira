 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Daftar Kandidat Ketua HIMA PSDKU UNS </h2>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
				<tr>
					<th>No</th> 
					<th>kode_kandidat</th>
					<th>Nama Ketua</th>
					<th>Nama Wakil</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>foto Ketua</th>
                    <th>foto Wakil</th>
                    <th>Opsi</th>
				</tr>

				<?php 
					$no=1;
					$query = mysqli_query($koneksi,"SELECT * FROM tb_kandidat JOIN tb_misi ON tb_kandidat.id_misi = tb_misi.id_misi");
						while ($row=mysqli_fetch_assoc($query)) {
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $row['kode_kandidat']; ?></td>
					<td><?php echo $row['nama_ketua']; ?></td>
					<td><?php echo $row['nama_wakil']; ?></td>
					<td><?php echo $row['visi']; ?></td>
					<td>
					<?php echo $row['misi1']; ?> <br>
					<?php echo $row['misi2']; ?> <br>
					<?php echo $row['misi3']; ?> <br>
					<?php echo $row['misi4']; ?> <br>
					<?php echo $row['misi5']; ?> <br>
					<?php echo $row['misi6']; ?> <br>
					<?php echo $row['misi7']; ?> <br>
					<?php echo $row['misi8']; ?> <br>
					<?php echo $row['misi9']; ?> <br>
					<?php echo $row['misi10']; ?> <br>
					</td>
					<td><?php 
								if($row['foto_ketua']== NULL){ ?>
									<img src="./../assets/img/design/kosong/default.PNG" width="50">
						<?php	}else{ 
						?>
									<img width="100" src="./../assets/img/kandidat/<?php echo $row['foto_ketua']; ?>"> 
						<?php 	}
				 		?>
					</td>
                    <td><?php 
								if($row['foto_wakil'] == NULL){ ?>
									<img src="./../assets/img/design/kosong/default.PNG" width="50">
						<?php	}else{ 
						?>
									<img width="100" src="./../assets/img/kandidat/<?php echo $row['foto_wakil']; ?>"> 
						<?php 	}
				 		?>
					</td>
					<td>
						<a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Misi</a>				
						<a class="btn btn-primary" href="index.php?p=update_data_kandidat&id=<?php echo $row['id_kandidat']?>">Edit</a>
 			    	    <a class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="index.php?p=delete_data_kandidat&id=<?php echo $row['id_kandidat']?>">Delete</a>
									 
				<?php  
					}
             	?>
					</td>
                </tr>
			   	</table>
			   		<a class="btn btn-primary" href="index.php?p=tambah_kandidat">Tambah Data</a>
 			</div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--end data -->
