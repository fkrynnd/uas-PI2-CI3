<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

</div>
<!-- /.container-fluid -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
 </div>
 <div class="card-body">
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>SD</th>
      <th>Alamat</th>
      <th>Masuk</th>
      <th>Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allsd as $sd) {
     ?>
      <tr>
       <td><?= $sd['nama_sd']; ?></td>
       <td><?= $sd['alamat']; ?></td>
       <td><?= $sd['tahun_masuk']; ?></td>
       <td><?= $sd['tahun_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikanadmin/edit/' . $sd['id_sd']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>

    </tbody>
   </table>
  </div>
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>SMP</th>
      <th>Alamat</th>
      <th>Masuk</th>
      <th>Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allsmp as $smp) {
     ?>
      <tr>
       <td><?= $smp['nama_smp']; ?></td>
       <td><?= $smp['alamat']; ?></td>
       <td><?= $smp['tahun_masuk']; ?></td>
       <td><?= $smp['tahun_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikanadmin/edit1/' . $smp['id_smp']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>

    </tbody>
   </table>
  </div>
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>SMK</th>
      <th>alamat</th>
      <th>Jurusan</th>
      <th>Masuk</th>
      <th>Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allsmk as $smk) {
     ?>
      <tr>
       <td><?= $smk['nama_smk']; ?></td>
       <td><?= $smk['alamat']; ?></td>
       <td><?= $smk['jurusan']; ?></td>
       <td><?= $smk['tahun_masuk']; ?></td>
       <td><?= $smk['tahun_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikanadmin/edit2/' . $smk['id_smk']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>

    </tbody>
   </table>
  </div>
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>UNIV</th>
      <th>Alamat</th>
      <th>Prodi</th>
      <th>Masuk</th>
      <th>Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Alluniv as $univ) {
     ?>
      <tr>
       <td><?= $univ['nama_univ']; ?></td>
       <td><?= $univ['alamat']; ?></td>
       <td><?= $univ['prodi']; ?></td>
       <td><?= $univ['tahun_masuk']; ?></td>
       <td><?= $univ['tahun_lulus']; ?></td>
       <td><a href=<?= base_url('pendidikanadmin/edit3/' . $univ['id_univ']) ?>"" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>
    </tbody>
   </table>
  </div>

 </div>
</div>

</div>
<!-- End of Main Content -->