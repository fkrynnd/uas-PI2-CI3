 <main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="d-flex flex-column justify-content-center align-items-center">
   <div class="container">

    <div class="section-title">
     <h2>About Me</h2>
    
    </div>

    <div class="row">
     <div class="col-lg-4" data-aos="fade-right">
      <img src="assets_tampilan/img/profile-img.jpg" class="img-fluid" alt="">
     </div>
     <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      <h3>Programmer &amp; Web Developer.</h3>
      <p class="fst-italic">
      </p>
      <div class="row">
       <div class="col-lg-6">
        <?php
        foreach ($Allabout as $about) {
        ?>
         <ul>
          <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span><?= $about['tgl_lahir']; ?></span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $about['alamat']; ?></span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>No Telephone:</strong> <span><?= $about['no_tlp']; ?></span></li>

         </ul>
       </div>
       <div class="col-lg-6">
        <ul>
         <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span><?= $about['umur']; ?></span></li>
         <li><i class="bi bi-chevron-right"></i> <strong>Hobi:</strong> <span><?= $about['hobi']; ?></span></li>
         <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span><?= $about['status']; ?></span></li>
        </ul>
       <?php } ?>
       </div>
      </div>
      <p>
       Saya adalah seorang mahasiswa Universitas CIC. Disini juga saya sebagai web developer dengan kemampuan programming yang sudah tidak di ragukan lagi. Siang malam saya bekerja selalu didepan layar.
     </div>
    </div>

   </div>
  </section><!-- End About Section -->