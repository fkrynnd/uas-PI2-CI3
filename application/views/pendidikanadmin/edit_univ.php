<div class="mt-3">
 <form action="<?= base_url('pendidikanadmin/edituniv') ?>" method="POST">
  <input type="hidden" name="id_univ" value="<?= $univ['id_univ'] ?>">
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
   <input type="text" name="nama_univ" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sekolah" value="<?= $univ['nama_univ'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Alamat</label>
   <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $univ['alamat'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
   <input type="text" name="prodi" class="form-control" id="exampleFormControlInput1" placeholder="Jurusan" value="<?= $univ['prodi'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Masuk</label>
   <input type="number" name="tahun_masuk" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Masuk" value="<?= $univ['tahun_masuk'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Lulus</label>
   <input type="text" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Lulus" value="<?= $univ['tahun_lulus'] ?>">
  </div>
  <div class="mb-3">
   <button type='submit' class="btn btn-primary">Edit</button>
  </div>
 </form>

</div>