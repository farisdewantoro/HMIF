<?php foreach ($news as $news_item ) {?>
<?php echo $title; ?>

<h1><a href="<?php echo site_url('news/'.$news_item['slug']); ?>"> <?php echo $news_item['title']; ?></a> </h2>
<p><?php echo  $news_item['text']; ?> </p>
<a href="<?php echo site_url('news/update/'.$news_item['id']); ?>  ">EDIT</a>
<a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>  ">hapus</a>

<?php  } ?>
