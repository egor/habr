<?php

class PostController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

        public function actionAdd()
        {
            $this->pageTitle = 'Добавление статьи';
            $model = new Post;
            if (isset($_POST['Post'])) {
                $model->attributes = $_POST['Post'];
                $model->date = time();
                $model->user_id = Yii::app()->user->id;
                $model->type = 0;
                $model->plus = 0;
                $model->minus = 0;
                $model->visits = 0;
                $model->favorites = 0;
                $model->category_id = 0;
                $model->visibility = 1;
                $model->approved = 0;
                if ($model->validate()) {
                    $model->save();
                    $this->render('addOk', array());
                }
            }
            $this->render('add', array('model'=>$model));
        }
        
        public function actionDetail($id)
        {            
            $model = Post::model()->findByPk($id);
            Post::model()->updateByPk($id, array('visits'=>$model->visits+1));
            $model->visits++;
            $this->render('detail', array('post'=>$model));
        }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}