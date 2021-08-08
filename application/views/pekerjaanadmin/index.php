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
      <th>Nama Pekerjaan</th>
      <th>Lama Kerja</th>
      <th>Nama Perusahaan</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allpekerjaan1 as $pekerjaan1) {
     ?>
      <tr>
       <td><?= $pekerjaan1['nama_pekerjaan']; ?></td>
       <td><?= $pekerjaan1['lama_kerja']; ?></td>
       <td><?= $pekerjaan1['nama_perusahaan']; ?></td>
       <td><a href="" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>
    </tbody>
   </table>
  </div>
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>Nama Pekerjaan</th>
      <th>Lama Kerja</th>
      <th>Nama Perusahaan</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allpekerjaan2 as $pekerjaan2) {
     ?>
      <tr>
       <td><?= $pekerjaan2['nama_pekerjaan']; ?></td>
       <td><?= $pekerjaan2['lama_kerja']; ?></td>
       <td><?= $pekerjaan2['nama_perusahaan']; ?></td>
       <td><a href="" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>
    </tbody>
   </table>
  </div>
 </div>
</div>

</div>
<!-- End of Main Content -->