<?php
if($row['foto_wakil'] == "default.png"){
?>
<section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

         <div class="section-title">
          <h2 class="py-3">Calon Kandidat <?php echo $row['id_kandidat'];?></h2>
        </div>
        <div class="text-center">
            <img class="p-3" width="200" src="assets/img/kandidat/<?php echo $row['foto_ketua']; ?>">
        </div>
        <div class="row">
            <div class="text-center py-4">
				<h3 class="fw-bolder">Ketua</h3>
                <h5><?php echo $row['nama_ketua'];?></h5>
			</div>
            <div class="container p-5">
                <div class="row">
                    <div class="col text-center">
				        <h3 class="fw-bolder">Visi</h3>
                        <h6 class="fw-italic fw-bold">"<?php echo $row['visi'];?>"</h6>
                    </div>
                    <div class="col">
				        <h3 class="fw-bold text-center">Misi</h3>
                        <h5 class="float-md-start">
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
                        </h5>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section>
<?php
}else {
?>
<section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="py-3">Calon Kandidat <?php echo $row['id_kandidat'];?></h2>
        </div>
        <div class="text-center">
            <img class="p-2" width="200" src="assets/img/kandidat/<?php echo $row['foto_ketua']; ?>">
            <img class="p-2" width="200" src="assets/img/kandidat/<?php echo $row['foto_wakil']; ?>">
        </div>
        <div class="row">
            <div class="text-center py-4">
				<h3 class="fw-bolder">Ketua</h3>
                <h5><?php echo $row['nama_ketua'];?></h5>
			</div>
            <div class="text-center py-4">
				<h3 class="fw-bolder">Wakil</h3>
                <h5><?php echo $row['nama_wakil'];?></h5>
			</div>
            <div class="container p-5">
                <div class="row">
                    <div class="col text-center">
				        <h3 class="fw-bolder">Visi</h3>
                        <h6 class="fw-italic fw-bold">"<?php echo $row['visi'];?>"</h6>
                    </div>
                    <div class="col">
				        <h3 class="fw-bold text-center">Misi</h3>
                        <h5 class="float-md-start">
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
                        </h5>
                    </div>
                </div>
            </div>
        </div>
					
      </div>
    </section>
<?php
}
?>