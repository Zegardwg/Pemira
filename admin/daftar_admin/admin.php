 <!-- ======= Contact Section ======= -->
 <section class="layanan">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Daftar Admin Website pemilihan ketua HIMA</h2>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
								<tr>
									<th>No</th> 
									<th>Nama</th>
									<th>Username</th>
                	<th>Level   </th>
                	<th>Opsi</th>
								</tr>
								<?php 
									$no=1;
									$query = mysqli_query($koneksi,"SELECT * FROM tb_admin ORDER BY id ASC");
									while ($r=mysqli_fetch_assoc($query)) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $r['nama']; ?></td>
									<td><?php echo $r['username']; ?></td>
									<td><?php echo $r['level']; ?></td>
									<td>						
										<a class="btn btn-primary" href="index.php?p=edit_data&id=<?php echo $r['id']?>">Edit</a>
 			            	<a class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="index.php?p=delete&id=<?php echo $r['id']?>">Delete</a>	
										 
								<?php  
									}
             		?>
									</td>
								</tr>
			   	</table>
			   		<a class="btn btn-primary" href="index.php?p=tambah">Tambah Data</a>
 			 		</div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--end data -->
