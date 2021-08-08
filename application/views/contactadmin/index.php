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
      <th>Nama Pengunjung</th>
      <th>Email Pengunjung</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allcontact as $contact) {
     ?>
      <tr>
       <td><?= $contact['nama_pengunjung']; ?></td>
       <td><?= $contact['email']; ?></td>
       <td><?= $contact['subject']; ?></td>
       <td><?= $contact['message']; ?></td>
       <td><a href="<?= base_url('contactadmin/hapus/' . $contact['id_contact']) ?>" class="btn btn-danger">Hapus</a></td>
      </tr>
     <?php } ?>


    </tbody>
   </table>
  </div>
 </div>
</div>

</div>
<!-- End of Main Content -->