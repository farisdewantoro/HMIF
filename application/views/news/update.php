<?php echo validation_errors(); ?>


<?php echo form_open('news/update/'.$news_item['id']); ?>
<label for="title">judul</label>
<input type="text" name="title" value="<?php echo $news_item['title'];?> "><br>

<label for="text">Text</label>
<textarea name="text" rows="8" cols="40"><?php echo $news_item['text'];?></textarea>

<input type="submit" name="submit" value="submit"></input>


<?php echo form_close(); ?>
