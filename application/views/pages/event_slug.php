<div class="news">
	<div class="container">
		<div class="row">
			<div class="col-sx-6 col-md-7 " >
				<div class="isinews">

		<img src="<?php echo base_url()?>/uploads/<?php echo $event_item['picture']; ?>" class="img-responsive" alt="Responsive image">
			<h3><?php echo $event_item['title']; ?></h3>
			<p><i class="far fa-calendar-alt"></i> Posted on <?php echo $event_item['date']; ?></p>

		<hr>
		<p><?php echo $event_item['subject']; ?></p>
		</div>
		</div>


					<div class="col-sx-6 col-md-3 col-md-offset-2">
					    <div class="recentpostjudul">

					  </div>

					  <div class="siderecentpost latest">
					    <center><h3>Latest Post</h3></center>
					    <?php foreach ($events_left as $eventisi ) {?>
					    <a href="<?php echo site_url('event/'.$eventisi['slug']); ?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span><?php 	$title =$eventisi['title'];
					$title = character_limiter($title,100);
					echo $title; ?></span> <br>
					<div class="datesidepost">


					<span >   <i class="far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp; Posted on <?php echo $eventisi['date']; ?></span>
					</div>
					</a><hr>
					<?php  } ?>
					    </div>
					</div>

















		</div>
	</div>


</div>
