<?php

namespace app\models\auth;

use yii\base\Model;
/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends \components\auth\Auth
{

    public $email;
    public $password;
    
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['email', 'password'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }
    
    public function identityInfo(){
        return [
            'id' => 100,
            'username' => $this->email,
            'authKey' => 'adfadf',
            'accessToken' => 'adfadfa'
        ];
    }
    
}
