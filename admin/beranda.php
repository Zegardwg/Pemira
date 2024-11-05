<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-right" data-aos-delay="200">
          <img src="../assets/img/Logo Kabinaet Gama Adhigana.png" class="img-fluid animated" alt="">
      </div> 
      
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <h1>SELAMAT DATANG ADMIN</h1>
          <h2><?php echo ucwords($_SESSION['data']['nama']); ?></h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="logout.php" class="btn-get-started scrollto">Logout</a>
        </div>
      </div> 

    </div>
  </div>
</section>
    <!-- End Hero -->
  
