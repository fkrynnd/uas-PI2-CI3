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
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>No Telephone</th>
      <th>Umur</th>
      <th>Hobi </th>
      <th>Status</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allabout as $about) {
     ?>
      <tr>
       <td><?= $about['tgl_lahir']; ?></td>
       <td><?= $about['alamat']; ?></td>
       <td><?= $about['no_tlp']; ?></td>
       <td><?= $about['umur']; ?></td>
       <td><?= $about['hobi']; ?></td>
       <td><?= $about['status']; ?></td>
       <td><a href="<?= base_url('aboutadmin/edit/' . $about['id_about']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>
    </tbody>
   </table>
  </div>
 </div>
</div>

</div>
<!-- End of Main Content -->