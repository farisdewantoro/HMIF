<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <br>

  <div class="mail-box">
    <div class="container">
      <div class="mail-content">


      <div class="mail-identity">


        <h3>From : <?php echo $message_item['email'];   ?>
          (
          <?php echo $message_item['nama'];   ?> ) </h3>
        <p>Date : <?php echo $message_item['date']; ?></p>
        <hr>
    </div>
        <div class="subject">

          <h3>Message :</h3>
            <textarea name="name" ><?php echo $message_item['message']; ?></textarea>
        </div>
  </div>



    </div>


  </div>




</div>
