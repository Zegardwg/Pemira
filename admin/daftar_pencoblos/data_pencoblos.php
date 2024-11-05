
<div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                
            <tr>
                        <th>No</th> 
                        <th>Kode Pencoblos</th>
                        <th>NIM Pencoblos</th>
                        <th>Nama Pencoblos</th>
                        <th>Prodi Pencoblos</th>
                        <th>Tahun Angkatan</th>
                        <th>Status Pemilih</th>
                          <th>Opsi</th>
                    </tr>
<?php
	        include '../conn/config.php';
            $s_keyword="";
            $cek_data;
            if (isset($_POST['keyword'])) {
                $s_keyword = $_POST['keyword'];
                $query = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos WHERE nama_pencoblos LIKE '%" . $s_keyword . "%' OR nim_pencoblos LIKE '%" . $s_keyword . "%'");
                $cek_data = mysqli_num_rows($query);
            }else {
                $query = mysqli_query($koneksi,"SELECT * FROM tb_pencoblos");
                $cek_data = mysqli_num_rows($query);
            }
            
			$no=1;
 
            if ($cek_data > 0) {
                while ($row=mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['kode_pencoblos']; ?></td>
                        <td><?php echo $row['nim_pencoblos']; ?></td>
                        <td><?php echo $row['nama_pencoblos']; ?></td>
                        <td><?php echo $row['prodi_pencoblos']; ?></td>
                        <td><?php echo $row['tahun_angkatan']; ?></td>
                        <td>
                        <?php
                        if ($row['status_pencoblosan'] == 0) {
                                echo 'Belum Memilih';
                            }else {
                                echo 'Sudah Memilih';
                            }
                            ?>
                        </td>
                        <td>		
                            <a class="btn btn-primary" href="index.php?p=update_data_pencoblos&id=<?php echo $row['id_pencoblos']?>">Edit</a>
                             <a class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="index.php?p=delete_data_pencoblos&id=<?php echo $row['id_pencoblos']?>">Delete</a>
                            
                        </td>	
                    </tr>		 
                    <?php  
                        }
                     ?>
            <?php
        }else { ?> 
            <tr>
                <td colspan='7'>Tidak ada data ditemukan</td>
            </tr>
        <?php } ?>
        </table>
			   		<a class="btn btn-primary" href="index.php?p=tambah_pencoblos">Tambah Data</a>
	</div>

