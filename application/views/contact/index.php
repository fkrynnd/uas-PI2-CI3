  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Jika kalian ada perlu dengan saya, silahkan bisa hubungi Contact yang ada di bawah ini, rumah saya juga terbuka lebar untuk tamu. Sebab banyak tamu sama seperti membuka pintu rejeki.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Perumahan Griya Damai Lestari 2&3, Blok K 03, Megu Cilik, Cirebon</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>fikri230600@mailcom.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 89660 660 023</p>
              </div>
              <iframe src="https://goo.gl/maps/NWDoE5mMReh49Dzk7" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="mt-3">
              <form action="<?= base_url('contact/simpancontact') ?>" method="POST">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Yourname</label>
                  <input type="text" name="nama_pengunjung" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengunjung">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Your Email</label>
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Subject</label>
                  <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="subject">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">message</label>
                  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <button type='submit' class="btn btn-primary">Save</button>
                </div>
              </form>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
