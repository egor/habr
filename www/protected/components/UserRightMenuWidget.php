<?php
/**
 * UserLeftMenuWidget
 *
 * Вывод меню справа
 * 
 * @author Egor Rihnov <egor.developer@gmail.com>
 * @version 1.0
 * @package frontEnd
 */

class UserRightMenuWidget extends CWidget
{
    public function init()
    {
        if (Yii::app()->getController()->getId() == 'post' &&
            Yii::app()->getController()->getAction()->getId() == 'add') {
            $this->render('userRightMenuWidget');
        }
        //$this->render('userRightStatWidget');
        
    }
}

?>
