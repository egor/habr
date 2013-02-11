<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {/*
      $users=array(
      // username => password
      'demo'=>'demo',
      'admin'=>'admin',
      );
      if(!isset($users[$this->username]))
      $this->errorCode=self::ERROR_USERNAME_INVALID;
      elseif($users[$this->username]!==$this->password)
      $this->errorCode=self::ERROR_PASSWORD_INVALID;
      else
      $this->errorCode=self::ERROR_NONE;
      return !$this->errorCode; */
        // Есть ли указанный пользователь в базе данных
        $record = User::model()->findByAttributes(array('email' => $this->username));
        if ($record === null)
        // Если нету - сохраняем в errorCode ошибку.
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($record->password !== md5($this->password))
        // Проверяем совпадает ли введенный пароль с тем что у нас в базе
        // Если не совпадает - сохраняем в errorCode ошибку.
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            // Если все действий выше успешно пройдены - значит
            // пользователь действительно существует и пароль был
            // указан верно. 
            $this->_id = $record->user_id;
            // В errorCode сохраняем что ошибок нет
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}