<div class="mt-3">
 <form action="<?= base_url('pendidikanadmin/editsd') ?>" method="POST">
  <input type="hidden" name="id_sd" value="<?= $sd['id_sd'] ?>">
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
   <input type="text" name="nama_sd" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sekolah" value="<?= $sd['nama_sd'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Alamat</label>
   <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $sd['alamat'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Masuk</label>
   <input type="number" name="tahun_masuk" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Masuk" value="<?= $sd['tahun_masuk'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Lulus</label>
   <input type="number" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="Umur" value="<?= $sd['tahun_lulus'] ?>">
  </div>
  <div class="mb-3">
   <button type='submit' class="btn btn-primary">Edit</button>
  </div>
 </form>

</div>