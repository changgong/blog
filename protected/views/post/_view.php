<?php
/* @var $this PostController */
/* @var $data Post */
?>
<div class="entry-header">
	<h1 class="title">
		<?php echo $data->title; ?>
	</h1>
</div>
<div class="entry-content">
	<?php echo $data->content; ?>
</div>
<div class="entry-meta">
	<?php echo $data->author_id; ?>
</div>
