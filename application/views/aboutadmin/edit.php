 <div class="mt-3">
  <form action="<?= base_url('aboutadmin/editabout') ?>" method="POST">
   <input type="hidden" name="id_about" value="<?= $about['id_about'] ?>">
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
    <input type="text" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" value="<?= $about['tgl_lahir'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $about['alamat'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telephone</label>
    <input type="number" name="no_tlp" class="form-control" id="exampleFormControlInput1" placeholder="No Telephone" value="<?= $about['no_tlp'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Umur</label>
    <input type="number" name="umur" class="form-control" id="exampleFormControlInput1" placeholder="Umur" value="<?= $about['umur'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Hobi</label>
    <input type="text" name="hobi" class="form-control" id="exampleFormControlInput1" placeholder="Hobi" value="<?= $about['hobi'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Status</label>
    <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="Status" value="<?= $about['status'] ?>">
   </div>
   <div class="mb-3">
    <button type='submit' class="btn btn-primary">Edit</button>
   </div>
  </form>

 </div>