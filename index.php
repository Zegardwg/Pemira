<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PEMIRA 2023</title>

  <!-- Favicons -->
  <link href="assets/img/Logo Kabinaet Gama Adhigana.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="assets/img/logo_header.png"></a></h1><br>

      <?php
      include 'navbar.php';
      ?>

    </div>
  </header><!-- End Header -->

  
  <!-- Navbar -->
    <?php
    include 'conn/config.php';
		if(@$_GET['p']==""){
			include_once 'beranda.php';
		}
		elseif(@$_GET['p']=="beranda"){
			include_once 'beranda.php';
    }
    elseif(@$_GET['p']=="sambutan"){
			include_once 'sambutan.php';
    }
    elseif(@$_GET['p']=="visi_misi"){
			include_once 'visi_misi.php';
    }
    elseif(@$_GET['p']=="arti_logo"){
			include_once 'arti_logo.php';
    }
    elseif(@$_GET['p']=="sejarah_hima"){
			include_once 'sejarah_hima.php';
    }
    ?>
    
    <!-- Pemira -->
    <?php
    if(@$_GET['p']=="detail_kandidat"){
      $query=mysqli_query($koneksi,"SELECT * FROM tb_kandidat JOIN tb_misi ON tb_kandidat.id_misi = tb_misi.id_misi
      WHERE tb_kandidat.id_kandidat ='".$_GET['id']."'");
      while ($row = mysqli_fetch_assoc($query)) {
          include_once 'pemira/detail_kandidat.php';
      }
    }
    if(@$_GET['p']=="pilih_kandidat"){
      $query=mysqli_query($koneksi,"SELECT * FROM tb_kandidat WHERE id_kandidat ='".$_GET['id']."'");
      while ($row = mysqli_fetch_assoc($query)) {
          include_once 'pemira/konfirmasi_kode.php';
      }
    }
    elseif(@$_GET['p']=="hasil_akhir"){
      include_once 'hasil_akhir/hasil_akhir.php';
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>  
  <script src="assets/js/bootstrap.min.js"></script>  

</body>

</html>

<script>
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