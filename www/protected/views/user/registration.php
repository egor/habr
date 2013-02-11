<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->breadcrumbs=array(
	'Регистрация',
);
?>
<h1>Регистрация</h1>
<div class="form">

<?php $form=$this->beginWidget('ext.bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Поля <span class="required">*</span> обязательны.</p>

	<?php 
        echo $form->textFieldRow($model,'email');
        echo $form->textFieldRow($model,'name');
        echo $form->passwordFieldRow($model,'password');
        
        ?>

	
	<div class="form-actions">
		<?php $this->widget('ext.bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Готово',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
