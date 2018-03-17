<?php echo validation_errors(); ?>


<?php echo form_open('news/create'); ?>
<label for="title">judul</label>
<input type="text" name="title" value=""><br>

<label for="text">Text</label>
<textarea name="text" rows="8" cols="40"></textarea>

<button type="submit" name="submit">SUBMIT</button>


<?php echo form_close(); ?>
