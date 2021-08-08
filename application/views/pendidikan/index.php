  <main id="main">
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>History Pendididkan</h2>
          <p>Pendidikan hanyalah sebuah formalitas dalam kehidupan, sebab ada yang lebih berharga dari sebuah pendidikan formalitas. Yaitu, alam raya sebagai pendidikan terbaik dan orang sekitar adalah guru terbaik.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sekolah Dasar</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Allsd as $sd) {
              ?>
                <h4><?= $sd['nama_sd']; ?></h4>
                <p><em>Pendidikan Sekolah Dasar saya terletak di Desa Setu Wetan, Plered, Kab. Cirebon. Pendidikan SD saya di tempuh selama 6 tahun.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $sd['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $sd['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $sd['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
            <h3 class="resume-title">Sekolah Menengah Pertama</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Allsmp as $smp) {
              ?>
                <h4><?= $smp['nama_smp']; ?></h4>
                <p><em>Pendidikan Sekolah Menengah Pertama saya terletak di Desa Setu Kulon, Plered, Kab. Cirebon. Pendidikan SMP saya di tempuh selama 3 tahun.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $smp['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $smp['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $smp['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sekolah Menengah Akhir</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Allsmk as $smk) {
              ?>
                <h4><?= $smk['nama_smk']; ?></h4>
                <p><em>Pendidikan Sekolah Menengah Atas saya mengambil di Madrasah Aliyah Negeri, karena bagi saya pendidikan agama itu nomor 1, MAN saya terletak di Desa Weru Lor, Plered, Kab. Cirebon. Pendidikan MAN saya di tempuh selama 3 tahun.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $smk['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Jurusan:</strong> <span><?= $smk['jurusan']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $smk['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $smk['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
            <h3 class="resume-title">Perguruan Tinggi</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Alluniv as $univ) {
              ?>
                <h4><?= $univ['nama_univ']; ?></h4>
                <p><em>Universitas saya terletak di Jalan Kesambi No. 202, Saya merupakan mahasiswa pindahan yang tidak dilanjutkan semester pendidikannya.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $univ['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Prodi:</strong> <span><?= $univ['prodi']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $univ['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $univ['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->