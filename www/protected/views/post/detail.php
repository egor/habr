<?php
/* @var $this PostController */

$this->breadcrumbs=array(
	$post->header,
);
?>
<h1><?php echo $post->header; ?></h1>
<span class="label"><?php echo date('d.m.Y', $post->date); ?></span><br clear="all" />
<?php
echo $post->text;
?>