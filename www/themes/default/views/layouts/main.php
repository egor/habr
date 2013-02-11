<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('ext.bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'ext.bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Вход', 'url'=>array('#'), 'visible'=>Yii::app()->user->isGuest, 
                    'linkOptions'=>array(
                        'data-toggle'=>'modal',
                        'data-target'=>'#myModal',
                    ),
                ),
                array('label'=>'Личный кабинет', 'url'=>array('/userOffice'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Добавить статью', 'url'=>array('/post/add'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
    
    
    
    
   

<div class="container" id="page">


    
<?php $this->widget('AuthorizationWidget'); ?>
    
    
    
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('ext.bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
                        'homeLink'=>'<a href="/">Главная</a>',
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php// echo $content; ?>

	<div class="clear"></div>
<!--<div class="container-fluid">-->
<div>
  <div class="row-fluid">

    <div class="span8">
        <?php echo $content; ?>
        
      <!--Body content-->
    </div>
      
      
          <div class="span4">
              <?php $this->widget('UserRightMenuWidget'); ?>
              <div class="well sidebar-nav">
                  <h4>Тут будет что-то важное</h3>
                  <ul class="nav nav-list">
                      <li><a href="">Потому что я на пути создания такого робота</a></li>
                      <li><a href="">Есть много вариантов Lorem Ipsum</a></li>
                      <li><a href="">Многие думают, что Lorem Ipsum - взятый с потолка</a></li>
                      <li><a href="">Lorem Ipsum не только успешно пережил</a></li>
                      <li><a href="">Давно выяснено, что при оценке дизайна</a></li>
                      <li><a href="">В результате сгенерированный Lorem Ipsum выглядит правдоподобно</a></li>
                      <li><a href="">Классический текст Lorem Ipsum</a></li>
                  </ul>
              </div>
              
              
              <div class="well sidebar-nav">
                  <h4>Немного рекламы :)</h3>
                  <ul class="nav nav-list">
                      <li><a href="">Потому что я на пути создания такого робота</a></li>
                      <li><a href="">Есть много вариантов Lorem Ipsum</a></li>
                      <li><a href="">Многие думают, что Lorem Ipsum - взятый с потолка</a></li>
                      <li><a href="">Lorem Ipsum не только успешно пережил</a></li>
                      <li><a href="">Давно выяснено, что при оценке дизайна</a></li>
                      <li><a href="">В результате сгенерированный Lorem Ipsum выглядит правдоподобно</a></li>
                      <li><a href="">Классический текст Lorem Ipsum</a></li>
                  </ul>
              </div>
              
              
              
      <!--Sidebar content-->
    </div>
  </div>
</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
