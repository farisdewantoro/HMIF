<div class="anggotahmif">
    <h1>ANGGOTA HMIF </h1>
    <div class="container">
<div class="table-responsive">
  <table cellpadding="0" cellspacing="0" border="0">
   <tr>
     <th>No</th>
    <th>Nama</th>
    <th>Angkatan</th>

  </tr>
  <?php $i = 1; ?>
  <?php foreach ($anggotahmif as $anggota ) {?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $anggota['nama_anggota']; ?></td>
    <td><?php echo $anggota['angkatan']; ?></td>
  </tr>
<?php $i++; ?>
  <?php  } ?>

  </table>

</div>
<center>
<div class="pagination1">
  <?php echo $this->pagination->create_links(); ?>
</div></center>
</div>

</div>
