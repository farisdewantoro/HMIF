
<div class="content-wrapper form-event">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      EVENTS
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <br>
  <div class="allevent">
  <div class="container">


<form class="" action="<?php echo base_url().'admin/search'; ?>" method="post">
  <center>
    <div class="form-search">
        <input type="text" name="search" value="" placeholder="Find Events">
         <button type="submit" class="btn btn-default" name="submit3"><i class="fa fa-search"></i></button>
    </div></center>
</form>

    <div class="row">
      <?php foreach ($events as $eventisi ) {?>
      <div class="col-xs-12 col-sm-6 col-md-3  ">
        <div class="allevent-content">
            <a href="<?php echo site_url('admin/event/'.$eventisi['slug']); ?>">
              <div class="thumbnail-1" style="background-image:url('<?php echo base_url() ?>uploads/event/<?php echo $eventisi['picture']; ?>')">
              </div>
            </a>
            <div class="caption">
              <?php


        ?>
             <a href="<?php echo site_url('event/'.$eventisi['slug']); ?>"><h3><?php 	$title =$eventisi['title'];
        $title = character_limiter($title,47);
        echo $title; ?></h3></a>

            <i class="far fa-calendar-alt"> <span>  Posted on <?php echo $eventisi['date']; ?></span></i>

                 <p>
                   <?php

                   $string =$eventisi['subject'];

             $string = character_limiter($string, 80);
             echo $string;
             ?>
             </p>

            </div>
            <div class="readmore">
                <a href="<?php echo site_url('admin/update/'.$eventisi['noevent']); ?>">Edit</a>
                <a href="<?php echo site_url('admin/delete/'.$eventisi['noevent']); ?>" onclick="return confirm('DELETE EVENT?');">Delete</a>



            </div>


        </div>


      </div>
<?php  } ?>

    </div>
    <center>
    <div class="pagination1">
      <?php echo $this->pagination->create_links(); ?>
    </div>
</center>


  </div>
  </div>



</div>
