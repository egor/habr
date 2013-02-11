<?php

class UserController extends Controller
{

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionRegistration()
    {
        // тут думаю все понятно
        $model = new User();
        // Проверяем являеться ли пользователь гостем
        // ведь если он уже зарегистрирован - формы он не должен увидеть.
        if (!Yii::app()->user->isGuest) {
            throw new CException('Вы уже зарегистрированны!');
        } else {
            // Если $_POST['User'] не пустой массив - значит была отправлена форма
            // следовательно нам надо заполнить $form этими данными
            // и провести валидацию. Если валидация пройдет успешно - пользователь
            // будет зарегистрирован, не успешно - покажем ошибку на экран
            if (!empty($_POST['User'])) {
                // Заполняем $form данными которые пришли с формы
                $model->attributes = $_POST['User'];
                $model->role = 'user';
                $model->state = 1;                
                // В validate мы передаем название сценария. Оно нам может понадобиться
                // когда будем заниматься созданием правил валидации [читайте дальше]
                if ($model->validate('registration')) {
                    // Если валидация прошла успешно...
                    // Тогда проверяем свободен ли указанный логин..
                    if ($model->model()->count("email = :email", array(':email' => $model->email))) {
                        // Указанный логин уже занят. Создаем ошибку и передаем в форму
                        $model->addError('email', 'Email уже занят');
                        $this->render("registration", array('model' => $model));
                    } else {
                        $model->password = md5($model->password);
                        // Выводим страницу что "все окей"
                        $model->save();
                        $this->render("registrationOk");
                    }
                } else {
                    // Если введенные данные противоречат 
                    // правилам валидации (указаны в rules) тогда
                    // выводим форму и ошибки.
                    // [Внимание!] Нам ненадо передавать ошибку в отображение,
                    // Она автоматически после валидации цепляеться за 
                    // $form и будет [автоматически] показана на странице с 
                    // формой! Так что мы тут делаем простой рэндер.

                    $this->render("registration", array('model' => $model));
                }
            } else {
                // Если $_POST['User'] пустой массив - значит форму некто не отправлял.
                // Это значит что пользователь просто вошел на страницу регистрации
                // и ему мы должны просто показать форму.

                $this->render("registration", array('model' => $model));
            }
        }
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