<?php
/* @var $this UserOfficeController */

$this->breadcrumbs=array(
	'Личный кабинет',
);
?>
<h1>Личный кабинет</h1>

<h2>Мои статьи</h2>
<?php
foreach ($userPost as $post) {
    echo '<h4><a href="/post/'.$post->post_id.'">'.$post->header.'</a></h4>';
}
$this->widget('ext.bootstrap.widgets.TbButton', array(
    'label'=>'Добавить статью',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>'/post/add',
));
?>
