<div class="allnews">
	<div class="container">
		 <center> <h2>EVENTS</h2>
			 			<p>Himpunan Teknik Informatika Itenas mempunyai event-event menarik seperti berikut</p>
						<div class="garisbatas"></div>

					</center>
					<form class="" action="<?php echo base_url().'halaman/search'; ?>" method="post">
						<center>
							<div class="form-search">
									<input type="text" name="search" value="" placeholder="Find Events" autofocus>
									 <button type="submit" class="btn btn-default" name="submit3"><i class="fa fa-search"></i></button>
							</div></center>
					</form>

			<div class="row">

				<?php foreach ($events as $eventisi ) {?>
				<div class="col-xs-12 col-sm-6 col-md-3 ">
							<div class="allnews2">
								<a href="<?php echo site_url('event/'.$eventisi['slug']); ?>">
									<div class="thumbnail-1" style="background-image:url('<?php echo base_url() ?>uploads/<?php echo $eventisi['picture']; ?>')">
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
											<div class="readmore"> <center>
 										 			<a href="<?php echo site_url('event/'.$eventisi['slug']); ?>"> Read More</a> </center>

 										 	</div>
											<div class="hoverread">
													<ul>

														<li><i class="fa fa-arrow-left " style="font-size:11px; "></i>  </li>
														<li><i class="fa fa-circle" style="font-size:10px; "></i></li>
														<li><i class="fa fa-circle" style="font-size:10px; "></i></li>
														<li><i class="fa fa-circle" style="font-size:10px; "></i></li>
													</ul>
											</div>
							</div>
				</div>
<?php  } ?>







</div>
<center>
<div class="pagination1">
	<?php echo $this->pagination->create_links(); ?>
</div></center>
	</div>
</div>
