<?php
/* @var $this PostController */

$this->breadcrumbs=array(
	$post->header,
);
?>
<h1><?php echo $post->header; ?></h1>
<span class="label"><?php echo date('d.m.Y H:m', $post->date); ?></span>
<span class="label"><i class="icon-eye-open"></i> <?php echo $post->visits; ?></span>
<span class="label"><i class="icon-arrow-up"></i> <?php echo ($post->plus - $post->minus); ?> <i class="icon-arrow-down"></i></span>
<span class="label"><i class="icon-star"></i> <?php echo $post->favorites; ?></span>
<span class="label"><i class="icon-comment"></i> <?php echo 0; ?></span>
<span class="label"><i class="icon-user"></i> <?php echo $post->user_id; ?></span>
<br clear="all" />
<span class="label"><i class="icon-tag"></i> <?php echo $post->tegs; ?></span>
<br clear="all" /><br clear="all" />
<?php
$text = explode('<hr>',$post->text);
echo $text[0].'<a name="more"></a>'.$text[1];
?>