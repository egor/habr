<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('ext.bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php $this->endWidget();

foreach ($lastPost as $post) {
    $url = '/post/'.$post->post_id;
    $text = explode('<hr>', $post->text);
    echo '<h2><a href="'.$url.'">'.$post->header.'</a></h2><span class="label">'.date('d.m.Y', $post->date).'</span>';
    echo '<div>'.$text[0].'</div>';
    $this->widget('ext.bootstrap.widgets.TbButton', array(
        'label'=>'Читать дальше',
        'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'normal', // null, 'large', 'small' or 'mini'
        'url'=>$url.'#more',
    ));
    echo '<br clear="all" /><br clear="all" />';
}