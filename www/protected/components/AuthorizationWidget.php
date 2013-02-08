<?php
/**
 * AuthorizationWidget
 *
 * Вывод модального окна
 * 
 * @author Egor Rihnov <egor.developer@gmail.com>
 * @version 1.0
 * @package frontEnd
 */

class AuthorizationWidget extends CWidget
{
    public function init()
    {
        $model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
        $this->render('authorizationWidget', array('model' => $model));
    }
 

}

?>
