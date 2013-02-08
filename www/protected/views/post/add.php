<link rel="stylesheet" type="text/css" href="/css/editor/bootstrap-wysihtml5.css"></link>
<?php
/* @var $this PostController */

$this->breadcrumbs=array(
	'Добавить',
);
?>
<h1>Добавление статьи</h1>
<?php $form=$this->beginWidget('ext.bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'verticalForm',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<?php echo $form->textFieldRow($model,'header', array('class'=>'span12')); ?>
<?php echo $form->textAreaRow($model,'text', array('class'=>'span12 textarea', 'rows'=>10)); ?>
<?php echo $form->textFieldRow($model,'tegs', array('class'=>'span12')); ?>

<div class="form-actions">
    <?php $this->widget('ext.bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Опубликовать')); ?>
    <?php
    $this->widget('ext.bootstrap.widgets.TbButton', array(
        'label' => 'Предпросмотр',
        'url' => '#',
        'htmlOptions' => array(),
    ));
    ?>
</div>
<?php $this->endWidget(); ?>





















<script src="/js/editor/wysihtml5-0.3.0.js"></script>
<script src="/js/editor/jquery-1.7.2.min.js"></script>
<script src="/js/editor/prettify.js"></script>
<script src="/js/editor/bootstrap.min.js"></script>
<script src="/js/editor/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5();
</script>
<!--
<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>
-->