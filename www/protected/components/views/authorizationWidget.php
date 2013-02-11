<?php
$form = $this->beginWidget('ext.bootstrap.widgets.TbActiveForm', array(
    'id' => 'login-form',
    'type' => 'horizontal',
    'action' => '/site/login',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>



<?php $this->beginWidget('ext.bootstrap.widgets.TbModal', array('id' => 'myModal')); ?> 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Авторизация</h4>
</div>

<div class="modal-body">






    <?php echo $form->textFieldRow($model, 'username'); ?>
    <?php echo $form->passwordFieldRow($model, 'password'); ?>
    <?php echo $form->checkBoxRow($model, 'rememberMe'); ?>

    <!--<div class="form-actions">
    <?php
    $this->widget('ext.bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => 'Login',
    ));
    ?>
    </div>-->









</div>

<div class="modal-footer">
	
		<?php echo CHtml::submitButton('Login', array('class' => 'btn btn-normal btn-primary')); ?>
	

    <?php
    $this->widget('ext.bootstrap.widgets.TbButton', array(
        'label' => 'Отмена',
        'url' => '#',
        'htmlOptions' => array('data-dismiss' => 'modal', 'class' => 'btn btn-normal'),
    ));
    ?>
</div> 
<?php $this->endWidget(); ?>


<?php $this->endWidget(); ?>    



