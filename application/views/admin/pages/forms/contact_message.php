

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Contact Message
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Contact_message</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <br>

  <div class="contact_message">
      <div class="container">
        <div class="table-responsive">
  <table class="table table-content">



        <tr>
          <th>Action</th>
          <th>Date</th>
          <th>Email</th>
          <th>Message</th>
        </tr>
        <?php foreach ($message as $msg) { ?>
          
        <tr>
          <td> <a href="<?php echo site_url('admin/mailbox/'.$msg['no_message']); ?>">
            <i class="fa fa-search"> </i>
          </a> &nbsp;&nbsp;&nbsp;
          <a href="<?php echo site_url('admin/delete_message/'.$msg['no_message']); ?>" onclick="return confirm('DELETE MESSAGE?');">
            <i class="fa fa-trash"></i></a> </td>

          <td><?php $date=$msg['date']; $date=character_limiter($date,10); echo $date; ?></td>
          <td><?php  $mail=$msg['email']; $mail=character_limiter($mail,10); echo $mail; ?></td>
          <td><?php $inbox=$msg['message']; $inbox=character_limiter($inbox,40); echo $inbox;?></td>

        </tr>
          <?php  } ?>
  </table>
</div>
<center>
<div class="pagination1">
  <?php echo $this->pagination->create_links(); ?>
</div></center>


      </div>
  </div>




</div>
