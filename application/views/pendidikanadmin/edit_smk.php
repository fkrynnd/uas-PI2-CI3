<div class="mt-3">
 <form action="<?= base_url('pendidikanadmin/editsmk') ?>" method="POST">
  <input type="hidden" name="id_smk" value="<?= $smk['id_smk'] ?>">
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
   <input type="text" name="nama_smk" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sekolah" value="<?= $smk['nama_smk'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Alamat</label>
   <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $smk['alamat'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
   <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1" placeholder="Jurusan" value="<?= $smk['jurusan'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Masuk</label>
   <input type="number" name="tahun_masuk" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Masuk" value="<?= $smk['tahun_masuk'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Lulus</label>
   <input type="number" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Lulus" value="<?= $smk['tahun_lulus'] ?>">
  </div>
  <div class="mb-3">
   <button type='submit' class="btn btn-primary">Edit</button>
  </div>
 </form>

</div>