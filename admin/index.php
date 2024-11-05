<?php 
	session_start();
	include 'conn/config.php';
	if(!isset($_SESSION['username'])){
		echo "<script>location='index.php'</script>";
	}
	elseif($_SESSION['data']['level'] != "admin"){
		echo "<script>location='../index.php'</script>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> PEMIRA 2023 </title>

  <!-- Favicons -->
  <link href="../assets/img/Logo Kabinaet Gama Adhigana.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="../assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="../assets/img/logo_header.png"></a></h1><br>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php?p=beranda">Beranda</a></li>

          <li><a class="nav-link scrollto" href="index.php?p=daftar">Data Admin</a></li>

          <li><a class="nav-link scrollto" href="index.php?p=kandidat">Data Kandidat</a></li>

          <li><a class="nav-link scrollto" href="index.php?p=pencoblos">Data Pencoblos</a></li>

          <li><a class="nav-link scrollto" href="index.php?p=hasil_akhir">Hasil Akhir</a></li>

          <li><a class="nav-link scrollto" href="index.php?p=cek">Cek Kode</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle">
        
        </i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
    <!-- Navbar -->
  	<?php
		if(@$_GET['p']==""){
			include_once 'beranda.php';
		}
		elseif(@$_GET['p']=="beranda"){
      include_once 'beranda.php';
    }
    elseif(@$_GET['p']=="daftar"){
      include_once 'daftar_admin/admin.php';
    }
    elseif(@$_GET['p']=="tambah"){
      include_once 'daftar_admin/tambah_admin.php';
    }
    elseif(@$_GET['p']=="edit_data"){
      $query=mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE id ='".$_GET['id']."'");
      while ($r = mysqli_fetch_assoc($query)) {
          include_once 'daftar_admin/edit_admin.php';
      }
			
    }
		elseif(@$_GET['p']=="delete"){
			$query = mysqli_query($koneksi,"DELETE FROM tb_admin WHERE id='".$_GET['id']."'");
			if($query){
				header('location:index.php?p=daftar');
			}
    }

    //pemira
    //kandidat
    elseif(@$_GET['p']=="kandidat"){
      include_once 'daftar_kandidat/kandidat.php';
    }
    elseif(@$_GET['p']=="tambah_kandidat"){
      include_once 'daftar_kandidat/tambah_kandidat.php';
    }
    elseif(@$_GET['p']=="update_data_kandidat"){
      $query=mysqli_query($koneksi,"SELECT * FROM tb_kandidat WHERE id_kandidat ='".$_GET['id']."'");
      while ($r = mysqli_fetch_assoc($query)) {
        include_once 'daftar_kandidat/ubah_kandidat.php';
      }
    }
    elseif(@$_GET['p']=="delete_data_kandidat"){
      $query = mysqli_query($koneksi,"DELETE FROM tb_kandidat WHERE id_kandidat ='".$_GET['id']."'");
			if($query){
        $query_misi = mysqli_query($koneksi,"DELETE FROM tb_misi WHERE id_misi ='".$_GET['id']."'");
        if($query_misi){
          header('location:index.php?p=kandidat');
        }
			}
    }

    //pencoblos
    elseif(@$_GET['p']=="pencoblos"){
      include_once 'daftar_pencoblos/pencoblos.php';
    }
    elseif(@$_GET['p']=="tambah_pencoblos"){
      include_once 'daftar_pencoblos/tambah_pencoblos.php';
    }
    elseif(@$_GET['p']=="update_data_pencoblos"){
      $query=mysqli_query($koneksi,"SELECT * FROM tb_pencoblos WHERE id_pencoblos ='".$_GET['id']."'");
      while ($r = mysqli_fetch_assoc($query)) {
        include_once 'daftar_pencoblos/ubah_pencoblos.php';
      }
    }
    elseif(@$_GET['p']=="delete_data_pencoblos"){
      $query_select = mysqli_query($koneksi,"SELECT * FROM tb_data_terkumpul WHERE id_pencoblos ='".$_GET['id']."'");
      $data_pemilih = mysqli_num_rows($query_select);
      if ($data_pemilih > 0) {
      $query = mysqli_query($koneksi,"DELETE FROM tb_data_terkumpul WHERE id_pencoblos ='".$_GET['id']."'");
			if($query){
        $query_misi = mysqli_query($koneksi,"DELETE FROM tb_pencoblos WHERE id_pencoblos ='".$_GET['id']."'");
        if($query_misi){
          if($query){
              echo"<script>
                  alert('Data berhasil dihapus');
              </script>";
                    echo "<script>location='index.php?p=pencoblos'</script>";
          }
        }
    }
    }else{
      echo "<script>alert('Mahasiswa belum melakukan pemilihan')</script>";
      echo "<script>location='index.php?p=pencoblos'</script>";
    }
  }

    //hasil_akhir
    elseif(@$_GET['p']=="hasil_akhir"){
      include_once 'hasil_akhir/hasil_akhir.php';
    }
    elseif(@$_GET['p']=="tambah_pencoblos"){
      include_once 'daftar_pencoblos/tambah_pencoblos.php';
    }

    //cek kode
    if(@$_GET['p']=="cek_kode"){
      if(isset($_POST['cek'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        
        $query=mysqli_query($koneksi,"SELECT * FROM tb_pencoblos
        WHERE nama_pencoblos like '%".$nama."%' AND nim_pencoblos = '$nim'");
        $cek_data = mysqli_num_rows($query);
        if ($cek_data > 0) {
          while ($row = mysqli_fetch_assoc($query)) {
              include_once 'kode_verifikasi/kode_verifikasi.php';
          } 
        }else {
          include_once 'kode_verifikasi/kode_verifikasi_tidak_tersedia.php';
        }
      }
    }
    elseif(@$_GET['p']=="cek"){
      include_once 'kode_verifikasi/cek_kode.php';
    }
    ?>
    
		

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 footer-contact">
        <h3>Sekretariat</h3>
        <p>
          Jalan Imam Bonjol, <br>
          Sumbersoko, Pandean,<br>
          Kec. Mejayan, Kabupaten Madiun,<br>
          Jawa Timur 63153 <br><br>
          <strong>Gedung PSDKU UNS Sebelah Selatan <br> Lantai 1 sebelah kiri tangga</strong>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Kontak</h4>
        <ul>
          <li>
              <i class="bx bx-chevron-right"></i> 
              <a href = "mailto:himapsdkuuns@gmail.com">Email</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-links">
        <h4>Sosial Media</h4>
        <p>Muat semua informasi tentang Hima UNS PSDKU Kota Madiun dengan menjelajahi sosial media kami</p>
        <div class="social-links mt-3">
          <a href="https://www.tiktok.com/@himapsdkuuns_?is_from_webapp=1&sender_device=pc" class="tiktok"><i class="bx bxl-tiktok"></i></a>
          <a href="https://instagram.com/himapsdkuuns" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://twitter.com/himapsdkuuns?t=uJTRj6Be7Fp85g7XTrOhSg&s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCCyytIo3DtbmQ6h8RhJcqzw" class="youtube"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Himpunan Mahasiswa UNS PSDKU Madiun</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="#">HIMA - PSDM</a>
  </div>
</div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include 'kode_verifikasi/modal/form_cek_kode.php'; ?>
  <?php
  include 'misi.php';
  ?>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>  
  <script src="../assets/js/bootstrap.min.js"></script>  

</body>

</html>

<script>
	$(document).ready(function(){
		load_data();
		function load_data(keyword)
		{
			$.ajax({
				method:"POST",
				url:"daftar_pencoblos/data_pencoblos.php",
				data: {keyword: keyword},
				success:function(hasil)
				{
					$('#data').html(hasil);
      console.log(hasil);
				}
			});
	 	}
		$('#s_keyword').keyup(function(){
    		var keyword = $("#s_keyword").val();
			load_data(keyword);
      console.log(keyword);
		});
	});
  
$(document).ready(function(){
 
 $('#comment_form_fasilitas').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"pesan_fasilitas/post_fasilitas.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form_fasilitas')[0].reset();
     $('#comment_message_fasilitas').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"pesan_fasilitas/tampil_pesan.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment_fasilitas').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});

$(document).ready(function(){
 
 $('#comment_form_ukt').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"pesan_ukt/post_ukt.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form_ukt')[0].reset();
     $('#comment_message_ukt').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"pesan_ukt/tampil_pesan.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment_ukt').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});


$(document).ready(function(){
 
 $('#comment_form_hima').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"pesan_hima/post_hima.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form_hima')[0].reset();
     $('#comment_message_hima').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"pesan_hima/tampil_pesan.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment_hima').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});
</script>