  <main id="main">
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Pengalaman Pekerjaan</h2>
          <p>Pekerjaan merupakan salah satu cara untuk bertahan hidup, di dalam sebuah pekerjaan terdapat rejeki yang kita terima. Besar kecilnya dari sebuah rejeki yang kita terima, sudah seharusnya kita harus bersyukur atas nikmat tersebut dan harus selalu tersenyum dan bahagia.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title"></h3>
            <div class="resume-item">
              <?php
              foreach ($Allpekerjaan1 as $pekerjaan1) {
              ?>
                <h4><?= $pekerjaan1['nama_pekerjaan']; ?></h4>
                <h5><?= $pekerjaan1['lama_kerja']; ?></h5>
                <p><em>
                    <td><?= $pekerjaan1['nama_perusahaan']; ?>
                  </em></p>
              <?php } ?>
              <ul>
                <li>Memberikan Pengabdian kepada masyarakat dengan memberikan kebahagiaan yang kita punya, baik dari segi pendidikan maupun material</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->